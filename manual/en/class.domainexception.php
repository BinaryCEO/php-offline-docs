<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DomainException - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.domainexception.php">
 <link rel="shorturl" href="https://www.php.net/domainexception">
 <link rel="alternate" href="https://www.php.net/domainexception" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.exceptions.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.badmethodcallexception.php">
 <link rel="next" href="https://www.php.net/manual/en/class.invalidargumentexception.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.domainexception.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.domainexception.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.domainexception.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.domainexception.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.domainexception.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.domainexception.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.domainexception.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.domainexception.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.domainexception.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.domainexception.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.domainexception.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DomainException class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DomainException - Manual" />
<meta name="twitter:description" content="The DomainException class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DomainException - Manual" />
<meta itemprop="description" content="The DomainException class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DomainException class" />

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
        <a href="class.invalidargumentexception.php">
          InvalidArgumentException &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.badmethodcallexception.php">
          &laquo; BadMethodCallException        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.exceptions.php'>Exceptions</a></li>      </ul>
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
            <option value='en/class.domainexception.php' selected="selected">English</option>
            <option value='de/class.domainexception.php'>German</option>
            <option value='es/class.domainexception.php'>Spanish</option>
            <option value='fr/class.domainexception.php'>French</option>
            <option value='it/class.domainexception.php'>Italian</option>
            <option value='ja/class.domainexception.php'>Japanese</option>
            <option value='pt_BR/class.domainexception.php'>Brazilian Portuguese</option>
            <option value='ru/class.domainexception.php'>Russian</option>
            <option value='tr/class.domainexception.php'>Turkish</option>
            <option value='uk/class.domainexception.php'>Ukrainian</option>
            <option value='zh/class.domainexception.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.domainexception" class="reference">
 <h1 class="title">The DomainException class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="domainexception.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Exception thrown if a value does not adhere to a defined valid data domain.
   </p>
  </div>

 
  <div class="section" id="domainexception.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="exceptionname">DomainException</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.logicexception.php" class="classname">LogicException</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
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


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="exception.construct.php" class="methodname">Exception::__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$code</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span></span> <code class="parameter">$previous</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

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
 
 </div>
 
 
 
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/domainexception.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.domainexception%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.domainexception&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domainexception.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106241">  <div class="votes">
    <div id="Vu106241">
    <a href="/manual/vote-note.php?id=106241&amp;page=class.domainexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106241">
    <a href="/manual/vote-note.php?id=106241&amp;page=class.domainexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106241" title="72% like this...">
    35
    </div>
  </div>
  <a href="#106241" class="name">
  <strong class="user"><em>mateusz dot charytoniuk at gmail dot com</em></strong></a><a class="genanchor" href="#106241"> &para;</a><div class="date" title="2011-10-20 12:45"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106241">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">renderImage</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">, </span><span class="default">$imageType</span><span class="keyword">)<br />{<br />  switch (</span><span class="default">$imageType</span><span class="keyword">) {<br />  case </span><span class="string">'jpg'</span><span class="keyword">:<br />  case </span><span class="string">'jpeg'</span><span class="keyword">:<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">);<br />    break;<br />  case </span><span class="string">'png'</span><span class="keyword">:<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">);<br />    break;<br />  default:<br />    throw new </span><span class="default">DomainException</span><span class="keyword">(</span><span class="string">'Unknown image type: ' </span><span class="keyword">. </span><span class="default">$imageType</span><span class="keyword">);<br />    break;<br />  }<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120395">  <div class="votes">
    <div id="Vu120395">
    <a href="/manual/vote-note.php?id=120395&amp;page=class.domainexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120395">
    <a href="/manual/vote-note.php?id=120395&amp;page=class.domainexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120395" title="72% like this...">
    17
    </div>
  </div>
  <a href="#120395" class="name">
  <strong class="user"><em>ja2016 at wir dot pl</em></strong></a><a class="genanchor" href="#120395"> &para;</a><div class="date" title="2016-12-31 05:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120395">
<div class="phpcode"><code><span class="html">I think this kind of exception is perfect to throw when expected the  type of parameter, value etc. is good, but its value is out of domain. Look at RangeException:<br />&gt;&gt;Exception thrown to indicate range errors during program execution. Normally this means there was an arithmetic error other than under/overflow. This is the runtime version of DomainException.&lt;&lt;<br />So, this kind of exception is designed for logic error<br /><br />When datatype is wrong, the better way is throwing InvalidArgumentException. <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Here, use InvalidArgumentException<br /></span><span class="keyword">function </span><span class="default">media</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) {<br />    switch (</span><span class="default">$x</span><span class="keyword">) {<br />        case </span><span class="default">image</span><span class="keyword">:<br />            return </span><span class="string">'PNG'</span><span class="keyword">;<br />        break;<br />        case </span><span class="default">video</span><span class="keyword">:<br />            return </span><span class="string">'MP4'</span><span class="keyword">;<br />        break;<br />        default:<br />            throw new </span><span class="default">InvalidArgumentException </span><span class="keyword">(</span><span class="string">"Invalid media type!"</span><span class="keyword">);<br />    }<br />}</span><span class="default">?&gt;<br /></span>This is completly diffirent situation than this:<br /><span class="default">&lt;?php<br /></span><span class="comment">// Here, use DomainException<br /></span><span class="default">$object </span><span class="keyword">= new </span><span class="default">Library </span><span class="keyword">();<br />try {<br />    </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">allocate</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br />} catch (</span><span class="default">toFewMin $e</span><span class="keyword">) {<br />    throw new </span><span class="default">DomainException </span><span class="keyword">(</span><span class="string">"Minimal value to allocate is too high"</span><span class="keyword">).<br />}<br /></span><span class="default">?&gt;<br /></span>The simillar situation, but problem occurs during runtime:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">library </span><span class="keyword">{<br />    function </span><span class="default">allocate</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) {<br />        if (</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">1000</span><span class="keyword">)<br />            throw new </span><span class="default">RangeException </span><span class="keyword">(</span><span class="string">"Value is too low!"</span><span class="keyword">)<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>Summary: DomainException corresponds to RangeException and we should use them in simillar situations.  But first exception is designed to use when we are sure the problem is with our project, third-part elements etc. (simply: logical error), the second way is designed to use when we are sure the problem is with input data or environment (simply: runtime error).</span></code></div>
  </div>
 </div>
  <div class="note" id="115638">  <div class="votes">
    <div id="Vu115638">
    <a href="/manual/vote-note.php?id=115638&amp;page=class.domainexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115638">
    <a href="/manual/vote-note.php?id=115638&amp;page=class.domainexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115638" title="66% like this...">
    14
    </div>
  </div>
  <a href="#115638" class="name">
  <strong class="user"><em>chmielewski dot thomas at gmail dot com</em></strong></a><a class="genanchor" href="#115638"> &para;</a><div class="date" title="2014-08-29 10:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115638">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">divide</span><span class="keyword">(</span><span class="default">$divident</span><span class="keyword">, </span><span class="default">$divisor</span><span class="keyword">) {<br />    if(!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$divident</span><span class="keyword">) || !</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$divisor</span><span class="keyword">)) {<br />        throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="string">"Function accepts only numeric values"</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">$divisor </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />        throw new </span><span class="default">DomainException</span><span class="keyword">(</span><span class="string">"Divisor must not be zero"</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$divident </span><span class="keyword">/ </span><span class="default">$divisor</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121994">  <div class="votes">
    <div id="Vu121994">
    <a href="/manual/vote-note.php?id=121994&amp;page=class.domainexception&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121994">
    <a href="/manual/vote-note.php?id=121994&amp;page=class.domainexception&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121994" title="66% like this...">
    5
    </div>
  </div>
  <a href="#121994" class="name">
  <strong class="user"><em>Cruiser</em></strong></a><a class="genanchor" href="#121994"> &para;</a><div class="date" title="2017-12-07 10:02"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121994">
<div class="phpcode"><code><span class="html">Quote: "In data management and database analysis, a data domain refers to all the values which a data element may contain."<br /><br />Source: <a href="https://en.wikipedia.org/wiki/Data_domain" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Data_domain</a><br /><br />This exception has confused me a bit, DataDomainException, or DataTypeException may have been more descriptive.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.domainexception&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domainexception.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.exceptions.php">Exceptions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.badfunctioncallexception.php" title="BadFunctionCallException">BadFunctionCallException</a>
                        </li>
                                                <li class="">
                            <a href="class.badmethodcallexception.php" title="BadMethodCallException">BadMethodCallException</a>
                        </li>
                                                <li class="current">
                            <a href="class.domainexception.php" title="DomainException">DomainException</a>
                        </li>
                                                <li class="">
                            <a href="class.invalidargumentexception.php" title="InvalidArgumentException">InvalidArgumentException</a>
                        </li>
                                                <li class="">
                            <a href="class.lengthexception.php" title="LengthException">LengthException</a>
                        </li>
                                                <li class="">
                            <a href="class.logicexception.php" title="LogicException">LogicException</a>
                        </li>
                                                <li class="">
                            <a href="class.outofboundsexception.php" title="OutOfBoundsException">OutOfBoundsException</a>
                        </li>
                                                <li class="">
                            <a href="class.outofrangeexception.php" title="OutOfRangeException">OutOfRangeException</a>
                        </li>
                                                <li class="">
                            <a href="class.overflowexception.php" title="OverflowException">OverflowException</a>
                        </li>
                                                <li class="">
                            <a href="class.rangeexception.php" title="RangeException">RangeException</a>
                        </li>
                                                <li class="">
                            <a href="class.runtimeexception.php" title="RuntimeException">RuntimeException</a>
                        </li>
                                                <li class="">
                            <a href="class.underflowexception.php" title="UnderflowException">UnderflowException</a>
                        </li>
                                                <li class="">
                            <a href="class.unexpectedvalueexception.php" title="UnexpectedValueException">UnexpectedValueException</a>
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
