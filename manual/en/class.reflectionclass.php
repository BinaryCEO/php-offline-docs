<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionClass - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.reflectionclass.php">
 <link rel="shorturl" href="https://www.php.net/reflectionclass">
 <link rel="alternate" href="https://www.php.net/reflectionclass" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.reflection.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflection.getmodifiernames.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionclass.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.reflectionclass.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.reflectionclass.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.reflectionclass.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.reflectionclass.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.reflectionclass.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.reflectionclass.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.reflectionclass.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.reflectionclass.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.reflectionclass.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.reflectionclass.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.reflectionclass.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ReflectionClass class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionClass - Manual" />
<meta name="twitter:description" content="The ReflectionClass class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionClass - Manual" />
<meta itemprop="description" content="The ReflectionClass class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ReflectionClass class" />

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
        <a href="reflectionclass.construct.php">
          ReflectionClass::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflection.getmodifiernames.php">
          &laquo; Reflection::getModifierNames        </a>
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
            <option value='en/class.reflectionclass.php' selected="selected">English</option>
            <option value='de/class.reflectionclass.php'>German</option>
            <option value='es/class.reflectionclass.php'>Spanish</option>
            <option value='fr/class.reflectionclass.php'>French</option>
            <option value='it/class.reflectionclass.php'>Italian</option>
            <option value='ja/class.reflectionclass.php'>Japanese</option>
            <option value='pt_BR/class.reflectionclass.php'>Brazilian Portuguese</option>
            <option value='ru/class.reflectionclass.php'>Russian</option>
            <option value='tr/class.reflectionclass.php'>Turkish</option>
            <option value='uk/class.reflectionclass.php'>Ukrainian</option>
            <option value='zh/class.reflectionclass.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.reflectionclass" class="reference">

 <h1 class="title">The ReflectionClass class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="reflectionclass.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">ReflectionClass</strong></span> class reports
    information about a class.
   </p>
  </div>


  <div class="section" id="reflectionclass.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ReflectionClass</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.reflector.php" class="interfacename">Reflector</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionclass.php#reflectionclass.constants.is-implicit-abstract"><var class="varname">IS_IMPLICIT_ABSTRACT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionclass.php#reflectionclass.constants.is-explicit-abstract"><var class="varname">IS_EXPLICIT_ABSTRACT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionclass.php#reflectionclass.constants.is-final"><var class="varname">IS_FINAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionclass.php#reflectionclass.constants.is-readonly"><var class="varname">IS_READONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionclass.php#reflectionclass.constants.skip-initialization-on-serialize"><var class="varname">SKIP_INITIALIZATION_ON_SERIALIZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionclass.php#reflectionclass.constants.skip-destructor"><var class="varname">SKIP_DESTRUCTOR</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.reflectionclass.php#reflectionclass.props.name">$<var class="varname">name</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$objectOrClass</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="reflectionclass.export.php" class="methodname">export</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$argument</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$return</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getattributes.php" class="methodname">getAttributes</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getconstant.php" class="methodname">getConstant</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getconstants.php" class="methodname">getConstants</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getconstructor.php" class="methodname">getConstructor</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionmethod.php" class="type ReflectionMethod">ReflectionMethod</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getdefaultproperties.php" class="methodname">getDefaultProperties</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getdoccomment.php" class="methodname">getDocComment</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getendline.php" class="methodname">getEndLine</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getextension.php" class="methodname">getExtension</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionextension.php" class="type ReflectionExtension">ReflectionExtension</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getextensionname.php" class="methodname">getExtensionName</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getfilename.php" class="methodname">getFileName</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getinterfacenames.php" class="methodname">getInterfaceNames</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getinterfaces.php" class="methodname">getInterfaces</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getlazyinitializer.php" class="methodname">getLazyInitializer</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getmethod.php" class="methodname">getMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="class.reflectionmethod.php" class="type ReflectionMethod">ReflectionMethod</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getmethods.php" class="methodname">getMethods</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getmodifiers.php" class="methodname">getModifiers</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getname.php" class="methodname">getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getnamespacename.php" class="methodname">getNamespaceName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getparentclass.php" class="methodname">getParentClass</a></span>(): <span class="type"><span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getproperties.php" class="methodname">getProperties</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getproperty.php" class="methodname">getProperty</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="class.reflectionproperty.php" class="type ReflectionProperty">ReflectionProperty</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getreflectionconstant.php" class="methodname">getReflectionConstant</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><span class="type"><a href="class.reflectionclassconstant.php" class="type ReflectionClassConstant">ReflectionClassConstant</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getreflectionconstants.php" class="methodname">getReflectionConstants</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getshortname.php" class="methodname">getShortName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getstartline.php" class="methodname">getStartLine</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getstaticproperties.php" class="methodname">getStaticProperties</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.getstaticpropertyvalue.php" class="methodname">getStaticPropertyValue</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$def_value</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.gettraitaliases.php" class="methodname">getTraitAliases</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.gettraitnames.php" class="methodname">getTraitNames</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.gettraits.php" class="methodname">getTraits</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.hasconstant.php" class="methodname">hasConstant</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.hasmethod.php" class="methodname">hasMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.hasproperty.php" class="methodname">hasProperty</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.implementsinterface.php" class="methodname">implementsInterface</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$interface</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.initializelazyobject.php" class="methodname">initializeLazyObject</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.innamespace.php" class="methodname">inNamespace</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isabstract.php" class="methodname">isAbstract</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isanonymous.php" class="methodname">isAnonymous</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.iscloneable.php" class="methodname">isCloneable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isenum.php" class="methodname">isEnum</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isfinal.php" class="methodname">isFinal</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isinstance.php" class="methodname">isInstance</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isinstantiable.php" class="methodname">isInstantiable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isinterface.php" class="methodname">isInterface</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isinternal.php" class="methodname">isInternal</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isiterable.php" class="methodname">isIterable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isreadonly.php" class="methodname">isReadOnly</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.issubclassof.php" class="methodname">isSubclassOf</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.istrait.php" class="methodname">isTrait</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isuninitializedlazyobject.php" class="methodname">isUninitializedLazyObject</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.isuserdefined.php" class="methodname">isUserDefined</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.marklazyobjectasinitialized.php" class="methodname">markLazyObjectAsInitialized</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.newinstance.php" class="methodname">newInstance</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$args</code></span>): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.newinstanceargs.php" class="methodname">newInstanceArgs</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$args</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.newinstancewithoutconstructor.php" class="methodname">newInstanceWithoutConstructor</a></span>(): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.newlazyghost.php" class="methodname">newLazyGhost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$initializer</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.newlazyproxy.php" class="methodname">newLazyProxy</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$factory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.resetaslazyghost.php" class="methodname">resetAsLazyGhost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$initializer</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.resetaslazyproxy.php" class="methodname">resetAsLazyProxy</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$factory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.setstaticpropertyvalue.php" class="methodname">setStaticPropertyValue</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionclass.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>

  

  <div class="section" id="reflectionclass.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="reflectionclass.props.name"><var class="varname">name</var></dt>
     <dd>
      <p class="para">
       Name of the class. Read-only, throws
       <span class="classname"><a href="class.reflectionexception.php" class="classname">ReflectionException</a></span> in attempt to write.
      </p>
     </dd>
    
   </dl>
  </div>


  

  <div class="section" id="reflectionclass.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="reflectionclass.constants.modifiers">
    <h2 class="title">ReflectionClass Modifiers</h2>
    <dl>

     
      <dt id="reflectionclass.constants.is-implicit-abstract">
       <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.is-implicit-abstract">ReflectionClass::IS_IMPLICIT_ABSTRACT</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates the class is <a href="language.oop5.abstract.php" class="link">
        abstract</a> because it has some abstract methods.
       </p>
      </dd>
     

     
      <dt id="reflectionclass.constants.is-explicit-abstract">
       <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.is-explicit-abstract">ReflectionClass::IS_EXPLICIT_ABSTRACT</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates the class is <a href="language.oop5.abstract.php" class="link">
        abstract</a> because of its definition.
       </p>
      </dd>
     

     
      <dt id="reflectionclass.constants.is-final">
       <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.is-final">ReflectionClass::IS_FINAL</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates the class is <a href="language.oop5.final.php" class="link">final</a>.
       </p>
      </dd>
     

     
      <dt id="reflectionclass.constants.is-readonly">
       <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.is-readonly">ReflectionClass::IS_READONLY</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates the class is <a href="language.oop5.basic.php#language.oop5.basic.class.readonly" class="link">readonly</a>.
       </p>
      </dd>
     

     
      <dt id="reflectionclass.constants.skip-initialization-on-serialize">
       <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.skip-initialization-on-serialize">ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Indicates that <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> should not trigger
        initialization of a lazy object.
       </span>
      </dd>
     

     
      <dt id="reflectionclass.constants.skip-destructor">
       <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.skip-destructor">ReflectionClass::SKIP_DESTRUCTOR</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Indicates an object destructor should not be called when resetting it as
        lazy.
       </span>
      </dd>
     

    </dl>
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
        <span class="methodname"><a href="reflectionclass.export.php" class="methodname">ReflectionClass::export()</a></span> was removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>
</div>

 






























































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="reflectionclass.construct.php">ReflectionClass::__construct</a> — Constructs a ReflectionClass</li><li><a href="reflectionclass.export.php">ReflectionClass::export</a> — Exports a class</li><li><a href="reflectionclass.getattributes.php">ReflectionClass::getAttributes</a> — Gets Attributes</li><li><a href="reflectionclass.getconstant.php">ReflectionClass::getConstant</a> — Gets defined constant</li><li><a href="reflectionclass.getconstants.php">ReflectionClass::getConstants</a> — Gets constants</li><li><a href="reflectionclass.getconstructor.php">ReflectionClass::getConstructor</a> — Gets the constructor of the class</li><li><a href="reflectionclass.getdefaultproperties.php">ReflectionClass::getDefaultProperties</a> — Gets default properties</li><li><a href="reflectionclass.getdoccomment.php">ReflectionClass::getDocComment</a> — Gets doc comments</li><li><a href="reflectionclass.getendline.php">ReflectionClass::getEndLine</a> — Gets end line</li><li><a href="reflectionclass.getextension.php">ReflectionClass::getExtension</a> — Gets a ReflectionExtension object for the extension which defined the class</li><li><a href="reflectionclass.getextensionname.php">ReflectionClass::getExtensionName</a> — Gets the name of the extension which defined the class</li><li><a href="reflectionclass.getfilename.php">ReflectionClass::getFileName</a> — Gets the filename of the file in which the class has been defined</li><li><a href="reflectionclass.getinterfacenames.php">ReflectionClass::getInterfaceNames</a> — Gets the interface names</li><li><a href="reflectionclass.getinterfaces.php">ReflectionClass::getInterfaces</a> — Gets the interfaces</li><li><a href="reflectionclass.getlazyinitializer.php">ReflectionClass::getLazyInitializer</a> — Gets lazy initializer</li><li><a href="reflectionclass.getmethod.php">ReflectionClass::getMethod</a> — Gets a ReflectionMethod for a class method</li><li><a href="reflectionclass.getmethods.php">ReflectionClass::getMethods</a> — Gets an array of methods</li><li><a href="reflectionclass.getmodifiers.php">ReflectionClass::getModifiers</a> — Gets the class modifiers</li><li><a href="reflectionclass.getname.php">ReflectionClass::getName</a> — Gets class name</li><li><a href="reflectionclass.getnamespacename.php">ReflectionClass::getNamespaceName</a> — Gets namespace name</li><li><a href="reflectionclass.getparentclass.php">ReflectionClass::getParentClass</a> — Gets parent class</li><li><a href="reflectionclass.getproperties.php">ReflectionClass::getProperties</a> — Gets properties</li><li><a href="reflectionclass.getproperty.php">ReflectionClass::getProperty</a> — Gets a ReflectionProperty for a class's property</li><li><a href="reflectionclass.getreflectionconstant.php">ReflectionClass::getReflectionConstant</a> — Gets a ReflectionClassConstant for a class's constant</li><li><a href="reflectionclass.getreflectionconstants.php">ReflectionClass::getReflectionConstants</a> — Gets class constants</li><li><a href="reflectionclass.getshortname.php">ReflectionClass::getShortName</a> — Gets short name</li><li><a href="reflectionclass.getstartline.php">ReflectionClass::getStartLine</a> — Gets starting line number</li><li><a href="reflectionclass.getstaticproperties.php">ReflectionClass::getStaticProperties</a> — Gets static properties</li><li><a href="reflectionclass.getstaticpropertyvalue.php">ReflectionClass::getStaticPropertyValue</a> — Gets static property value</li><li><a href="reflectionclass.gettraitaliases.php">ReflectionClass::getTraitAliases</a> — Returns an array of trait aliases</li><li><a href="reflectionclass.gettraitnames.php">ReflectionClass::getTraitNames</a> — Returns an array of names of traits used by this class</li><li><a href="reflectionclass.gettraits.php">ReflectionClass::getTraits</a> — Returns an array of traits used by this class</li><li><a href="reflectionclass.hasconstant.php">ReflectionClass::hasConstant</a> — Checks if constant is defined</li><li><a href="reflectionclass.hasmethod.php">ReflectionClass::hasMethod</a> — Checks if method is defined</li><li><a href="reflectionclass.hasproperty.php">ReflectionClass::hasProperty</a> — Checks if property is defined</li><li><a href="reflectionclass.implementsinterface.php">ReflectionClass::implementsInterface</a> — Implements interface</li><li><a href="reflectionclass.initializelazyobject.php">ReflectionClass::initializeLazyObject</a> — Forces initialization of a lazy object</li><li><a href="reflectionclass.innamespace.php">ReflectionClass::inNamespace</a> — Checks if in namespace</li><li><a href="reflectionclass.isabstract.php">ReflectionClass::isAbstract</a> — Checks if class is abstract</li><li><a href="reflectionclass.isanonymous.php">ReflectionClass::isAnonymous</a> — Checks if class is anonymous</li><li><a href="reflectionclass.iscloneable.php">ReflectionClass::isCloneable</a> — Returns whether this class is cloneable</li><li><a href="reflectionclass.isenum.php">ReflectionClass::isEnum</a> — Returns whether this is an enum</li><li><a href="reflectionclass.isfinal.php">ReflectionClass::isFinal</a> — Checks if class is final</li><li><a href="reflectionclass.isinstance.php">ReflectionClass::isInstance</a> — Checks class for instance</li><li><a href="reflectionclass.isinstantiable.php">ReflectionClass::isInstantiable</a> — Checks if the class is instantiable</li><li><a href="reflectionclass.isinterface.php">ReflectionClass::isInterface</a> — Checks if the class is an interface</li><li><a href="reflectionclass.isinternal.php">ReflectionClass::isInternal</a> — Checks if class is defined internally by an extension, or the core</li><li><a href="reflectionclass.isiterable.php">ReflectionClass::isIterable</a> — Check whether this class is iterable</li><li><a href="reflectionclass.isiterateable.php">ReflectionClass::isIterateable</a> — Alias of ReflectionClass::isIterable</li><li><a href="reflectionclass.isreadonly.php">ReflectionClass::isReadOnly</a> — Checks if class is readonly</li><li><a href="reflectionclass.issubclassof.php">ReflectionClass::isSubclassOf</a> — Checks if a subclass</li><li><a href="reflectionclass.istrait.php">ReflectionClass::isTrait</a> — Returns whether this is a trait</li><li><a href="reflectionclass.isuninitializedlazyobject.php">ReflectionClass::isUninitializedLazyObject</a> — Checks if an object is lazy and uninitialized</li><li><a href="reflectionclass.isuserdefined.php">ReflectionClass::isUserDefined</a> — Checks if user defined</li><li><a href="reflectionclass.marklazyobjectasinitialized.php">ReflectionClass::markLazyObjectAsInitialized</a> — Marks a lazy object as initialized without calling the initializer or factory</li><li><a href="reflectionclass.newinstance.php">ReflectionClass::newInstance</a> — Creates a new class instance from given arguments</li><li><a href="reflectionclass.newinstanceargs.php">ReflectionClass::newInstanceArgs</a> — Creates a new class instance from given arguments</li><li><a href="reflectionclass.newinstancewithoutconstructor.php">ReflectionClass::newInstanceWithoutConstructor</a> — Creates a new class instance without invoking the constructor</li><li><a href="reflectionclass.newlazyghost.php">ReflectionClass::newLazyGhost</a> — Creates a new lazy ghost instance</li><li><a href="reflectionclass.newlazyproxy.php">ReflectionClass::newLazyProxy</a> — Creates a new lazy proxy instance</li><li><a href="reflectionclass.resetaslazyghost.php">ReflectionClass::resetAsLazyGhost</a> — Resets an object and marks it as lazy</li><li><a href="reflectionclass.resetaslazyproxy.php">ReflectionClass::resetAsLazyProxy</a> — Resets an object and marks it as lazy</li><li><a href="reflectionclass.setstaticpropertyvalue.php">ReflectionClass::setStaticPropertyValue</a> — Sets public static property value</li><li><a href="reflectionclass.tostring.php">ReflectionClass::__toString</a> — Returns the string representation of the ReflectionClass object</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionclass.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.reflectionclass%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.reflectionclass&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionclass.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89926">  <div class="votes">
    <div id="Vu89926">
    <a href="/manual/vote-note.php?id=89926&amp;page=class.reflectionclass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89926">
    <a href="/manual/vote-note.php?id=89926&amp;page=class.reflectionclass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89926" title="74% like this...">
    41
    </div>
  </div>
  <a href="#89926" class="name">
  <strong class="user"><em>danbettles at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#89926"> &para;</a><div class="date" title="2009-03-29 02:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89926">
<div class="phpcode"><code><span class="html">To reflect on a namespaced class in PHP 5.3, you must always specify the fully qualified name of the class - even if you've aliased the containing namespace using a "use" statement.
<br />
<br />So instead of:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">use </span><span class="default">App\Core </span><span class="keyword">as </span><span class="default">Core</span><span class="keyword">;
<br /></span><span class="default">$oReflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'Core\Singleton'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />You would type:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">use </span><span class="default">App\Core </span><span class="keyword">as </span><span class="default">Core</span><span class="keyword">;
<br /></span><span class="default">$oReflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'App\Core\Singleton'</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106472">  <div class="votes">
    <div id="Vu106472">
    <a href="/manual/vote-note.php?id=106472&amp;page=class.reflectionclass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106472">
    <a href="/manual/vote-note.php?id=106472&amp;page=class.reflectionclass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106472" title="69% like this...">
    26
    </div>
  </div>
  <a href="#106472" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#106472"> &para;</a><div class="date" title="2011-11-11 09:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106472">
<div class="phpcode"><code><span class="html">Unserialized reflection class cause error.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * abc
<br /> */
<br /></span><span class="keyword">class </span><span class="default">a</span><span class="keyword">{}
<br />
<br /></span><span class="default">$ref </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">);
<br /></span><span class="default">$ref </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">));
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">());
<br />
<br /></span><span class="comment">// object(ReflectionClass)#2 (1) {
<br />//   ["name"]=&gt;
<br />//   string(1) "a"
<br />// }
<br />// PHP Fatal error:  ReflectionClass::getDocComment(): Internal error: Failed to retrieve the reflection object
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112212">  <div class="votes">
    <div id="Vu112212">
    <a href="/manual/vote-note.php?id=112212&amp;page=class.reflectionclass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112212">
    <a href="/manual/vote-note.php?id=112212&amp;page=class.reflectionclass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112212" title="72% like this...">
    21
    </div>
  </div>
  <a href="#112212" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112212"> &para;</a><div class="date" title="2013-05-17 06:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112212">
<div class="phpcode"><code><span class="html">Reflecting an alias will give you a reflection of the resolved class.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">X </span><span class="keyword">{<br />    <br />}<br /><br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'X'</span><span class="keyword">,</span><span class="string">'Y'</span><span class="keyword">);<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">,</span><span class="string">'Z'</span><span class="keyword">);<br /></span><span class="default">$z </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'Z'</span><span class="keyword">);<br />echo </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(); </span><span class="comment">// X<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125728">  <div class="votes">
    <div id="Vu125728">
    <a href="/manual/vote-note.php?id=125728&amp;page=class.reflectionclass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125728">
    <a href="/manual/vote-note.php?id=125728&amp;page=class.reflectionclass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125728" title="72% like this...">
    5
    </div>
  </div>
  <a href="#125728" class="name">
  <strong class="user"><em>featherbits</em></strong></a><a class="genanchor" href="#125728"> &para;</a><div class="date" title="2021-01-27 04:10"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125728">
<div class="phpcode"><code><span class="html">In order to get class attributes look here (php8)<br /><a href="https://www.php.net/manual/en/language.attributes.reflection.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/language.attributes.reflection.php</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.reflectionclass&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionclass.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
