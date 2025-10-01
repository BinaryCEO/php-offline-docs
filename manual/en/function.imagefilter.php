<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagefilter - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagefilter.php">
 <link rel="shorturl" href="https://www.php.net/imagefilter">
 <link rel="alternate" href="https://www.php.net/imagefilter" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagefilltoborder.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imageflip.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagefilter.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagefilter.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagefilter.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagefilter.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagefilter.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagefilter.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagefilter.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagefilter.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagefilter.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagefilter.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagefilter.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Applies a filter to an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagefilter - Manual" />
<meta name="twitter:description" content="Applies a filter to an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagefilter - Manual" />
<meta itemprop="description" content="Applies a filter to an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Applies a filter to an image" />

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
        <a href="function.imageflip.php">
          imageflip &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagefilltoborder.php">
          &laquo; imagefilltoborder        </a>
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
            <option value='en/function.imagefilter.php' selected="selected">English</option>
            <option value='de/function.imagefilter.php'>German</option>
            <option value='es/function.imagefilter.php'>Spanish</option>
            <option value='fr/function.imagefilter.php'>French</option>
            <option value='it/function.imagefilter.php'>Italian</option>
            <option value='ja/function.imagefilter.php'>Japanese</option>
            <option value='pt_BR/function.imagefilter.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagefilter.php'>Russian</option>
            <option value='tr/function.imagefilter.php'>Turkish</option>
            <option value='uk/function.imagefilter.php'>Ukrainian</option>
            <option value='zh/function.imagefilter.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagefilter" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagefilter</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagefilter</span> &mdash; <span class="dc-title">Applies a filter to an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagefilter-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagefilter</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$filter</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">...$args</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagefilter()</strong></span> applies the given filter
   <code class="parameter">filter</code> on the <code class="parameter">image</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagefilter-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">filter</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">filter</code> can be one of the following:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-negate">IMG_FILTER_NEGATE</a></code></strong>: Reverses all colors of
          the image.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-grayscale">IMG_FILTER_GRAYSCALE</a></code></strong>: Converts the image into
          grayscale by changing the red, green and blue components to their
          weighted sum using the same coefficients as the REC.601 luma (Y&#039;)
          calculation. The alpha components are retained. For palette images the
          result may differ due to palette limitations.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-brightness">IMG_FILTER_BRIGHTNESS</a></code></strong>: Changes the brightness
          of the image. Use <code class="parameter">args</code> to set the level of
          brightness. The range for the brightness is -255 to 255.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-contrast">IMG_FILTER_CONTRAST</a></code></strong>: Changes the contrast of
          the image. Use <code class="parameter">args</code> to set the level of
          contrast.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-colorize">IMG_FILTER_COLORIZE</a></code></strong>: Like
          <strong><code><a href="image.constants.php#constant.img-filter-grayscale">IMG_FILTER_GRAYSCALE</a></code></strong>, except you can specify the
          color. Use <code class="parameter">args</code>, <code class="parameter">arg2</code> and
          <code class="parameter">arg3</code> in the form of
          <code class="parameter">red</code>, <code class="parameter">green</code>,
          <code class="parameter">blue</code> and <code class="parameter">arg4</code> for the
          <code class="parameter">alpha</code> channel. The range for each color is 0 to 255.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-edgedetect">IMG_FILTER_EDGEDETECT</a></code></strong>: Uses edge detection to
          highlight the edges in the image.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-emboss">IMG_FILTER_EMBOSS</a></code></strong>: Embosses the image.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-gaussian-blur">IMG_FILTER_GAUSSIAN_BLUR</a></code></strong>: Blurs the image using
          the Gaussian method.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-selective-blur">IMG_FILTER_SELECTIVE_BLUR</a></code></strong>: Blurs the image.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-mean-removal">IMG_FILTER_MEAN_REMOVAL</a></code></strong>: Uses mean removal to
          achieve a &quot;sketchy&quot; effect.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-smooth">IMG_FILTER_SMOOTH</a></code></strong>: Makes the image smoother.
          Use <code class="parameter">args</code> to set the level of smoothness.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-pixelate">IMG_FILTER_PIXELATE</a></code></strong>: Applies pixelation effect 
          to the image, use <code class="parameter">args</code> to set the block size 
          and <code class="parameter">arg2</code> to set the pixelation effect mode.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong>: Applies scatter effect 
          to the image, use <code class="parameter">args</code> and 
          <code class="parameter">arg2</code> to define the effect strength and 
          additionally <code class="parameter">arg3</code> to only apply the 
          on select pixel colors.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">args</code></dt>
     <dd>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-brightness">IMG_FILTER_BRIGHTNESS</a></code></strong>: Brightness level.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-contrast">IMG_FILTER_CONTRAST</a></code></strong>: Contrast level.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-colorize">IMG_FILTER_COLORIZE</a></code></strong>: Value of red component.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-smooth">IMG_FILTER_SMOOTH</a></code></strong>: Smoothness level.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-pixelate">IMG_FILTER_PIXELATE</a></code></strong>: Block size in pixels.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong>: Effect substraction level. 
          This must not be higher or equal to the addition level set with 
          <code class="parameter">arg2</code>.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">arg2</code></dt>
     <dd>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-colorize">IMG_FILTER_COLORIZE</a></code></strong>: Value of green component.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-pixelate">IMG_FILTER_PIXELATE</a></code></strong>: Whether to use advanced pixelation 
          effect or not (defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>).
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong>: Effect addition level.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">arg3</code></dt>
     <dd>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-colorize">IMG_FILTER_COLORIZE</a></code></strong>: Value of blue component.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong>: Optional array indexed color values 
          to apply effect at.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">arg4</code></dt>
     <dd>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="image.constants.php#constant.img-filter-colorize">IMG_FILTER_COLORIZE</a></code></strong>: Alpha channel, A value 
          between 0 and 127. 0 indicates completely opaque while 127 indicates 
          completely transparent.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagefilter-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.imagefilter-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
   if <code class="parameter">sub</code> or <code class="parameter">plus</code> would cause over-/underflow
   with the <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong> <code class="parameter">filter</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagefilter-changelog">
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
       <td>8.4.0</td>
       <td>
        Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
        if <code class="parameter">sub</code> or <code class="parameter">plus</code> would cause over-/underflow
        with the <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong> <code class="parameter">filter</code>.
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
       <td>7.4.0</td>
       <td>
        Scatter support (<strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong>) was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.imagefilter-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2889">
    <p><strong>Example #1 <span class="function"><strong>imagefilter()</strong></span> grayscale example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'dave.png'</span><span style="color: #007700">);<br /><br />if(</span><span style="color: #0000BB">$im </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">imagefilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_FILTER_GRAYSCALE</span><span style="color: #007700">))<br />{<br />    echo </span><span style="color: #DD0000">'Image converted to grayscale.'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'dave.png'</span><span style="color: #007700">);<br />}<br />else<br />{<br />    echo </span><span style="color: #DD0000">'Conversion to grayscale failed.'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2890">
    <p><strong>Example #2 <span class="function"><strong>imagefilter()</strong></span> brightness example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'sean.png'</span><span style="color: #007700">);<br /><br />if(</span><span style="color: #0000BB">$im </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">imagefilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_FILTER_BRIGHTNESS</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">))<br />{<br />    echo </span><span style="color: #DD0000">'Image brightness changed.'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'sean.png'</span><span style="color: #007700">);<br />}<br />else<br />{<br />    echo </span><span style="color: #DD0000">'Image brightness change failed.'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2891">
    <p><strong>Example #3 <span class="function"><strong>imagefilter()</strong></span> colorize example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'philip.png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* R, G, B, so 0, 255, 0 is green */<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">$im </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">imagefilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_FILTER_COLORIZE</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">))<br />{<br />    echo </span><span style="color: #DD0000">'Image successfully shaded green.'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'philip.png'</span><span style="color: #007700">);<br />}<br />else<br />{<br />    echo </span><span style="color: #DD0000">'Green shading failed.'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2892">
    <p><strong>Example #4 <span class="function"><strong>imagefilter()</strong></span> negate example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Define our negate function so its portable for <br />// php versions without imagefilter()<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">negate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">)<br />{<br />    if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagefilter'</span><span style="color: #007700">))<br />    {<br />        return </span><span style="color: #0000BB">imagefilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_FILTER_NEGATE</span><span style="color: #007700">);<br />    }<br /><br />    for(</span><span style="color: #0000BB">$x </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$x </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">); ++</span><span style="color: #0000BB">$x</span><span style="color: #007700">)<br />    {<br />        for(</span><span style="color: #0000BB">$y </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$y </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">imagesy</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">); ++</span><span style="color: #0000BB">$y</span><span style="color: #007700">)<br />        {<br />            </span><span style="color: #0000BB">$index </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$rgb </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$index</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$color </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255 </span><span style="color: #007700">- </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">], </span><span style="color: #0000BB">255 </span><span style="color: #007700">- </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">], </span><span style="color: #0000BB">255 </span><span style="color: #007700">- </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]);<br /><br />            </span><span style="color: #0000BB">imagesetpixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">, </span><span style="color: #0000BB">$color</span><span style="color: #007700">);<br />        }<br />    }<br /><br />    return(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromjpeg</span><span style="color: #007700">(</span><span style="color: #DD0000">'kalle.jpg'</span><span style="color: #007700">);<br /><br />if(</span><span style="color: #0000BB">$im </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">negate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">))<br />{<br />    echo </span><span style="color: #DD0000">'Image successfully converted to negative colors.'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'kalle.jpg'</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br />}<br />else<br />{<br />    echo </span><span style="color: #DD0000">'Converting to negative colors failed.'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2893">
    <p><strong>Example #5 <span class="function"><strong>imagefilter()</strong></span> pixelate example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Load the PHP logo, we need to create two instances <br />// to show the differences<br /></span><span style="color: #0000BB">$logo1 </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'./php.png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$logo2 </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'./php.png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Create the image instance we want to show the <br />// differences on<br /></span><span style="color: #0000BB">$output </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo1</span><span style="color: #007700">) * </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">imagesy</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo1</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Apply pixelation to each instance, with a block <br />// size of 3<br /></span><span style="color: #0000BB">imagefilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo1</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_FILTER_PIXELATE</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagefilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo2</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_FILTER_PIXELATE</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Merge the differences onto the output image<br /></span><span style="color: #0000BB">imagecopy</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">, </span><span style="color: #0000BB">$logo1</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo1</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">imagesy</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo1</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagecopy</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">, </span><span style="color: #0000BB">$logo2</span><span style="color: #007700">, </span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo2</span><span style="color: #007700">), </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo2</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">imagesy</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo2</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output the differences<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagefilterpixelate.png" alt="Output of example : imagefilter() pixelate" width="190" height="51" />
     </div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2894">
    <p><strong>Example #6 <span class="function"><strong>imagefilter()</strong></span> scatter example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Load the image<br /></span><span style="color: #0000BB">$logo </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'./php.png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Apply a very soft scatter effect to the image<br /></span><span style="color: #0000BB">imagefilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_FILTER_SCATTER</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output the image with the scatter effect<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$logo</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-scatter.png" alt="Output of example : imagefilter() scatter" width="200" height="106" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagefilter-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The result of <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong> is always random.
   </span>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagefilter-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imageconvolution.php" class="function" rel="rdfs-seeAlso">imageconvolution()</a> - Apply a 3x3 convolution matrix, using coefficient and offset</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagefilter.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagefilter%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagefilter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilter.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72329">  <div class="votes">
    <div id="Vu72329">
    <a href="/manual/vote-note.php?id=72329&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72329">
    <a href="/manual/vote-note.php?id=72329&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72329" title="90% like this...">
    34
    </div>
  </div>
  <a href="#72329" class="name">
  <strong class="user"><em>PanuWorld</em></strong></a><a class="genanchor" href="#72329"> &para;</a><div class="date" title="2007-01-14 06:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72329">
<div class="phpcode"><code><span class="html">The documentation misses the exact meaning and valid ranges of the arguments for ImageFilter(). According to the 5.2.0 sources the arguments are:<br />IMG_FILTER_BRIGHTNESS<br />-255 = min brightness, 0 = no change, +255 = max brightness<br /><br />IMG_FILTER_CONTRAST<br />-100 = max contrast, 0 = no change, +100 = min contrast (note the direction!)<br /><br />IMG_FILTER_COLORIZE<br />Adds (subtracts) specified RGB values to each pixel. The valid range for each color is -255...+255, not 0...255. The correct order is red, green, blue.<br />-255 = min, 0 = no change, +255 = max<br />This has not much to do with IMG_FILTER_GRAYSCALE.<br /><br />IMG_FILTER_SMOOTH<br />Applies a 9-cell convolution matrix where center pixel has the weight arg1 and others weight of 1.0. The result is normalized by dividing the sum with arg1 + 8.0 (sum of the matrix).<br />any float is accepted, large value (in practice: 2048 or more) = no change<br /><br />ImageFilter seem to return false if the argument(s) are out of range for the chosen filter.</span></code></div>
  </div>
 </div>
  <div class="note" id="114750">  <div class="votes">
    <div id="Vu114750">
    <a href="/manual/vote-note.php?id=114750&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114750">
    <a href="/manual/vote-note.php?id=114750&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114750" title="82% like this...">
    15
    </div>
  </div>
  <a href="#114750" class="name">
  <strong class="user"><em>martijn at martijnfrazer dot nl</em></strong></a><a class="genanchor" href="#114750"> &para;</a><div class="date" title="2014-04-01 05:03"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114750">
<div class="phpcode"><code><span class="html">I needed an especially strong blur effect today and had a hard time achieving adequate results with the built-in IMG_FILTER_GAUSSIAN_BLUR filter. In order to achieve the strength of the blur I required I had to repeat the filter up to  100 times, which took way too long to be acceptable.<br /><br />After a bit of searching, I found this answer to be quite a good solution to this problem: <a href="http://stackoverflow.com/a/20264482" rel="nofollow" target="_blank">http://stackoverflow.com/a/20264482</a><br /><br />Based on that technique, I wrote the following generic function to achieve a very strong blur in a reasonable amount of processing:<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="comment">/**<br /> * Strong Blur<br /> *<br /> * @param resource $gdImageResource <br /> * @param int $blurFactor optional <br /> *  This is the strength of the blur<br /> *  0 = no blur, 3 = default, anything over 5 is extremely blurred<br /> * @return GD image resource<br /> * @author Martijn Frazer, idea based on <a href="http://stackoverflow.com/a/20264482" rel="nofollow" target="_blank">http://stackoverflow.com/a/20264482</a><br /> */<br /></span><span class="keyword">function </span><span class="default">blur</span><span class="keyword">(</span><span class="default">$gdImageResource</span><span class="keyword">, </span><span class="default">$blurFactor </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">)<br />{<br />  </span><span class="comment">// blurFactor has to be an integer<br />  </span><span class="default">$blurFactor </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$blurFactor</span><span class="keyword">);<br />  <br />  </span><span class="default">$originalWidth </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$gdImageResource</span><span class="keyword">);<br />  </span><span class="default">$originalHeight </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$gdImageResource</span><span class="keyword">);<br /><br />  </span><span class="default">$smallestWidth </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$originalWidth </span><span class="keyword">* </span><span class="default">pow</span><span class="keyword">(</span><span class="default">0.5</span><span class="keyword">, </span><span class="default">$blurFactor</span><span class="keyword">));<br />  </span><span class="default">$smallestHeight </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$originalHeight </span><span class="keyword">* </span><span class="default">pow</span><span class="keyword">(</span><span class="default">0.5</span><span class="keyword">, </span><span class="default">$blurFactor</span><span class="keyword">));<br /><br />  </span><span class="comment">// for the first run, the previous image is the original input<br />  </span><span class="default">$prevImage </span><span class="keyword">= </span><span class="default">$gdImageResource</span><span class="keyword">;<br />  </span><span class="default">$prevWidth </span><span class="keyword">= </span><span class="default">$originalWidth</span><span class="keyword">;<br />  </span><span class="default">$prevHeight </span><span class="keyword">= </span><span class="default">$originalHeight</span><span class="keyword">;<br /><br />  </span><span class="comment">// scale way down and gradually scale back up, blurring all the way<br />  </span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$blurFactor</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">)<br />  {    <br />    </span><span class="comment">// determine dimensions of next image<br />    </span><span class="default">$nextWidth </span><span class="keyword">= </span><span class="default">$smallestWidth </span><span class="keyword">* </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />    </span><span class="default">$nextHeight </span><span class="keyword">= </span><span class="default">$smallestHeight </span><span class="keyword">* </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br /><br />    </span><span class="comment">// resize previous image to next size<br />    </span><span class="default">$nextImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$nextWidth</span><span class="keyword">, </span><span class="default">$nextHeight</span><span class="keyword">);<br />    </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$nextImage</span><span class="keyword">, </span><span class="default">$prevImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, <br />      </span><span class="default">$nextWidth</span><span class="keyword">, </span><span class="default">$nextHeight</span><span class="keyword">, </span><span class="default">$prevWidth</span><span class="keyword">, </span><span class="default">$prevHeight</span><span class="keyword">);<br /><br />    </span><span class="comment">// apply blur filter<br />    </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$nextImage</span><span class="keyword">, </span><span class="default">IMG_FILTER_GAUSSIAN_BLUR</span><span class="keyword">);<br /><br />    </span><span class="comment">// now the new image becomes the previous image for the next step<br />    </span><span class="default">$prevImage </span><span class="keyword">= </span><span class="default">$nextImage</span><span class="keyword">;<br />    </span><span class="default">$prevWidth </span><span class="keyword">= </span><span class="default">$nextWidth</span><span class="keyword">;<br />      </span><span class="default">$prevHeight </span><span class="keyword">= </span><span class="default">$nextHeight</span><span class="keyword">;<br />  }<br /><br />  </span><span class="comment">// scale back to original size and blur one more time<br />  </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$gdImageResource</span><span class="keyword">, </span><span class="default">$nextImage</span><span class="keyword">, <br />    </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$originalWidth</span><span class="keyword">, </span><span class="default">$originalHeight</span><span class="keyword">, </span><span class="default">$nextWidth</span><span class="keyword">, </span><span class="default">$nextHeight</span><span class="keyword">);<br />  </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$gdImageResource</span><span class="keyword">, </span><span class="default">IMG_FILTER_GAUSSIAN_BLUR</span><span class="keyword">);<br /><br />  </span><span class="comment">// clean up<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$prevImage</span><span class="keyword">);<br /><br />  </span><span class="comment">// return result<br />  </span><span class="keyword">return </span><span class="default">$gdImageResource</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113049">  <div class="votes">
    <div id="Vu113049">
    <a href="/manual/vote-note.php?id=113049&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113049">
    <a href="/manual/vote-note.php?id=113049&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113049" title="78% like this...">
    11
    </div>
  </div>
  <a href="#113049" class="name">
  <strong class="user"><em>yoann at yoone dot eu</em></strong></a><a class="genanchor" href="#113049"> &para;</a><div class="date" title="2013-08-22 02:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113049">
<div class="phpcode"><code><span class="html">Here is an alternative to IMG_FILTER_COLORIZE filter, but taking the alpha parameter of each pixel in account.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">rgba_colorize</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">)
<br />{
<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />
<br />    </span><span class="default">$img_x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />    </span><span class="default">$img_y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$img_x</span><span class="keyword">; ++</span><span class="default">$x</span><span class="keyword">)
<br />    {
<br />        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$img_y</span><span class="keyword">; ++</span><span class="default">$y</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$rgba </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));
<br />            </span><span class="default">$color_alpha </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]);
<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color_alpha</span><span class="keyword">);
<br />            </span><span class="default">imagecolordeallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color_alpha</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82162">  <div class="votes">
    <div id="Vu82162">
    <a href="/manual/vote-note.php?id=82162&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82162">
    <a href="/manual/vote-note.php?id=82162&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82162" title="81% like this...">
    7
    </div>
  </div>
  <a href="#82162" class="name">
  <strong class="user"><em>aiden dot mail at freemail dot hu</em></strong></a><a class="genanchor" href="#82162"> &para;</a><div class="date" title="2008-03-29 12:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82162">
<div class="phpcode"><code><span class="html">Function to change the transparency of a png image on the fly. Works only with PNG, and with a browser supporting alpha channel.<br />The function stretches the opacity-range of the image, so that the most opaque pixel(s) will be set to the given opacity. (Other opacity values in pixels are modified accordingly.)<br />Returns success or failure.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">filter_opacity</span><span class="keyword">( &amp;</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$opacity </span><span class="keyword">) </span><span class="comment">//params: image resource id, opacity in percentage (eg. 80)<br />        </span><span class="keyword">{<br />            if( !isset( </span><span class="default">$opacity </span><span class="keyword">) )<br />                { return </span><span class="default">false</span><span class="keyword">; }<br />            </span><span class="default">$opacity </span><span class="keyword">/= </span><span class="default">100</span><span class="keyword">;<br />            <br />            </span><span class="comment">//get image width and height<br />            </span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">( </span><span class="default">$img </span><span class="keyword">);<br />            </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">( </span><span class="default">$img </span><span class="keyword">);<br />            <br />            </span><span class="comment">//turn alpha blending off<br />            </span><span class="default">imagealphablending</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">false </span><span class="keyword">);<br />            <br />            </span><span class="comment">//find the most opaque pixel in the image (the one with the smallest alpha value)<br />            </span><span class="default">$minalpha </span><span class="keyword">= </span><span class="default">127</span><span class="keyword">;<br />            for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ )<br />                for( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ )<br />                    {<br />                        </span><span class="default">$alpha </span><span class="keyword">= ( </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">) &gt;&gt; </span><span class="default">24 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                        if( </span><span class="default">$alpha </span><span class="keyword">&lt; </span><span class="default">$minalpha </span><span class="keyword">)<br />                            { </span><span class="default">$minalpha </span><span class="keyword">= </span><span class="default">$alpha</span><span class="keyword">; }<br />                    }<br />            <br />            </span><span class="comment">//loop through image pixels and modify alpha for each<br />            </span><span class="keyword">for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ )<br />                {<br />                    for( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ )<br />                        {<br />                            </span><span class="comment">//get current alpha value (represents the TANSPARENCY!)<br />                            </span><span class="default">$colorxy </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">);<br />                            </span><span class="default">$alpha </span><span class="keyword">= ( </span><span class="default">$colorxy </span><span class="keyword">&gt;&gt; </span><span class="default">24 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                            </span><span class="comment">//calculate new alpha<br />                            </span><span class="keyword">if( </span><span class="default">$minalpha </span><span class="keyword">!== </span><span class="default">127 </span><span class="keyword">)<br />                                { </span><span class="default">$alpha </span><span class="keyword">= </span><span class="default">127 </span><span class="keyword">+ </span><span class="default">127 </span><span class="keyword">* </span><span class="default">$opacity </span><span class="keyword">* ( </span><span class="default">$alpha </span><span class="keyword">- </span><span class="default">127 </span><span class="keyword">) / ( </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$minalpha </span><span class="keyword">); }<br />                            else<br />                                { </span><span class="default">$alpha </span><span class="keyword">+= </span><span class="default">127 </span><span class="keyword">* </span><span class="default">$opacity</span><span class="keyword">; }<br />                            </span><span class="comment">//get the color index with new alpha<br />                            </span><span class="default">$alphacolorxy </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, ( </span><span class="default">$colorxy </span><span class="keyword">&gt;&gt; </span><span class="default">16 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">, ( </span><span class="default">$colorxy </span><span class="keyword">&gt;&gt; </span><span class="default">8 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">$colorxy </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">$alpha </span><span class="keyword">);<br />                            </span><span class="comment">//set pixel with the new color + opacity<br />                            </span><span class="keyword">if( !</span><span class="default">imagesetpixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$alphacolorxy </span><span class="keyword">) )<br />                                { return </span><span class="default">false</span><span class="keyword">; }<br />                        }<br />                }<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br /></span><span class="default">?&gt;<br /></span><br />Example for use:<br /><br /> <span class="default">&lt;?php<br />  $image </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">( </span><span class="string">"img.png" </span><span class="keyword">);<br />  </span><span class="default">filter_opacity</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">75 </span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">( </span><span class="string">"content-type: image/png" </span><span class="keyword">);<br />  </span><span class="default">imagepng</span><span class="keyword">( </span><span class="default">$image </span><span class="keyword">);<br />  </span><span class="default">imagedestroy</span><span class="keyword">( </span><span class="default">$image </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79133">  <div class="votes">
    <div id="Vu79133">
    <a href="/manual/vote-note.php?id=79133&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79133">
    <a href="/manual/vote-note.php?id=79133&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79133" title="83% like this...">
    4
    </div>
  </div>
  <a href="#79133" class="name">
  <strong class="user"><em>ssttoo at gmail dot com</em></strong></a><a class="genanchor" href="#79133"> &para;</a><div class="date" title="2007-11-13 12:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79133">
<div class="phpcode"><code><span class="html">Here's a page that shows the different filters in action<br /><a href="http://www.phpied.com/image-fun-with-php-part-2/" rel="nofollow" target="_blank">http://www.phpied.com/image-fun-with-php-part-2/</a><br />Also shows some quick ways to do sepia.</span></code></div>
  </div>
 </div>
  <div class="note" id="109809">  <div class="votes">
    <div id="Vu109809">
    <a href="/manual/vote-note.php?id=109809&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109809">
    <a href="/manual/vote-note.php?id=109809&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109809" title="70% like this...">
    4
    </div>
  </div>
  <a href="#109809" class="name">
  <strong class="user"><em>cookie at backbone dot sk</em></strong></a><a class="genanchor" href="#109809"> &para;</a><div class="date" title="2012-08-23 01:11"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109809">
<div class="phpcode"><code><span class="html">a function to create nice vignette effect:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">vignette</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">){<br />    global </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">;    <br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br />    function </span><span class="default">effect</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, &amp;</span><span class="default">$rgb</span><span class="keyword">){<br />        global </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">;    <br />            <br />        </span><span class="default">$sharp </span><span class="keyword">= </span><span class="default">0.4</span><span class="keyword">; </span><span class="comment">// 0 - 10 small is sharpnes,  <br />        </span><span class="default">$level </span><span class="keyword">= </span><span class="default">0.7</span><span class="keyword">; </span><span class="comment">// 0 - 1 small is brighter<br /><br />        </span><span class="default">$l </span><span class="keyword">= </span><span class="default">sin</span><span class="keyword">(</span><span class="default">M_PI </span><span class="keyword">/ </span><span class="default">$width </span><span class="keyword">* </span><span class="default">$x</span><span class="keyword">) * </span><span class="default">sin</span><span class="keyword">(</span><span class="default">M_PI </span><span class="keyword">/ </span><span class="default">$height </span><span class="keyword">* </span><span class="default">$y</span><span class="keyword">);<br />        </span><span class="default">$l </span><span class="keyword">= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">, </span><span class="default">$sharp</span><span class="keyword">);<br />        <br />        </span><span class="default">$l </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">- </span><span class="default">$level </span><span class="keyword">* (</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$l</span><span class="keyword">);<br />        <br />        </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] *= </span><span class="default">$l</span><span class="keyword">;<br />        </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] *= </span><span class="default">$l</span><span class="keyword">;<br />        </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] *= </span><span class="default">$l</span><span class="keyword">;<br />    }<br /><br />    for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); ++</span><span class="default">$x</span><span class="keyword">){<br />        for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); ++</span><span class="default">$y</span><span class="keyword">){   <br />            </span><span class="default">$index </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">);<br />            </span><span class="default">effect</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">);<br />            </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);<br /><br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);   <br />        }<br />    }<br />    return(</span><span class="default">true</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">'cars7_134.jpg'</span><span class="keyword">);<br /><br />if(</span><span class="default">$im </span><span class="keyword">and </span><span class="default">vignette</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">)){<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: image/jpeg'</span><span class="keyword">);<br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />}else{<br />    echo </span><span class="string">'Vignette failed.'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44316">  <div class="votes">
    <div id="Vu44316">
    <a href="/manual/vote-note.php?id=44316&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44316">
    <a href="/manual/vote-note.php?id=44316&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44316" title="66% like this...">
    2
    </div>
  </div>
  <a href="#44316" class="name">
  <strong class="user"><em>kees at tweakers dot net</em></strong></a><a class="genanchor" href="#44316"> &para;</a><div class="date" title="2004-07-20 06:26"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44316">
<div class="phpcode"><code><span class="html">From what i have been able to find from this function, it accepts the following arguments:<br />        IMG_FILTER_NEGATE<br />        IMG_FILTER_GRAYSCALE<br />        IMG_FILTER_EDGEDETECT<br />        IMG_FILTER_GAUSSIAN_BLUR<br />        IMG_FILTER_SELECTIVE_BLUR<br />        IMG_FILTER_EMBOSS<br />        IMG_FILTER_MEAN_REMOVAL<br /><br />The following arguments need one or more arguments.<br />        IMG_FILTER_SMOOTH, -1924.124<br />        IMG_FILTER_COLORIZE, -127.12, -127.98, 127<br />        IMG_FILTER_CONTRAST, -90<br />        IMG_FILTER_BRIGHTNESS, 98<br />        <br />I haven't tested them all, the names speak for themselves.</span></code></div>
  </div>
 </div>
  <div class="note" id="114277">  <div class="votes">
    <div id="Vu114277">
    <a href="/manual/vote-note.php?id=114277&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114277">
    <a href="/manual/vote-note.php?id=114277&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114277" title="no votes...">
    0
    </div>
  </div>
  <a href="#114277" class="name">
  <strong class="user"><em>Manolo at msalsas dot com</em></strong></a><a class="genanchor" href="#114277"> &para;</a><div class="date" title="2014-02-01 02:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114277">
<div class="phpcode"><code><span class="html">filtertype is an integer. So if you want to use it as a variable and need to use, e.g. preg_match function you can do it in this way:<br /><br /><span class="default">&lt;?php<br />    $filter </span><span class="keyword">= </span><span class="default">IMG_FILTER_BRIGHTNESS</span><span class="keyword">;<br />    if( </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">'/^[0-9]{1,2}$/'</span><span class="keyword">, </span><span class="default">$filter </span><span class="keyword">) )<br />    {<br />        </span><span class="comment">//Do something<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />The order of the filtertypes in this manual determines the number of each filter, from 0 to 11. E.g. IMG_FILTER_NEGATE=0.</span></code></div>
  </div>
 </div>
  <div class="note" id="110391">  <div class="votes">
    <div id="Vu110391">
    <a href="/manual/vote-note.php?id=110391&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110391">
    <a href="/manual/vote-note.php?id=110391&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110391" title="50% like this...">
    0
    </div>
  </div>
  <a href="#110391" class="name">
  <strong class="user"><em>martijn(97+1) at gmail dot com (solve math)</em></strong></a><a class="genanchor" href="#110391"> &para;</a><div class="date" title="2012-10-17 05:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110391">
<div class="phpcode"><code><span class="html">Simple pixelate function, just in case you are &lt; 5.3<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">pixelate</span><span class="keyword">(&amp;</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$pixelsize</span><span class="keyword">){<br />    </span><span class="default">$maxX </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$maxY </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$rad</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$pixelsize</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br />    for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">$rad</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$maxX</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">+=</span><span class="default">$pixelsize</span><span class="keyword">)<br />        for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">$rad</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$maxY</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">+=</span><span class="default">$pixelsize</span><span class="keyword">){<br />            </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">imagefilledrectangle </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">-</span><span class="default">$rad</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">-</span><span class="default">$rad</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">+</span><span class="default">$pixelsize</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">+</span><span class="default">$pixelsize</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />        }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104528">  <div class="votes">
    <div id="Vu104528">
    <a href="/manual/vote-note.php?id=104528&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104528">
    <a href="/manual/vote-note.php?id=104528&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104528" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104528" class="name">
  <strong class="user"><em>hadrien dot jouet at grownseed dot net</em></strong></a><a class="genanchor" href="#104528"> &para;</a><div class="date" title="2011-06-21 06:58"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104528">
<div class="phpcode"><code><span class="html">For people looking to apply a 'multiply' effect on images like the one in Photoshop (generally b&amp;w ones), you can achieve it with the IMG_FILTER_COLORIZE filter.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">multiplyColor</span><span class="keyword">(&amp;</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$color </span><span class="keyword">= array(</span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">))<br />{<br />   </span><span class="comment">//get opposite color<br />   </span><span class="default">$opposite </span><span class="keyword">= array(</span><span class="default">255 </span><span class="keyword">- </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">255 </span><span class="keyword">- </span><span class="default">$color</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">255 </span><span class="keyword">- </span><span class="default">$color</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br /><br />   </span><span class="comment">//now we subtract the opposite color from the image<br />   </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, -</span><span class="default">$opposite</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], -</span><span class="default">$opposite</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], -</span><span class="default">$opposite</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73944">  <div class="votes">
    <div id="Vu73944">
    <a href="/manual/vote-note.php?id=73944&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73944">
    <a href="/manual/vote-note.php?id=73944&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73944" title="100% like this...">
    1
    </div>
  </div>
  <a href="#73944" class="name">
  <strong class="user"><em>fananf at nerdshack dot com</em></strong></a><a class="genanchor" href="#73944"> &para;</a><div class="date" title="2007-03-16 09:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73944">
<div class="phpcode"><code><span class="html">If you're looking for fast sepia effect that can be used for on-the-fly thumbnails generation you can't use sophisticated functions. The faster and much better way than described by webmaster at qudi dot de in the note from 31-Jan-2006 is applying colorize filter AFTER grayscale.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">(...)<br /><br /></span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$yourimage</span><span class="keyword">, </span><span class="default">IMG_FILTER_GRAYSCALE</span><span class="keyword">); </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$yourimage</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">); <br /><br />(...)<br /><br /></span><span class="default">?&gt;<br /></span><br />I used (90,60,40) for my sepia after couple of tests, however, if you need darker or lighter just check what suits you best.</span></code></div>
  </div>
 </div>
  <div class="note" id="102966">  <div class="votes">
    <div id="Vu102966">
    <a href="/manual/vote-note.php?id=102966&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102966">
    <a href="/manual/vote-note.php?id=102966&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102966" title="50% like this...">
    0
    </div>
  </div>
  <a href="#102966" class="name">
  <strong class="user"><em>bushmakin stas (bushstas at mail dot ru)</em></strong></a><a class="genanchor" href="#102966"> &para;</a><div class="date" title="2011-03-17 12:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102966">
<div class="phpcode"><code><span class="html">a function to make all colors gray except the only one
<br />i made it myself so the code is note so beautiful )
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">imagecolorfilter</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">){
<br />    
<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);
<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);
<br />    for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){
<br />        for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++){
<br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">ImageColorAt</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);
<br />            </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />            </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />            </span><span class="default">$c</span><span class="keyword">=(</span><span class="default">$r</span><span class="keyword">+</span><span class="default">$g</span><span class="keyword">+</span><span class="default">$b</span><span class="keyword">)/</span><span class="default">3</span><span class="keyword">;
<br />            
<br /></span><span class="comment">//if($g&lt;$r || $g&lt;$b+20){$r=$c;$g=$c; $b=$c;}//leaves only green 
<br />//if($b&lt;$r || $b&lt;$g){$r=$c;$g=$c; $b=$c;}//only blue
<br /></span><span class="keyword">if(</span><span class="default">$r</span><span class="keyword">&lt;</span><span class="default">$g</span><span class="keyword">+</span><span class="default">30 </span><span class="keyword">|| </span><span class="default">$r</span><span class="keyword">&lt;</span><span class="default">$b</span><span class="keyword">){</span><span class="default">$r</span><span class="keyword">=</span><span class="default">$c</span><span class="keyword">;</span><span class="default">$g</span><span class="keyword">=</span><span class="default">$c</span><span class="keyword">; </span><span class="default">$b</span><span class="keyword">=</span><span class="default">$c</span><span class="keyword">;}</span><span class="comment">//only red
<br />//if($r&lt;$g-1 || $r&gt;$g+60 || $b&gt;$g-50){$r=$c;$g=$c; $b=$c;}//only yellow
<br />            
<br />            
<br /></span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">,</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">));
<br />        }
<br />    }
<br />}
<br />
<br /></span><span class="default">header </span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);
<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">"image.jpg"</span><span class="keyword">);
<br /></span><span class="default">imagecolorfilter</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);
<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45391">  <div class="votes">
    <div id="Vu45391">
    <a href="/manual/vote-note.php?id=45391&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45391">
    <a href="/manual/vote-note.php?id=45391&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45391" title="100% like this...">
    1
    </div>
  </div>
  <a href="#45391" class="name">
  <strong class="user"><em>vdepizzol at hotmail dot com</em></strong></a><a class="genanchor" href="#45391"> &para;</a><div class="date" title="2004-09-04 01:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45391">
<div class="phpcode"><code><span class="html">Examples using imagefilter():<br /><br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'dave.png'</span><span class="keyword">);<br />if (</span><span class="default">$im </span><span class="keyword">&amp;&amp; </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">IMG_FILTER_GRAYSCALE</span><span class="keyword">)) {<br />    echo </span><span class="string">'Image converted to grayscale.'</span><span class="keyword">;<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="string">'dave.png'</span><span class="keyword">);<br />} else {<br />    echo </span><span class="string">'Conversion to grayscale failed.'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />/////////////////////////////<br /><br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'sean.png'</span><span class="keyword">);<br />if (</span><span class="default">$im </span><span class="keyword">&amp;&amp; </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">IMG_FILTER_BRIGHTNESS</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">)) {<br />    echo </span><span class="string">'Image brightness changed.'</span><span class="keyword">;<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="string">'sean.png'</span><span class="keyword">);<br />} else {<br />    echo </span><span class="string">'Image brightness change failed.'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />/////////////////////////////<br /><br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'philip.png'</span><span class="keyword">);<br /><br /></span><span class="comment">/* R, G, B, so 0, 255, 0 is green */<br /></span><span class="keyword">if (</span><span class="default">$im </span><span class="keyword">&amp;&amp; </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) {<br />    echo </span><span class="string">'Image successfully shaded green.'</span><span class="keyword">;<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="string">'philip.png'</span><span class="keyword">);<br />} else {<br />    echo </span><span class="string">'Green shading failed.'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79337">  <div class="votes">
    <div id="Vu79337">
    <a href="/manual/vote-note.php?id=79337&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79337">
    <a href="/manual/vote-note.php?id=79337&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79337" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79337" class="name">
  <strong class="user"><em>michaeln no at spam associationsplus ca</em></strong></a><a class="genanchor" href="#79337"> &para;</a><div class="date" title="2007-11-21 08:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79337">
<div class="phpcode"><code><span class="html">Note: applying IMG_FILTER_EMBOSS to text and using in a customization to the CAPTCHA image script in phpBB or a project of your own is a very good way to stop OCR-ing bots from getting through. Embossed serif fonts are fairly easy for the human eye to understand but to an OCR script it is extremely difficult because it seems to give it the illusion of 3D. <br /><br />If you only allocate 2 or 3 colours in the image, it uses the background colour alot in the embossed text, which greatly contributes to this.<br /><br />I made my own custom CAPTCHA script to stop phpBB post spam for a client site I was developing and I have gone from getting 2-3 new spam users created every day to zero.<br /><br />Anything with the source code freely available out there right now is possible to be defeated by spammers once one of them stars sharing code with the other spammers, but if you run something at least someone custom, their bots will pass you over.</span></code></div>
  </div>
 </div>
  <div class="note" id="75003">  <div class="votes">
    <div id="Vu75003">
    <a href="/manual/vote-note.php?id=75003&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75003">
    <a href="/manual/vote-note.php?id=75003&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75003" title="no votes...">
    0
    </div>
  </div>
  <a href="#75003" class="name">
  <strong class="user"><em>webmaster at designsbykosi dot info</em></strong></a><a class="genanchor" href="#75003"> &para;</a><div class="date" title="2007-05-08 12:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75003">
<div class="phpcode"><code><span class="html">This will only work if you have php5. For php4, you'll have to use the sepia function set webmaster at qudi dot de suggested.</span></code></div>
  </div>
 </div>
  <div class="note" id="68626">  <div class="votes">
    <div id="Vu68626">
    <a href="/manual/vote-note.php?id=68626&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68626">
    <a href="/manual/vote-note.php?id=68626&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68626" title="no votes...">
    0
    </div>
  </div>
  <a href="#68626" class="name">
  <strong class="user"><em>nancy at hypertextdigital dot com</em></strong></a><a class="genanchor" href="#68626"> &para;</a><div class="date" title="2006-08-03 02:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68626">
<div class="phpcode"><code><span class="html">This routine was just what I was looking for, I wanted web admin users to be able to recolour their uploaded photos (to go with a news item) either a blue tint or sepia to match the appearance of other colours used on the website. <br /><br />Using a form with a select box containing the RGB values, I can give them the option of either of the two tints or no colourization at all, plus resize their images to the viewing size and a thumbnail image on the fly without having to use any other image editing software.</span></code></div>
  </div>
 </div>
  <div class="note" id="61317">  <div class="votes">
    <div id="Vu61317">
    <a href="/manual/vote-note.php?id=61317&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61317">
    <a href="/manual/vote-note.php?id=61317&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61317" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61317" class="name">
  <strong class="user"><em>webmaster at qudi dot de</em></strong></a><a class="genanchor" href="#61317"> &para;</a><div class="date" title="2006-01-31 06:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61317">
<div class="phpcode"><code><span class="html">for a quick, ok-looking, sepia-effect (also in php4) I just use this little fellow, since a real implementation of sepia was just way too slow.<br /><br />function pseudosepia(&amp;$im,$percent){<br />      $sx=imagesx($im);<br />      $sy=imagesy($im);<br />      $filter=imagecreatetruecolor($sx,$sy);<br />      $c=imagecolorallocate($filter,100,50,50);<br />      imagefilledrectangle($filter,0,0,$sx,$sy,$c);<br />      imagecopymerge($im,$filter,0,0,0,0,$sx,$sy,$percent);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="91796">  <div class="votes">
    <div id="Vu91796">
    <a href="/manual/vote-note.php?id=91796&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91796">
    <a href="/manual/vote-note.php?id=91796&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91796" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#91796" class="name">
  <strong class="user"><em>mail at kavisiegel dot com</em></strong></a><a class="genanchor" href="#91796"> &para;</a><div class="date" title="2009-06-25 11:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91796">
<div class="phpcode"><code><span class="html">Searching for a way to easily change the color of the image, I tried IMG_FILTER_COLORIZE. I was unable to get the quality results I wanted. It turns out PHP's Colorize is the equivalent of Photoshop's "Linear Dodge" layer filter. <br /><br />Hue adjustments have always worked well for me, so I figured I could try with PHP.<br />This function is kind of slow on larger images, but on small images like what I'm using it for, the difference is trivial.<br /><br />The script calculates the ratio or red, to green, to blue in the color provided, then scales the image appropriately... unfortunately, it does it pixel by pixel.<br /><br />Here's a demo and comparison of this function, to photoshop's hue function, to PHP's colorize. <a href="http://img146.imageshack.us/img146/3167/imagefilterhuedemo.png" rel="nofollow" target="_blank">http://img146.imageshack.us/img146/3167/imagefilterhuedemo.png</a><br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagefilterhue</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">){<br />    </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">+</span><span class="default">$g</span><span class="keyword">+</span><span class="default">$b</span><span class="keyword">;<br />    </span><span class="default">$col </span><span class="keyword">= array(</span><span class="default">$r</span><span class="keyword">/</span><span class="default">$rgb</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">/</span><span class="default">$rgb</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">/</span><span class="default">$rgb</span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){<br />        for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++){<br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">ImageColorAt</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$newR </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">$g</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + </span><span class="default">$b</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />            </span><span class="default">$newG </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] + </span><span class="default">$g</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">$b</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />            </span><span class="default">$newB </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + </span><span class="default">$g</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] + </span><span class="default">$b</span><span class="keyword">*</span><span class="default">$col</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">,</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$newR</span><span class="keyword">, </span><span class="default">$newG</span><span class="keyword">, </span><span class="default">$newB</span><span class="keyword">));<br />        }<br />    }<br />}<br /></span><span class="default">header </span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">"test.jpg"</span><span class="keyword">);<br /><br /></span><span class="comment">// Usage: Just as imagefilter(), except with no filtertype.<br />// imagefilterhue(resource $image, int $red, int $green , int $blue)<br /></span><span class="default">imagefilterhue</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">70</span><span class="keyword">,</span><span class="default">188</span><span class="keyword">);<br /><br /></span><span class="comment">// The equivalent with colorize, as tested in demo image: imagefilter($im, IMG_FILTER_COLORIZE, 2, 70, 188);<br /><br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59944">  <div class="votes">
    <div id="Vu59944">
    <a href="/manual/vote-note.php?id=59944&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59944">
    <a href="/manual/vote-note.php?id=59944&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59944" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#59944" class="name">
  <strong class="user"><em>a php user  at  nowhere dot com</em></strong></a><a class="genanchor" href="#59944"> &para;</a><div class="date" title="2005-12-20 12:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59944">
<div class="phpcode"><code><span class="html"><a href="http://www.hudzilla.org/phpbook/read.php/11_2_15" rel="nofollow" target="_blank">http://www.hudzilla.org/phpbook/read.php/11_2_15</a><br />for more detailed info, and some &lt;i&gt;arg&lt;/i&gt; guidelines.</span></code></div>
  </div>
 </div>
  <div class="note" id="119025">  <div class="votes">
    <div id="Vu119025">
    <a href="/manual/vote-note.php?id=119025&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119025">
    <a href="/manual/vote-note.php?id=119025&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119025" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#119025" class="name">
  <strong class="user"><em>shahilahmed4242 at gmail dot com</em></strong></a><a class="genanchor" href="#119025"> &para;</a><div class="date" title="2016-03-18 10:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119025">
<div class="phpcode"><code><span class="html">PHP Sepia Effect<br /><br />  $myImage = imagecreatefromjpeg($f);<br />  imagefilter($myImage,IMG_FILTER_GRAYSCALE);<br />  imagefilter($myImage,IMG_FILTER_BRIGHTNESS,-30);<br />  imagefilter($myImage,IMG_FILTER_COLORIZE, 90, 55, 30);  <br />  header("Content-type: image/jpeg");<br />  imagejpeg($myImage );<br />  imagejpeg($myImage,$f);<br />  imagedestroy( $myImage );</span></code></div>
  </div>
 </div>
  <div class="note" id="62395">  <div class="votes">
    <div id="Vu62395">
    <a href="/manual/vote-note.php?id=62395&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62395">
    <a href="/manual/vote-note.php?id=62395&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62395" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#62395" class="name">
  <strong class="user"><em>santibari at fibertel dot com</em></strong></a><a class="genanchor" href="#62395"> &para;</a><div class="date" title="2006-02-27 11:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62395">
<div class="phpcode"><code><span class="html">A colorize algorithm wich preserves color luminosity (i.e black <br />will output black, and white will output white).<br />This works in PHP4 and is great for customizing interfaces <br />dinamically.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">colorize</span><span class="keyword">(</span><span class="default">$img_src</span><span class="keyword">,</span><span class="default">$img_dest</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) <br />{<br />if(!</span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$img_src</span><span class="keyword">))<br />  return </span><span class="string">"Could not use image </span><span class="default">$img_src</span><span class="string">"</span><span class="keyword">; <br />    <br /></span><span class="comment">//We will create a monochromatic palette based on<br />//the input color<br />//which will go from black to white<br />//Input color luminosity: this is equivalent to the <br />//position of the input color in the monochromatic<br />//palette<br /></span><span class="default">$lum_inp</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">*(</span><span class="default">$r</span><span class="keyword">+</span><span class="default">$g</span><span class="keyword">+</span><span class="default">$b</span><span class="keyword">)/</span><span class="default">765</span><span class="keyword">); </span><span class="comment">//765=255*3<br /><br />//We fill the palette entry with the input color at its <br />//corresponding position<br /><br /></span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$lum_inp</span><span class="keyword">][</span><span class="string">'r'</span><span class="keyword">]=</span><span class="default">$r</span><span class="keyword">;<br /></span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$lum_inp</span><span class="keyword">][</span><span class="string">'g'</span><span class="keyword">]=</span><span class="default">$g</span><span class="keyword">;<br /></span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$lum_inp</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">]=</span><span class="default">$b</span><span class="keyword">;<br /><br /></span><span class="comment">//Now we complete the palette, first we'll do it to<br />//the black,and then to the white.<br /><br />//FROM input to black<br />//===================<br />//how many colors between black and input<br /></span><span class="default">$steps_to_black</span><span class="keyword">=</span><span class="default">$lum_inp</span><span class="keyword">;        <br /><br /></span><span class="comment">//The step size for each component<br /></span><span class="keyword">if(</span><span class="default">$steps_to_black</span><span class="keyword">)<br /> {<br /> </span><span class="default">$step_size_red</span><span class="keyword">=</span><span class="default">$r</span><span class="keyword">/</span><span class="default">$steps_to_black</span><span class="keyword">;    <br /> </span><span class="default">$step_size_green</span><span class="keyword">=</span><span class="default">$g</span><span class="keyword">/</span><span class="default">$steps_to_black</span><span class="keyword">;    <br /> </span><span class="default">$step_size_blue</span><span class="keyword">=</span><span class="default">$b</span><span class="keyword">/</span><span class="default">$steps_to_black</span><span class="keyword">;    <br /> }<br /><br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">$steps_to_black</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">--)<br /> {<br /> </span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$steps_to_black</span><span class="keyword">-</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'r'</span><span class="keyword">]=</span><span class="default">$r</span><span class="keyword">-</span><span class="default">round</span><span class="keyword">(</span><span class="default">$step_size_red</span><span class="keyword">*</span><span class="default">$i</span><span class="keyword">);<br /> </span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$steps_to_black</span><span class="keyword">-</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'g'</span><span class="keyword">]=</span><span class="default">$g</span><span class="keyword">-</span><span class="default">round</span><span class="keyword">(</span><span class="default">$step_size_green</span><span class="keyword">*</span><span class="default">$i</span><span class="keyword">);<br /> </span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$steps_to_black</span><span class="keyword">-</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">]=</span><span class="default">$b</span><span class="keyword">-</span><span class="default">round</span><span class="keyword">(</span><span class="default">$step_size_blue</span><span class="keyword">*</span><span class="default">$i</span><span class="keyword">);<br /> }<br /><br /></span><span class="comment">//From input to white:<br />//===================<br />//how many colors between input and white<br /></span><span class="default">$steps_to_white</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">-</span><span class="default">$lum_inp</span><span class="keyword">;<br /><br />if(</span><span class="default">$steps_to_white</span><span class="keyword">)<br />  {<br />  </span><span class="default">$step_size_red</span><span class="keyword">=(</span><span class="default">255</span><span class="keyword">-</span><span class="default">$r</span><span class="keyword">)/</span><span class="default">$steps_to_white</span><span class="keyword">;    <br />  </span><span class="default">$step_size_green</span><span class="keyword">=(</span><span class="default">255</span><span class="keyword">-</span><span class="default">$g</span><span class="keyword">)/</span><span class="default">$steps_to_white</span><span class="keyword">;    <br />  </span><span class="default">$step_size_blue</span><span class="keyword">=(</span><span class="default">255</span><span class="keyword">-</span><span class="default">$b</span><span class="keyword">)/</span><span class="default">$steps_to_white</span><span class="keyword">;    <br />  }<br /> else<br />  </span><span class="default">$step_size_red</span><span class="keyword">=</span><span class="default">$step_size_green</span><span class="keyword">=</span><span class="default">$step_size_blue</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br /><br /> </span><span class="comment">//The step size for each component<br /> </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=(</span><span class="default">$lum_inp</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">255</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)<br />  {<br />  </span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'r'</span><span class="keyword">]=</span><span class="default">$r </span><span class="keyword">+ </span><span class="default">round</span><span class="keyword">(</span><span class="default">$step_size_red</span><span class="keyword">*(</span><span class="default">$i</span><span class="keyword">-</span><span class="default">$lum_inp</span><span class="keyword">));<br />  </span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'g'</span><span class="keyword">]=</span><span class="default">$g </span><span class="keyword">+ </span><span class="default">round</span><span class="keyword">(</span><span class="default">$step_size_green</span><span class="keyword">*(</span><span class="default">$i</span><span class="keyword">-</span><span class="default">$lum_inp</span><span class="keyword">));<br />  </span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">]=</span><span class="default">$b </span><span class="keyword">+ </span><span class="default">round</span><span class="keyword">(</span><span class="default">$step_size_blue</span><span class="keyword">*(</span><span class="default">$i</span><span class="keyword">-</span><span class="default">$lum_inp</span><span class="keyword">));<br />  }<br /></span><span class="comment">//--- End of palette creation<br /><br />//Now,let's change the original palette into the one we<br />//created<br /></span><span class="keyword">for(</span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">$palette_size</span><span class="keyword">; </span><span class="default">$c</span><span class="keyword">++)<br /> { <br /> </span><span class="default">$col </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);          <br /> </span><span class="default">$lum_src</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">*(</span><span class="default">$col</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]+</span><span class="default">$col</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">]<br />                +</span><span class="default">$col</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">])/</span><span class="default">765</span><span class="keyword">);<br /> </span><span class="default">$col_out</span><span class="keyword">=</span><span class="default">$pal</span><span class="keyword">[</span><span class="default">$lum_src</span><span class="keyword">];<br /> </span><span class="default">imagecolorset</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$col_out</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">], <br />                                </span><span class="default">$col_out</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">],<br />                                </span><span class="default">$col_out</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">]);<br /> }<br /><br /> </span><span class="comment">//save the image file<br /> </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$img_dest</span><span class="keyword">);<br /> </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />}</span><span class="comment">//end function colorize<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110793">  <div class="votes">
    <div id="Vu110793">
    <a href="/manual/vote-note.php?id=110793&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110793">
    <a href="/manual/vote-note.php?id=110793&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110793" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#110793" class="name">
  <strong class="user"><em>Padde</em></strong></a><a class="genanchor" href="#110793"> &para;</a><div class="date" title="2012-12-08 07:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110793">
<div class="phpcode"><code><span class="html">I played with IMG_FILTER_SMOOTH and tried some negative<br />values.<br /><br />-1 to -7: looks like a mix of smoothness and edgedetect<br /><br />-8: image seems to be completely broken<br /><br />-9 and lower: kind of sharpening effect (-9 sharper than -10)<br /><br />I think the sharpening effect in particular could be useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="101159">  <div class="votes">
    <div id="Vu101159">
    <a href="/manual/vote-note.php?id=101159&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101159">
    <a href="/manual/vote-note.php?id=101159&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101159" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#101159" class="name">
  <strong class="user"><em>jonathan dot gotti  at gmail dot com</em></strong></a><a class="genanchor" href="#101159"> &para;</a><div class="date" title="2010-11-30 06:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101159">
<div class="phpcode"><code><span class="html">IMG_FILTER_COLORIZE doesn't seem to work on palette image, here's a way to achieve same result with palette image:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//$color is an array containing rvb infos (ie: array(255,80,0))<br /></span><span class="keyword">function </span><span class="default">paletteColorize</span><span class="keyword">(</span><span class="default">$imgResource</span><span class="keyword">,array </span><span class="default">$color</span><span class="keyword">){<br />    </span><span class="default">$nbColors </span><span class="keyword">= </span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$imgResource</span><span class="keyword">);<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nbColors</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">));<br />        for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">3</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++)<br />            </span><span class="default">$c</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">] = </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">min</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">]+</span><span class="default">$color</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">]));<br />        </span><span class="default">imagecolorset</span><span class="keyword">(</span><span class="default">$imgResource</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Here's also a function that work on both truecolor and palette images that try to do something similar to greyscale with a given color<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">colorScale</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">,array </span><span class="default">$color</span><span class="keyword">){<br />        </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">,</span><span class="default">IMG_FILTER_GRAYSCALE</span><span class="keyword">);<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">_read_color</span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">);<br />        </span><span class="default">$luminance</span><span class="keyword">=(</span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$color</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">$color</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])/</span><span class="default">3</span><span class="keyword">; </span><span class="comment">// average luminance added by the color<br />        </span><span class="default">$brightnessCorrection </span><span class="keyword">= </span><span class="default">$luminance</span><span class="keyword">/</span><span class="default">3</span><span class="keyword">; </span><span class="comment">// quantity of brightness to correct for each channel<br />        </span><span class="keyword">if( </span><span class="default">$luminance </span><span class="keyword">&lt; </span><span class="default">127 </span><span class="keyword">){<br />            </span><span class="default">$brightnessCorrection </span><span class="keyword">-= </span><span class="default">127</span><span class="keyword">/</span><span class="default">3</span><span class="keyword">; </span><span class="comment">// color is dark so we have to negate the brightness correction <br />        </span><span class="keyword">}<br />        if(! </span><span class="default">imageistruecolor</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">) ){<br />            </span><span class="default">$nbColors </span><span class="keyword">= </span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">);<br />            for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nbColors</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />                </span><span class="default">$c </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">imgagecolorsforindex</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">));<br />                for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">3</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++){<br />                    </span><span class="default">$c</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">] = </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">min</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">] + (</span><span class="default">$color</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">]-</span><span class="default">$luminance</span><span class="keyword">) + </span><span class="default">$brightnessCorrection</span><span class="keyword">) ); </span><span class="comment">// parentheses just for better comprehension<br />                </span><span class="keyword">}<br />                </span><span class="default">imagecolorset</span><span class="keyword">(</span><span class="default">$omgRes</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />            }<br />        }else{ </span><span class="comment">// much easier with truecolor<br />            </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-</span><span class="default">$luminance</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-</span><span class="default">$luminance</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]-</span><span class="default">$luminance</span><span class="keyword">);<br />            </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$imgRes</span><span class="keyword">, </span><span class="default">IMG_FILTER_BRIGHTNESS</span><span class="keyword">, </span><span class="default">$brightnessCorrection</span><span class="keyword">);<br />        }<br />}<br /></span><span class="default">?&gt;<br /></span><br />with hope that someone will find this useful</span></code></div>
  </div>
 </div>
  <div class="note" id="106344">  <div class="votes">
    <div id="Vu106344">
    <a href="/manual/vote-note.php?id=106344&amp;page=function.imagefilter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106344">
    <a href="/manual/vote-note.php?id=106344&amp;page=function.imagefilter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106344" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#106344" class="name">
  <strong class="user"><em>mail at pedrocandeias dot com</em></strong></a><a class="genanchor" href="#106344"> &para;</a><div class="date" title="2011-10-29 07:20"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106344">
<div class="phpcode"><code><span class="html">// With transparent PNG file you can colorize the "positive" items and stand the transparent has it is - Beta code<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);<br /><br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'image.png'</span><span class="keyword">);<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">$imn </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">$col</span><span class="keyword">=</span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">127</span><span class="keyword">);<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$col</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">, </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">, </span><span class="default">IMG_FILTER_NEGATE</span><span class="keyword">);<br /><br /></span><span class="comment">// FOR A TRANSPARENT PNG FILE WITH SOMETHING INSIDE, YOU CAN CHANGE THE COLOR HERE: I HAVE RGB: 0, 255, 0<br /></span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imn</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagefilter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilter.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
