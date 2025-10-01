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

 <link rel="canonical" href="https://www.php.net/manual/en/pthreads.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pthreads.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pthreads.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pthreads.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/pthreads.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/pthreads.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pthreads.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pthreads.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pthreads.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pthreads.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pthreads.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pthreads.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pthreads.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pthreads.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pthreads.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pthreads.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pthreads.installation.php" hreflang="zh">

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
        <a href="pthreads.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pthreads.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.pthreads.php'>pthreads</a></li>      <li><a href='pthreads.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/pthreads.installation.php' selected="selected">English</option>
            <option value='de/pthreads.installation.php'>German</option>
            <option value='es/pthreads.installation.php'>Spanish</option>
            <option value='fr/pthreads.installation.php'>French</option>
            <option value='it/pthreads.installation.php'>Italian</option>
            <option value='ja/pthreads.installation.php'>Japanese</option>
            <option value='pt_BR/pthreads.installation.php'>Brazilian Portuguese</option>
            <option value='ru/pthreads.installation.php'>Russian</option>
            <option value='tr/pthreads.installation.php'>Turkish</option>
            <option value='uk/pthreads.installation.php'>Ukrainian</option>
            <option value='zh/pthreads.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pthreads.installation" class="section">
  <h2 class="title">Installation</h2>
  <p class="para">
   pthreads releases are hosted by PECL and the source code by
    <a href="https://github.com/krakjoe/pthreads" class="link external">&raquo;&nbsp;github</a>,
   the easiest route to installation is the normal PECL route:
   <a href="https://pecl.php.net/package/pthreads" class="link external">&raquo;&nbsp;https://pecl.php.net/package/pthreads</a>.
  </p>
  <p class="para">
 Windows users can download prebuilt release binaries from the <a href="https://pecl.php.net/package/pthreads" class="link external">&raquo;&nbsp;PECL</a> website.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
 Windows users need to take the additional step of adding pthreadVC2.dll (distributed with Windows releases) to their <var class="envar">PATH</var>.
   </p>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pthreads/setup.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpthreads.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pthreads.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pthreads.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115004">  <div class="votes">
    <div id="Vu115004">
    <a href="/manual/vote-note.php?id=115004&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115004">
    <a href="/manual/vote-note.php?id=115004&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115004" title="59% like this...">
    80
    </div>
  </div>
  <a href="#115004" class="name">
  <strong class="user"><em>zahid dot smz at gmail dot com</em></strong></a><a class="genanchor" href="#115004"> &para;</a><div class="date" title="2014-05-11 07:43"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115004">
<div class="phpcode"><code><span class="html">For Wampp (Windows)<br />-----------------------------------------------------------------------------------<br />1.  Find out what is your 'PHP Extension Build' version by using phpinfo(). You can use this - <a href="http://localhost/?phpinfo=1" rel="nofollow" target="_blank">http://localhost/?phpinfo=1</a><br /><br />2.  Download the pthreads that matches your php version (32 bit or 64 bit) and php extension build (currently used VC11). Use this link for download - <a href="http://windows.php.net/downloads/pecl/releases/pthreads/" rel="nofollow" target="_blank">http://windows.php.net/downloads/pecl/releases/pthreads/</a> <br /><br />3.  Extract the zip -<br />      Move php_pthreads.dll to the 'bin\php\ext\' directory.<br />      Move pthreadVC2.dll to the 'bin\php\' directory.<br />      Move pthreadVC2.dll to the 'bin\apache\bin' directory.<br />      Move pthreadVC2.dll to the 'C:\windows\system32' directory.<br /><br />4.  Open php\php.ini and add<br />      extension=php_pthreads.dll<br /><br />Now restart server and you are done. Thanks.</span></code></div>
  </div>
 </div>
  <div class="note" id="116368">  <div class="votes">
    <div id="Vu116368">
    <a href="/manual/vote-note.php?id=116368&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116368">
    <a href="/manual/vote-note.php?id=116368&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116368" title="66% like this...">
    53
    </div>
  </div>
  <a href="#116368" class="name">
  <strong class="user"><em>Michel Phillipe Luca</em></strong></a><a class="genanchor" href="#116368"> &para;</a><div class="date" title="2014-12-20 07:38"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116368">
<div class="phpcode"><code><span class="html">Here is how I got it working under Linux Ubuntu distro - WITHOUT USE PECL:<br /><br />We will download both, PHP and Pthread without PECL<br /><br />1 - Get PHP version<br />For this example we will use version: 5.4.36<br /><br /># wget <a href="http://www.php.net/distributions/php-5.4.36.tar.gz" rel="nofollow" target="_blank">http://www.php.net/distributions/php-5.4.36.tar.gz</a><br /><br />2- Get Pthreads version:<br />I'm using an old version but, you could take any one<br /><br /># wget <a href="http://pecl.php.net/get/pthreads-1.0.0.tgz" rel="nofollow" target="_blank">http://pecl.php.net/get/pthreads-1.0.0.tgz</a><br /><br />Extract both, php and pthreads versions<br /><br />#tar zxvf php-5.4.36.tar.gz<br />#tar zxvf pthreads-1.0.0.tgz <br /><br />3- Move Pthreads to php/ext folder. Inside version of PHP downloaded at item 1.<br /><br />4- Reconfigure sources<br /># ./buildconf --force<br /># ./configure --help | grep pthreads<br /><br />You have to see --enable-pthreads listed. If do not, clear the buidls with this commands:<br /><br /># rm -rf aclocal.m4<br /># rm -rf autom4te.cache/<br /># ./buildconf --force<br /><br />5 - Inside php folder run configure command to set what we need:<br /># ./configure --enable-debug --enable-maintainer-zts --enable-pthreads --prefix=/usr --with-config-file-path=/etc<br /><br />6 - Install PHP<br />We will run make clear just to be sure that no other crashed build will mess our new one.<br /><br /># make clear <br /># make<br /># make install<br /><br />7 - Copy configuration file of PHP and add local lib to include path<br /># cp php.ini-development /etc/php.ini<br /><br />Edit php.ini and set Include_path to be like this:<br /><br />Include_path = “/usr/local/lib/php”<br /><br />9 - Check Modules<br /># php -m (check pthread loaded)<br /><br />You have to see pthreads listed<br /><br />10 - If pthread is not listed, update php.ini<br /># echo "extension=pthreads.so" &gt;&gt; /etc/php.ini</span></code></div>
  </div>
 </div>
  <div class="note" id="112197">  <div class="votes">
    <div id="Vu112197">
    <a href="/manual/vote-note.php?id=112197&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112197">
    <a href="/manual/vote-note.php?id=112197&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112197" title="69% like this...">
    45
    </div>
  </div>
  <a href="#112197" class="name">
  <strong class="user"><em>Jimmy Christensen</em></strong></a><a class="genanchor" href="#112197"> &para;</a><div class="date" title="2013-05-16 08:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112197">
<div class="phpcode"><code><span class="html">On Windows the installation is as follows:<br /><br />Download the pthreads that matches your php version.<br />I found mine at: <a href="http://windows.php.net/downloads/pecl/releases/pthreads/" rel="nofollow" target="_blank">http://windows.php.net/downloads/pecl/releases/pthreads/</a><br />(I used version 0.44 wich is the newest at the time of writing this, and then downloaded the one for php 5.3 which is the version I am using).<br /><br />Extract the zip.<br />Move php_pthreads.dll to the php\ext\ directory.<br />Move pthreadVC2.dll to the php\ directory.<br /><br />Open php\php.ini and add<br />extension=php_pthreads.dll<br /><br />You are done.</span></code></div>
  </div>
 </div>
  <div class="note" id="114837">  <div class="votes">
    <div id="Vu114837">
    <a href="/manual/vote-note.php?id=114837&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114837">
    <a href="/manual/vote-note.php?id=114837&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114837" title="71% like this...">
    31
    </div>
  </div>
  <a href="#114837" class="name">
  <strong class="user"><em>Pedro Proenca</em></strong></a><a class="genanchor" href="#114837"> &para;</a><div class="date" title="2014-04-12 11:22"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114837">
<div class="phpcode"><code><span class="html">I haven't found any proper instructions on how to install pthreads in linux, so I'll leave the steps I followed:<br /><br /># Required libraries<br />sudo apt-get install gcc make libzzip-dev libreadline-dev libxml2-dev \<br />libssl-dev libmcrypt-dev libcurl4-openssl-dev lib32bz2-dev <br /><br /># Download PHP<br />cd /usr/local/src<br /><br />wget <a href="http://www.php.net/distributions/php-&lt;version&gt;.tar.gz" rel="nofollow" target="_blank">http://www.php.net/distributions/php-&lt;version&gt;.tar.gz</a><br />( e.g. wget <a href="http://www.php.net/distributions/php-5.5.8.tar.gz" rel="nofollow" target="_blank">http://www.php.net/distributions/php-5.5.8.tar.gz</a> )<br /><br /># Extract<br />tar zxvf php-&lt;version&gt;.tar.gz<br />(e.g. tar zxvf php-5.5.8.tar.gz )<br /><br /># Configure<br />cd /usr/local/src/php-&lt;version&gt;<br />( e.g. cd /usr/local/src/php-5.5.8 )<br /><br />./configure --prefix=/usr --with-config-file-path=/etc --enable-maintainer-zts<br /><br /># Compile<br />make &amp;&amp; make install<br />( make -j3 &amp;&amp; make -j3 install) -&gt; Faster building<br /><br /># Copy configuration<br />cp php.ini-development /etc/php.ini<br /><br /># Install pthreads<br />pecl install pthreads<br />echo "extension=pthreads.so" &gt;&gt; /etc/php.ini<br /><br /># Check installation<br />php -m | grep pthreads</span></code></div>
  </div>
 </div>
  <div class="note" id="125359">  <div class="votes">
    <div id="Vu125359">
    <a href="/manual/vote-note.php?id=125359&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125359">
    <a href="/manual/vote-note.php?id=125359&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125359" title="62% like this...">
    4
    </div>
  </div>
  <a href="#125359" class="name">
  <strong class="user"><em>bens at effortlessis dot com</em></strong></a><a class="genanchor" href="#125359"> &para;</a><div class="date" title="2020-09-12 05:23"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125359">
<div class="phpcode"><code><span class="html">Sadly, this extension seems to be in poor repair. After spending a few hours trying to get it to fly on Fedora 32 with PHP 7.4, I noticed that it's not really maintained since about 2016. <br /><br />Attempting to compile it with PHP 7.4 results in screens full of nasty compile errors.</span></code></div>
  </div>
 </div>
  <div class="note" id="112868">  <div class="votes">
    <div id="Vu112868">
    <a href="/manual/vote-note.php?id=112868&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112868">
    <a href="/manual/vote-note.php?id=112868&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112868" title="58% like this...">
    10
    </div>
  </div>
  <a href="#112868" class="name">
  <strong class="user"><em>matias dot zumbo at gmail dot com</em></strong></a><a class="genanchor" href="#112868"> &para;</a><div class="date" title="2013-07-30 11:54"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112868">
<div class="phpcode"><code><span class="html">HOW TO INSTALL IN LINUX SYSTEM'S:<br />------------------------------------<br /><br />1) Download PHP sources and Unpack PHP<br /><br />2) Download PEAR<br />     wget <a href="http://pear.php.net/go-pear.phar" rel="nofollow" target="_blank">http://pear.php.net/go-pear.phar</a><br />     php go-pear.phar<br /><br />3) Download pthreads<br />Get PECL extension (PECL is a repository for PHP Extensions)<br /><br /># pecl install pthread-0.4.4<br /><br />4) Unpack pthreads<br />copy pthread-0.4.4  to  php/ext<br />(for ./configure allow  add option --enable-pthreads)<br /><br /># mv build/php-src-master/ext/pthreads-master    build/php-src-master/ext/pthreads<br /><br />5)  Reconfigure sources<br /># ./buildconf --force<br /># ./configure --help | grep pthreads<br /><br />You should see the appropriate --enable-pthreads option listed as a result, if you do not, then<br /><br /># rm -rf aclocal.m4<br /># rm -rf autom4te.cache/<br /># ./buildconf --force<br /><br />6) Build PHP<br />Compile PHP source code<br />Add:<br /># ./configure --enable-debug --enable-maintainer-zts --enable-pthreads<br /><br />7) Installing PHP<br /># make<br /># sudo make install<br /><br />8) Update php.ini<br />Add in php.ini<br />extension=pthreads.so<br />Include_path = “/usr/local/lib/php”<br /><br />9) Check Modules<br />php -m (check pthread loaded)<br /><br />10) Test Thread Class<br /># php SimpleTest.php</span></code></div>
  </div>
 </div>
  <div class="note" id="114836">  <div class="votes">
    <div id="Vu114836">
    <a href="/manual/vote-note.php?id=114836&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114836">
    <a href="/manual/vote-note.php?id=114836&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114836" title="60% like this...">
    4
    </div>
  </div>
  <a href="#114836" class="name">
  <strong class="user"><em>pedro dot proenca at shapedfor dot me</em></strong></a><a class="genanchor" href="#114836"> &para;</a><div class="date" title="2014-04-12 11:21"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114836">
<div class="phpcode"><code><span class="html">I haven't found any proper instructions on how to install pthreads in linux, so I'll leave the steps I followed:<br /><br /># Required libraries<br />sudo apt-get install gcc make libzzip-dev libreadline-dev libxml2-dev \<br />libssl-dev libmcrypt-dev libcurl4-openssl-dev lib32bz2-dev <br /><br /># Download PHP<br />cd /usr/local/src<br /><br />wget <a href="http://www.php.net/distributions/php-&lt;version&gt;.tar.gz" rel="nofollow" target="_blank">http://www.php.net/distributions/php-&lt;version&gt;.tar.gz</a><br />( e.g. wget <a href="http://www.php.net/distributions/php-5.5.8.tar.gz" rel="nofollow" target="_blank">http://www.php.net/distributions/php-5.5.8.tar.gz</a> )<br /><br /># Extract<br />tar zxvf php-&lt;version&gt;.tar.gz<br />(e.g. tar zxvf php-5.5.8.tar.gz )<br /><br /># Configure<br />cd /usr/local/src/php-&lt;version&gt;<br />( e.g. cd /usr/local/src/php-5.5.8 )<br /><br />./configure --prefix=/usr --with-config-file-path=/etc --enable-maintainer-zts<br /><br /># Compile<br />make &amp;&amp; make install<br />( make -j3 &amp;&amp; make -j3 install) -&gt; Faster building<br /><br /># Copy configuration<br />cp php.ini-development /etc/php.ini<br /><br /># Install pthreads<br />pecl install pthreads<br />echo "extension=pthreads.so" &gt;&gt; /etc/php.ini<br /><br /># Check installation<br />php -m | grep pthreads</span></code></div>
  </div>
 </div>
  <div class="note" id="123781">  <div class="votes">
    <div id="Vu123781">
    <a href="/manual/vote-note.php?id=123781&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123781">
    <a href="/manual/vote-note.php?id=123781&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123781" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123781" class="name">
  <strong class="user"><em>horica78 at yahoo dot com</em></strong></a><a class="genanchor" href="#123781"> &para;</a><div class="date" title="2019-04-15 08:00"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123781">
<div class="phpcode"><code><span class="html">They can still be used in web server if used with exec('php script.php') and php-cli.ini .</span></code></div>
  </div>
 </div>
  <div class="note" id="123330">  <div class="votes">
    <div id="Vu123330">
    <a href="/manual/vote-note.php?id=123330&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123330">
    <a href="/manual/vote-note.php?id=123330&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123330" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123330" class="name">
  <strong class="user"><em>agnelvishal at gmail dot com</em></strong></a><a class="genanchor" href="#123330"> &para;</a><div class="date" title="2018-11-11 01:11"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123330">
<div class="phpcode"><code><span class="html">To compile PHP 7.2 with pthreads on Ubuntu 16.04 or Ubuntu 18.04 or Debian 9 Stretch, use this bash file at <a href="https://gist.github.com/agnelvishal/24f42c65af2f6cace1e9387617a0182a" rel="nofollow" target="_blank">https://gist.github.com/agnelvishal/24f42c65af2f6cace1e9387617a0182a</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120302">  <div class="votes">
    <div id="Vu120302">
    <a href="/manual/vote-note.php?id=120302&amp;page=pthreads.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120302">
    <a href="/manual/vote-note.php?id=120302&amp;page=pthreads.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120302" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120302" class="name">
  <strong class="user"><em>and dot webdev at gmail dot com</em></strong></a><a class="genanchor" href="#120302"> &para;</a><div class="date" title="2016-12-08 04:28"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120302">
<div class="phpcode"><code><span class="html">Also, possible by phpbrew<br /><br />1. phpbrew install php-5.5.30 -- --enable-maintainer-zts<br />2. phpbrew use php-5.5.30<br />3. phpbrew ext install pthreads 2.0.10</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pthreads.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pthreads.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pthreads.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="pthreads.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="pthreads.installation.php" title="Installation">Installation</a>
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
