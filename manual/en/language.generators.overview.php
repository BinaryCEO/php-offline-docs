<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Generators overview - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.generators.overview.php">
 <link rel="shorturl" href="https://www.php.net/generators.overview">
 <link rel="alternate" href="https://www.php.net/generators.overview" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.generators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.generators.php">
 <link rel="next" href="https://www.php.net/manual/en/language.generators.syntax.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.generators.overview.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.generators.overview.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.generators.overview.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.generators.overview.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.generators.overview.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.generators.overview.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.generators.overview.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.generators.overview.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.generators.overview.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.generators.overview.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.generators.overview.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generators overview" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Generators overview - Manual" />
<meta name="twitter:description" content="Generators overview" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Generators overview - Manual" />
<meta itemprop="description" content="Generators overview" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generators overview" />

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
        <a href="language.generators.syntax.php">
          Generator syntax &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.generators.php">
          &laquo; Generators        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.generators.php'>Generators</a></li>      </ul>
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
            <option value='en/language.generators.overview.php' selected="selected">English</option>
            <option value='de/language.generators.overview.php'>German</option>
            <option value='es/language.generators.overview.php'>Spanish</option>
            <option value='fr/language.generators.overview.php'>French</option>
            <option value='it/language.generators.overview.php'>Italian</option>
            <option value='ja/language.generators.overview.php'>Japanese</option>
            <option value='pt_BR/language.generators.overview.php'>Brazilian Portuguese</option>
            <option value='ru/language.generators.overview.php'>Russian</option>
            <option value='tr/language.generators.overview.php'>Turkish</option>
            <option value='uk/language.generators.overview.php'>Ukrainian</option>
            <option value='zh/language.generators.overview.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.generators.overview" class="sect1">
  <h2 class="title">Generators overview</h2>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p>

  <p class="para">
   Generators provide an easy way to implement simple
   <a href="language.oop5.iterations.php" class="link">iterators</a> without the
   overhead or complexity of implementing a class that implements the
   <span class="classname"><a href="class.iterator.php" class="classname">Iterator</a></span> interface.
  </p>

  <p class="para">
   A generator offers a convenient way to provide data to <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> loops without
   having to build an array in memory ahead of time, which may cause the program
   to exceed a memory limit or require a considerable amount of
   processing time to generate. Instead, a generator function can be used,
   which is the same as a normal
   <a href="functions.user-defined.php" class="link">function</a>, except that instead
   of
   <a href="functions.returning-values.php" class="link">return</a>ing once, a
   generator can <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a> as many times as it needs to in order to provide the
   values to be iterated over.
   Like with iterators, random data access is not possible.
  </p>

  <p class="para">
   A simple example of this is to reimplement the <span class="function"><a href="function.range.php" class="function">range()</a></span>
   function as a generator. The standard <span class="function"><a href="function.range.php" class="function">range()</a></span> function
   has to generate an array with every value in it and return it, which can
   result in large arrays: for example, calling
   <strong class="command">range(0, 1000000)</strong> will result in well over 100 MB of
   memory being used.
  </p>

  <p class="para">
   As an alternative, we can implement an <code class="literal">xrange()</code>
   generator, which will only ever need enough memory to create an
   <span class="classname"><a href="class.iterator.php" class="classname">Iterator</a></span> object and track the current state of the
   generator internally, which turns out to be less than 1 kilobyte.
  </p>

  <div class="example" id="example-422">
   <p><strong>Example #1 Implementing <span class="function"><a href="function.range.php" class="function">range()</a></span> as a generator</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">xrange</span><span style="color: #007700">(</span><span style="color: #0000BB">$start</span><span style="color: #007700">, </span><span style="color: #0000BB">$limit</span><span style="color: #007700">, </span><span style="color: #0000BB">$step </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">$start </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">$limit</span><span style="color: #007700">) {<br />        if (</span><span style="color: #0000BB">$step </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />            throw new </span><span style="color: #0000BB">LogicException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Step must be positive'</span><span style="color: #007700">);<br />        }<br /><br />        for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">$start</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">$limit</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">+= </span><span style="color: #0000BB">$step</span><span style="color: #007700">) {<br />            yield </span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />        }<br />    } else {<br />        if (</span><span style="color: #0000BB">$step </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />            throw new </span><span style="color: #0000BB">LogicException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Step must be negative'</span><span style="color: #007700">);<br />        }<br /><br />        for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">$start</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">$limit</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">+= </span><span style="color: #0000BB">$step</span><span style="color: #007700">) {<br />            yield </span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /><br /></span><span style="color: #FF8000">/*<br /> * Note that both range() and xrange() result in the same<br /> * output below.<br /> */<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Single digit odd numbers from range():  '</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">9</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">) as </span><span style="color: #0000BB">$number</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$number</span><span style="color: #DD0000"> "</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">'Single digit odd numbers from xrange(): '</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">xrange</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">9</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">) as </span><span style="color: #0000BB">$number</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$number</span><span style="color: #DD0000"> "</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
Single digit odd numbers from range():  1 3 5 7 9
Single digit odd numbers from xrange(): 1 3 5 7 9
</pre></div>
   </div>
  </div>

  <div class="sect2" id="language.generators.object">
   <h3 class="title"><span class="classname"><a href="class.generator.php" class="classname">Generator</a></span> objects</h3>
   <p class="para">
    When a generator function is called, a new object of the
    internal <span class="classname"><a href="class.generator.php" class="classname">Generator</a></span> class is returned. This object
    implements the <span class="classname"><a href="class.iterator.php" class="classname">Iterator</a></span> interface in much the same
    way as a forward-only iterator object would, and provides methods that can
    be called to manipulate the state of the generator, including sending
    values to and returning values from it.
   </p>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/generators.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.generators.overview%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.generators.overview&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.generators.overview.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112985">  <div class="votes">
    <div id="Vu112985">
    <a href="/manual/vote-note.php?id=112985&amp;page=language.generators.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112985">
    <a href="/manual/vote-note.php?id=112985&amp;page=language.generators.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112985" title="77% like this...">
    181
    </div>
  </div>
  <a href="#112985" class="name">
  <strong class="user"><em>bloodjazman at gmail dot com</em></strong></a><a class="genanchor" href="#112985"> &para;</a><div class="date" title="2013-08-15 07:32"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112985">
<div class="phpcode"><code><span class="html">for the protection from the leaking of resources <br />see RFC <a href="https://wiki.php.net/rfc/generators#closing_a_generator" rel="nofollow" target="_blank">https://wiki.php.net/rfc/generators#closing_a_generator</a><br /><br />and use finnaly<br /><br />sample code<br /><br />function getLines($file) {<br />    $f = fopen($file, 'r');<br />    try {<br />        while ($line = fgets($f)) {<br />            yield $line;<br />        }<br />    } finally {<br />        fclose($f);<br />    }<br />}<br /><br />foreach (getLines("file.txt") as $n =&gt; $line) {<br />    if ($n &gt; 5) break;<br />    echo $line;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="119275">  <div class="votes">
    <div id="Vu119275">
    <a href="/manual/vote-note.php?id=119275&amp;page=language.generators.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119275">
    <a href="/manual/vote-note.php?id=119275&amp;page=language.generators.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119275" title="67% like this...">
    44
    </div>
  </div>
  <a href="#119275" class="name">
  <strong class="user"><em>montoriusz at gmail dot com</em></strong></a><a class="genanchor" href="#119275"> &para;</a><div class="date" title="2016-05-01 11:55"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119275">
<div class="phpcode"><code><span class="html">Bear in mind that execution of a generator function is postponed until iteration over its result (the Generator object) begins. This might confuse one if the result of a generator is assigned to a variable instead of immediate iteration.<br /><br /><span class="default">&lt;?php<br /><br />$some_state </span><span class="keyword">= </span><span class="string">'initial'</span><span class="keyword">;<br /><br />function </span><span class="default">gen</span><span class="keyword">() {<br />    global </span><span class="default">$some_state</span><span class="keyword">; <br /><br />    echo </span><span class="string">"gen() execution start\n"</span><span class="keyword">;<br />    </span><span class="default">$some_state </span><span class="keyword">= </span><span class="string">"changed"</span><span class="keyword">;<br /><br />    yield </span><span class="default">1</span><span class="keyword">;<br />    yield </span><span class="default">2</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">peek_state</span><span class="keyword">() {<br />    global </span><span class="default">$some_state</span><span class="keyword">;<br />    echo </span><span class="string">"\$some_state = </span><span class="default">$some_state</span><span class="string">\n"</span><span class="keyword">;<br />}<br /><br />echo </span><span class="string">"calling gen()...\n"</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">gen</span><span class="keyword">();<br />echo </span><span class="string">"gen() was called\n"</span><span class="keyword">;<br /><br /></span><span class="default">peek_state</span><span class="keyword">();<br /><br />echo </span><span class="string">"iterating...\n"</span><span class="keyword">;<br />foreach (</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">) {<br />    echo </span><span class="string">"iteration: </span><span class="default">$val</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">peek_state</span><span class="keyword">();<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />If you need to perform some action when the function is called and before the result is used, you'll have to wrap your generator in another function.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />  * @return Generator<br />  */<br /></span><span class="keyword">function </span><span class="default">some_generator</span><span class="keyword">() {<br />    global </span><span class="default">$some_state</span><span class="keyword">;<br /><br />    </span><span class="default">$some_state </span><span class="keyword">= </span><span class="string">"changed"</span><span class="keyword">;<br />    return </span><span class="default">gen</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124259">  <div class="votes">
    <div id="Vu124259">
    <a href="/manual/vote-note.php?id=124259&amp;page=language.generators.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124259">
    <a href="/manual/vote-note.php?id=124259&amp;page=language.generators.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124259" title="68% like this...">
    18
    </div>
  </div>
  <a href="#124259" class="name">
  <strong class="user"><em>chung1905 at gmail dot com</em></strong></a><a class="genanchor" href="#124259"> &para;</a><div class="date" title="2019-10-03 03:09"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124259">
<div class="phpcode"><code><span class="html">In addition to the note of "montoriusz at gmail dot com": <a href="https://www.php.net/manual/en/language.generators.overview.php#119275" rel="nofollow" target="_blank">https://www.php.net/manual/en/language.generators.overview.php#119275</a><br /><br />"If you need to perform some action when the function is called and before the result is used, you'll have to wrap your generator in another function."<br />You can use Generator::rewind instead (<a href="https://www.php.net/manual/en/generator.rewind.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/generator.rewind.php</a>)<br /><br />Sample code:<br /><span class="default">&lt;?php<br /></span><span class="comment">/** function/generator definition **/<br /><br /></span><span class="keyword">echo </span><span class="string">"calling gen()...\n"</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">gen</span><span class="keyword">();<br /></span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();<br />echo </span><span class="string">"gen() was called\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/** iteration **/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118529">  <div class="votes">
    <div id="Vu118529">
    <a href="/manual/vote-note.php?id=118529&amp;page=language.generators.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118529">
    <a href="/manual/vote-note.php?id=118529&amp;page=language.generators.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118529" title="64% like this...">
    30
    </div>
  </div>
  <a href="#118529" class="name">
  <strong class="user"><em>info at boukeversteegh dot nl</em></strong></a><a class="genanchor" href="#118529"> &para;</a><div class="date" title="2015-12-21 12:21"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118529">
<div class="phpcode"><code><span class="html">Here's how to detect loop breaks, and how to handle or cleanup after an interruption.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">generator</span><span class="keyword">()<br />    {<br />        </span><span class="default">$complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        try {<br /><br />            while ((</span><span class="default">$result </span><span class="keyword">= </span><span class="default">some_function</span><span class="keyword">())) {<br />                yield </span><span class="default">$result</span><span class="keyword">;<br />            }<br />            </span><span class="default">$complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />        } finally {<br />            if (!</span><span class="default">$complete</span><span class="keyword">) {<br />                </span><span class="comment">// cleanup when loop breaks <br />            </span><span class="keyword">} else {<br />                </span><span class="comment">// cleanup when loop completes<br />            </span><span class="keyword">}<br />        }<br /><br />        </span><span class="comment">// Do something only after loop completes<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114136">  <div class="votes">
    <div id="Vu114136">
    <a href="/manual/vote-note.php?id=114136&amp;page=language.generators.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114136">
    <a href="/manual/vote-note.php?id=114136&amp;page=language.generators.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114136" title="55% like this...">
    18
    </div>
  </div>
  <a href="#114136" class="name">
  <strong class="user"><em>lubaev</em></strong></a><a class="genanchor" href="#114136"> &para;</a><div class="date" title="2014-01-15 11:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114136">
<div class="phpcode"><code><span class="html">Abstract test.<br /><span class="default">&lt;?php<br /><br />$start_time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$array </span><span class="keyword">= array();<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />for(</span><span class="default">$count</span><span class="keyword">=</span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$count</span><span class="keyword">--;)<br />{<br />  </span><span class="default">$array</span><span class="keyword">[]=</span><span class="default">$count</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br />}<br />foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">)<br />{<br />  </span><span class="default">$val </span><span class="keyword">+= </span><span class="default">145.56</span><span class="keyword">;<br />  </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$val</span><span class="keyword">;<br />}<br /></span><span class="default">$end_time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />echo </span><span class="string">"time: "</span><span class="keyword">, </span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$end_time</span><span class="keyword">, </span><span class="default">$start_time</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"memory (byte): "</span><span class="keyword">, </span><span class="default">memory_get_peak_usage</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /><br />$start_time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />function </span><span class="default">it</span><span class="keyword">()<br />{<br />  for(</span><span class="default">$count</span><span class="keyword">=</span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$count</span><span class="keyword">--;)<br />  {<br />    yield </span><span class="default">$count</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br />  }<br />}<br />foreach(</span><span class="default">it</span><span class="keyword">() as </span><span class="default">$val</span><span class="keyword">)<br />{<br />  </span><span class="default">$val </span><span class="keyword">+= </span><span class="default">145.56</span><span class="keyword">;<br />  </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$val</span><span class="keyword">;<br />}<br /></span><span class="default">$end_time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />echo </span><span class="string">"time: "</span><span class="keyword">, </span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$end_time</span><span class="keyword">, </span><span class="default">$start_time</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"memory (byte): "</span><span class="keyword">, </span><span class="default">memory_get_peak_usage</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span>Result:<br />----------------------------------<br />           |  time  | memory, mb |<br />----------------------------------<br />| not gen  | 2.1216 | 89.25      |<br />|---------------------------------<br />| with gen | 6.1963 | 8.75       |<br />|---------------------------------<br />| diff     | &lt; 192% | &gt; 90%      |<br />----------------------------------</span></code></div>
  </div>
 </div>
  <div class="note" id="114409">  <div class="votes">
    <div id="Vu114409">
    <a href="/manual/vote-note.php?id=114409&amp;page=language.generators.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114409">
    <a href="/manual/vote-note.php?id=114409&amp;page=language.generators.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114409" title="55% like this...">
    15
    </div>
  </div>
  <a href="#114409" class="name">
  <strong class="user"><em>dc at libertyskull dot com</em></strong></a><a class="genanchor" href="#114409"> &para;</a><div class="date" title="2014-02-17 02:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114409">
<div class="phpcode"><code><span class="html">Same example, different results:<br /><br />----------------------------------<br />           |  time  | memory, mb |<br />----------------------------------<br />| not gen  | 0.7589 | 146.75     |<br />|---------------------------------<br />| with gen | 0.7469 | 8.75       |<br />|---------------------------------<br /><br />Time in results varying from 6.5 to 7.8 on both examples.<br />So no real drawbacks concerning processing speed.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.generators.overview&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.generators.overview.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.generators.php">Generators</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="language.generators.overview.php" title="Generators overview">Generators overview</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.syntax.php" title="Generator syntax">Generator syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.comparison.php" title="Comparing generators with Iterator objects">Comparing generators with Iterator objects</a>
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
