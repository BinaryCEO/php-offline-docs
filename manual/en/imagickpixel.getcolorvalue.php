<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ImagickPixel::getColorValue - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/imagickpixel.getcolorvalue.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imagickpixel.getcolorvalue.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imagickpixel.getcolorvalue.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.imagickpixel.php">
 <link rel="prev" href="https://www.php.net/manual/en/imagickpixel.getcolorquantum.php">
 <link rel="next" href="https://www.php.net/manual/en/imagickpixel.getcolorvaluequantum.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imagickpixel.getcolorvalue.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imagickpixel.getcolorvalue.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imagickpixel.getcolorvalue.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imagickpixel.getcolorvalue.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imagickpixel.getcolorvalue.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imagickpixel.getcolorvalue.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imagickpixel.getcolorvalue.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imagickpixel.getcolorvalue.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imagickpixel.getcolorvalue.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imagickpixel.getcolorvalue.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imagickpixel.getcolorvalue.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets the normalized value of the provided color channel" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ImagickPixel::getColorValue - Manual" />
<meta name="twitter:description" content="Gets the normalized value of the provided color channel" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ImagickPixel::getColorValue - Manual" />
<meta itemprop="description" content="Gets the normalized value of the provided color channel" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets the normalized value of the provided color channel" />

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
        <a href="imagickpixel.getcolorvaluequantum.php">
          ImagickPixel::getColorValueQuantum &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imagickpixel.getcolorquantum.php">
          &laquo; ImagickPixel::getColorQuantum        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      <li><a href='class.imagickpixel.php'>ImagickPixel</a></li>      </ul>
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
            <option value='en/imagickpixel.getcolorvalue.php' selected="selected">English</option>
            <option value='de/imagickpixel.getcolorvalue.php'>German</option>
            <option value='es/imagickpixel.getcolorvalue.php'>Spanish</option>
            <option value='fr/imagickpixel.getcolorvalue.php'>French</option>
            <option value='it/imagickpixel.getcolorvalue.php'>Italian</option>
            <option value='ja/imagickpixel.getcolorvalue.php'>Japanese</option>
            <option value='pt_BR/imagickpixel.getcolorvalue.php'>Brazilian Portuguese</option>
            <option value='ru/imagickpixel.getcolorvalue.php'>Russian</option>
            <option value='tr/imagickpixel.getcolorvalue.php'>Turkish</option>
            <option value='uk/imagickpixel.getcolorvalue.php'>Ukrainian</option>
            <option value='zh/imagickpixel.getcolorvalue.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imagickpixel.getcolorvalue" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ImagickPixel::getColorValue</h1>
  <p class="verinfo">(PECL imagick 2, PECL imagick 3)</p><p class="refpurpose"><span class="refname">ImagickPixel::getColorValue</span> &mdash; <span class="dc-title">Gets the normalized value of the provided color channel</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-imagickpixel.getcolorvalue-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ImagickPixel::getColorValue</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="para rdfs-comment">
   Retrieves the value of the color channel specified, as a floating-point
   number between 0 and 1.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-imagickpixel.getcolorvalue-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       The color to get the value of, specified as one of the Imagick color
       constants. This can be one of the RGB colors, CMYK colors, alpha and
       opacity e.g (Imagick::COLOR_BLUE, Imagick::COLOR_MAGENTA).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-imagickpixel.getcolorvalue-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The value of the channel, as a normalized floating-point number, throwing
   ImagickPixelException on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-imagickpixel.getcolorvalue-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3204">
    <p><strong>Example #1 Basic <span class="function"><strong>Imagick::getColorValue()</strong></span> usage</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    <br />$color </span><span style="color: #007700">= new </span><span style="color: #0000BB">ImagickPixel</span><span style="color: #007700">(</span><span style="color: #DD0000">'rgba(90%, 20%, 20%, 0.75)'</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Alpha value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_ALPHA</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">""</span><span style="color: #007700">.</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Red value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_RED</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Green value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_GREEN</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Blue value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_BLUE</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">""</span><span style="color: #007700">.</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Cyan value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_CYAN</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Magenta value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_MAGENTA</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Yellow value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_YELLOW</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Black value is "</span><span style="color: #007700">.</span><span style="color: #0000BB">$color</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColorValue</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COLOR_BLACK</span><span style="color: #007700">).</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Alpha value is 0.74999618524453

Red value is 0.90000762951095
Green value is 0.2
Blue value is 0.2

Cyan value is 0.90000762951095
Magenta value is 0.2
Yellow value is 0.2
Black value is 0</pre>
</div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/imagickpixel/getcolorvalue.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimagickpixel.getcolorvalue%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imagickpixel.getcolorvalue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagickpixel.getcolorvalue.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124919">  <div class="votes">
    <div id="Vu124919">
    <a href="/manual/vote-note.php?id=124919&amp;page=imagickpixel.getcolorvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124919">
    <a href="/manual/vote-note.php?id=124919&amp;page=imagickpixel.getcolorvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124919" title="no votes...">
    0
    </div>
  </div>
  <a href="#124919" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124919"> &para;</a><div class="date" title="2020-04-16 08:21"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124919">
<div class="phpcode"><code><span class="html">COLOR_ALPHA - not fully transparent pixel<br />COLOR_OPACITY - completely transparent pixel</span></code></div>
  </div>
 </div>
  <div class="note" id="108192">  <div class="votes">
    <div id="Vu108192">
    <a href="/manual/vote-note.php?id=108192&amp;page=imagickpixel.getcolorvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108192">
    <a href="/manual/vote-note.php?id=108192&amp;page=imagickpixel.getcolorvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108192" title="no votes...">
    0
    </div>
  </div>
  <a href="#108192" class="name">
  <strong class="user"><em>holdoffhunger at gmail dot com</em></strong></a><a class="genanchor" href="#108192"> &para;</a><div class="date" title="2012-04-05 10:34"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108192">
<div class="phpcode"><code><span class="html">When getting a color value back with getColorValue, you are free to use any color scheme: either the Red/Green/Blue (RGB) scheme or the Cyan/Magenta/Yellow/blacK (CMYK) scheme.  For RGB, this function works with the constant values of "COLOR_RED", "COLOR_GREEN", and "COLOR_BLUE," and for CMYK, this function works with the constant values of "COLOR_CYAN", "COLOR_MAGENTA", "COLOR_YELLOW", and "COLOR_BLACK".  As a programmer, the main question you're probably asking yourself is "How do I know if one pixel's color is different from the others?"  That seems to be defined as a unique combination of RGB *or* CMYK values.  Each RGB set of values with have a unique set of CMYK values for only that set of RGB values, so an RGB of 1/0.5/0.5 with have a unique set of CMYK values, shared only by the other pixels of the same exact RGB values.<br /><br />Why the CMYK?  Because that is the standard for printing, or to quote the Imagick site, "As such for printing we use four colored inks: Cyan, Magenta, Yellow, and blacK; and define images using these inks, to form a CMYK color space."  By being a "color space", you get the choice of working with either RGB or CMYK when defining a pixel as being unique among a set of pixels.  But you are completely free to go with either RGB or CMYK.  For more on it from the Imagick Site:<br /><br /><a href="http://www.imagemagick.org/Usage/color_basics/" rel="nofollow" target="_blank">http://www.imagemagick.org/Usage/color_basics/</a><br /><br />Some code that demonstrates both methods: (for a purple-ish red pixel)<br /><br /><span class="default">&lt;?php<br /><br />        </span><span class="comment">// Grab Pixel<br />        // ---------------------------------------------------<br /><br />    </span><span class="default">$pixel_one </span><span class="keyword">= </span><span class="default">$imagick_type</span><span class="keyword">-&gt;</span><span class="default">getImagePixelColor</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /><br />        </span><span class="comment">// Grab Alpha/Opacity Values<br />        // ---------------------------------------------------<br />    <br />    </span><span class="default">$pixel_one_color_value_alpha </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_ALPHA</span><span class="keyword">);<br />    </span><span class="default">$pixel_one_color_value_opacity </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_OPACITY</span><span class="keyword">);<br /><br />        </span><span class="comment">// Grab Red/Green/Blue (RGB) Values<br />        // ---------------------------------------------------<br />    <br />    </span><span class="default">$pixel_one_color_value_red </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_RED</span><span class="keyword">);<br />    </span><span class="default">$pixel_one_color_value_green </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_GREEN</span><span class="keyword">);<br />    </span><span class="default">$pixel_one_color_value_blue </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_BLUE</span><span class="keyword">);<br /><br />        </span><span class="comment">// Grab Cyna/Magenta/Yellow/blacK (CMYK) Values<br />        // ---------------------------------------------------<br />    <br />    </span><span class="default">$pixel_one_color_value_cyan </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_CYAN</span><span class="keyword">);<br />    </span><span class="default">$pixel_one_color_value_magenta </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_MAGENTA</span><span class="keyword">);<br />    </span><span class="default">$pixel_one_color_value_yellow </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_YELLOW</span><span class="keyword">);<br />    </span><span class="default">$pixel_one_color_value_black </span><span class="keyword">= </span><span class="default">$pixel_one</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_BLACK</span><span class="keyword">);<br /><br />        </span><span class="comment">// Print Results<br />        // ---------------------------------------------------<br />    <br />    </span><span class="keyword">print(</span><span class="string">"Alpha: </span><span class="default">$pixel_one_color_value_alpha</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Opacity: </span><span class="default">$pixel_one_color_value_opacity</span><span class="string">&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br /><br />    print(</span><span class="string">"---------------------------------------------&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />    <br />    print(</span><span class="string">"Red: </span><span class="default">$pixel_one_color_value_red</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Green: </span><span class="default">$pixel_one_color_value_green</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Blue: </span><span class="default">$pixel_one_color_value_blue</span><span class="string">&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />    <br />    print(</span><span class="string">"Cyan: </span><span class="default">$pixel_one_color_value_cyan</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Magenta: </span><span class="default">$pixel_one_color_value_magenta</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Yellow: </span><span class="default">$pixel_one_color_value_yellow</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Black: </span><span class="default">$pixel_one_color_value_black</span><span class="string">&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br /><br />    </span><span class="comment">/*<br />            Example Results : : :<br />            -----------------------<br /><br />Alpha: 1<br />Opacity: 0<br /><br />---------------------------------------------<br /><br />Red: 1<br />Green: 0.501960784314<br />Blue: 0.501960784314<br /><br />Cyan: 1<br />Magenta: 0.501960784314<br />Yellow: 0.501960784314<br />Black: 0<br /><br />    */<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97956">  <div class="votes">
    <div id="Vu97956">
    <a href="/manual/vote-note.php?id=97956&amp;page=imagickpixel.getcolorvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97956">
    <a href="/manual/vote-note.php?id=97956&amp;page=imagickpixel.getcolorvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97956" title="no votes...">
    0
    </div>
  </div>
  <a href="#97956" class="name">
  <strong class="user"><em>mwwaygoo AT hotmail DOT com</em></strong></a><a class="genanchor" href="#97956"> &para;</a><div class="date" title="2010-05-18 03:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97956">
<div class="phpcode"><code><span class="html">QUOTE: $color   The channel to check, specified as one of the Imagick channel constants.<br /><br />$color is a COLOR_* constant, not a channel constant<br /><br />e.g.<br /><span class="default">&lt;?php<br />$image</span><span class="keyword">=new </span><span class="default">Imagick</span><span class="keyword">();<br /></span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">readImage</span><span class="keyword">(</span><span class="string">'test.png'</span><span class="keyword">);<br /></span><span class="default">$point</span><span class="keyword">=</span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">getImagePixelColor</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />echo </span><span class="string">' Alpha:'</span><span class="keyword">.</span><span class="default">$point</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_ALPHA</span><span class="keyword">);<br />echo </span><span class="string">' Opacity:'</span><span class="keyword">.</span><span class="default">$point</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_OPACITY</span><span class="keyword">);<br />echo </span><span class="string">' R:'</span><span class="keyword">.</span><span class="default">$point</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_RED</span><span class="keyword">);<br />echo </span><span class="string">' G:'</span><span class="keyword">.</span><span class="default">$point</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_GREEN</span><span class="keyword">);<br />echo </span><span class="string">' B:'</span><span class="keyword">.</span><span class="default">$point</span><span class="keyword">-&gt;</span><span class="default">getColorValue</span><span class="keyword">(</span><span class="default">imagick</span><span class="keyword">::</span><span class="default">COLOR_BLUE</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=imagickpixel.getcolorvalue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagickpixel.getcolorvalue.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.imagickpixel.php">ImagickPixel</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="imagickpixel.clear.php" title="clear">clear</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.destroy.php" title="destroy">destroy</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.getcolor.php" title="getColor">getColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.getcolorasstring.php" title="getColorAsString">getColorAsString</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.getcolorcount.php" title="getColorCount">getColorCount</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.getcolorquantum.php" title="getColorQuantum">getColorQuantum</a>
                        </li>
                                                <li class="current">
                            <a href="imagickpixel.getcolorvalue.php" title="getColorValue">getColorValue</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.getcolorvaluequantum.php" title="getColorValueQuantum">getColorValueQuantum</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.gethsl.php" title="getHSL">getHSL</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.getindex.php" title="getIndex">getIndex</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.ispixelsimilar.php" title="isPixelSimilar">isPixelSimilar</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.ispixelsimilarquantum.php" title="isPixelSimilarQuantum">isPixelSimilarQuantum</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.issimilar.php" title="isSimilar">isSimilar</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.setcolor.php" title="setColor">setColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.setcolorcount.php" title="setColorCount">setColorCount</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.setcolorvalue.php" title="setColorValue">setColorValue</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.setcolorvaluequantum.php" title="setColorValueQuantum">setColorValueQuantum</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.sethsl.php" title="setHSL">setHSL</a>
                        </li>
                                                <li class="">
                            <a href="imagickpixel.setindex.php" title="setIndex">setIndex</a>
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
