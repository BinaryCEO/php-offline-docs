<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcached::getAllKeys - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcached.getallkeys.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcached.getallkeys.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcached.getallkeys.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcached.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcached.get.php">
 <link rel="next" href="https://www.php.net/manual/en/memcached.getbykey.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcached.getallkeys.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcached.getallkeys.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcached.getallkeys.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcached.getallkeys.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcached.getallkeys.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcached.getallkeys.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcached.getallkeys.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcached.getallkeys.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcached.getallkeys.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcached.getallkeys.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcached.getallkeys.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets the keys stored on all the servers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcached::getAllKeys - Manual" />
<meta name="twitter:description" content="Gets the keys stored on all the servers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcached::getAllKeys - Manual" />
<meta itemprop="description" content="Gets the keys stored on all the servers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets the keys stored on all the servers" />

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
        <a href="memcached.getbykey.php">
          Memcached::getByKey &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcached.get.php">
          &laquo; Memcached::get        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.memcached.php'>Memcached</a></li>      <li><a href='class.memcached.php'>Memcached</a></li>      </ul>
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
            <option value='en/memcached.getallkeys.php' selected="selected">English</option>
            <option value='de/memcached.getallkeys.php'>German</option>
            <option value='es/memcached.getallkeys.php'>Spanish</option>
            <option value='fr/memcached.getallkeys.php'>French</option>
            <option value='it/memcached.getallkeys.php'>Italian</option>
            <option value='ja/memcached.getallkeys.php'>Japanese</option>
            <option value='pt_BR/memcached.getallkeys.php'>Brazilian Portuguese</option>
            <option value='ru/memcached.getallkeys.php'>Russian</option>
            <option value='tr/memcached.getallkeys.php'>Turkish</option>
            <option value='uk/memcached.getallkeys.php'>Ukrainian</option>
            <option value='zh/memcached.getallkeys.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcached.getallkeys" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcached::getAllKeys</h1>
  <p class="verinfo">(PECL memcached &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Memcached::getAllKeys</span> &mdash; <span class="dc-title">Gets the keys stored on all the servers</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-memcached.getallkeys-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Memcached::getAllKeys</strong></span>(): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>Memcached::getAllKeys()</strong></span> queries each memcache server
   and retrieves an array of all keys stored on them at that point in time.
   This is not an atomic operation, so it isn&#039;t a truly consistent snapshot of
   the keys at point in time. As memcache doesn&#039;t guarantee to return all keys
   you also cannot assume that all keys have been returned.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This method is intended for debugging purposes and should not be used at scale!
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-memcached.getallkeys-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-memcached.getallkeys-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the keys stored on all the servers on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcached/memcached/getallkeys.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcached.getallkeys%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcached.getallkeys&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.getallkeys.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120596">  <div class="votes">
    <div id="Vu120596">
    <a href="/manual/vote-note.php?id=120596&amp;page=memcached.getallkeys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120596">
    <a href="/manual/vote-note.php?id=120596&amp;page=memcached.getallkeys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120596" title="75% like this...">
    6
    </div>
  </div>
  <a href="#120596" class="name">
  <strong class="user"><em>flaviu dot chelaru at gmail dot com</em></strong></a><a class="genanchor" href="#120596"> &para;</a><div class="date" title="2017-02-05 08:58"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120596">
<div class="phpcode"><code><span class="html">// initiate the memcached instance<br />$cache = new \Memcached();<br />$cache-&gt;addServer('localhost', '11211');<br /><br />// get all stored memcached items<br /><br />$keys = $cache-&gt;getAllKeys();<br />$cache-&gt;getDelayed($keys);<br /><br />$store = $cache-&gt;fetchAll();<br /><br />// delete by regex keys<br /><br />$keys = $cache-&gt;getAllKeys();<br />$regex = 'product_.*';<br />foreach($keys as $item) {<br />    if(preg_match('/'.$regex.'/', $item)) {<br />        $cache-&gt;delete($item);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125238">  <div class="votes">
    <div id="Vu125238">
    <a href="/manual/vote-note.php?id=125238&amp;page=memcached.getallkeys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125238">
    <a href="/manual/vote-note.php?id=125238&amp;page=memcached.getallkeys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125238" title="62% like this...">
    2
    </div>
  </div>
  <a href="#125238" class="name">
  <strong class="user"><em>danb1974 at gmail dot com</em></strong></a><a class="genanchor" href="#125238"> &para;</a><div class="date" title="2020-08-03 06:55"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125238">
<div class="phpcode"><code><span class="html">The right way to dump slab keys seems to be by using lru_crawler metadump instead of stats cachedump, see <a href="https://github.com/memcached/memcached/issues/405" rel="nofollow" target="_blank">https://github.com/memcached/memcached/issues/405</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">getAllKeys</span><span class="keyword">(</span><span class="default">string $host</span><span class="keyword">, </span><span class="default">int $port</span><span class="keyword">): array<br />{<br />    </span><span class="default">$sock </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">);<br />    if (</span><span class="default">$sock </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Error connection to server </span><span class="keyword">{</span><span class="default">$host</span><span class="keyword">}</span><span class="string"> on port </span><span class="keyword">{</span><span class="default">$port</span><span class="keyword">}</span><span class="string">: (</span><span class="keyword">{</span><span class="default">$errno</span><span class="keyword">}</span><span class="string">) </span><span class="keyword">{</span><span class="default">$errstr</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">);<br />    }<br /><br />    if (</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="string">"stats items\n"</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Error writing to socket"</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$slabCounts </span><span class="keyword">= [];<br />    while ((</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);<br />        if (</span><span class="default">$line </span><span class="keyword">=== </span><span class="string">'END'</span><span class="keyword">) {<br />            break;<br />        }<br /><br />        </span><span class="comment">// STAT items:8:number 3<br />        </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'!^STAT items:(\d+):number (\d+)$!'</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) {<br />            </span><span class="default">$slabCounts</span><span class="keyword">[</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]] = (int)</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />        }<br />    }<br /><br />    foreach (</span><span class="default">$slabCounts </span><span class="keyword">as </span><span class="default">$slabNr </span><span class="keyword">=&gt; </span><span class="default">$slabCount</span><span class="keyword">) {<br />        if (</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="string">"lru_crawler metadump </span><span class="keyword">{</span><span class="default">$slabNr</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Error writing to socket'</span><span class="keyword">);<br />        }<br /><br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while ((</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$line </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);<br />            if (</span><span class="default">$line </span><span class="keyword">=== </span><span class="string">'END'</span><span class="keyword">) {<br />                break;<br />            }<br /><br />            </span><span class="comment">// key=foobar exp=1596440293 la=1596439293 cas=8492 fetch=no cls=24 size=14908<br />            </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'!^key=(\S+)!'</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) {<br />                </span><span class="default">$allKeys</span><span class="keyword">[] = </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />                </span><span class="default">$count</span><span class="keyword">++;<br />            }<br />        }<br /><br /></span><span class="comment">//        if ($count !== $slabCount) {<br />//            throw new Exception("Surprise, got {$count} keys instead of {$slabCount} keys");<br />//        }<br />    </span><span class="keyword">}<br /><br />    if (</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Error closing socket'</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">$allKeys</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119233">  <div class="votes">
    <div id="Vu119233">
    <a href="/manual/vote-note.php?id=119233&amp;page=memcached.getallkeys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119233">
    <a href="/manual/vote-note.php?id=119233&amp;page=memcached.getallkeys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119233" title="56% like this...">
    3
    </div>
  </div>
  <a href="#119233" class="name">
  <strong class="user"><em>xiangku7890 at gmail dot com</em></strong></a><a class="genanchor" href="#119233"> &para;</a><div class="date" title="2016-04-24 01:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119233">
<div class="phpcode"><code><span class="html">First I use the lastest memcached version 1.4.25, but unfortunately I found memcached::getAllkeys do not work with it, though i follow the others suggestion to disable Memcached::OPT_BINARY_PROTOCOL. So i try to use history versions, when i use memcached version 1.4.17, it works.</span></code></div>
  </div>
 </div>
  <div class="note" id="123793">  <div class="votes">
    <div id="Vu123793">
    <a href="/manual/vote-note.php?id=123793&amp;page=memcached.getallkeys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123793">
    <a href="/manual/vote-note.php?id=123793&amp;page=memcached.getallkeys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123793" title="53% like this...">
    1
    </div>
  </div>
  <a href="#123793" class="name">
  <strong class="user"><em>harold at snel dot me</em></strong></a><a class="genanchor" href="#123793"> &para;</a><div class="date" title="2019-04-23 08:59"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123793">
<div class="phpcode"><code><span class="html">/**<br /> * Get all memcached keys. Special function because getAllKeys() is broken since memcached 1.4.23. Should only be needed on php 5.6<br /> *<br /> * cleaned up version of code found on Stackoverflow.com by Maduka Jayalath<br /> *<br /> * @return array|int - all retrieved keys (or negative number on error)<br /> */<br />public function getMemcachedKeys($host = '127.0.0.1', $port = 11211)<br />{<br />    $mem = @fsockopen($host, $port);<br />    if ($mem === false)<br />    {<br />        return -1;<br />    }<br /><br />    // retrieve distinct slab<br />    $r = @fwrite($mem, 'stats items' . chr(10));<br />    if ($r === false)<br />    {<br />        return -2;<br />    }<br /><br />    $slab = [];<br />    while (($l = @fgets($mem, 1024)) !== false)<br />    {<br />        // finished?<br />        $l = trim($l);<br />        if ($l == 'END') <br />        {<br />            break;<br />        }<br /><br />        $m = [];<br />        // &lt;STAT items:22:evicted_nonzero 0&gt;<br />        $r = preg_match('/^STAT\sitems\:(\d+)\:/', $l, $m);<br />        if ($r != 1) <br />        {<br />            return -3;<br />        }<br />        $a_slab = $m[1];<br /><br />        if (!array_key_exists($a_slab, $slab)) <br />        {<br />            $slab[$a_slab] = [];<br />        }<br />    }<br /><br />    reset($slab);<br />    foreach ($slab as $a_slab_key =&gt; &amp;$a_slab)<br />    {<br />        $r = @fwrite($mem, 'stats cachedump ' . $a_slab_key . ' 100' . chr(10));<br />        if ($r === false) <br />        {<br />            return -4;<br />        }<br /><br />        while (($l = @fgets($mem, 1024)) !== false)<br />        {<br />            // finished?<br />            $l = trim($l);<br />            if ($l == 'END') <br />            {<br />                break;<br />            }<br /><br />            $m = [];<br />            // ITEM 42 [118 b; 1354717302 s]<br />            $r = preg_match('/^ITEM\s([^\s]+)\s/', $l, $m);<br />            if ($r != 1) <br />            {<br />                return -5;<br />            }<br />            $a_key = $m[1];<br /><br />            $a_slab[] = $a_key;<br />        }<br />    }<br /><br />    // close the connection<br />    @fclose($mem);<br />    unset($mem);<br /><br />    $keys = [];<br />    reset($slab);<br />    foreach ($slab AS &amp;$a_slab)<br />    {<br />        reset($a_slab);<br />        foreach ($a_slab AS &amp;$a_key) <br />        {<br />            $keys[] = $a_key;<br />        }<br />    }<br />    unset($slab);<br /><br />    return $keys;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcached.getallkeys&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.getallkeys.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.memcached.php">Memcached</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="memcached.add.php" title="add">add</a>
                        </li>
                                                <li class="">
                            <a href="memcached.addbykey.php" title="addByKey">addByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.addserver.php" title="addServer">addServer</a>
                        </li>
                                                <li class="">
                            <a href="memcached.addservers.php" title="addServers">addServers</a>
                        </li>
                                                <li class="">
                            <a href="memcached.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="memcached.appendbykey.php" title="appendByKey">appendByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.cas.php" title="cas">cas</a>
                        </li>
                                                <li class="">
                            <a href="memcached.casbykey.php" title="casByKey">casByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="memcached.decrement.php" title="decrement">decrement</a>
                        </li>
                                                <li class="">
                            <a href="memcached.decrementbykey.php" title="decrementByKey">decrementByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="memcached.deletebykey.php" title="deleteByKey">deleteByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.deletemulti.php" title="deleteMulti">deleteMulti</a>
                        </li>
                                                <li class="">
                            <a href="memcached.deletemultibykey.php" title="deleteMultiByKey">deleteMultiByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
                            <a href="memcached.fetchall.php" title="fetchAll">fetchAll</a>
                        </li>
                                                <li class="">
                            <a href="memcached.flush.php" title="flush">flush</a>
                        </li>
                                                <li class="">
                            <a href="memcached.get.php" title="get">get</a>
                        </li>
                                                <li class="current">
                            <a href="memcached.getallkeys.php" title="getAllKeys">getAllKeys</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getbykey.php" title="getByKey">getByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getdelayed.php" title="getDelayed">getDelayed</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getdelayedbykey.php" title="getDelayedByKey">getDelayedByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getmulti.php" title="getMulti">getMulti</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getmultibykey.php" title="getMultiByKey">getMultiByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getoption.php" title="getOption">getOption</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getresultcode.php" title="getResultCode">getResultCode</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getresultmessage.php" title="getResultMessage">getResultMessage</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getserverbykey.php" title="getServerByKey">getServerByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getserverlist.php" title="getServerList">getServerList</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getstats.php" title="getStats">getStats</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getversion.php" title="getVersion">getVersion</a>
                        </li>
                                                <li class="">
                            <a href="memcached.increment.php" title="increment">increment</a>
                        </li>
                                                <li class="">
                            <a href="memcached.incrementbykey.php" title="incrementByKey">incrementByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.ispersistent.php" title="isPersistent">isPersistent</a>
                        </li>
                                                <li class="">
                            <a href="memcached.ispristine.php" title="isPristine">isPristine</a>
                        </li>
                                                <li class="">
                            <a href="memcached.prepend.php" title="prepend">prepend</a>
                        </li>
                                                <li class="">
                            <a href="memcached.prependbykey.php" title="prependByKey">prependByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.quit.php" title="quit">quit</a>
                        </li>
                                                <li class="">
                            <a href="memcached.replace.php" title="replace">replace</a>
                        </li>
                                                <li class="">
                            <a href="memcached.replacebykey.php" title="replaceByKey">replaceByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.resetserverlist.php" title="resetServerList">resetServerList</a>
                        </li>
                                                <li class="">
                            <a href="memcached.set.php" title="set">set</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setbykey.php" title="setByKey">setByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setencodingkey.php" title="setEncodingKey">setEncodingKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setmulti.php" title="setMulti">setMulti</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setmultibykey.php" title="setMultiByKey">setMultiByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setoption.php" title="setOption">setOption</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setoptions.php" title="setOptions">setOptions</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setsaslauthdata.php" title="setSaslAuthData">setSaslAuthData</a>
                        </li>
                                                <li class="">
                            <a href="memcached.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="memcached.touchbykey.php" title="touchByKey">touchByKey</a>
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
