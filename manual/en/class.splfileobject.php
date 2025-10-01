<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplFileObject - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.splfileobject.php">
 <link rel="shorturl" href="https://www.php.net/splfileobject">
 <link rel="alternate" href="https://www.php.net/splfileobject" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.files.php">
 <link rel="prev" href="https://www.php.net/manual/en/splfileinfo.tostring.php">
 <link rel="next" href="https://www.php.net/manual/en/splfileobject.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.splfileobject.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.splfileobject.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.splfileobject.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.splfileobject.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.splfileobject.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.splfileobject.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.splfileobject.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.splfileobject.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.splfileobject.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.splfileobject.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.splfileobject.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SplFileObject class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplFileObject - Manual" />
<meta name="twitter:description" content="The SplFileObject class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplFileObject - Manual" />
<meta itemprop="description" content="The SplFileObject class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SplFileObject class" />

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
        <a href="splfileobject.construct.php">
          SplFileObject::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="splfileinfo.tostring.php">
          &laquo; SplFileInfo::__toString        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.files.php'>File Handling</a></li>      </ul>
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
            <option value='en/class.splfileobject.php' selected="selected">English</option>
            <option value='de/class.splfileobject.php'>German</option>
            <option value='es/class.splfileobject.php'>Spanish</option>
            <option value='fr/class.splfileobject.php'>French</option>
            <option value='it/class.splfileobject.php'>Italian</option>
            <option value='ja/class.splfileobject.php'>Japanese</option>
            <option value='pt_BR/class.splfileobject.php'>Brazilian Portuguese</option>
            <option value='ru/class.splfileobject.php'>Russian</option>
            <option value='tr/class.splfileobject.php'>Turkish</option>
            <option value='uk/class.splfileobject.php'>Ukrainian</option>
            <option value='zh/class.splfileobject.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.splfileobject" class="reference">

 <h1 class="title">The SplFileObject class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p>


  <div class="section" id="splfileobject.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SplFileObject class offers an object-oriented interface for a file.
   </p>
  </div>


  <div class="section" id="splfileobject.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SplFileObject</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.splfileinfo.php" class="classname">SplFileInfo</a>
    

    
     <span class="modifier">implements</span>
      <a href="class.recursiveiterator.php" class="interfacename">RecursiveIterator</a>,

     <a href="class.seekableiterator.php" class="interfacename">SeekableIterator</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.splfileobject.php#splfileobject.constants.drop-new-line"><var class="varname">DROP_NEW_LINE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.splfileobject.php#splfileobject.constants.read-ahead"><var class="varname">READ_AHEAD</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.splfileobject.php#splfileobject.constants.skip-empty"><var class="varname">SKIP_EMPTY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.splfileobject.php#splfileobject.constants.read-csv"><var class="varname">READ_CSV</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="splfileobject.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code><span class="initializer"> = &quot;r&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$useIncludePath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.current.php" class="methodname">current</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.eof.php" class="methodname">eof</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fflush.php" class="methodname">fflush</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fgetc.php" class="methodname">fgetc</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fgetcsv.php" class="methodname">fgetcsv</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$separator</code><span class="initializer"> = &quot;,&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$enclosure</code><span class="initializer"> = &quot;\&quot;&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$escape</code><span class="initializer"> = &quot;\\&quot;</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fgets.php" class="methodname">fgets</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fgetss.php" class="methodname">fgetss</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$allowable_tags</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.flock.php" class="methodname">flock</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$operation</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$wouldBlock</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fpassthru.php" class="methodname">fpassthru</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fputcsv.php" class="methodname">fputcsv</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$fields</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$separator</code><span class="initializer"> = &quot;,&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$enclosure</code><span class="initializer"> = &quot;\&quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$escape</code><span class="initializer"> = &quot;\\&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$eol</code><span class="initializer"> = &quot;\n&quot;</span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fread.php" class="methodname">fread</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fscanf.php" class="methodname">fscanf</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&...$vars</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fseek.php" class="methodname">fseek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$whence</code><span class="initializer"> = <strong><code><a href="filesystem.constants.php#constant.seek-set">SEEK_SET</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fstat.php" class="methodname">fstat</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.ftell.php" class="methodname">ftell</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.ftruncate.php" class="methodname">ftruncate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.fwrite.php" class="methodname">fwrite</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.getchildren.php" class="methodname">getChildren</a></span>(): <span class="type"><a href="language.types.null.php" class="type null">null</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.getcsvcontrol.php" class="methodname">getCsvControl</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.getflags.php" class="methodname">getFlags</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.getmaxlinelen.php" class="methodname">getMaxLineLen</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.haschildren.php" class="methodname">hasChildren</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.seek.php" class="methodname">seek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$line</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.setcsvcontrol.php" class="methodname">setCsvControl</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$separator</code><span class="initializer"> = &quot;,&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$enclosure</code><span class="initializer"> = &quot;\&quot;&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$escape</code><span class="initializer"> = &quot;\\&quot;</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.setflags.php" class="methodname">setFlags</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.setmaxlinelen.php" class="methodname">setMaxLineLen</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxLength</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileobject.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getatime.php" class="methodname">SplFileInfo::getATime</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getbasename.php" class="methodname">SplFileInfo::getBasename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$suffix</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getctime.php" class="methodname">SplFileInfo::getCTime</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getextension.php" class="methodname">SplFileInfo::getExtension</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getfileinfo.php" class="methodname">SplFileInfo::getFileInfo</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.splfileinfo.php" class="type SplFileInfo">SplFileInfo</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getfilename.php" class="methodname">SplFileInfo::getFilename</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getgroup.php" class="methodname">SplFileInfo::getGroup</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getinode.php" class="methodname">SplFileInfo::getInode</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getlinktarget.php" class="methodname">SplFileInfo::getLinkTarget</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getmtime.php" class="methodname">SplFileInfo::getMTime</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getowner.php" class="methodname">SplFileInfo::getOwner</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getpath.php" class="methodname">SplFileInfo::getPath</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getpathinfo.php" class="methodname">SplFileInfo::getPathInfo</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.splfileinfo.php" class="type SplFileInfo">SplFileInfo</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getpathname.php" class="methodname">SplFileInfo::getPathname</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getperms.php" class="methodname">SplFileInfo::getPerms</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getrealpath.php" class="methodname">SplFileInfo::getRealPath</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getsize.php" class="methodname">SplFileInfo::getSize</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.gettype.php" class="methodname">SplFileInfo::getType</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isdir.php" class="methodname">SplFileInfo::isDir</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isexecutable.php" class="methodname">SplFileInfo::isExecutable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isfile.php" class="methodname">SplFileInfo::isFile</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.islink.php" class="methodname">SplFileInfo::isLink</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isreadable.php" class="methodname">SplFileInfo::isReadable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.iswritable.php" class="methodname">SplFileInfo::isWritable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.openfile.php" class="methodname">SplFileInfo::openFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code><span class="initializer"> = &quot;r&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$useIncludePath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.splfileobject.php" class="type SplFileObject">SplFileObject</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.setfileclass.php" class="methodname">SplFileInfo::setFileClass</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code><span class="initializer"> = SplFileObject::class</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.setinfoclass.php" class="methodname">SplFileInfo::setInfoClass</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code><span class="initializer"> = SplFileInfo::class</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.tostring.php" class="methodname">SplFileInfo::__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>


  <div class="section" id="splfileobject.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="splfileobject.constants.drop-new-line"><strong><code><a href="class.splfileobject.php#splfileobject.constants.drop-new-line">SplFileObject::DROP_NEW_LINE</a></code></strong></dt>
     <dd>
      <p class="para">Drop newlines at the end of a line.</p>
     </dd>
    
    
     <dt id="splfileobject.constants.read-ahead"><strong><code><a href="class.splfileobject.php#splfileobject.constants.read-ahead">SplFileObject::READ_AHEAD</a></code></strong></dt>
     <dd>
      <p class="para">Read on rewind/next.</p>
     </dd>
    
    
     <dt id="splfileobject.constants.skip-empty"><strong><code><a href="class.splfileobject.php#splfileobject.constants.skip-empty">SplFileObject::SKIP_EMPTY</a></code></strong></dt>
     <dd>
      <p class="para">Skips empty lines in the file. This requires the <strong><code>READ_AHEAD</code></strong> flag be enabled, to work as expected.</p>
     </dd>
    
    
     <dt id="splfileobject.constants.read-csv"><strong><code><a href="class.splfileobject.php#splfileobject.constants.read-csv">SplFileObject::READ_CSV</a></code></strong></dt>
     <dd>
      <p class="para">Read lines as CSV rows.</p>
     </dd>
    
   </dl>
  </div>


 </div>

 








































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="splfileobject.construct.php">SplFileObject::__construct</a> — Construct a new file object</li><li><a href="splfileobject.current.php">SplFileObject::current</a> — Retrieve current line of file</li><li><a href="splfileobject.eof.php">SplFileObject::eof</a> — Reached end of file</li><li><a href="splfileobject.fflush.php">SplFileObject::fflush</a> — Flushes the output to the file</li><li><a href="splfileobject.fgetc.php">SplFileObject::fgetc</a> — Gets character from file</li><li><a href="splfileobject.fgetcsv.php">SplFileObject::fgetcsv</a> — Gets line from file and parse as CSV fields</li><li><a href="splfileobject.fgets.php">SplFileObject::fgets</a> — Gets line from file</li><li><a href="splfileobject.fgetss.php">SplFileObject::fgetss</a> — Gets line from file and strip HTML tags</li><li><a href="splfileobject.flock.php">SplFileObject::flock</a> — Portable file locking</li><li><a href="splfileobject.fpassthru.php">SplFileObject::fpassthru</a> — Output all remaining data on a file pointer</li><li><a href="splfileobject.fputcsv.php">SplFileObject::fputcsv</a> — Write a field array as a CSV line</li><li><a href="splfileobject.fread.php">SplFileObject::fread</a> — Read from file</li><li><a href="splfileobject.fscanf.php">SplFileObject::fscanf</a> — Parses input from file according to a format</li><li><a href="splfileobject.fseek.php">SplFileObject::fseek</a> — Seek to a position</li><li><a href="splfileobject.fstat.php">SplFileObject::fstat</a> — Gets information about the file</li><li><a href="splfileobject.ftell.php">SplFileObject::ftell</a> — Return current file position</li><li><a href="splfileobject.ftruncate.php">SplFileObject::ftruncate</a> — Truncates the file to a given length</li><li><a href="splfileobject.fwrite.php">SplFileObject::fwrite</a> — Write to file</li><li><a href="splfileobject.getchildren.php">SplFileObject::getChildren</a> — No purpose</li><li><a href="splfileobject.getcsvcontrol.php">SplFileObject::getCsvControl</a> — Get the delimiter, enclosure and escape character for CSV</li><li><a href="splfileobject.getcurrentline.php">SplFileObject::getCurrentLine</a> — Alias of SplFileObject::fgets</li><li><a href="splfileobject.getflags.php">SplFileObject::getFlags</a> — Gets flags for the SplFileObject</li><li><a href="splfileobject.getmaxlinelen.php">SplFileObject::getMaxLineLen</a> — Get maximum line length</li><li><a href="splfileobject.haschildren.php">SplFileObject::hasChildren</a> — SplFileObject does not have children</li><li><a href="splfileobject.key.php">SplFileObject::key</a> — Get line number</li><li><a href="splfileobject.next.php">SplFileObject::next</a> — Read next line</li><li><a href="splfileobject.rewind.php">SplFileObject::rewind</a> — Rewind the file to the first line</li><li><a href="splfileobject.seek.php">SplFileObject::seek</a> — Seek to specified line</li><li><a href="splfileobject.setcsvcontrol.php">SplFileObject::setCsvControl</a> — Set the delimiter, enclosure and escape character for CSV</li><li><a href="splfileobject.setflags.php">SplFileObject::setFlags</a> — Sets flags for the SplFileObject</li><li><a href="splfileobject.setmaxlinelen.php">SplFileObject::setMaxLineLen</a> — Set maximum line length</li><li><a href="splfileobject.tostring.php">SplFileObject::__toString</a> — Returns the current line as a string</li><li><a href="splfileobject.valid.php">SplFileObject::valid</a> — Not at EOF</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/splfileobject.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.splfileobject%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.splfileobject&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splfileobject.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113149">  <div class="votes">
    <div id="Vu113149">
    <a href="/manual/vote-note.php?id=113149&amp;page=class.splfileobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113149">
    <a href="/manual/vote-note.php?id=113149&amp;page=class.splfileobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113149" title="80% like this...">
    90
    </div>
  </div>
  <a href="#113149" class="name">
  <strong class="user"><em>Lars Gyrup Brink Nielsen</em></strong></a><a class="genanchor" href="#113149"> &para;</a><div class="date" title="2013-09-05 01:46"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113149">
<div class="phpcode"><code><span class="html">Note that this class has a private (and thus, not documented) property that holds the file pointer. Combine this with the fact that there is no method to close the file handle, and you get into situations where you are not able to delete the file with unlink(), etc., because an SplFileObject still has a handle open.<br /><br />To get around this issue, delete the SplFileObject like this:<br /><br />---------------------------------------------------------------------<br /><span class="default">&lt;?php<br /></span><span class="keyword">print </span><span class="string">"Declaring file object\n"</span><span class="keyword">;<br /></span><span class="default">$file </span><span class="keyword">= new </span><span class="default">SplFileObject</span><span class="keyword">(</span><span class="string">'example.txt'</span><span class="keyword">);<br /><br />print </span><span class="string">"Trying to delete file...\n"</span><span class="keyword">;<br /></span><span class="default">unlink</span><span class="keyword">(</span><span class="string">'example.txt'</span><span class="keyword">);<br /><br />print </span><span class="string">"Closing file object\n"</span><span class="keyword">;<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />print </span><span class="string">"Deleting file...\n"</span><span class="keyword">;<br /></span><span class="default">unlink</span><span class="keyword">(</span><span class="string">'example.txt'</span><span class="keyword">);<br /><br />print </span><span class="string">'File deleted!'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>---------------------------------------------------------------------<br /><br />which will output:<br /><br />---------------------------------------------------------------------<br />Declaring file object <br />Trying to delete file... <br /><br />Warning: unlink(example.txt): Permission denied in file.php on line 6<br />Closing file object <br />Deleting file... <br />File deleted!<br />---------------------------------------------------------------------</span></code></div>
  </div>
 </div>
  <div class="note" id="115563">  <div class="votes">
    <div id="Vu115563">
    <a href="/manual/vote-note.php?id=115563&amp;page=class.splfileobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115563">
    <a href="/manual/vote-note.php?id=115563&amp;page=class.splfileobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115563" title="54% like this...">
    4
    </div>
  </div>
  <a href="#115563" class="name">
  <strong class="user"><em>marcus at synchromedia dot co dot uk</em></strong></a><a class="genanchor" href="#115563"> &para;</a><div class="date" title="2014-08-16 08:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115563">
<div class="phpcode"><code><span class="html">If you want to skip blank lines when reading a CSV file, you need *all * the flags:<br /><br />$file-&gt;setFlags(SplFileObject::READ_CSV | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);</span></code></div>
  </div>
 </div>
  <div class="note" id="129339">  <div class="votes">
    <div id="Vu129339">
    <a href="/manual/vote-note.php?id=129339&amp;page=class.splfileobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129339">
    <a href="/manual/vote-note.php?id=129339&amp;page=class.splfileobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129339" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129339" class="name">
  <strong class="user"><em>contact at trimal dot in</em></strong></a><a class="genanchor" href="#129339"> &para;</a><div class="date" title="2024-03-16 07:32"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129339">
<div class="phpcode"><code><span class="html">with php 8.3, with or without SplFileObject::DROP_NEW_LINE, you get an array with empty values at the end.</span></code></div>
  </div>
 </div>
  <div class="note" id="125776">  <div class="votes">
    <div id="Vu125776">
    <a href="/manual/vote-note.php?id=125776&amp;page=class.splfileobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125776">
    <a href="/manual/vote-note.php?id=125776&amp;page=class.splfileobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125776" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#125776" class="name">
  <strong class="user"><em>rlazarotto15+dont+spam+me at gmail dot com</em></strong></a><a class="genanchor" href="#125776"> &para;</a><div class="date" title="2021-02-04 06:00"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125776">
<div class="phpcode"><code><span class="html">Complimenting marcus at synchromedia dot co dot uk comment, you can also do something like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// create a SplFileObject for reading - note that there are no flags<br /></span><span class="default">$file </span><span class="keyword">= new </span><span class="default">SplFileObject</span><span class="keyword">(</span><span class="string">'/path/to/file'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br /><br /></span><span class="comment">// iterate over its contents<br /></span><span class="keyword">while (!</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">eof</span><span class="keyword">()) {<br />    </span><span class="comment">// get the current line<br />    </span><span class="default">$line  </span><span class="keyword">=  </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">fgets</span><span class="keyword">();<br /><br />    </span><span class="comment">// trim it, and then check if its empty<br />    </span><span class="keyword">if (empty(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">))) {<br />        </span><span class="comment">// skips the current iteration<br />        </span><span class="keyword">continue;<br />    }<br />}<br /><br />While </span><span class="default">this may seem like a overkill </span><span class="keyword">for </span><span class="default">such thing</span><span class="keyword">, </span><span class="default">it allows you to </span><span class="keyword">do </span><span class="default">some processing with the </span><span class="keyword">empty </span><span class="default">lines that might come </span><span class="keyword">(</span><span class="default">I had to </span><span class="keyword">do </span><span class="default">this mostly because I needed to count </span><span class="keyword">empty </span><span class="default">lines instead of just skipping them</span><span class="keyword">). </span><span class="default">Since it also trims the line before checking </span><span class="keyword">if </span><span class="default">it</span><span class="string">'s empty, you won'</span><span class="default">t get lines composed only of </span><span class="keyword">empty </span><span class="default">spaces </span><span class="keyword">(</span><span class="default">I don</span><span class="string">'t know if the flags also make it trim the content before checking it).</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.splfileobject&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splfileobject.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.files.php">File Handling</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.splfileinfo.php" title="SplFileInfo">SplFileInfo</a>
                        </li>
                                                <li class="current">
                            <a href="class.splfileobject.php" title="SplFileObject">SplFileObject</a>
                        </li>
                                                <li class="">
                            <a href="class.spltempfileobject.php" title="SplTempFileObject">SplTempFileObject</a>
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
