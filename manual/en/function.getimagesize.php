<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: getimagesize - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.getimagesize.php">
 <link rel="shorturl" href="https://www.php.net/getimagesize">
 <link rel="alternate" href="https://www.php.net/getimagesize" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gd-info.php">
 <link rel="next" href="https://www.php.net/manual/en/function.getimagesizefromstring.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.getimagesize.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.getimagesize.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.getimagesize.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.getimagesize.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.getimagesize.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.getimagesize.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.getimagesize.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.getimagesize.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.getimagesize.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.getimagesize.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.getimagesize.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the size of an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: getimagesize - Manual" />
<meta name="twitter:description" content="Get the size of an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: getimagesize - Manual" />
<meta itemprop="description" content="Get the size of an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the size of an image" />

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
        <a href="function.getimagesizefromstring.php">
          getimagesizefromstring &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gd-info.php">
          &laquo; gd_info        </a>
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
            <option value='en/function.getimagesize.php' selected="selected">English</option>
            <option value='de/function.getimagesize.php'>German</option>
            <option value='es/function.getimagesize.php'>Spanish</option>
            <option value='fr/function.getimagesize.php'>French</option>
            <option value='it/function.getimagesize.php'>Italian</option>
            <option value='ja/function.getimagesize.php'>Japanese</option>
            <option value='pt_BR/function.getimagesize.php'>Brazilian Portuguese</option>
            <option value='ru/function.getimagesize.php'>Russian</option>
            <option value='tr/function.getimagesize.php'>Turkish</option>
            <option value='uk/function.getimagesize.php'>Ukrainian</option>
            <option value='zh/function.getimagesize.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.getimagesize" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">getimagesize</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">getimagesize</span> &mdash; <span class="dc-title">Get the size of an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.getimagesize-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>getimagesize</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$image_info</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>getimagesize()</strong></span> function will determine the
   size of any supported given image file and return the dimensions along with
   the file type and a <code class="literal">height/width</code> text string to be used inside a
   normal <abbr title="Hyper Text Markup Language">HTML</abbr> <code class="tag">IMG</code> tag and the
   correspondent <abbr title="Hypertext Transfer Protocol">HTTP</abbr> content type.
  </p>
  <p class="para">
   <span class="function"><strong>getimagesize()</strong></span> can also return some more information
   in <code class="parameter">image_info</code> parameter.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    This function expects <code class="parameter">filename</code> to be a valid
    image file. If a non-image file is supplied, it may be incorrectly
    detected as an image and the function will return successfully, but
    the array may contain nonsensical values.
   </p>
   <p class="para">
    Do not use <span class="function"><strong>getimagesize()</strong></span> to check that a given
    file is a valid image. Use a purpose-built solution such as the
    <a href="book.fileinfo.php" class="link">Fileinfo</a> extension instead.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Note that JPC and JP2 are capable of having components with different 
    bit depths. In this case, the value for &quot;bits&quot; is the highest bit depth encountered. Also, JP2
    files may contain <code class="literal">multiple JPEG 2000 codestreams</code>. In this case,
    <span class="function"><strong>getimagesize()</strong></span> returns the values for the first
    codestream it encounters in the root of the file.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The information about icons are retrieved from the icon with the highest
    bitrate.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    GIF images consist of one or more frames, where each frame may only occupy
    part of the image. The size of the image which is reported by
    <span class="function"><strong>getimagesize()</strong></span> is the overall size (read from the logical
    screen descriptor).
   </span>
  </p></blockquote>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.getimagesize-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
        This parameter specifies the file you wish to retrieve information
        about. It can reference a local file or (configuration permitting) a
        remote file using one of the <a href="wrappers.php" class="link">supported streams</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">image_info</code></dt>
     <dd>
      <p class="para">
       This optional parameter allows you to extract some extended
       information from the image file. Currently, this will return the
       different <abbr>JPG</abbr> APP markers as an associative array.
       Some programs use these APP markers to embed text information in 
       images. A very common one is to embed 
       <a href="http://www.iptc.org/" class="link external">&raquo;&nbsp;IPTC</a> information in the APP13 marker.
       You can use the <span class="function"><a href="function.iptcparse.php" class="function">iptcparse()</a></span> function to parse the
       binary APP13 marker into something readable.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        The <code class="parameter">image_info</code> only supports
        <abbr>JFIF</abbr> files.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.getimagesize-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array with up to 7 elements. Not all image types will include
   the <code class="literal">channels</code> and <code class="literal">bits</code> elements.
  </p>
  <p class="para">
   Index 0 and 1 contains respectively the width and the height of the image.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Some formats may contain no image or may contain multiple images. In these
    cases, <span class="function"><strong>getimagesize()</strong></span> might not be able to properly
    determine the image size. <span class="function"><strong>getimagesize()</strong></span> will return
    zero for width and height in these cases.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    <span class="function"><strong>getimagesize()</strong></span> is agnostic of any image metadata.
    If e.g. the Exif <code class="literal">Orientation</code> flag is set to a value which
    rotates the image by 90 or 270 degress, index 0 and 1 are swapped,
    i.e. the contain the height and width, respectively.
   </span>
  </p></blockquote>
  <p class="para">
   Index 2 is one of the <strong><code><a href="image.constants.php#constant.imagetype-gif">IMAGETYPE_<span class="replaceable">*</span></a></code></strong> constants indicating
   the type of the image.
  </p>
  <p class="para">
   Index 3 is a text string with the correct 
   <code class="literal">height=&quot;yyy&quot; width=&quot;xxx&quot;</code> string that can be used
   directly in an <abbr>IMG</abbr> tag.
  </p>
  <p class="para">
   <code class="literal">mime</code> is the correspondant MIME type of the image.
   This information can be used to deliver images with the correct HTTP 
   <code class="literal">Content-type</code> header:
   <div class="example" id="example-2821">
    <p><strong>Example #1 <span class="function"><strong>getimagesize()</strong></span> and MIME types</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$size </span><span style="color: #007700">= </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$size </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">$fp</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-type: </span><span style="color: #007700">{</span><span style="color: #0000BB">$size</span><span style="color: #007700">[</span><span style="color: #DD0000">'mime'</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">fpassthru</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />    exit;<br />} else {<br />    </span><span style="color: #FF8000">// error<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <code class="literal">channels</code> will be 3 for RGB pictures and 4 for CMYK
   pictures.
  </p>
  <p class="para">
   <code class="literal">bits</code> is the number of bits for each color.
  </p>
  <p class="para">
   For some image types, the presence of <code class="literal">channels</code> and
   <code class="literal">bits</code> values can be a bit
   confusing. As an example, <abbr title="Graphic Interchange Format">GIF</abbr> always uses 3 channels
   per pixel, but the number of bits per pixel cannot be calculated for an
   animated <abbr title="Graphic Interchange Format">GIF</abbr> with a global color table.
  </p>
  <p class="para">
   On failure, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
  </p>
 </div>

 
 <div class="refsect1 errors" id="refsect1-function.getimagesize-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If accessing the <code class="parameter">filename</code> image is impossible
   <span class="function"><strong>getimagesize()</strong></span> will generate an error of level
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>. On read error,
   <span class="function"><strong>getimagesize()</strong></span> will generate an error of level
   <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.getimagesize-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.2.0</td>
       <td>
        Now returns the actual image dimensions, bits and channels of AVIF images;
        previously, the dimensions were reported as <code class="literal">0x0</code>,
        and bits and channels were not reported at all.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        Added WebP support.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.getimagesize-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2822">
    <p><strong>Example #2 <span class="function"><strong>getimagesize()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">, </span><span style="color: #0000BB">$type</span><span style="color: #007700">, </span><span style="color: #0000BB">$attr</span><span style="color: #007700">) = </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"img/flag.jpg"</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"&lt;img src=\"img/flag.jpg\" </span><span style="color: #0000BB">$attr</span><span style="color: #DD0000"> alt=\"getimagesize() example\" /&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-2823">
    <p><strong>Example #3 getimagesize (URL)</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$size </span><span style="color: #007700">= </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/gifs/logo.gif"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// if the file name has space in it, encode it properly<br /></span><span style="color: #0000BB">$size </span><span style="color: #007700">= </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/gifs/lo%20go.gif"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-2824">
    <p><strong>Example #4 getimagesize() returning IPTC</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$size </span><span style="color: #007700">= </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"testimg.jpg"</span><span style="color: #007700">, </span><span style="color: #0000BB">$info</span><span style="color: #007700">);<br />if (isset(</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">"APP13"</span><span style="color: #007700">])) {<br />    </span><span style="color: #0000BB">$iptc </span><span style="color: #007700">= </span><span style="color: #0000BB">iptcparse</span><span style="color: #007700">(</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">"APP13"</span><span style="color: #007700">]);<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$iptc</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.getimagesize-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This function does not require the GD image library.</p></p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.getimagesize-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.image-type-to-mime-type.php" class="function" rel="rdfs-seeAlso">image_type_to_mime_type()</a> - Get Mime-Type for image-type returned by getimagesize,
   exif_read_data, exif_thumbnail, exif_imagetype</span></li>
   <li><span class="function"><a href="function.exif-imagetype.php" class="function" rel="rdfs-seeAlso">exif_imagetype()</a> - Determine the type of an image</span></li>
   <li><span class="function"><a href="function.exif-read-data.php" class="function" rel="rdfs-seeAlso">exif_read_data()</a> - Reads the EXIF headers from an image file</span></li>
   <li><span class="function"><a href="function.exif-thumbnail.php" class="function" rel="rdfs-seeAlso">exif_thumbnail()</a> - Retrieve the embedded thumbnail of an image</span></li>
   <li><span class="function"><a href="function.imagesx.php" class="function" rel="rdfs-seeAlso">imagesx()</a> - Get image width</span></li>
   <li><span class="function"><a href="function.imagesy.php" class="function" rel="rdfs-seeAlso">imagesy()</a> - Get image height</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/getimagesize.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.getimagesize%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.getimagesize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getimagesize.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="88793">  <div class="votes">
    <div id="Vu88793">
    <a href="/manual/vote-note.php?id=88793&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88793">
    <a href="/manual/vote-note.php?id=88793&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88793" title="73% like this...">
    92
    </div>
  </div>
  <a href="#88793" class="name">
  <strong class="user"><em>james dot relyea at zifiniti dot com</em></strong></a><a class="genanchor" href="#88793"> &para;</a><div class="date" title="2009-02-07 08:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88793">
<div class="phpcode"><code><span class="html">As noted below, getimagesize will download the entire image before it checks for the requested information. This is extremely slow on large images that are accessed remotely. Since the width/height is in the first few bytes of the file, there is no need to download the entire file. I wrote a function to get the size of a JPEG by streaming bytes until the proper data is found to report the width and height:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Retrieve JPEG width and height without downloading/reading entire image.<br /></span><span class="keyword">function </span><span class="default">getjpegsize</span><span class="keyword">(</span><span class="default">$img_loc</span><span class="keyword">) {<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$img_loc</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">) or die(</span><span class="string">"Invalid file stream."</span><span class="keyword">);<br />    </span><span class="default">$new_block </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    if(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {<br />        </span><span class="default">$new_block </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">32</span><span class="keyword">);<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        if(</span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]==</span><span class="string">"\xFF" </span><span class="keyword">&amp;&amp; </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]==</span><span class="string">"\xD8" </span><span class="keyword">&amp;&amp; </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">]==</span><span class="string">"\xFF" </span><span class="keyword">&amp;&amp; </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">3</span><span class="keyword">]==</span><span class="string">"\xE0"</span><span class="keyword">) {<br />            </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">4</span><span class="keyword">;<br />            if(</span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">]==</span><span class="string">"\x4A" </span><span class="keyword">&amp;&amp; </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">3</span><span class="keyword">]==</span><span class="string">"\x46" </span><span class="keyword">&amp;&amp; </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">4</span><span class="keyword">]==</span><span class="string">"\x49" </span><span class="keyword">&amp;&amp; </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">5</span><span class="keyword">]==</span><span class="string">"\x46" </span><span class="keyword">&amp;&amp; </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">6</span><span class="keyword">]==</span><span class="string">"\x00"</span><span class="keyword">) {<br />                </span><span class="comment">// Read block size and skip ahead to begin cycling through blocks in search of SOF marker<br />                </span><span class="default">$block_size </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"H*"</span><span class="keyword">, </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]);<br />                </span><span class="default">$block_size </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$block_size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />                while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {<br />                    </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$block_size</span><span class="keyword">;<br />                    </span><span class="default">$new_block </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$block_size</span><span class="keyword">);<br />                    if(</span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]==</span><span class="string">"\xFF"</span><span class="keyword">) {<br />                        </span><span class="comment">// New block detected, check for SOF marker<br />                        </span><span class="default">$sof_marker </span><span class="keyword">= array(</span><span class="string">"\xC0"</span><span class="keyword">, </span><span class="string">"\xC1"</span><span class="keyword">, </span><span class="string">"\xC2"</span><span class="keyword">, </span><span class="string">"\xC3"</span><span class="keyword">, </span><span class="string">"\xC5"</span><span class="keyword">, </span><span class="string">"\xC6"</span><span class="keyword">, </span><span class="string">"\xC7"</span><span class="keyword">, </span><span class="string">"\xC8"</span><span class="keyword">, </span><span class="string">"\xC9"</span><span class="keyword">, </span><span class="string">"\xCA"</span><span class="keyword">, </span><span class="string">"\xCB"</span><span class="keyword">, </span><span class="string">"\xCD"</span><span class="keyword">, </span><span class="string">"\xCE"</span><span class="keyword">, </span><span class="string">"\xCF"</span><span class="keyword">);<br />                        if(</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">], </span><span class="default">$sof_marker</span><span class="keyword">)) {<br />                            </span><span class="comment">// SOF marker detected. Width and height information is contained in bytes 4-7 after this byte.<br />                            </span><span class="default">$size_data </span><span class="keyword">= </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">3</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">4</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">5</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">6</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">7</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">8</span><span class="keyword">];<br />                            </span><span class="default">$unpacked </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"H*"</span><span class="keyword">, </span><span class="default">$size_data</span><span class="keyword">);<br />                            </span><span class="default">$unpacked </span><span class="keyword">= </span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />                            </span><span class="default">$height </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] . </span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] . </span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] . </span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">]);<br />                            </span><span class="default">$width </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">10</span><span class="keyword">] . </span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">11</span><span class="keyword">] . </span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">12</span><span class="keyword">] . </span><span class="default">$unpacked</span><span class="keyword">[</span><span class="default">13</span><span class="keyword">]);<br />                            return array(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />                        } else {<br />                            </span><span class="comment">// Skip block marker and read block size<br />                            </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">;<br />                            </span><span class="default">$block_size </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"H*"</span><span class="keyword">, </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]);<br />                            </span><span class="default">$block_size </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$block_size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />                        }<br />                    } else {<br />                        return </span><span class="default">FALSE</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />        }<br />    }<br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122015">  <div class="votes">
    <div id="Vu122015">
    <a href="/manual/vote-note.php?id=122015&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122015">
    <a href="/manual/vote-note.php?id=122015&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122015" title="72% like this...">
    15
    </div>
  </div>
  <a href="#122015" class="name">
  <strong class="user"><em>nikolam3244 at gmail dot com</em></strong></a><a class="genanchor" href="#122015"> &para;</a><div class="date" title="2017-12-12 07:24"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122015">
<div class="phpcode"><code><span class="html">There's a code snippet for getting JPEG image dimensions by getting only first few bytes of the file, but it doesn't work for PNG files, so I wrote one. It will download only the first 24 bytes instead of the whole image, and thus being much faster than getimagesize() and it will save bandwidth at the same time:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Retrieve PNG width and height without downloading/reading entire image.<br /></span><span class="keyword">function </span><span class="default">getpngsize</span><span class="keyword">( </span><span class="default">$img_loc </span><span class="keyword">) {<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">( </span><span class="default">$img_loc</span><span class="keyword">, </span><span class="string">"rb" </span><span class="keyword">) or die( </span><span class="string">"Invalid file stream." </span><span class="keyword">);<br /><br />    if ( ! </span><span class="default">feof</span><span class="keyword">( </span><span class="default">$handle </span><span class="keyword">) ) {<br />        </span><span class="default">$new_block </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">( </span><span class="default">$handle</span><span class="keyword">, </span><span class="default">24 </span><span class="keyword">);<br />        if ( </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"\x89" </span><span class="keyword">&amp;&amp;<br />            </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">"\x50" </span><span class="keyword">&amp;&amp;<br />            </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] == </span><span class="string">"\x4E" </span><span class="keyword">&amp;&amp;<br />            </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] == </span><span class="string">"\x47" </span><span class="keyword">&amp;&amp;<br />            </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] == </span><span class="string">"\x0D" </span><span class="keyword">&amp;&amp;<br />            </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] == </span><span class="string">"\x0A" </span><span class="keyword">&amp;&amp;<br />            </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] == </span><span class="string">"\x1A" </span><span class="keyword">&amp;&amp;<br />            </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] == </span><span class="string">"\x0A" </span><span class="keyword">) {<br />                if ( </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">12</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">13</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">14</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">15</span><span class="keyword">] === </span><span class="string">"\x49\x48\x44\x52" </span><span class="keyword">) {<br />                    </span><span class="default">$width  </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">( </span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">16</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">17</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">18</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">19</span><span class="keyword">] );<br />                    </span><span class="default">$width  </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br />                    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">( </span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">20</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">21</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">22</span><span class="keyword">] . </span><span class="default">$new_block</span><span class="keyword">[</span><span class="default">23</span><span class="keyword">] );<br />                    </span><span class="default">$height  </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">$height</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br /><br />                    return array( </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br />                }<br />            }<br />        }<br /><br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113158">  <div class="votes">
    <div id="Vu113158">
    <a href="/manual/vote-note.php?id=113158&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113158">
    <a href="/manual/vote-note.php?id=113158&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113158" title="66% like this...">
    16
    </div>
  </div>
  <a href="#113158" class="name">
  <strong class="user"><em>tomasz at trejderowski dot pl</em></strong></a><a class="genanchor" href="#113158"> &para;</a><div class="date" title="2013-09-06 09:47"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113158">
<div class="phpcode"><code><span class="html">If you want to "convert" value returned by "getimagesize()" as index "2" into something more human-readable, you may consider using a function like this one:<br /><br />    $imageTypeArray = array<br />    (<br />        0=&gt;'UNKNOWN',<br />        1=&gt;'GIF',<br />        2=&gt;'JPEG',<br />        3=&gt;'PNG',<br />        4=&gt;'SWF',<br />        5=&gt;'PSD',<br />        6=&gt;'BMP',<br />        7=&gt;'TIFF_II',<br />        8=&gt;'TIFF_MM',<br />        9=&gt;'JPC',<br />        10=&gt;'JP2',<br />        11=&gt;'JPX',<br />        12=&gt;'JB2',<br />        13=&gt;'SWC',<br />        14=&gt;'IFF',<br />        15=&gt;'WBMP',<br />        16=&gt;'XBM',<br />        17=&gt;'ICO',<br />        18=&gt;'COUNT'  <br />    );<br />    <br />    $size = getimagesize($filename);<br />    <br />    $size[2] = $imageTypeArray[$size[2]];<br /><br />Or something similar.</span></code></div>
  </div>
 </div>
  <div class="note" id="49930">  <div class="votes">
    <div id="Vu49930">
    <a href="/manual/vote-note.php?id=49930&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49930">
    <a href="/manual/vote-note.php?id=49930&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49930" title="65% like this...">
    19
    </div>
  </div>
  <a href="#49930" class="name">
  <strong class="user"><em>php dot net at dannysauer dot com</em></strong></a><a class="genanchor" href="#49930"> &para;</a><div class="date" title="2005-02-12 08:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49930">
<div class="phpcode"><code><span class="html">Note that, if you're going to be a good programmer and use named constatnts (IMAGETYPE_JPEG) rather than their values (2), you want to use the IMAGETYPE variants - IMAGETYPE_JPEG, IMAGETYPE GIF, IMAGETYPE_PNG, etc.  For some reason, somebody made a horrible decision, and IMG_PNG is actually 4 in my version of PHP, while IMAGETYPE_PNG is 3.  It took me a while to figure out why comparing the type against IMG_PNG was failing...</span></code></div>
  </div>
 </div>
  <div class="note" id="116976">  <div class="votes">
    <div id="Vu116976">
    <a href="/manual/vote-note.php?id=116976&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116976">
    <a href="/manual/vote-note.php?id=116976&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116976" title="64% like this...">
    5
    </div>
  </div>
  <a href="#116976" class="name">
  <strong class="user"><em>simon dot waters at surevine dot com</em></strong></a><a class="genanchor" href="#116976"> &para;</a><div class="date" title="2015-03-30 09:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116976">
<div class="phpcode"><code><span class="html">Note: getimage size doesn't attempt to validate image file formats<br /><br />It is possible for malformed GIF images to contain PHP and still have valid dimensions.<br /><br />Programmers need to ensure such images are validated by other tools, or never treated as PHP or other executable types (enforcing appropriate extensions, avoiding user controlled renaming, restricting uploaded images to areas of the website where PHP is not enabled).<br /><br /><a href="http://ha.ckers.org/blog/20070604/passing-malicious-php-through-getimagesize/" rel="nofollow" target="_blank">http://ha.ckers.org/blog/20070604/passing-malicious-php-through-getimagesize/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="77006">  <div class="votes">
    <div id="Vu77006">
    <a href="/manual/vote-note.php?id=77006&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77006">
    <a href="/manual/vote-note.php?id=77006&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77006" title="62% like this...">
    4
    </div>
  </div>
  <a href="#77006" class="name">
  <strong class="user"><em>redcore at gmail dot com</em></strong></a><a class="genanchor" href="#77006"> &para;</a><div class="date" title="2007-08-09 02:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77006">
<div class="phpcode"><code><span class="html">It's always good to check out an image's dimensions while attempting to upload to your server or database...especially if it's going to be displayed on a page that doesn't accomodate images beyond a particular size.<br /><br /><span class="default">&lt;?php<br /><br />$tmpName </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">];<br />        <br />list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">, </span><span class="default">$attr</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$tmpName</span><span class="keyword">);<br /><br />if(</span><span class="default">$width</span><span class="keyword">&gt;</span><span class="default">275 </span><span class="keyword">|| </span><span class="default">$height</span><span class="keyword">&gt;</span><span class="default">275</span><span class="keyword">)<br />{<br />die(</span><span class="string">"exceeded image dimension limits."</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105033">  <div class="votes">
    <div id="Vu105033">
    <a href="/manual/vote-note.php?id=105033&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105033">
    <a href="/manual/vote-note.php?id=105033&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105033" title="61% like this...">
    3
    </div>
  </div>
  <a href="#105033" class="name">
  <strong class="user"><em>utilmind</em></strong></a><a class="genanchor" href="#105033"> &para;</a><div class="date" title="2011-07-23 03:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105033">
<div class="phpcode"><code><span class="html">Here is the function which determines whether the PNG image contains alpha or not:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">is_alpha_png</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">){
<br />  return (</span><span class="default">ord</span><span class="keyword">(@</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) == </span><span class="default">6</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />The color type of PNG image is stored at byte offset 25. Possible values of that 25'th byte is:
<br /> * 0 - greyscale
<br /> * 2 - RGB
<br /> * 3 - RGB with palette
<br /> * 4 - greyscale + alpha
<br /> * 6 - RGB + alpha</span></code></div>
  </div>
 </div>
  <div class="note" id="82245">  <div class="votes">
    <div id="Vu82245">
    <a href="/manual/vote-note.php?id=82245&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82245">
    <a href="/manual/vote-note.php?id=82245&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82245" title="58% like this...">
    5
    </div>
  </div>
  <a href="#82245" class="name">
  <strong class="user"><em>info at alex-lawrence dot com</em></strong></a><a class="genanchor" href="#82245"> &para;</a><div class="date" title="2008-04-02 05:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82245">
<div class="phpcode"><code><span class="html">Could be useful (didn´t know where to post it):<br /><br />function getImageErrors( $filename, $type = "", $minWidth = 0, $minHeight = 0, $maxWidth = 0, $maxHeight = 0, $maxFileSize = 0 )<br />{<br />    $errors = array();<br />    if ( file_exists( $filename ) )<br />    {<br />        $ending = substr( $filename, strpos( $filename, "." ) );<br />        if ( is_array( $type ) )<br />        {<br />            $isTypeOf = false;<br />            foreach( $type as $eachtype )<br />            {<br />                if ( $ending == $eachtype )<br />                {<br />                    $isTypeOf = true;<br />                }<br />            }<br />            if ( ! $isTypeOf )<br />            {<br />                $errors[ 'type' ] = $ending;<br />            }<br />        }<br />        elseif ( $type != "" )<br />        {<br />            if ( $ending != $type )<br />            {<br />                $errors[ 'type' ] = $ending;<br />            }<br />        }<br />        $size = getimagesize( $filename );<br />        if ( $size[ 0 ] &lt; $minWidth )<br />        {<br />            $errors[ 'minWidth' ] = $size[ 0 ];<br />        }<br />        if ( $size[ 1 ] &lt; $minHeight )<br />        {<br />            $errors[ 'minHeight' ] = $size[ 1 ];<br />        }<br />        if ( ( $maxWidth &gt; $minWidth ) &amp;&amp; ( $size[ 0 ] &gt; $maxWidth ) )<br />        {<br />            $errors[ 'maxWidth' ] = $size[ 0 ];<br />        }<br />        if ( ( $maxHeight &gt; $minHeight ) &amp;&amp; ( $size[ 1 ] &gt; $maxHeight ) )<br />        {<br />            $errors[ 'maxHeight' ] = $size[ 1 ];<br />        }<br />        if ( ( $maxFileSize &gt; 0 ) &amp;&amp; ( filesize( $filename ) &gt; $maxFileSize ) )<br />        {<br />            $errors[ 'maxFileSize' ] = filesize( $filename );<br />        }<br />    }<br />    else<br />    {<br />        $errors[ 'filename' ] = "not existing";<br />    }<br />    return ( count( $errors ) &gt; 0 ? $errors : null );<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="103516">  <div class="votes">
    <div id="Vu103516">
    <a href="/manual/vote-note.php?id=103516&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103516">
    <a href="/manual/vote-note.php?id=103516&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103516" title="57% like this...">
    3
    </div>
  </div>
  <a href="#103516" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#103516"> &para;</a><div class="date" title="2011-04-17 03:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103516">
<div class="phpcode"><code><span class="html">The list of defined IMAGETYPE_ constants is on the manual page for exif_imagetype:<br /><br /><a href="http://www.php.net/manual/en/function.exif-imagetype.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.exif-imagetype.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="81043">  <div class="votes">
    <div id="Vu81043">
    <a href="/manual/vote-note.php?id=81043&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81043">
    <a href="/manual/vote-note.php?id=81043&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81043" title="58% like this...">
    2
    </div>
  </div>
  <a href="#81043" class="name">
  <strong class="user"><em>shmohel at gmail dot com</em></strong></a><a class="genanchor" href="#81043"> &para;</a><div class="date" title="2008-02-12 06:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81043">
<div class="phpcode"><code><span class="html">Rather than making a lengthy function that essentially runs twice (once as width, once as height) I came up with a helpful function that uses variable variables to set a maximum height/width. Hope someone finds this helpful.<br /><br />function scaleimage($location, $maxw=NULL, $maxh=NULL){<br />    $img = @getimagesize($location);<br />    if($img){<br />        $w = $img[0];<br />        $h = $img[1];<br /><br />        $dim = array('w','h');<br />        foreach($dim AS $val){<br />            $max = "max{$val}";<br />            if(${$val} &gt; ${$max} &amp;&amp; ${$max}){<br />                $alt = ($val == 'w') ? 'h' : 'w';<br />                $ratio = ${$alt} / ${$val};<br />                ${$val} = ${$max};<br />                ${$alt} = ${$val} * $ratio;<br />            }<br />        }<br /><br />        return("&lt;img src='{$location}' alt='image' width='{$w}' height='{$h}' /&gt;");<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="80267">  <div class="votes">
    <div id="Vu80267">
    <a href="/manual/vote-note.php?id=80267&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80267">
    <a href="/manual/vote-note.php?id=80267&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80267" title="58% like this...">
    2
    </div>
  </div>
  <a href="#80267" class="name">
  <strong class="user"><em>info at personalmis dot com</em></strong></a><a class="genanchor" href="#80267"> &para;</a><div class="date" title="2008-01-07 04:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80267">
<div class="phpcode"><code><span class="html">Seems the various ways people are trying to proportionaly scale an image, up or down, could be more straight forward if one remembers ones algebra.<br /><br />The formula is, y = mx, where m is the slope of the line. This is the ratio of y:x or m = y/x.<br /><br />So if...<br /><br />// max values for x and y<br />$y_max = 600;<br />$x_max = 800;<br /><br />// image size<br />$y1 = 2000;<br />$x1 = 3000;<br /><br />// use width for scaling<br />if ($x1 &gt; $x_max)<br />{<br />    // find slope <br />    $m = $y1/$x1;<br />    // set x side to max<br />    $x2 = $x_max;<br />    // set y side to a proportional size<br />    $y2 = $m * $x1;<br />}<br /><br />The new image proportionally scaled will be x2 = 800, y2 = 533 (rounded).<br /><br />To do it from the y side, simply reverse the x's and y's.</span></code></div>
  </div>
 </div>
  <div class="note" id="94178">  <div class="votes">
    <div id="Vu94178">
    <a href="/manual/vote-note.php?id=94178&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94178">
    <a href="/manual/vote-note.php?id=94178&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94178" title="57% like this...">
    2
    </div>
  </div>
  <a href="#94178" class="name">
  <strong class="user"><em>geoff at spacevs dot com</em></strong></a><a class="genanchor" href="#94178"> &para;</a><div class="date" title="2009-10-20 11:22"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94178">
<div class="phpcode"><code><span class="html">This function returns the width and height of a JPEG image from a string, allowing the dimensions of images stored in a database to be retrieved without writing them to the disk first, or using "imagecreatefromstring" which is very slow in comparison.<br /><br /><span class="default">&lt;?PHP<br /></span><span class="keyword">function </span><span class="default">getJPEGImageXY</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />        </span><span class="default">$soi </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'nmagic/nmarker'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />        if (</span><span class="default">$soi</span><span class="keyword">[</span><span class="string">'magic'</span><span class="keyword">] != </span><span class="default">0xFFD8</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$marker </span><span class="keyword">= </span><span class="default">$soi</span><span class="keyword">[</span><span class="string">'marker'</span><span class="keyword">];<br />        </span><span class="default">$data   </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />        </span><span class="default">$done   </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />        while(</span><span class="default">1</span><span class="keyword">) {<br />                if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />                switch(</span><span class="default">$marker</span><span class="keyword">) {<br />                        case </span><span class="default">0xFFC0</span><span class="keyword">:<br />                                </span><span class="default">$info </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'nlength/Cprecision/nY/nX'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />                                return array(</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'X'</span><span class="keyword">], </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'Y'</span><span class="keyword">]);<br />                                break;<br /><br />                        default:<br />                                </span><span class="default">$info   </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'nlength'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />                                </span><span class="default">$data   </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'length'</span><span class="keyword">]);<br />                                </span><span class="default">$info   </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'nmarker'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />                                </span><span class="default">$marker </span><span class="keyword">= </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'marker'</span><span class="keyword">];<br />                                </span><span class="default">$data   </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />                                break;<br />                }<br />        }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Doing this 10,000 times takes 0.43 seconds, compared with using imagecreatefromstring/imagesx/imagesy which takes around 1.52 seconds to do the same.<br /><br />Do not use this instead of getimagesize when dealing with files, getimagesize is much faster coming in at 0.15 seconds.</span></code></div>
  </div>
 </div>
  <div class="note" id="81380">  <div class="votes">
    <div id="Vu81380">
    <a href="/manual/vote-note.php?id=81380&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81380">
    <a href="/manual/vote-note.php?id=81380&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81380" title="56% like this...">
    2
    </div>
  </div>
  <a href="#81380" class="name">
  <strong class="user"><em>cloned at clonedmadman dot com</em></strong></a><a class="genanchor" href="#81380"> &para;</a><div class="date" title="2008-02-25 02:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81380">
<div class="phpcode"><code><span class="html">Well, I am making a script which will resize the image when uploaded, however, i am making a multi-uploader, so i came across with a problem: an efficient way of getting a pictures height and width and storing them in an array to resize later. This is what i came up with:<br /><br /><span class="default">&lt;?php<br />$links </span><span class="keyword">= array(</span><span class="string">"test1.jpg"</span><span class="keyword">, </span><span class="string">"test2.png"</span><span class="keyword">);<br /></span><span class="default">$sizearray </span><span class="keyword">= array();<br /></span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$links</span><span class="keyword">);<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$links</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">$size</span><span class="keyword">;<br />    </span><span class="default">$sizearray</span><span class="keyword">[</span><span class="default">$links</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]] = array(</span><span class="string">"width" </span><span class="keyword">=&gt; </span><span class="default">$width</span><span class="keyword">, </span><span class="string">"height" </span><span class="keyword">=&gt; </span><span class="default">$height</span><span class="keyword">);<br />}<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$sizearray</span><span class="keyword">);<br /></span><span class="comment">// which will print out: Array ( [test1.jpg] =&gt; Array ( [width] =&gt; 300 [height] =&gt; 400 ) [test2.png] =&gt; Array ( [width] =&gt; 680 [height] =&gt; 100 ) )<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42662">  <div class="votes">
    <div id="Vu42662">
    <a href="/manual/vote-note.php?id=42662&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42662">
    <a href="/manual/vote-note.php?id=42662&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42662" title="55% like this...">
    2
    </div>
  </div>
  <a href="#42662" class="name">
  <strong class="user"><em>diablx at hotmail dot com</em></strong></a><a class="genanchor" href="#42662"> &para;</a><div class="date" title="2004-05-25 02:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42662">
<div class="phpcode"><code><span class="html">I'm sorry for they other scripts, but I made one mistake about the image resizing... here is a working script !<br />&lt;?<br />    // Some configuration variables !<br />    $maxWidth = 90;<br />    $maxHeight = 90;<br />    $maxCols = 8;<br />    $webDir = "<a href="https://localhost/images/" rel="nofollow" target="_blank">https://localhost/images/</a>";<br />    $localDir = $_SERVER['DOCUMENT_ROOT']."/images/";<br /><br />    $AutorisedImageType = array ("jpg", "jpeg", "gif", "png");<br />?&gt;<br /><br />&lt;center&gt;<br />&lt;table border='1' cellspacing='5' cellpadding='5' style="border-collapse:collapse; border-style: dotted"&gt;<br />&lt;tr&gt;<br />   &lt;?<br />   // Open localDir<br />   $dh = opendir($localDir);<br />   while (false !== ($filename = readdir($dh))) {<br />       $filesArray[] = $filename;<br />   }<br /><br />   // Display and resize<br />   foreach ($filesArray as $images) {<br />   <br />       $ext = substr($images, strpos($images, ".")+1, strlen($images));<br />       <br />       if( in_array($ext, $AutorisedImageType) ) {<br /><br />           list($width, $height, $type, $attr) = @getimagesize( $localDir.$images );<br /><br />            $xRatio = $maxWidth / $width; <br />            $yRatio = $maxHeight / $height; <br />            <br />            if ( ($width &lt;= $maxWidth) &amp;&amp; ($height &lt;= $maxHeight) ) { <br />              $newWidth = $width; <br />              $newHeight = $height; <br />            } <br />            else if (($xRatio * $height) &lt; $maxHeight) { <br />              $newHeight = ceil($xRatio * $height); <br />              $newWidth = $maxWidth; <br />            } <br />            else { <br />              $newWidth = ceil($yRatio * $width); <br />              $newHeight = $maxHeight; <br />            } <br />           <br />           if($i == $maxCols) {<br />               echo "&lt;/tr&gt;&lt;tr&gt;";<br />               $i = 0;<br />           }<br />           echo "&lt;td align='center' valign='middle' width='$maxWidth' height='$maxHeight'&gt;&lt;img src='".$webDir.$images."' width='$newWidth' height='$newHeight'&gt;&lt;/td&gt;";<br />           $i++;<br />       }<br />   }<br />?&gt;<br />&lt;/tr&gt;<br />&lt;/table&gt;<br />&lt;/center&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="114601">  <div class="votes">
    <div id="Vu114601">
    <a href="/manual/vote-note.php?id=114601&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114601">
    <a href="/manual/vote-note.php?id=114601&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114601" title="53% like this...">
    1
    </div>
  </div>
  <a href="#114601" class="name">
  <strong class="user"><em>kazuya</em></strong></a><a class="genanchor" href="#114601"> &para;</a><div class="date" title="2014-03-11 02:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114601">
<div class="phpcode"><code><span class="html">i made function img_resize($path,$tmp_name,$new_name,$new_width)<br />this could be useful.<br /><br /><span class="default">&lt;?php<br /><br />$new_file </span><span class="keyword">= </span><span class="default">img_resize</span><span class="keyword">(</span><span class="string">"./img/"</span><span class="keyword">, </span><span class="string">"test.jpg"</span><span class="keyword">,</span><span class="string">"copy_test.jpg"</span><span class="keyword">,</span><span class="default">300</span><span class="keyword">);<br />echo </span><span class="string">"&lt;IMG src = '</span><span class="default">$new_file</span><span class="string">'&gt;"</span><span class="keyword">;<br /><br />function </span><span class="default">img_resize</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">$tmp_name</span><span class="keyword">,</span><span class="default">$new_name</span><span class="keyword">,</span><span class="default">$new_width</span><span class="keyword">){<br />    if (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">)){<br />        echo </span><span class="string">"file not found!"</span><span class="keyword">;<br />        exit;<br />    }<br />    if (!</span><span class="default">is_writable</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)){<br />        echo </span><span class="string">"error:permission denied!"</span><span class="keyword">;<br />        exit;<br />    }<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$tmp_name</span><span class="keyword">);<br />    </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$new_width </span><span class="keyword">* </span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$width</span><span class="keyword">); <br />    </span><span class="default">$image_p </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">);<br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$tmp_name</span><span class="keyword">); <br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,<br />                        </span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">); <br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">$path </span><span class="keyword">. </span><span class="default">$new_name</span><span class="keyword">); <br />    return </span><span class="default">$path</span><span class="keyword">.</span><span class="default">$new_name</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107537">  <div class="votes">
    <div id="Vu107537">
    <a href="/manual/vote-note.php?id=107537&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107537">
    <a href="/manual/vote-note.php?id=107537&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107537" title="52% like this...">
    1
    </div>
  </div>
  <a href="#107537" class="name">
  <strong class="user"><em>alexyam at live dot com</em></strong></a><a class="genanchor" href="#107537"> &para;</a><div class="date" title="2012-02-15 11:30"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107537">
<div class="phpcode"><code><span class="html">I wanted to use getimagesize() on .SWF files stored in the database as blob data and couldn't find a simple solution, so I created my own.<br /><br />I am releasing this code under the MIT license to save everyone some time:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />    ----------------------------------------------------------------------<br />    PHP Blob Data As File Stream v1.0 (C) 2012 Alex Yam &lt;alexyam@live.com&gt;<br />    This code is released under the MIT License.<br />    ----------------------------------------------------------------------<br />    [Summary]<br /><br />    A simple class for PHP functions to read and write blob data as a file<br />    using a stream wrapper.<br /><br />    Particularly useful for running getimagesize() to get the width and<br />    height of .SWF Flash files that are stored in the database as blob data.<br /><br />    Tested on PHP 5.3.10.<br /><br />    ----------------------------------------------------------------------    <br />    [Usage Example]<br /><br />    //Include<br />        include('./blob_data_as_file_stream.php');<br /><br />    //Register the stream wrapper<br />        stream_wrapper_register("BlobDataAsFileStream", "blob_data_as_file_stream");<br /><br />    //Fetch a .SWF file from the Adobe website and store it into a variable.<br />    //Replace this with your own fetch-swf-blob-data-from-database code.<br />        $swf_url = '<a href="http://www.adobe.com/swf/software/flash/about/flashAbout_info_small.swf" rel="nofollow" target="_blank">http://www.adobe.com/swf/software/flash/about/flashAbout_info_small.swf</a>';<br />        $swf_blob_data = file_get_contents($swf_url);<br />    <br />    //Store $swf_blob_data to the data stream<br />        blob_data_as_file_stream::$blob_data_stream = $swf_blob_data;<br />    <br />    //Run getimagesize() on the data stream<br />        $swf_info = getimagesize('BlobDataAsFileStream://');<br />        var_dump($swf_info);<br /><br />    ----------------------------------------------------------------------<br />    [Usage Output]<br /><br />    array(5) {<br />      [0]=&gt;<br />      int(159)<br />      [1]=&gt;<br />      int(91)<br />      [2]=&gt;<br />      int(13)<br />      [3]=&gt;<br />      string(23) "width="159" height="91""<br />      ["mime"]=&gt;<br />      string(29) "application/x-shockwave-flash"<br />    }<br /><br />*/<br /><br /></span><span class="keyword">class </span><span class="default">blob_data_as_file_stream </span><span class="keyword">{<br /><br />    private static </span><span class="default">$blob_data_position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    public static </span><span class="default">$blob_data_stream </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />    public static function </span><span class="default">stream_open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">$mode</span><span class="keyword">,</span><span class="default">$options</span><span class="keyword">,&amp;</span><span class="default">$opened_path</span><span class="keyword">){<br />        static::</span><span class="default">$blob_data_position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    public static function </span><span class="default">stream_seek</span><span class="keyword">(</span><span class="default">$seek_offset</span><span class="keyword">,</span><span class="default">$seek_whence</span><span class="keyword">){<br />        </span><span class="default">$blob_data_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(static::</span><span class="default">$blob_data_stream</span><span class="keyword">);<br />        switch (</span><span class="default">$seek_whence</span><span class="keyword">) {<br />            case </span><span class="default">SEEK_SET</span><span class="keyword">:<br />                </span><span class="default">$new_blob_data_position </span><span class="keyword">= </span><span class="default">$seek_offset</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">SEEK_CUR</span><span class="keyword">:<br />                </span><span class="default">$new_blob_data_position </span><span class="keyword">= static::</span><span class="default">$blob_data_position</span><span class="keyword">+</span><span class="default">$seek_offset</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">SEEK_END</span><span class="keyword">:<br />                </span><span class="default">$new_blob_data_position </span><span class="keyword">= </span><span class="default">$blob_data_length</span><span class="keyword">+</span><span class="default">$seek_offset</span><span class="keyword">;<br />                break;<br />            default:<br />                return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        if ((</span><span class="default">$new_blob_data_position </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) AND (</span><span class="default">$new_blob_data_position </span><span class="keyword">&lt;= </span><span class="default">$blob_data_length</span><span class="keyword">)){<br />            static::</span><span class="default">$blob_data_position </span><span class="keyword">= </span><span class="default">$new_blob_data_position</span><span class="keyword">;<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }else{<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    public static function </span><span class="default">stream_tell</span><span class="keyword">(){<br />        return static::</span><span class="default">$blob_data_position</span><span class="keyword">;<br />    }<br /><br />    public static function </span><span class="default">stream_read</span><span class="keyword">(</span><span class="default">$read_buffer_size</span><span class="keyword">){<br />        </span><span class="default">$read_data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(static::</span><span class="default">$blob_data_stream</span><span class="keyword">,static::</span><span class="default">$blob_data_position</span><span class="keyword">,</span><span class="default">$read_buffer_size</span><span class="keyword">);<br />        static::</span><span class="default">$blob_data_position </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$read_data</span><span class="keyword">);<br />        return </span><span class="default">$read_data</span><span class="keyword">;<br />    }<br /><br />    public static function </span><span class="default">stream_write</span><span class="keyword">(</span><span class="default">$write_data</span><span class="keyword">){<br />        </span><span class="default">$write_data_length</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$write_data</span><span class="keyword">);<br />        static::</span><span class="default">$blob_data_stream </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(static::</span><span class="default">$blob_data_stream</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,static::</span><span class="default">$blob_data_position</span><span class="keyword">).<br />            </span><span class="default">$write_data</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(static::</span><span class="default">$blob_data_stream</span><span class="keyword">,static::</span><span class="default">$blob_data_position</span><span class="keyword">+=</span><span class="default">$write_data_length</span><span class="keyword">);<br />        return </span><span class="default">$write_data_length</span><span class="keyword">;<br />    }<br /><br />    public static function </span><span class="default">stream_eof</span><span class="keyword">(){<br />        return static::</span><span class="default">$blob_data_position </span><span class="keyword">&gt;= </span><span class="default">strlen</span><span class="keyword">(static::</span><span class="default">$blob_data_stream</span><span class="keyword">);<br />    }<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52099">  <div class="votes">
    <div id="Vu52099">
    <a href="/manual/vote-note.php?id=52099&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52099">
    <a href="/manual/vote-note.php?id=52099&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52099" title="53% like this...">
    1
    </div>
  </div>
  <a href="#52099" class="name">
  <strong class="user"><em>ajreading at classixshop dot com</em></strong></a><a class="genanchor" href="#52099"> &para;</a><div class="date" title="2005-04-21 01:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52099">
<div class="phpcode"><code><span class="html">A simple piece of code i wrote to proportionally resize an image to a max height and width then display it<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Max height and width<br /></span><span class="default">$max_width </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br /></span><span class="default">$max_height </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br /><br /></span><span class="comment">// Path to your jpeg<br /><br /></span><span class="default">$upfile </span><span class="string">'/path/to/file.jpg'</span><span class="keyword">;<br />    </span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br />    <br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">GetImageSize</span><span class="keyword">(</span><span class="default">$upfile</span><span class="keyword">); </span><span class="comment">// Read the size<br />          </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />          </span><span class="default">$height </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />          <br />          </span><span class="comment">// Proportionally resize the image to the<br />          // max sizes specified above<br />          <br />          </span><span class="default">$x_ratio </span><span class="keyword">= </span><span class="default">$max_width </span><span class="keyword">/ </span><span class="default">$width</span><span class="keyword">;<br />          </span><span class="default">$y_ratio </span><span class="keyword">= </span><span class="default">$max_height </span><span class="keyword">/ </span><span class="default">$height</span><span class="keyword">;<br /><br />          if( (</span><span class="default">$width </span><span class="keyword">&lt;= </span><span class="default">$max_width</span><span class="keyword">) &amp;&amp; (</span><span class="default">$height </span><span class="keyword">&lt;= </span><span class="default">$max_height</span><span class="keyword">) )<br />          {<br />               </span><span class="default">$tn_width </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">;<br />               </span><span class="default">$tn_height </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">;<br />          }<br />          elseif ((</span><span class="default">$x_ratio </span><span class="keyword">* </span><span class="default">$height</span><span class="keyword">) &lt; </span><span class="default">$max_height</span><span class="keyword">)<br />          {<br />               </span><span class="default">$tn_height </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$x_ratio </span><span class="keyword">* </span><span class="default">$height</span><span class="keyword">);<br />               </span><span class="default">$tn_width </span><span class="keyword">= </span><span class="default">$max_width</span><span class="keyword">;<br />          }<br />          else<br />          {<br />               </span><span class="default">$tn_width </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$y_ratio </span><span class="keyword">* </span><span class="default">$width</span><span class="keyword">);<br />               </span><span class="default">$tn_height </span><span class="keyword">= </span><span class="default">$max_height</span><span class="keyword">;<br />          }<br />     </span><span class="comment">// Increase memory limit to support larger files<br />     <br />     </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'memory_limit'</span><span class="keyword">, </span><span class="string">'32M'</span><span class="keyword">);<br />     <br />     </span><span class="comment">// Create the new image!<br />     </span><span class="default">$src </span><span class="keyword">= </span><span class="default">ImageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$upfile</span><span class="keyword">);<br />     </span><span class="default">$dst </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$tn_width</span><span class="keyword">, </span><span class="default">$tn_height</span><span class="keyword">);<br />     </span><span class="default">ImageCopyResized</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tn_width</span><span class="keyword">, </span><span class="default">$tn_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />     </span><span class="default">ImageJpeg</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">);<br /></span><span class="comment">// Destroy the images<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121714">  <div class="votes">
    <div id="Vu121714">
    <a href="/manual/vote-note.php?id=121714&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121714">
    <a href="/manual/vote-note.php?id=121714&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121714" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121714" class="name">
  <strong class="user"><em>freecorvette at gmail dot com</em></strong></a><a class="genanchor" href="#121714"> &para;</a><div class="date" title="2017-10-03 08:03"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121714">
<div class="phpcode"><code><span class="html">For some images, using getimagesize() without the second parameter will return the correct info, but when you add the second parameter it will return false. This is most likely a bug (and it has been reported as such), but meanwhile, if you encounter this problem, a workaround is to use exif_read_data().</span></code></div>
  </div>
 </div>
  <div class="note" id="102418">  <div class="votes">
    <div id="Vu102418">
    <a href="/manual/vote-note.php?id=102418&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102418">
    <a href="/manual/vote-note.php?id=102418&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102418" title="50% like this...">
    0
    </div>
  </div>
  <a href="#102418" class="name">
  <strong class="user"><em>Jesus Zamora</em></strong></a><a class="genanchor" href="#102418"> &para;</a><div class="date" title="2011-02-13 06:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102418">
<div class="phpcode"><code><span class="html">Returns a array with 4 elements.<br />The 0 index is the width of the image in pixels.<br />The 1 index is the height of the image in pixels.<br />The 2 index is a flag for the image type:<br /><br />1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF, 5 = PSD, 6 = BMP, 7 = TIFF(orden de bytes intel), 8 = TIFF(orden de bytes motorola), 9 = JPC, 10 = JP2, 11 = JPX, 12 = JB2, 13 = SWC, 14 = IFF, 15 = WBMP, 16 = XBM. <br /><br />The 3 index contains ' height="yyy" width="xxx" '</span></code></div>
  </div>
 </div>
  <div class="note" id="87188">  <div class="votes">
    <div id="Vu87188">
    <a href="/manual/vote-note.php?id=87188&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87188">
    <a href="/manual/vote-note.php?id=87188&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87188" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87188" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#87188"> &para;</a><div class="date" title="2008-11-23 08:30"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87188">
<div class="phpcode"><code><span class="html">Note that if you specify a remote file (via a URL) to check the size of, PHP will first download the remote file to your server.<br /><br />If you're using this function to check the size of user provided image links, this could constitute a security risk.  A malicious user could potentially link to a very large image file and cause PHP to download it.  I do not know what, if any, file size limits are in place for the download.  But suppose the user provided a link to an image that was several gigabytes in size?<br /><br />It would be nice if there were a way to limit the size of the download performed by this function.  Hopefully there is already a default with some sensible limits.</span></code></div>
  </div>
 </div>
  <div class="note" id="51444">  <div class="votes">
    <div id="Vu51444">
    <a href="/manual/vote-note.php?id=51444&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51444">
    <a href="/manual/vote-note.php?id=51444&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51444" title="50% like this...">
    0
    </div>
  </div>
  <a href="#51444" class="name">
  <strong class="user"><em>mail at soylentgreens dot com</em></strong></a><a class="genanchor" href="#51444"> &para;</a><div class="date" title="2005-03-30 06:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51444">
<div class="phpcode"><code><span class="html">How about this for cropping images...<br /><br /><span class="default">&lt;?php<br /><br />$imgfile </span><span class="keyword">= </span><span class="string">"img.jpg"</span><span class="keyword">;<br /></span><span class="default">$cropStartX </span><span class="keyword">= </span><span class="default">300</span><span class="keyword">;<br /></span><span class="default">$cropStartY </span><span class="keyword">= </span><span class="default">250</span><span class="keyword">;<br /></span><span class="default">$cropW   </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$cropH   </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /><br /></span><span class="comment">// Create two images<br /></span><span class="default">$origimg </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br /></span><span class="default">$cropimg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$cropW</span><span class="keyword">,</span><span class="default">$cropH</span><span class="keyword">);<br /><br /></span><span class="comment">// Get the original size<br /></span><span class="keyword">list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br /><br /></span><span class="comment">// Crop<br /></span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$cropimg</span><span class="keyword">, </span><span class="default">$origimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$cropStartX</span><span class="keyword">, </span><span class="default">$cropStartY</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /><br /></span><span class="comment">// TODO: write code to save new image<br />// or, just display it like this:<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$cropimg</span><span class="keyword">);<br /><br /></span><span class="comment">// destroy the images<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$cropimg</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$origimg</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84649">  <div class="votes">
    <div id="Vu84649">
    <a href="/manual/vote-note.php?id=84649&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84649">
    <a href="/manual/vote-note.php?id=84649&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84649" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#84649" class="name">
  <strong class="user"><em>user at example dot net</em></strong></a><a class="genanchor" href="#84649"> &para;</a><div class="date" title="2008-07-23 09:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84649">
<div class="phpcode"><code><span class="html">When validating images, allways check both, image type *AND* file extension!<br /><br />Because most image types allow sections for comments or other irrelevant data. Those section can be used to infiltrate php code onto the server. If these files are stored as sent by the client, files with a ".php" extension can be executed and do tremendous harm.</span></code></div>
  </div>
 </div>
  <div class="note" id="50996">  <div class="votes">
    <div id="Vu50996">
    <a href="/manual/vote-note.php?id=50996&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50996">
    <a href="/manual/vote-note.php?id=50996&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50996" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#50996" class="name">
  <strong class="user"><em>Coodiss at w3bbix dot net</em></strong></a><a class="genanchor" href="#50996"> &para;</a><div class="date" title="2005-03-15 09:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50996">
<div class="phpcode"><code><span class="html">Heres a easy way to scale images to the &lt;td&gt; that they are in<br />*this is broken up so anyone can understand it :)<br /><br />&lt;?<br />$imageinfo = getimagesize("images/picture.jpg");<br />          <br />$ix=$imageinfo[0];<br />$iy=$imageinfo[1];<br /><br />$widthscale = $ix/175;  //&lt;TD&gt; WIDTH<br />$heightscale = $iy/175; //&lt;TD&gt; HEIGHT<br /><br />if($widthscale &lt; 1)<br />$nwidth = $ix*$widthscale;<br />else<br />$nwidth = $ix/$widthscale;<br /><br />if($heightscale &lt; 1)<br />$nheight = $iy*$heightscale;<br />else<br />$nheight = $iy/$heightscale;<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="80346">  <div class="votes">
    <div id="Vu80346">
    <a href="/manual/vote-note.php?id=80346&amp;page=function.getimagesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80346">
    <a href="/manual/vote-note.php?id=80346&amp;page=function.getimagesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80346" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#80346" class="name">
  <strong class="user"><em>pfarthing at hotmail dot com</em></strong></a><a class="genanchor" href="#80346"> &para;</a><div class="date" title="2008-01-10 03:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80346">
<div class="phpcode"><code><span class="html">Correction: to find $y2 it should be...<br /><br />// set y side to a proportional size<br />$y2 = $m * $x_max; // not $x1<br /><br />Thanks Norbert =)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.getimagesize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getimagesize.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.image.php">GD and Image Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gd-info.php" title="gd_&#8203;info">gd_&#8203;info</a>
                        </li>
                                                <li class="current">
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
