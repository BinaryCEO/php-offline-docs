<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SVM - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.svm.php">
 <link rel="shorturl" href="https://www.php.net/svm">
 <link rel="alternate" href="https://www.php.net/svm" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.svm.php">
 <link rel="prev" href="https://www.php.net/manual/en/svm.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/svm.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.svm.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.svm.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.svm.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.svm.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.svm.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.svm.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.svm.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.svm.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.svm.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.svm.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.svm.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SVM class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SVM - Manual" />
<meta name="twitter:description" content="The SVM class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SVM - Manual" />
<meta itemprop="description" content="The SVM class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SVM class" />

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
        <a href="svm.construct.php">
          SVM::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="svm.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.svm.php'>SVM</a></li>      </ul>
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
            <option value='en/class.svm.php' selected="selected">English</option>
            <option value='de/class.svm.php'>German</option>
            <option value='es/class.svm.php'>Spanish</option>
            <option value='fr/class.svm.php'>French</option>
            <option value='it/class.svm.php'>Italian</option>
            <option value='ja/class.svm.php'>Japanese</option>
            <option value='pt_BR/class.svm.php'>Brazilian Portuguese</option>
            <option value='ru/class.svm.php'>Russian</option>
            <option value='tr/class.svm.php'>Turkish</option>
            <option value='uk/class.svm.php'>Ukrainian</option>
            <option value='zh/class.svm.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.svm" class="reference">

 <h1 class="title">The SVM class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL svm &gt;= 0.1.0)</p>


  <div class="section" id="svm.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="svm.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">SVM</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.c-svc"><var class="varname">C_SVC</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.nu-svc"><var class="varname">NU_SVC</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.one-class"><var class="varname">ONE_CLASS</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.epsilon-svr"><var class="varname">EPSILON_SVR</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.nu-svr"><var class="varname">NU_SVR</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.kernel-linear"><var class="varname">KERNEL_LINEAR</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.kernel-poly"><var class="varname">KERNEL_POLY</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.kernel-rbf"><var class="varname">KERNEL_RBF</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.kernel-sigmoid"><var class="varname">KERNEL_SIGMOID</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.kernel-precomputed"><var class="varname">KERNEL_PRECOMPUTED</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-type"><var class="varname">OPT_TYPE</var></a></var><span class="initializer"> = 101</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-kernel-type"><var class="varname">OPT_KERNEL_TYPE</var></a></var><span class="initializer"> = 102</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-degree"><var class="varname">OPT_DEGREE</var></a></var><span class="initializer"> = 103</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-shrinking"><var class="varname">OPT_SHRINKING</var></a></var><span class="initializer"> = 104</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-probability"><var class="varname">OPT_PROPABILITY</var></a></var><span class="initializer"> = 105</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-gamma"><var class="varname">OPT_GAMMA</var></a></var><span class="initializer"> = 201</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-nu"><var class="varname">OPT_NU</var></a></var><span class="initializer"> = 202</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-eps"><var class="varname">OPT_EPS</var></a></var><span class="initializer"> = 203</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-p"><var class="varname">OPT_P</var></a></var><span class="initializer"> = 204</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-coef-zero"><var class="varname">OPT_COEF_ZERO</var></a></var><span class="initializer"> = 205</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-c"><var class="varname">OPT_C</var></a></var><span class="initializer"> = 206</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.svm.php#svm.constants.opt-cache-size"><var class="varname">OPT_CACHE_SIZE</var></a></var><span class="initializer"> = 207</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="svm.construct.php" class="methodname">__construct</a></span>()</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="svm.crossvalidate.php" class="methodname">svm::crossvalidate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$problem</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$number_of_folds</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="svm.getoptions.php" class="methodname">getOptions</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="svm.setoptions.php" class="methodname">setOptions</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$params</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="svm.train.php" class="methodname">svm::train</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$problem</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$weights</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.svmmodel.php" class="type SVMModel">SVMModel</a></span></div>

   }</div>


  </div>


  <div class="section" id="svm.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="svm.constants.types">
    <h2 class="title">SVM Constants</h2>
    <dl>

     
      <dt id="svm.constants.c-svc"><strong><code><a href="class.svm.php#svm.constants.c-svc">SVM::C_SVC</a></code></strong></dt>
      <dd>
       <p class="para">The basic C_SVC SVM type. The default, and a good starting point</p>
      </dd>
     

     
      <dt id="svm.constants.nu-svc"><strong><code><a href="class.svm.php#svm.constants.nu-svc">SVM::NU_SVC</a></code></strong></dt>
      <dd>
       <p class="para">The NU_SVC type uses a different, more flexible, error weighting</p>
      </dd>
     

     
      <dt id="svm.constants.one-class"><strong><code><a href="class.svm.php#svm.constants.one-class">SVM::ONE_CLASS</a></code></strong></dt>
      <dd>
       <p class="para">One class SVM type. Train just on a single class, using outliers as negative examples</p>
      </dd>
     

     
      <dt id="svm.constants.epsilon-svr"><strong><code><a href="class.svm.php#svm.constants.epsilon-svr">SVM::EPSILON_SVR</a></code></strong></dt>
      <dd>
       <p class="para">A SVM type for regression (predicting a value rather than just a class)</p>
      </dd>
     

     
      <dt id="svm.constants.nu-svr"><strong><code><a href="class.svm.php#svm.constants.nu-svr">SVM::NU_SVR</a></code></strong></dt>
      <dd>
       <p class="para">A NU style SVM regression type</p>
      </dd>
     

     
      <dt id="svm.constants.kernel-linear"><strong><code><a href="class.svm.php#svm.constants.kernel-linear">SVM::KERNEL_LINEAR</a></code></strong></dt>
      <dd>
       <p class="para">A very simple kernel, can work well on large document classification problems</p>
      </dd>
     

     
      <dt id="svm.constants.kernel-poly"><strong><code><a href="class.svm.php#svm.constants.kernel-poly">SVM::KERNEL_POLY</a></code></strong></dt>
      <dd>
       <p class="para">A polynomial kernel</p>
      </dd>
     

     
      <dt id="svm.constants.kernel-rbf"><strong><code><a href="class.svm.php#svm.constants.kernel-rbf">SVM::KERNEL_RBF</a></code></strong></dt>
      <dd>
       <p class="para">The common Gaussian RBD kernel. Handles non-linear problems well and is a good default for classification</p>
      </dd>
     

     
      <dt id="svm.constants.kernel-sigmoid"><strong><code><a href="class.svm.php#svm.constants.kernel-sigmoid">SVM::KERNEL_SIGMOID</a></code></strong></dt>
      <dd>
       <p class="para">A kernel based on the sigmoid function. Using this makes the SVM very similar to a two layer sigmoid based neural network</p>
      </dd>
     

     
      <dt id="svm.constants.kernel-precomputed"><strong><code><a href="class.svm.php#svm.constants.kernel-precomputed">SVM::KERNEL_PRECOMPUTED</a></code></strong></dt>
      <dd>
       <p class="para">A precomputed kernel - currently unsupported.</p>
      </dd>
     

     
      <dt id="svm.constants.opt-type"><strong><code><a href="class.svm.php#svm.constants.opt-type">SVM::OPT_TYPE</a></code></strong></dt>
      <dd>
       <p class="para">The options key for the SVM type</p>
      </dd>
     

     
      <dt id="svm.constants.opt-kernel-type"><strong><code><a href="class.svm.php#svm.constants.opt-kernel-type">SVM::OPT_KERNEL_TYPE</a></code></strong></dt>
      <dd>
       <p class="para">The options key for the kernel type</p>
      </dd>
     

     
      <dt id="svm.constants.opt-degree"><strong><code><a href="class.svm.php#svm.constants.opt-degree">SVM::OPT_DEGREE</a></code></strong></dt>
      <dd>
       <p class="para"/>
      </dd>
     

     
      <dt id="svm.constants.opt-shrinking"><strong><code><a href="class.svm.php#svm.constants.opt-shrinking">SVM::OPT_SHRINKING</a></code></strong></dt>
      <dd>
       <p class="para">Training parameter, boolean, for whether to use the shrinking heuristics</p>
      </dd>
     

     
      <dt id="svm.constants.opt-probability"><strong><code><a href="class.svm.php#svm.constants.opt-probability">SVM::OPT_PROBABILITY</a></code></strong></dt>
      <dd>
       <p class="para">Training parameter, boolean, for whether to collect and use probability estimates</p>
      </dd>
     

     
      <dt id="svm.constants.opt-gamma"><strong><code><a href="class.svm.php#svm.constants.opt-gamma">SVM::OPT_GAMMA</a></code></strong></dt>
      <dd>
       <p class="para">Algorithm parameter for Poly, RBF and Sigmoid kernel types.</p>
      </dd>
     

     
      <dt id="svm.constants.opt-nu"><strong><code><a href="class.svm.php#svm.constants.opt-nu">SVM::OPT_NU</a></code></strong></dt>
      <dd>
       <p class="para">The option key for the nu parameter, only used in the NU_ SVM types</p>
      </dd>
     

     
      <dt id="svm.constants.opt-eps"><strong><code><a href="class.svm.php#svm.constants.opt-eps">SVM::OPT_EPS</a></code></strong></dt>
      <dd>
       <p class="para">The option key for the Epsilon parameter, used in epsilon regression</p>
      </dd>
     

     
      <dt id="svm.constants.opt-p"><strong><code><a href="class.svm.php#svm.constants.opt-p">SVM::OPT_P</a></code></strong></dt>
      <dd>
       <p class="para">Training parameter used by Episilon SVR regression</p>
      </dd>
     

     
      <dt id="svm.constants.opt-coef-zero"><strong><code><a href="class.svm.php#svm.constants.opt-coef-zero">SVM::OPT_COEF_ZERO</a></code></strong></dt>
      <dd>
       <p class="para">Algorithm parameter for poly and sigmoid kernels</p>
      </dd>
     

     
      <dt id="svm.constants.opt-c"><strong><code><a href="class.svm.php#svm.constants.opt-c">SVM::OPT_C</a></code></strong></dt>
      <dd>
       <p class="para">The option for the cost parameter that controls tradeoff between errors and generality - effectively the penalty for misclassifying training examples. </p>
      </dd>
     

     
      <dt id="svm.constants.opt-cache-size"><strong><code><a href="class.svm.php#svm.constants.opt-cache-size">SVM::OPT_CACHE_SIZE</a></code></strong></dt>
      <dd>
       <p class="para">Memory cache size, in MB</p>
      </dd>
     
    </dl>
   </div>
  </div>



 </div>

 



































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="svm.construct.php">SVM::__construct</a> — Construct a new SVM object</li><li><a href="svm.crossvalidate.php">SVM::crossvalidate</a> — Test training params on subsets of the training data</li><li><a href="svm.getoptions.php">SVM::getOptions</a> — Return the current training parameters</li><li><a href="svm.setoptions.php">SVM::setOptions</a> — Set training parameters</li><li><a href="svm.train.php">SVM::train</a> — Create a SVMModel based on training data</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/svm/svm.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.svm%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.svm&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.svm.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.svm.php">SVM</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.svm.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="svm.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="svm.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="class.svm.php" title="SVM">SVM</a>
                        </li>
                                                <li class="">
                            <a href="class.svmmodel.php" title="SVMModel">SVMModel</a>
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
