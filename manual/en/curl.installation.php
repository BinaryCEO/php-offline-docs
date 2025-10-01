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

 <link rel="canonical" href="https://www.php.net/manual/en/curl.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/curl.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/curl.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/curl.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/curl.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/curl.configuration.php">

 <link rel="alternate" href="https://www.php.net/manual/en/curl.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/curl.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/curl.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/curl.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/curl.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/curl.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/curl.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/curl.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/curl.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/curl.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/curl.installation.php" hreflang="zh">

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
        <a href="curl.configuration.php">
          Runtime Configuration &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="curl.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.curl.php'>cURL</a></li>      <li><a href='curl.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/curl.installation.php' selected="selected">English</option>
            <option value='de/curl.installation.php'>German</option>
            <option value='es/curl.installation.php'>Spanish</option>
            <option value='fr/curl.installation.php'>French</option>
            <option value='it/curl.installation.php'>Italian</option>
            <option value='ja/curl.installation.php'>Japanese</option>
            <option value='pt_BR/curl.installation.php'>Brazilian Portuguese</option>
            <option value='ru/curl.installation.php'>Russian</option>
            <option value='tr/curl.installation.php'>Turkish</option>
            <option value='uk/curl.installation.php'>Ukrainian</option>
            <option value='zh/curl.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="curl.installation" class="section">
 <h2 class="title">Installation</h2>
 <p class="para">
  To use PHP&#039;s cURL support you must also compile PHP <strong class="option configure">--with-curl[=DIR]</strong> where DIR is the
  location of the directory containing the <var class="filename">lib</var> and <var class="filename">include</var>
  directories. In the <var class="filename">include</var> directory there should be a folder
  named <var class="filename">curl</var> which should contain the <var class="filename">easy.h</var> and
  <var class="filename">curl.h</var> files. There should be a file named 
  <var class="filename">libcurl.a</var> located in the <var class="filename">lib</var> directory.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <strong>Note to Win32 Users</strong><br />
  <span class="simpara">
  In order to enable this module on a Windows environment, 
  <var class="filename">libeay32.dll</var> and <var class="filename">ssleay32.dll</var>, or, as of OpenSSL 1.1
  <var class="filename">libcrypto-*.dll</var> and <var class="filename">libssl-*.dll</var>,
  must be present in your <var class="envar">PATH</var>. 
  Also <var class="filename">libssh2.dll</var> must be present in your <var class="envar">PATH</var>.
  </span>
  <span class="simpara">
  You don&#039;t need <var class="filename">libcurl.dll</var> from the cURL site.
  </span>
  </p></blockquote>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/configure.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcurl.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=curl.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/curl.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="84999">  <div class="votes">
    <div id="Vu84999">
    <a href="/manual/vote-note.php?id=84999&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84999">
    <a href="/manual/vote-note.php?id=84999&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84999" title="57% like this...">
    32
    </div>
  </div>
  <a href="#84999" class="name">
  <strong class="user"><em>comments at adstation-systems dot com</em></strong></a><a class="genanchor" href="#84999"> &para;</a><div class="date" title="2008-08-09 08:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84999">
<div class="phpcode"><code><span class="html">You may be confused, as I was, by the instructions for installing cURL in php.  The instruction "To use PHP's cURL support you must also compile PHP --with-curl[=DIR]..." was murky to me, since I didn't compile php when I installed it.  I just copied all of the necessary files to the correct folders as described very clearly in the php manual.<br /><br />I am using Windows XP and Apache with php 5.1.6. In this situation, and it may apply to php versions of 5.0 and later, all one needs to do is remove the ";" from the front of the directive extension=php_curl.dll.  You should also check to make certain that libeay32.dll and ssleay32.dll are in your php directory with the other dll's.  This directory should already be in you path, so the instruction to put them in you path is not critical.<br /><br />You can then run phpinfo() and you should see a heading for curl in the listing.<br /><br />Succinctly, my installation of cURL consisted of removing the semi-colon in front of the ;extension=php_curl.dll line in php.ini, saving php.ini and restarting Apache.  You may wish to try this if you are using php 5.0 and later and are having difficulty understanding the instructions on the cURL installation page at php.net<br /><br />You might also find the information at <a href="http://curl.phptrack.com/forum/viewtopic.php?t=52" rel="nofollow" target="_blank">http://curl.phptrack.com/forum/viewtopic.php?t=52</a> useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="117372">  <div class="votes">
    <div id="Vu117372">
    <a href="/manual/vote-note.php?id=117372&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117372">
    <a href="/manual/vote-note.php?id=117372&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117372" title="52% like this...">
    16
    </div>
  </div>
  <a href="#117372" class="name">
  <strong class="user"><em>Developtus.com</em></strong></a><a class="genanchor" href="#117372"> &para;</a><div class="date" title="2015-05-29 03:38"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117372">
<div class="phpcode"><code><span class="html">Upgrading to php 5.6.9 on Windows 7 x64 curl no longer is recognised. No errors on server start package just not available and didn't show in phpinfo.php. deplister.exe was ok<br />I fixed coping the following list files from php folder (in my case D:\xampp\php)<br />libeay32.dll<br />libssh2.dll<br />ssleay32.dll<br />to c:\xampp\apache\bin (or your apache\bin path), restart apache and works fine, apache's libraries were outdated</span></code></div>
  </div>
 </div>
  <div class="note" id="121922">  <div class="votes">
    <div id="Vu121922">
    <a href="/manual/vote-note.php?id=121922&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121922">
    <a href="/manual/vote-note.php?id=121922&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121922" title="58% like this...">
    9
    </div>
  </div>
  <a href="#121922" class="name">
  <strong class="user"><em>epos_jk</em></strong></a><a class="genanchor" href="#121922"> &para;</a><div class="date" title="2017-11-27 04:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121922">
<div class="phpcode"><code><span class="html">You dont need to copy files to use PHP CURL with Apache 2.4 - use the LoadFile directive in your apache config file instead:<br />LoadFile "C:/php7/libssh2.dll"<br />(that was all it took for me to get it work)</span></code></div>
  </div>
 </div>
  <div class="note" id="104399">  <div class="votes">
    <div id="Vu104399">
    <a href="/manual/vote-note.php?id=104399&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104399">
    <a href="/manual/vote-note.php?id=104399&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104399" title="51% like this...">
    14
    </div>
  </div>
  <a href="#104399" class="name">
  <strong class="user"><em>Joseph Marlin</em></strong></a><a class="genanchor" href="#104399"> &para;</a><div class="date" title="2011-06-13 10:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104399">
<div class="phpcode"><code><span class="html">Ubuntu 11.04<br /><br />I already had Apache and PHP5 setup, but simply adding php5-curl and curl did *not* work. I also had to get libcurl3 and libcurl3-dev. The full command:<br /><br />sudo apt-get install curl libcurl3 libcurl3-dev php5-curl<br /><br />You'll know if it works because phpinfo() will get a new section with Curl info.</span></code></div>
  </div>
 </div>
  <div class="note" id="85893">  <div class="votes">
    <div id="Vu85893">
    <a href="/manual/vote-note.php?id=85893&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85893">
    <a href="/manual/vote-note.php?id=85893&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85893" title="55% like this...">
    8
    </div>
  </div>
  <a href="#85893" class="name">
  <strong class="user"><em>regs at voidship dot net</em></strong></a><a class="genanchor" href="#85893"> &para;</a><div class="date" title="2008-09-23 09:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85893">
<div class="phpcode"><code><span class="html">If you're dense like I am, spare yourself the trouble on an Ubuntu system (probably Debian too) and...
<br />
<br />$ sudo apt-get install php5-curl
<br />
<br />Then feel dumb, but not as dumb as me.</span></code></div>
  </div>
 </div>
  <div class="note" id="121921">  <div class="votes">
    <div id="Vu121921">
    <a href="/manual/vote-note.php?id=121921&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121921">
    <a href="/manual/vote-note.php?id=121921&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121921" title="53% like this...">
    7
    </div>
  </div>
  <a href="#121921" class="name">
  <strong class="user"><em>epos_jk</em></strong></a><a class="genanchor" href="#121921"> &para;</a><div class="date" title="2017-11-27 04:21"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121921">
<div class="phpcode"><code><span class="html">Beginning with version 1.1.0 OpenSSL did change their libary names!<br />libeay32.dll is now libcrypto-*.dll (e.g. libcrypto-1_1-x64.dll for OpenSSL 1.1.x on 64bit windows)<br />ssleay32.dll is now libssl-*.dll (e.g. libssl-1_1-x64.dll for OpenSSL 1.1.x on 64bit windows)</span></code></div>
  </div>
 </div>
  <div class="note" id="114686">  <div class="votes">
    <div id="Vu114686">
    <a href="/manual/vote-note.php?id=114686&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114686">
    <a href="/manual/vote-note.php?id=114686&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114686" title="53% like this...">
    5
    </div>
  </div>
  <a href="#114686" class="name">
  <strong class="user"><em>jorijnsmit at gmail dot com</em></strong></a><a class="genanchor" href="#114686"> &para;</a><div class="date" title="2014-03-22 06:44"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114686">
<div class="phpcode"><code><span class="html">It is not necessary to always (re)compile PHP. For me it was sufficient to install php5-curl and restart Apache:<br /><br />$ sudo apt-get install php5-curl<br />$ sudo /etc/init.d/apache2 restart</span></code></div>
  </div>
 </div>
  <div class="note" id="113895">  <div class="votes">
    <div id="Vu113895">
    <a href="/manual/vote-note.php?id=113895&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113895">
    <a href="/manual/vote-note.php?id=113895&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113895" title="52% like this...">
    4
    </div>
  </div>
  <a href="#113895" class="name">
  <strong class="user"><em>TristanV</em></strong></a><a class="genanchor" href="#113895"> &para;</a><div class="date" title="2013-12-13 11:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113895">
<div class="phpcode"><code><span class="html">If you are running on Windows with a Wampserver or alike preconfigured PHP, if you did everything that was advised (path is correct, dlls are in the System32 or the Wow64 folder, php_curl extension uncommented in the php.ini, rebooted your machine and restarted your services), and you still receive messages saying that curl is not installed :<br />- maybe you are running a command line script (and not a curl instruction within a web application). If yes, remember that there are 2 distinct php.ini configuration files : one for the php-cli commands (run php at command line) and one for the php instructions (run from a page in your www folder).<br />Wampserver's menuitem "php.ini" only opens the webserver's php.ini, not the php-cli one.<br />So it will be great to check your php-cli's php.ini configuration file ! (you'll find it in the php.exe's installation folder)<br />You need to uncomment the extension php_curl in this php.ini file for the command lines to work with curl.<br />Also uncomment the php_openssl extention by the way (often used with curl).<br />I hope this fixed issue will help someone else :)</span></code></div>
  </div>
 </div>
  <div class="note" id="124549">  <div class="votes">
    <div id="Vu124549">
    <a href="/manual/vote-note.php?id=124549&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124549">
    <a href="/manual/vote-note.php?id=124549&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124549" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124549" class="name">
  <strong class="user"><em>Greg</em></strong></a><a class="genanchor" href="#124549"> &para;</a><div class="date" title="2019-12-27 06:30"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124549">
<div class="phpcode"><code><span class="html">For those who may be having WordPress issues relating to curl, the answer for me was that the curl.cainfo wasn't specified in the config.  This resulted in a plugin giving some non-graceful errors for which I was finally able to track it down.<br /><br />curl.cainfo = "C:\php\extras\ssl\cacert.pem"<br /><br />You'll need a copy of the cacert.pem (doesn't come with PHP and does need to be updated every so often can be found at an official permalink of:<br /><a href="https://curl.haxx.se/ca/cacert.pem" rel="nofollow" target="_blank">https://curl.haxx.se/ca/cacert.pem</a><br /><br />They use a modified version of Mozilla's certificate store meant to work with libcurl.<br /><br />I'm not an expert, this is just what fixed the errors for me.<br /><br />(cacert.pem lists official root certificate providers so your computer knows which ones its safe to authenticate against is my lay interpretation.  I'm sure it's not technically accurate but close enough for us lay people.)</span></code></div>
  </div>
 </div>
  <div class="note" id="122314">  <div class="votes">
    <div id="Vu122314">
    <a href="/manual/vote-note.php?id=122314&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122314">
    <a href="/manual/vote-note.php?id=122314&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122314" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#122314" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#122314"> &para;</a><div class="date" title="2018-01-26 10:38"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122314">
<div class="phpcode"><code><span class="html">Upgrading to php 7.1.6 on Apache 2.4 32bit version Windows 7 x64<br /><br />this curl  implementation works:<br /><br />1.   C:/(path to php folder)/php.ini <br />enable extension=php_curl.dll<br /><br />libeay32.dll, ssleay32.dll, libssh2.dll find directly in php7 folder<br /><br />2. add this to Apache/conf/httpd.conf<br /># load curl and open ssl libraries<br />LoadFile "C:/(path to php folder)/libeay32.dll"<br />LoadFile "C:/(path to php folder)/ssleay32.dll"<br />LoadFile "C:/(path to php folder)/libssh2.dll"</span></code></div>
  </div>
 </div>
  <div class="note" id="126989">  <div class="votes">
    <div id="Vu126989">
    <a href="/manual/vote-note.php?id=126989&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126989">
    <a href="/manual/vote-note.php?id=126989&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126989" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#126989" class="name">
  <strong class="user"><em>NV</em></strong></a><a class="genanchor" href="#126989"> &para;</a><div class="date" title="2022-04-15 12:28"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126989">
<div class="phpcode"><code><span class="html">If trying to get installed on Windows (I was using Windows 10, Apache 2.4, PHP 8.1) and the curl module isn't loading and PHP is showing/logging the following error but &lt;phpPath&gt;\ext\php_curl.dll does exist:<br /><br />[14-Apr-2022 23:41:36 UTC] PHP Warning:  PHP Startup: Unable to load dynamic library 'curl' (tried: &lt;phpPath&gt;\ext\curl (The specified module could not be found), &lt;phpPath&gt;\ext\php_curl.dll (The specified module could not be found)) in Unknown on line 0<br /><br />The problem is not that it can't find the module but that it can't find its dependencies (ie &lt;phpPath&gt;\libcrypto-1.1.dll and libssl-1.1.dll or similar).  As described in other comments,  you need to add &lt;phpPath&gt; to the Systerm Variables, PATH variable.   <br /><br />But, if you are starting Apache as a service, the default is for the service to run under the Local System account. In that case, ****YOU NEED TO REBOOT**** for the change in the PATH variable to be updated for the Local System account (see the following for reference:<br /><a href="https://stackoverflow.com/questions/32068893/how-to-change-path-value-for-local-system-account-in-ms-windows" rel="nofollow" target="_blank">https://stackoverflow.com/questions/32068893/how-to-change-path-value-for-local-system-account-in-ms-windows</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="95349">  <div class="votes">
    <div id="Vu95349">
    <a href="/manual/vote-note.php?id=95349&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95349">
    <a href="/manual/vote-note.php?id=95349&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95349" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#95349" class="name">
  <strong class="user"><em>wixelbomb at yahoo dot com</em></strong></a><a class="genanchor" href="#95349"> &para;</a><div class="date" title="2009-12-28 11:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95349">
<div class="phpcode"><code><span class="html">Just an additional note for Windows XP installations ...<br /><br />The instructions others have courteously given still lack one small item for those who have the Windows/system32 directory as the repository for the .dll files concerned with php_curl.<br /><br />Go to the ext directory of your php installation and copy php_curl.dll  to the Windows/system32 folder after you have followed the advise given elsewhere.<br /><br />So ...<br />1) remove ';' from extension=php_curl.dll in php.ini<br />2) ensure that  ssleay32.dll and libeay32.dll are in Windows/system32. <br />3) Copy php_curl.dll into Windows\System32 as well.<br /><br />G'day<br /><br />bearstate</span></code></div>
  </div>
 </div>
  <div class="note" id="122370">  <div class="votes">
    <div id="Vu122370">
    <a href="/manual/vote-note.php?id=122370&amp;page=curl.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122370">
    <a href="/manual/vote-note.php?id=122370&amp;page=curl.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122370" title="36% like this...">
    -5
    </div>
  </div>
  <a href="#122370" class="name">
  <strong class="user"><em>1004707812 at qq dot com</em></strong></a><a class="genanchor" href="#122370"> &para;</a><div class="date" title="2018-02-08 06:32"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122370">
<div class="phpcode"><code><span class="html">Win10 64bit, php7 x64,apache x64<br />It's important to set " extension_dir = "X:/WAMP/php/ext" " clearly in php.ini .<br />Remember some names of dll has changed recently, specially in the  x64 environment.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=curl.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/curl.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="curl.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="curl.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="curl.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="curl.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="curl.resources.php" title="Resource Types">Resource Types</a>
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
