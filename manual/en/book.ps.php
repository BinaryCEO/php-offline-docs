<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PS - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ps.php">
 <link rel="shorturl" href="https://www.php.net/ps">
 <link rel="alternate" href="https://www.php.net/ps" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.utilspec.nontext.php">
 <link rel="prev" href="https://www.php.net/manual/en/wkhtmltox-image-converter.getversion.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ps.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ps.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ps.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ps.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ps.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ps.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ps.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ps.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ps.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ps.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ps.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ps.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="PostScript document creation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PS - Manual" />
<meta name="twitter:description" content="PostScript document creation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PS - Manual" />
<meta itemprop="description" content="PostScript document creation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PostScript document creation" />

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
        <a href="intro.ps.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="wkhtmltox-image-converter.getversion.php">
          &laquo; wkhtmltox\Image\Converter::getVersion        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      </ul>
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
            <option value='en/book.ps.php' selected="selected">English</option>
            <option value='de/book.ps.php'>German</option>
            <option value='es/book.ps.php'>Spanish</option>
            <option value='fr/book.ps.php'>French</option>
            <option value='it/book.ps.php'>Italian</option>
            <option value='ja/book.ps.php'>Japanese</option>
            <option value='pt_BR/book.ps.php'>Brazilian Portuguese</option>
            <option value='ru/book.ps.php'>Russian</option>
            <option value='tr/book.ps.php'>Turkish</option>
            <option value='uk/book.ps.php'>Ukrainian</option>
            <option value='zh/book.ps.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ps" class="book">
 
 <h1 class="title">PostScript document creation</h1>
 
 
 
 
 
 
 







 





 







<ul class="chunklist chunklist_book"><li><a href="intro.ps.php">Introduction</a></li><li><a href="ps.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ps.requirements.php">Requirements</a></li><li><a href="ps.installation.php">Installation</a></li><li><a href="ps.resources.php">Resource Types</a></li></ul></li><li><a href="ps.constants.php">Predefined Constants</a></li><li><a href="ref.ps.php">PS Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.ps-add-bookmark.php">ps_add_bookmark</a> — Add bookmark to current page</li><li><a href="function.ps-add-launchlink.php">ps_add_launchlink</a> — Adds link which launches file</li><li><a href="function.ps-add-locallink.php">ps_add_locallink</a> — Adds link to a page in the same document</li><li><a href="function.ps-add-note.php">ps_add_note</a> — Adds note to current page</li><li><a href="function.ps-add-pdflink.php">ps_add_pdflink</a> — Adds link to a page in a second pdf document</li><li><a href="function.ps-add-weblink.php">ps_add_weblink</a> — Adds link to a web location</li><li><a href="function.ps-arc.php">ps_arc</a> — Draws an arc counterclockwise</li><li><a href="function.ps-arcn.php">ps_arcn</a> — Draws an arc clockwise</li><li><a href="function.ps-begin-page.php">ps_begin_page</a> — Start a new page</li><li><a href="function.ps-begin-pattern.php">ps_begin_pattern</a> — Start a new pattern</li><li><a href="function.ps-begin-template.php">ps_begin_template</a> — Start a new template</li><li><a href="function.ps-circle.php">ps_circle</a> — Draws a circle</li><li><a href="function.ps-clip.php">ps_clip</a> — Clips drawing to current path</li><li><a href="function.ps-close.php">ps_close</a> — Closes a PostScript document</li><li><a href="function.ps-close-image.php">ps_close_image</a> — Closes image and frees memory</li><li><a href="function.ps-closepath.php">ps_closepath</a> — Closes path</li><li><a href="function.ps-closepath-stroke.php">ps_closepath_stroke</a> — Closes and strokes path</li><li><a href="function.ps-continue-text.php">ps_continue_text</a> — Continue text in next line</li><li><a href="function.ps-curveto.php">ps_curveto</a> — Draws a curve</li><li><a href="function.ps-delete.php">ps_delete</a> — Deletes all resources of a PostScript document</li><li><a href="function.ps-end-page.php">ps_end_page</a> — End a page</li><li><a href="function.ps-end-pattern.php">ps_end_pattern</a> — End a pattern</li><li><a href="function.ps-end-template.php">ps_end_template</a> — End a template</li><li><a href="function.ps-fill.php">ps_fill</a> — Fills the current path</li><li><a href="function.ps-fill-stroke.php">ps_fill_stroke</a> — Fills and strokes the current path</li><li><a href="function.ps-findfont.php">ps_findfont</a> — Loads a font</li><li><a href="function.ps-get-buffer.php">ps_get_buffer</a> — Fetches the full buffer containig the generated PS data</li><li><a href="function.ps-get-parameter.php">ps_get_parameter</a> — Gets certain parameters</li><li><a href="function.ps-get-value.php">ps_get_value</a> — Gets certain values</li><li><a href="function.ps-hyphenate.php">ps_hyphenate</a> — Hyphenates a word</li><li><a href="function.ps-include-file.php">ps_include_file</a> — Reads an external file with raw PostScript code</li><li><a href="function.ps-lineto.php">ps_lineto</a> — Draws a line</li><li><a href="function.ps-makespotcolor.php">ps_makespotcolor</a> — Create spot color</li><li><a href="function.ps-moveto.php">ps_moveto</a> — Sets current point</li><li><a href="function.ps-new.php">ps_new</a> — Creates a new PostScript document object</li><li><a href="function.ps-open-file.php">ps_open_file</a> — Opens a file for output</li><li><a href="function.ps-open-image.php">ps_open_image</a> — Reads an image for later placement</li><li><a href="function.ps-open-image-file.php">ps_open_image_file</a> — Opens image from file</li><li><a href="function.ps-open-memory-image.php">ps_open_memory_image</a> — Takes an GD image and returns an image for placement in a PS document</li><li><a href="function.ps-place-image.php">ps_place_image</a> — Places image on the page</li><li><a href="function.ps-rect.php">ps_rect</a> — Draws a rectangle</li><li><a href="function.ps-restore.php">ps_restore</a> — Restore previously save context</li><li><a href="function.ps-rotate.php">ps_rotate</a> — Sets rotation factor</li><li><a href="function.ps-save.php">ps_save</a> — Save current context</li><li><a href="function.ps-scale.php">ps_scale</a> — Sets scaling factor</li><li><a href="function.ps-set-border-color.php">ps_set_border_color</a> — Sets color of border for annotations</li><li><a href="function.ps-set-border-dash.php">ps_set_border_dash</a> — Sets length of dashes for border of annotations</li><li><a href="function.ps-set-border-style.php">ps_set_border_style</a> — Sets border style of annotations</li><li><a href="function.ps-set-info.php">ps_set_info</a> — Sets information fields of document</li><li><a href="function.ps-set-parameter.php">ps_set_parameter</a> — Sets certain parameters</li><li><a href="function.ps-set-text-pos.php">ps_set_text_pos</a> — Sets position for text output</li><li><a href="function.ps-set-value.php">ps_set_value</a> — Sets certain values</li><li><a href="function.ps-setcolor.php">ps_setcolor</a> — Sets current color</li><li><a href="function.ps-setdash.php">ps_setdash</a> — Sets appearance of a dashed line</li><li><a href="function.ps-setflat.php">ps_setflat</a> — Sets flatness</li><li><a href="function.ps-setfont.php">ps_setfont</a> — Sets font to use for following output</li><li><a href="function.ps-setgray.php">ps_setgray</a> — Sets gray value</li><li><a href="function.ps-setlinecap.php">ps_setlinecap</a> — Sets appearance of line ends</li><li><a href="function.ps-setlinejoin.php">ps_setlinejoin</a> — Sets how contected lines are joined</li><li><a href="function.ps-setlinewidth.php">ps_setlinewidth</a> — Sets width of a line</li><li><a href="function.ps-setmiterlimit.php">ps_setmiterlimit</a> — Sets the miter limit</li><li><a href="function.ps-setoverprintmode.php">ps_setoverprintmode</a> — Sets overprint mode</li><li><a href="function.ps-setpolydash.php">ps_setpolydash</a> — Sets appearance of a dashed line</li><li><a href="function.ps-shading.php">ps_shading</a> — Creates a shading for later use</li><li><a href="function.ps-shading-pattern.php">ps_shading_pattern</a> — Creates a pattern based on a shading</li><li><a href="function.ps-shfill.php">ps_shfill</a> — Fills an area with a shading</li><li><a href="function.ps-show.php">ps_show</a> — Output text</li><li><a href="function.ps-show-boxed.php">ps_show_boxed</a> — Output text in a box</li><li><a href="function.ps-show-xy.php">ps_show_xy</a> — Output text at given position</li><li><a href="function.ps-show-xy2.php">ps_show_xy2</a> — Output text at position</li><li><a href="function.ps-show2.php">ps_show2</a> — Output a text at current position</li><li><a href="function.ps-string-geometry.php">ps_string_geometry</a> — Gets geometry of a string</li><li><a href="function.ps-stringwidth.php">ps_stringwidth</a> — Gets width of a string</li><li><a href="function.ps-stroke.php">ps_stroke</a> — Draws the current path</li><li><a href="function.ps-symbol.php">ps_symbol</a> — Output a glyph</li><li><a href="function.ps-symbol-name.php">ps_symbol_name</a> — Gets name of a glyph</li><li><a href="function.ps-symbol-width.php">ps_symbol_width</a> — Gets width of a glyph</li><li><a href="function.ps-translate.php">ps_translate</a> — Sets translation</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ps/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ps%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ps&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ps.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.utilspec.nontext.php">Non-Text MIME Output</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.fdf.php" title="FDF">FDF</a>
                        </li>
                                                <li class="">
                            <a href="book.gnupg.php" title="GnuPG">GnuPG</a>
                        </li>
                                                <li class="">
                            <a href="book.wkhtmltox.php" title="wkhtmltox">wkhtmltox</a>
                        </li>
                                                <li class="current">
                            <a href="book.ps.php" title="PS">PS</a>
                        </li>
                                                <li class="">
                            <a href="book.rpminfo.php" title="RpmInfo">RpmInfo</a>
                        </li>
                                                <li class="">
                            <a href="book.xlswriter.php" title="XLSWriter">XLSWriter</a>
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
