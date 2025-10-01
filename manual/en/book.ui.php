<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: UI - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ui.php">
 <link rel="shorturl" href="https://www.php.net/ui">
 <link rel="alternate" href="https://www.php.net/ui" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.ui.php">
 <link rel="prev" href="https://www.php.net/manual/en/refs.ui.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ui.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ui.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ui.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ui.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ui.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ui.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ui.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ui.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ui.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ui.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ui.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ui.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="UI" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: UI - Manual" />
<meta name="twitter:description" content="UI" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: UI - Manual" />
<meta itemprop="description" content="UI" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="UI" />

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
        <a href="intro.ui.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="refs.ui.php">
          &laquo; GUI Extensions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.ui.php'>GUI Extensions</a></li>      </ul>
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
            <option value='en/book.ui.php' selected="selected">English</option>
            <option value='de/book.ui.php'>German</option>
            <option value='es/book.ui.php'>Spanish</option>
            <option value='fr/book.ui.php'>French</option>
            <option value='it/book.ui.php'>Italian</option>
            <option value='ja/book.ui.php'>Japanese</option>
            <option value='pt_BR/book.ui.php'>Brazilian Portuguese</option>
            <option value='ru/book.ui.php'>Russian</option>
            <option value='tr/book.ui.php'>Turkish</option>
            <option value='uk/book.ui.php'>Ukrainian</option>
            <option value='zh/book.ui.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ui" class="book">
 
 <h1 class="title">UI</h1>
 

 

 






 

 






 







 






 






 






 






 






 







 






 






 






 






 






 






 






 






 






 






 






 






 






 






 







 






 






 






 







 






 






 






 






 






 






 






 






 







 






 






 







 







 






 






 






 






 






 







 






 






<ul class="chunklist chunklist_book"><li><a href="intro.ui.php">Introduction</a></li><li><a href="ui.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ui.requirements.php">Requirements</a></li><li><a href="ui.installation.php">Installation</a></li></ul></li><li><a href="class.ui-point.php">UI\Point</a> — Represents a position (x,y)<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-point.at.php">UI\Point::at</a> — Size Coercion</li><li><a href="ui-point.construct.php">UI\Point::__construct</a> — Construct a new Point</li><li><a href="ui-point.getx.php">UI\Point::getX</a> — Retrieves X</li><li><a href="ui-point.gety.php">UI\Point::getY</a> — Retrieves Y</li><li><a href="ui-point.setx.php">UI\Point::setX</a> — Set X</li><li><a href="ui-point.sety.php">UI\Point::setY</a> — Set Y</li></ul></li><li><a href="class.ui-size.php">UI\Size</a> — Represents dimensions (width, height)<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-size.construct.php">UI\Size::__construct</a> — Construct a new Size</li><li><a href="ui-size.getheight.php">UI\Size::getHeight</a> — Retrieves Height</li><li><a href="ui-size.getwidth.php">UI\Size::getWidth</a> — Retrives Width</li><li><a href="ui-size.of.php">UI\Size::of</a> — Point Coercion</li><li><a href="ui-size.setheight.php">UI\Size::setHeight</a> — Set Height</li><li><a href="ui-size.setwidth.php">UI\Size::setWidth</a> — Set Width</li></ul></li><li><a href="class.ui-window.php">UI\Window</a> — Window<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-window.add.php">UI\Window::add</a> — Add a Control</li><li><a href="ui-window.construct.php">UI\Window::__construct</a> — Construct a new Window</li><li><a href="ui-window.error.php">UI\Window::error</a> — Show Error Box</li><li><a href="ui-window.getsize.php">UI\Window::getSize</a> — Get Window Size</li><li><a href="ui-window.gettitle.php">UI\Window::getTitle</a> — Get Title</li><li><a href="ui-window.hasborders.php">UI\Window::hasBorders</a> — Border Detection</li><li><a href="ui-window.hasmargin.php">UI\Window::hasMargin</a> — Margin Detection</li><li><a href="ui-window.isfullscreen.php">UI\Window::isFullScreen</a> — Full Screen Detection</li><li><a href="ui-window.msg.php">UI\Window::msg</a> — Show Message Box</li><li><a href="ui-window.onclosing.php">UI\Window::onClosing</a> — Closing Callback</li><li><a href="ui-window.open.php">UI\Window::open</a> — Open Dialog</li><li><a href="ui-window.save.php">UI\Window::save</a> — Save Dialog</li><li><a href="ui-window.setborders.php">UI\Window::setBorders</a> — Border Use</li><li><a href="ui-window.setfullscreen.php">UI\Window::setFullScreen</a> — Full Screen Use</li><li><a href="ui-window.setmargin.php">UI\Window::setMargin</a> — Margin Use</li><li><a href="ui-window.setsize.php">UI\Window::setSize</a> — Set Size</li><li><a href="ui-window.settitle.php">UI\Window::setTitle</a> — Window Title</li></ul></li><li><a href="class.ui-control.php">UI\Control</a> — Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-control.destroy.php">UI\Control::destroy</a> — Destroy Control</li><li><a href="ui-control.disable.php">UI\Control::disable</a> — Disable Control</li><li><a href="ui-control.enable.php">UI\Control::enable</a> — Enable Control</li><li><a href="ui-control.getparent.php">UI\Control::getParent</a> — Get Parent Control</li><li><a href="ui-control.gettoplevel.php">UI\Control::getTopLevel</a> — Get Top Level</li><li><a href="ui-control.hide.php">UI\Control::hide</a> — Hide Control</li><li><a href="ui-control.isenabled.php">UI\Control::isEnabled</a> — Determine if Control is enabled</li><li><a href="ui-control.isvisible.php">UI\Control::isVisible</a> — Determine if Control is visible</li><li><a href="ui-control.setparent.php">UI\Control::setParent</a> — Set Parent Control</li><li><a href="ui-control.show.php">UI\Control::show</a> — Control Show</li></ul></li><li><a href="class.ui-menu.php">UI\Menu</a> — Menu<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-menu.append.php">UI\Menu::append</a> — Append Menu Item</li><li><a href="ui-menu.appendabout.php">UI\Menu::appendAbout</a> — Append About Menu Item</li><li><a href="ui-menu.appendcheck.php">UI\Menu::appendCheck</a> — Append Checkable Menu Item</li><li><a href="ui-menu.appendpreferences.php">UI\Menu::appendPreferences</a> — Append Preferences Menu Item</li><li><a href="ui-menu.appendquit.php">UI\Menu::appendQuit</a> — Append Quit Menu Item</li><li><a href="ui-menu.appendseparator.php">UI\Menu::appendSeparator</a> — Append Menu Item Separator</li><li><a href="ui-menu.construct.php">UI\Menu::__construct</a> — Construct a new Menu</li></ul></li><li><a href="class.ui-menuitem.php">UI\MenuItem</a> — Menu Item<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-menuitem.disable.php">UI\MenuItem::disable</a> — Disable Menu Item</li><li><a href="ui-menuitem.enable.php">UI\MenuItem::enable</a> — Enable Menu Item</li><li><a href="ui-menuitem.ischecked.php">UI\MenuItem::isChecked</a> — Detect Checked</li><li><a href="ui-menuitem.onclick.php">UI\MenuItem::onClick</a> — On Click Callback</li><li><a href="ui-menuitem.setchecked.php">UI\MenuItem::setChecked</a> — Set Checked</li></ul></li><li><a href="class.ui-area.php">UI\Area</a> — Area<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-area.ondraw.php">UI\Area::onDraw</a> — Draw Callback</li><li><a href="ui-area.onkey.php">UI\Area::onKey</a> — Key Callback</li><li><a href="ui-area.onmouse.php">UI\Area::onMouse</a> — Mouse Callback</li><li><a href="ui-area.redraw.php">UI\Area::redraw</a> — Redraw Area</li><li><a href="ui-area.scrollto.php">UI\Area::scrollTo</a> — Area Scroll</li><li><a href="ui-area.setsize.php">UI\Area::setSize</a> — Set Size</li></ul></li><li><a href="class.ui-executor.php">UI\Executor</a> — Execution Scheduler<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-executor.construct.php">UI\Executor::__construct</a> — Construct a new Executor</li><li><a href="ui-executor.kill.php">UI\Executor::kill</a> — Stop Executor</li><li><a href="ui-executor.onexecute.php">UI\Executor::onExecute</a> — Execution Callback</li><li><a href="ui-executor.setinterval.php">UI\Executor::setInterval</a> — Interval Manipulation</li></ul></li><li><a href="class.ui-controls-tab.php">UI\Controls\Tab</a> — Tab Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-tab.append.php">UI\Controls\Tab::append</a> — Append Page</li><li><a href="ui-controls-tab.delete.php">UI\Controls\Tab::delete</a> — Delete Page</li><li><a href="ui-controls-tab.hasmargin.php">UI\Controls\Tab::hasMargin</a> — Margin Detection</li><li><a href="ui-controls-tab.insertat.php">UI\Controls\Tab::insertAt</a> — Insert Page</li><li><a href="ui-controls-tab.pages.php">UI\Controls\Tab::pages</a> — Page Count</li><li><a href="ui-controls-tab.setmargin.php">UI\Controls\Tab::setMargin</a> — Set Margin</li></ul></li><li><a href="class.ui-controls-check.php">UI\Controls\Check</a> — Check Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-check.construct.php">UI\Controls\Check::__construct</a> — Construct a new Check</li><li><a href="ui-controls-check.gettext.php">UI\Controls\Check::getText</a> — Get Text</li><li><a href="ui-controls-check.ischecked.php">UI\Controls\Check::isChecked</a> — Checked Detection</li><li><a href="ui-controls-check.ontoggle.php">UI\Controls\Check::onToggle</a> — Toggle Callback</li><li><a href="ui-controls-check.setchecked.php">UI\Controls\Check::setChecked</a> — Set Checked</li><li><a href="ui-controls-check.settext.php">UI\Controls\Check::setText</a> — Set Text</li></ul></li><li><a href="class.ui-controls-button.php">UI\Controls\Button</a> — Button Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-button.construct.php">UI\Controls\Button::__construct</a> — Construct a new Button</li><li><a href="ui-controls-button.gettext.php">UI\Controls\Button::getText</a> — Get Text</li><li><a href="ui-controls-button.onclick.php">UI\Controls\Button::onClick</a> — Click Handler</li><li><a href="ui-controls-button.settext.php">UI\Controls\Button::setText</a> — Set Text</li></ul></li><li><a href="class.ui-controls-colorbutton.php">UI\Controls\ColorButton</a> — ColorButton Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-colorbutton.getcolor.php">UI\Controls\ColorButton::getColor</a> — Get Color</li><li><a href="ui-controls-colorbutton.onchange.php">UI\Controls\ColorButton::onChange</a> — Change Handler</li><li><a href="ui-controls-colorbutton.setcolor.php">UI\Controls\ColorButton::setColor</a> — Set Color</li></ul></li><li><a href="class.ui-controls-label.php">UI\Controls\Label</a> — Label Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-label.construct.php">UI\Controls\Label::__construct</a> — Construct a new Label</li><li><a href="ui-controls-label.gettext.php">UI\Controls\Label::getText</a> — Get Text</li><li><a href="ui-controls-label.settext.php">UI\Controls\Label::setText</a> — Set Text</li></ul></li><li><a href="class.ui-controls-entry.php">UI\Controls\Entry</a> — Entry Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-entry.construct.php">UI\Controls\Entry::__construct</a> — Construct a new Entry</li><li><a href="ui-controls-entry.gettext.php">UI\Controls\Entry::getText</a> — Get Text</li><li><a href="ui-controls-entry.isreadonly.php">UI\Controls\Entry::isReadOnly</a> — Detect Read Only</li><li><a href="ui-controls-entry.onchange.php">UI\Controls\Entry::onChange</a> — Change Handler</li><li><a href="ui-controls-entry.setreadonly.php">UI\Controls\Entry::setReadOnly</a> — Set Read Only</li><li><a href="ui-controls-entry.settext.php">UI\Controls\Entry::setText</a> — Set Text</li></ul></li><li><a href="class.ui-controls-multilineentry.php">UI\Controls\MultilineEntry</a> — MultilineEntry Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-multilineentry.append.php">UI\Controls\MultilineEntry::append</a> — Append Text</li><li><a href="ui-controls-multilineentry.construct.php">UI\Controls\MultilineEntry::__construct</a> — Construct a new Multiline Entry</li><li><a href="ui-controls-multilineentry.gettext.php">UI\Controls\MultilineEntry::getText</a> — Get Text</li><li><a href="ui-controls-multilineentry.isreadonly.php">UI\Controls\MultilineEntry::isReadOnly</a> — Read Only Detection</li><li><a href="ui-controls-multilineentry.onchange.php">UI\Controls\MultilineEntry::onChange</a> — Change Handler</li><li><a href="ui-controls-multilineentry.setreadonly.php">UI\Controls\MultilineEntry::setReadOnly</a> — Set Read Only</li><li><a href="ui-controls-multilineentry.settext.php">UI\Controls\MultilineEntry::setText</a> — Set Text</li></ul></li><li><a href="class.ui-controls-spin.php">UI\Controls\Spin</a> — Spin Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-spin.construct.php">UI\Controls\Spin::__construct</a> — Construct a new Spin</li><li><a href="ui-controls-spin.getvalue.php">UI\Controls\Spin::getValue</a> — Get Value</li><li><a href="ui-controls-spin.onchange.php">UI\Controls\Spin::onChange</a> — Change Handler</li><li><a href="ui-controls-spin.setvalue.php">UI\Controls\Spin::setValue</a> — Set Value</li></ul></li><li><a href="class.ui-controls-slider.php">UI\Controls\Slider</a> — Slider Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-slider.construct.php">UI\Controls\Slider::__construct</a> — Construct a new Slider</li><li><a href="ui-controls-slider.getvalue.php">UI\Controls\Slider::getValue</a> — Get Value</li><li><a href="ui-controls-slider.onchange.php">UI\Controls\Slider::onChange</a> — Change Handler</li><li><a href="ui-controls-slider.setvalue.php">UI\Controls\Slider::setValue</a> — Set Value</li></ul></li><li><a href="class.ui-controls-progress.php">UI\Controls\Progress</a> — Progress Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-progress.getvalue.php">UI\Controls\Progress::getValue</a> — Get Value</li><li><a href="ui-controls-progress.setvalue.php">UI\Controls\Progress::setValue</a> — Set Value</li></ul></li><li><a href="class.ui-controls-separator.php">UI\Controls\Separator</a> — Control Separator<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-separator.construct.php">UI\Controls\Separator::__construct</a> — Construct a new Separator</li></ul></li><li><a href="class.ui-controls-combo.php">UI\Controls\Combo</a> — Combo Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-combo.append.php">UI\Controls\Combo::append</a> — Append Option</li><li><a href="ui-controls-combo.getselected.php">UI\Controls\Combo::getSelected</a> — Get Selected Option</li><li><a href="ui-controls-combo.onselected.php">UI\Controls\Combo::onSelected</a> — Selected Handler</li><li><a href="ui-controls-combo.setselected.php">UI\Controls\Combo::setSelected</a> — Set Selected Option</li></ul></li><li><a href="class.ui-controls-editablecombo.php">UI\Controls\EditableCombo</a> — EdiableCombo Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-editablecombo.append.php">UI\Controls\EditableCombo::append</a> — Append Option</li><li><a href="ui-controls-editablecombo.gettext.php">UI\Controls\EditableCombo::getText</a> — Get Text</li><li><a href="ui-controls-editablecombo.onchange.php">UI\Controls\EditableCombo::onChange</a> — Change Handler</li><li><a href="ui-controls-editablecombo.settext.php">UI\Controls\EditableCombo::setText</a> — Set Text</li></ul></li><li><a href="class.ui-controls-radio.php">UI\Controls\Radio</a> — Radio Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-radio.append.php">UI\Controls\Radio::append</a> — Append Option</li><li><a href="ui-controls-radio.getselected.php">UI\Controls\Radio::getSelected</a> — Get Selected Option</li><li><a href="ui-controls-radio.onselected.php">UI\Controls\Radio::onSelected</a> — Selected Handler</li><li><a href="ui-controls-radio.setselected.php">UI\Controls\Radio::setSelected</a> — Set Selected Option</li></ul></li><li><a href="class.ui-controls-picker.php">UI\Controls\Picker</a> — Picker Control<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-picker.construct.php">UI\Controls\Picker::__construct</a> — Construct a new Picker</li></ul></li><li><a href="class.ui-controls-form.php">UI\Controls\Form</a> — Control Form (Arrangement)<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-form.append.php">UI\Controls\Form::append</a> — Append Control</li><li><a href="ui-controls-form.delete.php">UI\Controls\Form::delete</a> — Delete Control</li><li><a href="ui-controls-form.ispadded.php">UI\Controls\Form::isPadded</a> — Padding Detection</li><li><a href="ui-controls-form.setpadded.php">UI\Controls\Form::setPadded</a> — Set Padding</li></ul></li><li><a href="class.ui-controls-grid.php">UI\Controls\Grid</a> — Control Grid (Arrangement)<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-grid.append.php">UI\Controls\Grid::append</a> — Append Control</li><li><a href="ui-controls-grid.ispadded.php">UI\Controls\Grid::isPadded</a> — Padding Detection</li><li><a href="ui-controls-grid.setpadded.php">UI\Controls\Grid::setPadded</a> — Set Padding</li></ul></li><li><a href="class.ui-controls-group.php">UI\Controls\Group</a> — Control Group (Arrangement)<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-group.append.php">UI\Controls\Group::append</a> — Append Control</li><li><a href="ui-controls-group.construct.php">UI\Controls\Group::__construct</a> — Construct a new Group</li><li><a href="ui-controls-group.gettitle.php">UI\Controls\Group::getTitle</a> — Get Title</li><li><a href="ui-controls-group.hasmargin.php">UI\Controls\Group::hasMargin</a> — Margin Detection</li><li><a href="ui-controls-group.setmargin.php">UI\Controls\Group::setMargin</a> — Set Margin</li><li><a href="ui-controls-group.settitle.php">UI\Controls\Group::setTitle</a> — Set Title</li></ul></li><li><a href="class.ui-controls-box.php">UI\Controls\Box</a> — Control Box (Arrangement)<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-controls-box.append.php">UI\Controls\Box::append</a> — Append Control</li><li><a href="ui-controls-box.construct.php">UI\Controls\Box::__construct</a> — Construct a new Box</li><li><a href="ui-controls-box.delete.php">UI\Controls\Box::delete</a> — Delete Control</li><li><a href="ui-controls-box.getorientation.php">UI\Controls\Box::getOrientation</a> — Get Orientation</li><li><a href="ui-controls-box.ispadded.php">UI\Controls\Box::isPadded</a> — Padding Detection</li><li><a href="ui-controls-box.setpadded.php">UI\Controls\Box::setPadded</a> — Set Padding</li></ul></li><li><a href="class.ui-draw-pen.php">UI\Draw\Pen</a> — Draw Pen<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-pen.clip.php">UI\Draw\Pen::clip</a> — Clip a Path</li><li><a href="ui-draw-pen.fill.php">UI\Draw\Pen::fill</a> — Fill a Path</li><li><a href="ui-draw-pen.restore.php">UI\Draw\Pen::restore</a> — Restore</li><li><a href="ui-draw-pen.save.php">UI\Draw\Pen::save</a> — Save</li><li><a href="ui-draw-pen.stroke.php">UI\Draw\Pen::stroke</a> — Stroke a Path</li><li><a href="ui-draw-pen.transform.php">UI\Draw\Pen::transform</a> — Matrix Transform</li><li><a href="ui-draw-pen.write.php">UI\Draw\Pen::write</a> — Draw Text at Point</li></ul></li><li><a href="class.ui-draw-path.php">UI\Draw\Path</a> — Draw Path<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-path.addrectangle.php">UI\Draw\Path::addRectangle</a> — Draw a Rectangle</li><li><a href="ui-draw-path.arcto.php">UI\Draw\Path::arcTo</a> — Draw an Arc</li><li><a href="ui-draw-path.bezierto.php">UI\Draw\Path::bezierTo</a> — Draw Bezier Curve</li><li><a href="ui-draw-path.closefigure.php">UI\Draw\Path::closeFigure</a> — Close Figure</li><li><a href="ui-draw-path.construct.php">UI\Draw\Path::__construct</a> — Construct a new Path</li><li><a href="ui-draw-path.end.php">UI\Draw\Path::end</a> — Finalize Path</li><li><a href="ui-draw-path.lineto.php">UI\Draw\Path::lineTo</a> — Draw a Line</li><li><a href="ui-draw-path.newfigure.php">UI\Draw\Path::newFigure</a> — Draw Figure</li><li><a href="ui-draw-path.newfigurewitharc.php">UI\Draw\Path::newFigureWithArc</a> — Draw Figure with Arc</li></ul></li><li><a href="class.ui-draw-matrix.php">UI\Draw\Matrix</a> — Draw Matrix<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-matrix.invert.php">UI\Draw\Matrix::invert</a> — Invert Matrix</li><li><a href="ui-draw-matrix.isinvertible.php">UI\Draw\Matrix::isInvertible</a> — Invertible Detection</li><li><a href="ui-draw-matrix.multiply.php">UI\Draw\Matrix::multiply</a> — Multiply Matrix</li><li><a href="ui-draw-matrix.rotate.php">UI\Draw\Matrix::rotate</a> — Rotate Matrix</li><li><a href="ui-draw-matrix.scale.php">UI\Draw\Matrix::scale</a> — Scale Matrix</li><li><a href="ui-draw-matrix.skew.php">UI\Draw\Matrix::skew</a> — Skew Matrix</li><li><a href="ui-draw-matrix.translate.php">UI\Draw\Matrix::translate</a> — Translate Matrix</li></ul></li><li><a href="class.ui-draw-color.php">UI\Draw\Color</a> — Color Representation<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-color.construct.php">UI\Draw\Color::__construct</a> — Construct new Color</li><li><a href="ui-draw-color.getchannel.php">UI\Draw\Color::getChannel</a> — Color Manipulation</li><li><a href="ui-draw-color.setchannel.php">UI\Draw\Color::setChannel</a> — Color Manipulation</li></ul></li><li><a href="class.ui-draw-stroke.php">UI\Draw\Stroke</a> — Draw Stroke<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-stroke.construct.php">UI\Draw\Stroke::__construct</a> — Construct a new Stroke</li><li><a href="ui-draw-stroke.getcap.php">UI\Draw\Stroke::getCap</a> — Get Line Cap</li><li><a href="ui-draw-stroke.getjoin.php">UI\Draw\Stroke::getJoin</a> — Get Line Join</li><li><a href="ui-draw-stroke.getmiterlimit.php">UI\Draw\Stroke::getMiterLimit</a> — Get Miter Limit</li><li><a href="ui-draw-stroke.getthickness.php">UI\Draw\Stroke::getThickness</a> — Get Thickness</li><li><a href="ui-draw-stroke.setcap.php">UI\Draw\Stroke::setCap</a> — Set Line Cap</li><li><a href="ui-draw-stroke.setjoin.php">UI\Draw\Stroke::setJoin</a> — Set Line Join</li><li><a href="ui-draw-stroke.setmiterlimit.php">UI\Draw\Stroke::setMiterLimit</a> — Set Miter Limit</li><li><a href="ui-draw-stroke.setthickness.php">UI\Draw\Stroke::setThickness</a> — Set Thickness</li></ul></li><li><a href="class.ui-draw-brush.php">UI\Draw\Brush</a> — Brushes<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-brush.construct.php">UI\Draw\Brush::__construct</a> — Construct a new Brush</li><li><a href="ui-draw-brush.getcolor.php">UI\Draw\Brush::getColor</a> — Get Color</li><li><a href="ui-draw-brush.setcolor.php">UI\Draw\Brush::setColor</a> — Set Color</li></ul></li><li><a href="class.ui-draw-brush-gradient.php">UI\Draw\Brush\Gradient</a> — Gradient Brushes<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-brush-gradient.addstop.php">UI\Draw\Brush\Gradient::addStop</a> — Stop Manipulation</li><li><a href="ui-draw-brush-gradient.delstop.php">UI\Draw\Brush\Gradient::delStop</a> — Stop Manipulation</li><li><a href="ui-draw-brush-gradient.setstop.php">UI\Draw\Brush\Gradient::setStop</a> — Stop Manipulation</li></ul></li><li><a href="class.ui-draw-brush-lineargradient.php">UI\Draw\Brush\LinearGradient</a> — Linear Gradient<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-brush-lineargradient.construct.php">UI\Draw\Brush\LinearGradient::__construct</a> — Construct a Linear Gradient</li></ul></li><li><a href="class.ui-draw-brush-radialgradient.php">UI\Draw\Brush\RadialGradient</a> — Radial Gradient<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-brush-radialgradient.construct.php">UI\Draw\Brush\RadialGradient::__construct</a> — Construct a new Radial Gradient</li></ul></li><li><a href="class.ui-draw-text-layout.php">UI\Draw\Text\Layout</a> — Represents Text Layout<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-text-layout.construct.php">UI\Draw\Text\Layout::__construct</a> — Construct a new Text Layout</li><li><a href="ui-draw-text-layout.setcolor.php">UI\Draw\Text\Layout::setColor</a> — Set Color</li><li><a href="ui-draw-text-layout.setwidth.php">UI\Draw\Text\Layout::setWidth</a> — Set Width</li></ul></li><li><a href="class.ui-draw-text-font.php">UI\Draw\Text\Font</a> — Represents a Font<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-text-font.construct.php">UI\Draw\Text\Font::__construct</a> — Construct a new Font</li><li><a href="ui-draw-text-font.getascent.php">UI\Draw\Text\Font::getAscent</a> — Font Metrics</li><li><a href="ui-draw-text-font.getdescent.php">UI\Draw\Text\Font::getDescent</a> — Font Metrics</li><li><a href="ui-draw-text-font.getleading.php">UI\Draw\Text\Font::getLeading</a> — Font Metrics</li><li><a href="ui-draw-text-font.getunderlineposition.php">UI\Draw\Text\Font::getUnderlinePosition</a> — Font Metrics</li><li><a href="ui-draw-text-font.getunderlinethickness.php">UI\Draw\Text\Font::getUnderlineThickness</a> — Font Metrics</li></ul></li><li><a href="class.ui-draw-text-font-descriptor.php">UI\Draw\Text\Font\Descriptor</a> — Font Descriptor<ul class="chunklist chunklist_book chunklist_children"><li><a href="ui-draw-text-font-descriptor.construct.php">UI\Draw\Text\Font\Descriptor::__construct</a> — Construct a new Font Descriptor</li><li><a href="ui-draw-text-font-descriptor.getfamily.php">UI\Draw\Text\Font\Descriptor::getFamily</a> — Get Font Family</li><li><a href="ui-draw-text-font-descriptor.getitalic.php">UI\Draw\Text\Font\Descriptor::getItalic</a> — Style Detection</li><li><a href="ui-draw-text-font-descriptor.getsize.php">UI\Draw\Text\Font\Descriptor::getSize</a> — Size Detection</li><li><a href="ui-draw-text-font-descriptor.getstretch.php">UI\Draw\Text\Font\Descriptor::getStretch</a> — Style Detection</li><li><a href="ui-draw-text-font-descriptor.getweight.php">UI\Draw\Text\Font\Descriptor::getWeight</a> — Weight Detection</li></ul></li><li><a href="ref.ui.php">UI Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.ui-draw-text-font-fontfamilies.php">UI\Draw\Text\Font\fontFamilies</a> — Retrieve Font Families</li><li><a href="function.ui-quit.php">UI\quit</a> — Quit UI Loop</li><li><a href="function.ui-run.php">UI\run</a> — Enter UI Loop</li></ul></li><li><a href="class.ui-draw-text-font-weight.php">UI\Draw\Text\Font\Weight</a> — Font Weight Settings</li><li><a href="class.ui-draw-text-font-italic.php">UI\Draw\Text\Font\Italic</a> — Italic Font Settings</li><li><a href="class.ui-draw-text-font-stretch.php">UI\Draw\Text\Font\Stretch</a> — Font Stretch Settings</li><li><a href="class.ui-draw-line-cap.php">UI\Draw\Line\Cap</a> — Line Cap Settings</li><li><a href="class.ui-draw-line-join.php">UI\Draw\Line\Join</a> — Line Join Settings</li><li><a href="class.ui-key.php">UI\Key</a> — Key Identifiers</li><li><a href="class.ui-exception-invalidargumentexception.php">UI\Exception\InvalidArgumentException</a> — InvalidArgumentException</li><li><a href="class.ui-exception-runtimeexception.php">UI\Exception\RuntimeException</a> — RuntimeException</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ui/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ui%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ui&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ui.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.ui.php">GUI Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="book.ui.php" title="UI">UI</a>
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
