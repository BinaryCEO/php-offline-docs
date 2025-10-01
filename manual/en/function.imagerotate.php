<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagerotate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagerotate.php">
 <link rel="shorturl" href="https://www.php.net/imagerotate">
 <link rel="alternate" href="https://www.php.net/imagerotate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imageresolution.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagesavealpha.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagerotate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagerotate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagerotate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagerotate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagerotate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagerotate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagerotate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagerotate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagerotate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagerotate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagerotate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Rotate an image with a given angle" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagerotate - Manual" />
<meta name="twitter:description" content="Rotate an image with a given angle" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagerotate - Manual" />
<meta itemprop="description" content="Rotate an image with a given angle" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Rotate an image with a given angle" />

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
        <a href="function.imagesavealpha.php">
          imagesavealpha &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imageresolution.php">
          &laquo; imageresolution        </a>
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
            <option value='en/function.imagerotate.php' selected="selected">English</option>
            <option value='de/function.imagerotate.php'>German</option>
            <option value='es/function.imagerotate.php'>Spanish</option>
            <option value='fr/function.imagerotate.php'>French</option>
            <option value='it/function.imagerotate.php'>Italian</option>
            <option value='ja/function.imagerotate.php'>Japanese</option>
            <option value='pt_BR/function.imagerotate.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagerotate.php'>Russian</option>
            <option value='tr/function.imagerotate.php'>Turkish</option>
            <option value='uk/function.imagerotate.php'>Ukrainian</option>
            <option value='zh/function.imagerotate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagerotate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagerotate</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagerotate</span> &mdash; <span class="dc-title">Rotate an image with a given angle</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagerotate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagerotate</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$background_color</code></span>): <span class="type"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Rotates the <code class="parameter">image</code> image using the given
   <code class="parameter">angle</code> in degrees. 
  </p>
  <p class="para">
   The center of rotation is the center of the image, and the rotated
   image may have different dimensions than the original image.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagerotate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">angle</code></dt>
     <dd>
      <p class="para">
       Rotation angle, in degrees. The rotation angle is interpreted as the
       number of degrees to rotate the image anticlockwise.
      </p>
     </dd>
    
    
     <dt><code class="parameter">background_color</code></dt>
     <dd>
      <p class="para">
       Specifies the color of the uncovered zone after the rotation
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagerotate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an image object for the rotated image,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagerotate-changelog">
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
      <td>8.3.0</td>
      <td>
       The unused <code class="parameter">ignore_transparent</code> has been completely removed.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       On success, this function returns a <span class="classname"><a href="class.gdimage.php" class="classname">GDImage</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

     <tr>
 <td>8.0.0</td>
 <td>
  <code class="parameter">image</code> expects a <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span>
  instance now; previously, a valid <code class="literal">gd</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       The unused <code class="parameter">ignore_transparent</code> expects a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> now;
       previously it expected an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagerotate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2927">
    <p><strong>Example #1 Rotate an image 180 degrees</strong></p>
    <div class="example-contents"><p>
     This example rotates an image 180 degrees - upside down.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// File and rotation<br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'test.jpg'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$degrees </span><span style="color: #007700">= </span><span style="color: #0000BB">180</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Content type<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: image/jpeg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Load<br /></span><span style="color: #0000BB">$source </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromjpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Rotate<br /></span><span style="color: #0000BB">$rotate </span><span style="color: #007700">= </span><span style="color: #0000BB">imagerotate</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">, </span><span style="color: #0000BB">$degrees</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output<br /></span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$rotate</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagerotate.jpg" alt="Output of example : Rotate an image 180 degrees" width="95" height="51" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagerotate-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This function is affected by the interpolation method set by <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>.</p></p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagerotate-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagesetinterpolation.php" class="function" rel="rdfs-seeAlso">imagesetinterpolation()</a> - Set the interpolation method</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagerotate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagerotate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagerotate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagerotate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">39 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109432">  <div class="votes">
    <div id="Vu109432">
    <a href="/manual/vote-note.php?id=109432&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109432">
    <a href="/manual/vote-note.php?id=109432&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109432" title="77% like this...">
    34
    </div>
  </div>
  <a href="#109432" class="name">
  <strong class="user"><em>meisterix at gmx dot com</em></strong></a><a class="genanchor" href="#109432"> &para;</a><div class="date" title="2012-07-16 09:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109432">
<div class="phpcode"><code><span class="html">After some INet searches and personal try-and-failures I succeed to rotate PNG images with preserving alpha channel transparency (semi transparency).<br /><br /><span class="default">&lt;?php<br />    $filename </span><span class="keyword">= </span><span class="string">'YourFile.png'</span><span class="keyword">;<br />    </span><span class="default">$rotang </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">; </span><span class="comment">// Rotation angle<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) or die(</span><span class="string">'Error opening file '</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">);<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />    </span><span class="default">$rotation </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$rotang</span><span class="keyword">, </span><span class="default">imageColorAllocateAlpha</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">));<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$rotation</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$rotation</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$rotation</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$rotation</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91761">  <div class="votes">
    <div id="Vu91761">
    <a href="/manual/vote-note.php?id=91761&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91761">
    <a href="/manual/vote-note.php?id=91761&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91761" title="83% like this...">
    4
    </div>
  </div>
  <a href="#91761" class="name">
  <strong class="user"><em>Mike Knoop</em></strong></a><a class="genanchor" href="#91761"> &para;</a><div class="date" title="2009-06-24 02:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91761">
<div class="phpcode"><code><span class="html">Don't be tricked into thinking this function will rotate the image resource handle in-place. While the documentation currently doesn't specify and return values, I've found the following return values to be true:<br /><br />"Returns an image resource identifier on success, FALSE on errors. "<br /><br />Simply make sure you're doing something like...<br /><span class="default">&lt;?php<br />$rotated_img </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">45</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />-Mike</span></code></div>
  </div>
 </div>
  <div class="note" id="107043">  <div class="votes">
    <div id="Vu107043">
    <a href="/manual/vote-note.php?id=107043&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107043">
    <a href="/manual/vote-note.php?id=107043&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107043" title="72% like this...">
    10
    </div>
  </div>
  <a href="#107043" class="name">
  <strong class="user"><em>henzeberkheij at gmail dot com</em></strong></a><a class="genanchor" href="#107043"> &para;</a><div class="date" title="2012-01-01 02:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107043">
<div class="phpcode"><code><span class="html">Keep in mind this function rotates counterclockwise.  if you want to go 90 degrees clockwise, you have to tell imagerotate to go 270 degrees counter-clockwise.<br /><br />$angle = 360-$angle;</span></code></div>
  </div>
 </div>
  <div class="note" id="99591">  <div class="votes">
    <div id="Vu99591">
    <a href="/manual/vote-note.php?id=99591&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99591">
    <a href="/manual/vote-note.php?id=99591&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99591" title="70% like this...">
    8
    </div>
  </div>
  <a href="#99591" class="name">
  <strong class="user"><em>xavtak at gmail dot com</em></strong></a><a class="genanchor" href="#99591"> &para;</a><div class="date" title="2010-08-25 08:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99591">
<div class="phpcode"><code><span class="html">I've benchmarked three methods described here for rotating an image.<br /><br />I used a 1600 x 1200 jpeg picture that was duplicated ten times on the disk. I looped through them to apply a CW rotation using either method.<br /><br />First algorithm (the "imagesetpixel" algorithm):<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">CWRotation</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)<br />{<br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">);<br />    if(</span><span class="default">$result</span><span class="keyword">)<br />    {<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />            for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />            {<br />                </span><span class="default">$ref </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">);<br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, (</span><span class="default">$h </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) - </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$ref</span><span class="keyword">);<br />            }<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Second algorithm (the "imagecopy" algorithm):<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">CWRotation</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)<br />{<br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">);<br />    if(</span><span class="default">$result</span><span class="keyword">)<br />    {<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />            for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />                </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, (</span><span class="default">$h </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) - </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Third algorithm (the "imagerotate" algorithm):<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">CWRotation</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)<br />{<br />    return </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">270</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />In each step of the loop, the image is loaded, rotated then a copy is written on the disk.<br /><br />Here are the results:<br />imagesetpixel algorithm: the 10 pictures were processed in 29 seconds<br />imagecopy algorithm: the 10 pictures were processed in 26 seconds<br />imagerotate algorithm: the 10 pictures were processed in 2 seconds (no typo here)<br /><br />Writing the pictures on the disk allowed me to control the results. Every resulting picture was the same (tested with winmerge).<br /><br />Conclusion: imagerotate is way faster than other "home-made" algorithms.<br />I ran the tests several times to see if the difference between imagesetpixel and imagecopy was introduced by my computer's independent activity, but I always got that 10% difference.<br /><br />Note: the picture I used was taken from a camera, so no transparency was involved.<br />I ran the tests on Windows XP using PHP Version 5.3.0</span></code></div>
  </div>
 </div>
  <div class="note" id="118115">  <div class="votes">
    <div id="Vu118115">
    <a href="/manual/vote-note.php?id=118115&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118115">
    <a href="/manual/vote-note.php?id=118115&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118115" title="70% like this...">
    4
    </div>
  </div>
  <a href="#118115" class="name">
  <strong class="user"><em>xarris_ at hotmail dot com</em></strong></a><a class="genanchor" href="#118115"> &para;</a><div class="date" title="2015-10-06 03:53"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118115">
<div class="phpcode"><code><span class="html">An issue with imagerotate() is it might need more memory than what is available. It was failing in my script so I tried to increase it with ini_set('memory_limit', '256M') <br />and everything works fine now.</span></code></div>
  </div>
 </div>
  <div class="note" id="87363">  <div class="votes">
    <div id="Vu87363">
    <a href="/manual/vote-note.php?id=87363&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87363">
    <a href="/manual/vote-note.php?id=87363&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87363" title="66% like this...">
    1
    </div>
  </div>
  <a href="#87363" class="name">
  <strong class="user"><em>joseluis at pellicer dot org</em></strong></a><a class="genanchor" href="#87363"> &para;</a><div class="date" title="2008-12-01 08:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87363">
<div class="phpcode"><code><span class="html">About that rotating function by david at horizon-nigh not working, I found the bug.<br />I noticed that the x1 and y1 where not used, so, in the loop through every pixel and transform it, change<br /><br />$x2 = $x * cos($theta) - $y * sin($theta);<br />$y2 = $x * sin($theta) + $y * cos($theta);<br /><br />to:<br />           <br />$x2 = $x1 * cos($theta) - $y1 * sin($theta);<br />$y2 = $x1 * sin($theta) + $y1 * cos($theta);</span></code></div>
  </div>
 </div>
  <div class="note" id="96563">  <div class="votes">
    <div id="Vu96563">
    <a href="/manual/vote-note.php?id=96563&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96563">
    <a href="/manual/vote-note.php?id=96563&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96563" title="60% like this...">
    1
    </div>
  </div>
  <a href="#96563" class="name">
  <strong class="user"><em>kmrohe at letsco dot de</em></strong></a><a class="genanchor" href="#96563"> &para;</a><div class="date" title="2010-03-05 03:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96563">
<div class="phpcode"><code><span class="html">As an alternative to the GD rotateImage() function, this is an easy way to rotate images by 90 degrees ccw *without* loosing transparency:<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">function </span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">) {<br />      </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />      </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />      </span><span class="default">$newImage</span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">);<br />      </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$newImage</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />      </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$newImage</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />      for(</span><span class="default">$w</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$w</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">; </span><span class="default">$w</span><span class="keyword">++)<br />          for(</span><span class="default">$h</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$h</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">; </span><span class="default">$h</span><span class="keyword">++) {<br />              </span><span class="default">$ref </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />              </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$newImage</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, (</span><span class="default">$width</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">)-</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$ref</span><span class="keyword">);<br />          }<br />      return </span><span class="default">$newImage</span><span class="keyword">;<br />  }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91709">  <div class="votes">
    <div id="Vu91709">
    <a href="/manual/vote-note.php?id=91709&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91709">
    <a href="/manual/vote-note.php?id=91709&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91709" title="60% like this...">
    1
    </div>
  </div>
  <a href="#91709" class="name">
  <strong class="user"><em>krteczek01 at gmail dot com</em></strong></a><a class="genanchor" href="#91709"> &para;</a><div class="date" title="2009-06-23 03:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91709">
<div class="phpcode"><code><span class="html">Hi, I've rewrote function to class with static methods. Advantage of this solution is ability to be called several times during script execution.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />    Unfinished imagerotate replacement. ignore_transparent is, well, ignored. :)<br />    Also, should have some standard functions for 90, 180 and 270 degrees, since they are quite<br />    easy to implement faster.<br />*/<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">)) {<br />    function </span><span class="default">imagerotate</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">, </span><span class="default">$ignore_transparent </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />        return </span><span class="default">imagerotateEquivalent</span><span class="keyword">::</span><span class="default">rotate</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">, </span><span class="default">$ignore_transparent</span><span class="keyword">);<br />    }<br />}<br /><br />class </span><span class="default">imagerotateEquivalent </span><span class="keyword">{<br /><br />    static private function </span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">){<br />        return </span><span class="default">$x </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) - </span><span class="default">$y </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />    }<br /><br />    static private function </span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">){<br />        return </span><span class="default">$x </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) + </span><span class="default">$y </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />    }<br /><br />    public static function </span><span class="default">rotate</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">, </span><span class="default">$ignore_transparent </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />        <br />        </span><span class="default">$srcw </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br />        </span><span class="default">$srch </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br /><br />        if(</span><span class="default">$angle </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">$srcImg</span><span class="keyword">;<br /><br />        </span><span class="comment">// Convert the angle to radians<br />        </span><span class="default">$theta </span><span class="keyword">= </span><span class="default">deg2rad </span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br /><br />        </span><span class="comment">// Calculate the width of the destination image.<br />        </span><span class="default">$temp </span><span class="keyword">= array (    </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                        </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                        </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                        </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">)<br />                    );<br />        </span><span class="default">$minX </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />        </span><span class="default">$maxX </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$maxX </span><span class="keyword">- </span><span class="default">$minX</span><span class="keyword">;<br /><br />        </span><span class="comment">// Calculate the height of the destination image.<br />        </span><span class="default">$temp </span><span class="keyword">= array (    </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                        </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                        </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                        </span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">)<br />                    );<br />        </span><span class="default">$minY </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />        </span><span class="default">$maxY </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />        </span><span class="default">$height </span><span class="keyword">= </span><span class="default">$maxY </span><span class="keyword">- </span><span class="default">$minY</span><span class="keyword">;<br /><br />        </span><span class="default">$destimg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />        </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /><br />        </span><span class="comment">// sets all pixels in the new image<br />        </span><span class="keyword">for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">$minX</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$maxX</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++) {<br />            for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">$minY</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$maxY</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++)<br />            {<br />                </span><span class="comment">// fetch corresponding pixel from the source image<br />                </span><span class="default">$srcX </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">));<br />                </span><span class="default">$srcY </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">));<br />                if(</span><span class="default">$srcX </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$srcX </span><span class="keyword">&lt; </span><span class="default">$srcw </span><span class="keyword">&amp;&amp; </span><span class="default">$srcY </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$srcY </span><span class="keyword">&lt; </span><span class="default">$srch</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$srcX</span><span class="keyword">, </span><span class="default">$srcY </span><span class="keyword">);<br />                }<br />                else<br />                {<br />                    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">$bgcolor</span><span class="keyword">;<br />                }<br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">-</span><span class="default">$minX</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">-</span><span class="default">$minY</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />            }<br />        }<br />        return </span><span class="default">$destimg</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85329">  <div class="votes">
    <div id="Vu85329">
    <a href="/manual/vote-note.php?id=85329&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85329">
    <a href="/manual/vote-note.php?id=85329&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85329" title="60% like this...">
    1
    </div>
  </div>
  <a href="#85329" class="name">
  <strong class="user"><em>AJenbo</em></strong></a><a class="genanchor" href="#85329"> &para;</a><div class="date" title="2008-08-26 01:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85329">
<div class="phpcode"><code><span class="html">I modified cbl25's function to allow it to rotate an image either clock wise or counter clock wise.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$direction</span><span class="keyword">) {<br />    </span><span class="default">$direction </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$direction</span><span class="keyword">);<br />    </span><span class="default">$degrees </span><span class="keyword">= </span><span class="default">$direction </span><span class="keyword">== </span><span class="string">'cw' </span><span class="keyword">? </span><span class="default">270 </span><span class="keyword">: (</span><span class="default">$direction </span><span class="keyword">== </span><span class="string">'ccw' </span><span class="keyword">? </span><span class="default">90 </span><span class="keyword">: </span><span class="default">NULL</span><span class="keyword">); <br />    if(!</span><span class="default">$degrees</span><span class="keyword">)<br />        return </span><span class="default">$image</span><span class="keyword">;<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$side </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">&gt; </span><span class="default">$height </span><span class="keyword">? </span><span class="default">$width </span><span class="keyword">: </span><span class="default">$height</span><span class="keyword">;<br />    </span><span class="default">$imageSquare </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$side</span><span class="keyword">, </span><span class="default">$side</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imageSquare</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$imageSquare </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$imageSquare</span><span class="keyword">, </span><span class="default">$degrees</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">);<br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$degrees </span><span class="keyword">== </span><span class="default">90 </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: (</span><span class="default">$height </span><span class="keyword">&gt; </span><span class="default">$width </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: (</span><span class="default">$side </span><span class="keyword">- </span><span class="default">$height</span><span class="keyword">));<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$degrees </span><span class="keyword">== </span><span class="default">270 </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: (</span><span class="default">$height </span><span class="keyword">&lt; </span><span class="default">$width </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: (</span><span class="default">$side </span><span class="keyword">- </span><span class="default">$width</span><span class="keyword">));<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$imageSquare</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imageSquare</span><span class="keyword">);<br />    return </span><span class="default">$image</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Usage<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="string">'cw'</span><span class="keyword">);<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="string">'ccw'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121937">  <div class="votes">
    <div id="Vu121937">
    <a href="/manual/vote-note.php?id=121937&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121937">
    <a href="/manual/vote-note.php?id=121937&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121937" title="57% like this...">
    1
    </div>
  </div>
  <a href="#121937" class="name">
  <strong class="user"><em>shaun at slickdesign dot com dot au</em></strong></a><a class="genanchor" href="#121937"> &para;</a><div class="date" title="2017-11-29 07:31"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121937">
<div class="phpcode"><code><span class="html">The angle in imagerotate() is the number of degrees to rotate the image anti-clockwise, but while it may seem natural to use '-90' to turn an image 90 degrees clockwise, the end result may appear on a slight angle, and may cause the rotated image to appear slightly blurred with a background or border. Excessively large angles may also present sampling issues.<br /><br />The easiest way to prevent these, is to ensure all angles are between 0 and 360.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">while ( </span><span class="default">$angle </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">) { </span><span class="default">$angle </span><span class="keyword">+= </span><span class="default">360</span><span class="keyword">; }<br />while ( </span><span class="default">$angle </span><span class="keyword">&gt;= </span><span class="default">360 </span><span class="keyword">) { </span><span class="default">$angle </span><span class="keyword">-= </span><span class="default">360</span><span class="keyword">; }<br /><br /></span><span class="default">$rotated </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$color </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91505">  <div class="votes">
    <div id="Vu91505">
    <a href="/manual/vote-note.php?id=91505&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91505">
    <a href="/manual/vote-note.php?id=91505&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91505" title="55% like this...">
    1
    </div>
  </div>
  <a href="#91505" class="name">
  <strong class="user"><em>anon at here dot com</em></strong></a><a class="genanchor" href="#91505"> &para;</a><div class="date" title="2009-06-13 01:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91505">
<div class="phpcode"><code><span class="html">I was quite surprised to see that no one had done any working rotate function. And since I needed one for my web hotel, I whipped this one up. Someone might want to expand it so that it matches imagerotate.<br /><br />Also, does imagerotate really rotate things counter clockwise? Otherwise this should also be changed.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">)) {<br />    function </span><span class="default">imagerotate</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">, </span><span class="default">$ignore_transparent </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />        return </span><span class="default">imagerotateEquivalent</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">, </span><span class="default">$ignore_transparent</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">/*<br />    Unfinished imagerotate replacement. ignore_transparent is, well, ignored. :)<br />    Also, should have some standard functions for 90, 180 and 270 degrees, since they are quite <br />    easy to implement faster.<br />*/<br /></span><span class="keyword">function </span><span class="default">imagerotateEquivalent</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">, </span><span class="default">$ignore_transparent </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) <br />{<br />    function </span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">){<br />        return </span><span class="default">$x </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) - </span><span class="default">$y </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />    }<br />    function </span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">){<br />        return </span><span class="default">$x </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) + </span><span class="default">$y </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="default">$srcw </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br />    </span><span class="default">$srch </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br />  <br />    if(</span><span class="default">$angle </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">$srcImg</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Convert the angle to radians<br />    </span><span class="default">$theta </span><span class="keyword">= </span><span class="default">deg2rad </span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br /><br />    <br />    </span><span class="comment">// Calculate the width of the destination image.<br />    </span><span class="default">$temp </span><span class="keyword">= array (    </span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                    </span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                    </span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                    </span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">)<br />                );<br />    </span><span class="default">$minX </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />    </span><span class="default">$maxX </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$maxX </span><span class="keyword">- </span><span class="default">$minX</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Calculate the height of the destination image.<br />    </span><span class="default">$temp </span><span class="keyword">= array (    </span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                    </span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                    </span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,     </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">),<br />                    </span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">$theta</span><span class="keyword">)<br />                );<br />    </span><span class="default">$minY </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />    </span><span class="default">$maxY </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">));<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">$maxY </span><span class="keyword">- </span><span class="default">$minY</span><span class="keyword">;<br />    <br />    </span><span class="default">$destimg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />    </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /><br />    </span><span class="comment">// sets all pixels in the new image<br />    </span><span class="keyword">for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">$minX</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$maxX</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++) {<br />        for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">$minY</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$maxY</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++) <br />        {<br />            </span><span class="comment">// fetch corresponding pixel from the source image<br />            </span><span class="default">$srcX </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">rotateX</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">));<br />            </span><span class="default">$srcY </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">rotateY</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$theta</span><span class="keyword">));<br />            if(</span><span class="default">$srcX </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$srcX </span><span class="keyword">&lt; </span><span class="default">$srcw </span><span class="keyword">&amp;&amp; </span><span class="default">$srcY </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$srcY </span><span class="keyword">&lt; </span><span class="default">$srch</span><span class="keyword">)<br />            {<br />                </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$srcX</span><span class="keyword">, </span><span class="default">$srcY </span><span class="keyword">);<br />            }<br />            else<br />            {<br />                </span><span class="default">$color </span><span class="keyword">= </span><span class="default">$bgcolor</span><span class="keyword">;<br />            }<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">-</span><span class="default">$minX</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">-</span><span class="default">$minY</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />        }<br />    }<br />    <br />    return </span><span class="default">$destimg</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130448">  <div class="votes">
    <div id="Vu130448">
    <a href="/manual/vote-note.php?id=130448&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130448">
    <a href="/manual/vote-note.php?id=130448&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130448" title="no votes...">
    0
    </div>
  </div>
  <a href="#130448" class="name">
  <strong class="user"><em>okhugo at gmail dot com</em></strong></a><a class="genanchor" href="#130448"> &para;</a><div class="date" title="2025-08-16 03:56"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130448">
<div class="phpcode"><code><span class="html">Function to rotate images in the most common formats<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rota_img </span><span class="keyword">(</span><span class="default">$imagen_original</span><span class="keyword">,</span><span class="default">$angulo</span><span class="keyword">){  <br />    </span><span class="default">$tipo </span><span class="keyword">= </span><span class="default">mime_content_type</span><span class="keyword">(</span><span class="default">$imagen_original</span><span class="keyword">);   <br />    </span><span class="comment">/*<br /> $imagen_original ruta con referencia al servidor:<br />/home/tecnoval/public_html/clientes/rapidelicias/hamburgesa.jpg<br />     */<br />    </span><span class="default">$parte </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$tipo</span><span class="keyword">); </span><span class="comment">// MIME TYPE = image/jpeg<br />    </span><span class="default">$ext_real  </span><span class="keyword">= </span><span class="default">$parte</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    </span><span class="default">$admitidos </span><span class="keyword">= array(</span><span class="string">'jpeg'</span><span class="keyword">,</span><span class="string">'png'</span><span class="keyword">,</span><span class="string">'gif'</span><span class="keyword">,</span><span class="string">'webp'</span><span class="keyword">); </span><span class="comment">// mime devuelve jpeg así sea 'jpg',<br /><br />    </span><span class="keyword">if(</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$ext_real</span><span class="keyword">,</span><span class="default">$admitidos</span><span class="keyword">)){<br />        </span><span class="comment">// funciones según tipo de archivo <br />        </span><span class="default">$crear</span><span class="keyword">[</span><span class="string">'jpeg'</span><span class="keyword">] = </span><span class="string">'imagecreatefromjpeg'</span><span class="keyword">;</span><span class="default">$guardar</span><span class="keyword">[</span><span class="string">'jpeg'</span><span class="keyword">] = </span><span class="string">'imagejpeg'</span><span class="keyword">;<br />        </span><span class="default">$crear</span><span class="keyword">[</span><span class="string">'png'</span><span class="keyword">] = </span><span class="string">'imagecreatefrompng'</span><span class="keyword">;</span><span class="default">$guardar</span><span class="keyword">[</span><span class="string">'png'</span><span class="keyword">] = </span><span class="string">'imagepng'</span><span class="keyword">;<br />        </span><span class="default">$crear</span><span class="keyword">[</span><span class="string">'gif'</span><span class="keyword">] = </span><span class="string">'imagecreatefromgif'</span><span class="keyword">;</span><span class="default">$guardar</span><span class="keyword">[</span><span class="string">'gif'</span><span class="keyword">] = </span><span class="string">'imagegif'</span><span class="keyword">;<br />        </span><span class="default">$crear</span><span class="keyword">[</span><span class="string">'webp'</span><span class="keyword">] = </span><span class="string">'imagecreatefromwebp'</span><span class="keyword">;</span><span class="default">$guardar</span><span class="keyword">[</span><span class="string">'webp'</span><span class="keyword">] = </span><span class="string">'imagewebp'</span><span class="keyword">;<br /><br />        </span><span class="comment">// Crear imagen desde archivo -&gt; PE $imagen = imagecreatefromjpeg($imagen_original);<br />        </span><span class="default">$imagen</span><span class="keyword">= </span><span class="default">$crear</span><span class="keyword">[</span><span class="default">$ext_real</span><span class="keyword">](</span><span class="default">$imagen_original</span><span class="keyword">);<br /><br />        </span><span class="comment">// Rotar la imagen<br />        </span><span class="default">$imagen_rotada </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$imagen</span><span class="keyword">, </span><span class="default">$angulo</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="comment">// El 0 es color negro de fondo<br /><br />        // Guardar imagen rotada con el mismo nombre<br />        </span><span class="default">$x</span><span class="keyword">= </span><span class="default">$guardar</span><span class="keyword">[</span><span class="default">$ext_real</span><span class="keyword">](</span><span class="default">$imagen_rotada</span><span class="keyword">, </span><span class="default">$imagen_original</span><span class="keyword">);<br />        if(</span><span class="default">$x</span><span class="keyword">){echo </span><span class="string">"Imagen rotada </span><span class="default">$angulo</span><span class="string"> grados "</span><span class="keyword">;}<br /><br />        </span><span class="comment">// Liberar memoria<br />        </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imagen</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92794">  <div class="votes">
    <div id="Vu92794">
    <a href="/manual/vote-note.php?id=92794&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92794">
    <a href="/manual/vote-note.php?id=92794&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92794" title="100% like this...">
    2
    </div>
  </div>
  <a href="#92794" class="name">
  <strong class="user"><em>sjef at bosman dot fr</em></strong></a><a class="genanchor" href="#92794"> &para;</a><div class="date" title="2009-08-09 09:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92794">
<div class="phpcode"><code><span class="html">I wanted to draw a transparent GIF-image and show it on a page, at an angle specified in the URL:
<br />&lt;img src="image.php?angle=90" type="image/gif"&gt;
<br />
<br />I used the native imagerotate() but at angles of 90, 180, etc. the old background colour would become non-transparent. Apparently, there's a bug somewhere in GD, and has been for ages.
<br />
<br />My solution below:
<br />
<br /><span class="default">&lt;?php
<br />$height </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;
<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;
<br /></span><span class="default">$lsize</span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;
<br /></span><span class="default">$angle</span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"angle"</span><span class="keyword">];
<br />
<br /></span><span class="comment">// avoid the bug:
<br /></span><span class="keyword">if((</span><span class="default">$angle</span><span class="keyword">%</span><span class="default">90</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">)
<br />  </span><span class="default">$angle</span><span class="keyword">+= </span><span class="default">0.001</span><span class="keyword">;
<br />
<br /></span><span class="default">$image_p </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);
<br /></span><span class="default">$trans </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">254</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">);
<br /></span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">);
<br />
<br /></span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">$red </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);
<br />
<br /></span><span class="comment">// draw something here
<br /></span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$lsize</span><span class="keyword">, </span><span class="default">$lsize</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$lsize</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);
<br />
<br /></span><span class="default">$image_r</span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, -</span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); 
<br /></span><span class="default">$w</span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image_r</span><span class="keyword">);
<br /></span><span class="default">$h</span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image_r</span><span class="keyword">);
<br /></span><span class="default">$image_s </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);
<br /></span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$image_s</span><span class="keyword">, </span><span class="default">$image_r</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, (</span><span class="default">$w</span><span class="keyword">-</span><span class="default">$width</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">, (</span><span class="default">$h</span><span class="keyword">-</span><span class="default">$height</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);
<br /></span><span class="default">$trans </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image_s</span><span class="keyword">, </span><span class="default">254</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$image_s</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">);
<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$image_s</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85700">  <div class="votes">
    <div id="Vu85700">
    <a href="/manual/vote-note.php?id=85700&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85700">
    <a href="/manual/vote-note.php?id=85700&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85700" title="100% like this...">
    2
    </div>
  </div>
  <a href="#85700" class="name">
  <strong class="user"><em>david at horizon-nigh dot org</em></strong></a><a class="genanchor" href="#85700"> &para;</a><div class="date" title="2008-09-12 09:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85700">
<div class="phpcode"><code><span class="html">I couldn't get the replacements from 'the dot thawk' or 'pilot' to work for some reason, so here's my own replacement. It uses ImageMagick; binary must be installed, and you may need to modify the search path. (I didn't use PHP's ImageMagick support for my own reasons.)<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * imagerotate()<br />     * Debian php5-gd packages do not include imagerotate() due to some convoluted reason.<br />     *<br />     * @param int $angle - same as PHP builtin function<br />     * @param $bgd_color - not implemented, apparently always #FFFFFF<br />     *<br />     * @return same as PHP builtin function<br />     */<br />    </span><span class="keyword">if ( !</span><span class="default">function_exists</span><span class="keyword">( </span><span class="string">'imagerotate' </span><span class="keyword">) ) {<br /><br />        function </span><span class="default">imagerotate</span><span class="keyword">( </span><span class="default">$source_image</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgd_color </span><span class="keyword">) {<br /><br />            </span><span class="default">$angle </span><span class="keyword">= </span><span class="default">360</span><span class="keyword">-</span><span class="default">$angle</span><span class="keyword">; </span><span class="comment">// GD rotates CCW, imagick rotates CW<br /><br />            </span><span class="keyword">foreach ( array( </span><span class="string">'/usr/bin'</span><span class="keyword">, </span><span class="string">'/usr/local/bin'</span><span class="keyword">, </span><span class="string">'/opt/local/bin'</span><span class="keyword">, </span><span class="string">'/sw/bin' </span><span class="keyword">) as </span><span class="default">$path </span><span class="keyword">) {<br /><br />                if ( </span><span class="default">file_exists</span><span class="keyword">( </span><span class="default">$path </span><span class="keyword">. </span><span class="string">'/convert' </span><span class="keyword">) ) {<br />                    </span><span class="default">$imagick </span><span class="keyword">= </span><span class="default">$path </span><span class="keyword">. </span><span class="string">'/convert'</span><span class="keyword">;<br />                    if ( </span><span class="default">$path </span><span class="keyword">== </span><span class="string">'/opt/local/bin' </span><span class="keyword">) {<br />                        </span><span class="default">$imagick </span><span class="keyword">= </span><span class="string">'DYLD_LIBRARY_PATH="" ' </span><span class="keyword">. </span><span class="default">$imagick</span><span class="keyword">; </span><span class="comment">// some kind of conflict with MacPorts and MAMP<br />                    </span><span class="keyword">}<br />                    break;<br />                }<br /><br />            }<br /><br />            if ( !isset( </span><span class="default">$imagick </span><span class="keyword">) ) {<br /><br />                </span><span class="comment">//trigger_error( 'imagerotate(): could not find imagemagick binary, original image returned', E_USER_WARNING );<br />                </span><span class="keyword">return </span><span class="default">$source_image</span><span class="keyword">;<br /><br />            }<br /><br />            </span><span class="default">$file1 </span><span class="keyword">= </span><span class="string">'/tmp/imagick_' </span><span class="keyword">. </span><span class="default">rand</span><span class="keyword">( </span><span class="default">10000</span><span class="keyword">,</span><span class="default">99999 </span><span class="keyword">) . </span><span class="string">'.png'</span><span class="keyword">;<br />            </span><span class="default">$file2 </span><span class="keyword">= </span><span class="string">'/tmp/imagick_' </span><span class="keyword">. </span><span class="default">rand</span><span class="keyword">( </span><span class="default">10000</span><span class="keyword">,</span><span class="default">99999 </span><span class="keyword">) . </span><span class="string">'.png'</span><span class="keyword">;<br /><br />            if ( @</span><span class="default">imagepng</span><span class="keyword">( </span><span class="default">$source_image</span><span class="keyword">, </span><span class="default">$file1 </span><span class="keyword">) ) {<br /><br />                </span><span class="default">exec</span><span class="keyword">( </span><span class="default">$imagick </span><span class="keyword">. </span><span class="string">' -rotate ' </span><span class="keyword">. </span><span class="default">$angle </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$file1 </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$file2 </span><span class="keyword">);<br /><br />                if ( </span><span class="default">file_exists</span><span class="keyword">( </span><span class="default">$file2 </span><span class="keyword">) ) {<br /><br />                    </span><span class="default">$new_image </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">( </span><span class="default">$file2 </span><span class="keyword">);<br />                    </span><span class="default">unlink</span><span class="keyword">( </span><span class="default">$file1 </span><span class="keyword">);<br />                    </span><span class="default">unlink</span><span class="keyword">( </span><span class="default">$file2 </span><span class="keyword">);<br />                    return </span><span class="default">$new_image</span><span class="keyword">;<br /><br />                } else {<br /><br />                    </span><span class="comment">//trigger_error( 'imagerotate(): imagemagick conversion failed, original image returned', E_USER_WARNING );<br />                    </span><span class="keyword">return </span><span class="default">$source_image</span><span class="keyword">;<br /><br />                }<br /><br />            } else {<br /><br />                </span><span class="comment">//trigger_error( 'imagerotate(): could not write to ' . $file1 . ', original image returned', E_USER_WARNING );<br />                </span><span class="keyword">return </span><span class="default">$source_image</span><span class="keyword">;<br /><br />            }<br /><br />        }<br /><br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84490">  <div class="votes">
    <div id="Vu84490">
    <a href="/manual/vote-note.php?id=84490&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84490">
    <a href="/manual/vote-note.php?id=84490&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84490" title="100% like this...">
    2
    </div>
  </div>
  <a href="#84490" class="name">
  <strong class="user"><em>the dot thawk+phpnet at gmail dot com</em></strong></a><a class="genanchor" href="#84490"> &para;</a><div class="date" title="2008-07-16 08:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84490">
<div class="phpcode"><code><span class="html">In response to pilot at myupb dot com on 31-May-2008 02:23<br />---<br /><br />I am not sure why you would be defining your own PI, instead of using the built-in constant, and why you do the degrees to radian conversion manually. There might be a speed issue, however here is the exact same code with that small difference.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">)) {<br />    function </span><span class="default">imagerotate</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$transparentColor </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$srcw </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br />        </span><span class="default">$srch </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br />       <br />        if(</span><span class="default">$angle </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">$srcImg</span><span class="keyword">;<br />       <br />        </span><span class="comment">// Convert the angle to radians<br />        </span><span class="default">$theta </span><span class="keyword">= </span><span class="default">deg2rad </span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br />       <br />        </span><span class="comment">// Get the origin (center) of the image<br />        </span><span class="default">$originx </span><span class="keyword">= </span><span class="default">$srcw </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br />        </span><span class="default">$originy </span><span class="keyword">= </span><span class="default">$srch </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br />       <br />        </span><span class="comment">// The pixels array for the new image<br />        </span><span class="default">$pixels </span><span class="keyword">= array();<br />        </span><span class="default">$minx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$maxx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$miny </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$maxy </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$dstw </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$dsth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />       <br />        </span><span class="comment">// Loop through every pixel and transform it<br />        </span><span class="keyword">for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$srcw</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++) {<br />            for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$srch</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++) {<br />                list(</span><span class="default">$x1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">) = </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$originx</span><span class="keyword">, </span><span class="default">$originy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />               <br />                </span><span class="default">$x2 </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) - </span><span class="default">$y </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />                </span><span class="default">$y2 </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) + </span><span class="default">$y </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />               <br />                </span><span class="comment">// Store the pixel color<br />                </span><span class="default">$pixels</span><span class="keyword">[] = array(</span><span class="default">$x2</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />               <br />                </span><span class="comment">// Check our boundaries<br />                </span><span class="keyword">if(</span><span class="default">$x2 </span><span class="keyword">&gt; </span><span class="default">$maxx</span><span class="keyword">) </span><span class="default">$maxx </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">;<br />                if(</span><span class="default">$x2 </span><span class="keyword">&lt; </span><span class="default">$minx</span><span class="keyword">) </span><span class="default">$minx </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">;<br />                if(</span><span class="default">$y2 </span><span class="keyword">&gt; </span><span class="default">$maxy</span><span class="keyword">) </span><span class="default">$maxy </span><span class="keyword">= </span><span class="default">$y2</span><span class="keyword">;<br />                if(</span><span class="default">$y2 </span><span class="keyword">&lt; </span><span class="default">$miny</span><span class="keyword">) </span><span class="default">$miny </span><span class="keyword">= </span><span class="default">$y2</span><span class="keyword">;<br />            }<br />        }<br />       <br />        </span><span class="comment">// Determine the new image size<br />        </span><span class="default">$dstw </span><span class="keyword">= </span><span class="default">$maxx </span><span class="keyword">- </span><span class="default">$minx </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$dsth </span><span class="keyword">= </span><span class="default">$maxy </span><span class="keyword">- </span><span class="default">$miny </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />       <br />        </span><span class="comment">// Create our new image<br />        </span><span class="default">$dstImg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dstw</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">);<br />       <br />        </span><span class="comment">// Fill the background with our transparent color<br />        </span><span class="keyword">if(</span><span class="default">$transparentColor </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">) </span><span class="default">$transparentColor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />        </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">$transparentColor</span><span class="keyword">);<br />        </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dstw </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$dsth </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$transparentColor</span><span class="keyword">);<br />       <br />        </span><span class="comment">// Get the new origin<br />        </span><span class="default">$neworiginx </span><span class="keyword">= -</span><span class="default">$minx</span><span class="keyword">;<br />        </span><span class="default">$neworiginy </span><span class="keyword">= -</span><span class="default">$miny</span><span class="keyword">;<br />       <br />        </span><span class="comment">// Fill in the pixels<br />        </span><span class="keyword">foreach(</span><span class="default">$pixels </span><span class="keyword">as </span><span class="default">$data</span><span class="keyword">) {<br />            list(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">) = </span><span class="default">$data</span><span class="keyword">;<br />            list(</span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">) = </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$neworiginx</span><span class="keyword">, </span><span class="default">$neworiginy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />        }<br />       <br />        return </span><span class="default">$dstImg</span><span class="keyword">;<br />    }<br />   <br />    </span><span class="comment">/**<br />     * Translates from mathematical coordinate system to computer coordinate system using<br />     * origin coordinates from the computer system or visa versa<br />     *<br />     * @param int $originx<br />     * @param int $originy<br />     * @param int $x<br />     * @param int $y<br />     * @param bool $toComp<br />     * @return array(int $x, int $y)<br />     */<br />    </span><span class="keyword">function </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$originx</span><span class="keyword">, </span><span class="default">$originy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$toComp</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {<br />        if(</span><span class="default">$toComp</span><span class="keyword">) {<br />            </span><span class="default">$newx </span><span class="keyword">= </span><span class="default">$originx </span><span class="keyword">+ </span><span class="default">$x</span><span class="keyword">;<br />            </span><span class="default">$newy </span><span class="keyword">= </span><span class="default">$originy </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$newx </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$originx</span><span class="keyword">;<br />            </span><span class="default">$newy </span><span class="keyword">= </span><span class="default">$originy </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">;<br />        }<br />       <br />        return array(</span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86075">  <div class="votes">
    <div id="Vu86075">
    <a href="/manual/vote-note.php?id=86075&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86075">
    <a href="/manual/vote-note.php?id=86075&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86075" title="100% like this...">
    1
    </div>
  </div>
  <a href="#86075" class="name">
  <strong class="user"><em>foi02 at cartefoi dot net</em></strong></a><a class="genanchor" href="#86075"> &para;</a><div class="date" title="2008-10-01 07:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86075">
<div class="phpcode"><code><span class="html">For those who are looking for the GD library for Ubuntu, I let a copy on my server:  <a href="http://www.cartefoi.net/compl_compl_2.php" rel="nofollow" target="_blank">http://www.cartefoi.net/compl_compl_2.php</a><br />It was pretty hard to find, somebody gaveme his. Thanks a lot to him (message up).</span></code></div>
  </div>
 </div>
  <div class="note" id="91803">  <div class="votes">
    <div id="Vu91803">
    <a href="/manual/vote-note.php?id=91803&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91803">
    <a href="/manual/vote-note.php?id=91803&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91803" title="50% like this...">
    0
    </div>
  </div>
  <a href="#91803" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#91803"> &para;</a><div class="date" title="2009-06-25 05:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91803">
<div class="phpcode"><code><span class="html">Sorry, the previous class contains an error, the original image after the rotation 1px move on and get the unwanted "border".<br /><br />After a careful reading of the local debate, I am using the tip from Dave Richards wrote a new function. With its images can be rotated only 90 ° (default), 180 ° and 270 °, but one rarely needs more ...<br /><br />The function returns False, or rotated image <br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">)) {<br />    function </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">, </span><span class="default">$ignore_transparent </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />        return </span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">);<br />    }<br />}<br /><br />function </span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$img1</span><span class="keyword">, </span><span class="default">$rec</span><span class="keyword">) {<br />    </span><span class="default">$wid </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img1</span><span class="keyword">);<br />    </span><span class="default">$hei </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img1</span><span class="keyword">);<br />    switch(</span><span class="default">$rec</span><span class="keyword">) {<br />        case </span><span class="default">270</span><span class="keyword">:<br />            </span><span class="default">$img2 </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$hei</span><span class="keyword">, </span><span class="default">$wid</span><span class="keyword">);<br />        break;<br />        case </span><span class="default">180</span><span class="keyword">:<br />            </span><span class="default">$img2 </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$wid</span><span class="keyword">, </span><span class="default">$hei</span><span class="keyword">);<br />        break;<br />        default :<br />            </span><span class="default">$img2 </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$hei</span><span class="keyword">, </span><span class="default">$wid</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">$img2</span><span class="keyword">) {<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$wid</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            for(</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$hei</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />                </span><span class="default">$ref </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img1</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$j</span><span class="keyword">);<br />                switch(</span><span class="default">$rec</span><span class="keyword">) {<br />                    case </span><span class="default">270</span><span class="keyword">:<br />                        if(!@</span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img2</span><span class="keyword">, (</span><span class="default">$hei </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) - </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$ref</span><span class="keyword">)){<br />                            return </span><span class="default">false</span><span class="keyword">;<br />                        }<br />                    break;<br />                    case </span><span class="default">180</span><span class="keyword">:<br />                        if(!@</span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img2</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, (</span><span class="default">$hei </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) - </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$ref</span><span class="keyword">)) {<br />                            return </span><span class="default">false</span><span class="keyword">;<br />                        }<br />                    break;<br />                    default:<br />                        if(!@</span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img2</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, (</span><span class="default">$wid </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) - </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$ref</span><span class="keyword">)) {<br />                            return </span><span class="default">false</span><span class="keyword">;<br />                        }<br />                }<br />            }<br />        }<br />        return </span><span class="default">$img2</span><span class="keyword">;<br />    }<br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Petr</span></code></div>
  </div>
 </div>
  <div class="note" id="85847">  <div class="votes">
    <div id="Vu85847">
    <a href="/manual/vote-note.php?id=85847&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85847">
    <a href="/manual/vote-note.php?id=85847&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85847" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85847" class="name">
  <strong class="user"><em>Bert Vandeghinste</em></strong></a><a class="genanchor" href="#85847"> &para;</a><div class="date" title="2008-09-20 07:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85847">
<div class="phpcode"><code><span class="html">I'm now using david's code with these changes to get a transparent effect.
<br />
<br />I exec convert 2 times:
<br />
<br /><span class="default">&lt;?php
<br />exec</span><span class="keyword">( </span><span class="default">$imagick </span><span class="keyword">. </span><span class="string">' -background \'#555555\' -rotate ' </span><span class="keyword">. </span><span class="default">$angle </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$file1 </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$file2 </span><span class="keyword">);
<br /></span><span class="default">exec</span><span class="keyword">( </span><span class="default">$imagick </span><span class="keyword">. </span><span class="string">' -transparent \'#555555\' -transparent-color \'#555555\' ' </span><span class="keyword">. </span><span class="default">$file2 </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$file3 </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />and then use this after I rotated $output:
<br /><span class="default">&lt;?php imagecolortransparent</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">85</span><span class="keyword">, </span><span class="default">85</span><span class="keyword">, </span><span class="default">85</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">)); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85187">  <div class="votes">
    <div id="Vu85187">
    <a href="/manual/vote-note.php?id=85187&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85187">
    <a href="/manual/vote-note.php?id=85187&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85187" title="no votes...">
    0
    </div>
  </div>
  <a href="#85187" class="name">
  <strong class="user"><em>cbl25</em></strong></a><a class="genanchor" href="#85187"> &para;</a><div class="date" title="2008-08-19 07:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85187">
<div class="phpcode"><code><span class="html">Here is a simple function to rotate a non-square image 90 degrees clockwise.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">);
<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">);
<br />    </span><span class="default">$side </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">&gt; </span><span class="default">$height </span><span class="keyword">? </span><span class="default">$width </span><span class="keyword">: </span><span class="default">$height</span><span class="keyword">;
<br />    </span><span class="default">$squareImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$side</span><span class="keyword">, </span><span class="default">$side</span><span class="keyword">);
<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$squareImage</span><span class="keyword">,</span><span class="default">$imageResource</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);
<br />    </span><span class="default">$squareImage </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$squareImage</span><span class="keyword">,</span><span class="default">270</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);
<br />    </span><span class="default">$imageResource </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">);
<br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">&gt; </span><span class="default">$width </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">$side </span><span class="keyword">- </span><span class="default">$height</span><span class="keyword">;
<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imageResource</span><span class="keyword">,</span><span class="default">$squareImage</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">);
<br />    return </span><span class="default">$imageResource</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83547">  <div class="votes">
    <div id="Vu83547">
    <a href="/manual/vote-note.php?id=83547&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83547">
    <a href="/manual/vote-note.php?id=83547&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83547" title="no votes...">
    0
    </div>
  </div>
  <a href="#83547" class="name">
  <strong class="user"><em>pilot at myupb dot com</em></strong></a><a class="genanchor" href="#83547"> &para;</a><div class="date" title="2008-05-30 05:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83547">
<div class="phpcode"><code><span class="html">Shortly after posting I was informed about a very nice algorithm for calculating the new pixel position for a rotation and thought it would be a nice improvement. Hopes this helps anyone needing a full implementation.<br /><br />Note: I tested the function on a 3Mb photo and it seemed to work perfectly with no quality loss.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">)) {<br />    function </span><span class="default">imagerotate</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$transparentColor </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$srcw </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br />        </span><span class="default">$srch </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);<br />        <br />        if(</span><span class="default">$angle </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">$srcImg</span><span class="keyword">;<br />        <br />        </span><span class="comment">// Convert the angle to radians<br />        </span><span class="default">$pi </span><span class="keyword">= </span><span class="default">3.141592654</span><span class="keyword">;<br />        </span><span class="default">$theta </span><span class="keyword">= </span><span class="default">$angle </span><span class="keyword">* </span><span class="default">$pi </span><span class="keyword">/ </span><span class="default">180</span><span class="keyword">;<br />        <br />        </span><span class="comment">// Get the origin (center) of the image<br />        </span><span class="default">$originx </span><span class="keyword">= </span><span class="default">$srcw </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br />        </span><span class="default">$originy </span><span class="keyword">= </span><span class="default">$srch </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br />        <br />        </span><span class="comment">// The pixels array for the new image<br />        </span><span class="default">$pixels </span><span class="keyword">= array();<br />        </span><span class="default">$minx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$maxx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$miny </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$maxy </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$dstw </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$dsth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        <br />        </span><span class="comment">// Loop through every pixel and transform it<br />        </span><span class="keyword">for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$srcw</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++) {<br />            for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$srch</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++) {<br />                list(</span><span class="default">$x1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">) = </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$originx</span><span class="keyword">, </span><span class="default">$originy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />                <br />                </span><span class="default">$x2 </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) - </span><span class="default">$y </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />                </span><span class="default">$y2 </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">) + </span><span class="default">$y </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta</span><span class="keyword">);<br />                <br />                </span><span class="comment">// Store the pixel color<br />                </span><span class="default">$pixels</span><span class="keyword">[] = array(</span><span class="default">$x2</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />                <br />                </span><span class="comment">// Check our boundaries<br />                </span><span class="keyword">if(</span><span class="default">$x2 </span><span class="keyword">&gt; </span><span class="default">$maxx</span><span class="keyword">) </span><span class="default">$maxx </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">;<br />                if(</span><span class="default">$x2 </span><span class="keyword">&lt; </span><span class="default">$minx</span><span class="keyword">) </span><span class="default">$minx </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">;<br />                if(</span><span class="default">$y2 </span><span class="keyword">&gt; </span><span class="default">$maxy</span><span class="keyword">) </span><span class="default">$maxy </span><span class="keyword">= </span><span class="default">$y2</span><span class="keyword">;<br />                if(</span><span class="default">$y2 </span><span class="keyword">&lt; </span><span class="default">$miny</span><span class="keyword">) </span><span class="default">$miny </span><span class="keyword">= </span><span class="default">$y2</span><span class="keyword">;<br />            }<br />        }<br />        <br />        </span><span class="comment">// Determine the new image size<br />        </span><span class="default">$dstw </span><span class="keyword">= </span><span class="default">$maxx </span><span class="keyword">- </span><span class="default">$minx </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$dsth </span><span class="keyword">= </span><span class="default">$maxy </span><span class="keyword">- </span><span class="default">$miny </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />        <br />        </span><span class="comment">// Create our new image<br />        </span><span class="default">$dstImg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dstw</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">);<br />        <br />        </span><span class="comment">// Fill the background with our transparent color<br />        </span><span class="keyword">if(</span><span class="default">$transparentColor </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">) </span><span class="default">$transparentColor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />        </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">$transparentColor</span><span class="keyword">);<br />        </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dstw </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$dsth </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$transparentColor</span><span class="keyword">);<br />        <br />        </span><span class="comment">// Get the new origin<br />        </span><span class="default">$neworiginx </span><span class="keyword">= -</span><span class="default">$minx</span><span class="keyword">;<br />        </span><span class="default">$neworiginy </span><span class="keyword">= -</span><span class="default">$miny</span><span class="keyword">;<br />        <br />        </span><span class="comment">// Fill in the pixels<br />        </span><span class="keyword">foreach(</span><span class="default">$pixels </span><span class="keyword">as </span><span class="default">$data</span><span class="keyword">) {<br />            list(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">) = </span><span class="default">$data</span><span class="keyword">;<br />            list(</span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">) = </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$neworiginx</span><span class="keyword">, </span><span class="default">$neworiginy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />        }<br />        <br />        return </span><span class="default">$dstImg</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">/**<br />     * Translates from mathematical coordinate system to computer coordinate system using<br />     * origin coordinates from the computer system or visa versa<br />     *<br />     * @param int $originx<br />     * @param int $originy<br />     * @param int $x<br />     * @param int $y<br />     * @param bool $toComp<br />     * @return array(int $x, int $y)<br />     */<br />    </span><span class="keyword">function </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$originx</span><span class="keyword">, </span><span class="default">$originy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$toComp</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {<br />        if(</span><span class="default">$toComp</span><span class="keyword">) {<br />            </span><span class="default">$newx </span><span class="keyword">= </span><span class="default">$originx </span><span class="keyword">+ </span><span class="default">$x</span><span class="keyword">;<br />            </span><span class="default">$newy </span><span class="keyword">= </span><span class="default">$originy </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$newx </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$originx</span><span class="keyword">;<br />            </span><span class="default">$newy </span><span class="keyword">= </span><span class="default">$originy </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">;<br />        }<br />        <br />        return array(</span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83530">  <div class="votes">
    <div id="Vu83530">
    <a href="/manual/vote-note.php?id=83530&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83530">
    <a href="/manual/vote-note.php?id=83530&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83530" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83530" class="name">
  <strong class="user"><em>pilot at myupb dot com</em></strong></a><a class="genanchor" href="#83530"> &para;</a><div class="date" title="2008-05-30 07:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83530">
<div class="phpcode"><code><span class="html">Thanks to the people who contributed the code for the 90 180 and 270 rotations. I needed a full implementation however so I wrote one. By no mean do I think this is the best way of doing it, I just whipped this together for myself. Seems to work good for me.
<br />
<br />Note: I didn't want the image to be shrunk when rotating so this implementation will keep the size of the original image but just rotate it.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">)) {
<br />    function </span><span class="default">imagerotate</span><span class="keyword">(&amp;</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$transparentColor </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {
<br />        </span><span class="default">$srcw </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);
<br />        </span><span class="default">$srch </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">);
<br />        
<br />        if(</span><span class="default">$angle </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">$srcImg</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// Convert the angle to radians
<br />        </span><span class="default">$pi </span><span class="keyword">= </span><span class="default">3.141592654</span><span class="keyword">;
<br />        </span><span class="default">$theta </span><span class="keyword">= </span><span class="default">$angle </span><span class="keyword">* </span><span class="default">$pi </span><span class="keyword">/ </span><span class="default">180</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// Get the origin (center) of the image
<br />        </span><span class="default">$originx </span><span class="keyword">= </span><span class="default">$srcw </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;
<br />        </span><span class="default">$originy </span><span class="keyword">= </span><span class="default">$srch </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// The pixels array for the new image
<br />        </span><span class="default">$pixels </span><span class="keyword">= array();
<br />        </span><span class="default">$minx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$maxx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$miny </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$maxy </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$dstw </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$dsth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// Loop through every pixel and transform it
<br />        </span><span class="keyword">for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$srcw</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++) {
<br />            for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$srch</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++) {
<br />                list(</span><span class="default">$x1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">) = </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$originx</span><span class="keyword">, </span><span class="default">$originy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />                
<br />                </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />                </span><span class="default">$noTranslate </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />                
<br />                </span><span class="comment">// Determine the angle of original point
<br />                </span><span class="keyword">if(</span><span class="default">$x1 </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="comment">// Quadrant 1
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">atan</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">/</span><span class="default">$x1</span><span class="keyword">);
<br />                } elseif(</span><span class="default">$x1 </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="comment">// Quadrant 2
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">$pi </span><span class="keyword">- </span><span class="default">atan</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">/</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">));
<br />                } elseif(</span><span class="default">$x1 </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="comment">// Quadrant 3
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">$pi </span><span class="keyword">+ </span><span class="default">atan</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">/</span><span class="default">$x1</span><span class="keyword">);
<br />                } elseif(</span><span class="default">$x1 </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="comment">// Quadrant 4
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$pi </span><span class="keyword">- </span><span class="default">atan</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">)/</span><span class="default">$x1</span><span class="keyword">);
<br />                } elseif(</span><span class="default">$x1 </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">$pi </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;
<br />                } elseif(</span><span class="default">$x1 </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">3 </span><span class="keyword">* </span><span class="default">$pi </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;
<br />                } elseif(</span><span class="default">$x1 </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />                } elseif(</span><span class="default">$x1 </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$y1 </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="default">$theta1 </span><span class="keyword">= </span><span class="default">$pi</span><span class="keyword">;
<br />                } else {
<br />                    </span><span class="comment">// Only case left should be $x1 == 0 &amp;&amp; $y1 == 0
<br />                    </span><span class="default">$noTranslate </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />                }
<br />                
<br />                </span><span class="comment">// Translate the position
<br />                </span><span class="keyword">if(!</span><span class="default">$noTranslate</span><span class="keyword">) {
<br />                    </span><span class="comment">// Calculate the new angle
<br />                    </span><span class="default">$theta2 </span><span class="keyword">= </span><span class="default">$theta1 </span><span class="keyword">+ </span><span class="default">$theta</span><span class="keyword">;
<br />                    
<br />                    </span><span class="comment">// Make sure theta2 is in between 0 - 2pi
<br />                    </span><span class="keyword">while(</span><span class="default">$theta2 </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$theta2 </span><span class="keyword">+= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$pi</span><span class="keyword">;
<br />                    while(</span><span class="default">$theta2 </span><span class="keyword">&gt; (</span><span class="default">2 </span><span class="keyword">* </span><span class="default">$pi</span><span class="keyword">)) </span><span class="default">$theta2 </span><span class="keyword">-= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$pi</span><span class="keyword">;
<br />                    
<br />                    </span><span class="default">$radius </span><span class="keyword">= </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">*</span><span class="default">$x1 </span><span class="keyword">+ </span><span class="default">$y1</span><span class="keyword">*</span><span class="default">$y1</span><span class="keyword">);
<br />                    
<br />                    </span><span class="default">$x2 </span><span class="keyword">= (</span><span class="default">$radius </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$theta2</span><span class="keyword">));
<br />                    </span><span class="default">$y2 </span><span class="keyword">= (</span><span class="default">$radius </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$theta2</span><span class="keyword">));
<br />                } else {
<br />                    </span><span class="default">$x2 </span><span class="keyword">= </span><span class="default">$x1</span><span class="keyword">;
<br />                    </span><span class="default">$y2 </span><span class="keyword">= </span><span class="default">$y1</span><span class="keyword">;
<br />                }
<br />                
<br />                </span><span class="comment">// Store the pixel color
<br />                </span><span class="default">$pixels</span><span class="keyword">[] = array(</span><span class="default">$x2</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcImg</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));
<br />                
<br />                </span><span class="comment">// Check our boundaries
<br />                </span><span class="keyword">if(</span><span class="default">$x2 </span><span class="keyword">&gt; </span><span class="default">$maxx</span><span class="keyword">) </span><span class="default">$maxx </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">;
<br />                if(</span><span class="default">$x2 </span><span class="keyword">&lt; </span><span class="default">$minx</span><span class="keyword">) </span><span class="default">$minx </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">;
<br />                if(</span><span class="default">$y2 </span><span class="keyword">&gt; </span><span class="default">$maxy</span><span class="keyword">) </span><span class="default">$maxy </span><span class="keyword">= </span><span class="default">$y2</span><span class="keyword">;
<br />                if(</span><span class="default">$y2 </span><span class="keyword">&lt; </span><span class="default">$miny</span><span class="keyword">) </span><span class="default">$miny </span><span class="keyword">= </span><span class="default">$y2</span><span class="keyword">;
<br />            }
<br />        }
<br />        
<br />        </span><span class="comment">// Determine the new image size
<br />        </span><span class="default">$dstw </span><span class="keyword">= </span><span class="default">$maxx </span><span class="keyword">- </span><span class="default">$minx </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />        </span><span class="default">$dsth </span><span class="keyword">= </span><span class="default">$maxy </span><span class="keyword">- </span><span class="default">$miny </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// Create our new image
<br />        </span><span class="default">$dstImg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dstw</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// Fill the background with our transparent color
<br />        </span><span class="keyword">if(</span><span class="default">$transparentColor </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">) </span><span class="default">$transparentColor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);
<br />        </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">$transparentColor</span><span class="keyword">);
<br />        </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dstw </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$dsth </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$transparentColor</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// Get the new origin
<br />        </span><span class="default">$neworiginx </span><span class="keyword">= -</span><span class="default">$minx</span><span class="keyword">;
<br />        </span><span class="default">$neworiginy </span><span class="keyword">= -</span><span class="default">$miny</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// Fill in the pixels
<br />        </span><span class="keyword">foreach(</span><span class="default">$pixels </span><span class="keyword">as </span><span class="default">$data</span><span class="keyword">) {
<br />            list(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">) = </span><span class="default">$data</span><span class="keyword">;
<br />            list(</span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">) = </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$neworiginx</span><span class="keyword">, </span><span class="default">$neworiginy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);
<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$dstImg</span><span class="keyword">, </span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />        }
<br />        
<br />        return </span><span class="default">$dstImg</span><span class="keyword">;
<br />    }
<br />    
<br />    </span><span class="comment">/**
<br />     * Translates from mathematical coordinate system to computer coordinate system using
<br />     * origin coordinates from the computer system or visa versa
<br />     *
<br />     * @param int $originx
<br />     * @param int $originy
<br />     * @param int $x
<br />     * @param int $y
<br />     * @param bool $toComp
<br />     * @return array(int $x, int $y)
<br />     */
<br />    </span><span class="keyword">function </span><span class="default">translateCoordinate</span><span class="keyword">(</span><span class="default">$originx</span><span class="keyword">, </span><span class="default">$originy</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$toComp</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {
<br />        if(</span><span class="default">$toComp</span><span class="keyword">) {
<br />            </span><span class="default">$newx </span><span class="keyword">= </span><span class="default">$originx </span><span class="keyword">+ </span><span class="default">$x</span><span class="keyword">;
<br />            </span><span class="default">$newy </span><span class="keyword">= </span><span class="default">$originy </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">;
<br />        } else {
<br />            </span><span class="default">$newx </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$originx</span><span class="keyword">;
<br />            </span><span class="default">$newy </span><span class="keyword">= </span><span class="default">$originy </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">;
<br />        }
<br />        
<br />        return array(</span><span class="default">$newx</span><span class="keyword">, </span><span class="default">$newy</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82201">  <div class="votes">
    <div id="Vu82201">
    <a href="/manual/vote-note.php?id=82201&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82201">
    <a href="/manual/vote-note.php?id=82201&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82201" title="no votes...">
    0
    </div>
  </div>
  <a href="#82201" class="name">
  <strong class="user"><em>achilles</em></strong></a><a class="genanchor" href="#82201"> &para;</a><div class="date" title="2008-03-31 02:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82201">
<div class="phpcode"><code><span class="html">otimized integration from 23-Feb-2007 04:21<br />just put it anywhere you like to use imagerotate with 90, 180, 270 degrees.<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">)) {<br />    function </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">) {<br />        </span><span class="default">$src_x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);<br />        </span><span class="default">$src_y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);<br />        if (</span><span class="default">$angle </span><span class="keyword">== </span><span class="default">180</span><span class="keyword">) {<br />            </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$src_x</span><span class="keyword">;<br />            </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$src_y</span><span class="keyword">; }<br />        elseif (</span><span class="default">$src_x </span><span class="keyword">&lt;= </span><span class="default">$src_y</span><span class="keyword">) {<br />            </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$src_y</span><span class="keyword">;<br />            </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$src_x</span><span class="keyword">; }<br />        elseif (</span><span class="default">$src_x </span><span class="keyword">&gt;= </span><span class="default">$src_y</span><span class="keyword">) {<br />            </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$src_y</span><span class="keyword">;<br />            </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$src_x</span><span class="keyword">; }<br />        <br />        </span><span class="default">$rotate</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dest_x</span><span class="keyword">,</span><span class="default">$dest_y</span><span class="keyword">);<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />               <br />        switch (</span><span class="default">$angle</span><span class="keyword">) {<br />            case </span><span class="default">270</span><span class="keyword">:<br />                for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; (</span><span class="default">$src_y</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) {<br />                    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">$src_x</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) {<br />                        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />                        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$dest_x </span><span class="keyword">- </span><span class="default">$y </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">); }}<br />                break;<br />            case </span><span class="default">90</span><span class="keyword">:<br />                for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; (</span><span class="default">$src_y</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) {<br />                    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">$src_x</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) {<br />                        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />                        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$dest_y </span><span class="keyword">- </span><span class="default">$x </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">); }}<br />                break;<br />            case </span><span class="default">180</span><span class="keyword">:<br />                for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; (</span><span class="default">$src_y</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) {<br />                    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">$src_x</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) {<br />                        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />                        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$dest_x </span><span class="keyword">- </span><span class="default">$x </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$dest_y </span><span class="keyword">- </span><span class="default">$y </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">); }}<br />                break;<br />            default: </span><span class="default">$rotate </span><span class="keyword">= </span><span class="default">$src_img</span><span class="keyword">; }<br />        return </span><span class="default">$rotate</span><span class="keyword">; }}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77033">  <div class="votes">
    <div id="Vu77033">
    <a href="/manual/vote-note.php?id=77033&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77033">
    <a href="/manual/vote-note.php?id=77033&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77033" title="no votes...">
    0
    </div>
  </div>
  <a href="#77033" class="name">
  <strong class="user"><em>qrgames at NOSPAMTYrushyo dot com</em></strong></a><a class="genanchor" href="#77033"> &para;</a><div class="date" title="2007-08-11 04:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77033">
<div class="phpcode"><code><span class="html">imagerotate seems to be very fussy about handling transparency when copymerging onto another image. You can use the GD library's other transparency features to cover up the fact imagerotate gets it wrong HOWEVER it will only work if the top-left corner of the image is transparent at all rotations, so make the image a little bigger than it needs to be. This has been tested with png32 but does not work entirely for png8, as a phenomena creates noise around the rotated image.<br /><br /><span class="default">&lt;?php<br /><br />$imgImage </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"image.png"</span><span class="keyword">);<br /></span><span class="default">$colBlack </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$imgImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$imgImage </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$imgImage</span><span class="keyword">, </span><span class="default">360 </span><span class="keyword">- </span><span class="default">$intHeading</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$imgImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$colBlack</span><span class="keyword">);<br /></span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$imgImage</span><span class="keyword">, </span><span class="default">$colBlack</span><span class="keyword">);<br /></span><span class="default">imagecopymerge</span><span class="keyword">(</span><span class="default">$imgOriginalImage </span><span class="keyword">, </span><span class="default">$imgImage</span><span class="keyword">, </span><span class="default">$intX</span><span class="keyword">, </span><span class="default">$intY</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$intHeight</span><span class="keyword">, </span><span class="default">$intWidth</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imgImage</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Note. $intHeading is in degrees clockwise :)</span></code></div>
  </div>
 </div>
  <div class="note" id="73446">  <div class="votes">
    <div id="Vu73446">
    <a href="/manual/vote-note.php?id=73446&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73446">
    <a href="/manual/vote-note.php?id=73446&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73446" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73446" class="name">
  <strong class="user"><em>Thomaschaaf</em></strong></a><a class="genanchor" href="#73446"> &para;</a><div class="date" title="2007-02-23 07:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73446">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">rotate</span><span class="keyword">(</span><span class="default">$degrees</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"imagerotate"</span><span class="keyword">))
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">$degrees</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />        else
<br />        {
<br />            function </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">) 
<br />            {
<br />                </span><span class="default">$src_x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);
<br />                </span><span class="default">$src_y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);
<br />                if (</span><span class="default">$angle </span><span class="keyword">== </span><span class="default">180</span><span class="keyword">)
<br />                {
<br />                    </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$src_x</span><span class="keyword">;
<br />                    </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$src_y</span><span class="keyword">;
<br />                } 
<br />                elseif (</span><span class="default">$src_x </span><span class="keyword">&lt;= </span><span class="default">$src_y</span><span class="keyword">) 
<br />                {
<br />                    </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$src_y</span><span class="keyword">;
<br />                    </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$src_x</span><span class="keyword">;
<br />                } 
<br />                elseif (</span><span class="default">$src_x </span><span class="keyword">&gt;= </span><span class="default">$src_y</span><span class="keyword">)  
<br />                {
<br />                    </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$src_y</span><span class="keyword">;
<br />                    </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$src_x</span><span class="keyword">;
<br />                }
<br />                
<br />                </span><span class="default">$rotate</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dest_x</span><span class="keyword">,</span><span class="default">$dest_y</span><span class="keyword">);
<br />                </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />                
<br />                switch (</span><span class="default">$angle</span><span class="keyword">) 
<br />                {
<br />                    case </span><span class="default">270</span><span class="keyword">:
<br />                        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; (</span><span class="default">$src_y</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) 
<br />                        {
<br />                            for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">$src_x</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) 
<br />                            {
<br />                                </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);
<br />                                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$dest_x </span><span class="keyword">- </span><span class="default">$y </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />                            }
<br />                        }
<br />                        break;
<br />                    case </span><span class="default">90</span><span class="keyword">:
<br />                        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; (</span><span class="default">$src_y</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) 
<br />                        {
<br />                            for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">$src_x</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) 
<br />                            {
<br />                                </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);
<br />                                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$dest_y </span><span class="keyword">- </span><span class="default">$x </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />                            }
<br />                        }
<br />                        break;
<br />                    case </span><span class="default">180</span><span class="keyword">:
<br />                        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; (</span><span class="default">$src_y</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) 
<br />                        {
<br />                            for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">$src_x</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) 
<br />                            {
<br />                                </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);
<br />                                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$dest_x </span><span class="keyword">- </span><span class="default">$x </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$dest_y </span><span class="keyword">- </span><span class="default">$y </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />                            }
<br />                        }
<br />                        break;
<br />                    default: </span><span class="default">$rotate </span><span class="keyword">= </span><span class="default">$src_img</span><span class="keyword">;
<br />                };
<br />                return </span><span class="default">$rotate</span><span class="keyword">;
<br />            }
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">$degrees</span><span class="keyword">);
<br />        }
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50487">  <div class="votes">
    <div id="Vu50487">
    <a href="/manual/vote-note.php?id=50487&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50487">
    <a href="/manual/vote-note.php?id=50487&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50487" title="no votes...">
    0
    </div>
  </div>
  <a href="#50487" class="name">
  <strong class="user"><em>wulff at fyens dot dk</em></strong></a><a class="genanchor" href="#50487"> &para;</a><div class="date" title="2005-03-01 01:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50487">
<div class="phpcode"><code><span class="html">I liked the rotateImageBicubic function implemented by darren at lucidtone dot com. But it just snipped off the parts of the image that were outside the original image.<br /><br />I fixed this, even though I admit that my solution is a bit naive. But it might come in handy for somebody.<br /><br />Also his bicubic implementation was broken on my machine so I left it out, if you need it just copy and paste it from above.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// $src_img - a GD image resource<br />// $angle - degrees to rotate clockwise, in degrees<br />// returns a GD image resource<br />// USAGE:<br />// $im = imagecreatefrompng('test.png');<br />// $im = imagerotate($im, 15);<br />// header('Content-type: image/png');<br />// imagepng($im);<br /></span><span class="keyword">function </span><span class="default">imageRotate</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bicubic</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />  <br />   </span><span class="comment">// convert degrees to radians<br />   </span><span class="default">$angle </span><span class="keyword">= </span><span class="default">$angle </span><span class="keyword">+ </span><span class="default">180</span><span class="keyword">;<br />   </span><span class="default">$angle </span><span class="keyword">= </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br />  <br />   </span><span class="default">$src_x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);<br />   </span><span class="default">$src_y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);<br />  <br />   </span><span class="default">$center_x </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$src_x</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br />   </span><span class="default">$center_y </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$src_y</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br /><br />   </span><span class="default">$cosangle </span><span class="keyword">= </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br />   </span><span class="default">$sinangle </span><span class="keyword">= </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br /><br />   </span><span class="default">$corners</span><span class="keyword">=array(array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">), array(</span><span class="default">$src_x</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">), array(</span><span class="default">$src_x</span><span class="keyword">,</span><span class="default">$src_y</span><span class="keyword">), array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$src_y</span><span class="keyword">));<br /><br />   foreach(</span><span class="default">$corners </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />     </span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-=</span><span class="default">$center_x</span><span class="keyword">;        </span><span class="comment">//Translate coords to center for rotation<br />     </span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-=</span><span class="default">$center_y</span><span class="keyword">;<br />     </span><span class="default">$temp</span><span class="keyword">=array();<br />     </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]*</span><span class="default">$cosangle</span><span class="keyword">+</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]*</span><span class="default">$sinangle</span><span class="keyword">;<br />     </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]*</span><span class="default">$cosangle</span><span class="keyword">-</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]*</span><span class="default">$sinangle</span><span class="keyword">;<br />     </span><span class="default">$corners</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]=</span><span class="default">$temp</span><span class="keyword">;    <br />   }<br />   <br />   </span><span class="default">$min_x</span><span class="keyword">=</span><span class="default">1000000000000000</span><span class="keyword">;<br />   </span><span class="default">$max_x</span><span class="keyword">=-</span><span class="default">1000000000000000</span><span class="keyword">;<br />   </span><span class="default">$min_y</span><span class="keyword">=</span><span class="default">1000000000000000</span><span class="keyword">;<br />   </span><span class="default">$max_y</span><span class="keyword">=-</span><span class="default">1000000000000000</span><span class="keyword">;<br />   <br />   foreach(</span><span class="default">$corners </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />     if(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]&lt;</span><span class="default">$min_x</span><span class="keyword">)<br />       </span><span class="default">$min_x</span><span class="keyword">=</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />     if(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]&gt;</span><span class="default">$max_x</span><span class="keyword">)<br />       </span><span class="default">$max_x</span><span class="keyword">=</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />   <br />     if(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]&lt;</span><span class="default">$min_y</span><span class="keyword">)<br />       </span><span class="default">$min_y</span><span class="keyword">=</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />     if(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]&gt;</span><span class="default">$max_y</span><span class="keyword">)<br />       </span><span class="default">$max_y</span><span class="keyword">=</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />   }<br /><br />   </span><span class="default">$rotate_width</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$max_x</span><span class="keyword">-</span><span class="default">$min_x</span><span class="keyword">);<br />   </span><span class="default">$rotate_height</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$max_y</span><span class="keyword">-</span><span class="default">$min_y</span><span class="keyword">);<br /><br />   </span><span class="default">$rotate</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$rotate_width</span><span class="keyword">,</span><span class="default">$rotate_height</span><span class="keyword">);<br />   </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />   </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />   </span><span class="comment">//Reset center to center of our image<br />   </span><span class="default">$newcenter_x </span><span class="keyword">= (</span><span class="default">$rotate_width</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;<br />   </span><span class="default">$newcenter_y </span><span class="keyword">= (</span><span class="default">$rotate_height</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;<br /><br />   for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; (</span><span class="default">$rotate_height</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) {<br />     for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">$rotate_width</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) {<br />       </span><span class="comment">// rotate...<br />       </span><span class="default">$old_x </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(((</span><span class="default">$newcenter_x</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">) * </span><span class="default">$cosangle </span><span class="keyword">+ (</span><span class="default">$newcenter_y</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">) * </span><span class="default">$sinangle</span><span class="keyword">))<br />         + </span><span class="default">$center_x</span><span class="keyword">;<br />       </span><span class="default">$old_y </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(((</span><span class="default">$newcenter_y</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">) * </span><span class="default">$cosangle </span><span class="keyword">- (</span><span class="default">$newcenter_x</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">) * </span><span class="default">$sinangle</span><span class="keyword">))<br />         + </span><span class="default">$center_y</span><span class="keyword">;<br />      <br />       if ( </span><span class="default">$old_x </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$old_x </span><span class="keyword">&lt; </span><span class="default">$src_x<br />             </span><span class="keyword">&amp;&amp; </span><span class="default">$old_y </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$old_y </span><span class="keyword">&lt; </span><span class="default">$src_y </span><span class="keyword">) {<br /><br />           </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$old_x</span><span class="keyword">, </span><span class="default">$old_y</span><span class="keyword">);<br />       } else {<br />         </span><span class="comment">// this line sets the background colour<br />         </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />       }<br />       </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />     }<br />   }<br />   <br />  return(</span><span class="default">$rotate</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48725">  <div class="votes">
    <div id="Vu48725">
    <a href="/manual/vote-note.php?id=48725&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48725">
    <a href="/manual/vote-note.php?id=48725&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48725" title="no votes...">
    0
    </div>
  </div>
  <a href="#48725" class="name">
  <strong class="user"><em>Borszczuk</em></strong></a><a class="genanchor" href="#48725"> &para;</a><div class="date" title="2005-01-05 05:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48725">
<div class="phpcode"><code><span class="html">Here's a function that implements right angle (multiplicity of 90 degs - 90, 180, 270) rotation if you need one but lacks native imagerotate() or you don't want non-square images to be scaled down as with imagerotate(). As you probably noticed it's not self contained function, as 180 rotation is handled by ImageFlip() function to gain the performance. The ImageFlip() function used is published here: <a href="http://php.net/imagecopy" rel="nofollow" target="_blank">http://php.net/imagecopy</a> in the comment of mine placed on  05-Jan-2005 04:30
<br />
<br />Please note: that in case of 0 degrees rotation handle to imgSrc is returned which may lead to problems if you imagedestroy() it undonditionaly. To solve that you shall add imagecopy($imgDest, $imgSrc, 0,0, 0,0,$srcX, $srcY)  in proper place which I have intentionally ommited to save memory resources
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// $imgSrc - GD image handle of source image
<br />// $angle - angle of rotation. Needs to be positive integer
<br />// angle shall be 0,90,180,270, but if you give other it
<br />// will be rouned to nearest right angle (i.e. 52-&gt;90 degs,
<br />// 96-&gt;90 degs)
<br />// returns GD image handle of rotated image.
<br /></span><span class="keyword">function </span><span class="default">ImageRotateRightAngle</span><span class="keyword">( </span><span class="default">$imgSrc</span><span class="keyword">, </span><span class="default">$angle </span><span class="keyword">)
<br />{
<br />    </span><span class="comment">// ensuring we got really RightAngle (if not we choose the closest one)
<br />    </span><span class="default">$angle </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">( ( (int)((</span><span class="default">$angle</span><span class="keyword">+</span><span class="default">45</span><span class="keyword">) / </span><span class="default">90</span><span class="keyword">) * </span><span class="default">90</span><span class="keyword">), </span><span class="default">270 </span><span class="keyword">);
<br />
<br />    </span><span class="comment">// no need to fight
<br />    </span><span class="keyword">if( </span><span class="default">$angle </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">)
<br />        return( </span><span class="default">$imgSrc </span><span class="keyword">);
<br />
<br />    </span><span class="comment">// dimenstion of source image
<br />    </span><span class="default">$srcX </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">( </span><span class="default">$imgSrc </span><span class="keyword">);
<br />    </span><span class="default">$srcY </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">( </span><span class="default">$imgSrc </span><span class="keyword">);
<br />
<br />    switch( </span><span class="default">$angle </span><span class="keyword">)
<br />        {
<br />        case </span><span class="default">90</span><span class="keyword">:
<br />            </span><span class="default">$imgDest </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$srcY</span><span class="keyword">, </span><span class="default">$srcX </span><span class="keyword">);
<br />            for( </span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$srcX</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ )
<br />                for( </span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$srcY</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ )
<br />                    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imgDest</span><span class="keyword">, </span><span class="default">$imgSrc</span><span class="keyword">, </span><span class="default">$srcY</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            break;
<br />
<br />        case </span><span class="default">180</span><span class="keyword">:
<br />            </span><span class="default">$imgDest </span><span class="keyword">= </span><span class="default">ImageFlip</span><span class="keyword">( </span><span class="default">$imgSrc</span><span class="keyword">, </span><span class="default">IMAGE_FLIP_BOTH </span><span class="keyword">);
<br />            break;
<br />
<br />        case </span><span class="default">270</span><span class="keyword">:
<br />            </span><span class="default">$imgDest </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$srcY</span><span class="keyword">, </span><span class="default">$srcX </span><span class="keyword">);
<br />            for( </span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$srcX</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ )
<br />                for( </span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$srcY</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ )
<br />                    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imgDest</span><span class="keyword">, </span><span class="default">$imgSrc</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$srcX</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            break;
<br />        }
<br />
<br />    return( </span><span class="default">$imgDest </span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46338">  <div class="votes">
    <div id="Vu46338">
    <a href="/manual/vote-note.php?id=46338&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46338">
    <a href="/manual/vote-note.php?id=46338&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46338" title="no votes...">
    0
    </div>
  </div>
  <a href="#46338" class="name">
  <strong class="user"><em>jon at driestone dot com</em></strong></a><a class="genanchor" href="#46338"> &para;</a><div class="date" title="2004-10-07 08:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46338">
<div class="phpcode"><code><span class="html">imagerotate does not preserve the alpha channel, so if you want to rotate a PNG you need to get 
<br />creative. I don't see any command to retrieve the alpha information from an image (as far as 
<br />I could see,) so you'll have to do a bit of manual labor before hand. In my case I created a 
<br />second PNG file with the alpha saved as RGB data and manually "copied" the data from source 
<br />to destination:
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">alpha_rotate</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$rotate</span><span class="keyword">,</span><span class="default">$offsetX</span><span class="keyword">,</span><span class="default">$offsetY</span><span class="keyword">){
<br />
<br />        </span><span class="default">$top </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"image_processing/shadow.png"</span><span class="keyword">);
<br />        </span><span class="default">$top_alpha </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"image_processing/shadow_alpha.png"</span><span class="keyword">);
<br />                
<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$top</span><span class="keyword">,</span><span class="default">$src</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);
<br />                
<br />        </span><span class="default">$top </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$top</span><span class="keyword">,</span><span class="default">$rotate</span><span class="keyword">,</span><span class="default">0x000000</span><span class="keyword">);
<br />        </span><span class="default">$top_alpha </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$top_alpha</span><span class="keyword">,</span><span class="default">$rotate</span><span class="keyword">,</span><span class="default">0x000000</span><span class="keyword">);
<br />    
<br />    
<br />        for (</span><span class="default">$theX</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$theX</span><span class="keyword">&lt;</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$top</span><span class="keyword">);</span><span class="default">$theX</span><span class="keyword">++){
<br />            for (</span><span class="default">$theY</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$theY</span><span class="keyword">&lt;</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$top</span><span class="keyword">);</span><span class="default">$theY</span><span class="keyword">++){
<br />    
<br />                </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$top</span><span class="keyword">,</span><span class="default">$theX</span><span class="keyword">,</span><span class="default">$theY</span><span class="keyword">);
<br />                </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />                </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />                </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />                
<br />                </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$top_alpha</span><span class="keyword">,</span><span class="default">$theX</span><span class="keyword">,</span><span class="default">$theY</span><span class="keyword">);
<br />                </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />                </span><span class="default">$a </span><span class="keyword">= </span><span class="default">127</span><span class="keyword">-</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br />
<br />                </span><span class="default">$myColor </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$top</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">);
<br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,(</span><span class="default">$theX</span><span class="keyword">+</span><span class="default">$offsetX</span><span class="keyword">),(</span><span class="default">$theY</span><span class="keyword">+</span><span class="default">$offsetY</span><span class="keyword">),</span><span class="default">$myColor</span><span class="keyword">);    
<br />            }
<br />        }
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96333">  <div class="votes">
    <div id="Vu96333">
    <a href="/manual/vote-note.php?id=96333&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96333">
    <a href="/manual/vote-note.php?id=96333&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96333" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#96333" class="name">
  <strong class="user"><em>c kelley at ca - cycleworks dot com</em></strong></a><a class="genanchor" href="#96333"> &para;</a><div class="date" title="2010-02-20 02:59"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96333">
<div class="phpcode"><code><span class="html">Note, of the rotate functions below, only beau's worked for me. Not sure if it is because of my source image, but upon rotating, the background became blue. <br /><br />The code snippet below is what I used to prepare UPS shipping labels. The UPS xml api will return a base64 encoded gif, but it is sideways, so as to print on the top half of a 8.5x11 "letter" page. We are saving it in a database and sending it to a label printer, so needed it rotated...<br /><br />The other code further down didn't make the background blue, however it did make the image leave the canvas by about 50%. Additionally, the imagecolorallocate() function has an example describing how to set the background color. That didn't work for me. Even though the blue BG is #0000ff, using that code didn't work, I had to use the transparent trick below. <br /><br />The GD image functions may be in their infancy, however are a great reminder to me how powerful php is! Also, ubuntu apache users will need to apt-get install php5-gd to get the gd functions.<br /><br /><span class="default">&lt;?php<br />        $image</span><span class="keyword">=</span><span class="default">imagecreatefromgif</span><span class="keyword">( </span><span class="string">'data://text/plain;base64,'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shipmentLabelGraphicImage </span><span class="keyword">);<br />        </span><span class="default">$image</span><span class="keyword">=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">); </span><span class="comment">// Note: rotateImage turns our background to blue!<br />        </span><span class="default">$blue </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br />        </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$blue</span><span class="keyword">);    </span><span class="comment">// make blue transparent, so image isn't goofy<br />        </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shipmentTrackingNumber</span><span class="keyword">.</span><span class="string">".png"</span><span class="keyword">);<br />        echo </span><span class="string">'&lt;P&gt;&lt;img src="'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shipmentTrackingNumber</span><span class="keyword">.</span><span class="string">'.png"&gt;&lt;/P&gt;'</span><span class="keyword">;<br />        </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93153">  <div class="votes">
    <div id="Vu93153">
    <a href="/manual/vote-note.php?id=93153&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93153">
    <a href="/manual/vote-note.php?id=93153&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93153" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#93153" class="name">
  <strong class="user"><em>dev at imglib dot endofinternet dot net</em></strong></a><a class="genanchor" href="#93153"> &para;</a><div class="date" title="2009-08-25 03:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93153">
<div class="phpcode"><code><span class="html">And you can add a transparent background to you png image by change the <br /><span class="default">&lt;?php<br />    </span><span class="keyword">if (</span><span class="default">$ignore_transparent </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">));<br />        </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;<br /></span>to<br /><span class="default">&lt;?php<br />    </span><span class="keyword">if (</span><span class="default">$ignore_transparent </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />        </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$temp</span><span class="keyword">);<br />        </span><span class="comment">//if set the default color or white or magic pink then use transparent color<br />        </span><span class="keyword">if ( (</span><span class="default">$bgcolor </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) || (</span><span class="default">$bgcolor </span><span class="keyword">== </span><span class="default">16777215</span><span class="keyword">) || (</span><span class="default">$bgcolor </span><span class="keyword">== </span><span class="default">16711935</span><span class="keyword">) )  {<br />            </span><span class="default">$bgcolor </span><span class="keyword">= </span><span class="default">$temp</span><span class="keyword">;<br />        }<br />        </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$destimg</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92430">  <div class="votes">
    <div id="Vu92430">
    <a href="/manual/vote-note.php?id=92430&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92430">
    <a href="/manual/vote-note.php?id=92430&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92430" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#92430" class="name">
  <strong class="user"><em>gglockner AT NOSPAMdwaffler DOT com</em></strong></a><a class="genanchor" href="#92430"> &para;</a><div class="date" title="2009-07-23 12:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92430">
<div class="phpcode"><code><span class="html">If you're going to do a rotation by hand instead of using the imagerotate function, you can use the imagecopy function to copy a single pixel instead of determining the pixel color and setting the pixel.  Not only is this shorter and cleaner, but it also works with images that are not truecolor (on my system, imagecolorat fails with an image that is not truecolor).</span></code></div>
  </div>
 </div>
  <div class="note" id="69668">  <div class="votes">
    <div id="Vu69668">
    <a href="/manual/vote-note.php?id=69668&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69668">
    <a href="/manual/vote-note.php?id=69668&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69668" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#69668" class="name">
  <strong class="user"><em>m dot quinton at gmail dot com</em></strong></a><a class="genanchor" href="#69668"> &para;</a><div class="date" title="2006-09-14 09:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69668">
<div class="phpcode"><code><span class="html">with large file, where imagerotate is missing, you can use, when possible "convert" command from ImageMagick. Here is a sample script.<br /><br /><span class="default">&lt;?php<br /><br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="string">'images/test/imgp2498.jpg'</span><span class="keyword">;<br /><br /></span><span class="default">image_rotate_with_convert</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">);<br /><br />function </span><span class="default">image_rotate_with_convert</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">){<br />    </span><span class="default">passthru</span><span class="keyword">(</span><span class="string">"convert -rotate </span><span class="default">$angle</span><span class="string"> </span><span class="default">$file</span><span class="string"> -"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57226">  <div class="votes">
    <div id="Vu57226">
    <a href="/manual/vote-note.php?id=57226&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57226">
    <a href="/manual/vote-note.php?id=57226&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57226" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#57226" class="name">
  <strong class="user"><em>simon_nuttall at hotmail dot com</em></strong></a><a class="genanchor" href="#57226"> &para;</a><div class="date" title="2005-09-27 10:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57226">
<div class="phpcode"><code><span class="html">The following is potentially useful. It extracts the central largest circle of an image into a square of specified size, and optionally rotates it. The rest of the square is made transparent, so useful for drawing over other images. I've named it after binocular effect because on some old TV shows whenever they show someone looking through binoculars the screen shows a big circular image with black edges.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">image_binocular_effect</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$bearing</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">) {<br /> </span><span class="comment">// the source image is resampled to fit within the specified square, and rotated clockwise by bearing.<br /> // the largest circle within the image is retained, the rest made transparent.<br /> </span><span class="default">$out </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">);<br /> </span><span class="default">$width</span><span class="keyword">=</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br /> </span><span class="default">$height</span><span class="keyword">=</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br /> </span><span class="default">$square</span><span class="keyword">=</span><span class="default">min</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /> </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, (</span><span class="default">$width </span><span class="keyword">- </span><span class="default">$square</span><span class="keyword">)/</span><span class="default">2 </span><span class="keyword">, (</span><span class="default">$height </span><span class="keyword">- </span><span class="default">$square</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$square</span><span class="keyword">, </span><span class="default">$square</span><span class="keyword">);<br /><br /> </span><span class="default">$mask </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">);<br /> </span><span class="default">$black </span><span class="keyword">= </span><span class="default">ImageColorAllocate </span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /> </span><span class="default">$white </span><span class="keyword">= </span><span class="default">ImageColorAllocate </span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /> </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$mask </span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br /> </span><span class="default">$centrexy</span><span class="keyword">=</span><span class="default">$out_square </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br /> </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">, </span><span class="default">$centrexy</span><span class="keyword">, </span><span class="default">$centrexy</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br /> </span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br /> </span><span class="default">imagecopymerge</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">$mask</span><span class="keyword">,  </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /> if (</span><span class="default">$bearing </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">) {<br />  </span><span class="default">$rotated_img</span><span class="keyword">=</span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$out </span><span class="keyword">, </span><span class="default">360</span><span class="keyword">-</span><span class="default">$bearing</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br />  </span><span class="comment">// take off only the rotated width<br />  </span><span class="default">$rotated_map_width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$rotated_img</span><span class="keyword">);<br />  </span><span class="default">$rotated_map_height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$rotated_img</span><span class="keyword">);<br />  </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">$rotated_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, (</span><span class="default">$rotated_map_width </span><span class="keyword">- </span><span class="default">$out_square</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">, (</span><span class="default">$rotated_map_height </span><span class="keyword">- </span><span class="default">$out_square</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">, </span><span class="default">$out_square</span><span class="keyword">);<br />  }<br /> </span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br /> return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Create a sample image to demonstrate the effect, but looks much better on real photos.<br /><br /></span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));<br /></span><span class="default">ImageString</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="string">"This is a sample image to illustrate the binocular effect"</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">192</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /></span><span class="default">$img</span><span class="keyword">=</span><span class="default">image_binocular_effect</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">72</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">ImagePNG</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="string">"test.png"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="47985">  <div class="votes">
    <div id="Vu47985">
    <a href="/manual/vote-note.php?id=47985&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47985">
    <a href="/manual/vote-note.php?id=47985&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47985" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#47985" class="name">
  <strong class="user"><em>darren at lucidtone dot com</em></strong></a><a class="genanchor" href="#47985"> &para;</a><div class="date" title="2004-12-07 08:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47985">
<div class="phpcode"><code><span class="html">Here's a neat function for those of us who don't have imagerotate() on our servers.  It's based on a comment from ron at korving dot demon dot nl on the manual page for imagecopyresampled.
<br />
<br />I'm still not 100% on coping with transparency, but this function seems to cope okay.  It doesn't resize to fit within bounds, it just rotates and you lose anything outside the image box.  
<br />
<br />The bicubic mode is slooow.
<br />
<br />If you want to be able to change the background colour, pass in a colour and use it where indicated.  The line I used just sets it transparent.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// $src_img - a GD image resource
<br />// $angle - degrees to rotate clockwise, in degrees
<br />// returns a GD image resource
<br />// USAGE:
<br />// $im = imagecreatefrompng('test.png');
<br />// $im = imagerotate($im, 15);
<br />// header('Content-type: image/png');
<br />// imagepng($im);
<br /></span><span class="keyword">function </span><span class="default">imageRotateBicubic</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, </span><span class="default">$bicubic</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {
<br />    
<br />    </span><span class="comment">// convert degrees to radians
<br />    </span><span class="default">$angle </span><span class="keyword">= </span><span class="default">$angle </span><span class="keyword">+ </span><span class="default">180</span><span class="keyword">;
<br />    </span><span class="default">$angle </span><span class="keyword">= </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);
<br />    
<br />    </span><span class="default">$src_x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);
<br />    </span><span class="default">$src_y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);
<br />    
<br />    </span><span class="default">$center_x </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$src_x</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br />    </span><span class="default">$center_y </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$src_y</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br />    
<br />    </span><span class="default">$rotate </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">);
<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />
<br />    </span><span class="default">$cosangle </span><span class="keyword">= </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);
<br />    </span><span class="default">$sinangle </span><span class="keyword">= </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);
<br />    
<br />    for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$src_y</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {
<br />      for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$src_x</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {
<br />    </span><span class="comment">// rotate...
<br />    </span><span class="default">$old_x </span><span class="keyword">= ((</span><span class="default">$center_x</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">) * </span><span class="default">$cosangle </span><span class="keyword">+ (</span><span class="default">$center_y</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">) * </span><span class="default">$sinangle</span><span class="keyword">)
<br />      + </span><span class="default">$center_x</span><span class="keyword">;
<br />    </span><span class="default">$old_y </span><span class="keyword">= ((</span><span class="default">$center_y</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">) * </span><span class="default">$cosangle </span><span class="keyword">- (</span><span class="default">$center_x</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">) * </span><span class="default">$sinangle</span><span class="keyword">)
<br />      + </span><span class="default">$center_y</span><span class="keyword">;
<br />    
<br />    if ( </span><span class="default">$old_x </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$old_x </span><span class="keyword">&lt; </span><span class="default">$src_x
<br />         </span><span class="keyword">&amp;&amp; </span><span class="default">$old_y </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$old_y </span><span class="keyword">&lt; </span><span class="default">$src_y </span><span class="keyword">) {
<br />      if (</span><span class="default">$bicubic </span><span class="keyword">== </span><span class="default">true</span><span class="keyword">) {
<br />        </span><span class="default">$sY  </span><span class="keyword">= </span><span class="default">$old_y </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />        </span><span class="default">$siY  </span><span class="keyword">= </span><span class="default">$old_y</span><span class="keyword">;
<br />        </span><span class="default">$siY2 </span><span class="keyword">= </span><span class="default">$old_y </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;
<br />        </span><span class="default">$sX  </span><span class="keyword">= </span><span class="default">$old_x </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />        </span><span class="default">$siX  </span><span class="keyword">= </span><span class="default">$old_x</span><span class="keyword">;
<br />        </span><span class="default">$siX2 </span><span class="keyword">= </span><span class="default">$old_x </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;
<br />        
<br />        </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$siX</span><span class="keyword">, </span><span class="default">$siY2</span><span class="keyword">));
<br />        </span><span class="default">$c2 </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$siX</span><span class="keyword">, </span><span class="default">$siY</span><span class="keyword">));
<br />        </span><span class="default">$c3 </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$siX2</span><span class="keyword">, </span><span class="default">$siY2</span><span class="keyword">));
<br />        </span><span class="default">$c4 </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$siX2</span><span class="keyword">, </span><span class="default">$siY</span><span class="keyword">));
<br />        
<br />        </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$c1</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]  + </span><span class="default">$c2</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]  + </span><span class="default">$c3</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]  + </span><span class="default">$c4</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]  ) &lt;&lt; </span><span class="default">14</span><span class="keyword">;
<br />        </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$c1</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">$c2</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">$c3</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">$c4</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">]) &lt;&lt; </span><span class="default">6</span><span class="keyword">;
<br />        </span><span class="default">$b </span><span class="keyword">= (</span><span class="default">$c1</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]  + </span><span class="default">$c2</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]  + </span><span class="default">$c3</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]  + </span><span class="default">$c4</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] ) &gt;&gt; </span><span class="default">2</span><span class="keyword">;
<br />        </span><span class="default">$a </span><span class="keyword">= (</span><span class="default">$c1</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]  + </span><span class="default">$c2</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]  + </span><span class="default">$c3</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]  + </span><span class="default">$c4</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] ) &gt;&gt; </span><span class="default">2</span><span class="keyword">;
<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">);
<br />      } else {
<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$old_x</span><span class="keyword">, </span><span class="default">$old_y</span><span class="keyword">);
<br />      }
<br />    } else {
<br />          </span><span class="comment">// this line sets the background colour
<br />      </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$rotate</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />      }
<br />    }
<br />    return </span><span class="default">$rotate</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103029">  <div class="votes">
    <div id="Vu103029">
    <a href="/manual/vote-note.php?id=103029&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103029">
    <a href="/manual/vote-note.php?id=103029&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103029" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#103029" class="name">
  <strong class="user"><em>kraeh at gmx dot net</em></strong></a><a class="genanchor" href="#103029"> &para;</a><div class="date" title="2011-03-21 09:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103029">
<div class="phpcode"><code><span class="html">I had a problem with a png image containing transparent colors, but found a solution that works for me.
<br />So i thought i might share it:
<br />
<br /><span class="default">&lt;?php
<br />$angle</span><span class="keyword">=</span><span class="default">45</span><span class="keyword">;
<br /></span><span class="default">$im</span><span class="keyword">=</span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105957">  <div class="votes">
    <div id="Vu105957">
    <a href="/manual/vote-note.php?id=105957&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105957">
    <a href="/manual/vote-note.php?id=105957&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105957" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#105957" class="name">
  <strong class="user"><em>Sam Yong - hellclanner at live dot com</em></strong></a><a class="genanchor" href="#105957"> &para;</a><div class="date" title="2011-09-27 06:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105957">
<div class="phpcode"><code><span class="html">Note that the image resource returned from the imagerotate() function is an entirely different image resource from your original one.<br /><br /><span class="default">&lt;?php<br /><br />$res </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">);<br /></span><span class="default">$res2 </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$res2</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This will output:<br /><br />resource(2, gd)<br />resource(3, gd)</span></code></div>
  </div>
 </div>
  <div class="note" id="99631">  <div class="votes">
    <div id="Vu99631">
    <a href="/manual/vote-note.php?id=99631&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99631">
    <a href="/manual/vote-note.php?id=99631&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99631" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#99631" class="name">
  <strong class="user"><em>Leo</em></strong></a><a class="genanchor" href="#99631"> &para;</a><div class="date" title="2010-08-27 06:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99631">
<div class="phpcode"><code><span class="html">// angle in degrees, clockwise, allowed values from 0 to 360 degrees<br />    function rotateImage ($image, $angle)<br />    {<br />        if ( ($angle &lt; 0) || ($angle &gt; 360) )<br />        {<br />            exit ("Error, angle passed out of range: [0,360]");<br />        }<br />        <br />        $width    = imagesx ($image);<br />        $height    = imagesy ($image);<br />        <br />        $dstImage = imagecreatetruecolor ($width, $height);<br />        <br />        if ( ($angle == 0) || ($angle == 360) )<br />        {<br />            // Just copy image to output:<br />            imagecopy ($dstImage, $image, 0, 0, 0, 0, $width, $height);<br />        }<br />        else<br />        {<br />            $centerX = floor ($width / 2);<br />            $centerY = floor ($height / 2);<br />            <br />            // Run on all pixels of the destination image and fill them:<br />            for ($dstImageX = 0; $dstImageX &lt; $width; $dstImageX++)<br />            {<br />                for ($dstImageY = 0; $dstImageY &lt; $height; $dstImageY++)<br />                {<br />                    // Calculate pixel coordinate in coordinate system centered at the image center:<br />                    $x = $dstImageX - $centerX;<br />                    $y = $centerY - $dstImageY;<br />                    <br />                    if ( ($x == 0) &amp;&amp; ($y == 0) )<br />                    {<br />                        // We are in the image center, this pixel should be copied as is:<br />                        $srcImageX = $x;<br />                        $srcImageY = $y;<br />                    }<br />                    else<br />                    {<br />                        $r = sqrt ($x * $x + $y * $y); // radius - absolute distance of the current point from image center<br /><br />                        $curAngle = asin ($y / $r); // angle of the current point [rad]<br />                        <br />                        if ($x &lt; 0)<br />                        {<br />                            $curAngle = pi () - $curAngle;<br />                        }<br />                        <br />                        $newAngle = $curAngle + $angle * pi () / 180; // new angle [rad]<br /><br />                        // Calculate new point coordinates (after rotation) in coordinate system at image center<br />                        $newXRel = floor ($r * cos ($newAngle));<br />                        $newYRel = floor ($r * sin ($newAngle));<br />                        <br />                        // Convert to image absolute coordinates<br />                        $srcImageX = $newXRel + $centerX;<br />                        $srcImageY = $centerY - $newYRel;<br />                    }<br />                    <br />                    $pixelColor = imagecolorat  ($image, $srcImageX, $srcImageY); // get source pixel color<br />                    <br />                    imagesetpixel ($dstImage, $dstImageX, $dstImageY, $pixelColor); // write destination pixel<br />                }<br />            }<br />        }<br />        <br />        return $dstImage;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="121741">  <div class="votes">
    <div id="Vu121741">
    <a href="/manual/vote-note.php?id=121741&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121741">
    <a href="/manual/vote-note.php?id=121741&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121741" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#121741" class="name">
  <strong class="user"><em>TNTcode</em></strong></a><a class="genanchor" href="#121741"> &para;</a><div class="date" title="2017-10-09 12:33"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121741">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// auto rotates an image file based on exif data from camera<br />// if destination file is specified then it saves file there, otherwise it will display it to user<br />// note that images already at normal orientation are skipped (when exif data Orientation = 1)<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"gd_auto_rotate"</span><span class="keyword">)){<br />    function </span><span class="default">gd_auto_rotate</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">){<br />        <br />        </span><span class="default">$original_extension </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">));<br />        if(isset(</span><span class="default">$destination_file</span><span class="keyword">) and </span><span class="default">$destination_file</span><span class="keyword">!=</span><span class="string">''</span><span class="keyword">){<br />            </span><span class="default">$destination_extension </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$destination_file</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">));<br />        }<br />        <br />        </span><span class="comment">// try to auto-rotate image by gd if needed (before editing it)<br />        // by imagemagik it has an easy option<br />        </span><span class="keyword">if(</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"exif_read_data"</span><span class="keyword">)){<br />            <br />            </span><span class="default">$exif_data </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />            </span><span class="default">$exif_orientation </span><span class="keyword">= </span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">];<br />            <br />            </span><span class="comment">// value 1 = normal ?! skip it ?!<br />            <br />            </span><span class="keyword">if(</span><span class="default">$exif_orientation</span><span class="keyword">==</span><span class="string">'3'  </span><span class="keyword">or </span><span class="default">$exif_orientation</span><span class="keyword">==</span><span class="string">'6' </span><span class="keyword">or </span><span class="default">$exif_orientation</span><span class="keyword">==</span><span class="string">'8'</span><span class="keyword">){<br />                <br />                </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">180</span><span class="keyword">;<br />                </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = -</span><span class="default">90</span><span class="keyword">;<br />                </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] = </span><span class="default">90</span><span class="keyword">;<br />                <br />                </span><span class="comment">// load the image<br />                </span><span class="keyword">if(</span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"jpg" </span><span class="keyword">or </span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"jpeg"</span><span class="keyword">){<br />                    </span><span class="default">$original_image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">){<br />                    </span><span class="default">$original_image </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"png"</span><span class="keyword">){<br />                    </span><span class="default">$original_image </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />                }<br />                <br />                </span><span class="default">$rotated_image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$original_image</span><span class="keyword">, </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">$exif_orientation</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />                <br />                </span><span class="comment">// if no destination file is set, then show the image<br />                </span><span class="keyword">if(!</span><span class="default">$destination_file</span><span class="keyword">){<br />                    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />                    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />                }<br />                        <br />                </span><span class="comment">// save the smaller image FILE if destination file given<br />                </span><span class="keyword">if(</span><span class="default">$destination_extension </span><span class="keyword">== </span><span class="string">"jpg" </span><span class="keyword">or </span><span class="default">$destination_extension</span><span class="keyword">==</span><span class="string">"jpeg"</span><span class="keyword">){<br />                    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$destination_extension </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">){<br />                    </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$destination_extension </span><span class="keyword">== </span><span class="string">"png"</span><span class="keyword">){<br />                    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">);<br />                }<br />                <br />                </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$original_image</span><span class="keyword">);<br />                </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">);<br />            <br />            }<br />        }<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86986">  <div class="votes">
    <div id="Vu86986">
    <a href="/manual/vote-note.php?id=86986&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86986">
    <a href="/manual/vote-note.php?id=86986&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86986" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#86986" class="name">
  <strong class="user"><em>fernando_empresarial at ig dot com dot br</em></strong></a><a class="genanchor" href="#86986"> &para;</a><div class="date" title="2008-11-13 04:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86986">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />$urlImage </span><span class="keyword">= </span><span class="string">"images/image.png"</span><span class="keyword">;
<br /></span><span class="default">$urlNewImage </span><span class="keyword">= </span><span class="string">"images/imageNew.png"</span><span class="keyword">;
<br />    
<br /></span><span class="default">$src_img </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$urlImage</span><span class="keyword">);
<br /></span><span class="default">$originalX </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);
<br /></span><span class="default">$originalY </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);
<br /></span><span class="default">$dst_img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">640</span><span class="keyword">,</span><span class="default">480</span><span class="keyword">);
<br />
<br />    
<br /></span><span class="default">$imageRotate </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);
<br />        
<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$imageRotate</span><span class="keyword">,</span><span class="default">$urlNewImage</span><span class="keyword">);
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">); 
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90350">  <div class="votes">
    <div id="Vu90350">
    <a href="/manual/vote-note.php?id=90350&amp;page=function.imagerotate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90350">
    <a href="/manual/vote-note.php?id=90350&amp;page=function.imagerotate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90350" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#90350" class="name">
  <strong class="user"><em>dave dot richards at gmail dot com</em></strong></a><a class="genanchor" href="#90350"> &para;</a><div class="date" title="2009-04-17 04:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90350">
<div class="phpcode"><code><span class="html">There is a slight mistake in the previous post by Kae Cyphet.<br /><br />When setting the pixels of the new image the co-ordinates have to occasionally use the width ($wid) and height ($hei). These values must be reduced by 1 as the co-ordinates start at 0 (Not 1) so they only go up to $wid - 1 and $hei - 1 (Not $wid and $hei).<br /><br />Here's an example of the first function to show this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rotate_right90</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">)<br />{<br /> </span><span class="default">$wid </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /> </span><span class="default">$hei </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /> </span><span class="default">$im2 </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$hei</span><span class="keyword">,</span><span class="default">$wid</span><span class="keyword">);<br /><br /> for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$wid</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br /> {<br />  for(</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$hei</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />  {<br />   </span><span class="default">$ref </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$j</span><span class="keyword">);<br />   </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">,(</span><span class="default">$hei </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) - </span><span class="default">$j</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$ref</span><span class="keyword">);<br />  }<br /> }<br /> return </span><span class="default">$im2</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Other than that very useful functions!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagerotate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagerotate.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
