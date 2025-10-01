<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecolorat - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecolorat.php">
 <link rel="shorturl" href="https://www.php.net/imagecolorat">
 <link rel="alternate" href="https://www.php.net/imagecolorat" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecolorallocatealpha.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecolorclosest.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecolorat.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecolorat.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecolorat.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecolorat.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecolorat.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecolorat.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecolorat.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecolorat.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecolorat.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecolorat.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecolorat.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the index of the color of a pixel" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecolorat - Manual" />
<meta name="twitter:description" content="Get the index of the color of a pixel" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecolorat - Manual" />
<meta itemprop="description" content="Get the index of the color of a pixel" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the index of the color of a pixel" />

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
        <a href="function.imagecolorclosest.php">
          imagecolorclosest &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecolorallocatealpha.php">
          &laquo; imagecolorallocatealpha        </a>
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
            <option value='en/function.imagecolorat.php' selected="selected">English</option>
            <option value='de/function.imagecolorat.php'>German</option>
            <option value='es/function.imagecolorat.php'>Spanish</option>
            <option value='fr/function.imagecolorat.php'>French</option>
            <option value='it/function.imagecolorat.php'>Italian</option>
            <option value='ja/function.imagecolorat.php'>Japanese</option>
            <option value='pt_BR/function.imagecolorat.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecolorat.php'>Russian</option>
            <option value='tr/function.imagecolorat.php'>Turkish</option>
            <option value='uk/function.imagecolorat.php'>Ukrainian</option>
            <option value='zh/function.imagecolorat.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecolorat" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecolorat</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecolorat</span> &mdash; <span class="dc-title">Get the index of the color of a pixel</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecolorat-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecolorat</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns the index of the color of the pixel at the
   specified location in the image specified by <code class="parameter">image</code>.
  </p>
  <p class="para">
   If the image is a
   truecolor image, this function returns the RGB value of that pixel as
   integer. Use bitshifting and masking to access the distinct red, green and blue
   component values:
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecolorat-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">x</code></dt>
     <dd>
      <p class="para">
       x-coordinate of the point.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y</code></dt>
     <dd>
      <p class="para">
       y-coordinate of the point.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecolorat-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the index of the color  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecolorat-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecolorat-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2840">
    <p><strong>Example #1 Access distinct RGB values</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">"php.png"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rgb </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">15</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$r </span><span style="color: #007700">= (</span><span style="color: #0000BB">$rgb </span><span style="color: #007700">&gt;&gt; </span><span style="color: #0000BB">16</span><span style="color: #007700">) &amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$g </span><span style="color: #007700">= (</span><span style="color: #0000BB">$rgb </span><span style="color: #007700">&gt;&gt; </span><span style="color: #0000BB">8</span><span style="color: #007700">) &amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$rgb </span><span style="color: #007700">&amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #0000BB">$g</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">int(119)
int(123)
int(180)</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-2841">
    <p><strong>Example #2 Human-readable RGB values using <span class="function"><a href="function.imagecolorsforindex.php" class="function">imagecolorsforindex()</a></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">"php.png"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rgb </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">15</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$colors </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$rgb</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$colors</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(4) {
  [&quot;red&quot;]=&gt;
  int(119)
  [&quot;green&quot;]=&gt;
  int(123)
  [&quot;blue&quot;]=&gt;
  int(180)
  [&quot;alpha&quot;]=&gt;
  int(127)
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagecolorat-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecolorset.php" class="function" rel="rdfs-seeAlso">imagecolorset()</a> - Set the color for the specified palette index</span></li>
   <li><span class="function"><a href="function.imagecolorsforindex.php" class="function" rel="rdfs-seeAlso">imagecolorsforindex()</a> - Get the colors for an index</span></li>
   <li><span class="function"><a href="function.imagesetpixel.php" class="function" rel="rdfs-seeAlso">imagesetpixel()</a> - Set a single pixel</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecolorat.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecolorat%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecolorat&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorat.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="70783">  <div class="votes">
    <div id="Vu70783">
    <a href="/manual/vote-note.php?id=70783&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70783">
    <a href="/manual/vote-note.php?id=70783&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70783" title="70% like this...">
    15
    </div>
  </div>
  <a href="#70783" class="name">
  <strong class="user"><em>Luciano Ropero</em></strong></a><a class="genanchor" href="#70783"> &para;</a><div class="date" title="2006-10-27 11:31"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70783">
<div class="phpcode"><code><span class="html">I made a function that calculates the average color of a given image resource and returns it in "#rrggbb" format (hex):<br /><br />function average($img) {<br />    $w = imagesx($img);<br />    $h = imagesy($img);<br />    $r = $g = $b = 0;<br />    for($y = 0; $y &lt; $h; $y++) {<br />        for($x = 0; $x &lt; $w; $x++) {<br />            $rgb = imagecolorat($img, $x, $y);<br />            $r += $rgb &gt;&gt; 16;<br />            $g += $rgb &gt;&gt; 8 &amp; 255;<br />            $b += $rgb &amp; 255;<br />        }<br />    }<br />    $pxls = $w * $h;<br />    $r = dechex(round($r / $pxls));<br />    $g = dechex(round($g / $pxls));<br />    $b = dechex(round($b / $pxls));<br />    if(strlen($r) &lt; 2) {<br />        $r = 0 . $r;<br />    }<br />    if(strlen($g) &lt; 2) {<br />        $g = 0 . $g;<br />    }<br />    if(strlen($b) &lt; 2) {<br />        $b = 0 . $b;<br />    }<br />    return "#" . $r . $g . $b;<br />}<br /><br />Although, I've noticed that you can also get a fairly good average color generating a 1px by 1px copy with imagecopyresampled (the pixel generated is colored with the average color).</span></code></div>
  </div>
 </div>
  <div class="note" id="79116">  <div class="votes">
    <div id="Vu79116">
    <a href="/manual/vote-note.php?id=79116&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79116">
    <a href="/manual/vote-note.php?id=79116&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79116" title="78% like this...">
    8
    </div>
  </div>
  <a href="#79116" class="name">
  <strong class="user"><em>alan hogan dot com slash contact</em></strong></a><a class="genanchor" href="#79116"> &para;</a><div class="date" title="2007-11-12 02:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79116">
<div class="phpcode"><code><span class="html">As creamdog noted before, the alpha channel IS available from this function! (The manual should probably be updated to include this!)<br /><br />$rgba = imagecolorat($im,$x,$y);<br />$alpha = ($rgba &amp; 0x7F000000) &gt;&gt; 24;<br /><br />$alpha will then contain the TRANSPARENCY (NOT OPACITY) level. So 127, the max, would be completely transparent, and 0 would be completely opaque.<br /><br />Using this information, it is possible to write a dithering png-to-gif function like the completely working simple one below:<br /><br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$pngRel</span><span class="keyword">);<br />        </span><span class="default">$transparentColor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0xfe</span><span class="keyword">, </span><span class="default">0x3</span><span class="keyword">, </span><span class="default">0xf4 </span><span class="keyword">);<br />        </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />        for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){<br />            for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {<br />                </span><span class="default">$alpha </span><span class="keyword">= (</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">) &amp; </span><span class="default">0x7F000000</span><span class="keyword">) &gt;&gt; </span><span class="default">24</span><span class="keyword">;<br />                </span><span class="comment">//DITHER!<br />                </span><span class="keyword">if (</span><span class="default">$alpha </span><span class="keyword">&gt; </span><span class="default">3 </span><span class="keyword">&amp;&amp; (<br />                        </span><span class="default">$alpha </span><span class="keyword">&gt;=</span><span class="default">127</span><span class="keyword">-</span><span class="default">3 </span><span class="keyword">|| <br />                        (</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">127</span><span class="keyword">))&gt;=(</span><span class="default">127</span><span class="keyword">-</span><span class="default">$alpha</span><span class="keyword">)<br />                    )){<br />                    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$transparentColor</span><span class="keyword">);<br />                }<br /><br />            }<br />        }<br />        </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$transparentColor</span><span class="keyword">);<br />        </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$gifRel</span><span class="keyword">);</span><span class="comment">//save<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/gif"</span><span class="keyword">);<br />        </span><span class="default">readfile</span><span class="keyword">(</span><span class="default">$gifRel</span><span class="keyword">); </span><span class="comment">//pass thru to browser<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40284">  <div class="votes">
    <div id="Vu40284">
    <a href="/manual/vote-note.php?id=40284&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40284">
    <a href="/manual/vote-note.php?id=40284&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40284" title="85% like this...">
    5
    </div>
  </div>
  <a href="#40284" class="name">
  <strong class="user"><em>mumig at poczta dot onet dot pl</em></strong></a><a class="genanchor" href="#40284"> &para;</a><div class="date" title="2004-02-27 08:13"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40284">
<div class="phpcode"><code><span class="html">imagecolorat() works differently for png's with true color and for paletted png's - for true color it returns value of color, for paletted it returns index number and you have to use  imagecolorsforindex() to get rgb color value.</span></code></div>
  </div>
 </div>
  <div class="note" id="107970">  <div class="votes">
    <div id="Vu107970">
    <a href="/manual/vote-note.php?id=107970&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107970">
    <a href="/manual/vote-note.php?id=107970&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107970" title="62% like this...">
    7
    </div>
  </div>
  <a href="#107970" class="name">
  <strong class="user"><em>justin at hoogs dot com dot au</em></strong></a><a class="genanchor" href="#107970"> &para;</a><div class="date" title="2012-03-19 03:48"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107970">
<div class="phpcode"><code><span class="html">trimImage ( resource $image , int $colour , int $tolerance )<br /><br />trimImage() will return top-most, right-most, bottom-most and left-most positions of wanted pixels for an image (i.e. find minimum image area so you can then trim given colour from the outer edges of an image).<br /><br />Parameters<br /><br />image<br />An image resource, returned by one of the image creation functions, such as imagecreatetruecolor().<br /><br />colour<br />colour to be 'trimmed'.  Allowable range 0 (black) to 255 (white).  if null (or outside 0 - 255) will use top/left corner colour as default.<br /><br />tolerance<br />Acceptable range +- from colour.  0 (trim only exact colour) to 255 (trim all colours).<br /><br />Return Values<br />Returns an array of outermost pixels which are outside the tolerance range from colour.  <br />array( int $top, int $right, int $bottom, int $left )<br /><br />Example (and actual function)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">trimImage</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">) {<br />  </span><span class="comment">// if trim colour ($c) isn't a number between 0 - 255<br />  </span><span class="keyword">if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) || </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">255</span><span class="keyword">) {<br />    </span><span class="comment">// grab the colour from the top left corner and use that as default<br />    </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// 2 pixels in to avoid messy edges<br />    </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />    </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">$r</span><span class="keyword">+</span><span class="default">$g</span><span class="keyword">+</span><span class="default">$b</span><span class="keyword">)/</span><span class="default">3</span><span class="keyword">); </span><span class="comment">// average of rgb is good enough for a default<br />  </span><span class="keyword">}<br />  </span><span class="comment">// if tolerance ($t) isn't a number between 0 - 255 use 10 as default<br />  </span><span class="keyword">if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">) || </span><span class="default">$t </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$t </span><span class="keyword">&gt; </span><span class="default">255</span><span class="keyword">) </span><span class="default">$t </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /><br />  </span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); </span><span class="comment">// image width<br />  </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); </span><span class="comment">// image height<br />  </span><span class="keyword">for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />    for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {<br />      </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />      </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />      </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />      </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />      if (<br />      (</span><span class="default">$r </span><span class="keyword">&lt; </span><span class="default">$c</span><span class="keyword">-</span><span class="default">$t </span><span class="keyword">|| </span><span class="default">$r </span><span class="keyword">&gt; </span><span class="default">$c</span><span class="keyword">+</span><span class="default">$t</span><span class="keyword">) &amp;&amp; </span><span class="comment">// red not within tolerance of trim colour <br />      </span><span class="keyword">(</span><span class="default">$g </span><span class="keyword">&lt; </span><span class="default">$c</span><span class="keyword">-</span><span class="default">$t </span><span class="keyword">|| </span><span class="default">$g </span><span class="keyword">&gt; </span><span class="default">$c</span><span class="keyword">+</span><span class="default">$t</span><span class="keyword">) &amp;&amp; </span><span class="comment">// green not within tolerance of trim colour <br />      </span><span class="keyword">(</span><span class="default">$b </span><span class="keyword">&lt; </span><span class="default">$c</span><span class="keyword">-</span><span class="default">$t </span><span class="keyword">|| </span><span class="default">$b </span><span class="keyword">&gt; </span><span class="default">$c</span><span class="keyword">+</span><span class="default">$t</span><span class="keyword">) </span><span class="comment">// blue not within tolerance of trim colour<br />      </span><span class="keyword">) {<br />        </span><span class="comment">// using x and y as keys condenses all rows and all columns<br />        // into just one X array and one Y array.<br />        // however, the keys are treated as literal and therefore are not in<br />        // numeric order, so we need to sort them in order to get the first <br />        // and last X and Y occurances of wanted pixels.<br />        // normal sorting will remove keys so we also use x and y as values,<br />        // this way they are still available without preserving keys. <br />        </span><span class="default">$y_axis</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">] = </span><span class="default">$y</span><span class="keyword">;  <br />        </span><span class="default">$x_axis</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">$x</span><span class="keyword">;<br />        </span><span class="comment">// note: $y_axis[] = $y; and $x_axis[] = $x; works just as well<br />        // but results in much much larger arrays than is necessary<br />        // array_unique would reduce size again but this method is quicker<br />      </span><span class="keyword">}<br />    }<br />  }<br />  </span><span class="comment">// sort them so first and last occurances are at start and end<br />  </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$y_axis</span><span class="keyword">);<br />  </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$x_axis</span><span class="keyword">);  <br /><br />  </span><span class="default">$top </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$y_axis</span><span class="keyword">); </span><span class="comment">// first wanted pixel on Y axis<br />  </span><span class="default">$right </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$x_axis</span><span class="keyword">); </span><span class="comment">// last wanted pixel on X axis <br />  </span><span class="default">$bottom </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$y_axis</span><span class="keyword">); </span><span class="comment">// last wanted pixel on Y axis<br />  </span><span class="default">$left </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$x_axis</span><span class="keyword">); </span><span class="comment">// first wanted pixel on X axis<br /><br />  </span><span class="keyword">return array(</span><span class="default">$top</span><span class="keyword">,</span><span class="default">$right</span><span class="keyword">,</span><span class="default">$bottom</span><span class="keyword">,</span><span class="default">$left</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$image</span><span class="keyword">=</span><span class="string">'test.jpg'</span><span class="keyword">;<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); </span><span class="comment">// we need resource<br /><br /></span><span class="default">$c </span><span class="keyword">= (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="default">c</span><span class="keyword">])) ? </span><span class="default">$_GET</span><span class="keyword">[</span><span class="default">c</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">; </span><span class="comment">// set trim colour via GET<br /></span><span class="default">$t </span><span class="keyword">= (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="default">t</span><span class="keyword">])) ? </span><span class="default">$_GET</span><span class="keyword">[</span><span class="default">t</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">; </span><span class="comment">// set tolerance via GET<br /><br /></span><span class="keyword">list(</span><span class="default">$t</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$l</span><span class="keyword">) = </span><span class="default">trimImage</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">); </span><span class="comment">// find top, right, bottom and left<br /><br /></span><span class="default">$w </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">-</span><span class="default">$l</span><span class="keyword">; </span><span class="comment">// find width<br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">-</span><span class="default">$t</span><span class="keyword">; </span><span class="comment">// find height<br /><br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); </span><span class="comment">// free resource<br /><br />// below is just for visually testing function ---------------------------------<br /><br /></span><span class="default">$html_display </span><span class="keyword">= &lt;&lt;&lt;HTM<br /></span><span class="string"><br />&lt;style type="text/css"&gt;<br />#stage {<br />  position: relative;<br />  float: left; // so it is the same size as the image it contains<br />}<br />#canvas {<br />  border: solid 1px #FC3;<br />  width: </span><span class="keyword">{</span><span class="default">$w</span><span class="keyword">}</span><span class="string">px;<br />  height: </span><span class="keyword">{</span><span class="default">$h</span><span class="keyword">}</span><span class="string">px;<br />  position: absolute;<br />  top: </span><span class="keyword">{</span><span class="default">$t</span><span class="keyword">}</span><span class="string">px;<br />  left: </span><span class="keyword">{</span><span class="default">$l</span><span class="keyword">}</span><span class="string">px;<br />}<br />img { border: solid 1px #EEE; }<br />&lt;/style&gt;<br /><br /></span><span class="keyword">HTM;<br /><br /></span><span class="default">?&gt;<br /></span>&lt;html&gt;<br />&lt;head&gt;<br /><span class="default">&lt;?=$html_display?&gt;<br /></span>&lt;/head&gt;<br /><br />&lt;body&gt;<br />&lt;div id="stage"&gt;<br />  &lt;div id="canvas"&gt;&lt;/div&gt;<br />  &lt;img src="test.jpg" /&gt;<br />&lt;/div&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="120592">  <div class="votes">
    <div id="Vu120592">
    <a href="/manual/vote-note.php?id=120592&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120592">
    <a href="/manual/vote-note.php?id=120592&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120592" title="66% like this...">
    1
    </div>
  </div>
  <a href="#120592" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#120592"> &para;</a><div class="date" title="2017-02-04 02:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120592">
<div class="phpcode"><code><span class="html">imageColorAt() issues a Notice and returns FALSE for pixel coordinates that are out of bounds.</span></code></div>
  </div>
 </div>
  <div class="note" id="113503">  <div class="votes">
    <div id="Vu113503">
    <a href="/manual/vote-note.php?id=113503&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113503">
    <a href="/manual/vote-note.php?id=113503&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113503" title="61% like this...">
    3
    </div>
  </div>
  <a href="#113503" class="name">
  <strong class="user"><em>justin at hoogs dot com dot au</em></strong></a><a class="genanchor" href="#113503"> &para;</a><div class="date" title="2013-10-21 02:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113503">
<div class="phpcode"><code><span class="html">This improves upon to my previous function (which only really worked on a few greyscale colours). Colour should now be a hexadecimal colour value. Colour and tolerance are now optional parameters.<br /><br />trimImage ( resource $image [, str $colour [, int $tolerance]] )<br /><br />trimImage() will return top-most, right-most, bottom-most and left-most positions of wanted pixels for an image (i.e. find minimum image area so you can then trim given colour from the outer edges of an image).<br /><br />Parameters<br /><br />image<br />An image resource, returned by one of the image creation functions, such as imagecreatetruecolor().<br /><br />colour<br />Hexadecimal value of colour to be 'trimmed'.  If omitted the top/left corner colour will be used as default.<br /><br />tolerance<br />Acceptable range +- from colour.  Allowable range 0 to 255. If omitted 10 will be used as default.<br /><br />Return Values<br />Returns an array of outermost pixels which are beyond the tolerance range from colour.  <br />array( int $top, int $right, int $bottom, int $left )<br /><br />function trimImage($im,$c=null,$t=10) {<br />  // if hex colour ($c) exists attempt to convert to decimal<br />  if ($c) $rgb = @hexdec($c);<br />  // if hexdec failed to get a value between black (0) and white (16777215)<br />  // grab the colour from the top left corner (2 pixels in to avoid messy edges)<br />  if (!is_numeric($rgb) || $rgb &lt; 0 || $rgb &gt; 16777215) $rgb = imagecolorat($im, 2, 2); <br />  // split $rgb into red, green and blue<br />  $r = ($rgb &gt;&gt; 16) &amp; 0xFF;<br />  $g = ($rgb &gt;&gt; 8) &amp; 0xFF;<br />  $b = $rgb &amp; 0xFF;<br />  // make sure tolerance ($t) is a number between 0 - 255<br />  if (!is_numeric($t) || $t &lt; 0) $t = 0;<br />  elseif ($t &gt; 255) $t = 255;<br /><br />  $w = imagesx($im); $h = imagesy($im); // image width and height<br />  for($x = 0; $x &lt; $w; $x++) {<br />    for($y = 0; $y &lt; $h; $y++) {<br />      $rgb = imagecolorat($im, $x, $y);<br />      $red = ($rgb &gt;&gt; 16) &amp; 0xFF;<br />      $grn = ($rgb &gt;&gt; 8) &amp; 0xFF;<br />      $blu = $rgb &amp; 0xFF;<br />      if (<br />        $red &lt; $r-$t || $red &gt; $r+$t || // not trim red (nor within tolerance)  <br />        $grn &lt; $g-$t || $grn &gt; $g+$t || // not trim green (nor within tolerance) <br />        $blu &lt; $b-$t || $blu &gt; $b+$t // not trim blue (nor within tolerance)<br />      ) {<br />        $y_axis[$y] = $y; $x_axis[$x] = $x; // wanted pixel coordinates stored<br />      }<br />    }<br />  }<br />  if (!$y_axis) $y_axis = $x_axis = array(0); // avoid errors if all pixels are trimmed<br />  // sort so first and last occurances are at start and end<br />  sort($y_axis); sort($x_axis);  <br /><br />  $t = array_shift($y_axis); // first wanted pixel on Y axis (top)<br />  $r = array_pop($x_axis); // last wanted pixel on X axis (right)<br />  $b = array_pop($y_axis); // last wanted pixel on Y axis (bottom)<br />  $l = array_shift($x_axis); // first wanted pixel on X axis (left)<br /><br />  return array($t,$r,$b,$l);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="115609">  <div class="votes">
    <div id="Vu115609">
    <a href="/manual/vote-note.php?id=115609&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115609">
    <a href="/manual/vote-note.php?id=115609&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115609" title="66% like this...">
    1
    </div>
  </div>
  <a href="#115609" class="name">
  <strong class="user"><em>dewi at dewimorgan dot com</em></strong></a><a class="genanchor" href="#115609"> &para;</a><div class="date" title="2014-08-24 10:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115609">
<div class="phpcode"><code><span class="html">To test whether to handle the return value of this function as RGB or a palette index, see either imageistruecolor(), or (for GD &lt; 2.0.1, or PHP 4 &lt; 4.3.2) imagecolorstotal() == 0.<br /><br />It seems that a number of comments here take many lines to convert RGB or RGBA values to hex strings #AARRGGBB. This is a one-liner in most cases:<br /><br />$hex = sprintf("#%08X", imagecolorat($im32, $x, $y));<br />$hex = sprintf("#%08X", $rgb);<br />$hex = sprintf("#%08X", $argb);<br />$hex = sprintf("#%02X%06X", $rgba &gt;&gt; 24, $rgba &amp; 0xFF000000);<br />$hex = sprintf("#00%02X%02X%02X", $r, $g, $b);<br />$hex = sprintf("#%02X%02X%02X%02X", $a, $r, $g, $b);<br /><br />For paletted images, it's two lines:<br />$cols = imagecolorsforindex($imPal, imagecolorat($imPal, $x, $y));<br />$hex = sprintf("#%08X", $cols['alpha'], $cols['red'], $cols['green'], $cols['blue']);</span></code></div>
  </div>
 </div>
  <div class="note" id="103132">  <div class="votes">
    <div id="Vu103132">
    <a href="/manual/vote-note.php?id=103132&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103132">
    <a href="/manual/vote-note.php?id=103132&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103132" title="60% like this...">
    1
    </div>
  </div>
  <a href="#103132" class="name">
  <strong class="user"><em>chandrachur at elegantsystems dot net</em></strong></a><a class="genanchor" href="#103132"> &para;</a><div class="date" title="2011-03-28 01:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103132">
<div class="phpcode"><code><span class="html">Here is a fun code for making images with white bg transparent. Well it can work with any bg but you need to adjust the color values accordingly. Works best with plain dual colors. I searched for this kind of code a lot but unable to find one ...see if this helps someone.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">transparentImage</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">){  </span><span class="comment">//making images with white bg transparent<br /></span><span class="default">$r1</span><span class="keyword">=</span><span class="default">80</span><span class="keyword">;<br /></span><span class="default">$g1</span><span class="keyword">=</span><span class="default">80</span><span class="keyword">;<br /></span><span class="default">$b1</span><span class="keyword">=</span><span class="default">80</span><span class="keyword">;<br />for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); ++</span><span class="default">$x</span><span class="keyword">)<br />        {<br />            for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); ++</span><span class="default">$y</span><span class="keyword">)<br />            {<br />                </span><span class="default">$color</span><span class="keyword">=</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />                </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$color </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$color </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$color </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">270</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />                    if(</span><span class="default">$r</span><span class="keyword">.</span><span class="default">$g</span><span class="keyword">.</span><span class="default">$b</span><span class="keyword">==(</span><span class="default">$r1</span><span class="keyword">+</span><span class="default">$i</span><span class="keyword">).(</span><span class="default">$g1</span><span class="keyword">+</span><span class="default">$i</span><span class="keyword">).(</span><span class="default">$b1</span><span class="keyword">+</span><span class="default">$i</span><span class="keyword">)){<br />                        </span><span class="default">$trans_colour </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />                        </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$trans_colour</span><span class="keyword">);<br />                    }<br />                }<br />            }<br />        }<br />        <br />        return </span><span class="default">$src</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$image</span><span class="keyword">=</span><span class="string">'abc/abc.jpg'</span><span class="keyword">;<br /></span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">$src</span><span class="keyword">=</span><span class="default">transparentImage</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); </span><span class="comment">//Lets make the jpegs transparent<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58215">  <div class="votes">
    <div id="Vu58215">
    <a href="/manual/vote-note.php?id=58215&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58215">
    <a href="/manual/vote-note.php?id=58215&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58215" title="100% like this...">
    1
    </div>
  </div>
  <a href="#58215" class="name">
  <strong class="user"><em>T. Dekker</em></strong></a><a class="genanchor" href="#58215"> &para;</a><div class="date" title="2005-10-27 12:40"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58215">
<div class="phpcode"><code><span class="html">In GD 2.x there is support for true color images complete with an alpha channel. GD 2.x has a 7-bit (0-127) alpha channel.<br /><br />While most people are used to an 8-bit (0-255) alpha channel, it is actually quite handy that GD's is 7-bit (0-127). Each pixel is represented by a 32-bit signed integer, with the four 8-bit bytes arranged like this:<br /><br /> High Byte &lt;--&gt; Low Byte<br />{Alpha Channel} {Red} {Green} {Blue}<br /><br />For a signed integer, the leftmost bit, or the highest bit, is used to indicate whether the value is negative, thus leaving only 31 bits of actual information. PHP's default integer value is a signed long into which we can store a single GD palette entry. Whether that integer is positive or negative tells us whether antialiasing is enabled for that palette entry.</span></code></div>
  </div>
 </div>
  <div class="note" id="56243">  <div class="votes">
    <div id="Vu56243">
    <a href="/manual/vote-note.php?id=56243&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56243">
    <a href="/manual/vote-note.php?id=56243&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56243" title="100% like this...">
    1
    </div>
  </div>
  <a href="#56243" class="name">
  <strong class="user"><em>Super Moi</em></strong></a><a class="genanchor" href="#56243"> &para;</a><div class="date" title="2005-08-28 08:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56243">
<div class="phpcode"><code><span class="html">Here is a contribution for change tint.<br /><br />function colorize($path_image, $red, $green, $blue)<br />{<br />      $im = imagecreatefrompng($path_image);<br />    $pixel = array();<br />        <br />    $n_im = imagecreatetruecolor(imagesx($im),imagesy($im));<br />    $fond = imagecolorallocatealpha($n_im, 255, 255, 255, 0);<br />    imagefill($n_im, 0, 0, $fond);<br />    <br />    for($y=0;$y&lt;imagesy($n_im);$y++)<br />    {<br />        for($x=0;$x&lt;imagesx($n_im);$x++)<br />        {<br />            $rgb = imagecolorat($im, $x, $y);            <br />            $pixel = imagecolorsforindex($im, $rgb);<br />            <br />            $r = min(round($red*$pixel['red']/169),255);<br />            $g = min(round($green*$pixel['green']/169),255);<br />            $b = min(round($blue*$pixel['blue']/169),255);<br />            $a = $pixel['alpha'];            <br />            //echo('red : '.$pixel['red'].' =&gt; '.$r.', green : '.$pixel['green'].' =&gt; '.$g.', blue : '.$pixel['blue'].' =&gt; '.$b.', alpha : '.$pixel['alpha'].' =&gt; '.$a.'&lt;br&gt;');<br />            <br />            $pixelcolor = imagecolorallocatealpha($n_im, $r, $g, $b, $a);<br />            <br />            imagealphablending($n_im, TRUE);<br />            imagesetpixel($n_im, $x, $y, $pixelcolor);<br />        }<br />    }<br />    <br />       imagepng($n_im,'test.png');<br />       imagedestroy($n_im);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="102328">  <div class="votes">
    <div id="Vu102328">
    <a href="/manual/vote-note.php?id=102328&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102328">
    <a href="/manual/vote-note.php?id=102328&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102328" title="50% like this...">
    0
    </div>
  </div>
  <a href="#102328" class="name">
  <strong class="user"><em>Kae Cyphet</em></strong></a><a class="genanchor" href="#102328"> &para;</a><div class="date" title="2011-02-08 05:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102328">
<div class="phpcode"><code><span class="html">If you are getting inconsistent results or results that dont make any sense when trying to retrieve a black pixel eg:<br /><br />(Red,Green,Blue)<br />0,0,0<br />0,0,0<br />0,0,2<br />0,0,4<br />0,0,6<br />0,0,7<br />0,0,0<br />0,0,10<br />0,0,8<br />0,0,9<br />0,0,0<br />0,0,12<br />0,0,13<br />0,0,0<br /><br />switch from using imagecreate() to imagecreatetruecolor()<br /><br />issue found when creating a graph where a pixel would increase in color based on the previous color and new data.</span></code></div>
  </div>
 </div>
  <div class="note" id="99282">  <div class="votes">
    <div id="Vu99282">
    <a href="/manual/vote-note.php?id=99282&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99282">
    <a href="/manual/vote-note.php?id=99282&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99282" title="50% like this...">
    0
    </div>
  </div>
  <a href="#99282" class="name">
  <strong class="user"><em>madtrader117 at gmail dot com</em></strong></a><a class="genanchor" href="#99282"> &para;</a><div class="date" title="2010-08-08 07:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99282">
<div class="phpcode"><code><span class="html">Here's a function I made for finding the size of the black border surrounding some movie thumbnails where the movie itself has had black padding added in order to maintain aspect ratio.<br /><br /><span class="default">&lt;?php<br />    define</span><span class="keyword">(</span><span class="string">"DEBUG_OUT"</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);<br />    </span><span class="default">$border_size </span><span class="keyword">= </span><span class="default">find_border_size</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$border_size</span><span class="keyword">);<br />    </span><span class="comment">/*<br />     * $border = max(find_border_size("img.jpg"));<br />     * $thumb_size_x = 180+(2*$border);<br />     * $thumb_size_y = 240+(2*$border);<br />     * $thumb_size = $thumb_size_x . "x" . $thumb_size_y; (String to use in the -s param of ffmpeg)<br />     * $crop_cmd = "-croptop $border -cropbottom $border -cropright $border -cropleft $border";<br />     */<br />    </span><span class="keyword">function </span><span class="default">find_border_size</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />    {<br />        </span><span class="comment">/* The pad var is essentially a 'feather' value. Unless one of the RGB values rises<br />         * above $pad we are saying to continue. You can try different values but with 10 I<br />         * would still get a decent sized border due to the bleedover of the movie into<br />         * the hat.<br />         */<br />        </span><span class="default">$pad </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;<br />        </span><span class="default">$border_y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$border_x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />        if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">))<br />        {<br />            if(</span><span class="default">DEBUG_OUT</span><span class="keyword">) echo(</span><span class="string">"Error: </span><span class="default">$path</span><span class="string"> not found.\n"</span><span class="keyword">);<br />            return </span><span class="default">FALSE</span><span class="keyword">;<br />        }<br />        else<br />        {<br />            if(</span><span class="default">DEBUG_OUT</span><span class="keyword">) echo(</span><span class="string">"Opening: </span><span class="default">$path</span><span class="string"> ...\n"</span><span class="keyword">);<br />        }<br />        </span><span class="default">$im </span><span class="keyword">= @</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />        if(!</span><span class="default">$im</span><span class="keyword">) return </span><span class="default">FALSE</span><span class="keyword">;<br />        </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br />        </span><span class="comment">/* Let's start at 0, 0 and keep going till we hit a color */<br />        </span><span class="keyword">if(</span><span class="default">DEBUG_OUT</span><span class="keyword">) echo(</span><span class="string">"Image - Height: </span><span class="default">$height</span><span class="string"> / Width: </span><span class="default">$width</span><span class="string">\n"</span><span class="keyword">);<br />        </span><span class="comment">/* Border Height(Y) */<br />        </span><span class="default">$center_width </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        {<br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$center_width</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);<br />            </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            if(</span><span class="default">DEBUG_OUT</span><span class="keyword">) echo(</span><span class="string">"Height: (</span><span class="default">$center_width</span><span class="string">,</span><span class="default">$i</span><span class="string">) R: </span><span class="default">$r</span><span class="string"> / G: </span><span class="default">$g</span><span class="string"> / B: </span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">);<br />            if(</span><span class="default">$r </span><span class="keyword">&gt;= </span><span class="default">$pad </span><span class="keyword">|| </span><span class="default">$g </span><span class="keyword">&gt;= </span><span class="default">$pad </span><span class="keyword">|| </span><span class="default">$b </span><span class="keyword">&gt;= </span><span class="default">$pad</span><span class="keyword">)<br />            {<br />                </span><span class="default">$border_y </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">;<br />                if(</span><span class="default">$border_y </span><span class="keyword">== </span><span class="default">$height</span><span class="keyword">) </span><span class="default">$border_y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                break;<br />            }<br />        }<br /><br />        </span><span class="comment">/* Border Width(X) */<br />        </span><span class="default">$center_height </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        {<br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$center_height</span><span class="keyword">);<br />            </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            if(</span><span class="default">DEBUG_OUT</span><span class="keyword">) echo(</span><span class="string">"Width: (</span><span class="default">$i</span><span class="string">,</span><span class="default">$center_width</span><span class="string">) R: </span><span class="default">$r</span><span class="string"> / G: </span><span class="default">$g</span><span class="string"> / B: </span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">);<br />            if(</span><span class="default">$r </span><span class="keyword">&gt;= </span><span class="default">$pad </span><span class="keyword">|| </span><span class="default">$g </span><span class="keyword">&gt;= </span><span class="default">$pad </span><span class="keyword">|| </span><span class="default">$b </span><span class="keyword">&gt;= </span><span class="default">$pad</span><span class="keyword">)<br />            {<br />                </span><span class="default">$border_x </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">;<br />                if(</span><span class="default">$border_x </span><span class="keyword">== </span><span class="default">$width</span><span class="keyword">) </span><span class="default">$border_x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                break;<br />            }<br />        }<br /><br />        </span><span class="comment">/* I am making the border a multiple of 2 since I am sending these values to FFMpeg */<br />        </span><span class="keyword">if(</span><span class="default">$border_x </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$border_x </span><span class="keyword">/= </span><span class="default">2</span><span class="keyword">;<br />            </span><span class="default">$border_x </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$border_x</span><span class="keyword">);<br />            </span><span class="default">$border_x </span><span class="keyword">*= </span><span class="default">2</span><span class="keyword">;<br />        }<br />        if(</span><span class="default">$border_y </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$border_y </span><span class="keyword">/= </span><span class="default">2</span><span class="keyword">;<br />            </span><span class="default">$border_y </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$border_y</span><span class="keyword">);<br />            </span><span class="default">$border_y </span><span class="keyword">*= </span><span class="default">2</span><span class="keyword">;<br />        }<br />        if(</span><span class="default">DEBUG_OUT</span><span class="keyword">) echo(</span><span class="string">"Border Width: </span><span class="default">$border_x</span><span class="string"> / Border Height: </span><span class="default">$border_y</span><span class="string">\n"</span><span class="keyword">);<br />        return array(</span><span class="default">$border_x</span><span class="keyword">,</span><span class="default">$border_y</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85849">  <div class="votes">
    <div id="Vu85849">
    <a href="/manual/vote-note.php?id=85849&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85849">
    <a href="/manual/vote-note.php?id=85849&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85849" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85849" class="name">
  <strong class="user"><em>Richard</em></strong></a><a class="genanchor" href="#85849"> &para;</a><div class="date" title="2008-09-20 11:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85849">
<div class="phpcode"><code><span class="html">With the following functions you can not only convert a 24 bit RGB integer to its corresponding red, green, and blue values, but also 32 bit RGBA integers to its corresponding red, green, blue, and ALPHA values.
<br />
<br />Not only that, but I even threw in a function for converting those red, green, blue, and alpha values back into a 32 bit RGBA integer.
<br />
<br />Sample usage:
<br /><span class="default">&lt;?php
<br />$int </span><span class="keyword">= </span><span class="default">rgba2int</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">);
<br />echo </span><span class="default">$int </span><span class="keyword">. </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br /></span><span class="default">$rgba </span><span class="keyword">= </span><span class="default">int2rgba</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$rgba</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />What it should output:
<br />285212671
<br />Array
<br />(
<br />    [r] =&gt; 255
<br />    [g] =&gt; 255
<br />    [b] =&gt; 255
<br />    [a] =&gt; 16
<br />)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">rgba2int</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">) {
<br />    </span><span class="comment">/*
<br />    This function builds a 32 bit integer from 4 values which must be 0-255 (8 bits)
<br />    Example 32 bit integer: 00100000010001000000100000010000
<br />    The first 8 bits define the alpha
<br />    The next 8 bits define the blue
<br />    The next 8 bits define the green
<br />    The next 8 bits define the red
<br />    */
<br />    </span><span class="keyword">return (</span><span class="default">$a </span><span class="keyword">&lt;&lt; </span><span class="default">24</span><span class="keyword">) + (</span><span class="default">$b </span><span class="keyword">&lt;&lt; </span><span class="default">16</span><span class="keyword">) + (</span><span class="default">$g </span><span class="keyword">&lt;&lt; </span><span class="default">8</span><span class="keyword">) + </span><span class="default">$r</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">int2rgba</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">) {
<br />    </span><span class="default">$a </span><span class="keyword">= (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">24</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />    </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />    </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$int </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />    return array(</span><span class="string">'r'</span><span class="keyword">=&gt;</span><span class="default">$r</span><span class="keyword">, </span><span class="string">'g'</span><span class="keyword">=&gt;</span><span class="default">$g</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="default">$b</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="default">$a</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82556">  <div class="votes">
    <div id="Vu82556">
    <a href="/manual/vote-note.php?id=82556&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82556">
    <a href="/manual/vote-note.php?id=82556&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82556" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82556" class="name">
  <strong class="user"><em>Scott Thompson (VBAssassin)</em></strong></a><a class="genanchor" href="#82556"> &para;</a><div class="date" title="2008-04-16 05:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82556">
<div class="phpcode"><code><span class="html">I've found this function very useful when wanting to manipulate an existing image. An example would be to simply flip an image (source code here: <a href="http://www.coderprofile.com/source-code/372/" rel="nofollow" target="_blank">http://www.coderprofile.com/source-code/372/</a> )<br /><br />The principle i use a lot is to scan through an image pixel by pixel performing some kind of action on that pixel... and then saving the newly created pixel on to a new canvas ready to display to the browser.<br /><br />The only problem i find is speed... so some kind of caching mechanism and dimensions limitation on images that are processed is recommended for high traffic use.<br /><br />Kind regards,<br />Scott</span></code></div>
  </div>
 </div>
  <div class="note" id="79316">  <div class="votes">
    <div id="Vu79316">
    <a href="/manual/vote-note.php?id=79316&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79316">
    <a href="/manual/vote-note.php?id=79316&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79316" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79316" class="name">
  <strong class="user"><em>p h o c i s [a-t] g m a i l c o m</em></strong></a><a class="genanchor" href="#79316"> &para;</a><div class="date" title="2007-11-20 09:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79316">
<div class="phpcode"><code><span class="html">I believe GD has an issue with transparent mattes and alpha blending. It seems GD thinks that some images have a black matte transparency (meaning that the image is built on a black matte instead of transparent).<br /><br />And while "alan hogan dot com slash contact" solution does deal with this, the results seem to be... glitchy. you get different results each time you do it, and they are not always the best.<br /><br />So I made a different solution that, while it looks better on a white background and is consistent, still sort of mangles the image just a bit by merging all blended pixels with the transparent color.<br /><br />// Load image<br />$img = imagecreatefrompng('my_broken_png.png');<br /><br />// Make matte canvas<br />$matte = imagecreatetruecolor(16,16);<br />$trans_color = imagecolorallocatealpha($matte,254,254,254,0);<br />imagefill($matte, 0,0,$trans_color);<br /><br />// Put the old image on the matte<br />imagecopy($matte,$img,0,0,0,0,16,16);<br /><br />// Turn the matte color into full alpha (blended pixels will not be affected)<br />imagecolortransparent($matte,$trans_color);<br /><br />// Display image<br />header('Content-Type: image/gif');   <br />imagegif($matte);</span></code></div>
  </div>
 </div>
  <div class="note" id="77842">  <div class="votes">
    <div id="Vu77842">
    <a href="/manual/vote-note.php?id=77842&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77842">
    <a href="/manual/vote-note.php?id=77842&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77842" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77842" class="name">
  <strong class="user"><em>pocze_zsolt at hotmail dot com</em></strong></a><a class="genanchor" href="#77842"> &para;</a><div class="date" title="2007-09-15 04:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77842">
<div class="phpcode"><code><span class="html">This is a histogram-stretching function to get a better contrast:<br /><br />function contrast_stretch( $img ) {<br />    $x = imagesx($img);<br />    $y = imagesy($img);<br /><br />    $min=255.0;<br />    $max=0.0;<br /><br />    for($i=0; $i&lt;$y; $i++) {<br />    for($j=0; $j&lt;$x; $j++) {<br />        $pos = imagecolorat($img, $j, $i);<br />        $f = imagecolorsforindex($img, $pos);<br />        $gst = $f["red"]*0.15 + $f["green"]*0.5 + $f["blue"]*0.35;<br />        if($gst&gt;$max) $max=$gst;<br />        if($gst&lt;$min) $min=$gst;<br />    }<br />    }<br /><br />    $distance = $max-$min;<br /><br />    for($i=0; $i&lt;$y; $i++) {<br />    for($j=0; $j&lt;$x; $j++) {<br />        $pos = imagecolorat($img, $j, $i);<br />        $f = imagecolorsforindex($img, $pos);<br /><br />        $red = 255*($f["red"]-$min)/$distance;<br />        $green = 255*($f["green"]-$min)/$distance;<br />        $blue = 255*($f["blue"]-$min)/$distance;<br /><br />        if($red&lt;0) $red = 0.0;<br />        elseif($red&gt;255) $red=255.0;<br /><br />        if($green&lt;0) $green = 0.0;<br />        elseif($green&gt;255) $green=255.0;<br /><br />        if($blue&lt;0) $blue = 0.0;<br />        elseif($blue&gt;255) $blue=255.0;<br /><br />        $color = imagecolorresolve($img, $red, $green, $blue);<br />        imagesetpixel($img, $j, $i, $color);<br />    }<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="71444">  <div class="votes">
    <div id="Vu71444">
    <a href="/manual/vote-note.php?id=71444&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71444">
    <a href="/manual/vote-note.php?id=71444&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71444" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71444" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#71444"> &para;</a><div class="date" title="2006-11-29 04:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71444">
<div class="phpcode"><code><span class="html">//test if a Jpeg is greyscale or color <br /><br />function iscolor($pic_adress){<br /><br />    <br />// A Pixel is Greyscale if the r = B = G <br />    //example: colorpixel R=250, G=140 , B=19  Greyscale Pixel R=110, G= 110, B=110 <br />    <br />    //we do a check of 10 Pixels to find out if the Picture is Greyscale<br />    $tocheck = 10;<br />    <br />    $iscolor=false;<br />    <br />    $temp= getimagesize($pic_adress);<br />    <br />    $x= $temp[0];<br />    $y= $temp[1];<br />    <br />    $im= imagecreatefromjpeg($pic_adress);<br /><br />    //now check out the Pixels    <br />    for( $i = 0 ; $i&lt; $tocheck &amp;&amp; !$iscolor; $i++){<br />    <br />    <br />    // Here a Random Pixel is chosen<br />    $color = imagecolorat($im,rand(0,$x),rand(0,$y));<br />    <br />    //Problem color is an int<br />    //The Hex view on the number is RRGGBB<br />    // Here we get the blue part of the Pixel<br />    $blue = 0x0000ff &amp; $color;<br />    <br />    $green = 0x00ff00 &amp; $color;<br />   //The Green part we have to push 8 bits to the right to get an Compareable result <br />    $green = $green &gt;&gt; 8;<br />    $red =0xff0000 &amp; $color;<br />    //red part needs to be pushed 16 bit<br />    $red = $red &gt;&gt; 16;<br />    // if one of the Pixels isnt Greyscale it breaks an you know this is a color picture<br />    if( $red!= $green || $green!= $blue){<br />        $iscolor = true;<br />        break;<br />        }<br />    }<br />    return $iscolor;<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="56427">  <div class="votes">
    <div id="Vu56427">
    <a href="/manual/vote-note.php?id=56427&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56427">
    <a href="/manual/vote-note.php?id=56427&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56427" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56427" class="name">
  <strong class="user"><em>swimgod</em></strong></a><a class="genanchor" href="#56427"> &para;</a><div class="date" title="2005-09-02 01:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56427">
<div class="phpcode"><code><span class="html">this function i made will compare two($start-$finish) images and change the pixels with diffrent colors in the "finish" image<br />then displays them both next to each other in one image<br /><br />another feature is "display" which will echo text<br />"50% on<br />50% off"-% count(if the number is lower then 1 it will go into one decamil count<br /><br />or type "2" will be<br />"10023 on<br />3000 off"-pixel count<br /><br />one last feature is "color" <br />which you define in an array<br />$color = array("r" =&gt; "244","g" =&gt; "122","b" =&gt; "100");<br /><br />to finish up the discrpition im gonna show this "map" of my function<br />compare($start, $finish[, $color[, $display[, $type]]])<br />image-url($start) - base image URL<br />image-url($finish) - compare image URL<br />array($color) - array with keys "r", "g", "b" r being RED 0-255 g being GREEN 0-255 b being BLUE 0-255<br />bool($display) - 1 OR TRUE will return text stats from compare<br />int($type) - 1 OR 0 | 1 being % results | 0 being pixel results<br /><br />&lt;?<br />function compare($start, $finish, $color, $display, $type){<br /><br />$im = ImageCreateFrompng($start);<br />$im2 = ImageCreateFrompng($finish);<br />$img['x'] = imagesx($im);<br />$img['y'] = imagesy($im);<br />$img2['x'] = imagesx($im2);<br />$img2['y'] = imagesy($im2);<br />if(($img['x'] == $img2['x']) &amp;&amp; ($img['y'] == $img2['y'])){<br /><br />//get and set image hieght and width<br />$i = array("width" =&gt;  $img['x']*2, "height" =&gt; $img['y']);<br />$im3 = imagecreatetruecolor($i['width'], $i['height']);<br />if($color){ <br />$color = imagecolorallocate($im3, $color['r'], $color['g'], $color['b']);<br />}else{<br /><br />$color = imagecolorallocate($im3, 255, 255, 255);<br />}<br />for($y = $img['y'];$y &gt; 0; $y--){<br />for($x = $img['x'];$x &gt; 0; $x--){<br />if(ImageColorAt($im, $x, $y) == ImageColorAt($im2, $x, $y)){<br />$on = $on+1;<br />$rgb = ImageColorAt($im, $x, $y);<br />Imagesetpixel($im3, $img['x']+$x, $y, $rgb);<br />}else{<br />$off = $off+1;<br />imagesetpixel($im3, $img['x']+$x, $y , $color);<br />}<br />}<br />}<br />if($display == true){<br />if(($type == "1") || (!$type)){<br />$off2 = (round(($off / $on)*10));<br />if(($off2 == 0) &amp;&amp; ($off &gt; 0)){<br />$off2 = round(($off / $on)*10)*10;<br />}<br />$on2 = (100-$off2);<br />$off2 .="%";<br />$on2 .="%";<br />}else{<br />$off2 = $off;<br />$on2 = $on;<br />}<br />echo $off2 ." off&lt;br&gt;". $on2 ." on";<br />}else{<br />imagecopy($im3, $im, 0, 0, 0, 0, $img['x'], $img['y']);<br />@header("Content-type: image/png");<br />imagepng($im3);<br />imagedestroy($im3);<br />}<br />imagedestroy($im);<br />imagedestroy($im2);<br />return TRUE;<br />}else{<br />return False;<br />}<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="117748">  <div class="votes">
    <div id="Vu117748">
    <a href="/manual/vote-note.php?id=117748&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117748">
    <a href="/manual/vote-note.php?id=117748&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117748" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#117748" class="name">
  <strong class="user"><em>Levi Cole</em></strong></a><a class="genanchor" href="#117748"> &para;</a><div class="date" title="2015-07-31 06:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117748">
<div class="phpcode"><code><span class="html">So I have written the most pointless use I could think of for this function (imagecolorat).<br /><br />Basically it converts every pixel in the given image for an &lt;i&gt; tag. You can set the rendered pixel size with $p<br /><br /><span class="default">&lt;?php<br />    $p </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">; </span><span class="comment">// Set pixel width/height<br /></span><span class="default">?&gt;<br /></span>&lt;!DOCTYPE html&gt;<br />&lt;html lang="en"&gt;<br />&lt;head&gt;<br />    &lt;meta charset="UTF-8"&gt;<br />    &lt;title&gt;Image to DOM&lt;/title&gt;<br />    &lt;style&gt;<br />        .canvas {position: relative;}<br />        .pixel {width: <span class="default">&lt;?= 1</span><span class="keyword">*</span><span class="default">$p</span><span class="keyword">; </span><span class="default">?&gt;</span>px; height: <span class="default">&lt;?= 1</span><span class="keyword">*</span><span class="default">$p</span><span class="keyword">; </span><span class="default">?&gt;</span>px; position: absolute; display: block;}<br />    &lt;/style&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />    <br />    &lt;form action="/" method="post" enctype="multipart/form-data"&gt;<br />        &lt;input type="file" name="image"&gt;<br />        &lt;input type="submit"&gt;<br />    &lt;/form&gt;<br />    <br />    <span class="default">&lt;?php<br />        </span><span class="keyword">if (</span><span class="default">$_FILES</span><span class="keyword">) {<br />            </span><span class="default">$post_img </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'image'</span><span class="keyword">];<br />            </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$post_img</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">];<br />            </span><span class="default">$tmp_img </span><span class="keyword">= </span><span class="default">$post_img</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">];<br /><br />            if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[.](jpg)$/'</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">)) {<br />                </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$tmp_img</span><span class="keyword">);<br />            } else if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[.](gif)$/'</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">)) {<br />                </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$tmp_img</span><span class="keyword">);<br />            } else if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[.](png)$/'</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">)) {<br />                </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$tmp_img</span><span class="keyword">);<br />            }<br /><br />            list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$tmp_img</span><span class="keyword">);<br /><br />            echo </span><span class="string">'&lt;div class="canvas" style="width: '</span><span class="keyword">.</span><span class="default">$width</span><span class="keyword">*</span><span class="default">$p</span><span class="keyword">.</span><span class="string">'px; height: '</span><span class="keyword">.</span><span class="default">$height</span><span class="keyword">*</span><span class="default">$p</span><span class="keyword">.</span><span class="string">'px;"&gt;'</span><span class="keyword">;<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">; </span><span class="comment">// Get Y coords<br />                </span><span class="keyword">for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />                    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$j</span><span class="keyword">; </span><span class="comment">// Get X coords<br /><br />                    </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">); </span><span class="comment">// Get pixel color<br />                    </span><span class="default">$rgba </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">);<br />                    unset(</span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">]); </span><span class="comment">// Remove Alpha channel<br /><br />                    </span><span class="default">$bg_color </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$rgba</span><span class="keyword">);<br />                    </span><span class="default">?&gt;<br /></span>                        &lt;i class="pixel" style="background: rgb(<span class="default">&lt;?= $bg_color</span><span class="keyword">; </span><span class="default">?&gt;</span>); top: <span class="default">&lt;?= $i</span><span class="keyword">*</span><span class="default">$p</span><span class="keyword">; </span><span class="default">?&gt;</span>px; left: <span class="default">&lt;?= $j</span><span class="keyword">*</span><span class="default">$p</span><span class="keyword">; </span><span class="default">?&gt;</span>px;"&gt;&lt;/i&gt;<br />                    <span class="default">&lt;?php<br />                </span><span class="keyword">}<br />            }<br />            echo </span><span class="string">'&lt;/div&gt;'</span><span class="keyword">;<br />        }<br />    </span><span class="default">?&gt;<br /></span><br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="69575">  <div class="votes">
    <div id="Vu69575">
    <a href="/manual/vote-note.php?id=69575&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69575">
    <a href="/manual/vote-note.php?id=69575&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69575" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#69575" class="name">
  <strong class="user"><em>morten at nilsen dot com</em></strong></a><a class="genanchor" href="#69575"> &para;</a><div class="date" title="2006-09-11 08:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69575">
<div class="phpcode"><code><span class="html">A better way of encoding a color value to #rrggbb:<br /><br /><span class="default">&lt;?php<br />  printf</span><span class="keyword">(</span><span class="string">'#%06x'</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />or<br /><br /><span class="default">&lt;?php<br />  $rgb </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'#%06x'</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59797">  <div class="votes">
    <div id="Vu59797">
    <a href="/manual/vote-note.php?id=59797&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59797">
    <a href="/manual/vote-note.php?id=59797&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59797" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#59797" class="name">
  <strong class="user"><em>robert at future-vision dot nl</em></strong></a><a class="genanchor" href="#59797"> &para;</a><div class="date" title="2005-12-15 04:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59797">
<div class="phpcode"><code><span class="html">Look mom, no tables :)<br /><br />I made some changes to the code from 'hazard AT krankteil DOTTILLYDO de' so the function would output a div that displays the image.<br /><br />As for the size of the outputted file I can say the original png file was lots smaller, but maybe its a nice feature for small buttons or such.<br /><br />The way you can use it is the same as the code from 'hazard AT krankteil DOTTILLYDO de'.<br /><br />litle note: each div contains a bogus image. When this is not in IE will screw up the output.<br /><br />&lt;?<br />    function hexcolor($c) {<br />        $r = ($c &gt;&gt; 16) &amp; 0xFF;<br />        $g = ($c &gt;&gt; 8) &amp; 0xFF;<br />        $b = $c &amp; 0xFF;<br />        return '#'.str_pad(dechex($r), 2, '0', STR_PAD_LEFT).str_pad(dechex($g), 2, '0', STR_PAD_LEFT).str_pad(dechex($b), 2, '0', STR_PAD_LEFT);<br />    }<br />    <br />   <br />    function png2div($filename) {<br /><br />        $img = imagecreatefrompng($filename);<br />        $width = imagesx($img);<br />        $height = imagesy($img);<br />        $div_width = 1;<br />        $previous_color = 0;<br />        <br />        $output = '&lt;div style="position:relative;width:' . $width . 'px;height:'. $height .'px;"&gt;';<br />        <br />        for($y = 0;$y &lt; $height;++$y){<br />            <br />            for($x = 0;$x &lt; $width;++$x){<br /><br />                $current_color = ImageColorAt($img, $x, $y);<br />                <br />                if($current_color == $previous_color &amp;&amp; $x &lt; $width-1){<br />                    ++$div_width;<br />                }<br />                else{<br />                    $output .= '&lt;div style="position:relative;float:left;width:' . $div_width . 'px;height:1px;background-color:' . hexcolor((($div_width &gt; 1)? $previous_color:$current_color)) . '"&gt;&lt;img src="bogus.gif" alt="" width="1" height="1" /&gt;&lt;/div&gt;';<br />                    $previous_color = $current_color;<br />                    $div_width = 1;<br />                }<br />            }<br />            ob_flush();<br />        }<br />       <br />        $output .= '&lt;/div&gt;';<br />        <br />        return $output;<br />        <br />    }<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="97957">  <div class="votes">
    <div id="Vu97957">
    <a href="/manual/vote-note.php?id=97957&amp;page=function.imagecolorat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97957">
    <a href="/manual/vote-note.php?id=97957&amp;page=function.imagecolorat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97957" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#97957" class="name">
  <strong class="user"><em>black at scene-si dot org</em></strong></a><a class="genanchor" href="#97957"> &para;</a><div class="date" title="2010-05-18 05:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97957">
<div class="phpcode"><code><span class="html">If an image is filled with a solid color (rgb 0,0,0) the average color will be 0,0,0, and the histogram will have the maximum values at r[0], g[0], and b[0]. Since we remove those values with the tolerance (+- 16), we are only left with colors outside of average.
<br />
<br />If the removed colors represent more than 90% of the image (we remove 6.25-12.5% of the histogram based on the average color), then we asume the image is blank.
<br />
<br />This detects solid filled images of any color, and with images of very little color variance (blank wall, blue sky with no clouds, nearly faded images, very low contrast and low color range images). The function is perfect for checking if a frame from a video is blank or not (in case you are generating thumbnails).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">isBlank</span><span class="keyword">(</span><span class="default">$gd_resource</span><span class="keyword">, </span><span class="default">$tolerance</span><span class="keyword">, </span><span class="default">$percent</span><span class="keyword">)
<br />{
<br />        list(</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">) = array(</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$gd_resource</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$gd_resource</span><span class="keyword">));
<br />
<br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$hr </span><span class="keyword">= </span><span class="default">$hg </span><span class="keyword">= </span><span class="default">$hb </span><span class="keyword">= array();
<br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$h</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />                for (</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$w</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {
<br />                        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$gd_resource</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);
<br />                        </span><span class="default">$f </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$gd_resource</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);
<br />                        </span><span class="default">$hr</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]] = </span><span class="default">issetor</span><span class="keyword">(</span><span class="default">$hr</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]],</span><span class="default">0</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;
<br />                        </span><span class="default">$hg</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">]] = </span><span class="default">issetor</span><span class="keyword">(</span><span class="default">$hg</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">]],</span><span class="default">0</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;
<br />                        </span><span class="default">$hb</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]] = </span><span class="default">issetor</span><span class="keyword">(</span><span class="default">$hb</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]],</span><span class="default">0</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;
<br />                        </span><span class="default">$count </span><span class="keyword">++;
<br />                }
<br />        }
<br />
<br />        </span><span class="default">$rc </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$hr</span><span class="keyword">);
<br />        </span><span class="default">$gc </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$hg</span><span class="keyword">);
<br />        </span><span class="default">$bc </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$hb</span><span class="keyword">);
<br />
<br />        </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$rc</span><span class="keyword">/</span><span class="default">$count</span><span class="keyword">;
<br />        </span><span class="default">$g </span><span class="keyword">= </span><span class="default">$gc</span><span class="keyword">/</span><span class="default">$count</span><span class="keyword">;
<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$bc</span><span class="keyword">/</span><span class="default">$count</span><span class="keyword">;
<br />
<br />        </span><span class="default">$ra </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">-</span><span class="default">$tolerance</span><span class="keyword">), </span><span class="default">min</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">+</span><span class="default">$tolerance</span><span class="keyword">));
<br />        </span><span class="default">$ga </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">-</span><span class="default">$tolerance</span><span class="keyword">), </span><span class="default">min</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">+</span><span class="default">$tolerance</span><span class="keyword">));
<br />        </span><span class="default">$ba </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">-</span><span class="default">$tolerance</span><span class="keyword">), </span><span class="default">min</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">+</span><span class="default">$tolerance</span><span class="keyword">));
<br />
<br />        foreach (</span><span class="default">$ra </span><span class="keyword">as </span><span class="default">$rx</span><span class="keyword">) {
<br />                unset(</span><span class="default">$hr</span><span class="keyword">[</span><span class="default">$rx</span><span class="keyword">]);
<br />        }
<br />        foreach (</span><span class="default">$ga </span><span class="keyword">as </span><span class="default">$gx</span><span class="keyword">) {
<br />                unset(</span><span class="default">$hg</span><span class="keyword">[</span><span class="default">$gx</span><span class="keyword">]);
<br />        }
<br />        foreach (</span><span class="default">$ba </span><span class="keyword">as </span><span class="default">$bx</span><span class="keyword">) {
<br />                unset(</span><span class="default">$hb</span><span class="keyword">[</span><span class="default">$bx</span><span class="keyword">]);
<br />        }
<br />
<br />        </span><span class="default">$red </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$hr</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">) / </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$rc</span><span class="keyword">);
<br />        </span><span class="default">$green </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$hg</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">) / </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$gc</span><span class="keyword">);
<br />        </span><span class="default">$blue </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$hb</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">) / </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$bc</span><span class="keyword">);
<br />
<br />        if (</span><span class="default">$red</span><span class="keyword">&lt;</span><span class="default">$percent </span><span class="keyword">&amp;&amp; </span><span class="default">$green</span><span class="keyword">&lt;</span><span class="default">$percent </span><span class="keyword">&amp;&amp; </span><span class="default">$blue</span><span class="keyword">&lt;</span><span class="default">$percent</span><span class="keyword">) {
<br />                return </span><span class="default">true</span><span class="keyword">;
<br />        }
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// Example;
<br />
<br /></span><span class="default">isBlank</span><span class="keyword">(</span><span class="default">$gd_resource</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">, </span><span class="default">0.1</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecolorat&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorat.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
