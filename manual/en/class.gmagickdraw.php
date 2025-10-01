<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: GmagickDraw - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.gmagickdraw.php">
 <link rel="shorturl" href="https://www.php.net/gmagickdraw">
 <link rel="alternate" href="https://www.php.net/gmagickdraw" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.gmagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/gmagick.writeimage.php">
 <link rel="next" href="https://www.php.net/manual/en/gmagickdraw.annotate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.gmagickdraw.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.gmagickdraw.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.gmagickdraw.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.gmagickdraw.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.gmagickdraw.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.gmagickdraw.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.gmagickdraw.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.gmagickdraw.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.gmagickdraw.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.gmagickdraw.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.gmagickdraw.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The GmagickDraw class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: GmagickDraw - Manual" />
<meta name="twitter:description" content="The GmagickDraw class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: GmagickDraw - Manual" />
<meta itemprop="description" content="The GmagickDraw class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The GmagickDraw class" />

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
        <a href="gmagickdraw.annotate.php">
          GmagickDraw::annotate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gmagick.writeimage.php">
          &laquo; Gmagick::writeimage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.gmagick.php'>Gmagick</a></li>      </ul>
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
            <option value='en/class.gmagickdraw.php' selected="selected">English</option>
            <option value='de/class.gmagickdraw.php'>German</option>
            <option value='es/class.gmagickdraw.php'>Spanish</option>
            <option value='fr/class.gmagickdraw.php'>French</option>
            <option value='it/class.gmagickdraw.php'>Italian</option>
            <option value='ja/class.gmagickdraw.php'>Japanese</option>
            <option value='pt_BR/class.gmagickdraw.php'>Brazilian Portuguese</option>
            <option value='ru/class.gmagickdraw.php'>Russian</option>
            <option value='tr/class.gmagickdraw.php'>Turkish</option>
            <option value='uk/class.gmagickdraw.php'>Ukrainian</option>
            <option value='zh/class.gmagickdraw.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.gmagickdraw" class="reference">

 <h1 class="title">The GmagickDraw class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL gmagick &gt;= Unknown)</p>


  <div class="section" id="gmagickdraw.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    
   </p>
  </div>


  <div class="section" id="gmagickdraw.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">GmagickDraw</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.annotate.php" class="methodname">annotate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.arc.php" class="methodname">arc</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sx</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sy</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ex</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ey</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sd</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ed</code></span><br>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.bezier.php" class="methodname">bezier</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$coordinate_array</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.ellipse.php" class="methodname">ellipse</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ox</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$oy</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$rx</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ry</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$start</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$end</code></span><br>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getfillcolor.php" class="methodname">getfillcolor</a></span>(): <span class="type"><a href="class.gmagickpixel.php" class="type GmagickPixel">GmagickPixel</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getfillopacity.php" class="methodname">getfillopacity</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getfont.php" class="methodname">getfont</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getfontsize.php" class="methodname">getfontsize</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getfontstyle.php" class="methodname">getfontstyle</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getfontweight.php" class="methodname">getfontweight</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getstrokecolor.php" class="methodname">getstrokecolor</a></span>(): <span class="type"><a href="class.gmagickpixel.php" class="type GmagickPixel">GmagickPixel</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getstrokeopacity.php" class="methodname">getstrokeopacity</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.getstrokewidth.php" class="methodname">getstrokewidth</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.gettextdecoration.php" class="methodname">gettextdecoration</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.gettextencoding.php" class="methodname">gettextencoding</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.line.php" class="methodname">line</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sx</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$sy</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ex</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ey</code></span><br>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.point.php" class="methodname">point</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.polygon.php" class="methodname">polygon</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$coordinates</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.polyline.php" class="methodname">polyline</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$coordinate_array</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.rectangle.php" class="methodname">rectangle</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y2</code></span><br>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.rotate.php" class="methodname">rotate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$degrees</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.roundrectangle.php" class="methodname">roundrectangle</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$rx</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$ry</code></span><br>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.scale.php" class="methodname">scale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setfillcolor.php" class="methodname">setfillcolor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$color</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setfillopacity.php" class="methodname">setfillopacity</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$fill_opacity</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setfont.php" class="methodname">setfont</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$font</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setfontsize.php" class="methodname">setfontsize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$pointsize</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setfontstyle.php" class="methodname">setfontstyle</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$style</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setfontweight.php" class="methodname">setfontweight</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$weight</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setstrokecolor.php" class="methodname">setstrokecolor</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$color</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setstrokeopacity.php" class="methodname">setstrokeopacity</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$stroke_opacity</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.setstrokewidth.php" class="methodname">setstrokewidth</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$width</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.settextdecoration.php" class="methodname">settextdecoration</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$decoration</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gmagickdraw.settextencoding.php" class="methodname">settextencoding</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$encoding</code></span>): <span class="type"><a href="class.gmagickdraw.php" class="type GmagickDraw">GmagickDraw</a></span></div>

   }</div>


  </div>

 </div>

 














































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="gmagickdraw.annotate.php">GmagickDraw::annotate</a> — Draws text on the image</li><li><a href="gmagickdraw.arc.php">GmagickDraw::arc</a> — Draws an arc</li><li><a href="gmagickdraw.bezier.php">GmagickDraw::bezier</a> — Draws a bezier curve</li><li><a href="gmagickdraw.ellipse.php">GmagickDraw::ellipse</a> — Draws an ellipse on the image</li><li><a href="gmagickdraw.getfillcolor.php">GmagickDraw::getfillcolor</a> — Returns the fill color</li><li><a href="gmagickdraw.getfillopacity.php">GmagickDraw::getfillopacity</a> — Returns the opacity used when drawing</li><li><a href="gmagickdraw.getfont.php">GmagickDraw::getfont</a> — Returns the font</li><li><a href="gmagickdraw.getfontsize.php">GmagickDraw::getfontsize</a> — Returns the font pointsize</li><li><a href="gmagickdraw.getfontstyle.php">GmagickDraw::getfontstyle</a> — Returns the font style</li><li><a href="gmagickdraw.getfontweight.php">GmagickDraw::getfontweight</a> — Returns the font weight</li><li><a href="gmagickdraw.getstrokecolor.php">GmagickDraw::getstrokecolor</a> — Returns the color used for stroking object outlines</li><li><a href="gmagickdraw.getstrokeopacity.php">GmagickDraw::getstrokeopacity</a> — Returns the opacity of stroked object outlines</li><li><a href="gmagickdraw.getstrokewidth.php">GmagickDraw::getstrokewidth</a> — Returns the width of the stroke used to draw object outlines</li><li><a href="gmagickdraw.gettextdecoration.php">GmagickDraw::gettextdecoration</a> — Returns the text decoration</li><li><a href="gmagickdraw.gettextencoding.php">GmagickDraw::gettextencoding</a> — Returns the code set used for text annotations</li><li><a href="gmagickdraw.line.php">GmagickDraw::line</a> — Draws a line</li><li><a href="gmagickdraw.point.php">GmagickDraw::point</a> — Draws a point</li><li><a href="gmagickdraw.polygon.php">GmagickDraw::polygon</a> — Draws a polygon</li><li><a href="gmagickdraw.polyline.php">GmagickDraw::polyline</a> — Draws a polyline</li><li><a href="gmagickdraw.rectangle.php">GmagickDraw::rectangle</a> — Draws a rectangle</li><li><a href="gmagickdraw.rotate.php">GmagickDraw::rotate</a> — Applies the specified rotation to the current coordinate space</li><li><a href="gmagickdraw.roundrectangle.php">GmagickDraw::roundrectangle</a> — Draws a rounded rectangle</li><li><a href="gmagickdraw.scale.php">GmagickDraw::scale</a> — Adjusts the scaling factor</li><li><a href="gmagickdraw.setfillcolor.php">GmagickDraw::setfillcolor</a> — Sets the fill color to be used for drawing filled objects</li><li><a href="gmagickdraw.setfillopacity.php">GmagickDraw::setfillopacity</a> — The setfillopacity purpose</li><li><a href="gmagickdraw.setfont.php">GmagickDraw::setfont</a> — Sets the fully-specified font to use when annotating with text</li><li><a href="gmagickdraw.setfontsize.php">GmagickDraw::setfontsize</a> — Sets the font pointsize to use when annotating with text</li><li><a href="gmagickdraw.setfontstyle.php">GmagickDraw::setfontstyle</a> — Sets the font style to use when annotating with text</li><li><a href="gmagickdraw.setfontweight.php">GmagickDraw::setfontweight</a> — Sets the font weight</li><li><a href="gmagickdraw.setstrokecolor.php">GmagickDraw::setstrokecolor</a> — Sets the color used for stroking object outlines</li><li><a href="gmagickdraw.setstrokeopacity.php">GmagickDraw::setstrokeopacity</a> — Specifies the opacity of stroked object outlines</li><li><a href="gmagickdraw.setstrokewidth.php">GmagickDraw::setstrokewidth</a> — Sets the width of the stroke used to draw object outlines</li><li><a href="gmagickdraw.settextdecoration.php">GmagickDraw::settextdecoration</a> — Specifies a decoration</li><li><a href="gmagickdraw.settextencoding.php">GmagickDraw::settextencoding</a> — Specifies the text code set</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gmagick/gmagickdraw.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.gmagickdraw%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.gmagickdraw&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.gmagickdraw.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.gmagick.php">Gmagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.gmagick.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.gmagick.php" title="Gmagick">Gmagick</a>
                        </li>
                                                <li class="current">
                            <a href="class.gmagickdraw.php" title="GmagickDraw">GmagickDraw</a>
                        </li>
                                                <li class="">
                            <a href="class.gmagickpixel.php" title="GmagickPixel">GmagickPixel</a>
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
