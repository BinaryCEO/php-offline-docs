<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagegif - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagegif.php">
 <link rel="shorturl" href="https://www.php.net/imagegif">
 <link rel="alternate" href="https://www.php.net/imagegif" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagegetinterpolation.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagegrabscreen.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagegif.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagegif.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagegif.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagegif.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagegif.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagegif.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagegif.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagegif.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagegif.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagegif.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagegif.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Output image to browser or file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagegif - Manual" />
<meta name="twitter:description" content="Output image to browser or file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagegif - Manual" />
<meta itemprop="description" content="Output image to browser or file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Output image to browser or file" />

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
        <a href="function.imagegrabscreen.php">
          imagegrabscreen &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagegetinterpolation.php">
          &laquo; imagegetinterpolation        </a>
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
            <option value='en/function.imagegif.php' selected="selected">English</option>
            <option value='de/function.imagegif.php'>German</option>
            <option value='es/function.imagegif.php'>Spanish</option>
            <option value='fr/function.imagegif.php'>French</option>
            <option value='it/function.imagegif.php'>Italian</option>
            <option value='ja/function.imagegif.php'>Japanese</option>
            <option value='pt_BR/function.imagegif.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagegif.php'>Russian</option>
            <option value='tr/function.imagegif.php'>Turkish</option>
            <option value='uk/function.imagegif.php'>Ukrainian</option>
            <option value='zh/function.imagegif.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagegif" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagegif</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagegif</span> &mdash; <span class="dc-title">Output image to browser or file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagegif-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagegif</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$file</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagegif()</strong></span> creates the <abbr title="Graphic Interchange Format">GIF</abbr>
   file in <code class="parameter">file</code> from the image <code class="parameter">image</code>. The
   <code class="parameter">image</code> argument is the return from the
   <span class="function"><a href="function.imagecreate.php" class="function">imagecreate()</a></span> or <code class="literal">imagecreatefrom*</code>
   function.
  </p>
  <p class="para">
   The image format will be <abbr>GIF87a</abbr> unless the
   image has been made transparent with
   <span class="function"><a href="function.imagecolortransparent.php" class="function">imagecolortransparent()</a></span>, in which case the
   image format will be <abbr>GIF89a</abbr>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagegif-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">file</code></dt>
     <dd>
      <p class="para">The path or an open stream resource (which is automatically closed after this function returns) to save the file to. If not set or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the raw image stream will be output directly.</p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagegif-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="caution"><strong class="caution">Caution</strong><p class="simpara">However, if libgd fails to output the image, this function returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagegif-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagegif-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2909">
    <p><strong>Example #1 Outputting an image using <span class="function"><strong>imagegif()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a new image instance<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Make the background white<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">99</span><span style="color: #007700">, </span><span style="color: #0000BB">99</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFFFFFF</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw a text string on the image<br /></span><span style="color: #0000BB">imagestring</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">40</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #DD0000">'GD Library'</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFFBA00</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output the image to browser<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/gif'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-2910">
    <p><strong>Example #2 Converting a PNG image to GIF using <span class="function"><strong>imagegif()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Load the PNG<br /></span><span style="color: #0000BB">$png </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'./php.png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Save the image as a GIF<br /></span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$png</span><span style="color: #007700">, </span><span style="color: #DD0000">'./php.gif'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// We're done<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Converted PNG image to GIF with success!'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagegif-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The following code snippet allows you to write more
    portable PHP applications by auto-detecting the
    type of GD support which is available. Replace
    the sequence <code class="literal">header (&quot;Content-Type: image/gif&quot;);
    imagegif ($im);</code> by the more flexible sequence:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a new image instance<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Do some image operations here<br /><br />// Handle output<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagegif'</span><span style="color: #007700">))<br />{<br />    </span><span style="color: #FF8000">// For GIF<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/gif'</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br />}<br />elseif(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagejpeg'</span><span style="color: #007700">))<br />{<br />    </span><span style="color: #FF8000">// For JPEG<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/jpeg'</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br />}<br />elseif(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagepng'</span><span style="color: #007700">))<br />{<br />    </span><span style="color: #FF8000">// For PNG<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br />}<br />elseif(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagewbmp'</span><span style="color: #007700">))<br />{<br />    </span><span style="color: #FF8000">// For WBMP<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/vnd.wap.wbmp'</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">imagewbmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br />}<br />else<br />{<br />    die(</span><span style="color: #DD0000">'No image support in this PHP server'</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    You can use the function
    <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span> for checking
    the presence of the various supported image formats:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">imagetypes</span><span style="color: #007700">() &amp; </span><span style="color: #0000BB">IMG_GIF</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/gif'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br />}<br />elseif(</span><span style="color: #0000BB">imagetypes</span><span style="color: #007700">() &amp; </span><span style="color: #0000BB">IMG_JPG</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #FF8000">/* ... etc. */<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagegif-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagepng.php" class="function" rel="rdfs-seeAlso">imagepng()</a> - Output a PNG image to either the browser or a file</span></li>
   <li><span class="function"><a href="function.imagewbmp.php" class="function" rel="rdfs-seeAlso">imagewbmp()</a> - Output image to browser or file</span></li>
   <li><span class="function"><a href="function.imagejpeg.php" class="function" rel="rdfs-seeAlso">imagejpeg()</a> - Output image to browser or file</span></li>
   <li><span class="function"><a href="function.imagetypes.php" class="function" rel="rdfs-seeAlso">imagetypes()</a> - Return the image types supported by this PHP build</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagegif.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagegif%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagegif&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagegif.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="20425">  <div class="votes">
    <div id="Vu20425">
    <a href="/manual/vote-note.php?id=20425&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20425">
    <a href="/manual/vote-note.php?id=20425&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20425" title="100% like this...">
    4
    </div>
  </div>
  <a href="#20425" class="name">
  <strong class="user"><em>polone at townnews dot com</em></strong></a><a class="genanchor" href="#20425"> &para;</a><div class="date" title="2002-04-03 11:40"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20425">
<div class="phpcode"><code><span class="html">read also RFC2557: <a href="http://www.ietf.org/rfc/rfc2557.txt" rel="nofollow" target="_blank">http://www.ietf.org/rfc/rfc2557.txt</a>
<br />For handling inline images in email.
<br />----
<br />
<br />
<br />I've been playing around with the "data" URL scheme as proposed by RFC 2397 which states how to perform inline, bas64 encoded images. A number of browsers support this format from some of my tests and would be an interesting way of removing overhead from multiple HTTP connections. Basically, the IMG tag would be:
<br />
<br />&lt;IMG SRC="/-/data:image/gif;base64,R0lGODdhMAAwAPAAAAAAAP///ywAAAAAMAAw AAAC8IyPqcvt3wCcDkiLc7C0qwyGHhSWpjQu5yqmCYsapyuvUUlvONmOZtfzgFz ByTB10QgxOR0TqBQejhRNzOfkVJ+5YiUqrXF5Y5lKh/DeuNcP5yLWGsEbtLiOSp a/TPg7JpJHxyendzWTBfX0cxOnKPjgBzi4diinWGdkF8kjdfnycQZXZeYGejmJl ZeGl9i2icVqaNVailT6F5iJ90m6mvuTS4OK05M0vDk0Q4XUtwvKOzrcd3iq9uis F81M1OIcR7lEewwcLp7tuNNkM3uNna3F2JQFo97Vriy/Xl4/f1cf5VWzXyym7PH hhx4dbgYKAAA7" ALT="Larry"&gt;
<br />
<br />Something like that. Note also that I start the URI with "/-/" before the rest of the data scheme spec. If you don't start it with this, it won't work in a lot of the different browsers I tested (such as IE). Note this is useful for very small images only (as most browsers appear to have a limitation on the size of HTML element data of 1024). Browsers where this syntax worked that I tested are the following:
<br />
<br />IE 6.x (windows)
<br />Mozilla 0.97+ (linux)
<br />Opera 5, 6 (windows)
<br />Netscape 4.7+ (mac, windows)
<br />IE 5 (macintosh)
<br />
<br />This should work for other image types as well, such as PNG. JPEG files aren't really suggested (usually, these files are too large). BTW - there is no advantage to this method if the image will appear more than ONCE in the page because you will be transmitting the same data multiple times as opposed to just once (most browsers realize that already downloaded data that has multiple references only requires one HTTP call).
<br />
<br />Consider using this method if you want to make a single PHP program that outputs both text and an image AND you want to make only on HTTP call. Cheers.</span></code></div>
  </div>
 </div>
  <div class="note" id="107165">  <div class="votes">
    <div id="Vu107165">
    <a href="/manual/vote-note.php?id=107165&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107165">
    <a href="/manual/vote-note.php?id=107165&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107165" title="58% like this...">
    2
    </div>
  </div>
  <a href="#107165" class="name">
  <strong class="user"><em>mail at ignore dot area dot nospam dot joshho dot com</em></strong></a><a class="genanchor" href="#107165"> &para;</a><div class="date" title="2012-01-11 10:37"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107165">
<div class="phpcode"><code><span class="html">apparently GD does not support animated GIFs.
<br />
<br />instead, we're stuck with the old fashioned way:
<br /><span class="default">&lt;?php
<br />header</span><span class="keyword">(</span><span class="string">'Content-Type: image/gif'</span><span class="keyword">);
<br />echo </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$destPathImage</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83538">  <div class="votes">
    <div id="Vu83538">
    <a href="/manual/vote-note.php?id=83538&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83538">
    <a href="/manual/vote-note.php?id=83538&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83538" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83538" class="name">
  <strong class="user"><em>stefan at colulus dot com</em></strong></a><a class="genanchor" href="#83538"> &para;</a><div class="date" title="2008-05-30 11:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83538">
<div class="phpcode"><code><span class="html">I worked out a script that allows the transfer of alphanumeric data to be placed on an image. The HTML feature is img src and the php feature is imagettftext. This simple code will increment from 1 to 3 on images.<br /><br />code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//ImageCall.php -- This script will call a script to produce the image.<br /></span><span class="keyword">for(</span><span class="default">$next </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;</span><span class="default">$next </span><span class="keyword">&lt; </span><span class="default">4</span><span class="keyword">; </span><span class="default">$next</span><span class="keyword">++){<br />print </span><span class="string">"Image </span><span class="default">$next</span><span class="string">:&lt;br&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;img src = 'Image.php?\$text=</span><span class="default">$next</span><span class="string">'&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">//Image.php -- This script creates a square image and places the text on it.<br /><br />// image size and color<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">77</span><span class="keyword">,</span><span class="default">77</span><span class="keyword">);<br /></span><span class="default">$color1 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x66</span><span class="keyword">,</span><span class="default">0xCC</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color2 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x33</span><span class="keyword">,</span><span class="default">0x66</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color3 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">,</span><span class="default">0x99</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color4 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">);<br /><br /></span><span class="comment">// image creation<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">$color1</span><span class="keyword">);<br /></span><span class="default">ImageFilledpolygon</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, array (</span><span class="default">76</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">),</span><span class="default">3</span><span class="keyword">,</span><span class="default">$color2</span><span class="keyword">);<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">72</span><span class="keyword">,</span><span class="default">72</span><span class="keyword">,</span><span class="default">$color3</span><span class="keyword">);<br /><br /></span><span class="comment">// determine numeric center of image<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">ImageTTFBBox</span><span class="keyword">(</span><span class="default">45</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="string">'impact'</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'$text'</span><span class="keyword">]);<br /></span><span class="default">$X </span><span class="keyword">= (</span><span class="default">77 </span><span class="keyword">- (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]- </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])))/</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$Y </span><span class="keyword">= ((</span><span class="default">77 </span><span class="keyword">- (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$size</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">])))/</span><span class="default">2 </span><span class="keyword">+ (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$size</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">])));<br /><br /></span><span class="comment">//places numeric information on image<br /></span><span class="default">ImageTTFText</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,(</span><span class="default">$X</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">),</span><span class="default">$Y</span><span class="keyword">,</span><span class="default">$color4</span><span class="keyword">,</span><span class="string">'impact'</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'$text'</span><span class="keyword">]);<br /><br /></span><span class="comment">//returns completed image to calling script<br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);<br /></span><span class="default">Imagegif</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="67933">  <div class="votes">
    <div id="Vu67933">
    <a href="/manual/vote-note.php?id=67933&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67933">
    <a href="/manual/vote-note.php?id=67933&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67933" title="50% like this...">
    0
    </div>
  </div>
  <a href="#67933" class="name">
  <strong class="user"><em>rokfaith at gmail dot com</em></strong></a><a class="genanchor" href="#67933"> &para;</a><div class="date" title="2006-07-06 03:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67933">
<div class="phpcode"><code><span class="html">to create an animated gif with gifsicle, but without storing temporary images on disk:
<br />
<br /><span class="default">&lt;?php
<br />$cmd </span><span class="keyword">= </span><span class="string">'gifsicle --loop -O1 --multifile --delay 25 - &gt; '</span><span class="keyword">.</span><span class="default">$outfile</span><span class="keyword">;
<br /></span><span class="default">$desc </span><span class="keyword">= array(</span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),</span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),</span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">));
<br /></span><span class="default">$proc </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$desc</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);
<br />if (!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$proc</span><span class="keyword">)) {
<br />  die(</span><span class="string">'Unable to start gifsicle'</span><span class="keyword">);
<br />}
<br />for (</span><span class="default">$frame</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$frame</span><span class="keyword">&lt;</span><span class="default">$total_frames</span><span class="keyword">; </span><span class="default">$frame</span><span class="keyword">++) {
<br />  </span><span class="default">$image </span><span class="keyword">= </span><span class="default">RenderFrame</span><span class="keyword">(</span><span class="default">$frame</span><span class="keyword">);
<br />  </span><span class="default">ob_start</span><span class="keyword">();
<br />  </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />  </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">ob_get_contents</span><span class="keyword">());
<br />  </span><span class="default">ob_end_clean</span><span class="keyword">();
<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />}
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br /></span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$proc</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />just define $outfile and RenderFrame(), and that's it.</span></code></div>
  </div>
 </div>
  <div class="note" id="37671">  <div class="votes">
    <div id="Vu37671">
    <a href="/manual/vote-note.php?id=37671&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37671">
    <a href="/manual/vote-note.php?id=37671&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37671" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#37671" class="name">
  <strong class="user"><em>jemore at nospam dot m6net dot fr</em></strong></a><a class="genanchor" href="#37671"> &para;</a><div class="date" title="2003-11-22 10:24"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37671">
<div class="phpcode"><code><span class="html">If you open a truecolor image (with imageCreateFromPng for example), and you save it directly with imagegif, you can have a 500 internal server error. You must use imageTrueColorToPalette to reduce to 256 colors before saving the image in GIF format.</span></code></div>
  </div>
 </div>
  <div class="note" id="113155">  <div class="votes">
    <div id="Vu113155">
    <a href="/manual/vote-note.php?id=113155&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113155">
    <a href="/manual/vote-note.php?id=113155&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113155" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#113155" class="name">
  <strong class="user"><em>coldume</em></strong></a><a class="genanchor" href="#113155"> &para;</a><div class="date" title="2013-09-06 07:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113155">
<div class="phpcode"><code><span class="html">To keep GIF animation, you can try the class writing based on GD <br />GD Enhancer <a href="http://www.gdenhancer.com/" rel="nofollow" target="_blank">http://www.gdenhancer.com/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="54100">  <div class="votes">
    <div id="Vu54100">
    <a href="/manual/vote-note.php?id=54100&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54100">
    <a href="/manual/vote-note.php?id=54100&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54100" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#54100" class="name">
  <strong class="user"><em>Lauri Harpf</em></strong></a><a class="genanchor" href="#54100"> &para;</a><div class="date" title="2005-06-23 09:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54100">
<div class="phpcode"><code><span class="html">Using &lt;IMG SRC="image.php"&gt; to dynamically generate images is a bit problematic regarding cache. Unless caching is activated, IE seems to get confused about the type of the image when attempting to save it. A .GIF created in the above way causes the browser to suggest saving the image with .BMP, not .GIF.<br /><br />A solution is to activate cache with session_cache_limiter('public'); in "image.php", after which IE will correctly save as .GIF. If you do not want the cache to block any changes in the dynamic image, make sure that the SRC keeps changing with every reload. Something like "image.php/" . mt_rand(1,100000) . ".gif" seems to work well.<br /><br />Might be trivial to some, but I spent a couple of hours figuring out why IE always wants to save my dynamic .GIF's as .BMP's.</span></code></div>
  </div>
 </div>
  <div class="note" id="11603">  <div class="votes">
    <div id="Vu11603">
    <a href="/manual/vote-note.php?id=11603&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11603">
    <a href="/manual/vote-note.php?id=11603&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11603" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#11603" class="name">
  <strong class="user"><em>kremlin at home dot com</em></strong></a><a class="genanchor" href="#11603"> &para;</a><div class="date" title="2001-02-26 09:45"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11603">
<div class="phpcode"><code><span class="html">Animated GIFs as well as transparent GIFs qualify as GIF89a's and you should use ImageColorTransparent().</span></code></div>
  </div>
 </div>
  <div class="note" id="99102">  <div class="votes">
    <div id="Vu99102">
    <a href="/manual/vote-note.php?id=99102&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99102">
    <a href="/manual/vote-note.php?id=99102&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99102" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#99102" class="name">
  <strong class="user"><em>grant k.</em></strong></a><a class="genanchor" href="#99102"> &para;</a><div class="date" title="2010-07-27 10:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99102">
<div class="phpcode"><code><span class="html">It should be noted that if you only want to "save" the file, and not display it to the browser, you should catch the imagegif into a variable.
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//Only saves the file to a destination, no display
<br />
<br /></span><span class="default">$image_value </span><span class="keyword">= </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$save_file_to_path</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Saves file and attempts to display it, but will throw an error message
<br />
<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$save_file_to_path</span><span class="keyword">);
<br />    
<br /></span><span class="comment">//Only displays, never saves as a file
<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Note: In [my] third example, for displaying only, it is probably good to use the "header('Content-type: image/gif'); declaration, but it's not needed in the first example for saving as a .gif file.
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54419">  <div class="votes">
    <div id="Vu54419">
    <a href="/manual/vote-note.php?id=54419&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54419">
    <a href="/manual/vote-note.php?id=54419&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54419" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#54419" class="name">
  <strong class="user"><em>Leigh Purdie</em></strong></a><a class="genanchor" href="#54419"> &para;</a><div class="date" title="2005-07-03 05:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54419">
<div class="phpcode"><code><span class="html">Simple animated-gif hack (requires ImageMagick):<br /><br />&lt;html&gt;&lt;body&gt;<br /><span class="default">&lt;?php<br />        $icount</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        for(</span><span class="default">$count</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$count</span><span class="keyword">&lt;</span><span class="default">40</span><span class="keyword">;</span><span class="default">$count</span><span class="keyword">++) {<br />                </span><span class="default">$im</span><span class="keyword">=</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">);<br />                </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />                </span><span class="default">$white</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />                </span><span class="default">imagerectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">-</span><span class="default">$count</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">-</span><span class="default">$count</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br />                </span><span class="default">$icount</span><span class="keyword">++;<br />                </span><span class="default">$tcount</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%04d"</span><span class="keyword">,</span><span class="default">$icount</span><span class="keyword">);<br />                </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="string">"/tmp/test-</span><span class="default">$tcount</span><span class="string">.gif"</span><span class="keyword">);<br />                </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />        }<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"/usr/bin/convert -delay 2 -loop 10 /tmp/test*.gif /var/www/html/Tests/Test-Anim.gif"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>&lt;img src="/Tests/Test-Anim.gif"&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="5430">  <div class="votes">
    <div id="Vu5430">
    <a href="/manual/vote-note.php?id=5430&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5430">
    <a href="/manual/vote-note.php?id=5430&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5430" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#5430" class="name">
  <strong class="user"><em>david at hooshla dot com</em></strong></a><a class="genanchor" href="#5430"> &para;</a><div class="date" title="2000-04-28 07:45"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5430">
<div class="phpcode"><code><span class="html">This is how you load and display an image file:
<br />
<br /><span class="default">&lt;?php
<br />Header</span><span class="keyword">(</span><span class="string">"Content-Type: image/gif"</span><span class="keyword">);
<br /></span><span class="default">$fn</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"./imagefile.gif"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br /></span><span class="default">fpassthru</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note that there are no new-lines in the content type header.</span></code></div>
  </div>
 </div>
  <div class="note" id="79117">  <div class="votes">
    <div id="Vu79117">
    <a href="/manual/vote-note.php?id=79117&amp;page=function.imagegif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79117">
    <a href="/manual/vote-note.php?id=79117&amp;page=function.imagegif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79117" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#79117" class="name">
  <strong class="user"><em>alan hogan dot com slash contact</em></strong></a><a class="genanchor" href="#79117"> &para;</a><div class="date" title="2007-11-12 02:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79117">
<div class="phpcode"><code><span class="html">Note that you *can* save with a transparent color **and dither** using GD2.<br />For a useful example, see the png-to-gif function in my coment here:<br /><a href="http://www.php.net/manual/en/function.imagecolorat.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.imagecolorat.php</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagegif&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagegif.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
