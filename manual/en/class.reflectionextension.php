<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionExtension - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.reflectionextension.php">
 <link rel="shorturl" href="https://www.php.net/reflectionextension">
 <link rel="alternate" href="https://www.php.net/reflectionextension" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.reflection.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionzendextension.tostring.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionextension.clone.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.reflectionextension.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.reflectionextension.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.reflectionextension.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.reflectionextension.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.reflectionextension.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.reflectionextension.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.reflectionextension.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.reflectionextension.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.reflectionextension.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.reflectionextension.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.reflectionextension.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ReflectionExtension class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionExtension - Manual" />
<meta name="twitter:description" content="The ReflectionExtension class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionExtension - Manual" />
<meta itemprop="description" content="The ReflectionExtension class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ReflectionExtension class" />

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
        <a href="reflectionextension.clone.php">
          ReflectionExtension::__clone &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionzendextension.tostring.php">
          &laquo; ReflectionZendExtension::__toString        </a>
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
            <option value='en/class.reflectionextension.php' selected="selected">English</option>
            <option value='de/class.reflectionextension.php'>German</option>
            <option value='es/class.reflectionextension.php'>Spanish</option>
            <option value='fr/class.reflectionextension.php'>French</option>
            <option value='it/class.reflectionextension.php'>Italian</option>
            <option value='ja/class.reflectionextension.php'>Japanese</option>
            <option value='pt_BR/class.reflectionextension.php'>Brazilian Portuguese</option>
            <option value='ru/class.reflectionextension.php'>Russian</option>
            <option value='tr/class.reflectionextension.php'>Turkish</option>
            <option value='uk/class.reflectionextension.php'>Ukrainian</option>
            <option value='zh/class.reflectionextension.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.reflectionextension" class="reference">

 <h1 class="title">The ReflectionExtension class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="reflectionextension.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">ReflectionExtension</strong></span> class reports
    information about an extension.
   </p>
  </div>


  <div class="section" id="reflectionextension.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ReflectionExtension</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.reflector.php" class="interfacename">Reflector</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.reflectionextension.php#reflectionextension.props.name">$<var class="varname">name</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname"><a href="reflectionextension.clone.php" class="methodname">__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="reflectionextension.export.php" class="methodname">export</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$return</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getclasses.php" class="methodname">getClasses</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getclassnames.php" class="methodname">getClassNames</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getconstants.php" class="methodname">getConstants</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getdependencies.php" class="methodname">getDependencies</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getfunctions.php" class="methodname">getFunctions</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getinientries.php" class="methodname">getINIEntries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getname.php" class="methodname">getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.getversion.php" class="methodname">getVersion</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.info.php" class="methodname">info</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.ispersistent.php" class="methodname">isPersistent</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.istemporary.php" class="methodname">isTemporary</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionextension.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>

  

  <div class="section" id="reflectionextension.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="reflectionextension.props.name"><var class="varname">name</var></dt>
     <dd>
      <p class="para">
       Name of the extension, same as calling the 
       <span class="methodname"><a href="reflectionextension.getname.php" class="methodname">ReflectionExtension::getName()</a></span> 
       method.
      </p>
     </dd>
    
   </dl>
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
       <td>8.0.0</td>
       <td>
        <span class="methodname"><a href="reflectionextension.export.php" class="methodname">ReflectionExtension::export()</a></span> was removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>
 </div>

 













































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="reflectionextension.clone.php">ReflectionExtension::__clone</a> — Clones</li><li><a href="reflectionextension.construct.php">ReflectionExtension::__construct</a> — Constructs a ReflectionExtension</li><li><a href="reflectionextension.export.php">ReflectionExtension::export</a> — Export</li><li><a href="reflectionextension.getclasses.php">ReflectionExtension::getClasses</a> — Gets classes</li><li><a href="reflectionextension.getclassnames.php">ReflectionExtension::getClassNames</a> — Gets class names</li><li><a href="reflectionextension.getconstants.php">ReflectionExtension::getConstants</a> — Gets constants</li><li><a href="reflectionextension.getdependencies.php">ReflectionExtension::getDependencies</a> — Gets dependencies</li><li><a href="reflectionextension.getfunctions.php">ReflectionExtension::getFunctions</a> — Gets extension functions</li><li><a href="reflectionextension.getinientries.php">ReflectionExtension::getINIEntries</a> — Gets extension ini entries</li><li><a href="reflectionextension.getname.php">ReflectionExtension::getName</a> — Gets extension name</li><li><a href="reflectionextension.getversion.php">ReflectionExtension::getVersion</a> — Gets extension version</li><li><a href="reflectionextension.info.php">ReflectionExtension::info</a> — Print extension info</li><li><a href="reflectionextension.ispersistent.php">ReflectionExtension::isPersistent</a> — Returns whether this extension is persistent</li><li><a href="reflectionextension.istemporary.php">ReflectionExtension::isTemporary</a> — Returns whether this extension is temporary</li><li><a href="reflectionextension.tostring.php">ReflectionExtension::__toString</a> — To string</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionextension.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.reflectionextension%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.reflectionextension&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionextension.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112478">  <div class="votes">
    <div id="Vu112478">
    <a href="/manual/vote-note.php?id=112478&amp;page=class.reflectionextension&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112478">
    <a href="/manual/vote-note.php?id=112478&amp;page=class.reflectionextension&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112478" title="66% like this...">
    2
    </div>
  </div>
  <a href="#112478" class="name">
  <strong class="user"><em>Lubaev.K</em></strong></a><a class="genanchor" href="#112478"> &para;</a><div class="date" title="2013-06-20 03:01"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112478">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// The demonstration for the class "ReflectionExtension".<br /><br /></span><span class="keyword">function </span><span class="default">REData</span><span class="keyword">(</span><span class="default">ReflectionExtension $re</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br /><br />    </span><span class="default">defined</span><span class="keyword">(</span><span class="string">'UNDEFINED'</span><span class="keyword">) || </span><span class="default">define</span><span class="keyword">(</span><span class="string">'UNDEFINED'</span><span class="keyword">,</span><span class="string">'%undefined%'</span><span class="keyword">);<br />    </span><span class="default">$_data </span><span class="keyword">= [];<br /><br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'getName:'</span><span class="keyword">] = </span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'getVersion:'</span><span class="keyword">] = </span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">getVersion</span><span class="keyword">() ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'info:'</span><span class="keyword">] = </span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">info</span><span class="keyword">() ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'getClassName:'</span><span class="keyword">] = </span><span class="default">PHP_EOL</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">", "</span><span class="keyword">,</span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">getClassNames</span><span class="keyword">()) ?: </span><span class="default">UNDEFINED</span><span class="keyword">;     <br />    foreach (</span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">() as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'getConstants:'</span><span class="keyword">] .= </span><span class="string">"\n</span><span class="keyword">{</span><span class="default">$key</span><span class="keyword">}</span><span class="string">:=</span><span class="keyword">{</span><span class="default">$value</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'getDependencies:'</span><span class="keyword">] = </span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">getDependencies</span><span class="keyword">() ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'getFunctions:'</span><span class="keyword">] = </span><span class="default">PHP_EOL</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">", "</span><span class="keyword">,</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">getFunctions</span><span class="keyword">())) ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'getINIEntries:'</span><span class="keyword">] = </span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">getINIEntries</span><span class="keyword">() ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'isPersistent:'</span><span class="keyword">] = </span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">isPersistent</span><span class="keyword">() ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br />    </span><span class="default">$_data</span><span class="keyword">[</span><span class="string">'isTemporary:'</span><span class="keyword">] = </span><span class="default">$re</span><span class="keyword">-&gt;</span><span class="default">isTemporary</span><span class="keyword">() ?: </span><span class="default">UNDEFINED</span><span class="keyword">;<br /><br />    return </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$_data</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">);<br />}<br /><br /></span><span class="default">REData</span><span class="keyword">( new </span><span class="default">ReflectionExtension</span><span class="keyword">( </span><span class="string">'Reflection' </span><span class="keyword">) );<br /></span><span class="default">REData</span><span class="keyword">( new </span><span class="default">ReflectionExtension</span><span class="keyword">( </span><span class="string">'zlib' </span><span class="keyword">) );<br /><br /></span><span class="comment">// Reflection<br />// Reflection =&gt; enabled<br />// Version =&gt; $Id: 60f1e547a6dd00239162151e701566debdcee660 $<br />/*<br />Array<br />(<br />    [getName:] =&gt; Reflection<br />    [getVersion:] =&gt; $Id: 60f1e547a6dd00239162151e701566debdcee660 $<br />    [info:] =&gt; %undefined%<br />    [getClassName:] =&gt;<br />ReflectionException, Reflection, Reflector, ReflectionFunctionAbstract, Reflecti<br />onFunction, ReflectionParameter, ReflectionMethod, ReflectionClass, ReflectionOb<br />ject, ReflectionProperty, ReflectionExtension, ReflectionZendExtension<br />    [getDependencies:] =&gt; %undefined%<br />    [getFunctions:] =&gt;<br /><br />    [getINIEntries:] =&gt; %undefined%<br />    [isPersistent:] =&gt; 1<br />    [isTemporary:] =&gt; %undefined%<br />)<br />*/<br />// zlib<br />// ZLib Support =&gt; enabled<br />// Stream Wrapper =&gt; compress.zlib://<br />// Stream Filter =&gt; zlib.inflate, zlib.deflate<br />// Compiled Version =&gt; 1.2.7<br />// Linked Version =&gt; 1.2.7<br />// Directive =&gt; Local Value =&gt; Master Value<br />// zlib.output_compression =&gt; Off =&gt; Off<br />// zlib.output_compression_level =&gt; -1 =&gt; -1<br />// zlib.output_handler =&gt; no value =&gt; no value<br />/*<br />Array<br />(<br />    [getName:] =&gt; zlib<br />    [getVersion:] =&gt; 2.0<br />    [info:] =&gt; %undefined%<br />    [getClassName:] =&gt;<br /><br />    [getConstants:] =&gt;<br />FORCE_GZIP:=31<br />FORCE_DEFLATE:=15<br />ZLIB_ENCODING_RAW:=-15<br />ZLIB_ENCODING_GZIP:=31<br />ZLIB_ENCODING_DEFLATE:=15<br />    [getDependencies:] =&gt; %undefined%<br />    [getFunctions:] =&gt;<br />readgzfile, gzrewind, gzclose, gzeof, gzgetc, gzgets, gzgetss, gzread, gzopen, g<br />zpassthru, gzseek, gztell, gzwrite, gzputs, gzfile, gzcompress, gzuncompress, gz<br />deflate, gzinflate, gzencode, gzdecode, zlib_encode, zlib_decode, zlib_get_codin<br />g_type, ob_gzhandler<br />    [getINIEntries:] =&gt; Array<br />        (<br />            [zlib.output_compression] =&gt;<br />            [zlib.output_compression_level] =&gt; -1<br />            [zlib.output_handler] =&gt;<br />        )<br /><br />    [isPersistent:] =&gt; 1<br />    [isTemporary:] =&gt; %undefined%<br />)<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119034">  <div class="votes">
    <div id="Vu119034">
    <a href="/manual/vote-note.php?id=119034&amp;page=class.reflectionextension&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119034">
    <a href="/manual/vote-note.php?id=119034&amp;page=class.reflectionextension&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119034" title="100% like this...">
    1
    </div>
  </div>
  <a href="#119034" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#119034"> &para;</a><div class="date" title="2016-03-20 03:01"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119034">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />  </span><span class="comment">// Create an instance of the ReflectionProperty class<br />  </span><span class="default">$ext</span><span class="keyword">= new </span><span class="default">ReflectionExtension</span><span class="keyword">(</span><span class="string">'standard'</span><span class="keyword">);<br /><br />  </span><span class="comment">// Print out basic information<br />  </span><span class="default">printf</span><span class="keyword">(<br />      </span><span class="string">"Name        : %s\n"</span><span class="keyword">.<br />      </span><span class="string">"Version     : %s\n"</span><span class="keyword">.<br />      </span><span class="string">"Functions   : [%d] %s\n"</span><span class="keyword">.<br />      </span><span class="string">"Constants   : [%d] %s\n"</span><span class="keyword">.<br />      </span><span class="string">"INI entries : [%d] %s\n"</span><span class="keyword">,<br />      </span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(),<br />      </span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getVersion</span><span class="keyword">() ? </span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getVersion</span><span class="keyword">() : </span><span class="string">'NO_VERSION'</span><span class="keyword">,<br />      </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getFunctions</span><span class="keyword">()),<br />      </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getFunctions</span><span class="keyword">(), </span><span class="default">1</span><span class="keyword">),<br />      </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">()),<br />      </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">(), </span><span class="default">1</span><span class="keyword">),<br />      </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getINIEntries</span><span class="keyword">()),<br />      </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">-&gt;</span><span class="default">getINIEntries</span><span class="keyword">(), </span><span class="default">1</span><span class="keyword">)<br />  );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.reflectionextension&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionextension.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
