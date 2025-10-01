<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Gender\Gender - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.gender.php">
 <link rel="shorturl" href="https://www.php.net/gender">
 <link rel="alternate" href="https://www.php.net/gender" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.gender.php">
 <link rel="prev" href="https://www.php.net/manual/en/gender.example.admin.php">
 <link rel="next" href="https://www.php.net/manual/en/gender-gender.connect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.gender.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.gender.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.gender.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.gender.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.gender.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.gender.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.gender.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.gender.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.gender.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.gender.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.gender.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Gender\Gender class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Gender\Gender - Manual" />
<meta name="twitter:description" content="The Gender\Gender class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Gender\Gender - Manual" />
<meta itemprop="description" content="The Gender\Gender class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Gender\Gender class" />

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
        <a href="gender-gender.connect.php">
          Gender\Gender::connect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gender.example.admin.php">
          &laquo; Usage example.        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.gender.php'>Gender</a></li>      </ul>
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
            <option value='en/class.gender.php' selected="selected">English</option>
            <option value='de/class.gender.php'>German</option>
            <option value='es/class.gender.php'>Spanish</option>
            <option value='fr/class.gender.php'>French</option>
            <option value='it/class.gender.php'>Italian</option>
            <option value='ja/class.gender.php'>Japanese</option>
            <option value='pt_BR/class.gender.php'>Brazilian Portuguese</option>
            <option value='ru/class.gender.php'>Russian</option>
            <option value='tr/class.gender.php'>Turkish</option>
            <option value='uk/class.gender.php'>Ukrainian</option>
            <option value='zh/class.gender.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.gender" class="reference">

 <h1 class="title">The Gender\Gender class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL gender &gt;= 0.6.0)</p>


  <div class="section" id="gender.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="gender.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">Gender\Gender</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.is-female"><var class="varname">IS_FEMALE</var></a></var><span class="initializer"> = 70</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.is-mostly-female"><var class="varname">IS_MOSTLY_FEMALE</var></a></var><span class="initializer"> = 102</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.is-male"><var class="varname">IS_MALE</var></a></var><span class="initializer"> = 77</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.is-mostly-male"><var class="varname">IS_MOSTLY_MALE</var></a></var><span class="initializer"> = 109</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.is-unisex-name"><var class="varname">IS_UNISEX_NAME</var></a></var><span class="initializer"> = 63</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.is-a-couple"><var class="varname">IS_A_COUPLE</var></a></var><span class="initializer"> = 67</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.name-not-found"><var class="varname">NAME_NOT_FOUND</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.error-in-name"><var class="varname">ERROR_IN_NAME</var></a></var><span class="initializer"> = 69</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.any-country"><var class="varname">ANY_COUNTRY</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.britain"><var class="varname">BRITAIN</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.ireland"><var class="varname">IRELAND</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.usa"><var class="varname">USA</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.spain"><var class="varname">SPAIN</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.portugal"><var class="varname">PORTUGAL</var></a></var><span class="initializer"> = 5</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.italy"><var class="varname">ITALY</var></a></var><span class="initializer"> = 6</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.malta"><var class="varname">MALTA</var></a></var><span class="initializer"> = 7</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.france"><var class="varname">FRANCE</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.belgium"><var class="varname">BELGIUM</var></a></var><span class="initializer"> = 9</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.luxembourg"><var class="varname">LUXEMBOURG</var></a></var><span class="initializer"> = 10</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.netherlands"><var class="varname">NETHERLANDS</var></a></var><span class="initializer"> = 11</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.germany"><var class="varname">GERMANY</var></a></var><span class="initializer"> = 12</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.east-frisia"><var class="varname">EAST_FRISIA</var></a></var><span class="initializer"> = 13</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.austria"><var class="varname">AUSTRIA</var></a></var><span class="initializer"> = 14</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.swiss"><var class="varname">SWISS</var></a></var><span class="initializer"> = 15</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.iceland"><var class="varname">ICELAND</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.denmark"><var class="varname">DENMARK</var></a></var><span class="initializer"> = 17</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.norway"><var class="varname">NORWAY</var></a></var><span class="initializer"> = 18</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.sweden"><var class="varname">SWEDEN</var></a></var><span class="initializer"> = 19</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.finland"><var class="varname">FINLAND</var></a></var><span class="initializer"> = 20</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.estonia"><var class="varname">ESTONIA</var></a></var><span class="initializer"> = 21</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.latvia"><var class="varname">LATVIA</var></a></var><span class="initializer"> = 22</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.lithuania"><var class="varname">LITHUANIA</var></a></var><span class="initializer"> = 23</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.poland"><var class="varname">POLAND</var></a></var><span class="initializer"> = 24</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.czech-rep"><var class="varname">CZECH_REP</var></a></var><span class="initializer"> = 25</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.slovakia"><var class="varname">SLOVAKIA</var></a></var><span class="initializer"> = 26</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.hungary"><var class="varname">HUNGARY</var></a></var><span class="initializer"> = 27</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.romania"><var class="varname">ROMANIA</var></a></var><span class="initializer"> = 28</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.bulgaria"><var class="varname">BULGARIA</var></a></var><span class="initializer"> = 29</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.bosnia"><var class="varname">BOSNIA</var></a></var><span class="initializer"> = 30</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.croatia"><var class="varname">CROATIA</var></a></var><span class="initializer"> = 31</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.kosovo"><var class="varname">KOSOVO</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.macedonia"><var class="varname">MACEDONIA</var></a></var><span class="initializer"> = 33</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.montenegro"><var class="varname">MONTENEGRO</var></a></var><span class="initializer"> = 34</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.serbia"><var class="varname">SERBIA</var></a></var><span class="initializer"> = 35</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.slovenia"><var class="varname">SLOVENIA</var></a></var><span class="initializer"> = 36</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.albania"><var class="varname">ALBANIA</var></a></var><span class="initializer"> = 37</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.greece"><var class="varname">GREECE</var></a></var><span class="initializer"> = 38</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.russia"><var class="varname">RUSSIA</var></a></var><span class="initializer"> = 39</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.belarus"><var class="varname">BELARUS</var></a></var><span class="initializer"> = 40</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.moldova"><var class="varname">MOLDOVA</var></a></var><span class="initializer"> = 41</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.ukraine"><var class="varname">UKRAINE</var></a></var><span class="initializer"> = 42</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.armenia"><var class="varname">ARMENIA</var></a></var><span class="initializer"> = 43</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.azerbaijan"><var class="varname">AZERBAIJAN</var></a></var><span class="initializer"> = 44</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.georgia"><var class="varname">GEORGIA</var></a></var><span class="initializer"> = 45</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.kazakh-uzbek"><var class="varname">KAZAKH_UZBEK</var></a></var><span class="initializer"> = 46</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.turkey"><var class="varname">TURKEY</var></a></var><span class="initializer"> = 47</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.arabia"><var class="varname">ARABIA</var></a></var><span class="initializer"> = 48</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.israel"><var class="varname">ISRAEL</var></a></var><span class="initializer"> = 49</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.china"><var class="varname">CHINA</var></a></var><span class="initializer"> = 50</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.india"><var class="varname">INDIA</var></a></var><span class="initializer"> = 51</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.japan"><var class="varname">JAPAN</var></a></var><span class="initializer"> = 52</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.gender.php#gender-gender.constants.korea"><var class="varname">KOREA</var></a></var><span class="initializer"> = 53</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="gender-gender.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code><span class="initializer"> = ?</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gender-gender.connect.php" class="methodname">connect</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gender-gender.country.php" class="methodname">country</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$country</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gender-gender.get.php" class="methodname">get</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$country</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gender-gender.isnick.php" class="methodname">isNick</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name0</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$country</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="gender-gender.similarnames.php" class="methodname">similarNames</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$country</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

   }</div>


  </div>


  <div class="section" id="gender.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="gender-gender.constants.is-female"><strong><code><a href="class.gender.php#gender-gender.constants.is-female">Gender\Gender::IS_FEMALE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.is-mostly-female"><strong><code><a href="class.gender.php#gender-gender.constants.is-mostly-female">Gender\Gender::IS_MOSTLY_FEMALE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.is-male"><strong><code><a href="class.gender.php#gender-gender.constants.is-male">Gender\Gender::IS_MALE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.is-mostly-male"><strong><code><a href="class.gender.php#gender-gender.constants.is-mostly-male">Gender\Gender::IS_MOSTLY_MALE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.is-unisex-name"><strong><code><a href="class.gender.php#gender-gender.constants.is-unisex-name">Gender\Gender::IS_UNISEX_NAME</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.is-a-couple"><strong><code><a href="class.gender.php#gender-gender.constants.is-a-couple">Gender\Gender::IS_A_COUPLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.name-not-found"><strong><code><a href="class.gender.php#gender-gender.constants.name-not-found">Gender\Gender::NAME_NOT_FOUND</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.error-in-name"><strong><code><a href="class.gender.php#gender-gender.constants.error-in-name">Gender\Gender::ERROR_IN_NAME</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.any-country"><strong><code><a href="class.gender.php#gender-gender.constants.any-country">Gender\Gender::ANY_COUNTRY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.britain"><strong><code><a href="class.gender.php#gender-gender.constants.britain">Gender\Gender::BRITAIN</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.ireland"><strong><code><a href="class.gender.php#gender-gender.constants.ireland">Gender\Gender::IRELAND</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.usa"><strong><code><a href="class.gender.php#gender-gender.constants.usa">Gender\Gender::USA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.spain"><strong><code><a href="class.gender.php#gender-gender.constants.spain">Gender\Gender::SPAIN</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.portugal"><strong><code><a href="class.gender.php#gender-gender.constants.portugal">Gender\Gender::PORTUGAL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.italy"><strong><code><a href="class.gender.php#gender-gender.constants.italy">Gender\Gender::ITALY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.malta"><strong><code><a href="class.gender.php#gender-gender.constants.malta">Gender\Gender::MALTA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.france"><strong><code><a href="class.gender.php#gender-gender.constants.france">Gender\Gender::FRANCE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.belgium"><strong><code><a href="class.gender.php#gender-gender.constants.belgium">Gender\Gender::BELGIUM</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.luxembourg"><strong><code><a href="class.gender.php#gender-gender.constants.luxembourg">Gender\Gender::LUXEMBOURG</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.netherlands"><strong><code><a href="class.gender.php#gender-gender.constants.netherlands">Gender\Gender::NETHERLANDS</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.germany"><strong><code><a href="class.gender.php#gender-gender.constants.germany">Gender\Gender::GERMANY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.east-frisia"><strong><code><a href="class.gender.php#gender-gender.constants.east-frisia">Gender\Gender::EAST_FRISIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.austria"><strong><code><a href="class.gender.php#gender-gender.constants.austria">Gender\Gender::AUSTRIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.swiss"><strong><code><a href="class.gender.php#gender-gender.constants.swiss">Gender\Gender::SWISS</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.iceland"><strong><code><a href="class.gender.php#gender-gender.constants.iceland">Gender\Gender::ICELAND</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.denmark"><strong><code><a href="class.gender.php#gender-gender.constants.denmark">Gender\Gender::DENMARK</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.norway"><strong><code><a href="class.gender.php#gender-gender.constants.norway">Gender\Gender::NORWAY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.sweden"><strong><code><a href="class.gender.php#gender-gender.constants.sweden">Gender\Gender::SWEDEN</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.finland"><strong><code><a href="class.gender.php#gender-gender.constants.finland">Gender\Gender::FINLAND</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.estonia"><strong><code><a href="class.gender.php#gender-gender.constants.estonia">Gender\Gender::ESTONIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.latvia"><strong><code><a href="class.gender.php#gender-gender.constants.latvia">Gender\Gender::LATVIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.lithuania"><strong><code><a href="class.gender.php#gender-gender.constants.lithuania">Gender\Gender::LITHUANIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.poland"><strong><code><a href="class.gender.php#gender-gender.constants.poland">Gender\Gender::POLAND</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.czech-rep"><strong><code><a href="class.gender.php#gender-gender.constants.czech-rep">Gender\Gender::CZECH_REP</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.slovakia"><strong><code><a href="class.gender.php#gender-gender.constants.slovakia">Gender\Gender::SLOVAKIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.hungary"><strong><code><a href="class.gender.php#gender-gender.constants.hungary">Gender\Gender::HUNGARY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.romania"><strong><code><a href="class.gender.php#gender-gender.constants.romania">Gender\Gender::ROMANIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.bulgaria"><strong><code><a href="class.gender.php#gender-gender.constants.bulgaria">Gender\Gender::BULGARIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.bosnia"><strong><code><a href="class.gender.php#gender-gender.constants.bosnia">Gender\Gender::BOSNIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.croatia"><strong><code><a href="class.gender.php#gender-gender.constants.croatia">Gender\Gender::CROATIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.kosovo"><strong><code><a href="class.gender.php#gender-gender.constants.kosovo">Gender\Gender::KOSOVO</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.macedonia"><strong><code><a href="class.gender.php#gender-gender.constants.macedonia">Gender\Gender::MACEDONIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.montenegro"><strong><code><a href="class.gender.php#gender-gender.constants.montenegro">Gender\Gender::MONTENEGRO</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.serbia"><strong><code><a href="class.gender.php#gender-gender.constants.serbia">Gender\Gender::SERBIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.slovenia"><strong><code><a href="class.gender.php#gender-gender.constants.slovenia">Gender\Gender::SLOVENIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.albania"><strong><code><a href="class.gender.php#gender-gender.constants.albania">Gender\Gender::ALBANIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.greece"><strong><code><a href="class.gender.php#gender-gender.constants.greece">Gender\Gender::GREECE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.russia"><strong><code><a href="class.gender.php#gender-gender.constants.russia">Gender\Gender::RUSSIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.belarus"><strong><code><a href="class.gender.php#gender-gender.constants.belarus">Gender\Gender::BELARUS</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.moldova"><strong><code><a href="class.gender.php#gender-gender.constants.moldova">Gender\Gender::MOLDOVA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.ukraine"><strong><code><a href="class.gender.php#gender-gender.constants.ukraine">Gender\Gender::UKRAINE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.armenia"><strong><code><a href="class.gender.php#gender-gender.constants.armenia">Gender\Gender::ARMENIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.azerbaijan"><strong><code><a href="class.gender.php#gender-gender.constants.azerbaijan">Gender\Gender::AZERBAIJAN</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.georgia"><strong><code><a href="class.gender.php#gender-gender.constants.georgia">Gender\Gender::GEORGIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.kazakh-uzbek"><strong><code><a href="class.gender.php#gender-gender.constants.kazakh-uzbek">Gender\Gender::KAZAKH_UZBEK</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.turkey"><strong><code><a href="class.gender.php#gender-gender.constants.turkey">Gender\Gender::TURKEY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.arabia"><strong><code><a href="class.gender.php#gender-gender.constants.arabia">Gender\Gender::ARABIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.israel"><strong><code><a href="class.gender.php#gender-gender.constants.israel">Gender\Gender::ISRAEL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.china"><strong><code><a href="class.gender.php#gender-gender.constants.china">Gender\Gender::CHINA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.india"><strong><code><a href="class.gender.php#gender-gender.constants.india">Gender\Gender::INDIA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.japan"><strong><code><a href="class.gender.php#gender-gender.constants.japan">Gender\Gender::JAPAN</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="gender-gender.constants.korea"><strong><code><a href="class.gender.php#gender-gender.constants.korea">Gender\Gender::KOREA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

   </dl>
  </div>



 </div>

 










































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="gender-gender.connect.php">Gender\Gender::connect</a> — Connect to an external name dictionary</li><li><a href="gender-gender.construct.php">Gender\Gender::__construct</a> — Construct the Gender object</li><li><a href="gender-gender.country.php">Gender\Gender::country</a> — Get textual country representation</li><li><a href="gender-gender.get.php">Gender\Gender::get</a> — Get gender of a name</li><li><a href="gender-gender.isnick.php">Gender\Gender::isNick</a> — Check if the name0 is an alias of the name1</li><li><a href="gender-gender.similarnames.php">Gender\Gender::similarNames</a> — Get similar names</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gender/gender.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.gender%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.gender&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.gender.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.gender.php">Gender</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.gender.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="gender.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="gender.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="class.gender.php" title="Gender\Gender">Gender\Gender</a>
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
