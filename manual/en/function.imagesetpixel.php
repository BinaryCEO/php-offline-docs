<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagesetpixel - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagesetpixel.php">
 <link rel="shorturl" href="https://www.php.net/imagesetpixel">
 <link rel="alternate" href="https://www.php.net/imagesetpixel" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagesetinterpolation.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagesetstyle.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagesetpixel.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagesetpixel.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagesetpixel.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagesetpixel.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagesetpixel.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagesetpixel.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagesetpixel.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagesetpixel.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagesetpixel.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagesetpixel.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagesetpixel.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set a single pixel" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagesetpixel - Manual" />
<meta name="twitter:description" content="Set a single pixel" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagesetpixel - Manual" />
<meta itemprop="description" content="Set a single pixel" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set a single pixel" />

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
        <a href="function.imagesetstyle.php">
          imagesetstyle &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagesetinterpolation.php">
          &laquo; imagesetinterpolation        </a>
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
            <option value='en/function.imagesetpixel.php' selected="selected">English</option>
            <option value='de/function.imagesetpixel.php'>German</option>
            <option value='es/function.imagesetpixel.php'>Spanish</option>
            <option value='fr/function.imagesetpixel.php'>French</option>
            <option value='it/function.imagesetpixel.php'>Italian</option>
            <option value='ja/function.imagesetpixel.php'>Japanese</option>
            <option value='pt_BR/function.imagesetpixel.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagesetpixel.php'>Russian</option>
            <option value='tr/function.imagesetpixel.php'>Turkish</option>
            <option value='uk/function.imagesetpixel.php'>Ukrainian</option>
            <option value='zh/function.imagesetpixel.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagesetpixel" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagesetpixel</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagesetpixel</span> &mdash; <span class="dc-title">Set a single pixel</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagesetpixel-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagesetpixel</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagesetpixel()</strong></span> draws a pixel at the specified
   coordinate.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagesetpixel-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">x</code></dt>
     <dd>
      <p class="para">
       x-coordinate.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y</code></dt>
     <dd>
      <p class="para">
       y-coordinate.
      </p>
     </dd>
    
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       A color identifier created with <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagesetpixel-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagesetpixel-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagesetpixel-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2931">
    <p><strong>Example #1 <span class="function"><strong>imagesetpixel()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     A random drawing that ends with a regular picture.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">200</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$y </span><span style="color: #007700">= </span><span style="color: #0000BB">200</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$gd </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br /> <br /></span><span style="color: #0000BB">$corners</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] = array(</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #DD0000">'y' </span><span style="color: #007700">=&gt;  </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$corners</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = array(</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt;   </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">'y' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">190</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$corners</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] = array(</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #DD0000">'y' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">190</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$red </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$gd</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">); <br /><br />for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">100000</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />  </span><span style="color: #0000BB">imagesetpixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$gd</span><span style="color: #007700">, </span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">), </span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$y</span><span style="color: #007700">), </span><span style="color: #0000BB">$red</span><span style="color: #007700">);<br />  </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />  </span><span style="color: #0000BB">$x </span><span style="color: #007700">= (</span><span style="color: #0000BB">$x </span><span style="color: #007700">+ </span><span style="color: #0000BB">$corners</span><span style="color: #007700">[</span><span style="color: #0000BB">$a</span><span style="color: #007700">][</span><span style="color: #DD0000">'x'</span><span style="color: #007700">]) / </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />  </span><span style="color: #0000BB">$y </span><span style="color: #007700">= (</span><span style="color: #0000BB">$y </span><span style="color: #007700">+ </span><span style="color: #0000BB">$corners</span><span style="color: #007700">[</span><span style="color: #0000BB">$a</span><span style="color: #007700">][</span><span style="color: #DD0000">'y'</span><span style="color: #007700">]) / </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />}<br /> <br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$gd</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagesetpixel.png" alt="Output of example : imagesetpixel()" width="200" height="200" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagesetpixel-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecreatetruecolor.php" class="function" rel="rdfs-seeAlso">imagecreatetruecolor()</a> - Create a new true color image</span></li>
   <li><span class="function"><a href="function.imagecolorallocate.php" class="function" rel="rdfs-seeAlso">imagecolorallocate()</a> - Allocate a color for an image</span></li>
   <li><span class="function"><a href="function.imagecolorat.php" class="function" rel="rdfs-seeAlso">imagecolorat()</a> - Get the index of the color of a pixel</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagesetpixel.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagesetpixel%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagesetpixel&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagesetpixel.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="54744">  <div class="votes">
    <div id="Vu54744">
    <a href="/manual/vote-note.php?id=54744&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54744">
    <a href="/manual/vote-note.php?id=54744&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54744" title="100% like this...">
    7
    </div>
  </div>
  <a href="#54744" class="name">
  <strong class="user"><em>d [AT] sprid [DOT] de</em></strong></a><a class="genanchor" href="#54744"> &para;</a><div class="date" title="2005-07-14 02:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54744">
<div class="phpcode"><code><span class="html">This code does generate a RGB-cube (with or without borders). Because its only rendering the visible pixels its clearly fast (approx 1 up to 2 seconds). With changing the $order-variable you can see the cube from different perspectives. Entering double or tribble values (like rrg or ggg) will give you other specs of single channels. Send any sugestions to my email.<br /><br /><span class="default">&lt;?php<br />$borders </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">$order   </span><span class="keyword">= </span><span class="string">'rgb'</span><span class="keyword">;<br /><br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">(</span><span class="default">510</span><span class="keyword">, </span><span class="default">510</span><span class="keyword">);<br /><br /></span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$black </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /><br />for (</span><span class="default">$r</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$r</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">; </span><span class="default">$r</span><span class="keyword">++) {<br />  for (</span><span class="default">$g</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$g</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">; </span><span class="default">$g</span><span class="keyword">++) {<br />    for (</span><span class="default">$b</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$b</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">; </span><span class="default">$b</span><span class="keyword">++) {<br />      </span><span class="default">$rN </span><span class="keyword">= ${</span><span class="default">$order</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}};<br />      </span><span class="default">$gN </span><span class="keyword">= ${</span><span class="default">$order</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">}};<br />      </span><span class="default">$bN </span><span class="keyword">= ${</span><span class="default">$order</span><span class="keyword">{</span><span class="default">2</span><span class="keyword">}};<br />    <br />      </span><span class="default">$col </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$rN</span><span class="keyword">, </span><span class="default">$gN</span><span class="keyword">, </span><span class="default">$bN</span><span class="keyword">);<br />      </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">+(</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$g</span><span class="keyword">+(</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$col</span><span class="keyword">);<br />      if (</span><span class="default">$r </span><span class="keyword">&lt; </span><span class="default">255 </span><span class="keyword">&amp;&amp; </span><span class="default">$g </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) break;<br />    }<br />  }<br />  <br />  if (</span><span class="default">$borders</span><span class="keyword">) {<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, (</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">)), (</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">),     </span><span class="default">$black</span><span class="keyword">);<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, (</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+</span><span class="default">255</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), (</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, (</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), (</span><span class="default">$r</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+</span><span class="default">255</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);<br />  }<br />}<br /><br />if (</span><span class="default">$borders</span><span class="keyword">) {<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">255</span><span class="keyword">*</span><span class="default">0.5 </span><span class="keyword">+ </span><span class="default">509</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">+(</span><span class="default">255</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">), </span><span class="default">$black</span><span class="keyword">);<br />}<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108517">  <div class="votes">
    <div id="Vu108517">
    <a href="/manual/vote-note.php?id=108517&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108517">
    <a href="/manual/vote-note.php?id=108517&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108517" title="66% like this...">
    6
    </div>
  </div>
  <a href="#108517" class="name">
  <strong class="user"><em>guy032 at gmail dot com</em></strong></a><a class="genanchor" href="#108517"> &para;</a><div class="date" title="2012-05-03 06:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108517">
<div class="phpcode"><code><span class="html">making images with white (or close to white) background transprent<br /><br />&lt;?<br />function FloodFill($im, $x, $y)<br />{<br />    $rgb = imagecolorat($im, $x, $y);<br />    $r = ($rgb &gt;&gt; 16) &amp; 0xFF;<br />    $g = ($rgb &gt;&gt; 8) &amp; 0xFF;<br />    $b = $rgb &amp; 0xFF;<br /> <br />    $counter=0;<br />    $counter2=0;<br />    if($r &gt;= 245){ $counter++;}<br />    if($g &gt;= 245){ $counter++;}<br />    if($b &gt;= 245){ $counter++;}<br />    if($r &gt;= 240){ $counter2++;}<br />    if($g &gt;= 240){ $counter2++;}<br />    if($b &gt;= 240){ $counter2++;}<br /><br />    if($counter &gt;= 1 &amp;&amp; $counter2 == 3){<br />        $background = imagecolorallocate($im, 180, 0, 255);<br />        imagesetpixel($im, $x, $y, $background);<br /><br />        FloodFill ($im, $x, $y+1);<br />        FloodFill ($im, $x+1, $y);<br />        FloodFill ($im, $x, $y-1);<br />    }<br />}<br /><br />$src = $_GET["src"];<br />$im = imagecreatefromjpeg($src);<br /><br />// Draw border <br />$border = imagecolorallocate($im, 180, 0, 255);<br />drawBorder($im, $border, 1); <br /><br />// Draw a border <br />function drawBorder($im, $color, $thickness = 1) <br />{ <br />    $x1 = 0; <br />    $y1 = 0; <br />    $x2 = ImageSX($im) - 1; <br />    $y2 = ImageSY($im) - 1; <br /><br />    for($i = 0; $i &lt; $thickness; $i++) <br />    { <br />        ImageRectangle($im, $x1++, $y1++, $x2--, $y2--, $color); <br />    } <br />} <br /><br />$rgb = imagecolorat($im, 0, 0);<br />FloodFill($im, 0, 0);<br />$color = imagecolorallocate($im, 180, 0, 255);<br />imagecolortransparent($im, $color);<br />header("Content-type: image/png");<br />imagepng($im);<br />imagedestroy($im);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="46275">  <div class="votes">
    <div id="Vu46275">
    <a href="/manual/vote-note.php?id=46275&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46275">
    <a href="/manual/vote-note.php?id=46275&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46275" title="80% like this...">
    3
    </div>
  </div>
  <a href="#46275" class="name">
  <strong class="user"><em>odin&lt;spam inside(C)&gt;dtdm.org</em></strong></a><a class="genanchor" href="#46275"> &para;</a><div class="date" title="2004-10-05 05:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46275">
<div class="phpcode"><code><span class="html">Just a simple implementation of the Bresenham algorythm (educational purpose....)<br /><br />You can find more about this and many other tutorials for gfx there: <a href="http://brand107.home.comcast.net/pc-gpe/" rel="nofollow" target="_blank">http://brand107.home.comcast.net/pc-gpe/</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/****************************************************<br />     Bresenham Line Algorythm PHP/GD implementation  <br />****************************************************/<br /></span><span class="keyword">function </span><span class="default">line</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$x1</span><span class="keyword">,</span><span class="default">$y1</span><span class="keyword">,</span><span class="default">$x2</span><span class="keyword">,</span><span class="default">$y2</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">){<br />    <br />    </span><span class="default">$deltax</span><span class="keyword">=</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$x1</span><span class="keyword">); <br />    </span><span class="default">$deltay</span><span class="keyword">=</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$y2</span><span class="keyword">-</span><span class="default">$y1</span><span class="keyword">);<br /><br />    if (</span><span class="default">$deltax</span><span class="keyword">&gt;</span><span class="default">$deltay</span><span class="keyword">) {<br />     </span><span class="default">$numpixels</span><span class="keyword">=</span><span class="default">$deltax</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />     </span><span class="default">$d</span><span class="keyword">=(</span><span class="default">2</span><span class="keyword">*</span><span class="default">$deltay</span><span class="keyword">)-</span><span class="default">$deltax</span><span class="keyword">;<br />     </span><span class="default">$dinc1</span><span class="keyword">=</span><span class="default">$deltay </span><span class="keyword">&lt;&lt; </span><span class="default">1</span><span class="keyword">; </span><span class="default">$dinc2</span><span class="keyword">=(</span><span class="default">$deltay</span><span class="keyword">-</span><span class="default">$deltax</span><span class="keyword">) &lt;&lt; </span><span class="default">1</span><span class="keyword">;<br />     </span><span class="default">$xinc1</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$xinc2</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />     </span><span class="default">$yinc1</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$yinc2</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />    } else {<br />     </span><span class="default">$numpixels</span><span class="keyword">=</span><span class="default">$deltay</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />     </span><span class="default">$d</span><span class="keyword">=(</span><span class="default">2</span><span class="keyword">*</span><span class="default">$deltax</span><span class="keyword">)-</span><span class="default">$deltay</span><span class="keyword">;<br />     </span><span class="default">$dinc1</span><span class="keyword">=</span><span class="default">$deltax </span><span class="keyword">&lt;&lt; </span><span class="default">1</span><span class="keyword">; </span><span class="default">$dinc2</span><span class="keyword">=(</span><span class="default">$deltax</span><span class="keyword">-</span><span class="default">$deltay</span><span class="keyword">)&lt;&lt;</span><span class="default">1</span><span class="keyword">;<br />     </span><span class="default">$xinc1</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$xinc2</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />     </span><span class="default">$yinc1</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$yinc2</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; <br />    }<br /><br />    if (</span><span class="default">$x1</span><span class="keyword">&gt;</span><span class="default">$x2</span><span class="keyword">) {<br />     </span><span class="default">$xinc1</span><span class="keyword">=-</span><span class="default">$xinc1</span><span class="keyword">;<br />     </span><span class="default">$xinc2</span><span class="keyword">=-</span><span class="default">$xinc2</span><span class="keyword">;<br />    } <br /><br />    if (</span><span class="default">$y1</span><span class="keyword">&gt;</span><span class="default">$y2</span><span class="keyword">) {<br />     </span><span class="default">$yinc1</span><span class="keyword">=-</span><span class="default">$yinc1</span><span class="keyword">;<br />     </span><span class="default">$yinc2</span><span class="keyword">=-</span><span class="default">$yinc2</span><span class="keyword">;<br />    }<br />    </span><span class="default">$x</span><span class="keyword">=</span><span class="default">$x1</span><span class="keyword">;<br />    </span><span class="default">$y</span><span class="keyword">=</span><span class="default">$y1</span><span class="keyword">;<br /><br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$numpixels</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />     </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />     if (</span><span class="default">$d</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) {<br />      </span><span class="default">$d</span><span class="keyword">+=</span><span class="default">$dinc1</span><span class="keyword">;<br />      </span><span class="default">$x</span><span class="keyword">+=</span><span class="default">$xinc1</span><span class="keyword">;<br />      </span><span class="default">$y</span><span class="keyword">+=</span><span class="default">$yinc1</span><span class="keyword">; <br />     } else {<br />      </span><span class="default">$d</span><span class="keyword">+=</span><span class="default">$dinc2</span><span class="keyword">;<br />      </span><span class="default">$x</span><span class="keyword">+=</span><span class="default">$xinc2</span><span class="keyword">;<br />      </span><span class="default">$y</span><span class="keyword">+=</span><span class="default">$yinc2</span><span class="keyword">; <br />     }<br />    }<br />return ;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97776">  <div class="votes">
    <div id="Vu97776">
    <a href="/manual/vote-note.php?id=97776&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97776">
    <a href="/manual/vote-note.php?id=97776&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97776" title="66% like this...">
    1
    </div>
  </div>
  <a href="#97776" class="name">
  <strong class="user"><em>mail AT kkapsner DOT de</em></strong></a><a class="genanchor" href="#97776"> &para;</a><div class="date" title="2010-05-07 04:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97776">
<div class="phpcode"><code><span class="html">It IS posible to "delete" pixels from an image in PHP natively - the key-function is imageAlphaBlending:<br /><span class="default">&lt;?php<br /><br />$image </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">(</span><span class="default">101</span><span class="keyword">, </span><span class="default">101</span><span class="keyword">);<br /></span><span class="default">imageSaveAlpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment"># draw a red cycle with alpha blending<br /></span><span class="default">$red </span><span class="keyword">= </span><span class="default">imageColorAllocateAlpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);<br /></span><span class="default">imageFilledEllipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);<br /><br /></span><span class="comment"># disable alpha blending for deletion<br /></span><span class="default">imageAlphaBlending</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="comment"># paint with a complete opaque color<br /></span><span class="default">$trans </span><span class="keyword">= </span><span class="default">imageColorAllocateAlpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br /><br /></span><span class="comment"># you can clear every shape you like<br /></span><span class="default">imageFilledRectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">70</span><span class="keyword">, </span><span class="default">70</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">);<br /><br /></span><span class="comment"># enable alpha blending again<br /></span><span class="default">imageAlphaBlending</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment"># draw a green rectangle with alpha blending<br /></span><span class="default">$green </span><span class="keyword">= </span><span class="default">imageColorAllocateAlpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">);<br /></span><span class="default">imageFilledRectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagePNG</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53112">  <div class="votes">
    <div id="Vu53112">
    <a href="/manual/vote-note.php?id=53112&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53112">
    <a href="/manual/vote-note.php?id=53112&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53112" title="100% like this...">
    1
    </div>
  </div>
  <a href="#53112" class="name">
  <strong class="user"><em>bpgordon at gmail dot com</em></strong></a><a class="genanchor" href="#53112"> &para;</a><div class="date" title="2005-05-23 03:18"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53112">
<div class="phpcode"><code><span class="html">This code converts a block of text to an image so that each character in the block defines one pixel in the image and each line in the block (delimited by \n's) builds one whole row of pixels in the image.<br />Usage: Place a 0 to create a white pixel. Place a 1 to create a black pixel.<br />Example: Entering the following digits (including the line breaks) will create a 3x3 square with a 1-pixel white border.<br />00000<br />01110<br />01110<br />01110<br />00000<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (isset(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">"sendtxt"</span><span class="keyword">])) {<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">$splitted </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">"sendtxt"</span><span class="keyword">]);<br />foreach (</span><span class="default">$splitted </span><span class="keyword">as </span><span class="default">$tcurkey </span><span class="keyword">=&gt; </span><span class="default">$curval</span><span class="keyword">) </span><span class="default">$tsplitted</span><span class="keyword">[</span><span class="default">$tcurkey</span><span class="keyword">] = </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$curval</span><span class="keyword">);<br /></span><span class="default">$splitted </span><span class="keyword">= </span><span class="default">$tsplitted</span><span class="keyword">; </span><span class="comment">//referencing isn't working for some reason...<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$splitted</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]), </span><span class="default">count</span><span class="keyword">(</span><span class="default">$splitted</span><span class="keyword">));<br /></span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">); </span><span class="comment">// don't delete this line<br /></span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br />foreach(</span><span class="default">$splitted </span><span class="keyword">as </span><span class="default">$curkey </span><span class="keyword">=&gt; </span><span class="default">$opelement</span><span class="keyword">) {<br /></span><span class="default">$subsplitten </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"//"</span><span class="keyword">, </span><span class="default">$opelement</span><span class="keyword">);<br />foreach(</span><span class="default">$subsplitten </span><span class="keyword">as </span><span class="default">$subcurkey </span><span class="keyword">=&gt; </span><span class="default">$subopelement</span><span class="keyword">) {<br />if (</span><span class="default">$subopelement </span><span class="keyword">== </span><span class="string">"1" </span><span class="keyword">|| </span><span class="default">$subopelement </span><span class="keyword">== </span><span class="string">"."</span><span class="keyword">) </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$subcurkey</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$curkey</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br />}<br />}<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />} else {<br />echo &lt;&lt;&lt;end<br /></span><span class="string">&lt;table width="1" border="0"&gt;&lt;td&gt;<br />&lt;form method="post" action="#"&gt;<br />&lt;textarea cols="30" rows="7" name="sendtxt"&gt;&lt;/textarea&gt;&lt;br&gt;<br />&lt;input type="submit" value="render"&gt;<br />&lt;/form&gt;&lt;/td&gt;&lt;/table&gt;<br /></span><span class="keyword">end; }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122176">  <div class="votes">
    <div id="Vu122176">
    <a href="/manual/vote-note.php?id=122176&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122176">
    <a href="/manual/vote-note.php?id=122176&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122176" title="no votes...">
    0
    </div>
  </div>
  <a href="#122176" class="name">
  <strong class="user"><em>gerben at gerbs dot net</em></strong></a><a class="genanchor" href="#122176"> &para;</a><div class="date" title="2017-12-25 02:37"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122176">
<div class="phpcode"><code><span class="html">Note that you don't have to use imagecolorallocate to draw pixels. Instead, you can assign colors directly, which is much faster as well:<br /><span class="default">&lt;?php<br />imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$r </span><span class="keyword">&lt;&lt; </span><span class="default">16 </span><span class="keyword">| </span><span class="default">$g </span><span class="keyword">&lt;&lt; </span><span class="default">8 </span><span class="keyword">| </span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114482">  <div class="votes">
    <div id="Vu114482">
    <a href="/manual/vote-note.php?id=114482&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114482">
    <a href="/manual/vote-note.php?id=114482&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114482" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114482" class="name">
  <strong class="user"><em>CR@SH</em></strong></a><a class="genanchor" href="#114482"> &para;</a><div class="date" title="2014-02-25 11:27"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114482">
<div class="phpcode"><code><span class="html">imagesetpixel ($image, $x, $y, IMG_COLOR_BRUSHED);</span></code></div>
  </div>
 </div>
  <div class="note" id="96283">  <div class="votes">
    <div id="Vu96283">
    <a href="/manual/vote-note.php?id=96283&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96283">
    <a href="/manual/vote-note.php?id=96283&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96283" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96283" class="name">
  <strong class="user"><em>cyberhorse at users dot sourceforge dot net</em></strong></a><a class="genanchor" href="#96283"> &para;</a><div class="date" title="2010-02-18 07:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96283">
<div class="phpcode"><code><span class="html">Given an image $src and mask $mask, this applies the mask over the image, using different levels of transparency properly.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">image_mask</span><span class="keyword">(&amp;</span><span class="default">$src</span><span class="keyword">, &amp;</span><span class="default">$mask</span><span class="keyword">) {<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="comment">// scan image pixels<br />    </span><span class="keyword">for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++) {<br />        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++) {<br />            </span><span class="default">$mask_pix </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$mask_pix_color </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">, </span><span class="default">$mask_pix</span><span class="keyword">);<br />            if (</span><span class="default">$mask_pix_color</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] &lt; </span><span class="default">127</span><span class="keyword">) {<br />                </span><span class="default">$src_pix </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">);<br />                </span><span class="default">$src_pix_array </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$src_pix</span><span class="keyword">);<br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$src_pix_array</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$src_pix_array</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$src_pix_array</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">], </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$mask_pix_color</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]));<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />If your mask is reversed, change 127 - $mask_pix_color['alpha'] with just $mask_pix_color['alpha']</span></code></div>
  </div>
 </div>
  <div class="note" id="92944">  <div class="votes">
    <div id="Vu92944">
    <a href="/manual/vote-note.php?id=92944&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92944">
    <a href="/manual/vote-note.php?id=92944&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92944" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92944" class="name">
  <strong class="user"><em>aelitadelarobia at gmail dot com</em></strong></a><a class="genanchor" href="#92944"> &para;</a><div class="date" title="2009-08-15 12:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92944">
<div class="phpcode"><code><span class="html">another gradient example that can do horizontal or vertical gradients
<br />
<br /><span class="default">&lt;?php
<br />$width</span><span class="keyword">=</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">];
<br /></span><span class="default">$height</span><span class="keyword">=</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">];
<br /></span><span class="default">$starts</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'startcolor'</span><span class="keyword">]);
<br /></span><span class="default">$ends</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'endcolor'</span><span class="keyword">]);
<br />    </span><span class="default">$rstart</span><span class="keyword">=</span><span class="default">$starts</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />    </span><span class="default">$gstart</span><span class="keyword">=</span><span class="default">$starts</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />    </span><span class="default">$bstart</span><span class="keyword">=</span><span class="default">$starts</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />    </span><span class="default">$rend</span><span class="keyword">=</span><span class="default">$ends</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />    </span><span class="default">$gend</span><span class="keyword">=</span><span class="default">$ends</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />    </span><span class="default">$bend</span><span class="keyword">=</span><span class="default">$ends</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />    </span><span class="default">$r</span><span class="keyword">=</span><span class="default">$rstart</span><span class="keyword">;
<br />    </span><span class="default">$g</span><span class="keyword">=</span><span class="default">$gstart</span><span class="keyword">;
<br />    </span><span class="default">$b</span><span class="keyword">=</span><span class="default">$bstart</span><span class="keyword">;
<br /></span><span class="default">$bigger</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);
<br />for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;=</span><span class="default">265</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++) {
<br />    if (</span><span class="default">$mode </span><span class="keyword">== </span><span class="string">'horiz'</span><span class="keyword">) { </span><span class="comment">//if doing a horizontal gradient, reset to the starting color every row
<br />        </span><span class="default">$r</span><span class="keyword">=</span><span class="default">$rstart</span><span class="keyword">;
<br />        </span><span class="default">$g</span><span class="keyword">=</span><span class="default">$gstart</span><span class="keyword">;
<br />        </span><span class="default">$b</span><span class="keyword">=</span><span class="default">$bstart</span><span class="keyword">;
<br />    }
<br />    for (</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;=</span><span class="default">464</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++) {
<br />        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$bigger</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$bigger</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">));
<br />        if (</span><span class="default">$mode</span><span class="keyword">==</span><span class="string">"horiz"</span><span class="keyword">) {    
<br />            if (</span><span class="default">$r </span><span class="keyword">!= </span><span class="default">$rend</span><span class="keyword">) {
<br />                </span><span class="default">$r</span><span class="keyword">=</span><span class="default">$r</span><span class="keyword">+((</span><span class="default">$rend</span><span class="keyword">-</span><span class="default">$rstart</span><span class="keyword">)/</span><span class="default">$width</span><span class="keyword">);
<br />            }
<br />            if (</span><span class="default">$g </span><span class="keyword">!= </span><span class="default">$gend</span><span class="keyword">) {
<br />                </span><span class="default">$g</span><span class="keyword">=</span><span class="default">$g</span><span class="keyword">+((</span><span class="default">$gend</span><span class="keyword">-</span><span class="default">$gstart</span><span class="keyword">)/</span><span class="default">$width</span><span class="keyword">);
<br />            }
<br />            if (</span><span class="default">$b </span><span class="keyword">!= </span><span class="default">$bend</span><span class="keyword">) {
<br />                </span><span class="default">$b</span><span class="keyword">=</span><span class="default">$b</span><span class="keyword">+((</span><span class="default">$bend</span><span class="keyword">-</span><span class="default">$bstart</span><span class="keyword">)/</span><span class="default">$width</span><span class="keyword">);
<br />            }
<br />        }
<br />    }
<br />    if (</span><span class="default">$mode </span><span class="keyword">== </span><span class="string">"vert"</span><span class="keyword">) {
<br />        if (</span><span class="default">$r </span><span class="keyword">!= </span><span class="default">$rend</span><span class="keyword">) {
<br />            </span><span class="default">$r</span><span class="keyword">=</span><span class="default">$r</span><span class="keyword">+((</span><span class="default">$rend</span><span class="keyword">-</span><span class="default">$rstart</span><span class="keyword">)/</span><span class="default">$height</span><span class="keyword">);
<br />        }
<br />        if (</span><span class="default">$g </span><span class="keyword">!= </span><span class="default">$gend</span><span class="keyword">) {
<br />            </span><span class="default">$g</span><span class="keyword">=</span><span class="default">$g</span><span class="keyword">+((</span><span class="default">$gend</span><span class="keyword">-</span><span class="default">$gstart</span><span class="keyword">)/</span><span class="default">$height</span><span class="keyword">);
<br />        }
<br />        if (</span><span class="default">$b </span><span class="keyword">!= </span><span class="default">$bend</span><span class="keyword">) {
<br />            </span><span class="default">$b</span><span class="keyword">=</span><span class="default">$b</span><span class="keyword">+((</span><span class="default">$bend</span><span class="keyword">-</span><span class="default">$bstart</span><span class="keyword">)/</span><span class="default">$height</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Disposition: inline; filename="gradient.jpg"'</span><span class="keyword">);
<br />
<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$bigger</span><span class="keyword">,</span><span class="default">NULL</span><span class="keyword">,</span><span class="default">99</span><span class="keyword">);
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$bigger</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87763">  <div class="votes">
    <div id="Vu87763">
    <a href="/manual/vote-note.php?id=87763&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87763">
    <a href="/manual/vote-note.php?id=87763&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87763" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87763" class="name">
  <strong class="user"><em>Scott Evernden (doctor3d at gmail)</em></strong></a><a class="genanchor" href="#87763"> &para;</a><div class="date" title="2008-12-19 05:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87763">
<div class="phpcode"><code><span class="html">Re: imagecreatefromtga() .. I just did some testing with what I think are valid Targa-24 and Targa-32 bit images, and modified the inner logic as follows:
<br />
<br /><span class="default">&lt;?php
<br />        </span><span class="keyword">if (</span><span class="default">$bytes_per_pixel </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">)            </span><span class="comment">// TARGA 16 - ARRRRRGG GGGBBBBB
<br />        </span><span class="keyword">{
<br />            </span><span class="default">$word </span><span class="keyword">= </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);
<br />            </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$word </span><span class="keyword">&amp; </span><span class="default">0x7C00</span><span class="keyword">) &gt;&gt; </span><span class="default">7</span><span class="keyword">;
<br />            </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$word </span><span class="keyword">&amp; </span><span class="default">0x03E0</span><span class="keyword">) &gt;&gt; </span><span class="default">2</span><span class="keyword">;
<br />            </span><span class="default">$b </span><span class="keyword">= (</span><span class="default">$word </span><span class="keyword">&amp; </span><span class="default">0x001F</span><span class="keyword">) &lt;&lt; </span><span class="default">3</span><span class="keyword">;
<br />            </span><span class="default">$a </span><span class="keyword">= (</span><span class="default">$word </span><span class="keyword">&amp; </span><span class="default">0x8000</span><span class="keyword">) ? </span><span class="default">127 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;
<br />            </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);
<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);         }
<br />        else if (</span><span class="default">$bytes_per_pixel </span><span class="keyword">== </span><span class="default">3</span><span class="keyword">)        </span><span class="comment">// TARGA 24 - BBBBBBBB GGGGGGGG RRRRRRRR
<br />        </span><span class="keyword">{
<br />            </span><span class="default">$r </span><span class="keyword">= </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$g </span><span class="keyword">= </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />        }
<br />        else if (</span><span class="default">$bytes_per_pixel </span><span class="keyword">== </span><span class="default">4</span><span class="keyword">)        </span><span class="comment">// TARGA 32 - BBBBBBBB GGGGGGGG RRRRRRRR AAAAAAAA
<br />        </span><span class="keyword">{
<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$g </span><span class="keyword">= </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$r </span><span class="keyword">= </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$a </span><span class="keyword">= (</span><span class="default">255 </span><span class="keyword">- </span><span class="default">fileint</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">+</span><span class="default">3</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) &gt;&gt; </span><span class="default">1</span><span class="keyword">;
<br />            </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);
<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />        }
<br /></span><span class="default">?&gt;
<br /></span>
<br />The red and blue tint issue seems to be fixed by this...</span></code></div>
  </div>
 </div>
  <div class="note" id="82901">  <div class="votes">
    <div id="Vu82901">
    <a href="/manual/vote-note.php?id=82901&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82901">
    <a href="/manual/vote-note.php?id=82901&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82901" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82901" class="name">
  <strong class="user"><em>Scott Evernden (doctor3d at gmail)</em></strong></a><a class="genanchor" href="#82901"> &para;</a><div class="date" title="2008-04-30 03:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82901">
<div class="phpcode"><code><span class="html">My last note doesn't do alpha properly, so make the following change to the appropriate lines:<br /><br />$r = ($word &amp; 0x7C00) &gt;&gt; 7;<br />$g = ($word &amp; 0x03E0) &gt;&gt; 2;<br />$b = ($word &amp; 0x001F) &lt;&lt; 3;<br />$a = ($word &amp; 0x8000) ? 127 : 0;<br />$color = imagecolorallocatealpha($image, $r, $g, $b, $a);<br />imagesetpixel($image, $x, $y, $color);</span></code></div>
  </div>
 </div>
  <div class="note" id="82799">  <div class="votes">
    <div id="Vu82799">
    <a href="/manual/vote-note.php?id=82799&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82799">
    <a href="/manual/vote-note.php?id=82799&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82799" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82799" class="name">
  <strong class="user"><em>Scott Evernden (doctor3d at gmail)</em></strong></a><a class="genanchor" href="#82799"> &para;</a><div class="date" title="2008-04-25 06:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82799">
<div class="phpcode"><code><span class="html">here's my version of imagecreatefromtga() that's been tested to work for targa 16 .. adapted from offering by zehao dot chang at gmail dot com<br /><br />function imagecreatefromtga($filename)<br />{<br />    $data = file_get_contents($filename);<br />  <br />    // Extract header information<br />    $string_length = fileint($data, 1, 1);<br />    $data_type = fileint($data, 2, 1);<br />    $width = fileint($data, 12, 2);<br />    $height = fileint($data, 14, 2);<br />    $bits_per_pixel = fileint($data, 16, 1);<br /><br />    $bytes_per_pixel = (int) $bits_per_pixel / 8;<br />    <br />    // Currently only supporting RGB Data type<br />    switch ($data_type)        // Header information taken from <a href="http://astronomy.swin.edu.au/~pbourke/dataformats/tga/" rel="nofollow" target="_blank">http://astronomy.swin.edu.au/~pbourke/dataformats/tga/</a><br />    {<br />        case 2:     // Uncompressed RGB image<br />            break;<br />        case 0:     // No attached image data<br />        case 1:     // Uncompressed color-mapped image<br />        case 3:     // Uncompressed black and white image<br />        case 9:     // Runlength encoded color-mapped image<br />        case 10:    // Runlength encoded RGB image<br />        case 11:    // Compressed black and white image<br />        case 32:    // Compressed color-mapped data, using Huffman, Delta, and runlength encoding<br />        case 33:    // Compressed color-mapped data, using Huffman, Delta, and runlength encoding.  4-pass quadtree-type process<br />        default:<br />            return NULL;    // No support for any of these types<br />    }    <br />    <br />    // Compute things we need from the header information<br />    $pointer = 18 + $string_length;<br />    $x = 0;  $y = $height - 1;<br />   <br />    $image = imagecreatetruecolor($width, $height);<br /><br />    while ($pointer &lt; strlen($data))<br />    {<br />        if ($bytes_per_pixel == 2)            // TARGA 16 - ARRRRRGG GGGBBBBB<br />        {<br />            $word = fileint($data, $pointer, 2);<br />            $r = ($word &amp; 0x7C00) &gt;&gt; 10;<br />            $g = ($word &amp; 0x03E0) &gt;&gt; 5;<br />            $b = ($word &amp; 0x001F);<br />            imagesetpixel($image, $x, $y, $r &lt;&lt; 19 | $g &lt;&lt; 11 | $b &lt;&lt; 3);<br />        }<br />        else if ($bytes_per_pixel == 3)        // TARGA 24 - RRRRRRRR GGGGGGGG BBBBBBBB<br />        {<br />            imagesetpixel($image, $x, $y, fileint($data, $pointer, 3));<br />        }<br />        else if ($bytes_per_pixel == 4)        // TARGA 32 - AAAAAAAA RRRRRRRR GGGGGGGG BBBBBBBB<br />        {<br />            imagesetpixel($image, $x, $y, fileint($data, $pointer + 1, 3));<br />        }<br />    <br />        if (++$x == $width)<br />        {<br />            $y--;<br />            $x = 0;<br />        }<br />       $pointer += $bytes_per_pixel;<br />    }<br />  <br />    return $image;<br />}<br /><br />function fileint($data, $pos, $len)<br />{<br />    return base_convert(bin2hex(strrev(substr($data, $pos, $len))), 16, 10);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="64069">  <div class="votes">
    <div id="Vu64069">
    <a href="/manual/vote-note.php?id=64069&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64069">
    <a href="/manual/vote-note.php?id=64069&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64069" title="50% like this...">
    0
    </div>
  </div>
  <a href="#64069" class="name">
  <strong class="user"><em>zehao dot chang at gmail dot com</em></strong></a><a class="genanchor" href="#64069"> &para;</a><div class="date" title="2006-04-06 01:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64069">
<div class="phpcode"><code><span class="html">Here's my stab at the imagecreatefromtga function. I used code from send at mail dot 2aj dot net and others below as a basis, and added support for targa 16, targa 24 and targa 32. However, I only support uncompressed RBG data type as that's the only one I need. (I removed the return_array feature since you can simply use imagesx() and imagesy() to get the image size).<br /><br />Please note that I have not tested this with a targa 16 since I don't have one handy at the moment.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imagecreatefromtga</span><span class="keyword">( </span><span class="default">$filename </span><span class="keyword">)<br />{<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">( </span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'rb' </span><span class="keyword">);<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">( </span><span class="default">$handle</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">( </span><span class="default">$filename </span><span class="keyword">) );<br />    </span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$handle </span><span class="keyword">);<br />  <br />    </span><span class="comment">// Extract header information<br />    </span><span class="default">$string_length </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) ), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">);<br />    </span><span class="default">$data_type </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) ), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">);<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">strrev</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">12</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">) ) ), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">strrev</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">14</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">) ) ), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">);<br />    </span><span class="default">$bits_per_pixel </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">16</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) ), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">);<br />    <br />    </span><span class="comment">// Currenly I'm only supporting RGB Data type<br />    </span><span class="keyword">switch( </span><span class="default">$data_type </span><span class="keyword">)        </span><span class="comment">// Header information taken from <a href="http://astronomy.swin.edu.au/~pbourke/dataformats/tga/" rel="nofollow" target="_blank">http://astronomy.swin.edu.au/~pbourke/dataformats/tga/</a><br />    </span><span class="keyword">{<br />        case </span><span class="default">2</span><span class="keyword">:        </span><span class="comment">// Uncompressed RGB image<br />            </span><span class="keyword">break;<br />        case </span><span class="default">0</span><span class="keyword">:        </span><span class="comment">// No attached image data<br />        </span><span class="keyword">case </span><span class="default">1</span><span class="keyword">:        </span><span class="comment">// Uncompressed color-mapped image<br />        </span><span class="keyword">case </span><span class="default">3</span><span class="keyword">:        </span><span class="comment">// Uncompressed black and white image<br />        </span><span class="keyword">case </span><span class="default">9</span><span class="keyword">:        </span><span class="comment">// Runlength encoded color-mapped image<br />        </span><span class="keyword">case </span><span class="default">10</span><span class="keyword">:    </span><span class="comment">// Runlength encoded RGB image<br />        </span><span class="keyword">case </span><span class="default">11</span><span class="keyword">:    </span><span class="comment">// Compressed black and white image<br />        </span><span class="keyword">case </span><span class="default">32</span><span class="keyword">:    </span><span class="comment">// Compressed color-mapped data, using Huffman, Delta, and runlength encoding<br />        </span><span class="keyword">case </span><span class="default">33</span><span class="keyword">:    </span><span class="comment">// Compressed color-mapped data, using Huffman, Delta, and runlength encoding.  4-pass quadtree-type process<br />        </span><span class="keyword">default:<br />            return </span><span class="default">NULL</span><span class="keyword">;    </span><span class="comment">// No support for any of these types<br />    </span><span class="keyword">}    <br />    <br />    </span><span class="comment">// Compute things we need from the header information<br />    </span><span class="default">$pointer </span><span class="keyword">= </span><span class="default">18 </span><span class="keyword">+ </span><span class="default">$string_length</span><span class="keyword">;<br />    </span><span class="default">$bytes_per_pixel </span><span class="keyword">= (int) </span><span class="default">$bits_per_pixel</span><span class="keyword">/</span><span class="default">8</span><span class="keyword">;<br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;  </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">;<br />    <br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /><br />    while ( </span><span class="default">$pointer </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) )<br />    {<br />        if( </span><span class="default">$bytes_per_pixel </span><span class="keyword">== </span><span class="default">2 </span><span class="keyword">)            </span><span class="comment">// TARGA 16 - ARRRRRGG GGGBBBBB<br />        </span><span class="keyword">{<br />            </span><span class="default">$low_byte </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">strrev</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">, </span><span class="default">$bytes_per_pixel</span><span class="keyword">)));<br />            </span><span class="default">$high_byte </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">strrev</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">, </span><span class="default">$bytes_per_pixel</span><span class="keyword">)));<br />            </span><span class="default">$r </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( (</span><span class="default">$high_byte </span><span class="keyword">&amp; </span><span class="default">0x7C</span><span class="keyword">)&gt;&gt;</span><span class="default">2</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />            </span><span class="default">$g </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( ((</span><span class="default">$high_byte </span><span class="keyword">&amp; </span><span class="default">0x03</span><span class="keyword">)&lt;&lt;</span><span class="default">3</span><span class="keyword">) | ((</span><span class="default">$low_byte </span><span class="keyword">&amp; </span><span class="default">0xE0</span><span class="keyword">)&gt;&gt;</span><span class="default">5</span><span class="keyword">), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">$low_byte </span><span class="keyword">&amp; </span><span class="default">0x1F</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />            </span><span class="default">imagesetpixel</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">&lt;&lt;</span><span class="default">16 </span><span class="keyword">| </span><span class="default">$g</span><span class="keyword">&lt;&lt;</span><span class="default">8 </span><span class="keyword">| </span><span class="default">$b</span><span class="keyword">);<br />        }<br />        else if( </span><span class="default">$bytes_per_pixel </span><span class="keyword">== </span><span class="default">3 </span><span class="keyword">)    </span><span class="comment">// TARGA 24 - RRRRRRRR GGGGGGGG BBBBBBBB<br />        </span><span class="keyword">{<br />            </span><span class="default">imagesetpixel</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">strrev</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">, </span><span class="default">$bytes_per_pixel</span><span class="keyword">))), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));<br />        }<br />        else if( </span><span class="default">$bytes_per_pixel </span><span class="keyword">== </span><span class="default">4 </span><span class="keyword">)    </span><span class="comment">// TARGA 32 - AAAAAAAA RRRRRRRR GGGGGGGG BBBBBBBB<br />        </span><span class="keyword">{<br />            </span><span class="default">imagesetpixel</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">base_convert</span><span class="keyword">( </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">strrev</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$pointer</span><span class="keyword">, </span><span class="default">$bytes_per_pixel</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">))), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));<br />        }<br />            <br />        if(++</span><span class="default">$x </span><span class="keyword">== </span><span class="default">$width</span><span class="keyword">)<br />        {<br />            </span><span class="default">$y</span><span class="keyword">--;<br />            </span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        }<br />       </span><span class="default">$pointer </span><span class="keyword">+= </span><span class="default">$bytes_per_pixel</span><span class="keyword">;<br />    }<br />  <br />    return </span><span class="default">$image</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59261">  <div class="votes">
    <div id="Vu59261">
    <a href="/manual/vote-note.php?id=59261&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59261">
    <a href="/manual/vote-note.php?id=59261&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59261" title="50% like this...">
    0
    </div>
  </div>
  <a href="#59261" class="name">
  <strong class="user"><em>T. Dekker</em></strong></a><a class="genanchor" href="#59261"> &para;</a><div class="date" title="2005-11-30 02:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59261">
<div class="phpcode"><code><span class="html">In reply to weitheism at gmail.com:<br /><br />You should probably have used ImageAlphaBlending($image, false); in your early attempts. This way any paint/fill operation replaces the alpha value of the destination.</span></code></div>
  </div>
 </div>
  <div class="note" id="35767">  <div class="votes">
    <div id="Vu35767">
    <a href="/manual/vote-note.php?id=35767&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35767">
    <a href="/manual/vote-note.php?id=35767&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35767" title="50% like this...">
    0
    </div>
  </div>
  <a href="#35767" class="name">
  <strong class="user"><em>chris at drunkenpirates dot co dot uk</em></strong></a><a class="genanchor" href="#35767"> &para;</a><div class="date" title="2003-09-13 05:50"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35767">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br />An example combining the use of ImageColorAllocate, Imagesetpixel, Imagecopyresized and some basic Trig<br /><br />By chris@drunkenpirates.co.uk<br /><br />*/<br /><br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /><br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">128</span><span class="keyword">;<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">128</span><span class="keyword">;<br /><br /></span><span class="default">$imA </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">$imB </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$bckA </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$imA</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$bckB </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$imB</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">//GENERATE GRAY SCALE PALLETE<br /><br /></span><span class="keyword">for(</span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">++){<br />                </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$imA</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br />                }<br /><br /></span><span class="comment">//PRODUCE DATA<br /><br /></span><span class="default">$m</span><span class="keyword">=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br />for(</span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">&lt;</span><span class="default">128</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">++){<br />                </span><span class="default">$s</span><span class="keyword">=  (</span><span class="default">sin</span><span class="keyword">( </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">*</span><span class="default">360</span><span class="keyword">*</span><span class="default">$m</span><span class="keyword">/</span><span class="default">128</span><span class="keyword">) )+</span><span class="default">1</span><span class="keyword">)*</span><span class="default">127</span><span class="keyword">;<br />                </span><span class="default">$col_arr</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">]=</span><span class="default">$s</span><span class="keyword">;<br />                }<br />for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++){<br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++){<br />                </span><span class="default">$imgA</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]=</span><span class="default">$col_arr</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">];<br />                }<br />        }<br />for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++){<br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++){<br />                </span><span class="default">$imgB</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]=</span><span class="default">$col_arr</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">];<br />                }<br />        }<br /><br /></span><span class="comment">//SET PIXELS<br /><br /></span><span class="keyword">for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++){<br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++){<br />                </span><span class="default">$imgC</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]=</span><span class="default">$imgA</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]+</span><span class="default">$imgB</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">];<br />                </span><span class="default">$s</span><span class="keyword">=</span><span class="default">$imgC</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]/</span><span class="default">2</span><span class="keyword">;<br />                </span><span class="default">Imagesetpixel</span><span class="keyword">(</span><span class="default">$imA</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">);<br />                }<br />        }<br /><br /></span><span class="comment">//RESIZE IMAGE FOR DISPLAY<br /><br /></span><span class="default">Imagecopyresized </span><span class="keyword">(</span><span class="default">$imB</span><span class="keyword">, </span><span class="default">$imA</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">);<br /></span><span class="default">ImagePNG</span><span class="keyword">(</span><span class="default">$imB</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="21922">  <div class="votes">
    <div id="Vu21922">
    <a href="/manual/vote-note.php?id=21922&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21922">
    <a href="/manual/vote-note.php?id=21922&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21922" title="50% like this...">
    0
    </div>
  </div>
  <a href="#21922" class="name">
  <strong class="user"><em>dino at nordmark dot dk</em></strong></a><a class="genanchor" href="#21922"> &para;</a><div class="date" title="2002-05-31 04:28"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21922">
<div class="phpcode"><code><span class="html">The example above diden't work, because of some errors.<br />This should work and it's also faster because there is only one 512*512 loop. (but it is still very slow)<br /><br />&lt;?<br />$filename="lena.raw";<br />$width=512;<br />$height=512;<br />$fp=fopen($filename, "r");<br />$contents=fread($fp,filesize($filename));<br />fclose($fp);<br /><br />$image=imagecreate($width,$height);<br /><br />// create greyscale palette because the image is limited to 256 colors<br />for ($i=0;$i&lt;256;$i++){ ImageColorAllocate($image,$i,$i,$i);}<br /><br />// This is slow, but probably the only way<br />for ($i=0;$i&lt;512;$i++){<br />   for ($j=0;$j&lt;512;$j++){    <br />   imagesetpixel ($image,$i,$j,ord($contents[$i+$j*512]));<br />   }<br />}<br /><br />imagepng($image,"result.png");<br />imagedestroy($image);<br /><br />echo "&lt;img src=result.png&gt;&lt;/img&gt;";<br />?&gt;<br /><br />--<br /><br />Dino Patti</span></code></div>
  </div>
 </div>
  <div class="note" id="93223">  <div class="votes">
    <div id="Vu93223">
    <a href="/manual/vote-note.php?id=93223&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93223">
    <a href="/manual/vote-note.php?id=93223&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93223" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#93223" class="name">
  <strong class="user"><em>caffinated</em></strong></a><a class="genanchor" href="#93223"> &para;</a><div class="date" title="2009-08-28 05:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93223">
<div class="phpcode"><code><span class="html">Want to have some fun with this function?  How about edge detection! (ported from <a href="http://bitecode.co.uk/2008/07/edge-detection-in-python/" rel="nofollow" target="_blank">http://bitecode.co.uk/2008/07/edge-detection-in-python/</a>)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">edge</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">)<br />{<br />  </span><span class="default">$in_im </span><span class="keyword">= </span><span class="default">imageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />  </span><span class="default">$gx </span><span class="keyword">= array(array(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">), array(-</span><span class="default">2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">), array(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br />  </span><span class="default">$gy </span><span class="keyword">= array(array(-</span><span class="default">1</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">), array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br />  </span><span class="default">$x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in_im</span><span class="keyword">);<br />  </span><span class="default">$y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in_im</span><span class="keyword">);<br />  </span><span class="default">$out_im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />  </span><span class="default">$colors </span><span class="keyword">= array(</span><span class="default">255 </span><span class="keyword">=&gt; </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$out_im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));<br />  for (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$row </span><span class="keyword">&lt; </span><span class="default">$x</span><span class="keyword">; </span><span class="default">$row</span><span class="keyword">++)<br />  {<br />    for (</span><span class="default">$col </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$col </span><span class="keyword">&lt; </span><span class="default">$y</span><span class="keyword">; </span><span class="default">$col</span><span class="keyword">++)<br />    {<br />      </span><span class="default">$eyedropper </span><span class="keyword">=</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$in_im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />      </span><span class="default">$color </span><span class="keyword">=</span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$in_im</span><span class="keyword">, </span><span class="default">$eyedropper</span><span class="keyword">);<br />      </span><span class="default">$pxval </span><span class="keyword">= (</span><span class="default">$color</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] + </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]) / </span><span class="default">3</span><span class="keyword">;<br />      </span><span class="default">$pixel_gx </span><span class="keyword">= </span><span class="default">$pixel_gy </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      for (</span><span class="default">$i </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />      {<br />        for (</span><span class="default">$j </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />        {<br />          </span><span class="default">$eyedropper </span><span class="keyword">=</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$in_im</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">+</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$col</span><span class="keyword">+</span><span class="default">$j</span><span class="keyword">);<br />          </span><span class="default">$color </span><span class="keyword">=</span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$in_im</span><span class="keyword">, </span><span class="default">$eyedropper</span><span class="keyword">);<br />          </span><span class="default">$val </span><span class="keyword">= (</span><span class="default">$color</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] + </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]) / </span><span class="default">3</span><span class="keyword">;<br />          </span><span class="default">$pixel_gx </span><span class="keyword">+= </span><span class="default">$gx</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">] * </span><span class="default">$val</span><span class="keyword">;<br />          </span><span class="default">$pixel_gy </span><span class="keyword">+= </span><span class="default">$gy</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">] * </span><span class="default">$val</span><span class="keyword">;<br />        }<br />      }<br />      </span><span class="default">$pixel </span><span class="keyword">= </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">$pixel_gx </span><span class="keyword">* </span><span class="default">$pixel_gx </span><span class="keyword">+ </span><span class="default">$pixel_gy </span><span class="keyword">* </span><span class="default">$pixel_gy</span><span class="keyword">);<br />      </span><span class="default">$pixel </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">255 </span><span class="keyword">- (int)</span><span class="default">$pixel</span><span class="keyword">);<br />      if (!isset(</span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$pixel</span><span class="keyword">])) </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$pixel</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$out_im</span><span class="keyword">, </span><span class="default">$pixel</span><span class="keyword">, </span><span class="default">$pixel</span><span class="keyword">, </span><span class="default">$pixel</span><span class="keyword">);<br />      </span><span class="default">imageSetPixel</span><span class="keyword">(</span><span class="default">$out_im</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">, </span><span class="default">$col</span><span class="keyword">, </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$pixel</span><span class="keyword">]);<br />    }<br />  }<br />  </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$out_im</span><span class="keyword">,</span><span class="default">$output</span><span class="keyword">, </span><span class="default">75</span><span class="keyword">);<br />}<br /><br /></span><span class="default">edge</span><span class="keyword">(</span><span class="string">'input.jpg'</span><span class="keyword">, </span><span class="string">'output.jpg'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89189">  <div class="votes">
    <div id="Vu89189">
    <a href="/manual/vote-note.php?id=89189&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89189">
    <a href="/manual/vote-note.php?id=89189&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89189" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#89189" class="name">
  <strong class="user"><em>CPHaxer</em></strong></a><a class="genanchor" href="#89189"> &para;</a><div class="date" title="2009-02-25 01:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89189">
<div class="phpcode"><code><span class="html">Sorry for the long intro of my function, but i just want to tell how it works and - how silly sometimes the ideas are to make such functions. Have fun ;D<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="comment">//@FunctionName:    drawPlot<br />  //@Parameters:      drawPlot(img &amp;$image, int $red, int $green, int $blue, int $x, int $y)<br />  //<br />  //                  img $image<br />  //                    The Image it will draw on. The Image will be modified; there is no return value.<br />  //<br />  //                  int $red, int $green, int $blue<br />  //                    The Colorvalues to draw with<br />  //<br />  //                  int $x, int $y<br />  //                    The Location to draw the Plot.<br />  //                    And this is the Mainpart, because $x and $y<br />  //                    NEED NOT be rounded!<br />  //                    If you want to make a Plot at [253.643891, 482];<br />  //                    It will draw the Plot there. Exact at the Coordinates.<br />  //                    You could use this to make smooth lines.<br />  //                    They have rational Coordinates, too.<br />  //<br />  //@Author:          Alexander Rath (*Feb 9th, 1996 ; 13 Years old)<br />  //<br />  //@Idea:            We have in Math Geometrie now. And as the only Computerfreak<br />  //                  In the class, i asked me: "How would it be, to mirror something<br />  //                  At a NOT FLAT LINE."<br />  //                  So I started thinking about it. First i tought about degresses - Nah!<br />  //                  Then i saw:<br />  //                  A point to mirror, has the SHORTEST way to the Line;<br />  //                  so i just needed to make the result smooth.<br />  //                  Unlike the other ways to draw pixels.<br />  //                                ~I started developing this:<br />  // PS: Sorry for bad english ( I am german )<br /><br />  //Lets create a TrueColor Image Resource<br />  </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">640</span><span class="keyword">, </span><span class="default">480</span><span class="keyword">);<br />  <br />  </span><span class="comment">//Lets make it Alpha<br />  </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  <br />  </span><span class="comment">//...with White Background to draw on.<br />  </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">640</span><span class="keyword">, </span><span class="default">480</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));<br />  <br />  </span><span class="comment">//This is my little "Example"-Script<br />  </span><span class="keyword">for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;= </span><span class="default">640</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">0.01</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">/ (</span><span class="default">tan</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">drawPlot</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />  }<br />  <br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br />  </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />  <br />  function </span><span class="default">drawPlot</span><span class="keyword">(&amp;</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_red</span><span class="keyword">, </span><span class="default">$func_green</span><span class="keyword">, </span><span class="default">$func_blue</span><span class="keyword">, </span><span class="default">$func_x</span><span class="keyword">, </span><span class="default">$func_y</span><span class="keyword">) {<br />    </span><span class="default">$func_Right </span><span class="keyword">= </span><span class="default">$func_x </span><span class="keyword">- </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$func_x</span><span class="keyword">);<br />      </span><span class="default">$func_Left </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">- </span><span class="default">$func_Right</span><span class="keyword">;<br />    <br />      </span><span class="default">$func_Bottom </span><span class="keyword">= </span><span class="default">$func_y </span><span class="keyword">- </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$func_y</span><span class="keyword">);<br />      </span><span class="default">$func_Top </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">- </span><span class="default">$func_Bottom</span><span class="keyword">;<br />    <br />    </span><span class="default">$func_RightAlpha </span><span class="keyword">= </span><span class="default">$func_Right </span><span class="keyword">* </span><span class="default">127</span><span class="keyword">;<br />    </span><span class="default">$func_LeftAlpha </span><span class="keyword">= </span><span class="default">$func_Left </span><span class="keyword">* </span><span class="default">127</span><span class="keyword">;<br /><br />    </span><span class="default">$func_LeftTop </span><span class="keyword">= </span><span class="default">$func_LeftAlpha </span><span class="keyword">* </span><span class="default">$func_Top</span><span class="keyword">;<br />    </span><span class="default">$func_RightTop </span><span class="keyword">= </span><span class="default">$func_RightAlpha </span><span class="keyword">* </span><span class="default">$func_Top</span><span class="keyword">;<br />    </span><span class="default">$func_LeftBottom </span><span class="keyword">= </span><span class="default">$func_LeftAlpha </span><span class="keyword">* </span><span class="default">$func_Bottom</span><span class="keyword">;<br />    </span><span class="default">$func_RightBottom </span><span class="keyword">= </span><span class="default">$func_RightAlpha </span><span class="keyword">* </span><span class="default">$func_Bottom</span><span class="keyword">;<br />    <br />    </span><span class="default">$func_x </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$func_x</span><span class="keyword">);<br />    </span><span class="default">$func_y </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$func_y</span><span class="keyword">);<br />    <br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_x</span><span class="keyword">, </span><span class="default">$func_y</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_red</span><span class="keyword">, </span><span class="default">$func_green</span><span class="keyword">, </span><span class="default">$func_blue</span><span class="keyword">, </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$func_LeftTop</span><span class="keyword">));<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_x </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$func_y</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_red</span><span class="keyword">, </span><span class="default">$func_green</span><span class="keyword">, </span><span class="default">$func_blue</span><span class="keyword">, </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$func_RightTop</span><span class="keyword">));<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_x </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$func_y </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_red</span><span class="keyword">, </span><span class="default">$func_green</span><span class="keyword">, </span><span class="default">$func_blue</span><span class="keyword">, </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$func_RightBottom</span><span class="keyword">));<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_x</span><span class="keyword">, </span><span class="default">$func_y </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$func_image</span><span class="keyword">, </span><span class="default">$func_red</span><span class="keyword">, </span><span class="default">$func_green</span><span class="keyword">, </span><span class="default">$func_blue</span><span class="keyword">, </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$func_LeftBottom</span><span class="keyword">));<br />  }<br />  <br /></span><span class="default">?&gt;<br /></span><br />Have fun ;D</span></code></div>
  </div>
 </div>
  <div class="note" id="87651">  <div class="votes">
    <div id="Vu87651">
    <a href="/manual/vote-note.php?id=87651&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87651">
    <a href="/manual/vote-note.php?id=87651&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87651" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#87651" class="name">
  <strong class="user"><em>mm</em></strong></a><a class="genanchor" href="#87651"> &para;</a><div class="date" title="2008-12-14 06:30"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87651">
<div class="phpcode"><code><span class="html">@ Scott Evernden<br /><br />Scott, your function works great for uncompressed TGA image files, except the results for TGA 32 with alpha don't come out right, at least in my tests. If the alpha is all white, the resulting image comes out with a red tint. If black, the resulting image has a blue tint. I don't know how to make it just ignore the alpha, but that would be handy...</span></code></div>
  </div>
 </div>
  <div class="note" id="74488">  <div class="votes">
    <div id="Vu74488">
    <a href="/manual/vote-note.php?id=74488&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74488">
    <a href="/manual/vote-note.php?id=74488&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74488" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#74488" class="name">
  <strong class="user"><em>Gusts Kaksis</em></strong></a><a class="genanchor" href="#74488"> &para;</a><div class="date" title="2007-04-13 07:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74488">
<div class="phpcode"><code><span class="html">This code generate a simple colortable - not a very acurate one (it would be good to define fade of color - more fading)<br /><br /><span class="default">&lt;?php<br />set_time_limit</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">);<br /></span><span class="comment">/*<br />Custommize this to see some nice changes:<br />*/<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">360</span><span class="keyword">;   </span><span class="comment">// degrees<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">18</span><span class="keyword">;   </span><span class="comment">// byte<br /></span><span class="default">$offset </span><span class="keyword">= -</span><span class="default">60</span><span class="keyword">;    </span><span class="comment">// offset of color hue<br /><br />/*<br />Main programm:<br />Here comes transformations - width to degrees and height to intesity<br />*/<br /></span><span class="default">$w2deg </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">/</span><span class="default">360</span><span class="keyword">;<br /></span><span class="default">$h2byte </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">/</span><span class="default">255</span><span class="keyword">;<br /></span><span class="default">$byte2deg </span><span class="keyword">= </span><span class="default">255</span><span class="keyword">/</span><span class="default">360</span><span class="keyword">;<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br />for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">++){<br />  </span><span class="comment">/*<br />  Transform X to degrees<br />  */<br />  </span><span class="default">$x_pos </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">/</span><span class="default">$w2deg</span><span class="keyword">;<br />  </span><span class="comment">/*<br />  Intensity position (where max intensity is 255) on 360 degree scale.<br />  0 = red<br />  1 = green<br />  2 = blue<br />  */<br />  </span><span class="default">$rgb_pos</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$x_pos</span><span class="keyword">) - </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">0</span><span class="keyword">));<br />  </span><span class="default">$rgb_pos</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$x_pos</span><span class="keyword">) - </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">120</span><span class="keyword">));<br />  </span><span class="default">$rgb_pos</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$x_pos</span><span class="keyword">) - </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">240</span><span class="keyword">));<br />  </span><span class="comment">/*<br />  Calculate intesity at current point 0 - 255<br />  */<br />  </span><span class="default">$rgb_col</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">127 </span><span class="keyword">+ </span><span class="default">127 </span><span class="keyword">* </span><span class="default">$rgb_pos</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />  </span><span class="default">$rgb_col</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">127 </span><span class="keyword">+ </span><span class="default">127 </span><span class="keyword">* </span><span class="default">$rgb_pos</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />  </span><span class="default">$rgb_col</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">127 </span><span class="keyword">+ </span><span class="default">127 </span><span class="keyword">* </span><span class="default">$rgb_pos</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br /><br />  </span><span class="comment">/*<br />  White -&gt; color -&gt; Black loop<br />  */<br />  </span><span class="keyword">for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">++){<br />    </span><span class="comment">/*<br />    Transform Y to intensity (-255 to 255)<br />    */<br />    </span><span class="default">$y_pos </span><span class="keyword">= -</span><span class="default">255 </span><span class="keyword">+ (</span><span class="default">$y</span><span class="keyword">/</span><span class="default">$h2byte</span><span class="keyword">) * </span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$rgb_col</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] - </span><span class="default">$y_pos</span><span class="keyword">;<br />    </span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$rgb_col</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$y_pos</span><span class="keyword">;<br />    </span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">$rgb_col</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$y_pos</span><span class="keyword">;<br /><br />    </span><span class="comment">/*<br />    If we go over 255 or under 0 we normalize it<br />    */<br />    </span><span class="keyword">foreach(</span><span class="default">$rgb_out </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$col</span><span class="keyword">){<br />      if (</span><span class="default">$col </span><span class="keyword">&gt; </span><span class="default">255</span><span class="keyword">){<br />        </span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">255</span><span class="keyword">;<br />      } else if (</span><span class="default">$col </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">){<br />        </span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br />      }<br />    }<br />    </span><span class="comment">/*<br />    Put a pixel<br />    */<br />    </span><span class="default">$col </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$rgb_out</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$col</span><span class="keyword">);<br />  }<br />}<br /></span><span class="comment">/*<br />Test output<br />*/<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="string">'colortable.jpg'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;img src="colortable.jpg"&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56249">  <div class="votes">
    <div id="Vu56249">
    <a href="/manual/vote-note.php?id=56249&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56249">
    <a href="/manual/vote-note.php?id=56249&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56249" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#56249" class="name">
  <strong class="user"><em>Brian Vaughn [php at boynamedbri dot com]</em></strong></a><a class="genanchor" href="#56249"> &para;</a><div class="date" title="2005-08-28 12:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56249">
<div class="phpcode"><code><span class="html">I looked, but was unable to find any example code to watermark an image with a watermark that contained alpha transparency. So the following class does just that. As a parameter, it takes 2 image objects: the main image, and the watermark image (which can be a gif, png, whatever) - and optionally, an alpha setting (0-100% alpha for the watermark image). It then creates and returns a new image with the alpha-transparent watermark imposed, center-aligned, over the larger image.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">watermark</span><span class="keyword">{<br /><br />    function </span><span class="default">create_watermark</span><span class="keyword">( </span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$watermark_img</span><span class="keyword">, </span><span class="default">$alpha </span><span class="keyword">= </span><span class="default">100 </span><span class="keyword">) {<br />        </span><span class="default">$alpha    </span><span class="keyword">/= </span><span class="default">100</span><span class="keyword">;    </span><span class="comment"># convert 0-100% user-friendly alpha to decimal<br /><br />        # calculate our images dimensions<br />        </span><span class="default">$dst_img_w    </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">( </span><span class="default">$dst_img </span><span class="keyword">);<br />        </span><span class="default">$dst_img_h    </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">( </span><span class="default">$dst_img </span><span class="keyword">);<br />        </span><span class="default">$watermark_img_w    </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">( </span><span class="default">$watermark_img </span><span class="keyword">);<br />        </span><span class="default">$watermark_img_h    </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">( </span><span class="default">$watermark_img </span><span class="keyword">);<br />        <br />        </span><span class="comment"># create new image to hold merged changes<br />        </span><span class="default">$return_img    </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$dst_img_w</span><span class="keyword">, </span><span class="default">$dst_img_h </span><span class="keyword">);<br /></span><span class="comment">#        $return_img    = imagecreate( $dst_img_w, $dst_img_h );<br />        <br />        # determine center position coordinates<br />        </span><span class="default">$dst_img_min_x    </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">( ( </span><span class="default">$dst_img_w </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) - ( </span><span class="default">$watermark_img_w </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) );<br />        </span><span class="default">$dst_img_max_x    </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">( ( </span><span class="default">$dst_img_w </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) + ( </span><span class="default">$watermark_img_w </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) );<br />        </span><span class="default">$dst_img_min_y    </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">( ( </span><span class="default">$dst_img_h </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) - ( </span><span class="default">$watermark_img_h </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) );<br />        </span><span class="default">$dst_img_max_y    </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">( ( </span><span class="default">$dst_img_h </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) + ( </span><span class="default">$watermark_img_h </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) );<br />        <br />        </span><span class="comment"># walk through main image<br />        </span><span class="keyword">for( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$dst_img_h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ ) {<br />            for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$dst_img_w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ ) {<br />                </span><span class="default">$return_color    </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />                <br />                </span><span class="comment"># determine the correct pixel location within our watermark<br />                </span><span class="default">$watermark_x    </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$dst_img_min_x</span><span class="keyword">;<br />                </span><span class="default">$watermark_y    </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$dst_img_min_y</span><span class="keyword">;<br />                <br />                </span><span class="comment"># fetch color information for both of our images<br />                </span><span class="default">$dst_rgb </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">( </span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">) );<br />                <br />                </span><span class="comment"># if our watermark has a non-transparent value at this pixel intersection<br />                # and we're still within the bounds of the watermark image<br />                </span><span class="keyword">if (    </span><span class="default">$watermark_x </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$watermark_x </span><span class="keyword">&lt; </span><span class="default">$watermark_img_w </span><span class="keyword">&amp;&amp;<br />                            </span><span class="default">$watermark_y </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$watermark_y </span><span class="keyword">&lt; </span><span class="default">$watermark_img_h </span><span class="keyword">) {<br />                    </span><span class="default">$watermark_rbg </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">( </span><span class="default">$watermark_img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$watermark_img</span><span class="keyword">, </span><span class="default">$watermark_x</span><span class="keyword">, </span><span class="default">$watermark_y </span><span class="keyword">) );<br />                    <br />                    </span><span class="comment"># using image alpha, and user specified alpha, calculate average<br />                    </span><span class="default">$watermark_alpha    </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">( ( ( </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$watermark_rbg</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] ) / </span><span class="default">127 </span><span class="keyword">), </span><span class="default">2 </span><span class="keyword">);<br />                    </span><span class="default">$watermark_alpha    </span><span class="keyword">= </span><span class="default">$watermark_alpha </span><span class="keyword">* </span><span class="default">$alpha</span><span class="keyword">;<br />                <br />                    </span><span class="comment"># calculate the color 'average' between the two - taking into account the specified alpha level<br />                    </span><span class="default">$avg_red        </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_ave_color</span><span class="keyword">( </span><span class="default">$dst_rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">],        </span><span class="default">$watermark_rbg</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">],        </span><span class="default">$watermark_alpha </span><span class="keyword">);<br />                    </span><span class="default">$avg_green    </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_ave_color</span><span class="keyword">( </span><span class="default">$dst_rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">],    </span><span class="default">$watermark_rbg</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">],    </span><span class="default">$watermark_alpha </span><span class="keyword">);<br />                    </span><span class="default">$avg_blue        </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_ave_color</span><span class="keyword">( </span><span class="default">$dst_rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">],    </span><span class="default">$watermark_rbg</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">],        </span><span class="default">$watermark_alpha </span><span class="keyword">);<br />                    <br />                    </span><span class="comment"># calculate a color index value using the average RGB values we've determined<br />                    </span><span class="default">$return_color    </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">imagegetcolor</span><span class="keyword">( </span><span class="default">$return_img</span><span class="keyword">, </span><span class="default">$avg_red</span><span class="keyword">, </span><span class="default">$avg_green</span><span class="keyword">, </span><span class="default">$avg_blue </span><span class="keyword">);<br />                    <br />                </span><span class="comment"># if we're not dealing with an average color here, then let's just copy over the main color<br />                </span><span class="keyword">} else {<br />                    </span><span class="default">$return_color    </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">);<br />                    <br />                } </span><span class="comment"># END if watermark<br /><br />                # draw the appropriate color onto the return image<br />                </span><span class="default">imagesetpixel</span><span class="keyword">( </span><span class="default">$return_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$return_color </span><span class="keyword">);<br /><br />            } </span><span class="comment"># END for each X pixel<br />        </span><span class="keyword">} </span><span class="comment"># END for each Y pixel<br />        <br />        # return the resulting, watermarked image for display<br />        </span><span class="keyword">return </span><span class="default">$return_img</span><span class="keyword">;<br /><br />    } </span><span class="comment"># END create_watermark()<br />    <br />    # average two colors given an alpha<br />    </span><span class="keyword">function </span><span class="default">get_ave_color</span><span class="keyword">( </span><span class="default">$color_a</span><span class="keyword">, </span><span class="default">$color_b</span><span class="keyword">, </span><span class="default">$alpha </span><span class="keyword">) {<br />        return </span><span class="default">round</span><span class="keyword">( ( ( </span><span class="default">$color_a </span><span class="keyword">* ( </span><span class="default">1 </span><span class="keyword">- </span><span class="default">$alpha </span><span class="keyword">) ) + ( </span><span class="default">$color_b    </span><span class="keyword">* </span><span class="default">$alpha </span><span class="keyword">) ) );<br />    } </span><span class="comment"># END get_ave_color()<br />    <br />    # return closest pallette-color match for RGB values<br />    </span><span class="keyword">function </span><span class="default">imagegetcolor</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />        </span><span class="default">$c</span><span class="keyword">=</span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />        if (</span><span class="default">$c</span><span class="keyword">!=-</span><span class="default">1</span><span class="keyword">) return </span><span class="default">$c</span><span class="keyword">;<br />        </span><span class="default">$c</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />        if (</span><span class="default">$c</span><span class="keyword">!=-</span><span class="default">1</span><span class="keyword">) return </span><span class="default">$c</span><span class="keyword">;<br />        return </span><span class="default">imagecolorclosest</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />    } </span><span class="comment"># EBD imagegetcolor()<br /><br /></span><span class="keyword">} </span><span class="comment"># END watermark API<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55607">  <div class="votes">
    <div id="Vu55607">
    <a href="/manual/vote-note.php?id=55607&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55607">
    <a href="/manual/vote-note.php?id=55607&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55607" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#55607" class="name">
  <strong class="user"><em>weitheism at gmail.com</em></strong></a><a class="genanchor" href="#55607"> &para;</a><div class="date" title="2005-08-08 12:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55607">
<div class="phpcode"><code><span class="html">I was looking for a way to actually DELETE pixels or squares or parts of an image from an image resource, and at first I thought imagesetpixel would do the trick. Unfortunately, it merely paints over that one pixel, and as far as I knew, php didn't have any native way of deleting sections out of your image - so this little method should take care of deleting rectangular parts of your pictures!<br /><br />function deleteRectangle(&amp;$oldImage,$leftX,$leftY,$rightX,$rightY)<br />    {<br />        // Since php has no native way of delete parts of images<br />        // We have to divide the image into four different parts and then copy them manually to a new<br />        // image<br />        <br />        $xSize = imagesx($oldImage);<br />        $ySize = imagesy($oldImage);<br />        <br />        // Divides the image into four sections to copy<br />        $imagesection = array();<br />        $imagesection[] = array(0,0,$leftX,$ySize);<br />        $imagesection[] = array($leftX,0,$rightX+1,$leftY);<br />        $imagesection[] = array($leftX,$rightY+1,$rightX+1,$ySize);<br />        $imagesection[] = array($rightX+1,0,$xSize,$ySize);<br />        <br />        // Create the new, copied image<br />        $newImage = imagecreatetruecolor($xSize,$ySize);<br />        // Vital for transparency<br />        imagesavealpha($newImage,true);<br />        <br />        // Fills the background a transparent color<br />        $transparentBackground = imagecolorallocatealpha($newImage,255,255,255,127);<br />        imagefill($newImage,0,0,$transparentBackground);<br />        <br />        // Copies each of the four imagesections into their respective old positions<br />        for($i = 0;$i&lt;count($imagesection);$i++)<br />imagecopyresampled($newImage,$oldImage, $imagesection[$i][0],$imagesection[$i][1], $imagesection[$i][0],$imagesection[$i][1], $imagesection[$i][2]-$imagesection[$i][0], $imagesection[$i][3]-$imagesection[$i][1], $imagesection[$i][2]-$imagesection[$i][0], $imagesection[$i][3]-$imagesection[$i][1]);<br />        <br />        // Alternately you can cycle through each pixel in an image and see if that pixel is an the area<br />        // but that could be more intensive<br />        imagedestroy($oldImage);<br />        <br />        // Sets the old image equal to the new, cleared image<br />        $oldImage = $newImage;<br />    }<br /><br />It was made with a transparent background in mind, but you could easily change that by changeing imagecreatetruecolor to imagecreate and deleting the code that deals with transparency. Hope it helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="45043">  <div class="votes">
    <div id="Vu45043">
    <a href="/manual/vote-note.php?id=45043&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45043">
    <a href="/manual/vote-note.php?id=45043&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45043" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#45043" class="name">
  <strong class="user"><em>richard at mf2fm dot co dot uk</em></strong></a><a class="genanchor" href="#45043"> &para;</a><div class="date" title="2004-08-24 02:06"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45043">
<div class="phpcode"><code><span class="html">Here is a function that takes an image ($im) and returns it with the contrast maximised...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">contrast</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">) {<br />    </span><span class="default">$brightness</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$maxb</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$minb</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;<br />    </span><span class="default">$imagesize</span><span class="keyword">=</span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">$w</span><span class="keyword">=</span><span class="default">$imagesize</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    </span><span class="default">$h</span><span class="keyword">=</span><span class="default">$imagesize</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    for (</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />        for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {<br />            </span><span class="default">$rgb</span><span class="keyword">=</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$rgb</span><span class="keyword">=</span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">);<br />            </span><span class="default">$grey</span><span class="keyword">=</span><span class="default">0.2125</span><span class="keyword">*</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]+<br />                </span><span class="default">0.7154</span><span class="keyword">*</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">]+<br />                </span><span class="default">0.0721</span><span class="keyword">*</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]; <br />            </span><span class="default">$brightness</span><span class="keyword">+=</span><span class="default">$grey</span><span class="keyword">;<br />            if (</span><span class="default">$grey</span><span class="keyword">&gt;</span><span class="default">$maxb</span><span class="keyword">) </span><span class="default">$maxb</span><span class="keyword">=</span><span class="default">$grey</span><span class="keyword">;<br />            if (</span><span class="default">$grey</span><span class="keyword">&lt;</span><span class="default">$minb</span><span class="keyword">) </span><span class="default">$minb</span><span class="keyword">=</span><span class="default">$grey</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">$brightness</span><span class="keyword">=</span><span class="default">$brightness</span><span class="keyword">/(</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">);<br />    </span><span class="default">$minb</span><span class="keyword">=</span><span class="default">$brightness</span><span class="keyword">/(</span><span class="default">$brightness</span><span class="keyword">-</span><span class="default">$minb</span><span class="keyword">);<br />    </span><span class="default">$maxb</span><span class="keyword">=(</span><span class="default">255</span><span class="keyword">-</span><span class="default">$brightness</span><span class="keyword">)/(</span><span class="default">$maxb</span><span class="keyword">-</span><span class="default">$brightness</span><span class="keyword">);<br />    </span><span class="default">$contrast</span><span class="keyword">=</span><span class="default">min</span><span class="keyword">(</span><span class="default">$minb</span><span class="keyword">, </span><span class="default">$maxb</span><span class="keyword">);<br />    for (</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />        for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {<br />            </span><span class="default">$rgb</span><span class="keyword">=</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$rgb</span><span class="keyword">=</span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">);<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">,<br />                </span><span class="default">65536</span><span class="keyword">*</span><span class="default">floor</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]*</span><span class="default">$contrast</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">))+<br />                </span><span class="default">256</span><span class="keyword">*</span><span class="default">floor</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">]*</span><span class="default">$contrast</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">))+<br />                </span><span class="default">floor</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]*</span><span class="default">$contrast</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">)));<br />        }<br />    }<br />    return (</span><span class="default">$im</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />An example of usage might be:<br /><span class="default">&lt;?php<br />$imagefile</span><span class="keyword">=</span><span class="string">"/path/filename"</span><span class="keyword">;<br /></span><span class="default">$image</span><span class="keyword">=</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$imagefile</span><span class="keyword">);<br /></span><span class="default">$image</span><span class="keyword">=</span><span class="default">contrast</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$imagefile</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84479">  <div class="votes">
    <div id="Vu84479">
    <a href="/manual/vote-note.php?id=84479&amp;page=function.imagesetpixel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84479">
    <a href="/manual/vote-note.php?id=84479&amp;page=function.imagesetpixel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84479" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#84479" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#84479"> &para;</a><div class="date" title="2008-07-15 09:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84479">
<div class="phpcode"><code><span class="html">This snippet creates a gradient images depending on the value of RGB components. Gradients allow your page to have a shadow effect.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try{<br />   if(!</span><span class="default">$image</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">)){<br />     throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Error creating image'</span><span class="keyword">);<br />   }<br />   <br />   for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">10</span><span class="keyword">;++</span><span class="default">$y</span><span class="keyword">)<br />      {<br />      </span><span class="default">$color</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">75</span><span class="keyword">+(</span><span class="default">$y</span><span class="keyword">*</span><span class="default">5</span><span class="keyword">),</span><span class="default">75</span><span class="keyword">+(</span><span class="default">$y</span><span class="keyword">*</span><span class="default">11</span><span class="keyword">),</span><span class="default">75</span><span class="keyword">+(</span><span class="default">$y</span><span class="keyword">*</span><span class="default">9</span><span class="keyword">));<br />      for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">50</span><span class="keyword">;++</span><span class="default">$x</span><span class="keyword">)<br />         {<br />         </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">); <br />         }<br />      }<br />     <br />   </span><span class="comment">//header("Content-type: image/jpeg");<br />   </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="string">'footerShadow.jpg'</span><span class="keyword">);<br />   </span><span class="comment">// free memory<br />   </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />   <br />}<br />catch(</span><span class="default">Exception $e</span><span class="keyword">){<br />   echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />   exit();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagesetpixel&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagesetpixel.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
