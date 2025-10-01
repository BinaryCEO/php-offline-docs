<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecolortransparent - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecolortransparent.php">
 <link rel="shorturl" href="https://www.php.net/imagecolortransparent">
 <link rel="alternate" href="https://www.php.net/imagecolortransparent" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecolorstotal.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imageconvolution.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecolortransparent.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecolortransparent.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecolortransparent.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecolortransparent.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecolortransparent.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecolortransparent.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecolortransparent.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecolortransparent.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecolortransparent.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecolortransparent.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecolortransparent.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Define a color as transparent" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecolortransparent - Manual" />
<meta name="twitter:description" content="Define a color as transparent" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecolortransparent - Manual" />
<meta itemprop="description" content="Define a color as transparent" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Define a color as transparent" />

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
        <a href="function.imageconvolution.php">
          imageconvolution &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecolorstotal.php">
          &laquo; imagecolorstotal        </a>
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
            <option value='en/function.imagecolortransparent.php' selected="selected">English</option>
            <option value='de/function.imagecolortransparent.php'>German</option>
            <option value='es/function.imagecolortransparent.php'>Spanish</option>
            <option value='fr/function.imagecolortransparent.php'>French</option>
            <option value='it/function.imagecolortransparent.php'>Italian</option>
            <option value='ja/function.imagecolortransparent.php'>Japanese</option>
            <option value='pt_BR/function.imagecolortransparent.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecolortransparent.php'>Russian</option>
            <option value='tr/function.imagecolortransparent.php'>Turkish</option>
            <option value='uk/function.imagecolortransparent.php'>Ukrainian</option>
            <option value='zh/function.imagecolortransparent.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecolortransparent" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecolortransparent</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecolortransparent</span> &mdash; <span class="dc-title">Define a color as transparent</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecolortransparent-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecolortransparent</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$color</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Gets or sets the transparent color in the given <code class="parameter">image</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecolortransparent-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       A color identifier created with <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecolortransparent-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The identifier of the new (or current, if none is specified)
   transparent color is returned. If <code class="parameter">color</code>
   is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, and the image has no transparent color, the
   returned identifier will be <code class="literal">-1</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecolortransparent-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">color</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagecolortransparent-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2854">
    <p><strong>Example #1 <span class="function"><strong>imagecolortransparent()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 55x30 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">55</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$red </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Make the background transparent<br /></span><span style="color: #0000BB">imagecolortransparent</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$black</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw a red rectangle<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">25</span><span style="color: #007700">, </span><span style="color: #0000BB">$red</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Save the image<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'./imagecolortransparent.png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagecolortransparent.png" alt="Output of example : imagecolortransparent()" width="55" height="30" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagecolortransparent-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Transparency is copied only with <span class="function"><a href="function.imagecopymerge.php" class="function">imagecopymerge()</a></span> and
    true color images, not with <span class="function"><a href="function.imagecopy.php" class="function">imagecopy()</a></span> or pallete images.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The transparent color is a property of the image, transparency is not a
    property of the color. Once you have set a color to be the transparent
    color, any regions of the image in that color that were drawn previously
    will be transparent.
   </p>
  </p></blockquote>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecolortransparent.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecolortransparent%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecolortransparent&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolortransparent.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">28 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="76407">  <div class="votes">
    <div id="Vu76407">
    <a href="/manual/vote-note.php?id=76407&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76407">
    <a href="/manual/vote-note.php?id=76407&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76407" title="100% like this...">
    6
    </div>
  </div>
  <a href="#76407" class="name">
  <strong class="user"><em>erik at vectorsector dot net</em></strong></a><a class="genanchor" href="#76407"> &para;</a><div class="date" title="2007-07-13 09:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76407">
<div class="phpcode"><code><span class="html">This script creates transparency for a unspecific RBG color for an already created PNG image.  It also includes script of overlay text that does not get ruined in the process. <br /><br /><span class="default">&lt;?php<br /><br />header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">250</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">);<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">];<br /></span><span class="default">$im     </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"dynIcon.png"</span><span class="keyword">);<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">16</span><span class="keyword">,</span><span class="default">16</span><span class="keyword">);<br /></span><span class="default">$orange </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">210</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">);<br /></span><span class="default">$bg_color </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$px     </span><span class="keyword">= (</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">) - </span><span class="default">3 </span><span class="keyword">* </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) / </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$bg_color</span><span class="keyword">);<br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$px</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$orange</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span> <br /><br />Use $bg_color = imagecolorat($im,1,1); for instance, if you made the transparent color in photoshop by clearing out all the color leaving you with the checkered background showing you it's empty.</span></code></div>
  </div>
 </div>
  <div class="note" id="89927">  <div class="votes">
    <div id="Vu89927">
    <a href="/manual/vote-note.php?id=89927&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89927">
    <a href="/manual/vote-note.php?id=89927&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89927" title="63% like this...">
    10
    </div>
  </div>
  <a href="#89927" class="name">
  <strong class="user"><em>markglibres at yahoo dot com</em></strong></a><a class="genanchor" href="#89927"> &para;</a><div class="date" title="2009-03-29 06:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89927">
<div class="phpcode"><code><span class="html">I've made a very simple script that will retain transparency of images especially when resizing.
<br />
<br />NOTE: Transparency is only supported on GIF and PNG files.
<br />
<br />Parameters:
<br />
<br />$new_image = image resource identifier such as returned by imagecreatetruecolor(). must be passed by reference
<br />$image_source = image resource identifier returned by imagecreatefromjpeg, imagecreatefromgif and imagecreatefrompng. must be passed by reference
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">setTransparency</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">,</span><span class="default">$image_source</span><span class="keyword">)
<br />    {
<br />        
<br />            </span><span class="default">$transparencyIndex </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$image_source</span><span class="keyword">);
<br />            </span><span class="default">$transparencyColor </span><span class="keyword">= array(</span><span class="string">'red' </span><span class="keyword">=&gt; </span><span class="default">255</span><span class="keyword">, </span><span class="string">'green' </span><span class="keyword">=&gt; </span><span class="default">255</span><span class="keyword">, </span><span class="string">'blue' </span><span class="keyword">=&gt; </span><span class="default">255</span><span class="keyword">);
<br />             
<br />            if (</span><span class="default">$transparencyIndex </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {
<br />                </span><span class="default">$transparencyColor    </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$image_source</span><span class="keyword">, </span><span class="default">$transparencyIndex</span><span class="keyword">);    
<br />            }
<br />            
<br />            </span><span class="default">$transparencyIndex    </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">, </span><span class="default">$transparencyColor</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$transparencyColor</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$transparencyColor</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);
<br />            </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$transparencyIndex</span><span class="keyword">);
<br />             </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">, </span><span class="default">$transparencyIndex</span><span class="keyword">);
<br />        
<br />    } 
<br /></span><span class="default">?&gt;
<br /></span>
<br />
<br />Sample Usage: (resizing)
<br />
<br /><span class="default">&lt;?php
<br />$image_source </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'test.png'</span><span class="keyword">);
<br /></span><span class="default">$new_image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);
<br /></span><span class="default">setTransparency</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">,</span><span class="default">$image_source</span><span class="keyword">);
<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">, </span><span class="default">$image_source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$old_width</span><span class="keyword">, </span><span class="default">$old_height</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104554">  <div class="votes">
    <div id="Vu104554">
    <a href="/manual/vote-note.php?id=104554&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104554">
    <a href="/manual/vote-note.php?id=104554&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104554" title="61% like this...">
    3
    </div>
  </div>
  <a href="#104554" class="name">
  <strong class="user"><em>email at vladislav dot net</em></strong></a><a class="genanchor" href="#104554"> &para;</a><div class="date" title="2011-06-22 02:42"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104554">
<div class="phpcode"><code><span class="html">Pay attention, that some GIF images may not include a transparent color. A good example of forced transparency in resized GIF image was given by markglibres at yahoo dot com 29-Mar-2009 02:48. But sometimes the transparent color in GIF images can be not set. The problem is, that the color you force to be transparent can be used in the original GIF as opaque and you will loose that color in resized image. The solution is not to use some default transparent color and to leave the resized image without transparent color (the same as original GIF). I used (nearly) the following code to make resized GIF images trnsparent  only when the transparency is needed:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* ... */<br /><br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">ImageCreateFromGIF</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">); </span><span class="comment">/* create image from existing GIF: original image file name $f you may take from where you need */<br /></span><span class="default">$transparent_index </span><span class="keyword">= </span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">); </span><span class="comment">/* gives the index of current transparent color or -1 */<br /></span><span class="keyword">if(</span><span class="default">$transparent_index</span><span class="keyword">!=(-</span><span class="default">1</span><span class="keyword">)) </span><span class="default">$transparent_color </span><span class="keyword">= </span><span class="default">ImageColorsForIndex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$transparent_index</span><span class="keyword">);<br /><br /></span><span class="comment">/* ... */<br /><br /></span><span class="default">$img_resized </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">( </span><span class="default">$nw</span><span class="keyword">, </span><span class="default">$nh </span><span class="keyword">); </span><span class="comment">/* (the new width $nw and height $nh must be defined before) */<br /></span><span class="keyword">if(!empty(</span><span class="default">$transparent_color</span><span class="keyword">)) </span><span class="comment">/* simple check to find wether transparent color was set or not */<br /></span><span class="keyword">{<br />    </span><span class="default">$transparent_new </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">( </span><span class="default">$img_resized</span><span class="keyword">, </span><span class="default">$transparent_color</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$transparent_color</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$transparent_color</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] );<br />    </span><span class="default">$transparent_new_index </span><span class="keyword">= </span><span class="default">ImageColorTransparent</span><span class="keyword">( </span><span class="default">$img_resized</span><span class="keyword">, </span><span class="default">$transparent_new </span><span class="keyword">);<br />    </span><span class="default">ImageFill</span><span class="keyword">( </span><span class="default">$img_resized</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$transparent_new_index </span><span class="keyword">); </span><span class="comment">/* don't forget to fill the new image with the transparent color */<br /></span><span class="keyword">}<br />list(</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">) = </span><span class="default">GetImageSize</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">); </span><span class="comment">/* defines the original width $w and height $h */<br /></span><span class="keyword">if( </span><span class="default">ImageCopyResized</span><span class="keyword">( </span><span class="default">$img_resized</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$nw</span><span class="keyword">,</span><span class="default">$nh</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h </span><span class="keyword">) ) </span><span class="comment">/* resized copying and replacing the original image */<br /></span><span class="keyword">{<br />    </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">$img_resized</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/* ... */<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: image/gif'</span><span class="keyword">);<br /></span><span class="default">ImageGIF</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />P.S.<br />If there some errors, I hope you could understood the idea.</span></code></div>
  </div>
 </div>
  <div class="note" id="115839">  <div class="votes">
    <div id="Vu115839">
    <a href="/manual/vote-note.php?id=115839&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115839">
    <a href="/manual/vote-note.php?id=115839&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115839" title="66% like this...">
    1
    </div>
  </div>
  <a href="#115839" class="name">
  <strong class="user"><em>romanenko.alex.v at gmail.com</em></strong></a><a class="genanchor" href="#115839"> &para;</a><div class="date" title="2014-10-02 08:02"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115839">
<div class="phpcode"><code><span class="html">This function has a very strange behaviour with GD version &gt; 2. It returns count of colors instead of -1 (as noted) if cannot find transparent color. Be carefull!</span></code></div>
  </div>
 </div>
  <div class="note" id="86593">  <div class="votes">
    <div id="Vu86593">
    <a href="/manual/vote-note.php?id=86593&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86593">
    <a href="/manual/vote-note.php?id=86593&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86593" title="66% like this...">
    1
    </div>
  </div>
  <a href="#86593" class="name">
  <strong class="user"><em>steved at HaHaHa dot com dot au</em></strong></a><a class="genanchor" href="#86593"> &para;</a><div class="date" title="2008-10-24 10:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86593">
<div class="phpcode"><code><span class="html">How to center your text both vertically and horizontally in a GD image:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//get box size
<br /></span><span class="default">$box </span><span class="keyword">= </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$titlesize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$titlefont</span><span class="keyword">, </span><span class="default">$title</span><span class="keyword">);
<br />        
<br /></span><span class="comment">//Find out the width and height of the text box
<br /></span><span class="default">$textW </span><span class="keyword">= </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br /></span><span class="default">$textH </span><span class="keyword">= </span><span class="default">$box</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];
<br />        
<br /></span><span class="comment">// Calculate the positions
<br /></span><span class="default">$positionLeft </span><span class="keyword">= (</span><span class="default">$width </span><span class="keyword">- </span><span class="default">$textW</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;
<br /></span><span class="default">$positionTop </span><span class="keyword">= ((</span><span class="default">$height </span><span class="keyword">- </span><span class="default">$textH</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);
<br />        
<br /></span><span class="comment">// Add some text
<br /></span><span class="keyword">if(</span><span class="default">$align</span><span class="keyword">==</span><span class="string">"center"</span><span class="keyword">){    
<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">size</span><span class="keyword">, </span><span class="default">angle</span><span class="keyword">, </span><span class="default">$positionLeft</span><span class="keyword">, </span><span class="default">$positionTop</span><span class="keyword">, </span><span class="default">colour</span><span class="keyword">, </span><span class="default">font</span><span class="keyword">, </span><span class="default">message</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77099">  <div class="votes">
    <div id="Vu77099">
    <a href="/manual/vote-note.php?id=77099&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77099">
    <a href="/manual/vote-note.php?id=77099&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77099" title="66% like this...">
    1
    </div>
  </div>
  <a href="#77099" class="name">
  <strong class="user"><em>Mikasto</em></strong></a><a class="genanchor" href="#77099"> &para;</a><div class="date" title="2007-08-15 04:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77099">
<div class="phpcode"><code><span class="html">To resize transparent PNG (if image is transparent &amp; ImageColorTransparent() returns -1):<br />1) create a new image with the new sizes<br />2) make the new image all transparent<br />3) turn off the alpha blending for the new image (to keep the alpha channel when copy data)<br />4) do copyresampled or copyresized into new image<br /><br />PHP code:<br />// 1<br />$im2 = ImageCreateTrueColor($w, $h);<br />// 2<br />ImageColorTransparent($im2, ImageColorAllocate($im2, 0, 0, 0));<br />// 3<br />ImageAlphaBlending($im2, false);<br />// 4<br />ImageCopyResampled($im2, $im, 0, 0, 0, 0, $w, $h, ImageSX($im), ImageSY($im));</span></code></div>
  </div>
 </div>
  <div class="note" id="51023">  <div class="votes">
    <div id="Vu51023">
    <a href="/manual/vote-note.php?id=51023&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51023">
    <a href="/manual/vote-note.php?id=51023&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51023" title="66% like this...">
    1
    </div>
  </div>
  <a href="#51023" class="name">
  <strong class="user"><em>talkback at codesponge dot com</em></strong></a><a class="genanchor" href="#51023"> &para;</a><div class="date" title="2005-03-16 03:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51023">
<div class="phpcode"><code><span class="html">Only one color may be transparent in one image.  The last call to imagecolortransparent will be the color that is set to transparent.<br /><br />I am processing button images that have a slightly different fill color than the background color outside the border of the button. I was hoping that I could just make both of those colors transparent and solve the problem.<br /><br />Hope this tidbit of info will save you some time.</span></code></div>
  </div>
 </div>
  <div class="note" id="85678">  <div class="votes">
    <div id="Vu85678">
    <a href="/manual/vote-note.php?id=85678&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85678">
    <a href="/manual/vote-note.php?id=85678&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85678" title="57% like this...">
    1
    </div>
  </div>
  <a href="#85678" class="name">
  <strong class="user"><em>cca220v</em></strong></a><a class="genanchor" href="#85678"> &para;</a><div class="date" title="2008-09-11 02:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85678">
<div class="phpcode"><code><span class="html">I found out the hard way that for two png's with alpha transparency to correctly stack you need to explicitly re-enable alpha blending.<br /><br />$img=imagecreatetruecolor($dx,$dy);<br />$img1=imagecreatefrompng($png1); //first layer<br />$img2=imagecreatefrompng($png2); //second layer (smaller image)<br /><br />imagealphablending($img, false);<br />$transparent = imagecolorallocatealpha($img, 0, 0, 0, 127);<br />imagefill($img, 0, 0, $transparent);<br />imagesavealpha($img,true);<br />imagealphablending($img, true); //removing this causes the second layer's transparency to go trough the 1st layer erasing it (the image &gt;is&lt; transparent there ... as is the 2nd layer ... but not the 1st so it should not be transparent)<br /><br />imagecopyresampled($img,$img1,<br />imagecopyresampled($img,$img2,</span></code></div>
  </div>
 </div>
  <div class="note" id="48900">  <div class="votes">
    <div id="Vu48900">
    <a href="/manual/vote-note.php?id=48900&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48900">
    <a href="/manual/vote-note.php?id=48900&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48900" title="57% like this...">
    1
    </div>
  </div>
  <a href="#48900" class="name">
  <strong class="user"><em>webmaster at webnetwizard dotco dotuk</em></strong></a><a class="genanchor" href="#48900"> &para;</a><div class="date" title="2005-01-11 06:09"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48900">
<div class="phpcode"><code><span class="html">After much devious mindbending, I have found a way to test any GIF for presence of background transparency. This ability is essential for my application which uploads any of GIF, JPEG or PNG and simultaneously creates a thumbnail of identical image type and identical filename (full size and thumbnail versions being stored in different folders).<br />After uploading and moving the image in the usual way, a switch($image_type) statement ensures that the optimum code is used to generate the thumbnail; regardless of image type.<br />The problem with the GIF type is that those with transparent backgrounds need to be treated differently to those without. When I don't detect GIF transparency, I either end up with all transparent GIF's having black backgrounds, or all GIF's get converted to transparent background - even if they weren't transparent in the original.<br />But how to detect transparency in the original? It finally occurred to me that I could test for transparency programmatically by overlaying a copy of the original image over an all-black image, record the color value at particular pixel locations and then repeat the process by overlaying a copy of the original image over an all-white image, recording the color values at identical pixel locations and comparing these with the first set of values.<br />If the two sets of values correlate exactly, and if sensible sampling points are used, the image can be treated as non-transparent. If the two sets of values show differences, the image should be treated as having a transparent background.</span></code></div>
  </div>
 </div>
  <div class="note" id="80935">  <div class="votes">
    <div id="Vu80935">
    <a href="/manual/vote-note.php?id=80935&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80935">
    <a href="/manual/vote-note.php?id=80935&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80935" title="53% like this...">
    1
    </div>
  </div>
  <a href="#80935" class="name">
  <strong class="user"><em>fmkaiba at optonline dot net</em></strong></a><a class="genanchor" href="#80935"> &para;</a><div class="date" title="2008-02-07 08:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80935">
<div class="phpcode"><code><span class="html">This is my 'perfect' (i use that word lightly) thumbnail generation script, switch '$transparency' to true to have it do its best to handle transparency in gifs and pngs. this code is built off of comments and advice of everyone else here, and i do not deserve full credit. So far this handles every error i can throw at it.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">createthumb</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$newname</span><span class="keyword">, </span><span class="default">$new_w</span><span class="keyword">, </span><span class="default">$new_h</span><span class="keyword">, </span><span class="default">$border</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">, </span><span class="default">$transparency</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">, </span><span class="default">$base64</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />    if(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$newname</span><span class="keyword">))<br />        @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$newname</span><span class="keyword">);<br />    if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">split</span><span class="keyword">(</span><span class="string">"\."</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">);<br />    </span><span class="default">$ext </span><span class="keyword">= </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">];<br /><br />    if(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"jpeg" </span><span class="keyword">|| </span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"jpg"</span><span class="keyword">){<br />        </span><span class="default">$img </span><span class="keyword">= @</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />    } elseif(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"png"</span><span class="keyword">){<br />        </span><span class="default">$img </span><span class="keyword">= @</span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />    } elseif(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"gif"</span><span class="keyword">) {<br />        </span><span class="default">$img </span><span class="keyword">= @</span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />    }<br />    if(!</span><span class="default">$img</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$old_x </span><span class="keyword">= </span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">$old_y </span><span class="keyword">= </span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    if(</span><span class="default">$old_x </span><span class="keyword">&lt; </span><span class="default">$new_w </span><span class="keyword">&amp;&amp; </span><span class="default">$old_y </span><span class="keyword">&lt; </span><span class="default">$new_h</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w </span><span class="keyword">= </span><span class="default">$old_x</span><span class="keyword">;<br />        </span><span class="default">$thumb_h </span><span class="keyword">= </span><span class="default">$old_y</span><span class="keyword">;<br />    } elseif (</span><span class="default">$old_x </span><span class="keyword">&gt; </span><span class="default">$old_y</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w </span><span class="keyword">= </span><span class="default">$new_w</span><span class="keyword">;<br />        </span><span class="default">$thumb_h </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$old_y</span><span class="keyword">*(</span><span class="default">$new_h</span><span class="keyword">/</span><span class="default">$old_x</span><span class="keyword">)));<br />    } elseif (</span><span class="default">$old_x </span><span class="keyword">&lt; </span><span class="default">$old_y</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$old_x</span><span class="keyword">*(</span><span class="default">$new_w</span><span class="keyword">/</span><span class="default">$old_y</span><span class="keyword">));<br />        </span><span class="default">$thumb_h </span><span class="keyword">= </span><span class="default">$new_h</span><span class="keyword">;<br />    } elseif (</span><span class="default">$old_x </span><span class="keyword">== </span><span class="default">$old_y</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w </span><span class="keyword">= </span><span class="default">$new_w</span><span class="keyword">;<br />        </span><span class="default">$thumb_h </span><span class="keyword">= </span><span class="default">$new_h</span><span class="keyword">;<br />    }<br />    </span><span class="default">$thumb_w </span><span class="keyword">= (</span><span class="default">$thumb_w</span><span class="keyword">&lt;</span><span class="default">1</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">$thumb_w</span><span class="keyword">;<br />    </span><span class="default">$thumb_h </span><span class="keyword">= (</span><span class="default">$thumb_h</span><span class="keyword">&lt;</span><span class="default">1</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">$thumb_h</span><span class="keyword">;<br />    </span><span class="default">$new_img </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$thumb_w</span><span class="keyword">, </span><span class="default">$thumb_h</span><span class="keyword">);<br />    <br />    if(</span><span class="default">$transparency</span><span class="keyword">) {<br />        if(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"png"</span><span class="keyword">) {<br />            </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />            </span><span class="default">$colorTransparent </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />            </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$colorTransparent</span><span class="keyword">);<br />            </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        } elseif(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"gif"</span><span class="keyword">) {<br />            </span><span class="default">$trnprt_indx </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />            if (</span><span class="default">$trnprt_indx </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {<br />                </span><span class="comment">//its transparent<br />                </span><span class="default">$trnprt_color </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$trnprt_indx</span><span class="keyword">);<br />                </span><span class="default">$trnprt_indx </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">$trnprt_color</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$trnprt_color</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$trnprt_color</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);<br />                </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$trnprt_indx</span><span class="keyword">);<br />                </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">$trnprt_indx</span><span class="keyword">);<br />            }<br />        }<br />    } else {<br />        </span><span class="default">Imagefill</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));<br />    }<br />    <br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$thumb_w</span><span class="keyword">, </span><span class="default">$thumb_h</span><span class="keyword">, </span><span class="default">$old_x</span><span class="keyword">, </span><span class="default">$old_y</span><span class="keyword">); <br />    if(</span><span class="default">$border</span><span class="keyword">) {<br />        </span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />        </span><span class="default">imagerectangle</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$thumb_w</span><span class="keyword">, </span><span class="default">$thumb_h</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">$base64</span><span class="keyword">) {<br />        </span><span class="default">ob_start</span><span class="keyword">();<br />        </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">);<br />        </span><span class="default">$img </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />        </span><span class="default">ob_end_clean</span><span class="keyword">();<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    } else {<br />        if(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"jpeg" </span><span class="keyword">|| </span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"jpg"</span><span class="keyword">){<br />            </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">$newname</span><span class="keyword">);<br />            </span><span class="default">$return </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        } elseif(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"png"</span><span class="keyword">){<br />            </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">$newname</span><span class="keyword">);<br />            </span><span class="default">$return </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        } elseif(</span><span class="default">$ext</span><span class="keyword">==</span><span class="string">"gif"</span><span class="keyword">) {<br />            </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">$newname</span><span class="keyword">);<br />            </span><span class="default">$return </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">); <br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">); <br />    return </span><span class="default">$return</span><span class="keyword">;<br />}<br /></span><span class="comment">//example useage<br /></span><span class="default">createthumb</span><span class="keyword">(</span><span class="string">"img.gif"</span><span class="keyword">, </span><span class="string">"tn_img.gif"</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">,</span><span class="default">64</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79145">  <div class="votes">
    <div id="Vu79145">
    <a href="/manual/vote-note.php?id=79145&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79145">
    <a href="/manual/vote-note.php?id=79145&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79145" title="100% like this...">
    1
    </div>
  </div>
  <a href="#79145" class="name">
  <strong class="user"><em>wesley dot gunn at email dot it</em></strong></a><a class="genanchor" href="#79145"> &para;</a><div class="date" title="2007-11-13 09:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79145">
<div class="phpcode"><code><span class="html">a simple way to check png with alpha channel reading IHDR PNG HEADER<br /><br />$readPng =    fopen    ($argSourceImagePath, "rb");<br />$readAlp =    fread    ($readPng, 52);<br />            fclose    ($readPng);<br /><br />if(substr(bin2hex($readAlp),50,2) == "04" || substr(bin2hex($readAlp),50,2) == "06")<br />echo("Png has alpha");</span></code></div>
  </div>
 </div>
  <div class="note" id="71237">  <div class="votes">
    <div id="Vu71237">
    <a href="/manual/vote-note.php?id=71237&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71237">
    <a href="/manual/vote-note.php?id=71237&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71237" title="100% like this...">
    1
    </div>
  </div>
  <a href="#71237" class="name">
  <strong class="user"><em>glenn at bengeweb dot co dot nz</em></strong></a><a class="genanchor" href="#71237"> &para;</a><div class="date" title="2006-11-17 08:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71237">
<div class="phpcode"><code><span class="html">in reference to webmaster at webnetwizard dotco dotuk who had a rather complicated method of determining if a GIF had any transparency set ...<br /><br />imagecolortransparent will return -1 if no transparency is found.<br /><br />eg:<br /><br />$transColorIndexMain = imageColorTransparent($mainImgObj);<br />if ($transColorIndexMain &gt;= 0 ) {<br />       # GIF has transparency ... ;<br />}<br /><br />Current PHP Version: 4.4.4<br />[GD Version] =&gt; bundled (2.0.28 compatible)</span></code></div>
  </div>
 </div>
  <div class="note" id="46142">  <div class="votes">
    <div id="Vu46142">
    <a href="/manual/vote-note.php?id=46142&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46142">
    <a href="/manual/vote-note.php?id=46142&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46142" title="100% like this...">
    1
    </div>
  </div>
  <a href="#46142" class="name">
  <strong class="user"><em>emilus at galeria-m dot art dot pl</em></strong></a><a class="genanchor" href="#46142"> &para;</a><div class="date" title="2004-09-30 02:02"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46142">
<div class="phpcode"><code><span class="html">To resize or copy image (gif [with gd&gt;=2.0.28] or png) with transparency.<br />-Take current transparency color<br />-create a new image with palette like old one and fill new image with transparent color<br />-set transparent color<br />-copy resized image<br /><br />$colorTransparent = imagecolortransparent($im);<br />$im2 = imagecreate($new_w,$new_h);<br />imagepalettecopy($im2,$im);<br />imagefill($im2,0,0,$colorTransparent);<br />imagecolortransparent($im2, $colorTransparent);<br />imagecopyresized($im2,$im,0,0,0,0,$new_w,$new_h,$imsx,$imsy);</span></code></div>
  </div>
 </div>
  <div class="note" id="36411">  <div class="votes">
    <div id="Vu36411">
    <a href="/manual/vote-note.php?id=36411&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36411">
    <a href="/manual/vote-note.php?id=36411&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36411" title="100% like this...">
    1
    </div>
  </div>
  <a href="#36411" class="name">
  <strong class="user"><em>creator79&gt;&gt;web&gt;&gt;de</em></strong></a><a class="genanchor" href="#36411"> &para;</a><div class="date" title="2003-10-08 06:44"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36411">
<div class="phpcode"><code><span class="html">Hi!<br />I'm using GDLib 1.6.3 so far I know.<br />You can have transparency on any defined color on any image type when using the imagecolorclosest($im, $R, $G, $B) function instead of imagecolorallocate() or imagecolorexact().</span></code></div>
  </div>
 </div>
  <div class="note" id="118476">  <div class="votes">
    <div id="Vu118476">
    <a href="/manual/vote-note.php?id=118476&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118476">
    <a href="/manual/vote-note.php?id=118476&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118476" title="no votes...">
    0
    </div>
  </div>
  <a href="#118476" class="name">
  <strong class="user"><em>Sebastian Sejzer</em></strong></a><a class="genanchor" href="#118476"> &para;</a><div class="date" title="2015-12-12 05:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118476">
<div class="phpcode"><code><span class="html">If you are looking for a blank PNG, you don't need to generate it every time. Just define this constant:<br /><br />define("BLANK_PNG",     "iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29m".<br />                        "dHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADqSURBVHjaYvz//z/DYAYAAcTEMMgBQAANegcCBNCg".<br />                        "dyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAAN".<br />                        "egcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQ".<br />                        "oHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAA".<br />                        "DXoHAgTQoHcgQAANegcCBNCgdyBAgAEAMpcDTTQWJVEAAAAASUVORK5CYII=");</span></code></div>
  </div>
 </div>
  <div class="note" id="107237">  <div class="votes">
    <div id="Vu107237">
    <a href="/manual/vote-note.php?id=107237&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107237">
    <a href="/manual/vote-note.php?id=107237&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107237" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107237" class="name">
  <strong class="user"><em>john at jbwalker dot com</em></strong></a><a class="genanchor" href="#107237"> &para;</a><div class="date" title="2012-01-23 08:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107237">
<div class="phpcode"><code><span class="html">A transparent background with text doesn't seem to work very well because of the antialiasing . But I tried the following kluge and it turned out very well:
<br />
<br /><span class="default">&lt;?php
<br />   $im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">);
<br />   </span><span class="default">$almostblack </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">254</span><span class="keyword">,</span><span class="default">254</span><span class="keyword">,</span><span class="default">254</span><span class="keyword">);
<br />   </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$almostblack</span><span class="keyword">);
<br />   </span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />   </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$almostblack</span><span class="keyword">);
<br />   </span><span class="comment">//... set x and y..
<br />   </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">,</span><span class="string">"calibri.ttf"</span><span class="keyword">,</span><span class="default">$txt</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100200">  <div class="votes">
    <div id="Vu100200">
    <a href="/manual/vote-note.php?id=100200&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100200">
    <a href="/manual/vote-note.php?id=100200&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100200" title="50% like this...">
    0
    </div>
  </div>
  <a href="#100200" class="name">
  <strong class="user"><em>admin at fastproxyservers dot org</em></strong></a><a class="genanchor" href="#100200"> &para;</a><div class="date" title="2010-09-30 09:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100200">
<div class="phpcode"><code><span class="html">I would like to share with others how to make PNG image transparent. I have tried almost all examples described on that page but none of them work for me. Finally I found the solution, but there is a bit cheating :) but who cares if it works?
<br />
<br />So when I tried to allocate white (as an example) color as a transparent, it worked randomly (lets say 1 in 10 examples). That in turn pushed me to the idea that the problem is that white color is already exist in color palette. So if I try to add another white color with DIFFERENT index as a transparent, that will cause error.
<br />
<br />So I found the solution, instead of adding new index, I searched for the white color’s index in the color palette and made it defined as transparent :) The best idea is to use not a white but left bottom corner as transparent color (I guess that s standard for some other software languages).
<br />
<br /><span class="default">&lt;?php
<br />$index </span><span class="keyword">= </span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);
<br /></span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />All you need is to add that two lines before outputting your result.</span></code></div>
  </div>
 </div>
  <div class="note" id="91053">  <div class="votes">
    <div id="Vu91053">
    <a href="/manual/vote-note.php?id=91053&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91053">
    <a href="/manual/vote-note.php?id=91053&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91053" title="50% like this...">
    0
    </div>
  </div>
  <a href="#91053" class="name">
  <strong class="user"><em>ajamal</em></strong></a><a class="genanchor" href="#91053"> &para;</a><div class="date" title="2009-05-22 06:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91053">
<div class="phpcode"><code><span class="html">This might be of importance to newbies...If you are trying to create GIF's with transparencies, stick to the 216 colour pallet for all colours on the image... or transparencies wont work...at the very least yo will get dithering...</span></code></div>
  </div>
 </div>
  <div class="note" id="82223">  <div class="votes">
    <div id="Vu82223">
    <a href="/manual/vote-note.php?id=82223&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82223">
    <a href="/manual/vote-note.php?id=82223&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82223" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82223" class="name">
  <strong class="user"><em>yousuf at philipz dot com</em></strong></a><a class="genanchor" href="#82223"> &para;</a><div class="date" title="2008-04-01 11:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82223">
<div class="phpcode"><code><span class="html">Well 8-bit gif and png files can have multiple transparent colors, so detecting the transparent color by manually looking into the file or using imagecolortransparent and using the detected rgb color as the background color when imagecopy'ing (or other image copying functions) on a true color image will not work. The only means of getting the transparent pixels to appear is to copy the pixel colors one by one to a new true color image. Here's some code i wrote to do this.<br /><br />$original_image = @imagecreatefromgif( $original_image_file );<br /><br />$original_image_width = imagesx( $original_image );<br />$original_image_height = imagesy( $original_image );<br /><br />if ( !imageistruecolor($original_image) ) {<br />   # detects if its non-true color image<br />   if ( imagecolortransparent($original_image) &gt;= 0 ) {<br />      # detects if any of the color palette has been set to transparent<br />      $truecolor = imagecreatetruecolor( $original_image_width, $original_image_height );<br />      for ($x = 0; $x &lt; $original_image_width; $x++) {<br />         for ($y = 0; $y &lt; $original_image_height; $y++) {<br />            $color_index = ImageColorAt($original_image, $x, $y);<br />            if ( !$color_palette[$color_index] ) {<br />               $rgb = imagecolorsforindex($original_image, $color_index);<br />               $color_to_set = imagecolorallocate($truecolor, $rgb['red'], $rgb['green'], $rgb['blue']);<br />               $color_palette[$color_index] = $color_to_set;<br />            } else {<br />               $color_to_set = $color_palette[$color_index];<br />            }<br />            imagesetpixel($truecolor, $x, $y, $color_to_set);<br />         }<br />      }<br />      imagedestroy($original_image);<br />      $original_image = $truecolor;<br />   }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="82096">  <div class="votes">
    <div id="Vu82096">
    <a href="/manual/vote-note.php?id=82096&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82096">
    <a href="/manual/vote-note.php?id=82096&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82096" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82096" class="name">
  <strong class="user"><em>kroccamen, gmail</em></strong></a><a class="genanchor" href="#82096"> &para;</a><div class="date" title="2008-03-27 05:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82096">
<div class="phpcode"><code><span class="html">Sorry, below should be:<br /><br /><span class="default">&lt;?php<br />$is_alpha </span><span class="keyword">= </span><span class="default">ord </span><span class="keyword">(</span><span class="default">file_get_contents </span><span class="keyword">(</span><span class="default">$file_path</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) &amp; </span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />much better :)<br />Both types 4 (greyscale transparent png), and 6 (colour transparent png) have bit 4 set, so there's no need to bitwise twice and there's no need for == as the return value will be 4 or 0, which is easily interpreted as true or false elsewhere in your code.<br /><br />note: file_get_contents isn't reading the whole file in this instance, just 1 byte on its own and that's it, so you can be assured this is fast and safe.</span></code></div>
  </div>
 </div>
  <div class="note" id="82032">  <div class="votes">
    <div id="Vu82032">
    <a href="/manual/vote-note.php?id=82032&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82032">
    <a href="/manual/vote-note.php?id=82032&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82032" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82032" class="name">
  <strong class="user"><em>kroccamen, gmail</em></strong></a><a class="genanchor" href="#82032"> &para;</a><div class="date" title="2008-03-25 04:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82032">
<div class="phpcode"><code><span class="html">@wesley gunn:<br />Thank you very, very much for the code to determine if a PNG is 24 or 32-bit :)<br />Here's an improved version in one line without using a file-handle<br /><br /><span class="default">&lt;?php<br />$is_alpha </span><span class="keyword">= ((</span><span class="default">ord </span><span class="keyword">(<br />    </span><span class="default">file_get_contents </span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)<br />) &amp; </span><span class="default">6</span><span class="keyword">) &amp; </span><span class="default">4</span><span class="keyword">) == </span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Gives true for a PNG with alpha, false otherwise.<br />This cannot detect 8-bit PNGs with transparency, but you could do that by searching the file contents for the presence of "PLTE" *AND* "tRNS".</span></code></div>
  </div>
 </div>
  <div class="note" id="81713">  <div class="votes">
    <div id="Vu81713">
    <a href="/manual/vote-note.php?id=81713&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81713">
    <a href="/manual/vote-note.php?id=81713&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81713" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81713" class="name">
  <strong class="user"><em>tomas at cimax dot com</em></strong></a><a class="genanchor" href="#81713"> &para;</a><div class="date" title="2008-03-10 12:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81713">
<div class="phpcode"><code><span class="html">On some versions you must set the index number of that color in color pallete rather than the color! So if you allocate color with imagecolorallocate, that this color gets 0 index on color pallete so than you must call: imagecolortransparent ( resource $image , 0 ) to make the image transparent!</span></code></div>
  </div>
 </div>
  <div class="note" id="71763">  <div class="votes">
    <div id="Vu71763">
    <a href="/manual/vote-note.php?id=71763&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71763">
    <a href="/manual/vote-note.php?id=71763&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71763" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71763" class="name">
  <strong class="user"><em>cinymini</em></strong></a><a class="genanchor" href="#71763"> &para;</a><div class="date" title="2006-12-14 11:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71763">
<div class="phpcode"><code><span class="html">When you use palette images (created with imagecreate()), the first color allocated is the background color. This color cannot be used for transparency. So if you want to make the background transparent, first allocate a dummy background color, then allocate the real background color and declare this is as transparent.</span></code></div>
  </div>
 </div>
  <div class="note" id="53703">  <div class="votes">
    <div id="Vu53703">
    <a href="/manual/vote-note.php?id=53703&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53703">
    <a href="/manual/vote-note.php?id=53703&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53703" title="50% like this...">
    0
    </div>
  </div>
  <a href="#53703" class="name">
  <strong class="user"><em>ingrid</em></strong></a><a class="genanchor" href="#53703"> &para;</a><div class="date" title="2005-06-09 09:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53703">
<div class="phpcode"><code><span class="html">This script should take an animated GIF whit a white background transparancy, put some white=transparant text on it, and can be used in any page using the filename and the normal image tags.<br /><br />Everything works well, exept the animation. The GIF animation stands still. Don't know how to keep the animation  animated. Is it possible in PHP?<br /><br /><span class="default">&lt;?php<br /><br />$TextFile </span><span class="keyword">= </span><span class="string">"teller.txt"</span><span class="keyword">;<br /></span><span class="default">$Count </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$TextFile</span><span class="keyword">));<br /></span><span class="default">$FP </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$TextFile</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /></span><span class="default">$Count</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$FP</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br /></span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$FP</span><span class="keyword">);<br /></span><span class="default">settype</span><span class="keyword">(</span><span class="default">$Count</span><span class="keyword">, </span><span class="string">"integer"</span><span class="keyword">);<br /></span><span class="default">$Count</span><span class="keyword">++;<br />if (</span><span class="default">$FP </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="default">$TextFile</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">)){<br /></span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$FP</span><span class="keyword">, </span><span class="default">$Count</span><span class="keyword">);<br /></span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$FP</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$image </span><span class="keyword">= </span><span class="string">"blad.gif"</span><span class="keyword">;<br /></span><span class="default">$im    </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">$white </span><span class="keyword">= </span><span class="default">imageColorAllocate </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$trans </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br /></span><span class="default">$hit </span><span class="keyword">= </span><span class="string">"</span><span class="default">$Count</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">$ip </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"REMOTE_ADDR"</span><span class="keyword">];<br /><br /></span><span class="default">ImageString</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">,  </span><span class="string">" je bent bezoeker "</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br /></span><span class="default">ImageString</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="string">" </span><span class="default">$ip</span><span class="string">.</span><span class="default">$hit</span><span class="string">"</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/gif"</span><span class="keyword">);<br /></span><span class="default">Imagegif</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">ImageDestroy </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46030">  <div class="votes">
    <div id="Vu46030">
    <a href="/manual/vote-note.php?id=46030&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46030">
    <a href="/manual/vote-note.php?id=46030&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46030" title="50% like this...">
    0
    </div>
  </div>
  <a href="#46030" class="name">
  <strong class="user"><em>php_comment et 5mm de</em></strong></a><a class="genanchor" href="#46030"> &para;</a><div class="date" title="2004-09-27 10:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom46030">
<div class="phpcode"><code><span class="html">In fact this function can be used for two purposes:<br /><br />A.) to work with transparency while dealing with images in php (see watermark example)<br /><br />B.) to create a partially transparent picture<br /><br />For A.) one can work with truecolor images with some regulations, but B.) can only be used with palette-based images (= indexed = created with imagecreate not imagecreatetruecolor) and formats that support transparency (png, gif).<br /><br />For instance if you want to cut out a color out of a give picture that is in truecolor, use the following method to first convert it to palette-based image, assign the transparency and give it to the browser as png:<br /><br />&lt;?<br />$img = imagecreatefromjpeg('test.jpg');<br />imagetruecolortopalette($img, false, 256); // convert<br /><br />$white = imagecolorresolve($img, 255, 255, 255); // resolve given palette entry<br />imagecolortransparent($img, $white);<br /><br />header("Content-type: image/png");<br />imagepng($img);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="37420">  <div class="votes">
    <div id="Vu37420">
    <a href="/manual/vote-note.php?id=37420&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37420">
    <a href="/manual/vote-note.php?id=37420&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37420" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37420" class="name">
  <strong class="user"><em>php at kybert dot com</em></strong></a><a class="genanchor" href="#37420"> &para;</a><div class="date" title="2003-11-14 05:30"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37420">
<div class="phpcode"><code><span class="html">i had problems with the example by sandhawk at spies dot com because my png overlay, and the jpeg canvas were using different color depths, so, this function corrects this:<br /><br />[code]<br />function WatermarkImage($CanvasImage, $WatermarkImage /* MUST BE PHG */, $Opacity=10, $Quality=75)<br />{<br />    // create true color canvas image:<br />    $canvas_src = imagecreatefromjpeg($CanvasImage);<br />    $canvas_w = ImageSX($canvas_src);<br />    $canvas_h = ImageSY($canvas_src);<br />    $canvas_img = imagecreatetruecolor($canvas_w, $canvas_h);<br />    imagecopy($canvas_img, $canvas_src, 0,0,0,0, $canvas_w, $canvas_h);<br />    imagedestroy($canvas_src);    // no longer needed<br /><br />    // create true color overlay image:<br />    $overlay_src = imagecreatefrompng($WatermarkImage);<br />    $overlay_w = ImageSX($overlay_src);<br />    $overlay_h = ImageSY($overlay_src);<br />    $overlay_img = imagecreatetruecolor($overlay_w, $overlay_h);<br />    imagecopy($overlay_img, $overlay_src, 0,0,0,0, $overlay_w, $overlay_h);<br />    imagedestroy($overlay_src);    // no longer needed<br /><br />    // setup transparent color (pick one):<br />    $black   = imagecolorallocate($overlay_img, 0x00, 0x00, 0x00);<br />    $white   = imagecolorallocate($overlay_img, 0xFF, 0xFF, 0xFF);<br />    $magenta = imagecolorallocate($overlay_img, 0xFF, 0x00, 0xFF);    <br />    // and use it here:<br />    imagecolortransparent($overlay_img, $white);<br /><br />    // copy and merge the overlay image and the canvas image:<br />    imagecopymerge($canvas_img, $overlay_img, 0,0,0,0, $overlay_w, $overlay_h, $Opacity);<br /><br />    // output:<br />    header("Content-type: image/jpeg");<br />    imagejpeg($canvas_img, '', $Quality);<br /><br />    imagedestroy($overlay_img);<br />    imagedestroy($canvas_img);<br />}<br /><br />// call function with opcity set to 50% and 95% quality<br />WatermarkImage("canvas.jpg", "overlay.png", 50, 95);<br /><br />[/code]</span></code></div>
  </div>
 </div>
  <div class="note" id="34642">  <div class="votes">
    <div id="Vu34642">
    <a href="/manual/vote-note.php?id=34642&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34642">
    <a href="/manual/vote-note.php?id=34642&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34642" title="50% like this...">
    0
    </div>
  </div>
  <a href="#34642" class="name">
  <strong class="user"><em>calar at gamigo dot de</em></strong></a><a class="genanchor" href="#34642"> &para;</a><div class="date" title="2003-08-01 06:53"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34642">
<div class="phpcode"><code><span class="html">ok some works...<br /><br />i had a test-sytem with GDLib, phpinfo shows me this version:<br />"GD Version  2.0 or higher" so far no porblems with: imageColorTransparent<br /><br />Then we had to copy ouer codes to another sever on this server phpinfo shots me version:<br />"GD Version  bundled (2.0.12 compatible)"<br /><br />The jpg was wrong and nothing was transparent.<br />The point is, you have to use: imagecopymerge<br /><br />Don't if its true on any system just work on <br />SUSE 8.2<br />PHP 4.3.2</span></code></div>
  </div>
 </div>
  <div class="note" id="28035">  <div class="votes">
    <div id="Vu28035">
    <a href="/manual/vote-note.php?id=28035&amp;page=function.imagecolortransparent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28035">
    <a href="/manual/vote-note.php?id=28035&amp;page=function.imagecolortransparent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28035" title="50% like this...">
    0
    </div>
  </div>
  <a href="#28035" class="name">
  <strong class="user"><em>Jonatan</em></strong></a><a class="genanchor" href="#28035"> &para;</a><div class="date" title="2002-12-30 10:35"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28035">
<div class="phpcode"><code><span class="html">I have found that ImageColorTransparent() works on true color images if and only if the transparent color is black.<br />(PHP 4.2.3/GD 2.0)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecolortransparent&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolortransparent.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
