<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ImagickDraw::pathLineToHorizontalRelative - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.imagickdraw.php">
 <link rel="prev" href="https://www.php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php">
 <link rel="next" href="https://www.php.net/manual/en/imagickdraw.pathlinetorelative.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imagickdraw.pathlinetohorizontalrelative.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imagickdraw.pathlinetohorizontalrelative.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imagickdraw.pathlinetohorizontalrelative.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imagickdraw.pathlinetohorizontalrelative.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imagickdraw.pathlinetohorizontalrelative.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imagickdraw.pathlinetohorizontalrelative.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imagickdraw.pathlinetohorizontalrelative.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imagickdraw.pathlinetohorizontalrelative.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imagickdraw.pathlinetohorizontalrelative.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imagickdraw.pathlinetohorizontalrelative.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Draws a horizontal line" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ImagickDraw::pathLineToHorizontalRelative - Manual" />
<meta name="twitter:description" content="Draws a horizontal line" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ImagickDraw::pathLineToHorizontalRelative - Manual" />
<meta itemprop="description" content="Draws a horizontal line" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Draws a horizontal line" />

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
        <a href="imagickdraw.pathlinetorelative.php">
          ImagickDraw::pathLineToRelative &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imagickdraw.pathlinetohorizontalabsolute.php">
          &laquo; ImagickDraw::pathLineToHorizontalAbsolute        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      <li><a href='class.imagickdraw.php'>ImagickDraw</a></li>      </ul>
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
            <option value='en/imagickdraw.pathlinetohorizontalrelative.php' selected="selected">English</option>
            <option value='de/imagickdraw.pathlinetohorizontalrelative.php'>German</option>
            <option value='es/imagickdraw.pathlinetohorizontalrelative.php'>Spanish</option>
            <option value='fr/imagickdraw.pathlinetohorizontalrelative.php'>French</option>
            <option value='it/imagickdraw.pathlinetohorizontalrelative.php'>Italian</option>
            <option value='ja/imagickdraw.pathlinetohorizontalrelative.php'>Japanese</option>
            <option value='pt_BR/imagickdraw.pathlinetohorizontalrelative.php'>Brazilian Portuguese</option>
            <option value='ru/imagickdraw.pathlinetohorizontalrelative.php'>Russian</option>
            <option value='tr/imagickdraw.pathlinetohorizontalrelative.php'>Turkish</option>
            <option value='uk/imagickdraw.pathlinetohorizontalrelative.php'>Ukrainian</option>
            <option value='zh/imagickdraw.pathlinetohorizontalrelative.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imagickdraw.pathlinetohorizontalrelative" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ImagickDraw::pathLineToHorizontalRelative</h1>
  <p class="verinfo">(PECL imagick 2, PECL imagick 3)</p><p class="refpurpose"><span class="refname">ImagickDraw::pathLineToHorizontalRelative</span> &mdash; <span class="dc-title">Draws a horizontal line</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-imagickdraw.pathlinetohorizontalrelative-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ImagickDraw::pathLineToHorizontalRelative</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>
  <p class="para">
   Draws a horizontal line path from the current point to the target point
   using relative coordinates.  The target point then becomes the new
   current point.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-imagickdraw.pathlinetohorizontalrelative-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">x</code></dt>
     <dd>
      <p class="para">
       x coordinate
      </p>
     </dd>
    
   </dl>
  </p>

 </div>

 <div class="refsect1 returnvalues" id="refsect1-imagickdraw.pathlinetohorizontalrelative-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/imagickdraw/pathlinetohorizontalrelative.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimagickdraw.pathlinetohorizontalrelative%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imagickdraw.pathlinetohorizontalrelative&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.imagickdraw.php">ImagickDraw</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="imagickdraw.affine.php" title="affine">affine</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.annotation.php" title="annotation">annotation</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.arc.php" title="arc">arc</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.bezier.php" title="bezier">bezier</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.circle.php" title="circle">circle</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.clear.php" title="clear">clear</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.clone.php" title="clone">clone</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.color.php" title="color">color</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.comment.php" title="comment">comment</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.composite.php" title="composite">composite</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.destroy.php" title="destroy">destroy</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.ellipse.php" title="ellipse">ellipse</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getclippath.php" title="getClipPath">getClipPath</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getcliprule.php" title="getClipRule">getClipRule</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getclipunits.php" title="getClipUnits">getClipUnits</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfillcolor.php" title="getFillColor">getFillColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfillopacity.php" title="getFillOpacity">getFillOpacity</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfillrule.php" title="getFillRule">getFillRule</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfont.php" title="getFont">getFont</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfontfamily.php" title="getFontFamily">getFontFamily</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfontsize.php" title="getFontSize">getFontSize</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfontstretch.php" title="getFontStretch">getFontStretch</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfontstyle.php" title="getFontStyle">getFontStyle</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getfontweight.php" title="getFontWeight">getFontWeight</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getgravity.php" title="getGravity">getGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokeantialias.php" title="getStrokeAntialias">getStrokeAntialias</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokecolor.php" title="getStrokeColor">getStrokeColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokedasharray.php" title="getStrokeDashArray">getStrokeDashArray</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokedashoffset.php" title="getStrokeDashOffset">getStrokeDashOffset</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokelinecap.php" title="getStrokeLineCap">getStrokeLineCap</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokelinejoin.php" title="getStrokeLineJoin">getStrokeLineJoin</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokemiterlimit.php" title="getStrokeMiterLimit">getStrokeMiterLimit</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokeopacity.php" title="getStrokeOpacity">getStrokeOpacity</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getstrokewidth.php" title="getStrokeWidth">getStrokeWidth</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextalignment.php" title="getTextAlignment">getTextAlignment</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextantialias.php" title="getTextAntialias">getTextAntialias</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextdecoration.php" title="getTextDecoration">getTextDecoration</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextencoding.php" title="getTextEncoding">getTextEncoding</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextinterlinespacing.php" title="getTextInterlineSpacing">getTextInterlineSpacing</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextinterwordspacing.php" title="getTextInterwordSpacing">getTextInterwordSpacing</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextkerning.php" title="getTextKerning">getTextKerning</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.gettextundercolor.php" title="getTextUnderColor">getTextUnderColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.getvectorgraphics.php" title="getVectorGraphics">getVectorGraphics</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.line.php" title="line">line</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.matte.php" title="matte">matte</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathclose.php" title="pathClose">pathClose</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetoabsolute.php" title="pathCurveToAbsolute">pathCurveToAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetoquadraticbezierabsolute.php" title="pathCurveToQuadraticBezierAbsolute">pathCurveToQuadraticBezierAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetoquadraticbezierrelative.php" title="pathCurveToQuadraticBezierRelative">pathCurveToQuadraticBezierRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php" title="pathCurveToQuadraticBezierSmoothAbsolute">pathCurveToQuadraticBezierSmoothAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php" title="pathCurveToQuadraticBezierSmoothRelative">pathCurveToQuadraticBezierSmoothRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetorelative.php" title="pathCurveToRelative">pathCurveToRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetosmoothabsolute.php" title="pathCurveToSmoothAbsolute">pathCurveToSmoothAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathcurvetosmoothrelative.php" title="pathCurveToSmoothRelative">pathCurveToSmoothRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathellipticarcabsolute.php" title="pathEllipticArcAbsolute">pathEllipticArcAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathellipticarcrelative.php" title="pathEllipticArcRelative">pathEllipticArcRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathfinish.php" title="pathFinish">pathFinish</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathlinetoabsolute.php" title="pathLineToAbsolute">pathLineToAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathlinetohorizontalabsolute.php" title="pathLineToHorizontalAbsolute">pathLineToHorizontalAbsolute</a>
                        </li>
                                                <li class="current">
                            <a href="imagickdraw.pathlinetohorizontalrelative.php" title="pathLineToHorizontalRelative">pathLineToHorizontalRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathlinetorelative.php" title="pathLineToRelative">pathLineToRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathlinetoverticalabsolute.php" title="pathLineToVerticalAbsolute">pathLineToVerticalAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathlinetoverticalrelative.php" title="pathLineToVerticalRelative">pathLineToVerticalRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathmovetoabsolute.php" title="pathMoveToAbsolute">pathMoveToAbsolute</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathmovetorelative.php" title="pathMoveToRelative">pathMoveToRelative</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pathstart.php" title="pathStart">pathStart</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.point.php" title="point">point</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.polygon.php" title="polygon">polygon</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.polyline.php" title="polyline">polyline</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pop.php" title="pop">pop</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.popclippath.php" title="popClipPath">popClipPath</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.popdefs.php" title="popDefs">popDefs</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.poppattern.php" title="popPattern">popPattern</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.push.php" title="push">push</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pushclippath.php" title="pushClipPath">pushClipPath</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pushdefs.php" title="pushDefs">pushDefs</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.pushpattern.php" title="pushPattern">pushPattern</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.rectangle.php" title="rectangle">rectangle</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.render.php" title="render">render</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.resetvectorgraphics.php" title="resetVectorGraphics">resetVectorGraphics</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.rotate.php" title="rotate">rotate</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.roundrectangle.php" title="roundRectangle">roundRectangle</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.scale.php" title="scale">scale</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setclippath.php" title="setClipPath">setClipPath</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setcliprule.php" title="setClipRule">setClipRule</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setclipunits.php" title="setClipUnits">setClipUnits</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfillalpha.php" title="setFillAlpha">setFillAlpha</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfillcolor.php" title="setFillColor">setFillColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfillopacity.php" title="setFillOpacity">setFillOpacity</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfillpatternurl.php" title="setFillPatternURL">setFillPatternURL</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfillrule.php" title="setFillRule">setFillRule</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfont.php" title="setFont">setFont</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfontfamily.php" title="setFontFamily">setFontFamily</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfontsize.php" title="setFontSize">setFontSize</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfontstretch.php" title="setFontStretch">setFontStretch</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfontstyle.php" title="setFontStyle">setFontStyle</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setfontweight.php" title="setFontWeight">setFontWeight</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setgravity.php" title="setGravity">setGravity</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setresolution.php" title="setResolution">setResolution</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokealpha.php" title="setStrokeAlpha">setStrokeAlpha</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokeantialias.php" title="setStrokeAntialias">setStrokeAntialias</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokecolor.php" title="setStrokeColor">setStrokeColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokedasharray.php" title="setStrokeDashArray">setStrokeDashArray</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokedashoffset.php" title="setStrokeDashOffset">setStrokeDashOffset</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokelinecap.php" title="setStrokeLineCap">setStrokeLineCap</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokelinejoin.php" title="setStrokeLineJoin">setStrokeLineJoin</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokemiterlimit.php" title="setStrokeMiterLimit">setStrokeMiterLimit</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokeopacity.php" title="setStrokeOpacity">setStrokeOpacity</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokepatternurl.php" title="setStrokePatternURL">setStrokePatternURL</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setstrokewidth.php" title="setStrokeWidth">setStrokeWidth</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextalignment.php" title="setTextAlignment">setTextAlignment</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextantialias.php" title="setTextAntialias">setTextAntialias</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextdecoration.php" title="setTextDecoration">setTextDecoration</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextencoding.php" title="setTextEncoding">setTextEncoding</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextinterlinespacing.php" title="setTextInterlineSpacing">setTextInterlineSpacing</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextinterwordspacing.php" title="setTextInterwordSpacing">setTextInterwordSpacing</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextkerning.php" title="setTextKerning">setTextKerning</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.settextundercolor.php" title="setTextUnderColor">setTextUnderColor</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setvectorgraphics.php" title="setVectorGraphics">setVectorGraphics</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.setviewbox.php" title="setViewbox">setViewbox</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.skewx.php" title="skewX">skewX</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.skewy.php" title="skewY">skewY</a>
                        </li>
                                                <li class="">
                            <a href="imagickdraw.translate.php" title="translate">translate</a>
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
