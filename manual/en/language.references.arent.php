<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: What References Are Not - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.references.arent.php">
 <link rel="shorturl" href="https://www.php.net/references.arent">
 <link rel="alternate" href="https://www.php.net/references.arent" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.references.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.references.whatdo.php">
 <link rel="next" href="https://www.php.net/manual/en/language.references.pass.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.references.arent.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.references.arent.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.references.arent.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.references.arent.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.references.arent.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.references.arent.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.references.arent.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.references.arent.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.references.arent.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.references.arent.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.references.arent.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="What References Are Not" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: What References Are Not - Manual" />
<meta name="twitter:description" content="What References Are Not" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: What References Are Not - Manual" />
<meta itemprop="description" content="What References Are Not" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="What References Are Not" />

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
        <a href="language.references.pass.php">
          Passing by Reference &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.references.whatdo.php">
          &laquo; What References Do        </a>
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
            <option value='en/language.references.arent.php' selected="selected">English</option>
            <option value='de/language.references.arent.php'>German</option>
            <option value='es/language.references.arent.php'>Spanish</option>
            <option value='fr/language.references.arent.php'>French</option>
            <option value='it/language.references.arent.php'>Italian</option>
            <option value='ja/language.references.arent.php'>Japanese</option>
            <option value='pt_BR/language.references.arent.php'>Brazilian Portuguese</option>
            <option value='ru/language.references.arent.php'>Russian</option>
            <option value='tr/language.references.arent.php'>Turkish</option>
            <option value='uk/language.references.arent.php'>Ukrainian</option>
            <option value='zh/language.references.arent.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.references.arent" class="sect1">
   <h2 class="title">What References Are Not</h2>
   <p class="para">
    As said before, references are not pointers. That means, the
    following construct won&#039;t do what you expect:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$var</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$var </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"baz"</span><span style="color: #007700">];<br />}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    What happens is that <var class="varname">$var</var> in
    <var class="varname">foo</var> will be bound with
    <var class="varname">$bar</var> in the caller, but then
    re-bound with <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS["baz"]</a></var>. There&#039;s no way
    to bind <var class="varname">$bar</var> in the calling scope to something else
    using the reference mechanism, since <var class="varname">$bar</var> is not
    available in the function <var class="varname">foo</var> (it is represented by
    <var class="varname">$var</var>, but <var class="varname">$var</var> has only
    variable contents and not name-to-value binding in the calling
    <a href="features.gc.refcounting-basics.php" class="link">symbol table</a>).
    You can use <a href="language.references.return.php" class="link">returning
    references</a> to reference variables selected by the function.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.references.arent%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.references.arent&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.arent.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="85533">  <div class="votes">
    <div id="Vu85533">
    <a href="/manual/vote-note.php?id=85533&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85533">
    <a href="/manual/vote-note.php?id=85533&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85533" title="87% like this...">
    178
    </div>
  </div>
  <a href="#85533" class="name">
  <strong class="user"><em>Andrew</em></strong></a><a class="genanchor" href="#85533"> &para;</a><div class="date" title="2008-09-04 10:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85533">
<div class="phpcode"><code><span class="html">What References are not: References.<br /><br />References are opaque things that are like pointers, except A) smarter and B) referring to HLL objects, rather than memory addresses. PHP doesn't have references. PHP has a syntax for creating *aliases* which are multiple names for the same object. PHP has a few pieces of syntax for calling and returning "by reference", which really just means inhibiting copying. At no point in this "references" section of the manual are there any references.</span></code></div>
  </div>
 </div>
  <div class="note" id="83733">  <div class="votes">
    <div id="Vu83733">
    <a href="/manual/vote-note.php?id=83733&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83733">
    <a href="/manual/vote-note.php?id=83733&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83733" title="86% like this...">
    83
    </div>
  </div>
  <a href="#83733" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#83733"> &para;</a><div class="date" title="2008-06-09 11:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83733">
<div class="phpcode"><code><span class="html">The example given in the text:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">(&amp;</span><span class="default">$var</span><span class="keyword">)<br />{<br />    </span><span class="default">$var </span><span class="keyword">=&amp; </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"baz"</span><span class="keyword">];<br />}<br /></span><span class="default">foo</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span><br />illustrates (to my mind anyway) why the = and &amp; should be written together as a new kind of replacement operator and not apart as in C, like  $var = &amp;$GLOBALS["baz"];<br /><br />Using totally new terminology:<br /><br />To me the result of this function is not surprising because the =&amp; means 'change the "destination" of $var from wherever it was to the same as the destination of $GLOBALS["baz"]. Well it 'was' the actual parameter $bar, but now it will be the global at "baz".<br /><br />If you simply remove the &amp; in the the replacement, it will place the value of $GLOBALS["baz'] into the destination of $var, which is $bar (unless $bar was already a reference, then the value goes into that destination.)<br /><br />To summarize, =, replaces the 'destination's value; =&amp;, changes the destination.</span></code></div>
  </div>
 </div>
  <div class="note" id="121801">  <div class="votes">
    <div id="Vu121801">
    <a href="/manual/vote-note.php?id=121801&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121801">
    <a href="/manual/vote-note.php?id=121801&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121801" title="80% like this...">
    3
    </div>
  </div>
  <a href="#121801" class="name">
  <strong class="user"><em>bravo1romeo</em></strong></a><a class="genanchor" href="#121801"> &para;</a><div class="date" title="2017-10-27 03:58"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121801">
<div class="phpcode"><code><span class="html">You can reference values of an array to the values of another array,<br />however if you change the array by reassigning it, the reference will no longer apply, for example:<br /><br /><span class="default">&lt;?php<br />$ref </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">];<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);<br /></span><span class="default">$foo </span><span class="keyword">= [</span><span class="string">'A'</span><span class="keyword">];<br /> <br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)<br />    </span><span class="default">$foo</span><span class="keyword">[] =&amp; </span><span class="default">$ref</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);<br /><br /></span><span class="default">$ref </span><span class="keyword">= [</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">];<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Will output:<br />Array<br />(<br />    [0] =&gt; A<br />    [1] =&gt; 1<br />    [2] =&gt; 2<br />    [3] =&gt; 3<br />)<br />Array<br />(<br />    [0] =&gt; 1<br />    [1] =&gt; 2<br />    [2] =&gt; 3<br />)<br />Array<br />(<br />    [0] =&gt; A<br />    [1] =&gt; 1<br />    [2] =&gt; 2<br />    [3] =&gt; 3<br />)<br />Array<br />(<br />    [0] =&gt; 4<br />    [1] =&gt; 5<br />    [2] =&gt; 6<br />)<br /><br />Therefore if you want the values to still reference you must set the array values individually to not reassign the array:<br /><span class="default">&lt;?php<br />$ref </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">];<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);<br /></span><span class="default">$foo </span><span class="keyword">= [</span><span class="string">'A'</span><span class="keyword">];<br /> <br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)<br />    </span><span class="default">$foo</span><span class="keyword">[] =&amp; </span><span class="default">$ref</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);<br /><br /></span><span class="default">$bar </span><span class="keyword">= [</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">];<br />foreach(</span><span class="default">$bar </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    </span><span class="default">$ref</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Results:<br />Array<br />(<br />    [0] =&gt; A<br />    [1] =&gt; 1<br />    [2] =&gt; 2<br />    [3] =&gt; 3<br />)<br />Array<br />(<br />    [0] =&gt; 1<br />    [1] =&gt; 2<br />    [2] =&gt; 3<br />)<br />Array<br />(<br />    [0] =&gt; A<br />    [1] =&gt; 4<br />    [2] =&gt; 5<br />    [3] =&gt; 6<br />)<br />Array<br />(<br />    [0] =&gt; 4<br />    [1] =&gt; 5<br />    [2] =&gt; 6<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="102066">  <div class="votes">
    <div id="Vu102066">
    <a href="/manual/vote-note.php?id=102066&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102066">
    <a href="/manual/vote-note.php?id=102066&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102066" title="71% like this...">
    6
    </div>
  </div>
  <a href="#102066" class="name">
  <strong class="user"><em>briank at kappacs dot com</em></strong></a><a class="genanchor" href="#102066"> &para;</a><div class="date" title="2011-01-25 02:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102066">
<div class="phpcode"><code><span class="html">I think the terminology is tripping people up when it comes to assigning objects.<br /><br />Try thinking of binding and references like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># Code:<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">; </span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">(); </span><span class="default">$d </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;<br /><br /></span><span class="comment"># Behind the scenes symbol table and values:<br /></span><span class="default">$global_names </span><span class="keyword">= array(<br /></span><span class="string">'a' </span><span class="keyword">=&gt; array(</span><span class="string">'binding' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">),<br /></span><span class="string">'b' </span><span class="keyword">=&gt; array(</span><span class="string">'binding' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">),<br /></span><span class="string">'c' </span><span class="keyword">=&gt; array(</span><span class="string">'binding' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">),<br /></span><span class="string">'d' </span><span class="keyword">=&gt; array(</span><span class="string">'binding' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">),<br />);<br /></span><span class="default">$values </span><span class="keyword">= array(<br /></span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="string">'scalar'</span><span class="keyword">, </span><span class="string">'value' </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">),<br /></span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="string">'objId'</span><span class="keyword">, </span><span class="string">'value' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">),<br /></span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="string">'objId'</span><span class="keyword">, </span><span class="string">'value' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">)<br />);<br /></span><span class="default">?&gt;<br /></span><br />$a is bound to (or references, or is a reference to) the value at index 0 (scalar 5).<br />$b is bound to the same thing as $a--the value at index 0 (scalar 5).<br />$c is bound to the value at index 1 (object ID 0).<br />$d is bound to the value at index 2 (a separate and distinct value also referring to object ID 0).<br /><br />When the documentation states that you cannot [re-]bind $bar to something else from within the example function foo, it means you can't change what in my pseudo-engine would be $global_names['bar']['binding']. You can only change $values[$names['var']['binding']] (using "$var ="; the same value referenced/bound by $values[$global_names['bar']['binding']) or $names['var']['binding'] (using "$var =&amp;").<br /><br />Also consider this code:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">; </span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br />function </span><span class="default">foo </span><span class="keyword">(&amp;</span><span class="default">$c</span><span class="keyword">) { </span><span class="default">$c </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">(); }<br />function </span><span class="default">bar </span><span class="keyword">() { return new </span><span class="default">stdClass</span><span class="keyword">(); }<br />function &amp;</span><span class="default">fum </span><span class="keyword">() { return new </span><span class="default">stdClass</span><span class="keyword">(); }<br />if (!</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)) { echo </span><span class="string">"\$a does not initially refer to an object\n"</span><span class="keyword">; }<br /></span><span class="default">foo</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />echo </span><span class="string">"\$b "</span><span class="keyword">, (</span><span class="default">$a </span><span class="keyword">=== </span><span class="default">$b</span><span class="keyword">)? </span><span class="string">"has not"</span><span class="keyword">: </span><span class="string">"has"</span><span class="keyword">, </span><span class="string">" been re-bound by foo\n"</span><span class="keyword">;<br />if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)) { echo </span><span class="string">"\$a now contains an object identifier\n"</span><span class="keyword">; }<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">bar</span><span class="keyword">();<br />echo </span><span class="string">"\$b "</span><span class="keyword">, (</span><span class="default">$a </span><span class="keyword">=== </span><span class="default">$b</span><span class="keyword">)? </span><span class="string">"has not"</span><span class="keyword">: </span><span class="string">"has"</span><span class="keyword">, </span><span class="string">" been re-bound by bar\n"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">fum</span><span class="keyword">();<br />echo </span><span class="string">"\$b "</span><span class="keyword">, (</span><span class="default">$a </span><span class="keyword">=== </span><span class="default">$b</span><span class="keyword">)? </span><span class="string">"has not"</span><span class="keyword">: </span><span class="string">"has"</span><span class="keyword">, </span><span class="string">" been re-bound by fum\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />which outputs:<br /><br />$a does not initially refer to an object<br />$b has not been re-bound by foo<br />$a now contains an object identifier<br />$b has not been re-bound by bar<br />$b has been re-bound by fum<br /><br />In other words, the value can be changed but the binding does not (except for returning a reference), exactly as stated.<br /><br />Object identifiers do make object "values" work like pointers (but not to the extent of C/C++, and not like references).</span></code></div>
  </div>
 </div>
  <div class="note" id="40307">  <div class="votes">
    <div id="Vu40307">
    <a href="/manual/vote-note.php?id=40307&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40307">
    <a href="/manual/vote-note.php?id=40307&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40307" title="69% like this...">
    9
    </div>
  </div>
  <a href="#40307" class="name">
  <strong class="user"><em>ansonyumo at email dot com</em></strong></a><a class="genanchor" href="#40307"> &para;</a><div class="date" title="2004-02-28 01:47"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40307">
<div class="phpcode"><code><span class="html">The assertion,  "references are not like pointers," is a bit confusing.<br /><br />In the example, the author shows how assigning a reference to a formal parameter that is also a reference does not affect the value of the actual parameter. This is exactly how pointers behave in C. The only difference is that, in PHP, you don't have to dereference the pointer to get at the value.<br /><br />-+-+-<br />int bar = 99;<br /><br />void foo(int* a)<br />{<br />    a = &amp;bar;<br />}<br /><br />int main()<br />{<br />   int baz = 1;<br />   foo(&amp;baz);<br />   printf("%d\n", baz);<br />   return 0;<br />}<br />-+-+-<br /><br />The output will be 1, because foo does not assign a value to the dereferenced formal parameter. Instead, it reassigns the formal parameter within foo's scope.<br /><br />Alternatively,<br />-+-+-<br />int bar = 99;<br /><br />void foo(int* a)<br />{<br />    *a = bar;<br />}<br /><br />int main()<br />{<br />   int baz = 1;<br />   foo(&amp;baz);<br />   printf("%d\n", baz);<br />   return 0;<br />}<br />-+-+-<br /><br />The output will be 9, because foo dereferenced the formal parameter before assignment.<br /><br />So, while there are differences in syntax, PHP references really are very much like pointers in C.<br /><br />I would agree that PHP references are very different from Java references, as Java does not have any mechanism to assign a value to a reference in such a way that it modifies the actual parameter's value.</span></code></div>
  </div>
 </div>
  <div class="note" id="121413">  <div class="votes">
    <div id="Vu121413">
    <a href="/manual/vote-note.php?id=121413&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121413">
    <a href="/manual/vote-note.php?id=121413&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121413" title="66% like this...">
    2
    </div>
  </div>
  <a href="#121413" class="name">
  <strong class="user"><em>leonardp122794 at gmail dot com</em></strong></a><a class="genanchor" href="#121413"> &para;</a><div class="date" title="2017-07-21 07:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121413">
<div class="phpcode"><code><span class="html">I kinda agree with the user above who said that php references were actually quite a bit more like c pointers than JAVA or C++.<br /><br />And here's why.<br /><br />They act essentially exactly like pointers.<br /><br />The difference between unset($x) and free(x) seem to be differences between the unset() and free() operators whether than differences between references and pointers themselves.<br /><br />Free deallocates the memory on the heap.<br /><br />Unset simple removes the variable.<br /><br />Other than that, we're dealing with two very simple constructs here.</span></code></div>
  </div>
 </div>
  <div class="note" id="118601">  <div class="votes">
    <div id="Vu118601">
    <a href="/manual/vote-note.php?id=118601&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118601">
    <a href="/manual/vote-note.php?id=118601&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118601" title="66% like this...">
    1
    </div>
  </div>
  <a href="#118601" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118601"> &para;</a><div class="date" title="2016-01-06 12:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118601">
<div class="phpcode"><code><span class="html">It is possible to do something a bit similar to pointers (like in C), where something like array(&amp;$a) is a pointer to a variable called $a; this value can then be passed around as a value; it is not a variable or an alias or whatever but is an actual value.<br /><br />You can then use codes such as these to read/write through pointers:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) { return </span><span class="default">$x</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; }<br />function </span><span class="default">put</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">) { </span><span class="default">$x</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$y</span><span class="keyword">; }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="16025">  <div class="votes">
    <div id="Vu16025">
    <a href="/manual/vote-note.php?id=16025&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16025">
    <a href="/manual/vote-note.php?id=16025&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16025" title="65% like this...">
    6
    </div>
  </div>
  <a href="#16025" class="name">
  <strong class="user"><em>christian at kno dot at</em></strong></a><a class="genanchor" href="#16025"> &para;</a><div class="date" title="2001-10-12 06:04"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16025">
<div class="phpcode"><code><span class="html">As said above references are not pointers.
<br />
<br />Following example shows a difference between pointers and references.
<br />
<br />This Code
<br />&lt;?
<br />    $b = 1;
<br />    $a =&amp; $b;
<br />
<br />    print("&lt;pre&gt;");
<br />    print("\$a === \$b: ".(($a === $b) ? "ok" : "failed")."\n");
<br />    print("unsetting \$a...\n");
<br />    unset($a);
<br />    print("now \$a is ".(isset($a) ? "set" : "unset")." and \$b is ".(isset($b) ? "set" : "unset")."\n");
<br />    print("&lt;/pre&gt;");
<br />
<br />    $b = 1;
<br />    $a =&amp; $b;
<br />
<br />    print("&lt;pre&gt;");
<br />    print("\$a === \$b: ".(($a === $b) ? "ok" : "failed")."\n");
<br />    print("unsetting \$b...\n");
<br />    unset($b);
<br />    print("now \$a is ".(isset($a) ? "set" : "unset")." and \$b is ".(isset($b) ? "set" : "unset")."\n");
<br />    print("&lt;/pre&gt;");
<br />?&gt;
<br />
<br />will produce this output:
<br />---------
<br />$a === $b: ok
<br />unsetting $a...
<br />now $a is unset and $b is set
<br />
<br />$a === $b: ok
<br />unsetting $b...
<br />now $a is set and $b is unset
<br />---------
<br />
<br />So you see that $a and $b are identical ($a === $b -&gt; true), but if one of both is unset, the other is not effected.</span></code></div>
  </div>
 </div>
  <div class="note" id="117780">  <div class="votes">
    <div id="Vu117780">
    <a href="/manual/vote-note.php?id=117780&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117780">
    <a href="/manual/vote-note.php?id=117780&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117780" title="60% like this...">
    1
    </div>
  </div>
  <a href="#117780" class="name">
  <strong class="user"><em>ArticIce(Juice)</em></strong></a><a class="genanchor" href="#117780"> &para;</a><div class="date" title="2015-08-07 06:57"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117780">
<div class="phpcode"><code><span class="html">Consider this block of code:<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= [</span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'3'</span><span class="keyword">, </span><span class="string">'4'</span><span class="keyword">];<br /><br />foreach (</span><span class="default">$arr </span><span class="keyword">as &amp;</span><span class="default">$i</span><span class="keyword">) {}<br />echo </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="string">', '</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /><br />foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">) {}<br />echo </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="string">', '</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />which will output<br />1, 2, 3, 4<br />1, 2, 3, 3<br /><br />although it seems no changes were made to the array.<br /><br />The last item in the array gets overwritten, because reference is replaced by a copy in the second iteration. In more detail, it gets overwritten first by a 1, then by 2, by 3 and again by a 3.<br /><br />Make sure to do an unset($i) when you run an iteration by copy after an iteration by reference using same variable names!</span></code></div>
  </div>
 </div>
  <div class="note" id="107881">  <div class="votes">
    <div id="Vu107881">
    <a href="/manual/vote-note.php?id=107881&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107881">
    <a href="/manual/vote-note.php?id=107881&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107881" title="58% like this...">
    8
    </div>
  </div>
  <a href="#107881" class="name">
  <strong class="user"><em>shuimuqingshu at gmail dot com</em></strong></a><a class="genanchor" href="#107881"> &para;</a><div class="date" title="2012-03-13 02:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107881">
<div class="phpcode"><code><span class="html">i think the code below can tell the difference between PHP reference and C pointer:<br /><br />In PHP:<br /><span class="default">&lt;?php<br />    $a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">a</span><span class="keyword">;<br />    echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//0<br />    </span><span class="keyword">unset(</span><span class="default">$b</span><span class="keyword">); </span><span class="comment">// unset $b<br />    </span><span class="keyword">echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//0 it's OK<br /></span><span class="default">?&gt;<br /></span><br />In C:<br />#include &lt;stdio.h&gt;<br />int main(int argc, char const *argv[]) {<br />    int a = 0;<br />    int* b = &amp;a;<br /> <br />    printf("%i\n", a); //0<br />    free(b);              // free b<br />    printf("%i\n", a); //get error: *** error for object 0x7fff6350da08: pointer being freed was not allocated<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="98801">  <div class="votes">
    <div id="Vu98801">
    <a href="/manual/vote-note.php?id=98801&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98801">
    <a href="/manual/vote-note.php?id=98801&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98801" title="58% like this...">
    3
    </div>
  </div>
  <a href="#98801" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98801"> &para;</a><div class="date" title="2010-07-08 09:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98801">
<div class="phpcode"><code><span class="html">I understand this like that:
<br />　The reference in PHP is like creating single pointer at own variable in C/C++ and point at variable ( without pointers arithmetic and we can't get number of variable address in memory).
<br />
<br />For example
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;
<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;
<br /></span><span class="default">$c </span><span class="keyword">= &amp;</span><span class="default">$b</span><span class="keyword">;
<br />echo </span><span class="string">"</span><span class="default">$a</span><span class="string"> - </span><span class="default">$b</span><span class="string"> - </span><span class="default">$c</span><span class="string">&lt;br&gt;"</span><span class="keyword">;
<br /></span><span class="comment">// 3 pointers ( a , b , c) point at memory location where  stored value of number is 4.
<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;
<br />echo </span><span class="string">"</span><span class="default">$a</span><span class="string"> - </span><span class="default">$b</span><span class="string"> - </span><span class="default">$c</span><span class="string">&lt;br&gt;"</span><span class="keyword">;
<br /></span><span class="comment">// all variables equals 5;
<br /></span><span class="keyword">unset(</span><span class="default">$a</span><span class="keyword">);
<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">6</span><span class="keyword">;
<br />echo </span><span class="string">"</span><span class="default">$a</span><span class="string"> - </span><span class="default">$b</span><span class="string"> - </span><span class="default">$c</span><span class="string">&lt;br&gt;"</span><span class="keyword">;
<br /></span><span class="comment">//$a is not exist but it was only pointer ( not real part of memory) so we have to way to get value or change it
<br /></span><span class="default">?&gt;
<br /></span>----
<br />When we want create some "pointer of pointer" in PHP i can't do that because it's impossible in PHP. We need pointer to another pointer to change the place that the pointer refers to. In your exaple you just change value of variable in function. ( no operation of pointers )</span></code></div>
  </div>
 </div>
  <div class="note" id="39372">  <div class="votes">
    <div id="Vu39372">
    <a href="/manual/vote-note.php?id=39372&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39372">
    <a href="/manual/vote-note.php?id=39372&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39372" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#39372" class="name">
  <strong class="user"><em>schultz __at__ widescreen __dot__ ch</em></strong></a><a class="genanchor" href="#39372"> &para;</a><div class="date" title="2004-01-26 07:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39372">
<div class="phpcode"><code><span class="html">A not so simple Workaround...but still doable...have fun<br /><br />class My{<br />    var $value;<br />    <br />    function get1(&amp;$ref){<br />        $ref[] =&amp; $this;<br />    }<br />    <br />    function get2(&amp;$ref){<br />        $ref =&amp; $this;<br />    }<br />    <br />    function get3(&amp;$ref){<br />        $ref = $this;<br />    }<br />}<br /><br />$m = new My();<br /><br />$m-&gt;value = 'foo';<br />$m-&gt;get1($ref=array());<br />$m1 =&amp; $ref[0];<br />$m1-&gt;value = 'bar';<br />echo "\n".'Works but is ugly...';<br />echo "\n".' m:'. get_class($m) . '-&gt;value = '. $m-&gt;value;<br />echo "\n".' m1:'. get_class($m1) . '-&gt;value = '. $m1-&gt;value;<br /><br />echo "\n".'Does not work because references are not pointers...';<br />$m-&gt;value = 'foo';<br />$m-&gt;get2($m2);<br />$m2-&gt;value = 'bar';<br />echo "\n".' m:'. get_class($m) . '-&gt;value = '. $m-&gt;value;<br />echo "\n".' m2:'. get_class($m2) . '-&gt;value = '. $m2-&gt;value;<br /><br />$m-&gt;value = 'foo';<br />$m-&gt;get3($m3);<br />$m3-&gt;value = 'bar';<br />echo "\n".'Does not work becuase it is set to a copy';<br />echo "\n".' m:'. get_class($m) . '-&gt;value = '.$m-&gt;value;<br />echo "\n".' m3:'. get_class($m3) . '-&gt;value = '. $m3-&gt;value;</span></code></div>
  </div>
 </div>
  <div class="note" id="123935">  <div class="votes">
    <div id="Vu123935">
    <a href="/manual/vote-note.php?id=123935&amp;page=language.references.arent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123935">
    <a href="/manual/vote-note.php?id=123935&amp;page=language.references.arent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123935" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#123935" class="name">
  <strong class="user"><em>minhtrung2606 at gmail dot com</em></strong></a><a class="genanchor" href="#123935"> &para;</a><div class="date" title="2019-06-13 01:36"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123935">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">(&amp;</span><span class="default">$var</span><span class="keyword">)<br />{<br />    </span><span class="default">$var </span><span class="keyword">=&amp; </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"baz"</span><span class="keyword">];<br />}<br /></span><span class="default">foo</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span><br />Let's re-write the above snippet of code in another way<br /><br /><span class="default">&lt;?php<br />$bar </span><span class="keyword">= &amp;</span><span class="default">$var</span><span class="keyword">; </span><span class="comment">// At this time, $bar refers to the content to which $var refers which is NULL or empty<br /></span><span class="default">$var </span><span class="keyword">= &amp; </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"baz"</span><span class="keyword">]; </span><span class="comment">// At this time, $var changes to refer to another content to which global $baz variable refers. However $bar is still refers to the content of NULL<br /><br /></span><span class="default">Expected Result</span><span class="keyword">: </span><span class="default">$bar will hold the content of $var </span><span class="keyword">(</span><span class="default">which is now the content of $baz</span><span class="keyword">)<br /></span><span class="default">Actual Result</span><span class="keyword">: </span><span class="default">$bar holds a content of NULL </span><span class="keyword">or empty. </span><span class="default">This is what</span><span class="string">'s PHP References does</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.references.arent&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.arent.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
