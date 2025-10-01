<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/fann.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/fann.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/fann.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.fann.php">
 <link rel="prev" href="https://www.php.net/manual/en/fann.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/fann.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/fann.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/fann.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/fann.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/fann.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/fann.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/fann.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/fann.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/fann.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/fann.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/fann.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/fann.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="fann.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="fann.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.fann.php'>FANN</a></li>      </ul>
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
            <option value='en/fann.constants.php' selected="selected">English</option>
            <option value='de/fann.constants.php'>German</option>
            <option value='es/fann.constants.php'>Spanish</option>
            <option value='fr/fann.constants.php'>French</option>
            <option value='it/fann.constants.php'>Italian</option>
            <option value='ja/fann.constants.php'>Japanese</option>
            <option value='pt_BR/fann.constants.php'>Brazilian Portuguese</option>
            <option value='ru/fann.constants.php'>Russian</option>
            <option value='tr/fann.constants.php'>Turkish</option>
            <option value='uk/fann.constants.php'>Ukrainian</option>
            <option value='zh/fann.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="fann.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  <dl id="constants.fann-train">
   <strong class="title">Training algorithms</strong>
   
    <dt id="constant.fann-train-incremental">
     <strong><code><a href="fann.constants.php#constant.fann-train-incremental">FANN_TRAIN_INCREMENTAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Standard backpropagation algorithm, where the weights are updated after each training pattern.
      This means that the weights are updated many times during a single epoch. For this reason some problems,
      will train very fast with this algorithm, while other more advanced problems will not train very well.
     </span>
    </dd>
   
   
    <dt id="constant.fann-train-batch">
     <strong><code><a href="fann.constants.php#constant.fann-train-batch">FANN_TRAIN_BATCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Standard backpropagation algorithm, where the weights are updated after calculating the mean square error
      for the whole training set. This means that the weights are only updated once during a epoch.
      For this reason some problems, will train slower with this algorithm. But since the mean square
      error is calculated more correctly than in incremental training, some problems will reach a better
      solutions with this algorithm.
     </span>
    </dd>
   
   
    <dt id="constant.fann-train-rprop">
     <strong><code><a href="fann.constants.php#constant.fann-train-rprop">FANN_TRAIN_RPROP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A more advanced batch training algorithm which achieves good results for many problems. The RPROP
      training algorithm is adaptive, and does therefore not use the learning_rate. Some other parameters
      can however be set to change the way the RPROP algorithm works, but it is only recommended
      for users with insight in how the RPROP training algorithm works. The RPROP training algorithm
      is described by [Riedmiller and Braun, 1993], but the actual learning algorithm used here is
      the iRPROP- training algorithm which is described by [Igel and Husken, 2000] which is an variety
      of the standard RPROP training algorithm.
     </span>
    </dd>
   
   
    <dt id="constant.fann-train-quickprop">
     <strong><code><a href="fann.constants.php#constant.fann-train-quickprop">FANN_TRAIN_QUICKPROP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A more advanced batch training algorithm which achieves good results for many problems.
      The quickprop training algorithm uses the learning_rate parameter along with other more advanced parameters,
      but it is only recommended to change these advanced parameters, for users with insight in how the quickprop
      training algorithm works. The quickprop training algorithm is described by [Fahlman, 1988].
     </span>
    </dd>
   
   
    <dt id="constant.fann-train-sarprop">
     <strong><code><a href="fann.constants.php#constant.fann-train-sarprop">FANN_TRAIN_SARPROP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Even more advance training algorithm. Only for version 2.2
     </span>
    </dd>
   
  </dl>
  <dl id="constants.fann-activation-funcs">
   <strong class="title">Activation functions</strong>
   
    <dt id="constant.fann-linear">
     <strong><code><a href="fann.constants.php#constant.fann-linear">FANN_LINEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Linear activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-threshold">
     <strong><code><a href="fann.constants.php#constant.fann-threshold">FANN_THRESHOLD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Threshold activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-threshold-symmetric">
     <strong><code><a href="fann.constants.php#constant.fann-threshold-symmetric">FANN_THRESHOLD_SYMMETRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Threshold activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-sigmoid">
     <strong><code><a href="fann.constants.php#constant.fann-sigmoid">FANN_SIGMOID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Sigmoid activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-sigmoid-stepwise">
     <strong><code><a href="fann.constants.php#constant.fann-sigmoid-stepwise">FANN_SIGMOID_STEPWISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Stepwise linear approximation to sigmoid.
     </span>
    </dd>
   
   
    <dt id="constant.fann-sigmoid-symmetric">
     <strong><code><a href="fann.constants.php#constant.fann-sigmoid-symmetric">FANN_SIGMOID_SYMMETRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Symmetric sigmoid activation function, aka. tanh.
     </span>
    </dd>
   
   
    <dt id="constant.fann-sigmoid-symmetric-stepwise">
     <strong><code><a href="fann.constants.php#constant.fann-sigmoid-symmetric-stepwise">FANN_SIGMOID_SYMMETRIC_STEPWISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Stepwise linear approximation to symmetric sigmoid
     </span>
    </dd>
   
   
    <dt id="constant.fann-gaussian">
     <strong><code><a href="fann.constants.php#constant.fann-gaussian">FANN_GAUSSIAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Gaussian activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-gaussian-symmetric">
     <strong><code><a href="fann.constants.php#constant.fann-gaussian-symmetric">FANN_GAUSSIAN_SYMMETRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Symmetric gaussian activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-gaussian-stepwise">
     <strong><code><a href="fann.constants.php#constant.fann-gaussian-stepwise">FANN_GAUSSIAN_STEPWISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Stepwise gaussian activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-elliot">
     <strong><code><a href="fann.constants.php#constant.fann-elliot">FANN_ELLIOT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Fast (sigmoid like) activation function defined by David Elliott.
     </span>
    </dd>
   
   
    <dt id="constant.fann-elliot-symmetric">
     <strong><code><a href="fann.constants.php#constant.fann-elliot-symmetric">FANN_ELLIOT_SYMMETRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Fast (symmetric sigmoid like) activation function defined by David Elliott.
     </span>
    </dd>
   
   
    <dt id="constant.fann-linear-piece">
     <strong><code><a href="fann.constants.php#constant.fann-linear-piece">FANN_LINEAR_PIECE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Bounded linear activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-linear-piece-symmetric">
     <strong><code><a href="fann.constants.php#constant.fann-linear-piece-symmetric">FANN_LINEAR_PIECE_SYMMETRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Bounded linear activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-sin-symmetric">
     <strong><code><a href="fann.constants.php#constant.fann-sin-symmetric">FANN_SIN_SYMMETRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Periodical sinus activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-cos-symmetric">
     <strong><code><a href="fann.constants.php#constant.fann-cos-symmetric">FANN_COS_SYMMETRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Periodical cosinus activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-sin">
     <strong><code><a href="fann.constants.php#constant.fann-sin">FANN_SIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Periodical sinus activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-cos">
     <strong><code><a href="fann.constants.php#constant.fann-cos">FANN_COS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Periodical cosinus activation function.
     </span>
    </dd>
   
  </dl>
  <dl id="constants.fann-errorfunc">
   <strong class="title">Error function used during training</strong>
   
    <dt id="constant.fann-errorfunc-linear">
     <strong><code><a href="fann.constants.php#constant.fann-errorfunc-linear">FANN_ERRORFUNC_LINEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Standard linear error function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-errorfunc-tanh">
     <strong><code><a href="fann.constants.php#constant.fann-errorfunc-tanh">FANN_ERRORFUNC_TANH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Tanh error function; usually better but may require a lower learning rate. This error function aggressively
      targets outputs that differ much from the desired, while not targeting outputs that only differ slightly.
      Not recommended for cascade or incremental training.
     </span>
    </dd>
   
  </dl>
  <dl id="constants.fann-stopfunc">
   <strong class="title">Stop criteria used during training</strong>
   
    <dt id="constant.fann-stopfunc-mse">
     <strong><code><a href="fann.constants.php#constant.fann-stopfunc-mse">FANN_STOPFUNC_MSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Stop criteria is Mean Square Error (MSE) value.
     </span>
    </dd>
   
   
    <dt id="constant.fann-stopfunc-bit">
     <strong><code><a href="fann.constants.php#constant.fann-stopfunc-bit">FANN_STOPFUNC_BIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Stop criteria is number of bits that fail.  The number of bits means the number of output neurons
      which differs more than the bit fail limit (see fann_get_bit_fail_limit, fann_set_bit_fail_limit). The bits are counted
      in all of the training data, so this number can be higher than the number of training data.
     </span>
    </dd>
   
  </dl>
  <dl id="constants.fann-nettype">
   <strong class="title">Definition of network types used by <span class="function"><a href="function.fann-get-network-type.php" class="function">fann_get_network_type()</a></span></strong>
   
    <dt id="constant.fann-nettype-layer">
     <strong><code><a href="fann.constants.php#constant.fann-nettype-layer">FANN_NETTYPE_LAYER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Each layer only has connections to the next layer.
     </span>
    </dd>
   
   
    <dt id="constant.fann-nettype-shortcut">
     <strong><code><a href="fann.constants.php#constant.fann-nettype-shortcut">FANN_NETTYPE_SHORTCUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Each layer has connections to all following layers
     </span>
    </dd>
   
   </dl>
  <dl id="constants.fann-e">
   <strong class="title">Errors</strong>
   
    <dt id="constant.fann-e-no-error">
     <strong><code><a href="fann.constants.php#constant.fann-e-no-error">FANN_E_NO_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      No error.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-open-config-r">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-open-config-r">FANN_E_CANT_OPEN_CONFIG_R</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to open configuration file for reading.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-open-config-w">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-open-config-w">FANN_E_CANT_OPEN_CONFIG_W</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to open configuration file for writing.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-wrong-config-version">
     <strong><code><a href="fann.constants.php#constant.fann-e-wrong-config-version">FANN_E_WRONG_CONFIG_VERSION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Wrong version of configuration file.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-read-config">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-read-config">FANN_E_CANT_READ_CONFIG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Error reading info from configuration file.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-read-neuron">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-read-neuron">FANN_E_CANT_READ_NEURON</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Error reading neuron info from configuration file.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-read-connections">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-read-connections">FANN_E_CANT_READ_CONNECTIONS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Error reading connections from configuration file.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-wrong-num-connections">
     <strong><code><a href="fann.constants.php#constant.fann-e-wrong-num-connections">FANN_E_WRONG_NUM_CONNECTIONS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Number of connections not equal to the number expected.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-open-td-w">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-open-td-w">FANN_E_CANT_OPEN_TD_W</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to open train data file for writing.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-open-td-r">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-open-td-r">FANN_E_CANT_OPEN_TD_R</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to open train data file for reading.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-read-td">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-read-td">FANN_E_CANT_READ_TD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Error reading training data from file.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-allocate-mem">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-allocate-mem">FANN_E_CANT_ALLOCATE_MEM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to allocate memory.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-train-activation">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-train-activation">FANN_E_CANT_TRAIN_ACTIVATION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to train with the selected activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-use-activation">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-use-activation">FANN_E_CANT_USE_ACTIVATION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to use the selected activation function.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-train-data-mismatch">
     <strong><code><a href="fann.constants.php#constant.fann-e-train-data-mismatch">FANN_E_TRAIN_DATA_MISMATCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Irreconcilable differences between two struct fann_train_data structures.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-cant-use-train-alg">
     <strong><code><a href="fann.constants.php#constant.fann-e-cant-use-train-alg">FANN_E_CANT_USE_TRAIN_ALG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to use the selected training algorithm.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-train-data-subset">
     <strong><code><a href="fann.constants.php#constant.fann-e-train-data-subset">FANN_E_TRAIN_DATA_SUBSET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Trying to take subset which is not within the training set.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-index-out-of-bound">
     <strong><code><a href="fann.constants.php#constant.fann-e-index-out-of-bound">FANN_E_INDEX_OUT_OF_BOUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Index is out of bound.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-scale-not-present">
     <strong><code><a href="fann.constants.php#constant.fann-e-scale-not-present">FANN_E_SCALE_NOT_PRESENT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Scaling parameters not present.
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-input-no-match">
     <strong><code><a href="fann.constants.php#constant.fann-e-input-no-match">FANN_E_INPUT_NO_MATCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The number of input neurons in the ann and data do not match
     </span>
    </dd>
   
   
    <dt id="constant.fann-e-output-no-match">
     <strong><code><a href="fann.constants.php#constant.fann-e-output-no-match">FANN_E_OUTPUT_NO_MATCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The number of output neurons in the ann and data do not match.
     </span>
    </dd>
   
  </dl>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/fann/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffann.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=fann.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/fann.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129742">  <div class="votes">
    <div id="Vu129742">
    <a href="/manual/vote-note.php?id=129742&amp;page=fann.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129742">
    <a href="/manual/vote-note.php?id=129742&amp;page=fann.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129742" title="no votes...">
    0
    </div>
  </div>
  <a href="#129742" class="name">
  <strong class="user"><em>aaroncr+php at gmail dot com</em></strong></a><a class="genanchor" href="#129742"> &para;</a><div class="date" title="2024-09-09 06:29"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129742">
<div class="phpcode"><code><span class="html">RELU and L-RELU activation functions are listed in the C++ library enum (fann_data.h:~214) but PHP constants have not been assigned for them as of this note.  You can add them yourself:<br /><br />define('FANN_LINEAR_PIECE_RECT', 18);<br />define('FANN_LINEAR_PIECE_RECT_LEAKY', 19);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=fann.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/fann.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.fann.php">FANN</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.fann.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="fann.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="fann.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="fann.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.fann.php" title="Fann Functions">Fann Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.fannconnection.php" title="FANNConnection">FANNConnection</a>
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
