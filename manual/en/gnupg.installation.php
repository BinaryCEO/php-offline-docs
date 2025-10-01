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

 <link rel="canonical" href="https://www.php.net/manual/en/gnupg.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/gnupg.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/gnupg.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/gnupg.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/gnupg.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/gnupg.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/gnupg.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/gnupg.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/gnupg.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/gnupg.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/gnupg.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/gnupg.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/gnupg.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/gnupg.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/gnupg.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/gnupg.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/gnupg.installation.php" hreflang="zh">

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
        <a href="gnupg.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gnupg.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.gnupg.php'>GnuPG</a></li>      <li><a href='gnupg.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/gnupg.installation.php' selected="selected">English</option>
            <option value='de/gnupg.installation.php'>German</option>
            <option value='es/gnupg.installation.php'>Spanish</option>
            <option value='fr/gnupg.installation.php'>French</option>
            <option value='it/gnupg.installation.php'>Italian</option>
            <option value='ja/gnupg.installation.php'>Japanese</option>
            <option value='pt_BR/gnupg.installation.php'>Brazilian Portuguese</option>
            <option value='ru/gnupg.installation.php'>Russian</option>
            <option value='tr/gnupg.installation.php'>Turkish</option>
            <option value='uk/gnupg.installation.php'>Ukrainian</option>
            <option value='zh/gnupg.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="gnupg.installation" class="section">
 <h2 class="title">Installation</h2>
 <p class="para">
  Information for installing this PECL extension may be
found in the manual chapter titled <a href="install.pecl.php" class="link">Installation
of PECL extensions</a>. Additional information such as new releases,
downloads, source files, maintainer information, and a CHANGELOG, can be
located here: 
  <a href="https://pecl.php.net/package/gnupg" class="link external">&raquo;&nbsp;https://pecl.php.net/package/gnupg</a>.
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gnupg/configure.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgnupg.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=gnupg.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gnupg.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126629">  <div class="votes">
    <div id="Vu126629">
    <a href="/manual/vote-note.php?id=126629&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126629">
    <a href="/manual/vote-note.php?id=126629&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126629" title="100% like this...">
    3
    </div>
  </div>
  <a href="#126629" class="name">
  <strong class="user"><em>Mr T</em></strong></a><a class="genanchor" href="#126629"> &para;</a><div class="date" title="2021-11-21 01:42"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126629">
<div class="phpcode"><code><span class="html">On Ubuntu 20, this is provided via `php-gnupg` (or with a specific version `php8.1-gnupg`)<br /><br />To install:<br /><br />`apt install php-gnupg`</span></code></div>
  </div>
 </div>
  <div class="note" id="128439">  <div class="votes">
    <div id="Vu128439">
    <a href="/manual/vote-note.php?id=128439&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128439">
    <a href="/manual/vote-note.php?id=128439&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128439" title="75% like this...">
    2
    </div>
  </div>
  <a href="#128439" class="name">
  <strong class="user"><em>5paceman</em></strong></a><a class="genanchor" href="#128439"> &para;</a><div class="date" title="2023-04-30 12:16"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128439">
<div class="phpcode"><code><span class="html">To install on laravel sail:<br /><span class="default">&lt;?php<br />sail publish<br />?&gt;<br /></span>Add to your Dockerfile:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">&amp;&amp; </span><span class="default">apt</span><span class="keyword">-</span><span class="default">get update </span><span class="keyword">&amp;&amp; </span><span class="default">apt</span><span class="keyword">-</span><span class="default">get upgrade </span><span class="keyword">-</span><span class="default">y </span><span class="keyword">\<br />    &amp;&amp; </span><span class="default">apt</span><span class="keyword">-</span><span class="default">get install </span><span class="keyword">-</span><span class="default">y gcc</span><span class="keyword">-</span><span class="default">multilib libc</span><span class="keyword">-</span><span class="default">dev bzip2 libgpg</span><span class="keyword">-</span><span class="default">error</span><span class="keyword">-</span><span class="default">dev libassuan</span><span class="keyword">-</span><span class="default">dev </span><span class="keyword">\<br />    &amp;&amp; </span><span class="default">apt</span><span class="keyword">-</span><span class="default">get install </span><span class="keyword">-</span><span class="default">y build</span><span class="keyword">-</span><span class="default">essential </span><span class="keyword">\<br />    &amp;&amp; </span><span class="default">curl </span><span class="keyword">-</span><span class="default">sSn </span><span class="keyword">-</span><span class="default">o gnupg</span><span class="keyword">.</span><span class="default">tar</span><span class="keyword">.</span><span class="default">bz2 $GNUPG_URL </span><span class="keyword">\<br />    &amp;&amp; </span><span class="default">mkdir gnupg </span><span class="keyword">\<br />    &amp;&amp; </span><span class="default">tar </span><span class="keyword">-</span><span class="default">xf gnupg</span><span class="keyword">.</span><span class="default">tar</span><span class="keyword">.</span><span class="default">bz2 </span><span class="keyword">--</span><span class="default">directory gnupg </span><span class="keyword">\<br />    &amp;&amp; (</span><span class="default">cd gnupg</span><span class="keyword">/</span><span class="default">gpgme</span><span class="keyword">-* &amp;&amp; ./</span><span class="default">configure</span><span class="keyword">) \<br />    &amp;&amp; (</span><span class="default">cd gnupg</span><span class="keyword">/</span><span class="default">gpgme</span><span class="keyword">-* &amp;&amp; </span><span class="default">make </span><span class="keyword">&amp;&amp; </span><span class="default">make install</span><span class="keyword">) \<br />    &amp;&amp; </span><span class="default">pecl install gnupg <br />?&gt;<br /></span>Add to your php.ini under [php]<br /><span class="default">&lt;?php<br />extension</span><span class="keyword">=</span><span class="default">gnupg</span><span class="keyword">.</span><span class="default">so<br />?&gt;<br /></span>Finally:<br /><span class="default">&lt;?php<br />sail build </span><span class="keyword">--</span><span class="default">no</span><span class="keyword">-</span><span class="default">cache<br />?&gt;<br /></span>Check you can see gnupg under modules when you run:<br /><span class="default">&lt;?php<br />sail php </span><span class="keyword">-</span><span class="default">m<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110616">  <div class="votes">
    <div id="Vu110616">
    <a href="/manual/vote-note.php?id=110616&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110616">
    <a href="/manual/vote-note.php?id=110616&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110616" title="57% like this...">
    5
    </div>
  </div>
  <a href="#110616" class="name">
  <strong class="user"><em>Dominik Sommer</em></strong></a><a class="genanchor" href="#110616"> &para;</a><div class="date" title="2012-11-13 05:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110616">
<div class="phpcode"><code><span class="html">For Ubuntu 12.04, these are the steps:<br />1. Install packages: gnupg libgpg-error-dev libassuan-dev<br />2. Download GPGME library from ​<a href="http://www.gnupg.org/download/index.en.html#gpgme" rel="nofollow" target="_blank">http://www.gnupg.org/download/index.en.html#gpgme</a><br />3. Extract, then run<br />   configure<br />   make &amp;&amp; sudo make install<br />4. Install PECL extension<br />   sudo pecl install gnupg<br />5. Add to php.ini<br />   extension=gnupg.so</span></code></div>
  </div>
 </div>
  <div class="note" id="114808">  <div class="votes">
    <div id="Vu114808">
    <a href="/manual/vote-note.php?id=114808&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114808">
    <a href="/manual/vote-note.php?id=114808&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114808" title="54% like this...">
    5
    </div>
  </div>
  <a href="#114808" class="name">
  <strong class="user"><em>Mahbub Kabir</em></strong></a><a class="genanchor" href="#114808"> &para;</a><div class="date" title="2014-04-08 11:32"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114808">
<div class="phpcode"><code><span class="html">I tried followings on Debian Squeeze and it worked fine<br /><br />apt-get install libgpgme11-dev<br />pecl install gnupg<br /><br />create a new file under conf.d folder and add following lines <br /><br />; configuration for gnupg module<br />extension=gnupg.so<br /><br />Reload apache configuration<br />/etc/init.d/apache2 reload <br /><br />Check PHP Info and you should see gnupg<br /><br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="113586">  <div class="votes">
    <div id="Vu113586">
    <a href="/manual/vote-note.php?id=113586&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113586">
    <a href="/manual/vote-note.php?id=113586&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113586" title="66% like this...">
    1
    </div>
  </div>
  <a href="#113586" class="name">
  <strong class="user"><em>cam dot metzke at gmail dot com</em></strong></a><a class="genanchor" href="#113586"> &para;</a><div class="date" title="2013-11-01 08:14"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113586">
<div class="phpcode"><code><span class="html">For the folks in Debian Wheezy who are having a bit of trouble<br />heres a link to to a .deb file ( I use it ) for amd64 users<br /><br /><a href="http://users.on.net/~cam.metzke/Debian%20Packages/Wheezy/gnupg/PECL-gnupg/" rel="nofollow" target="_blank">http://users.on.net/~cam.metzke/Debian%20Packages/Wheezy/gnupg/PECL-gnupg/</a><br /><br />Anyway I built it for the community, hope it helps :)</span></code></div>
  </div>
 </div>
  <div class="note" id="88706">  <div class="votes">
    <div id="Vu88706">
    <a href="/manual/vote-note.php?id=88706&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88706">
    <a href="/manual/vote-note.php?id=88706&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88706" title="66% like this...">
    1
    </div>
  </div>
  <a href="#88706" class="name">
  <strong class="user"><em>mk at wintermute dot at</em></strong></a><a class="genanchor" href="#88706"> &para;</a><div class="date" title="2009-02-04 03:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88706">
<div class="phpcode"><code><span class="html">Quick installation guide on Fedora 10:<br /><br />Needed:<br />- c++ compiler<br />- php-pear<br />- gnupg<br />- libgpg-error<br />- gpgme<br />- gpgme-devel<br />- php-devel<br /><br />Install with:<br />$ pecl install gnupg<br /><br />Add an entry to /etc/php.ini:<br />extension=gnupg.so<br /><br />Restart Apache &gt; you're done.</span></code></div>
  </div>
 </div>
  <div class="note" id="107598">  <div class="votes">
    <div id="Vu107598">
    <a href="/manual/vote-note.php?id=107598&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107598">
    <a href="/manual/vote-note.php?id=107598&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107598" title="57% like this...">
    1
    </div>
  </div>
  <a href="#107598" class="name">
  <strong class="user"><em>frozenfire at php dot net</em></strong></a><a class="genanchor" href="#107598"> &para;</a><div class="date" title="2012-02-21 02:36"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107598">
<div class="phpcode"><code><span class="html">Here are instructions for how to resolve the issue where you encounter this error:<br /><br />/usr/include/gpgme.h:80:2: error: #error GPGME was compiled with _FILE_OFFSET_BITS = 64, please see the section "Largefile support (LFS)" in the GPGME manual.<br /><br />This is a result of the gnupg extension currently lacking largefile support. The solution is fairly simple.<br /><br />pecl download gnupg<br />tar -zxf gnupg-1.3.2.tgz<br />cd gnupg-1.3.2<br /><br />Open the file config.m4 in an editor, and add "AC_SYS_LARGEFILE" to a new line at the very end of the file, then save.<br /><br />phpize<br />./configure<br />make<br />make install<br /><br />Now simply add extension=gnupg.so to your php.ini, and the extension should work.</span></code></div>
  </div>
 </div>
  <div class="note" id="112026">  <div class="votes">
    <div id="Vu112026">
    <a href="/manual/vote-note.php?id=112026&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112026">
    <a href="/manual/vote-note.php?id=112026&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112026" title="50% like this...">
    0
    </div>
  </div>
  <a href="#112026" class="name">
  <strong class="user"><em>Jane Doe</em></strong></a><a class="genanchor" href="#112026"> &para;</a><div class="date" title="2013-04-23 12:03"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112026">
<div class="phpcode"><code><span class="html">Hi - <br /><br />By default on Ubuntu 12.04 LTS gnupg needs to write to .gnupg in the home directory of the user running PHP (so for a web site this is www-data). You might need to make a ~/.gnupg for www-data and chown/chmod it correctly or everything will fail.</span></code></div>
  </div>
 </div>
  <div class="note" id="100324">  <div class="votes">
    <div id="Vu100324">
    <a href="/manual/vote-note.php?id=100324&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100324">
    <a href="/manual/vote-note.php?id=100324&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100324" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#100324" class="name">
  <strong class="user"><em>Heath</em></strong></a><a class="genanchor" href="#100324"> &para;</a><div class="date" title="2010-10-07 07:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100324">
<div class="phpcode"><code><span class="html">On Debian 5.05 (Lenny) I needed to install libgpgme11-dev</span></code></div>
  </div>
 </div>
  <div class="note" id="88661">  <div class="votes">
    <div id="Vu88661">
    <a href="/manual/vote-note.php?id=88661&amp;page=gnupg.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88661">
    <a href="/manual/vote-note.php?id=88661&amp;page=gnupg.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88661" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#88661" class="name">
  <strong class="user"><em>sma dot azar at gmail dot com</em></strong></a><a class="genanchor" href="#88661"> &para;</a><div class="date" title="2009-02-02 10:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88661">
<div class="phpcode"><code><span class="html">After spending so much time I could only install it on Linux and not Windows. There is very little instructions on the net about installation of this module, so I am going to write a small instructions that should help a straightforward installation on Linux without so much trouble.<br /><br />Step 1: you will need a C++ compiler on your machine. For being sure try this command in the terminal:<br /><span class="default">&lt;?php<br />sudo apt</span><span class="keyword">-</span><span class="default">get install g</span><span class="keyword">++<br /></span><span class="default">?&gt;<br /></span>Obviously you need GnuPG itself, so try:<br /><span class="default">&lt;?php<br />sudo apt</span><span class="keyword">-</span><span class="default">get install gnupg<br />?&gt;<br /></span>Step 2: you will need "Libgpg-Error" downloaded and installed on your machine. <br />2-1: Download the code from <a href="http://www.gnupg.org/download/#libgpg-error" rel="nofollow" target="_blank">http://www.gnupg.org/download/#libgpg-error</a><br />2-2: Extract it to a directory. In the terminal, change the directory to the Libgpg-error directory.<br />2-3: Configure the package for building and installation with below command:<br /><span class="default">&lt;?php<br /></span><span class="keyword">./</span><span class="default">configure<br />?&gt;<br /></span>2-4: In the same directory make it with below command:<br /><span class="default">&lt;?php<br />sudo make<br />?&gt;<br /></span>2-5: In the same directory install it with below command:<br /><span class="default">&lt;?php<br />sudo make install<br />?&gt;<br /></span><br />Step 3: you will need "GnuPG Made Easy" (GPGME) downloaded and installed on your machine. Some sources will tell you that you can "apt-get install" it, but actually you cannot. So do it like the latter:<br />3-1: Download the source code from <a href="http://www.gnupg.org/download/#gpgme" rel="nofollow" target="_blank">http://www.gnupg.org/download/#gpgme</a><br />3-2: Extract it to a directory. In the terminal, change the directory to the GPGME directory.<br />3-3: Configure the package for building and installation with below command:<br /><span class="default">&lt;?php<br /></span><span class="keyword">./</span><span class="default">configure<br />?&gt;<br /></span>3-4: In the same directory make it with below command:<br /><span class="default">&lt;?php<br />sudo make<br />?&gt;<br /></span>3-5: In the same directory install it with below command:<br /><span class="default">&lt;?php<br />sudo make install<br />?&gt;<br /></span><br />Step 4: Given that you have a LAMP server already and have php installed, you will need "pear" and "php source codes". To add them use below commands:<br /><span class="default">&lt;?php<br />sudo apt</span><span class="keyword">-</span><span class="default">get install php5</span><span class="keyword">-</span><span class="default">dev<br />sudo apt</span><span class="keyword">-</span><span class="default">get install php</span><span class="keyword">-</span><span class="default">pear<br />?&gt;<br /></span><br />Step 5: Now you can install GNU Privacy Guard for php using PECL command:<br /><span class="default">&lt;?php<br /> sudo pecl install gnupg<br />?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=gnupg.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gnupg.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="gnupg.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="gnupg.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="gnupg.installation.php" title="Installation">Installation</a>
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
