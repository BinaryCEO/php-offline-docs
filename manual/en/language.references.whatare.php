<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: What References Are - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.references.whatare.php">
 <link rel="shorturl" href="https://www.php.net/references.whatare">
 <link rel="alternate" href="https://www.php.net/references.whatare" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.references.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.references.php">
 <link rel="next" href="https://www.php.net/manual/en/language.references.whatdo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.references.whatare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.references.whatare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.references.whatare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.references.whatare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.references.whatare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.references.whatare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.references.whatare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.references.whatare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.references.whatare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.references.whatare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.references.whatare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="What References Are" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: What References Are - Manual" />
<meta name="twitter:description" content="What References Are" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: What References Are - Manual" />
<meta itemprop="description" content="What References Are" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="What References Are" />

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
        <a href="language.references.whatdo.php">
          What References Do &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.references.php">
          &laquo; References Explained        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.references.php'>References Explained</a></li>      </ul>
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
            <option value='en/language.references.whatare.php' selected="selected">English</option>
            <option value='de/language.references.whatare.php'>German</option>
            <option value='es/language.references.whatare.php'>Spanish</option>
            <option value='fr/language.references.whatare.php'>French</option>
            <option value='it/language.references.whatare.php'>Italian</option>
            <option value='ja/language.references.whatare.php'>Japanese</option>
            <option value='pt_BR/language.references.whatare.php'>Brazilian Portuguese</option>
            <option value='ru/language.references.whatare.php'>Russian</option>
            <option value='tr/language.references.whatare.php'>Turkish</option>
            <option value='uk/language.references.whatare.php'>Ukrainian</option>
            <option value='zh/language.references.whatare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.references.whatare" class="sect1">
   <h2 class="title">What References Are</h2>
   <p class="simpara">
    References in PHP are a means to access the same variable content
    by different names. They are not like C pointers; for instance,
    you cannot perform pointer arithmetic using them, they are not
    actual memory addresses, and so on. See
    <a href="language.references.arent.php" class="xref">What References Are Not</a> for more
    information. Instead, they are
    <a href="features.gc.refcounting-basics.php" class="link">symbol table</a>
    aliases. Note that in PHP, variable name and variable content are different, so the same
    content can have different names. The closest analogy is with
    Unix filenames and files - variable names are directory entries,
    while variable content is the file itself. References can be
    likened to hardlinking in Unix filesystem.
   </p>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/references.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.references.whatare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.references.whatare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.whatare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121734">  <div class="votes">
    <div id="Vu121734">
    <a href="/manual/vote-note.php?id=121734&amp;page=language.references.whatare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121734">
    <a href="/manual/vote-note.php?id=121734&amp;page=language.references.whatare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121734" title="79% like this...">
    239
    </div>
  </div>
  <a href="#121734" class="name">
  <strong class="user"><em>273118949 at qq dot com</em></strong></a><a class="genanchor" href="#121734"> &para;</a><div class="date" title="2017-10-07 04:24"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121734">
<div class="phpcode"><code><span class="html">it just likes a person who has two different names.</span></code></div>
  </div>
 </div>
  <div class="note" id="122978">  <div class="votes">
    <div id="Vu122978">
    <a href="/manual/vote-note.php?id=122978&amp;page=language.references.whatare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122978">
    <a href="/manual/vote-note.php?id=122978&amp;page=language.references.whatare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122978" title="68% like this...">
    49
    </div>
  </div>
  <a href="#122978" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122978"> &para;</a><div class="date" title="2018-07-26 03:11"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122978">
<div class="phpcode"><code><span class="html">Unlike in C, PHP references are not treated as pre-dereferenced pointers, but as complete aliases.
<br />
<br />The data that they are aliasing ("referencing") will not become available for garbage collection until all references to it have been removed. 
<br />
<br />"Regular" variables are themselves considered references, and are not treated differently from variables assigned using =&amp; for the purposes of garbage collection.
<br />
<br />The following examples are provided for clarification.
<br />
<br />1) When treated as a variable containing a value, references behave as expected. However, they are in fact objects that *reference* the original data.
<br />
<br /><span class="default">&lt;?php 
<br />$var </span><span class="keyword">= </span><span class="string">"foo"</span><span class="keyword">;
<br /></span><span class="default">$ref1 </span><span class="keyword">=&amp; </span><span class="default">$var</span><span class="keyword">; </span><span class="comment">// new object that references $var
<br /></span><span class="default">$ref2 </span><span class="keyword">=&amp; </span><span class="default">$ref1</span><span class="keyword">; </span><span class="comment">// references $var directly, not $ref1!!!!!
<br />
<br /></span><span class="keyword">echo </span><span class="default">$ref1</span><span class="keyword">; </span><span class="comment">// &gt;foo
<br />
<br /></span><span class="keyword">unset(</span><span class="default">$ref1</span><span class="keyword">);
<br />
<br />echo </span><span class="default">$ref1</span><span class="keyword">; </span><span class="comment">// &gt;Notice:  Undefined variable: ref1
<br /></span><span class="keyword">echo </span><span class="default">$ref2</span><span class="keyword">; </span><span class="comment">// &gt;foo
<br /></span><span class="keyword">echo </span><span class="default">$var</span><span class="keyword">; </span><span class="comment">// &gt;foo
<br /></span><span class="default">?&gt;
<br /></span>
<br />2) When accessed via reference, the original data will not be removed until *all* references to it have been removed. This includes both references and "regular" variables assigned without the &amp; operator, and there are no distinctions made between the two for the purpose of garbage collection.
<br />
<br /><span class="default">&lt;?php 
<br />$var </span><span class="keyword">= </span><span class="string">"foo"</span><span class="keyword">;
<br /></span><span class="default">$ref </span><span class="keyword">=&amp; </span><span class="default">$var</span><span class="keyword">;
<br />
<br />unset(</span><span class="default">$var</span><span class="keyword">);
<br />
<br />echo </span><span class="default">$var</span><span class="keyword">; </span><span class="comment">// &gt;Notice:  Undefined variable: var
<br /></span><span class="keyword">echo </span><span class="default">$ref</span><span class="keyword">; </span><span class="comment">// &gt;foo
<br /></span><span class="default">?&gt;
<br /></span>
<br />3) To remove the original data without removing all references to it, simply set it to null.
<br />
<br /><span class="default">&lt;?php 
<br />$var </span><span class="keyword">= </span><span class="string">"foo"</span><span class="keyword">;
<br /></span><span class="default">$ref </span><span class="keyword">=&amp; </span><span class="default">$var</span><span class="keyword">;
<br />
<br /></span><span class="default">$ref </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;
<br />
<br />echo </span><span class="default">$var</span><span class="keyword">; </span><span class="comment">// Value is NULL, so nothing prints
<br /></span><span class="keyword">echo </span><span class="default">$ref</span><span class="keyword">; </span><span class="comment">// Value is NULL, so nothing prints
<br /></span><span class="default">?&gt;
<br /></span>
<br />4) Placing data in an array also counts as adding one more reference to it, for the purposes of garbage collection.
<br />
<br />For more info, see <a href="http://php.net/manual/en/features.gc.refcounting-basics.php" rel="nofollow" target="_blank">http://php.net/manual/en/features.gc.refcounting-basics.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="123692">  <div class="votes">
    <div id="Vu123692">
    <a href="/manual/vote-note.php?id=123692&amp;page=language.references.whatare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123692">
    <a href="/manual/vote-note.php?id=123692&amp;page=language.references.whatare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123692" title="65% like this...">
    17
    </div>
  </div>
  <a href="#123692" class="name">
  <strong class="user"><em>aldo dot caruso at argencasas dot com</em></strong></a><a class="genanchor" href="#123692"> &para;</a><div class="date" title="2019-03-13 04:50"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123692">
<div class="phpcode"><code><span class="html">The following three code snippets show the effect of using references in scalar variables, arrays and objects under different circumstances.<br /><br />In any case the result is the expected one if you stick to the concept that a reference is an alias to a variable. After assigning by reference ( no matter if $a =&amp; $b or $b =&amp; $a ) both variable names refer to the same variable.<br /><br />References with scalars<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />References are aliases for the same variable<br />*/<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br /><br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 2,2<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3,3<br /><br />// Variables can be bound before being assigned<br /></span><span class="default">$c </span><span class="keyword">=&amp; </span><span class="default">$d</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$c</span><span class="string">,</span><span class="default">$d</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 4,4<br /></span><span class="default">?&gt;<br /></span><br />References with arrays<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />Array elements referencing scalar variables<br />*/<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= array(&amp;</span><span class="default">$a</span><span class="keyword">, &amp;</span><span class="default">$b</span><span class="keyword">);<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br />echo </span><span class="string">"c: </span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string">,</span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3,4<br /><br /></span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">6</span><span class="keyword">;<br />echo </span><span class="string">"a,b: </span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 5,6<br /><br />/*<br />Reference between arrays<br />*/<br /><br /></span><span class="default">$d </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$e </span><span class="keyword">=&amp; </span><span class="default">$d</span><span class="keyword">;<br /><br /></span><span class="default">$d</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">4</span><span class="keyword">;<br />echo </span><span class="string">"e: </span><span class="default">$e</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string">,</span><span class="default">$e</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3,4<br /><br /></span><span class="default">$e</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$e</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">6</span><span class="keyword">;<br />echo </span><span class="string">"d: </span><span class="default">$d</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string">,</span><span class="default">$d</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 5,6<br /><br /></span><span class="default">$e </span><span class="keyword">= </span><span class="default">7</span><span class="keyword">;<br />echo </span><span class="string">"d: </span><span class="default">$d</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 7 ( $d is no more an array, but an integer )<br /><br />/*<br />Iterating an array of references using foreach construct<br />*/<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$f </span><span class="keyword">= array(&amp;</span><span class="default">$a</span><span class="keyword">,&amp;</span><span class="default">$b</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$f </span><span class="keyword">as </span><span class="default">$x</span><span class="keyword">) </span><span class="comment">// If $x is assigned by value it doesn't change referred variables.<br />  </span><span class="default">$x </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />echo </span><span class="string">"a,b: </span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 1,2<br /><br /></span><span class="keyword">foreach(</span><span class="default">$f </span><span class="keyword">as &amp;</span><span class="default">$x</span><span class="keyword">) </span><span class="comment">// If $x is assigned by reference it changes referred variables.<br />  </span><span class="default">$x </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />echo </span><span class="string">"a,b: </span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3,3<br /><br />// Be aware that, after the loop, $x still references $f[1] and so $b<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br />echo </span><span class="string">"a,b: </span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3,4 ( $b affected )<br /><br />// To avoid previous side effects it is advisable to unset x, unlinking it from $f[1] and $b<br /></span><span class="keyword">unset(</span><span class="default">$x</span><span class="keyword">);<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br />echo </span><span class="string">"a,b: </span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3,4 ( $b not affected )<br /></span><span class="default">?&gt;<br /></span><br />References with objects<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />Object property referencing a scalar variable<br />*/<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />echo </span><span class="string">"b-&gt;x: </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 2<br /><br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />echo </span><span class="string">"a: </span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3<br /><br />/* Reference between objects */<br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">=&amp; </span><span class="default">$c</span><span class="keyword">;<br /><br /></span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />echo </span><span class="string">"c-&gt;x: </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 2<br /><br /></span><span class="default">$d </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">y </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />echo </span><span class="string">"c-&gt;y: </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">y</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// 3<br /></span><span class="keyword">echo </span><span class="string">"c-&gt;x: </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="string">\n"</span><span class="keyword">; </span><span class="comment">// Undefined property: stdClass::$x<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.references.whatare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.whatare.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.references.php">References Explained</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="language.references.whatare.php" title="What References Are">What References Are</a>
                        </li>
                                                <li class="">
                            <a href="language.references.whatdo.php" title="What References Do">What References Do</a>
                        </li>
                                                <li class="">
                            <a href="language.references.arent.php" title="What References Are Not">What References Are Not</a>
                        </li>
                                                <li class="">
                            <a href="language.references.pass.php" title="Passing by Reference">Passing by Reference</a>
                        </li>
                                                <li class="">
                            <a href="language.references.return.php" title="Returning References">Returning References</a>
                        </li>
                                                <li class="">
                            <a href="language.references.unset.php" title="Unsetting References">Unsetting References</a>
                        </li>
                                                <li class="">
                            <a href="language.references.spot.php" title="Spotting References">Spotting References</a>
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
