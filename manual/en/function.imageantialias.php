<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imageantialias - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imageantialias.php">
 <link rel="shorturl" href="https://www.php.net/imageantialias">
 <link rel="alternate" href="https://www.php.net/imageantialias" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagealphablending.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagearc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imageantialias.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imageantialias.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imageantialias.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imageantialias.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imageantialias.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imageantialias.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imageantialias.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imageantialias.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imageantialias.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imageantialias.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imageantialias.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Should antialias functions be used or not" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imageantialias - Manual" />
<meta name="twitter:description" content="Should antialias functions be used or not" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imageantialias - Manual" />
<meta itemprop="description" content="Should antialias functions be used or not" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Should antialias functions be used or not" />

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
        <a href="function.imagearc.php">
          imagearc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagealphablending.php">
          &laquo; imagealphablending        </a>
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
            <option value='en/function.imageantialias.php' selected="selected">English</option>
            <option value='de/function.imageantialias.php'>German</option>
            <option value='es/function.imageantialias.php'>Spanish</option>
            <option value='fr/function.imageantialias.php'>French</option>
            <option value='it/function.imageantialias.php'>Italian</option>
            <option value='ja/function.imageantialias.php'>Japanese</option>
            <option value='pt_BR/function.imageantialias.php'>Brazilian Portuguese</option>
            <option value='ru/function.imageantialias.php'>Russian</option>
            <option value='tr/function.imageantialias.php'>Turkish</option>
            <option value='uk/function.imageantialias.php'>Ukrainian</option>
            <option value='zh/function.imageantialias.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imageantialias" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imageantialias</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imageantialias</span> &mdash; <span class="dc-title">Should antialias functions be used or not</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imageantialias-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imageantialias</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enable</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Activate the fast drawing antialiased methods for lines and wired polygons.
   It does not support alpha components. It works using a direct blend
   operation. It works only with truecolor images.
  </p>
  <p class="para">
   Thickness and styled are not supported.
  </p>
  <p class="para">
   Using antialiased primitives with transparent background color can end with
   some unexpected results. The blend method uses the background color as any
   other colors. The lack of alpha component support does not allow an alpha
   based antialiasing method.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imageantialias-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">enable</code></dt>
     <dd>
      <p class="para">
       Whether to enable antialiasing or not.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imageantialias-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imageantialias-changelog">
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

     <tr>
      <td>7.2.0</td>
      <td>
       <span class="function"><strong>imageantialias()</strong></span> is now generally available. Formerly
       it was only available if PHP was compiled with the bundled version of the
       GD library.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imageantialias-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2832">
    <p><strong>Example #1 A comparison of two lines, one with anti-aliasing switched on</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Setup an anti-aliased image and a normal image<br /></span><span style="color: #0000BB">$aa </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">400</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$normal </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Switch antialiasing on for one image<br /></span><span style="color: #0000BB">imageantialias</span><span style="color: #007700">(</span><span style="color: #0000BB">$aa</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Allocate colors<br /></span><span style="color: #0000BB">$red </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$normal</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$red_aa </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$aa</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw two lines, one with AA enabled<br /></span><span style="color: #0000BB">imageline</span><span style="color: #007700">(</span><span style="color: #0000BB">$normal</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">$red</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imageline</span><span style="color: #007700">(</span><span style="color: #0000BB">$aa</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">$red_aa</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Merge the two images side by side for output (AA: left, Normal: Right)<br /></span><span style="color: #0000BB">imagecopymerge</span><span style="color: #007700">(</span><span style="color: #0000BB">$aa</span><span style="color: #007700">, </span><span style="color: #0000BB">$normal</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output image<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$aa</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imageantialias.png" alt="Output of example : A comparison of two lines, one with anti-aliasing switched on" width="400" height="100" />
     </div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.imageantialias-seealso">
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imageantialias.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imageantialias%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imageantialias&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imageantialias.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72971">  <div class="votes">
    <div id="Vu72971">
    <a href="/manual/vote-note.php?id=72971&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72971">
    <a href="/manual/vote-note.php?id=72971&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72971" title="82% like this...">
    19
    </div>
  </div>
  <a href="#72971" class="name">
  <strong class="user"><em>padigan</em></strong></a><a class="genanchor" href="#72971"> &para;</a><div class="date" title="2007-02-06 03:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72971">
<div class="phpcode"><code><span class="html">If you can't be bothered creating (or searching for) a full screen antialias function.<br />You can actually cheat (well a bit of a dirty inefficient hack really!!) <br />and perform a fake antialias on an image by using 'imagecopyresampled'...<br /><br />first create your source image twice the size of what you really want.<br /><br />Then use 'imagecopyresampled' to shrink it to half the size, the function <br />automatically interpolates pixels to create an antialias effect!<br /><br />I've used this in a pie chart function and it works brilliantly,<br />not as slow as I thought it might be!<br /><br />the rough code below should give you the idea...<br /><br /><span class="default">&lt;?php<br />$realWidth </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">;<br /></span><span class="default">$realHeight </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">;<br /></span><span class="default">$srcWidth </span><span class="keyword">= </span><span class="default">$realWidth </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$srcHeight </span><span class="keyword">= </span><span class="default">$realHeight </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">;<br /><br /></span><span class="comment">// create the larger source image<br /></span><span class="default">$srcImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$srcWidth</span><span class="keyword">,</span><span class="default">$srcHeight</span><span class="keyword">);<br /><br /></span><span class="comment">// create the real/final image<br /></span><span class="default">$destImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$realWidth</span><span class="keyword">,</span><span class="default">$realHeight</span><span class="keyword">);<br /><br /></span><span class="comment">// now do whatever you want to draw in the source image<br />// blah....<br /><br />// now the picture is finished, do the shrink...<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$destImage</span><span class="keyword">,</span><span class="default">$srcImage</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,<br /></span><span class="default">$realWidth</span><span class="keyword">,</span><span class="default">$realHeight</span><span class="keyword">,</span><span class="default">$srcWidth</span><span class="keyword">,</span><span class="default">$srcHeight</span><span class="keyword">);<br /><br /></span><span class="comment">// now just do whatever you want with '$destImage' (e.g. display or output to file!)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56521">  <div class="votes">
    <div id="Vu56521">
    <a href="/manual/vote-note.php?id=56521&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56521">
    <a href="/manual/vote-note.php?id=56521&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56521" title="85% like this...">
    5
    </div>
  </div>
  <a href="#56521" class="name">
  <strong class="user"><em>trimbo</em></strong></a><a class="genanchor" href="#56521"> &para;</a><div class="date" title="2005-09-06 12:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56521">
<div class="phpcode"><code><span class="html">So far using PHP 5.0.4 I've managed to get Imageantialias() to work well with:<br />ImageLine()<br />ImagePolygon()<br /><br />but not with:<br />ImageArc()<br />ImageEllipse()<br />ImageFilled*()<br /><br />You can still draw antialiased filled polygons by drawing a hollow polygon on top of a filled one with the same dimensions:<br /><span class="default">&lt;?php<br />        $points</span><span class="keyword">=array(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">,</span><span class="default">$y2</span><span class="keyword">, </span><span class="default">$x3</span><span class="keyword">,</span><span class="default">$y3</span><span class="keyword">);<br />        </span><span class="default">imageFilledPolygon</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$points</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$gray </span><span class="keyword">);<br />        </span><span class="default">imagePolygon</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$points</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$gray </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62062">  <div class="votes">
    <div id="Vu62062">
    <a href="/manual/vote-note.php?id=62062&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62062">
    <a href="/manual/vote-note.php?id=62062&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62062" title="100% like this...">
    2
    </div>
  </div>
  <a href="#62062" class="name">
  <strong class="user"><em>n-dream at gmx dot ch</em></strong></a><a class="genanchor" href="#62062"> &para;</a><div class="date" title="2006-02-18 10:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62062">
<div class="phpcode"><code><span class="html">The following function draws an AntiAliased (unfilled) Ellipse.<br />It is used just liked the nomral ImageEllipse function.<br />The optional parameter sets the number of segments...<br /><br />function ImageEllipseAA( &amp;$img, $x, $y, $w, $h,$color,$segments=70) <br />{<br />    $w=$w/2;<br />    $h=$h/2;<br />    $jump=2*M_PI/$segments;<br />    $oldx=$x+sin(-$jump)*$w;<br />    $oldy=$y+cos(-$jump)*$h;<br />    for($i=0;$i&lt;2*(M_PI);$i+=$jump)<br />    {<br />        $newx=$x+sin($i)*$w;<br />        $newy=$y+cos($i)*$h;<br />        ImageLine($img,$newx,$newy,$oldx,$oldy,$color);<br />        $oldx=$newx;<br />        $oldy=$newy;<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="95472">  <div class="votes">
    <div id="Vu95472">
    <a href="/manual/vote-note.php?id=95472&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95472">
    <a href="/manual/vote-note.php?id=95472&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95472" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95472" class="name">
  <strong class="user"><em>verdy_p at wanadoo dot fr</em></strong></a><a class="genanchor" href="#95472"> &para;</a><div class="date" title="2010-01-04 01:27"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95472">
<div class="phpcode"><code><span class="html">There's a minor edit bug in those lines in the fast algorithm ("20 times faster"):<br /><br />            imageLine( $img, $cx + $ix, $cy + $iy - 1, $cx + $ix, $cy + $ix, $fill );<br />            imageLine( $img, $cx + $ix, $cy - $iy + 1, $cx + $ix, $cy - $ix, $fill );<br />            imageLine( $img, $cx - $ix, $cy + $iy - 1, $cx - $ix, $cy + $ix, $fill );<br />            imageLine( $img, $cx - $ix, $cy - $iy + 1, $cx - $ix, $cy - $ix, $fill );<br />            imageLine( $img, $cx + $iy - 1, $cy + $ix, $cx + $ix, $cy + $ix, $fill );<br />            imageLine( $img, $cx + $iy - 1, $cy - $ix, $cx + $ix, $cy - $ix, $fill );<br />            imageLine( $img, $cx - $iy + 1, $cy + $ix, $cx - $ix, $cy + $ix, $fill );<br />            imageLine( $img, $cx - $iy + 1, $cy - $ix, $cx - $ix, $cy - $ix, $fill );<br /><br />the reference to "$ix" in the parameters of each call (just before the ", $fill " parameter) should be sometimes "$iy".<br /><br />This algorithm uses the Bresenham midpoint algorithm for circles, but computing successive pixels positions ($ix, $iy) incrementally in the first octant, relative to the circle center ($cx, $cy), then applying the 8 symetries by swapping them or changing signs.<br /><br />A similar algorithm exists for ellipses: it uses quadrants symetries instead of octants when the ellipse focal axis is aligned or orthogonal to the two image axis, be subdividing each quadrant in two regions (deminited by the point on the arc where the tangent has a unitary slope).<br /><br />For general ellipses (rotated arbitrarily in the plane), there are also 4 quadrants symetries, but they are a bit more complex to compute, as you need to compute the rotations, for this reason you'll only be able to use 2 symetries, but the incremental algorithm still exists: you may think that this would be based on the evaluation of the sum of lengths from the two focal points, which is contant; however the sum of two distance cannot be squared so easily (you would need to compute the square of both distances, then take their respective square root before adding them and testing the difference with the exact length. A cleaner solution uses NURBS (Non-Uniform Rational B-splines) because they are numerically stable and still very fast to compute (you only need some floatting point for the knot constants that separate each quadrant, which is then computed using a simple quadratic parametric equation of the ellipse instead of the implicit equation, given that the quadratic (polynomial) equation has first and scond derivatives that are easy to bound in order to get the needed precision and reduce the number of unnecessary pixel plots : such the parametric eqaution will draw points along the arc with a movement speed varying between 1 and 4 subpixel distance per incremental step, but in fact only between 1 and 2 subpixels when you subdivide the quadrant in two regions).<br /><br />Alternatively, you may also draw an antialised "straight" ellipse with a double resolution, and then rotate the antiliased image while also rescale it at half size, and at the same time combining it to the target: depending on implementations (and computing language used), it may be faster (but it may require more memory for the intermediate image at scale 2)...</span></code></div>
  </div>
 </div>
  <div class="note" id="92622">  <div class="votes">
    <div id="Vu92622">
    <a href="/manual/vote-note.php?id=92622&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92622">
    <a href="/manual/vote-note.php?id=92622&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92622" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92622" class="name">
  <strong class="user"><em>dsl101</em></strong></a><a class="genanchor" href="#92622"> &para;</a><div class="date" title="2009-07-31 08:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92622">
<div class="phpcode"><code><span class="html">Having tried long and hard to get a decent antialiased circle function, I finally gave in a wrote something from scratch. Its very very naive - basically examining every single pixel in the enclosing square, but as a result produces very nice antialiasing, with decent control over stroke width, antialiasing amount and tightness of antialiasing. I'm sure it could be optimised considerably, but it was fast enough for what I was doing. Hope its of some use.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imagecircleaa</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$t</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">) </span><span class="comment">// image, centerX, centerY, radius, stroke width, aa width, tightness, color<br /></span><span class="keyword">{<br />    </span><span class="default">$adj </span><span class="keyword">= </span><span class="default">$w </span><span class="keyword">+ </span><span class="default">$s</span><span class="keyword">;<br />    </span><span class="default">$sCol </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">]);<br />    for(</span><span class="default">$x </span><span class="keyword">= -</span><span class="default">$r </span><span class="keyword">- </span><span class="default">$adj</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;= </span><span class="default">$r </span><span class="keyword">+ </span><span class="default">$adj</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />    {<br />        for(</span><span class="default">$y </span><span class="keyword">= -</span><span class="default">$r </span><span class="keyword">- </span><span class="default">$adj</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt;= </span><span class="default">$r </span><span class="keyword">+ </span><span class="default">$adj</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++)<br />        {<br />            </span><span class="default">$d </span><span class="keyword">= </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">* </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$y </span><span class="keyword">* </span><span class="default">$y</span><span class="keyword">); </span><span class="comment">// distance from pixel to center<br />            </span><span class="default">$err </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$d </span><span class="keyword">- </span><span class="default">$r</span><span class="keyword">); </span><span class="comment">// absolute distance from pixel to circle edge<br />            </span><span class="keyword">if(</span><span class="default">$err </span><span class="keyword">&lt;= </span><span class="default">$w </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">+ </span><span class="default">$s</span><span class="keyword">) </span><span class="comment">// within the stroke width + smoothing radius<br />            </span><span class="keyword">{<br />                if(</span><span class="default">$err </span><span class="keyword">&lt;= </span><span class="default">$w </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) </span><span class="comment">// inside the stroke width so make it solid color<br />                </span><span class="keyword">{<br />                    </span><span class="default">$aaCol </span><span class="keyword">= </span><span class="default">$sCol</span><span class="keyword">;<br />                }<br />                else </span><span class="comment">// in the antialisaing region so make it a blended color<br />                </span><span class="keyword">{<br />                    </span><span class="default">$err </span><span class="keyword">-= </span><span class="default">$w </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// adjust to the aliased part<br />                    </span><span class="default">$err </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">- </span><span class="default">$err </span><span class="keyword">/ </span><span class="default">$s</span><span class="keyword">; </span><span class="comment">// adjust to between 0 and 1<br />                    </span><span class="default">$err </span><span class="keyword">= (</span><span class="default">$err </span><span class="keyword">- </span><span class="default">0.5</span><span class="keyword">) * </span><span class="default">$t </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// adjust to -$t to +$t for tightness <br />                    </span><span class="default">$err </span><span class="keyword">= (</span><span class="default">$err </span><span class="keyword">/ </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">1 </span><span class="keyword">+ </span><span class="default">$err </span><span class="keyword">* </span><span class="default">$err</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// sigmoid curve to smooth edges<br />                    </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">$cy</span><span class="keyword">); </span><span class="comment">// Get current background color<br />                    </span><span class="default">$rB </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                    </span><span class="default">$gB </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                    </span><span class="default">$bB </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                    </span><span class="default">$rDelta </span><span class="keyword">= (</span><span class="default">$rB </span><span class="keyword">- </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">]); </span><span class="comment">// change in Red from background<br />                    </span><span class="default">$rComp </span><span class="keyword">= </span><span class="default">$rB </span><span class="keyword">- </span><span class="default">$rDelta </span><span class="keyword">* </span><span class="default">$err</span><span class="keyword">; </span><span class="comment">// mix Red<br />                    </span><span class="default">$gDelta </span><span class="keyword">= (</span><span class="default">$gB </span><span class="keyword">- </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">]); </span><span class="comment">// change in Red from background<br />                    </span><span class="default">$gComp </span><span class="keyword">= </span><span class="default">$gB </span><span class="keyword">- </span><span class="default">$gDelta </span><span class="keyword">* </span><span class="default">$err</span><span class="keyword">; </span><span class="comment">// mix Red<br />                    </span><span class="default">$bDelta </span><span class="keyword">= (</span><span class="default">$bB </span><span class="keyword">- </span><span class="default">$color</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">]); </span><span class="comment">// change in Red from background<br />                    </span><span class="default">$bComp </span><span class="keyword">= </span><span class="default">$bB </span><span class="keyword">- </span><span class="default">$bDelta </span><span class="keyword">* </span><span class="default">$err</span><span class="keyword">; </span><span class="comment">// mix Red<br />                    </span><span class="default">$aaCol </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$rComp</span><span class="keyword">, </span><span class="default">$gComp</span><span class="keyword">, </span><span class="default">$bComp</span><span class="keyword">);<br />                }<br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$aaCol</span><span class="keyword">);<br />            }<br />        }<br />    }<br />}<br /><br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">500</span><span class="keyword">,</span><span class="default">500</span><span class="keyword">);<br /><br /></span><span class="default">$cBlack </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$cGrey </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">120</span><span class="keyword">, </span><span class="default">120</span><span class="keyword">, </span><span class="default">120</span><span class="keyword">);<br /></span><span class="default">$cWhite </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$cWhite</span><span class="keyword">);<br /></span><span class="default">imagepolygon</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">), </span><span class="default">4</span><span class="keyword">, </span><span class="default">cBlack</span><span class="keyword">);<br /><br /></span><span class="default">$aWhite </span><span class="keyword">= array(</span><span class="string">'r'</span><span class="keyword">=&gt;</span><span class="default">255</span><span class="keyword">, </span><span class="string">'g'</span><span class="keyword">=&gt;</span><span class="default">255</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$aBlack </span><span class="keyword">= array(</span><span class="string">'r'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'g'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$aRed </span><span class="keyword">= array(</span><span class="string">'r'</span><span class="keyword">=&gt;</span><span class="default">200</span><span class="keyword">, </span><span class="string">'g'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$aGreen </span><span class="keyword">= array(</span><span class="string">'r'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'g'</span><span class="keyword">=&gt;</span><span class="default">200</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$aBlue </span><span class="keyword">= array(</span><span class="string">'r'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'g'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="comment">// standard ellipse function for comparison<br /></span><span class="default">imageellipse</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$cBlack</span><span class="keyword">);<br /><br /></span><span class="comment">// compare different tightnesses - good values are between 2 and 8<br />// note overall width is stroke width + 2 * aa width (e.g. 12 pixels below)<br /></span><span class="default">imagecircleaa</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">$aBlue</span><span class="keyword">);<br /></span><span class="default">imagecircleaa</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">$aBlue</span><span class="keyword">);<br /><br /></span><span class="comment">// different coloured background to show blending<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">,</span><span class="default">150</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">$cGrey</span><span class="keyword">);<br /></span><span class="default">imagecircleaa</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">$aRed</span><span class="keyword">);<br /><br /></span><span class="comment">// overlapping circles still aa nicely, although the colour blending algorithm produces quite dark intermediate shades<br /></span><span class="default">imagecircleaa</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">$aBlue</span><span class="keyword">);<br /></span><span class="default">imagecircleaa</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">$aGreen</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61932">  <div class="votes">
    <div id="Vu61932">
    <a href="/manual/vote-note.php?id=61932&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61932">
    <a href="/manual/vote-note.php?id=61932&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61932" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61932" class="name">
  <strong class="user"><em>klaas at kosmokrator dot com</em></strong></a><a class="genanchor" href="#61932"> &para;</a><div class="date" title="2006-02-15 05:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61932">
<div class="phpcode"><code><span class="html">Here is an optimized version of the optimized version of the antialiased circle function by sebbi: (more than 20 times faster)...<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">imageSmoothCircle</span><span class="keyword">( &amp;</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$cr</span><span class="keyword">, </span><span class="default">$color </span><span class="keyword">) {<br />        </span><span class="default">$ir </span><span class="keyword">= </span><span class="default">$cr</span><span class="keyword">;<br />        </span><span class="default">$ix </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$iy </span><span class="keyword">= </span><span class="default">$ir</span><span class="keyword">;<br />        </span><span class="default">$ig </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$ir </span><span class="keyword">- </span><span class="default">3</span><span class="keyword">;<br />        </span><span class="default">$idgr </span><span class="keyword">= -</span><span class="default">6</span><span class="keyword">;<br />        </span><span class="default">$idgd </span><span class="keyword">= </span><span class="default">4 </span><span class="keyword">* </span><span class="default">$ir </span><span class="keyword">- </span><span class="default">10</span><span class="keyword">;<br />        </span><span class="default">$fill </span><span class="keyword">= </span><span class="default">imageColorExactAlpha</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'R' </span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'G' </span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'B' </span><span class="keyword">], </span><span class="default">0 </span><span class="keyword">);<br />        </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$cr </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />        </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$cr </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />        </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$cr </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />        </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$cr </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />        </span><span class="default">$draw </span><span class="keyword">= </span><span class="default">imageColorExactAlpha</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'R' </span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'G' </span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'B' </span><span class="keyword">], </span><span class="default">42 </span><span class="keyword">);<br />        </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$cr</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />        </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$cr</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />        </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$cr</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />        </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$cr</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />        while ( </span><span class="default">$ix </span><span class="keyword">&lt;= </span><span class="default">$iy </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">) {<br />            if ( </span><span class="default">$ig </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">) {<br />                </span><span class="default">$ig </span><span class="keyword">+= </span><span class="default">$idgd</span><span class="keyword">;<br />                </span><span class="default">$idgd </span><span class="keyword">-= </span><span class="default">8</span><span class="keyword">;<br />                </span><span class="default">$iy</span><span class="keyword">--;<br />            } else {<br />                </span><span class="default">$ig </span><span class="keyword">+= </span><span class="default">$idgr</span><span class="keyword">;<br />                </span><span class="default">$idgd </span><span class="keyword">-= </span><span class="default">4</span><span class="keyword">;<br />            }<br />            </span><span class="default">$idgr </span><span class="keyword">-= </span><span class="default">4</span><span class="keyword">;<br />            </span><span class="default">$ix</span><span class="keyword">++;<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$iy </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$iy </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$iy </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$iy </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$iy </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$iy </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$iy </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">imageLine</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$iy </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$fill </span><span class="keyword">);<br />            </span><span class="default">$filled </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            for ( </span><span class="default">$xx </span><span class="keyword">= </span><span class="default">$ix </span><span class="keyword">- </span><span class="default">0.45</span><span class="keyword">; </span><span class="default">$xx </span><span class="keyword">&lt; </span><span class="default">$ix </span><span class="keyword">+ </span><span class="default">0.5</span><span class="keyword">; </span><span class="default">$xx </span><span class="keyword">+= </span><span class="default">0.2 </span><span class="keyword">) {<br />                for ( </span><span class="default">$yy </span><span class="keyword">= </span><span class="default">$iy </span><span class="keyword">- </span><span class="default">0.45</span><span class="keyword">; </span><span class="default">$yy </span><span class="keyword">&lt; </span><span class="default">$iy </span><span class="keyword">+ </span><span class="default">0.5</span><span class="keyword">; </span><span class="default">$yy </span><span class="keyword">+= </span><span class="default">0.2 </span><span class="keyword">) {<br />                    if ( </span><span class="default">sqrt</span><span class="keyword">( </span><span class="default">pow</span><span class="keyword">( </span><span class="default">$xx</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">) + </span><span class="default">pow</span><span class="keyword">( </span><span class="default">$yy</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">) ) &lt; </span><span class="default">$cr </span><span class="keyword">) </span><span class="default">$filled </span><span class="keyword">+= </span><span class="default">4</span><span class="keyword">;<br />                }<br />            }<br />            </span><span class="default">$draw </span><span class="keyword">= </span><span class="default">imageColorExactAlpha</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'R' </span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'G' </span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[ </span><span class="string">'B' </span><span class="keyword">], ( </span><span class="default">100 </span><span class="keyword">- </span><span class="default">$filled </span><span class="keyword">) );<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />            </span><span class="default">imageSetPixel</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$iy</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$ix</span><span class="keyword">, </span><span class="default">$draw </span><span class="keyword">);<br />        }<br />    }<br /><br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">( </span><span class="default">320</span><span class="keyword">, </span><span class="default">240 </span><span class="keyword">);<br /><br />    </span><span class="default">imageSmoothCircle</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">160</span><span class="keyword">, </span><span class="default">120</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, array( </span><span class="string">'R' </span><span class="keyword">=&gt; </span><span class="default">0xCC</span><span class="keyword">, </span><span class="string">'G' </span><span class="keyword">=&gt; </span><span class="default">0x33</span><span class="keyword">, </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="default">0x00 </span><span class="keyword">) );<br />    </span><span class="default">imageSmoothCircle</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">170</span><span class="keyword">, </span><span class="default">110</span><span class="keyword">,  </span><span class="default">75</span><span class="keyword">, array( </span><span class="string">'R' </span><span class="keyword">=&gt; </span><span class="default">0xDD</span><span class="keyword">, </span><span class="string">'G' </span><span class="keyword">=&gt; </span><span class="default">0x66</span><span class="keyword">, </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="default">0x00 </span><span class="keyword">) );<br />    </span><span class="default">imageSmoothCircle</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">180</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">,  </span><span class="default">50</span><span class="keyword">, array( </span><span class="string">'R' </span><span class="keyword">=&gt; </span><span class="default">0xEE</span><span class="keyword">, </span><span class="string">'G' </span><span class="keyword">=&gt; </span><span class="default">0x99</span><span class="keyword">, </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="default">0x00 </span><span class="keyword">) );<br />    </span><span class="default">imageSmoothCircle</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">190</span><span class="keyword">,  </span><span class="default">90</span><span class="keyword">,  </span><span class="default">25</span><span class="keyword">, array( </span><span class="string">'R' </span><span class="keyword">=&gt; </span><span class="default">0xFF</span><span class="keyword">, </span><span class="string">'G' </span><span class="keyword">=&gt; </span><span class="default">0xCC</span><span class="keyword">, </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="default">0x00 </span><span class="keyword">) );<br /><br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Type: image/png' </span><span class="keyword">);<br />    </span><span class="default">imagePNG</span><span class="keyword">( </span><span class="default">$img </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57181">  <div class="votes">
    <div id="Vu57181">
    <a href="/manual/vote-note.php?id=57181&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57181">
    <a href="/manual/vote-note.php?id=57181&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57181" title="no votes...">
    0
    </div>
  </div>
  <a href="#57181" class="name">
  <strong class="user"><em>sebbi at conceptT dot com</em></strong></a><a class="genanchor" href="#57181"> &para;</a><div class="date" title="2005-09-26 07:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57181">
<div class="phpcode"><code><span class="html">I did a search in google and got following url:<br /><a href="http://www.isocalc.com/tutorials/antialias.htm" rel="nofollow" target="_blank">http://www.isocalc.com/tutorials/antialias.htm</a><br />With this tutorial I was able to write a function to convert this algorithm into php, the result for a filled circel is this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagefilledcircleantialiased</span><span class="keyword">(&amp;</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$fgcolor</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">) {<br />  </span><span class="default">$fgcolors </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$fgcolor</span><span class="keyword">);<br />  </span><span class="default">$bgcolors </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$bgcolor</span><span class="keyword">);<br />  for ( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$r</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;= </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$r</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ ) {<br />    for ( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$r</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt;= </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$r</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ ) {<br />      </span><span class="default">$rx </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$cx</span><span class="keyword">; </span><span class="default">$ry </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">$cy</span><span class="keyword">;<br />      </span><span class="default">$ir </span><span class="keyword">= </span><span class="default">sqrt</span><span class="keyword">(( </span><span class="default">$rx </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$rx </span><span class="keyword">- </span><span class="default">0.5</span><span class="keyword">*</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$rx</span><span class="keyword">)/</span><span class="default">$rx</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) ) + ( </span><span class="default">$ry </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$ry </span><span class="keyword">- </span><span class="default">0.5</span><span class="keyword">*</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$ry</span><span class="keyword">)/</span><span class="default">$ry</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) ));<br />      </span><span class="default">$or </span><span class="keyword">= </span><span class="default">sqrt</span><span class="keyword">(( </span><span class="default">$rx </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$rx </span><span class="keyword">+ </span><span class="default">0.5</span><span class="keyword">*</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$rx</span><span class="keyword">)/</span><span class="default">$rx</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) ) + ( </span><span class="default">$ry </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$ry </span><span class="keyword">+ </span><span class="default">0.5</span><span class="keyword">*</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$ry</span><span class="keyword">)/</span><span class="default">$ry</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) ));<br />      if ( </span><span class="default">$or </span><span class="keyword">&lt;= </span><span class="default">$r </span><span class="keyword">) {<br />        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$fgcolor</span><span class="keyword">);<br />      }<br />      elseif ( </span><span class="default">$ir </span><span class="keyword">&lt; </span><span class="default">$r </span><span class="keyword">) {<br />        </span><span class="default">$filled </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        for ( </span><span class="default">$xx </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">- </span><span class="default">0.45</span><span class="keyword">; </span><span class="default">$xx </span><span class="keyword">&lt; </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">0.5</span><span class="keyword">; </span><span class="default">$xx</span><span class="keyword">+=</span><span class="default">0.1 </span><span class="keyword">) {<br />          for ( </span><span class="default">$yy </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">- </span><span class="default">0.45</span><span class="keyword">; </span><span class="default">$yy </span><span class="keyword">&lt; </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">0.5</span><span class="keyword">; </span><span class="default">$yy</span><span class="keyword">+=</span><span class="default">0.1 </span><span class="keyword">) {<br />            </span><span class="default">$rxx </span><span class="keyword">= </span><span class="default">$xx </span><span class="keyword">- </span><span class="default">$cx</span><span class="keyword">; </span><span class="default">$ryy </span><span class="keyword">= </span><span class="default">$yy </span><span class="keyword">- </span><span class="default">$cy</span><span class="keyword">;<br />            if ( </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">pow</span><span class="keyword">(</span><span class="default">$rxx</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) + </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$ryy</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)) &lt; </span><span class="default">$r </span><span class="keyword">) </span><span class="default">$filled</span><span class="keyword">++;<br />          }<br />        }<br />        </span><span class="default">$red </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$bgcolors</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] + ( </span><span class="default">$fgcolors</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] - </span><span class="default">$bgcolors</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] ) * </span><span class="default">$filled </span><span class="keyword">/ </span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">$green </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$bgcolors</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + ( </span><span class="default">$fgcolors</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] - </span><span class="default">$bgcolors</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] ) * </span><span class="default">$filled </span><span class="keyword">/ </span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">$blue </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$bgcolors</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] + ( </span><span class="default">$fgcolors</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] - </span><span class="default">$bgcolors</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] ) * </span><span class="default">$filled </span><span class="keyword">/ </span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">imagecolorclosest</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue</span><span class="keyword">));<br />      }<br />    }<br />  }<br />}<br /><br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">160</span><span class="keyword">;<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$r </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;<br /></span><span class="default">$bgc </span><span class="keyword">= </span><span class="string">"651713"</span><span class="keyword">;<br /></span><span class="default">$fgc </span><span class="keyword">= </span><span class="string">"b12b2c"</span><span class="keyword">;<br /><br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">$bgcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$bgc</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)), </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$bgc</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)), </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$bgc</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)));<br />for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {<br />    </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, ( </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fgc</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)) + </span><span class="default">$i</span><span class="keyword">*</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$bgc</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">))) / (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">), ( </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fgc</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)) + </span><span class="default">$i</span><span class="keyword">*</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$bgc</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">))) / (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">), ( </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fgc</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)) + </span><span class="default">$i</span><span class="keyword">*</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$bgc</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">))) / (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">));<br />}<br /></span><span class="default">$fgcolor </span><span class="keyword">= </span><span class="default">imagecolorclosest</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fgc</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)), </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fgc</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)), </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fgc</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)));<br /><br /></span><span class="default">imagefilledcircleantialiased</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$fgcolor</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>An improvement would be to draw the inner rectangle or more rectangles in the circle with the builtin rectangle function to reduce the usage of imagesetpixel() from (2*r)^2 to 2*Pi*(r + epsilon), in other words, the dependency on r would break down from square to linear.<br />Another improvement would be to determine filled and unfilled triangles in the observed pixel and calculate their areas, so we can get rid of the inner loops for getting the fraction filled/unfilled.<br />One can easily modify this function to solve other problems like lines, unfilled circles, etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="60643">  <div class="votes">
    <div id="Vu60643">
    <a href="/manual/vote-note.php?id=60643&amp;page=function.imageantialias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60643">
    <a href="/manual/vote-note.php?id=60643&amp;page=function.imageantialias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60643" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#60643" class="name">
  <strong class="user"><em>voinic at NOSgmailPAM dot com</em></strong></a><a class="genanchor" href="#60643"> &para;</a><div class="date" title="2006-01-12 02:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60643">
<div class="phpcode"><code><span class="html">The only trick I found to draw an antialiased polygon AND keep it transparent (to use them as overlays in google maps for example)... make two images and merge them. Order of operations is important and the transparency color of the final image must be set after the merge:<br /><br />&lt;?<br />header("Content-type: image/png");<br /><br />$values = array(<br />           40,  50,  // Point 1 (x, y)<br />           20,  240, // Point 2 (x, y)<br />           60,  60,  // Point 3 (x, y)<br />           240, 20,  // Point 4 (x, y)<br />           50,  40,  // Point 5 (x, y)<br />           10,  10  // Point 6 (x, y)<br />           );                    <br /><br />$im = imagecreate(250, 250);<br />$bg = imagecolorallocate($im, 255, 255, 255);<br /><br />$im2 = imagecreatetruecolor(250, 250);<br />$bg2 = imagecolorallocate($im2, 255, 255, 255);<br />imagefilledrectangle($im2,0,0,249,249,$bg2);<br />imagecolortransparent($im2, $bg);<br />imageantialias($im2, true);<br />$c_red = imagecolorallocate($im2, 255, 0, 0);<br />imagepolygon($im2, $values, 6, $c_red);<br />imageantialias($im2, false);<br /><br />imagecopymerge($im, $im2,0,0,0,0,250,250,50);<br /><br />imagecolortransparent($im, $bg);<br />$c_red_alpha = imagecolorallocatealpha($im, 255, 0, 0, 60);<br />imagefilledpolygon($im, $values, 6, $c_red_alpha);<br /><br />imagepng($im);<br />imagedestroy($im);<br />imagedestroy($im2);<br />?&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imageantialias&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imageantialias.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
