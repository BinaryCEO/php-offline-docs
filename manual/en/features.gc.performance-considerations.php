<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Performance Considerations - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.gc.performance-considerations.php">
 <link rel="shorturl" href="https://www.php.net/gc.performance-considerations">
 <link rel="alternate" href="https://www.php.net/gc.performance-considerations" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.gc.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.gc.collecting-cycles.php">
 <link rel="next" href="https://www.php.net/manual/en/features.dtrace.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.gc.performance-considerations.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.gc.performance-considerations.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.gc.performance-considerations.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.gc.performance-considerations.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.gc.performance-considerations.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.gc.performance-considerations.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.gc.performance-considerations.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.gc.performance-considerations.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.gc.performance-considerations.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.gc.performance-considerations.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.gc.performance-considerations.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Performance Considerations" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Performance Considerations - Manual" />
<meta name="twitter:description" content="Performance Considerations" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Performance Considerations - Manual" />
<meta itemprop="description" content="Performance Considerations" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Performance Considerations" />

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
        <a href="features.dtrace.php">
          DTrace Dynamic Tracing &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.gc.collecting-cycles.php">
          &laquo; Collecting Cycles        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.gc.php'>Garbage Collection</a></li>      </ul>
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
            <option value='en/features.gc.performance-considerations.php' selected="selected">English</option>
            <option value='de/features.gc.performance-considerations.php'>German</option>
            <option value='es/features.gc.performance-considerations.php'>Spanish</option>
            <option value='fr/features.gc.performance-considerations.php'>French</option>
            <option value='it/features.gc.performance-considerations.php'>Italian</option>
            <option value='ja/features.gc.performance-considerations.php'>Japanese</option>
            <option value='pt_BR/features.gc.performance-considerations.php'>Brazilian Portuguese</option>
            <option value='ru/features.gc.performance-considerations.php'>Russian</option>
            <option value='tr/features.gc.performance-considerations.php'>Turkish</option>
            <option value='uk/features.gc.performance-considerations.php'>Ukrainian</option>
            <option value='zh/features.gc.performance-considerations.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.gc.performance-considerations" class="sect1">
   <h2 class="title">Performance Considerations</h2>
   <p class="para">
    We have already mentioned in the previous section that simply collecting the
    possible roots had a very tiny performance impact, but this is when you
    compare PHP 5.2 against PHP 5.3. Although the recording of possible roots
    compared to not recording them at all, like in PHP 5.2, is slower, other
    changes to the PHP runtime in PHP 5.3 prevented this particular performance
    loss from even showing.
   </p>
   <p class="para">
    There are two major areas in which performance is affected. The first
    area is reduced memory usage, and the second area is run-time delay when
    the garbage collection mechanism performs its memory cleanups. We will
    look at both of those issues.
   </p>

   <div class="sect2" id="features.gc.performance-considerations.reduced-mem">
    <h3 class="title">Reduced Memory Usage</h3>
    <p class="para">
     First of all, the whole reason for implementing the garbage collection
     mechanism is to reduce memory usage by cleaning up circular-referenced
     variables as soon as the prerequisites are fulfilled. In PHP&#039;s
     implementation, this happens as soon as the root-buffer is full, or when
     the function <span class="function"><a href="function.gc-collect-cycles.php" class="function">gc_collect_cycles()</a></span> is called. In
     the graph below, we display the memory usage of the script below,
     in both PHP 5.2 and PHP 5.3, excluding the base memory that PHP
     itself uses when starting up.
    </p>
    <p class="para">
     <div class="example" id="example-574">
      <p><strong>Example #1 Memory usage example</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'3.14159265359'</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$self</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$baseMemory </span><span style="color: #007700">= </span><span style="color: #0000BB">memory_get_usage</span><span style="color: #007700">();<br /><br />for ( </span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">100000</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++ )<br />{<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">self </span><span style="color: #007700">= </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />    if ( </span><span style="color: #0000BB">$i </span><span style="color: #007700">% </span><span style="color: #0000BB">500 </span><span style="color: #007700">=== </span><span style="color: #0000BB">0 </span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">( </span><span style="color: #DD0000">'%8d: '</span><span style="color: #007700">, </span><span style="color: #0000BB">$i </span><span style="color: #007700">), </span><span style="color: #0000BB">memory_get_usage</span><span style="color: #007700">() - </span><span style="color: #0000BB">$baseMemory</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="mediaobject">
       
       <div class="imageobject">
        <img src="images/12f37b1c6963c1c5c18f30495416a197-gc-benchmark.png" alt="Comparison of memory usage between PHP 5.2 and PHP 5.3" width="850" height="480" />
       </div>
      </div>
     </div>
    </p>
    <p class="para">
     In this very academic example, we are creating an object in which a
     property is set to point back to the object itself. When the <var class="varname">$a</var> variable
     in the script is re-assigned in the next iteration of the loop, a memory
     leak would typically occur. In this case, two zval-containers are leaked
     (the object zval, and the property zval), but only one possible root is
     found: the variable that was unset. When the root-buffer is full after
     10,000 iterations (with a total of 10,000 possible roots), the garbage
     collection mechanism kicks in and frees the memory associated with those
     possible roots. This can very clearly be seen in the jagged memory-usage
     graph for PHP 5.3. After each 10,000 iterations, the mechanism kicks in
     and frees the memory associated with the circular referenced variables.
     The mechanism itself does not have to do a whole lot of work in this
     example, because the structure that is leaked is extremely simple. From
     the diagram, you see that the maximum memory usage in PHP 5.3 is about 9
     Mb, whereas in PHP 5.2 the memory usage keeps increasing.
    </p>
   </div>

   <div class="sect2" id="features.gc.performance-considerations.slowdowns">
    <h3 class="title">Run-Time Slowdowns</h3>
    <p class="para">
     The second area where the garbage collection mechanism influences
     performance is the time taken when the garbage collection mechanism
     kicks in to free the &quot;leaked&quot; memory. In order to see how much this is,
     we slightly modify the previous script to allow for a larger number of
     iterations and the removal of the intermediate memory usage figures. The
     second script is here:
    </p>
    <p class="para">
     <div class="example" id="example-575">
      <p><strong>Example #2 GC performance influences</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'3.14159265359'</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$self</span><span style="color: #007700">;<br />}<br /><br />for ( </span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">1000000</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++ )<br />{<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">self </span><span style="color: #007700">= </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">memory_get_peak_usage</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="para">
     We will run this script two times, once with the
     <a href="info.configuration.php#ini.zend.enable-gc" class="link">zend.enable_gc</a> setting turned
     on, and once with it turned off:
    </p>
    <p class="para">
     <div class="example" id="example-576">
      <p><strong>Example #3 Running the above script</strong></p>
      <div class="example-contents">
<div class="shellcode"><pre class="shellcode">time php -dzend.enable_gc=0 -dmemory_limit=-1 -n example2.php
# and
time php -dzend.enable_gc=1 -dmemory_limit=-1 -n example2.php</pre>
</div>
      </div>

     </div>
    </p>
    <p class="para">
     On my machine, the first command seems to take consistently about 10.7
     seconds, whereas the second command takes about 11.4 seconds. This is a
     slowdown of about 7%. However, the maximum amount of memory used by the
     script is reduced by 98% from 931Mb to 10Mb. This benchmark is not very
     scientific, or even representative of real-life applications, but it
     does demonstrate the memory usage benefits that this garbage collection
     mechanism provides. The good thing is that the slowdown is always the
     same 7%, for this particular script, while the memory saving
     capabilities save more and more memory as more circular references are
     found during script execution.
    </p>
   </div>

   <div class="sect2" id="features.gc.performance-considerations.internal-stats">
    <h3 class="title">PHP&#039;s Internal GC Statistics</h3>
    <p class="para">
     It is possible to coax a little bit more information about how the
     garbage collection mechanism is run from within PHP. But in order to do
     so, you will have to re-compile PHP to enable the benchmark and
     data-collecting code. You will have to set the <code class="literal">CFLAGS</code>
     environment variable to <code class="literal">-DGC_BENCH=1</code> prior to running
     <code class="literal">./configure</code> with your desired options. The following
     sequence should do the trick:
    </p>
    <p class="para">
     <div class="example" id="example-577">
      <p><strong>Example #4 Recompiling PHP to enable GC benchmarking</strong></p>
      <div class="example-contents">
<div class="shellcode"><pre class="shellcode">export CFLAGS=-DGC_BENCH=1
./config.nice
make clean
make</pre>
</div>
      </div>

     </div>
    </p>
    <p class="para">
     When you run the above example code again with the newly built PHP
     binary, you will see the following being shown after PHP has finished
     execution:
    </p>
    <p class="para">
     <div class="example" id="example-578">
      <p><strong>Example #5 GC statistics</strong></p>
      <div class="example-contents">
<div class="shellcode"><pre class="shellcode">GC Statistics
-------------
Runs:               110
Collected:          2072204
Root buffer length: 0
Root buffer peak:   10000

      Possible            Remove from  Marked
        Root    Buffered     buffer     grey
      --------  --------  -----------  ------
ZVAL   7175487   1491291    1241690   3611871
ZOBJ  28506264   1527980     677581   1025731</pre>
</div>
      </div>

     </div>
    </p>
    <p class="para">
     The most informative statistics are displayed in the first block. You
     can see here that the garbage collection mechanism ran 110 times, and in
     total, more than 2 million memory allocations were freed during those
     110 runs. As soon as the garbage collection mechanism has run at least
     one time, the &quot;Root buffer peak&quot; is always 10000.
    </p>
   </div>

   <div class="sect2" id="features.gc.performance-considerations.conclusion">
    <h3 class="title">Conclusion</h3>
    <p class="para">
     In general the garbage collector in PHP will only cause a slowdown when the
     cycle collecting algorithm actually runs, whereas in normal (smaller)
     scripts there should be no performance hit at all.
    </p>
    <p class="para">
     However, in the cases where the cycle collection mechanism does run for
     normal scripts, the memory reduction it will provide allows more of
     those scripts to run concurrently on your server, since not so much
     memory is used in total.
    </p>
    <p class="para">
     The benefits are most apparent for longer-running scripts, such as
     lengthy test suites or daemon scripts. Also, for <a href="http://gtk.php.net/" class="link external">&raquo;&nbsp;PHP-GTK</a> applications
     that generally tend to run longer than scripts for the Web, the new
     mechanism should make quite a bit of a difference regarding memory leaks
     creeping in over time.
    </p>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/gc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.gc.performance-considerations%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.gc.performance-considerations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.gc.performance-considerations.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122714">  <div class="votes">
    <div id="Vu122714">
    <a href="/manual/vote-note.php?id=122714&amp;page=features.gc.performance-considerations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122714">
    <a href="/manual/vote-note.php?id=122714&amp;page=features.gc.performance-considerations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122714" title="100% like this...">
    22
    </div>
  </div>
  <a href="#122714" class="name">
  <strong class="user"><em>Dmitry dot Balabka at gmail dot com</em></strong></a><a class="genanchor" href="#122714"> &para;</a><div class="date" title="2018-05-09 11:13"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122714">
<div class="phpcode"><code><span class="html">There is a possibility to get GC performance stats without PHP recompilation. Starting from Xdebug version 2.6 you are able to enable stats collection into the file (default dir /tmp with name gcstats.%p):<br /><br />php -dxdebug.gc_stats_enable=1 your_script.php</span></code></div>
  </div>
 </div>
  <div class="note" id="118427">  <div class="votes">
    <div id="Vu118427">
    <a href="/manual/vote-note.php?id=118427&amp;page=features.gc.performance-considerations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118427">
    <a href="/manual/vote-note.php?id=118427&amp;page=features.gc.performance-considerations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118427" title="63% like this...">
    19
    </div>
  </div>
  <a href="#118427" class="name">
  <strong class="user"><em>Talisman</em></strong></a><a class="genanchor" href="#118427"> &para;</a><div class="date" title="2015-12-04 08:25"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118427">
<div class="phpcode"><code><span class="html">The GC, unfortunately, as expounded in the examples above, has the tendency to promote lazy programming.<br />Clearly the benefits of the GC to assist in memory management are there, and help to maintain a stable system, but it is no excuse to not plan and test your code properly.<br />Always re-read your code critically and objectively to ensure that you are not introducing memory leaks unintentionally.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.gc.performance-considerations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.gc.performance-considerations.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.gc.php">Garbage Collection</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.gc.refcounting-basics.php" title="Reference Counting Basics">Reference Counting Basics</a>
                        </li>
                                                <li class="">
                            <a href="features.gc.collecting-cycles.php" title="Collecting Cycles">Collecting Cycles</a>
                        </li>
                                                <li class="current">
                            <a href="features.gc.performance-considerations.php" title="Performance Considerations">Performance Considerations</a>
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
