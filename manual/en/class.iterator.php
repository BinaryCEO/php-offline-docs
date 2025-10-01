<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Iterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.iterator.php">
 <link rel="shorturl" href="https://www.php.net/iterator">
 <link rel="alternate" href="https://www.php.net/iterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.interfaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.traversable.php">
 <link rel="next" href="https://www.php.net/manual/en/iterator.current.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.iterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.iterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.iterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.iterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.iterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.iterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.iterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.iterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.iterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.iterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.iterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Iterator interface" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Iterator - Manual" />
<meta name="twitter:description" content="The Iterator interface" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Iterator - Manual" />
<meta itemprop="description" content="The Iterator interface" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Iterator interface" />

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
        <a href="iterator.current.php">
          Iterator::current &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.traversable.php">
          &laquo; Traversable        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.interfaces.php'>Predefined Interfaces and Classes</a></li>      </ul>
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
            <option value='en/class.iterator.php' selected="selected">English</option>
            <option value='de/class.iterator.php'>German</option>
            <option value='es/class.iterator.php'>Spanish</option>
            <option value='fr/class.iterator.php'>French</option>
            <option value='it/class.iterator.php'>Italian</option>
            <option value='ja/class.iterator.php'>Japanese</option>
            <option value='pt_BR/class.iterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.iterator.php'>Russian</option>
            <option value='tr/class.iterator.php'>Turkish</option>
            <option value='uk/class.iterator.php'>Ukrainian</option>
            <option value='zh/class.iterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.iterator" class="reference">

 <h1 class="title">The Iterator interface</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="iterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Interface for external iterators or objects that can be iterated
    themselves internally.
   </p>
  </div>


  <div class="section" id="iterator.synopsis">
   <h2 class="title">Interface synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    <span class="modifier">interface</span> <strong class="interfacename"><strong class="interfacename">Iterator</strong></strong>

    <span class="modifier">extends</span>
      <a href="class.traversable.php" class="interfacename">Traversable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="iterator.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iterator.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iterator.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iterator.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iterator.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>


  </div>
  
  <div class="section" id="iterator.iterators">
   <h2 class="title">Predefined iterators</h2>
   <p class="para">
    PHP already provides a number of iterators for many day to day tasks.
    See <a href="spl.iterators.php" class="link">SPL iterators</a> for a list.
   </p>
  </div>

  <div class="section" id="iterator.examples">
   <h2 class="title">Examples</h2>
   <div class="example" id="iterator.example.basic">
    <p><strong>Example #1 Basic usage</strong></p>
    <div class="example-contents"><p>
     This example demonstrates in which order methods are called when
     using <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> with an iterator.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">myIterator </span><span style="color: #007700">implements </span><span style="color: #0000BB">Iterator </span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$position </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$array </span><span style="color: #007700">= array(<br />        </span><span style="color: #DD0000">"firstelement"</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">"secondelement"</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">"lastelement"</span><span style="color: #007700">,<br />    );  <br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">rewind</span><span style="color: #007700">(): </span><span style="color: #0000BB">void </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    }<br /><br />    #[</span><span style="color: #0000BB">\ReturnTypeWillChange</span><span style="color: #007700">]<br />    public function </span><span style="color: #0000BB">current</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">);<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">array</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position</span><span style="color: #007700">];<br />    }<br /><br />    #[</span><span style="color: #0000BB">\ReturnTypeWillChange</span><span style="color: #007700">]<br />    public function </span><span style="color: #0000BB">key</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">);<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">next</span><span style="color: #007700">(): </span><span style="color: #0000BB">void </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">);<br />        ++</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">valid</span><span style="color: #007700">(): </span><span style="color: #0000BB">bool </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">);<br />        return isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">array</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position</span><span style="color: #007700">]);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$it </span><span style="color: #007700">= new </span><span style="color: #0000BB">myIterator</span><span style="color: #007700">;<br /><br />foreach(</span><span style="color: #0000BB">$it </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
string(18) &quot;myIterator::rewind&quot;
string(17) &quot;myIterator::valid&quot;
string(19) &quot;myIterator::current&quot;
string(15) &quot;myIterator::key&quot;
int(0)
string(12) &quot;firstelement&quot;

string(16) &quot;myIterator::next&quot;
string(17) &quot;myIterator::valid&quot;
string(19) &quot;myIterator::current&quot;
string(15) &quot;myIterator::key&quot;
int(1)
string(13) &quot;secondelement&quot;

string(16) &quot;myIterator::next&quot;
string(17) &quot;myIterator::valid&quot;
string(19) &quot;myIterator::current&quot;
string(15) &quot;myIterator::key&quot;
int(2)
string(11) &quot;lastelement&quot;

string(16) &quot;myIterator::next&quot;
string(17) &quot;myIterator::valid&quot;
</pre></div>
    </div>
   </div>
  </div>

  <div class="section" id="iterator.seealso">
  <h2 class="title">See Also</h2>
   <p class="para">See also <a href="language.oop5.iterations.php" class="link">object iteration</a>.</p>
  </div>

 </div>

 




 




 




 




 





<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="iterator.current.php">Iterator::current</a> — Return the current element</li><li><a href="iterator.key.php">Iterator::key</a> — Return the key of the current element</li><li><a href="iterator.next.php">Iterator::next</a> — Move forward to next element</li><li><a href="iterator.rewind.php">Iterator::rewind</a> — Rewind the Iterator to the first element</li><li><a href="iterator.valid.php">Iterator::valid</a> — Checks if current position is valid</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/iterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.iterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.iterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.iterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96691">  <div class="votes">
    <div id="Vu96691">
    <a href="/manual/vote-note.php?id=96691&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96691">
    <a href="/manual/vote-note.php?id=96691&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96691" title="90% like this...">
    245
    </div>
  </div>
  <a href="#96691" class="name">
  <strong class="user"><em>robert_e_lee at dell dot com</em></strong></a><a class="genanchor" href="#96691"> &para;</a><div class="date" title="2010-03-11 10:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96691">
<div class="phpcode"><code><span class="html">Order of operations when using a foreach loop:<br /><br />1. Before the first iteration of the loop, Iterator::rewind() is called.<br />2. Before each iteration of the loop, Iterator::valid() is called.<br />3a. It Iterator::valid() returns false, the loop is terminated.<br />3b. If Iterator::valid() returns true, Iterator::current() and<br />Iterator::key() are called.<br />4. The loop body is evaluated.<br />5. After each iteration of the loop, Iterator::next() is called and we repeat from step 2 above.<br /><br />This is roughly equivalent to:<br /><br /><span class="default">&lt;?php<br />$it</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();<br /><br />while (</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">())<br />{<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">();<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br /><br />    </span><span class="comment">// ...<br /><br />    </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />The loop isn't terminated until Iterator::valid() returns false or the body of the loop executes a break statement.<br /><br />The only two methods that are always executed are Iterator::rewind() and Iterator::valid() (unless rewind throws an exception).<br /><br />The Iterator::next() method need not return anything. It is defined as returning void. On the other hand, sometimes it is convenient for this method to return something, in which case you can do so if you want.<br /><br />If your iterator is doing something expensive, like making a database query and iterating over the result set, the best place to make the query is probably in the Iterator::rewind() implementation.<br /><br />In this case, the construction of the iterator itself can be cheap, and after construction you can continue to set the properties of the query all the way up to the beginning of the foreach loop since the<br />Iterator::rewind() method isn't called until then.<br /><br />Things to keep in mind when making a database result set iterator:<br /><br />* Make sure you close your cursor or otherwise clean up any previous query at the top of the rewind method. Otherwise your code will break if the same iterator is used in two consecutive foreach loops when the first loop terminates with a break statement before all the results are iterated over.<br /><br />* Make sure your rewind() implementation tries to grab the first result so that the subsequent call to valid() will know whether or not the result set is empty. I do this by explicitly calling next() from the end of my rewind() implementation.<br /><br />* For things like result set iterators, there really isn't always a "key" that you can return, unless you know you have a scalar primary key column in the query. Unfortunately, there will be cases where either the iterator doesn't know the primary key column because it isn't providing the query, the nature of the query is such that a primary key isn't applicable, the iterator is iterating over a table that doesn't have one, or the iterator is iterating over a table that has a compound primary key. In these cases, key() can return either:<br />the row index (based on a simple counter that you provide), or can simply return null.<br /><br />Iterators can also be used to:<br /><br />* iterate over the lines of a file or rows of a CSV file<br />* iterate over the characters of a string<br />* iterate over the tokens in an input stream<br />* iterate over the matches returned by an xpath expression<br />* iterate over the matches returned by a regexp<br />* iterate over the files in a folder<br />* etc...</span></code></div>
  </div>
 </div>
  <div class="note" id="90830">  <div class="votes">
    <div id="Vu90830">
    <a href="/manual/vote-note.php?id=90830&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90830">
    <a href="/manual/vote-note.php?id=90830&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90830" title="91% like this...">
    47
    </div>
  </div>
  <a href="#90830" class="name">
  <strong class="user"><em>RocketInABog at techno-monks dot net</em></strong></a><a class="genanchor" href="#90830"> &para;</a><div class="date" title="2009-05-11 04:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90830">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment"># - Here is an implementation of the Iterator interface for arrays<br />#     which works with maps (key/value pairs)<br />#     as well as traditional arrays<br />#     (contiguous monotonically increasing indexes).<br />#   Though it pretty much does what an array<br />#     would normally do within foreach() loops,<br />#     this class may be useful for using arrays<br />#     with code that generically/only supports the<br />#     Iterator interface.<br />#  Another use of this class is to simply provide<br />#     object methods with tightly controlling iteration of arrays.<br /><br /></span><span class="keyword">class </span><span class="default">tIterator_array </span><span class="keyword">implements </span><span class="default">Iterator </span><span class="keyword">{<br />  private </span><span class="default">$myArray</span><span class="keyword">;<br /><br />  public function </span><span class="default">__construct</span><span class="keyword">( </span><span class="default">$givenArray </span><span class="keyword">) {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray </span><span class="keyword">= </span><span class="default">$givenArray</span><span class="keyword">;<br />  }<br />  function </span><span class="default">rewind</span><span class="keyword">() {<br />    return </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">);<br />  }<br />  function </span><span class="default">current</span><span class="keyword">() {<br />    return </span><span class="default">current</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">);<br />  }<br />  function </span><span class="default">key</span><span class="keyword">() {<br />    return </span><span class="default">key</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">);<br />  }<br />  function </span><span class="default">next</span><span class="keyword">() {<br />    return </span><span class="default">next</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">);<br />  }<br />  function </span><span class="default">valid</span><span class="keyword">() {<br />    return </span><span class="default">key</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">) !== </span><span class="default">null</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108609">  <div class="votes">
    <div id="Vu108609">
    <a href="/manual/vote-note.php?id=108609&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108609">
    <a href="/manual/vote-note.php?id=108609&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108609" title="81% like this...">
    27
    </div>
  </div>
  <a href="#108609" class="name">
  <strong class="user"><em>fetidfrog at gmail dot com</em></strong></a><a class="genanchor" href="#108609"> &para;</a><div class="date" title="2012-05-10 03:11"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108609">
<div class="phpcode"><code><span class="html">If you have a custom iterator that may throw an exception in it's current() method, there is no way to catch the exception without breaking a foreach loop.<br /><br />The following for loop allows you to skip elements for which $iterator-&gt;current() throws an exception, rather than breaking the loop.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">for (</span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()) {<br />    try {<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />    } catch (</span><span class="default">Exception $exception</span><span class="keyword">) {<br />        continue;<br />    }<br /><br />    </span><span class="comment"># ...<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124513">  <div class="votes">
    <div id="Vu124513">
    <a href="/manual/vote-note.php?id=124513&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124513">
    <a href="/manual/vote-note.php?id=124513&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124513" title="72% like this...">
    5
    </div>
  </div>
  <a href="#124513" class="name">
  <strong class="user"><em>jeroen at asystance dot nl</em></strong></a><a class="genanchor" href="#124513"> &para;</a><div class="date" title="2019-12-16 03:57"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124513">
<div class="phpcode"><code><span class="html">RocketInABog's seemingly trivial tIterator_array class has one huge problem (which just cost me a couple of hours).<br /><br />Consider this example, using their class:<br /><span class="default">&lt;?php<br />$values </span><span class="keyword">= [</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">, </span><span class="string">'three'</span><span class="keyword">];<br />foreach (</span><span class="default">$values </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">) {}<br /></span><span class="default">$current </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">);<br /></span><span class="comment">// $current === 'one', as you would expect<br /><br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">tIterator_array</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">);<br />foreach (</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">) {}<br /></span><span class="default">$current </span><span class="keyword">= </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();    </span><span class="comment">// do NOT use current($iterator) or key($iterator)!!!<br />// $current === false, but why?<br /></span><span class="default">?&gt;<br /></span>The problem is that foreach resets arrays, but doesn't call Iterator::rewind on objects!<br /><br />I also think it's a design mistake that foreach works with Iterator, but current(), key() and end() don't - these iterate over the objects fields.<br /><br />I just refactored some code to use an Iterator instead of an array, and it broke in several very unexpected ways because of these differences.</span></code></div>
  </div>
 </div>
  <div class="note" id="90715">  <div class="votes">
    <div id="Vu90715">
    <a href="/manual/vote-note.php?id=90715&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90715">
    <a href="/manual/vote-note.php?id=90715&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90715" title="69% like this...">
    13
    </div>
  </div>
  <a href="#90715" class="name">
  <strong class="user"><em>mike dot thornton at firstroi dot com</em></strong></a><a class="genanchor" href="#90715"> &para;</a><div class="date" title="2009-05-05 01:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90715">
<div class="phpcode"><code><span class="html">It's important to note that following won't work if you have null values.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">valid</span><span class="keyword">() {<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">__METHOD__</span><span class="keyword">);<br />        return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">]);<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Other examples have shown the following which won't work if you have false values:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">valid</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">() !== </span><span class="default">false</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Instead use:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">valid</span><span class="keyword">() {<br />        return </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Or the following if you do not store the position.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">public function </span><span class="default">valid</span><span class="keyword">() {<br />        return !</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">key</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">));<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118838">  <div class="votes">
    <div id="Vu118838">
    <a href="/manual/vote-note.php?id=118838&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118838">
    <a href="/manual/vote-note.php?id=118838&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118838" title="66% like this...">
    6
    </div>
  </div>
  <a href="#118838" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118838"> &para;</a><div class="date" title="2016-02-14 12:51"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118838">
<div class="phpcode"><code><span class="html">An interesting fact that I didn't read in the doc:<br /><br />the key() method is called only if your foreach loop needs it.<br /><br />For instance, the following loop calls the key() method:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    echo </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />But the following loop doesn't:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />    echo </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91068">  <div class="votes">
    <div id="Vu91068">
    <a href="/manual/vote-note.php?id=91068&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91068">
    <a href="/manual/vote-note.php?id=91068&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91068" title="64% like this...">
    11
    </div>
  </div>
  <a href="#91068" class="name">
  <strong class="user"><em>Geoffrey Sneddon</em></strong></a><a class="genanchor" href="#91068"> &para;</a><div class="date" title="2009-05-23 10:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91068">
<div class="phpcode"><code><span class="html">So, playing around with iterators in PHP (coming from languages where I'm spoiled with generators to do things like this), I wrote a quick piece of code to give the Fibonacci sequence (to infinity, though only the first terms up to F_{10} are output).
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">Fibonacci </span><span class="keyword">implements </span><span class="default">Iterator </span><span class="keyword">{
<br />    private </span><span class="default">$previous </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />    private </span><span class="default">$current </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    private </span><span class="default">$key </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    
<br />    public function </span><span class="default">current</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">;
<br />    }
<br />    
<br />    public function </span><span class="default">key</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">;
<br />    }
<br />    
<br />    public function </span><span class="default">next</span><span class="keyword">() {
<br />        </span><span class="default">$newprevious </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current </span><span class="keyword">+= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">previous</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">previous </span><span class="keyword">= </span><span class="default">$newprevious</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">++;
<br />    }
<br />    
<br />    public function </span><span class="default">rewind</span><span class="keyword">() {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">previous </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    }
<br />    
<br />    public function </span><span class="default">valid</span><span class="keyword">() {
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$seq </span><span class="keyword">= new </span><span class="default">Fibonacci</span><span class="keyword">;
<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />foreach (</span><span class="default">$seq </span><span class="keyword">as </span><span class="default">$f</span><span class="keyword">) {
<br />    echo </span><span class="string">"</span><span class="default">$f</span><span class="string">\n"</span><span class="keyword">;
<br />    if (</span><span class="default">$i</span><span class="keyword">++ === </span><span class="default">10</span><span class="keyword">) break;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93580">  <div class="votes">
    <div id="Vu93580">
    <a href="/manual/vote-note.php?id=93580&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93580">
    <a href="/manual/vote-note.php?id=93580&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93580" title="61% like this...">
    7
    </div>
  </div>
  <a href="#93580" class="name">
  <strong class="user"><em>Anthony Sterling</em></strong></a><a class="genanchor" href="#93580"> &para;</a><div class="date" title="2009-09-17 02:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93580">
<div class="phpcode"><code><span class="html">Here's a Fibonacci example using the formula, rather than addition.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @author    Anthony Sterling<br /> */<br /></span><span class="keyword">class </span><span class="default">FibonacciSequence </span><span class="keyword">implements </span><span class="default">Iterator<br /></span><span class="keyword">{<br />    protected<br />        </span><span class="default">$limit        </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        <br />    protected<br />        </span><span class="default">$key        </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;    <br />        <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$limit </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">limit </span><span class="keyword">= (integer)</span><span class="default">$limit</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">current</span><span class="keyword">()<br />    {<br />        return </span><span class="default">round</span><span class="keyword">(<br />            (</span><span class="default">pow</span><span class="keyword">(((</span><span class="default">1 </span><span class="keyword">+ </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">)) / </span><span class="default">2</span><span class="keyword">), </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">) - </span><span class="default">pow</span><span class="keyword">((-</span><span class="default">1 </span><span class="keyword">/ (</span><span class="default">1 </span><span class="keyword">+ </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">)) / </span><span class="default">2</span><span class="keyword">), </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">)) / </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">),<br />            </span><span class="default">null<br />        </span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">key</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">next</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">++;<br />    }<br /><br />    public function </span><span class="default">rewind</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">valid</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">&lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">limit</span><span class="keyword">;<br />    } <br />}<br /><br />foreach(new </span><span class="default">FibonacciSequence</span><span class="keyword">() as </span><span class="default">$number</span><span class="keyword">)<br />{<br />    </span><span class="default">printf</span><span class="keyword">(<br />        </span><span class="string">'%d&lt;br /&gt;'</span><span class="keyword">,<br />        </span><span class="default">$number<br />    </span><span class="keyword">);<br />}<br /></span><span class="comment">/*<br />    0<br />    1<br />    1<br />    2<br />    3<br />    5<br />    8<br />    13<br />    21<br />    34<br />    55<br />    89<br />    144<br />    233<br />    377<br />    610<br />    987<br />    1597<br />    2584<br />    4181<br />    6765<br />    10946<br />    17711<br />    28657<br />    46368<br />    75025<br />    121393<br />    196418<br />    317811<br />    514229<br />*/<br /></span><span class="default">?&gt;<br /></span><br />Anthony.</span></code></div>
  </div>
 </div>
  <div class="note" id="114776">  <div class="votes">
    <div id="Vu114776">
    <a href="/manual/vote-note.php?id=114776&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114776">
    <a href="/manual/vote-note.php?id=114776&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114776" title="58% like this...">
    5
    </div>
  </div>
  <a href="#114776" class="name">
  <strong class="user"><em>Gilles A</em></strong></a><a class="genanchor" href="#114776"> &para;</a><div class="date" title="2014-04-04 03:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114776">
<div class="phpcode"><code><span class="html">Examples of use<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">myIterator </span><span class="keyword">implements </span><span class="default">Iterator <br />    </span><span class="keyword">{<br />    private <br />        </span><span class="default">$_array </span><span class="keyword">= array();<br />    public function </span><span class="default">__construct</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">) <br />        {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_array </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">;<br />        }<br />    public function </span><span class="default">rewind</span><span class="keyword">() <br />        {<br />        </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_array</span><span class="keyword">);<br />        }<br />    public function </span><span class="default">current</span><span class="keyword">() <br />        {<br />        return </span><span class="default">current</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_array</span><span class="keyword">);<br />        }<br />    public function </span><span class="default">key</span><span class="keyword">() <br />        {<br />        return </span><span class="default">key</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_array</span><span class="keyword">);<br />        }<br />    public function </span><span class="default">next</span><span class="keyword">() <br />        {<br />        </span><span class="default">next</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_array</span><span class="keyword">);<br />        }<br />    public function </span><span class="default">valid</span><span class="keyword">() <br />        {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">() !== </span><span class="default">null</span><span class="keyword">;<br />        }<br />    }<br /><br /></span><span class="default">$it </span><span class="keyword">= new </span><span class="default">myIterator</span><span class="keyword">(array(</span><span class="string">'foo_1' </span><span class="keyword">=&gt; </span><span class="string">'bar_1'</span><span class="keyword">,</span><span class="string">'foo_2' </span><span class="keyword">=&gt; </span><span class="string">'bar_2'</span><span class="keyword">));<br /><br /></span><span class="comment">//example 1 : foreach<br /><br /></span><span class="keyword">foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) <br />    {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    }<br />    <br /></span><span class="comment">//example 2 : while<br /><br /></span><span class="default">$it </span><span class="keyword">-&gt; </span><span class="default">rewind</span><span class="keyword">();<br />while(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">())<br />    {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());<br />    <br />    </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />    }<br /> <br /></span><span class="comment">//example 3 : for<br /><br /></span><span class="keyword">for(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">();</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">())<br />    {<br />   </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104720">  <div class="votes">
    <div id="Vu104720">
    <a href="/manual/vote-note.php?id=104720&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104720">
    <a href="/manual/vote-note.php?id=104720&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104720" title="56% like this...">
    3
    </div>
  </div>
  <a href="#104720" class="name">
  <strong class="user"><em>geompse at gmail dot com</em></strong></a><a class="genanchor" href="#104720"> &para;</a><div class="date" title="2011-07-03 06:43"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104720">
<div class="phpcode"><code><span class="html">Be carefull with Iterator when using nested loops or deleting items inside the collection while looping over it.<br />It can be tricky to detect.<br />This unexpected behavior is pertinent if you think about it long enough.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    echo </span><span class="default">$value</span><span class="keyword">;<br /></span><span class="comment">#output: value1, value2, value3<br /><br /></span><span class="keyword">foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />        echo </span><span class="default">$value</span><span class="keyword">;<br /></span><span class="comment">#output: value1, value2, value3<br /><br /></span><span class="keyword">foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    foreach(clone </span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />        echo </span><span class="default">$value</span><span class="keyword">;<br /></span><span class="comment">#output: value1, value2, value3, value1, value2, value3, value1, value2, value3<br /><br /></span><span class="keyword">foreach(</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$value</span><span class="keyword">;<br />    </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">);<br />}<br /></span><span class="comment">#ouput: value1, value3<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105121">  <div class="votes">
    <div id="Vu105121">
    <a href="/manual/vote-note.php?id=105121&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105121">
    <a href="/manual/vote-note.php?id=105121&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105121" title="53% like this...">
    1
    </div>
  </div>
  <a href="#105121" class="name">
  <strong class="user"><em>ct</em></strong></a><a class="genanchor" href="#105121"> &para;</a><div class="date" title="2011-07-28 12:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105121">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br /> * An implementation of the Iterator<br /> * with simpleXML to remove a node and generate a new XML file.<br /> * <br /> * project.xml file:<br /> * &lt;?xml version="1.0" encoding="UTF-8"?&gt;<br /> * ...<br /> * &lt;data&gt;<br /> *  &lt;item&gt;<br /> *      &lt;value&gt;one&lt;/value&gt;<br /> *  &lt;/item&gt;<br /> *  &lt;item&gt;<br /> *      &lt;value&gt;two&lt;/value&gt;<br /> *  &lt;/item&gt;<br /> *  ...<br /> * &lt;/data&gt;<br /> * <br /> */<br /><br /></span><span class="keyword">class </span><span class="default">parseXML </span><span class="keyword">implements </span><span class="default">Iterator </span><span class="keyword">{<br />    <br />    private </span><span class="default">$position</span><span class="keyword">;<br />    private </span><span class="default">$xml</span><span class="keyword">;<br />    public </span><span class="default">$item</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">'project.xml'</span><span class="keyword">);<br />                <br />    }<br />    <br />    public function </span><span class="default">unsetItem</span><span class="keyword">() {<br />        <br />        foreach (</span><span class="default">$this </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        <br />            if (</span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">== </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">item </span><span class="keyword">) {<br />        <br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xml</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        <br />            }<br />        }<br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mkXML</span><span class="keyword">();<br />    }<br />    <br />    public function </span><span class="default">mkXML</span><span class="keyword">() {<br />        <br />        </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'project.xml'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xml</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">() );<br />        <br />    }<br /><br />    function </span><span class="default">rewind</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">current</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xml</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">];<br />    }<br /><br />    function </span><span class="default">key</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">next</span><span class="keyword">() {<br />        ++</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">valid</span><span class="keyword">() {<br />        return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xml</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">]);<br />    }<br />    <br />}<br /><br /></span><span class="default">$itemRemove </span><span class="keyword">= new </span><span class="default">parseXML</span><span class="keyword">();<br /><br /></span><span class="default">$itemRemove</span><span class="keyword">-&gt;</span><span class="default">item </span><span class="keyword">= </span><span class="string">"one"</span><span class="keyword">;<br /><br /></span><span class="default">$itemRemove</span><span class="keyword">-&gt;</span><span class="default">unsetItem</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125802">  <div class="votes">
    <div id="Vu125802">
    <a href="/manual/vote-note.php?id=125802&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125802">
    <a href="/manual/vote-note.php?id=125802&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125802" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125802" class="name">
  <strong class="user"><em>Andrew Roffey</em></strong></a><a class="genanchor" href="#125802"> &para;</a><div class="date" title="2021-02-09 10:41"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125802">
<div class="phpcode"><code><span class="html">/**<br /> * Iterate  a directory tree by walking the tree. For each directory in<br /> * the tree rooted at directory $parent_dir (including $parent_dir<br /> * itself), it returns $dirpath =&gt; array($dirnames, $filenames).<br /> *<br /> * $dirpath is a string, the path to the directory. $dirnames is a list<br /> * of the names of the subdirectories in dirpath (excluding '.' and<br /> * '..'). $filenames is a list of the names of the non-directory files in<br /> * $dirpath.<br /> *<br /> * Inspired by Python os.walk; see<br /> * <a href="https://docs.python.org/3/library/os.html#os.walk" rel="nofollow" target="_blank">https://docs.python.org/3/library/os.html#os.walk</a><br /> * Implemented as an iterator rather than a generator.<br /> *<br /> * @return array<br /> */<br /><br />class walker implements Iterator {<br />  private $parent_dir = '';<br />  private $d = 0; // iterator<br />  private $dirs = array(); // indexed by iterator<br />  private $dirstack;<br />  private $discovered = array(); // indexed by directory<br />  private $v; // current directory<br />  private $cur_dirnames = array(); // current subdirs<br />  private $cur_filenames = array(); // current files in directory<br /><br />  public function __construct($parent_dir) {<br />    $this-&gt;parent_dir = $parent_dir;<br />    $this-&gt;d = 0;<br />    $this-&gt;dirs[$this-&gt;d] = $parent_dir;<br />    $this-&gt;dirstack = new SplStack();<br />    $this-&gt;dirstack-&gt;push($parent_dir);<br />    $this-&gt;discovered = array($parent_dir =&gt; true);<br />    $this-&gt;v = $parent_dir;<br />    $this-&gt;cur_dirnames = array();<br />    $this-&gt;cur_filenames = array();<br />    $this-&gt;next();<br />  }<br /><br />  public function rewind() {<br />    $this-&gt;__construct($this-&gt;parent_dir);<br />  }<br /><br />  public function current() {<br />    return array($this-&gt;cur_dirnames, $this-&gt;cur_filenames);<br />  }<br /><br />  public function key() {<br />    return $this-&gt;v;<br />  }<br /><br />  public function next() {<br />    ++$this-&gt;d;<br />    $this-&gt;v = $this-&gt;dirstack-&gt;pop();<br />    $this-&gt;dirs[$this-&gt;d] = $this-&gt;v;<br />    $this-&gt;cur_dirnames = array();<br />    $this-&gt;cur_filenames = array();<br />    if (!$dh = opendir($this-&gt;v)) {<br />      // opendir emits E_WARNING if unable to open directory, likely due<br />      // to a permissions issue or directory removed before we could get<br />      // there<br />      return;<br />    }<br />    // discover the directories, return directories and files<br />    while (false !== ($fn = readdir($dh))) {<br />      if ($fn != '.' &amp;&amp; $fn !== '..') {<br />        $fullfn = $this-&gt;v . '/' . $fn;<br />        if (is_dir($fullfn)) {<br />      $this-&gt;cur_dirnames[] = $fn;<br />          if (!array_key_exists($fullfn, $this-&gt;discovered)) {<br />            $this-&gt;discovered[$fullfn] = true;<br />        $this-&gt;dirstack-&gt;push($fullfn);<br />      }<br />        } else {<br />          $this-&gt;cur_filenames[] = $fn;<br />        }<br />      }<br />    }<br />    closedir($dh);<br />  }<br /><br />  public function valid() {<br />    return $this-&gt;dirstack-&gt;count();<br />  }<br />}<br /><br />$tree = new walker("/tmp");<br />foreach ($tree as $parent_dir =&gt; $nodes) {<br />  $subdirs = $nodes[0];<br />  $files = $nodes[1];<br />  printf("%s\n", $parent_dir);<br />  if ($subdirs) printf("  %s\n", implode("/\n  ", $subdirs));<br />  if ($files) printf("  %s\n", implode("\n  ", $files));<br />  print("\n");<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="123423">  <div class="votes">
    <div id="Vu123423">
    <a href="/manual/vote-note.php?id=123423&amp;page=class.iterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123423">
    <a href="/manual/vote-note.php?id=123423&amp;page=class.iterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123423" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#123423" class="name">
  <strong class="user"><em>shaun at slickdesign dot com dot au</em></strong></a><a class="genanchor" href="#123423"> &para;</a><div class="date" title="2018-12-12 03:09"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123423">
<div class="phpcode"><code><span class="html">With a large number of `current`, `next`, `key`, and `reset` array function implementations, care needs to be taken to ensure that deletions and nested loops are accounted for appropriately for each situation.<br /><br />The following class has been copied from a previous comment and modified to allow it to be used within nested loops.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># Comment removed for brevity.<br /><br /></span><span class="keyword">class </span><span class="default">tIterator_array </span><span class="keyword">implements </span><span class="default">Iterator </span><span class="keyword">{<br />  private </span><span class="default">$myArray</span><span class="keyword">;<br />  </span><span class="comment">// Store each iteration in a separate array.<br />  </span><span class="keyword">private </span><span class="default">$iterations </span><span class="keyword">= [];<br />  private </span><span class="default">$i </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br /><br />  public function </span><span class="default">__construct</span><span class="keyword">( </span><span class="default">$givenArray </span><span class="keyword">) {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray </span><span class="keyword">= </span><span class="default">$givenArray</span><span class="keyword">;<br />  }<br />  function </span><span class="default">rewind</span><span class="keyword">() {<br />    </span><span class="comment">// Rewind is called at the start of the loop. This is where we can append the current array to start our new iteration.<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterations</span><span class="keyword">[] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">i</span><span class="keyword">++;<br />    return </span><span class="default">reset</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterations</span><span class="keyword">[ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">i </span><span class="keyword">] );<br />  }<br />  function </span><span class="default">current</span><span class="keyword">() {<br />    return </span><span class="default">current</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterations</span><span class="keyword">[ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">i </span><span class="keyword">] );<br />  }<br />  function </span><span class="default">key</span><span class="keyword">() {<br />    return </span><span class="default">key</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterations</span><span class="keyword">[ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">i </span><span class="keyword">] );<br />  }<br />  function </span><span class="default">next</span><span class="keyword">() {<br />    return </span><span class="default">next</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterations</span><span class="keyword">[ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">i </span><span class="keyword">] );<br />  }<br />  function </span><span class="default">valid</span><span class="keyword">() {<br />    if ( </span><span class="default">null </span><span class="keyword">=== </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">() ) {<br />      </span><span class="comment">// Standard valid check. When null is returned the loop has finished, so we decrement the index and remove the latest iteration.<br />      </span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterations </span><span class="keyword">);<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">i</span><span class="keyword">--;<br />      return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">true</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="comment">// Example:<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">tIterator_array</span><span class="keyword">( [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">] );<br />foreach ( </span><span class="default">$a </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v </span><span class="keyword">) {<br />  echo </span><span class="string">" </span><span class="default">$k</span><span class="string"> =&gt; </span><span class="default">$v</span><span class="string">:\n"</span><span class="keyword">;<br />  foreach ( </span><span class="default">$a </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v </span><span class="keyword">) {<br />    echo </span><span class="string">"  </span><span class="default">$k</span><span class="string"> =&gt; </span><span class="default">$v</span><span class="string">,\n"</span><span class="keyword">;<br />  }<br />}<br /></span><span class="comment">// Output:<br /># 0 =&gt; 1:<br />#  0 =&gt; 1,<br />#  1 =&gt; 2,<br /># 1 =&gt; 2:<br />#  0 =&gt; 1,<br />#  1 =&gt; 2,<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.iterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.iterator.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.interfaces.php">Predefined Interfaces and Classes</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.traversable.php" title="Traversable">Traversable</a>
                        </li>
                                                <li class="current">
                            <a href="class.iterator.php" title="Iterator">Iterator</a>
                        </li>
                                                <li class="">
                            <a href="class.iteratoraggregate.php" title="IteratorAggregate">IteratorAggregate</a>
                        </li>
                                                <li class="">
                            <a href="class.internaliterator.php" title="InternalIterator">InternalIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.throwable.php" title="Throwable">Throwable</a>
                        </li>
                                                <li class="">
                            <a href="class.countable.php" title="Countable">Countable</a>
                        </li>
                                                <li class="">
                            <a href="class.arrayaccess.php" title="ArrayAccess">ArrayAccess</a>
                        </li>
                                                <li class="">
                            <a href="class.serializable.php" title="Serializable">Serializable</a>
                        </li>
                                                <li class="">
                            <a href="class.closure.php" title="Closure">Closure</a>
                        </li>
                                                <li class="">
                            <a href="class.stdclass.php" title="stdClass">stdClass</a>
                        </li>
                                                <li class="">
                            <a href="class.generator.php" title="Generator">Generator</a>
                        </li>
                                                <li class="">
                            <a href="class.fiber.php" title="Fiber">Fiber</a>
                        </li>
                                                <li class="">
                            <a href="class.weakreference.php" title="WeakReference">WeakReference</a>
                        </li>
                                                <li class="">
                            <a href="class.weakmap.php" title="WeakMap">WeakMap</a>
                        </li>
                                                <li class="">
                            <a href="class.stringable.php" title="Stringable">Stringable</a>
                        </li>
                                                <li class="">
                            <a href="class.unitenum.php" title="UnitEnum">UnitEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.backedenum.php" title="BackedEnum">BackedEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.sensitiveparametervalue.php" title="SensitiveParameterValue">SensitiveParameterValue</a>
                        </li>
                                                <li class="">
                            <a href="class.php-incomplete-class.php" title="_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class">_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class</a>
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
