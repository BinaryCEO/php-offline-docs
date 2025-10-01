<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: exif_read_data - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.exif-read-data.php">
 <link rel="shorturl" href="https://www.php.net/exif-read-data">
 <link rel="alternate" href="https://www.php.net/exif-read-data" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exif.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.exif-imagetype.php">
 <link rel="next" href="https://www.php.net/manual/en/function.exif-tagname.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.exif-read-data.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.exif-read-data.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.exif-read-data.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.exif-read-data.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.exif-read-data.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.exif-read-data.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.exif-read-data.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.exif-read-data.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.exif-read-data.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.exif-read-data.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.exif-read-data.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Reads the EXIF headers from an image file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: exif_read_data - Manual" />
<meta name="twitter:description" content="Reads the EXIF headers from an image file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: exif_read_data - Manual" />
<meta itemprop="description" content="Reads the EXIF headers from an image file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Reads the EXIF headers from an image file" />

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
        <a href="function.exif-tagname.php">
          exif_tagname &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.exif-imagetype.php">
          &laquo; exif_imagetype        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.exif.php'>Exif</a></li>      <li><a href='ref.exif.php'>Exif Functions</a></li>      </ul>
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
            <option value='en/function.exif-read-data.php' selected="selected">English</option>
            <option value='de/function.exif-read-data.php'>German</option>
            <option value='es/function.exif-read-data.php'>Spanish</option>
            <option value='fr/function.exif-read-data.php'>French</option>
            <option value='it/function.exif-read-data.php'>Italian</option>
            <option value='ja/function.exif-read-data.php'>Japanese</option>
            <option value='pt_BR/function.exif-read-data.php'>Brazilian Portuguese</option>
            <option value='ru/function.exif-read-data.php'>Russian</option>
            <option value='tr/function.exif-read-data.php'>Turkish</option>
            <option value='uk/function.exif-read-data.php'>Ukrainian</option>
            <option value='zh/function.exif-read-data.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.exif-read-data" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">exif_read_data</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">exif_read_data</span> &mdash; <span class="dc-title">Reads the <abbr title="Exchangeable Image File ">EXIF</abbr> headers from an image file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.exif-read-data-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>exif_read_data</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$file</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$required_sections</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$as_arrays</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$read_thumbnail</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>exif_read_data()</strong></span> reads the
   <abbr title="Exchangeable Image File ">EXIF</abbr> headers from an image file. This way you can read meta data 
   generated by digital cameras.
  </p>
  <p class="para">
   <abbr title="Exchangeable Image File ">EXIF</abbr> headers tend to be present in JPEG/TIFF images generated by digital
   cameras, but unfortunately each digital camera maker has a different
   idea of how to actually tag their images, so you can&#039;t always rely on
   a specific Exif header being present.
  </p>
  <p class="para">
   <code class="literal">Height</code> and <code class="literal">Width</code> are computed the 
   same way <span class="function"><a href="function.getimagesize.php" class="function">getimagesize()</a></span> does so their values must not be 
   part of any header returned.  Also, <code class="literal">html</code> is a 
   height/width text string to be used inside normal <abbr title="Hyper Text Markup Language">HTML</abbr>.
  </p>
  <p class="para">
   When an Exif header contains a Copyright note, this itself can contain two
   values. As the solution is inconsistent in the Exif 2.10 standard, the
   <code class="literal">COMPUTED</code> section will return both entries
   <code class="literal">Copyright.Photographer</code> and
   <code class="literal">Copyright.Editor</code> while the <code class="literal">IFD0</code>
   sections contains the byte array with the NULL character that splits both
   entries. Or just the first entry if the datatype was wrong (normal behaviour
   of Exif). The <code class="literal">COMPUTED</code> will also contain the entry
   <code class="literal">Copyright</code> which is either the original copyright string,
   or a comma separated list of the photo and editor copyright.
  </p>
  <p class="para">
   The tag <code class="literal">UserComment</code> has the same problem as the Copyright
   tag. It can store two values.  First the encoding used, and second the value
   itself. If so the <code class="literal">IFD</code> section only contains the encoding
   or a byte array. The <code class="literal">COMPUTED</code> section will store both in
   the entries <code class="literal">UserCommentEncoding</code> and
   <code class="literal">UserComment</code>. The entry <code class="literal">UserComment</code>
   is available in both cases so it should be used in preference to the value
   in <code class="literal">IFD0</code> section.
  </p>
  <p class="para">
   <span class="function"><strong>exif_read_data()</strong></span> also validates EXIF data tags according
   to the EXIF specification (<a href="http://exif.org/Exif2-2.PDF" class="link external">&raquo;&nbsp;http://exif.org/Exif2-2.PDF</a>, page 20).
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.exif-read-data-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">file</code></dt>
     <dd>
      <p class="para">
       The location of the image file. This can either be a path to the file
       (stream wrappers are also supported as usual)
       or a stream <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">required_sections</code></dt>
     <dd>
      <p class="para">
       Is a comma separated list of sections that need to be present in file 
       to produce a result <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.  If none of the requested 
       sections could be found the return value is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
       <table class="doctable informaltable">
        
         <tbody class="tbody">
          <tr>
           <td>FILE</td>
           <td>FileName, FileSize, FileDateTime, SectionsFound</td>
          </tr>

          <tr>
           <td>COMPUTED</td>
           <td>
            html, Width, Height, IsColor, and more if available.  Height and 
            Width are computed the same way <span class="function"><a href="function.getimagesize.php" class="function">getimagesize()</a></span>
            does so their values must not be part of any header returned. 
            Also, <code class="literal">html</code> is a height/width text string to be used inside normal 
            <abbr title="Hyper Text Markup Language">HTML</abbr>.
           </td>
          </tr>

          <tr>
           <td>ANY_TAG</td>
           <td>Any information that has a Tag e.g. <code class="literal">IFD0</code>, <code class="literal">EXIF</code>, ...</td>
          </tr>

          <tr>
           <td>IFD0</td>
           <td>
            All tagged data of IFD0. In normal imagefiles this contains
            image size and so forth.
           </td>
          </tr>

          <tr>
           <td>THUMBNAIL</td>
           <td>
            A file is supposed to contain a thumbnail if it has a second <code class="literal">IFD</code>.
            All tagged information about the embedded thumbnail is stored in 
            this section.
           </td>
          </tr>

          <tr>
           <td>COMMENT</td>
           <td>Comment headers of JPEG images.</td>
          </tr>

          <tr>
           <td>EXIF</td>
           <td>
            The EXIF section is a sub section of <code class="literal">IFD0</code>. It contains
            more detailed information about an image. Most of these entries
            are digital camera related.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">as_arrays</code></dt>
      <dd>
      <p class="para">
       Specifies whether or not each section becomes an array. The 
       <code class="parameter">required_sections</code> <code class="literal">COMPUTED</code>,
       <code class="literal">THUMBNAIL</code>, and <code class="literal">COMMENT</code> 
       always become arrays as they may contain values whose names conflict
       with other sections.
      </p>
     </dd>
    
    
     <dt><code class="parameter">read_thumbnail</code></dt>
     <dd>
      <p class="para">
       When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> the thumbnail itself is read.  Otherwise, only the
       tagged data is read.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>
    
 <div class="refsect1 returnvalues" id="refsect1-function.exif-read-data-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   It returns an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> where the array indexes are 
   the header names and the array values are the values associated with 
   those headers. If no data can be returned, 
   <span class="function"><strong>exif_read_data()</strong></span> will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.exif-read-data-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Errors of level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> and/or <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>
   may be raised for unsupported tags or other potential error conditions, but the
   function still tries to read all comprehensible information.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.exif-read-data-changelog">
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
       <td>8.0.0</td>
       <td>
        <code class="parameter">required_sections</code> is nullable now.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        The <code class="parameter">file</code> parameter now supports both local files 
        and stream resources.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        <p class="para">
         Support for the following EXIF formats were added:
         <ul class="simplelist">
          <li>Samsung</li>
          <li>DJI</li>
          <li>Panasonic</li>
          <li>Sony</li>
          <li>Pentax</li>
          <li>Minolta</li>
          <li>Sigma/Foveon</li>
          <li>AGFA</li>
          <li>Kyocera</li>
          <li>Ricoh</li>
          <li>Epson</li>
         </ul>
        </p>
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.exif-read-data-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2813">
    <p><strong>Example #1 <span class="function"><strong>exif_read_data()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"test1.jpg:&lt;br /&gt;\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$exif </span><span style="color: #007700">= </span><span style="color: #0000BB">exif_read_data</span><span style="color: #007700">(</span><span style="color: #DD0000">'tests/test1.jpg'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IFD0'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$exif</span><span style="color: #007700">===</span><span style="color: #0000BB">false </span><span style="color: #007700">? </span><span style="color: #DD0000">"No header data found.&lt;br /&gt;\n" </span><span style="color: #007700">: </span><span style="color: #DD0000">"Image contains headers&lt;br /&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$exif </span><span style="color: #007700">= </span><span style="color: #0000BB">exif_read_data</span><span style="color: #007700">(</span><span style="color: #DD0000">'tests/test2.jpg'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"test2.jpg:&lt;br /&gt;\n"</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">$exif </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$section</span><span style="color: #007700">) {<br />    foreach (</span><span style="color: #0000BB">$section </span><span style="color: #007700">as </span><span style="color: #0000BB">$name </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">.</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$val</span><span style="color: #DD0000">&lt;br /&gt;\n"</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     The first call fails because the image has no header information.
    </p></div>
    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">test1.jpg:
No header data found.
test2.jpg:
FILE.FileName: test2.jpg
FILE.FileDateTime: 1017666176
FILE.FileSize: 1240
FILE.FileType: 2
FILE.SectionsFound: ANY_TAG, IFD0, THUMBNAIL, COMMENT
COMPUTED.html: width=&quot;1&quot; height=&quot;1&quot;
COMPUTED.Height: 1
COMPUTED.Width: 1
COMPUTED.IsColor: 1
COMPUTED.ByteOrderMotorola: 1
COMPUTED.UserComment: Exif test image.
COMPUTED.UserCommentEncoding: ASCII
COMPUTED.Copyright: Photo (c) M.Boerger, Edited by M.Boerger.
COMPUTED.Copyright.Photographer: Photo (c) M.Boerger
COMPUTED.Copyright.Editor: Edited by M.Boerger.
IFD0.Copyright: Photo (c) M.Boerger
IFD0.UserComment: ASCII
THUMBNAIL.JPEGInterchangeFormat: 134
THUMBNAIL.JPEGInterchangeFormatLength: 523
COMMENT.0: Comment #1.
COMMENT.1: Comment #2.
COMMENT.2: Comment #3end
THUMBNAIL.JPEGInterchangeFormat: 134
THUMBNAIL.Thumbnail.Height: 1
THUMBNAIL.Thumbnail.Height: 1</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2814">
    <p><strong>Example #2 <span class="function"><strong>exif_read_data()</strong></span> with streams available as of PHP 7.2.0</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Open a the file, this should be in binary mode<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/image.jpg'</span><span style="color: #007700">, </span><span style="color: #DD0000">'rb'</span><span style="color: #007700">);<br /><br />if (!</span><span style="color: #0000BB">$fp</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Error: Unable to open image for reading'</span><span style="color: #007700">;<br />    exit;<br />}<br /><br /></span><span style="color: #FF8000">// Attempt to read the exif headers<br /></span><span style="color: #0000BB">$headers </span><span style="color: #007700">= </span><span style="color: #0000BB">exif_read_data</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br />if (!</span><span style="color: #0000BB">$headers</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Error: Unable to read exif headers'</span><span style="color: #007700">;<br />    exit;<br />}<br /><br /></span><span style="color: #FF8000">// Print the 'COMPUTED' headers<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'EXIF Headers:' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />foreach (</span><span style="color: #0000BB">$headers</span><span style="color: #007700">[</span><span style="color: #DD0000">'COMPUTED'</span><span style="color: #007700">] as </span><span style="color: #0000BB">$header </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">' %s =&gt; %s%s'</span><span style="color: #007700">, </span><span style="color: #0000BB">$header</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">EXIF Headers:
 Height =&gt; 576
 Width =&gt; 1024
 IsColor =&gt; 1
 ByteOrderMotorola =&gt; 0
 ApertureFNumber =&gt; f/5.6
 UserComment =&gt;
 UserCommentEncoding =&gt; UNDEFINED
 Copyright =&gt; Denis
 Thumbnail.FileType =&gt; 2
 Thumbnail.MimeType =&gt; image/jpeg</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.exif-read-data-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If <a href="ref.mbstring.php" class="link">mbstring</a> is enabled, exif will attempt to process 
    the unicode and pick a charset as specified by 
    <a href="exif.configuration.php#ini.exif.decode-unicode-motorola" class="link">exif.decode_unicode_motorola</a> and 
    <a href="exif.configuration.php#ini.exif.decode-unicode-intel" class="link">exif.decode_unicode_intel</a>. The exif 
    extension will not attempt to figure out the encoding on its own, and it is up to the user 
    to properly specify the encoding for which to use for decoding by setting one of these two 
    ini directives prior to calling <span class="function"><strong>exif_read_data()</strong></span>. 
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If the <code class="parameter">file</code> is used to pass a stream to this function, then the stream 
    must be seekable. Note that the file pointer position is not changed after this function returns.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.exif-read-data-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.exif-thumbnail.php" class="function" rel="rdfs-seeAlso">exif_thumbnail()</a> - Retrieve the embedded thumbnail of an image</span></li>
    <li><span class="function"><a href="function.getimagesize.php" class="function" rel="rdfs-seeAlso">getimagesize()</a> - Get the size of an image</span></li>
    <li><a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a></li>
   </ul>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/exif/functions/exif-read-data.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.exif-read-data%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.exif-read-data&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exif-read-data.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110894">  <div class="votes">
    <div id="Vu110894">
    <a href="/manual/vote-note.php?id=110894&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110894">
    <a href="/manual/vote-note.php?id=110894&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110894" title="71% like this...">
    81
    </div>
  </div>
  <a href="#110894" class="name">
  <strong class="user"><em>chadsmith729 at gmail dot com</em></strong></a><a class="genanchor" href="#110894"> &para;</a><div class="date" title="2012-12-20 01:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110894">
<div class="phpcode"><code><span class="html">When the new update came out from Apple for iOS6 it provided the ability for iPad, iPod, and iPhones to be able to upload files from the device through Safari. Obviously this will open up an array of implementations where at one point it was just not possible.<br /><br />The issue comes when a photo is uploaded it will be dependent on the location of the "button" when the photo was taken. Imagine if you will that you have your iPhone turned with the button at the top and you take a photo. The photo when uploaded to your server might be "upside down".<br /><br />The following code will ensure that all uploaded photos will be oriented correctly upon upload:<br /><span class="default">&lt;?php<br />$image </span><span class="keyword">= </span><span class="default">imagecreatefromstring</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'image_upload'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">]));<br /></span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'image_upload'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">]);<br />if(!empty(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">])) {<br />    switch(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">]) {<br />        case </span><span class="default">8</span><span class="keyword">:<br />            </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">90</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />            break;<br />        case </span><span class="default">3</span><span class="keyword">:<br />            </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">180</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />            break;<br />        case </span><span class="default">6</span><span class="keyword">:<br />            </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,-</span><span class="default">90</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />            break;<br />    }<br />}<br /></span><span class="comment">// $image now contains a resource with the image oriented correctly<br /></span><span class="default">?&gt;<br /></span><br />What you do with the image resource from there is entirely up to you.<br /><br />I hope that this helps you identify and orient any image that's uploaded from an iPad, iPhone, or iPod. Orientation for the photo is the key to knowing how to rotate it correctly.</span></code></div>
  </div>
 </div>
  <div class="note" id="124264">  <div class="votes">
    <div id="Vu124264">
    <a href="/manual/vote-note.php?id=124264&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124264">
    <a href="/manual/vote-note.php?id=124264&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124264" title="71% like this...">
    3
    </div>
  </div>
  <a href="#124264" class="name">
  <strong class="user"><em>Tim</em></strong></a><a class="genanchor" href="#124264"> &para;</a><div class="date" title="2019-10-05 08:44"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124264">
<div class="phpcode"><code><span class="html">The following code:<br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="string">'foo.jpg'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'Keywords'</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span>produces string(15) "???????????????"<br /><br />Adding<br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'exif.decode_unicode_motorola'</span><span class="keyword">, </span><span class="string">'UCS-2LE'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>before the call to exif_red_data produces<br />string(15) "landscape;;field"</span></code></div>
  </div>
 </div>
  <div class="note" id="84762">  <div class="votes">
    <div id="Vu84762">
    <a href="/manual/vote-note.php?id=84762&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84762">
    <a href="/manual/vote-note.php?id=84762&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84762" title="68% like this...">
    6
    </div>
  </div>
  <a href="#84762" class="name">
  <strong class="user"><em>darkain at darkain dot com</em></strong></a><a class="genanchor" href="#84762"> &para;</a><div class="date" title="2008-07-28 11:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84762">
<div class="phpcode"><code><span class="html">I wanted some quick and easy functions for computing the shutter speed and f-stop.  I couldn't find any anywhere, so I made some.  It took some research :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">exif_get_float</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {
<br />  </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);
<br />  if (</span><span class="default">$pos </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) return (float) </span><span class="default">$value</span><span class="keyword">;
<br />  </span><span class="default">$a </span><span class="keyword">= (float) </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);
<br />  </span><span class="default">$b </span><span class="keyword">= (float) </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);
<br />  return (</span><span class="default">$b </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) ? (</span><span class="default">$a</span><span class="keyword">) : (</span><span class="default">$a </span><span class="keyword">/ </span><span class="default">$b</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">exif_get_shutter</span><span class="keyword">(&amp;</span><span class="default">$exif</span><span class="keyword">) {
<br />  if (!isset(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'ShutterSpeedValue'</span><span class="keyword">])) return </span><span class="default">false</span><span class="keyword">;
<br />  </span><span class="default">$apex    </span><span class="keyword">= </span><span class="default">exif_get_float</span><span class="keyword">(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'ShutterSpeedValue'</span><span class="keyword">]);
<br />  </span><span class="default">$shutter </span><span class="keyword">= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, -</span><span class="default">$apex</span><span class="keyword">);
<br />  if (</span><span class="default">$shutter </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;
<br />  if (</span><span class="default">$shutter </span><span class="keyword">&gt;= </span><span class="default">1</span><span class="keyword">) return </span><span class="default">round</span><span class="keyword">(</span><span class="default">$shutter</span><span class="keyword">) . </span><span class="string">'s'</span><span class="keyword">;
<br />  return </span><span class="string">'1/' </span><span class="keyword">. </span><span class="default">round</span><span class="keyword">(</span><span class="default">1 </span><span class="keyword">/ </span><span class="default">$shutter</span><span class="keyword">) . </span><span class="string">'s'</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">exif_get_fstop</span><span class="keyword">(&amp;</span><span class="default">$exif</span><span class="keyword">) {
<br />  if (!isset(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'ApertureValue'</span><span class="keyword">])) return </span><span class="default">false</span><span class="keyword">;
<br />  </span><span class="default">$apex  </span><span class="keyword">= </span><span class="default">exif_get_float</span><span class="keyword">(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'ApertureValue'</span><span class="keyword">]);
<br />  </span><span class="default">$fstop </span><span class="keyword">= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$apex</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br />  if (</span><span class="default">$fstop </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;
<br />  return </span><span class="string">'f/' </span><span class="keyword">. </span><span class="default">round</span><span class="keyword">(</span><span class="default">$fstop</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107888">  <div class="votes">
    <div id="Vu107888">
    <a href="/manual/vote-note.php?id=107888&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107888">
    <a href="/manual/vote-note.php?id=107888&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107888" title="61% like this...">
    7
    </div>
  </div>
  <a href="#107888" class="name">
  <strong class="user"><em>drpain at webster dot org dot za</em></strong></a><a class="genanchor" href="#107888"> &para;</a><div class="date" title="2012-03-13 11:40"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107888">
<div class="phpcode"><code><span class="html">Please note that when resizing images with GD and most image processing scripts or applications you will loose the EXIF information. What I did as a workaround is book this information into MySQL before I re-size images. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// This function is used to determine the camera details for a specific image. It returns an array with the parameters.<br /></span><span class="keyword">function </span><span class="default">cameraUsed</span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">) {<br /><br />    </span><span class="comment">// Check if the variable is set and if the file itself exists before continuing<br />    </span><span class="keyword">if ((isset(</span><span class="default">$imagePath</span><span class="keyword">)) and (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">))) {<br />    <br />      </span><span class="comment">// There are 2 arrays which contains the information we are after, so it's easier to state them both<br />      </span><span class="default">$exif_ifd0 </span><span class="keyword">= </span><span class="default">read_exif_data</span><span class="keyword">(</span><span class="default">$imagePath </span><span class="keyword">,</span><span class="string">'IFD0' </span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);       <br />      </span><span class="default">$exif_exif </span><span class="keyword">= </span><span class="default">read_exif_data</span><span class="keyword">(</span><span class="default">$imagePath </span><span class="keyword">,</span><span class="string">'EXIF' </span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />      <br />      </span><span class="comment">//error control<br />      </span><span class="default">$notFound </span><span class="keyword">= </span><span class="string">"Unavailable"</span><span class="keyword">;<br />      <br />      </span><span class="comment">// Make <br />      </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'Make'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">)) {<br />        </span><span class="default">$camMake </span><span class="keyword">= </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'Make'</span><span class="keyword">];<br />      } else { </span><span class="default">$camMake </span><span class="keyword">= </span><span class="default">$notFound</span><span class="keyword">; }<br />      <br />      </span><span class="comment">// Model<br />      </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'Model'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">)) {<br />        </span><span class="default">$camModel </span><span class="keyword">= </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'Model'</span><span class="keyword">];<br />      } else { </span><span class="default">$camModel </span><span class="keyword">= </span><span class="default">$notFound</span><span class="keyword">; }<br />      <br />      </span><span class="comment">// Exposure<br />      </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'ExposureTime'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">)) {<br />        </span><span class="default">$camExposure </span><span class="keyword">= </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'ExposureTime'</span><span class="keyword">];<br />      } else { </span><span class="default">$camExposure </span><span class="keyword">= </span><span class="default">$notFound</span><span class="keyword">; }<br /><br />      </span><span class="comment">// Aperture<br />      </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'ApertureFNumber'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'COMPUTED'</span><span class="keyword">])) {<br />        </span><span class="default">$camAperture </span><span class="keyword">= </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'COMPUTED'</span><span class="keyword">][</span><span class="string">'ApertureFNumber'</span><span class="keyword">];<br />      } else { </span><span class="default">$camAperture </span><span class="keyword">= </span><span class="default">$notFound</span><span class="keyword">; }<br />      <br />      </span><span class="comment">// Date<br />      </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'DateTime'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">)) {<br />        </span><span class="default">$camDate </span><span class="keyword">= </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'DateTime'</span><span class="keyword">];<br />      } else { </span><span class="default">$camDate </span><span class="keyword">= </span><span class="default">$notFound</span><span class="keyword">; }<br />      <br />      </span><span class="comment">// ISO<br />      </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'ISOSpeedRatings'</span><span class="keyword">,</span><span class="default">$exif_exif</span><span class="keyword">)) {<br />        </span><span class="default">$camIso </span><span class="keyword">= </span><span class="default">$exif_exif</span><span class="keyword">[</span><span class="string">'ISOSpeedRatings'</span><span class="keyword">];<br />      } else { </span><span class="default">$camIso </span><span class="keyword">= </span><span class="default">$notFound</span><span class="keyword">; }<br />      <br />      </span><span class="default">$return </span><span class="keyword">= array();<br />      </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'make'</span><span class="keyword">] = </span><span class="default">$camMake</span><span class="keyword">;<br />      </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'model'</span><span class="keyword">] = </span><span class="default">$camModel</span><span class="keyword">;<br />      </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'exposure'</span><span class="keyword">] = </span><span class="default">$camExposure</span><span class="keyword">;<br />      </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'aperture'</span><span class="keyword">] = </span><span class="default">$camAperture</span><span class="keyword">;<br />      </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'date'</span><span class="keyword">] = </span><span class="default">$camDate</span><span class="keyword">;<br />      </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'iso'</span><span class="keyword">] = </span><span class="default">$camIso</span><span class="keyword">;<br />      return </span><span class="default">$return</span><span class="keyword">;<br />    <br />    } else {<br />      return </span><span class="default">false</span><span class="keyword">; <br />    } <br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />An example of it's use follows:<br /><br /><span class="default">&lt;?php<br /><br />$camera </span><span class="keyword">= </span><span class="default">cameraUsed</span><span class="keyword">(</span><span class="string">"/img/myphoto.jpg"</span><span class="keyword">);<br />echo </span><span class="string">"Camera Used: " </span><span class="keyword">. </span><span class="default">$camera</span><span class="keyword">[</span><span class="string">'make'</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$camera</span><span class="keyword">[</span><span class="string">'model'</span><span class="keyword">] . </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"Exposure Time: " </span><span class="keyword">. </span><span class="default">$camera</span><span class="keyword">[</span><span class="string">'exposure'</span><span class="keyword">] . </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"Aperture: " </span><span class="keyword">. </span><span class="default">$camera</span><span class="keyword">[</span><span class="string">'aperture'</span><span class="keyword">] . </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"ISO: " </span><span class="keyword">. </span><span class="default">$camera</span><span class="keyword">[</span><span class="string">'iso'</span><span class="keyword">] . </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"Date Taken: " </span><span class="keyword">. </span><span class="default">$camera</span><span class="keyword">[</span><span class="string">'date'</span><span class="keyword">] . </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Will display the following, depending on the data:<br /><br />Camera Used: SONY DSC-S930<br />Exposure Time: 1/400<br />Aperture: f/4.3<br />ISO: 100<br />Date Taken: 2010:12:10 18:18:45<br /><br />If the image has been re-sized and the information is no longer available then you should receive the following when echoing the same:<br /><br />Camera Used: Unavailable<br />Exposure Time: Unavailable<br />Aperture: Unavailable<br />ISO: Unavailable<br />Date Taken: Unavailable<br /><br />Some cameras do not capture all the information, for instance Blackberry phones do not record an aperture, or iso and you will get Unavailable for those fields.  <br /><br />I hope you find this helpful.</span></code></div>
  </div>
 </div>
  <div class="note" id="76964">  <div class="votes">
    <div id="Vu76964">
    <a href="/manual/vote-note.php?id=76964&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76964">
    <a href="/manual/vote-note.php?id=76964&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76964" title="58% like this...">
    4
    </div>
  </div>
  <a href="#76964" class="name">
  <strong class="user"><em>mafo at mafo removethis dot sk</em></strong></a><a class="genanchor" href="#76964"> &para;</a><div class="date" title="2007-08-08 01:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76964">
<div class="phpcode"><code><span class="html">some cameras (most higher models) have position senzor (gyroskope?) and taking-position is wrote in EXIF, here is simple script for automatic rotating images<br /><br /><span class="default">&lt;?php<br />$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">$ort </span><span class="keyword">= </span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'IFD0'</span><span class="keyword">][</span><span class="string">'Orientation'</span><span class="keyword">];<br />    switch(</span><span class="default">$ort</span><span class="keyword">)<br />    {<br />        case </span><span class="default">1</span><span class="keyword">: </span><span class="comment">// nothing<br />        </span><span class="keyword">break;<br /><br />        case </span><span class="default">2</span><span class="keyword">: </span><span class="comment">// horizontal flip<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">flipImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />        break;<br />                                <br />        case </span><span class="default">3</span><span class="keyword">: </span><span class="comment">// 180 rotate left<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">,</span><span class="default">180</span><span class="keyword">);<br />        break;<br />                    <br />        case </span><span class="default">4</span><span class="keyword">: </span><span class="comment">// vertical flip<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">flipImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);<br />        break;<br />                <br />        case </span><span class="default">5</span><span class="keyword">: </span><span class="comment">// vertical flip + 90 rotate right<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">flipImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />                </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">, -</span><span class="default">90</span><span class="keyword">);<br />        break;<br />                <br />        case </span><span class="default">6</span><span class="keyword">: </span><span class="comment">// 90 rotate right<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">, -</span><span class="default">90</span><span class="keyword">);<br />        break;<br />                <br />        case </span><span class="default">7</span><span class="keyword">: </span><span class="comment">// horizontal flip + 90 rotate right<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">flipImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);    <br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">, -</span><span class="default">90</span><span class="keyword">);<br />        break;<br />                <br />        case </span><span class="default">8</span><span class="keyword">:    </span><span class="comment">// 90 rotate left<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">rotateImage</span><span class="keyword">(</span><span class="default">$public</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">);<br />        break;<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />$image-&gt;rotateImage() is inspired by example of <a href="http://php.net/manual/en/function.imagerotate.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.imagerotate.php</a><br />$image-&gt;flipImage() is inspired by <a href="http://php.net/manual/en/function.imagecopy.php#42803" rel="nofollow" target="_blank">http://php.net/manual/en/function.imagecopy.php#42803</a> (thank you)</span></code></div>
  </div>
 </div>
  <div class="note" id="123595">  <div class="votes">
    <div id="Vu123595">
    <a href="/manual/vote-note.php?id=123595&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123595">
    <a href="/manual/vote-note.php?id=123595&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123595" title="57% like this...">
    1
    </div>
  </div>
  <a href="#123595" class="name">
  <strong class="user"><em>omerg at lucidcode dot com dot tr</em></strong></a><a class="genanchor" href="#123595"> &para;</a><div class="date" title="2019-02-09 12:12"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123595">
<div class="phpcode"><code><span class="html">The example provided for displaying exif array content is not working in recent version because not all entry values are of array type. <br /><br />This is an alternative echo loop:<br /><br /> <span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"test1.jpg:&lt;br /&gt;\n"</span><span class="keyword">;<br /></span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="string">'tests/test1.jpg'</span><span class="keyword">, </span><span class="string">'IFD0'</span><span class="keyword">);<br />echo </span><span class="default">$exif</span><span class="keyword">===</span><span class="default">false </span><span class="keyword">? </span><span class="string">"No header data found.&lt;br /&gt;\n" </span><span class="keyword">: </span><span class="string">"Image contains headers&lt;br /&gt;\n"</span><span class="keyword">;<br /><br /></span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="string">'tests/test2.jpg'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="string">"test2.jpg:&lt;br /&gt;\n"</span><span class="keyword">;<br />foreach (</span><span class="default">$exif </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$section</span><span class="keyword">) {<br />   <br />    if (!</span><span class="default">is_array </span><span class="keyword">(</span><span class="default">$section</span><span class="keyword">)) {<br />        echo </span><span class="string">"</span><span class="default">$key</span><span class="string">: </span><span class="default">$section</span><span class="string">&lt;br /&gt;\n"</span><span class="keyword">;<br />    } else {<br />        foreach (</span><span class="default">$section </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />            echo </span><span class="string">"</span><span class="default">$key</span><span class="string">.</span><span class="default">$name</span><span class="string">: </span><span class="default">$val</span><span class="string">&lt;br /&gt;\n"</span><span class="keyword">;<br />        }<br />    }<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121742">  <div class="votes">
    <div id="Vu121742">
    <a href="/manual/vote-note.php?id=121742&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121742">
    <a href="/manual/vote-note.php?id=121742&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121742" title="55% like this...">
    1
    </div>
  </div>
  <a href="#121742" class="name">
  <strong class="user"><em>TNTcode</em></strong></a><a class="genanchor" href="#121742"> &para;</a><div class="date" title="2017-10-09 12:34"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121742">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// auto rotates an image file based on exif data from camera<br />// if destination file is specified then it saves file there, otherwise it will display it to user<br />// note that images already at normal orientation are skipped (when exif data Orientation = 1)<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"gd_auto_rotate"</span><span class="keyword">)){<br />    function </span><span class="default">gd_auto_rotate</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">){<br />        <br />        </span><span class="default">$original_extension </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">));<br />        if(isset(</span><span class="default">$destination_file</span><span class="keyword">) and </span><span class="default">$destination_file</span><span class="keyword">!=</span><span class="string">''</span><span class="keyword">){<br />            </span><span class="default">$destination_extension </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$destination_file</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">));<br />        }<br />        <br />        </span><span class="comment">// try to auto-rotate image by gd if needed (before editing it)<br />        // by imagemagik it has an easy option<br />        </span><span class="keyword">if(</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"exif_read_data"</span><span class="keyword">)){<br />            <br />            </span><span class="default">$exif_data </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />            </span><span class="default">$exif_orientation </span><span class="keyword">= </span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">];<br />            <br />            </span><span class="comment">// value 1 = normal ?! skip it ?!<br />            <br />            </span><span class="keyword">if(</span><span class="default">$exif_orientation</span><span class="keyword">==</span><span class="string">'3'  </span><span class="keyword">or </span><span class="default">$exif_orientation</span><span class="keyword">==</span><span class="string">'6' </span><span class="keyword">or </span><span class="default">$exif_orientation</span><span class="keyword">==</span><span class="string">'8'</span><span class="keyword">){<br />                <br />                </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">180</span><span class="keyword">;<br />                </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = -</span><span class="default">90</span><span class="keyword">;<br />                </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] = </span><span class="default">90</span><span class="keyword">;<br />                <br />                </span><span class="comment">// load the image<br />                </span><span class="keyword">if(</span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"jpg" </span><span class="keyword">or </span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"jpeg"</span><span class="keyword">){<br />                    </span><span class="default">$original_image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">){<br />                    </span><span class="default">$original_image </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$original_extension </span><span class="keyword">== </span><span class="string">"png"</span><span class="keyword">){<br />                    </span><span class="default">$original_image </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$original_file</span><span class="keyword">);<br />                }<br />                <br />                </span><span class="default">$rotated_image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$original_image</span><span class="keyword">, </span><span class="default">$new_angle</span><span class="keyword">[</span><span class="default">$exif_orientation</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />                <br />                </span><span class="comment">// if no destination file is set, then show the image<br />                </span><span class="keyword">if(!</span><span class="default">$destination_file</span><span class="keyword">){<br />                    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />                    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />                }<br />                        <br />                </span><span class="comment">// save the smaller image FILE if destination file given<br />                </span><span class="keyword">if(</span><span class="default">$destination_extension </span><span class="keyword">== </span><span class="string">"jpg" </span><span class="keyword">or </span><span class="default">$destination_extension</span><span class="keyword">==</span><span class="string">"jpeg"</span><span class="keyword">){<br />                    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$destination_extension </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">){<br />                    </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">);<br />                }<br />                if(</span><span class="default">$destination_extension </span><span class="keyword">== </span><span class="string">"png"</span><span class="keyword">){<br />                    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">, </span><span class="default">$destination_file</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">);<br />                }<br />                <br />                </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$original_image</span><span class="keyword">);<br />                </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$rotated_image</span><span class="keyword">);<br />            <br />            }<br />        }<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118162">  <div class="votes">
    <div id="Vu118162">
    <a href="/manual/vote-note.php?id=118162&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118162">
    <a href="/manual/vote-note.php?id=118162&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118162" title="54% like this...">
    1
    </div>
  </div>
  <a href="#118162" class="name">
  <strong class="user"><em>b at asdflolinternet dot de</em></strong></a><a class="genanchor" href="#118162"> &para;</a><div class="date" title="2015-10-18 12:42"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118162">
<div class="phpcode"><code><span class="html">Problem with "S�o�m�e� �T�e�x�t��" on value(s), exif[IFD0][Title] for example, when they were edited trough windows right click properties and then got read with the read_exif_data() function. <br />try:<br /><br />$exif_['IFD0']['Title']=mb_convert_encoding($exif_['IFD0']['Title'],"auto","byte2le");<br /><br />works on UTF-8 and so.<br /><br />//<br />// outputs all available character encodings and prints on screen<br />// foreach(mb_list_encodings() as $chr)<br />//  {$test[$chr]=mb_convert_encoding($image[IFD0][Title],'auto',$chr);}<br />//  exit(print_r($test));<br />//</span></code></div>
  </div>
 </div>
  <div class="note" id="117355">  <div class="votes">
    <div id="Vu117355">
    <a href="/manual/vote-note.php?id=117355&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117355">
    <a href="/manual/vote-note.php?id=117355&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117355" title="52% like this...">
    1
    </div>
  </div>
  <a href="#117355" class="name">
  <strong class="user"><em>Eion Robb</em></strong></a><a class="genanchor" href="#117355"> &para;</a><div class="date" title="2015-05-26 08:56"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117355">
<div class="phpcode"><code><span class="html">I was needing to use exif_read_data() to read out the orientation flag, only to find that the webhost didn't have the exif extension available for use.  Instead, I hacked up a regex that worked fairly well as a replacement<br /><br /><span class="default">&lt;?php<br />$orientation </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'exif_read_data'</span><span class="keyword">)) {<br />    </span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    if (isset(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">]))<br />        </span><span class="default">$orientation </span><span class="keyword">= </span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">];<br />} else if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'@\x12\x01\x03\x00\x01\x00\x00\x00(.)\x00\x00\x00@'</span><span class="keyword">, </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">), </span><span class="default">$matches</span><span class="keyword">)) {<br />    </span><span class="default">$orientation </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129593">  <div class="votes">
    <div id="Vu129593">
    <a href="/manual/vote-note.php?id=129593&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129593">
    <a href="/manual/vote-note.php?id=129593&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129593" title="no votes...">
    0
    </div>
  </div>
  <a href="#129593" class="name">
  <strong class="user"><em>dbareis at gmail dot com</em></strong></a><a class="genanchor" href="#129593"> &para;</a><div class="date" title="2024-06-18 04:07"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129593">
<div class="phpcode"><code><span class="html">Windows fields are in a "WINXP" section (the format I don't know), but they are also elsewhere including "comments" &amp; "subject" in null terminated "UTF-16LE" format, this code work for me:<br /><br />...<br />$PhotoInfo-&gt;Comments    = GetPhotoValueWindows16Bit($IDFO, 'Comments');<br />$PhotoInfo-&gt;Subject     = GetPhotoValueWindows16Bit($IDFO, 'Subject');<br /><br /> function GetPhotoValueWindows16Bit(&amp;$Array, $Index)<br /> {<br />        $Value16 = GetPhotoValue($Array, $Index);<br />        if  ($Value16 === null)<br />            $R = null;<br />        else<br />        {<br />            $R = iconv('UTF-16LE', 'UTF-8', $Value16);      //Still ends in a null byte<br />            $R = str_replace("\x00", '', $R);               //Remove trailing null (but handle any).<br />        }<br />        return $R;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="129121">  <div class="votes">
    <div id="Vu129121">
    <a href="/manual/vote-note.php?id=129121&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129121">
    <a href="/manual/vote-note.php?id=129121&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129121" title="no votes...">
    0
    </div>
  </div>
  <a href="#129121" class="name">
  <strong class="user"><em>service at tianex dot com</em></strong></a><a class="genanchor" href="#129121"> &para;</a><div class="date" title="2023-12-23 12:19"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129121">
<div class="phpcode"><code><span class="html">this error happens when get jpeg file exif information<br /><br />exif_read_data(): Error reading from file: got=x3FFA(=16378) != itemlen-2=x4325(=17189)</span></code></div>
  </div>
 </div>
  <div class="note" id="113834">  <div class="votes">
    <div id="Vu113834">
    <a href="/manual/vote-note.php?id=113834&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113834">
    <a href="/manual/vote-note.php?id=113834&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113834" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113834" class="name">
  <strong class="user"><em>Clive dot Moore at ma-design dot com</em></strong></a><a class="genanchor" href="#113834"> &para;</a><div class="date" title="2013-12-06 09:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113834">
<div class="phpcode"><code><span class="html">Following up on darkain at darkain dot com  script for grabbing the ShutterSpeedValue from exif data...<br />@<a href="http://php.net/manual/en/function.exif-read-data.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.exif-read-data.php</a><br /><br />I have found that the option shown for ShutterSppedValue, can also be ExposureTime in the exif data. <br /><br />Also the code as written provides a WRONG return, as the return is always 1 so you get 1/1sec.<br /><br />Here is corrected code, or a version that corrects what is obviously not working after 5 years since it was originally developed::<br /><br />Here is the updated version for:: $exif[ExposureTime]<br /><br />    function exif_get_float($value) { <br />        $pos = strpos($value, '/'); <br />        if ($pos === false) return (float) $value; <br />        $a = (float) substr($value, 0, $pos); <br />        $b = (float) substr($value, $pos+1); <br />    return ($b == 0) ? ($a) : ($a / $b); <br />    };<br /><br />    function exif_get_exposureTime(&amp;$exif) { <br />        if (!isset($exif['ExposureTime'])) return false; <br />        $apex    = exif_get_float($exif['ExposureTime']);            <br />        $shutter = 1/$apex; <br />        // above 1 sec exposure time::<br />        if ($shutter &lt;= 1) return round($apex) . ' seconds'; <br /><br />    return '1/' . round(1 / $apex) . 'sec';<br />    };</span></code></div>
  </div>
 </div>
  <div class="note" id="112274">  <div class="votes">
    <div id="Vu112274">
    <a href="/manual/vote-note.php?id=112274&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112274">
    <a href="/manual/vote-note.php?id=112274&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112274" title="50% like this...">
    0
    </div>
  </div>
  <a href="#112274" class="name">
  <strong class="user"><em>hoangvu4000 at gmail dot com</em></strong></a><a class="genanchor" href="#112274"> &para;</a><div class="date" title="2013-05-26 05:47"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112274">
<div class="phpcode"><code><span class="html">This is function, resize image and don't rotates images have exif info
<br />
<br />PHP must be enabled: 
<br />extension=php_mbstring.dll 
<br />extension=php_exif.dll
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">CreateThumbnail</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">$thumb</span><span class="keyword">,</span><span class="default">$thumbwidth</span><span class="keyword">, </span><span class="default">$quality </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">)
<br />{
<br />
<br />        </span><span class="default">$im1</span><span class="keyword">=</span><span class="default">ImageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);
<br />
<br />        </span><span class="comment">//if(function_exists("exif_read_data")){
<br />                </span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);
<br />                if(!empty(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">])) {
<br />                switch(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">]) {
<br />                case </span><span class="default">8</span><span class="keyword">:
<br />                    </span><span class="default">$im1 </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">90</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />                    break;
<br />                case </span><span class="default">3</span><span class="keyword">:
<br />                    </span><span class="default">$im1 </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">180</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />                    break;
<br />                case </span><span class="default">6</span><span class="keyword">:
<br />                    </span><span class="default">$im1 </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,-</span><span class="default">90</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />                    break;
<br />                } 
<br />                }
<br />        </span><span class="comment">//}
<br />        </span><span class="default">$info </span><span class="keyword">= @</span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);
<br />
<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />
<br />        </span><span class="default">$w2</span><span class="keyword">=</span><span class="default">ImageSx</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">);
<br />        </span><span class="default">$h2</span><span class="keyword">=</span><span class="default">ImageSy</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">);
<br />        </span><span class="default">$w1 </span><span class="keyword">= (</span><span class="default">$thumbwidth </span><span class="keyword">&lt;= </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ? </span><span class="default">$thumbwidth </span><span class="keyword">: </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]  ;
<br />
<br />        </span><span class="default">$h1</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$h2</span><span class="keyword">*(</span><span class="default">$w1</span><span class="keyword">/</span><span class="default">$w2</span><span class="keyword">));
<br />        </span><span class="default">$im2</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w1</span><span class="keyword">,</span><span class="default">$h1</span><span class="keyword">);
<br />
<br />        </span><span class="default">imagecopyresampled </span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">,</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$w1</span><span class="keyword">,</span><span class="default">$h1</span><span class="keyword">,</span><span class="default">$w2</span><span class="keyword">,</span><span class="default">$h2</span><span class="keyword">); 
<br />        </span><span class="default">$path</span><span class="keyword">=</span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);
<br />        </span><span class="default">ImageJPEG</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">,</span><span class="default">$path</span><span class="keyword">,</span><span class="default">$quality</span><span class="keyword">);
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">);
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87143">  <div class="votes">
    <div id="Vu87143">
    <a href="/manual/vote-note.php?id=87143&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87143">
    <a href="/manual/vote-note.php?id=87143&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87143" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87143" class="name">
  <strong class="user"><em>michael [at[ thisiswilson [dot[ com</em></strong></a><a class="genanchor" href="#87143"> &para;</a><div class="date" title="2008-11-20 09:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87143">
<div class="phpcode"><code><span class="html">From - darkain at darkain dot com 's example.<br /><br />If all the data is from the same image - simply<br /><br /><span class="default">&lt;?php<br />        $exif_data </span><span class="keyword">= </span><span class="default">exif_read_data </span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'photo'</span><span class="keyword">]<br /><br />        </span><span class="default">$emake </span><span class="keyword">=</span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'Make'</span><span class="keyword">];<br />        </span><span class="default">$emodel </span><span class="keyword">= </span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'Model'</span><span class="keyword">];<br />        </span><span class="default">$eexposuretime </span><span class="keyword">= </span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'ExposureTime'</span><span class="keyword">];<br />        </span><span class="default">$efnumber </span><span class="keyword">= </span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'FNumber'</span><span class="keyword">];<br />        </span><span class="default">$eiso </span><span class="keyword">= </span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'ISOSpeedRatings'</span><span class="keyword">];<br />        </span><span class="default">$edate </span><span class="keyword">= </span><span class="default">$exif_data</span><span class="keyword">[</span><span class="string">'DateTime'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />will work, I tried using the PEL library, and while pretty cool, I can't for the life understand how to call some things, this is simpler if your system is pretty basic or if you're in a rush.  If you have time, try playing with PEL.  It's not maintained at the moment though..<br /><br /><a href="http://pel.sourceforge.net/" rel="nofollow" target="_blank">http://pel.sourceforge.net/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="73645">  <div class="votes">
    <div id="Vu73645">
    <a href="/manual/vote-note.php?id=73645&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73645">
    <a href="/manual/vote-note.php?id=73645&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73645" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73645" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#73645"> &para;</a><div class="date" title="2007-03-05 11:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73645">
<div class="phpcode"><code><span class="html">When reading EXIF information from the 'WINXP' group, you may need to change used encoding from the default "ISO-8859-15" to "UTF-8". This can be done in php.ini or in your code:<br /><br /><span class="default">&lt;?php<br />    ini_set</span><span class="keyword">(</span><span class="string">'exif.encode_unicode'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br /><br />    </span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="string">'TEST.JPG'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    echo </span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'WINXP'</span><span class="keyword">][</span><span class="string">'Title'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />Useful documentation about EXIF:<br /><a href="http://www.sno.phy.queensu.ca/~phil/exiftool/TagNames/EXIF.html" rel="nofollow" target="_blank">http://www.sno.phy.queensu.ca/~phil/exiftool/TagNames/EXIF.html</a><br />See also comments next to XPTitle and XPAuthor.</span></code></div>
  </div>
 </div>
  <div class="note" id="113944">  <div class="votes">
    <div id="Vu113944">
    <a href="/manual/vote-note.php?id=113944&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113944">
    <a href="/manual/vote-note.php?id=113944&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113944" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#113944" class="name">
  <strong class="user"><em>iam at thatguy dot co dot za</em></strong></a><a class="genanchor" href="#113944"> &para;</a><div class="date" title="2013-12-20 08:15"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113944">
<div class="phpcode"><code><span class="html">I posted the original version of the function, but after using it for a while I discovered I didn't do enough error checking. <br /><br />I have re-factored it somewhat, and it now returns an empty array should it not be able to read the image's exif. If it is able to, it will return the details it was able to retrieve. And this should be without error. <br /><br />I am suppressing errors, because if you pass it images which cannot parse, you will get a warning. <br /><br /><span class="default">&lt;?php <br /><br /></span><span class="comment"># Modified Version of cameraUsed, no longer returns date. <br /></span><span class="keyword">public function </span><span class="default">cameraUsed</span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">)<br />{<br />    </span><span class="comment"># The default empty return<br />    </span><span class="default">$return </span><span class="keyword">= array(<br />        </span><span class="string">'make'      </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,<br />        </span><span class="string">'model'     </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,<br />        </span><span class="string">'exposure'  </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,<br />        </span><span class="string">'aperture'  </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,<br />        </span><span class="string">'iso'       </span><span class="keyword">=&gt; </span><span class="string">""<br />    </span><span class="keyword">);<br /><br />    </span><span class="comment">// Check if the variable is set and if the file itself exists before continuing<br />    </span><span class="keyword">if ((isset(</span><span class="default">$imagePath</span><span class="keyword">)) AND (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">)))<br />    {<br />        </span><span class="comment">// There are 2 arrays which contains the information we are after, so it's easier to state them both<br />        </span><span class="default">$exif_ifd0 </span><span class="keyword">= @</span><span class="default">read_exif_data</span><span class="keyword">(</span><span class="default">$imagePath </span><span class="keyword">,</span><span class="string">'IFD0' </span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />        </span><span class="default">$exif_exif </span><span class="keyword">= @</span><span class="default">read_exif_data</span><span class="keyword">(</span><span class="default">$imagePath </span><span class="keyword">,</span><span class="string">'EXIF' </span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /><br />        </span><span class="comment"># Ensure that we actually got some information<br />        </span><span class="keyword">if ((</span><span class="default">$exif_ifd0 </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) AND (</span><span class="default">$exif_exif </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">))<br />        {<br />            </span><span class="comment">// Make<br />            </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'Make'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">))<br />            {<br />                </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'make'</span><span class="keyword">]     = </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'Make'</span><span class="keyword">];<br />            }<br /><br />            </span><span class="comment">// Model<br />            </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'Model'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">))<br />            {<br />                </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'model'</span><span class="keyword">]    = </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'Model'</span><span class="keyword">];<br />            }<br /><br />            </span><span class="comment">// Exposure<br />            </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'ExposureTime'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">))<br />            {<br />                </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'exposure'</span><span class="keyword">] = </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'ExposureTime'</span><span class="keyword">];<br />            }<br /><br />            </span><span class="comment">// Aperture<br />            </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'ApertureFNumber'</span><span class="keyword">, </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'COMPUTED'</span><span class="keyword">]))<br />            {<br />                </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'aperture'</span><span class="keyword">] = </span><span class="default">$exif_ifd0</span><span class="keyword">[</span><span class="string">'COMPUTED'</span><span class="keyword">][</span><span class="string">'ApertureFNumber'</span><span class="keyword">];<br />            }<br /><br />            </span><span class="comment">// ISO<br />            </span><span class="keyword">if (@</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'ISOSpeedRatings'</span><span class="keyword">,</span><span class="default">$exif_exif</span><span class="keyword">))<br />            {<br />                </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'iso'</span><span class="keyword">]     = </span><span class="default">$exif_exif</span><span class="keyword">[</span><span class="string">'ISOSpeedRatings'</span><span class="keyword">];<br />            }<br />        }<br />    }<br /><br />    </span><span class="comment"># Return either an empty array, or the details which we were able to extrapolate.<br />    </span><span class="keyword">return </span><span class="default">$return</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77586">  <div class="votes">
    <div id="Vu77586">
    <a href="/manual/vote-note.php?id=77586&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77586">
    <a href="/manual/vote-note.php?id=77586&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77586" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#77586" class="name">
  <strong class="user"><em>wdierkes at 5dollarwhitebox dot org</em></strong></a><a class="genanchor" href="#77586"> &para;</a><div class="date" title="2007-09-04 06:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77586">
<div class="phpcode"><code><span class="html">Using the exif methods to read WINXP data returns unexpected results unless both exif and mbstring are compiled statically.  Please reference the following bug reports:<br /><br />Bug #31980<br />Bug #23105<br /><br /> <br />Specifically, the last comment on #23105:<br /><br />"[8 Apr 2003 4:26pm UTC] edink@php.net<br /><br />This cannot be fixed due to the fact that mbstring has been removed from PHP core (it has been 'unbundled') and the rest of core files and other extensions cannot use mbstring functionality when it is compiled as a shared library (dll).<br />"<br /><br />If exif is compiled statically (--enable-exif) and mbstring compiled as a DSO module (--enable-mbstring=shared) then exif_read_data may only return a single character rather than the entire string.<br /><br />Compiling both exif and mbstring statically (--enable-exif --enable-mbstring) resolves the issue.</span></code></div>
  </div>
 </div>
  <div class="note" id="85984">  <div class="votes">
    <div id="Vu85984">
    <a href="/manual/vote-note.php?id=85984&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85984">
    <a href="/manual/vote-note.php?id=85984&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85984" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#85984" class="name">
  <strong class="user"><em>lincolnzsilva at gmail dot com</em></strong></a><a class="genanchor" href="#85984"> &para;</a><div class="date" title="2008-09-26 04:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85984">
<div class="phpcode"><code><span class="html">Get some EXIFs fields (easy way):
<br />
<br /><span class="default">&lt;?php
<br />        $exif_make </span><span class="keyword">= </span><span class="default">exif_read_data </span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'photo'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">] ,</span><span class="string">'IFD0' </span><span class="keyword">,</span><span class="default">0 </span><span class="keyword">);
<br />        </span><span class="default">$emake </span><span class="keyword">= </span><span class="default">$exif_make</span><span class="keyword">[</span><span class="string">'Make'</span><span class="keyword">];
<br />        
<br />        </span><span class="default">$exif_model </span><span class="keyword">= </span><span class="default">exif_read_data </span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'photo'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">] ,</span><span class="string">'IFD0' </span><span class="keyword">,</span><span class="default">0 </span><span class="keyword">);
<br />        </span><span class="default">$emodel </span><span class="keyword">= </span><span class="default">$exif_model</span><span class="keyword">[</span><span class="string">'Model'</span><span class="keyword">];
<br />        
<br />        </span><span class="default">$exif_exposuretime </span><span class="keyword">= </span><span class="default">exif_read_data </span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'photo'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">] ,</span><span class="string">'EXIF' </span><span class="keyword">,</span><span class="default">0 </span><span class="keyword">);
<br />        </span><span class="default">$eexposuretime </span><span class="keyword">= </span><span class="default">$exif_exposuretime</span><span class="keyword">[</span><span class="string">'ExposureTime'</span><span class="keyword">];
<br />        
<br />        </span><span class="default">$exif_fnumber </span><span class="keyword">= </span><span class="default">exif_read_data </span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'photo'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">] ,</span><span class="string">'EXIF' </span><span class="keyword">,</span><span class="default">0 </span><span class="keyword">);
<br />        </span><span class="default">$efnumber </span><span class="keyword">= </span><span class="default">$exif_fnumber</span><span class="keyword">[</span><span class="string">'FNumber'</span><span class="keyword">];
<br />
<br />        </span><span class="default">$exif_iso </span><span class="keyword">= </span><span class="default">exif_read_data </span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'photo'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">] ,</span><span class="string">'EXIF' </span><span class="keyword">,</span><span class="default">0 </span><span class="keyword">);
<br />        </span><span class="default">$eiso </span><span class="keyword">= </span><span class="default">$exif_iso</span><span class="keyword">[</span><span class="string">'ISOSpeedRatings'</span><span class="keyword">];
<br />                
<br />        </span><span class="default">$exif_date </span><span class="keyword">= </span><span class="default">exif_read_data </span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'photo'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">] ,</span><span class="string">'IFD0' </span><span class="keyword">,</span><span class="default">0 </span><span class="keyword">);
<br />        </span><span class="default">$edate </span><span class="keyword">= </span><span class="default">$exif_date</span><span class="keyword">[</span><span class="string">'DateTime'</span><span class="keyword">];
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112034">  <div class="votes">
    <div id="Vu112034">
    <a href="/manual/vote-note.php?id=112034&amp;page=function.exif-read-data&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112034">
    <a href="/manual/vote-note.php?id=112034&amp;page=function.exif-read-data&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112034" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#112034" class="name">
  <strong class="user"><em>kurt at mandella dot biz</em></strong></a><a class="genanchor" href="#112034"> &para;</a><div class="date" title="2013-04-25 06:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112034">
<div class="phpcode"><code><span class="html">Photos processed in Picasa often contain garbage data in the "MAKERNOTE" section and under EXIF.MakerNote, (UTF8) like:<br /><br />[MakerNote] =&gt; r0~Þæ"î2OÔy     e §…b!    )    ) EI "ÐÓ<br />#s&amp;0{'Û(å-Ð`ÿÿ@ÿÿÿìEè€Ýÿÿ  ÿÿÿÿÿÿx "ú»Dóÿ H ?.}BúIMG:DIGITAL IXUS 100 IS JPEGFirmware Version 1.00s›xÇØÿÿÿ–l¥ÿÿÿ ØÌÌxŒ ÿÿÌÌŸãÿÿÿ¼Ž(½(½T‹U’‹d–~Ø“¥ÿÿÿ    ÀÿœªãjáÀpgaXfaWb[Te«<br />8ú5:Áð-3åÿÿ5»ÿ ‹;ßÊ Š €à€`         ¸ddîÿîÿîÿîÿîÿîÿ<br />ÿÿŠ1—ÏàôÉæ×¬gªiï<br /><br />This can't be written to Blob in MySql. The following code removes the garbage tags.<br /><br />$exif = exif_read_data($process_photo, 0, 'EXIF');<br /><br />if($exif['IFD0']['Software'] == "Picasa"){<br /><br />foreach ($exif as $key =&gt; $section){<br /><br /> if($key != "MAKERNOTE"){<br />  foreach ($section as $name =&gt; $val){<br />   if($name != 'MakerNote'){<br />    $exifA[$key][$name] = $val;<br />   }<br />  }<br />  $exifB[$key] = $exifA[$key];<br /> }<br />}<br />$serialized_exif = serialize ($exifB);<br />}else{<br />$serialized_exif = serialize ($exif);<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.exif-read-data&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exif-read-data.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exif.php">Exif Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.exif-imagetype.php" title="exif_&#8203;imagetype">exif_&#8203;imagetype</a>
                        </li>
                                                <li class="current">
                            <a href="function.exif-read-data.php" title="exif_&#8203;read_&#8203;data">exif_&#8203;read_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.exif-tagname.php" title="exif_&#8203;tagname">exif_&#8203;tagname</a>
                        </li>
                                                <li class="">
                            <a href="function.exif-thumbnail.php" title="exif_&#8203;thumbnail">exif_&#8203;thumbnail</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.read-exif-data.php" title="read_&#8203;exif_&#8203;data">read_&#8203;exif_&#8203;data</a>
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
