<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecreatefromstring - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecreatefromstring.php">
 <link rel="shorturl" href="https://www.php.net/imagecreatefromstring">
 <link rel="alternate" href="https://www.php.net/imagecreatefromstring" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecreatefrompng.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecreatefromtga.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecreatefromstring.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecreatefromstring.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecreatefromstring.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecreatefromstring.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecreatefromstring.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecreatefromstring.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecreatefromstring.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecreatefromstring.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecreatefromstring.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecreatefromstring.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecreatefromstring.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a new image from the image stream in the string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecreatefromstring - Manual" />
<meta name="twitter:description" content="Create a new image from the image stream in the string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecreatefromstring - Manual" />
<meta itemprop="description" content="Create a new image from the image stream in the string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a new image from the image stream in the string" />

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
        <a href="function.imagecreatefromtga.php">
          imagecreatefromtga &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecreatefrompng.php">
          &laquo; imagecreatefrompng        </a>
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
            <option value='en/function.imagecreatefromstring.php' selected="selected">English</option>
            <option value='de/function.imagecreatefromstring.php'>German</option>
            <option value='es/function.imagecreatefromstring.php'>Spanish</option>
            <option value='fr/function.imagecreatefromstring.php'>French</option>
            <option value='it/function.imagecreatefromstring.php'>Italian</option>
            <option value='ja/function.imagecreatefromstring.php'>Japanese</option>
            <option value='pt_BR/function.imagecreatefromstring.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecreatefromstring.php'>Russian</option>
            <option value='tr/function.imagecreatefromstring.php'>Turkish</option>
            <option value='uk/function.imagecreatefromstring.php'>Ukrainian</option>
            <option value='zh/function.imagecreatefromstring.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecreatefromstring" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecreatefromstring</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecreatefromstring</span> &mdash; <span class="dc-title">Create a new image from the image stream in the string</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecreatefromstring-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecreatefromstring</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagecreatefromstring()</strong></span> returns an image identifier
   representing the image obtained from the given <code class="parameter">data</code>.
   These types will be automatically detected if your build of PHP supports 
   them: JPEG, PNG, GIF, BMP, WBMP, GD2, WEBP and AVIF.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecreatefromstring-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       A string containing the image data.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecreatefromstring-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An image object will be returned on success. <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned if
   the image type is unsupported, the data is not in a recognised format,
   or the image is corrupt and cannot be loaded.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.imagecreatefromstring-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <span class="function"><strong>imagecreatefromstring()</strong></span> raises an E_WARNING level error,
   if the data is not in a recognized format.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecreatefromstring-changelog">
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
       On success, this function returns a <span class="classname"><a href="class.gdimage.php" class="classname">GDImage</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

     <tr>
      <td>7.3.0</td>
      <td>
       WEBP is supported now (if supported by the libgd in use).
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagecreatefromstring-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2871">
    <p><strong>Example #1 <span class="function"><strong>imagecreatefromstring()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= </span><span style="color: #DD0000">'iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABl'<br />       </span><span style="color: #007700">. </span><span style="color: #DD0000">'BMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDr'<br />       </span><span style="color: #007700">. </span><span style="color: #DD0000">'EX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r'<br />       </span><span style="color: #007700">. </span><span style="color: #DD0000">'8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg=='</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">base64_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromstring</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$im </span><span style="color: #007700">!== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br />}<br />else {<br />    echo </span><span style="color: #DD0000">'An error occurred.'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagecreatefromstring.png" alt="Output of example : imagecreatefromstring()" width="28" height="18" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagecreatefromstring-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecreatefromjpeg.php" class="function" rel="rdfs-seeAlso">imagecreatefromjpeg()</a> - Create a new image from file or URL</span></li>
   <li><span class="function"><a href="function.imagecreatefrompng.php" class="function" rel="rdfs-seeAlso">imagecreatefrompng()</a> - Create a new image from file or URL</span></li>
   <li><span class="function"><a href="function.imagecreatefromgif.php" class="function" rel="rdfs-seeAlso">imagecreatefromgif()</a> - Create a new image from file or URL</span></li>
   <li><span class="function"><a href="function.imagecreatetruecolor.php" class="function" rel="rdfs-seeAlso">imagecreatetruecolor()</a> - Create a new true color image</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecreatefromstring.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecreatefromstring%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecreatefromstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecreatefromstring.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="85909">  <div class="votes">
    <div id="Vu85909">
    <a href="/manual/vote-note.php?id=85909&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85909">
    <a href="/manual/vote-note.php?id=85909&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85909" title="66% like this...">
    30
    </div>
  </div>
  <a href="#85909" class="name">
  <strong class="user"><em>ville dot jungman at gmail dot com</em></strong></a><a class="genanchor" href="#85909"> &para;</a><div class="date" title="2008-09-24 02:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85909">
<div class="phpcode"><code><span class="html">While downloading images from internet, it's easiest to let php decide what is the file type. So, forget using imagecreatefromjpg, imagecreatefromgif and imagecreatefrompng. Instead, this is the way to go:<br /><br /><span class="default">&lt;?php<br />$src </span><span class="keyword">= </span><span class="string">"<a href="http://www.varuste.net/tiedostot/l_ylabanneri.jpg" rel="nofollow" target="_blank">http://www.varuste.net/tiedostot/l_ylabanneri.jpg</a>"</span><span class="keyword">;<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromstring</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94254">  <div class="votes">
    <div id="Vu94254">
    <a href="/manual/vote-note.php?id=94254&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94254">
    <a href="/manual/vote-note.php?id=94254&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94254" title="62% like this...">
    9
    </div>
  </div>
  <a href="#94254" class="name">
  <strong class="user"><em>php dot net at phor dot net</em></strong></a><a class="genanchor" href="#94254"> &para;</a><div class="date" title="2009-10-25 11:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94254">
<div class="phpcode"><code><span class="html">My site allows anonymous uploads to a web-accessible location (that will execute a script if it finds one).<br /><br />Naturally, I need to verify that only harmless content is accepted. I am expecting only images, so I use:<br /><br /><span class="default">&lt;?php<br />  $im </span><span class="keyword">= </span><span class="default">$imagecreatefromstring</span><span class="keyword">(</span><span class="default">$USERFILE</span><span class="keyword">);<br />  </span><span class="default">$valid </span><span class="keyword">= (</span><span class="default">$im </span><span class="keyword">!= </span><span class="default">FALSE</span><span class="keyword">);<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />  return </span><span class="default">$valid</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118792">  <div class="votes">
    <div id="Vu118792">
    <a href="/manual/vote-note.php?id=118792&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118792">
    <a href="/manual/vote-note.php?id=118792&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118792" title="66% like this...">
    5
    </div>
  </div>
  <a href="#118792" class="name">
  <strong class="user"><em>anon at dude dot com</em></strong></a><a class="genanchor" href="#118792"> &para;</a><div class="date" title="2016-02-07 12:59"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118792">
<div class="phpcode"><code><span class="html">[Editor's note: BMP will be supported as of PHP 7.2.0.]
<br />
<br />In case it's not obvious from the lack of "imagecreatefrombmp()" in GD, this function cannot handle plain old BMP files either.</span></code></div>
  </div>
 </div>
  <div class="note" id="124150">  <div class="votes">
    <div id="Vu124150">
    <a href="/manual/vote-note.php?id=124150&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124150">
    <a href="/manual/vote-note.php?id=124150&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124150" title="66% like this...">
    4
    </div>
  </div>
  <a href="#124150" class="name">
  <strong class="user"><em>chris at haydenwheeler dot com</em></strong></a><a class="genanchor" href="#124150"> &para;</a><div class="date" title="2019-08-28 01:55"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124150">
<div class="phpcode"><code><span class="html">imagecreatefromstring does not appear to support WebP images (tested on PHP 7.2.10, with GD 2.1.0 and GD WebP support enabled)</span></code></div>
  </div>
 </div>
  <div class="note" id="92823">  <div class="votes">
    <div id="Vu92823">
    <a href="/manual/vote-note.php?id=92823&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92823">
    <a href="/manual/vote-note.php?id=92823&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92823" title="64% like this...">
    5
    </div>
  </div>
  <a href="#92823" class="name">
  <strong class="user"><em>logan at logansbailey dot com</em></strong></a><a class="genanchor" href="#92823"> &para;</a><div class="date" title="2009-08-10 06:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92823">
<div class="phpcode"><code><span class="html">So you guys don't spend an hour trying to figure out why your script keeps running out of memory when you're using this or the other imagecreatefrom functions.  GD uncompresses the image when you use these functions, and this can lead to your script running out of memory.<br /><br />If you download a rawimage save it on your computer to jpeg so the file size comes down, GD will automatically convert it to the raw and you can possibly run out of memory.</span></code></div>
  </div>
 </div>
  <div class="note" id="77792">  <div class="votes">
    <div id="Vu77792">
    <a href="/manual/vote-note.php?id=77792&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77792">
    <a href="/manual/vote-note.php?id=77792&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77792" title="57% like this...">
    1
    </div>
  </div>
  <a href="#77792" class="name">
  <strong class="user"><em>Blizzke at gmail dot com</em></strong></a><a class="genanchor" href="#77792"> &para;</a><div class="date" title="2007-09-13 02:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77792">
<div class="phpcode"><code><span class="html">I use dynamically generated images that require a little touch-up before being displayed. So essentially I do some base work, then store the images in a memory cache (APC), reload the images again from the cache later on "into" GD, do final processing and then display the image. <br />Since I wanted to avoid a lot of disc access I used the output buffering functions:<br /><br /><span class="default">&lt;?php<br />   </span><span class="comment">// Do your image processing stuff<br />   <br />   // Start buffering<br />   </span><span class="default">ob_start </span><span class="keyword">( );<br />   </span><span class="default">ImageGD </span><span class="keyword">( </span><span class="default">$hImage </span><span class="keyword">);<br />   </span><span class="default">$sImage </span><span class="keyword">= </span><span class="default">ob_get_contents </span><span class="keyword">( );<br />   </span><span class="default">ob_end_clean </span><span class="keyword">( );<br /><br />   </span><span class="comment">// Put stuff into cache<br /> <br />   // Reload from cache and recreate image<br />   </span><span class="default">$hImage </span><span class="keyword">= </span><span class="default">imagecreatefromstring </span><span class="keyword">( </span><span class="default">$sImage </span><span class="keyword">);<br /><br />   </span><span class="comment">// Do final editing stuff and output image<br /></span><span class="default">?&gt;<br /></span><br />Of course this is a condensed example but I just wanted to share the idea.</span></code></div>
  </div>
 </div>
  <div class="note" id="104147">  <div class="votes">
    <div id="Vu104147">
    <a href="/manual/vote-note.php?id=104147&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104147">
    <a href="/manual/vote-note.php?id=104147&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104147" title="55% like this...">
    2
    </div>
  </div>
  <a href="#104147" class="name">
  <strong class="user"><em>hope at it-helps dot com</em></strong></a><a class="genanchor" href="#104147"> &para;</a><div class="date" title="2011-05-26 04:29"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104147">
<div class="phpcode"><code><span class="html">Create an image resource from file, without knowing image type:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">imagecreatefromfile</span><span class="keyword">(</span><span class="default">$imagepath</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {
<br />    if(!</span><span class="default">$imagepath </span><span class="keyword">|| !</span><span class="default">$is_readable</span><span class="keyword">(</span><span class="default">$imagepath</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;
<br />    return @</span><span class="default">imagecreatefromstring</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$imagepath</span><span class="keyword">));
<br />}
<br /></span><span class="default">$img_resource</span><span class="keyword">=</span><span class="default">imagecreatefromfile</span><span class="keyword">(</span><span class="default">$imagepath</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62351">  <div class="votes">
    <div id="Vu62351">
    <a href="/manual/vote-note.php?id=62351&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62351">
    <a href="/manual/vote-note.php?id=62351&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62351" title="50% like this...">
    0
    </div>
  </div>
  <a href="#62351" class="name">
  <strong class="user"><em>junkmail at pmobl dot com</em></strong></a><a class="genanchor" href="#62351"> &para;</a><div class="date" title="2006-02-25 02:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62351">
<div class="phpcode"><code><span class="html">I know a lot of people have been having trouble using images from the Sprint PPC6700 with GD.  The jpeg library always thows an error about 16 bytes of extraneous data.  I decided to poke around in a hex editor and found those extraneous bytes occur right at the end of the exif data.<br /><br />By removing this extraneous data, images can easily be manipulated by GD and the EXIF extension as a normal images.  This also removes any problems using the images with GIMP which must rely on the same jpeg libraries.<br /><br />Here is a function that will check to see if an image is from the PPC6700 and then remove the extraneous data for you.  The result can successully be used with imagecreatefromstring<br /><br />Author: Paul Visco<br />IM: paulsidekick<br />Created: 2-12-06<br /><br />function checkFixPPC6700($orig){<br /><br />    //get the file contents<br />    $data = file_get_contents($orig);<br /><br />    //if its a PPC 6700 image cut out the extraneous 16 bits<br />    if(strstr($data, "\x41\x70\x61\x63\x68\x65\x00\x48")){<br />//this next line can all be one string I split it up so the form on php.net would accept it<br />        $bad_data ="\x00\x10\x4A\x46" . "\x49\x46\x00\x01\x01" . "\x00\x00\x01\x00\x01\x00\x00";<br />        return substr_replace($data, "", strpos($data, $bad_data),<br />        strlen($bad_data));<br />    } else {<br />        //if not from a PPC 6700 return data unaltered<br />         return $data;<br />    }<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="124517">  <div class="votes">
    <div id="Vu124517">
    <a href="/manual/vote-note.php?id=124517&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124517">
    <a href="/manual/vote-note.php?id=124517&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124517" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#124517" class="name">
  <strong class="user"><em>adeline dot duterre at boxify dot be</em></strong></a><a class="genanchor" href="#124517"> &para;</a><div class="date" title="2019-12-17 04:28"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124517">
<div class="phpcode"><code><span class="html">Many websites add, during the conversion from .jpg / .png to base64 some words before the base64 string : "data:image/png;base64,"<br /><br />If you let them, the PHP function will return an error "Data is not in a recognized format in".<br /><br />If you have this situation : <br /><br />$image_string=str_replace("data:image/png;base64,","",$image_string);<br />$image_string = base64_decode($image_string);<br />$img = imagecreatefromstring($image_string);</span></code></div>
  </div>
 </div>
  <div class="note" id="56260">  <div class="votes">
    <div id="Vu56260">
    <a href="/manual/vote-note.php?id=56260&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56260">
    <a href="/manual/vote-note.php?id=56260&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56260" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#56260" class="name">
  <strong class="user"><em>alexandrebr at ignorethis dot gmail dot com</em></strong></a><a class="genanchor" href="#56260"> &para;</a><div class="date" title="2005-08-28 05:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56260">
<div class="phpcode"><code><span class="html">An easy example to help understanding this function...<br /><br />&lt;?<br />$loadFile = "<a href="http://static.php.net/images/php.gif" rel="nofollow" target="_blank">http://static.php.net/images/php.gif</a>";<br /><br />$im = imagecreatefromstring(file_get_contents($loadFile));<br />// identical to imagecreatefromgif($loadFile);<br />imagegif($im);<br />?&gt;<br /><br />The function will try to auto-determine file format (jpg, gif, png....), and will return false if fails.</span></code></div>
  </div>
 </div>
  <div class="note" id="55114">  <div class="votes">
    <div id="Vu55114">
    <a href="/manual/vote-note.php?id=55114&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55114">
    <a href="/manual/vote-note.php?id=55114&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55114" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#55114" class="name">
  <strong class="user"><em>paul at epeeps dot net</em></strong></a><a class="genanchor" href="#55114"> &para;</a><div class="date" title="2005-07-25 07:39"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55114">
<div class="phpcode"><code><span class="html">I run a blogging site that allowed users to publish images from their cell phones.  For some reason, the nokia 3220 produces jpegs with extrandeous data before the EOF 0xFFF9<br /><br />I wrote this class to allow you to fix the images so that they can be used with GD to resize and manipulate.  Without applying the fix both GD and gimp report errors for the file.  If basically keeps eating bytes from the junk part till the file is a valid jpeg.  Here is an example bunk pic written by a nokia 3220 that you cna test it with <a href="http://www.shawnrider.com/moblog/cache/0854747001121624103.jpg" rel="nofollow" target="_blank">http://www.shawnrider.com/moblog/cache/0854747001121624103.jpg</a><br /><br />/*<br />Author: Paul Visco<br />Hompage: <a href="http://www.elmwoodstrip.com?u=paul" rel="nofollow" target="_blank">http://www.elmwoodstrip.com?u=paul</a><br />AIM: paulsidekick<br />Notes:  The file allows you fix the jpegs created by the Nokia 3220 picture phone so that they can be manipulated using the GD library with PHP.<br /><br />Usage:  Simply instanitiate the class and then call the fix method for each image.<br />e.g. <br />$nokia = new nokia;<br />$nokia-&gt;debug ="y";<br />$nokia-&gt;fix("yourpic.jpg");<br />*/<br /><br />class nokia<br />{<br />    public $file;<br />    public $debug = "n";<br />    public $dir_name = "";<br />    private $img; //the image created from the string<br />    private $str;<br />    <br />    function fix($file)<br />    {<br />        <br />        //set the file to fix<br />        $this-&gt;file = $file;<br />    <br />        //load the file into a string<br />        $this-&gt;str = file_get_contents($this-&gt;file);<br />        <br />        //test to see if it is a nokia image or if it has been corrupted previously<br />        if (substr_count($this-&gt;str, chr(0x28).chr(0x36).chr(0x28).chr(0x2B)) == 0 || @imagecreatefromstring($this-&gt;str)) <br />        { <br />            if ($this-&gt;debug =="y")<br />            {<br />                echo "\n&lt;br /&gt;".$this-&gt;file." is not a corrupted Nokia pic";<br />            }<br />            <br />            return true;<br />        }<br />        <br />        //make a directory for fixed images if it doesn't exist and is specified<br />        if(!empty($this-&gt;dir_name) &amp;&amp; !is_dir($this-&gt;dir_name))<br />        {<br />            @mkdir($this-&gt;dir_name, 0777);<br />        }<br />        <br />        //strip out the funk e crap from the file<br />        $this-&gt;eat($this-&gt;str);<br />        <br />        //write the file back to itself<br />        file_put_contents($this-&gt;dir_name.$this-&gt;file, $this-&gt;str);<br /><br />        //return true for fixed<br />        return true;<br /><br />    }<br />    <br />    function eat()<br />    {<br />    <br />        //check the image<br />        $this-&gt;img = @imagecreatefromstring($this-&gt;str);<br />        <br />        //if the image doesn't work then keep striping out crap<br />        while(!$this-&gt;img)<br />        {<br />            //cut off the bad bytes one by one<br />            $this-&gt;str= substr_replace($this-&gt;str, "", -3, -2);<br />            <br />            //check the image again<br />            $this-&gt;img = @imagecreatefromstring($this-&gt;str);<br />        }  <br />        <br />        if ($this-&gt;debug =="y")<br />        {<br />            //notify the user it's fixed<br />            echo "\n&lt;br /&gt;Nasty bits eaten!! ".$this-&gt;file." is fixed now thanks to p:labs!";<br />        }<br />        return true;<br />    }<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="34677">  <div class="votes">
    <div id="Vu34677">
    <a href="/manual/vote-note.php?id=34677&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34677">
    <a href="/manual/vote-note.php?id=34677&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34677" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#34677" class="name">
  <strong class="user"><em>not given</em></strong></a><a class="genanchor" href="#34677"> &para;</a><div class="date" title="2003-08-03 02:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34677">
<div class="phpcode"><code><span class="html">A note to the previous question (if you still don't know it :))...<br /><br />GIF's are 256 colors (or 8 bit), and the resample function needs true color I guess... that's why it works with JPG's and not with GIF's.<br /><br />Next thing... you take a string, write it to file, open the file (imagecreatefromgif), and delete the file again.<br /><br />if you do imagecreatefromstring($string) you can skip the temporary file part.</span></code></div>
  </div>
 </div>
  <div class="note" id="85614">  <div class="votes">
    <div id="Vu85614">
    <a href="/manual/vote-note.php?id=85614&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85614">
    <a href="/manual/vote-note.php?id=85614&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85614" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#85614" class="name">
  <strong class="user"><em>nfo[NOSPAM] at safernetworks dot net</em></strong></a><a class="genanchor" href="#85614"> &para;</a><div class="date" title="2008-09-08 07:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85614">
<div class="phpcode"><code><span class="html">The only way I managed to resolve the loading of image files from file data either on local site or from off-site protocols is as follows. I hope this saves someone else the two hours of debugging and looking for good examples.<br />[PHP]<br /><br /><span class="default">&lt;?php<br />$sFile </span><span class="keyword">= </span><span class="string">"<a href="http://www.justgreatwine.co.uk/img/vineyard.jpg" rel="nofollow" target="_blank">http://www.justgreatwine.co.uk/img/vineyard.jpg</a>"</span><span class="keyword">;<br /></span><span class="default">$imagedata </span><span class="keyword">= </span><span class="default">GetFileData</span><span class="keyword">(</span><span class="default">$sFile</span><span class="keyword">); </span><span class="comment">//load the file in 4k chunks<br />/*=======THE OUTPUT=========*/<br /></span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="comment">// assuming you have image data in $imagedata<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$imagedata</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Last-Modified: '</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">'r'</span><span class="keyword">));<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Accept-Ranges: bytes'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: '</span><span class="keyword">.</span><span class="default">$length</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: image/jpeg'</span><span class="keyword">);<br />print(</span><span class="default">$imagedata</span><span class="keyword">);<br /></span><span class="default">ob_end_flush</span><span class="keyword">();<br /></span><span class="comment">/*======FUNCTIONS USED======*/<br /></span><span class="keyword">function </span><span class="default">GetFileData</span><span class="keyword">(</span><span class="default">$sFilePath</span><span class="keyword">){<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$sFilePath</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">) or die(</span><span class="string">'404! Unable to open file!'</span><span class="keyword">);<br />    </span><span class="default">$buf </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)){<br />        </span><span class="default">$buf </span><span class="keyword">.= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />return </span><span class="default">$buf</span><span class="keyword">; </span><span class="comment">//returns False if failed, else the contents up to FileSize bytes.<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />[/PHP]</span></code></div>
  </div>
 </div>
  <div class="note" id="31178">  <div class="votes">
    <div id="Vu31178">
    <a href="/manual/vote-note.php?id=31178&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31178">
    <a href="/manual/vote-note.php?id=31178&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31178" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#31178" class="name">
  <strong class="user"><em>shiehj at yahoo dot com</em></strong></a><a class="genanchor" href="#31178"> &para;</a><div class="date" title="2003-04-11 09:44"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31178">
<div class="phpcode"><code><span class="html">Here is the code I did to create a thumbnail image from the database blob field. The trick is to use "imagecreatefromstring()" to create an image file.<br /><br />Jack Shieh<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">require(</span><span class="string">"dbconfig.inc"</span><span class="keyword">);<br /><br /></span><span class="default">$id </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">];<br /><br />if(</span><span class="default">$id</span><span class="keyword">) {<br /><br />    </span><span class="default">$link </span><span class="keyword">= @</span><span class="default">mysql_connect</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">) or die(</span><span class="string">"Could not connect: " </span><span class="keyword">. </span><span class="default">mysql_error</span><span class="keyword">());<br />    @</span><span class="default">mysql_select_db</span><span class="keyword">(</span><span class="default">$dbname</span><span class="keyword">, </span><span class="default">$link</span><span class="keyword">);<br /><br />    </span><span class="default">$query </span><span class="keyword">= </span><span class="string">"select filetype, image from pictures where id = </span><span class="default">$id</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">$result </span><span class="keyword">= @</span><span class="default">mysql_query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br />    </span><span class="default">$data </span><span class="keyword">= @</span><span class="default">mysql_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="string">"image"</span><span class="keyword">);<br />    </span><span class="default">$type </span><span class="keyword">= @</span><span class="default">mysql_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="string">"filetype"</span><span class="keyword">);<br />    <br />    </span><span class="default">Header</span><span class="keyword">( </span><span class="string">"Content-type: </span><span class="default">$type</span><span class="string">"</span><span class="keyword">);    <br />    <br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">150</span><span class="keyword">;  </span><span class="comment">// new image width<br />    </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromstring</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); <br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />    </span><span class="default">$aspect_ratio </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">/</span><span class="default">$width</span><span class="keyword">;<br /><br />    if (</span><span class="default">$width </span><span class="keyword">&lt;= </span><span class="default">$size</span><span class="keyword">) {<br />      </span><span class="default">$new_w </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">;<br />      </span><span class="default">$new_h </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">;<br />    } else {<br />      </span><span class="default">$new_w </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />      </span><span class="default">$new_h </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$new_w </span><span class="keyword">* </span><span class="default">$aspect_ratio</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$new_w</span><span class="keyword">,</span><span class="default">$new_h</span><span class="keyword">); <br />    </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$src</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$new_w</span><span class="keyword">,</span><span class="default">$new_h</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br /> <br />    </span><span class="comment">// determine image type and send it to the client    <br />    </span><span class="keyword">if (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"image/pjpeg"</span><span class="keyword">) {    <br />      </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">); <br />    } else if (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"image/x-png"</span><span class="keyword">) {<br />      </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    } else if (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"image/gif"</span><span class="keyword">) {<br />      </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    }<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">); <br />    </span><span class="default">mysql_close</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);<br />};<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68048">  <div class="votes">
    <div id="Vu68048">
    <a href="/manual/vote-note.php?id=68048&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68048">
    <a href="/manual/vote-note.php?id=68048&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68048" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#68048" class="name">
  <strong class="user"><em>kanzure at gmail dot com</em></strong></a><a class="genanchor" href="#68048"> &para;</a><div class="date" title="2006-07-11 09:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68048">
<div class="phpcode"><code><span class="html">Generating graphs in an external program (in this case, gnuplot) may cause problems. This is a solution hacked together in the late hours of night.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// get the values from, say, a database<br /></span><span class="default">$vals </span><span class="keyword">= </span><span class="string">"1 2\\\\n4 8\\\\n"</span><span class="keyword">; </span><span class="comment"># etc<br />// construct the gnuplot_call variable, something like:<br /></span><span class="default">$gnuplot_call </span><span class="keyword">= </span><span class="string">"echo \"set term png; plot '&lt;echo -e \\\"</span><span class="default">$vals</span><span class="string">\\\" ' ti 'Updated with' with line ; \" | gnuplot"</span><span class="keyword">;<br /></span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="default">passthru</span><span class="keyword">(</span><span class="default">$gnuplot_call</span><span class="keyword">, </span><span class="default">$gnuplot_call_output</span><span class="keyword">);<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromstring</span><span class="keyword">(</span><span class="default">ob_get_contents</span><span class="keyword">());<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); </span><span class="comment"># display<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="30080">  <div class="votes">
    <div id="Vu30080">
    <a href="/manual/vote-note.php?id=30080&amp;page=function.imagecreatefromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30080">
    <a href="/manual/vote-note.php?id=30080&amp;page=function.imagecreatefromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30080" title="0% like this...">
    -5
    </div>
  </div>
  <a href="#30080" class="name">
  <strong class="user"><em>adrian_schmidt at yahoo dot com</em></strong></a><a class="genanchor" href="#30080"> &para;</a><div class="date" title="2003-03-05 04:04"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30080">
<div class="phpcode"><code><span class="html">I'm trying to get the imagecreatefromstring to work with GIFs. Of course, it won't.<br />I've read the tips but can't get them to work either.<br />The following is what I tried, based on above tips:<br /><br />---<br /><br />    header('Content-Type: image/gif');<br />    header('Content-Disposition: inline; filename=file.gif');<br /><br />    $temp = tmpfile();<br />    fwrite($temp, $line['image']);<br />    $src_img = imagecreatefromgif($temp);<br />    fclose($temp); // this removes the file<br />    $dst_img = imagecreatetruecolor(100, 100);<br />    imagecopyresampled($dst_img, $src_img, 0,0,0,0, 100,100, imagesx($src_img), imagesy($src_img));<br />    <br />    imagegif($dst_img);<br /><br />---<br /><br />where $line['image'] is the gif as taken from my MySQL database...<br /><br />If anyone that has been able to make something like this work could give me a working piece of code I'd be really greatful!<br /><br />I would be great if the tempfile could be excluded too...<br /><br />Below is a working piece of code for jpeg:<br /><br />---<br /><br />    header('Content-Type: image/jpeg');<br />    header('Content-Disposition: inline; filename=file.jpg');<br />    <br />    $src_img = imagecreatefromstring($line['image']);<br />    $dst_img = imagecreatetruecolor(100, 100);<br />    imagecopyresampled($dst_img, $src_img, 0,0,0,0, 100,100, imagesx($src_img), imagesy($src_img));<br />    <br />    imagejpeg($dst_img);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecreatefromstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecreatefromstring.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
