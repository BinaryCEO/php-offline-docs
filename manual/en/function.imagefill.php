<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagefill - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagefill.php">
 <link rel="shorturl" href="https://www.php.net/imagefill">
 <link rel="alternate" href="https://www.php.net/imagefill" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imageellipse.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagefilledarc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagefill.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagefill.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagefill.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagefill.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagefill.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagefill.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagefill.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagefill.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagefill.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagefill.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagefill.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Flood fill" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagefill - Manual" />
<meta name="twitter:description" content="Flood fill" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagefill - Manual" />
<meta itemprop="description" content="Flood fill" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Flood fill" />

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
        <a href="function.imagefilledarc.php">
          imagefilledarc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imageellipse.php">
          &laquo; imageellipse        </a>
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
            <option value='en/function.imagefill.php' selected="selected">English</option>
            <option value='de/function.imagefill.php'>German</option>
            <option value='es/function.imagefill.php'>Spanish</option>
            <option value='fr/function.imagefill.php'>French</option>
            <option value='it/function.imagefill.php'>Italian</option>
            <option value='ja/function.imagefill.php'>Japanese</option>
            <option value='pt_BR/function.imagefill.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagefill.php'>Russian</option>
            <option value='tr/function.imagefill.php'>Turkish</option>
            <option value='uk/function.imagefill.php'>Ukrainian</option>
            <option value='zh/function.imagefill.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagefill" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagefill</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagefill</span> &mdash; <span class="dc-title">Flood fill</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagefill-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagefill</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Performs a flood fill starting at the given coordinate (top left is 0, 0)
   with the given <code class="parameter">color</code> in the
   <code class="parameter">image</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagefill-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">x</code></dt>
     <dd>
      <p class="para">
       x-coordinate of start point.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y</code></dt>
     <dd>
      <p class="para">
       y-coordinate of start point.
      </p>
     </dd>
    
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       The fill color. A color identifier created with <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagefill-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagefill-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagefill-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2883">
    <p><strong>Example #1 <span class="function"><strong>imagefill()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// sets background to red<br /></span><span style="color: #0000BB">$red </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagefill</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$red</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: image/png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagefill.png" alt="Output of example : imagefill()" width="100" height="100" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagefill-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecolorallocate.php" class="function" rel="rdfs-seeAlso">imagecolorallocate()</a> - Allocate a color for an image</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagefill.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagefill%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagefill&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefill.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110186">  <div class="votes">
    <div id="Vu110186">
    <a href="/manual/vote-note.php?id=110186&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110186">
    <a href="/manual/vote-note.php?id=110186&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110186" title="76% like this...">
    25
    </div>
  </div>
  <a href="#110186" class="name">
  <strong class="user"><em>George Edison</em></strong></a><a class="genanchor" href="#110186"> &para;</a><div class="date" title="2012-09-27 11:19"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110186">
<div class="phpcode"><code><span class="html">Creating a new true-color image, filling it with a transparent color, and saving it as a PNG image can be accomplished with the following:<br /><br /><span class="default">&lt;?php<br /><br />$new   </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">320</span><span class="keyword">, </span><span class="default">320</span><span class="keyword">);<br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">); </span><span class="comment">// it took me a good 10 minutes to figure this part out<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The image needs to be created with imagecreatetruecolor(), you must use imagefill() instead of imagefilledrectange(), and you need to call imagesavealpha(). No other combination of functions calls seems to produce the intended results.</span></code></div>
  </div>
 </div>
  <div class="note" id="73686">  <div class="votes">
    <div id="Vu73686">
    <a href="/manual/vote-note.php?id=73686&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73686">
    <a href="/manual/vote-note.php?id=73686&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73686" title="80% like this...">
    3
    </div>
  </div>
  <a href="#73686" class="name">
  <strong class="user"><em>Gromitt</em></strong></a><a class="genanchor" href="#73686"> &para;</a><div class="date" title="2007-03-06 10:14"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73686">
<div class="phpcode"><code><span class="html">If you need to fill a whole image (immediatly after its creation for instance), consider applying a filled rectangle instead, using imagefilledrectangle() :<br /><br /><span class="default">&lt;?php<br /><br />$gdImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">$gdColor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$gdImage</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="comment">// red<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$gdImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">99</span><span class="keyword">, </span><span class="default">99</span><span class="keyword">, </span><span class="default">$gdColor</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />which will require much less logic and processing from GD.</span></code></div>
  </div>
 </div>
  <div class="note" id="93920">  <div class="votes">
    <div id="Vu93920">
    <a href="/manual/vote-note.php?id=93920&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93920">
    <a href="/manual/vote-note.php?id=93920&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93920" title="68% like this...">
    7
    </div>
  </div>
  <a href="#93920" class="name">
  <strong class="user"><em>Christopher Kramer</em></strong></a><a class="genanchor" href="#93920"> &para;</a><div class="date" title="2009-10-06 03:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93920">
<div class="phpcode"><code><span class="html">Here is a function to generate a gradient.<br />You specify width, heigth and 4 colors (of the 4 corners).<br /><br />An image handle of the gradient image will be returned.<br />You can copy the returned image onto another image using imageecopy.<br />This can be helpful if you want to generate a shadow for example.<br />("Glow effect example": Generate 8 gradients, one for each side and one for each corner. The outer side of the gradients have the background color and the inner sides have a bright color such as white.)  <br /><br />But beware: This function is not optimized for performance, it might become slow on big images. For shadows, better cache the generated gradients.<br /><br />Note: For gradients, using true-color is highly recommended.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">gradient</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">=</span><span class="default">100</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">=</span><span class="default">100</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">=array(</span><span class="string">'#FFFFFF'</span><span class="keyword">,</span><span class="string">'#FF0000'</span><span class="keyword">,</span><span class="string">'#00FF00'</span><span class="keyword">,</span><span class="string">'#0000FF'</span><span class="keyword">), </span><span class="default">$hex</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {<br /><br /> </span><span class="comment">/*<br /> Generates a gradient image<br /><br /> Author: Christopher Kramer<br /> <br /> Parameters:<br /> w: width in px<br /> h: height in px<br /> c: color-array with 4 elements:<br />    $c[0]:   top left color<br />    $c[1]:   top right color<br />    $c[2]:   bottom left color<br />    $c[3]:   bottom right color<br />    <br /> if $hex is true (default), colors are hex-strings like '#FFFFFF' (NOT '#FFF')<br /> if $hex is false, a color is an array of 3 elements which are the rgb-values, e.g.:<br /> $c[0]=array(0,255,255);<br /> <br /> */<br /> <br /> </span><span class="default">$im</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">);<br /> <br /> if(</span><span class="default">$hex</span><span class="keyword">) {  </span><span class="comment">// convert hex-values to rgb<br />  </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">3</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) { <br />   </span><span class="default">$c</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">hex2rgb</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />  }<br /> }<br /> <br /> </span><span class="default">$rgb</span><span class="keyword">=</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">// start with top left color<br /> </span><span class="keyword">for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;=</span><span class="default">$w</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++) { </span><span class="comment">// loop columns<br />  </span><span class="keyword">for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;=</span><span class="default">$h</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++) { </span><span class="comment">// loop rows<br />   // set pixel color <br />   </span><span class="default">$col</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />   </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$col</span><span class="keyword">);<br />   </span><span class="comment">// calculate new color  <br />   </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">2</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=<br />      </span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]*((</span><span class="default">$w</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">)*(</span><span class="default">$h</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">)/(</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">)) +<br />      </span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]*(</span><span class="default">$x     </span><span class="keyword">*(</span><span class="default">$h</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">)/(</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">)) +<br />      </span><span class="default">$c</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]*((</span><span class="default">$w</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">)*</span><span class="default">$y     </span><span class="keyword">/(</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">)) +<br />      </span><span class="default">$c</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]*(</span><span class="default">$x     </span><span class="keyword">*</span><span class="default">$y     </span><span class="keyword">/(</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">));<br />   }<br />  }<br /> }<br /> return </span><span class="default">$im</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">hex2rgb</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">)<br /> {<br /> </span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /> </span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /> </span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /> return(</span><span class="default">$rgb</span><span class="keyword">);<br /> }<br /><br /></span><span class="comment">// usage example<br /><br /></span><span class="default">$image</span><span class="keyword">=</span><span class="default">gradient</span><span class="keyword">(</span><span class="default">300</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, array(</span><span class="string">'#000000'</span><span class="keyword">, </span><span class="string">'#FFFFFF'</span><span class="keyword">, </span><span class="string">'#FF0000'</span><span class="keyword">, </span><span class="string">'#0000FF'</span><span class="keyword">));<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59222">  <div class="votes">
    <div id="Vu59222">
    <a href="/manual/vote-note.php?id=59222&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59222">
    <a href="/manual/vote-note.php?id=59222&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59222" title="54% like this...">
    1
    </div>
  </div>
  <a href="#59222" class="name">
  <strong class="user"><em>pisu at estmail dot hu</em></strong></a><a class="genanchor" href="#59222"> &para;</a><div class="date" title="2005-11-29 01:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59222">
<div class="phpcode"><code><span class="html">chess board<br /><span class="default">&lt;?php<br /><br />$kep </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">,</span><span class="default">400</span><span class="keyword">);<br /></span><span class="default">$fekete </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$kep</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$feher </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$kep</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="comment">//imagefill($kep,50,50,$fekete);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$kep</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,</span><span class="default">$feher</span><span class="keyword">);<br /><br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">8</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)  {<br />  </span><span class="default">$k </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">*</span><span class="default">50</span><span class="keyword">;<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$kep</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$k</span><span class="keyword">,</span><span class="default">400</span><span class="keyword">,</span><span class="default">$k</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$kep</span><span class="keyword">,</span><span class="default">$k</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$k</span><span class="keyword">,</span><span class="default">400</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);<br />  }<br /><br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">8</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)  {<br />  for (</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">8</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">++)  {<br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">*</span><span class="default">50 </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">;<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$j</span><span class="keyword">*</span><span class="default">50 </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">;<br />    if (  ( (</span><span class="default">$i </span><span class="keyword">% </span><span class="default">2</span><span class="keyword">) + (</span><span class="default">$j </span><span class="keyword">% </span><span class="default">2</span><span class="keyword">) )  % </span><span class="default">2 </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">)  {<br />          </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$kep</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);<br />          }<br /><br />    }<br />  }<br /><br /></span><span class="comment">// imagecolortransparent($kek,$piros);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'content-type : image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$kep</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81873">  <div class="votes">
    <div id="Vu81873">
    <a href="/manual/vote-note.php?id=81873&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81873">
    <a href="/manual/vote-note.php?id=81873&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81873" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81873" class="name">
  <strong class="user"><em>Cypog</em></strong></a><a class="genanchor" href="#81873"> &para;</a><div class="date" title="2008-03-17 07:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81873">
<div class="phpcode"><code><span class="html">imagefill can't deal with alpha colors, use imagefilledrectangle instead.<br /><br /><span class="default">&lt;?php<br /><br />    header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"img/button.png"</span><span class="keyword">);<br />    if (empty(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]))<br />        {</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] = </span><span class="default">10</span><span class="keyword">;}<br />    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]);<br />    </span><span class="default">imagefillalpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br />    function </span><span class="default">ImageFillAlpha</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">)<br />    {<br />        </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">), </span><span class="default">$color</span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69865">  <div class="votes">
    <div id="Vu69865">
    <a href="/manual/vote-note.php?id=69865&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69865">
    <a href="/manual/vote-note.php?id=69865&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69865" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69865" class="name">
  <strong class="user"><em>razonklnbd at yahoo dot com</em></strong></a><a class="genanchor" href="#69865"> &para;</a><div class="date" title="2006-09-24 03:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69865">
<div class="phpcode"><code><span class="html">I spend more then two hour to find a function that can fill a pattern or file as background instead of color. but i can't find. so i develop the following function. i though this function will save time who need it...<br /><br />Function will get four parameter<br />1. Main Image Identifier<br />2. Pattern Image Identifier<br />3. Final Image Width<br />4. Final Image Height<br /><br />If you set final image width or height is less then main image width or height then you may get wrong result<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">fill_with_patternfile</span><span class="keyword">(</span><span class="default">$p_main_im</span><span class="keyword">, </span><span class="default">$p_patternfile_im</span><span class="keyword">, </span><span class="default">$p_width</span><span class="keyword">, </span><span class="default">$p_height</span><span class="keyword">){<br />    </span><span class="default">$pimiX</span><span class="keyword">=</span><span class="default">$p_patternfile_im</span><span class="keyword">;<br />    </span><span class="default">$pw</span><span class="keyword">=</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$pimiX</span><span class="keyword">);<br />    </span><span class="default">$ph</span><span class="keyword">=</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$pimiX</span><span class="keyword">);<br />    </span><span class="default">$targetImageIdentifier</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$p_width</span><span class="keyword">,</span><span class="default">$p_height</span><span class="keyword">);<br />    if(</span><span class="default">$pw</span><span class="keyword">&lt;</span><span class="default">$p_width </span><span class="keyword">&amp;&amp; </span><span class="default">$ph</span><span class="keyword">&lt;</span><span class="default">$p_height</span><span class="keyword">){<br />        for(</span><span class="default">$pX</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$pX</span><span class="keyword">&lt;</span><span class="default">$p_width</span><span class="keyword">;</span><span class="default">$pX</span><span class="keyword">+=</span><span class="default">$pw</span><span class="keyword">){<br />            for(</span><span class="default">$pY</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$pY</span><span class="keyword">&lt;</span><span class="default">$p_height</span><span class="keyword">;</span><span class="default">$pY</span><span class="keyword">+=</span><span class="default">$ph</span><span class="keyword">){<br />                </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$targetImageIdentifier</span><span class="keyword">,</span><span class="default">$pimiX</span><span class="keyword">,</span><span class="default">$pX</span><span class="keyword">,</span><span class="default">$pY</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$pw</span><span class="keyword">,</span><span class="default">$ph</span><span class="keyword">);<br />            }<br />        }<br />    }else </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$targetImageIdentifier</span><span class="keyword">,</span><span class="default">$pimiX</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$pw</span><span class="keyword">,</span><span class="default">$ph</span><span class="keyword">);<br />    </span><span class="default">$w</span><span class="keyword">=</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$p_main_im</span><span class="keyword">);<br />    </span><span class="default">$h</span><span class="keyword">=</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$p_main_im</span><span class="keyword">);<br />    </span><span class="default">$nX</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    if(</span><span class="default">$w</span><span class="keyword">&lt;</span><span class="default">$p_width</span><span class="keyword">) </span><span class="default">$nX</span><span class="keyword">=</span><span class="default">intval</span><span class="keyword">((</span><span class="default">$p_width</span><span class="keyword">-</span><span class="default">$w</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">$nY</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    if(</span><span class="default">$h</span><span class="keyword">&lt;</span><span class="default">$p_height</span><span class="keyword">) </span><span class="default">$nY</span><span class="keyword">=</span><span class="default">intval</span><span class="keyword">((</span><span class="default">$p_height</span><span class="keyword">-</span><span class="default">$h</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$targetImageIdentifier</span><span class="keyword">,</span><span class="default">$p_main_im</span><span class="keyword">,</span><span class="default">$nX</span><span class="keyword">,</span><span class="default">$nY</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">);<br />    return </span><span class="default">$targetImageIdentifier</span><span class="keyword">;<br />}<br /></span><span class="comment">//    If you want to use a gif or png file as<br />//    pattern file you need to change function below :)<br /></span><span class="default">$pattern_im</span><span class="keyword">=</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">'logo.jpg'</span><span class="keyword">);<br /></span><span class="comment">//    If you want to use a gif or png file as<br />//    main file you need to change function below :)<br /></span><span class="default">$main_im</span><span class="keyword">=</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">'r2.jpg'</span><span class="keyword">);<br /></span><span class="comment">//    call the function width 500 and height 500<br />//    if your width and height is less then main images<br />//    width and height then you can't understand any change!<br /></span><span class="default">$final</span><span class="keyword">=</span><span class="default">fill_with_patternfile</span><span class="keyword">(</span><span class="default">$main_im</span><span class="keyword">, </span><span class="default">$pattern_im</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">);<br /></span><span class="comment">//    view the image and destroy all instance<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$final</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$final</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$main_im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$pattern_im</span><span class="keyword">);<br />exit();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59229">  <div class="votes">
    <div id="Vu59229">
    <a href="/manual/vote-note.php?id=59229&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59229">
    <a href="/manual/vote-note.php?id=59229&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59229" title="50% like this...">
    0
    </div>
  </div>
  <a href="#59229" class="name">
  <strong class="user"><em>gelak</em></strong></a><a class="genanchor" href="#59229"> &para;</a><div class="date" title="2005-11-29 11:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59229">
<div class="phpcode"><code><span class="html">//A smiley face ;]
<br />
<br /><span class="default">&lt;?php
<br />
<br />header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);
<br />
<br /></span><span class="default">$smile</span><span class="keyword">=</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">,</span><span class="default">400</span><span class="keyword">);
<br /></span><span class="default">$kek</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);
<br /></span><span class="default">$feher</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);
<br /></span><span class="default">$sarga</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">$fekete</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$kek</span><span class="keyword">);
<br />
<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">300</span><span class="keyword">,</span><span class="default">300</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">360</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">225</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">150</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">180</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">225</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">123</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">180</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">150</span><span class="keyword">,</span><span class="default">150</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">360</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">250</span><span class="keyword">,</span><span class="default">150</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">360</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">$sarga</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">,</span><span class="default">290</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">155</span><span class="keyword">,</span><span class="default">155</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">155</span><span class="keyword">,</span><span class="default">$fekete</span><span class="keyword">);
<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$smile</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85474">  <div class="votes">
    <div id="Vu85474">
    <a href="/manual/vote-note.php?id=85474&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85474">
    <a href="/manual/vote-note.php?id=85474&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85474" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#85474" class="name">
  <strong class="user"><em>dunhamzzz [A] gmail</em></strong></a><a class="genanchor" href="#85474"> &para;</a><div class="date" title="2008-09-01 08:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85474">
<div class="phpcode"><code><span class="html">I feel its worth pointing out that you cannot fill a transparent colour that you have assigned with imagecolorallocatealpha, the colour will fill, but without its transparency,<br /><br />I find the easiest method around this is to just fill a rectangle using imagefilledrectangle() to draw a fill instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="3109">  <div class="votes">
    <div id="Vu3109">
    <a href="/manual/vote-note.php?id=3109&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd3109">
    <a href="/manual/vote-note.php?id=3109&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V3109" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#3109" class="name">
  <strong class="user"><em>aqmprod at iname dot com</em></strong></a><a class="genanchor" href="#3109"> &para;</a><div class="date" title="2000-01-09 05:08"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom3109">
<div class="phpcode"><code><span class="html">This function does not seem to work with images already been transparent. If you fill at x=0, y=0, and there are still transparent parts that you did
<br />not reach with your fill, they change to a different color.
<br />
<br />The ImageColorSet function seems to be the solution, but i can't work with transparancy.</span></code></div>
  </div>
 </div>
  <div class="note" id="32712">  <div class="votes">
    <div id="Vu32712">
    <a href="/manual/vote-note.php?id=32712&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32712">
    <a href="/manual/vote-note.php?id=32712&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32712" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#32712" class="name">
  <strong class="user"><em>norxh</em></strong></a><a class="genanchor" href="#32712"> &para;</a><div class="date" title="2003-06-04 08:36"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32712">
<div class="phpcode"><code><span class="html">For new images, you must allocate a color before this function will work.</span></code></div>
  </div>
 </div>
  <div class="note" id="121562">  <div class="votes">
    <div id="Vu121562">
    <a href="/manual/vote-note.php?id=121562&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121562">
    <a href="/manual/vote-note.php?id=121562&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121562" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#121562" class="name">
  <strong class="user"><em>oleh at it dot wihola dot com</em></strong></a><a class="genanchor" href="#121562"> &para;</a><div class="date" title="2017-08-24 08:45"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121562">
<div class="phpcode"><code><span class="html">is there any point to use $x and $y coordinates? They doesn't affect an output in any way. I can no make rectangular half filled with color. These params are useless.</span></code></div>
  </div>
 </div>
  <div class="note" id="67593">  <div class="votes">
    <div id="Vu67593">
    <a href="/manual/vote-note.php?id=67593&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67593">
    <a href="/manual/vote-note.php?id=67593&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67593" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#67593" class="name">
  <strong class="user"><em>jonathan dot aquino at gmail dot com</em></strong></a><a class="genanchor" href="#67593"> &para;</a><div class="date" title="2006-06-08 03:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67593">
<div class="phpcode"><code><span class="html">Use imageSaveAlpha($image, true); to preserve transparency.</span></code></div>
  </div>
 </div>
  <div class="note" id="73770">  <div class="votes">
    <div id="Vu73770">
    <a href="/manual/vote-note.php?id=73770&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73770">
    <a href="/manual/vote-note.php?id=73770&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73770" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#73770" class="name">
  <strong class="user"><em>info at educar dot pro dot br</em></strong></a><a class="genanchor" href="#73770"> &para;</a><div class="date" title="2007-03-09 07:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73770">
<div class="phpcode"><code><span class="html">Example 1<br />The filled region will be external to a demarcated region, if the initial coordinates will be outside of this region.<br /><br /><span class="default">&lt;?php<br />$src621 </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); <br /></span><span class="default">$clr_1_621 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$src621</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$clr_2_621 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$src621</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">);<br /></span><span class="default">$clr_4_621 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$src621</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">55</span><span class="keyword">);<br /></span><span class="default">imagerectangle</span><span class="keyword">(</span><span class="default">$src621</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">$clr_4_621</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$src621</span><span class="keyword">, </span><span class="default">110</span><span class="keyword">, </span><span class="default">110</span><span class="keyword">, </span><span class="default">$clr_2_621</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng </span><span class="keyword">(</span><span class="default">$src621</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$src621</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Example 2<br />The filled region will be internal to a demarcated region, if the initial coordinates will be inside of this region. <br /><span class="default">&lt;?php<br />$src622 </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); <br /></span><span class="default">$clr_1_622 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$src622</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$clr_2_622 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$src622</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">);<br /></span><span class="default">$clr_4_622 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$src622</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">55</span><span class="keyword">);<br /></span><span class="default">imagerectangle</span><span class="keyword">(</span><span class="default">$src622</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">$clr_4_622</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$src622</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">$clr_2_622</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng </span><span class="keyword">(</span><span class="default">$src622</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$src622</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />See another examples at:<br /><a href="http://www.educar.pro.br/a/gdlib/index.php?pn=50&amp;tr=97" rel="nofollow" target="_blank">http://www.educar.pro.br/a/gdlib/index.php?pn=50&amp;tr=97</a></span></code></div>
  </div>
 </div>
  <div class="note" id="55280">  <div class="votes">
    <div id="Vu55280">
    <a href="/manual/vote-note.php?id=55280&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55280">
    <a href="/manual/vote-note.php?id=55280&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55280" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#55280" class="name">
  <strong class="user"><em>colin at galaxyinteractive dot net</em></strong></a><a class="genanchor" href="#55280"> &para;</a><div class="date" title="2005-07-28 08:26"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55280">
<div class="phpcode"><code><span class="html">Didn't see this documented, although it's outlined in imagefilledrectangle, it wasn't quite so obvious to me at first<br /><br />imageSetTile($image,$imageBack);<br />imagefill($image,0,0,IMG_COLOR_TILED);<br /><br />Will fill an image with a texture (this is great as I'm building a logo/template creator)</span></code></div>
  </div>
 </div>
  <div class="note" id="33518">  <div class="votes">
    <div id="Vu33518">
    <a href="/manual/vote-note.php?id=33518&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33518">
    <a href="/manual/vote-note.php?id=33518&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33518" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#33518" class="name">
  <strong class="user"><em>Igor Garcia</em></strong></a><a class="genanchor" href="#33518"> &para;</a><div class="date" title="2003-06-28 03:18"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33518">
<div class="phpcode"><code><span class="html">This function, cannot deal with transparencies. <br />So you need to use imagecolorallocate instead of imagecolorallocatealpha.<br />Thus, be careful with color variables that allready set with imageallocatecoloralpha because this can slow-down or hang-up your system.</span></code></div>
  </div>
 </div>
  <div class="note" id="29283">  <div class="votes">
    <div id="Vu29283">
    <a href="/manual/vote-note.php?id=29283&amp;page=function.imagefill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29283">
    <a href="/manual/vote-note.php?id=29283&amp;page=function.imagefill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29283" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#29283" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#29283"> &para;</a><div class="date" title="2003-02-08 05:49"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29283">
<div class="phpcode"><code><span class="html">Actually, it can handle pre-transparent images. To remove it you need to do something like:<br />   imagecolortransparent($img, 0);<br />to null out the previous transparency colors. ;)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagefill&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefill.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
