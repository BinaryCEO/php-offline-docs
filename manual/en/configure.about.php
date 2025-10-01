<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: List of core configure options - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/configure.about.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/configure.about.php">
 <link rel="alternate" href="https://www.php.net/manual/en/configure.about.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/configure.php">
 <link rel="prev" href="https://www.php.net/manual/en/configure.php">
 <link rel="next" href="https://www.php.net/manual/en/ini.php">

 <link rel="alternate" href="https://www.php.net/manual/en/configure.about.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/configure.about.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/configure.about.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/configure.about.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/configure.about.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/configure.about.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/configure.about.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/configure.about.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/configure.about.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/configure.about.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/configure.about.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List of core configure options" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: List of core configure options - Manual" />
<meta name="twitter:description" content="List of core configure options" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: List of core configure options - Manual" />
<meta itemprop="description" content="List of core configure options" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List of core configure options" />

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
        <a href="ini.php">
          php.ini directives &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="configure.php">
          &laquo; Configure options        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='configure.php'>Configure options</a></li>      </ul>
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
            <option value='en/configure.about.php' selected="selected">English</option>
            <option value='de/configure.about.php'>German</option>
            <option value='es/configure.about.php'>Spanish</option>
            <option value='fr/configure.about.php'>French</option>
            <option value='it/configure.about.php'>Italian</option>
            <option value='ja/configure.about.php'>Japanese</option>
            <option value='pt_BR/configure.about.php'>Brazilian Portuguese</option>
            <option value='ru/configure.about.php'>Russian</option>
            <option value='tr/configure.about.php'>Turkish</option>
            <option value='uk/configure.about.php'>Ukrainian</option>
            <option value='zh/configure.about.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="configure.about" class="sect1">
  <h2 class="title">List of core configure options</h2>
  <p class="para">
   Below is a partial list of configure options used by the PHP
   <var class="filename">configure</var> scripts when compiling in Unix-like
   environments. Most configure options are listed in their appropriate
   locations on the extension reference pages and not here. For a complete
   up-to-date list of configure options, run <strong class="command">./configure --help</strong>
   in your PHP source directory after running <strong class="command">autoconf</strong>
   (see also the <a href="install.php" class="link">Installation chapter</a>).
   You may also be interested in reading the
   <a href="http://www.airs.com/ian/configure/" class="link external">&raquo;&nbsp;GNU configure</a> documentation for
   information on additional <strong class="command">configure</strong> options such as
   <code class="literal">--prefix=PREFIX</code>.
  </p>
  
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    These are only used at compile time. If you want to alter PHP&#039;s
    runtime configuration, please see the chapter on <a href="configuration.php" class="link">Runtime Configuration</a>.
   </p>
  </p></blockquote>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <a href="configure.about.php#configure.options.misc" class="link">Miscellaneous</a>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <a href="configure.about.php#configure.options.php" class="link">PHP Behaviour</a>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <a href="configure.about.php#configure.options.servers" class="link">Server</a>
    </span>
   </li>
  </ul>

  <div class="sect2" id="configure.options">
   <h3 class="title">Configure Options in PHP</h3>
   

 <div class="sect3" id="configure.options.misc">
  <h4 class="title">Misc options</h4>
  <dl>
   
    <dt id="configure.enable-debug">
     <strong class="option configure">--enable-debug</strong>
    </dt>
    <dd>
     <p class="para">
      Compile with debugging symbols.
     </p>
    </dd>
   
   
    <dt id="configure.with-layout">
     <strong class="option configure">--with-layout=TYPE</strong>
    </dt>
    <dd>
     <p class="para">
      Sets how installed files will be laid out. Type is one of PHP (default) 
      or GNU. Note that if installing manpages under PREFIX (default), choose the
      GNU style in order for them to be found in the search path of <var class="filename">manpath</var> utility.
     </p>
    </dd>
   
   
    <dt id="configure.with-pear">
     <strong class="option configure">--with-pear=DIR</strong>
    </dt>
    <dd>
     <p class="para">
      Install PEAR in DIR (default PREFIX/lib/php).
     </p>
    </dd>
   
   
    <dt id="configure.without-pear">
     <strong class="option configure">--without-pear</strong>
    </dt>
    <dd>
     <p class="para">
      Do not install PEAR.
     </p>
    </dd>
   

   
    <dt id="configure.enable-sigchild">
     <strong class="option configure">--enable-sigchild</strong>
    </dt>
    <dd>
     <p class="para">
      Enable PHP&#039;s own SIGCHLD handler.
     </p>
    </dd>
   
   
    <dt id="configure.disable-rpath">
     <strong class="option configure">--disable-rpath</strong>
    </dt>
    <dd>
     <p class="para">
      Disable passing additional runtime library search paths.
     </p>
    </dd>
   
   
    <dt id="configure.enable-libgcc">
     <strong class="option configure">--enable-libgcc</strong>
    </dt>
    <dd>
     <p class="para">
      Enable explicitly linking against libgcc.
     </p>
    </dd>
   
   
    <dt id="configure.enable-php-streams">
     <strong class="option configure">--enable-php-streams</strong>
    </dt>
    <dd>
     <p class="para">
      Include experimental PHP streams. Do not use unless you are testing the 
code!
     </p>
    </dd>
   
   
    <dt id="configure.with-zlib-dir">
     <strong class="option configure">--with-zlib-dir[=DIR]</strong>
    </dt>
    <dd>
     <p class="para">
      Define the location of zlib install directory.
     </p>
    </dd>
   

   
    <dt id="configure.with-tsrm-pthreads">
     <strong class="option configure">--with-tsrm-pthreads</strong>
    </dt>
    <dd>
     <p class="para">
      Use POSIX threads (default).
     </p>
    </dd>
   
   
    <dt id="configure.enable-shared">
     <strong class="option configure">--enable-shared[=PKGS]</strong>
    </dt>
    <dd>
     <p class="para">
      Build shared libraries [default=yes].
     </p>
    </dd>
   
   
    <dt id="configure.enable-static">
     <strong class="option configure">--enable-static[=PKGS]</strong>
    </dt>
    <dd>
     <p class="para">
      Build static libraries [default=yes].
     </p>
    </dd>
   
   
    <dt id="configure.enable-fast-install">
     <strong class="option configure">--enable-fast-install[=PKGS]</strong>
    </dt>
    <dd>
     <p class="para">
      Optimize for fast installation [default=yes].
     </p>
    </dd>
   
   
    <dt id="configure.with-gnu-ld">
     <strong class="option configure">--with-gnu-ld</strong>
    </dt>
    <dd>
     <p class="para">
      Assume the C compiler uses GNU ld [default=no].
     </p>
    </dd>
   
   
    <dt id="configure.disable-libtool-lock">
     <strong class="option configure">--disable-libtool-lock</strong>
    </dt>
    <dd>
     <p class="para">
      Avoid locking (might break parallel builds).
     </p>
    </dd>
   
   
    <dt id="configure.with-pic">
     <strong class="option configure">--with-pic</strong>
    </dt>
    <dd>
     <p class="para">
      Try to use only PIC/non-PIC objects [default=use both].
     </p>
    </dd>
   

   
    <dt id="configure.enable-versioning.php4">
     <strong class="option configure">--enable-versioning</strong>
    </dt>
    <dd>
     <p class="para">
      Export only required symbols.
      See INSTALL for more information.
     </p>
    </dd>
   
  </dl>
 </div>



   

 <div class="sect3" id="configure.options.php">
  <h4 class="title">PHP options</h4>
  <dl>
   
    <dt id="configure.enable-maintainer-mode">
     <strong class="option configure">--enable-maintainer-mode</strong>
    </dt>
    <dd>
     <p class="para">
      Enable make rules and dependencies not useful (and sometimes confusing) 
      to the casual installer.
     </p>
    </dd>
   
   
    <dt id="configure.with-config-file-path">
     <strong class="option configure">--with-config-file-path=PATH</strong>
    </dt>
    <dd>
     <p class="para">
      Sets the path in which to look for <var class="filename">php.ini</var>, defaults to <code class="literal">PREFIX/lib</code>.
     </p>
    </dd>
   
   
    <dt id="configure.disable-short-tags">
     <strong class="option configure">--disable-short-tags</strong>
    </dt>
    <dd>
     <p class="para">
      Disable the short-form &lt;? start tag by default.
     </p>
    </dd>
   
   
    <dt id="configure.with-libdir">
     <strong class="option configure">--with-libdir</strong>
    </dt>
    <dd>
     <p class="para">
      Specifies the directory where the libraries to build PHP exist on a 
      Unix system. For 64bit systems, its needed to specify this argument 
      to the <code class="literal">lib64</code> directory like: 
      <code class="literal">--with-libdir=lib64</code>.
     </p>
    </dd>
   
   
    <dt id="configure.enable-zts">
     <strong class="option configure">--enable-zts</strong>
    </dt>
    <dd>
     <p class="para">
      Enables thread safety.
      Prior to PHP 8.0.0 on non-Windows systems, the option was called
      <strong class="option configure">--enable-maintainer-zts</strong>.
     </p>
    </dd>
   
  </dl>
 </div>



   

 <div class="sect3" id="configure.options.servers">
  <h4 class="title">SAPI options</h4>
  <p class="para">
   The following list contains the available SAPI&amp;s (<code class="literal">Server
   Application Programming Interface</code>) for PHP.
  </p>
  <dl>
   
    <dt id="configure.with-apxs">
     <strong class="option configure">--with-apxs[=FILE]</strong>
    </dt>
    <dd>
     <p class="para">
      Build shared Apache module. FILE is the optional pathname to the Apache
      apxs tool; defaults to apxs. Make sure you specify the version of apxs that
      is actually installed on your system and NOT the one that is in the apache
      source tarball.
     </p>
    </dd>
   
   
    <dt id="configure.with-apache">
     <strong class="option configure">--with-apache[=DIR]</strong>
    </dt>
    <dd>
     <p class="para">
      Build a static Apache module. DIR is the top-level Apache build directory,
      defaults to <var class="filename">/usr/local/apache</var>.
     </p>
    </dd>
   
   
    <dt id="configure.with-mod-charset">
     <strong class="option configure">--with-mod_charset</strong>
    </dt>
    <dd>
     <p class="para">
      Enable transfer tables for mod_charset (Russian Apache).
     </p>
    </dd>
   
   
    <dt id="configure.with-apxs2">
     <strong class="option configure">--with-apxs2[=FILE]</strong>
    </dt>
    <dd>
     <p class="para">
      Build shared Apache 2.0 module. FILE is the optional pathname to the Apache
      apxs tool; defaults to apxs.
     </p>
    </dd>
   

   
    <dt id="configure.disable-cli">
     <strong class="option configure">--disable-cli</strong>
    </dt>
    <dd>
     <p class="para">
      Disable building the CLI version of PHP (this
      forces <a href="configure.about.php#configure.without-pear" class="link">--without-pear</a>).
      More information is available in the section about
      <a href="features.commandline.php" class="link">Using PHP from the command line</a>.
     </p>
    </dd>
   
   
   
    <dt id="configure.enable-phpdbg">
     <strong class="option configure">--enable-phpdbg</strong>
    </dt>
    <dd>
     <p class="para">
      Enable phpdbg interactive debugger SAPI module support.
     </p>
    </dd>
   

   
    <dt id="configure.enable-embed">
     <strong class="option configure">--enable-embed[=TYPE]</strong>
    </dt>
    <dd>
     <p class="para">
      Enable building of the embedded SAPI library. TYPE is either
      <code class="literal">shared</code> or <code class="literal">static</code>, which
      defaults to <code class="literal">shared</code>.
     </p>
    </dd>
   

   
    <dt id="configure.with-servlet">
     <strong class="option configure">--with-servlet[=DIR]</strong>
    </dt>
    <dd>
     <p class="para">
      Include servlet support. DIR is the base install directory for the JSDK.
      This SAPI requires the java extension must be built as a shared dl.
     </p>
    </dd>
   

   
    <dt id="configure.disable-cgi">
     <strong class="option configure">--disable-cgi</strong>
    </dt>
    <dd>
     <p class="para">
      Disable building CGI version of PHP.
     </p>
     <p class="para">
      This argument also enables FastCGI.
     </p>
    </dd>
   

  </dl>
 </div>



  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/configure/index.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fconfigure.about%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=configure.about&amp;repo=en&amp;redirect=https://www.php.net/manual/en/configure.about.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125777">  <div class="votes">
    <div id="Vu125777">
    <a href="/manual/vote-note.php?id=125777&amp;page=configure.about&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125777">
    <a href="/manual/vote-note.php?id=125777&amp;page=configure.about&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125777" title="62% like this...">
    6
    </div>
  </div>
  <a href="#125777" class="name">
  <strong class="user"><em>atesin () gmail ! com</em></strong></a><a class="genanchor" href="#125777"> &para;</a><div class="date" title="2021-02-04 08:55"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125777">
<div class="phpcode"><code><span class="html">i'll answer myself (FINALLY!)<br /><br />current "configure options" can be viewed with "php-config" shell script, aside with other compile time options too =D!!! ...<br /><br />in some distributions it comes with the "php-devel" package... but until in this online manual "php-config" is mentioned in pecl extensions documentation (i couldn't find on pecl site), idk if that "php-devel" has something to do with this<br /><br />... however i noticed they are literal strings inside the script, i hope the script itself were built together with php compilation o_O<br /><br />in the previous page "configure options" (link shown above ^), there is an editor note with additional info about it</span></code></div>
  </div>
 </div>
  <div class="note" id="125771">  <div class="votes">
    <div id="Vu125771">
    <a href="/manual/vote-note.php?id=125771&amp;page=configure.about&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125771">
    <a href="/manual/vote-note.php?id=125771&amp;page=configure.about&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125771" title="63% like this...">
    3
    </div>
  </div>
  <a href="#125771" class="name">
  <strong class="user"><em>atesin () gmail ! com</em></strong></a><a class="genanchor" href="#125771"> &para;</a><div class="date" title="2021-02-04 02:38"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125771">
<div class="phpcode"><code><span class="html">please somebody tell me how to display configure options used in php actual binary<br /><br />it was shown in phpinfo() some years before, it was very useful, specially with 'phpize' recompilation and to enable some pecl/pear module :/<br /><br />please tell me also which ctriteria had php guys used to suddenly decided to hide (or obfuscate) this info :/<br /><br />thanks in advance</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=configure.about&amp;repo=en&amp;redirect=https://www.php.net/manual/en/configure.about.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="configure.php">Configure options</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="configure.about.php" title="List of core configure options">List of core configure options</a>
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
