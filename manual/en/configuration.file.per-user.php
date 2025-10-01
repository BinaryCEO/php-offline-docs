<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: .user.ini files - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/configuration.file.per-user.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/configuration.file.per-user.php">
 <link rel="alternate" href="https://www.php.net/manual/en/configuration.file.per-user.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/configuration.php">
 <link rel="prev" href="https://www.php.net/manual/en/configuration.file.php">
 <link rel="next" href="https://www.php.net/manual/en/configuration.changes.modes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/configuration.file.per-user.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/configuration.file.per-user.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/configuration.file.per-user.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/configuration.file.per-user.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/configuration.file.per-user.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/configuration.file.per-user.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/configuration.file.per-user.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/configuration.file.per-user.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/configuration.file.per-user.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/configuration.file.per-user.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/configuration.file.per-user.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content=".user.ini files" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: .user.ini files - Manual" />
<meta name="twitter:description" content=".user.ini files" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: .user.ini files - Manual" />
<meta itemprop="description" content=".user.ini files" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content=".user.ini files" />

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
        <a href="configuration.changes.modes.php">
          Where a configuration setting may be set &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="configuration.file.php">
          &laquo; The configuration file        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='configuration.php'>Runtime Configuration</a></li>      </ul>
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
            <option value='en/configuration.file.per-user.php' selected="selected">English</option>
            <option value='de/configuration.file.per-user.php'>German</option>
            <option value='es/configuration.file.per-user.php'>Spanish</option>
            <option value='fr/configuration.file.per-user.php'>French</option>
            <option value='it/configuration.file.per-user.php'>Italian</option>
            <option value='ja/configuration.file.per-user.php'>Japanese</option>
            <option value='pt_BR/configuration.file.per-user.php'>Brazilian Portuguese</option>
            <option value='ru/configuration.file.per-user.php'>Russian</option>
            <option value='tr/configuration.file.per-user.php'>Turkish</option>
            <option value='uk/configuration.file.per-user.php'>Ukrainian</option>
            <option value='zh/configuration.file.per-user.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="configuration.file.per-user" class="sect1">
  <h2 class="title">.user.ini files</h2>

  <p class="simpara">
   PHP includes support for configuration INI files on a
   per-directory basis. These files are processed <em>only</em> by
   the CGI/FastCGI SAPI. This functionality obsoletes the PECL htscanner
   extension. If you are running PHP as Apache module, use <var class="filename">.htaccess</var> files for the same
   effect.
  </p>

  <p class="simpara">
   In addition to the main <var class="filename">php.ini</var> file, PHP scans for INI files in each
   directory, starting with the directory of the requested PHP file, and
   working its way up to the current document root (as set in
   <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['DOCUMENT_ROOT']</a></var>). In case the PHP file is
   outside the document root, only its directory is scanned.
  </p>
  <p class="simpara">
   Only INI settings with the
   modes <strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong> and
   <strong><code><a href="info.constants.php#constant.ini-user">INI_USER</a></code></strong> will be recognized in .user.ini-style INI
   files.
  </p>

  <p class="simpara">
   Two new INI directives,
   <a href="ini.core.php#ini.user-ini.filename" class="link">user_ini.filename</a> and
   <a href="ini.core.php#ini.user-ini.cache-ttl" class="link">user_ini.cache_ttl</a>
   control the use of user INI files.
  </p>

  <p class="simpara">
   <a href="ini.core.php#ini.user-ini.filename" class="link">user_ini.filename</a> sets the name of the file PHP looks for
   in each directory; if set to an empty string, PHP doesn&#039;t scan at all. The
   default is <code class="literal">.user.ini</code>.
  </p>

  <p class="simpara">
   <a href="ini.core.php#ini.user-ini.cache-ttl" class="link">user_ini.cache_ttl</a> controls how often user INI files are
   re-read. The default is 300 seconds (5 minutes).
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fconfiguration.file.per-user%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=configuration.file.per-user&amp;repo=en&amp;redirect=https://www.php.net/manual/en/configuration.file.per-user.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111834">  <div class="votes">
    <div id="Vu111834">
    <a href="/manual/vote-note.php?id=111834&amp;page=configuration.file.per-user&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111834">
    <a href="/manual/vote-note.php?id=111834&amp;page=configuration.file.per-user&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111834" title="57% like this...">
    35
    </div>
  </div>
  <a href="#111834" class="name">
  <strong class="user"><em>philsward at gmail dot com</em></strong></a><a class="genanchor" href="#111834"> &para;</a><div class="date" title="2013-04-03 06:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111834">
<div class="phpcode"><code><span class="html">If you have no idea what "PHP_INI_PERDIR" or "PHP_INI_USER" are or how they relate to setting a .user.ini file, take a look at the ini.list page: <a href="http://www.php.net/manual/en/ini.list.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/ini.list.php</a><br /><br />Basically, anything in the "Changeable" column labeled as PHP_INI_SYSTEM can't be set in the .user.ini file (so quit trying).  It can ONLY be set at the main php.ini level.</span></code></div>
  </div>
 </div>
  <div class="note" id="115455">  <div class="votes">
    <div id="Vu115455">
    <a href="/manual/vote-note.php?id=115455&amp;page=configuration.file.per-user&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115455">
    <a href="/manual/vote-note.php?id=115455&amp;page=configuration.file.per-user&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115455" title="58% like this...">
    30
    </div>
  </div>
  <a href="#115455" class="name">
  <strong class="user"><em>Anteaus at thenox dot com</em></strong></a><a class="genanchor" href="#115455"> &para;</a><div class="date" title="2014-07-25 08:48"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115455">
<div class="phpcode"><code><span class="html">"If you are using Apache, use .htaccess files for the same effect."<br /><br />To clarify, this applies only to Apache module mode. If you put php directives in .htaccess on an Apache CGI/FastCGI server, this will bomb the server out with a 500 error. Thus, you unfortunately cannot create a config which caters for both types of hosting, at least not in any straightforward way.</span></code></div>
  </div>
 </div>
  <div class="note" id="124175">  <div class="votes">
    <div id="Vu124175">
    <a href="/manual/vote-note.php?id=124175&amp;page=configuration.file.per-user&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124175">
    <a href="/manual/vote-note.php?id=124175&amp;page=configuration.file.per-user&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124175" title="65% like this...">
    22
    </div>
  </div>
  <a href="#124175" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124175"> &para;</a><div class="date" title="2019-09-05 03:05"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124175">
<div class="phpcode"><code><span class="html">Since the .user.ini is read from public directories, it's contents will be served to anyone requesting it and potientially show them sensitive configuration settings. <br /><br />Add these lines to your .htaccess to block requests to it : <br />&lt;Files ".user.ini"&gt;  <br />    Require all denied<br />&lt;/Files&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="127433">  <div class="votes">
    <div id="Vu127433">
    <a href="/manual/vote-note.php?id=127433&amp;page=configuration.file.per-user&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127433">
    <a href="/manual/vote-note.php?id=127433&amp;page=configuration.file.per-user&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127433" title="65% like this...">
    14
    </div>
  </div>
  <a href="#127433" class="name">
  <strong class="user"><em>mark at manngo dot net</em></strong></a><a class="genanchor" href="#127433"> &para;</a><div class="date" title="2022-08-07 12:38"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127433">
<div class="phpcode"><code><span class="html">Trap for young players, not that I’m such a young player myself.<br /><br />The default setting for user_ini.cache_ttl is 300 seconds, which means that it refreshes every 5 minutes. If you are tweaking the settings in .user.ini, it could take up to 5 minutes before you see the results of your experimentation.<br /><br />If you don’t have access to php.ini where you can change this setting, you will have to learn to be very patient.</span></code></div>
  </div>
 </div>
  <div class="note" id="125095">  <div class="votes">
    <div id="Vu125095">
    <a href="/manual/vote-note.php?id=125095&amp;page=configuration.file.per-user&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125095">
    <a href="/manual/vote-note.php?id=125095&amp;page=configuration.file.per-user&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125095" title="60% like this...">
    10
    </div>
  </div>
  <a href="#125095" class="name">
  <strong class="user"><em>signups at altillc dot com</em></strong></a><a class="genanchor" href="#125095"> &para;</a><div class="date" title="2020-06-07 05:01"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125095">
<div class="phpcode"><code><span class="html">For those looking for an example... .user.ini should be formatted as a simple list of [KEY]=[VALUE]\n sets.  For example, a one-line .user.ini file that serves solely to change the max allowable upload file size to 5Mb is:<br /><br />upload_max_filesize="5M"</span></code></div>
  </div>
 </div>
  <div class="note" id="101705">  <div class="votes">
    <div id="Vu101705">
    <a href="/manual/vote-note.php?id=101705&amp;page=configuration.file.per-user&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101705">
    <a href="/manual/vote-note.php?id=101705&amp;page=configuration.file.per-user&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101705" title="51% like this...">
    5
    </div>
  </div>
  <a href="#101705" class="name">
  <strong class="user"><em>interfaSys</em></strong></a><a class="genanchor" href="#101705"> &para;</a><div class="date" title="2011-01-05 10:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101705">
<div class="phpcode"><code><span class="html">This article should be made clearer.<br />".htaccess-style INI files" meant to me that the ini settings had to follow the syntax used in .htaccess, but this is not the case!<br /><br />You have to use<br />register_globals=on<br />and not<br />php_flag register_globals on<br /><br />Also, the changes can take a while to propagate to all processes if you have a long process time out.<br />Restarting php-fpm can give you an answer quicker :)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=configuration.file.per-user&amp;repo=en&amp;redirect=https://www.php.net/manual/en/configuration.file.per-user.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="configuration.php">Runtime Configuration</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="configuration.file.php" title="The configuration file">The configuration file</a>
                        </li>
                                                <li class="current">
                            <a href="configuration.file.per-user.php" title=".user.ini files">.user.ini files</a>
                        </li>
                                                <li class="">
                            <a href="configuration.changes.modes.php" title="Where a configuration setting may be set">Where a configuration setting may be set</a>
                        </li>
                                                <li class="">
                            <a href="configuration.changes.php" title="How to change configuration settings">How to change configuration settings</a>
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
