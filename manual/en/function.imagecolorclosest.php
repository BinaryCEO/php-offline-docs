<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecolorclosest - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecolorclosest.php">
 <link rel="shorturl" href="https://www.php.net/imagecolorclosest">
 <link rel="alternate" href="https://www.php.net/imagecolorclosest" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecolorat.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecolorclosestalpha.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecolorclosest.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecolorclosest.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecolorclosest.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecolorclosest.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecolorclosest.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecolorclosest.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecolorclosest.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecolorclosest.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecolorclosest.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecolorclosest.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecolorclosest.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the index of the closest color to the specified color" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecolorclosest - Manual" />
<meta name="twitter:description" content="Get the index of the closest color to the specified color" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecolorclosest - Manual" />
<meta itemprop="description" content="Get the index of the closest color to the specified color" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the index of the closest color to the specified color" />

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
        <a href="function.imagecolorclosestalpha.php">
          imagecolorclosestalpha &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecolorat.php">
          &laquo; imagecolorat        </a>
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
            <option value='en/function.imagecolorclosest.php' selected="selected">English</option>
            <option value='de/function.imagecolorclosest.php'>German</option>
            <option value='es/function.imagecolorclosest.php'>Spanish</option>
            <option value='fr/function.imagecolorclosest.php'>French</option>
            <option value='it/function.imagecolorclosest.php'>Italian</option>
            <option value='ja/function.imagecolorclosest.php'>Japanese</option>
            <option value='pt_BR/function.imagecolorclosest.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecolorclosest.php'>Russian</option>
            <option value='tr/function.imagecolorclosest.php'>Turkish</option>
            <option value='uk/function.imagecolorclosest.php'>Ukrainian</option>
            <option value='zh/function.imagecolorclosest.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecolorclosest" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecolorclosest</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecolorclosest</span> &mdash; <span class="dc-title">Get the index of the closest color to the specified color</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecolorclosest-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecolorclosest</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$red</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$green</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$blue</code></span><br>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the index of the color in the palette of the image which
   is &quot;closest&quot; to the specified <abbr title="Red-Green-Blue">RGB</abbr> value.
  </p>
  <p class="para">
   The &quot;distance&quot; between the desired color and each color in the
   palette is calculated as if the <abbr title="Red-Green-Blue">RGB</abbr> values
   represented points in three-dimensional space.
  </p>
  <p class="para">If you created the image from a file, only colors used in the image are resolved. Colors present only in the palette are not resolved.</p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecolorclosest-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">red</code></dt>
     <dd>
      <p class="para">Value of red component.</p>
     </dd>
    
    
     <dt><code class="parameter">green</code></dt>
     <dd>
      <p class="para">Value of green component.</p>
     </dd>
    
    
     <dt><code class="parameter">blue</code></dt>
     <dd>
      <p class="para">Value of blue component.</p>
     </dd>
    
   </dl>
   The colors parameters are integers between 0 and 255 or hexadecimals
   between 0x00 and 0xFF.
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecolorclosest-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the index of the closest color, in the palette of the image, to
   the specified one
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecolorclosest-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecolorclosest-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2842">
    <p><strong>Example #1 Search for a set of colors in an image</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Start with an image and convert it to a palette-based image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'figures/imagecolorclosest.png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagetruecolortopalette</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Search colors (RGB)<br /></span><span style="color: #0000BB">$colors </span><span style="color: #007700">= array(<br />    array(</span><span style="color: #0000BB">254</span><span style="color: #007700">, </span><span style="color: #0000BB">145</span><span style="color: #007700">, </span><span style="color: #0000BB">154</span><span style="color: #007700">),<br />    array(</span><span style="color: #0000BB">153</span><span style="color: #007700">, </span><span style="color: #0000BB">145</span><span style="color: #007700">, </span><span style="color: #0000BB">188</span><span style="color: #007700">),<br />    array(</span><span style="color: #0000BB">153</span><span style="color: #007700">, </span><span style="color: #0000BB">90</span><span style="color: #007700">, </span><span style="color: #0000BB">145</span><span style="color: #007700">),<br />    array(</span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">137</span><span style="color: #007700">, </span><span style="color: #0000BB">92</span><span style="color: #007700">)<br />);<br /><br /></span><span style="color: #FF8000">// Loop through each search and find the closest color in the palette.<br />// Return the search number, the search RGB and the converted RGB match<br /></span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$colors </span><span style="color: #007700">as </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorclosest</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">], </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #DD0000">"(</span><span style="color: #007700">{</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">]}</span><span style="color: #DD0000">, </span><span style="color: #007700">{</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">]}</span><span style="color: #DD0000">, </span><span style="color: #007700">{</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br /><br />    echo </span><span style="color: #DD0000">"#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">: Search (</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]</span><span style="color: #DD0000">, </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]</span><span style="color: #DD0000">, </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]</span><span style="color: #DD0000">); Closest match: </span><span style="color: #0000BB">$result</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">#0: Search (254, 145, 154); Closest match: (252, 150, 148).
#1: Search (153, 145, 188); Closest match: (148, 150, 196).
#2: Search (153, 90, 145); Closest match: (148, 90, 156).
#3: Search (255, 137, 92); Closest match: (252, 150, 92).</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagecolorclosest-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecolorexact.php" class="function" rel="rdfs-seeAlso">imagecolorexact()</a> - Get the index of the specified color</span></li>
   <li><span class="function"><a href="function.imagecolorclosestalpha.php" class="function" rel="rdfs-seeAlso">imagecolorclosestalpha()</a> - Get the index of the closest color to the specified color + alpha</span></li>
   <li><span class="function"><a href="function.imagecolorclosesthwb.php" class="function" rel="rdfs-seeAlso">imagecolorclosesthwb()</a> - Get the index of the color which has the hue, white and blackness</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecolorclosest.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecolorclosest%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecolorclosest&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorclosest.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106433">  <div class="votes">
    <div id="Vu106433">
    <a href="/manual/vote-note.php?id=106433&amp;page=function.imagecolorclosest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106433">
    <a href="/manual/vote-note.php?id=106433&amp;page=function.imagecolorclosest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106433" title="70% like this...">
    4
    </div>
  </div>
  <a href="#106433" class="name">
  <strong class="user"><em>info at codeworx dot ch</em></strong></a><a class="genanchor" href="#106433"> &para;</a><div class="date" title="2011-11-09 02:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106433">
<div class="phpcode"><code><span class="html">Here is a function that compares two HEX colors for similarity. This can be useful if you want to detect colors that are not different enough to see for the naked eye. It returns a bool: TRUE if the colors are similar to each other (within tolerance) or FALSE if they are different enough.<br />I tested a few colors and came up with a tolerance of 35 (rgb value - should be between 0 and 255) but you can change that tolerance by passing a third parameter to the function.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">compareColors </span><span class="keyword">(</span><span class="default">$col1</span><span class="keyword">, </span><span class="default">$col2</span><span class="keyword">, </span><span class="default">$tolerance</span><span class="keyword">=</span><span class="default">35</span><span class="keyword">) {<br />    </span><span class="default">$col1Rgb </span><span class="keyword">= array(<br />        </span><span class="string">"r" </span><span class="keyword">=&gt; </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$col1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)),<br />        </span><span class="string">"g" </span><span class="keyword">=&gt; </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$col1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)),<br />        </span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$col1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">))<br />    );<br />    </span><span class="default">$col2Rgb </span><span class="keyword">= array(<br />        </span><span class="string">"r" </span><span class="keyword">=&gt; </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$col2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)),<br />        </span><span class="string">"g" </span><span class="keyword">=&gt; </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$col2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)),<br />        </span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$col2</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">))<br />    );<br />    return (</span><span class="default">$col1Rgb</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">] &gt;= </span><span class="default">$col2Rgb</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">] - </span><span class="default">$tolerance </span><span class="keyword">&amp;&amp; </span><span class="default">$col1Rgb</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">] &lt;= </span><span class="default">$col2Rgb</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">] + </span><span class="default">$tolerance</span><span class="keyword">) &amp;&amp; (</span><span class="default">$col1Rgb</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">] &gt;= </span><span class="default">$col2Rgb</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">] - </span><span class="default">$tolerance </span><span class="keyword">&amp;&amp; </span><span class="default">$col1Rgb</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">] &lt;= </span><span class="default">$col2Rgb</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">] + </span><span class="default">$tolerance</span><span class="keyword">) &amp;&amp; (</span><span class="default">$col1Rgb</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] &gt;= </span><span class="default">$col2Rgb</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] - </span><span class="default">$tolerance </span><span class="keyword">&amp;&amp; </span><span class="default">$col1Rgb</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] &lt;= </span><span class="default">$col2Rgb</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] + </span><span class="default">$tolerance</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121418">  <div class="votes">
    <div id="Vu121418">
    <a href="/manual/vote-note.php?id=121418&amp;page=function.imagecolorclosest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121418">
    <a href="/manual/vote-note.php?id=121418&amp;page=function.imagecolorclosest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121418" title="100% like this...">
    1
    </div>
  </div>
  <a href="#121418" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121418"> &para;</a><div class="date" title="2017-07-23 04:33"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121418">
<div class="phpcode"><code><span class="html">RGB space isn't the best choice for measuring the distance between two colours, since it ignores, for example, the fact that we count both dark green and light green as "green" (the RGB distance between #000000 and #7f7f7f is the same as the distance between #000000 and #5443c0 - a slightly darkened SlateBlue).<br /><br />A better choice of colour space that conforms better to how colours are perceived is the so-called Lab space, which measures colours according to how light/dark, red/green, and yellow/blue they are. (There are still better models, but they come at the expense of increased computation.)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">warp1</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">)<br />{<br />    if(</span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">10.3148</span><span class="keyword">)<br />    {<br />        return </span><span class="default">pow</span><span class="keyword">((</span><span class="default">561 </span><span class="keyword">+ </span><span class="default">40</span><span class="keyword">*</span><span class="default">$c</span><span class="keyword">)/</span><span class="default">10761</span><span class="keyword">, </span><span class="default">2.4</span><span class="keyword">);<br />    }<br />    else<br />    {<br />        return </span><span class="default">$c </span><span class="keyword">/ </span><span class="default">3294.6</span><span class="keyword">;<br />    }<br />}<br />function </span><span class="default">warp2</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">)<br />{<br />    if(</span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">0.008856</span><span class="keyword">)<br />    {<br />        return </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">/</span><span class="default">3</span><span class="keyword">);<br />    }<br />    else<br />    {<br />        return </span><span class="default">7.787 </span><span class="keyword">* </span><span class="default">$c </span><span class="keyword">+ </span><span class="default">4</span><span class="keyword">/</span><span class="default">29</span><span class="keyword">;<br />    }<br />}<br />function </span><span class="default">rgb2lab</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">)<br />{<br />    [</span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue</span><span class="keyword">] = </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'warp1'</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">);<br /><br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">warp2</span><span class="keyword">(</span><span class="default">$red </span><span class="keyword">* </span><span class="default">0.4339 </span><span class="keyword">+ </span><span class="default">$green </span><span class="keyword">* </span><span class="default">0.3762 </span><span class="keyword">+ </span><span class="default">$blue </span><span class="keyword">* </span><span class="default">0.1899</span><span class="keyword">);<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">warp2</span><span class="keyword">(</span><span class="default">$red </span><span class="keyword">* </span><span class="default">0.2126 </span><span class="keyword">+ </span><span class="default">$green </span><span class="keyword">* </span><span class="default">0.7152 </span><span class="keyword">+ </span><span class="default">$blue </span><span class="keyword">* </span><span class="default">0.0722</span><span class="keyword">);<br />    </span><span class="default">$z </span><span class="keyword">= </span><span class="default">warp2</span><span class="keyword">(</span><span class="default">$red </span><span class="keyword">* </span><span class="default">0.0178 </span><span class="keyword">+ </span><span class="default">$green </span><span class="keyword">* </span><span class="default">0.1098 </span><span class="keyword">+ </span><span class="default">$blue </span><span class="keyword">* </span><span class="default">0.8730</span><span class="keyword">);<br /><br />    </span><span class="default">$l </span><span class="keyword">= </span><span class="default">116</span><span class="keyword">*</span><span class="default">$y </span><span class="keyword">- </span><span class="default">16</span><span class="keyword">;<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">500 </span><span class="keyword">* (</span><span class="default">$x </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">);<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">200 </span><span class="keyword">* (</span><span class="default">$y </span><span class="keyword">- </span><span class="default">$z</span><span class="keyword">);<br />    <br />    return </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'intval'</span><span class="keyword">, [</span><span class="default">$l</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">]);<br />}<br /><br />function </span><span class="default">generate_palette_from_image</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)<br />{<br />    </span><span class="default">$pal </span><span class="keyword">= [];<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">; ++</span><span class="default">$x</span><span class="keyword">)<br />    {<br />        for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">; ++</span><span class="default">$y</span><span class="keyword">)<br />        {<br />            </span><span class="default">$pal</span><span class="keyword">[] = </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />        }<br />    }<br />    return </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$col</span><span class="keyword">)use(</span><span class="default">$image</span><span class="keyword">)<br />    {<br />        </span><span class="default">$rgba </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$col</span><span class="keyword">);<br />        return [</span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]];<br />    },    </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$pal</span><span class="keyword">));<br />}<br /><br />function </span><span class="default">closest_rgb_in_palette</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">, </span><span class="default">$palette</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Quick return when the exact<br />    // colour is in the palette.<br />    </span><span class="keyword">if((</span><span class="default">$idx </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">, </span><span class="default">$palette</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$idx</span><span class="keyword">;<br />    }<br />    [</span><span class="default">$tl</span><span class="keyword">, </span><span class="default">$ta</span><span class="keyword">, </span><span class="default">$tb</span><span class="keyword">] = </span><span class="default">rgb2lab</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">);<br />    </span><span class="default">$dists </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$plab</span><span class="keyword">)use(</span><span class="default">$tl</span><span class="keyword">, </span><span class="default">$ta</span><span class="keyword">, </span><span class="default">$tb</span><span class="keyword">)<br />    {<br />        [</span><span class="default">$pl</span><span class="keyword">, </span><span class="default">$pa</span><span class="keyword">, </span><span class="default">$pb</span><span class="keyword">] = </span><span class="default">$plab</span><span class="keyword">;<br />        </span><span class="default">$dl </span><span class="keyword">= </span><span class="default">$pl </span><span class="keyword">- </span><span class="default">$tl</span><span class="keyword">;<br />        </span><span class="default">$da </span><span class="keyword">= </span><span class="default">$pa </span><span class="keyword">- </span><span class="default">$ta</span><span class="keyword">;<br />        </span><span class="default">$db </span><span class="keyword">= </span><span class="default">$pa </span><span class="keyword">- </span><span class="default">$tb</span><span class="keyword">;<br />        return </span><span class="default">$dl </span><span class="keyword">* </span><span class="default">$dl </span><span class="keyword">+ </span><span class="default">$da </span><span class="keyword">* </span><span class="default">$da </span><span class="keyword">+ </span><span class="default">$db </span><span class="keyword">* </span><span class="default">$db</span><span class="keyword">;<br />    }, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'rgb2lab'</span><span class="keyword">, </span><span class="default">$palette</span><span class="keyword">));<br />    return </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">min</span><span class="keyword">(</span><span class="default">$dists</span><span class="keyword">), </span><span class="default">$dists</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">closest_rgb_in_image</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">)<br />{<br />    </span><span class="default">$palette </span><span class="keyword">= </span><span class="default">generate_palette_from_image</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    return </span><span class="default">$palette</span><span class="keyword">[</span><span class="default">closest_rgb_in_palette</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">, </span><span class="default">$palette</span><span class="keyword">)];<br />}<br /><br /></span><span class="default">$lena </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'lena.png'</span><span class="keyword">);<br /></span><span class="default">$red </span><span class="keyword">= </span><span class="default">closest_rgb_in_image</span><span class="keyword">([</span><span class="default">255</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">],</span><span class="default">$lena</span><span class="keyword">);<br />echo </span><span class="default">join</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);  </span><span class="comment">// 228 71 82<br /><br /></span><span class="default">?&gt;<br /></span><br />If you're going to be matching a lot of colours to a palette, you may want to precompute and reuse the Lab palette, instead of generating it fresh each time as done here.</span></code></div>
  </div>
 </div>
  <div class="note" id="54254">  <div class="votes">
    <div id="Vu54254">
    <a href="/manual/vote-note.php?id=54254&amp;page=function.imagecolorclosest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54254">
    <a href="/manual/vote-note.php?id=54254&amp;page=function.imagecolorclosest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54254" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#54254" class="name">
  <strong class="user"><em>MagicalTux at FF dot st</em></strong></a><a class="genanchor" href="#54254"> &para;</a><div class="date" title="2005-06-28 06:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54254">
<div class="phpcode"><code><span class="html">A way to get each time an answer :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagegetcolor</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />        </span><span class="default">$c</span><span class="keyword">=</span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />        if (</span><span class="default">$c</span><span class="keyword">!=-</span><span class="default">1</span><span class="keyword">) return </span><span class="default">$c</span><span class="keyword">;<br />        </span><span class="default">$c</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />        if (</span><span class="default">$c</span><span class="keyword">!=-</span><span class="default">1</span><span class="keyword">) return </span><span class="default">$c</span><span class="keyword">;<br />        return </span><span class="default">imagecolorclosest</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />If the *exact* color is found in the image, it will be returned. If we don't have the exact color, we try to allocate it. If we can't allocate it, we return the closest color in the image.</span></code></div>
  </div>
 </div>
  <div class="note" id="36489">  <div class="votes">
    <div id="Vu36489">
    <a href="/manual/vote-note.php?id=36489&amp;page=function.imagecolorclosest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36489">
    <a href="/manual/vote-note.php?id=36489&amp;page=function.imagecolorclosest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36489" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#36489" class="name">
  <strong class="user"><em>Vikrant Korde &lt;vakorde at hotmail dot com&gt;</em></strong></a><a class="genanchor" href="#36489"> &para;</a><div class="date" title="2003-10-11 08:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36489">
<div class="phpcode"><code><span class="html">This functuion is useful when you are dealing with previously present images like .png, .jpg, etc. You can use this function for writing a text on the image.<br /><br />For me the function imagecolorallocate() was returning the -1 value. after lot of RnD and site search i found a function use of imagecolorclosest(). This solved my problem of writing the text on the image with customised color. <br /><br />Actually previously it was writing on the image but the color was not distinct. It was using the same color as of that background image. <br /><br />The following code segment was fine with me.<br /><br />header ("Content-type: image/jpeg"); <br />$im = imagecreatefromjpeg("BlankButton.jpg");<br />$white = imageColorClosest($im, 255,255,255);<br />// this is for TTF fonts<br />imagettftext ($im, 20, 0, 16, 30, $white, "/usr/X11R6/lib/X11/fonts/TTF/luximb.ttf", "Vikrant"); <br /><br />//this is for notmal font<br />imagestring($im, 4, 0,0,"Korde", $white);<br />imagejpeg($im,"",150); <br />imagedestroy ($im);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecolorclosest&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorclosest.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
