<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionProperty - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.reflectionproperty.php">
 <link rel="shorturl" href="https://www.php.net/reflectionproperty">
 <link rel="alternate" href="https://www.php.net/reflectionproperty" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.reflection.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionparameter.tostring.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionproperty.clone.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.reflectionproperty.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.reflectionproperty.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.reflectionproperty.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.reflectionproperty.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.reflectionproperty.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.reflectionproperty.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.reflectionproperty.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.reflectionproperty.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.reflectionproperty.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.reflectionproperty.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.reflectionproperty.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ReflectionProperty class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionProperty - Manual" />
<meta name="twitter:description" content="The ReflectionProperty class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionProperty - Manual" />
<meta itemprop="description" content="The ReflectionProperty class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ReflectionProperty class" />

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
        <a href="reflectionproperty.clone.php">
          ReflectionProperty::__clone &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionparameter.tostring.php">
          &laquo; ReflectionParameter::__toString        </a>
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
            <option value='en/class.reflectionproperty.php' selected="selected">English</option>
            <option value='de/class.reflectionproperty.php'>German</option>
            <option value='es/class.reflectionproperty.php'>Spanish</option>
            <option value='fr/class.reflectionproperty.php'>French</option>
            <option value='it/class.reflectionproperty.php'>Italian</option>
            <option value='ja/class.reflectionproperty.php'>Japanese</option>
            <option value='pt_BR/class.reflectionproperty.php'>Brazilian Portuguese</option>
            <option value='ru/class.reflectionproperty.php'>Russian</option>
            <option value='tr/class.reflectionproperty.php'>Turkish</option>
            <option value='uk/class.reflectionproperty.php'>Ukrainian</option>
            <option value='zh/class.reflectionproperty.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.reflectionproperty" class="reference">

 <h1 class="title">The ReflectionProperty class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="reflectionproperty.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">ReflectionProperty</strong></span> class reports
    information about class properties.
   </p>
  </div>


  <div class="section" id="reflectionproperty.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ReflectionProperty</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.reflector.php" class="interfacename">Reflector</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-static"><var class="varname">IS_STATIC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-readonly"><var class="varname">IS_READONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-public"><var class="varname">IS_PUBLIC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-protected"><var class="varname">IS_PROTECTED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-private"><var class="varname">IS_PRIVATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-abstract"><var class="varname">IS_ABSTRACT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-protected-set"><var class="varname">IS_PROTECTED_SET</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-private-set"><var class="varname">IS_PRIVATE_SET</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-virtual"><var class="varname">IS_VIRTUAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.reflectionproperty.php#reflectionproperty.constants.is-final"><var class="varname">IS_FINAL</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.reflectionproperty.php#reflectionproperty.props.name">$<var class="varname">name</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.reflectionproperty.php#reflectionproperty.props.class">$<var class="varname">class</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$property</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname"><a href="reflectionproperty.clone.php" class="methodname">__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="reflectionproperty.export.php" class="methodname">export</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$return</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getattributes.php" class="methodname">getAttributes</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getdeclaringclass.php" class="methodname">getDeclaringClass</a></span>(): <span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getdefaultvalue.php" class="methodname">getDefaultValue</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getdoccomment.php" class="methodname">getDocComment</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.gethook.php" class="methodname">getHook</a></span>(<span class="methodparam"><span class="type"><a href="enum.propertyhooktype.php" class="type PropertyHookType">PropertyHookType</a></span> <code class="parameter">$type</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionmethod.php" class="type ReflectionMethod">ReflectionMethod</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.gethooks.php" class="methodname">getHooks</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getmodifiers.php" class="methodname">getModifiers</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getname.php" class="methodname">getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getrawvalue.php" class="methodname">getRawValue</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getsettabletype.php" class="methodname">getSettableType</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectiontype.php" class="type ReflectionType">ReflectionType</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.gettype.php" class="methodname">getType</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectiontype.php" class="type ReflectionType">ReflectionType</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.getvalue.php" class="methodname">getValue</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$object</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.hasdefaultvalue.php" class="methodname">hasDefaultValue</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.hashook.php" class="methodname">hasHook</a></span>(<span class="methodparam"><span class="type"><a href="enum.propertyhooktype.php" class="type PropertyHookType">PropertyHookType</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.hashooks.php" class="methodname">hasHooks</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.hastype.php" class="methodname">hasType</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isabstract.php" class="methodname">isAbstract</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isdefault.php" class="methodname">isDefault</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isdynamic.php" class="methodname">isDynamic</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isfinal.php" class="methodname">isFinal</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isinitialized.php" class="methodname">isInitialized</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$object</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.islazy.php" class="methodname">isLazy</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isprivate.php" class="methodname">isPrivate</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isprivateset.php" class="methodname">isPrivateSet</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.ispromoted.php" class="methodname">isPromoted</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isprotected.php" class="methodname">isProtected</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isprotectedset.php" class="methodname">isProtectedSet</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.ispublic.php" class="methodname">isPublic</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isreadonly.php" class="methodname">isReadOnly</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isstatic.php" class="methodname">isStatic</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.isvirtual.php" class="methodname">isVirtual</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.setaccessible.php" class="methodname">setAccessible</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$accessible</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.setrawvalue.php" class="methodname">setRawValue</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" class="methodname">setRawValueWithoutLazyInitialization</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.setvalue.php" class="methodname">setValue</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.skiplazyinitialization.php" class="methodname">skipLazyInitialization</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionproperty.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>

  

  <div class="section" id="reflectionproperty.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="reflectionproperty.props.name"><var class="varname">name</var></dt>
     <dd>
      <p class="para">
       Name of the property. Read-only, throws
       <span class="classname"><a href="class.reflectionexception.php" class="classname">ReflectionException</a></span> in attempt to write.
      </p>
     </dd>
    
    
     <dt id="reflectionproperty.props.class"><var class="varname">class</var></dt>
     <dd>
      <p class="para">
       Name of the class where the property is defined. Read-only, throws
       <span class="classname"><a href="class.reflectionexception.php" class="classname">ReflectionException</a></span> in attempt to write.
      </p>
     </dd>
    
   </dl>
  </div>


  

  <div class="section" id="reflectionproperty.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="reflectionproperty.constants.modifiers">
    <h2 class="title">ReflectionProperty Modifiers</h2>
    <dl>

     
      <dt id="reflectionproperty.constants.is-static">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-static">ReflectionProperty::IS_STATIC</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates <a href="language.oop5.static.php" class="link">static</a>
        properties.
        Prior to PHP 7.4.0, the value was <code class="literal">1</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-readonly">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-readonly">ReflectionProperty::IS_READONLY</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates <a href="language.oop5.properties.php#language.oop5.properties.readonly-properties" class="link">readonly</a>
        properties. Available as of PHP 8.1.0.
       </p>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-public">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-public">ReflectionProperty::IS_PUBLIC</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates <a href="language.oop5.visibility.php" class="link">public</a>
        properties.
        Prior to PHP 7.4.0, the value was <code class="literal">256</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-protected">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-protected">ReflectionProperty::IS_PROTECTED</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates <a href="language.oop5.visibility.php" class="link">protected</a>
        properties.
        Prior to PHP 7.4.0, the value was <code class="literal">512</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-private">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-private">ReflectionProperty::IS_PRIVATE</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Indicates <a href="language.oop5.visibility.php" class="link">private</a>
        properties.
        Prior to PHP 7.4.0, the value was <code class="literal">1024</code>.
       </p>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-abstract">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-abstract">ReflectionProperty::IS_ABSTRACT</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Indicates the property is
        <a href="language.oop5.abstract.php" class="link">abstract</a>.
        Available as of PHP 8.4.0.
       </span>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-protected-set">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-protected-set">ReflectionProperty::IS_PROTECTED_SET</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Available as of PHP 8.4.0.
       </span>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-private-set">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-private-set">ReflectionProperty::IS_PRIVATE_SET</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Available as of PHP 8.4.0.
       </span>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-virtual">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-virtual">ReflectionProperty::IS_VIRTUAL</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Available as of PHP 8.4.0.
       </span>
      </dd>
     

     
      <dt id="reflectionproperty.constants.is-final">
       <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-final">ReflectionProperty::IS_FINAL</a></code></strong>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Indicates the property is
        <a href="language.oop5.final.php" class="link">final</a>.
        Available as of PHP 8.4.0.
       </span>
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
       <td>8.4.0</td>
       <td>
        Added <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-virtual">ReflectionProperty::IS_VIRTUAL</a></code></strong>,
        <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-private-set">ReflectionProperty::IS_PRIVATE_SET</a></code></strong>,
        <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-protected-set">ReflectionProperty::IS_PROTECTED_SET</a></code></strong>,
        <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-abstract">ReflectionProperty::IS_ABSTRACT</a></code></strong>,
        and <strong><code><a href="class.reflectionproperty.php#reflectionproperty.constants.is-final">ReflectionProperty::IS_FINAL</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="methodname"><a href="reflectionproperty.export.php" class="methodname">ReflectionProperty::export()</a></span> was removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>


 </div>

 



























































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="reflectionproperty.clone.php">ReflectionProperty::__clone</a> — Clone</li><li><a href="reflectionproperty.construct.php">ReflectionProperty::__construct</a> — Construct a ReflectionProperty object</li><li><a href="reflectionproperty.export.php">ReflectionProperty::export</a> — Export</li><li><a href="reflectionproperty.getattributes.php">ReflectionProperty::getAttributes</a> — Gets Attributes</li><li><a href="reflectionproperty.getdeclaringclass.php">ReflectionProperty::getDeclaringClass</a> — Gets declaring class</li><li><a href="reflectionproperty.getdefaultvalue.php">ReflectionProperty::getDefaultValue</a> — Returns the default value declared for a property</li><li><a href="reflectionproperty.getdoccomment.php">ReflectionProperty::getDocComment</a> — Gets the property doc comment</li><li><a href="reflectionproperty.gethook.php">ReflectionProperty::getHook</a> — Returns a reflection object for a specified hook</li><li><a href="reflectionproperty.gethooks.php">ReflectionProperty::getHooks</a> — Returns an array of all hooks on this property</li><li><a href="reflectionproperty.getmodifiers.php">ReflectionProperty::getModifiers</a> — Gets the property modifiers</li><li><a href="reflectionproperty.getname.php">ReflectionProperty::getName</a> — Gets property name</li><li><a href="reflectionproperty.getrawvalue.php">ReflectionProperty::getRawValue</a> — Returns the value of a property, bypassing a get hook if defined</li><li><a href="reflectionproperty.getsettabletype.php">ReflectionProperty::getSettableType</a> — Returns the parameter type of a setter hook</li><li><a href="reflectionproperty.gettype.php">ReflectionProperty::getType</a> — Gets a property's type</li><li><a href="reflectionproperty.getvalue.php">ReflectionProperty::getValue</a> — Gets value</li><li><a href="reflectionproperty.hasdefaultvalue.php">ReflectionProperty::hasDefaultValue</a> — Checks if property has a default value declared</li><li><a href="reflectionproperty.hashook.php">ReflectionProperty::hasHook</a> — Returns whether the property has a given hook defined</li><li><a href="reflectionproperty.hashooks.php">ReflectionProperty::hasHooks</a> — Returns whether the property has any hooks defined</li><li><a href="reflectionproperty.hastype.php">ReflectionProperty::hasType</a> — Checks if property has a type</li><li><a href="reflectionproperty.isabstract.php">ReflectionProperty::isAbstract</a> — Determines if a property is abstract</li><li><a href="reflectionproperty.isdefault.php">ReflectionProperty::isDefault</a> — Checks if property is a default property</li><li><a href="reflectionproperty.isdynamic.php">ReflectionProperty::isDynamic</a> — Checks if property is a dynamic property</li><li><a href="reflectionproperty.isfinal.php">ReflectionProperty::isFinal</a> — Determines if this property is final or not</li><li><a href="reflectionproperty.isinitialized.php">ReflectionProperty::isInitialized</a> — Checks whether a property is initialized</li><li><a href="reflectionproperty.islazy.php">ReflectionProperty::isLazy</a> — Checks whether a property is lazy</li><li><a href="reflectionproperty.isprivate.php">ReflectionProperty::isPrivate</a> — Checks if property is private</li><li><a href="reflectionproperty.isprivateset.php">ReflectionProperty::isPrivateSet</a> — Checks if property is private for writing</li><li><a href="reflectionproperty.ispromoted.php">ReflectionProperty::isPromoted</a> — Checks if property is promoted</li><li><a href="reflectionproperty.isprotected.php">ReflectionProperty::isProtected</a> — Checks if property is protected</li><li><a href="reflectionproperty.isprotectedset.php">ReflectionProperty::isProtectedSet</a> — Checks whether the property is protected for writing</li><li><a href="reflectionproperty.ispublic.php">ReflectionProperty::isPublic</a> — Checks if property is public</li><li><a href="reflectionproperty.isreadonly.php">ReflectionProperty::isReadOnly</a> — Checks if property is readonly</li><li><a href="reflectionproperty.isstatic.php">ReflectionProperty::isStatic</a> — Checks if property is static</li><li><a href="reflectionproperty.isvirtual.php">ReflectionProperty::isVirtual</a> — Determines if a property is virtual</li><li><a href="reflectionproperty.setaccessible.php">ReflectionProperty::setAccessible</a> — Set property accessibility</li><li><a href="reflectionproperty.setrawvalue.php">ReflectionProperty::setRawValue</a> — Sets the value of a property, bypassing a set hook if defined</li><li><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php">ReflectionProperty::setRawValueWithoutLazyInitialization</a> — Set raw property value without triggering lazy initialization</li><li><a href="reflectionproperty.setvalue.php">ReflectionProperty::setValue</a> — Set property value</li><li><a href="reflectionproperty.skiplazyinitialization.php">ReflectionProperty::skipLazyInitialization</a> — Marks property as non-lazy</li><li><a href="reflectionproperty.tostring.php">ReflectionProperty::__toString</a> — To string</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionproperty.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.reflectionproperty%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.reflectionproperty&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionproperty.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99147">  <div class="votes">
    <div id="Vu99147">
    <a href="/manual/vote-note.php?id=99147&amp;page=class.reflectionproperty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99147">
    <a href="/manual/vote-note.php?id=99147&amp;page=class.reflectionproperty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99147" title="58% like this...">
    7
    </div>
  </div>
  <a href="#99147" class="name">
  <strong class="user"><em>rasmus at mindplay dot dk</em></strong></a><a class="genanchor" href="#99147"> &para;</a><div class="date" title="2010-07-30 05:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99147">
<div class="phpcode"><code><span class="html">I think a more accurate explanation is this:<br /><br />The Reflection classes are designed to reflect upon the source code of an application, not on any runtime information.<br /><br />I think you misunderstand the ReflectionProperty constructor in your example above. The fact that it accepts an object as argument is just a convenience feature - you are actually inspecting the class of that object, not the object itself, so it's basically equivalent to:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// works fine <br /></span><span class="default">$Reflection </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">(</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">), </span><span class="string">'a'</span><span class="keyword">);<br /><br /></span><span class="comment">// throws exception <br /></span><span class="default">$Reflection </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">(</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">), </span><span class="string">'foo'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Getting the class of the object you're passing in is implied, since inspecting a defined property is the purpose of this class.<br /><br />In your example, $a-&gt;foo is a dynamic member - it is not defined as a member of class, so there is no defining class reference, line number, default value, etc. - which means, there is nothing to reflect upon.<br /><br />Clearly this very useful library could use some real documentation...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.reflectionproperty&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionproperty.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
