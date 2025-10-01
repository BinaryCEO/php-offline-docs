<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Enumerations - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.enumerations.php">
 <link rel="shorturl" href="https://www.php.net/types.enumerations">
 <link rel="alternate" href="https://www.php.net/types.enumerations" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.object.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.resource.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.enumerations.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.enumerations.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.enumerations.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.enumerations.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.enumerations.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.enumerations.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.enumerations.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.enumerations.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.enumerations.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.enumerations.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.enumerations.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Enumerations" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Enumerations - Manual" />
<meta name="twitter:description" content="Enumerations" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Enumerations - Manual" />
<meta itemprop="description" content="Enumerations" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Enumerations" />

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
        <a href="language.types.resource.php">
          Resources &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.object.php">
          &laquo; Objects        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.types.php'>Types</a></li>      </ul>
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
            <option value='en/language.types.enumerations.php' selected="selected">English</option>
            <option value='de/language.types.enumerations.php'>German</option>
            <option value='es/language.types.enumerations.php'>Spanish</option>
            <option value='fr/language.types.enumerations.php'>French</option>
            <option value='it/language.types.enumerations.php'>Italian</option>
            <option value='ja/language.types.enumerations.php'>Japanese</option>
            <option value='pt_BR/language.types.enumerations.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.enumerations.php'>Russian</option>
            <option value='tr/language.types.enumerations.php'>Turkish</option>
            <option value='uk/language.types.enumerations.php'>Ukrainian</option>
            <option value='zh/language.types.enumerations.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.enumerations" class="sect1">
 <h2 class="title">Enumerations</h2>
 <p class="verinfo">(PHP 8 &gt;= 8.1.0)</p>

 <div class="sect2" id="language.types.enumerations.basics">
  <h3 class="title">Basic Enumerations</h3>

  <p class="para">
   Enumerations are a restricting layer on top of classes and class constants,
   intended to provide a way to define a closed set of possible values for a type.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">enum </span><span style="color: #0000BB">Suit<br /></span><span style="color: #007700">{<br />    case </span><span style="color: #0000BB">Hearts</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Diamonds</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Clubs</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Spades</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">do_stuff</span><span style="color: #007700">(</span><span style="color: #0000BB">Suit $s</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #FF8000">// ...<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">do_stuff</span><span style="color: #007700">(</span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Spades</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <p class="simpara">
   For a full discussion, see the
   <a href="language.enumerations.php" class="link">Enumerations</a> chapter.
  </p>

 </div>
 
 <div class="sect2" id="language.types.enumerations.casting">
  <h3 class="title">Casting</h3>
  
  <p class="para">
   If an <span class="type">enum</span> is converted to an <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, it is not
   modified. If an <span class="type">enum</span> is converted to an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>,
   an array with a single <code class="literal">name</code> key (for Pure enums) or
   an array with both <code class="literal">name</code> and <code class="literal">value</code> keys
   (for Backed enums) is created.  All other cast types will result in an error.
  </p>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/types/enumerations.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.enumerations%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.enumerations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.enumerations.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127105">  <div class="votes">
    <div id="Vu127105">
    <a href="/manual/vote-note.php?id=127105&amp;page=language.types.enumerations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127105">
    <a href="/manual/vote-note.php?id=127105&amp;page=language.types.enumerations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127105" title="66% like this...">
    55
    </div>
  </div>
  <a href="#127105" class="name">
  <strong class="user"><em>esdras-schonevald</em></strong></a><a class="genanchor" href="#127105"> &para;</a><div class="date" title="2022-05-16 02:07"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127105">
<div class="phpcode"><code><span class="html"><a href="https://gist.github.com/esdras-schonevald/71a6730e6191c5e9c053e2f65b839eec" rel="nofollow" target="_blank">https://gist.github.com/esdras-schonevald/71a6730e6191c5e9c053e2f65b839eec</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="comment">/**<br /> * This is a sample<br /> * How to use Enum to create a custom exception cases<br /> * PHP 8.1^<br /> */<br /><br /></span><span class="keyword">enum </span><span class="default">MyExceptionCase </span><span class="keyword">{<br />    case </span><span class="default">InvalidMethod</span><span class="keyword">;<br />    case </span><span class="default">InvalidProperty</span><span class="keyword">;<br />    case </span><span class="default">Timeout</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">MyException </span><span class="keyword">extends </span><span class="default">Exception </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(private </span><span class="default">MyExceptionCase $case</span><span class="keyword">){<br />        match(</span><span class="default">$case</span><span class="keyword">){<br />            </span><span class="default">MyExceptionCase</span><span class="keyword">::</span><span class="default">InvalidMethod      </span><span class="keyword">=&gt;    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="string">"Bad Request - Invalid Method"</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">),<br />            </span><span class="default">MyExceptionCase</span><span class="keyword">::</span><span class="default">InvalidProperty    </span><span class="keyword">=&gt;    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="string">"Bad Request - Invalid Property"</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">),<br />            </span><span class="default">MyExceptionCase</span><span class="keyword">::</span><span class="default">Timeout            </span><span class="keyword">=&gt;    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="string">"Bad Request - Timeout"</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">)<br />        };<br />    }<br />}<br /><br /></span><span class="comment">// Testing my custom exception class<br /></span><span class="keyword">try {<br />    throw new </span><span class="default">MyException</span><span class="keyword">(</span><span class="default">MyExceptionCase</span><span class="keyword">::</span><span class="default">InvalidMethod</span><span class="keyword">);<br />} catch (</span><span class="default">MyException $myE</span><span class="keyword">) {<br />    echo </span><span class="default">$myE</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();  </span><span class="comment">// Bad Request - Invalid Method<br /></span><span class="keyword">}</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.enumerations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.enumerations.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.types.php">Types</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.types.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-system.php" title="Type System">Type System</a>
                        </li>
                                                <li class="">
                            <a href="language.types.null.php" title="NULL">NULL</a>
                        </li>
                                                <li class="">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="">
                            <a href="language.types.integer.php" title="Integers">Integers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.float.php" title="Floating point numbers">Floating point numbers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.string.php" title="Strings">Strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.numeric-strings.php" title="Numeric strings">Numeric strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="language.types.object.php" title="Objects">Objects</a>
                        </li>
                                                <li class="current">
                            <a href="language.types.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.resource.php" title="Resources">Resources</a>
                        </li>
                                                <li class="">
                            <a href="language.types.callable.php" title="Callbacks / Callables">Callbacks / Callables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.mixed.php" title="Mixed">Mixed</a>
                        </li>
                                                <li class="">
                            <a href="language.types.void.php" title="Void">Void</a>
                        </li>
                                                <li class="">
                            <a href="language.types.never.php" title="Never">Never</a>
                        </li>
                                                <li class="">
                            <a href="language.types.relative-class-types.php" title="Relative class types">Relative class types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.singleton.php" title="Singleton types">Singleton types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.iterable.php" title="Iterables">Iterables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.declarations.php" title="Type declarations">Type declarations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-juggling.php" title="Type Juggling">Type Juggling</a>
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
