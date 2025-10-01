<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagesetthickness - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagesetthickness.php">
 <link rel="shorturl" href="https://www.php.net/imagesetthickness">
 <link rel="alternate" href="https://www.php.net/imagesetthickness" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagesetstyle.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagesettile.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagesetthickness.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagesetthickness.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagesetthickness.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagesetthickness.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagesetthickness.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagesetthickness.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagesetthickness.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagesetthickness.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagesetthickness.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagesetthickness.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagesetthickness.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the thickness for line drawing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagesetthickness - Manual" />
<meta name="twitter:description" content="Set the thickness for line drawing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagesetthickness - Manual" />
<meta itemprop="description" content="Set the thickness for line drawing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the thickness for line drawing" />

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
        <a href="function.imagesettile.php">
          imagesettile &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagesetstyle.php">
          &laquo; imagesetstyle        </a>
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
            <option value='en/function.imagesetthickness.php' selected="selected">English</option>
            <option value='de/function.imagesetthickness.php'>German</option>
            <option value='es/function.imagesetthickness.php'>Spanish</option>
            <option value='fr/function.imagesetthickness.php'>French</option>
            <option value='it/function.imagesetthickness.php'>Italian</option>
            <option value='ja/function.imagesetthickness.php'>Japanese</option>
            <option value='pt_BR/function.imagesetthickness.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagesetthickness.php'>Russian</option>
            <option value='tr/function.imagesetthickness.php'>Turkish</option>
            <option value='uk/function.imagesetthickness.php'>Ukrainian</option>
            <option value='zh/function.imagesetthickness.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagesetthickness" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagesetthickness</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagesetthickness</span> &mdash; <span class="dc-title">Set the thickness for line drawing</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagesetthickness-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagesetthickness</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$thickness</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagesetthickness()</strong></span> sets the thickness of the lines
   drawn when drawing rectangles, polygons, arcs etc. to
   <code class="parameter">thickness</code> pixels.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagesetthickness-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">thickness</code></dt>
     <dd>
      <p class="para">
       Thickness, in pixels.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagesetthickness-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagesetthickness-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagesetthickness-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2933">
    <p><strong>Example #1 <span class="function"><strong>imagesetthickness()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 200x100 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the background to be white<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">299</span><span style="color: #007700">, </span><span style="color: #0000BB">99</span><span style="color: #007700">, </span><span style="color: #0000BB">$white</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the line thickness to 5<br /></span><span style="color: #0000BB">imagesetthickness</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw the rectangle<br /></span><span style="color: #0000BB">imagerectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">14</span><span style="color: #007700">, </span><span style="color: #0000BB">14</span><span style="color: #007700">, </span><span style="color: #0000BB">185</span><span style="color: #007700">, </span><span style="color: #0000BB">85</span><span style="color: #007700">, </span><span style="color: #0000BB">$black</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output image to the browser<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagesetthickness.png" alt="Output of example : imagesetthickness()" width="200" height="100" />
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagesetthickness.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagesetthickness%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagesetthickness&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagesetthickness.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86007">  <div class="votes">
    <div id="Vu86007">
    <a href="/manual/vote-note.php?id=86007&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86007">
    <a href="/manual/vote-note.php?id=86007&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86007" title="82% like this...">
    11
    </div>
  </div>
  <a href="#86007" class="name">
  <strong class="user"><em>bpatru at gmail dot com</em></strong></a><a class="genanchor" href="#86007"> &para;</a><div class="date" title="2008-09-28 01:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom86007">
<div class="phpcode"><code><span class="html">Apparently imagesetthickness doesn't work if antialiasing is set to true.</span></code></div>
  </div>
 </div>
  <div class="note" id="112855">  <div class="votes">
    <div id="Vu112855">
    <a href="/manual/vote-note.php?id=112855&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112855">
    <a href="/manual/vote-note.php?id=112855&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112855" title="77% like this...">
    5
    </div>
  </div>
  <a href="#112855" class="name">
  <strong class="user"><em>azinkey at gmail dot com</em></strong></a><a class="genanchor" href="#112855"> &para;</a><div class="date" title="2013-07-30 10:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112855">
<div class="phpcode"><code><span class="html">thanks circle14,<br /><br />just change the line &amp; see its solved what we need for ellipse <br /><br />while ($line &lt; $thickness) {<br />        $line++;<br />        $elipse_w--;<br />        imageellipse($image, $pos_x, $pos_y, $elipse_w, $elipse_h, $color);<br />        $elipse_h--;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="76036">  <div class="votes">
    <div id="Vu76036">
    <a href="/manual/vote-note.php?id=76036&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76036">
    <a href="/manual/vote-note.php?id=76036&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76036" title="60% like this...">
    1
    </div>
  </div>
  <a href="#76036" class="name">
  <strong class="user"><em>ab at cd dot com</em></strong></a><a class="genanchor" href="#76036"> &para;</a><div class="date" title="2007-06-27 04:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76036">
<div class="phpcode"><code><span class="html">Note: Also, for me (working under PHP 5.0.2) this function ONLY seems to work with imageline...</span></code></div>
  </div>
 </div>
  <div class="note" id="93994">  <div class="votes">
    <div id="Vu93994">
    <a href="/manual/vote-note.php?id=93994&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93994">
    <a href="/manual/vote-note.php?id=93994&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93994" title="100% like this...">
    1
    </div>
  </div>
  <a href="#93994" class="name">
  <strong class="user"><em>fred at nowhere dot fr</em></strong></a><a class="genanchor" href="#93994"> &para;</a><div class="date" title="2009-10-10 12:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93994">
<div class="phpcode"><code><span class="html">One thing worse to mention is that imagesetthikness() works on the next object you draw.<br />For ex : you can draw a grid within a grapg with a thickness of 1 <br /><br />by invoking imagesetthickness($image, 1);<br /><br />... script to draw your grid...<br /><br />and then invoke imagesetthikness with a draw your graph lines with a thickness of 3<br />imagesetthickness($image, 3);<br />... script to draw your graph lines...<br /><br />Hope this helps...</span></code></div>
  </div>
 </div>
  <div class="note" id="91866">  <div class="votes">
    <div id="Vu91866">
    <a href="/manual/vote-note.php?id=91866&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91866">
    <a href="/manual/vote-note.php?id=91866&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91866" title="100% like this...">
    1
    </div>
  </div>
  <a href="#91866" class="name">
  <strong class="user"><em>jean-raymond dot chauviere at gmail dot com</em></strong></a><a class="genanchor" href="#91866"> &para;</a><div class="date" title="2009-06-30 01:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91866">
<div class="phpcode"><code><span class="html">An easier to manage thickness is, before to draw in the ellipse to play with 2 ellipse with different color :
<br />
<br /><span class="default">&lt;?php
<br />        imagefilledellipse  </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">,</span><span class="default">42</span><span class="keyword">,</span><span class="default">57</span><span class="keyword">,</span><span class="default">57</span><span class="keyword">,</span><span class="default">$drawColor</span><span class="keyword">);
<br />        </span><span class="default">imagefilledellipse  </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">,</span><span class="default">42</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">,</span><span class="default">$backColor</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />The first line draw a filled ellipse with the wanted color, and the 2nd one, draw an ellipse with the background color from the same center, but is smaller.
<br />
<br />The drawback of this method is that you erase everything in the middle of the ellipse.</span></code></div>
  </div>
 </div>
  <div class="note" id="119174">  <div class="votes">
    <div id="Vu119174">
    <a href="/manual/vote-note.php?id=119174&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119174">
    <a href="/manual/vote-note.php?id=119174&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119174" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119174" class="name">
  <strong class="user"><em>gmail.com@mspreij</em></strong></a><a class="genanchor" href="#119174"> &para;</a><div class="date" title="2016-04-15 01:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119174">
<div class="phpcode"><code><span class="html">As you can see in the example image, the left and right sides are 1 px wider than they should be, this is the case for every width &gt; 1.  <br />Wrote this function to fix that bit.. probably not a drop-in replacement though. It draws a rectangle *around* the given coordinates, for any width line.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// draw a $width-wide line AROUND the given coordinates, keeping in mind 0,0,1,1 yields a 2×2 square<br /></span><span class="keyword">function </span><span class="default">imagelinerectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">-</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">-</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">+</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">-</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">+</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">+</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">-</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">+</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">+</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">-</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">-</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">+</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88639">  <div class="votes">
    <div id="Vu88639">
    <a href="/manual/vote-note.php?id=88639&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88639">
    <a href="/manual/vote-note.php?id=88639&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88639" title="50% like this...">
    0
    </div>
  </div>
  <a href="#88639" class="name">
  <strong class="user"><em>admin at circle14 dot net</em></strong></a><a class="genanchor" href="#88639"> &para;</a><div class="date" title="2009-02-01 05:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88639">
<div class="phpcode"><code><span class="html">Here is a custom function I wrote that addresses the line thickness issues with ellipses :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">draw_oval </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$pos_x</span><span class="keyword">, </span><span class="default">$pos_y</span><span class="keyword">, </span><span class="default">$elipse_width</span><span class="keyword">, </span><span class="default">$elipse_height</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$px_thick</span><span class="keyword">) {
<br />    </span><span class="default">$line </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$thickness </span><span class="keyword">= </span><span class="default">$px_thick</span><span class="keyword">;
<br />    </span><span class="default">$elipse_w </span><span class="keyword">= </span><span class="default">$elipse_width</span><span class="keyword">;
<br />    </span><span class="default">$elipse_h </span><span class="keyword">= </span><span class="default">$elipse_height</span><span class="keyword">;
<br />    while (</span><span class="default">$line </span><span class="keyword">&lt; </span><span class="default">$thickness</span><span class="keyword">) {
<br />        </span><span class="default">imageellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$pos_x</span><span class="keyword">, </span><span class="default">$pos_y</span><span class="keyword">, </span><span class="default">$elipse_w</span><span class="keyword">, </span><span class="default">$elipse_h</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />        </span><span class="default">$line</span><span class="keyword">++;
<br />        </span><span class="default">$elipse_w</span><span class="keyword">--;
<br />        </span><span class="default">$elipse_h</span><span class="keyword">--;
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />I hope you find this useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="81741">  <div class="votes">
    <div id="Vu81741">
    <a href="/manual/vote-note.php?id=81741&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81741">
    <a href="/manual/vote-note.php?id=81741&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81741" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#81741" class="name">
  <strong class="user"><em>baldurien at bbnwn dot eu</em></strong></a><a class="genanchor" href="#81741"> &para;</a><div class="date" title="2008-03-11 04:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81741">
<div class="phpcode"><code><span class="html">The way that imagesetthickness works with imagerectangle() is pretty strange.<br /><br /><span class="default">&lt;?php<br />imagesetthickness</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">imagerectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will draw a 41x41 square (because gd need the bottom right pixel, inclusive. 50 should get replaced by 49). This will "work" like:<br /><br /><span class="default">&lt;?php<br />imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);<br /></span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);<br /></span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);<br /></span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The second example:<br /><br /><span class="default">&lt;?php<br />imagesetthickness</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">imagerectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will draw a 43x43 square because the border (thickness) is set to 2. *however* this is not a "regular" border of 2 pixels around the 41x41 original square! <br /><br />On the left and right, there will be a thickness of 3, while there we be a thickness of 2.<br /><br />If you take the imageline example, but set the thickness before to 2, this will *almost* do the trick: the left most pixel of the square will not be drawn.<br /><br />To conclude:<br /><br />1) do not forget that (width, height) of drawn rectangle is (x2-x1+1, y2-y1+1)<br />2) thickness is bad implemented (or at least, the behavior i s not documented) on rectangle, as the left/right thickness is not the wanted one.<br />3) 4*imageline() should do the trick, but after "patching" the top left pixel.</span></code></div>
  </div>
 </div>
  <div class="note" id="74166">  <div class="votes">
    <div id="Vu74166">
    <a href="/manual/vote-note.php?id=74166&amp;page=function.imagesetthickness&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74166">
    <a href="/manual/vote-note.php?id=74166&amp;page=function.imagesetthickness&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74166" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#74166" class="name">
  <strong class="user"><em>-private-</em></strong></a><a class="genanchor" href="#74166"> &para;</a><div class="date" title="2007-03-28 01:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74166">
<div class="phpcode"><code><span class="html">There is a known bug. Imagesetthickness is NOT working on ellipse.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagesetthickness&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagesetthickness.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.imagesetpixel.php" title="imagesetpixel">imagesetpixel</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetstyle.php" title="imagesetstyle">imagesetstyle</a>
                        </li>
                                                <li class="current">
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
