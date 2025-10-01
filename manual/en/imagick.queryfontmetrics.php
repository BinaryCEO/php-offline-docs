<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Imagick::queryFontMetrics - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/imagick.queryfontmetrics.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imagick.queryfontmetrics.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imagick.queryfontmetrics.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.imagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/imagick.quantizeimages.php">
 <link rel="next" href="https://www.php.net/manual/en/imagick.queryfonts.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imagick.queryfontmetrics.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imagick.queryfontmetrics.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imagick.queryfontmetrics.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imagick.queryfontmetrics.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imagick.queryfontmetrics.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imagick.queryfontmetrics.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imagick.queryfontmetrics.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imagick.queryfontmetrics.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imagick.queryfontmetrics.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imagick.queryfontmetrics.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imagick.queryfontmetrics.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns an array representing the font metrics" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Imagick::queryFontMetrics - Manual" />
<meta name="twitter:description" content="Returns an array representing the font metrics" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Imagick::queryFontMetrics - Manual" />
<meta itemprop="description" content="Returns an array representing the font metrics" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns an array representing the font metrics" />

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
        <a href="imagick.queryfonts.php">
          Imagick::queryFonts &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imagick.quantizeimages.php">
          &laquo; Imagick::quantizeImages        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      <li><a href='class.imagick.php'>Imagick</a></li>      </ul>
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
            <option value='en/imagick.queryfontmetrics.php' selected="selected">English</option>
            <option value='de/imagick.queryfontmetrics.php'>German</option>
            <option value='es/imagick.queryfontmetrics.php'>Spanish</option>
            <option value='fr/imagick.queryfontmetrics.php'>French</option>
            <option value='it/imagick.queryfontmetrics.php'>Italian</option>
            <option value='ja/imagick.queryfontmetrics.php'>Japanese</option>
            <option value='pt_BR/imagick.queryfontmetrics.php'>Brazilian Portuguese</option>
            <option value='ru/imagick.queryfontmetrics.php'>Russian</option>
            <option value='tr/imagick.queryfontmetrics.php'>Turkish</option>
            <option value='uk/imagick.queryfontmetrics.php'>Ukrainian</option>
            <option value='zh/imagick.queryfontmetrics.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imagick.queryfontmetrics" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Imagick::queryFontMetrics</h1>
  <p class="verinfo">(PECL imagick 2, PECL imagick 3)</p><p class="refpurpose"><span class="refname">Imagick::queryFontMetrics</span> &mdash; <span class="dc-title">Returns an array representing the font metrics</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-imagick.queryfontmetrics-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Imagick::queryFontMetrics</strong></span>(<span class="methodparam"><span class="type"><a href="class.imagickdraw.php" class="type ImagickDraw">ImagickDraw</a></span> <code class="parameter">$properties</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$multiline</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Returns a multi-dimensional array representing the font metrics.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-imagick.queryfontmetrics-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">properties</code></dt>
     <dd>
      <p class="para">
       ImagickDraw object containing font properties
      </p>
     </dd>
    
    
     <dt><code class="parameter">text</code></dt>
     <dd>
      <p class="para">
       The text
      </p>
     </dd>
    
    
     <dt><code class="parameter">multiline</code></dt>
     <dd>
      <p class="para">
       Multiline parameter. If left empty it is autodetected
      </p>
     </dd>
    
    
   </dl>
  </p>
  
 </div>

 <div class="refsect1 returnvalues" id="refsect1-imagick.queryfontmetrics-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a multi-dimensional array representing the font metrics.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-imagick.queryfontmetrics-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws ImagickException on error.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-imagick.queryfontmetrics-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3069">
    <p><strong>Example #1 Using <span class="function"><strong>Imagick::queryFontMetrics()</strong></span>:</strong></p>
    <div class="example-contents"><p>
     Query the metrics for the text and dump the results on the screen.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Create a new Imagick object */<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Create an ImagickDraw object */<br /></span><span style="color: #0000BB">$draw </span><span style="color: #007700">= new </span><span style="color: #0000BB">ImagickDraw</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Set the font */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFont</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/font.ttf'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Dump the font metrics, autodetect multiline */<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryFontMetrics</span><span style="color: #007700">(</span><span style="color: #0000BB">$draw</span><span style="color: #007700">, </span><span style="color: #DD0000">"Hello World!"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/imagick/queryfontmetrics.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimagick.queryfontmetrics%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imagick.queryfontmetrics&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.queryfontmetrics.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117338">  <div class="votes">
    <div id="Vu117338">
    <a href="/manual/vote-note.php?id=117338&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117338">
    <a href="/manual/vote-note.php?id=117338&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117338" title="82% like this...">
    23
    </div>
  </div>
  <a href="#117338" class="name">
  <strong class="user"><em>stevepburgess at gmail dot com</em></strong></a><a class="genanchor" href="#117338"> &para;</a><div class="date" title="2015-05-24 10:05"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117338">
<div class="phpcode"><code><span class="html">Having spent quite a bit of time looking at these values for various fonts, this is my understanding of the values given by the fontMetrics function. I am using php 5.3 and ImageMagick 6.5.4-7 on Centos 6.5.<br /><br />characterWidth and characterHeight<br />- These seem to be related to the size you have specified for the font and don't seem to differ from font to font (at the same size). As such, they are not especially useful (to me, at least). They are not a reliable indicator of how much space the font will use.<br /><br />ascender<br />- The ascender is the part of the font that is above the baseline. It is not character related - the ascender value is the same for every character in the font.<br /><br />descender<br />- The descender is the part of the font that is below the baseline. It is represented as a negative figure. Adding the absolute values of the ascender and the descender gives you the...<br /><br />textHeight<br />- This is the total height available to the font.  It is the same for every character in the font irrespective of its case or how much space the character seems to occupy. This can be used to determined the line height when outputting paragraphs, etc.<br /><br />textWidth<br />- This value varies from character to character and is the width of the character. This is useful if the boundingBox does not provide usable values (see boundingBox below). When positioning characters one by one - don't use textWidth, use originX (see below).<br /><br />maxHorizontalAdvance<br />- I'm afraid I haven't quite figured out the purpose of this. It is the same for every character in the font. For the font Arial Italic at size 67, the value is 89 which is much wider than the advance reported for the M or the W at the same size.<br /><br />boundingBox<br />- This returns an associative array describing the four points (x1, y1, x2, y2) of a rectangle that contain the character. These values are relative to the origin (i.e. the coordinates of where you are drawing the character within an image). The returned rectangle is very accurate and encloses all parts of the printed character completely - but the boundingBox only works on single characters. It will not give accurate figures for multiple characters (in my experience anyway). When drawing a box you need to ADD "x" values to the origin and SUBTRACT "y" values from the origin. You cannot rely on the boundingBox for the SPACE character. It returns a boundingBox of (0,0,0,0).  textWidth (see above) comes in handy here.<br /><br />originX and originY<br />- these are inaccurately titled. The values returned in originX and originY are actually advanceX and advanceY. These values give you the position of the next character relative to the current one. <br /><br />I hope this is useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="101661">  <div class="votes">
    <div id="Vu101661">
    <a href="/manual/vote-note.php?id=101661&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101661">
    <a href="/manual/vote-note.php?id=101661&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101661" title="100% like this...">
    3
    </div>
  </div>
  <a href="#101661" class="name">
  <strong class="user"><em>thok nojunk at spammail thok dot ca</em></strong></a><a class="genanchor" href="#101661"> &para;</a><div class="date" title="2011-01-03 01:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101661">
<div class="phpcode"><code><span class="html">The following fields constitute my current PHP 5.2.1/Imagick 6.5.1 queryFontMetrics() return array (once setFontSize() and setFont() have been set):<br /><br />characterWidth: maximum character ("em") width<br />characterHeight: maximum character height<br />ascender: the height of character ascensions (i.e. the straight bit on a 'b')<br />descender: the height of character descensions (i.e. the straight bit on a 'p')<br />textWidth: width of drawn text in pixels<br />textHeight: height of drawn text in pixels<br />maxHorizontalAdvance: maximum pixels from start of one character to start of the next<br />boundingBox: array of x1, y1, x2, y2 bounding borders<br />originX, originY: ?<br /><br />originX seems to shadow the textWidth field, and originY has been zero thus far in my exploration.<br /><br />If you're looking to center text or locate it at an edge, though, use ImagickDraw::setGravity(int $gravity), where $gravity is one of the following constants:<br /><br />Imagick::GRAVITY_NORTHWEST<br />Imagick::GRAVITY_NORTH<br />Imagick::GRAVITY_NORTHEAST<br />Imagick::GRAVITY_WEST<br />Imagick::GRAVITY_CENTER<br />Imagick::GRAVITY_EAST<br />Imagick::GRAVITY_SOUTHWEST<br />Imagick::GRAVITY_SOUTH<br />Imagick::GRAVITY_SOUTHEAST<br /><br />Using setGravity() is far less finicky for the simpler tasks.</span></code></div>
  </div>
 </div>
  <div class="note" id="112303">  <div class="votes">
    <div id="Vu112303">
    <a href="/manual/vote-note.php?id=112303&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112303">
    <a href="/manual/vote-note.php?id=112303&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112303" title="81% like this...">
    10
    </div>
  </div>
  <a href="#112303" class="name">
  <strong class="user"><em>jlong at carouselchecks dot com</em></strong></a><a class="genanchor" href="#112303"> &para;</a><div class="date" title="2013-05-30 02:02"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112303">
<div class="phpcode"><code><span class="html">Example output from queryFontMetrics:<br /><br />Array<br />(<br />    [characterWidth] =&gt; 9<br />    [characterHeight] =&gt; 9<br />    [ascender] =&gt; 9<br />    [descender] =&gt; -2<br />    [textWidth] =&gt; 71<br />    [textHeight] =&gt; 10<br />    [maxHorizontalAdvance] =&gt; 12<br />    [boundingBox] =&gt; Array<br />        (<br />            [x1] =&gt; 0<br />            [y1] =&gt; -2<br />            [x2] =&gt; 6.890625<br />            [y2] =&gt; 7<br />        )<br /><br />    [originX] =&gt; 70<br />    [originY] =&gt; 0<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="101027">  <div class="votes">
    <div id="Vu101027">
    <a href="/manual/vote-note.php?id=101027&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101027">
    <a href="/manual/vote-note.php?id=101027&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101027" title="100% like this...">
    2
    </div>
  </div>
  <a href="#101027" class="name">
  <strong class="user"><em>george at sogetthis dot com</em></strong></a><a class="genanchor" href="#101027"> &para;</a><div class="date" title="2010-11-21 03:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101027">
<div class="phpcode"><code><span class="html">Up to and including imagick 3.0.1, queryfontmetrics would output size data based on an image resolution of 72x72. (see bug: <a href="http://pecl.php.net/bugs/bug.php?id=19907" rel="nofollow" target="_blank">http://pecl.php.net/bugs/bug.php?id=19907</a>)<br /><br />Should you have set a resolution other than this and be using 3.0.1 or below, you need to scale measurements up by a factor of YOUR_RESOLUTION / 72<br /><br />e.g. assuming you've set a resolution of 300<br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">();<br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">setResolution</span><span class="keyword">(</span><span class="default">300</span><span class="keyword">,</span><span class="default">300</span><span class="keyword">);<br /><br /></span><span class="default">$draw </span><span class="keyword">= new </span><span class="default">ImagickDraw</span><span class="keyword">();<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setFont</span><span class="keyword">(</span><span class="string">'/path/to/arial.ttf'</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setFontSize</span><span class="keyword">(</span><span class="default">72 </span><span class="keyword">* (</span><span class="default">300 </span><span class="keyword">/ </span><span class="default">72</span><span class="keyword">));<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">queryfontmetrics</span><span class="keyword">(</span><span class="default">$draw</span><span class="keyword">, </span><span class="string">'hello world'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In 3.0.2 and above, the solution is to set the resolution on the draw object to that of the image resolution<br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">();<br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">setResolution</span><span class="keyword">(</span><span class="default">300</span><span class="keyword">,</span><span class="default">300</span><span class="keyword">);<br /><br /></span><span class="default">$draw </span><span class="keyword">= new </span><span class="default">ImagickDraw</span><span class="keyword">();<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setResolution</span><span class="keyword">(</span><span class="default">300</span><span class="keyword">,</span><span class="default">300</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setFont</span><span class="keyword">(</span><span class="string">'/path/to/arial.ttf'</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setFontSize</span><span class="keyword">(</span><span class="default">72</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setFillColor</span><span class="keyword">(</span><span class="string">'#ff0000'</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">queryFontMetrics</span><span class="keyword">(</span><span class="default">$draw</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114301">  <div class="votes">
    <div id="Vu114301">
    <a href="/manual/vote-note.php?id=114301&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114301">
    <a href="/manual/vote-note.php?id=114301&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114301" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114301" class="name">
  <strong class="user"><em>SkepticaLee</em></strong></a><a class="genanchor" href="#114301"> &para;</a><div class="date" title="2014-02-04 05:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114301">
<div class="phpcode"><code><span class="html">The values do not match the array descriptors at all. If you have to know exactly how much space is being taken up by an annotation, use the following:<br /><br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="string">"Algbqdj"</span><span class="keyword">;<br /></span><span class="default">$im </span><span class="keyword">= new </span><span class="default">Imagick </span><span class="keyword">();<br /></span><span class="default">$draw </span><span class="keyword">= new </span><span class="default">ImagickDraw </span><span class="keyword">();<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setStrokeColor </span><span class="keyword">(</span><span class="string">"none"</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setFont </span><span class="keyword">(</span><span class="string">"Arial"</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setFontSize </span><span class="keyword">(</span><span class="default">96</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">setTextAlignment </span><span class="keyword">(</span><span class="default">Imagick</span><span class="keyword">::</span><span class="default">ALIGN_LEFT</span><span class="keyword">);<br /></span><span class="default">$metrics </span><span class="keyword">= </span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">queryFontMetrics </span><span class="keyword">(</span><span class="default">$draw</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="comment">//these are the values which accurately described the extent of the text and where it is to be drawn:<br /></span><span class="default">$baseline </span><span class="keyword">= </span><span class="default">$metrics</span><span class="keyword">[</span><span class="string">'boundingBox'</span><span class="keyword">][</span><span class="string">'y2'</span><span class="keyword">];<br /></span><span class="default">$textwidth </span><span class="keyword">= </span><span class="default">$metrics</span><span class="keyword">[</span><span class="string">'textWidth'</span><span class="keyword">] + </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$metrics</span><span class="keyword">[</span><span class="string">'boundingBox'</span><span class="keyword">][</span><span class="string">'x1'</span><span class="keyword">];<br /></span><span class="default">$textheight </span><span class="keyword">= </span><span class="default">$metrics</span><span class="keyword">[</span><span class="string">'textHeight'</span><span class="keyword">] + </span><span class="default">$metrics</span><span class="keyword">[</span><span class="string">'descender'</span><span class="keyword">];<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">annotation </span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$baseline</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">newImage </span><span class="keyword">(</span><span class="default">$textwidth</span><span class="keyword">, </span><span class="default">$textheight</span><span class="keyword">, </span><span class="string">"white"</span><span class="keyword">);<br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">drawImage </span><span class="keyword">(</span><span class="default">$draw</span><span class="keyword">);<br /></span><span class="default">$draw</span><span class="keyword">-&gt;</span><span class="default">clear </span><span class="keyword">();<br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">writeImage </span><span class="keyword">(</span><span class="string">"test.png"</span><span class="keyword">);<br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">clear </span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />The file test.png should now contain pretty much the complete text with no borders. This may not work for very unusual fonts, but will work OK for Times New Roman and Arial.</span></code></div>
  </div>
 </div>
  <div class="note" id="105829">  <div class="votes">
    <div id="Vu105829">
    <a href="/manual/vote-note.php?id=105829&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105829">
    <a href="/manual/vote-note.php?id=105829&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105829" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105829" class="name">
  <strong class="user"><em>abcrdw at gmail dot com</em></strong></a><a class="genanchor" href="#105829"> &para;</a><div class="date" title="2011-09-18 10:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105829">
<div class="phpcode"><code><span class="html">This script will print a watermark on the middle of an image. The width of the watermark will depend on the width of the image.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Create a new Imagick object<br /></span><span class="default">$objImage </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">( </span><span class="string">'path/to/image.jpg' </span><span class="keyword">);<br /><br /></span><span class="comment">// Get the width and height of the image<br /></span><span class="default">$imgSize   </span><span class="keyword">= </span><span class="default">$objImage</span><span class="keyword">-&gt;</span><span class="default">getImageGeometry</span><span class="keyword">();<br /></span><span class="default">$imgWidth  </span><span class="keyword">= </span><span class="default">$imgSize</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">];<br /></span><span class="default">$imgHeight </span><span class="keyword">= </span><span class="default">$imgSize</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">];<br /><br /></span><span class="comment">// Create a new text object<br /></span><span class="default">$objText </span><span class="keyword">= new </span><span class="default">ImagickDraw</span><span class="keyword">();<br /><br /></span><span class="comment">// Set te text color<br /></span><span class="default">$objText</span><span class="keyword">-&gt;</span><span class="default">setFillColor</span><span class="keyword">( new </span><span class="default">ImagickPixel</span><span class="keyword">(</span><span class="string">'grey'</span><span class="keyword">) );<br /><br /></span><span class="comment">// Set the text transparency: 0 = transparent, 1 = opaque<br /></span><span class="default">$objText</span><span class="keyword">-&gt;</span><span class="default">setFillAlpha</span><span class="keyword">( </span><span class="default">0.2 </span><span class="keyword">);<br /><br /></span><span class="comment">// Top left will be point of reference<br /></span><span class="default">$objText</span><span class="keyword">-&gt;</span><span class="default">setGravity</span><span class="keyword">( </span><span class="default">Imagick</span><span class="keyword">::</span><span class="default">GRAVITY_NORTHWEST </span><span class="keyword">);<br /><br /></span><span class="comment">// Create an array for the textwidth and textheight<br /></span><span class="default">$textProperties </span><span class="keyword">= array( </span><span class="string">'textWidth' </span><span class="keyword">=&gt; </span><span class="default">0 </span><span class="keyword">);<br /><br /></span><span class="comment">// Set the desired width of the watermark to 90% of the image width<br /></span><span class="default">$textDesiredWidth </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">( </span><span class="default">$imgWidth </span><span class="keyword">* </span><span class="default">0.9 </span><span class="keyword">);<br /><br /></span><span class="comment">// Set an initial value for the fontsize, will be increased in the loop below<br /></span><span class="default">$fontSize </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="comment">// We use the domain name of the server for the watermark text<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_NAME'</span><span class="keyword">];<br /><br /></span><span class="comment">// Increase the fontsize until we have reached our desired width<br /></span><span class="keyword">while ( </span><span class="default">$textProperties</span><span class="keyword">[</span><span class="string">'textWidth'</span><span class="keyword">] &lt;= </span><span class="default">$textDesiredWidth </span><span class="keyword">) {<br />    </span><span class="default">$objText</span><span class="keyword">-&gt;</span><span class="default">setFontSize</span><span class="keyword">( </span><span class="default">$fontSize </span><span class="keyword">);<br />    </span><span class="default">$textProperties </span><span class="keyword">= </span><span class="default">$objImage</span><span class="keyword">-&gt;</span><span class="default">queryFontMetrics</span><span class="keyword">( </span><span class="default">$objText</span><span class="keyword">, </span><span class="default">$text </span><span class="keyword">);<br />    </span><span class="default">$fontSize</span><span class="keyword">++;<br />}<br /><br /></span><span class="comment">// Calculate the horizontal starting position<br /></span><span class="default">$watermarkPosX </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">( (</span><span class="default">$imgWidth </span><span class="keyword">- </span><span class="default">$textProperties</span><span class="keyword">[</span><span class="string">'textWidth'</span><span class="keyword">]) / </span><span class="default">2 </span><span class="keyword">);<br /><br /></span><span class="comment">// Calculate the vertical starting position<br /></span><span class="default">$watermarkPosY </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">( (</span><span class="default">$imgHeight </span><span class="keyword">- </span><span class="default">$textProperties</span><span class="keyword">[</span><span class="string">'textHeight'</span><span class="keyword">]) / </span><span class="default">2 </span><span class="keyword">);<br /><br /></span><span class="comment">// Composite the text on the image<br /></span><span class="default">$objImage</span><span class="keyword">-&gt;</span><span class="default">annotateImage</span><span class="keyword">( </span><span class="default">$objText</span><span class="keyword">, </span><span class="default">$watermarkPosX</span><span class="keyword">, </span><span class="default">$watermarkPosY</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$text </span><span class="keyword">);<br /><br /></span><span class="comment">// The browser must know this is JPEG image or else it will display garbled text<br /></span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Type: image/jpeg' </span><span class="keyword">);<br /><br /></span><span class="comment">// Display the image<br /></span><span class="keyword">echo </span><span class="default">$objImage</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91853">  <div class="votes">
    <div id="Vu91853">
    <a href="/manual/vote-note.php?id=91853&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91853">
    <a href="/manual/vote-note.php?id=91853&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91853" title="no votes...">
    0
    </div>
  </div>
  <a href="#91853" class="name">
  <strong class="user"><em>Pete &amp;#39;the Pete&amp;#39; de Pijd</em></strong></a><a class="genanchor" href="#91853"> &para;</a><div class="date" title="2009-06-29 06:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91853">
<div class="phpcode"><code><span class="html">You can also use $imagickDraw()-&gt;setTextAlignmnent(Imagick::ALIGN_CENTER) and $imagickDraw-&gt;annotation(..) instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="80751">  <div class="votes">
    <div id="Vu80751">
    <a href="/manual/vote-note.php?id=80751&amp;page=imagick.queryfontmetrics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80751">
    <a href="/manual/vote-note.php?id=80751&amp;page=imagick.queryfontmetrics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80751" title="no votes...">
    0
    </div>
  </div>
  <a href="#80751" class="name">
  <strong class="user"><em>waage</em></strong></a><a class="genanchor" href="#80751"> &para;</a><div class="date" title="2008-01-30 07:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80751">
<div class="phpcode"><code><span class="html">You can use this to center a text within a box<br /><br /><span class="default">&lt;?php<br /><br />$data </span><span class="keyword">= </span><span class="string">"Hello world"</span><span class="keyword">;<br /><br /></span><span class="default">$text </span><span class="keyword">= new </span><span class="default">ImagickDraw</span><span class="keyword">();<br /></span><span class="default">$text</span><span class="keyword">-&gt;</span><span class="default">setFontSize</span><span class="keyword">(</span><span class="default">12</span><span class="keyword">);<br /></span><span class="default">$text</span><span class="keyword">-&gt;</span><span class="default">setFont</span><span class="keyword">(</span><span class="string">"Arial"</span><span class="keyword">);<br /><br /></span><span class="default">$boxWidth </span><span class="keyword">= </span><span class="default">210</span><span class="keyword">;<br /><br /></span><span class="default">$im </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">();<br /><br /></span><span class="default">$fm </span><span class="keyword">= </span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">queryFontMetrics</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="default">$textXLoc </span><span class="keyword">= (</span><span class="default">$boxWidth </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$fm</span><span class="keyword">[</span><span class="string">"textWidth"</span><span class="keyword">] / </span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />$textXLoc is now the starting location you need to use to feed to your annotateImage() function.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=imagick.queryfontmetrics&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.queryfontmetrics.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.imagick.php">Imagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="imagick.adaptiveblurimage.php" title="adaptiveBlurImage">adaptiveBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.adaptiveresizeimage.php" title="adaptiveResizeImage">adaptiveResizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.adaptivesharpenimage.php" title="adaptiveSharpenImage">adaptiveSharpenImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.adaptivethresholdimage.php" title="adaptiveThresholdImage">adaptiveThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.addimage.php" title="addImage">addImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.addnoiseimage.php" title="addNoiseImage">addNoiseImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.affinetransformimage.php" title="affineTransformImage">affineTransformImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.animateimages.php" title="animateImages">animateImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.annotateimage.php" title="annotateImage">annotateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.appendimages.php" title="appendImages">appendImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.autolevelimage.php" title="autoLevelImage">autoLevelImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.blackthresholdimage.php" title="blackThresholdImage">blackThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.blueshiftimage.php" title="blueShiftImage">blueShiftImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.blurimage.php" title="blurImage">blurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.borderimage.php" title="borderImage">borderImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.brightnesscontrastimage.php" title="brightnessContrastImage">brightnessContrastImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.charcoalimage.php" title="charcoalImage">charcoalImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.chopimage.php" title="chopImage">chopImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clampimage.php" title="clampImage">clampImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clear.php" title="clear">clear</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clipimage.php" title="clipImage">clipImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clipimagepath.php" title="clipImagePath">clipImagePath</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clippathimage.php" title="clipPathImage">clipPathImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.clutimage.php" title="clutImage">clutImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.coalesceimages.php" title="coalesceImages">coalesceImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.colorizeimage.php" title="colorizeImage">colorizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.colormatriximage.php" title="colorMatrixImage">colorMatrixImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.combineimages.php" title="combineImages">combineImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.commentimage.php" title="commentImage">commentImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compareimagechannels.php" title="compareImageChannels">compareImageChannels</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compareimagelayers.php" title="compareImageLayers">compareImageLayers</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compareimages.php" title="compareImages">compareImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.compositeimage.php" title="compositeImage">compositeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="imagick.contrastimage.php" title="contrastImage">contrastImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.contraststretchimage.php" title="contrastStretchImage">contrastStretchImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.convolveimage.php" title="convolveImage">convolveImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="imagick.cropimage.php" title="cropImage">cropImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.cropthumbnailimage.php" title="cropThumbnailImage">cropThumbnailImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="imagick.cyclecolormapimage.php" title="cycleColormapImage">cycleColormapImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.decipherimage.php" title="decipherImage">decipherImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deconstructimages.php" title="deconstructImages">deconstructImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deleteimageartifact.php" title="deleteImageArtifact">deleteImageArtifact</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deleteimageproperty.php" title="deleteImageProperty">deleteImageProperty</a>
                        </li>
                                                <li class="">
                            <a href="imagick.deskewimage.php" title="deskewImage">deskewImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.despeckleimage.php" title="despeckleImage">despeckleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.destroy.php" title="destroy">destroy</a>
                        </li>
                                                <li class="">
                            <a href="imagick.displayimage.php" title="displayImage">displayImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.displayimages.php" title="displayImages">displayImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.distortimage.php" title="distortImage">distortImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.drawimage.php" title="drawImage">drawImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.edgeimage.php" title="edgeImage">edgeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.embossimage.php" title="embossImage">embossImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.encipherimage.php" title="encipherImage">encipherImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.enhanceimage.php" title="enhanceImage">enhanceImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.equalizeimage.php" title="equalizeImage">equalizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.evaluateimage.php" title="evaluateImage">evaluateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.exportimagepixels.php" title="exportImagePixels">exportImagePixels</a>
                        </li>
                                                <li class="">
                            <a href="imagick.extentimage.php" title="extentImage">extentImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.flipimage.php" title="flipImage">flipImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.floodfillpaintimage.php" title="floodFillPaintImage">floodFillPaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.flopimage.php" title="flopImage">flopImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.forwardfouriertransformimage.php" title="forwardFourierTransformImage">forwardFourierTransformImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.frameimage.php" title="frameImage">frameImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.functionimage.php" title="functionImage">functionImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.fximage.php" title="fxImage">fxImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.gammaimage.php" title="gammaImage">gammaImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.gaussianblurimage.php" title="gaussianBlurImage">gaussianBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcolorspace.php" title="getColorspace">getColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcompression.php" title="getCompression">getCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcompressionquality.php" title="getCompressionQuality">getCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getcopyright.php" title="getCopyright">getCopyright</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getfilename.php" title="getFilename">getFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getfont.php" title="getFont">getFont</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getformat.php" title="getFormat">getFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getgravity.php" title="getGravity">getGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.gethomeurl.php" title="getHomeURL">getHomeURL</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimage.php" title="getImage">getImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagealphachannel.php" title="getImageAlphaChannel">getImageAlphaChannel</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageartifact.php" title="getImageArtifact">getImageArtifact</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagebackgroundcolor.php" title="getImageBackgroundColor">getImageBackgroundColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageblob.php" title="getImageBlob">getImageBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageblueprimary.php" title="getImageBluePrimary">getImageBluePrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagebordercolor.php" title="getImageBorderColor">getImageBorderColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechanneldepth.php" title="getImageChannelDepth">getImageChannelDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechanneldistortion.php" title="getImageChannelDistortion">getImageChannelDistortion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechanneldistortions.php" title="getImageChannelDistortions">getImageChannelDistortions</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelkurtosis.php" title="getImageChannelKurtosis">getImageChannelKurtosis</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelmean.php" title="getImageChannelMean">getImageChannelMean</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelrange.php" title="getImageChannelRange">getImageChannelRange</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagechannelstatistics.php" title="getImageChannelStatistics">getImageChannelStatistics</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecolormapcolor.php" title="getImageColormapColor">getImageColormapColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecolors.php" title="getImageColors">getImageColors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecolorspace.php" title="getImageColorspace">getImageColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecompose.php" title="getImageCompose">getImageCompose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecompression.php" title="getImageCompression">getImageCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagecompressionquality.php" title="getImageCompressionQuality">getImageCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedelay.php" title="getImageDelay">getImageDelay</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedepth.php" title="getImageDepth">getImageDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedispose.php" title="getImageDispose">getImageDispose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagedistortion.php" title="getImageDistortion">getImageDistortion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagefilename.php" title="getImageFilename">getImageFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageformat.php" title="getImageFormat">getImageFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegamma.php" title="getImageGamma">getImageGamma</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegeometry.php" title="getImageGeometry">getImageGeometry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegravity.php" title="getImageGravity">getImageGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagegreenprimary.php" title="getImageGreenPrimary">getImageGreenPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageheight.php" title="getImageHeight">getImageHeight</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagehistogram.php" title="getImageHistogram">getImageHistogram</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageinterlacescheme.php" title="getImageInterlaceScheme">getImageInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageinterpolatemethod.php" title="getImageInterpolateMethod">getImageInterpolateMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageiterations.php" title="getImageIterations">getImageIterations</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagelength.php" title="getImageLength">getImageLength</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagemimetype.php" title="getImageMimeType">getImageMimeType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageorientation.php" title="getImageOrientation">getImageOrientation</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagepage.php" title="getImagePage">getImagePage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagepixelcolor.php" title="getImagePixelColor">getImagePixelColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageprofile.php" title="getImageProfile">getImageProfile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageprofiles.php" title="getImageProfiles">getImageProfiles</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageproperties.php" title="getImageProperties">getImageProperties</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageproperty.php" title="getImageProperty">getImageProperty</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageredprimary.php" title="getImageRedPrimary">getImageRedPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageregion.php" title="getImageRegion">getImageRegion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagerenderingintent.php" title="getImageRenderingIntent">getImageRenderingIntent</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageresolution.php" title="getImageResolution">getImageResolution</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagesblob.php" title="getImagesBlob">getImagesBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagescene.php" title="getImageScene">getImageScene</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagesignature.php" title="getImageSignature">getImageSignature</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagetickspersecond.php" title="getImageTicksPerSecond">getImageTicksPerSecond</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagetotalinkdensity.php" title="getImageTotalInkDensity">getImageTotalInkDensity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagetype.php" title="getImageType">getImageType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimageunits.php" title="getImageUnits">getImageUnits</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagevirtualpixelmethod.php" title="getImageVirtualPixelMethod">getImageVirtualPixelMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagewhitepoint.php" title="getImageWhitePoint">getImageWhitePoint</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getimagewidth.php" title="getImageWidth">getImageWidth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getinterlacescheme.php" title="getInterlaceScheme">getInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getiteratorindex.php" title="getIteratorIndex">getIteratorIndex</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getnumberimages.php" title="getNumberImages">getNumberImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getoption.php" title="getOption">getOption</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpackagename.php" title="getPackageName">getPackageName</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpage.php" title="getPage">getPage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpixeliterator.php" title="getPixelIterator">getPixelIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpixelregioniterator.php" title="getPixelRegionIterator">getPixelRegionIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getpointsize.php" title="getPointSize">getPointSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getquantum.php" title="getQuantum">getQuantum</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getquantumdepth.php" title="getQuantumDepth">getQuantumDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getquantumrange.php" title="getQuantumRange">getQuantumRange</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getregistry.php" title="getRegistry">getRegistry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getreleasedate.php" title="getReleaseDate">getReleaseDate</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getresource.php" title="getResource">getResource</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getresourcelimit.php" title="getResourceLimit">getResourceLimit</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getsamplingfactors.php" title="getSamplingFactors">getSamplingFactors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getsize.php" title="getSize">getSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getsizeoffset.php" title="getSizeOffset">getSizeOffset</a>
                        </li>
                                                <li class="">
                            <a href="imagick.getversion.php" title="getVersion">getVersion</a>
                        </li>
                                                <li class="">
                            <a href="imagick.haldclutimage.php" title="haldClutImage">haldClutImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.hasnextimage.php" title="hasNextImage">hasNextImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.haspreviousimage.php" title="hasPreviousImage">hasPreviousImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.identifyformat.php" title="identifyFormat">identifyFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.identifyimage.php" title="identifyImage">identifyImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.implodeimage.php" title="implodeImage">implodeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.importimagepixels.php" title="importImagePixels">importImagePixels</a>
                        </li>
                                                <li class="">
                            <a href="imagick.inversefouriertransformimage.php" title="inverseFourierTransformImage">inverseFourierTransformImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.labelimage.php" title="labelImage">labelImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.levelimage.php" title="levelImage">levelImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.linearstretchimage.php" title="linearStretchImage">linearStretchImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.liquidrescaleimage.php" title="liquidRescaleImage">liquidRescaleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.listregistry.php" title="listRegistry">listRegistry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.magnifyimage.php" title="magnifyImage">magnifyImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.mergeimagelayers.php" title="mergeImageLayers">mergeImageLayers</a>
                        </li>
                                                <li class="">
                            <a href="imagick.minifyimage.php" title="minifyImage">minifyImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.modulateimage.php" title="modulateImage">modulateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.montageimage.php" title="montageImage">montageImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.morphimages.php" title="morphImages">morphImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.morphology.php" title="morphology">morphology</a>
                        </li>
                                                <li class="">
                            <a href="imagick.motionblurimage.php" title="motionBlurImage">motionBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.negateimage.php" title="negateImage">negateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.newimage.php" title="newImage">newImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.newpseudoimage.php" title="newPseudoImage">newPseudoImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.nextimage.php" title="nextImage">nextImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.normalizeimage.php" title="normalizeImage">normalizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.oilpaintimage.php" title="oilPaintImage">oilPaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.opaquepaintimage.php" title="opaquePaintImage">opaquePaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.optimizeimagelayers.php" title="optimizeImageLayers">optimizeImageLayers</a>
                        </li>
                                                <li class="">
                            <a href="imagick.pingimage.php" title="pingImage">pingImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.pingimageblob.php" title="pingImageBlob">pingImageBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.pingimagefile.php" title="pingImageFile">pingImageFile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.polaroidimage.php" title="polaroidImage">polaroidImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.posterizeimage.php" title="posterizeImage">posterizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.previewimages.php" title="previewImages">previewImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.previousimage.php" title="previousImage">previousImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.profileimage.php" title="profileImage">profileImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.quantizeimage.php" title="quantizeImage">quantizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.quantizeimages.php" title="quantizeImages">quantizeImages</a>
                        </li>
                                                <li class="current">
                            <a href="imagick.queryfontmetrics.php" title="queryFontMetrics">queryFontMetrics</a>
                        </li>
                                                <li class="">
                            <a href="imagick.queryfonts.php" title="queryFonts">queryFonts</a>
                        </li>
                                                <li class="">
                            <a href="imagick.queryformats.php" title="queryFormats">queryFormats</a>
                        </li>
                                                <li class="">
                            <a href="imagick.raiseimage.php" title="raiseImage">raiseImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.randomthresholdimage.php" title="randomThresholdImage">randomThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimage.php" title="readImage">readImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimageblob.php" title="readImageBlob">readImageBlob</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimagefile.php" title="readImageFile">readImageFile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.readimages.php" title="readimages">readimages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.remapimage.php" title="remapImage">remapImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.removeimage.php" title="removeImage">removeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.removeimageprofile.php" title="removeImageProfile">removeImageProfile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.render.php" title="render">render</a>
                        </li>
                                                <li class="">
                            <a href="imagick.resampleimage.php" title="resampleImage">resampleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.resetimagepage.php" title="resetImagePage">resetImagePage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.resizeimage.php" title="resizeImage">resizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.rollimage.php" title="rollImage">rollImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.rotateimage.php" title="rotateImage">rotateImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.rotationalblurimage.php" title="rotationalBlurImage">rotationalBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sampleimage.php" title="sampleImage">sampleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.scaleimage.php" title="scaleImage">scaleImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.segmentimage.php" title="segmentImage">segmentImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.selectiveblurimage.php" title="selectiveBlurImage">selectiveBlurImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.separateimagechannel.php" title="separateImageChannel">separateImageChannel</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sepiatoneimage.php" title="sepiaToneImage">sepiaToneImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setbackgroundcolor.php" title="setBackgroundColor">setBackgroundColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setcolorspace.php" title="setColorspace">setColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setcompression.php" title="setCompression">setCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setcompressionquality.php" title="setCompressionQuality">setCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setfilename.php" title="setFilename">setFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setfirstiterator.php" title="setFirstIterator">setFirstIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setfont.php" title="setFont">setFont</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setformat.php" title="setFormat">setFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setgravity.php" title="setGravity">setGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimage.php" title="setImage">setImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagealphachannel.php" title="setImageAlphaChannel">setImageAlphaChannel</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageartifact.php" title="setImageArtifact">setImageArtifact</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagebackgroundcolor.php" title="setImageBackgroundColor">setImageBackgroundColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageblueprimary.php" title="setImageBluePrimary">setImageBluePrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagebordercolor.php" title="setImageBorderColor">setImageBorderColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagechanneldepth.php" title="setImageChannelDepth">setImageChannelDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecolormapcolor.php" title="setImageColormapColor">setImageColormapColor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecolorspace.php" title="setImageColorspace">setImageColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecompose.php" title="setImageCompose">setImageCompose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecompression.php" title="setImageCompression">setImageCompression</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagecompressionquality.php" title="setImageCompressionQuality">setImageCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagedelay.php" title="setImageDelay">setImageDelay</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagedepth.php" title="setImageDepth">setImageDepth</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagedispose.php" title="setImageDispose">setImageDispose</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageextent.php" title="setImageExtent">setImageExtent</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagefilename.php" title="setImageFilename">setImageFilename</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageformat.php" title="setImageFormat">setImageFormat</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagegamma.php" title="setImageGamma">setImageGamma</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagegravity.php" title="setImageGravity">setImageGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagegreenprimary.php" title="setImageGreenPrimary">setImageGreenPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageinterlacescheme.php" title="setImageInterlaceScheme">setImageInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageinterpolatemethod.php" title="setImageInterpolateMethod">setImageInterpolateMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageiterations.php" title="setImageIterations">setImageIterations</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagematte.php" title="setImageMatte">setImageMatte</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageorientation.php" title="setImageOrientation">setImageOrientation</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagepage.php" title="setImagePage">setImagePage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageprofile.php" title="setImageProfile">setImageProfile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageproperty.php" title="setImageProperty">setImageProperty</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageredprimary.php" title="setImageRedPrimary">setImageRedPrimary</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagerenderingintent.php" title="setImageRenderingIntent">setImageRenderingIntent</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageresolution.php" title="setImageResolution">setImageResolution</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagescene.php" title="setImageScene">setImageScene</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagetickspersecond.php" title="setImageTicksPerSecond">setImageTicksPerSecond</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagetype.php" title="setImageType">setImageType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimageunits.php" title="setImageUnits">setImageUnits</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagevirtualpixelmethod.php" title="setImageVirtualPixelMethod">setImageVirtualPixelMethod</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setimagewhitepoint.php" title="setImageWhitePoint">setImageWhitePoint</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setinterlacescheme.php" title="setInterlaceScheme">setInterlaceScheme</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setiteratorindex.php" title="setIteratorIndex">setIteratorIndex</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setlastiterator.php" title="setLastIterator">setLastIterator</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setoption.php" title="setOption">setOption</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setpage.php" title="setPage">setPage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setpointsize.php" title="setPointSize">setPointSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setprogressmonitor.php" title="setProgressMonitor">setProgressMonitor</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setregistry.php" title="setRegistry">setRegistry</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setresolution.php" title="setResolution">setResolution</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setresourcelimit.php" title="setResourceLimit">setResourceLimit</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setsamplingfactors.php" title="setSamplingFactors">setSamplingFactors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setsize.php" title="setSize">setSize</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setsizeoffset.php" title="setSizeOffset">setSizeOffset</a>
                        </li>
                                                <li class="">
                            <a href="imagick.settype.php" title="setType">setType</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shadeimage.php" title="shadeImage">shadeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shadowimage.php" title="shadowImage">shadowImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sharpenimage.php" title="sharpenImage">sharpenImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shaveimage.php" title="shaveImage">shaveImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.shearimage.php" title="shearImage">shearImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sigmoidalcontrastimage.php" title="sigmoidalContrastImage">sigmoidalContrastImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sketchimage.php" title="sketchImage">sketchImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.smushimages.php" title="smushImages">smushImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.solarizeimage.php" title="solarizeImage">solarizeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.sparsecolorimage.php" title="sparseColorImage">sparseColorImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.spliceimage.php" title="spliceImage">spliceImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.spreadimage.php" title="spreadImage">spreadImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.statisticimage.php" title="statisticImage">statisticImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.steganoimage.php" title="steganoImage">steganoImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.stereoimage.php" title="stereoImage">stereoImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.stripimage.php" title="stripImage">stripImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.subimagematch.php" title="subImageMatch">subImageMatch</a>
                        </li>
                                                <li class="">
                            <a href="imagick.swirlimage.php" title="swirlImage">swirlImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.textureimage.php" title="textureImage">textureImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.thresholdimage.php" title="thresholdImage">thresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.thumbnailimage.php" title="thumbnailImage">thumbnailImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.tintimage.php" title="tintImage">tintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transformimagecolorspace.php" title="transformImageColorspace">transformImageColorspace</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transparentpaintimage.php" title="transparentPaintImage">transparentPaintImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transposeimage.php" title="transposeImage">transposeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.transverseimage.php" title="transverseImage">transverseImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.trimimage.php" title="trimImage">trimImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.uniqueimagecolors.php" title="uniqueImageColors">uniqueImageColors</a>
                        </li>
                                                <li class="">
                            <a href="imagick.unsharpmaskimage.php" title="unsharpMaskImage">unsharpMaskImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.valid.php" title="valid">valid</a>
                        </li>
                                                <li class="">
                            <a href="imagick.vignetteimage.php" title="vignetteImage">vignetteImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.waveimage.php" title="waveImage">waveImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.whitethresholdimage.php" title="whiteThresholdImage">whiteThresholdImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimage.php" title="writeImage">writeImage</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimagefile.php" title="writeImageFile">writeImageFile</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimages.php" title="writeImages">writeImages</a>
                        </li>
                                                <li class="">
                            <a href="imagick.writeimagesfile.php" title="writeImagesFile">writeImagesFile</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="imagick.averageimages.php" title="averageImages">averageImages</a>
                    </li>
                                    <li class="">
                        <a href="imagick.clone.php" title="clone">clone</a>
                    </li>
                                    <li class="">
                        <a href="imagick.colorfloodfillimage.php" title="colorFloodfillImage">colorFloodfillImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.filter.php" title="filter">filter</a>
                    </li>
                                    <li class="">
                        <a href="imagick.flattenimages.php" title="flattenImages">flattenImages</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageattribute.php" title="getImageAttribute">getImageAttribute</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagechannelextrema.php" title="getImageChannelExtrema">getImageChannelExtrema</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageclipmask.php" title="getImageClipMask">getImageClipMask</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageextrema.php" title="getImageExtrema">getImageExtrema</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimageindex.php" title="getImageIndex">getImageIndex</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagematte.php" title="getImageMatte">getImageMatte</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagemattecolor.php" title="getImageMatteColor">getImageMatteColor</a>
                    </li>
                                    <li class="">
                        <a href="imagick.getimagesize.php" title="getImageSize">getImageSize</a>
                    </li>
                                    <li class="">
                        <a href="imagick.mapimage.php" title="mapImage">mapImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.mattefloodfillimage.php" title="matteFloodfillImage">matteFloodfillImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.medianfilterimage.php" title="medianFilterImage">medianFilterImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.mosaicimages.php" title="mosaicImages">mosaicImages</a>
                    </li>
                                    <li class="">
                        <a href="imagick.orderedposterizeimage.php" title="orderedPosterizeImage">orderedPosterizeImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.paintfloodfillimage.php" title="paintFloodfillImage">paintFloodfillImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.paintopaqueimage.php" title="paintOpaqueImage">paintOpaqueImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.painttransparentimage.php" title="paintTransparentImage">paintTransparentImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.radialblurimage.php" title="radialBlurImage">radialBlurImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.recolorimage.php" title="recolorImage">recolorImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.reducenoiseimage.php" title="reduceNoiseImage">reduceNoiseImage</a>
                    </li>
                                    <li class="">
                        <a href="imagick.roundcorners.php" title="roundCorners">roundCorners</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageattribute.php" title="setImageAttribute">setImageAttribute</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimagebias.php" title="setImageBias">setImageBias</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimagebiasquantum.php" title="setImageBiasQuantum">setImageBiasQuantum</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageclipmask.php" title="setImageClipMask">setImageClipMask</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageindex.php" title="setImageIndex">setImageIndex</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimagemattecolor.php" title="setImageMatteColor">setImageMatteColor</a>
                    </li>
                                    <li class="">
                        <a href="imagick.setimageopacity.php" title="setImageOpacity">setImageOpacity</a>
                    </li>
                                    <li class="">
                        <a href="imagick.transformimage.php" title="transformImage">transformImage</a>
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
