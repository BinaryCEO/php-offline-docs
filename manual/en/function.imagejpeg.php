<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagejpeg - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagejpeg.php">
 <link rel="shorturl" href="https://www.php.net/imagejpeg">
 <link rel="alternate" href="https://www.php.net/imagejpeg" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imageistruecolor.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagelayereffect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagejpeg.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagejpeg.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagejpeg.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagejpeg.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagejpeg.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagejpeg.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagejpeg.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagejpeg.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagejpeg.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagejpeg.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagejpeg.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Output image to browser or file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagejpeg - Manual" />
<meta name="twitter:description" content="Output image to browser or file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagejpeg - Manual" />
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
        <a href="function.imagelayereffect.php">
          imagelayereffect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imageistruecolor.php">
          &laquo; imageistruecolor        </a>
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
            <option value='en/function.imagejpeg.php' selected="selected">English</option>
            <option value='de/function.imagejpeg.php'>German</option>
            <option value='es/function.imagejpeg.php'>Spanish</option>
            <option value='fr/function.imagejpeg.php'>French</option>
            <option value='it/function.imagejpeg.php'>Italian</option>
            <option value='ja/function.imagejpeg.php'>Japanese</option>
            <option value='pt_BR/function.imagejpeg.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagejpeg.php'>Russian</option>
            <option value='tr/function.imagejpeg.php'>Turkish</option>
            <option value='uk/function.imagejpeg.php'>Ukrainian</option>
            <option value='zh/function.imagejpeg.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagejpeg" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagejpeg</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagejpeg</span> &mdash; <span class="dc-title">Output image to browser or file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagejpeg-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagejpeg</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$file</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$quality</code><span class="initializer"> = -1</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagejpeg()</strong></span> creates a <abbr title="Joint Photographic Experts Group">JPEG</abbr> file from
   the given <code class="parameter">image</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagejpeg-parameters">
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
    
    
     <dt><code class="parameter">quality</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">quality</code> is optional, and ranges from 0 (worst
       quality, smaller file) to 100 (best quality, biggest file). The 
       default (<code class="literal">-1</code>) uses the default IJG quality value (about 75).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagejpeg-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="caution"><strong class="caution">Caution</strong><p class="simpara">However, if libgd fails to output the image, this function returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</p></div>
 </div>


 <div class="refsect1 errors" id="refsect1-function.imagejpeg-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">quality</code> is invalid.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagejpeg-changelog">
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
      <td>8.4.0</td>
      <td>
       Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">quality</code> is invalid.
      </td>
     </tr>

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


 <div class="refsect1 examples" id="refsect1-function.imagejpeg-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2915">
    <p><strong>Example #1 Outputting a JPEG image to the browser</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a blank image and add some text<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">120</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$text_color </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">233</span><span style="color: #007700">, </span><span style="color: #0000BB">14</span><span style="color: #007700">, </span><span style="color: #0000BB">91</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagestring</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">,  </span><span style="color: #DD0000">'A Simple Text String'</span><span style="color: #007700">, </span><span style="color: #0000BB">$text_color</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the content type header - in this case image/jpeg<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/jpeg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output the image<br /></span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagejpeg.jpg" alt="Output of example : Outputting a JPEG image" width="120" height="20" />
     </div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2916">
    <p><strong>Example #2 Saving a JPEG image to a file</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a blank image and add some text<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">120</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$text_color </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">233</span><span style="color: #007700">, </span><span style="color: #0000BB">14</span><span style="color: #007700">, </span><span style="color: #0000BB">91</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagestring</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">,  </span><span style="color: #DD0000">'A Simple Text String'</span><span style="color: #007700">, </span><span style="color: #0000BB">$text_color</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Save the image as 'simpletext.jpg'<br /></span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'simpletext.jpg'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2917">
    <p><strong>Example #3 Outputting the image at 75% quality to the browser</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a blank image and add some text<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">120</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$text_color </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">233</span><span style="color: #007700">, </span><span style="color: #0000BB">14</span><span style="color: #007700">, </span><span style="color: #0000BB">91</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagestring</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">,  </span><span style="color: #DD0000">'A Simple Text String'</span><span style="color: #007700">, </span><span style="color: #0000BB">$text_color</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the content type header - in this case image/jpeg<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/jpeg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Skip the file parameter using NULL, then set the quality to 75%<br /></span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #0000BB">75</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagejpeg-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If you want to output Progressive JPEGs, you need to set interlacing
    on with <span class="function"><a href="function.imageinterlace.php" class="function">imageinterlace()</a></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.imagejpeg-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagepng.php" class="function" rel="rdfs-seeAlso">imagepng()</a> - Output a PNG image to either the browser or a file</span></li>
   <li><span class="function"><a href="function.imagegif.php" class="function" rel="rdfs-seeAlso">imagegif()</a> - Output image to browser or file</span></li>
   <li><span class="function"><a href="function.imagewbmp.php" class="function" rel="rdfs-seeAlso">imagewbmp()</a> - Output image to browser or file</span></li>
   <li><span class="function"><a href="function.imageinterlace.php" class="function" rel="rdfs-seeAlso">imageinterlace()</a> - Enable or disable interlace</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagejpeg.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagejpeg%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagejpeg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagejpeg.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100059">  <div class="votes">
    <div id="Vu100059">
    <a href="/manual/vote-note.php?id=100059&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100059">
    <a href="/manual/vote-note.php?id=100059&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100059" title="65% like this...">
    44
    </div>
  </div>
  <a href="#100059" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#100059"> &para;</a><div class="date" title="2010-09-22 03:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100059">
<div class="phpcode"><code><span class="html">If string $filename is given and it exists, it will be overwritten.</span></code></div>
  </div>
 </div>
  <div class="note" id="89866">  <div class="votes">
    <div id="Vu89866">
    <a href="/manual/vote-note.php?id=89866&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89866">
    <a href="/manual/vote-note.php?id=89866&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89866" title="65% like this...">
    36
    </div>
  </div>
  <a href="#89866" class="name">
  <strong class="user"><em>francesco@essensys</em></strong></a><a class="genanchor" href="#89866"> &para;</a><div class="date" title="2009-03-26 05:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89866">
<div class="phpcode"><code><span class="html">I didn't find any example like this on the Web, so I mixed pieces together.. hope this will save time to other people!<br /><br />Here's a complete solution to READ any image (gif jpg png) from the FILESYSTEM, SCALE it to a max width/height, SAVE the scaled image to a BLOB field keeping the original image type. Quite tricky.. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">scaleImageFileToBlob</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br /><br />    </span><span class="default">$source_pic </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">;<br />    </span><span class="default">$max_width </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br />    </span><span class="default">$max_height </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /><br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$image_type</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br />    switch (</span><span class="default">$image_type</span><span class="keyword">)<br />    {<br />        case </span><span class="default">1</span><span class="keyword">: </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">); break;<br />        case </span><span class="default">2</span><span class="keyword">: </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);  break;<br />        case </span><span class="default">3</span><span class="keyword">: </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">); break;<br />        default: return </span><span class="string">''</span><span class="keyword">;  break;<br />    }<br /><br />    </span><span class="default">$x_ratio </span><span class="keyword">= </span><span class="default">$max_width </span><span class="keyword">/ </span><span class="default">$width</span><span class="keyword">;<br />    </span><span class="default">$y_ratio </span><span class="keyword">= </span><span class="default">$max_height </span><span class="keyword">/ </span><span class="default">$height</span><span class="keyword">;<br /><br />    if( (</span><span class="default">$width </span><span class="keyword">&lt;= </span><span class="default">$max_width</span><span class="keyword">) &amp;&amp; (</span><span class="default">$height </span><span class="keyword">&lt;= </span><span class="default">$max_height</span><span class="keyword">) ){<br />        </span><span class="default">$tn_width </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">;<br />        </span><span class="default">$tn_height </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">;<br />        }elseif ((</span><span class="default">$x_ratio </span><span class="keyword">* </span><span class="default">$height</span><span class="keyword">) &lt; </span><span class="default">$max_height</span><span class="keyword">){<br />            </span><span class="default">$tn_height </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$x_ratio </span><span class="keyword">* </span><span class="default">$height</span><span class="keyword">);<br />            </span><span class="default">$tn_width </span><span class="keyword">= </span><span class="default">$max_width</span><span class="keyword">;<br />        }else{<br />            </span><span class="default">$tn_width </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$y_ratio </span><span class="keyword">* </span><span class="default">$width</span><span class="keyword">);<br />            </span><span class="default">$tn_height </span><span class="keyword">= </span><span class="default">$max_height</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$tn_width</span><span class="keyword">,</span><span class="default">$tn_height</span><span class="keyword">);<br /><br />    </span><span class="comment">/* Check if this image is PNG or GIF, then set if Transparent*/<br />    </span><span class="keyword">if((</span><span class="default">$image_type </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) OR (</span><span class="default">$image_type</span><span class="keyword">==</span><span class="default">3</span><span class="keyword">))<br />    {<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />        </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">$transparent </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />        </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tn_width</span><span class="keyword">, </span><span class="default">$tn_height</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);<br />    }<br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">,</span><span class="default">$src</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$tn_width</span><span class="keyword">, </span><span class="default">$tn_height</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br /><br />    </span><span class="comment">/*<br />     * imageXXX() only has two options, save as a file, or send to the browser.<br />     * It does not provide you the oppurtunity to manipulate the final GIF/JPG/PNG file stream<br />     * So I start the output buffering, use imageXXX() to output the data stream to the browser, <br />     * get the contents of the stream, and use clean to silently discard the buffered contents.<br />     */<br />    </span><span class="default">ob_start</span><span class="keyword">();<br /><br />    switch (</span><span class="default">$image_type</span><span class="keyword">)<br />    {<br />        case </span><span class="default">1</span><span class="keyword">: </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">); break;<br />        case </span><span class="default">2</span><span class="keyword">: </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);  break; </span><span class="comment">// best quality<br />        </span><span class="keyword">case </span><span class="default">3</span><span class="keyword">: </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); break; </span><span class="comment">// no compression<br />        </span><span class="keyword">default: echo </span><span class="string">''</span><span class="keyword">; break;<br />    }<br /><br />    </span><span class="default">$final_image </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br /><br />    </span><span class="default">ob_end_clean</span><span class="keyword">();<br /><br />    return </span><span class="default">$final_image</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />So, let's suppose you have a form where a user can upload an image, and you have to scale it and save it into your database.<br /><br /><span class="default">&lt;?php<br />    <br />    </span><span class="keyword">[..] </span><span class="comment">// the user has clicked the Submit button..<br />    <br />    // Check if the user entered an image<br />    </span><span class="keyword">if (</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">] != </span><span class="string">''</span><span class="keyword">) {<br />        </span><span class="default">$image </span><span class="keyword">= </span><span class="default">scaleImageFileToBlob</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">]);<br /><br />        if (</span><span class="default">$image </span><span class="keyword">== </span><span class="string">''</span><span class="keyword">) {<br />            echo </span><span class="string">'Image type not supported'</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$image_type </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'type'</span><span class="keyword">];<br />            </span><span class="default">$image </span><span class="keyword">= </span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />            <br />            </span><span class="default">$query  </span><span class="keyword">= </span><span class="string">"UPDATE yourtable SET image_type='</span><span class="default">$image_type</span><span class="string">', image='</span><span class="default">$image</span><span class="string">' WHERE ..."</span><span class="keyword">;<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br />            if (</span><span class="default">$result</span><span class="keyword">) {<br />               echo </span><span class="string">'Image scaled and uploaded'</span><span class="keyword">;<br />             } else {<br />               echo </span><span class="string">'Error running the query'</span><span class="keyword">;<br />             }<br />        }<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112796">  <div class="votes">
    <div id="Vu112796">
    <a href="/manual/vote-note.php?id=112796&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112796">
    <a href="/manual/vote-note.php?id=112796&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112796" title="66% like this...">
    30
    </div>
  </div>
  <a href="#112796" class="name">
  <strong class="user"><em>Bruno de Lima - bruno at tthedreamstone dot net</em></strong></a><a class="genanchor" href="#112796"> &para;</a><div class="date" title="2013-07-23 07:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112796">
<div class="phpcode"><code><span class="html">[[Editor's note: removed the header()-call since it is not required when outputting inline image-data]]
<br />One single code line, solve-me after 3 hours of blind search!
<br />
<br />here is:
<br />
<br />... ob_start();
<br />  imagejpeg( $img, NULL, 100 );
<br />  imagedestroy( $img );
<br />  $i = ob_get_clean();
<br />
<br />echo "&lt;img src='data:image/jpeg;base64," . base64_encode( $i )."'&gt;"; //saviour line!</span></code></div>
  </div>
 </div>
  <div class="note" id="128280">  <div class="votes">
    <div id="Vu128280">
    <a href="/manual/vote-note.php?id=128280&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128280">
    <a href="/manual/vote-note.php?id=128280&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128280" title="77% like this...">
    5
    </div>
  </div>
  <a href="#128280" class="name">
  <strong class="user"><em>Uplink</em></strong></a><a class="genanchor" href="#128280"> &para;</a><div class="date" title="2023-03-03 11:01"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128280">
<div class="phpcode"><code><span class="html">If you use the official Docker images and enable gd with `docker-php-ext-install gd`, you don't get JPEG support by default.<br /><br />If that's you, and you get "Call to undefined function imagejpeg()", the you need to do this before docker-php-ext-install:<br /><br />docker-php-ext-configure gd --with-jpeg<br /><br />You'll also want to install libjpeg-dev for this to work.</span></code></div>
  </div>
 </div>
  <div class="note" id="63887">  <div class="votes">
    <div id="Vu63887">
    <a href="/manual/vote-note.php?id=63887&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63887">
    <a href="/manual/vote-note.php?id=63887&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63887" title="73% like this...">
    7
    </div>
  </div>
  <a href="#63887" class="name">
  <strong class="user"><em>your [dot] sheepy [at] gmail [dot] com</em></strong></a><a class="genanchor" href="#63887"> &para;</a><div class="date" title="2006-04-03 01:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63887">
<div class="phpcode"><code><span class="html">Regarding Carl Gieringer's comment, it is possible to have PHP files in utf-8.  Just make sure the editor does not output BOM, which is unnecessary in utf-8 anyway.<br /><br />Except for any editors from Microsoft, most programmer's editors that supports utf allows you to surpress BOM.</span></code></div>
  </div>
 </div>
  <div class="note" id="83537">  <div class="votes">
    <div id="Vu83537">
    <a href="/manual/vote-note.php?id=83537&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83537">
    <a href="/manual/vote-note.php?id=83537&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83537" title="66% like this...">
    3
    </div>
  </div>
  <a href="#83537" class="name">
  <strong class="user"><em>stefan at colulus dot com</em></strong></a><a class="genanchor" href="#83537"> &para;</a><div class="date" title="2008-05-30 11:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83537">
<div class="phpcode"><code><span class="html">I worked out a script that allows the transfer of alphanumeric data to be placed on an image. The HTML feature is img src and the php feature is imagettftext. This simple code will increment from 1 to 3 on images.<br /><br />code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//ImageCall.php -- This script will call a script to produce the image.<br /></span><span class="keyword">for(</span><span class="default">$next </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;</span><span class="default">$next </span><span class="keyword">&lt; </span><span class="default">4</span><span class="keyword">; </span><span class="default">$next</span><span class="keyword">++){<br />print </span><span class="string">"Image </span><span class="default">$next</span><span class="string">:&lt;br&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;img src = 'Image.php?\$text=</span><span class="default">$next</span><span class="string">'&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">//Image.php -- This script creates a square image and places the text on it.<br /><br />// image size and color<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">77</span><span class="keyword">,</span><span class="default">77</span><span class="keyword">);<br /></span><span class="default">$color1 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x66</span><span class="keyword">,</span><span class="default">0xCC</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color2 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x33</span><span class="keyword">,</span><span class="default">0x66</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color3 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">,</span><span class="default">0x99</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$color4 </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">,</span><span class="default">0x3D</span><span class="keyword">);<br /><br /></span><span class="comment">// image creation<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">$color1</span><span class="keyword">);<br /></span><span class="default">ImageFilledpolygon</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, array (</span><span class="default">76</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">),</span><span class="default">3</span><span class="keyword">,</span><span class="default">$color2</span><span class="keyword">);<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">72</span><span class="keyword">,</span><span class="default">72</span><span class="keyword">,</span><span class="default">$color3</span><span class="keyword">);<br /><br /></span><span class="comment">// determine numeric center of image<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">ImageTTFBBox</span><span class="keyword">(</span><span class="default">45</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="string">'impact'</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'$text'</span><span class="keyword">]);<br /></span><span class="default">$X </span><span class="keyword">= (</span><span class="default">77 </span><span class="keyword">- (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]- </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])))/</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$Y </span><span class="keyword">= ((</span><span class="default">77 </span><span class="keyword">- (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$size</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">])))/</span><span class="default">2 </span><span class="keyword">+ (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] - </span><span class="default">$size</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">])));<br /><br /></span><span class="comment">//places numeric information on image<br /></span><span class="default">ImageTTFText</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,(</span><span class="default">$X</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">),</span><span class="default">$Y</span><span class="keyword">,</span><span class="default">$color4</span><span class="keyword">,</span><span class="string">'impact'</span><span class="keyword">,</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'$text'</span><span class="keyword">]);<br /><br /></span><span class="comment">//returns completed image to calling script<br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);<br /></span><span class="default">Imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55987">  <div class="votes">
    <div id="Vu55987">
    <a href="/manual/vote-note.php?id=55987&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55987">
    <a href="/manual/vote-note.php?id=55987&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55987" title="62% like this...">
    2
    </div>
  </div>
  <a href="#55987" class="name">
  <strong class="user"><em>Bram Van Dam</em></strong></a><a class="genanchor" href="#55987"> &para;</a><div class="date" title="2005-08-19 12:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55987">
<div class="phpcode"><code><span class="html">If you wish to capture the jpg data into a variable, rather than outputting it or saving it into a file (perhaps so you can put it in a database), you might want to consider output buffering. Something along these lines should work:<br /><br /><span class="default">&lt;?php<br />ob_start</span><span class="keyword">(); </span><span class="comment">// start a new output buffer<br />    </span><span class="default">imagejpeg</span><span class="keyword">( </span><span class="default">$newimage</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">100 </span><span class="keyword">);<br />    </span><span class="default">$ImageData </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br /></span><span class="default">ob_end_clean</span><span class="keyword">; </span><span class="comment">// stop this output buffer<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90102">  <div class="votes">
    <div id="Vu90102">
    <a href="/manual/vote-note.php?id=90102&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90102">
    <a href="/manual/vote-note.php?id=90102&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90102" title="55% like this...">
    1
    </div>
  </div>
  <a href="#90102" class="name">
  <strong class="user"><em>viciousVelo</em></strong></a><a class="genanchor" href="#90102"> &para;</a><div class="date" title="2009-04-06 07:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90102">
<div class="phpcode"><code><span class="html">for those who get the message "permission denied" or "unable to access": it looks like a problem with your writepermissions to this folder. no matter if you use windows- or linuxserver, be sure the correct user has the permission to write to the correct folder.</span></code></div>
  </div>
 </div>
  <div class="note" id="68231">  <div class="votes">
    <div id="Vu68231">
    <a href="/manual/vote-note.php?id=68231&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68231">
    <a href="/manual/vote-note.php?id=68231&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68231" title="55% like this...">
    1
    </div>
  </div>
  <a href="#68231" class="name">
  <strong class="user"><em>Darren Kulp ( kulp at thekulp dot com )</em></strong></a><a class="genanchor" href="#68231"> &para;</a><div class="date" title="2006-07-18 08:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68231">
<div class="phpcode"><code><span class="html">With regard to chris.calo's code:<br /><br />// The following block retrieves the source file.  It assumes the filename extensions match the file's format.<br />   if ( strpos($source_file,".gif") ) { $img_source = imagecreatefromgif($source_file); }<br />   if ( (strpos($source_file,".jpg")) || (strpos($source_file,".jpeg")) )<br /> ... etc.<br /><br />It assumes more than that, namely that the filename does not contain the strings '.gif', '.jpg', '.jpeg', '.bmp', or '.png' *anywhere* in the string. Some valid files with special filenames could break this; for example, a file named "used.to.be.a.png.file.gif" would cause this script to attempt to load the file as a PNG. Obviously this is a rare case, but the issue could be easily avoided by using "else ifs" (uses less CPU time) or checking that the extension abuts the end of the string or both.<br /><br />That said, the whole business could be avoided if PHP didn't clutter the namespace with different functions to do the same thing with different image formats. Ick.</span></code></div>
  </div>
 </div>
  <div class="note" id="76780">  <div class="votes">
    <div id="Vu76780">
    <a href="/manual/vote-note.php?id=76780&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76780">
    <a href="/manual/vote-note.php?id=76780&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76780" title="53% like this...">
    1
    </div>
  </div>
  <a href="#76780" class="name">
  <strong class="user"><em>Elliott Brueggeman</em></strong></a><a class="genanchor" href="#76780"> &para;</a><div class="date" title="2007-07-30 09:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76780">
<div class="phpcode"><code><span class="html">I did an experiment with the image quality parameter of the imagejpeg() function when creating jpegs. I found the optimal image quality with file size is taken into account to be 80 - very close to the default value of 75.<br /><br />Anything over 80 results in an unnecessary increase in file size without much increase in image quality.<br /><br />Results and sample pictures: <a href="http://www.ebrueggeman.com/article_php_image_optimization.php" rel="nofollow" target="_blank">http://www.ebrueggeman.com/article_php_image_optimization.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="17491">  <div class="votes">
    <div id="Vu17491">
    <a href="/manual/vote-note.php?id=17491&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17491">
    <a href="/manual/vote-note.php?id=17491&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17491" title="53% like this...">
    1
    </div>
  </div>
  <a href="#17491" class="name">
  <strong class="user"><em>dklein at gmx dot de</em></strong></a><a class="genanchor" href="#17491"> &para;</a><div class="date" title="2001-12-11 08:52"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17491">
<div class="phpcode"><code><span class="html">Looks like any specified resolution settings in a JPEG file get lost when using imageJPEG() function in a script.
<br />I had a high resolution JPEG which i added text to with imagestringup() so my customer can print the emailed JPEG as a filled form, but printing both Graphics from Photoshop revealed that any JPEG created is downsampled to 72 dpi, while width and height is kept.
<br />(72 dpi is the standard web resolution)
<br />Nothing to wonder about, but maybe if you read this you dont need to scratch your head :)</span></code></div>
  </div>
 </div>
  <div class="note" id="124248">  <div class="votes">
    <div id="Vu124248">
    <a href="/manual/vote-note.php?id=124248&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124248">
    <a href="/manual/vote-note.php?id=124248&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124248" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124248" class="name">
  <strong class="user"><em>flying man</em></strong></a><a class="genanchor" href="#124248"> &para;</a><div class="date" title="2019-09-29 08:10"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124248">
<div class="phpcode"><code><span class="html">ZERO BYTE FILE RESULT - HERE'S WHY!<br /><br />Take to heart that CAUTION note on this function. If gdlib fails to output, it still returns true!  I'd call that a bug personally.<br /><br />GD will fail to output if you have an image exceeding its maximum undisclosed dimensions of 65500 pixels.<br /><br />You'll get a zero byte file instead</span></code></div>
  </div>
 </div>
  <div class="note" id="91368">  <div class="votes">
    <div id="Vu91368">
    <a href="/manual/vote-note.php?id=91368&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91368">
    <a href="/manual/vote-note.php?id=91368&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91368" title="50% like this...">
    0
    </div>
  </div>
  <a href="#91368" class="name">
  <strong class="user"><em>tomas at dundacek dot cz</em></strong></a><a class="genanchor" href="#91368"> &para;</a><div class="date" title="2009-06-08 01:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91368">
<div class="phpcode"><code><span class="html">I had a problem with denied permissions when trying to upload AND resize an image having safe_mode on. This caused that I couldn't create the new file in which I wanted to resampled the image with nor with imagejpeg() nor with touch() and imagejpeg() after it. <br /><br />Here is my solution, I didn't test, but it's possible, it is biting some memory:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">resize</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$target_file</span><span class="keyword">) {<br />  </span><span class="comment">// $image is the uploaded image<br />  </span><span class="keyword">list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">]);<br /><br />  </span><span class="comment">//setup the new size of the image<br />  </span><span class="default">$ratio </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">/</span><span class="default">$height</span><span class="keyword">;<br />  </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">;<br />  </span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">$new_height </span><span class="keyword">* </span><span class="default">$ratio</span><span class="keyword">;<br /><br />  </span><span class="comment">//move the file in the new location<br />  </span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">], </span><span class="default">$target_file</span><span class="keyword">);<br />  <br />  </span><span class="comment">// resample the image        <br />  </span><span class="default">$new_image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">);<br />  </span><span class="default">$old_image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$target_file</span><span class="keyword">);<br />  </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">,</span><span class="default">$old_image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);        <br /><br />  </span><span class="comment">//output<br />  </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">, </span><span class="default">$target_file</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />As you can see, the function moves the uploaded file where you want to save the resampled image (move_uploaded_file is not restricted by safe_mode) and then you can resample the image, because it was created by moving it already. <br /><br />Note: the directory where you want to save the file must have permissions set to 0777.</span></code></div>
  </div>
 </div>
  <div class="note" id="86858">  <div class="votes">
    <div id="Vu86858">
    <a href="/manual/vote-note.php?id=86858&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86858">
    <a href="/manual/vote-note.php?id=86858&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86858" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86858" class="name">
  <strong class="user"><em>soapergem at gmail dot com</em></strong></a><a class="genanchor" href="#86858"> &para;</a><div class="date" title="2008-11-06 01:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86858">
<div class="phpcode"><code><span class="html">I came here looking for something similar to the getJPEGresolution function, but noticed the drawbacks that were pointed out in the last post. So, after drawing on some other code examples on the web, I put together the following function which should always properly return the correct values. (But remember that you still need to have the EXIF extension installed with your instance of PHP for this to work!)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">jpeg_dpi</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />{<br />    if ( </span><span class="default">exif_imagetype</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) != </span><span class="default">IMAGETYPE_JPEG </span><span class="keyword">) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'IFD0'</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    if ( isset(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'XResolution'</span><span class="keyword">]) &amp;&amp; isset(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'YResolution'</span><span class="keyword">]) ) {<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@^(\\d+)/(\\d+)$@e'</span><span class="keyword">, </span><span class="string">'$1/$2'</span><span class="keyword">, </span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'XResolution'</span><span class="keyword">]));<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@^(\\d+)/(\\d+)$@e'</span><span class="keyword">, </span><span class="string">'$1/$2'</span><span class="keyword">, </span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'YResolution'</span><span class="keyword">]));<br />    }<br />    <br />    if ( !</span><span class="default">$x </span><span class="keyword">&amp;&amp; !</span><span class="default">$y </span><span class="keyword">&amp;&amp; </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">) ) {<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        <br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">14</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">));<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">));<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">));<br />    }<br />    <br />    if ( </span><span class="default">$x </span><span class="keyword">|| </span><span class="default">$y </span><span class="keyword">) {<br />        return array(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This function returns an array with the x-resolution, y-resolution when they can be determined, otherwise FALSE.</span></code></div>
  </div>
 </div>
  <div class="note" id="86493">  <div class="votes">
    <div id="Vu86493">
    <a href="/manual/vote-note.php?id=86493&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86493">
    <a href="/manual/vote-note.php?id=86493&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86493" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86493" class="name">
  <strong class="user"><em>ahows at noggin dot com dot au</em></strong></a><a class="genanchor" href="#86493"> &para;</a><div class="date" title="2008-10-21 10:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86493">
<div class="phpcode"><code><span class="html">Regarding the code below, it only grabs the last byte of the DPI information in JFIF-mode. I was wondering why my 300-DPI file was being reported as 44. 300 - 256 = 44 of course.</span></code></div>
  </div>
 </div>
  <div class="note" id="85711">  <div class="votes">
    <div id="Vu85711">
    <a href="/manual/vote-note.php?id=85711&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85711">
    <a href="/manual/vote-note.php?id=85711&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85711" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85711" class="name">
  <strong class="user"><em>lorezyra (at) lorezyra (dot) com</em></strong></a><a class="genanchor" href="#85711"> &para;</a><div class="date" title="2008-09-13 06:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85711">
<div class="phpcode"><code><span class="html">For those looking to grab the resolution of a JPEG image without using GD nor ImageMagic... I wrote this simple function.<br /><br />Too bad GD doesn't have this very simple function for us to use...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getJPEGresolution</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">){<br />    </span><span class="default">$outRez</span><span class="keyword">=array();<br />    </span><span class="comment">// Read the file<br />    </span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">// start a new output buffer<br />    </span><span class="default">$image   </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    <br />    </span><span class="comment">// grab DPI information from the JPG header<br />    </span><span class="default">$outRez</span><span class="keyword">[</span><span class="string">"xDPI"</span><span class="keyword">] = </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">[</span><span class="default">15</span><span class="keyword">]);<br />    </span><span class="default">$outRez</span><span class="keyword">[</span><span class="string">"yDPI"</span><span class="keyword">] = </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">[</span><span class="default">17</span><span class="keyword">]);<br />    </span><span class="default">ob_end_clean</span><span class="keyword">(); </span><span class="comment">// stop this output buffer<br /><br />    //xDPI and yDPI should equal in value... but we output both anyway...<br />    </span><span class="keyword">return(</span><span class="default">$outRez</span><span class="keyword">);<br />}</span><span class="comment">//end function getJPEGresolution<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81854">  <div class="votes">
    <div id="Vu81854">
    <a href="/manual/vote-note.php?id=81854&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81854">
    <a href="/manual/vote-note.php?id=81854&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81854" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81854" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#81854"> &para;</a><div class="date" title="2008-03-16 10:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81854">
<div class="phpcode"><code><span class="html">Here is a function to resize an image and maintain aspect ratio. It will resize jpeg, gif or png and could easily be modified to add bmp. The name field is the destination of the file minus the file extension:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//name= filename minus type<br />    </span><span class="keyword">function </span><span class="default">createImage</span><span class="keyword">(</span><span class="default">$uploadedfile</span><span class="keyword">,</span><span class="default">$newWidth</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">) <br />    {<br />        </span><span class="comment">// Capture the original size of the uploaded image<br />        </span><span class="keyword">if(!</span><span class="default">$info</span><span class="keyword">=</span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$uploadedfile</span><span class="keyword">))<br />          return </span><span class="default">false</span><span class="keyword">;<br />        <br />        switch (</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'mime'</span><span class="keyword">]) <br />        {<br />            case </span><span class="string">'image/jpeg'</span><span class="keyword">:<br />                </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$uploadedfile</span><span class="keyword">);<br />                break;<br />            case </span><span class="string">'image/gif'</span><span class="keyword">:<br />                </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$uploadedfile</span><span class="keyword">);<br />                break;<br />            case </span><span class="string">'image/png'</span><span class="keyword">:<br />                </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$uploadedfile</span><span class="keyword">);<br />                break;<br />            default:<br />                return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="comment">//Change the filename to add the filetype<br />        </span><span class="default">$mime</span><span class="keyword">=</span><span class="default">split</span><span class="keyword">(</span><span class="string">"image/"</span><span class="keyword">,</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'mime'</span><span class="keyword">]);<br />        </span><span class="default">$filename</span><span class="keyword">=</span><span class="default">$name</span><span class="keyword">.</span><span class="string">"."</span><span class="keyword">.</span><span class="default">$mime</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        <br />        </span><span class="default">$size </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$uploadedfile</span><span class="keyword">);<br />        </span><span class="default">$newHeight</span><span class="keyword">=</span><span class="default">aspect_ratio</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$newWidth</span><span class="keyword">,</span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        <br />        </span><span class="default">$tmp</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$newWidth</span><span class="keyword">,</span><span class="default">$newHeight</span><span class="keyword">);<br />        <br />        </span><span class="comment">// this line actually does the image resizing, copying from the original<br />        // image into the $tmp image<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">,</span><span class="default">$src</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$newWidth</span><span class="keyword">,</span><span class="default">$newHeight</span><span class="keyword">,</span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$info</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        <br />        switch (</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'mime'</span><span class="keyword">])<br />        {<br />            case </span><span class="string">'image/jpeg'</span><span class="keyword">:<br />                </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">,</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">); </span><span class="comment">//100 is the quality settings, values range from 0-100.<br />                </span><span class="keyword">break;<br />            case </span><span class="string">'image/gif'</span><span class="keyword">:<br />                </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">,</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">); </span><span class="comment">//100 is the quality settings, values range from 0-100.<br />                </span><span class="keyword">break;<br />            case </span><span class="string">'image/png'</span><span class="keyword">:<br />                </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">,</span><span class="default">$filename</span><span class="keyword">); </span><span class="comment">//100 is the quality settings, values range from 0-100.<br />                </span><span class="keyword">break;<br />        }<br />            <br />        </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />        </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">); </span><span class="comment">// NOTE: PHP will clean up the temp file it created when the request<br />        // has completed.<br />        </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    if(!</span><span class="default">createImage</span><span class="keyword">(</span><span class="default">$uploadedfile</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">, </span><span class="string">"uploaded_images/imgname"</span><span class="keyword">))<br />    {<br />      echo </span><span class="string">"error"</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69168">  <div class="votes">
    <div id="Vu69168">
    <a href="/manual/vote-note.php?id=69168&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69168">
    <a href="/manual/vote-note.php?id=69168&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69168" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69168" class="name">
  <strong class="user"><em>webmaster at jongliertreff dot de</em></strong></a><a class="genanchor" href="#69168"> &para;</a><div class="date" title="2006-08-25 04:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69168">
<div class="phpcode"><code><span class="html">Here's another on-the-fly thumbnail creation script.
<br />When I scripted the pictuerviewer on my page, I had all the pictures only in full size and qualit, because I wanted the posibility für visitors to download the pictures.
<br />But as Imagesizes of more than 4 MP are to large for websites, I created thumbnails and the smaller pictures on the fly. But I found out, that the Script needed too much RAM, especially in the thumbnail overview, when I had more then 50 thumbnails to create on the fly at the same time.
<br />
<br />So I modified my image creator and my viewer to let them store images, that are created. So only the first visitor has to wait (which is usually me for controlling the uploads und updates), all other visitors get the stored images, which is much faster.
<br />
<br />Create different folders. I have a main folder called 'imagesdb' and the tree subfolders full (Full quality images), show (images for the picture viewer) and thumb (for thumbnails in overview).
<br />
<br />Store the script for example as image.php and link it like that:
<br />
<br /><span class="default">&lt;?PHP
<br />$image_name </span><span class="keyword">= </span><span class="string">"foo.jpg"</span><span class="keyword">;
<br /></span><span class="default">$style </span><span class="keyword">= </span><span class="string">"show"</span><span class="keyword">;
<br />     </span><span class="comment">// I've taken the foldernames. It's easier. For the 
<br />     //thumbnails replace "show" with "thumb".
<br /></span><span class="default">$image_name </span><span class="keyword">= </span><span class="string">"imagesdb/</span><span class="default">$style</span><span class="string">/</span><span class="default">$image_name</span><span class="string">"</span><span class="keyword">;
<br />if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$image_name</span><span class="keyword">))
<br />        </span><span class="default">$image_name </span><span class="keyword">= </span><span class="string">"image.php?image_name=</span><span class="default">$image_name</span><span class="string">&amp;style=</span><span class="default">$style</span><span class="string">"</span><span class="keyword">;
<br />     </span><span class="comment">// only if file doesn't exist call the on-the-fly creating file
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now the main script, stored in the file image.php:
<br />
<br /><span class="default">&lt;?PHP
<br />
<br />$image_name </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'image_name'</span><span class="keyword">];
<br /></span><span class="default">$style </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'style'</span><span class="keyword">];
<br />
<br />     </span><span class="comment">// Now set the maximum sizes to the different styles.
<br />     // You may set additional styles, but remember to
<br />     // create the according subfolders.
<br />
<br /></span><span class="keyword">switch(</span><span class="default">$style</span><span class="keyword">) {
<br />  case </span><span class="string">"show"</span><span class="keyword">:
<br />    </span><span class="default">$max_size </span><span class="keyword">= </span><span class="default">800</span><span class="keyword">;
<br />    break;
<br />  case </span><span class="string">"thumb"</span><span class="keyword">:
<br />    </span><span class="default">$max_size </span><span class="keyword">= </span><span class="default">125</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$dest_file </span><span class="keyword">= </span><span class="string">"imagesdb/</span><span class="default">$style</span><span class="string">/</span><span class="default">$image_name</span><span class="string">"</span><span class="keyword">;
<br />     </span><span class="comment">// set output file
<br /></span><span class="default">$image_file </span><span class="keyword">= </span><span class="string">"imagesdb/full/</span><span class="default">$image_name</span><span class="string">"</span><span class="keyword">;
<br />     </span><span class="comment">// set source file
<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$image_file</span><span class="keyword">);
<br />     </span><span class="comment">// get original size
<br />
<br /></span><span class="keyword">if(</span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &gt; </span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) {
<br />  </span><span class="default">$divisor </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$max_size</span><span class="keyword">;
<br />}
<br />else {
<br />  </span><span class="default">$divisor </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] / </span><span class="default">$max_size</span><span class="keyword">;
<br />}
<br />     </span><span class="comment">// to get allways pictures of the same size, which ist
<br />     // mostly wanted in imageviewers, look what ist larger:
<br />     // width or height
<br />
<br /></span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$divisor</span><span class="keyword">;
<br /></span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] / </span><span class="default">$divisor</span><span class="keyword">;
<br />     </span><span class="comment">// set new sizes
<br />
<br /></span><span class="default">settype</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">, </span><span class="string">'integer'</span><span class="keyword">);
<br /></span><span class="default">settype</span><span class="keyword">(</span><span class="default">$new_height</span><span class="keyword">, </span><span class="string">'integer'</span><span class="keyword">);
<br />     </span><span class="comment">// sizes should be integers
<br />
<br /></span><span class="default">$image_big </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$image_file</span><span class="keyword">);
<br />     </span><span class="comment">// load original image
<br /></span><span class="default">$image_small </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">);
<br />     </span><span class="comment">// create new image
<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$image_small</span><span class="keyword">, </span><span class="default">$image_big</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_width</span><span class="keyword">,</span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />     </span><span class="comment">// imageresampled whill result in a much higher quality
<br />     // than imageresized
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image_big</span><span class="keyword">);
<br />     </span><span class="comment">// the original data are no longer used
<br />
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);
<br />
<br />if(</span><span class="default">$style</span><span class="keyword">==</span><span class="string">"show" </span><span class="keyword">|| </span><span class="default">$style</span><span class="keyword">==</span><span class="string">"thumb"</span><span class="keyword">) {
<br />  if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$dest_file</span><span class="keyword">))
<br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image_small</span><span class="keyword">, </span><span class="default">$dest_file</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);
<br />}
<br />     </span><span class="comment">// if you have set additional sizese put them in the
<br />     // if-arguments, too.
<br />     // if someone calls the image.php directly in the
<br />     // browser with imagenames allready existing, they
<br />     // won't be overwritten
<br />
<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image_small</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image_small</span><span class="keyword">);
<br />     </span><span class="comment">// finally send image to browser and destroy no longer
<br />     // needed data.
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />As this website helped me for several times in the past and for creating this script, I hope I can help others with this script saving the time for developing a much more performant solution than an allways-on-the-fly-creating script.</span></code></div>
  </div>
 </div>
  <div class="note" id="68333">  <div class="votes">
    <div id="Vu68333">
    <a href="/manual/vote-note.php?id=68333&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68333">
    <a href="/manual/vote-note.php?id=68333&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68333" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68333" class="name">
  <strong class="user"><em>stuart at purpletoucan dot com</em></strong></a><a class="genanchor" href="#68333"> &para;</a><div class="date" title="2006-07-23 10:55"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68333">
<div class="phpcode"><code><span class="html">Thanks to Chris dot Calo for the thumbnail snippet.  The file type issue is easily resolved by getting the type from the file with getimagesize, and you can handle unsupported types at that stage too.  Thus:<br /><br />   list($img_width,$img_height, $type) = getimagesize($source_file); // Get the original dimentions<br />   if ($type != 1 &amp;&amp; $type != 2 &amp;&amp; $type != 3 &amp;&amp; $type != 15) { die("Your file is not a supported format"); }<br /><br />...and then later check the type again to open the image correctly:<br /><br />   if ( $type == 1 ) { $img_source = imagecreatefromgif($source_file); }<br />   else if ( $type == 2 ) { $img_source = imagecreatefromjpeg($source_file); }<br />   else if ( $type == 3 ) { $img_source = imagecreatefrompng($source_file); }<br />   else if ( $type == 15 ) { $img_source = imagecreatefromwbmp($source_file); }</span></code></div>
  </div>
 </div>
  <div class="note" id="60315">  <div class="votes">
    <div id="Vu60315">
    <a href="/manual/vote-note.php?id=60315&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60315">
    <a href="/manual/vote-note.php?id=60315&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60315" title="50% like this...">
    0
    </div>
  </div>
  <a href="#60315" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#60315"> &para;</a><div class="date" title="2006-01-03 05:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60315">
<div class="phpcode"><code><span class="html">Hi<br /><br />I had similar problem with safe mode. My solution is:<br /><br />before imagejpeg(), touch() etc.<br />write:<br />ini_set(safe_mode,Off);<br />and after everything:<br />ini_set(safe_mode,On);<br /><br />strange, but it works <br />Chears2All</span></code></div>
  </div>
 </div>
  <div class="note" id="58391">  <div class="votes">
    <div id="Vu58391">
    <a href="/manual/vote-note.php?id=58391&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58391">
    <a href="/manual/vote-note.php?id=58391&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58391" title="50% like this...">
    0
    </div>
  </div>
  <a href="#58391" class="name">
  <strong class="user"><em>moron at industrial dot org</em></strong></a><a class="genanchor" href="#58391"> &para;</a><div class="date" title="2005-11-02 08:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58391">
<div class="phpcode"><code><span class="html">Please note that there is a bug report open for the currently broken safe_mode behaviour on this function:<br /><br /><a href="http://bugs.php.net/?id=35060" rel="nofollow" target="_blank">http://bugs.php.net/?id=35060</a><br /><br />According to the PHP staffer who has responded the docs are wrong (I don't agree but I'm also not their employee).  <br /><br />The work around is to use touch() (or any other file system function that can do this) to create the file first before using imagejpeg().</span></code></div>
  </div>
 </div>
  <div class="note" id="56893">  <div class="votes">
    <div id="Vu56893">
    <a href="/manual/vote-note.php?id=56893&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56893">
    <a href="/manual/vote-note.php?id=56893&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56893" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56893" class="name">
  <strong class="user"><em>mbailey [at] aethon [dt] co [dt] uk</em></strong></a><a class="genanchor" href="#56893"> &para;</a><div class="date" title="2005-09-18 01:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56893">
<div class="phpcode"><code><span class="html">&gt;&gt;Bram Van Dam's<br /><br />note below is missing "()" from the ob_end_clean call:<br /><br />ob_end_clean; // stop this output buffer<br /><br />should read<br /><br />ob_end_clean(); // stop this output buffer<br /><br />You can then use this for adding content-length headers (for example flash requires a content length in advance to create loaders)<br /><br />e.g.<br /><br />...<br /><br />ob_start(); // start a new output buffer<br />   imagejpeg( $newimage, "", 90 );<br />   $ImageData = ob_get_contents();<br />   $ImageDataLength = ob_get_length();<br />ob_end_clean(); // stop this output buffer<br /><br />header("Content-type: image/jpeg") ;<br />header("Content-Length: ".$ImageDataLength);<br />echo $ImageData;<br /><br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="42654">  <div class="votes">
    <div id="Vu42654">
    <a href="/manual/vote-note.php?id=42654&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42654">
    <a href="/manual/vote-note.php?id=42654&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42654" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42654" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#42654"> &para;</a><div class="date" title="2004-05-25 11:42"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42654">
<div class="phpcode"><code><span class="html">A word of warning when outputting images to the browser...<br /><br />Make sure there is no extra spaces around the <span class="default">&lt;?php ?&gt;</span> tags, in the file you are editing, and also any included files.<br /><br />I began to think there was a bug in GD or something, and I checked the file I was working on, but forgot about the includes...<br /><br />Hours gone..</span></code></div>
  </div>
 </div>
  <div class="note" id="53666">  <div class="votes">
    <div id="Vu53666">
    <a href="/manual/vote-note.php?id=53666&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53666">
    <a href="/manual/vote-note.php?id=53666&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53666" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#53666" class="name">
  <strong class="user"><em>ghokanso at cs dot ndsu dot edu</em></strong></a><a class="genanchor" href="#53666"> &para;</a><div class="date" title="2005-06-08 09:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53666">
<div class="phpcode"><code><span class="html">When displaying an image using imagepng or imagejpeg, you may want/need to call "header("Content-type: image/jpeg")" before the imagepng and imagejpeg functions.<br />It appears that some servers/browers are striping out the default header so the image is not rendered and appears as raw data.<br />(Firefox 1.02+ and OSX Safari for example)</span></code></div>
  </div>
 </div>
  <div class="note" id="32503">  <div class="votes">
    <div id="Vu32503">
    <a href="/manual/vote-note.php?id=32503&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32503">
    <a href="/manual/vote-note.php?id=32503&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32503" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#32503" class="name">
  <strong class="user"><em>irishcybernerd at email dot com</em></strong></a><a class="genanchor" href="#32503"> &para;</a><div class="date" title="2003-05-29 10:33"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32503">
<div class="phpcode"><code><span class="html">Rather than using the temporary file, as described above, you can buffer the output stream. Someone else showed me this, and it seems to work very nicely.<br /><br />    //Start buffering the output stream<br />    ob_start();<br /><br />    // output the image as a file to the output stream<br />    Imagejpeg($im);<br />    <br />    //Read the output buffer<br />    $buffer = ob_get_contents();<br /><br />    //clear the buffer<br />    ob_end_clean();<br /><br />    //use $buffer as you wish...</span></code></div>
  </div>
 </div>
  <div class="note" id="78523">  <div class="votes">
    <div id="Vu78523">
    <a href="/manual/vote-note.php?id=78523&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78523">
    <a href="/manual/vote-note.php?id=78523&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78523" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#78523" class="name">
  <strong class="user"><em>Michaelsoft</em></strong></a><a class="genanchor" href="#78523"> &para;</a><div class="date" title="2007-10-16 02:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78523">
<div class="phpcode"><code><span class="html">[Editor's note: fixed according to the note of roberto at ilpiola.it]
<br />
<br />I could not find any information on changing the DPI information on a JPG file using the GD lib. Since changing this does not resize or scale the actual image, it is only a header-setting.
<br />The following snipplet will save your $image to $file and set the DPI to 150.
<br />
<br /><span class="default">&lt;?php
<br />
<br />  imagejpeg</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">75</span><span class="keyword">);
<br />
<br />  </span><span class="comment">// Change DPI
<br />  </span><span class="default">$dpi_x   </span><span class="keyword">= </span><span class="default">150</span><span class="keyword">;
<br />  </span><span class="default">$dpi_y   </span><span class="keyword">= </span><span class="default">150</span><span class="keyword">;
<br />  
<br />  </span><span class="comment">// Read the file
<br />  </span><span class="default">$size    </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />  </span><span class="default">$image   </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />
<br />  </span><span class="comment">// Update DPI information in the JPG header
<br />  </span><span class="default">$image</span><span class="keyword">[</span><span class="default">13</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />  </span><span class="default">$image</span><span class="keyword">[</span><span class="default">14</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$dpi_x</span><span class="keyword">/</span><span class="default">256</span><span class="keyword">));
<br />  </span><span class="default">$image</span><span class="keyword">[</span><span class="default">15</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(      </span><span class="default">$dpi_x</span><span class="keyword">%</span><span class="default">256</span><span class="keyword">);
<br />  </span><span class="default">$image</span><span class="keyword">[</span><span class="default">16</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$dpi_y</span><span class="keyword">/</span><span class="default">256</span><span class="keyword">));
<br />  </span><span class="default">$image</span><span class="keyword">[</span><span class="default">17</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(      </span><span class="default">$dpi_y</span><span class="keyword">%</span><span class="default">256</span><span class="keyword">);
<br />
<br />  </span><span class="comment">// Write the new JPG
<br />  </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);
<br />  </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">);
<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />P.s. not fully tested (yet) but it works for my images ...</span></code></div>
  </div>
 </div>
  <div class="note" id="43560">  <div class="votes">
    <div id="Vu43560">
    <a href="/manual/vote-note.php?id=43560&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43560">
    <a href="/manual/vote-note.php?id=43560&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43560" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#43560" class="name">
  <strong class="user"><em>Kokesh</em></strong></a><a class="genanchor" href="#43560"> &para;</a><div class="date" title="2004-06-25 09:42"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43560">
<div class="phpcode"><code><span class="html">Here is the simple, but powerful script for creating thumbnails on the fly. <br />You can include the script <br />directly to www page - just put it in &lt;img src= tag. <br />with width 150pix. <br />This resizer respects the ASPECT RATIO.<br />Here is the script:<br /><span class="default">&lt;?php<br /></span><span class="comment">// Use it this way: resize.php?pic=imageurl&amp;width=width_in_pixels<br />// kokesh@kokeshnet.com 2004<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br />    </span><span class="default">$im     </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);<br />    </span><span class="default">$orange </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">210</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">);<br />    </span><span class="default">$px     </span><span class="keyword">= (</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">) - </span><span class="default">7.5 </span><span class="keyword">* </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) / </span><span class="default">2</span><span class="keyword">;<br /><br />    </span><span class="default">$old_x</span><span class="keyword">=</span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">$old_y</span><span class="keyword">=</span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br />    </span><span class="default">$new_w</span><span class="keyword">=(int)(</span><span class="default">$width</span><span class="keyword">);<br />    if ((</span><span class="default">$new_w</span><span class="keyword">&lt;=</span><span class="default">0</span><span class="keyword">) or (</span><span class="default">$new_w</span><span class="keyword">&gt;</span><span class="default">$old_x</span><span class="keyword">)) {<br />      </span><span class="default">$new_w</span><span class="keyword">=</span><span class="default">$old_x</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$new_h</span><span class="keyword">=(</span><span class="default">$old_x</span><span class="keyword">*(</span><span class="default">$new_w</span><span class="keyword">/</span><span class="default">$old_x</span><span class="keyword">));<br /><br />    if (</span><span class="default">$old_x </span><span class="keyword">&gt; </span><span class="default">$old_y</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w</span><span class="keyword">=</span><span class="default">$new_w</span><span class="keyword">;<br />        </span><span class="default">$thumb_h</span><span class="keyword">=</span><span class="default">$old_y</span><span class="keyword">*(</span><span class="default">$new_h</span><span class="keyword">/</span><span class="default">$old_x</span><span class="keyword">);<br /><br />    }<br />    if (</span><span class="default">$old_x </span><span class="keyword">&lt; </span><span class="default">$old_y</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w</span><span class="keyword">=</span><span class="default">$old_x</span><span class="keyword">*(</span><span class="default">$new_w</span><span class="keyword">/</span><span class="default">$old_y</span><span class="keyword">);<br />        </span><span class="default">$thumb_h</span><span class="keyword">=</span><span class="default">$new_h</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$old_x </span><span class="keyword">== </span><span class="default">$old_y</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w</span><span class="keyword">=</span><span class="default">$new_w</span><span class="keyword">;<br />        </span><span class="default">$thumb_h</span><span class="keyword">=</span><span class="default">$new_h</span><span class="keyword">;<br />    }<br />     </span><span class="default">$thumb</span><span class="keyword">=</span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$thumb_w</span><span class="keyword">,</span><span class="default">$thumb_h</span><span class="keyword">);<br />     </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">,</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$thumb_w</span><span class="keyword">,</span><span class="default">$thumb_h</span><span class="keyword">,</span><span class="default">$old_x</span><span class="keyword">,</span><span class="default">$old_y</span><span class="keyword">);<br /><br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">90</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38652">  <div class="votes">
    <div id="Vu38652">
    <a href="/manual/vote-note.php?id=38652&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38652">
    <a href="/manual/vote-note.php?id=38652&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38652" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#38652" class="name">
  <strong class="user"><em>gzink at zinkconsulting dot com</em></strong></a><a class="genanchor" href="#38652"> &para;</a><div class="date" title="2004-01-01 03:17"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38652">
<div class="phpcode"><code><span class="html">Don't forget that JPEG compression has artifacts! And they're not all really obvious. The PHP JPEG compression is pretty decent, but it seems to generally:<br /><br />-Lighten the image overall, by a reasonable amount (never seen this before, but it will drive graphic designers crazy, you might want to darken the image before compressing it)<br />-Reduce saturation, especially with images with lots of points of different color within a few pixels of each other (this is a documented feature of JPEG)<br />-Seriously mess with blue colors, which is common to all JPEG but really annoying in some situations with blue and black or other detailed blue parts<br /><br />You might want to consider using imagepng() and outputting a PNG image instead of a JPEG if any of the above affect you, or your image is not very photo-like. Sometimes I have an algorithm compare JPEG to PNG for an image and send the smaller version to the user. <br /><br />Also, when using imagepng(), you should use imageinterlace() before it 95% of the time. Interlaced JPEGs load progressively, improving in quality as the image loads, so users on slower connections see the whole image at low quality. All this happens without affecting the file size (actually, sometimes the file size is smaller!) or final quality.<br /><br />Hope this helps a few people out. It's not all that obvious without lots of playing around.<br /><br />-Galen<br /><a href="http://zinkconsulting.com/" rel="nofollow" target="_blank">http://zinkconsulting.com/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="103826">  <div class="votes">
    <div id="Vu103826">
    <a href="/manual/vote-note.php?id=103826&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103826">
    <a href="/manual/vote-note.php?id=103826&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103826" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#103826" class="name">
  <strong class="user"><em>bernytech at gmail dot com</em></strong></a><a class="genanchor" href="#103826"> &para;</a><div class="date" title="2011-05-05 03:32"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103826">
<div class="phpcode"><code><span class="html">Don't be like me racking my brain for hours trying to figure out why my xxx.php file outputs <a href="http://localhost/xxx.php" rel="nofollow" target="_blank">http://localhost/xxx.php</a> as a one line response.<br /><br />Why?<br /><br />Most likely, you have either:<br /><br />1. whitespaces before or after the php tags<br />2. need to set header('Content-type: image/jpeg');<br />3. if you have required files...be sure nothing is outputted...no test print statements because page expects image information<br />4.  there is an error in your code<br /><br />in my case, it was 4.  there is a reason why the function call base64decode does not work... <br /><br />it's actually: base64_decode()<br /><br />by the way, other ways to validate your image encoded in base64 is to use the following tag:<br /><br />echo '&lt;img src="data:image/jpeg;base64,'.$row['IMAGE'].'" alt="photo"&gt;';<br /><br />I was pulling a blob encoded base 64 data from mysql database and trying to render it on a page<br /><br />hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="68356">  <div class="votes">
    <div id="Vu68356">
    <a href="/manual/vote-note.php?id=68356&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68356">
    <a href="/manual/vote-note.php?id=68356&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68356" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#68356" class="name">
  <strong class="user"><em>chris dot calo at gmail dot com</em></strong></a><a class="genanchor" href="#68356"> &para;</a><div class="date" title="2006-07-24 07:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68356">
<div class="phpcode"><code><span class="html">Thanks to Stuart and Darren for the corrections to the create_thumbnail function.  Another note on that function: imagecreatefromwbmp was incorrectly used.  WBMPs are wireless bitmaps, not windows bitmaps (thanks to clambert at whitecrown), so the thumbnail routine as is will not be able to handle windows bitmaps.  See the notes at <a href="http://us2.php.net/manual/en/function.imagecreatefromwbmp.php" rel="nofollow" target="_blank">http://us2.php.net/manual/en/function.imagecreatefromwbmp.php</a> for tips on working with windows bitmaps.</span></code></div>
  </div>
 </div>
  <div class="note" id="59848">  <div class="votes">
    <div id="Vu59848">
    <a href="/manual/vote-note.php?id=59848&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59848">
    <a href="/manual/vote-note.php?id=59848&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59848" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#59848" class="name">
  <strong class="user"><em>Kenneth Keiter</em></strong></a><a class="genanchor" href="#59848"> &para;</a><div class="date" title="2005-12-17 08:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59848">
<div class="phpcode"><code><span class="html">So.. after messing around with this beast of a function for hours, I discovered that it DOES NOT preserve the resource it is using the create the image, nor do imagepng() or imagegif(). By this I mean that you can not run two imagejpeg(), imagepng() or imagegif() calls on the same resource. Another possibly undocumented quirk... :-(</span></code></div>
  </div>
 </div>
  <div class="note" id="51553">  <div class="votes">
    <div id="Vu51553">
    <a href="/manual/vote-note.php?id=51553&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51553">
    <a href="/manual/vote-note.php?id=51553&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51553" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#51553" class="name">
  <strong class="user"><em>wojteksw at go2 dot pl</em></strong></a><a class="genanchor" href="#51553"> &para;</a><div class="date" title="2005-04-03 03:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51553">
<div class="phpcode"><code><span class="html">I have changed one line in the script of Kokesh<br />25-Jun-2004 06:42 listed above, and now it generates better quality thumbnails. <br />You have to change function imagecopyresized() to imagecopyresampled()</span></code></div>
  </div>
 </div>
  <div class="note" id="55530">  <div class="votes">
    <div id="Vu55530">
    <a href="/manual/vote-note.php?id=55530&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55530">
    <a href="/manual/vote-note.php?id=55530&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55530" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#55530" class="name">
  <strong class="user"><em>John Luetke &lt;johnl1479 gmail com&gt;</em></strong></a><a class="genanchor" href="#55530"> &para;</a><div class="date" title="2005-08-05 05:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55530">
<div class="phpcode"><code><span class="html">Rewrote the manual example into this function for creating a thumbnail image:<br /><br />function thumbnail_jpeg ($original, $thumbnail, $width, $height, $quality) {<br />  list($width_orig, $height_orig) = getimagesize($original);<br />  if ($width &amp;&amp; ($width_orig &lt; $height_orig)) {<br />    $width = ($height / $height_orig) * $width_orig;<br />  }<br />        else {<br />    $height = ($width / $width_orig) * $height_orig;<br />  }<br />  $image_p = imagecreatetruecolor($width, $height);<br />  $image = imagecreatefromjpeg($originial);<br />  imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);<br />  imagejpeg($image_p, $thumbnail, $quality);<br />  return;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="76698">  <div class="votes">
    <div id="Vu76698">
    <a href="/manual/vote-note.php?id=76698&amp;page=function.imagejpeg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76698">
    <a href="/manual/vote-note.php?id=76698&amp;page=function.imagejpeg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76698" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#76698" class="name">
  <strong class="user"><em>Pedja (pedja at supurovic dot net)</em></strong></a><a class="genanchor" href="#76698"> &para;</a><div class="date" title="2007-07-26 10:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76698">
<div class="phpcode"><code><span class="html">Here is sample function that creates thumbnail of source JPEG file. Thumbnail wil be in square form (with and height are the same), and original image cropped to fit in.<br /><br />Parameters:<br /><br />$p_thumb_file - name of the file (including path) where thumb should be saved to<br /><br />$p_photo_file - nam of the source JPEG file (including path) thatthumbnail should be created of<br /><br />$p_max_size - with and height (they will be the same) in pixels for thumbnail image<br /><br />$p_quality - quality of jpeg thumbnail<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">photoCreateCropThumb </span><span class="keyword">(</span><span class="default">$p_thumb_file</span><span class="keyword">, </span><span class="default">$p_photo_file</span><span class="keyword">, </span><span class="default">$p_max_size</span><span class="keyword">, </span><span class="default">$p_quality </span><span class="keyword">= </span><span class="default">75</span><span class="keyword">) {<br />  <br />    </span><span class="default">$pic </span><span class="keyword">= @</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$p_photo_file</span><span class="keyword">);<br /><br />    if (</span><span class="default">$pic</span><span class="keyword">) {<br />        </span><span class="default">$thumb </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor </span><span class="keyword">(</span><span class="default">$p_max_size</span><span class="keyword">, </span><span class="default">$p_max_size</span><span class="keyword">) or die (</span><span class="string">"Can't create Image!"</span><span class="keyword">);<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);<br />        </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);<br />        if (</span><span class="default">$width </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">) {<br />                </span><span class="default">$twidth </span><span class="keyword">= </span><span class="default">$p_max_size</span><span class="keyword">;<br />                </span><span class="default">$theight </span><span class="keyword">= </span><span class="default">$twidth </span><span class="keyword">* </span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$width</span><span class="keyword">; <br />                </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$pic</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, (</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)-(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">$twidth</span><span class="keyword">, </span><span class="default">$theight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">); <br />        } else {<br />                </span><span class="default">$theight </span><span class="keyword">= </span><span class="default">$p_max_size</span><span class="keyword">;<br />                </span><span class="default">$twidth </span><span class="keyword">= </span><span class="default">$theight </span><span class="keyword">* </span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$height</span><span class="keyword">; <br />                </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$pic</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, (</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)-(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$twidth</span><span class="keyword">, </span><span class="default">$theight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">); <br />        }<br /><br />        </span><span class="default">ImageJPEG </span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$p_thumb_file</span><span class="keyword">, </span><span class="default">$p_quality</span><span class="keyword">);<br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagejpeg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagejpeg.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
