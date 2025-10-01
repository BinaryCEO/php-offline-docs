<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Imagick - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.imagick.php">
 <link rel="shorturl" href="https://www.php.net/imagick">
 <link rel="alternate" href="https://www.php.net/imagick" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.imagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/imagick.examples-1.php">
 <link rel="next" href="https://www.php.net/manual/en/imagick.adaptiveblurimage.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.imagick.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.imagick.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.imagick.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.imagick.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.imagick.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.imagick.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.imagick.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.imagick.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.imagick.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.imagick.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.imagick.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Imagick class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Imagick - Manual" />
<meta name="twitter:description" content="The Imagick class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Imagick - Manual" />
<meta itemprop="description" content="The Imagick class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Imagick class" />

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
        <a href="imagick.adaptiveblurimage.php">
          Imagick::adaptiveBlurImage &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imagick.examples-1.php">
          &laquo; Basic usage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      </ul>
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
            <option value='en/class.imagick.php' selected="selected">English</option>
            <option value='de/class.imagick.php'>German</option>
            <option value='es/class.imagick.php'>Spanish</option>
            <option value='fr/class.imagick.php'>French</option>
            <option value='it/class.imagick.php'>Italian</option>
            <option value='ja/class.imagick.php'>Japanese</option>
            <option value='pt_BR/class.imagick.php'>Brazilian Portuguese</option>
            <option value='ru/class.imagick.php'>Russian</option>
            <option value='tr/class.imagick.php'>Turkish</option>
            <option value='uk/class.imagick.php'>Ukrainian</option>
            <option value='zh/class.imagick.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.imagick" class="reference">
 <h1 class="title">The <span class="classname"><a href="class.imagick.php" class="classname">Imagick</a></span> class</h1>
 
 <div class="partintro"><p class="verinfo">(PECL imagick 2, PECL imagick 3)</p>
  <div class="section" id="imagick.synopsis">
   <h2 class="title">Class synopsis</h2>
   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>
    <div class="classsynopsisinfo">
     <span class="ooclass"><span class="modifier">class</span> <strong class="classname">Imagick</strong></span>
     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.iterator.php" class="interfacename">Iterator</a></span> {</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="imagick.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$files</code><span class="initializer"> = ?</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.adaptiveblurimage.php" class="methodname">adaptiveBlurImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.adaptiveresizeimage.php" class="methodname">adaptiveResizeImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$bestfit</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.adaptivesharpenimage.php" class="methodname">adaptiveSharpenImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.adaptivethresholdimage.php" class="methodname">adaptiveThresholdImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.addimage.php" class="methodname">addImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$source</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.addnoiseimage.php" class="methodname">addNoiseImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$noise_type</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.affinetransformimage.php" class="methodname">affineTransformImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagickdraw.php" class="type ImagickDraw">ImagickDraw</a></span> <code class="parameter">$matrix</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.animateimages.php" class="methodname">animateImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$x_server</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.annotateimage.php" class="methodname">annotateImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.imagickdraw.php" class="type ImagickDraw">ImagickDraw</a></span> <code class="parameter">$draw_settings</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.appendimages.php" class="methodname">appendImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$stack</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.autolevelimage.php" class="methodname">autoLevelImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.averageimages.php" class="methodname">averageImages</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.blackthresholdimage.php" class="methodname">blackThresholdImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$threshold</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.blueshiftimage.php" class="methodname">blueShiftImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$factor</code><span class="initializer"> = 1.5</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.blurimage.php" class="methodname">blurImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.borderimage.php" class="methodname">borderImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$bordercolor</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.brightnesscontrastimage.php" class="methodname">brightnessContrastImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$brightness</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$contrast</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.charcoalimage.php" class="methodname">charcoalImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.chopimage.php" class="methodname">chopImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.clampimage.php" class="methodname">clampImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.clear.php" class="methodname">clear</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.clipimage.php" class="methodname">clipImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.clipimagepath.php" class="methodname">clipImagePath</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pathname</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$inside</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.clippathimage.php" class="methodname">clipPathImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pathname</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$inside</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.clone.php" class="methodname">clone</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.clutimage.php" class="methodname">clutImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$lookup_table</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.coalesceimages.php" class="methodname">coalesceImages</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.colorfloodfillimage.php" class="methodname">colorFloodfillImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$fill</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$bordercolor</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.colorizeimage.php" class="methodname">colorizeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$colorize</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$opacity</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.colormatriximage.php" class="methodname">colorMatrixImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$color_matrix</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.combineimages.php" class="methodname">combineImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channelType</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.commentimage.php" class="methodname">commentImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$comment</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.compareimagechannels.php" class="methodname">compareImageChannels</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channelType</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$metricType</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.compareimagelayers.php" class="methodname">compareImageLayers</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.compareimages.php" class="methodname">compareImages</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$compare</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$metric</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.compositeimage.php" class="methodname">compositeImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$composite_object</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$composite</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.contrastimage.php" class="methodname">contrastImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$sharpen</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.contraststretchimage.php" class="methodname">contrastStretchImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$black_point</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$white_point</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.convolveimage.php" class="methodname">convolveImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$kernel</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.count.php" class="methodname">count</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.cropimage.php" class="methodname">cropImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.cropthumbnailimage.php" class="methodname">cropThumbnailImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.current.php" class="methodname">current</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.cyclecolormapimage.php" class="methodname">cycleColormapImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$displace</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.decipherimage.php" class="methodname">decipherImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$passphrase</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.deconstructimages.php" class="methodname">deconstructImages</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.deleteimageartifact.php" class="methodname">deleteImageArtifact</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$artifact</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.deleteimageproperty.php" class="methodname">deleteImageProperty</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.deskewimage.php" class="methodname">deskewImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$threshold</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.despeckleimage.php" class="methodname">despeckleImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.destroy.php" class="methodname">destroy</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.displayimage.php" class="methodname">displayImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$servername</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.displayimages.php" class="methodname">displayImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$servername</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.distortimage.php" class="methodname">distortImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$arguments</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$bestfit</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.drawimage.php" class="methodname">drawImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagickdraw.php" class="type ImagickDraw">ImagickDraw</a></span> <code class="parameter">$draw</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.edgeimage.php" class="methodname">edgeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.embossimage.php" class="methodname">embossImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.encipherimage.php" class="methodname">encipherImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$passphrase</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.enhanceimage.php" class="methodname">enhanceImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.equalizeimage.php" class="methodname">equalizeImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.evaluateimage.php" class="methodname">evaluateImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$op</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$constant</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.exportimagepixels.php" class="methodname">exportImagePixels</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$map</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$STORAGE</code></span><br>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.extentimage.php" class="methodname">extentImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.filter.php" class="methodname">filter</a></span>(<span class="methodparam"><span class="type"><a href="class.imagickkernel.php" class="type ImagickKernel">ImagickKernel</a></span> <code class="parameter">$ImagickKernel</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_UNDEFINED</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.flattenimages.php" class="methodname">flattenImages</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.flipimage.php" class="methodname">flipImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.floodfillpaintimage.php" class="methodname">floodFillPaintImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$fill</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$target</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$invert</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.flopimage.php" class="methodname">flopImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.forwardfouriertransformimage.php" class="methodname">forwardFourierTransformimage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$magnitude</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.frameimage.php" class="methodname">frameImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$matte_color</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$inner_bevel</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$outer_bevel</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.functionimage.php" class="methodname">functionImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$function</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$arguments</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.fximage.php" class="methodname">fxImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$expression</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.gammaimage.php" class="methodname">gammaImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$gamma</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.gaussianblurimage.php" class="methodname">gaussianBlurImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getcolorspace.php" class="methodname">getColorspace</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getcompression.php" class="methodname">getCompression</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getcompressionquality.php" class="methodname">getCompressionQuality</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getcopyright.php" class="methodname">getCopyright</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getfilename.php" class="methodname">getFilename</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getfont.php" class="methodname">getFont</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getformat.php" class="methodname">getFormat</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getgravity.php" class="methodname">getGravity</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.gethomeurl.php" class="methodname">getHomeURL</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimage.php" class="methodname">getImage</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagealphachannel.php" class="methodname">getImageAlphaChannel</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageartifact.php" class="methodname">getImageArtifact</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$artifact</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageattribute.php" class="methodname">getImageAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagebackgroundcolor.php" class="methodname">getImageBackgroundColor</a></span>(): <span class="type"><a href="class.imagickpixel.php" class="type ImagickPixel">ImagickPixel</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageblob.php" class="methodname">getImageBlob</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageblueprimary.php" class="methodname">getImageBluePrimary</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagebordercolor.php" class="methodname">getImageBorderColor</a></span>(): <span class="type"><a href="class.imagickpixel.php" class="type ImagickPixel">ImagickPixel</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechanneldepth.php" class="methodname">getImageChannelDepth</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechanneldistortion.php" class="methodname">getImageChannelDistortion</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$reference</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$metric</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechanneldistortions.php" class="methodname">getImageChannelDistortions</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$reference</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$metric</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechannelextrema.php" class="methodname">getImageChannelExtrema</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechannelkurtosis.php" class="methodname">getImageChannelKurtosis</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechannelmean.php" class="methodname">getImageChannelMean</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechannelrange.php" class="methodname">getImageChannelRange</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagechannelstatistics.php" class="methodname">getImageChannelStatistics</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageclipmask.php" class="methodname">getImageClipMask</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagecolormapcolor.php" class="methodname">getImageColormapColor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="class.imagickpixel.php" class="type ImagickPixel">ImagickPixel</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagecolors.php" class="methodname">getImageColors</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagecolorspace.php" class="methodname">getImageColorspace</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagecompose.php" class="methodname">getImageCompose</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagecompression.php" class="methodname">getImageCompression</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagecompressionquality.php" class="methodname">getImageCompressionQuality</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagedelay.php" class="methodname">getImageDelay</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagedepth.php" class="methodname">getImageDepth</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagedispose.php" class="methodname">getImageDispose</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagedistortion.php" class="methodname">getImageDistortion</a></span>(<span class="methodparam"><span class="type">MagickWand</span> <code class="parameter">$reference</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$metric</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageextrema.php" class="methodname">getImageExtrema</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagefilename.php" class="methodname">getImageFilename</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageformat.php" class="methodname">getImageFormat</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagegamma.php" class="methodname">getImageGamma</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagegeometry.php" class="methodname">getImageGeometry</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagegravity.php" class="methodname">getImageGravity</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagegreenprimary.php" class="methodname">getImageGreenPrimary</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageheight.php" class="methodname">getImageHeight</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagehistogram.php" class="methodname">getImageHistogram</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageindex.php" class="methodname">getImageIndex</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageinterlacescheme.php" class="methodname">getImageInterlaceScheme</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageinterpolatemethod.php" class="methodname">getImageInterpolateMethod</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageiterations.php" class="methodname">getImageIterations</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagelength.php" class="methodname">getImageLength</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagematte.php" class="methodname">getImageMatte</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagemattecolor.php" class="methodname">getImageMatteColor</a></span>(): <span class="type"><a href="class.imagickpixel.php" class="type ImagickPixel">ImagickPixel</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagemimetype.php" class="methodname">getImageMimeType</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageorientation.php" class="methodname">getImageOrientation</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagepage.php" class="methodname">getImagePage</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagepixelcolor.php" class="methodname">getImagePixelColor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="class.imagickpixel.php" class="type ImagickPixel">ImagickPixel</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageprofile.php" class="methodname">getImageProfile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageprofiles.php" class="methodname">getImageProfiles</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code><span class="initializer"> = &quot;*&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$include_values</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageproperties.php" class="methodname">getImageProperties</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code><span class="initializer"> = &quot;*&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$include_values</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageproperty.php" class="methodname">getImageProperty</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageredprimary.php" class="methodname">getImageRedPrimary</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageregion.php" class="methodname">getImageRegion</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagerenderingintent.php" class="methodname">getImageRenderingIntent</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageresolution.php" class="methodname">getImageResolution</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagesblob.php" class="methodname">getImagesBlob</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagescene.php" class="methodname">getImageScene</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagesignature.php" class="methodname">getImageSignature</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagesize.php" class="methodname">getImageSize</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagetickspersecond.php" class="methodname">getImageTicksPerSecond</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagetotalinkdensity.php" class="methodname">getImageTotalInkDensity</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagetype.php" class="methodname">getImageType</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimageunits.php" class="methodname">getImageUnits</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagevirtualpixelmethod.php" class="methodname">getImageVirtualPixelMethod</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagewhitepoint.php" class="methodname">getImageWhitePoint</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getimagewidth.php" class="methodname">getImageWidth</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getinterlacescheme.php" class="methodname">getInterlaceScheme</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getiteratorindex.php" class="methodname">getIteratorIndex</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getnumberimages.php" class="methodname">getNumberImages</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getoption.php" class="methodname">getOption</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getpackagename.php" class="methodname">getPackageName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getpage.php" class="methodname">getPage</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getpixeliterator.php" class="methodname">getPixelIterator</a></span>(): <span class="type"><a href="class.imagickpixeliterator.php" class="type ImagickPixelIterator">ImagickPixelIterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getpixelregioniterator.php" class="methodname">getPixelRegionIterator</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span><br>): <span class="type"><a href="class.imagickpixeliterator.php" class="type ImagickPixelIterator">ImagickPixelIterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getpointsize.php" class="methodname">getPointSize</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getquantum.php" class="methodname">getQuantum</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getquantumdepth.php" class="methodname">getQuantumDepth</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getquantumrange.php" class="methodname">getQuantumRange</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getregistry.php" class="methodname">getRegistry</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getreleasedate.php" class="methodname">getReleaseDate</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getresource.php" class="methodname">getResource</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getresourcelimit.php" class="methodname">getResourceLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getsamplingfactors.php" class="methodname">getSamplingFactors</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getsize.php" class="methodname">getSize</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.getsizeoffset.php" class="methodname">getSizeOffset</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.getversion.php" class="methodname">getVersion</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.haldclutimage.php" class="methodname">haldClutImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$clut</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.hasnextimage.php" class="methodname">hasNextImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.haspreviousimage.php" class="methodname">hasPreviousImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.identifyformat.php" class="methodname">identifyFormat</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$embedText</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.identifyimage.php" class="methodname">identifyImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$appendRawOutput</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.implodeimage.php" class="methodname">implodeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.importimagepixels.php" class="methodname">importImagePixels</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$map</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$storage</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$pixels</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.inversefouriertransformimage.php" class="methodname">inverseFourierTransformImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$complement</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$magnitude</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.labelimage.php" class="methodname">labelImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$label</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.levelimage.php" class="methodname">levelImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$blackPoint</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$gamma</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$whitePoint</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.linearstretchimage.php" class="methodname">linearStretchImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$blackPoint</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$whitePoint</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.liquidrescaleimage.php" class="methodname">liquidRescaleImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$delta_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$rigidity</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.listregistry.php" class="methodname">listRegistry</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.magnifyimage.php" class="methodname">magnifyImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.mapimage.php" class="methodname">mapImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$map</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$dither</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.mattefloodfillimage.php" class="methodname">matteFloodfillImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$alpha</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$bordercolor</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.medianfilterimage.php" class="methodname">medianFilterImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.mergeimagelayers.php" class="methodname">mergeImageLayers</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$layer_method</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.minifyimage.php" class="methodname">minifyImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.modulateimage.php" class="methodname">modulateImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$brightness</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$saturation</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$hue</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.montageimage.php" class="methodname">montageImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.imagickdraw.php" class="type ImagickDraw">ImagickDraw</a></span> <code class="parameter">$draw</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$tile_geometry</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$thumbnail_geometry</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$frame</code></span><br>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.morphimages.php" class="methodname">morphImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$number_frames</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.morphology.php" class="methodname">morphology</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$morphologyMethod</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$iterations</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.imagickkernel.php" class="type ImagickKernel">ImagickKernel</a></span> <code class="parameter">$ImagickKernel</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.mosaicimages.php" class="methodname">mosaicImages</a></span>(): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.motionblurimage.php" class="methodname">motionBlurImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.negateimage.php" class="methodname">negateImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$gray</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.newimage.php" class="methodname">newImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$cols</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$background</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.newpseudoimage.php" class="methodname">newPseudoImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pseudoString</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.nextimage.php" class="methodname">nextImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.normalizeimage.php" class="methodname">normalizeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.oilpaintimage.php" class="methodname">oilPaintImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.opaquepaintimage.php" class="methodname">opaquePaintImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$target</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$fill</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$invert</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.optimizeimagelayers.php" class="methodname">optimizeImageLayers</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.orderedposterizeimage.php" class="methodname">orderedPosterizeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$threshold_map</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.paintfloodfillimage.php" class="methodname">paintFloodfillImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$fill</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$bordercolor</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.paintopaqueimage.php" class="methodname">paintOpaqueImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$target</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$fill</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.painttransparentimage.php" class="methodname">paintTransparentImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$target</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$alpha</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.pingimage.php" class="methodname">pingImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.pingimageblob.php" class="methodname">pingImageBlob</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$image</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.pingimagefile.php" class="methodname">pingImageFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$filehandle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fileName</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.polaroidimage.php" class="methodname">polaroidImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagickdraw.php" class="type ImagickDraw">ImagickDraw</a></span> <code class="parameter">$properties</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.posterizeimage.php" class="methodname">posterizeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$levels</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$dither</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.previewimages.php" class="methodname">previewImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$preview</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.previousimage.php" class="methodname">previousImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.profileimage.php" class="methodname">profileImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$profile</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.quantizeimage.php" class="methodname">quantizeImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$numberColors</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$colorspace</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$treedepth</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$dither</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$measureError</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.quantizeimages.php" class="methodname">quantizeImages</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$numberColors</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$colorspace</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$treedepth</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$dither</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$measureError</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.queryfontmetrics.php" class="methodname">queryFontMetrics</a></span>(<span class="methodparam"><span class="type"><a href="class.imagickdraw.php" class="type ImagickDraw">ImagickDraw</a></span> <code class="parameter">$properties</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$multiline</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.queryfonts.php" class="methodname">queryFonts</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code><span class="initializer"> = &quot;*&quot;</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.queryformats.php" class="methodname">queryFormats</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code><span class="initializer"> = &quot;*&quot;</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.radialblurimage.php" class="methodname">radialBlurImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.raiseimage.php" class="methodname">raiseImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$raise</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.randomthresholdimage.php" class="methodname">randomThresholdImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$low</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$high</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.readimage.php" class="methodname">readImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.readimageblob.php" class="methodname">readImageBlob</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.readimagefile.php" class="methodname">readImageFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$filehandle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fileName</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.readimages.php" class="methodname">readImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$filenames</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.recolorimage.php" class="methodname">recolorImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$matrix</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.reducenoiseimage.php" class="methodname">reduceNoiseImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.remapimage.php" class="methodname">remapImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$replacement</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$DITHER</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.removeimage.php" class="methodname">removeImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.removeimageprofile.php" class="methodname">removeImageProfile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.render.php" class="methodname">render</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.resampleimage.php" class="methodname">resampleImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x_resolution</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y_resolution</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$filter</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$blur</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.resetimagepage.php" class="methodname">resetImagePage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$page</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.resizeimage.php" class="methodname">resizeImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$filter</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$blur</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$bestfit</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.rollimage.php" class="methodname">rollImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.rotateimage.php" class="methodname">rotateImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$background</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$degrees</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.rotationalblurimage.php" class="methodname">rotationalBlurImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.roundcorners.php" class="methodname">roundCorners</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x_rounding</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y_rounding</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$stroke_width</code><span class="initializer"> = 10</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$displace</code><span class="initializer"> = 5</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$size_correction</code><span class="initializer"> = -6</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.sampleimage.php" class="methodname">sampleImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.scaleimage.php" class="methodname">scaleImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$bestfit</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.segmentimage.php" class="methodname">segmentImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$COLORSPACE</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$cluster_threshold</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$smooth_threshold</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$verbose</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.selectiveblurimage.php" class="methodname">selectiveBlurImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$threshold</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.separateimagechannel.php" class="methodname">separateImageChannel</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.sepiatoneimage.php" class="methodname">sepiaToneImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$threshold</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setbackgroundcolor.php" class="methodname">setBackgroundColor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$background</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setcolorspace.php" class="methodname">setColorspace</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$COLORSPACE</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setcompression.php" class="methodname">setCompression</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compression</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setcompressionquality.php" class="methodname">setCompressionQuality</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$quality</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setfilename.php" class="methodname">setFilename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setfirstiterator.php" class="methodname">setFirstIterator</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setfont.php" class="methodname">setFont</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$font</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setformat.php" class="methodname">setFormat</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setgravity.php" class="methodname">setGravity</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$gravity</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimage.php" class="methodname">setImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$replace</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagealphachannel.php" class="methodname">setImageAlphaChannel</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageartifact.php" class="methodname">setImageArtifact</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$artifact</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageattribute.php" class="methodname">setImageAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagebackgroundcolor.php" class="methodname">setImageBackgroundColor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$background</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagebias.php" class="methodname">setImageBias</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$bias</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagebiasquantum.php" class="methodname">setImageBiasQuantum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$bias</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageblueprimary.php" class="methodname">setImageBluePrimary</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagebordercolor.php" class="methodname">setImageBorderColor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$border</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagechanneldepth.php" class="methodname">setImageChannelDepth</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$depth</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageclipmask.php" class="methodname">setImageClipMask</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$clip_mask</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagecolormapcolor.php" class="methodname">setImageColormapColor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="class.imagickpixel.php" class="type ImagickPixel">ImagickPixel</a></span> <code class="parameter">$color</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagecolorspace.php" class="methodname">setImageColorspace</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$colorspace</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagecompose.php" class="methodname">setImageCompose</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compose</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagecompression.php" class="methodname">setImageCompression</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compression</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagecompressionquality.php" class="methodname">setImageCompressionQuality</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$quality</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagedelay.php" class="methodname">setImageDelay</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$delay</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagedepth.php" class="methodname">setImageDepth</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$depth</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagedispose.php" class="methodname">setImageDispose</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dispose</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageextent.php" class="methodname">setImageExtent</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagefilename.php" class="methodname">setImageFilename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageformat.php" class="methodname">setImageFormat</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagegamma.php" class="methodname">setImageGamma</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$gamma</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagegravity.php" class="methodname">setImageGravity</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$gravity</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagegreenprimary.php" class="methodname">setImageGreenPrimary</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageindex.php" class="methodname">setImageIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageinterlacescheme.php" class="methodname">setImageInterlaceScheme</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$interlace_scheme</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageinterpolatemethod.php" class="methodname">setImageInterpolateMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageiterations.php" class="methodname">setImageIterations</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$iterations</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagematte.php" class="methodname">setImageMatte</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$matte</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagemattecolor.php" class="methodname">setImageMatteColor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$matte</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageopacity.php" class="methodname">setImageOpacity</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$opacity</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageorientation.php" class="methodname">setImageOrientation</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$orientation</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagepage.php" class="methodname">setImagePage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageprofile.php" class="methodname">setImageProfile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$profile</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageproperty.php" class="methodname">setImageProperty</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageredprimary.php" class="methodname">setImageRedPrimary</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagerenderingintent.php" class="methodname">setImageRenderingIntent</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rendering_intent</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageresolution.php" class="methodname">setImageResolution</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x_resolution</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y_resolution</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagescene.php" class="methodname">setImageScene</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$scene</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagetickspersecond.php" class="methodname">setImageTicksPerSecond</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$ticks_per_second</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagetype.php" class="methodname">setImageType</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$image_type</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimageunits.php" class="methodname">setImageUnits</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$units</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagevirtualpixelmethod.php" class="methodname">setImageVirtualPixelMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setimagewhitepoint.php" class="methodname">setImageWhitePoint</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setinterlacescheme.php" class="methodname">setInterlaceScheme</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$interlace_scheme</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setiteratorindex.php" class="methodname">setIteratorIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setlastiterator.php" class="methodname">setLastIterator</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setoption.php" class="methodname">setOption</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setpage.php" class="methodname">setPage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setpointsize.php" class="methodname">setPointSize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$point_size</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setprogressmonitor.php" class="methodname">setProgressMonitor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.setregistry.php" class="methodname">setRegistry</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setresolution.php" class="methodname">setResolution</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x_resolution</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y_resolution</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="imagick.setresourcelimit.php" class="methodname">setResourceLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setsamplingfactors.php" class="methodname">setSamplingFactors</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$factors</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setsize.php" class="methodname">setSize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.setsizeoffset.php" class="methodname">setSizeOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.settype.php" class="methodname">setType</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$image_type</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.shadeimage.php" class="methodname">shadeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$gray</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$azimuth</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$elevation</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.shadowimage.php" class="methodname">shadowImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$opacity</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.sharpenimage.php" class="methodname">sharpenImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.shaveimage.php" class="methodname">shaveImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.shearimage.php" class="methodname">shearImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$background</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x_shear</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y_shear</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.sigmoidalcontrastimage.php" class="methodname">sigmoidalContrastImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$sharpen</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$alpha</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$beta</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.sketchimage.php" class="methodname">sketchImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.smushimages.php" class="methodname">smushImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$stack</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.solarizeimage.php" class="methodname">solarizeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$threshold</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.sparsecolorimage.php" class="methodname">sparseColorImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$SPARSE_METHOD</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$arguments</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.spliceimage.php" class="methodname">spliceImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.spreadimage.php" class="methodname">spreadImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.statisticimage.php" class="methodname">statisticImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.steganoimage.php" class="methodname">steganoImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$watermark_wand</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.stereoimage.php" class="methodname">stereoImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$offset_wand</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.stripimage.php" class="methodname">stripImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.subimagematch.php" class="methodname">subImageMatch</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$Imagick</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$offset</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter reference">&$similarity</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="methodname"><a href="imagick.swirlimage.php" class="methodname">swirlImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$degrees</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="methodname"><a href="imagick.textureimage.php" class="methodname">textureImage</a></span>(<span class="methodparam"><span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span> <code class="parameter">$texture_wand</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.thresholdimage.php" class="methodname">thresholdImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$threshold</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.thumbnailimage.php" class="methodname">thumbnailImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$bestfit</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$fill</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.tintimage.php" class="methodname">tintImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$tint</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$opacity</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.transformimage.php" class="methodname">transformImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$crop</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$geometry</code></span>): <span class="type"><a href="class.imagick.php" class="type Imagick">Imagick</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.transformimagecolorspace.php" class="methodname">transformImageColorspace</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$colorspace</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.transparentpaintimage.php" class="methodname">transparentPaintImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$target</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$alpha</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$invert</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.transposeimage.php" class="methodname">transposeImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.transverseimage.php" class="methodname">transverseImage</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.trimimage.php" class="methodname">trimImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fuzz</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.uniqueimagecolors.php" class="methodname">uniqueImageColors</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.unsharpmaskimage.php" class="methodname">unsharpMaskImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$radius</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sigma</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$amount</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$threshold</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$channel</code><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.vignetteimage.php" class="methodname">vignetteImage</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$blackPoint</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$whitePoint</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.waveimage.php" class="methodname">waveImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$amplitude</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$length</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.whitethresholdimage.php" class="methodname">whiteThresholdImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$threshold</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.writeimage.php" class="methodname">writeImage</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code><span class="initializer"> = NULL</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.writeimagefile.php" class="methodname">writeImageFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$filehandle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.writeimages.php" class="methodname">writeImages</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$adjoin</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="imagick.writeimagesfile.php" class="methodname">writeImagesFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$filehandle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
  </div>

 <div class="section" id="imagick.imagick.methodtypes">
  <h2 class="title">Image methods and global methods</h2>
  <p class="para">
   The Imagick class has the ability to hold and operate on multiple
   images simultaneously. This is achieved through an internal stack. There
   is always an internal pointer that points at the current image. Some
   functions operate on all images in the Imagick class, but most operate
   only on the current image in the internal stack. As a convention, method
   names can contain the word Image to denote they affect only the current
   image in the stack.
  </p>
 </div>

 <div class="section" id="imagick.imagick.methods">
  <h2 class="title">Class Methods</h2>
  <p class="para">
   Because there are so many methods, here is a handy list of methods,
   somewhat reduced to their general purpose:
  </p>

  <table class="doctable table">
   <caption><strong>Class methods by purpose</strong></caption>
   
    <thead>
     <tr>
      <th>Image effects</th>
      <th>Get methods</th>
      <th>Set methods</th>
      <th>Read/write images</th>
      <th>Other</th>
     </tr>

    </thead>


    <tbody class="tbody">
     <tr>
      <td><span class="methodname"><a href="imagick.adaptiveblurimage.php" class="methodname">Imagick::adaptiveBlurImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getcompression.php" class="methodname">Imagick::getCompression()</a></span></td>
      <td><span class="methodname"><a href="imagick.setbackgroundcolor.php" class="methodname">Imagick::setBackgroundColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.construct.php" class="methodname">Imagick::__construct()</a></span></td>
      <td><span class="methodname"><a href="imagick.clear.php" class="methodname">Imagick::clear()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.adaptiveresizeimage.php" class="methodname">Imagick::adaptiveResizeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getfilename.php" class="methodname">Imagick::getFilename()</a></span></td>
      <td><span class="methodname"><a href="imagick.setcompressionquality.php" class="methodname">Imagick::setCompressionQuality()</a></span></td>
      <td><span class="methodname"><a href="imagick.addimage.php" class="methodname">Imagick::addImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.clone.php" class="methodname">Imagick::clone()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.adaptivesharpenimage.php" class="methodname">Imagick::adaptiveSharpenImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getformat.php" class="methodname">Imagick::getFormat()</a></span></td>
      <td><span class="methodname"><a href="imagick.setcompression.php" class="methodname">Imagick::setCompression()</a></span></td>
      <td><span class="methodname"><a href="imagick.appendimages.php" class="methodname">Imagick::appendImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.current.php" class="methodname">Imagick::current()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.adaptivethresholdimage.php" class="methodname">Imagick::adaptiveThresholdImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagebackgroundcolor.php" class="methodname">Imagick::getImageBackgroundColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.setfilename.php" class="methodname">Imagick::setFilename()</a></span></td>
      <td><span class="methodname"><a href="imagick.getfilename.php" class="methodname">Imagick::getFilename()</a></span></td>
      <td><span class="methodname"><a href="imagick.destroy.php" class="methodname">Imagick::destroy()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.addnoiseimage.php" class="methodname">Imagick::addNoiseImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageblob.php" class="methodname">Imagick::getImageBlob()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagesblob.php" class="methodname">Imagick::getImagesBlob()</a></span></td>   
      <td><span class="methodname"><a href="imagick.setformat.php" class="methodname">Imagick::setFormat()</a></span></td>
      <td><span class="methodname"><a href="imagick.getformat.php" class="methodname">Imagick::getFormat()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.affinetransformimage.php" class="methodname">Imagick::affinetransformimage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageblueprimary.php" class="methodname">Imagick::getImageBluePrimary()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagebackgroundcolor.php" class="methodname">Imagick::setImageBackgroundColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagefilename.php" class="methodname">Imagick::getImageFilename()</a></span></td>
      <td><span class="methodname"><a href="imagick.gethomeurl.php" class="methodname">Imagick::getHomeURL()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.annotateimage.php" class="methodname">Imagick::annotateImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagebordercolor.php" class="methodname">Imagick::getImageBorderColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.setfirstiterator.php" class="methodname">Imagick::setFirstIterator()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageformat.php" class="methodname">Imagick::getImageFormat()</a></span></td>
      <td><span class="methodname"><a href="imagick.commentimage.php" class="methodname">Imagick::commentImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.averageimages.php" class="methodname">Imagick::averageImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagechanneldepth.php" class="methodname">Imagick::getImageChannelDepth()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagebias.php" class="methodname">Imagick::setImageBias()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimage.php" class="methodname">Imagick::getImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getnumberimages.php" class="methodname">Imagick::getNumberImages()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.blackthresholdimage.php" class="methodname">Imagick::blackThresholdImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagechanneldistortion.php" class="methodname">Imagick::getImageChannelDistortion()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageblueprimary.php" class="methodname">Imagick::setImageBluePrimary()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagefilename.php" class="methodname">Imagick::setImageFilename()</a></span></td>
      <td><span class="methodname"><a href="imagick.getreleasedate.php" class="methodname">Imagick::getReleaseDate()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.blurimage.php" class="methodname">Imagick::blurImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagechannelextrema.php" class="methodname">Imagick::getImageChannelExtrema()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagebordercolor.php" class="methodname">Imagick::setImageBorderColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageformat.php" class="methodname">Imagick::setImageFormat()</a></span></td>
      <td><span class="methodname"><a href="imagick.getversion.php" class="methodname">Imagick::getVersion()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.borderimage.php" class="methodname">Imagick::borderImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagechannelmean.php" class="methodname">Imagick::getImageChannelMean()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagechanneldepth.php" class="methodname">Imagick::setImageChannelDepth()</a></span></td>
      <td><span class="methodname"><a href="imagick.readimagefile.php" class="methodname">Imagick::readImageFile()</a></span></td>
      <td><span class="methodname"><a href="imagick.hasnextimage.php" class="methodname">Imagick::hasNextImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.charcoalimage.php" class="methodname">Imagick::charcoalImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagechannelstatistics.php" class="methodname">Imagick::getImageChannelStatistics()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagecolormapcolor.php" class="methodname">Imagick::setImageColormapColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.readimage.php" class="methodname">Imagick::readImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.haspreviousimage.php" class="methodname">Imagick::hasPreviousImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.chopimage.php" class="methodname">Imagick::chopImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagecolormapcolor.php" class="methodname">Imagick::getImageColormapColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagecolorspace.php" class="methodname">Imagick::setImageColorSpace()</a></span></td>
      <td><span class="methodname"><a href="imagick.writeimages.php" class="methodname">Imagick::writeImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.labelimage.php" class="methodname">Imagick::labelImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.clipimage.php" class="methodname">Imagick::clipImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagecolorspace.php" class="methodname">Imagick::getImageColorspace()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagecompose.php" class="methodname">Imagick::setImageCompose()</a></span></td>
      <td><span class="methodname"><a href="imagick.writeimage.php" class="methodname">Imagick::writeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.newimage.php" class="methodname">Imagick::newImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.clippathimage.php" class="methodname">Imagick::clipPathImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagecolors.php" class="methodname">Imagick::getImageColors()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagecompression.php" class="methodname">Imagick::setImageCompression()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.newpseudoimage.php" class="methodname">Imagick::newPseudoImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.coalesceimages.php" class="methodname">Imagick::coalesceImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagecompose.php" class="methodname">Imagick::getImageCompose()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagedelay.php" class="methodname">Imagick::setImageDelay()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.nextimage.php" class="methodname">Imagick::nextImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.colorfloodfillimage.php" class="methodname">Imagick::colorFloodFillImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagedelay.php" class="methodname">Imagick::getImageDelay()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagedepth.php" class="methodname">Imagick::setImageDepth()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.pingimageblob.php" class="methodname">Imagick::pingImageBlob()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.colorizeimage.php" class="methodname">Imagick::colorizeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagedepth.php" class="methodname">Imagick::getImageDepth()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagedispose.php" class="methodname">Imagick::setImageDispose()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.pingimagefile.php" class="methodname">Imagick::pingImageFile()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.combineimages.php" class="methodname">Imagick::combineImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagedispose.php" class="methodname">Imagick::getImageDispose()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagedispose.php" class="methodname">Imagick::setImageDispose()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.pingimage.php" class="methodname">Imagick::pingImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.compareimagechannels.php" class="methodname">Imagick::compareImageChannels()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagedistortion.php" class="methodname">Imagick::getImageDistortion()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageextent.php" class="methodname">Imagick::setImageExtent()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.previousimage.php" class="methodname">Imagick::previousImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.compareimagelayers.php" class="methodname">Imagick::compareImageLayers()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageextrema.php" class="methodname">Imagick::getImageExtrema()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagefilename.php" class="methodname">Imagick::setImageFilename()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.profileimage.php" class="methodname">Imagick::profileImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.compositeimage.php" class="methodname">Imagick::compositeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagefilename.php" class="methodname">Imagick::getImageFilename()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageformat.php" class="methodname">Imagick::setImageFormat()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.queryformats.php" class="methodname">Imagick::queryFormats()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.contrastimage.php" class="methodname">Imagick::contrastImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageformat.php" class="methodname">Imagick::getImageFormat()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagegamma.php" class="methodname">Imagick::setImageGamma()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.removeimageprofile.php" class="methodname">Imagick::removeImageProfile()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.contraststretchimage.php" class="methodname">Imagick::contrastStretchImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagegamma.php" class="methodname">Imagick::getImageGamma()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagegreenprimary.php" class="methodname">Imagick::setImageGreenPrimary()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.removeimage.php" class="methodname">Imagick::removeImage()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.convolveimage.php" class="methodname">Imagick::convolveImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagegeometry.php" class="methodname">Imagick::getImageGeometry()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageindex.php" class="methodname">Imagick::setImageIndex()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.setfirstiterator.php" class="methodname">Imagick::setFirstIterator()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.cropimage.php" class="methodname">Imagick::cropImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagegreenprimary.php" class="methodname">Imagick::getImageGreenPrimary()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageinterpolatemethod.php" class="methodname">Imagick::setImageInterpolateMethod()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.setimageindex.php" class="methodname">Imagick::setImageIndex()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.cyclecolormapimage.php" class="methodname">Imagick::cycleColormapImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageheight.php" class="methodname">Imagick::getImageHeight()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageiterations.php" class="methodname">Imagick::setImageIterations()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.valid.php" class="methodname">Imagick::valid()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.deconstructimages.php" class="methodname">Imagick::deconstructImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagehistogram.php" class="methodname">Imagick::getImageHistogram()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagemattecolor.php" class="methodname">Imagick::setImageMatteColor()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.getcopyright.php" class="methodname">Imagick::getCopyright()</a></span></td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.drawimage.php" class="methodname">Imagick::drawImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageindex.php" class="methodname">Imagick::getImageIndex()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagematte.php" class="methodname">Imagick::setImageMatte()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.edgeimage.php" class="methodname">Imagick::edgeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageinterlacescheme.php" class="methodname">Imagick::getImageInterlaceScheme()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagepage.php" class="methodname">Imagick::setImagePage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.embossimage.php" class="methodname">Imagick::embossImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageinterpolatemethod.php" class="methodname">Imagick::getImageInterpolateMethod()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageprofile.php" class="methodname">Imagick::setImageProfile()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.enhanceimage.php" class="methodname">Imagick::enhanceImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageiterations.php" class="methodname">Imagick::getImageIterations()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageproperty.php" class="methodname">Imagick::setImageProperty()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.equalizeimage.php" class="methodname">Imagick::equalizeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagemattecolor.php" class="methodname">Imagick::getImageMatteColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageredprimary.php" class="methodname">Imagick::setImageRedPrimary()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.evaluateimage.php" class="methodname">Imagick::evaluateImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagematte.php" class="methodname">Imagick::getImageMatte()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagerenderingintent.php" class="methodname">Imagick::setImageRenderingIntent()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.flattenimages.php" class="methodname">Imagick::flattenImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagepage.php" class="methodname">Imagick::getImagePage()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageresolution.php" class="methodname">Imagick::setImageResolution()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.flipimage.php" class="methodname">Imagick::flipImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagepixelcolor.php" class="methodname">Imagick::getImagePixelColor()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagescene.php" class="methodname">Imagick::setImageScene()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.flopimage.php" class="methodname">Imagick::flopImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageprofile.php" class="methodname">Imagick::getImageProfile()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagetickspersecond.php" class="methodname">Imagick::setImageTicksPerSecond()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td class="empty">&nbsp;</td>
      <td><span class="methodname"><a href="imagick.getimageproperty.php" class="methodname">Imagick::getImageProperty()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagetype.php" class="methodname">Imagick::setImageType()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.fximage.php" class="methodname">Imagick::fxImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageredprimary.php" class="methodname">Imagick::getImageRedPrimary()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimageunits.php" class="methodname">Imagick::setImageUnits()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.gammaimage.php" class="methodname">Imagick::gammaImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageregion.php" class="methodname">Imagick::getImageRegion()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagevirtualpixelmethod.php" class="methodname">Imagick::setImageVirtualPixelMethod()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.gaussianblurimage.php" class="methodname">Imagick::gaussianBlurImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagerenderingintent.php" class="methodname">Imagick::getImageRenderingIntent()</a></span></td>
      <td><span class="methodname"><a href="imagick.setimagewhitepoint.php" class="methodname">Imagick::setImageWhitepoint()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.implodeimage.php" class="methodname">Imagick::implodeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageresolution.php" class="methodname">Imagick::getImageResolution()</a></span></td>
      <td><span class="methodname"><a href="imagick.setinterlacescheme.php" class="methodname">Imagick::setInterlaceScheme()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.levelimage.php" class="methodname">Imagick::levelImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagescene.php" class="methodname">Imagick::getImageScene()</a></span></td>
      <td><span class="methodname"><a href="imagick.setoption.php" class="methodname">Imagick::setOption()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.linearstretchimage.php" class="methodname">Imagick::linearStretchImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagesignature.php" class="methodname">Imagick::getImageSignature()</a></span></td>
      <td><span class="methodname"><a href="imagick.setpage.php" class="methodname">Imagick::setPage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.magnifyimage.php" class="methodname">Imagick::magnifyImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagetickspersecond.php" class="methodname">Imagick::getImageTicksPerSecond()</a></span></td>
      <td><span class="methodname"><a href="imagick.setresolution.php" class="methodname">Imagick::setResolution()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.mattefloodfillimage.php" class="methodname">Imagick::matteFloodFillImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagetotalinkdensity.php" class="methodname">Imagick::getImageTotalInkDensity()</a></span></td>
      <td><span class="methodname"><a href="imagick.setresourcelimit.php" class="methodname">Imagick::setResourceLimit()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.medianfilterimage.php" class="methodname">Imagick::medianFilterImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagetype.php" class="methodname">Imagick::getImageType()</a></span></td>
      <td><span class="methodname"><a href="imagick.setsamplingfactors.php" class="methodname">Imagick::setSamplingFactors()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.minifyimage.php" class="methodname">Imagick::minifyImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimageunits.php" class="methodname">Imagick::getImageUnits()</a></span></td>
      <td><span class="methodname"><a href="imagick.setsizeoffset.php" class="methodname">Imagick::setSizeOffset()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.modulateimage.php" class="methodname">Imagick::modulateImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagevirtualpixelmethod.php" class="methodname">Imagick::getImageVirtualPixelMethod()</a></span></td>
      <td><span class="methodname"><a href="imagick.setsize.php" class="methodname">Imagick::setSize()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.montageimage.php" class="methodname">Imagick::montageImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagewhitepoint.php" class="methodname">Imagick::getImageWhitepoint()</a></span></td>
      <td><span class="methodname"><a href="imagick.settype.php" class="methodname">Imagick::setType()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.morphimages.php" class="methodname">Imagick::morphImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagewidth.php" class="methodname">Imagick::getImageWidth()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.mosaicimages.php" class="methodname">Imagick::mosaicImages()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimage.php" class="methodname">Imagick::getImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.motionblurimage.php" class="methodname">Imagick::motionBlurImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getinterlacescheme.php" class="methodname">Imagick::getInterlaceScheme()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.negateimage.php" class="methodname">Imagick::negateImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getnumberimages.php" class="methodname">Imagick::getNumberImages()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.normalizeimage.php" class="methodname">Imagick::normalizeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getoption.php" class="methodname">Imagick::getOption()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.oilpaintimage.php" class="methodname">Imagick::oilPaintImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getpackagename.php" class="methodname">Imagick::getPackageName()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.optimizeimagelayers.php" class="methodname">Imagick::optimizeImageLayers()</a></span></td>
      <td><span class="methodname"><a href="imagick.getpage.php" class="methodname">Imagick::getPage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.paintopaqueimage.php" class="methodname">Imagick::paintOpaqueImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getpixeliterator.php" class="methodname">Imagick::getPixelIterator()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.painttransparentimage.php" class="methodname">Imagick::paintTransparentImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getpixelregioniterator.php" class="methodname">Imagick::getPixelRegionIterator()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.posterizeimage.php" class="methodname">Imagick::posterizeImage()</a></span></td>

      <td><span class="methodname"><a href="imagick.getquantumdepth.php" class="methodname">Imagick::getQuantumDepth()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.radialblurimage.php" class="methodname">Imagick::radialBlurImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getquantumrange.php" class="methodname">Imagick::getQuantumRange()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.raiseimage.php" class="methodname">Imagick::raiseImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getresourcelimit.php" class="methodname">Imagick::getResourceLimit()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.randomthresholdimage.php" class="methodname">Imagick::randomThresholdImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getresource.php" class="methodname">Imagick::getResource()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.reducenoiseimage.php" class="methodname">Imagick::reduceNoiseImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getsamplingfactors.php" class="methodname">Imagick::getSamplingFactors()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.render.php" class="methodname">Imagick::render()</a></span></td>
      <td><span class="methodname"><a href="imagick.getsizeoffset.php" class="methodname">Imagick::getSizeOffset()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.resampleimage.php" class="methodname">Imagick::resampleImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getsize.php" class="methodname">Imagick::getSize()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.resizeimage.php" class="methodname">Imagick::resizeImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.identifyimage.php" class="methodname">Imagick::identifyImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.rollimage.php" class="methodname">Imagick::rollImage()</a></span></td>
      <td><span class="methodname"><a href="imagick.getimagesize.php" class="methodname">Imagick::getImageSize()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.rotateimage.php" class="methodname">Imagick::rotateImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.sampleimage.php" class="methodname">Imagick::sampleImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.scaleimage.php" class="methodname">Imagick::scaleImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.separateimagechannel.php" class="methodname">Imagick::separateImageChannel()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.sepiatoneimage.php" class="methodname">Imagick::sepiaToneImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.shadeimage.php" class="methodname">Imagick::shadeImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.shadowimage.php" class="methodname">Imagick::shadowImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.sharpenimage.php" class="methodname">Imagick::sharpenImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.shaveimage.php" class="methodname">Imagick::shaveImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.shearimage.php" class="methodname">Imagick::shearImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.sigmoidalcontrastimage.php" class="methodname">Imagick::sigmoidalContrastImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.sketchimage.php" class="methodname">Imagick::sketchImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.solarizeimage.php" class="methodname">Imagick::solarizeImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.spliceimage.php" class="methodname">Imagick::spliceImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.spreadimage.php" class="methodname">Imagick::spreadImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.steganoimage.php" class="methodname">Imagick::steganoImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.stereoimage.php" class="methodname">Imagick::stereoImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.stripimage.php" class="methodname">Imagick::stripImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.swirlimage.php" class="methodname">Imagick::swirlImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.textureimage.php" class="methodname">Imagick::textureImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.thresholdimage.php" class="methodname">Imagick::thresholdImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.thumbnailimage.php" class="methodname">Imagick::thumbnailImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.tintimage.php" class="methodname">Imagick::tintImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.transverseimage.php" class="methodname">Imagick::transverseImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.trimimage.php" class="methodname">Imagick::trimImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.uniqueimagecolors.php" class="methodname">Imagick::uniqueImageColors()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.unsharpmaskimage.php" class="methodname">Imagick::unsharpMaskImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.vignetteimage.php" class="methodname">Imagick::vignetteImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.waveimage.php" class="methodname">Imagick::waveImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><span class="methodname"><a href="imagick.whitethresholdimage.php" class="methodname">Imagick::whiteThresholdImage()</a></span></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

    </tbody>
   
  </table>

 </div>
 </div>
 













































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="imagick.adaptiveblurimage.php">Imagick::adaptiveBlurImage</a> — Adds adaptive blur filter to image</li><li><a href="imagick.adaptiveresizeimage.php">Imagick::adaptiveResizeImage</a> — Adaptively resize image with data dependent triangulation</li><li><a href="imagick.adaptivesharpenimage.php">Imagick::adaptiveSharpenImage</a> — Adaptively sharpen the image</li><li><a href="imagick.adaptivethresholdimage.php">Imagick::adaptiveThresholdImage</a> — Selects a threshold for each pixel based on a range of intensity</li><li><a href="imagick.addimage.php">Imagick::addImage</a> — Adds new image to Imagick object image list</li><li><a href="imagick.addnoiseimage.php">Imagick::addNoiseImage</a> — Adds random noise to the image</li><li><a href="imagick.affinetransformimage.php">Imagick::affineTransformImage</a> — Transforms an image</li><li><a href="imagick.animateimages.php">Imagick::animateImages</a> — Animates an image or images</li><li><a href="imagick.annotateimage.php">Imagick::annotateImage</a> — Annotates an image with text</li><li><a href="imagick.appendimages.php">Imagick::appendImages</a> — Append a set of images</li><li><a href="imagick.autolevelimage.php">Imagick::autoLevelImage</a> — Adjusts the levels of a particular image channel</li><li><a href="imagick.averageimages.php">Imagick::averageImages</a> — Average a set of images</li><li><a href="imagick.blackthresholdimage.php">Imagick::blackThresholdImage</a> — Forces all pixels below the threshold into black</li><li><a href="imagick.blueshiftimage.php">Imagick::blueShiftImage</a> — Mutes the colors of the image</li><li><a href="imagick.blurimage.php">Imagick::blurImage</a> — Adds blur filter to image</li><li><a href="imagick.borderimage.php">Imagick::borderImage</a> — Surrounds the image with a border</li><li><a href="imagick.brightnesscontrastimage.php">Imagick::brightnessContrastImage</a> — Change the brightness and/or contrast of an image</li><li><a href="imagick.charcoalimage.php">Imagick::charcoalImage</a> — Simulates a charcoal drawing</li><li><a href="imagick.chopimage.php">Imagick::chopImage</a> — Removes a region of an image and trims</li><li><a href="imagick.clampimage.php">Imagick::clampImage</a> — Restricts the color range from 0 to the quantum depth.</li><li><a href="imagick.clear.php">Imagick::clear</a> — Clears all resources associated to Imagick object</li><li><a href="imagick.clipimage.php">Imagick::clipImage</a> — Clips along the first path from the 8BIM profile</li><li><a href="imagick.clipimagepath.php">Imagick::clipImagePath</a> — Clips along the named paths from the 8BIM profile, if present</li><li><a href="imagick.clippathimage.php">Imagick::clipPathImage</a> — Clips along the named paths from the 8BIM profile</li><li><a href="imagick.clone.php">Imagick::clone</a> — Makes an exact copy of the Imagick object</li><li><a href="imagick.clutimage.php">Imagick::clutImage</a> — Replaces colors in the image</li><li><a href="imagick.coalesceimages.php">Imagick::coalesceImages</a> — Composites a set of images</li><li><a href="imagick.colorfloodfillimage.php">Imagick::colorFloodfillImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.colorizeimage.php">Imagick::colorizeImage</a> — Blends the fill color with the image</li><li><a href="imagick.colormatriximage.php">Imagick::colorMatrixImage</a> — Apply color transformation to an image</li><li><a href="imagick.combineimages.php">Imagick::combineImages</a> — Combines one or more images into a single image</li><li><a href="imagick.commentimage.php">Imagick::commentImage</a> — Adds a comment to your image</li><li><a href="imagick.compareimagechannels.php">Imagick::compareImageChannels</a> — Returns the difference in one or more images</li><li><a href="imagick.compareimagelayers.php">Imagick::compareImageLayers</a> — Returns the maximum bounding region between images</li><li><a href="imagick.compareimages.php">Imagick::compareImages</a> — Compares an image to a reconstructed image</li><li><a href="imagick.compositeimage.php">Imagick::compositeImage</a> — Composite one image onto another</li><li><a href="imagick.construct.php">Imagick::__construct</a> — The Imagick constructor</li><li><a href="imagick.contrastimage.php">Imagick::contrastImage</a> — Change the contrast of the image</li><li><a href="imagick.contraststretchimage.php">Imagick::contrastStretchImage</a> — Enhances the contrast of a color image</li><li><a href="imagick.convolveimage.php">Imagick::convolveImage</a> — Applies a custom convolution kernel to the image</li><li><a href="imagick.count.php">Imagick::count</a> — Get the number of images</li><li><a href="imagick.cropimage.php">Imagick::cropImage</a> — Extracts a region of the image</li><li><a href="imagick.cropthumbnailimage.php">Imagick::cropThumbnailImage</a> — Creates a crop thumbnail</li><li><a href="imagick.current.php">Imagick::current</a> — Returns a reference to the current Imagick object</li><li><a href="imagick.cyclecolormapimage.php">Imagick::cycleColormapImage</a> — Displaces an image's colormap</li><li><a href="imagick.decipherimage.php">Imagick::decipherImage</a> — Deciphers an image</li><li><a href="imagick.deconstructimages.php">Imagick::deconstructImages</a> — Returns certain pixel differences between images</li><li><a href="imagick.deleteimageartifact.php">Imagick::deleteImageArtifact</a> — Delete image artifact</li><li><a href="imagick.deleteimageproperty.php">Imagick::deleteImageProperty</a> — Deletes an image property</li><li><a href="imagick.deskewimage.php">Imagick::deskewImage</a> — Removes skew from the image</li><li><a href="imagick.despeckleimage.php">Imagick::despeckleImage</a> — Reduces the speckle noise in an image</li><li><a href="imagick.destroy.php">Imagick::destroy</a> — Destroys the Imagick object</li><li><a href="imagick.displayimage.php">Imagick::displayImage</a> — Displays an image</li><li><a href="imagick.displayimages.php">Imagick::displayImages</a> — Displays an image or image sequence</li><li><a href="imagick.distortimage.php">Imagick::distortImage</a> — Distorts an image using various distortion methods</li><li><a href="imagick.drawimage.php">Imagick::drawImage</a> — Renders the ImagickDraw object on the current image</li><li><a href="imagick.edgeimage.php">Imagick::edgeImage</a> — Enhance edges within the image</li><li><a href="imagick.embossimage.php">Imagick::embossImage</a> — Returns a grayscale image with a three-dimensional effect</li><li><a href="imagick.encipherimage.php">Imagick::encipherImage</a> — Enciphers an image</li><li><a href="imagick.enhanceimage.php">Imagick::enhanceImage</a> — Improves the quality of a noisy image</li><li><a href="imagick.equalizeimage.php">Imagick::equalizeImage</a> — Equalizes the image histogram</li><li><a href="imagick.evaluateimage.php">Imagick::evaluateImage</a> — Applies an expression to an image</li><li><a href="imagick.exportimagepixels.php">Imagick::exportImagePixels</a> — Exports raw image pixels</li><li><a href="imagick.extentimage.php">Imagick::extentImage</a> — Set image size</li><li><a href="imagick.filter.php">Imagick::filter</a> — Applies a custom convolution kernel to the image</li><li><a href="imagick.flattenimages.php">Imagick::flattenImages</a> — Merges a sequence of images</li><li><a href="imagick.flipimage.php">Imagick::flipImage</a> — Creates a vertical mirror image</li><li><a href="imagick.floodfillpaintimage.php">Imagick::floodFillPaintImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.flopimage.php">Imagick::flopImage</a> — Creates a horizontal mirror image</li><li><a href="imagick.forwardfouriertransformimage.php">Imagick::forwardFourierTransformImage</a> — Implements the discrete Fourier transform (DFT)</li><li><a href="imagick.frameimage.php">Imagick::frameImage</a> — Adds a simulated three-dimensional border</li><li><a href="imagick.functionimage.php">Imagick::functionImage</a> — Applies a function on the image</li><li><a href="imagick.fximage.php">Imagick::fxImage</a> — Evaluate expression for each pixel in the image</li><li><a href="imagick.gammaimage.php">Imagick::gammaImage</a> — Gamma-corrects an image</li><li><a href="imagick.gaussianblurimage.php">Imagick::gaussianBlurImage</a> — Blurs an image</li><li><a href="imagick.getcolorspace.php">Imagick::getColorspace</a> — Gets the colorspace</li><li><a href="imagick.getcompression.php">Imagick::getCompression</a> — Gets the object compression type</li><li><a href="imagick.getcompressionquality.php">Imagick::getCompressionQuality</a> — Gets the object compression quality</li><li><a href="imagick.getcopyright.php">Imagick::getCopyright</a> — Returns the ImageMagick API copyright as a string</li><li><a href="imagick.getfilename.php">Imagick::getFilename</a> — The filename associated with an image sequence</li><li><a href="imagick.getfont.php">Imagick::getFont</a> — Gets font</li><li><a href="imagick.getformat.php">Imagick::getFormat</a> — Returns the format of the Imagick object</li><li><a href="imagick.getgravity.php">Imagick::getGravity</a> — Gets the gravity</li><li><a href="imagick.gethomeurl.php">Imagick::getHomeURL</a> — Returns the ImageMagick home URL</li><li><a href="imagick.getimage.php">Imagick::getImage</a> — Returns a new Imagick object</li><li><a href="imagick.getimagealphachannel.php">Imagick::getImageAlphaChannel</a> — Checks if the image has an alpha channel</li><li><a href="imagick.getimageartifact.php">Imagick::getImageArtifact</a> — Get image artifact</li><li><a href="imagick.getimageattribute.php">Imagick::getImageAttribute</a> — Returns a named attribute</li><li><a href="imagick.getimagebackgroundcolor.php">Imagick::getImageBackgroundColor</a> — Returns the image background color</li><li><a href="imagick.getimageblob.php">Imagick::getImageBlob</a> — Returns the image sequence as a blob</li><li><a href="imagick.getimageblueprimary.php">Imagick::getImageBluePrimary</a> — Returns the chromaticy blue primary point</li><li><a href="imagick.getimagebordercolor.php">Imagick::getImageBorderColor</a> — Returns the image border color</li><li><a href="imagick.getimagechanneldepth.php">Imagick::getImageChannelDepth</a> — Gets the depth for a particular image channel</li><li><a href="imagick.getimagechanneldistortion.php">Imagick::getImageChannelDistortion</a> — Compares image channels of an image to a reconstructed image</li><li><a href="imagick.getimagechanneldistortions.php">Imagick::getImageChannelDistortions</a> — Gets channel distortions</li><li><a href="imagick.getimagechannelextrema.php">Imagick::getImageChannelExtrema</a> — Gets the extrema for one or more image channels</li><li><a href="imagick.getimagechannelkurtosis.php">Imagick::getImageChannelKurtosis</a> — The getImageChannelKurtosis purpose</li><li><a href="imagick.getimagechannelmean.php">Imagick::getImageChannelMean</a> — Gets the mean and standard deviation</li><li><a href="imagick.getimagechannelrange.php">Imagick::getImageChannelRange</a> — Gets channel range</li><li><a href="imagick.getimagechannelstatistics.php">Imagick::getImageChannelStatistics</a> — Returns statistics for each channel in the image</li><li><a href="imagick.getimageclipmask.php">Imagick::getImageClipMask</a> — Gets image clip mask</li><li><a href="imagick.getimagecolormapcolor.php">Imagick::getImageColormapColor</a> — Returns the color of the specified colormap index</li><li><a href="imagick.getimagecolors.php">Imagick::getImageColors</a> — Gets the number of unique colors in the image</li><li><a href="imagick.getimagecolorspace.php">Imagick::getImageColorspace</a> — Gets the image colorspace</li><li><a href="imagick.getimagecompose.php">Imagick::getImageCompose</a> — Returns the composite operator associated with the image</li><li><a href="imagick.getimagecompression.php">Imagick::getImageCompression</a> — Gets the current image's compression type</li><li><a href="imagick.getimagecompressionquality.php">Imagick::getImageCompressionQuality</a> — Gets the current image's compression quality</li><li><a href="imagick.getimagedelay.php">Imagick::getImageDelay</a> — Gets the image delay</li><li><a href="imagick.getimagedepth.php">Imagick::getImageDepth</a> — Gets the image depth</li><li><a href="imagick.getimagedispose.php">Imagick::getImageDispose</a> — Gets the image disposal method</li><li><a href="imagick.getimagedistortion.php">Imagick::getImageDistortion</a> — Compares an image to a reconstructed image</li><li><a href="imagick.getimageextrema.php">Imagick::getImageExtrema</a> — Gets the extrema for the image</li><li><a href="imagick.getimagefilename.php">Imagick::getImageFilename</a> — Returns the filename of a particular image in a sequence</li><li><a href="imagick.getimageformat.php">Imagick::getImageFormat</a> — Returns the format of a particular image in a sequence</li><li><a href="imagick.getimagegamma.php">Imagick::getImageGamma</a> — Gets the image gamma</li><li><a href="imagick.getimagegeometry.php">Imagick::getImageGeometry</a> — Gets the width and height as an associative array</li><li><a href="imagick.getimagegravity.php">Imagick::getImageGravity</a> — Gets the image gravity</li><li><a href="imagick.getimagegreenprimary.php">Imagick::getImageGreenPrimary</a> — Returns the chromaticy green primary point</li><li><a href="imagick.getimageheight.php">Imagick::getImageHeight</a> — Returns the image height</li><li><a href="imagick.getimagehistogram.php">Imagick::getImageHistogram</a> — Gets the image histogram</li><li><a href="imagick.getimageindex.php">Imagick::getImageIndex</a> — Gets the index of the current active image</li><li><a href="imagick.getimageinterlacescheme.php">Imagick::getImageInterlaceScheme</a> — Gets the image interlace scheme</li><li><a href="imagick.getimageinterpolatemethod.php">Imagick::getImageInterpolateMethod</a> — Returns the interpolation method</li><li><a href="imagick.getimageiterations.php">Imagick::getImageIterations</a> — Gets the image iterations</li><li><a href="imagick.getimagelength.php">Imagick::getImageLength</a> — Returns the image length in bytes</li><li><a href="imagick.getimagematte.php">Imagick::getImageMatte</a> — Return if the image has a matte channel</li><li><a href="imagick.getimagemattecolor.php">Imagick::getImageMatteColor</a> — Returns the image matte color</li><li><a href="imagick.getimagemimetype.php">Imagick::getImageMimeType</a> — Returns the image mime-type</li><li><a href="imagick.getimageorientation.php">Imagick::getImageOrientation</a> — Gets the image orientation</li><li><a href="imagick.getimagepage.php">Imagick::getImagePage</a> — Returns the page geometry</li><li><a href="imagick.getimagepixelcolor.php">Imagick::getImagePixelColor</a> — Returns the color of the specified pixel</li><li><a href="imagick.getimageprofile.php">Imagick::getImageProfile</a> — Returns the named image profile</li><li><a href="imagick.getimageprofiles.php">Imagick::getImageProfiles</a> — Returns the image profiles</li><li><a href="imagick.getimageproperties.php">Imagick::getImageProperties</a> — Returns the image properties</li><li><a href="imagick.getimageproperty.php">Imagick::getImageProperty</a> — Returns the named image property</li><li><a href="imagick.getimageredprimary.php">Imagick::getImageRedPrimary</a> — Returns the chromaticity red primary point</li><li><a href="imagick.getimageregion.php">Imagick::getImageRegion</a> — Extracts a region of the image</li><li><a href="imagick.getimagerenderingintent.php">Imagick::getImageRenderingIntent</a> — Gets the image rendering intent</li><li><a href="imagick.getimageresolution.php">Imagick::getImageResolution</a> — Gets the image X and Y resolution</li><li><a href="imagick.getimagesblob.php">Imagick::getImagesBlob</a> — Returns all image sequences as a blob</li><li><a href="imagick.getimagescene.php">Imagick::getImageScene</a> — Gets the image scene</li><li><a href="imagick.getimagesignature.php">Imagick::getImageSignature</a> — Generates an SHA-256 message digest</li><li><a href="imagick.getimagesize.php">Imagick::getImageSize</a> — Returns the image length in bytes</li><li><a href="imagick.getimagetickspersecond.php">Imagick::getImageTicksPerSecond</a> — Gets the image ticks-per-second</li><li><a href="imagick.getimagetotalinkdensity.php">Imagick::getImageTotalInkDensity</a> — Gets the image total ink density</li><li><a href="imagick.getimagetype.php">Imagick::getImageType</a> — Gets the potential image type</li><li><a href="imagick.getimageunits.php">Imagick::getImageUnits</a> — Gets the image units of resolution</li><li><a href="imagick.getimagevirtualpixelmethod.php">Imagick::getImageVirtualPixelMethod</a> — Returns the virtual pixel method</li><li><a href="imagick.getimagewhitepoint.php">Imagick::getImageWhitePoint</a> — Returns the chromaticity white point</li><li><a href="imagick.getimagewidth.php">Imagick::getImageWidth</a> — Returns the image width</li><li><a href="imagick.getinterlacescheme.php">Imagick::getInterlaceScheme</a> — Gets the object interlace scheme</li><li><a href="imagick.getiteratorindex.php">Imagick::getIteratorIndex</a> — Gets the index of the current active image</li><li><a href="imagick.getnumberimages.php">Imagick::getNumberImages</a> — Returns the number of images in the object</li><li><a href="imagick.getoption.php">Imagick::getOption</a> — Returns a value associated with the specified key</li><li><a href="imagick.getpackagename.php">Imagick::getPackageName</a> — Returns the ImageMagick package name</li><li><a href="imagick.getpage.php">Imagick::getPage</a> — Returns the page geometry</li><li><a href="imagick.getpixeliterator.php">Imagick::getPixelIterator</a> — Returns a MagickPixelIterator</li><li><a href="imagick.getpixelregioniterator.php">Imagick::getPixelRegionIterator</a> — Get an ImagickPixelIterator for an image section</li><li><a href="imagick.getpointsize.php">Imagick::getPointSize</a> — Gets point size</li><li><a href="imagick.getquantum.php">Imagick::getQuantum</a> — Returns the ImageMagick quantum range</li><li><a href="imagick.getquantumdepth.php">Imagick::getQuantumDepth</a> — Gets the quantum depth</li><li><a href="imagick.getquantumrange.php">Imagick::getQuantumRange</a> — Returns the Imagick quantum range</li><li><a href="imagick.getregistry.php">Imagick::getRegistry</a> — Get a StringRegistry entry</li><li><a href="imagick.getreleasedate.php">Imagick::getReleaseDate</a> — Returns the ImageMagick release date</li><li><a href="imagick.getresource.php">Imagick::getResource</a> — Returns the specified resource's memory usage</li><li><a href="imagick.getresourcelimit.php">Imagick::getResourceLimit</a> — Returns the specified resource limit</li><li><a href="imagick.getsamplingfactors.php">Imagick::getSamplingFactors</a> — Gets the horizontal and vertical sampling factor</li><li><a href="imagick.getsize.php">Imagick::getSize</a> — Returns the size associated with the Imagick object</li><li><a href="imagick.getsizeoffset.php">Imagick::getSizeOffset</a> — Returns the size offset</li><li><a href="imagick.getversion.php">Imagick::getVersion</a> — Returns the ImageMagick API version</li><li><a href="imagick.haldclutimage.php">Imagick::haldClutImage</a> — Replaces colors in the image</li><li><a href="imagick.hasnextimage.php">Imagick::hasNextImage</a> — Checks if the object has more images</li><li><a href="imagick.haspreviousimage.php">Imagick::hasPreviousImage</a> — Checks if the object has a previous image</li><li><a href="imagick.identifyformat.php">Imagick::identifyFormat</a> — Formats a string with image details</li><li><a href="imagick.identifyimage.php">Imagick::identifyImage</a> — Identifies an image and fetches attributes</li><li><a href="imagick.implodeimage.php">Imagick::implodeImage</a> — Creates a new image as a copy</li><li><a href="imagick.importimagepixels.php">Imagick::importImagePixels</a> — Imports image pixels</li><li><a href="imagick.inversefouriertransformimage.php">Imagick::inverseFourierTransformImage</a> — Implements the inverse discrete Fourier transform (DFT)</li><li><a href="imagick.labelimage.php">Imagick::labelImage</a> — Adds a label to an image</li><li><a href="imagick.levelimage.php">Imagick::levelImage</a> — Adjusts the levels of an image</li><li><a href="imagick.linearstretchimage.php">Imagick::linearStretchImage</a> — Stretches with saturation the image intensity</li><li><a href="imagick.liquidrescaleimage.php">Imagick::liquidRescaleImage</a> — Animates an image or images</li><li><a href="imagick.listregistry.php">Imagick::listRegistry</a> — List all the registry settings</li><li><a href="imagick.magnifyimage.php">Imagick::magnifyImage</a> — Scales an image proportionally 2x</li><li><a href="imagick.mapimage.php">Imagick::mapImage</a> — Replaces the colors of an image with the closest color from a reference image</li><li><a href="imagick.mattefloodfillimage.php">Imagick::matteFloodfillImage</a> — Changes the transparency value of a color</li><li><a href="imagick.medianfilterimage.php">Imagick::medianFilterImage</a> — Applies a digital filter</li><li><a href="imagick.mergeimagelayers.php">Imagick::mergeImageLayers</a> — Merges image layers</li><li><a href="imagick.minifyimage.php">Imagick::minifyImage</a> — Scales an image proportionally to half its size</li><li><a href="imagick.modulateimage.php">Imagick::modulateImage</a> — Control the brightness, saturation, and hue</li><li><a href="imagick.montageimage.php">Imagick::montageImage</a> — Creates a composite image</li><li><a href="imagick.morphimages.php">Imagick::morphImages</a> — Method morphs a set of images</li><li><a href="imagick.morphology.php">Imagick::morphology</a> — Applies a user supplied kernel to the image according to the given morphology method.</li><li><a href="imagick.mosaicimages.php">Imagick::mosaicImages</a> — Forms a mosaic from images</li><li><a href="imagick.motionblurimage.php">Imagick::motionBlurImage</a> — Simulates motion blur</li><li><a href="imagick.negateimage.php">Imagick::negateImage</a> — Negates the colors in the reference image</li><li><a href="imagick.newimage.php">Imagick::newImage</a> — Creates a new image</li><li><a href="imagick.newpseudoimage.php">Imagick::newPseudoImage</a> — Creates a new image</li><li><a href="imagick.nextimage.php">Imagick::nextImage</a> — Moves to the next image</li><li><a href="imagick.normalizeimage.php">Imagick::normalizeImage</a> — Enhances the contrast of a color image</li><li><a href="imagick.oilpaintimage.php">Imagick::oilPaintImage</a> — Simulates an oil painting</li><li><a href="imagick.opaquepaintimage.php">Imagick::opaquePaintImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.optimizeimagelayers.php">Imagick::optimizeImageLayers</a> — Removes repeated portions of images to optimize</li><li><a href="imagick.orderedposterizeimage.php">Imagick::orderedPosterizeImage</a> — Performs an ordered dither</li><li><a href="imagick.paintfloodfillimage.php">Imagick::paintFloodfillImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.paintopaqueimage.php">Imagick::paintOpaqueImage</a> — Change any pixel that matches color</li><li><a href="imagick.painttransparentimage.php">Imagick::paintTransparentImage</a> — Changes any pixel that matches color with the color defined by fill</li><li><a href="imagick.pingimage.php">Imagick::pingImage</a> — Fetch basic attributes about the image</li><li><a href="imagick.pingimageblob.php">Imagick::pingImageBlob</a> — Quickly fetch attributes</li><li><a href="imagick.pingimagefile.php">Imagick::pingImageFile</a> — Get basic image attributes in a lightweight manner</li><li><a href="imagick.polaroidimage.php">Imagick::polaroidImage</a> — Simulates a Polaroid picture</li><li><a href="imagick.posterizeimage.php">Imagick::posterizeImage</a> — Reduces the image to a limited number of color level</li><li><a href="imagick.previewimages.php">Imagick::previewImages</a> — Quickly pin-point appropriate parameters for image processing</li><li><a href="imagick.previousimage.php">Imagick::previousImage</a> — Move to the previous image in the object</li><li><a href="imagick.profileimage.php">Imagick::profileImage</a> — Adds or removes a profile from an image</li><li><a href="imagick.quantizeimage.php">Imagick::quantizeImage</a> — Analyzes the colors within a reference image</li><li><a href="imagick.quantizeimages.php">Imagick::quantizeImages</a> — Analyzes the colors within a sequence of images</li><li><a href="imagick.queryfontmetrics.php">Imagick::queryFontMetrics</a> — Returns an array representing the font metrics</li><li><a href="imagick.queryfonts.php">Imagick::queryFonts</a> — Returns the configured fonts</li><li><a href="imagick.queryformats.php">Imagick::queryFormats</a> — Returns formats supported by Imagick</li><li><a href="imagick.radialblurimage.php">Imagick::radialBlurImage</a> — Radial blurs an image</li><li><a href="imagick.raiseimage.php">Imagick::raiseImage</a> — Creates a simulated 3d button-like effect</li><li><a href="imagick.randomthresholdimage.php">Imagick::randomThresholdImage</a> — Creates a high-contrast, two-color image</li><li><a href="imagick.readimage.php">Imagick::readImage</a> — Reads image from filename</li><li><a href="imagick.readimageblob.php">Imagick::readImageBlob</a> — Reads image from a binary string</li><li><a href="imagick.readimagefile.php">Imagick::readImageFile</a> — Reads image from open filehandle</li><li><a href="imagick.readimages.php">Imagick::readimages</a> — Reads image from an array of filenames</li><li><a href="imagick.recolorimage.php">Imagick::recolorImage</a> — Recolors image</li><li><a href="imagick.reducenoiseimage.php">Imagick::reduceNoiseImage</a> — Smooths the contours of an image</li><li><a href="imagick.remapimage.php">Imagick::remapImage</a> — Remaps image colors</li><li><a href="imagick.removeimage.php">Imagick::removeImage</a> — Removes an image from the image list</li><li><a href="imagick.removeimageprofile.php">Imagick::removeImageProfile</a> — Removes the named image profile and returns it</li><li><a href="imagick.render.php">Imagick::render</a> — Renders all preceding drawing commands</li><li><a href="imagick.resampleimage.php">Imagick::resampleImage</a> — Resample image to desired resolution</li><li><a href="imagick.resetimagepage.php">Imagick::resetImagePage</a> — Reset image page</li><li><a href="imagick.resizeimage.php">Imagick::resizeImage</a> — Scales an image</li><li><a href="imagick.rollimage.php">Imagick::rollImage</a> — Offsets an image</li><li><a href="imagick.rotateimage.php">Imagick::rotateImage</a> — Rotates an image</li><li><a href="imagick.rotationalblurimage.php">Imagick::rotationalBlurImage</a> — Rotational blurs an image</li><li><a href="imagick.roundcorners.php">Imagick::roundCorners</a> — Rounds image corners</li><li><a href="imagick.sampleimage.php">Imagick::sampleImage</a> — Scales an image with pixel sampling</li><li><a href="imagick.scaleimage.php">Imagick::scaleImage</a> — Scales the size of an image</li><li><a href="imagick.segmentimage.php">Imagick::segmentImage</a> — Segments an image</li><li><a href="imagick.selectiveblurimage.php">Imagick::selectiveBlurImage</a> — Selectively blur an image within a contrast threshold</li><li><a href="imagick.separateimagechannel.php">Imagick::separateImageChannel</a> — Separates a channel from the image</li><li><a href="imagick.sepiatoneimage.php">Imagick::sepiaToneImage</a> — Sepia tones an image</li><li><a href="imagick.setbackgroundcolor.php">Imagick::setBackgroundColor</a> — Sets the object's default background color</li><li><a href="imagick.setcolorspace.php">Imagick::setColorspace</a> — Set colorspace</li><li><a href="imagick.setcompression.php">Imagick::setCompression</a> — Sets the object's default compression type</li><li><a href="imagick.setcompressionquality.php">Imagick::setCompressionQuality</a> — Sets the object's default compression quality</li><li><a href="imagick.setfilename.php">Imagick::setFilename</a> — Sets the filename before you read or write the image</li><li><a href="imagick.setfirstiterator.php">Imagick::setFirstIterator</a> — Sets the Imagick iterator to the first image</li><li><a href="imagick.setfont.php">Imagick::setFont</a> — Sets font</li><li><a href="imagick.setformat.php">Imagick::setFormat</a> — Sets the format of the Imagick object</li><li><a href="imagick.setgravity.php">Imagick::setGravity</a> — Sets the gravity</li><li><a href="imagick.setimage.php">Imagick::setImage</a> — Replaces image in the object</li><li><a href="imagick.setimagealphachannel.php">Imagick::setImageAlphaChannel</a> — Sets image alpha channel</li><li><a href="imagick.setimageartifact.php">Imagick::setImageArtifact</a> — Set image artifact</li><li><a href="imagick.setimageattribute.php">Imagick::setImageAttribute</a> — Sets an image attribute</li><li><a href="imagick.setimagebackgroundcolor.php">Imagick::setImageBackgroundColor</a> — Sets the image background color</li><li><a href="imagick.setimagebias.php">Imagick::setImageBias</a> — Sets the image bias for any method that convolves an image</li><li><a href="imagick.setimagebiasquantum.php">Imagick::setImageBiasQuantum</a> — Sets the image bias</li><li><a href="imagick.setimageblueprimary.php">Imagick::setImageBluePrimary</a> — Sets the image chromaticity blue primary point</li><li><a href="imagick.setimagebordercolor.php">Imagick::setImageBorderColor</a> — Sets the image border color</li><li><a href="imagick.setimagechanneldepth.php">Imagick::setImageChannelDepth</a> — Sets the depth of a particular image channel</li><li><a href="imagick.setimageclipmask.php">Imagick::setImageClipMask</a> — Sets image clip mask</li><li><a href="imagick.setimagecolormapcolor.php">Imagick::setImageColormapColor</a> — Sets the color of the specified colormap index</li><li><a href="imagick.setimagecolorspace.php">Imagick::setImageColorspace</a> — Sets the image colorspace</li><li><a href="imagick.setimagecompose.php">Imagick::setImageCompose</a> — Sets the image composite operator</li><li><a href="imagick.setimagecompression.php">Imagick::setImageCompression</a> — Sets the image compression</li><li><a href="imagick.setimagecompressionquality.php">Imagick::setImageCompressionQuality</a> — Sets the image compression quality</li><li><a href="imagick.setimagedelay.php">Imagick::setImageDelay</a> — Sets the image delay</li><li><a href="imagick.setimagedepth.php">Imagick::setImageDepth</a> — Sets the image depth</li><li><a href="imagick.setimagedispose.php">Imagick::setImageDispose</a> — Sets the image disposal method</li><li><a href="imagick.setimageextent.php">Imagick::setImageExtent</a> — Sets the image size</li><li><a href="imagick.setimagefilename.php">Imagick::setImageFilename</a> — Sets the filename of a particular image</li><li><a href="imagick.setimageformat.php">Imagick::setImageFormat</a> — Sets the format of a particular image</li><li><a href="imagick.setimagegamma.php">Imagick::setImageGamma</a> — Sets the image gamma</li><li><a href="imagick.setimagegravity.php">Imagick::setImageGravity</a> — Sets the image gravity</li><li><a href="imagick.setimagegreenprimary.php">Imagick::setImageGreenPrimary</a> — Sets the image chromaticity green primary point</li><li><a href="imagick.setimageindex.php">Imagick::setImageIndex</a> — Set the iterator position</li><li><a href="imagick.setimageinterlacescheme.php">Imagick::setImageInterlaceScheme</a> — Sets the image compression</li><li><a href="imagick.setimageinterpolatemethod.php">Imagick::setImageInterpolateMethod</a> — Sets the image interpolate pixel method</li><li><a href="imagick.setimageiterations.php">Imagick::setImageIterations</a> — Sets the image iterations</li><li><a href="imagick.setimagematte.php">Imagick::setImageMatte</a> — Sets the image matte channel</li><li><a href="imagick.setimagemattecolor.php">Imagick::setImageMatteColor</a> — Sets the image matte color</li><li><a href="imagick.setimageopacity.php">Imagick::setImageOpacity</a> — Sets the image opacity level</li><li><a href="imagick.setimageorientation.php">Imagick::setImageOrientation</a> — Sets the image orientation</li><li><a href="imagick.setimagepage.php">Imagick::setImagePage</a> — Sets the page geometry of the image</li><li><a href="imagick.setimageprofile.php">Imagick::setImageProfile</a> — Adds a named profile to the Imagick object</li><li><a href="imagick.setimageproperty.php">Imagick::setImageProperty</a> — Sets an image property</li><li><a href="imagick.setimageredprimary.php">Imagick::setImageRedPrimary</a> — Sets the image chromaticity red primary point</li><li><a href="imagick.setimagerenderingintent.php">Imagick::setImageRenderingIntent</a> — Sets the image rendering intent</li><li><a href="imagick.setimageresolution.php">Imagick::setImageResolution</a> — Sets the image resolution</li><li><a href="imagick.setimagescene.php">Imagick::setImageScene</a> — Sets the image scene</li><li><a href="imagick.setimagetickspersecond.php">Imagick::setImageTicksPerSecond</a> — Sets the image ticks-per-second</li><li><a href="imagick.setimagetype.php">Imagick::setImageType</a> — Sets the image type</li><li><a href="imagick.setimageunits.php">Imagick::setImageUnits</a> — Sets the image units of resolution</li><li><a href="imagick.setimagevirtualpixelmethod.php">Imagick::setImageVirtualPixelMethod</a> — Sets the image virtual pixel method</li><li><a href="imagick.setimagewhitepoint.php">Imagick::setImageWhitePoint</a> — Sets the image chromaticity white point</li><li><a href="imagick.setinterlacescheme.php">Imagick::setInterlaceScheme</a> — Sets the image compression</li><li><a href="imagick.setiteratorindex.php">Imagick::setIteratorIndex</a> — Set the iterator position</li><li><a href="imagick.setlastiterator.php">Imagick::setLastIterator</a> — Sets the Imagick iterator to the last image</li><li><a href="imagick.setoption.php">Imagick::setOption</a> — Set an option</li><li><a href="imagick.setpage.php">Imagick::setPage</a> — Sets the page geometry of the Imagick object</li><li><a href="imagick.setpointsize.php">Imagick::setPointSize</a> — Sets point size</li><li><a href="imagick.setprogressmonitor.php">Imagick::setProgressMonitor</a> — Set a callback to be called during processing</li><li><a href="imagick.setregistry.php">Imagick::setRegistry</a> — Sets the ImageMagick registry entry named key to value</li><li><a href="imagick.setresolution.php">Imagick::setResolution</a> — Sets the image resolution</li><li><a href="imagick.setresourcelimit.php">Imagick::setResourceLimit</a> — Sets the limit for a particular resource</li><li><a href="imagick.setsamplingfactors.php">Imagick::setSamplingFactors</a> — Sets the image sampling factors</li><li><a href="imagick.setsize.php">Imagick::setSize</a> — Sets the size of the Imagick object</li><li><a href="imagick.setsizeoffset.php">Imagick::setSizeOffset</a> — Sets the size and offset of the Imagick object</li><li><a href="imagick.settype.php">Imagick::setType</a> — Sets the image type attribute</li><li><a href="imagick.shadeimage.php">Imagick::shadeImage</a> — Creates a 3D effect</li><li><a href="imagick.shadowimage.php">Imagick::shadowImage</a> — Simulates an image shadow</li><li><a href="imagick.sharpenimage.php">Imagick::sharpenImage</a> — Sharpens an image</li><li><a href="imagick.shaveimage.php">Imagick::shaveImage</a> — Shaves pixels from the image edges</li><li><a href="imagick.shearimage.php">Imagick::shearImage</a> — Creating a parallelogram</li><li><a href="imagick.sigmoidalcontrastimage.php">Imagick::sigmoidalContrastImage</a> — Adjusts the contrast of an image</li><li><a href="imagick.sketchimage.php">Imagick::sketchImage</a> — Simulates a pencil sketch</li><li><a href="imagick.smushimages.php">Imagick::smushImages</a> — Takes all images from the current image pointer to the end of the image list and smushs them</li><li><a href="imagick.solarizeimage.php">Imagick::solarizeImage</a> — Applies a solarizing effect to the image</li><li><a href="imagick.sparsecolorimage.php">Imagick::sparseColorImage</a> — Interpolates colors</li><li><a href="imagick.spliceimage.php">Imagick::spliceImage</a> — Splices a solid color into the image</li><li><a href="imagick.spreadimage.php">Imagick::spreadImage</a> — Randomly displaces each pixel in a block</li><li><a href="imagick.statisticimage.php">Imagick::statisticImage</a> — Modifies image using a statistics function</li><li><a href="imagick.steganoimage.php">Imagick::steganoImage</a> — Hides a digital watermark within the image</li><li><a href="imagick.stereoimage.php">Imagick::stereoImage</a> — Composites two images</li><li><a href="imagick.stripimage.php">Imagick::stripImage</a> — Strips an image of all profiles and comments</li><li><a href="imagick.subimagematch.php">Imagick::subImageMatch</a> — Searches for a subimage in the current image and returns a similarity image</li><li><a href="imagick.swirlimage.php">Imagick::swirlImage</a> — Swirls the pixels about the center of the image</li><li><a href="imagick.textureimage.php">Imagick::textureImage</a> — Repeatedly tiles the texture image</li><li><a href="imagick.thresholdimage.php">Imagick::thresholdImage</a> — Changes the value of individual pixels based on a threshold</li><li><a href="imagick.thumbnailimage.php">Imagick::thumbnailImage</a> — Changes the size of an image</li><li><a href="imagick.tintimage.php">Imagick::tintImage</a> — Applies a color vector to each pixel in the image</li><li><a href="imagick.tostring.php">Imagick::__toString</a> — Returns the image as a string</li><li><a href="imagick.transformimage.php">Imagick::transformImage</a> — Convenience method for setting crop size and the image geometry</li><li><a href="imagick.transformimagecolorspace.php">Imagick::transformImageColorspace</a> — Transforms an image to a new colorspace</li><li><a href="imagick.transparentpaintimage.php">Imagick::transparentPaintImage</a> — Paints pixels transparent</li><li><a href="imagick.transposeimage.php">Imagick::transposeImage</a> — Creates a vertical mirror image</li><li><a href="imagick.transverseimage.php">Imagick::transverseImage</a> — Creates a horizontal mirror image</li><li><a href="imagick.trimimage.php">Imagick::trimImage</a> — Remove edges from the image</li><li><a href="imagick.uniqueimagecolors.php">Imagick::uniqueImageColors</a> — Discards all but one of any pixel color</li><li><a href="imagick.unsharpmaskimage.php">Imagick::unsharpMaskImage</a> — Sharpens an image</li><li><a href="imagick.valid.php">Imagick::valid</a> — Checks if the current item is valid</li><li><a href="imagick.vignetteimage.php">Imagick::vignetteImage</a> — Adds vignette filter to the image</li><li><a href="imagick.waveimage.php">Imagick::waveImage</a> — Applies wave filter to the image</li><li><a href="imagick.whitethresholdimage.php">Imagick::whiteThresholdImage</a> — Force all pixels above the threshold into white</li><li><a href="imagick.writeimage.php">Imagick::writeImage</a> — Writes an image to the specified filename</li><li><a href="imagick.writeimagefile.php">Imagick::writeImageFile</a> — Writes an image to a filehandle</li><li><a href="imagick.writeimages.php">Imagick::writeImages</a> — Writes an image or image sequence</li><li><a href="imagick.writeimagesfile.php">Imagick::writeImagesFile</a> — Writes frames to a filehandle</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/imagick.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.imagick%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.imagick&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.imagick.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86550">  <div class="votes">
    <div id="Vu86550">
    <a href="/manual/vote-note.php?id=86550&amp;page=class.imagick&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86550">
    <a href="/manual/vote-note.php?id=86550&amp;page=class.imagick&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86550" title="59% like this...">
    5
    </div>
  </div>
  <a href="#86550" class="name">
  <strong class="user"><em>StealthFox at live dot com</em></strong></a><a class="genanchor" href="#86550"> &para;</a><div class="date" title="2008-10-23 07:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86550">
<div class="phpcode"><code><span class="html">Users looking to save  with these functions should know it can be done easily, for example
<br />
<br /><span class="default">&lt;?php
<br />header </span><span class="keyword">(</span><span class="string">"Content-Type: image/</span><span class="keyword">{</span><span class="default">$Imagick</span><span class="keyword">-&gt;</span><span class="default">getImageFormat</span><span class="keyword">()}</span><span class="string">"</span><span class="keyword">);
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$Imagick</span><span class="keyword">-&gt;</span><span class="default">getImageBlob </span><span class="keyword">();
<br />echo </span><span class="default">$data</span><span class="keyword">;
<br /></span><span class="default">file_put_contents </span><span class="keyword">(</span><span class="string">'test.png'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />That would display the image, and then save it to test.png. Such things are helpful especially when you need to reload images after creating them or save for later. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="111197">  <div class="votes">
    <div id="Vu111197">
    <a href="/manual/vote-note.php?id=111197&amp;page=class.imagick&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111197">
    <a href="/manual/vote-note.php?id=111197&amp;page=class.imagick&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111197" title="52% like this...">
    1
    </div>
  </div>
  <a href="#111197" class="name">
  <strong class="user"><em>benkuhl at gmail dot com</em></strong></a><a class="genanchor" href="#111197"> &para;</a><div class="date" title="2013-01-24 07:52"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111197">
<div class="phpcode"><code><span class="html">When using this library with PDFs, the term "image" applies to a page where the pointer begins at the last page of the document.<br /><br /><span class="default">&lt;?php<br /><br />$document </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">(</span><span class="string">'myPdf.pdf'</span><span class="keyword">); </span><span class="comment">//2 page PDF<br /><br /></span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">getNumberImages</span><span class="keyword">(); </span><span class="comment">//returns 2<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">hasNextImage</span><span class="keyword">()); </span><span class="comment">//returns false - remember, we're on the last page<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">hasPreviousImage</span><span class="keyword">()); </span><span class="comment">//returns true<br /><br /></span><span class="default">?&gt;<br /></span><br />If you need to do more than generate thumbnails from a PDF, use XPDF: <a href="http://www.foolabs.com/xpdf/home.html" rel="nofollow" target="_blank">http://www.foolabs.com/xpdf/home.html</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.imagick&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.imagick.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.imagick.php">ImageMagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.imagick.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="imagick.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="imagick.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="class.imagick.php" title="Imagick">Imagick</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickdraw.php" title="ImagickDraw">ImagickDraw</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickpixel.php" title="ImagickPixel">ImagickPixel</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickpixeliterator.php" title="ImagickPixelIterator">ImagickPixelIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickkernel.php" title="ImagickKernel">ImagickKernel</a>
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
