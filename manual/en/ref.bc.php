<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: BC Math Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.bc.php">
 <link rel="shorturl" href="https://www.php.net/bc">
 <link rel="alternate" href="https://www.php.net/bc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.bc.php">
 <link rel="prev" href="https://www.php.net/manual/en/bc.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bcadd.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.bc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.bc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.bc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.bc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.bc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.bc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.bc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.bc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.bc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.bc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.bc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="BC Math Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: BC Math Functions - Manual" />
<meta name="twitter:description" content="BC Math Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: BC Math Functions - Manual" />
<meta itemprop="description" content="BC Math Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="BC Math Functions" />

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
        <a href="function.bcadd.php">
          bcadd &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="bc.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.bc.php'>BC Math</a></li>      </ul>
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
            <option value='en/ref.bc.php' selected="selected">English</option>
            <option value='de/ref.bc.php'>German</option>
            <option value='es/ref.bc.php'>Spanish</option>
            <option value='fr/ref.bc.php'>French</option>
            <option value='it/ref.bc.php'>Italian</option>
            <option value='ja/ref.bc.php'>Japanese</option>
            <option value='pt_BR/ref.bc.php'>Brazilian Portuguese</option>
            <option value='ru/ref.bc.php'>Russian</option>
            <option value='tr/ref.bc.php'>Turkish</option>
            <option value='uk/ref.bc.php'>Ukrainian</option>
            <option value='zh/ref.bc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.bc" class="reference">
 <h1 class="title">BC Math Functions</h1>

 






































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.bcadd.php">bcadd</a> — Add two arbitrary precision numbers</li><li><a href="function.bcceil.php">bcceil</a> — Round up arbitrary precision number</li><li><a href="function.bccomp.php">bccomp</a> — Compare two arbitrary precision numbers</li><li><a href="function.bcdiv.php">bcdiv</a> — Divide two arbitrary precision numbers</li><li><a href="function.bcdivmod.php">bcdivmod</a> — Get the quotient and modulus of an arbitrary precision number</li><li><a href="function.bcfloor.php">bcfloor</a> — Round down arbitrary precision number</li><li><a href="function.bcmod.php">bcmod</a> — Get modulus of an arbitrary precision number</li><li><a href="function.bcmul.php">bcmul</a> — Multiply two arbitrary precision numbers</li><li><a href="function.bcpow.php">bcpow</a> — Raise an arbitrary precision number to another</li><li><a href="function.bcpowmod.php">bcpowmod</a> — Raise an arbitrary precision number to another, reduced by a specified modulus</li><li><a href="function.bcround.php">bcround</a> — Round arbitrary precision number</li><li><a href="function.bcscale.php">bcscale</a> — Set or get default scale parameter for all bc math functions</li><li><a href="function.bcsqrt.php">bcsqrt</a> — Get the square root of an arbitrary precision number</li><li><a href="function.bcsub.php">bcsub</a> — Subtract one arbitrary precision number from another</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.bc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.bc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.bc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="82155">  <div class="votes">
    <div id="Vu82155">
    <a href="/manual/vote-note.php?id=82155&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82155">
    <a href="/manual/vote-note.php?id=82155&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82155" title="61% like this...">
    22
    </div>
  </div>
  <a href="#82155" class="name">
  <strong class="user"><em>Bouke Haarsma</em></strong></a><a class="genanchor" href="#82155"> &para;</a><div class="date" title="2008-03-29 03:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82155">
<div class="phpcode"><code><span class="html">Please be aware not to use/have spaces in your strings. It took me a while to find the error in some advanced calculations!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">bcadd</span><span class="keyword">(</span><span class="string">"1"</span><span class="keyword">, </span><span class="string">"2"</span><span class="keyword">); </span><span class="comment">// 3<br /></span><span class="keyword">echo </span><span class="default">bcadd</span><span class="keyword">(</span><span class="string">"1"</span><span class="keyword">, </span><span class="string">"2 "</span><span class="keyword">); </span><span class="comment">// 1<br /></span><span class="keyword">echo </span><span class="default">bcadd</span><span class="keyword">(</span><span class="string">"1"</span><span class="keyword">, </span><span class="string">" 2"</span><span class="keyword">); </span><span class="comment">// 1<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107014">  <div class="votes">
    <div id="Vu107014">
    <a href="/manual/vote-note.php?id=107014&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107014">
    <a href="/manual/vote-note.php?id=107014&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107014" title="62% like this...">
    15
    </div>
  </div>
  <a href="#107014" class="name">
  <strong class="user"><em>dawidgarus at gmail dot com</em></strong></a><a class="genanchor" href="#107014"> &para;</a><div class="date" title="2011-12-28 10:22"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107014">
<div class="phpcode"><code><span class="html">If you too are confused with illegible code like this:<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">"3"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">"5"</span><span class="keyword">;<br /></span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">bcmod</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">bcsqrt</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">7</span><span class="keyword">, </span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">))), </span><span class="default">4</span><span class="keyword">), </span><span class="default">$b</span><span class="keyword">), </span><span class="string">"4"</span><span class="keyword">), </span><span class="string">"0.5"</span><span class="keyword">); </span><span class="comment">// i might made a mistake somewhere<br /></span><span class="default">?&gt;<br /></span><br />You may consider use my function, which makes example above look:<br /><span class="default">&lt;?php<br />bc</span><span class="keyword">(</span><span class="string">"(sqrt(7 + $1^2) / 4 + $2) % 4 + 0.5"</span><span class="keyword">, </span><span class="string">"3"</span><span class="keyword">, </span><span class="string">"5"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Code:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">bc</span><span class="keyword">() {<br />        </span><span class="default">$functions </span><span class="keyword">= </span><span class="string">'sqrt'</span><span class="keyword">;<br />        </span><span class="comment">// list of | separated functions<br />        // sqrt refer to bcsqrt etc.<br />        // function must take exactly 1 argument<br /><br />        </span><span class="default">$argv </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">'('</span><span class="keyword">.</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="string">')'</span><span class="keyword">);<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\$([0-9\.]+)/e'</span><span class="keyword">, </span><span class="string">'$argv[$1]'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />        while (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/(('</span><span class="keyword">.</span><span class="default">$functions</span><span class="keyword">.</span><span class="string">')?)\(([^\)\(]*)\)/'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">)) {<br />                while (<br />                        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/([0-9\.]+)(\^)([0-9\.]+)/'</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">) ||<br />                        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/([0-9\.]+)([\*\/\%])([0-9\.]+)/'</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">) ||<br />                        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/([0-9\.]+)([\+\-])([0-9\.]+)/'</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">)<br />                ) {<br />                        switch(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) {<br />                                case </span><span class="string">'+'</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                                case </span><span class="string">'-'</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                                case </span><span class="string">'*'</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                                case </span><span class="string">'/'</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                                case </span><span class="string">'%'</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcmod</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                                case </span><span class="string">'^'</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                        }<br />                        </span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$result</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);<br />                }<br />                if (!empty(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$func </span><span class="keyword">= </span><span class="string">'bc'</span><span class="keyword">.</span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]))  {<br />                        </span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);<br />                }<br />                </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$string</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$string</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Note you must define scale with bcscale().</span></code></div>
  </div>
 </div>
  <div class="note" id="99130">  <div class="votes">
    <div id="Vu99130">
    <a href="/manual/vote-note.php?id=99130&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99130">
    <a href="/manual/vote-note.php?id=99130&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99130" title="60% like this...">
    16
    </div>
  </div>
  <a href="#99130" class="name">
  <strong class="user"><em>artefact2 at gmail dot com</em></strong></a><a class="genanchor" href="#99130"> &para;</a><div class="date" title="2010-07-29 06:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99130">
<div class="phpcode"><code><span class="html">Here are some useful functions to convert large hex numbers from and to large decimal ones :<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">public static function </span><span class="default">bchexdec</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">) {<br />        if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) {<br />            return </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$remain </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$last </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />            return </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">16</span><span class="keyword">, </span><span class="default">bchexdec</span><span class="keyword">(</span><span class="default">$remain</span><span class="keyword">)), </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$last</span><span class="keyword">));<br />        }<br />    }<br /><br />    public static function </span><span class="default">bcdechex</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">) {<br />        </span><span class="default">$last </span><span class="keyword">= </span><span class="default">bcmod</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">);<br />        </span><span class="default">$remain </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">), </span><span class="default">16</span><span class="keyword">);<br /><br />        if(</span><span class="default">$remain </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />            return </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$last</span><span class="keyword">);<br />        } else {<br />            return </span><span class="default">bcdechex</span><span class="keyword">(</span><span class="default">$remain</span><span class="keyword">).</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$last</span><span class="keyword">);<br />        }<br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="25349">  <div class="votes">
    <div id="Vu25349">
    <a href="/manual/vote-note.php?id=25349&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25349">
    <a href="/manual/vote-note.php?id=25349&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25349" title="60% like this...">
    2
    </div>
  </div>
  <a href="#25349" class="name">
  <strong class="user"><em>pulstar at mail dot com</em></strong></a><a class="genanchor" href="#25349"> &para;</a><div class="date" title="2002-09-20 07:23"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25349">
<div class="phpcode"><code><span class="html">A found a little fix to do in my base2dec() function:<br />The line "if($base&lt;37) $value=strtolower($value);" should be removed if you want to specify another digits for your base conversions. Change it this way:<br /><br />if(!$digits) {<br />$digits=digits($base);<br />if($base&lt;37) {<br />$value=strtolower($value);<br />}<br />}<br /><br />Another example using these functions is to generate a key for a session, to name temporary files or something else:<br /><br />srand((double) microtime()*1000000);<br />$id=uniqid(rand(10,999));<br />$mykey=dec2base(base2dec($id,16),64);<br /><br />$mykey is a base64 value, which is a good key for passing thru an URL and also is shorter than a MD5 string (it will be allways 11 chars long). If you need something more secure, just scramble the 64 digits in the digits() function.<br /><br />Well, I hope you enjoy it.<br /><br />Regards,<br />Edemilson Lima</span></code></div>
  </div>
 </div>
  <div class="note" id="47682">  <div class="votes">
    <div id="Vu47682">
    <a href="/manual/vote-note.php?id=47682&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47682">
    <a href="/manual/vote-note.php?id=47682&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47682" title="50% like this...">
    0
    </div>
  </div>
  <a href="#47682" class="name">
  <strong class="user"><em>stonehew ut gm a il det com</em></strong></a><a class="genanchor" href="#47682"> &para;</a><div class="date" title="2004-11-24 09:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47682">
<div class="phpcode"><code><span class="html">Like any other bc function, you can't trust the last couple of digits, but everything else seems to check out.  If you want to use this for anything important, you may want to verify this against other sources of pi before use.  This function calculates 100 decimal places of pi in 329 iterations -- not exactly fast (each iteration calls the factorial function, from below, twice), so I try to avoid calling it more than once.<br /><br />&lt;?<br />//arbitrary precision pi approximator<br />//author tom boothby<br />//free for any use<br /><br />function bcpi() {<br />    $r=2;<br />    $i=0;<br />    $or=0;<br /><br />    while(bccomp($or,$r)) {<br />        $i++;<br />        $or=$r;<br />        $r = bcadd($r,bcdiv(bcmul(bcpow(bcfact($i),2),<br />                        bcpow(2,$i+1)),bcfact(2*$i+1)));<br />    }<br /><br />    return $r;<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="47654">  <div class="votes">
    <div id="Vu47654">
    <a href="/manual/vote-note.php?id=47654&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47654">
    <a href="/manual/vote-note.php?id=47654&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47654" title="50% like this...">
    0
    </div>
  </div>
  <a href="#47654" class="name">
  <strong class="user"><em>stonehew et g m a i l dut com</em></strong></a><a class="genanchor" href="#47654"> &para;</a><div class="date" title="2004-11-23 11:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47654">
<div class="phpcode"><code><span class="html">I hacked these taylor expansions up to make diagrams for some physics homework.  I don't think you'll be wanting to do any real science with PHP... but what the hell, why not?  I plan to implement either a spigot algorithm or something similar to generate pi in the near future.<br /><br />&lt;?<br />// arbitrary precision sin and cosine functions<br />// author tom boothby<br />// free for any use<br /><br />function bcfact($n) {<br />    $r = $n--;<br />    while($n&gt;1) $r=bcmul($r,$n--);<br />    return $r;<br />}<br /><br />function bcsin($a) {<br />    $or= $a;<br />    $r = bcsub($a,bcdiv(bcpow($a,3),6));<br />    $i = 2;<br />    while(bccomp($or,$r)) {<br />        $or=$r;<br />        switch($i%2) {<br />          case 0:  $r = bcadd($r,bcdiv(bcpow($a,$i*2+1),bcfact($i*2+1))); break;<br />          default: $r = bcsub($r,bcdiv(bcpow($a,$i*2+1),bcfact($i*2+1))); break;<br />        }<br />        $i++;<br />    }<br />    return $r;<br />}<br /><br />function bccos($a) {<br />    $or= $a;<br />    $r = bcsub(1,bcdiv(bcpow($a,2),2));<br />    $i = 2;<br />    while(bccomp($or,$r)) {<br />        $or=$r;<br />        switch($i%2) {<br />          case 0:  $r = bcadd($r,bcdiv(bcpow($a,$i*2),bcfact($i*2))); break;<br />          default: $r = bcsub($r,bcdiv(bcpow($a,$i*2),bcfact($i*2))); break;<br />        }<br />        $i++;<br />    }<br />    return $r;<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="42915">  <div class="votes">
    <div id="Vu42915">
    <a href="/manual/vote-note.php?id=42915&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42915">
    <a href="/manual/vote-note.php?id=42915&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42915" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42915" class="name">
  <strong class="user"><em>robert at scabserver dot com</em></strong></a><a class="genanchor" href="#42915"> &para;</a><div class="date" title="2004-06-03 09:58"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42915">
<div class="phpcode"><code><span class="html">I spent some time looking for how to generate a large random number, in the end I've settled for reading directly from /dev/urandom<br /><br />I know this is a *nix only solution, but I figured that it might come in handy to someone else.<br /><br />The value $size is the size in bits, it could be simplified greatly if you want the size in bytes, but bits was more helpful to what I needed.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">bcrand</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">)<br />{<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"/dev/urandom"</span><span class="keyword">;<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />    </span><span class="default">$bin_urand </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">8.0</span><span class="keyword">));<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    </span><span class="default">$mask </span><span class="keyword">= ((</span><span class="default">$size </span><span class="keyword">% </span><span class="default">8 </span><span class="keyword">&lt; </span><span class="default">5</span><span class="keyword">) ? </span><span class="string">'0' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">) . </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">bindec</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">, </span><span class="default">$size </span><span class="keyword">% </span><span class="default">8</span><span class="keyword">))) . </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'FF'</span><span class="keyword">, </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">8</span><span class="keyword">));<br />    </span><span class="default">$binmask </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"H*"</span><span class="keyword">, </span><span class="default">$mask</span><span class="keyword">);<br />    </span><span class="default">$binrand </span><span class="keyword">= </span><span class="default">$binmask </span><span class="keyword">&amp; </span><span class="default">$bin_urand</span><span class="keyword">;<br />    </span><span class="default">$hexnumber </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"H*"</span><span class="keyword">, </span><span class="default">$binrand</span><span class="keyword">);<br />    </span><span class="default">$hexnumber </span><span class="keyword">= </span><span class="default">$hexnumber</span><span class="keyword">[</span><span class="string">''</span><span class="keyword">];<br />    </span><span class="default">$numlength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hexnumber</span><span class="keyword">);<br />    </span><span class="default">$decnumber </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;= </span><span class="default">$numlength</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />    {<br />        </span><span class="default">$place </span><span class="keyword">= </span><span class="default">$numlength </span><span class="keyword">- </span><span class="default">$x</span><span class="keyword">;<br />        </span><span class="default">$operand </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hexnumber</span><span class="keyword">,</span><span class="default">$place</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br />        </span><span class="default">$exponent </span><span class="keyword">= </span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">16</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$decValue </span><span class="keyword">= </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$operand</span><span class="keyword">, </span><span class="default">$exponent</span><span class="keyword">);<br />        </span><span class="default">$decnumber </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$decValue</span><span class="keyword">, </span><span class="default">$decnumber</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$decnumber</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31268">  <div class="votes">
    <div id="Vu31268">
    <a href="/manual/vote-note.php?id=31268&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31268">
    <a href="/manual/vote-note.php?id=31268&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31268" title="50% like this...">
    0
    </div>
  </div>
  <a href="#31268" class="name">
  <strong class="user"><em>pulstar at mail dot com</em></strong></a><a class="genanchor" href="#31268"> &para;</a><div class="date" title="2003-04-15 05:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31268">
<div class="phpcode"><code><span class="html">A little comment for the simplified example above: you can do base converting without BCMath functions using only math operators, but you will not able to manage very large values or work with strings to compress or scramble data. If you have BCMath installed in your system it worth use it for this.</span></code></div>
  </div>
 </div>
  <div class="note" id="29938">  <div class="votes">
    <div id="Vu29938">
    <a href="/manual/vote-note.php?id=29938&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29938">
    <a href="/manual/vote-note.php?id=29938&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29938" title="50% like this...">
    0
    </div>
  </div>
  <a href="#29938" class="name">
  <strong class="user"><em>oliver at summertime dot net</em></strong></a><a class="genanchor" href="#29938"> &para;</a><div class="date" title="2003-03-01 10:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29938">
<div class="phpcode"><code><span class="html">A simplier Version of the Script above:<br /><br />function dec2base($dec, $digits) {<br /> $value = "";<br /> $base  = strlen($digits);<br /> while($dec&gt;$base-1) {<br />  $rest = $dec % $base;<br />  $dec  = $dec / $base;<br />  $value = $digits[$rest].$value;<br /> }<br /> $value = $digits[intval($dec)].$value;<br /> return (string) $value;<br />}<br /><br />function base2dec($value, $digits) {<br /> $value = strtoupper($value);<br /> $base  = strlen($digits);<br /> $size  = strlen($value);<br /> $dec   = '0';<br /> for ($loop = 0; $loop&lt;$size; $loop++) {<br />  $element = strpos($digits,$value[$loop]);<br />  $power   = pow($base,$size-$loop-1);<br />  $dec    += $element * $power;<br /> }<br /> return (string) $dec;<br />}<br /><br />$digits = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";<br />echo dec2base('1000', $digits);</span></code></div>
  </div>
 </div>
  <div class="note" id="119510">  <div class="votes">
    <div id="Vu119510">
    <a href="/manual/vote-note.php?id=119510&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119510">
    <a href="/manual/vote-note.php?id=119510&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119510" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#119510" class="name">
  <strong class="user"><em>kmeissen at gmx dot de</em></strong></a><a class="genanchor" href="#119510"> &para;</a><div class="date" title="2016-06-24 10:05"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119510">
<div class="phpcode"><code><span class="html">/*<br /> * Computes ln(x) very fast even with high resolution<br /> * uses standard log()-function to optimise convergence of<br /> * ln(1+x) = x - x*x/2 + x*x*x/3 - ...<br /> * <br /> * example:<br /> * bcscale(1000);<br /> * $x = bcln("1000000");<br /> *<br /> * result:<br /> * $x = 13.81551055796427410410794872810618524560660893...<br /> * within 0.9 sec, that are 80 iterations<br /> * <br /> * @author Klaus Meissen, Germany<br /> * @license Public domain<br />*/<br />function bcln($value) // value &gt; 0<br />{<br />    $m = (string)log($value);<br />    $x = bcsub(bcdiv($value,bcexp($m)),"1");<br />    $res = "0";<br />    $xpow = "1";<br />    $i=0;<br />    do<br />    {<br />        $i++;<br />        $xpow = bcmul($xpow,$x);<br />        $sum = bcdiv($xpow, $i);<br />        if ($i%2==1)<br />        {<br />            $res = bcadd($res, $sum);<br />        }else{<br />            $res = bcsub($res, $sum);<br />        }<br />    }<br />    while (bccomp($sum, '0'));<br />    return bcadd($res,$m);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="85084">  <div class="votes">
    <div id="Vu85084">
    <a href="/manual/vote-note.php?id=85084&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85084">
    <a href="/manual/vote-note.php?id=85084&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85084" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#85084" class="name">
  <strong class="user"><em>Charles</em></strong></a><a class="genanchor" href="#85084"> &para;</a><div class="date" title="2008-08-13 10:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85084">
<div class="phpcode"><code><span class="html">Function to round bc string:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">bcround</span><span class="keyword">(</span><span class="default">$strval</span><span class="keyword">, </span><span class="default">$precision </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />    if (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$strval</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">)) &amp;&amp; (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$strval</span><span class="keyword">) - </span><span class="default">$pos </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) &gt; </span><span class="default">$precision</span><span class="keyword">) {
<br />        </span><span class="default">$zeros </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"0"</span><span class="keyword">, </span><span class="default">$precision</span><span class="keyword">);
<br />        return </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$strval</span><span class="keyword">, </span><span class="string">"0.</span><span class="keyword">{</span><span class="default">$zeros</span><span class="keyword">}</span><span class="string">5"</span><span class="keyword">, </span><span class="default">$precision</span><span class="keyword">);
<br />    } else {
<br />        return </span><span class="default">$strval</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92888">  <div class="votes">
    <div id="Vu92888">
    <a href="/manual/vote-note.php?id=92888&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92888">
    <a href="/manual/vote-note.php?id=92888&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92888" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#92888" class="name">
  <strong class="user"><em>francois dot barbier at gmail dot com</em></strong></a><a class="genanchor" href="#92888"> &para;</a><div class="date" title="2009-08-12 10:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92888">
<div class="phpcode"><code><span class="html">As "benjcarson at digitaljunkies dot ca" (<a href="http://www.php.net/ref.bc.php#23038" rel="nofollow" target="_blank">http://www.php.net/ref.bc.php#23038</a>) noted in the first two comments, bcmath doesn't accept exponential notation.<br /><br />Moreover, you might have other problems if you feed the bcmath functions directly with floating point numbers.<br />Consider the following example:<br /><span class="default">&lt;?php<br />bcscale</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">0.8</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">0.7</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">((string) </span><span class="default">$a</span><span class="keyword">);   </span><span class="comment">// string(3) "0.8"<br /></span><span class="default">var_dump</span><span class="keyword">((string) </span><span class="default">$b</span><span class="keyword">);   </span><span class="comment">// string(3) "0.a"<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">// string(3) "1.5"<br /></span><span class="default">setLocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'fr_BE.UTF-8'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">((string) </span><span class="default">$a</span><span class="keyword">);   </span><span class="comment">// string(3) "0,8" --&gt; note the comma<br /></span><span class="default">var_dump</span><span class="keyword">((string) </span><span class="default">$b</span><span class="keyword">);   </span><span class="comment">// string(3) "0,7" --&gt; note the comma<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">// string(3) "0.0"<br /></span><span class="default">?&gt;<br /></span>The floating point numbers passed to the bcadd() function are automatically converted to string using the localized decimal separator. However, the bcmath functions always use a full stop, which results in the last result being incorrect.<br /><br />Below is a function to convert floating point numbers to strings correctly. It takes care of the decimal separator and the exponential notation. It also preserve the precision without drifting away (e.g. 1.0 doesn't become 0.99999...)<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Convert a number to locale independent string without E notation and without<br /> * loosing precision<br /> *<br /> * @param      int/float/double $fNumber The number to convert.<br /> * @return     string The locale independent converted number.<br /> */<br /></span><span class="keyword">function </span><span class="default">bcconv</span><span class="keyword">(</span><span class="default">$fNumber</span><span class="keyword">)<br />{<br />    </span><span class="default">$sAppend </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$iDecimals </span><span class="keyword">= </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'precision'</span><span class="keyword">) - </span><span class="default">floor</span><span class="keyword">(</span><span class="default">log10</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$fNumber</span><span class="keyword">)));<br />    if (</span><span class="default">0 </span><span class="keyword">&gt; </span><span class="default">$iDecimals</span><span class="keyword">)<br />    {<br />        </span><span class="default">$fNumber </span><span class="keyword">*= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">$iDecimals</span><span class="keyword">);<br />        </span><span class="default">$sAppend </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'0'</span><span class="keyword">, -</span><span class="default">$iDecimals</span><span class="keyword">);<br />        </span><span class="default">$iDecimals </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br />    return </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$fNumber</span><span class="keyword">, </span><span class="default">$iDecimals</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">).</span><span class="default">$sAppend</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><span class="default">&lt;?php<br />setLocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'fr_BE.UTF-8'</span><span class="keyword">); </span><span class="comment">// decimal separator is now a comma<br /></span><span class="default">$precision </span><span class="keyword">= </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'precision'</span><span class="keyword">) + </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// should give 16<br /></span><span class="default">bcscale</span><span class="keyword">(</span><span class="default">$precision</span><span class="keyword">);<br /></span><span class="default">$big </span><span class="keyword">= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">$precision</span><span class="keyword">);<br /></span><span class="default">$small </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">/ </span><span class="default">$big</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">bcconv</span><span class="keyword">(</span><span class="default">$big </span><span class="keyword">+ </span><span class="default">$small</span><span class="keyword">));               </span><span class="comment">// string(17) "10000000000000000"<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$big</span><span class="keyword">, </span><span class="default">$small</span><span class="keyword">));                 </span><span class="comment">// string(18) "0.0000000000000000"<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">bcconv</span><span class="keyword">(</span><span class="default">$big</span><span class="keyword">), </span><span class="default">bcconv</span><span class="keyword">(</span><span class="default">$small</span><span class="keyword">))); </span><span class="comment">// string(34) "10000000000000000.0000000000000001"<br /></span><span class="default">?&gt;<br /></span>The first result's precision loss is due to PHP's internal floating point numbers' representation.<br />The second result is wrong because of the localized decimal separator.<br />Finally, the last result is correct.</span></code></div>
  </div>
 </div>
  <div class="note" id="25336">  <div class="votes">
    <div id="Vu25336">
    <a href="/manual/vote-note.php?id=25336&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25336">
    <a href="/manual/vote-note.php?id=25336&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25336" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#25336" class="name">
  <strong class="user"><em>pulstar at mail dot com</em></strong></a><a class="genanchor" href="#25336"> &para;</a><div class="date" title="2002-09-19 08:27"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25336">
<div class="phpcode"><code><span class="html">A good use for BCMath functions:<br />The functions below can convert a number in any base (from 2 to 256) to its decimal value and vice-versa.<br /><br />// convert a decimal value to any other base value<br />function dec2base($dec,$base,$digits=FALSE) {<br />    if($base&lt;2 or $base&gt;256) die("Invalid Base: ".$base);<br />    bcscale(0);<br />    $value="";<br />    if(!$digits) $digits=digits($base);<br />    while($dec&gt;$base-1) {<br />        $rest=bcmod($dec,$base);<br />        $dec=bcdiv($dec,$base);<br />        $value=$digits[$rest].$value;<br />    }<br />    $value=$digits[intval($dec)].$value;<br />    return (string) $value;<br />}<br /><br />// convert another base value to its decimal value<br />function base2dec($value,$base,$digits=FALSE) {<br />    if($base&lt;2 or $base&gt;256) die("Invalid Base: ".$base);<br />    bcscale(0);<br />    if($base&lt;37) $value=strtolower($value);<br />    if(!$digits) $digits=digits($base);<br />    $size=strlen($value);<br />    $dec="0";<br />    for($loop=0;$loop&lt;$size;$loop++) {<br />        $element=strpos($digits,$value[$loop]);<br />        $power=bcpow($base,$size-$loop-1);<br />        $dec=bcadd($dec,bcmul($element,$power));<br />    }<br />    return (string) $dec;<br />}<br /><br />function digits($base) {<br />    if($base&gt;64) {<br />        $digits="";<br />        for($loop=0;$loop&lt;256;$loop++) {<br />            $digits.=chr($loop);<br />        }<br />    } else {<br />        $digits ="0123456789abcdefghijklmnopqrstuvwxyz";<br />        $digits.="ABCDEFGHIJKLMNOPQRSTUVWXYZ-_";<br />    }<br />    $digits=substr($digits,0,$base);<br />    return (string) $digits;<br />}<br /><br />The purpose of digits() function above is to supply the characters that will be used as digits for the base you want. NOTE: You can use any characters for that when you convert to another base, but when you convert again to the decimal base, you need to use the same characters or you will get another unexpected result.</span></code></div>
  </div>
 </div>
  <div class="note" id="113463">  <div class="votes">
    <div id="Vu113463">
    <a href="/manual/vote-note.php?id=113463&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113463">
    <a href="/manual/vote-note.php?id=113463&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113463" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#113463" class="name">
  <strong class="user"><em>mail at djordjeungar dot com</em></strong></a><a class="genanchor" href="#113463"> &para;</a><div class="date" title="2013-10-14 01:43"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113463">
<div class="phpcode"><code><span class="html">Inspired by dawidgarus' implementation, here's my simple bc math helper, it does not support function calls, but supports boolean comparisons and is about ~40% faster.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">bc</span><span class="keyword">() {<br />    </span><span class="default">$argv </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">"(</span><span class="keyword">{</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">)"</span><span class="keyword">);<br /><br />    </span><span class="default">$operations </span><span class="keyword">= array();<br />    if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'^'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) </span><span class="default">$operations</span><span class="keyword">[] = </span><span class="string">'\^'</span><span class="keyword">;<br />    if (</span><span class="default">strpbrk</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'*/%'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) </span><span class="default">$operations</span><span class="keyword">[] = </span><span class="string">'[\*\/\%]'</span><span class="keyword">;<br />    if (</span><span class="default">strpbrk</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'+-'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) </span><span class="default">$operations</span><span class="keyword">[] = </span><span class="string">'[\+\-]'</span><span class="keyword">;<br />    if (</span><span class="default">strpbrk</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'&lt;&gt;!='</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) </span><span class="default">$operations</span><span class="keyword">[] = </span><span class="string">'&lt;|&gt;|=|&lt;=|==|&gt;=|!=|&lt;&gt;'</span><span class="keyword">;<br /><br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\$([0-9\.]+)/e'</span><span class="keyword">, </span><span class="string">'$argv[$1]'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    while (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\(([^\)\(]*)\)/'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">)) {<br />        foreach (</span><span class="default">$operations </span><span class="keyword">as </span><span class="default">$operation</span><span class="keyword">) {<br />            if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/([+-]{0,1}[0-9\.]+)(</span><span class="default">$operation</span><span class="string">)([+-]{0,1}[0-9\.]+)/"</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">)) {<br />                switch(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) {<br />                    case </span><span class="string">'+'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                    case </span><span class="string">'-'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                    case </span><span class="string">'*'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                    case </span><span class="string">'/'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                    case </span><span class="string">'%'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcmod</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                    case </span><span class="string">'^'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); break;<br />                    case </span><span class="string">'=='</span><span class="keyword">:<br />                    case </span><span class="string">'='</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) == </span><span class="default">0</span><span class="keyword">; break;<br />                    case </span><span class="string">'&gt;'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) == </span><span class="default">1</span><span class="keyword">; break;<br />                    case </span><span class="string">'&lt;'</span><span class="keyword">:  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) ==-</span><span class="default">1</span><span class="keyword">; break;<br />                    case </span><span class="string">'&gt;='</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) &gt;= </span><span class="default">0</span><span class="keyword">; break;<br />                    case </span><span class="string">'&lt;='</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) &lt;= </span><span class="default">0</span><span class="keyword">; break;<br />                    case </span><span class="string">'&lt;&gt;'</span><span class="keyword">:<br />                    case </span><span class="string">'!='</span><span class="keyword">: </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) != </span><span class="default">0</span><span class="keyword">; break;<br />                }<br />                </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$result</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />            }<br />        }<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$string</span><span class="keyword">);<br />    }<br /><br />    return </span><span class="default">$string</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125284">  <div class="votes">
    <div id="Vu125284">
    <a href="/manual/vote-note.php?id=125284&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125284">
    <a href="/manual/vote-note.php?id=125284&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125284" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#125284" class="name">
  <strong class="user"><em>eyadbere at gmail dot com</em></strong></a><a class="genanchor" href="#125284"> &para;</a><div class="date" title="2020-08-18 11:02"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125284">
<div class="phpcode"><code><span class="html">If your calculations involves input from users don't forget to set a limit on the range and/or the length of the input because very huge numbers requires intensive processing and you might reach a point where your server can't do any further processing</span></code></div>
  </div>
 </div>
  <div class="note" id="72691">  <div class="votes">
    <div id="Vu72691">
    <a href="/manual/vote-note.php?id=72691&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72691">
    <a href="/manual/vote-note.php?id=72691&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72691" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#72691" class="name">
  <strong class="user"><em>mgcclx at gmail dot com</em></strong></a><a class="genanchor" href="#72691"> &para;</a><div class="date" title="2007-01-29 06:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72691">
<div class="phpcode"><code><span class="html">I wrote this function with many BCMath functions. It should be the fastest function in PHP to find the number pi into any precision, my test is it generate 2000 digits after the dot in 8 seconds. I don't think you need anything more than that.<br /><span class="default">&lt;?php<br /></span><span class="comment">//bcpi function with Gauss-Legendre algorithm<br />//by Chao Xu (Mgccl)<br /></span><span class="keyword">function </span><span class="default">bcpi</span><span class="keyword">(</span><span class="default">$precision</span><span class="keyword">){<br />    </span><span class="default">$limit </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">log</span><span class="keyword">(</span><span class="default">$precision</span><span class="keyword">)/</span><span class="default">log</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">))-</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">bcscale</span><span class="keyword">(</span><span class="default">$precision</span><span class="keyword">+</span><span class="default">6</span><span class="keyword">);<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">bcsqrt</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">));<br />    </span><span class="default">$t </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">;<br />    </span><span class="default">$p </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    while(</span><span class="default">$n </span><span class="keyword">&lt; </span><span class="default">$limit</span><span class="keyword">){<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">),</span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">bcsqrt</span><span class="keyword">(</span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">));<br />        </span><span class="default">$t </span><span class="keyword">= </span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">, </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">,</span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">),</span><span class="default">2</span><span class="keyword">)));<br />        </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">;<br />        </span><span class="default">$p </span><span class="keyword">= </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">);<br />        ++</span><span class="default">$n</span><span class="keyword">;<br />    }<br />    return </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">),</span><span class="default">2</span><span class="keyword">),</span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">),</span><span class="default">$precision</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73522">  <div class="votes">
    <div id="Vu73522">
    <a href="/manual/vote-note.php?id=73522&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73522">
    <a href="/manual/vote-note.php?id=73522&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73522" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#73522" class="name">
  <strong class="user"><em>udochen at gmail dot com</em></strong></a><a class="genanchor" href="#73522"> &para;</a><div class="date" title="2007-02-27 11:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73522">
<div class="phpcode"><code><span class="html">Code below implements standard rounding on 5 or higer round up, else don't round.  There wasn't a round function for the BC functions, so here is a simple one that works. Same args as round, except takes strings and returns a string for more BC operations.<br /><br />----------------<br /><br />function roundbc($x, $p) {<br /><br />     $x = trim($x);<br />     $data = explode(".",$x);<br /><br />     if(substr($data[1],$p,1) &gt;= "5") {<br /><br />           //generate the add string.<br />           $i=0;<br />           $addString = "5";<br />           while($i &lt; $p) {<br />               $addString = "0" . $addString;<br />               $i++;<br />           }//end while.<br />           $addString = "." . $addString;<br /><br />           //now add the addString to the original fraction.<br />           $sum = bcadd($data[0] . "." . $data   [1],$addString,$p+1);<br /><br />           //explode the result.<br />           $sumData = explode(".",$sum);<br /><br />           //now, return the correct precision on the rounded number.<br />           return $sumData[0] . "." . substr($sumData[1],0,$p);<br /><br />      } else {<br /><br />           //don't round the value and return the orignal to the desired<br />           //precision or less.<br />           return $data[0] . "." . substr($data[1],0,$p);<br /><br />      }//end if/else.<br /><br />   }//end roundbc.</span></code></div>
  </div>
 </div>
  <div class="note" id="46965">  <div class="votes">
    <div id="Vu46965">
    <a href="/manual/vote-note.php?id=46965&amp;page=ref.bc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46965">
    <a href="/manual/vote-note.php?id=46965&amp;page=ref.bc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46965" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#46965" class="name">
  <strong class="user"><em>Diabolos at GMail dot com</em></strong></a><a class="genanchor" href="#46965"> &para;</a><div class="date" title="2004-10-28 11:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46965">
<div class="phpcode"><code><span class="html">Here's a function to compute the natural exponential function in arbitrary precision using the basic bcMath arithmetic operations.<br /><br />EXAMPLE:<br />To compute the exponential function of 1.7 to 36 decimals:<br /><br />$y = bcExp("1.7", 36);<br /><br />The result:<br />4.331733759839529271053448625299468628<br /><br />would be returned in variable $y<br /><br />NOTE:<br />In practice, the last couple of digits may be inaccurate due to small rounding errors.  If you require a specific degree of precision, always compute 3-4 decimals beyond the required precision.<br /><br />The program code for the natural exponential function is:<br />******************************************<br /><br />  Function bcExp($xArg, $NumDecimals)<br /><br />{<br />   $x = Trim($xArg);<br /><br />   $PrevSum  = $x - 1;<br />   $CurrTerm = 1;<br />   $CurrSum  = bcAdd("1", $x, $NumDecimals);<br />   $n        = 1;<br /><br />   While (bcComp($CurrSum, $PrevSum, $NumDecimals))<br /><br />  {<br />   $PrevSum  = $CurrSum;<br />   $CurrTerm = bcDiv(bcMul($CurrTerm, $x, $NumDecimals), $n + 1, $NumDecimals);<br />   $CurrSum  = bcAdd($CurrSum, $CurrTerm, $NumDecimals);<br /><br />   $n++;<br />  }<br /><br />   Return $CurrSum;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.bc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.bc.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.bc.php">BC Math</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.bc.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="bc.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="ref.bc.php" title="BC Math Functions">BC Math Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.bcmath-number.php" title="BcMath\Number">BcMath\Number</a>
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
