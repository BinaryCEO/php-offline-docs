<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Unsetting References - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.references.unset.php">
 <link rel="shorturl" href="https://www.php.net/references.unset">
 <link rel="alternate" href="https://www.php.net/references.unset" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.references.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.references.return.php">
 <link rel="next" href="https://www.php.net/manual/en/language.references.spot.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.references.unset.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.references.unset.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.references.unset.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.references.unset.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.references.unset.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.references.unset.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.references.unset.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.references.unset.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.references.unset.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.references.unset.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.references.unset.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Unsetting References" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Unsetting References - Manual" />
<meta name="twitter:description" content="Unsetting References" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Unsetting References - Manual" />
<meta itemprop="description" content="Unsetting References" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Unsetting References" />

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
        <a href="language.references.spot.php">
          Spotting References &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.references.return.php">
          &laquo; Returning References        </a>
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
            <option value='en/language.references.unset.php' selected="selected">English</option>
            <option value='de/language.references.unset.php'>German</option>
            <option value='es/language.references.unset.php'>Spanish</option>
            <option value='fr/language.references.unset.php'>French</option>
            <option value='it/language.references.unset.php'>Italian</option>
            <option value='ja/language.references.unset.php'>Japanese</option>
            <option value='pt_BR/language.references.unset.php'>Brazilian Portuguese</option>
            <option value='ru/language.references.unset.php'>Russian</option>
            <option value='tr/language.references.unset.php'>Turkish</option>
            <option value='uk/language.references.unset.php'>Ukrainian</option>
            <option value='zh/language.references.unset.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.references.unset" class="sect1">
   <h2 class="title">Unsetting References</h2>
   <p class="para">
    When you unset the reference, you just break the binding between
    variable name and variable content. This does not mean that
    variable content will be destroyed. For example:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />unset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">); <br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    won&#039;t unset <var class="varname">$b</var>, just <var class="varname">$a</var>. 
   </p>
   <p class="simpara">
    Again, it might be useful to think about this as analogous to the Unix
    <strong class="command">unlink</strong> call.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.references.unset%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.references.unset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.unset.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="82955">  <div class="votes">
    <div id="Vu82955">
    <a href="/manual/vote-note.php?id=82955&amp;page=language.references.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82955">
    <a href="/manual/vote-note.php?id=82955&amp;page=language.references.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82955" title="96% like this...">
    452
    </div>
  </div>
  <a href="#82955" class="name">
  <strong class="user"><em>ojars26 at NOSPAM dot inbox dot lv</em></strong></a><a class="genanchor" href="#82955"> &para;</a><div class="date" title="2008-05-03 07:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82955">
<div class="phpcode"><code><span class="html">Simple look how PHP Reference works<br /><span class="default">&lt;?php<br /></span><span class="comment">/* Imagine this is memory map<br /> ______________________________<br />|pointer | value | variable              |<br /> -----------------------------------<br />|   1     |  NULL  |         ---           |<br />|   2     |  NULL  |         ---           |<br />|   3     |  NULL  |         ---           |<br />|   4     |  NULL  |         ---           |<br />|   5     |  NULL  |         ---           |<br />------------------------------------<br />Create some variables   */<br /></span><span class="default">$a</span><span class="keyword">=</span><span class="default">10</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">=</span><span class="default">20</span><span class="keyword">;<br /></span><span class="default">$c</span><span class="keyword">=array (</span><span class="string">'one'</span><span class="keyword">=&gt;array (</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br /></span><span class="comment">/* Look at memory<br /> _______________________________<br />|pointer | value |       variable's       |<br /> -----------------------------------<br />|   1     |  10     |       $a               |<br />|   2     |  20     |       $b               |<br />|   3     |  1       |      $c['one'][0]   |<br />|   4     |  2       |      $c['one'][1]   |<br />|   5     |  3       |      $c['one'][2]   |<br />------------------------------------<br />do  */<br /></span><span class="default">$a</span><span class="keyword">=&amp;</span><span class="default">$c</span><span class="keyword">[</span><span class="string">'one'</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">];<br /></span><span class="comment">/* Look at memory<br /> _______________________________<br />|pointer | value |       variable's       |<br /> -----------------------------------<br />|   1     |  NULL  |       ---              |  //value of  $a is destroyed and pointer is free<br />|   2     |  20     |       $b               |<br />|   3     |  1       |      $c['one'][0]   |<br />|   4     |  2       |      $c['one'][1]   |<br />|   5     |  3       |  $c['one'][2]  ,$a | // $a is now here<br />------------------------------------<br />do  */<br /></span><span class="default">$b</span><span class="keyword">=&amp;</span><span class="default">$a</span><span class="keyword">;  </span><span class="comment">// or  $b=&amp;$c['one'][2]; result is same as both "$c['one'][2]" and "$a" is at same pointer.<br />/* Look at memory<br /> _________________________________<br />|pointer | value |       variable's           |<br /> --------------------------------------<br />|   1     |  NULL  |       ---                  |  <br />|   2     |  NULL  |       ---                  |  //value of  $b is destroyed and pointer is free<br />|   3     |  1       |      $c['one'][0]       |<br />|   4     |  2       |      $c['one'][1]       |<br />|   5     |  3       |$c['one'][2]  ,$a , $b |  // $b is now here<br />---------------------------------------<br />next do */<br /></span><span class="keyword">unset(</span><span class="default">$c</span><span class="keyword">[</span><span class="string">'one'</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">]);<br /></span><span class="comment">/* Look at memory<br /> _________________________________<br />|pointer | value |       variable's           |<br /> --------------------------------------<br />|   1     |  NULL  |       ---                  |  <br />|   2     |  NULL  |       ---                  |  <br />|   3     |  1       |      $c['one'][0]       |<br />|   4     |  2       |      $c['one'][1]       |<br />|   5     |  3       |      $a , $b              | // $c['one'][2]  is  destroyed not in memory, not in array<br />---------------------------------------<br />next do   */<br /></span><span class="default">$c</span><span class="keyword">[</span><span class="string">'one'</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">]=</span><span class="default">500</span><span class="keyword">;    </span><span class="comment">//now it is in array<br />/* Look at memory<br /> _________________________________<br />|pointer | value |       variable's           |<br /> --------------------------------------<br />|   1     |  500    |      $c['one'][2]       |  //created it lands on any(next) free pointer in memory<br />|   2     |  NULL  |       ---                  |  <br />|   3     |  1       |      $c['one'][0]       |<br />|   4     |  2       |      $c['one'][1]       |<br />|   5     |  3       |      $a , $b              | //this pointer is in use<br />---------------------------------------<br />lets tray to return $c['one'][2] at old pointer an remove reference $a,$b.  */<br /></span><span class="default">$c</span><span class="keyword">[</span><span class="string">'one'</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">]=&amp;</span><span class="default">$a</span><span class="keyword">;<br />unset(</span><span class="default">$a</span><span class="keyword">);<br />unset(</span><span class="default">$b</span><span class="keyword">);   <br /></span><span class="comment">/* look at memory<br /> _________________________________<br />|pointer | value |       variable's           |<br /> --------------------------------------<br />|   1     |  NULL  |       ---                  |  <br />|   2     |  NULL  |       ---                  |  <br />|   3     |  1       |      $c['one'][0]       |<br />|   4     |  2       |      $c['one'][1]       |<br />|   5     |  3       |      $c['one'][2]       | //$c['one'][2] is returned, $a,$b is destroyed<br />--------------------------------------- ?&gt;<br />I hope this helps.</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72945">  <div class="votes">
    <div id="Vu72945">
    <a href="/manual/vote-note.php?id=72945&amp;page=language.references.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72945">
    <a href="/manual/vote-note.php?id=72945&amp;page=language.references.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72945" title="89% like this...">
    45
    </div>
  </div>
  <a href="#72945" class="name">
  <strong class="user"><em>sony-santos at bol dot com dot br</em></strong></a><a class="genanchor" href="#72945"> &para;</a><div class="date" title="2007-02-05 03:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72945">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//if you do:<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="string">"eita"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;<br />echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// shows "eita"<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="string">"eita"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$c</span><span class="keyword">;<br />echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// shows "hihaha"<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// shows nothing (both are set to null)<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br />unset(</span><span class="default">$b</span><span class="keyword">);<br />echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// shows "hihaha"<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="string">"eita"</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;<br />echo </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// shows "eita"<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="string">"eita"</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= &amp;</span><span class="default">$c</span><span class="keyword">;<br />echo </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// shows "hihaha"<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />echo </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// shows nothing (both are set to null)<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"hihaha"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br />unset(</span><span class="default">$a</span><span class="keyword">);<br />echo </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// shows "hihaha"<br /></span><span class="default">?&gt;<br /></span><br />I tested each case individually on PHP 4.3.10.</span></code></div>
  </div>
 </div>
  <div class="note" id="68109">  <div class="votes">
    <div id="Vu68109">
    <a href="/manual/vote-note.php?id=68109&amp;page=language.references.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68109">
    <a href="/manual/vote-note.php?id=68109&amp;page=language.references.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68109" title="66% like this...">
    4
    </div>
  </div>
  <a href="#68109" class="name">
  <strong class="user"><em>donny at semeleer dot nl</em></strong></a><a class="genanchor" href="#68109"> &para;</a><div class="date" title="2006-07-13 07:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68109">
<div class="phpcode"><code><span class="html">Here's an example of unsetting a reference without losing an ealier set reference<br /><br /><span class="default">&lt;?php<br />$foo </span><span class="keyword">= </span><span class="string">'Bob'</span><span class="keyword">;              </span><span class="comment">// Assign the value 'Bob' to $foo<br /></span><span class="default">$bar </span><span class="keyword">= &amp;</span><span class="default">$foo</span><span class="keyword">;              </span><span class="comment">// Reference $foo via $bar.<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">"My name is </span><span class="default">$bar</span><span class="string">"</span><span class="keyword">;  </span><span class="comment">// Alter $bar...<br /></span><span class="keyword">echo </span><span class="default">$bar</span><span class="keyword">;<br />echo </span><span class="default">$foo</span><span class="keyword">;                 </span><span class="comment">// $foo is altered too.<br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="string">"I am Frank"</span><span class="keyword">;       </span><span class="comment">// Alter $foo and $bar because of the reference<br /></span><span class="keyword">echo </span><span class="default">$bar</span><span class="keyword">;                 </span><span class="comment">// output: I am Frank<br /></span><span class="keyword">echo </span><span class="default">$foo</span><span class="keyword">;                 </span><span class="comment">// output: I am Frank<br /><br /></span><span class="default">$foobar </span><span class="keyword">= &amp;</span><span class="default">$bar</span><span class="keyword">;           </span><span class="comment">// create a new reference between $foobar and $bar<br /></span><span class="default">$foobar </span><span class="keyword">= </span><span class="string">"hello </span><span class="default">$foobar</span><span class="string">"</span><span class="keyword">; </span><span class="comment">// alter $foobar and with that $bar and $foo<br /></span><span class="keyword">echo </span><span class="default">$foobar</span><span class="keyword">;              </span><span class="comment">//output : hello I am Frank<br /></span><span class="keyword">unset(</span><span class="default">$bar</span><span class="keyword">);               </span><span class="comment">// unset $bar and destroy the reference<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">"dude!"</span><span class="keyword">;            </span><span class="comment">// assign $bar<br />/* even though the reference between $bar and $foo is destroyed, and also the <br />reference between $bar and $foobar is destroyed, there is still a reference <br />between $foo and $foobar. */<br /></span><span class="keyword">echo </span><span class="default">$foo</span><span class="keyword">;                 </span><span class="comment">// output : hello I am Frank<br /></span><span class="keyword">echo </span><span class="default">$bar</span><span class="keyword">;                 </span><span class="comment">// output : due!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69429">  <div class="votes">
    <div id="Vu69429">
    <a href="/manual/vote-note.php?id=69429&amp;page=language.references.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69429">
    <a href="/manual/vote-note.php?id=69429&amp;page=language.references.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69429" title="63% like this...">
    5
    </div>
  </div>
  <a href="#69429" class="name">
  <strong class="user"><em>lazer_erazer</em></strong></a><a class="genanchor" href="#69429"> &para;</a><div class="date" title="2006-09-05 04:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69429">
<div class="phpcode"><code><span class="html">Your idea about unsetting all referenced variables at once is right,<br />just a tiny note that you changed NULL with unset()...<br />again, unset affects only one name and NULL affects the data,<br />which is kept by all the three names...<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span><br />This does also work!<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">=&amp; </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">; <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126699">  <div class="votes">
    <div id="Vu126699">
    <a href="/manual/vote-note.php?id=126699&amp;page=language.references.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126699">
    <a href="/manual/vote-note.php?id=126699&amp;page=language.references.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126699" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126699" class="name">
  <strong class="user"><em>smcbride at msn dot com</em></strong></a><a class="genanchor" href="#126699"> &para;</a><div class="date" title="2021-12-20 12:00"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126699">
<div class="phpcode"><code><span class="html">A little quirk on unset() when using references that may help someone.<br /><br />If you want to delete the element of a reference to an array, you need to have the reference point to the parent of the key that you want to delete.<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= array(</span><span class="string">'foo' </span><span class="keyword">=&gt; array(</span><span class="string">'foo_sub1' </span><span class="keyword">=&gt; </span><span class="string">'hey'</span><span class="keyword">, </span><span class="string">'foo_sub2' </span><span class="keyword">=&gt; </span><span class="string">'you'</span><span class="keyword">), </span><span class="string">'bar' </span><span class="keyword">=&gt; array(</span><span class="string">'bar_sub1' </span><span class="keyword">=&gt; </span><span class="string">'good'</span><span class="keyword">, </span><span class="string">'bar_sub2' </span><span class="keyword">=&gt; </span><span class="string">'bye'</span><span class="keyword">));<br /><br /></span><span class="default">$parref </span><span class="keyword">=  &amp;</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'foo'</span><span class="keyword">];<br /></span><span class="default">$childref </span><span class="keyword">= &amp;</span><span class="default">$parref</span><span class="keyword">[</span><span class="string">'foo_sub1'</span><span class="keyword">];<br /><br />unset(</span><span class="default">$childref</span><span class="keyword">);                   </span><span class="comment">// this will simply unset the reference to child<br /></span><span class="keyword">unset(</span><span class="default">$parref</span><span class="keyword">[</span><span class="string">'foo_sub1'</span><span class="keyword">]);   </span><span class="comment">// this will actually unset the data in $arr;<br /></span><span class="default">$parref</span><span class="keyword">[</span><span class="string">'foo_sub1'</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;  </span><span class="comment">// this will set the element to NULL, but not delete it.  If you run it after unset(), it add the key back and set it to NULL<br /><br /></span><span class="default">?&gt;<br /></span><br />This is nice to use for passing something dynamically to a function by reference without copying the entire array to the function, but you want to do some maintenance on the array.</span></code></div>
  </div>
 </div>
  <div class="note" id="126161">  <div class="votes">
    <div id="Vu126161">
    <a href="/manual/vote-note.php?id=126161&amp;page=language.references.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126161">
    <a href="/manual/vote-note.php?id=126161&amp;page=language.references.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126161" title="100% like this...">
    2
    </div>
  </div>
  <a href="#126161" class="name">
  <strong class="user"><em>frowa at foxmail dot com</em></strong></a><a class="genanchor" href="#126161"> &para;</a><div class="date" title="2021-06-12 10:33"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126161">
<div class="phpcode"><code><span class="html">it's my way to remember.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// the var $a is point to the value 1, as a line connect to value 1<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;      <br /><br /></span><span class="comment">// the var $b point to the value which the var $a point to, as a new line connect to value 1<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;  <br /><br /></span><span class="comment">// cut the line of the var $a to value 1,now $a is freedom,it's nothing point to. so the value of $a is null<br /></span><span class="keyword">unset(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />         $a--------&gt; 1<br />                           ↑<br />                            |<br />                            |<br />                           $b</span></code></div>
  </div>
 </div>
  <div class="note" id="61039">  <div class="votes">
    <div id="Vu61039">
    <a href="/manual/vote-note.php?id=61039&amp;page=language.references.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61039">
    <a href="/manual/vote-note.php?id=61039&amp;page=language.references.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61039" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#61039" class="name">
  <strong class="user"><em>libi</em></strong></a><a class="genanchor" href="#61039"> &para;</a><div class="date" title="2006-01-24 12:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61039">
<div class="phpcode"><code><span class="html">clerca at inp-net dot eu dot org<br />"<br />If you have a lot of references linked to the same contents, maybe it could be useful to do this : <br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= &amp; </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// $a, $b, $c reference the same content '1'<br /><br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">; </span><span class="comment">// All variables $a, $b or $c are unset<br /></span><span class="default">?&gt;<br /></span><br />"<br /><br />------------------------<br /><br />NULL will not result in unseting the variables.<br />Its only change the value to "null" for all the variables.<br />becouse they all points to the same "part" in the memory.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.references.unset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.unset.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.references.php">References Explained</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
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
                                                <li class="current">
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
