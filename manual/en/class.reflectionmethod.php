<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionMethod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.reflectionmethod.php">
 <link rel="shorturl" href="https://www.php.net/reflectionmethod">
 <link rel="alternate" href="https://www.php.net/reflectionmethod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.reflection.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionfunctionabstract.tostring.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionmethod.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.reflectionmethod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.reflectionmethod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.reflectionmethod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.reflectionmethod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.reflectionmethod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.reflectionmethod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.reflectionmethod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.reflectionmethod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.reflectionmethod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.reflectionmethod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.reflectionmethod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ReflectionMethod class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionMethod - Manual" />
<meta name="twitter:description" content="The ReflectionMethod class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionMethod - Manual" />
<meta itemprop="description" content="The ReflectionMethod class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ReflectionMethod class" />

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
        <a href="reflectionmethod.construct.php">
          ReflectionMethod::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionfunctionabstract.tostring.php">
          &laquo; ReflectionFunctionAbstract::__toString        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      </ul>
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
            <option value='en/class.reflectionmethod.php' selected="selected">English</option>
            <option value='de/class.reflectionmethod.php'>German</option>
            <option value='es/class.reflectionmethod.php'>Spanish</option>
            <option value='fr/class.reflectionmethod.php'>French</option>
            <option value='it/class.reflectionmethod.php'>Italian</option>
            <option value='ja/class.reflectionmethod.php'>Japanese</option>
            <option value='pt_BR/class.reflectionmethod.php'>Brazilian Portuguese</option>
            <option value='ru/class.reflectionmethod.php'>Russian</option>
            <option value='tr/class.reflectionmethod.php'>Turkish</option>
            <option value='uk/class.reflectionmethod.php'>Ukrainian</option>
            <option value='zh/class.reflectionmethod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.reflectionmethod" class="reference">

 <h1 class="title">The ReflectionMethod class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="reflectionmethod.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">ReflectionMethod</strong></span> class reports
    information about a method.
   </p>
  </div>


  <div class="section" id="reflectionmethod.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ReflectionMethod</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.reflectionfunctionabstract.php" class="classname">ReflectionFunctionAbstract</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionmethod.php#reflectionmethod.constants.is-static"><var class="varname">IS_STATIC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionmethod.php#reflectionmethod.constants.is-public"><var class="varname">IS_PUBLIC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionmethod.php#reflectionmethod.constants.is-protected"><var class="varname">IS_PROTECTED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionmethod.php#reflectionmethod.constants.is-private"><var class="varname">IS_PRIVATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionmethod.php#reflectionmethod.constants.is-abstract"><var class="varname">IS_ABSTRACT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionmethod.php#reflectionmethod.constants.is-final"><var class="varname">IS_FINAL</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.reflectionmethod.php#reflectionmethod.props.class">$<var class="varname">class</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.reflectionfunctionabstract.php#reflectionfunctionabstract.props.name">$<var class="varname">name</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$objectOrMethod</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$method</code></span>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$classMethod</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="reflectionmethod.createfrommethodname.php" class="methodname">createFromMethodName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$method</code></span>): <span class="type">static</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="reflectionmethod.export.php" class="methodname">export</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$return</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.getclosure.php" class="methodname">getClosure</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$object</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.getdeclaringclass.php" class="methodname">getDeclaringClass</a></span>(): <span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.getmodifiers.php" class="methodname">getModifiers</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.getprototype.php" class="methodname">getPrototype</a></span>(): <span class="type"><a href="class.reflectionmethod.php" class="type ReflectionMethod">ReflectionMethod</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.hasprototype.php" class="methodname">hasPrototype</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.invoke.php" class="methodname">invoke</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$args</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.invokeargs.php" class="methodname">invokeArgs</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$args</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.isabstract.php" class="methodname">isAbstract</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.isconstructor.php" class="methodname">isConstructor</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.isdestructor.php" class="methodname">isDestructor</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.isfinal.php" class="methodname">isFinal</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.isprivate.php" class="methodname">isPrivate</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.isprotected.php" class="methodname">isProtected</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.ispublic.php" class="methodname">isPublic</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.setaccessible.php" class="methodname">setAccessible</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$accessible</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionmethod.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname"><a href="reflectionfunctionabstract.clone.php" class="methodname">ReflectionFunctionAbstract::__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getattributes.php" class="methodname">ReflectionFunctionAbstract::getAttributes</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getclosurecalledclass.php" class="methodname">ReflectionFunctionAbstract::getClosureCalledClass</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getclosurescopeclass.php" class="methodname">ReflectionFunctionAbstract::getClosureScopeClass</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getclosurethis.php" class="methodname">ReflectionFunctionAbstract::getClosureThis</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getclosureusedvariables.php" class="methodname">ReflectionFunctionAbstract::getClosureUsedVariables</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getdoccomment.php" class="methodname">ReflectionFunctionAbstract::getDocComment</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getendline.php" class="methodname">ReflectionFunctionAbstract::getEndLine</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getextension.php" class="methodname">ReflectionFunctionAbstract::getExtension</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionextension.php" class="type ReflectionExtension">ReflectionExtension</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getextensionname.php" class="methodname">ReflectionFunctionAbstract::getExtensionName</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getfilename.php" class="methodname">ReflectionFunctionAbstract::getFileName</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getname.php" class="methodname">ReflectionFunctionAbstract::getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getnamespacename.php" class="methodname">ReflectionFunctionAbstract::getNamespaceName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getnumberofparameters.php" class="methodname">ReflectionFunctionAbstract::getNumberOfParameters</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getnumberofrequiredparameters.php" class="methodname">ReflectionFunctionAbstract::getNumberOfRequiredParameters</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getparameters.php" class="methodname">ReflectionFunctionAbstract::getParameters</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getreturntype.php" class="methodname">ReflectionFunctionAbstract::getReturnType</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectiontype.php" class="type ReflectionType">ReflectionType</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getshortname.php" class="methodname">ReflectionFunctionAbstract::getShortName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getstartline.php" class="methodname">ReflectionFunctionAbstract::getStartLine</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.getstaticvariables.php" class="methodname">ReflectionFunctionAbstract::getStaticVariables</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.gettentativereturntype.php" class="methodname">ReflectionFunctionAbstract::getTentativeReturnType</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectiontype.php" class="type ReflectionType">ReflectionType</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.hasreturntype.php" class="methodname">ReflectionFunctionAbstract::hasReturnType</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.hastentativereturntype.php" class="methodname">ReflectionFunctionAbstract::hasTentativeReturnType</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.innamespace.php" class="methodname">ReflectionFunctionAbstract::inNamespace</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.isclosure.php" class="methodname">ReflectionFunctionAbstract::isClosure</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.isdeprecated.php" class="methodname">ReflectionFunctionAbstract::isDeprecated</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.isgenerator.php" class="methodname">ReflectionFunctionAbstract::isGenerator</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.isinternal.php" class="methodname">ReflectionFunctionAbstract::isInternal</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectiofunctionabstract.isstatic.php" class="methodname">ReflectionFunctionAbstract::isStatic</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.isuserdefined.php" class="methodname">ReflectionFunctionAbstract::isUserDefined</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.isvariadic.php" class="methodname">ReflectionFunctionAbstract::isVariadic</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.returnsreference.php" class="methodname">ReflectionFunctionAbstract::returnsReference</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">abstract</span> <span class="modifier">public</span> <span class="methodname"><a href="reflectionfunctionabstract.tostring.php" class="methodname">ReflectionFunctionAbstract::__toString</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>


  </div>

  

  <div class="section" id="reflectionmethod.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="reflectionmethod.props.name"><var class="varname">name</var></dt>
     <dd>
      <p class="para">Method name</p>
     </dd>
    
    
     <dt id="reflectionmethod.props.class"><var class="varname">class</var></dt>
     <dd>
      <p class="para">Class name</p>
     </dd>
    
   </dl>
  </div>




  <div class="section" id="reflectionmethod.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="reflectionmethod.constants.modifiers">
    <h2 class="title">ReflectionMethod Modifiers</h2>
    <dl>

     
      <dt id="reflectionmethod.constants.is-static">
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-static">ReflectionMethod::IS_STATIC</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates that the method is static.
        Prior to PHP 7.4.0, the value was <code class="literal">1</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionmethod.constants.is-public">
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-public">ReflectionMethod::IS_PUBLIC</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates that the method is public.
        Prior to PHP 7.4.0, the value was <code class="literal">256</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionmethod.constants.is-protected">
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-protected">ReflectionMethod::IS_PROTECTED</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates that the method is protected.
        Prior to PHP 7.4.0, the value was <code class="literal">512</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionmethod.constants.is-private">
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-private">ReflectionMethod::IS_PRIVATE</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates that the method is private.
        Prior to PHP 7.4.0, the value was <code class="literal">1024</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionmethod.constants.is-abstract">
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-abstract">ReflectionMethod::IS_ABSTRACT</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates that the method is abstract.
        Prior to PHP 7.4.0, the value was <code class="literal">2</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionmethod.constants.is-final">
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-final">ReflectionMethod::IS_FINAL</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates that the method is final.
        Prior to PHP 7.4.0, the value was <code class="literal">4</code>.
       </p>
      </dd>
     

    </dl>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      The values of these constants may change between PHP versions.
      It is recommended to always use the constants
      and not rely on the values directly.
     </p>
    </p></blockquote>
   </div>
  </div>


  <div class="section">
   <h2 class="title">Changelog</h2>
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.4.0</td>
       <td>
        The class constants are now typed.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="methodname"><a href="reflectionmethod.export.php" class="methodname">ReflectionMethod::export()</a></span> was removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>
 </div>

 
































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="reflectionmethod.construct.php">ReflectionMethod::__construct</a> — Constructs a ReflectionMethod</li><li><a href="reflectionmethod.createfrommethodname.php">ReflectionMethod::createFromMethodName</a> — Creates a new ReflectionMethod</li><li><a href="reflectionmethod.export.php">ReflectionMethod::export</a> — Export a reflection method</li><li><a href="reflectionmethod.getclosure.php">ReflectionMethod::getClosure</a> — Returns a dynamically created closure for the method</li><li><a href="reflectionmethod.getdeclaringclass.php">ReflectionMethod::getDeclaringClass</a> — Gets declaring class for the reflected method</li><li><a href="reflectionmethod.getmodifiers.php">ReflectionMethod::getModifiers</a> — Gets the method modifiers</li><li><a href="reflectionmethod.getprototype.php">ReflectionMethod::getPrototype</a> — Gets the method prototype (if there is one)</li><li><a href="reflectionmethod.hasprototype.php">ReflectionMethod::hasPrototype</a> — Returns whether a method has a prototype</li><li><a href="reflectionmethod.invoke.php">ReflectionMethod::invoke</a> — Invoke</li><li><a href="reflectionmethod.invokeargs.php">ReflectionMethod::invokeArgs</a> — Invoke args</li><li><a href="reflectionmethod.isabstract.php">ReflectionMethod::isAbstract</a> — Checks if method is abstract</li><li><a href="reflectionmethod.isconstructor.php">ReflectionMethod::isConstructor</a> — Checks if method is a constructor</li><li><a href="reflectionmethod.isdestructor.php">ReflectionMethod::isDestructor</a> — Checks if method is a destructor</li><li><a href="reflectionmethod.isfinal.php">ReflectionMethod::isFinal</a> — Checks if method is final</li><li><a href="reflectionmethod.isprivate.php">ReflectionMethod::isPrivate</a> — Checks if method is private</li><li><a href="reflectionmethod.isprotected.php">ReflectionMethod::isProtected</a> — Checks if method is protected</li><li><a href="reflectionmethod.ispublic.php">ReflectionMethod::isPublic</a> — Checks if method is public</li><li><a href="reflectionmethod.setaccessible.php">ReflectionMethod::setAccessible</a> — Set method accessibility</li><li><a href="reflectionmethod.tostring.php">ReflectionMethod::__toString</a> — Returns the string representation of the Reflection method object</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionmethod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.reflectionmethod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.reflectionmethod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionmethod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103236">  <div class="votes">
    <div id="Vu103236">
    <a href="/manual/vote-note.php?id=103236&amp;page=class.reflectionmethod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103236">
    <a href="/manual/vote-note.php?id=103236&amp;page=class.reflectionmethod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103236" title="72% like this...">
    13
    </div>
  </div>
  <a href="#103236" class="name">
  <strong class="user"><em>webseiten dot designer at googlemail dot com</em></strong></a><a class="genanchor" href="#103236"> &para;</a><div class="date" title="2011-04-02 11:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103236">
<div class="phpcode"><code><span class="html">Note that the public member $class contains the name of the class in which the method has been defined:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{public function </span><span class="default">__construct</span><span class="keyword">() {}}<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{}<br /><br /></span><span class="default">$method </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'__construct'</span><span class="keyword">);<br />echo </span><span class="default">$method</span><span class="keyword">-&gt;</span><span class="default">class</span><span class="keyword">; </span><span class="comment">// prints 'A'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125484">  <div class="votes">
    <div id="Vu125484">
    <a href="/manual/vote-note.php?id=125484&amp;page=class.reflectionmethod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125484">
    <a href="/manual/vote-note.php?id=125484&amp;page=class.reflectionmethod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125484" title="76% like this...">
    9
    </div>
  </div>
  <a href="#125484" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125484"> &para;</a><div class="date" title="2020-11-02 10:15"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125484">
<div class="phpcode"><code><span class="html">We can make a "Automatic dependenci injector" in classes when her constructors depends other classes (with type hint).<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Dependence1 </span><span class="keyword">{<br />    function </span><span class="default">foo</span><span class="keyword">() {<br />        echo </span><span class="string">"foo"</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Dependence2 </span><span class="keyword">{<br />    function </span><span class="default">foo2</span><span class="keyword">() {<br />        echo </span><span class="string">"foo2"</span><span class="keyword">;<br />    }<br />}<br /><br />final class </span><span class="default">myClass<br /></span><span class="keyword">{<br />    private </span><span class="default">$dep1</span><span class="keyword">;<br />    private </span><span class="default">$dep2</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(<br />        </span><span class="default">Dependence1 $dependence1</span><span class="keyword">, <br />        </span><span class="default">Dependence2 $dependence2<br />    </span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dep1 </span><span class="keyword">= </span><span class="default">$dependence1</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dep2 </span><span class="keyword">= </span><span class="default">$dependence2</span><span class="keyword">;        <br />    }<br />    <br />}<br /><br /></span><span class="comment">// Automatic dependence injection (CLASSES)<br /><br /></span><span class="default">$constructor </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="default">myClass</span><span class="keyword">::class, </span><span class="string">'__construct'</span><span class="keyword">);<br /></span><span class="default">$parameters </span><span class="keyword">= </span><span class="default">$constructor</span><span class="keyword">-&gt;</span><span class="default">getParameters</span><span class="keyword">();<br /><br /></span><span class="default">$dependences </span><span class="keyword">= [];<br />foreach (</span><span class="default">$parameters </span><span class="keyword">as </span><span class="default">$parameter</span><span class="keyword">) {<br />    </span><span class="default">$dependenceClass </span><span class="keyword">= (string) </span><span class="default">$parameter</span><span class="keyword">-&gt;</span><span class="default">getType</span><span class="keyword">();<br />    </span><span class="default">$dependences</span><span class="keyword">[] = new </span><span class="default">$dependenceClass</span><span class="keyword">();<br />}<br /><br /></span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">myClass</span><span class="keyword">(...</span><span class="default">$dependences</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$instance</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Results in: <br /><br />object(myClass)#6 (2) {<br />  ["dep1":"myClass":private]=&gt;<br />  object(Dependence1)#4 (0) {<br />  }<br />  ["dep2":"myClass":private]=&gt;<br />  object(Dependence2)#5 (0) {<br />  }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.reflectionmethod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionmethod.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.reflection.php">Reflection</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.reflection.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="reflection.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="reflection.extending.php" title="Extending">Extending</a>
                        </li>
                                                <li class="">
                            <a href="class.reflection.php" title="Reflection">Reflection</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionclass.php" title="ReflectionClass">ReflectionClass</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionclassconstant.php" title="ReflectionClassConstant">ReflectionClassConstant</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionconstant.php" title="ReflectionConstant">ReflectionConstant</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenum.php" title="ReflectionEnum">ReflectionEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenumunitcase.php" title="ReflectionEnumUnitCase">ReflectionEnumUnitCase</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenumbackedcase.php" title="ReflectionEnumBackedCase">ReflectionEnumBackedCase</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionzendextension.php" title="ReflectionZendExtension">ReflectionZendExtension</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionextension.php" title="ReflectionExtension">ReflectionExtension</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfunction.php" title="ReflectionFunction">ReflectionFunction</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfunctionabstract.php" title="ReflectionFunctionAbstract">ReflectionFunctionAbstract</a>
                        </li>
                                                <li class="current">
                            <a href="class.reflectionmethod.php" title="ReflectionMethod">ReflectionMethod</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionnamedtype.php" title="ReflectionNamedType">ReflectionNamedType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionobject.php" title="ReflectionObject">ReflectionObject</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionparameter.php" title="ReflectionParameter">ReflectionParameter</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionproperty.php" title="ReflectionProperty">ReflectionProperty</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectiontype.php" title="ReflectionType">ReflectionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionuniontype.php" title="ReflectionUnionType">ReflectionUnionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectiongenerator.php" title="ReflectionGenerator">ReflectionGenerator</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfiber.php" title="ReflectionFiber">ReflectionFiber</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionintersectiontype.php" title="ReflectionIntersectionType">ReflectionIntersectionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionreference.php" title="ReflectionReference">ReflectionReference</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionattribute.php" title="ReflectionAttribute">ReflectionAttribute</a>
                        </li>
                                                <li class="">
                            <a href="class.reflector.php" title="Reflector">Reflector</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionexception.php" title="ReflectionException">ReflectionException</a>
                        </li>
                                                <li class="">
                            <a href="enum.propertyhooktype.php" title="PropertyHookType">PropertyHookType</a>
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
