<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagettfbbox - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagettfbbox.php">
 <link rel="shorturl" href="https://www.php.net/imagettfbbox">
 <link rel="alternate" href="https://www.php.net/imagettfbbox" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagetruecolortopalette.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagettftext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagettfbbox.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagettfbbox.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagettfbbox.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagettfbbox.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagettfbbox.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagettfbbox.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagettfbbox.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagettfbbox.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagettfbbox.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagettfbbox.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagettfbbox.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Give the bounding box of a text using TrueType fonts" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagettfbbox - Manual" />
<meta name="twitter:description" content="Give the bounding box of a text using TrueType fonts" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagettfbbox - Manual" />
<meta itemprop="description" content="Give the bounding box of a text using TrueType fonts" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Give the bounding box of a text using TrueType fonts" />

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
        <a href="function.imagettftext.php">
          imagettftext &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagetruecolortopalette.php">
          &laquo; imagetruecolortopalette        </a>
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
            <option value='en/function.imagettfbbox.php' selected="selected">English</option>
            <option value='de/function.imagettfbbox.php'>German</option>
            <option value='es/function.imagettfbbox.php'>Spanish</option>
            <option value='fr/function.imagettfbbox.php'>French</option>
            <option value='it/function.imagettfbbox.php'>Italian</option>
            <option value='ja/function.imagettfbbox.php'>Japanese</option>
            <option value='pt_BR/function.imagettfbbox.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagettfbbox.php'>Russian</option>
            <option value='tr/function.imagettfbbox.php'>Turkish</option>
            <option value='uk/function.imagettfbbox.php'>Ukrainian</option>
            <option value='zh/function.imagettfbbox.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagettfbbox" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagettfbbox</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagettfbbox</span> &mdash; <span class="dc-title">Give the bounding box of a text using TrueType fonts</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagettfbbox-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagettfbbox</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$size</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$font_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function calculates and returns the bounding box in pixels
   for a TrueType text.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Prior to PHP 8.0.0, <span class="function"><a href="function.imageftbbox.php" class="function">imageftbbox()</a></span> was an extended variant of
    <span class="function"><strong>imagettfbbox()</strong></span> which additionally supported the
    <code class="parameter">extrainfo</code>.
    As of PHP 8.0.0, <span class="function"><strong>imagettfbbox()</strong></span> is an alias of <span class="function"><a href="function.imageftbbox.php" class="function">imageftbbox()</a></span>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagettfbbox-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">The font size in points.</p>
     </dd>
    
    
     <dt><code class="parameter">angle</code></dt>
     <dd>
      <p class="para">
       Angle in degrees in which <code class="parameter">string</code> will be measured.
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
    

    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be measured.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Same as in <span class="function"><a href="function.imagettftext.php" class="function">imagettftext()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagettfbbox-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>imagettfbbox()</strong></span> returns an array with 8
   elements representing four points making the bounding box of the
   text on success and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>key</th>
       <th>contents</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>0</td>
       <td>lower left corner, X position</td>
      </tr>

      <tr>
       <td>1</td>
       <td>lower left corner, Y position</td>
      </tr>

      <tr>
       <td>2</td>
       <td>lower right corner, X position</td>
      </tr>

      <tr>
       <td>3</td>
       <td>lower right corner, Y position</td>
      </tr>

      <tr>
       <td>4</td>
       <td>upper right corner, X position</td>
      </tr>

      <tr>
       <td>5</td>
       <td>upper right corner, Y position</td>
      </tr>

      <tr>
       <td>6</td>
       <td>upper left corner, X position</td>
      </tr>

      <tr>
       <td>7</td>
       <td>upper left corner, Y position</td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   The points are relative to the <em>text</em> regardless of the
   <code class="parameter">angle</code>, so &quot;upper left&quot; means in the top left-hand 
   corner seeing the text horizontally.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagettfbbox-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagettfbbox-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2940">
    <p><strong>Example #1 <span class="function"><strong>imagettfbbox()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 300x150 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">300</span><span style="color: #007700">, </span><span style="color: #0000BB">150</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the background to be white<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">299</span><span style="color: #007700">, </span><span style="color: #0000BB">299</span><span style="color: #007700">, </span><span style="color: #0000BB">$white</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Path to our font file<br /></span><span style="color: #0000BB">$font </span><span style="color: #007700">= </span><span style="color: #DD0000">'./arial.ttf'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// First we create our bounding box for the first text<br /></span><span style="color: #0000BB">$bbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imagettfbbox</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #DD0000">'Powered by PHP ' </span><span style="color: #007700">. </span><span style="color: #0000BB">phpversion</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// This is our cordinates for X and Y<br /></span><span style="color: #0000BB">$x </span><span style="color: #007700">= </span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] + (</span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">) / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - (</span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">] / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - </span><span style="color: #0000BB">25</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$y </span><span style="color: #007700">= </span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] + (</span><span style="color: #0000BB">imagesy</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">) / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - (</span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">] / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Write it<br /></span><span style="color: #0000BB">imagettftext</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">, </span><span style="color: #0000BB">$black</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #DD0000">'Powered by PHP ' </span><span style="color: #007700">. </span><span style="color: #0000BB">phpversion</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// Create the next bounding box for the second text<br /></span><span style="color: #0000BB">$bbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imagettfbbox</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #DD0000">'and Zend Engine ' </span><span style="color: #007700">. </span><span style="color: #0000BB">zend_version</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// Set the cordinates so its next to the first text<br /></span><span style="color: #0000BB">$x </span><span style="color: #007700">= </span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] + (</span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">) / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - (</span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">] / </span><span style="color: #0000BB">2</span><span style="color: #007700">) + </span><span style="color: #0000BB">10</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$y </span><span style="color: #007700">= </span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] + (</span><span style="color: #0000BB">imagesy</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">) / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - (</span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">] / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Write it<br /></span><span style="color: #0000BB">imagettftext</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">, </span><span style="color: #0000BB">$black</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #DD0000">'and Zend Engine ' </span><span style="color: #007700">. </span><span style="color: #0000BB">zend_version</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// Output to browser<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagettfbbox-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is only available if
PHP is compiled with freetype support (<strong class="option configure">--with-freetype-dir=DIR</strong>)
</span></p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagettfbbox-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagettftext.php" class="function" rel="rdfs-seeAlso">imagettftext()</a> - Write text to the image using TrueType fonts</span></li>
   <li><span class="function"><a href="function.imageftbbox.php" class="function" rel="rdfs-seeAlso">imageftbbox()</a> - Give the bounding box of a text using fonts via freetype2</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagettfbbox.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagettfbbox%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagettfbbox&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagettfbbox.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">37 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97357">  <div class="votes">
    <div id="Vu97357">
    <a href="/manual/vote-note.php?id=97357&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97357">
    <a href="/manual/vote-note.php?id=97357&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97357" title="80% like this...">
    25
    </div>
  </div>
  <a href="#97357" class="name">
  <strong class="user"><em>blackbart at simail dot it</em></strong></a><a class="genanchor" href="#97357"> &para;</a><div class="date" title="2010-04-15 11:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97357">
<div class="phpcode"><code><span class="html">I wrote a simple function that calculates the *exact* bounding box (single pixel precision).
<br />The function returns an associative array with these keys:
<br />left, top:  coordinates you will pass to imagettftext 
<br />width, height: dimension of the image you have to create
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">calculateTextBox</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$font_angle</span><span class="keyword">, </span><span class="default">$font_file</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">) {
<br />  </span><span class="default">$box   </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$font_angle</span><span class="keyword">, </span><span class="default">$font_file</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />  if( !</span><span class="default">$box </span><span class="keyword">)
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />  </span><span class="default">$min_x </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">( array(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]) );
<br />  </span><span class="default">$max_x </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">( array(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]) );
<br />  </span><span class="default">$min_y </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">( array(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) );
<br />  </span><span class="default">$max_y </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">( array(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">], </span><span class="default">$box</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) );
<br />  </span><span class="default">$width  </span><span class="keyword">= ( </span><span class="default">$max_x </span><span class="keyword">- </span><span class="default">$min_x </span><span class="keyword">);
<br />  </span><span class="default">$height </span><span class="keyword">= ( </span><span class="default">$max_y </span><span class="keyword">- </span><span class="default">$min_y </span><span class="keyword">);
<br />  </span><span class="default">$left   </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">( </span><span class="default">$min_x </span><span class="keyword">) + </span><span class="default">$width</span><span class="keyword">;
<br />  </span><span class="default">$top    </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">( </span><span class="default">$min_y </span><span class="keyword">) + </span><span class="default">$height</span><span class="keyword">;
<br />  </span><span class="comment">// to calculate the exact bounding box i write the text in a large image
<br />  </span><span class="default">$img     </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$width </span><span class="keyword">&lt;&lt; </span><span class="default">2</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">&lt;&lt; </span><span class="default">2 </span><span class="keyword">);
<br />  </span><span class="default">$white   </span><span class="keyword">=  </span><span class="default">imagecolorallocate</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255 </span><span class="keyword">);
<br />  </span><span class="default">$black   </span><span class="keyword">=  </span><span class="default">imagecolorallocate</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">);
<br />  </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);
<br />  </span><span class="comment">// for sure the text is completely in the image!
<br />  </span><span class="default">imagettftext</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">,
<br />                </span><span class="default">$font_angle</span><span class="keyword">, </span><span class="default">$left</span><span class="keyword">, </span><span class="default">$top</span><span class="keyword">,
<br />                </span><span class="default">$white</span><span class="keyword">, </span><span class="default">$font_file</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />  </span><span class="comment">// start scanning (0=&gt; black =&gt; empty)
<br />  </span><span class="default">$rleft  </span><span class="keyword">= </span><span class="default">$w4 </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">&lt;&lt;</span><span class="default">2</span><span class="keyword">;
<br />  </span><span class="default">$rright </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />  </span><span class="default">$rbottom   </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />  </span><span class="default">$rtop </span><span class="keyword">= </span><span class="default">$h4 </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">&lt;&lt;</span><span class="default">2</span><span class="keyword">;
<br />  for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$w4</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ )
<br />    for( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$h4</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ )
<br />      if( </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">) ){
<br />        </span><span class="default">$rleft   </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">( </span><span class="default">$rleft</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">);
<br />        </span><span class="default">$rright  </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">( </span><span class="default">$rright</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">);
<br />        </span><span class="default">$rtop    </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">( </span><span class="default">$rtop</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">);
<br />        </span><span class="default">$rbottom </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">( </span><span class="default">$rbottom</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">);
<br />      }
<br />  </span><span class="comment">// destroy img and serve the result
<br />  </span><span class="default">imagedestroy</span><span class="keyword">( </span><span class="default">$img </span><span class="keyword">);
<br />  return array( </span><span class="string">"left"   </span><span class="keyword">=&gt; </span><span class="default">$left </span><span class="keyword">- </span><span class="default">$rleft</span><span class="keyword">,
<br />                </span><span class="string">"top"    </span><span class="keyword">=&gt; </span><span class="default">$top  </span><span class="keyword">- </span><span class="default">$rtop</span><span class="keyword">,
<br />                </span><span class="string">"width"  </span><span class="keyword">=&gt; </span><span class="default">$rright </span><span class="keyword">- </span><span class="default">$rleft </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">,
<br />                </span><span class="string">"height" </span><span class="keyword">=&gt; </span><span class="default">$rbottom </span><span class="keyword">- </span><span class="default">$rtop </span><span class="keyword">+ </span><span class="default">1 </span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105593">  <div class="votes">
    <div id="Vu105593">
    <a href="/manual/vote-note.php?id=105593&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105593">
    <a href="/manual/vote-note.php?id=105593&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105593" title="72% like this...">
    11
    </div>
  </div>
  <a href="#105593" class="name">
  <strong class="user"><em>jodybrabec at gmail dot com</em></strong></a><a class="genanchor" href="#105593"> &para;</a><div class="date" title="2011-08-30 03:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105593">
<div class="phpcode"><code><span class="html">Very CLEAR version of func., with example....
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">calculateTextBox</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$fontFile</span><span class="keyword">,</span><span class="default">$fontSize</span><span class="keyword">,</span><span class="default">$fontAngle</span><span class="keyword">) {
<br />    </span><span class="comment">/************
<br />    simple function that calculates the *exact* bounding box (single pixel precision). 
<br />    The function returns an associative array with these keys: 
<br />    left, top:  coordinates you will pass to imagettftext 
<br />    width, height: dimension of the image you have to create 
<br />    *************/
<br />    </span><span class="default">$rect </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">,</span><span class="default">$fontAngle</span><span class="keyword">,</span><span class="default">$fontFile</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);
<br />    </span><span class="default">$minX </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]));
<br />    </span><span class="default">$maxX </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]));
<br />    </span><span class="default">$minY </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]));
<br />    </span><span class="default">$maxY </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]));
<br />    
<br />    return array(
<br />     </span><span class="string">"left"   </span><span class="keyword">=&gt; </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$minX</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">,
<br />     </span><span class="string">"top"    </span><span class="keyword">=&gt; </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$minY</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">,
<br />     </span><span class="string">"width"  </span><span class="keyword">=&gt; </span><span class="default">$maxX </span><span class="keyword">- </span><span class="default">$minX</span><span class="keyword">,
<br />     </span><span class="string">"height" </span><span class="keyword">=&gt; </span><span class="default">$maxY </span><span class="keyword">- </span><span class="default">$minY</span><span class="keyword">,
<br />     </span><span class="string">"box"    </span><span class="keyword">=&gt; </span><span class="default">$rect
<br />    </span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// Example usage - gif image output
<br />
<br /></span><span class="default">$text_string    </span><span class="keyword">= </span><span class="string">"Hullo World"</span><span class="keyword">;
<br /></span><span class="default">$font_ttf        </span><span class="keyword">= </span><span class="string">"./fonts/arial.ttf"</span><span class="keyword">;
<br /></span><span class="default">$font_size        </span><span class="keyword">= </span><span class="default">22</span><span class="keyword">;
<br /></span><span class="default">$text_angle        </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br /></span><span class="default">$text_padding    </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">; </span><span class="comment">// Img padding - around text
<br />
<br /></span><span class="default">$the_box        </span><span class="keyword">= </span><span class="default">calculateTextBox</span><span class="keyword">(</span><span class="default">$text_string</span><span class="keyword">, </span><span class="default">$font_ttf</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$text_angle</span><span class="keyword">);
<br />
<br /></span><span class="default">$imgWidth    </span><span class="keyword">= </span><span class="default">$the_box</span><span class="keyword">[</span><span class="string">"width"</span><span class="keyword">] + </span><span class="default">$text_padding</span><span class="keyword">;
<br /></span><span class="default">$imgHeight    </span><span class="keyword">= </span><span class="default">$the_box</span><span class="keyword">[</span><span class="string">"height"</span><span class="keyword">] + </span><span class="default">$text_padding</span><span class="keyword">; 
<br />
<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$imgWidth</span><span class="keyword">,</span><span class="default">$imgHeight</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">));
<br />
<br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,
<br />    </span><span class="default">$font_size</span><span class="keyword">,
<br />    </span><span class="default">$text_angle</span><span class="keyword">,
<br />    </span><span class="default">$the_box</span><span class="keyword">[</span><span class="string">"left"</span><span class="keyword">] + (</span><span class="default">$imgWidth </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$the_box</span><span class="keyword">[</span><span class="string">"width"</span><span class="keyword">] / </span><span class="default">2</span><span class="keyword">),
<br />    </span><span class="default">$the_box</span><span class="keyword">[</span><span class="string">"top"</span><span class="keyword">] + (</span><span class="default">$imgHeight </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$the_box</span><span class="keyword">[</span><span class="string">"height"</span><span class="keyword">] / </span><span class="default">2</span><span class="keyword">),
<br />    </span><span class="default">$color</span><span class="keyword">,
<br />    </span><span class="default">$font_ttf</span><span class="keyword">,
<br />    </span><span class="default">$text_string</span><span class="keyword">);
<br />
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/gif"</span><span class="keyword">);
<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />[ remember: No spaces before or after the <span class="default">&lt;?php </span><span class="keyword">... </span><span class="default">?&gt;</span> tag, because of header() call, you Roast! ]</span></code></div>
  </div>
 </div>
  <div class="note" id="68518">  <div class="votes">
    <div id="Vu68518">
    <a href="/manual/vote-note.php?id=68518&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68518">
    <a href="/manual/vote-note.php?id=68518&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68518" title="62% like this...">
    13
    </div>
  </div>
  <a href="#68518" class="name">
  <strong class="user"><em>marclaz</em></strong></a><a class="genanchor" href="#68518"> &para;</a><div class="date" title="2006-07-31 06:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68518">
<div class="phpcode"><code><span class="html">Please note that as imageTTFBbox and imageTTFText functions return an array of coordinates which could be negative numbers care must be taken with height and width calculations.<br /><br />The rigth way to do that is to use the abs() function:<br /><br />for an horizontal text:<br /><br />$box = @imageTTFBbox($size,0,$font,$text);<br />$width = abs($box[4] - $box[0]);<br />$height = abs($box[5] - $box[1]);<br /><br />Then to center your text at ($x,$y) position the code should be like that:<br /><br />$x -= $width/2;<br />$y += $heigth/2;<br /><br />imageTTFText($img,$size,0,$x,$y,$color,$font,$text);<br /><br />this because (0,0) page origin is topleft page corner and (0,0) text origin is lower-left readable text corner.<br /><br />Hope this help.</span></code></div>
  </div>
 </div>
  <div class="note" id="51373">  <div class="votes">
    <div id="Vu51373">
    <a href="/manual/vote-note.php?id=51373&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51373">
    <a href="/manual/vote-note.php?id=51373&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51373" title="80% like this...">
    3
    </div>
  </div>
  <a href="#51373" class="name">
  <strong class="user"><em>ryan at retronetworks dot com</em></strong></a><a class="genanchor" href="#51373"> &para;</a><div class="date" title="2005-03-28 07:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51373">
<div class="phpcode"><code><span class="html">Here is a function that lets you write a string with your own "font tracking" level (the amount of pixels separating each character).  It uses imagettfbbox to determine the width of each character, so it doesn't discriminate against the skinnier of characters.  For this example, let $t = the amount of distance in pixels you want to separate each character from its neighbors.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ImageTTFTextWithTracking</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$t</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">) {<br />    </span><span class="default">$numchar </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$numchar</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="comment"># Assign character<br />        </span><span class="default">$char</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /><br />        </span><span class="comment"># Write character<br />        </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, (</span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$w </span><span class="keyword">+ (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$t</span><span class="keyword">)), </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$char</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        <br />        </span><span class="comment"># Get width of character<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$char</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$w </span><span class="keyword">+ </span><span class="default">$width</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Be aware that it currently does not work for angles other than the 0 default (I have no need for that).</span></code></div>
  </div>
 </div>
  <div class="note" id="108536">  <div class="votes">
    <div id="Vu108536">
    <a href="/manual/vote-note.php?id=108536&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108536">
    <a href="/manual/vote-note.php?id=108536&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108536" title="70% like this...">
    8
    </div>
  </div>
  <a href="#108536" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#108536"> &para;</a><div class="date" title="2012-05-04 01:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108536">
<div class="phpcode"><code><span class="html">It seems to be worth pointing out that the "points" unit GD2 is using corresponds to 96 dpi, as defined in gd.h:<br />#define GD_RESOLUTION           96      /* pixels per inch */<br /><br />So if you want to translate the bbox back to font points, you need to multiply all coordinates by 72/96 = 3/4.</span></code></div>
  </div>
 </div>
  <div class="note" id="83249">  <div class="votes">
    <div id="Vu83249">
    <a href="/manual/vote-note.php?id=83249&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83249">
    <a href="/manual/vote-note.php?id=83249&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83249" title="72% like this...">
    5
    </div>
  </div>
  <a href="#83249" class="name">
  <strong class="user"><em>Valentijn de Pagter</em></strong></a><a class="genanchor" href="#83249"> &para;</a><div class="date" title="2008-05-16 10:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83249">
<div class="phpcode"><code><span class="html">If you're looking for easy text alignment, you need to use the imagettfbbox() command. When given the correct parameters, it will return the boundaries of your to-be-made text field in an array, which will allow you to calculate the x and y coordinate that you need to use for centering or aligning your text.<br /><br />A horizontal centering example:<br /><br /><span class="default">&lt;?php<br /><br />$tb </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">17</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'airlock.ttf'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />$tb would contain:<br /><br />Array<br />(<br />    [0] =&gt; 0 // lower left X coordinate<br />    [1] =&gt; -1 // lower left Y coordinate<br />    [2] =&gt; 198 // lower right X coordinate<br />    [3] =&gt; -1 // lower right Y coordinate<br />    [4] =&gt; 198 // upper right X coordinate<br />    [5] =&gt; -20 // upper right Y coordinate<br />    [6] =&gt; 0 // upper left X coordinate<br />    [7] =&gt; -20 // upper left Y coordinate<br />)<br /><br />For horizontal alignment, we need to substract the "text box's" width { $tb[2] or $tb[4] } from the image's width and then substract by two.<br /><br />Saying you have a 200px wide image, you could do something like this:<br /><br /><span class="default">&lt;?php<br /><br />$x </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">((</span><span class="default">200 </span><span class="keyword">- </span><span class="default">$tb</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) / </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// lower left X coordinate for text<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$tc</span><span class="keyword">, </span><span class="string">'airlock.ttf'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">); </span><span class="comment">// write text to image<br /><br /></span><span class="default">?&gt;<br /></span><br />This'll give you perfect horizontal center alignment for your text, give or take 1 pixel. Have fun!</span></code></div>
  </div>
 </div>
  <div class="note" id="97211">  <div class="votes">
    <div id="Vu97211">
    <a href="/manual/vote-note.php?id=97211&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97211">
    <a href="/manual/vote-note.php?id=97211&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97211" title="71% like this...">
    3
    </div>
  </div>
  <a href="#97211" class="name">
  <strong class="user"><em>peterjwest3 at gmail dot com</em></strong></a><a class="genanchor" href="#97211"> &para;</a><div class="date" title="2010-04-08 06:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97211">
<div class="phpcode"><code><span class="html">As many of you know, this function is bugged in several versions of PHP. It should return the coordinates relative to the baseline of the font. So if your text includes characters like g and p then the bounding box should extend below zero on the Y axis, however it doesn't. This is a problem because imagettftext() positions text using the baseline, so all your text will be misaligned.<br /><br />My solution is to create an image of the desired font and font-size using all ascii characters with imagettfbbox() and imagettftext(). The height of this image is used as the height for the real image.<br /><br />I then analyse the image to get the vertical offset of the text (the background color should be $baseColor)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getYOffset</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$baseColor</span><span class="keyword">) {<br />    for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">height</span><span class="keyword">(); </span><span class="default">$y</span><span class="keyword">++)<br />        for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">width</span><span class="keyword">(); </span><span class="default">$x</span><span class="keyword">++)<br />            if (</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) !== </span><span class="default">$baseColor</span><span class="keyword">) <br />                return </span><span class="default">$y</span><span class="keyword">; }<br /></span><span class="default">?&gt;<br /></span><br />This offset can be used as the baseline for the font (for this font-size). You can use a similar trick for the horizontal offset, but that changes depending on the first character.</span></code></div>
  </div>
 </div>
  <div class="note" id="86134">  <div class="votes">
    <div id="Vu86134">
    <a href="/manual/vote-note.php?id=86134&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86134">
    <a href="/manual/vote-note.php?id=86134&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86134" title="61% like this...">
    5
    </div>
  </div>
  <a href="#86134" class="name">
  <strong class="user"><em>decimealgo at gmail dot com</em></strong></a><a class="genanchor" href="#86134"> &para;</a><div class="date" title="2008-10-04 10:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86134">
<div class="phpcode"><code><span class="html">This is a function which reformats a text string into a text block of a given width.
<br />Usefull when you have a long single line string and want to fit it into a fixed width but don't care about it's height
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">makeTextBlock</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$fontsize</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">)
<br />{    
<br />    </span><span class="default">$words </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />    </span><span class="default">$lines </span><span class="keyword">= array(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />    </span><span class="default">$currentLine </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)
<br />    {
<br />        </span><span class="default">$lineSize </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fontsize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$currentLine</span><span class="keyword">] . </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />        if(</span><span class="default">$lineSize</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$lineSize</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt; </span><span class="default">$width</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$currentLine</span><span class="keyword">] .= </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        }
<br />        else
<br />        {
<br />            </span><span class="default">$currentLine</span><span class="keyword">++;
<br />            </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$currentLine</span><span class="keyword">] = </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        }
<br />    }
<br />    
<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109589">  <div class="votes">
    <div id="Vu109589">
    <a href="/manual/vote-note.php?id=109589&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109589">
    <a href="/manual/vote-note.php?id=109589&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109589" title="66% like this...">
    1
    </div>
  </div>
  <a href="#109589" class="name">
  <strong class="user"><em>go4christian at gmail dot com</em></strong></a><a class="genanchor" href="#109589"> &para;</a><div class="date" title="2012-07-31 03:02"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109589">
<div class="phpcode"><code><span class="html">Automatic line breaks: This simple function is able automatically create line breaks if you want to write a text on an image. All you have to specify is a maximum length.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">write_multiline_text</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$start_x</span><span class="keyword">, </span><span class="default">$start_y</span><span class="keyword">, </span><span class="default">$max_width</span><span class="keyword">) 
<br />{
<br />        </span><span class="comment">//split the string
<br />        //build new string word for word
<br />        //check everytime you add a word if string still fits
<br />        //otherwise, remove last word, post current string and start fresh on a new line
<br />        </span><span class="default">$words </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        </span><span class="default">$tmp_string </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        
<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)
<br />        {
<br />            </span><span class="default">$tmp_string </span><span class="keyword">.= </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="string">" "</span><span class="keyword">;
<br />            
<br />            </span><span class="comment">//check size of string
<br />            </span><span class="default">$dim </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$tmp_string</span><span class="keyword">);
<br />            
<br />            if(</span><span class="default">$dim</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] &lt; </span><span class="default">$max_width</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$string </span><span class="keyword">= </span><span class="default">$tmp_string</span><span class="keyword">;
<br />            } else {
<br />                </span><span class="default">$i</span><span class="keyword">--;
<br />                </span><span class="default">$tmp_string </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />                </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$start_x</span><span class="keyword">, </span><span class="default">$start_y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br />                
<br />                </span><span class="default">$string </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />                </span><span class="default">$start_y </span><span class="keyword">+= </span><span class="default">22</span><span class="keyword">; </span><span class="comment">//change this to adjust line-height. Additionally you could use the information from the "dim" array to automatically figure out how much you have to "move down"
<br />            </span><span class="keyword">}
<br />        }
<br />                                
<br />        </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$start_x</span><span class="keyword">, </span><span class="default">$start_y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//"draws" the rest of the string
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108955">  <div class="votes">
    <div id="Vu108955">
    <a href="/manual/vote-note.php?id=108955&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108955">
    <a href="/manual/vote-note.php?id=108955&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108955" title="62% like this...">
    2
    </div>
  </div>
  <a href="#108955" class="name">
  <strong class="user"><em>magnum dot tc dot mr at gmail dot com</em></strong></a><a class="genanchor" href="#108955"> &para;</a><div class="date" title="2012-06-07 10:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108955">
<div class="phpcode"><code><span class="html">Please note that the 3rd argument is really a "path". 
<br /><span class="default">&lt;?php
<br />imagettfbbox</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'arial.ttf'</span><span class="keyword">, </span><span class="string">'Hello, World!'</span><span class="keyword">);  </span><span class="comment">// will result in "Warning: imagettfbbox(): Could not find/open font in ...php on line ..."
<br /></span><span class="default">?&gt;
<br /></span>
<br />use instead something like this:
<br /><span class="default">&lt;?php imagettfbbox</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'./arial.ttf'</span><span class="keyword">, </span><span class="string">'Hello, World!'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>or
<br /><span class="default">&lt;?php imagettfbbox</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">getcwd</span><span class="keyword">().</span><span class="string">'/arial.ttf'</span><span class="keyword">, </span><span class="string">'Hello, World!'</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75407">  <div class="votes">
    <div id="Vu75407">
    <a href="/manual/vote-note.php?id=75407&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75407">
    <a href="/manual/vote-note.php?id=75407&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75407" title="62% like this...">
    2
    </div>
  </div>
  <a href="#75407" class="name">
  <strong class="user"><em>mike at mikeleigh dot com</em></strong></a><a class="genanchor" href="#75407"> &para;</a><div class="date" title="2007-05-28 07:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75407">
<div class="phpcode"><code><span class="html">I have been testing this function for a while now and have come up with many of the same issues that other people have touched upon.  Not being able to calculate the width of the text correctly.  Or if a solution is found then it won't work with a hanging letter or a negative start letter like 'j'.<br /><br />Like Ralph I also wanted to draw a box around some text and this would require me being pixel perfect with the font.  The trouble is I did not know which font would be used or which size.  This led me to come up with a solution which I am sharing below.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagettfbboxextended</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">) {<br />    </span><span class="comment">/*this function extends imagettfbbox and includes within the returned array<br />    the actual text width and height as well as the x and y coordinates the <br />    text should be drawn from to render correctly.  This currently only works<br />    for an angle of zero and corrects the issue of hanging letters e.g. jpqg*/<br />    </span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br />    </span><span class="comment">//calculate x baseline<br />    </span><span class="keyword">if(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &gt;= -</span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$bbox</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] = </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">) * -</span><span class="default">1</span><span class="keyword">;<br />    } else {<br />        </span><span class="comment">//$bbox['x'] = 0;<br />        </span><span class="default">$bbox</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] = </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">2</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">//calculate actual text width<br />    </span><span class="default">$bbox</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">] = </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    if(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt; -</span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$bbox</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">] = </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//calculate y baseline<br />    </span><span class="default">$bbox</span><span class="keyword">[</span><span class="string">'y'</span><span class="keyword">] = </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">);<br /><br />    </span><span class="comment">//calculate actual text height<br />    </span><span class="default">$bbox</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">] = </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) - </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    if(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] &gt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$bbox</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">] = </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$bbox</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The function above gives the correct x and y coordinates that the text should be drawn from and also gives the actual image width and height.  This has been tested with various fonts and sizes ranging from 6 up to 144 points.  Some of the output will appear to be incorrect and have an extra pixel on the right, using verdana at size 144 and outputting the character 'Q' for example.  This is not an error as this is part of the anti-aliasing of the font output.<br /><br />Example Usage:<br /><span class="default">&lt;?php<br />$font </span><span class="keyword">= </span><span class="string">'c:\windows\fonts\verdana.ttf'</span><span class="keyword">;<br /></span><span class="default">$font_size </span><span class="keyword">= </span><span class="default">144</span><span class="keyword">;<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">'jÜyZgQ'</span><span class="keyword">;<br /></span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettfbboxextended</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Return Values:<br />Array<br />(<br />    [0] =&gt; -8<br />    [1] =&gt; 40<br />    [2] =&gt; 715<br />    [3] =&gt; 40<br />    [4] =&gt; 715<br />    [5] =&gt; -177<br />    [6] =&gt; -8<br />    [7] =&gt; -177<br />    [x] =&gt; 6<br />    [width] =&gt; 722<br />    [y] =&gt; 176<br />    [height] =&gt; 216<br />)<br /><br />Further notes can be found here along with images of the output of the function <a href="http://mikeleigh.com/links/imagettfbbox" rel="nofollow" target="_blank">http://mikeleigh.com/links/imagettfbbox</a></span></code></div>
  </div>
 </div>
  <div class="note" id="117234">  <div class="votes">
    <div id="Vu117234">
    <a href="/manual/vote-note.php?id=117234&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117234">
    <a href="/manual/vote-note.php?id=117234&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117234" title="60% like this...">
    1
    </div>
  </div>
  <a href="#117234" class="name">
  <strong class="user"><em>indraaaa34 at gmail dot com</em></strong></a><a class="genanchor" href="#117234"> &para;</a><div class="date" title="2015-05-07 12:49"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117234">
<div class="phpcode"><code><span class="html">The returned array order is like this:<br />-----------------------------<br />| X:4  Y:5      | X:   Y:7        |<br />-----------------------------<br />| X:0  Y:1      | X:2  Y:3       |<br />-----------------------------<br /><br />eg:<br />4 for the upper left X <br />5 for the upper left Y and so on.</span></code></div>
  </div>
 </div>
  <div class="note" id="101537">  <div class="votes">
    <div id="Vu101537">
    <a href="/manual/vote-note.php?id=101537&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101537">
    <a href="/manual/vote-note.php?id=101537&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101537" title="57% like this...">
    2
    </div>
  </div>
  <a href="#101537" class="name">
  <strong class="user"><em>a2hansolo at gmail dot com</em></strong></a><a class="genanchor" href="#101537"> &para;</a><div class="date" title="2010-12-22 11:29"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101537">
<div class="phpcode"><code><span class="html">measure bg image size, wrap text to fit image width
<br />
<br /><span class="default">&lt;?php
<br />$mx </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$main_img</span><span class="keyword">);
<br /></span><span class="default">$my </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$main_img</span><span class="keyword">);
<br />
<br /></span><span class="comment">//TEXT VARS/////////
<br /></span><span class="default">$main_text </span><span class="keyword">= ;
<br /></span><span class="default">$main_text_size </span><span class="keyword">= ;
<br /></span><span class="default">$main_text_x </span><span class="keyword">= (</span><span class="default">$mx</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br />
<br /></span><span class="default">$main_text_color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$main_img</span><span class="keyword">, </span><span class="default">$main_text_red</span><span class="keyword">, </span><span class="default">$main_text_green</span><span class="keyword">, </span><span class="default">$main_text_blue</span><span class="keyword">);
<br /></span><span class="default">$words </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$main_text</span><span class="keyword">);
<br /></span><span class="default">$lines </span><span class="keyword">= array(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); 
<br /></span><span class="default">$currentLine </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)
<br />    {
<br />        </span><span class="default">$lineSize </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$main_text_size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$mt_f</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$currentLine</span><span class="keyword">] . </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />        if(</span><span class="default">$lineSize</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$lineSize</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt; </span><span class="default">$mx</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$currentLine</span><span class="keyword">] .= </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        }
<br />        else
<br />        {
<br />            </span><span class="default">$currentLine</span><span class="keyword">++;
<br />            </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$currentLine</span><span class="keyword">] = </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        } 
<br />    }
<br /></span><span class="default">$line_count </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br /></span><span class="comment">// Loop through the lines and place them on the image
<br /></span><span class="keyword">foreach (</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$line_box </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$main_text_size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$mt_f</span><span class="keyword">, </span><span class="string">"</span><span class="default">$line</span><span class="string">"</span><span class="keyword">);
<br />    </span><span class="default">$line_width </span><span class="keyword">= </span><span class="default">$line_box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$line_box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />    </span><span class="default">$line_height </span><span class="keyword">= </span><span class="default">$line_box</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-</span><span class="default">$line_box</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];
<br />    </span><span class="default">$line_margin </span><span class="keyword">= (</span><span class="default">$mx</span><span class="keyword">-</span><span class="default">$line_width</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;
<br />    </span><span class="default">$line_y </span><span class="keyword">= ((</span><span class="default">$line_height</span><span class="keyword">+</span><span class="default">12</span><span class="keyword">) * </span><span class="default">$line_count</span><span class="keyword">);
<br />    </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$main_img</span><span class="keyword">, </span><span class="default">$main_t_s</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$line_margin</span><span class="keyword">, </span><span class="default">$line_y</span><span class="keyword">, </span><span class="default">$main_text_color</span><span class="keyword">, </span><span class="default">$mt_f</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);
<br />
<br />    </span><span class="comment">// Increment Y so the next line is below the previous line
<br />    </span><span class="default">$line_count </span><span class="keyword">++;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126426">  <div class="votes">
    <div id="Vu126426">
    <a href="/manual/vote-note.php?id=126426&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126426">
    <a href="/manual/vote-note.php?id=126426&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126426" title="100% like this...">
    2
    </div>
  </div>
  <a href="#126426" class="name">
  <strong class="user"><em>Somerset Ben</em></strong></a><a class="genanchor" href="#126426"> &para;</a><div class="date" title="2021-09-15 05:03"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126426">
<div class="phpcode"><code><span class="html">Pushing text around.<br /><br />I wanted to put various bits of text in the corners of an image so I created a function to accept a location in the image and then put a corner of the text (eg right,top) at that location. Rotation is not supported.<br /><br />Inputs to the function are fairly standard. The align parameter is two characters R|M|L (right, middle, top)for x alignment and T|M|B (top, middle, bottom) for y alignment; eg "LT" meaning left, top. Omitting the align parameter displays nothing.<br /><br />The function returns the size of the text block or false indicating failure.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagettfalign </span><span class="keyword">(&amp;</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$size</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$col</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$align</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">)<br />    {<br />    </span><span class="default">$box </span><span class="keyword">= </span><span class="default">imagettfbbox </span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">) ;<br />    if (!</span><span class="default">$box</span><span class="keyword">) return </span><span class="default">false </span><span class="keyword">;<br />    if (</span><span class="default">$align</span><span class="keyword">)<br />        {<br />        switch (</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$align</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) </span><span class="comment">// X position<br />            </span><span class="keyword">{<br />            case </span><span class="string">'L' </span><span class="keyword">: </span><span class="default">$tX </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]   ; break ;<br />            case </span><span class="string">'R' </span><span class="keyword">: </span><span class="default">$tX </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]   ; break ;<br />            case </span><span class="string">'M' </span><span class="keyword">: </span><span class="default">$tX </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]/</span><span class="default">2 </span><span class="keyword">; break ;<br />            default : return </span><span class="default">false </span><span class="keyword">;<br />            }<br />        switch (</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$align</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) </span><span class="comment">// Y position<br />            </span><span class="keyword">{<br />            case </span><span class="string">'B' </span><span class="keyword">: </span><span class="default">$tY </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$box</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]   ; break ;<br />            case </span><span class="string">'T' </span><span class="keyword">: </span><span class="default">$tY </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$box</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]   ; break ;<br />            case </span><span class="string">'M' </span><span class="keyword">: </span><span class="default">$tY </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$box</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]/</span><span class="default">2 </span><span class="keyword">; break ;<br />            default : return </span><span class="default">false </span><span class="keyword">;<br />            }<br />        if (!</span><span class="default">imagettftext </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$size</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$tX</span><span class="keyword">,</span><span class="default">$tY</span><span class="keyword">,</span><span class="default">$col</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">)) return </span><span class="default">false </span><span class="keyword">;<br />        }<br />    </span><span class="default">$r</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) ;<br />    </span><span class="default">$r</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) ;<br />    return </span><span class="default">$r </span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />An example (excluding font declarations, etc) would be:<br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">) ;<br /></span><span class="default">$colBlack </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$xy </span><span class="keyword">= </span><span class="default">imagettfalign </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">12</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">$colBlack</span><span class="keyword">,</span><span class="default">$ttFont</span><span class="keyword">,</span><span class="string">"The middle"</span><span class="keyword">,</span><span class="string">'MM'</span><span class="keyword">) ;<br /></span><span class="default">?&gt;<br /></span><br />This will show "The middle" smack in the centre of the image.<br /><br />Finally,  apologies for the non-standard indentation. It's just the way I've been doing it for years...</span></code></div>
  </div>
 </div>
  <div class="note" id="120671">  <div class="votes">
    <div id="Vu120671">
    <a href="/manual/vote-note.php?id=120671&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120671">
    <a href="/manual/vote-note.php?id=120671&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120671" title="100% like this...">
    2
    </div>
  </div>
  <a href="#120671" class="name">
  <strong class="user"><em>james dot heazlewood at crownbet com au</em></strong></a><a class="genanchor" href="#120671"> &para;</a><div class="date" title="2017-02-20 07:21"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120671">
<div class="phpcode"><code><span class="html">I found the bounding boxes a bit tricky to use when trying to rotate AND align text boxes. I wrote this function allows you to set left, right or center aligned text and also rotate it.<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">/**<br />   * Renders rotate-able and align-able text of any font or colour<br />   * <br />   * @param resource $img Image resource<br />   * @param string $text<br />   * @param int $x<br />   * @param int $y<br />   * @param int $fontSize<br />   * @param string $fontFile Full path to font file<br />   * @param array $color Red, green, blue values in either int (255) or hex (0xFF)<br />   * @param string $align Accept 'left', 'right', and defaults to center<br />   * @return void<br />   */<br />  </span><span class="keyword">function </span><span class="default">gd_text_aligned</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$fontSize</span><span class="keyword">, </span><span class="default">$fontFile</span><span class="keyword">, </span><span class="default">$color </span><span class="keyword">= [</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">], </span><span class="default">$align </span><span class="keyword">= </span><span class="string">'left'</span><span class="keyword">) {<br /><br />      </span><span class="comment">// Create colour Resource<br />      </span><span class="default">$textColor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br /><br />      </span><span class="comment">// Create bounding box co-ordinates<br />      </span><span class="default">$boundingBox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">, </span><span class="default">$rotation</span><span class="keyword">, </span><span class="default">$fontFile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />      </span><span class="default">$textBox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$fontFile</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br />      </span><span class="comment">//  Bounding box array key meanings<br />      //<br />      //  $bBox[0] = lower left  X<br />      //  $bBox[1] = lower left  Y<br />      //  $bBox[2] = lower right X<br />      //  $bBox[3] = lower right Y<br />      //  $bBox[4] = upper right X<br />      //  $bBox[5] = upper right Y<br />      //  $bBox[6] = upper left  X<br />      //  $bBox[7] = upper left  Y<br />      //<br />      //     6,7     |     4,5<br />      //        -----+-----<br />      //     0,1     |     2,3<br />      //<br />      </span><span class="default">$boundingBoxWidth </span><span class="keyword">= </span><span class="default">$boundingBox</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$boundingBox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />      </span><span class="default">$boundingBoxHeight </span><span class="keyword">= </span><span class="default">$boundingBox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$boundingBox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />      </span><span class="default">$flatHeight </span><span class="keyword">= </span><span class="default">$textBox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$textBox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]; <br /><br />      </span><span class="comment">// Align left right or centred?<br />      </span><span class="keyword">if(</span><span class="default">$align </span><span class="keyword">== </span><span class="string">'left'</span><span class="keyword">) {<br />          </span><span class="default">$drawX </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$rotation </span><span class="keyword">* </span><span class="default">M_PI </span><span class="keyword">/ </span><span class="default">180</span><span class="keyword">) * (</span><span class="default">$flatHeight </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">);<br />          </span><span class="default">$drawY </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$rotation </span><span class="keyword">* </span><span class="default">M_PI </span><span class="keyword">/ </span><span class="default">180</span><span class="keyword">) * (</span><span class="default">$flatHeight </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">);<br />      } else if(</span><span class="default">$align </span><span class="keyword">== </span><span class="string">'right'</span><span class="keyword">) {<br />          </span><span class="default">$drawX </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$boundingBoxWidth </span><span class="keyword">+ </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$rotation </span><span class="keyword">* </span><span class="default">M_PI </span><span class="keyword">/ </span><span class="default">180</span><span class="keyword">) * (</span><span class="default">$flatHeight </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">);<br />          </span><span class="default">$drawY </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$boundingBoxHeight </span><span class="keyword">+ </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$rotation </span><span class="keyword">* </span><span class="default">M_PI </span><span class="keyword">/ </span><span class="default">180</span><span class="keyword">) * (</span><span class="default">$flatHeight </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">);<br />      } else {<br />          </span><span class="comment">// no alignment (centred)<br />          </span><span class="default">$drawX </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$boundingBoxWidth </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br />          </span><span class="default">$drawY </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$boundingBoxHeight </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br />      }<br />      <br />      </span><span class="comment">// draw text<br />      </span><span class="default">imagettftext</span><span class="keyword">(<br />          </span><span class="default">$img</span><span class="keyword">,<br />          </span><span class="default">$fontSize</span><span class="keyword">,<br />          </span><span class="default">$rotation</span><span class="keyword">, </span><span class="default">$drawX</span><span class="keyword">, </span><span class="default">$drawY</span><span class="keyword">,<br />          </span><span class="default">$textColor</span><span class="keyword">, </span><span class="default">$fontFile</span><span class="keyword">, </span><span class="default">$text<br />      </span><span class="keyword">);<br />      <br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120117">  <div class="votes">
    <div id="Vu120117">
    <a href="/manual/vote-note.php?id=120117&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120117">
    <a href="/manual/vote-note.php?id=120117&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120117" title="100% like this...">
    2
    </div>
  </div>
  <a href="#120117" class="name">
  <strong class="user"><em>tuxedobob</em></strong></a><a class="genanchor" href="#120117"> &para;</a><div class="date" title="2016-11-03 04:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120117">
<div class="phpcode"><code><span class="html">You might save yourself a lot of time and headache if you remember that the bold version of a font is NOT necessarily the same height as the regular version of that font!<br /><br />(In fact, it can be shorter!)</span></code></div>
  </div>
 </div>
  <div class="note" id="101684">  <div class="votes">
    <div id="Vu101684">
    <a href="/manual/vote-note.php?id=101684&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101684">
    <a href="/manual/vote-note.php?id=101684&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101684" title="100% like this...">
    2
    </div>
  </div>
  <a href="#101684" class="name">
  <strong class="user"><em>Andrey Zakharov</em></strong></a><a class="genanchor" href="#101684"> &para;</a><div class="date" title="2011-01-04 03:16"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101684">
<div class="phpcode"><code><span class="html">For mixed text drawing on image, height given by this function is useless and leads to text's hip-hops over the baseline .<br /><br />I will use just this:<br /><span class="default">&lt;?php<br />$size </span><span class="keyword">= </span><span class="default">12</span><span class="keyword">;</span><span class="comment">//font height<br /></span><span class="default">$font </span><span class="keyword">= </span><span class="string">'Arial'</span><span class="keyword">;</span><span class="comment">// your font<br /></span><span class="default">$char </span><span class="keyword">= </span><span class="string">'Test'</span><span class="keyword">;<br /></span><span class="default">$char </span><span class="keyword">= </span><span class="string">'With W'</span><span class="keyword">;<br /></span><span class="default">$char </span><span class="keyword">= </span><span class="string">'without w but with p and y and q'</span><span class="keyword">;<br /><br />    </span><span class="default">$rect </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$char</span><span class="keyword">);<br /><br />    </span><span class="default">$image_height </span><span class="keyword">=</span><span class="default">abs</span><span class="keyword">( </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] );</span><span class="comment">//do no respect bottom margin<br />    </span><span class="default">$imw </span><span class="keyword">= </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">//as usual<br />    </span><span class="default">$bx </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">( </span><span class="default">$rect</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">] ); </span><span class="comment">// X offset <br />    </span><span class="default">$by </span><span class="keyword">= </span><span class="default">$size </span><span class="keyword">* </span><span class="default">1.25</span><span class="keyword">; </span><span class="comment">// Y offset - we will use const LINEHEIGHT<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125053">  <div class="votes">
    <div id="Vu125053">
    <a href="/manual/vote-note.php?id=125053&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125053">
    <a href="/manual/vote-note.php?id=125053&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125053" title="no votes...">
    0
    </div>
  </div>
  <a href="#125053" class="name">
  <strong class="user"><em>dvladimirov77 at gmail dot com</em></strong></a><a class="genanchor" href="#125053"> &para;</a><div class="date" title="2020-05-27 12:43"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125053">
<div class="phpcode"><code><span class="html">if the line starts with a narrow character, for example: "1"<br /><br />    function new_imagettfbbox($size, $angle, $fontfile, $text)<br />    {<br />        $first = substr($text, 0, 1);<br />        $sub = substr($text, 1);<br />        <br />        switch ($first)<br />        {<br />            case '1':<br />                $text = '0' . $sub;<br />                break;<br />        }<br />        <br />        return imagettfbbox($size, $angle, $fontfile, $text);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="93088">  <div class="votes">
    <div id="Vu93088">
    <a href="/manual/vote-note.php?id=93088&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93088">
    <a href="/manual/vote-note.php?id=93088&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93088" title="100% like this...">
    1
    </div>
  </div>
  <a href="#93088" class="name">
  <strong class="user"><em>hkc@taiwan</em></strong></a><a class="genanchor" href="#93088"> &para;</a><div class="date" title="2009-08-22 12:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93088">
<div class="phpcode"><code><span class="html">I want to output a bounding box of a text as an image straightly. I did like this:<br /><br /><span class="default">&lt;?php<br /><br />$text </span><span class="keyword">= </span><span class="string">"&lt;?php echo \"hello, world\"; ?&gt;"</span><span class="keyword">;<br /></span><span class="default">$font </span><span class="keyword">= </span><span class="string">"./arial.ttf"</span><span class="keyword">;<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="string">"60"</span><span class="keyword">;<br /><br /></span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /><br /></span><span class="default">$bgcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + (</span><span class="default">$width </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] / </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + (</span><span class="default">$height </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] / </span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="default">$last_pixel</span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />{<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        if (isset(</span><span class="default">$blank_left</span><span class="keyword">) &amp;&amp; </span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$blank_left</span><span class="keyword">)<br />        {<br />            break;<br />        }<br /><br />        if (</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">) !== </span><span class="default">$last_pixel</span><span class="keyword">)<br />        {<br />            if (!isset(</span><span class="default">$blank_top</span><span class="keyword">))<br />            {<br />                </span><span class="default">$blank_top </span><span class="keyword">= </span><span class="default">$j</span><span class="keyword">;<br />            }<br />            </span><span class="default">$blank_left </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">;<br />            break;<br />        }<br /><br />        </span><span class="default">$last_pixel </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$x </span><span class="keyword">-= </span><span class="default">$blank_left</span><span class="keyword">;<br /></span><span class="default">$y </span><span class="keyword">-= </span><span class="default">$blank_top</span><span class="keyword">;<br /><br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76333">  <div class="votes">
    <div id="Vu76333">
    <a href="/manual/vote-note.php?id=76333&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76333">
    <a href="/manual/vote-note.php?id=76333&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76333" title="100% like this...">
    1
    </div>
  </div>
  <a href="#76333" class="name">
  <strong class="user"><em>bushj at rpi dot edu</em></strong></a><a class="genanchor" href="#76333"> &para;</a><div class="date" title="2007-07-10 09:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76333">
<div class="phpcode"><code><span class="html">Apparently the bounding box returned by imagettftext and imagettfbbox is not the same, and it appears as though imagettftext does a better job at calculating the actual bounding box (maybe because it has to render every character and it then finds out really everywhere it rendered).<br /><br />So, you can create a dummy image render the text to it and get a better box. Here is an example function:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">better_imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">) {<br />  </span><span class="default">$dummy </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />  </span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$dummy</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$dummy</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$dummy</span><span class="keyword">);<br />  return </span><span class="default">$bbox</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>If you use this a lot, it would be better to keep one dummy image instead of continually creating and destroying images.</span></code></div>
  </div>
 </div>
  <div class="note" id="116999">  <div class="votes">
    <div id="Vu116999">
    <a href="/manual/vote-note.php?id=116999&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116999">
    <a href="/manual/vote-note.php?id=116999&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116999" title="no votes...">
    0
    </div>
  </div>
  <a href="#116999" class="name">
  <strong class="user"><em>user107</em></strong></a><a class="genanchor" href="#116999"> &para;</a><div class="date" title="2015-03-31 03:36"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116999">
<div class="phpcode"><code><span class="html">I found a simple solution that was working for me:<br /><br /> <span class="default">&lt;?php<br />    </span><span class="keyword">if(!isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">])) </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] = </span><span class="default">44</span><span class="keyword">;<br />    if(!isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">])) </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">] = </span><span class="string">"Hello, world!"</span><span class="keyword">;<br /><br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="string">"ARIAL"</span><span class="keyword">, </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">]);<br />    </span><span class="default">$xsize </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />    </span><span class="default">$ysize </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$xsize</span><span class="keyword">, </span><span class="default">$ysize</span><span class="keyword">);<br />    </span><span class="default">$blue </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br />    </span><span class="default">$white </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />    </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]), </span><span class="default">$white</span><span class="keyword">, </span><span class="string">"ARIAL"</span><span class="keyword">, </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">]);<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"content-type: image/png"</span><span class="keyword">);<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">?&gt;</span> <br /><br />Here is the link with a examples:<br /><a href="http://www.tuxradar.com/practicalphp/11/2/6#null" rel="nofollow" target="_blank">http://www.tuxradar.com/practicalphp/11/2/6#null</a></span></code></div>
  </div>
 </div>
  <div class="note" id="111922">  <div class="votes">
    <div id="Vu111922">
    <a href="/manual/vote-note.php?id=111922&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111922">
    <a href="/manual/vote-note.php?id=111922&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111922" title="no votes...">
    0
    </div>
  </div>
  <a href="#111922" class="name">
  <strong class="user"><em>rasmus at mindplay dot dk</em></strong></a><a class="genanchor" href="#111922"> &para;</a><div class="date" title="2013-04-11 01:33"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111922">
<div class="phpcode"><code><span class="html">It should be noted that the bounding box coordinates returned by this function are inaccurate - bug reports about this have been open for 5 years, so expect this will likely never be fixed. <br /><br />More information here:<br /><br /><a href="https://gist.github.com/mindplay-dk/4429153" rel="nofollow" target="_blank">https://gist.github.com/mindplay-dk/4429153</a></span></code></div>
  </div>
 </div>
  <div class="note" id="90720">  <div class="votes">
    <div id="Vu90720">
    <a href="/manual/vote-note.php?id=90720&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90720">
    <a href="/manual/vote-note.php?id=90720&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90720" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90720" class="name">
  <strong class="user"><em>Dario</em></strong></a><a class="genanchor" href="#90720"> &para;</a><div class="date" title="2009-05-05 07:09"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90720">
<div class="phpcode"><code><span class="html">My solution to below-baseline characters is to simply apply a smaller angle and some padding when calculating your boundaries, so the function thinks your text goes below baseline. For example: 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// GET BOUNDS OF TEXT
<br /></span><span class="default">$bounds </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">*</span><span class="default">1.05</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">-</span><span class="default">3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86854">  <div class="votes">
    <div id="Vu86854">
    <a href="/manual/vote-note.php?id=86854&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86854">
    <a href="/manual/vote-note.php?id=86854&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86854" title="no votes...">
    0
    </div>
  </div>
  <a href="#86854" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#86854"> &para;</a><div class="date" title="2008-11-06 11:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86854">
<div class="phpcode"><code><span class="html">SIMPLE OVERLOADED FUNCTION: Adds TTF Center and Right Alignment to co ordintate points.
<br />Correctly demonstrates the use of the bouning box TTF function and the array of coordinates that it returns.
<br />
<br />After obtaining values and adjusting based on a set of values [L, C, R], it uses simple math based of the length of the text to move it from the origin (x = 0 )
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">imagettftextalign</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$alignment</span><span class="keyword">=</span><span class="string">'L'</span><span class="keyword">)
<br />{
<br />
<br />   </span><span class="comment">//check width of the text
<br />   </span><span class="default">$bbox </span><span class="keyword">= </span><span class="default">imagettfbbox </span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />   </span><span class="default">$textWidth </span><span class="keyword">= </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />   switch (</span><span class="default">$alignment</span><span class="keyword">) {
<br />       case </span><span class="string">"R"</span><span class="keyword">:
<br />           </span><span class="default">$x </span><span class="keyword">-= </span><span class="default">$textWidth</span><span class="keyword">;
<br />           break;
<br />       case </span><span class="string">"C"</span><span class="keyword">:
<br />           </span><span class="default">$x </span><span class="keyword">-= </span><span class="default">$textWidth </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;
<br />           break;
<br />   }
<br />
<br />   </span><span class="comment">//write text
<br />   </span><span class="default">imagettftext </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85266">  <div class="votes">
    <div id="Vu85266">
    <a href="/manual/vote-note.php?id=85266&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85266">
    <a href="/manual/vote-note.php?id=85266&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85266" title="no votes...">
    0
    </div>
  </div>
  <a href="#85266" class="name">
  <strong class="user"><em>beosman at gmail dot com</em></strong></a><a class="genanchor" href="#85266"> &para;</a><div class="date" title="2008-08-22 09:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85266">
<div class="phpcode"><code><span class="html">I was viewing the code for calculate the box of a text for a given font but I do not found one that works fine with different angles from zero, so I have made a function simpler than above:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">calculateTextBox</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$fontFile</span><span class="keyword">,</span><span class="default">$fontSize</span><span class="keyword">,</span><span class="default">$fontAngle</span><span class="keyword">) {<br />  </span><span class="default">$rect </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">,</span><span class="default">$fontAngle</span><span class="keyword">,</span><span class="default">$fontFile</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />  <br />  </span><span class="default">$minX </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]));<br />  </span><span class="default">$maxX </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]));<br />  </span><span class="default">$minY </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]));<br />  </span><span class="default">$maxY </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(array(</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">],</span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]));<br /><br />  return array(<br />    </span><span class="string">"left"   </span><span class="keyword">=&gt; </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$minX</span><span class="keyword">),<br />    </span><span class="string">"top"    </span><span class="keyword">=&gt; </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$minY</span><span class="keyword">),<br />    </span><span class="string">"width"  </span><span class="keyword">=&gt; </span><span class="default">$maxX </span><span class="keyword">- </span><span class="default">$minX</span><span class="keyword">,<br />    </span><span class="string">"height" </span><span class="keyword">=&gt; </span><span class="default">$maxY </span><span class="keyword">- </span><span class="default">$minY</span><span class="keyword">,<br />    </span><span class="string">"box"    </span><span class="keyword">=&gt; </span><span class="default">$rect<br />  </span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />With this function you can center an angled string in any image:<br /><br /><span class="default">&lt;?php<br /><br />  $mystring </span><span class="keyword">= </span><span class="string">"Hello world!"</span><span class="keyword">;<br /><br />  </span><span class="default">$imgWidth </span><span class="keyword">= </span><span class="default">300</span><span class="keyword">;<br />  </span><span class="default">$imgHeight </span><span class="keyword">= </span><span class="default">150</span><span class="keyword">;  <br /><br />  </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$imgWidth</span><span class="keyword">,</span><span class="default">$imgHeight</span><span class="keyword">);<br />  </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">));<br /><br />  </span><span class="default">$box </span><span class="keyword">= </span><span class="default">calculateTextBox</span><span class="keyword">(</span><span class="default">$mystring</span><span class="keyword">,</span><span class="string">"./Verdana.ttf"</span><span class="keyword">,</span><span class="default">15</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">);<br />  </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,<br />               </span><span class="default">15</span><span class="keyword">,<br />               </span><span class="default">45</span><span class="keyword">,<br />               </span><span class="default">$box</span><span class="keyword">[</span><span class="string">"left"</span><span class="keyword">] + (</span><span class="default">$imgWidth </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$box</span><span class="keyword">[</span><span class="string">"width"</span><span class="keyword">] / </span><span class="default">2</span><span class="keyword">),<br />               </span><span class="default">$box</span><span class="keyword">[</span><span class="string">"top"</span><span class="keyword">] + (</span><span class="default">$imgHeight </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$box</span><span class="keyword">[</span><span class="string">"height"</span><span class="keyword">] / </span><span class="default">2</span><span class="keyword">),<br />               </span><span class="default">$color</span><span class="keyword">,<br />               </span><span class="string">"./Verdana.ttf"</span><span class="keyword">,<br />               </span><span class="default">$mystring</span><span class="keyword">);<br /><br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/x-png"</span><span class="keyword">);<br />  </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82518">  <div class="votes">
    <div id="Vu82518">
    <a href="/manual/vote-note.php?id=82518&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82518">
    <a href="/manual/vote-note.php?id=82518&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82518" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82518" class="name">
  <strong class="user"><em>mihai.draghicioiu at gmailcom</em></strong></a><a class="genanchor" href="#82518"> &para;</a><div class="date" title="2008-04-14 03:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82518">
<div class="phpcode"><code><span class="html">To get the height for a line of text, I've found it useful to do:<br /><br /><span class="default">&lt;?php<br /><br />$bbox </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$ttf</span><span class="keyword">, </span><span class="string">" \n "</span><span class="keyword">); </span><span class="comment">// space, newline, space<br /><br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;<br /></span><br />I hope this helps. Before, I used the string "Tj", but that sometimes fell short, especially for crazy fonts.</span></code></div>
  </div>
 </div>
  <div class="note" id="80265">  <div class="votes">
    <div id="Vu80265">
    <a href="/manual/vote-note.php?id=80265&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80265">
    <a href="/manual/vote-note.php?id=80265&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80265" title="no votes...">
    0
    </div>
  </div>
  <a href="#80265" class="name">
  <strong class="user"><em>heshan at sjtu dot edu dot cn</em></strong></a><a class="genanchor" href="#80265"> &para;</a><div class="date" title="2008-01-07 04:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80265">
<div class="phpcode"><code><span class="html">the imagettfbbox and imagettftext quirks are:<br /><br />1. imagettfbbox and imagettftext have the same return value and both of them are wrong for angle not equal to zero.<br />2. imagettfbbox returns the correct bounding box when angle is zero.<br />3. the bounding box has a coordinate system that the x gets bigger from left to right and y gets bigger from top to bottom.<br />4. the "base point" used in imagettftext is the origin in the bounding box coordinate system.<br />5. when the angle is other than 0, it is actually rotated in the coordinate system with respect to the base point. so if we know the bounding box coordinate when angle is zero, we can get the new bounding box coordinate by doing the rotation by math equations manually.<br />6. to have pixel level accuracy, we should also be aware of another thing. suppose the axis is like this: |_|_|_|, the bounding box coordinate uses point on the vertical line while image function uses point on the horizontal line, so there is a 1 pixel difference you should take care of.<br /><br />The following snippet creates minimal images containing a letter of different font and rotation angle. This is especially useful in captcha scripts.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">create_font_image</span><span class="keyword">( </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$char </span><span class="keyword">)<br />{<br />    </span><span class="default">$rect </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">( </span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$char </span><span class="keyword">);<br />    if( </span><span class="default">0 </span><span class="keyword">== </span><span class="default">$angle </span><span class="keyword">) {<br />        </span><span class="default">$imh </span><span class="keyword">= </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br />        </span><span class="default">$imw </span><span class="keyword">= </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        </span><span class="default">$bx </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        </span><span class="default">$by </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br />    } else {<br />        </span><span class="default">$rad </span><span class="keyword">= </span><span class="default">deg2rad</span><span class="keyword">( </span><span class="default">$angle </span><span class="keyword">);<br />        </span><span class="default">$sin </span><span class="keyword">= </span><span class="default">sin</span><span class="keyword">( </span><span class="default">$rad </span><span class="keyword">);<br />        </span><span class="default">$cos </span><span class="keyword">= </span><span class="default">cos</span><span class="keyword">( </span><span class="default">$rad </span><span class="keyword">);<br />        if( </span><span class="default">$angle </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">) {<br />            </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">+ </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] * </span><span class="default">$sin</span><span class="keyword">;<br />            </span><span class="default">$bx </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">- </span><span class="default">round</span><span class="keyword">( </span><span class="default">$tmp </span><span class="keyword">);<br />            </span><span class="default">$imw </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">( </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">+ </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] * </span><span class="default">$sin </span><span class="keyword">- </span><span class="default">$tmp </span><span class="keyword">);<br />            </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">- </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] * </span><span class="default">$sin</span><span class="keyword">;<br />            </span><span class="default">$by </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">- </span><span class="default">round</span><span class="keyword">( </span><span class="default">$tmp </span><span class="keyword">);<br />            </span><span class="default">$imh </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">( </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">- </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] * </span><span class="default">$sin </span><span class="keyword">- </span><span class="default">$tmp </span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">+ </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] * </span><span class="default">$sin</span><span class="keyword">;<br />            </span><span class="default">$bx </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">- </span><span class="default">round</span><span class="keyword">( </span><span class="default">$tmp </span><span class="keyword">);<br />            </span><span class="default">$imw </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">( </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">+ </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] * </span><span class="default">$sin </span><span class="keyword">- </span><span class="default">$tmp </span><span class="keyword">);<br />            </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">- </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] * </span><span class="default">$sin</span><span class="keyword">;<br />            </span><span class="default">$by </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">- </span><span class="default">round</span><span class="keyword">( </span><span class="default">$tmp </span><span class="keyword">);<br />            </span><span class="default">$imh </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">( </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] * </span><span class="default">$cos </span><span class="keyword">- </span><span class="default">$rect</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] * </span><span class="default">$sin </span><span class="keyword">- </span><span class="default">$tmp </span><span class="keyword">);<br />        }<br />    }<br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$imw</span><span class="keyword">, </span><span class="default">$imh </span><span class="keyword">);<br />    </span><span class="default">imagefill</span><span class="keyword">( </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">( </span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255 </span><span class="keyword">) );<br />    </span><span class="default">imagettftext</span><span class="keyword">( </span><span class="default">$im</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bx</span><span class="keyword">, </span><span class="default">$by</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">( </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">), </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$char </span><span class="keyword">);<br />    </span><span class="default">imagegif</span><span class="keyword">( </span><span class="default">$im</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">( </span><span class="default">$font</span><span class="keyword">, </span><span class="string">'./' </span><span class="keyword">) . </span><span class="default">ord</span><span class="keyword">( </span><span class="default">$char </span><span class="keyword">) . </span><span class="default">$angle </span><span class="keyword">. </span><span class="string">'.gif' </span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">( </span><span class="default">$im </span><span class="keyword">);<br />}<br /><br /></span><span class="default">$chars </span><span class="keyword">= </span><span class="string">'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'</span><span class="keyword">;<br /></span><span class="default">$angles </span><span class="keyword">= array( -</span><span class="default">30</span><span class="keyword">, -</span><span class="default">20</span><span class="keyword">, -</span><span class="default">10</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">30 </span><span class="keyword">);<br /></span><span class="default">$fonts </span><span class="keyword">= array( </span><span class="string">'./latinwide.ttf'</span><span class="keyword">, </span><span class="string">'./verdana.ttf'</span><span class="keyword">, </span><span class="string">'./times.ttf'</span><span class="keyword">, </span><span class="string">'./broadway.ttf' </span><span class="keyword">);<br />foreach( </span><span class="default">$angles </span><span class="keyword">as </span><span class="default">$angle </span><span class="keyword">)<br />    foreach( </span><span class="default">$fonts </span><span class="keyword">as </span><span class="default">$font </span><span class="keyword">)<br />        for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$chars </span><span class="keyword">); ++</span><span class="default">$i </span><span class="keyword">)<br />            </span><span class="default">create_font_image</span><span class="keyword">( </span><span class="default">100</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77453">  <div class="votes">
    <div id="Vu77453">
    <a href="/manual/vote-note.php?id=77453&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77453">
    <a href="/manual/vote-note.php?id=77453&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77453" title="no votes...">
    0
    </div>
  </div>
  <a href="#77453" class="name">
  <strong class="user"><em>intuz et gmx dt de</em></strong></a><a class="genanchor" href="#77453"> &para;</a><div class="date" title="2007-08-29 11:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77453">
<div class="phpcode"><code><span class="html">I still got problems trying to rotate imagettftext using imagettfbbox.<br /><br />It's position calculation is mostly wrong. So i tried to rotate ttftext with IMAGEROTATE. <br /><br />As a special the result is in black fontcolor and transparent background.<br /><br />Hope it helps sombody (thanks for function convertBoundingBox, reading below)<br /><br />&lt;?<br />function ImgText($text,$fontsize,$font,$angle){<br />$im = '';<br />    if($text){<br />        if(!$fontsize || $fontsize &lt; 1) $fontsize = 12;<br />        if(!$font) $font = "fonts/arial.ttf";<br />        $bbox = imagettfbbox($fontsize, 0, $font, $text);<br />        $size=convertBoundingBox($bbox);<br />        $im = ImageCreatetruecolor($size['width'],$size['height']);<br /><br />        $white = ImageColorAllocate($im, 255, 255, 255);<br />        $black = ImageColorAllocate($im, 0,0,0);<br />        <br />        imagefill ($im, 0, 0, $white );<br />        imagettftext($im, $fontsize, 0, $size['xOffset'], $size['yOffset'], $black, $font, $text);<br />        $im = imagerotate( $im,$angle, $white);<br />        imagecolortransparent ($im,$white);<br />    }else{<br />        // No text<br />    }<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="118677">  <div class="votes">
    <div id="Vu118677">
    <a href="/manual/vote-note.php?id=118677&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118677">
    <a href="/manual/vote-note.php?id=118677&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118677" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#118677" class="name">
  <strong class="user"><em>gw at example dot com</em></strong></a><a class="genanchor" href="#118677"> &para;</a><div class="date" title="2016-01-18 05:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118677">
<div class="phpcode"><code><span class="html">a little something to replace in blackbart tip :<br /><br />// start scanning (0=&gt; black =&gt; empty) <br />  $rleft  = $w4 = $width&lt;&lt;2; <br />  $rright = 0; <br />  $rbottom   = 0; <br />  $rtop = $h4 = $height&lt;&lt;2; <br />  for( $x = 0; $x &lt; $w4; $x++ ) <br />    for( $y = 0; $y &lt; $h4; $y++ ) <br />      if( imagecolorat( $img, $x, $y ) ){ <br />        $rleft   = min( $rleft, $x ); <br />        $rright  = max( $rright, $x ); <br />        $rtop    = min( $rtop, $y ); <br />        $rbottom = max( $rbottom, $y ); <br />      } <br /><br />with<br /><br />// start scanning (0=&gt; black =&gt; empty) <br />  $break = false;<br />  $rleft  = $w4 = $width&lt;&lt;2; <br />  $rright = 0; <br />  $rbottom   = 0; <br />  $rtop = $h4 = $height&lt;&lt;2; <br />  // scanning from left to right, breaking when a pixel is found, to scan from the other side : avoid scanning all pixels !<br />  for($x=0; $x&lt;$w4; $x++){<br />    for($y=0; $y&lt;$h4; $y++)<br />      if(imagecolorat($img,$x,$y)){<br />        $rtop = min($rtop, $y); $rleft = min($rleft, $x);<br />        $break = true; break;<br />      }<br />    if($break) break;<br />  }<br />  // scanning from right to left, breaking when a pixel is found<br />  for($x=($w4-1); $x&gt;$rleft; $x--){<br />    for($y=0; $y&lt;$h4; $y++)<br />      if(imagecolorat($img,$x,$y)){<br />          $rright = max($rright, $x); $rbottom = max($rbottom, $y);<br />        $break = true; break;<br />      }<br />    if($break) break;<br />  }<br />//... //<br /><br />it may be even better to check if the picture is portrait or landscape, to start the loops from left-right(landscape) or top-bottom (portrait)</span></code></div>
  </div>
 </div>
  <div class="note" id="75530">  <div class="votes">
    <div id="Vu75530">
    <a href="/manual/vote-note.php?id=75530&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75530">
    <a href="/manual/vote-note.php?id=75530&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75530" title="no votes...">
    0
    </div>
  </div>
  <a href="#75530" class="name">
  <strong class="user"><em>Ruquay</em></strong></a><a class="genanchor" href="#75530"> &para;</a><div class="date" title="2007-06-04 04:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75530">
<div class="phpcode"><code><span class="html">Several comments show that the output of this function is often not what is expected, especially when the text is rotated.<br /><br />For those of you who'd like a visual representation of what is happening to the bounding box as the text is rotated, take a look here:<br /><br /><a href="http://ruquay.com/sandbox/imagettf/" rel="nofollow" target="_blank">http://ruquay.com/sandbox/imagettf/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="75491">  <div class="votes">
    <div id="Vu75491">
    <a href="/manual/vote-note.php?id=75491&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75491">
    <a href="/manual/vote-note.php?id=75491&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75491" title="no votes...">
    0
    </div>
  </div>
  <a href="#75491" class="name">
  <strong class="user"><em>Nate Sweet</em></strong></a><a class="genanchor" href="#75491"> &para;</a><div class="date" title="2007-06-01 12:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75491">
<div class="phpcode"><code><span class="html">An improvement to the convertBoundingBox function. The previous function was completely wrong. My confusion came from characters like "1" and "_" that are rendered to the right or below the basepoint (in the font I'm using). I ended up using mike at mikeleigh dot com's function with a fix for these characters, and a "belowBasepoint" value.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">convertBoundingBox </span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">) {<br />    if (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &gt;= -</span><span class="default">1</span><span class="keyword">)<br />        </span><span class="default">$xOffset </span><span class="keyword">= -</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">);<br />    else<br />        </span><span class="default">$xOffset </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    if (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt; -</span><span class="default">1</span><span class="keyword">) </span><span class="default">$width </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$yOffset </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">);<br />    if (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] &gt;= -</span><span class="default">1</span><span class="keyword">) </span><span class="default">$yOffset </span><span class="keyword">= -</span><span class="default">$yOffset</span><span class="keyword">; </span><span class="comment">// Fixed characters below the baseline.<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) - </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    if (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] &gt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">;<br />    return array(<br />        </span><span class="string">'width' </span><span class="keyword">=&gt; </span><span class="default">$width</span><span class="keyword">,<br />        </span><span class="string">'height' </span><span class="keyword">=&gt; </span><span class="default">$height</span><span class="keyword">,<br />        </span><span class="string">'xOffset' </span><span class="keyword">=&gt; </span><span class="default">$xOffset</span><span class="keyword">, </span><span class="comment">// Using xCoord + xOffset with imagettftext puts the left most pixel of the text at xCoord.<br />        </span><span class="string">'yOffset' </span><span class="keyword">=&gt; </span><span class="default">$yOffset</span><span class="keyword">, </span><span class="comment">// Using yCoord + yOffset with imagettftext puts the top most pixel of the text at yCoord.<br />        </span><span class="string">'belowBasepoint' </span><span class="keyword">=&gt; </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])<br />    );<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75479">  <div class="votes">
    <div id="Vu75479">
    <a href="/manual/vote-note.php?id=75479&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75479">
    <a href="/manual/vote-note.php?id=75479&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75479" title="no votes...">
    0
    </div>
  </div>
  <a href="#75479" class="name">
  <strong class="user"><em>Nate Sweet</em></strong></a><a class="genanchor" href="#75479"> &para;</a><div class="date" title="2007-06-01 12:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75479">
<div class="phpcode"><code><span class="html">It took me some time to make full use of imagettfbbox. Hopefully the following function makes it much easier to use for others.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">convertBoundingBox </span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">) {<br />    if (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &gt;= -</span><span class="default">1</span><span class="keyword">)<br />        </span><span class="default">$leftOfBasepoint </span><span class="keyword">= -</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">);<br />    else<br />        </span><span class="default">$leftOfBasepoint </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">$rightOfBasepoint </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    if (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt; -</span><span class="default">1</span><span class="keyword">) </span><span class="default">$rightOfBasepoint </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$aboveBasepoint </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) - </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    if (</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] &gt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] - </span><span class="default">$bbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$leftOfBasepoint </span><span class="keyword">+ </span><span class="default">$rightOfBasepoint</span><span class="keyword">;<br />    </span><span class="default">$belowBasepoint </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">- </span><span class="default">$aboveBasepoint</span><span class="keyword">;<br />    return array(<br />        </span><span class="string">'width' </span><span class="keyword">=&gt; </span><span class="default">$width</span><span class="keyword">,<br />        </span><span class="string">'height' </span><span class="keyword">=&gt; </span><span class="default">$height</span><span class="keyword">,<br />        </span><span class="string">'leftOfBasepoint' </span><span class="keyword">=&gt; </span><span class="default">$leftOfBasepoint</span><span class="keyword">,<br />        </span><span class="string">'rightOfBasepoint' </span><span class="keyword">=&gt; </span><span class="default">$rightOfBasepoint</span><span class="keyword">,<br />        </span><span class="string">'aboveBasepoint' </span><span class="keyword">=&gt; </span><span class="default">$aboveBasepoint</span><span class="keyword">,<br />        </span><span class="string">'belowBasepoint' </span><span class="keyword">=&gt; </span><span class="default">$belowBasepoint<br />    </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Thanks goes to mike at mikeleigh dot com for providing the core of this function.<br /><br />Remember, the basepoint is the x, y coords you use to draw text with imagettftext. A useful thing to do is take a string like...<br />ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01234567890<br />...and use the "aboveBasepoint" value for the height of your font. Now you can draw lines and use "the height of your font * leading" as the distance between lines of text, where leading is a number like 1.45 (for 45% leading).</span></code></div>
  </div>
 </div>
  <div class="note" id="75439">  <div class="votes">
    <div id="Vu75439">
    <a href="/manual/vote-note.php?id=75439&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75439">
    <a href="/manual/vote-note.php?id=75439&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75439" title="no votes...">
    0
    </div>
  </div>
  <a href="#75439" class="name">
  <strong class="user"><em>Nate Sweet</em></strong></a><a class="genanchor" href="#75439"> &para;</a><div class="date" title="2007-05-30 01:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75439">
<div class="phpcode"><code><span class="html">This script shows you side by side the difference between a font rendered at a certain size and the same font rendered at some multiple of that size and then scaled down by the same multiple. It seems to help small sizes and affects large ones less. This script lets you see if it is worth implementing for your situation. Included is the great "imagettfbboxextended" function by mike at mikeleigh dot com below.<br /><br />$size = 30;<br />$factor = 16;<br /><br />$smallSize = imagettfbboxextended($size, 0, "fonts/MPlantin.ttf", "The quick brown fox jumps over the lazy dog.");<br />$smallWidth = $smallSize['width'];<br />$smallHeight = $smallSize['height'];<br />$canvas = imagecreatetruecolor($smallWidth + 20, $smallHeight * 2 + 20);<br />imagefill($canvas, 0, 0, imagecolorallocate($canvas, 255, 255, 255));<br />imagettftext($canvas, $size, 0, 10 + $smallSize['x'], 10 + $smallSize['y'], imagecolorallocate($canvas, 0, 0, 0), "fonts/MPlantin.ttf", "The quick brown fox jumps over the lazy dog.");<br /><br />$largeSize = imagettfbboxextended($size * $factor, 0, "fonts/MPlantin.ttf", "The quick brown fox jumps over the lazy dog.");<br />$largeWidth = $largeSize['width'];<br />$largeHeight = $largeSize['height'];<br />$temp = imagecreatetruecolor($largeWidth, $largeHeight);<br />imagefill($temp, 0, 0, imagecolorallocate($canvas, 255, 255, 255));<br />imagettftext($temp, $size * $factor, 0, $largeSize['x'], $largeSize['y'], imagecolorallocate($temp, 0, 0, 0), "fonts/MPlantin.ttf", "The quick brown fox jumps over the lazy dog.");<br />imagecopyresampled($canvas, $temp, 10 + $smallSize['x'], 10 + $smallSize['y'] + 10, 0, 0, $smallWidth, $smallHeight, $largeWidth, $largeHeight);<br />imagepng($temp, "temp.png");<br /><br />imagepng($canvas, "test.png");<br /><br />function imagettfbboxextended($size, $angle, $fontfile, $text) {<br />    /*this function extends imagettfbbox and includes within the returned array<br />    the actual text width and height as well as the x and y coordinates the<br />    text should be drawn from to render correctly.  This currently only works<br />    for an angle of zero and corrects the issue of hanging letters e.g. jpqg*/<br />    $bbox = imagettfbbox($size, $angle, $fontfile, $text);<br /><br />    //calculate x baseline<br />    if($bbox[0] &gt;= -1) {<br />        $bbox['x'] = abs($bbox[0] + 1) * -1;<br />    } else {<br />        //$bbox['x'] = 0;<br />        $bbox['x'] = abs($bbox[0] + 2);<br />    }<br /><br />    //calculate actual text width<br />    $bbox['width'] = abs($bbox[2] - $bbox[0]);<br />    if($bbox[0] &lt; -1) {<br />        $bbox['width'] = abs($bbox[2]) + abs($bbox[0]) - 1;<br />    }<br /><br />    //calculate y baseline<br />    $bbox['y'] = abs($bbox[5] + 1);<br /><br />    //calculate actual text height<br />    $bbox['height'] = abs($bbox[7]) - abs($bbox[1]);<br />    if($bbox[3] &gt; 0) {<br />        $bbox['height'] = abs($bbox[7] - $bbox[1]) - 1;<br />    }<br /><br />    return $bbox;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="75333">  <div class="votes">
    <div id="Vu75333">
    <a href="/manual/vote-note.php?id=75333&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75333">
    <a href="/manual/vote-note.php?id=75333&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75333" title="no votes...">
    0
    </div>
  </div>
  <a href="#75333" class="name">
  <strong class="user"><em>lassial dot gmail dot com</em></strong></a><a class="genanchor" href="#75333"> &para;</a><div class="date" title="2007-05-24 04:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75333">
<div class="phpcode"><code><span class="html">Ralph Bolton commented about the difference in calculating the bounding box size vs. aligning text base line. <br /><br />The workaround for this issue is to calculate the difference in height between a character going below baseline and one above the baseline. This is likely going to vary from font to font, so I'd suggest something like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">fontBaselineOffset</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">, </span><span class="default">$fontSize</span><span class="keyword">)<br />{<br /></span><span class="comment">//this should be above baseline<br /></span><span class="default">$test2</span><span class="keyword">=</span><span class="string">"H"</span><span class="keyword">;<br /></span><span class="comment">//some of these additional letters should go below it<br /></span><span class="default">$test3</span><span class="keyword">=</span><span class="string">"Hjgqp"</span><span class="keyword">;<br /><br /></span><span class="comment">//get the dimension for these two:<br /><br /></span><span class="default">$box2 </span><span class="keyword">= </span><span class="default">imageTTFBbox</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$test2</span><span class="keyword">);<br /></span><span class="default">$box3 </span><span class="keyword">= </span><span class="default">imageTTFBbox</span><span class="keyword">(</span><span class="default">$fontSize</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$test3</span><span class="keyword">);<br /><br /></span><span class="comment">//return the offset value<br /><br /></span><span class="keyword">return  </span><span class="default">abs</span><span class="keyword">((</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box2</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) - (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box3</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$box3</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])));<br /><br />}<br /></span><span class="default">?&gt;<br /></span><br />This is not perfect yet. You should define a range of allowed characters that can go below baseline, compare them to the ones actually found in your string and use them instead of the string $test3 used in the example function above. This should avoid problems with letters that go further below baseline than the others (e.g. there could be a difference between 'g' and 'p')</span></code></div>
  </div>
 </div>
  <div class="note" id="60183">  <div class="votes">
    <div id="Vu60183">
    <a href="/manual/vote-note.php?id=60183&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60183">
    <a href="/manual/vote-note.php?id=60183&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60183" title="no votes...">
    0
    </div>
  </div>
  <a href="#60183" class="name">
  <strong class="user"><em>peisenmann at gmail dot com</em></strong></a><a class="genanchor" href="#60183"> &para;</a><div class="date" title="2005-12-28 06:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60183">
<div class="phpcode"><code><span class="html">Another function for centered text string.<br />What it does: Generate a truecolor .png image of a text string. The image will be just large enough encompass the text and a 2 px border and the text will be centered in it.<br /><br />It is called from any other page like so...<br />&lt;img src="linkImg.php?text=php.net is great&amp;border=out" /&gt; // Text with #&amp;+"'\&lt;&gt; will need to be escaped, but I've found spaces don't cause errors. I haven't tested this with any other languages.<br /><br />The following code is the file named linkImg.php<br />The file was not designed to have anything else here with it, and the open and close php tags should the the very first and very last characters of the page respectively, as outside whitespace can be a little evil sometimes.<br /><span class="default">&lt;?php <br /></span><span class="comment">//Obtain text and border via GET<br />//Border can be out, in, or flat<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">];<br /></span><span class="default">$border </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'border'</span><span class="keyword">];<br /> <br />  </span><span class="default">$font </span><span class="keyword">= </span><span class="string">"fontpath"</span><span class="keyword">; </span><span class="comment">//(str) "fonts/sasquatchlives.ttf"<br />  </span><span class="default">$fontsize </span><span class="keyword">= </span><span class="default">font size</span><span class="keyword">; </span><span class="comment">//(int) pixels in GD 1, or points in GD 2<br /><br />//Register box<br /></span><span class="default">$box </span><span class="keyword">= </span><span class="default">imagettfbbox </span><span class="keyword">(</span><span class="default">$fontsize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="comment">//Find out the width and height of the text box<br /></span><span class="default">$textW </span><span class="keyword">= </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /></span><span class="default">$textH</span><span class="keyword">= </span><span class="default">$box</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]-</span><span class="default">$box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];<br /></span><span class="comment">//Add padding<br /></span><span class="default">$paddingx </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /></span><span class="default">$paddingy </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /></span><span class="comment">//Set image dimentions<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">$textW</span><span class="keyword">+</span><span class="default">$paddingx</span><span class="keyword">;<br /></span><span class="default">$height</span><span class="keyword">= </span><span class="default">$textH</span><span class="keyword">+</span><span class="default">$paddingy</span><span class="keyword">;<br /><br /></span><span class="comment">//Bottom left corner of text<br /></span><span class="default">$textx </span><span class="keyword">= </span><span class="default">$paddingx</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$texty </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">- </span><span class="default">$paddingy</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br /><br /></span><span class="comment">//Shadow offset (pixels)<br /></span><span class="default">$shadoffx </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$shadoffy </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="comment">//Create the image<br /> </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br /></span><span class="comment">//Define some colors<br /> </span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br /> </span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /> </span><span class="default">$lightgrey </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">);<br /> </span><span class="default">$grey </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br /></span><span class="comment">//Define Text (fg) and background (bg) colors<br /> </span><span class="default">$bgcol </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">192</span><span class="keyword">,</span><span class="default">213</span><span class="keyword">,</span><span class="default">196</span><span class="keyword">); </span><span class="comment">//Celadon (light pastel green)<br /> </span><span class="default">$fgcol </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">243</span><span class="keyword">,</span><span class="default">104</span><span class="keyword">,</span><span class="default">88</span><span class="keyword">); </span><span class="comment">//Peach<br />// Fill image with background color<br /> </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$bgcol</span><span class="keyword">); <br /><br /></span><span class="comment">//Write Shadow<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$fontsize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$textx</span><span class="keyword">+</span><span class="default">$shadoffx</span><span class="keyword">, </span><span class="default">$texty</span><span class="keyword">+</span><span class="default">$shadoffy</span><span class="keyword">, </span><span class="default">$grey</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="comment">//Write Text<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$fontsize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$textx</span><span class="keyword">, </span><span class="default">$texty</span><span class="keyword">, </span><span class="default">$fgcol</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="comment">//Bordering<br /><br />   //Embossed border (button-looking)<br /> </span><span class="keyword">if (</span><span class="default">$border </span><span class="keyword">== </span><span class="string">"out"</span><span class="keyword">) <br />  {<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$lightgrey</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$lightgrey</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);<br /><br />  }<br />    </span><span class="comment">//Flat border<br /> </span><span class="keyword">if (</span><span class="default">$border </span><span class="keyword">== </span><span class="string">"flat"</span><span class="keyword">) <br />  {<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);<br />  }<br /><br />    </span><span class="comment">//Engraved border (pushed button)<br /> </span><span class="keyword">if (</span><span class="default">$border </span><span class="keyword">== </span><span class="string">"in"</span><span class="keyword">) <br />  {<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$grey</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br />   </span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$lightgrey</span><span class="keyword">);</span><span class="default">imageline </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">$lightgrey</span><span class="keyword">);<br />  }<br /><br /></span><span class="comment">// Header info<br /> </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="comment">//Sends the image<br /> </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /> </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone!<br />-Patrick-</span></code></div>
  </div>
 </div>
  <div class="note" id="83536">  <div class="votes">
    <div id="Vu83536">
    <a href="/manual/vote-note.php?id=83536&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83536">
    <a href="/manual/vote-note.php?id=83536&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83536" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#83536" class="name">
  <strong class="user"><em>Stefan at colulus dot com</em></strong></a><a class="genanchor" href="#83536"> &para;</a><div class="date" title="2008-05-30 11:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83536">
<div class="phpcode"><code><span class="html">I worked out a script that allows the transfer of alphanumeric data to be placed on an image. The HTML feature is img src and the php feature is imagettftext. This simple code will increment from 1 to 3 on images.<br /><br />code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//ImageCall.php -- This script will call a script to produce the image.<br /></span><span class="keyword">for(</span><span class="default">$next </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;</span><span class="default">$next </span><span class="keyword">&lt; </span><span class="default">4</span><span class="keyword">; </span><span class="default">$next</span><span class="keyword">++){<br />print </span><span class="string">"Image </span><span class="default">$next</span><span class="string">:&lt;br&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;img src = 'Image.php?\$text=</span><span class="default">$next</span><span class="string">'&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">//Image.php -- This script creates a square image and places the text on it.<br /><br />// image size and color<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">77</span><span class="keyword">,</span><span class="default">77</span><span class="keyword">);<br /></span><span class="default">$color1 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x66</span><span class="keyword">,</span><span class="default">0xCC</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color2 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x33</span><span class="keyword">,</span><span class="default">0x66</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color3 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">,</span><span class="default">0x99</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color4 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">);<br /><br /></span><span class="comment">// image creation<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">$color1</span><span class="keyword">);<br /></span><span class="default">ImageFilledpolygon</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, array (</span><span class="default">76</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">),</span><span class="default">3</span><span class="keyword">,</span><span class="default">$color2</span><span class="keyword">);<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">72</span><span class="keyword">,</span><span class="default">72</span><span class="keyword">,</span><span class="default">$color3</span><span class="keyword">);<br /><br /></span><span class="comment">// determine numeric center of image<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">ImageTTFBBox</span><span class="keyword">(</span><span class="default">45</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="string">'impact'</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'$text'</span><span class="keyword">]);<br /></span><span class="default">$X </span><span class="keyword">= (</span><span class="default">77 </span><span class="keyword">- (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]- </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])))/</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$Y </span><span class="keyword">= ((</span><span class="default">77 </span><span class="keyword">- (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$size</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">])))/</span><span class="default">2 </span><span class="keyword">+ (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$size</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">])));<br /><br /></span><span class="comment">//places numeric information on image<br /></span><span class="default">ImageTTFText</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,(</span><span class="default">$X</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">),</span><span class="default">$Y</span><span class="keyword">,</span><span class="default">$color4</span><span class="keyword">,</span><span class="string">'impact'</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'$text'</span><span class="keyword">]);<br /><br /></span><span class="comment">//returns completed image to calling script<br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);<br /></span><span class="default">Imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74686">  <div class="votes">
    <div id="Vu74686">
    <a href="/manual/vote-note.php?id=74686&amp;page=function.imagettfbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74686">
    <a href="/manual/vote-note.php?id=74686&amp;page=function.imagettfbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74686" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#74686" class="name">
  <strong class="user"><em>ralphbolton at mail2sexy dot com</em></strong></a><a class="genanchor" href="#74686"> &para;</a><div class="date" title="2007-04-23 09:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74686">
<div class="phpcode"><code><span class="html">There's a bit of an annoyance with measuring font sizes and drawing boxes around text. When fonts are measured using ImageTTFbbox, the correct vertical height is returned. That is, the measurement of the phrase "Hanging" will be from the top of the "H" to the bottom of the "g".<br /><br />The problem is that functions like imageTTFtext align with the "line" of the text - that is, in the phrase "Hanging", the alignment is below the "H", not the bottom of the "g". That means that if you draw a rectangle behind your text, it'll be incorrectly aligned because the hanging "g" will be outside the box.<br /><br />For example, this doesn't work as you might expect (because the "g" hangs below the box):<br /><span class="default">&lt;?php<br /></span><span class="comment">// Get the size of the font box<br /></span><span class="default">$textbox </span><span class="keyword">= </span><span class="default">imageTTFBbox</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">'Hanging'</span><span class="keyword">);<br /></span><span class="default">$textwidth </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$textbox</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$textbox</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /></span><span class="default">$textheight </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$textbox</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$textbox</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br /></span><span class="comment">// Now draw a rectangle on the image<br /></span><span class="default">$colour </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$textheight</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$textwidth</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$colour </span><span class="keyword">);<br /><br /></span><span class="comment">// Now draw the text<br /></span><span class="default">$black </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">ImageTTFText</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">[</span><span class="string">'resource'</span><span class="keyword">], </span><span class="default">$size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">'Hanging'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>It also seems that the rectangle in the above example is located 1 pixel to the left of the text.<br /><br />I haven't found a way to resolve this problem correctly. Instead, I have enlarged the rectangle and then put the text into it. I don't think this will work absolutely correctly for all fonts, so it's not exactly a perfect solution. However, it's better than nothing! Here is a snippet of it:<br /><span class="default">&lt;?php<br />$enlargex </span><span class="keyword">= </span><span class="default">$textwidth </span><span class="keyword">* </span><span class="default">0.08</span><span class="keyword">;<br /></span><span class="default">$enlargey </span><span class="keyword">= </span><span class="default">$textheight </span><span class="keyword">* </span><span class="default">0.1</span><span class="keyword">;<br /></span><span class="default">$enlargey2 </span><span class="keyword">= </span><span class="default">$textheight </span><span class="keyword">* </span><span class="default">0.5</span><span class="keyword">;<br /><br /></span><span class="comment">// Now draw a rectangle on the image<br /></span><span class="default">$colour </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$enlargex</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$textheight </span><span class="keyword">- </span><span class="default">$enlargey</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$textwidth </span><span class="keyword">+ </span><span class="default">$enlargex</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">$enlarge2</span><span class="keyword">, </span><span class="default">$colour </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagettfbbox&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagettfbbox.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
