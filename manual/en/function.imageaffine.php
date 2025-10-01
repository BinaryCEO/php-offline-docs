<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imageaffine - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imageaffine.php">
 <link rel="shorturl" href="https://www.php.net/imageaffine">
 <link rel="alternate" href="https://www.php.net/imageaffine" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.image2wbmp.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imageaffinematrixconcat.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imageaffine.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imageaffine.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imageaffine.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imageaffine.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imageaffine.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imageaffine.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imageaffine.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imageaffine.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imageaffine.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imageaffine.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imageaffine.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return an image containing the affine transformed src image, using an optional clipping area" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imageaffine - Manual" />
<meta name="twitter:description" content="Return an image containing the affine transformed src image, using an optional clipping area" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imageaffine - Manual" />
<meta itemprop="description" content="Return an image containing the affine transformed src image, using an optional clipping area" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return an image containing the affine transformed src image, using an optional clipping area" />

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
        <a href="function.imageaffinematrixconcat.php">
          imageaffinematrixconcat &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.image2wbmp.php">
          &laquo; image2wbmp        </a>
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
            <option value='en/function.imageaffine.php' selected="selected">English</option>
            <option value='de/function.imageaffine.php'>German</option>
            <option value='es/function.imageaffine.php'>Spanish</option>
            <option value='fr/function.imageaffine.php'>French</option>
            <option value='it/function.imageaffine.php'>Italian</option>
            <option value='ja/function.imageaffine.php'>Japanese</option>
            <option value='pt_BR/function.imageaffine.php'>Brazilian Portuguese</option>
            <option value='ru/function.imageaffine.php'>Russian</option>
            <option value='tr/function.imageaffine.php'>Turkish</option>
            <option value='uk/function.imageaffine.php'>Ukrainian</option>
            <option value='zh/function.imageaffine.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imageaffine" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imageaffine</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imageaffine</span> &mdash; <span class="dc-title">Return an image containing the affine transformed src image, using an optional clipping area</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.imageaffine-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imageaffine</strong></span>(<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$affine</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$clip</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.imageaffine-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
   
    <dt><code class="parameter">affine</code></dt>
    <dd>
     <p class="para">
      Array with keys 0 to 5.
     </p>
    </dd>
   
   
    <dt><code class="parameter">clip</code></dt>
    <dd>
     <p class="para">
      Array with keys &quot;x&quot;, &quot;y&quot;, &quot;width&quot; and &quot;height&quot;; or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.imageaffine-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Return affined image object on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imageaffine-changelog">
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
       <code class="parameter">clip</code> is now nullable.
      </td>
     </tr>

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


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imageaffine.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imageaffine%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imageaffine&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imageaffine.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113958">  <div class="votes">
    <div id="Vu113958">
    <a href="/manual/vote-note.php?id=113958&amp;page=function.imageaffine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113958">
    <a href="/manual/vote-note.php?id=113958&amp;page=function.imageaffine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113958" title="90% like this...">
    25
    </div>
  </div>
  <a href="#113958" class="name">
  <strong class="user"><em>abc at  ed48 dot com</em></strong></a><a class="genanchor" href="#113958"> &para;</a><div class="date" title="2013-12-22 04:10"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113958">
<div class="phpcode"><code><span class="html">AFFINE is a geometric transformation operation involving MATRICES, covering both, 2D and 3D environment.<br />Transformations are often used in linear algebra and computer graphics.<br /><br />In geometric transformations of images, the pixel coordinate is mapped.<br /><br />This means that, each pixel is localized by two coordinates, in the rectangular domain of the image.<br />Without going into more details about pixel mapping, let's get to what really matters: the AFFINE transformations.<br />There are several classes of pixel mapping, one is called "affine".<br />Affine transformations include: scaling, rotation, shearing and translation.<br /><br />PHP 5.5.0+, like "libart", uses ARRAYS of six floating-point elements to do the job.<br /><br />The AFFINE ARRAY, is defined like, <br /><br />         $affine = [ a0, a1, b0, b1, a2, b2 ];<br />         <br />         where, <br />         a0, a1, b0, b1, a2, b2 are floating-point values.<br />                     <br />         represented by equations,<br />         <br />         x' = a0x + a1y + a2<br />                     <br />         y' = b0x + b1y + b2<br />         <br />a ) IDENTITY, no change made in the path of points,<br /><br />         $affine = [ 1, 0, 0, 1, 0, 0 ];<br />         <br />         equations remapping,<br />         <br />         x' = 1x + 0y + 0 = x<br />         <br />         y' = 0x + 1y = 0 = y<br />         <br />b ) TRANSLATION,<br /><br />         $affine = [ 1, 0, 0, 1, H, V ];<br /><br />         equations remapping,<br />         <br />         x' = 1x + 0y + H = x + H<br />         <br />         y' = 0x + 1y = V = y + V<br />         <br />         Each point is moved H units horizontaly and V units verticaly.<br />         <br />c ) SCALE,<br /><br />         $affine = [ i, 0, j, 1, 0, 0 ];<br /><br />         equations remapping,<br />         <br />         x' = Mx + 0y + 0 = Mx<br />         <br />         y' = 0x + Ny = 0 = Ny<br />         <br />         Each point will stretch or compress its path, horizontally or vertically, according M and N; negative or positive values.<br />         <br />d ) SHEARING, parallel to x axis,<br /><br />         $affine = [ 1, K, 0, 1, 0, 0 ];<br /><br />         equations remapping,<br />         <br />         x' = 1x + Ky + 0 = x + Ky<br />         <br />         y' = 0x + 1y = 0 = y<br />         <br />    SHEARING, parallel to y axis,<br /><br />         $affine = [ K, 0, 0, 1, 0, 0 ];<br /><br />         equations remapping,<br />         <br />         x' = 1x + 0y + 0 = x<br />         <br />         y' = Kx + 1y = 0 = y + Kx<br />         <br />e ) ROTATION, clockwise,<br /><br />         $affine = [ cos Ø, sin Ø, -sin Ø, cos Ø, 0, 0 ];<br /><br />         equations remapping,<br />         <br />         x' =  x cos Ø + y sin Ø + 0 = x cos Ø + y sin Ø<br />         <br />         y' = -x sin Ø + y cos Ø = 0 = y cos Ø - x sin Ø<br />         <br />    ROTATION, conterclockwise,<br /><br />         $affine = [ cos Ø, -sin Ø, sin Ø, cos Ø, 0, 0 ];<br /><br />         equations remapping,<br />         <br />         x' =  x cos Ø - y sin Ø + 0 = x cos Ø - y sin Ø<br />         <br />         y' = x sin Ø + y cos Ø = 0 = y sin Ø - x cos Ø</span></code></div>
  </div>
 </div>
  <div class="note" id="113960">  <div class="votes">
    <div id="Vu113960">
    <a href="/manual/vote-note.php?id=113960&amp;page=function.imageaffine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113960">
    <a href="/manual/vote-note.php?id=113960&amp;page=function.imageaffine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113960" title="85% like this...">
    5
    </div>
  </div>
  <a href="#113960" class="name">
  <strong class="user"><em>abc at ed48 dot com</em></strong></a><a class="genanchor" href="#113960"> &para;</a><div class="date" title="2013-12-22 05:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113960">
<div class="phpcode"><code><span class="html">Here is an example, which performs a specific processing, every time it is executed:<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'imageaffine'</span><span class="keyword">)) <br />{ <br />echo </span><span class="string">'FUNCTION NOT DEFINED IN THIS VERSION OF PHP'</span><span class="keyword">; <br />exit; <br />} <br /><br /></span><span class="default">$base_img </span><span class="keyword">= </span><span class="string">'affine.png'</span><span class="keyword">; <br /><br /></span><span class="default">$tgt_img1 </span><span class="keyword">= </span><span class="string">'triangle1.png'</span><span class="keyword">; <br /><br /></span><span class="default">$tgt_img2 </span><span class="keyword">= </span><span class="string">'triangle2.png'</span><span class="keyword">; <br /><br /></span><span class="default">$arr_affine </span><span class="keyword">= [ <br />[ </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">], <br />[ </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">], <br />[ </span><span class="default">1.2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0.6</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">], <br />[ -</span><span class="default">1.2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">0.6</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">], <br />[ </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">], <br />[ </span><span class="default">2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">], <br />[ </span><span class="default">cos</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), </span><span class="default">sin</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), -</span><span class="default">sin</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), </span><span class="default">cos</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">], <br />[ </span><span class="default">cos</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), -</span><span class="default">sin</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), </span><span class="default">sin</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), </span><span class="default">cos</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">] <br />];<br /><br /></span><span class="default">$RSR_base </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">); <br /></span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">); <br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">); <br /><br /></span><span class="default">$arr_clip </span><span class="keyword">= [ </span><span class="string">'x' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="string">'y' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="string">'width' </span><span class="keyword">=&gt; </span><span class="default">$w</span><span class="keyword">, </span><span class="string">'height' </span><span class="keyword">=&gt; </span><span class="default">$h </span><span class="keyword">]; <br /><br /></span><span class="default">$fillcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); <br /><br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">, </span><span class="default">$fillcolor</span><span class="keyword">); <br /><br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">$base_img</span><span class="keyword">); <br /><br /></span><span class="default">$drawcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);  <br /><br /></span><span class="default">$triangle </span><span class="keyword">= [ </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">150 </span><span class="keyword">]; <br /></span><span class="default">$points </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">; <br /><br /></span><span class="default">imageantialias</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); <br /><br /></span><span class="default">$drawtriangle </span><span class="keyword">= </span><span class="default">imagefilledpolygon</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">$triangle</span><span class="keyword">, </span><span class="default">$points</span><span class="keyword">, </span><span class="default">$drawcolor</span><span class="keyword">);<br /><br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">$tgt_img1</span><span class="keyword">);<br /><br /></span><span class="default">$select </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">); <br /><br /></span><span class="default">$RSRaff2 </span><span class="keyword">= </span><span class="default">imageaffine</span><span class="keyword">(</span><span class="default">$RSR_base</span><span class="keyword">, </span><span class="default">$arr_affine</span><span class="keyword">[</span><span class="default">$select</span><span class="keyword">], </span><span class="default">$arr_clip</span><span class="keyword">); <br /><br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$RSRaff2</span><span class="keyword">, </span><span class="default">$tgt_img2</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">); <br /><br /></span><span class="default">?&gt;</span> <br /><br />SUPPORT IMAGE&lt;br&gt;&lt;br&gt; <br />&lt;img src="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$base_img</span><span class="keyword">; </span><span class="default">?&gt;</span>" alt="*" /&gt;&lt;br&gt;&lt;br&gt; <br /><br />BASE IMAGE&lt;br&gt;&lt;br&gt; <br />&lt;img src="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$tgt_img1</span><span class="keyword">; </span><span class="default">?&gt;</span>" alt="*" /&gt;&lt;br&gt;&lt;br&gt; <br /><br />RESULT IMAGE&lt;br&gt;&lt;br&gt; <br />&lt;img src="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$tgt_img2</span><span class="keyword">; </span><span class="default">?&gt;</span>" alt="*" /&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="122400">  <div class="votes">
    <div id="Vu122400">
    <a href="/manual/vote-note.php?id=122400&amp;page=function.imageaffine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122400">
    <a href="/manual/vote-note.php?id=122400&amp;page=function.imageaffine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122400" title="75% like this...">
    2
    </div>
  </div>
  <a href="#122400" class="name">
  <strong class="user"><em>adri at sternschanze dot net</em></strong></a><a class="genanchor" href="#122400"> &para;</a><div class="date" title="2018-02-17 01:55"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122400">
<div class="phpcode"><code><span class="html">CORRECTION:<br /><br />The AFFINE ARRAY, is defined like,<br /><br />         $affine = [ a0, b0, a1, b1, a2, b2 ];</span></code></div>
  </div>
 </div>
  <div class="note" id="113959">  <div class="votes">
    <div id="Vu113959">
    <a href="/manual/vote-note.php?id=113959&amp;page=function.imageaffine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113959">
    <a href="/manual/vote-note.php?id=113959&amp;page=function.imageaffine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113959" title="71% like this...">
    3
    </div>
  </div>
  <a href="#113959" class="name">
  <strong class="user"><em>abc at ed48 dot com</em></strong></a><a class="genanchor" href="#113959"> &para;</a><div class="date" title="2013-12-22 05:17"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113959">
<div class="phpcode"><code><span class="html">correcting:<br /><br />c ) SCALE,<br /><br />         $affine = [ M, 0, N, 1, 0, 0 ];<br /><br />         equations remapping,<br />         <br />         x' = Mx + 0y + 0 = Mx<br />         <br />         y' = 0x + Ny = 0 = Ny<br />         <br />         Each point will stretch or compress its path, horizontally or vertically, according M and N; negative or positive values.</span></code></div>
  </div>
 </div>
  <div class="note" id="125882">  <div class="votes">
    <div id="Vu125882">
    <a href="/manual/vote-note.php?id=125882&amp;page=function.imageaffine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125882">
    <a href="/manual/vote-note.php?id=125882&amp;page=function.imageaffine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125882" title="no votes...">
    0
    </div>
  </div>
  <a href="#125882" class="name">
  <strong class="user"><em>der at herrstrietzel dot de</em></strong></a><a class="genanchor" href="#125882"> &para;</a><div class="date" title="2021-03-06 01:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125882">
<div class="phpcode"><code><span class="html">Might be an alternative or workaround for imagecopyresampled as imageaffine supports more sophisticated interpolation such as IMG_MITCHELL.<br /><br />// create image resource<br />$img_path = 'test.jpg';<br />$img = imagecreatefromstring(file_get_contents($img_path));<br />// scale image to 50% with Mitchell interpolation <br />$scale = 0.5;<br />imagesetinterpolation($img, IMG_MITCHELL);<br />$img_scaled = imageaffine($img, [0.5, 0, 0, 0.5, 0, 0]);<br />// save image<br />$output = 'test_scaledAffine.png';<br />imagepng($img_scaled, $output, 9);                <br />echo '&lt;img src="'.$output.'" width="300"&gt;';<br /><br />Helper function example:<br /><br />function scaleImgAffine($img, $newWidth, $resized_file='', $interpolation=IMG_MITCHELL)<br />{<br />    // create img resource if $img is file path <br />    if(!is_resource($img)){<br />        $img = imagecreatefromstring(file_get_contents($img));    <br />    }<br />    // get original img dimensions<br />    $w = imagesx($img);<br />    $h = imagesy($img);<br /><br />    /** <br />    * recommended interpolation method is 'IMG_MITCHELL' <br />    * providing the overall best precision and <br />    * compression for most image types <br />    * in particular for pngs with transparency suffering <br />    * from artifacted downsampling result <br />    */<br />    imagesetinterpolation($img, $interpolation);<br />    /*<br />    * imageaffine will scale dimensions in an anamorphic way – <br />    * even with square based images: <br />    * 1200x1200 will get something like 1199x1200<br />    * – improvements are very welcome<br />    * Workaround: Adjusting both the original width and the clip parameter <br />    * by adding 1px solved the issue for me<br />    */<br />    $scale = ($newWidth+1) / $w;<br />    $newHeight = floor($h*$scale);<br />        <br />    // scale by affine matrix<br />    $resized_affine = <br />    imageaffine(<br />        $img, <br />        [$scale, 0, 0, $scale, 0, 0],<br />        ['x' =&gt; 0, 'y' =&gt; 0, 'width' =&gt; $w, 'height' =&gt; $h-1] <br />    );<br />    /*<br />    * 'clip' parameter might be misleading as it expects <br />    * the original and not the final/transformed width<br />    */<br />    <br />    // save to file or return resource<br />    if($resized_file){<br />        $file_type = pathinfo($resized_file, PATHINFO_EXTENSION );<br />        switch($file_type){<br />            case 'jpg':<br />            case 'jpeg':        <br />                // flatten transparency for jpgs<br />                $tmp_img = imagecreatetruecolor($newWidth, $newHeight );<br />                $bg = imagecolorallocate($tmp_img, 255,255,255);<br />                imagefill($tmp_img, 0, 0, $bg);    <br />                imagesavealpha($tmp_img, false);<br />                imagealphablending($tmp_img, true);<br />                imagecopy($tmp_img, $resized_affine, 0, 0, 0, 0, $newWidth, $newHeight );<br />                imagejpeg($tmp_img, $resized_file, 85);<br />                break;<br />            case 'png':<br />                imagepng($resized_affine, $resized_file, 9);                <br />                break;<br />        }<br />    }else{<br />        return $resized_affine;    <br />    }<br />}<br /><br />$img_scaled_affine = scaleImgAffine($img_path, 400, 'test_scaledAffine.jpg', true);<br /><br />IMG_MITCHELL is in particular advanced when it comes to scaling png24 with transparency in GDlib environments (... actually png31 due to gds alpha 7bit channel?). Most commonly you'll experience bad compression using png due to imperceptible artifacts after resizing.<br /><br />Hopefully we'll see an implementation of more advanced interpolation methods in basic GD resizing functions like imagecopyresized or imagescale.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imageaffine&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imageaffine.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
