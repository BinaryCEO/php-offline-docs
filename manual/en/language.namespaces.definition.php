<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Namespaces - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.namespaces.definition.php">
 <link rel="shorturl" href="https://www.php.net/namespaces.definition">
 <link rel="alternate" href="https://www.php.net/namespaces.definition" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.namespaces.rationale.php">
 <link rel="next" href="https://www.php.net/manual/en/language.namespaces.nested.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.namespaces.definition.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.namespaces.definition.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.namespaces.definition.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.namespaces.definition.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.namespaces.definition.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.namespaces.definition.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.namespaces.definition.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.namespaces.definition.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.namespaces.definition.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.namespaces.definition.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.namespaces.definition.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Defining namespaces" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Namespaces - Manual" />
<meta name="twitter:description" content="Defining namespaces" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Namespaces - Manual" />
<meta itemprop="description" content="Defining namespaces" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Defining namespaces" />

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
        <a href="language.namespaces.nested.php">
          Sub-namespaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.namespaces.rationale.php">
          &laquo; Overview        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.namespaces.php'>Namespaces</a></li>      </ul>
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
            <option value='en/language.namespaces.definition.php' selected="selected">English</option>
            <option value='de/language.namespaces.definition.php'>German</option>
            <option value='es/language.namespaces.definition.php'>Spanish</option>
            <option value='fr/language.namespaces.definition.php'>French</option>
            <option value='it/language.namespaces.definition.php'>Italian</option>
            <option value='ja/language.namespaces.definition.php'>Japanese</option>
            <option value='pt_BR/language.namespaces.definition.php'>Brazilian Portuguese</option>
            <option value='ru/language.namespaces.definition.php'>Russian</option>
            <option value='tr/language.namespaces.definition.php'>Turkish</option>
            <option value='uk/language.namespaces.definition.php'>Ukrainian</option>
            <option value='zh/language.namespaces.definition.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.namespaces.definition" class="sect1">
  <h2 class="title">Defining namespaces</h2>
  
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
  <p class="para">
   Although any valid PHP code can be contained within a namespace, only the following
   types of code are affected by namespaces: classes (including abstract classes, traits and enums), interfaces,
   functions and constants.
  </p>
  <p class="para">
   Namespaces are declared using the <code class="literal">namespace</code>
   keyword. A file containing a namespace must declare the namespace
   at the top of the file before any other code - with one exception: the
   <a href="control-structures.declare.php" class="xref">declare</a> keyword.
   <div class="example" id="example-373">
    <p><strong>Example #1 Declaring a single namespace</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">MyProject</span><span style="color: #007700">;<br /><br />const </span><span style="color: #0000BB">CONNECT_OK </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />class </span><span style="color: #0000BB">Connection </span><span style="color: #007700">{ </span><span style="color: #FF8000">/* ... */ </span><span style="color: #007700">}<br />function </span><span style="color: #0000BB">connect</span><span style="color: #007700">() { </span><span style="color: #FF8000">/* ... */ </span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Fully qualified names (i.e. names starting with a backslash) are not allowed in namespace
     declarations, because such constructs are interpreted as relative namespace expressions.
    </span>
   </p></blockquote>
   The only code construct allowed before a namespace declaration is the
   <code class="literal">declare</code> statement, for defining encoding of a source file. In addition,
   no non-PHP code may precede a namespace declaration, including extra whitespace:
   <div class="example" id="example-374">
    <p><strong>Example #2 Declaring a single namespace</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000">&lt;html&gt;<br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">MyProject</span><span style="color: #007700">; </span><span style="color: #FF8000">// fatal error - namespace must be the first statement in the script<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   In addition, unlike any other PHP construct, the same namespace may be defined
   in multiple files, allowing splitting up of a namespace&#039;s contents across the filesystem.
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/namespaces.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.namespaces.definition%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.namespaces.definition&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.definition.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115504">  <div class="votes">
    <div id="Vu115504">
    <a href="/manual/vote-note.php?id=115504&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115504">
    <a href="/manual/vote-note.php?id=115504&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115504" title="75% like this...">
    212
    </div>
  </div>
  <a href="#115504" class="name">
  <strong class="user"><em>kuzawinski dot marcin at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#115504"> &para;</a><div class="date" title="2014-08-05 09:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115504">
<div class="phpcode"><code><span class="html">If your code looks like this:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">namespace </span><span class="default">NS</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />...and you still get "Namespace declaration statement has to be the very first statement in the script" Fatal error, then you probably use UTF-8 encoding (which is good) with Byte Order Mark, aka BOM (which is bad). Try to convert your files to "UTF-8 without BOM", and it should be ok.</span></code></div>
  </div>
 </div>
  <div class="note" id="90283">  <div class="votes">
    <div id="Vu90283">
    <a href="/manual/vote-note.php?id=90283&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90283">
    <a href="/manual/vote-note.php?id=90283&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90283" title="72% like this...">
    143
    </div>
  </div>
  <a href="#90283" class="name">
  <strong class="user"><em>danbettles at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#90283"> &para;</a><div class="date" title="2009-04-14 12:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90283">
<div class="phpcode"><code><span class="html">Regarding constants defined with define() inside namespaces...<br /><br />define() will define constants exactly as specified.  So, if you want to define a constant in a namespace, you will need to specify the namespace in your call to define(), even if you're calling define() from within a namespace.  The following examples will make it clear.<br /><br />The following code will define the constant "MESSAGE" in the global namespace (i.e. "\MESSAGE").<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">test</span><span class="keyword">;<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'MESSAGE'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The following code will define two constants in the "test" namespace.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">test</span><span class="keyword">;<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'test\HELLO'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\GOODBYE'</span><span class="keyword">, </span><span class="string">'Goodbye cruel world!'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112937">  <div class="votes">
    <div id="Vu112937">
    <a href="/manual/vote-note.php?id=112937&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112937">
    <a href="/manual/vote-note.php?id=112937&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112937" title="67% like this...">
    81
    </div>
  </div>
  <a href="#112937" class="name">
  <strong class="user"><em>FatBat</em></strong></a><a class="genanchor" href="#112937"> &para;</a><div class="date" title="2013-08-08 09:46"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112937">
<div class="phpcode"><code><span class="html">Expanding on @danbettles note, it is better to always be explicit about which constant to use.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">namespace </span><span class="default">NS</span><span class="keyword">;<br /><br />    </span><span class="default">define</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">.</span><span class="string">'\foo'</span><span class="keyword">,</span><span class="string">'111'</span><span class="keyword">);<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'222'</span><span class="keyword">);<br /><br />    echo </span><span class="default">foo</span><span class="keyword">;  </span><span class="comment">// 111.<br />    </span><span class="keyword">echo </span><span class="default">\foo</span><span class="keyword">;  </span><span class="comment">// 222.<br />    </span><span class="keyword">echo </span><span class="default">\NS\foo  </span><span class="comment">// 111.<br />    </span><span class="keyword">echo </span><span class="default">NS\foo  </span><span class="comment">// fatal error. assumes \NS\NS\foo.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93882">  <div class="votes">
    <div id="Vu93882">
    <a href="/manual/vote-note.php?id=93882&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93882">
    <a href="/manual/vote-note.php?id=93882&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93882" title="68% like this...">
    65
    </div>
  </div>
  <a href="#93882" class="name">
  <strong class="user"><em>huskyr at gmail dot com</em></strong></a><a class="genanchor" href="#93882"> &para;</a><div class="date" title="2009-10-05 04:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93882">
<div class="phpcode"><code><span class="html">"A file containing a namespace must declare the namespace at the top of the file before any other code"
<br />
<br />It might be obvious, but this means that you *can* include comments and white spaces before the namespace keyword.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Lots 
<br />// of
<br />// interesting
<br />// comments and white space
<br />
<br /></span><span class="keyword">namespace </span><span class="default">Foo</span><span class="keyword">;
<br />class </span><span class="default">Bar </span><span class="keyword">{
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92212">  <div class="votes">
    <div id="Vu92212">
    <a href="/manual/vote-note.php?id=92212&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92212">
    <a href="/manual/vote-note.php?id=92212&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92212" title="66% like this...">
    48
    </div>
  </div>
  <a href="#92212" class="name">
  <strong class="user"><em>jeremeamia at gmail dot com</em></strong></a><a class="genanchor" href="#92212"> &para;</a><div class="date" title="2009-07-14 08:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92212">
<div class="phpcode"><code><span class="html">You should not try to create namespaces that use PHP keywords. These will cause parse errors. 
<br />
<br />Examples:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">namespace </span><span class="default">Project</span><span class="keyword">/</span><span class="default">Classes</span><span class="keyword">/Function; </span><span class="comment">// Causes parse errors
<br /></span><span class="keyword">namespace </span><span class="default">Project</span><span class="keyword">/Abstract/</span><span class="default">Factory</span><span class="keyword">; </span><span class="comment">// Causes parse errors
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125705">  <div class="votes">
    <div id="Vu125705">
    <a href="/manual/vote-note.php?id=125705&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125705">
    <a href="/manual/vote-note.php?id=125705&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125705" title="72% like this...">
    8
    </div>
  </div>
  <a href="#125705" class="name">
  <strong class="user"><em>anisgazig at gmail dot com</em></strong></a><a class="genanchor" href="#125705"> &para;</a><div class="date" title="2021-01-21 05:13"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125705">
<div class="phpcode"><code><span class="html">namespace statement  is defined at first of the php files. But <br />    before namespace declaration only three elements allowed.<br />      1.declare statement<br />      2.spaces<br />      3.comments</span></code></div>
  </div>
 </div>
  <div class="note" id="82222">  <div class="votes">
    <div id="Vu82222">
    <a href="/manual/vote-note.php?id=82222&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82222">
    <a href="/manual/vote-note.php?id=82222&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82222" title="55% like this...">
    7
    </div>
  </div>
  <a href="#82222" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#82222"> &para;</a><div class="date" title="2008-04-01 11:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82222">
<div class="phpcode"><code><span class="html">@ RS: Also, you can specify how your __autoload() function looks for the files. That way another users namespace classes cannot overwrite yours unless they replace your file specifically.</span></code></div>
  </div>
 </div>
  <div class="note" id="83194">  <div class="votes">
    <div id="Vu83194">
    <a href="/manual/vote-note.php?id=83194&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83194">
    <a href="/manual/vote-note.php?id=83194&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83194" title="51% like this...">
    2
    </div>
  </div>
  <a href="#83194" class="name">
  <strong class="user"><em>Baptiste</em></strong></a><a class="genanchor" href="#83194"> &para;</a><div class="date" title="2008-05-14 12:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83194">
<div class="phpcode"><code><span class="html">There is nothing wrong with PHP namespaces, except that those 2 instructions give a false impression of package management.<br />... while they just correspond to the "with()" instruction of Javascript.<br /><br />By contrast, a package is a namespace for its members, but it offers more (like deployment facilities), and a compiler knows exactly what classes are in a package, and where to find them.</span></code></div>
  </div>
 </div>
  <div class="note" id="125678">  <div class="votes">
    <div id="Vu125678">
    <a href="/manual/vote-note.php?id=125678&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125678">
    <a href="/manual/vote-note.php?id=125678&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125678" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#125678" class="name">
  <strong class="user"><em>anisgazig at gmail dot com</em></strong></a><a class="genanchor" href="#125678"> &para;</a><div class="date" title="2021-01-14 04:03"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125678">
<div class="phpcode"><code><span class="html">Namespace name are case-insensitive.<br />namespace App<br />and<br />namespace app<br />are same meaning.<br /><br />Besides, Namespace keword are case-insensitive.<br />Namespace App<br />namespace App<br />and<br />NAMESPACE App<br />are same meaning.</span></code></div>
  </div>
 </div>
  <div class="note" id="127538">  <div class="votes">
    <div id="Vu127538">
    <a href="/manual/vote-note.php?id=127538&amp;page=language.namespaces.definition&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127538">
    <a href="/manual/vote-note.php?id=127538&amp;page=language.namespaces.definition&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127538" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#127538" class="name">
  <strong class="user"><em>dino at tuxweb dot it</em></strong></a><a class="genanchor" href="#127538"> &para;</a><div class="date" title="2022-08-26 12:08"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127538">
<div class="phpcode"><code><span class="html">Please note that a PHP Namespace declaration cannot start with a number.<br />It took some time for me to debug...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.namespaces.definition&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.definition.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.namespaces.php">Namespaces</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.namespaces.rationale.php" title="Overview">Overview</a>
                        </li>
                                                <li class="current">
                            <a href="language.namespaces.definition.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nested.php" title="Sub-&#8203;namespaces">Sub-&#8203;namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definitionmultiple.php" title="Defining multiple namespaces in the same file">Defining multiple namespaces in the same file</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.dynamic.php" title="Namespaces and dynamic language features">Namespaces and dynamic language features</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nsconstants.php" title="namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;">namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.importing.php" title="Aliasing and Importing">Aliasing and Importing</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.global.php" title="Global space">Global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.fallback.php" title="Fallback to global space">Fallback to global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.rules.php" title="Name resolution rules">Name resolution rules</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.faq.php" title="FAQ">FAQ</a>
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
