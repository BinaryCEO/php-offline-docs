<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Error - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.error.php">
 <link rel="shorturl" href="https://www.php.net/error">
 <link rel="alternate" href="https://www.php.net/error" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.exceptions.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.closedgeneratorexception.php">
 <link rel="next" href="https://www.php.net/manual/en/error.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.error.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.error.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.error.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.error.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.error.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.error.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.error.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.error.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.error.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.error.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.error.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Error" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Error - Manual" />
<meta name="twitter:description" content="Error" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Error - Manual" />
<meta itemprop="description" content="Error" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Error" />

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
        <a href="error.construct.php">
          Error::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.closedgeneratorexception.php">
          &laquo; ClosedGeneratorException        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.exceptions.php'>Predefined Exceptions</a></li>      </ul>
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
            <option value='en/class.error.php' selected="selected">English</option>
            <option value='de/class.error.php'>German</option>
            <option value='es/class.error.php'>Spanish</option>
            <option value='fr/class.error.php'>French</option>
            <option value='it/class.error.php'>Italian</option>
            <option value='ja/class.error.php'>Japanese</option>
            <option value='pt_BR/class.error.php'>Brazilian Portuguese</option>
            <option value='ru/class.error.php'>Russian</option>
            <option value='tr/class.error.php'>Turkish</option>
            <option value='uk/class.error.php'>Ukrainian</option>
            <option value='zh/class.error.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.error" class="reference">
 <h1 class="title">Error</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 7, PHP 8)</p>
 

  <div class="section" id="error.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <span class="ooclass"><span class="classname"><strong class="classname">Error</strong></span></span> is the base class for all
    internal PHP errors.
   </p>
  </div>

 
  <div class="section" id="error.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="exceptionname">Error</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.throwable.php" class="interfacename">Throwable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.error.php#error.props.message">$<var class="varname">message</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.error.php#error.props.string">$<var class="varname">string</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.error.php#error.props.code">$<var class="varname">code</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.error.php#error.props.file">$<var class="varname">file</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.error.php#error.props.line">$<var class="varname">line</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
      <var class="varname"><a href="class.error.php#error.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = []</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.error.php#error.props.previous">$<var class="varname">previous</var></a></var><span class="initializer"> = null</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="error.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$code</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span></span> <code class="parameter">$previous</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="error.getmessage.php" class="methodname">getMessage</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="error.getprevious.php" class="methodname">getPrevious</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="error.getcode.php" class="methodname">getCode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="error.getfile.php" class="methodname">getFile</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="error.getline.php" class="methodname">getLine</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="error.gettrace.php" class="methodname">getTrace</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="error.gettraceasstring.php" class="methodname">getTraceAsString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="error.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname"><a href="error.clone.php" class="methodname">__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>
 

 
  </div>
  
    <div class="section" id="error.props">
     <h2 class="title">Properties</h2>
     <dl>
      
       <dt id="error.props.message"><var class="varname">message</var></dt>
       <dd>
        <p class="para">The error message</p>
       </dd>
      
      
       <dt id="error.props.code"><var class="varname">code</var></dt>
       <dd>
        <p class="para">The error code</p>
       </dd>
      
      
       <dt id="error.props.file"><var class="varname">file</var></dt>
       <dd>
        <p class="para">The filename where the error happened</p>
       </dd>
      
      
       <dt id="error.props.line"><var class="varname">line</var></dt>
       <dd>
        <p class="para">The line where the error happened</p>
       </dd>
      
      
       <dt id="error.props.previous"><var class="varname">previous</var></dt>
       <dd>
        <p class="para">The previously thrown exception</p>
       </dd>
      
      
       <dt id="error.props.string"><var class="varname">string</var></dt>
       <dd>
        <p class="para">The string representation of the stack trace</p>
       </dd>
      
      
       <dt id="error.props.trace"><var class="varname">trace</var></dt>
       <dd>
        <p class="para">The stack trace as an array</p>
       </dd>
      
     </dl>
    </div>
  

 </div>



















































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="error.construct.php">Error::__construct</a> — Construct the error object</li><li><a href="error.getmessage.php">Error::getMessage</a> — Gets the error message</li><li><a href="error.getprevious.php">Error::getPrevious</a> — Returns previous Throwable</li><li><a href="error.getcode.php">Error::getCode</a> — Gets the error code</li><li><a href="error.getfile.php">Error::getFile</a> — Gets the file in which the error occurred</li><li><a href="error.getline.php">Error::getLine</a> — Gets the line in which the error occurred</li><li><a href="error.gettrace.php">Error::getTrace</a> — Gets the stack trace</li><li><a href="error.gettraceasstring.php">Error::getTraceAsString</a> — Gets the stack trace as a string</li><li><a href="error.tostring.php">Error::__toString</a> — String representation of the error</li><li><a href="error.clone.php">Error::__clone</a> — Clone the error</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/error.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.error%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.error.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122323">  <div class="votes">
    <div id="Vu122323">
    <a href="/manual/vote-note.php?id=122323&amp;page=class.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122323">
    <a href="/manual/vote-note.php?id=122323&amp;page=class.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122323" title="68% like this...">
    48
    </div>
  </div>
  <a href="#122323" class="name">
  <strong class="user"><em>whysteepy at gmail dot com</em></strong></a><a class="genanchor" href="#122323"> &para;</a><div class="date" title="2018-01-28 07:53"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122323">
<div class="phpcode"><code><span class="html">Lists of Throwable and Exception tree as of 7.2.0<br /><br />    Error<br />      ArithmeticError<br />        DivisionByZeroError<br />      AssertionError<br />      ParseError<br />      TypeError<br />        ArgumentCountError<br />    Exception<br />      ClosedGeneratorException<br />      DOMException<br />      ErrorException<br />      IntlException<br />      LogicException<br />        BadFunctionCallException<br />          BadMethodCallException<br />        DomainException<br />        InvalidArgumentException<br />        LengthException<br />        OutOfRangeException<br />      PharException<br />      ReflectionException<br />      RuntimeException<br />        OutOfBoundsException<br />        OverflowException<br />        PDOException<br />        RangeException<br />        UnderflowException<br />        UnexpectedValueException<br />      SodiumException <br /><br />Find the script and output in the following links:<br /><a href="https://gist.github.com/mlocati/249f07b074a0de339d4d1ca980848e6a" rel="nofollow" target="_blank">https://gist.github.com/mlocati/249f07b074a0de339d4d1ca980848e6a</a><br /><a href="https://3v4l.org/sDMsv" rel="nofollow" target="_blank">https://3v4l.org/sDMsv</a><br /><br />posted here <a href="http://php.net/manual/en/class.throwable.php" rel="nofollow" target="_blank">http://php.net/manual/en/class.throwable.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="126795">  <div class="votes">
    <div id="Vu126795">
    <a href="/manual/vote-note.php?id=126795&amp;page=class.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126795">
    <a href="/manual/vote-note.php?id=126795&amp;page=class.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126795" title="76% like this...">
    22
    </div>
  </div>
  <a href="#126795" class="name">
  <strong class="user"><em>dams at php dot net</em></strong></a><a class="genanchor" href="#126795"> &para;</a><div class="date" title="2022-01-22 03:45"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126795">
<div class="phpcode"><code><span class="html">Lists of Throwable and Exception tree as of 8.1.0<br /><br />Error<br />   ArithmeticError<br />      DivisionByZeroError<br />   AssertionError<br />   CompileError<br />      ParseError<br />   FiberError<br />   TypeError<br />      ArgumentCountError<br />   UnhandledMatchError<br />   ValueError<br />Exception<br />   ClosedGeneratorException<br />   DOMException<br />   ErrorException<br />   IntlException<br />   JsonException<br />   LogicException<br />      BadFunctionCallException<br />         BadMethodCallException<br />      DomainException<br />      InvalidArgumentException<br />      LengthException<br />      OutOfRangeException<br />   PharException<br />   ReflectionException<br />   RuntimeException<br />      OutOfBoundsException<br />      OverflowException<br />      PDOException<br />      RangeException<br />      UnderflowException<br />      UnexpectedValueException<br />   SodiumException<br /><br />Find the script and output in the following links:<br /><a href="https://gist.github.com/mlocati/249f07b074a0de339d4d1ca980848e6a" rel="nofollow" target="_blank">https://gist.github.com/mlocati/249f07b074a0de339d4d1ca980848e6a</a><br /><a href="https://3v4l.org/f8Boe" rel="nofollow" target="_blank">https://3v4l.org/f8Boe</a><br /><br />Initially posted by whysteepy at gmail dot com for PHP 7.2.0, based on the gist</span></code></div>
  </div>
 </div>
  <div class="note" id="118453">  <div class="votes">
    <div id="Vu118453">
    <a href="/manual/vote-note.php?id=118453&amp;page=class.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118453">
    <a href="/manual/vote-note.php?id=118453&amp;page=class.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118453" title="50% like this...">
    2
    </div>
  </div>
  <a href="#118453" class="name">
  <strong class="user"><em>JustinasMalkas</em></strong></a><a class="genanchor" href="#118453"> &para;</a><div class="date" title="2015-12-08 08:13"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118453">
<div class="phpcode"><code><span class="html">If after PHP upgrade you're getting error "PHP Fatal error:  Cannot declare class error, because the name is already in use ...", you will have to rename your "error" class.<br />Since PHP 7 classname "Error" is predefined and used internally.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.error.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.exceptions.php">Predefined Exceptions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.exception.php" title="Exception">Exception</a>
                        </li>
                                                <li class="">
                            <a href="class.errorexception.php" title="ErrorException">ErrorException</a>
                        </li>
                                                <li class="">
                            <a href="class.closedgeneratorexception.php" title="ClosedGeneratorException">ClosedGeneratorException</a>
                        </li>
                                                <li class="current">
                            <a href="class.error.php" title="Error">Error</a>
                        </li>
                                                <li class="">
                            <a href="class.argumentcounterror.php" title="ArgumentCountError">ArgumentCountError</a>
                        </li>
                                                <li class="">
                            <a href="class.arithmeticerror.php" title="ArithmeticError">ArithmeticError</a>
                        </li>
                                                <li class="">
                            <a href="class.assertionerror.php" title="AssertionError">AssertionError</a>
                        </li>
                                                <li class="">
                            <a href="class.divisionbyzeroerror.php" title="DivisionByZeroError">DivisionByZeroError</a>
                        </li>
                                                <li class="">
                            <a href="class.compileerror.php" title="CompileError">CompileError</a>
                        </li>
                                                <li class="">
                            <a href="class.parseerror.php" title="ParseError">ParseError</a>
                        </li>
                                                <li class="">
                            <a href="class.typeerror.php" title="TypeError">TypeError</a>
                        </li>
                                                <li class="">
                            <a href="class.valueerror.php" title="ValueError">ValueError</a>
                        </li>
                                                <li class="">
                            <a href="class.unhandledmatcherror.php" title="UnhandledMatchError">UnhandledMatchError</a>
                        </li>
                                                <li class="">
                            <a href="class.fibererror.php" title="FiberError">FiberError</a>
                        </li>
                                                <li class="">
                            <a href="class.requestparsebodyexception.php" title="RequestParseBodyException">RequestParseBodyException</a>
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
