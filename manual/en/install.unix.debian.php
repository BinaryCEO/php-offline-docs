<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installing from packages on Debian GNU/Linux and related distributions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.unix.debian.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.unix.debian.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.debian.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.unix.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.unix.php">
 <link rel="next" href="https://www.php.net/manual/en/install.unix.dnf.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.debian.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.unix.debian.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.unix.debian.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.unix.debian.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.unix.debian.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.unix.debian.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.unix.debian.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.unix.debian.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.unix.debian.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.unix.debian.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.unix.debian.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installing from packages on Debian GNU/Linux and related distributions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installing from packages on Debian GNU/Linux and related distributions - Manual" />
<meta name="twitter:description" content="Installing from packages on Debian GNU/Linux and related distributions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installing from packages on Debian GNU/Linux and related distributions - Manual" />
<meta itemprop="description" content="Installing from packages on Debian GNU/Linux and related distributions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installing from packages on Debian GNU/Linux and related distributions" />

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
        <a href="install.unix.dnf.php">
          Installing from packages on GNU/Linux distributions that use DNF &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.unix.php">
          &laquo; Installation on Unix systems        </a>
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
            <option value='en/install.unix.debian.php' selected="selected">English</option>
            <option value='de/install.unix.debian.php'>German</option>
            <option value='es/install.unix.debian.php'>Spanish</option>
            <option value='fr/install.unix.debian.php'>French</option>
            <option value='it/install.unix.debian.php'>Italian</option>
            <option value='ja/install.unix.debian.php'>Japanese</option>
            <option value='pt_BR/install.unix.debian.php'>Brazilian Portuguese</option>
            <option value='ru/install.unix.debian.php'>Russian</option>
            <option value='tr/install.unix.debian.php'>Turkish</option>
            <option value='uk/install.unix.debian.php'>Ukrainian</option>
            <option value='zh/install.unix.debian.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.unix.debian" class="sect1">
 <h2 class="title">Installing from packages on Debian GNU/Linux and related distributions</h2>
 <p class="para">
  While PHP can be installed from source, it is also available through
  packages from <a href="http://www.debian.org/" class="link external">&raquo;&nbsp;Debian GNU/Linux</a>.
  This is also true for other distributions based on Debian, such as
  Ubuntu, Kali Linux, and Linux Mint.
 </p>
 <div class="warning"><strong class="warning">Warning</strong>
 <p class="para">
  Builds from third-parties are considered unofficial and not directly
  supported by the PHP project. Any bugs encountered should be reported to the
  provider of those unofficial builds unless they can be reproduced using the
  builds from <a href="https://www.php.net/downloads.php" class="link external">&raquo;&nbsp;the official download
  area</a>.
 </p>
</div>
 <p class="para">
  The packages can be installed using either the <strong class="command">apt</strong> or
  <strong class="command">aptitude</strong> commands. This manual page uses these two
  commands interchangeably.
 </p>
 <div class="sect2" id="install.unix.debian.apt">
  <h3 class="title">Using APT</h3>
   <p class="simpara">
    First, note that other related packages may be desired like
    <code class="literal">libapache-mod-php</code> to integrate with Apache 2, and
    <code class="literal">php-pear</code> for PEAR.
   </p>
   <p class="simpara">
    Second, before installing a package, it&#039;s wise to ensure the package list
    is up to date. Typically, this is done by running the command
    <strong class="command">apt update</strong>.
   </p>
   <div class="example" id="install.unix.debian.apt.example">
    <p><strong>Example #1 Debian Install Example with Apache 2</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode"># apt install php-common libapache2-mod-php php-cli</pre>
</div>
    </div>

   </div>
   <p class="simpara">
    APT will automatically install the PHP module for Apache 2 and all of its
    dependencies, and then activate it.  Apache should be restarted in order for
    the changes take place. For example:
   </p>
   <div class="example" id="install.unix.debian.apt.example2">
    <p><strong>Example #2 Stopping and starting Apache once PHP is installed</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode"># /etc/init.d/apache2 stop
# /etc/init.d/apache2 start</pre>
</div>
    </div>

   </div>
 </div>
 <div class="sect2" id="install.unix.debian.config">
  <h3 class="title">Better control of configuration</h3>
   <p class="simpara">
    In the last section, PHP was installed with only core modules. It&#039;s
    very likely that additional modules will be desired, such as
    <a href="book.mysql.php" class="link">MySQL</a>,
    <a href="book.curl.php" class="link">cURL</a>,
    <a href="book.image.php" class="link">GD</a>,
    etc. These may also be installed via the <strong class="command">apt</strong> command.
   </p>
   <div class="example" id="install.unix.debian.config.example">
    <p><strong>Example #3 Methods for listing additional PHP packages</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode"># apt-cache search php
# apt search php | grep -i mysql
# aptitude search php</pre>
</div>
    </div>

   </div>
   <p class="simpara">
    The list of packages will include a large number of packages that includes
    basic PHP components, such as <code class="literal">php-cgi</code>,
    <code class="literal">php-cli</code>, and <code class="literal">php-dev</code>, as well as
    many PHP extensions. When extensions are installed, additional packages
    will be automatically installed as necessary to satisfy the dependencies
    of those packages.
   </p>
   <div class="example" id="install.unix.debian.config.example2">
    <p><strong>Example #4 Install PHP with MySQL, cURL</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode"># apt install php-mysql php-curl</pre>
</div>
    </div>

   </div>
   <p class="simpara">
    APT will automatically add the appropriate lines to the
    different <var class="filename">php.ini</var> related files like 
    <var class="filename">/etc/php/7.4/php.ini</var>,
    <var class="filename">/etc/php/7.4/conf.d/*.ini</var>, etc. and depending on
    the extension will add entries similar to <code class="literal">extension=foo.so</code>.
    However, restarting the web server (like Apache) is required before these
    changes take affect.
   </p>
 </div>
 <div class="sect2" id="install.unix.debian.faq">
  <h3 class="title">Common Problems</h3>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     If the PHP scripts are not parsing via the web server, then it&#039;s
     likely that PHP was not added to the web server&#039;s configuration
     file, which on Debian may be <var class="filename">/etc/apache2/apache2.conf</var>
     or similar. See the Debian manual for further details.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If an extension was seemingly installed yet the functions are undefined,
     be sure that the appropriate ini file is being loaded and/or the web
     server was restarted after installation.
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
        <a href="https://github.com/php/doc-en/blob/master/install/unix/debian.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.unix.debian%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.unix.debian&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.debian.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112544">  <div class="votes">
    <div id="Vu112544">
    <a href="/manual/vote-note.php?id=112544&amp;page=install.unix.debian&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112544">
    <a href="/manual/vote-note.php?id=112544&amp;page=install.unix.debian&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112544" title="62% like this...">
    82
    </div>
  </div>
  <a href="#112544" class="name">
  <strong class="user"><em>thumbs at apache dot org</em></strong></a><a class="genanchor" href="#112544"> &para;</a><div class="date" title="2013-06-27 05:50"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112544">
<div class="phpcode"><code><span class="html">To refresh this document, perhaps it would be worth mentioning more modern methods to serve php content under apache httpd.<br /><br />Specifically, the preferred method is now fastcgi, using either of those recipes:<br /><br />(mod_fastcgi, httpd 2.2)<br /><a href="http://wiki.apache.org/httpd/php-fastcgi" rel="nofollow" target="_blank">http://wiki.apache.org/httpd/php-fastcgi</a><br /><br />(mod_fcgid, httpd 2.2)<br /><a href="http://wiki.apache.org/httpd/php-fcgid" rel="nofollow" target="_blank">http://wiki.apache.org/httpd/php-fcgid</a><br /><br />(mod_proxy_fcgi, httpd 2.4)<br /><a href="http://wiki.apache.org/httpd/PHP-FPM" rel="nofollow" target="_blank">http://wiki.apache.org/httpd/PHP-FPM</a><br /><br />While the legacy mod_php approach is still applicable for some older installations, the fastcgi method is much faster, and require much less RAM to operate, based on similar traffic patterns.<br /><br />Thank you!</span></code></div>
  </div>
 </div>
  <div class="note" id="122244">  <div class="votes">
    <div id="Vu122244">
    <a href="/manual/vote-note.php?id=122244&amp;page=install.unix.debian&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122244">
    <a href="/manual/vote-note.php?id=122244&amp;page=install.unix.debian&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122244" title="61% like this...">
    50
    </div>
  </div>
  <a href="#122244" class="name">
  <strong class="user"><em>kearney dot taaffe at gmail dot com</em></strong></a><a class="genanchor" href="#122244"> &para;</a><div class="date" title="2018-01-09 02:24"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122244">
<div class="phpcode"><code><span class="html">Compiling PHP on Ubuntu boxes.<br /><br />If you would like to compile PHP from source as opposed to relying on package maintainers, here's a list of packages, and commands you can run<br /><br />STEP 1:<br />sudo apt-get install autoconf build-essential curl libtool \<br />  libssl-dev libcurl4-openssl-dev libxml2-dev libreadline7 \<br />  libreadline-dev libzip-dev libzip4 nginx openssl \<br />  pkg-config zlib1g-dev<br /><br />So you don't overwrite any existing PHP installs on your system, install PHP in your home directory. Create a directory for the PHP binaries to live<br /><br />    mkdir -p ~/bin/php7-latest/<br /><br />STEP 2:<br /># download the latest PHP tarball, decompress it, then cd to the new directory.<br /><br />STEP 3:<br />Configure PHP. Remove any options you don't need (like MySQL or Postgres (--with-pdo-pgsql))<br /><br />./configure --prefix=$HOME/bin/php-latest \<br />    --enable-mysqlnd \<br />    --with-pdo-mysql \<br />    --with-pdo-mysql=mysqlnd \<br />    --with-pdo-pgsql=/usr/bin/pg_config \<br />    --enable-bcmath \<br />    --enable-fpm \<br />    --with-fpm-user=www-data \<br />    --with-fpm-group=www-data \<br />    --enable-mbstring \<br />    --enable-phpdbg \<br />    --enable-shmop \<br />    --enable-sockets \<br />    --enable-sysvmsg \<br />    --enable-sysvsem \<br />    --enable-sysvshm \<br />    --enable-zip \<br />    --with-libzip=/usr/lib/x86_64-linux-gnu \<br />    --with-zlib \<br />    --with-curl \<br />    --with-pear \<br />    --with-openssl \<br />    --enable-pcntl \<br />    --with-readline<br /><br />STEP 4:<br />compile the binaries by typing: make<br /><br />If no errors, install by typing: make install<br /><br />STEP 5:<br />Copy the PHP.ini file to the install directory<br /><br />    cp php.ini-development ~/bin/php-latest/lib/ <br /><br />STEP 6:<br /><br />cd ~/bin/php-latest/etc; <br />mv php-fpm.conf.default php-fpm.conf<br />mv php-fpm.d/www.conf.default php-fpm.d/www.conf<br /><br />STEP 7:<br />create symbolic links for your for your binary files<br /><br />   cd ~/bin<br />   ln -s php-latest/bin/php php<br />   ln -s php-latest/bin/php-cgi php-cgi<br />   ln -s php-latest/bin/php-config php-config<br />   ln -s php-latest/bin/phpize phpize<br />   ln -s php-latest/bin/phar.phar phar<br />   ln -s php-latest/bin/pear pear<br />   ln -s php-latest/bin/phpdbg phpdbg<br />   ln -s php-latest/sbin/php-fpm php-fpm<br /><br />STEP 8: link your local PHP to the php command. You will need to logout then log back in for php to switch to the local version instead of the installed version<br /><br /># add this to .bashrc<br />if [ -d "$HOME/bin" ] ; then<br />  PATH="$HOME/bin:$PATH"<br />fi<br /><br />STEP 9: Start PHP-FPM<br /><br />    sudo ~/bin/php7/sbin/php-fpm</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.unix.debian&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.debian.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.unix.php">Installation on Unix systems</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="install.unix.debian.php" title="Installing from packages on Debian GNU/Linux and related distributions">Installing from packages on Debian GNU/Linux and related distributions</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.dnf.php" title="Installing from packages on GNU/Linux distributions that use DNF">Installing from packages on GNU/Linux distributions that use DNF</a>
                        </li>
                                                <li class="">
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
