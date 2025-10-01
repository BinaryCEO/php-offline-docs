<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagefttext - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagefttext.php">
 <link rel="shorturl" href="https://www.php.net/imagefttext">
 <link rel="alternate" href="https://www.php.net/imagefttext" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imageftbbox.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagegammacorrect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagefttext.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagefttext.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagefttext.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagefttext.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagefttext.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagefttext.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagefttext.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagefttext.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagefttext.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagefttext.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagefttext.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Write text to the image using fonts using FreeType 2" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagefttext - Manual" />
<meta name="twitter:description" content="Write text to the image using fonts using FreeType 2" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagefttext - Manual" />
<meta itemprop="description" content="Write text to the image using fonts using FreeType 2" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Write text to the image using fonts using FreeType 2" />

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
        <a href="function.imagegammacorrect.php">
          imagegammacorrect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imageftbbox.php">
          &laquo; imageftbbox        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.image.php'>GD</a></li>      <li><a href='ref.image.php'>GD and Image Functions</a></li>      </ul>
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
            <option value='en/function.imagefttext.php' selected="selected">English</option>
            <option value='de/function.imagefttext.php'>German</option>
            <option value='es/function.imagefttext.php'>Spanish</option>
            <option value='fr/function.imagefttext.php'>French</option>
            <option value='it/function.imagefttext.php'>Italian</option>
            <option value='ja/function.imagefttext.php'>Japanese</option>
            <option value='pt_BR/function.imagefttext.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagefttext.php'>Russian</option>
            <option value='tr/function.imagefttext.php'>Turkish</option>
            <option value='uk/function.imagefttext.php'>Ukrainian</option>
            <option value='zh/function.imagefttext.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagefttext" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagefttext</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.7, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagefttext</span> &mdash; <span class="dc-title">Write text to the image using fonts using FreeType 2</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagefttext-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagefttext</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$size</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$font_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Prior to PHP 8.0.0, <span class="function"><strong>imagefttext()</strong></span> was an extended variant of
    <span class="function"><a href="function.imagettftext.php" class="function">imagettftext()</a></span> which additionally supported the
    <code class="parameter">options</code>.
    As of PHP 8.0.0, <span class="function"><a href="function.imagettftext.php" class="function">imagettftext()</a></span> is an alias of <span class="function"><strong>imagefttext()</strong></span>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagefttext-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">
       The font size to use in points.
      </p>
     </dd>
    
    
     <dt><code class="parameter">angle</code></dt>
     <dd>
      <p class="para"> 
       The angle in degrees, with 0 degrees being left-to-right reading text.
       Higher values represent a counter-clockwise rotation. For example, a 
       value of 90 would result in bottom-to-top reading text.
      </p>
     </dd>
    
    
     <dt><code class="parameter">x</code></dt>
     <dd>
      <p class="para">
       The coordinates given by <code class="parameter">x</code> and
       <code class="parameter">y</code> will define the basepoint of the first
       character (roughly the lower-left corner of the character). This
       is different from the <span class="function"><a href="function.imagestring.php" class="function">imagestring()</a></span>, where
       <code class="parameter">x</code> and <code class="parameter">y</code> define the
       upper-left corner of the first character. For example, &quot;top left&quot;
       is 0, 0.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y</code></dt>
     <dd>
      <p class="para">
       The y-ordinate. This sets the position of the fonts baseline, not the
       very bottom of the character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       The index of the desired color for the text, see 
       <span class="function"><a href="function.imagecolorexact.php" class="function">imagecolorexact()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">font_filename</code></dt>
     <dd>
      <p class="para">
       The path to the TrueType font you wish to use.
      </p>
      <p class="para">
       Depending on which version of the GD library PHP is using, <em>when
       <code class="parameter">font_filename</code> does not begin with a leading
       <code class="literal">/</code> then <code class="literal">.ttf</code> will be appended</em>
       to the filename and the library will attempt to search for that
       filename along a library-defined font path.
      </p>
      <p class="para">
       In many cases where a font resides in the same directory as the script using it
       the following trick will alleviate any include problems.
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Set the environment variable for GD<br /></span><span style="color: #0000BB">putenv</span><span style="color: #007700">(</span><span style="color: #DD0000">'GDFONTPATH=' </span><span style="color: #007700">. </span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Name the font to be used (note the lack of the .ttf extension)<br /></span><span style="color: #0000BB">$font </span><span style="color: #007700">= </span><span style="color: #DD0000">'SomeFont'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </p>
     </dd>
    
    
     <dt><code class="parameter">text</code></dt>
     <dd>
      <p class="para">
       Text to be inserted into image. 
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       <table class="doctable table">
       <caption><strong>Possible array indexes for <code class="parameter">options</code></strong></caption>
        
         <thead>
          <tr>
           <th>Key</th>
           <th>Type</th>
           <th>Meaning</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><code class="literal">linespacing</code></td>
           <td><span class="type"><a href="language.types.float.php" class="type float">float</a></span></td>
           <td>Defines drawing linespacing</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagefttext-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This function returns an array defining the four points of the box, starting in the lower left and moving counter-clockwise:
   <table class="doctable informaltable">
    
     <tbody class="tbody">
      <tr>
       <td>0</td>
       <td>lower left x-coordinate</td>
      </tr>

      <tr>
       <td>1</td>
       <td>lower left y-coordinate</td>
      </tr>

      <tr>
       <td>2</td>
       <td>lower right x-coordinate</td>
      </tr>

      <tr>
       <td>3</td>
       <td>lower right y-coordinate</td>
      </tr>

      <tr>
       <td>4</td>
       <td>upper right x-coordinate</td>
      </tr>

      <tr>
       <td>5</td>
       <td>upper right y-coordinate</td>
      </tr>

      <tr>
       <td>6</td>
       <td>upper left x-coordinate</td>
      </tr>

      <tr>
       <td>7</td>
       <td>upper left y-coordinate</td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   On failure, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagefttext-changelog">
  <h3 class="title">Changelog</h3>
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
  <code class="parameter">image</code> expects a <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span>
  instance now; previously, a valid <code class="literal">gd</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagefttext-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2902">
    <p><strong>Example #1 <span class="function"><strong>imagefttext()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 300x100 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">300</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$red </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Make the background red<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">299</span><span style="color: #007700">, </span><span style="color: #0000BB">99</span><span style="color: #007700">, </span><span style="color: #0000BB">$red</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Path to our ttf font file<br /></span><span style="color: #0000BB">$font_file </span><span style="color: #007700">= </span><span style="color: #DD0000">'./arial.ttf'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Draw the text 'PHP Manual' using font size 13<br /></span><span style="color: #0000BB">imagefttext</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">13</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">105</span><span style="color: #007700">, </span><span style="color: #0000BB">55</span><span style="color: #007700">, </span><span style="color: #0000BB">$black</span><span style="color: #007700">, </span><span style="color: #0000BB">$font_file</span><span style="color: #007700">, </span><span style="color: #DD0000">'PHP Manual'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output image to the browser<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagefttext-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is only available if
PHP is compiled with freetype support (<strong class="option configure">--with-freetype-dir=DIR</strong>)
</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.imagefttext-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imageftbbox.php" class="function" rel="rdfs-seeAlso">imageftbbox()</a> - Give the bounding box of a text using fonts via freetype2</span></li>
   <li><span class="function"><a href="function.imagettftext.php" class="function" rel="rdfs-seeAlso">imagettftext()</a> - Write text to the image using TrueType fonts</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagefttext.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagefttext%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagefttext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefttext.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="49420">  <div class="votes">
    <div id="Vu49420">
    <a href="/manual/vote-note.php?id=49420&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49420">
    <a href="/manual/vote-note.php?id=49420&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49420" title="75% like this...">
    2
    </div>
  </div>
  <a href="#49420" class="name">
  <strong class="user"><em>MagicalTux at FF dot st</em></strong></a><a class="genanchor" href="#49420"> &para;</a><div class="date" title="2005-01-27 02:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49420">
<div class="phpcode"><code><span class="html">When compiling PHP with FreeType 2 support, you'll probably have some problems if - for example - you use debian and didn't compile freetype2 yourself...<br />If configure fails after saying "If configure fails, try --with-xpm-dir..." you most likely have FreeType1 installed, but not freetype2 ...<br /><br />Do this as root :<br />apt-get install libfreetype6-dev<br /><br />It took me some time to find out that apt-get install freetype2 is actually installing freetype1 ...</span></code></div>
  </div>
 </div>
  <div class="note" id="24149">  <div class="votes">
    <div id="Vu24149">
    <a href="/manual/vote-note.php?id=24149&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24149">
    <a href="/manual/vote-note.php?id=24149&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24149" title="66% like this...">
    2
    </div>
  </div>
  <a href="#24149" class="name">
  <strong class="user"><em>ben at tNOSPAManjNOSPAMo dot cnospamordots dot om</em></strong></a><a class="genanchor" href="#24149"> &para;</a><div class="date" title="2002-08-08 12:59"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24149">
<div class="phpcode"><code><span class="html">If you're interested in turning off FreeType hinting, search for the following line in the gd source (gdft.c):<br />      err = FT_Load_Glyph (face, glyph_index, FT_LOAD_DEFAULT);<br />and replace it with<br />      err = FT_Load_Glyph (face, glyph_index, FT_LOAD_NO_HINTING);<br /><br />Recompile GD, and vo?la: beauteous antialiasing.</span></code></div>
  </div>
 </div>
  <div class="note" id="93593">  <div class="votes">
    <div id="Vu93593">
    <a href="/manual/vote-note.php?id=93593&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93593">
    <a href="/manual/vote-note.php?id=93593&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93593" title="60% like this...">
    2
    </div>
  </div>
  <a href="#93593" class="name">
  <strong class="user"><em>KeepSake at crimebloc dot com</em></strong></a><a class="genanchor" href="#93593"> &para;</a><div class="date" title="2009-09-17 09:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93593">
<div class="phpcode"><code><span class="html">For a design project I am required to have spacing between characters; since imagefttext does not support this feature I have created a function which does support this. <br /><br />The arguments are identical to imagefttext, accept that (array)$extrainfo now accepts the 'character_spacing' spacing parameter. The return values are as expected, and include the image boundaries of the entire string including the character spacing.<br /><br />The downside is that $angle rotates each letter instead of rotating the entire word (could be seen as a feature on its own).<br /><br />I hope this is of some use to someone.<br />- KeepSake<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Required header (assuming we use png images)<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /><br /></span><span class="comment">// Create a basic image with a dark background.<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">300</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">21</span><span class="keyword">, </span><span class="default">21</span><span class="keyword">, </span><span class="default">21</span><span class="keyword">));<br /><br /></span><span class="comment">// Function call, arguments are the same as imagefttext, expect that (array)$extrainfo takes a new paramenter called character_spacing.<br /></span><span class="default">$imageBox </span><span class="keyword">= </span><span class="default">imagefttext2</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">), </span><span class="string">'tahomabold.ttf'</span><span class="keyword">, </span><span class="string">'The quick brown fox...'</span><span class="keyword">, array(</span><span class="string">'character_spacing' </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">));<br /><br /></span><span class="comment">// Output the file, and clear the resources<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br />function </span><span class="default">imagefttext2</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$text_angle</span><span class="keyword">, </span><span class="default">$start_x</span><span class="keyword">, </span><span class="default">$start_y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font_file</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$extra_info </span><span class="keyword">= array()) {<br />    if(</span><span class="default">$extra_info</span><span class="keyword">[</span><span class="string">'character_spacing'</span><span class="keyword">] == </span><span class="default">NULL </span><span class="keyword">|| !</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$extra_info</span><span class="keyword">[</span><span class="string">'character_spacing'</span><span class="keyword">])) {<br />        </span><span class="default">$extra_info</span><span class="keyword">[</span><span class="string">'character_spacing'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br />    }<br />    </span><span class="default">$lastX </span><span class="keyword">= </span><span class="default">$start_x </span><span class="keyword">- </span><span class="default">$extra_info</span><span class="keyword">[</span><span class="string">'character_spacing'</span><span class="keyword">];<br />    foreach(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) as </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$coordinates </span><span class="keyword">= </span><span class="default">imagefttext</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$text_angle</span><span class="keyword">, </span><span class="default">$lastX </span><span class="keyword">+ </span><span class="default">$extra_info</span><span class="keyword">[</span><span class="string">'character_spacing'</span><span class="keyword">], </span><span class="default">$start_y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font_file</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">, </span><span class="default">$extra_info</span><span class="keyword">);<br />        </span><span class="default">$lastX </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$coordinates</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$coordinates</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]);<br />    }<br />    </span><span class="comment">// Return the newly generated image box coordinates:<br />    </span><span class="keyword">return array(</span><span class="default">$start_x</span><span class="keyword">, </span><span class="default">$start_y</span><span class="keyword">, </span><span class="default">$coordinates</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$coordinates</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$coordinates</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">], </span><span class="default">$coordinates</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">], </span><span class="default">$start_x</span><span class="keyword">, </span><span class="default">$coordinates</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74207">  <div class="votes">
    <div id="Vu74207">
    <a href="/manual/vote-note.php?id=74207&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74207">
    <a href="/manual/vote-note.php?id=74207&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74207" title="66% like this...">
    1
    </div>
  </div>
  <a href="#74207" class="name">
  <strong class="user"><em>darren at badpun dot co dot uk</em></strong></a><a class="genanchor" href="#74207"> &para;</a><div class="date" title="2007-03-29 01:58"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74207">
<div class="phpcode"><code><span class="html">I had trouble working out how to accurately represent fonts in point sizes when constructing charts that had a user-customisable output DPI (basically, the user could specify the size of the chart in mm - or any other physical measure - and the DPI to create arbitrarily-sized charts to work properly in real printed documents).<br /><br />GD1 was OK as it used pixels for font rendering, but GD2 uses points, which only makes any sense if you know the DPI that it assumes when rendering text on the image surface. I have not been able to find this anywhere in this documentation but have examined the GD2 source code and it appears to assume a DPI of 96 internally. However, this can easily be customised in the GD2 source so it cannot be assumed that all PHP interpreters out there have a GD2 compiled using 96dpi internally.<br /><br />If it does, and you are using it to construct images whose target DPI is not 96, you can calculate the point size to supply to imageftbox() and imagefttext() like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* 100mm x 100mm image */<br /></span><span class="default">$imageWidth </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br /></span><span class="default">$imageHeight </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br /><br /></span><span class="comment">/* 300 dpi image, therefore image is 1181 x 1181 pixels */<br /></span><span class="default">$imageDPI </span><span class="keyword">= </span><span class="default">300</span><span class="keyword">;<br /><br /></span><span class="comment">/* unless we do this, text will be about 3 times too small */<br /></span><span class="default">$realFontSize </span><span class="keyword">= (</span><span class="default">$fontPt </span><span class="keyword">* </span><span class="default">$targetDPI</span><span class="keyword">) / </span><span class="default">96</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53333">  <div class="votes">
    <div id="Vu53333">
    <a href="/manual/vote-note.php?id=53333&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53333">
    <a href="/manual/vote-note.php?id=53333&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53333" title="100% like this...">
    2
    </div>
  </div>
  <a href="#53333" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#53333"> &para;</a><div class="date" title="2005-05-29 03:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53333">
<div class="phpcode"><code><span class="html">This function is very simular to imageffttext(), you may find the information provided on its manual page helpful:<br /><br /><a href="http://php.net/imagettftext" rel="nofollow" target="_blank">http://php.net/imagettftext</a></span></code></div>
  </div>
 </div>
  <div class="note" id="35868">  <div class="votes">
    <div id="Vu35868">
    <a href="/manual/vote-note.php?id=35868&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35868">
    <a href="/manual/vote-note.php?id=35868&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35868" title="60% like this...">
    1
    </div>
  </div>
  <a href="#35868" class="name">
  <strong class="user"><em>sebastiand at gmx dot de</em></strong></a><a class="genanchor" href="#35868"> &para;</a><div class="date" title="2003-09-17 02:07"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35868">
<div class="phpcode"><code><span class="html">After spending the evening with some work on automatically generated images, I had the idea to switch of anti-aliasing (looking, if some font would look better that way), which turned out not to be quite so easy.<br /><br />Actually you have to use the negative of the desired color to switch of antialising. I include the corresponding line from my code (line split up):<br /><br />// USE NEGATIVE OF DESIRED COLOR TO SWITCH OF ANTI-ALIASING<br />ImageFTText ($neuesBild,$fontsize,$fontangle,$TextPosX,$TextPosY,<br />-$custom_fg,$fonttype,$text,array());</span></code></div>
  </div>
 </div>
  <div class="note" id="79389">  <div class="votes">
    <div id="Vu79389">
    <a href="/manual/vote-note.php?id=79389&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79389">
    <a href="/manual/vote-note.php?id=79389&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79389" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79389" class="name">
  <strong class="user"><em>d underscore brown x at hotmail dot</em></strong></a><a class="genanchor" href="#79389"> &para;</a><div class="date" title="2007-11-24 10:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79389">
<div class="phpcode"><code><span class="html">realpath(".")<br />realpath(getenv("SCRIPT_FILENAME"));<br /><br />could be different.  This helped when setting GDFONTPATH.</span></code></div>
  </div>
 </div>
  <div class="note" id="62106">  <div class="votes">
    <div id="Vu62106">
    <a href="/manual/vote-note.php?id=62106&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62106">
    <a href="/manual/vote-note.php?id=62106&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62106" title="50% like this...">
    0
    </div>
  </div>
  <a href="#62106" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#62106"> &para;</a><div class="date" title="2006-02-20 02:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62106">
<div class="phpcode"><code><span class="html">I am using php 5.1.2 on a winxp machine. I was  getting into the TrueType fonts and wanted to see which ones would look best incorporated into web images. So I created the following script that prints out samples of all the TrueType fonts found in my C:\Windows\Fonts directory. The script takes only one request parameter - 'fsize'. It stands for font-size and lets you see each font in any size you wish -- I limited it to values between 5 and 48. Hope this helps someone other than me :)<br /><br />I apologize in advance if any of my code is not the prettiest-written php code even seen -- I have only been coding in php for the past week (I'm a perl-guy usually).<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">list(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$maxwidth</span><span class="keyword">) = array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />    </span><span class="default">$fsize </span><span class="keyword">= (int)</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'fsize'</span><span class="keyword">];<br />    if (</span><span class="default">$fsize </span><span class="keyword">&lt; </span><span class="default">5 </span><span class="keyword">or </span><span class="default">$fsize </span><span class="keyword">&gt; </span><span class="default">48</span><span class="keyword">) </span><span class="default">$fsize </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br /><br />    </span><span class="comment">// don't know how wide or tall the font samples will be.<br />    // create a huge image for now, we'll copy it smaller<br />    // later when we know how large the image needs to be.<br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">, </span><span class="default">20000</span><span class="keyword">) or die(</span><span class="string">'could not create!'</span><span class="keyword">);<br />    </span><span class="default">$clr_white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br />    </span><span class="default">$clr_black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />    </span><span class="default">$font_path </span><span class="keyword">= </span><span class="string">"C:/Windows/Fonts/"</span><span class="keyword">;<br />    </span><span class="default">$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$font_path</span><span class="keyword">);<br />    while ((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />        </span><span class="comment">// we're only dealing with TTY fonts here.<br />        </span><span class="keyword">if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">), -</span><span class="default">4</span><span class="keyword">) != </span><span class="string">'.ttf'</span><span class="keyword">) continue;<br /><br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="string">"Sample text for '</span><span class="default">$file</span><span class="string">'"</span><span class="keyword">;<br />        </span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(<br />            </span><span class="default">$fsize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">"</span><span class="keyword">{</span><span class="default">$font_path</span><span class="keyword">}{</span><span class="default">$file</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">, </span><span class="default">$str<br />        </span><span class="keyword">);<br />        </span><span class="default">$ww </span><span class="keyword">= </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">];<br />        </span><span class="default">$hh </span><span class="keyword">= </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br /><br />        </span><span class="default">imagettftext</span><span class="keyword">(<br />            </span><span class="default">$im</span><span class="keyword">, </span><span class="default">$fsize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">,<br />            </span><span class="default">$clr_black</span><span class="keyword">, </span><span class="string">"</span><span class="keyword">{</span><span class="default">$font_path</span><span class="keyword">}{</span><span class="default">$file</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">, </span><span class="default">$str<br />        </span><span class="keyword">);<br /><br />        </span><span class="default">$y </span><span class="keyword">+= </span><span class="default">$hh </span><span class="keyword">+ </span><span class="default">20</span><span class="keyword">;<br />        if (</span><span class="default">$ww </span><span class="keyword">&gt; </span><span class="default">$maxwidth</span><span class="keyword">) </span><span class="default">$maxwidth </span><span class="keyword">= </span><span class="default">$ww</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">);<br /><br />    </span><span class="comment">// ok, now we can chop off the extra space from the<br />    // 1000 x 20000 image.<br />    </span><span class="default">$im2 </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$maxwidth </span><span class="keyword">+ </span><span class="default">20</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />    </span><span class="default">imagecopyresized</span><span class="keyword">(<br />        </span><span class="default">$im2</span><span class="keyword">, </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$maxwidth </span><span class="keyword">+ </span><span class="default">20</span><span class="keyword">,<br />        </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$maxwidth </span><span class="keyword">+ </span><span class="default">20</span><span class="keyword">, </span><span class="default">$y<br />    </span><span class="keyword">);<br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59001">  <div class="votes">
    <div id="Vu59001">
    <a href="/manual/vote-note.php?id=59001&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59001">
    <a href="/manual/vote-note.php?id=59001&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59001" title="no votes...">
    0
    </div>
  </div>
  <a href="#59001" class="name">
  <strong class="user"><em>vsazel at atlas dot cz</em></strong></a><a class="genanchor" href="#59001"> &para;</a><div class="date" title="2005-11-23 09:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59001">
<div class="phpcode"><code><span class="html">If you want to get the best result in monochrome font rendering, change render_mode to FT_LOAD_RENDER. It's the last parameter of FT_Load_Glyph() function (in gdft.c).</span></code></div>
  </div>
 </div>
  <div class="note" id="54080">  <div class="votes">
    <div id="Vu54080">
    <a href="/manual/vote-note.php?id=54080&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54080">
    <a href="/manual/vote-note.php?id=54080&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54080" title="no votes...">
    0
    </div>
  </div>
  <a href="#54080" class="name">
  <strong class="user"><em>dnf at seznam dot cz</em></strong></a><a class="genanchor" href="#54080"> &para;</a><div class="date" title="2005-06-23 02:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54080">
<div class="phpcode"><code><span class="html">For negative image you must add one line after the $grayColor computation:<br /><br />$grayColor =  ~ $grayColor &amp; 0x7FFFFFF;</span></code></div>
  </div>
 </div>
  <div class="note" id="47984">  <div class="votes">
    <div id="Vu47984">
    <a href="/manual/vote-note.php?id=47984&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47984">
    <a href="/manual/vote-note.php?id=47984&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47984" title="no votes...">
    0
    </div>
  </div>
  <a href="#47984" class="name">
  <strong class="user"><em>kagaku at gmail dot com</em></strong></a><a class="genanchor" href="#47984"> &para;</a><div class="date" title="2004-12-07 08:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47984">
<div class="phpcode"><code><span class="html">I found myself in need of an align right function and found one on the imagepstext manual page. I can't imagine I'm the only person who's needed to use this, so here's a slightly modified version that works with imagefttext:<br /><br />&lt;?<br />  function align_right($string, $fontfile, $imgwidth, $fontsize){<br />    $spacing = 0;<br />    $line = array("linespacing" =&gt; $spacing);<br />    list($lx,$ly,$rx,$ry) = imageftbbox($fontsize,0,$fontfile,$string,$line);<br />    $textwidth = $rx - $lx;<br />    $imw = ($imgwidth-10-$textwidth);<br />    return $imw;<br />  }<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="39329">  <div class="votes">
    <div id="Vu39329">
    <a href="/manual/vote-note.php?id=39329&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39329">
    <a href="/manual/vote-note.php?id=39329&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39329" title="50% like this...">
    0
    </div>
  </div>
  <a href="#39329" class="name">
  <strong class="user"><em>eshenk at comcast dot net</em></strong></a><a class="genanchor" href="#39329"> &para;</a><div class="date" title="2004-01-24 02:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39329">
<div class="phpcode"><code><span class="html">I wrote a bit of code to gather all the .ttf files in the directory with this script, and randomize them to write text on a header image for my site. The only catch is the font files have to be named 1.ttf, 2.ttf etc etc.<br /><br /><span class="default">&lt;?php<br /><br />srand</span><span class="keyword">((double)</span><span class="default">microtime</span><span class="keyword">()*</span><span class="default">1234567</span><span class="keyword">); </span><span class="comment">// Start the random gizmo<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">exec</span><span class="keyword">(</span><span class="string">'ls *.jpg | wc -l'</span><span class="keyword">)) . </span><span class="string">".jpg"</span><span class="keyword">); </span><span class="comment">// Get a background<br /></span><span class="default">$font </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">exec</span><span class="keyword">(</span><span class="string">'ls *.ttf | wc -l'</span><span class="keyword">)) . </span><span class="string">".ttf"</span><span class="keyword">; </span><span class="comment">// Get a font<br /></span><span class="default">$textcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// Set text color<br /><br /></span><span class="default">$text1 </span><span class="keyword">= </span><span class="string">"shenko.homedns.org"</span><span class="keyword">; </span><span class="comment">// Here is our text<br /><br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$textcolor</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text1</span><span class="keyword">); </span><span class="comment">// Write the text with a font<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">); </span><span class="comment">// Its a JPEG<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">90</span><span class="keyword">); </span><span class="comment">// Zap it to the browser<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); </span><span class="comment">// Memory Freeupage<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71035">  <div class="votes">
    <div id="Vu71035">
    <a href="/manual/vote-note.php?id=71035&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71035">
    <a href="/manual/vote-note.php?id=71035&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71035" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#71035" class="name">
  <strong class="user"><em>cory at lavacube dot com</em></strong></a><a class="genanchor" href="#71035"> &para;</a><div class="date" title="2006-11-09 01:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71035">
<div class="phpcode"><code><span class="html">Since this function is not documented, I felt it was best that I shed some light on the extrainfo parameter.<br /><br />You can see the full documentation at the GD reference manual:<br /><a href="http://www.boutell.com/gd/manual2.0.33.html#gdImageStringFTEx" rel="nofollow" target="_blank">http://www.boutell.com/gd/manual2.0.33.html#gdImageStringFTEx</a><br /><br />Basically it accepts an array containing the following options as keys and an associated value:<br />(int) flags [more info in the GD reference manual]<br />(double/float) linespacing<br />(int) charmap<br />(int) hdpi<br />(int) vdpi<br />(string) xshow<br />(string) fontpath<br /><br />My C/C++ is not very good but this is the best I can explain. Read the documentation for more information. :-)<br /><br />A very simple example of usage would be:<br /><br /><span class="default">&lt;?php<br /><br />imagefttext</span><span class="keyword">( </span><span class="default">$img_pointer</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, [-</span><span class="default">insertsomecolour</span><span class="keyword">-], </span><span class="string">'/path/to/font.ttf'</span><span class="keyword">, </span><span class="string">"THIS IS A TEST\nTHIS IS LINE 2\nTHIS IS LINE3"</span><span class="keyword">, array(</span><span class="string">'lineheight'</span><span class="keyword">=&gt;</span><span class="default">2.0</span><span class="keyword">) );<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="27068">  <div class="votes">
    <div id="Vu27068">
    <a href="/manual/vote-note.php?id=27068&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27068">
    <a href="/manual/vote-note.php?id=27068&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27068" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#27068" class="name">
  <strong class="user"><em>jwilliam at kcr dot uky dot edu</em></strong></a><a class="genanchor" href="#27068"> &para;</a><div class="date" title="2002-11-21 12:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27068">
<div class="phpcode"><code><span class="html">Thanks for the script!  I modified it to show several fonts that I was wanting to use.  I am using GD-2.0.7, FreeType-2.1.3(text rotation fix,among others), and PHP-4.2.3 and had to include the array information to get it to work.<br /><br />Code change follows:<br />$fontfile="/usr/local/fonts/ttf/bookantbd.ttf";<br />// Waterfall of point sizes to see what Freetype 2's autohinting looks like:<br />//<br />for($i=4;$i&lt;=12;$i++){<br />  ImageFtText($image,$i,0,10,(280+$i*14),$forecolor,$fontfile, bookantbd . $i . ". " . $string, array("linespacing" =&gt; 1.0));<br />}<br /><br />John</span></code></div>
  </div>
 </div>
  <div class="note" id="98295">  <div class="votes">
    <div id="Vu98295">
    <a href="/manual/vote-note.php?id=98295&amp;page=function.imagefttext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98295">
    <a href="/manual/vote-note.php?id=98295&amp;page=function.imagefttext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98295" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#98295" class="name">
  <strong class="user"><em>php@davehirschD0TK0MM</em></strong></a><a class="genanchor" href="#98295"> &para;</a><div class="date" title="2010-06-07 12:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98295">
<div class="phpcode"><code><span class="html">I'm not sure if this is a PHP issue or an GD issue, but after upgrading to PHP 5.3.2, text written at an angle has become top-justified (so "N" and "n" have the same top, but the bottom of the "N" is lower than the bottom of the "n".  I've written a kludgy work-around, which writes the text to a non-rotated temporary image, then copies the temporary image, rotated onto the main image.  The kludginess is to get around the fact that I can't seem to extract the font info, particularly the distance between the baseline and the very bottom (I've hard-coded it as 30% of the font size)<br />I hope the bug can be fixed (if it is indeed a bug) or that others can improve this code:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// Function that draws rotated text by creating a temporary image and rotating it, since rotated text appears to be busted<br />    </span><span class="keyword">function </span><span class="default">imageTextRotated</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$inColor</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">=array()) {<br /></span><span class="comment">//        Force some demo text that contains risers and descenders:<br />//        $text = "Nlfbacejygq!";<br /><br />        </span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imageftbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">);<br />        </span><span class="default">$dropdown </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">*</span><span class="default">0.3</span><span class="keyword">;<br />        </span><span class="default">$xsize </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />        </span><span class="default">$ysize </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);<br />        </span><span class="default">$tmpImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$xsize</span><span class="keyword">*</span><span class="default">1.25</span><span class="keyword">, </span><span class="default">$ysize</span><span class="keyword">*</span><span class="default">1.25</span><span class="keyword">);        </span><span class="comment">// need the extra space to accommodate risers and descenders<br />        </span><span class="default">$transparent </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">154</span><span class="keyword">);<br />        if (!</span><span class="default">$transparent</span><span class="keyword">) {<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"Color allocate failed"</span><span class="keyword">);<br />        }<br />        </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);<br />        if (!</span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$ysize</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">)) {<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"Fill failed"</span><span class="keyword">);<br />        }<br />        </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$inColor</span><span class="keyword">);<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);<br />        if (</span><span class="default">$color </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) {<br />            </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]); <br />            if (!</span><span class="default">$color</span><span class="keyword">) {<br />                </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"Color allocate 2 failed"</span><span class="keyword">);<br />            }<br />        }<br /><br />        </span><span class="default">$newbbox </span><span class="keyword">= </span><span class="default">imagefttext</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$ysize</span><span class="keyword">*</span><span class="default">1.0</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">);<br />        </span><span class="default">$tmpImage </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);<br />        </span><span class="default">$newWidth </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">);<br />        </span><span class="default">$newHt </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">);<br />        </span><span class="default">imagecopymerge</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">-</span><span class="default">$newWidth</span><span class="keyword">+</span><span class="default">$dropdown</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">-</span><span class="default">$newHt</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newWidth</span><span class="keyword">, </span><span class="default">$newHt</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />        <br /></span><span class="comment">//        Highlight the desired starting point (baseline) with a green dot:<br />//        $green = imagecolorallocate($image, 0, 251, 0);<br />//        imagefilledellipse($image, $x, $y, 10, 10, $green);<br />        </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />-Dave</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagefttext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefttext.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.image.php">GD and Image Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gd-info.php" title="gd_&#8203;info">gd_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesize.php" title="getimagesize">getimagesize</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesizefromstring.php" title="getimagesizefromstring">getimagesizefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-extension.php" title="image_&#8203;type_&#8203;to_&#8203;extension">image_&#8203;type_&#8203;to_&#8203;extension</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-mime-type.php" title="image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type">image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.image2wbmp.php" title="image2wbmp">image2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffine.php" title="imageaffine">imageaffine</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixconcat.php" title="imageaffinematrixconcat">imageaffinematrixconcat</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixget.php" title="imageaffinematrixget">imageaffinematrixget</a>
                        </li>
                                                <li class="">
                            <a href="function.imagealphablending.php" title="imagealphablending">imagealphablending</a>
                        </li>
                                                <li class="">
                            <a href="function.imageantialias.php" title="imageantialias">imageantialias</a>
                        </li>
                                                <li class="">
                            <a href="function.imagearc.php" title="imagearc">imagearc</a>
                        </li>
                                                <li class="">
                            <a href="function.imageavif.php" title="imageavif">imageavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagebmp.php" title="imagebmp">imagebmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagechar.php" title="imagechar">imagechar</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecharup.php" title="imagecharup">imagecharup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocate.php" title="imagecolorallocate">imagecolorallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocatealpha.php" title="imagecolorallocatealpha">imagecolorallocatealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorat.php" title="imagecolorat">imagecolorat</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosest.php" title="imagecolorclosest">imagecolorclosest</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosestalpha.php" title="imagecolorclosestalpha">imagecolorclosestalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosesthwb.php" title="imagecolorclosesthwb">imagecolorclosesthwb</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolordeallocate.php" title="imagecolordeallocate">imagecolordeallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexact.php" title="imagecolorexact">imagecolorexact</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexactalpha.php" title="imagecolorexactalpha">imagecolorexactalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolormatch.php" title="imagecolormatch">imagecolormatch</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolve.php" title="imagecolorresolve">imagecolorresolve</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolvealpha.php" title="imagecolorresolvealpha">imagecolorresolvealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorset.php" title="imagecolorset">imagecolorset</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorsforindex.php" title="imagecolorsforindex">imagecolorsforindex</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorstotal.php" title="imagecolorstotal">imagecolorstotal</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolortransparent.php" title="imagecolortransparent">imagecolortransparent</a>
                        </li>
                                                <li class="">
                            <a href="function.imageconvolution.php" title="imageconvolution">imageconvolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopy.php" title="imagecopy">imagecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymerge.php" title="imagecopymerge">imagecopymerge</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymergegray.php" title="imagecopymergegray">imagecopymergegray</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopyresampled.php" title="imagecopyresampled">imagecopyresampled</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopyresized.php" title="imagecopyresized">imagecopyresized</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreate.php" title="imagecreate">imagecreate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromavif.php" title="imagecreatefromavif">imagecreatefromavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrombmp.php" title="imagecreatefrombmp">imagecreatefrombmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd.php" title="imagecreatefromgd">imagecreatefromgd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2.php" title="imagecreatefromgd2">imagecreatefromgd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2part.php" title="imagecreatefromgd2part">imagecreatefromgd2part</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgif.php" title="imagecreatefromgif">imagecreatefromgif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromjpeg.php" title="imagecreatefromjpeg">imagecreatefromjpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrompng.php" title="imagecreatefrompng">imagecreatefrompng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromstring.php" title="imagecreatefromstring">imagecreatefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromtga.php" title="imagecreatefromtga">imagecreatefromtga</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwbmp.php" title="imagecreatefromwbmp">imagecreatefromwbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwebp.php" title="imagecreatefromwebp">imagecreatefromwebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxbm.php" title="imagecreatefromxbm">imagecreatefromxbm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxpm.php" title="imagecreatefromxpm">imagecreatefromxpm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatetruecolor.php" title="imagecreatetruecolor">imagecreatetruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecrop.php" title="imagecrop">imagecrop</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecropauto.php" title="imagecropauto">imagecropauto</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedashedline.php" title="imagedashedline">imagedashedline</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedestroy.php" title="imagedestroy">imagedestroy</a>
                        </li>
                                                <li class="">
                            <a href="function.imageellipse.php" title="imageellipse">imageellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefill.php" title="imagefill">imagefill</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledarc.php" title="imagefilledarc">imagefilledarc</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledellipse.php" title="imagefilledellipse">imagefilledellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledpolygon.php" title="imagefilledpolygon">imagefilledpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledrectangle.php" title="imagefilledrectangle">imagefilledrectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilltoborder.php" title="imagefilltoborder">imagefilltoborder</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilter.php" title="imagefilter">imagefilter</a>
                        </li>
                                                <li class="">
                            <a href="function.imageflip.php" title="imageflip">imageflip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontheight.php" title="imagefontheight">imagefontheight</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontwidth.php" title="imagefontwidth">imagefontwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.imageftbbox.php" title="imageftbbox">imageftbbox</a>
                        </li>
                                                <li class="current">
                            <a href="function.imagefttext.php" title="imagefttext">imagefttext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegammacorrect.php" title="imagegammacorrect">imagegammacorrect</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd.php" title="imagegd">imagegd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd2.php" title="imagegd2">imagegd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetclip.php" title="imagegetclip">imagegetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetinterpolation.php" title="imagegetinterpolation">imagegetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegif.php" title="imagegif">imagegif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabscreen.php" title="imagegrabscreen">imagegrabscreen</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabwindow.php" title="imagegrabwindow">imagegrabwindow</a>
                        </li>
                                                <li class="">
                            <a href="function.imageinterlace.php" title="imageinterlace">imageinterlace</a>
                        </li>
                                                <li class="">
                            <a href="function.imageistruecolor.php" title="imageistruecolor">imageistruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagejpeg.php" title="imagejpeg">imagejpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagelayereffect.php" title="imagelayereffect">imagelayereffect</a>
                        </li>
                                                <li class="">
                            <a href="function.imageline.php" title="imageline">imageline</a>
                        </li>
                                                <li class="">
                            <a href="function.imageloadfont.php" title="imageloadfont">imageloadfont</a>
                        </li>
                                                <li class="">
                            <a href="function.imageopenpolygon.php" title="imageopenpolygon">imageopenpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettecopy.php" title="imagepalettecopy">imagepalettecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettetotruecolor.php" title="imagepalettetotruecolor">imagepalettetotruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepng.php" title="imagepng">imagepng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepolygon.php" title="imagepolygon">imagepolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerectangle.php" title="imagerectangle">imagerectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imageresolution.php" title="imageresolution">imageresolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerotate.php" title="imagerotate">imagerotate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesavealpha.php" title="imagesavealpha">imagesavealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagescale.php" title="imagescale">imagescale</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetbrush.php" title="imagesetbrush">imagesetbrush</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetclip.php" title="imagesetclip">imagesetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetinterpolation.php" title="imagesetinterpolation">imagesetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetpixel.php" title="imagesetpixel">imagesetpixel</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetstyle.php" title="imagesetstyle">imagesetstyle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetthickness.php" title="imagesetthickness">imagesetthickness</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesettile.php" title="imagesettile">imagesettile</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestring.php" title="imagestring">imagestring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestringup.php" title="imagestringup">imagestringup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesx.php" title="imagesx">imagesx</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesy.php" title="imagesy">imagesy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetruecolortopalette.php" title="imagetruecolortopalette">imagetruecolortopalette</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettfbbox.php" title="imagettfbbox">imagettfbbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettftext.php" title="imagettftext">imagettftext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetypes.php" title="imagetypes">imagetypes</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewbmp.php" title="imagewbmp">imagewbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewebp.php" title="imagewebp">imagewebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagexbm.php" title="imagexbm">imagexbm</a>
                        </li>
                                                <li class="">
                            <a href="function.iptcembed.php" title="iptcembed">iptcembed</a>
                        </li>
                                                <li class="">
                            <a href="function.iptcparse.php" title="iptcparse">iptcparse</a>
                        </li>
                                                <li class="">
                            <a href="function.jpeg2wbmp.php" title="jpeg2wbmp">jpeg2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.png2wbmp.php" title="png2wbmp">png2wbmp</a>
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
