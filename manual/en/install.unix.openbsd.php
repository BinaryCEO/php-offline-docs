<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installing from packages or ports on OpenBSD - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.unix.openbsd.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.unix.openbsd.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.openbsd.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.unix.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.unix.dnf.php">
 <link rel="next" href="https://www.php.net/manual/en/install.unix.source.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.openbsd.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.unix.openbsd.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.unix.openbsd.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.unix.openbsd.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.unix.openbsd.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.unix.openbsd.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.unix.openbsd.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.unix.openbsd.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.unix.openbsd.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.unix.openbsd.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.unix.openbsd.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installing from packages or ports on OpenBSD" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installing from packages or ports on OpenBSD - Manual" />
<meta name="twitter:description" content="Installing from packages or ports on OpenBSD" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installing from packages or ports on OpenBSD - Manual" />
<meta itemprop="description" content="Installing from packages or ports on OpenBSD" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installing from packages or ports on OpenBSD" />

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
        <a href="install.unix.source.php">
          Installing from source on Unix and macOS systems &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.unix.dnf.php">
          &laquo; Installing from packages on GNU/Linux distributions that use DNF        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='install.unix.php'>Installation on Unix systems</a></li>      </ul>
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
            <option value='en/install.unix.openbsd.php' selected="selected">English</option>
            <option value='de/install.unix.openbsd.php'>German</option>
            <option value='es/install.unix.openbsd.php'>Spanish</option>
            <option value='fr/install.unix.openbsd.php'>French</option>
            <option value='it/install.unix.openbsd.php'>Italian</option>
            <option value='ja/install.unix.openbsd.php'>Japanese</option>
            <option value='pt_BR/install.unix.openbsd.php'>Brazilian Portuguese</option>
            <option value='ru/install.unix.openbsd.php'>Russian</option>
            <option value='tr/install.unix.openbsd.php'>Turkish</option>
            <option value='uk/install.unix.openbsd.php'>Ukrainian</option>
            <option value='zh/install.unix.openbsd.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.unix.openbsd" class="sect1">
 <h2 class="title">Installing from packages or ports on OpenBSD</h2>
 <p class="para">
 This section contains notes and hints specific to installing
 PHP on <a href="http://www.openbsd.org/" class="link external">&raquo;&nbsp;OpenBSD</a>.
 </p>
 <div class="sect2" id="install.unix.openbsd.packages">
  <h3 class="title">Using Binary Packages</h3>
   <p class="simpara">
    Using binary packages to install PHP on OpenBSD is the recommended
    and simplest method.  The core package has been separated from the various
    modules, and each can be installed and removed independently from the others.
    The files you need can be found on your OpenBSD CD or on the FTP site.
   </p>
   <p class="simpara">
    The main package you need to install is <var class="filename">php</var>,
    which contains the basic engine (plus fpm, gettext and iconv) and might be
    available in several versions to choose from.  Next, take a look
    at the module packages, such as <var class="filename">php-mysqli</var>
    or <var class="filename">php-imap</var>.  You need to use the <strong class="command">phpxs</strong>
    command to activate and deactivate these modules in your <var class="filename">php.ini</var>.
   </p>
   <div class="example" id="install.unix.openbsd.ports.example">
    <p><strong>Example #1 OpenBSD Package Install Example</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode"># pkg_add php
# pkg_add php-apache
# pkg_add php-mysqli
  (install the PEAR libraries)
# pkg_add pear

Follow the instructions shown with each package!

  (to remove packages)
# pkg_delete php
# pkg_delete php-apache
# pkg_delete php-mysqli
# pkg_delete pear</pre>
</div>
    </div>

   </div>
   <p class="simpara">
   Read the <a href="http://www.openbsd.org/cgi-bin/man.cgi?query=packages" class="link external">&raquo;&nbsp;packages(7)</a>
   manual page for more information about binary packages on OpenBSD.
   </p>
 </div>
 <div class="sect2" id="install.unix.openbsd.ports">
  <h3 class="title">Using Ports</h3>
  <p class="simpara">
   You can also compile up PHP from source using the <a href="http://www.openbsd.org/faq/ports/ports.html" class="link external">&raquo;&nbsp;ports tree</a>.
   However, this is only recommended for users familiar with OpenBSD.  The PHP port
   is split into core and extensions.  The
   extensions generate sub-packages for all of the supported
   PHP modules.  If you find you do not want to create some of these modules,
   use the <strong class="command">no_*</strong> FLAVOR.  For example, to skip building
   the imap module, set the FLAVOR to <strong class="command">no_imap</strong>.
  </p>
 </div>
 <div class="sect2" id="install.unix.openbsd.faq">
  <h3 class="title">Common Problems</h3>
  <ul class="itemizedlist">
   <li class="listitem">
     <span class="simpara">Apache and Nginx are no longer the default server on OpenBSD, but they can both be easily
      found in ports and packages. The new default server is also called &#039;httpd&#039;.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">The default install of httpd runs inside a
    <a href="http://www.openbsd.org/cgi-bin/man.cgi?query=chroot" class="link external">&raquo;&nbsp;chroot(2) jail</a>, which will restrict PHP scripts to
    accessing files under <var class="filename">/var/www</var>.  You will therefore need to create a
    <var class="filename">/var/www/tmp</var> directory for PHP session files to be stored, or use an
    alternative session backend.  In addition, database sockets need to be placed inside the
    jail or listen on the <var class="filename">localhost</var> interface.  If you use network functions,
    some files from <var class="filename">/etc</var> such as <var class="filename">/etc/resolv.conf</var> and
    <var class="filename">/etc/services</var> will need to be moved into <var class="filename">/var/www/etc</var>.
    The OpenBSD PEAR package automatically installs into the correct chroot directories.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     The OpenBSD package for the <a href="http://www.libgd.org/" class="link external">&raquo;&nbsp;gd</a> extension
     requires Xorg to be installed. Unless already installed at base install by
     adding the <var class="filename">xbase.tgz</var> file set, this can be added at
     post-installation (see
     <a href="https://www.openbsd.org/faq/faq4.html#FilesNeeded" class="link external">&raquo;&nbsp;OpenBSD FAQ#4</a>).
    </span>
   </li>
  </ul>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/unix/openbsd.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.unix.openbsd%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.unix.openbsd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.openbsd.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126298">  <div class="votes">
    <div id="Vu126298">
    <a href="/manual/vote-note.php?id=126298&amp;page=install.unix.openbsd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126298">
    <a href="/manual/vote-note.php?id=126298&amp;page=install.unix.openbsd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126298" title="88% like this...">
    20
    </div>
  </div>
  <a href="#126298" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126298"> &para;</a><div class="date" title="2021-08-01 04:20"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126298">
<div class="phpcode"><code><span class="html">UPDATE: OpenBSD 6.9:<br /><br />- The package "php-fpm" no longer exists. It's the default, so you can just install "php".<br />- The /var/www/tmp directory will be created automatically when you install PHP.<br />- PHP 8 is available :D as well as older versions. pkg_add will ask you which version to install.</span></code></div>
  </div>
 </div>
  <div class="note" id="117389">  <div class="votes">
    <div id="Vu117389">
    <a href="/manual/vote-note.php?id=117389&amp;page=install.unix.openbsd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117389">
    <a href="/manual/vote-note.php?id=117389&amp;page=install.unix.openbsd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117389" title="75% like this...">
    19
    </div>
  </div>
  <a href="#117389" class="name">
  <strong class="user"><em>pete att shitnami.net</em></strong></a><a class="genanchor" href="#117389"> &para;</a><div class="date" title="2015-06-02 05:27"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117389">
<div class="phpcode"><code><span class="html">A brief update: As of OpenBSD 5.7 (2015) the installation process is extremely easy. Apache httpd was replaced by Nginx, which has since been further replaced by OpenBSD's own server, aptly named 'httpd'. <br /><br />'httpd' is installed by default, everything else you can still get from packages, with a couple name changes (including Apache and Nginx.) You will be asked which version to install - at the time of writing, versions 5.3.29p1 thru 5.6.5 are available.<br /><br />#pkg_add php<br />#pkg_add php-fpm<br />#pkg_add pear<br /><br />----<br />OpenBSD disables most services by default; a blank '_flags' line overrides default 'NO' value. pkg_scripts are located in /etc/rc.d/<br />To start at boot, edit "/etc/rc.conf.local":<br /><br />  httpd_flags=<br />  pkg_scripts=php_fpm<br /><br />----<br />Example /etc/httpd.conf<br />#<br /># paths are relative to chroot - e.g, '/var/www/run/php-fpm.sock'<br />server "default" {<br />      listen on * port 80<br />      location "*.php" {<br />            fastcgi socket "/run/php-fpm.sock"<br />      }<br />      directory index index.php<br />      root "/htdocs"<br />}<br /><br />----<br />For date, timezone issues, copy /etc/localtime:<br />    $cp /etc/localtime /var/www/etc/localtime<br /><br />If 'localhost' DNS name fails to resolve, copy /etc/hosts<br />    $cp /etc/hosts /var/www/etc/hosts</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.unix.openbsd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.openbsd.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.unix.php">Installation on Unix systems</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.unix.debian.php" title="Installing from packages on Debian GNU/Linux and related distributions">Installing from packages on Debian GNU/Linux and related distributions</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.dnf.php" title="Installing from packages on GNU/Linux distributions that use DNF">Installing from packages on GNU/Linux distributions that use DNF</a>
                        </li>
                                                <li class="current">
                            <a href="install.unix.openbsd.php" title="Installing from packages or ports on OpenBSD">Installing from packages or ports on OpenBSD</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.source.php" title="Installing from source on Unix and macOS systems">Installing from source on Unix and macOS systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.commandline.php" title="CGI and command line setups">CGI and command line setups</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.apache2.php" title="Apache 2.x on Unix systems">Apache 2.x on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.nginx.php" title="Nginx 1.4.x on Unix systems">Nginx 1.4.x on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.lighttpd-14.php" title="Lighttpd 1.4 on Unix systems">Lighttpd 1.4 on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.litespeed.php" title="LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems">LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.solaris.php" title="Solaris specific installation tips">Solaris specific installation tips</a>
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
