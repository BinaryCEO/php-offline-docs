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

 <link rel="canonical" href="https://www.php.net/manual/en/wincache.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/wincache.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/wincache.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/wincache.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/wincache.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/wincache.configuration.php">

 <link rel="alternate" href="https://www.php.net/manual/en/wincache.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/wincache.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/wincache.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/wincache.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/wincache.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/wincache.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/wincache.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/wincache.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/wincache.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/wincache.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/wincache.installation.php" hreflang="zh">

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
        <a href="wincache.configuration.php">
          Runtime Configuration &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="wincache.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.wincache.php'>WinCache</a></li>      <li><a href='wincache.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/wincache.installation.php' selected="selected">English</option>
            <option value='de/wincache.installation.php'>German</option>
            <option value='es/wincache.installation.php'>Spanish</option>
            <option value='fr/wincache.installation.php'>French</option>
            <option value='it/wincache.installation.php'>Italian</option>
            <option value='ja/wincache.installation.php'>Japanese</option>
            <option value='pt_BR/wincache.installation.php'>Brazilian Portuguese</option>
            <option value='ru/wincache.installation.php'>Russian</option>
            <option value='tr/wincache.installation.php'>Turkish</option>
            <option value='uk/wincache.installation.php'>Ukrainian</option>
            <option value='zh/wincache.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="wincache.installation" class="section">
  <h2 class="title">Installation</h2>
  <p class="para">
   This <a href="https://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a> extension is not bundled with PHP.
  </p>
  <p class="para">
   Information for installing this PECL extension may be
found in the manual chapter titled <a href="install.pecl.php" class="link">Installation
of PECL extensions</a>. Additional information such as new releases,
downloads, source files, maintainer information, and a CHANGELOG, can be
located here: 
   <a href="https://pecl.php.net/package/wincache" class="link external">&raquo;&nbsp;https://pecl.php.net/package/wincache</a>.
  </p>
  <p class="para">
   There are two packages for this extension: one package is for PHP versions 5.2.X,
   and the other package is for PHP 5.3.X. Select the package that is appropriate for
   the PHP version being used.
  </p>
  <p class="para">
   To install and enable the extension, follow these steps:
  </p>
  <div class="procedure">
   <ol type="1"><li>
    <p class="simpara">
     Unpack the package into some temporary location.
    </p>
   </li>
   <li>
    <p class="simpara">
     Copy the <var class="filename">php_wincache.dll</var> file into the PHP extensions folder.
     Typically this folder is called &quot;ext&quot; and it is located in the same folder with all
     PHP binary files. For example: <var class="filename">C:\Program Files\PHP\ext</var>.
    </p>
   </li>
   <li>
    <p class="simpara">
     Using a text editor, open the php.ini file, which is usually located in the
     same folder where all PHP binary files are. For example:
     <var class="filename">C:\Program Files\PHP\php.ini</var>.
    </p>
   </li>
   <li>
    <p class="simpara">
     Add the following line at the end of the php.ini file:
     <code class="literal">extension = php_wincache.dll</code>.
    </p>
   </li>
   <li>
    <p class="simpara">
     Save and close the <var class="filename">php.ini</var> file.
    </p>
   </li>
   <li>
    <p class="simpara">
     Recycle the IIS Application Pools for PHP to pick up the configuration changes.
     To check that the extension has been enabled, create a file called
     <var class="filename">phpinfo.php</var> with a PHP code that calls
     <a href="function.phpinfo.php" class="link">phpinfo</a> function.
    </p>
   </li>
   <li>
    <p class="simpara">
     Save the <var class="filename">phpinfo.php</var> file in the root folder of a
     IIS web site that uses PHP, then open a browser and make a request to
     http://localhost/phpinfo.php. Search within the returned web page
     for a section called <code class="literal">wincache</code>. If the extension
     is enabled, then the <a href="function.phpinfo.php" class="link">phpinfo</a>
     output will list the configuration settings provided by the WinCache.
    </p>
   </li>
  </ol></div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Do not forget to remove <var class="filename">phpinfo.php</var> file from the web
    site&#039;s root folder after verifying that extension has been enabled.
   </span>
  </p></blockquote>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/wincache/setup.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fwincache.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=wincache.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wincache.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104590">  <div class="votes">
    <div id="Vu104590">
    <a href="/manual/vote-note.php?id=104590&amp;page=wincache.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104590">
    <a href="/manual/vote-note.php?id=104590&amp;page=wincache.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104590" title="70% like this...">
    4
    </div>
  </div>
  <a href="#104590" class="name">
  <strong class="user"><em>nils dot luxton at gmail dot com</em></strong></a><a class="genanchor" href="#104590"> &para;</a><div class="date" title="2011-06-24 04:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104590">
<div class="phpcode"><code><span class="html">If you're after pre-compiled binaries for WinCache, you can find them here: <a href="http://www.iis.net/download/WinCacheForPhp" rel="nofollow" target="_blank">http://www.iis.net/download/WinCacheForPhp</a> on the right-hand side of the page (under the Web Platform Installer button)</span></code></div>
  </div>
 </div>
  <div class="note" id="120111">  <div class="votes">
    <div id="Vu120111">
    <a href="/manual/vote-note.php?id=120111&amp;page=wincache.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120111">
    <a href="/manual/vote-note.php?id=120111&amp;page=wincache.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120111" title="52% like this...">
    1
    </div>
  </div>
  <a href="#120111" class="name">
  <strong class="user"><em>bobby mcbobbins</em></strong></a><a class="genanchor" href="#120111"> &para;</a><div class="date" title="2016-11-02 11:53"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120111">
<div class="phpcode"><code><span class="html">If you're looking for the DLLs for WinCache 2.0.0 (for use with PHP7+), here's a quick outline of the steps I took:<br /><br />- Download the appropriate build from wincache's repository on sourceforge<br />- Run the .exe and extract the archive to a temporary directory<br />- Using 7zip, unpack the .msi within that temporary directory<br />- Add the .dll extension to the file named "php_wincache"</span></code></div>
  </div>
 </div>
  <div class="note" id="130491">  <div class="votes">
    <div id="Vu130491">
    <a href="/manual/vote-note.php?id=130491&amp;page=wincache.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130491">
    <a href="/manual/vote-note.php?id=130491&amp;page=wincache.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130491" title="no votes...">
    0
    </div>
  </div>
  <a href="#130491" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#130491"> &para;</a><div class="date" title="2025-09-23 12:03"><strong>6 days ago</strong></div>
  <div class="text" id="Hcom130491">
<div class="phpcode"><code><span class="html">latest version are not at microsoft but here<br /><a href="https://phpext.phptools.online/extension/WinCache-20" rel="nofollow" target="_blank">https://phpext.phptools.online/extension/WinCache-20</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120558">  <div class="votes">
    <div id="Vu120558">
    <a href="/manual/vote-note.php?id=120558&amp;page=wincache.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120558">
    <a href="/manual/vote-note.php?id=120558&amp;page=wincache.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120558" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120558" class="name">
  <strong class="user"><em>junk_1105 at hotmail dot com</em></strong></a><a class="genanchor" href="#120558"> &para;</a><div class="date" title="2017-01-31 01:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120558">
<div class="phpcode"><code><span class="html">The wincache version for 7.0 is compiled for php7.dll not the thread safe php7ts.dll.  You may need to compile the source for wincache or change to the non thread safe version.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=wincache.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wincache.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="wincache.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="wincache.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="wincache.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="wincache.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="wincache.stats.php" title="WinCache Statistics Script">WinCache Statistics Script</a>
                        </li>
                                                <li class="">
                            <a href="wincache.sessionhandler.php" title="WinCache Session Handler">WinCache Session Handler</a>
                        </li>
                                                <li class="">
                            <a href="wincache.reroutes.php" title="WinCache Functions Reroutes">WinCache Functions Reroutes</a>
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
