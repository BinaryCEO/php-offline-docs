<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installation on Windows systems - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.windows.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.windows.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.windows.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.macosx.bundled.php">
 <link rel="next" href="https://www.php.net/manual/en/install.windows.recommended.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.windows.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.windows.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.windows.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.windows.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.windows.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.windows.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.windows.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.windows.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.windows.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.windows.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.windows.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installation on Windows systems" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installation on Windows systems - Manual" />
<meta name="twitter:description" content="Installation on Windows systems" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installation on Windows systems - Manual" />
<meta itemprop="description" content="Installation on Windows systems" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installation on Windows systems" />

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
        <a href="install.windows.recommended.php">
          Recommended configuration on Windows systems &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.macosx.bundled.php">
          &laquo; Using the bundled PHP prior to macOS Monterey        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      </ul>
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
            <option value='en/install.windows.php' selected="selected">English</option>
            <option value='de/install.windows.php'>German</option>
            <option value='es/install.windows.php'>Spanish</option>
            <option value='fr/install.windows.php'>French</option>
            <option value='it/install.windows.php'>Italian</option>
            <option value='ja/install.windows.php'>Japanese</option>
            <option value='pt_BR/install.windows.php'>Brazilian Portuguese</option>
            <option value='ru/install.windows.php'>Russian</option>
            <option value='tr/install.windows.php'>Turkish</option>
            <option value='uk/install.windows.php'>Ukrainian</option>
            <option value='zh/install.windows.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.windows" class="chapter">
 <h1 class="title">Installation on Windows systems</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="install.windows.recommended.php">Recommended configuration on Windows systems</a></li><li><a href="install.windows.manual.php">Manual installation of pre-built binaries</a></li><li><a href="install.windows.apache2.php">Installation for Apache 2.x on Windows systems</a></li><li><a href="install.windows.iis.php">Installation with IIS for Windows</a></li><li><a href="install.windows.tools.php">Third-party tools for installing PHP</a></li><li><a href="install.windows.building.php">Building from source</a></li><li><a href="install.windows.commandline.php">Running PHP on the command line on Windows systems</a></li></ul>


 <p class="simpara">
  The official releases of PHP on Windows are recommended for production use,
  but PHP can also be <a href="install.windows.building.php" class="link">built from source</a>.
 </p>

 <p class="simpara">
  PHP can also be <a href="install.cloud.azure.php" class="link">installed on Azure App Services</a>
  (aka Microsoft Azure, Windows Azure, or (Windows) Azure Web Apps).
 </p>

 <p class="simpara">
  The <a href="faq.installation.php" class="link">Installation section of the
  frequently asked questions</a> covers common installation and
  configuration issues that may be encountered.
 </p>

 




 




 




 




 




 




 




</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/windows/index.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.windows%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.windows&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.windows.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="64754">  <div class="votes">
    <div id="Vu64754">
    <a href="/manual/vote-note.php?id=64754&amp;page=install.windows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64754">
    <a href="/manual/vote-note.php?id=64754&amp;page=install.windows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64754" title="60% like this...">
    517
    </div>
  </div>
  <a href="#64754" class="name">
  <strong class="user"><em>SmugWimp at smugwimp dot com</em></strong></a><a class="genanchor" href="#64754"> &para;</a><div class="date" title="2006-04-20 02:29"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64754">
<div class="phpcode"><code><span class="html">If you make changes to your PHP.ini file, consider the following.
<br />
<br />(I'm running IIS5 on W2K server. I don't know about 2K3)
<br />
<br />PHP will not "take" the changes until the webserver is restarted, and that doesn't mean through the MMC.  Usually folks just reboot. But you can also use the following commands, for a much faster "turnaround".  At a command line prompt, type:
<br />
<br />iisreset /stop
<br />
<br />and that will stop the webserver service.  Then type:
<br />
<br />net start w3svc
<br />
<br />and that will start the webserver service again.  MUCH faster than a reboot, and you can check your changes faster as a result with the old:
<br />
<br />&lt;?php&gt;
<br />phpinfo();
<br />?&gt;
<br />
<br />in your page somewhere.
<br />
<br />I wish I could remember where I read this tip; it isn't anything I came up with...</span></code></div>
  </div>
 </div>
  <div class="note" id="60737">  <div class="votes">
    <div id="Vu60737">
    <a href="/manual/vote-note.php?id=60737&amp;page=install.windows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60737">
    <a href="/manual/vote-note.php?id=60737&amp;page=install.windows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60737" title="59% like this...">
    110
    </div>
  </div>
  <a href="#60737" class="name">
  <strong class="user"><em>lukasz at szostak dot biz</em></strong></a><a class="genanchor" href="#60737"> &para;</a><div class="date" title="2006-01-15 07:50"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60737">
<div class="phpcode"><code><span class="html">You can have multiple versions of PHP running on the same Apache server. I have seen many different solutions pointing at achieving this, but most of them required installing additional instances of Apache, redirecting ports/hosts, etc., which was not satisfying for me.<br />Finally, I have come up with the simplest solution I've seen so far, limited to reconfiguring Apache's httpd.conf.<br /><br />My goal is to have PHP5 as the default scripting language for .php files in my DocumentRoot (which is in my case d:/htdocs), and PHP4 for specified DocumentRoot subdirectories.<br /><br />Here it is (Apache's httpd.conf contents):<br /><br />---------------------------<br /># replace with your PHP4 directory<br />ScriptAlias /php4/ "c:/usr/php4/"<br /># replace with your PHP5 directory<br />ScriptAlias /php5/ "c:/usr/php5/"<br /><br />AddType application/x-httpd-php .php<br />Action application/x-httpd-php "/php5/php-cgi.exe"<br /><br /># populate this for every directory with PHP4 code<br />&lt;Directory "d:/htdocs/some_subdir"&gt;<br />    Action application/x-httpd-php "/php4/php.exe"<br />    # directory where your PHP4 php.ini file is located at<br />    SetEnv PHPRC "c:/usr/php4"<br />&lt;/Directory&gt;<br /><br /># remember to put this section below the above<br />&lt;Directory "d:/htdocs"&gt;<br />    # directory where your PHP5 php.ini file is located at<br />    SetEnv PHPRC "c:/usr/php5"<br />&lt;/Directory&gt;<br />---------------------------<br /><br />This solution is not limited to having only two parallel versions of PHP. You can play with httpd.conf contents to have as many PHP versions configured as you want.<br />You can also use multiple php.ini configuration files for the same PHP version (but for different DocumentRoot subfolders), which might be useful in some cases.<br /><br />Remember to put your php.ini files in directories specified in lines "SetEnv PHPRC...", and make sure that there's no php.ini files in other directories (such as c:\windows in Windows).<br /><br />And finally, as you can see, I run PHP in CGI mode. This has its advantages and limitations. If you have to run PHP as Apache module, then... sorry - you have to use other solution (the best advice as always is: Google it!).<br /><br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="55049">  <div class="votes">
    <div id="Vu55049">
    <a href="/manual/vote-note.php?id=55049&amp;page=install.windows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55049">
    <a href="/manual/vote-note.php?id=55049&amp;page=install.windows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55049" title="51% like this...">
    7
    </div>
  </div>
  <a href="#55049" class="name">
  <strong class="user"><em>jp at iticonsulting dot nl</em></strong></a><a class="genanchor" href="#55049"> &para;</a><div class="date" title="2005-07-23 09:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55049">
<div class="phpcode"><code><span class="html">If you get 404 page not found on Windows/IIS5, have a look at C:\SYSTEM32\INETSRV\URLSCAN<br /><br />There is a .ini file there that prevents some files from being served by IIS, even if they exist, instead IIS will give a 404. The urlscan logfile (same place) should give you some insight into what parameter is preventing a page from loading, if any.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.windows&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.windows.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.php">Installation and Configuration</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.general.php" title="General Installation Considerations">General Installation Considerations</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.php" title="Installation on Unix systems">Installation on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.macosx.php" title="Installation on macOS">Installation on macOS</a>
                        </li>
                                                <li class="current">
                            <a href="install.windows.php" title="Installation on Windows systems">Installation on Windows systems</a>
                        </li>
                                                <li class="">
                            <a href="install.cloud.php" title="Installation on Cloud Computing platforms">Installation on Cloud Computing platforms</a>
                        </li>
                                                <li class="">
                            <a href="install.fpm.php" title="FastCGI Process Manager (FPM)">FastCGI Process Manager (FPM)</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.php" title="Installation of PECL extensions">Installation of PECL extensions</a>
                        </li>
                                                <li class="">
                            <a href="install.composer.intro.php" title="Introduction to Composer">Introduction to Composer</a>
                        </li>
                                                <li class="">
                            <a href="install.pie.intro.php" title="Introduction to PIE">Introduction to PIE</a>
                        </li>
                                                <li class="">
                            <a href="configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
