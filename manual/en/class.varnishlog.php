<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: VarnishLog - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.varnishlog.php">
 <link rel="shorturl" href="https://www.php.net/varnishlog">
 <link rel="alternate" href="https://www.php.net/varnishlog" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.varnish.php">
 <link rel="prev" href="https://www.php.net/manual/en/varnishstat.getsnapshot.php">
 <link rel="next" href="https://www.php.net/manual/en/varnishlog.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.varnishlog.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.varnishlog.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.varnishlog.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.varnishlog.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.varnishlog.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.varnishlog.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.varnishlog.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.varnishlog.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.varnishlog.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.varnishlog.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.varnishlog.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The VarnishLog class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: VarnishLog - Manual" />
<meta name="twitter:description" content="The VarnishLog class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: VarnishLog - Manual" />
<meta itemprop="description" content="The VarnishLog class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The VarnishLog class" />

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
        <a href="varnishlog.construct.php">
          VarnishLog::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="varnishstat.getsnapshot.php">
          &laquo; VarnishStat::getSnapshot        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.varnish.php'>Varnish</a></li>      </ul>
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
            <option value='en/class.varnishlog.php' selected="selected">English</option>
            <option value='de/class.varnishlog.php'>German</option>
            <option value='es/class.varnishlog.php'>Spanish</option>
            <option value='fr/class.varnishlog.php'>French</option>
            <option value='it/class.varnishlog.php'>Italian</option>
            <option value='ja/class.varnishlog.php'>Japanese</option>
            <option value='pt_BR/class.varnishlog.php'>Brazilian Portuguese</option>
            <option value='ru/class.varnishlog.php'>Russian</option>
            <option value='tr/class.varnishlog.php'>Turkish</option>
            <option value='uk/class.varnishlog.php'>Ukrainian</option>
            <option value='zh/class.varnishlog.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.varnishlog" class="reference">

 <h1 class="title">The VarnishLog class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL varnish &gt;= 0.6)</p>


  <div class="section" id="varnishlog.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="varnishlog.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">VarnishLog</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-debug"><var class="varname">TAG_Debug</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-error"><var class="varname">TAG_Error</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-cli"><var class="varname">TAG_CLI</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-statsess"><var class="varname">TAG_StatSess</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-reqend"><var class="varname">TAG_ReqEnd</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-sessionopen"><var class="varname">TAG_SessionOpen</var></a></var><span class="initializer"> = 5</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-sessionclose"><var class="varname">TAG_SessionClose</var></a></var><span class="initializer"> = 6</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-backendopen"><var class="varname">TAG_BackendOpen</var></a></var><span class="initializer"> = 7</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-backendxid"><var class="varname">TAG_BackendXID</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-backendreuse"><var class="varname">TAG_BackendReuse</var></a></var><span class="initializer"> = 9</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-backendclose"><var class="varname">TAG_BackendClose</var></a></var><span class="initializer"> = 10</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-httpgarbage"><var class="varname">TAG_HttpGarbage</var></a></var><span class="initializer"> = 11</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-backend"><var class="varname">TAG_Backend</var></a></var><span class="initializer"> = 12</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-length"><var class="varname">TAG_Length</var></a></var><span class="initializer"> = 13</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-fetcherror"><var class="varname">TAG_FetchError</var></a></var><span class="initializer"> = 14</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-rxrequest"><var class="varname">TAG_RxRequest</var></a></var><span class="initializer"> = 15</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-rxresponse"><var class="varname">TAG_RxResponse</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-rxstatus"><var class="varname">TAG_RxStatus</var></a></var><span class="initializer"> = 17</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-rxurl"><var class="varname">TAG_RxURL</var></a></var><span class="initializer"> = 18</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-rxprotocol"><var class="varname">TAG_RxProtocol</var></a></var><span class="initializer"> = 19</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-rxheader"><var class="varname">TAG_RxHeader</var></a></var><span class="initializer"> = 20</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-txrequest"><var class="varname">TAG_TxRequest</var></a></var><span class="initializer"> = 21</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-txresponse"><var class="varname">TAG_TxResponse</var></a></var><span class="initializer"> = 22</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-txstatus"><var class="varname">TAG_TxStatus</var></a></var><span class="initializer"> = 23</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-txurl"><var class="varname">TAG_TxURL</var></a></var><span class="initializer"> = 24</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-txprotocol"><var class="varname">TAG_TxProtocol</var></a></var><span class="initializer"> = 25</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-txheader"><var class="varname">TAG_TxHeader</var></a></var><span class="initializer"> = 26</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-objrequest"><var class="varname">TAG_ObjRequest</var></a></var><span class="initializer"> = 27</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-objresponse"><var class="varname">TAG_ObjResponse</var></a></var><span class="initializer"> = 28</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-objstatus"><var class="varname">TAG_ObjStatus</var></a></var><span class="initializer"> = 29</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-objurl"><var class="varname">TAG_ObjURL</var></a></var><span class="initializer"> = 30</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-objprotocol"><var class="varname">TAG_ObjProtocol</var></a></var><span class="initializer"> = 31</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-objheader"><var class="varname">TAG_ObjHeader</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-lostheader"><var class="varname">TAG_LostHeader</var></a></var><span class="initializer"> = 33</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-ttl"><var class="varname">TAG_TTL</var></a></var><span class="initializer"> = 34</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-fetch-body"><var class="varname">TAG_Fetch_Body</var></a></var><span class="initializer"> = 35</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-acl"><var class="varname">TAG_VCL_acl</var></a></var><span class="initializer"> = 36</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-call"><var class="varname">TAG_VCL_call</var></a></var><span class="initializer"> = 37</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-trace"><var class="varname">TAG_VCL_trace</var></a></var><span class="initializer"> = 38</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-return"><var class="varname">TAG_VCL_return</var></a></var><span class="initializer"> = 39</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-error"><var class="varname">TAG_VCL_error</var></a></var><span class="initializer"> = 40</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-reqstart"><var class="varname">TAG_ReqStart</var></a></var><span class="initializer"> = 41</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-hit"><var class="varname">TAG_Hit</var></a></var><span class="initializer"> = 42</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-hitpass"><var class="varname">TAG_HitPass</var></a></var><span class="initializer"> = 43</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-expban"><var class="varname">TAG_ExpBan</var></a></var><span class="initializer"> = 44</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-expkill"><var class="varname">TAG_ExpKill</var></a></var><span class="initializer"> = 45</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-workthread"><var class="varname">TAG_WorkThread</var></a></var><span class="initializer"> = 46</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-esi-xmlerror"><var class="varname">TAG_ESI_xmlerror</var></a></var><span class="initializer"> = 47</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-hash"><var class="varname">TAG_Hash</var></a></var><span class="initializer"> = 48</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-backend-health"><var class="varname">TAG_Backend_health</var></a></var><span class="initializer"> = 49</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-log"><var class="varname">TAG_VCL_Log</var></a></var><span class="initializer"> = 50</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.varnishlog.php#varnishlog.constants.tag-gzip"><var class="varname">TAG_Gzip</var></a></var><span class="initializer"> = 51</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="varnishlog.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$args</code><span class="initializer"> = ?</span></span>)</div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="varnishlog.getline.php" class="methodname">getLine</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="varnishlog.gettagname.php" class="methodname">getTagName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>


  <div class="section" id="varnishlog.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="varnishlog.constants.tag-debug"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-debug">VarnishLog::TAG_Debug</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-error"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-error">VarnishLog::TAG_Error</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-cli"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-cli">VarnishLog::TAG_CLI</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-statsess"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-statsess">VarnishLog::TAG_StatSess</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-reqend"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-reqend">VarnishLog::TAG_ReqEnd</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-sessionopen"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-sessionopen">VarnishLog::TAG_SessionOpen</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-sessionclose"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-sessionclose">VarnishLog::TAG_SessionClose</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-backendopen"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-backendopen">VarnishLog::TAG_BackendOpen</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-backendxid"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-backendxid">VarnishLog::TAG_BackendXID</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-backendreuse"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-backendreuse">VarnishLog::TAG_BackendReuse</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-backendclose"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-backendclose">VarnishLog::TAG_BackendClose</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-httpgarbage"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-httpgarbage">VarnishLog::TAG_HttpGarbage</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-backend"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-backend">VarnishLog::TAG_Backend</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-length"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-length">VarnishLog::TAG_Length</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-fetcherror"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-fetcherror">VarnishLog::TAG_FetchError</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-rxrequest"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-rxrequest">VarnishLog::TAG_RxRequest</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-rxresponse"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-rxresponse">VarnishLog::TAG_RxResponse</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-rxstatus"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-rxstatus">VarnishLog::TAG_RxStatus</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-rxurl"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-rxurl">VarnishLog::TAG_RxURL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-rxprotocol"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-rxprotocol">VarnishLog::TAG_RxProtocol</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-rxheader"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-rxheader">VarnishLog::TAG_RxHeader</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-txrequest"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-txrequest">VarnishLog::TAG_TxRequest</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-txresponse"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-txresponse">VarnishLog::TAG_TxResponse</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-txstatus"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-txstatus">VarnishLog::TAG_TxStatus</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-txurl"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-txurl">VarnishLog::TAG_TxURL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-txprotocol"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-txprotocol">VarnishLog::TAG_TxProtocol</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-txheader"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-txheader">VarnishLog::TAG_TxHeader</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-objrequest"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-objrequest">VarnishLog::TAG_ObjRequest</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-objresponse"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-objresponse">VarnishLog::TAG_ObjResponse</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-objstatus"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-objstatus">VarnishLog::TAG_ObjStatus</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-objurl"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-objurl">VarnishLog::TAG_ObjURL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-objprotocol"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-objprotocol">VarnishLog::TAG_ObjProtocol</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-objheader"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-objheader">VarnishLog::TAG_ObjHeader</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-lostheader"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-lostheader">VarnishLog::TAG_LostHeader</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-ttl"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-ttl">VarnishLog::TAG_TTL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-fetch-body"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-fetch-body">VarnishLog::TAG_Fetch_Body</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-vcl-acl"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-acl">VarnishLog::TAG_VCL_acl</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-vcl-call"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-call">VarnishLog::TAG_VCL_call</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-vcl-trace"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-trace">VarnishLog::TAG_VCL_trace</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-vcl-return"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-return">VarnishLog::TAG_VCL_return</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-vcl-error"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-error">VarnishLog::TAG_VCL_error</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-reqstart"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-reqstart">VarnishLog::TAG_ReqStart</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-hit"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-hit">VarnishLog::TAG_Hit</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-hitpass"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-hitpass">VarnishLog::TAG_HitPass</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-expban"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-expban">VarnishLog::TAG_ExpBan</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-expkill"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-expkill">VarnishLog::TAG_ExpKill</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-workthread"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-workthread">VarnishLog::TAG_WorkThread</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-esi-xmlerror"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-esi-xmlerror">VarnishLog::TAG_ESI_xmlerror</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-hash"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-hash">VarnishLog::TAG_Hash</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-backend-health"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-backend-health">VarnishLog::TAG_Backend_health</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-vcl-log"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-vcl-log">VarnishLog::TAG_VCL_Log</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="varnishlog.constants.tag-gzip"><strong><code><a href="class.varnishlog.php#varnishlog.constants.tag-gzip">VarnishLog::TAG_Gzip</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

   </dl>
  </div>



 </div>

 





















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="varnishlog.construct.php">VarnishLog::__construct</a> — Varnishlog constructor</li><li><a href="varnishlog.getline.php">VarnishLog::getLine</a> — Get next log line</li><li><a href="varnishlog.gettagname.php">VarnishLog::getTagName</a> — Get the log tag string representation by its index</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/varnish/varnishlog.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.varnishlog%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.varnishlog&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.varnishlog.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.varnish.php">Varnish</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.varnish.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="varnish.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="varnish.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="varnish.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.varnishadmin.php" title="VarnishAdmin">VarnishAdmin</a>
                        </li>
                                                <li class="">
                            <a href="class.varnishstat.php" title="VarnishStat">VarnishStat</a>
                        </li>
                                                <li class="current">
                            <a href="class.varnishlog.php" title="VarnishLog">VarnishLog</a>
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
