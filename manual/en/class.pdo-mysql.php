<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Pdo\Mysql - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.pdo-mysql.php">
 <link rel="shorturl" href="https://www.php.net/pdo-mysql">
 <link rel="alternate" href="https://www.php.net/pdo-mysql" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.pdo-mysql.connection.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo-mysql.getwarningcount.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.pdo-mysql.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.pdo-mysql.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.pdo-mysql.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.pdo-mysql.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.pdo-mysql.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.pdo-mysql.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.pdo-mysql.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.pdo-mysql.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.pdo-mysql.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.pdo-mysql.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.pdo-mysql.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Pdo\Mysql class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Pdo\Mysql - Manual" />
<meta name="twitter:description" content="The Pdo\Mysql class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Pdo\Mysql - Manual" />
<meta itemprop="description" content="The Pdo\Mysql class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Pdo\Mysql class" />

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
        <a href="pdo-mysql.getwarningcount.php">
          Pdo\Mysql::getWarningCount &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.pdo-mysql.connection.php">
          &laquo; PDO_MYSQL DSN        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='pdo.drivers.php'>PDO Drivers</a></li>      </ul>
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
            <option value='en/class.pdo-mysql.php' selected="selected">English</option>
            <option value='de/class.pdo-mysql.php'>German</option>
            <option value='es/class.pdo-mysql.php'>Spanish</option>
            <option value='fr/class.pdo-mysql.php'>French</option>
            <option value='it/class.pdo-mysql.php'>Italian</option>
            <option value='ja/class.pdo-mysql.php'>Japanese</option>
            <option value='pt_BR/class.pdo-mysql.php'>Brazilian Portuguese</option>
            <option value='ru/class.pdo-mysql.php'>Russian</option>
            <option value='tr/class.pdo-mysql.php'>Turkish</option>
            <option value='uk/class.pdo-mysql.php'>Ukrainian</option>
            <option value='zh/class.pdo-mysql.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.pdo-mysql" class="reference">
 <h1 class="title">The Pdo\Mysql class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 8 &gt;= 8.4.0)</p>

  
  <div class="section" id="pdo-mysql.intro">
   <h2 class="title">Introduction</h2>
   <p class="simpara">
    A <span class="classname"><a href="class.pdo.php" class="classname">PDO</a></span> subclass representing a connection using
    the MySQL PDO driver.
   </p>
   <p class="para">
    This driver supports a dedicated SQL query parser for the MySQL dialect.
    It can handle the following:
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Single and double-quoted literals with both doubling and backslash as escaping mechanisms
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Backtick literals with doubling as escaping mechanism
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Two-dashes, C-style comments, and Hash-comments.
      </span>
     </li>
    </ul>
   </p>
  </div>
  

  <div class="section" id="pdo-mysql.synopsis">
   <h2 class="title">Class synopsis</h2>

   
   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">Pdo\Mysql</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.pdo.php" class="classname">PDO</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-null"><var class="varname">PDO::PARAM_NULL</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-bool"><var class="varname">PDO::PARAM_BOOL</var></a></var><span class="initializer"> = 5</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-int"><var class="varname">PDO::PARAM_INT</var></a></var><span class="initializer"> = 1</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-str"><var class="varname">PDO::PARAM_STR</var></a></var><span class="initializer"> = 2</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-lob"><var class="varname">PDO::PARAM_LOB</var></a></var><span class="initializer"> = 3</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-stmt"><var class="varname">PDO::PARAM_STMT</var></a></var><span class="initializer"> = 4</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-input-output"><var class="varname">PDO::PARAM_INPUT_OUTPUT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-str-natl"><var class="varname">PDO::PARAM_STR_NATL</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-str-char"><var class="varname">PDO::PARAM_STR_CHAR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-alloc"><var class="varname">PDO::PARAM_EVT_ALLOC</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-free"><var class="varname">PDO::PARAM_EVT_FREE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-exec-pre"><var class="varname">PDO::PARAM_EVT_EXEC_PRE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-exec-post"><var class="varname">PDO::PARAM_EVT_EXEC_POST</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-fetch-pre"><var class="varname">PDO::PARAM_EVT_FETCH_PRE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-fetch-post"><var class="varname">PDO::PARAM_EVT_FETCH_POST</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.param-evt-normalize"><var class="varname">PDO::PARAM_EVT_NORMALIZE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-default"><var class="varname">PDO::FETCH_DEFAULT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-lazy"><var class="varname">PDO::FETCH_LAZY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-assoc"><var class="varname">PDO::FETCH_ASSOC</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-num"><var class="varname">PDO::FETCH_NUM</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-both"><var class="varname">PDO::FETCH_BOTH</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-obj"><var class="varname">PDO::FETCH_OBJ</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-bound"><var class="varname">PDO::FETCH_BOUND</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-column"><var class="varname">PDO::FETCH_COLUMN</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-class"><var class="varname">PDO::FETCH_CLASS</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-into"><var class="varname">PDO::FETCH_INTO</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-func"><var class="varname">PDO::FETCH_FUNC</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-group"><var class="varname">PDO::FETCH_GROUP</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-unique"><var class="varname">PDO::FETCH_UNIQUE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-key-pair"><var class="varname">PDO::FETCH_KEY_PAIR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-classtype"><var class="varname">PDO::FETCH_CLASSTYPE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-serialize"><var class="varname">PDO::FETCH_SERIALIZE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-props-late"><var class="varname">PDO::FETCH_PROPS_LATE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-named"><var class="varname">PDO::FETCH_NAMED</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-autocommit"><var class="varname">PDO::ATTR_AUTOCOMMIT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-prefetch"><var class="varname">PDO::ATTR_PREFETCH</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-timeout"><var class="varname">PDO::ATTR_TIMEOUT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-errmode"><var class="varname">PDO::ATTR_ERRMODE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-server-version"><var class="varname">PDO::ATTR_SERVER_VERSION</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-client-version"><var class="varname">PDO::ATTR_CLIENT_VERSION</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-server-info"><var class="varname">PDO::ATTR_SERVER_INFO</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-connection-status"><var class="varname">PDO::ATTR_CONNECTION_STATUS</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-case"><var class="varname">PDO::ATTR_CASE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-cursor-name"><var class="varname">PDO::ATTR_CURSOR_NAME</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-cursor"><var class="varname">PDO::ATTR_CURSOR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-oracle-nulls"><var class="varname">PDO::ATTR_ORACLE_NULLS</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-persistent"><var class="varname">PDO::ATTR_PERSISTENT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-statement-class"><var class="varname">PDO::ATTR_STATEMENT_CLASS</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-fetch-table-names"><var class="varname">PDO::ATTR_FETCH_TABLE_NAMES</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-fetch-catalog-names"><var class="varname">PDO::ATTR_FETCH_CATALOG_NAMES</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-driver-name"><var class="varname">PDO::ATTR_DRIVER_NAME</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches"><var class="varname">PDO::ATTR_STRINGIFY_FETCHES</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-max-column-len"><var class="varname">PDO::ATTR_MAX_COLUMN_LEN</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-emulate-prepares"><var class="varname">PDO::ATTR_EMULATE_PREPARES</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-default-fetch-mode"><var class="varname">PDO::ATTR_DEFAULT_FETCH_MODE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.attr-default-str-param"><var class="varname">PDO::ATTR_DEFAULT_STR_PARAM</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.errmode-silent"><var class="varname">PDO::ERRMODE_SILENT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.errmode-warning"><var class="varname">PDO::ERRMODE_WARNING</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.errmode-exception"><var class="varname">PDO::ERRMODE_EXCEPTION</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.case-natural"><var class="varname">PDO::CASE_NATURAL</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.case-lower"><var class="varname">PDO::CASE_LOWER</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.case-upper"><var class="varname">PDO::CASE_UPPER</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.null-natural"><var class="varname">PDO::NULL_NATURAL</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.null-empty-string"><var class="varname">PDO::NULL_EMPTY_STRING</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.null-to-string"><var class="varname">PDO::NULL_TO_STRING</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.err-none"><var class="varname">PDO::ERR_NONE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-next"><var class="varname">PDO::FETCH_ORI_NEXT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-prior"><var class="varname">PDO::FETCH_ORI_PRIOR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-first"><var class="varname">PDO::FETCH_ORI_FIRST</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-last"><var class="varname">PDO::FETCH_ORI_LAST</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-abs"><var class="varname">PDO::FETCH_ORI_ABS</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.fetch-ori-rel"><var class="varname">PDO::FETCH_ORI_REL</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.cursor-fwdonly"><var class="varname">PDO::CURSOR_FWDONLY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="pdo.constants.php#pdo.constants.cursor-scroll"><var class="varname">PDO::CURSOR_SCROLL</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-use-buffered-query"><var class="varname">ATTR_USE_BUFFERED_QUERY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-local-infile"><var class="varname">ATTR_LOCAL_INFILE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-local-infile-directory"><var class="varname">ATTR_LOCAL_INFILE_DIRECTORY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-init-command"><var class="varname">ATTR_INIT_COMMAND</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-max-buffer-size"><var class="varname">ATTR_MAX_BUFFER_SIZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-read-default-file"><var class="varname">ATTR_READ_DEFAULT_FILE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-read-default-group"><var class="varname">ATTR_READ_DEFAULT_GROUP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-compress"><var class="varname">ATTR_COMPRESS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-direct-query"><var class="varname">ATTR_DIRECT_QUERY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-found-rows"><var class="varname">ATTR_FOUND_ROWS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ignore-space"><var class="varname">ATTR_IGNORE_SPACE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-multi-statements"><var class="varname">ATTR_MULTI_STATEMENTS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-server-public-key"><var class="varname">ATTR_SERVER_PUBLIC_KEY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-key"><var class="varname">ATTR_SSL_KEY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-cert"><var class="varname">ATTR_SSL_CERT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-ca"><var class="varname">ATTR_SSL_CA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-capath"><var class="varname">ATTR_SSL_CAPATH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-cipher"><var class="varname">ATTR_SSL_CIPHER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-verify-server-cert"><var class="varname">ATTR_SSL_VERIFY_SERVER_CERT</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="pdo-mysql.getwarningcount.php" class="methodname">getWarningCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.construct.php" class="methodname">PDO::__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$username</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.begintransaction.php" class="methodname">PDO::beginTransaction</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.commit.php" class="methodname">PDO::commit</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="pdo.connect.php" class="methodname">PDO::connect</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$username</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type">static</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.errorcode.php" class="methodname">PDO::errorCode</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.errorinfo.php" class="methodname">PDO::errorInfo</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.exec.php" class="methodname">PDO::exec</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$statement</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="pdo.getavailabledrivers.php" class="methodname">PDO::getAvailableDrivers</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.intransaction.php" class="methodname">PDO::inTransaction</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.lastinsertid.php" class="methodname">PDO::lastInsertId</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.prepare.php" class="methodname">PDO::prepare</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">PDO::query</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">PDO::query</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = PDO::FETCH_COLUMN</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$colno</code></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">PDO::query</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = PDO::FETCH_CLASS</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$classname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$constructorArgs</code></span><br>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.query.php" class="methodname">PDO::query</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$fetchMode</code><span class="initializer"> = PDO::FETCH_INTO</span></span>, <span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.quote.php" class="methodname">PDO::quote</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = PDO::PARAM_STR</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.rollback.php" class="methodname">PDO::rollBack</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pdo.setattribute.php" class="methodname">PDO::setAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
   

  </div>

  <div class="section" id="pdo-mysql.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="pdo-mysql.constants.attr-use-buffered-query"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-use-buffered-query">Pdo\Mysql::ATTR_USE_BUFFERED_QUERY</a></code></strong></dt>
     <dd>
      <span class="simpara">
       By default all statements are executed in
       <a href="mysqlinfo.concepts.buffering.php" class="link">buffered mode</a>.
       If this attribute is set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on a
       <span class="classname"><strong class="classname">Pdo\Mysql</strong></span> object,
       the MySQL driver will use the unbuffered mode.
      </span>
      <div class="example" id="example-1194"><p><strong>Example #1 Setting MySQL unbuffered mode</strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$pdo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Pdo\Mysql</span><span style="color: #007700">(</span><span style="color: #DD0000">"mysql:host=localhost;dbname=world"</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_user'</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_password'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">MYSQL_ATTR_USE_BUFFERED_QUERY</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$unbufferedResult </span><span style="color: #007700">= </span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Name FROM City"</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$unbufferedResult </span><span style="color: #007700">as </span><span style="color: #0000BB">$row</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'Name'</span><span style="color: #007700">] . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-local-infile"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-local-infile">Pdo\Mysql::ATTR_LOCAL_INFILE</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Enable <code class="literal">LOAD LOCAL INFILE</code>.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-local-infile-directory"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-local-infile-directory">Pdo\Mysql::ATTR_LOCAL_INFILE_DIRECTORY</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Allows restricting LOCAL DATA loading to files located in this
       designated directory.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-init-command"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-init-command">Pdo\Mysql::ATTR_INIT_COMMAND</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Command to execute when connecting to the MySQL server.
       Will automatically be re-executed when reconnecting.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-read-default-file"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-read-default-file">Pdo\Mysql::ATTR_READ_DEFAULT_FILE</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Read options from the named option file instead of from
       <var class="filename">my.cnf</var>.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        This option is not available if mysqlnd is used,
        because mysqlnd does not read the mysql configuration files.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-read-default-group"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-read-default-group">Pdo\Mysql::ATTR_READ_DEFAULT_GROUP</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Read options from the named group from <var class="filename">my.cnf</var> or
       the file specified with
       <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-read-default-file">Pdo\Mysql::ATTR_READ_DEFAULT_FILE</a></code></strong>.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        This option is not available if mysqlnd is used,
        because mysqlnd does not read the mysql configuration files.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-compress"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-compress">Pdo\Mysql::ATTR_COMPRESS</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Enable network communication compression.
      </span>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-direct-query"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-direct-query">Pdo\Mysql::ATTR_DIRECT_QUERY</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Alias of <strong><code><a href="pdo.constants.php#pdo.constants.attr-emulate-prepares">PDO::ATTR_EMULATE_PREPARES</a></code></strong>.
      </span>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-found-rows"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-found-rows">Pdo\Mysql::ATTR_FOUND_ROWS</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Return the number of found (matched) rows,
       not the number of changed rows.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-ignore-space"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ignore-space">Pdo\Mysql::ATTR_IGNORE_SPACE</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Permit spaces after SQL function names.
       Makes all SQL functions names reserved words.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-max-buffer-size"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-max-buffer-size">Pdo\Mysql::ATTR_MAX_BUFFER_SIZE</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Maximum buffer size. Defaults to 1 MiB.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        This constant is not supported when compiled against mysqlnd.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-multi-statements"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-multi-statements">Pdo\Mysql::ATTR_MULTI_STATEMENTS</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Disables multi query execution in both
       <span class="methodname"><a href="pdo.prepare.php" class="methodname">PDO::prepare()</a></span> and
       <span class="methodname"><a href="pdo.query.php" class="methodname">PDO::query()</a></span> when set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-server-public-key"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-server-public-key">Pdo\Mysql::ATTR_SERVER_PUBLIC_KEY</a></code></strong></dt>
     <dd>
      <span class="simpara">
       <abbr>RSA</abbr> public key file used with the SHA-256 based authentication.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-ssl-key"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-key">Pdo\Mysql::ATTR_SSL_KEY</a></code></strong></dt>
     <dd>
      <span class="simpara">
       The file path to the <abbr title="Secure Sockets Layer">SSL</abbr> key.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-ssl-cert"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-cert">Pdo\Mysql::ATTR_SSL_CERT</a></code></strong></dt>
     <dd>
      <span class="simpara">
       The file path to the <abbr title="Secure Sockets Layer">SSL</abbr> certificate.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-ssl-ca"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-ca">Pdo\Mysql::ATTR_SSL_CA</a></code></strong></dt>
     <dd>
      <span class="simpara">
       The file path to the <abbr title="Secure Sockets Layer">SSL</abbr> certificate authority.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-ssl-capath"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-capath">Pdo\Mysql::ATTR_SSL_CAPATH</a></code></strong></dt>
     <dd>
      <span class="simpara">
       The file path to the directory that contains the trusted
       <abbr title="Secure Sockets Layer">SSL</abbr> <abbr title="Certificate Authority">CA</abbr> certificates,
       which are stored in <abbr title="Privacy-Enhanced Mail">PEM</abbr> format.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-ssl-cipher"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-cipher">Pdo\Mysql::ATTR_SSL_CIPHER</a></code></strong></dt>
     <dd>
      <span class="simpara">
       A list of one or more permissible ciphers to use for
       <abbr title="Secure Sockets Layer">SSL</abbr> encryption, in a format understood by OpenSSL.
       For example: <code class="literal">DHE-RSA-AES256-SHA:AES128-SHA</code>
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="pdo-mysql.constants.attr-ssl-verify-server-cert"><strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-verify-server-cert">Pdo\Mysql::ATTR_SSL_VERIFY_SERVER_CERT</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Provides a way to disable verification of the server <abbr title="Secure Sockets Layer">SSL</abbr> certificate.
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        This option is available only with mysqlnd.
       </span>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Can only be used in the <code class="parameter">driver_options</code>
        array when constructing a new database handle.
       </span>
      </p></blockquote>
     </dd>
    
   </dl>
  </div>
 </div>

 




<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="pdo-mysql.getwarningcount.php">Pdo\Mysql::getWarningCount</a> — Returns the number of warnings from the last executed query</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_mysql/pdo-mysql.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.pdo-mysql%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.pdo-mysql&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.pdo-mysql.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pdo.drivers.php">PDO Drivers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ref.pdo-cubrid.php" title="CUBRID PDO Driver">CUBRID PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-dblib.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-dblib.php" title="Pdo\Dblib">Pdo\Dblib</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-firebird.php" title="Firebird PDO Driver">Firebird PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-firebird.php" title="Pdo\Firebird">Pdo\Firebird</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-ibm.php" title="IBM PDO Driver">IBM PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-informix.php" title="Informix PDO Driver">Informix PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-mysql.php" title="MySQL PDO Driver">MySQL PDO Driver</a>
                        </li>
                                                <li class="current">
                            <a href="class.pdo-mysql.php" title="Pdo\Mysql">Pdo\Mysql</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-sqlsrv.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-oci.php" title="Oracle PDO Driver">Oracle PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-odbc.php" title="ODBC and DB2 PDO Driver">ODBC and DB2 PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-odbc.php" title="Pdo\Odbc">Pdo\Odbc</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-pgsql.php" title="PostgreSQL PDO Driver">PostgreSQL PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-pgsql.php" title="Pdo\Pgsql">Pdo\Pgsql</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-sqlite.php" title="SQLite PDO Driver">SQLite PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-sqlite.php" title="Pdo\Sqlite">Pdo\Sqlite</a>
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
