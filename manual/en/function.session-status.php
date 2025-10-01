<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_status - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-status.php">
 <link rel="shorturl" href="https://www.php.net/session-status">
 <link rel="alternate" href="https://www.php.net/session-status" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-start.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-unset.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-status.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-status.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-status.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-status.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-status.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-status.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-status.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-status.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-status.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-status.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-status.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the current session status" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_status - Manual" />
<meta name="twitter:description" content="Returns the current session status" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_status - Manual" />
<meta itemprop="description" content="Returns the current session status" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the current session status" />

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
        <a href="function.session-unset.php">
          session_unset &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-start.php">
          &laquo; session_start        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='ref.session.php'>Session Functions</a></li>      </ul>
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
            <option value='en/function.session-status.php' selected="selected">English</option>
            <option value='de/function.session-status.php'>German</option>
            <option value='es/function.session-status.php'>Spanish</option>
            <option value='fr/function.session-status.php'>French</option>
            <option value='it/function.session-status.php'>Italian</option>
            <option value='ja/function.session-status.php'>Japanese</option>
            <option value='pt_BR/function.session-status.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-status.php'>Russian</option>
            <option value='tr/function.session-status.php'>Turkish</option>
            <option value='uk/function.session-status.php'>Ukrainian</option>
            <option value='zh/function.session-status.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-status" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_status</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_status</span> &mdash; <span class="dc-title">Returns the current session status</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.session-status-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_status</strong></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_status()</strong></span> is used to return the current session status.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-status-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-status-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara"><strong><code><a href="session.constants.php#constant.php-session-disabled">PHP_SESSION_DISABLED</a></code></strong> if sessions are disabled.</span>
    </li>
    <li class="listitem">
     <span class="simpara"><strong><code><a href="session.constants.php#constant.php-session-none">PHP_SESSION_NONE</a></code></strong> if sessions are enabled, but none exists.</span>
    </li>
    <li class="listitem">
     <span class="simpara"><strong><code><a href="session.constants.php#constant.php-session-active">PHP_SESSION_ACTIVE</a></code></strong> if sessions are enabled, and one exists.</span>
    </li>
   </ul>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.session-status-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.session-start.php" class="function" rel="rdfs-seeAlso">session_start()</a> - Start new or resume existing session</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-status.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-status%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-status.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116634">  <div class="votes">
    <div id="Vu116634">
    <a href="/manual/vote-note.php?id=116634&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116634">
    <a href="/manual/vote-note.php?id=116634&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116634" title="63% like this...">
    84
    </div>
  </div>
  <a href="#116634" class="name">
  <strong class="user"><em>sasi dot viragelet at gmail dot co</em></strong></a><a class="genanchor" href="#116634"> &para;</a><div class="date" title="2015-02-01 10:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116634">
<div class="phpcode"><code><span class="html">Maybe depending on PHP settings, but if return values are not the above, then go for this:<br />_DISABLED = 0<br />_NONE = 1<br />_ACTIVE = 2</span></code></div>
  </div>
 </div>
  <div class="note" id="123404">  <div class="votes">
    <div id="Vu123404">
    <a href="/manual/vote-note.php?id=123404&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123404">
    <a href="/manual/vote-note.php?id=123404&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123404" title="63% like this...">
    28
    </div>
  </div>
  <a href="#123404" class="name">
  <strong class="user"><em>info at eurocron dot de</em></strong></a><a class="genanchor" href="#123404"> &para;</a><div class="date" title="2018-12-06 04:47"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123404">
<div class="phpcode"><code><span class="html">Use always session_status(), to check if a session is already started and active.<br />if(session_status() !== PHP_SESSION_ACTIVE) session_start();<br />or <br />if(session_status() === PHP_SESSION_NONE) session_start();<br /><br />Don't use<br />if(!isset($_SESSION)) session_start();<br />or<br />if(session_id() === "") session_start();<br /><br />They will not work properly after a call to session_write_close().<br />Both functions will continue to report, that the session exists.<br />And this is right, you can read from $_SESSION, but if you want to write,<br />you need session_start() again.<br /><br />As a shorthand you can use <br />@session_start() <br />with the @ at the beginning to suppress the <br />PHP notice "A session had already been started - ignoring session_start()"<br /><br />As stated in the manual for session_start(), a second call will do no harm,<br />it will be simply ignored. But you need the @, if you don't want to get the notice.</span></code></div>
  </div>
 </div>
  <div class="note" id="113468">  <div class="votes">
    <div id="Vu113468">
    <a href="/manual/vote-note.php?id=113468&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113468">
    <a href="/manual/vote-note.php?id=113468&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113468" title="56% like this...">
    34
    </div>
  </div>
  <a href="#113468" class="name">
  <strong class="user"><em>coder dot ua at gmail dot com</em></strong></a><a class="genanchor" href="#113468"> &para;</a><div class="date" title="2013-10-15 02:13"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113468">
<div class="phpcode"><code><span class="html">Universal function for checking session status.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @return bool<br /> */<br /></span><span class="keyword">function </span><span class="default">is_session_started</span><span class="keyword">()<br />{<br />    if ( </span><span class="default">php_sapi_name</span><span class="keyword">() !== </span><span class="string">'cli' </span><span class="keyword">) {<br />        if ( </span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">phpversion</span><span class="keyword">(), </span><span class="string">'5.4.0'</span><span class="keyword">, </span><span class="string">'&gt;='</span><span class="keyword">) ) {<br />            return </span><span class="default">session_status</span><span class="keyword">() === </span><span class="default">PHP_SESSION_ACTIVE </span><span class="keyword">? </span><span class="default">TRUE </span><span class="keyword">: </span><span class="default">FALSE</span><span class="keyword">;<br />        } else {<br />            return </span><span class="default">session_id</span><span class="keyword">() === </span><span class="string">'' </span><span class="keyword">? </span><span class="default">FALSE </span><span class="keyword">: </span><span class="default">TRUE</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Example<br /></span><span class="keyword">if ( </span><span class="default">is_session_started</span><span class="keyword">() === </span><span class="default">FALSE </span><span class="keyword">) </span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126486">  <div class="votes">
    <div id="Vu126486">
    <a href="/manual/vote-note.php?id=126486&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126486">
    <a href="/manual/vote-note.php?id=126486&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126486" title="60% like this...">
    4
    </div>
  </div>
  <a href="#126486" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#126486"> &para;</a><div class="date" title="2021-10-08 08:53"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126486">
<div class="phpcode"><code><span class="html">Note session_status() is for file based session only.<br /><br />DB based session status needs to have custom function based on table structure.</span></code></div>
  </div>
 </div>
  <div class="note" id="111945">  <div class="votes">
    <div id="Vu111945">
    <a href="/manual/vote-note.php?id=111945&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111945">
    <a href="/manual/vote-note.php?id=111945&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111945" title="52% like this...">
    4
    </div>
  </div>
  <a href="#111945" class="name">
  <strong class="user"><em>php at pointpro dot nl</em></strong></a><a class="genanchor" href="#111945"> &para;</a><div class="date" title="2013-04-16 07:06"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111945">
<div class="phpcode"><code><span class="html">The advice of ive_insomnia at live dot com should be taken with great care.<br /><br />First of all, while his use case for session_status is valid, a simpler way to avoid the warning is:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!isset(</span><span class="default">$_SESSION</span><span class="keyword">)) { </span><span class="default">session_start</span><span class="keyword">(); }<br /></span><span class="default">?&gt;<br /></span><br />The example of session_status uses the raw values of constants (2 in this case) created specifically for the purpose of not having to use magic numbers.<br /><br />Better code would be:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">session_status</span><span class="keyword">() !== </span><span class="default">PHP_SESSION_ACTIVE</span><span class="keyword">) {</span><span class="default">session_start</span><span class="keyword">();}<br /></span><span class="default">?&gt;<br /></span><br />The same can be done using<br /><br />&lt;?<br />if (session_id() === "") { session_start(); }<br />?&gt;<br /><br />The use of this function is lies more towards status management: change the behavior of a script when sessions are disabled altogether, for example.</span></code></div>
  </div>
 </div>
  <div class="note" id="130394">  <div class="votes">
    <div id="Vu130394">
    <a href="/manual/vote-note.php?id=130394&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130394">
    <a href="/manual/vote-note.php?id=130394&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130394" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130394" class="name">
  <strong class="user"><em>tuangson at gmail dot com</em></strong></a><a class="genanchor" href="#130394"> &para;</a><div class="date" title="2025-06-28 06:04"><strong>3 months ago</strong></div>
  <div class="text" id="Hcom130394">
<div class="phpcode"><code><span class="html">Numerical Values for<br />PHP_SESSION_DISABLED  is 0<br />PHP_SESSION_NONE is 1<br />PHP_SESSION_ACTIVE is  2</span></code></div>
  </div>
 </div>
  <div class="note" id="120013">  <div class="votes">
    <div id="Vu120013">
    <a href="/manual/vote-note.php?id=120013&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120013">
    <a href="/manual/vote-note.php?id=120013&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120013" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120013" class="name">
  <strong class="user"><em>ayon at hyurl dot com</em></strong></a><a class="genanchor" href="#120013"> &para;</a><div class="date" title="2016-10-09 05:17"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120013">
<div class="phpcode"><code><span class="html">This is how the session_status() works:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">session_status</span><span class="keyword">(){<br />    if(!</span><span class="default">extension_loaded</span><span class="keyword">(</span><span class="string">'session'</span><span class="keyword">)){<br />        return </span><span class="default">0</span><span class="keyword">;<br />    }elseif(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">session_save_path</span><span class="keyword">().</span><span class="string">'/sess_'</span><span class="keyword">.</span><span class="default">session_id</span><span class="keyword">()){<br />        return </span><span class="default">1</span><span class="keyword">;<br />    }else{<br />        return </span><span class="default">2</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114258">  <div class="votes">
    <div id="Vu114258">
    <a href="/manual/vote-note.php?id=114258&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114258">
    <a href="/manual/vote-note.php?id=114258&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114258" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#114258" class="name">
  <strong class="user"><em>Ollea</em></strong></a><a class="genanchor" href="#114258"> &para;</a><div class="date" title="2014-01-29 11:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114258">
<div class="phpcode"><code><span class="html">If you started and closed a session then test ( session_id() === '' ) to check if a session is active it won't work, session_id() returns an ID even if the session is closed.<br /><br />Anybody knows another way before PHP 5.4 to check if a session is really not currently active ?</span></code></div>
  </div>
 </div>
  <div class="note" id="118849">  <div class="votes">
    <div id="Vu118849">
    <a href="/manual/vote-note.php?id=118849&amp;page=function.session-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118849">
    <a href="/manual/vote-note.php?id=118849&amp;page=function.session-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118849" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#118849" class="name">
  <strong class="user"><em>Ben (aocool at msn d0t com)</em></strong></a><a class="genanchor" href="#118849"> &para;</a><div class="date" title="2016-02-16 08:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118849">
<div class="phpcode"><code><span class="html">Just another function to determine whether the session has already started:<br /><br />function is_session_started () {<br />    return function_exists ( 'session_status' ) ? ( PHP_SESSION_ACTIVE == session_status () ) : ( ! empty ( session_id () ) ); <br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-status.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.session.php">Session Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.session-abort.php" title="session_&#8203;abort">session_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-expire.php" title="session_&#8203;cache_&#8203;expire">session_&#8203;cache_&#8203;expire</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-limiter.php" title="session_&#8203;cache_&#8203;limiter">session_&#8203;cache_&#8203;limiter</a>
                        </li>
                                                <li class="">
                            <a href="function.session-commit.php" title="session_&#8203;commit">session_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.session-create-id.php" title="session_&#8203;create_&#8203;id">session_&#8203;create_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-decode.php" title="session_&#8203;decode">session_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-destroy.php" title="session_&#8203;destroy">session_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.session-encode.php" title="session_&#8203;encode">session_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-gc.php" title="session_&#8203;gc">session_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.session-get-cookie-params.php" title="session_&#8203;get_&#8203;cookie_&#8203;params">session_&#8203;get_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-id.php" title="session_&#8203;id">session_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-module-name.php" title="session_&#8203;module_&#8203;name">session_&#8203;module_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-name.php" title="session_&#8203;name">session_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-regenerate-id.php" title="session_&#8203;regenerate_&#8203;id">session_&#8203;regenerate_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-register-shutdown.php" title="session_&#8203;register_&#8203;shutdown">session_&#8203;register_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.session-reset.php" title="session_&#8203;reset">session_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-save-path.php" title="session_&#8203;save_&#8203;path">session_&#8203;save_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-cookie-params.php" title="session_&#8203;set_&#8203;cookie_&#8203;params">session_&#8203;set_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-save-handler.php" title="session_&#8203;set_&#8203;save_&#8203;handler">session_&#8203;set_&#8203;save_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.session-start.php" title="session_&#8203;start">session_&#8203;start</a>
                        </li>
                                                <li class="current">
                            <a href="function.session-status.php" title="session_&#8203;status">session_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.session-unset.php" title="session_&#8203;unset">session_&#8203;unset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-write-close.php" title="session_&#8203;write_&#8203;close">session_&#8203;write_&#8203;close</a>
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
