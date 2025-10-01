<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Closure - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.closure.php">
 <link rel="shorturl" href="https://www.php.net/closure">
 <link rel="alternate" href="https://www.php.net/closure" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.interfaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/serializable.unserialize.php">
 <link rel="next" href="https://www.php.net/manual/en/closure.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.closure.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.closure.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.closure.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.closure.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.closure.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.closure.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.closure.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.closure.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.closure.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.closure.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.closure.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Closure class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Closure - Manual" />
<meta name="twitter:description" content="The Closure class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Closure - Manual" />
<meta itemprop="description" content="The Closure class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Closure class" />

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
        <a href="closure.construct.php">
          Closure::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="serializable.unserialize.php">
          &laquo; Serializable::unserialize        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.interfaces.php'>Predefined Interfaces and Classes</a></li>      </ul>
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
            <option value='en/class.closure.php' selected="selected">English</option>
            <option value='de/class.closure.php'>German</option>
            <option value='es/class.closure.php'>Spanish</option>
            <option value='fr/class.closure.php'>French</option>
            <option value='it/class.closure.php'>Italian</option>
            <option value='ja/class.closure.php'>Japanese</option>
            <option value='pt_BR/class.closure.php'>Brazilian Portuguese</option>
            <option value='ru/class.closure.php'>Russian</option>
            <option value='tr/class.closure.php'>Turkish</option>
            <option value='uk/class.closure.php'>Ukrainian</option>
            <option value='zh/class.closure.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.closure" class="reference">

 <h1 class="title">The Closure class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>


  <div class="section" id="closure.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Class used to represent <a href="functions.anonymous.php" class="link">anonymous
    functions</a>.
   </p>

   <p class="para">
    Anonymous functions yield objects of this type.
    This class has methods that allow
    further control of the anonymous function after it has been created.
   </p>

   <p class="para">
    Besides the methods listed here, this class also has an
    <code class="literal">__invoke</code> method. This is for consistency with other
    classes that implement <a href="language.oop5.magic.php#language.oop5.magic.invoke" class="link">calling
    magic</a>, as this method is not used for calling the function.
   </p>

  </div>


  <div class="section" id="closure.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">final</span>
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">Closure</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">private</span> <span class="methodname"><a href="closure.construct.php" class="methodname">__construct</a></span>()</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="closure.bind.php" class="methodname">bind</a></span>(<span class="methodparam"><span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span> <code class="parameter">$closure</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$newThis</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$newScope</code><span class="initializer"> = &quot;static&quot;</span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="closure.bindto.php" class="methodname">bindTo</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$newThis</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$newScope</code><span class="initializer"> = &quot;static&quot;</span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="closure.call.php" class="methodname">call</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$newThis</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$args</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="closure.fromcallable.php" class="methodname">fromCallable</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span></div>

   }</div>


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
        The output of <span class="methodname"><strong>Closure::__debugInfo()</strong></span> now includes the
        name, line, and file of the closure.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>

 </div>

 




 




 




 




 





<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="closure.construct.php">Closure::__construct</a> — Constructor that disallows instantiation</li><li><a href="closure.bind.php">Closure::bind</a> — Duplicates a closure with a specific bound object and class scope</li><li><a href="closure.bindto.php">Closure::bindTo</a> — Duplicates the closure with a new bound object and class scope</li><li><a href="closure.call.php">Closure::call</a> — Binds and calls the closure</li><li><a href="closure.fromcallable.php">Closure::fromCallable</a> — Converts a callable into a closure</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/closure.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.closure%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.closure&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.closure.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117427">  <div class="votes">
    <div id="Vu117427">
    <a href="/manual/vote-note.php?id=117427&amp;page=class.closure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117427">
    <a href="/manual/vote-note.php?id=117427&amp;page=class.closure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117427" title="84% like this...">
    476
    </div>
  </div>
  <a href="#117427" class="name">
  <strong class="user"><em>chuck at bajax dot us</em></strong></a><a class="genanchor" href="#117427"> &para;</a><div class="date" title="2015-06-09 04:16"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117427">
<div class="phpcode"><code><span class="html">This caused me some confusion a while back when I was still learning what closures were and how to use them, but what is referred to as a closure in PHP isn't the same thing as what they call closures in other languages (E.G. JavaScript).<br /><br />In JavaScript, a closure can be thought of as a scope, when you define a function, it silently inherits the scope it's defined in, which is called its closure, and it retains that no matter where it's used.  It's possible for multiple functions to share the same closure, and they can have access to multiple closures as long as they are within their accessible scope.<br /><br />In PHP,  a closure is a callable class, to which you've bound your parameters manually.<br /><br />It's a slight distinction but one I feel bears mentioning.</span></code></div>
  </div>
 </div>
  <div class="note" id="119135">  <div class="votes">
    <div id="Vu119135">
    <a href="/manual/vote-note.php?id=119135&amp;page=class.closure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119135">
    <a href="/manual/vote-note.php?id=119135&amp;page=class.closure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119135" title="74% like this...">
    112
    </div>
  </div>
  <a href="#119135" class="name">
  <strong class="user"><em>joe dot scylla at gmail dot com</em></strong></a><a class="genanchor" href="#119135"> &para;</a><div class="date" title="2016-04-08 08:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119135">
<div class="phpcode"><code><span class="html">Small little trick. You can use a closures in itself via reference.<br /><br />Example to delete a directory with all subdirectories and files:<br /><br /><span class="default">&lt;?php<br />$deleteDirectory </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$deleteDirectory </span><span class="keyword">= function(</span><span class="default">$path</span><span class="keyword">) use (&amp;</span><span class="default">$deleteDirectory</span><span class="keyword">) {<br />    </span><span class="default">$resource </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />    while ((</span><span class="default">$item </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />        if (</span><span class="default">$item </span><span class="keyword">!== </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$item </span><span class="keyword">!== </span><span class="string">".."</span><span class="keyword">) {<br />            if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$item</span><span class="keyword">)) {<br />                </span><span class="default">$deleteDirectory</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$item</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$item</span><span class="keyword">);<br />            }<br />        }<br />    }<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">);<br />    </span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />};<br /></span><span class="default">$deleteDirectory</span><span class="keyword">(</span><span class="string">"path/to/directoy"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117469">  <div class="votes">
    <div id="Vu117469">
    <a href="/manual/vote-note.php?id=117469&amp;page=class.closure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117469">
    <a href="/manual/vote-note.php?id=117469&amp;page=class.closure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117469" title="70% like this...">
    75
    </div>
  </div>
  <a href="#117469" class="name">
  <strong class="user"><em>luk4z_7 at hotmail dot com</em></strong></a><a class="genanchor" href="#117469"> &para;</a><div class="date" title="2015-06-14 05:42"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117469">
<div class="phpcode"><code><span class="html">Scope<br />A closure encapsulates its scope, meaning that it has no access to the scope in which it is defined or executed. It is, however, possible to inherit variables from the parent scope (where the closure is defined) into the closure with the use keyword:<br /><br />function createGreeter($who) {<br />              return function() use ($who) {<br />                  echo "Hello $who";<br />              };<br />}<br /><br />$greeter = createGreeter("World");<br />$greeter(); // Hello World<br /><br />This inherits the variables by-value, that is, a copy is made available inside the closure using its original name.<br />font: Zend Certification Study Guide.</span></code></div>
  </div>
 </div>
  <div class="note" id="126949">  <div class="votes">
    <div id="Vu126949">
    <a href="/manual/vote-note.php?id=126949&amp;page=class.closure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126949">
    <a href="/manual/vote-note.php?id=126949&amp;page=class.closure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126949" title="54% like this...">
    3
    </div>
  </div>
  <a href="#126949" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#126949"> &para;</a><div class="date" title="2022-03-21 05:41"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126949">
<div class="phpcode"><code><span class="html">compare closures:<br /><span class="default">&lt;?php <br /></span><span class="keyword">(string) new </span><span class="default">ReflectionFunction</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">) === (string) new </span><span class="default">ReflectionFunction</span><span class="keyword">(</span><span class="default">$fn2</span><span class="keyword">)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.closure&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.closure.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.interfaces.php">Predefined Interfaces and Classes</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.traversable.php" title="Traversable">Traversable</a>
                        </li>
                                                <li class="">
                            <a href="class.iterator.php" title="Iterator">Iterator</a>
                        </li>
                                                <li class="">
                            <a href="class.iteratoraggregate.php" title="IteratorAggregate">IteratorAggregate</a>
                        </li>
                                                <li class="">
                            <a href="class.internaliterator.php" title="InternalIterator">InternalIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.throwable.php" title="Throwable">Throwable</a>
                        </li>
                                                <li class="">
                            <a href="class.countable.php" title="Countable">Countable</a>
                        </li>
                                                <li class="">
                            <a href="class.arrayaccess.php" title="ArrayAccess">ArrayAccess</a>
                        </li>
                                                <li class="">
                            <a href="class.serializable.php" title="Serializable">Serializable</a>
                        </li>
                                                <li class="current">
                            <a href="class.closure.php" title="Closure">Closure</a>
                        </li>
                                                <li class="">
                            <a href="class.stdclass.php" title="stdClass">stdClass</a>
                        </li>
                                                <li class="">
                            <a href="class.generator.php" title="Generator">Generator</a>
                        </li>
                                                <li class="">
                            <a href="class.fiber.php" title="Fiber">Fiber</a>
                        </li>
                                                <li class="">
                            <a href="class.weakreference.php" title="WeakReference">WeakReference</a>
                        </li>
                                                <li class="">
                            <a href="class.weakmap.php" title="WeakMap">WeakMap</a>
                        </li>
                                                <li class="">
                            <a href="class.stringable.php" title="Stringable">Stringable</a>
                        </li>
                                                <li class="">
                            <a href="class.unitenum.php" title="UnitEnum">UnitEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.backedenum.php" title="BackedEnum">BackedEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.sensitiveparametervalue.php" title="SensitiveParameterValue">SensitiveParameterValue</a>
                        </li>
                                                <li class="">
                            <a href="class.php-incomplete-class.php" title="_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class">_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class</a>
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
