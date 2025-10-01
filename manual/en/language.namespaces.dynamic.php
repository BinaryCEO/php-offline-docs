<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Namespaces and dynamic language features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.namespaces.dynamic.php">
 <link rel="shorturl" href="https://www.php.net/namespaces.dynamic">
 <link rel="alternate" href="https://www.php.net/namespaces.dynamic" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.namespaces.basics.php">
 <link rel="next" href="https://www.php.net/manual/en/language.namespaces.nsconstants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.namespaces.dynamic.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.namespaces.dynamic.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.namespaces.dynamic.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.namespaces.dynamic.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.namespaces.dynamic.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.namespaces.dynamic.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.namespaces.dynamic.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.namespaces.dynamic.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.namespaces.dynamic.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.namespaces.dynamic.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.namespaces.dynamic.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Namespaces and dynamic language features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Namespaces and dynamic language features - Manual" />
<meta name="twitter:description" content="Namespaces and dynamic language features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Namespaces and dynamic language features - Manual" />
<meta itemprop="description" content="Namespaces and dynamic language features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Namespaces and dynamic language features" />

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
        <a href="language.namespaces.nsconstants.php">
          namespace keyword and __NAMESPACE__ &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.namespaces.basics.php">
          &laquo; Basics        </a>
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
            <option value='en/language.namespaces.dynamic.php' selected="selected">English</option>
            <option value='de/language.namespaces.dynamic.php'>German</option>
            <option value='es/language.namespaces.dynamic.php'>Spanish</option>
            <option value='fr/language.namespaces.dynamic.php'>French</option>
            <option value='it/language.namespaces.dynamic.php'>Italian</option>
            <option value='ja/language.namespaces.dynamic.php'>Japanese</option>
            <option value='pt_BR/language.namespaces.dynamic.php'>Brazilian Portuguese</option>
            <option value='ru/language.namespaces.dynamic.php'>Russian</option>
            <option value='tr/language.namespaces.dynamic.php'>Turkish</option>
            <option value='uk/language.namespaces.dynamic.php'>Ukrainian</option>
            <option value='zh/language.namespaces.dynamic.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.namespaces.dynamic" class="sect1">
  <h2 class="title">Namespaces and dynamic language features</h2>
  
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
  <p class="para">
   PHP&#039;s implementation of namespaces is influenced by its dynamic nature as a programming
   language. Thus, to convert code like the following example into namespaced code:
   <div class="example" id="example-381">
    <p><strong>Example #1 Dynamically accessing elements</strong></p>
    <div class="example-contents"><p>example1.php:</p></div>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">classname<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br />function </span><span style="color: #0000BB">funcname</span><span style="color: #007700">()<br />{<br />    echo </span><span style="color: #0000BB">__FUNCTION__</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br />const </span><span style="color: #0000BB">constname </span><span style="color: #007700">= </span><span style="color: #DD0000">"global"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">'classname'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">$a</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints classname::__construct<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #DD0000">'funcname'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">(); </span><span style="color: #FF8000">// prints funcname<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'constname'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints global<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   One must use the fully qualified name (class name with namespace prefix).
   Note that because there is no difference between a qualified and a fully qualified Name
   inside a dynamic class name, function name, or constant name, the leading backslash is
   not necessary.
   <div class="example" id="example-382">
    <p><strong>Example #2 Dynamically accessing namespaced elements</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">namespacename</span><span style="color: #007700">;<br />class </span><span style="color: #0000BB">classname<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br />function </span><span style="color: #0000BB">funcname</span><span style="color: #007700">()<br />{<br />    echo </span><span style="color: #0000BB">__FUNCTION__</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br />const </span><span style="color: #0000BB">constname </span><span style="color: #007700">= </span><span style="color: #DD0000">"namespaced"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* note that if using double quotes, "\\namespacename\\classname" must be used */<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">'\namespacename\classname'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">$a</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints namespacename\classname::__construct<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">'namespacename\classname'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">$a</span><span style="color: #007700">; </span><span style="color: #FF8000">// also prints namespacename\classname::__construct<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #DD0000">'namespacename\funcname'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">(); </span><span style="color: #FF8000">// prints namespacename\funcname<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #DD0000">'\namespacename\funcname'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">(); </span><span style="color: #FF8000">// also prints namespacename\funcname<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'\namespacename\constname'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints namespaced<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'namespacename\constname'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// also prints namespaced<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   Be sure to read the <a href="language.namespaces.faq.php#language.namespaces.faq.quote" class="link">note about
   escaping namespace names in strings</a>.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.namespaces.dynamic%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.namespaces.dynamic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.dynamic.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104762">  <div class="votes">
    <div id="Vu104762">
    <a href="/manual/vote-note.php?id=104762&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104762">
    <a href="/manual/vote-note.php?id=104762&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104762" title="82% like this...">
    77
    </div>
  </div>
  <a href="#104762" class="name">
  <strong class="user"><em>Alexander Kirk</em></strong></a><a class="genanchor" href="#104762"> &para;</a><div class="date" title="2011-07-06 12:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104762">
<div class="phpcode"><code><span class="html">When extending a class from another namespace that should instantiate a class from within the current namespace, you need to pass on the namespace.<br /><br /><span class="default">&lt;?php </span><span class="comment">// File1.php<br /></span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br />class </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">factory</span><span class="keyword">() {<br />        return new </span><span class="default">C</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">C </span><span class="keyword">{<br />    public function </span><span class="default">tell</span><span class="keyword">() {<br />        echo </span><span class="string">"foo"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php </span><span class="comment">// File2.php<br /></span><span class="keyword">namespace </span><span class="default">bar</span><span class="keyword">;<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">\foo\A </span><span class="keyword">{}<br />class </span><span class="default">C </span><span class="keyword">{<br />    public function </span><span class="default">tell</span><span class="keyword">() {<br />        echo </span><span class="string">"bar"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="string">"File1.php"</span><span class="keyword">;<br />include </span><span class="string">"File2.php"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">bar\B</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">factory</span><span class="keyword">();<br /></span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">tell</span><span class="keyword">(); </span><span class="comment">// "foo" but you want "bar"<br /></span><span class="default">?&gt;<br /></span><br />You need to do it like this:<br /><br />When extending a class from another namespace that should instantiate a class from within the current namespace, you need to pass on the namespace.<br /><br /><span class="default">&lt;?php </span><span class="comment">// File1.php<br /></span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br />class </span><span class="default">A </span><span class="keyword">{<br />    protected </span><span class="default">$namespace </span><span class="keyword">= </span><span class="default">__NAMESPACE__</span><span class="keyword">;<br />    public function </span><span class="default">factory</span><span class="keyword">() {<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">namespace </span><span class="keyword">. </span><span class="string">'\C'</span><span class="keyword">;<br />        return new </span><span class="default">$c</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">C </span><span class="keyword">{<br />    public function </span><span class="default">tell</span><span class="keyword">() {<br />        echo </span><span class="string">"foo"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php </span><span class="comment">// File2.php<br /></span><span class="keyword">namespace </span><span class="default">bar</span><span class="keyword">;<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">\foo\A </span><span class="keyword">{<br />    protected </span><span class="default">$namespace </span><span class="keyword">= </span><span class="default">__NAMESPACE__</span><span class="keyword">;<br />}<br />class </span><span class="default">C </span><span class="keyword">{<br />    public function </span><span class="default">tell</span><span class="keyword">() {<br />        echo </span><span class="string">"bar"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="string">"File1.php"</span><span class="keyword">;<br />include </span><span class="string">"File2.php"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">bar\B</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">factory</span><span class="keyword">();<br /></span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">tell</span><span class="keyword">(); </span><span class="comment">// "bar"<br /></span><span class="default">?&gt;<br /></span><br />(it seems that the namespace-backslashes are stripped from the source code in the preview, maybe it works in the main view. If not: fooA was written as \foo\A and barB as bar\B)</span></code></div>
  </div>
 </div>
  <div class="note" id="126621">  <div class="votes">
    <div id="Vu126621">
    <a href="/manual/vote-note.php?id=126621&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126621">
    <a href="/manual/vote-note.php?id=126621&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126621" title="100% like this...">
    3
    </div>
  </div>
  <a href="#126621" class="name">
  <strong class="user"><em>anisgazig at gmail dot com</em></strong></a><a class="genanchor" href="#126621"> &para;</a><div class="date" title="2021-11-19 05:12"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126621">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">//single or double quotes with single or double backslash in dynamic namespace class.<br /><br /></span><span class="keyword">namespace </span><span class="default">Country_Name</span><span class="keyword">{<br />class </span><span class="default">Mexico</span><span class="keyword">{<br />function </span><span class="default">__construct</span><span class="keyword">(){<br />echo </span><span class="default">__METHOD__</span><span class="keyword">,</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />}<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">'Country_Name\Mexico'</span><span class="keyword">;</span><span class="comment">//Country_Name\Mexico::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"Country_Name\Mexico"</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\Mexico::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">'\Country_Name\Mexico'</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\Mexico::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"\Country_Name\Mexico"</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\Mexico::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"\\Country_Name\\Mexico"</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\Mexico::__construct<br /></span><span class="default">$o </span><span class="keyword">= new </span><span class="default">$a</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="comment">/* if your namespace name or class name start with lowercase n then you should be alart about the use of single or double quotes with backslash  */<br /><br /></span><span class="keyword">namespace </span><span class="default">name_of_country</span><span class="keyword">{<br />class </span><span class="default">Japan</span><span class="keyword">{<br />function </span><span class="default">__construct</span><span class="keyword">()<br />{<br />    echo </span><span class="default">__METHOD__</span><span class="keyword">,</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />}<br /><br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">'name_of_country\Japan'</span><span class="keyword">;<br /></span><span class="comment">//name_of_country\Japan::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"name_of_country\Japan"</span><span class="keyword">;<br /></span><span class="comment">//name_of_country\Japan::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">'\name_of_country\Japan'</span><span class="keyword">;<br /></span><span class="comment">//name_of_country\Japan::__construct<br />//$a = "\name_of_country\Japan";<br />//Fatal error: Uncaught Error: Class ' ame_of_country\Japan' not found <br />//In this statement "\name_of_country\Japan" means -first letter n with "\ == new line("\n). for fix it we can use double back slash or single quotes with single backslash. <br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"\\name_of_country\\Japan"</span><span class="keyword">;<br /></span><span class="comment">//name_of_country\Japan::__construct<br /></span><span class="default">$o </span><span class="keyword">= new </span><span class="default">$a</span><span class="keyword">;<br />}<br /><br />namespace </span><span class="default">Country_Name</span><span class="keyword">{<br />class </span><span class="default">name</span><span class="keyword">{<br />function </span><span class="default">__construct</span><span class="keyword">(){<br />echo </span><span class="default">__METHOD__</span><span class="keyword">,</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />}<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">'Country_Name\name'</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\Norway::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"Country_Name\name"</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\Norway::__construct<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">'\Country_Name\name'</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\Norway::__construct<br />//$a = "\Country_Name\name";<br />//Fatal error: Uncaught Error: Class '\Country_Name ame' not found <br /><br />//In this statement "\Country_Name\name" at class name's first letter n with "\ == new line("\n). for fix it we can use double back slash or single quotes with single backslash<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"\\Country_Name\\name"</span><span class="keyword">;<br /></span><span class="comment">//Country_Name\name::__construct<br /></span><span class="default">$o </span><span class="keyword">= new </span><span class="default">$a</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="comment">//"\n == new line are case insensitive so "\N could not affected<br /><br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123673">  <div class="votes">
    <div id="Vu123673">
    <a href="/manual/vote-note.php?id=123673&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123673">
    <a href="/manual/vote-note.php?id=123673&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123673" title="90% like this...">
    8
    </div>
  </div>
  <a href="#123673" class="name">
  <strong class="user"><em>museyib dot e at gmail dot com</em></strong></a><a class="genanchor" href="#123673"> &para;</a><div class="date" title="2019-03-09 04:48"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123673">
<div class="phpcode"><code><span class="html">Be careful when using dynamic accessing namespaced elements. If you use double-quote backslashes will be parsed as escape character.<br /><br /><span class="default">&lt;?php<br />    $a</span><span class="keyword">=</span><span class="string">"\namespacename\classname"</span><span class="keyword">; </span><span class="comment">//Invalid use and Fatal error.<br />    </span><span class="default">$a</span><span class="keyword">=</span><span class="string">"\\namespacename\\classname"</span><span class="keyword">; </span><span class="comment">//Valid use.<br />    </span><span class="default">$a</span><span class="keyword">=</span><span class="string">'\namespacename\classname'</span><span class="keyword">; </span><span class="comment">//Valid use.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124210">  <div class="votes">
    <div id="Vu124210">
    <a href="/manual/vote-note.php?id=124210&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124210">
    <a href="/manual/vote-note.php?id=124210&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124210" title="86% like this...">
    11
    </div>
  </div>
  <a href="#124210" class="name">
  <strong class="user"><em>Daan</em></strong></a><a class="genanchor" href="#124210"> &para;</a><div class="date" title="2019-09-19 08:56"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124210">
<div class="phpcode"><code><span class="html">Important to know is that you need to use the *fully qualified name* in a dynamic class name. Here is an example that emphasizes the difference between a dynamic class name and a normal class name.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">namespacename\foo</span><span class="keyword">;<br /><br />class </span><span class="default">classname      <br /></span><span class="keyword">{                                                                                        <br />    function </span><span class="default">__construct</span><span class="keyword">()                                                               <br />    {                                                                                    <br />        echo </span><span class="string">'bar'</span><span class="keyword">;<br />    }                                                                                    <br />}                                                                                        <br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">'\namespacename\foo\classname'</span><span class="keyword">; </span><span class="comment">// Works, is fully qualified name                   <br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">'namespacename\foo\classname'</span><span class="keyword">; </span><span class="comment">// Works, is treated as it was with a prefixed "\"   <br /></span><span class="default">$c </span><span class="keyword">= </span><span class="string">'foo\classname'</span><span class="keyword">; </span><span class="comment">// Will not work, it should be the fully qualified name            <br /><br />// Use dynamic class name                                                                                         <br /></span><span class="keyword">new </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// bar<br /></span><span class="keyword">new </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// bar<br /></span><span class="keyword">new </span><span class="default">$c</span><span class="keyword">; </span><span class="comment">// [500]: / - Uncaught Error: Class 'foo\classname' not found in <br /><br />// Use normal class name                                                                                         <br /></span><span class="keyword">new </span><span class="default">\namespacename\foo\classname</span><span class="keyword">; </span><span class="comment">// bar<br /></span><span class="keyword">new </span><span class="default">namespacename\foo\classname</span><span class="keyword">; </span><span class="comment">// [500]: / - Uncaught Error: Class 'namespacename\foo\namespacename\foo\classname' not found<br /></span><span class="keyword">new </span><span class="default">foo\classname</span><span class="keyword">; </span><span class="comment">// [500]: / - Uncaught Error: Class 'namespacename\foo\foo\classname' not found</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91552">  <div class="votes">
    <div id="Vu91552">
    <a href="/manual/vote-note.php?id=91552&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91552">
    <a href="/manual/vote-note.php?id=91552&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91552" title="69% like this...">
    15
    </div>
  </div>
  <a href="#91552" class="name">
  <strong class="user"><em>guilhermeblanco at php dot net</em></strong></a><a class="genanchor" href="#91552"> &para;</a><div class="date" title="2009-06-16 12:04"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91552">
<div class="phpcode"><code><span class="html">Please be aware of FQCN (Full Qualified Class Name) point.
<br />Many people will have troubles with this:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// File1.php
<br /></span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;
<br />
<br />class </span><span class="default">Bar </span><span class="keyword">{ ... }
<br />
<br />function </span><span class="default">factory</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {
<br />    return new </span><span class="default">$class</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// File2.php
<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">\foo\factory</span><span class="keyword">(</span><span class="string">'Bar'</span><span class="keyword">); </span><span class="comment">// Will try to instantiate \Bar, not \foo\Bar
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />To fix that, and also incorporate a 2 step namespace resolution, you can check for \ as first char of $class, and if not present, build manually the FQCN:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// File1.php
<br /></span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;
<br />
<br />function </span><span class="default">factory</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {
<br />    if (</span><span class="default">$class</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] != </span><span class="string">'\\'</span><span class="keyword">) {
<br />        echo </span><span class="string">'-&gt;'</span><span class="keyword">;
<br />         </span><span class="default">$class </span><span class="keyword">= </span><span class="string">'\\' </span><span class="keyword">. </span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\\' </span><span class="keyword">. </span><span class="default">$class</span><span class="keyword">;
<br />    }
<br />
<br />    return new </span><span class="default">$class</span><span class="keyword">();
<br />}
<br />
<br /></span><span class="comment">// File2.php
<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">\foo\factory</span><span class="keyword">(</span><span class="string">'Bar'</span><span class="keyword">); </span><span class="comment">// Will correctly instantiate \foo\Bar
<br />
<br /></span><span class="default">$bar2 </span><span class="keyword">= </span><span class="default">\foo\factory</span><span class="keyword">(</span><span class="string">'\anotherfoo\Bar'</span><span class="keyword">); </span><span class="comment">// Wil correctly instantiate \anotherfoo\Bar
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112942">  <div class="votes">
    <div id="Vu112942">
    <a href="/manual/vote-note.php?id=112942&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112942">
    <a href="/manual/vote-note.php?id=112942&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112942" title="64% like this...">
    7
    </div>
  </div>
  <a href="#112942" class="name">
  <strong class="user"><em>akhoondi+php at gmail dot com</em></strong></a><a class="genanchor" href="#112942"> &para;</a><div class="date" title="2013-08-09 04:17"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112942">
<div class="phpcode"><code><span class="html">It might make it more clear if said this way: <br /><br />One must note that when using a dynamic class name, function name or constant name, the "current namespace", as in <a href="http://www.php.net/manual/en/language.namespaces.basics.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.namespaces.basics.php</a> is global namespace.<br /><br />One situation that dynamic class names are used is in 'factory' pattern. Thus, add the desired namespace of your target class before the variable name.<br /><br />namespaced.php<br /><span class="default">&lt;?php<br /></span><span class="comment">// namespaced.php<br /></span><span class="keyword">namespace </span><span class="default">Mypackage</span><span class="keyword">;<br />class </span><span class="default">Foo </span><span class="keyword">{<br />    public function </span><span class="default">factory</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$global </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$global</span><span class="keyword">)<br />            </span><span class="default">$class </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;<br />        else<br />            </span><span class="default">$class </span><span class="keyword">= </span><span class="string">'Mypackage\\' </span><span class="keyword">. </span><span class="default">$name</span><span class="keyword">;<br />        return new </span><span class="default">$class</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">A </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        echo </span><span class="default">__METHOD__ </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">B </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        echo </span><span class="default">__METHOD__ </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />global.php<br /><span class="default">&lt;?php <br /></span><span class="comment">// global.php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        echo  </span><span class="default">__METHOD__</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />index.php<br /><span class="default">&lt;?php<br /></span><span class="comment">//  index.php<br /></span><span class="keyword">namespace </span><span class="default">Mypackage</span><span class="keyword">;<br />include(</span><span class="string">'namespaced.php'</span><span class="keyword">);<br />include(</span><span class="string">'global.php'</span><span class="keyword">);<br />  <br />  </span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br />  <br />  </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">factory</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">);        </span><span class="comment">// Mypackage\A::__construct <br />  </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">factory</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">);        </span><span class="comment">// Mypackage\B::__construct<br />  <br />  </span><span class="default">$a2 </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">factory</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);    </span><span class="comment">// A::__construct<br />  </span><span class="default">$b2 </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">factory</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);    </span><span class="comment">// Will produce : Fatal error: Class 'B' not found in ...namespaced.php on line ...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120707">  <div class="votes">
    <div id="Vu120707">
    <a href="/manual/vote-note.php?id=120707&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120707">
    <a href="/manual/vote-note.php?id=120707&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120707" title="63% like this...">
    3
    </div>
  </div>
  <a href="#120707" class="name">
  <strong class="user"><em>m dot mannes at gmail dot com</em></strong></a><a class="genanchor" href="#120707"> &para;</a><div class="date" title="2017-02-25 06:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120707">
<div class="phpcode"><code><span class="html">Case you are trying call a static method that's the way to go:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">myClass <br /></span><span class="keyword">{<br />    public static function </span><span class="default">myMethod</span><span class="keyword">() <br />    {<br />      return </span><span class="string">"You did it!\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="string">"myClass"</span><span class="keyword">;<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">"myMethod"</span><span class="keyword">;<br /><br />echo </span><span class="default">$foo</span><span class="keyword">::</span><span class="default">$bar</span><span class="keyword">(); </span><span class="comment">// prints "You did it!";<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92764">  <div class="votes">
    <div id="Vu92764">
    <a href="/manual/vote-note.php?id=92764&amp;page=language.namespaces.dynamic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92764">
    <a href="/manual/vote-note.php?id=92764&amp;page=language.namespaces.dynamic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92764" title="56% like this...">
    2
    </div>
  </div>
  <a href="#92764" class="name">
  <strong class="user"><em>scott at intothewild dot ca</em></strong></a><a class="genanchor" href="#92764"> &para;</a><div class="date" title="2009-08-07 03:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92764">
<div class="phpcode"><code><span class="html">as noted by guilhermeblanco at php dot net, <br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="comment">// fact.php<br /><br />  </span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br /><br />  class </span><span class="default">fact </span><span class="keyword">{<br /><br />    public function </span><span class="default">create</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />      return new </span><span class="default">$class</span><span class="keyword">();<br />    }<br />  }<br /><br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php <br /><br />  </span><span class="comment">// bar.php<br /><br />  </span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br /><br />  class </span><span class="default">bar </span><span class="keyword">{<br />  ... <br />  }<br /><br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /><br />  </span><span class="comment">// index.php<br /> <br />  </span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br /><br />  include(</span><span class="string">'fact.php'</span><span class="keyword">);<br />  <br />  </span><span class="default">$foofact </span><span class="keyword">= new </span><span class="default">fact</span><span class="keyword">();<br />  </span><span class="default">$bar </span><span class="keyword">= </span><span class="default">$foofact</span><span class="keyword">-&gt;</span><span class="default">create</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">); </span><span class="comment">// attempts to create \bar<br />                                  // even though foofact and<br />                                  // bar reside in \foo<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.namespaces.dynamic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.dynamic.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.namespaces.php">Namespaces</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.namespaces.rationale.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
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
                                                <li class="current">
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
