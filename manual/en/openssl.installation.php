<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installation - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/openssl.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/openssl.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/openssl.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/openssl.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/openssl.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/openssl.configuration.php">

 <link rel="alternate" href="https://www.php.net/manual/en/openssl.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/openssl.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/openssl.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/openssl.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/openssl.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/openssl.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/openssl.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/openssl.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/openssl.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/openssl.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/openssl.installation.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installation - Manual" />
<meta name="twitter:description" content="Installation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installation - Manual" />
<meta itemprop="description" content="Installation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installation" />

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
        <a href="openssl.configuration.php">
          Runtime Configuration &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="openssl.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.openssl.php'>OpenSSL</a></li>      <li><a href='openssl.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/openssl.installation.php' selected="selected">English</option>
            <option value='de/openssl.installation.php'>German</option>
            <option value='es/openssl.installation.php'>Spanish</option>
            <option value='fr/openssl.installation.php'>French</option>
            <option value='it/openssl.installation.php'>Italian</option>
            <option value='ja/openssl.installation.php'>Japanese</option>
            <option value='pt_BR/openssl.installation.php'>Brazilian Portuguese</option>
            <option value='ru/openssl.installation.php'>Russian</option>
            <option value='tr/openssl.installation.php'>Turkish</option>
            <option value='uk/openssl.installation.php'>Ukrainian</option>
            <option value='zh/openssl.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="openssl.installation" class="section">
 <h2 class="title">Installation</h2>
 <p class="para">
  To use PHP&#039;s OpenSSL support you must also compile PHP <strong class="option configure">--with-openssl</strong>.
 </p>
 <p class="para">
  The OpenSSL library also has additional requirements for normal operation at
  run-time. Most notably, OpenSSL requires access to a random or pseudo-random
  number generator; on most Unix and Unix-like platforms (including Linux),
  this means that it must have access to a <code class="literal">/dev/urandom</code> or
  <code class="literal">/dev/random</code> device.
 </p>
 <p class="para">
  The configure option <strong class="option configure">--with-system-ciphers</strong>
  is available which causes PHP to use the system cipher list instead of a hard-coded default.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <strong>Note to Win32 Users</strong><br />
  <p class="para">
   In order for this extension to work, there are
<abbr title="Dynamic Link Library">DLL</abbr> files that must be available to the Windows
system <var class="envar">PATH</var>. For information on how to do this, see the
<abbr title="Frequently Asked Questions">FAQ</abbr> entitled &quot;<a href="faq.installation.php#faq.installation.addtopath" class="link">How do I add my PHP directory to the PATH
on Windows</a>&quot;. Although copying DLL
files from the PHP folder into the Windows system directory also works
(because the system directory is by default in the system&#039;s
<var class="envar">PATH</var>), this is not recommended.
<em>This extension requires the following files to be in the
<var class="envar">PATH</var>:</em> 
   <var class="filename">libeay32.dll</var>,
   or, as of OpenSSL 1.1, <var class="filename">libcrypto-*.dll</var>
  </p>
  <p class="para">
   Additionally, if you are planning to use the key generation and certificate
   signing functions, you will need to install a valid
   <var class="filename">openssl.cnf</var> file on your system.
   We include a sample configuration file
   in our win32 binary distributions, in the
   <var class="filename">extras/ssl</var> directory.
  </p>
  <p class="para">
   PHP will search for the <var class="filename">openssl.cnf</var> using the
   following logic:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">the <code class="literal">OPENSSL_CONF</code> environmental variable, if
      set, will be used as the path (including filename) of the configuration
      file.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">the <code class="literal">SSLEAY_CONF</code> environmental variable, if
      set, will be used as the path (including filename) of the configuration
      file.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">The file <var class="filename">openssl.cnf</var> will be assumed to be
      found in the default certificate area, as configured at the time that
      the openssl DLL was compiled.  This is usually means that the default
      filename is <var class="filename">C:\Program Files\Common Files\SSL\openssl.cnf</var> (x64)
      or <var class="filename">C:\Program Files (x86)\Common Files\SSL\openssl.cnf</var> (x86), or,
      prior to PHP 7.4.0, <var class="filename">C:\usr\local\ssl\openssl.cnf</var>.
     </span>
    </li>
   </ul>
  </p>
  <span class="simpara">
   In your installation, you need to decide whether to install the
   configuration file in the default path or
   whether to install it someplace else and use environmental variables
   (possibly on a per-virtual-host basis) to locate the configuration file.
   Note that it is possible to override the default path from the script using
   the <code class="parameter">options</code> of the functions that require a
   configuration file.
  </span>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="simpara">
    Ensure that non-privileged users are not allowed to modify <var class="filename">openssl.cnf</var>.
   </p>
  </div>
  <span class="simpara">
   As of OpenSSL 3.0.0, which is used on Windows by default as of PHP 8.2.0, several
   algorithms have been deemed legacy. Such algorithms have commonly fallen out of use,
   have been deemed insecure by the cryptography community, or something similar.
   These algorithms are still available via the legacy provider
   (<var class="filename">extras/ssl/legacy.dll</var>); its usage is described in the
   <a href="https://www.openssl.org/docs/manmaster/man5/config.html#Provider-Configuration" class="link external">&raquo;&nbsp;provider configuration</a>
   section of the OpenSSL manual.
  </span>
 </p></blockquote>

 <div class="simplesect">
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
       <td>7.4.0</td>
       <td>
        The <strong class="option configure">--with-openssl[=DIR]</strong> doesn&#039;t
        accept a directory argument anymore in favor of setting the pkg-config
        variable <var class="envar">PKG_CONFIG_PATH</var> to OpenSSL location, or by
        specifying the <var class="envar">OPENSSL_LIBS</var> and
        <var class="envar">OPENSSL_CFLAGS</var> variables.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        The OpenSSL default config path has been changed from <var class="filename">C:\usr\local\ssl</var>
        to <var class="filename">C:\Program Files\Common Files\SSL</var> and
        <var class="filename">C:\Program Files (x86)\Common Files\SSL</var>, respectively.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/configure.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fopenssl.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=openssl.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/openssl.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106115">  <div class="votes">
    <div id="Vu106115">
    <a href="/manual/vote-note.php?id=106115&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106115">
    <a href="/manual/vote-note.php?id=106115&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106115" title="59% like this...">
    50
    </div>
  </div>
  <a href="#106115" class="name">
  <strong class="user"><em>Alan</em></strong></a><a class="genanchor" href="#106115"> &para;</a><div class="date" title="2011-10-11 11:14"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106115">
<div class="phpcode"><code><span class="html">Having recently installed Apache2.2 with PHP 5.2.17 on my Windows 7 development machine, I want to pass along my findings about how to set things up to load the correct versions of the OpenSSL DLLs. Many people have posted elsewhere about the "DLL Hell" that results if the a wrong version is loaded.<br /><br />First, install Apache 2.2 and check its operation, then download the Windows binaries for PHP from <a href="http://windows.php.net/download/." rel="nofollow" target="_blank">http://windows.php.net/download/.</a> Note that according to the sidebar on that page the recommended version of PHP for use with Apache2 is currently 5.2.17, even though it is back level. Plus, this version comes with all the DLLs you need to use OpenSSL -- no need to recompile as the old PHP man page suggests.<br /><br />Having verified the PHP installation, turn on the OpenSSL support by uncommenting the line<br /><br />extension=php_openssl.dll<br /><br />in php.ini, which you will find in the PHP directory (I'll assume you made that c:/PHP). Next check the location of php_openssl.dll, which you should find in c:/PHP/ext. Also in php.ini find the key extension_dir, and change its value to c:/php/ext. Next, put this location on the end of your PATH (there's no need to reboot).<br /><br />At this point, when you start Apache it will attempt to load php_openssl.dll, but if your setup is anything like mine you will see an error. I prefer to start Apache manually, and the error appears in a dialog box: "The ordinal 4114 could not be located in the dynamic link library LIBEAY32.dll". (I'm not sure whether you would get this message if you started Apache as a service). The Apache log also contains an error message saying that php_openssl.dll cannot be loaded, though that message doesn't name libeay32.dll. Welcome to DLL Hell.<br /><br />Libeay32.dll enters the picture because php_openssl.dll depends on it (and also on ssleay32.dll). What I think happens is that Apache first tries to load php_openssl.dll programmatically from the path specified by the extension_dir key. But then, the loading of the so-called dependent DLLs is left to Windows' default mechanism. If Windows finds an incompatible version of a dependent DLL, you get the error.<br /><br />So clearly the fix is to ensure that the correct version of libeay32.dll is loaded. On my machine, at least three other processes have loaded various versions of this same DLL. They include the Mozy backup client, Windows Explorer (because Mozy installs support in Explorer) and the OpenOffice suite. My machine is quite different in this respect from a dedicated server on which one probably wants as few extraneous processes as possible.  Presumably on a server one can follow advice that suggests copying the dlls to the system32 directory, for example. But I'm not about to mess with my other programs by making system-wide changes.<br /><br />So what to do? I didn't find the available information on how Windows searches for DLLs to be very useful, mainly because I didn't understand it. But it does say that the first place Windows looks is "The directory from which the application loaded." <br /><br />To cut to the chase, after a lot of experimentation I came to a key realization -- "the application" is APACHE, not PHP. So I copied libeay32.dll to the Apache2.2/bin directory. Problem solved. No error messages and running phpinfo confirms that OpenSSL is present and enabled.<br /><br />Good luck, and stay out of DLL Hell.</span></code></div>
  </div>
 </div>
  <div class="note" id="121923">  <div class="votes">
    <div id="Vu121923">
    <a href="/manual/vote-note.php?id=121923&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121923">
    <a href="/manual/vote-note.php?id=121923&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121923" title="59% like this...">
    8
    </div>
  </div>
  <a href="#121923" class="name">
  <strong class="user"><em>epos_jk</em></strong></a><a class="genanchor" href="#121923"> &para;</a><div class="date" title="2017-11-27 04:23"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121923">
<div class="phpcode"><code><span class="html">Beginning with version 1.1.0 OpenSSL did change their libary names!<br />libeay32.dll is now libcrypto-*.dll (e.g. libcrypto-1_1-x64.dll for OpenSSL 1.1.x on 64bit windows)<br />ssleay32.dll is now libssl-*.dll (e.g. libssl-1_1-x64.dll for OpenSSL 1.1.x on 64bit windows)</span></code></div>
  </div>
 </div>
  <div class="note" id="115909">  <div class="votes">
    <div id="Vu115909">
    <a href="/manual/vote-note.php?id=115909&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115909">
    <a href="/manual/vote-note.php?id=115909&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115909" title="57% like this...">
    7
    </div>
  </div>
  <a href="#115909" class="name">
  <strong class="user"><em>jaimz at vertigolabs dot org</em></strong></a><a class="genanchor" href="#115909"> &para;</a><div class="date" title="2014-10-13 04:10"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115909">
<div class="phpcode"><code><span class="html">I just wanted to point out that when you compile with openssl and you're specifying a directory, the acinclude.m4 and aclocal.m4 use that directory as such:<br /><br />{your directory}/includes/openssl/{headerfile}<br /><br />That being said, you want to specify the directory that the includes directory is in, not the specific directory with the header files.<br /><br />THIS IS WRONG --with-openssl=/usr/local/includes/openssl <br />THIS IS RIGHT --with-openssl=/usr/local</span></code></div>
  </div>
 </div>
  <div class="note" id="122863">  <div class="votes">
    <div id="Vu122863">
    <a href="/manual/vote-note.php?id=122863&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122863">
    <a href="/manual/vote-note.php?id=122863&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122863" title="58% like this...">
    2
    </div>
  </div>
  <a href="#122863" class="name">
  <strong class="user"><em>vitoandre.doria</em></strong></a><a class="genanchor" href="#122863"> &para;</a><div class="date" title="2018-06-21 06:31"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122863">
<div class="phpcode"><code><span class="html">As pointed out here <a href="http://php.net/manual/de/reserved.variables.environment.php#98113" rel="nofollow" target="_blank">http://php.net/manual/de/reserved.variables.environment.php#98113</a> make sure that variables_order = "EGPCS" is set in your php.ini (might come without the E flag which means ignore Env variables) otherwise PHP will ignore your Environment variables. This should be part of the documentation btw...</span></code></div>
  </div>
 </div>
  <div class="note" id="126768">  <div class="votes">
    <div id="Vu126768">
    <a href="/manual/vote-note.php?id=126768&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126768">
    <a href="/manual/vote-note.php?id=126768&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126768" title="54% like this...">
    1
    </div>
  </div>
  <a href="#126768" class="name">
  <strong class="user"><em>php-net-comment at shaunc dot com</em></strong></a><a class="genanchor" href="#126768"> &para;</a><div class="date" title="2022-01-15 07:08"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126768">
<div class="phpcode"><code><span class="html">FreeBSD includes a modern version of OpenSSL as part of its base system, but doesn't appear to have a pkg-config file, so the PHP configure script can't find the libraries. When compiling PHP on FreeBSD, you should define the OPENSSL_LIBS and OPENSSL_CFLAGS environment variables before running PHP's configure. For FreeBSD 12, the following will work:<br /><br />export OPENSSL_LIBS="-L/usr -lssl -lcrypto -lz" &amp;&amp; export OPENSSL_CFLAGS="-I/usr/include" &amp;&amp; ./configure --with-openssl [...other configure options...]</span></code></div>
  </div>
 </div>
  <div class="note" id="104281">  <div class="votes">
    <div id="Vu104281">
    <a href="/manual/vote-note.php?id=104281&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104281">
    <a href="/manual/vote-note.php?id=104281&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104281" title="53% like this...">
    4
    </div>
  </div>
  <a href="#104281" class="name">
  <strong class="user"><em>Fernando rubio</em></strong></a><a class="genanchor" href="#104281"> &para;</a><div class="date" title="2011-06-05 11:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104281">
<div class="phpcode"><code><span class="html">OpenSSL and IIS<br /><br />Open php.ini<br />uncomment the following:<br />extension=php_openssl.dll<br /><br />Make sure you have config the following section pointing to your php install directory (in my case is located in a second partition at e:\php) (very recommended practice)<br /><br />; Directory in which the loadable extensions (modules) reside.<br />extension_dir = "e:/php/ext"<br /><br />Add your php directory to the PATH variable<br /><br />start&gt;run&gt;type cmd<br />on windows console type:<br />set PATH=%PATH%;e:\php<br />(remember replace e:\php with YOUR directory)<br />(note that using %path% is the same as var+=value, so the directory will be appended at the end of the variable)<br /><br />php5 come with all the dll in the zip package so if you add the php directory to the path variable, you don't need to move anything to your windows system directory (very safe for later updates, because you just replace the content of your php directory)<br /><br />After all these step you ready.. but of course you need to restart your IIS to apply changes, so<br /><br />start&gt;run&gt;inetsrv/iis.msc<br />right click on your computer<br />all task&gt;restart IIS<br /><br />done!</span></code></div>
  </div>
 </div>
  <div class="note" id="86578">  <div class="votes">
    <div id="Vu86578">
    <a href="/manual/vote-note.php?id=86578&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86578">
    <a href="/manual/vote-note.php?id=86578&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86578" title="53% like this...">
    3
    </div>
  </div>
  <a href="#86578" class="name">
  <strong class="user"><em>mtudor AT icefusion remove me DOT co uk</em></strong></a><a class="genanchor" href="#86578"> &para;</a><div class="date" title="2008-10-24 04:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86578">
<div class="phpcode"><code><span class="html">SYMPTOMS AND SETUP<br />------------------<br /><br />For anyone having problems enabling the PHP openssl extension on WINDOWS.<br /><br />I uncommented:  extension=php_openssl.dll  and installed the latest versions of ssleay.dll and libeay.dll in &lt;windows&gt;\system32.<br /><br />When I restarted my web server and examined phpinfo(), there was no "openssl" headed section (although there were references to openssl in other sections).<br /><br />I also found this error in my web server logs (&lt;apache dir&gt;/logs/ssl.log and &lt;apache dir&gt;/logs/access.log).<br /><br />PHP Warning:  PHP Startup: Unable to load dynamic library 'C:\\Program Files\\PHP\\ext\\php_openssl.dll' - The operating system cannot run %1.\r\n in Unknown on line 0<br /><br />I have PHP 5.2.6 running on Apache 2.2.3 for Windows. <br /><br />CAUSE<br />-----<br /><br />This was caused by PHP picking up the WRONG VERSIONS of libeay.dll and ssleay.dll, which were present in multiple locations on my computer.<br /><br />When any application attempts to use a dll file in windows, the system searches for this file using the following order:<br />   1. The directory from which the application loaded.<br />   2. The windows\system32 directory.<br />   3. The windows\system directory.<br />   4. The windows directory.<br />   5. The current directory.<br />   6. The directories that are listed in the PATH environment variable.<br /><br />   (<a href="http://msdn.microsoft.com/en-us/library/ms682586.aspx" rel="nofollow" target="_blank">http://msdn.microsoft.com/en-us/library/ms682586.aspx</a>)<br /><br />For PHP running under Apache, the application directory is &lt;apache dir&gt;\bin and NOT &lt;php dir&gt;.  PHP was finding OUT OF DATE versions of libeay.dll and ssleay.dll in &lt;apache dir&gt;\bin (probably installed when I enabled SSL support in my web server).  Because of this, the latest versions in windows\system32 were never reached.<br /><br />NOTE: Although my problem was caused by an Apache2 specific configuration, I can imagine others might face this problem if, say, they install the openssl dlls in the PHP directory and add this directory to the PATH.  I haven't checked it but I would imagine if another directory in the path contains outdated openssl dlls and this is listed before the PHP directory, a similar situation would occur.<br /><br />SOLUTION<br />--------<br /><br />Either replace the dlls in the first location on the search order, or, as I did, you can install the latest openssl dlls in the the windows system32 directory and just rename to .old the ssleay.dll and libeay.dll files in the search order locations before windows\system32.<br /><br />Hope that helps others who might be stuck with this.<br /><br />Mark.</span></code></div>
  </div>
 </div>
  <div class="note" id="116096">  <div class="votes">
    <div id="Vu116096">
    <a href="/manual/vote-note.php?id=116096&amp;page=openssl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116096">
    <a href="/manual/vote-note.php?id=116096&amp;page=openssl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116096" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#116096" class="name">
  <strong class="user"><em>anrdaemon at freemail dot ru</em></strong></a><a class="genanchor" href="#116096"> &para;</a><div class="date" title="2014-11-08 11:16"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116096">
<div class="phpcode"><code><span class="html">If you want to configure Apache2 under Windows to use OpenSSL - please, for the love of God, do NOT copy around, or even worse - overwrite any DLL's.<br />First, modern Apache2 is shipped with relevant libraries, second - even if, for some reason, it can't find the right now - you can TELL it to use the right ones.<br />LoadLibrary.<br />Yes.<br />That simple.<br /><br />LoadLibrary C:/apache2/bin/libeay32.dll<br />LoadLibrary C:/apache2/bin/ssleay32.dll<br />LoadLibrary C:/php5/php5ts.dll<br />LoadModule php5_module C:/php5/php5apache2_4.dll</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=openssl.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/openssl.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="openssl.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="openssl.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="openssl.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="openssl.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="openssl.resources.php" title="Resource Types">Resource Types</a>
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
