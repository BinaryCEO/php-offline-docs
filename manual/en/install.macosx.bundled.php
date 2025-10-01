<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Using the bundled PHP prior to macOS Monterey - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.macosx.bundled.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.macosx.bundled.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.macosx.bundled.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.macosx.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.macosx.compile.php">
 <link rel="next" href="https://www.php.net/manual/en/install.windows.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.macosx.bundled.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.macosx.bundled.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.macosx.bundled.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.macosx.bundled.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.macosx.bundled.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.macosx.bundled.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.macosx.bundled.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.macosx.bundled.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.macosx.bundled.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.macosx.bundled.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.macosx.bundled.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Using the bundled PHP prior to macOS Monterey" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Using the bundled PHP prior to macOS Monterey - Manual" />
<meta name="twitter:description" content="Using the bundled PHP prior to macOS Monterey" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Using the bundled PHP prior to macOS Monterey - Manual" />
<meta itemprop="description" content="Using the bundled PHP prior to macOS Monterey" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Using the bundled PHP prior to macOS Monterey" />

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
        <a href="install.windows.php">
          Installation on Windows systems &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.macosx.compile.php">
          &laquo; Compiling PHP on macOS        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='install.macosx.php'>Installation on macOS</a></li>      </ul>
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
            <option value='en/install.macosx.bundled.php' selected="selected">English</option>
            <option value='de/install.macosx.bundled.php'>German</option>
            <option value='es/install.macosx.bundled.php'>Spanish</option>
            <option value='fr/install.macosx.bundled.php'>French</option>
            <option value='it/install.macosx.bundled.php'>Italian</option>
            <option value='ja/install.macosx.bundled.php'>Japanese</option>
            <option value='pt_BR/install.macosx.bundled.php'>Brazilian Portuguese</option>
            <option value='ru/install.macosx.bundled.php'>Russian</option>
            <option value='tr/install.macosx.bundled.php'>Turkish</option>
            <option value='uk/install.macosx.bundled.php'>Ukrainian</option>
            <option value='zh/install.macosx.bundled.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.macosx.bundled" class="sect1">
 <h2 class="title">Using the bundled PHP prior to macOS Monterey</h2>
 <p class="simpara">
  PHP is bundled with macOS since macOS X (10.0.0) prior to macOS Monterey (12.0.0).
  Enabling PHP with the default web server requires uncommenting a few lines in the 
  Apache configuration file <var class="filename">httpd.conf</var> whereas the
  <abbr title="Common Gateway Interface">CGI</abbr> and/or <abbr title="Command Line Interpreter/Interface">CLI</abbr> are enabled by
  default (easily accessible via the Terminal program).
 </p>
 <p class="simpara">
  Enabling PHP using the instructions below is meant for quickly setting up
  a local development environment.  It&#039;s <em>highly recommended</em>
  to always upgrade PHP to the newest version. Like most live software,
  newer versions are created to fix bugs and add features and PHP being is
  no different.  See the appropriate macOS installation documentation for
  further details. The following instructions are geared towards a beginner
  with details provided for getting a default setup to work. All users are
  encouraged to compile, or install a new packaged version.
 </p>
 <p class="simpara">
  The standard installation type is using mod_php, and enabling the bundled
  mod_php on macOS for the Apache web server (the default web server,
  that is accessible via System Preferences) involves the following steps:
 </p>
 <p class="para">
  <ol type="1">
   <li class="listitem">
    <span class="simpara">
     Locate and open the Apache configuration file. By default, the location
     is as follows: <var class="filename">/private/etc/apache2/httpd.conf</var>
    </span>
    <span class="simpara">
     Using <code class="literal">Finder</code> or <code class="literal">Spotlight</code> to find
     this file may prove difficult as by default it&#039;s private and owned by
     the <code class="literal">root</code> user.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      One way to open this is by using a Unix based text editor in the
      Terminal, for example <code class="literal">nano</code>, and because the
      file is owned by <code class="literal">root</code> we&#039;ll use the <code class="literal">sudo</code> command
      to open it (as <code class="literal">root</code>) so for example type the following into the
      <code class="literal">Terminal</code> Application (after, it will prompt for
      a password):
      <code class="literal">sudo nano /private/etc/apache2/httpd.conf</code>
     </span>
     <span class="simpara">
      Noteworthy nano commands: <code class="literal">^w</code> (search),
      <code class="literal">^o</code> (save), and <code class="literal">^x</code> (exit) where
      <code class="literal">^</code> represents the Ctrl key.
     </span>
    </p></blockquote>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Versions of Mac OS X prior to 10.5 were bundled with older versions of
      PHP and Apache.  As such, the Apache configuration file on legacy
      machines may be <var class="filename">/etc/httpd/httpd.conf</var>.
     </span>
    </p></blockquote>
   </li>
   <li class="listitem">
    <p class="para">
     With a text editor, uncomment the lines (by removing the #) that look
     similar to the following (these two lines are often not together,
     locate them both in the file):
     <div class="example-contents screen">
<div class="cdata"><pre>
# LoadModule php5_module libexec/httpd/libphp5.so

# AddModule mod_php5.c
</pre></div>
     </div>
      Notice the location/path. When building PHP in the future, the above
      files should be replaced or commented out.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Be sure the desired extensions will parse as PHP (examples:
     <var class="filename">.php</var>, <var class="filename">.html</var>
     and <var class="filename">.inc</var>).
    </p>
    <p class="para">
     Due to the following statement already existing in
     <var class="filename">httpd.conf</var> (as of Mac Panther), once PHP is
     enabled the <var class="filename">.php</var> files will automatically
     parse as PHP.
     <div class="example-contents screen">
<div class="cdata"><pre>
&lt;IfModule mod_php5.c&gt;
    # If php is turned on, we respect .php and .phps files.
    AddType application/x-httpd-php .php
    AddType application/x-httpd-php-source .phps

    # Since most users will want index.php to work we
    # also automatically enable index.php
    &lt;IfModule mod_dir.c&gt;
        DirectoryIndex index.html index.php
    &lt;/IfModule&gt;
&lt;/IfModule&gt;
</pre></div>
     </div>
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Before Mac OS X 10.5 (Leopard), PHP 4 was bundled instead of PHP 5 in
      which case the above instructions will differ slightly by changing
      5&#039;s to 4&#039;s.
     </p>
    </p></blockquote>
   </li>
   <li class="listitem">
    <span class="simpara">
     Be sure the DirectoryIndex loads the desired default index file
    </span>
    <span class="simpara">
     This is also set in <var class="filename">httpd.conf</var>. Typically
     <var class="filename">index.php</var> and <var class="filename">index.html</var> are
     used. By default <var class="filename">index.php</var> is enabled because
     it&#039;s also in the PHP check shown above. Adjust accordingly.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Set the <var class="filename">php.ini</var> location or use the default
    </span>
    <span class="simpara">
     A typical default location on macOS is
     <var class="filename">/usr/local/php/php.ini</var> and a call to
     <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> will reveal this information.
     If a <var class="filename">php.ini</var> is not used, PHP will use all default values.
     See also the related FAQ on
     <a href="faq.installation.php#faq.installation.phpini" class="link">finding php.ini</a>.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Locate or set the <code class="literal">DocumentRoot</code>
    </span>
    <span class="simpara">
     This is the root directory for all the web files. Files in this directory
     are served from the web server so the PHP files will parse as PHP before
     outputting them to the browser. A typical default path is
     <var class="filename">/Library/WebServer/Documents</var> but this can be set to
     anything in <var class="filename">httpd.conf</var>.  Alternatively, the default
     <var class="filename">DocumentRoot</var> for individual users is
     <var class="filename">/Users/yourusername/Sites</var>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Create a <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> file
    </span>
    <p class="para">
     The <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function will display information about PHP.
     Consider creating a file in the DocumentRoot with the following PHP code:
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php phpinfo</span><span style="color: #007700">(); </span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </p> 
   </li>
   <li class="listitem">
    <span class="simpara">
     Restart Apache, and load the PHP file created above
    </span>
    <p class="para">
     To restart, either execute <code class="literal">sudo apachectl graceful</code> in
     the shell or stop/start the &quot;Personal Web Server&quot; option in the
     macOS System Preferences. By default, loading local files in the browser
     will have an <abbr title="Uniform Resource Locator">URL</abbr> like so:
     <var class="filename">http://localhost/info.php</var> Or using the DocumentRoot
     in the user directory is another option and would end up looking like:
     <var class="filename">http://localhost/~yourusername/info.php</var>
    </p>
   </li>
  </ol>
 </p>
 <p class="simpara">
  The <abbr title="Command Line Interpreter/Interface">CLI</abbr> (or <abbr title="Common Gateway Interface">CGI</abbr> in older versions) is
  appropriately named <var class="filename">php</var> and likely exists as
  <var class="filename">/usr/bin/php</var>. Open up the terminal, read the
  <a href="features.commandline.php" class="link">command line section</a> of the PHP
  manual, and execute <code class="literal">php -v</code> to check the PHP version of
  this PHP binary. A call to <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> will also reveal
  this information.
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/macos/bundled.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.macosx.bundled%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.macosx.bundled&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.macosx.bundled.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87028">  <div class="votes">
    <div id="Vu87028">
    <a href="/manual/vote-note.php?id=87028&amp;page=install.macosx.bundled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87028">
    <a href="/manual/vote-note.php?id=87028&amp;page=install.macosx.bundled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87028" title="59% like this...">
    42
    </div>
  </div>
  <a href="#87028" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#87028"> &para;</a><div class="date" title="2008-11-15 02:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87028">
<div class="phpcode"><code><span class="html">You only have to uncomment:<br />#LoadModule php5_module        libexec/apache2/libphp5.so<br /><br />This is gone:<br /># AddModule mod_php5.c<br /><br />The statement in 3 was changed to:<br />&lt;IfModule mime_module&gt;<br />    #<br />    # TypesConfig points to the file containing the list of mappings from<br />    # filename extension to MIME-type.<br />    #<br />    TypesConfig /private/etc/apache2/mime.types<br /><br />    #<br />    # AddType allows you to add to or override the MIME configuration<br />    # file specified in TypesConfig for specific file types.<br />    #<br />    #AddType application/x-gzip .tgz<br />    #<br />    # AddEncoding allows you to have certain browsers uncompress<br />    # information on the fly. Note: Not all browsers support this.<br />    #<br />    #AddEncoding x-compress .Z<br />    #AddEncoding x-gzip .gz .tgz<br />    #<br />    # If the AddEncoding directives above are commented-out, then you<br />    # probably should define those extensions to indicate media types:<br />    #<br />    AddType application/x-compress .Z<br />    AddType application/x-gzip .gz .tgz<br /><br />    #<br />    # AddHandler allows you to map certain file extensions to "handlers":<br />    # actions unrelated to filetype. These can be either built into the server<br />    # or added with the Action directive (see below)<br />    #<br />    # To use CGI scripts outside of ScriptAliased directories:<br />    # (You will also need to add "ExecCGI" to the "Options" directive.)<br />    #<br />    #AddHandler cgi-script .cgi<br /><br />    # For type maps (negotiated resources):<br />    #AddHandler type-map var<br /><br />    #<br />    # Filters allow you to process content before it is sent to the client.<br />    #<br />    # To parse .shtml files for server-side includes (SSI):<br />    # (You will also need to add "Includes" to the "Options" directive.)<br />    #<br />    #AddType text/html .shtml<br />    #AddOutputFilter INCLUDES .shtml<br />&lt;/IfModule&gt;<br /><br />Extra MIME types can either be added to the file /private/etc/apache2/mime.types or by using an AddType directive as commented on above.</span></code></div>
  </div>
 </div>
  <div class="note" id="123922">  <div class="votes">
    <div id="Vu123922">
    <a href="/manual/vote-note.php?id=123922&amp;page=install.macosx.bundled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123922">
    <a href="/manual/vote-note.php?id=123922&amp;page=install.macosx.bundled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123922" title="53% like this...">
    2
    </div>
  </div>
  <a href="#123922" class="name">
  <strong class="user"><em>10086 at xiaoi dot me</em></strong></a><a class="genanchor" href="#123922"> &para;</a><div class="date" title="2019-06-10 09:54"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123922">
<div class="phpcode"><code><span class="html">setup apache + php environment on macOS 10.12.6<br /><br />step 1:  start httpd by apachectl<br /> &gt; sudo apachectl start<br /><br />step 2: find httpd.conf<br /> &gt; sudo apachectl -t -D DUMP_INCLUDES<br /><br />step 3: edit conf, eg: /opt/local/etc/apache2/httpd.conf<br /> &gt; sudo vim  /opt/local/etc/apache2/httpd.conf<br /><br />step 4: Load php module before &lt;IfModule unixd_module&gt;, eg:<br />```<br />LoadModule php5_module /usr/libexec/apache2/libphp5.so<br />&lt;IfModule unixd_module&gt;<br />```<br /><br />step 5: add mod_php5.c end of httpd.conf<br />```<br />&lt;IfModule mod_php5.c&gt;<br />    AddType application/x-httpd-php .php<br />    AddType application/x-httpd-php-source .phps<br />    &lt;IfModule mod_dir.c&gt;<br />        DirectoryIndex index.html index.php<br />    &lt;/IfModule&gt;<br />&lt;/IfModule&gt;<br />```<br /><br />step 6: save and quit<br />step 7: restart httpd<br /> &gt; sudo apachectl restart<br /><br />step 8: write demo.php , test configuration<br />```<br /><span class="default">&lt;?php<br />    phpinfo</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>```<br /><br />step 9: copy demo.php to "DocumentRoot", you can find by httpd.conf<br /><br />step 10: visit demo.php<br /><br />all done.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.macosx.bundled&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.macosx.bundled.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.macosx.php">Installation on macOS</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.macosx.packages.php" title="Installation on macOS using third-&#8203;party packages">Installation on macOS using third-&#8203;party packages</a>
                        </li>
                                                <li class="">
                            <a href="install.macosx.compile.php" title="Compiling PHP on macOS">Compiling PHP on macOS</a>
                        </li>
                                                <li class="current">
                            <a href="install.macosx.bundled.php" title="Using the bundled PHP prior to macOS Monterey">Using the bundled PHP prior to macOS Monterey</a>
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
