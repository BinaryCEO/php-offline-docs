<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecreate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecreate.php">
 <link rel="shorturl" href="https://www.php.net/imagecreate">
 <link rel="alternate" href="https://www.php.net/imagecreate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecopyresized.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecreatefromavif.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecreate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecreate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecreate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecreate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecreate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecreate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecreate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecreate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecreate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecreate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecreate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a new palette based image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecreate - Manual" />
<meta name="twitter:description" content="Create a new palette based image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecreate - Manual" />
<meta itemprop="description" content="Create a new palette based image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a new palette based image" />

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
        <a href="function.imagecreatefromavif.php">
          imagecreatefromavif &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecopyresized.php">
          &laquo; imagecopyresized        </a>
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
            <option value='en/function.imagecreate.php' selected="selected">English</option>
            <option value='de/function.imagecreate.php'>German</option>
            <option value='es/function.imagecreate.php'>Spanish</option>
            <option value='fr/function.imagecreate.php'>French</option>
            <option value='it/function.imagecreate.php'>Italian</option>
            <option value='ja/function.imagecreate.php'>Japanese</option>
            <option value='pt_BR/function.imagecreate.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecreate.php'>Russian</option>
            <option value='tr/function.imagecreate.php'>Turkish</option>
            <option value='uk/function.imagecreate.php'>Ukrainian</option>
            <option value='zh/function.imagecreate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecreate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecreate</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecreate</span> &mdash; <span class="dc-title">Create a new palette based image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecreate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecreate</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>): <span class="type"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagecreate()</strong></span> returns an image identifier
   representing a blank image of specified size.
  </p>
  <p class="para">
   In general, we recommend the use of
   <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span> instead of
   <span class="function"><strong>imagecreate()</strong></span> so that image processing occurs on the
   highest quality image possible. If you want to output a palette image, then
   <span class="function"><a href="function.imagetruecolortopalette.php" class="function">imagetruecolortopalette()</a></span> should be called immediately
   before saving the image with <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> or
   <span class="function"><a href="function.imagegif.php" class="function">imagegif()</a></span>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecreate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">width</code></dt>
     <dd>
      <p class="para">
       The image width.
      </p>
     </dd>
    
    
     <dt><code class="parameter">height</code></dt>
     <dd>
      <p class="para">
       The image height.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecreate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">Returns an image object on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on errors.</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecreate-changelog">
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

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagecreate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2863">
    <p><strong>Example #1 
     Creating a new GD image stream and outputting an image.
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: image/png"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= @</span><span style="color: #0000BB">imagecreate</span><span style="color: #007700">(</span><span style="color: #0000BB">110</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">)<br />    or die(</span><span style="color: #DD0000">"Cannot Initialize new GD image stream"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$background_color </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$text_color </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">233</span><span style="color: #007700">, </span><span style="color: #0000BB">14</span><span style="color: #007700">, </span><span style="color: #0000BB">91</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagestring</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">,  </span><span style="color: #DD0000">"A Simple Text String"</span><span style="color: #007700">, </span><span style="color: #0000BB">$text_color</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagecreate.png" alt="Output of example : Creating a new GD image stream and outputting an image." width="110" height="25" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagecreate-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecreate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecreate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecreate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecreate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="53879">  <div class="votes">
    <div id="Vu53879">
    <a href="/manual/vote-note.php?id=53879&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53879">
    <a href="/manual/vote-note.php?id=53879&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53879" title="55% like this...">
    12
    </div>
  </div>
  <a href="#53879" class="name">
  <strong class="user"><em>DHKold</em></strong></a><a class="genanchor" href="#53879"> &para;</a><div class="date" title="2005-06-15 02:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53879">
<div class="phpcode"><code><span class="html">to create an image from a BMP file, I made this function, that return a resource like the others ImageCreateFrom function:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*********************************************/<br />/* Fonction: ImageCreateFromBMP              */<br />/* Author:   DHKold                          */<br />/* Contact:  admin@dhkold.com                */<br />/* Date:     The 15th of June 2005           */<br />/* Version:  2.0B                            */<br />/*********************************************/<br /><br /></span><span class="keyword">function </span><span class="default">ImageCreateFromBMP</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />{<br /> </span><span class="comment">//Ouverture du fichier en mode binaire<br />   </span><span class="keyword">if (! </span><span class="default">$f1 </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="string">"rb"</span><span class="keyword">)) return </span><span class="default">FALSE</span><span class="keyword">;<br /><br /> </span><span class="comment">//1 : Chargement des ent?tes FICHIER<br />   </span><span class="default">$FILE </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"vfile_type/Vfile_size/Vreserved/Vbitmap_offset"</span><span class="keyword">, </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f1</span><span class="keyword">,</span><span class="default">14</span><span class="keyword">));<br />   if (</span><span class="default">$FILE</span><span class="keyword">[</span><span class="string">'file_type'</span><span class="keyword">] != </span><span class="default">19778</span><span class="keyword">) return </span><span class="default">FALSE</span><span class="keyword">;<br /><br /> </span><span class="comment">//2 : Chargement des ent?tes BMP<br />   </span><span class="default">$BMP </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'Vheader_size/Vwidth/Vheight/vplanes/vbits_per_pixel'</span><span class="keyword">.<br />                 </span><span class="string">'/Vcompression/Vsize_bitmap/Vhoriz_resolution'</span><span class="keyword">.<br />                 </span><span class="string">'/Vvert_resolution/Vcolors_used/Vcolors_important'</span><span class="keyword">, </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f1</span><span class="keyword">,</span><span class="default">40</span><span class="keyword">));<br />   </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'colors'</span><span class="keyword">] = </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">,</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bits_per_pixel'</span><span class="keyword">]);<br />   if (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'size_bitmap'</span><span class="keyword">] == </span><span class="default">0</span><span class="keyword">) </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'size_bitmap'</span><span class="keyword">] = </span><span class="default">$FILE</span><span class="keyword">[</span><span class="string">'file_size'</span><span class="keyword">] - </span><span class="default">$FILE</span><span class="keyword">[</span><span class="string">'bitmap_offset'</span><span class="keyword">];<br />   </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bytes_per_pixel'</span><span class="keyword">] = </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bits_per_pixel'</span><span class="keyword">]/</span><span class="default">8</span><span class="keyword">;<br />   </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bytes_per_pixel2'</span><span class="keyword">] = </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bytes_per_pixel'</span><span class="keyword">]);<br />   </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'decal'</span><span class="keyword">] = (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">]*</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bytes_per_pixel'</span><span class="keyword">]/</span><span class="default">4</span><span class="keyword">);<br />   </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'decal'</span><span class="keyword">] -= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">]*</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bytes_per_pixel'</span><span class="keyword">]/</span><span class="default">4</span><span class="keyword">);<br />   </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'decal'</span><span class="keyword">] = </span><span class="default">4</span><span class="keyword">-(</span><span class="default">4</span><span class="keyword">*</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'decal'</span><span class="keyword">]);<br />   if (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'decal'</span><span class="keyword">] == </span><span class="default">4</span><span class="keyword">) </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'decal'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br /><br /> </span><span class="comment">//3 : Chargement des couleurs de la palette<br />   </span><span class="default">$PALETTE </span><span class="keyword">= array();<br />   if (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'colors'</span><span class="keyword">] &lt; </span><span class="default">16777216</span><span class="keyword">)<br />   {<br />    </span><span class="default">$PALETTE </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'V'</span><span class="keyword">.</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'colors'</span><span class="keyword">], </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f1</span><span class="keyword">,</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'colors'</span><span class="keyword">]*</span><span class="default">4</span><span class="keyword">));<br />   }<br /><br /> </span><span class="comment">//4 : Cr?ation de l'image<br />   </span><span class="default">$IMG </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f1</span><span class="keyword">,</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'size_bitmap'</span><span class="keyword">]);<br />   </span><span class="default">$VIDE </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br />   </span><span class="default">$res </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">],</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">]);<br />   </span><span class="default">$P </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />   </span><span class="default">$Y </span><span class="keyword">= </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">]-</span><span class="default">1</span><span class="keyword">;<br />   while (</span><span class="default">$Y </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">)<br />   {<br />    </span><span class="default">$X</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    while (</span><span class="default">$X </span><span class="keyword">&lt; </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">])<br />    {<br />     if (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bits_per_pixel'</span><span class="keyword">] == </span><span class="default">24</span><span class="keyword">)<br />        </span><span class="default">$COLOR </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$IMG</span><span class="keyword">,</span><span class="default">$P</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">).</span><span class="default">$VIDE</span><span class="keyword">);<br />     elseif (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bits_per_pixel'</span><span class="keyword">] == </span><span class="default">16</span><span class="keyword">)<br />     {  <br />        </span><span class="default">$COLOR </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"n"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$IMG</span><span class="keyword">,</span><span class="default">$P</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$PALETTE</span><span class="keyword">[</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">];<br />     }<br />     elseif (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bits_per_pixel'</span><span class="keyword">] == </span><span class="default">8</span><span class="keyword">)<br />     {  <br />        </span><span class="default">$COLOR </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"n"</span><span class="keyword">,</span><span class="default">$VIDE</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$IMG</span><span class="keyword">,</span><span class="default">$P</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br />        </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$PALETTE</span><span class="keyword">[</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">];<br />     }<br />     elseif (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bits_per_pixel'</span><span class="keyword">] == </span><span class="default">4</span><span class="keyword">)<br />     {<br />        </span><span class="default">$COLOR </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"n"</span><span class="keyword">,</span><span class="default">$VIDE</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$IMG</span><span class="keyword">,</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$P</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">));<br />        if ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">)%</span><span class="default">2 </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &gt;&gt; </span><span class="default">4</span><span class="keyword">) ; else </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x0F</span><span class="keyword">);<br />        </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$PALETTE</span><span class="keyword">[</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">];<br />     }<br />     elseif (</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bits_per_pixel'</span><span class="keyword">] == </span><span class="default">1</span><span class="keyword">)<br />     {<br />        </span><span class="default">$COLOR </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"n"</span><span class="keyword">,</span><span class="default">$VIDE</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$IMG</span><span class="keyword">,</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$P</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">));<br />        if     ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =  </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]        &gt;&gt;</span><span class="default">7</span><span class="keyword">;<br />        elseif ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x40</span><span class="keyword">)&gt;&gt;</span><span class="default">6</span><span class="keyword">;<br />        elseif ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x20</span><span class="keyword">)&gt;&gt;</span><span class="default">5</span><span class="keyword">;<br />        elseif ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">3</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x10</span><span class="keyword">)&gt;&gt;</span><span class="default">4</span><span class="keyword">;<br />        elseif ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">4</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x8</span><span class="keyword">)&gt;&gt;</span><span class="default">3</span><span class="keyword">;<br />        elseif ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">5</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x4</span><span class="keyword">)&gt;&gt;</span><span class="default">2</span><span class="keyword">;<br />        elseif ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">6</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x2</span><span class="keyword">)&gt;&gt;</span><span class="default">1</span><span class="keyword">;<br />        elseif ((</span><span class="default">$P</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">)%</span><span class="default">8 </span><span class="keyword">== </span><span class="default">7</span><span class="keyword">) </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0x1</span><span class="keyword">);<br />        </span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$PALETTE</span><span class="keyword">[</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">];<br />     }<br />     else<br />        return </span><span class="default">FALSE</span><span class="keyword">;<br />     </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">$X</span><span class="keyword">,</span><span class="default">$Y</span><span class="keyword">,</span><span class="default">$COLOR</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />     </span><span class="default">$X</span><span class="keyword">++;<br />     </span><span class="default">$P </span><span class="keyword">+= </span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'bytes_per_pixel'</span><span class="keyword">];<br />    }<br />    </span><span class="default">$Y</span><span class="keyword">--;<br />    </span><span class="default">$P</span><span class="keyword">+=</span><span class="default">$BMP</span><span class="keyword">[</span><span class="string">'decal'</span><span class="keyword">];<br />   }<br /><br /> </span><span class="comment">//Fermeture du fichier<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f1</span><span class="keyword">);<br /><br /> return </span><span class="default">$res</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="13852">  <div class="votes">
    <div id="Vu13852">
    <a href="/manual/vote-note.php?id=13852&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13852">
    <a href="/manual/vote-note.php?id=13852&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13852" title="71% like this...">
    3
    </div>
  </div>
  <a href="#13852" class="name">
  <strong class="user"><em>wouter at rusman dot net</em></strong></a><a class="genanchor" href="#13852"> &para;</a><div class="date" title="2001-07-06 05:31"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13852">
<div class="phpcode"><code><span class="html">to compile GD support on some linux distributions you have to include these with the ./configure command :
<br />--with=gd=/usr --with-jpeg=/usr --with-png=/usr --with-zlib=/usr
<br />
<br />(i had to include this on Redhat 6.1)
<br />this becase the libraries are in /usr/lib instead of /lib</span></code></div>
  </div>
 </div>
  <div class="note" id="76663">  <div class="votes">
    <div id="Vu76663">
    <a href="/manual/vote-note.php?id=76663&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76663">
    <a href="/manual/vote-note.php?id=76663&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76663" title="51% like this...">
    1
    </div>
  </div>
  <a href="#76663" class="name">
  <strong class="user"><em>Sohel Taslim</em></strong></a><a class="genanchor" href="#76663"> &para;</a><div class="date" title="2007-07-25 12:22"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76663">
<div class="phpcode"><code><span class="html">It is easy and simple example to convert Text to Image with selected font. <br />It helps me to display Bangla text as image when users have no installed bangla font.<br /><br />I hope it can help you too!<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Kip the font file together or write proper location.<br /></span><span class="default">makeImageF</span><span class="keyword">(</span><span class="string">"Life in PHP."</span><span class="keyword">,</span><span class="string">"CENTURY.TTF"</span><span class="keyword">);<br /><br />function </span><span class="default">makeImageF</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">=</span><span class="string">"CENTURY.TTF"</span><span class="keyword">, </span><span class="default">$W</span><span class="keyword">=</span><span class="default">200</span><span class="keyword">, </span><span class="default">$H</span><span class="keyword">=</span><span class="default">20</span><span class="keyword">, </span><span class="default">$X</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$Y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$fsize</span><span class="keyword">=</span><span class="default">18</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">=array(</span><span class="default">0x0</span><span class="keyword">,</span><span class="default">0x0</span><span class="keyword">,</span><span class="default">0x0</span><span class="keyword">), </span><span class="default">$bgcolor</span><span class="keyword">=array(</span><span class="default">0xFF</span><span class="keyword">,</span><span class="default">0xFF</span><span class="keyword">,</span><span class="default">0xFF</span><span class="keyword">)){<br />        <br />    </span><span class="default">$im </span><span class="keyword">= @</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$W</span><span class="keyword">, </span><span class="default">$H</span><span class="keyword">)<br />        or die(</span><span class="string">"Cannot Initialize new GD image stream"</span><span class="keyword">);<br />        <br />    </span><span class="default">$background_color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$bgcolor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$bgcolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);        </span><span class="comment">//RGB color background.<br />    </span><span class="default">$text_color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);            </span><span class="comment">//RGB color text.<br />            <br />    </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$fsize</span><span class="keyword">, </span><span class="default">$X</span><span class="keyword">, </span><span class="default">$Y</span><span class="keyword">, </span><span class="default">$fsize</span><span class="keyword">, </span><span class="default">$text_color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />    <br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/gif"</span><span class="keyword">);                <br />    return </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="18884">  <div class="votes">
    <div id="Vu18884">
    <a href="/manual/vote-note.php?id=18884&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18884">
    <a href="/manual/vote-note.php?id=18884&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18884" title="50% like this...">
    0
    </div>
  </div>
  <a href="#18884" class="name">
  <strong class="user"><em>robert at scpallas dot de</em></strong></a><a class="genanchor" href="#18884"> &para;</a><div class="date" title="2002-02-08 08:09"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18884">
<div class="phpcode"><code><span class="html">The function ImageCreate() creates a PALETTE image.<br />The function ImageCreateFromJPEG() creates a TRUE COLOR image.<br /><br />When you use GD 2.0 you will get an error when you try to use ImageCopy()<br />with one True color image and one Palette image.<br /><br />Be sure to convert one of the images before using ImageCopy() or use ImageCreateTrueColor() instead of ImageCreate().</span></code></div>
  </div>
 </div>
  <div class="note" id="12544">  <div class="votes">
    <div id="Vu12544">
    <a href="/manual/vote-note.php?id=12544&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12544">
    <a href="/manual/vote-note.php?id=12544&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12544" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#12544" class="name">
  <strong class="user"><em>altype at bellsouth dot net</em></strong></a><a class="genanchor" href="#12544"> &para;</a><div class="date" title="2001-04-19 04:13"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12544">
<div class="phpcode"><code><span class="html">ImagePNG($pic,"./dir/pic.png"); 
<br />
<br />To save image as a file, I had to create a directory "dir" and CHMOD 777 to give read, write, and execute permission for everyone - or it wouldn't save it...</span></code></div>
  </div>
 </div>
  <div class="note" id="96988">  <div class="votes">
    <div id="Vu96988">
    <a href="/manual/vote-note.php?id=96988&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96988">
    <a href="/manual/vote-note.php?id=96988&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96988" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#96988" class="name">
  <strong class="user"><em>JamesM</em></strong></a><a class="genanchor" href="#96988"> &para;</a><div class="date" title="2010-03-26 12:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96988">
<div class="phpcode"><code><span class="html">doesnt ruin the image but adds display to the output.<br />this will generate an image with a random color. if you like it you can use it because you have the RBG result too.<br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"content-type:image/png"</span><span class="keyword">);<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%04x'</span><span class="keyword">,</span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">));<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%04x'</span><span class="keyword">,</span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">));<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%04x'</span><span class="keyword">,</span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">));<br /></span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />echo </span><span class="string">"\n\n\n</span><span class="default">$a</span><span class="string">-</span><span class="default">$b</span><span class="string">-</span><span class="default">$c</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="21565">  <div class="votes">
    <div id="Vu21565">
    <a href="/manual/vote-note.php?id=21565&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21565">
    <a href="/manual/vote-note.php?id=21565&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21565" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#21565" class="name">
  <strong class="user"><em>php at silisoftware dot com</em></strong></a><a class="genanchor" href="#21565"> &para;</a><div class="date" title="2002-05-17 10:17"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21565">
<div class="phpcode"><code><span class="html">Don't try and create an image with a really large width and/or height. First, $width x $height is (at least) the bytes of memory that need to be allocated. Secondly, if you exceed the range of int for either parameter, Apache crashes (before allocating any memory).<br />Don't ask how I figured this out ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="36750">  <div class="votes">
    <div id="Vu36750">
    <a href="/manual/vote-note.php?id=36750&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36750">
    <a href="/manual/vote-note.php?id=36750&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36750" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#36750" class="name">
  <strong class="user"><em>tassader at xmail dot cz</em></strong></a><a class="genanchor" href="#36750"> &para;</a><div class="date" title="2003-10-21 08:55"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36750">
<div class="phpcode"><code><span class="html">It seems that imagecreate creates a grayscale image with gd2</span></code></div>
  </div>
 </div>
  <div class="note" id="24838">  <div class="votes">
    <div id="Vu24838">
    <a href="/manual/vote-note.php?id=24838&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24838">
    <a href="/manual/vote-note.php?id=24838&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24838" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#24838" class="name">
  <strong class="user"><em>tore at kyberheimen dot com</em></strong></a><a class="genanchor" href="#24838"> &para;</a><div class="date" title="2002-08-29 02:33"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24838">
<div class="phpcode"><code><span class="html">GD UPGRADE PROBLEM:<br />I used imagecreate with gd 1.6 to make resized images of big photos. Then, when using the same script on gd 2.0, the colors got all wrong.<br />Using imagecreatetruecolor() fixed the problem!</span></code></div>
  </div>
 </div>
  <div class="note" id="10112">  <div class="votes">
    <div id="Vu10112">
    <a href="/manual/vote-note.php?id=10112&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10112">
    <a href="/manual/vote-note.php?id=10112&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10112" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#10112" class="name">
  <strong class="user"><em>kim at kimmccall dot org</em></strong></a><a class="genanchor" href="#10112"> &para;</a><div class="date" title="2000-12-14 04:22"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10112">
<div class="phpcode"><code><span class="html">How I fixed my "undefined function imagecreate()" problem:
<br />I was having the same problem many have reported where most of PHP worked but the gd functions didn't.  I'd installed the RedHat rpm php-4.0.1pl2.  It said (phpinfo.php) that it had been configured with the '--with-gd=shared' option.  In my /usr/lib directory, I had both libgd.so.1.8.3 and libgd.a.  I decided to compile with the static library instead, so I downloaded the sources and built with all the same configuration flags except that I used --with-gd=/usr.  Now my gd library works!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="11177">  <div class="votes">
    <div id="Vu11177">
    <a href="/manual/vote-note.php?id=11177&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11177">
    <a href="/manual/vote-note.php?id=11177&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11177" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#11177" class="name">
  <strong class="user"><em>removethisbeforebayet at removethistooenseirb dot fr</em></strong></a><a class="genanchor" href="#11177"> &para;</a><div class="date" title="2001-02-08 03:00"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11177">
<div class="phpcode"><code><span class="html">Pay attention to a problem I encountered.
<br />Png images created with the PHP function seems to be very badly recognised by old browsers, especially -well, mainly - by IE 4.0 (crash of the browser).
<br />I think this is probably due to the fact that, when IE 4.0 was released, the png format was either very recent, either not very used, because of the widespread jpeg and gif formats...
<br />So, if you plan to dynamically create images for a web site to be seen by IE 4.0 users, think of it...
<br />May'be the jpeg format will do the job better.</span></code></div>
  </div>
 </div>
  <div class="note" id="41714">  <div class="votes">
    <div id="Vu41714">
    <a href="/manual/vote-note.php?id=41714&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41714">
    <a href="/manual/vote-note.php?id=41714&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41714" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#41714" class="name">
  <strong class="user"><em>cstevens at gencom dot us</em></strong></a><a class="genanchor" href="#41714"> &para;</a><div class="date" title="2004-04-20 04:56"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41714">
<div class="phpcode"><code><span class="html">Here's how I resolved the "Fatal error: Call to undefined function: imagecreate()" error using Gentoo:<br /><br />1) add a USE flag for gdb in /etc/make.conf<br />  <br />   USE="3dnow avi [whatever else you have] gdb"<br /><br />   Note: here's a list of all of the USE flags:<br />   <a href="http://www.gentoo.org/dyn/use-index.xml" rel="nofollow" target="_blank">http://www.gentoo.org/dyn/use-index.xml</a><br /><br />2) unmerged mod_php <br /><br />*Note* It could take awhile to "remerge" as it may need to compile several dependancies...do this during not production hours and have a backup if you absolutely cannot have downtime<br /><br />   emerge -C mod_php<br /><br />3) emerged mod_php<br /><br />   emerge -p mod_php <br />    # find out if it's going to take awhile<br /><br />4) edit /etc/php/apach2-php4/php.ini<br />     uncomment the "extension=php_gd2.dll" line<br /><br />5) Restart apache2<br /><br />    /etc/init.d/apache2 restart<br /><br />Hope this helps!<br /><br />--<br />Cooper Stevenson<br />GenCom<br /><a href="http://www.gencom.us" rel="nofollow" target="_blank">http://www.gencom.us</a></span></code></div>
  </div>
 </div>
  <div class="note" id="37964">  <div class="votes">
    <div id="Vu37964">
    <a href="/manual/vote-note.php?id=37964&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37964">
    <a href="/manual/vote-note.php?id=37964&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37964" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#37964" class="name">
  <strong class="user"><em>sjnorrie at hotmail dot com</em></strong></a><a class="genanchor" href="#37964"> &para;</a><div class="date" title="2003-12-03 11:07"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37964">
<div class="phpcode"><code><span class="html">On windows.<br /><br />When you get undefined function image* it means the gd library isnt being used. Check the php.ini file. Make sure the php_gd.dll isnt commented out. Restarting apache should result in the image functions working.</span></code></div>
  </div>
 </div>
  <div class="note" id="116805">  <div class="votes">
    <div id="Vu116805">
    <a href="/manual/vote-note.php?id=116805&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116805">
    <a href="/manual/vote-note.php?id=116805&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116805" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#116805" class="name">
  <strong class="user"><em>marc at gutt dot it</em></strong></a><a class="genanchor" href="#116805"> &para;</a><div class="date" title="2015-03-02 10:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116805">
<div class="phpcode"><code><span class="html">Based on DHKold's contribution I realized imagecreatefrombmp() to support all 1-, 4-, 8-, 16-, 24- und 32-Bit Bitmaps. Finally Fabien Ménager brought it to perfection for the project DOMPDF. Feel free to use it:<br /><a href="https://code.google.com/p/dompdf/source/browse/trunk/dompdf/include/functions.inc.php?spec=svn504&amp;r=504#551" rel="nofollow" target="_blank">https://code.google.com/p/dompdf/source/browse/trunk/dompdf/include/functions.inc.php?spec=svn504&amp;r=504#551</a></span></code></div>
  </div>
 </div>
  <div class="note" id="41502">  <div class="votes">
    <div id="Vu41502">
    <a href="/manual/vote-note.php?id=41502&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41502">
    <a href="/manual/vote-note.php?id=41502&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41502" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#41502" class="name">
  <strong class="user"><em>foxlovr1 at cox dot net</em></strong></a><a class="genanchor" href="#41502"> &para;</a><div class="date" title="2004-04-12 04:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41502">
<div class="phpcode"><code><span class="html">You can set it up so you can write a text which is controled from the URL.<br /><br />Like this...<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">$im </span><span class="keyword">= @</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">) or die(</span><span class="string">"Cannot Initialize new GD image stream"</span><span class="keyword">);<br /></span><span class="default">$bc </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$tc </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">,  </span><span class="default">$t</span><span class="keyword">, </span><span class="default">$tc</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Then when you use the image, use this...<br /><br />&lt;img src="<a href="http://www.yourdomain.com/stuff/cool_image.php?t=Text" rel="nofollow" target="_blank">http://www.yourdomain.com/stuff/cool_image.php?t=Text</a>"&gt;<br /><br />This will create an image with a cyan background, and in black text it will say "Text"<br /><br />EMail me at foxlovr1@cox.net or aquafox90@yahoo.com for comments/questions.</span></code></div>
  </div>
 </div>
  <div class="note" id="13884">  <div class="votes">
    <div id="Vu13884">
    <a href="/manual/vote-note.php?id=13884&amp;page=function.imagecreate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13884">
    <a href="/manual/vote-note.php?id=13884&amp;page=function.imagecreate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13884" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#13884" class="name">
  <strong class="user"><em>andrus at vnet dot ee</em></strong></a><a class="genanchor" href="#13884"> &para;</a><div class="date" title="2001-07-08 09:09"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13884">
<div class="phpcode"><code><span class="html">Dont forget to use ImageDestoy after showed image. I forgot it, my webpage had about 15 pictures what was generated by GD and webserver died very fastly (server was Dual Xeon 900MHz and 4G RAM :[[ ). It died cos of not enough memory :\</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecreate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecreate.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
