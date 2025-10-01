<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecreatefromgif - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecreatefromgif.php">
 <link rel="shorturl" href="https://www.php.net/imagecreatefromgif">
 <link rel="alternate" href="https://www.php.net/imagecreatefromgif" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecreatefromgd2part.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecreatefromjpeg.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecreatefromgif.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecreatefromgif.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecreatefromgif.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecreatefromgif.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecreatefromgif.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecreatefromgif.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecreatefromgif.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecreatefromgif.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecreatefromgif.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecreatefromgif.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecreatefromgif.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a new image from file or URL" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecreatefromgif - Manual" />
<meta name="twitter:description" content="Create a new image from file or URL" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecreatefromgif - Manual" />
<meta itemprop="description" content="Create a new image from file or URL" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a new image from file or URL" />

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
        <a href="function.imagecreatefromjpeg.php">
          imagecreatefromjpeg &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecreatefromgd2part.php">
          &laquo; imagecreatefromgd2part        </a>
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
            <option value='en/function.imagecreatefromgif.php' selected="selected">English</option>
            <option value='de/function.imagecreatefromgif.php'>German</option>
            <option value='es/function.imagecreatefromgif.php'>Spanish</option>
            <option value='fr/function.imagecreatefromgif.php'>French</option>
            <option value='it/function.imagecreatefromgif.php'>Italian</option>
            <option value='ja/function.imagecreatefromgif.php'>Japanese</option>
            <option value='pt_BR/function.imagecreatefromgif.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecreatefromgif.php'>Russian</option>
            <option value='tr/function.imagecreatefromgif.php'>Turkish</option>
            <option value='uk/function.imagecreatefromgif.php'>Ukrainian</option>
            <option value='zh/function.imagecreatefromgif.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecreatefromgif" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecreatefromgif</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecreatefromgif</span> &mdash; <span class="dc-title">Create a new image from file or URL</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecreatefromgif-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecreatefromgif</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagecreatefromgif()</strong></span> returns an image identifier
   representing the image obtained from the given filename.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    When reading GIF files into memory, only the first frame 
    is returned in the image object. The size of the image is not
    necessarily what is reported by <span class="function"><a href="function.getimagesize.php" class="function">getimagesize()</a></span>.
   </p>
  </div>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">A URL can be used as a
filename with this function if the <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">fopen wrappers</a> have been enabled.
See <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> for more details on how to specify the
filename. See the <a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> for links to information
about what abilities the various wrappers have, notes on their usage,
and information on any predefined variables they may
provide.</p></div>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecreatefromgif-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the GIF image.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecreatefromgif-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">Returns an image object on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on errors.</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecreatefromgif-changelog">
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
       On success, this function returns a <span class="classname"><a href="class.gdimage.php" class="classname">GDImage</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagecreatefromgif-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2868">
   <p><strong>Example #1 Example to handle an error during loading of a GIF</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">LoadGif</span><span style="color: #007700">(</span><span style="color: #0000BB">$imgname</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #FF8000">/* Attempt to open */<br />    </span><span style="color: #0000BB">$im </span><span style="color: #007700">= @</span><span style="color: #0000BB">imagecreatefromgif</span><span style="color: #007700">(</span><span style="color: #0000BB">$imgname</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* See if it failed */<br />    </span><span style="color: #007700">if(!</span><span style="color: #0000BB">$im</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #FF8000">/* Create a blank image */<br />        </span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor </span><span style="color: #007700">(</span><span style="color: #0000BB">150</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$bgc </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate </span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$tc </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate </span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />        </span><span style="color: #0000BB">imagefilledrectangle </span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">150</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">, </span><span style="color: #0000BB">$bgc</span><span style="color: #007700">);<br /><br />        </span><span style="color: #FF8000">/* Output an error message */<br />        </span><span style="color: #0000BB">imagestring </span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #DD0000">'Error loading ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$imgname</span><span style="color: #007700">, </span><span style="color: #0000BB">$tc</span><span style="color: #007700">);<br />    }<br /><br />    return </span><span style="color: #0000BB">$im</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/gif'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$img </span><span style="color: #007700">= </span><span style="color: #0000BB">LoadGif</span><span style="color: #007700">(</span><span style="color: #DD0000">'bogus.image'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="mediaobject">
    
    <div class="imageobject">
     <img src="images/21009b70229598c6a80eef8b45bf282b-imagecreatefromgif.gif" alt="Output of example : Example to handle an error during loading of a GIF" width="150" height="30" />
    </div>
   </div>
  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecreatefromgif.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecreatefromgif%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecreatefromgif&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecreatefromgif.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104473">  <div class="votes">
    <div id="Vu104473">
    <a href="/manual/vote-note.php?id=104473&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104473">
    <a href="/manual/vote-note.php?id=104473&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104473" title="68% like this...">
    15
    </div>
  </div>
  <a href="#104473" class="name">
  <strong class="user"><em>frank at huddler dot com</em></strong></a><a class="genanchor" href="#104473"> &para;</a><div class="date" title="2011-06-16 12:25"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104473">
<div class="phpcode"><code><span class="html">An updated is_ani based on issues reported here and elsewhere<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_ani</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {<br />    if(!(</span><span class="default">$fh </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">)))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="comment">//an animated gif contains multiple "frames", with each frame having a <br />    //header made up of:<br />    // * a static 4-byte sequence (\x00\x21\xF9\x04)<br />    // * 4 variable bytes<br />    // * a static 2-byte sequence (\x00\x2C) (some variants may use \x00\x21 ?)<br />    <br />    // We read through the file til we reach the end of the file, or we've found <br />    // at least 2 frame headers<br />    </span><span class="keyword">while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">) &amp;&amp; </span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">) {<br />        </span><span class="default">$chunk </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">); </span><span class="comment">//read 100kb at a time<br />        </span><span class="default">$count </span><span class="keyword">+= </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'#\x00\x21\xF9\x04.{4}\x00(\x2C|\x21)#s'</span><span class="keyword">, </span><span class="default">$chunk</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />   }<br />    <br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />    return </span><span class="default">$count </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70280">  <div class="votes">
    <div id="Vu70280">
    <a href="/manual/vote-note.php?id=70280&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70280">
    <a href="/manual/vote-note.php?id=70280&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70280" title="75% like this...">
    2
    </div>
  </div>
  <a href="#70280" class="name">
  <strong class="user"><em>moxley at moxleydata dot com</em></strong></a><a class="genanchor" href="#70280"> &para;</a><div class="date" title="2006-10-09 05:40"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70280">
<div class="phpcode"><code><span class="html">I wanted to find out if a GIF is Black &amp; White or Color, but I didn't want to wait around for imagecreatefromgif() to parse a 200k file (about 1 second) to get the color map, so I wrote this function to get a list of all the colors in the GIF. Hope it is useful for you.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getGIFColorMap</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />{<br />   </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />   </span><span class="default">$buf </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />      <br />   </span><span class="comment">// Calculate number of colors<br />   // buf[10] is the color info byte<br />   </span><span class="default">$color_byte </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">[</span><span class="default">10</span><span class="keyword">]);<br />   </span><span class="default">$has_color_map </span><span class="keyword">= (</span><span class="default">$color_byte </span><span class="keyword">&gt;&gt; </span><span class="default">7</span><span class="keyword">) &amp; </span><span class="default">1</span><span class="keyword">;<br />   </span><span class="default">$color_res </span><span class="keyword">= ((</span><span class="default">$color_byte </span><span class="keyword">&gt;&gt; </span><span class="default">4</span><span class="keyword">) &amp; </span><span class="default">7</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;<br />   </span><span class="default">$bits_per_pixel </span><span class="keyword">= (</span><span class="default">$color_byte </span><span class="keyword">&amp; </span><span class="default">7</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;<br />   </span><span class="default">$color_count </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">&lt;&lt; </span><span class="default">$bits_per_pixel</span><span class="keyword">;<br />      <br />   if (!</span><span class="default">$has_color_map</span><span class="keyword">) return </span><span class="default">null</span><span class="keyword">;<br />      <br />   </span><span class="comment">// buf[13] is the beginning of the color map<br />   </span><span class="default">$color_map_index </span><span class="keyword">= </span><span class="default">13</span><span class="keyword">;<br />   </span><span class="default">$map </span><span class="keyword">= array();<br />   for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$color_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />       </span><span class="default">$index </span><span class="keyword">= </span><span class="default">$color_map_index </span><span class="keyword">+ </span><span class="default">$i</span><span class="keyword">*</span><span class="default">3</span><span class="keyword">;<br />       </span><span class="default">$r </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />       </span><span class="default">$g </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">[</span><span class="default">$index </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">]);<br />       </span><span class="default">$b </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">[</span><span class="default">$index </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">]);<br />       </span><span class="default">$map</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = array(</span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />   }<br />   return </span><span class="default">$map</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120633">  <div class="votes">
    <div id="Vu120633">
    <a href="/manual/vote-note.php?id=120633&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120633">
    <a href="/manual/vote-note.php?id=120633&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120633" title="66% like this...">
    2
    </div>
  </div>
  <a href="#120633" class="name">
  <strong class="user"><em>hdogan at gmail dot com</em></strong></a><a class="genanchor" href="#120633"> &para;</a><div class="date" title="2017-02-12 06:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120633">
<div class="phpcode"><code><span class="html">Just realised that some of the animated GIFs do not contain GCE (graphic control extension). Here is the refactored is_ani() function:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Detects animated GIF from given file pointer resource or filename.<br /> *<br /> * @param resource|string $file File pointer resource or filename<br /> * @return bool<br /> */<br /></span><span class="keyword">function </span><span class="default">is_animated_gif</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />{<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />    if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {<br />        </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br />    } else {<br />        </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">;<br /><br />        </span><span class="comment">/* Make sure that we are at the beginning of the file */<br />        </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    }<br /><br />    if (</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) !== </span><span class="string">"GIF"</span><span class="keyword">) {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /><br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$frames </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">) &amp;&amp; </span><span class="default">$frames </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">) {<br />        if (</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) === </span><span class="string">"\x00"</span><span class="keyword">) {<br />            </span><span class="comment">/* Some of the animated GIFs do not contain graphic control extension (starts with 21 f9) */<br />            </span><span class="keyword">if (</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) === </span><span class="string">"\x21" </span><span class="keyword">|| </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) === </span><span class="string">"\x21\xf9"</span><span class="keyword">) {<br />                </span><span class="default">$frames</span><span class="keyword">++;<br />            }<br />        }<br />    }<br /><br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /><br />    return </span><span class="default">$frames </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111970">  <div class="votes">
    <div id="Vu111970">
    <a href="/manual/vote-note.php?id=111970&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111970">
    <a href="/manual/vote-note.php?id=111970&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111970" title="62% like this...">
    2
    </div>
  </div>
  <a href="#111970" class="name">
  <strong class="user"><em>ZeBadger</em></strong></a><a class="genanchor" href="#111970"> &para;</a><div class="date" title="2013-04-18 09:17"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111970">
<div class="phpcode"><code><span class="html">The version of is_ani that reads the file in 100Kb chunks is flawed as the end of frame marker might be split in between 2 chunks - so be careful.</span></code></div>
  </div>
 </div>
  <div class="note" id="36375">  <div class="votes">
    <div id="Vu36375">
    <a href="/manual/vote-note.php?id=36375&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36375">
    <a href="/manual/vote-note.php?id=36375&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36375" title="66% like this...">
    1
    </div>
  </div>
  <a href="#36375" class="name">
  <strong class="user"><em>josh [ a t ] OnlineComics [ d o t ] net</em></strong></a><a class="genanchor" href="#36375"> &para;</a><div class="date" title="2003-10-07 08:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36375">
<div class="phpcode"><code><span class="html">I just installed gif2png on my server, and it took a little research on my part to figure out that this...<br /><br />passthru("$path/gif2png -O $image_path/image.gif")<br /><br />will not work if safe mode is on. If you're on a shared server, it probably is. You don't need to turn safe mode off, however, just set the safe_mode_exec_dir variable in your php.ini file to the directory where you installed gif2png. Then you'll be able to execute the program from your PHP script.</span></code></div>
  </div>
 </div>
  <div class="note" id="26855">  <div class="votes">
    <div id="Vu26855">
    <a href="/manual/vote-note.php?id=26855&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26855">
    <a href="/manual/vote-note.php?id=26855&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26855" title="66% like this...">
    1
    </div>
  </div>
  <a href="#26855" class="name">
  <strong class="user"><em>unknown at hotmail dot com</em></strong></a><a class="genanchor" href="#26855"> &para;</a><div class="date" title="2002-11-14 06:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26855">
<div class="phpcode"><code><span class="html">If GD doesn't support GIFs &amp; gif2png is not available &amp; you are not an administrator, you can install it in your account like this:<br /><br />create do.php:<br />&lt;? <br />  global $do;<br />  passthru($do);<br />?&gt;<br /><br />then upload gif2png-2.4.6.tar.gz, unpack and install it:<br />do.php?do=tar+-xvzf+gif2png-2.4.6.tar.gz<br />do.php?do=gif2png-2.4.5/configure<br />do.php?do=make<br /><br />Then remove all files except gif2png. Don't forget to remove do.php as it is a serious security hole in your system. <br /><br />Njoy!<br /><br />Anze</span></code></div>
  </div>
 </div>
  <div class="note" id="59787">  <div class="votes">
    <div id="Vu59787">
    <a href="/manual/vote-note.php?id=59787&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59787">
    <a href="/manual/vote-note.php?id=59787&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59787" title="57% like this...">
    4
    </div>
  </div>
  <a href="#59787" class="name">
  <strong class="user"><em>ZeBadger</em></strong></a><a class="genanchor" href="#59787"> &para;</a><div class="date" title="2005-12-15 09:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59787">
<div class="phpcode"><code><span class="html">I have written this code to detect if a gif file is animated or not.  I thought I would share it :-)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">is_ani</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />{<br />        </span><span class="default">$filecontents</span><span class="keyword">=</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /><br />        </span><span class="default">$str_loc</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$count</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        while (</span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">) </span><span class="comment"># There is no point in continuing after we find a 2nd frame<br />        </span><span class="keyword">{<br /><br />                </span><span class="default">$where1</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$filecontents</span><span class="keyword">,</span><span class="string">"\x00\x21\xF9\x04"</span><span class="keyword">,</span><span class="default">$str_loc</span><span class="keyword">);<br />                if (</span><span class="default">$where1 </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">)<br />                {<br />                        break;<br />                }<br />                else<br />                {<br />                        </span><span class="default">$str_loc</span><span class="keyword">=</span><span class="default">$where1</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />                        </span><span class="default">$where2</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$filecontents</span><span class="keyword">,</span><span class="string">"\x00\x2C"</span><span class="keyword">,</span><span class="default">$str_loc</span><span class="keyword">);<br />                        if (</span><span class="default">$where2 </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">)<br />                        {<br />                                break;<br />                        }<br />                        else<br />                        {<br />                                if (</span><span class="default">$where1</span><span class="keyword">+</span><span class="default">8 </span><span class="keyword">== </span><span class="default">$where2</span><span class="keyword">)<br />                                {<br />                                        </span><span class="default">$count</span><span class="keyword">++;<br />                                }<br />                                </span><span class="default">$str_loc</span><span class="keyword">=</span><span class="default">$where2</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />                        }<br />                }<br />        }<br /><br />        if (</span><span class="default">$count </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">)<br />        {<br />                return(</span><span class="default">true</span><span class="keyword">);<br /><br />        }<br />        else<br />        {<br />                return(</span><span class="default">false</span><span class="keyword">);<br />        }<br />}<br /><br /></span><span class="default">exec</span><span class="keyword">(</span><span class="string">"ls *gif" </span><span class="keyword">,</span><span class="default">$allfiles</span><span class="keyword">);<br />foreach (</span><span class="default">$allfiles </span><span class="keyword">as </span><span class="default">$thisfile</span><span class="keyword">)<br />{<br />        if (</span><span class="default">is_ani</span><span class="keyword">(</span><span class="default">$thisfile</span><span class="keyword">))<br />        {<br />                echo </span><span class="string">"</span><span class="default">$thisfile</span><span class="string"> is animated&lt;BR&gt;\n"</span><span class="keyword">;<br />        }<br />        else<br />        {<br />                echo </span><span class="string">"</span><span class="default">$thisfile</span><span class="string"> is NOT animated&lt;BR&gt;\n"</span><span class="keyword">;<br />        }<br />}<br /></span><span class="default">?&gt;<br /></span><br />It could quite easily be modified to count the number of frames if you required.</span></code></div>
  </div>
 </div>
  <div class="note" id="119564">  <div class="votes">
    <div id="Vu119564">
    <a href="/manual/vote-note.php?id=119564&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119564">
    <a href="/manual/vote-note.php?id=119564&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119564" title="60% like this...">
    1
    </div>
  </div>
  <a href="#119564" class="name">
  <strong class="user"><em>marianbucur17 at yahoo dot com</em></strong></a><a class="genanchor" href="#119564"> &para;</a><div class="date" title="2016-07-07 02:13"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119564">
<div class="phpcode"><code><span class="html">I hate created an improved version of frank at huddler dot com's is_ani function, which keeps score even between hunks. Hope this helps!<br /><br />/**<br /> * Check if the provided file is an animated gif.<br /> *<br /> * @param string $fileName<br /> * @return bool<br /> */<br />function isAnimatedGif($fileName)<br />{<br />    $fh = fopen($fileName, 'rb');<br /><br />    if (!$fh) {<br />        return false;<br />    }<br /><br />    $totalCount = 0;<br />    $chunk = '';<br /><br />    // An animated gif contains multiple "frames", with each frame having a header made up of:<br />    // * a static 4-byte sequence (\x00\x21\xF9\x04)<br />    // * 4 variable bytes<br />    // * a static 2-byte sequence (\x00\x2C) (some variants may use \x00\x21 ?)<br /><br />    // We read through the file until we reach the end of it, or we've found at least 2 frame headers.<br />    while (!feof($fh) &amp;&amp; $totalCount &lt; 2) {<br />        // Read 100kb at a time and append it to the remaining chunk.<br />        $chunk .= fread($fh, 1024 * 100);<br />        $count = preg_match_all('#\x00\x21\xF9\x04.{4}\x00(\x2C|\x21)#s', $chunk, $matches);<br />        $totalCount += $count;<br /><br />        // Execute this block only if we found at least one match,<br />        // and if we did not reach the maximum number of matches needed.<br />        if ($count &gt; 0 &amp;&amp; $totalCount &lt; 2) {<br />            // Get the last full expression match.<br />            $lastMatch = end($matches[0]);<br />            // Get the string after the last match.<br />            $end = strrpos($chunk, $lastMatch) + strlen($lastMatch);<br />            $chunk = substr($chunk, $end);<br />        }<br />    }<br /><br />    fclose($fh);<br /><br />    return $totalCount &gt; 1;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="58128">  <div class="votes">
    <div id="Vu58128">
    <a href="/manual/vote-note.php?id=58128&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58128">
    <a href="/manual/vote-note.php?id=58128&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58128" title="100% like this...">
    1
    </div>
  </div>
  <a href="#58128" class="name">
  <strong class="user"><em>steve at stevedix dot de</em></strong></a><a class="genanchor" href="#58128"> &para;</a><div class="date" title="2005-10-25 12:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58128">
<div class="phpcode"><code><span class="html">If anyone is looking for the Yamasoft gif conversion utility :<br /><br />Although Yamasoft's website is long gone, the code can be found on the following websites : <br /> <a href="http://www.fpdf.org/phorum/read.php?f=1&amp;i=9418&amp;t=7568#9418" rel="nofollow" target="_blank">http://www.fpdf.org/phorum/read.php?f=1&amp;i=9418&amp;t=7568#9418</a><br /><br /><a href="http://www.fpdf.org/download/php-gif.zip" rel="nofollow" target="_blank">http://www.fpdf.org/download/php-gif.zip</a><br /><br /><a href="http://phpthumb.sourceforge.net/index.php?source=phpthumb.gif.php" rel="nofollow" target="_blank">http://phpthumb.sourceforge.net/index.php?source=phpthumb.gif.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="122056">  <div class="votes">
    <div id="Vu122056">
    <a href="/manual/vote-note.php?id=122056&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122056">
    <a href="/manual/vote-note.php?id=122056&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122056" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122056" class="name">
  <strong class="user"><em>simon at shortpixel dot com</em></strong></a><a class="genanchor" href="#122056"> &para;</a><div class="date" title="2017-12-20 01:38"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122056">
<div class="phpcode"><code><span class="html">A fix for the problem of the current is_ani function is to add the last 20b of the previous frame to the next one:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_ani</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {<br />  if(!(</span><span class="default">$fh </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">)))<br />    return </span><span class="default">false</span><span class="keyword">;<br />  </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="comment">//an animated gif contains multiple "frames", with each frame having a<br />  //header made up of:<br />  // * a static 4-byte sequence (\x00\x21\xF9\x04)<br />  // * 4 variable bytes<br />  // * a static 2-byte sequence (\x00\x2C) (some variants may use \x00\x21 ?)<br /><br />  // We read through the file til we reach the end of the file, or we've found<br />  // at least 2 frame headers<br />  </span><span class="default">$chunk </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />  while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">) &amp;&amp; </span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">) {<br />    </span><span class="comment">//add the last 20 characters from the previous string, to make sure the searched pattern is not split.<br />    </span><span class="default">$chunk </span><span class="keyword">= (</span><span class="default">$chunk </span><span class="keyword">? </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$chunk</span><span class="keyword">, -</span><span class="default">20</span><span class="keyword">) : </span><span class="string">""</span><span class="keyword">) . </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">); </span><span class="comment">//read 100kb at a time<br />    </span><span class="default">$count </span><span class="keyword">+= </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'#\x00\x21\xF9\x04.{4}\x00(\x2C|\x21)#s'</span><span class="keyword">, </span><span class="default">$chunk</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />  }<br /><br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />  return </span><span class="default">$count </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102915">  <div class="votes">
    <div id="Vu102915">
    <a href="/manual/vote-note.php?id=102915&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102915">
    <a href="/manual/vote-note.php?id=102915&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102915" title="50% like this...">
    0
    </div>
  </div>
  <a href="#102915" class="name">
  <strong class="user"><em>Malcolm Murphy</em></strong></a><a class="genanchor" href="#102915"> &para;</a><div class="date" title="2011-03-14 12:59"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102915">
<div class="phpcode"><code><span class="html">Hopefully this might save someone a headache when using functions to check for animated GIFs.<br /><br />I have come across some some GIFs use the a different frame separator sequence, \x00\x21, instead of the official standard \x00\x2C. This seems to be happening with animated GIFs saved in Photoshop CS5, although I'm not quite sure if that's where the issue is originating from.<br /><br />Anyway, I've been using the pattern:<br />"#\x00\x21\xF9\x04.{4}\x00(\x2C|\x21)#s"<br />which seems to cover all GIFs, hopefully without misinterpreting.<br /><br />Cheers.</span></code></div>
  </div>
 </div>
  <div class="note" id="31363">  <div class="votes">
    <div id="Vu31363">
    <a href="/manual/vote-note.php?id=31363&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31363">
    <a href="/manual/vote-note.php?id=31363&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31363" title="50% like this...">
    0
    </div>
  </div>
  <a href="#31363" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#31363"> &para;</a><div class="date" title="2003-04-18 09:34"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31363">
<div class="phpcode"><code><span class="html">re: 09-May-2002 11:31<br /><br />Seems gif2png is no longer at <a href="http://www.tuxedo.org/~esr/gif2png/" rel="nofollow" target="_blank">http://www.tuxedo.org/~esr/gif2png/</a><br />I found a Win32 version at <a href="http://www.r1ch.net/stuff/gif2png/" rel="nofollow" target="_blank">http://www.r1ch.net/stuff/gif2png/</a><br />(for the Unix and source, see <a href="http://catb.org/~esr/gif2png/" rel="nofollow" target="_blank">http://catb.org/~esr/gif2png/</a> )<br /><br />In Win32,<br />  passthru("gif2png $filename");<br />works fine if gif2png.exe is in the path.<br />It will overwrite the file with .png extension, so be careful,or use temp files as in the post referenced above (without the  -O; type "gif2png" at the command line for the options).<br /><br />I had a problem with exceeding the default 30 second execution time limit in PHP, so I added this line<br />  set_time_limit(0); // some odd gifs take a long time (example, a 25K gif, 700x700, mostly blank)</span></code></div>
  </div>
 </div>
  <div class="note" id="29433">  <div class="votes">
    <div id="Vu29433">
    <a href="/manual/vote-note.php?id=29433&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29433">
    <a href="/manual/vote-note.php?id=29433&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29433" title="no votes...">
    0
    </div>
  </div>
  <a href="#29433" class="name">
  <strong class="user"><em>fezber at yamasoft dot com</em></strong></a><a class="genanchor" href="#29433"> &para;</a><div class="date" title="2003-02-13 07:27"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29433">
<div class="phpcode"><code><span class="html">For users who just want GIF read (not write) support but:<br />1) Don't want to patch GD libs<br />2) Don't want to recompile something<br />3) Don't have permissions to install conversion packages<br />4) Any other reason...<br /><br />I created a small php script (around 25KB) which lets you load a GIF from a file (you even can specify the image index on animated GIFs) and then convert it to a PNG or BMP file.<br /><br />If I take one example:<br /><br />&lt;?<br />include("gif.php");<br /><br />$gif = gif_loadFile("./test.gif");<br /><br />if($gif) {<br />    // GIF file successfully opened<br />    if(gif_outputAsPNG($gif, "./test.png")) {<br />        // Now, just use ImageCreateFromPng...<br />        $img = ImageCreateFromPng("./test.png");<br /><br />        if($img) {<br />            header("Content-Type: image/jpeg");<br />            ImageJPEG($img);<br />            ImageDestroy($img);<br />        }<br />        else {<br />            // Could NOT open PNG<br />        }<br />    }<br />    else {<br />        // Could NOT convert GIF to PNG...<br />    }<br />}<br />else {<br />    // GIF not loaded...<br />}<br />?&gt;<br /><br />Of course, it's slower than using appropriate software and/or libraries but it's quite useful for reading occasionaly some GIF files.<br /><br />You'll find the gif.php source code at: <a href="http://www.yamasoft.com/php-gif.zip" rel="nofollow" target="_blank">http://www.yamasoft.com/php-gif.zip</a><br /><br />Fabien</span></code></div>
  </div>
 </div>
  <div class="note" id="28396">  <div class="votes">
    <div id="Vu28396">
    <a href="/manual/vote-note.php?id=28396&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28396">
    <a href="/manual/vote-note.php?id=28396&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28396" title="no votes...">
    0
    </div>
  </div>
  <a href="#28396" class="name">
  <strong class="user"><em>Ady at freebsd dot ady dot ro</em></strong></a><a class="genanchor" href="#28396"> &para;</a><div class="date" title="2003-01-11 11:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28396">
<div class="phpcode"><code><span class="html">FreeBSD users are lucky to have the option of compiling GIF support in GD2.x through the ports system.<br />All you need to do is to export the "WITH_LZW=yes" global variable when compiling the graphics/gd2 port, e.g.:<br /><br /># cd /usr/ports/graphics/gd2<br /># export WITH_LZW=yes<br /># make &amp;&amp; make install<br /><br />Then recompile and (re)install the www/mod_php4 port and you are in business... :)<br /><br />Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="21351">  <div class="votes">
    <div id="Vu21351">
    <a href="/manual/vote-note.php?id=21351&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21351">
    <a href="/manual/vote-note.php?id=21351&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21351" title="50% like this...">
    0
    </div>
  </div>
  <a href="#21351" class="name">
  <strong class="user"><em>senbei at terra dot es</em></strong></a><a class="genanchor" href="#21351"> &para;</a><div class="date" title="2002-05-09 10:31"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21351">
<div class="phpcode"><code><span class="html">Since gif support is removed from the more recent GD libraries, you can still use it via an external program.
<br />I've read somewhere about using ImageMagick and I tried myself but it's a quite big package and needs the X11 libs which are not available in some servers.
<br />The other option I found is to use a little prog "gif2png" <a href="http://www.tuxedo.org/~esr/gif2png/" rel="nofollow" target="_blank">http://www.tuxedo.org/~esr/gif2png/</a>
<br />to convert gif files to png ones. It works under Unix and dos/win32/winnt and is very straightforward.
<br />If you need to modify an user uploaded gif file to save it into your site just use this:
<br />
<br />$path=$_FILES["photo"]["tmp_name"];
<br />passthru("/usr/bin/gif2png -d -O ".$path);
<br />$src_img=imagecreatefrompng( dirname($path)."/".basename($path, ".gif").".png");
<br />
<br />This will convert the gif to a png and delete the gif file, then it will open the png with the GDlib so you can perform any operation on it.</span></code></div>
  </div>
 </div>
  <div class="note" id="41307">  <div class="votes">
    <div id="Vu41307">
    <a href="/manual/vote-note.php?id=41307&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41307">
    <a href="/manual/vote-note.php?id=41307&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41307" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#41307" class="name">
  <strong class="user"><em>jason at null dot zzz</em></strong></a><a class="genanchor" href="#41307"> &para;</a><div class="date" title="2004-04-06 02:13"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41307">
<div class="phpcode"><code><span class="html">thanks yamasoft for the gif to png lib.  it works!  but, there is one bug.  i changed line 1003 to this:<br /><br />if(isset($this-&gt;m_img-&gt;m_bTrans) &amp;&amp; $this-&gt;m_img-&gt;m_bTrans &amp;&amp; ($nColors &gt; 0)) {<br /><br />because i was getting an error that m_bTrans is undefined.  i think this is because my gif has no transparency.  after i updated this line, there were no problems.<br /><br />thanks!<br /><br />-j</span></code></div>
  </div>
 </div>
  <div class="note" id="33526">  <div class="votes">
    <div id="Vu33526">
    <a href="/manual/vote-note.php?id=33526&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33526">
    <a href="/manual/vote-note.php?id=33526&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33526" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#33526" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#33526"> &para;</a><div class="date" title="2003-06-29 04:26"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33526">
<div class="phpcode"><code><span class="html">function LoadGif ($imgname) {<br />    $im = @ImageCreateFromGIF ($imgname); /* Attempt to open */<br />    if (!$im) { /* See if it failed */<br />        $im = ImageCreate (150, 30); /* Create a blank image */<br />        $bgc = ImageColorAllocate ($im, 255, 255, 255);<br />        $tc  = ImageColorAllocate ($im, 0, 0, 0);<br />        ImageFilledRectangle ($im, 0, 0, 150, 30, $bgc); <br />        /* Output an errmsg */<br />        ImageString($im, 1, 5, 5, "Error loading $imgname", $tc); <br />    }<br />    return $im;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="29880">  <div class="votes">
    <div id="Vu29880">
    <a href="/manual/vote-note.php?id=29880&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29880">
    <a href="/manual/vote-note.php?id=29880&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29880" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#29880" class="name">
  <strong class="user"><em>geoffrey at poulet dot org</em></strong></a><a class="genanchor" href="#29880"> &para;</a><div class="date" title="2003-02-27 07:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29880">
<div class="phpcode"><code><span class="html">After hours of search, I've finally found a program which can convert JPG to GIF.<br />IJG - The Independent JPEG Group's JPEG software<br />Version 6 which support GIF (read and write with LZW)<br />and the version 6b which support GIF (write only without LZW)<br /><br />The name of the file is: jpegsrc.v6.tar.gz</span></code></div>
  </div>
 </div>
  <div class="note" id="113157">  <div class="votes">
    <div id="Vu113157">
    <a href="/manual/vote-note.php?id=113157&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113157">
    <a href="/manual/vote-note.php?id=113157&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113157" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#113157" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#113157"> &para;</a><div class="date" title="2013-09-06 08:27"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113157">
<div class="phpcode"><code><span class="html">Using the following script to generate(keep) animated GIF, it fixs GD lib animation problem.<br /><a href="http://www.gdenhancer.com/" rel="nofollow" target="_blank">http://www.gdenhancer.com/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="5851">  <div class="votes">
    <div id="Vu5851">
    <a href="/manual/vote-note.php?id=5851&amp;page=function.imagecreatefromgif&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5851">
    <a href="/manual/vote-note.php?id=5851&amp;page=function.imagecreatefromgif&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5851" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#5851" class="name">
  <strong class="user"><em>anthony dot atkins at vt dot edu</em></strong></a><a class="genanchor" href="#5851"> &para;</a><div class="date" title="2000-05-16 06:05"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5851">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">myImageCreateFromGif</span><span class="keyword">(</span><span class="default">$file_or_url</span><span class="keyword">) {
<br />
<br />        </span><span class="default">$dummy_file </span><span class="keyword">= </span><span class="string">"/tmp/dummy.gif"</span><span class="keyword">;
<br />
<br />        </span><span class="comment"># if this is a url, use fopen to get the file data, then 
<br />        # save it to a dummy file
<br />        </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(http|ftp):\/\//i"</span><span class="keyword">, </span><span class="default">$file_or_url</span><span class="keyword">)) {
<br />                </span><span class="comment"># open the file using fopen, which supports remote URLs
<br />                </span><span class="default">$input </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file_or_url</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);
<br />
<br />                </span><span class="comment"># read the contents of the file
<br />                # will accept files up to 10Mb, but will probably get 
<br />                # and EOF before that, we have to do it this way because
<br />                # filesize isn't designed to work with URLs.  sigh.
<br />                </span><span class="default">$image_data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">10000000</span><span class="keyword">);
<br />
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);
<br />
<br />                </span><span class="comment"># write the contents to a dummy file
<br />                </span><span class="default">$output </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dummy_file</span><span class="string">"</span><span class="keyword">, </span><span class="string">"wb"</span><span class="keyword">);
<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">$image_data</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">);
<br />
<br />                </span><span class="comment"># create the gif from the dummy file
<br />                </span><span class="default">$image </span><span class="keyword">= </span><span class="default">ImageCreateFromGif</span><span class="keyword">(</span><span class="default">$dummy_file</span><span class="keyword">);
<br />
<br />                </span><span class="comment"># get rid of the dummy file
<br />                </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$dummy_file</span><span class="keyword">);
<br />
<br />        }
<br />
<br />        </span><span class="comment"># if it's not a URL, we can simply open the image directly
<br />        </span><span class="keyword">else {
<br />                </span><span class="default">$image </span><span class="keyword">= </span><span class="default">ImageCreateFromGif</span><span class="keyword">(</span><span class="default">$file_or_url</span><span class="keyword">);
<br />        }
<br />
<br />        if (</span><span class="default">$image</span><span class="keyword">) { return </span><span class="default">$image</span><span class="keyword">; }
<br />        else { return </span><span class="default">0</span><span class="keyword">; }
<br />}
<br />
<br />
<br />if (!</span><span class="default">$url</span><span class="keyword">) { </span><span class="default">$url </span><span class="keyword">= </span><span class="string">"<a href="http://scholar.lib.vt.edu/images/cornholio.gif" rel="nofollow" target="_blank">http://scholar.lib.vt.edu/images/cornholio.gif</a>"</span><span class="keyword">;}
<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">myImageCreateFromGif</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />
<br />if (</span><span class="default">$image </span><span class="keyword">== </span><span class="string">"" </span><span class="keyword">|| </span><span class="default">$image </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {
<br />        print </span><span class="string">"&lt;p&gt;No Image data was returned...&lt;/p&gt;\n"</span><span class="keyword">;
<br />}
<br />else { 
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/gif\n\n"</span><span class="keyword">);
<br />        </span><span class="default">ImageGif</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecreatefromgif&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecreatefromgif.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
