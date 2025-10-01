<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Example listing - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/indexes.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/indexes.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/indexes.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/indexes.php">
 <link rel="prev" href="https://www.php.net/manual/en/indexes.functions.php">
 <link rel="next" href="https://www.php.net/manual/en/doc.changelog.php">

 <link rel="alternate" href="https://www.php.net/manual/en/indexes.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/indexes.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/indexes.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/indexes.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/indexes.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/indexes.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/indexes.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/indexes.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/indexes.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/indexes.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/indexes.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Example listing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Example listing - Manual" />
<meta name="twitter:description" content="Example listing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Example listing - Manual" />
<meta itemprop="description" content="Example listing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Example listing" />

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
        <a href="doc.changelog.php">
          Changelog &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="indexes.functions.php">
          &laquo; Function and Method listing        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='indexes.php'>Index listing</a></li>      </ul>
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
            <option value='en/indexes.examples.php' selected="selected">English</option>
            <option value='de/indexes.examples.php'>German</option>
            <option value='es/indexes.examples.php'>Spanish</option>
            <option value='fr/indexes.examples.php'>French</option>
            <option value='it/indexes.examples.php'>Italian</option>
            <option value='ja/indexes.examples.php'>Japanese</option>
            <option value='pt_BR/indexes.examples.php'>Brazilian Portuguese</option>
            <option value='ru/indexes.examples.php'>Russian</option>
            <option value='tr/indexes.examples.php'>Turkish</option>
            <option value='uk/indexes.examples.php'>Ukrainian</option>
            <option value='zh/indexes.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="indexes.examples" class="section">
 <h2 class="title">Example listing</h2>
  <p class="para">List of all the examples in the manual</p>
  <ul class='gen-index index-for-examples'><li><a href="introduction.php#example-1" class="index">Example#0 - An introductory example</a></li>
<li><a href="tutorial.firstpage.php#example-2" class="index">Example#1 - Our first PHP script: hello.php</a></li>
<li><a href="tutorial.firstpage.php#example-3" class="index">Example#2 - Get system information from PHP</a></li>
<li><a href="tutorial.useful.php#example-4" class="index">Example#3 - Printing a variable (Array element)</a></li>
<li><a href="tutorial.useful.php#example-5" class="index">Example#4 - Example using control
     structures and functions</a></li>
<li><a href="tutorial.useful.php#example-6" class="index">Example#5 - Mixing both HTML and PHP modes</a></li>
<li><a href="tutorial.forms.php#example-7" class="index">Example#6 - A simple HTML form</a></li>
<li><a href="tutorial.forms.php#example-8" class="index">Example#7 - Printing data from our form</a></li>
<li><a href="install.unix.debian.php#install.unix.debian.apt.example" class="index">Example#8 - Debian Install Example with Apache 2</a></li>
<li><a href="install.unix.debian.php#install.unix.debian.apt.example2" class="index">Example#9 - Stopping and starting Apache once PHP is installed</a></li>
<li><a href="install.unix.debian.php#install.unix.debian.config.example" class="index">Example#10 - Methods for listing additional PHP packages</a></li>
<li><a href="install.unix.debian.php#install.unix.debian.config.example2" class="index">Example#11 - Install PHP with MySQL, cURL</a></li>
<li><a href="install.unix.dnf.php#install.unix.dnf.example" class="index">Example#12 - DNF Install Example</a></li>
<li><a href="install.unix.dnf.php#install.unix.dnf.example2" class="index">Example#13 - Restarting Apache once PHP is installed</a></li>
<li><a href="install.unix.dnf.php#install.unix.dnf.config.example" class="index">Example#14 - Methods for listing additional PHP packages</a></li>
<li><a href="install.unix.dnf.php#install.unix.dnf.config.example2" class="index">Example#15 - Install PHP with MySQL, GD</a></li>
<li><a href="install.unix.openbsd.php#install.unix.openbsd.ports.example" class="index">Example#16 - OpenBSD Package Install Example</a></li>
<li><a href="install.unix.lighttpd-14.php#example-18" class="index">Example#17 - Partial lighttpd.conf</a></li>
<li><a href="install.unix.lighttpd-14.php#example-19" class="index">Example#18 - Spawning FastCGI Responders</a></li>
<li><a href="install.unix.lighttpd-14.php#example-20" class="index">Example#19 - Connecting to remote php-fastcgi instances</a></li>
<li><a href="install.windows.recommended.php#example-21" class="index">Example#20 - Recommended OpCache configuration</a></li>
<li><a href="install.windows.recommended.php#example-22" class="index">Example#21 - Recommended WinCache configuration</a></li>
<li><a href="install.windows.apache2.php#example-23" class="index">Example#22 - PHP and Apache 2.x as handler</a></li>
<li><a href="install.windows.apache2.php#example-24" class="index">Example#23 - PHP and Apache 2.x as CGI</a></li>
<li><a href="install.windows.apache2.php#example-25" class="index">Example#24 - Configure Apache to run PHP as FastCGI</a></li>
<li><a href="install.windows.iis.php#example-26" class="index">Example#25 - Command line to configure IIS and PHP</a></li>
<li><a href="install.windows.commandline.php#example-27" class="index">Example#26 - Registry changes</a></li>
<li><a href="install.fpm.configuration.php#example-28" class="index">Example#27 - Passing environment variables and PHP settings to a pool</a></li>
<li><a href="install.fpm.configuration.php#example-29" class="index">Example#28 - set PHP settings in nginx.conf</a></li>
<li><a href="install.pecl.windows.php#example-30" class="index">Example#29 - phpinfo
      call</a></li>
<li><a href="install.composer.intro.php#example-31" class="index">Example#30 - composer.json that requires a single package</a></li>
<li><a href="install.pie.intro.php#example-32" class="index">Example#31 - Installing the MongoDB extension with PIE</a></li>
<li><a href="configuration.file.php#example-33" class="index">Example#32 - php.ini Environment Variables</a></li>
<li><a href="configuration.file.php#example-34" class="index">Example#33 - php.ini example</a></li>
<li><a href="configuration.changes.php#example-35" class="index">Example#34 - Apache configuration example</a></li>
<li><a href="language.basic-syntax.phptags.php#example-36" class="index">Example#35 - PHP Opening and Closing Tags</a></li>
<li><a href="language.basic-syntax.phptags.php#example-37" class="index">Example#36 - PHP Code Only File</a></li>
<li><a href="language.basic-syntax.phpmode.php#example-38" class="index">Example#37 - Embedding PHP in HTML</a></li>
<li><a href="language.basic-syntax.phpmode.php#example-39" class="index">Example#38 - Advanced escaping using conditions</a></li>
<li><a href="language.basic-syntax.instruction-separation.php#example-40" class="index">Example#39 - Example showing the closing tag encompassing the trailing newline</a></li>
<li><a href="language.basic-syntax.instruction-separation.php#example-41" class="index">Example#40 - Examples of entering and exiting the PHP parser</a></li>
<li><a href="language.basic-syntax.comments.php#example-42" class="index">Example#41 - Comments</a></li>
<li><a href="language.basic-syntax.comments.php#example-43" class="index">Example#42 - One Line Comments</a></li>
<li><a href="language.types.intro.php#example-44" class="index">Example#43 - Different Types</a></li>
<li><a href="language.types.boolean.php#example-45" class="index">Example#44 - Casting to Boolean</a></li>
<li><a href="language.types.integer.php#example-46" class="index">Example#45 - Integer literals</a></li>
<li><a href="language.types.integer.php#example-47" class="index">Example#46 - Integer overflow</a></li>
<li><a href="language.types.integer.php#example-48" class="index">Example#47 - Divisions</a></li>
<li><a href="language.types.integer.php#example-49" class="index">Example#48 - Casting from Float</a></li>
<li><a href="language.types.float.php#example-50" class="index">Example#49 - Comparing Floats</a></li>
<li><a href="language.types.string.php#example-51" class="index">Example#50 - Syntax Variants</a></li>
<li><a href="language.types.string.php#example-52" class="index">Example#51 - Basic Heredoc example as of PHP 7.3.0</a></li>
<li><a href="language.types.string.php#example-53" class="index">Example#52 - Closing identifier must not be indented further than any lines of the body</a></li>
<li><a href="language.types.string.php#example-54" class="index">Example#53 - Different indentation for body (spaces) closing identifier</a></li>
<li><a href="language.types.string.php#example-55" class="index">Example#54 - Continuing an expression after a closing identifier</a></li>
<li><a href="language.types.string.php#example-56" class="index">Example#55 - Closing identifier in body of the string tends to cause ParseError</a></li>
<li><a href="language.types.string.php#example-57" class="index">Example#56 - Invalid example, prior to PHP 7.3.0</a></li>
<li><a href="language.types.string.php#example-58" class="index">Example#57 - Valid example, even prior to PHP 7.3.0</a></li>
<li><a href="language.types.string.php#example-59" class="index">Example#58 - Heredoc string quoting example</a></li>
<li><a href="language.types.string.php#example-60" class="index">Example#59 - Heredoc in arguments example</a></li>
<li><a href="language.types.string.php#example-61" class="index">Example#60 - Using Heredoc to initialize static values</a></li>
<li><a href="language.types.string.php#example-62" class="index">Example#61 - Using double quotes in Heredoc</a></li>
<li><a href="language.types.string.php#example-63" class="index">Example#62 - Nowdoc string quoting example</a></li>
<li><a href="language.types.string.php#example-64" class="index">Example#63 - Nowdoc string quoting example with variables</a></li>
<li><a href="language.types.string.php#example-65" class="index">Example#64 - Static data example</a></li>
<li><a href="language.types.string.php#example-66" class="index">Example#65 - String Interpolation</a></li>
<li><a href="language.types.string.php#example-67" class="index">Example#66 - Interpolating the value of the first dimension of an array or property</a></li>
<li><a href="language.types.string.php#example-68" class="index">Example#67 - Negative numeric indices</a></li>
<li><a href="language.types.string.php#example-69" class="index">Example#68 - Curly Syntax</a></li>
<li><a href="language.types.string.php#example-70" class="index">Example#69 - Some string examples</a></li>
<li><a href="language.types.string.php#example-71" class="index">Example#70 - Example of Illegal String Offsets</a></li>
<li><a href="language.types.numeric-strings.php#example-72" class="index">Example#71 - Scientific Notation Comparisons</a></li>
<li><a href="language.types.array.php#example-73" class="index">Example#72 - A simple array</a></li>
<li><a href="language.types.array.php#example-74" class="index">Example#73 - Type Casting and Overwriting example</a></li>
<li><a href="language.types.array.php#example-75" class="index">Example#74 - Mixed int and string keys</a></li>
<li><a href="language.types.array.php#example-76" class="index">Example#75 - Indexed arrays without key</a></li>
<li><a href="language.types.array.php#example-77" class="index">Example#76 - Keys not on all elements</a></li>
<li><a href="language.types.array.php#example-78" class="index">Example#77 - Complex Type Casting and Overwriting example</a></li>
<li><a href="language.types.array.php#example-79" class="index">Example#78 - Negative index example</a></li>
<li><a href="language.types.array.php#example-80" class="index">Example#79 - Accessing array elements</a></li>
<li><a href="language.types.array.php#example-81" class="index">Example#80 - Array dereferencing</a></li>
<li><a href="language.types.array.php#example-82" class="index">Example#81 - Using Square Brackets with Arrays</a></li>
<li><a href="language.types.array.php#example-83" class="index">Example#82 - Array Destructuring</a></li>
<li><a href="language.types.array.php#example-84" class="index">Example#83 - Array Destructuring in Foreach</a></li>
<li><a href="language.types.array.php#example-85" class="index">Example#84 - Ignoring Elements</a></li>
<li><a href="language.types.array.php#example-86" class="index">Example#85 - Destructuring Associative Arrays</a></li>
<li><a href="language.types.array.php#example-87" class="index">Example#86 - Swapping Two Variable</a></li>
<li><a href="language.types.array.php#example-88" class="index">Example#87 - Unsetting Intermediate Elements</a></li>
<li><a href="language.types.array.php#example-89" class="index">Example#88 - Key Quoting</a></li>
<li><a href="language.types.array.php#example-90" class="index">Example#89 - More Examples</a></li>
<li><a href="language.types.array.php#example-91" class="index">Example#90 - Converting to an Array</a></li>
<li><a href="language.types.array.php#example-92" class="index">Example#91 - Casting an Object to an Array</a></li>
<li><a href="language.types.array.php#example-93" class="index">Example#92 - Simple array unpacking</a></li>
<li><a href="language.types.array.php#example-94" class="index">Example#93 - Array unpacking with duplicate key</a></li>
<li><a href="language.types.array.php#example-95" class="index">Example#94 - Array Versatility</a></li>
<li><a href="language.types.array.php#example-96" class="index">Example#95 - Using array()</a></li>
<li><a href="language.types.array.php#language.types.array.examples.loop" class="index">Example#96 - Collection</a></li>
<li><a href="language.types.array.php#language.types.array.examples.changeloop" class="index">Example#97 - Changing element in the loop</a></li>
<li><a href="language.types.array.php#example-99" class="index">Example#98 - One-based index</a></li>
<li><a href="language.types.array.php#example-100" class="index">Example#99 - Filling an array</a></li>
<li><a href="language.types.array.php#example-101" class="index">Example#100 - Sorting an array</a></li>
<li><a href="language.types.array.php#example-102" class="index">Example#101 - Recursive and multi-dimensional arrays</a></li>
<li><a href="language.types.array.php#example-103" class="index">Example#102 - Array Copying</a></li>
<li><a href="language.types.object.php#example-104" class="index">Example#103 - Object Construction</a></li>
<li><a href="language.types.object.php#example-105" class="index">Example#104 - Casting to an Object</a></li>
<li><a href="language.types.object.php#example-106" class="index">Example#105 - (object) cast</a></li>
<li><a href="language.types.callable.php#example-107" class="index">Example#106 - Callback function examples</a></li>
<li><a href="language.types.callable.php#example-108" class="index">Example#107 - Callback example using a Closure</a></li>
<li><a href="language.types.iterable.php#example-109" class="index">Example#108 - Iterable generator return type example</a></li>
<li><a href="language.types.declarations.php#example-110" class="index">Example#109 - Typed pass-by-reference Parameters</a></li>
<li><a href="language.types.declarations.php#example-111" class="index">Example#110 - Old way to make arguments nullable</a></li>
<li><a href="language.types.declarations.php#example-112" class="index">Example#111 - Basic class type declaration</a></li>
<li><a href="language.types.declarations.php#example-113" class="index">Example#112 - Basic interface type declaration</a></li>
<li><a href="language.types.declarations.php#example-114" class="index">Example#113 - Basic return type declaration</a></li>
<li><a href="language.types.declarations.php#example-115" class="index">Example#114 - Returning an object</a></li>
<li><a href="language.types.declarations.php#example-116" class="index">Example#115 - Nullable argument type declaration</a></li>
<li><a href="language.types.declarations.php#example-117" class="index">Example#116 - Nullable return type declaration</a></li>
<li><a href="language.types.declarations.php#example-118" class="index">Example#117 - Class property type declaration</a></li>
<li><a href="language.types.declarations.php#example-119" class="index">Example#118 - Strict typing for arguments values</a></li>
<li><a href="language.types.declarations.php#example-120" class="index">Example#119 - Coercive typing for argument values</a></li>
<li><a href="language.types.declarations.php#example-121" class="index">Example#120 - Strict typing for return values</a></li>
<li><a href="language.types.type-juggling.php#example-122" class="index">Example#121 - Example of types being coerced into a type part of the union</a></li>
<li><a href="language.types.type-juggling.php#example-123" class="index">Example#122 - Type Casting</a></li>
<li><a href="language.types.type-juggling.php#example-124" class="index">Example#123 - Different Casting Mechanisms</a></li>
<li><a href="language.types.type-juggling.php#example-125" class="index">Example#124 - Using Array Offset with a String</a></li>
<li><a href="language.variables.basics.php#example-126" class="index">Example#125 - Valid variable names</a></li>
<li><a href="language.variables.basics.php#example-127" class="index">Example#126 - Invalid variable names</a></li>
<li><a href="language.variables.basics.php#example-128" class="index">Example#127 - Accessing obscure variable names</a></li>
<li><a href="language.variables.basics.php#example-129" class="index">Example#128 - Default value of an uninitialized variable</a></li>
<li><a href="language.variables.basics.php#example-130" class="index">Example#129 - Autovivification of an array from an undefined variable</a></li>
<li><a href="language.variables.scope.php#example-131" class="index">Example#130 - Example of global variable scope</a></li>
<li><a href="language.variables.scope.php#example-132" class="index">Example#131 - Example of local variable scope</a></li>
<li><a href="language.variables.scope.php#example-133" class="index">Example#132 - Using global</a></li>
<li><a href="language.variables.scope.php#example-134" class="index">Example#133 - Using $GLOBALS instead of global</a></li>
<li><a href="language.variables.scope.php#example-135" class="index">Example#134 - Example demonstrating superglobals and scope</a></li>
<li><a href="language.variables.scope.php#example-136" class="index">Example#135 - Example demonstrating need for static variables</a></li>
<li><a href="language.variables.scope.php#example-137" class="index">Example#136 - Example use of static variables</a></li>
<li><a href="language.variables.scope.php#example-138" class="index">Example#137 - Static variables with recursive functions</a></li>
<li><a href="language.variables.scope.php#example-139" class="index">Example#138 - Declaring static variables</a></li>
<li><a href="language.variables.scope.php#example-140" class="index">Example#139 - Static variables in anonymous functions</a></li>
<li><a href="language.variables.scope.php#example-141" class="index">Example#140 - Usage of static Variables in Inherited Methods</a></li>
<li><a href="language.variables.variable.php#example-142" class="index">Example#141 - Variable property example</a></li>
<li><a href="language.variables.external.php#example-143" class="index">Example#142 - A simple HTML form</a></li>
<li><a href="language.variables.external.php#example-144" class="index">Example#143 - Accessing data from a simple POST HTML form</a></li>
<li><a href="language.variables.external.php#example-145" class="index">Example#144 - More complex form variables</a></li>
<li><a href="language.variables.external.php#example-146" class="index">Example#145 - A setcookie example</a></li>
<li><a href="language.constants.php#example-147" class="index">Example#146 - Valid and invalid constant names</a></li>
<li><a href="language.constants.syntax.php#example-148" class="index">Example#147 - Defining Constants</a></li>
<li><a href="language.constants.syntax.php#example-149" class="index">Example#148 - Defining Constants using the const keyword</a></li>
<li><a href="language.operators.precedence.php#example-150" class="index">Example#149 - Associativity</a></li>
<li><a href="language.operators.precedence.php#example-151" class="index">Example#150 - Explicit Precedence</a></li>
<li><a href="language.operators.precedence.php#example-152" class="index">Example#151 - Undefined order of evaluation</a></li>
<li><a href="language.operators.precedence.php#example-153" class="index">Example#152 - +, - and . precedence</a></li>
<li><a href="language.operators.precedence.php#example-154" class="index">Example#153 - Prior to PHP 8, +, - and . had the same precedence</a></li>
<li><a href="language.operators.arithmetic.php#example-155" class="index">Example#154 - The Modulo Operator</a></li>
<li><a href="language.operators.increment.php#example-156" class="index">Example#155 - Examples of Increment/Decrement</a></li>
<li><a href="language.operators.increment.php#example-157" class="index">Example#156 - PERL string increment example</a></li>
<li><a href="language.operators.increment.php#example-158" class="index">Example#157 - Alphanumerical string converted to float</a></li>
<li><a href="language.operators.assignment.php#example-159" class="index">Example#158 - Nested Assignments</a></li>
<li><a href="language.operators.assignment.php#example-160" class="index">Example#159 - Combined Assignments</a></li>
<li><a href="language.operators.assignment.php#example-161" class="index">Example#160 - Assigning by reference</a></li>
<li><a href="language.operators.assignment.php#example-162" class="index">Example#161 - new Operator By-Reference</a></li>
<li><a href="language.operators.bitwise.php#example-163" class="index">Example#162 - Bitwise AND, OR and XOR operations on integers</a></li>
<li><a href="language.operators.bitwise.php#example-164" class="index">Example#163 - Bitwise XOR operations on strings</a></li>
<li><a href="language.operators.bitwise.php#example-165" class="index">Example#164 - Bit shifting on integers</a></li>
<li><a href="language.operators.comparison.php#example-166" class="index">Example#165 - Comparison Operators</a></li>
<li><a href="language.operators.comparison.php#example-167" class="index">Example#166 - Boolean/null comparison</a></li>
<li><a href="language.operators.comparison.php#example-168" class="index">Example#167 - Transcription of standard array comparison</a></li>
<li><a href="language.operators.comparison.php#example-169" class="index">Example#168 - Assigning a default value</a></li>
<li><a href="language.operators.comparison.php#example-170" class="index">Example#169 - Non-obvious Ternary Behaviour</a></li>
<li><a href="language.operators.comparison.php#example-171" class="index">Example#170 - Short-ternary chaining</a></li>
<li><a href="language.operators.comparison.php#example-172" class="index">Example#171 - Assigning a default value</a></li>
<li><a href="language.operators.comparison.php#example-173" class="index">Example#172 - Nesting null coalescing operator</a></li>
<li><a href="language.operators.errorcontrol.php#example-174" class="index">Example#173 - Intentional file error</a></li>
<li><a href="language.operators.errorcontrol.php#example-175" class="index">Example#174 - Suppressing Expressions</a></li>
<li><a href="language.operators.execution.php#example-176" class="index">Example#175 - Backtick Operator</a></li>
<li><a href="language.operators.logical.php#example-177" class="index">Example#176 - Logical operators illustrated</a></li>
<li><a href="language.operators.string.php#example-178" class="index">Example#177 - String Concatenating</a></li>
<li><a href="language.operators.array.php#example-179" class="index">Example#178 - Array Append Operator</a></li>
<li><a href="language.operators.array.php#example-180" class="index">Example#179 - Comparing arrays</a></li>
<li><a href="language.operators.type.php#example-181" class="index">Example#180 - Using instanceof with classes</a></li>
<li><a href="language.operators.type.php#example-182" class="index">Example#181 - Using instanceof with inherited classes</a></li>
<li><a href="language.operators.type.php#example-183" class="index">Example#182 - Using instanceof to check if object is not an
    instanceof a class</a></li>
<li><a href="language.operators.type.php#example-184" class="index">Example#183 - Using instanceof with interfaces</a></li>
<li><a href="language.operators.type.php#example-185" class="index">Example#184 - Using instanceof with other variables</a></li>
<li><a href="language.operators.type.php#example-186" class="index">Example#185 - Using instanceof to test other variables</a></li>
<li><a href="language.operators.type.php#example-187" class="index">Example#186 - Using instanceof to test constants</a></li>
<li><a href="language.operators.type.php#example-188" class="index">Example#187 - Using instanceof with an arbitrary expression</a></li>
<li><a href="control-structures.foreach.php#example-189" class="index">Example#188 - Common foreach usages</a></li>
<li><a href="control-structures.foreach.php#example-190" class="index">Example#189 - Iterate a constant array's values by reference</a></li>
<li><a href="control-structures.switch.php#example-191" class="index">Example#190 - switch structure</a></li>
<li><a href="control-structures.match.php#example-193" class="index">Example#191 - Basic match usage</a></li>
<li><a href="control-structures.match.php#example-194" class="index">Example#192 - Example of using match with comparison operators</a></li>
<li><a href="control-structures.match.php#example-192" class="index">Example#193 - Structure of a match expression</a></li>
<li><a href="control-structures.match.php#example-195" class="index">Example#194 - Example of an unhandled match expression</a></li>
<li><a href="control-structures.match.php#example-196" class="index">Example#195 - Using a generalized match expressions to branch on integer ranges</a></li>
<li><a href="control-structures.match.php#example-197" class="index">Example#196 - Using a generalized match expressions to branch on string content</a></li>
<li><a href="control-structures.declare.php#example-198" class="index">Example#197 - Tick usage example</a></li>
<li><a href="control-structures.declare.php#example-199" class="index">Example#198 - Declaring an encoding for the script</a></li>
<li><a href="function.include.php#example-200" class="index">Example#199 - Basic include example</a></li>
<li><a href="function.include.php#example-201" class="index">Example#200 - Including within functions</a></li>
<li><a href="function.include.php#example-202" class="index">Example#201 - include through HTTP</a></li>
<li><a href="function.include.php#example-203" class="index">Example#202 - Comparing return value of include</a></li>
<li><a href="function.include.php#example-204" class="index">Example#203 - include and the return statement</a></li>
<li><a href="function.include.php#example-205" class="index">Example#204 - Using output buffering to include a PHP file into a string</a></li>
<li><a href="control-structures.goto.php#example-206" class="index">Example#205 - goto example</a></li>
<li><a href="control-structures.goto.php#example-207" class="index">Example#206 - goto loop example</a></li>
<li><a href="control-structures.goto.php#example-208" class="index">Example#207 - This will not work</a></li>
<li><a href="functions.user-defined.php#example-209" class="index">Example#208 - Declaring a new function named foo</a></li>
<li><a href="functions.user-defined.php#example-210" class="index">Example#209 - Conditional functions</a></li>
<li><a href="functions.user-defined.php#example-211" class="index">Example#210 - Functions within functions</a></li>
<li><a href="functions.user-defined.php#example-212" class="index">Example#211 - Recursive functions</a></li>
<li><a href="functions.arguments.php#example-213" class="index">Example#212 - Function parameter list with trailing comma</a></li>
<li><a href="functions.arguments.php#example-214" class="index">Example#213 - Passing function arguments by reference</a></li>
<li><a href="functions.arguments.php#example-215" class="index">Example#214 - Use of default parameters in functions</a></li>
<li><a href="functions.arguments.php#example-216" class="index">Example#215 - Using non-scalar types as default values</a></li>
<li><a href="functions.arguments.php#example-217" class="index">Example#216 - Using objects as default values (as of PHP 8.1.0)</a></li>
<li><a href="functions.arguments.php#example-218" class="index">Example#217 - Incorrect usage of default function parameters</a></li>
<li><a href="functions.arguments.php#example-219" class="index">Example#218 - Correct usage of default function parameters</a></li>
<li><a href="functions.arguments.php#example-220" class="index">Example#219 - Correct usage of default function parameters</a></li>
<li><a href="functions.arguments.php#example-221" class="index">Example#220 - Declaring optional parameters after mandatory parameters</a></li>
<li><a href="functions.arguments.php#example-222" class="index">Example#221 - Using ... to access variable arguments</a></li>
<li><a href="functions.arguments.php#example-223" class="index">Example#222 - Using ... to provide arguments</a></li>
<li><a href="functions.arguments.php#example-224" class="index">Example#223 - Type declared variable arguments</a></li>
<li><a href="functions.arguments.php#example-225" class="index">Example#224 - Named argument syntax</a></li>
<li><a href="functions.arguments.php#example-226" class="index">Example#225 - Positional arguments versus named arguments</a></li>
<li><a href="functions.arguments.php#example-227" class="index">Example#226 - Same example as above with a different order of parameters</a></li>
<li><a href="functions.arguments.php#example-228" class="index">Example#227 - Combining named arguments with positional arguments</a></li>
<li><a href="functions.arguments.php#example-229" class="index">Example#228 - Error thrown when passing an argument to the same named parameter multiple times</a></li>
<li><a href="functions.arguments.php#example-230" class="index">Example#229 - Use named arguments after unpacking</a></li>
<li><a href="functions.returning-values.php#example-231" class="index">Example#230 - Use of return</a></li>
<li><a href="functions.returning-values.php#example-232" class="index">Example#231 - Returning an array to get multiple values</a></li>
<li><a href="functions.returning-values.php#example-233" class="index">Example#232 - Returning a reference from a function</a></li>
<li><a href="functions.variable-functions.php#example-234" class="index">Example#233 - Variable function example</a></li>
<li><a href="functions.variable-functions.php#example-235" class="index">Example#234 - Variable method example</a></li>
<li><a href="functions.variable-functions.php#example-236" class="index">Example#235 - Variable method example with static properties</a></li>
<li><a href="functions.variable-functions.php#example-237" class="index">Example#236 - Complex callables</a></li>
<li><a href="functions.anonymous.php#example-238" class="index">Example#237 - Anonymous function example</a></li>
<li><a href="functions.anonymous.php#example-239" class="index">Example#238 - Anonymous function variable assignment example</a></li>
<li><a href="functions.anonymous.php#example-240" class="index">Example#239 - Inheriting variables from the parent scope</a></li>
<li><a href="functions.anonymous.php#example-241" class="index">Example#240 - Closures and scoping</a></li>
<li><a href="functions.anonymous.php#example-242" class="index">Example#241 - Automatic binding of $this</a></li>
<li><a href="functions.anonymous.php#example-243" class="index">Example#242 - Attempting to use $this inside a static anonymous function</a></li>
<li><a href="functions.anonymous.php#example-244" class="index">Example#243 - Attempting to bind an object to a static anonymous function</a></li>
<li><a href="functions.arrow.php#example-245" class="index">Example#244 - Arrow functions capture variables by value automatically</a></li>
<li><a href="functions.arrow.php#example-246" class="index">Example#245 - Arrow functions capture variables by value automatically, even when nested</a></li>
<li><a href="functions.arrow.php#example-247" class="index">Example#246 - Examples of arrow functions</a></li>
<li><a href="functions.arrow.php#example-248" class="index">Example#247 - Values from the outer scope cannot be modified by arrow functions</a></li>
<li><a href="functions.first_class_callable_syntax.php#example-249" class="index">Example#248 - Simple first class callable syntax</a></li>
<li><a href="functions.first_class_callable_syntax.php#example-250" class="index">Example#249 - Scope comparison of CallableExpr(...) and traditional callable</a></li>
<li><a href="language.oop5.basic.php#example-251" class="index">Example#250 - Simple Class definition</a></li>
<li><a href="language.oop5.basic.php#language.oop5.basic.class.this" class="index">Example#251 - Some examples of the $this pseudo-variable</a></li>
<li><a href="language.oop5.basic.php#example-253" class="index">Example#252 - Creating an instance</a></li>
<li><a href="language.oop5.basic.php#example-254" class="index">Example#253 - Creating an instance using an arbitrary expression</a></li>
<li><a href="language.oop5.basic.php#example-255" class="index">Example#254 - Object Assignment</a></li>
<li><a href="language.oop5.basic.php#example-256" class="index">Example#255 - Creating new objects</a></li>
<li><a href="language.oop5.basic.php#example-257" class="index">Example#256 - Access member of newly created object</a></li>
<li><a href="language.oop5.basic.php#example-258" class="index">Example#257 - Property access vs. method call</a></li>
<li><a href="language.oop5.basic.php#example-259" class="index">Example#258 - Calling an anonymous function stored in a property</a></li>
<li><a href="language.oop5.basic.php#example-260" class="index">Example#259 - Simple Class Inheritance</a></li>
<li><a href="language.oop5.basic.php#example-261" class="index">Example#260 - Compatible child methods</a></li>
<li><a href="language.oop5.basic.php#example-262" class="index">Example#261 - Fatal error when a child method removes a parameter</a></li>
<li><a href="language.oop5.basic.php#example-263" class="index">Example#262 - Fatal error when a child method makes an optional parameter mandatory</a></li>
<li><a href="language.oop5.basic.php#example-264" class="index">Example#263 - Error when using named arguments and parameters were renamed in a child class</a></li>
<li><a href="language.oop5.basic.php#language.oop5.basic.class.class.name" class="index">Example#264 - Class name resolution</a></li>
<li><a href="language.oop5.basic.php#language.oop5.basic.class.class.fail" class="index">Example#265 - Missing class name resolution</a></li>
<li><a href="language.oop5.basic.php#language.oop5.basic.class.class.object" class="index">Example#266 - Object name resolution</a></li>
<li><a href="language.oop5.basic.php#example-268" class="index">Example#267 - Nullsafe Operator</a></li>
<li><a href="language.oop5.properties.php#example-269" class="index">Example#268 - Property declarations</a></li>
<li><a href="language.oop5.properties.php#example-270" class="index">Example#269 - Example of typed properties</a></li>
<li><a href="language.oop5.properties.php#example-271" class="index">Example#270 - Accessing properties</a></li>
<li><a href="language.oop5.properties.php#example-272" class="index">Example#271 - Example of readonly properties</a></li>
<li><a href="language.oop5.properties.php#example-273" class="index">Example#272 - Illegal initialization of readonly properties</a></li>
<li><a href="language.oop5.properties.php#example-274" class="index">Example#273 - Readonly properties and cloning</a></li>
<li><a href="language.oop5.property-hooks.php#example-275" class="index">Example#274 - Property hooks (full version)</a></li>
<li><a href="language.oop5.property-hooks.php#example-276" class="index">Example#275 - Property get expression</a></li>
<li><a href="language.oop5.property-hooks.php#example-277" class="index">Example#276 - Property set defaults</a></li>
<li><a href="language.oop5.property-hooks.php#example-278" class="index">Example#277 - Property set expression</a></li>
<li><a href="language.oop5.property-hooks.php#example-279" class="index">Example#278 - Invalid virtual property</a></li>
<li><a href="language.oop5.property-hooks.php#example-280" class="index">Example#279 - Virtual property</a></li>
<li><a href="language.oop5.property-hooks.php#example-281" class="index">Example#280 - Calling a method from a hook</a></li>
<li><a href="language.oop5.property-hooks.php#example-282" class="index">Example#281 - Final hooks</a></li>
<li><a href="language.oop5.property-hooks.php#example-283" class="index">Example#282 - Hook inheritance</a></li>
<li><a href="language.oop5.property-hooks.php#example-284" class="index">Example#283 - Parent hook access (set)</a></li>
<li><a href="language.oop5.property-hooks.php#example-285" class="index">Example#284 - Parent hook access (get)</a></li>
<li><a href="language.oop5.constants.php#example-286" class="index">Example#285 - Defining and using a constant</a></li>
<li><a href="language.oop5.constants.php#example-287" class="index">Example#286 - Namespaced ::class example</a></li>
<li><a href="language.oop5.constants.php#example-288" class="index">Example#287 - Class constant expression example</a></li>
<li><a href="language.oop5.constants.php#example-289" class="index">Example#288 - Class constant visibility modifiers, as of PHP 7.1.0</a></li>
<li><a href="language.oop5.constants.php#example-290" class="index">Example#289 - Class constant visibility variance check, as of PHP 8.3.0</a></li>
<li><a href="language.oop5.constants.php#example-291" class="index">Example#290 - Fetch class constant syntax, as of PHP 8.3.0</a></li>
<li><a href="language.oop5.constants.php#example-292" class="index">Example#291 - Assigning types to class constants, as of PHP 8.3.0</a></li>
<li><a href="language.oop5.autoload.php#example-293" class="index">Example#292 - Autoload example</a></li>
<li><a href="language.oop5.autoload.php#example-294" class="index">Example#293 - Autoload other example</a></li>
<li><a href="language.oop5.autoload.php#example-295" class="index">Example#294 - Using Composer's autoloader</a></li>
<li><a href="language.oop5.decon.php#example-296" class="index">Example#295 - Constructors in inheritance</a></li>
<li><a href="language.oop5.decon.php#example-297" class="index">Example#296 - Using constructor arguments</a></li>
<li><a href="language.oop5.decon.php#example-298" class="index">Example#297 - Using constructor property promotion</a></li>
<li><a href="language.oop5.decon.php#example-299" class="index">Example#298 - Using new in initializers</a></li>
<li><a href="language.oop5.decon.php#example-300" class="index">Example#299 - Using static creation methods</a></li>
<li><a href="language.oop5.decon.php#example-301" class="index">Example#300 - Destructor Example</a></li>
<li><a href="language.oop5.visibility.php#example-302" class="index">Example#301 - Property declaration</a></li>
<li><a href="language.oop5.visibility.php#example-303" class="index">Example#302 - Asymmetric Property visibility</a></li>
<li><a href="language.oop5.visibility.php#example-304" class="index">Example#303 - Asymmetric Property inheritance</a></li>
<li><a href="language.oop5.visibility.php#example-305" class="index">Example#304 - Method Declaration</a></li>
<li><a href="language.oop5.visibility.php#example-306" class="index">Example#305 - Constant Declaration as of PHP 7.1.0</a></li>
<li><a href="language.oop5.visibility.php#example-307" class="index">Example#306 - Accessing private members of the same object type</a></li>
<li><a href="language.oop5.inheritance.php#example-308" class="index">Example#307 - Inheritance Example</a></li>
<li><a href="language.oop5.inheritance.php#example-309" class="index">Example#308 - The overriding method does not declare any return type</a></li>
<li><a href="language.oop5.inheritance.php#example-310" class="index">Example#309 - The overriding method declares a wrong return type</a></li>
<li><a href="language.oop5.inheritance.php#example-311" class="index">Example#310 - The overriding method declares a wrong return type without a deprecation notice</a></li>
<li><a href="language.oop5.paamayim-nekudotayim.php#example-312" class="index">Example#311 - :: from outside the class definition</a></li>
<li><a href="language.oop5.paamayim-nekudotayim.php#example-313" class="index">Example#312 - :: from inside the class definition</a></li>
<li><a href="language.oop5.paamayim-nekudotayim.php#example-314" class="index">Example#313 - Calling a parent's method</a></li>
<li><a href="language.oop5.static.php#example-315" class="index">Example#314 - Static method example</a></li>
<li><a href="language.oop5.static.php#example-316" class="index">Example#315 - Static property example</a></li>
<li><a href="language.oop5.abstract.php#example-317" class="index">Example#316 - Abstract method example</a></li>
<li><a href="language.oop5.abstract.php#example-318" class="index">Example#317 - Abstract method example</a></li>
<li><a href="language.oop5.abstract.php#example-319" class="index">Example#318 - Abstract property example</a></li>
<li><a href="language.oop5.abstract.php#example-320" class="index">Example#319 - Abstract property with hooks example</a></li>
<li><a href="language.oop5.interfaces.php#example-321" class="index">Example#320 - Interface properties example</a></li>
<li><a href="language.oop5.interfaces.php#language.oop5.interfaces.examples.ex1" class="index">Example#321 - Interface example</a></li>
<li><a href="language.oop5.interfaces.php#language.oop5.interfaces.examples.ex2" class="index">Example#322 - Extendable Interfaces</a></li>
<li><a href="language.oop5.interfaces.php#language.oop5.interfaces.examples.variance.multiple.interfaces" class="index">Example#323 - Variance compatibility with multiple interfaces</a></li>
<li><a href="language.oop5.interfaces.php#language.oop5.interfaces.examples.ex3" class="index">Example#324 - Multiple interface inheritance</a></li>
<li><a href="language.oop5.interfaces.php#language.oop5.interfaces.examples.ex4" class="index">Example#325 - Interfaces with constants</a></li>
<li><a href="language.oop5.interfaces.php#language.oop5.interfaces.examples.ex5" class="index">Example#326 - Interfaces with abstract classes</a></li>
<li><a href="language.oop5.interfaces.php#language.oop5.interfaces.examples.ex6" class="index">Example#327 - Extending and implementing simultaneously</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.basicexample" class="index">Example#328 - Trait example</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.precedence.examples.ex1" class="index">Example#329 - Precedence Order Example</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.precedence.examples.ex2" class="index">Example#330 - Alternate Precedence Order Example</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.multiple.ex1" class="index">Example#331 - Multiple Traits Usage</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.conflict.ex1" class="index">Example#332 - Conflict Resolution</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.visibility.ex1" class="index">Example#333 - Changing Method Visibility</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.composition.ex1" class="index">Example#334 - Traits Composed from Traits</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.abstract.ex1" class="index">Example#335 - Express Requirements by Abstract Methods</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.static.ex1" class="index">Example#336 - Static Variables</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.static.ex2" class="index">Example#337 - Static Methods</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.static.ex3" class="index">Example#338 - Static Properties</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.properties.example" class="index">Example#339 - Defining Properties</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.properties.conflicts" class="index">Example#340 - Conflict Resolution</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.constants.example" class="index">Example#341 - Defining Constants</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.constants.conflicts" class="index">Example#342 - Conflict Resolution</a></li>
<li><a href="language.oop5.traits.php#language.oop5.traits.final-methods.example" class="index">Example#343 - Defining a method coming from a trait as final</a></li>
<li><a href="language.oop5.anonymous.php#language.oop5.anonymous.readonly.example" class="index">Example#344 - Defining a readonly anonymous class</a></li>
<li><a href="language.oop5.overloading.php#example-346" class="index">Example#345 - Overloading properties via the __get(),
     __set(), __isset()
     and __unset() methods</a></li>
<li><a href="language.oop5.overloading.php#example-347" class="index">Example#346 - Overloading methods via the __call()
     and __callStatic() methods</a></li>
<li><a href="language.oop5.iterations.php#example-348" class="index">Example#347 - Simple Object Iteration</a></li>
<li><a href="language.oop5.magic.php#example-349" class="index">Example#348 - Sleep and wakeup</a></li>
<li><a href="language.oop5.magic.php#example-350" class="index">Example#349 - Serialize and unserialize</a></li>
<li><a href="language.oop5.magic.php#example-351" class="index">Example#350 - Simple example</a></li>
<li><a href="language.oop5.magic.php#example-352" class="index">Example#351 - Using __invoke()</a></li>
<li><a href="language.oop5.magic.php#example-353" class="index">Example#352 - Using __invoke()</a></li>
<li><a href="language.oop5.magic.php#example-354" class="index">Example#353 - Using __set_state()</a></li>
<li><a href="language.oop5.magic.php#example-355" class="index">Example#354 - Using __debugInfo()</a></li>
<li><a href="language.oop5.final.php#example-356" class="index">Example#355 - Final methods example</a></li>
<li><a href="language.oop5.final.php#example-357" class="index">Example#356 - Final class example</a></li>
<li><a href="language.oop5.final.php#example-358" class="index">Example#357 - Final property example as of PHP 8.4.0</a></li>
<li><a href="language.oop5.final.php#language.oop5.final.example.php81" class="index">Example#358 - Final constants example as of PHP 8.1.0</a></li>
<li><a href="language.oop5.cloning.php#example-360" class="index">Example#359 - Cloning an object</a></li>
<li><a href="language.oop5.cloning.php#example-361" class="index">Example#360 - Access member of freshly cloned object</a></li>
<li><a href="language.oop5.object-comparison.php#example-362" class="index">Example#361 - Example of object comparison</a></li>
<li><a href="language.oop5.late-static-bindings.php#example-363" class="index">Example#362 - self:: usage</a></li>
<li><a href="language.oop5.late-static-bindings.php#example-364" class="index">Example#363 - static:: simple usage</a></li>
<li><a href="language.oop5.late-static-bindings.php#example-365" class="index">Example#364 - static:: usage in a non-static context</a></li>
<li><a href="language.oop5.late-static-bindings.php#example-366" class="index">Example#365 - Forwarding and non-forwarding calls</a></li>
<li><a href="language.oop5.references.php#example-367" class="index">Example#366 - References and Objects</a></li>
<li><a href="language.oop5.variance.php#example-368" class="index">Example#367 - Property type variance</a></li>
<li><a href="language.oop5.lazy-objects.php#example-369" class="index">Example#368 - Creating a Lazy Ghost</a></li>
<li><a href="language.oop5.lazy-objects.php#example-370" class="index">Example#369 - Creating a Lazy Proxy</a></li>
<li><a href="language.oop5.lazy-objects.php#example-371" class="index">Example#370 - Initializing Properties Eagerly</a></li>
<li><a href="language.namespaces.rationale.php#example-372" class="index">Example#371 - Namespace syntax example</a></li>
<li><a href="language.namespaces.definition.php#example-373" class="index">Example#372 - Declaring a single namespace</a></li>
<li><a href="language.namespaces.definition.php#example-374" class="index">Example#373 - Declaring a single namespace</a></li>
<li><a href="language.namespaces.nested.php#example-375" class="index">Example#374 - Declaring a single namespace with hierarchy</a></li>
<li><a href="language.namespaces.definitionmultiple.php#example-376" class="index">Example#375 - Declaring multiple namespaces, simple combination syntax</a></li>
<li><a href="language.namespaces.definitionmultiple.php#example-377" class="index">Example#376 - Declaring multiple namespaces, bracketed syntax</a></li>
<li><a href="language.namespaces.definitionmultiple.php#example-378" class="index">Example#377 - Declaring multiple namespaces and unnamespaced code</a></li>
<li><a href="language.namespaces.definitionmultiple.php#example-379" class="index">Example#378 - Declaring multiple namespaces and unnamespaced code</a></li>
<li><a href="language.namespaces.basics.php#example-380" class="index">Example#379 - Accessing global classes, functions and constants from within a namespace</a></li>
<li><a href="language.namespaces.dynamic.php#example-381" class="index">Example#380 - Dynamically accessing elements</a></li>
<li><a href="language.namespaces.dynamic.php#example-382" class="index">Example#381 - Dynamically accessing namespaced elements</a></li>
<li><a href="language.namespaces.nsconstants.php#example-383" class="index">Example#382 - __NAMESPACE__ example, namespaced code</a></li>
<li><a href="language.namespaces.nsconstants.php#example-384" class="index">Example#383 - __NAMESPACE__ example, global code</a></li>
<li><a href="language.namespaces.nsconstants.php#example-385" class="index">Example#384 - using __NAMESPACE__ for dynamic name construction</a></li>
<li><a href="language.namespaces.nsconstants.php#example-386" class="index">Example#385 - the namespace operator, inside a namespace</a></li>
<li><a href="language.namespaces.nsconstants.php#example-387" class="index">Example#386 - the namespace operator, in global code</a></li>
<li><a href="language.namespaces.importing.php#example-388" class="index">Example#387 - importing/aliasing with the use operator</a></li>
<li><a href="language.namespaces.importing.php#example-389" class="index">Example#388 - importing/aliasing with the use operator, multiple use statements combined</a></li>
<li><a href="language.namespaces.importing.php#example-390" class="index">Example#389 - Importing and dynamic names</a></li>
<li><a href="language.namespaces.importing.php#example-391" class="index">Example#390 - Importing and fully qualified names</a></li>
<li><a href="language.namespaces.importing.php#example-392" class="index">Example#391 - Illegal importing rule</a></li>
<li><a href="language.namespaces.global.php#example-393" class="index">Example#392 - Using global space specification</a></li>
<li><a href="language.namespaces.fallback.php#example-394" class="index">Example#393 - Accessing global classes inside a namespace</a></li>
<li><a href="language.namespaces.fallback.php#example-395" class="index">Example#394 - global functions/constants fallback inside a namespace</a></li>
<li><a href="language.namespaces.rules.php#example-396" class="index">Example#395 - Name resolutions illustrated</a></li>
<li><a href="language.namespaces.faq.php#example-397" class="index">Example#396 - Accessing global classes outside a namespace</a></li>
<li><a href="language.namespaces.faq.php#example-398" class="index">Example#397 - Accessing global classes outside a namespace</a></li>
<li><a href="language.namespaces.faq.php#example-399" class="index">Example#398 - Accessing internal classes in namespaces</a></li>
<li><a href="language.namespaces.faq.php#example-400" class="index">Example#399 - Accessing internal classes, functions or constants in namespaces</a></li>
<li><a href="language.namespaces.faq.php#example-401" class="index">Example#400 - Fully Qualified names</a></li>
<li><a href="language.namespaces.faq.php#example-402" class="index">Example#401 - Qualified names</a></li>
<li><a href="language.namespaces.faq.php#example-403" class="index">Example#402 - Unqualified class names</a></li>
<li><a href="language.namespaces.faq.php#example-404" class="index">Example#403 - Unqualified function or constant names</a></li>
<li><a href="language.namespaces.faq.php#example-405" class="index">Example#404 - Dangers of using namespaced names inside a double-quoted string</a></li>
<li><a href="language.namespaces.faq.php#example-406" class="index">Example#405 - Undefined constants</a></li>
<li><a href="language.namespaces.faq.php#example-407" class="index">Example#406 - Undefined constants</a></li>
<li><a href="language.enumerations.examples.php#example-408" class="index">Example#407 - Basic limited values</a></li>
<li><a href="language.enumerations.examples.php#example-409" class="index">Example#408 - Advanced exclusive values</a></li>
<li><a href="language.exceptions.php#example-410" class="index">Example#409 - Converting error reporting to exceptions</a></li>
<li><a href="language.exceptions.php#example-411" class="index">Example#410 - Throwing an Exception</a></li>
<li><a href="language.exceptions.php#example-412" class="index">Example#411 - Exception handling with a finally block</a></li>
<li><a href="language.exceptions.php#example-413" class="index">Example#412 - Interaction between the finally block and return</a></li>
<li><a href="language.exceptions.php#example-414" class="index">Example#413 - Nested Exception</a></li>
<li><a href="language.exceptions.php#example-415" class="index">Example#414 - Multi catch exception handling</a></li>
<li><a href="language.exceptions.php#example-416" class="index">Example#415 - Omitting the caught variable</a></li>
<li><a href="language.exceptions.php#example-417" class="index">Example#416 - Throw as an expression</a></li>
<li><a href="language.exceptions.php#example-418" class="index">Example#417 - Exception in try and in finally</a></li>
<li><a href="language.exceptions.extending.php#example-419" class="index">Example#418 - The Built in Exception class</a></li>
<li><a href="language.exceptions.extending.php#example-420" class="index">Example#419 - Extending the Exception class</a></li>
<li><a href="language.fibers.php#language.fiber.example.basic" class="index">Example#420 - Basic usage</a></li>
<li><a href="language.generators.overview.php#example-422" class="index">Example#421 - Implementing range as a generator</a></li>
<li><a href="language.generators.syntax.php#example-423" class="index">Example#422 - A simple example of yielding values</a></li>
<li><a href="language.generators.syntax.php#example-424" class="index">Example#423 - Yielding a key/value pair</a></li>
<li><a href="language.generators.syntax.php#example-425" class="index">Example#424 - Yielding nulls</a></li>
<li><a href="language.generators.syntax.php#example-426" class="index">Example#425 - Yielding values by reference</a></li>
<li><a href="language.generators.syntax.php#example-427" class="index">Example#426 - yield from with iterator_to_array</a></li>
<li><a href="language.generators.syntax.php#example-428" class="index">Example#427 - Basic use of yield from</a></li>
<li><a href="language.generators.syntax.php#example-429" class="index">Example#428 - yield from and return values</a></li>
<li><a href="language.attributes.overview.php#example-430" class="index">Example#429 - Implementing optional methods of an interface with Attributes</a></li>
<li><a href="language.attributes.syntax.php#example-431" class="index">Example#430 - Attribute Syntax</a></li>
<li><a href="language.attributes.reflection.php#example-432" class="index">Example#431 - Reading Attributes using Reflection API</a></li>
<li><a href="language.attributes.reflection.php#example-433" class="index">Example#432 - Reading Specific Attributes using Reflection API</a></li>
<li><a href="language.attributes.classes.php#example-434" class="index">Example#433 - Simple Attribute Class</a></li>
<li><a href="language.attributes.classes.php#example-435" class="index">Example#434 - Using target specification to restrict where attributes can be used</a></li>
<li><a href="language.attributes.classes.php#example-436" class="index">Example#435 - Using IS_REPEATABLE to allow attribute on a declaration multiple times</a></li>
<li><a href="language.references.whatdo.php#example-437" class="index">Example#436 - Using references with undefined variables</a></li>
<li><a href="language.references.whatdo.php#example-438" class="index">Example#437 - Referencing global variables inside functions</a></li>
<li><a href="language.references.whatdo.php#example-439" class="index">Example#438 - References and foreach statement</a></li>
<li><a href="reserved.variables.globals.php#variable.globals.basic" class="index">Example#439 - $GLOBALS example</a></li>
<li><a href="reserved.variables.globals.php#variable.globals.entire_write_error" class="index">Example#440 - writing entire $GLOBALS will result in error.</a></li>
<li><a href="reserved.variables.server.php#variable.server.basic" class="index">Example#441 - $_SERVER example</a></li>
<li><a href="reserved.variables.get.php#variable.get.basic" class="index">Example#442 - $_GET example</a></li>
<li><a href="reserved.variables.post.php#variable.post.basic" class="index">Example#443 - $_POST example</a></li>
<li><a href="reserved.variables.environment.php#variable.env.basic" class="index">Example#444 - $_ENV example</a></li>
<li><a href="reserved.variables.cookies.php#variable.cookie.basic" class="index">Example#445 - $_COOKIE example</a></li>
<li><a href="reserved.variables.phperrormsg.php#variable.phperrormsg.basic" class="index">Example#446 - $php_errormsg example</a></li>
<li><a href="reserved.variables.httpresponseheader.php#variable.httpresponseheader.basic" class="index">Example#447 - $http_response_header example</a></li>
<li><a href="reserved.variables.argc.php#variable.argc.basic" class="index">Example#448 - $argc example</a></li>
<li><a href="reserved.variables.argv.php#variable.argv.basic" class="index">Example#449 - $argv example</a></li>
<li><a href="exception.getmessage.php#example-451" class="index">Example#450 - Exception::getMessage example</a></li>
<li><a href="exception.getprevious.php#example-452" class="index">Example#451 - Exception::getPrevious example</a></li>
<li><a href="exception.getcode.php#example-453" class="index">Example#452 - Exception::getCode example</a></li>
<li><a href="exception.getfile.php#example-454" class="index">Example#453 - Exception::getFile example</a></li>
<li><a href="exception.getline.php#example-455" class="index">Example#454 - Exception::getLine example</a></li>
<li><a href="exception.gettrace.php#example-456" class="index">Example#455 - Exception::getTrace example</a></li>
<li><a href="exception.gettraceasstring.php#example-457" class="index">Example#456 - Exception::getTraceAsString example</a></li>
<li><a href="exception.tostring.php#example-458" class="index">Example#457 - Exception::__toString example</a></li>
<li><a href="class.errorexception.php#errorexception.example.error-handler" class="index">Example#458 - Use set_error_handler to change error messages into ErrorException</a></li>
<li><a href="errorexception.getseverity.php#example-460" class="index">Example#459 - ErrorException::getSeverity example</a></li>
<li><a href="error.getmessage.php#example-461" class="index">Example#460 - Error::getMessage example</a></li>
<li><a href="error.getprevious.php#example-462" class="index">Example#461 - Error::getPrevious example</a></li>
<li><a href="error.getcode.php#example-463" class="index">Example#462 - Error::getCode example</a></li>
<li><a href="error.getfile.php#example-464" class="index">Example#463 - Error::getFile example</a></li>
<li><a href="error.getline.php#example-465" class="index">Example#464 - Error::getLine example</a></li>
<li><a href="error.gettrace.php#example-466" class="index">Example#465 - Error::getTrace example</a></li>
<li><a href="error.gettraceasstring.php#example-467" class="index">Example#466 - Error::getTraceAsString example</a></li>
<li><a href="error.tostring.php#example-468" class="index">Example#467 - Error::__toString example</a></li>
<li><a href="class.iterator.php#iterator.example.basic" class="index">Example#468 - Basic usage</a></li>
<li><a href="class.iteratoraggregate.php#iteratoraggregate.example.basic" class="index">Example#469 - Basic usage</a></li>
<li><a href="countable.count.php#example-471" class="index">Example#470 - Countable::count example</a></li>
<li><a href="class.arrayaccess.php#arrayaccess.example.basic" class="index">Example#471 - Basic usage</a></li>
<li><a href="arrayaccess.offsetexists.php#example-473" class="index">Example#472 - ArrayAccess::offsetExists example</a></li>
<li><a href="class.serializable.php#serializable.example.basic" class="index">Example#473 - Basic usage</a></li>
<li><a href="closure.bind.php#example-475" class="index">Example#474 - Closure::bind example</a></li>
<li><a href="closure.bindto.php#example-476" class="index">Example#475 - Closure::bindTo example</a></li>
<li><a href="closure.call.php#example-477" class="index">Example#476 - Closure::call example</a></li>
<li><a href="class.stdclass.php#stdclass.basic-example" class="index">Example#477 - Created as a result of typecasting to object</a></li>
<li><a href="class.stdclass.php#stdclass.json-example" class="index">Example#478 - Created as a result of json_decode</a></li>
<li><a href="class.stdclass.php#stdclass.properties-example" class="index">Example#479 - Declaring dynamic properties</a></li>
<li><a href="generator.getreturn.php#example-481" class="index">Example#480 - Generator::getReturn example</a></li>
<li><a href="generator.key.php#example-482" class="index">Example#481 - Generator::key example</a></li>
<li><a href="generator.rewind.php#example-483" class="index">Example#482 - Generator::rewind example</a></li>
<li><a href="generator.send.php#example-484" class="index">Example#483 - Using Generator::send to inject values</a></li>
<li><a href="generator.throw.php#example-485" class="index">Example#484 - Throwing an exception into a generator</a></li>
<li><a href="class.weakreference.php#weakreference.basic-example" class="index">Example#485 - Basic WeakReference Usage</a></li>
<li><a href="class.weakmap.php#example-487" class="index">Example#486 - Weakmap usage example</a></li>
<li><a href="class.stringable.php#stringable.basic-example" class="index">Example#487 - Basic Stringable Usage</a></li>
<li><a href="unitenum.cases.php#example-489" class="index">Example#488 - Basic usage</a></li>
<li><a href="backedenum.from.php#example-490" class="index">Example#489 - Basic usage</a></li>
<li><a href="backedenum.tryfrom.php#example-491" class="index">Example#490 - Basic usage</a></li>
<li><a href="sensitiveparametervalue.debuginfo.php#example-492" class="index">Example#491 - Passing a SensitiveParameterValue object to var_dump</a></li>
<li><a href="sensitiveparametervalue.getvalue.php#example-493" class="index">Example#492 - SensitiveParameterValue::getValue example</a></li>
<li><a href="class.php-incomplete-class.php#php-incomplete-class.basic-example" class="index">Example#493 - Created by unserialize</a></li>
<li><a href="context.socket.php#context.socket.example-bindto" class="index">Example#494 - Basic bindto usage example</a></li>
<li><a href="context.http.php#context.http.example-post" class="index">Example#495 - Fetch a page and send POST data</a></li>
<li><a href="context.http.php#context.http.example-fetch-ignore-redirect" class="index">Example#496 - Ignore redirects but fetch headers and content</a></li>
<li><a href="context.zip.php#context.zip.example-password" class="index">Example#497 - Basic password usage example</a></li>
<li><a href="wrappers.http.php#wrappers.http.example.basic" class="index">Example#498 - Detecting which URL we ended up on after redirects</a></li>
<li><a href="wrappers.php.php#example-500" class="index">Example#499 - php://temp/maxmemory</a></li>
<li><a href="wrappers.php.php#example-501" class="index">Example#500 - php://filter/resource=&lt;stream to be filtered&gt;</a></li>
<li><a href="wrappers.php.php#example-502" class="index">Example#501 - php://filter/read=&lt;filter list to apply to read chain&gt;</a></li>
<li><a href="wrappers.php.php#example-503" class="index">Example#502 - php://filter/write=&lt;filter list to apply to write chain&gt;</a></li>
<li><a href="wrappers.php.php#example-504" class="index">Example#503 - php://memory and php://temp are not reusable</a></li>
<li><a href="wrappers.data.php#example-505" class="index">Example#504 - Print data:// contents</a></li>
<li><a href="wrappers.data.php#example-506" class="index">Example#505 - Fetch the media type</a></li>
<li><a href="wrappers.glob.php#example-507" class="index">Example#506 - Basic usage</a></li>
<li><a href="wrappers.ssh2.php#example-508" class="index">Example#507 - Opening a stream from an active connection</a></li>
<li><a href="wrappers.ssh2.php#example-509" class="index">Example#508 - This $session variable must be kept available!</a></li>
<li><a href="wrappers.rar.php#example-510" class="index">Example#509 - Traversing a RAR archive</a></li>
<li><a href="wrappers.rar.php#example-511" class="index">Example#510 - Opening an encrypted file (header encryption)</a></li>
<li><a href="security.filesystem.php#example-512" class="index">Example#511 - Poor variable checking leads to....</a></li>
<li><a href="security.filesystem.php#example-513" class="index">Example#512 - ... A filesystem attack</a></li>
<li><a href="security.filesystem.php#example-514" class="index">Example#513 - More secure file name checking</a></li>
<li><a href="security.filesystem.php#example-515" class="index">Example#514 - More secure file name checking</a></li>
<li><a href="security.filesystem.nullbytes.php#example-516" class="index">Example#515 - Script vulnerable to null bytes</a></li>
<li><a href="security.filesystem.nullbytes.php#example-517" class="index">Example#516 - Correctly validating the input</a></li>
<li><a href="security.database.storage.php#example-518" class="index">Example#517 - Hashing password field</a></li>
<li><a href="security.database.sql-injection.php#example-519" class="index">Example#518 - Splitting the result set into pages ... and making superusers
       (PostgreSQL)</a></li>
<li><a href="security.database.sql-injection.php#example-520" class="index">Example#519 - Listing out articles ... and some passwords (any database server)</a></li>
<li><a href="security.database.sql-injection.php#example-521" class="index">Example#520 - From resetting a password ... to gaining more privileges (any database server)</a></li>
<li><a href="security.database.sql-injection.php#example-522" class="index">Example#521 - Attacking the database host operating system (MSSQL Server)</a></li>
<li><a href="security.database.sql-injection.php#example-523" class="index">Example#522 - Avoiding SQL injection by using PDO prepared statements</a></li>
<li><a href="security.errors.php#example-524" class="index">Example#523 - Attacking Variables with a custom HTML page</a></li>
<li><a href="security.errors.php#example-525" class="index">Example#524 - Exploiting common debugging variables</a></li>
<li><a href="security.errors.php#example-526" class="index">Example#525 - Finding dangerous variables with E_ALL</a></li>
<li><a href="security.variables.php#example-527" class="index">Example#526 - Dangerous Variable Usage</a></li>
<li><a href="security.hiding.php#example-528" class="index">Example#527 - Hiding PHP as another language</a></li>
<li><a href="security.hiding.php#example-529" class="index">Example#528 - Using unknown types for PHP extensions</a></li>
<li><a href="security.hiding.php#example-530" class="index">Example#529 - Using HTML types for PHP extensions</a></li>
<li><a href="features.http-auth.php#example-531" class="index">Example#530 - Basic HTTP Authentication example</a></li>
<li><a href="features.http-auth.php#example-532" class="index">Example#531 - HTTP Authentication example forcing a new name/password</a></li>
<li><a href="features.file-upload.post-method.php#example-533" class="index">Example#532 - File Upload Form</a></li>
<li><a href="features.file-upload.post-method.php#example-534" class="index">Example#533 - Validating file uploads</a></li>
<li><a href="features.file-upload.post-method.php#example-535" class="index">Example#534 - Uploading array of files</a></li>
<li><a href="features.file-upload.multiple.php#example-536" class="index">Example#535 - Uploading multiple files</a></li>
<li><a href="features.file-upload.multiple.php#example-537" class="index">Example#536 - Uploading an entire directory</a></li>
<li><a href="features.file-upload.put-method.php#example-538" class="index">Example#537 - Saving HTTP PUT files</a></li>
<li><a href="features.remote-files.php#example-539" class="index">Example#538 - Getting the title of a remote page</a></li>
<li><a href="features.remote-files.php#example-540" class="index">Example#539 - Storing data on a remote server</a></li>
<li><a href="features.commandline.differences.php#example-541" class="index">Example#540 - Example showing the difference to the CGI
       SAPI:</a></li>
<li><a href="features.commandline.options.php#example-542" class="index">Example#541 - Example of using -d to set an INI setting</a></li>
<li><a href="features.commandline.options.php#example-543" class="index">Example#542 - Printing built in (and loaded) PHP and Zend modules</a></li>
<li><a href="features.commandline.options.php#example-544" class="index">Example#543 - Getting a syntax error when using double quotes</a></li>
<li><a href="features.commandline.options.php#example-545" class="index">Example#544 - Using single quotes to prevent the shell's variable
          substitution</a></li>
<li><a href="features.commandline.options.php#example-546" class="index">Example#545 - Using the -B, -R and
          -E options to count the number of lines of a
          project.</a></li>
<li><a href="features.commandline.options.php#example-547" class="index">Example#546 - Using -v to get the SAPI
         name and the version of PHP and Zend</a></li>
<li><a href="features.commandline.options.php#example-548" class="index">Example#547 - --ini example</a></li>
<li><a href="features.commandline.options.php#example-549" class="index">Example#548 - basic --rf usage</a></li>
<li><a href="features.commandline.options.php#example-550" class="index">Example#549 - --rc example</a></li>
<li><a href="features.commandline.options.php#example-551" class="index">Example#550 - --re example</a></li>
<li><a href="features.commandline.options.php#example-552" class="index">Example#551 - --ri example</a></li>
<li><a href="features.commandline.usage.php#example-553" class="index">Example#552 - Execute PHP script as shell script</a></li>
<li><a href="features.commandline.usage.php#example-554" class="index">Example#553 - Script intended to be run from command line (script.php)</a></li>
<li><a href="features.commandline.usage.php#example-555" class="index">Example#554 - Batch file to run a command line PHP script (script.bat)</a></li>
<li><a href="features.commandline.interactive.php#example-556" class="index">Example#555 - Executing code using the interactive shell</a></li>
<li><a href="features.commandline.interactive.php#example-557" class="index">Example#556 - Tab completion</a></li>
<li><a href="features.commandline.interactive.php#example-558" class="index">Example#557 - Setting php.ini settings in the interactive shell</a></li>
<li><a href="features.commandline.webserver.php#example-559" class="index">Example#558 - Starting the web server</a></li>
<li><a href="features.commandline.webserver.php#example-560" class="index">Example#559 - Starting with a specific document root directory</a></li>
<li><a href="features.commandline.webserver.php#example-561" class="index">Example#560 - Using a Router Script</a></li>
<li><a href="features.commandline.webserver.php#example-562" class="index">Example#561 - Checking for CLI Web Server Use</a></li>
<li><a href="features.commandline.webserver.php#example-563" class="index">Example#562 - Handling Unsupported File Types</a></li>
<li><a href="features.commandline.webserver.php#example-564" class="index">Example#563 - Accessing the CLI Web Server From Remote Machines</a></li>
<li><a href="features.gc.refcounting-basics.php#example-565" class="index">Example#564 - Creating a new zval container</a></li>
<li><a href="features.gc.refcounting-basics.php#example-566" class="index">Example#565 - Displaying zval information</a></li>
<li><a href="features.gc.refcounting-basics.php#example-567" class="index">Example#566 - Increasing refcount of a zval</a></li>
<li><a href="features.gc.refcounting-basics.php#example-568" class="index">Example#567 - Decreasing zval refcount</a></li>
<li><a href="features.gc.refcounting-basics.php#example-569" class="index">Example#568 - Creating a array zval</a></li>
<li><a href="features.gc.refcounting-basics.php#example-570" class="index">Example#569 - Adding already existing element to an array</a></li>
<li><a href="features.gc.refcounting-basics.php#example-571" class="index">Example#570 - Removing an element from an array</a></li>
<li><a href="features.gc.refcounting-basics.php#example-572" class="index">Example#571 - Adding the array as an element of itself</a></li>
<li><a href="features.gc.refcounting-basics.php#example-573" class="index">Example#572 - Unsetting $a</a></li>
<li><a href="features.gc.performance-considerations.php#example-574" class="index">Example#573 - Memory usage example</a></li>
<li><a href="features.gc.performance-considerations.php#example-575" class="index">Example#574 - GC performance influences</a></li>
<li><a href="features.gc.performance-considerations.php#example-576" class="index">Example#575 - Running the above script</a></li>
<li><a href="features.gc.performance-considerations.php#example-577" class="index">Example#576 - Recompiling PHP to enable GC benchmarking</a></li>
<li><a href="features.gc.performance-considerations.php#example-578" class="index">Example#577 - GC statistics</a></li>
<li><a href="features.dtrace.dtrace.php#example-579" class="index">Example#578 - all_probes.d for tracing all PHP Static Probes with DTrace</a></li>
<li><a href="features.dtrace.systemtap.php#example-580" class="index">Example#579 - all_probes.stp for tracing all PHP Static Probes with SystemTap</a></li>
<li><a href="function.apcu-add.php#example-581" class="index">Example#580 - A apcu_add example</a></li>
<li><a href="function.apcu-cache-info.php#example-582" class="index">Example#581 - A apcu_cache_info example</a></li>
<li><a href="function.apcu-cas.php#example-583" class="index">Example#582 - apcu_cas example</a></li>
<li><a href="function.apcu-dec.php#example-584" class="index">Example#583 - apcu_dec example</a></li>
<li><a href="function.apcu-delete.php#example-585" class="index">Example#584 - A apcu_delete example</a></li>
<li><a href="function.apcu-entry.php#example-586" class="index">Example#585 - An apcu_entry example</a></li>
<li><a href="function.apcu-exists.php#example-587" class="index">Example#586 - apcu_exists example</a></li>
<li><a href="function.apcu-fetch.php#example-588" class="index">Example#587 - A apcu_fetch example</a></li>
<li><a href="function.apcu-inc.php#example-589" class="index">Example#588 - apcu_inc example</a></li>
<li><a href="function.apcu-key-info.php#example-590" class="index">Example#589 - A apcu_key_info example</a></li>
<li><a href="function.apcu-sma-info.php#example-591" class="index">Example#590 - A apcu_sma_info example</a></li>
<li><a href="function.apcu-store.php#example-592" class="index">Example#591 - A apcu_store example</a></li>
<li><a href="apcuiterator.construct.php#example-593" class="index">Example#592 - A APCUIterator::__construct example</a></li>
<li><a href="errorfunc.examples.php#example-594" class="index">Example#593 - Using error handling in a script</a></li>
<li><a href="function.debug-backtrace.php#example-595" class="index">Example#594 - debug_backtrace example</a></li>
<li><a href="function.debug-print-backtrace.php#example-596" class="index">Example#595 - debug_print_backtrace example</a></li>
<li><a href="function.error-clear-last.php#example-597" class="index">Example#596 - An error_clear_last example</a></li>
<li><a href="function.error-get-last.php#example-598" class="index">Example#597 - An error_get_last example</a></li>
<li><a href="function.error-log.php#example-599" class="index">Example#598 - error_log examples</a></li>
<li><a href="function.error-reporting.php#example-600" class="index">Example#599 - error_reporting examples</a></li>
<li><a href="function.get-error-handler.php#example-601" class="index">Example#600 - get_error_handler example</a></li>
<li><a href="function.get-exception-handler.php#example-602" class="index">Example#601 - get_exception_handler example</a></li>
<li><a href="function.restore-error-handler.php#example-603" class="index">Example#602 - restore_error_handler example</a></li>
<li><a href="function.restore-exception-handler.php#example-604" class="index">Example#603 - restore_exception_handler example</a></li>
<li><a href="function.set-error-handler.php#example-605" class="index">Example#604 - Error handling with set_error_handler and trigger_error</a></li>
<li><a href="function.set-exception-handler.php#example-606" class="index">Example#605 - set_exception_handler example</a></li>
<li><a href="function.trigger-error.php#example-607" class="index">Example#606 - trigger_error example</a></li>
<li><a href="ffi.examples-basic.php#ffi.examples.function" class="index">Example#607 - Calling a function from shared library</a></li>
<li><a href="ffi.examples-basic.php#ffi.examples.structure" class="index">Example#608 - Calling a function, returning a structure through an argument</a></li>
<li><a href="ffi.examples-basic.php#ffi.examples.variable-existing" class="index">Example#609 - Accessing existing C variables</a></li>
<li><a href="ffi.examples-basic.php#ffi.examples.variable-creating" class="index">Example#610 - Creating and Modifying C variables</a></li>
<li><a href="ffi.examples-basic.php#ffi.examples.array" class="index">Example#611 - Working with C arrays</a></li>
<li><a href="ffi.examples-basic.php#ffi.examples.enum" class="index">Example#612 - Working with C enums</a></li>
<li><a href="ffi.examples-callback.php#example-614" class="index">Example#613 - Assigning a PHP Closure to a C function pointer</a></li>
<li><a href="function.opcache-get-status.php#example-615" class="index">Example#614 - A opcache_get_status example</a></li>
<li><a href="outcontrol.examples.basic.php#example-616" class="index">Example#615 - Output Control example</a></li>
<li><a href="outcontrol.examples.rewrite.php#example-617" class="index">Example#616 - Output rewrite example</a></li>
<li><a href="function.ob-end-clean.php#example-618" class="index">Example#617 - ob_end_clean example</a></li>
<li><a href="function.ob-end-flush.php#example-619" class="index">Example#618 - ob_end_flush example</a></li>
<li><a href="function.ob-get-clean.php#example-620" class="index">Example#619 - A simple ob_get_clean example</a></li>
<li><a href="function.ob-get-contents.php#example-621" class="index">Example#620 - A simple ob_get_contents example</a></li>
<li><a href="function.ob-get-flush.php#example-622" class="index">Example#621 - ob_get_flush example</a></li>
<li><a href="function.ob-get-length.php#example-623" class="index">Example#622 - A simple ob_get_length example</a></li>
<li><a href="function.ob-get-status.php#example-624" class="index">Example#623 - Array returned when full_status is false</a></li>
<li><a href="function.ob-get-status.php#example-625" class="index">Example#624 - Array returned when full_status is true</a></li>
<li><a href="function.ob-list-handlers.php#example-626" class="index">Example#625 - ob_list_handlers example</a></li>
<li><a href="function.ob-start.php#example-627" class="index">Example#626 - User defined callback function example</a></li>
<li><a href="function.ob-start.php#function.ob-start.flags-bc" class="index">Example#627 - Creating an unerasable output buffer</a></li>
<li><a href="function.output-add-rewrite-var.php#example-629" class="index">Example#628 - output_add_rewrite_var example</a></li>
<li><a href="function.output-reset-rewrite-vars.php#example-630" class="index">Example#629 - output_reset_rewrite_vars example</a></li>
<li><a href="function.assert.php#example-631" class="index">Example#630 - assert example</a></li>
<li><a href="function.assert.php#example-632" class="index">Example#631 - Using a custom message</a></li>
<li><a href="function.assert.php#example-633" class="index">Example#632 - Using a custom exception class</a></li>
<li><a href="function.assert-options.php#example-634" class="index">Example#633 - assert_options example</a></li>
<li><a href="function.cli-get-process-title.php#example-635" class="index">Example#634 - cli_get_process_title example</a></li>
<li><a href="function.cli-set-process-title.php#example-636" class="index">Example#635 - cli_set_process_title example</a></li>
<li><a href="function.dl.php#example-637" class="index">Example#636 - dl examples</a></li>
<li><a href="function.extension-loaded.php#example-638" class="index">Example#637 - extension_loaded example</a></li>
<li><a href="function.gc-enabled.php#example-639" class="index">Example#638 - A gc_enabled example</a></li>
<li><a href="function.gc-status.php#example-640" class="index">Example#639 - gc_status Usage</a></li>
<li><a href="function.get-current-user.php#example-641" class="index">Example#640 - get_current_user example</a></li>
<li><a href="function.get-defined-constants.php#example-642" class="index">Example#641 - get_defined_constants Example</a></li>
<li><a href="function.get-extension-funcs.php#example-643" class="index">Example#642 - Prints the XML functions</a></li>
<li><a href="function.get-include-path.php#example-644" class="index">Example#643 - get_include_path example</a></li>
<li><a href="function.get-included-files.php#example-645" class="index">Example#644 - get_included_files example</a></li>
<li><a href="function.get-loaded-extensions.php#example-646" class="index">Example#645 - get_loaded_extensions Example</a></li>
<li><a href="function.get-resources.php#example-647" class="index">Example#646 - Unfiltered get_resources</a></li>
<li><a href="function.get-resources.php#example-648" class="index">Example#647 - Filtered get_resources</a></li>
<li><a href="function.getenv.php#example-649" class="index">Example#648 - getenv Example</a></li>
<li><a href="function.getlastmod.php#example-650" class="index">Example#649 - getlastmod example</a></li>
<li><a href="function.getopt.php#getopt.examples-1" class="index">Example#650 - getopt example: The basics</a></li>
<li><a href="function.getopt.php#getopt.examples-2" class="index">Example#651 - getopt example: Introducing long options</a></li>
<li><a href="function.getopt.php#getopt.examples-3" class="index">Example#652 - getopt example: Passing multiple options as one</a></li>
<li><a href="function.getopt.php#getopt.examples-4" class="index">Example#653 - getopt example: Using rest_index</a></li>
<li><a href="function.getrusage.php#example-655" class="index">Example#654 - getrusage example</a></li>
<li><a href="function.ini-get.php#example-656" class="index">Example#655 - A few ini_get examples</a></li>
<li><a href="function.ini-get-all.php#example-657" class="index">Example#656 - ini_get_all examples</a></li>
<li><a href="function.ini-get-all.php#example-658" class="index">Example#657 - Disabling details</a></li>
<li><a href="function.ini-parse-quantity.php#example-659" class="index">Example#658 - A few ini_parse_quantity examples</a></li>
<li><a href="function.ini-restore.php#example-660" class="index">Example#659 - ini_restore example</a></li>
<li><a href="function.ini-set.php#example-661" class="index">Example#660 - Setting an ini option</a></li>
<li><a href="function.memory-get-usage.php#example-662" class="index">Example#661 - A memory_get_usage example</a></li>
<li><a href="function.memory-reset-peak-usage.php#example-663" class="index">Example#662 - memory_reset_peak_usage example</a></li>
<li><a href="function.php-ini-loaded-file.php#example-664" class="index">Example#663 - php_ini_loaded_file example</a></li>
<li><a href="function.php-ini-scanned-files.php#example-665" class="index">Example#664 - A simple example to list the returned ini files</a></li>
<li><a href="function.php-sapi-name.php#example-666" class="index">Example#665 - php_sapi_name example</a></li>
<li><a href="function.php-uname.php#example-667" class="index">Example#666 - Some php_uname examples</a></li>
<li><a href="function.php-uname.php#example-668" class="index">Example#667 - A few OS related constant examples</a></li>
<li><a href="function.phpcredits.php#example-669" class="index">Example#668 - Prints the general credits</a></li>
<li><a href="function.phpcredits.php#example-670" class="index">Example#669 - Prints the core developers and the documentation group</a></li>
<li><a href="function.phpcredits.php#example-671" class="index">Example#670 - Printing all the credits</a></li>
<li><a href="function.phpinfo.php#example-672" class="index">Example#671 - phpinfo Example</a></li>
<li><a href="function.phpversion.php#example-673" class="index">Example#672 - phpversion example</a></li>
<li><a href="function.phpversion.php#example-674" class="index">Example#673 - PHP_VERSION_ID example and usage</a></li>
<li><a href="function.putenv.php#example-675" class="index">Example#674 - Setting an environment variable</a></li>
<li><a href="function.restore-include-path.php#example-676" class="index">Example#675 - restore_include_path example</a></li>
<li><a href="function.set-include-path.php#example-677" class="index">Example#676 - set_include_path example</a></li>
<li><a href="function.set-include-path.php#example-678" class="index">Example#677 - Adding to the include path</a></li>
<li><a href="function.sys-get-temp-dir.php#example-679" class="index">Example#678 - sys_get_temp_dir example</a></li>
<li><a href="function.version-compare.php#example-680" class="index">Example#679 - version_compare examples</a></li>
<li><a href="function.zend-thread-id.php#example-681" class="index">Example#680 - zend_thread_id example</a></li>
<li><a href="function.zend-version.php#example-682" class="index">Example#681 - zend_version example</a></li>
<li><a href="runkit7.configuration.php#example-683" class="index">Example#682 - Custom Superglobals with runkit.superglobal=_FOO,_BAR in php.ini</a></li>
<li><a href="function.runkit7-function-add.php#example-684" class="index">Example#683 - A runkit7_function_add example</a></li>
<li><a href="function.runkit7-function-copy.php#example-685" class="index">Example#684 - A runkit7_function_copy example</a></li>
<li><a href="function.runkit7-function-redefine.php#example-686" class="index">Example#685 - A runkit7_function_redefine example</a></li>
<li><a href="function.runkit7-method-add.php#example-687" class="index">Example#686 - runkit7_method_add example</a></li>
<li><a href="function.runkit7-method-copy.php#example-688" class="index">Example#687 - runkit7_method_copy example</a></li>
<li><a href="function.runkit7-method-redefine.php#example-689" class="index">Example#688 - runkit7_method_redefine example</a></li>
<li><a href="function.runkit7-method-remove.php#example-690" class="index">Example#689 - runkit7_method_remove example</a></li>
<li><a href="function.runkit7-method-rename.php#example-691" class="index">Example#690 - runkit7_method_rename example</a></li>
<li><a href="function.runkit7-zval-inspect.php#example-692" class="index">Example#691 - runkit7_zval_inspect example</a></li>
<li><a href="function.uopz-add-function.php#uopz-add-function.example.basic" class="index">Example#692 - Basic uopz_add_function Usage</a></li>
<li><a href="function.uopz-allow-exit.php#uopz-allow-exit.example.basic" class="index">Example#693 - uopz_allow_exit example</a></li>
<li><a href="function.uopz-backup.php#example-695" class="index">Example#694 - uopz_backup example</a></li>
<li><a href="function.uopz-compose.php#example-696" class="index">Example#695 - uopz_compose example</a></li>
<li><a href="function.uopz-copy.php#example-697" class="index">Example#696 - uopz_copy example</a></li>
<li><a href="function.uopz-del-function.php#uopz-del-function.example.basic" class="index">Example#697 - Basic uopz_del_function Usage</a></li>
<li><a href="function.uopz-delete.php#example-699" class="index">Example#698 - uopz_delete example</a></li>
<li><a href="function.uopz-delete.php#example-700" class="index">Example#699 - uopz_delete class example</a></li>
<li><a href="function.uopz-extend.php#example-701" class="index">Example#700 - uopz_extend example</a></li>
<li><a href="function.uopz-flags.php#example-702" class="index">Example#701 - uopz_flags example</a></li>
<li><a href="function.uopz-flags.php#example-703" class="index">Example#702 - &quot;Unfinalize&quot; a Class</a></li>
<li><a href="function.uopz-function.php#example-704" class="index">Example#703 - uopz_function example</a></li>
<li><a href="function.uopz-function.php#example-705" class="index">Example#704 - uopz_function class example</a></li>
<li><a href="function.uopz-get-exit-status.php#uopz-get-exit-status.example.basic" class="index">Example#705 - uopz_get_exit_status example</a></li>
<li><a href="function.uopz-get-hook.php#uopz-get-hook.example.basic" class="index">Example#706 - Basic uopz_get_hook Usage</a></li>
<li><a href="function.uopz-get-mock.php#example-708" class="index">Example#707 - uopz_get_mock example</a></li>
<li><a href="function.uopz-get-property.php#uopz-get-property.example.basic" class="index">Example#708 - Basic uopz_get_property Usage</a></li>
<li><a href="function.uopz-get-return.php#example-710" class="index">Example#709 - uopz_get_return example</a></li>
<li><a href="function.uopz-get-static.php#uopz-get-static.example.basic" class="index">Example#710 - Basic uopz_get_static Usage</a></li>
<li><a href="function.uopz-implement.php#example-712" class="index">Example#711 - uopz_implement example</a></li>
<li><a href="function.uopz-overload.php#example-713" class="index">Example#712 - uopz_overload example</a></li>
<li><a href="function.uopz-redefine.php#example-714" class="index">Example#713 - uopz_redefine example</a></li>
<li><a href="function.uopz-rename.php#example-715" class="index">Example#714 - uopz_rename example</a></li>
<li><a href="function.uopz-rename.php#example-716" class="index">Example#715 - uopz_rename class example</a></li>
<li><a href="function.uopz-restore.php#example-717" class="index">Example#716 - uopz_restore example</a></li>
<li><a href="function.uopz-set-hook.php#uopz-set-hook.example.basic" class="index">Example#717 - Basic uopz_set_hook Usage</a></li>
<li><a href="function.uopz-set-mock.php#example-719" class="index">Example#718 - uopz_set_mock example</a></li>
<li><a href="function.uopz-set-mock.php#example-720" class="index">Example#719 - uopz_set_mock example</a></li>
<li><a href="function.uopz-set-mock.php#uopz_set_mock.example.static" class="index">Example#720 - uopz_set_mock and static members</a></li>
<li><a href="function.uopz-set-property.php#uopz-set-property.example.basic" class="index">Example#721 - Basic uopz_set_property Usage</a></li>
<li><a href="function.uopz-set-return.php#example-723" class="index">Example#722 - uopz_set_return example</a></li>
<li><a href="function.uopz-set-return.php#example-724" class="index">Example#723 - uopz_set_return example</a></li>
<li><a href="function.uopz-set-return.php#example-725" class="index">Example#724 - uopz_set_return class example</a></li>
<li><a href="function.uopz-set-static.php#uopz-set-static.example.basic" class="index">Example#725 - Basic uopz_set_static Usage</a></li>
<li><a href="function.uopz-undefine.php#example-727" class="index">Example#726 - uopz_undefine example</a></li>
<li><a href="function.uopz-unset-hook.php#uopz-unset-hook.example.basic" class="index">Example#727 - Basic uopz_unset_hook Usage</a></li>
<li><a href="function.uopz-unset-mock.php#example-729" class="index">Example#728 - uopz_unset_mock example</a></li>
<li><a href="function.uopz-unset-return.php#example-730" class="index">Example#729 - uopz_unset_return example</a></li>
<li><a href="wincache.configuration.php#example-731" class="index">Example#730 - wincache.ignorelist example</a></li>
<li><a href="wincache.stats.php#example-732" class="index">Example#731 - Authentication configuration for wincache.php</a></li>
<li><a href="wincache.sessionhandler.php#example-733" class="index">Example#732 - Enabling WinCache session handler</a></li>
<li><a href="wincache.reroutes.php#example-734" class="index">Example#733 - Enabling WinCache functions reroutes</a></li>
<li><a href="wincache.reroutes.php#example-735" class="index">Example#734 - Reroute.ini file content</a></li>
<li><a href="function.wincache-fcache-fileinfo.php#example-736" class="index">Example#735 - A wincache_fcache_fileinfo example</a></li>
<li><a href="function.wincache-fcache-meminfo.php#example-737" class="index">Example#736 - A wincache_fcache_meminfo example</a></li>
<li><a href="function.wincache-lock.php#example-738" class="index">Example#737 - Using wincache_lock</a></li>
<li><a href="function.wincache-ocache-fileinfo.php#example-739" class="index">Example#738 - A wincache_ocache_fileinfo example</a></li>
<li><a href="function.wincache-ocache-meminfo.php#example-740" class="index">Example#739 - A wincache_ocache_meminfo example</a></li>
<li><a href="function.wincache-refresh-if-changed.php#example-741" class="index">Example#740 - A wincache_refresh_if_changed example</a></li>
<li><a href="function.wincache-rplist-fileinfo.php#example-742" class="index">Example#741 - A wincache_rplist_fileinfo example</a></li>
<li><a href="function.wincache-rplist-meminfo.php#example-743" class="index">Example#742 - A wincache_rplist_meminfo example</a></li>
<li><a href="function.wincache-scache-info.php#example-744" class="index">Example#743 - A wincache_scache_info example</a></li>
<li><a href="function.wincache-scache-meminfo.php#example-745" class="index">Example#744 - A wincache_scache_meminfo example</a></li>
<li><a href="function.wincache-ucache-add.php#example-746" class="index">Example#745 - wincache_ucache_add with key as a string</a></li>
<li><a href="function.wincache-ucache-add.php#example-747" class="index">Example#746 - wincache_ucache_add with key as an array</a></li>
<li><a href="function.wincache-ucache-cas.php#example-748" class="index">Example#747 - Using wincache_ucache_cas</a></li>
<li><a href="function.wincache-ucache-clear.php#example-749" class="index">Example#748 - using wincache_ucache_clear</a></li>
<li><a href="function.wincache-ucache-dec.php#example-750" class="index">Example#749 - Using wincache_ucache_dec</a></li>
<li><a href="function.wincache-ucache-delete.php#example-751" class="index">Example#750 - Using wincache_ucache_delete with key as a string</a></li>
<li><a href="function.wincache-ucache-delete.php#example-752" class="index">Example#751 - Usingwincache_ucache_delete with key as an array</a></li>
<li><a href="function.wincache-ucache-delete.php#example-753" class="index">Example#752 - Using wincache_ucache_delete with key as an array where some elements cannot be deleted</a></li>
<li><a href="function.wincache-ucache-exists.php#example-754" class="index">Example#753 - Using wincache_ucache_exists</a></li>
<li><a href="function.wincache-ucache-get.php#example-755" class="index">Example#754 - wincache_ucache_get with key as a string</a></li>
<li><a href="function.wincache-ucache-get.php#example-756" class="index">Example#755 - wincache_ucache_get with key as an array</a></li>
<li><a href="function.wincache-ucache-inc.php#example-757" class="index">Example#756 - Using wincache_ucache_inc</a></li>
<li><a href="function.wincache-ucache-info.php#example-758" class="index">Example#757 - Using wincache_ucache_info</a></li>
<li><a href="function.wincache-ucache-meminfo.php#example-759" class="index">Example#758 - A wincache_ucache_meminfo example</a></li>
<li><a href="function.wincache-ucache-set.php#example-760" class="index">Example#759 - wincache_ucache_set with key as a string</a></li>
<li><a href="function.wincache-ucache-set.php#example-761" class="index">Example#760 - wincache_ucache_set with key as an array</a></li>
<li><a href="function.wincache-unlock.php#example-762" class="index">Example#761 - Using wincache_unlock</a></li>
<li><a href="xhprof.examples.php#example-763" class="index">Example#762 - Xhprof example with the optional GUI</a></li>
<li><a href="function.xhprof-disable.php#example-764" class="index">Example#763 - xhprof_disable example</a></li>
<li><a href="function.xhprof-enable.php#example-765" class="index">Example#764 - xhprof_enable examples</a></li>
<li><a href="function.xhprof-sample-disable.php#example-766" class="index">Example#765 - xhprof_sample_disable example</a></li>
<li><a href="yac.add.php#example-767" class="index">Example#766 - Make sure the item is stored</a></li>
<li><a href="radius.constants.attributes.php#example-768" class="index">Example#767 - Using CHAP passwords</a></li>
<li><a href="function.radius-acct-open.php#example-769" class="index">Example#768 - radius_acct_open example</a></li>
<li><a href="function.radius-add-server.php#example-770" class="index">Example#769 - radius_add_server example</a></li>
<li><a href="function.radius-auth-open.php#example-771" class="index">Example#770 - radius_auth_open example</a></li>
<li><a href="function.radius-create-request.php#example-772" class="index">Example#771 - radius_create_request example</a></li>
<li><a href="function.radius-cvt-addr.php#example-773" class="index">Example#772 - radius_cvt_addr example</a></li>
<li><a href="function.radius-cvt-int.php#example-774" class="index">Example#773 - radius_cvt_int example</a></li>
<li><a href="function.radius-cvt-string.php#example-775" class="index">Example#774 - radius_cvt_string example</a></li>
<li><a href="function.radius-get-attr.php#example-776" class="index">Example#775 - radius_get_attr example</a></li>
<li><a href="function.radius-get-tagged-attr-data.php#example-777" class="index">Example#776 - radius_get_tagged_attr_data example</a></li>
<li><a href="function.radius-get-tagged-attr-tag.php#example-778" class="index">Example#777 - radius_get_tagged_attr_tag example</a></li>
<li><a href="function.radius-get-vendor-attr.php#example-779" class="index">Example#778 - radius_get_vendor_attr example</a></li>
<li><a href="function.radius-put-attr.php#example-780" class="index">Example#779 - radius_put_attr example</a></li>
<li><a href="function.radius-put-int.php#example-781" class="index">Example#780 - radius_put_int example</a></li>
<li><a href="function.radius-put-string.php#example-782" class="index">Example#781 - radius_put_string example</a></li>
<li><a href="function.radius-put-vendor-attr.php#example-783" class="index">Example#782 - radius_put_vendor_attr example</a></li>
<li><a href="function.readline.php#example-784" class="index">Example#783 - readline Example</a></li>
<li><a href="function.readline-callback-handler-install.php#example-785" class="index">Example#784 - Readline Callback Interface Example</a></li>
<li><a href="bzip2.examples.php#example-786" class="index">Example#785 - Small bzip2 Example</a></li>
<li><a href="function.bzcompress.php#example-787" class="index">Example#786 - Compressing data</a></li>
<li><a href="function.bzdecompress.php#example-788" class="index">Example#787 - Decompressing a String</a></li>
<li><a href="function.bzerror.php#example-789" class="index">Example#788 - bzerror example</a></li>
<li><a href="function.bzopen.php#example-790" class="index">Example#789 - bzopen example</a></li>
<li><a href="function.bzread.php#example-791" class="index">Example#790 - bzread example</a></li>
<li><a href="function.bzwrite.php#example-792" class="index">Example#791 - bzwrite example</a></li>
<li><a href="intro.phar.php#example-793" class="index">Example#792 - Using an external file</a></li>
<li><a href="intro.phar.php#example-794" class="index">Example#793 - Using a file within a phar archive</a></li>
<li><a href="intro.phar.php#example-795" class="index">Example#794 - Converting a phar archive from phar to tar file format</a></li>
<li><a href="phar.configuration.php#example-796" class="index">Example#795 - phar.cache_list usage example</a></li>
<li><a href="phar.addemptydir.php#example-797" class="index">Example#796 - A Phar::addEmptyDir example</a></li>
<li><a href="phar.addfile.php#example-798" class="index">Example#797 - A Phar::addFile example</a></li>
<li><a href="phar.addfromstring.php#example-799" class="index">Example#798 - A Phar::addFromString example</a></li>
<li><a href="phar.apiversion.php#example-800" class="index">Example#799 - A Phar::apiVersion example</a></li>
<li><a href="phar.buildfromdirectory.php#example-801" class="index">Example#800 - A Phar::buildFromDirectory example</a></li>
<li><a href="phar.buildfromiterator.php#example-802" class="index">Example#801 - A Phar::buildFromIterator with SplFileInfo</a></li>
<li><a href="phar.buildfromiterator.php#example-803" class="index">Example#802 - A Phar::buildFromIterator with other iterators</a></li>
<li><a href="phar.cancompress.php#example-804" class="index">Example#803 - A Phar::canCompress example</a></li>
<li><a href="phar.canwrite.php#example-805" class="index">Example#804 - A Phar::canWrite example</a></li>
<li><a href="phar.compress.php#example-806" class="index">Example#805 - A Phar::compress example</a></li>
<li><a href="phar.compressfiles.php#example-807" class="index">Example#806 - A Phar::compressFiles example</a></li>
<li><a href="phar.construct.php#example-808" class="index">Example#807 - A Phar::__construct example</a></li>
<li><a href="phar.converttodata.php#example-809" class="index">Example#808 - A Phar::convertToData example</a></li>
<li><a href="phar.converttoexecutable.php#example-810" class="index">Example#809 - A Phar::convertToExecutable example</a></li>
<li><a href="phar.copy.php#example-811" class="index">Example#810 - A Phar::copy example</a></li>
<li><a href="phar.count.php#example-812" class="index">Example#811 - A Phar::count example</a></li>
<li><a href="phar.createdefaultstub.php#example-813" class="index">Example#812 - A Phar::createDefaultStub example</a></li>
<li><a href="phar.decompress.php#example-814" class="index">Example#813 - A Phar::decompress example</a></li>
<li><a href="phar.decompressfiles.php#example-815" class="index">Example#814 - A Phar::decompressFiles example</a></li>
<li><a href="phar.delmetadata.php#example-816" class="index">Example#815 - A Phar::delMetaData example</a></li>
<li><a href="phar.delete.php#example-817" class="index">Example#816 - A Phar::delete example</a></li>
<li><a href="phar.extractto.php#example-818" class="index">Example#817 - A Phar::extractTo example</a></li>
<li><a href="phar.getmetadata.php#example-819" class="index">Example#818 - A Phar::getMetadata example</a></li>
<li><a href="phar.getstub.php#example-820" class="index">Example#819 - A Phar::getStub example</a></li>
<li><a href="phar.hasmetadata.php#example-821" class="index">Example#820 - A Phar::hasMetadata example</a></li>
<li><a href="phar.interceptfilefuncs.php#example-822" class="index">Example#821 - A Phar::interceptFileFuncs example</a></li>
<li><a href="phar.interceptfilefuncs.php#example-823" class="index">Example#822 - A Phar::interceptFileFuncs example</a></li>
<li><a href="phar.isbuffering.php#example-824" class="index">Example#823 - A Phar::isBuffering example</a></li>
<li><a href="phar.iscompressed.php#example-825" class="index">Example#824 - A Phar::isCompressed example</a></li>
<li><a href="phar.loadphar.php#example-826" class="index">Example#825 - A Phar::loadPhar example</a></li>
<li><a href="phar.mapphar.php#example-827" class="index">Example#826 - A Phar::mapPhar example</a></li>
<li><a href="phar.mount.php#example-828" class="index">Example#827 - A Phar::mount example</a></li>
<li><a href="phar.mungserver.php#example-829" class="index">Example#828 - A Phar::mungServer example</a></li>
<li><a href="phar.offsetexists.php#example-830" class="index">Example#829 - A Phar::offsetExists example</a></li>
<li><a href="phar.offsetget.php#example-831" class="index">Example#830 - Phar::offsetGet example</a></li>
<li><a href="phar.offsetset.php#example-832" class="index">Example#831 - A Phar::offsetSet example</a></li>
<li><a href="phar.offsetunset.php#example-833" class="index">Example#832 - A Phar::offsetUnset example</a></li>
<li><a href="phar.running.php#example-834" class="index">Example#833 - A Phar::running example</a></li>
<li><a href="phar.setalias.php#example-835" class="index">Example#834 - A Phar::setAlias example</a></li>
<li><a href="phar.setdefaultstub.php#example-836" class="index">Example#835 - A Phar::setDefaultStub example</a></li>
<li><a href="phar.setmetadata.php#example-837" class="index">Example#836 - A Phar::setMetadata example</a></li>
<li><a href="phar.setstub.php#example-838" class="index">Example#837 - A Phar::setStub example</a></li>
<li><a href="phar.startbuffering.php#example-839" class="index">Example#838 - A Phar::startBuffering example</a></li>
<li><a href="phar.stopbuffering.php#example-840" class="index">Example#839 - A Phar::stopBuffering example</a></li>
<li><a href="phar.unlinkarchive.php#example-841" class="index">Example#840 - A Phar::unlinkArchive example</a></li>
<li><a href="phar.webphar.php#example-842" class="index">Example#841 - A Phar::webPhar example</a></li>
<li><a href="phardata.addemptydir.php#example-843" class="index">Example#842 - A PharData::addEmptyDir example</a></li>
<li><a href="phardata.addfile.php#example-844" class="index">Example#843 - A PharData::addFile example</a></li>
<li><a href="phardata.addfromstring.php#example-845" class="index">Example#844 - A PharData::addFromString example</a></li>
<li><a href="phardata.buildfromdirectory.php#example-846" class="index">Example#845 - A PharData::buildFromDirectory example</a></li>
<li><a href="phardata.buildfromiterator.php#example-847" class="index">Example#846 - A PharData::buildFromIterator with SplFileInfo</a></li>
<li><a href="phardata.buildfromiterator.php#example-848" class="index">Example#847 - A PharData::buildFromIterator with other iterators</a></li>
<li><a href="phardata.compress.php#example-849" class="index">Example#848 - A PharData::compress example</a></li>
<li><a href="phardata.compressfiles.php#example-850" class="index">Example#849 - A PharData::compressFiles example</a></li>
<li><a href="phardata.construct.php#example-851" class="index">Example#850 - A PharData::__construct example</a></li>
<li><a href="phardata.converttodata.php#example-852" class="index">Example#851 - A PharData::convertToData example</a></li>
<li><a href="phardata.converttoexecutable.php#example-853" class="index">Example#852 - A PharData::convertToExecutable example</a></li>
<li><a href="phardata.copy.php#example-854" class="index">Example#853 - A PharData::copy example</a></li>
<li><a href="phardata.decompress.php#example-855" class="index">Example#854 - A PharData::decompress example</a></li>
<li><a href="phardata.decompressfiles.php#example-856" class="index">Example#855 - A PharData::decompressFiles example</a></li>
<li><a href="phardata.delmetadata.php#example-857" class="index">Example#856 - A PharData::delMetaData example</a></li>
<li><a href="phardata.delete.php#example-858" class="index">Example#857 - A PharData::delete example</a></li>
<li><a href="phardata.extractto.php#example-859" class="index">Example#858 - A PharData::extractTo example</a></li>
<li><a href="phardata.offsetset.php#example-860" class="index">Example#859 - A PharData::offsetSet example</a></li>
<li><a href="phardata.offsetunset.php#example-861" class="index">Example#860 - A PharData::offsetUnset example</a></li>
<li><a href="phardata.setmetadata.php#example-862" class="index">Example#861 - A Phar::setMetadata example</a></li>
<li><a href="pharfileinfo.chmod.php#example-863" class="index">Example#862 - A PharFileInfo::chmod example</a></li>
<li><a href="pharfileinfo.compress.php#example-864" class="index">Example#863 - A PharFileInfo::compress example</a></li>
<li><a href="pharfileinfo.construct.php#example-865" class="index">Example#864 - A PharFileInfo::__construct example</a></li>
<li><a href="pharfileinfo.decompress.php#example-866" class="index">Example#865 - A PharFileInfo::decompress example</a></li>
<li><a href="pharfileinfo.delmetadata.php#example-867" class="index">Example#866 - A PharFileInfo::delMetaData example</a></li>
<li><a href="pharfileinfo.getcrc32.php#example-868" class="index">Example#867 - A PharFileInfo::getCRC32 example</a></li>
<li><a href="pharfileinfo.getcompressedsize.php#example-869" class="index">Example#868 - A PharFileInfo::getCompressedSize example</a></li>
<li><a href="pharfileinfo.getmetadata.php#example-870" class="index">Example#869 - A PharFileInfo::getMetadata example</a></li>
<li><a href="pharfileinfo.getpharflags.php#example-871" class="index">Example#870 - A PharFileInfo::getPharFlags example</a></li>
<li><a href="pharfileinfo.iscrcchecked.php#example-872" class="index">Example#871 - A PharFileInfo::isCRCChecked example</a></li>
<li><a href="pharfileinfo.iscompressed.php#example-873" class="index">Example#872 - A PharFileInfo::isCompressed example</a></li>
<li><a href="pharfileinfo.setmetadata.php#example-874" class="index">Example#873 - A PharFileInfo::setMetadata example</a></li>
<li><a href="rar.installation.php#example-875" class="index">Example#874 - Rar installation</a></li>
<li><a href="rar.examples.php#example-876" class="index">Example#875 - On-the-fly decompression</a></li>
<li><a href="rar.examples.php#example-877" class="index">Example#876 - RAR extension filesystem extraction example</a></li>
<li><a href="rararchive.close.php#example-878" class="index">Example#877 - Object-oriented style</a></li>
<li><a href="rararchive.close.php#example-879" class="index">Example#878 - Procedural style</a></li>
<li><a href="rararchive.getcomment.php#example-880" class="index">Example#879 - Object-oriented style</a></li>
<li><a href="rararchive.getcomment.php#example-881" class="index">Example#880 - Procedural style</a></li>
<li><a href="rararchive.getentries.php#example-882" class="index">Example#881 - Object-oriented style</a></li>
<li><a href="rararchive.getentries.php#example-883" class="index">Example#882 - Procedural style</a></li>
<li><a href="rararchive.getentry.php#example-884" class="index">Example#883 - Object-oriented style</a></li>
<li><a href="rararchive.getentry.php#example-885" class="index">Example#884 - Procedural style</a></li>
<li><a href="rararchive.isbroken.php#example-886" class="index">Example#885 - Object-oriented style</a></li>
<li><a href="rararchive.isbroken.php#example-887" class="index">Example#886 - Procedural style</a></li>
<li><a href="rararchive.issolid.php#example-888" class="index">Example#887 - Object-oriented style</a></li>
<li><a href="rararchive.issolid.php#example-889" class="index">Example#888 - Procedural style</a></li>
<li><a href="rararchive.open.php#example-890" class="index">Example#889 - Object-oriented style</a></li>
<li><a href="rararchive.open.php#example-891" class="index">Example#890 - Procedural style</a></li>
<li><a href="rararchive.open.php#example-892" class="index">Example#891 - Volume Callback</a></li>
<li><a href="rararchive.setallowbroken.php#example-893" class="index">Example#892 - Object-oriented style</a></li>
<li><a href="rararchive.setallowbroken.php#example-894" class="index">Example#893 - Procedural style</a></li>
<li><a href="rararchive.tostring.php#example-895" class="index">Example#894 - RarArchive::__toString example</a></li>
<li><a href="rarentry.extract.php#example-896" class="index">Example#895 - RarEntry::extract example</a></li>
<li><a href="rarentry.extract.php#example-897" class="index">Example#896 - How to extract all files in archive:</a></li>
<li><a href="rarentry.getattr.php#example-898" class="index">Example#897 - RarEntry::getAttr example</a></li>
<li><a href="rarentry.gethostos.php#example-899" class="index">Example#898 - RarEntry::getHostOs example (version &gt;= 2.0.0)</a></li>
<li><a href="rarentry.gethostos.php#example-900" class="index">Example#899 - RarEntry::getHostOs example (version &lt;= 1.0.0)</a></li>
<li><a href="rarentry.getmethod.php#example-901" class="index">Example#900 - RarEntry::getMethod example</a></li>
<li><a href="rarentry.getname.php#example-902" class="index">Example#901 - RarEntry::getName example</a></li>
<li><a href="rarentry.getpackedsize.php#example-903" class="index">Example#902 - RarEntry::getPackedSize example</a></li>
<li><a href="rarentry.getstream.php#example-904" class="index">Example#903 - RarEntry::getStream example</a></li>
<li><a href="rarentry.getunpackedsize.php#example-905" class="index">Example#904 - RarEntry::getUnpackedSize example</a></li>
<li><a href="rarentry.getversion.php#example-906" class="index">Example#905 - RarEntry::getVersion example</a></li>
<li><a href="rarexception.isusingexceptions.php#example-907" class="index">Example#906 - RarException::isUsingExceptions example</a></li>
<li><a href="rarexception.setusingexceptions.php#example-908" class="index">Example#907 - RarException::setUsingExceptions example</a></li>
<li><a href="zip.examples.php#example-909" class="index">Example#908 - Create a Zip archive</a></li>
<li><a href="zip.examples.php#example-910" class="index">Example#909 - Dump the archive details and listing</a></li>
<li><a href="zip.examples.php#example-911" class="index">Example#910 - Zip stream wrapper, read an OpenOffice meta info</a></li>
<li><a href="zip.examples.php#example-912" class="index">Example#911 - Zip Usage Example</a></li>
<li><a href="ziparchive.addemptydir.php#example-913" class="index">Example#912 - Create a new directory in an archive</a></li>
<li><a href="ziparchive.addfile.php#example-914" class="index">Example#913 - Open and add</a></li>
<li><a href="ziparchive.addfromstring.php#example-915" class="index">Example#914 - Add an entry to a new archive</a></li>
<li><a href="ziparchive.addfromstring.php#example-916" class="index">Example#915 - Add file to a directory inside an archive</a></li>
<li><a href="ziparchive.addglob.php#ziparchive.addglob.example.basic" class="index">Example#916 - ZipArchive::addGlob example</a></li>
<li><a href="ziparchive.addpattern.php#ziparchive.addpattern.example.basic" class="index">Example#917 - ZipArchive::addPattern example</a></li>
<li><a href="ziparchive.deleteindex.php#example-919" class="index">Example#918 - Delete file from archive using its index</a></li>
<li><a href="ziparchive.deletename.php#example-920" class="index">Example#919 - Deleting a file and directory from an archive, using names</a></li>
<li><a href="ziparchive.extractto.php#example-921" class="index">Example#920 - Extract all entries</a></li>
<li><a href="ziparchive.extractto.php#example-922" class="index">Example#921 - Extract two entries</a></li>
<li><a href="ziparchive.getarchivecomment.php#example-923" class="index">Example#922 - Dump an archive comment</a></li>
<li><a href="ziparchive.getarchiveflag.php#example-924" class="index">Example#923 - Test if archive is a torrentzip format</a></li>
<li><a href="ziparchive.getcommentindex.php#example-925" class="index">Example#924 - Dump an entry comment</a></li>
<li><a href="ziparchive.getcommentname.php#example-926" class="index">Example#925 - Dump an entry comment</a></li>
<li><a href="ziparchive.getexternalattributesindex.php#ziparchive.getexternalattributesindex.examples.perms" class="index">Example#926 - Extract all entries with Unix rights</a></li>
<li><a href="ziparchive.getfromindex.php#example-928" class="index">Example#927 - Get the file contents</a></li>
<li><a href="ziparchive.getfromname.php#example-929" class="index">Example#928 - Get the file contents</a></li>
<li><a href="ziparchive.getfromname.php#example-930" class="index">Example#929 - Convert an image from a zip entry</a></li>
<li><a href="ziparchive.getnameindex.php#example-931" class="index">Example#930 - ZipArchive::getNameIndex example</a></li>
<li><a href="ziparchive.getstream.php#example-932" class="index">Example#931 - Get the entry contents with fread and store it</a></li>
<li><a href="ziparchive.getstream.php#example-933" class="index">Example#932 - Same as the previous example but with fopen and the zip
     stream wrapper</a></li>
<li><a href="ziparchive.getstream.php#example-934" class="index">Example#933 - Stream wrapper and image, can be used with the xml function
     as well</a></li>
<li><a href="ziparchive.getstreamindex.php#example-935" class="index">Example#934 - Get the entry contents with fread and store it</a></li>
<li><a href="ziparchive.getstreamname.php#example-936" class="index">Example#935 - Get the entry contents with fread and store it</a></li>
<li><a href="ziparchive.locatename.php#example-937" class="index">Example#936 - Create an archive and then use it with ZipArchive::locateName</a></li>
<li><a href="ziparchive.open.php#example-938" class="index">Example#937 - Open and extract</a></li>
<li><a href="ziparchive.open.php#example-939" class="index">Example#938 - Create an archive</a></li>
<li><a href="ziparchive.open.php#example-940" class="index">Example#939 - Create an temporary archive</a></li>
<li><a href="ziparchive.registercancelcallback.php#example-941" class="index">Example#940 - Archive a file</a></li>
<li><a href="ziparchive.registerprogresscallback.php#example-942" class="index">Example#941 - Archive a file</a></li>
<li><a href="ziparchive.renameindex.php#example-943" class="index">Example#942 - Rename one entry</a></li>
<li><a href="ziparchive.renamename.php#example-944" class="index">Example#943 - Rename one entry</a></li>
<li><a href="ziparchive.replacefile.php#example-945" class="index">Example#944 - Open and replace</a></li>
<li><a href="ziparchive.setarchivecomment.php#example-946" class="index">Example#945 - Create an archive and set a comment</a></li>
<li><a href="ziparchive.setarchiveflag.php#example-947" class="index">Example#946 - Create a torrentzip archive</a></li>
<li><a href="ziparchive.setcommentindex.php#example-948" class="index">Example#947 - Open an archive and set a comment for an entry</a></li>
<li><a href="ziparchive.setcommentname.php#example-949" class="index">Example#948 - Open an archive and set a comment for an entry</a></li>
<li><a href="ziparchive.setcompressionindex.php#example-950" class="index">Example#949 - Add files with different compression methods to an archive</a></li>
<li><a href="ziparchive.setcompressionname.php#example-951" class="index">Example#950 - Add files with different compression methods to an archive</a></li>
<li><a href="ziparchive.setcompressionname.php#example-952" class="index">Example#951 - Add file and set compression method</a></li>
<li><a href="ziparchive.setencryptionname.php#example-953" class="index">Example#952 - Archive and encrypt a file</a></li>
<li><a href="ziparchive.setexternalattributesname.php#example-954" class="index">Example#953 - Archive a file, with its Unix rights</a></li>
<li><a href="ziparchive.setmtimeindex.php#example-955" class="index">Example#954 - Archive a file</a></li>
<li><a href="ziparchive.setmtimename.php#example-956" class="index">Example#955 - Archive a file</a></li>
<li><a href="ziparchive.statindex.php#example-957" class="index">Example#956 - Dump the stat info of an entry</a></li>
<li><a href="ziparchive.statname.php#example-958" class="index">Example#957 - Dump the stat info of an entry</a></li>
<li><a href="zlib.examples.php#example-959" class="index">Example#958 - Small Zlib Example</a></li>
<li><a href="zlib.examples.php#example-960" class="index">Example#959 - Working with the incremental compression and decompression API</a></li>
<li><a href="function.gzclose.php#example-961" class="index">Example#960 - gzclose example</a></li>
<li><a href="function.gzcompress.php#example-962" class="index">Example#961 - gzcompress example</a></li>
<li><a href="function.gzdeflate.php#example-963" class="index">Example#962 - gzdeflate example</a></li>
<li><a href="function.gzencode.php#example-964" class="index">Example#963 - Creating a gzip file</a></li>
<li><a href="function.gzeof.php#example-965" class="index">Example#964 - gzeof example</a></li>
<li><a href="function.gzfile.php#example-966" class="index">Example#965 - gzfile example</a></li>
<li><a href="function.gzgetc.php#example-967" class="index">Example#966 - gzgetc example</a></li>
<li><a href="function.gzgets.php#example-968" class="index">Example#967 - gzgets example</a></li>
<li><a href="function.gzgetss.php#example-969" class="index">Example#968 - gzgetss example</a></li>
<li><a href="function.gzinflate.php#example-970" class="index">Example#969 - gzinflate example</a></li>
<li><a href="function.gzopen.php#example-971" class="index">Example#970 - gzopen Example</a></li>
<li><a href="function.gzpassthru.php#example-972" class="index">Example#971 - gzpassthru example</a></li>
<li><a href="function.gzread.php#example-973" class="index">Example#972 - gzread example</a></li>
<li><a href="function.gzseek.php#example-974" class="index">Example#973 - gzseek example</a></li>
<li><a href="function.gzuncompress.php#example-975" class="index">Example#974 - gzuncompress example</a></li>
<li><a href="function.gzwrite.php#example-976" class="index">Example#975 - gzwrite example</a></li>
<li><a href="function.ob-gzhandler.php#example-977" class="index">Example#976 - ob_gzhandler example</a></li>
<li><a href="function.zlib-encode.php#zlib-encode.example.basic" class="index">Example#977 - zlib_encode example</a></li>
<li><a href="function.hash.php#example-979" class="index">Example#978 - A hash example</a></li>
<li><a href="function.hash-algos.php#example-980" class="index">Example#979 - hash_algos example</a></li>
<li><a href="function.hash-copy.php#example-981" class="index">Example#980 - hash_copy example</a></li>
<li><a href="function.hash-equals.php#foobar.examples.basic" class="index">Example#981 - hash_equals example</a></li>
<li><a href="function.hash-file.php#example-983" class="index">Example#982 - Using hash_file</a></li>
<li><a href="function.hash-hkdf.php#example-984" class="index">Example#983 - hash_hkdf example</a></li>
<li><a href="function.hash-hmac.php#example-985" class="index">Example#984 - hash_hmac example</a></li>
<li><a href="function.hash-hmac-algos.php#hash-hmac-algos.example.basic" class="index">Example#985 - hash_hmac_algos example</a></li>
<li><a href="function.hash-hmac-file.php#example-987" class="index">Example#986 - hash_hmac_file example</a></li>
<li><a href="function.hash-init.php#example-988" class="index">Example#987 - Incremental hashing example</a></li>
<li><a href="function.hash-pbkdf2.php#example-989" class="index">Example#988 - hash_pbkdf2 example, basic usage</a></li>
<li><a href="function.hash-update-stream.php#example-990" class="index">Example#989 - hash_update_stream example</a></li>
<li><a href="function.mcrypt-create-iv.php#example-991" class="index">Example#990 - mcrypt_create_iv Example</a></li>
<li><a href="function.mcrypt-enc-get-algorithms-name.php#example-992" class="index">Example#991 - mcrypt_enc_get_algorithms_name example</a></li>
<li><a href="function.mcrypt-enc-get-modes-name.php#example-993" class="index">Example#992 - mcrypt_enc_get_modes_name example</a></li>
<li><a href="function.mcrypt-enc-get-supported-key-sizes.php#example-994" class="index">Example#993 - mcrypt_enc_get_supported_key_sizes example</a></li>
<li><a href="function.mcrypt-encrypt.php#example-995" class="index">Example#994 - mcrypt_encrypt Example</a></li>
<li><a href="function.mcrypt-get-block-size.php#example-996" class="index">Example#995 - mcrypt_get_block_size example</a></li>
<li><a href="function.mcrypt-get-cipher-name.php#example-997" class="index">Example#996 - mcrypt_get_cipher_name Example</a></li>
<li><a href="function.mcrypt-get-iv-size.php#example-998" class="index">Example#997 - mcrypt_get_iv_size Example</a></li>
<li><a href="function.mcrypt-get-key-size.php#example-999" class="index">Example#998 - mcrypt_get_key_size Example</a></li>
<li><a href="function.mcrypt-list-algorithms.php#example-1000" class="index">Example#999 - mcrypt_list_algorithms Example</a></li>
<li><a href="function.mcrypt-list-modes.php#example-1001" class="index">Example#1000 - mcrypt_list_modes Example</a></li>
<li><a href="function.mcrypt-module-open.php#example-1002" class="index">Example#1001 - mcrypt_module_open Examples</a></li>
<li><a href="function.mcrypt-module-open.php#example-1003" class="index">Example#1002 - Using mcrypt_module_open in encryption</a></li>
<li><a href="function.mcrypt-module-self-test.php#example-1004" class="index">Example#1003 - mcrypt_module_self_test example</a></li>
<li><a href="function.mdecrypt-generic.php#example-1005" class="index">Example#1004 - mdecrypt_generic Example</a></li>
<li><a href="mhash.examples.php#example-1006" class="index">Example#1005 - Computes the MD5 digest and hmac and print it out as hex</a></li>
<li><a href="function.mhash-count.php#example-1007" class="index">Example#1006 - Traversing all hashes</a></li>
<li><a href="function.mhash-get-block-size.php#example-1008" class="index">Example#1007 - mhash_get_block_size Example</a></li>
<li><a href="function.mhash-get-hash-name.php#example-1009" class="index">Example#1008 - mhash_get_hash_name Example</a></li>
<li><a href="function.openssl-cipher-iv-length.php#openssl-cipher-iv-length.example.basic" class="index">Example#1009 - openssl_cipher_iv_length example</a></li>
<li><a href="function.openssl-cipher-key-length.php#example-1011" class="index">Example#1010 - openssl_cipher_key_length example</a></li>
<li><a href="function.openssl-cms-sign.php#example-1012" class="index">Example#1011 - openssl_cms_sign example</a></li>
<li><a href="function.openssl-csr-export.php#example-1013" class="index">Example#1012 - openssl_csr_export() example</a></li>
<li><a href="function.openssl-csr-export-to-file.php#example-1014" class="index">Example#1013 - openssl_csr_export_to_file() example</a></li>
<li><a href="function.openssl-csr-get-public-key.php#example-1015" class="index">Example#1014 - openssl_csr_get_public_key() example</a></li>
<li><a href="function.openssl-csr-get-subject.php#example-1016" class="index">Example#1015 - openssl_csr_get_subject() example</a></li>
<li><a href="function.openssl-csr-new.php#example-1017" class="index">Example#1016 - Creating a self-signed certificate</a></li>
<li><a href="function.openssl-csr-new.php#example-1018" class="index">Example#1017 - Creating a self-signed ECC certificate (as of PHP 7.1.0)</a></li>
<li><a href="function.openssl-csr-sign.php#example-1019" class="index">Example#1018 - openssl_csr_sign example - signing a
     CSR (how to implement your own CA)</a></li>
<li><a href="function.openssl-dh-compute-key.php#example-1020" class="index">Example#1019 - Compute a shared secret</a></li>
<li><a href="function.openssl-dh-compute-key.php#example-1021" class="index">Example#1020 - Generate a DH public/private keypair in php</a></li>
<li><a href="function.openssl-encrypt.php#example-1022" class="index">Example#1021 - AES Authenticated Encryption in GCM mode example for PHP 7.1+</a></li>
<li><a href="function.openssl-encrypt.php#example-1023" class="index">Example#1022 - AES Authenticated Encryption example prior to PHP 7.1</a></li>
<li><a href="function.openssl-error-string.php#example-1024" class="index">Example#1023 - openssl_error_string example</a></li>
<li><a href="function.openssl-get-cert-locations.php#example-1025" class="index">Example#1024 - openssl_get_cert_locations example</a></li>
<li><a href="function.openssl-get-cipher-methods.php#example-1026" class="index">Example#1025 - openssl_get_cipher_methods example</a></li>
<li><a href="function.openssl-get-curve-names.php#example-1027" class="index">Example#1026 - openssl_get_curve_names example</a></li>
<li><a href="function.openssl-get-md-methods.php#example-1028" class="index">Example#1027 - openssl_get_md_methods example</a></li>
<li><a href="function.openssl-open.php#example-1029" class="index">Example#1028 - openssl_open example</a></li>
<li><a href="function.openssl-pbkdf2.php#example-1030" class="index">Example#1029 - openssl_pbkdf2() example</a></li>
<li><a href="function.openssl-pkcs12-read.php#example-1031" class="index">Example#1030 - openssl_pkcs12_read example</a></li>
<li><a href="function.openssl-pkcs7-decrypt.php#example-1032" class="index">Example#1031 - openssl_pkcs7_decrypt example</a></li>
<li><a href="function.openssl-pkcs7-encrypt.php#example-1033" class="index">Example#1032 - openssl_pkcs7_encrypt example</a></li>
<li><a href="function.openssl-pkcs7-read.php#example-1034" class="index">Example#1033 - Get a PEM array from a P7B file</a></li>
<li><a href="function.openssl-pkcs7-sign.php#example-1035" class="index">Example#1034 - openssl_pkcs7_sign example</a></li>
<li><a href="function.openssl-pkey-derive.php#openssl-pkey-derive.example.basic" class="index">Example#1035 - openssl_pkey_derive example</a></li>
<li><a href="function.openssl-pkey-new.php#function.openssl-pkey-new.example.public-key" class="index">Example#1036 - Obtain the public key from a private key</a></li>
<li><a href="function.openssl-pkey-new.php#function.openssl-pkey-new.example.rsa-key" class="index">Example#1037 - Generating RSA key from parameters</a></li>
<li><a href="function.openssl-random-pseudo-bytes.php#example-1039" class="index">Example#1038 - openssl_random_pseudo_bytes example</a></li>
<li><a href="function.openssl-seal.php#example-1040" class="index">Example#1039 - openssl_seal example</a></li>
<li><a href="function.openssl-sign.php#example-1041" class="index">Example#1040 - openssl_sign example</a></li>
<li><a href="function.openssl-sign.php#example-1042" class="index">Example#1041 - openssl_sign example</a></li>
<li><a href="function.openssl-spki-export.php#openssl_spki_export.example.basic" class="index">Example#1042 - openssl_spki_export example</a></li>
<li><a href="function.openssl-spki-export.php#openssl_spki_export.example.keygen" class="index">Example#1043 - openssl_spki_export example from &lt;keygen&gt;</a></li>
<li><a href="function.openssl-spki-export-challenge.php#openssl_spki_export_challenge.example.basic" class="index">Example#1044 - openssl_spki_export_challenge example</a></li>
<li><a href="function.openssl-spki-export-challenge.php#openssl_spki_export_challenge.example.keygen" class="index">Example#1045 - openssl_spki_export_challenge example from &lt;keygen&gt;</a></li>
<li><a href="function.openssl-spki-new.php#openssl_spki_new.example.basic" class="index">Example#1046 - openssl_spki_new example</a></li>
<li><a href="function.openssl-spki-verify.php#openssl_spki_verify.example.basic" class="index">Example#1047 - openssl_spki_verify example</a></li>
<li><a href="function.openssl-spki-verify.php#openssl_spki_verify.example.keygen" class="index">Example#1048 - openssl_spki_verify example from &lt;keygen&gt;</a></li>
<li><a href="function.openssl-verify.php#example-1050" class="index">Example#1049 - openssl_verify example</a></li>
<li><a href="function.openssl-verify.php#example-1051" class="index">Example#1050 - openssl_verify example</a></li>
<li><a href="function.openssl-x509-verify.php#example-1052" class="index">Example#1051 - openssl_x509_verify example</a></li>
<li><a href="function.password-algos.php#password-algos.example.basic" class="index">Example#1052 - Basic password_algos usage</a></li>
<li><a href="function.password-hash.php#example-1054" class="index">Example#1053 - password_hash example</a></li>
<li><a href="function.password-hash.php#example-1055" class="index">Example#1054 - password_hash example setting cost manually</a></li>
<li><a href="function.password-hash.php#example-1056" class="index">Example#1055 - password_hash example finding a good cost</a></li>
<li><a href="function.password-hash.php#example-1057" class="index">Example#1056 - password_hash example using Argon2i</a></li>
<li><a href="function.password-needs-rehash.php#example-1058" class="index">Example#1057 - Usage of password_needs_rehash</a></li>
<li><a href="function.password-verify.php#example-1059" class="index">Example#1058 - password_verify example</a></li>
<li><a href="rnp.examples-clearsign.php#example-1060" class="index">Example#1059 - RNP clearsign example</a></li>
<li><a href="function.rnp-ffi-set-pass-provider.php#example-1061" class="index">Example#1060 - simple callback function example</a></li>
<li><a href="function.sodium-crypto-box-seal.php#sodium-crypto-box-seal.example.basic" class="index">Example#1061 - sodium_crypto_box_seal example</a></li>
<li><a href="function.sodium-crypto-box-seal-open.php#sodium-crypto-box-seal-open.example.basic" class="index">Example#1062 - sodium_crypto_box_seal_open example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-add.php#example-1064" class="index">Example#1063 - sodium_crypto_core_ristretto255_add example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-from-hash.php#example-1065" class="index">Example#1064 - sodium_crypto_core_ristretto255_from_hash example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-is-valid-point.php#example-1066" class="index">Example#1065 - sodium_crypto_core_ristretto255_is_valid_point example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-random.php#example-1067" class="index">Example#1066 - sodium_crypto_core_ristretto255_random example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-scalar-add.php#example-1068" class="index">Example#1067 - sodium_crypto_core_ristretto255_scalar_add example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-scalar-invert.php#example-1069" class="index">Example#1068 - sodium_crypto_core_ristretto255_scalar_invert example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-scalar-negate.php#example-1070" class="index">Example#1069 - sodium_crypto_core_ristretto255_scalar_negate example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-scalar-random.php#example-1071" class="index">Example#1070 - sodium_crypto_core_ristretto255_scalar_random example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-scalar-sub.php#example-1072" class="index">Example#1071 - sodium_crypto_core_ristretto255_scalar_sub example</a></li>
<li><a href="function.sodium-crypto-core-ristretto255-sub.php#example-1073" class="index">Example#1072 - sodium_crypto_core_ristretto255_sub example</a></li>
<li><a href="function.sodium-crypto-generichash-final.php#sodium-crypto-generichash-final.example.basic" class="index">Example#1073 - sodium_crypto_generichash_final example</a></li>
<li><a href="function.sodium-crypto-generichash-init.php#sodium-crypto-generichash-init.example.basic" class="index">Example#1074 - sodium_crypto_generichash_init example</a></li>
<li><a href="function.sodium-crypto-generichash-update.php#sodium-crypto-generichash-update.example.basic" class="index">Example#1075 - sodium_crypto_generichash_update example</a></li>
<li><a href="function.sodium-crypto-kx-keypair.php#sodium-crypto-kx-keypair.example.basic" class="index">Example#1076 - sodium_crypto_kx_keypair usage</a></li>
<li><a href="function.sodium-crypto-pwhash.php#example-1078" class="index">Example#1077 - sodium_crypto_pwhash example</a></li>
<li><a href="function.sodium-crypto-pwhash-str.php#example-1079" class="index">Example#1078 - sodium_crypto_pwhash_str example</a></li>
<li><a href="function.sodium-crypto-secretbox.php#example-1080" class="index">Example#1079 - sodium_crypto_secretbox example</a></li>
<li><a href="function.sodium-crypto-secretbox-keygen.php#example-1081" class="index">Example#1080 - sodium_crypto_secretbox_keygen example</a></li>
<li><a href="function.sodium-crypto-secretbox-keygen.php#example-1082" class="index">Example#1081 - Comparing sodium_crypto_secretbox_keygen
     with random_bytes</a></li>
<li><a href="function.sodium-crypto-secretbox-open.php#example-1083" class="index">Example#1082 - sodium_crypto_secretbox_open example</a></li>
<li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.php#sodium-crypto-secretstream-xchacha20poly1305-init-pull.example.basic" class="index">Example#1083 - sodium_crypto_secretstream_xchacha20poly1305_init_pull example</a></li>
<li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-init-push.php#sodium-crypto-secretstream-xchacha20poly1305-init-push.example.basic" class="index">Example#1084 - sodium_crypto_secretstream_xchacha20poly1305_init_push example</a></li>
<li><a href="function.sodium-crypto-stream-xchacha20-xor-ic.php#example-1086" class="index">Example#1085 - sodium_crypto_stream_xchacha20_xor_ic example</a></li>
<li><a href="function.crypt-checksalt.php#example-1087" class="index">Example#1086 - A crypt_checksalt example</a></li>
<li><a href="function.crypt-gensalt.php#example-1088" class="index">Example#1087 - A crypt_gensalt example</a></li>
<li><a href="function.crypt-preferred-method.php#example-1089" class="index">Example#1088 - A crypt_preferred_method example</a></li>
<li><a href="dba.example.php#example-1090" class="index">Example#1089 - DBA example</a></li>
<li><a href="dba.example.php#example-1091" class="index">Example#1090 - Traversing a database</a></li>
<li><a href="function.dba-handlers.php#example-1092" class="index">Example#1091 - dba_handlers Example</a></li>
<li><a href="function.odbc-columnprivileges.php#odbc-columnprivileges.example.basic" class="index">Example#1092 - List Privileges for a Column</a></li>
<li><a href="function.odbc-columns.php#odbc-columns.example.basic" class="index">Example#1093 - List Columns of a Table</a></li>
<li><a href="function.odbc-connect.php#example-1095" class="index">Example#1094 - DSN-less connections</a></li>
<li><a href="function.odbc-connection-string-quote.php#odbc-connection-string-quote.example.basic" class="index">Example#1095 - odbc_connection_string_quote example</a></li>
<li><a href="function.odbc-data-source.php#odbc-data-source.example.basic" class="index">Example#1096 - List available DSNs</a></li>
<li><a href="function.odbc-execute.php#example-1098" class="index">Example#1097 - odbc_execute and odbc_prepare example</a></li>
<li><a href="function.odbc-fetch-into.php#example-1099" class="index">Example#1098 - odbc_fetch_into examples</a></li>
<li><a href="function.odbc-next-result.php#example-1100" class="index">Example#1099 - odbc_next_result</a></li>
<li><a href="function.odbc-prepare.php#example-1101" class="index">Example#1100 - odbc_execute and odbc_prepare example</a></li>
<li><a href="function.odbc-primarykeys.php#odbc-primarykeys.example.basic" class="index">Example#1101 - List primary Keys of a Column</a></li>
<li><a href="function.odbc-procedurecolumns.php#odbc-procedurecolumns.example.basic" class="index">Example#1102 - List Columns of a stored Procedure</a></li>
<li><a href="function.odbc-procedures.php#odbc-procedures.example.basic" class="index">Example#1103 - List stored Procedures of a Database</a></li>
<li><a href="function.odbc-result.php#example-1105" class="index">Example#1104 - odbc_result examples</a></li>
<li><a href="function.odbc-setoption.php#example-1106" class="index">Example#1105 - odbc_setoption examples</a></li>
<li><a href="function.odbc-statistics.php#odbc-statistics.example.basic" class="index">Example#1106 - List Statistics of a Table</a></li>
<li><a href="function.odbc-tableprivileges.php#odbc-tableprivileges.example.basic" class="index">Example#1107 - List Privileges of a Table</a></li>
<li><a href="function.odbc-tables.php#odbc-tables.example.basic" class="index">Example#1108 - List Tables in a Catalog</a></li>
<li><a href="pdo.constants.php#example-1110" class="index">Example#1109 - using PDO::ATTR_DRIVER_NAME</a></li>
<li><a href="pdo.connections.php#example-1111" class="index">Example#1110 - Connecting to MySQL</a></li>
<li><a href="pdo.connections.php#example-1112" class="index">Example#1111 - Handling connection errors</a></li>
<li><a href="pdo.connections.php#example-1113" class="index">Example#1112 - Closing a connection</a></li>
<li><a href="pdo.connections.php#example-1114" class="index">Example#1113 - Persistent connections</a></li>
<li><a href="pdo.transactions.php#example-1115" class="index">Example#1114 - Implicit Commit Example</a></li>
<li><a href="pdo.transactions.php#example-1116" class="index">Example#1115 - Executing a batch in a transaction</a></li>
<li><a href="pdo.prepared-statements.php#example-1117" class="index">Example#1116 - Repeated inserts using prepared statements</a></li>
<li><a href="pdo.prepared-statements.php#example-1118" class="index">Example#1117 - Repeated inserts using prepared statements</a></li>
<li><a href="pdo.prepared-statements.php#example-1119" class="index">Example#1118 - Fetching data using prepared statements</a></li>
<li><a href="pdo.prepared-statements.php#example-1120" class="index">Example#1119 - Calling a stored procedure with an output parameter</a></li>
<li><a href="pdo.prepared-statements.php#example-1121" class="index">Example#1120 - Calling a stored procedure with an input/output parameter</a></li>
<li><a href="pdo.prepared-statements.php#example-1122" class="index">Example#1121 - Invalid use of placeholder</a></li>
<li><a href="pdo.error-handling.php#example-1123" class="index">Example#1122 - Create a PDO instance and set the error mode</a></li>
<li><a href="pdo.error-handling.php#example-1124" class="index">Example#1123 - Create a PDO instance and set the error mode from the constructor</a></li>
<li><a href="pdo.lobs.php#example-1125" class="index">Example#1124 - Displaying an image from a database</a></li>
<li><a href="pdo.lobs.php#example-1126" class="index">Example#1125 - Inserting an image into a database</a></li>
<li><a href="pdo.lobs.php#example-1127" class="index">Example#1126 - Inserting an image into a database: Oracle</a></li>
<li><a href="pdo.begintransaction.php#example-1128" class="index">Example#1127 - Roll back a transaction</a></li>
<li><a href="pdo.commit.php#example-1129" class="index">Example#1128 - Committing a basic transaction</a></li>
<li><a href="pdo.commit.php#example-1130" class="index">Example#1129 - Committing a DDL transaction</a></li>
<li><a href="pdo.construct.php#example-1131" class="index">Example#1130 - Create a PDO instance via driver invocation</a></li>
<li><a href="pdo.construct.php#example-1132" class="index">Example#1131 - Create a PDO instance via URI invocation</a></li>
<li><a href="pdo.construct.php#example-1133" class="index">Example#1132 - Create a PDO instance using an alias</a></li>
<li><a href="pdo.errorcode.php#example-1134" class="index">Example#1133 - Retrieving an SQLSTATE code</a></li>
<li><a href="pdo.errorinfo.php#example-1135" class="index">Example#1134 - Displaying errorInfo() fields for a PDO_ODBC connection to a DB2 database</a></li>
<li><a href="pdo.exec.php#example-1136" class="index">Example#1135 - Issuing a DELETE statement</a></li>
<li><a href="pdo.getattribute.php#example-1137" class="index">Example#1136 - Retrieving database connection attributes</a></li>
<li><a href="pdo.getavailabledrivers.php#example-1138" class="index">Example#1137 - A PDO::getAvailableDrivers example</a></li>
<li><a href="pdo.prepare.php#example-1139" class="index">Example#1138 - SQL statement template with named parameters</a></li>
<li><a href="pdo.prepare.php#example-1140" class="index">Example#1139 - SQL statement template with question mark parameters</a></li>
<li><a href="pdo.prepare.php#example-1141" class="index">Example#1140 - SQL statement template with question mark escaped</a></li>
<li><a href="pdo.query.php#example-1142" class="index">Example#1141 - SQL with no placeholders can be executed using PDO::query</a></li>
<li><a href="pdo.quote.php#example-1143" class="index">Example#1142 - Quoting a normal string</a></li>
<li><a href="pdo.quote.php#example-1144" class="index">Example#1143 - Quoting a dangerous string</a></li>
<li><a href="pdo.quote.php#example-1145" class="index">Example#1144 - Quoting a complex string</a></li>
<li><a href="pdo.rollback.php#example-1146" class="index">Example#1145 - Roll back a transaction</a></li>
<li><a href="pdostatement.bindcolumn.php#example-1147" class="index">Example#1146 - Binding result set output to PHP variables</a></li>
<li><a href="pdostatement.bindparam.php#example-1148" class="index">Example#1147 - Execute a prepared statement with named placeholders</a></li>
<li><a href="pdostatement.bindparam.php#example-1149" class="index">Example#1148 - Execute a prepared statement with question mark placeholders</a></li>
<li><a href="pdostatement.bindparam.php#example-1150" class="index">Example#1149 - Call a stored procedure with an INOUT parameter</a></li>
<li><a href="pdostatement.bindvalue.php#example-1151" class="index">Example#1150 - Execute a prepared statement with named placeholders</a></li>
<li><a href="pdostatement.bindvalue.php#example-1152" class="index">Example#1151 - Execute a prepared statement with question mark placeholders</a></li>
<li><a href="pdostatement.closecursor.php#example-1153" class="index">Example#1152 - A PDOStatement::closeCursor example</a></li>
<li><a href="pdostatement.columncount.php#example-1154" class="index">Example#1153 - Counting columns</a></li>
<li><a href="pdostatement.debugdumpparams.php#example-1155" class="index">Example#1154 - PDOStatement::debugDumpParams example with named parameters</a></li>
<li><a href="pdostatement.debugdumpparams.php#example-1156" class="index">Example#1155 - PDOStatement::debugDumpParams example with unnamed parameters</a></li>
<li><a href="pdostatement.errorcode.php#example-1157" class="index">Example#1156 - Retrieving an SQLSTATE code</a></li>
<li><a href="pdostatement.errorinfo.php#example-1158" class="index">Example#1157 - Displaying errorInfo() fields for a PDO_ODBC connection to a DB2 database</a></li>
<li><a href="pdostatement.execute.php#example-1159" class="index">Example#1158 - Execute a prepared statement with a bound variable and value</a></li>
<li><a href="pdostatement.execute.php#example-1160" class="index">Example#1159 - Execute a prepared statement with an array of named values</a></li>
<li><a href="pdostatement.execute.php#example-1161" class="index">Example#1160 - Execute a prepared statement with an array of positional values</a></li>
<li><a href="pdostatement.execute.php#example-1162" class="index">Example#1161 - Execute a prepared statement with variables bound to positional placeholders</a></li>
<li><a href="pdostatement.execute.php#example-1163" class="index">Example#1162 - Execute a prepared statement using array for IN clause</a></li>
<li><a href="pdostatement.fetch.php#example-1164" class="index">Example#1163 - Fetching rows using different fetch styles</a></li>
<li><a href="pdostatement.fetch.php#example-1165" class="index">Example#1164 - Fetching rows with a scrollable cursor</a></li>
<li><a href="pdostatement.fetch.php#example-1166" class="index">Example#1165 - Construction order</a></li>
<li><a href="pdostatement.fetchall.php#example-1167" class="index">Example#1166 - Fetch all remaining rows in a result set</a></li>
<li><a href="pdostatement.fetchall.php#example-1168" class="index">Example#1167 - Fetching all values of a single column from a result set</a></li>
<li><a href="pdostatement.fetchall.php#example-1169" class="index">Example#1168 - Grouping all values by a single column</a></li>
<li><a href="pdostatement.fetchall.php#example-1170" class="index">Example#1169 - Instantiating a class for each result</a></li>
<li><a href="pdostatement.fetchall.php#example-1171" class="index">Example#1170 - Calling a function for each result</a></li>
<li><a href="pdostatement.fetchcolumn.php#example-1172" class="index">Example#1171 - Return first column of the next row</a></li>
<li><a href="pdostatement.getcolumnmeta.php#example-1173" class="index">Example#1172 - Retrieving column metadata</a></li>
<li><a href="pdostatement.nextrowset.php#example-1174" class="index">Example#1173 - Fetching multiple rowsets returned from a stored procedure</a></li>
<li><a href="pdostatement.rowcount.php#example-1175" class="index">Example#1174 - Return the number of deleted rows</a></li>
<li><a href="pdostatement.rowcount.php#example-1176" class="index">Example#1175 - Counting rows returned by a SELECT statement</a></li>
<li><a href="pdostatement.setfetchmode.php#example-1177" class="index">Example#1176 - Setting the fetch mode</a></li>
<li><a href="ref.pdo-cubrid.php#example-1178" class="index">Example#1177 - Insert LOBs in CUBRID PDO</a></li>
<li><a href="ref.pdo-cubrid.php#example-1179" class="index">Example#1178 - Fetch LOBs in CUBRID PDO</a></li>
<li><a href="ref.pdo-cubrid.php#example-1180" class="index">Example#1179 - Insert set in CUBRID PDO with default data type.</a></li>
<li><a href="ref.pdo-cubrid.php#example-1181" class="index">Example#1180 - Specify data type when insert set in CUBRID PDO</a></li>
<li><a href="ref.pdo-cubrid.connection.php#example-1182" class="index">Example#1181 - PDO_CUBRID DSN examples</a></li>
<li><a href="pdo.cubrid-schema.php#example-1183" class="index">Example#1182 - A PDO::cubrid_schema example</a></li>
<li><a href="ref.pdo-dblib.connection.php#example-1184" class="index">Example#1183 - PDO_DBLIB DSN examples</a></li>
<li><a href="ref.pdo-firebird.connection.php#example-1185" class="index">Example#1184 - PDO_FIREBIRD DSN example with path</a></li>
<li><a href="ref.pdo-firebird.connection.php#example-1186" class="index">Example#1185 - PDO_FIREBIRD DSN example with port and path</a></li>
<li><a href="ref.pdo-firebird.connection.php#example-1187" class="index">Example#1186 - PDO_FIREBIRD DSN example with localhost and path to employee.fdb on Debian system</a></li>
<li><a href="ref.pdo-firebird.connection.php#example-1188" class="index">Example#1187 - PDO_FIREBIRD DSN to connect to a dialect 1 database</a></li>
<li><a href="ref.pdo-ibm.connection.php#example-1189" class="index">Example#1188 - PDO_IBM DSN example using db2cli.ini</a></li>
<li><a href="ref.pdo-ibm.connection.php#example-1190" class="index">Example#1189 - PDO_IBM DSN example using a connection string</a></li>
<li><a href="ref.pdo-informix.connection.php#example-1191" class="index">Example#1190 - PDO_INFORMIX DSN example using odbc.ini</a></li>
<li><a href="ref.pdo-informix.connection.php#example-1192" class="index">Example#1191 - PDO_INFORMIX DSN example using a connection string</a></li>
<li><a href="ref.pdo-mysql.connection.php#example-1193" class="index">Example#1192 - PDO_MYSQL DSN examples</a></li>
<li><a href="class.pdo-mysql.php#example-1194" class="index">Example#1193 - Setting MySQL unbuffered mode</a></li>
<li><a href="pdo-mysql.getwarningcount.php#pdo-mysql.getwarningcount.example.basic" class="index">Example#1194 - Pdo\Mysql::getWarningCount example</a></li>
<li><a href="ref.pdo-sqlsrv.connection.php#example-1196" class="index">Example#1195 - PDO_SQLSRV DSN examples</a></li>
<li><a href="ref.pdo-oci.connection.php#example-1197" class="index">Example#1196 - PDO_OCI DSN examples</a></li>
<li><a href="ref.pdo-odbc.connection.php#example-1198" class="index">Example#1197 - PDO_ODBC DSN example (ODBC driver manager)</a></li>
<li><a href="ref.pdo-odbc.connection.php#example-1199" class="index">Example#1198 - PDO_ODBC DSN example (IBM DB2 uncataloged connection)</a></li>
<li><a href="ref.pdo-odbc.connection.php#example-1200" class="index">Example#1199 - PDO_ODBC DSN example (Microsoft Access uncataloged connection)</a></li>
<li><a href="ref.pdo-pgsql.connection.php#example-1201" class="index">Example#1200 - PDO_PGSQL DSN examples</a></li>
<li><a href="pdo-pgsql.escapeidentifier.php#pdo-pgsql.escapeidentifier.example.basic" class="index">Example#1201 - Pdo\Pgsql::escapeIdentifier example</a></li>
<li><a href="pdo-pgsql.lobcreate.php#pdo-pgsql.lobcreate.example.basic" class="index">Example#1202 - Pdo\Pgsql::lobCreate example</a></li>
<li><a href="pdo-pgsql.lobopen.php#pdo-pgsql.lobopen.example.basic" class="index">Example#1203 - Pdo\Pgsql::lobOpen example</a></li>
<li><a href="pdo-pgsql.lobunlink.php#pdo-pgsql.lobunlink.example.basic" class="index">Example#1204 - Pdo\Pgsql::lobUnlink example</a></li>
<li><a href="pdo-pgsql.setnoticecallback.php#pdo-pgsql.setnoticecallback.example.basic" class="index">Example#1205 - Pdo\Pgsql::setNoticeCallback example</a></li>
<li><a href="ref.pdo-sqlite.connection.php#example-1207" class="index">Example#1206 - PDO_SQLITE DSN examples</a></li>
<li><a href="pdo-sqlite.createaggregate.php#example-1208" class="index">Example#1207 - Pdo\Sqlite::createAggregate example</a></li>
<li><a href="pdo-sqlite.createcollation.php#example-1209" class="index">Example#1208 - Pdo\Sqlite::createCollation example</a></li>
<li><a href="pdo-sqlite.createfunction.php#pdo-sqlite.createfunction.example.basic" class="index">Example#1209 - Pdo\Sqlite::createFunction example</a></li>
<li><a href="pdo-sqlite.loadextension.php#pdo-sqlite.loadextension.example.basic" class="index">Example#1210 - Pdo\Sqlite::loadExtension example</a></li>
<li><a href="pdo-sqlite.openblob.php#pdo-sqlite.openblob.example.basic" class="index">Example#1211 - Pdo\Sqlite::openBlob example</a></li>
<li><a href="cubrid.examples.php#example-1213" class="index">Example#1212 - Example of Data Retrieval</a></li>
<li><a href="cubrid.examples.php#example-1214" class="index">Example#1213 - Example of Data Insertion</a></li>
<li><a href="function.cubrid-bind.php#example-1215" class="index">Example#1214 - cubrid_bind example</a></li>
<li><a href="function.cubrid-bind.php#example-1216" class="index">Example#1215 - cubrid_bind BLOB/CLOB example</a></li>
<li><a href="function.cubrid-bind.php#example-1217" class="index">Example#1216 - cubrid_bind BLOB/CLOB example</a></li>
<li><a href="function.cubrid-close-prepare.php#example-1218" class="index">Example#1217 - cubrid_close_prepare example</a></li>
<li><a href="function.cubrid-close-request.php#example-1219" class="index">Example#1218 - cubrid_close_request example</a></li>
<li><a href="function.cubrid-col-get.php#example-1220" class="index">Example#1219 - cubrid_col_get example</a></li>
<li><a href="function.cubrid-col-size.php#example-1221" class="index">Example#1220 - cubrid_col_size example</a></li>
<li><a href="function.cubrid-column-names.php#example-1222" class="index">Example#1221 - cubrid_column_names example</a></li>
<li><a href="function.cubrid-column-types.php#example-1223" class="index">Example#1222 - cubrid_column_types example</a></li>
<li><a href="function.cubrid-commit.php#example-1224" class="index">Example#1223 - cubrid_commit example</a></li>
<li><a href="function.cubrid-connect.php#example-1225" class="index">Example#1224 - cubrid_connect example</a></li>
<li><a href="function.cubrid-connect-with-url.php#example-1226" class="index">Example#1225 - cubrid_connect_with_url url without properties example</a></li>
<li><a href="function.cubrid-connect-with-url.php#example-1227" class="index">Example#1226 - cubrid_connect_with_url url with properties example</a></li>
<li><a href="function.cubrid-current-oid.php#example-1228" class="index">Example#1227 - cubrid_current_oid example</a></li>
<li><a href="function.cubrid-disconnect.php#example-1229" class="index">Example#1228 - cubrid_disconnect example</a></li>
<li><a href="function.cubrid-drop.php#example-1230" class="index">Example#1229 - cubrid_drop example</a></li>
<li><a href="function.cubrid-error-code.php#example-1231" class="index">Example#1230 - cubrid_error_code example</a></li>
<li><a href="function.cubrid-error-code-facility.php#example-1232" class="index">Example#1231 - cubrid_error_code_facility example</a></li>
<li><a href="function.cubrid-error-msg.php#example-1233" class="index">Example#1232 - cubrid_error_msg example</a></li>
<li><a href="function.cubrid-execute.php#example-1234" class="index">Example#1233 - cubrid_execute example</a></li>
<li><a href="function.cubrid-fetch.php#example-1235" class="index">Example#1234 - cubrid_fetch example</a></li>
<li><a href="function.cubrid-free-result.php#example-1236" class="index">Example#1235 - cubrid_free_result example</a></li>
<li><a href="function.cubrid-get.php#example-1237" class="index">Example#1236 - cubrid_get example</a></li>
<li><a href="function.cubrid-get-charset.php#example-1238" class="index">Example#1237 - cubrid_get_charset example</a></li>
<li><a href="function.cubrid-get-class-name.php#example-1239" class="index">Example#1238 - cubrid_get_class_name example</a></li>
<li><a href="function.cubrid-get-client-info.php#example-1240" class="index">Example#1239 - cubrid_get_client_info example</a></li>
<li><a href="function.cubrid-get-db-parameter.php#example-1241" class="index">Example#1240 - cubrid_get_db_parameter example</a></li>
<li><a href="function.cubrid-get-query-timeout.php#example-1242" class="index">Example#1241 - cubrid_get_query_timeout example</a></li>
<li><a href="function.cubrid-get-server-info.php#example-1243" class="index">Example#1242 - cubrid_get_server_info example</a></li>
<li><a href="function.cubrid-insert-id.php#example-1244" class="index">Example#1243 - cubrid_insert_id example</a></li>
<li><a href="function.cubrid-is-instance.php#example-1245" class="index">Example#1244 - cubrid_is_instance example</a></li>
<li><a href="function.cubrid-lob-close.php#example-1246" class="index">Example#1245 - cubrid_lob_close example</a></li>
<li><a href="function.cubrid-lob-export.php#example-1247" class="index">Example#1246 - cubrid_lob_export example</a></li>
<li><a href="function.cubrid-lob-get.php#example-1248" class="index">Example#1247 - cubrid_lob_get example</a></li>
<li><a href="function.cubrid-lob-send.php#example-1249" class="index">Example#1248 - cubrid_lob_send example</a></li>
<li><a href="function.cubrid-lob-size.php#example-1250" class="index">Example#1249 - cubrid_lob_size example</a></li>
<li><a href="function.cubrid-lob2-bind.php#example-1251" class="index">Example#1250 - cubrid_lob2_bind example</a></li>
<li><a href="function.cubrid-lob2-export.php#example-1252" class="index">Example#1251 - cubrid_lob2_export example</a></li>
<li><a href="function.cubrid-lob2-import.php#example-1253" class="index">Example#1252 - cubrid_lob2_export example</a></li>
<li><a href="function.cubrid-lob2-read.php#example-1254" class="index">Example#1253 - cubrid_lob2_read example 1</a></li>
<li><a href="function.cubrid-lob2-read.php#example-1255" class="index">Example#1254 - cubrid_lob2_read example 2</a></li>
<li><a href="function.cubrid-lob2-seek.php#example-1256" class="index">Example#1255 - cubrid_lob2_seek example</a></li>
<li><a href="function.cubrid-lob2-seek64.php#example-1257" class="index">Example#1256 - cubrid_lob2_seek64 example</a></li>
<li><a href="function.cubrid-lob2-write.php#example-1258" class="index">Example#1257 - cubrid_lob2_write example 1</a></li>
<li><a href="function.cubrid-lob2-write.php#example-1259" class="index">Example#1258 - cubrid_lob2_write example 2</a></li>
<li><a href="function.cubrid-lock-read.php#example-1260" class="index">Example#1259 - cubrid_lock_read example</a></li>
<li><a href="function.cubrid-lock-write.php#example-1261" class="index">Example#1260 - cubrid_lock_write example</a></li>
<li><a href="function.cubrid-move-cursor.php#example-1262" class="index">Example#1261 - cubrid_move_cursor example</a></li>
<li><a href="function.cubrid-next-result.php#example-1263" class="index">Example#1262 - cubrid_next_result example</a></li>
<li><a href="function.cubrid-num-cols.php#example-1264" class="index">Example#1263 - cubrid_num_cols example</a></li>
<li><a href="function.cubrid-num-rows.php#example-1265" class="index">Example#1264 - cubrid_num_rows example</a></li>
<li><a href="function.cubrid-pconnect.php#example-1266" class="index">Example#1265 - cubrid_connect example</a></li>
<li><a href="function.cubrid-pconnect-with-url.php#example-1267" class="index">Example#1266 - cubrid_pconnect_with_url url without properties example</a></li>
<li><a href="function.cubrid-pconnect-with-url.php#example-1268" class="index">Example#1267 - cubrid_pconnect_with_url url with properties example</a></li>
<li><a href="function.cubrid-prepare.php#example-1269" class="index">Example#1268 - cubrid_prepare example</a></li>
<li><a href="function.cubrid-put.php#example-1270" class="index">Example#1269 - cubrid_put example</a></li>
<li><a href="function.cubrid-rollback.php#example-1271" class="index">Example#1270 - cubrid_rollback example</a></li>
<li><a href="function.cubrid-schema.php#example-1272" class="index">Example#1271 - cubrid_schema example</a></li>
<li><a href="function.cubrid-seq-drop.php#example-1273" class="index">Example#1272 - cubrid_seq_drop example</a></li>
<li><a href="function.cubrid-seq-insert.php#example-1274" class="index">Example#1273 - cubrid_seq_insert example</a></li>
<li><a href="function.cubrid-seq-put.php#example-1275" class="index">Example#1274 - cubrid_seq_put example</a></li>
<li><a href="function.cubrid-set-add.php#example-1276" class="index">Example#1275 - cubrid_set_add example</a></li>
<li><a href="function.cubrid-set-db-parameter.php#example-1277" class="index">Example#1276 - cubrid_get_db_parameter example</a></li>
<li><a href="function.cubrid-set-drop.php#example-1278" class="index">Example#1277 - cubrid_set_drop example</a></li>
<li><a href="function.cubrid-version.php#example-1279" class="index">Example#1278 - cubrid_version example</a></li>
<li><a href="function.cubrid-affected-rows.php#example-1280" class="index">Example#1279 - cubrid_affected_rows example</a></li>
<li><a href="function.cubrid-client-encoding.php#example-1281" class="index">Example#1280 - cubrid_client_encoding example</a></li>
<li><a href="function.cubrid-close.php#example-1282" class="index">Example#1281 - cubrid_close example</a></li>
<li><a href="function.cubrid-data-seek.php#example-1283" class="index">Example#1282 - cubrid_data_seek example</a></li>
<li><a href="function.cubrid-db-name.php#example-1284" class="index">Example#1283 - cubrid_db_name example</a></li>
<li><a href="function.cubrid-errno.php#example-1285" class="index">Example#1284 - cubrid_errno example</a></li>
<li><a href="function.cubrid-error.php#example-1286" class="index">Example#1285 - cubrid_error example</a></li>
<li><a href="function.cubrid-fetch-array.php#example-1287" class="index">Example#1286 - cubrid_fetch_array example</a></li>
<li><a href="function.cubrid-fetch-assoc.php#example-1288" class="index">Example#1287 - cubrid_fetch_assoc example</a></li>
<li><a href="function.cubrid-fetch-field.php#example-1289" class="index">Example#1288 - cubrid_fetch_field example</a></li>
<li><a href="function.cubrid-fetch-lengths.php#example-1290" class="index">Example#1289 - cubrid_fetch_lengths example</a></li>
<li><a href="function.cubrid-fetch-object.php#example-1291" class="index">Example#1290 - cubrid_fetch_object example</a></li>
<li><a href="function.cubrid-fetch-row.php#example-1292" class="index">Example#1291 - cubrid_fetch_row example</a></li>
<li><a href="function.cubrid-field-flags.php#example-1293" class="index">Example#1292 - cubrid_field_flags example</a></li>
<li><a href="function.cubrid-field-len.php#example-1294" class="index">Example#1293 - cubrid_field_len example</a></li>
<li><a href="function.cubrid-field-name.php#example-1295" class="index">Example#1294 - cubrid_field_name example</a></li>
<li><a href="function.cubrid-field-seek.php#example-1296" class="index">Example#1295 - cubrid_field_seek example</a></li>
<li><a href="function.cubrid-field-table.php#example-1297" class="index">Example#1296 - cubrid_field_table example</a></li>
<li><a href="function.cubrid-field-type.php#example-1298" class="index">Example#1297 - cubrid_field_type example</a></li>
<li><a href="function.cubrid-list-dbs.php#example-1299" class="index">Example#1298 - cubrid_list_dbs example</a></li>
<li><a href="function.cubrid-num-fields.php#example-1300" class="index">Example#1299 - cubrid_num_fields example</a></li>
<li><a href="function.cubrid-ping.php#example-1301" class="index">Example#1300 - cubrid_ping example</a></li>
<li><a href="function.cubrid-query.php#example-1302" class="index">Example#1301 - Invalid Query</a></li>
<li><a href="function.cubrid-query.php#example-1303" class="index">Example#1302 - Valid Query</a></li>
<li><a href="function.cubrid-real-escape-string.php#example-1304" class="index">Example#1303 - cubrid_real_escape_string example</a></li>
<li><a href="function.cubrid-result.php#example-1305" class="index">Example#1304 - cubrid_result example</a></li>
<li><a href="function.cubrid-unbuffered-query.php#example-1306" class="index">Example#1305 - cubrid_unbuffered_query example</a></li>
<li><a href="function.cubrid-load-from-glo.php#example-1307" class="index">Example#1306 - cubrid_load_from_glo example</a></li>
<li><a href="function.cubrid-new-glo.php#example-1308" class="index">Example#1307 - cubrid_new_glo example</a></li>
<li><a href="function.cubrid-save-to-glo.php#example-1309" class="index">Example#1308 - cubrid_save_to_glo example</a></li>
<li><a href="function.cubrid-send-glo.php#example-1310" class="index">Example#1309 - cubrid_send_glo example</a></li>
<li><a href="function.dbase-add-record.php#example-1311" class="index">Example#1310 - Inserting a record in a dBase database</a></li>
<li><a href="function.dbase-close.php#example-1312" class="index">Example#1311 - Closing a dBase database file</a></li>
<li><a href="function.dbase-create.php#example-1313" class="index">Example#1312 - Creating a dBase database file</a></li>
<li><a href="function.dbase-get-header-info.php#example-1314" class="index">Example#1313 - Showing header information for a dBase database file</a></li>
<li><a href="function.dbase-get-record-with-names.php#example-1315" class="index">Example#1314 - Listing all the registered members in the database</a></li>
<li><a href="function.dbase-numfields.php#example-1316" class="index">Example#1315 - dbase_numfields Example</a></li>
<li><a href="function.dbase-numrecords.php#example-1317" class="index">Example#1316 - Looping over all the records of the database</a></li>
<li><a href="function.dbase-open.php#example-1318" class="index">Example#1317 - Opening a dBase database file</a></li>
<li><a href="function.dbase-pack.php#example-1319" class="index">Example#1318 - Emptying a dBase database</a></li>
<li><a href="function.dbase-replace-record.php#example-1320" class="index">Example#1319 - Updating a record in the database</a></li>
<li><a href="function.ibase-backup.php#example-1321" class="index">Example#1320 - ibase_backup example</a></li>
<li><a href="function.ibase-backup.php#example-1322" class="index">Example#1321 - ibase_backup example with arguments</a></li>
<li><a href="function.ibase-blob-get.php#example-1323" class="index">Example#1322 - ibase_blob_get example</a></li>
<li><a href="function.ibase-blob-import.php#example-1324" class="index">Example#1323 - ibase_blob_import example</a></li>
<li><a href="function.ibase-connect.php#example-1325" class="index">Example#1324 - ibase_connect example</a></li>
<li><a href="function.ibase-execute.php#example-1326" class="index">Example#1325 - ibase_execute example</a></li>
<li><a href="function.ibase-fetch-object.php#example-1327" class="index">Example#1326 - ibase_fetch_object example</a></li>
<li><a href="function.ibase-field-info.php#example-1328" class="index">Example#1327 - ibase_field_info example</a></li>
<li><a href="function.ibase-name-result.php#example-1329" class="index">Example#1328 - ibase_name_result example</a></li>
<li><a href="function.ibase-num-fields.php#example-1330" class="index">Example#1329 - ibase_num_fields example</a></li>
<li><a href="function.ibase-query.php#example-1331" class="index">Example#1330 - ibase_query example</a></li>
<li><a href="function.ibase-restore.php#example-1332" class="index">Example#1331 - ibase_restore example</a></li>
<li><a href="function.ibase-restore.php#example-1333" class="index">Example#1332 - ibase_restore example with arguments</a></li>
<li><a href="function.ibase-server-info.php#example-1334" class="index">Example#1333 - ibase_service_attach example</a></li>
<li><a href="function.ibase-service-attach.php#example-1335" class="index">Example#1334 - ibase_service_attach example</a></li>
<li><a href="function.ibase-service-attach.php#example-1336" class="index">Example#1335 - ibase_service_attach example using hostname/port syntax</a></li>
<li><a href="function.ibase-service-detach.php#example-1337" class="index">Example#1336 - ibase_service_detach example</a></li>
<li><a href="function.ibase-set-event-handler.php#example-1338" class="index">Example#1337 - ibase_set_event_handler example</a></li>
<li><a href="function.db2-autocommit.php#example-1339" class="index">Example#1338 - Retrieving the AUTOCOMMIT value for a connection</a></li>
<li><a href="function.db2-autocommit.php#example-1340" class="index">Example#1339 - Setting the AUTOCOMMIT value for a connection</a></li>
<li><a href="function.db2-bind-param.php#example-1341" class="index">Example#1340 - Binding PHP variables to a prepared statement</a></li>
<li><a href="function.db2-bind-param.php#example-1342" class="index">Example#1341 - Calling stored procedures with IN and OUT parameters</a></li>
<li><a href="function.db2-bind-param.php#example-1343" class="index">Example#1342 - Inserting a binary large object (BLOB) directly from a file</a></li>
<li><a href="function.db2-client-info.php#example-1344" class="index">Example#1343 - A db2_client_info example</a></li>
<li><a href="function.db2-close.php#example-1345" class="index">Example#1344 - Closing a connection</a></li>
<li><a href="function.db2-conn-error.php#example-1346" class="index">Example#1345 - Retrieving an SQLSTATE value for a failed connection attempt</a></li>
<li><a href="function.db2-conn-errormsg.php#example-1347" class="index">Example#1346 - Retrieving the error message returned by a failed connection attempt</a></li>
<li><a href="function.db2-connect.php#example-1348" class="index">Example#1347 - Creating a cataloged connection</a></li>
<li><a href="function.db2-connect.php#example-1349" class="index">Example#1348 - Creating an uncataloged connection</a></li>
<li><a href="function.db2-connect.php#example-1350" class="index">Example#1349 - Creating a connection with autocommit off by default</a></li>
<li><a href="function.db2-connect.php#example-1351" class="index">Example#1350 - i5/OS best performance</a></li>
<li><a href="function.db2-connect.php#example-1352" class="index">Example#1351 - Using trusted context</a></li>
<li><a href="function.db2-escape-string.php#example-1353" class="index">Example#1352 - A db2_escape_string example</a></li>
<li><a href="function.db2-exec.php#example-1354" class="index">Example#1353 - Creating a table with db2_exec</a></li>
<li><a href="function.db2-exec.php#example-1355" class="index">Example#1354 - Executing a SELECT statement with a scrollable cursor</a></li>
<li><a href="function.db2-exec.php#example-1356" class="index">Example#1355 - Returning XML data as an SQL ResultSet</a></li>
<li><a href="function.db2-exec.php#example-1357" class="index">Example#1356 - Performing a &quot;JOIN&quot; with XML data</a></li>
<li><a href="function.db2-exec.php#example-1358" class="index">Example#1357 - Returning SQL data as part of a larger XML document</a></li>
<li><a href="function.db2-execute.php#example-1359" class="index">Example#1358 - Preparing and executing an SQL statement with parameter markers</a></li>
<li><a href="function.db2-execute.php#example-1360" class="index">Example#1359 - Calling a stored procedure with an OUT parameter</a></li>
<li><a href="function.db2-execute.php#example-1361" class="index">Example#1360 - Returning XML data as an SQL ResultSet</a></li>
<li><a href="function.db2-execute.php#example-1362" class="index">Example#1361 - Performing a &quot;JOIN&quot; with XML data</a></li>
<li><a href="function.db2-execute.php#example-1363" class="index">Example#1362 - Returning SQL data as part of a larger XML document</a></li>
<li><a href="function.db2-fetch-array.php#example-1364" class="index">Example#1363 - Iterating through a forward-only cursor</a></li>
<li><a href="function.db2-fetch-array.php#example-1365" class="index">Example#1364 - Retrieving specific rows with db2_fetch_array
     from a scrollable cursor</a></li>
<li><a href="function.db2-fetch-assoc.php#example-1366" class="index">Example#1365 - Iterating through a forward-only cursor</a></li>
<li><a href="function.db2-fetch-assoc.php#example-1367" class="index">Example#1366 - Retrieving specific rows with db2_fetch_assoc
     from a scrollable cursor</a></li>
<li><a href="function.db2-fetch-both.php#example-1368" class="index">Example#1367 - Iterating through a forward-only cursor</a></li>
<li><a href="function.db2-fetch-both.php#example-1369" class="index">Example#1368 - Retrieving specific rows with db2_fetch_both
     from a scrollable cursor</a></li>
<li><a href="function.db2-fetch-object.php#example-1370" class="index">Example#1369 - A db2_fetch_object example</a></li>
<li><a href="function.db2-fetch-row.php#example-1371" class="index">Example#1370 - Iterating through a result set</a></li>
<li><a href="function.db2-fetch-row.php#example-1372" class="index">Example#1371 - i5/OS recommended alternatives to db2_fetch_row/db2_result</a></li>
<li><a href="function.db2-get-option.php#example-1373" class="index">Example#1372 - Setting and retrieving parameters through a connection resource</a></li>
<li><a href="function.db2-last-insert-id.php#db2-last-insert-id.example.basic" class="index">Example#1373 - A db2_last_insert_id example</a></li>
<li><a href="function.db2-lob-read.php#example-1375" class="index">Example#1374 - Iterating through different types of data</a></li>
<li><a href="function.db2-next-result.php#example-1376" class="index">Example#1375 - Calling a stored procedure that returns multiple result sets</a></li>
<li><a href="function.db2-num-fields.php#example-1377" class="index">Example#1376 - Retrieving the number of fields in a result set</a></li>
<li><a href="function.db2-pclose.php#db2-pclose.example.basic" class="index">Example#1377 - Closing a persistent connection</a></li>
<li><a href="function.db2-pconnect.php#example-1379" class="index">Example#1378 - A db2_pconnect example</a></li>
<li><a href="function.db2-pconnect.php#example-1380" class="index">Example#1379 - Using trusted context</a></li>
<li><a href="function.db2-prepare.php#example-1381" class="index">Example#1380 - Preparing and executing an SQL statement with parameter markers</a></li>
<li><a href="function.db2-result.php#example-1382" class="index">Example#1381 - A db2_result example</a></li>
<li><a href="function.db2-rollback.php#example-1383" class="index">Example#1382 - Rolling back a DELETE statement</a></li>
<li><a href="function.db2-server-info.php#example-1384" class="index">Example#1383 - A db2_server_info example</a></li>
<li><a href="function.db2-set-option.php#example-1385" class="index">Example#1384 - Setting one parameter with a connection resource</a></li>
<li><a href="function.db2-set-option.php#example-1386" class="index">Example#1385 - Setting multiple parameters with a connection resource</a></li>
<li><a href="function.db2-set-option.php#example-1387" class="index">Example#1386 - Setting multiple parameters with an invalid key</a></li>
<li><a href="function.db2-set-option.php#example-1388" class="index">Example#1387 - Setting multiple parameters with an invalid value</a></li>
<li><a href="function.db2-set-option.php#example-1389" class="index">Example#1388 - Setting multiple parameters with a connection resource and the wrong type</a></li>
<li><a href="function.db2-set-option.php#example-1390" class="index">Example#1389 - Setting multiple parameters with the wrong resource</a></li>
<li><a href="function.db2-set-option.php#example-1391" class="index">Example#1390 - Putting it all together</a></li>
<li><a href="function.db2-set-option.php#example-1392" class="index">Example#1391 - i5/OS cursors are read-only</a></li>
<li><a href="class.mongodb-driver-manager.php#example-1393" class="index">Example#1392 - MongoDB\Driver\Manager::__construct basic example</a></li>
<li><a href="mongodb-driver-manager.construct.php#example-1394" class="index">Example#1393 - MongoDB\Driver\Manager::__construct basic examples</a></li>
<li><a href="mongodb-driver-manager.executebulkwrite.php#example-1395" class="index">Example#1394 - MongoDB\Driver\Manager::executeBulkWrite example</a></li>
<li><a href="mongodb-driver-manager.executebulkwritecommand.php#example-1396" class="index">Example#1395 - Mixed write operations</a></li>
<li><a href="mongodb-driver-manager.executebulkwritecommand.php#example-1397" class="index">Example#1396 - Ordered write operations causing an error</a></li>
<li><a href="mongodb-driver-manager.executecommand.php#example-1398" class="index">Example#1397 - MongoDB\Driver\Manager::executeCommand with a command returning a single result document</a></li>
<li><a href="mongodb-driver-manager.executecommand.php#example-1399" class="index">Example#1398 - MongoDB\Driver\Manager::executeCommand with a command returning a cursor</a></li>
<li><a href="mongodb-driver-manager.executecommand.php#example-1400" class="index">Example#1399 - Limiting execution time for a command</a></li>
<li><a href="mongodb-driver-manager.executequery.php#example-1401" class="index">Example#1400 - MongoDB\Driver\Manager::executeQuery example</a></li>
<li><a href="mongodb-driver-manager.executequery.php#example-1402" class="index">Example#1401 - Limiting execution time for a query</a></li>
<li><a href="mongodb-driver-manager.getreadconcern.php#example-1403" class="index">Example#1402 - MongoDB\Driver\Manager::getReadConcern example</a></li>
<li><a href="mongodb-driver-manager.getreadpreference.php#example-1404" class="index">Example#1403 - MongoDB\Driver\Manager::getReadPreference example</a></li>
<li><a href="mongodb-driver-manager.getservers.php#example-1405" class="index">Example#1404 - MongoDB\Driver\Manager::getServers example</a></li>
<li><a href="mongodb-driver-manager.getwriteconcern.php#example-1406" class="index">Example#1405 - MongoDB\Driver\Manager::getWriteConcern example</a></li>
<li><a href="class.mongodb-driver-command.php#example-1407" class="index">Example#1406 - Composing MongoDB\Driver\Command to provide a helper to create collections</a></li>
<li><a href="mongodb-driver-command.construct.php#example-1408" class="index">Example#1407 - MongoDB\Driver\Command::__construct example</a></li>
<li><a href="mongodb-driver-command.construct.php#example-1409" class="index">Example#1408 - MongoDB\Driver\Command::__construct example</a></li>
<li><a href="mongodb-driver-query.construct.php#example-1410" class="index">Example#1409 - MongoDB\Driver\Query::__construct example</a></li>
<li><a href="class.mongodb-driver-bulkwrite.php#example-1411" class="index">Example#1410 - Mixed write operations are grouped by type</a></li>
<li><a href="class.mongodb-driver-bulkwrite.php#example-1412" class="index">Example#1411 - Ordered write operations causing an error</a></li>
<li><a href="mongodb-driver-bulkwrite.construct.php#example-1413" class="index">Example#1412 - MongoDB\Driver\BulkWrite::__construct example</a></li>
<li><a href="mongodb-driver-bulkwrite.count.php#example-1414" class="index">Example#1413 - MongoDB\Driver\BulkWrite::count example</a></li>
<li><a href="mongodb-driver-bulkwrite.delete.php#example-1415" class="index">Example#1414 - MongoDB\Driver\BulkWrite::delete example</a></li>
<li><a href="mongodb-driver-bulkwrite.insert.php#example-1416" class="index">Example#1415 - MongoDB\Driver\BulkWrite::insert example</a></li>
<li><a href="mongodb-driver-bulkwrite.update.php#example-1417" class="index">Example#1416 - MongoDB\Driver\BulkWrite::update example</a></li>
<li><a href="class.mongodb-driver-bulkwritecommand.php#example-1418" class="index">Example#1417 - Mixed write operations</a></li>
<li><a href="class.mongodb-driver-bulkwritecommand.php#example-1419" class="index">Example#1418 - Ordered write operations causing an error</a></li>
<li><a href="mongodb-driver-bulkwritecommand.construct.php#example-1420" class="index">Example#1419 - MongoDB\Driver\BulkWriteCommand::__construct example</a></li>
<li><a href="mongodb-driver-bulkwritecommand.count.php#example-1421" class="index">Example#1420 - MongoDB\Driver\BulkWriteCommand::count example</a></li>
<li><a href="mongodb-driver-bulkwritecommand.deletemany.php#example-1422" class="index">Example#1421 - MongoDB\Driver\BulkWriteCommand::deleteMany example</a></li>
<li><a href="mongodb-driver-bulkwritecommand.deleteone.php#example-1423" class="index">Example#1422 - MongoDB\Driver\BulkWriteCommand::deleteOne example</a></li>
<li><a href="mongodb-driver-bulkwritecommand.insertone.php#example-1424" class="index">Example#1423 - MongoDB\Driver\BulkWriteCommand::insertOne example</a></li>
<li><a href="mongodb-driver-bulkwritecommand.replaceone.php#example-1425" class="index">Example#1424 - MongoDB\Driver\BulkWriteCommand::replaceOne example</a></li>
<li><a href="mongodb-driver-bulkwritecommand.updatemany.php#example-1426" class="index">Example#1425 - MongoDB\Driver\BulkWriteCommand::updateMany example</a></li>
<li><a href="mongodb-driver-bulkwritecommand.updateone.php#example-1427" class="index">Example#1426 - MongoDB\Driver\BulkWriteCommand::updateOne example</a></li>
<li><a href="class.mongodb-driver-serverapi.php#example-1428" class="index">Example#1427 - Declare an API version on a manager</a></li>
<li><a href="class.mongodb-driver-serverapi.php#example-1429" class="index">Example#1428 - Declare a strict API version on a manager</a></li>
<li><a href="mongodb-driver-writeconcern.bsonserialize.php#example-1430" class="index">Example#1429 - MongoDB\Driver\WriteConcern::bsonSerialize with majority write concern</a></li>
<li><a href="mongodb-driver-writeconcern.bsonserialize.php#example-1431" class="index">Example#1430 - MongoDB\Driver\WriteConcern::bsonSerialize with wtimeout and journal</a></li>
<li><a href="mongodb-driver-writeconcern.construct.php#example-1432" class="index">Example#1431 - MongoDB\Driver\WriteConcern::__construct example</a></li>
<li><a href="mongodb-driver-writeconcern.getjournal.php#example-1433" class="index">Example#1432 - MongoDB\Driver\WriteConcern::getJournal example</a></li>
<li><a href="mongodb-driver-writeconcern.getw.php#example-1434" class="index">Example#1433 - MongoDB\Driver\WriteConcern::getW example</a></li>
<li><a href="mongodb-driver-writeconcern.getwtimeout.php#example-1435" class="index">Example#1434 - MongoDB\Driver\WriteConcern::getWtimeout example</a></li>
<li><a href="mongodb-driver-writeconcern.isdefault.php#example-1436" class="index">Example#1435 - MongoDB\Driver\WriteConcern::isDefault example</a></li>
<li><a href="mongodb-driver-readpreference.bsonserialize.php#example-1437" class="index">Example#1436 - MongoDB\Driver\ReadPreference::bsonSerialize with primary read preference</a></li>
<li><a href="mongodb-driver-readpreference.bsonserialize.php#example-1438" class="index">Example#1437 - MongoDB\Driver\ReadPreference::bsonSerialize with secondary read preference and tag sets</a></li>
<li><a href="mongodb-driver-readpreference.bsonserialize.php#example-1439" class="index">Example#1438 - MongoDB\Driver\ReadPreference::bsonSerialize with secondary read preference and max staleness</a></li>
<li><a href="mongodb-driver-readpreference.construct.php#example-1440" class="index">Example#1439 - MongoDB\Driver\ReadPreference::__construct example</a></li>
<li><a href="mongodb-driver-readpreference.getmaxstalenessseconds.php#example-1441" class="index">Example#1440 - MongoDB\Driver\ReadPreference::getMaxStalenessSeconds example</a></li>
<li><a href="mongodb-driver-readpreference.getmode.php#example-1442" class="index">Example#1441 - MongoDB\Driver\ReadPreference::getMode example</a></li>
<li><a href="mongodb-driver-readpreference.getmodestring.php#example-1443" class="index">Example#1442 - MongoDB\Driver\ReadPreference::getModeString example</a></li>
<li><a href="mongodb-driver-readpreference.gettagsets.php#example-1444" class="index">Example#1443 - MongoDB\Driver\ReadPreference::getTagSets example</a></li>
<li><a href="mongodb-driver-readconcern.bsonserialize.php#example-1445" class="index">Example#1444 - MongoDB\Driver\ReadConcern::bsonSerialize with empty read concern</a></li>
<li><a href="mongodb-driver-readconcern.bsonserialize.php#example-1446" class="index">Example#1445 - MongoDB\Driver\ReadConcern::bsonSerialize with local read concern</a></li>
<li><a href="mongodb-driver-readconcern.construct.php#example-1447" class="index">Example#1446 - MongoDB\Driver\ReadConcern::__construct example</a></li>
<li><a href="mongodb-driver-readconcern.getlevel.php#example-1448" class="index">Example#1447 - MongoDB\Driver\ReadConcern::getLevel example</a></li>
<li><a href="mongodb-driver-readconcern.isdefault.php#example-1449" class="index">Example#1448 - MongoDB\Driver\ReadConcern::isDefault example</a></li>
<li><a href="class.mongodb-driver-cursor.php#mongodb-driver-cursor.examples.foreach" class="index">Example#1449 - Reading a result set</a></li>
<li><a href="class.mongodb-driver-cursor.php#mongodb-driver-cursor.examples.tailable" class="index">Example#1450 - Reading a result set for a tailable cursor</a></li>
<li><a href="mongodb-driver-cursor.getid.php#example-1452" class="index">Example#1451 - MongoDB\Driver\Cursor::getId example</a></li>
<li><a href="mongodb-driver-cursor.getserver.php#example-1453" class="index">Example#1452 - MongoDB\Driver\Cursor::getServer example</a></li>
<li><a href="mongodb-driver-cursor.isdead.php#example-1454" class="index">Example#1453 - MongoDB\Driver\Cursor::isDead example</a></li>
<li><a href="mongodb-driver-cursor.settypemap.php#example-1455" class="index">Example#1454 - MongoDB\Driver\Cursor::setTypeMap example</a></li>
<li><a href="mongodb-driver-cursor.toarray.php#example-1456" class="index">Example#1455 - MongoDB\Driver\Cursor::toArray example</a></li>
<li><a href="mongodb-driver-cursorid.tostring.php#example-1457" class="index">Example#1456 - MongoDB\Driver\CursorId::__toString example</a></li>
<li><a href="mongodb-driver-server.gethost.php#example-1458" class="index">Example#1457 - MongoDB\Driver\Server::getHost example</a></li>
<li><a href="mongodb-driver-server.getinfo.php#example-1459" class="index">Example#1458 - MongoDB\Driver\Server::getInfo example</a></li>
<li><a href="mongodb-driver-server.getlatency.php#example-1460" class="index">Example#1459 - MongoDB\Driver\Server::getLatency example</a></li>
<li><a href="mongodb-driver-server.getport.php#example-1461" class="index">Example#1460 - MongoDB\Driver\Server::getPort example</a></li>
<li><a href="mongodb-driver-writeconcernerror.getcode.php#example-1462" class="index">Example#1461 - MongoDB\Driver\WriteConcernError::getCode example</a></li>
<li><a href="mongodb-driver-writeconcernerror.getinfo.php#example-1463" class="index">Example#1462 - MongoDB\Driver\WriteConcernError::getInfo example</a></li>
<li><a href="mongodb-driver-writeconcernerror.getmessage.php#example-1464" class="index">Example#1463 - MongoDB\Driver\WriteConcernError::getMessage example</a></li>
<li><a href="mongodb-driver-writeerror.getcode.php#example-1465" class="index">Example#1464 - MongoDB\Driver\WriteError::getCode example</a></li>
<li><a href="mongodb-driver-writeerror.getindex.php#example-1466" class="index">Example#1465 - MongoDB\Driver\WriteError::getIndex example</a></li>
<li><a href="mongodb-driver-writeerror.getmessage.php#example-1467" class="index">Example#1466 - MongoDB\Driver\WriteError::getMessage example</a></li>
<li><a href="mongodb-driver-writeresult.getdeletedcount.php#example-1468" class="index">Example#1467 - MongoDB\Driver\WriteResult::getDeletedCount example</a></li>
<li><a href="mongodb-driver-writeresult.getinsertedcount.php#example-1469" class="index">Example#1468 - MongoDB\Driver\WriteResult::getInsertedCount example</a></li>
<li><a href="mongodb-driver-writeresult.getmatchedcount.php#example-1470" class="index">Example#1469 - MongoDB\Driver\WriteResult::getMatchedCount example</a></li>
<li><a href="mongodb-driver-writeresult.getmodifiedcount.php#example-1471" class="index">Example#1470 - MongoDB\Driver\WriteResult::getModifiedCount example</a></li>
<li><a href="mongodb-driver-writeresult.getserver.php#example-1472" class="index">Example#1471 - MongoDB\Driver\WriteResult::getServer example</a></li>
<li><a href="mongodb-driver-writeresult.getupsertedcount.php#example-1473" class="index">Example#1472 - MongoDB\Driver\WriteResult::getUpsertedCount example</a></li>
<li><a href="mongodb-driver-writeresult.getupsertedids.php#example-1474" class="index">Example#1473 - MongoDB\Driver\WriteResult::getUpsertedIds example</a></li>
<li><a href="mongodb-driver-writeresult.getwriteconcernerror.php#example-1475" class="index">Example#1474 - MongoDB\Driver\WriteResult::getWriteConcernError example</a></li>
<li><a href="mongodb-driver-writeresult.getwriteerrors.php#example-1476" class="index">Example#1475 - MongoDB\Driver\WriteResult::getWriteErrors with a single error</a></li>
<li><a href="mongodb-driver-writeresult.getwriteerrors.php#example-1477" class="index">Example#1476 - MongoDB\Driver\WriteResult::getWriteErrors with multiple errors</a></li>
<li><a href="mongodb-driver-writeresult.isacknowledged.php#example-1478" class="index">Example#1477 - MongoDB\Driver\WriteResult::isAcknowledged with acknowledged write concern</a></li>
<li><a href="mongodb-driver-writeresult.isacknowledged.php#example-1479" class="index">Example#1478 - MongoDB\Driver\WriteResult::isAcknowledged with unacknowledged write concern</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getdeletedcount.php#example-1480" class="index">Example#1479 - MongoDB\Driver\BulkWriteCommandResult::getDeletedCount example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getdeleteresults.php#example-1481" class="index">Example#1480 - MongoDB\Driver\BulkWriteCommandResult::getDeleteResults example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getinsertedcount.php#example-1482" class="index">Example#1481 - MongoDB\Driver\BulkWriteCommandResult::getInsertedCount example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getinsertresults.php#example-1483" class="index">Example#1482 - MongoDB\Driver\BulkWriteCommandResult::getInsertResults example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getmatchedcount.php#example-1484" class="index">Example#1483 - MongoDB\Driver\BulkWriteCommandResult::getMatchedCount example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getmodifiedcount.php#example-1485" class="index">Example#1484 - MongoDB\Driver\BulkWriteCommandResult::getModifiedCount example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getupdateresults.php#example-1486" class="index">Example#1485 - MongoDB\Driver\BulkWriteCommandResult::getUpdateResults example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.getupsertedcount.php#example-1487" class="index">Example#1486 - MongoDB\Driver\BulkWriteCommandResult::getUpsertedCount example</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.isacknowledged.php#example-1488" class="index">Example#1487 - MongoDB\Driver\BulkWriteCommandResult::isAcknowledged with acknowledged write concern</a></li>
<li><a href="mongodb-driver-bulkwritecommandresult.isacknowledged.php#example-1489" class="index">Example#1488 - MongoDB\Driver\BulkWriteCommandResult::isAcknowledged with unacknowledged write concern</a></li>
<li><a href="function.mongodb.bson-fromjson.php#example-1490" class="index">Example#1489 - MongoDB\BSON\fromJSON example</a></li>
<li><a href="function.mongodb.bson-fromphp.php#example-1491" class="index">Example#1490 - MongoDB\BSON\fromPHP example</a></li>
<li><a href="function.mongodb.bson-tocanonicalextendedjson.php#example-1492" class="index">Example#1491 - MongoDB\BSON\toCanonicalExtendedJSON example</a></li>
<li><a href="function.mongodb.bson-tojson.php#example-1493" class="index">Example#1492 - MongoDB\BSON\toJSON example</a></li>
<li><a href="function.mongodb.bson-tophp.php#example-1494" class="index">Example#1493 - MongoDB\BSON\toPHP example</a></li>
<li><a href="function.mongodb.bson-torelaxedextendedjson.php#example-1495" class="index">Example#1494 - MongoDB\BSON\toRelaxedExtendedJSON example</a></li>
<li><a href="mongodb-bson-document.tocanonicalextendedjson.php#example-1496" class="index">Example#1495 - MongoDB\BSON\Document::toCanonicalExtendedJSON example</a></li>
<li><a href="mongodb-bson-document.torelaxedextendedjson.php#example-1497" class="index">Example#1496 - MongoDB\BSON\Document::toRelaxedExtendedJSON example</a></li>
<li><a href="mongodb-bson-packedarray.fromjson.php#example-1498" class="index">Example#1497 - MongoDB\BSON\PackedArray::fromJSON example</a></li>
<li><a href="mongodb-bson-packedarray.tocanonicalextendedjson.php#example-1499" class="index">Example#1498 - MongoDB\BSON\PackedArray::toCanonicalExtendedJSON example</a></li>
<li><a href="mongodb-bson-packedarray.torelaxedextendedjson.php#example-1500" class="index">Example#1499 - MongoDB\BSON\PackedArray::toRelaxedExtendedJSON example</a></li>
<li><a href="mongodb-bson-binary.construct.php#example-1501" class="index">Example#1500 - MongoDB\BSON\Binary::__construct example</a></li>
<li><a href="mongodb-bson-binary.getdata.php#example-1502" class="index">Example#1501 - MongoDB\BSON\Binary::getData example</a></li>
<li><a href="mongodb-bson-binary.gettype.php#example-1503" class="index">Example#1502 - MongoDB\BSON\Binary::getType example</a></li>
<li><a href="mongodb-bson-binary.tostring.php#example-1504" class="index">Example#1503 - MongoDB\BSON\Binary::__toString example</a></li>
<li><a href="mongodb-bson-decimal128.construct.php#example-1505" class="index">Example#1504 - MongoDB\BSON\Decimal128::__construct example</a></li>
<li><a href="mongodb-bson-decimal128.tostring.php#example-1506" class="index">Example#1505 - MongoDB\BSON\Decimal128::__toString example</a></li>
<li><a href="mongodb-bson-javascript.construct.php#example-1507" class="index">Example#1506 - MongoDB\BSON\Javascript::__construct example</a></li>
<li><a href="mongodb-bson-javascript.getcode.php#example-1508" class="index">Example#1507 - MongoDB\BSON\Javascript::getCode example</a></li>
<li><a href="mongodb-bson-javascript.getscope.php#example-1509" class="index">Example#1508 - MongoDB\BSON\Javascript::getScope example</a></li>
<li><a href="mongodb-bson-javascript.tostring.php#example-1510" class="index">Example#1509 - MongoDB\BSON\Javascript::__toString example</a></li>
<li><a href="mongodb-bson-maxkey.construct.php#example-1511" class="index">Example#1510 - MongoDB\BSON\MaxKey::__construct example</a></li>
<li><a href="mongodb-bson-minkey.construct.php#example-1512" class="index">Example#1511 - MongoDB\BSON\MinKey::__construct example</a></li>
<li><a href="mongodb-bson-objectid.construct.php#example-1513" class="index">Example#1512 - MongoDB\BSON\ObjectId::__construct example</a></li>
<li><a href="mongodb-bson-objectid.gettimestamp.php#example-1514" class="index">Example#1513 - MongoDB\BSON\ObjectId::getTimestamp example</a></li>
<li><a href="mongodb-bson-objectid.tostring.php#example-1515" class="index">Example#1514 - MongoDB\BSON\ObjectId::__toString example</a></li>
<li><a href="mongodb-bson-regex.construct.php#example-1516" class="index">Example#1515 - MongoDB\BSON\Regex::__construct example</a></li>
<li><a href="mongodb-bson-regex.getflags.php#example-1517" class="index">Example#1516 - MongoDB\BSON\Regex::getFlags example</a></li>
<li><a href="mongodb-bson-regex.getpattern.php#example-1518" class="index">Example#1517 - MongoDB\BSON\Regex::getPattern example</a></li>
<li><a href="mongodb-bson-regex.tostring.php#example-1519" class="index">Example#1518 - MongoDB\BSON\Regex::__toString example</a></li>
<li><a href="mongodb-bson-timestamp.construct.php#example-1520" class="index">Example#1519 - MongoDB\BSON\Timestamp::__construct example</a></li>
<li><a href="mongodb-bson-timestamp.tostring.php#example-1521" class="index">Example#1520 - MongoDB\BSON\Timestamp::__toString example</a></li>
<li><a href="mongodb-bson-utcdatetime.construct.php#example-1522" class="index">Example#1521 - MongoDB\BSON\UTCDateTime::__construct example</a></li>
<li><a href="mongodb-bson-utcdatetime.todatetime.php#example-1523" class="index">Example#1522 - MongoDB\BSON\UTCDatetime::toDateTime example</a></li>
<li><a href="mongodb-bson-utcdatetime.todatetimeimmutable.php#example-1524" class="index">Example#1523 - MongoDB\BSON\UTCDatetime::toDateTimeImmutable example</a></li>
<li><a href="mongodb-bson-utcdatetime.tostring.php#example-1525" class="index">Example#1524 - MongoDB\BSON\UTCDateTime::__toString example</a></li>
<li><a href="mongodb-bson-serializable.bsonserialize.php#example-1526" class="index">Example#1525 - MongoDB\BSON\Serializable::bsonSerialize returning an associative array for root document</a></li>
<li><a href="mongodb-bson-serializable.bsonserialize.php#example-1527" class="index">Example#1526 - MongoDB\BSON\Serializable::bsonSerialize returning a sequential array for root document</a></li>
<li><a href="mongodb-bson-serializable.bsonserialize.php#example-1528" class="index">Example#1527 - MongoDB\BSON\Serializable::bsonSerialize returning an associative array for document field</a></li>
<li><a href="mongodb-bson-serializable.bsonserialize.php#example-1529" class="index">Example#1528 - MongoDB\BSON\Serializable::bsonSerialize returning a sequential array for document field</a></li>
<li><a href="mongodb-bson-unserializable.bsonunserialize.php#example-1530" class="index">Example#1529 - MongoDB\BSON\Unserializable::bsonUnserialize example</a></li>
<li><a href="mongodb-bson-int64.tostring.php#example-1531" class="index">Example#1530 - MongoDB\BSON\Int64::__toString example</a></li>
<li><a href="mongodb-driver-bulkwriteexception.getwriteresult.php#example-1532" class="index">Example#1531 - MongoDB\Driver\Exception\BulkWriteException::getWriteResult example</a></li>
<li><a href="mongodb-driver-bulkwritecommandexception.geterrorreply.php#example-1533" class="index">Example#1532 - MongoDB\Driver\Exception\BulkWriteCommandException::getErrorReply example</a></li>
<li><a href="mongodb-driver-bulkwritecommandexception.getpartialresult.php#example-1534" class="index">Example#1533 - Partial result if at least one write is successful</a></li>
<li><a href="mongodb-driver-bulkwritecommandexception.getpartialresult.php#example-1535" class="index">Example#1534 - No partial result if no writes are successful</a></li>
<li><a href="mongodb-driver-bulkwritecommandexception.getwriteconcernerrors.php#example-1536" class="index">Example#1535 - MongoDB\Driver\Exception\BulkWriteCommandException::getWriteConcernErrors example</a></li>
<li><a href="mongodb-driver-bulkwritecommandexception.getwriteerrors.php#example-1537" class="index">Example#1536 - MongoDB\Driver\Exception\BulkWriteCommandException::getWriteErrors example</a></li>
<li><a href="mongodb-driver-writeexception.getwriteresult.php#example-1538" class="index">Example#1537 - MongoDB\Driver\Exception\WriteException::getWriteResult example</a></li>
<li><a href="mysqlinfo.api.choosing.php#example-1539" class="index">Example#1538 - Comparing the MySQL APIs</a></li>
<li><a href="mysqlinfo.api.choosing.php#example-1540" class="index">Example#1539 - Comparing prepared statements</a></li>
<li><a href="mysqlinfo.library.choosing.php#example-1541" class="index">Example#1540 - Configure commands for using mysqlnd or libmysqlclient</a></li>
<li><a href="mysqlinfo.concepts.buffering.php#example-1542" class="index">Example#1541 - Unbuffered query example: mysqli</a></li>
<li><a href="mysqlinfo.concepts.buffering.php#example-1543" class="index">Example#1542 - Unbuffered query example: pdo_mysql</a></li>
<li><a href="mysqlinfo.concepts.charset.php#example-1544" class="index">Example#1543 - Problems with setting the character set with SQL</a></li>
<li><a href="mysqlinfo.concepts.charset.php#example-1545" class="index">Example#1544 - Setting the character set example: mysqli</a></li>
<li><a href="mysqlinfo.concepts.charset.php#example-1546" class="index">Example#1545 - Setting the character set example: pdo_mysql</a></li>
<li><a href="mysqli.quickstart.dual-interface.php#example-1547" class="index">Example#1546 - Easy migration from the old mysql extension</a></li>
<li><a href="mysqli.quickstart.dual-interface.php#example-1548" class="index">Example#1547 - Object-oriented and procedural interface</a></li>
<li><a href="mysqli.quickstart.dual-interface.php#example-1549" class="index">Example#1548 - Bad coding style</a></li>
<li><a href="mysqli.quickstart.connections.php#example-1550" class="index">Example#1549 - Special meaning of localhost</a></li>
<li><a href="mysqli.quickstart.connections.php#example-1551" class="index">Example#1550 - Setting defaults</a></li>
<li><a href="mysqli.quickstart.statements.php#example-1552" class="index">Example#1551 - Executing queries</a></li>
<li><a href="mysqli.quickstart.statements.php#example-1553" class="index">Example#1552 - Navigation through buffered results</a></li>
<li><a href="mysqli.quickstart.statements.php#example-1554" class="index">Example#1553 - Navigation through unbuffered results</a></li>
<li><a href="mysqli.quickstart.statements.php#example-1555" class="index">Example#1554 - Text protocol returns strings by default</a></li>
<li><a href="mysqli.quickstart.statements.php#example-1556" class="index">Example#1555 - Native data types with mysqlnd and connection option</a></li>
<li><a href="mysqli.quickstart.prepared-statements.php#example-1557" class="index">Example#1556 - Prepared statement</a></li>
<li><a href="mysqli.quickstart.prepared-statements.php#example-1558" class="index">Example#1557 - INSERT prepared once, executed multiple times</a></li>
<li><a href="mysqli.quickstart.prepared-statements.php#example-1559" class="index">Example#1558 - Less round trips using multi-INSERT SQL</a></li>
<li><a href="mysqli.quickstart.prepared-statements.php#example-1560" class="index">Example#1559 - Native datatypes</a></li>
<li><a href="mysqli.quickstart.prepared-statements.php#example-1561" class="index">Example#1560 - Output variable binding</a></li>
<li><a href="mysqli.quickstart.prepared-statements.php#example-1562" class="index">Example#1561 - Using mysqli_result to fetch results</a></li>
<li><a href="mysqli.quickstart.prepared-statements.php#example-1563" class="index">Example#1562 - Buffered result set for flexible read out</a></li>
<li><a href="mysqli.quickstart.stored-procedures.php#example-1564" class="index">Example#1563 - Calling a stored procedure</a></li>
<li><a href="mysqli.quickstart.stored-procedures.php#example-1565" class="index">Example#1564 - Using session variables</a></li>
<li><a href="mysqli.quickstart.stored-procedures.php#example-1566" class="index">Example#1565 - Fetching results from stored procedures</a></li>
<li><a href="mysqli.quickstart.stored-procedures.php#example-1567" class="index">Example#1566 - Stored Procedures and Prepared Statements</a></li>
<li><a href="mysqli.quickstart.stored-procedures.php#example-1568" class="index">Example#1567 - Stored Procedures and Prepared Statements using bind API</a></li>
<li><a href="mysqli.quickstart.multiple-statement.php#example-1569" class="index">Example#1568 - Multiple Statements</a></li>
<li><a href="mysqli.quickstart.multiple-statement.php#example-1570" class="index">Example#1569 - SQL Injection</a></li>
<li><a href="mysqli.quickstart.transactions.php#example-1571" class="index">Example#1570 - Setting autocommit mode with SQL and through the API</a></li>
<li><a href="mysqli.quickstart.transactions.php#example-1572" class="index">Example#1571 - Commit and rollback</a></li>
<li><a href="mysqli.quickstart.metadata.php#example-1573" class="index">Example#1572 - Accessing result set meta data</a></li>
<li><a href="mysqli.quickstart.metadata.php#example-1574" class="index">Example#1573 - Prepared statements metadata</a></li>
<li><a href="mysqli.affected-rows.php#example-1575" class="index">Example#1574 - $mysqli-&gt;affected_rows example</a></li>
<li><a href="mysqli.autocommit.php#example-1576" class="index">Example#1575 - mysqli::autocommit example</a></li>
<li><a href="mysqli.begin-transaction.php#mysqli.begin-transaction.example.basic" class="index">Example#1576 - mysqli::begin_transaction example</a></li>
<li><a href="mysqli.change-user.php#example-1578" class="index">Example#1577 - Resetting the connection session</a></li>
<li><a href="mysqli.change-user.php#example-1579" class="index">Example#1578 - If database is null the connection is opened without selecting any default database</a></li>
<li><a href="mysqli.character-set-name.php#example-1580" class="index">Example#1579 - mysqli::character_set_name example</a></li>
<li><a href="mysqli.close.php#example-1581" class="index">Example#1580 - mysqli::close example</a></li>
<li><a href="mysqli.connect-errno.php#example-1582" class="index">Example#1581 - $mysqli-&gt;connect_errno example</a></li>
<li><a href="mysqli.connect-error.php#example-1583" class="index">Example#1582 - $mysqli-&gt;connect_error example</a></li>
<li><a href="mysqli.construct.php#example-1584" class="index">Example#1583 - mysqli::__construct example</a></li>
<li><a href="mysqli.construct.php#example-1585" class="index">Example#1584 - Extending mysqli class</a></li>
<li><a href="mysqli.construct.php#example-1586" class="index">Example#1585 - Manual error handling</a></li>
<li><a href="mysqli.debug.php#example-1587" class="index">Example#1586 - Generating a Trace File</a></li>
<li><a href="mysqli.errno.php#example-1588" class="index">Example#1587 - $mysqli-&gt;errno example</a></li>
<li><a href="mysqli.error.php#example-1589" class="index">Example#1588 - $mysqli-&gt;error example</a></li>
<li><a href="mysqli.error-list.php#example-1590" class="index">Example#1589 - $mysqli-&gt;error_list example</a></li>
<li><a href="mysqli.execute-query.php#example-1591" class="index">Example#1590 - mysqli::execute_query example</a></li>
<li><a href="mysqli.field-count.php#example-1592" class="index">Example#1591 - $mysqli-&gt;field_count example</a></li>
<li><a href="mysqli.get-charset.php#example-1593" class="index">Example#1592 - mysqli::get_charset example</a></li>
<li><a href="mysqli.get-client-info.php#example-1594" class="index">Example#1593 - mysqli_get_client_info</a></li>
<li><a href="mysqli.get-client-version.php#example-1595" class="index">Example#1594 - mysqli_get_client_version</a></li>
<li><a href="mysqli.get-connection-stats.php#example-1596" class="index">Example#1595 - A mysqli_get_connection_stats example</a></li>
<li><a href="mysqli.get-host-info.php#example-1597" class="index">Example#1596 - $mysqli-&gt;host_info example</a></li>
<li><a href="mysqli.get-proto-info.php#example-1598" class="index">Example#1597 - $mysqli-&gt;protocol_version example</a></li>
<li><a href="mysqli.get-server-info.php#example-1599" class="index">Example#1598 - $mysqli-&gt;server_info example</a></li>
<li><a href="mysqli.get-server-version.php#example-1600" class="index">Example#1599 - $mysqli-&gt;server_version example</a></li>
<li><a href="mysqli.get-warnings.php#example-1601" class="index">Example#1600 - Traversing the linked list to fetch all warnings</a></li>
<li><a href="mysqli.info.php#example-1602" class="index">Example#1601 - $mysqli-&gt;info example</a></li>
<li><a href="mysqli.insert-id.php#example-1603" class="index">Example#1602 - $mysqli-&gt;insert_id example</a></li>
<li><a href="mysqli.kill.php#example-1604" class="index">Example#1603 - mysqli::kill example</a></li>
<li><a href="mysqli.multi-query.php#example-1605" class="index">Example#1604 - mysqli::multi_query example</a></li>
<li><a href="mysqli.ping.php#example-1606" class="index">Example#1605 - mysqli::ping example</a></li>
<li><a href="mysqli.poll.php#example-1607" class="index">Example#1606 - A mysqli_poll example</a></li>
<li><a href="mysqli.prepare.php#example-1608" class="index">Example#1607 - mysqli::prepare example</a></li>
<li><a href="mysqli.query.php#example-1609" class="index">Example#1608 - mysqli::query example</a></li>
<li><a href="mysqli.real-connect.php#example-1610" class="index">Example#1609 - mysqli::real_connect example</a></li>
<li><a href="mysqli.real-escape-string.php#example-1611" class="index">Example#1610 - mysqli::real_escape_string example</a></li>
<li><a href="mysqli.select-db.php#example-1612" class="index">Example#1611 - mysqli::select_db example</a></li>
<li><a href="mysqli.set-charset.php#example-1613" class="index">Example#1612 - mysqli::set_charset example</a></li>
<li><a href="mysqli.sqlstate.php#example-1614" class="index">Example#1613 - $mysqli-&gt;sqlstate example</a></li>
<li><a href="mysqli.stat.php#example-1615" class="index">Example#1614 - mysqli::stat example</a></li>
<li><a href="mysqli.thread-id.php#example-1616" class="index">Example#1615 - $mysqli-&gt;thread_id example</a></li>
<li><a href="mysqli.use-result.php#example-1617" class="index">Example#1616 - mysqli::use_result example</a></li>
<li><a href="mysqli.warning-count.php#example-1618" class="index">Example#1617 - $mysqli-&gt;warning_count example</a></li>
<li><a href="mysqli-stmt.affected-rows.php#example-1619" class="index">Example#1618 - mysqli_stmt_affected_rows example</a></li>
<li><a href="mysqli-stmt.bind-param.php#example-1620" class="index">Example#1619 - mysqli_stmt::bind_param example</a></li>
<li><a href="mysqli-stmt.bind-param.php#example-1621" class="index">Example#1620 - Using ... to provide arguments</a></li>
<li><a href="mysqli-stmt.bind-result.php#example-1622" class="index">Example#1621 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.bind-result.php#example-1623" class="index">Example#1622 - Procedural style</a></li>
<li><a href="mysqli-stmt.data-seek.php#example-1624" class="index">Example#1623 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.data-seek.php#example-1625" class="index">Example#1624 - Procedural style</a></li>
<li><a href="mysqli-stmt.errno.php#example-1626" class="index">Example#1625 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.errno.php#example-1627" class="index">Example#1626 - Procedural style</a></li>
<li><a href="mysqli-stmt.error.php#example-1628" class="index">Example#1627 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.error.php#example-1629" class="index">Example#1628 - Procedural style</a></li>
<li><a href="mysqli-stmt.error-list.php#example-1630" class="index">Example#1629 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.error-list.php#example-1631" class="index">Example#1630 - Procedural style</a></li>
<li><a href="mysqli-stmt.execute.php#example-1632" class="index">Example#1631 - Execute a prepared statement with bound variables</a></li>
<li><a href="mysqli-stmt.execute.php#example-1633" class="index">Example#1632 - Execute a prepared statement with an array of values</a></li>
<li><a href="mysqli-stmt.fetch.php#example-1634" class="index">Example#1633 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.fetch.php#example-1635" class="index">Example#1634 - Procedural style</a></li>
<li><a href="mysqli-stmt.field-count.php#example-1636" class="index">Example#1635 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.field-count.php#example-1637" class="index">Example#1636 - Procedural style</a></li>
<li><a href="mysqli-stmt.get-result.php#example-1638" class="index">Example#1637 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.get-result.php#example-1639" class="index">Example#1638 - Procedural style</a></li>
<li><a href="mysqli-stmt.num-rows.php#example-1640" class="index">Example#1639 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.num-rows.php#example-1641" class="index">Example#1640 - Procedural style</a></li>
<li><a href="mysqli-stmt.param-count.php#example-1642" class="index">Example#1641 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.param-count.php#example-1643" class="index">Example#1642 - Procedural style</a></li>
<li><a href="mysqli-stmt.prepare.php#example-1644" class="index">Example#1643 - mysqli_stmt::prepare example</a></li>
<li><a href="mysqli-stmt.result-metadata.php#example-1645" class="index">Example#1644 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.result-metadata.php#example-1646" class="index">Example#1645 - Procedural style</a></li>
<li><a href="mysqli-stmt.send-long-data.php#example-1647" class="index">Example#1646 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.sqlstate.php#example-1648" class="index">Example#1647 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.sqlstate.php#example-1649" class="index">Example#1648 - Procedural style</a></li>
<li><a href="mysqli-stmt.store-result.php#example-1650" class="index">Example#1649 - Object-oriented style</a></li>
<li><a href="mysqli-stmt.store-result.php#example-1651" class="index">Example#1650 - Procedural style</a></li>
<li><a href="mysqli-result.construct.php#example-1652" class="index">Example#1651 - Creation of a mysqli_result object</a></li>
<li><a href="mysqli-result.current-field.php#example-1653" class="index">Example#1652 - Object-oriented style</a></li>
<li><a href="mysqli-result.current-field.php#example-1654" class="index">Example#1653 - Procedural style</a></li>
<li><a href="mysqli-result.data-seek.php#example-1655" class="index">Example#1654 - mysqli::data_seek example</a></li>
<li><a href="mysqli-result.data-seek.php#example-1656" class="index">Example#1655 - Adjusting the result pointer when iterating</a></li>
<li><a href="mysqli-result.fetch-all.php#example-1657" class="index">Example#1656 - mysqli_result::fetch_all example</a></li>
<li><a href="mysqli-result.fetch-array.php#example-1658" class="index">Example#1657 - mysqli_result::fetch_array example</a></li>
<li><a href="mysqli-result.fetch-assoc.php#example-1659" class="index">Example#1658 - mysqli_result::fetch_assoc example</a></li>
<li><a href="mysqli-result.fetch-assoc.php#mysqli-result.example.iterator" class="index">Example#1659 - Comparison of mysqli_result iterator and mysqli_result::fetch_assoc usage</a></li>
<li><a href="mysqli-result.fetch-column.php#example-1661" class="index">Example#1660 - mysqli_result::fetch_column example</a></li>
<li><a href="mysqli-result.fetch-field.php#example-1662" class="index">Example#1661 - Object-oriented style</a></li>
<li><a href="mysqli-result.fetch-field.php#example-1663" class="index">Example#1662 - Procedural style</a></li>
<li><a href="mysqli-result.fetch-field-direct.php#example-1664" class="index">Example#1663 - Object-oriented style</a></li>
<li><a href="mysqli-result.fetch-field-direct.php#example-1665" class="index">Example#1664 - Procedural style</a></li>
<li><a href="mysqli-result.fetch-fields.php#example-1666" class="index">Example#1665 - Object-oriented style</a></li>
<li><a href="mysqli-result.fetch-fields.php#example-1667" class="index">Example#1666 - Procedural style</a></li>
<li><a href="mysqli-result.fetch-object.php#example-1668" class="index">Example#1667 - mysqli_result::fetch_object example</a></li>
<li><a href="mysqli-result.fetch-row.php#example-1669" class="index">Example#1668 - mysqli_result::fetch_row example</a></li>
<li><a href="mysqli-result.field-count.php#example-1670" class="index">Example#1669 - Object-oriented style</a></li>
<li><a href="mysqli-result.field-count.php#example-1671" class="index">Example#1670 - Procedural style</a></li>
<li><a href="mysqli-result.field-seek.php#example-1672" class="index">Example#1671 - Object-oriented style</a></li>
<li><a href="mysqli-result.field-seek.php#example-1673" class="index">Example#1672 - Procedural style</a></li>
<li><a href="mysqli-result.lengths.php#example-1674" class="index">Example#1673 - Object-oriented style</a></li>
<li><a href="mysqli-result.lengths.php#example-1675" class="index">Example#1674 - Procedural style</a></li>
<li><a href="mysqli-result.num-rows.php#example-1676" class="index">Example#1675 - Object-oriented style</a></li>
<li><a href="mysqli-result.num-rows.php#example-1677" class="index">Example#1676 - Procedural style</a></li>
<li><a href="mysqli-driver.report-mode.php#example-1678" class="index">Example#1677 - Object-oriented style</a></li>
<li><a href="mysqli-driver.report-mode.php#example-1679" class="index">Example#1678 - Procedural style</a></li>
<li><a href="mysqli-driver.report-mode.php#example-1680" class="index">Example#1679 - Error reporting except bad index errors</a></li>
<li><a href="function.mysqli-get-client-stats.php#example-1681" class="index">Example#1680 - A mysqli_get_client_stats example</a></li>
<li><a href="mysql-xdevapi.examples.php#example-1682" class="index">Example#1681 - Connecting to a MySQL Server</a></li>
<li><a href="mysql-xdevapi.examples.php#example-1683" class="index">Example#1682 - Creating a Schema and Collection on the MySQL Server</a></li>
<li><a href="mysql-xdevapi.examples.php#example-1684" class="index">Example#1683 - Storing and Retrieving Data</a></li>
<li><a href="mysql-xdevapi.examples.php#example-1685" class="index">Example#1684 - Fetching and Iterating Multiple Documents</a></li>
<li><a href="function.mysql-xdevapi-expression.php#example-1686" class="index">Example#1685 - mysql_xdevapi\Expression example</a></li>
<li><a href="function.mysql-xdevapi-getsession.php#example-1687" class="index">Example#1686 - URI examples</a></li>
<li><a href="function.mysql-xdevapi-getsession.php#example-1688" class="index">Example#1687 - mysql_xdevapi\getSession example</a></li>
<li><a href="mysql-xdevapi-baseresult.getwarnings.php#example-1689" class="index">Example#1688 - mysql_xdevapi\RowResult::getWarnings example</a></li>
<li><a href="mysql-xdevapi-baseresult.getwarningscount.php#example-1690" class="index">Example#1689 - mysql_xdevapi\RowResult::getWarningsCount example</a></li>
<li><a href="mysql-xdevapi-client.construct.php#example-1691" class="index">Example#1690 - mysql_xdevapi\Client::__construct example</a></li>
<li><a href="mysql-xdevapi-collection.add.php#example-1692" class="index">Example#1691 - mysql_xdevapi\Collection::add example</a></li>
<li><a href="mysql-xdevapi-collection.addorreplaceone.php#example-1693" class="index">Example#1692 - mysql_xdevapi\Collection::addOrReplaceOne example</a></li>
<li><a href="mysql-xdevapi-collection.construct.php#example-1694" class="index">Example#1693 - mysql_xdevapi\Collection::getOne example</a></li>
<li><a href="mysql-xdevapi-collection.count.php#example-1695" class="index">Example#1694 - mysql_xdevapi\Collection::count example</a></li>
<li><a href="mysql-xdevapi-collection.createindex.php#example-1696" class="index">Example#1695 - mysql_xdevapi\Collection::createIndex example</a></li>
<li><a href="mysql-xdevapi-collection.dropindex.php#example-1697" class="index">Example#1696 - mysql_xdevapi\Collection::dropIndex example</a></li>
<li><a href="mysql-xdevapi-collection.existsindatabase.php#example-1698" class="index">Example#1697 - mysql_xdevapi\Collection::existsInDatabase example</a></li>
<li><a href="mysql-xdevapi-collection.find.php#example-1699" class="index">Example#1698 - mysql_xdevapi\Collection::find example</a></li>
<li><a href="mysql-xdevapi-collection.getname.php#example-1700" class="index">Example#1699 - mysql_xdevapi\Collection::getName example</a></li>
<li><a href="mysql-xdevapi-collection.getone.php#example-1701" class="index">Example#1700 - mysql_xdevapi\Collection::getOne example</a></li>
<li><a href="mysql-xdevapi-collection.getschema.php#example-1702" class="index">Example#1701 - mysql_xdevapi\Collection::getSchema example</a></li>
<li><a href="mysql-xdevapi-collection.getsession.php#example-1703" class="index">Example#1702 - mysql_xdevapi\Collection::getSession example</a></li>
<li><a href="mysql-xdevapi-collection.modify.php#example-1704" class="index">Example#1703 - mysql_xdevapi\Collection::modify example</a></li>
<li><a href="mysql-xdevapi-collection.remove.php#example-1705" class="index">Example#1704 - mysql_xdevapi\Collection::remove example</a></li>
<li><a href="mysql-xdevapi-collection.removeone.php#example-1706" class="index">Example#1705 - mysql_xdevapi\Collection::removeOne example</a></li>
<li><a href="mysql-xdevapi-collection.replaceone.php#example-1707" class="index">Example#1706 - mysql_xdevapi\Collection::replaceOne example</a></li>
<li><a href="mysql-xdevapi-collectionadd.construct.php#example-1708" class="index">Example#1707 - mysql_xdevapi\CollectionAdd::__construct example</a></li>
<li><a href="mysql-xdevapi-collectionadd.execute.php#example-1709" class="index">Example#1708 - mysql_xdevapi\CollectionAdd::execute example</a></li>
<li><a href="mysql-xdevapi-collectionfind.bind.php#example-1710" class="index">Example#1709 - mysql_xdevapi\CollectionFind::bind example</a></li>
<li><a href="mysql-xdevapi-collectionfind.construct.php#example-1711" class="index">Example#1710 - CollectionFind example</a></li>
<li><a href="mysql-xdevapi-collectionfind.execute.php#example-1712" class="index">Example#1711 - CollectionFind example</a></li>
<li><a href="mysql-xdevapi-collectionfind.fields.php#example-1713" class="index">Example#1712 - mysql_xdevapi\CollectionFind::fields example</a></li>
<li><a href="mysql-xdevapi-collectionfind.groupby.php#example-1714" class="index">Example#1713 - mysql_xdevapi\CollectionFind::groupBy example</a></li>
<li><a href="mysql-xdevapi-collectionfind.having.php#example-1715" class="index">Example#1714 - mysql_xdevapi\CollectionFind::having example</a></li>
<li><a href="mysql-xdevapi-collectionfind.limit.php#example-1716" class="index">Example#1715 - mysql_xdevapi\CollectionFind::limit example</a></li>
<li><a href="mysql-xdevapi-collectionfind.lockexclusive.php#example-1717" class="index">Example#1716 - mysql_xdevapi\CollectionFind::lockExclusive example</a></li>
<li><a href="mysql-xdevapi-collectionfind.lockshared.php#example-1718" class="index">Example#1717 - mysql_xdevapi\CollectionFind::lockShared example</a></li>
<li><a href="mysql-xdevapi-collectionfind.offset.php#example-1719" class="index">Example#1718 - mysql_xdevapi\CollectionFind::offset example</a></li>
<li><a href="mysql-xdevapi-collectionfind.sort.php#example-1720" class="index">Example#1719 - mysql_xdevapi\CollectionFind::sort example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.arrayappend.php#example-1721" class="index">Example#1720 - mysql_xdevapi\CollectionModify::arrayAppend example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.arrayinsert.php#example-1722" class="index">Example#1721 - mysql_xdevapi\CollectionModify::arrayInsert example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.bind.php#example-1723" class="index">Example#1722 - mysql_xdevapi\CollectionModify::bind example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.construct.php#example-1724" class="index">Example#1723 - mysql_xdevapi\CollectionModify::__construct example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.execute.php#example-1725" class="index">Example#1724 - mysql_xdevapi\CollectionModify::execute example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.limit.php#example-1726" class="index">Example#1725 - mysql_xdevapi\CollectionModify::limit example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.patch.php#example-1727" class="index">Example#1726 - mysql_xdevapi\CollectionModify::patch example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.replace.php#example-1728" class="index">Example#1727 - mysql_xdevapi\CollectionModify::replace example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.set.php#example-1729" class="index">Example#1728 - mysql_xdevapi\CollectionModify::set example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.skip.php#example-1730" class="index">Example#1729 - mysql_xdevapi\CollectionModify::skip example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.sort.php#example-1731" class="index">Example#1730 - mysql_xdevapi\CollectionModify::sort example</a></li>
<li><a href="mysql-xdevapi-collectionmodify.unset.php#example-1732" class="index">Example#1731 - mysql_xdevapi\CollectionModify::unset example</a></li>
<li><a href="mysql-xdevapi-collectionremove.bind.php#example-1733" class="index">Example#1732 - mysql_xdevapi\CollectionRemove::bind example</a></li>
<li><a href="mysql-xdevapi-collectionremove.construct.php#example-1734" class="index">Example#1733 - mysql_xdevapi\Collection::remove example</a></li>
<li><a href="mysql-xdevapi-collectionremove.execute.php#example-1735" class="index">Example#1734 - mysql_xdevapi\CollectionRemove::execute example</a></li>
<li><a href="mysql-xdevapi-collectionremove.limit.php#example-1736" class="index">Example#1735 - mysql_xdevapi\CollectionRemove::limit example</a></li>
<li><a href="mysql-xdevapi-collectionremove.sort.php#example-1737" class="index">Example#1736 - mysql_xdevapi\CollectionRemove::sort example</a></li>
<li><a href="mysql-xdevapi-columnresult.construct.php#example-1738" class="index">Example#1737 - mysql_xdevapi\ColumnResult::__construct example</a></li>
<li><a href="mysql-xdevapi-columnresult.getcharactersetname.php#example-1739" class="index">Example#1738 - mysql_xdevapi\ColumnResult::getCharacterSetName example</a></li>
<li><a href="mysql-xdevapi-columnresult.getcollationname.php#example-1740" class="index">Example#1739 - mysql_xdevapi\ColumnResult::getCollationName example</a></li>
<li><a href="mysql-xdevapi-columnresult.getcolumnlabel.php#example-1741" class="index">Example#1740 - mysql_xdevapi\ColumnResult::getColumnLabel example</a></li>
<li><a href="mysql-xdevapi-columnresult.getcolumnname.php#example-1742" class="index">Example#1741 - mysql_xdevapi\ColumnResult::getColumnName example</a></li>
<li><a href="mysql-xdevapi-columnresult.getfractionaldigits.php#example-1743" class="index">Example#1742 - mysql_xdevapi\ColumnResult::getFractionalDigits example</a></li>
<li><a href="mysql-xdevapi-columnresult.getlength.php#example-1744" class="index">Example#1743 - mysql_xdevapi\ColumnResult::getLength example</a></li>
<li><a href="mysql-xdevapi-columnresult.getschemaname.php#example-1745" class="index">Example#1744 - mysql_xdevapi\ColumnResult::getSchemaName example</a></li>
<li><a href="mysql-xdevapi-columnresult.gettablelabel.php#example-1746" class="index">Example#1745 - mysql_xdevapi\ColumnResult::getTableLabel example</a></li>
<li><a href="mysql-xdevapi-columnresult.gettablename.php#example-1747" class="index">Example#1746 - mysql_xdevapi\ColumnResult::getTableName example</a></li>
<li><a href="mysql-xdevapi-columnresult.gettype.php#example-1748" class="index">Example#1747 - mysql_xdevapi\ColumnResult::getType example</a></li>
<li><a href="mysql-xdevapi-columnresult.isnumbersigned.php#example-1749" class="index">Example#1748 - mysql_xdevapi\ColumnResult::isNumberSigned example</a></li>
<li><a href="mysql-xdevapi-columnresult.ispadded.php#example-1750" class="index">Example#1749 - mysql_xdevapi\ColumnResult::isPadded example</a></li>
<li><a href="mysql-xdevapi-crudoperationbindable.bind.php#example-1751" class="index">Example#1750 - mysql_xdevapi\CrudOperationBindable::bind example</a></li>
<li><a href="mysql-xdevapi-crudoperationlimitable.limit.php#example-1752" class="index">Example#1751 - mysql_xdevapi\CrudOperationLimitable::limit example</a></li>
<li><a href="mysql-xdevapi-crudoperationskippable.skip.php#example-1753" class="index">Example#1752 - mysql_xdevapi\CrudOperationSkippable::skip example</a></li>
<li><a href="mysql-xdevapi-crudoperationsortable.sort.php#example-1754" class="index">Example#1753 - mysql_xdevapi\CrudOperationSortable::sort example</a></li>
<li><a href="mysql-xdevapi-databaseobject.existsindatabase.php#example-1755" class="index">Example#1754 - mysql_xdevapi\DatabaseObject::existsInDatabase example</a></li>
<li><a href="mysql-xdevapi-databaseobject.getname.php#example-1756" class="index">Example#1755 - mysql_xdevapi\DatabaseObject::getName example</a></li>
<li><a href="mysql-xdevapi-databaseobject.getsession.php#example-1757" class="index">Example#1756 - mysql_xdevapi\DatabaseObject::getSession example</a></li>
<li><a href="mysql-xdevapi-docresult.construct.php#example-1758" class="index">Example#1757 - A DocResult example</a></li>
<li><a href="mysql-xdevapi-docresult.fetchall.php#example-1759" class="index">Example#1758 - mysql_xdevapi\DocResult::fetchAll example</a></li>
<li><a href="mysql-xdevapi-docresult.fetchone.php#example-1760" class="index">Example#1759 - mysql_xdevapi\DocResult::fetchOne example</a></li>
<li><a href="mysql-xdevapi-docresult.getwarnings.php#example-1761" class="index">Example#1760 - mysql_xdevapi\DocResult::getWarnings example</a></li>
<li><a href="mysql-xdevapi-docresult.getwarningscount.php#example-1762" class="index">Example#1761 - mysql_xdevapi\DocResult::getWarningsCount example</a></li>
<li><a href="mysql-xdevapi-executable.execute.php#example-1763" class="index">Example#1762 - execute() examples</a></li>
<li><a href="mysql-xdevapi-executionstatus.construct.php#example-1764" class="index">Example#1763 - mysql_xdevapi\ExecutionStatus::__construct example</a></li>
<li><a href="mysql-xdevapi-expression.construct.php#example-1765" class="index">Example#1764 - mysql_xdevapi\Expression::__construct example</a></li>
<li><a href="mysql-xdevapi-result.construct.php#example-1766" class="index">Example#1765 - mysql_xdevapi\Result::__construct example</a></li>
<li><a href="mysql-xdevapi-result.getaffecteditemscount.php#example-1767" class="index">Example#1766 - mysql_xdevapi\Result::getAffectedItemsCount example</a></li>
<li><a href="mysql-xdevapi-result.getautoincrementvalue.php#example-1768" class="index">Example#1767 - mysql_xdevapi\Result::getAutoIncrementValue example</a></li>
<li><a href="mysql-xdevapi-result.getgeneratedids.php#example-1769" class="index">Example#1768 - mysql_xdevapi\Result::getGeneratedIds example</a></li>
<li><a href="mysql-xdevapi-result.getwarnings.php#example-1770" class="index">Example#1769 - mysql_xdevapi\RowResult::getWarnings example</a></li>
<li><a href="mysql-xdevapi-result.getwarningscount.php#example-1771" class="index">Example#1770 - mysql_xdevapi\RowResult::getWarningsCount example</a></li>
<li><a href="mysql-xdevapi-rowresult.construct.php#example-1772" class="index">Example#1771 - mysql_xdevapi\RowResult::__construct example</a></li>
<li><a href="mysql-xdevapi-rowresult.fetchall.php#example-1773" class="index">Example#1772 - mysql_xdevapi\RowResult::fetchAll example</a></li>
<li><a href="mysql-xdevapi-rowresult.fetchone.php#example-1774" class="index">Example#1773 - mysql_xdevapi\RowResult::fetchOne example</a></li>
<li><a href="mysql-xdevapi-rowresult.getcolumncount.php#example-1775" class="index">Example#1774 - mysql_xdevapi\RowResult::getColumnsCount example</a></li>
<li><a href="mysql-xdevapi-rowresult.getcolumnnames.php#example-1776" class="index">Example#1775 - mysql_xdevapi\RowResult::getColumnNames example</a></li>
<li><a href="mysql-xdevapi-rowresult.getcolumns.php#example-1777" class="index">Example#1776 - mysql_xdevapi\RowResult::getColumns example</a></li>
<li><a href="mysql-xdevapi-rowresult.getwarnings.php#example-1778" class="index">Example#1777 - mysql_xdevapi\RowResult::getWarnings example</a></li>
<li><a href="mysql-xdevapi-rowresult.getwarningscount.php#example-1779" class="index">Example#1778 - mysql_xdevapi\RowResult::getWarningsCount example</a></li>
<li><a href="mysql-xdevapi-schema.construct.php#example-1780" class="index">Example#1779 - mysql_xdevapi\Schema::__construct example</a></li>
<li><a href="mysql-xdevapi-schema.createcollection.php#example-1781" class="index">Example#1780 - mysql_xdevapi\Schema::createCollection example</a></li>
<li><a href="mysql-xdevapi-schema.createcollection.php#example-1782" class="index">Example#1781 - mysql_xdevapi\Schema::createCollection example</a></li>
<li><a href="mysql-xdevapi-schema.dropcollection.php#example-1783" class="index">Example#1782 - mysql_xdevapi\Schema::dropCollection example</a></li>
<li><a href="mysql-xdevapi-schema.existsindatabase.php#example-1784" class="index">Example#1783 - mysql_xdevapi\Schema::existsInDatabase example</a></li>
<li><a href="mysql-xdevapi-schema.getcollection.php#example-1785" class="index">Example#1784 - mysql_xdevapi\Schema::getCollection example</a></li>
<li><a href="mysql-xdevapi-schema.getcollectionastable.php#example-1786" class="index">Example#1785 - mysql_xdevapi\Schema::getCollectionAsTable example</a></li>
<li><a href="mysql-xdevapi-schema.getcollections.php#example-1787" class="index">Example#1786 - mysql_xdevapi\Schema::getCollections example</a></li>
<li><a href="mysql-xdevapi-schema.getname.php#example-1788" class="index">Example#1787 - mysql_xdevapi\Schema::getName example</a></li>
<li><a href="mysql-xdevapi-schema.getsession.php#example-1789" class="index">Example#1788 - mysql_xdevapi\Schema::getSession example</a></li>
<li><a href="mysql-xdevapi-schema.gettable.php#example-1790" class="index">Example#1789 - mysql_xdevapi\Schema::getTable example</a></li>
<li><a href="mysql-xdevapi-schema.gettables.php#example-1791" class="index">Example#1790 - mysql_xdevapi\Schema::getTables example</a></li>
<li><a href="mysql-xdevapi-schemaobject.getschema.php#example-1792" class="index">Example#1791 - mysql_xdevapi\Session::getSchema example</a></li>
<li><a href="mysql-xdevapi-session.close.php#example-1793" class="index">Example#1792 - mysql_xdevapi\Session::close example</a></li>
<li><a href="mysql-xdevapi-session.commit.php#example-1794" class="index">Example#1793 - mysql_xdevapi\Session::commit example</a></li>
<li><a href="mysql-xdevapi-session.construct.php#example-1795" class="index">Example#1794 - mysql_xdevapi\Session::__construct example</a></li>
<li><a href="mysql-xdevapi-session.createschema.php#example-1796" class="index">Example#1795 - mysql_xdevapi\Session::createSchema example</a></li>
<li><a href="mysql-xdevapi-session.dropschema.php#example-1797" class="index">Example#1796 - mysql_xdevapi\Session::dropSchema example</a></li>
<li><a href="mysql-xdevapi-session.generateuuid.php#example-1798" class="index">Example#1797 - mysql_xdevapi\Session::generateUuid example</a></li>
<li><a href="mysql-xdevapi-session.getdefaultschema.php#example-1799" class="index">Example#1798 - mysql_xdevapi\Session::getSchema example</a></li>
<li><a href="mysql-xdevapi-session.getschema.php#example-1800" class="index">Example#1799 - mysql_xdevapi\Session::getSchema example</a></li>
<li><a href="mysql-xdevapi-session.getschemas.php#example-1801" class="index">Example#1800 - mysql_xdevapi\Session::getSchemas example</a></li>
<li><a href="mysql-xdevapi-session.getserverversion.php#example-1802" class="index">Example#1801 - mysql_xdevapi\Session::getServerVersion example</a></li>
<li><a href="mysql-xdevapi-session.listclients.php#example-1803" class="index">Example#1802 - mysql_xdevapi\Session::listClients example</a></li>
<li><a href="mysql-xdevapi-session.quotename.php#example-1804" class="index">Example#1803 - mysql_xdevapi\Session::quoteName example</a></li>
<li><a href="mysql-xdevapi-session.releasesavepoint.php#example-1805" class="index">Example#1804 - mysql_xdevapi\Session::releaseSavepoint example</a></li>
<li><a href="mysql-xdevapi-session.rollback.php#example-1806" class="index">Example#1805 - mysql_xdevapi\Session::rollback example</a></li>
<li><a href="mysql-xdevapi-session.rollbackto.php#example-1807" class="index">Example#1806 - mysql_xdevapi\Session::rollbackTo example</a></li>
<li><a href="mysql-xdevapi-session.setsavepoint.php#example-1808" class="index">Example#1807 - mysql_xdevapi\Session::setSavepoint example</a></li>
<li><a href="mysql-xdevapi-session.sql.php#example-1809" class="index">Example#1808 - mysql_xdevapi\Session::sql example</a></li>
<li><a href="mysql-xdevapi-session.starttransaction.php#example-1810" class="index">Example#1809 - mysql_xdevapi\Session::startTransaction example</a></li>
<li><a href="mysql-xdevapi-sqlstatement.bind.php#example-1811" class="index">Example#1810 - mysql_xdevapi\SqlStatement::bind example</a></li>
<li><a href="mysql-xdevapi-sqlstatement.construct.php#example-1812" class="index">Example#1811 - mysql_xdevapi\SqlStatement::__construct example</a></li>
<li><a href="mysql-xdevapi-sqlstatement.execute.php#example-1813" class="index">Example#1812 - mysql_xdevapi\SqlStatement::execute example</a></li>
<li><a href="mysql-xdevapi-sqlstatement.getnextresult.php#example-1814" class="index">Example#1813 - mysql_xdevapi\SqlStatement::getNextResult example</a></li>
<li><a href="mysql-xdevapi-sqlstatement.getresult.php#example-1815" class="index">Example#1814 - mysql_xdevapi\SqlStatement::getResult example</a></li>
<li><a href="mysql-xdevapi-sqlstatement.hasmoreresults.php#example-1816" class="index">Example#1815 - mysql_xdevapi\SqlStatement::hasMoreResults example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.construct.php#example-1817" class="index">Example#1816 - mysql_xdevapi\SqlStatementResult::__construct example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.fetchall.php#example-1818" class="index">Example#1817 - mysql_xdevapi\SqlStatementResult::fetchAll example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.fetchone.php#example-1819" class="index">Example#1818 - mysql_xdevapi\SqlStatementResult::fetchOne example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getaffecteditemscount.php#example-1820" class="index">Example#1819 - mysql_xdevapi\SqlStatementResult::getAffectedItemsCount example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getcolumncount.php#example-1821" class="index">Example#1820 - mysql_xdevapi\SqlStatementResult::getColumnsCount example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getcolumnnames.php#example-1822" class="index">Example#1821 - mysql_xdevapi\SqlStatementResult::getColumnNames example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getcolumns.php#example-1823" class="index">Example#1822 - mysql_xdevapi\SqlStatementResult::getColumns example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getgeneratedids.php#example-1824" class="index">Example#1823 - mysql_xdevapi\SqlStatementResult::getGeneratedIds example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getlastinsertid.php#example-1825" class="index">Example#1824 - mysql_xdevapi\SqlStatementResult::getLastInsertId example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getwarnings.php#example-1826" class="index">Example#1825 - mysql_xdevapi\SqlStatementResult::getWarnings example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.getwarningcount.php#example-1827" class="index">Example#1826 - mysql_xdevapi\SqlStatementResult::getWarningsCount example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.hasdata.php#example-1828" class="index">Example#1827 - mysql_xdevapi\SqlStatementResult::hasData example</a></li>
<li><a href="mysql-xdevapi-sqlstatementresult.nextresult.php#example-1829" class="index">Example#1828 - mysql_xdevapi\SqlStatementResult::nextResult example</a></li>
<li><a href="mysql-xdevapi-statement.construct.php#example-1830" class="index">Example#1829 - mysql_xdevapi\Statement::__construct example</a></li>
<li><a href="mysql-xdevapi-statement.getnextresult.php#example-1831" class="index">Example#1830 - mysql_xdevapi\Statement::getNextResult example</a></li>
<li><a href="mysql-xdevapi-statement.getresult.php#example-1832" class="index">Example#1831 - mysql_xdevapi\Statement::getResult example</a></li>
<li><a href="mysql-xdevapi-statement.hasmoreresults.php#example-1833" class="index">Example#1832 - mysql_xdevapi\Statement::hasMoreResults example</a></li>
<li><a href="mysql-xdevapi-table.construct.php#example-1834" class="index">Example#1833 - mysql_xdevapi\Table::__construct example</a></li>
<li><a href="mysql-xdevapi-table.count.php#example-1835" class="index">Example#1834 - mysql_xdevapi\Table::count example</a></li>
<li><a href="mysql-xdevapi-table.delete.php#example-1836" class="index">Example#1835 - mysql_xdevapi\Table::delete example</a></li>
<li><a href="mysql-xdevapi-table.existsindatabase.php#example-1837" class="index">Example#1836 - mysql_xdevapi\Table::existsInDatabase example</a></li>
<li><a href="mysql-xdevapi-table.getname.php#example-1838" class="index">Example#1837 - mysql_xdevapi\Table::getName example</a></li>
<li><a href="mysql-xdevapi-table.getschema.php#example-1839" class="index">Example#1838 - mysql_xdevapi\Table::getSchema example</a></li>
<li><a href="mysql-xdevapi-table.getsession.php#example-1840" class="index">Example#1839 - mysql_xdevapi\Table::getSession example</a></li>
<li><a href="mysql-xdevapi-table.insert.php#example-1841" class="index">Example#1840 - mysql_xdevapi\Table::insert example</a></li>
<li><a href="mysql-xdevapi-table.isview.php#example-1842" class="index">Example#1841 - mysql_xdevapi\Table::isView example</a></li>
<li><a href="mysql-xdevapi-table.select.php#example-1843" class="index">Example#1842 - mysql_xdevapi\Table::count example</a></li>
<li><a href="mysql-xdevapi-table.update.php#example-1844" class="index">Example#1843 - mysql_xdevapi\Table::update example</a></li>
<li><a href="mysql-xdevapi-tabledelete.bind.php#example-1845" class="index">Example#1844 - mysql_xdevapi\TableDelete::bind example</a></li>
<li><a href="mysql-xdevapi-tabledelete.construct.php#example-1846" class="index">Example#1845 - mysql_xdevapi\TableDelete::__construct example</a></li>
<li><a href="mysql-xdevapi-tabledelete.execute.php#example-1847" class="index">Example#1846 - mysql_xdevapi\TableDelete::execute example</a></li>
<li><a href="mysql-xdevapi-tabledelete.limit.php#example-1848" class="index">Example#1847 - mysql_xdevapi\TableDelete::limit example</a></li>
<li><a href="mysql-xdevapi-tabledelete.orderby.php#example-1849" class="index">Example#1848 - mysql_xdevapi\TableDelete::orderBy example</a></li>
<li><a href="mysql-xdevapi-tabledelete.where.php#example-1850" class="index">Example#1849 - mysql_xdevapi\TableDelete::where example</a></li>
<li><a href="mysql-xdevapi-tableinsert.construct.php#example-1851" class="index">Example#1850 - mysql_xdevapi\TableInsert::__construct example</a></li>
<li><a href="mysql-xdevapi-tableinsert.execute.php#example-1852" class="index">Example#1851 - mysql_xdevapi\TableInsert::execute example</a></li>
<li><a href="mysql-xdevapi-tableinsert.values.php#example-1853" class="index">Example#1852 - mysql_xdevapi\TableInsert::values example</a></li>
<li><a href="mysql-xdevapi-tableselect.bind.php#example-1854" class="index">Example#1853 - mysql_xdevapi\TableSelect::bind example</a></li>
<li><a href="mysql-xdevapi-tableselect.construct.php#example-1855" class="index">Example#1854 - mysql_xdevapi\TableSelect::__construct example</a></li>
<li><a href="mysql-xdevapi-tableselect.execute.php#example-1856" class="index">Example#1855 - mysql_xdevapi\TableSelect::execute example</a></li>
<li><a href="mysql-xdevapi-tableselect.groupby.php#example-1857" class="index">Example#1856 - mysql_xdevapi\TableSelect::groupBy example</a></li>
<li><a href="mysql-xdevapi-tableselect.having.php#example-1858" class="index">Example#1857 - mysql_xdevapi\TableSelect::having example</a></li>
<li><a href="mysql-xdevapi-tableselect.limit.php#example-1859" class="index">Example#1858 - mysql_xdevapi\TableSelect::limit example</a></li>
<li><a href="mysql-xdevapi-tableselect.lockexclusive.php#example-1860" class="index">Example#1859 - mysql_xdevapi\TableSelect::lockExclusive example</a></li>
<li><a href="mysql-xdevapi-tableselect.lockshared.php#example-1861" class="index">Example#1860 - mysql_xdevapi\TableSelect::lockShared example</a></li>
<li><a href="mysql-xdevapi-tableselect.offset.php#example-1862" class="index">Example#1861 - mysql_xdevapi\TableSelect::offset example</a></li>
<li><a href="mysql-xdevapi-tableselect.orderby.php#example-1863" class="index">Example#1862 - mysql_xdevapi\TableSelect::orderBy example</a></li>
<li><a href="mysql-xdevapi-tableselect.where.php#example-1864" class="index">Example#1863 - mysql_xdevapi\TableSelect::where example</a></li>
<li><a href="mysql-xdevapi-tableupdate.bind.php#example-1865" class="index">Example#1864 - mysql_xdevapi\TableUpdate::bind example</a></li>
<li><a href="mysql-xdevapi-tableupdate.construct.php#example-1866" class="index">Example#1865 - mysql_xdevapi\TableUpdate::__construct example</a></li>
<li><a href="mysql-xdevapi-tableupdate.execute.php#example-1867" class="index">Example#1866 - mysql_xdevapi\TableUpdate::execute example</a></li>
<li><a href="mysql-xdevapi-tableupdate.limit.php#example-1868" class="index">Example#1867 - mysql_xdevapi\TableUpdate::limit example</a></li>
<li><a href="mysql-xdevapi-tableupdate.orderby.php#example-1869" class="index">Example#1868 - mysql_xdevapi\TableUpdate::orderby example</a></li>
<li><a href="mysql-xdevapi-tableupdate.set.php#example-1870" class="index">Example#1869 - mysql_xdevapi\TableUpdate::set example</a></li>
<li><a href="mysql-xdevapi-tableupdate.where.php#example-1871" class="index">Example#1870 - mysql_xdevapi\TableUpdate::where example</a></li>
<li><a href="mysql-xdevapi-warning.construct.php#example-1872" class="index">Example#1871 - mysql_xdevapi\Warning::__construct example</a></li>
<li><a href="mysql.examples-basic.php#example-1873" class="index">Example#1872 - MySQL extension overview example</a></li>
<li><a href="function.mysql-affected-rows.php#example-1874" class="index">Example#1873 - mysql_affected_rows example</a></li>
<li><a href="function.mysql-affected-rows.php#example-1875" class="index">Example#1874 - mysql_affected_rows example using transactions</a></li>
<li><a href="function.mysql-client-encoding.php#example-1876" class="index">Example#1875 - mysql_client_encoding example</a></li>
<li><a href="function.mysql-close.php#example-1877" class="index">Example#1876 - mysql_close example</a></li>
<li><a href="function.mysql-connect.php#example-1878" class="index">Example#1877 - mysql_connect example</a></li>
<li><a href="function.mysql-connect.php#example-1879" class="index">Example#1878 - mysql_connect example using hostname:port syntax</a></li>
<li><a href="function.mysql-connect.php#example-1880" class="index">Example#1879 - mysql_connect example using  &quot;:/path/to/socket&quot; syntax</a></li>
<li><a href="function.mysql-create-db.php#example-1881" class="index">Example#1880 - mysql_create_db alternative example</a></li>
<li><a href="function.mysql-data-seek.php#example-1882" class="index">Example#1881 - mysql_data_seek example</a></li>
<li><a href="function.mysql-db-name.php#example-1883" class="index">Example#1882 - mysql_db_name example</a></li>
<li><a href="function.mysql-db-query.php#example-1884" class="index">Example#1883 - mysql_db_query alternative example</a></li>
<li><a href="function.mysql-drop-db.php#example-1885" class="index">Example#1884 - mysql_drop_db alternative example</a></li>
<li><a href="function.mysql-errno.php#example-1886" class="index">Example#1885 - mysql_errno example</a></li>
<li><a href="function.mysql-error.php#example-1887" class="index">Example#1886 - mysql_error example</a></li>
<li><a href="function.mysql-escape-string.php#example-1888" class="index">Example#1887 - mysql_escape_string example</a></li>
<li><a href="function.mysql-fetch-array.php#example-1889" class="index">Example#1888 - Query with aliased duplicate field names</a></li>
<li><a href="function.mysql-fetch-array.php#example-1890" class="index">Example#1889 - mysql_fetch_array with MYSQL_NUM</a></li>
<li><a href="function.mysql-fetch-array.php#example-1891" class="index">Example#1890 - mysql_fetch_array with MYSQL_ASSOC</a></li>
<li><a href="function.mysql-fetch-array.php#example-1892" class="index">Example#1891 - mysql_fetch_array with MYSQL_BOTH</a></li>
<li><a href="function.mysql-fetch-assoc.php#example-1893" class="index">Example#1892 - An expanded mysql_fetch_assoc example</a></li>
<li><a href="function.mysql-fetch-field.php#example-1894" class="index">Example#1893 - mysql_fetch_field example</a></li>
<li><a href="function.mysql-fetch-lengths.php#example-1895" class="index">Example#1894 - A mysql_fetch_lengths example</a></li>
<li><a href="function.mysql-fetch-object.php#example-1896" class="index">Example#1895 - mysql_fetch_object example</a></li>
<li><a href="function.mysql-fetch-object.php#example-1897" class="index">Example#1896 - mysql_fetch_object example</a></li>
<li><a href="function.mysql-fetch-row.php#example-1898" class="index">Example#1897 - Fetching one row with mysql_fetch_row</a></li>
<li><a href="function.mysql-field-flags.php#example-1899" class="index">Example#1898 - A mysql_field_flags example</a></li>
<li><a href="function.mysql-field-len.php#example-1900" class="index">Example#1899 - mysql_field_len example</a></li>
<li><a href="function.mysql-field-name.php#example-1901" class="index">Example#1900 - mysql_field_name example</a></li>
<li><a href="function.mysql-field-table.php#example-1902" class="index">Example#1901 - A mysql_field_table example</a></li>
<li><a href="function.mysql-field-type.php#example-1903" class="index">Example#1902 - mysql_field_type example</a></li>
<li><a href="function.mysql-free-result.php#example-1904" class="index">Example#1903 - A mysql_free_result example</a></li>
<li><a href="function.mysql-get-client-info.php#example-1905" class="index">Example#1904 - mysql_get_client_info example</a></li>
<li><a href="function.mysql-get-host-info.php#example-1906" class="index">Example#1905 - mysql_get_host_info example</a></li>
<li><a href="function.mysql-get-proto-info.php#example-1907" class="index">Example#1906 - mysql_get_proto_info example</a></li>
<li><a href="function.mysql-get-server-info.php#example-1908" class="index">Example#1907 - mysql_get_server_info example</a></li>
<li><a href="function.mysql-info.php#example-1909" class="index">Example#1908 - Relevant MySQL Statements</a></li>
<li><a href="function.mysql-insert-id.php#example-1910" class="index">Example#1909 - mysql_insert_id example</a></li>
<li><a href="function.mysql-list-dbs.php#example-1911" class="index">Example#1910 - mysql_list_dbs example</a></li>
<li><a href="function.mysql-list-fields.php#example-1912" class="index">Example#1911 - Alternate to deprecated mysql_list_fields</a></li>
<li><a href="function.mysql-list-processes.php#example-1913" class="index">Example#1912 - mysql_list_processes example</a></li>
<li><a href="function.mysql-list-tables.php#example-1914" class="index">Example#1913 - mysql_list_tables alternative example</a></li>
<li><a href="function.mysql-num-fields.php#example-1915" class="index">Example#1914 - A mysql_num_fields example</a></li>
<li><a href="function.mysql-num-rows.php#example-1916" class="index">Example#1915 - mysql_num_rows example</a></li>
<li><a href="function.mysql-ping.php#example-1917" class="index">Example#1916 - A mysql_ping example</a></li>
<li><a href="function.mysql-query.php#example-1918" class="index">Example#1917 - Invalid Query</a></li>
<li><a href="function.mysql-query.php#example-1919" class="index">Example#1918 - Valid Query</a></li>
<li><a href="function.mysql-real-escape-string.php#example-1920" class="index">Example#1919 - Simple mysql_real_escape_string example</a></li>
<li><a href="function.mysql-real-escape-string.php#example-1921" class="index">Example#1920 - mysql_real_escape_string requires a connection example</a></li>
<li><a href="function.mysql-real-escape-string.php#example-1922" class="index">Example#1921 - An example SQL Injection Attack</a></li>
<li><a href="function.mysql-result.php#example-1923" class="index">Example#1922 - mysql_result example</a></li>
<li><a href="function.mysql-select-db.php#example-1924" class="index">Example#1923 - mysql_select_db example</a></li>
<li><a href="function.mysql-stat.php#example-1925" class="index">Example#1924 - mysql_stat example</a></li>
<li><a href="function.mysql-stat.php#example-1926" class="index">Example#1925 - Alternative mysql_stat example</a></li>
<li><a href="function.mysql-tablename.php#example-1927" class="index">Example#1926 - mysql_tablename example</a></li>
<li><a href="function.mysql-thread-id.php#example-1928" class="index">Example#1927 - mysql_thread_id example</a></li>
<li><a href="mysqlnd.stats.php#example-1929" class="index">Example#1928 - Examples of code snippets that cause an explicit close</a></li>
<li><a href="mysqlnd.stats.php#example-1930" class="index">Example#1929 - Examples of code snippets that cause an implicit close</a></li>
<li><a href="mysqlnd.stats.php#example-1931" class="index">Example#1930 - Usage examples</a></li>
<li><a href="oci8.examples.php#example-1932" class="index">Example#1931 - Basic query</a></li>
<li><a href="oci8.examples.php#example-1933" class="index">Example#1932 - Inserting with bind variables</a></li>
<li><a href="oci8.examples.php#example-1934" class="index">Example#1933 - Binding in the WHERE clause of a query</a></li>
<li><a href="oci8.examples.php#example-1935" class="index">Example#1934 - Inserting and fetching a CLOB</a></li>
<li><a href="oci8.examples.php#example-1936" class="index">Example#1935 - Using a PL/SQL stored function</a></li>
<li><a href="oci8.examples.php#example-1937" class="index">Example#1936 - Using a PL/SQL stored procedure</a></li>
<li><a href="oci8.examples.php#example-1938" class="index">Example#1937 - Calling a PL/SQL function that returns a REF CURSOR</a></li>
<li><a href="oci8.taf.php#example-1939" class="index">Example#1938 - Registering a TAF callback</a></li>
<li><a href="oci8.dtrace.php#example-1940" class="index">Example#1939 - user_oci8_probes.d for tracing all user-level PHP OCI8 Static Probes with DTrace</a></li>
<li><a href="function.oci-bind-array-by-name.php#example-1941" class="index">Example#1940 - oci_bind_array_by_name example</a></li>
<li><a href="function.oci-bind-by-name.php#example-1942" class="index">Example#1941 - Inserting data with oci_bind_by_name</a></li>
<li><a href="function.oci-bind-by-name.php#example-1943" class="index">Example#1942 - Binding once for multiple executions</a></li>
<li><a href="function.oci-bind-by-name.php#example-1944" class="index">Example#1943 - Binding with a foreach loop</a></li>
<li><a href="function.oci-bind-by-name.php#example-1945" class="index">Example#1944 - Binding in a WHERE clause</a></li>
<li><a href="function.oci-bind-by-name.php#example-1946" class="index">Example#1945 - Binding with a LIKE clause</a></li>
<li><a href="function.oci-bind-by-name.php#example-1947" class="index">Example#1946 - Binding with REGEXP_LIKE</a></li>
<li><a href="function.oci-bind-by-name.php#example-1948" class="index">Example#1947 - Binding Multiple Values in an IN Clause</a></li>
<li><a href="function.oci-bind-by-name.php#example-1949" class="index">Example#1948 - Binding a ROWID returned by a query</a></li>
<li><a href="function.oci-bind-by-name.php#example-1950" class="index">Example#1949 - Binding a ROWID on INSERT</a></li>
<li><a href="function.oci-bind-by-name.php#example-1951" class="index">Example#1950 - Binding for a PL/SQL stored function</a></li>
<li><a href="function.oci-bind-by-name.php#example-1952" class="index">Example#1951 - Binding parameters for a PL/SQL stored procedure</a></li>
<li><a href="function.oci-bind-by-name.php#example-1953" class="index">Example#1952 - Binding a CLOB column</a></li>
<li><a href="function.oci-bind-by-name.php#example-1954" class="index">Example#1953 - Binding a PL/SQL BOOLEAN</a></li>
<li><a href="function.oci-client-version.php#example-1955" class="index">Example#1954 - oci_client_version example</a></li>
<li><a href="function.oci-close.php#example-1956" class="index">Example#1955 - Closing a connection</a></li>
<li><a href="function.oci-close.php#example-1957" class="index">Example#1956 - Database connections are not closed until all references are closed</a></li>
<li><a href="function.oci-close.php#example-1958" class="index">Example#1957 - Closing a connection opened more than once</a></li>
<li><a href="function.oci-close.php#example-1959" class="index">Example#1958 - Connections are closed when variables go out of scope</a></li>
<li><a href="function.oci-commit.php#example-1960" class="index">Example#1959 - oci_commit example</a></li>
<li><a href="function.oci-connect.php#example-1961" class="index">Example#1960 - Basic oci_connect using Easy Connect syntax</a></li>
<li><a href="function.oci-connect.php#example-1962" class="index">Example#1961 - Basic oci_connect using a Network Connect name</a></li>
<li><a href="function.oci-connect.php#example-1963" class="index">Example#1962 - oci_connect with an explicit character set</a></li>
<li><a href="function.oci-connect.php#example-1964" class="index">Example#1963 - Using multiple calls to oci_connect</a></li>
<li><a href="function.oci-define-by-name.php#example-1965" class="index">Example#1964 - oci_define_by_name example</a></li>
<li><a href="function.oci-define-by-name.php#example-1966" class="index">Example#1965 - oci_define_by_name with case sensitive column names</a></li>
<li><a href="function.oci-define-by-name.php#example-1967" class="index">Example#1966 - oci_define_by_name with LOB columns</a></li>
<li><a href="function.oci-define-by-name.php#example-1968" class="index">Example#1967 - oci_define_by_name with an explicit type</a></li>
<li><a href="function.oci-error.php#example-1969" class="index">Example#1968 - Displaying the Oracle error message after a connection error</a></li>
<li><a href="function.oci-error.php#example-1970" class="index">Example#1969 - Displaying the Oracle error message after a parsing error</a></li>
<li><a href="function.oci-error.php#example-1971" class="index">Example#1970 - Displaying the Oracle error message, the problematic statement,
     and the position of the problem of an execution error</a></li>
<li><a href="function.oci-execute.php#example-1972" class="index">Example#1971 - oci_execute for queries</a></li>
<li><a href="function.oci-execute.php#example-1973" class="index">Example#1972 - oci_execute without specifying a mode example</a></li>
<li><a href="function.oci-execute.php#example-1974" class="index">Example#1973 - oci_execute with OCI_NO_AUTO_COMMIT example</a></li>
<li><a href="function.oci-execute.php#example-1975" class="index">Example#1974 - oci_execute with different commit modes example</a></li>
<li><a href="function.oci-execute.php#example-1976" class="index">Example#1975 - oci_execute with
     OCI_DESCRIBE_ONLY example</a></li>
<li><a href="function.oci-fetch.php#example-1977" class="index">Example#1976 - oci_fetch with defined variables</a></li>
<li><a href="function.oci-fetch.php#example-1978" class="index">Example#1977 - oci_fetch with oci_result</a></li>
<li><a href="function.oci-fetch-all.php#example-1979" class="index">Example#1978 - oci_fetch_all example</a></li>
<li><a href="function.oci-fetch-all.php#example-1980" class="index">Example#1979 - oci_fetch_all example with OCI_FETCHSTATEMENT_BY_ROW</a></li>
<li><a href="function.oci-fetch-all.php#example-1981" class="index">Example#1980 - oci_fetch_all with OCI_NUM</a></li>
<li><a href="function.oci-fetch-array.php#example-1982" class="index">Example#1981 - oci_fetch_array with OCI_BOTH</a></li>
<li><a href="function.oci-fetch-array.php#example-1983" class="index">Example#1982 - oci_fetch_array with OCI_NUM</a></li>
<li><a href="function.oci-fetch-array.php#example-1984" class="index">Example#1983 - oci_fetch_array with OCI_ASSOC</a></li>
<li><a href="function.oci-fetch-array.php#example-1985" class="index">Example#1984 - oci_fetch_array with OCI_RETURN_NULLS</a></li>
<li><a href="function.oci-fetch-array.php#example-1986" class="index">Example#1985 - oci_fetch_array with OCI_RETURN_LOBS</a></li>
<li><a href="function.oci-fetch-array.php#example-1987" class="index">Example#1986 - oci_fetch_array with case sensitive column names</a></li>
<li><a href="function.oci-fetch-array.php#example-1988" class="index">Example#1987 - oci_fetch_array with columns having duplicate names</a></li>
<li><a href="function.oci-fetch-array.php#example-1989" class="index">Example#1988 - oci_fetch_array with DATE columns</a></li>
<li><a href="function.oci-fetch-array.php#example-1990" class="index">Example#1989 - oci_fetch_array with REF CURSOR</a></li>
<li><a href="function.oci-fetch-array.php#example-1991" class="index">Example#1990 - Pagination with oci_fetch_array using a LIMIT-like query</a></li>
<li><a href="function.oci-fetch-array.php#example-1992" class="index">Example#1991 - oci_fetch_array with Oracle Database Implicit Result Sets</a></li>
<li><a href="function.oci-fetch-assoc.php#example-1993" class="index">Example#1992 - oci_fetch_assoc Example</a></li>
<li><a href="function.oci-fetch-object.php#example-1994" class="index">Example#1993 - oci_fetch_object example</a></li>
<li><a href="function.oci-fetch-object.php#example-1995" class="index">Example#1994 - oci_fetch_object with case sensitive column names</a></li>
<li><a href="function.oci-fetch-object.php#example-1996" class="index">Example#1995 - oci_fetch_object with LOBs</a></li>
<li><a href="function.oci-fetch-row.php#example-1997" class="index">Example#1996 - oci_fetch_row Example</a></li>
<li><a href="function.oci-field-is-null.php#example-1998" class="index">Example#1997 - oci_field_name example</a></li>
<li><a href="function.oci-field-name.php#example-1999" class="index">Example#1998 - oci_field_name example</a></li>
<li><a href="function.oci-field-precision.php#example-2000" class="index">Example#1999 - oci_field_precision Example</a></li>
<li><a href="function.oci-field-scale.php#example-2001" class="index">Example#2000 - oci_field_scale Example</a></li>
<li><a href="function.oci-field-size.php#example-2002" class="index">Example#2001 - oci_field_size example</a></li>
<li><a href="function.oci-field-type.php#example-2003" class="index">Example#2002 - oci_field_type example</a></li>
<li><a href="function.oci-field-type-raw.php#example-2004" class="index">Example#2003 - oci_field_type_raw Example</a></li>
<li><a href="function.oci-get-implicit-resultset.php#example-2005" class="index">Example#2004 - Fetching Implicit Result Sets in a loop</a></li>
<li><a href="function.oci-get-implicit-resultset.php#example-2006" class="index">Example#2005 - Getting child statement handles individually</a></li>
<li><a href="function.oci-get-implicit-resultset.php#example-2007" class="index">Example#2006 - Explicitly setting the Prefetch Count</a></li>
<li><a href="function.oci-get-implicit-resultset.php#example-2008" class="index">Example#2007 - Implicit Result Set example without using oci_get_implicit_resultset</a></li>
<li><a href="function.oci-new-connect.php#example-2009" class="index">Example#2008 - oci_new_connect example</a></li>
<li><a href="function.oci-new-cursor.php#example-2010" class="index">Example#2009 - Binding a REF CURSOR in an Oracle stored procedure call</a></li>
<li><a href="function.oci-new-descriptor.php#example-2011" class="index">Example#2010 - oci_new_descriptor example</a></li>
<li><a href="function.oci-new-descriptor.php#example-2012" class="index">Example#2011 - oci_new_descriptor example</a></li>
<li><a href="function.oci-num-fields.php#example-2013" class="index">Example#2012 - oci_num_fields example</a></li>
<li><a href="function.oci-num-rows.php#example-2014" class="index">Example#2013 - oci_num_rows example</a></li>
<li><a href="function.oci-parse.php#example-2015" class="index">Example#2014 - oci_parse example for SQL statements</a></li>
<li><a href="function.oci-parse.php#example-2016" class="index">Example#2015 - oci_parse example for PL/SQL statements</a></li>
<li><a href="function.oci-password-change.php#example-2017" class="index">Example#2016 - oci_password_change example changing the password of an already connected user</a></li>
<li><a href="function.oci-password-change.php#example-2018" class="index">Example#2017 - oci_password_change example of connecting and changing the password in one step</a></li>
<li><a href="function.oci-pconnect.php#example-2019" class="index">Example#2018 - Basic oci_pconnect Example using Easy Connect syntax</a></li>
<li><a href="function.oci-result.php#example-2020" class="index">Example#2019 - oci_fetch with oci_result</a></li>
<li><a href="function.oci-rollback.php#example-2021" class="index">Example#2020 - oci_rollback example</a></li>
<li><a href="function.oci-rollback.php#example-2022" class="index">Example#2021 - Rolling back to a SAVEPOINT example</a></li>
<li><a href="function.oci-server-version.php#example-2023" class="index">Example#2022 - oci_server_version example</a></li>
<li><a href="function.oci-set-action.php#example-2024" class="index">Example#2023 - Setting the action</a></li>
<li><a href="function.oci-set-call-timout.php#example-2025" class="index">Example#2024 - Setting the timeout</a></li>
<li><a href="function.oci-set-client-identifier.php#example-2026" class="index">Example#2025 - Setting the client identifier to the application user</a></li>
<li><a href="function.oci-set-client-info.php#example-2027" class="index">Example#2026 - Setting the client information</a></li>
<li><a href="function.oci-set-db-operation.php#example-2028" class="index">Example#2027 - Setting the DBOP</a></li>
<li><a href="function.oci-set-edition.php#example-2029" class="index">Example#2028 - Two scripts can use different versions of myfunc() at the same time</a></li>
<li><a href="function.oci-set-module-name.php#example-2030" class="index">Example#2029 - Setting the module name</a></li>
<li><a href="function.oci-set-prefetch.php#example-2031" class="index">Example#2030 - Changing the default prefetch value for a query</a></li>
<li><a href="function.oci-set-prefetch.php#example-2032" class="index">Example#2031 - Changing the default prefetch for a REF CURSOR fetch</a></li>
<li><a href="function.oci-set-prefetch.php#example-2033" class="index">Example#2032 - Setting the prefetch value when passing a REF CURSOR back to Oracle</a></li>
<li><a href="function.oci-set-prefetch-lob.php#example-2034" class="index">Example#2033 - Changing the LOB prefetch value for a query</a></li>
<li><a href="function.oci-statement-type.php#example-2035" class="index">Example#2034 - oci_statement_type example</a></li>
<li><a href="pgsql.examples-basic.php#example-2036" class="index">Example#2035 - PostgreSQL extension overview example</a></li>
<li><a href="pgsql.examples-queries.php#example-2037" class="index">Example#2036 - PostgreSQL user defined functions example</a></li>
<li><a href="function.pg-affected-rows.php#example-2038" class="index">Example#2037 - pg_affected_rows example</a></li>
<li><a href="function.pg-cancel-query.php#example-2039" class="index">Example#2038 - pg_cancel_query example</a></li>
<li><a href="function.pg-client-encoding.php#example-2040" class="index">Example#2039 - pg_client_encoding example</a></li>
<li><a href="function.pg-close.php#example-2041" class="index">Example#2040 - pg_close example</a></li>
<li><a href="function.pg-connect.php#example-2042" class="index">Example#2041 - Using pg_connect</a></li>
<li><a href="function.pg-connection-busy.php#example-2043" class="index">Example#2042 - pg_connection_busy example</a></li>
<li><a href="function.pg-connection-reset.php#example-2044" class="index">Example#2043 - pg_connection_reset example</a></li>
<li><a href="function.pg-connection-status.php#example-2045" class="index">Example#2044 - pg_connection_status example</a></li>
<li><a href="function.pg-convert.php#example-2046" class="index">Example#2045 - pg_convert example</a></li>
<li><a href="function.pg-copy-from.php#example-2047" class="index">Example#2046 - pg_copy_from example</a></li>
<li><a href="function.pg-copy-to.php#example-2048" class="index">Example#2047 - pg_copy_to example</a></li>
<li><a href="function.pg-dbname.php#example-2049" class="index">Example#2048 - pg_dbname example</a></li>
<li><a href="function.pg-delete.php#example-2050" class="index">Example#2049 - pg_delete example</a></li>
<li><a href="function.pg-end-copy.php#example-2051" class="index">Example#2050 - pg_end_copy example</a></li>
<li><a href="function.pg-escape-bytea.php#example-2052" class="index">Example#2051 - pg_escape_bytea example</a></li>
<li><a href="function.pg-escape-identifier.php#example-2053" class="index">Example#2052 - pg_escape_identifier example</a></li>
<li><a href="function.pg-escape-literal.php#example-2054" class="index">Example#2053 - pg_escape_literal example</a></li>
<li><a href="function.pg-escape-string.php#example-2055" class="index">Example#2054 - pg_escape_string example</a></li>
<li><a href="function.pg-execute.php#example-2056" class="index">Example#2055 - Using pg_execute</a></li>
<li><a href="function.pg-fetch-all.php#example-2057" class="index">Example#2056 - PostgreSQL fetch all</a></li>
<li><a href="function.pg-fetch-all-columns.php#example-2058" class="index">Example#2057 - pg_fetch_all_columns example</a></li>
<li><a href="function.pg-fetch-array.php#example-2059" class="index">Example#2058 - pg_fetch_array example</a></li>
<li><a href="function.pg-fetch-assoc.php#example-2060" class="index">Example#2059 - pg_fetch_assoc example</a></li>
<li><a href="function.pg-fetch-object.php#example-2061" class="index">Example#2060 - pg_fetch_object example</a></li>
<li><a href="function.pg-fetch-result.php#example-2062" class="index">Example#2061 - pg_fetch_result example</a></li>
<li><a href="function.pg-fetch-row.php#example-2063" class="index">Example#2062 - pg_fetch_row example</a></li>
<li><a href="function.pg-field-is-null.php#example-2064" class="index">Example#2063 - pg_field_is_null example</a></li>
<li><a href="function.pg-field-name.php#example-2065" class="index">Example#2064 - Getting information about fields</a></li>
<li><a href="function.pg-field-num.php#example-2066" class="index">Example#2065 - Getting information about fields</a></li>
<li><a href="function.pg-field-prtlen.php#example-2067" class="index">Example#2066 - Getting information about fields</a></li>
<li><a href="function.pg-field-size.php#example-2068" class="index">Example#2067 - Getting information about fields</a></li>
<li><a href="function.pg-field-table.php#example-2069" class="index">Example#2068 - Getting table information about a field</a></li>
<li><a href="function.pg-field-type.php#example-2070" class="index">Example#2069 - Getting information about fields</a></li>
<li><a href="function.pg-field-type-oid.php#example-2071" class="index">Example#2070 - Getting information about fields</a></li>
<li><a href="function.pg-free-result.php#example-2072" class="index">Example#2071 - pg_free_result example</a></li>
<li><a href="function.pg-get-notify.php#example-2073" class="index">Example#2072 - PostgreSQL NOTIFY message</a></li>
<li><a href="function.pg-get-pid.php#example-2074" class="index">Example#2073 - PostgreSQL backend PID</a></li>
<li><a href="function.pg-get-result.php#example-2075" class="index">Example#2074 - pg_get_result example</a></li>
<li><a href="function.pg-host.php#example-2076" class="index">Example#2075 - pg_host example</a></li>
<li><a href="function.pg-insert.php#example-2077" class="index">Example#2076 - pg_insert example</a></li>
<li><a href="function.pg-last-error.php#example-2078" class="index">Example#2077 - pg_last_error example</a></li>
<li><a href="function.pg-last-notice.php#example-2079" class="index">Example#2078 - pg_last_notice example</a></li>
<li><a href="function.pg-last-oid.php#example-2080" class="index">Example#2079 - pg_last_oid example</a></li>
<li><a href="function.pg-lo-close.php#example-2081" class="index">Example#2080 - pg_lo_close example</a></li>
<li><a href="function.pg-lo-create.php#example-2082" class="index">Example#2081 - pg_lo_create example</a></li>
<li><a href="function.pg-lo-export.php#example-2083" class="index">Example#2082 - pg_lo_export example</a></li>
<li><a href="function.pg-lo-import.php#example-2084" class="index">Example#2083 - pg_lo_import example</a></li>
<li><a href="function.pg-lo-open.php#example-2085" class="index">Example#2084 - pg_lo_open example</a></li>
<li><a href="function.pg-lo-read.php#example-2086" class="index">Example#2085 - pg_lo_read example</a></li>
<li><a href="function.pg-lo-read-all.php#example-2087" class="index">Example#2086 - pg_lo_read_all example</a></li>
<li><a href="function.pg-lo-seek.php#example-2088" class="index">Example#2087 - pg_lo_seek example</a></li>
<li><a href="function.pg-lo-tell.php#example-2089" class="index">Example#2088 - pg_lo_tell example</a></li>
<li><a href="function.pg-lo-truncate.php#example-2090" class="index">Example#2089 - pg_lo_truncate example</a></li>
<li><a href="function.pg-lo-unlink.php#example-2091" class="index">Example#2090 - pg_lo_unlink example</a></li>
<li><a href="function.pg-lo-write.php#example-2092" class="index">Example#2091 - pg_lo_write example</a></li>
<li><a href="function.pg-meta-data.php#example-2093" class="index">Example#2092 - Getting table metadata</a></li>
<li><a href="function.pg-num-fields.php#example-2094" class="index">Example#2093 - pg_num_fields example</a></li>
<li><a href="function.pg-num-rows.php#example-2095" class="index">Example#2094 - pg_num_rows example</a></li>
<li><a href="function.pg-options.php#example-2096" class="index">Example#2095 - pg_options example</a></li>
<li><a href="function.pg-parameter-status.php#example-2097" class="index">Example#2096 - pg_parameter_status example</a></li>
<li><a href="function.pg-pconnect.php#example-2098" class="index">Example#2097 - Using pg_pconnect</a></li>
<li><a href="function.pg-ping.php#example-2099" class="index">Example#2098 - pg_ping example</a></li>
<li><a href="function.pg-port.php#example-2100" class="index">Example#2099 - pg_port example</a></li>
<li><a href="function.pg-prepare.php#example-2101" class="index">Example#2100 - Using pg_prepare</a></li>
<li><a href="function.pg-put-line.php#example-2102" class="index">Example#2101 - pg_put_line example</a></li>
<li><a href="function.pg-query.php#example-2103" class="index">Example#2102 - pg_query example</a></li>
<li><a href="function.pg-query.php#example-2104" class="index">Example#2103 - Using pg_query with multiple statements</a></li>
<li><a href="function.pg-query-params.php#example-2105" class="index">Example#2104 - Using pg_query_params</a></li>
<li><a href="function.pg-result-error.php#example-2106" class="index">Example#2105 - pg_result_error example</a></li>
<li><a href="function.pg-result-error-field.php#example-2107" class="index">Example#2106 - pg_result_error_field example</a></li>
<li><a href="function.pg-result-memory-size.php#example-2108" class="index">Example#2107 - pg_result_memory_size example</a></li>
<li><a href="function.pg-result-seek.php#example-2109" class="index">Example#2108 - pg_result_seek example</a></li>
<li><a href="function.pg-result-status.php#example-2110" class="index">Example#2109 - pg_result_status example</a></li>
<li><a href="function.pg-select.php#example-2111" class="index">Example#2110 - pg_select example</a></li>
<li><a href="function.pg-send-execute.php#example-2112" class="index">Example#2111 - Using pg_send_execute</a></li>
<li><a href="function.pg-send-prepare.php#example-2113" class="index">Example#2112 - Using pg_send_prepare</a></li>
<li><a href="function.pg-send-query.php#example-2114" class="index">Example#2113 - pg_send_query example</a></li>
<li><a href="function.pg-send-query-params.php#example-2115" class="index">Example#2114 - Using pg_send_query_params</a></li>
<li><a href="function.pg-set-chunked-rows-size.php#example-2116" class="index">Example#2115 - pg_result_memory_size example</a></li>
<li><a href="function.pg-set-client-encoding.php#example-2117" class="index">Example#2116 - pg_set_client_encoding example</a></li>
<li><a href="function.pg-set-error-context-visibility.php#function.pg-set-error-context-visibility.example.basic" class="index">Example#2117 - pg_set_error_context_visibility example</a></li>
<li><a href="function.pg-set-error-verbosity.php#example-2119" class="index">Example#2118 - pg_set_error_verbosity example</a></li>
<li><a href="function.pg-trace.php#example-2120" class="index">Example#2119 - pg_trace example</a></li>
<li><a href="function.pg-transaction-status.php#example-2121" class="index">Example#2120 - pg_transaction_status example</a></li>
<li><a href="function.pg-tty.php#example-2122" class="index">Example#2121 - pg_tty example</a></li>
<li><a href="function.pg-unescape-bytea.php#example-2123" class="index">Example#2122 - pg_unescape_bytea example</a></li>
<li><a href="function.pg-untrace.php#example-2124" class="index">Example#2123 - pg_untrace example</a></li>
<li><a href="function.pg-update.php#example-2125" class="index">Example#2124 - pg_update example</a></li>
<li><a href="function.pg-version.php#example-2126" class="index">Example#2125 - pg_version example</a></li>
<li><a href="sqlite3.backup.php#sqlite3.backup.example.basic" class="index">Example#2126 - Backup an existing database</a></li>
<li><a href="sqlite3.changes.php#example-2128" class="index">Example#2127 - SQLite3::changes example</a></li>
<li><a href="sqlite3.close.php#example-2129" class="index">Example#2128 - SQLite3::close example</a></li>
<li><a href="sqlite3.construct.php#example-2130" class="index">Example#2129 - SQLite3::__construct example</a></li>
<li><a href="sqlite3.createaggregate.php#example-2131" class="index">Example#2130 - max_length aggregation function example</a></li>
<li><a href="sqlite3.createcollation.php#example-2132" class="index">Example#2131 - SQLite3::createCollation example</a></li>
<li><a href="sqlite3.createfunction.php#example-2133" class="index">Example#2132 - SQLite3::createFunction example</a></li>
<li><a href="sqlite3.enableexceptions.php#sqlite3.enableexceptions.example.basic" class="index">Example#2133 - SQLite3::enableExceptions example</a></li>
<li><a href="sqlite3.exec.php#example-2135" class="index">Example#2134 - SQLite3::exec example</a></li>
<li><a href="sqlite3.loadextension.php#example-2136" class="index">Example#2135 - SQLite3::loadExtension example</a></li>
<li><a href="sqlite3.open.php#example-2137" class="index">Example#2136 - SQLite3::open example</a></li>
<li><a href="sqlite3.openblob.php#example-2138" class="index">Example#2137 - SQLite3::openBlob example</a></li>
<li><a href="sqlite3.openblob.php#example-2139" class="index">Example#2138 - Incrementally writing a BLOB</a></li>
<li><a href="sqlite3.prepare.php#example-2140" class="index">Example#2139 - SQLite3::prepare example</a></li>
<li><a href="sqlite3.query.php#example-2141" class="index">Example#2140 - SQLite3::query example</a></li>
<li><a href="sqlite3.querysingle.php#example-2142" class="index">Example#2141 - SQLite3::querySingle example</a></li>
<li><a href="sqlite3.setauthorizer.php#example-2143" class="index">Example#2142 - SQLite3::setAuthorizer example</a></li>
<li><a href="sqlite3.version.php#example-2144" class="index">Example#2143 - SQLite3::version example</a></li>
<li><a href="sqlite3stmt.bindparam.php#example-2145" class="index">Example#2144 - SQLite3Stmt::bindParam Usage</a></li>
<li><a href="sqlite3stmt.bindvalue.php#example-2146" class="index">Example#2145 - SQLite3Stmt::bindValue example</a></li>
<li><a href="sqlite3stmt.getsql.php#sqlite3stmt.getsql.example.expanded" class="index">Example#2146 - Inspecting the expanded SQL</a></li>
<li><a href="function.sqlsrv-begin-transaction.php#example-2148" class="index">Example#2147 - sqlsrv_begin_transaction example</a></li>
<li><a href="function.sqlsrv-cancel.php#example-2149" class="index">Example#2148 - sqlsrv_cancel example</a></li>
<li><a href="function.sqlsrv-client-info.php#example-2150" class="index">Example#2149 - sqlsrv_client_info example</a></li>
<li><a href="function.sqlsrv-close.php#example-2151" class="index">Example#2150 - sqlsrv_close example</a></li>
<li><a href="function.sqlsrv-commit.php#example-2152" class="index">Example#2151 - sqlsrv_commit example</a></li>
<li><a href="function.sqlsrv-connect.php#example-2153" class="index">Example#2152 - Connect using Windows Authentication.</a></li>
<li><a href="function.sqlsrv-connect.php#example-2154" class="index">Example#2153 - Connect by specifying a user name and password.</a></li>
<li><a href="function.sqlsrv-connect.php#example-2155" class="index">Example#2154 - Connect on a specified port.</a></li>
<li><a href="function.sqlsrv-errors.php#example-2156" class="index">Example#2155 - functionname example</a></li>
<li><a href="function.sqlsrv-execute.php#example-2157" class="index">Example#2156 - sqlsrv_execute example</a></li>
<li><a href="function.sqlsrv-fetch.php#example-2158" class="index">Example#2157 - sqlsrv_fetch example</a></li>
<li><a href="function.sqlsrv-fetch-array.php#example-2159" class="index">Example#2158 - Retrieving an associative array.</a></li>
<li><a href="function.sqlsrv-fetch-array.php#example-2160" class="index">Example#2159 - Retrieving a numeric array.</a></li>
<li><a href="function.sqlsrv-fetch-object.php#example-2161" class="index">Example#2160 - sqlsrv_fetch_object example</a></li>
<li><a href="function.sqlsrv-field-metadata.php#example-2162" class="index">Example#2161 - sqlsrv_field_metadata example</a></li>
<li><a href="function.sqlsrv-free-stmt.php#example-2163" class="index">Example#2162 - sqlsrv_free_stmt example</a></li>
<li><a href="function.sqlsrv-get-field.php#example-2164" class="index">Example#2163 - sqlsrv_get_field example</a></li>
<li><a href="function.sqlsrv-has-rows.php#example-2165" class="index">Example#2164 - sqlsrv_has_rows example</a></li>
<li><a href="function.sqlsrv-next-result.php#example-2166" class="index">Example#2165 - sqlsrv_next_result example</a></li>
<li><a href="function.sqlsrv-num-fields.php#example-2167" class="index">Example#2166 - sqlsrv_num_fields example</a></li>
<li><a href="function.sqlsrv-num-rows.php#example-2168" class="index">Example#2167 - sqlsrv_num_rows example</a></li>
<li><a href="function.sqlsrv-prepare.php#example-2169" class="index">Example#2168 - sqlsrv_prepare example</a></li>
<li><a href="function.sqlsrv-query.php#example-2170" class="index">Example#2169 - sqlsrv_query example</a></li>
<li><a href="function.sqlsrv-rollback.php#example-2171" class="index">Example#2170 - sqlsrv_rollback example</a></li>
<li><a href="function.sqlsrv-rows-affected.php#example-2172" class="index">Example#2171 - sqlsrv_rows_affected example</a></li>
<li><a href="function.sqlsrv-send-stream-data.php#example-2173" class="index">Example#2172 - sqlsrv_send_stream_data example</a></li>
<li><a href="function.sqlsrv-server-info.php#example-2174" class="index">Example#2173 - sqlsrv_server_info example</a></li>
<li><a href="function.cal-days-in-month.php#example-2175" class="index">Example#2174 - cal_days_in_month example</a></li>
<li><a href="function.cal-from-jd.php#example-2176" class="index">Example#2175 - cal_from_jd example</a></li>
<li><a href="function.cal-info.php#example-2177" class="index">Example#2176 - cal_info example</a></li>
<li><a href="function.easter-date.php#example-2178" class="index">Example#2177 - easter_date example</a></li>
<li><a href="function.easter-date.php#example-2179" class="index">Example#2178 - Using easter_date with DateTime</a></li>
<li><a href="function.easter-days.php#example-2180" class="index">Example#2179 - easter_days example</a></li>
<li><a href="function.gregoriantojd.php#example-2181" class="index">Example#2180 - Calendar functions</a></li>
<li><a href="function.gregoriantojd.php#example-2182" class="index">Example#2181 - Overflow behavior</a></li>
<li><a href="function.jdtojewish.php#example-2183" class="index">Example#2182 - jdtojewish Example</a></li>
<li><a href="datetime.examples-arithmetic.php#example-2184" class="index">Example#2183 - DateTimeImmutable::add/sub add intervals which cover elapsed time</a></li>
<li><a href="datetime.examples-arithmetic.php#example-2185" class="index">Example#2184 - DateTimeImmutable::modify and strtotime increment or decrement individual component values</a></li>
<li><a href="datetime.examples-arithmetic.php#example-2186" class="index">Example#2185 - Adding or subtracting times can over- or underflow dates</a></li>
<li><a href="datetime.createfromimmutable.php#example-2187" class="index">Example#2186 - Creating a mutable date time object</a></li>
<li><a href="datetime.createfrominterface.php#example-2188" class="index">Example#2187 - Creating a mutable date time object</a></li>
<li><a href="datetime.modify.php#example-2189" class="index">Example#2188 - DateTime::modify example</a></li>
<li><a href="datetime.modify.php#example-2190" class="index">Example#2189 - Beware when adding or subtracting months</a></li>
<li><a href="datetime.modify.php#example-2191" class="index">Example#2190 - All formats of Date and Time are supported</a></li>
<li><a href="datetime.settimezone.php#example-2192" class="index">Example#2191 - DateTime::setTimeZone example</a></li>
<li><a href="datetimeimmutable.add.php#example-2193" class="index">Example#2192 - DateTimeImmutable::add example</a></li>
<li><a href="datetimeimmutable.add.php#example-2194" class="index">Example#2193 - Further DateTimeImmutable::add examples</a></li>
<li><a href="datetimeimmutable.add.php#example-2195" class="index">Example#2194 - Beware when adding months</a></li>
<li><a href="datetimeimmutable.construct.php#example-2196" class="index">Example#2195 - DateTimeImmutable::__construct example</a></li>
<li><a href="datetimeimmutable.construct.php#example-2197" class="index">Example#2196 - Intricacies of DateTimeImmutable::__construct</a></li>
<li><a href="datetimeimmutable.construct.php#example-2198" class="index">Example#2197 - Changing the associated timezone</a></li>
<li><a href="datetimeimmutable.construct.php#example-2199" class="index">Example#2198 - Using a relative date/time string</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2200" class="index">Example#2199 - DateTimeImmutable::createFromFormat example</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2201" class="index">Example#2200 - Using predefined format constants with DateTimeImmutable::createFromFormat</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2202" class="index">Example#2201 - Intricacies of DateTimeImmutable::createFromFormat</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2203" class="index">Example#2202 - Format string with literal characters</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2204" class="index">Example#2203 - Overflow behaviour</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2205" class="index">Example#2204 - Overflowing day name behaviour</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2206" class="index">Example#2205 - Detecting overflown dates</a></li>
<li><a href="datetimeimmutable.createfromformat.php#example-2207" class="index">Example#2206 - Greedy parsing behaviour</a></li>
<li><a href="datetimeimmutable.createfrominterface.php#example-2208" class="index">Example#2207 - Creating an immutable date time object</a></li>
<li><a href="datetimeimmutable.createfrommutable.php#example-2209" class="index">Example#2208 - Creating an immutable date time object</a></li>
<li><a href="datetimeimmutable.getlasterrors.php#example-2210" class="index">Example#2209 - DateTimeImmutable::getLastErrors example</a></li>
<li><a href="datetimeimmutable.modify.php#example-2211" class="index">Example#2210 - DateTimeImmutable::modify example</a></li>
<li><a href="datetimeimmutable.modify.php#example-2212" class="index">Example#2211 - Beware when adding or subtracting months</a></li>
<li><a href="datetimeimmutable.setdate.php#example-2213" class="index">Example#2212 - DateTimeImmutable::setDate example</a></li>
<li><a href="datetimeimmutable.setdate.php#example-2214" class="index">Example#2213 - Values exceeding ranges are added to their parent values</a></li>
<li><a href="datetimeimmutable.setisodate.php#example-2215" class="index">Example#2214 - DateTimeImmutable::setISODate example</a></li>
<li><a href="datetimeimmutable.setisodate.php#example-2216" class="index">Example#2215 - Values exceeding ranges are added to their parent values</a></li>
<li><a href="datetimeimmutable.setisodate.php#example-2217" class="index">Example#2216 - Finding the month a week is in</a></li>
<li><a href="datetimeimmutable.settime.php#example-2218" class="index">Example#2217 - DateTimeImmutable::setTime example</a></li>
<li><a href="datetimeimmutable.settime.php#example-2219" class="index">Example#2218 - Values exceeding ranges are added to their parent values</a></li>
<li><a href="datetimeimmutable.settimestamp.php#example-2220" class="index">Example#2219 - DateTimeImmutable::setTimestamp example</a></li>
<li><a href="datetimeimmutable.settimezone.php#example-2221" class="index">Example#2220 - DateTimeImmutable::setTimeZone example</a></li>
<li><a href="datetimeimmutable.sub.php#example-2222" class="index">Example#2221 - DateTimeImmutable::sub example</a></li>
<li><a href="datetimeimmutable.sub.php#example-2223" class="index">Example#2222 - Further DateTimeImmutable::sub examples</a></li>
<li><a href="datetimeimmutable.sub.php#example-2224" class="index">Example#2223 - Beware when subtracting months</a></li>
<li><a href="datetime.diff.php#example-2225" class="index">Example#2224 - DateTimeImmutable::diff example</a></li>
<li><a href="datetime.diff.php#example-2226" class="index">Example#2225 - DateTimeInterface::diff during DST
   changeover</a></li>
<li><a href="datetime.diff.php#example-2227" class="index">Example#2226 - DateTimeInterface::diff range</a></li>
<li><a href="datetime.diff.php#example-2228" class="index">Example#2227 - DateTime object comparison</a></li>
<li><a href="datetime.format.php#example-2229" class="index">Example#2228 - DateTimeInterface::format example</a></li>
<li><a href="datetime.format.php#example-2230" class="index">Example#2229 - More examples</a></li>
<li><a href="datetime.format.php#example-2231" class="index">Example#2230 - Escaping characters while formatting</a></li>
<li><a href="datetime.getoffset.php#example-2232" class="index">Example#2231 - DateTime::getOffset example</a></li>
<li><a href="datetime.gettimestamp.php#example-2233" class="index">Example#2232 - DateTime::getTimestamp example</a></li>
<li><a href="datetime.gettimestamp.php#example-2234" class="index">Example#2233 - Retrieving timestamp with milli and microsecond resolution</a></li>
<li><a href="datetime.gettimezone.php#example-2235" class="index">Example#2234 - DateTime::getTimezone example</a></li>
<li><a href="datetime.serialize.php#example-2236" class="index">Example#2235 - DateTime::serialize example</a></li>
<li><a href="datetime.unserialize.php#example-2237" class="index">Example#2236 - DateTime::unserialize example</a></li>
<li><a href="datetimezone.construct.php#example-2238" class="index">Example#2237 - Creating and attaching DateTimeZone to a DateTimeImmutable</a></li>
<li><a href="datetimezone.construct.php#example-2239" class="index">Example#2238 - Catching errors when instantiating DateTimeZone</a></li>
<li><a href="datetimezone.getlocation.php#example-2240" class="index">Example#2239 - DateTimeZone::getLocation example</a></li>
<li><a href="datetimezone.getoffset.php#example-2241" class="index">Example#2240 - DateTimeZone::getOffset examples</a></li>
<li><a href="datetimezone.gettransitions.php#example-2242" class="index">Example#2241 - A timezone_transitions_get example</a></li>
<li><a href="datetimezone.gettransitions.php#example-2243" class="index">Example#2242 - A timezone_transitions_get example with
    timestampBegin set</a></li>
<li><a href="datetimezone.listabbreviations.php#example-2244" class="index">Example#2243 - A timezone_abbreviations_list example</a></li>
<li><a href="datetimezone.listidentifiers.php#example-2245" class="index">Example#2244 - A DateTimeZone::listIdentifiers example</a></li>
<li><a href="datetimezone.listidentifiers.php#example-2246" class="index">Example#2245 - Listing identifiers for a specific region</a></li>
<li><a href="datetimezone.listidentifiers.php#example-2247" class="index">Example#2246 - Listing identifiers for multiple regions</a></li>
<li><a href="datetimezone.listidentifiers.php#example-2248" class="index">Example#2247 - Listing identifiers for a single country</a></li>
<li><a href="dateinterval.construct.php#example-2249" class="index">Example#2248 - Constructing and using DateInterval objects</a></li>
<li><a href="dateinterval.construct.php#example-2250" class="index">Example#2249 - DateInterval example</a></li>
<li><a href="dateinterval.createfromdatestring.php#example-2251" class="index">Example#2250 - Parsing valid date intervals</a></li>
<li><a href="dateinterval.createfromdatestring.php#example-2252" class="index">Example#2251 - Parsing combinations and negative intervals</a></li>
<li><a href="dateinterval.createfromdatestring.php#example-2253" class="index">Example#2252 - Parsing special relative date intervals</a></li>
<li><a href="dateinterval.format.php#example-2254" class="index">Example#2253 - DateInterval example</a></li>
<li><a href="dateinterval.format.php#example-2255" class="index">Example#2254 - DateInterval and carry over points</a></li>
<li><a href="dateinterval.format.php#example-2256" class="index">Example#2255 - DateInterval and
     DateTime::diff with the %a and %d modifiers</a></li>
<li><a href="dateperiod.construct.php#example-2257" class="index">Example#2256 - DatePeriod example</a></li>
<li><a href="dateperiod.construct.php#example-2258" class="index">Example#2257 - DatePeriod example with DatePeriod::EXCLUDE_START_DATE</a></li>
<li><a href="dateperiod.construct.php#example-2259" class="index">Example#2258 - DatePeriod example showing all last Thursdays in a year</a></li>
<li><a href="dateperiod.createfromiso8601string.php#example-2260" class="index">Example#2259 - DatePeriod::createFromISO8601String example</a></li>
<li><a href="dateperiod.getdateinterval.php#example-2261" class="index">Example#2260 - DatePeriod::getDateInterval example</a></li>
<li><a href="dateperiod.getenddate.php#example-2262" class="index">Example#2261 - DatePeriod::getEndDate example</a></li>
<li><a href="dateperiod.getenddate.php#example-2263" class="index">Example#2262 - DatePeriod::getEndDate without an end date</a></li>
<li><a href="dateperiod.getrecurrences.php#example-2264" class="index">Example#2263 - Different values for DatePeriod::getRecurrences</a></li>
<li><a href="dateperiod.getstartdate.php#example-2265" class="index">Example#2264 - DatePeriod::getStartDate example</a></li>
<li><a href="function.checkdate.php#example-2266" class="index">Example#2265 - checkdate example</a></li>
<li><a href="function.date.php#example-2267" class="index">Example#2266 - date examples</a></li>
<li><a href="function.date.php#example-2268" class="index">Example#2267 - Escaping characters in date</a></li>
<li><a href="function.date.php#example-2269" class="index">Example#2268 - date and mktime example</a></li>
<li><a href="function.date.php#example-2270" class="index">Example#2269 - date Formatting</a></li>
<li><a href="function.date-default-timezone-get.php#example-2271" class="index">Example#2270 - Getting the default timezone</a></li>
<li><a href="function.date-default-timezone-get.php#example-2272" class="index">Example#2271 - Getting the abbreviation of a timezone</a></li>
<li><a href="function.date-default-timezone-set.php#example-2273" class="index">Example#2272 - Getting the default timezone</a></li>
<li><a href="function.date-parse.php#example-2274" class="index">Example#2273 - A date_parse example with a comprehensive
    datetime string</a></li>
<li><a href="function.date-parse.php#example-2275" class="index">Example#2274 - date_parse with timezone abbreviation information</a></li>
<li><a href="function.date-parse.php#example-2276" class="index">Example#2275 - date_parse with timezone identifier information</a></li>
<li><a href="function.date-parse.php#example-2277" class="index">Example#2276 - date_parse with a minimal string</a></li>
<li><a href="function.date-parse.php#example-2278" class="index">Example#2277 - date_parse with relative formats</a></li>
<li><a href="function.date-parse.php#example-2279" class="index">Example#2278 - date_parse with side-effects</a></li>
<li><a href="function.date-parse-from-format.php#example-2280" class="index">Example#2279 - date_parse_from_format example</a></li>
<li><a href="function.date-parse-from-format.php#example-2281" class="index">Example#2280 - date_parse_from_format with warnings example</a></li>
<li><a href="function.date-parse-from-format.php#example-2282" class="index">Example#2281 - date_parse_from_format with errors example</a></li>
<li><a href="function.date-sun-info.php#example-2283" class="index">Example#2282 - A date_sun_info example</a></li>
<li><a href="function.date-sun-info.php#example-2284" class="index">Example#2283 - Polar night, with some processing</a></li>
<li><a href="function.date-sun-info.php#example-2285" class="index">Example#2284 - Midnight sun (Troms&oslash;, Norway)</a></li>
<li><a href="function.date-sun-info.php#example-2286" class="index">Example#2285 - Calculating length of day (Kyiv)</a></li>
<li><a href="function.date-sunrise.php#example-2287" class="index">Example#2286 - date_sunrise example</a></li>
<li><a href="function.date-sunrise.php#example-2288" class="index">Example#2287 - No sunrise</a></li>
<li><a href="function.date-sunset.php#example-2289" class="index">Example#2288 - date_sunset example</a></li>
<li><a href="function.date-sunset.php#example-2290" class="index">Example#2289 - No sunset</a></li>
<li><a href="function.getdate.php#example-2291" class="index">Example#2290 - getdate example</a></li>
<li><a href="function.gettimeofday.php#example-2292" class="index">Example#2291 - gettimeofday example</a></li>
<li><a href="function.gmdate.php#example-2293" class="index">Example#2292 - gmdate example</a></li>
<li><a href="function.gmmktime.php#example-2294" class="index">Example#2293 - gmmktime basic example</a></li>
<li><a href="function.gmstrftime.php#example-2295" class="index">Example#2294 - gmstrftime example</a></li>
<li><a href="function.idate.php#example-2296" class="index">Example#2295 - idate example</a></li>
<li><a href="function.localtime.php#example-2297" class="index">Example#2296 - localtime example</a></li>
<li><a href="function.microtime.php#example-2298" class="index">Example#2297 - Timing script execution</a></li>
<li><a href="function.microtime.php#example-2299" class="index">Example#2298 - microtime and REQUEST_TIME_FLOAT</a></li>
<li><a href="function.mktime.php#example-2300" class="index">Example#2299 - mktime basic example</a></li>
<li><a href="function.mktime.php#example-2301" class="index">Example#2300 - mktime example</a></li>
<li><a href="function.mktime.php#example-2302" class="index">Example#2301 - Last day of a month</a></li>
<li><a href="function.strftime.php#example-2303" class="index">Example#2302 - strftime locale examples</a></li>
<li><a href="function.strftime.php#example-2304" class="index">Example#2303 - ISO 8601:1988 week number example</a></li>
<li><a href="function.strftime.php#example-2305" class="index">Example#2304 - Cross platform compatible example using the %e modifier</a></li>
<li><a href="function.strftime.php#example-2306" class="index">Example#2305 - Display all known and unknown formats</a></li>
<li><a href="function.strptime.php#example-2307" class="index">Example#2306 - strptime example</a></li>
<li><a href="function.strtotime.php#example-2308" class="index">Example#2307 - A strtotime example</a></li>
<li><a href="function.strtotime.php#example-2309" class="index">Example#2308 - Checking for failure</a></li>
<li><a href="function.time.php#example-2310" class="index">Example#2309 - time example</a></li>
<li><a href="function.timezone-name-from-abbr.php#example-2311" class="index">Example#2310 - A timezone_name_from_abbr example</a></li>
<li><a href="function.timezone-version-get.php#example-2312" class="index">Example#2311 - Getting the timezonedb version</a></li>
<li><a href="hrtime.example.basic.php#example-2313" class="index">Example#2312 - Measure several code blocks execution and get the total</a></li>
<li><a href="function.dio-close.php#example-2314" class="index">Example#2313 - Closing an open file descriptor</a></li>
<li><a href="function.dio-fcntl.php#example-2315" class="index">Example#2314 - Setting and clearing a lock</a></li>
<li><a href="function.dio-open.php#example-2316" class="index">Example#2315 - Opening a file descriptor</a></li>
<li><a href="function.dio-seek.php#example-2317" class="index">Example#2316 - Positioning in a file</a></li>
<li><a href="function.dio-tcsetattr.php#example-2318" class="index">Example#2317 - Setting the baud rate on a serial port</a></li>
<li><a href="function.chdir.php#example-2319" class="index">Example#2318 - chdir example</a></li>
<li><a href="function.chroot.php#example-2320" class="index">Example#2319 - chroot example</a></li>
<li><a href="function.closedir.php#example-2321" class="index">Example#2320 - closedir example</a></li>
<li><a href="function.dir.php#example-2322" class="index">Example#2321 - dir example</a></li>
<li><a href="function.getcwd.php#example-2323" class="index">Example#2322 - getcwd example</a></li>
<li><a href="function.opendir.php#example-2324" class="index">Example#2323 - opendir example</a></li>
<li><a href="function.readdir.php#example-2325" class="index">Example#2324 - List all entries in a directory</a></li>
<li><a href="function.readdir.php#example-2326" class="index">Example#2325 - List all entries in the current directory and strip out .
     and ..</a></li>
<li><a href="function.scandir.php#example-2327" class="index">Example#2326 - A simple scandir example</a></li>
<li><a href="function.finfo-buffer.php#example-2328" class="index">Example#2327 - A finfo_buffer example</a></li>
<li><a href="function.finfo-file.php#example-2329" class="index">Example#2328 - A finfo_file example</a></li>
<li><a href="function.finfo-open.php#example-2330" class="index">Example#2329 - Object-oriented style</a></li>
<li><a href="function.finfo-open.php#example-2331" class="index">Example#2330 - Procedural style</a></li>
<li><a href="function.mime-content-type.php#example-2332" class="index">Example#2331 - mime_content_type Example</a></li>
<li><a href="function.basename.php#example-2333" class="index">Example#2332 - basename example</a></li>
<li><a href="function.chgrp.php#example-2334" class="index">Example#2333 - Changing a file's group</a></li>
<li><a href="function.chown.php#example-2335" class="index">Example#2334 - Simple chown usage</a></li>
<li><a href="function.clearstatcache.php#example-2336" class="index">Example#2335 - clearstatcache example</a></li>
<li><a href="function.copy.php#example-2337" class="index">Example#2336 - copy example</a></li>
<li><a href="function.dirname.php#example-2338" class="index">Example#2337 - dirname example</a></li>
<li><a href="function.disk-free-space.php#example-2339" class="index">Example#2338 - disk_free_space example</a></li>
<li><a href="function.disk-total-space.php#example-2340" class="index">Example#2339 - disk_total_space example</a></li>
<li><a href="function.fclose.php#example-2341" class="index">Example#2340 - A simple fclose example</a></li>
<li><a href="function.fdatasync.php#example-2342" class="index">Example#2341 - fdatasync example</a></li>
<li><a href="function.feof.php#example-2343" class="index">Example#2342 - Handling timeouts with feof</a></li>
<li><a href="function.feof.php#example-2344" class="index">Example#2343 - feof example with an invalid file pointer</a></li>
<li><a href="function.fflush.php#example-2345" class="index">Example#2344 - File write example using fflush</a></li>
<li><a href="function.fgetc.php#example-2346" class="index">Example#2345 - A fgetc example</a></li>
<li><a href="function.fgetcsv.php#example-2347" class="index">Example#2346 - Read and print the entire contents of a CSV file</a></li>
<li><a href="function.fgets.php#example-2348" class="index">Example#2347 - Reading a file line by line</a></li>
<li><a href="function.fgetss.php#example-2349" class="index">Example#2348 - Reading a PHP file line-by-line</a></li>
<li><a href="function.file.php#example-2350" class="index">Example#2349 - file example</a></li>
<li><a href="function.file-exists.php#example-2351" class="index">Example#2350 - Testing whether a file exists</a></li>
<li><a href="function.file-get-contents.php#example-2352" class="index">Example#2351 - Get and output the source of the homepage of a website</a></li>
<li><a href="function.file-get-contents.php#example-2353" class="index">Example#2352 - Searching within the include_path</a></li>
<li><a href="function.file-get-contents.php#example-2354" class="index">Example#2353 - Reading a section of a file</a></li>
<li><a href="function.file-get-contents.php#example-2355" class="index">Example#2354 - Using stream contexts</a></li>
<li><a href="function.file-put-contents.php#example-2356" class="index">Example#2355 - Simple usage example</a></li>
<li><a href="function.file-put-contents.php#example-2357" class="index">Example#2356 - Using flags</a></li>
<li><a href="function.fileatime.php#example-2358" class="index">Example#2357 - fileatime example</a></li>
<li><a href="function.filectime.php#example-2359" class="index">Example#2358 - A filectime example</a></li>
<li><a href="function.filegroup.php#example-2360" class="index">Example#2359 - Finding the group of a file</a></li>
<li><a href="function.fileinode.php#example-2361" class="index">Example#2360 - Comparing the inode of a file with the current file</a></li>
<li><a href="function.filemtime.php#example-2362" class="index">Example#2361 - filemtime example</a></li>
<li><a href="function.fileowner.php#example-2363" class="index">Example#2362 - Finding the owner of a file</a></li>
<li><a href="function.fileperms.php#example-2364" class="index">Example#2363 - Display permissions as an octal value</a></li>
<li><a href="function.fileperms.php#example-2365" class="index">Example#2364 - Display full permissions</a></li>
<li><a href="function.filesize.php#example-2366" class="index">Example#2365 - filesize example</a></li>
<li><a href="function.filetype.php#example-2367" class="index">Example#2366 - filetype example</a></li>
<li><a href="function.flock.php#example-2368" class="index">Example#2367 - flock example</a></li>
<li><a href="function.flock.php#example-2369" class="index">Example#2368 - flock using the LOCK_NB option</a></li>
<li><a href="function.fnmatch.php#example-2370" class="index">Example#2369 - Checking a color name against a shell wildcard pattern</a></li>
<li><a href="function.fopen.php#example-2371" class="index">Example#2370 - fopen examples</a></li>
<li><a href="function.fpassthru.php#example-2372" class="index">Example#2371 - Using fpassthru with binary files</a></li>
<li><a href="function.fputcsv.php#example-2373" class="index">Example#2372 - fputcsv example</a></li>
<li><a href="function.fread.php#example-2374" class="index">Example#2373 - A simple fread example</a></li>
<li><a href="function.fread.php#example-2375" class="index">Example#2374 - Binary fread example</a></li>
<li><a href="function.fread.php#example-2376" class="index">Example#2375 - Remote fread examples</a></li>
<li><a href="function.fscanf.php#example-2377" class="index">Example#2376 - fscanf Example</a></li>
<li><a href="function.fscanf.php#example-2378" class="index">Example#2377 - Contents of users.txt</a></li>
<li><a href="function.fseek.php#example-2379" class="index">Example#2378 - fseek example</a></li>
<li><a href="function.fstat.php#example-2380" class="index">Example#2379 - fstat example</a></li>
<li><a href="function.fsync.php#example-2381" class="index">Example#2380 - fsync example</a></li>
<li><a href="function.ftell.php#example-2382" class="index">Example#2381 - ftell example</a></li>
<li><a href="function.ftruncate.php#example-2383" class="index">Example#2382 - File truncation example</a></li>
<li><a href="function.fwrite.php#example-2384" class="index">Example#2383 - A simple fwrite example</a></li>
<li><a href="function.glob.php#example-2385" class="index">Example#2384 - Convenient way how glob can replace
     opendir and friends.</a></li>
<li><a href="function.glob.php#example-2386" class="index">Example#2385 - Example with a more complex pattern</a></li>
<li><a href="function.is-dir.php#example-2387" class="index">Example#2386 - is_dir example</a></li>
<li><a href="function.is-executable.php#example-2388" class="index">Example#2387 - is_executable example</a></li>
<li><a href="function.is-file.php#example-2389" class="index">Example#2388 - is_file example</a></li>
<li><a href="function.is-link.php#example-2390" class="index">Example#2389 - Create and confirm if a file is a symbolic link</a></li>
<li><a href="function.is-readable.php#example-2391" class="index">Example#2390 - is_readable example</a></li>
<li><a href="function.is-uploaded-file.php#example-2392" class="index">Example#2391 - is_uploaded_file example</a></li>
<li><a href="function.is-writable.php#example-2393" class="index">Example#2392 - is_writable example</a></li>
<li><a href="function.lchgrp.php#example-2394" class="index">Example#2393 - Changing the group of a symbolic link</a></li>
<li><a href="function.lchown.php#example-2395" class="index">Example#2394 - Changing the owner of a symbolic link</a></li>
<li><a href="function.link.php#example-2396" class="index">Example#2395 - Creating a simple hard link</a></li>
<li><a href="function.linkinfo.php#example-2397" class="index">Example#2396 - linkinfo example</a></li>
<li><a href="function.lstat.php#example-2398" class="index">Example#2397 - Comparison of stat and lstat</a></li>
<li><a href="function.mkdir.php#example-2399" class="index">Example#2398 - mkdir example</a></li>
<li><a href="function.mkdir.php#example-2400" class="index">Example#2399 - mkdir using the recursive parameter</a></li>
<li><a href="function.move-uploaded-file.php#example-2401" class="index">Example#2400 - Uploading multiple files</a></li>
<li><a href="function.parse-ini-file.php#example-2402" class="index">Example#2401 - Contents of sample.ini</a></li>
<li><a href="function.parse-ini-file.php#example-2403" class="index">Example#2402 - parse_ini_file example</a></li>
<li><a href="function.parse-ini-file.php#example-2404" class="index">Example#2403 - parse_ini_file parsing a php.ini file</a></li>
<li><a href="function.parse-ini-file.php#example-2405" class="index">Example#2404 - Value Interpolation</a></li>
<li><a href="function.parse-ini-file.php#example-2406" class="index">Example#2405 - Escaping Characters</a></li>
<li><a href="function.pathinfo.php#example-2407" class="index">Example#2406 - pathinfo Example</a></li>
<li><a href="function.pathinfo.php#example-2408" class="index">Example#2407 - pathinfo example showing difference between null and no extension</a></li>
<li><a href="function.pathinfo.php#example-2409" class="index">Example#2408 - pathinfo example for a dot-file</a></li>
<li><a href="function.pathinfo.php#example-2410" class="index">Example#2409 - pathinfo example with array dereferencing</a></li>
<li><a href="function.pclose.php#example-2411" class="index">Example#2410 - pclose example</a></li>
<li><a href="function.popen.php#example-2412" class="index">Example#2411 - popen example</a></li>
<li><a href="function.popen.php#example-2413" class="index">Example#2412 - popen example</a></li>
<li><a href="function.readfile.php#example-2414" class="index">Example#2413 - Forcing a download using readfile</a></li>
<li><a href="function.readlink.php#example-2415" class="index">Example#2414 - readlink example</a></li>
<li><a href="function.realpath.php#example-2416" class="index">Example#2415 - realpath example</a></li>
<li><a href="function.realpath.php#example-2417" class="index">Example#2416 - realpath on Windows</a></li>
<li><a href="function.realpath-cache-get.php#example-2418" class="index">Example#2417 - realpath_cache_get example</a></li>
<li><a href="function.realpath-cache-size.php#example-2419" class="index">Example#2418 - realpath_cache_size example</a></li>
<li><a href="function.rename.php#example-2420" class="index">Example#2419 - Example with rename</a></li>
<li><a href="function.rewind.php#example-2421" class="index">Example#2420 - rewind overwriting example</a></li>
<li><a href="function.rmdir.php#example-2422" class="index">Example#2421 - rmdir example</a></li>
<li><a href="function.stat.php#example-2423" class="index">Example#2422 - stat example</a></li>
<li><a href="function.stat.php#example-2424" class="index">Example#2423 - Using stat information together with touch</a></li>
<li><a href="function.symlink.php#example-2425" class="index">Example#2424 - Create a symbolic link</a></li>
<li><a href="function.tempnam.php#example-2426" class="index">Example#2425 - tempnam example</a></li>
<li><a href="function.tmpfile.php#example-2427" class="index">Example#2426 - tmpfile example</a></li>
<li><a href="function.touch.php#example-2428" class="index">Example#2427 - touch example</a></li>
<li><a href="function.touch.php#example-2429" class="index">Example#2428 - touch using the mtime parameter</a></li>
<li><a href="function.umask.php#example-2430" class="index">Example#2429 - umask example</a></li>
<li><a href="function.unlink.php#example-2431" class="index">Example#2430 - Basic unlink usage</a></li>
<li><a href="function.inotify-init.php#inotify-init.example.basic" class="index">Example#2431 - Example usage of inotify</a></li>
<li><a href="function.xattr-get.php#example-2433" class="index">Example#2432 - Checks if system administrator has signed the file</a></li>
<li><a href="function.xattr-list.php#example-2434" class="index">Example#2433 - Prints names of all extended attributes of file</a></li>
<li><a href="function.xattr-remove.php#example-2435" class="index">Example#2434 - Removes all extended attributes of a file</a></li>
<li><a href="function.xattr-set.php#example-2436" class="index">Example#2435 - Sets extended attributes on .wav file</a></li>
<li><a href="function.xattr-supported.php#example-2437" class="index">Example#2436 - xattr_supported example</a></li>
<li><a href="function.xdiff-file-bdiff.php#example-2438" class="index">Example#2437 - xdiff_file_bdiff example</a></li>
<li><a href="function.xdiff-file-bdiff-size.php#example-2439" class="index">Example#2438 - xdiff_file_bdiff_size example</a></li>
<li><a href="function.xdiff-file-bpatch.php#example-2440" class="index">Example#2439 - xdiff_file_bpatch example</a></li>
<li><a href="function.xdiff-file-diff.php#example-2441" class="index">Example#2440 - xdiff_file_diff example</a></li>
<li><a href="function.xdiff-file-diff-binary.php#example-2442" class="index">Example#2441 - xdiff_file_diff_binary example</a></li>
<li><a href="function.xdiff-file-merge3.php#example-2443" class="index">Example#2442 - xdiff_file_merge3 example</a></li>
<li><a href="function.xdiff-file-patch.php#example-2444" class="index">Example#2443 - xdiff_file_patch example</a></li>
<li><a href="function.xdiff-file-patch.php#example-2445" class="index">Example#2444 - Patch reversing example</a></li>
<li><a href="function.xdiff-file-patch-binary.php#example-2446" class="index">Example#2445 - xdiff_file_patch_binary example</a></li>
<li><a href="function.xdiff-file-rabdiff.php#example-2447" class="index">Example#2446 - xdiff_file_rabdiff example</a></li>
<li><a href="function.xdiff-string-bdiff-size.php#example-2448" class="index">Example#2447 - xdiff_string_bdiff_size example</a></li>
<li><a href="function.xdiff-string-diff.php#example-2449" class="index">Example#2448 - xdiff_string_diff example</a></li>
<li><a href="function.xdiff-string-patch.php#example-2450" class="index">Example#2449 - xdiff_string_patch example</a></li>
<li><a href="enchant.examples.php#example-2451" class="index">Example#2450 - Enchant Usage Example</a></li>
<li><a href="function.enchant-broker-describe.php#example-2452" class="index">Example#2451 - List the backends provided by the given broker</a></li>
<li><a href="function.enchant-broker-dict-exists.php#example-2453" class="index">Example#2452 - A enchant_broker_dict_exists example</a></li>
<li><a href="function.enchant-broker-list-dicts.php#example-2454" class="index">Example#2453 - List all available dictionaries for one broker</a></li>
<li><a href="function.enchant-broker-request-dict.php#example-2455" class="index">Example#2454 - A enchant_broker_request_dict example</a></li>
<li><a href="function.enchant-dict-add.php#example-2456" class="index">Example#2455 - Adding a word to a PWL</a></li>
<li><a href="function.enchant-dict-describe.php#example-2457" class="index">Example#2456 - A enchant_dict_describe example</a></li>
<li><a href="function.enchant-dict-quick-check.php#example-2458" class="index">Example#2457 - A enchant_dict_quick_check example</a></li>
<li><a href="function.enchant-dict-suggest.php#example-2459" class="index">Example#2458 - A enchant_dict_suggest example</a></li>
<li><a href="gender.example.admin.php#example-2460" class="index">Example#2459 - Usage example.</a></li>
<li><a href="gender-gender.country.php#example-2461" class="index">Example#2460 - Using Gender\Gender::country</a></li>
<li><a href="function.bindtextdomain.php#example-2462" class="index">Example#2461 - bindtextdomain example</a></li>
<li><a href="function.gettext.php#example-2463" class="index">Example#2462 - gettext-check</a></li>
<li><a href="function.ngettext.php#example-2464" class="index">Example#2463 - ngettext example</a></li>
<li><a href="function.iconv.php#example-2465" class="index">Example#2464 - iconv example</a></li>
<li><a href="function.iconv-get-encoding.php#example-2466" class="index">Example#2465 - iconv_get_encoding example</a></li>
<li><a href="function.iconv-mime-decode.php#example-2467" class="index">Example#2466 - iconv_mime_decode example</a></li>
<li><a href="function.iconv-mime-decode-headers.php#example-2468" class="index">Example#2467 - iconv_mime_decode_headers example</a></li>
<li><a href="function.iconv-mime-encode.php#example-2469" class="index">Example#2468 - iconv_mime_encode example</a></li>
<li><a href="function.iconv-set-encoding.php#example-2470" class="index">Example#2469 - iconv_set_encoding example</a></li>
<li><a href="function.ob-iconv-handler.php#example-2471" class="index">Example#2470 - ob_iconv_handler example:</a></li>
<li><a href="intl.examples.basic.php#example-2472" class="index">Example#2471 - Example of using the procedural API</a></li>
<li><a href="intl.examples.basic.php#example-2473" class="index">Example#2472 - Example of using the object-oriented API</a></li>
<li><a href="class.collator.php#example-2474" class="index">Example#2473 - FRENCH_COLLATION rules</a></li>
<li><a href="class.collator.php#example-2475" class="index">Example#2474 - ALTERNATE_HANDLING rules</a></li>
<li><a href="class.collator.php#example-2476" class="index">Example#2475 - CASE_FIRST rules</a></li>
<li><a href="class.collator.php#example-2477" class="index">Example#2476 - CASE_LEVEL rules</a></li>
<li><a href="collator.asort.php#example-2478" class="index">Example#2477 - collator_asort example</a></li>
<li><a href="collator.compare.php#example-2479" class="index">Example#2478 - collator_compare example</a></li>
<li><a href="collator.compare.php#example-2480" class="index">Example#2479 - Comparing strings without diacritics or case-sensitivity</a></li>
<li><a href="collator.construct.php#example-2481" class="index">Example#2480 - Collator::__construct example</a></li>
<li><a href="collator.create.php#example-2482" class="index">Example#2481 - collator_create example</a></li>
<li><a href="collator.getattribute.php#example-2483" class="index">Example#2482 - collator_get_attribute example</a></li>
<li><a href="collator.geterrorcode.php#example-2484" class="index">Example#2483 - collator_get_error_code example</a></li>
<li><a href="collator.geterrormessage.php#example-2485" class="index">Example#2484 - collator_get_error_message example</a></li>
<li><a href="collator.getlocale.php#example-2486" class="index">Example#2485 - collator_get_locale example</a></li>
<li><a href="collator.getsortkey.php#example-2487" class="index">Example#2486 - collator_get_sort_key example</a></li>
<li><a href="collator.getsortkey.php#example-2488" class="index">Example#2487 - Collator::getSortKey example with usort</a></li>
<li><a href="collator.getstrength.php#example-2489" class="index">Example#2488 - collator_get_strength example</a></li>
<li><a href="collator.setattribute.php#example-2490" class="index">Example#2489 - collator_set_attribute example</a></li>
<li><a href="collator.setstrength.php#example-2491" class="index">Example#2490 - collator_set_strength example</a></li>
<li><a href="collator.sort.php#example-2492" class="index">Example#2491 - collator_sort example</a></li>
<li><a href="collator.sortwithsortkeys.php#example-2493" class="index">Example#2492 - collator_sort_with_sort_keys example</a></li>
<li><a href="numberformatter.create.php#example-2494" class="index">Example#2493 - numfmt_create example</a></li>
<li><a href="numberformatter.create.php#example-2495" class="index">Example#2494 - NumberFormatter::create example</a></li>
<li><a href="numberformatter.format.php#example-2496" class="index">Example#2495 - numfmt_format example</a></li>
<li><a href="numberformatter.format.php#example-2497" class="index">Example#2496 - OO example</a></li>
<li><a href="numberformatter.formatcurrency.php#example-2498" class="index">Example#2497 - numfmt_format_currency example</a></li>
<li><a href="numberformatter.formatcurrency.php#example-2499" class="index">Example#2498 - OO example</a></li>
<li><a href="numberformatter.getattribute.php#example-2500" class="index">Example#2499 - numfmt_get_attribute example</a></li>
<li><a href="numberformatter.getattribute.php#example-2501" class="index">Example#2500 - OO example</a></li>
<li><a href="numberformatter.geterrorcode.php#example-2502" class="index">Example#2501 - numfmt_get_error_code example</a></li>
<li><a href="numberformatter.geterrorcode.php#example-2503" class="index">Example#2502 - OO example</a></li>
<li><a href="numberformatter.geterrormessage.php#example-2504" class="index">Example#2503 - numfmt_get_error_message example</a></li>
<li><a href="numberformatter.geterrormessage.php#example-2505" class="index">Example#2504 - OO example</a></li>
<li><a href="numberformatter.getlocale.php#example-2506" class="index">Example#2505 - numfmt_get_locale example</a></li>
<li><a href="numberformatter.getpattern.php#example-2507" class="index">Example#2506 - numfmt_get_pattern example</a></li>
<li><a href="numberformatter.getpattern.php#example-2508" class="index">Example#2507 - OO example</a></li>
<li><a href="numberformatter.getsymbol.php#example-2509" class="index">Example#2508 - numfmt_get_symbol example</a></li>
<li><a href="numberformatter.getsymbol.php#example-2510" class="index">Example#2509 - OO example</a></li>
<li><a href="numberformatter.gettextattribute.php#example-2511" class="index">Example#2510 - numfmt_get_text_attribute example</a></li>
<li><a href="numberformatter.gettextattribute.php#example-2512" class="index">Example#2511 - OO example</a></li>
<li><a href="numberformatter.parse.php#example-2513" class="index">Example#2512 - numfmt_parse example</a></li>
<li><a href="numberformatter.parse.php#example-2514" class="index">Example#2513 - OO example</a></li>
<li><a href="numberformatter.parsecurrency.php#example-2515" class="index">Example#2514 - numfmt_parse_currency example</a></li>
<li><a href="numberformatter.parsecurrency.php#example-2516" class="index">Example#2515 - OO example</a></li>
<li><a href="numberformatter.setattribute.php#example-2517" class="index">Example#2516 - numfmt_set_attribute example</a></li>
<li><a href="numberformatter.setattribute.php#example-2518" class="index">Example#2517 - OO example</a></li>
<li><a href="numberformatter.setpattern.php#example-2519" class="index">Example#2518 - numfmt_set_pattern example</a></li>
<li><a href="numberformatter.setpattern.php#example-2520" class="index">Example#2519 - OO example</a></li>
<li><a href="numberformatter.setsymbol.php#example-2521" class="index">Example#2520 - numfmt_set_symbol example</a></li>
<li><a href="numberformatter.setsymbol.php#example-2522" class="index">Example#2521 - OO example</a></li>
<li><a href="numberformatter.settextattribute.php#example-2523" class="index">Example#2522 - numfmt_set_text_attribute example</a></li>
<li><a href="numberformatter.settextattribute.php#example-2524" class="index">Example#2523 - OO example</a></li>
<li><a href="locale.acceptfromhttp.php#example-2525" class="index">Example#2524 - locale_accept_from_http example</a></li>
<li><a href="locale.acceptfromhttp.php#example-2526" class="index">Example#2525 - OO example</a></li>
<li><a href="locale.composelocale.php#example-2527" class="index">Example#2526 - locale_compose example</a></li>
<li><a href="locale.composelocale.php#example-2528" class="index">Example#2527 - OO example</a></li>
<li><a href="locale.composelocale.php#locale.composelocale.example.limits" class="index">Example#2528 - Subtag limits</a></li>
<li><a href="locale.filtermatches.php#example-2530" class="index">Example#2529 - locale_filter_matches example</a></li>
<li><a href="locale.filtermatches.php#example-2531" class="index">Example#2530 - OO example</a></li>
<li><a href="locale.getallvariants.php#example-2532" class="index">Example#2531 - locale_get_all_variants example</a></li>
<li><a href="locale.getallvariants.php#example-2533" class="index">Example#2532 - OO example</a></li>
<li><a href="locale.getdefault.php#example-2534" class="index">Example#2533 - locale_get_default example</a></li>
<li><a href="locale.getdefault.php#example-2535" class="index">Example#2534 - OO example</a></li>
<li><a href="locale.getdisplaylanguage.php#example-2536" class="index">Example#2535 - locale_get_display_language example</a></li>
<li><a href="locale.getdisplaylanguage.php#example-2537" class="index">Example#2536 - OO example</a></li>
<li><a href="locale.getdisplayname.php#example-2538" class="index">Example#2537 - locale_get_display_name example</a></li>
<li><a href="locale.getdisplayname.php#example-2539" class="index">Example#2538 - OO example</a></li>
<li><a href="locale.getdisplayregion.php#example-2540" class="index">Example#2539 - locale_get_display_region example</a></li>
<li><a href="locale.getdisplayregion.php#example-2541" class="index">Example#2540 - OO example</a></li>
<li><a href="locale.getdisplayscript.php#example-2542" class="index">Example#2541 - locale_get_display_script example</a></li>
<li><a href="locale.getdisplayscript.php#example-2543" class="index">Example#2542 - OO example</a></li>
<li><a href="locale.getdisplayvariant.php#example-2544" class="index">Example#2543 - locale_get_display_variant example</a></li>
<li><a href="locale.getdisplayvariant.php#example-2545" class="index">Example#2544 - OO example</a></li>
<li><a href="locale.getkeywords.php#example-2546" class="index">Example#2545 - locale_get_keywords example</a></li>
<li><a href="locale.getkeywords.php#example-2547" class="index">Example#2546 - OO example</a></li>
<li><a href="locale.getprimarylanguage.php#example-2548" class="index">Example#2547 - locale_get_primary_language example</a></li>
<li><a href="locale.getprimarylanguage.php#example-2549" class="index">Example#2548 - OO example</a></li>
<li><a href="locale.getregion.php#example-2550" class="index">Example#2549 - locale_get_region example</a></li>
<li><a href="locale.getregion.php#example-2551" class="index">Example#2550 - OO example</a></li>
<li><a href="locale.getscript.php#example-2552" class="index">Example#2551 - locale_get_script example</a></li>
<li><a href="locale.getscript.php#example-2553" class="index">Example#2552 - OO example</a></li>
<li><a href="locale.lookup.php#example-2554" class="index">Example#2553 - locale_lookup example</a></li>
<li><a href="locale.lookup.php#example-2555" class="index">Example#2554 - OO example</a></li>
<li><a href="locale.parselocale.php#example-2556" class="index">Example#2555 - locale_parse example</a></li>
<li><a href="locale.parselocale.php#example-2557" class="index">Example#2556 - OO example</a></li>
<li><a href="locale.setdefault.php#example-2558" class="index">Example#2557 - locale_set_default example</a></li>
<li><a href="locale.setdefault.php#example-2559" class="index">Example#2558 - OO example</a></li>
<li><a href="normalizer.getrawdecomposition.php#normalizer.getrawdecomposition.example.basic" class="index">Example#2559 - Normalizer::getRawDecomposition example</a></li>
<li><a href="normalizer.isnormalized.php#example-2561" class="index">Example#2560 - normalizer_is_normalized example</a></li>
<li><a href="normalizer.isnormalized.php#example-2562" class="index">Example#2561 - OO example</a></li>
<li><a href="normalizer.normalize.php#example-2563" class="index">Example#2562 - normalizer_normalize example</a></li>
<li><a href="normalizer.normalize.php#example-2564" class="index">Example#2563 - OO example</a></li>
<li><a href="messageformatter.create.php#example-2565" class="index">Example#2564 - msgfmt_create example</a></li>
<li><a href="messageformatter.create.php#example-2566" class="index">Example#2565 - OO example</a></li>
<li><a href="messageformatter.format.php#example-2567" class="index">Example#2566 - msgfmt_format example</a></li>
<li><a href="messageformatter.format.php#example-2568" class="index">Example#2567 - OO example</a></li>
<li><a href="messageformatter.formatmessage.php#example-2569" class="index">Example#2568 - msgfmt_format_message example</a></li>
<li><a href="messageformatter.formatmessage.php#example-2570" class="index">Example#2569 - OO example</a></li>
<li><a href="messageformatter.formatmessage.php#example-2571" class="index">Example#2570 - Instructing ICU to format currency with common and with narrow currency symbol</a></li>
<li><a href="messageformatter.geterrormessage.php#example-2572" class="index">Example#2571 - msgfmt_get_error_message example</a></li>
<li><a href="messageformatter.geterrormessage.php#example-2573" class="index">Example#2572 - OO example</a></li>
<li><a href="messageformatter.getlocale.php#example-2574" class="index">Example#2573 - msgfmt_get_locale example</a></li>
<li><a href="messageformatter.getlocale.php#example-2575" class="index">Example#2574 - OO example</a></li>
<li><a href="messageformatter.getpattern.php#example-2576" class="index">Example#2575 - msgfmt_get_pattern example</a></li>
<li><a href="messageformatter.getpattern.php#example-2577" class="index">Example#2576 - OO example</a></li>
<li><a href="messageformatter.parse.php#example-2578" class="index">Example#2577 - msgfmt_parse example</a></li>
<li><a href="messageformatter.parse.php#example-2579" class="index">Example#2578 - OO example</a></li>
<li><a href="messageformatter.parsemessage.php#example-2580" class="index">Example#2579 - msgfmt_parse_message example</a></li>
<li><a href="messageformatter.parsemessage.php#example-2581" class="index">Example#2580 - OO example</a></li>
<li><a href="messageformatter.setpattern.php#example-2582" class="index">Example#2581 - msgfmt_set_pattern example</a></li>
<li><a href="messageformatter.setpattern.php#example-2583" class="index">Example#2582 - OO example</a></li>
<li><a href="intlcalendar.add.php#example-2584" class="index">Example#2583 - IntlCalendar::add</a></li>
<li><a href="intlcalendar.after.php#example-2585" class="index">Example#2584 - IntlCalendar::after</a></li>
<li><a href="intlcalendar.clear.php#example-2586" class="index">Example#2585 - IntlCalendar::clear examples</a></li>
<li><a href="intlcalendar.createinstance.php#example-2587" class="index">Example#2586 - IntlCalendar::createInstance</a></li>
<li><a href="intlcalendar.equals.php#example-2588" class="index">Example#2587 - IntlCalendar::equals</a></li>
<li><a href="intlcalendar.fielddifference.php#example-2589" class="index">Example#2588 - IntlCalendar::fieldDifference</a></li>
<li><a href="intlcalendar.fromdatetime.php#example-2590" class="index">Example#2589 - IntlCalendar::fromDateTime</a></li>
<li><a href="intlcalendar.get.php#example-2591" class="index">Example#2590 - IntlCalendar::get</a></li>
<li><a href="intlcalendar.getactualmaximum.php#example-2592" class="index">Example#2591 - IntlCalendar::getActualMaximum</a></li>
<li><a href="intlcalendar.getavailablelocales.php#example-2593" class="index">Example#2592 - IntlCalendar::getAvailableLocales</a></li>
<li><a href="intlcalendar.getdayofweektype.php#example-2594" class="index">Example#2593 - IntlCalendar::getDayOfWeekType</a></li>
<li><a href="intlcalendar.geterrorcode.php#example-2595" class="index">Example#2594 - IntlCalendar::getErrorCode and
   IntlCalendar::getErrorMessage</a></li>
<li><a href="intlcalendar.geterrormessage.php#example-2596" class="index">Example#2595 - IntlCalendar::getErrorMessage</a></li>
<li><a href="intlcalendar.getfirstdayofweek.php#example-2597" class="index">Example#2596 - IntlCalendar::getFirstDayOfWeek</a></li>
<li><a href="intlcalendar.getkeywordvaluesforlocale.php#example-2598" class="index">Example#2597 - IntlCalendar::getKeyworkValuesForLocale</a></li>
<li><a href="intlcalendar.getleastmaximum.php#example-2599" class="index">Example#2598 - Maxima examples</a></li>
<li><a href="intlcalendar.getlocale.php#example-2600" class="index">Example#2599 - IntlCalendar::getLocale</a></li>
<li><a href="intlcalendar.getminimaldaysinfirstweek.php#example-2601" class="index">Example#2600 - IntlCalendar::getMinimalDaysInFirstWeek</a></li>
<li><a href="intlcalendar.getnow.php#example-2602" class="index">Example#2601 - IntlCalendar::getNow</a></li>
<li><a href="intlcalendar.getrepeatedwalltimeoption.php#example-2603" class="index">Example#2602 - IntlCalendar::getRepeatedWallTimeOption</a></li>
<li><a href="intlcalendar.getskippedwalltimeoption.php#example-2604" class="index">Example#2603 - IntlCalendar::getSkippedWallTimeOption</a></li>
<li><a href="intlcalendar.gettime.php#example-2605" class="index">Example#2604 - IntlCalendar::getTime</a></li>
<li><a href="intlcalendar.gettimezone.php#example-2606" class="index">Example#2605 - IntlCalendar::getTimeZone</a></li>
<li><a href="intlcalendar.gettype.php#example-2607" class="index">Example#2606 - IntlCalendar::getType</a></li>
<li><a href="intlcalendar.indaylighttime.php#example-2608" class="index">Example#2607 - IntlCalendar::inDaylightTime</a></li>
<li><a href="intlcalendar.isequivalentto.php#example-2609" class="index">Example#2608 - IntlCalendar::isEquivalentTo</a></li>
<li><a href="intlcalendar.islenient.php#example-2610" class="index">Example#2609 - IntlCalendar::isLenient</a></li>
<li><a href="intlcalendar.isweekend.php#example-2611" class="index">Example#2610 - IntlCalendar::isWeekend</a></li>
<li><a href="intlcalendar.roll.php#example-2612" class="index">Example#2611 - IntlCalendar::roll</a></li>
<li><a href="intlcalendar.set.php#example-2613" class="index">Example#2612 - IntlCalendar::set</a></li>
<li><a href="intlcalendar.setdate.php#example-2614" class="index">Example#2613 - IntlCalendar::setDate example</a></li>
<li><a href="intlcalendar.setdatetime.php#example-2615" class="index">Example#2614 - IntlCalendar::setDateTime example</a></li>
<li><a href="intlcalendar.setfirstdayofweek.php#example-2616" class="index">Example#2615 - IntlCalendar::setFirstDayOfWeek</a></li>
<li><a href="intlcalendar.settime.php#example-2617" class="index">Example#2616 - IntlCalendar::setTime</a></li>
<li><a href="intlcalendar.settimezone.php#example-2618" class="index">Example#2617 - IntlCalendar::setTimeZone</a></li>
<li><a href="intlcalendar.todatetime.php#example-2619" class="index">Example#2618 - IntlCalendar::toDateTime</a></li>
<li><a href="intlgregoriancalendar.createfromdate.php#example-2620" class="index">Example#2619 - IntlGregorianCalendar::createFromDate example</a></li>
<li><a href="intlgregoriancalendar.createfromdatetime.php#example-2621" class="index">Example#2620 - IntlGregorianCalendar::createFromDateTime example</a></li>
<li><a href="intldateformatter.create.php#example-2622" class="index">Example#2621 - datefmt_create example</a></li>
<li><a href="intldateformatter.create.php#example-2623" class="index">Example#2622 - OO example</a></li>
<li><a href="intldateformatter.create.php#example-2624" class="index">Example#2623 - Example of invalid locale handling</a></li>
<li><a href="intldateformatter.format.php#example-2625" class="index">Example#2624 - datefmt_format example</a></li>
<li><a href="intldateformatter.format.php#example-2626" class="index">Example#2625 - OO example</a></li>
<li><a href="intldateformatter.format.php#example-2627" class="index">Example#2626 - With IntlCalendar object</a></li>
<li><a href="intldateformatter.formatobject.php#example-2628" class="index">Example#2627 - IntlDateFormatter::formatObject examples</a></li>
<li><a href="intldateformatter.getcalendar.php#example-2629" class="index">Example#2628 - datefmt_get_calendar example</a></li>
<li><a href="intldateformatter.getcalendar.php#example-2630" class="index">Example#2629 - OO example</a></li>
<li><a href="intldateformatter.getcalendar.php#example-2631" class="index">Example#2630 - Example of invalid locale handling</a></li>
<li><a href="intldateformatter.getdatetype.php#example-2632" class="index">Example#2631 - datefmt_get_datetype example</a></li>
<li><a href="intldateformatter.getdatetype.php#example-2633" class="index">Example#2632 - OO example</a></li>
<li><a href="intldateformatter.geterrorcode.php#example-2634" class="index">Example#2633 - datefmt_get_error_code example</a></li>
<li><a href="intldateformatter.geterrorcode.php#example-2635" class="index">Example#2634 - OO example</a></li>
<li><a href="intldateformatter.geterrormessage.php#example-2636" class="index">Example#2635 - datefmt_get_error_message example</a></li>
<li><a href="intldateformatter.geterrormessage.php#example-2637" class="index">Example#2636 - OO example</a></li>
<li><a href="intldateformatter.getlocale.php#example-2638" class="index">Example#2637 - datefmt_get_locale example</a></li>
<li><a href="intldateformatter.getlocale.php#example-2639" class="index">Example#2638 - OO example</a></li>
<li><a href="intldateformatter.getpattern.php#example-2640" class="index">Example#2639 - datefmt_get_pattern example</a></li>
<li><a href="intldateformatter.getpattern.php#example-2641" class="index">Example#2640 - OO example</a></li>
<li><a href="intldateformatter.gettimetype.php#example-2642" class="index">Example#2641 - datefmt_get_timetype example</a></li>
<li><a href="intldateformatter.gettimetype.php#example-2643" class="index">Example#2642 - OO example</a></li>
<li><a href="intldateformatter.gettimezoneid.php#example-2644" class="index">Example#2643 - datefmt_get_timezone_id example</a></li>
<li><a href="intldateformatter.gettimezoneid.php#example-2645" class="index">Example#2644 - OO example</a></li>
<li><a href="intldateformatter.getcalendarobject.php#example-2646" class="index">Example#2645 - IntlDateFormatter::getCalendarObject example</a></li>
<li><a href="intldateformatter.gettimezone.php#example-2647" class="index">Example#2646 - IntlDateFormatter::getTimeZone examples</a></li>
<li><a href="intldateformatter.islenient.php#example-2648" class="index">Example#2647 - datefmt_is_lenient example</a></li>
<li><a href="intldateformatter.islenient.php#example-2649" class="index">Example#2648 - OO example</a></li>
<li><a href="intldateformatter.localtime.php#example-2650" class="index">Example#2649 - datefmt_localtime example</a></li>
<li><a href="intldateformatter.localtime.php#example-2651" class="index">Example#2650 - OO example</a></li>
<li><a href="intldateformatter.parse.php#example-2652" class="index">Example#2651 - OO example</a></li>
<li><a href="intldateformatter.parse.php#example-2653" class="index">Example#2652 - datefmt_parse example</a></li>
<li><a href="intldateformatter.setcalendar.php#example-2654" class="index">Example#2653 - datefmt_set_calendar example</a></li>
<li><a href="intldateformatter.setcalendar.php#example-2655" class="index">Example#2654 - OO example</a></li>
<li><a href="intldateformatter.setcalendar.php#example-2656" class="index">Example#2655 - Example with IntlCalendar argument</a></li>
<li><a href="intldateformatter.setlenient.php#example-2657" class="index">Example#2656 - datefmt_set_lenient example</a></li>
<li><a href="intldateformatter.setlenient.php#example-2658" class="index">Example#2657 - OO example</a></li>
<li><a href="intldateformatter.setpattern.php#example-2659" class="index">Example#2658 - datefmt_set_pattern example</a></li>
<li><a href="intldateformatter.setpattern.php#example-2660" class="index">Example#2659 - OO example</a></li>
<li><a href="intldateformatter.settimezone.php#example-2661" class="index">Example#2660 - IntlDateFormatter::setTimeZone examples</a></li>
<li><a href="resourcebundle.count.php#example-2662" class="index">Example#2661 - resourcebundle_count example</a></li>
<li><a href="resourcebundle.count.php#example-2663" class="index">Example#2662 - OO example</a></li>
<li><a href="resourcebundle.create.php#example-2664" class="index">Example#2663 - resourcebundle_create example</a></li>
<li><a href="resourcebundle.create.php#example-2665" class="index">Example#2664 - ResourceBundle::create example</a></li>
<li><a href="resourcebundle.get.php#example-2666" class="index">Example#2665 - resourcebundle_get example</a></li>
<li><a href="resourcebundle.get.php#example-2667" class="index">Example#2666 - OO example</a></li>
<li><a href="resourcebundle.geterrorcode.php#example-2668" class="index">Example#2667 - resourcebundle_get_error_code example</a></li>
<li><a href="resourcebundle.geterrorcode.php#example-2669" class="index">Example#2668 - OO example</a></li>
<li><a href="resourcebundle.geterrormessage.php#example-2670" class="index">Example#2669 - resourcebundle_get_error_message example</a></li>
<li><a href="resourcebundle.geterrormessage.php#example-2671" class="index">Example#2670 - OO example</a></li>
<li><a href="resourcebundle.locales.php#example-2672" class="index">Example#2671 - resourcebundle_locales example</a></li>
<li><a href="resourcebundle.locales.php#example-2673" class="index">Example#2672 - OO example</a></li>
<li><a href="spoofchecker.areconfusable.php#example-2674" class="index">Example#2673 - Spoofchecker::areConfusable example</a></li>
<li><a href="spoofchecker.issuspicious.php#example-2675" class="index">Example#2674 - Spoofchecker::isSuspicious example</a></li>
<li><a href="transliterator.listids.php#transliterator.listids.example.basic" class="index">Example#2675 - Retrieving the registered transliterator IDs</a></li>
<li><a href="transliterator.transliterate.php#example-2677" class="index">Example#2676 - Converting escaped UTF-16 code units</a></li>
<li><a href="intldatepatterngenerator.getbestpattern.php#example-2678" class="index">Example#2677 - IntlDatePatternGenerator::getBestPattern example</a></li>
<li><a href="uconverter.transcode.php#example-2679" class="index">Example#2678 - Converting from UTF-8 to UTF-16 and back</a></li>
<li><a href="uconverter.transcode.php#example-2680" class="index">Example#2679 - Invalid characters in input</a></li>
<li><a href="uconverter.transcode.php#example-2681" class="index">Example#2680 - Characters which cannot be encoded</a></li>
<li><a href="function.grapheme-extract.php#example-2682" class="index">Example#2681 - grapheme_extract example</a></li>
<li><a href="function.grapheme-stripos.php#example-2683" class="index">Example#2682 - grapheme_stripos example</a></li>
<li><a href="function.grapheme-stristr.php#example-2684" class="index">Example#2683 - grapheme_stristr example</a></li>
<li><a href="function.grapheme-strlen.php#example-2685" class="index">Example#2684 - grapheme_strlen example</a></li>
<li><a href="function.grapheme-strpos.php#example-2686" class="index">Example#2685 - grapheme_strpos example</a></li>
<li><a href="function.grapheme-strripos.php#example-2687" class="index">Example#2686 - grapheme_strripos example</a></li>
<li><a href="function.grapheme-strrpos.php#example-2688" class="index">Example#2687 - grapheme_strrpos example</a></li>
<li><a href="function.grapheme-strstr.php#example-2689" class="index">Example#2688 - grapheme_strstr example</a></li>
<li><a href="function.grapheme-substr.php#example-2690" class="index">Example#2689 - grapheme_substr example</a></li>
<li><a href="function.idn-to-ascii.php#example-2691" class="index">Example#2690 - idn_to_ascii example</a></li>
<li><a href="function.idn-to-ascii.php#example-2692" class="index">Example#2691 - All-ASCII domain names are just converted to lowercase</a></li>
<li><a href="function.idn-to-utf8.php#example-2693" class="index">Example#2692 - idn_to_utf8 example</a></li>
<li><a href="intlchar.charage.php#example-2694" class="index">Example#2693 - Testing different code points</a></li>
<li><a href="intlchar.chardigitvalue.php#example-2695" class="index">Example#2694 - Testing different code points</a></li>
<li><a href="intlchar.chardirection.php#example-2696" class="index">Example#2695 - Testing different code points</a></li>
<li><a href="intlchar.charfromname.php#example-2697" class="index">Example#2696 - Testing different code points</a></li>
<li><a href="intlchar.charmirror.php#example-2698" class="index">Example#2697 - Testing different code points</a></li>
<li><a href="intlchar.charname.php#example-2699" class="index">Example#2698 - Testing different code points</a></li>
<li><a href="intlchar.chartype.php#example-2700" class="index">Example#2699 - Testing different code points</a></li>
<li><a href="intlchar.chr.php#example-2701" class="index">Example#2700 - Testing different code points</a></li>
<li><a href="intlchar.digit.php#example-2702" class="index">Example#2701 - Testing different code points</a></li>
<li><a href="intlchar.enumcharnames.php#example-2703" class="index">Example#2702 - Enumerating over a sample range of code points</a></li>
<li><a href="intlchar.enumchartypes.php#example-2704" class="index">Example#2703 - Enumerating over a sample range of code points</a></li>
<li><a href="intlchar.fordigit.php#example-2705" class="index">Example#2704 - Testing different code points</a></li>
<li><a href="intlchar.getbidipairedbracket.php#example-2706" class="index">Example#2705 - Testing different code points</a></li>
<li><a href="intlchar.getblockcode.php#example-2707" class="index">Example#2706 - Testing different code points</a></li>
<li><a href="intlchar.getcombiningclass.php#example-2708" class="index">Example#2707 - Testing different code points</a></li>
<li><a href="intlchar.getfc-nfkc-closure.php#example-2709" class="index">Example#2708 - Testing different code points</a></li>
<li><a href="intlchar.getintpropertymaxvalue.php#example-2710" class="index">Example#2709 - Testing different properties</a></li>
<li><a href="intlchar.getintpropertyminvalue.php#example-2711" class="index">Example#2710 - Testing different properties</a></li>
<li><a href="intlchar.getintpropertyvalue.php#example-2712" class="index">Example#2711 - Testing different properties</a></li>
<li><a href="intlchar.getnumericvalue.php#example-2713" class="index">Example#2712 - Testing different code points</a></li>
<li><a href="intlchar.getpropertyenum.php#example-2714" class="index">Example#2713 - Testing different properties</a></li>
<li><a href="intlchar.getpropertyname.php#example-2715" class="index">Example#2714 - Testing different properties</a></li>
<li><a href="intlchar.getpropertyvalueenum.php#example-2716" class="index">Example#2715 - Testing different properties</a></li>
<li><a href="intlchar.getpropertyvaluename.php#example-2717" class="index">Example#2716 - Testing different properties</a></li>
<li><a href="intlchar.getunicodeversion.php#example-2718" class="index">Example#2717 - Testing different properties</a></li>
<li><a href="intlchar.hasbinaryproperty.php#example-2719" class="index">Example#2718 - Testing different properties</a></li>
<li><a href="intlchar.isalnum.php#example-2720" class="index">Example#2719 - Testing different code points</a></li>
<li><a href="intlchar.isalpha.php#example-2721" class="index">Example#2720 - Testing different code points</a></li>
<li><a href="intlchar.isbase.php#example-2722" class="index">Example#2721 - Testing different code points</a></li>
<li><a href="intlchar.isblank.php#example-2723" class="index">Example#2722 - Testing different code points</a></li>
<li><a href="intlchar.iscntrl.php#example-2724" class="index">Example#2723 - Testing different code points</a></li>
<li><a href="intlchar.isdefined.php#example-2725" class="index">Example#2724 - Testing different code points</a></li>
<li><a href="intlchar.isdigit.php#example-2726" class="index">Example#2725 - Testing different code points</a></li>
<li><a href="intlchar.isgraph.php#example-2727" class="index">Example#2726 - Testing different code points</a></li>
<li><a href="intlchar.isidignorable.php#example-2728" class="index">Example#2727 - Testing different code points</a></li>
<li><a href="intlchar.isidpart.php#example-2729" class="index">Example#2728 - Testing different code points</a></li>
<li><a href="intlchar.isidstart.php#example-2730" class="index">Example#2729 - Testing different code points</a></li>
<li><a href="intlchar.isisocontrol.php#example-2731" class="index">Example#2730 - Testing different code points</a></li>
<li><a href="intlchar.isjavaidpart.php#example-2732" class="index">Example#2731 - Testing different code points</a></li>
<li><a href="intlchar.isjavaidstart.php#example-2733" class="index">Example#2732 - Testing different code points</a></li>
<li><a href="intlchar.isjavaspacechar.php#example-2734" class="index">Example#2733 - Testing different code points</a></li>
<li><a href="intlchar.islower.php#example-2735" class="index">Example#2734 - Testing different code points</a></li>
<li><a href="intlchar.ismirrored.php#example-2736" class="index">Example#2735 - Testing different code points</a></li>
<li><a href="intlchar.isprint.php#example-2737" class="index">Example#2736 - Testing different code points</a></li>
<li><a href="intlchar.ispunct.php#example-2738" class="index">Example#2737 - Testing different code points</a></li>
<li><a href="intlchar.isspace.php#example-2739" class="index">Example#2738 - Testing different code points</a></li>
<li><a href="intlchar.istitle.php#example-2740" class="index">Example#2739 - Testing different code points</a></li>
<li><a href="intlchar.isualphabetic.php#example-2741" class="index">Example#2740 - Testing different code points</a></li>
<li><a href="intlchar.isulowercase.php#example-2742" class="index">Example#2741 - Testing different code points</a></li>
<li><a href="intlchar.isupper.php#example-2743" class="index">Example#2742 - Testing different code points</a></li>
<li><a href="intlchar.isuuppercase.php#example-2744" class="index">Example#2743 - Testing different code points</a></li>
<li><a href="intlchar.isuwhitespace.php#example-2745" class="index">Example#2744 - Testing different code points</a></li>
<li><a href="intlchar.iswhitespace.php#example-2746" class="index">Example#2745 - Testing different code points</a></li>
<li><a href="intlchar.isxdigit.php#example-2747" class="index">Example#2746 - Testing different code points</a></li>
<li><a href="intlchar.ord.php#example-2748" class="index">Example#2747 - Testing different code points</a></li>
<li><a href="intlchar.tolower.php#example-2749" class="index">Example#2748 - Testing different code points</a></li>
<li><a href="intlchar.totitle.php#example-2750" class="index">Example#2749 - Testing different code points</a></li>
<li><a href="intlchar.toupper.php#example-2751" class="index">Example#2750 - Testing different code points</a></li>
<li><a href="function.intl-error-name.php#example-2752" class="index">Example#2751 - intl_error_name example</a></li>
<li><a href="function.intl-get-error-code.php#example-2753" class="index">Example#2752 - intl_get_error_code example</a></li>
<li><a href="function.intl-get-error-message.php#example-2754" class="index">Example#2753 - intl_get_error_message example</a></li>
<li><a href="function.intl-is-failure.php#example-2755" class="index">Example#2754 - intl_is_failure example</a></li>
<li><a href="mbstring.configuration.php#example-2756" class="index">Example#2755 - php.ini setting examples</a></li>
<li><a href="mbstring.configuration.php#example-2757" class="index">Example#2756 - php.ini setting for EUC-JP users</a></li>
<li><a href="mbstring.configuration.php#example-2758" class="index">Example#2757 - php.ini setting for SJIS users</a></li>
<li><a href="mbstring.http.php#example-2759" class="index">Example#2758 - Disable HTTP input conversion in php.ini</a></li>
<li><a href="mbstring.http.php#example-2760" class="index">Example#2759 - php.ini setting example</a></li>
<li><a href="mbstring.http.php#example-2761" class="index">Example#2760 - Script example</a></li>
<li><a href="function.mb-chr.php#example-2762" class="index">Example#2761 - Testing different code points</a></li>
<li><a href="function.mb-convert-case.php#example-2763" class="index">Example#2762 - mb_convert_case example</a></li>
<li><a href="function.mb-convert-case.php#example-2764" class="index">Example#2763 - mb_convert_case example with non-Latin UTF-8 text</a></li>
<li><a href="function.mb-convert-encoding.php#example-2765" class="index">Example#2764 - mb_convert_encoding example</a></li>
<li><a href="function.mb-convert-kana.php#example-2766" class="index">Example#2765 - mb_convert_kana example</a></li>
<li><a href="function.mb-convert-variables.php#example-2767" class="index">Example#2766 - mb_convert_variables example</a></li>
<li><a href="function.mb-decode-numericentity.php#example-2768" class="index">Example#2767 - map example</a></li>
<li><a href="function.mb-decode-numericentity.php#example-2769" class="index">Example#2768 - map example escapes JavaScript string</a></li>
<li><a href="function.mb-detect-encoding.php#example-2770" class="index">Example#2769 - mb_detect_encoding example</a></li>
<li><a href="function.mb-detect-encoding.php#example-2771" class="index">Example#2770 - Effect of strict parameter</a></li>
<li><a href="function.mb-detect-encoding.php#example-2772" class="index">Example#2771 - Effect of order when multiple encodings match</a></li>
<li><a href="function.mb-detect-order.php#example-2773" class="index">Example#2772 - mb_detect_order examples</a></li>
<li><a href="function.mb-detect-order.php#example-2774" class="index">Example#2773 - Example showing useless detect orders</a></li>
<li><a href="function.mb-encode-mimeheader.php#example-2775" class="index">Example#2774 - mb_encode_mimeheader example</a></li>
<li><a href="function.mb-encode-numericentity.php#example-2776" class="index">Example#2775 - map example</a></li>
<li><a href="function.mb-encode-numericentity.php#example-2777" class="index">Example#2776 - mb_encode_numericentity example</a></li>
<li><a href="function.mb-encoding-aliases.php#example-2778" class="index">Example#2777 - mb_encoding_aliases example</a></li>
<li><a href="function.mb-ereg-replace-callback.php#example-2779" class="index">Example#2778 - mb_ereg_replace_callback example</a></li>
<li><a href="function.mb-ereg-replace-callback.php#example-2780" class="index">Example#2779 - mb_ereg_replace_callback using anonymous function</a></li>
<li><a href="function.mb-internal-encoding.php#example-2781" class="index">Example#2780 - mb_internal_encoding example</a></li>
<li><a href="function.mb-list-encodings.php#example-2782" class="index">Example#2781 - mb_list_encodings example</a></li>
<li><a href="function.mb-ord.php#example-2783" class="index">Example#2782 - A basic mb_ord example</a></li>
<li><a href="function.mb-output-handler.php#example-2784" class="index">Example#2783 - mb_output_handler example</a></li>
<li><a href="function.mb-preferred-mime-name.php#example-2785" class="index">Example#2784 - mb_preferred_mime_name example</a></li>
<li><a href="function.mb-str-pad.php#example-2786" class="index">Example#2785 - mb_str_pad example</a></li>
<li><a href="function.mb-strimwidth.php#example-2787" class="index">Example#2786 - mb_strimwidth example</a></li>
<li><a href="function.mb-strtolower.php#example-2788" class="index">Example#2787 - mb_strtolower example</a></li>
<li><a href="function.mb-strtolower.php#example-2789" class="index">Example#2788 - mb_strtolower example with non-Latin UTF-8 text</a></li>
<li><a href="function.mb-strtoupper.php#example-2790" class="index">Example#2789 - mb_strtoupper example</a></li>
<li><a href="function.mb-strtoupper.php#example-2791" class="index">Example#2790 - mb_strtoupper example with non-Latin UTF-8 text</a></li>
<li><a href="function.mb-strwidth.php#mb-strwidth.example.basic" class="index">Example#2791 - mb_strwidth example</a></li>
<li><a href="function.mb-substitute-character.php#example-2793" class="index">Example#2792 - mb_substitute_character example</a></li>
<li><a href="function.mb-substr-count.php#example-2794" class="index">Example#2793 - mb_substr_count example</a></li>
<li><a href="function.pspell-add-to-personal.php#example-2795" class="index">Example#2794 - pspell_add_to_personal</a></li>
<li><a href="function.pspell-check.php#example-2796" class="index">Example#2795 - pspell_check Example</a></li>
<li><a href="function.pspell-clear-session.php#example-2797" class="index">Example#2796 - pspell_add_to_personal Example</a></li>
<li><a href="function.pspell-config-create.php#example-2798" class="index">Example#2797 - pspell_config_create</a></li>
<li><a href="function.pspell-config-ignore.php#example-2799" class="index">Example#2798 - pspell_config_ignore</a></li>
<li><a href="function.pspell-config-mode.php#example-2800" class="index">Example#2799 - pspell_config_mode Example</a></li>
<li><a href="function.pspell-config-personal.php#example-2801" class="index">Example#2800 - pspell_config_personal</a></li>
<li><a href="function.pspell-config-repl.php#example-2802" class="index">Example#2801 - pspell_config_repl</a></li>
<li><a href="function.pspell-config-runtogether.php#example-2803" class="index">Example#2802 - pspell_config_runtogether</a></li>
<li><a href="function.pspell-new.php#example-2804" class="index">Example#2803 - pspell_new</a></li>
<li><a href="function.pspell-new-config.php#example-2805" class="index">Example#2804 - pspell_new_config</a></li>
<li><a href="function.pspell-new-personal.php#example-2806" class="index">Example#2805 - pspell_new_personal</a></li>
<li><a href="function.pspell-save-wordlist.php#example-2807" class="index">Example#2806 - pspell_add_to_personal</a></li>
<li><a href="function.pspell-store-replacement.php#example-2808" class="index">Example#2807 - pspell_store_replacement</a></li>
<li><a href="function.pspell-suggest.php#example-2809" class="index">Example#2808 - pspell_suggest example</a></li>
<li><a href="function.recode-file.php#example-2810" class="index">Example#2809 - Basic recode_file example</a></li>
<li><a href="function.recode-string.php#example-2811" class="index">Example#2810 - Basic recode_string example</a></li>
<li><a href="function.exif-imagetype.php#example-2812" class="index">Example#2811 - exif_imagetype example</a></li>
<li><a href="function.exif-read-data.php#example-2813" class="index">Example#2812 - exif_read_data example</a></li>
<li><a href="function.exif-read-data.php#example-2814" class="index">Example#2813 - exif_read_data with streams available as of PHP 7.2.0</a></li>
<li><a href="function.exif-tagname.php#example-2815" class="index">Example#2814 - exif_tagname example</a></li>
<li><a href="function.exif-thumbnail.php#example-2816" class="index">Example#2815 - exif_thumbnail example</a></li>
<li><a href="image.examples-png.php#example-2817" class="index">Example#2816 - PNG creation with PHP</a></li>
<li><a href="image.examples-watermark.php#example-2818" class="index">Example#2817 - Adding watermarks to images using alpha channels</a></li>
<li><a href="image.examples.merged-watermark.php#example-2819" class="index">Example#2818 - Using imagecopymerge to create a translucent watermark</a></li>
<li><a href="function.gd-info.php#example-2820" class="index">Example#2819 - Using gd_info</a></li>
<li><a href="function.getimagesize.php#example-2821" class="index">Example#2820 - getimagesize and MIME types</a></li>
<li><a href="function.getimagesize.php#example-2822" class="index">Example#2821 - getimagesize example</a></li>
<li><a href="function.getimagesize.php#example-2823" class="index">Example#2822 - getimagesize (URL)</a></li>
<li><a href="function.getimagesize.php#example-2824" class="index">Example#2823 - getimagesize() returning IPTC</a></li>
<li><a href="function.getimagesizefromstring.php#example-2825" class="index">Example#2824 - getimagesizefromstring example</a></li>
<li><a href="function.image-type-to-extension.php#example-2826" class="index">Example#2825 - image_type_to_extension example</a></li>
<li><a href="function.image-type-to-mime-type.php#example-2827" class="index">Example#2826 - image_type_to_mime_type example</a></li>
<li><a href="function.image2wbmp.php#example-2828" class="index">Example#2827 - image2wbmp example</a></li>
<li><a href="function.imageaffinematrixconcat.php#example-2829" class="index">Example#2828 - imageaffinematrixconcat example</a></li>
<li><a href="function.imageaffinematrixget.php#example-2830" class="index">Example#2829 - imageaffinematrixget example</a></li>
<li><a href="function.imagealphablending.php#example-2831" class="index">Example#2830 - imagealphablending usage example</a></li>
<li><a href="function.imageantialias.php#example-2832" class="index">Example#2831 - A comparison of two lines, one with anti-aliasing switched on</a></li>
<li><a href="function.imagearc.php#example-2833" class="index">Example#2832 - Drawing a circle with imagearc</a></li>
<li><a href="function.imagebmp.php#example-2834" class="index">Example#2833 - Saving a BMP file</a></li>
<li><a href="function.imagechar.php#example-2835" class="index">Example#2834 - imagechar example</a></li>
<li><a href="function.imagecharup.php#example-2836" class="index">Example#2835 - imagecharup example</a></li>
<li><a href="function.imagecolorallocate.php#example-2837" class="index">Example#2836 - imagecolorallocate example</a></li>
<li><a href="function.imagecolorallocatealpha.php#example-2838" class="index">Example#2837 - Example of using imagecolorallocatealpha</a></li>
<li><a href="function.imagecolorallocatealpha.php#imagecolorallocatealpha.example.convert" class="index">Example#2838 - Convert typical alpha values for use with imagecolorallocatealpha</a></li>
<li><a href="function.imagecolorat.php#example-2840" class="index">Example#2839 - Access distinct RGB values</a></li>
<li><a href="function.imagecolorat.php#example-2841" class="index">Example#2840 - Human-readable RGB values using imagecolorsforindex</a></li>
<li><a href="function.imagecolorclosest.php#example-2842" class="index">Example#2841 - Search for a set of colors in an image</a></li>
<li><a href="function.imagecolorclosestalpha.php#example-2843" class="index">Example#2842 - Search for a set of colors in an image</a></li>
<li><a href="function.imagecolorclosesthwb.php#example-2844" class="index">Example#2843 - Example of using imagecolorclosesthwb</a></li>
<li><a href="function.imagecolordeallocate.php#example-2845" class="index">Example#2844 - Using imagecolordeallocate</a></li>
<li><a href="function.imagecolorexact.php#example-2846" class="index">Example#2845 - Get colors from the GD logo</a></li>
<li><a href="function.imagecolorexactalpha.php#example-2847" class="index">Example#2846 - Get colors from the GD logo</a></li>
<li><a href="function.imagecolormatch.php#example-2848" class="index">Example#2847 - imagecolormatch example</a></li>
<li><a href="function.imagecolorresolve.php#example-2849" class="index">Example#2848 - Using imagecoloresolve to get colors from an image</a></li>
<li><a href="function.imagecolorresolvealpha.php#example-2850" class="index">Example#2849 - Using imagecoloresolvealpha to get colors from an image</a></li>
<li><a href="function.imagecolorset.php#example-2851" class="index">Example#2850 - imagecolorset example</a></li>
<li><a href="function.imagecolorsforindex.php#example-2852" class="index">Example#2851 - imagecolorsforindex example</a></li>
<li><a href="function.imagecolorstotal.php#example-2853" class="index">Example#2852 - Getting total number of colors in an image using imagecolorstotal</a></li>
<li><a href="function.imagecolortransparent.php#example-2854" class="index">Example#2853 - imagecolortransparent example</a></li>
<li><a href="function.imageconvolution.php#example-2855" class="index">Example#2854 - Embossing the PHP.net logo</a></li>
<li><a href="function.imageconvolution.php#example-2856" class="index">Example#2855 - Gaussian blur</a></li>
<li><a href="function.imagecopy.php#example-2857" class="index">Example#2856 - Cropping the PHP.net logo</a></li>
<li><a href="function.imagecopymerge.php#example-2858" class="index">Example#2857 - Merging two copies of the PHP.net logo with 75% transparency</a></li>
<li><a href="function.imagecopymergegray.php#example-2859" class="index">Example#2858 - imagecopymergegray usage</a></li>
<li><a href="function.imagecopyresampled.php#example-2860" class="index">Example#2859 - Simple example</a></li>
<li><a href="function.imagecopyresampled.php#example-2861" class="index">Example#2860 - Resampling an image proportionally</a></li>
<li><a href="function.imagecopyresized.php#example-2862" class="index">Example#2861 - Resizing an image</a></li>
<li><a href="function.imagecreate.php#example-2863" class="index">Example#2862 - Creating a new GD image stream and outputting an image.</a></li>
<li><a href="function.imagecreatefrombmp.php#example-2864" class="index">Example#2863 - Convert an BMP image to a PNG image using imagecreatefrombmp</a></li>
<li><a href="function.imagecreatefromgd.php#example-2865" class="index">Example#2864 - imagecreatefromgd example</a></li>
<li><a href="function.imagecreatefromgd2.php#example-2866" class="index">Example#2865 - imagecreatefromgd2 example</a></li>
<li><a href="function.imagecreatefromgd2part.php#example-2867" class="index">Example#2866 - imagecreatefromgd2part example</a></li>
<li><a href="function.imagecreatefromgif.php#example-2868" class="index">Example#2867 - Example to handle an error during loading of a GIF</a></li>
<li><a href="function.imagecreatefromjpeg.php#example-2869" class="index">Example#2868 - Example to handle an error during loading of a JPEG</a></li>
<li><a href="function.imagecreatefrompng.php#example-2870" class="index">Example#2869 - Example to handle an error during loading of a PNG</a></li>
<li><a href="function.imagecreatefromstring.php#example-2871" class="index">Example#2870 - imagecreatefromstring example</a></li>
<li><a href="function.imagecreatefromwbmp.php#example-2872" class="index">Example#2871 - Example to handle an error during loading of a WBMP</a></li>
<li><a href="function.imagecreatefromwebp.php#example-2873" class="index">Example#2872 - Convert an WebP image to a jpeg image using imagecreatefromwebp</a></li>
<li><a href="function.imagecreatefromxbm.php#example-2874" class="index">Example#2873 - Convert an XBM image to a png image using imagecreatefromxbm</a></li>
<li><a href="function.imagecreatefromxpm.php#example-2875" class="index">Example#2874 - Creating an image instance using imagecreatefromxpm</a></li>
<li><a href="function.imagecreatetruecolor.php#example-2876" class="index">Example#2875 - Creating a new GD image stream and outputting an image.</a></li>
<li><a href="function.imagecrop.php#imagecrop.example.basic" class="index">Example#2876 - imagecrop example</a></li>
<li><a href="function.imagecropauto.php#example-2878" class="index">Example#2877 - Proper handling of auto-cropping</a></li>
<li><a href="function.imagedashedline.php#example-2879" class="index">Example#2878 - imagedashedline example</a></li>
<li><a href="function.imagedashedline.php#example-2880" class="index">Example#2879 - Alternative to imagedashedline</a></li>
<li><a href="function.imagedestroy.php#example-2881" class="index">Example#2880 - Using imagedestroy prior to PHP 8.0.0</a></li>
<li><a href="function.imageellipse.php#example-2882" class="index">Example#2881 - imageellipse example</a></li>
<li><a href="function.imagefill.php#example-2883" class="index">Example#2882 - imagefill example</a></li>
<li><a href="function.imagefilledarc.php#example-2884" class="index">Example#2883 - Creating a 3D looking pie</a></li>
<li><a href="function.imagefilledellipse.php#example-2885" class="index">Example#2884 - imagefilledellipse example</a></li>
<li><a href="function.imagefilledpolygon.php#example-2886" class="index">Example#2885 - imagefilledpolygon example</a></li>
<li><a href="function.imagefilledrectangle.php#example-2887" class="index">Example#2886 - imagefilledrectangle usage</a></li>
<li><a href="function.imagefilltoborder.php#example-2888" class="index">Example#2887 - Filling an ellipse with a color</a></li>
<li><a href="function.imagefilter.php#example-2889" class="index">Example#2888 - imagefilter grayscale example</a></li>
<li><a href="function.imagefilter.php#example-2890" class="index">Example#2889 - imagefilter brightness example</a></li>
<li><a href="function.imagefilter.php#example-2891" class="index">Example#2890 - imagefilter colorize example</a></li>
<li><a href="function.imagefilter.php#example-2892" class="index">Example#2891 - imagefilter negate example</a></li>
<li><a href="function.imagefilter.php#example-2893" class="index">Example#2892 - imagefilter pixelate example</a></li>
<li><a href="function.imagefilter.php#example-2894" class="index">Example#2893 - imagefilter scatter example</a></li>
<li><a href="function.imageflip.php#example-2895" class="index">Example#2894 - Flips an image vertically</a></li>
<li><a href="function.imageflip.php#example-2896" class="index">Example#2895 - Flips the image horizontally</a></li>
<li><a href="function.imagefontheight.php#example-2897" class="index">Example#2896 - Using imagefontheight on built-in fonts</a></li>
<li><a href="function.imagefontheight.php#example-2898" class="index">Example#2897 - Using imagefontheight together with imageloadfont</a></li>
<li><a href="function.imagefontwidth.php#example-2899" class="index">Example#2898 - Using imagefontwidth on built-in fonts</a></li>
<li><a href="function.imagefontwidth.php#example-2900" class="index">Example#2899 - Using imagefontwidth together with imageloadfont</a></li>
<li><a href="function.imageftbbox.php#example-2901" class="index">Example#2900 - imageftbbox example</a></li>
<li><a href="function.imagefttext.php#example-2902" class="index">Example#2901 - imagefttext example</a></li>
<li><a href="function.imagegammacorrect.php#example-2903" class="index">Example#2902 - imagegammacorrect usage</a></li>
<li><a href="function.imagegd.php#example-2904" class="index">Example#2903 - Outputting a GD image</a></li>
<li><a href="function.imagegd.php#example-2905" class="index">Example#2904 - Saving a GD image</a></li>
<li><a href="function.imagegd2.php#example-2906" class="index">Example#2905 - Outputting a GD2 image</a></li>
<li><a href="function.imagegd2.php#example-2907" class="index">Example#2906 - Saving a GD2 image</a></li>
<li><a href="function.imagegetclip.php#imagegetclip.example.basic" class="index">Example#2907 - imagegetclip example</a></li>
<li><a href="function.imagegif.php#example-2909" class="index">Example#2908 - Outputting an image using imagegif</a></li>
<li><a href="function.imagegif.php#example-2910" class="index">Example#2909 - Converting a PNG image to GIF using imagegif</a></li>
<li><a href="function.imagegrabscreen.php#example-2911" class="index">Example#2910 - imagegrabscreen example</a></li>
<li><a href="function.imagegrabwindow.php#example-2912" class="index">Example#2911 - imagegrabwindow example</a></li>
<li><a href="function.imageinterlace.php#example-2913" class="index">Example#2912 - Turn on interlacing using imageinterlace</a></li>
<li><a href="function.imageistruecolor.php#example-2914" class="index">Example#2913 - Simple detection of true color image instances using imageistruecolor</a></li>
<li><a href="function.imagejpeg.php#example-2915" class="index">Example#2914 - Outputting a JPEG image to the browser</a></li>
<li><a href="function.imagejpeg.php#example-2916" class="index">Example#2915 - Saving a JPEG image to a file</a></li>
<li><a href="function.imagejpeg.php#example-2917" class="index">Example#2916 - Outputting the image at 75% quality to the browser</a></li>
<li><a href="function.imagelayereffect.php#example-2918" class="index">Example#2917 - imagelayereffect example</a></li>
<li><a href="function.imageline.php#example-2919" class="index">Example#2918 - Drawing a thick line</a></li>
<li><a href="function.imageloadfont.php#example-2920" class="index">Example#2919 - imageloadfont usage example</a></li>
<li><a href="function.imageopenpolygon.php#example-2921" class="index">Example#2920 - imageopenpolygon example</a></li>
<li><a href="function.imagepalettecopy.php#example-2922" class="index">Example#2921 - imagepalettecopy example</a></li>
<li><a href="function.imagepalettetotruecolor.php#example-2923" class="index">Example#2922 - Converts any image object to true color</a></li>
<li><a href="function.imagepolygon.php#example-2924" class="index">Example#2923 - imagepolygon example</a></li>
<li><a href="function.imagerectangle.php#example-2925" class="index">Example#2924 - Simple imagerectangle example</a></li>
<li><a href="function.imageresolution.php#imageresolution.example.basic" class="index">Example#2925 - Setting and getting the resolution of an image</a></li>
<li><a href="function.imagerotate.php#example-2927" class="index">Example#2926 - Rotate an image 180 degrees</a></li>
<li><a href="function.imagesavealpha.php#example-2928" class="index">Example#2927 - Basic imagesavealpha Usage</a></li>
<li><a href="function.imagesetbrush.php#example-2929" class="index">Example#2928 - imagesetbrush example</a></li>
<li><a href="function.imagesetinterpolation.php#example-2930" class="index">Example#2929 - imagesetinterpolation example</a></li>
<li><a href="function.imagesetpixel.php#example-2931" class="index">Example#2930 - imagesetpixel example</a></li>
<li><a href="function.imagesetstyle.php#example-2932" class="index">Example#2931 - imagesetstyle example</a></li>
<li><a href="function.imagesetthickness.php#example-2933" class="index">Example#2932 - imagesetthickness example</a></li>
<li><a href="function.imagesettile.php#example-2934" class="index">Example#2933 - imagesettile example</a></li>
<li><a href="function.imagestring.php#example-2935" class="index">Example#2934 - imagestring example</a></li>
<li><a href="function.imagestringup.php#example-2936" class="index">Example#2935 - imagestringup example</a></li>
<li><a href="function.imagesx.php#example-2937" class="index">Example#2936 - Using imagesx</a></li>
<li><a href="function.imagesy.php#example-2938" class="index">Example#2937 - Using imagesy</a></li>
<li><a href="function.imagetruecolortopalette.php#example-2939" class="index">Example#2938 - Converting a true color image to a palette-based image</a></li>
<li><a href="function.imagettfbbox.php#example-2940" class="index">Example#2939 - imagettfbbox example</a></li>
<li><a href="function.imagettftext.php#example-2941" class="index">Example#2940 - imagettftext example</a></li>
<li><a href="function.imagetypes.php#example-2942" class="index">Example#2941 - Checking for PNG support</a></li>
<li><a href="function.imagewbmp.php#example-2943" class="index">Example#2942 - Outputting a WBMP image</a></li>
<li><a href="function.imagewbmp.php#example-2944" class="index">Example#2943 - Saving the WBMP image</a></li>
<li><a href="function.imagewbmp.php#example-2945" class="index">Example#2944 - Outputting the image with a different foreground</a></li>
<li><a href="function.imagewebp.php#example-2946" class="index">Example#2945 - Saving an WebP file</a></li>
<li><a href="function.imagexbm.php#example-2947" class="index">Example#2946 - Saving an XBM file</a></li>
<li><a href="function.imagexbm.php#example-2948" class="index">Example#2947 - Saving an XBM file with a different foreground color</a></li>
<li><a href="function.iptcembed.php#example-2949" class="index">Example#2948 - Embedding IPTC data into a JPEG</a></li>
<li><a href="function.iptcparse.php#example-2950" class="index">Example#2949 - iptcparse() used together with getimagesize</a></li>
<li><a href="function.jpeg2wbmp.php#example-2951" class="index">Example#2950 - jpeg2wbmp example</a></li>
<li><a href="function.png2wbmp.php#example-2952" class="index">Example#2951 - png2wbmp example</a></li>
<li><a href="gmagick.examples.php#example-2953" class="index">Example#2952 - Gmagick Example</a></li>
<li><a href="gmagick.despeckleimage.php#example-2954" class="index">Example#2953 - Gmagick::despeckleimage example</a></li>
<li><a href="gmagick.setcompressionquality.php#example-2955" class="index">Example#2954 - Gmagick::setCompressionQuality</a></li>
<li><a href="imagick.examples-1.php#example-2956" class="index">Example#2955 - Creating a thumbnail in Imagick</a></li>
<li><a href="imagick.examples-1.php#example-2957" class="index">Example#2956 - Make a thumbnail of all JPG files in a directory</a></li>
<li><a href="imagick.examples-1.php#example-2958" class="index">Example#2957 - Creating a reflection of an image</a></li>
<li><a href="imagick.examples-1.php#example-2959" class="index">Example#2958 - Filling text with gradient</a></li>
<li><a href="imagick.examples-1.php#example-2960" class="index">Example#2959 - Read in GIF image and resize all frames</a></li>
<li><a href="imagick.examples-1.php#example-2961" class="index">Example#2960 - Create a PHP logo</a></li>
<li><a href="imagick.adaptiveblurimage.php#example-2962" class="index">Example#2961 - Using Imagick::adaptiveBlurImage:</a></li>
<li><a href="imagick.adaptiveresizeimage.php#example-2963" class="index">Example#2962 - Using Imagick::adaptiveResizeImage</a></li>
<li><a href="imagick.adaptivesharpenimage.php#example-2964" class="index">Example#2963 - A Imagick::adaptiveSharpenImage example</a></li>
<li><a href="imagick.adaptivethresholdimage.php#example-2965" class="index">Example#2964 - Imagick::adaptiveThresholdImage</a></li>
<li><a href="imagick.addnoiseimage.php#example-2966" class="index">Example#2965 - Imagick::addNoiseImage</a></li>
<li><a href="imagick.affinetransformimage.php#example-2967" class="index">Example#2966 - Imagick::affineTransformImage</a></li>
<li><a href="imagick.annotateimage.php#example-2968" class="index">Example#2967 - Using Imagick::annotateImage:</a></li>
<li><a href="imagick.appendimages.php#example-2969" class="index">Example#2968 - Imagick::appendImages example</a></li>
<li><a href="imagick.autolevelimage.php#example-2970" class="index">Example#2969 - Imagick::autoLevelImage</a></li>
<li><a href="imagick.blackthresholdimage.php#example-2971" class="index">Example#2970 - Imagick::blackThresholdImage</a></li>
<li><a href="imagick.blueshiftimage.php#example-2972" class="index">Example#2971 - Imagick::blueShiftImage</a></li>
<li><a href="imagick.blurimage.php#example-2973" class="index">Example#2972 - Using Imagick::blurImage:</a></li>
<li><a href="imagick.borderimage.php#example-2974" class="index">Example#2973 - Imagick::borderImage</a></li>
<li><a href="imagick.brightnesscontrastimage.php#example-2975" class="index">Example#2974 - Imagick::brightnessContrastImage</a></li>
<li><a href="imagick.charcoalimage.php#example-2976" class="index">Example#2975 - Imagick::charcoalImage</a></li>
<li><a href="imagick.chopimage.php#example-2977" class="index">Example#2976 - Using Imagick::chopImage:</a></li>
<li><a href="imagick.clone.php#example-2978" class="index">Example#2977 - Imagick object cloning in different versions of imagick</a></li>
<li><a href="imagick.clutimage.php#example-2979" class="index">Example#2978 - Using Imagick::clutImage:</a></li>
<li><a href="imagick.colorizeimage.php#example-2980" class="index">Example#2979 - Imagick::colorizeImage</a></li>
<li><a href="imagick.colormatriximage.php#example-2981" class="index">Example#2980 - Imagick::colorMatrixImage</a></li>
<li><a href="imagick.commentimage.php#example-2982" class="index">Example#2981 - Using Imagick::commentImage:</a></li>
<li><a href="imagick.compareimagelayers.php#example-2983" class="index">Example#2982 - Using Imagick::compareImageLayers</a></li>
<li><a href="imagick.compareimages.php#example-2984" class="index">Example#2983 - Using Imagick::compareImages:</a></li>
<li><a href="imagick.compositeimage.php#example-2985" class="index">Example#2984 - Using Imagick::compositeImage:</a></li>
<li><a href="imagick.contrastimage.php#example-2986" class="index">Example#2985 - Imagick::contrastImage</a></li>
<li><a href="imagick.convolveimage.php#example-2987" class="index">Example#2986 - Imagick::convolveImage</a></li>
<li><a href="imagick.cropimage.php#example-2988" class="index">Example#2987 - Imagick::cropImage</a></li>
<li><a href="imagick.deskewimage.php#example-2989" class="index">Example#2988 - Imagick::deskewImage</a></li>
<li><a href="imagick.despeckleimage.php#example-2990" class="index">Example#2989 - Imagick::despeckleImage</a></li>
<li><a href="imagick.distortimage.php#example-2991" class="index">Example#2990 - Using Imagick::distortImage:</a></li>
<li><a href="imagick.edgeimage.php#example-2992" class="index">Example#2991 - Imagick::edgeImage</a></li>
<li><a href="imagick.embossimage.php#example-2993" class="index">Example#2992 - Imagick::embossImage</a></li>
<li><a href="imagick.enhanceimage.php#example-2994" class="index">Example#2993 - Imagick::enhanceImage</a></li>
<li><a href="imagick.equalizeimage.php#example-2995" class="index">Example#2994 - Imagick::equalizeImage</a></li>
<li><a href="imagick.evaluateimage.php#example-2996" class="index">Example#2995 - Using Imagick::evaluateImage</a></li>
<li><a href="imagick.exportimagepixels.php#example-2997" class="index">Example#2996 - Using Imagick::exportImagePixels</a></li>
<li><a href="imagick.filter.php#example-2998" class="index">Example#2997 - Imagick::filter</a></li>
<li><a href="imagick.flipimage.php#example-2999" class="index">Example#2998 - Imagick::flipImage</a></li>
<li><a href="imagick.floodfillpaintimage.php#example-3000" class="index">Example#2999 - Imagick::floodfillPaintImage example</a></li>
<li><a href="imagick.flopimage.php#example-3001" class="index">Example#3000 - Imagick::flopImage</a></li>
<li><a href="imagick.forwardfouriertransformimage.php#example-3002" class="index">Example#3001 - Imagick::forwardFourierTransformImage</a></li>
<li><a href="imagick.frameimage.php#example-3003" class="index">Example#3002 - Imagick::frameImage</a></li>
<li><a href="imagick.functionimage.php#example-3004" class="index">Example#3003 - Create a sinusoidal gradient</a></li>
<li><a href="imagick.functionimage.php#example-3005" class="index">Example#3004 - Create a gradient from the polynomial (4x^2 - 4x + 1)</a></li>
<li><a href="imagick.functionimage.php#example-3006" class="index">Example#3005 - Create a complex gradient from the
     polynomial (4x^2 - 4x^2 + 1) modulated by a sinusoidal gradient</a></li>
<li><a href="imagick.fximage.php#example-3007" class="index">Example#3006 - Imagick::fxImage</a></li>
<li><a href="imagick.gammaimage.php#example-3008" class="index">Example#3007 - Imagick::gammaImage</a></li>
<li><a href="imagick.gaussianblurimage.php#example-3009" class="index">Example#3008 - Imagick::gaussianBlurImage</a></li>
<li><a href="imagick.getimagegeometry.php#example-3010" class="index">Example#3009 - Using Imagick::getImageGeometry</a></li>
<li><a href="imagick.getimagehistogram.php#example-3011" class="index">Example#3010 - Generates  Imagick::getImageHistogram</a></li>
<li><a href="imagick.getimagelength.php#example-3012" class="index">Example#3011 - Using Imagick::getImageLength:</a></li>
<li><a href="imagick.getimageproperties.php#example-3013" class="index">Example#3012 - Using Imagick::getImageProperties:</a></li>
<li><a href="imagick.getimageproperty.php#example-3014" class="index">Example#3013 - Using Imagick::getImageProperty:</a></li>
<li><a href="imagick.getiteratorindex.php#example-3015" class="index">Example#3014 - Using Imagick::getIteratorIndex:</a></li>
<li><a href="imagick.getpixeliterator.php#example-3016" class="index">Example#3015 - Imagick::getPixelIterator</a></li>
<li><a href="imagick.getpixelregioniterator.php#example-3017" class="index">Example#3016 - Imagick::getPixelRegionIterator example</a></li>
<li><a href="imagick.getsize.php#example-3018" class="index">Example#3017 - Getting the size of a raw RGB image set at 200x400, after scaling to 400x800 (compared to width / height)</a></li>
<li><a href="imagick.haldclutimage.php#example-3019" class="index">Example#3018 - Imagick::haldClutImage</a></li>
<li><a href="imagick.identifyformat.php#example-3020" class="index">Example#3019 - Imagick::identifyFormat</a></li>
<li><a href="imagick.identifyimage.php#example-3021" class="index">Example#3020 - Example Result Format</a></li>
<li><a href="imagick.implodeimage.php#example-3022" class="index">Example#3021 - Imagick::implodeImage</a></li>
<li><a href="imagick.importimagepixels.php#example-3023" class="index">Example#3022 - Imagick::importImagePixels example</a></li>
<li><a href="imagick.levelimage.php#example-3024" class="index">Example#3023 - Imagick::levelImage</a></li>
<li><a href="imagick.linearstretchimage.php#example-3025" class="index">Example#3024 - Imagick::linearStretchImage</a></li>
<li><a href="imagick.magnifyimage.php#example-3026" class="index">Example#3025 - Imagick::magnifyImage</a></li>
<li><a href="imagick.medianfilterimage.php#example-3027" class="index">Example#3026 - Imagick::medianFilterImage</a></li>
<li><a href="imagick.mergeimagelayers.php#example-3028" class="index">Example#3027 - Imagick::mergeImageLayers</a></li>
<li><a href="imagick.modulateimage.php#example-3029" class="index">Example#3028 - Imagick::modulateImage</a></li>
<li><a href="imagick.morphology.php#example-3030" class="index">Example#3029 - Convolve Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3031" class="index">Example#3030 - Correlate Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3032" class="index">Example#3031 - Erode Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3033" class="index">Example#3032 - Erode Intensity Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3034" class="index">Example#3033 - Dilate Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3035" class="index">Example#3034 - Dilate intensity Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3036" class="index">Example#3035 - Distance with Chebyshev kernel Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3037" class="index">Example#3036 - Distance with Manhattan kernel Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3038" class="index">Example#3037 - Distance with ocatagonal kernel Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3039" class="index">Example#3038 - Distance with Euclidean kernel Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3040" class="index">Example#3039 - Edge Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3041" class="index">Example#3040 - Open Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3042" class="index">Example#3041 - Open intensity Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3043" class="index">Example#3042 - Close Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3044" class="index">Example#3043 - Close Intensity Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3045" class="index">Example#3044 - Smooth Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3046" class="index">Example#3045 - Edge in Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3047" class="index">Example#3046 - Edge out Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3048" class="index">Example#3047 - The 'TopHat' method, or more specifically 'White Top Hat', returns the pixels that were removed by a Opening of the shape, that is the pixels that were removed to round off the points, and the connecting bridged between shapes. Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3049" class="index">Example#3048 - The 'BottomHat' method, also known as 'Black TopHat' is the pixels that a Closing of the shape adds to the image. That is the pixels that were used to fill in the 'holes', 'gaps', and 'bridges'. Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3050" class="index">Example#3049 - Hit and Miss Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3051" class="index">Example#3050 - Thinning Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3052" class="index">Example#3051 - Thicken Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3053" class="index">Example#3052 - Thick to generate a convex hull Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3054" class="index">Example#3053 - Iterative morphology Imagick::morphology</a></li>
<li><a href="imagick.morphology.php#example-3055" class="index">Example#3054 - Helper function to get an image silhouette Imagick::morphology</a></li>
<li><a href="imagick.motionblurimage.php#example-3056" class="index">Example#3055 - Imagick::motionBlurImage</a></li>
<li><a href="imagick.negateimage.php#example-3057" class="index">Example#3056 - Imagick::negateImage</a></li>
<li><a href="imagick.newimage.php#example-3058" class="index">Example#3057 - Using Imagick::newImage:</a></li>
<li><a href="imagick.newpseudoimage.php#example-3059" class="index">Example#3058 - Imagick::newPseudoImage</a></li>
<li><a href="imagick.normalizeimage.php#example-3060" class="index">Example#3059 - Imagick::normalizeImage</a></li>
<li><a href="imagick.oilpaintimage.php#example-3061" class="index">Example#3060 - Imagick::oilPaintImage</a></li>
<li><a href="imagick.optimizeimagelayers.php#example-3062" class="index">Example#3061 - Using Imagick::optimizeImageLayers</a></li>
<li><a href="imagick.orderedposterizeimage.php#example-3063" class="index">Example#3062 - Imagick::orderedPosterizeImage</a></li>
<li><a href="imagick.pingimageblob.php#example-3064" class="index">Example#3063 - Using Imagick::pingImageBlob</a></li>
<li><a href="imagick.pingimagefile.php#example-3065" class="index">Example#3064 - Using Imagick::pingImageFile</a></li>
<li><a href="imagick.polaroidimage.php#example-3066" class="index">Example#3065 - A Imagick::polaroidImage example</a></li>
<li><a href="imagick.posterizeimage.php#example-3067" class="index">Example#3066 - Imagick::posterizeImage</a></li>
<li><a href="imagick.quantizeimage.php#example-3068" class="index">Example#3067 - Imagick::quantizeImage</a></li>
<li><a href="imagick.queryfontmetrics.php#example-3069" class="index">Example#3068 - Using Imagick::queryFontMetrics:</a></li>
<li><a href="imagick.queryfonts.php#example-3070" class="index">Example#3069 - Imagick::queryFonts</a></li>
<li><a href="imagick.queryformats.php#example-3071" class="index">Example#3070 - Imagick::queryFormats</a></li>
<li><a href="imagick.radialblurimage.php#example-3072" class="index">Example#3071 - Imagick::radialBlurImage</a></li>
<li><a href="imagick.raiseimage.php#example-3073" class="index">Example#3072 - Imagick::raiseImage</a></li>
<li><a href="imagick.randomthresholdimage.php#example-3074" class="index">Example#3073 - Imagick::randomThresholdImage</a></li>
<li><a href="imagick.readimageblob.php#example-3075" class="index">Example#3074 - Imagick::readImageBlob</a></li>
<li><a href="imagick.recolorimage.php#example-3076" class="index">Example#3075 - Imagick::recolorImage</a></li>
<li><a href="imagick.reducenoiseimage.php#example-3077" class="index">Example#3076 - Imagick::reduceNoiseImage</a></li>
<li><a href="imagick.resampleimage.php#example-3078" class="index">Example#3077 - Imagick::resampleImage</a></li>
<li><a href="imagick.resizeimage.php#example-3079" class="index">Example#3078 - Imagick::resizeImage</a></li>
<li><a href="imagick.rollimage.php#example-3080" class="index">Example#3079 - Imagick::rollImage</a></li>
<li><a href="imagick.rotateimage.php#example-3081" class="index">Example#3080 - Imagick::rotateImage</a></li>
<li><a href="imagick.rotationalblurimage.php#example-3082" class="index">Example#3081 - Imagick::rotationalBlurImage</a></li>
<li><a href="imagick.roundcorners.php#example-3083" class="index">Example#3082 - Using Imagick::roundCorners:</a></li>
<li><a href="imagick.scaleimage.php#example-3084" class="index">Example#3083 - Imagick::scaleImage</a></li>
<li><a href="imagick.segmentimage.php#example-3085" class="index">Example#3084 - Imagick::segmentImage</a></li>
<li><a href="imagick.selectiveblurimage.php#example-3086" class="index">Example#3085 - Imagick::selectiveBlurImage</a></li>
<li><a href="imagick.separateimagechannel.php#example-3087" class="index">Example#3086 - Imagick::separateImageChannel</a></li>
<li><a href="imagick.sepiatoneimage.php#example-3088" class="index">Example#3087 - Imagick::sepiaToneImage</a></li>
<li><a href="imagick.setcompressionquality.php#example-3089" class="index">Example#3088 - Imagick::setCompressionQuality</a></li>
<li><a href="imagick.setfont.php#example-3090" class="index">Example#3089 - A Imagick::setFont example</a></li>
<li><a href="imagick.setimage.php#example-3091" class="index">Example#3090 - A Imagick::setImage example</a></li>
<li><a href="imagick.setimageartifact.php#example-3092" class="index">Example#3091 - Imagick::setImageArtifact</a></li>
<li><a href="imagick.setimagebias.php#example-3093" class="index">Example#3092 - Imagick::setImageBias</a></li>
<li><a href="imagick.setimageclipmask.php#example-3094" class="index">Example#3093 - Imagick::setImageClipMask</a></li>
<li><a href="imagick.setimagecompressionquality.php#example-3095" class="index">Example#3094 - Imagick::setImageCompressionQuality</a></li>
<li><a href="imagick.setimagedelay.php#example-3096" class="index">Example#3095 - Modify animated Gif with Imagick::setImageDelay</a></li>
<li><a href="imagick.setimageiterations.php#example-3097" class="index">Example#3096 - Basic Imagick::setImageIterations usage</a></li>
<li><a href="imagick.setimageopacity.php#example-3098" class="index">Example#3097 - A Imagick::setImageOpacity example</a></li>
<li><a href="imagick.setimageorientation.php#example-3099" class="index">Example#3098 - Imagick::setImageOrientation</a></li>
<li><a href="imagick.setimageproperty.php#example-3100" class="index">Example#3099 - Using Imagick::setImageProperty:</a></li>
<li><a href="imagick.setimageresolution.php#example-3101" class="index">Example#3100 - Imagick::setImageResolution</a></li>
<li><a href="imagick.setimagetickspersecond.php#example-3102" class="index">Example#3101 - Modify animated Gif with Imagick::setImageTicksPerSecond</a></li>
<li><a href="imagick.setiteratorindex.php#example-3103" class="index">Example#3102 - Using Imagick::setIteratorIndex:</a></li>
<li><a href="imagick.setoption.php#example-3104" class="index">Example#3103 - Attempt to reach '$extent' sizeImagick::setOption</a></li>
<li><a href="imagick.setoption.php#example-3105" class="index">Example#3104 - Imagick::setOption</a></li>
<li><a href="imagick.setoption.php#example-3106" class="index">Example#3105 - Imagick::setOption</a></li>
<li><a href="imagick.setpointsize.php#example-3107" class="index">Example#3106 - A Imagick::setPointSize example</a></li>
<li><a href="imagick.setprogressmonitor.php#example-3108" class="index">Example#3107 - Imagick::setProgressMonitor</a></li>
<li><a href="imagick.setsamplingfactors.php#example-3109" class="index">Example#3108 - Imagick::setSamplingFactors</a></li>
<li><a href="imagick.shadeimage.php#example-3110" class="index">Example#3109 - Imagick::shadeImage</a></li>
<li><a href="imagick.shadowimage.php#example-3111" class="index">Example#3110 - Imagick::shadowImage</a></li>
<li><a href="imagick.sharpenimage.php#example-3112" class="index">Example#3111 - Imagick::sharpenImage</a></li>
<li><a href="imagick.shaveimage.php#example-3113" class="index">Example#3112 - Imagick::shaveImage</a></li>
<li><a href="imagick.shearimage.php#example-3114" class="index">Example#3113 - Imagick::shearImage</a></li>
<li><a href="imagick.sigmoidalcontrastimage.php#example-3115" class="index">Example#3114 - Create a gradient image using Imagick::sigmoidalContrastImage
     suitable for blending two images together smoothly, with the blending
     defined by $contrast and $the midpoint</a></li>
<li><a href="imagick.sketchimage.php#example-3116" class="index">Example#3115 - Imagick::sketchImage</a></li>
<li><a href="imagick.smushimages.php#example-3117" class="index">Example#3116 - Imagick::smushImages</a></li>
<li><a href="imagick.solarizeimage.php#example-3118" class="index">Example#3117 - Imagick::solarizeImage</a></li>
<li><a href="imagick.sparsecolorimage.php#example-3119" class="index">Example#3118 - SPARSECOLORMETHOD_BARYCENTRIC Imagick::sparseColorImage</a></li>
<li><a href="imagick.sparsecolorimage.php#example-3120" class="index">Example#3119 - SPARSECOLORMETHOD_BILINEAR Imagick::sparseColorImage</a></li>
<li><a href="imagick.sparsecolorimage.php#example-3121" class="index">Example#3120 - SPARSECOLORMETHOD_SPEPARDS Imagick::sparseColorImage</a></li>
<li><a href="imagick.sparsecolorimage.php#example-3122" class="index">Example#3121 - SPARSECOLORMETHOD_VORONOI Imagick::sparseColorImage</a></li>
<li><a href="imagick.sparsecolorimage.php#example-3123" class="index">Example#3122 - SPARSECOLORMETHOD_BARYCENTRIC Imagick::sparseColorImage</a></li>
<li><a href="imagick.sparsecolorimage.php#example-3124" class="index">Example#3123 - createGradientImage is used by other examples. Imagick::sparseColorImage</a></li>
<li><a href="imagick.spliceimage.php#example-3125" class="index">Example#3124 - Imagick::spliceImage</a></li>
<li><a href="imagick.spreadimage.php#example-3126" class="index">Example#3125 - Imagick::spreadImage</a></li>
<li><a href="imagick.statisticimage.php#example-3127" class="index">Example#3126 - Imagick::statisticImage</a></li>
<li><a href="imagick.subimagematch.php#example-3128" class="index">Example#3127 - Imagick::subImageMatch</a></li>
<li><a href="imagick.swirlimage.php#example-3129" class="index">Example#3128 - Imagick::swirlImage</a></li>
<li><a href="imagick.textureimage.php#example-3130" class="index">Example#3129 - Imagick::textureImage</a></li>
<li><a href="imagick.thresholdimage.php#example-3131" class="index">Example#3130 - Imagick::thresholdImage</a></li>
<li><a href="imagick.thumbnailimage.php#example-3132" class="index">Example#3131 - Imagick::thumbnailImage</a></li>
<li><a href="imagick.tintimage.php#example-3133" class="index">Example#3132 - Imagick::tintImage</a></li>
<li><a href="imagick.transformimage.php#example-3134" class="index">Example#3133 - Using Imagick::transformImage:</a></li>
<li><a href="imagick.transformimagecolorspace.php#classname.methodname.example.basic" class="index">Example#3134 - Imagick::transformImageColorspace example</a></li>
<li><a href="imagick.transparentpaintimage.php#example-3136" class="index">Example#3135 - Imagick::transparentPaintImage</a></li>
<li><a href="imagick.transposeimage.php#example-3137" class="index">Example#3136 - Imagick::transposeImage</a></li>
<li><a href="imagick.transverseimage.php#example-3138" class="index">Example#3137 - Imagick::transverseImage</a></li>
<li><a href="imagick.trimimage.php#example-3139" class="index">Example#3138 - Using Imagick::trimImage:</a></li>
<li><a href="imagick.uniqueimagecolors.php#example-3140" class="index">Example#3139 - Imagick::uniqueImageColors</a></li>
<li><a href="imagick.unsharpmaskimage.php#example-3141" class="index">Example#3140 - Imagick::unsharpMaskImage</a></li>
<li><a href="imagick.vignetteimage.php#example-3142" class="index">Example#3141 - Imagick::vignetteImage</a></li>
<li><a href="imagick.waveimage.php#example-3143" class="index">Example#3142 - WaveImage can be quite slow Imagick::waveImage</a></li>
<li><a href="imagick.whitethresholdimage.php#example-3144" class="index">Example#3143 - Imagick::whiteThresholdImage</a></li>
<li><a href="imagickdraw.affine.php#example-3145" class="index">Example#3144 - ImagickDraw::affine example</a></li>
<li><a href="imagickdraw.arc.php#example-3146" class="index">Example#3145 - ImagickDraw::arc example</a></li>
<li><a href="imagickdraw.bezier.php#example-3147" class="index">Example#3146 - ImagickDraw::bezier example</a></li>
<li><a href="imagickdraw.circle.php#example-3148" class="index">Example#3147 - ImagickDraw::circle example</a></li>
<li><a href="imagickdraw.composite.php#example-3149" class="index">Example#3148 - ImagickDraw::composite example</a></li>
<li><a href="imagickdraw.ellipse.php#example-3150" class="index">Example#3149 - ImagickDraw::ellipse example</a></li>
<li><a href="imagickdraw.line.php#example-3151" class="index">Example#3150 - ImagickDraw::line example</a></li>
<li><a href="imagickdraw.matte.php#example-3152" class="index">Example#3151 - ImagickDraw::matte example</a></li>
<li><a href="imagickdraw.pathcurvetoquadraticbezierabsolute.php#example-3153" class="index">Example#3152 - ImagickDraw::pathCurveToQuadraticBezierAbsolute example</a></li>
<li><a href="imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php#example-3154" class="index">Example#3153 - ImagickDraw::pathCurveToQuadraticBezierSmoothAbsolute example</a></li>
<li><a href="imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php#example-3155" class="index">Example#3154 - ImagickDraw::pathCurveToQuadraticBezierSmoothRelative example</a></li>
<li><a href="imagickdraw.pathstart.php#example-3156" class="index">Example#3155 - ImagickDraw::pathStart example</a></li>
<li><a href="imagickdraw.point.php#example-3157" class="index">Example#3156 - ImagickDraw::point example</a></li>
<li><a href="imagickdraw.polygon.php#example-3158" class="index">Example#3157 - ImagickDraw::polygon example</a></li>
<li><a href="imagickdraw.polyline.php#example-3159" class="index">Example#3158 - ImagickDraw::polyline example</a></li>
<li><a href="imagickdraw.popdefs.php#example-3160" class="index">Example#3159 - ImagickDraw::popDefs example</a></li>
<li><a href="imagickdraw.push.php#example-3161" class="index">Example#3160 - ImagickDraw::push example</a></li>
<li><a href="imagickdraw.pushpattern.php#example-3162" class="index">Example#3161 - ImagickDraw::pushPattern example</a></li>
<li><a href="imagickdraw.rectangle.php#example-3163" class="index">Example#3162 - ImagickDraw::rectangle example</a></li>
<li><a href="imagickdraw.rotate.php#example-3164" class="index">Example#3163 - ImagickDraw::rotate example</a></li>
<li><a href="imagickdraw.roundrectangle.php#example-3165" class="index">Example#3164 - ImagickDraw::roundRectangle example</a></li>
<li><a href="imagickdraw.scale.php#example-3166" class="index">Example#3165 - ImagickDraw::scale example</a></li>
<li><a href="imagickdraw.setclippath.php#example-3167" class="index">Example#3166 - ImagickDraw::setClipPath example</a></li>
<li><a href="imagickdraw.setcliprule.php#example-3168" class="index">Example#3167 - ImagickDraw::setClipRule example</a></li>
<li><a href="imagickdraw.setclipunits.php#example-3169" class="index">Example#3168 - ImagickDraw::setClipUnits example</a></li>
<li><a href="imagickdraw.setfillalpha.php#example-3170" class="index">Example#3169 - ImagickDraw::setFillAlpha example</a></li>
<li><a href="imagickdraw.setfillcolor.php#example-3171" class="index">Example#3170 - ImagickDraw::setFillColor</a></li>
<li><a href="imagickdraw.setfillopacity.php#example-3172" class="index">Example#3171 - ImagickDraw::setFillOpacity</a></li>
<li><a href="imagickdraw.setfillrule.php#example-3173" class="index">Example#3172 - ImagickDraw::setFillRule example</a></li>
<li><a href="imagickdraw.setfont.php#example-3174" class="index">Example#3173 - ImagickDraw::setFont example</a></li>
<li><a href="imagickdraw.setfontfamily.php#example-3175" class="index">Example#3174 - ImagickDraw::setFontFamily example</a></li>
<li><a href="imagickdraw.setfontsize.php#example-3176" class="index">Example#3175 - ImagickDraw::setFontSize example</a></li>
<li><a href="imagickdraw.setfontstretch.php#example-3177" class="index">Example#3176 - ImagickDraw::setFontStretch example</a></li>
<li><a href="imagickdraw.setfontstyle.php#example-3178" class="index">Example#3177 - ImagickDraw::setFontStyle example</a></li>
<li><a href="imagickdraw.setfontweight.php#example-3179" class="index">Example#3178 - ImagickDraw::setFontWeight example</a></li>
<li><a href="imagickdraw.setgravity.php#example-3180" class="index">Example#3179 - ImagickDraw::setGravity example</a></li>
<li><a href="imagickdraw.setstrokealpha.php#example-3181" class="index">Example#3180 - ImagickDraw::setStrokeAlpha example</a></li>
<li><a href="imagickdraw.setstrokeantialias.php#example-3182" class="index">Example#3181 - ImagickDraw::setStrokeAntialias example</a></li>
<li><a href="imagickdraw.setstrokecolor.php#example-3183" class="index">Example#3182 - ImagickDraw::setStrokeColor example</a></li>
<li><a href="imagickdraw.setstrokedasharray.php#example-3184" class="index">Example#3183 - ImagickDraw::setStrokeDashArray example</a></li>
<li><a href="imagickdraw.setstrokedashoffset.php#example-3185" class="index">Example#3184 - ImagickDraw::setStrokeDashOffset example</a></li>
<li><a href="imagickdraw.setstrokelinecap.php#example-3186" class="index">Example#3185 - ImagickDraw::setStrokeLineCap example</a></li>
<li><a href="imagickdraw.setstrokelinejoin.php#example-3187" class="index">Example#3186 - ImagickDraw::setStrokeLineJoin example</a></li>
<li><a href="imagickdraw.setstrokemiterlimit.php#example-3188" class="index">Example#3187 - ImagickDraw::setStrokeMiterLimit example</a></li>
<li><a href="imagickdraw.setstrokeopacity.php#example-3189" class="index">Example#3188 - ImagickDraw::setStrokeOpacity example</a></li>
<li><a href="imagickdraw.setstrokewidth.php#example-3190" class="index">Example#3189 - ImagickDraw::setStrokeWidth example</a></li>
<li><a href="imagickdraw.settextalignment.php#example-3191" class="index">Example#3190 - ImagickDraw::setTextAlignment example</a></li>
<li><a href="imagickdraw.settextantialias.php#example-3192" class="index">Example#3191 - ImagickDraw::setTextAntialias example</a></li>
<li><a href="imagickdraw.settextdecoration.php#example-3193" class="index">Example#3192 - ImagickDraw::setTextDecoration example</a></li>
<li><a href="imagickdraw.settextundercolor.php#example-3194" class="index">Example#3193 - ImagickDraw::setTextUnderColor example</a></li>
<li><a href="imagickdraw.setvectorgraphics.php#example-3195" class="index">Example#3194 - ImagickDraw::setVectorGraphics example</a></li>
<li><a href="imagickdraw.setviewbox.php#example-3196" class="index">Example#3195 - ImagickDraw::setViewBox example</a></li>
<li><a href="imagickdraw.skewx.php#example-3197" class="index">Example#3196 - ImagickDraw::skewX example</a></li>
<li><a href="imagickdraw.skewy.php#example-3198" class="index">Example#3197 - ImagickDraw::skewY example</a></li>
<li><a href="imagickdraw.translate.php#example-3199" class="index">Example#3198 - ImagickDraw::translate example</a></li>
<li><a href="imagickpixel.construct.php#example-3200" class="index">Example#3199 - ImagickPixel::construct</a></li>
<li><a href="imagickpixel.getcolor.php#example-3201" class="index">Example#3200 - Basic Imagick::getColor usage</a></li>
<li><a href="imagickpixel.getcolorasstring.php#example-3202" class="index">Example#3201 - Basic Imagick::getColorAsString usage</a></li>
<li><a href="imagickpixel.getcolorcount.php#example-3203" class="index">Example#3202 - ImagickPixel getColorCount</a></li>
<li><a href="imagickpixel.getcolorvalue.php#example-3204" class="index">Example#3203 - Basic Imagick::getColorValue usage</a></li>
<li><a href="imagickpixel.getcolorvaluequantum.php#example-3205" class="index">Example#3204 - ImagickPixel::getColorValueQuantum</a></li>
<li><a href="imagickpixel.gethsl.php#example-3206" class="index">Example#3205 - Basic Imagick::getHSL example</a></li>
<li><a href="imagickpixel.issimilar.php#example-3207" class="index">Example#3206 - ImagickPixel::isSimilar</a></li>
<li><a href="imagickpixel.setcolor.php#example-3208" class="index">Example#3207 - ImagickPixel::setColor</a></li>
<li><a href="imagickpixel.setcolorvalue.php#example-3209" class="index">Example#3208 - Basic Imagick::setColorValue usage</a></li>
<li><a href="imagickpixel.setcolorvaluequantum.php#example-3210" class="index">Example#3209 - ImagickPixel::setColorValueQuantum</a></li>
<li><a href="imagickpixel.sethsl.php#example-3211" class="index">Example#3210 - Use ImagickPixel::setHSL to modify a color</a></li>
<li><a href="imagickpixeliterator.clear.php#example-3212" class="index">Example#3211 - ImagickPixelIterator::clear</a></li>
<li><a href="imagickpixeliterator.construct.php#example-3213" class="index">Example#3212 - ImagickPixelIterator::construct</a></li>
<li><a href="imagickpixeliterator.getnextiteratorrow.php#example-3214" class="index">Example#3213 - ImagickPixelIterator::getNextIteratorRow</a></li>
<li><a href="imagickpixeliterator.resetiterator.php#example-3215" class="index">Example#3214 - ImagickPixelIterator::resetIterator</a></li>
<li><a href="imagickpixeliterator.setiteratorrow.php#example-3216" class="index">Example#3215 - ImagickPixelIterator::setIteratorRow</a></li>
<li><a href="imagickkernel.addkernel.php#example-3217" class="index">Example#3216 - ImagickKernel::addKernel</a></li>
<li><a href="imagickkernel.addunitykernel.php#example-3218" class="index">Example#3217 - ImagickKernel::addUnityKernel</a></li>
<li><a href="imagickkernel.addunitykernel.php#example-3219" class="index">Example#3218 - ImagickKernel::addUnityKernel</a></li>
<li><a href="imagickkernel.frombuiltin.php#example-3220" class="index">Example#3219 - ImagickKernel::fromBuiltin</a></li>
<li><a href="imagickkernel.frommatrix.php#example-3221" class="index">Example#3220 - ImagickKernel::fromMatrix</a></li>
<li><a href="imagickkernel.getmatrix.php#example-3222" class="index">Example#3221 - ImagickKernel::getMatrix</a></li>
<li><a href="imagickkernel.scale.php#example-3223" class="index">Example#3222 - ImagickKernel::scale</a></li>
<li><a href="imagickkernel.separate.php#example-3224" class="index">Example#3223 - ImagickKernel::separate</a></li>
<li><a href="function.imap-append.php#example-3225" class="index">Example#3224 - imap_append example</a></li>
<li><a href="function.imap-check.php#example-3226" class="index">Example#3225 - imap_check example</a></li>
<li><a href="function.imap-createmailbox.php#example-3227" class="index">Example#3226 - imap_createmailbox example</a></li>
<li><a href="function.imap-delete.php#example-3228" class="index">Example#3227 - imap_delete example</a></li>
<li><a href="function.imap-fetch-overview.php#example-3229" class="index">Example#3228 - imap_fetch_overview example</a></li>
<li><a href="function.imap-gc.php#example-3230" class="index">Example#3229 - imap_gc example</a></li>
<li><a href="function.imap-get-quota.php#example-3231" class="index">Example#3230 - imap_get_quota example</a></li>
<li><a href="function.imap-get-quota.php#example-3232" class="index">Example#3231 - imap_get_quota 4.3 or greater example</a></li>
<li><a href="function.imap-get-quotaroot.php#example-3233" class="index">Example#3232 - imap_get_quotaroot example</a></li>
<li><a href="function.imap-getacl.php#example-3234" class="index">Example#3233 - imap_getacl example</a></li>
<li><a href="function.imap-getmailboxes.php#example-3235" class="index">Example#3234 - imap_getmailboxes example</a></li>
<li><a href="function.imap-is-open.php#example-3236" class="index">Example#3235 - imap_is_open example</a></li>
<li><a href="function.imap-list.php#example-3237" class="index">Example#3236 - imap_list example</a></li>
<li><a href="function.imap-mail-compose.php#example-3238" class="index">Example#3237 - imap_mail_compose example</a></li>
<li><a href="function.imap-mailboxmsginfo.php#example-3239" class="index">Example#3238 - imap_mailboxmsginfo example</a></li>
<li><a href="function.imap-mime-header-decode.php#example-3240" class="index">Example#3239 - imap_mime_header_decode example</a></li>
<li><a href="function.imap-open.php#example-3241" class="index">Example#3240 - Different use of imap_open</a></li>
<li><a href="function.imap-open.php#example-3242" class="index">Example#3241 - imap_open example</a></li>
<li><a href="function.imap-ping.php#example-3243" class="index">Example#3242 - imap_ping Example</a></li>
<li><a href="function.imap-reopen.php#example-3244" class="index">Example#3243 - imap_reopen example</a></li>
<li><a href="function.imap-rfc822-parse-adrlist.php#example-3245" class="index">Example#3244 - imap_rfc822_parse_adrlist example</a></li>
<li><a href="function.imap-rfc822-write-address.php#example-3246" class="index">Example#3245 - imap_rfc822_write_address example</a></li>
<li><a href="function.imap-search.php#imap-search.examples" class="index">Example#3246 - imap_search example</a></li>
<li><a href="function.imap-set-quota.php#example-3248" class="index">Example#3247 - imap_set_quota example</a></li>
<li><a href="function.imap-setflag-full.php#example-3249" class="index">Example#3248 - imap_setflag_full example</a></li>
<li><a href="function.imap-status.php#example-3250" class="index">Example#3249 - imap_status example</a></li>
<li><a href="function.imap-thread.php#example-3251" class="index">Example#3250 - imap_thread Example</a></li>
<li><a href="function.imap-timeout.php#example-3252" class="index">Example#3251 - imap_timeout example</a></li>
<li><a href="function.imap-utf8.php#imap-utf8.example.basic" class="index">Example#3252 - Basic imap_utf8 Usage</a></li>
<li><a href="function.ezmlm-hash.php#example-3254" class="index">Example#3253 - Calculating the hash and subscribing a user</a></li>
<li><a href="function.mail.php#example-3255" class="index">Example#3254 - Sending mail.</a></li>
<li><a href="function.mail.php#example-3256" class="index">Example#3255 - Sending mail with extra headers.</a></li>
<li><a href="function.mail.php#example-3257" class="index">Example#3256 - Sending mail with extra headers as array</a></li>
<li><a href="function.mail.php#example-3258" class="index">Example#3257 - Sending mail with an additional command line parameter.</a></li>
<li><a href="function.mail.php#example-3259" class="index">Example#3258 - Sending HTML email</a></li>
<li><a href="function.mailparse-determine-best-xfer-encoding.php#example-3260" class="index">Example#3259 - mailparse_determine_best_xfer_encoding example</a></li>
<li><a href="function.mailparse-rfc822-parse-addresses.php#example-3261" class="index">Example#3260 - mailparse_rfc822_parse_addresses example</a></li>
<li><a href="function.mailparse-stream-encode.php#example-3262" class="index">Example#3261 - mailparse_stream_encode example</a></li>
<li><a href="function.mailparse-uudecode-all.php#example-3263" class="index">Example#3262 - mailparse_uudecode_all example</a></li>
<li><a href="function.bcadd.php#example-3264" class="index">Example#3263 - bcadd example</a></li>
<li><a href="function.bcceil.php#example-3265" class="index">Example#3264 - bcceil example</a></li>
<li><a href="function.bccomp.php#example-3266" class="index">Example#3265 - bccomp example</a></li>
<li><a href="function.bcdiv.php#example-3267" class="index">Example#3266 - bcdiv example</a></li>
<li><a href="function.bcdivmod.php#example-3268" class="index">Example#3267 - bcdivmod example</a></li>
<li><a href="function.bcdivmod.php#example-3269" class="index">Example#3268 - bcdivmod with decimals</a></li>
<li><a href="function.bcfloor.php#example-3270" class="index">Example#3269 - bcfloor example</a></li>
<li><a href="function.bcmod.php#example-3271" class="index">Example#3270 - bcmod example</a></li>
<li><a href="function.bcmod.php#example-3272" class="index">Example#3271 - bcmod with decimals</a></li>
<li><a href="function.bcmul.php#example-3273" class="index">Example#3272 - bcmul example</a></li>
<li><a href="function.bcmul.php#example-3274" class="index">Example#3273 - bcmul scale example</a></li>
<li><a href="function.bcpow.php#example-3275" class="index">Example#3274 - bcpow example</a></li>
<li><a href="function.bcpow.php#example-3276" class="index">Example#3275 - bcpow scale example</a></li>
<li><a href="function.bcround.php#example-3277" class="index">Example#3276 - bcround examples</a></li>
<li><a href="function.bcround.php#example-3278" class="index">Example#3277 - Example of using bcround with different precision values</a></li>
<li><a href="function.bcround.php#example-3279" class="index">Example#3278 - Example of using bcround with different mode values</a></li>
<li><a href="function.bcround.php#example-3280" class="index">Example#3279 - Example of using bcround with different mode values
    when specifying precision</a></li>
<li><a href="function.bcscale.php#example-3281" class="index">Example#3280 - bcscale example</a></li>
<li><a href="function.bcsqrt.php#example-3282" class="index">Example#3281 - bcsqrt example</a></li>
<li><a href="function.bcsub.php#example-3283" class="index">Example#3282 - bcsub example</a></li>
<li><a href="bcmath-number.add.php#example-3284" class="index">Example#3283 - BcMath\Number::add example when scale is not specified</a></li>
<li><a href="bcmath-number.add.php#example-3285" class="index">Example#3284 - BcMath\Number::add example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.ceil.php#example-3286" class="index">Example#3285 - BcMath\Number::ceil example</a></li>
<li><a href="bcmath-number.compare.php#example-3287" class="index">Example#3286 - BcMath\Number::compare example when scale is not specified</a></li>
<li><a href="bcmath-number.compare.php#example-3288" class="index">Example#3287 - BcMath\Number::compare example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.construct.php#example-3289" class="index">Example#3288 - BcMath\Number::__construct example</a></li>
<li><a href="bcmath-number.div.php#example-3290" class="index">Example#3289 - BcMath\Number::div example when scale is not specified</a></li>
<li><a href="bcmath-number.div.php#example-3291" class="index">Example#3290 - BcMath\Number::div example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.div.php#bcmath-number.div.example.expansion-scale" class="index">Example#3291 - BcMath\Number::div example of expansioning BcMath\Number::scale of result object</a></li>
<li><a href="bcmath-number.divmod.php#example-3293" class="index">Example#3292 - BcMath\Number::divmod example when scale is not specified</a></li>
<li><a href="bcmath-number.divmod.php#example-3294" class="index">Example#3293 - BcMath\Number::divmod example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.floor.php#example-3295" class="index">Example#3294 - BcMath\Number::floor example</a></li>
<li><a href="bcmath-number.mod.php#example-3296" class="index">Example#3295 - BcMath\Number::mod example when scale is not specified</a></li>
<li><a href="bcmath-number.mod.php#example-3297" class="index">Example#3296 - BcMath\Number::mod example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.mul.php#example-3298" class="index">Example#3297 - BcMath\Number::mul example when scale is not specified</a></li>
<li><a href="bcmath-number.mul.php#example-3299" class="index">Example#3298 - BcMath\Number::mul example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.pow.php#example-3300" class="index">Example#3299 - BcMath\Number::pow example when scale is not specified</a></li>
<li><a href="bcmath-number.pow.php#example-3301" class="index">Example#3300 - BcMath\Number::pow example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.powmod.php#example-3302" class="index">Example#3301 - BcMath\Number::powmod example when scale is not specified</a></li>
<li><a href="bcmath-number.powmod.php#example-3303" class="index">Example#3302 - BcMath\Number::powmod example of explicitly specifying scale</a></li>
<li><a href="bcmath-number.round.php#example-3304" class="index">Example#3303 - BcMath\Number::round example</a></li>
<li><a href="bcmath-number.round.php#example-3305" class="index">Example#3304 - Example of using BcMath\Number::round with different precision values</a></li>
<li><a href="bcmath-number.round.php#example-3306" class="index">Example#3305 - Example of using BcMath\Number::round with different mode values</a></li>
<li><a href="bcmath-number.round.php#example-3307" class="index">Example#3306 - Example of using BcMath\Number::round with different mode values
    when specifying precision</a></li>
<li><a href="bcmath-number.sqrt.php#example-3308" class="index">Example#3307 - BcMath\Number::sqrt example</a></li>
<li><a href="bcmath-number.sub.php#example-3309" class="index">Example#3308 - BcMath\Number::sub example when scale is not specified</a></li>
<li><a href="bcmath-number.sub.php#example-3310" class="index">Example#3309 - BcMath\Number::sub example of explicitly specifying scale</a></li>
<li><a href="gmp.examples.php#example-3311" class="index">Example#3310 - Factorial function using GMP</a></li>
<li><a href="function.gmp-abs.php#example-3312" class="index">Example#3311 - gmp_abs example</a></li>
<li><a href="function.gmp-add.php#example-3313" class="index">Example#3312 - gmp_add example</a></li>
<li><a href="function.gmp-and.php#example-3314" class="index">Example#3313 - gmp_and example</a></li>
<li><a href="function.gmp-clrbit.php#example-3315" class="index">Example#3314 - gmp_clrbit example</a></li>
<li><a href="function.gmp-cmp.php#example-3316" class="index">Example#3315 - gmp_cmp example</a></li>
<li><a href="function.gmp-com.php#example-3317" class="index">Example#3316 - gmp_com example</a></li>
<li><a href="function.gmp-div-q.php#example-3318" class="index">Example#3317 - gmp_div_q example</a></li>
<li><a href="function.gmp-div-qr.php#example-3319" class="index">Example#3318 - Division of GMP numbers</a></li>
<li><a href="function.gmp-div-r.php#example-3320" class="index">Example#3319 - gmp_div_r example</a></li>
<li><a href="function.gmp-divexact.php#example-3321" class="index">Example#3320 - gmp_divexact example</a></li>
<li><a href="function.gmp-export.php#example-3322" class="index">Example#3321 - gmp_export example</a></li>
<li><a href="function.gmp-fact.php#example-3323" class="index">Example#3322 - gmp_fact example</a></li>
<li><a href="function.gmp-gcd.php#example-3324" class="index">Example#3323 - gmp_gcd example</a></li>
<li><a href="function.gmp-gcdext.php#example-3325" class="index">Example#3324 - Solving a linear Diophantine equation</a></li>
<li><a href="function.gmp-hamdist.php#example-3326" class="index">Example#3325 - gmp_hamdist example</a></li>
<li><a href="function.gmp-import.php#example-3327" class="index">Example#3326 - gmp_import example</a></li>
<li><a href="function.gmp-init.php#example-3328" class="index">Example#3327 - Creating GMP number</a></li>
<li><a href="function.gmp-intval.php#example-3329" class="index">Example#3328 - gmp_intval example</a></li>
<li><a href="function.gmp-invert.php#example-3330" class="index">Example#3329 - gmp_invert example</a></li>
<li><a href="function.gmp-jacobi.php#example-3331" class="index">Example#3330 - gmp_jacobi example</a></li>
<li><a href="function.gmp-legendre.php#example-3332" class="index">Example#3331 - gmp_legendre example</a></li>
<li><a href="function.gmp-mod.php#example-3333" class="index">Example#3332 - gmp_mod example</a></li>
<li><a href="function.gmp-mul.php#example-3334" class="index">Example#3333 - gmp_mul example</a></li>
<li><a href="function.gmp-neg.php#example-3335" class="index">Example#3334 - gmp_neg example</a></li>
<li><a href="function.gmp-nextprime.php#example-3336" class="index">Example#3335 - gmp_nextprime example</a></li>
<li><a href="function.gmp-or.php#example-3337" class="index">Example#3336 - gmp_or example</a></li>
<li><a href="function.gmp-perfect-square.php#example-3338" class="index">Example#3337 - gmp_perfect_square example</a></li>
<li><a href="function.gmp-popcount.php#example-3339" class="index">Example#3338 - gmp_popcount example</a></li>
<li><a href="function.gmp-pow.php#example-3340" class="index">Example#3339 - gmp_pow example</a></li>
<li><a href="function.gmp-powm.php#example-3341" class="index">Example#3340 - gmp_powm example</a></li>
<li><a href="function.gmp-prob-prime.php#example-3342" class="index">Example#3341 - gmp_prob_prime example</a></li>
<li><a href="function.gmp-random.php#example-3343" class="index">Example#3342 - gmp_random example</a></li>
<li><a href="function.gmp-random-bits.php#example-3344" class="index">Example#3343 - gmp_random_bits example</a></li>
<li><a href="function.gmp-random-range.php#example-3345" class="index">Example#3344 - gmp_random_range example</a></li>
<li><a href="function.gmp-random-seed.php#example-3346" class="index">Example#3345 - gmp_random_seed example</a></li>
<li><a href="function.gmp-scan0.php#example-3347" class="index">Example#3346 - gmp_scan0 example</a></li>
<li><a href="function.gmp-scan1.php#example-3348" class="index">Example#3347 - gmp_scan1 example</a></li>
<li><a href="function.gmp-setbit.php#example-3349" class="index">Example#3348 - gmp_setbit example - 0 index</a></li>
<li><a href="function.gmp-setbit.php#example-3350" class="index">Example#3349 - gmp_setbit example - 1 index</a></li>
<li><a href="function.gmp-setbit.php#example-3351" class="index">Example#3350 - gmp_setbit example - clearing a bit</a></li>
<li><a href="function.gmp-sign.php#example-3352" class="index">Example#3351 - gmp_sign example</a></li>
<li><a href="function.gmp-sqrt.php#example-3353" class="index">Example#3352 - gmp_sqrt example</a></li>
<li><a href="function.gmp-sqrtrem.php#example-3354" class="index">Example#3353 - gmp_sqrtrem example</a></li>
<li><a href="function.gmp-strval.php#example-3355" class="index">Example#3354 - Converting a GMP number to a string</a></li>
<li><a href="function.gmp-sub.php#example-3356" class="index">Example#3355 - gmp_sub example</a></li>
<li><a href="function.gmp-testbit.php#example-3357" class="index">Example#3356 - gmp_testbit example</a></li>
<li><a href="function.gmp-xor.php#example-3358" class="index">Example#3357 - gmp_xor example</a></li>
<li><a href="function.abs.php#example-3359" class="index">Example#3358 - abs example</a></li>
<li><a href="function.base-convert.php#example-3360" class="index">Example#3359 - base_convert example</a></li>
<li><a href="function.bindec.php#example-3361" class="index">Example#3360 - bindec example</a></li>
<li><a href="function.bindec.php#example-3362" class="index">Example#3361 - bindec interprets input as unsigned integers</a></li>
<li><a href="function.ceil.php#example-3363" class="index">Example#3362 - ceil example</a></li>
<li><a href="function.cos.php#example-3364" class="index">Example#3363 - cos example</a></li>
<li><a href="function.decbin.php#example-3365" class="index">Example#3364 - decbin example</a></li>
<li><a href="function.dechex.php#example-3366" class="index">Example#3365 - dechex example</a></li>
<li><a href="function.dechex.php#example-3367" class="index">Example#3366 - dechex example with large integers</a></li>
<li><a href="function.decoct.php#example-3368" class="index">Example#3367 - decoct example</a></li>
<li><a href="function.deg2rad.php#example-3369" class="index">Example#3368 - deg2rad example</a></li>
<li><a href="function.exp.php#example-3370" class="index">Example#3369 - exp example</a></li>
<li><a href="function.fdiv.php#example-3371" class="index">Example#3370 - Using fdiv</a></li>
<li><a href="function.floor.php#example-3372" class="index">Example#3371 - floor example</a></li>
<li><a href="function.fmod.php#example-3373" class="index">Example#3372 - Using fmod</a></li>
<li><a href="function.fpow.php#function.fpow.example.basic" class="index">Example#3373 - fpow example</a></li>
<li><a href="function.hexdec.php#example-3375" class="index">Example#3374 - hexdec example</a></li>
<li><a href="function.hexdec.php#example-3376" class="index">Example#3375 - hexdec with Invalid Characters</a></li>
<li><a href="function.intdiv.php#example-3377" class="index">Example#3376 - intdiv example</a></li>
<li><a href="function.intdiv.php#example-3378" class="index">Example#3377 - intdiv Example With Invalid Divisor</a></li>
<li><a href="function.is-finite.php#example-3379" class="index">Example#3378 - is_finite example</a></li>
<li><a href="function.is-infinite.php#example-3380" class="index">Example#3379 - is_infinite example</a></li>
<li><a href="function.is-nan.php#example-3381" class="index">Example#3380 - is_nan example</a></li>
<li><a href="function.max.php#example-3382" class="index">Example#3381 - Example uses of max</a></li>
<li><a href="function.min.php#example-3383" class="index">Example#3382 - Example uses of min</a></li>
<li><a href="function.octdec.php#example-3384" class="index">Example#3383 - octdec example</a></li>
<li><a href="function.pi.php#example-3385" class="index">Example#3384 - pi example</a></li>
<li><a href="function.pow.php#example-3386" class="index">Example#3385 - Some examples of pow</a></li>
<li><a href="function.pow.php#example-3387" class="index">Example#3386 - Examples of pow With GMP Extension Object</a></li>
<li><a href="function.rad2deg.php#example-3388" class="index">Example#3387 - rad2deg example</a></li>
<li><a href="function.round.php#example-3389" class="index">Example#3388 - round examples</a></li>
<li><a href="function.round.php#example-3390" class="index">Example#3389 - How precision affects a float</a></li>
<li><a href="function.round.php#example-3391" class="index">Example#3390 - mode examples</a></li>
<li><a href="function.round.php#example-3392" class="index">Example#3391 - mode with precision examples</a></li>
<li><a href="function.round.php#example-3393" class="index">Example#3392 - Example of using RoundingMode</a></li>
<li><a href="function.sin.php#example-3394" class="index">Example#3393 - sin example</a></li>
<li><a href="function.sqrt.php#example-3395" class="index">Example#3394 - sqrt example</a></li>
<li><a href="function.tan.php#example-3396" class="index">Example#3395 - tan example</a></li>
<li><a href="fdf.examples.php#example-3397" class="index">Example#3396 - Evaluating a FDF document</a></li>
<li><a href="function.fdf-add-doc-javascript.php#example-3398" class="index">Example#3397 - Adding JavaScript code to a FDF</a></li>
<li><a href="function.fdf-create.php#example-3399" class="index">Example#3398 - Populating a PDF document</a></li>
<li><a href="function.fdf-get-attachment.php#example-3400" class="index">Example#3399 - Storing an uploaded file</a></li>
<li><a href="function.fdf-next-field-name.php#example-3401" class="index">Example#3400 - Detecting all fieldnames in a FDF</a></li>
<li><a href="function.fdf-open.php#example-3402" class="index">Example#3401 - Accessing the form data</a></li>
<li><a href="function.fdf-open-string.php#example-3403" class="index">Example#3402 - Accessing the form data</a></li>
<li><a href="function.fdf-save-string.php#example-3404" class="index">Example#3403 - Retrieving FDF as a string</a></li>
<li><a href="function.fdf-set-file.php#example-3405" class="index">Example#3404 - Passing FDF data to a second form</a></li>
<li><a href="gnupg.examples-clearsign.php#example-3406" class="index">Example#3405 - gnupg clearsign example (procedural)</a></li>
<li><a href="gnupg.examples-clearsign.php#example-3407" class="index">Example#3406 - gnupg clearsign example (OO)</a></li>
<li><a href="gnupg.examples-clearsign.php#gnupg.keylistiterator" class="index">Example#3407 - keylistiterator</a></li>
<li><a href="function.gnupg-adddecryptkey.php#example-3409" class="index">Example#3408 - Procedural gnupg_adddecryptkey example</a></li>
<li><a href="function.gnupg-adddecryptkey.php#example-3410" class="index">Example#3409 - OO gnupg_adddecryptkey example</a></li>
<li><a href="function.gnupg-addencryptkey.php#example-3411" class="index">Example#3410 - Procedural gnupg_addencryptkey example</a></li>
<li><a href="function.gnupg-addencryptkey.php#example-3412" class="index">Example#3411 - OO gnupg_addencryptkey example</a></li>
<li><a href="function.gnupg-addsignkey.php#example-3413" class="index">Example#3412 - Procedural gnupg_addsignkey example</a></li>
<li><a href="function.gnupg-addsignkey.php#example-3414" class="index">Example#3413 - OO gnupg_addsignkey example</a></li>
<li><a href="function.gnupg-cleardecryptkeys.php#example-3415" class="index">Example#3414 - Procedural gnupg_cleardecryptkeys example</a></li>
<li><a href="function.gnupg-cleardecryptkeys.php#example-3416" class="index">Example#3415 - OO gnupg_cleardecryptkeys example</a></li>
<li><a href="function.gnupg-clearencryptkeys.php#example-3417" class="index">Example#3416 - Procedural gnupg_clearencryptkeys example</a></li>
<li><a href="function.gnupg-clearencryptkeys.php#example-3418" class="index">Example#3417 - OO gnupg_clearencryptkeys example</a></li>
<li><a href="function.gnupg-clearsignkeys.php#example-3419" class="index">Example#3418 - Procedural gnupg_clearsignkeys example</a></li>
<li><a href="function.gnupg-clearsignkeys.php#example-3420" class="index">Example#3419 - OO gnupg_clearsignkeys example</a></li>
<li><a href="function.gnupg-decrypt.php#example-3421" class="index">Example#3420 - Procedural gnupg_decrypt example</a></li>
<li><a href="function.gnupg-decrypt.php#example-3422" class="index">Example#3421 - OO gnupg_decrypt example</a></li>
<li><a href="function.gnupg-decryptverify.php#example-3423" class="index">Example#3422 - Procedural gnupg_decryptverify example</a></li>
<li><a href="function.gnupg-decryptverify.php#example-3424" class="index">Example#3423 - OO gnupg_decryptverify example</a></li>
<li><a href="function.gnupg-deletekey.php#example-3425" class="index">Example#3424 - Procedural gnupg_deletekey example</a></li>
<li><a href="function.gnupg-deletekey.php#example-3426" class="index">Example#3425 - OO gnupg_deletekey example</a></li>
<li><a href="function.gnupg-encrypt.php#example-3427" class="index">Example#3426 - Procedural gnupg_encrypt example</a></li>
<li><a href="function.gnupg-encrypt.php#example-3428" class="index">Example#3427 - OO gnupg_encrypt example</a></li>
<li><a href="function.gnupg-encryptsign.php#example-3429" class="index">Example#3428 - Procedural gnupg_encryptsign example</a></li>
<li><a href="function.gnupg-encryptsign.php#example-3430" class="index">Example#3429 - OO gnupg_encryptsign example</a></li>
<li><a href="function.gnupg-export.php#example-3431" class="index">Example#3430 - Procedural gnupg_export example</a></li>
<li><a href="function.gnupg-export.php#example-3432" class="index">Example#3431 - OO gnupg_export example</a></li>
<li><a href="function.gnupg-getengineinfo.php#example-3433" class="index">Example#3432 - Procedural gnupg_getengineinfo example</a></li>
<li><a href="function.gnupg-getengineinfo.php#example-3434" class="index">Example#3433 - OO gnupg_getengineinfo example</a></li>
<li><a href="function.gnupg-geterror.php#example-3435" class="index">Example#3434 - Procedural gnupg_geterror example</a></li>
<li><a href="function.gnupg-geterror.php#example-3436" class="index">Example#3435 - OO gnupg_geterror example</a></li>
<li><a href="function.gnupg-geterrorinfo.php#example-3437" class="index">Example#3436 - Procedural gnupg_geterrorinfo example</a></li>
<li><a href="function.gnupg-geterrorinfo.php#example-3438" class="index">Example#3437 - OO gnupg_geterrorinfo example</a></li>
<li><a href="function.gnupg-getprotocol.php#example-3439" class="index">Example#3438 - Procedural gnupg_getprotocol example</a></li>
<li><a href="function.gnupg-getprotocol.php#example-3440" class="index">Example#3439 - OO gnupg_getprotocol example</a></li>
<li><a href="function.gnupg-gettrustlist.php#example-3441" class="index">Example#3440 - Procedural gnupg_gettrustlist example</a></li>
<li><a href="function.gnupg-gettrustlist.php#example-3442" class="index">Example#3441 - OO gnupg_gettrustlist example</a></li>
<li><a href="function.gnupg-import.php#example-3443" class="index">Example#3442 - Procedural gnupg_import example</a></li>
<li><a href="function.gnupg-import.php#example-3444" class="index">Example#3443 - OO gnupg_import example</a></li>
<li><a href="function.gnupg-init.php#example-3445" class="index">Example#3444 - Procedural gnupg_init example with default setting</a></li>
<li><a href="function.gnupg-init.php#example-3446" class="index">Example#3445 - Procedural gnupg_init example with overriden file name and home dir</a></li>
<li><a href="function.gnupg-init.php#example-3447" class="index">Example#3446 - OO gnupg initializer example with default setting</a></li>
<li><a href="function.gnupg-init.php#example-3448" class="index">Example#3447 - OO gnupg initializer example with overriden file name and home dir</a></li>
<li><a href="function.gnupg-keyinfo.php#example-3449" class="index">Example#3448 - Procedural gnupg_keyinfo example</a></li>
<li><a href="function.gnupg-keyinfo.php#example-3450" class="index">Example#3449 - OO gnupg_keyinfo example</a></li>
<li><a href="function.gnupg-listsignatures.php#example-3451" class="index">Example#3450 - Procedural gnupg_listsignatures example</a></li>
<li><a href="function.gnupg-listsignatures.php#example-3452" class="index">Example#3451 - OO gnupg_listsignatures example</a></li>
<li><a href="function.gnupg-setarmor.php#example-3453" class="index">Example#3452 - Procedural gnupg_setarmor example</a></li>
<li><a href="function.gnupg-setarmor.php#example-3454" class="index">Example#3453 - OO gnupg_setarmor example</a></li>
<li><a href="function.gnupg-seterrormode.php#example-3455" class="index">Example#3454 - Procedural gnupg_seterrormode example</a></li>
<li><a href="function.gnupg-seterrormode.php#example-3456" class="index">Example#3455 - OO gnupg_seterrormode example</a></li>
<li><a href="function.gnupg-setsignmode.php#example-3457" class="index">Example#3456 - Procedural gnupg_setsignmode example</a></li>
<li><a href="function.gnupg-setsignmode.php#example-3458" class="index">Example#3457 - OO gnupg_setsignmode example</a></li>
<li><a href="function.gnupg-sign.php#example-3459" class="index">Example#3458 - Procedural gnupg_sign example</a></li>
<li><a href="function.gnupg-sign.php#example-3460" class="index">Example#3459 - OO gnupg_sign example</a></li>
<li><a href="function.gnupg-verify.php#example-3461" class="index">Example#3460 - Procedural gnupg_verify example</a></li>
<li><a href="function.gnupg-verify.php#example-3462" class="index">Example#3461 - OO gnupg_verify example</a></li>
<li><a href="function.ps-begin-pattern.php#example-3463" class="index">Example#3462 - Creating and using a pattern</a></li>
<li><a href="function.ps-begin-template.php#example-3464" class="index">Example#3463 - Creating and using a template</a></li>
<li><a href="function.ps-hyphenate.php#example-3465" class="index">Example#3464 - Hyphennate a text</a></li>
<li><a href="function.ps-lineto.php#example-3466" class="index">Example#3465 - Drawing a rectangle</a></li>
<li><a href="function.ps-makespotcolor.php#example-3467" class="index">Example#3466 - Creating and using a spot color</a></li>
<li><a href="function.ps-rotate.php#example-3468" class="index">Example#3467 - Rotation of the coordinate system</a></li>
<li><a href="function.ps-set-text-pos.php#example-3469" class="index">Example#3468 - Placing text at a given position</a></li>
<li><a href="function.ps-setpolydash.php#example-3470" class="index">Example#3469 - Drawing a dashed line</a></li>
<li><a href="function.ps-translate.php#example-3471" class="index">Example#3470 - Translation of the coordinate system</a></li>
<li><a href="function.rpmdbinfo.php#example-3472" class="index">Example#3471 - A rpmdbinfo example</a></li>
<li><a href="function.rpmdbsearch.php#example-3473" class="index">Example#3472 - Searching for the package owning a file</a></li>
<li><a href="function.rpmdefine.php#example-3474" class="index">Example#3473 - A rpmdefine example</a></li>
<li><a href="function.rpmexpand.php#example-3475" class="index">Example#3474 - A rpmexpand example</a></li>
<li><a href="function.rpmexpandnumeric.php#example-3476" class="index">Example#3475 - A rpmexpandnumeric example</a></li>
<li><a href="function.rpminfo.php#example-3477" class="index">Example#3476 - A rpminfo example</a></li>
<li><a href="vtiful-kernel-excel.addSheet.php#example-3478" class="index">Example#3477 - example</a></li>
<li><a href="vtiful-kernel-excel.autoFilter.php#example-3479" class="index">Example#3478 - example</a></li>
<li><a href="vtiful-kernel-excel.constMemory.php#example-3480" class="index">Example#3479 - example</a></li>
<li><a href="vtiful-kernel-excel.construct.php#example-3481" class="index">Example#3480 - example</a></li>
<li><a href="vtiful-kernel-excel.data.php#example-3482" class="index">Example#3481 - example</a></li>
<li><a href="vtiful-kernel-excel.filename.php#example-3483" class="index">Example#3482 - example</a></li>
<li><a href="vtiful-kernel-excel.getHandle.php#example-3484" class="index">Example#3483 - example</a></li>
<li><a href="vtiful-kernel-excel.header.php#example-3485" class="index">Example#3484 - example</a></li>
<li><a href="vtiful-kernel-excel.insertFormula.php#example-3486" class="index">Example#3485 - example</a></li>
<li><a href="vtiful-kernel-excel.insertImage.php#example-3487" class="index">Example#3486 - example</a></li>
<li><a href="vtiful-kernel-excel.insertText.php#example-3488" class="index">Example#3487 - example</a></li>
<li><a href="vtiful-kernel-excel.mergeCells.php#example-3489" class="index">Example#3488 - example</a></li>
<li><a href="vtiful-kernel-excel.output.php#example-3490" class="index">Example#3489 - example</a></li>
<li><a href="vtiful-kernel-excel.setColumn.php#example-3491" class="index">Example#3490 - setColumn example</a></li>
<li><a href="vtiful-kernel-excel.setRow.php#example-3492" class="index">Example#3491 - setRow example</a></li>
<li><a href="vtiful-kernel-format.align.php#example-3493" class="index">Example#3492 - Align style example</a></li>
<li><a href="vtiful-kernel-format.bold.php#example-3494" class="index">Example#3493 - Bold style example</a></li>
<li><a href="vtiful-kernel-format.italic.php#example-3495" class="index">Example#3494 - Italic style example</a></li>
<li><a href="vtiful-kernel-format.underline.php#example-3496" class="index">Example#3495 - Underline style example</a></li>
<li><a href="intro.eio.php#example-3497" class="index">Example#3496 - Incorrect requests</a></li>
<li><a href="intro.eio.php#example-3498" class="index">Example#3497 - Calling request from a request callback</a></li>
<li><a href="intro.eio.php#example-3499" class="index">Example#3498 - Calling request from a request callback</a></li>
<li><a href="intro.eio.php#example-3500" class="index">Example#3499 - Using eio with libevent</a></li>
<li><a href="eio.examples.php#example-3501" class="index">Example#3500 - Cancelling a request</a></li>
<li><a href="eio.examples.php#example-3502" class="index">Example#3501 - Calling eio_chmod</a></li>
<li><a href="eio.examples.php#example-3503" class="index">Example#3502 - Making a custom request</a></li>
<li><a href="eio.examples.php#example-3504" class="index">Example#3503 - Grouping requests</a></li>
<li><a href="eio.examples.php#example-3505" class="index">Example#3504 - Using eio with libevent extension</a></li>
<li><a href="eio.examples.php#example-3506" class="index">Example#3505 - Using eio with event extension</a></li>
<li><a href="function.eio-cancel.php#example-3507" class="index">Example#3506 - eio_cancel example</a></li>
<li><a href="function.eio-custom.php#example-3508" class="index">Example#3507 - eio_custom example</a></li>
<li><a href="function.eio-event-loop.php#example-3509" class="index">Example#3508 - eio_event_loop example</a></li>
<li><a href="function.eio-fstat.php#example-3510" class="index">Example#3509 - eio_lstat example</a></li>
<li><a href="function.eio-get-event-stream.php#example-3511" class="index">Example#3510 - Using eio with libevent</a></li>
<li><a href="function.eio-grp.php#example-3512" class="index">Example#3511 - eio_grp example</a></li>
<li><a href="function.eio-grp-add.php#example-3513" class="index">Example#3512 - Grouping requests</a></li>
<li><a href="function.eio-link.php#example-3514" class="index">Example#3513 - eio_link example</a></li>
<li><a href="function.eio-lstat.php#example-3515" class="index">Example#3514 - eio_lstat example</a></li>
<li><a href="function.eio-mkdir.php#example-3516" class="index">Example#3515 - eio_mkdir example</a></li>
<li><a href="function.eio-mknod.php#example-3517" class="index">Example#3516 - eio_mknod example</a></li>
<li><a href="function.eio-nreqs.php#example-3518" class="index">Example#3517 - eio_nreqs example</a></li>
<li><a href="function.eio-open.php#example-3519" class="index">Example#3518 - eio_open example</a></li>
<li><a href="function.eio-poll.php#example-3520" class="index">Example#3519 - eio_poll example</a></li>
<li><a href="function.eio-read.php#example-3521" class="index">Example#3520 - eio_read example</a></li>
<li><a href="function.eio-readdir.php#example-3522" class="index">Example#3521 - eio_readdir example</a></li>
<li><a href="function.eio-readlink.php#example-3523" class="index">Example#3522 - eio_readlink example</a></li>
<li><a href="function.eio-realpath.php#example-3524" class="index">Example#3523 - eio_realpath example</a></li>
<li><a href="function.eio-rename.php#example-3525" class="index">Example#3524 - eio_rename example</a></li>
<li><a href="function.eio-rmdir.php#example-3526" class="index">Example#3525 - eio_rmdir example</a></li>
<li><a href="function.eio-stat.php#example-3527" class="index">Example#3526 - eio_stat example</a></li>
<li><a href="function.eio-statvfs.php#example-3528" class="index">Example#3527 - eio_statvfs example</a></li>
<li><a href="function.eio-symlink.php#example-3529" class="index">Example#3528 - eio_symlink example</a></li>
<li><a href="ev.examples.php#example-3530" class="index">Example#3529 - Simple timers</a></li>
<li><a href="ev.examples.php#example-3531" class="index">Example#3530 - Periodic timer. Tick each 10.5 seconds</a></li>
<li><a href="ev.examples.php#example-3532" class="index">Example#3531 - Periodic timer. Use reschedule callback</a></li>
<li><a href="ev.examples.php#example-3533" class="index">Example#3532 - Periodic timer. Tick every 10.5 seconds starting at now</a></li>
<li><a href="ev.examples.php#example-3534" class="index">Example#3533 - Wait until STDIN is readable</a></li>
<li><a href="ev.examples.php#example-3535" class="index">Example#3534 - Use some async I/O to access a socket</a></li>
<li><a href="ev.examples.php#example-3536" class="index">Example#3535 - Embedding one loop into another</a></li>
<li><a href="ev.examples.php#example-3537" class="index">Example#3536 - Embedding loop created with kqueue backend into the default loop</a></li>
<li><a href="ev.examples.php#example-3538" class="index">Example#3537 - Handle SIGTERM signal</a></li>
<li><a href="ev.examples.php#example-3539" class="index">Example#3538 - Monitor changes of /var/log/messages</a></li>
<li><a href="ev.examples.php#example-3540" class="index">Example#3539 - Monotor changes of /var/log/messages. Avoid missing updates by means of one second delay</a></li>
<li><a href="ev.examples.php#example-3541" class="index">Example#3540 - Process status changes</a></li>
<li><a href="ev.periodic-modes.php#example-3542" class="index">Example#3541 - Using reschedule callback</a></li>
<li><a href="ev.embeddablebackends.php#example-3543" class="index">Example#3542 - Embedding loop created with kqueue backend into the default loop</a></li>
<li><a href="ev.recommendedbackends.php#example-3544" class="index">Example#3543 - Embedding one loop into another</a></li>
<li><a href="ev.supportedbackends.php#example-3545" class="index">Example#3544 - Embedding loop created with kqueue backend into the default loop</a></li>
<li><a href="evembed.construct.php#example-3546" class="index">Example#3545 - Embedding loop created with kqueue backend into the default loop</a></li>
<li><a href="evperiodic.construct.php#example-3547" class="index">Example#3546 - Periodic timer. Use reschedule callback</a></li>
<li><a href="evperiodic.construct.php#example-3548" class="index">Example#3547 - Periodic timer. Tick every 10.5 seconds starting at now</a></li>
<li><a href="evperiodic.construct.php#example-3549" class="index">Example#3548 - Hourly watcher</a></li>
<li><a href="evsignal.construct.php#example-3550" class="index">Example#3549 - Handle SIGTERM signal</a></li>
<li><a href="evstat.attr.php#example-3551" class="index">Example#3550 - Monitor changes of /var/log/messages</a></li>
<li><a href="evstat.construct.php#example-3552" class="index">Example#3551 - Monitor changes of /var/log/messages</a></li>
<li><a href="evtimer.construct.php#example-3553" class="index">Example#3552 - Simple timers</a></li>
<li><a href="evtimer.createstopped.php#example-3554" class="index">Example#3553 - Monotor changes of /var/log/messages. Avoid missing updates by means of one second delay</a></li>
<li><a href="evwatcher.keepalive.php#example-3555" class="index">Example#3554 - Register an I/O watcher for some UDP socket but do not keep the
   event loop from running just because of that watcher.</a></li>
<li><a href="expect.examples-usage.php#example-3556" class="index">Example#3555 - Expect Usage Example</a></li>
<li><a href="expect.examples-usage.php#example-3557" class="index">Example#3556 - Another Expect Usage Example</a></li>
<li><a href="function.expect-expectl.php#example-3558" class="index">Example#3557 - expect_expectl example</a></li>
<li><a href="function.expect-popen.php#example-3559" class="index">Example#3558 - expect_popen example</a></li>
<li><a href="pcntl.example.php#example-3560" class="index">Example#3559 - Process Control Example</a></li>
<li><a href="function.pcntl-fork.php#example-3561" class="index">Example#3560 - pcntl_fork example</a></li>
<li><a href="function.pcntl-get-last-error.php#example-3562" class="index">Example#3561 - pcntl_get_last_error example</a></li>
<li><a href="function.pcntl-rfork.php#example-3563" class="index">Example#3562 - pcntl_rfork example</a></li>
<li><a href="function.pcntl-signal.php#example-3564" class="index">Example#3563 - pcntl_signal example</a></li>
<li><a href="function.pcntl-signal-dispatch.php#example-3565" class="index">Example#3564 - pcntl_signal_dispatch example</a></li>
<li><a href="function.pcntl-signal-get-handler.php#example-3566" class="index">Example#3565 - pcntl_signal_get_handler example</a></li>
<li><a href="function.pcntl-sigprocmask.php#example-3567" class="index">Example#3566 - pcntl_sigprocmask example</a></li>
<li><a href="function.pcntl-sigwaitinfo.php#example-3568" class="index">Example#3567 - pcntl_sigwaitinfo example</a></li>
<li><a href="function.pcntl-strerror.php#example-3569" class="index">Example#3568 - pcntl_strerror example</a></li>
<li><a href="function.posix-access.php#example-3570" class="index">Example#3569 - posix_access example</a></li>
<li><a href="function.posix-ctermid.php#example-3571" class="index">Example#3570 - posix_ctermid example</a></li>
<li><a href="function.posix-eaccess.php#example-3572" class="index">Example#3571 - posix_eaccess example</a></li>
<li><a href="function.posix-fpathconf.php#function.posix-fpathconf.example.basic" class="index">Example#3572 - posix_fpathconf example</a></li>
<li><a href="function.posix-get-last-error.php#example-3574" class="index">Example#3573 - posix_get_last_error example</a></li>
<li><a href="function.posix-getcwd.php#example-3575" class="index">Example#3574 - posix_getcwd example</a></li>
<li><a href="function.posix-getegid.php#example-3576" class="index">Example#3575 - posix_getegid example</a></li>
<li><a href="function.posix-geteuid.php#example-3577" class="index">Example#3576 - posix_geteuid example</a></li>
<li><a href="function.posix-getgid.php#example-3578" class="index">Example#3577 - posix_getgid example</a></li>
<li><a href="function.posix-getgrgid.php#example-3579" class="index">Example#3578 - Example use of posix_getgrgid</a></li>
<li><a href="function.posix-getgrnam.php#example-3580" class="index">Example#3579 - Example use of posix_getgrnam</a></li>
<li><a href="function.posix-getgroups.php#example-3581" class="index">Example#3580 - Example use of posix_getgroups</a></li>
<li><a href="function.posix-getlogin.php#example-3582" class="index">Example#3581 - Example use of posix_getlogin</a></li>
<li><a href="function.posix-getpgid.php#example-3583" class="index">Example#3582 - Example use of posix_getpgid</a></li>
<li><a href="function.posix-getpid.php#example-3584" class="index">Example#3583 - Example use of posix_getpid</a></li>
<li><a href="function.posix-getppid.php#example-3585" class="index">Example#3584 - Example use of posix_getppid</a></li>
<li><a href="function.posix-getpwnam.php#example-3586" class="index">Example#3585 - Example use of posix_getpwnam</a></li>
<li><a href="function.posix-getpwuid.php#example-3587" class="index">Example#3586 - Example use of posix_getpwuid</a></li>
<li><a href="function.posix-getrlimit.php#example-3588" class="index">Example#3587 - Example use of posix_getrlimit</a></li>
<li><a href="function.posix-getsid.php#example-3589" class="index">Example#3588 - Example use of posix_getsid</a></li>
<li><a href="function.posix-getuid.php#example-3590" class="index">Example#3589 - Example use of posix_getuid</a></li>
<li><a href="function.posix-mknod.php#example-3591" class="index">Example#3590 - A posix_mknod example</a></li>
<li><a href="function.posix-pathconf.php#function.posix-pathconf.example.basic" class="index">Example#3591 - posix_pathconf example</a></li>
<li><a href="function.posix-setegid.php#example-3593" class="index">Example#3592 - posix_setegid example</a></li>
<li><a href="function.posix-setgid.php#example-3594" class="index">Example#3593 - posix_setgid example</a></li>
<li><a href="function.posix-setuid.php#example-3595" class="index">Example#3594 - posix_setuid example</a></li>
<li><a href="function.posix-strerror.php#example-3596" class="index">Example#3595 - posix_strerror example</a></li>
<li><a href="function.posix-sysconf.php#function.posix-sysconf.example.basic" class="index">Example#3596 - posix_sysconf example</a></li>
<li><a href="function.posix-times.php#example-3598" class="index">Example#3597 - Example use of posix_times</a></li>
<li><a href="function.posix-uname.php#example-3599" class="index">Example#3598 - Example use of posix_uname</a></li>
<li><a href="function.escapeshellarg.php#example-3600" class="index">Example#3599 - escapeshellarg example</a></li>
<li><a href="function.escapeshellcmd.php#example-3601" class="index">Example#3600 - escapeshellcmd example</a></li>
<li><a href="function.exec.php#example-3602" class="index">Example#3601 - An exec example</a></li>
<li><a href="function.proc-nice.php#example-3603" class="index">Example#3602 - Using proc_nice to set the process priority to high</a></li>
<li><a href="function.proc-open.php#example-3604" class="index">Example#3603 - A proc_open example</a></li>
<li><a href="function.proc-open.php#example-3605" class="index">Example#3604 - proc_open quirk on Windows</a></li>
<li><a href="function.shell-exec.php#example-3606" class="index">Example#3605 - A shell_exec example</a></li>
<li><a href="function.system.php#example-3607" class="index">Example#3606 - system example</a></li>
<li><a href="class.parallel-future.php#example-3608" class="index">Example#3607 - Example showing Future as return value</a></li>
<li><a href="class.parallel-future.php#example-3609" class="index">Example#3608 - Example showing Future as synchronization point</a></li>
<li><a href="threaded.chunk.php#example-3610" class="index">Example#3609 - Fetch a chunk of the property table</a></li>
<li><a href="threaded.count.php#example-3611" class="index">Example#3610 - Counting the properties of an object</a></li>
<li><a href="threaded.extend.php#example-3612" class="index">Example#3611 - Runtime inheritance</a></li>
<li><a href="thread.isrunning.php#example-3613" class="index">Example#3612 - Detect the state of the referenced object</a></li>
<li><a href="threaded.isterminated.php#example-3614" class="index">Example#3613 - Detect the state of the referenced object</a></li>
<li><a href="threaded.merge.php#example-3615" class="index">Example#3614 - Merging into the property table of a threaded object</a></li>
<li><a href="threaded.notify.php#example-3616" class="index">Example#3615 - Notifications and Waiting</a></li>
<li><a href="threaded.notifyone.php#example-3617" class="index">Example#3616 - Notifications and Waiting</a></li>
<li><a href="threaded.pop.php#example-3618" class="index">Example#3617 - Popping the last item from the property table of a threaded object</a></li>
<li><a href="threaded.shift.php#example-3619" class="index">Example#3618 - Shifting the first item from the property table of a threaded object</a></li>
<li><a href="threaded.synchronized.php#example-3620" class="index">Example#3619 - Synchronizing</a></li>
<li><a href="threaded.wait.php#example-3621" class="index">Example#3620 - Notifications and Waiting</a></li>
<li><a href="thread.getcreatorid.php#example-3622" class="index">Example#3621 - Return the identity of the Thread or Process that created the referenced Thread</a></li>
<li><a href="thread.getcurrentthread.php#example-3623" class="index">Example#3622 - Return the currently executing Thread</a></li>
<li><a href="thread.getcurrentthreadid.php#example-3624" class="index">Example#3623 - Return the identity of the currently executing Thread</a></li>
<li><a href="thread.getthreadid.php#example-3625" class="index">Example#3624 - Return the identity of the referenced Thread</a></li>
<li><a href="thread.isjoined.php#example-3626" class="index">Example#3625 - Detect the state of the referenced Thread</a></li>
<li><a href="thread.isstarted.php#example-3627" class="index">Example#3626 - Tell if the referenced Thread was started</a></li>
<li><a href="thread.join.php#example-3628" class="index">Example#3627 - Join with the referenced Thread</a></li>
<li><a href="thread.start.php#example-3629" class="index">Example#3628 - Starting Threads</a></li>
<li><a href="worker.collect.php#example-3630" class="index">Example#3629 - A basic example of Worker::collect</a></li>
<li><a href="worker.getstacked.php#example-3631" class="index">Example#3630 - A basic example of Worker::getStacked</a></li>
<li><a href="worker.isshutdown.php#example-3632" class="index">Example#3631 - Detect the state of a worker</a></li>
<li><a href="worker.shutdown.php#example-3633" class="index">Example#3632 - Shutdown the referenced worker</a></li>
<li><a href="worker.stack.php#example-3634" class="index">Example#3633 - Stacking a task for execution onto a worker</a></li>
<li><a href="worker.unstack.php#example-3635" class="index">Example#3634 - Removing objects from the stack of Workers</a></li>
<li><a href="pool.collect.php#example-3636" class="index">Example#3635 - A basic example of Pool::collect</a></li>
<li><a href="pool.construct.php#example-3637" class="index">Example#3636 - Creating Pools</a></li>
<li><a href="pool.shutdown.php#example-3638" class="index">Example#3637 - Shutting down a pool</a></li>
<li><a href="pool.submit.php#example-3639" class="index">Example#3638 - Submitting Tasks</a></li>
<li><a href="pool.submitTo.php#example-3640" class="index">Example#3639 - Submitting tasks to a specific worker</a></li>
<li><a href="class.volatile.php#volatile.example.immutable" class="index">Example#3640 - New immutability semantics of Threaded</a></li>
<li><a href="class.volatile.php#volatile.example.basic" class="index">Example#3641 - Volatile use-case</a></li>
<li><a href="shmop.examples-basic.php#example-3643" class="index">Example#3642 - Shared Memory Operations Overview</a></li>
<li><a href="function.shmop-close.php#example-3644" class="index">Example#3643 - Closing shared memory block</a></li>
<li><a href="function.shmop-delete.php#example-3645" class="index">Example#3644 - Deleting shared memory block</a></li>
<li><a href="function.shmop-open.php#example-3646" class="index">Example#3645 - Create a new shared memory block</a></li>
<li><a href="function.shmop-read.php#example-3647" class="index">Example#3646 - Reading shared memory block</a></li>
<li><a href="function.shmop-size.php#example-3648" class="index">Example#3647 - Getting the size of the shared memory block</a></li>
<li><a href="function.shmop-write.php#example-3649" class="index">Example#3648 - Writing to shared memory block</a></li>
<li><a href="syncmutex.construct.php#example-3650" class="index">Example#3649 - SyncMutex::__construct named mutex with lock timeout example</a></li>
<li><a href="syncmutex.construct.php#example-3651" class="index">Example#3650 - SyncMutex::__construct unnamed mutex example</a></li>
<li><a href="syncmutex.lock.php#example-3652" class="index">Example#3651 - SyncMutex::lock example</a></li>
<li><a href="syncmutex.unlock.php#example-3653" class="index">Example#3652 - SyncMutex::unlock example</a></li>
<li><a href="syncsemaphore.construct.php#example-3654" class="index">Example#3653 - SyncSemaphore::__construct example</a></li>
<li><a href="syncsemaphore.lock.php#example-3655" class="index">Example#3654 - SyncSemaphore::lock example</a></li>
<li><a href="syncsemaphore.unlock.php#example-3656" class="index">Example#3655 - SyncSemaphore::unlock example</a></li>
<li><a href="syncevent.construct.php#example-3657" class="index">Example#3656 - SyncEvent::__construct example</a></li>
<li><a href="syncevent.fire.php#example-3658" class="index">Example#3657 - SyncEvent::fire example</a></li>
<li><a href="syncevent.reset.php#example-3659" class="index">Example#3658 - SyncEvent::reset example</a></li>
<li><a href="syncevent.wait.php#example-3660" class="index">Example#3659 - SyncEvent::wait example</a></li>
<li><a href="syncreaderwriter.construct.php#example-3661" class="index">Example#3660 - SyncReaderWriter::__construct example</a></li>
<li><a href="syncreaderwriter.readlock.php#example-3662" class="index">Example#3661 - SyncReaderWriter::readlock example</a></li>
<li><a href="syncreaderwriter.readunlock.php#example-3663" class="index">Example#3662 - SyncReaderWriter::readunlock example</a></li>
<li><a href="syncreaderwriter.writelock.php#example-3664" class="index">Example#3663 - SyncReaderWriter::writelock example</a></li>
<li><a href="syncreaderwriter.writeunlock.php#example-3665" class="index">Example#3664 - SyncReaderWriter::writeunlock example</a></li>
<li><a href="syncsharedmemory.construct.php#example-3666" class="index">Example#3665 - SyncSharedMemory::__construct example</a></li>
<li><a href="syncsharedmemory.first.php#example-3667" class="index">Example#3666 - SyncSharedMemory::first example</a></li>
<li><a href="syncsharedmemory.read.php#example-3668" class="index">Example#3667 - SyncSharedMemory::__construct example</a></li>
<li><a href="syncsharedmemory.size.php#example-3669" class="index">Example#3668 - SyncSharedMemory::size example</a></li>
<li><a href="syncsharedmemory.write.php#example-3670" class="index">Example#3669 - SyncSharedMemory::write example</a></li>
<li><a href="function.geoip-asnum-by-name.php#example-3671" class="index">Example#3670 - A geoip_asnum_by_name example</a></li>
<li><a href="function.geoip-continent-code-by-name.php#example-3672" class="index">Example#3671 - A geoip_continent_code_by_name example</a></li>
<li><a href="function.geoip-country-code-by-name.php#example-3673" class="index">Example#3672 - A geoip_country_code_by_name example</a></li>
<li><a href="function.geoip-country-code3-by-name.php#example-3674" class="index">Example#3673 - A geoip_country_code3_by_name example</a></li>
<li><a href="function.geoip-country-name-by-name.php#example-3675" class="index">Example#3674 - A geoip_country_name_by_name example</a></li>
<li><a href="function.geoip-database-info.php#example-3676" class="index">Example#3675 - A geoip_database_info example</a></li>
<li><a href="function.geoip-db-avail.php#example-3677" class="index">Example#3676 - A geoip_db_avail example</a></li>
<li><a href="function.geoip-db-filename.php#example-3678" class="index">Example#3677 - A geoip_db_filename example</a></li>
<li><a href="function.geoip-db-get-all-info.php#example-3679" class="index">Example#3678 - A geoip_db_get_all_info example</a></li>
<li><a href="function.geoip-db-get-all-info.php#example-3680" class="index">Example#3679 - A geoip_db_get_all_info example</a></li>
<li><a href="function.geoip-domain-by-name.php#example-3681" class="index">Example#3680 - A geoip_domain_by_name example</a></li>
<li><a href="function.geoip-id-by-name.php#example-3682" class="index">Example#3681 - A geoip_id_by_name example</a></li>
<li><a href="function.geoip-isp-by-name.php#example-3683" class="index">Example#3682 - A geoip_isp_by_name example</a></li>
<li><a href="function.geoip-netspeedcell-by-name.php#example-3684" class="index">Example#3683 - A geoip_netspeedcell_by_name example</a></li>
<li><a href="function.geoip-org-by-name.php#example-3685" class="index">Example#3684 - A geoip_org_by_name example</a></li>
<li><a href="function.geoip-record-by-name.php#example-3686" class="index">Example#3685 - A geoip_record_by_name example</a></li>
<li><a href="function.geoip-region-by-name.php#example-3687" class="index">Example#3686 - A geoip_region_by_name example</a></li>
<li><a href="function.geoip-region-name-by-code.php#example-3688" class="index">Example#3687 - A geoip_region_name_by_code example using region code for US/Canada</a></li>
<li><a href="function.geoip-region-name-by-code.php#example-3689" class="index">Example#3688 - A geoip_region_name_by_code example using FIPS codes</a></li>
<li><a href="function.geoip-setup-custom-directory.php#example-3690" class="index">Example#3689 - A geoip_setup_custom_directory example</a></li>
<li><a href="function.geoip-time-zone-by-country-and-region.php#example-3691" class="index">Example#3690 - A geoip_time_zone_by_country_and_region example using region code for US/Canada</a></li>
<li><a href="function.geoip-time-zone-by-country-and-region.php#example-3692" class="index">Example#3691 - A geoip_time_zone_by_country_and_region example using FIPS codes</a></li>
<li><a href="fann.examples-1.php#example-3693" class="index">Example#3692 - xor.data file</a></li>
<li><a href="fann.examples-1.php#example-3694" class="index">Example#3693 - Simple train</a></li>
<li><a href="fann.examples-1.php#example-3695" class="index">Example#3694 - Simple test</a></li>
<li><a href="function.fann-create-train-from-callback.php#example-3696" class="index">Example#3695 - fann_create_train_from_callback example</a></li>
<li><a href="function.fann-read-train-from-file.php#example-3697" class="index">Example#3696 - fann_read_train_from_file example</a></li>
<li><a href="function.igbinary-serialize.php#example-3698" class="index">Example#3697 - igbinary_serialize example</a></li>
<li><a href="jsonserializable.jsonserialize.php#example-3699" class="index">Example#3698 - JsonSerializable::jsonSerialize example
     returning an array</a></li>
<li><a href="jsonserializable.jsonserialize.php#example-3700" class="index">Example#3699 - JsonSerializable::jsonSerialize example
     returning an associative array</a></li>
<li><a href="jsonserializable.jsonserialize.php#example-3701" class="index">Example#3700 - JsonSerializable::jsonSerialize example
     returning an int</a></li>
<li><a href="jsonserializable.jsonserialize.php#example-3702" class="index">Example#3701 - JsonSerializable::jsonSerialize example
     returning a string</a></li>
<li><a href="function.json-decode.php#example-3703" class="index">Example#3702 - json_decode examples</a></li>
<li><a href="function.json-decode.php#example-3704" class="index">Example#3703 - Accessing invalid object properties</a></li>
<li><a href="function.json-decode.php#example-3705" class="index">Example#3704 - common mistakes using json_decode</a></li>
<li><a href="function.json-decode.php#example-3706" class="index">Example#3705 - depth errors</a></li>
<li><a href="function.json-decode.php#example-3707" class="index">Example#3706 - json_decode of large integers</a></li>
<li><a href="function.json-encode.php#example-3708" class="index">Example#3707 - A json_encode example</a></li>
<li><a href="function.json-encode.php#example-3709" class="index">Example#3708 - A json_encode example showing some flags in use</a></li>
<li><a href="function.json-encode.php#example-3710" class="index">Example#3709 - JSON_NUMERIC_CHECK option example</a></li>
<li><a href="function.json-encode.php#example-3711" class="index">Example#3710 - Sequential versus non-sequential array example</a></li>
<li><a href="function.json-encode.php#example-3712" class="index">Example#3711 - JSON_PRESERVE_ZERO_FRACTION option example</a></li>
<li><a href="function.json-last-error.php#example-3713" class="index">Example#3712 - json_last_error example</a></li>
<li><a href="function.json-last-error.php#example-3714" class="index">Example#3713 - json_last_error with json_encode</a></li>
<li><a href="function.json-last-error.php#example-3715" class="index">Example#3714 - json_last_error and JSON_THROW_ON_ERROR</a></li>
<li><a href="function.json-validate.php#example-3716" class="index">Example#3715 - json_validate examples</a></li>
<li><a href="function.simdjson-decode.php#example-3717" class="index">Example#3716 - simdjson_decode examples</a></li>
<li><a href="function.simdjson-decode.php#example-3718" class="index">Example#3717 - Accessing invalid object properties</a></li>
<li><a href="function.simdjson-decode.php#example-3719" class="index">Example#3718 - common mistakes using simdjson_decode</a></li>
<li><a href="function.simdjson-decode.php#example-3720" class="index">Example#3719 - depth errors</a></li>
<li><a href="function.simdjson-decode.php#example-3721" class="index">Example#3720 - simdjson_decode of large integers</a></li>
<li><a href="function.simdjson-is-valid.php#example-3722" class="index">Example#3721 - simdjson_decode examples</a></li>
<li><a href="function.simdjson-is-valid.php#example-3723" class="index">Example#3722 - depth errors</a></li>
<li><a href="lua.assign.php#example-3724" class="index">Example#3723 - Lua::assignexample</a></li>
<li><a href="lua.call.php#example-3725" class="index">Example#3724 - Lua::callexample</a></li>
<li><a href="lua.eval.php#example-3726" class="index">Example#3725 - Lua::evalexample</a></li>
<li><a href="lua.registercallback.php#example-3727" class="index">Example#3726 - Lua::registerCallbackexample</a></li>
<li><a href="luaclosure.invoke.php#example-3728" class="index">Example#3727 - LuaClosure::__invokeexample</a></li>
<li><a href="luasandbox.examples-basic.php#example-3729" class="index">Example#3728 - Execute some Lua code</a></li>
<li><a href="luasandbox.callfunction.php#example-3730" class="index">Example#3729 - Calling a Lua function</a></li>
<li><a href="luasandbox.getprofilerfunctionreport.php#example-3731" class="index">Example#3730 - Profiling Lua code</a></li>
<li><a href="luasandbox.loadstring.php#example-3732" class="index">Example#3731 - Loading code into Lua</a></li>
<li><a href="luasandbox.pauseusagetimer.php#example-3733" class="index">Example#3732 - Manipulating the usage timer</a></li>
<li><a href="luasandbox.registerlibrary.php#example-3734" class="index">Example#3733 - Registering PHP functions to call from Lua</a></li>
<li><a href="luasandbox.setcpulimit.php#example-3735" class="index">Example#3734 - Calling a Lua function</a></li>
<li><a href="luasandbox.setmemorylimit.php#example-3736" class="index">Example#3735 - Calling a Lua function</a></li>
<li><a href="function.constant.php#example-3737" class="index">Example#3736 - Using constant with Constants</a></li>
<li><a href="function.constant.php#example-3738" class="index">Example#3737 - Using constant with Enum Cases (as of PHP 8.1.0)</a></li>
<li><a href="function.define.php#example-3739" class="index">Example#3738 - Defining Constants</a></li>
<li><a href="function.define.php#example-3740" class="index">Example#3739 - Constants with Reserved Names</a></li>
<li><a href="function.defined.php#example-3741" class="index">Example#3740 - Checking Constants</a></li>
<li><a href="function.defined.php#example-3742" class="index">Example#3741 - Checking Enum Cases (as of PHP 8.1.0)</a></li>
<li><a href="function.eval.php#example-3743" class="index">Example#3742 - eval example - simple text merge</a></li>
<li><a href="function.exit.php#example-3744" class="index">Example#3743 - Basic exit example</a></li>
<li><a href="function.exit.php#example-3745" class="index">Example#3744 - exit example with a string</a></li>
<li><a href="function.exit.php#example-3746" class="index">Example#3745 - Shutdown functions and destructors run regardless</a></li>
<li><a href="function.exit.php#example-3747" class="index">Example#3746 - exit as a statement</a></li>
<li><a href="function.get-browser.php#example-3748" class="index">Example#3747 - Listing all information about the users browser</a></li>
<li><a href="function.halt-compiler.php#example-3749" class="index">Example#3748 - A __halt_compiler example</a></li>
<li><a href="function.highlight-string.php#example-3750" class="index">Example#3749 - highlight_string example</a></li>
<li><a href="function.hrtime.php#example-3751" class="index">Example#3750 - hrtime usage</a></li>
<li><a href="function.ignore-user-abort.php#example-3752" class="index">Example#3751 - A ignore_user_abort example</a></li>
<li><a href="function.pack.php#example-3753" class="index">Example#3752 - pack example</a></li>
<li><a href="function.php-strip-whitespace.php#example-3754" class="index">Example#3753 - php_strip_whitespace example</a></li>
<li><a href="function.sapi-windows-generate-ctrl-event.php#sapi-windows-generate-ctrl-event.example.basic" class="index">Example#3754 - Basic sapi_windows_generate_ctrl_event Usage</a></li>
<li><a href="function.sapi-windows-set-ctrl-handler.php#sapi-windows-set-ctrl-handler.example.basic" class="index">Example#3755 - Basic sapi_windows_set_ctrl_handler Usage</a></li>
<li><a href="function.sapi-windows-vt100-support.php#example-3757" class="index">Example#3756 - sapi_windows_vt100_support default state</a></li>
<li><a href="function.sapi-windows-vt100-support.php#example-3758" class="index">Example#3757 - sapi_windows_vt100_support changing state</a></li>
<li><a href="function.sapi-windows-vt100-support.php#example-3759" class="index">Example#3758 - Example usage of VT100 support enabled</a></li>
<li><a href="function.sleep.php#example-3760" class="index">Example#3759 - sleep example</a></li>
<li><a href="function.sys-getloadavg.php#example-3761" class="index">Example#3760 - A sys_getloadavg example</a></li>
<li><a href="function.time-nanosleep.php#example-3762" class="index">Example#3761 - time_nanosleep example</a></li>
<li><a href="function.time-sleep-until.php#example-3763" class="index">Example#3762 - A time_sleep_until example</a></li>
<li><a href="function.uniqid.php#example-3764" class="index">Example#3763 - uniqid Example</a></li>
<li><a href="function.unpack.php#example-3765" class="index">Example#3764 - unpack example</a></li>
<li><a href="function.unpack.php#example-3766" class="index">Example#3765 - unpack example with a repeater</a></li>
<li><a href="function.unpack.php#example-3767" class="index">Example#3766 - unpack example with unnamed keys</a></li>
<li><a href="function.usleep.php#example-3768" class="index">Example#3767 - usleep example</a></li>
<li><a href="random.examples.php#example-3769" class="index">Example#3768 - Random Example</a></li>
<li><a href="function.mt-rand.php#example-3770" class="index">Example#3769 - mt_rand example</a></li>
<li><a href="function.rand.php#example-3771" class="index">Example#3770 - rand example</a></li>
<li><a href="function.random-bytes.php#random-bytes.example.basic" class="index">Example#3771 - random_bytes example</a></li>
<li><a href="function.random-int.php#random-int.example.basic" class="index">Example#3772 - random_int example</a></li>
<li><a href="random-randomizer.construct.php#example-3774" class="index">Example#3773 - Random\Randomizer::__construct example</a></li>
<li><a href="random-randomizer.getbytes.php#example-3775" class="index">Example#3774 - Random\Randomizer::getBytes example</a></li>
<li><a href="random-randomizer.getbytesfromstring.php#example-3776" class="index">Example#3775 - Random\Randomizer::getBytesFromString example</a></li>
<li><a href="random-randomizer.getbytesfromstring.php#example-3777" class="index">Example#3776 - Generate a random code for multi-factor authentication</a></li>
<li><a href="random-randomizer.getbytesfromstring.php#example-3778" class="index">Example#3777 - Select from a string with a non-uniform distribution</a></li>
<li><a href="random-randomizer.getfloat.php#example-3779" class="index">Example#3778 - Random\Randomizer::getFloat example</a></li>
<li><a href="random-randomizer.getint.php#example-3780" class="index">Example#3779 - Random\Randomizer::getInt example</a></li>
<li><a href="random-randomizer.nextfloat.php#example-3781" class="index">Example#3780 - Random\Randomizer::nextFloat example</a></li>
<li><a href="random-randomizer.nextfloat.php#example-3782" class="index">Example#3781 - Incorrect scaling using an affine transformation</a></li>
<li><a href="random-randomizer.nextint.php#example-3783" class="index">Example#3782 - Random\Randomizer::nextInt example</a></li>
<li><a href="random-randomizer.pickarraykeys.php#example-3784" class="index">Example#3783 - Random\Randomizer::pickArrayKeys example</a></li>
<li><a href="random-randomizer.pickarraykeys.php#example-3785" class="index">Example#3784 - Picking random values</a></li>
<li><a href="random-randomizer.serialize.php#example-3786" class="index">Example#3785 - Random\Randomizer::__serialize example</a></li>
<li><a href="random-randomizer.shufflearray.php#example-3787" class="index">Example#3786 - Random\Randomizer::shuffleArray example</a></li>
<li><a href="random-randomizer.shufflebytes.php#example-3788" class="index">Example#3787 - Random\Randomizer::shuffleBytes example</a></li>
<li><a href="random-randomizer.shufflebytes.php#example-3789" class="index">Example#3788 - Byte-wise shuffling breaks Unicode characters</a></li>
<li><a href="random-randomizer.unserialize.php#example-3790" class="index">Example#3789 - Random\Randomizer::__unserialize example</a></li>
<li><a href="random-engine.generate.php#example-3791" class="index">Example#3790 - Random\Engine::generate example</a></li>
<li><a href="random-engine-mt19937.construct.php#example-3792" class="index">Example#3791 - Random\Engine\Mt19937::__construct example</a></li>
<li><a href="random-engine-mt19937.debuginfo.php#example-3793" class="index">Example#3792 - Random\Engine\Mt19937::__debugInfo example</a></li>
<li><a href="random-engine-mt19937.serialize.php#example-3794" class="index">Example#3793 - Random\Engine\Mt19937::__serialize example</a></li>
<li><a href="random-engine-mt19937.unserialize.php#example-3795" class="index">Example#3794 - Random\Engine\Mt19937::__unserialize example</a></li>
<li><a href="random-engine-pcgoneseq128xslrr64.construct.php#example-3796" class="index">Example#3795 - Random\Engine\PcgOneseq128XslRr64::__construct example</a></li>
<li><a href="random-engine-pcgoneseq128xslrr64.construct.php#example-3797" class="index">Example#3796 - Deriving a seed from a string</a></li>
<li><a href="random-engine-pcgoneseq128xslrr64.debuginfo.php#example-3798" class="index">Example#3797 - Random\Engine\PcgOneseq128XslRr64::__debugInfo example</a></li>
<li><a href="random-engine-pcgoneseq128xslrr64.jump.php#example-3799" class="index">Example#3798 - Random\Engine\PcgOneseq128XslRr64::jump example</a></li>
<li><a href="random-engine-pcgoneseq128xslrr64.jump.php#example-3800" class="index">Example#3799 - Randomizer methods may call the engine more than once</a></li>
<li><a href="random-engine-pcgoneseq128xslrr64.serialize.php#example-3801" class="index">Example#3800 - Random\Engine\PcgOneseq128XslRr64::__serialize example</a></li>
<li><a href="random-engine-pcgoneseq128xslrr64.unserialize.php#example-3802" class="index">Example#3801 - Random\Engine\PcgOneseq128XslRr64::__unserialize example</a></li>
<li><a href="random-engine-xoshiro256starstar.construct.php#example-3803" class="index">Example#3802 - Random\Engine\Xoshiro256StarStar::__construct example</a></li>
<li><a href="random-engine-xoshiro256starstar.construct.php#example-3804" class="index">Example#3803 - Deriving a seed from a string</a></li>
<li><a href="random-engine-xoshiro256starstar.debuginfo.php#example-3805" class="index">Example#3804 - Random\Engine\Xoshiro256StarStar::__debugInfo example</a></li>
<li><a href="random-engine-xoshiro256starstar.jump.php#example-3806" class="index">Example#3805 - Random\Engine\Xoshiro256StarStar::jump example</a></li>
<li><a href="random-engine-xoshiro256starstar.jumplong.php#example-3807" class="index">Example#3806 - Random\Engine\Xoshiro256StarStar::jumpLong example</a></li>
<li><a href="random-engine-xoshiro256starstar.serialize.php#example-3808" class="index">Example#3807 - Random\Engine\Xoshiro256StarStar::__serialize example</a></li>
<li><a href="random-engine-xoshiro256starstar.unserialize.php#example-3809" class="index">Example#3808 - Random\Engine\Xoshiro256StarStar::__unserialize example</a></li>
<li><a href="seaslog.examples.php#example-3810" class="index">Example#3809 - Get and set base path</a></li>
<li><a href="seaslog.examples.php#example-3811" class="index">Example#3810 - Get and set logger</a></li>
<li><a href="seaslog.examples.php#example-3812" class="index">Example#3811 - Fast write log</a></li>
<li><a href="seaslog.examples.php#example-3813" class="index">Example#3812 - Fast count some type of log count value</a></li>
<li><a href="seaslog.examples.php#example-3814" class="index">Example#3813 - Acquisit some type of log list</a></li>
<li><a href="function.seaslog-get-author.php#example-3815" class="index">Example#3814 - seaslog_get_author example</a></li>
<li><a href="function.seaslog-get-version.php#example-3816" class="index">Example#3815 - seaslog_get_version example</a></li>
<li><a href="seaslog.alert.php#example-3817" class="index">Example#3816 - SeasLog::alert example</a></li>
<li><a href="seaslog.analyzercount.php#example-3818" class="index">Example#3817 - SeasLog::analyzerCount example</a></li>
<li><a href="seaslog.analyzerdetail.php#example-3819" class="index">Example#3818 - SeasLog::analyzerDetail example</a></li>
<li><a href="seaslog.closeloggerstream.php#example-3820" class="index">Example#3819 - SeasLog::closeLoggerStream example</a></li>
<li><a href="seaslog.construct.php#example-3821" class="index">Example#3820 - SeasLog::__construct example</a></li>
<li><a href="seaslog.critical.php#example-3822" class="index">Example#3821 - SeasLog::critical example</a></li>
<li><a href="seaslog.debug.php#example-3823" class="index">Example#3822 - SeasLog::debug example</a></li>
<li><a href="seaslog.destruct.php#example-3824" class="index">Example#3823 - SeasLog::__destruct example</a></li>
<li><a href="seaslog.emergency.php#example-3825" class="index">Example#3824 - SeasLog::emergency example</a></li>
<li><a href="seaslog.error.php#example-3826" class="index">Example#3825 - SeasLog::error example</a></li>
<li><a href="seaslog.flushbuffer.php#example-3827" class="index">Example#3826 - SeasLog::flushBuffer example</a></li>
<li><a href="seaslog.getbasepath.php#example-3828" class="index">Example#3827 - SeasLog::getBasePath example</a></li>
<li><a href="seaslog.getbuffer.php#example-3829" class="index">Example#3828 - SeasLog::getBuffer example</a></li>
<li><a href="seaslog.getbufferenabled.php#example-3830" class="index">Example#3829 - SeasLog::getBufferEnabled example</a></li>
<li><a href="seaslog.getdatetimeformat.php#example-3831" class="index">Example#3830 - SeasLog::getDatetimeFormat example</a></li>
<li><a href="seaslog.getlastlogger.php#example-3832" class="index">Example#3831 - SeasLog::getLastLogger example</a></li>
<li><a href="seaslog.getrequestid.php#example-3833" class="index">Example#3832 - SeasLog::getRequestID example</a></li>
<li><a href="seaslog.getrequestvariable.php#example-3834" class="index">Example#3833 - SeasLog::getRequestVariable example</a></li>
<li><a href="seaslog.info.php#example-3835" class="index">Example#3834 - SeasLog::info example</a></li>
<li><a href="seaslog.log.php#example-3836" class="index">Example#3835 - SeasLog::log example</a></li>
<li><a href="seaslog.notice.php#example-3837" class="index">Example#3836 - SeasLog::notice example</a></li>
<li><a href="seaslog.setbasepath.php#example-3838" class="index">Example#3837 - SeasLog::setBasePath example</a></li>
<li><a href="seaslog.setdatetimeformat.php#example-3839" class="index">Example#3838 - SeasLog::setDatetimeFormat example</a></li>
<li><a href="seaslog.setlogger.php#example-3840" class="index">Example#3839 - SeasLog::setLogger example</a></li>
<li><a href="seaslog.setrequestid.php#example-3841" class="index">Example#3840 - SeasLog::setRequestID example</a></li>
<li><a href="seaslog.setrequestvariable.php#example-3842" class="index">Example#3841 - SeasLog::setRequestVariable example</a></li>
<li><a href="seaslog.warning.php#example-3843" class="index">Example#3842 - SeasLog::warning example</a></li>
<li><a href="class.seekableiterator.php#seekableiterator.examples.basic" class="index">Example#3843 - Basic usage</a></li>
<li><a href="seekableiterator.seek.php#example-3845" class="index">Example#3844 - SeekableIterator::seek example</a></li>
<li><a href="class.splstack.php#example-3846" class="index">Example#3845 - SplStack example</a></li>
<li><a href="class.splqueue.php#example-3847" class="index">Example#3846 - SplQueue example</a></li>
<li><a href="class.splqueue.php#example-3848" class="index">Example#3847 - Efficiently handling tasks with SplQueue</a></li>
<li><a href="class.splfixedarray.php#example-3849" class="index">Example#3848 - SplFixedArray usage example</a></li>
<li><a href="splfixedarray.construct.php#example-3850" class="index">Example#3849 - SplFixedArray::__construct example</a></li>
<li><a href="splfixedarray.count.php#example-3851" class="index">Example#3850 - SplFixedArray::count example</a></li>
<li><a href="splfixedarray.fromarray.php#example-3852" class="index">Example#3851 - SplFixedArray::fromArray example</a></li>
<li><a href="splfixedarray.getsize.php#example-3853" class="index">Example#3852 - SplFixedArray::getSize example</a></li>
<li><a href="splfixedarray.setsize.php#example-3854" class="index">Example#3853 - SplFixedArray::setSize example</a></li>
<li><a href="splfixedarray.toarray.php#example-3855" class="index">Example#3854 - SplFixedArray::toArray example</a></li>
<li><a href="arrayobject.append.php#example-3856" class="index">Example#3855 - ArrayObject::append example</a></li>
<li><a href="arrayobject.asort.php#example-3857" class="index">Example#3856 - ArrayObject::asort example</a></li>
<li><a href="arrayobject.construct.php#example-3858" class="index">Example#3857 - ArrayObject::__construct example</a></li>
<li><a href="arrayobject.count.php#example-3859" class="index">Example#3858 - ArrayObject::count example</a></li>
<li><a href="arrayobject.exchangearray.php#example-3860" class="index">Example#3859 - ArrayObject::exchangeArray example</a></li>
<li><a href="arrayobject.getarraycopy.php#example-3861" class="index">Example#3860 - ArrayObject::getArrayCopy example</a></li>
<li><a href="arrayobject.getflags.php#example-3862" class="index">Example#3861 - ArrayObject::getFlags example</a></li>
<li><a href="arrayobject.getiterator.php#example-3863" class="index">Example#3862 - ArrayObject::getIterator example</a></li>
<li><a href="arrayobject.getiteratorclass.php#example-3864" class="index">Example#3863 - ArrayObject::getIteratorClass example</a></li>
<li><a href="arrayobject.ksort.php#example-3865" class="index">Example#3864 - ArrayObject::ksort example</a></li>
<li><a href="arrayobject.natcasesort.php#example-3866" class="index">Example#3865 - ArrayObject::natcasesort example</a></li>
<li><a href="arrayobject.natsort.php#example-3867" class="index">Example#3866 - ArrayObject::natsort example</a></li>
<li><a href="arrayobject.offsetexists.php#example-3868" class="index">Example#3867 - ArrayObject::offsetExists example</a></li>
<li><a href="arrayobject.offsetget.php#example-3869" class="index">Example#3868 - ArrayObject::offsetGet example</a></li>
<li><a href="arrayobject.offsetset.php#example-3870" class="index">Example#3869 - ArrayObject::offsetSet example</a></li>
<li><a href="arrayobject.offsetunset.php#example-3871" class="index">Example#3870 - ArrayObject::offsetUnset example</a></li>
<li><a href="arrayobject.serialize.php#example-3872" class="index">Example#3871 - ArrayObject::serialize example</a></li>
<li><a href="arrayobject.setflags.php#example-3873" class="index">Example#3872 - ArrayObject::setFlags example</a></li>
<li><a href="arrayobject.setiteratorclass.php#example-3874" class="index">Example#3873 - ArrayObject::setIteratorClass example</a></li>
<li><a href="arrayobject.uasort.php#example-3875" class="index">Example#3874 - ArrayObject::uasort example</a></li>
<li><a href="arrayobject.uksort.php#example-3876" class="index">Example#3875 - ArrayObject::uksort example</a></li>
<li><a href="class.splobjectstorage.php#example-3877" class="index">Example#3876 - SplObjectStorage as a set</a></li>
<li><a href="class.splobjectstorage.php#example-3878" class="index">Example#3877 - SplObjectStorage as a map</a></li>
<li><a href="splobjectstorage.addall.php#example-3879" class="index">Example#3878 - SplObjectStorage::addAll example</a></li>
<li><a href="splobjectstorage.attach.php#example-3880" class="index">Example#3879 - SplObjectStorage::attach example</a></li>
<li><a href="splobjectstorage.contains.php#example-3881" class="index">Example#3880 - SplObjectStorage::contains example</a></li>
<li><a href="splobjectstorage.count.php#example-3882" class="index">Example#3881 - SplObjectStorage::count example</a></li>
<li><a href="splobjectstorage.current.php#example-3883" class="index">Example#3882 - SplObjectStorage::current example</a></li>
<li><a href="splobjectstorage.detach.php#example-3884" class="index">Example#3883 - SplObjectStorage::detach example</a></li>
<li><a href="splobjectstorage.gethash.php#example-3885" class="index">Example#3884 - SplObjectStorage::getHash example</a></li>
<li><a href="splobjectstorage.getinfo.php#example-3886" class="index">Example#3885 - SplObjectStorage::getInfo example</a></li>
<li><a href="splobjectstorage.key.php#example-3887" class="index">Example#3886 - SplObjectStorage::key example</a></li>
<li><a href="splobjectstorage.next.php#example-3888" class="index">Example#3887 - SplObjectStorage::next example</a></li>
<li><a href="splobjectstorage.offsetexists.php#example-3889" class="index">Example#3888 - SplObjectStorage::offsetExists example</a></li>
<li><a href="splobjectstorage.offsetget.php#example-3890" class="index">Example#3889 - SplObjectStorage::offsetGet example</a></li>
<li><a href="splobjectstorage.offsetset.php#example-3891" class="index">Example#3890 - SplObjectStorage::offsetSet example</a></li>
<li><a href="splobjectstorage.offsetunset.php#example-3892" class="index">Example#3891 - SplObjectStorage::offsetUnset example</a></li>
<li><a href="splobjectstorage.removeall.php#example-3893" class="index">Example#3892 - SplObjectStorage::removeAll example</a></li>
<li><a href="splobjectstorage.removeallexcept.php#example-3894" class="index">Example#3893 - SplObjectStorage::removeAllExcept example</a></li>
<li><a href="splobjectstorage.rewind.php#example-3895" class="index">Example#3894 - SplObjectStorage::rewind example</a></li>
<li><a href="splobjectstorage.seek.php#splobjectstorage.seek.example.basic" class="index">Example#3895 - SplObjectStorage::seek example</a></li>
<li><a href="splobjectstorage.serialize.php#example-3897" class="index">Example#3896 - SplObjectStorage::serialize example</a></li>
<li><a href="splobjectstorage.setinfo.php#example-3898" class="index">Example#3897 - SplObjectStorage::setInfo example</a></li>
<li><a href="splobjectstorage.unserialize.php#example-3899" class="index">Example#3898 - SplObjectStorage::unserialize example</a></li>
<li><a href="splobjectstorage.valid.php#example-3900" class="index">Example#3899 - SplObjectStorage::valid example</a></li>
<li><a href="appenditerator.append.php#appenditerator.append.examples.basic" class="index">Example#3900 - AppendIterator::append example</a></li>
<li><a href="appenditerator.construct.php#appenditerator.examples.foreach" class="index">Example#3901 - Iterating AppendIterator with foreach</a></li>
<li><a href="appenditerator.construct.php#appenditerator.examples.api" class="index">Example#3902 - Iterating AppendIterator with the AppendIterator API</a></li>
<li><a href="appenditerator.getiteratorindex.php#appenditerator.getiteratorindex.examples.basic" class="index">Example#3903 - AppendIterator.getIteratorIndex basic example</a></li>
<li><a href="appenditerator.key.php#appenditerator.key.examples.basic" class="index">Example#3904 - AppendIterator::key basic example</a></li>
<li><a href="arrayiterator.current.php#example-3906" class="index">Example#3905 - ArrayIterator::current example</a></li>
<li><a href="arrayiterator.key.php#example-3907" class="index">Example#3906 - ArrayIterator::key example</a></li>
<li><a href="arrayiterator.next.php#example-3908" class="index">Example#3907 - ArrayIterator::next example</a></li>
<li><a href="arrayiterator.rewind.php#example-3909" class="index">Example#3908 - ArrayIterator::rewind example</a></li>
<li><a href="arrayiterator.valid.php#example-3910" class="index">Example#3909 - ArrayIterator::valid example</a></li>
<li><a href="cachingiterator.getcache.php#example-3911" class="index">Example#3910 - CachingIterator::getCache example</a></li>
<li><a href="class.callbackfilteriterator.php#callbackfilteriterator.examples.args" class="index">Example#3911 - Available callback arguments</a></li>
<li><a href="class.callbackfilteriterator.php#callbackfilteriterator.examples.basic" class="index">Example#3912 - Callback basic examples</a></li>
<li><a href="directoryiterator.construct.php#example-3914" class="index">Example#3913 - A DirectoryIterator::__construct example</a></li>
<li><a href="directoryiterator.current.php#example-3915" class="index">Example#3914 - A DirectoryIterator::current example</a></li>
<li><a href="directoryiterator.getbasename.php#example-3916" class="index">Example#3915 - A DirectoryIterator::getBasename example</a></li>
<li><a href="directoryiterator.getextension.php#example-3917" class="index">Example#3916 - DirectoryIterator::getExtension example</a></li>
<li><a href="directoryiterator.getfilename.php#example-3918" class="index">Example#3917 - A DirectoryIterator::getFilename example</a></li>
<li><a href="directoryiterator.isdot.php#example-3919" class="index">Example#3918 - A DirectoryIterator::isDot example</a></li>
<li><a href="directoryiterator.key.php#example-3920" class="index">Example#3919 - A DirectoryIterator::key example</a></li>
<li><a href="directoryiterator.next.php#example-3921" class="index">Example#3920 - DirectoryIterator::next example</a></li>
<li><a href="directoryiterator.rewind.php#example-3922" class="index">Example#3921 - DirectoryIterator::rewind example</a></li>
<li><a href="directoryiterator.seek.php#example-3923" class="index">Example#3922 - DirectoryIterator::seek example</a></li>
<li><a href="directoryiterator.tostring.php#example-3924" class="index">Example#3923 - A DirectoryIterator::__toString example</a></li>
<li><a href="directoryiterator.valid.php#example-3925" class="index">Example#3924 - A DirectoryIterator::valid example</a></li>
<li><a href="filesystemiterator.construct.php#example-3926" class="index">Example#3925 - FilesystemIterator::__construct example</a></li>
<li><a href="filesystemiterator.current.php#example-3927" class="index">Example#3926 - FilesystemIterator::current example</a></li>
<li><a href="filesystemiterator.key.php#example-3928" class="index">Example#3927 - FilesystemIterator::key example</a></li>
<li><a href="filesystemiterator.next.php#example-3929" class="index">Example#3928 - FilesystemIterator::next example</a></li>
<li><a href="filesystemiterator.rewind.php#example-3930" class="index">Example#3929 - FilesystemIterator::rewind example</a></li>
<li><a href="filesystemiterator.setflags.php#example-3931" class="index">Example#3930 - FilesystemIterator::key example</a></li>
<li><a href="filteriterator.accept.php#example-3932" class="index">Example#3931 - FilterIterator::accept example</a></li>
<li><a href="globiterator.construct.php#example-3933" class="index">Example#3932 - GlobIterator example</a></li>
<li><a href="globiterator.count.php#example-3934" class="index">Example#3933 - GlobIterator::count example</a></li>
<li><a href="infiniteiterator.construct.php#example-3935" class="index">Example#3934 - InfiniteIterator::__construct example</a></li>
<li><a href="class.limititerator.php#example-3936" class="index">Example#3935 - LimitIterator usage example</a></li>
<li><a href="limititerator.construct.php#example-3937" class="index">Example#3936 - LimitIterator::__construct example</a></li>
<li><a href="limititerator.getposition.php#example-3938" class="index">Example#3937 - LimitIterator::getPosition example</a></li>
<li><a href="multipleiterator.construct.php#multipleiterator.example.basic" class="index">Example#3938 - Iterating a MultipleIterator</a></li>
<li><a href="norewinditerator.construct.php#example-3940" class="index">Example#3939 - NoRewindIterator::__construct example</a></li>
<li><a href="norewinditerator.rewind.php#example-3941" class="index">Example#3940 - NoRewindIterator::rewind example</a></li>
<li><a href="recursivearrayiterator.getchildren.php#example-3942" class="index">Example#3941 - RecursiveArrayIterator::getChildren example</a></li>
<li><a href="recursivearrayiterator.haschildren.php#example-3943" class="index">Example#3942 - RecursiveArrayIterator::hasChildren example</a></li>
<li><a href="class.recursivecallbackfilteriterator.php#recursivecallbackfilteriterator.examples.args" class="index">Example#3943 - Available callback arguments</a></li>
<li><a href="class.recursivecallbackfilteriterator.php#recursivecallbackfilteriterator.examples.basic" class="index">Example#3944 - Recursive callback basic example</a></li>
<li><a href="recursivecallbackfilteriterator.haschildren.php#recursivecallbackfilteriterator.haschildren.examples.basic" class="index">Example#3945 - RecursiveCallbackFilterIterator::hasChildren basic usage</a></li>
<li><a href="recursivedirectoryiterator.construct.php#example-3947" class="index">Example#3946 - RecursiveDirectoryIterator example</a></li>
<li><a href="recursivedirectoryiterator.getsubpath.php#recursivedirectoryiterator.getsubpath.example.basic" class="index">Example#3947 - getSubPath example</a></li>
<li><a href="recursivedirectoryiterator.getsubpathname.php#recursivedirectoryiterator.getsubpathname.example.basic" class="index">Example#3948 - getSubPathname example</a></li>
<li><a href="recursivefilteriterator.construct.php#example-3950" class="index">Example#3949 - Basic RecursiveFilterIterator example</a></li>
<li><a href="recursivefilteriterator.construct.php#example-3951" class="index">Example#3950 - RecursiveFilterIterator example</a></li>
<li><a href="recursiveiteratoriterator.construct.php#recursiveiteratoriterator.example.basic" class="index">Example#3951 - Iterating a RecursiveIteratorIterator</a></li>
<li><a href="recursiveregexiterator.construct.php#example-3953" class="index">Example#3952 - RecursiveRegexIterator::__construct example</a></li>
<li><a href="recursiveregexiterator.getchildren.php#example-3954" class="index">Example#3953 - RecursiveRegexIterator::getChildren example</a></li>
<li><a href="recursiveregexiterator.haschildren.php#example-3955" class="index">Example#3954 - RecursiveRegexIterator::hasChildren example</a></li>
<li><a href="regexiterator.accept.php#regexiterator.accept.example.basic" class="index">Example#3955 - RegexIterator::accept example</a></li>
<li><a href="regexiterator.construct.php#example-3957" class="index">Example#3956 - RegexIterator::__construct example</a></li>
<li><a href="regexiterator.getflags.php#regexiterator.getflags.example.basic" class="index">Example#3957 - RegexIterator::getFlags example</a></li>
<li><a href="regexiterator.getmode.php#regexiterator.getmode.example.basic" class="index">Example#3958 - RegexIterator::getMode example</a></li>
<li><a href="regexiterator.getpregflags.php#regexiterator.getpregflags.example.basic" class="index">Example#3959 - RegexIterator::getPregFlags example</a></li>
<li><a href="regexiterator.setflags.php#regexiterator.setflags.example.basic" class="index">Example#3960 - RegexIterator::setFlags example</a></li>
<li><a href="regexiterator.setmode.php#regexiterator.setmode.example.basic" class="index">Example#3961 - RegexIterator::setMode example</a></li>
<li><a href="regexiterator.setpregflags.php#regexiterator.setpregflags.example.basic" class="index">Example#3962 - RegexIterator::setPregFlags example</a></li>
<li><a href="splfileinfo.construct.php#example-3964" class="index">Example#3963 - SplFileInfo::__construct example</a></li>
<li><a href="splfileinfo.getatime.php#example-3965" class="index">Example#3964 - SplFileInfo::getATime example</a></li>
<li><a href="splfileinfo.getbasename.php#example-3966" class="index">Example#3965 - SplFileInfo::getBasename example</a></li>
<li><a href="splfileinfo.getctime.php#example-3967" class="index">Example#3966 - SplFileInfo::getCTime example</a></li>
<li><a href="splfileinfo.getextension.php#example-3968" class="index">Example#3967 - SplFileInfo::getExtension example</a></li>
<li><a href="splfileinfo.getfilename.php#example-3969" class="index">Example#3968 - SplFileInfo::getFilename example</a></li>
<li><a href="splfileinfo.getgroup.php#example-3970" class="index">Example#3969 - SplFileInfo::getGroup example</a></li>
<li><a href="splfileinfo.getlinktarget.php#example-3971" class="index">Example#3970 - SplFileInfo::getLinkTarget example</a></li>
<li><a href="splfileinfo.getmtime.php#example-3972" class="index">Example#3971 - SplFileInfo::getMTime example</a></li>
<li><a href="splfileinfo.getowner.php#example-3973" class="index">Example#3972 - SplFileInfo::getOwner example</a></li>
<li><a href="splfileinfo.getpath.php#example-3974" class="index">Example#3973 - SplFileInfo::getPath example</a></li>
<li><a href="splfileinfo.getpathinfo.php#example-3975" class="index">Example#3974 - SplFileInfo::getPathInfo example</a></li>
<li><a href="splfileinfo.getpathname.php#example-3976" class="index">Example#3975 - SplFileInfo::getPathname example</a></li>
<li><a href="splfileinfo.getperms.php#example-3977" class="index">Example#3976 - SplFileInfo::getPerms example</a></li>
<li><a href="splfileinfo.getrealpath.php#example-3978" class="index">Example#3977 - SplFileInfo::getRealPath example</a></li>
<li><a href="splfileinfo.getsize.php#example-3979" class="index">Example#3978 - SplFileInfo::getSize example</a></li>
<li><a href="splfileinfo.gettype.php#example-3980" class="index">Example#3979 - SplFileInfo::getType example</a></li>
<li><a href="splfileinfo.isdir.php#example-3981" class="index">Example#3980 - SplFileInfo::isDir example</a></li>
<li><a href="splfileinfo.isexecutable.php#example-3982" class="index">Example#3981 - SplFileInfo::isExecutable example</a></li>
<li><a href="splfileinfo.isfile.php#example-3983" class="index">Example#3982 - SplFileInfo::isFile example</a></li>
<li><a href="splfileinfo.islink.php#example-3984" class="index">Example#3983 - SplFileInfo::isLink example</a></li>
<li><a href="splfileinfo.isreadable.php#example-3985" class="index">Example#3984 - SplFileInfo::isReadable example</a></li>
<li><a href="splfileinfo.iswritable.php#example-3986" class="index">Example#3985 - SplFileInfo::isWriteable example</a></li>
<li><a href="splfileinfo.openfile.php#example-3987" class="index">Example#3986 - SplFileInfo::openFile example</a></li>
<li><a href="splfileinfo.setfileclass.php#example-3988" class="index">Example#3987 - SplFileInfo::setFileClass example</a></li>
<li><a href="splfileinfo.setinfoclass.php#example-3989" class="index">Example#3988 - SplFileInfo::setFileClass example</a></li>
<li><a href="splfileinfo.tostring.php#example-3990" class="index">Example#3989 - SplFileInfo::__toString example</a></li>
<li><a href="splfileobject.construct.php#example-3991" class="index">Example#3990 - SplFileObject::__construct example</a></li>
<li><a href="splfileobject.current.php#example-3992" class="index">Example#3991 - SplFileObject::current example</a></li>
<li><a href="splfileobject.eof.php#example-3993" class="index">Example#3992 - SplFileObject::eof example</a></li>
<li><a href="splfileobject.fflush.php#example-3994" class="index">Example#3993 - SplFileObject::fflush example</a></li>
<li><a href="splfileobject.fgetc.php#example-3995" class="index">Example#3994 - SplFileObject::fgetc example</a></li>
<li><a href="splfileobject.fgetcsv.php#example-3996" class="index">Example#3995 - SplFileObject::fgetcsv example</a></li>
<li><a href="splfileobject.fgetcsv.php#example-3997" class="index">Example#3996 - SplFileObject::READ_CSV example</a></li>
<li><a href="splfileobject.fgets.php#example-3998" class="index">Example#3997 - SplFileObject::fgets example</a></li>
<li><a href="splfileobject.fgetss.php#example-3999" class="index">Example#3998 - SplFileObject::fgetss example</a></li>
<li><a href="splfileobject.flock.php#example-4000" class="index">Example#3999 - SplFileObject::flock example</a></li>
<li><a href="splfileobject.fpassthru.php#example-4001" class="index">Example#4000 - SplFileObject::fpassthru example</a></li>
<li><a href="splfileobject.fputcsv.php#splfileobject.fputcsv.examples.basic" class="index">Example#4001 - SplFileObject::fputcsv example</a></li>
<li><a href="splfileobject.fread.php#splfileobject.fread.examples.basic" class="index">Example#4002 - SplFileObject::fread example</a></li>
<li><a href="splfileobject.fscanf.php#example-4004" class="index">Example#4003 - SplFileObject::fscanf example</a></li>
<li><a href="splfileobject.fseek.php#example-4005" class="index">Example#4004 - SplFileObject::fseek example</a></li>
<li><a href="splfileobject.fstat.php#example-4006" class="index">Example#4005 - SplFileObject::fstat example</a></li>
<li><a href="splfileobject.ftell.php#example-4007" class="index">Example#4006 - SplFileObject::ftell example</a></li>
<li><a href="splfileobject.ftruncate.php#example-4008" class="index">Example#4007 - SplFileObject::ftruncate example</a></li>
<li><a href="splfileobject.fwrite.php#example-4009" class="index">Example#4008 - SplFileObject::fwrite example</a></li>
<li><a href="splfileobject.getcsvcontrol.php#example-4010" class="index">Example#4009 - SplFileObject::getCsvControl example</a></li>
<li><a href="splfileobject.getflags.php#example-4011" class="index">Example#4010 - SplFileObject::getFlags example</a></li>
<li><a href="splfileobject.getmaxlinelen.php#example-4012" class="index">Example#4011 - SplFileObject::getMaxLineLen example</a></li>
<li><a href="splfileobject.key.php#example-4013" class="index">Example#4012 - SplFileObject::key example</a></li>
<li><a href="splfileobject.key.php#example-4014" class="index">Example#4013 - SplFileObject::key example with SplFileObject::setMaxLineLen</a></li>
<li><a href="splfileobject.next.php#example-4015" class="index">Example#4014 - SplFileObject::next example</a></li>
<li><a href="splfileobject.rewind.php#example-4016" class="index">Example#4015 - SplFileObject::rewind example</a></li>
<li><a href="splfileobject.seek.php#example-4017" class="index">Example#4016 - SplFileObject::seek example</a></li>
<li><a href="splfileobject.setcsvcontrol.php#example-4018" class="index">Example#4017 - SplFileObject::setCsvControl example</a></li>
<li><a href="splfileobject.setflags.php#example-4019" class="index">Example#4018 - SplFileObject::setFlags example</a></li>
<li><a href="splfileobject.setmaxlinelen.php#example-4020" class="index">Example#4019 - SplFileObject::setMaxLineLen example</a></li>
<li><a href="splfileobject.valid.php#example-4021" class="index">Example#4020 - SplFileObject::valid example</a></li>
<li><a href="spltempfileobject.construct.php#example-4022" class="index">Example#4021 - SplTempFileObject example</a></li>
<li><a href="function.class-implements.php#example-4023" class="index">Example#4022 - class_implements example</a></li>
<li><a href="function.class-parents.php#example-4024" class="index">Example#4023 - class_parents example</a></li>
<li><a href="function.class-uses.php#example-4025" class="index">Example#4024 - class_uses example</a></li>
<li><a href="function.iterator-apply.php#example-4026" class="index">Example#4025 - iterator_apply example</a></li>
<li><a href="function.iterator-count.php#example-4027" class="index">Example#4026 - iterator_count example</a></li>
<li><a href="function.iterator-count.php#example-4028" class="index">Example#4027 - iterator_count modifies position</a></li>
<li><a href="function.iterator-count.php#example-4029" class="index">Example#4028 - iterator_count in foreach loops</a></li>
<li><a href="function.iterator-to-array.php#example-4030" class="index">Example#4029 - iterator_to_array example</a></li>
<li><a href="function.spl-autoload-extensions.php#example-4031" class="index">Example#4030 - spl_autoload_extensions example</a></li>
<li><a href="function.spl-autoload-register.php#example-4032" class="index">Example#4031 - spl_autoload_register as a replacement for an __autoload function</a></li>
<li><a href="function.spl-autoload-register.php#example-4033" class="index">Example#4032 - spl_autoload_register example where the class is not loaded</a></li>
<li><a href="function.spl-autoload-register.php#example-4034" class="index">Example#4033 - The identifier will be provided without the leading backslash</a></li>
<li><a href="function.spl-classes.php#example-4035" class="index">Example#4034 - spl_classes example</a></li>
<li><a href="function.spl-object-hash.php#example-4036" class="index">Example#4035 - A spl_object_hash example</a></li>
<li><a href="function.spl-object-id.php#example-4037" class="index">Example#4036 - A spl_object_id example</a></li>
<li><a href="stream.examples.php#example-4038" class="index">Example#4037 - Using file_get_contents
    to retrieve data from multiple sources</a></li>
<li><a href="stream.examples.php#example-4039" class="index">Example#4038 - Making a POST request to an https server</a></li>
<li><a href="stream.examples.php#example-4040" class="index">Example#4039 - Writing data to a compressed file</a></li>
<li><a href="stream.streamwrapper.example-1.php#example-4041" class="index">Example#4040 - A Stream for reading/writing global variables</a></li>
<li><a href="streamwrapper.dir-readdir.php#example-4042" class="index">Example#4041 - Listing files from tar archives</a></li>
<li><a href="function.stream-bucket-prepend.php#example-4043" class="index">Example#4042 - stream_bucket_prepend examples</a></li>
<li><a href="function.stream-context-create.php#example-4044" class="index">Example#4043 - Using stream_context_create</a></li>
<li><a href="function.stream-context-get-default.php#stream-context-get-default.example.basic" class="index">Example#4044 - Using stream_context_get_default</a></li>
<li><a href="function.stream-context-get-options.php#stream-context-get-options.example.basic" class="index">Example#4045 - stream_context_get_options example</a></li>
<li><a href="function.stream-context-get-params.php#example-4047" class="index">Example#4046 - stream_context_get_params example</a></li>
<li><a href="function.stream-context-set-default.php#stream-context-set-default.example.basic" class="index">Example#4047 - stream_context_set_default example</a></li>
<li><a href="function.stream-context-set-options.php#example-4049" class="index">Example#4048 - stream_context_set_options example</a></li>
<li><a href="function.stream-copy-to-stream.php#example-4050" class="index">Example#4049 - A stream_copy_to_stream example</a></li>
<li><a href="function.stream-filter-append.php#example-4051" class="index">Example#4050 - Controlling where filters are applied</a></li>
<li><a href="function.stream-filter-register.php#example-4052" class="index">Example#4051 - Filter for capitalizing characters on foo-bar.txt stream</a></li>
<li><a href="function.stream-filter-register.php#example-4053" class="index">Example#4052 - Registering a generic filter class to match multiple filter names.</a></li>
<li><a href="function.stream-filter-remove.php#example-4054" class="index">Example#4053 - Dynamically refiltering a stream</a></li>
<li><a href="function.stream-get-contents.php#example-4055" class="index">Example#4054 - stream_get_contents example</a></li>
<li><a href="function.stream-get-filters.php#example-4056" class="index">Example#4055 - Using stream_get_filters</a></li>
<li><a href="function.stream-get-meta-data.php#example-4057" class="index">Example#4056 - stream_get_meta_data example using fopen with http</a></li>
<li><a href="function.stream-get-meta-data.php#example-4058" class="index">Example#4057 - stream_get_meta_data example using stream_socket_client with https</a></li>
<li><a href="function.stream-get-transports.php#example-4059" class="index">Example#4058 - Using stream_get_transports</a></li>
<li><a href="function.stream-get-wrappers.php#example-4060" class="index">Example#4059 - stream_get_wrappers example</a></li>
<li><a href="function.stream-get-wrappers.php#example-4061" class="index">Example#4060 - Checking for the existence of a stream wrapper</a></li>
<li><a href="function.stream-is-local.php#example-4062" class="index">Example#4061 - stream_is_local example</a></li>
<li><a href="function.stream-isatty.php#example-4063" class="index">Example#4062 - stream_isatty example</a></li>
<li><a href="function.stream-notification-callback.php#stream-notification-callback.example.basic" class="index">Example#4063 - stream_notification_callback example</a></li>
<li><a href="function.stream-notification-callback.php#stream-notification-callback.example.download" class="index">Example#4064 - Simple progressbar for commandline download client</a></li>
<li><a href="function.stream-resolve-include-path.php#example-4066" class="index">Example#4065 - stream_resolve_include_path example</a></li>
<li><a href="function.stream-select.php#example-4067" class="index">Example#4066 - stream_select Example</a></li>
<li><a href="function.stream-set-timeout.php#example-4068" class="index">Example#4067 - stream_set_timeout example</a></li>
<li><a href="function.stream-set-write-buffer.php#example-4069" class="index">Example#4068 - stream_set_write_buffer example</a></li>
<li><a href="function.stream-socket-client.php#stream-socket-client.example.basic" class="index">Example#4069 - stream_socket_client example</a></li>
<li><a href="function.stream-socket-client.php#stream-socket-client.example.daytime" class="index">Example#4070 - Using UDP connection</a></li>
<li><a href="function.stream-socket-enable-crypto.php#stream-socket-enable-crypto.example.basic" class="index">Example#4071 - stream_socket_enable_crypto example</a></li>
<li><a href="function.stream-socket-pair.php#example-4073" class="index">Example#4072 - A stream_socket_pair example</a></li>
<li><a href="function.stream-socket-recvfrom.php#example-4074" class="index">Example#4073 - stream_socket_recvfrom example</a></li>
<li><a href="function.stream-socket-sendto.php#example-4075" class="index">Example#4074 - stream_socket_sendto Example</a></li>
<li><a href="function.stream-socket-server.php#example-4076" class="index">Example#4075 - Using TCP server sockets</a></li>
<li><a href="function.stream-socket-server.php#example-4077" class="index">Example#4076 - Using UDP server sockets</a></li>
<li><a href="function.stream-socket-shutdown.php#example-4078" class="index">Example#4077 - A stream_socket_shutdown example</a></li>
<li><a href="function.stream-wrapper-register.php#example-4079" class="index">Example#4078 - How to register a stream wrapper</a></li>
<li><a href="class.swoole-coroutine-lock.php#swoole-coroutine-lock.example.basic" class="index">Example#4079 - Basic usage</a></li>
<li><a href="tidy.examples.basic.php#example-4081" class="index">Example#4080 - Basic Tidy usage</a></li>
<li><a href="tidy.body.php#example-4082" class="index">Example#4081 - tidy::getBody example</a></li>
<li><a href="tidy.cleanrepair.php#example-4083" class="index">Example#4082 - tidy::cleanrepair example</a></li>
<li><a href="tidy.construct.php#example-4084" class="index">Example#4083 - tidy::__construct example</a></li>
<li><a href="tidy.diagnose.php#example-4085" class="index">Example#4084 - tidy::diagnose example</a></li>
<li><a href="tidy.props.errorbuffer.php#example-4086" class="index">Example#4085 - tidy_get_error_buffer example</a></li>
<li><a href="tidy.getconfig.php#example-4087" class="index">Example#4086 - tidy::getConfig example</a></li>
<li><a href="tidy.getopt.php#example-4088" class="index">Example#4087 - tidy_getopt example</a></li>
<li><a href="tidy.getoptdoc.php#example-4089" class="index">Example#4088 - Print all options along with their documentation and default value</a></li>
<li><a href="tidy.getstatus.php#example-4090" class="index">Example#4089 - tidy::getStatus example</a></li>
<li><a href="tidy.head.php#example-4091" class="index">Example#4090 - tidy::head example</a></li>
<li><a href="tidy.html.php#example-4092" class="index">Example#4091 - tidy::html example</a></li>
<li><a href="tidy.parsefile.php#example-4093" class="index">Example#4092 - tidy::parseFile example</a></li>
<li><a href="tidy.parsestring.php#example-4094" class="index">Example#4093 - tidy::parseString example</a></li>
<li><a href="tidy.repairfile.php#example-4095" class="index">Example#4094 - tidy::repairFile example</a></li>
<li><a href="tidy.repairstring.php#example-4096" class="index">Example#4095 - tidy::repairString example</a></li>
<li><a href="tidy.root.php#example-4097" class="index">Example#4096 - tidy::root example</a></li>
<li><a href="tidynode.getnextsibling.php#example-4098" class="index">Example#4097 - tidyNode::getNextSibling example</a></li>
<li><a href="tidynode.getparent.php#example-4099" class="index">Example#4098 - tidyNode::getParent example</a></li>
<li><a href="tidynode.getprevioussibling.php#example-4100" class="index">Example#4099 - tidyNode::getPreviousSibling example</a></li>
<li><a href="tidynode.haschildren.php#example-4101" class="index">Example#4100 - tidyNode::hasChildren example</a></li>
<li><a href="tidynode.hassiblings.php#example-4102" class="index">Example#4101 - tidyNode::hasSiblings example</a></li>
<li><a href="tidynode.isasp.php#example-4103" class="index">Example#4102 - Extract ASP code from a mixed HTML document</a></li>
<li><a href="tidynode.iscomment.php#example-4104" class="index">Example#4103 - Extract comments from a mixed HTML document</a></li>
<li><a href="tidynode.ishtml.php#example-4105" class="index">Example#4104 - Extract HTML code from a mixed HTML document</a></li>
<li><a href="tidynode.isjste.php#example-4106" class="index">Example#4105 - Extract JSTE code from a mixed HTML document</a></li>
<li><a href="tidynode.isphp.php#example-4107" class="index">Example#4106 - Extract PHP code from a mixed HTML document</a></li>
<li><a href="tidynode.istext.php#example-4108" class="index">Example#4107 - Extract text from a mixed HTML document</a></li>
<li><a href="function.ob-tidyhandler.php#example-4109" class="index">Example#4108 - ob_tidyhandler example</a></li>
<li><a href="function.tidy-access-count.php#example-4110" class="index">Example#4109 - tidy_access_count example</a></li>
<li><a href="function.tidy-config-count.php#example-4111" class="index">Example#4110 - tidy_config_count example</a></li>
<li><a href="function.tidy-error-count.php#example-4112" class="index">Example#4111 - tidy_error_count example</a></li>
<li><a href="function.tidy-get-output.php#example-4113" class="index">Example#4112 - tidy_get_output example</a></li>
<li><a href="function.tidy-warning-count.php#example-4114" class="index">Example#4113 - tidy_warning_count example</a></li>
<li><a href="tokenizer.examples.php#example-4115" class="index">Example#4114 - Strip comments with the tokenizer</a></li>
<li><a href="phptoken.gettokenname.php#example-4116" class="index">Example#4115 - PhpToken::getTokenName example</a></li>
<li><a href="phptoken.is.php#example-4117" class="index">Example#4116 - PhpToken::is example</a></li>
<li><a href="phptoken.is.php#example-4118" class="index">Example#4117 - Usage with array</a></li>
<li><a href="phptoken.isignorable.php#example-4119" class="index">Example#4118 - PhpToken::isIgnorable example</a></li>
<li><a href="phptoken.tostring.php#example-4120" class="index">Example#4119 - PhpToken::__toString example</a></li>
<li><a href="phptoken.tokenize.php#example-4121" class="index">Example#4120 - PhpToken::tokenize example</a></li>
<li><a href="phptoken.tokenize.php#example-4122" class="index">Example#4121 - Extending PhpToken</a></li>
<li><a href="function.token-get-all.php#example-4123" class="index">Example#4122 - token_get_all example</a></li>
<li><a href="function.token-get-all.php#example-4124" class="index">Example#4123 - token_get_all incorrect usage example</a></li>
<li><a href="function.token-get-all.php#example-4125" class="index">Example#4124 - token_get_all on a class using a reserved word example</a></li>
<li><a href="function.token-name.php#example-4126" class="index">Example#4125 - token_name example</a></li>
<li><a href="function.base64-decode.php#example-4127" class="index">Example#4126 - base64_decode example</a></li>
<li><a href="function.base64-encode.php#example-4128" class="index">Example#4127 - base64_encode example</a></li>
<li><a href="function.get-headers.php#example-4129" class="index">Example#4128 - get_headers example</a></li>
<li><a href="function.get-headers.php#example-4130" class="index">Example#4129 - get_headers using HEAD example</a></li>
<li><a href="function.get-meta-tags.php#example-4131" class="index">Example#4130 - What get_meta_tags parses</a></li>
<li><a href="function.get-meta-tags.php#example-4132" class="index">Example#4131 - What get_meta_tags returns</a></li>
<li><a href="function.http-build-query.php#example-4133" class="index">Example#4132 - Simple usage of http_build_query</a></li>
<li><a href="function.http-build-query.php#example-4134" class="index">Example#4133 - http_build_query with numerically index elements.</a></li>
<li><a href="function.http-build-query.php#example-4135" class="index">Example#4134 - http_build_query with complex arrays</a></li>
<li><a href="function.http-build-query.php#example-4136" class="index">Example#4135 - Using http_build_query with an object</a></li>
<li><a href="function.parse-url.php#example-4137" class="index">Example#4136 - A parse_url example</a></li>
<li><a href="function.parse-url.php#example-4138" class="index">Example#4137 - A parse_url example with missing scheme</a></li>
<li><a href="function.rawurldecode.php#example-4139" class="index">Example#4138 - rawurldecode example</a></li>
<li><a href="function.rawurlencode.php#example-4140" class="index">Example#4139 - including a password in an FTP URL</a></li>
<li><a href="function.rawurlencode.php#example-4141" class="index">Example#4140 - rawurlencode example 2</a></li>
<li><a href="function.urldecode.php#example-4142" class="index">Example#4141 - urldecode example</a></li>
<li><a href="function.urlencode.php#example-4143" class="index">Example#4142 - urlencode example</a></li>
<li><a href="function.urlencode.php#example-4144" class="index">Example#4143 - urlencode and htmlentities example</a></li>
<li><a href="v8js.examples.php#example-4145" class="index">Example#4144 - Basic Javascript execution</a></li>
<li><a href="yaml.examples.php#example-4146" class="index">Example#4145 - Yaml Example</a></li>
<li><a href="yaml.callbacks.parse.php#example-4147" class="index">Example#4146 - Parse callback example</a></li>
<li><a href="yaml.callbacks.emit.php#example-4148" class="index">Example#4147 - Emit callback example</a></li>
<li><a href="function.yaml-emit.php#example-4149" class="index">Example#4148 - yaml_emit example</a></li>
<li><a href="function.yaml-parse.php#example-4150" class="index">Example#4149 - yaml_parse example</a></li>
<li><a href="yaf.tutorials.php#example-4151" class="index">Example#4150 - A classic Application directory layout</a></li>
<li><a href="yaf.tutorials.php#example-4152" class="index">Example#4151 - Entry</a></li>
<li><a href="yaf.tutorials.php#example-4153" class="index">Example#4152 - Rewrite rule</a></li>
<li><a href="yaf.tutorials.php#example-4154" class="index">Example#4153 - Application config</a></li>
<li><a href="yaf.tutorials.php#example-4155" class="index">Example#4154 - Default controller</a></li>
<li><a href="yaf.tutorials.php#example-4156" class="index">Example#4155 - Default view template</a></li>
<li><a href="yaf.tutorials.php#example-4157" class="index">Example#4156 - Run the Application</a></li>
<li><a href="yaf.appconfig.php#example-4158" class="index">Example#4157 - An PHP array example</a></li>
<li><a href="yaf.appconfig.php#example-4159" class="index">Example#4158 - An ini file example</a></li>
<li><a href="yaf-application.bootstrap.php#example-4160" class="index">Example#4159 - A Bootstrap example</a></li>
<li><a href="yaf-application.bootstrap.php#example-4161" class="index">Example#4160 - Yaf_Application::bootstrapexample</a></li>
<li><a href="yaf-application.clearlasterror.php#example-4162" class="index">Example#4161 - Yaf_Application::clearLastErrorexample</a></li>
<li><a href="yaf-application.construct.php#example-4163" class="index">Example#4162 - A ini config file example</a></li>
<li><a href="yaf-application.construct.php#example-4164" class="index">Example#4163 - Yaf_Application::__constructexample</a></li>
<li><a href="yaf-application.construct.php#example-4165" class="index">Example#4164 - Yaf_Application::__constructexample</a></li>
<li><a href="yaf-application.environ.php#example-4166" class="index">Example#4165 - Yaf_Application::environexample</a></li>
<li><a href="yaf-application.execute.php#example-4167" class="index">Example#4166 - Yaf_Application::executeexample</a></li>
<li><a href="yaf-application.getconfig.php#example-4168" class="index">Example#4167 - Yaf_Application::getConfigexample</a></li>
<li><a href="yaf-application.getdispatcher.php#example-4169" class="index">Example#4168 - Yaf_Application::getDispatcherexample</a></li>
<li><a href="yaf-application.getlasterrormsg.php#example-4170" class="index">Example#4169 - Yaf_Application::getLastErrorMsgexample</a></li>
<li><a href="yaf-application.getlasterrorno.php#example-4171" class="index">Example#4170 - Yaf_Application::getLastErrorNoexample</a></li>
<li><a href="yaf-application.getmodules.php#example-4172" class="index">Example#4171 - Yaf_Application::getModulesexample</a></li>
<li><a href="class.yaf-bootstrap-abstract.php#example-4173" class="index">Example#4172 - Bootstrap example</a></li>
<li><a href="yaf-dispatcher.autorender.php#example-4174" class="index">Example#4173 - Yaf_Dispatcher::autoRender example</a></li>
<li><a href="yaf-dispatcher.catchexception.php#example-4175" class="index">Example#4174 - Yaf_Dispatcher::catchException example</a></li>
<li><a href="yaf-dispatcher.registerplugin.php#example-4176" class="index">Example#4175 - Yaf_Dispatcher::registerPlugin example</a></li>
<li><a href="yaf-dispatcher.setview.php#example-4177" class="index">Example#4176 - A custom View engine example</a></li>
<li><a href="yaf-dispatcher.setview.php#example-4178" class="index">Example#4177 - Yaf_Dispatcher::setView example</a></li>
<li><a href="yaf-dispatcher.throwexception.php#example-4179" class="index">Example#4178 - Yaf_Dispatcher::throwexception example</a></li>
<li><a href="yaf-dispatcher.throwexception.php#example-4180" class="index">Example#4179 - Yaf_Dispatcher::throwexceptionexample</a></li>
<li><a href="class.yaf-config-ini.php#example-4181" class="index">Example#4180 - Yaf_Config_Iniexample</a></li>
<li><a href="class.yaf-controller-abstract.php#example-4182" class="index">Example#4181 - define action in a separate file</a></li>
<li><a href="class.yaf-controller-abstract.php#example-4183" class="index">Example#4182 - Dummy_action.php</a></li>
<li><a href="yaf-controller-abstract.forward.php#example-4184" class="index">Example#4183 - Yaf_Controller_Abstract::forwardexample</a></li>
<li><a href="yaf-action-abstract.execute.php#example-4185" class="index">Example#4184 - Yaf_Action_Abstract::executeexample</a></li>
<li><a href="yaf-action-abstract.execute.php#example-4186" class="index">Example#4185 - Yaf_Action_Abstract::executeexample</a></li>
<li><a href="yaf-view-simple.assign.php#example-4187" class="index">Example#4186 - Yaf_View_Simple::assignexample</a></li>
<li><a href="yaf-view-simple.assign.php#example-4188" class="index">Example#4187 - Template example</a></li>
<li><a href="yaf-view-simple.assignref.php#example-4189" class="index">Example#4188 - Yaf_View_Simple::assignRefexample</a></li>
<li><a href="yaf-view-simple.assignref.php#example-4190" class="index">Example#4189 - Template example</a></li>
<li><a href="yaf-view-simple.clear.php#example-4191" class="index">Example#4190 - Yaf_View_Simple::clearexample</a></li>
<li><a href="yaf-view-simple.construct.php#example-4192" class="index">Example#4191 - Yaf_View_Simple::__construct example</a></li>
<li><a href="yaf-view-simple.set.php#example-4193" class="index">Example#4192 - Yaf_View_Simple::__setexample</a></li>
<li><a href="class.yaf-loader.php#example-4194" class="index">Example#4193 - Config example</a></li>
<li><a href="class.yaf-loader.php#example-4195" class="index">Example#4194 - Register localnamespace</a></li>
<li><a href="class.yaf-loader.php#example-4196" class="index">Example#4195 - Load class example</a></li>
<li><a href="class.yaf-loader.php#example-4197" class="index">Example#4196 - Load namespace class example</a></li>
<li><a href="class.yaf-loader.php#example-4198" class="index">Example#4197 - MVC class loading example</a></li>
<li><a href="class.yaf-loader.php#example-4199" class="index">Example#4198 - MVC class distinctions</a></li>
<li><a href="class.yaf-loader.php#example-4200" class="index">Example#4199 - MVC loading example</a></li>
<li><a href="yaf-loader.getnamespacepath.php#example-4201" class="index">Example#4200 - Yaf_Loader::registerNamespaceexample</a></li>
<li><a href="yaf-loader.registerlocalnamespace.php#example-4202" class="index">Example#4201 - Yaf_Loader::registerLocalNamespaceexample</a></li>
<li><a href="yaf-loader.registernamespace.php#example-4203" class="index">Example#4202 - Yaf_Loader::registerNamespaceexample</a></li>
<li><a href="class.yaf-plugin-abstract.php#example-4204" class="index">Example#4203 - Plugin example</a></li>
<li><a href="yaf-plugin-abstract.routershutdown.php#example-4205" class="index">Example#4204 - Yaf_Plugin_Abstract::routerShutdownexample</a></li>
<li><a href="yaf-response-abstract.appendbody.php#example-4206" class="index">Example#4205 - Yaf_Response_Abstract::appendBodyexample</a></li>
<li><a href="yaf-response-abstract.getbody.php#example-4207" class="index">Example#4206 - Yaf_Response_Abstract::getBodyexample</a></li>
<li><a href="yaf-response-abstract.prependbody.php#example-4208" class="index">Example#4207 - Yaf_Response_Abstract::prependBodyexample</a></li>
<li><a href="yaf-response-abstract.response.php#example-4209" class="index">Example#4208 - Yaf_Response_Abstract::responseexample</a></li>
<li><a href="yaf-response-abstract.setbody.php#example-4210" class="index">Example#4209 - Yaf_Response_Abstract::setBodyexample</a></li>
<li><a href="yaf-route-map.assemble.php#example-4211" class="index">Example#4210 - Yaf_Route_Map::assembleexample</a></li>
<li><a href="yaf-route-map.construct.php#example-4212" class="index">Example#4211 - Yaf_Route_Map example</a></li>
<li><a href="yaf-route-map.construct.php#example-4213" class="index">Example#4212 - Yaf_Route_Map example</a></li>
<li><a href="yaf-route-map.construct.php#example-4214" class="index">Example#4213 - Yaf_Route_Map example</a></li>
<li><a href="yaf-route-regex.assemble.php#example-4215" class="index">Example#4214 - Yaf_Route_Regex::assembleexample</a></li>
<li><a href="yaf-route-regex.construct.php#example-4216" class="index">Example#4215 - Yaf_Route_Regex example</a></li>
<li><a href="yaf-route-regex.construct.php#example-4217" class="index">Example#4216 - Yaf_Route_Regex (as of 2.3.0) example</a></li>
<li><a href="yaf-route-regex.construct.php#example-4218" class="index">Example#4217 - Yaf_Route_Regex and named capture group (as of 2.3.0) example</a></li>
<li><a href="yaf-route-regex.construct.php#example-4219" class="index">Example#4218 - Yaf_Route_Regex example</a></li>
<li><a href="yaf-route-rewrite.assemble.php#example-4220" class="index">Example#4219 - Yaf_Route_Rewrite::assembleexample</a></li>
<li><a href="yaf-route-rewrite.construct.php#example-4221" class="index">Example#4220 - Yaf_Route_Rewrite example</a></li>
<li><a href="yaf-route-rewrite.construct.php#example-4222" class="index">Example#4221 - Yaf_Route_Rewrite example</a></li>
<li><a href="yaf-route-rewrite.construct.php#example-4223" class="index">Example#4222 - Yaf_Route_Rewrite (as of 2.3.0) example</a></li>
<li><a href="class.yaf-router.php#example-4224" class="index">Example#4223 - Rewrite rule for Apache</a></li>
<li><a href="class.yaf-router.php#example-4225" class="index">Example#4224 - Rewrite rule for Apache</a></li>
<li><a href="class.yaf-router.php#example-4226" class="index">Example#4225 - Rewrite rule for Lighttpd</a></li>
<li><a href="class.yaf-router.php#example-4227" class="index">Example#4226 - Rewrite rule for Nginx</a></li>
<li><a href="class.yaf-router.php#example-4228" class="index">Example#4227 - Yaf_Route_Static(default route)example</a></li>
<li><a href="yaf-router.addconfig.php#example-4229" class="index">Example#4228 - application.iniexample</a></li>
<li><a href="yaf-router.addconfig.php#example-4230" class="index">Example#4229 - Yaf_Dispatcher::autoConfigexample</a></li>
<li><a href="yaf-router.addroute.php#example-4231" class="index">Example#4230 - Yaf_Dispatcher::autoRenderexample</a></li>
<li><a href="yaf-router.getcurrentroute.php#example-4232" class="index">Example#4231 - Register some routes in Bootstrap</a></li>
<li><a href="yaf-router.getcurrentroute.php#example-4233" class="index">Example#4232 - plugin Dummy.php (under application.directory/plugins)</a></li>
<li><a href="yaf-route-simple.assemble.php#example-4234" class="index">Example#4233 - Yaf_Route_Simple::assembleexample</a></li>
<li><a href="yaf-route-simple.construct.php#example-4235" class="index">Example#4234 - Yaf_Route_Simple::routeexample</a></li>
<li><a href="yaf-route-simple.construct.php#example-4236" class="index">Example#4235 - Yaf_Route_Simple::routeexample</a></li>
<li><a href="yaf-route-static.assemble.php#example-4237" class="index">Example#4236 - Yaf_Route_Static::assembleexample</a></li>
<li><a href="yaf-route-static.route.php#example-4238" class="index">Example#4237 - Yaf_Route_Static::routeexample</a></li>
<li><a href="yaf-route-supervar.assemble.php#example-4239" class="index">Example#4238 - Yaf_Route_Supervar::assemble example</a></li>
<li><a href="yaf-route-supervar.construct.php#example-4240" class="index">Example#4239 - Yaf_Route_Supervar example</a></li>
<li><a href="intro.yaconf.php#example-4241" class="index">Example#4240 - INI example</a></li>
<li><a href="intro.yaconf.php#example-4242" class="index">Example#4241 - INI sections example</a></li>
<li><a href="yaconf.get.php#example-4243" class="index">Example#4242 - INIexample</a></li>
<li><a href="intro.taint.php#example-4244" class="index">Example#4243 - Taintexample</a></li>
<li><a href="ds.examples.php#example-4245" class="index">Example#4244 - Vector</a></li>
<li><a href="ds.examples.php#example-4246" class="index">Example#4245 - Map</a></li>
<li><a href="ds-collection.clear.php#example-4247" class="index">Example#4246 - Ds\Collection::clear example</a></li>
<li><a href="ds-collection.copy.php#example-4248" class="index">Example#4247 - Ds\Collection::copy example</a></li>
<li><a href="ds-collection.isempty.php#example-4249" class="index">Example#4248 - Ds\Collection::isEmpty example</a></li>
<li><a href="ds-collection.toarray.php#example-4250" class="index">Example#4249 - Ds\Collection::toArray example</a></li>
<li><a href="ds-hashable.hash.php#example-4251" class="index">Example#4250 - Ds\Hashable::hash example</a></li>
<li><a href="ds-sequence.allocate.php#example-4252" class="index">Example#4251 - Ds\Sequence::allocate example</a></li>
<li><a href="ds-sequence.apply.php#example-4253" class="index">Example#4252 - Ds\Sequence::apply example</a></li>
<li><a href="ds-sequence.capacity.php#example-4254" class="index">Example#4253 - Ds\Sequence::capacity example</a></li>
<li><a href="ds-sequence.contains.php#example-4255" class="index">Example#4254 - Ds\Sequence::contains example</a></li>
<li><a href="ds-sequence.filter.php#example-4256" class="index">Example#4255 - Ds\Sequence::filter example using callback function</a></li>
<li><a href="ds-sequence.filter.php#example-4257" class="index">Example#4256 - Ds\Sequence::filter example without a callback function</a></li>
<li><a href="ds-sequence.find.php#example-4258" class="index">Example#4257 - Ds\Sequence::find example</a></li>
<li><a href="ds-sequence.first.php#example-4259" class="index">Example#4258 - Ds\Sequence::first example</a></li>
<li><a href="ds-sequence.get.php#example-4260" class="index">Example#4259 - Ds\Sequence::get example</a></li>
<li><a href="ds-sequence.get.php#example-4261" class="index">Example#4260 - Ds\Sequence::get example using array syntax</a></li>
<li><a href="ds-sequence.insert.php#example-4262" class="index">Example#4261 - Ds\Sequence::insert example</a></li>
<li><a href="ds-sequence.join.php#example-4263" class="index">Example#4262 - Ds\Sequence::join example using a separator string</a></li>
<li><a href="ds-sequence.join.php#example-4264" class="index">Example#4263 - Ds\Sequence::join example without a separator string</a></li>
<li><a href="ds-sequence.last.php#example-4265" class="index">Example#4264 - Ds\Sequence::last example</a></li>
<li><a href="ds-sequence.map.php#example-4266" class="index">Example#4265 - Ds\Sequence::map example</a></li>
<li><a href="ds-sequence.merge.php#example-4267" class="index">Example#4266 - Ds\Sequence::merge example</a></li>
<li><a href="ds-sequence.pop.php#example-4268" class="index">Example#4267 - Ds\Sequence::pop example</a></li>
<li><a href="ds-sequence.push.php#example-4269" class="index">Example#4268 - Ds\Sequence::push example</a></li>
<li><a href="ds-sequence.reduce.php#example-4270" class="index">Example#4269 - Ds\Sequence::reduce with initial value example</a></li>
<li><a href="ds-sequence.reduce.php#example-4271" class="index">Example#4270 - Ds\Sequence::reduce without an initial value example</a></li>
<li><a href="ds-sequence.remove.php#example-4272" class="index">Example#4271 - Ds\Sequence::remove example</a></li>
<li><a href="ds-sequence.reverse.php#example-4273" class="index">Example#4272 - Ds\Sequence::reverse example</a></li>
<li><a href="ds-sequence.reversed.php#example-4274" class="index">Example#4273 - Ds\Sequence::reversed example</a></li>
<li><a href="ds-sequence.rotate.php#example-4275" class="index">Example#4274 - Ds\Sequence::rotate example</a></li>
<li><a href="ds-sequence.set.php#example-4276" class="index">Example#4275 - Ds\Sequence::set example</a></li>
<li><a href="ds-sequence.set.php#example-4277" class="index">Example#4276 - Ds\Sequence::set example using array syntax</a></li>
<li><a href="ds-sequence.shift.php#example-4278" class="index">Example#4277 - Ds\Sequence::shift example</a></li>
<li><a href="ds-sequence.slice.php#example-4279" class="index">Example#4278 - Ds\Sequence::slice example</a></li>
<li><a href="ds-sequence.sort.php#example-4280" class="index">Example#4279 - Ds\Sequence::sort example</a></li>
<li><a href="ds-sequence.sort.php#example-4281" class="index">Example#4280 - Ds\Sequence::sort example using a comparator</a></li>
<li><a href="ds-sequence.sorted.php#example-4282" class="index">Example#4281 - Ds\Sequence::sorted example</a></li>
<li><a href="ds-sequence.sorted.php#example-4283" class="index">Example#4282 - Ds\Sequence::sorted example using a comparator</a></li>
<li><a href="ds-sequence.sum.php#example-4284" class="index">Example#4283 - Ds\Sequence::sum integer example</a></li>
<li><a href="ds-sequence.sum.php#example-4285" class="index">Example#4284 - Ds\Sequence::sum float example</a></li>
<li><a href="ds-sequence.unshift.php#example-4286" class="index">Example#4285 - Ds\Sequence::unshift example</a></li>
<li><a href="ds-vector.allocate.php#example-4287" class="index">Example#4286 - Ds\Vector::allocate example</a></li>
<li><a href="ds-vector.apply.php#example-4288" class="index">Example#4287 - Ds\Vector::apply example</a></li>
<li><a href="ds-vector.capacity.php#example-4289" class="index">Example#4288 - Ds\Vector::capacity example</a></li>
<li><a href="ds-vector.clear.php#example-4290" class="index">Example#4289 - Ds\Vector::clear example</a></li>
<li><a href="ds-vector.construct.php#example-4291" class="index">Example#4290 - Ds\Vector::__construct example</a></li>
<li><a href="ds-vector.contains.php#example-4292" class="index">Example#4291 - Ds\Vector::contains example</a></li>
<li><a href="ds-vector.copy.php#example-4293" class="index">Example#4292 - Ds\Vector::copy example</a></li>
<li><a href="ds-vector.filter.php#example-4294" class="index">Example#4293 - Ds\Vector::filter example using callback function</a></li>
<li><a href="ds-vector.filter.php#example-4295" class="index">Example#4294 - Ds\Vector::filter example without a callback function</a></li>
<li><a href="ds-vector.find.php#example-4296" class="index">Example#4295 - Ds\Vector::find example</a></li>
<li><a href="ds-vector.first.php#example-4297" class="index">Example#4296 - Ds\Vector::first example</a></li>
<li><a href="ds-vector.get.php#example-4298" class="index">Example#4297 - Ds\Vector::get example</a></li>
<li><a href="ds-vector.get.php#example-4299" class="index">Example#4298 - Ds\Vector::get example using array syntax</a></li>
<li><a href="ds-vector.insert.php#example-4300" class="index">Example#4299 - Ds\Vector::insert example</a></li>
<li><a href="ds-vector.isempty.php#example-4301" class="index">Example#4300 - Ds\Vector::isEmpty example</a></li>
<li><a href="ds-vector.join.php#example-4302" class="index">Example#4301 - Ds\Vector::join example using a separator string</a></li>
<li><a href="ds-vector.join.php#example-4303" class="index">Example#4302 - Ds\Vector::join example without a separator string</a></li>
<li><a href="ds-vector.last.php#example-4304" class="index">Example#4303 - Ds\Vector::last example</a></li>
<li><a href="ds-vector.map.php#example-4305" class="index">Example#4304 - Ds\Vector::map example</a></li>
<li><a href="ds-vector.merge.php#example-4306" class="index">Example#4305 - Ds\Vector::merge example</a></li>
<li><a href="ds-vector.pop.php#example-4307" class="index">Example#4306 - Ds\Vector::pop example</a></li>
<li><a href="ds-vector.push.php#example-4308" class="index">Example#4307 - Ds\Vector::push example</a></li>
<li><a href="ds-vector.reduce.php#example-4309" class="index">Example#4308 - Ds\Vector::reduce with initial value example</a></li>
<li><a href="ds-vector.reduce.php#example-4310" class="index">Example#4309 - Ds\Vector::reduce without an initial value example</a></li>
<li><a href="ds-vector.remove.php#example-4311" class="index">Example#4310 - Ds\Vector::remove example</a></li>
<li><a href="ds-vector.reverse.php#example-4312" class="index">Example#4311 - Ds\Vector::reverse example</a></li>
<li><a href="ds-vector.reversed.php#example-4313" class="index">Example#4312 - Ds\Vector::reversed example</a></li>
<li><a href="ds-vector.rotate.php#example-4314" class="index">Example#4313 - Ds\Vector::rotate example</a></li>
<li><a href="ds-vector.set.php#example-4315" class="index">Example#4314 - Ds\Vector::set example</a></li>
<li><a href="ds-vector.set.php#example-4316" class="index">Example#4315 - Ds\Vector::set example using array syntax</a></li>
<li><a href="ds-vector.shift.php#example-4317" class="index">Example#4316 - Ds\Vector::shift example</a></li>
<li><a href="ds-vector.slice.php#example-4318" class="index">Example#4317 - Ds\Vector::slice example</a></li>
<li><a href="ds-vector.sort.php#example-4319" class="index">Example#4318 - Ds\Vector::sort example</a></li>
<li><a href="ds-vector.sort.php#example-4320" class="index">Example#4319 - Ds\Vector::sort example using a comparator</a></li>
<li><a href="ds-vector.sorted.php#example-4321" class="index">Example#4320 - Ds\Vector::sorted example</a></li>
<li><a href="ds-vector.sorted.php#example-4322" class="index">Example#4321 - Ds\Vector::sorted example using a comparator</a></li>
<li><a href="ds-vector.sum.php#example-4323" class="index">Example#4322 - Ds\Vector::sum integer example</a></li>
<li><a href="ds-vector.sum.php#example-4324" class="index">Example#4323 - Ds\Vector::sum float example</a></li>
<li><a href="ds-vector.toarray.php#example-4325" class="index">Example#4324 - Ds\Vector::toArray example</a></li>
<li><a href="ds-vector.unshift.php#example-4326" class="index">Example#4325 - Ds\Vector::unshift example</a></li>
<li><a href="ds-deque.allocate.php#example-4327" class="index">Example#4326 - Ds\Deque::allocate example</a></li>
<li><a href="ds-deque.apply.php#example-4328" class="index">Example#4327 - Ds\Deque::apply example</a></li>
<li><a href="ds-deque.capacity.php#example-4329" class="index">Example#4328 - Ds\Deque::capacity example</a></li>
<li><a href="ds-deque.clear.php#example-4330" class="index">Example#4329 - Ds\Deque::clear example</a></li>
<li><a href="ds-deque.construct.php#example-4331" class="index">Example#4330 - Ds\Deque::__construct example</a></li>
<li><a href="ds-deque.contains.php#example-4332" class="index">Example#4331 - Ds\Deque::contains example</a></li>
<li><a href="ds-deque.copy.php#example-4333" class="index">Example#4332 - Ds\Deque::copy example</a></li>
<li><a href="ds-deque.filter.php#example-4334" class="index">Example#4333 - Ds\Deque::filter example using callback function</a></li>
<li><a href="ds-deque.filter.php#example-4335" class="index">Example#4334 - Ds\Deque::filter example without a callback function</a></li>
<li><a href="ds-deque.find.php#example-4336" class="index">Example#4335 - Ds\Deque::find example</a></li>
<li><a href="ds-deque.first.php#example-4337" class="index">Example#4336 - Ds\Deque::first example</a></li>
<li><a href="ds-deque.get.php#example-4338" class="index">Example#4337 - Ds\Deque::get example</a></li>
<li><a href="ds-deque.get.php#example-4339" class="index">Example#4338 - Ds\Deque::get example using array syntax</a></li>
<li><a href="ds-deque.insert.php#example-4340" class="index">Example#4339 - Ds\Deque::insert example</a></li>
<li><a href="ds-deque.isempty.php#example-4341" class="index">Example#4340 - Ds\Deque::isEmpty example</a></li>
<li><a href="ds-deque.join.php#example-4342" class="index">Example#4341 - Ds\Deque::join example using a separator string</a></li>
<li><a href="ds-deque.join.php#example-4343" class="index">Example#4342 - Ds\Deque::join example without a separator string</a></li>
<li><a href="ds-deque.last.php#example-4344" class="index">Example#4343 - Ds\Deque::last example</a></li>
<li><a href="ds-deque.map.php#example-4345" class="index">Example#4344 - Ds\Deque::map example</a></li>
<li><a href="ds-deque.merge.php#example-4346" class="index">Example#4345 - Ds\Deque::merge example</a></li>
<li><a href="ds-deque.pop.php#example-4347" class="index">Example#4346 - Ds\Deque::pop example</a></li>
<li><a href="ds-deque.push.php#example-4348" class="index">Example#4347 - Ds\Deque::push example</a></li>
<li><a href="ds-deque.reduce.php#example-4349" class="index">Example#4348 - Ds\Deque::reduce with initial value example</a></li>
<li><a href="ds-deque.reduce.php#example-4350" class="index">Example#4349 - Ds\Deque::reduce without an initial value example</a></li>
<li><a href="ds-deque.remove.php#example-4351" class="index">Example#4350 - Ds\Deque::remove example</a></li>
<li><a href="ds-deque.reverse.php#example-4352" class="index">Example#4351 - Ds\Deque::reverse example</a></li>
<li><a href="ds-deque.reversed.php#example-4353" class="index">Example#4352 - Ds\Deque::reversed example</a></li>
<li><a href="ds-deque.rotate.php#example-4354" class="index">Example#4353 - Ds\Deque::rotate example</a></li>
<li><a href="ds-deque.set.php#example-4355" class="index">Example#4354 - Ds\Deque::set example</a></li>
<li><a href="ds-deque.set.php#example-4356" class="index">Example#4355 - Ds\Deque::set example using array syntax</a></li>
<li><a href="ds-deque.shift.php#example-4357" class="index">Example#4356 - Ds\Deque::shift example</a></li>
<li><a href="ds-deque.slice.php#example-4358" class="index">Example#4357 - Ds\Deque::slice example</a></li>
<li><a href="ds-deque.sort.php#example-4359" class="index">Example#4358 - Ds\Deque::sort example</a></li>
<li><a href="ds-deque.sort.php#example-4360" class="index">Example#4359 - Ds\Deque::sort example using a comparator</a></li>
<li><a href="ds-deque.sorted.php#example-4361" class="index">Example#4360 - Ds\Deque::sorted example</a></li>
<li><a href="ds-deque.sorted.php#example-4362" class="index">Example#4361 - Ds\Deque::sorted example using a comparator</a></li>
<li><a href="ds-deque.sum.php#example-4363" class="index">Example#4362 - Ds\Deque::sum integer example</a></li>
<li><a href="ds-deque.sum.php#example-4364" class="index">Example#4363 - Ds\Deque::sum float example</a></li>
<li><a href="ds-deque.toarray.php#example-4365" class="index">Example#4364 - Ds\Deque::toArray example</a></li>
<li><a href="ds-deque.unshift.php#example-4366" class="index">Example#4365 - Ds\Deque::unshift example</a></li>
<li><a href="ds-map.allocate.php#example-4367" class="index">Example#4366 - Ds\Map::allocate example</a></li>
<li><a href="ds-map.apply.php#example-4368" class="index">Example#4367 - Ds\Map::apply example</a></li>
<li><a href="ds-map.capacity.php#example-4369" class="index">Example#4368 - Ds\Map::capacity example</a></li>
<li><a href="ds-map.clear.php#example-4370" class="index">Example#4369 - Ds\Map::clear example</a></li>
<li><a href="ds-map.construct.php#example-4371" class="index">Example#4370 - Ds\Map::__construct example</a></li>
<li><a href="ds-map.copy.php#example-4372" class="index">Example#4371 - Ds\Map::copy example</a></li>
<li><a href="ds-map.diff.php#example-4373" class="index">Example#4372 - Ds\Map::diff example</a></li>
<li><a href="ds-map.filter.php#example-4374" class="index">Example#4373 - Ds\Map::filter example using callback function</a></li>
<li><a href="ds-map.filter.php#example-4375" class="index">Example#4374 - Ds\Map::filter example without a callback function</a></li>
<li><a href="ds-map.first.php#example-4376" class="index">Example#4375 - Ds\Map::first example</a></li>
<li><a href="ds-map.get.php#example-4377" class="index">Example#4376 - Ds\Map::get example</a></li>
<li><a href="ds-map.get.php#example-4378" class="index">Example#4377 - Ds\Map::get example using array syntax</a></li>
<li><a href="ds-map.haskey.php#example-4379" class="index">Example#4378 - Ds\Map::hasKey example</a></li>
<li><a href="ds-map.hasvalue.php#example-4380" class="index">Example#4379 - Ds\Map::hasValue example</a></li>
<li><a href="ds-map.intersect.php#example-4381" class="index">Example#4380 - Ds\Map::intersect example</a></li>
<li><a href="ds-map.isempty.php#example-4382" class="index">Example#4381 - Ds\Map::isEmpty example</a></li>
<li><a href="ds-map.keys.php#example-4383" class="index">Example#4382 - Ds\Map::keys example</a></li>
<li><a href="ds-map.ksort.php#example-4384" class="index">Example#4383 - Ds\Map::ksort example</a></li>
<li><a href="ds-map.ksort.php#example-4385" class="index">Example#4384 - Ds\Map::ksort example using a comparator</a></li>
<li><a href="ds-map.ksorted.php#example-4386" class="index">Example#4385 - Ds\Map::ksorted example</a></li>
<li><a href="ds-map.ksorted.php#example-4387" class="index">Example#4386 - Ds\Map::ksorted example using a comparator</a></li>
<li><a href="ds-map.last.php#example-4388" class="index">Example#4387 - Ds\Map::last example</a></li>
<li><a href="ds-map.map.php#example-4389" class="index">Example#4388 - Ds\Map::map example</a></li>
<li><a href="ds-map.merge.php#example-4390" class="index">Example#4389 - Ds\Map::merge example</a></li>
<li><a href="ds-map.pairs.php#example-4391" class="index">Example#4390 - Ds\Map::pairs example</a></li>
<li><a href="ds-map.put.php#example-4392" class="index">Example#4391 - Ds\Map::put example</a></li>
<li><a href="ds-map.put.php#example-4393" class="index">Example#4392 - Ds\Map::put example using objects as keys</a></li>
<li><a href="ds-map.putall.php#example-4394" class="index">Example#4393 - Ds\Map::putAll example</a></li>
<li><a href="ds-map.reduce.php#example-4395" class="index">Example#4394 - Ds\Map::reduce with initial value example</a></li>
<li><a href="ds-map.reduce.php#example-4396" class="index">Example#4395 - Ds\Map::reduce without an initial value example</a></li>
<li><a href="ds-map.remove.php#example-4397" class="index">Example#4396 - Ds\Map::remove example</a></li>
<li><a href="ds-map.reverse.php#example-4398" class="index">Example#4397 - Ds\Map::reverse example</a></li>
<li><a href="ds-map.reversed.php#example-4399" class="index">Example#4398 - Ds\Map::reversed example</a></li>
<li><a href="ds-map.skip.php#example-4400" class="index">Example#4399 - Ds\Map::skip example</a></li>
<li><a href="ds-map.slice.php#example-4401" class="index">Example#4400 - Ds\Map::slice example</a></li>
<li><a href="ds-map.sort.php#example-4402" class="index">Example#4401 - Ds\Map::sort example</a></li>
<li><a href="ds-map.sort.php#example-4403" class="index">Example#4402 - Ds\Map::sort example using a comparator</a></li>
<li><a href="ds-map.sorted.php#example-4404" class="index">Example#4403 - Ds\Map::sort example</a></li>
<li><a href="ds-map.sorted.php#example-4405" class="index">Example#4404 - Ds\Map::sort example using a comparator</a></li>
<li><a href="ds-map.sum.php#example-4406" class="index">Example#4405 - Ds\Map::sum integer example</a></li>
<li><a href="ds-map.sum.php#example-4407" class="index">Example#4406 - Ds\Map::sum float example</a></li>
<li><a href="ds-map.toarray.php#example-4408" class="index">Example#4407 - Ds\Map::toArray example</a></li>
<li><a href="ds-map.union.php#example-4409" class="index">Example#4408 - Ds\Map::union example</a></li>
<li><a href="ds-map.values.php#example-4410" class="index">Example#4409 - Ds\Map::values example</a></li>
<li><a href="ds-map.xor.php#example-4411" class="index">Example#4410 - Ds\Map::xor example</a></li>
<li><a href="ds-pair.clear.php#example-4412" class="index">Example#4411 - Ds\Pair::clear example</a></li>
<li><a href="ds-pair.copy.php#example-4413" class="index">Example#4412 - Ds\Pair::copy example</a></li>
<li><a href="ds-pair.isempty.php#example-4414" class="index">Example#4413 - Ds\Pair::isEmpty example</a></li>
<li><a href="ds-pair.toarray.php#example-4415" class="index">Example#4414 - Ds\Pair::toArray example</a></li>
<li><a href="ds-set.add.php#example-4416" class="index">Example#4415 - Ds\Set::add example using integers</a></li>
<li><a href="ds-set.add.php#example-4417" class="index">Example#4416 - Ds\Set::add example using objects</a></li>
<li><a href="ds-set.allocate.php#example-4418" class="index">Example#4417 - Ds\Set::allocate example</a></li>
<li><a href="ds-set.capacity.php#example-4419" class="index">Example#4418 - Ds\Set::capacity example</a></li>
<li><a href="ds-set.clear.php#example-4420" class="index">Example#4419 - Ds\Set::clear example</a></li>
<li><a href="ds-set.construct.php#example-4421" class="index">Example#4420 - Ds\Set::__construct example</a></li>
<li><a href="ds-set.contains.php#example-4422" class="index">Example#4421 - Ds\Set::contains example</a></li>
<li><a href="ds-set.copy.php#example-4423" class="index">Example#4422 - Ds\Set::copy example</a></li>
<li><a href="ds-set.diff.php#example-4424" class="index">Example#4423 - Ds\Set::diff example</a></li>
<li><a href="ds-set.filter.php#example-4425" class="index">Example#4424 - Ds\Set::filter example using callback function</a></li>
<li><a href="ds-set.filter.php#example-4426" class="index">Example#4425 - Ds\Set::filter example without a callback function</a></li>
<li><a href="ds-set.first.php#example-4427" class="index">Example#4426 - Ds\Set::first example</a></li>
<li><a href="ds-set.get.php#example-4428" class="index">Example#4427 - Ds\Set::get example</a></li>
<li><a href="ds-set.get.php#example-4429" class="index">Example#4428 - Ds\Set::get example using array syntax</a></li>
<li><a href="ds-set.intersect.php#example-4430" class="index">Example#4429 - Ds\Set::intersect example</a></li>
<li><a href="ds-set.isempty.php#example-4431" class="index">Example#4430 - Ds\Set::isEmpty example</a></li>
<li><a href="ds-set.join.php#example-4432" class="index">Example#4431 - Ds\Set::join example using a separator string</a></li>
<li><a href="ds-set.join.php#example-4433" class="index">Example#4432 - Ds\Set::join example without a separator string</a></li>
<li><a href="ds-set.last.php#example-4434" class="index">Example#4433 - Ds\Set::last example</a></li>
<li><a href="ds-set.map.php#example-4435" class="index">Example#4434 - Ds\Set::map example</a></li>
<li><a href="ds-set.merge.php#example-4436" class="index">Example#4435 - Ds\Set::merge example</a></li>
<li><a href="ds-set.reduce.php#example-4437" class="index">Example#4436 - Ds\Set::reduce with initial value example</a></li>
<li><a href="ds-set.reduce.php#example-4438" class="index">Example#4437 - Ds\Set::reduce without an initial value example</a></li>
<li><a href="ds-set.remove.php#example-4439" class="index">Example#4438 - Ds\Set::remove example</a></li>
<li><a href="ds-set.reverse.php#example-4440" class="index">Example#4439 - Ds\Set::reverse example</a></li>
<li><a href="ds-set.reversed.php#example-4441" class="index">Example#4440 - Ds\Set::reversed example</a></li>
<li><a href="ds-set.slice.php#example-4442" class="index">Example#4441 - Ds\Set::slice example</a></li>
<li><a href="ds-set.sort.php#example-4443" class="index">Example#4442 - Ds\Set::sort example</a></li>
<li><a href="ds-set.sort.php#example-4444" class="index">Example#4443 - Ds\Set::sort example using a comparator</a></li>
<li><a href="ds-set.sorted.php#example-4445" class="index">Example#4444 - Ds\Set::sorted example</a></li>
<li><a href="ds-set.sorted.php#example-4446" class="index">Example#4445 - Ds\Set::sorted example using a comparator</a></li>
<li><a href="ds-set.sum.php#example-4447" class="index">Example#4446 - Ds\Set::sum integer example</a></li>
<li><a href="ds-set.sum.php#example-4448" class="index">Example#4447 - Ds\Set::sum float example</a></li>
<li><a href="ds-set.toarray.php#example-4449" class="index">Example#4448 - Ds\Set::toArray example</a></li>
<li><a href="ds-set.union.php#example-4450" class="index">Example#4449 - Ds\Set::union example</a></li>
<li><a href="ds-set.xor.php#example-4451" class="index">Example#4450 - Ds\Set::xor example</a></li>
<li><a href="ds-stack.clear.php#example-4452" class="index">Example#4451 - Ds\Stack::clear example</a></li>
<li><a href="ds-stack.construct.php#example-4453" class="index">Example#4452 - Ds\Stack::__construct example</a></li>
<li><a href="ds-stack.copy.php#example-4454" class="index">Example#4453 - Ds\Stack::copy example</a></li>
<li><a href="ds-stack.isempty.php#example-4455" class="index">Example#4454 - Ds\Stack::isEmpty example</a></li>
<li><a href="ds-stack.peek.php#example-4456" class="index">Example#4455 - Ds\Stack::peek example</a></li>
<li><a href="ds-stack.pop.php#example-4457" class="index">Example#4456 - Ds\Stack::pop example</a></li>
<li><a href="ds-stack.push.php#example-4458" class="index">Example#4457 - Ds\Stack::push example</a></li>
<li><a href="ds-stack.toarray.php#example-4459" class="index">Example#4458 - Ds\Stack::toArray example</a></li>
<li><a href="ds-queue.allocate.php#example-4460" class="index">Example#4459 - Ds\Queue::allocate example</a></li>
<li><a href="ds-queue.capacity.php#example-4461" class="index">Example#4460 - Ds\Queue::capacity example</a></li>
<li><a href="ds-queue.clear.php#example-4462" class="index">Example#4461 - Ds\Queue::clear example</a></li>
<li><a href="ds-queue.construct.php#example-4463" class="index">Example#4462 - Ds\Queue::__construct example</a></li>
<li><a href="ds-queue.copy.php#example-4464" class="index">Example#4463 - Ds\Queue::copy example</a></li>
<li><a href="ds-queue.isempty.php#example-4465" class="index">Example#4464 - Ds\Queue::isEmpty example</a></li>
<li><a href="ds-queue.peek.php#example-4466" class="index">Example#4465 - Ds\Queue::peek example</a></li>
<li><a href="ds-queue.pop.php#example-4467" class="index">Example#4466 - Ds\Queue::pop example</a></li>
<li><a href="ds-queue.push.php#example-4468" class="index">Example#4467 - Ds\Queue::push example</a></li>
<li><a href="ds-queue.toarray.php#example-4469" class="index">Example#4468 - Ds\Queue::toArray example</a></li>
<li><a href="ds-priorityqueue.allocate.php#example-4470" class="index">Example#4469 - Ds\PriorityQueue::allocate example</a></li>
<li><a href="ds-priorityqueue.capacity.php#example-4471" class="index">Example#4470 - Ds\PriorityQueue::capacity example</a></li>
<li><a href="ds-priorityqueue.clear.php#example-4472" class="index">Example#4471 - Ds\PriorityQueue::clear example</a></li>
<li><a href="ds-priorityqueue.construct.php#example-4473" class="index">Example#4472 - Ds\PriorityQueue::__construct example</a></li>
<li><a href="ds-priorityqueue.copy.php#example-4474" class="index">Example#4473 - Ds\PriorityQueue::copy example</a></li>
<li><a href="ds-priorityqueue.isempty.php#example-4475" class="index">Example#4474 - Ds\PriorityQueue::isEmpty example</a></li>
<li><a href="ds-priorityqueue.peek.php#example-4476" class="index">Example#4475 - Ds\PriorityQueue::peek example</a></li>
<li><a href="ds-priorityqueue.pop.php#example-4477" class="index">Example#4476 - Ds\PriorityQueue::pop example</a></li>
<li><a href="ds-priorityqueue.push.php#example-4478" class="index">Example#4477 - Ds\PriorityQueue::push example</a></li>
<li><a href="ds-priorityqueue.toarray.php#example-4479" class="index">Example#4478 - Ds\PriorityQueue::toArray example</a></li>
<li><a href="function.var-representation.php#example-4480" class="index">Example#4479 - var_representation Examples</a></li>
<li><a href="function.var-representation.php#example-4481" class="index">Example#4480 - Escaping control characters</a></li>
<li><a href="function.var-representation.php#example-4482" class="index">Example#4481 - Exporting stdClass</a></li>
<li><a href="function.var-representation.php#example-4483" class="index">Example#4482 - Exporting classes</a></li>
<li><a href="function.var-representation.php#example-4484" class="index">Example#4483 - Using __set_state()</a></li>
<li><a href="curl.examples-basic.php#example-4485" class="index">Example#4484 - Using PHP's cURL module to fetch the example.com homepage</a></li>
<li><a href="function.curl-close.php#example-4486" class="index">Example#4485 - Initializing a new cURL session and fetching a web page</a></li>
<li><a href="function.curl-copy-handle.php#example-4487" class="index">Example#4486 - Copying a cURL handle</a></li>
<li><a href="function.curl-errno.php#example-4488" class="index">Example#4487 - curl_errno example</a></li>
<li><a href="function.curl-error.php#example-4489" class="index">Example#4488 - curl_error example</a></li>
<li><a href="function.curl-escape.php#example-4490" class="index">Example#4489 - curl_escape example</a></li>
<li><a href="function.curl-exec.php#example-4491" class="index">Example#4490 - Fetching a web page</a></li>
<li><a href="function.curl-getinfo.php#example-4492" class="index">Example#4491 - curl_getinfo example</a></li>
<li><a href="function.curl-getinfo.php#example-4493" class="index">Example#4492 - curl_getinfo example with option parameter</a></li>
<li><a href="function.curl-init.php#example-4494" class="index">Example#4493 - Initializing a new cURL session and fetching a web page</a></li>
<li><a href="function.curl-multi-exec.php#example-4495" class="index">Example#4494 - curl_multi_exec example</a></li>
<li><a href="function.curl-reset.php#example-4496" class="index">Example#4495 - curl_reset example</a></li>
<li><a href="function.curl-setopt.php#example-4497" class="index">Example#4496 - Initializing a new cURL session and fetching a web page</a></li>
<li><a href="function.curl-setopt-array.php#example-4498" class="index">Example#4497 - Initializing a new cURL session and fetching a web page</a></li>
<li><a href="function.curl-share-close.php#example-4499" class="index">Example#4498 - curl_share_setopt example</a></li>
<li><a href="function.curl-share-init.php#example-4500" class="index">Example#4499 - curl_share_init example</a></li>
<li><a href="function.curl-share-init-persistent.php#function.curl-share-init-persistent.example.basic" class="index">Example#4500 - curl_share_init_persistent example</a></li>
<li><a href="function.curl-share-setopt.php#example-4502" class="index">Example#4501 - curl_share_setopt example</a></li>
<li><a href="function.curl-strerror.php#example-4503" class="index">Example#4502 - curl_errno example</a></li>
<li><a href="function.curl-unescape.php#example-4504" class="index">Example#4503 - curl_escape example</a></li>
<li><a href="function.curl_upkeep.php#example-4505" class="index">Example#4504 - curl_upkeep example</a></li>
<li><a href="function.curl-version.php#example-4506" class="index">Example#4505 - curl_version example</a></li>
<li><a href="curlfile.construct.php#example-4507" class="index">Example#4506 - CURLFile::__construct example</a></li>
<li><a href="curlfile.construct.php#example-4508" class="index">Example#4507 - CURLFile::__construct uploading multiple files example</a></li>
<li><a href="curlstringfile.construct.php#example-4509" class="index">Example#4508 - CURLStringFile::__construct example</a></li>
<li><a href="event.examples.php#example-4510" class="index">Example#4509 - Simple HTTP client</a></li>
<li><a href="event.examples.php#example-4511" class="index">Example#4510 - HTTP client using asynchronous DNS resolver</a></li>
<li><a href="event.examples.php#example-4512" class="index">Example#4511 - Echo server</a></li>
<li><a href="event.examples.php#example-4513" class="index">Example#4512 - SSL echo server</a></li>
<li><a href="event.examples.php#example-4514" class="index">Example#4513 - Signal handler</a></li>
<li><a href="event.examples.php#example-4515" class="index">Example#4514 - Use libevent's loop to process requests of `eio' extension</a></li>
<li><a href="event.examples.php#example-4516" class="index">Example#4515 - Miscellaneous</a></li>
<li><a href="event.examples.php#example-4517" class="index">Example#4516 - Simple HTTP server</a></li>
<li><a href="event.examples.php#example-4518" class="index">Example#4517 - Simple HTTPS server</a></li>
<li><a href="event.examples.php#example-4519" class="index">Example#4518 - OpenSSL connection</a></li>
<li><a href="event.examples.php#example-4520" class="index">Example#4519 - EventHttpConnection::makeRequest example</a></li>
<li><a href="event.examples.php#example-4521" class="index">Example#4520 - Connection listener based on a UNIX domain socket</a></li>
<li><a href="event.examples.php#event.example.smtp" class="index">Example#4521 - Simple SMTP server</a></li>
<li><a href="event.constructing.signal.events.php#example-4523" class="index">Example#4522 - Handling SIGTERM signal</a></li>
<li><a href="event.add.php#example-4524" class="index">Example#4523 - Adding a custom signal</a></li>
<li><a href="event.add.php#example-4525" class="index">Example#4524 - Adding a timer</a></li>
<li><a href="eventbase.getfeatures.php#example-4526" class="index">Example#4525 - EventBase::getFeatures example</a></li>
<li><a href="eventbase.getmethod.php#example-4527" class="index">Example#4526 - EventBase::getMethod example</a></li>
<li><a href="eventbuffer.search.php#example-4528" class="index">Example#4527 - EventBuffer::search example</a></li>
<li><a href="eventbufferevent.connect.php#example-4529" class="index">Example#4528 - EventBufferEvent::connect example</a></li>
<li><a href="eventbufferevent.connect.php#example-4530" class="index">Example#4529 - Connect to UNIX domain socket which presumably is served by a server, read response from
   the server and output it to the console</a></li>
<li><a href="eventbufferevent.connecthost.php#example-4531" class="index">Example#4530 - EventBufferEvent::connectHost example</a></li>
<li><a href="eventbufferevent.getinput.php#example-4532" class="index">Example#4531 - Buffer event's read callback</a></li>
<li><a href="eventbufferevent.getoutput.php#example-4533" class="index">Example#4532 - EventBufferEvent::getOutput example</a></li>
<li><a href="eventbufferevent.sslerror.php#example-4534" class="index">Example#4533 - EventBufferEvent::sslError example</a></li>
<li><a href="eventbufferevent.sslfilter.php#example-4535" class="index">Example#4534 - Simple SMTP server</a></li>
<li><a href="eventconfig.avoidmethod.php#example-4536" class="index">Example#4535 - EventConfig::avoidMethod example</a></li>
<li><a href="eventconfig.construct.php#example-4537" class="index">Example#4536 - EventConfig::__construct example</a></li>
<li><a href="eventconfig.requirefeatures.php#example-4538" class="index">Example#4537 - EventConfig::requireFeatures example</a></li>
<li><a href="eventhttp.accept.php#example-4539" class="index">Example#4538 - EventHttp::accept example</a></li>
<li><a href="eventhttp.addserveralias.php#example-4540" class="index">Example#4539 - EventHttp::addServerAlias example</a></li>
<li><a href="eventhttp.bind.php#example-4541" class="index">Example#4540 - EventHttp::bind example</a></li>
<li><a href="eventhttp.construct.php#example-4542" class="index">Example#4541 - Simple HTTP server</a></li>
<li><a href="eventhttp.setcallback.php#example-4543" class="index">Example#4542 - EventHttp::setCallback example</a></li>
<li><a href="eventhttp.setdefaultcallback.php#example-4544" class="index">Example#4543 - EventHttp::setDefaultCallback example</a></li>
<li><a href="eventhttpconnection.makerequest.php#example-4545" class="index">Example#4544 - EventHttpConnection::makeRequest example</a></li>
<li><a href="eventhttpconnection.setclosecallback.php#example-4546" class="index">Example#4545 - EventHttpConnection::setCloseCallback example</a></li>
<li><a href="eventhttprequest.construct.php#example-4547" class="index">Example#4546 - EventHttpRequest::__construct example</a></li>
<li><a href="eventhttprequest.senderror.php#example-4548" class="index">Example#4547 - EventHttpRequest::sendError example</a></li>
<li><a href="eventlistener.construct.php#example-4549" class="index">Example#4548 - EventListener::__construct example</a></li>
<li><a href="eventsslcontext.construct.php#example-4550" class="index">Example#4549 - EventSslContext::__construct example</a></li>
<li><a href="ftp.examples-basic.php#example-4551" class="index">Example#4550 - FTP example</a></li>
<li><a href="function.ftp-alloc.php#example-4552" class="index">Example#4551 - ftp_alloc example</a></li>
<li><a href="function.ftp-cdup.php#example-4553" class="index">Example#4552 - ftp_cdup example</a></li>
<li><a href="function.ftp-chdir.php#example-4554" class="index">Example#4553 - ftp_chdir example</a></li>
<li><a href="function.ftp-chmod.php#example-4555" class="index">Example#4554 - ftp_chmod example</a></li>
<li><a href="function.ftp-close.php#example-4556" class="index">Example#4555 - ftp_close example</a></li>
<li><a href="function.ftp-connect.php#example-4557" class="index">Example#4556 - ftp_connect example</a></li>
<li><a href="function.ftp-delete.php#example-4558" class="index">Example#4557 - ftp_delete example</a></li>
<li><a href="function.ftp-exec.php#example-4559" class="index">Example#4558 - ftp_exec example</a></li>
<li><a href="function.ftp-fget.php#example-4560" class="index">Example#4559 - ftp_fget example</a></li>
<li><a href="function.ftp-fput.php#example-4561" class="index">Example#4560 - ftp_fput example</a></li>
<li><a href="function.ftp-get.php#example-4562" class="index">Example#4561 - ftp_get example</a></li>
<li><a href="function.ftp-get-option.php#example-4563" class="index">Example#4562 - ftp_get_option example</a></li>
<li><a href="function.ftp-login.php#example-4564" class="index">Example#4563 - ftp_login example</a></li>
<li><a href="function.ftp-mdtm.php#example-4565" class="index">Example#4564 - ftp_mdtm example</a></li>
<li><a href="function.ftp-mkdir.php#example-4566" class="index">Example#4565 - ftp_mkdir example</a></li>
<li><a href="function.ftp-mlsd.php#example-4567" class="index">Example#4566 - ftp_mlsd example</a></li>
<li><a href="function.ftp-nb-continue.php#example-4568" class="index">Example#4567 - ftp_nb_continue example</a></li>
<li><a href="function.ftp-nb-fget.php#example-4569" class="index">Example#4568 - ftp_nb_fget example</a></li>
<li><a href="function.ftp-nb-fput.php#example-4570" class="index">Example#4569 - ftp_nb_fput example</a></li>
<li><a href="function.ftp-nb-get.php#example-4571" class="index">Example#4570 - ftp_nb_get example</a></li>
<li><a href="function.ftp-nb-get.php#example-4572" class="index">Example#4571 - Resuming a download with ftp_nb_get</a></li>
<li><a href="function.ftp-nb-get.php#example-4573" class="index">Example#4572 - Resuming a download at position 100 to a new
     file with ftp_nb_get</a></li>
<li><a href="function.ftp-nb-put.php#example-4574" class="index">Example#4573 - ftp_nb_put example</a></li>
<li><a href="function.ftp-nb-put.php#example-4575" class="index">Example#4574 - Resuming an upload with ftp_nb_put</a></li>
<li><a href="function.ftp-nlist.php#example-4576" class="index">Example#4575 - ftp_nlist example</a></li>
<li><a href="function.ftp-pasv.php#example-4577" class="index">Example#4576 - ftp_pasv example</a></li>
<li><a href="function.ftp-put.php#example-4578" class="index">Example#4577 - ftp_put example</a></li>
<li><a href="function.ftp-pwd.php#example-4579" class="index">Example#4578 - ftp_pwd example</a></li>
<li><a href="function.ftp-raw.php#example-4580" class="index">Example#4579 - Using ftp_raw to login to an FTP server manually.</a></li>
<li><a href="function.ftp-rawlist.php#example-4581" class="index">Example#4580 - ftp_rawlist example</a></li>
<li><a href="function.ftp-rename.php#example-4582" class="index">Example#4581 - ftp_rename example</a></li>
<li><a href="function.ftp-rmdir.php#example-4583" class="index">Example#4582 - ftp_rmdir example</a></li>
<li><a href="function.ftp-set-option.php#example-4584" class="index">Example#4583 - ftp_set_option example</a></li>
<li><a href="function.ftp-site.php#example-4585" class="index">Example#4584 - Sending a SITE command to an ftp server</a></li>
<li><a href="function.ftp-size.php#example-4586" class="index">Example#4585 - ftp_size example</a></li>
<li><a href="function.ftp-ssl-connect.php#example-4587" class="index">Example#4586 - ftp_ssl_connect example</a></li>
<li><a href="function.ftp-systype.php#example-4588" class="index">Example#4587 - ftp_systype example</a></li>
<li><a href="gearman.examples-reverse.php#example-4589" class="index">Example#4588 - Basic Gearman client and worker</a></li>
<li><a href="gearman.examples-reverse-bg.php#example-4590" class="index">Example#4589 - Basic Gearman client and worker, background</a></li>
<li><a href="gearman.examples-reverse-task.php#example-4591" class="index">Example#4590 - Basic Gearman client and worker, submitting tasks</a></li>
<li><a href="gearmanclient.addserver.php#example-4592" class="index">Example#4591 - Adding two job servers</a></li>
<li><a href="gearmanclient.addservers.php#example-4593" class="index">Example#4592 - Add two job servers</a></li>
<li><a href="gearmanclient.addtask.php#example-4594" class="index">Example#4593 - Basic submission of two tasks</a></li>
<li><a href="gearmanclient.addtask.php#example-4595" class="index">Example#4594 - Basic submission of two tasks with passing application context</a></li>
<li><a href="gearmanclient.addtaskbackground.php#example-4596" class="index">Example#4595 - Two tasks, one background and one not</a></li>
<li><a href="gearmanclient.addtaskhigh.php#example-4597" class="index">Example#4596 - A high priority task along with two normal tasks</a></li>
<li><a href="gearmanclient.addtasklow.php#example-4598" class="index">Example#4597 - A low priority task along with two normal tasks</a></li>
<li><a href="gearmanclient.addtaskstatus.php#example-4599" class="index">Example#4598 - Monitor completion of multiple background tasks</a></li>
<li><a href="gearmanclient.do.php#example-4600" class="index">Example#4599 - Simple job submission with immediate return</a></li>
<li><a href="gearmanclient.do.php#example-4601" class="index">Example#4600 - Submitting a job and retrieving incremental status</a></li>
<li><a href="gearmanclient.dobackground.php#example-4602" class="index">Example#4601 - Submit and monitor a background job</a></li>
<li><a href="gearmanclient.donormal.php#example-4603" class="index">Example#4602 - Simple job submission with immediate return</a></li>
<li><a href="gearmanclient.donormal.php#example-4604" class="index">Example#4603 - Submitting a job and retrieving incremental status</a></li>
<li><a href="gearmanclient.dostatus.php#example-4605" class="index">Example#4604 - Get the status of a long running job</a></li>
<li><a href="gearmanclient.jobstatus.php#example-4606" class="index">Example#4605 - Monitor the status of a long running background job</a></li>
<li><a href="gearmanworker.addfunction.php#example-4607" class="index">Example#4606 - Simple worker making use of extra application context data</a></li>
<li><a href="gearmanworker.addserver.php#example-4608" class="index">Example#4607 - Add alternate Gearman servers</a></li>
<li><a href="gearmanworker.addservers.php#example-4609" class="index">Example#4608 - Add two job servers</a></li>
<li><a href="gearmanworker.setid.php#example-4610" class="index">Example#4609 - GearmanWorker::setId example</a></li>
<li><a href="gearmanworker.settimeout.php#example-4611" class="index">Example#4610 - A simple worker with a 5 second timeout</a></li>
<li><a href="gearmanworker.wait.php#example-4612" class="index">Example#4611 - Running worker in non-blocking mode</a></li>
<li><a href="gearmanworker.work.php#example-4613" class="index">Example#4612 - GearmanWorker::work example</a></li>
<li><a href="ldap.controls.php#example-4614" class="index">Example#4613 - Testing support for paged result control</a></li>
<li><a href="ldap.examples-basic.php#example-4615" class="index">Example#4614 - LDAP search example</a></li>
<li><a href="ldap.examples-controls.php#example-4616" class="index">Example#4615 - Bind with policy information</a></li>
<li><a href="ldap.examples-controls.php#example-4617" class="index">Example#4616 - Modify description only if it's not empty</a></li>
<li><a href="ldap.examples-controls.php#example-4618" class="index">Example#4617 - Read some values before deletion</a></li>
<li><a href="ldap.examples-controls.php#example-4619" class="index">Example#4618 - Delete a reference</a></li>
<li><a href="ldap.examples-controls.php#example-4620" class="index">Example#4619 - Use pagination for a search</a></li>
<li><a href="function.ldap-add.php#example-4621" class="index">Example#4620 - Complete example with authenticated bind</a></li>
<li><a href="function.ldap-bind.php#example-4622" class="index">Example#4621 - Using LDAP Bind</a></li>
<li><a href="function.ldap-bind.php#example-4623" class="index">Example#4622 - Using LDAP Bind Anonymously</a></li>
<li><a href="function.ldap-compare.php#example-4624" class="index">Example#4623 - Complete example of password check</a></li>
<li><a href="function.ldap-connect.php#example-4625" class="index">Example#4624 - Example of connecting to LDAP server.</a></li>
<li><a href="function.ldap-connect.php#example-4626" class="index">Example#4625 - Example of connecting securely to LDAP server.</a></li>
<li><a href="function.ldap-control-paged-result.php#example-4627" class="index">Example#4626 - LDAP pagination</a></li>
<li><a href="function.ldap-control-paged-result.php#example-4628" class="index">Example#4627 - LDAP pagination</a></li>
<li><a href="function.ldap-count-entries.php#ldap-count-entries.example.basic" class="index">Example#4628 - ldap_count_entries example</a></li>
<li><a href="function.ldap-err2str.php#example-4630" class="index">Example#4629 - Enumerating all LDAP error messages</a></li>
<li><a href="function.ldap-errno.php#example-4631" class="index">Example#4630 - Generating and catching an error</a></li>
<li><a href="function.ldap-escape.php#example-4632" class="index">Example#4631 - Searching for an email address</a></li>
<li><a href="function.ldap-exop.php#example-4633" class="index">Example#4632 - Whoami extended operation</a></li>
<li><a href="function.ldap-exop-passwd.php#example-4634" class="index">Example#4633 - PASSWD extended operation</a></li>
<li><a href="function.ldap-get-attributes.php#example-4635" class="index">Example#4634 - Show the list of attributes held for a particular directory entry</a></li>
<li><a href="function.ldap-get-option.php#example-4636" class="index">Example#4635 - Check protocol version</a></li>
<li><a href="function.ldap-get-values.php#example-4637" class="index">Example#4636 - List all values of the &quot;mail&quot; attribute for a directory entry</a></li>
<li><a href="function.ldap-list.php#example-4638" class="index">Example#4637 - Produce a list of all organizational units of an organization</a></li>
<li><a href="function.ldap-modify-batch.php#example-4639" class="index">Example#4638 - Add a telephone number to a contact</a></li>
<li><a href="function.ldap-modify-batch.php#example-4640" class="index">Example#4639 - Rename a user</a></li>
<li><a href="function.ldap-modify-batch.php#example-4641" class="index">Example#4640 - Add two e-mail addresses to a user</a></li>
<li><a href="function.ldap-modify-batch.php#example-4642" class="index">Example#4641 - Change a user's password</a></li>
<li><a href="function.ldap-modify-batch.php#example-4643" class="index">Example#4642 - Change a user's password (Active Directory)</a></li>
<li><a href="function.ldap-parse-result.php#example-4644" class="index">Example#4643 - ldap_parse_result example</a></li>
<li><a href="function.ldap-search.php#example-4645" class="index">Example#4644 - LDAP search</a></li>
<li><a href="function.ldap-set-option.php#example-4646" class="index">Example#4645 - Set protocol version</a></li>
<li><a href="function.ldap-set-option.php#example-4647" class="index">Example#4646 - Set server controls</a></li>
<li><a href="function.ldap-sort.php#example-4648" class="index">Example#4647 - LDAP sort</a></li>
<li><a href="memcache.examples-overview.php#example-4649" class="index">Example#4648 - memcache extension overview example</a></li>
<li><a href="memcache.examples-overview.php#example-4650" class="index">Example#4649 - Using memcache session handler</a></li>
<li><a href="memcache.add.php#example-4651" class="index">Example#4650 - Memcache::add example</a></li>
<li><a href="memcache.addserver.php#example-4652" class="index">Example#4651 - Memcache::addServer example</a></li>
<li><a href="memcache.close.php#example-4653" class="index">Example#4652 - Memcache::close example</a></li>
<li><a href="memcache.connect.php#example-4654" class="index">Example#4653 - Memcache::connect example</a></li>
<li><a href="memcache.decrement.php#example-4655" class="index">Example#4654 - Memcache::decrement example</a></li>
<li><a href="memcache.delete.php#example-4656" class="index">Example#4655 - Memcache::delete example</a></li>
<li><a href="memcache.flush.php#example-4657" class="index">Example#4656 - Memcache::flush example</a></li>
<li><a href="memcache.get.php#example-4658" class="index">Example#4657 - Memcache::get example</a></li>
<li><a href="memcache.getextendedstats.php#example-4659" class="index">Example#4658 - Memcache::getExtendedStats example</a></li>
<li><a href="memcache.getserverstatus.php#example-4660" class="index">Example#4659 - Memcache::getServerStatus example</a></li>
<li><a href="memcache.getversion.php#example-4661" class="index">Example#4660 - Memcache::getVersion example</a></li>
<li><a href="memcache.increment.php#example-4662" class="index">Example#4661 - Memcache::increment example</a></li>
<li><a href="memcache.pconnect.php#example-4663" class="index">Example#4662 - Memcache::pconnect example</a></li>
<li><a href="memcache.replace.php#example-4664" class="index">Example#4663 - Memcache::replace example</a></li>
<li><a href="memcache.set.php#example-4665" class="index">Example#4664 - Memcache::set example</a></li>
<li><a href="memcache.set.php#example-4666" class="index">Example#4665 - Memcache::set example</a></li>
<li><a href="memcache.setcompressthreshold.php#example-4667" class="index">Example#4666 - Memcache::setCompressThreshold example</a></li>
<li><a href="memcache.setserverparams.php#example-4668" class="index">Example#4667 - Memcache::setServerParams example</a></li>
<li><a href="memcached.callbacks.result.php#example-4669" class="index">Example#4668 - Result callback example</a></li>
<li><a href="memcached.callbacks.read-through.php#example-4670" class="index">Example#4669 - Read-through callback example</a></li>
<li><a href="memcached.addserver.php#example-4671" class="index">Example#4670 - Memcached::addServer example</a></li>
<li><a href="memcached.addservers.php#example-4672" class="index">Example#4671 - Memcached::addServers example</a></li>
<li><a href="memcached.append.php#example-4673" class="index">Example#4672 - Memcached::append example</a></li>
<li><a href="memcached.cas.php#example-4674" class="index">Example#4673 - Memcached::cas example</a></li>
<li><a href="memcached.construct.php#example-4675" class="index">Example#4674 - Creating a Memcached object</a></li>
<li><a href="memcached.decrement.php#example-4676" class="index">Example#4675 - Memcached::decrement example</a></li>
<li><a href="memcached.delete.php#example-4677" class="index">Example#4676 - Memcached::delete example</a></li>
<li><a href="memcached.fetch.php#example-4678" class="index">Example#4677 - Memcached::fetch example</a></li>
<li><a href="memcached.fetchall.php#example-4679" class="index">Example#4678 - Memcached::getDelayed example</a></li>
<li><a href="memcached.flush.php#example-4680" class="index">Example#4679 - Memcached::flush example</a></li>
<li><a href="memcached.get.php#example-4681" class="index">Example#4680 - Memcached::get example #1</a></li>
<li><a href="memcached.get.php#example-4682" class="index">Example#4681 - Memcached::get example #2</a></li>
<li><a href="memcached.getdelayed.php#example-4683" class="index">Example#4682 - Memcached::getDelayed example</a></li>
<li><a href="memcached.getmulti.php#example-4684" class="index">Example#4683 - Memcached::getMulti example for Memcached v3</a></li>
<li><a href="memcached.getmulti.php#example-4685" class="index">Example#4684 - Memcached::getMulti example for Memcached v1 and v2</a></li>
<li><a href="memcached.getmulti.php#example-4686" class="index">Example#4685 - Memcached::GET_PRESERVE_ORDER example for Memcached v3</a></li>
<li><a href="memcached.getmulti.php#example-4687" class="index">Example#4686 - Memcached::GET_PRESERVE_ORDER example for Memcached v1 and v2</a></li>
<li><a href="memcached.getoption.php#example-4688" class="index">Example#4687 - Retrieving Memcached options</a></li>
<li><a href="memcached.getresultcode.php#example-4689" class="index">Example#4688 - Memcached::getResultCode example</a></li>
<li><a href="memcached.getresultmessage.php#example-4690" class="index">Example#4689 - Memcached::getResultMessage example</a></li>
<li><a href="memcached.getserverbykey.php#example-4691" class="index">Example#4690 - Memcached::getServerByKey example</a></li>
<li><a href="memcached.getserverlist.php#example-4692" class="index">Example#4691 - Memcached::getServerList example</a></li>
<li><a href="memcached.getstats.php#example-4693" class="index">Example#4692 - Memcached::getStats example</a></li>
<li><a href="memcached.getversion.php#example-4694" class="index">Example#4693 - Memcached::getVersion example</a></li>
<li><a href="memcached.increment.php#example-4695" class="index">Example#4694 - Memcached::increment example</a></li>
<li><a href="memcached.prepend.php#example-4696" class="index">Example#4695 - Memcached::prepend example</a></li>
<li><a href="memcached.set.php#example-4697" class="index">Example#4696 - Memcached::set example</a></li>
<li><a href="memcached.setbykey.php#example-4698" class="index">Example#4697 - Memcached::setByKey example</a></li>
<li><a href="memcached.setmulti.php#example-4699" class="index">Example#4698 - Memcached::setMulti example</a></li>
<li><a href="memcached.setoption.php#example-4700" class="index">Example#4699 - Setting a Memcached option</a></li>
<li><a href="memcached.setoptions.php#example-4701" class="index">Example#4700 - Setting Memcached options</a></li>
<li><a href="function.mqseries-back.php#example-4702" class="index">Example#4701 - mqseries_back
     example</a></li>
<li><a href="function.mqseries-begin.php#example-4703" class="index">Example#4702 - mqseries_begin
     example</a></li>
<li><a href="function.mqseries-close.php#example-4704" class="index">Example#4703 - mqseries_close
     example</a></li>
<li><a href="function.mqseries-cmit.php#example-4705" class="index">Example#4704 - mqseries_cmit
     example</a></li>
<li><a href="function.mqseries-conn.php#example-4706" class="index">Example#4705 - mqseries_conn
     example</a></li>
<li><a href="function.mqseries-connx.php#example-4707" class="index">Example#4706 - mqseries_connx
     example</a></li>
<li><a href="function.mqseries-connx.php#example-4708" class="index">Example#4707 - mqseries_connx
     example using SSL connection &amp; OCSP Responder URL</a></li>
<li><a href="function.mqseries-disc.php#example-4709" class="index">Example#4708 - mqseries_disc
     example</a></li>
<li><a href="function.mqseries-get.php#example-4710" class="index">Example#4709 - mqseries_get
     example</a></li>
<li><a href="function.mqseries-inq.php#example-4711" class="index">Example#4710 - mqseries_inq
     example</a></li>
<li><a href="function.mqseries-open.php#example-4712" class="index">Example#4711 - mqseries_open
     example</a></li>
<li><a href="function.mqseries-put.php#example-4713" class="index">Example#4712 - mqseries_put
     example</a></li>
<li><a href="function.mqseries-strerror.php#example-4714" class="index">Example#4713 - mqseries_strerror
     example</a></li>
<li><a href="function.dns-get-record.php#example-4715" class="index">Example#4714 - Using dns_get_record</a></li>
<li><a href="function.dns-get-record.php#example-4716" class="index">Example#4715 - Using dns_get_record and DNS_ANY</a></li>
<li><a href="function.fsockopen.php#example-4717" class="index">Example#4716 - fsockopen Example</a></li>
<li><a href="function.fsockopen.php#example-4718" class="index">Example#4717 - Using UDP connection</a></li>
<li><a href="function.gethostbyaddr.php#example-4719" class="index">Example#4718 - A simple gethostbyaddr example</a></li>
<li><a href="function.gethostbyname.php#example-4720" class="index">Example#4719 - A simple gethostbyname example</a></li>
<li><a href="function.gethostbynamel.php#example-4721" class="index">Example#4720 - gethostbynamel example</a></li>
<li><a href="function.gethostname.php#example-4722" class="index">Example#4721 - A simple gethostname example</a></li>
<li><a href="function.getprotobyname.php#example-4723" class="index">Example#4722 - getprotobyname example</a></li>
<li><a href="function.getservbyname.php#example-4724" class="index">Example#4723 - getservbyname example</a></li>
<li><a href="function.header.php#example-4725" class="index">Example#4724 - Download dialog</a></li>
<li><a href="function.header.php#example-4726" class="index">Example#4725 - Caching directives</a></li>
<li><a href="function.header.php#example-4727" class="index">Example#4726 - Setting a cookie</a></li>
<li><a href="function.header-register-callback.php#header-register-callback.example.basic" class="index">Example#4727 - header_register_callback example</a></li>
<li><a href="function.header-remove.php#example-4729" class="index">Example#4728 - Unsetting specific header.</a></li>
<li><a href="function.header-remove.php#example-4730" class="index">Example#4729 - Unsetting all previously set headers.</a></li>
<li><a href="function.headers-list.php#example-4731" class="index">Example#4730 - Example using headers_list</a></li>
<li><a href="function.headers-sent.php#example-4732" class="index">Example#4731 - Examples using headers_sent</a></li>
<li><a href="function.http-get-last-response-headers.php#function.http-get-last-response-headers.example.basic" class="index">Example#4732 - http_get_last_response_headers example</a></li>
<li><a href="function.http-response-code.php#example-4734" class="index">Example#4733 - Using http_response_code in a web server environment</a></li>
<li><a href="function.http-response-code.php#example-4735" class="index">Example#4734 - Using http_response_code in a CLI environment</a></li>
<li><a href="function.inet-ntop.php#example-4736" class="index">Example#4735 - inet_ntop Example</a></li>
<li><a href="function.inet-pton.php#example-4737" class="index">Example#4736 - inet_pton Example</a></li>
<li><a href="function.ip2long.php#example-4738" class="index">Example#4737 - ip2long Example</a></li>
<li><a href="function.ip2long.php#example-4739" class="index">Example#4738 - Displaying an IP address</a></li>
<li><a href="function.request-parse-body.php#function.request-parse-body.example.basic" class="index">Example#4739 - request_parse_body example</a></li>
<li><a href="function.request-parse-body.php#function.request-parse-body.example.options" class="index">Example#4740 - request_parse_body example with customized options</a></li>
<li><a href="function.setcookie.php#example-4742" class="index">Example#4741 - setcookie send example</a></li>
<li><a href="function.setcookie.php#example-4743" class="index">Example#4742 - setcookie delete example</a></li>
<li><a href="function.setcookie.php#example-4744" class="index">Example#4743 - setcookie and arrays</a></li>
<li><a href="function.syslog.php#example-4745" class="index">Example#4744 - Using syslog</a></li>
<li><a href="rrd.examples-procedural.php#example-4746" class="index">Example#4745 - Procedural usage of rrd</a></li>
<li><a href="rrd.examples-oop.php#example-4747" class="index">Example#4746 - OO usage of rrd</a></li>
<li><a href="rrdgraph.setoptions.php#example-4748" class="index">Example#4747 - RRDGraph::setOptions example</a></li>
<li><a href="rrdgraph.setoptions.php#example-4749" class="index">Example#4748 - Set multiple color options</a></li>
<li><a href="rrdupdater.update.php#example-4750" class="index">Example#4749 - RRDUpdater::update examples</a></li>
<li><a href="function.scoutapm-get-calls.php#example-4751" class="index">Example#4750 - Fetch instrumented calls</a></li>
<li><a href="function.scoutapm-list-instrumented-functions.php#example-4752" class="index">Example#4751 - Fetch the list of functions scoutapm will instrument</a></li>
<li><a href="function.snmp-get-quick-print.php#example-4753" class="index">Example#4752 - snmp_get_quick_print example</a></li>
<li><a href="function.snmp-get-valueretrieval.php#example-4754" class="index">Example#4753 - Using snmp_get_valueretrieval</a></li>
<li><a href="function.snmp-read-mib.php#example-4755" class="index">Example#4754 - Using snmp_read_mib</a></li>
<li><a href="function.snmp-set-enum-print.php#example-4756" class="index">Example#4755 - Using snmp_set_enum_print</a></li>
<li><a href="function.snmp-set-oid-output-format.php#example-4757" class="index">Example#4756 - Using snmprealwalk</a></li>
<li><a href="function.snmp-set-quick-print.php#example-4758" class="index">Example#4757 - Using snmp_set_quick_print</a></li>
<li><a href="function.snmp-set-valueretrieval.php#example-4759" class="index">Example#4758 - Using
     snmp_set_valueretrieval</a></li>
<li><a href="function.snmp2-get.php#example-4760" class="index">Example#4759 - Using snmp2_get</a></li>
<li><a href="function.snmp2-getnext.php#example-4761" class="index">Example#4760 - Using snmp2_get_next</a></li>
<li><a href="function.snmp2-real-walk.php#example-4762" class="index">Example#4761 - Using snmp2_real_walk</a></li>
<li><a href="function.snmp2-set.php#example-4763" class="index">Example#4762 - Using snmp2_set</a></li>
<li><a href="function.snmp2-set.php#example-4764" class="index">Example#4763 - Using snmp2_set for setting BITS SNMP object id</a></li>
<li><a href="function.snmp2-walk.php#example-4765" class="index">Example#4764 - snmp2_walk Example</a></li>
<li><a href="function.snmp3-get.php#example-4766" class="index">Example#4765 - Using snmp3_get</a></li>
<li><a href="function.snmp3-getnext.php#example-4767" class="index">Example#4766 - Using snmp3_getnext</a></li>
<li><a href="function.snmp3-real-walk.php#example-4768" class="index">Example#4767 - Using
     snmp3_real_walk</a></li>
<li><a href="function.snmp3-set.php#example-4769" class="index">Example#4768 - Using snmp3_set</a></li>
<li><a href="function.snmp3-set.php#example-4770" class="index">Example#4769 - Using snmp3_set for setting BITS SNMP object id</a></li>
<li><a href="function.snmp3-walk.php#example-4771" class="index">Example#4770 - snmp3_walk Example</a></li>
<li><a href="function.snmpget.php#example-4772" class="index">Example#4771 - Using snmpget</a></li>
<li><a href="function.snmpgetnext.php#example-4773" class="index">Example#4772 - Using snmpgetnext</a></li>
<li><a href="function.snmprealwalk.php#example-4774" class="index">Example#4773 - Using snmprealwalk</a></li>
<li><a href="function.snmpset.php#example-4775" class="index">Example#4774 - Using snmpset</a></li>
<li><a href="function.snmpset.php#example-4776" class="index">Example#4775 - Using snmpset for setting BITS SNMP object id</a></li>
<li><a href="function.snmpwalk.php#example-4777" class="index">Example#4776 - snmpwalk Example</a></li>
<li><a href="function.snmpwalkoid.php#example-4778" class="index">Example#4777 - snmpwalkoid Example</a></li>
<li><a href="snmp.close.php#snmp.close.example.basic" class="index">Example#4778 - SNMP::close example</a></li>
<li><a href="snmp.construct.php#snmp.construct.example.basic" class="index">Example#4779 - Fetching the physical location of the host</a></li>
<li><a href="snmp.get.php#snmp.get.example.singleoid" class="index">Example#4780 - Single SNMP object</a></li>
<li><a href="snmp.get.php#snmp.get.example.oidarray" class="index">Example#4781 - Multiple SNMP objects</a></li>
<li><a href="snmp.geterrno.php#snmp.geterrno.example.basic" class="index">Example#4782 - SNMP::getErrno example</a></li>
<li><a href="snmp.geterror.php#snmp.geterror.example.basic" class="index">Example#4783 - SNMP::getError example</a></li>
<li><a href="snmp.getnext.php#snmp.getnext.example.singleoid" class="index">Example#4784 - Single SNMP object</a></li>
<li><a href="snmp.getnext.php#snmp.getnext.example.oidarray" class="index">Example#4785 - Miltiple SNMP objects</a></li>
<li><a href="snmp.set.php#snmp.set.example.basic" class="index">Example#4786 - Set single SNMP object id</a></li>
<li><a href="snmp.set.php#snmp.set.example.multiple" class="index">Example#4787 - Set multiple values using single SNMP::set
   call</a></li>
<li><a href="snmp.set.php#snmp.set.example.bits" class="index">Example#4788 - Using SNMP::set for setting BITS SNMP object id</a></li>
<li><a href="snmp.setsecurity.php#snmp.setsecurity.example.basic" class="index">Example#4789 - SNMP::setSecurity example</a></li>
<li><a href="snmp.walk.php#snmp.walk.example.basic" class="index">Example#4790 - SNMP::walk example</a></li>
<li><a href="snmp.walk.php#snmp.walk.example.suffix-as-key" class="index">Example#4791 - suffixAsKey example</a></li>
<li><a href="sockets.examples.php#example-4793" class="index">Example#4792 - Socket example: Simple TCP/IP server</a></li>
<li><a href="sockets.examples.php#example-4794" class="index">Example#4793 - Socket example: Simple TCP/IP client</a></li>
<li><a href="function.socket-atmark.php#example-4795" class="index">Example#4794 - Using socket_atmark to set the source address</a></li>
<li><a href="function.socket-bind.php#example-4796" class="index">Example#4795 - Using socket_bind to set the source address</a></li>
<li><a href="function.socket-create-pair.php#example-4797" class="index">Example#4796 - socket_create_pair example</a></li>
<li><a href="function.socket-create-pair.php#example-4798" class="index">Example#4797 - socket_create_pair IPC example</a></li>
<li><a href="function.socket-get-option.php#example-4799" class="index">Example#4798 - socket_get_option example</a></li>
<li><a href="function.socket-import-stream.php#example-4800" class="index">Example#4799 - socket_import_stream example</a></li>
<li><a href="function.socket-last-error.php#example-4801" class="index">Example#4800 - socket_last_error example</a></li>
<li><a href="function.socket-recv.php#example-4802" class="index">Example#4801 - socket_recv example</a></li>
<li><a href="function.socket-recvfrom.php#example-4803" class="index">Example#4802 - socket_recvfrom example</a></li>
<li><a href="function.socket-select.php#example-4804" class="index">Example#4803 - Using null with socket_select</a></li>
<li><a href="function.socket-select.php#example-4805" class="index">Example#4804 - Understanding socket_select's result</a></li>
<li><a href="function.socket-select.php#example-4806" class="index">Example#4805 - socket_select example</a></li>
<li><a href="function.socket-sendto.php#example-4807" class="index">Example#4806 - socket_sendto Example</a></li>
<li><a href="function.socket-set-block.php#example-4808" class="index">Example#4807 - socket_set_block example</a></li>
<li><a href="function.socket-set-nonblock.php#example-4809" class="index">Example#4808 - socket_set_nonblock example</a></li>
<li><a href="function.socket-set-option.php#example-4810" class="index">Example#4809 - socket_set_option example</a></li>
<li><a href="function.socket-strerror.php#example-4811" class="index">Example#4810 - socket_strerror example</a></li>
<li><a href="function.ssh2-auth-agent.php#example-4812" class="index">Example#4811 - Authenticating with a ssh agent</a></li>
<li><a href="function.ssh2-auth-hostbased-file.php#example-4813" class="index">Example#4812 - Authentication using a public hostkey</a></li>
<li><a href="function.ssh2-auth-none.php#example-4814" class="index">Example#4813 - Retrieving a list of authentication methods</a></li>
<li><a href="function.ssh2-auth-password.php#example-4815" class="index">Example#4814 - Authenticating with a password</a></li>
<li><a href="function.ssh2-auth-pubkey-file.php#example-4816" class="index">Example#4815 - Authentication using a public key</a></li>
<li><a href="function.ssh2-connect.php#example-4817" class="index">Example#4816 - ssh2_connect example</a></li>
<li><a href="function.ssh2-exec.php#example-4818" class="index">Example#4817 - Executing a command</a></li>
<li><a href="function.ssh2-fetch-stream.php#example-4819" class="index">Example#4818 - Opening a shell and retrieving the stderr stream associated with it</a></li>
<li><a href="function.ssh2-fingerprint.php#example-4820" class="index">Example#4819 - Checking the fingerprint against a known value</a></li>
<li><a href="function.ssh2-methods-negotiated.php#example-4821" class="index">Example#4820 - Determining what methods were negotiated</a></li>
<li><a href="function.ssh2-publickey-add.php#example-4822" class="index">Example#4821 - Adding a publickey with ssh2_publickey_add</a></li>
<li><a href="function.ssh2-publickey-list.php#example-4823" class="index">Example#4822 - Listing authorized keys with ssh2_publickey_list</a></li>
<li><a href="function.ssh2-scp-recv.php#example-4824" class="index">Example#4823 - Downloading a file via SCP</a></li>
<li><a href="function.ssh2-scp-send.php#example-4825" class="index">Example#4824 - Uploading a file via SCP</a></li>
<li><a href="function.ssh2-sftp.php#example-4826" class="index">Example#4825 - Opening a file via SFTP</a></li>
<li><a href="function.ssh2-sftp-chmod.php#example-4827" class="index">Example#4826 - Changing the mode of a file on a remote server</a></li>
<li><a href="function.ssh2-sftp-lstat.php#example-4828" class="index">Example#4827 - Stating a symbolic link via SFTP</a></li>
<li><a href="function.ssh2-sftp-mkdir.php#example-4829" class="index">Example#4828 - Creating a directory on a remote server</a></li>
<li><a href="function.ssh2-sftp-readlink.php#example-4830" class="index">Example#4829 - Reading a symbolic link</a></li>
<li><a href="function.ssh2-sftp-realpath.php#example-4831" class="index">Example#4830 - Resolving a pathname</a></li>
<li><a href="function.ssh2-sftp-rename.php#example-4832" class="index">Example#4831 - Renaming a file via sftp</a></li>
<li><a href="function.ssh2-sftp-rmdir.php#example-4833" class="index">Example#4832 - Removing a directory on a remote server</a></li>
<li><a href="function.ssh2-sftp-stat.php#example-4834" class="index">Example#4833 - Stating a file via SFTP</a></li>
<li><a href="function.ssh2-sftp-symlink.php#example-4835" class="index">Example#4834 - Creating a symbolic link</a></li>
<li><a href="function.ssh2-sftp-unlink.php#example-4836" class="index">Example#4835 - Deleting a file</a></li>
<li><a href="function.ssh2-shell.php#example-4837" class="index">Example#4836 - Requesting an interactive shell</a></li>
<li><a href="function.ssh2-tunnel.php#example-4838" class="index">Example#4837 - Opening a tunnel to an arbitrary host</a></li>
<li><a href="stomp.examples.php#example-4839" class="index">Example#4838 - Object-oriented style</a></li>
<li><a href="stomp.examples.php#example-4840" class="index">Example#4839 - Procedural style</a></li>
<li><a href="function.stomp-connect-error.php#example-4841" class="index">Example#4840 - stomp_connect_error example</a></li>
<li><a href="function.stomp-version.php#example-4842" class="index">Example#4841 - stomp_version example</a></li>
<li><a href="stomp.abort.php#example-4843" class="index">Example#4842 - Object-oriented style</a></li>
<li><a href="stomp.abort.php#example-4844" class="index">Example#4843 - Procedural style</a></li>
<li><a href="stomp.ack.php#example-4845" class="index">Example#4844 - Object-oriented style</a></li>
<li><a href="stomp.ack.php#example-4846" class="index">Example#4845 - Procedural style</a></li>
<li><a href="stomp.commit.php#example-4847" class="index">Example#4846 - Object-oriented style</a></li>
<li><a href="stomp.commit.php#example-4848" class="index">Example#4847 - Procedural style</a></li>
<li><a href="stomp.construct.php#example-4849" class="index">Example#4848 - Object-oriented style</a></li>
<li><a href="stomp.construct.php#example-4850" class="index">Example#4849 - Procedural style</a></li>
<li><a href="stomp.error.php#example-4851" class="index">Example#4850 - Object-oriented style</a></li>
<li><a href="stomp.error.php#example-4852" class="index">Example#4851 - Procedural style</a></li>
<li><a href="stomp.getreadtimeout.php#example-4853" class="index">Example#4852 - Object-oriented style</a></li>
<li><a href="stomp.getreadtimeout.php#example-4854" class="index">Example#4853 - Procedural style</a></li>
<li><a href="stomp.getsessionid.php#example-4855" class="index">Example#4854 - Object-oriented style</a></li>
<li><a href="stomp.getsessionid.php#example-4856" class="index">Example#4855 - Procedural style</a></li>
<li><a href="stomp.readframe.php#example-4857" class="index">Example#4856 - Object-oriented style</a></li>
<li><a href="stomp.readframe.php#example-4858" class="index">Example#4857 - Procedural style</a></li>
<li><a href="stomp.setreadtimeout.php#example-4859" class="index">Example#4858 - Object-oriented style</a></li>
<li><a href="stomp.setreadtimeout.php#example-4860" class="index">Example#4859 - Procedural style</a></li>
<li><a href="svm.examples.php#example-4861" class="index">Example#4860 - Train from array</a></li>
<li><a href="svm.examples.php#example-4862" class="index">Example#4861 - Train from a file</a></li>
<li><a href="function.svn-add.php#example-4863" class="index">Example#4862 - svn_add example</a></li>
<li><a href="function.svn-auth-set-parameter.php#example-4864" class="index">Example#4863 - Default authentication example</a></li>
<li><a href="function.svn-blame.php#example-4865" class="index">Example#4864 - svn_blame example</a></li>
<li><a href="function.svn-cat.php#example-4866" class="index">Example#4865 - Basic example</a></li>
<li><a href="function.svn-checkout.php#example-4867" class="index">Example#4866 - Basic example</a></li>
<li><a href="function.svn-cleanup.php#example-4868" class="index">Example#4867 - Basic example</a></li>
<li><a href="function.svn-client-version.php#example-4869" class="index">Example#4868 - Basic example</a></li>
<li><a href="function.svn-commit.php#example-4870" class="index">Example#4869 - Basic example</a></li>
<li><a href="function.svn-diff.php#example-4871" class="index">Example#4870 - Basic example</a></li>
<li><a href="function.svn-diff.php#example-4872" class="index">Example#4871 - Diffing two revisions of a repository path</a></li>
<li><a href="function.svn-diff.php#example-4873" class="index">Example#4872 - Portably diffing two local files</a></li>
<li><a href="function.svn-export.php#example-4874" class="index">Example#4873 - svn_export example</a></li>
<li><a href="function.svn-import.php#example-4875" class="index">Example#4874 - Basic example</a></li>
<li><a href="function.svn-log.php#example-4876" class="index">Example#4875 - svn_log example</a></li>
<li><a href="function.svn-ls.php#example-4877" class="index">Example#4876 - svn_ls example</a></li>
<li><a href="function.svn-status.php#example-4878" class="index">Example#4877 - Basic example</a></li>
<li><a href="function.svn-update.php#example-4879" class="index">Example#4878 - Basic example</a></li>
<li><a href="function.tcpwrap-check.php#example-4880" class="index">Example#4879 - Deny all connections from localhost</a></li>
<li><a href="varnish.example.admin.php#example-4881" class="index">Example#4880 - Ban an URL</a></li>
<li><a href="varnish.example.stat.php#example-4882" class="index">Example#4881 - Get statistic snapshot</a></li>
<li><a href="varnish.example.log.php#example-4883" class="index">Example#4882 - Read varnish shared memory log</a></li>
<li><a href="varnishadmin.construct.php#example-4884" class="index">Example#4883 - VarnishAdmin::__construct example</a></li>
<li><a href="yaz.examples.php#example-4885" class="index">Example#4884 - Parallel searching using Yaz</a></li>
<li><a href="function.yaz-ccl-conf.php#example-4886" class="index">Example#4885 - CCL configuration</a></li>
<li><a href="function.yaz-ccl-parse.php#example-4887" class="index">Example#4886 - CCL Parsing</a></li>
<li><a href="function.yaz-es.php#example-4888" class="index">Example#4887 - Record Update</a></li>
<li><a href="function.yaz-record.php#example-4889" class="index">Example#4888 - Array for GRS-1 record</a></li>
<li><a href="function.yaz-record.php#example-4890" class="index">Example#4889 - Working with MARCXML</a></li>
<li><a href="function.yaz-scan.php#example-4891" class="index">Example#4890 - PHP function that scans titles</a></li>
<li><a href="function.yaz-search.php#example-4892" class="index">Example#4891 - Query Examples</a></li>
<li><a href="function.yaz-sort.php#example-4893" class="index">Example#4892 - Sort Criterias</a></li>
<li><a href="zmqcontext.construct.php#example-4894" class="index">Example#4893 - A ZMQContext example</a></li>
<li><a href="zmqcontext.getsocket.php#example-4895" class="index">Example#4894 - A ZMQContext example</a></li>
<li><a href="zmqsocket.connect.php#example-4896" class="index">Example#4895 - A ZMQContext example</a></li>
<li><a href="zmqsocket.construct.php#example-4897" class="index">Example#4896 - A ZMQSocket example</a></li>
<li><a href="zmqsocket.recv.php#example-4898" class="index">Example#4897 - A send/recv example</a></li>
<li><a href="zmqpoll.poll.php#example-4899" class="index">Example#4898 - A ZMQPoll example</a></li>
<li><a href="function.zookeeper-dispatch.php#function.zookeeper-dispatch.example.1" class="index">Example#4899 - zookeeper_dispatch example #1</a></li>
<li><a href="function.zookeeper-dispatch.php#function.zookeeper-dispatch.example.2" class="index">Example#4900 - zookeeper_dispatch example #2</a></li>
<li><a href="zookeeper.addauth.php#zookeeper.addauth.example.basic" class="index">Example#4901 - Zookeeper::addAuth example</a></li>
<li><a href="zookeeper.create.php#zookeeper.create.example.basic" class="index">Example#4902 - Zookeeper::create example</a></li>
<li><a href="zookeeper.delete.php#zookeeper.delete.example.basic" class="index">Example#4903 - Zookeeper::delete example</a></li>
<li><a href="zookeeper.exists.php#zookeeper.exists.example.basic" class="index">Example#4904 - Zookeeper::exists example</a></li>
<li><a href="zookeeper.get.php#zookeeper.get.example.basic" class="index">Example#4905 - Zookeeper::get example</a></li>
<li><a href="zookeeper.get.php#zookeeper.get.example.stat" class="index">Example#4906 - Zookeeper::get stat example</a></li>
<li><a href="zookeeper.getacl.php#zookeeper.getacl.example.basic" class="index">Example#4907 - Zookeeper::getAcl example</a></li>
<li><a href="zookeeper.getchildren.php#zookeeper.getchildren.example.basic" class="index">Example#4908 - Zookeeper::getChildren example</a></li>
<li><a href="zookeeper.set.php#zookeeper.set.example.basic" class="index">Example#4909 - Zookeeper::set example</a></li>
<li><a href="zookeeper.setacl.php#zookeeper.setacl.example.basic" class="index">Example#4910 - Zookeeper::setAcl example</a></li>
<li><a href="zookeeper.setdebuglevel.php#zookeeper.setdebuglevel.example.basic" class="index">Example#4911 - Zookeeper::setDebugLevel example</a></li>
<li><a href="zookeeperconfig.add.php#zookeeperconfig.add.example.basic" class="index">Example#4912 - ZookeeperConfig::add example</a></li>
<li><a href="zookeeperconfig.get.php#zookeeperconfig.get.example.basic" class="index">Example#4913 - ZookeeperConfig::get example</a></li>
<li><a href="zookeeperconfig.remove.php#zookeeperconfig.remove.example.basic" class="index">Example#4914 - ZookeeperConfig::remove example</a></li>
<li><a href="zookeeperconfig.set.php#zookeeperconfig.set.example.basic" class="index">Example#4915 - ZookeeperConfig::set example</a></li>
<li><a href="function.solr-get-version.php#example-4917" class="index">Example#4916 - solr_get_version example</a></li>
<li><a href="solr.examples.php#example-4918" class="index">Example#4917 - Contents of the BootStrap file</a></li>
<li><a href="solr.examples.php#example-4919" class="index">Example#4918 - Adding a document to the index</a></li>
<li><a href="solr.examples.php#example-4920" class="index">Example#4919 - Merging one document into another document</a></li>
<li><a href="solr.examples.php#example-4921" class="index">Example#4920 - Searching for documents - SolrObject responses</a></li>
<li><a href="solr.examples.php#example-4922" class="index">Example#4921 - Searching for documents - SolrDocument responses</a></li>
<li><a href="solr.examples.php#example-4923" class="index">Example#4922 - Simple TermsComponent example - basic</a></li>
<li><a href="solr.examples.php#example-4924" class="index">Example#4923 - Simple TermsComponent example - using a prefix</a></li>
<li><a href="solr.examples.php#example-4925" class="index">Example#4924 - Simple TermsComponent example - specifying a minimum frequency</a></li>
<li><a href="solr.examples.php#example-4926" class="index">Example#4925 - Simple Facet Example</a></li>
<li><a href="solr.examples.php#example-4927" class="index">Example#4926 - Simple Facet Example - with optional field override for mincount</a></li>
<li><a href="solr.examples.php#example-4928" class="index">Example#4927 - Facet Date Example</a></li>
<li><a href="solr.examples.php#example-4929" class="index">Example#4928 - Connecting to SSL-Enabled Server</a></li>
<li><a href="solr.examples.php#example-4930" class="index">Example#4929 - Collapsing a SolrQuery</a></li>
<li><a href="solr.examples.php#example-4931" class="index">Example#4930 - Solr Real Time Get (RTG) example SolrClient::getById</a></li>
<li><a href="solrinputdocument.addchilddocument.php#example-4932" class="index">Example#4931 - SolrInputDocument::addChildDocument example</a></li>
<li><a href="solrinputdocument.addchilddocuments.php#example-4933" class="index">Example#4932 - SolrInputDocument::addChildDocuments example</a></li>
<li><a href="solrdocument.toarray.php#example-4934" class="index">Example#4933 - SolrDocument::toArray example</a></li>
<li><a href="solrobject.construct.php#example-4935" class="index">Example#4934 - SolrObject::__construct example</a></li>
<li><a href="solrobject.offsetunset.php#example-4936" class="index">Example#4935 - SolrObject::offsetUnset example</a></li>
<li><a href="solrclient.adddocument.php#example-4937" class="index">Example#4936 - SolrClient::addDocument example</a></li>
<li><a href="solrclient.adddocument.php#example-4938" class="index">Example#4937 - SolrClient::addDocument example 2</a></li>
<li><a href="solrclient.adddocuments.php#example-4939" class="index">Example#4938 - SolrClient::addDocuments example</a></li>
<li><a href="solrclient.construct.php#example-4940" class="index">Example#4939 - SolrClient::__construct example</a></li>
<li><a href="solrclient.deletebyquery.php#example-4941" class="index">Example#4940 - SolrQuery::deleteByQuery example</a></li>
<li><a href="solrclient.getbyid.php#example-4942" class="index">Example#4941 - SolrClient::getById example</a></li>
<li><a href="solrclient.getbyids.php#example-4943" class="index">Example#4942 - SolrClient::getByIds example</a></li>
<li><a href="solrclient.ping.php#example-4944" class="index">Example#4943 - SolrClient::ping example</a></li>
<li><a href="solrclient.query.php#example-4945" class="index">Example#4944 - SolrClient::query example</a></li>
<li><a href="solrclient.request.php#example-4946" class="index">Example#4945 - SolrClient::request example</a></li>
<li><a href="solrclient.setresponsewriter.php#example-4947" class="index">Example#4946 - SolrClient::setResponseWriter example</a></li>
<li><a href="solrparams.setparam.php#example-4948" class="index">Example#4947 - SolrParams::setParam example</a></li>
<li><a href="solrquery.addfacetfield.php#example-4949" class="index">Example#4948 - SolrQuery::addFacetField example</a></li>
<li><a href="solrquery.addfacetquery.php#example-4950" class="index">Example#4949 - SolrQuery::addFacetField example</a></li>
<li><a href="solrquery.addfilterquery.php#example-4951" class="index">Example#4950 - SolrQuery::addFilterQuery example</a></li>
<li><a href="solrquery.addgroupsortfield.php#example-4952" class="index">Example#4951 - SolrQuery::addGroupSortField example</a></li>
<li><a href="solrquery.collapse.php#example-4953" class="index">Example#4952 - SolrQuery::collapse example</a></li>
<li><a href="solrquery.setexpand.php#example-4954" class="index">Example#4953 - SolrQuery::setExpand example</a></li>
<li><a href="solrdismaxquery.addbigramphrasefield.php#example-4955" class="index">Example#4954 - SolrDisMaxQuery::addBigramPhraseField example</a></li>
<li><a href="solrdismaxquery.addboostquery.php#example-4956" class="index">Example#4955 - SolrDisMaxQuery::addBoostQuery example</a></li>
<li><a href="solrdismaxquery.addphrasefield.php#example-4957" class="index">Example#4956 - SolrDisMaxQuery::addPhraseField example</a></li>
<li><a href="solrdismaxquery.addqueryfield.php#example-4958" class="index">Example#4957 - SolrDisMaxQuery::addQueryField example</a></li>
<li><a href="solrdismaxquery.addtrigramphrasefield.php#example-4959" class="index">Example#4958 - SolrDisMaxQuery::addTrigramPhraseField example</a></li>
<li><a href="solrdismaxquery.adduserfield.php#example-4960" class="index">Example#4959 - SolrDisMaxQuery::addUserField example</a></li>
<li><a href="solrdismaxquery.construct.php#example-4961" class="index">Example#4960 - SolrDisMaxQuery::__construct example</a></li>
<li><a href="solrdismaxquery.removebigramphrasefield.php#example-4962" class="index">Example#4961 - SolrDisMaxQuery::removeBigramPhraseField example</a></li>
<li><a href="solrdismaxquery.removeboostquery.php#example-4963" class="index">Example#4962 - SolrDisMaxQuery::removeBoostQuery example</a></li>
<li><a href="solrdismaxquery.removephrasefield.php#example-4964" class="index">Example#4963 - SolrDisMaxQuery::removePhraseField example</a></li>
<li><a href="solrdismaxquery.removequeryfield.php#example-4965" class="index">Example#4964 - SolrDisMaxQuery::removeQueryField example</a></li>
<li><a href="solrdismaxquery.removetrigramphrasefield.php#example-4966" class="index">Example#4965 - SolrDisMaxQuery::removeTrigramPhraseField example</a></li>
<li><a href="solrdismaxquery.removeuserfield.php#example-4967" class="index">Example#4966 - SolrDisMaxQuery::removeUserField example</a></li>
<li><a href="solrdismaxquery.setbigramphrasefields.php#example-4968" class="index">Example#4967 - SolrDisMaxQuery::setBigramPhraseFields example</a></li>
<li><a href="solrdismaxquery.setbigramphraseslop.php#example-4969" class="index">Example#4968 - SolrDisMaxQuery::setBigramPhraseSlop example</a></li>
<li><a href="solrdismaxquery.setboostfunction.php#example-4970" class="index">Example#4969 - SolrDisMaxQuery::setBoostFunction example</a></li>
<li><a href="solrdismaxquery.setboostquery.php#example-4971" class="index">Example#4970 - SolrDisMaxQuery::setBoostQuery example</a></li>
<li><a href="solrdismaxquery.setminimummatch.php#example-4972" class="index">Example#4971 - SolrDisMaxQuery::setMinimumMatch example</a></li>
<li><a href="solrdismaxquery.setphrasefields.php#example-4973" class="index">Example#4972 - SolrDisMaxQuery::setPhraseFields example</a></li>
<li><a href="solrdismaxquery.setphraseslop.php#example-4974" class="index">Example#4973 - SolrDisMaxQuery::setPhraseSlop example</a></li>
<li><a href="solrdismaxquery.setqueryalt.php#example-4975" class="index">Example#4974 - SolrDisMaxQuery::setQueryAlt example</a></li>
<li><a href="solrdismaxquery.setqueryphraseslop.php#example-4976" class="index">Example#4975 - SolrDisMaxQuery::setQueryPhraseSlop example</a></li>
<li><a href="solrdismaxquery.settiebreaker.php#example-4977" class="index">Example#4976 - SolrDisMaxQuery::setTieBreaker example</a></li>
<li><a href="solrdismaxquery.settrigramphrasefields.php#example-4978" class="index">Example#4977 - SolrDisMaxQuery::setTrigramPhraseFields example</a></li>
<li><a href="solrdismaxquery.settrigramphraseslop.php#example-4979" class="index">Example#4978 - SolrDisMaxQuery::setTrigramPhraseSlop example</a></li>
<li><a href="solrdismaxquery.setuserfields.php#example-4980" class="index">Example#4979 - SolrDisMaxQuery::setUserFields example</a></li>
<li><a href="solrdismaxquery.usedismaxqueryparser.php#example-4981" class="index">Example#4980 - SolrDisMaxQuery::useDisMaxQueryParser example</a></li>
<li><a href="solrdismaxquery.useedismaxqueryparser.php#example-4982" class="index">Example#4981 - SolrDisMaxQuery::useEDisMaxQueryParser example</a></li>
<li><a href="solrcollapsefunction.construct.php#example-4983" class="index">Example#4982 - SolrCollapseFunction::__construct example</a></li>
<li><a href="solrcollapsefunction.sethint.php#example-4984" class="index">Example#4983 - SolrCollapseFunction::setHint example</a></li>
<li><a href="solrcollapsefunction.setmax.php#example-4985" class="index">Example#4984 - SolrCollapseFunction::setMax example</a></li>
<li><a href="apache.configuration.php#example-4986" class="index">Example#4985 - Turning off PHP parsing for a directory using .htaccess</a></li>
<li><a href="function.apache-get-modules.php#example-4987" class="index">Example#4986 - apache_get_modules example</a></li>
<li><a href="function.apache-get-version.php#example-4988" class="index">Example#4987 - apache_get_version example</a></li>
<li><a href="function.apache-getenv.php#example-4989" class="index">Example#4988 - apache_getenv example</a></li>
<li><a href="function.apache-lookup-uri.php#example-4990" class="index">Example#4989 - apache_lookup_uri example</a></li>
<li><a href="function.apache-note.php#example-4991" class="index">Example#4990 - Passing information between PHP and Perl</a></li>
<li><a href="function.apache-note.php#example-4992" class="index">Example#4991 - Logging values in access.log</a></li>
<li><a href="function.apache-request-headers.php#example-4993" class="index">Example#4992 - apache_request_headers example</a></li>
<li><a href="function.apache-response-headers.php#example-4994" class="index">Example#4993 - apache_response_headers example</a></li>
<li><a href="function.apache-setenv.php#example-4995" class="index">Example#4994 - Setting an Apache environment variable using apache_setenv</a></li>
<li><a href="function.getallheaders.php#example-4996" class="index">Example#4995 - getallheaders example</a></li>
<li><a href="session.examples.basic.php#example-4997" class="index">Example#4996 - Registering a variable with $_SESSION.</a></li>
<li><a href="session.examples.basic.php#example-4998" class="index">Example#4997 - Unregistering a variable with $_SESSION.</a></li>
<li><a href="session.idpassing.php#example-4999" class="index">Example#4998 - Counting the number of hits of a single user</a></li>
<li><a href="session.upload-progress.php#example-5000" class="index">Example#4999 - Example information</a></li>
<li><a href="function.session-cache-expire.php#example-5001" class="index">Example#5000 - session_cache_expire example</a></li>
<li><a href="function.session-cache-limiter.php#example-5002" class="index">Example#5001 - session_cache_limiter example</a></li>
<li><a href="function.session-create-id.php#example-5003" class="index">Example#5002 - session_create_id example with session_regenerate_id</a></li>
<li><a href="function.session-destroy.php#example-5004" class="index">Example#5003 - Destroying a session with $_SESSION</a></li>
<li><a href="function.session-gc.php#example-5005" class="index">Example#5004 - session_gc example for task managers like cron</a></li>
<li><a href="function.session-gc.php#example-5006" class="index">Example#5005 - session_gc example for user accessible script</a></li>
<li><a href="function.session-name.php#example-5007" class="index">Example#5006 - session_name example</a></li>
<li><a href="function.session-regenerate-id.php#example-5008" class="index">Example#5007 - A session_regenerate_id example</a></li>
<li><a href="function.session-regenerate-id.php#example-5009" class="index">Example#5008 - Avoiding lost session by session_regenerate_id</a></li>
<li><a href="function.session-set-save-handler.php#example-5010" class="index">Example#5009 - Custom session handler: see full code in SessionHandlerInterface synopsis.</a></li>
<li><a href="function.session-start.php#example-5011" class="index">Example#5010 - page1.php</a></li>
<li><a href="function.session-start.php#example-5012" class="index">Example#5011 - page2.php</a></li>
<li><a href="function.session-start.php#example-5013" class="index">Example#5012 - Overriding the cookie lifetime</a></li>
<li><a href="function.session-start.php#example-5014" class="index">Example#5013 - Reading the session and closing it</a></li>
<li><a href="class.sessionhandler.php#example-5015" class="index">Example#5014 - Using SessionHandler to add encryption to internal PHP save handlers.</a></li>
<li><a href="class.sessionhandlerinterface.php#example-5016" class="index">Example#5015 - Example using SessionHandlerInterface</a></li>
<li><a href="parle.examples.lexer.php#example-5017" class="index">Example#5016 - Tokenize comma separated integer list</a></li>
<li><a href="parle.examples.lexer.php#example-5018" class="index">Example#5017 - Tokenize assign statement</a></li>
<li><a href="parle.examples.parser.php#example-5019" class="index">Example#5018 - Simple calculator</a></li>
<li><a href="parle.examples.parser.php#example-5020" class="index">Example#5019 - Parse words out from a sentence</a></li>
<li><a href="pcre.examples.php#example-5021" class="index">Example#5020 - Examples of valid patterns</a></li>
<li><a href="pcre.examples.php#example-5022" class="index">Example#5021 - Examples of invalid patterns</a></li>
<li><a href="regexp.reference.comments.php#example-5023" class="index">Example#5022 - Usage of comments in PCRE pattern</a></li>
<li><a href="function.preg-filter.php#example-5024" class="index">Example#5023 - Example comparing preg_filter 
     with preg_replace</a></li>
<li><a href="function.preg-grep.php#example-5025" class="index">Example#5024 - preg_grep example</a></li>
<li><a href="function.preg-last-error.php#example-5026" class="index">Example#5025 - preg_last_error example</a></li>
<li><a href="function.preg-last-error-msg.php#example-5027" class="index">Example#5026 - preg_last_error_msg example</a></li>
<li><a href="function.preg-match.php#example-5028" class="index">Example#5027 - Find the string of text &quot;php&quot;</a></li>
<li><a href="function.preg-match.php#example-5029" class="index">Example#5028 - Find the word &quot;web&quot;</a></li>
<li><a href="function.preg-match.php#example-5030" class="index">Example#5029 - Getting the domain name out of a URL</a></li>
<li><a href="function.preg-match.php#example-5031" class="index">Example#5030 - Using named subpattern</a></li>
<li><a href="function.preg-match-all.php#example-5032" class="index">Example#5031 - Getting all phone numbers out of some text.</a></li>
<li><a href="function.preg-match-all.php#example-5033" class="index">Example#5032 - Find matching HTML tags (greedy)</a></li>
<li><a href="function.preg-match-all.php#example-5034" class="index">Example#5033 - Using named subpattern</a></li>
<li><a href="function.preg-quote.php#example-5035" class="index">Example#5034 - preg_quote example</a></li>
<li><a href="function.preg-quote.php#example-5036" class="index">Example#5035 - Italicizing a word within some text</a></li>
<li><a href="function.preg-replace.php#example-5037" class="index">Example#5036 - Using backreferences followed by numeric literals</a></li>
<li><a href="function.preg-replace.php#example-5038" class="index">Example#5037 - Using indexed arrays with preg_replace</a></li>
<li><a href="function.preg-replace.php#example-5039" class="index">Example#5038 - Replacing several values</a></li>
<li><a href="function.preg-replace.php#example-5040" class="index">Example#5039 - Strip whitespace</a></li>
<li><a href="function.preg-replace.php#example-5041" class="index">Example#5040 - Using the count parameter</a></li>
<li><a href="function.preg-replace-callback.php#example-5042" class="index">Example#5041 - preg_replace_callback and
        anonymous function</a></li>
<li><a href="function.preg-replace-callback.php#example-5043" class="index">Example#5042 - preg_replace_callback example</a></li>
<li><a href="function.preg-replace-callback.php#example-5044" class="index">Example#5043 - preg_replace_callback using recursive structure
     to handle encapsulated BB code</a></li>
<li><a href="function.preg-replace-callback-array.php#example-5045" class="index">Example#5044 - preg_replace_callback_array example</a></li>
<li><a href="function.preg-split.php#example-5046" class="index">Example#5045 - preg_split example : Get the parts of a search string</a></li>
<li><a href="function.preg-split.php#example-5047" class="index">Example#5046 - Splitting a string into component characters</a></li>
<li><a href="function.preg-split.php#example-5048" class="index">Example#5047 - Splitting a string into matches and their offsets</a></li>
<li><a href="function.addcslashes.php#example-5049" class="index">Example#5048 - addcslashes with Ranges</a></li>
<li><a href="function.addcslashes.php#example-5050" class="index">Example#5049 - addcslashes with Characters in Wrong Order</a></li>
<li><a href="function.addcslashes.php#example-5051" class="index">Example#5050 - addcslashes example</a></li>
<li><a href="function.addslashes.php#example-5052" class="index">Example#5051 - Escaping Characters</a></li>
<li><a href="function.addslashes.php#example-5053" class="index">Example#5052 - An addslashes example</a></li>
<li><a href="function.bin2hex.php#example-5054" class="index">Example#5053 - bin2hex example</a></li>
<li><a href="function.chr.php#example-5055" class="index">Example#5054 - chr example</a></li>
<li><a href="function.chr.php#example-5056" class="index">Example#5055 - Overflow behavior</a></li>
<li><a href="function.chr.php#example-5057" class="index">Example#5056 - Building a UTF-8 string from individual bytes</a></li>
<li><a href="function.chunk-split.php#example-5058" class="index">Example#5057 - chunk_split example</a></li>
<li><a href="function.convert-uudecode.php#example-5059" class="index">Example#5058 - convert_uudecode example</a></li>
<li><a href="function.convert-uuencode.php#example-5060" class="index">Example#5059 - convert_uuencode example</a></li>
<li><a href="function.count-chars.php#example-5061" class="index">Example#5060 - count_chars example</a></li>
<li><a href="function.crc32.php#example-5062" class="index">Example#5061 - Displaying a crc32 checksum</a></li>
<li><a href="function.crypt.php#example-5063" class="index">Example#5062 - crypt examples</a></li>
<li><a href="function.echo.php#example-5064" class="index">Example#5063 - echo examples</a></li>
<li><a href="function.echo.php#example-5065" class="index">Example#5064 - echo is not an expression</a></li>
<li><a href="function.echo.php#example-5066" class="index">Example#5065 - Using Parentheses</a></li>
<li><a href="function.echo.php#example-5067" class="index">Example#5066 - Invalid Expression</a></li>
<li><a href="function.explode.php#example-5068" class="index">Example#5067 - explode examples</a></li>
<li><a href="function.explode.php#example-5069" class="index">Example#5068 - explode return examples</a></li>
<li><a href="function.explode.php#example-5070" class="index">Example#5069 - limit parameter examples</a></li>
<li><a href="function.fprintf.php#example-5071" class="index">Example#5070 - fprintf: zero-padded integers</a></li>
<li><a href="function.fprintf.php#example-5072" class="index">Example#5071 - fprintf: formatting currency</a></li>
<li><a href="function.get-html-translation-table.php#example-5073" class="index">Example#5072 - Translation Table Example</a></li>
<li><a href="function.hex2bin.php#hex2bin.example.basic" class="index">Example#5073 - hex2bin example</a></li>
<li><a href="function.html-entity-decode.php#example-5075" class="index">Example#5074 - Decoding HTML entities</a></li>
<li><a href="function.htmlentities.php#example-5076" class="index">Example#5075 - A htmlentities example</a></li>
<li><a href="function.htmlentities.php#example-5077" class="index">Example#5076 - Usage of ENT_IGNORE</a></li>
<li><a href="function.htmlspecialchars.php#example-5078" class="index">Example#5077 - htmlspecialchars example</a></li>
<li><a href="function.htmlspecialchars-decode.php#example-5079" class="index">Example#5078 - A htmlspecialchars_decode example</a></li>
<li><a href="function.implode.php#example-5080" class="index">Example#5079 - implode example</a></li>
<li><a href="function.lcfirst.php#example-5081" class="index">Example#5080 - lcfirst example</a></li>
<li><a href="function.levenshtein.php#example-5082" class="index">Example#5081 - levenshtein example</a></li>
<li><a href="function.localeconv.php#example-5083" class="index">Example#5082 - localeconv example</a></li>
<li><a href="function.ltrim.php#example-5084" class="index">Example#5083 - Usage example of ltrim</a></li>
<li><a href="function.md5.php#example-5085" class="index">Example#5084 - A md5 example</a></li>
<li><a href="function.md5-file.php#example-5086" class="index">Example#5085 - Usage example of md5_file</a></li>
<li><a href="function.metaphone.php#metaphone.example.basic" class="index">Example#5086 - metaphone basic example</a></li>
<li><a href="function.metaphone.php#metaphone.example.phonemes" class="index">Example#5087 - Using the max_phonemes parameter</a></li>
<li><a href="function.metaphone.php#metaphone.example.phonemes-overlong" class="index">Example#5088 - Using the max_phonemes parameter</a></li>
<li><a href="function.money-format.php#example-5090" class="index">Example#5089 - money_format Example</a></li>
<li><a href="function.nl-langinfo.php#example-5091" class="index">Example#5090 - nl_langinfo example</a></li>
<li><a href="function.nl2br.php#example-5092" class="index">Example#5091 - Using nl2br</a></li>
<li><a href="function.nl2br.php#example-5093" class="index">Example#5092 - Generating valid HTML markup using the use_xhtml parameter</a></li>
<li><a href="function.nl2br.php#example-5094" class="index">Example#5093 - Various newline separators</a></li>
<li><a href="function.number-format.php#example-5095" class="index">Example#5094 - number_format Example</a></li>
<li><a href="function.number-format.php#example-5096" class="index">Example#5095 - A negative value for decimals</a></li>
<li><a href="function.ord.php#example-5097" class="index">Example#5096 - ord example</a></li>
<li><a href="function.ord.php#example-5098" class="index">Example#5097 - Examining the individual bytes of a UTF-8 string</a></li>
<li><a href="function.parse-str.php#example-5099" class="index">Example#5098 - Using parse_str</a></li>
<li><a href="function.parse-str.php#example-5100" class="index">Example#5099 - parse_str name mangling</a></li>
<li><a href="function.print.php#example-5101" class="index">Example#5100 - print examples</a></li>
<li><a href="function.printf.php#example-5102" class="index">Example#5101 - printf: various examples</a></li>
<li><a href="function.printf.php#example-5103" class="index">Example#5102 - printf: string specifiers</a></li>
<li><a href="function.quoted-printable-decode.php#example-5104" class="index">Example#5103 - quoted_printable_decode example</a></li>
<li><a href="function.quoted-printable-encode.php#example-5105" class="index">Example#5104 - quoted_printable_encode example</a></li>
<li><a href="function.quotemeta.php#example-5106" class="index">Example#5105 - quotemeta example</a></li>
<li><a href="function.rtrim.php#example-5107" class="index">Example#5106 - Usage example of rtrim</a></li>
<li><a href="function.setlocale.php#example-5108" class="index">Example#5107 - setlocale Examples</a></li>
<li><a href="function.setlocale.php#example-5109" class="index">Example#5108 - setlocale Retrieve current setting</a></li>
<li><a href="function.setlocale.php#example-5110" class="index">Example#5109 - setlocale Examples for Windows</a></li>
<li><a href="function.sha1.php#example-5111" class="index">Example#5110 - A sha1 example</a></li>
<li><a href="function.sha1-file.php#example-5112" class="index">Example#5111 - sha1_file example</a></li>
<li><a href="function.similar-text.php#similar_text.example.swapping" class="index">Example#5112 - similar_text argument swapping example</a></li>
<li><a href="function.soundex.php#example-5114" class="index">Example#5113 - Soundex Examples</a></li>
<li><a href="function.sprintf.php#example-5115" class="index">Example#5114 - Argument swapping</a></li>
<li><a href="function.sprintf.php#example-5116" class="index">Example#5115 - Wrong Argument Order</a></li>
<li><a href="function.sprintf.php#example-5117" class="index">Example#5116 - Use Order Placeholder</a></li>
<li><a href="function.sprintf.php#example-5118" class="index">Example#5117 - Repeated Placeholder</a></li>
<li><a href="function.sprintf.php#example-5119" class="index">Example#5118 - Specifying padding character</a></li>
<li><a href="function.sprintf.php#example-5120" class="index">Example#5119 - Position specifier with other specifiers</a></li>
<li><a href="function.sprintf.php#example-5121" class="index">Example#5120 - sprintf: zero-padded integers</a></li>
<li><a href="function.sprintf.php#example-5122" class="index">Example#5121 - sprintf: formatting currency</a></li>
<li><a href="function.sprintf.php#example-5123" class="index">Example#5122 - sprintf: scientific notation</a></li>
<li><a href="function.sscanf.php#example-5124" class="index">Example#5123 - sscanf Example</a></li>
<li><a href="function.sscanf.php#example-5125" class="index">Example#5124 - sscanf - using optional parameters</a></li>
<li><a href="function.str-contains.php#example-5126" class="index">Example#5125 - Using the empty string ''</a></li>
<li><a href="function.str-contains.php#example-5127" class="index">Example#5126 - Showing case-sensitivity</a></li>
<li><a href="function.str-decrement.php#example-5128" class="index">Example#5127 - Basic str_decrement example</a></li>
<li><a href="function.str-decrement.php#example-5129" class="index">Example#5128 - str_decrement example with a carry</a></li>
<li><a href="function.str-ends-with.php#example-5130" class="index">Example#5129 - Using the empty string ''</a></li>
<li><a href="function.str-ends-with.php#example-5131" class="index">Example#5130 - Showing case-sensitivity</a></li>
<li><a href="function.str-getcsv.php#example-5132" class="index">Example#5131 - str_getcsv example</a></li>
<li><a href="function.str-getcsv.php#example-5133" class="index">Example#5132 - str_getcsv example with an empty string</a></li>
<li><a href="function.str-increment.php#example-5134" class="index">Example#5133 - Basic str_increment example</a></li>
<li><a href="function.str-increment.php#example-5135" class="index">Example#5134 - str_increment example with a carry</a></li>
<li><a href="function.str-ireplace.php#example-5136" class="index">Example#5135 - str_ireplace example</a></li>
<li><a href="function.str-pad.php#example-5137" class="index">Example#5136 - str_pad example</a></li>
<li><a href="function.str-repeat.php#example-5138" class="index">Example#5137 - str_repeat example</a></li>
<li><a href="function.str-replace.php#example-5139" class="index">Example#5138 - Basic str_replace examples</a></li>
<li><a href="function.str-replace.php#example-5140" class="index">Example#5139 - Examples of potential str_replace gotchas</a></li>
<li><a href="function.str-rot13.php#example-5141" class="index">Example#5140 - str_rot13 example</a></li>
<li><a href="function.str-shuffle.php#example-5142" class="index">Example#5141 - str_shuffle example</a></li>
<li><a href="function.str-split.php#example-5143" class="index">Example#5142 - Example uses of str_split</a></li>
<li><a href="function.str-starts-with.php#example-5144" class="index">Example#5143 - Using the empty string ''</a></li>
<li><a href="function.str-starts-with.php#example-5145" class="index">Example#5144 - Showing case-sensitivity</a></li>
<li><a href="function.str-word-count.php#example-5146" class="index">Example#5145 - A str_word_count example</a></li>
<li><a href="function.strcasecmp.php#example-5147" class="index">Example#5146 - strcasecmp example</a></li>
<li><a href="function.strcmp.php#example-5148" class="index">Example#5147 - strcmp example</a></li>
<li><a href="function.strcspn.php#strcspn.example" class="index">Example#5148 - strcspn example</a></li>
<li><a href="function.strip-tags.php#example-5150" class="index">Example#5149 - strip_tags example</a></li>
<li><a href="function.stripcslashes.php#example-5151" class="index">Example#5150 - stripcslashes example</a></li>
<li><a href="function.stripos.php#example-5152" class="index">Example#5151 - stripos examples</a></li>
<li><a href="function.stripslashes.php#example-5153" class="index">Example#5152 - A stripslashes example</a></li>
<li><a href="function.stripslashes.php#example-5154" class="index">Example#5153 - Using stripslashes on an array</a></li>
<li><a href="function.stristr.php#example-5155" class="index">Example#5154 - stristr example</a></li>
<li><a href="function.stristr.php#example-5156" class="index">Example#5155 - Testing if a string is found or not</a></li>
<li><a href="function.strlen.php#example-5157" class="index">Example#5156 - A strlen example</a></li>
<li><a href="function.strnatcasecmp.php#example-5158" class="index">Example#5157 - strnatcasecmp example</a></li>
<li><a href="function.strnatcmp.php#example-5159" class="index">Example#5158 - strcmp</a></li>
<li><a href="function.strncasecmp.php#example-5160" class="index">Example#5159 - strncasecmp example</a></li>
<li><a href="function.strncmp.php#example-5161" class="index">Example#5160 - strncmp example</a></li>
<li><a href="function.strpbrk.php#example-5162" class="index">Example#5161 - strpbrk example</a></li>
<li><a href="function.strpos.php#example-5163" class="index">Example#5162 - Using ===</a></li>
<li><a href="function.strpos.php#example-5164" class="index">Example#5163 - Using !==</a></li>
<li><a href="function.strpos.php#example-5165" class="index">Example#5164 - Using an offset</a></li>
<li><a href="function.strrchr.php#example-5166" class="index">Example#5165 - strrchr example</a></li>
<li><a href="function.strrev.php#example-5167" class="index">Example#5166 - Reversing a string with strrev</a></li>
<li><a href="function.strripos.php#example-5168" class="index">Example#5167 - A simple strripos example</a></li>
<li><a href="function.strrpos.php#example-5169" class="index">Example#5168 - Checking if a needle is in the haystack</a></li>
<li><a href="function.strrpos.php#example-5170" class="index">Example#5169 - Searching with offsets</a></li>
<li><a href="function.strspn.php#example-5171" class="index">Example#5170 - strspn example</a></li>
<li><a href="function.strstr.php#example-5172" class="index">Example#5171 - strstr example</a></li>
<li><a href="function.strtok.php#example-5173" class="index">Example#5172 - strtok example</a></li>
<li><a href="function.strtok.php#example-5174" class="index">Example#5173 - strtok behavior on empty part found</a></li>
<li><a href="function.strtok.php#example-5175" class="index">Example#5174 - The difference between strtok and explode</a></li>
<li><a href="function.strtolower.php#example-5176" class="index">Example#5175 - strtolower example</a></li>
<li><a href="function.strtoupper.php#example-5177" class="index">Example#5176 - strtoupper example</a></li>
<li><a href="function.strtr.php#example-5178" class="index">Example#5177 - strtr example</a></li>
<li><a href="function.strtr.php#example-5179" class="index">Example#5178 - strtr example with two arguments</a></li>
<li><a href="function.strtr.php#example-5180" class="index">Example#5179 - strtr behavior comparison</a></li>
<li><a href="function.substr.php#example-5181" class="index">Example#5180 - Using a negative offset</a></li>
<li><a href="function.substr.php#example-5182" class="index">Example#5181 - Using a negative length</a></li>
<li><a href="function.substr.php#example-5183" class="index">Example#5182 - Basic substr usage</a></li>
<li><a href="function.substr.php#example-5184" class="index">Example#5183 - substr casting behaviour</a></li>
<li><a href="function.substr.php#example-5185" class="index">Example#5184 - Invalid Character Range</a></li>
<li><a href="function.substr-compare.php#example-5186" class="index">Example#5185 - A substr_compare example</a></li>
<li><a href="function.substr-count.php#example-5187" class="index">Example#5186 - A substr_count example</a></li>
<li><a href="function.substr-replace.php#example-5188" class="index">Example#5187 - Simple substr_replace examples</a></li>
<li><a href="function.substr-replace.php#example-5189" class="index">Example#5188 - Using substr_replace to replace multiple strings at
     once</a></li>
<li><a href="function.trim.php#example-5190" class="index">Example#5189 - Usage example of trim</a></li>
<li><a href="function.trim.php#example-5191" class="index">Example#5190 - Trimming array values with trim</a></li>
<li><a href="function.ucfirst.php#example-5192" class="index">Example#5191 - ucfirst example</a></li>
<li><a href="function.ucwords.php#example-5193" class="index">Example#5192 - ucwords example</a></li>
<li><a href="function.ucwords.php#example-5194" class="index">Example#5193 - ucwords example with custom delimiter</a></li>
<li><a href="function.ucwords.php#example-5195" class="index">Example#5194 - ucwords example with additional delimiters</a></li>
<li><a href="function.utf8-decode.php#example-5196" class="index">Example#5195 - Basic examples</a></li>
<li><a href="function.utf8-encode.php#example-5197" class="index">Example#5196 - Basic example</a></li>
<li><a href="function.vfprintf.php#example-5198" class="index">Example#5197 - vfprintf: zero-padded integers</a></li>
<li><a href="function.vprintf.php#example-5199" class="index">Example#5198 - vprintf: zero-padded integers</a></li>
<li><a href="function.vsprintf.php#example-5200" class="index">Example#5199 - vsprintf: zero-padded integers</a></li>
<li><a href="function.wordwrap.php#example-5201" class="index">Example#5200 - wordwrap example</a></li>
<li><a href="function.wordwrap.php#example-5202" class="index">Example#5201 - wordwrap example</a></li>
<li><a href="function.wordwrap.php#example-5203" class="index">Example#5202 - wordwrap example</a></li>
<li><a href="function.array.php#example-5204" class="index">Example#5203 - array example</a></li>
<li><a href="function.array.php#example-5205" class="index">Example#5204 - Automatic index with array</a></li>
<li><a href="function.array.php#example-5206" class="index">Example#5205 - 1-based index with array</a></li>
<li><a href="function.array.php#example-5207" class="index">Example#5206 - Accessing an array inside double quotes</a></li>
<li><a href="function.array-all.php#example-5208" class="index">Example#5207 - array_all example</a></li>
<li><a href="function.array-any.php#example-5209" class="index">Example#5208 - array_any example</a></li>
<li><a href="function.array-change-key-case.php#function.array-change-key-case.example-1" class="index">Example#5209 - array_change_key_case example</a></li>
<li><a href="function.array-chunk.php#example-5211" class="index">Example#5210 - array_chunk example</a></li>
<li><a href="function.array-column.php#example-5212" class="index">Example#5211 - Get the column of first names from a recordset</a></li>
<li><a href="function.array-column.php#example-5213" class="index">Example#5212 - Get the column of last names from a recordset, indexed by the &quot;id&quot; column</a></li>
<li><a href="function.array-column.php#example-5214" class="index">Example#5213 - Get the column of usernames from the public &quot;username&quot; property of an
     object</a></li>
<li><a href="function.array-column.php#example-5215" class="index">Example#5214 - Get the column of names from the private &quot;name&quot; property of an object
     using the magic methods __isset and __get</a></li>
<li><a href="function.array-combine.php#example-5216" class="index">Example#5215 - A simple array_combine example</a></li>
<li><a href="function.array-count-values.php#example-5217" class="index">Example#5216 - array_count_values example</a></li>
<li><a href="function.array-diff.php#example-5218" class="index">Example#5217 - array_diff example</a></li>
<li><a href="function.array-diff.php#example-5219" class="index">Example#5218 - array_diff example with non-matching types</a></li>
<li><a href="function.array-diff-assoc.php#example-5220" class="index">Example#5219 - array_diff_assoc example</a></li>
<li><a href="function.array-diff-assoc.php#example-5221" class="index">Example#5220 - array_diff_assoc example</a></li>
<li><a href="function.array-diff-key.php#example-5222" class="index">Example#5221 - array_diff_key example</a></li>
<li><a href="function.array-diff-uassoc.php#example-5223" class="index">Example#5222 - array_diff_uassoc example</a></li>
<li><a href="function.array-diff-ukey.php#example-5224" class="index">Example#5223 - array_diff_ukey example</a></li>
<li><a href="function.array-fill.php#function.array-fill.example.basic" class="index">Example#5224 - array_fill example</a></li>
<li><a href="function.array-fill.php#function.array-fill.example.negative-start-index" class="index">Example#5225 - array_fill example with a negative start index</a></li>
<li><a href="function.array-fill-keys.php#example-5227" class="index">Example#5226 - array_fill_keys example</a></li>
<li><a href="function.array-filter.php#example-5228" class="index">Example#5227 - array_filter example</a></li>
<li><a href="function.array-filter.php#example-5229" class="index">Example#5228 - array_filter without
    callback</a></li>
<li><a href="function.array-filter.php#example-5230" class="index">Example#5229 - array_filter with
    mode</a></li>
<li><a href="function.array-find.php#example-5231" class="index">Example#5230 - array_find example</a></li>
<li><a href="function.array-find-key.php#example-5232" class="index">Example#5231 - array_find_key example</a></li>
<li><a href="function.array-flip.php#example-5233" class="index">Example#5232 - array_flip example</a></li>
<li><a href="function.array-flip.php#example-5234" class="index">Example#5233 - array_flip example : collision</a></li>
<li><a href="function.array-intersect.php#example-5235" class="index">Example#5234 - array_intersect example</a></li>
<li><a href="function.array-intersect-assoc.php#example-5236" class="index">Example#5235 - array_intersect_assoc example</a></li>
<li><a href="function.array-intersect-key.php#example-5237" class="index">Example#5236 - array_intersect_key example</a></li>
<li><a href="function.array-intersect-uassoc.php#example-5238" class="index">Example#5237 - array_intersect_uassoc example</a></li>
<li><a href="function.array-intersect-ukey.php#example-5239" class="index">Example#5238 - array_intersect_ukey example</a></li>
<li><a href="function.array-is-list.php#example-5240" class="index">Example#5239 - array_is_list example</a></li>
<li><a href="function.array-key-exists.php#example-5241" class="index">Example#5240 - array_key_exists example</a></li>
<li><a href="function.array-key-exists.php#example-5242" class="index">Example#5241 - array_key_exists vs isset</a></li>
<li><a href="function.array-key-first.php#array_key_first.example.basic" class="index">Example#5242 - Basic array_key_first Usage</a></li>
<li><a href="function.array-keys.php#example-5244" class="index">Example#5243 - array_keys example</a></li>
<li><a href="function.array-map.php#example-5245" class="index">Example#5244 - array_map example</a></li>
<li><a href="function.array-map.php#example-5246" class="index">Example#5245 - array_map using a lambda function</a></li>
<li><a href="function.array-map.php#example-5247" class="index">Example#5246 - array_map - using more arrays</a></li>
<li><a href="function.array-map.php#example-5248" class="index">Example#5247 - Performing a zip operation of arrays</a></li>
<li><a href="function.array-map.php#example-5249" class="index">Example#5248 - null callback with only
     array</a></li>
<li><a href="function.array-map.php#example-5250" class="index">Example#5249 - array_map - with string keys</a></li>
<li><a href="function.array-map.php#example-5251" class="index">Example#5250 - array_map - associative arrays</a></li>
<li><a href="function.array-merge.php#example-5252" class="index">Example#5251 - array_merge example</a></li>
<li><a href="function.array-merge.php#example-5253" class="index">Example#5252 - Simple array_merge example</a></li>
<li><a href="function.array-merge.php#example-5254" class="index">Example#5253 - array_merge with non-array types</a></li>
<li><a href="function.array-merge-recursive.php#example-5255" class="index">Example#5254 - array_merge_recursive example</a></li>
<li><a href="function.array-multisort.php#example-5256" class="index">Example#5255 - Sorting multiple arrays</a></li>
<li><a href="function.array-multisort.php#example-5257" class="index">Example#5256 - Sorting multi-dimensional array</a></li>
<li><a href="function.array-multisort.php#example-5258" class="index">Example#5257 - Sorting database results</a></li>
<li><a href="function.array-multisort.php#example-5259" class="index">Example#5258 - Case insensitive sorting</a></li>
<li><a href="function.array-pad.php#example-5260" class="index">Example#5259 - array_pad example</a></li>
<li><a href="function.array-pop.php#example-5261" class="index">Example#5260 - array_pop example</a></li>
<li><a href="function.array-product.php#example-5262" class="index">Example#5261 - array_product examples</a></li>
<li><a href="function.array-push.php#example-5263" class="index">Example#5262 - array_push example</a></li>
<li><a href="function.array-rand.php#example-5264" class="index">Example#5263 - array_rand example</a></li>
<li><a href="function.array-reduce.php#example-5265" class="index">Example#5264 - array_reduce example</a></li>
<li><a href="function.array-replace.php#example-5266" class="index">Example#5265 - array_replace example</a></li>
<li><a href="function.array-replace.php#example-5267" class="index">Example#5266 - Example of how nested arrays are handled</a></li>
<li><a href="function.array-replace-recursive.php#example-5268" class="index">Example#5267 - array_replace_recursive example</a></li>
<li><a href="function.array-replace-recursive.php#example-5269" class="index">Example#5268 - array_replace_recursive and recursive behavior</a></li>
<li><a href="function.array-reverse.php#example-5270" class="index">Example#5269 - array_reverse example</a></li>
<li><a href="function.array-search.php#example-5271" class="index">Example#5270 - array_search example</a></li>
<li><a href="function.array-shift.php#example-5272" class="index">Example#5271 - array_shift example</a></li>
<li><a href="function.array-slice.php#example-5273" class="index">Example#5272 - array_slice examples</a></li>
<li><a href="function.array-slice.php#example-5274" class="index">Example#5273 - array_slice and one-based array</a></li>
<li><a href="function.array-slice.php#example-5275" class="index">Example#5274 - array_slice and array with mixed keys</a></li>
<li><a href="function.array-splice.php#example-5276" class="index">Example#5275 - array_splice examples</a></li>
<li><a href="function.array-splice.php#example-5277" class="index">Example#5276 - Equivalent statements to various array_splice examples</a></li>
<li><a href="function.array-sum.php#example-5278" class="index">Example#5277 - array_sum examples</a></li>
<li><a href="function.array-udiff.php#example-5279" class="index">Example#5278 - array_udiff example using stdClass Objects</a></li>
<li><a href="function.array-udiff.php#example-5280" class="index">Example#5279 - array_udiff example using DateTime Objects</a></li>
<li><a href="function.array-udiff-assoc.php#example-5281" class="index">Example#5280 - array_udiff_assoc example</a></li>
<li><a href="function.array-udiff-uassoc.php#example-5282" class="index">Example#5281 - array_udiff_uassoc example</a></li>
<li><a href="function.array-uintersect.php#example-5283" class="index">Example#5282 - array_uintersect example</a></li>
<li><a href="function.array-uintersect-assoc.php#example-5284" class="index">Example#5283 - array_uintersect_assoc example</a></li>
<li><a href="function.array-uintersect-uassoc.php#example-5285" class="index">Example#5284 - array_uintersect_uassoc example</a></li>
<li><a href="function.array-unique.php#example-5286" class="index">Example#5285 - array_unique example</a></li>
<li><a href="function.array-unique.php#example-5287" class="index">Example#5286 - array_unique and types</a></li>
<li><a href="function.array-unshift.php#example-5288" class="index">Example#5287 - array_unshift example</a></li>
<li><a href="function.array-unshift.php#example-5289" class="index">Example#5288 - Usage with associative arrays</a></li>
<li><a href="function.array-values.php#example-5290" class="index">Example#5289 - array_values example</a></li>
<li><a href="function.array-walk.php#example-5291" class="index">Example#5290 - array_walk example</a></li>
<li><a href="function.array-walk.php#example-5292" class="index">Example#5291 - array_walk example using anonymous function</a></li>
<li><a href="function.array-walk-recursive.php#example-5293" class="index">Example#5292 - array_walk_recursive example</a></li>
<li><a href="function.arsort.php#example-5294" class="index">Example#5293 - arsort example</a></li>
<li><a href="function.asort.php#example-5295" class="index">Example#5294 - asort example</a></li>
<li><a href="function.compact.php#example-5296" class="index">Example#5295 - compact example</a></li>
<li><a href="function.count.php#count.example.basic" class="index">Example#5296 - count example</a></li>
<li><a href="function.count.php#count.example.badexample" class="index">Example#5297 - count non Countable|array example (bad example - don't do this)</a></li>
<li><a href="function.count.php#count.example.recursive" class="index">Example#5298 - Recursive count example</a></li>
<li><a href="function.count.php#count.example.countable" class="index">Example#5299 - Countable object</a></li>
<li><a href="function.current.php#example-5301" class="index">Example#5300 - Example use of current and friends</a></li>
<li><a href="function.each.php#example-5302" class="index">Example#5301 - each examples</a></li>
<li><a href="function.each.php#example-5303" class="index">Example#5302 - Traversing an array with each</a></li>
<li><a href="function.end.php#example-5304" class="index">Example#5303 - end example</a></li>
<li><a href="function.extract.php#example-5305" class="index">Example#5304 - extract example</a></li>
<li><a href="function.in-array.php#example-5306" class="index">Example#5305 - in_array example</a></li>
<li><a href="function.in-array.php#example-5307" class="index">Example#5306 - in_array with strict example</a></li>
<li><a href="function.in-array.php#example-5308" class="index">Example#5307 - in_array with an array as needle</a></li>
<li><a href="function.key.php#example-5309" class="index">Example#5308 - key example</a></li>
<li><a href="function.krsort.php#example-5310" class="index">Example#5309 - krsort example</a></li>
<li><a href="function.ksort.php#example-5311" class="index">Example#5310 - ksort example</a></li>
<li><a href="function.ksort.php#example-5312" class="index">Example#5311 - ksort with int keys</a></li>
<li><a href="function.list.php#example-5313" class="index">Example#5312 - list examples</a></li>
<li><a href="function.list.php#example-5314" class="index">Example#5313 - An example use of list</a></li>
<li><a href="function.list.php#example-5315" class="index">Example#5314 - Using nested list</a></li>
<li><a href="function.list.php#example-5316" class="index">Example#5315 - list and order of index definitions</a></li>
<li><a href="function.list.php#example-5317" class="index">Example#5316 - list with keys</a></li>
<li><a href="function.natcasesort.php#example-5318" class="index">Example#5317 - natcasesort example</a></li>
<li><a href="function.natsort.php#example-5319" class="index">Example#5318 - natsort examples demonstrating basic usage</a></li>
<li><a href="function.natsort.php#example-5320" class="index">Example#5319 - natsort examples demonstrating potential gotchas</a></li>
<li><a href="function.next.php#example-5321" class="index">Example#5320 - Example use of next and friends</a></li>
<li><a href="function.prev.php#example-5322" class="index">Example#5321 - Example use of prev and friends</a></li>
<li><a href="function.range.php#example-5323" class="index">Example#5322 - range examples</a></li>
<li><a href="function.reset.php#example-5324" class="index">Example#5323 - reset example</a></li>
<li><a href="function.rsort.php#example-5325" class="index">Example#5324 - rsort example</a></li>
<li><a href="function.shuffle.php#example-5326" class="index">Example#5325 - shuffle example</a></li>
<li><a href="function.sort.php#example-5327" class="index">Example#5326 - sort example</a></li>
<li><a href="function.sort.php#example-5328" class="index">Example#5327 - sort example using case-insensitive natural
    ordering</a></li>
<li><a href="function.uasort.php#example-5329" class="index">Example#5328 - Basic uasort example</a></li>
<li><a href="function.uksort.php#example-5330" class="index">Example#5329 - uksort example</a></li>
<li><a href="function.usort.php#function.usort.examples.basic" class="index">Example#5330 - usort example</a></li>
<li><a href="function.usort.php#function.usort.examples.multi" class="index">Example#5331 - usort example using multi-dimensional array</a></li>
<li><a href="function.usort.php#function.usort.examples.object" class="index">Example#5332 - usort example using a member function of an object</a></li>
<li><a href="function.usort.php#function.usort.examples.closure" class="index">Example#5333 - usort example using a closure
     to sort a multi-dimensional array</a></li>
<li><a href="function.usort.php#function.usort.examples.multiple-axes" class="index">Example#5334 - usort example using the spaceship operator</a></li>
<li><a href="classobj.examples.php#example-5336" class="index">Example#5335 - Class Definitions</a></li>
<li><a href="classobj.examples.php#example-5337" class="index">Example#5336 - test_script.php</a></li>
<li><a href="function.class-alias.php#example-5338" class="index">Example#5337 - class_alias example</a></li>
<li><a href="function.class-exists.php#example-5339" class="index">Example#5338 - class_exists example</a></li>
<li><a href="function.class-exists.php#example-5340" class="index">Example#5339 - autoload parameter example</a></li>
<li><a href="function.enum-exists.php#example-5341" class="index">Example#5340 - enum_exists example</a></li>
<li><a href="function.get-called-class.php#example-5342" class="index">Example#5341 - Using get_called_class</a></li>
<li><a href="function.get-class.php#example-5343" class="index">Example#5342 - Using get_class</a></li>
<li><a href="function.get-class.php#example-5344" class="index">Example#5343 - Using get_class in superclass</a></li>
<li><a href="function.get-class.php#example-5345" class="index">Example#5344 - Using get_class with namespaced classes</a></li>
<li><a href="function.get-class-methods.php#example-5346" class="index">Example#5345 - get_class_methods example</a></li>
<li><a href="function.get-class-vars.php#example-5347" class="index">Example#5346 - get_class_vars example</a></li>
<li><a href="function.get-class-vars.php#example-5348" class="index">Example#5347 - get_class_vars and scoping behaviour</a></li>
<li><a href="function.get-declared-classes.php#example-5349" class="index">Example#5348 - get_declared_classes example</a></li>
<li><a href="function.get-declared-interfaces.php#example-5350" class="index">Example#5349 - get_declared_interfaces example</a></li>
<li><a href="function.get-mangled-object-vars.php#example-5351" class="index">Example#5350 - get_mangled_object_vars example</a></li>
<li><a href="function.get-object-vars.php#example-5352" class="index">Example#5351 - Use of get_object_vars</a></li>
<li><a href="function.get-parent-class.php#example-5353" class="index">Example#5352 - Using get_parent_class</a></li>
<li><a href="function.interface-exists.php#example-5354" class="index">Example#5353 - interface_exists example</a></li>
<li><a href="function.is-a.php#example-5355" class="index">Example#5354 - is_a example</a></li>
<li><a href="function.is-a.php#example-5356" class="index">Example#5355 - Using the instanceof operator</a></li>
<li><a href="function.is-subclass-of.php#example-5357" class="index">Example#5356 - is_subclass_of example</a></li>
<li><a href="function.is-subclass-of.php#example-5358" class="index">Example#5357 - is_subclass_of using interface example</a></li>
<li><a href="function.method-exists.php#example-5359" class="index">Example#5358 - method_exists example</a></li>
<li><a href="function.method-exists.php#example-5360" class="index">Example#5359 - Static method_exists example</a></li>
<li><a href="function.property-exists.php#example-5361" class="index">Example#5360 - A property_exists example</a></li>
<li><a href="function.ctype-alnum.php#example-5362" class="index">Example#5361 - A ctype_alnum example (using the default locale)</a></li>
<li><a href="function.ctype-alpha.php#example-5363" class="index">Example#5362 - A ctype_alpha example (using the default locale)</a></li>
<li><a href="function.ctype-cntrl.php#example-5364" class="index">Example#5363 - A ctype_cntrl example</a></li>
<li><a href="function.ctype-digit.php#example-5365" class="index">Example#5364 - A ctype_digit example</a></li>
<li><a href="function.ctype-digit.php#example-5366" class="index">Example#5365 - A ctype_digit example comparing strings with integers</a></li>
<li><a href="function.ctype-graph.php#example-5367" class="index">Example#5366 - A ctype_graph example</a></li>
<li><a href="function.ctype-lower.php#example-5368" class="index">Example#5367 - A ctype_lower example (using the default locale)</a></li>
<li><a href="function.ctype-print.php#example-5369" class="index">Example#5368 - A ctype_print example</a></li>
<li><a href="function.ctype-punct.php#example-5370" class="index">Example#5369 - A ctype_punct example</a></li>
<li><a href="function.ctype-space.php#example-5371" class="index">Example#5370 - A ctype_space example</a></li>
<li><a href="function.ctype-upper.php#example-5372" class="index">Example#5371 - A ctype_upper example (using the default locale)</a></li>
<li><a href="function.ctype-xdigit.php#example-5373" class="index">Example#5372 - A ctype_xdigit example</a></li>
<li><a href="filter.configuration.php#example-5374" class="index">Example#5373 - Configuring the default filter to act like htmlspecialchars</a></li>
<li><a href="filter.constants.php#example-5375" class="index">Example#5374 - Example of using FILTER_CALLBACK to validate
      a login name</a></li>
<li><a href="filter.examples.validation.php#example-5376" class="index">Example#5375 - Validating email addresses with filter_var</a></li>
<li><a href="filter.examples.validation.php#example-5377" class="index">Example#5376 - Validating IP addresses with filter_var</a></li>
<li><a href="filter.examples.validation.php#example-5378" class="index">Example#5377 - Passing options to filter_var</a></li>
<li><a href="filter.examples.sanitization.php#example-5379" class="index">Example#5378 - Sanitizing and validating email addresses</a></li>
<li><a href="function.filter-input.php#example-5380" class="index">Example#5379 - A filter_input example</a></li>
<li><a href="function.filter-list.php#example-5381" class="index">Example#5380 - A filter_list example</a></li>
<li><a href="function.filter-var.php#example-5382" class="index">Example#5381 - A filter_var example</a></li>
<li><a href="function.filter-var.php#example-5383" class="index">Example#5382 - Example validating entries of an array</a></li>
<li><a href="function.filter-var.php#example-5384" class="index">Example#5383 - Example of passing an array for options</a></li>
<li><a href="function.filter-var.php#example-5385" class="index">Example#5384 - Providing flags either directly or via an array</a></li>
<li><a href="function.filter-var-array.php#example-5386" class="index">Example#5385 - A filter_var_array example</a></li>
<li><a href="function.call-user-func.php#example-5387" class="index">Example#5386 - call_user_func example and references</a></li>
<li><a href="function.call-user-func.php#example-5388" class="index">Example#5387 - call_user_func example</a></li>
<li><a href="function.call-user-func.php#example-5389" class="index">Example#5388 - call_user_func using namespace name</a></li>
<li><a href="function.call-user-func.php#example-5390" class="index">Example#5389 - Using a class method with call_user_func</a></li>
<li><a href="function.call-user-func.php#example-5391" class="index">Example#5390 - Using lambda function with call_user_func</a></li>
<li><a href="function.call-user-func-array.php#example-5392" class="index">Example#5391 - call_user_func_array example</a></li>
<li><a href="function.call-user-func-array.php#example-5393" class="index">Example#5392 - call_user_func_array using namespace name</a></li>
<li><a href="function.call-user-func-array.php#example-5394" class="index">Example#5393 - Using lambda function</a></li>
<li><a href="function.call-user-func-array.php#example-5395" class="index">Example#5394 - Passing values by reference</a></li>
<li><a href="function.call-user-func-array.php#example-5396" class="index">Example#5395 - call_user_func_array using named arguments</a></li>
<li><a href="function.create-function.php#example-5397" class="index">Example#5396 - Creating a function dynamically, with create_function
     or anonymous functions</a></li>
<li><a href="function.create-function.php#example-5398" class="index">Example#5397 - Making a general processing function, with create_function
     or anonymous functions</a></li>
<li><a href="function.create-function.php#example-5399" class="index">Example#5398 - Using dynamic functions as callback functions</a></li>
<li><a href="function.forward-static-call.php#example-5400" class="index">Example#5399 - forward_static_call example</a></li>
<li><a href="function.forward-static-call-array.php#example-5401" class="index">Example#5400 - forward_static_call_array example</a></li>
<li><a href="function.func-get-arg.php#example-5402" class="index">Example#5401 - func_get_arg example</a></li>
<li><a href="function.func-get-arg.php#example-5403" class="index">Example#5402 - func_get_arg example of byref and byval arguments</a></li>
<li><a href="function.func-get-args.php#example-5404" class="index">Example#5403 - func_get_args example</a></li>
<li><a href="function.func-get-args.php#example-5405" class="index">Example#5404 - func_get_args example of byref and byval arguments</a></li>
<li><a href="function.func-num-args.php#example-5406" class="index">Example#5405 - func_num_args example</a></li>
<li><a href="function.function-exists.php#example-5407" class="index">Example#5406 - function_exists example</a></li>
<li><a href="function.get-defined-functions.php#example-5408" class="index">Example#5407 - get_defined_functions example</a></li>
<li><a href="function.register-shutdown-function.php#example-5409" class="index">Example#5408 - register_shutdown_function example</a></li>
<li><a href="function.register-tick-function.php#example-5410" class="index">Example#5409 - register_tick_function example</a></li>
<li><a href="quickhash.examples.php#example-5411" class="index">Example#5410 - Quickhash Example</a></li>
<li><a href="quickhash.examples.php#example-5412" class="index">Example#5411 - Quickhash ArrayAccess Example</a></li>
<li><a href="quickhash.examples.php#example-5413" class="index">Example#5412 - Quickhash Iterator Example</a></li>
<li><a href="quickhash.examples.php#example-5414" class="index">Example#5413 - Quickhash String Values Example</a></li>
<li><a href="quickhashintset.add.php#example-5415" class="index">Example#5414 - QuickHashIntSet::add example</a></li>
<li><a href="quickhashintset.construct.php#example-5416" class="index">Example#5415 - QuickHashIntSet::__construct example</a></li>
<li><a href="quickhashintset.delete.php#example-5417" class="index">Example#5416 - QuickHashIntSet::delete example</a></li>
<li><a href="quickhashintset.exists.php#example-5418" class="index">Example#5417 - QuickHashIntSet::exists example</a></li>
<li><a href="quickhashintset.getsize.php#example-5419" class="index">Example#5418 - QuickHashIntSet::getSize example</a></li>
<li><a href="quickhashintset.loadfromfile.php#example-5420" class="index">Example#5419 - QuickHashIntSet::loadFromFile example</a></li>
<li><a href="quickhashintset.loadfromstring.php#example-5421" class="index">Example#5420 - QuickHashIntSet::loadFromString example</a></li>
<li><a href="quickhashintset.savetofile.php#example-5422" class="index">Example#5421 - QuickHashIntSet::saveToFile example</a></li>
<li><a href="quickhashintset.savetostring.php#example-5423" class="index">Example#5422 - QuickHashIntSet::saveToString example</a></li>
<li><a href="quickhashinthash.add.php#example-5424" class="index">Example#5423 - QuickHashIntHash::add example</a></li>
<li><a href="quickhashinthash.construct.php#example-5425" class="index">Example#5424 - QuickHashIntHash::__construct example</a></li>
<li><a href="quickhashinthash.delete.php#example-5426" class="index">Example#5425 - QuickHashIntHash::delete example</a></li>
<li><a href="quickhashinthash.exists.php#example-5427" class="index">Example#5426 - QuickHashIntHash::exists example</a></li>
<li><a href="quickhashinthash.get.php#example-5428" class="index">Example#5427 - QuickHashIntHash::get example</a></li>
<li><a href="quickhashinthash.getsize.php#example-5429" class="index">Example#5428 - QuickHashIntHash::getSize example</a></li>
<li><a href="quickhashinthash.loadfromfile.php#example-5430" class="index">Example#5429 - QuickHash IntHash file format</a></li>
<li><a href="quickhashinthash.loadfromfile.php#example-5431" class="index">Example#5430 - QuickHash IntHash file format</a></li>
<li><a href="quickhashinthash.loadfromfile.php#example-5432" class="index">Example#5431 - QuickHashIntHash::loadFromFile example</a></li>
<li><a href="quickhashinthash.loadfromstring.php#example-5433" class="index">Example#5432 - QuickHashIntHash::loadFromString example</a></li>
<li><a href="quickhashinthash.savetofile.php#example-5434" class="index">Example#5433 - QuickHashIntHash::saveToFile example</a></li>
<li><a href="quickhashinthash.savetostring.php#example-5435" class="index">Example#5434 - QuickHashIntHash::saveToString example</a></li>
<li><a href="quickhashinthash.set.php#example-5436" class="index">Example#5435 - QuickHashIntHash::set example</a></li>
<li><a href="quickhashinthash.update.php#example-5437" class="index">Example#5436 - QuickHashIntHash::update example</a></li>
<li><a href="quickhashstringinthash.add.php#example-5438" class="index">Example#5437 - QuickHashStringIntHash::add example</a></li>
<li><a href="quickhashstringinthash.construct.php#example-5439" class="index">Example#5438 - QuickHashStringIntHash::__construct example</a></li>
<li><a href="quickhashstringinthash.delete.php#example-5440" class="index">Example#5439 - QuickHashStringIntHash::delete example</a></li>
<li><a href="quickhashstringinthash.get.php#example-5441" class="index">Example#5440 - QuickHashStringIntHash::get example</a></li>
<li><a href="quickhashstringinthash.getsize.php#example-5442" class="index">Example#5441 - QuickHashStringIntHash::getSize example</a></li>
<li><a href="quickhashstringinthash.loadfromfile.php#example-5443" class="index">Example#5442 - QuickHash StringIntHash file format</a></li>
<li><a href="quickhashstringinthash.loadfromfile.php#example-5444" class="index">Example#5443 - QuickHash IntHash file format</a></li>
<li><a href="quickhashstringinthash.loadfromfile.php#example-5445" class="index">Example#5444 - QuickHashStringIntHash::loadFromFile example</a></li>
<li><a href="quickhashstringinthash.loadfromstring.php#example-5446" class="index">Example#5445 - QuickHashStringIntHash::loadFromString example</a></li>
<li><a href="quickhashstringinthash.savetofile.php#example-5447" class="index">Example#5446 - QuickHashStringIntHash::saveToFile example</a></li>
<li><a href="quickhashstringinthash.savetostring.php#example-5448" class="index">Example#5447 - QuickHashStringIntHash::saveToString example</a></li>
<li><a href="quickhashstringinthash.set.php#example-5449" class="index">Example#5448 - QuickHashStringIntHash::set example</a></li>
<li><a href="quickhashstringinthash.update.php#example-5450" class="index">Example#5449 - QuickHashStringIntHash::update example</a></li>
<li><a href="quickhashintstringhash.add.php#example-5451" class="index">Example#5450 - QuickHashIntStringHash::add example</a></li>
<li><a href="quickhashintstringhash.construct.php#example-5452" class="index">Example#5451 - QuickHashIntStringHash::__construct example</a></li>
<li><a href="quickhashintstringhash.delete.php#example-5453" class="index">Example#5452 - QuickHashIntStringHash::delete example</a></li>
<li><a href="quickhashintstringhash.get.php#example-5454" class="index">Example#5453 - QuickHashIntStringHash::get example</a></li>
<li><a href="quickhashintstringhash.getsize.php#example-5455" class="index">Example#5454 - QuickHashIntStringHash::getSize example</a></li>
<li><a href="quickhashintstringhash.loadfromfile.php#example-5456" class="index">Example#5455 - QuickHash IntString file format</a></li>
<li><a href="quickhashintstringhash.loadfromfile.php#example-5457" class="index">Example#5456 - QuickHash IntString file format</a></li>
<li><a href="quickhashintstringhash.loadfromfile.php#example-5458" class="index">Example#5457 - QuickHashIntStringHash::loadFromFile example</a></li>
<li><a href="quickhashintstringhash.loadfromstring.php#example-5459" class="index">Example#5458 - QuickHashIntStringHash::loadFromString example</a></li>
<li><a href="quickhashintstringhash.savetofile.php#example-5460" class="index">Example#5459 - QuickHashIntStringHash::saveToFile example</a></li>
<li><a href="quickhashintstringhash.savetostring.php#example-5461" class="index">Example#5460 - QuickHashIntStringHash::saveToString example</a></li>
<li><a href="quickhashintstringhash.set.php#example-5462" class="index">Example#5461 - QuickHashIntStringHash::set example</a></li>
<li><a href="quickhashintstringhash.update.php#example-5463" class="index">Example#5462 - QuickHashIntStringHash::update example</a></li>
<li><a href="reflection.examples.php#example-5464" class="index">Example#5463 - Reflection Example from Shell (a Terminal)</a></li>
<li><a href="reflection.extending.php#example-5465" class="index">Example#5464 - Extending the built-in classes</a></li>
<li><a href="reflection.getmodifiernames.php#example-5466" class="index">Example#5465 - Reflection::getModifierNames example</a></li>
<li><a href="reflectionclass.construct.php#example-5467" class="index">Example#5466 - Basic usage ReflectionClass</a></li>
<li><a href="reflectionclass.export.php#example-5468" class="index">Example#5467 - Basic usage of ReflectionClass::export</a></li>
<li><a href="reflectionclass.getattributes.php#example-5469" class="index">Example#5468 - Basic usage</a></li>
<li><a href="reflectionclass.getattributes.php#example-5470" class="index">Example#5469 - Filtering results by class name</a></li>
<li><a href="reflectionclass.getattributes.php#example-5471" class="index">Example#5470 - Filtering results by class name, with inheritance</a></li>
<li><a href="reflectionclass.getconstant.php#example-5472" class="index">Example#5471 - Usage of ReflectionClass::getConstant</a></li>
<li><a href="reflectionclass.getconstructor.php#example-5473" class="index">Example#5472 - Basic usage of ReflectionClass::getConstructor</a></li>
<li><a href="reflectionclass.getdefaultproperties.php#example-5474" class="index">Example#5473 - ReflectionClass::getDefaultProperties example</a></li>
<li><a href="reflectionclass.getdoccomment.php#example-5475" class="index">Example#5474 - ReflectionClass::getDocComment example</a></li>
<li><a href="reflectionclass.getendline.php#example-5476" class="index">Example#5475 - ReflectionClass::getEndLine example</a></li>
<li><a href="reflectionclass.getextension.php#example-5477" class="index">Example#5476 - Basic usage of ReflectionClass::getExtension</a></li>
<li><a href="reflectionclass.getextensionname.php#example-5478" class="index">Example#5477 - Basic usage of ReflectionClass::getExtensionName</a></li>
<li><a href="reflectionclass.getinterfacenames.php#example-5479" class="index">Example#5478 - ReflectionClass::getInterfaceNames example</a></li>
<li><a href="reflectionclass.getinterfaces.php#example-5480" class="index">Example#5479 - ReflectionClass::getInterfaces example</a></li>
<li><a href="reflectionclass.getmethod.php#example-5481" class="index">Example#5480 - Basic usage of ReflectionClass::getMethod</a></li>
<li><a href="reflectionclass.getmethods.php#example-5482" class="index">Example#5481 - Basic usage of ReflectionClass::getMethods</a></li>
<li><a href="reflectionclass.getmethods.php#example-5483" class="index">Example#5482 - Filtering results from ReflectionClass::getMethods</a></li>
<li><a href="reflectionclass.getname.php#example-5484" class="index">Example#5483 - ReflectionClass::getName example</a></li>
<li><a href="reflectionclass.getnamespacename.php#example-5485" class="index">Example#5484 - ReflectionClass::getNamespaceName example</a></li>
<li><a href="reflectionclass.getproperties.php#reflectionclass.getproperties.example.filter" class="index">Example#5485 - ReflectionClass::getProperties filtering example</a></li>
<li><a href="reflectionclass.getproperty.php#example-5487" class="index">Example#5486 - Basic usage of ReflectionClass::getProperty</a></li>
<li><a href="reflectionclass.getreflectionconstants.php#reflectionclass.getreflectionconstants.example" class="index">Example#5487 - Basic ReflectionClass::getReflectionConstants example</a></li>
<li><a href="reflectionclass.getshortname.php#example-5489" class="index">Example#5488 - ReflectionClass::getShortName example</a></li>
<li><a href="reflectionclass.getstaticpropertyvalue.php#example-5490" class="index">Example#5489 - Basic usage of ReflectionClass::getStaticPropertyValue</a></li>
<li><a href="reflectionclass.hasconstant.php#example-5491" class="index">Example#5490 - ReflectionClass::hasConstant example</a></li>
<li><a href="reflectionclass.hasmethod.php#example-5492" class="index">Example#5491 - ReflectionClass::hasMethod example</a></li>
<li><a href="reflectionclass.hasproperty.php#example-5493" class="index">Example#5492 - ReflectionClass::hasProperty example</a></li>
<li><a href="reflectionclass.initializelazyobject.php#example-5494" class="index">Example#5493 - Basic usage</a></li>
<li><a href="reflectionclass.innamespace.php#example-5495" class="index">Example#5494 - ReflectionClass::inNamespace example</a></li>
<li><a href="reflectionclass.isabstract.php#example-5496" class="index">Example#5495 - ReflectionClass::isAbstract example</a></li>
<li><a href="reflectionclass.isanonymous.php#example-5497" class="index">Example#5496 - ReflectionClass::isAnonymous example</a></li>
<li><a href="reflectionclass.iscloneable.php#example-5498" class="index">Example#5497 - Basic usage of ReflectionClass::isCloneable</a></li>
<li><a href="reflectionclass.isfinal.php#example-5499" class="index">Example#5498 - ReflectionClass::isFinal example</a></li>
<li><a href="reflectionclass.isinstance.php#example-5500" class="index">Example#5499 - ReflectionClass::isInstance related examples</a></li>
<li><a href="reflectionclass.isinstantiable.php#example-5501" class="index">Example#5500 - ReflectionClass::isInstantiable example</a></li>
<li><a href="reflectionclass.isinterface.php#example-5502" class="index">Example#5501 - Basic usage of ReflectionClass::isInterface</a></li>
<li><a href="reflectionclass.isinternal.php#example-5503" class="index">Example#5502 - Basic usage of ReflectionClass::isInternal</a></li>
<li><a href="reflectionclass.isiterable.php#example-5504" class="index">Example#5503 - Basic ReflectionClass::isIterable Usage</a></li>
<li><a href="reflectionclass.isreadonly.php#example-5505" class="index">Example#5504 - ReflectionClass::isReadOnly example</a></li>
<li><a href="reflectionclass.isuninitializedlazyobject.php#example-5506" class="index">Example#5505 - Basic usage</a></li>
<li><a href="reflectionclass.marklazyobjectasinitialized.php#example-5507" class="index">Example#5506 - Marking an uninitialized lazy object as initialized</a></li>
<li><a href="reflectionclass.marklazyobjectasinitialized.php#example-5508" class="index">Example#5507 - Marking an initialized object as initialized</a></li>
<li><a href="reflectionclass.newinstanceargs.php#example-5509" class="index">Example#5508 - Basic usage of ReflectionClass::newInstanceArgs</a></li>
<li><a href="reflectionclass.newlazyghost.php#example-5510" class="index">Example#5509 - Basic usage</a></li>
<li><a href="reflectionclass.newlazyproxy.php#example-5511" class="index">Example#5510 - Basic usage</a></li>
<li><a href="reflectionclass.tostring.php#example-5512" class="index">Example#5511 - ReflectionClass::__toString example</a></li>
<li><a href="reflectionclassconstant.getattributes.php#example-5513" class="index">Example#5512 - Basic usage</a></li>
<li><a href="reflectionclassconstant.getattributes.php#example-5514" class="index">Example#5513 - Filtering results by class name</a></li>
<li><a href="reflectionclassconstant.getattributes.php#example-5515" class="index">Example#5514 - Filtering results by class name, with inheritance</a></li>
<li><a href="reflectionclassconstant.isdeprecated.php#example-5516" class="index">Example#5515 - ReflectionClassConstant::isDeprecated example</a></li>
<li><a href="reflectionclassconstant.isenumcase.php#reflectionclassconstant.isenumcase.example.basic" class="index">Example#5516 - ReflectionClassConstant::isEnumCase example</a></li>
<li><a href="reflectionconstant.getextension.php#example-5518" class="index">Example#5517 - Basic usage of ReflectionConstant::getExtension</a></li>
<li><a href="reflectionconstant.getextensionname.php#example-5519" class="index">Example#5518 - Basic usage of ReflectionConstant::getExtensionName</a></li>
<li><a href="reflectionconstant.getname.php#example-5520" class="index">Example#5519 - ReflectionConstant::getName example</a></li>
<li><a href="reflectionconstant.getnamespacename.php#example-5521" class="index">Example#5520 - ReflectionConstant::getNamespaceName example</a></li>
<li><a href="reflectionconstant.getshortname.php#example-5522" class="index">Example#5521 - ReflectionConstant::getShortName example</a></li>
<li><a href="reflectionconstant.getvalue.php#example-5523" class="index">Example#5522 - ReflectionProperty::getValue example</a></li>
<li><a href="reflectionconstant.isdeprecated.php#example-5524" class="index">Example#5523 - ReflectionConstant::isDeprecated example</a></li>
<li><a href="reflectionenum.getbackingtype.php#example-5525" class="index">Example#5524 - ReflectionEnum::getBackingType example</a></li>
<li><a href="reflectionenum.getcase.php#example-5526" class="index">Example#5525 - ReflectionEnum::getCase example</a></li>
<li><a href="reflectionenum.getcases.php#example-5527" class="index">Example#5526 - ReflectionEnum::getCases example</a></li>
<li><a href="reflectionenum.hascase.php#example-5528" class="index">Example#5527 - ReflectionEnum::hasCase example</a></li>
<li><a href="reflectionenum.isbacked.php#example-5529" class="index">Example#5528 - ReflectionEnum::isBacked example</a></li>
<li><a href="reflectionenumunitcase.getvalue.php#example-5530" class="index">Example#5529 - ReflectionEnum::getValue example</a></li>
<li><a href="reflectionenumbackedcase.getbackingvalue.php#example-5531" class="index">Example#5530 - ReflectionEnum::getBackingValue example</a></li>
<li><a href="reflectionextension.construct.php#example-5532" class="index">Example#5531 - ReflectionExtension example</a></li>
<li><a href="reflectionextension.getclasses.php#example-5533" class="index">Example#5532 - ReflectionExtension::getClasses example</a></li>
<li><a href="reflectionextension.getclassnames.php#example-5534" class="index">Example#5533 - ReflectionExtension::getClassNames example</a></li>
<li><a href="reflectionextension.getconstants.php#example-5535" class="index">Example#5534 - ReflectionExtension::getConstants example</a></li>
<li><a href="reflectionextension.getdependencies.php#example-5536" class="index">Example#5535 - ReflectionExtension::getDependencies example</a></li>
<li><a href="reflectionextension.getfunctions.php#example-5537" class="index">Example#5536 - ReflectionExtension::getFunctions example</a></li>
<li><a href="reflectionextension.getinientries.php#example-5538" class="index">Example#5537 - ReflectionExtension::getINIEntries example</a></li>
<li><a href="reflectionextension.getname.php#example-5539" class="index">Example#5538 - ReflectionExtension::getName example</a></li>
<li><a href="reflectionextension.getversion.php#example-5540" class="index">Example#5539 - ReflectionExtension::getVersion example</a></li>
<li><a href="reflectionextension.info.php#example-5541" class="index">Example#5540 - ReflectionExtension::info example</a></li>
<li><a href="reflectionfunction.construct.php#example-5542" class="index">Example#5541 - ReflectionFunction::__construct example</a></li>
<li><a href="reflectionfunction.invoke.php#example-5543" class="index">Example#5542 - ReflectionFunction::invoke example</a></li>
<li><a href="reflectionfunction.invokeargs.php#example-5544" class="index">Example#5543 - ReflectionFunction::invokeArgs example</a></li>
<li><a href="reflectionfunction.invokeargs.php#example-5545" class="index">Example#5544 - ReflectionFunction::invokeArgs with references example</a></li>
<li><a href="reflectionfunction.isanonymous.php#example-5546" class="index">Example#5545 - ReflectionFunction::isAnonymous example</a></li>
<li><a href="reflectionfunction.tostring.php#example-5547" class="index">Example#5546 - ReflectionFunction::__toString example</a></li>
<li><a href="reflectionfunctionabstract.getattributes.php#example-5548" class="index">Example#5547 - Basic usage with a class method</a></li>
<li><a href="reflectionfunctionabstract.getattributes.php#example-5549" class="index">Example#5548 - Basic usage with a function</a></li>
<li><a href="reflectionfunctionabstract.getattributes.php#example-5550" class="index">Example#5549 - Filtering results by class name</a></li>
<li><a href="reflectionfunctionabstract.getattributes.php#example-5551" class="index">Example#5550 - Filtering results by class name, with inheritance</a></li>
<li><a href="reflectionfunctionabstract.getclosurecalledclass.php#example-5552" class="index">Example#5551 - Example showcasing difference between
    ReflectionFunctionAbstract::getClosureCalledClass,
    ReflectionFunctionAbstract::getClosureScopeClass,
    and ReflectionFunctionAbstract::getClosureThis
    with a closure in the object context</a></li>
<li><a href="reflectionfunctionabstract.getclosurecalledclass.php#example-5553" class="index">Example#5552 - Example showcasing difference between
    ReflectionFunctionAbstract::getClosureCalledClass,
    ReflectionFunctionAbstract::getClosureScopeClass,
    and ReflectionFunctionAbstract::getClosureThis
    with a static closure without an object context</a></li>
<li><a href="reflectionfunctionabstract.getclosurescopeclass.php#example-5554" class="index">Example#5553 - Example showcasing difference between
    ReflectionFunctionAbstract::getClosureCalledClass,
    ReflectionFunctionAbstract::getClosureScopeClass,
    and ReflectionFunctionAbstract::getClosureThis
    with a closure in the object context</a></li>
<li><a href="reflectionfunctionabstract.getclosurescopeclass.php#example-5555" class="index">Example#5554 - Example showcasing difference between
    ReflectionFunctionAbstract::getClosureCalledClass,
    ReflectionFunctionAbstract::getClosureScopeClass,
    and ReflectionFunctionAbstract::getClosureThis
    with a static closure without an object context</a></li>
<li><a href="reflectionfunctionabstract.getclosurethis.php#example-5556" class="index">Example#5555 - Example showcasing difference between
    ReflectionFunctionAbstract::getClosureCalledClass,
    ReflectionFunctionAbstract::getClosureScopeClass,
    and ReflectionFunctionAbstract::getClosureThis
    with a closure in the object context</a></li>
<li><a href="reflectionfunctionabstract.getclosurethis.php#example-5557" class="index">Example#5556 - Example showcasing difference between
    ReflectionFunctionAbstract::getClosureCalledClass,
    ReflectionFunctionAbstract::getClosureScopeClass,
    and ReflectionFunctionAbstract::getClosureThis
    with a static closure without an object context</a></li>
<li><a href="reflectionfunctionabstract.getclosureusedvariables.php#example-5558" class="index">Example#5557 - ReflectionFunctionAbstract::getClosureUsedVariables example</a></li>
<li><a href="reflectionfunctionabstract.getreturntype.php#example-5559" class="index">Example#5558 - ReflectionFunctionAbstract::getReturnType example</a></li>
<li><a href="reflectionfunctionabstract.getreturntype.php#example-5560" class="index">Example#5559 - Usage on built-in functions</a></li>
<li><a href="reflectionfunctionabstract.gettentativereturntype.php#example-5561" class="index">Example#5560 - ReflectionFunctionAbstract::getTentativeReturnType example</a></li>
<li><a href="reflectionfunctionabstract.hasreturntype.php#example-5562" class="index">Example#5561 - ReflectionFunctionAbstract::hasReturnType example</a></li>
<li><a href="reflectionfunctionabstract.hasreturntype.php#example-5563" class="index">Example#5562 - Usage on built-in functions</a></li>
<li><a href="reflectionfunctionabstract.hastentativereturntype.php#example-5564" class="index">Example#5563 - ReflectionFunctionAbstract::hasTentativeReturnType example</a></li>
<li><a href="reflectionfunctionabstract.isclosure.php#example-5565" class="index">Example#5564 - ReflectionFunctionAbstract::isClosure example</a></li>
<li><a href="reflectionfunctionabstract.isdeprecated.php#example-5566" class="index">Example#5565 - ReflectionFunctionAbstract::isDeprecated example</a></li>
<li><a href="reflectionmethod.construct.php#example-5567" class="index">Example#5566 - ReflectionMethod::__construct example</a></li>
<li><a href="reflectionmethod.createfrommethodname.php#example-5568" class="index">Example#5567 - ReflectionMethod::createFromMethodName example</a></li>
<li><a href="reflectionmethod.getdeclaringclass.php#example-5569" class="index">Example#5568 - ReflectionMethod::getDeclaringClass example</a></li>
<li><a href="reflectionmethod.getmodifiers.php#example-5570" class="index">Example#5569 - ReflectionMethod::getModifiers example</a></li>
<li><a href="reflectionmethod.getprototype.php#example-5571" class="index">Example#5570 - ReflectionMethod::getPrototype example</a></li>
<li><a href="reflectionmethod.hasprototype.php#example-5572" class="index">Example#5571 - ReflectionMethod::hasPrototype example</a></li>
<li><a href="reflectionmethod.invoke.php#example-5573" class="index">Example#5572 - ReflectionMethod::invoke example</a></li>
<li><a href="reflectionmethod.invokeargs.php#example-5574" class="index">Example#5573 - ReflectionMethod::invokeArgs example</a></li>
<li><a href="reflectionmethod.setaccessible.php#example-5575" class="index">Example#5574 - Simple Class definition</a></li>
<li><a href="reflectionmethod.tostring.php#example-5576" class="index">Example#5575 - ReflectionMethod::__toString example</a></li>
<li><a href="reflectionnamedtype.isbuiltin.php#example-5577" class="index">Example#5576 - ReflectionNamedType::isBuiltin example</a></li>
<li><a href="reflectionparameter.construct.php#example-5578" class="index">Example#5577 - Using the ReflectionParameter class</a></li>
<li><a href="reflectionparameter.getattributes.php#example-5579" class="index">Example#5578 - Basic usage</a></li>
<li><a href="reflectionparameter.getattributes.php#example-5580" class="index">Example#5579 - Filtering results by class name</a></li>
<li><a href="reflectionparameter.getattributes.php#example-5581" class="index">Example#5580 - Filtering results by class name, with inheritance</a></li>
<li><a href="reflectionparameter.getclass.php#example-5582" class="index">Example#5581 - Using the ReflectionParameter class</a></li>
<li><a href="reflectionparameter.getdeclaringclass.php#example-5583" class="index">Example#5582 - Getting the class that declared the method</a></li>
<li><a href="reflectionparameter.getdefaultvalue.php#example-5584" class="index">Example#5583 - Getting default values of function parameters</a></li>
<li><a href="reflectionparameter.getdefaultvalueconstantname.php#example-5585" class="index">Example#5584 - Getting default values' constant names of function parameters</a></li>
<li><a href="reflectionparameter.gettype.php#example-5586" class="index">Example#5585 - ReflectionParameter::getType Usage as of PHP 7.1.0</a></li>
<li><a href="reflectionparameter.gettype.php#example-5587" class="index">Example#5586 - ReflectionParameter::getType Usage before PHP 7.1.0</a></li>
<li><a href="reflectionparameter.gettype.php#example-5588" class="index">Example#5587 - ReflectionParameter::getType Usage in PHP 8.0.0 and later</a></li>
<li><a href="reflectionparameter.hastype.php#example-5589" class="index">Example#5588 - ReflectionParameter::hasType example</a></li>
<li><a href="reflectionparameter.isarray.php#example-5590" class="index">Example#5589 - PHP 8.0.0 equivalent</a></li>
<li><a href="reflectionparameter.iscallable.php#example-5591" class="index">Example#5590 - PHP 8.0.0 equivalent</a></li>
<li><a href="reflectionparameter.tostring.php#example-5592" class="index">Example#5591 - ReflectionParameter::__toString example</a></li>
<li><a href="reflectionproperty.construct.php#example-5593" class="index">Example#5592 - ReflectionProperty::__construct example</a></li>
<li><a href="reflectionproperty.construct.php#example-5594" class="index">Example#5593 - Getting value from private and protected properties using ReflectionProperty class</a></li>
<li><a href="reflectionproperty.getattributes.php#example-5595" class="index">Example#5594 - Basic usage</a></li>
<li><a href="reflectionproperty.getattributes.php#example-5596" class="index">Example#5595 - Filtering results by class name</a></li>
<li><a href="reflectionproperty.getattributes.php#example-5597" class="index">Example#5596 - Filtering results by class name, with inheritance</a></li>
<li><a href="reflectionproperty.getdefaultvalue.php#example-5598" class="index">Example#5597 - ReflectionProperty::getDefaultValue example</a></li>
<li><a href="reflectionproperty.getdoccomment.php#example-5599" class="index">Example#5598 - ReflectionProperty::getDocComment example</a></li>
<li><a href="reflectionproperty.getdoccomment.php#example-5600" class="index">Example#5599 - Multiple property declarations</a></li>
<li><a href="reflectionproperty.gethook.php#reflectionproperty.gethook.example.basic" class="index">Example#5600 - ReflectionProperty::getHook example</a></li>
<li><a href="reflectionproperty.gethooks.php#reflectionproperty.gethooks.example.basic" class="index">Example#5601 - ReflectionProperty::getHooks example</a></li>
<li><a href="reflectionproperty.getrawvalue.php#reflectionproperty.getrawvalue.example.basic" class="index">Example#5602 - ReflectionProperty::getRawValue example</a></li>
<li><a href="reflectionproperty.getsettabletype.php#reflectionproperty.getsettabletype.example.basic" class="index">Example#5603 - ReflectionProperty::getSettableType example</a></li>
<li><a href="reflectionproperty.gettype.php#reflectionproperty.gettype.example.basic" class="index">Example#5604 - ReflectionProperty::getType example</a></li>
<li><a href="reflectionproperty.getvalue.php#example-5606" class="index">Example#5605 - ReflectionProperty::getValue example</a></li>
<li><a href="reflectionproperty.hasdefaultvalue.php#example-5607" class="index">Example#5606 - ReflectionProperty::hasDefaultValue example</a></li>
<li><a href="reflectionproperty.hashook.php#reflectionproperty.hashook.example.basic" class="index">Example#5607 - ReflectionProperty::hasHook example</a></li>
<li><a href="reflectionproperty.hashooks.php#reflectionproperty.hashooks.example.basic" class="index">Example#5608 - ReflectionProperty::hasHooks example</a></li>
<li><a href="reflectionproperty.hastype.php#reflectionproperty.hastype.example.basic" class="index">Example#5609 - ReflectionProperty::hasType example</a></li>
<li><a href="reflectionproperty.isdefault.php#example-5611" class="index">Example#5610 - ReflectionProperty::isDefault example</a></li>
<li><a href="reflectionproperty.isdynamic.php#example-5612" class="index">Example#5611 - ReflectionProperty::isDynamic example</a></li>
<li><a href="reflectionproperty.isfinal.php#reflectionproperty.isfinal.example.basic" class="index">Example#5612 - ReflectionProperty::isFinal example</a></li>
<li><a href="reflectionproperty.isinitialized.php#reflectionproperty.isinitialized.example.basic" class="index">Example#5613 - ReflectionProperty::isInitialized example</a></li>
<li><a href="reflectionproperty.ispromoted.php#example-5615" class="index">Example#5614 - ReflectionProperty::isPromoted example</a></li>
<li><a href="reflectionproperty.isvirtual.php#reflectionproperty.isvirtual.example.basic" class="index">Example#5615 - ReflectionProperty::isVirtual example</a></li>
<li><a href="reflectionproperty.setaccessible.php#example-5617" class="index">Example#5616 - Simple Class definition</a></li>
<li><a href="reflectionproperty.setrawvalue.php#reflectionproperty.setrawvalue.example.basic" class="index">Example#5617 - ReflectionProperty::setRawValue example</a></li>
<li><a href="reflectionproperty.setvalue.php#example-5619" class="index">Example#5618 - ReflectionProperty::setValue example</a></li>
<li><a href="reflectiontype.allowsnull.php#example-5620" class="index">Example#5619 - ReflectionType::allowsNull example</a></li>
<li><a href="reflectiontype.tostring.php#example-5621" class="index">Example#5620 - ReflectionType::__toString example</a></li>
<li><a href="reflectionuniontype.gettypes.php#example-5622" class="index">Example#5621 - ReflectionUnionType::getTypes example</a></li>
<li><a href="reflectiongenerator.construct.php#example-5623" class="index">Example#5622 - ReflectionGenerator::__construct example</a></li>
<li><a href="reflectiongenerator.getexecutingfile.php#example-5624" class="index">Example#5623 - ReflectionGenerator::getExecutingFile example</a></li>
<li><a href="reflectiongenerator.getexecutinggenerator.php#example-5625" class="index">Example#5624 - ReflectionGenerator::getExecutingGenerator example</a></li>
<li><a href="reflectiongenerator.getexecutingline.php#example-5626" class="index">Example#5625 - ReflectionGenerator::getExecutingLine example</a></li>
<li><a href="reflectiongenerator.getfunction.php#example-5627" class="index">Example#5626 - ReflectionGenerator::getFunction example</a></li>
<li><a href="reflectiongenerator.getthis.php#example-5628" class="index">Example#5627 - ReflectionGenerator::getThis example</a></li>
<li><a href="reflectiongenerator.gettrace.php#example-5629" class="index">Example#5628 - ReflectionGenerator::getTrace example</a></li>
<li><a href="reflectiongenerator.isclosed.php#example-5630" class="index">Example#5629 - ReflectionGenerator::isClosed example</a></li>
<li><a href="reflectionintersectiontype.gettypes.php#example-5631" class="index">Example#5630 - ReflectionIntersectionType::getTypes example</a></li>
<li><a href="reflectionreference.getid.php#reflectionreference.getid.example.basic" class="index">Example#5631 - Basic ReflectionReference::getId usage</a></li>
<li><a href="function.boolval.php#example-5633" class="index">Example#5632 - boolval examples</a></li>
<li><a href="function.debug-zval-dump.php#example-5634" class="index">Example#5633 - debug_zval_dump example</a></li>
<li><a href="function.empty.php#example-5635" class="index">Example#5634 - A simple empty / isset
     comparison.</a></li>
<li><a href="function.empty.php#example-5636" class="index">Example#5635 - empty on String Offsets</a></li>
<li><a href="function.empty.php#example-5637" class="index">Example#5636 - empty on multidimensional arrays</a></li>
<li><a href="function.floatval.php#example-5638" class="index">Example#5637 - floatval Example</a></li>
<li><a href="function.floatval.php#example-5639" class="index">Example#5638 - floatval non-numeric leftmost characters Example</a></li>
<li><a href="function.get-debug-type.php#example-5640" class="index">Example#5639 - get_debug_type example</a></li>
<li><a href="function.get-defined-vars.php#example-5641" class="index">Example#5640 - get_defined_vars Example</a></li>
<li><a href="function.get-resource-id.php#example-5642" class="index">Example#5641 - get_resource_id produces the same result as an int cast</a></li>
<li><a href="function.get-resource-type.php#example-5643" class="index">Example#5642 - get_resource_type example</a></li>
<li><a href="function.gettype.php#example-5644" class="index">Example#5643 - gettype example</a></li>
<li><a href="function.intval.php#example-5645" class="index">Example#5644 - intval examples</a></li>
<li><a href="function.is-array.php#example-5646" class="index">Example#5645 - Check that variable is an array</a></li>
<li><a href="function.is-bool.php#example-5647" class="index">Example#5646 - is_bool examples</a></li>
<li><a href="function.is-callable.php#example-5648" class="index">Example#5647 - Checking whether a string can be called as a function</a></li>
<li><a href="function.is-callable.php#example-5649" class="index">Example#5648 - Checking whether an array can be called as a function</a></li>
<li><a href="function.is-callable.php#example-5650" class="index">Example#5649 - is_callable and constructors</a></li>
<li><a href="function.is-countable.php#example-5651" class="index">Example#5650 - is_countable examples</a></li>
<li><a href="function.is-float.php#example-5652" class="index">Example#5651 - is_float example</a></li>
<li><a href="function.is-int.php#example-5653" class="index">Example#5652 - is_int example</a></li>
<li><a href="function.is-iterable.php#example-5654" class="index">Example#5653 - is_iterable examples</a></li>
<li><a href="function.is-null.php#example-5655" class="index">Example#5654 - is_null example</a></li>
<li><a href="function.is-numeric.php#example-5656" class="index">Example#5655 - is_numeric examples</a></li>
<li><a href="function.is-numeric.php#example-5657" class="index">Example#5656 - is_numeric with whitespace</a></li>
<li><a href="function.is-object.php#example-5658" class="index">Example#5657 - is_object example</a></li>
<li><a href="function.is-resource.php#example-5659" class="index">Example#5658 - is_resource example</a></li>
<li><a href="function.is-scalar.php#example-5660" class="index">Example#5659 - is_scalar example</a></li>
<li><a href="function.is-string.php#example-5661" class="index">Example#5660 - is_string example</a></li>
<li><a href="function.isset.php#example-5662" class="index">Example#5661 - isset Examples</a></li>
<li><a href="function.isset.php#example-5663" class="index">Example#5662 - Example of isset with array elements</a></li>
<li><a href="function.isset.php#example-5664" class="index">Example#5663 - isset on String Offsets</a></li>
<li><a href="function.print-r.php#example-5665" class="index">Example#5664 - print_r example</a></li>
<li><a href="function.print-r.php#example-5666" class="index">Example#5665 - return parameter example</a></li>
<li><a href="function.serialize.php#example-5667" class="index">Example#5666 - serialize example</a></li>
<li><a href="function.settype.php#example-5668" class="index">Example#5667 - settype example</a></li>
<li><a href="function.strval.php#example-5669" class="index">Example#5668 - strval example using PHP magic
     __toString() method.</a></li>
<li><a href="function.unserialize.php#example-5670" class="index">Example#5669 - unserialize example</a></li>
<li><a href="function.unserialize.php#example-5671" class="index">Example#5670 - unserialize_callback_func example</a></li>
<li><a href="function.unset.php#example-5672" class="index">Example#5671 - Using unset</a></li>
<li><a href="function.unset.php#example-5673" class="index">Example#5672 - unset a Global Variable</a></li>
<li><a href="function.unset.php#example-5674" class="index">Example#5673 - unset with Reference</a></li>
<li><a href="function.unset.php#example-5675" class="index">Example#5674 - unset with Static Variable</a></li>
<li><a href="function.unset.php#example-5676" class="index">Example#5675 - unset example</a></li>
<li><a href="function.var-dump.php#example-5677" class="index">Example#5676 - var_dump example</a></li>
<li><a href="function.var-export.php#example-5678" class="index">Example#5677 - var_export Examples</a></li>
<li><a href="function.var-export.php#example-5679" class="index">Example#5678 - Exporting stdClass (since PHP 7.3.0)</a></li>
<li><a href="function.var-export.php#example-5680" class="index">Example#5679 - Exporting classes</a></li>
<li><a href="function.var-export.php#example-5681" class="index">Example#5680 - Using __set_state()</a></li>
<li><a href="oauth.examples.fireeagle.php#example-5682" class="index">Example#5681 - </a></li>
<li><a href="oauth.fetch.php#example-5683" class="index">Example#5682 - OAuth::fetch example</a></li>
<li><a href="oauth.getaccesstoken.php#example-5684" class="index">Example#5683 - OAuth::getAccessToken example</a></li>
<li><a href="oauth.getrequesttoken.php#example-5685" class="index">Example#5684 - OAuth::getRequestToken example</a></li>
<li><a href="oauth.setrequestengine.php#example-5686" class="index">Example#5685 - OAuth::setRequestEngine example</a></li>
<li><a href="oauth.setrsacertificate.php#oauth.setrsacertificate.example" class="index">Example#5686 - An OAuth::setRsaCertificate example</a></li>
<li><a href="oauth.settoken.php#example-5688" class="index">Example#5687 - OAuth::setToken example</a></li>
<li><a href="oauthprovider.construct.php#example-5689" class="index">Example#5688 - OAuthProvider::__construct example</a></li>
<li><a href="oauthprovider.consumerhandler.php#example-5690" class="index">Example#5689 - Example OAuthProvider::consumerHandler callback</a></li>
<li><a href="oauthprovider.generatetoken.php#example-5691" class="index">Example#5690 - OAuthProvider::generateToken example</a></li>
<li><a href="oauthprovider.is2leggedendpoint.php#example-5692" class="index">Example#5691 - OAuthProvider::is2LeggedEndpoint example</a></li>
<li><a href="oauthprovider.timestampnoncehandler.php#example-5693" class="index">Example#5692 - Example OAuthProvider::timestampNonceHandler callback</a></li>
<li><a href="oauthprovider.tokenhandler.php#example-5694" class="index">Example#5693 - Example OAuthProvider::tokenHandler callback</a></li>
<li><a href="function.is-soap-fault.php#example-5695" class="index">Example#5694 - is_soap_fault example</a></li>
<li><a href="function.is-soap-fault.php#example-5696" class="index">Example#5695 - SOAP's standard method for error reporting is exceptions</a></li>
<li><a href="soapclient.construct.php#example-5697" class="index">Example#5696 - Specifying use of TLS 1.3 only</a></li>
<li><a href="soapclient.construct.php#example-5698" class="index">Example#5697 - SoapClient::__construct example</a></li>
<li><a href="soapclient.construct.php#example-5699" class="index">Example#5698 - Using the SOAP_SINGLE_ELEMENT_ARRAYS feature</a></li>
<li><a href="soapclient.dorequest.php#example-5700" class="index">Example#5699 - SoapClient::__doRequest example</a></li>
<li><a href="soapclient.getfunctions.php#example-5701" class="index">Example#5700 - SoapClient::__getFunctions example</a></li>
<li><a href="soapclient.getlastrequest.php#example-5702" class="index">Example#5701 - SoapClient::__getLastRequest() example</a></li>
<li><a href="soapclient.getlastrequestheaders.php#example-5703" class="index">Example#5702 - SoapClient::__getLastRequestHeaders() example</a></li>
<li><a href="soapclient.getlastresponse.php#example-5704" class="index">Example#5703 - SoapClient::__getLastResponse() example</a></li>
<li><a href="soapclient.getlastresponseheaders.php#example-5705" class="index">Example#5704 - SoapClient::__getLastResponse() example</a></li>
<li><a href="soapclient.gettypes.php#example-5706" class="index">Example#5705 - SoapClient::__getTypes example</a></li>
<li><a href="soapclient.setlocation.php#example-5707" class="index">Example#5706 - SoapClient::__setLocation example</a></li>
<li><a href="soapclient.setsoapheaders.php#example-5708" class="index">Example#5707 - SoapClient::__setSoapHeaders example</a></li>
<li><a href="soapclient.setsoapheaders.php#example-5709" class="index">Example#5708 - Set Multiple Headers</a></li>
<li><a href="soapclient.soapcall.php#example-5710" class="index">Example#5709 - SoapClient::__soapCall example</a></li>
<li><a href="soapserver.addfunction.php#example-5711" class="index">Example#5710 - SoapServer::addFunction example</a></li>
<li><a href="soapserver.construct.php#example-5712" class="index">Example#5711 - SoapServer::__construct example</a></li>
<li><a href="soapserver.getfunctions.php#example-5713" class="index">Example#5712 - SoapServer::getFunctions example</a></li>
<li><a href="soapserver.getlastresponse.php#example-5714" class="index">Example#5713 - SoapServer::__getLastResponse() example</a></li>
<li><a href="soapserver.handle.php#example-5715" class="index">Example#5714 - SoapServer::handle example</a></li>
<li><a href="soapserver.setpersistence.php#example-5716" class="index">Example#5715 - SoapServer::setPersistence example</a></li>
<li><a href="soapfault.construct.php#example-5717" class="index">Example#5716 - Some examples</a></li>
<li><a href="soapfault.construct.php#example-5718" class="index">Example#5717 - Some examples</a></li>
<li><a href="soapheader.construct.php#example-5719" class="index">Example#5718 - SoapHeader::__construct example</a></li>
<li><a href="soapparam.construct.php#example-5720" class="index">Example#5719 - SoapParam::__construct example</a></li>
<li><a href="soapvar.construct.php#example-5721" class="index">Example#5720 - SoapVar::__construct example</a></li>
<li><a href="yar.examples.php#example-5722" class="index">Example#5721 - Yar Server Example</a></li>
<li><a href="yar.examples.php#example-5723" class="index">Example#5722 - Access the server in borwser(GET request)</a></li>
<li><a href="yar.examples.php#example-5724" class="index">Example#5723 - Yar Client Example</a></li>
<li><a href="yar.examples.php#example-5725" class="index">Example#5724 - Yar Concurrent Client Example</a></li>
<li><a href="yar-server.construct.php#example-5726" class="index">Example#5725 - Yar_Server::__construct example</a></li>
<li><a href="yar-server.handle.php#example-5727" class="index">Example#5726 - Yar_Server::handle example</a></li>
<li><a href="yar-client.call.php#example-5728" class="index">Example#5727 - Yar_Client::__call example</a></li>
<li><a href="yar-client.construct.php#example-5729" class="index">Example#5728 - Yar_Client::__construct example</a></li>
<li><a href="yar-client.setopt.php#example-5730" class="index">Example#5729 - Yar_Client::setOpt example</a></li>
<li><a href="yar-concurrent-client.call.php#example-5731" class="index">Example#5730 - Yar_Concurrent_Client::call example</a></li>
<li><a href="yar-concurrent-client.loop.php#example-5732" class="index">Example#5731 - Yar_Concurrent_Client::loop example</a></li>
<li><a href="yar-concurrent-client.reset.php#example-5733" class="index">Example#5732 - Yar_Concurrent_Client::reset example</a></li>
<li><a href="yar-server-exception.gettype.php#example-5734" class="index">Example#5733 - Yar_Server_Exception::getType example</a></li>
<li><a href="yar-client-exception.gettype.php#example-5735" class="index">Example#5734 - Yar_Client_Exception::getType example</a></li>
<li><a href="function.xmlrpc-encode-request.php#example-5736" class="index">Example#5735 - XMLRPC client functions example</a></li>
<li><a href="function.xmlrpc-get-type.php#example-5737" class="index">Example#5736 - XML-RPC type example</a></li>
<li><a href="function.xmlrpc-set-type.php#example-5738" class="index">Example#5737 - A xmlrpc_set_type example</a></li>
<li><a href="com.examples.foreach.php#example-5739" class="index">Example#5738 - For Each in ASP</a></li>
<li><a href="com.examples.foreach.php#example-5740" class="index">Example#5739 - foreach in PHP</a></li>
<li><a href="class.com.php#example.com1" class="index">Example#5740 - com example (1)</a></li>
<li><a href="class.com.php#example.com2" class="index">Example#5741 - com example (2)</a></li>
<li><a href="class.dotnet.php#example.dotnet" class="index">Example#5742 - dotnet example</a></li>
<li><a href="class.variant.php#com.variant.example.php5" class="index">Example#5743 - variant example</a></li>
<li><a href="compersisthelper.savetofile.php#compersisthelper.savetofile.example.basic" class="index">Example#5744 - Basic COMPersistHelper::saveToFile Usage</a></li>
<li><a href="function.com-event-sink.php#example-5746" class="index">Example#5745 - COM event sink example</a></li>
<li><a href="win32service.examples.php#example-5747" class="index">Example#5746 - Registering a PHP script to run as a service</a></li>
<li><a href="win32service.examples.php#example-5748" class="index">Example#5747 - Unregistering a service</a></li>
<li><a href="win32service.examples.php#example-5749" class="index">Example#5748 - Running as a service</a></li>
<li><a href="function.win32-create-service.php#example-5750" class="index">Example#5749 - A win32_create_service example</a></li>
<li><a href="function.win32-create-service.php#example-5751" class="index">Example#5750 - A win32_create_service example with dependencies</a></li>
<li><a href="function.win32-create-service.php#example-5752" class="index">Example#5751 - A win32_create_service example with recovery</a></li>
<li><a href="function.win32-delete-service.php#example-5753" class="index">Example#5752 - A win32_delete_service example</a></li>
<li><a href="function.win32-start-service-ctrl-dispatcher.php#example-5754" class="index">Example#5753 - A win32_start_service_ctrl_dispatcher example</a></li>
<li><a href="dom.examples.php#example-5755" class="index">Example#5754 - book.xml</a></li>
<li><a href="domattr.construct.php#example-5756" class="index">Example#5755 - Creating a new DOMAttr object</a></li>
<li><a href="domattr.isid.php#example-5757" class="index">Example#5756 - DOMAttr::isId() Example</a></li>
<li><a href="domcdatasection.construct.php#domcdatasection.construct.examples.basic" class="index">Example#5757 - Creating a new DOMCdataSection object</a></li>
<li><a href="domcharacterdata.after.php#domcharacterdata.after.example.basic" class="index">Example#5758 - DOMCharacterData::after example</a></li>
<li><a href="domcharacterdata.before.php#domcharacterdata.before.example.basic" class="index">Example#5759 - DOMCharacterData::before example</a></li>
<li><a href="domcharacterdata.remove.php#domcharacterdata.remove.example.basic" class="index">Example#5760 - DOMCharacterData::remove example</a></li>
<li><a href="domcharacterdata.replacewith.php#domcharacterdata.replacewith.example.basic" class="index">Example#5761 - DOMCharacterData::replaceWith example</a></li>
<li><a href="domcomment.construct.php#example-5763" class="index">Example#5762 - Creating a new DOMComment</a></li>
<li><a href="domdocument.adoptnode.php#domdocument.adoptnode.example.basic" class="index">Example#5763 - DOMDocument::adoptNode example</a></li>
<li><a href="domdocument.append.php#domdocument.append.example.basic" class="index">Example#5764 - DOMDocument::append example</a></li>
<li><a href="domdocument.construct.php#example-5766" class="index">Example#5765 - Creating a new DOMDocument</a></li>
<li><a href="domdocument.createelement.php#example-5767" class="index">Example#5766 - Creating a new element and inserting it as root</a></li>
<li><a href="domdocument.createelement.php#example-5768" class="index">Example#5767 - Passing text containing an unescaped &amp; as value</a></li>
<li><a href="domdocument.createelementns.php#example-5769" class="index">Example#5768 - Creating a new element and inserting it as root</a></li>
<li><a href="domdocument.createelementns.php#example-5770" class="index">Example#5769 - A namespace prefix example</a></li>
<li><a href="domdocument.getelementbyid.php#example-5771" class="index">Example#5770 - DOMDocument::getElementById() Example</a></li>
<li><a href="domdocument.getelementsbytagname.php#domdocument.getelementsbytagname.example.basic" class="index">Example#5771 - Basic Usage Example</a></li>
<li><a href="domdocument.getelementsbytagnamens.php#example-5773" class="index">Example#5772 - Get all the XInclude elements</a></li>
<li><a href="domdocument.importnode.php#example-5774" class="index">Example#5773 - DOMDocument::importNode example</a></li>
<li><a href="domdocument.load.php#example-5775" class="index">Example#5774 - Creating a Document</a></li>
<li><a href="domdocument.loadhtml.php#example-5776" class="index">Example#5775 - Creating a Document</a></li>
<li><a href="domdocument.loadhtmlfile.php#example-5777" class="index">Example#5776 - Creating a Document</a></li>
<li><a href="domdocument.loadxml.php#example-5778" class="index">Example#5777 - Creating a Document</a></li>
<li><a href="domdocument.prepend.php#domdocument.prepend.example.basic" class="index">Example#5778 - DOMDocument::prepend example</a></li>
<li><a href="domdocument.registernodeclass.php#example-5780" class="index">Example#5779 - Adding a new method to DOMElement to ease our code</a></li>
<li><a href="domdocument.registernodeclass.php#example-5781" class="index">Example#5780 - Retrieving elements as custom class</a></li>
<li><a href="domdocument.registernodeclass.php#example-5782" class="index">Example#5781 - Retrieving owner document</a></li>
<li><a href="domdocument.registernodeclass.php#domdocument.registernodeclass.example.transient" class="index">Example#5782 - Custom objects are transient</a></li>
<li><a href="domdocument.replacechildren.php#domdocument.replacechildren.example.basic" class="index">Example#5783 - DOMDocument::replaceChildren example</a></li>
<li><a href="domdocument.save.php#example-5785" class="index">Example#5784 - Saving a DOM tree into a file</a></li>
<li><a href="domdocument.savehtml.php#example-5786" class="index">Example#5785 - Saving a HTML tree into a string</a></li>
<li><a href="domdocument.savehtmlfile.php#example-5787" class="index">Example#5786 - Saving a HTML tree into a file</a></li>
<li><a href="domdocument.savexml.php#example-5788" class="index">Example#5787 - Saving a DOM tree into a string</a></li>
<li><a href="domdocument.validate.php#example-5789" class="index">Example#5788 - Example of DTD validation</a></li>
<li><a href="domdocument.xinclude.php#example-5790" class="index">Example#5789 - DOMDocument::xinclude() example</a></li>
<li><a href="domdocumentfragment.append.php#domdocumentfragment.append.example.basic" class="index">Example#5790 - DOMDocumentFragment::append example</a></li>
<li><a href="domdocumentfragment.appendxml.php#example-5792" class="index">Example#5791 - Appending XML data to your document</a></li>
<li><a href="domdocumentfragment.prepend.php#domdocumentfragment.prepend.example.basic" class="index">Example#5792 - DOMDocumentFragment::prepend example</a></li>
<li><a href="domdocumentfragment.replacechildren.php#domdocumentfragment.replacechildren.example.basic" class="index">Example#5793 - DOMDocumentFragment::replaceChildren example</a></li>
<li><a href="domelement.after.php#domelement.after.example.basic" class="index">Example#5794 - DOMElement::after example</a></li>
<li><a href="domelement.append.php#domelement.append.example.basic" class="index">Example#5795 - DOMElement::append example</a></li>
<li><a href="domelement.before.php#domelement.before.example.basic" class="index">Example#5796 - DOMElement::before example</a></li>
<li><a href="domelement.construct.php#example-5798" class="index">Example#5797 - Creating a new DOMElement</a></li>
<li><a href="domelement.getattributenames.php#example-5799" class="index">Example#5798 - DOMElement::getAttributeNames example</a></li>
<li><a href="domelement.insertadjacentelement.php#example-5800" class="index">Example#5799 - DOMElement::insertAdjacentElement example</a></li>
<li><a href="domelement.insertadjacenttext.php#example-5801" class="index">Example#5800 - DOMElement::insertAdjacentText example</a></li>
<li><a href="domelement.prepend.php#domelement.prepend.example.basic" class="index">Example#5801 - DOMElement::prepend example</a></li>
<li><a href="domelement.remove.php#domelement.remove.example.basic" class="index">Example#5802 - DOMElement::remove example</a></li>
<li><a href="domelement.replacechildren.php#domelement.replacechildren.example.basic" class="index">Example#5803 - DOMElement::replaceChildren example</a></li>
<li><a href="domelement.replacewith.php#domelement.replacewith.example.basic" class="index">Example#5804 - DOMElement::replaceWith example</a></li>
<li><a href="domelement.setattribute.php#example-5806" class="index">Example#5805 - Setting an attribute</a></li>
<li><a href="domelement.toggleattribute.php#example-5807" class="index">Example#5806 - DOMElement::toggleAttribute example</a></li>
<li><a href="domentityreference.construct.php#example-5808" class="index">Example#5807 - Creating a new DOMEntityReference</a></li>
<li><a href="domimplementation.createdocumenttype.php#example-5809" class="index">Example#5808 - Creating a document with an attached DTD</a></li>
<li><a href="domimplementation.hasfeature.php#example-5810" class="index">Example#5809 - Testing your DOM Implementation</a></li>
<li><a href="domnamednodemap.getnameditem.php#example-5811" class="index">Example#5810 - Getting an attribute on a node</a></li>
<li><a href="domnamednodemap.getnameditem.php#example-5812" class="index">Example#5811 - Accessing attribute with array syntax</a></li>
<li><a href="domnode.appendchild.php#example-5813" class="index">Example#5812 - Adding a child</a></li>
<li><a href="domnode.appendchild.php#example-5814" class="index">Example#5813 - Nested children</a></li>
<li><a href="domnode.c14n.php#example-5815" class="index">Example#5814 - Example with XPath query</a></li>
<li><a href="domnode.comparedocumentposition.php#example-5816" class="index">Example#5815 - DOMNode::compareDocumentPosition example</a></li>
<li><a href="domnode.contains.php#example-5817" class="index">Example#5816 - DOMNode::contains example</a></li>
<li><a href="domnode.getlineno.php#example-5818" class="index">Example#5817 - DOMNode::getLineNo example</a></li>
<li><a href="domnode.getnodepath.php#example-5819" class="index">Example#5818 - DOMNode::getNodePath example</a></li>
<li><a href="domnode.getrootnode.php#example-5820" class="index">Example#5819 - DOMNode::getRootNode example</a></li>
<li><a href="domnode.isequalnode.php#example-5821" class="index">Example#5820 - DOMNode::isEqualNode example</a></li>
<li><a href="domnode.removechild.php#example-5822" class="index">Example#5821 - Removing a child</a></li>
<li><a href="domnodelist.item.php#example-5823" class="index">Example#5822 - Traversing all the entries of the table</a></li>
<li><a href="domnodelist.item.php#example-5824" class="index">Example#5823 - Accessing item with array syntax</a></li>
<li><a href="domnodelist.item.php#example-5825" class="index">Example#5824 - Traversing items with foreach</a></li>
<li><a href="domparentnode.replacechildren.php#example-5826" class="index">Example#5825 - DOMParentNode::replaceChildren example</a></li>
<li><a href="domprocessinginstruction.construct.php#example-5827" class="index">Example#5826 - Creating a new DOMProcessingInstruction object</a></li>
<li><a href="domtext.construct.php#example-5828" class="index">Example#5827 - Creating a new DOMText</a></li>
<li><a href="domxpath.evaluate.php#example-5829" class="index">Example#5828 - Getting the count of all the english books</a></li>
<li><a href="domxpath.query.php#example-5830" class="index">Example#5829 - Getting all the english books</a></li>
<li><a href="domxpath.quote.php#example-5831" class="index">Example#5830 - Matching attribute value with quotes</a></li>
<li><a href="domxpath.registerphpfunctionns.php#example-5832" class="index">Example#5831 - Register a namespaced XPath function and call it from the XPath expression</a></li>
<li><a href="domxpath.registerphpfunctions.php#example-5833" class="index">Example#5832 - book.xml</a></li>
<li><a href="domxpath.registerphpfunctions.php#example-5834" class="index">Example#5833 - DOMXPath::registerPhpFunctions with php:functionString</a></li>
<li><a href="domxpath.registerphpfunctions.php#example-5835" class="index">Example#5834 - DOMXPath::registerPhpFunctions with php:function</a></li>
<li><a href="domxpath.registerphpfunctions.php#example-5836" class="index">Example#5835 - DOMXPath::registerPhpFunctions with a callable</a></li>
<li><a href="dom-attr.isid.php#example-5837" class="index">Example#5836 - Dom\Attr::isId() Example</a></li>
<li><a href="dom-attr.rename.php#dom-attr.rename.example.basic" class="index">Example#5837 - Dom\Attr::rename example to change both the namespace and qualified name</a></li>
<li><a href="dom-attr.rename.php#dom-attr.rename.example.only-name" class="index">Example#5838 - Dom\Attr::rename example to change only the qualified name</a></li>
<li><a href="dom-characterdata.after.php#dom-characterdata.after.example.basic" class="index">Example#5839 - Dom\CharacterData::after example</a></li>
<li><a href="dom-characterdata.before.php#dom-characterdata.before.example.basic" class="index">Example#5840 - Dom\CharacterData::before example</a></li>
<li><a href="dom-characterdata.remove.php#dom-characterdata.remove.example.basic" class="index">Example#5841 - Dom\CharacterData::remove example</a></li>
<li><a href="dom-characterdata.replacewith.php#dom-characterdata.replacewith.example.basic" class="index">Example#5842 - Dom\CharacterData::replaceWith example</a></li>
<li><a href="dom-htmldocument.createempty.php#dom-htmldocument.createempty.example.basic" class="index">Example#5843 - Dom\HTMLDocument::createEmpty example</a></li>
<li><a href="dom-htmldocument.createfromstring.php#dom-htmldocument.createfromstring.example.basic" class="index">Example#5844 - Dom\HTMLDocument::createFromString example</a></li>
<li><a href="dom-parentnode.replacechildren.php#example-5846" class="index">Example#5845 - Dom\ParentNode::replaceChildren example</a></li>
<li><a href="dom-tokenlist.add.php#dom-tokenlist.add.example.basic" class="index">Example#5846 - Dom\TokenList::add example</a></li>
<li><a href="dom-tokenlist.contains.php#dom-tokenlist.contains.example.basic" class="index">Example#5847 - Dom\TokenList::contains example</a></li>
<li><a href="dom-tokenlist.item.php#dom-tokenlist.item.example.basic" class="index">Example#5848 - Dom\TokenList::item example</a></li>
<li><a href="dom-tokenlist.remove.php#dom-tokenlist.remove.example.basic" class="index">Example#5849 - Dom\TokenList::remove example</a></li>
<li><a href="dom-tokenlist.replace.php#dom-tokenlist.replace.example.basic" class="index">Example#5850 - Dom\TokenList::replace example</a></li>
<li><a href="dom-tokenlist.toggle.php#dom-tokenlist.toggle.example.basic" class="index">Example#5851 - Dom\TokenList::toggle example</a></li>
<li><a href="function.dom-import-simplexml.php#example-5853" class="index">Example#5852 - Import SimpleXML into DOM with dom_import_simplexml</a></li>
<li><a href="function.dom-import-simplexml.php#example-5854" class="index">Example#5853 - Import SimpleXML into DOM and modify SimpleXML through DOM</a></li>
<li><a href="function.dom-ns-import-simplexml.php#example-5855" class="index">Example#5854 - Import SimpleXML into DOM and modify SimpleXML through DOM</a></li>
<li><a href="function.libxml-get-errors.php#example-5856" class="index">Example#5855 - A libxml_get_errors example</a></li>
<li><a href="function.libxml-set-external-entity-loader.php#example-5857" class="index">Example#5856 - libxml_set_external_entity_loader example</a></li>
<li><a href="function.libxml-set-streams-context.php#example-5858" class="index">Example#5857 - A libxml_set_streams_context example</a></li>
<li><a href="function.libxml-use-internal-errors.php#example-5859" class="index">Example#5858 - A libxml_use_internal_errors example</a></li>
<li><a href="simplexml.examples-basic.php#example-5860" class="index">Example#5859 - Include file examples/simplexml-data.php with XML string</a></li>
<li><a href="simplexml.examples-basic.php#example-5861" class="index">Example#5860 - Getting &lt;plot&gt;</a></li>
<li><a href="simplexml.examples-basic.php#example-5862" class="index">Example#5861 - Getting &lt;line&gt;</a></li>
<li><a href="simplexml.examples-basic.php#example-5863" class="index">Example#5862 - Accessing non-unique elements in SimpleXML</a></li>
<li><a href="simplexml.examples-basic.php#example-5864" class="index">Example#5863 - Using attributes</a></li>
<li><a href="simplexml.examples-basic.php#example-5865" class="index">Example#5864 - Comparing Elements and Attributes with Text</a></li>
<li><a href="simplexml.examples-basic.php#example-5866" class="index">Example#5865 - Comparing Two Elements</a></li>
<li><a href="simplexml.examples-basic.php#example-5867" class="index">Example#5866 - Using XPath</a></li>
<li><a href="simplexml.examples-basic.php#example-5868" class="index">Example#5867 - Setting values</a></li>
<li><a href="simplexml.examples-basic.php#example-5869" class="index">Example#5868 - Adding elements and attributes</a></li>
<li><a href="simplexml.examples-basic.php#example-5870" class="index">Example#5869 - DOM Interoperability</a></li>
<li><a href="simplexml.examples-basic.php#example-5871" class="index">Example#5870 - Working with namespaces</a></li>
<li><a href="simplexml.examples-errors.php#example-5872" class="index">Example#5871 - Loading broken XML string</a></li>
<li><a href="simplexmlelement.addattribute.php#example-5873" class="index">Example#5872 - Add attributes and children to a SimpleXML element</a></li>
<li><a href="simplexmlelement.addchild.php#example-5874" class="index">Example#5873 - Add attributes and children to a SimpleXML element</a></li>
<li><a href="simplexmlelement.asxml.php#example-5875" class="index">Example#5874 - Get XML</a></li>
<li><a href="simplexmlelement.asxml.php#example-5876" class="index">Example#5875 - Using asXML() on SimpleXMLElement::xpath results</a></li>
<li><a href="simplexmlelement.attributes.php#example-5877" class="index">Example#5876 - Interpret an XML string</a></li>
<li><a href="simplexmlelement.children.php#example-5878" class="index">Example#5877 - Traversing a children() pseudo-array</a></li>
<li><a href="simplexmlelement.children.php#example-5879" class="index">Example#5878 - Using namespaces</a></li>
<li><a href="simplexmlelement.construct.php#example-5880" class="index">Example#5879 - Create a SimpleXMLElement object</a></li>
<li><a href="simplexmlelement.construct.php#example-5881" class="index">Example#5880 - Create a SimpleXMLElement object from a URL</a></li>
<li><a href="simplexmlelement.count.php#example-5882" class="index">Example#5881 - Counting the number of children</a></li>
<li><a href="simplexmlelement.current.php#example-5883" class="index">Example#5882 - Return the current element</a></li>
<li><a href="simplexmlelement.getdocnamespaces.php#example-5884" class="index">Example#5883 - Get document namespaces</a></li>
<li><a href="simplexmlelement.getdocnamespaces.php#example-5885" class="index">Example#5884 - Working with multiple namespaces</a></li>
<li><a href="simplexmlelement.getname.php#example-5886" class="index">Example#5885 - Get XML element names</a></li>
<li><a href="simplexmlelement.getnamespaces.php#example-5887" class="index">Example#5886 - Get document namespaces in use</a></li>
<li><a href="simplexmlelement.getchildren.php#example-5888" class="index">Example#5887 - Return the sub-elements of the current element</a></li>
<li><a href="simplexmlelement.haschildren.php#example-5889" class="index">Example#5888 - Check whether the current element has sub-elements</a></li>
<li><a href="simplexmlelement.key.php#example-5890" class="index">Example#5889 - Get the current XML tag key</a></li>
<li><a href="simplexmlelement.next.php#example-5891" class="index">Example#5890 - Move to the next element</a></li>
<li><a href="simplexmlelement.registerxpathnamespace.php#example-5892" class="index">Example#5891 - Setting a namespace prefix to use in an XPath query</a></li>
<li><a href="simplexmlelement.rewind.php#example-5893" class="index">Example#5892 - Rewind to the first element</a></li>
<li><a href="simplexmlelement.tostring.php#example-5894" class="index">Example#5893 - Get string content</a></li>
<li><a href="simplexmlelement.valid.php#example-5895" class="index">Example#5894 - Check whether the current element is valid</a></li>
<li><a href="simplexmlelement.xpath.php#example-5896" class="index">Example#5895 - Xpath</a></li>
<li><a href="function.simplexml-import-dom.php#example-5897" class="index">Example#5896 - Importing a DOMDocument</a></li>
<li><a href="function.simplexml-import-dom.php#example-5898" class="index">Example#5897 - Importing a Dom\Document</a></li>
<li><a href="function.simplexml-load-file.php#example-5899" class="index">Example#5898 - Interpret an XML document</a></li>
<li><a href="function.simplexml-load-string.php#example-5900" class="index">Example#5899 - Interpret an XML string</a></li>
<li><a href="wddx.examples-serialize.php#example-5901" class="index">Example#5900 - Serializing a single value with WDDX</a></li>
<li><a href="wddx.examples-serialize.php#example-5902" class="index">Example#5901 - Using incremental packets with WDDX</a></li>
<li><a href="function.wddx-serialize-vars.php#example-5903" class="index">Example#5902 - wddx_serialize_vars example</a></li>
<li><a href="example.xml-structure.php#example-5904" class="index">Example#5903 - Show XML Element Structure</a></li>
<li><a href="example.xml-map-tags.php#example-5905" class="index">Example#5904 - Map XML to HTML</a></li>
<li><a href="example.xml-external-entity.php#example-5906" class="index">Example#5905 - External Entity Example</a></li>
<li><a href="example.xml-external-entity.php#example-5907" class="index">Example#5906 - xmltest.xml</a></li>
<li><a href="example.xml-external-entity.php#example-5908" class="index">Example#5907 - xmltest2.xml</a></li>
<li><a href="example.xml-parsing-with-class.php#example-5909" class="index">Example#5908 - Show XML Element Structure</a></li>
<li><a href="function.xml-parse.php#xml_parse.example.chunked" class="index">Example#5909 - Chunked parsing of large XML documents</a></li>
<li><a href="function.xml-parse-into-struct.php#example-5911" class="index">Example#5910 - xml_parse_into_struct example</a></li>
<li><a href="function.xml-parse-into-struct.php#example-5912" class="index">Example#5911 - moldb.xml - small database of molecular information</a></li>
<li><a href="function.xml-parse-into-struct.php#example-5913" class="index">Example#5912 - parsemoldb.php - parses moldb.xml into an array of
     molecular objects</a></li>
<li><a href="function.xml-set-object.php#example-5914" class="index">Example#5913 - xml_set_object example</a></li>
<li><a href="xmlreader.isvalid.php#example-5915" class="index">Example#5914 - Validating XML</a></li>
<li><a href="example.xmlwriter-simple.php#example-5916" class="index">Example#5915 - Creating a simple XML document</a></li>
<li><a href="example.xmlwriter-namespace.php#example-5917" class="index">Example#5916 - Working with XML namespaces</a></li>
<li><a href="example.xmlwriter-oop.php#example-5918" class="index">Example#5917 - Working with the OO API</a></li>
<li><a href="xmlwriter.openuri.php#xmlwriter-open-uri.example.basic" class="index">Example#5918 - Direct output of XML</a></li>
<li><a href="xmlwriter.setindent.php#xmlwriter-set-indent.example.mixed-content" class="index">Example#5919 - XMLWriter::setIndent and mixed Content</a></li>
<li><a href="xmlwriter.startattribute.php#xmlwriter-start-attribute.example.basic" class="index">Example#5920 - Basic XMLWriter::startAttribute Usage</a></li>
<li><a href="xmlwriter.writeattribute.php#xmlwriter-write-attribute.example.intermix" class="index">Example#5921 - Intermixing Sub-elements and Attributes</a></li>
<li><a href="xmlwriter.writecdata.php#xmlwriter-write-cdata.example.basic" class="index">Example#5922 - Basic xmlwriter_write_cdata Usage</a></li>
<li><a href="xsl.examples-collection.php#example-5924" class="index">Example#5923 - collection.xml</a></li>
<li><a href="xsl.examples-collection.php#example-5925" class="index">Example#5924 - collection.xsl</a></li>
<li><a href="xsl.examples-errors.php#example-5926" class="index">Example#5925 - fruits.xml</a></li>
<li><a href="xsl.examples-errors.php#example-5927" class="index">Example#5926 - fruits.xsl</a></li>
<li><a href="xsl.examples-errors.php#xsl.examples-errors.capture" class="index">Example#5927 - Collating and printing errors</a></li>
<li><a href="xsltprocessor.construct.php#example-5929" class="index">Example#5928 - Creating an XSLTProcessor</a></li>
<li><a href="xsltprocessor.hasexsltsupport.php#example-5930" class="index">Example#5929 - Testing EXSLT support</a></li>
<li><a href="xsltprocessor.registerphpfunctionns.php#example-5931" class="index">Example#5930 - Simple PHP Function call from a stylesheet</a></li>
<li><a href="xsltprocessor.registerphpfunctions.php#example-5932" class="index">Example#5931 - Simple PHP Function call from a stylesheet</a></li>
<li><a href="xsltprocessor.setparameter.php#example-5933" class="index">Example#5932 - Changing the owner before the transformation</a></li>
<li><a href="xsltprocessor.setprofiling.php#example-5934" class="index">Example#5933 - Example profiling output</a></li>
<li><a href="xsltprocessor.transformtodoc.php#example-5935" class="index">Example#5934 - Transforming to a DOMDocument</a></li>
<li><a href="xsltprocessor.transformtodoc.php#example-5936" class="index">Example#5935 - Transforming to a Dom\Document</a></li>
<li><a href="xsltprocessor.transformtouri.php#example-5937" class="index">Example#5936 - Transforming to a HTML file</a></li>
<li><a href="xsltprocessor.transformtouri.php#example-5938" class="index">Example#5937 - Transforming to a HTML file using Dom\Document</a></li>
<li><a href="xsltprocessor.transformtoxml.php#example-5939" class="index">Example#5938 - Transforming to a string</a></li>
<li><a href="xsltprocessor.transformtoxml.php#example-5940" class="index">Example#5939 - Transforming to a string using Dom\Document</a></li>
<li><a href="faq.html.php#example-5941" class="index">Example#5940 - A hidden HTML form element</a></li>
<li><a href="faq.html.php#example-5942" class="index">Example#5941 - Data to be edited by the user</a></li>
<li><a href="faq.html.php#example-5943" class="index">Example#5942 - In a URL</a></li>
<li><a href="faq.html.php#example-5944" class="index">Example#5943 - Generating Javascript with PHP</a></li>
<li><a href="history.php.php#example-5945" class="index">Example#5944 - Example PHP/FI Code</a></li>
<li><a href="ini.sections.php#example-5946" class="index">Example#5945 - Activate full on-screen error reporting for dev. domain</a></li>
<li><a href="ini.sections.php#example-5947" class="index">Example#5946 - Add security script for protected areas</a></li>
<li><a href="ini.core.php#example-5948" class="index">Example#5947 - Unix include_path</a></li>
<li><a href="ini.core.php#example-5949" class="index">Example#5948 - Windows include_path</a></li>
<li><a href="ini.core.php#example-5950" class="index">Example#5949 - Unix include_path using ${USER} env variable</a></li>
<li><a href="filters.string.php#example-5951" class="index">Example#5950 - string.rot13</a></li>
<li><a href="filters.string.php#example-5952" class="index">Example#5951 - string.toupper</a></li>
<li><a href="filters.string.php#example-5953" class="index">Example#5952 - string.tolower</a></li>
<li><a href="filters.string.php#example-5954" class="index">Example#5953 - string.strip_tags</a></li>
<li><a href="filters.convert.php#example-5955" class="index">Example#5954 - convert.base64-encode &amp;
     convert.base64-decode</a></li>
<li><a href="filters.convert.php#example-5956" class="index">Example#5955 - convert.quoted-printable-encode &amp;
     convert.quoted-printable-decode</a></li>
<li><a href="filters.convert.php#example-5957" class="index">Example#5956 - convert.iconv.*</a></li>
<li><a href="filters.compression.php#example-5958" class="index">Example#5957 - zlib.deflate and
     zlib.inflate</a></li>
<li><a href="filters.compression.php#example-5959" class="index">Example#5958 - zlib.deflate simple</a></li>
<li><a href="filters.compression.php#example-5960" class="index">Example#5959 - bzip2.compress and
     bzip2.decompress</a></li>
<li><a href="filters.encryption.php#example-5961" class="index">Example#5960 - Encrypt/Decrypt with Blowfish</a></li>
<li><a href="filters.encryption.php#example-5962" class="index">Example#5961 - Encrypt file using AES-128 CBC with SHA256 HMAC</a></li>
</ul>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/funcindex.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Findexes.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=indexes.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/indexes.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="indexes.php">Index listing</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="indexes.functions.php" title="Function and Method listing">Function and Method listing</a>
                        </li>
                                                <li class="current">
                            <a href="indexes.examples.php" title="Example listing">Example listing</a>
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
