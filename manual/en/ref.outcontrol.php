<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Output Control Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="shorturl" href="https://www.php.net/outcontrol">
 <link rel="alternate" href="https://www.php.net/outcontrol" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/outcontrol.examples.rewrite.php">
 <link rel="next" href="https://www.php.net/manual/en/function.flush.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.outcontrol.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.outcontrol.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.outcontrol.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.outcontrol.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.outcontrol.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.outcontrol.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.outcontrol.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.outcontrol.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.outcontrol.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.outcontrol.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.outcontrol.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Output Control Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Output Control Functions - Manual" />
<meta name="twitter:description" content="Output Control Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Output Control Functions - Manual" />
<meta itemprop="description" content="Output Control Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Output Control Functions" />

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
        <a href="function.flush.php">
          flush &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="outcontrol.examples.rewrite.php">
          &laquo; Output rewrite usage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.outcontrol.php'>Output Control</a></li>      </ul>
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
            <option value='en/ref.outcontrol.php' selected="selected">English</option>
            <option value='de/ref.outcontrol.php'>German</option>
            <option value='es/ref.outcontrol.php'>Spanish</option>
            <option value='fr/ref.outcontrol.php'>French</option>
            <option value='it/ref.outcontrol.php'>Italian</option>
            <option value='ja/ref.outcontrol.php'>Japanese</option>
            <option value='pt_BR/ref.outcontrol.php'>Brazilian Portuguese</option>
            <option value='ru/ref.outcontrol.php'>Russian</option>
            <option value='tr/ref.outcontrol.php'>Turkish</option>
            <option value='uk/ref.outcontrol.php'>Ukrainian</option>
            <option value='zh/ref.outcontrol.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.outcontrol" class="reference">
 <h1 class="title">Output Control Functions</h1>

 <div class="partintro">
  <h1 class="title">See Also</h1>
  <p class="para">
   See also <span class="function"><a href="function.header.php" class="function">header()</a></span> and
   <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span>.
  </p>
 </div>

 





















































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.flush.php">flush</a> — Flush system output buffer</li><li><a href="function.ob-clean.php">ob_clean</a> — Clean (erase) the contents of the active output buffer</li><li><a href="function.ob-end-clean.php">ob_end_clean</a> — Clean (erase) the contents of the active output buffer and turn it off</li><li><a href="function.ob-end-flush.php">ob_end_flush</a> — Flush (send) the return value of the active output handler
   and turn the active output buffer off</li><li><a href="function.ob-flush.php">ob_flush</a> — Flush (send) the return value of the active output handler</li><li><a href="function.ob-get-clean.php">ob_get_clean</a> — Get the contents of the active output buffer and turn it off</li><li><a href="function.ob-get-contents.php">ob_get_contents</a> — Return the contents of the output buffer</li><li><a href="function.ob-get-flush.php">ob_get_flush</a> — Flush (send) the return value of the active output handler,
   return the contents of the active output buffer and turn it off</li><li><a href="function.ob-get-length.php">ob_get_length</a> — Return the length of the output buffer</li><li><a href="function.ob-get-level.php">ob_get_level</a> — Return the nesting level of the output buffering mechanism</li><li><a href="function.ob-get-status.php">ob_get_status</a> — Get status of output buffers</li><li><a href="function.ob-implicit-flush.php">ob_implicit_flush</a> — Turn implicit flush on/off</li><li><a href="function.ob-list-handlers.php">ob_list_handlers</a> — List all output handlers in use</li><li><a href="function.ob-start.php">ob_start</a> — Turn on output buffering</li><li><a href="function.output-add-rewrite-var.php">output_add_rewrite_var</a> — Add URL rewriter values</li><li><a href="function.output-reset-rewrite-vars.php">output_reset_rewrite_vars</a> — Reset URL rewriter values</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.outcontrol%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.outcontrol&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.outcontrol.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="76102">  <div class="votes">
    <div id="Vu76102">
    <a href="/manual/vote-note.php?id=76102&amp;page=ref.outcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76102">
    <a href="/manual/vote-note.php?id=76102&amp;page=ref.outcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76102" title="62% like this...">
    18
    </div>
  </div>
  <a href="#76102" class="name">
  <strong class="user"><em>jgeewax a t gmail</em></strong></a><a class="genanchor" href="#76102"> &para;</a><div class="date" title="2007-06-29 07:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76102">
<div class="phpcode"><code><span class="html">It seems that while using output buffering, an included file which calls die() before the output buffer is closed is flushed rather than cleaned. That is, ob_end_flush() is called by default.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// a.php (this file should never display anything)<br /></span><span class="default">ob_start</span><span class="keyword">();<br />include(</span><span class="string">'b.php'</span><span class="keyword">);<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">// b.php<br /></span><span class="keyword">print </span><span class="string">"b"</span><span class="keyword">;<br />die();<br /></span><span class="default">?&gt;<br /></span><br />This ends up printing "b" rather than nothing as ob_end_flush() is called instead of ob_end_clean(). That is, die() flushes the buffer rather than cleans it. This took me a while to determine what was causing the flush, so I thought I'd share.</span></code></div>
  </div>
 </div>
  <div class="note" id="90404">  <div class="votes">
    <div id="Vu90404">
    <a href="/manual/vote-note.php?id=90404&amp;page=ref.outcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90404">
    <a href="/manual/vote-note.php?id=90404&amp;page=ref.outcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90404" title="55% like this...">
    4
    </div>
  </div>
  <a href="#90404" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#90404"> &para;</a><div class="date" title="2009-04-20 12:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90404">
<div class="phpcode"><code><span class="html">You possibly also want to end your benchmark after the output is flushed.<br /><br /><span class="default">&lt;?php<br />your_benchmark_start_function</span><span class="keyword">();<br /><br /></span><span class="default">ob_start </span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">5000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    echo </span><span class="default">str_repeat </span><span class="keyword">(</span><span class="string">"your string blablabla bla bla"</span><span class="keyword">, (</span><span class="default">rand</span><span class="keyword">() % </span><span class="default">4</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">).</span><span class="string">"&lt;br&gt;\n"</span><span class="keyword">;<br /><br />                              &lt;----------<br />echo </span><span class="default">your_benchmark_end_function</span><span class="keyword">();      |<br /></span><span class="default">ob_end_flush </span><span class="keyword">(); ------------------------<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43965">  <div class="votes">
    <div id="Vu43965">
    <a href="/manual/vote-note.php?id=43965&amp;page=ref.outcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43965">
    <a href="/manual/vote-note.php?id=43965&amp;page=ref.outcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43965" title="58% like this...">
    4
    </div>
  </div>
  <a href="#43965" class="name">
  <strong class="user"><em>gruik at libertysurf dot fr</em></strong></a><a class="genanchor" href="#43965"> &para;</a><div class="date" title="2004-07-10 05:53"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43965">
<div class="phpcode"><code><span class="html">For those who are looking for optimization, try using buffered output.<br /><br />I noticed that an output function call (i.e echo()) is somehow time expensive. When using buffered output, only one output function call is made and it seems to be much faster.<br />Try this :<br /><br /><span class="default">&lt;?php<br />your_benchmark_start_function</span><span class="keyword">();<br /><br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">5000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    echo </span><span class="default">str_repeat </span><span class="keyword">(</span><span class="string">"your string blablabla bla bla"</span><span class="keyword">, (</span><span class="default">rand</span><span class="keyword">() % </span><span class="default">4</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">).</span><span class="string">"&lt;br&gt;\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">your_benchmark_end_function</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />And then :<br /><br /><span class="default">&lt;?php<br />your_benchmark_start_function</span><span class="keyword">();<br /><br /></span><span class="default">ob_start </span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">5000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    echo </span><span class="default">str_repeat </span><span class="keyword">(</span><span class="string">"your string blablabla bla bla"</span><span class="keyword">, (</span><span class="default">rand</span><span class="keyword">() % </span><span class="default">4</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">).</span><span class="string">"&lt;br&gt;\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">your_benchmark_end_function</span><span class="keyword">();<br /></span><span class="default">ob_end_flush </span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.outcontrol&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.outcontrol.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.outcontrol.php">Output Control</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.outcontrol.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="outcontrol.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="outcontrol.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="outcontrol.output-buffering.php" title="Output Buffering">Output Buffering</a>
                        </li>
                                                <li class="">
                            <a href="outcontrol.flushing-system-buffers.php" title="Flushing System Buffers">Flushing System Buffers</a>
                        </li>
                                                <li class="">
                            <a href="outcontrol.user-level-output-buffers.php" title="User-&#8203;Level Output Buffers">User-&#8203;Level Output Buffers</a>
                        </li>
                                                <li class="">
                            <a href="outcontrol.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.outcontrol.php" title="Output Control Functions">Output Control Functions</a>
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
