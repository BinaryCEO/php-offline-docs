<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: image_type_to_extension - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.image-type-to-extension.php">
 <link rel="shorturl" href="https://www.php.net/image-type-to-extension">
 <link rel="alternate" href="https://www.php.net/image-type-to-extension" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.getimagesizefromstring.php">
 <link rel="next" href="https://www.php.net/manual/en/function.image-type-to-mime-type.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.image-type-to-extension.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.image-type-to-extension.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.image-type-to-extension.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.image-type-to-extension.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.image-type-to-extension.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.image-type-to-extension.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.image-type-to-extension.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.image-type-to-extension.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.image-type-to-extension.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.image-type-to-extension.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.image-type-to-extension.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get file extension for image type" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: image_type_to_extension - Manual" />
<meta name="twitter:description" content="Get file extension for image type" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: image_type_to_extension - Manual" />
<meta itemprop="description" content="Get file extension for image type" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get file extension for image type" />

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
        <a href="function.image-type-to-mime-type.php">
          image_type_to_mime_type &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.getimagesizefromstring.php">
          &laquo; getimagesizefromstring        </a>
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
            <option value='en/function.image-type-to-extension.php' selected="selected">English</option>
            <option value='de/function.image-type-to-extension.php'>German</option>
            <option value='es/function.image-type-to-extension.php'>Spanish</option>
            <option value='fr/function.image-type-to-extension.php'>French</option>
            <option value='it/function.image-type-to-extension.php'>Italian</option>
            <option value='ja/function.image-type-to-extension.php'>Japanese</option>
            <option value='pt_BR/function.image-type-to-extension.php'>Brazilian Portuguese</option>
            <option value='ru/function.image-type-to-extension.php'>Russian</option>
            <option value='tr/function.image-type-to-extension.php'>Turkish</option>
            <option value='uk/function.image-type-to-extension.php'>Ukrainian</option>
            <option value='zh/function.image-type-to-extension.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.image-type-to-extension" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">image_type_to_extension</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">image_type_to_extension</span> &mdash; <span class="dc-title">Get file extension for image type</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.image-type-to-extension-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>image_type_to_extension</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$image_type</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$include_dot</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns the extension for the given <strong><code><a href="image.constants.php#constant.imagetype-gif">IMAGETYPE_<span class="replaceable">*</span></a></code></strong>
   constant.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.image-type-to-extension-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">image_type</code></dt>
     <dd>
      <p class="para">
       One of the <strong><code><a href="image.constants.php#constant.imagetype-gif">IMAGETYPE_<span class="replaceable">*</span></a></code></strong> constant.
      </p>
     </dd>
    
    
     <dt><code class="parameter">include_dot</code></dt>
     <dd>
      <p class="para">
       Whether to prepend a dot to the extension or not. Default to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.image-type-to-extension-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A string with the extension corresponding to the given image type,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.image-type-to-extension-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2826">
    <p><strong>Example #1 <span class="function"><strong>image_type_to_extension()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create image instance<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Save image<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'./test' </span><span style="color: #007700">. </span><span style="color: #0000BB">image_type_to_extension</span><span style="color: #007700">(</span><span style="color: #0000BB">IMAGETYPE_PNG</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.image-type-to-extension-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This function does not require the GD image library.</p></p></blockquote>
 </div>

 
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/image-type-to-extension.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.image-type-to-extension%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.image-type-to-extension&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.image-type-to-extension.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126871">  <div class="votes">
    <div id="Vu126871">
    <a href="/manual/vote-note.php?id=126871&amp;page=function.image-type-to-extension&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126871">
    <a href="/manual/vote-note.php?id=126871&amp;page=function.image-type-to-extension&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126871" title="71% like this...">
    3
    </div>
  </div>
  <a href="#126871" class="name">
  <strong class="user"><em>twitter.com/jonathansampson</em></strong></a><a class="genanchor" href="#126871"> &para;</a><div class="date" title="2022-02-23 03:42"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126871">
<div class="phpcode"><code><span class="html">If you would like to get the extension from a filename (string), the following should save you any frustration with exploding the string into parts (be sure to read the documentation warnings for pathinfo):<br /><br /><span class="default">&lt;?php<br /><br />  $filename </span><span class="keyword">= </span><span class="string">"wallpaper.jpg"</span><span class="keyword">;<br />  </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">( </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION </span><span class="keyword">);<br /><br />  echo </span><span class="default">$extension</span><span class="keyword">; </span><span class="comment">// "jpg"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69994">  <div class="votes">
    <div id="Vu69994">
    <a href="/manual/vote-note.php?id=69994&amp;page=function.image-type-to-extension&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69994">
    <a href="/manual/vote-note.php?id=69994&amp;page=function.image-type-to-extension&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69994" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69994" class="name">
  <strong class="user"><em>Ian Paul Short chukdocsAtHotmailDotCom</em></strong></a><a class="genanchor" href="#69994"> &para;</a><div class="date" title="2006-09-28 09:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69994">
<div class="phpcode"><code><span class="html">To: mail at spybreak dot de<br /><br />I noted  your solution was for mime_type_to_extension which is flawed because the MIME types to extensions are not unique. See my example to consider what I have observed.<br /><br />This function performs image type or mime type to extension. With limitation it will not attempt to handle duplicated MIME types. NOT DEFINITIVE!<br /><span class="default">&lt;?php<br />    </span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'image_type_to_extension'</span><span class="keyword">)){       <br /><br />        </span><span class="default">$extension</span><span class="keyword">;<br /><br />        function </span><span class="default">image_type_or_mime_type_to_extension</span><span class="keyword">(</span><span class="default">$image_type</span><span class="keyword">, </span><span class="default">$include_dot</span><span class="keyword">) {<br />            </span><span class="default">define </span><span class="keyword">(</span><span class="string">"INVALID_IMAGETYPE"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br />            <br />            </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">INVALID_IMAGETYPE</span><span class="keyword">;            </span><span class="comment">/// Default return value for invalid input<br /><br />            </span><span class="default">$image_type_identifiers </span><span class="keyword">= array (                                                                </span><span class="comment">### These values correspond to the IMAGETYPE constants<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_GIF         </span><span class="keyword">=&gt; </span><span class="string">'gif'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/gif'</span><span class="keyword">),                        </span><span class="comment">###  1 = GIF<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_JPEG        </span><span class="keyword">=&gt; </span><span class="string">'jpg'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/jpeg'</span><span class="keyword">),                        </span><span class="comment">###  2 = JPG<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_PNG        </span><span class="keyword">=&gt; </span><span class="string">'png'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/png'</span><span class="keyword">),                        </span><span class="comment">###  3 = PNG<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_SWF        </span><span class="keyword">=&gt; </span><span class="string">'swf'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'application/x-shockwave-flash'</span><span class="keyword">),    </span><span class="comment">###  4 = SWF  // A. Duplicated MIME type<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_PSD        </span><span class="keyword">=&gt; </span><span class="string">'psd'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/psd'</span><span class="keyword">),                        </span><span class="comment">###  5 = PSD<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_BMP        </span><span class="keyword">=&gt; </span><span class="string">'bmp'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/bmp'</span><span class="keyword">),                        </span><span class="comment">###  6 = BMP<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_TIFF_II    </span><span class="keyword">=&gt; </span><span class="string">'tiff'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/tiff'</span><span class="keyword">),                        </span><span class="comment">###  7 = TIFF (intel byte order)<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_TIFF_MM    </span><span class="keyword">=&gt; </span><span class="string">'tiff'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/tiff'</span><span class="keyword">),                        </span><span class="comment">###  8 = TIFF (motorola byte order)<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_JPC        </span><span class="keyword">=&gt; </span><span class="string">'jpc'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'application/octet-stream'</span><span class="keyword">),            </span><span class="comment">###  9 = JPC  // B. Duplicated MIME type<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_JP2        </span><span class="keyword">=&gt; </span><span class="string">'jp2'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/jp2'</span><span class="keyword">),                        </span><span class="comment">### 10 = JP2<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_JPX        </span><span class="keyword">=&gt; </span><span class="string">'jpf'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'application/octet-stream'</span><span class="keyword">),            </span><span class="comment">### 11 = JPX  // B. Duplicated MIME type<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_JB2        </span><span class="keyword">=&gt; </span><span class="string">'jb2'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'application/octet-stream'</span><span class="keyword">),            </span><span class="comment">### 12 = JB2  // B. Duplicated MIME type            <br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_SWC        </span><span class="keyword">=&gt; </span><span class="string">'swc'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'application/x-shockwave-flash'</span><span class="keyword">),    </span><span class="comment">### 13 = SWC  // A. Duplicated MIME type<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_IFF        </span><span class="keyword">=&gt; </span><span class="string">'aiff'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/iff'</span><span class="keyword">),                        </span><span class="comment">### 14 = IFF<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_WBMP        </span><span class="keyword">=&gt; </span><span class="string">'wbmp'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/vnd.wap.wbmp'</span><span class="keyword">),                </span><span class="comment">### 15 = WBMP<br />                    </span><span class="keyword">array (</span><span class="default">IMAGETYPE_XBM        </span><span class="keyword">=&gt; </span><span class="string">'xbm'</span><span class="keyword">,     </span><span class="string">"mime_type" </span><span class="keyword">=&gt; </span><span class="string">'image/xbm'</span><span class="keyword">)                            </span><span class="comment">### 16 = XBM<br />            </span><span class="keyword">);                                                                                    <br />            <br />            if((</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$image_type</span><span class="keyword">)) AND (</span><span class="default">IMAGETYPE_GIF </span><span class="keyword">&lt;= </span><span class="default">$image_type</span><span class="keyword">) AND (</span><span class="default">IMAGETYPE_XBM </span><span class="keyword">&gt;= </span><span class="default">$image_type</span><span class="keyword">)){<br />                </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">$image_type_identifiers</span><span class="keyword">[</span><span class="default">$image_type</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]; </span><span class="comment">// -1 because $image_type_identifiers array starts at [0]<br />                </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">$extension</span><span class="keyword">[</span><span class="default">$image_type</span><span class="keyword">];<br />            }<br />            elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$image_type</span><span class="keyword">) AND ((</span><span class="default">$image_type </span><span class="keyword">!= </span><span class="string">'application/x-shockwave-flash'</span><span class="keyword">) OR (</span><span class="default">$image_type </span><span class="keyword">!= </span><span class="string">'application/octet-stream'</span><span class="keyword">))){                <br />            <br />                </span><span class="default">$extension </span><span class="keyword">=  </span><span class="default">match_mime_type_to_extension</span><span class="keyword">(</span><span class="default">$image_type</span><span class="keyword">, </span><span class="default">$image_type_identifiers</span><span class="keyword">);<br />            }<br />            else<br />            {<br />                </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">INVALID_IMAGETYPE</span><span class="keyword">;<br />            }<br /><br />               if(</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$include_dot</span><span class="keyword">)){<br /><br />                   if((</span><span class="default">false </span><span class="keyword">!= </span><span class="default">$include_dot</span><span class="keyword">) AND (</span><span class="default">INVALID_IMAGETYPE </span><span class="keyword">!= </span><span class="default">$extension</span><span class="keyword">)){<br />                       </span><span class="default">$extension </span><span class="keyword">= </span><span class="string">'.' </span><span class="keyword">. </span><span class="default">$extension</span><span class="keyword">;<br />                   }<br />               }<br />               else<br />               {<br />                   </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">INVALID_IMAGETYPE</span><span class="keyword">;<br />               }                  <br />       <br />           return </span><span class="default">$extension</span><span class="keyword">;<br /><br />           }<br />    }    <br /><br />    function </span><span class="default">match_mime_type_to_extension</span><span class="keyword">(</span><span class="default">$image_type</span><span class="keyword">, </span><span class="default">$image_type_identifiers</span><span class="keyword">){<br />        </span><span class="comment">// Return from loop on a match<br />        </span><span class="keyword">foreach(</span><span class="default">$image_type_identifiers </span><span class="keyword">as </span><span class="default">$_key_outer_loop </span><span class="keyword">=&gt; </span><span class="default">$_val_outer_loop</span><span class="keyword">){            <br />            foreach(</span><span class="default">$_val_outer_loop </span><span class="keyword">as </span><span class="default">$_key </span><span class="keyword">=&gt; </span><span class="default">$_val</span><span class="keyword">){<br />                if(</span><span class="default">is_int </span><span class="keyword">(</span><span class="default">$_key</span><span class="keyword">)){             </span><span class="comment">// Keep record of extension for mime check<br />                    </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">$_val</span><span class="keyword">;<br />                } <br />                if(</span><span class="default">$_key </span><span class="keyword">== </span><span class="string">'mime_type'</span><span class="keyword">){    <br />                    if(</span><span class="default">$_val </span><span class="keyword">=== </span><span class="default">$image_type</span><span class="keyword">){    </span><span class="comment">// Found match no need to continue looping<br />                        </span><span class="keyword">return </span><span class="default">$extension</span><span class="keyword">;        </span><span class="comment">### Return<br />                    </span><span class="keyword">}                     <br />                }<br />            }<br />        }<br />        </span><span class="comment">// Compared all values without match<br />        </span><span class="keyword">return </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">INVALID_IMAGETYPE</span><span class="keyword">;    <br />    } <br />    <br />    </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">image_type_or_mime_type_to_extension</span><span class="keyword">(</span><span class="default">$image_type</span><span class="keyword">, </span><span class="default">$include_dot</span><span class="keyword">);<br />     return </span><span class="default">$extension</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60033">  <div class="votes">
    <div id="Vu60033">
    <a href="/manual/vote-note.php?id=60033&amp;page=function.image-type-to-extension&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60033">
    <a href="/manual/vote-note.php?id=60033&amp;page=function.image-type-to-extension&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60033" title="50% like this...">
    0
    </div>
  </div>
  <a href="#60033" class="name">
  <strong class="user"><em>aleksandrs dot bogdanovs at gmail dot com</em></strong></a><a class="genanchor" href="#60033"> &para;</a><div class="date" title="2005-12-23 05:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60033">
<div class="phpcode"><code><span class="html">When I was writing a script for my photo website, it was necessary to write such function, which can get the extension of uploaded file (image), so the function is:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_extension</span><span class="keyword">(</span><span class="default">$imagetype</span><span class="keyword">)<br />   {<br />       if(empty(</span><span class="default">$imagetype</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />       switch(</span><span class="default">$imagetype</span><span class="keyword">)<br />       {<br />           case </span><span class="string">'image/bmp'</span><span class="keyword">: return </span><span class="string">'.bmp'</span><span class="keyword">;<br />           case </span><span class="string">'image/cis-cod'</span><span class="keyword">: return </span><span class="string">'.cod'</span><span class="keyword">;<br />           case </span><span class="string">'image/gif'</span><span class="keyword">: return </span><span class="string">'.gif'</span><span class="keyword">;<br />           case </span><span class="string">'image/ief'</span><span class="keyword">: return </span><span class="string">'.ief'</span><span class="keyword">;<br />           case </span><span class="string">'image/jpeg'</span><span class="keyword">: return </span><span class="string">'.jpg'</span><span class="keyword">;<br />           case </span><span class="string">'image/pipeg'</span><span class="keyword">: return </span><span class="string">'.jfif'</span><span class="keyword">;<br />           case </span><span class="string">'image/tiff'</span><span class="keyword">: return </span><span class="string">'.tif'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-cmu-raster'</span><span class="keyword">: return </span><span class="string">'.ras'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-cmx'</span><span class="keyword">: return </span><span class="string">'.cmx'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-icon'</span><span class="keyword">: return </span><span class="string">'.ico'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-portable-anymap'</span><span class="keyword">: return </span><span class="string">'.pnm'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-portable-bitmap'</span><span class="keyword">: return </span><span class="string">'.pbm'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-portable-graymap'</span><span class="keyword">: return </span><span class="string">'.pgm'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-portable-pixmap'</span><span class="keyword">: return </span><span class="string">'.ppm'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-rgb'</span><span class="keyword">: return </span><span class="string">'.rgb'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-xbitmap'</span><span class="keyword">: return </span><span class="string">'.xbm'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-xpixmap'</span><span class="keyword">: return </span><span class="string">'.xpm'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-xwindowdump'</span><span class="keyword">: return </span><span class="string">'.xwd'</span><span class="keyword">;<br />           case </span><span class="string">'image/png'</span><span class="keyword">: return </span><span class="string">'.png'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-jps'</span><span class="keyword">: return </span><span class="string">'.jps'</span><span class="keyword">;<br />           case </span><span class="string">'image/x-freehand'</span><span class="keyword">: return </span><span class="string">'.fh'</span><span class="keyword">;<br />           default: return </span><span class="default">false</span><span class="keyword">;<br />       }<br />   }<br /></span><span class="default">?&gt;<br /></span><br />It's useful for those, who upload files on server.</span></code></div>
  </div>
 </div>
  <div class="note" id="126511">  <div class="votes">
    <div id="Vu126511">
    <a href="/manual/vote-note.php?id=126511&amp;page=function.image-type-to-extension&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126511">
    <a href="/manual/vote-note.php?id=126511&amp;page=function.image-type-to-extension&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126511" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#126511" class="name">
  <strong class="user"><em>ergunadem5508 at gmail dot com</em></strong></a><a class="genanchor" href="#126511"> &para;</a><div class="date" title="2021-10-15 07:02"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126511">
<div class="phpcode"><code><span class="html">// if you just want to find the format from the file path name without creating any images<br /><br />// image path name<br />$image_name = "image name.png";<br /><br />// After the last point is naturally the format.<br />$dots = explode(".",$image_name);<br /><br />// We assign the last data of $dots to the variable $type.<br />$type = $dots[(count($dots)-1)];<br /><br />// The output will be written without a dot.<br />echo "without dot : ".$type;<br /><br />//for dotted<br />$type = ".".$type;<br />echo "dotted : ".$type;</span></code></div>
  </div>
 </div>
  <div class="note" id="69992">  <div class="votes">
    <div id="Vu69992">
    <a href="/manual/vote-note.php?id=69992&amp;page=function.image-type-to-extension&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69992">
    <a href="/manual/vote-note.php?id=69992&amp;page=function.image-type-to-extension&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69992" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#69992" class="name">
  <strong class="user"><em>Ian Paul Short chukdocsAtHotmailDotCom</em></strong></a><a class="genanchor" href="#69992"> &para;</a><div class="date" title="2006-09-28 07:55"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69992">
<div class="phpcode"><code><span class="html">2006-09-29<br /><br />A few notes about some contributions on this page.<br /><br />1. It seemed to me that on the face it of all of the offerings to emulate "image_type_to_extension" function fell short of the mark in one way or another (See my comments below). That's why I wrote my own and submitted to this page below. In respect of my work any comments, bugs noted or improvements would be gratefully received.<br /><br />2. Avoid using the Switch statement in an unconventional method to "Break" (I note the use of the return statement!). Also even if it does nothing at the inception of our code - Still put in the default case (It lets others realise that a default is not required or at worst forgotton.<br /><br />3. In an environment that is under your control the risk of an error by determining the content by its extension or MIME type may seem an attractive solution to a problem. However, in the real world there's no guarantee that a MIME type or file extension is correct for it's associated file.<br /><br />Consider using functions to get the image type:<br />      getimagesize or (This is available without GD)<br />      exif_imagetype<br /><br />4. There's more to coding than just putting something together to do a job!!! But whatever is done is worthwhile - Hence expletives have no place in this forum!! <br /><br />5. The idea from "oridan at hotmail dot com" is a very slick idea. I will be taking a closer look at this for my own project.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.image-type-to-extension&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.image-type-to-extension.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
