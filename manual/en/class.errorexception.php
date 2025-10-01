<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ErrorException - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.errorexception.php">
 <link rel="shorturl" href="https://www.php.net/errorexception">
 <link rel="alternate" href="https://www.php.net/errorexception" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.exceptions.php">
 <link rel="prev" href="https://www.php.net/manual/en/exception.clone.php">
 <link rel="next" href="https://www.php.net/manual/en/errorexception.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.errorexception.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.errorexception.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.errorexception.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.errorexception.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.errorexception.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.errorexception.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.errorexception.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.errorexception.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.errorexception.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.errorexception.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.errorexception.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="ErrorException" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ErrorException - Manual" />
<meta name="twitter:description" content="ErrorException" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ErrorException - Manual" />
<meta itemprop="description" content="ErrorException" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="ErrorException" />

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
        <a href="errorexception.construct.php">
          ErrorException::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="exception.clone.php">
          &laquo; Exception::__clone        </a>
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
            <option value='en/class.errorexception.php' selected="selected">English</option>
            <option value='de/class.errorexception.php'>German</option>
            <option value='es/class.errorexception.php'>Spanish</option>
            <option value='fr/class.errorexception.php'>French</option>
            <option value='it/class.errorexception.php'>Italian</option>
            <option value='ja/class.errorexception.php'>Japanese</option>
            <option value='pt_BR/class.errorexception.php'>Brazilian Portuguese</option>
            <option value='ru/class.errorexception.php'>Russian</option>
            <option value='tr/class.errorexception.php'>Turkish</option>
            <option value='uk/class.errorexception.php'>Ukrainian</option>
            <option value='zh/class.errorexception.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.errorexception" class="reference">
 <h1 class="title">ErrorException</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="errorexception.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    An Error Exception.
   </p>
  </div>

 
  <div class="section" id="errorexception.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="exceptionname">ErrorException</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.exception.php" class="classname">Exception</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.errorexception.php#errorexception.props.severity">$<var class="varname">severity</var></a></var><span class="initializer"> = E_ERROR</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.message">$<var class="varname">message</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>
<div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.string">$<var class="varname">string</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>
<div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.file">$<var class="varname">file</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>
<div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = []</span>;</div>
<div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.exception.php#exception.props.previous">$<var class="varname">previous</var></a></var><span class="initializer"> = null</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="errorexception.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$code</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$severity</code><span class="initializer"> = <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$filename</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$line</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span></span> <code class="parameter">$previous</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="errorexception.getseverity.php" class="methodname">getSeverity</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getmessage.php" class="methodname">Exception::getMessage</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getprevious.php" class="methodname">Exception::getPrevious</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getcode.php" class="methodname">Exception::getCode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getfile.php" class="methodname">Exception::getFile</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getline.php" class="methodname">Exception::getLine</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.gettrace.php" class="methodname">Exception::getTrace</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.gettraceasstring.php" class="methodname">Exception::getTraceAsString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="exception.tostring.php" class="methodname">Exception::__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname"><a href="exception.clone.php" class="methodname">Exception::__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

 
  </div>
 

  <div class="section" id="errorexception.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="errorexception.props.severity"><var class="varname">severity</var></dt>
     <dd>
      <p class="para">The severity of the exception</p>
     </dd>
    
   </dl>
  </div>


  <div class="section" id="errorexception.examples">
   <h2 class="title">Examples</h2>
   <p class="para">
    <div class="example" id="errorexception.example.error-handler">
     <p><strong>Example #1 Use <span class="function"><a href="function.set-error-handler.php" class="function">set_error_handler()</a></span> to change error messages into ErrorException</strong></p>
     <div class="example-contents">
 <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />set_error_handler</span><span style="color: #007700">(function (</span><span style="color: #0000BB">int $errno</span><span style="color: #007700">, </span><span style="color: #0000BB">string $errstr</span><span style="color: #007700">, </span><span style="color: #0000BB">string $errfile</span><span style="color: #007700">, </span><span style="color: #0000BB">int $errline</span><span style="color: #007700">) {<br />    if (!(</span><span style="color: #0000BB">error_reporting</span><span style="color: #007700">() &amp; </span><span style="color: #0000BB">$errno</span><span style="color: #007700">)) {<br />        </span><span style="color: #FF8000">// This error code is not included in error_reporting.<br />        </span><span style="color: #007700">return;<br />    }<br /><br />    if (</span><span style="color: #0000BB">$errno </span><span style="color: #007700">=== </span><span style="color: #0000BB">E_DEPRECATED </span><span style="color: #007700">|| </span><span style="color: #0000BB">$errno </span><span style="color: #007700">=== </span><span style="color: #0000BB">E_USER_DEPRECATED</span><span style="color: #007700">) {<br />        </span><span style="color: #FF8000">// Do not throw an Exception for deprecation warnings as new or unexpected<br />        // deprecations would break the application.<br />        </span><span style="color: #007700">return;<br />    }<br /><br />    throw new </span><span style="color: #0000BB">\ErrorException</span><span style="color: #007700">(</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$errno</span><span style="color: #007700">, </span><span style="color: #0000BB">$errfile</span><span style="color: #007700">, </span><span style="color: #0000BB">$errline</span><span style="color: #007700">);<br />});<br /><br /></span><span style="color: #FF8000">// Unserializing broken data triggers a warning which will be turned into an<br />// ErrorException by the error handler.<br /></span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #DD0000">'broken data'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output
something similar to:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
Fatal error: Uncaught ErrorException: unserialize(): Error at offset 0 of 11 bytes in test.php:16
Stack trace:
#0 [internal function]: {closure}(2, &#039;unserialize(): ...&#039;, &#039;test.php&#039;, 16)
#1 test.php(16): unserialize(&#039;broken data&#039;)
#2 {main}
  thrown in test.php on line 16
</pre></div>
     </div>
    </div>
   </p>
  </div>
 
 </div>
 
 




 




 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="errorexception.construct.php">ErrorException::__construct</a> — Constructs the exception</li><li><a href="errorexception.getseverity.php">ErrorException::getSeverity</a> — Gets the exception severity</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/errorexception.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.errorexception%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.errorexception&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.errorexception.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95415">  <div class="votes">
    <div id="Vu95415">
    <a href="/manual/vote-note.php?id=95415&amp;page=class.errorexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95415">
    <a href="/manual/vote-note.php?id=95415&amp;page=class.errorexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95415" title="63% like this...">
    19
    </div>
  </div>
  <a href="#95415" class="name">
  <strong class="user"><em>triplepoint at gmail dot com</em></strong></a><a class="genanchor" href="#95415"> &para;</a><div class="date" title="2010-01-01 08:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95415">
<div class="phpcode"><code><span class="html">As noted below, it's important to realize that unless caught, any Exception thrown will halt the script.  So converting EVERY notice, warning, or error to an ErrorException will halt your script when something harmlesss like E_USER_NOTICE is triggered.<br /><br />It seems to me the best use of the ErrorException class is something like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">custom_error_handler</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">) <br />{<br />    </span><span class="comment">// Determine if this error is one of the enabled ones in php config (php.ini, .htaccess, etc)<br />    </span><span class="default">$error_is_enabled </span><span class="keyword">= (bool)(</span><span class="default">$number </span><span class="keyword">&amp; </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'error_reporting'</span><span class="keyword">) );<br />    <br />    </span><span class="comment">// -- FATAL ERROR<br />    // throw an Error Exception, to be handled by whatever Exception handling logic is available in this context<br />    </span><span class="keyword">if( </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, array(</span><span class="default">E_USER_ERROR</span><span class="keyword">, </span><span class="default">E_RECOVERABLE_ERROR</span><span class="keyword">)) &amp;&amp; </span><span class="default">$error_is_enabled </span><span class="keyword">) {<br />        throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// -- NON-FATAL ERROR/WARNING/NOTICE<br />    // Log the error if it's enabled, otherwise just ignore it<br />    </span><span class="keyword">else if( </span><span class="default">$error_is_enabled </span><span class="keyword">) {<br />        </span><span class="default">error_log</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// Make sure this ends up in $php_errormsg, if appropriate<br />    </span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;<br /></span><br />Setting this function as the error handler will result in ErrorExceptions only being thrown for E_USER_ERROR and E_RECOVERABLE_ERROR, while other enabled error types will simply get error_log()'ed.<br /><br />It's worth noting again that no matter what you do, "E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING, and most of E_STRICT" will never reach your custom error handler, and therefore will not be converted into ErrorExceptions.  Plan accordingly.</span></code></div>
  </div>
 </div>
  <div class="note" id="95072">  <div class="votes">
    <div id="Vu95072">
    <a href="/manual/vote-note.php?id=95072&amp;page=class.errorexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95072">
    <a href="/manual/vote-note.php?id=95072&amp;page=class.errorexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95072" title="61% like this...">
    15
    </div>
  </div>
  <a href="#95072" class="name">
  <strong class="user"><em>randallgirard at hotmail dot com</em></strong></a><a class="genanchor" href="#95072"> &para;</a><div class="date" title="2009-12-11 03:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95072">
<div class="phpcode"><code><span class="html">E_USER_WARNING, E_USER_NOTICE, and any other non-terminating error codes, are useless and act like E_USER_ERROR (which terminate) when you combine a custom ERROR_HANDLER with ErrorException and do not CATCH the error. There is NO way to return execution to the parent scope in the EXCEPTION_HANDLER.<br /><br /><span class="default">&lt;?php<br />    <br />    error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'DEBUG'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'LINEBREAK'</span><span class="keyword">, </span><span class="string">"\r\n"</span><span class="keyword">);<br />    <br />    </span><span class="default">error</span><span class="keyword">::</span><span class="default">initiate</span><span class="keyword">(</span><span class="string">'./error_backtrace.log'</span><span class="keyword">);<br />    <br />    try<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"First error"</span><span class="keyword">, </span><span class="default">E_USER_NOTICE</span><span class="keyword">);<br />    catch ( </span><span class="default">ErrorException $e </span><span class="keyword">)<br />        print(</span><span class="string">"Caught the error: "</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;\r\n" </span><span class="keyword">);<br />    <br />    </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"This event WILL fire"</span><span class="keyword">, </span><span class="default">E_USER_NOTICE</span><span class="keyword">);<br />    <br />    </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"This event will NOT fire"</span><span class="keyword">, </span><span class="default">E_USER_NOTICE</span><span class="keyword">);<br />    <br />    abstract class </span><span class="default">error </span><span class="keyword">{<br />        <br />        public static </span><span class="default">$LIST </span><span class="keyword">= array();<br />        <br />        private function </span><span class="default">__construct</span><span class="keyword">() {}<br />        <br />        public static function </span><span class="default">initiate</span><span class="keyword">( </span><span class="default">$log </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">) {<br />            </span><span class="default">set_error_handler</span><span class="keyword">( </span><span class="string">'error::err_handler' </span><span class="keyword">);<br />            </span><span class="default">set_exception_handler</span><span class="keyword">( </span><span class="string">'error::exc_handler' </span><span class="keyword">);<br />            if ( </span><span class="default">$log </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">) {<br />                if ( ! </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'log_errors'</span><span class="keyword">) )<br />                    </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'log_errors'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />                if ( ! </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'error_log'</span><span class="keyword">) )<br />                    </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'error_log'</span><span class="keyword">, </span><span class="default">$log</span><span class="keyword">);<br />            }<br />        }<br />        <br />        public static function </span><span class="default">err_handler</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">, </span><span class="default">$errcontext</span><span class="keyword">) {<br />            </span><span class="default">$l </span><span class="keyword">= </span><span class="default">error_reporting</span><span class="keyword">();<br />            if ( </span><span class="default">$l </span><span class="keyword">&amp; </span><span class="default">$errno </span><span class="keyword">) {<br />                <br />                </span><span class="default">$exit </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                switch ( </span><span class="default">$errno </span><span class="keyword">) {<br />                    case </span><span class="default">E_USER_ERROR</span><span class="keyword">:<br />                        </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'Fatal Error'</span><span class="keyword">;<br />                        </span><span class="default">$exit </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                    break;<br />                    case </span><span class="default">E_USER_WARNING</span><span class="keyword">:<br />                    case </span><span class="default">E_WARNING</span><span class="keyword">:<br />                        </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'Warning'</span><span class="keyword">;<br />                    break;<br />                    case </span><span class="default">E_USER_NOTICE</span><span class="keyword">:<br />                    case </span><span class="default">E_NOTICE</span><span class="keyword">:<br />                    case @</span><span class="default">E_STRICT</span><span class="keyword">:<br />                        </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'Notice'</span><span class="keyword">;<br />                    break;<br />                    case @</span><span class="default">E_RECOVERABLE_ERROR</span><span class="keyword">:<br />                        </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'Catchable'</span><span class="keyword">;<br />                    break;<br />                    default:<br />                        </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'Unknown Error'</span><span class="keyword">;<br />                        </span><span class="default">$exit </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                    break;<br />                }<br />                <br />                </span><span class="default">$exception </span><span class="keyword">= new </span><span class="default">\ErrorException</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">.</span><span class="string">': '</span><span class="keyword">.</span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">);<br />                <br />                if ( </span><span class="default">$exit </span><span class="keyword">) {<br />                    </span><span class="default">exc_handler</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">);<br />                    exit();<br />                }<br />                else<br />                    throw </span><span class="default">$exception</span><span class="keyword">;<br />            }<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        <br />        function </span><span class="default">exc_handler</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">) {<br />            </span><span class="default">$log </span><span class="keyword">= </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"\n" </span><span class="keyword">. </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">() . </span><span class="default">LINEBREAK</span><span class="keyword">;<br />            if ( </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'log_errors'</span><span class="keyword">) )<br />                </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$log</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />            print(</span><span class="string">"Unhandled Exception" </span><span class="keyword">. (</span><span class="default">DEBUG </span><span class="keyword">? </span><span class="string">" - </span><span class="default">$log</span><span class="string">" </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">));<br />        }<br />        <br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89132">  <div class="votes">
    <div id="Vu89132">
    <a href="/manual/vote-note.php?id=89132&amp;page=class.errorexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89132">
    <a href="/manual/vote-note.php?id=89132&amp;page=class.errorexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89132" title="58% like this...">
    7
    </div>
  </div>
  <a href="#89132" class="name">
  <strong class="user"><em>luke at cywh dot com</em></strong></a><a class="genanchor" href="#89132"> &para;</a><div class="date" title="2009-02-23 11:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89132">
<div class="phpcode"><code><span class="html">To add to the comments made by chris AT cmbuckley DOT co DOT uk about the ErrorException problem with args:<br /><br />I noticed that the problem is in the ErrorException class itself, not the Exception class. When using just the exception class, it's no longer an issue. Besides the args problem, the only difference between Exception and ErrorException in the stack trace is that the args are left out of the error handler exception function. I'm not sure if this was on purpose or not, but it shouldn't hurt to show this information anyway.<br /><br />So instead of using this broken extended class, you can ignore it and make your own extended class and avoid the problem all together:<br /><br /><span class="default">&lt;?php<br /><br />header</span><span class="keyword">(</span><span class="string">'Content-Type: text/plain'</span><span class="keyword">);<br /><br />class </span><span class="default">ErrorHandler </span><span class="keyword">extends </span><span class="default">Exception </span><span class="keyword">{<br />    protected </span><span class="default">$severity</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">, </span><span class="default">$severity</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$lineno</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">message </span><span class="keyword">= </span><span class="default">$message</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">code </span><span class="keyword">= </span><span class="default">$code</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">severity </span><span class="keyword">= </span><span class="default">$severity</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file </span><span class="keyword">= </span><span class="default">$filename</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">line </span><span class="keyword">= </span><span class="default">$lineno</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">getSeverity</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">severity</span><span class="keyword">;<br />    }<br />}<br /><br />function </span><span class="default">exception_error_handler</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline </span><span class="keyword">) {<br />    throw new </span><span class="default">ErrorHandler</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">);<br />}<br /><br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"exception_error_handler"</span><span class="keyword">, </span><span class="default">E_ALL</span><span class="keyword">);<br /><br />function </span><span class="default">A</span><span class="keyword">() {<br />    </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">; </span><span class="comment">// Purposely cause error<br /></span><span class="keyword">}<br /><br />function </span><span class="default">B</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {<br />    </span><span class="default">A</span><span class="keyword">();<br />}<br /><br />try {<br />    </span><span class="default">B</span><span class="keyword">(</span><span class="string">'foobar'</span><span class="keyword">);<br />} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTrace</span><span class="keyword">());<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The only thing I wish I could do was remove the entry for the error handler function because it's quite irrelevant. Maybe that's what they were trying to do with the ErrorException class? Either way, you can't change it because the trace functions are final, and the variable is private.</span></code></div>
  </div>
 </div>
  <div class="note" id="126619">  <div class="votes">
    <div id="Vu126619">
    <a href="/manual/vote-note.php?id=126619&amp;page=class.errorexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126619">
    <a href="/manual/vote-note.php?id=126619&amp;page=class.errorexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126619" title="57% like this...">
    3
    </div>
  </div>
  <a href="#126619" class="name">
  <strong class="user"><em>Christopher Marshall</em></strong></a><a class="genanchor" href="#126619"> &para;</a><div class="date" title="2021-11-16 03:06"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126619">
<div class="phpcode"><code><span class="html">Going on further from the point made by  triplepoint at gmail dot com:<br /><br />I'm using PHP 7.4.0 and trying to introduce error handling, exception handling and fatal exception handling into my application. A lot of the info all over the internet is now out of date in regards to handling errors with the new changes in PHP 7 and 8, which makes it difficult at the best of times to understand everything.<br /><br />However what I've found is that by using register_shutdown_function to handle fatal exceptions, it works as expected. set_exception_handler also works perfectly in conjunction. The issue comes when you use set_error_handler as well, and you trigger a custom error (for example using trigger_error) - even if you're using E_ERROR or E_USER_ERROR.<br /><br />This is because PHP is trying to handle the error before it shuts down and before the register_shutdown_function is actually involved. So it's very important to be mindful of this if you're using different methods for exceptions, errors and fatal exceptions. You will need to specifically catch the error like before and return out of your error handling function for the fatal exception handler to kick in properly.<br /><br />You're welcome .....<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * We handle basic errors differently to everything else<br />     */<br />    </span><span class="keyword">public static function </span><span class="default">errorHandler</span><span class="keyword">(</span><span class="default">$errStatus</span><span class="keyword">, </span><span class="default">$errMsg </span><span class="keyword">= </span><span class="string">'Unknown error'</span><span class="keyword">, </span><span class="default">$errFile </span><span class="keyword">= </span><span class="string">'unknown'</span><span class="keyword">, </span><span class="default">$errLine </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="comment">/**<br />         * Because we're using set_error_handler, PHP tries to be<br />         * clever and routes fatal errors and other "errors" <br />         * (i.e. trigger_error) here before it goes to <br />         * register_shutdown_function, so we need to be sure these<br />         * are caught and dealt with in the correct way<br />         *<br />         * @See <a href="https://www.php.net/manual/en/class.errorexception.php#95415" rel="nofollow" target="_blank">https://www.php.net/manual/en/class.errorexception.php#95415</a><br />         */<br />        </span><span class="keyword">if (</span><span class="default">\in_array</span><span class="keyword">(</span><span class="default">$errStatus</span><span class="keyword">, [</span><span class="default">E_ERROR</span><span class="keyword">, </span><span class="default">E_PARSE</span><span class="keyword">, </span><span class="default">E_CORE_ERROR</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">, </span><span class="default">E_ERROR</span><span class="keyword">]))<br />        {<br />            return;<br />        }<br /><br />        </span><span class="comment">/* Handle everything else however you want */<br />    </span><span class="keyword">}</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.errorexception&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.errorexception.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.exceptions.php">Predefined Exceptions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.exception.php" title="Exception">Exception</a>
                        </li>
                                                <li class="current">
                            <a href="class.errorexception.php" title="ErrorException">ErrorException</a>
                        </li>
                                                <li class="">
                            <a href="class.closedgeneratorexception.php" title="ClosedGeneratorException">ClosedGeneratorException</a>
                        </li>
                                                <li class="">
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
