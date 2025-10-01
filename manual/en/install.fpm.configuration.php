<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Configuration - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.fpm.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.fpm.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.fpm.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.fpm.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.fpm.install.php">
 <link rel="next" href="https://www.php.net/manual/en/install.pecl.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.fpm.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.fpm.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.fpm.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.fpm.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.fpm.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.fpm.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.fpm.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.fpm.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.fpm.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.fpm.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.fpm.configuration.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Configuration" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Configuration - Manual" />
<meta name="twitter:description" content="Configuration" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Configuration - Manual" />
<meta itemprop="description" content="Configuration" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Configuration" />

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
        <a href="install.pecl.php">
          Installation of PECL extensions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.fpm.install.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='install.fpm.php'>FastCGI Process Manager (FPM)</a></li>      </ul>
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
            <option value='en/install.fpm.configuration.php' selected="selected">English</option>
            <option value='de/install.fpm.configuration.php'>German</option>
            <option value='es/install.fpm.configuration.php'>Spanish</option>
            <option value='fr/install.fpm.configuration.php'>French</option>
            <option value='it/install.fpm.configuration.php'>Italian</option>
            <option value='ja/install.fpm.configuration.php'>Japanese</option>
            <option value='pt_BR/install.fpm.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/install.fpm.configuration.php'>Russian</option>
            <option value='tr/install.fpm.configuration.php'>Turkish</option>
            <option value='uk/install.fpm.configuration.php'>Ukrainian</option>
            <option value='zh/install.fpm.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.fpm.configuration" class="sect1">
   <h2 class="title">Configuration</h2>
   <p class="para">
    FPM uses <var class="filename">php.ini</var> syntax for its configuration file - <var class="filename">php-fpm.conf</var>, and pool configuration files.
   </p>

   <div class="sect2">
    <h3 class="title">List of global <var class="filename">php-fpm.conf</var> directives</h3>
    <dl>
     
      <dt id="pid">
       <code class="parameter">pid</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Path to PID file. Default value: none.
       </p>
      </dd>
     
     
      <dt id="error-log">
       <code class="parameter">error_log</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Path to error log file. Default value:
        <code class="literal">#INSTALL_PREFIX#/log/php-fpm.log</code>.
        If it&#039;s set to &quot;syslog&quot;, log is sent to syslogd instead of being written in a local file.
       </p>
      </dd>
     
     
      <dt id="log-level">
       <code class="parameter">log_level</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Error log level. Possible values: alert, error, warning, notice,
        debug. Default value: notice.
       </p>
      </dd>
     
     
      <dt id="log-limit">
       <code class="parameter">log_limit</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Log limit for the logged lines which allows to log messages longer than
        1024 characters without wrapping.
        Default value: 1024.
        Available as of PHP 7.3.0.
       </p>
      </dd>
     
     
      <dt id="log-buffering">
       <code class="parameter">log_buffering</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Experimental logging without extra buffering.
        Default value: yes.
        Available as of PHP 7.3.0.
       </p>
      </dd>
     
     
      <dt id="syslog-facility">
       <code class="parameter">syslog.facility</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        used to specify what type of program is logging the message.
        Default value: daemon.
       </p>
      </dd>
     
     
      <dt id="syslog-ident">
       <code class="parameter">syslog.ident</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Prepended to every message.
        If you have multiple FPM instances running on the same server,
        you can change the default value which must suit common needs.
        Default value: php-fpm.
       </p>
      </dd>
     
     
      <dt id="emergency-restart-threshold">
       <code class="parameter">emergency_restart_threshold</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        If this number of child processes exit with SIGSEGV or SIGBUS within
        the time interval set by <code class="literal">emergency_restart_interval</code>,
        then FPM will restart. A value of 0 means &#039;Off&#039;. Default value: 0 (Off).
       </p>
      </dd>
     
     
      <dt id="emergency-restart-interval">
       <code class="parameter">emergency_restart_interval</code>
       <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      </dt>
      <dd>
       <p class="para">
        Interval of time used by <code class="literal">emergency_restart_interval</code> to determine when
        a graceful restart will be initiated. This can be useful to work around
        accidental corruptions in an accelerator&#039;s shared memory.
        Available Units: s(econds), m(inutes), h(ours), or d(ays).
        Default Unit: seconds. Default value: 0 (Off).
       </p>
      </dd>
     
     
      <dt id="process-control-timeout">
       <code class="parameter">process_control_timeout</code>
       <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      </dt>
      <dd>
       <p class="para">
        Time limit for child processes to wait for a reaction on signals from
        master. Available units: s(econds), m(inutes), h(ours), or d(ays)
        Default Unit: seconds. Default value: 0.
       </p>
      </dd>
     
     
      <dt id="process-max">
       <code class="parameter">process.max</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The maximum number of processes FPM will fork. This has been design
        to control the global number of processes when using dynamic PM
        within a lot of pools. Use it with caution.
        Default value: 0.
       </p>
      </dd>
     
     
      <dt id="process-priority">
       <code class="parameter">process.priority</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Specify the nice(2) priority to apply to the master process (only if set).
        The value can vary from -19 (highest priority) to 20 (lower priority).
        Default value: not set.
       </p>
      </dd>
     
     
      <dt id="daemonize">
       <code class="parameter">daemonize</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Send FPM to background. Set to &#039;no&#039; to keep FPM in foreground for
        debugging. Default value: yes.
       </p>
      </dd>
     
     
      <dt id="rlimit-files-master">
       <code class="parameter">rlimit_files</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Set open file descriptor rlimit for the master process.
        Default value: system defined value.
       </p>
      </dd>
     
     
      <dt id="rlimit-core-master">
       <code class="parameter">rlimit_core</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Set max core size rlimit for the master process.
        Default value: 0.
       </p>
      </dd>
     
     
      <dt id="events-mechanism">
       <code class="parameter">events.mechanism</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Specify the event mechanism FPM will use.
        The following is available: epoll, kqueue (*BSD), port (Solaris), poll, select.
        Default value: not set (auto detection preferring epoll and kqueue).
       </p>
      </dd>
     
     
      <dt id="systemd-interval">
       <code class="parameter">systemd_interval</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        When FPM is build with systemd integration, specify the interval,
        in second, between health report notification to systemd.
        Set to 0 to disable.
        Default value: 10.
       </p>
      </dd>
     
    </dl>

   </div>

   <div class="sect2">
    <h3 class="title">List of pool directives</h3>
    <p class="para">
     With FPM you can run several pools of processes with different setting.
     These are settings that can be tweaked per pool.
    </p>
    <dl>
     
      <dt id="listen">
       <code class="parameter">listen</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The address on which to accept FastCGI requests. Valid syntaxes are:
        &#039;ip.add.re.ss:port&#039;, &#039;port&#039;, &#039;/path/to/unix/socket&#039;. This option is
        mandatory for each pool.
       </p>
      </dd>
     
     
      <dt id="listen-backlog">
       <code class="parameter">listen.backlog</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Set listen(2) backlog. A value of <code class="literal">-1</code> means maximum on BSD systems.
        Default value: <code class="literal">-1</code> (FreeBSD or OpenBSD) or <code class="literal">511</code>
        (Linux and other platforms).
       </p>
      </dd>
     
     
      <dt id="listen-allowed-clients">
       <code class="parameter">listen.allowed_clients</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        List of IPv4 or IPv6 addresses of FastCGI clients which are allowed to connect. Equivalent
        to the FCGI_WEB_SERVER_ADDRS environment variable in the original PHP FastCGI (5.2.2+).
        Makes sense only with a tcp listening socket. Each address must be separated by a comma.
        If this value is left blank, connections will be accepted from any ip address.
        Default value: not set (any ip address accepted).
       </p>
      </dd>
     
     
      <dt id="listen-owner">
       <code class="parameter">listen.owner</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Set permissions for unix socket, if one is used. In Linux, read/write
        permissions must be set in order to allow connections from a web
        server. Many BSD-derived systems allow connections regardless of permissions.
        Default values: user and group are set as the running user, mode is set to 0660.
       </p>
      </dd>
     
     
      <dt id="listen-group">
       <code class="parameter">listen.group</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        See <code class="literal">listen.owner</code>.
       </p>
      </dd>
     
     
      <dt id="listen-mode">
       <code class="parameter">listen.mode</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        See <code class="literal">listen.owner</code>.
       </p>
      </dd>
     
     
      <dt id="listen-acl-users">
       <code class="parameter">listen.acl_users</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        When POSIX Access Control Lists are supported you can set them using this option.
        When set, <code class="literal">listen.owner</code> and <code class="literal">listen.group</code>
        are ignored. Value is a comma separated list of user names.
       </p>
      </dd>
     
     
      <dt id="listen-acl-groups">
       <code class="parameter">listen.acl_groups</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        See <code class="literal">listen.acl_users</code>.
        Value is a comma separated list of group names.
       </p>
      </dd>
     
     
      <dt id="listen-setfib">
       <code class="parameter">listen.setfib</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Set the associated the route table (FIB). FreeBSD only.
        Default Value: <code class="literal">-1</code>. Since PHP 8.2.0.
       </p>
      </dd>
     
     
      <dt id="user">
       <code class="parameter">user</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Unix user of FPM processes. This option is mandatory.
       </p>
      </dd>
     
     
      <dt id="group">
       <code class="parameter">group</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Unix group of FPM processes. If not set, the default user&#039;s group is
        used.
       </p>
      </dd>
     
     
      <dt id="pm">
       <code class="parameter">pm</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Choose how the process manager will control the number of child
        processes. Possible values: <code class="literal">static</code>, <code class="literal">ondemand</code>,
        <code class="literal">dynamic</code>.
        This option is mandatory.
       </p>
       <p class="para">
        <code class="literal">static</code> - the number of child processes is fixed (<code class="literal">pm.max_children</code>).
       </p>
       <p class="para">
        <code class="literal">ondemand</code> - the processes spawn on demand (when requested,
        as opposed to dynamic, where <code class="literal">pm.start_servers</code> are started
        when the service is started.
       </p>
       <p class="para">
        <code class="literal">dynamic</code> - the number of child processes is set dynamically based on the
        following directives: <code class="literal">pm.max_children</code>, <code class="literal">pm.start_servers</code>,
        <code class="literal">pm.min_spare_servers</code>, <code class="literal">pm.max_spare_servers</code>.
       </p>
      </dd>
     
     
      <dt id="pm.max-children">
       <code class="parameter">pm.max_children</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The number of child processes to be created when <code class="literal">pm</code> is set to
        <code class="literal">static</code> and the maximum number of child processes to be created
        when <code class="literal">pm</code> is set to <code class="literal">dynamic</code>. This
        option is mandatory.
       </p>
       <p class="para">
        This option sets the limit on the number of simultaneous requests that
        will be served. Equivalent to the ApacheMaxClients directive with
        mpm_prefork and to the <var class="varname">PHP_FCGI_CHILDREN</var> environment variable in the
        original PHP FastCGI.
       </p>
      </dd>
     
     
      <dt id="pm.start-servers">
       <code class="parameter">pm.start_servers</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The number of child processes created on startup.
        Used only when <code class="literal">pm</code> is set to <code class="literal">dynamic</code>.
        Default Value: (min_spare_servers + max_spare_servers) / 2.
       </p>
      </dd>
     
     
      <dt id="pm.min-spare-servers">
       <code class="parameter">pm.min_spare_servers</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The desired minimum number of idle server processes. Used only when
        <code class="literal">pm</code> is set to <code class="literal">dynamic</code>. Also
        mandatory in this case.
       </p>
      </dd>
     
     
      <dt id="pm.max-spare-servers">
       <code class="parameter">pm.max_spare_servers</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The desired maximum number of idle server processes. Used only when
        <code class="literal">pm</code> is set to <code class="literal">dynamic</code>. Also
        mandatory in this case.
       </p>
      </dd>
     
     
      <dt id="pm.max-spawn-rate">
       <code class="parameter">pm.max_spawn_rate</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The number of rate to spawn child processes at once. Used only when
        <code class="literal">pm</code> is set to <code class="literal">dynamic</code>.
        Default value: 32
       </p>
      </dd>
     
     
      <dt id="pm.process-idle-timeout">
       <code class="parameter">pm.process_idle_timeout</code>
       <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      </dt>
      <dd>
       <p class="para">
        The number of seconds after which an idle process will be killed. 
        Used only when <code class="literal">pm</code> is set to <code class="literal">ondemand</code>.
        Available units: s(econds)(default), m(inutes), h(ours), or d(ays).
        Default value: 10s.
       </p>
      </dd>
     
     
      <dt id="pm.max-requests">
       <code class="parameter">pm.max_requests</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The number of requests each child process should execute before
        respawning. This can be useful to work around memory leaks in 3rd party
        libraries. For endless request processing specify &#039;0&#039;. Equivalent to
        <var class="varname">PHP_FCGI_MAX_REQUESTS</var>. Default value: 0.
       </p>
      </dd>
     
     
      <dt id="pm.status-listen">
       <code class="parameter">pm.status_listen</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The address on which to accept FastCGI status request. This creates a new invisible pool
        that can handle requests independently. This is useful if the main pool is busy with long
        running requests because it is still possible to get the
        <a href="fpm.status.php" class="link">FPM status page</a> before finishing the long running
        requests. The syntax is the same as for <a href="install.fpm.configuration.php#listen" class="link">listen</a> directive.
        Default value: none.
       </p>
      </dd>
     
     
      <dt id="pm.status-path">
       <code class="parameter">pm.status_path</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The URI to view the <a href="fpm.status.php" class="link">FPM status page</a>. This value must
        start with a leading slash (/). If this value is not set, no URI will be recognized as
        a status page. Default value: none.
       </p>
      </dd>
     
     
      <dt id="ping.path">
       <code class="parameter">ping.path</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The ping URI to call the monitoring page of FPM. If this value is not
        set, no URI will be recognized as a ping page. This could be used to test
        from outside that FPM is alive and responding. Please note that the value must
        start with a leading slash (/).
       </p>
      </dd>
     
     
      <dt id="ping.response">
       <code class="parameter">ping.response</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        This directive may be used to customize the response to a ping
        request. The response is formatted as text/plain with a 200 response code.
        Default value: pong.
       </p>
      </dd>
     
     
      <dt id="worker-process-priority">
       <code class="parameter">process.priority</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Specify the nice(2) priority to apply to the worker process (only if set).
        The value can vary from -19 (highest priority) to 20 (lower priority).
        Default value: not set.
       </p>
      </dd>
     
     
      <dt id="process-dumpable">
       <code class="parameter">process.dumpable</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Set the process dumpable flag (PR_SET_DUMPABLE prctl) even if the process user
        or group is different than the master process user. It allows to create process
        core dump and ptrace the process for the pool user.
        Default Value: no. Since PHP 7.0.29, 7.1.17 and 7.2.5.
       </p>
      </dd>
     
     
      <dt id="prefix">
       <code class="parameter">prefix</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Specify prefix for path evaluation
       </p>
      </dd>
     
     
      <dt id="request-terminate-timeout">
       <code class="parameter">request_terminate_timeout</code>
       <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      </dt>
      <dd>
       <p class="para">
        The timeout for serving a single request after which the worker
        process will be killed. This option should be used when the &#039;max_execution_time&#039;
        ini option does not stop script execution for some reason. A value of &#039;0&#039; means
        &#039;Off&#039;. Available units: s(econds)(default), m(inutes), h(ours), or d(ays).
        Default value: 0.
       </p>
      </dd>
     
     
      <dt id="request-terminate-timeout-track-finished">
       <code class="parameter">request_terminate_timeout_track_finished</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        The timeout set by
        <a href="install.fpm.configuration.php#request-terminate-timeout" class="link">request_terminate_timeout</a> is not engaged
        after a <a href="function.fastcgi-finish-request.php" class="link">fastcgi_finish_request</a> or
        when application has finished and internal shutdown functions are being called. This
        directive will enable timeout limit to be applied unconditionally even in such cases.
        Default value: no. Since PHP 7.3.0.
       </p>
      </dd>
     
     
      <dt id="request-slowlog-timeout">
       <code class="parameter">request_slowlog_timeout</code>
       <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      </dt>
      <dd>
       <p class="para">
        The timeout for serving a single request after which a PHP backtrace
        will be dumped to the &#039;slowlog&#039; file. A value of &#039;0&#039; means &#039;Off&#039;.
        Available units: s(econds)(default), m(inutes), h(ours), or d(ays).
        Default value: 0.
       </p>
      </dd>
     
     
      <dt id="request-slowlog-trace-depth">
       <code class="parameter">request_slowlog_trace_depth</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The depth of slowlog log stack trace.
        Default value: 20. Since PHP 7.2.0.
       </p>
      </dd>
     
     
      <dt id="slowlog">
       <code class="parameter">slowlog</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The log file for slow requests. Default value:
        <code class="literal">#INSTALL_PREFIX#/log/php-fpm.log.slow</code>.
       </p>
      </dd>
     
     
      <dt id="rlimit-files">
       <code class="parameter">rlimit_files</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Set open file descriptor rlimit for child processes in this pool. Default value: system defined value.
       </p>
      </dd>
     
     
      <dt id="rlimit-core">
       <code class="parameter">rlimit_core</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Set max core size rlimit for child processes in this pool. Possible Values: &#039;unlimited&#039; or an integer greater or equal to 0.
        Default value: system defined value.
       </p>
      </dd>
     
     
      <dt id="chroot">
       <code class="parameter">chroot</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Chroot to this directory at the start. This value must be defined as
        an absolute path. When this value is not set, chroot is not used.
       </p>
      </dd>
     
     
      <dt id="chdir">
       <code class="parameter">chdir</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Chdir to this directory at the start. This value must be an absolute
        path. Default value: current directory or / when chroot.
       </p>
      </dd>
     
     
      <dt id="catch-workers-output">
       <code class="parameter">catch_workers_output</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Redirect worker stdout and stderr into main error log. If not set,
        stdout and stderr will be redirected to /dev/null according to FastCGI specs.
        Default value: no.
       </p>
      </dd>
     
     
      <dt id="decorate-workers-output">
       <code class="parameter">decorate_workers_output</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Enable the output decoration for workers output when <a href="install.fpm.configuration.php#catch-workers-output" class="link">catch_workers_output</a> is enabled.
        Default value: yes.
        Available as of PHP 7.3.0.
       </p>
      </dd>
     
     
      <dt id="clear-env">
       <code class="parameter">clear_env</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Clear environment in FPM workers.
        Prevents arbitrary environment variables from reaching FPM worker processes
        by clearing the environment in workers before env vars specified in this
        pool configuration are added.
        Default value: Yes.
       </p>
      </dd>
     
     
      <dt id="security-limit-extensions">
       <code class="parameter">security.limit_extensions</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Limits the extensions of the main script FPM will allow to parse.
        This can prevent configuration mistakes on the web server side.
        You should only limit FPM to .php extensions to prevent malicious
        users to use other extensions to execute php code.
        Default value: .php .phar
       </p>
      </dd>
     
     
      <dt id="apparmor-hat">
       <code class="parameter">apparmor_hat</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        If AppArmor is enabled, it allows to change a hat.
        Default value: not set
       </p>
      </dd>
     
     
      <dt id="access-log">
       <code class="parameter">access.log</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The access log file.
        Default value: not set
       </p>
      </dd>
     
     
      <dt id="access-format">
       <code class="parameter">access.format</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The access log format.
        Default value: <code class="literal">&quot;%R - %u %t \&quot;%m %r\&quot; %s&quot;</code>:
        <table id="fpm.configuration.access.format" class="doctable table">
         <caption><strong>Valid options</strong></caption>
         
          <thead>
           <tr>
            <th>Placeholder</th>
            <th>Description</th>
           </tr>

          </thead>

          <tbody class="tbody">
           <tr>
            <td>
             <code class="literal">%%</code>
            </td>
            <td>The <code class="literal">%</code> character</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%C</code>
            </td>
            <td>
             %CPU used by the request. It can accept the following format:
             <code class="literal">%{user}C</code> for user CPU only,
             <code class="literal">%{system}C</code> for system CPU only,
             <code class="literal">%{total}C</code> for user + system CPU (default)
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%d</code>
            </td>
            <td>
             Time taken to serve the request.
             It can accept the following formats for precision:
             <code class="literal">%{seconds}d</code> (default), <code class="literal">%{milliseconds}d</code>,
             <code class="literal">%{microseconds}d</code>
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%{<span class="replaceable">name</span>}e</code>
            </td>
            <td>
             An environment variable (same as <var class="varname"><a href="reserved.variables.environment.php" class="classname">$_ENV</a></var> or <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var>).
             A variable name must be specified within curly brackets to specify the name of the env variable.
             For example, server specifics like <code class="literal">%{REQUEST_METHOD}e</code> or
             <code class="literal">%{SERVER_PROTOCOL}e</code>, HTTP headers like
             <code class="literal">%{HTTP_HOST}e</code> or <code class="literal">%{HTTP_USER_AGENT}e</code>
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%f</code>
            </td>
            <td>Script filename</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%l</code>
            </td>
            <td>
             <code class="literal">Content-Length</code> of the request (for HTTP POST request only)
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%m</code>
            </td>
            <td>Request HTTP method</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%M</code>
            </td>
            <td>
             Peak of memory allocated by PHP.
             It can accept the following format:
             <code class="literal">%{bytes}M</code> (default), <code class="literal">%{kilobytes}M</code>
             <code class="literal">%{kilo}M</code>, <code class="literal">%{megabytes}M</code>,
             <code class="literal">%{mega}M</code>
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%n</code>
            </td>
            <td>Pool name</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%{<span class="replaceable">name</span>}o</code>
            </td>
            <td>
             Output header. The header name must be specified within curly brackets.
             For example: <code class="literal">%{Content-Type}o</code>,
             <code class="literal">%{X-Powered-By}o</code>, <code class="literal">%{Transfer-Encoding}o</code>
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%p</code>
            </td>
            <td>PID of the child that serviced the request</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%P</code>
            </td>
            <td>PID of the parent of the child that serviced the request</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%q</code>
            </td>
            <td>Query string</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%Q</code>
            </td>
            <td>
             The <code class="literal">&#039;?&#039;</code> character, or glue between <code class="literal">%q</code> and <code class="literal">%r</code>,
             if query string exists
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%r</code>
            </td>
            <td>
             Request URI without the query string,
             see <code class="literal">%q</code> and <code class="literal">%Q</code>
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%R</code>
            </td>
            <td>Remote IP address</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%s</code>
            </td>
            <td>Status (response code)</td>
           </tr>

           <tr>
            <td>
             <code class="literal">%t</code>
            </td>
            <td>
             Server time the request was received. It can
             accept a <code class="literal">strftime(3)</code> format:
             <code class="literal">%d/%b/%Y:%H:%M:%S %z</code> (default)
             The <code class="literal">strftime(3)</code> format must be encapsulated in
             a <code class="literal">%{&lt;strftime_format&gt;}t</code> tag, e.g. for a ISO8601
             formatted timestring, use:
             <code class="literal">%{%Y-%m-%dT%H:%M:%S%z}t</code>
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%T</code>
            </td>
            <td>
             Time the log was written (when the request finished). It can accept a
             <code class="literal">strftime(3)</code> format:
             <code class="literal">%d/%b/%Y:%H:%M:%S %z</code> (default).
             The <code class="literal">strftime(3)</code> format must be encapsulated in a
             <code class="literal">%{&lt;strftime_format&gt;}T</code> tag, e.g. for a ISO8601
             formatted timestring, use:
             <code class="literal">%{%Y-%m-%dT%H:%M:%S%z}T</code>
            </td>
           </tr>

           <tr>
            <td>
             <code class="literal">%u</code>
            </td>
            <td>Basic access authentication user, if specified in <code class="literal">Authorization</code> header</td>
           </tr>

          </tbody>
         
        </table>

       </p>
      </dd>
     
     
      <dt id="access.suppress-path">
       <code class="parameter">access.suppress_path</code>
       <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
      </dt>
      <dd>
       <p class="para">
        A list of request_uri values which should be filtered from the access log.
        Default value: not set. Since PHP 8.2.0.
       </p>
      </dd>
     
    </dl>
    <p class="para">
     It&#039;s possible to pass additional environment variables and update PHP settings of a certain pool.
     To do this, you need to add the following options to the pool configuration file.
     <div class="example" id="example-28">
      <p><strong>Example #1 Passing environment variables and PHP settings to a pool</strong></p>
      <div class="example-contents">
<div class="inicode"><pre class="inicode">env[HOSTNAME] = $HOSTNAME
env[PATH] = /usr/local/bin:/usr/bin:/bin
env[TMP] = /tmp
env[TMPDIR] = /tmp
env[TEMP] = /tmp

php_admin_value[sendmail_path] = /usr/sbin/sendmail -t -i -f www@my.domain.com
php_flag[display_errors] = off
php_admin_value[error_log] = /var/log/fpm-php.www.log
php_admin_flag[log_errors] = on
php_admin_value[memory_limit] = 32M</pre>
</div>
      </div>

     </div>
     PHP settings passed with <code class="literal">php_value</code> or
     <code class="literal">php_flag</code> will overwrite their previous value.
     Please note that defining
     <a href="ini.core.php#ini.disable-functions" class="link">disable_functions</a> or
     <a href="ini.core.php#ini.disable-classes" class="link">disable_classes</a> will
     not overwrite previously defined <var class="filename">php.ini</var> values,
     but will append the new value instead.
    </p>
    <p class="para">
     Settings defined with <code class="literal">php_admin_value</code> and <code class="literal">php_admin_flag</code>
     cannot be overridden with <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span>.
    </p>
    <p class="para">
     PHP settings can be set in the webserver configuration.
     <div class="example" id="example-29">
      <p><strong>Example #2 set PHP settings in nginx.conf</strong></p>
      <div class="example-contents">
<div class="inicode"><pre class="inicode">set $php_value &quot;pcre.backtrack_limit=424242&quot;;
set $php_value &quot;$php_value \n pcre.recursion_limit=99999&quot;;
fastcgi_param  PHP_VALUE $php_value;

fastcgi_param  PHP_ADMIN_VALUE &quot;open_basedir=/var/www/htdocs&quot;;</pre>
</div>
      </div>

     </div>
     <div class="caution"><strong class="caution">Caution</strong>
      <p class="para">
       Because these settings are passed to php-fpm as fastcgi headers,
       php-fpm should not be bound to a worldwide accessible address.
       Otherwise, anyone could alter the PHP configuration options.
       See also
       <a href="install.fpm.configuration.php#listen-allowed-clients" class="link">listen.allowed_clients</a>.
      </p>
     </div>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       Pools are not a security mechanism, because they do not provide full
       separation; e.g. all pools would use a single OPcache instance.
      </span>
     </p></blockquote>
    </p>
   </div>

  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/fpm/configuration.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.fpm.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.fpm.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.fpm.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122456">  <div class="votes">
    <div id="Vu122456">
    <a href="/manual/vote-note.php?id=122456&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122456">
    <a href="/manual/vote-note.php?id=122456&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122456" title="65% like this...">
    19
    </div>
  </div>
  <a href="#122456" class="name">
  <strong class="user"><em>ikrabbe</em></strong></a><a class="genanchor" href="#122456"> &para;</a><div class="date" title="2018-02-28 09:52"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122456">
<div class="phpcode"><code><span class="html">It seems there is no way to get informed about the access log format codes that are used or can be used. All I found is the source code.<br /><br />It would really help, not to have open questions when deploying php-fpm. I constantly struggle with file paths for example, but that is another topic.<br /><br />                                case '%': /* '%' */<br />                                case 'C': /* %CPU */<br />                                case 'd': /* duration µs */<br />                                case 'e': /* fastcgi env  */<br />                                case 'f': /* script */<br />                                case 'l': /* content length */<br />                                case 'm': /* method */<br />                                case 'M': /* memory */<br />                                case 'n': /* pool name */<br />                                case 'o': /* header output  */<br />                                case 'p': /* PID */<br />                                case 'P': /* PID */<br />                                case 'q': /* query_string */<br />                                case 'Q': /* '?' */<br />                                case 'r': /* request URI */<br />                                case 'R': /* remote IP address */<br />                                case 's': /* status */<br />                                case 'T':<br />                                case 't': /* time */<br />                                case 'u': /* remote user */</span></code></div>
  </div>
 </div>
  <div class="note" id="126022">  <div class="votes">
    <div id="Vu126022">
    <a href="/manual/vote-note.php?id=126022&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126022">
    <a href="/manual/vote-note.php?id=126022&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126022" title="68% like this...">
    13
    </div>
  </div>
  <a href="#126022" class="name">
  <strong class="user"><em>rob at librobert dot net</em></strong></a><a class="genanchor" href="#126022"> &para;</a><div class="date" title="2021-04-18 11:53"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126022">
<div class="phpcode"><code><span class="html">The 'include' directive that is used in php-fpm.conf is not documented here. However, this directive can also be used in the pool configurations. In the included file, the $pool variable is substituted correctly.
<br />
<br />This means that, if you have multiple pools with similar configurations, you can create a file 'default-values.inc' like so:
<br />
<br />-----
<br />listen.allowed_clients = 127.0.0.1
<br />
<br />pm = dynamic
<br />pm.max_children = X
<br />pm.min_spare_servers = X
<br />pm.max_spare_servers = X
<br />
<br />access.log = /var/log/php-fpm/$pool.access
<br />access.format = "%R %u [%t] \"%m %r\" %s %d %l"
<br />slowlog = /var/log/php-fpm/$pool.slow
<br />
<br />php_flag[short_open_tag] = off
<br />-----
<br />
<br />And then include that file in each pool configuration like so:
<br />
<br />-----
<br />[vhost1.example.com]
<br />user = www-vhost1
<br />group = www-vhost1
<br />
<br />listen = 127.0.0.1:9001
<br />
<br />include = /usr/local/etc/php-fpm.d/default-values.inc
<br />-----
<br />
<br />This makes things a bit more transparent, and it could potentially save some time if you decide to change settings.
<br />
<br />Make sure the name of the included file does not end in '.conf', because all files with that extension are loaded from php-fpm.conf.</span></code></div>
  </div>
 </div>
  <div class="note" id="114961">  <div class="votes">
    <div id="Vu114961">
    <a href="/manual/vote-note.php?id=114961&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114961">
    <a href="/manual/vote-note.php?id=114961&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114961" title="60% like this...">
    16
    </div>
  </div>
  <a href="#114961" class="name">
  <strong class="user"><em>gadnet at aqueos dot com</em></strong></a><a class="genanchor" href="#114961"> &para;</a><div class="date" title="2014-05-06 02:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114961">
<div class="phpcode"><code><span class="html">the doc is lacking a lot of things it seems.<br /><br />  The php fpm exemple config file indicate different thing, more option etc... I wonder why the main documentation is less verbose that the configuration file that user can have .. or not have ?</span></code></div>
  </div>
 </div>
  <div class="note" id="127995">  <div class="votes">
    <div id="Vu127995">
    <a href="/manual/vote-note.php?id=127995&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127995">
    <a href="/manual/vote-note.php?id=127995&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127995" title="76% like this...">
    7
    </div>
  </div>
  <a href="#127995" class="name">
  <strong class="user"><em>jon dot phpnetdonotspam at langevin dot me</em></strong></a><a class="genanchor" href="#127995"> &para;</a><div class="date" title="2022-12-08 10:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127995">
<div class="phpcode"><code><span class="html">PHP-FPM configuration page apparently doesn't see the need to specify what options are available with each version of PHP.<br /><br />It claims that pm.status_listen is a valid directive, but that directive only exists as of php 8.0.0, which is a bummer for those of us still using PHP 7.4.<br /><br />Noting this for anyone else fighting with this.</span></code></div>
  </div>
 </div>
  <div class="note" id="126422">  <div class="votes">
    <div id="Vu126422">
    <a href="/manual/vote-note.php?id=126422&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126422">
    <a href="/manual/vote-note.php?id=126422&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126422" title="68% like this...">
    6
    </div>
  </div>
  <a href="#126422" class="name">
  <strong class="user"><em>antonfedonyuk at gmail dot com</em></strong></a><a class="genanchor" href="#126422"> &para;</a><div class="date" title="2021-09-13 10:01"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126422">
<div class="phpcode"><code><span class="html">; The access log format.<br />; The following syntax is allowed<br />;  %%: the '%' character<br />;  %C: %CPU used by the request<br />;      it can accept the following format:<br />;      - %{user}C for user CPU only<br />;      - %{system}C for system CPU only<br />;      - %{total}C  for user + system CPU (default)<br />;  %d: time taken to serve the request<br />;      it can accept the following format:<br />;      - %{seconds}d (default)<br />;      - %{milliseconds}d<br />;      - %{milli}d<br />;      - %{microseconds}d<br />;      - %{micro}d<br />;  %e: an environment variable (same as $_ENV or $_SERVER)<br />;      it must be associated with embraces to specify the name of the env<br />;      variable. Some examples:<br />;      - server specifics like: %{REQUEST_METHOD}e or %{SERVER_PROTOCOL}e<br />;      - HTTP headers like: %{HTTP_HOST}e or %{HTTP_USER_AGENT}e<br />;  %f: script filename<br />;  %l: content-length of the request (for POST request only)<br />;  %m: request method<br />;  %M: peak of memory allocated by PHP<br />;      it can accept the following format:<br />;      - %{bytes}M (default)<br />;      - %{kilobytes}M<br />;      - %{kilo}M<br />;      - %{megabytes}M<br />;      - %{mega}M<br />;  %n: pool name<br />;  %o: output header<br />;      it must be associated with embraces to specify the name of the header:<br />;      - %{Content-Type}o<br />;      - %{X-Powered-By}o<br />;      - %{Transfert-Encoding}o<br />;      - ....<br />;  %p: PID of the child that serviced the request<br />;  %P: PID of the parent of the child that serviced the request<br />;  %q: the query string<br />;  %Q: the '?' character if query string exists<br />;  %r: the request URI (without the query string, see %q and %Q)<br />;  %R: remote IP address<br />;  %s: status (response code)<br />;  %t: server time the request was received<br />;      it can accept a strftime(3) format:<br />;      %d/%b/%Y:%H:%M:%S %z (default)<br />;      The strftime(3) format must be encapsulated in a %{&lt;strftime_format&gt;}t tag<br />;      e.g. for a ISO8601 formatted timestring, use: %{%Y-%m-%dT%H:%M:%S%z}t<br />;  %T: time the log has been written (the request has finished)<br />;      it can accept a strftime(3) format:<br />;      %d/%b/%Y:%H:%M:%S %z (default)<br />;      The strftime(3) format must be encapsulated in a %{&lt;strftime_format&gt;}t tag<br />;      e.g. for a ISO8601 formatted timestring, use: %{%Y-%m-%dT%H:%M:%S%z}t<br />;  %u: remote user<br />;<br />; Default: "%R - %u %t \"%m %r\" %s"<br />access.format = "%R - %u %t \"%m %r%Q%q\" %s %f %{milli}d %{kilo}M %C%%"<br /><br /><a href="https://github.com/php/php-src/blob/master/sapi/fpm/www.conf.in#L257-L318" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/master/sapi/fpm/www.conf.in#L257-L318</a></span></code></div>
  </div>
 </div>
  <div class="note" id="104172">  <div class="votes">
    <div id="Vu104172">
    <a href="/manual/vote-note.php?id=104172&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104172">
    <a href="/manual/vote-note.php?id=104172&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104172" title="60% like this...">
    9
    </div>
  </div>
  <a href="#104172" class="name">
  <strong class="user"><em>Frank DENIS</em></strong></a><a class="genanchor" href="#104172"> &para;</a><div class="date" title="2011-05-29 11:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104172">
<div class="phpcode"><code><span class="html">The default value for listen.backlog isn't exactly "unlimited".<br /><br />It's 128 on some operating systems, and -1 (which doesn't mean "unlimited" as well, but is an alias to a hard limit) on other systems.<br /><br />Check for a sysctl value like kern.somaxconn (OpenBSD) or net.core.somaxconn (Linux).<br /><br />Crank it up if you need more PHP workers than the default value. Then adjust listen.backlog in your php-fpm configuration file to the same value.<br /><br />-Frank.</span></code></div>
  </div>
 </div>
  <div class="note" id="123335">  <div class="votes">
    <div id="Vu123335">
    <a href="/manual/vote-note.php?id=123335&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123335">
    <a href="/manual/vote-note.php?id=123335&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123335" title="62% like this...">
    7
    </div>
  </div>
  <a href="#123335" class="name">
  <strong class="user"><em>frederic at juliana-multimedia dot com</em></strong></a><a class="genanchor" href="#123335"> &para;</a><div class="date" title="2018-11-12 01:21"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123335">
<div class="phpcode"><code><span class="html">With Apache, mod_proxy_fcgi and php-fpm, if you want to have a generic pool and several vhost with different php configuration, you can use the ProxyFCGISetEnvIf directive and the PHP_ADMIN_VALUE environment variable. It does not work with PHP_ADMIN_FLAG even for boolean directives.<br /><br />PHP directives must be separated by spaces and a \n.<br /><br />ProxyFCGISetEnvIf "true" PHP_ADMIN_VALUE "open_basedir=/var/www/toto/:/tmp/ \n session.save_path=/var/www/toto/session \n display_errors=On \n error_reporting=-1"</span></code></div>
  </div>
 </div>
  <div class="note" id="126421">  <div class="votes">
    <div id="Vu126421">
    <a href="/manual/vote-note.php?id=126421&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126421">
    <a href="/manual/vote-note.php?id=126421&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126421" title="75% like this...">
    2
    </div>
  </div>
  <a href="#126421" class="name">
  <strong class="user"><em>antonfedonyuk at gmail dot com</em></strong></a><a class="genanchor" href="#126421"> &para;</a><div class="date" title="2021-09-13 09:38"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126421">
<div class="phpcode"><code><span class="html">NOTE: "access.format" containing "%o" generate error in PHP 7.4 (don't tested in other versions)</span></code></div>
  </div>
 </div>
  <div class="note" id="125502">  <div class="votes">
    <div id="Vu125502">
    <a href="/manual/vote-note.php?id=125502&amp;page=install.fpm.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125502">
    <a href="/manual/vote-note.php?id=125502&amp;page=install.fpm.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125502" title="62% like this...">
    2
    </div>
  </div>
  <a href="#125502" class="name">
  <strong class="user"><em>david dot cancalon at proxeem dot fr</em></strong></a><a class="genanchor" href="#125502"> &para;</a><div class="date" title="2020-11-09 04:08"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125502">
<div class="phpcode"><code><span class="html">Be very carrefull when using ProxyFCGISetEnvIf within a Apache virtual host configuration using a shared PHP-FPM pool. Values defined like this are shared across all the Apache virtual hosts within a pool worker, may resulting in strange behaviours depending on the requests chronology.<br /><br />See full explanation here:<br /><a href="https://serverfault.com/questions/817020/stop-reusing-php-value-for-different-sites-with-php-fpm/817905#817905" rel="nofollow" target="_blank">https://serverfault.com/questions/817020/stop-reusing-php-value-for-different-sites-with-php-fpm/817905#817905</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.fpm.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.fpm.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.fpm.php">FastCGI Process Manager (FPM)</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.fpm.install.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="install.fpm.configuration.php" title="Configuration">Configuration</a>
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
