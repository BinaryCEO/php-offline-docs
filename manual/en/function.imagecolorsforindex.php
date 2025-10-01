<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecolorsforindex - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecolorsforindex.php">
 <link rel="shorturl" href="https://www.php.net/imagecolorsforindex">
 <link rel="alternate" href="https://www.php.net/imagecolorsforindex" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecolorset.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecolorstotal.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecolorsforindex.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecolorsforindex.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecolorsforindex.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecolorsforindex.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecolorsforindex.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecolorsforindex.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecolorsforindex.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecolorsforindex.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecolorsforindex.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecolorsforindex.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecolorsforindex.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the colors for an index" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecolorsforindex - Manual" />
<meta name="twitter:description" content="Get the colors for an index" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecolorsforindex - Manual" />
<meta itemprop="description" content="Get the colors for an index" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the colors for an index" />

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
        <a href="function.imagecolorstotal.php">
          imagecolorstotal &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecolorset.php">
          &laquo; imagecolorset        </a>
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
            <option value='en/function.imagecolorsforindex.php' selected="selected">English</option>
            <option value='de/function.imagecolorsforindex.php'>German</option>
            <option value='es/function.imagecolorsforindex.php'>Spanish</option>
            <option value='fr/function.imagecolorsforindex.php'>French</option>
            <option value='it/function.imagecolorsforindex.php'>Italian</option>
            <option value='ja/function.imagecolorsforindex.php'>Japanese</option>
            <option value='pt_BR/function.imagecolorsforindex.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecolorsforindex.php'>Russian</option>
            <option value='tr/function.imagecolorsforindex.php'>Turkish</option>
            <option value='uk/function.imagecolorsforindex.php'>Ukrainian</option>
            <option value='zh/function.imagecolorsforindex.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecolorsforindex" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecolorsforindex</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecolorsforindex</span> &mdash; <span class="dc-title">Get the colors for an index</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecolorsforindex-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecolorsforindex</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Gets the color for a specified index.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecolorsforindex-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       The color index.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecolorsforindex-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an associative array with red, green, blue and alpha keys that
   contain the appropriate values for the specified color index.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecolorsforindex-changelog">
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

     <tr>
      <td>8.0.0</td>
      <td>
       <span class="function"><strong>imagecolorsforindex()</strong></span> now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception
       if <code class="parameter">color</code> is out of range; previously, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned instead.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagecolorsforindex-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2852">
    <p><strong>Example #1 <span class="function"><strong>imagecolorsforindex()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// open an image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">'nexen.png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// get a color<br /></span><span style="color: #0000BB">$start_x </span><span style="color: #007700">= </span><span style="color: #0000BB">40</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$start_y </span><span style="color: #007700">= </span><span style="color: #0000BB">50</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$color_index </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$start_x</span><span style="color: #007700">, </span><span style="color: #0000BB">$start_y</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// make it human readable<br /></span><span style="color: #0000BB">$color_tran </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$color_index</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// what is it ?<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$color_tran</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
   [red] =&gt; 226
   [green] =&gt; 222
   [blue] =&gt; 252
   [alpha] =&gt; 0
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagecolorsforindex-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecolorat.php" class="function" rel="rdfs-seeAlso">imagecolorat()</a> - Get the index of the color of a pixel</span></li>
   <li><span class="function"><a href="function.imagecolorexact.php" class="function" rel="rdfs-seeAlso">imagecolorexact()</a> - Get the index of the specified color</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecolorsforindex.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecolorsforindex%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecolorsforindex&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorsforindex.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="84969">  <div class="votes">
    <div id="Vu84969">
    <a href="/manual/vote-note.php?id=84969&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84969">
    <a href="/manual/vote-note.php?id=84969&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84969" title="75% like this...">
    6
    </div>
  </div>
  <a href="#84969" class="name">
  <strong class="user"><em>matrebatre</em></strong></a><a class="genanchor" href="#84969"> &para;</a><div class="date" title="2008-08-07 11:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84969">
<div class="phpcode"><code><span class="html">Be aware that<br /><br /><span class="default">&lt;?php<br />$rgba     </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br /></span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgba </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br /></span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgba </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgba </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br /></span><span class="default">$a     </span><span class="keyword">= (</span><span class="default">$rgba </span><span class="keyword">&amp; </span><span class="default">0x7F000000</span><span class="keyword">) &gt;&gt; </span><span class="default">24</span><span class="keyword">;<br /></span><span class="default">?&gt;</span> <br /><br />will only work for truecolor images. With eg GIF images, this will have strange results. For GIF images, you should always use imagecolorsforindex().</span></code></div>
  </div>
 </div>
  <div class="note" id="77628">  <div class="votes">
    <div id="Vu77628">
    <a href="/manual/vote-note.php?id=77628&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77628">
    <a href="/manual/vote-note.php?id=77628&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77628" title="66% like this...">
    1
    </div>
  </div>
  <a href="#77628" class="name">
  <strong class="user"><em>slepichev at yahoo dot com</em></strong></a><a class="genanchor" href="#77628"> &para;</a><div class="date" title="2007-09-06 03:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77628">
<div class="phpcode"><code><span class="html">If you would like to change the intensity or lightness level of a specific color, you will need to convert the color format from RGB to HSL. <br />following function convert RGB array(red,green,blue) to HSL array(hue, saturation, lightness)<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Convert RGB colors array into HSL array<br /> * <br /> * @param array $ RGB colors set<br /> * @return array HSL set<br /> */<br /> </span><span class="keyword">function </span><span class="default">rgb2hsl</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">){<br />    <br />     </span><span class="default">$clrR </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">255</span><span class="keyword">);<br />     </span><span class="default">$clrG </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] / </span><span class="default">255</span><span class="keyword">);<br />     </span><span class="default">$clrB </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] / </span><span class="default">255</span><span class="keyword">);<br />    <br />     </span><span class="default">$clrMin </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">$clrR</span><span class="keyword">, </span><span class="default">$clrG</span><span class="keyword">, </span><span class="default">$clrB</span><span class="keyword">);<br />     </span><span class="default">$clrMax </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$clrR</span><span class="keyword">, </span><span class="default">$clrG</span><span class="keyword">, </span><span class="default">$clrB</span><span class="keyword">);<br />     </span><span class="default">$deltaMax </span><span class="keyword">= </span><span class="default">$clrMax </span><span class="keyword">- </span><span class="default">$clrMin</span><span class="keyword">;<br />    <br />     </span><span class="default">$L </span><span class="keyword">= (</span><span class="default">$clrMax </span><span class="keyword">+ </span><span class="default">$clrMin</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">;<br />    <br />     if (</span><span class="default">0 </span><span class="keyword">== </span><span class="default">$deltaMax</span><span class="keyword">){<br />         </span><span class="default">$H </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />         </span><span class="default">$S </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />         }<br />    else{<br />         if (</span><span class="default">0.5 </span><span class="keyword">&gt; </span><span class="default">$L</span><span class="keyword">){<br />             </span><span class="default">$S </span><span class="keyword">= </span><span class="default">$deltaMax </span><span class="keyword">/ (</span><span class="default">$clrMax </span><span class="keyword">+ </span><span class="default">$clrMin</span><span class="keyword">);<br />             }<br />        else{<br />             </span><span class="default">$S </span><span class="keyword">= </span><span class="default">$deltaMax </span><span class="keyword">/ (</span><span class="default">2 </span><span class="keyword">- </span><span class="default">$clrMax </span><span class="keyword">- </span><span class="default">$clrMin</span><span class="keyword">);<br />             }<br />         </span><span class="default">$deltaR </span><span class="keyword">= (((</span><span class="default">$clrMax </span><span class="keyword">- </span><span class="default">$clrR</span><span class="keyword">) / </span><span class="default">6</span><span class="keyword">) + (</span><span class="default">$deltaMax </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">)) / </span><span class="default">$deltaMax</span><span class="keyword">;<br />         </span><span class="default">$deltaG </span><span class="keyword">= (((</span><span class="default">$clrMax </span><span class="keyword">- </span><span class="default">$clrG</span><span class="keyword">) / </span><span class="default">6</span><span class="keyword">) + (</span><span class="default">$deltaMax </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">)) / </span><span class="default">$deltaMax</span><span class="keyword">;<br />         </span><span class="default">$deltaB </span><span class="keyword">= (((</span><span class="default">$clrMax </span><span class="keyword">- </span><span class="default">$clrB</span><span class="keyword">) / </span><span class="default">6</span><span class="keyword">) + (</span><span class="default">$deltaMax </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">)) / </span><span class="default">$deltaMax</span><span class="keyword">;<br />         if (</span><span class="default">$clrR </span><span class="keyword">== </span><span class="default">$clrMax</span><span class="keyword">){<br />             </span><span class="default">$H </span><span class="keyword">= </span><span class="default">$deltaB </span><span class="keyword">- </span><span class="default">$deltaG</span><span class="keyword">;<br />             }<br />        else if (</span><span class="default">$clrG </span><span class="keyword">== </span><span class="default">$clrMax</span><span class="keyword">){<br />             </span><span class="default">$H </span><span class="keyword">= (</span><span class="default">1 </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">) + </span><span class="default">$deltaR </span><span class="keyword">- </span><span class="default">$deltaB</span><span class="keyword">;<br />             }<br />        else if (</span><span class="default">$clrB </span><span class="keyword">== </span><span class="default">$clrMax</span><span class="keyword">){<br />             </span><span class="default">$H </span><span class="keyword">= (</span><span class="default">2 </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">) + </span><span class="default">$deltaG </span><span class="keyword">- </span><span class="default">$deltaR</span><span class="keyword">;<br />             }<br />         if (</span><span class="default">0 </span><span class="keyword">&gt; </span><span class="default">$H</span><span class="keyword">) </span><span class="default">$H </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />         if (</span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">$H</span><span class="keyword">) </span><span class="default">$H </span><span class="keyword">-= </span><span class="default">1</span><span class="keyword">;<br />         }<br />     return array(</span><span class="default">$H</span><span class="keyword">, </span><span class="default">$S</span><span class="keyword">, </span><span class="default">$L</span><span class="keyword">);<br />     }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79459">  <div class="votes">
    <div id="Vu79459">
    <a href="/manual/vote-note.php?id=79459&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79459">
    <a href="/manual/vote-note.php?id=79459&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79459" title="60% like this...">
    2
    </div>
  </div>
  <a href="#79459" class="name">
  <strong class="user"><em>joe dot scylla at gmail dot com</em></strong></a><a class="genanchor" href="#79459"> &para;</a><div class="date" title="2007-11-28 06:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79459">
<div class="phpcode"><code><span class="html">While it's quite easy and intuitive to get the alpha transparency of a pixel with:<br /><br /><span class="default">&lt;?php<br />$rgba     </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br /></span><span class="default">$alpha     </span><span class="keyword">= </span><span class="default">$rgba</span><span class="keyword">[</span><span class="string">"alpha"</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />you should use the return value of the command imagecolorat to get the alpha transparency with the code below because it's much faster and will have a major impact if you process every pixel of an image:<br /><br /><span class="default">&lt;?php<br />$rgba     </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br /></span><span class="default">$alpha     </span><span class="keyword">= (</span><span class="default">$rgba </span><span class="keyword">&amp; </span><span class="default">0x7F000000</span><span class="keyword">) &gt;&gt; </span><span class="default">24</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86198">  <div class="votes">
    <div id="Vu86198">
    <a href="/manual/vote-note.php?id=86198&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86198">
    <a href="/manual/vote-note.php?id=86198&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86198" title="60% like this...">
    1
    </div>
  </div>
  <a href="#86198" class="name">
  <strong class="user"><em>hofstadler dot andi at gmx dot at</em></strong></a><a class="genanchor" href="#86198"> &para;</a><div class="date" title="2008-10-07 12:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86198">
<div class="phpcode"><code><span class="html">I have optimized the rgb2hsl function from slepichev a bit, so that it is a bit shorter and hopefully a bit faster:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Convert RGB colors array into HSL array<br /> * <br /> * @param array $ RGB colors set, each color component with range 0 to 255<br /> * @return array HSL set, each color component with range 0 to 1<br /> */<br /></span><span class="keyword">function </span><span class="default">rgb2hsl</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">){<br />    </span><span class="default">$clrR </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">$clrG </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    </span><span class="default">$clrB </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />     <br />    </span><span class="default">$clrMin </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">$clrR</span><span class="keyword">, </span><span class="default">$clrG</span><span class="keyword">, </span><span class="default">$clrB</span><span class="keyword">);<br />    </span><span class="default">$clrMax </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$clrR</span><span class="keyword">, </span><span class="default">$clrG</span><span class="keyword">, </span><span class="default">$clrB</span><span class="keyword">);<br />    </span><span class="default">$deltaMax </span><span class="keyword">= </span><span class="default">$clrMax </span><span class="keyword">- </span><span class="default">$clrMin</span><span class="keyword">;<br />     <br />    </span><span class="default">$L </span><span class="keyword">= (</span><span class="default">$clrMax </span><span class="keyword">+ </span><span class="default">$clrMin</span><span class="keyword">) / </span><span class="default">510</span><span class="keyword">;<br />     <br />    if (</span><span class="default">0 </span><span class="keyword">== </span><span class="default">$deltaMax</span><span class="keyword">){<br />        </span><span class="default">$H </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$S </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br />    else{<br />        if (</span><span class="default">0.5 </span><span class="keyword">&gt; </span><span class="default">$L</span><span class="keyword">){<br />            </span><span class="default">$S </span><span class="keyword">= </span><span class="default">$deltaMax </span><span class="keyword">/ (</span><span class="default">$clrMax </span><span class="keyword">+ </span><span class="default">$clrMin</span><span class="keyword">);<br />        }<br />        else{<br />            </span><span class="default">$S </span><span class="keyword">= </span><span class="default">$deltaMax </span><span class="keyword">/ (</span><span class="default">510 </span><span class="keyword">- </span><span class="default">$clrMax </span><span class="keyword">- </span><span class="default">$clrMin</span><span class="keyword">);<br />        }<br /><br />        if (</span><span class="default">$clrMax </span><span class="keyword">== </span><span class="default">$clrR</span><span class="keyword">) {<br />            </span><span class="default">$H </span><span class="keyword">= (</span><span class="default">$clrG </span><span class="keyword">- </span><span class="default">$clrB</span><span class="keyword">) / (</span><span class="default">6.0 </span><span class="keyword">* </span><span class="default">$deltaMax</span><span class="keyword">);<br />        }<br />        else if (</span><span class="default">$clrMax </span><span class="keyword">== </span><span class="default">$clrG</span><span class="keyword">) {<br />            </span><span class="default">$H </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">/</span><span class="default">3 </span><span class="keyword">+ (</span><span class="default">$clrB </span><span class="keyword">- </span><span class="default">$clrR</span><span class="keyword">) / (</span><span class="default">6.0 </span><span class="keyword">* </span><span class="default">$deltaMax</span><span class="keyword">);<br />        }<br />        else {<br />            </span><span class="default">$H </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">/ </span><span class="default">3 </span><span class="keyword">+ (</span><span class="default">$clrR </span><span class="keyword">- </span><span class="default">$clrG</span><span class="keyword">) / (</span><span class="default">6.0 </span><span class="keyword">* </span><span class="default">$deltaMax</span><span class="keyword">);<br />        }<br /><br />        if (</span><span class="default">0 </span><span class="keyword">&gt; </span><span class="default">$H</span><span class="keyword">) </span><span class="default">$H </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />        if (</span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">$H</span><span class="keyword">) </span><span class="default">$H </span><span class="keyword">-= </span><span class="default">1</span><span class="keyword">;<br />    }<br />    return array(</span><span class="default">$H</span><span class="keyword">, </span><span class="default">$S</span><span class="keyword">,</span><span class="default">$L</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79511">  <div class="votes">
    <div id="Vu79511">
    <a href="/manual/vote-note.php?id=79511&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79511">
    <a href="/manual/vote-note.php?id=79511&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79511" title="100% like this...">
    1
    </div>
  </div>
  <a href="#79511" class="name">
  <strong class="user"><em>derek at idreams dot co dot uk</em></strong></a><a class="genanchor" href="#79511"> &para;</a><div class="date" title="2007-11-30 12:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79511">
<div class="phpcode"><code><span class="html">The earlier microsoft sepia example seemed to have a factor in which made it pinky... here is a modified example which uses just the Microsoft sepia (as per the wiki sepia entry)<br /><br />&lt;?<br />function imagetosepia(&amp;$img) {<br />  if (!($t = imagecolorstotal($img))) {<br />    $t = 256;<br />    imagetruecolortopalette($img, true, $t);<br />  }<br />  $total = imagecolorstotal( $img );<br />  for ( $i = 0; $i &lt; $total; $i++ ) {<br />    $index = imagecolorsforindex( $img, $i );<br />    $red = ( $index["red"] * 0.393 + $index["green"] * 0.769 + $index["blue"] * 0.189 );<br />    $green = ( $index["red"] * 0.349 + $index["green"] * 0.686 + $index["blue"] * 0.168 ); <br />    $blue = ( $index["red"] * 0.272 + $index["green"] * 0.534 + $index["blue"] * 0.131 ); <br />    if ($red &gt; 255) { $red = 255; }<br />    if ($green &gt; 255) { $green = 255; }<br />    if ($blue &gt; 255) { $blue = 255; }<br />    imagecolorset( $img, $i, $red, $green, $blue );<br />  }<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="56111">  <div class="votes">
    <div id="Vu56111">
    <a href="/manual/vote-note.php?id=56111&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56111">
    <a href="/manual/vote-note.php?id=56111&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56111" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56111" class="name">
  <strong class="user"><em>adspeed.com</em></strong></a><a class="genanchor" href="#56111"> &para;</a><div class="date" title="2005-08-23 04:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56111">
<div class="phpcode"><code><span class="html">To correct m4551 at abasoft dot it example:<br /><br />ImageTrueColorToPalette($im,1,$t);<br /><br />might give less colors than $t, so the for loop should call "$i&lt;ImageColorsTotal($im)" instead of "$i&lt;$t" just to be sure, or you'll get the warning: Color index [0-9] out of range</span></code></div>
  </div>
 </div>
  <div class="note" id="43563">  <div class="votes">
    <div id="Vu43563">
    <a href="/manual/vote-note.php?id=43563&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43563">
    <a href="/manual/vote-note.php?id=43563&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43563" title="50% like this...">
    0
    </div>
  </div>
  <a href="#43563" class="name">
  <strong class="user"><em>strozek(a)deas()harvard()edu</em></strong></a><a class="genanchor" href="#43563"> &para;</a><div class="date" title="2004-06-25 01:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43563">
<div class="phpcode"><code><span class="html">Regarding m4551's method of conversion -- the actual CCIR-approved RGB-to-grayscale conversion is as follows:<br /><br />grayscale component = 0.2125*R + 0.7154*G + 0.0721*B<br /><br />(cf. CCIR Recommendation 709 for modern monitors)</span></code></div>
  </div>
 </div>
  <div class="note" id="41842">  <div class="votes">
    <div id="Vu41842">
    <a href="/manual/vote-note.php?id=41842&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41842">
    <a href="/manual/vote-note.php?id=41842&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41842" title="50% like this...">
    0
    </div>
  </div>
  <a href="#41842" class="name">
  <strong class="user"><em>m4551 at abasoft dot it</em></strong></a><a class="genanchor" href="#41842"> &para;</a><div class="date" title="2004-04-23 09:23"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41842">
<div class="phpcode"><code><span class="html">here's a function to greyscale an image even from a truecolor source (jpeg or png).<br /><br />slightly poor quality, but very fast...<br /><br />function imagegreyscale(&amp;$img, $dither=1) {    <br />    if (!($t = imagecolorstotal($img))) {<br />        $t = 256;<br />        imagetruecolortopalette($img, $dither, $t);    <br />    }<br />    for ($c = 0; $c &lt; $t; $c++) {    <br />        $col = imagecolorsforindex($img, $c);<br />        $min = min($col['red'],$col['green'],$col['blue']);<br />        $max = max($col['red'],$col['green'],$col['blue']);<br />        $i = ($max+$min)/2;<br />        imagecolorset($img, $c, $i, $i, $i);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="77709">  <div class="votes">
    <div id="Vu77709">
    <a href="/manual/vote-note.php?id=77709&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77709">
    <a href="/manual/vote-note.php?id=77709&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77709" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#77709" class="name">
  <strong class="user"><em>tim at leethost dot com</em></strong></a><a class="genanchor" href="#77709"> &para;</a><div class="date" title="2007-09-09 10:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77709">
<div class="phpcode"><code><span class="html">Here's a better grayscale, sepia, and general tinting function.  This function is better because:<br /><br />1) Works with true color images (the other sepia code didn't).<br />2) Provides a more gooder grayscale conversion (yes, I said "more gooder").  The other grayscale code used imagetruecolortopalette, which just doesn't work well for grayscale conversion.<br />3) The other sepia code was really colorful, a little too much for my taste.  This function allows you to optionally set the tinting of the grayscale to anything you wish.<br />4) Single function for grayscale, sepia, and any other tinting you can dream up.<br /><br />Here's some examples:<br /><br />imagegrayscaletint ($img);  // Grayscale, no tinting<br />imagegrayscaletint ($img,304,242,209);  // What I use for sepia<br />imagegrayscaletint ($img,0,0,255);  // A berry blue image<br /><br />The RGB values for tinting are normally from 0 to 255.  But, you can use values larger than 255 to lighten and "burn" the image.  The sepia example above does this a little, the below example provides a better example of lightening the image and burning the light areas out a little:<br /><br />imagegrayscaletint ($img,400,400,400);  // Lighten image<br />imagegrayscaletint ($img,127,127,127);  // Darken image<br /><br />&lt;?<br />function imagegrayscaletint (&amp;$img, $tint_r = 255, $tint_g = 255, $tint_b = 255) {<br />  $width = imagesx($img); $height = imagesy($img);<br />  $dest = imagecreate ($width, $height);<br />  for ($i=0; $i&lt;256; $i++) imagecolorallocate ($dest, $i, $i, $i);<br />  imagecopyresized ($dest, $img, 0, 0, 0, 0, $width, $height, $width, $height);<br />  for ($i = 0; $i &lt; 256; $i++) imagecolorset ($dest, $i, min($i * abs($tint_r) / 255, 255), min($i * abs($tint_g) / 255, 255), min($i * abs($tint_b) / 255, 255));<br />  $img = imagecreate ($width, $height);<br />  imagecopy ($img, $dest, 0, 0, 0, 0, $width, $height);<br />  imagedestroy ($dest);<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="77366">  <div class="votes">
    <div id="Vu77366">
    <a href="/manual/vote-note.php?id=77366&amp;page=function.imagecolorsforindex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77366">
    <a href="/manual/vote-note.php?id=77366&amp;page=function.imagecolorsforindex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77366" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#77366" class="name">
  <strong class="user"><em>admin at phpgfx dot com</em></strong></a><a class="genanchor" href="#77366"> &para;</a><div class="date" title="2007-08-26 09:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77366">
<div class="phpcode"><code><span class="html">this is a sepia filter using microsoft's definition<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imagesepia</span><span class="keyword">( </span><span class="default">$img </span><span class="keyword">) {<br />    </span><span class="default">$total </span><span class="keyword">= </span><span class="default">imagecolorstotal</span><span class="keyword">( </span><span class="default">$img </span><span class="keyword">);<br />    for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {<br />        </span><span class="default">$index </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$i </span><span class="keyword">);<br />        </span><span class="default">$red </span><span class="keyword">= ( </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"red"</span><span class="keyword">] * </span><span class="default">0.393 </span><span class="keyword">+ </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"green"</span><span class="keyword">] * </span><span class="default">0.769 </span><span class="keyword">+ </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"blue"</span><span class="keyword">] * </span><span class="default">0.189 </span><span class="keyword">) / </span><span class="default">1.351</span><span class="keyword">;<br />        </span><span class="default">$green </span><span class="keyword">= ( </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"red"</span><span class="keyword">] * </span><span class="default">0.349 </span><span class="keyword">+ </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"green"</span><span class="keyword">] * </span><span class="default">0.686 </span><span class="keyword">+ </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"blue"</span><span class="keyword">] * </span><span class="default">0.168 </span><span class="keyword">) / </span><span class="default">1.203</span><span class="keyword">;<br />        </span><span class="default">$blue </span><span class="keyword">= ( </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"red"</span><span class="keyword">] * </span><span class="default">0.272 </span><span class="keyword">+ </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"green"</span><span class="keyword">] * </span><span class="default">0.534 </span><span class="keyword">+ </span><span class="default">$index</span><span class="keyword">[</span><span class="string">"blue"</span><span class="keyword">] * </span><span class="default">0.131 </span><span class="keyword">) / </span><span class="default">2.140</span><span class="keyword">;<br />        </span><span class="default">imagecolorset</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue </span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecolorsforindex&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorsforindex.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
