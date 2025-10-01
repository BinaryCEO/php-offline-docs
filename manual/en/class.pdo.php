<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.pdo.php">
 <link rel="shorturl" href="https://www.php.net/pdo">
 <link rel="alternate" href="https://www.php.net/pdo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.lobs.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.begintransaction.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.pdo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.pdo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.pdo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.pdo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.pdo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.pdo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.pdo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.pdo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.pdo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.pdo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.pdo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The PDO class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO - Manual" />
<meta name="twitter:description" content="The PDO class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO - Manual" />
<meta itemprop="description" content="The PDO class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The PDO class" />

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
        <a href="pdo.begintransaction.php">
          PDO::beginTransaction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.lobs.php">
          &laquo; Large Objects (LOBs)        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      </ul>
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
            <option value='en/class.pdo.php' selected="selected">English</option>
            <option value='de/class.pdo.php'>German</option>
            <option value='es/class.pdo.php'>Spanish</option>
            <option value='fr/class.pdo.php'>French</option>
            <option value='it/class.pdo.php'>Italian</option>
            <option value='ja/class.pdo.php'>Japanese</option>
            <option value='pt_BR/class.pdo.php'>Brazilian Portuguese</option>
            <option value='ru/class.pdo.php'>Russian</option>
            <option value='tr/class.pdo.php'>Turkish</option>
            <option value='uk/class.pdo.php'>Ukrainian</option>
            <option value='zh/class.pdo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.pdo" class="reference">
 <h1 class="title">The PDO class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p>
 

  <div class="section" id="pdo.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents a connection between PHP and a database server.
   </p>
  </div>

 
  <div class="section" id="pdo.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">PDO</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-null"><var class="varname">PARAM_NULL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-bool"><var class="varname">PARAM_BOOL</var></a></var><span class="initializer"> = 5</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-int"><var class="varname">PARAM_INT</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-str"><var class="varname">PARAM_STR</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-lob"><var class="varname">PARAM_LOB</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-stmt"><var class="varname">PARAM_STMT</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-input-output"><var class="varname">PARAM_INPUT_OUTPUT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-str-natl"><var class="varname">PARAM_STR_NATL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-str-char"><var class="varname">PARAM_STR_CHAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-alloc"><var class="varname">PARAM_EVT_ALLOC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-free"><var class="varname">PARAM_EVT_FREE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-exec-pre"><var class="varname">PARAM_EVT_EXEC_PRE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-exec-post"><var class="varname">PARAM_EVT_EXEC_POST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-fetch-pre"><var class="varname">PARAM_EVT_FETCH_PRE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-fetch-post"><var class="varname">PARAM_EVT_FETCH_POST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-normalize"><var class="varname">PARAM_EVT_NORMALIZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-default"><var class="varname">FETCH_DEFAULT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-lazy"><var class="varname">FETCH_LAZY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-assoc"><var class="varname">FETCH_ASSOC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-num"><var class="varname">FETCH_NUM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-both"><var class="varname">FETCH_BOTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-obj"><var class="varname">FETCH_OBJ</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-bound"><var class="varname">FETCH_BOUND</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-column"><var class="varname">FETCH_COLUMN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-class"><var class="varname">FETCH_CLASS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-into"><var class="varname">FETCH_INTO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-func"><var class="varname">FETCH_FUNC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-group"><var class="varname">FETCH_GROUP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-unique"><var class="varname">FETCH_UNIQUE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-key-pair"><var class="varname">FETCH_KEY_PAIR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-classtype"><var class="varname">FETCH_CLASSTYPE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-serialize"><var class="varname">FETCH_SERIALIZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-props-late"><var class="varname">FETCH_PROPS_LATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-named"><var class="varname">FETCH_NAMED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-autocommit"><var class="varname">ATTR_AUTOCOMMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-prefetch"><var class="varname">ATTR_PREFETCH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-timeout"><var class="varname">ATTR_TIMEOUT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-errmode"><var class="varname">ATTR_ERRMODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-server-version"><var class="varname">ATTR_SERVER_VERSION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-client-version"><var class="varname">ATTR_CLIENT_VERSION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-server-info"><var class="varname">ATTR_SERVER_INFO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-connection-status"><var class="varname">ATTR_CONNECTION_STATUS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-case"><var class="varname">ATTR_CASE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-cursor-name"><var class="varname">ATTR_CURSOR_NAME</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-cursor"><var class="varname">ATTR_CURSOR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-oracle-nulls"><var class="varname">ATTR_ORACLE_NULLS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-persistent"><var class="varname">ATTR_PERSISTENT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-statement-class"><var class="varname">ATTR_STATEMENT_CLASS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-fetch-table-names"><var class="varname">ATTR_FETCH_TABLE_NAMES</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-fetch-catalog-names"><var class="varname">ATTR_FETCH_CATALOG_NAMES</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-driver-name"><var class="varname">ATTR_DRIVER_NAME</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches"><var class="varname">ATTR_STRINGIFY_FETCHES</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-max-column-len"><var class="varname">ATTR_MAX_COLUMN_LEN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-emulate-prepares"><var class="varname">ATTR_EMULATE_PREPARES</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-default-fetch-mode"><var class="varname">ATTR_DEFAULT_FETCH_MODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-default-str-param"><var class="varname">ATTR_DEFAULT_STR_PARAM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.errmode-silent"><var class="varname">ERRMODE_SILENT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.errmode-warning"><var class="varname">ERRMODE_WARNING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.errmode-exception"><var class="varname">ERRMODE_EXCEPTION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.case-natural"><var class="varname">CASE_NATURAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.case-lower"><var class="varname">CASE_LOWER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.case-upper"><var class="varname">CASE_UPPER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.null-natural"><var class="varname">NULL_NATURAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.null-empty-string"><var class="varname">NULL_EMPTY_STRING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.null-to-string"><var class="varname">NULL_TO_STRING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.err-none"><var class="varname">ERR_NONE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-next"><var class="varname">FETCH_ORI_NEXT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-prior"><var class="varname">FETCH_ORI_PRIOR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-first"><var class="varname">FETCH_ORI_FIRST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-last"><var class="varname">FETCH_ORI_LAST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-abs"><var class="varname">FETCH_ORI_ABS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-rel"><var class="varname">FETCH_ORI_REL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.cursor-fwdonly"><var class="varname">CURSOR_FWDONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.cursor-scroll"><var class="varname">CURSOR_SCROLL</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="pdo.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$username</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.begintransaction.php" class="methodname">beginTransaction</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.commit.php" class="methodname">commit</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="pdo.connect.php" class="methodname">connect</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$username</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type">static</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.errorcode.php" class="methodname">errorCode</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.errorinfo.php" class="methodname">errorInfo</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.exec.php" class="methodname">exec</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$statement</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.getattribute.php" class="methodname">getAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="pdo.getavailabledrivers.php" class="methodname">getAvailableDrivers</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.intransaction.php" class="methodname">inTransaction</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.lastinsertid.php" class="methodname">lastInsertId</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.prepare.php" class="methodname">prepare</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">query</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">query</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = PDO::FETCH_COLUMN</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$colno</code></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">query</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = PDO::FETCH_CLASS</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$classname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$constructorArgs</code></span><br>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">query</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = PDO::FETCH_INTO</span></span>, <span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.quote.php" class="methodname">quote</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = PDO::PARAM_STR</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.rollback.php" class="methodname">rollBack</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.setattribute.php" class="methodname">setAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
  </div>

  <div class="section" id="pdo.changelog">
   <h2 class="title">Changelog</h2>
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.4.0</td>
       <td>
        The class constants are now typed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>

 </div>
 
 














































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="pdo.begintransaction.php">PDO::beginTransaction</a> — Initiates a transaction</li><li><a href="pdo.commit.php">PDO::commit</a> — Commits a transaction</li><li><a href="pdo.connect.php">PDO::connect</a> — Connect to a database and return a PDO subclass for drivers that support it</li><li><a href="pdo.construct.php">PDO::__construct</a> — Creates a PDO instance representing a connection to a database</li><li><a href="pdo.errorcode.php">PDO::errorCode</a> — Fetch the SQLSTATE associated with the last operation on the database handle</li><li><a href="pdo.errorinfo.php">PDO::errorInfo</a> — Fetch extended error information associated with the last operation on the database handle</li><li><a href="pdo.exec.php">PDO::exec</a> — Execute an SQL statement and return the number of affected rows</li><li><a href="pdo.getattribute.php">PDO::getAttribute</a> — Retrieve a database connection attribute</li><li><a href="pdo.getavailabledrivers.php">PDO::getAvailableDrivers</a> — Return an array of available PDO drivers</li><li><a href="pdo.intransaction.php">PDO::inTransaction</a> — Checks if inside a transaction</li><li><a href="pdo.lastinsertid.php">PDO::lastInsertId</a> — Returns the ID of the last inserted row or sequence value</li><li><a href="pdo.prepare.php">PDO::prepare</a> — Prepares a statement for execution and returns a statement object</li><li><a href="pdo.query.php">PDO::query</a> — Prepares and executes an SQL statement without placeholders</li><li><a href="pdo.quote.php">PDO::quote</a> — Quotes a string for use in a query</li><li><a href="pdo.rollback.php">PDO::rollBack</a> — Rolls back a transaction</li><li><a href="pdo.setattribute.php">PDO::setAttribute</a> — Set an attribute</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdo.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.pdo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.pdo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.pdo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89019">  <div class="votes">
    <div id="Vu89019">
    <a href="/manual/vote-note.php?id=89019&amp;page=class.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89019">
    <a href="/manual/vote-note.php?id=89019&amp;page=class.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89019" title="56% like this...">
    75
    </div>
  </div>
  <a href="#89019" class="name">
  <strong class="user"><em>Megaloman</em></strong></a><a class="genanchor" href="#89019"> &para;</a><div class="date" title="2009-02-18 07:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89019">
<div class="phpcode"><code><span class="html">"And storing username/password inside class is not a very good idea for production code."<br /><br />Good idea is to store database connection settings in *.ini files but you have to restrict access to them. For example this way:<br /><br />my_setting.ini:<br />[database]<br />driver = mysql<br />host = localhost<br />;port = 3306<br />schema = db_schema<br />username = user<br />password = secret<br /><br />Database connection:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyPDO </span><span class="keyword">extends </span><span class="default">PDO<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$file </span><span class="keyword">= </span><span class="string">'my_setting.ini'</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">$settings </span><span class="keyword">= </span><span class="default">parse_ini_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">)) throw new </span><span class="default">exception</span><span class="keyword">(</span><span class="string">'Unable to open ' </span><span class="keyword">. </span><span class="default">$file </span><span class="keyword">. </span><span class="string">'.'</span><span class="keyword">);<br />        <br />        </span><span class="default">$dns </span><span class="keyword">= </span><span class="default">$settings</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'driver'</span><span class="keyword">] .<br />        </span><span class="string">':host=' </span><span class="keyword">. </span><span class="default">$settings</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'host'</span><span class="keyword">] .<br />        ((!empty(</span><span class="default">$settings</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'port'</span><span class="keyword">])) ? (</span><span class="string">';port=' </span><span class="keyword">. </span><span class="default">$settings</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'port'</span><span class="keyword">]) : </span><span class="string">''</span><span class="keyword">) .<br />        </span><span class="string">';dbname=' </span><span class="keyword">. </span><span class="default">$settings</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'schema'</span><span class="keyword">];<br />        <br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$dns</span><span class="keyword">, </span><span class="default">$settings</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'username'</span><span class="keyword">], </span><span class="default">$settings</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'password'</span><span class="keyword">]);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Database connection parameters are accessible via human readable ini file for those who screams even if they see one PHP/HTML/any_other command.</span></code></div>
  </div>
 </div>
  <div class="note" id="85256">  <div class="votes">
    <div id="Vu85256">
    <a href="/manual/vote-note.php?id=85256&amp;page=class.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85256">
    <a href="/manual/vote-note.php?id=85256&amp;page=class.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85256" title="53% like this...">
    11
    </div>
  </div>
  <a href="#85256" class="name">
  <strong class="user"><em>anrdaemon at freemail dot ru</em></strong></a><a class="genanchor" href="#85256"> &para;</a><div class="date" title="2008-08-22 01:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85256">
<div class="phpcode"><code><span class="html">Keep in mind, you MUST NOT use 'root' user in your applications, unless your application designed to do a database maintenance.<br /><br />And storing username/password inside class is not a very good idea for production code. You would need to edit the actual working code to change settings, which is bad.</span></code></div>
  </div>
 </div>
  <div class="note" id="106125">  <div class="votes">
    <div id="Vu106125">
    <a href="/manual/vote-note.php?id=106125&amp;page=class.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106125">
    <a href="/manual/vote-note.php?id=106125&amp;page=class.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106125" title="52% like this...">
    10
    </div>
  </div>
  <a href="#106125" class="name">
  <strong class="user"><em>williambarry007 at gmail dot com</em></strong></a><a class="genanchor" href="#106125"> &para;</a><div class="date" title="2011-10-12 01:10"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106125">
<div class="phpcode"><code><span class="html">PDO and Dependency Injection<br /><br />Dependency injection is good for testing.  But for anyone wanting various data mapper objects to have a database connection, dependency injection can make other model code very messy because database objects have to be instantiated all over the place and given to the data mapper objects.<br /><br />The code below is a good way to maintain dependency injection while keeping clean and minimal model code.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">DataMapper<br /></span><span class="keyword">{<br />    public static </span><span class="default">$db</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">init</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">)<br />    {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$db </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">VendorMapper </span><span class="keyword">extends </span><span class="default">DataMapper<br /></span><span class="keyword">{<br />    public static function </span><span class="default">add</span><span class="keyword">(</span><span class="default">$vendor</span><span class="keyword">)<br />    {<br />        </span><span class="default">$st </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(<br />            </span><span class="string">"insert into vendors set<br />            first_name = :first_name,<br />            last_name = :last_name"<br />        </span><span class="keyword">);<br />        </span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(<br />            </span><span class="string">':first_name' </span><span class="keyword">=&gt; </span><span class="default">$vendor</span><span class="keyword">-&gt;</span><span class="default">first_name</span><span class="keyword">,<br />            </span><span class="string">':last_name' </span><span class="keyword">=&gt; </span><span class="default">$vendor</span><span class="keyword">-&gt;</span><span class="default">last_name<br />        </span><span class="keyword">));<br />    }<br />}<br /><br /></span><span class="comment">// In your bootstrap<br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(...);<br /></span><span class="default">DataMapper</span><span class="keyword">::</span><span class="default">init</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">);<br /><br /></span><span class="comment">// In your model logic<br /></span><span class="default">$vendor </span><span class="keyword">= new </span><span class="default">Vendor</span><span class="keyword">(</span><span class="string">'John'</span><span class="keyword">, </span><span class="string">'Doe'</span><span class="keyword">);<br /></span><span class="default">VendorMapper</span><span class="keyword">::</span><span class="default">add</span><span class="keyword">(</span><span class="default">$vendor</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121996">  <div class="votes">
    <div id="Vu121996">
    <a href="/manual/vote-note.php?id=121996&amp;page=class.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121996">
    <a href="/manual/vote-note.php?id=121996&amp;page=class.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121996" title="53% like this...">
    4
    </div>
  </div>
  <a href="#121996" class="name">
  <strong class="user"><em>sinri at everstray dot com</em></strong></a><a class="genanchor" href="#121996"> &para;</a><div class="date" title="2017-12-07 03:38"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121996">
<div class="phpcode"><code><span class="html">For some Database Environment, such as Aliyun DRDS (Distributed Relational Database Service), cannot process preparing for SQL. <br />For such cases, the option `\PDO::ATTR_EMULATE_PREPARES` should be set to true. If you always got reports about "Failed to prepare SQL" while this option were set to false, you might try to turn on this option to emulate prepares for SQL.</span></code></div>
  </div>
 </div>
  <div class="note" id="112418">  <div class="votes">
    <div id="Vu112418">
    <a href="/manual/vote-note.php?id=112418&amp;page=class.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112418">
    <a href="/manual/vote-note.php?id=112418&amp;page=class.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112418" title="53% like this...">
    7
    </div>
  </div>
  <a href="#112418" class="name">
  <strong class="user"><em>thz at plista dot com</em></strong></a><a class="genanchor" href="#112418"> &para;</a><div class="date" title="2013-06-14 01:25"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112418">
<div class="phpcode"><code><span class="html">Starting with PHP 5.4 you are unable to use persistent connections when you have your own database class derived from the native PDO class. If your code uses this combination, you will encounter segmentation faults during the cleanup of the PHP process.<br />You can still use _either_ a derived PDO class _or_ persistent connections.<br /><br />For more information, please see this bug report: <a href="https://bugs.php.net/bug.php?id=63176" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=63176</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121578">  <div class="votes">
    <div id="Vu121578">
    <a href="/manual/vote-note.php?id=121578&amp;page=class.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121578">
    <a href="/manual/vote-note.php?id=121578&amp;page=class.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121578" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121578" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#121578"> &para;</a><div class="date" title="2017-08-30 08:05"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121578">
<div class="phpcode"><code><span class="html">I personnaly create a new instance of PDO like this : <br /><br />$dbDatas = parse_ini_file( DB_FILE );<br /> $dbOptions = [<br /> \PDO::ATTR_DEFAULT_FECTH_MODE =&gt; \PDO::FETCH_OBJ,<br /> \PDO::ATTR_ERRMODE =&gt; \PDO::ERRMODE_EXCEPTION<br /> ];<br /><br /> $dsn = sprintf( 'mysql:dbname=%s;host=%s', $dbDatas['dbname'],<br />$dbDatas['host'] );<br /> <br /> $this-&gt;cn = new \PDO( $dsn, $dbDatas['user'], $dbDatas['password'],<br />$dbOptions );<br /> $this-&gt;cn-&gt;exec( 'SET CHARACTER SET UTF8' );</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.pdo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.pdo.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pdo.php">PDO</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pdo.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="pdo.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pdo.connections.php" title="Connections and Connection management">Connections and Connection management</a>
                        </li>
                                                <li class="">
                            <a href="pdo.transactions.php" title="Transactions and auto-&#8203;commit">Transactions and auto-&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="pdo.prepared-statements.php" title="Prepared statements and stored procedures">Prepared statements and stored procedures</a>
                        </li>
                                                <li class="">
                            <a href="pdo.error-handling.php" title="Errors and error handling">Errors and error handling</a>
                        </li>
                                                <li class="">
                            <a href="pdo.lobs.php" title="Large Objects (LOBs)">Large Objects (LOBs)</a>
                        </li>
                                                <li class="current">
                            <a href="class.pdo.php" title="PDO">PDO</a>
                        </li>
                                                <li class="">
                            <a href="class.pdostatement.php" title="PDOStatement">PDOStatement</a>
                        </li>
                                                <li class="">
                            <a href="class.pdorow.php" title="PDORow">PDORow</a>
                        </li>
                                                <li class="">
                            <a href="class.pdoexception.php" title="PDOException">PDOException</a>
                        </li>
                                                <li class="">
                            <a href="pdo.drivers.php" title="PDO Drivers">PDO Drivers</a>
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
