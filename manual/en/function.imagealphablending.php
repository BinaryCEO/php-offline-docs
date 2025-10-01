<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagealphablending - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagealphablending.php">
 <link rel="shorturl" href="https://www.php.net/imagealphablending">
 <link rel="alternate" href="https://www.php.net/imagealphablending" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imageaffinematrixget.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imageantialias.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagealphablending.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagealphablending.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagealphablending.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagealphablending.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagealphablending.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagealphablending.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagealphablending.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagealphablending.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagealphablending.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagealphablending.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagealphablending.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the blending mode for an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagealphablending - Manual" />
<meta name="twitter:description" content="Set the blending mode for an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagealphablending - Manual" />
<meta itemprop="description" content="Set the blending mode for an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the blending mode for an image" />

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
        <a href="function.imageantialias.php">
          imageantialias &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imageaffinematrixget.php">
          &laquo; imageaffinematrixget        </a>
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
            <option value='en/function.imagealphablending.php' selected="selected">English</option>
            <option value='de/function.imagealphablending.php'>German</option>
            <option value='es/function.imagealphablending.php'>Spanish</option>
            <option value='fr/function.imagealphablending.php'>French</option>
            <option value='it/function.imagealphablending.php'>Italian</option>
            <option value='ja/function.imagealphablending.php'>Japanese</option>
            <option value='pt_BR/function.imagealphablending.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagealphablending.php'>Russian</option>
            <option value='tr/function.imagealphablending.php'>Turkish</option>
            <option value='uk/function.imagealphablending.php'>Ukrainian</option>
            <option value='zh/function.imagealphablending.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagealphablending" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagealphablending</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagealphablending</span> &mdash; <span class="dc-title">Set the blending mode for an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagealphablending-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagealphablending</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enable</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagealphablending()</strong></span> allows for two different
   modes of drawing on truecolor images. In blending mode, the
   alpha channel component of the color supplied to all drawing function,
   such as <span class="function"><a href="function.imagesetpixel.php" class="function">imagesetpixel()</a></span> determines how much of the
   underlying color should be allowed to shine through.  As a result, gd
   automatically blends the existing color at that point with the drawing color,
   and stores the result in the image.  The resulting pixel is opaque.  In
   non-blending mode, the drawing color is copied literally with its alpha channel
   information, replacing the destination pixel.  Blending mode is not available
   when drawing on palette images.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagealphablending-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">enable</code></dt>
     <dd>
      <p class="para">
       Whether to enable the blending mode or not. On true color images 
       the default value is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> otherwise the default value is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagealphablending-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagealphablending-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagealphablending-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2831">
   <p><strong>Example #1 <span class="function"><strong>imagealphablending()</strong></span> usage example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set alphablending to on<br /></span><span style="color: #0000BB">imagealphablending</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw a square<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">, </span><span style="color: #0000BB">70</span><span style="color: #007700">, </span><span style="color: #0000BB">70</span><span style="color: #007700">, </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Output<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagealphablending.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagealphablending%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagealphablending&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagealphablending.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="16005">  <div class="votes">
    <div id="Vu16005">
    <a href="/manual/vote-note.php?id=16005&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16005">
    <a href="/manual/vote-note.php?id=16005&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16005" title="83% like this...">
    8
    </div>
  </div>
  <a href="#16005" class="name">
  <strong class="user"><em>barnabas at kendall dot NOSPAM dot net</em></strong></a><a class="genanchor" href="#16005"> &para;</a><div class="date" title="2001-10-11 05:56"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16005">
<div class="phpcode"><code><span class="html">If you are trying to copy a transparant image on to another image, you might assume that you should apply the ImageAlphaBlending function to the image that has the transparancy, the source image. In reality, you must apply the ImageAlphaBlending function to the destination image. Basically it's saying, "make the specified image respect transparancy".
<br />
<br />Here's a real world example. Suppose you want to put your logo on the upper left corner of a photograph. Your logo is a PNG with transparancy, and the photo is a JPEG. Here's what you would do:
<br />
<br /><span class="default">&lt;?php
<br />$photoImage </span><span class="keyword">= </span><span class="default">ImageCreateFromJPEG</span><span class="keyword">(</span><span class="string">'photo.jpg'</span><span class="keyword">);
<br /></span><span class="default">ImageAlphaBlending</span><span class="keyword">(</span><span class="default">$photoImage</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />
<br /></span><span class="default">$logoImage </span><span class="keyword">= </span><span class="default">ImageCreateFromPNG</span><span class="keyword">(</span><span class="string">'logo.png'</span><span class="keyword">);
<br /></span><span class="default">$logoW </span><span class="keyword">= </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$logoImage</span><span class="keyword">);
<br /></span><span class="default">$logoH </span><span class="keyword">= </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$logoImage</span><span class="keyword">);
<br />
<br /></span><span class="default">ImageCopy</span><span class="keyword">(</span><span class="default">$photoImage</span><span class="keyword">, </span><span class="default">$logoImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$logoW</span><span class="keyword">, </span><span class="default">$logoH</span><span class="keyword">);
<br />
<br /></span><span class="default">ImageJPEG</span><span class="keyword">(</span><span class="default">$photoImage</span><span class="keyword">); </span><span class="comment">// output to browser
<br />
<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$photoImage</span><span class="keyword">);
<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$logoImage</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53548">  <div class="votes">
    <div id="Vu53548">
    <a href="/manual/vote-note.php?id=53548&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53548">
    <a href="/manual/vote-note.php?id=53548&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53548" title="70% like this...">
    8
    </div>
  </div>
  <a href="#53548" class="name">
  <strong class="user"><em>Jakub Argasi?ski</em></strong></a><a class="genanchor" href="#53548"> &para;</a><div class="date" title="2005-06-05 11:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53548">
<div class="phpcode"><code><span class="html">I have been looking around for a while to find a script which does the following: generates image with text using specified font with given color, but with totally transparent background (by alpha-channnel, not via color transparency). Finally, I have created the script by myself. It's just a rough idea how to do it.<br /><br /><span class="default">&lt;?php<br />$tekst </span><span class="keyword">= </span><span class="string">"This is a test message\nza???? g??l? ja??!\nZA?ӣ? GʦL? JA???"</span><span class="keyword">;<br /><br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">9</span><span class="keyword">;<br /><br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">imageTTFBBox</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">"arial.ttf"</span><span class="keyword">, </span><span class="default">$tekst</span><span class="keyword">);<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) + </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]));<br /></span><span class="default">imageSaveAlpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">ImageAlphaBlending</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); <br /><br /></span><span class="default">$tlo </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tlo</span><span class="keyword">);<br /><br /></span><span class="default">$napis </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]), </span><span class="default">$napis</span><span class="keyword">, </span><span class="string">"arial.ttf"</span><span class="keyword">, </span><span class="default">$tekst</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="string">"output.png"</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>&lt;html&gt;<br />&lt;head&gt;<br />&lt;/head&gt;<br />&lt;body bgcolor="#808080"&gt;<br />&lt;img src="output.png" alt=""&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="69058">  <div class="votes">
    <div id="Vu69058">
    <a href="/manual/vote-note.php?id=69058&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69058">
    <a href="/manual/vote-note.php?id=69058&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69058" title="83% like this...">
    4
    </div>
  </div>
  <a href="#69058" class="name">
  <strong class="user"><em>luke dot stanley at gmail dot com</em></strong></a><a class="genanchor" href="#69058"> &para;</a><div class="date" title="2006-08-21 01:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69058">
<div class="phpcode"><code><span class="html">"If imagealphablending os set to true and you want to merge two images, you are left with no transparency. If it is set to false, only the transparency of the second image is respected, causing no parts of the first image to be shown. To solve this use the following function:"<br /><br />dscharrer at gmail dot com offered this without a use example, so here is one:<br /><br />&lt;?<br /><br />$flag = imagecreatefrompng('a.png');<br />$mask = imagecreatefrompng('b.png');<br /><br />imagealphablending($flag, 1);<br />imagealphablending($mask, 1);<br />$i= array($flag, $mask); // here is the array of images, using the above specified $flag and $mask images<br /><br />$s = imagemergealpha($i);<br /><br />header("Content-type: image/png");<br />imagepng($s);<br /><br />//Merge multiple images and keep transparency<br /><br />//$i is and array of the images to be merged:<br />// $i[1] will be overlayed over $i[0]<br />// $i[2] will be overlayed over that<br />// ...<br /><br />//the function returns the resulting image ready for saving<br /><br />function imagemergealpha($i) {<br /><br /> //create a new image<br /> $s = imagecreatetruecolor(imagesx($i[0]),imagesy($i[1]));<br /> <br /> //merge all images<br /> imagealphablending($s,true);<br /> $z = $i;<br /> while($d = each($z)) {<br />  imagecopy($s,$d[1],0,0,0,0,imagesx($d[1]),imagesy($d[1]));<br /> }<br /> <br /> //restore the transparency<br /> imagealphablending($s,false);<br /> $w = imagesx($s);<br /> $h = imagesy($s);<br /> for($x=0;$x&lt;$w;$x++) {<br />  for($y=0;$y&lt;$h;$y++) {<br />   $c = imagecolorat($s,$x,$y);<br />   $c = imagecolorsforindex($s,$c);<br />   $z = $i;<br />   $t = 0;<br />   while($d = each($z)) {<br />   $ta = imagecolorat($d[1],$x,$y);<br />   $ta = imagecolorsforindex($d[1],$ta);<br />   $t += 127-$ta['alpha'];<br />   }<br />   $t = ($t &gt; 127) ? 127 : $t;<br />   $t = 127-$t;<br />   $c = imagecolorallocatealpha($s,$c['red'],$c['green'],$c['blue'],$t);<br />   imagesetpixel($s,$x,$y,$c);<br />  }<br /> }<br /> imagesavealpha($s,true);<br /> return $s;<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="37481">  <div class="votes">
    <div id="Vu37481">
    <a href="/manual/vote-note.php?id=37481&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37481">
    <a href="/manual/vote-note.php?id=37481&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37481" title="80% like this...">
    3
    </div>
  </div>
  <a href="#37481" class="name">
  <strong class="user"><em>www.deebster.com</em></strong></a><a class="genanchor" href="#37481"> &para;</a><div class="date" title="2003-11-17 03:12"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37481">
<div class="phpcode"><code><span class="html">Your target image resource not must be paletted if you want to use blending.<br /><br />This means using ImageCreateTrueColor() rather than ImageCreate().<br /><br />(If your source is e.g. a jpeg and you've used ImageCreateFromJPEG(), the above is irrelevant.)</span></code></div>
  </div>
 </div>
  <div class="note" id="77085">  <div class="votes">
    <div id="Vu77085">
    <a href="/manual/vote-note.php?id=77085&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77085">
    <a href="/manual/vote-note.php?id=77085&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77085" title="60% like this...">
    2
    </div>
  </div>
  <a href="#77085" class="name">
  <strong class="user"><em>jeppe dot dyrby at gmail dot com</em></strong></a><a class="genanchor" href="#77085"> &para;</a><div class="date" title="2007-08-14 07:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77085">
<div class="phpcode"><code><span class="html">I have create a little function for putting a watermark on any picture.
<br />Watermark can be png, with transparency, and the watermark can be placed anywhere on the image, using simple strings such as 'bottom-left', or 'center'.
<br />
<br />&lt;?
<br />function imagelogo (&amp;$dst_image, $src_image, $dst_w, $dst_h, $src_w, $src_h, $position='bottom-left') {
<br />    imagealphablending($dst_image,true);
<br />    imagealphablending($src_image,true);
<br />    if ($position == 'random') {
<br />        $position = rand(1,8);
<br />    }
<br />    switch ($position) {
<br />        case 'top-right':
<br />        case 'right-top':
<br />        case 1:
<br />            imagecopy($dst_image, $src_image, ($dst_w-$src_w), 0, 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'top-left':
<br />        case 'left-top':
<br />        case 2:
<br />            imagecopy($dst_image, $src_image, 0, 0, 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'bottom-right':
<br />        case 'right-bottom':
<br />        case 3:
<br />            imagecopy($dst_image, $src_image, ($dst_w-$src_w), ($dst_h-$src_h), 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'bottom-left':
<br />        case 'left-bottom':
<br />        case 4:
<br />            imagecopy($dst_image, $src_image, 0 , ($dst_h-$src_h), 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'center':
<br />        case 5:
<br />            imagecopy($dst_image, $src_image, (($dst_w/2)-($src_w/2)), (($dst_h/2)-($src_h/2)), 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'top':
<br />        case 6:
<br />            imagecopy($dst_image, $src_image, (($dst_w/2)-($src_w/2)), 0, 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'bottom':
<br />        case 7:
<br />            imagecopy($dst_image, $src_image, (($dst_w/2)-($src_w/2)), ($dst_h-$src_h), 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'left':
<br />        case 8:
<br />            imagecopy($dst_image, $src_image, 0, (($dst_h/2)-($src_h/2)), 0, 0, $src_w, $src_h);
<br />        break;
<br />        case 'right':
<br />        case 9:
<br />            imagecopy($dst_image, $src_image, ($dst_w-$src_w), (($dst_h/2)-($src_h/2)), 0, 0, $src_w, $src_h);
<br />        break;
<br />    }
<br />}
<br />
<br />// example:
<br />
<br />imagelogo($image, $watermark, imagesx($image), imagesy($image), imagesx($watermark), imagesy($watermark), 'random');
<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="71765">  <div class="votes">
    <div id="Vu71765">
    <a href="/manual/vote-note.php?id=71765&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71765">
    <a href="/manual/vote-note.php?id=71765&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71765" title="60% like this...">
    1
    </div>
  </div>
  <a href="#71765" class="name">
  <strong class="user"><em>JAYPEEsorenATgeeMail</em></strong></a><a class="genanchor" href="#71765"> &para;</a><div class="date" title="2006-12-14 01:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71765">
<div class="phpcode"><code><span class="html">I rewrote the code given below to skip calculations and pixel setting when not needed (full opaque or full transparent pixels), as the content of my overlays is generally mostly transparent. Reduced processing time from ~0.17s to ~0.06s on 216x145px images.<br /><br />function alphaOverlay($destImg, $overlayImg, $imgW, $imgH)<br />{<br />    for($y=0;$y&lt;$imgH;$y++)<br />    {<br />        for($x=0;$x&lt;$imgW;$x++)<br />        {<br />            $ovrARGB = imagecolorat($overlayImg, $x, $y);<br />            $ovrA = ($ovrARGB &gt;&gt; 24) &lt;&lt; 1;<br />            $ovrR = $ovrARGB &gt;&gt; 16 &amp; 0xFF;<br />            $ovrG = $ovrARGB &gt;&gt; 8 &amp; 0xFF;<br />            $ovrB = $ovrARGB &amp; 0xFF;<br />            <br />            $change = false;<br />            if($ovrA == 0)<br />            {<br />                $dstR = $ovrR;<br />                $dstG = $ovrG;<br />                $dstB = $ovrB;<br />                $change = true;<br />            }<br />            elseif($ovrA &lt; 254)<br />            {<br />                $dstARGB = imagecolorat($destImg, $x, $y);<br />                $dstR = $dstARGB &gt;&gt; 16 &amp; 0xFF;<br />                $dstG = $dstARGB &gt;&gt; 8 &amp; 0xFF;<br />                $dstB = $dstARGB &amp; 0xFF;<br />                <br />                $dstR = (($ovrR * (0xFF-$ovrA)) &gt;&gt; 8) + (($dstR * $ovrA) &gt;&gt; 8);<br />                $dstG = (($ovrG * (0xFF-$ovrA)) &gt;&gt; 8) + (($dstG * $ovrA) &gt;&gt; 8);<br />                $dstB = (($ovrB * (0xFF-$ovrA)) &gt;&gt; 8) + (($dstB * $ovrA) &gt;&gt; 8);<br />                $change = true;<br />            }<br />            if($change)<br />            {<br />                $dstRGB = imagecolorallocatealpha($destImg, $dstR, $dstG, $dstB, 0);<br />                imagesetpixel($destImg, $x, $y, $dstRGB);<br />            }<br />                <br />        }<br />    }<br />    return $destImg;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="40372">  <div class="votes">
    <div id="Vu40372">
    <a href="/manual/vote-note.php?id=40372&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40372">
    <a href="/manual/vote-note.php?id=40372&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40372" title="60% like this...">
    1
    </div>
  </div>
  <a href="#40372" class="name">
  <strong class="user"><em>joe AT cerberon DOT net</em></strong></a><a class="genanchor" href="#40372"> &para;</a><div class="date" title="2004-03-01 05:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40372">
<div class="phpcode"><code><span class="html">Note that alpha blending must be enabled to render antialiased text in true color mode.<br /><br />For OLDER versions of PHP and/or GD (e.g. which comes with Debian woody) alpha blending is DISABLED by default and it is ENABLED for NEWER versions.</span></code></div>
  </div>
 </div>
  <div class="note" id="71314">  <div class="votes">
    <div id="Vu71314">
    <a href="/manual/vote-note.php?id=71314&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71314">
    <a href="/manual/vote-note.php?id=71314&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71314" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71314" class="name">
  <strong class="user"><em>roONLYycoLOWERCAneSEjo at gmail dot com</em></strong></a><a class="genanchor" href="#71314"> &para;</a><div class="date" title="2006-11-21 10:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71314">
<div class="phpcode"><code><span class="html">Roy Conejo says:<br /><br />I' had to "per-pixel alpha blend" an image into a solid background, as seen on the very concise example from "barnabas at kendall dot NOSPAM dot net": an alpha blended .png logo on a .jpg photograph. The problem was... it doesn't worked out at all here (why? T_T).<br /><br />Note that I'm using just the source alpha to determine how much colour from source and destination will be present on the final pixel... and that I've to multiply the alpha value (0 - 127) by 2 because I need it to be 8 bits for the calculations.<br /><br />I think the code is pretty fast, no decimals, no rounding, no unnecesary coding. Bound checking or clipping could be implemented if you really need to.<br /><br />I hope it helps someone on my same situation ^.^<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">## BEGIN of function alpha_blending -------------------------------------------<br />    </span><span class="keyword">function<br />    </span><span class="default">alpha_blending </span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">$dest_x</span><span class="keyword">, </span><span class="default">$dest_y</span><span class="keyword">) {<br />    <br />        </span><span class="comment">## lets blend source pixels with source alpha into destination =)<br />        </span><span class="keyword">for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) {<br />            for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) {<br />                            <br />                </span><span class="default">$argb_s </span><span class="keyword">= </span><span class="default">imagecolorat </span><span class="keyword">(</span><span class="default">$source    </span><span class="keyword">,</span><span class="default">$x            </span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">);<br />                </span><span class="default">$argb_d </span><span class="keyword">= </span><span class="default">imagecolorat </span><span class="keyword">(</span><span class="default">$dest    </span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">+</span><span class="default">$dest_x    </span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">+</span><span class="default">$dest_y</span><span class="keyword">);<br />                            <br />                </span><span class="default">$a_s    </span><span class="keyword">= (</span><span class="default">$argb_s </span><span class="keyword">&gt;&gt; </span><span class="default">24</span><span class="keyword">) &lt;&lt; </span><span class="default">1</span><span class="keyword">; </span><span class="comment">## 7 to 8 bits.<br />                </span><span class="default">$r_s    </span><span class="keyword">=  </span><span class="default">$argb_s </span><span class="keyword">&gt;&gt; </span><span class="default">16     </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$g_s    </span><span class="keyword">=  </span><span class="default">$argb_s </span><span class="keyword">&gt;&gt;  </span><span class="default">8    </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$b_s    </span><span class="keyword">=  </span><span class="default">$argb_s            </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                                <br />                </span><span class="default">$r_d    </span><span class="keyword">=  </span><span class="default">$argb_d </span><span class="keyword">&gt;&gt; </span><span class="default">16    </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$g_d    </span><span class="keyword">=  </span><span class="default">$argb_d </span><span class="keyword">&gt;&gt;  </span><span class="default">8    </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$b_d    </span><span class="keyword">=  </span><span class="default">$argb_d            </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                                <br />                </span><span class="comment">## source pixel 100% opaque (alpha == 0)<br />                </span><span class="keyword">if (</span><span class="default">$a_s </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) { <br />                    </span><span class="default">$r_d </span><span class="keyword">= </span><span class="default">$r_s</span><span class="keyword">; </span><span class="default">$g_d </span><span class="keyword">= </span><span class="default">$g_s</span><span class="keyword">; </span><span class="default">$b_d </span><span class="keyword">= </span><span class="default">$b_s</span><span class="keyword">;<br />                } <br />                </span><span class="comment">## source pixel 100% transparent (alpha == 255)<br />                </span><span class="keyword">else if (</span><span class="default">$a_s </span><span class="keyword">&gt; </span><span class="default">253</span><span class="keyword">) {<br />                </span><span class="comment">## using source alpha only, we have to mix (100-"some") percent <br />                ## of source with "some" percent of destination.<br />                </span><span class="keyword">} else {<br />                    </span><span class="default">$r_d </span><span class="keyword">= ((</span><span class="default">$r_s </span><span class="keyword">* (</span><span class="default">0xFF</span><span class="keyword">-</span><span class="default">$a_s</span><span class="keyword">)) &gt;&gt; </span><span class="default">8</span><span class="keyword">) + ((</span><span class="default">$r_d </span><span class="keyword">* </span><span class="default">$a_s</span><span class="keyword">) &gt;&gt; </span><span class="default">8</span><span class="keyword">);<br />                    </span><span class="default">$g_d </span><span class="keyword">= ((</span><span class="default">$g_s </span><span class="keyword">* (</span><span class="default">0xFF</span><span class="keyword">-</span><span class="default">$a_s</span><span class="keyword">)) &gt;&gt; </span><span class="default">8</span><span class="keyword">) + ((</span><span class="default">$g_d </span><span class="keyword">* </span><span class="default">$a_s</span><span class="keyword">) &gt;&gt; </span><span class="default">8</span><span class="keyword">);<br />                    </span><span class="default">$b_d </span><span class="keyword">= ((</span><span class="default">$b_s </span><span class="keyword">* (</span><span class="default">0xFF</span><span class="keyword">-</span><span class="default">$a_s</span><span class="keyword">)) &gt;&gt; </span><span class="default">8</span><span class="keyword">) + ((</span><span class="default">$b_d </span><span class="keyword">* </span><span class="default">$a_s</span><span class="keyword">) &gt;&gt; </span><span class="default">8</span><span class="keyword">);<br />                }<br />                                <br />                </span><span class="default">$rgb_d </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha </span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$r_d</span><span class="keyword">, </span><span class="default">$g_d</span><span class="keyword">, </span><span class="default">$b_d</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />                </span><span class="default">imagesetpixel </span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$rgb_d</span><span class="keyword">);<br />            }<br />        }<br />    }<br />    </span><span class="comment">## END of function alpha_blending -------------------------------------------<br />    <br />    <br />    <br />    ## let's start loading images as usual...<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefrompng </span><span class="keyword">(</span><span class="string">'logo.png'</span><span class="keyword">);<br />    </span><span class="default">$dest    </span><span class="keyword">= </span><span class="default">imagecreatefromjpg </span><span class="keyword">(</span><span class="string">'photo.jpg'</span><span class="keyword">);<br /><br />    </span><span class="comment">## alpha blend $source into $dest starting at 10, 5.<br />    </span><span class="default">alpha_blending </span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);    <br />    <br />    </span><span class="comment">## here you'll have to save "$dest" or send it to the browser...<br />    ## <br />    <br />    </span><span class="default">imagedestroy </span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);<br />    </span><span class="default">imagedestroy </span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">);<br />    <br /></span><span class="default">?&gt;<br /></span><br />eof =p</span></code></div>
  </div>
 </div>
  <div class="note" id="33539">  <div class="votes">
    <div id="Vu33539">
    <a href="/manual/vote-note.php?id=33539&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33539">
    <a href="/manual/vote-note.php?id=33539&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33539" title="50% like this...">
    0
    </div>
  </div>
  <a href="#33539" class="name">
  <strong class="user"><em>boo at php dot net</em></strong></a><a class="genanchor" href="#33539"> &para;</a><div class="date" title="2003-06-30 02:18"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33539">
<div class="phpcode"><code><span class="html">Notice that AlphaBlending is ON by default.<br />So, only use this function if you don't want to use AlphaBlending.</span></code></div>
  </div>
 </div>
  <div class="note" id="83282">  <div class="votes">
    <div id="Vu83282">
    <a href="/manual/vote-note.php?id=83282&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83282">
    <a href="/manual/vote-note.php?id=83282&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83282" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#83282" class="name">
  <strong class="user"><em>klaproth at creative-mindworks dot de</em></strong></a><a class="genanchor" href="#83282"> &para;</a><div class="date" title="2008-05-18 10:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83282">
<div class="phpcode"><code><span class="html">I have written a function that takes an image as parameter and returns the same image with a reflection effect (often seen in WEB 2.0 sites). I have not performance-tested this with large image files, for thumbnails it works fine (requires PHP 4.3.2 or above, or PHP5).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagereflection</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">) {<br />  </span><span class="default">$src_height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);<br />  </span><span class="default">$src_width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);<br />  </span><span class="default">$dest_height </span><span class="keyword">= </span><span class="default">$src_height </span><span class="keyword">+ (</span><span class="default">$src_height </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">);<br />  </span><span class="default">$dest_width </span><span class="keyword">= </span><span class="default">$src_width</span><span class="keyword">;<br />  <br />  </span><span class="default">$reflected </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dest_width</span><span class="keyword">, </span><span class="default">$dest_height</span><span class="keyword">);<br />  </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$reflected</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />  </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$reflected</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  <br />  </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$reflected</span><span class="keyword">, </span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_width</span><span class="keyword">, </span><span class="default">$src_height</span><span class="keyword">);<br />  </span><span class="default">$reflection_height </span><span class="keyword">= </span><span class="default">$src_height </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;<br />  </span><span class="default">$alpha_step </span><span class="keyword">= </span><span class="default">80 </span><span class="keyword">/ </span><span class="default">$reflection_height</span><span class="keyword">;<br />  for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt;= </span><span class="default">$reflection_height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {<br />    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$dest_width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />      </span><span class="comment">// copy pixel from x / $src_height - y to x / $src_height + y<br />      </span><span class="default">$rgba </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$src_height </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">);<br />      </span><span class="default">$alpha </span><span class="keyword">= (</span><span class="default">$rgba </span><span class="keyword">&amp; </span><span class="default">0x7F000000</span><span class="keyword">) &gt;&gt; </span><span class="default">24</span><span class="keyword">;<br />      </span><span class="default">$alpha </span><span class="keyword">=  </span><span class="default">max</span><span class="keyword">(</span><span class="default">$alpha</span><span class="keyword">, </span><span class="default">47 </span><span class="keyword">+ (</span><span class="default">$y </span><span class="keyword">* </span><span class="default">$alpha_step</span><span class="keyword">));<br />      </span><span class="default">$rgba </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$rgba</span><span class="keyword">);<br />      </span><span class="default">$rgba </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$reflected</span><span class="keyword">, </span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">], </span><span class="default">$alpha</span><span class="keyword">);<br />      </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$reflected</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$src_height </span><span class="keyword">+ </span><span class="default">$y </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$rgba</span><span class="keyword">);<br />    }<br />  }<br />  <br />  return </span><span class="default">$reflected</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />This is rather hot-coded. You could go on and extract some of the values as parameters (80 is the transparency start value, $height / 2 is the reflection area...).<br /><br />Cheers,<br />Christian</span></code></div>
  </div>
 </div>
  <div class="note" id="69344">  <div class="votes">
    <div id="Vu69344">
    <a href="/manual/vote-note.php?id=69344&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69344">
    <a href="/manual/vote-note.php?id=69344&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69344" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#69344" class="name">
  <strong class="user"><em>Raisul Kabir Ruman</em></strong></a><a class="genanchor" href="#69344"> &para;</a><div class="date" title="2006-09-01 05:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69344">
<div class="phpcode"><code><span class="html">In the previous message, I found it is working perfect. But, it can be done a lot easily, as is described by the first message by "barnabas at kendall dot NOSPAM dot net". Though, it don't work totally, instead of using imageAlphaBlending, you have to use imageSaveAlpha<br /><br />So, I found the corrected and smalled code would be<br /><br /><span class="default">&lt;?php<br />$im_a </span><span class="keyword">= @</span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"a.png"</span><span class="keyword">);<br /></span><span class="default">$im_c </span><span class="keyword">= @</span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"c.png"</span><span class="keyword">);<br /></span><span class="default">imageSaveAlpha</span><span class="keyword">(</span><span class="default">$im_c</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$im_c</span><span class="keyword">,</span><span class="default">$im_a</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im_c</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48442">  <div class="votes">
    <div id="Vu48442">
    <a href="/manual/vote-note.php?id=48442&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48442">
    <a href="/manual/vote-note.php?id=48442&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48442" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#48442" class="name">
  <strong class="user"><em>dscharrer at gmail dot com</em></strong></a><a class="genanchor" href="#48442"> &para;</a><div class="date" title="2004-12-23 02:32"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48442">
<div class="phpcode"><code><span class="html">If imagealphablending os set to true and you want to merge two images, you are left with no transparency. If it is set to false, only the transparency of the second image is respected, causing no parts of the first image to be shown. To solve this use the following function:<br /><br />&lt;?<br />//Merge multiple images and keep transparency<br /><br />//$i is and array of the images to be merged:<br />// $i[1] will be overlayed over $i[0]<br />// $i[2] will be overlayed over that<br />// ...<br /><br />//the function returns the resulting image ready for saving<br /><br />function imagemergealpha($i) {<br /><br /> //create a new image<br /> $s = imagecreatetruecolor(imagesx($i[0]),imagesy($i[1]));<br /> <br /> //merge all images<br /> imagealphablending($s,true);<br /> $z = $i;<br /> while($d = each($z)) {<br />  imagecopy($s,$d[1],0,0,0,0,imagesx($d[1]),imagesy($d[1]));<br /> }<br /> <br /> //restore the transparency<br /> imagealphablending($s,false);<br /> $w = imagesx($s);<br /> $h = imagesy($s);<br /> for($x=0;$x&lt;$w;$x++) {<br />  for($y=0;$y&lt;$h;$y++) {<br />   $c = imagecolorat($s,$x,$y);<br />   $c = imagecolorsforindex($s,$c);<br />   $z = $i;<br />   $t = 0;<br />   while($d = each($z)) {<br />    $ta = imagecolorat($d[1],$x,$y);<br />    $ta = imagecolorsforindex($d[1],$ta);<br />    $t += 127-$ta['alpha'];<br />   }<br />   $t = ($t &gt; 127) ? 127 : $t;<br />   $t = 127-$t;<br />   $c = imagecolorallocatealpha($s,$c['red'],$c['green'],$c['blue'],$t);<br />   imagesetpixel($s,$x,$y,$c);<br />  }<br /> }<br /> imagesavealpha($s,true);<br /> return $s;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="50095">  <div class="votes">
    <div id="Vu50095">
    <a href="/manual/vote-note.php?id=50095&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50095">
    <a href="/manual/vote-note.php?id=50095&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50095" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#50095" class="name">
  <strong class="user"><em>webmaster at nweurosport dot com</em></strong></a><a class="genanchor" href="#50095"> &para;</a><div class="date" title="2005-02-17 01:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50095">
<div class="phpcode"><code><span class="html">When saving images for use in transparent overlays like the logo addition mentioned above I've found that it is not succesful with PNG-24, only GIF and PNG-8.  I've had great success with PNG-8's.</span></code></div>
  </div>
 </div>
  <div class="note" id="19009">  <div class="votes">
    <div id="Vu19009">
    <a href="/manual/vote-note.php?id=19009&amp;page=function.imagealphablending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19009">
    <a href="/manual/vote-note.php?id=19009&amp;page=function.imagealphablending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19009" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#19009" class="name">
  <strong class="user"><em>tcarter at roundcorners dot com</em></strong></a><a class="genanchor" href="#19009"> &para;</a><div class="date" title="2002-02-13 07:55"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19009">
<div class="phpcode"><code><span class="html">If you are saving an image as PNG with transparency then saving it as a PNG-8 will give it transparency in the same way GIF has, but that won't work with this function. <br /><br />For this function to work the image needs to have an alpha channel (obviously really when you think about it), so make sure you save as PNG-24</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagealphablending&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagealphablending.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
