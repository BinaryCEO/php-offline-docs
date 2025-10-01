<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SPL Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.spl.php">
 <link rel="shorturl" href="https://www.php.net/spl">
 <link rel="alternate" href="https://www.php.net/spl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.spl.php">
 <link rel="prev" href="https://www.php.net/manual/en/spltempfileobject.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/function.class-implements.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.spl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.spl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.spl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.spl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.spl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.spl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.spl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.spl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.spl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.spl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.spl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SPL Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SPL Functions - Manual" />
<meta name="twitter:description" content="SPL Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SPL Functions - Manual" />
<meta itemprop="description" content="SPL Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SPL Functions" />

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
        <a href="function.class-implements.php">
          class_implements &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="spltempfileobject.construct.php">
          &laquo; SplTempFileObject::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      </ul>
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
            <option value='en/ref.spl.php' selected="selected">English</option>
            <option value='de/ref.spl.php'>German</option>
            <option value='es/ref.spl.php'>Spanish</option>
            <option value='fr/ref.spl.php'>French</option>
            <option value='it/ref.spl.php'>Italian</option>
            <option value='ja/ref.spl.php'>Japanese</option>
            <option value='pt_BR/ref.spl.php'>Brazilian Portuguese</option>
            <option value='ru/ref.spl.php'>Russian</option>
            <option value='tr/ref.spl.php'>Turkish</option>
            <option value='uk/ref.spl.php'>Ukrainian</option>
            <option value='zh/ref.spl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.spl" class="reference">
 <h1 class="title">SPL Functions</h1>

 












































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.class-implements.php">class_implements</a> — Return the interfaces which are implemented by the given class or interface</li><li><a href="function.class-parents.php">class_parents</a> — Return the parent classes of the given class</li><li><a href="function.class-uses.php">class_uses</a> — Return the traits used by the given class</li><li><a href="function.iterator-apply.php">iterator_apply</a> — Call a function for every element in an iterator</li><li><a href="function.iterator-count.php">iterator_count</a> — Count the elements in an iterator</li><li><a href="function.iterator-to-array.php">iterator_to_array</a> — Copy the iterator into an array</li><li><a href="function.spl-autoload.php">spl_autoload</a> — Default implementation for __autoload()</li><li><a href="function.spl-autoload-call.php">spl_autoload_call</a> — Try all registered __autoload() functions to load the requested class</li><li><a href="function.spl-autoload-extensions.php">spl_autoload_extensions</a> — Register and return default file extensions for spl_autoload</li><li><a href="function.spl-autoload-functions.php">spl_autoload_functions</a> — Return all registered __autoload() functions</li><li><a href="function.spl-autoload-register.php">spl_autoload_register</a> — Register given function as __autoload() implementation</li><li><a href="function.spl-autoload-unregister.php">spl_autoload_unregister</a> — Unregister given function as __autoload() implementation</li><li><a href="function.spl-classes.php">spl_classes</a> — Return available SPL classes</li><li><a href="function.spl-object-hash.php">spl_object_hash</a> — Return hash id for given object</li><li><a href="function.spl-object-id.php">spl_object_id</a> — Return the integer object handle for given object</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.spl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.spl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.spl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="60636">  <div class="votes">
    <div id="Vu60636">
    <a href="/manual/vote-note.php?id=60636&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60636">
    <a href="/manual/vote-note.php?id=60636&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60636" title="68% like this...">
    7
    </div>
  </div>
  <a href="#60636" class="name">
  <strong class="user"><em>ville&lt;/.&gt;witt&lt;/a&gt;gmail&lt;/.&gt;com</em></strong></a><a class="genanchor" href="#60636"> &para;</a><div class="date" title="2006-01-12 12:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60636">
<div class="phpcode"><code><span class="html">These to funtions has excatly the same output, the only diff. is in which directory iterator they use. I hope someone out there can use it:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">listfilesin1 </span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">= </span><span class="string">"."</span><span class="keyword">, </span><span class="default">$depth</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {
<br />    echo </span><span class="string">"Dir: "</span><span class="keyword">.</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />    foreach(new </span><span class="default">DirectoryIterator</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) as </span><span class="default">$file</span><span class="keyword">) {
<br />        if (!</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">isDot</span><span class="keyword">()) {
<br />            if (</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">()) {
<br />                </span><span class="default">$newdir </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">();
<br />                </span><span class="default">listfilesin1</span><span class="keyword">(</span><span class="default">$newdir</span><span class="keyword">, </span><span class="default">$depth</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);
<br />            } else {
<br />                echo </span><span class="string">"(</span><span class="default">$depth</span><span class="string">)"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">() . </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />            }
<br />        }
<br />    }
<br />}
<br />function </span><span class="default">listfilesin2 </span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">= </span><span class="string">"."</span><span class="keyword">, </span><span class="default">$depth</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {
<br />    echo </span><span class="string">"Dir: "</span><span class="keyword">.</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />    foreach(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) as </span><span class="default">$file</span><span class="keyword">) {
<br />        if (</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">hasChildren</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">)) {
<br />            </span><span class="default">$newdir </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">();
<br />            </span><span class="default">listfilesin2</span><span class="keyword">(</span><span class="default">$newdir</span><span class="keyword">, </span><span class="default">$depth</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);
<br />        } else {
<br />            echo </span><span class="string">"(</span><span class="default">$depth</span><span class="string">)"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">() . </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />        }
<br />    }
<br />}
<br /></span><span class="default">listfilesin</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83295">  <div class="votes">
    <div id="Vu83295">
    <a href="/manual/vote-note.php?id=83295&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83295">
    <a href="/manual/vote-note.php?id=83295&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83295" title="64% like this...">
    5
    </div>
  </div>
  <a href="#83295" class="name">
  <strong class="user"><em>loaded67 at hotmail dot com</em></strong></a><a class="genanchor" href="#83295"> &para;</a><div class="date" title="2008-05-19 01:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83295">
<div class="phpcode"><code><span class="html">For some application I needed to reverse some standard iterators. <br /><br />So I mocked up this flexible function.<br />Enjoy<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">reverse_iterator</span><span class="keyword">(</span><span class="default">Iterator $iterator</span><span class="keyword">){<br />    </span><span class="default">$type     </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">);<br />    </span><span class="default">$array     </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">iterator_to_array</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">);<br />    return new </span><span class="default">$type</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72790">  <div class="votes">
    <div id="Vu72790">
    <a href="/manual/vote-note.php?id=72790&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72790">
    <a href="/manual/vote-note.php?id=72790&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72790" title="66% like this...">
    3
    </div>
  </div>
  <a href="#72790" class="name">
  <strong class="user"><em>semperluc (at) yahoo._forgot_the_rest</em></strong></a><a class="genanchor" href="#72790"> &para;</a><div class="date" title="2007-02-01 01:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72790">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="comment">/*<br />How to store SPL Iterator results (rather than just echo-and-forget):<br /><br />The library of Iterators  are object based, so you need to trick the little rascals into an array.  <br />Here's how (two ways) ...<br /><br />1. Explicit typecasts: $a[] = (array)$Obj-&gt;objMethod();<br /><br />2. Array definition: $a[] = array( key =&gt; $Obj-&gt;objMethod() );<br /><br />Examples: DirectoryIterator()<br />*/<br /><br />// 1. explicity typecast object as array<br /></span><span class="keyword">foreach ( new </span><span class="default">DirectoryIterator</span><span class="keyword">(</span><span class="string">'./'</span><span class="keyword">) as </span><span class="default">$Item </span><span class="keyword">)<br />{<br />  </span><span class="default">$fname </span><span class="keyword">= (array)</span><span class="default">$Item</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">();<br />  </span><span class="default">$dir_listing</span><span class="keyword">[] = </span><span class="default">$fname</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />}<br /><br /></span><span class="comment">//<br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$dir_listing</span><span class="keyword">); unset(</span><span class="default">$dir_listing</span><span class="keyword">);<br />echo</span><span class="string">"&lt;/pre&gt;&lt;hr /&gt;"</span><span class="keyword">;<br /></span><span class="comment">//<br /><br />// or<br /><br />// 2. define array as key =&gt; object-&gt;method<br /></span><span class="keyword">foreach ( new </span><span class="default">DirectoryIterator</span><span class="keyword">(</span><span class="string">'./'</span><span class="keyword">) as </span><span class="default">$Item </span><span class="keyword">)<br />{<br />  </span><span class="default">$dir_listing</span><span class="keyword">[] = array (<br />    </span><span class="string">"fname" </span><span class="keyword">=&gt; </span><span class="default">$Item</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">(),        <br />    </span><span class="string">"path" </span><span class="keyword">=&gt; </span><span class="default">$Item</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">(),<br />    </span><span class="string">"size" </span><span class="keyword">=&gt; </span><span class="default">$Item</span><span class="keyword">-&gt;</span><span class="default">getSize</span><span class="keyword">(),                    <br />    </span><span class="string">"mtime" </span><span class="keyword">=&gt; </span><span class="default">$Item</span><span class="keyword">-&gt;</span><span class="default">getMTime</span><span class="keyword">() <br />  );<br />}<br /><br /></span><span class="comment">//<br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$dir_listing</span><span class="keyword">); unset(</span><span class="default">$dir_listing</span><span class="keyword">);<br />echo</span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br /></span><span class="comment">//<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84627">  <div class="votes">
    <div id="Vu84627">
    <a href="/manual/vote-note.php?id=84627&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84627">
    <a href="/manual/vote-note.php?id=84627&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84627" title="66% like this...">
    2
    </div>
  </div>
  <a href="#84627" class="name">
  <strong class="user"><em>benny at whitewashing dot de</em></strong></a><a class="genanchor" href="#84627"> &para;</a><div class="date" title="2008-07-22 09:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84627">
<div class="phpcode"><code><span class="html">I have to correct my implementation from before. The example before only supported correct read-access but failed on setting new values after creation of the ArrayMultiObject. Also i had to correct a bug that occured from my CopyPasteChange into the comment textarea.
<br />
<br />This snippet now hopefully implements a fully functional multidimensional array, represented by an ArrayObject:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">ArrayMultiObject </span><span class="keyword">extends </span><span class="default">ArrayObject
<br /></span><span class="keyword">{
<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$iterator_class </span><span class="keyword">= </span><span class="string">"ArrayIterator"</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$objects </span><span class="keyword">= array();
<br />        foreach(</span><span class="default">$array </span><span class="keyword">AS </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {
<br />            if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {
<br />                </span><span class="default">$objects</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = new </span><span class="default">ArrayMultiObject</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">, </span><span class="default">$iterator_class</span><span class="keyword">);
<br />            } else {
<br />                </span><span class="default">$objects</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />            }
<br />        }
<br />
<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$objects</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">, </span><span class="default">$iterator_class</span><span class="keyword">);
<br />    }
<br />
<br />    public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {
<br />            </span><span class="default">$value </span><span class="keyword">= new </span><span class="default">ArrayMultiObject</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />        }
<br />
<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57147">  <div class="votes">
    <div id="Vu57147">
    <a href="/manual/vote-note.php?id=57147&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57147">
    <a href="/manual/vote-note.php?id=57147&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57147" title="66% like this...">
    2
    </div>
  </div>
  <a href="#57147" class="name">
  <strong class="user"><em>helly at php dot net</em></strong></a><a class="genanchor" href="#57147"> &para;</a><div class="date" title="2005-09-25 02:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57147">
<div class="phpcode"><code><span class="html">There is a RecursiveFilterIterator that makes the above code much easier. And then ther is ParentIterator thta is already a filtering recursive iterator that only accepts elements that have children, with a RecursiveDirectoryIterator as inner iterator you would obviously get only the directories. Further more it ensures that it creates the correct children. All in all you simply need to do this:
<br />
<br />$it = new RecursiveDirectoryIterator($path);
<br />$it = new ParentIterator($it);
<br />$it = new RecursiveIteratorIteator($it);
<br />
<br />foreach($it as $dir  =&gt; $o) { ... }</span></code></div>
  </div>
 </div>
  <div class="note" id="41636">  <div class="votes">
    <div id="Vu41636">
    <a href="/manual/vote-note.php?id=41636&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41636">
    <a href="/manual/vote-note.php?id=41636&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41636" title="66% like this...">
    2
    </div>
  </div>
  <a href="#41636" class="name">
  <strong class="user"><em>phil &amp;ampersat; flatnet.net</em></strong></a><a class="genanchor" href="#41636"> &para;</a><div class="date" title="2004-04-17 03:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41636">
<div class="phpcode"><code><span class="html">Here's a sample implementation of the RecursiveDirectoryIterator class. It prints a simple treeview of a given directory:
<br /><span class="default">&lt;?php 
<br /></span><span class="keyword">function </span><span class="default">recurse</span><span class="keyword">(</span><span class="default">$it</span><span class="keyword">) { 
<br />   echo </span><span class="string">'&lt;ul&gt;'</span><span class="keyword">; 
<br />   for( ; </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()) { 
<br />       if(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">() &amp;&amp; !</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">isDot</span><span class="keyword">()) { 
<br />           </span><span class="default">printf</span><span class="keyword">(</span><span class="string">'&lt;li class="dir"&gt;%s&lt;/li&gt;'</span><span class="keyword">, </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()); 
<br />           if(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">hasChildren</span><span class="keyword">()) { 
<br />               </span><span class="default">$bleh </span><span class="keyword">= </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">getChildren</span><span class="keyword">(); 
<br />               echo </span><span class="string">'&lt;ul&gt;' </span><span class="keyword">. </span><span class="default">recurse</span><span class="keyword">(</span><span class="default">$bleh</span><span class="keyword">) . </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">; 
<br />           } 
<br />       } elseif(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">isFile</span><span class="keyword">()) { 
<br />           echo </span><span class="string">'&lt;li class="file"&gt;'</span><span class="keyword">. </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">() . </span><span class="string">' (' </span><span class="keyword">. </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">getSize</span><span class="keyword">(). </span><span class="string">' Bytes)&lt;/li&gt;'</span><span class="keyword">; 
<br />       } 
<br />   } 
<br />   echo </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">; 
<br />} 
<br />
<br /></span><span class="default">recurse</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="string">'D:/'</span><span class="keyword">)); 
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57663">  <div class="votes">
    <div id="Vu57663">
    <a href="/manual/vote-note.php?id=57663&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57663">
    <a href="/manual/vote-note.php?id=57663&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57663" title="62% like this...">
    2
    </div>
  </div>
  <a href="#57663" class="name">
  <strong class="user"><em>adove at booyahnetworks dot com</em></strong></a><a class="genanchor" href="#57663"> &para;</a><div class="date" title="2005-10-10 10:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57663">
<div class="phpcode"><code><span class="html">Something to note that, at least to me, seems pretty important and is not entirely clear in the documentation is the fact that the ArrayObject class supports get/set on uni-dimensional keys and get ONLY on *passed* multi-dimensional keys/paths (see source below). If you, like me, need to support array accesss overloading for multi-dimensional data, you will need to derive from ArrayObject and overide the ArrayAccess interface methods to "walk" passed data and convert embedded arrays to objects of some kind... 
<br />
<br />Reference Bug 34816 @ <a href="http://bugs.php.net/bug.php?id=34816." rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=34816.</a>
<br />
<br />Illustration of the issue:
<br />
<br />$a = array(
<br />    "test" =&gt; array(
<br />        "one" =&gt; "dunno",
<br />        "two" =&gt; array(
<br />            "peekabo" =&gt; "do you see me?",
<br />            "anyone" =&gt; array("there")
<br />            )
<br />        )
<br />    );
<br />$oArray = new ArrayObject($a);
<br />var_dump($oArray);
<br />
<br />$oArray["three"] = "No problems here.";
<br />
<br />echo "\n\\test\\one == " . $oArray["test"]["one"] . "\n\n";
<br />
<br />// NEITHER of the two below will work!
<br />$oArray["test"]["one"] = "Yes I do!"; 
<br />$oArray["test"]["yes"] = array(
<br />    "hello" =&gt; "Goodbye!"
<br />    );
<br />
<br />var_dump($oArray);
<br />
<br />---
<br />Note from the extension author:
<br />Actually there is RecursiveArrayObject and RecursiveArrayIterator to deal with recursive structures. However this does not always solve all multidimensional issues as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="77794">  <div class="votes">
    <div id="Vu77794">
    <a href="/manual/vote-note.php?id=77794&amp;page=ref.spl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77794">
    <a href="/manual/vote-note.php?id=77794&amp;page=ref.spl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77794" title="53% like this...">
    1
    </div>
  </div>
  <a href="#77794" class="name">
  <strong class="user"><em>prometheus - csaba dot dobai at php-sparcle dot hu</em></strong></a><a class="genanchor" href="#77794"> &para;</a><div class="date" title="2007-09-13 02:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77794">
<div class="phpcode"><code><span class="html">This code is an example. By using classes like this, you gives a chance to create classes which extends another class but have most of the ability what a class extends ArrayObject (like multiple inheritance):
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">foo 
<br /></span><span class="keyword">{
<br />    public </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;
<br />} </span><span class="comment">// class
<br />
<br /></span><span class="keyword">class </span><span class="default">foobar </span><span class="keyword">extends </span><span class="default">foo </span><span class="keyword">implements </span><span class="default">ArrayAccess</span><span class="keyword">,</span><span class="default">IteratorAggregate</span><span class="keyword">,</span><span class="default">Countable
<br /></span><span class="keyword">{
<br />    public function </span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$array </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);
<br />        return </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);
<br />    }
<br />    
<br />    public function </span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$array </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);
<br />        return </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">];
<br />    }
<br />    
<br />    public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">// Makes "array" to readonly
<br />    </span><span class="keyword">}
<br />    
<br />    public function </span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">// Makes "array" to readonly
<br />    </span><span class="keyword">}
<br />    
<br />    function </span><span class="default">count</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$array </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);
<br />        return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />    } </span><span class="comment">// function
<br />    
<br />    </span><span class="keyword">function </span><span class="default">getArray</span><span class="keyword">()
<br />    {
<br />        return array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);
<br />    } </span><span class="comment">// function
<br />    
<br />    </span><span class="keyword">function </span><span class="default">getIterator</span><span class="keyword">()
<br />    {
<br />        return new </span><span class="default">ArrayIterator</span><span class="keyword">(array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">));
<br />    } </span><span class="comment">// function
<br />    
<br />    </span><span class="keyword">function </span><span class="default">__toString</span><span class="keyword">()
<br />    {
<br />        return </span><span class="string">'String test'</span><span class="keyword">;
<br />    } </span><span class="comment">// function
<br /></span><span class="keyword">} </span><span class="comment">// class
<br />
<br /></span><span class="default">$foobar </span><span class="keyword">= new </span><span class="default">foobar</span><span class="keyword">();
<br />print </span><span class="default">$foobar</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;
<br />print </span><span class="default">$foobar</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">.</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;
<br />print </span><span class="default">count</span><span class="keyword">(</span><span class="default">$foobar</span><span class="keyword">).</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;
<br />
<br />foreach (</span><span class="default">$foobar </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)
<br />{
<br />    print </span><span class="default">$k</span><span class="keyword">.</span><span class="string">'=&gt;'</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;
<br />} </span><span class="comment">// foreach
<br />
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foobar</span><span class="keyword">-&gt;</span><span class="default">getArray</span><span class="keyword">());
<br />
<br />print </span><span class="default">$foobar</span><span class="keyword">;
<br />
<br /></span><span class="comment">/* Generated output:
<br />1
<br />foo
<br />4
<br />0=&gt;1
<br />1=&gt;2
<br />2=&gt;3
<br />3=&gt;4
<br />array
<br />  0 =&gt; int 1
<br />  1 =&gt; int 2
<br />  2 =&gt; int 3
<br />  3 =&gt; int 4
<br />String test
<br />*/
<br /></span><span class="default">?&gt;
<br /></span>
<br />For proper use you must be define all these methods except getArray()
<br />
<br />Browse SPL's sources to be a very helpful think.
<br />
<br />ps.: sry for my english</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.spl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.spl.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.spl.php">SPL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="spl.interfaces.php" title="Interfaces">Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="spl.datastructures.php" title="Datastructures">Datastructures</a>
                        </li>
                                                <li class="">
                            <a href="spl.exceptions.php" title="Exceptions">Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="spl.iterators.php" title="Iterators">Iterators</a>
                        </li>
                                                <li class="">
                            <a href="spl.files.php" title="File Handling">File Handling</a>
                        </li>
                                                <li class="current">
                            <a href="ref.spl.php" title="SPL Functions">SPL Functions</a>
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
