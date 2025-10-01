<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Imagick::resizeImage - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/imagick.resizeimage.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imagick.resizeimage.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imagick.resizeimage.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.imagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/imagick.resetimagepage.php">
 <link rel="next" href="https://www.php.net/manual/en/imagick.rollimage.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imagick.resizeimage.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imagick.resizeimage.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imagick.resizeimage.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imagick.resizeimage.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imagick.resizeimage.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imagick.resizeimage.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imagick.resizeimage.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imagick.resizeimage.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imagick.resizeimage.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imagick.resizeimage.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imagick.resizeimage.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Scales an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Imagick::resizeImage - Manual" />
<meta name="twitter:description" content="Scales an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Imagick::resizeImage - Manual" />
<meta itemprop="description" content="Scales an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Scales an image" />

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
        <a href="imagick.rollimage.php">
          Imagick::rollImage &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imagick.resetimagepage.php">
          &laquo; Imagick::resetImagePage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      <li><a href='class.imagick.php'>Imagick</a></li>      </ul>
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
            <option value='en/imagick.resizeimage.php' selected="selected">English</option>
            <option value='de/imagick.resizeimage.php'>German</option>
            <option value='es/imagick.resizeimage.php'>Spanish</option>
            <option value='fr/imagick.resizeimage.php'>French</option>
            <option value='it/imagick.resizeimage.php'>Italian</option>
            <option value='ja/imagick.resizeimage.php'>Japanese</option>
            <option value='pt_BR/imagick.resizeimage.php'>Brazilian Portuguese</option>
            <option value='ru/imagick.resizeimage.php'>Russian</option>
            <option value='tr/imagick.resizeimage.php'>Turkish</option>
            <option value='uk/imagick.resizeimage.php'>Ukrainian</option>
            <option value='zh/imagick.resizeimage.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imagick.resizeimage" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Imagick::resizeImage</h1>
  <p class="verinfo">(PECL imagick 2, PECL imagick 3)</p><p class="refpurpose"><span class="refname">Imagick::resizeImage</span> &mdash; <span class="dc-title">Scales an image</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-imagick.resizeimage-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Imagick::resizeImage</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$columns</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$filter</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$blur</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$bestfit</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$legacy</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Scales an image to the desired dimensions with a
   <a href="imagick.constants.php#imagick.constants.filters" class="link">filter</a>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <span class="simpara">
  The behavior of the parameter <code class="parameter">bestfit</code> changed in Imagick 3.0.0.
  Before this version given dimensions 400x400 an image of dimensions 200x150 would be
  left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as
  this is the &quot;best fit&quot; for the given dimensions. If <code class="parameter">bestfit</code>
  parameter is used both width and height must be given.
 </span>
</p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-imagick.resizeimage-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">columns</code></dt>
     <dd>
      <p class="para">
       Width of the image
      </p>
     </dd>
    
    
     <dt><code class="parameter">rows</code></dt>
     <dd>
      <p class="para">
       Height of the image
      </p>
     </dd>
    
    
     <dt><code class="parameter">filter</code></dt>
     <dd>
      <p class="para">
       Refer to the list of <a href="imagick.constants.php#imagick.constants.filters" class="link">filter constants</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">blur</code></dt>
     <dd>
      <p class="para">
       The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.
      </p>
     </dd>
    
    
     <dt><code class="parameter">bestfit</code></dt>
     <dd>
      <p class="para">
       Optional fit parameter.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-imagick.resizeimage-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-imagick.resizeimage-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>PECL imagick 2.1.0</td>
       <td>
       Added optional fit parameter. This method now supports proportional scaling.
       Pass zero as either parameter for proportional scaling.  
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>




 <div class="refsect1 examples" id="refsect1-imagick.resizeimage-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
    <div class="example" id="example-3079">
      <p><strong>Example #1  <span class="function"><strong>Imagick::resizeImage()</strong></span></strong></p>
      <div class="example-contents">
      <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">resizeImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$imagePath</span><span style="color: #007700">, </span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">, </span><span style="color: #0000BB">$filterType</span><span style="color: #007700">, </span><span style="color: #0000BB">$blur</span><span style="color: #007700">, </span><span style="color: #0000BB">$bestFit</span><span style="color: #007700">, </span><span style="color: #0000BB">$cropZoom</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">//The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.<br />    </span><span style="color: #0000BB">$imagick </span><span style="color: #007700">= new </span><span style="color: #0000BB">\Imagick</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$imagePath</span><span style="color: #007700">));<br /><br />    </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resizeImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">, </span><span style="color: #0000BB">$filterType</span><span style="color: #007700">, </span><span style="color: #0000BB">$blur</span><span style="color: #007700">, </span><span style="color: #0000BB">$bestFit</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$cropWidth </span><span style="color: #007700">= </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageWidth</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">$cropHeight </span><span style="color: #007700">= </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageHeight</span><span style="color: #007700">();<br /><br />    if (</span><span style="color: #0000BB">$cropZoom</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$newWidth </span><span style="color: #007700">= </span><span style="color: #0000BB">$cropWidth </span><span style="color: #007700">/ </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$newHeight </span><span style="color: #007700">= </span><span style="color: #0000BB">$cropHeight </span><span style="color: #007700">/ </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />        </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cropimage</span><span style="color: #007700">(<br />            </span><span style="color: #0000BB">$newWidth</span><span style="color: #007700">,<br />            </span><span style="color: #0000BB">$newHeight</span><span style="color: #007700">,<br />            (</span><span style="color: #0000BB">$cropWidth </span><span style="color: #007700">- </span><span style="color: #0000BB">$newWidth</span><span style="color: #007700">) / </span><span style="color: #0000BB">2</span><span style="color: #007700">,<br />            (</span><span style="color: #0000BB">$cropHeight </span><span style="color: #007700">- </span><span style="color: #0000BB">$newHeight</span><span style="color: #007700">) / </span><span style="color: #0000BB">2<br />        </span><span style="color: #007700">);<br /><br />        </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scaleimage</span><span style="color: #007700">(<br />            </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageWidth</span><span style="color: #007700">() * </span><span style="color: #0000BB">4</span><span style="color: #007700">,<br />            </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageHeight</span><span style="color: #007700">() * </span><span style="color: #0000BB">4<br />        </span><span style="color: #007700">);<br />    }<br /><br /><br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: image/jpg"</span><span style="color: #007700">);<br />    echo </span><span style="color: #0000BB">$imagick</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageBlob</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

    </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/imagick/resizeimage.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimagick.resizeimage%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imagick.resizeimage&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.resizeimage.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94493">  <div class="votes">
    <div id="Vu94493">
    <a href="/manual/vote-note.php?id=94493&amp;page=imagick.resizeimage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94493">
    <a href="/manual/vote-note.php?id=94493&amp;page=imagick.resizeimage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94493" title="85% like this...">
    102
    </div>
  </div>
  <a href="#94493" class="name">
  <strong class="user"><em>dennis at gofolo dot com</em></strong></a><a class="genanchor" href="#94493"> &para;</a><div class="date" title="2009-11-08 06:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94493">
<div class="phpcode"><code><span class="html">Having to do alot of resizing, i needed to know the speeds of the different resize filters.<br />This was how long it took to resize a 5906x5906 JPEG image to 1181x1181.<br /><br />FILTER_POINT took: 0.334532976151 seconds<br />FILTER_BOX took: 0.777871131897 seconds<br />FILTER_TRIANGLE took: 1.3695909977 seconds<br />FILTER_HERMITE took: 1.35866093636 seconds<br />FILTER_HANNING took: 4.88722896576 seconds<br />FILTER_HAMMING took: 4.88665103912 seconds<br />FILTER_BLACKMAN took: 4.89026689529 seconds<br />FILTER_GAUSSIAN took: 1.93553304672 seconds<br />FILTER_QUADRATIC took: 1.93322920799 seconds<br />FILTER_CUBIC took: 2.58396601677 seconds<br />FILTER_CATROM took: 2.58508896828 seconds<br />FILTER_MITCHELL took: 2.58368492126 seconds<br />FILTER_LANCZOS took: 3.74232912064 seconds<br />FILTER_BESSEL took: 4.03305602074 seconds<br />FILTER_SINC took: 4.90098690987 seconds <br /><br />I ended up choosing CATROM as it has a very similar result to LANCZOS, but is significantly faster.</span></code></div>
  </div>
 </div>
  <div class="note" id="77339">  <div class="votes">
    <div id="Vu77339">
    <a href="/manual/vote-note.php?id=77339&amp;page=imagick.resizeimage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77339">
    <a href="/manual/vote-note.php?id=77339&amp;page=imagick.resizeimage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77339" title="76% like this...">
    37
    </div>
  </div>
  <a href="#77339" class="name">
  <strong class="user"><em>andrabr at gmail dot com</em></strong></a><a class="genanchor" href="#77339"> &para;</a><div class="date" title="2007-08-24 04:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77339">
<div class="phpcode"><code><span class="html">blur:  &gt; 1 is blurry, &lt; 1 is sharp<br /><br />To create a nice thumbnail (LANCZOS is the slowest filter):<br /><br /><span class="default">&lt;?php<br /><br />$thumb </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">();<br /></span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">readImage</span><span class="keyword">(</span><span class="string">'myimage.gif'</span><span class="keyword">);    </span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">resizeImage</span><span class="keyword">(</span><span class="default">320</span><span class="keyword">,</span><span class="default">240</span><span class="keyword">,</span><span class="default">Imagick</span><span class="keyword">::</span><span class="default">FILTER_LANCZOS</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">writeImage</span><span class="keyword">(</span><span class="string">'mythumb.gif'</span><span class="keyword">);<br /></span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">clear</span><span class="keyword">();<br /></span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">destroy</span><span class="keyword">(); <br /><br /></span><span class="default">?&gt;<br /></span><br />Or, a shorter version of the same:<br /><br /><span class="default">&lt;?php<br /><br />$thumb </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">(</span><span class="string">'myimage.gif'</span><span class="keyword">);<br /><br /></span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">resizeImage</span><span class="keyword">(</span><span class="default">320</span><span class="keyword">,</span><span class="default">240</span><span class="keyword">,</span><span class="default">Imagick</span><span class="keyword">::</span><span class="default">FILTER_LANCZOS</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">writeImage</span><span class="keyword">(</span><span class="string">'mythumb.gif'</span><span class="keyword">);<br /><br /></span><span class="default">$thumb</span><span class="keyword">-&gt;</span><span class="default">destroy</span><span class="keyword">(); <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119416">  <div class="votes">
    <div id="Vu119416">
    <a href="/manual/vote-note.php?id=119416&amp;page=imagick.resizeimage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119416">
    <a href="/manual/vote-note.php?id=119416&amp;page=imagick.resizeimage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119416" title="83% like this...">
    8
    </div>
  </div>
  <a href="#119416" class="name">
  <strong class="user"><em>phper at krzysiu dot net</em></strong></a><a class="genanchor" href="#119416"> &para;</a><div class="date" title="2016-06-02 12:41"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119416">
<div class="phpcode"><code><span class="html">Some size, image and filter and blur combinations causes artifacts or even make image completely scrambled. As far, as I see, it happens with blur values smaller than 0.25 (sometimes less) and goes worse to the point of 0 - black image. Sometimes only some values gives artifacts, like Hanning with my test image: 0.0 blur is fine, 0.1 produces artefacts.<br /><br />Affected filters are e.g. Catrom, sinc, cubic, quadratic, while unaffected are e.g. Lanczos and Hanning. The problem seems to be the domain of the filter algorithms, not IMagick implementation. This image shows three filters: <a href="http://i.imgur.com/HcdwoUS.jpg" rel="nofollow" target="_blank">http://i.imgur.com/HcdwoUS.jpg</a><br /><br />Sometimes test image could look fine, but other not, so if you are using affected filters, the 0.5 value should be safe.<br /><br />This test script takes example image (you can download and use <a href="http://i.imgur.com/KsTJpFr.jpg" rel="nofollow" target="_blank">http://i.imgur.com/KsTJpFr.jpg</a> which is affected) and creates resized images in the same directory for every filter and one of four blur values, with naming like "test.jpg.sinc.0.1.jpg" for "test.jpg" input.<br /><br /><span class="default">&lt;?php<br />    $imgPath </span><span class="keyword">= </span><span class="string">'imgtest/test.jpg'</span><span class="keyword">; </span><span class="comment">// set your image file<br />    </span><span class="default">$testBlurs </span><span class="keyword">= [</span><span class="default">0</span><span class="keyword">, </span><span class="default">0.1</span><span class="keyword">, </span><span class="default">0.2</span><span class="keyword">, </span><span class="default">0.5</span><span class="keyword">]; </span><span class="comment">// test these blur values<br />    </span><span class="default">$im </span><span class="keyword">= new </span><span class="default">IMagick</span><span class="keyword">();<br />    </span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">readImage</span><span class="keyword">(</span><span class="default">$imgPath</span><span class="keyword">);<br />    <br />    foreach ((new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'IMagick'</span><span class="keyword">))-&gt;</span><span class="default">getConstants</span><span class="keyword">() as </span><span class="default">$n </span><span class="keyword">=&gt; </span><span class="default">$f</span><span class="keyword">) {<br />        if (</span><span class="default">strncmp</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="string">'FILTER_'</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) { </span><span class="comment">// get available IMagick filters<br />            </span><span class="default">$filterName </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">)); </span><span class="comment">// extract filter name from constant<br />            </span><span class="keyword">foreach (</span><span class="default">$testBlurs </span><span class="keyword">as </span><span class="default">$blur</span><span class="keyword">) {<br />                </span><span class="default">$imSize </span><span class="keyword">= clone </span><span class="default">$im</span><span class="keyword">;<br />                </span><span class="default">$imSize</span><span class="keyword">-&gt;</span><span class="default">resizeImage</span><span class="keyword">(</span><span class="default">500</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">, </span><span class="default">$f</span><span class="keyword">, </span><span class="default">$blur</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />                </span><span class="default">$imSize</span><span class="keyword">-&gt;</span><span class="default">writeImage</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%s-%s-%.1f.jpg"</span><span class="keyword">, </span><span class="default">$imgPath</span><span class="keyword">, </span><span class="default">$filterName</span><span class="keyword">, </span><span class="default">$blur</span><span class="keyword">));<br />                </span><span class="default">$imSize</span><span class="keyword">-&gt;</span><span class="default">destroy</span><span class="keyword">();<br />            }<br />        }<br />    }<br />    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107778">  <div class="votes">
    <div id="Vu107778">
    <a href="/manual/vote-note.php?id=107778&amp;page=imagick.resizeimage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107778">
    <a href="/manual/vote-note.php?id=107778&amp;page=imagick.resizeimage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107778" title="71% like this...">
    23
    </div>
  </div>
  <a href="#107778" class="name">
  <strong class="user"><em>Spitfires</em></strong></a><a class="genanchor" href="#107778"> &para;</a><div class="date" title="2012-03-04 09:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107778">
<div class="phpcode"><code><span class="html">The changelog comment<br /><br />  "2.1.0 Added optional fit parameter. This method now supports proportional scaling. Pass zero as either parameter for proportional scaling."<br /><br />is poorly structured and therefore IMO misleading.  Yes for proportional scaling you pass 0 as either parameter... however this is *not* true if you use the optional fit param.  When bestfit == true you must specify a *non-zero* value for both columns and rows.  Note it WILL still scale proportionally e.g.<br /><br />   Imagick::resizeImage ( 200, 200,  imagick::FILTER_LANCZOS, 1, TRUE)<br /><br />will resize a 1000x750 image to 200x150<br /><br />So for proportional resizing:<br />without "bestfit"<br />   Imagick::resizeImage ( 200, 0,  imagick::FILTER_LANCZOS, 1)<br /><br />with "bestfit"<br />   Imagick::resizeImage ( 200, 200,  imagick::FILTER_LANCZOS, 1, TRUE)</span></code></div>
  </div>
 </div>
  <div class="note" id="103493">  <div class="votes">
    <div id="Vu103493">
    <a href="/manual/vote-note.php?id=103493&amp;page=imagick.resizeimage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103493">
    <a href="/manual/vote-note.php?id=103493&amp;page=imagick.resizeimage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103493" title="69% like this...">
    16
    </div>
  </div>
  <a href="#103493" class="name">
  <strong class="user"><em>jdhawk at gmail dot com</em></strong></a><a class="genanchor" href="#103493"> &para;</a><div class="date" title="2011-04-15 10:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103493">
<div class="phpcode"><code><span class="html">In our linux environment, using resizeImage with any filter produced extremely high CPU Utilization (in the range of 40-50%) while doing batch resizing.<br /><br />We switched to scaleImage, which produces similar results to FILTER_BOX, and CPU Utilization dropped to 2-3%. <br /><br />Using XHProf to profile the two batch jobs showed amazing decreases in CPU Time, so if you're doing a lot of picture resizing, it might be beneficial to use scaleImage instead of resizeImage, as it seems to be much much more efficient.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=imagick.resizeimage&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.resizeimage.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.imagick.php">Imagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="imagick.adaptiveblurimage.php" title="adaptiveBlurImage">adaptiveBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.adaptiveresizeimage.php" title="adaptiveResizeImage">adaptiveResizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.adaptivesharpenimage.php" title="adaptiveSharpenImage">adaptiveSharpenImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.adaptivethresholdimage.php" title="adaptiveThresholdImage">adaptiveThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.addimage.php" title="addImage">addImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.addnoiseimage.php" title="addNoiseImage">addNoiseImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.affinetransformimage.php" title="affineTransformImage">affineTransformImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.animateimages.php" title="animateImages">animateImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.annotateimage.php" title="annotateImage">annotateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.appendimages.php" title="appendImages">appendImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.autolevelimage.php" title="autoLevelImage">autoLevelImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.blackthresholdimage.php" title="blackThresholdImage">blackThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.blueshiftimage.php" title="blueShiftImage">blueShiftImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.blurimage.php" title="blurImage">blurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.borderimage.php" title="borderImage">borderImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.brightnesscontrastimage.php" title="brightnessContrastImage">brightnessContrastImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.charcoalimage.php" title="charcoalImage">charcoalImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.chopimage.php" title="chopImage">chopImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clampimage.php" title="clampImage">clampImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clear.php" title="clear">clear</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clipimage.php" title="clipImage">clipImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clipimagepath.php" title="clipImagePath">clipImagePath</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clippathimage.php" title="clipPathImage">clipPathImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clutimage.php" title="clutImage">clutImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.coalesceimages.php" title="coalesceImages">coalesceImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.colorizeimage.php" title="colorizeImage">colorizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.colormatriximage.php" title="colorMatrixImage">colorMatrixImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.combineimages.php" title="combineImages">combineImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.commentimage.php" title="commentImage">commentImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compareimagechannels.php" title="compareImageChannels">compareImageChannels</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compareimagelayers.php" title="compareImageLayers">compareImageLayers</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compareimages.php" title="compareImages">compareImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compositeimage.php" title="compositeImage">compositeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="imagick.contrastimage.php" title="contrastImage">contrastImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.contraststretchimage.php" title="contrastStretchImage">contrastStretchImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.convolveimage.php" title="convolveImage">convolveImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="imagick.cropimage.php" title="cropImage">cropImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.cropthumbnailimage.php" title="cropThumbnailImage">cropThumbnailImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="imagick.cyclecolormapimage.php" title="cycleColormapImage">cycleColormapImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.decipherimage.php" title="decipherImage">decipherImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deconstructimages.php" title="deconstructImages">deconstructImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deleteimageartifact.php" title="deleteImageArtifact">deleteImageArtifact</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deleteimageproperty.php" title="deleteImageProperty">deleteImageProperty</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deskewimage.php" title="deskewImage">deskewImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.despeckleimage.php" title="despeckleImage">despeckleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.destroy.php" title="destroy">destroy</a>
                        </li>
                                                <li class="">
                            <a href="imagick.displayimage.php" title="displayImage">displayImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.displayimages.php" title="displayImages">displayImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.distortimage.php" title="distortImage">distortImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.drawimage.php" title="drawImage">drawImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.edgeimage.php" title="edgeImage">edgeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.embossimage.php" title="embossImage">embossImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.encipherimage.php" title="encipherImage">encipherImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.enhanceimage.php" title="enhanceImage">enhanceImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.equalizeimage.php" title="equalizeImage">equalizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.evaluateimage.php" title="evaluateImage">evaluateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.exportimagepixels.php" title="exportImagePixels">exportImagePixels</a>
                        </li>
                                                <li class="">
                            <a href="imagick.extentimage.php" title="extentImage">extentImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.flipimage.php" title="flipImage">flipImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.floodfillpaintimage.php" title="floodFillPaintImage">floodFillPaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.flopimage.php" title="flopImage">flopImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.forwardfouriertransformimage.php" title="forwardFourierTransformImage">forwardFourierTransformImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.frameimage.php" title="frameImage">frameImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.functionimage.php" title="functionImage">functionImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.fximage.php" title="fxImage">fxImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.gammaimage.php" title="gammaImage">gammaImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.gaussianblurimage.php" title="gaussianBlurImage">gaussianBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcolorspace.php" title="getColorspace">getColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcompression.php" title="getCompression">getCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcompressionquality.php" title="getCompressionQuality">getCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcopyright.php" title="getCopyright">getCopyright</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getfilename.php" title="getFilename">getFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getfont.php" title="getFont">getFont</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getformat.php" title="getFormat">getFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getgravity.php" title="getGravity">getGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.gethomeurl.php" title="getHomeURL">getHomeURL</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimage.php" title="getImage">getImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagealphachannel.php" title="getImageAlphaChannel">getImageAlphaChannel</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageartifact.php" title="getImageArtifact">getImageArtifact</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagebackgroundcolor.php" title="getImageBackgroundColor">getImageBackgroundColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageblob.php" title="getImageBlob">getImageBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageblueprimary.php" title="getImageBluePrimary">getImageBluePrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagebordercolor.php" title="getImageBorderColor">getImageBorderColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechanneldepth.php" title="getImageChannelDepth">getImageChannelDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechanneldistortion.php" title="getImageChannelDistortion">getImageChannelDistortion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechanneldistortions.php" title="getImageChannelDistortions">getImageChannelDistortions</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelkurtosis.php" title="getImageChannelKurtosis">getImageChannelKurtosis</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelmean.php" title="getImageChannelMean">getImageChannelMean</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelrange.php" title="getImageChannelRange">getImageChannelRange</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelstatistics.php" title="getImageChannelStatistics">getImageChannelStatistics</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecolormapcolor.php" title="getImageColormapColor">getImageColormapColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecolors.php" title="getImageColors">getImageColors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecolorspace.php" title="getImageColorspace">getImageColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecompose.php" title="getImageCompose">getImageCompose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecompression.php" title="getImageCompression">getImageCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecompressionquality.php" title="getImageCompressionQuality">getImageCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedelay.php" title="getImageDelay">getImageDelay</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedepth.php" title="getImageDepth">getImageDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedispose.php" title="getImageDispose">getImageDispose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedistortion.php" title="getImageDistortion">getImageDistortion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagefilename.php" title="getImageFilename">getImageFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageformat.php" title="getImageFormat">getImageFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegamma.php" title="getImageGamma">getImageGamma</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegeometry.php" title="getImageGeometry">getImageGeometry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegravity.php" title="getImageGravity">getImageGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegreenprimary.php" title="getImageGreenPrimary">getImageGreenPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageheight.php" title="getImageHeight">getImageHeight</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagehistogram.php" title="getImageHistogram">getImageHistogram</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageinterlacescheme.php" title="getImageInterlaceScheme">getImageInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageinterpolatemethod.php" title="getImageInterpolateMethod">getImageInterpolateMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageiterations.php" title="getImageIterations">getImageIterations</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagelength.php" title="getImageLength">getImageLength</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagemimetype.php" title="getImageMimeType">getImageMimeType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageorientation.php" title="getImageOrientation">getImageOrientation</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagepage.php" title="getImagePage">getImagePage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagepixelcolor.php" title="getImagePixelColor">getImagePixelColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageprofile.php" title="getImageProfile">getImageProfile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageprofiles.php" title="getImageProfiles">getImageProfiles</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageproperties.php" title="getImageProperties">getImageProperties</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageproperty.php" title="getImageProperty">getImageProperty</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageredprimary.php" title="getImageRedPrimary">getImageRedPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageregion.php" title="getImageRegion">getImageRegion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagerenderingintent.php" title="getImageRenderingIntent">getImageRenderingIntent</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageresolution.php" title="getImageResolution">getImageResolution</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagesblob.php" title="getImagesBlob">getImagesBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagescene.php" title="getImageScene">getImageScene</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagesignature.php" title="getImageSignature">getImageSignature</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagetickspersecond.php" title="getImageTicksPerSecond">getImageTicksPerSecond</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagetotalinkdensity.php" title="getImageTotalInkDensity">getImageTotalInkDensity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagetype.php" title="getImageType">getImageType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageunits.php" title="getImageUnits">getImageUnits</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagevirtualpixelmethod.php" title="getImageVirtualPixelMethod">getImageVirtualPixelMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagewhitepoint.php" title="getImageWhitePoint">getImageWhitePoint</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagewidth.php" title="getImageWidth">getImageWidth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getinterlacescheme.php" title="getInterlaceScheme">getInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getiteratorindex.php" title="getIteratorIndex">getIteratorIndex</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getnumberimages.php" title="getNumberImages">getNumberImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getoption.php" title="getOption">getOption</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpackagename.php" title="getPackageName">getPackageName</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpage.php" title="getPage">getPage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpixeliterator.php" title="getPixelIterator">getPixelIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpixelregioniterator.php" title="getPixelRegionIterator">getPixelRegionIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpointsize.php" title="getPointSize">getPointSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getquantum.php" title="getQuantum">getQuantum</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getquantumdepth.php" title="getQuantumDepth">getQuantumDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getquantumrange.php" title="getQuantumRange">getQuantumRange</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getregistry.php" title="getRegistry">getRegistry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getreleasedate.php" title="getReleaseDate">getReleaseDate</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getresource.php" title="getResource">getResource</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getresourcelimit.php" title="getResourceLimit">getResourceLimit</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getsamplingfactors.php" title="getSamplingFactors">getSamplingFactors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getsize.php" title="getSize">getSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getsizeoffset.php" title="getSizeOffset">getSizeOffset</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getversion.php" title="getVersion">getVersion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.haldclutimage.php" title="haldClutImage">haldClutImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.hasnextimage.php" title="hasNextImage">hasNextImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.haspreviousimage.php" title="hasPreviousImage">hasPreviousImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.identifyformat.php" title="identifyFormat">identifyFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.identifyimage.php" title="identifyImage">identifyImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.implodeimage.php" title="implodeImage">implodeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.importimagepixels.php" title="importImagePixels">importImagePixels</a>
                        </li>
                                                <li class="">
                            <a href="imagick.inversefouriertransformimage.php" title="inverseFourierTransformImage">inverseFourierTransformImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.labelimage.php" title="labelImage">labelImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.levelimage.php" title="levelImage">levelImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.linearstretchimage.php" title="linearStretchImage">linearStretchImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.liquidrescaleimage.php" title="liquidRescaleImage">liquidRescaleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.listregistry.php" title="listRegistry">listRegistry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.magnifyimage.php" title="magnifyImage">magnifyImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.mergeimagelayers.php" title="mergeImageLayers">mergeImageLayers</a>
                        </li>
                                                <li class="">
                            <a href="imagick.minifyimage.php" title="minifyImage">minifyImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.modulateimage.php" title="modulateImage">modulateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.montageimage.php" title="montageImage">montageImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.morphimages.php" title="morphImages">morphImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.morphology.php" title="morphology">morphology</a>
                        </li>
                                                <li class="">
                            <a href="imagick.motionblurimage.php" title="motionBlurImage">motionBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.negateimage.php" title="negateImage">negateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.newimage.php" title="newImage">newImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.newpseudoimage.php" title="newPseudoImage">newPseudoImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.nextimage.php" title="nextImage">nextImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.normalizeimage.php" title="normalizeImage">normalizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.oilpaintimage.php" title="oilPaintImage">oilPaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.opaquepaintimage.php" title="opaquePaintImage">opaquePaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.optimizeimagelayers.php" title="optimizeImageLayers">optimizeImageLayers</a>
                        </li>
                                                <li class="">
                            <a href="imagick.pingimage.php" title="pingImage">pingImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.pingimageblob.php" title="pingImageBlob">pingImageBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.pingimagefile.php" title="pingImageFile">pingImageFile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.polaroidimage.php" title="polaroidImage">polaroidImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.posterizeimage.php" title="posterizeImage">posterizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.previewimages.php" title="previewImages">previewImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.previousimage.php" title="previousImage">previousImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.profileimage.php" title="profileImage">profileImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.quantizeimage.php" title="quantizeImage">quantizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.quantizeimages.php" title="quantizeImages">quantizeImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.queryfontmetrics.php" title="queryFontMetrics">queryFontMetrics</a>
                        </li>
                                                <li class="">
                            <a href="imagick.queryfonts.php" title="queryFonts">queryFonts</a>
                        </li>
                                                <li class="">
                            <a href="imagick.queryformats.php" title="queryFormats">queryFormats</a>
                        </li>
                                                <li class="">
                            <a href="imagick.raiseimage.php" title="raiseImage">raiseImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.randomthresholdimage.php" title="randomThresholdImage">randomThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimage.php" title="readImage">readImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimageblob.php" title="readImageBlob">readImageBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimagefile.php" title="readImageFile">readImageFile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimages.php" title="readimages">readimages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.remapimage.php" title="remapImage">remapImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.removeimage.php" title="removeImage">removeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.removeimageprofile.php" title="removeImageProfile">removeImageProfile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.render.php" title="render">render</a>
                        </li>
                                                <li class="">
                            <a href="imagick.resampleimage.php" title="resampleImage">resampleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.resetimagepage.php" title="resetImagePage">resetImagePage</a>
                        </li>
                                                <li class="current">
                            <a href="imagick.resizeimage.php" title="resizeImage">resizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.rollimage.php" title="rollImage">rollImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.rotateimage.php" title="rotateImage">rotateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.rotationalblurimage.php" title="rotationalBlurImage">rotationalBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sampleimage.php" title="sampleImage">sampleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.scaleimage.php" title="scaleImage">scaleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.segmentimage.php" title="segmentImage">segmentImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.selectiveblurimage.php" title="selectiveBlurImage">selectiveBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.separateimagechannel.php" title="separateImageChannel">separateImageChannel</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sepiatoneimage.php" title="sepiaToneImage">sepiaToneImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setbackgroundcolor.php" title="setBackgroundColor">setBackgroundColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setcolorspace.php" title="setColorspace">setColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setcompression.php" title="setCompression">setCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setcompressionquality.php" title="setCompressionQuality">setCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setfilename.php" title="setFilename">setFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setfirstiterator.php" title="setFirstIterator">setFirstIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setfont.php" title="setFont">setFont</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setformat.php" title="setFormat">setFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setgravity.php" title="setGravity">setGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimage.php" title="setImage">setImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagealphachannel.php" title="setImageAlphaChannel">setImageAlphaChannel</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageartifact.php" title="setImageArtifact">setImageArtifact</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagebackgroundcolor.php" title="setImageBackgroundColor">setImageBackgroundColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageblueprimary.php" title="setImageBluePrimary">setImageBluePrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagebordercolor.php" title="setImageBorderColor">setImageBorderColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagechanneldepth.php" title="setImageChannelDepth">setImageChannelDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecolormapcolor.php" title="setImageColormapColor">setImageColormapColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecolorspace.php" title="setImageColorspace">setImageColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecompose.php" title="setImageCompose">setImageCompose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecompression.php" title="setImageCompression">setImageCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecompressionquality.php" title="setImageCompressionQuality">setImageCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagedelay.php" title="setImageDelay">setImageDelay</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagedepth.php" title="setImageDepth">setImageDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagedispose.php" title="setImageDispose">setImageDispose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageextent.php" title="setImageExtent">setImageExtent</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagefilename.php" title="setImageFilename">setImageFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageformat.php" title="setImageFormat">setImageFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagegamma.php" title="setImageGamma">setImageGamma</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagegravity.php" title="setImageGravity">setImageGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagegreenprimary.php" title="setImageGreenPrimary">setImageGreenPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageinterlacescheme.php" title="setImageInterlaceScheme">setImageInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageinterpolatemethod.php" title="setImageInterpolateMethod">setImageInterpolateMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageiterations.php" title="setImageIterations">setImageIterations</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagematte.php" title="setImageMatte">setImageMatte</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageorientation.php" title="setImageOrientation">setImageOrientation</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagepage.php" title="setImagePage">setImagePage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageprofile.php" title="setImageProfile">setImageProfile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageproperty.php" title="setImageProperty">setImageProperty</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageredprimary.php" title="setImageRedPrimary">setImageRedPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagerenderingintent.php" title="setImageRenderingIntent">setImageRenderingIntent</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageresolution.php" title="setImageResolution">setImageResolution</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagescene.php" title="setImageScene">setImageScene</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagetickspersecond.php" title="setImageTicksPerSecond">setImageTicksPerSecond</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagetype.php" title="setImageType">setImageType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageunits.php" title="setImageUnits">setImageUnits</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagevirtualpixelmethod.php" title="setImageVirtualPixelMethod">setImageVirtualPixelMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagewhitepoint.php" title="setImageWhitePoint">setImageWhitePoint</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setinterlacescheme.php" title="setInterlaceScheme">setInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setiteratorindex.php" title="setIteratorIndex">setIteratorIndex</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setlastiterator.php" title="setLastIterator">setLastIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setoption.php" title="setOption">setOption</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setpage.php" title="setPage">setPage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setpointsize.php" title="setPointSize">setPointSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setprogressmonitor.php" title="setProgressMonitor">setProgressMonitor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setregistry.php" title="setRegistry">setRegistry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setresolution.php" title="setResolution">setResolution</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setresourcelimit.php" title="setResourceLimit">setResourceLimit</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setsamplingfactors.php" title="setSamplingFactors">setSamplingFactors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setsize.php" title="setSize">setSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setsizeoffset.php" title="setSizeOffset">setSizeOffset</a>
                        </li>
                                                <li class="">
                            <a href="imagick.settype.php" title="setType">setType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shadeimage.php" title="shadeImage">shadeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shadowimage.php" title="shadowImage">shadowImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sharpenimage.php" title="sharpenImage">sharpenImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shaveimage.php" title="shaveImage">shaveImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shearimage.php" title="shearImage">shearImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sigmoidalcontrastimage.php" title="sigmoidalContrastImage">sigmoidalContrastImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sketchimage.php" title="sketchImage">sketchImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.smushimages.php" title="smushImages">smushImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.solarizeimage.php" title="solarizeImage">solarizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sparsecolorimage.php" title="sparseColorImage">sparseColorImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.spliceimage.php" title="spliceImage">spliceImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.spreadimage.php" title="spreadImage">spreadImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.statisticimage.php" title="statisticImage">statisticImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.steganoimage.php" title="steganoImage">steganoImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.stereoimage.php" title="stereoImage">stereoImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.stripimage.php" title="stripImage">stripImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.subimagematch.php" title="subImageMatch">subImageMatch</a>
                        </li>
                                                <li class="">
                            <a href="imagick.swirlimage.php" title="swirlImage">swirlImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.textureimage.php" title="textureImage">textureImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.thresholdimage.php" title="thresholdImage">thresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.thumbnailimage.php" title="thumbnailImage">thumbnailImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.tintimage.php" title="tintImage">tintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transformimagecolorspace.php" title="transformImageColorspace">transformImageColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transparentpaintimage.php" title="transparentPaintImage">transparentPaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transposeimage.php" title="transposeImage">transposeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transverseimage.php" title="transverseImage">transverseImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.trimimage.php" title="trimImage">trimImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.uniqueimagecolors.php" title="uniqueImageColors">uniqueImageColors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.unsharpmaskimage.php" title="unsharpMaskImage">unsharpMaskImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.valid.php" title="valid">valid</a>
                        </li>
                                                <li class="">
                            <a href="imagick.vignetteimage.php" title="vignetteImage">vignetteImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.waveimage.php" title="waveImage">waveImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.whitethresholdimage.php" title="whiteThresholdImage">whiteThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimage.php" title="writeImage">writeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimagefile.php" title="writeImageFile">writeImageFile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimages.php" title="writeImages">writeImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimagesfile.php" title="writeImagesFile">writeImagesFile</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="imagick.averageimages.php" title="averageImages">averageImages</a>
                    </li>
                                    <li class="">
                        <a href="imagick.clone.php" title="clone">clone</a>
                    </li>
                                    <li class="">
                        <a href="imagick.colorfloodfillimage.php" title="colorFloodfillImage">colorFloodfillImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.filter.php" title="filter">filter</a>
                    </li>
                                    <li class="">
                        <a href="imagick.flattenimages.php" title="flattenImages">flattenImages</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageattribute.php" title="getImageAttribute">getImageAttribute</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagechannelextrema.php" title="getImageChannelExtrema">getImageChannelExtrema</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageclipmask.php" title="getImageClipMask">getImageClipMask</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageextrema.php" title="getImageExtrema">getImageExtrema</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageindex.php" title="getImageIndex">getImageIndex</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagematte.php" title="getImageMatte">getImageMatte</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagemattecolor.php" title="getImageMatteColor">getImageMatteColor</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagesize.php" title="getImageSize">getImageSize</a>
                    </li>
                                    <li class="">
                        <a href="imagick.mapimage.php" title="mapImage">mapImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.mattefloodfillimage.php" title="matteFloodfillImage">matteFloodfillImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.medianfilterimage.php" title="medianFilterImage">medianFilterImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.mosaicimages.php" title="mosaicImages">mosaicImages</a>
                    </li>
                                    <li class="">
                        <a href="imagick.orderedposterizeimage.php" title="orderedPosterizeImage">orderedPosterizeImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.paintfloodfillimage.php" title="paintFloodfillImage">paintFloodfillImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.paintopaqueimage.php" title="paintOpaqueImage">paintOpaqueImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.painttransparentimage.php" title="paintTransparentImage">paintTransparentImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.radialblurimage.php" title="radialBlurImage">radialBlurImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.recolorimage.php" title="recolorImage">recolorImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.reducenoiseimage.php" title="reduceNoiseImage">reduceNoiseImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.roundcorners.php" title="roundCorners">roundCorners</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageattribute.php" title="setImageAttribute">setImageAttribute</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimagebias.php" title="setImageBias">setImageBias</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimagebiasquantum.php" title="setImageBiasQuantum">setImageBiasQuantum</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageclipmask.php" title="setImageClipMask">setImageClipMask</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageindex.php" title="setImageIndex">setImageIndex</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimagemattecolor.php" title="setImageMatteColor">setImageMatteColor</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageopacity.php" title="setImageOpacity">setImageOpacity</a>
                    </li>
                                    <li class="">
                        <a href="imagick.transformimage.php" title="transformImage">transformImage</a>
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
