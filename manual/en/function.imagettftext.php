<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagettftext - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagettftext.php">
 <link rel="shorturl" href="https://www.php.net/imagettftext">
 <link rel="alternate" href="https://www.php.net/imagettftext" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagettfbbox.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagetypes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagettftext.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagettftext.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagettftext.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagettftext.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagettftext.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagettftext.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagettftext.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagettftext.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagettftext.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagettftext.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagettftext.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Write text to the image using TrueType fonts" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagettftext - Manual" />
<meta name="twitter:description" content="Write text to the image using TrueType fonts" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagettftext - Manual" />
<meta itemprop="description" content="Write text to the image using TrueType fonts" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Write text to the image using TrueType fonts" />

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
        <a href="function.imagetypes.php">
          imagetypes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagettfbbox.php">
          &laquo; imagettfbbox        </a>
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
            <option value='en/function.imagettftext.php' selected="selected">English</option>
            <option value='de/function.imagettftext.php'>German</option>
            <option value='es/function.imagettftext.php'>Spanish</option>
            <option value='fr/function.imagettftext.php'>French</option>
            <option value='it/function.imagettftext.php'>Italian</option>
            <option value='ja/function.imagettftext.php'>Japanese</option>
            <option value='pt_BR/function.imagettftext.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagettftext.php'>Russian</option>
            <option value='tr/function.imagettftext.php'>Turkish</option>
            <option value='uk/function.imagettftext.php'>Ukrainian</option>
            <option value='zh/function.imagettftext.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagettftext" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagettftext</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagettftext</span> &mdash; <span class="dc-title">Write text to the image using TrueType fonts</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagettftext-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagettftext</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$size</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$font_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Writes the given <code class="parameter">text</code> into the image using TrueType
   fonts.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Prior to PHP 8.0.0, <span class="function"><a href="function.imagefttext.php" class="function">imagefttext()</a></span> was an extended variant of
    <span class="function"><strong>imagettftext()</strong></span> which additionally supported the
    <code class="parameter">extrainfo</code>.
    As of PHP 8.0.0, <span class="function"><strong>imagettftext()</strong></span> is an alias of <span class="function"><a href="function.imagefttext.php" class="function">imagefttext()</a></span>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagettftext-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">The font size in points.</p>
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
       The color index. Using the negative of a color index has the effect of
       turning off antialiasing. See <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span>.
      </p>
     </dd>
    
    
    
     <dt><code class="parameter">fontfile</code></dt>
     <dd>
      <p class="para">
       The path to the TrueType font you wish to use.
      </p>
      <p class="para">
       Depending on which version of the GD library PHP is using, <em>when
       <code class="parameter">fontfile</code> does not begin with a leading
       <code class="literal">/</code> then <code class="literal">.ttf</code> will be appended</em>
       to the filename and the library will attempt to search for that
       filename along a library-defined font path.
      </p>
      <p class="para">
       When using versions of the GD library lower than 2.0.18, a <code class="literal">space</code> character,
       rather than a semicolon, was used as the &#039;path separator&#039; for different font files.
       Unintentional use of this feature will result in the warning message:
       <code class="literal">Warning: Could not find/open font</code>. For these affected versions, the
       only solution is moving the font to a path which does not contain spaces.
      </p>
      <p class="para">
       In many cases where a font resides in the same directory as the script using it
       the following trick will alleviate any include problems.
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Set the environment variable for GD<br /></span><span style="color: #0000BB">putenv</span><span style="color: #007700">(</span><span style="color: #DD0000">'GDFONTPATH=' </span><span style="color: #007700">. </span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Name the font to be used (note the lack of the .ttf extension)<br /></span><span style="color: #0000BB">$font </span><span style="color: #007700">= </span><span style="color: #DD0000">'SomeFont'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Note that <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> does
        <em>not</em> apply to <code class="parameter">fontfile</code>.
       </p>
      </p></blockquote>
     </dd>
    

    
     <dt><code class="parameter">text</code></dt>
     <dd>
      <p class="para">
       The text string in UTF-8 encoding.
      </p>
      <p class="para">
       May include decimal numeric character references (of the form:
       <code class="literal">&amp;#8364;</code>) to access characters in a font beyond position 127.
       The hexadecimal format (like <code class="literal">&amp;#xA9;</code>) is supported.
       Strings in UTF-8 encoding can be passed directly.
      </p>
      <p class="para">
       Named entities, such as <code class="literal">&amp;copy;</code>, are not supported. Consider using
       <span class="function"><a href="function.html-entity-decode.php" class="function">html_entity_decode()</a></span>
       to decode these named entities into UTF-8 strings.
      </p>
      <p class="para">
       If a character is used in the string which is not supported by the
       font, a hollow rectangle will replace the character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An array with <code class="literal">linespacing</code> key holding a <span class="type"><a href="language.types.float.php" class="type float">float</a></span> value.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagettftext-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array with 8 elements representing four points making the
   bounding box of the text. The order of the points is lower left, lower
   right, upper right, upper left. The points are relative to the text
   regardless of the angle, so &quot;upper left&quot; means in the top left-hand
   corner when you see the text horizontally.
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagettftext-changelog">
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
       The <code class="parameter">options</code> has been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagettftext-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2941">
    <p><strong>Example #1 <span class="function"><strong>imagettftext()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     This example script will produce a white PNG 400x30 pixels, with
     the words &quot;Testing...&quot; in black (with grey shadow), in the font Arial.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Set the content-type<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Create the image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">400</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Create some colors<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$grey </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">128</span><span style="color: #007700">, </span><span style="color: #0000BB">128</span><span style="color: #007700">, </span><span style="color: #0000BB">128</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">399</span><span style="color: #007700">, </span><span style="color: #0000BB">29</span><span style="color: #007700">, </span><span style="color: #0000BB">$white</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The text to draw<br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #DD0000">'Testing...'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Replace path by your own font path<br /></span><span style="color: #0000BB">$font </span><span style="color: #007700">= </span><span style="color: #DD0000">'arial.ttf'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Add some shadow to the text<br /></span><span style="color: #0000BB">imagettftext</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">11</span><span style="color: #007700">, </span><span style="color: #0000BB">21</span><span style="color: #007700">, </span><span style="color: #0000BB">$grey</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Add the text<br /></span><span style="color: #0000BB">imagettftext</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">$black</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Using imagepng() results in clearer text compared with imagejpeg()<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagettftext.png" alt="Output of example : imagettftext()" width="400" height="30" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagettftext-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is only available if
PHP is compiled with freetype support (<strong class="option configure">--with-freetype-dir=DIR</strong>)
</span></p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagettftext-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagettfbbox.php" class="function" rel="rdfs-seeAlso">imagettfbbox()</a> - Give the bounding box of a text using TrueType fonts</span></li>
   <li><span class="function"><a href="function.imagefttext.php" class="function" rel="rdfs-seeAlso">imagefttext()</a> - Write text to the image using fonts using FreeType 2</span></li>
   <li><span class="function"><a href="function.imagestring.php" class="function" rel="rdfs-seeAlso">imagestring()</a> - Draw a string horizontally</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagettftext.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagettftext%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagettftext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagettftext.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">40 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83248">  <div class="votes">
    <div id="Vu83248">
    <a href="/manual/vote-note.php?id=83248&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83248">
    <a href="/manual/vote-note.php?id=83248&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83248" title="73% like this...">
    52
    </div>
  </div>
  <a href="#83248" class="name">
  <strong class="user"><em>Valentijn de Pagter</em></strong></a><a class="genanchor" href="#83248"> &para;</a><div class="date" title="2008-05-16 10:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83248">
<div class="phpcode"><code><span class="html">If you're looking for easy text alignment, you need to use the imagettfbbox() command. When given the correct parameters, it will return the boundaries of your to-be-made text field in an array, which will allow you to calculate the x and y coordinate that you need to use for centering or aligning your text.<br /><br />A horizontal centering example:<br /><br /><span class="default">&lt;?php<br /><br />$tb </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">17</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'airlock.ttf'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />$tb would contain:<br /><br />Array<br />(<br />    [0] =&gt; 0 // lower left X coordinate<br />    [1] =&gt; -1 // lower left Y coordinate<br />    [2] =&gt; 198 // lower right X coordinate<br />    [3] =&gt; -1 // lower right Y coordinate<br />    [4] =&gt; 198 // upper right X coordinate<br />    [5] =&gt; -20 // upper right Y coordinate<br />    [6] =&gt; 0 // upper left X coordinate<br />    [7] =&gt; -20 // upper left Y coordinate<br />)<br /><br />For horizontal alignment, we need to substract the "text box's" width { $tb[2] or $tb[4] } from the image's width and then substract by two.<br /><br />Saying you have a 200px wide image, you could do something like this:<br /><br /><span class="default">&lt;?php<br /><br />$x </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">((</span><span class="default">200 </span><span class="keyword">- </span><span class="default">$tb</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) / </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// lower left X coordinate for text<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$tc</span><span class="keyword">, </span><span class="string">'airlock.ttf'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">); </span><span class="comment">// write text to image<br /><br /></span><span class="default">?&gt;<br /></span><br />This'll give you perfect horizontal center alignment for your text, give or take 1 pixel. Have fun!</span></code></div>
  </div>
 </div>
  <div class="note" id="55687">  <div class="votes">
    <div id="Vu55687">
    <a href="/manual/vote-note.php?id=55687&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55687">
    <a href="/manual/vote-note.php?id=55687&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55687" title="75% like this...">
    6
    </div>
  </div>
  <a href="#55687" class="name">
  <strong class="user"><em>gav-alex at bk dot ru</em></strong></a><a class="genanchor" href="#55687"> &para;</a><div class="date" title="2005-08-10 09:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55687">
<div class="phpcode"><code><span class="html">Hi all!<br />When my hoster updated his php's libs at first minutes i've got the same problem as some of you.<br />Php couldn't find the path to true type fonts.<br />The solution in my case was to make the path look like this<br /><span class="default">&lt;?php<br />imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">620</span><span class="keyword">, </span><span class="default">260</span><span class="keyword">, </span><span class="default">$secondary_color</span><span class="keyword">, </span><span class="string">"./tahoma.ttf" </span><span class="keyword">, </span><span class="string">"NEWS"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>so as you can see i simply added "./"<br /><br />another tip that i wanted to add here is how to write in RUssian on image using imagettftext<br />you simply have to change the function argument like this<br /><span class="default">&lt;?php<br />imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">575</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">$secondary_color</span><span class="keyword">, </span><span class="string">"./tahoma.ttf" </span><span class="keyword">, </span><span class="default">win2uni</span><span class="keyword">(</span><span class="string">"some word in russian"</span><span class="keyword">));<br /> </span><span class="default">?&gt;<br /></span>where win2uni is the function that converts win1251 to unicode. here is the code of it<br /><span class="default">&lt;?php <br /><br />  </span><span class="comment">//  Windows 1251 -&gt; Unicode<br />  </span><span class="keyword">function </span><span class="default">win2uni</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)<br />  {<br />    </span><span class="default">$s </span><span class="keyword">= </span><span class="default">convert_cyr_string</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'w'</span><span class="keyword">,</span><span class="string">'i'</span><span class="keyword">); </span><span class="comment">//  win1251 -&gt; iso8859-5<br />    //  iso8859-5 -&gt; unicode:<br />    </span><span class="keyword">for (</span><span class="default">$result</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />      </span><span class="default">$charcode </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />      </span><span class="default">$result </span><span class="keyword">.= (</span><span class="default">$charcode</span><span class="keyword">&gt;</span><span class="default">175</span><span class="keyword">)?</span><span class="string">"&amp;#"</span><span class="keyword">.(</span><span class="default">1040</span><span class="keyword">+(</span><span class="default">$charcode</span><span class="keyword">-</span><span class="default">176</span><span class="keyword">)).</span><span class="string">";"</span><span class="keyword">:</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;<br /></span><br />That's all today! Thanks for your attention!<br />Alex</span></code></div>
  </div>
 </div>
  <div class="note" id="113563">  <div class="votes">
    <div id="Vu113563">
    <a href="/manual/vote-note.php?id=113563&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113563">
    <a href="/manual/vote-note.php?id=113563&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113563" title="63% like this...">
    12
    </div>
  </div>
  <a href="#113563" class="name">
  <strong class="user"><em>suyog at suyogdixit dot com</em></strong></a><a class="genanchor" href="#113563"> &para;</a><div class="date" title="2013-10-30 10:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113563">
<div class="phpcode"><code><span class="html">For your general edification: The following drop-in function will place a block of fully justified text onto a GD image. It is a little CPU heavy, so I suggest caching the output rather than doing it on-the-fly. <br /><br />Arguments: <br /><br />$image - the GD handle of the target canvas <br />$size - text size <br />$angle - slope of text (does not work very well), leave at 0 for horizontal text <br />$left - no. of pixels from left to start block <br />$top - no. of pixels from top to start block <br />$color - handle for colour (imagecolorallocate result) <br />$font - path to .ttf font <br />$text - the text to wrap and justify <br />$max_width - the width of the text block within which the text should be wrapped and fully justified <br />$minspacing - the minimum number of pixels between words <br />$linespacing - a multiplier of line height (1 for normal spacing; 1.5 for line-and-a-half etc.)<br /><br />eg.<br />$image = ImageCreateFromJPEG( "sample.jpg" );<br />$cor = imagecolorallocate($image, 0, 0, 0);<br />$font = 'arial.ttf';<br />$a = imagettftextjustified($image, 20, 0, 50, 50, $color, $font, "Shree", 500, $minspacing=3,$linespacing=1);<br />header('Content-type: image/jpeg');<br />imagejpeg($image,NULL,100);<br /><br />function imagettftextjustified(&amp;$image, $size, $angle, $left, $top, $color, $font, $text, $max_width, $minspacing=3,$linespacing=1)<br />{<br />$wordwidth = array();<br />$linewidth = array();<br />$linewordcount = array();<br />$largest_line_height = 0;<br />$lineno=0;<br />$words=explode(" ",$text);<br />$wln=0;<br />$linewidth[$lineno]=0;<br />$linewordcount[$lineno]=0;<br />foreach ($words as $word)<br />{<br />$dimensions = imagettfbbox($size, $angle, $font, $word);<br />$line_width = $dimensions[2] - $dimensions[0];<br />$line_height = $dimensions[1] - $dimensions[7];<br />if ($line_height&gt;$largest_line_height) $largest_line_height=$line_height;<br />if (($linewidth[$lineno]+$line_width+$minspacing)&gt;$max_width)<br />{<br />$lineno++;<br />$linewidth[$lineno]=0;<br />$linewordcount[$lineno]=0;<br />$wln=0;<br />}<br />$linewidth[$lineno]+=$line_width+$minspacing;<br />$wordwidth[$lineno][$wln]=$line_width;<br />$wordtext[$lineno][$wln]=$word;<br />$linewordcount[$lineno]++;<br />$wln++;<br />}<br />for ($ln=0;$ln&lt;=$lineno;$ln++)<br />{<br />$slack=$max_width-$linewidth[$ln];<br />if (($linewordcount[$ln]&gt;1)&amp;&amp;($ln!=$lineno)) $spacing=($slack/($linewordcount[$ln]-1));<br />else $spacing=$minspacing;<br />$x=0;<br />for ($w=0;$w&lt;$linewordcount[$ln];$w++)<br />{<br />imagettftext($image, $size, $angle, $left + intval($x), $top + $largest_line_height + ($largest_line_height * $ln * $linespacing), $color, $font, $wordtext[$ln][$w]);<br />$x+=$wordwidth[$ln][$w]+$spacing+$minspacing;<br />}<br />}<br />return true;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="77935">  <div class="votes">
    <div id="Vu77935">
    <a href="/manual/vote-note.php?id=77935&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77935">
    <a href="/manual/vote-note.php?id=77935&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77935" title="66% like this...">
    2
    </div>
  </div>
  <a href="#77935" class="name">
  <strong class="user"><em>mitch at electricpulp dot com</em></strong></a><a class="genanchor" href="#77935"> &para;</a><div class="date" title="2007-09-20 07:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77935">
<div class="phpcode"><code><span class="html">If you're having issues with fonts not working... (Could not find/open font) check your permissions on the folder/font files and make sure they're 775, especially if you've just pulled them from a windows box. Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="84961">  <div class="votes">
    <div id="Vu84961">
    <a href="/manual/vote-note.php?id=84961&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84961">
    <a href="/manual/vote-note.php?id=84961&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84961" title="62% like this...">
    2
    </div>
  </div>
  <a href="#84961" class="name">
  <strong class="user"><em>s.pynenburg _at_ gm ail dotcom</em></strong></a><a class="genanchor" href="#84961"> &para;</a><div class="date" title="2008-08-07 07:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84961">
<div class="phpcode"><code><span class="html">I had an image generator where the user could position where they wanted the text to begin - however it kept going off the side of an image. So I made this basic function: it measures if the inputted text and x-position will cause the string to go off the edge, and if so, it will fit as much as it can on the first line, then go down to the next one.
<br />Limitations:
<br />-It only performs this once (i.e. it won't split into three lines)
<br />-I'm pretty sure it won't work with angled text.
<br />
<br /><span class="default">&lt;?PHP
<br />
<br /></span><span class="keyword">function </span><span class="default">imagettftextwrap</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x_pos</span><span class="keyword">, </span><span class="default">$y_pos</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$instr</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$box </span><span class="keyword">= @</span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$instr</span><span class="keyword">);
<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]);
<br />    </span><span class="default">$overlap </span><span class="keyword">= ((</span><span class="default">$x_pos </span><span class="keyword">+ </span><span class="default">$width</span><span class="keyword">) - </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">));
<br />    if(</span><span class="default">$overlap </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) </span><span class="comment">//if the text doesn't fit on the image
<br />    </span><span class="keyword">{
<br />        </span><span class="default">$chars </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$instr</span><span class="keyword">);
<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        </span><span class="default">$pstr </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        for(</span><span class="default">$m</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$m </span><span class="keyword">&lt; </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">); </span><span class="default">$m</span><span class="keyword">++)
<br />        {
<br />            </span><span class="default">$bo </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fsize1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font1</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);
<br />            </span><span class="default">$wid </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$bo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />            if((</span><span class="default">$x_pos </span><span class="keyword">+ </span><span class="default">$wid</span><span class="keyword">) &lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">)) </span><span class="comment">//add one char from the string as long as it's not overflowing
<br />            </span><span class="keyword">{
<br />                </span><span class="default">$pstr </span><span class="keyword">.= </span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$m</span><span class="keyword">];
<br />                </span><span class="default">$bo2 </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fsize1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font1</span><span class="keyword">, </span><span class="default">$pstr</span><span class="keyword">);
<br />                </span><span class="default">$wid2 </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bo2</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$bo2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />                if((</span><span class="default">$x_pos </span><span class="keyword">+ </span><span class="default">$wid2</span><span class="keyword">) &lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">))
<br />                {
<br />                    </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$m</span><span class="keyword">];
<br />                }    
<br />                else
<br />                {
<br />                    break;
<br />                }
<br />            }
<br />            else
<br />            {
<br />                break;
<br />            }
<br />        }
<br />        </span><span class="default">$restof </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        for(</span><span class="default">$l</span><span class="keyword">=</span><span class="default">$m</span><span class="keyword">; </span><span class="default">$l </span><span class="keyword">&lt; </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">); </span><span class="default">$l</span><span class="keyword">++)
<br />        {
<br />            </span><span class="default">$restof </span><span class="keyword">.= </span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$l</span><span class="keyword">]; </span><span class="comment">//add the rest of the string to a new line
<br />        </span><span class="keyword">}
<br />        </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x_pos</span><span class="keyword">, </span><span class="default">$y_pos</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// print out the smaller line
<br />        </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$y_pos </span><span class="keyword">+ </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$restof</span><span class="keyword">); </span><span class="comment">//and the rest of it
<br />    </span><span class="keyword">}
<br />    else
<br />    {
<br />        </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x_pos</span><span class="keyword">, </span><span class="default">$y_pos</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$instr</span><span class="keyword">); </span><span class="comment">//otherwise just do normally
<br />    </span><span class="keyword">}
<br />
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48938">  <div class="votes">
    <div id="Vu48938">
    <a href="/manual/vote-note.php?id=48938&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48938">
    <a href="/manual/vote-note.php?id=48938&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48938" title="61% like this...">
    3
    </div>
  </div>
  <a href="#48938" class="name">
  <strong class="user"><em>pillepop2003 at nospam dot yahoo dot de</em></strong></a><a class="genanchor" href="#48938"> &para;</a><div class="date" title="2005-01-12 05:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48938">
<div class="phpcode"><code><span class="html">Hey guys,<br /><br />check this function if you want to rotate the text around its center and not its "lower left" pivot-point:<br /><br /><span class="default">&lt;?php<br />        </span><span class="comment">// Put center-rotated ttf-text into image<br />        // Same signature as imagettftext();<br />        </span><span class="keyword">function </span><span class="default">imagettftext_cr</span><span class="keyword">(&amp;</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">)<br />        {<br />            </span><span class="comment">// retrieve boundingbox<br />            </span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />            <br />            </span><span class="comment">// calculate deviation<br />            </span><span class="default">$dx </span><span class="keyword">= (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]-</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])/</span><span class="default">2.0 </span><span class="keyword">- (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]-</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">])/</span><span class="default">2.0</span><span class="keyword">;         </span><span class="comment">// deviation left-right<br />            </span><span class="default">$dy </span><span class="keyword">= (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]-</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])/</span><span class="default">2.0 </span><span class="keyword">+ (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]-</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])/</span><span class="default">2.0</span><span class="keyword">;        </span><span class="comment">// deviation top-bottom<br />            <br />            // new pivotpoint<br />            </span><span class="default">$px </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">-</span><span class="default">$dx</span><span class="keyword">;<br />            </span><span class="default">$py </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">-</span><span class="default">$dy</span><span class="keyword">;<br />            <br />            return </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$px</span><span class="keyword">, </span><span class="default">$py</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />        }<br /><br /></span><span class="default">?&gt;<br /></span><br />Big up<br />Phil</span></code></div>
  </div>
 </div>
  <div class="note" id="96472">  <div class="votes">
    <div id="Vu96472">
    <a href="/manual/vote-note.php?id=96472&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96472">
    <a href="/manual/vote-note.php?id=96472&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96472" title="60% like this...">
    2
    </div>
  </div>
  <a href="#96472" class="name">
  <strong class="user"><em>JohnB</em></strong></a><a class="genanchor" href="#96472"> &para;</a><div class="date" title="2010-02-28 11:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96472">
<div class="phpcode"><code><span class="html">Just in case you were--like me--unaware of this, in Windows, ttf fonts don't necessarily antialias at all font sizes. Arial appears to work at all sizes but Calibri, for example, only antialiases at a point size of 8 and then at all sizes 16 and up. Not only that but at fonts sizes like 10 and 12 characters don't print at the expected angle: the characters are all printed upright on an angled baseline.</span></code></div>
  </div>
 </div>
  <div class="note" id="90580">  <div class="votes">
    <div id="Vu90580">
    <a href="/manual/vote-note.php?id=90580&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90580">
    <a href="/manual/vote-note.php?id=90580&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90580" title="57% like this...">
    3
    </div>
  </div>
  <a href="#90580" class="name">
  <strong class="user"><em>philip at webdesco dot com</em></strong></a><a class="genanchor" href="#90580"> &para;</a><div class="date" title="2009-04-29 05:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90580">
<div class="phpcode"><code><span class="html">Hi,<br />for the dummies (like myself) if you are having problems including your font file, prefix the file name with ./<br /><br />On my development server the following worked fine<br />$myfont = "coolfont.ttf";<br /><br />on my hosting server the only way i could get the font to work was as follows<br />$myfont = "./coolfont.ttf";<br /><br />hope this helps someone out!</span></code></div>
  </div>
 </div>
  <div class="note" id="91061">  <div class="votes">
    <div id="Vu91061">
    <a href="/manual/vote-note.php?id=91061&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91061">
    <a href="/manual/vote-note.php?id=91061&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91061" title="57% like this...">
    2
    </div>
  </div>
  <a href="#91061" class="name">
  <strong class="user"><em>web at evanreeves dot com</em></strong></a><a class="genanchor" href="#91061"> &para;</a><div class="date" title="2009-05-22 12:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91061">
<div class="phpcode"><code><span class="html">I was having trouble trying to render non antialiased text using a pixel font. The tips about setting a negative value for the color are valid, but I was still having trouble with the text I was trying to render because it was black. I discovered that if I changed the imagecolorallocate() function from:<br /><br />$color = imagecolorallocate($base, 0, 0, 0);<br /><br />to <br /><br />$color = imagecolorallocate($base, 1, 1, 1); (near black)<br /><br />and then used the negative value for the color in imagettftext(), it would work properly. The difference is that my first implementation set $color = 0. Obviously, you can't have $color = -0, it made no difference. When I switched to (1,1,1) it became $color = 1 which I could take a negative value for.</span></code></div>
  </div>
 </div>
  <div class="note" id="100713">  <div class="votes">
    <div id="Vu100713">
    <a href="/manual/vote-note.php?id=100713&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100713">
    <a href="/manual/vote-note.php?id=100713&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100713" title="52% like this...">
    2
    </div>
  </div>
  <a href="#100713" class="name">
  <strong class="user"><em>John Conde</em></strong></a><a class="genanchor" href="#100713"> &para;</a><div class="date" title="2010-11-01 10:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100713">
<div class="phpcode"><code><span class="html">If you want to create a paragraph you will need to break your text up into lines and then place each line individually one below the next.<br /><br />Here's a basic example of how to do that:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Basic font settings<br /></span><span class="default">$font </span><span class="keyword">=</span><span class="string">'./times.ttf'</span><span class="keyword">;<br /></span><span class="default">$font_size </span><span class="keyword">= </span><span class="default">15</span><span class="keyword">;<br /></span><span class="default">$font_color </span><span class="keyword">=  </span><span class="default">0x000000<br /><br /></span><span class="comment">// Text to be placed as a paragraph<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non nunc lectus. Curabitur hendrerit bibendum enim dignissim tempus. Suspendisse non ipsum auctor metus consectetur eleifend. Fusce cursus ullamcorper sem nec ultricies. Aliquam erat volutpat. Vivamus massa justo, pharetra et sodales quis, rhoncus in ligula. Integer dolor velit, ultrices in iaculis nec, viverra ut nunc.'</span><span class="keyword">;<br /><br /></span><span class="comment">// Break it up into pieces 125 characters long<br /></span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">115</span><span class="keyword">, </span><span class="string">'|'</span><span class="keyword">));<br /><br /></span><span class="comment">// Starting Y position<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">513</span><span class="keyword">;<br /><br /></span><span class="comment">// Loop through the lines and place them on the image<br /></span><span class="keyword">foreach (</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)<br />{<br />    </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$font_color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br /><br />    </span><span class="comment">// Increment Y so the next line is below the previous line<br />    </span><span class="default">$y </span><span class="keyword">+= </span><span class="default">23</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126038">  <div class="votes">
    <div id="Vu126038">
    <a href="/manual/vote-note.php?id=126038&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126038">
    <a href="/manual/vote-note.php?id=126038&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126038" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126038" class="name">
  <strong class="user"><em>badrou14 at yahoo dot fr</em></strong></a><a class="genanchor" href="#126038"> &para;</a><div class="date" title="2021-04-24 03:49"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126038">
<div class="phpcode"><code><span class="html">for windows you can use this code thanks to Ohmycode <br /> the link of his solution : <a href="https://ohmycode.wordpress.com/2008/09/20/imagettftext-gdfontpath-et-ttf-sous-windows/" rel="nofollow" target="_blank">https://ohmycode.wordpress.com/2008/09/20/imagettftext-gdfontpath-et-ttf-sous-windows/</a><br /><span class="default">&lt;?php<br /><br />$font </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">).</span><span class="string">"\\arial.ttf"</span><span class="keyword">;<br /> <br /><br /></span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /> <br /><br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);<br /> <br /><br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"coucou"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89505">  <div class="votes">
    <div id="Vu89505">
    <a href="/manual/vote-note.php?id=89505&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89505">
    <a href="/manual/vote-note.php?id=89505&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89505" title="50% like this...">
    0
    </div>
  </div>
  <a href="#89505" class="name">
  <strong class="user"><em>ben at spooty dot net</em></strong></a><a class="genanchor" href="#89505"> &para;</a><div class="date" title="2009-03-11 06:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89505">
<div class="phpcode"><code><span class="html">Here's a simple function to wrap text going into an image. It'll wrap onto as many lines as it needs to, but $angle has to be zero. The $width parameter is the width of the image.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">wrap</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$fontFace</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">){<br />    <br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    <br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    <br />    foreach ( </span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$word </span><span class="keyword">){<br />    <br />        </span><span class="default">$teststring </span><span class="keyword">= </span><span class="default">$ret</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$word</span><span class="keyword">;<br />        </span><span class="default">$testbox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$fontFace</span><span class="keyword">, </span><span class="default">$teststring</span><span class="keyword">);<br />        if ( </span><span class="default">$testbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] &gt; </span><span class="default">$width </span><span class="keyword">){<br />            </span><span class="default">$ret</span><span class="keyword">.=(</span><span class="default">$ret</span><span class="keyword">==</span><span class="string">""</span><span class="keyword">?</span><span class="string">""</span><span class="keyword">:</span><span class="string">"\n"</span><span class="keyword">).</span><span class="default">$word</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$ret</span><span class="keyword">.=(</span><span class="default">$ret</span><span class="keyword">==</span><span class="string">""</span><span class="keyword">?</span><span class="string">""</span><span class="keyword">:</span><span class="string">' '</span><span class="keyword">).</span><span class="default">$word</span><span class="keyword">;<br />        }<br />    }<br />    <br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80473">  <div class="votes">
    <div id="Vu80473">
    <a href="/manual/vote-note.php?id=80473&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80473">
    <a href="/manual/vote-note.php?id=80473&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80473" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80473" class="name">
  <strong class="user"><em>matt at mmkennedy dot net</em></strong></a><a class="genanchor" href="#80473"> &para;</a><div class="date" title="2008-01-17 07:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80473">
<div class="phpcode"><code><span class="html">For anyone attempting to print black barcodes, and trying to turn of anti-aliasing, remember that -1 * [0,0,0] is 0, not -0.</span></code></div>
  </div>
 </div>
  <div class="note" id="79705">  <div class="votes">
    <div id="Vu79705">
    <a href="/manual/vote-note.php?id=79705&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79705">
    <a href="/manual/vote-note.php?id=79705&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79705" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79705" class="name">
  <strong class="user"><em>dotpointer</em></strong></a><a class="genanchor" href="#79705"> &para;</a><div class="date" title="2007-12-09 04:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79705">
<div class="phpcode"><code><span class="html">For those trying to disable the font smoothing or font cleartype:ing, take a look at the color parameter for this function. The correct word for what you're looking for is antialiasing.</span></code></div>
  </div>
 </div>
  <div class="note" id="75062">  <div class="votes">
    <div id="Vu75062">
    <a href="/manual/vote-note.php?id=75062&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75062">
    <a href="/manual/vote-note.php?id=75062&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75062" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75062" class="name">
  <strong class="user"><em>lassial at gmail dot com</em></strong></a><a class="genanchor" href="#75062"> &para;</a><div class="date" title="2007-05-10 06:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75062">
<div class="phpcode"><code><span class="html">Roy van Arem suggested a neat code for listing TTFs on a machine. However, it has some problems (such as lower and upper case distinction of file extension and defective fonts) that I have corrected in the following script, which can be implemented as a single PHP script (name as you like):<br /><br /><span class="default">&lt;?php </span><span class="comment">//make sure there are no blank lines above<br />        <br /></span><span class="default">$ffolder</span><span class="keyword">=</span><span class="string">"/usr/local/bin/fonts"</span><span class="keyword">; </span><span class="comment">//The directory where your fonts reside<br /><br /></span><span class="keyword">if (empty(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'f'</span><span class="keyword">]))<br />{<br /></span><span class="default">$folder</span><span class="keyword">=</span><span class="default">dir</span><span class="keyword">(</span><span class="default">$ffolder</span><span class="keyword">); </span><span class="comment">//open directory<br /></span><span class="keyword">echo </span><span class="string">"&lt;HTML&gt;&lt;BODY&gt;\n"</span><span class="keyword">;<br />    <br />while(</span><span class="default">$font</span><span class="keyword">=</span><span class="default">$folder</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">())<br />  if(</span><span class="default">stristr</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">,</span><span class="string">'.ttf'</span><span class="keyword">)) </span><span class="comment">//only ttf fonts<br />        </span><span class="default">$fonts</span><span class="keyword">[]=</span><span class="default">$font</span><span class="keyword">;<br />        <br /></span><span class="default">$folder</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br />if (!empty(</span><span class="default">$fonts</span><span class="keyword">))<br />        {<br />        echo </span><span class="string">"&lt;table&gt;&lt;tr&gt;&lt;th colspan='2'&gt;Fonts available in </span><span class="default">$ffolder</span><span class="string">&lt;/th&gt;&lt;/tr&gt;"<br />        </span><span class="keyword">.</span><span class="string">"\n&lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Appereance&lt;/th&gt;"</span><span class="keyword">; <br />        </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$fonts</span><span class="keyword">);<br />        foreach (</span><span class="default">$fonts </span><span class="keyword">as </span><span class="default">$font</span><span class="keyword">)<br />                echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;</span><span class="default">$font</span><span class="string">&lt;/td&gt;&lt;td&gt; &lt;IMG src='"</span><span class="keyword">.</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_NAME'</span><span class="keyword">] <br />                        .</span><span class="string">"?f=</span><span class="default">$font</span><span class="string">'&gt;&lt;/td&gt;&lt;/tr&gt;\n"</span><span class="keyword">;<br />        }<br />else echo </span><span class="string">"No fonts found from </span><span class="default">$ffolder</span><span class="string">"</span><span class="keyword">;<br />echo </span><span class="string">"\n&lt;/HTML&gt;&lt;/BODY&gt;"</span><span class="keyword">;<br />}<br /><br />else<br />{<br /></span><span class="default">$im</span><span class="keyword">=@</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">)<br />        or die(</span><span class="string">"Cannot Initialize new GD image stream"</span><span class="keyword">);<br /><br /></span><span class="default">$black</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$white</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">14</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">25</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">, </span><span class="string">"</span><span class="default">$ffolder</span><span class="string">/"</span><span class="keyword">.</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'f'</span><span class="keyword">] , </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'f'</span><span class="keyword">]);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: ' </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">));<br /><br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74949">  <div class="votes">
    <div id="Vu74949">
    <a href="/manual/vote-note.php?id=74949&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74949">
    <a href="/manual/vote-note.php?id=74949&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74949" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74949" class="name">
  <strong class="user"><em>ultraniblet at gmail dot com</em></strong></a><a class="genanchor" href="#74949"> &para;</a><div class="date" title="2007-05-05 01:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74949">
<div class="phpcode"><code><span class="html">I have found the kerning (spacing between letters) pretty poor with GD - it's not up to your average designer's standards. Here are some ways to improve it:<br />- Place the letters one by one using their bounding box instead of using one string<br />- adjust with a $kerning value<br />- For small text, sample it down from a larger size to adjust in increments less than 1px<br /><br />Eg:<br /><br /><span class="default">&lt;?PHP<br /><br />$STRING </span><span class="keyword">= </span><span class="string">"NOTRE PHILOSOPHIE"</span><span class="keyword">;<br /><br /></span><span class="comment">// ---- PRESETS<br /></span><span class="default">$FONT </span><span class="keyword">= </span><span class="string">"CantoriaMTStd-SemiBold.otf"</span><span class="keyword">;<br /></span><span class="default">$FONT_SIZE </span><span class="keyword">= </span><span class="default">10.5</span><span class="keyword">;<br /></span><span class="default">$WIDTH </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$HEIGHT </span><span class="keyword">= </span><span class="default">16</span><span class="keyword">;<br /></span><span class="default">$KERNING </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$BASELINE </span><span class="keyword">= </span><span class="default">12</span><span class="keyword">;<br /></span><span class="default">$BG_COLOR </span><span class="keyword">= array(<br />    </span><span class="string">"R"</span><span class="keyword">=&gt;</span><span class="default">5</span><span class="keyword">,<br />    </span><span class="string">"G"</span><span class="keyword">=&gt;</span><span class="default">45</span><span class="keyword">,<br />    </span><span class="string">"B"</span><span class="keyword">=&gt;</span><span class="default">53<br /></span><span class="keyword">);<br /></span><span class="default">$TXT_COLOR </span><span class="keyword">= array(<br />    </span><span class="string">"R"</span><span class="keyword">=&gt;</span><span class="default">188</span><span class="keyword">,<br />    </span><span class="string">"G"</span><span class="keyword">=&gt;</span><span class="default">189</span><span class="keyword">,<br />    </span><span class="string">"B"</span><span class="keyword">=&gt;</span><span class="default">0<br /></span><span class="keyword">);<br /><br /></span><span class="comment">// ---- CREATE CANVAS + PALETTE<br /></span><span class="default">$canvas </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">(</span><span class="default">$WIDTH</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">,</span><span class="default">$HEIGHT</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">);<br /><br /></span><span class="default">$bg_color </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$canvas</span><span class="keyword">, </span><span class="default">$BG_COLOR</span><span class="keyword">[</span><span class="string">"R"</span><span class="keyword">], </span><span class="default">$BG_COLOR</span><span class="keyword">[</span><span class="string">"G"</span><span class="keyword">], </span><span class="default">$BG_COLOR</span><span class="keyword">[</span><span class="string">"B"</span><span class="keyword">]);<br /><br /></span><span class="default">$txt_color </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$canvas</span><span class="keyword">, </span><span class="default">$TXT_COLOR</span><span class="keyword">[</span><span class="string">"R"</span><span class="keyword">], </span><span class="default">$TXT_COLOR</span><span class="keyword">[</span><span class="string">"G"</span><span class="keyword">], </span><span class="default">$TXT_COLOR</span><span class="keyword">[</span><span class="string">"B"</span><span class="keyword">]);<br /><br /></span><span class="default">imagefill </span><span class="keyword">( </span><span class="default">$canvas</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bg_color </span><span class="keyword">);<br /><br /></span><span class="comment">// ---- DRAW<br /><br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$STRING</span><span class="keyword">);<br /></span><span class="default">$hpos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />{<br />    </span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettftext</span><span class="keyword">( </span><span class="default">$canvas</span><span class="keyword">, </span><span class="default">$FONT_SIZE</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$hpos</span><span class="keyword">, </span><span class="default">$BASELINE</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$txt_color</span><span class="keyword">, </span><span class="default">$FONT</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] );<br />    <br />    </span><span class="default">$hpos </span><span class="keyword">= </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]+</span><span class="default">$KERNING</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// ---- SAMPLE DOWN &amp; OUTPUT<br /></span><span class="default">$final </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">(</span><span class="default">$WIDTH</span><span class="keyword">,</span><span class="default">$HEIGHT</span><span class="keyword">);<br /><br /></span><span class="default">imageCopyResampled</span><span class="keyword">( </span><span class="default">$final</span><span class="keyword">, </span><span class="default">$canvas</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$WIDTH</span><span class="keyword">, </span><span class="default">$HEIGHT</span><span class="keyword">, </span><span class="default">$WIDTH</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$HEIGHT</span><span class="keyword">*</span><span class="default">4 </span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /><br /></span><span class="default">imagePNG</span><span class="keyword">(</span><span class="default">$final</span><span class="keyword">);<br /><br /></span><span class="default">imageDestroy</span><span class="keyword">(</span><span class="default">$canvas</span><span class="keyword">);<br /></span><span class="default">imageDestroy</span><span class="keyword">(</span><span class="default">$final</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70130">  <div class="votes">
    <div id="Vu70130">
    <a href="/manual/vote-note.php?id=70130&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70130">
    <a href="/manual/vote-note.php?id=70130&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70130" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70130" class="name">
  <strong class="user"><em>Tom Pike</em></strong></a><a class="genanchor" href="#70130"> &para;</a><div class="date" title="2006-10-04 08:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70130">
<div class="phpcode"><code><span class="html">Ref: Craig at frostycoolslug dot com<br /><br />"Using the negative of a color index has the effect of turning off antialiasing."<br /><br />This is true, but only if the image has been created with imagecreate() (as opposed to imagecreatetruecolor())</span></code></div>
  </div>
 </div>
  <div class="note" id="69972">  <div class="votes">
    <div id="Vu69972">
    <a href="/manual/vote-note.php?id=69972&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69972">
    <a href="/manual/vote-note.php?id=69972&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69972" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69972" class="name">
  <strong class="user"><em>Craig at frostycoolslug dot com</em></strong></a><a class="genanchor" href="#69972"> &para;</a><div class="date" title="2006-09-28 07:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69972">
<div class="phpcode"><code><span class="html">This one caught me out a little bit as confusing, so in an attempt to help others..<br /><br />"Using the negative of a color index has the effect of turning off antialiasing."<br /><br />Simply put:<br /><br /><span class="default">&lt;?php<br /><br />$textColour </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">ImageTTFText</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">$textColour</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Note the - (minus) before the $textColor in ImageTTFText, this creates the negative colour index, and switches off AA on text.</span></code></div>
  </div>
 </div>
  <div class="note" id="60547">  <div class="votes">
    <div id="Vu60547">
    <a href="/manual/vote-note.php?id=60547&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60547">
    <a href="/manual/vote-note.php?id=60547&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60547" title="50% like this...">
    0
    </div>
  </div>
  <a href="#60547" class="name">
  <strong class="user"><em>Mer`Zikain</em></strong></a><a class="genanchor" href="#60547"> &para;</a><div class="date" title="2006-01-10 12:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60547">
<div class="phpcode"><code><span class="html">I was looking for a way to add kerning to my text and finally just made this function to do it. Of course, if you're generating the size of the image based on the text you're putting in it, you'll have to figure out the new size to fit the new text width but I'm sure you can figure that out.<br /><br />for($i=0;$i&lt;strlen($text);$i++){<br />        // Get single character<br />    $value=substr($text,$i,1);<br />    if($pval){ // check for existing previous character<br />        list($lx,$ly,$rx,$ry) = imagettfbbox($fontsize,0,$font,$pval);<br />        $nxpos+=$rx+3;<br />    }else{<br />        $nxpos=0;<br />    }<br />        // Add the letter to the image<br />    imagettftext($im, $fontsize, 0, $nxpos, $ypos, $fontcolor, $font, $value);<br />    $pval=$value; // save current character for next loop<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="63684">  <div class="votes">
    <div id="Vu63684">
    <a href="/manual/vote-note.php?id=63684&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63684">
    <a href="/manual/vote-note.php?id=63684&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63684" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#63684" class="name">
  <strong class="user"><em>mats dot engstrom at gmail dot com</em></strong></a><a class="genanchor" href="#63684"> &para;</a><div class="date" title="2006-03-28 02:23"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63684">
<div class="phpcode"><code><span class="html">I'll second the note from --colobri--.  <br /><br />Just adding --with-ttf and --with-freetype-dir=/usr/lib/ on the ./configure and then doing a "make; make install" is not enough.<br /><br />I had to do a "make clean" and then a "make install" in order to get the FreeType-support enabled.<br /><br />Here are my relevant ./configure lines:<br />--with-gd \<br />--enable-gd-native-ttf \<br />--with-ttf \<br />--with-freetype-dir=/usr/lib/ \<br />--with-jpeg-dir=/usr/lib/libjpeg.so.62 \<br />--enable-exif \</span></code></div>
  </div>
 </div>
  <div class="note" id="56340">  <div class="votes">
    <div id="Vu56340">
    <a href="/manual/vote-note.php?id=56340&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56340">
    <a href="/manual/vote-note.php?id=56340&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56340" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#56340" class="name">
  <strong class="user"><em>alexey at NOSPAMPLS dot ozerov dot de</em></strong></a><a class="genanchor" href="#56340"> &para;</a><div class="date" title="2005-08-31 12:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56340">
<div class="phpcode"><code><span class="html">Notice that the path to the TrueType font has to be included in open_basedir list if open_basedir restriction is activated in php.ini.</span></code></div>
  </div>
 </div>
  <div class="note" id="80013">  <div class="votes">
    <div id="Vu80013">
    <a href="/manual/vote-note.php?id=80013&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80013">
    <a href="/manual/vote-note.php?id=80013&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80013" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#80013" class="name">
  <strong class="user"><em>denis at reddodo dot com</em></strong></a><a class="genanchor" href="#80013"> &para;</a><div class="date" title="2007-12-24 06:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80013">
<div class="phpcode"><code><span class="html">Small but very dangerous bug in function ttfWordWrappedText, written by waage, just try ttfWordWrappedText("aaaaa\naa",4) and your script will run into endless loop. <br />You can fix it with code below:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">ttfWordWrappedText_fixed</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">) {<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach(</span><span class="default">$text </span><span class="keyword">as </span><span class="default">$text</span><span class="keyword">)<br />    {<br />        while(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) &gt; </span><span class="default">$strlen  </span><span class="keyword">&amp;&amp; </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />           </span><span class="default">$startPoint </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">);<br />           </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] =</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$startPoint</span><span class="keyword">);  <br />           </span><span class="default">$text </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">)); <br />        }<br />        </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />        }<br />        </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />        </span><span class="default">$i</span><span class="keyword">++;<br />    }<br />   <br />    return </span><span class="default">$line</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>better solutions is to check input text for lines longer than needed wrap point.</span></code></div>
  </div>
 </div>
  <div class="note" id="80012">  <div class="votes">
    <div id="Vu80012">
    <a href="/manual/vote-note.php?id=80012&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80012">
    <a href="/manual/vote-note.php?id=80012&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80012" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#80012" class="name">
  <strong class="user"><em>denis at reddodo dot com</em></strong></a><a class="genanchor" href="#80012"> &para;</a><div class="date" title="2007-12-24 05:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80012">
<div class="phpcode"><code><span class="html">Small but very dangerous bug in function ttfWordWrappedText, written by waage, just try ttfWordWrappedText("aaaaa\naa",4) and your script will run into endless loop. <br />You can fix it with code below:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">ttfWordWrappedText_fixed</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">) {<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />   <br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach(</span><span class="default">$text </span><span class="keyword">as </span><span class="default">$text</span><span class="keyword">)<br />    {<br />        while(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) &gt; </span><span class="default">$strlen </span><span class="keyword">&amp;&amp; </span><span class="default">stristr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />           </span><span class="default">$startPoint </span><span class="keyword">= </span><span class="default">$strlen </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />           while(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) != </span><span class="string">" "</span><span class="keyword">) {<br />                </span><span class="default">$startPoint</span><span class="keyword">--;<br />           }<br />           </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">));<br />           </span><span class="default">$text </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">);<br />        }<br />        </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />        </span><span class="default">$i</span><span class="keyword">++;<br />    }<br />   <br />    return </span><span class="default">$line</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>better solutions is to check input text for lines longer than needed wrap point.</span></code></div>
  </div>
 </div>
  <div class="note" id="79024">  <div class="votes">
    <div id="Vu79024">
    <a href="/manual/vote-note.php?id=79024&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79024">
    <a href="/manual/vote-note.php?id=79024&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79024" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#79024" class="name">
  <strong class="user"><em>waage</em></strong></a><a class="genanchor" href="#79024"> &para;</a><div class="date" title="2007-11-07 07:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79024">
<div class="phpcode"><code><span class="html">I had some issues trying to get both word wrapping and new line detection but with some of the help from the comments below i got this. (thanks to jwe for the main part of the code here)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ttfWordWrappedText</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">38</span><span class="keyword">) {<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />    <br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach(</span><span class="default">$text </span><span class="keyword">as </span><span class="default">$text</span><span class="keyword">)<br />    {<br />        while(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) &gt; </span><span class="default">$strlen</span><span class="keyword">) {<br />           </span><span class="default">$startPoint </span><span class="keyword">= </span><span class="default">$strlen </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />           while(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) != </span><span class="string">" "</span><span class="keyword">) {<br />                </span><span class="default">$startPoint</span><span class="keyword">--;<br />           }<br />           </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">));<br />           </span><span class="default">$text </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">);<br />        }<br />        </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />        </span><span class="default">$i</span><span class="keyword">++;<br />    }<br />    <br />    return </span><span class="default">$line</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />This returns an array for each newline entered and subarray for each wordwrapped line to print.<br /><br />ie.<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; This is the first long line<br />            [1] =&gt; that i entered.<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; And this is the new line after that.<br />        )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="65460">  <div class="votes">
    <div id="Vu65460">
    <a href="/manual/vote-note.php?id=65460&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65460">
    <a href="/manual/vote-note.php?id=65460&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65460" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#65460" class="name">
  <strong class="user"><em>admin at sgssweb dot com</em></strong></a><a class="genanchor" href="#65460"> &para;</a><div class="date" title="2006-05-01 04:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65460">
<div class="phpcode"><code><span class="html">Another way of the bellow. After creating a child class of GMIPluggableSet class, which should override two method: getExpression() and getVariables(), throw it to a instance of FontImageGenerator class.<br />For example, the code follows:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">require_once </span><span class="string">'package.fig.php'</span><span class="keyword">;<br /><br />class </span><span class="default">SampleFontImagePluggableSet<br />    </span><span class="keyword">extends </span><span class="default">GMIPluggableSet<br /></span><span class="keyword">{<br />    var </span><span class="default">$defaultVariables </span><span class="keyword">= array(<br />        </span><span class="string">"text" </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />        </span><span class="string">"size" </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />        </span><span class="string">"font" </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />        </span><span class="string">"color" </span><span class="keyword">=&gt; </span><span class="string">"0x000000"</span><span class="keyword">,<br />        </span><span class="string">"alpha" </span><span class="keyword">=&gt; </span><span class="string">"100"</span><span class="keyword">,<br />        </span><span class="string">"padding" </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />        </span><span class="string">"width" </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />        </span><span class="string">"height" </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />        </span><span class="string">"align" </span><span class="keyword">=&gt; </span><span class="string">"left"</span><span class="keyword">,<br />        </span><span class="string">"valign" </span><span class="keyword">=&gt; </span><span class="string">"middle"</span><span class="keyword">,<br />        </span><span class="string">"bgcolor" </span><span class="keyword">=&gt; </span><span class="string">"0xffffff"</span><span class="keyword">,<br />        </span><span class="string">"antialias" </span><span class="keyword">=&gt; </span><span class="default">4<br />    </span><span class="keyword">);<br />    <br />    function </span><span class="default">SampleFontImagePluggableSet</span><span class="keyword">() {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">GMIPluggableSet</span><span class="keyword">();<br />    }<br />    <br />    function </span><span class="default">getExpression</span><span class="keyword">() {<br />        return </span><span class="string">"size {width}, {height};"</span><span class="keyword">.<br />               </span><span class="string">"autoresize none;"</span><span class="keyword">.<br />               </span><span class="string">"type gif, 256, {color: {bgcolor}};"</span><span class="keyword">.<br />               </span><span class="string">"padding {padding};"</span><span class="keyword">.<br />               </span><span class="string">"color {color: {bgcolor}};"</span><span class="keyword">.<br />               </span><span class="string">"fill;"</span><span class="keyword">.<br />               </span><span class="string">"color {color: {color}, {alpha}};"</span><span class="keyword">.<br />               </span><span class="string">"antialias {antialias};"</span><span class="keyword">.<br />               </span><span class="string">"font {font}, {size};"</span><span class="keyword">.<br />               </span><span class="string">"string {text}, 0, 0, {width}, {height}, {align}, {valign};"</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">getVariables</span><span class="keyword">() {<br />        return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">defaultVariables</span><span class="keyword">, </span><span class="default">$_GET</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$pluggableSet </span><span class="keyword">= new </span><span class="default">SampleFontImagePluggableSet</span><span class="keyword">();<br /></span><span class="default">$fig </span><span class="keyword">= new </span><span class="default">FontImageGenerator</span><span class="keyword">();<br /></span><span class="default">$fig</span><span class="keyword">-&gt;</span><span class="default">setPluggableSet</span><span class="keyword">(</span><span class="default">$pluggableSet</span><span class="keyword">);<br /></span><span class="default">$fig</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />This output a image with the text defined in $_GET['text'], the font in $_GET['font'], the text color in $_GET['color'], the background in $_GET['bgcolor'], and so on.<br /><br />The script file is available at: <a href="http://sgssweb.com/experiments/?file=PHPFontImageGenerator" rel="nofollow" target="_blank">http://sgssweb.com/experiments/?file=PHPFontImageGenerator</a> .</span></code></div>
  </div>
 </div>
  <div class="note" id="62437">  <div class="votes">
    <div id="Vu62437">
    <a href="/manual/vote-note.php?id=62437&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62437">
    <a href="/manual/vote-note.php?id=62437&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62437" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#62437" class="name">
  <strong class="user"><em>admin at phpru dot com</em></strong></a><a class="genanchor" href="#62437"> &para;</a><div class="date" title="2006-02-28 09:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62437">
<div class="phpcode"><code><span class="html">On my conf: php5.1.2+apache 1.33<br />iconv() function works very well with all cyrillic encodings, so you needn't to write your function like win2uni</span></code></div>
  </div>
 </div>
  <div class="note" id="68232">  <div class="votes">
    <div id="Vu68232">
    <a href="/manual/vote-note.php?id=68232&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68232">
    <a href="/manual/vote-note.php?id=68232&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68232" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#68232" class="name">
  <strong class="user"><em>jwe</em></strong></a><a class="genanchor" href="#68232"> &para;</a><div class="date" title="2006-07-18 08:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68232">
<div class="phpcode"><code><span class="html">Quick tip for anyone who is receiving text like in the example in this page (ie: through $_GET['text'] or something similar) and needs to format the text into multiple lines.  The trick is finding the spaces...<br /><br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">];<br /></span><span class="comment">// for a maximum of 38 characters on a line...<br /></span><span class="keyword">while(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) &gt; </span><span class="default">38</span><span class="keyword">) {<br />   </span><span class="default">$startPoint </span><span class="keyword">= </span><span class="default">37</span><span class="keyword">;<br />   </span><span class="comment">// find a space to break the line on<br />   </span><span class="keyword">while(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) != </span><span class="string">" "</span><span class="keyword">) {<br />        </span><span class="default">$startPoint</span><span class="keyword">--;<br />   }<br />   </span><span class="default">$line</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">));<br />   </span><span class="default">$text </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$startPoint</span><span class="keyword">);<br />}<br /></span><span class="default">$line</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The result is an array called $line that contains all the lines of text you need to output in order.<br /><br />The only tasks left are to determine the correct height of the image based on the font size you want to use.  Don't forget to leave some padding space for punctuation and descenders between lines (commas, g, q, p, y, etc).<br /><br />imagettftext is unbelievably useful when you need to create header images using non-standard fonts.  Amazing.  Huge thanks to the devs.<br /><br />--Julian</span></code></div>
  </div>
 </div>
  <div class="note" id="44127">  <div class="votes">
    <div id="Vu44127">
    <a href="/manual/vote-note.php?id=44127&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44127">
    <a href="/manual/vote-note.php?id=44127&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44127" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#44127" class="name">
  <strong class="user"><em>plusplus7 at hotmail dot com</em></strong></a><a class="genanchor" href="#44127"> &para;</a><div class="date" title="2004-07-15 01:37"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44127">
<div class="phpcode"><code><span class="html">If you are getting all rectangles instead of text, it may well mean that your ttf font is not opentype, particularly if it is an older freeware one. This requirement didn't exist in older versions so you may find that your font stops working after you upgrade. To fix this problem, try downloading the free MS Volt utility. From there, open your font file, and then click on Compile, and resave.</span></code></div>
  </div>
 </div>
  <div class="note" id="79233">  <div class="votes">
    <div id="Vu79233">
    <a href="/manual/vote-note.php?id=79233&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79233">
    <a href="/manual/vote-note.php?id=79233&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79233" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#79233" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#79233"> &para;</a><div class="date" title="2007-11-16 04:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79233">
<div class="phpcode"><code><span class="html">Just to comment on Sohel Taslims great function...<br />if anyone needs to add BACKGROUND TRANSPARENCY to this kind of function (which almost does everyone one would want already) then add <br /><br />$bg_color = imagecolorat($im,1,1);<br />imagecolortransparent($im, $bg_color);<br /><br />ABOVE the "if($L_R_C == 0){ //Justify Left"  line</span></code></div>
  </div>
 </div>
  <div class="note" id="82706">  <div class="votes">
    <div id="Vu82706">
    <a href="/manual/vote-note.php?id=82706&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82706">
    <a href="/manual/vote-note.php?id=82706&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82706" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#82706" class="name">
  <strong class="user"><em>damititi at gmail dot com</em></strong></a><a class="genanchor" href="#82706"> &para;</a><div class="date" title="2008-04-22 01:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82706">
<div class="phpcode"><code><span class="html">First of all, thanks sk89q for the func! it was exactly I was looking for.<br /><br />I made a change. Depending on the letter, the text were incorrect vertical aligned.<br />I replace the line:<br />                $line_height = $dimensions[1] - $dimensions[7];<br />for the following:<br />                $line_height = $size+4;<br /><br />No matter if mama or jeje is written, the vertical position will be the same.</span></code></div>
  </div>
 </div>
  <div class="note" id="81746">  <div class="votes">
    <div id="Vu81746">
    <a href="/manual/vote-note.php?id=81746&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81746">
    <a href="/manual/vote-note.php?id=81746&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81746" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#81746" class="name">
  <strong class="user"><em>llewellyntd at gmail dot com</em></strong></a><a class="genanchor" href="#81746"> &para;</a><div class="date" title="2008-03-12 03:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81746">
<div class="phpcode"><code><span class="html">Hi All,<br /><br />I struggled for moths to do a decent text warp with GD lib. Here is the code that I made use of:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//word wrap<br /></span><span class="default">$warpText </span><span class="keyword">= </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="comment">//display text<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$fontSize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$fontColor</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$warpText</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps somebody.<br /><br />Cheers</span></code></div>
  </div>
 </div>
  <div class="note" id="81088">  <div class="votes">
    <div id="Vu81088">
    <a href="/manual/vote-note.php?id=81088&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81088">
    <a href="/manual/vote-note.php?id=81088&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81088" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#81088" class="name">
  <strong class="user"><em>m0r1arty at mail dot ru</em></strong></a><a class="genanchor" href="#81088"> &para;</a><div class="date" title="2008-02-13 10:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81088">
<div class="phpcode"><code><span class="html">Sorry my English.<br />I have trouble with using imagettftext under Windows.<br />I can't used short name of fonts(example "arial","arialbd.ttf" etc). PHP say what not find this font.<br />Manipulation with environment GDFONTPATH lost.<br />This is my solution<br /><span class="default">&lt;?php<br />$dir</span><span class="keyword">=</span><span class="default">opendir</span><span class="keyword">(</span><span class="string">'./font/'</span><span class="keyword">);</span><span class="comment">//directory with fonts<br /></span><span class="keyword">if(</span><span class="default">$dir</span><span class="keyword">)<br />    while(</span><span class="default">$f</span><span class="keyword">=</span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)){<br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\.ttf$/'</span><span class="keyword">,</span><span class="default">$f</span><span class="keyword">)){<br />            </span><span class="default">$font</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">,</span><span class="default">$f</span><span class="keyword">);<br />            </span><span class="default">define</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">realpath</span><span class="keyword">(</span><span class="string">'./font/'</span><span class="keyword">.</span><span class="default">$f</span><span class="keyword">));<br />        }<br />    }<br />if(</span><span class="default">$dir</span><span class="keyword">)<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Directory "font" have two file: arial.ttf and arialbd.ttf<br />Now one can using constant font name by calling imagettftext:<br />imagettftext($img,12,0,25,28,$color,arialbd,'some text');</span></code></div>
  </div>
 </div>
  <div class="note" id="71399">  <div class="votes">
    <div id="Vu71399">
    <a href="/manual/vote-note.php?id=71399&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71399">
    <a href="/manual/vote-note.php?id=71399&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71399" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#71399" class="name">
  <strong class="user"><em>Roy van Arem</em></strong></a><a class="genanchor" href="#71399"> &para;</a><div class="date" title="2006-11-26 08:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71399">
<div class="phpcode"><code><span class="html">If you want to display a list of fonts in a directory and see what they look like, you could do something like this:<br /><br />&lt;HTML&gt;&lt;BODY&gt;<br /><br /><span class="default">&lt;?php<br /><br />$folder</span><span class="keyword">=</span><span class="default">dir</span><span class="keyword">(</span><span class="string">"fonts/"</span><span class="keyword">); </span><span class="comment">//The directory where your fonts reside<br /><br /></span><span class="keyword">while(</span><span class="default">$font</span><span class="keyword">=</span><span class="default">$folder</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">())<br />  {<br /><br />  if(</span><span class="default">stristr</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">,</span><span class="string">'.ttf'</span><span class="keyword">))echo </span><span class="string">'&lt;IMG SRC="img.php?'</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">)).</span><span class="string">'"&gt;'</span><span class="keyword">; </span><span class="comment">//only ttf fonts<br /><br />  </span><span class="keyword">}<br /><br /></span><span class="default">$folder</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />&lt;/BODY&gt;&lt;/HTML&gt;<br /><br />The file for 'img.php' should be something like this:<br /><br /><span class="default">&lt;?php<br /><br />$font</span><span class="keyword">=</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"QUERY_STRING"</span><span class="keyword">];<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">$im</span><span class="keyword">=@</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">)or die(</span><span class="string">"Cannot Initialize new GD image stream"</span><span class="keyword">);<br /><br /></span><span class="default">$black</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$white</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br /><br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">18</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">25</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">,</span><span class="string">"fonts/"</span><span class="keyword">.</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">);<br /><br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Something similar I implemented at <a href="http://font.beginstart.com" rel="nofollow" target="_blank">http://font.beginstart.com</a></span></code></div>
  </div>
 </div>
  <div class="note" id="70946">  <div class="votes">
    <div id="Vu70946">
    <a href="/manual/vote-note.php?id=70946&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70946">
    <a href="/manual/vote-note.php?id=70946&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70946" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#70946" class="name">
  <strong class="user"><em>ben at evolutioncomputing co uk</em></strong></a><a class="genanchor" href="#70946"> &para;</a><div class="date" title="2006-11-05 01:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70946">
<div class="phpcode"><code><span class="html">A centralised text watermark - of  any length, that automatically sizes to about 70% of the width, and can be rotated to any angle.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* Get image info */<br /></span><span class="default">$Image </span><span class="keyword">= @</span><span class="default">ImageCreateFromJPEG </span><span class="keyword">(</span><span class="string">"YourImage.jpg"</span><span class="keyword">) ;<br /></span><span class="default">$sx </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">) ;<br /></span><span class="default">$sy </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">) ;<br />if (</span><span class="default">$WatermarkNeeded</span><span class="keyword">)<br />    {<br />    </span><span class="comment">/* Set text info */<br />    </span><span class="default">$Text</span><span class="keyword">=</span><span class="string">"Copyright Ben Clay" </span><span class="keyword">;<br />    </span><span class="default">$Font</span><span class="keyword">=</span><span class="string">"arial.ttf" </span><span class="keyword">;<br />    </span><span class="default">$FontColor </span><span class="keyword">= </span><span class="default">ImageColorAllocate </span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">) ;<br />    </span><span class="default">$FontShadow </span><span class="keyword">= </span><span class="default">ImageColorAllocate </span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">) ;<br />    </span><span class="default">$Rotation </span><span class="keyword">= </span><span class="default">30 </span><span class="keyword">;<br />    </span><span class="comment">/* Make a copy image */<br />    </span><span class="default">$OriginalImage </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$sx</span><span class="keyword">,</span><span class="default">$sy</span><span class="keyword">) ;<br />    </span><span class="default">ImageCopy </span><span class="keyword">(</span><span class="default">$OriginalImage</span><span class="keyword">,</span><span class="default">$Image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$sx</span><span class="keyword">,</span><span class="default">$sy</span><span class="keyword">) ;<br />    </span><span class="comment">/* Iterate to get the size up */<br />    </span><span class="default">$FontSize</span><span class="keyword">=</span><span class="default">1 </span><span class="keyword">;<br />    do<br />        {<br />        </span><span class="default">$FontSize </span><span class="keyword">*= </span><span class="default">1.1 </span><span class="keyword">;<br />        </span><span class="default">$Box </span><span class="keyword">= @</span><span class="default">ImageTTFBBox</span><span class="keyword">(</span><span class="default">$FontSize</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$Font</span><span class="keyword">,</span><span class="default">$Text</span><span class="keyword">);<br />        </span><span class="default">$TextWidth </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$Box</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$Box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ;<br />        </span><span class="default">$TextHeight </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$Box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$Box</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) ;<br />        }<br />    while (</span><span class="default">$TextWidth </span><span class="keyword">&lt; </span><span class="default">$sx</span><span class="keyword">*</span><span class="default">0.7</span><span class="keyword">) ;<br />    </span><span class="comment">/*  Awkward maths to get the origin of the text in the right place */ <br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$sx</span><span class="keyword">/</span><span class="default">2 </span><span class="keyword">- </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$Rotation</span><span class="keyword">))*</span><span class="default">$TextWidth</span><span class="keyword">/</span><span class="default">2 </span><span class="keyword">;<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$sy</span><span class="keyword">/</span><span class="default">2 </span><span class="keyword">+ </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$Rotation</span><span class="keyword">))*</span><span class="default">$TextWidth</span><span class="keyword">/</span><span class="default">2 </span><span class="keyword">+ </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$Rotation</span><span class="keyword">))*</span><span class="default">$TextHeight</span><span class="keyword">/</span><span class="default">2 </span><span class="keyword">;<br />    </span><span class="comment">/* Make shadow text first followed by solid text */<br />    </span><span class="default">ImageTTFText </span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">,</span><span class="default">$FontSize</span><span class="keyword">,</span><span class="default">$Rotation</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">+</span><span class="default">4</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">+</span><span class="default">4</span><span class="keyword">,</span><span class="default">$FontShadow</span><span class="keyword">,</span><span class="default">$Font</span><span class="keyword">,</span><span class="default">$Text</span><span class="keyword">);<br />    </span><span class="default">ImageTTFText </span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">,</span><span class="default">$FontSize</span><span class="keyword">,</span><span class="default">$Rotation</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$FontColor</span><span class="keyword">,</span><span class="default">$Font</span><span class="keyword">,</span><span class="default">$Text</span><span class="keyword">);<br />    </span><span class="comment">/* merge original image into version with text to show image through text */<br />    </span><span class="default">ImageCopyMerge </span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">,</span><span class="default">$OriginalImage</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$sx</span><span class="keyword">,</span><span class="default">$sy</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">) ;<br />    }<br /><br /></span><span class="default">ImageJPEG </span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">) ;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77739">  <div class="votes">
    <div id="Vu77739">
    <a href="/manual/vote-note.php?id=77739&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77739">
    <a href="/manual/vote-note.php?id=77739&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77739" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#77739" class="name">
  <strong class="user"><em>Ole Clausen</em></strong></a><a class="genanchor" href="#77739"> &para;</a><div class="date" title="2007-09-11 09:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77739">
<div class="phpcode"><code><span class="html">Comment to: Sohel Taslim (03-Aug-2007 06:19)<br /><br />Thanks for the function which I have modified a bit. In the new version the lines have equal space between them (the g's in your example create bigger space between the lines) - set by the parameter '$Leading'.<br /><br />I have used the for-loop for better performance and slimmed the rest a little  :)<br /><br />    /**<br />     * @name                    : makeImageF<br />     * <br />     * Function for create image from text with selected font. Justify text in image (0-Left, 1-Right, 2-Center).<br />     *<br />     * @param String $text     : String to convert into the Image.<br />     * @param String $font     : Font name of the text. Kip font file in same folder.<br />     * @param int    $Justify  : Justify text in image (0-Left, 1-Right, 2-Center).<br />     * @param int    $Leading  : Space between lines.<br />     * @param int    $W        : Width of the Image.<br />     * @param int    $H        : Hight of the Image.<br />     * @param int    $X        : x-coordinate of the text into the image.<br />     * @param int    $Y        : y-coordinate of the text into the image.<br />     * @param int    $fsize    : Font size of text.<br />     * @param array  $color    : RGB color array for text color.<br />     * @param array  $bgcolor  : RGB color array for background.<br />     * <br />     */<br />    function imagettfJustifytext($text, $font="CENTURY.TTF", $Justify=2, $Leading=0, $W=0, $H=0, $X=0, $Y=0, $fsize=12, $color=array(0x0,0x0,0x0), $bgcolor=array(0xFF,0xFF,0xFF)){<br />        <br />        $angle = 0;<br />        $_bx = imageTTFBbox($fsize,0,$font,$text);<br />        $s = split("[\n]+", $text);  // Array of lines<br />        $nL = count($s);  // Number of lines<br />        $W = ($W==0)?abs($_bx[2]-$_bx[0]):$W;    // If Width not initialized by programmer then it will detect and assign perfect width. <br />        $H = ($H==0)?abs($_bx[5]-$_bx[3])+($nL&gt;1?($nL*$Leading):0):$H;    // If Height not initialized by programmer then it will detect and assign perfect height. <br />        <br />        $im = @imagecreate($W, $H)<br />            or die("Cannot Initialize new GD image stream");<br />        <br />        $background_color = imagecolorallocate($im, $bgcolor[0], $bgcolor[1], $bgcolor[2]);  // RGB color background.<br />        $text_color = imagecolorallocate($im, $color[0], $color[1], $color[2]); // RGB color text.<br />        <br />        if ($Justify == 0){ //Justify Left<br />            imagettftext($im, $fsize, $angle, $X, $fsize, $text_color, $font, $text);<br />        } else {<br />            // Create alpha-nummeric string with all international characters - both upper- and lowercase<br />            $alpha = range("a", "z");<br />            $alpha = $alpha.strtoupper($alpha).range(0, 9);<br />            // Use the string to determine the height of a line<br />            $_b = imageTTFBbox($fsize,0,$font,$alpha);<br />            $_H = abs($_b[5]-$_b[3]);<br />            $__H=0;<br />            for ($i=0; $i&lt;$nL; $i++) {<br />                $_b = imageTTFBbox($fsize,0,$font,$s[$i]);<br />                $_W = abs($_b[2]-$_b[0]);<br />                //Defining the X coordinate.<br />                if ($Justify == 1) $_X = $W-$_W;  // Justify Right<br />                else $_X = abs($W/2)-abs($_W/2);  // Justify Center<br />                <br />                //Defining the Y coordinate.<br />                $__H += $_H;<br />                imagettftext($im, $fsize, $angle, $_X, $__H, $text_color, $font, $s[$i]);<br />                $__H += $Leading;<br />            }<br />        }<br />        <br />        return $im;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="117209">  <div class="votes">
    <div id="Vu117209">
    <a href="/manual/vote-note.php?id=117209&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117209">
    <a href="/manual/vote-note.php?id=117209&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117209" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#117209" class="name">
  <strong class="user"><em>simbiat at bk dot ru</em></strong></a><a class="genanchor" href="#117209"> &para;</a><div class="date" title="2015-05-02 02:15"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117209">
<div class="phpcode"><code><span class="html">Another way to wrap and center using wordwrap and learning the number of lines in the result of that wordwrap<br /><br /><span class="default">&lt;?php<br /><br />$text</span><span class="keyword">=</span><span class="string">"privet privet privet privet privet privet2 privet2 privet2 privet2 privet2 privet3"</span><span class="keyword">;<br /></span><span class="default">$text</span><span class="keyword">=</span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">35</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br /><br /></span><span class="comment">//setting the image header in order to proper display the image<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="comment">//try to create an image<br /></span><span class="default">$im </span><span class="keyword">= @</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">460</span><span class="keyword">, </span><span class="default">215</span><span class="keyword">)<br />    or die(</span><span class="string">"Cannot Initialize new GD image stream"</span><span class="keyword">);<br /></span><span class="comment">//set the background color of the image<br /></span><span class="default">$background_color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="comment">//set the color for the text<br /></span><span class="default">$text_color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">);<br /></span><span class="comment">//adf the string to the image<br /><br /></span><span class="default">$font </span><span class="keyword">= </span><span class="string">"verdana.ttf"</span><span class="keyword">;<br /></span><span class="default">$font_size </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;<br /></span><span class="default">$angle </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="default">$splittext </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">( </span><span class="string">"\n" </span><span class="keyword">, </span><span class="default">$text </span><span class="keyword">);<br /></span><span class="default">$lines </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$splittext</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$splittext </span><span class="keyword">as </span><span class="default">$text</span><span class="keyword">) {<br />    </span><span class="default">$text_box </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">,</span><span class="default">$angle</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />    </span><span class="default">$text_width </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">$text_box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$text_box</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]));<br />    </span><span class="default">$text_height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">$text_box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">], </span><span class="default">$text_box</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]));<br />    </span><span class="default">$x </span><span class="keyword">= (</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">) - </span><span class="default">$text_width</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">$y </span><span class="keyword">= ((</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">) + </span><span class="default">$text_height</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">)-(</span><span class="default">$lines</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">)*</span><span class="default">$text_height</span><span class="keyword">;<br />    </span><span class="default">$lines</span><span class="keyword">=</span><span class="default">$lines</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$text_color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />}<br /><br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76728">  <div class="votes">
    <div id="Vu76728">
    <a href="/manual/vote-note.php?id=76728&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76728">
    <a href="/manual/vote-note.php?id=76728&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76728" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#76728" class="name">
  <strong class="user"><em>Borgso</em></strong></a><a class="genanchor" href="#76728"> &para;</a><div class="date" title="2007-07-27 04:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76728">
<div class="phpcode"><code><span class="html">Right align out of "webmaster at higher-designs dot com" code<br /><span class="default">&lt;?php<br />$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$font </span><span class="keyword">= </span><span class="string">'visitor.ttf'</span><span class="keyword">;<br /></span><span class="default">$fontsize </span><span class="keyword">= </span><span class="string">"12"</span><span class="keyword">;<br /></span><span class="default">$fontangle </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">;<br /></span><span class="default">$imagewidth </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">$imageheight </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">"My right align text"</span><span class="keyword">;<br /><br /></span><span class="default">$box </span><span class="keyword">= @</span><span class="default">imageTTFBbox</span><span class="keyword">(</span><span class="default">$fontsize</span><span class="keyword">,</span><span class="default">$fontangle</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$textwidth </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /></span><span class="default">$textheight </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /></span><span class="default">$xcord </span><span class="keyword">= </span><span class="default">$imagewidth </span><span class="keyword">- (</span><span class="default">$textwidth</span><span class="keyword">)-</span><span class="default">2</span><span class="keyword">; </span><span class="comment">// 2 = some space from right side.<br /></span><span class="default">$ycord </span><span class="keyword">= (</span><span class="default">$imageheight</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)+(</span><span class="default">$textheight</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">ImageTTFText </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$fontsize</span><span class="keyword">, </span><span class="default">$fontangle</span><span class="keyword">, </span><span class="default">$xcord</span><span class="keyword">, </span><span class="default">$ycord</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61227">  <div class="votes">
    <div id="Vu61227">
    <a href="/manual/vote-note.php?id=61227&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61227">
    <a href="/manual/vote-note.php?id=61227&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61227" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#61227" class="name">
  <strong class="user"><em>--Colibri--</em></strong></a><a class="genanchor" href="#61227"> &para;</a><div class="date" title="2006-01-28 12:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61227">
<div class="phpcode"><code><span class="html">If you have configured and compiled PHP with all the necessary command-line options and still get the error:<br /><br />Fatal error: Call to undefined function imagettftext()<br /><br />Try doing a "make clean"  before building the php apache module:<br /><br />./configure [...]<br />make clean<br />make<br />make install <br /><br />This may solve your problem (and hopefully keep you from wasting hours trying different compile options!)</span></code></div>
  </div>
 </div>
  <div class="note" id="50599">  <div class="votes">
    <div id="Vu50599">
    <a href="/manual/vote-note.php?id=50599&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50599">
    <a href="/manual/vote-note.php?id=50599&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50599" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#50599" class="name">
  <strong class="user"><em>erik[at]phpcastle.com</em></strong></a><a class="genanchor" href="#50599"> &para;</a><div class="date" title="2005-03-04 04:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50599">
<div class="phpcode"><code><span class="html">Remember!!!<br /><br />When uploading a font to your website you have to set the transfer mode to binary. It took me some time to find out :P. Tried to download the font from my website and it was spoiled.<br /><br />In your script, the path to your font, use realpath("arial.ttf") so there is no confusion about that.</span></code></div>
  </div>
 </div>
  <div class="note" id="68366">  <div class="votes">
    <div id="Vu68366">
    <a href="/manual/vote-note.php?id=68366&amp;page=function.imagettftext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68366">
    <a href="/manual/vote-note.php?id=68366&amp;page=function.imagettftext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68366" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#68366" class="name">
  <strong class="user"><em>jwe</em></strong></a><a class="genanchor" href="#68366"> &para;</a><div class="date" title="2006-07-24 11:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68366">
<div class="phpcode"><code><span class="html">I found this line a little confusing:<br /><br />"May include decimal numeric character references (of the form: &amp;#8364;) to access characters in a font beyond position 127."<br /><br />I was using a font that had apostrophes and quotes stored in a non-standard position, and so they were being rendered as spaces by imagettftext.  This line seemed to suggest a solution, but it took a while to figure it out.<br /><br />Turns out, a "decimal numeric character reference" is a decimal conversion of the hex value of the *unicode* position of the character you want.  For a while I was trying ASCII positions (I knew the ALT+ code for typing the character I needed in Windows).<br /><br />In the Windows XP character map, the unicode positions are shown as U+2018 or U+201C, etc.  Ignore the U+ and convert that hex number to decimal, and then stick that in your text string with the &amp;# on the front and ; on the end, and pass it to imagettftext.<br /><br />--Julian</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagettftext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagettftext.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
