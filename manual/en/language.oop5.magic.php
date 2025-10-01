<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Magic Methods - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.magic.php">
 <link rel="shorturl" href="https://www.php.net/oop5.magic">
 <link rel="alternate" href="https://www.php.net/oop5.magic" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.iterations.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.final.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.magic.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.magic.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.magic.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.magic.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.magic.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.magic.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.magic.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.magic.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.magic.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.magic.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.magic.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Magic Methods" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Magic Methods - Manual" />
<meta name="twitter:description" content="Magic Methods" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Magic Methods - Manual" />
<meta itemprop="description" content="Magic Methods" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Magic Methods" />

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
        <a href="language.oop5.final.php">
          Final Keyword &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.iterations.php">
          &laquo; Object Iteration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.magic.php' selected="selected">English</option>
            <option value='de/language.oop5.magic.php'>German</option>
            <option value='es/language.oop5.magic.php'>Spanish</option>
            <option value='fr/language.oop5.magic.php'>French</option>
            <option value='it/language.oop5.magic.php'>Italian</option>
            <option value='ja/language.oop5.magic.php'>Japanese</option>
            <option value='pt_BR/language.oop5.magic.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.magic.php'>Russian</option>
            <option value='tr/language.oop5.magic.php'>Turkish</option>
            <option value='uk/language.oop5.magic.php'>Ukrainian</option>
            <option value='zh/language.oop5.magic.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.magic" class="sect1">
  <h2 class="title">Magic Methods</h2>
  <p class="para">
   Magic methods are special methods which override PHP&#039;s default&#039;s action
   when certain actions are performed on an object.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="simpara">
    All methods names starting with <code class="literal">__</code> are reserved by PHP.
    Therefore, it is not recommended to use such method names unless overriding
    PHP&#039;s behavior.
   </p>
  </div>
  <p class="para">
   The following method names are considered magical:
   
   <a href="language.oop5.decon.php#object.construct" class="link">__construct()</a>,
   <a href="language.oop5.decon.php#object.destruct" class="link">__destruct()</a>,
   <a href="language.oop5.overloading.php#object.call" class="link">__call()</a>,
   <a href="language.oop5.overloading.php#object.callstatic" class="link">__callStatic()</a>,
   <a href="language.oop5.overloading.php#object.get" class="link">__get()</a>,
   <a href="language.oop5.overloading.php#object.set" class="link">__set()</a>,
   <a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a>,
   <a href="language.oop5.overloading.php#object.unset" class="link">__unset()</a>,
   <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a>,
   <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>,
   <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a>,
   <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a>,
   <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a>,
   <a href="language.oop5.magic.php#object.invoke" class="link">__invoke()</a>,
   <a href="language.oop5.magic.php#object.set-state" class="link">__set_state()</a>,
   <a href="language.oop5.cloning.php#object.clone" class="link">__clone()</a>, and
   <a href="language.oop5.magic.php#object.debuginfo" class="link">__debugInfo()</a>.
  </p>

  <div class="warning"><strong class="warning">Warning</strong>
   
   <p class="simpara">
    All magic methods, with the exception of
    <a href="language.oop5.decon.php#object.construct" class="link">__construct()</a>,
    <a href="language.oop5.decon.php#object.destruct" class="link">__destruct()</a>, and
    <a href="language.oop5.cloning.php#object.clone" class="link">__clone()</a>,
    <em>must</em> be declared as <code class="literal">public</code>,
    otherwise an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
    Prior to PHP 8.0.0, no diagnostic was emitted for the magic methods
    <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a>,
    <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>,
    <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a>,
    <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a>, and
    <a href="language.oop5.magic.php#object.set-state" class="link">__set_state()</a>.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    If type declarations are used in the definition of a magic method, they
    must be identical to the signature described in this document.
    Otherwise, a fatal error is emitted.
    Prior to PHP 8.0.0, no diagnostic was emitted.
    However, <a href="language.oop5.decon.php#object.construct" class="link">__construct()</a> and
    <a href="language.oop5.decon.php#object.destruct" class="link">__destruct()</a> must not declare a return type;
    otherwise a fatal error is emitted.
   </p>
  </div>
 
  <div class="sect2" id="language.oop5.magic.sleep">
   <h3 class="title">
    <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> and
    <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>
   </h3>
   
   <div class="methodsynopsis dc-description" id="object.sleep">
    <span class="modifier">public</span> <span class="methodname"><strong>__sleep</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

   <div class="methodsynopsis dc-description" id="object.wakeup"><span class="modifier">public</span> <span class="methodname"><strong>__wakeup</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   
   <p class="para">
    <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> checks if the class has a function with
    the magic name <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a>. If so, that function is
    executed prior to any serialization. It can clean up the object
    and is supposed to return an array with the names of all variables
    of that object that should be serialized.
    If the method doesn&#039;t return anything then <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is serialized and
    <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> is issued.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     It is not possible for <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> to return names of
     private properties in parent classes. Doing this will result in an
     <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> level error.
     Use <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a> instead.
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     As of PHP 8.0.0, returning a value which is not an array from <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> generates a warning. Previously, it generated a notice.
    </p>
   </p></blockquote>
   <p class="para">
    The intended use of <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> is to commit pending
    data or perform similar cleanup tasks. Also, the function is
    useful if a very large object doesn&#039;t need to be saved completely.
   </p>
   <p class="para">
    Conversely, <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> checks for the
    presence of a function with the magic name 
    <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>. If present, this function can
    reconstruct any resources that the object may have.
   </p>
   <p class="para">
    The intended use of <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> is to
    reestablish any database connections that may have been lost
    during serialization and perform other reinitialization
    tasks.
   </p>
   <div class="example" id="example-349">
    <p><strong>Example #1 Sleep and wakeup</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Connection<br /></span><span style="color: #007700">{<br />    protected </span><span style="color: #0000BB">$link</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$username</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />    <br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$username</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dsn </span><span style="color: #007700">= </span><span style="color: #0000BB">$dsn</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username </span><span style="color: #007700">= </span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password </span><span style="color: #007700">= </span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">();<br />    }<br />    <br />    private function </span><span style="color: #0000BB">connect</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">link </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">);<br />    }<br />    <br />    public function </span><span style="color: #0000BB">__sleep</span><span style="color: #007700">()<br />    {<br />        return array(</span><span style="color: #DD0000">'dsn'</span><span style="color: #007700">, </span><span style="color: #DD0000">'username'</span><span style="color: #007700">, </span><span style="color: #DD0000">'password'</span><span style="color: #007700">);<br />    }<br />    <br />    public function </span><span style="color: #0000BB">__wakeup</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">();<br />    }<br />}</span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.magic.serialize">
   <h3 class="title">
    <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a> and
    <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a>
   </h3>

   <div class="methodsynopsis dc-description" id="object.serialize">
    <span class="modifier">public</span> <span class="methodname"><strong>__serialize</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

   <div class="methodsynopsis dc-description" id="object.unserialize"><span class="modifier">public</span> <span class="methodname"><strong>__unserialize</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


   <p class="para">
    <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> checks if the class has a function with
    the magic name <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a>. If so, that function is
    executed prior to any serialization. It must construct and return an associative array of key/value pairs
    that represent the serialized form of the object. If no array is returned a <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span>
    will be thrown.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     If both <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a> and <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a>
     are defined in the same object, only <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a> will be called.
     <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> will be ignored. If the object implements the <a href="class.serializable.php" class="link">Serializable</a>
     interface, the interface&#039;s <code class="literal">serialize()</code> method will be ignored and <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a>
     used instead.
    </p>
   </p></blockquote>
   <p class="para">
    The intended use of <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a> is to define a serialization-friendly
    arbitrary representation of the object. Elements of the array may correspond to properties of the object but
    that is not required.
   </p>
   <p class="para">
    Conversely, <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> checks for the
    presence of a function with the magic name
    <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a>. If present, this function will be passed the
    restored array that was returned from <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a>.  It may
    then restore the properties of the object from that array as appropriate.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     If both <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a> and <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>
     are defined in the same object, only <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a> will be called.
     <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> will be ignored.
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     This feature is available as of PHP 7.4.0.
    </p>
   </p></blockquote>
   <div class="example" id="example-350">
    <p><strong>Example #2 Serialize and unserialize</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Connection<br /></span><span style="color: #007700">{<br />    protected </span><span style="color: #0000BB">$link</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$username</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$username</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dsn </span><span style="color: #007700">= </span><span style="color: #0000BB">$dsn</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username </span><span style="color: #007700">= </span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password </span><span style="color: #007700">= </span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">();<br />    }<br /><br />    private function </span><span style="color: #0000BB">connect</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">link </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">);<br />    }<br /><br />    public function </span><span style="color: #0000BB">__serialize</span><span style="color: #007700">(): array<br />    {<br />        return [<br />          </span><span style="color: #DD0000">'dsn' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dsn</span><span style="color: #007700">,<br />          </span><span style="color: #DD0000">'user' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">,<br />          </span><span style="color: #DD0000">'pass' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">,<br />        ];<br />    }<br /><br />    public function </span><span style="color: #0000BB">__unserialize</span><span style="color: #007700">(array </span><span style="color: #0000BB">$data</span><span style="color: #007700">): </span><span style="color: #0000BB">void<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dsn </span><span style="color: #007700">= </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'dsn'</span><span style="color: #007700">];<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username </span><span style="color: #007700">= </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'user'</span><span style="color: #007700">];<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password </span><span style="color: #007700">= </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'pass'</span><span style="color: #007700">];<br /><br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">();<br />    }<br />}</span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.magic.tostring">
   <h3 class="title"><a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a></h3>
   <div class="methodsynopsis dc-description" id="object.tostring">
    <span class="modifier">public</span> <span class="methodname"><strong>__toString</strong></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   <p class="para">
    The <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a> method allows a class to decide
    how it will react when it is treated like a string. For example,
    what <code class="literal">echo $obj;</code> will print.
   </p>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     As of PHP 8.0.0, the return value follows standard PHP type semantics,
     meaning it will be coerced into a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> if possible and if
     <a href="language.types.declarations.php#language.types.declarations.strict" class="link">strict typing</a>
     is disabled.
    </p>
    <p class="para">
     A <span class="interfacename"><a href="class.stringable.php" class="interfacename">Stringable</a></span> object will
     <em>not</em> be accepted by a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> type declaration if
     <a href="language.types.declarations.php#language.types.declarations.strict" class="link">strict typing</a>
     is enabled. If such behaviour is wanted the type declaration must accept
     <span class="interfacename"><a href="class.stringable.php" class="interfacename">Stringable</a></span> and <span class="type"><a href="language.types.string.php" class="type string">string</a></span> via a union type.
    </p>
    <p class="para">
     As of PHP 8.0.0, any class that contains a <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a>
     method will also implicitly implement the <span class="interfacename"><a href="class.stringable.php" class="interfacename">Stringable</a></span> interface, and will
     thus pass type checks for that interface.  Explicitly implementing the interface anyway is
     recommended.
    </p>
    <p class="para">
     In PHP 7.4, the returned value <em>must</em> be a
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, otherwise an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> is thrown.
    </p>
    <p class="para">
     Prior to PHP 7.4.0, the returned value <em>must</em> be a
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, otherwise a fatal <strong><code><a href="errorfunc.constants.php#constant.e-recoverable-error">E_RECOVERABLE_ERROR</a></code></strong>
     is emitted.
    </p>
   </div>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     It was not possible to throw an exception from within a
     <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a>
     method prior to PHP 7.4.0. Doing so will result in a fatal error.
    </p>
   </div>
   <div class="example" id="example-351">
    <p><strong>Example #3 Simple example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Declare a simple class<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">TestClass<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__toString</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">TestClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'Hello'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Hello
</pre></div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.magic.invoke">
   <h3 class="title"><a href="language.oop5.magic.php#object.invoke" class="link">__invoke()</a></h3>
   <div class="methodsynopsis dc-description" id="object.invoke">
    <span class="methodname"><strong>__invoke</strong></span>(<span class="methodparam"> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

   <p class="para">
    The <a href="language.oop5.magic.php#object.invoke" class="link">__invoke()</a> method is called when a script tries to
    call an object as a function.
   </p>
   <div class="example" id="example-352">
    <p><strong>Example #4 Using <a href="language.oop5.magic.php#object.invoke" class="link">__invoke()</a></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">CallableClass<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">);<br />    }<br />}<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">CallableClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_callable</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
int(5)
bool(true)
</pre></div>
    </div>
   </div>
   <div class="example" id="example-353">
    <p><strong>Example #5 Using <a href="language.oop5.magic.php#object.invoke" class="link">__invoke()</a></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Sort<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">string $key</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">key </span><span style="color: #007700">= </span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(array </span><span style="color: #0000BB">$a</span><span style="color: #007700">, array </span><span style="color: #0000BB">$b</span><span style="color: #007700">): </span><span style="color: #0000BB">int<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">key</span><span style="color: #007700">] &lt;=&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">key</span><span style="color: #007700">];<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$customers </span><span style="color: #007700">= [<br />    [</span><span style="color: #DD0000">'id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'first_name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'John'</span><span style="color: #007700">, </span><span style="color: #DD0000">'last_name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Do'</span><span style="color: #007700">],<br />    [</span><span style="color: #DD0000">'id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #DD0000">'first_name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Alice'</span><span style="color: #007700">, </span><span style="color: #DD0000">'last_name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Gustav'</span><span style="color: #007700">],<br />    [</span><span style="color: #DD0000">'id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">'first_name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Bob'</span><span style="color: #007700">, </span><span style="color: #DD0000">'last_name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Filipe'</span><span style="color: #007700">]<br />];<br /><br /></span><span style="color: #FF8000">// sort customers by first name<br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$customers</span><span style="color: #007700">, new </span><span style="color: #0000BB">Sort</span><span style="color: #007700">(</span><span style="color: #DD0000">'first_name'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$customers</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// sort customers by last name<br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$customers</span><span style="color: #007700">, new </span><span style="color: #0000BB">Sort</span><span style="color: #007700">(</span><span style="color: #DD0000">'last_name'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$customers</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Array
(
    [0] =&gt; Array
        (
            [id] =&gt; 3
            [first_name] =&gt; Alice
            [last_name] =&gt; Gustav
        )

    [1] =&gt; Array
        (
            [id] =&gt; 2
            [first_name] =&gt; Bob
            [last_name] =&gt; Filipe
        )

    [2] =&gt; Array
        (
            [id] =&gt; 1
            [first_name] =&gt; John
            [last_name] =&gt; Do
        )

)
Array
(
    [0] =&gt; Array
        (
            [id] =&gt; 1
            [first_name] =&gt; John
            [last_name] =&gt; Do
        )

    [1] =&gt; Array
        (
            [id] =&gt; 2
            [first_name] =&gt; Bob
            [last_name] =&gt; Filipe
        )

    [2] =&gt; Array
        (
            [id] =&gt; 3
            [first_name] =&gt; Alice
            [last_name] =&gt; Gustav
        )

)
</pre></div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.magic.set-state">
   <h3 class="title"><a href="language.oop5.magic.php#object.set-state" class="link">__set_state()</a></h3>
   <div class="methodsynopsis dc-description" id="object.set-state">
    <span class="modifier">static</span> <span class="methodname"><strong>__set_state</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$properties</code></span>): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>

   <p class="para">
    This <a href="language.oop5.static.php" class="link">static</a> method is called
    for classes exported by <span class="function"><a href="function.var-export.php" class="function">var_export()</a></span>.
   </p>
   <p class="para">
    The only parameter of this method is an array containing exported
    properties in the form <code class="literal">[&#039;property&#039; =&gt; value, ...]</code>.
   </p>
   <div class="example" id="example-354">
    <p><strong>Example #6 Using <a href="language.oop5.magic.php#object.set-state" class="link">__set_state()</a></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$var1</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$var2</span><span style="color: #007700">;<br /><br />    public static function </span><span style="color: #0000BB">__set_state</span><span style="color: #007700">(</span><span style="color: #0000BB">$an_array</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var1 </span><span style="color: #007700">= </span><span style="color: #0000BB">$an_array</span><span style="color: #007700">[</span><span style="color: #DD0000">'var1'</span><span style="color: #007700">];<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var2 </span><span style="color: #007700">= </span><span style="color: #0000BB">$an_array</span><span style="color: #007700">[</span><span style="color: #DD0000">'var2'</span><span style="color: #007700">];<br />        return </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var1 </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br />eval(</span><span style="color: #DD0000">'$c = ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$b </span><span style="color: #007700">. </span><span style="color: #DD0000">';'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
string(60) &quot;A::__set_state(array(
   &#039;var1&#039; =&gt; 5,
   &#039;var2&#039; =&gt; &#039;foo&#039;,
))&quot;
object(A)#2 (2) {
  [&quot;var1&quot;]=&gt;
  int(5)
  [&quot;var2&quot;]=&gt;
  string(3) &quot;foo&quot;
}
</pre></div>
    </div>
   </div>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     When exporting an object, <span class="function"><a href="function.var-export.php" class="function">var_export()</a></span> does not check
     whether <a href="language.oop5.magic.php#object.set-state" class="link">__set_state()</a> is
     implemented by the object&#039;s class, so re-importing objects will result in an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception,
     if __set_state() is not implemented. Particularly, this affects some
     internal classes.
    </span>
    <span class="simpara">
     It is the responsibility of the programmer to verify that only objects will
     be re-imported, whose class implements __set_state().
    </span>
   </p></blockquote>
  </div>

  <div class="sect2" id="language.oop5.magic.debuginfo">
   <h3 class="title"><a href="language.oop5.magic.php#object.debuginfo" class="link">__debugInfo()</a></h3>
   <div class="methodsynopsis dc-description" id="object.debuginfo">
    <span class="methodname"><strong>__debugInfo</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

   <p class="para">
    This method is called by <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span> when dumping an
    object to get the properties that should be shown. If the method isn&#039;t
    defined on an object, then all public, protected and private properties
    will be shown.
   </p>
   <div class="example" id="example-355">
    <p><strong>Example #7 Using <a href="language.oop5.magic.php#object.debuginfo" class="link">__debugInfo()</a></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$prop</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">= </span><span style="color: #0000BB">$val</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__debugInfo</span><span style="color: #007700">() {<br />        return [<br />            </span><span style="color: #DD0000">'propSquared' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">** </span><span style="color: #0000BB">2</span><span style="color: #007700">,<br />        ];<br />    }<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new </span><span style="color: #0000BB">C</span><span style="color: #007700">(</span><span style="color: #0000BB">42</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
object(C)#1 (1) {
  [&quot;propSquared&quot;]=&gt;
  int(1764)
}
</pre></div>
    </div>
   </div>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/magic.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.magic%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.magic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.magic.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86111">  <div class="votes">
    <div id="Vu86111">
    <a href="/manual/vote-note.php?id=86111&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86111">
    <a href="/manual/vote-note.php?id=86111&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86111" title="63% like this...">
    54
    </div>
  </div>
  <a href="#86111" class="name">
  <strong class="user"><em>jon at webignition dot net</em></strong></a><a class="genanchor" href="#86111"> &para;</a><div class="date" title="2008-10-03 07:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86111">
<div class="phpcode"><code><span class="html">The __toString() method is extremely useful for converting class attribute names and values into common string representations of data (of which there are many choices). I mention this as previous references to __toString() refer only to debugging uses.<br /><br />I have previously used the __toString() method in the following ways:<br /><br /> - representing a data-holding object as:<br />   - XML<br />   - raw POST data<br />   - a GET query string<br />   - header name:value pairs<br /><br /> - representing a custom mail object as an actual email (headers then body, all correctly represented)<br /><br />When creating a class, consider what possible standard string representations are available and, of those, which would be the most relevant with respect to the purpose of the class.<br /><br />Being able to represent data-holding objects in standardised string forms makes it much easier for your internal representations of data to be shared in an interoperable way with other applications.</span></code></div>
  </div>
 </div>
  <div class="note" id="87404">  <div class="votes">
    <div id="Vu87404">
    <a href="/manual/vote-note.php?id=87404&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87404">
    <a href="/manual/vote-note.php?id=87404&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87404" title="60% like this...">
    19
    </div>
  </div>
  <a href="#87404" class="name">
  <strong class="user"><em>jsnell at e-normous dot com</em></strong></a><a class="genanchor" href="#87404"> &para;</a><div class="date" title="2008-12-03 02:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87404">
<div class="phpcode"><code><span class="html">Be very careful to define __set_state() in classes which inherit from a parent using it, as the static __set_state() call will be called for any children.  If you are not careful, you will end up with an object of the wrong type.  Here is an example:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">A
<br /></span><span class="keyword">{
<br />    public </span><span class="default">$var1</span><span class="keyword">; 
<br />
<br />    public static function </span><span class="default">__set_state</span><span class="keyword">(</span><span class="default">$an_array</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;
<br />        </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">var1 </span><span class="keyword">= </span><span class="default">$an_array</span><span class="keyword">[</span><span class="string">'var1'</span><span class="keyword">];  
<br />        return </span><span class="default">$obj</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{
<br />}
<br />
<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;
<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">var1 </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;
<br />
<br />eval(</span><span class="string">'$new_b = ' </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) . </span><span class="string">';'</span><span class="keyword">); 
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$new_b</span><span class="keyword">);
<br /></span><span class="comment">/*
<br />object(A)#2 (1) {
<br />  ["var1"]=&gt;
<br />  int(5)
<br />}
<br />*/
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128621">  <div class="votes">
    <div id="Vu128621">
    <a href="/manual/vote-note.php?id=128621&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128621">
    <a href="/manual/vote-note.php?id=128621&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128621" title="66% like this...">
    6
    </div>
  </div>
  <a href="#128621" class="name">
  <strong class="user"><em>tyler at nighthound dot us</em></strong></a><a class="genanchor" href="#128621"> &para;</a><div class="date" title="2023-06-18 01:26"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128621">
<div class="phpcode"><code><span class="html">Please note that as of PHP 8.2 implementing __serialize() has no control over the output of json_encode(). you still have to implement JsonSerializable.</span></code></div>
  </div>
 </div>
  <div class="note" id="121158">  <div class="votes">
    <div id="Vu121158">
    <a href="/manual/vote-note.php?id=121158&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121158">
    <a href="/manual/vote-note.php?id=121158&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121158" title="58% like this...">
    11
    </div>
  </div>
  <a href="#121158" class="name">
  <strong class="user"><em>kguest at php dot net</em></strong></a><a class="genanchor" href="#121158"> &para;</a><div class="date" title="2017-05-30 01:27"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121158">
<div class="phpcode"><code><span class="html">__debugInfo  is also utilised when calling print_r on an object:<br /><br />$ cat test.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">FooQ </span><span class="keyword">{<br /><br />     private </span><span class="default">$bar </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />     public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) {<br /><br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bar </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />     }<br /><br />     public function </span><span class="default">__debugInfo</span><span class="keyword">()<br />     {<br />         return [</span><span class="string">'_bar' </span><span class="keyword">=&gt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">];<br />     }<br />}<br /></span><span class="default">$fooq </span><span class="keyword">= new </span><span class="default">FooQ</span><span class="keyword">(</span><span class="string">"q"</span><span class="keyword">);<br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$fooq</span><span class="keyword">);<br /><br />$ </span><span class="default">php test</span><span class="keyword">.</span><span class="default">php<br />FooQ Object<br /></span><span class="keyword">(<br />    [</span><span class="default">_bar</span><span class="keyword">] =&gt; </span><span class="default">q<br /></span><span class="keyword">)<br />$</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125282">  <div class="votes">
    <div id="Vu125282">
    <a href="/manual/vote-note.php?id=125282&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125282">
    <a href="/manual/vote-note.php?id=125282&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125282" title="60% like this...">
    7
    </div>
  </div>
  <a href="#125282" class="name">
  <strong class="user"><em>ctamayo at sitecrafting dot com</em></strong></a><a class="genanchor" href="#125282"> &para;</a><div class="date" title="2020-08-18 06:10"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125282">
<div class="phpcode"><code><span class="html">Due to a bug in PHP &lt;= 7.3, overriding the __debugInfo() method from SPL classes is silently ignored.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Debuggable </span><span class="keyword">extends </span><span class="default">ArrayObject </span><span class="keyword">{<br />  public function </span><span class="default">__debugInfo</span><span class="keyword">() {<br />    return [</span><span class="string">'special' </span><span class="keyword">=&gt; </span><span class="string">'This should show up'</span><span class="keyword">];<br />  }<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(new </span><span class="default">Debuggable</span><span class="keyword">());<br /><br /></span><span class="comment">// Expected output:<br />// object(Debuggable)#1 (1) {<br />//   ["special"]=&gt;<br />//   string(19) "This should show up"<br />// }<br /><br />// Actual output:<br />// object(Debuggable)#1 (1) {<br />//   ["storage":"ArrayObject":private]=&gt;<br />//   array(0) {<br />//   }<br />// }<br /><br /></span><span class="default">?&gt;<br /></span><br />Bug report: <a href="https://bugs.php.net/bug.php?id=69264" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=69264</a></span></code></div>
  </div>
 </div>
  <div class="note" id="122684">  <div class="votes">
    <div id="Vu122684">
    <a href="/manual/vote-note.php?id=122684&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122684">
    <a href="/manual/vote-note.php?id=122684&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122684" title="58% like this...">
    7
    </div>
  </div>
  <a href="#122684" class="name">
  <strong class="user"><em>daniel dot peder at gmail dot com</em></strong></a><a class="genanchor" href="#122684"> &para;</a><div class="date" title="2018-04-30 09:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122684">
<div class="phpcode"><code><span class="html"><a href="http://sandbox.onlinephpfunctions.com/code/4d2cc3648aed58c0dad90c7868173a4775e5ba0c" rel="nofollow" target="_blank">http://sandbox.onlinephpfunctions.com/code/4d2cc3648aed58c0dad90c7868173a4775e5ba0c</a><br /><br />IMHO a bug or need feature change<br /><br />providing a object as a array index doesn't try to us __toString() method so some volatile object identifier is used to index the array, which is breaking any persistency. Type hinting solves that, but while other than "string" type hinting doesn't work on ob jects, the automatic conversion to string should be very intuitive.<br /><br />PS: tried to submit bug, but withot patch the bugs are ignored, unfortunately, I don't C coding<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">shop_product_id </span><span class="keyword">{<br />    <br />    protected </span><span class="default">$shop_name</span><span class="keyword">;<br />    protected </span><span class="default">$product_id</span><span class="keyword">;<br />    <br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$shop_name</span><span class="keyword">,</span><span class="default">$product_id</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shop_name </span><span class="keyword">= </span><span class="default">$shop_name</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">product_id </span><span class="keyword">= </span><span class="default">$product_id</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">__toString</span><span class="keyword">(){<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shop_name </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">product_id</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$shop_name </span><span class="keyword">= </span><span class="string">'Shop_A'</span><span class="keyword">;<br /></span><span class="default">$product_id </span><span class="keyword">= </span><span class="default">123</span><span class="keyword">;<br /></span><span class="default">$demo_id </span><span class="keyword">= </span><span class="default">$shop_name </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$product_id</span><span class="keyword">;<br /></span><span class="default">$demo_name </span><span class="keyword">= </span><span class="string">'Some product in shop A'</span><span class="keyword">;<br /><br /></span><span class="default">$all_products </span><span class="keyword">= [ </span><span class="default">$demo_id </span><span class="keyword">=&gt; </span><span class="default">$demo_name </span><span class="keyword">];<br /></span><span class="default">$pid </span><span class="keyword">= new </span><span class="default">shop_product_id</span><span class="keyword">( </span><span class="default">$shop_name</span><span class="keyword">, </span><span class="default">$product_id </span><span class="keyword">);<br /><br />echo </span><span class="string">"with type hinting: "</span><span class="keyword">;<br />echo (</span><span class="default">$demo_name </span><span class="keyword">=== </span><span class="default">$all_products</span><span class="keyword">[(string)</span><span class="default">$pid</span><span class="keyword">]) ? </span><span class="string">"ok" </span><span class="keyword">: </span><span class="string">"fail"</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="string">"without type hinting: "</span><span class="keyword">;<br />echo (</span><span class="default">$demo_name </span><span class="keyword">=== </span><span class="default">$all_products</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">]) ?  </span><span class="string">"ok" </span><span class="keyword">: </span><span class="string">"fail"</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55844">  <div class="votes">
    <div id="Vu55844">
    <a href="/manual/vote-note.php?id=55844&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55844">
    <a href="/manual/vote-note.php?id=55844&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55844" title="58% like this...">
    7
    </div>
  </div>
  <a href="#55844" class="name">
  <strong class="user"><em>martin dot goldinger at netserver dot ch</em></strong></a><a class="genanchor" href="#55844"> &para;</a><div class="date" title="2005-08-15 04:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55844">
<div class="phpcode"><code><span class="html">When you use sessions, its very important to keep the sessiondata small, due to low performance with unserialize. Every class shoud extend from this class. The result will be, that no null Values are written to the sessiondata. It will increase performance.<br /><br />&lt;?<br />class BaseObject<br />{<br />    function __sleep()<br />    {<br />        $vars = (array)$this;<br />        foreach ($vars as $key =&gt; $val)<br />        {<br />            if (is_null($val))<br />            {<br />                unset($vars[$key]);<br />            }<br />        }    <br />        return array_keys($vars);<br />    }<br />};<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="49413">  <div class="votes">
    <div id="Vu49413">
    <a href="/manual/vote-note.php?id=49413&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49413">
    <a href="/manual/vote-note.php?id=49413&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49413" title="53% like this...">
    5
    </div>
  </div>
  <a href="#49413" class="name">
  <strong class="user"><em>ddavenport at newagedigital dot com</em></strong></a><a class="genanchor" href="#49413"> &para;</a><div class="date" title="2005-01-26 11:09"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49413">
<div class="phpcode"><code><span class="html">One of the principles of OOP is encapsulation--the idea that an object should handle its own data and no others'.  Asking base classes to take care of subclasses' data, esp considering that a class can't possibly know how many dozens of ways it will be extended, is irresponsible and dangerous.<br /><br />Consider the following...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">SomeStupidStorageClass<br /></span><span class="keyword">{<br />  public function </span><span class="default">getContents</span><span class="keyword">(</span><span class="default">$pos</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">) { ...</span><span class="default">stuff</span><span class="keyword">... }<br />}<br /><br />class </span><span class="default">CryptedStorageClass </span><span class="keyword">extends </span><span class="default">SomeStupidStorageClass<br /></span><span class="keyword">{<br />  private </span><span class="default">$decrypted_block</span><span class="keyword">;<br />  public function </span><span class="default">getContents</span><span class="keyword">(</span><span class="default">$pos</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">) { ...</span><span class="default">decrypt</span><span class="keyword">... }<br />}<br /></span><span class="default">?&gt;<br /></span><br />If SomeStupidStorageClass decided to serialize its subclasses' data as well as its own, a portion of what was once an encrypted thingie could be stored, in the clear, wherever the thingie was stored.  Obviously, CryptedStorageClass would never have chosen this...but it had to either know how to serialize its parent class's data without calling parent::_sleep(), or let the base class do what it wanted to.<br /><br />Considering encapsulation again, no class should have to know how the parent handles its own private data.  And it certainly shouldn't have to worry that users will find a way to break access controls in the name of convenience.<br /><br />If a class wants both to have private/protected data and to survive serialization, it should have its own __sleep() method which asks the parent to report its own fields and then adds to the list if applicable.  Like so....<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">BetterClass<br /></span><span class="keyword">{<br />  private </span><span class="default">$content</span><span class="keyword">;<br /><br />  public function </span><span class="default">__sleep</span><span class="keyword">()<br />  {<br />    return array(</span><span class="string">'basedata1'</span><span class="keyword">, </span><span class="string">'basedata2'</span><span class="keyword">);<br />  }<br /><br />  public function </span><span class="default">getContents</span><span class="keyword">() { ...</span><span class="default">stuff</span><span class="keyword">... }<br />}<br /><br />class </span><span class="default">BetterDerivedClass </span><span class="keyword">extends </span><span class="default">BetterClass<br /></span><span class="keyword">{<br />  private </span><span class="default">$decrypted_block</span><span class="keyword">;<br /><br />  public function </span><span class="default">__sleep</span><span class="keyword">()<br />  {<br />    return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__sleep</span><span class="keyword">();<br />  }<br /><br />  public function </span><span class="default">getContents</span><span class="keyword">() { ...</span><span class="default">decrypt</span><span class="keyword">... }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The derived class has better control over its data, and we don't have to worry about something being stored that shouldn't be.</span></code></div>
  </div>
 </div>
  <div class="note" id="63863">  <div class="votes">
    <div id="Vu63863">
    <a href="/manual/vote-note.php?id=63863&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63863">
    <a href="/manual/vote-note.php?id=63863&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63863" title="54% like this...">
    4
    </div>
  </div>
  <a href="#63863" class="name">
  <strong class="user"><em>rayRO</em></strong></a><a class="genanchor" href="#63863"> &para;</a><div class="date" title="2006-04-02 09:55"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63863">
<div class="phpcode"><code><span class="html">If you use the Magical Method '__set()', be shure that the call of<br /><span class="default">&lt;?php<br />$myobject</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">[</span><span class="string">'myarray'</span><span class="keyword">] = </span><span class="string">'data'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>will not appear!<br /><br />For that u have to do it the fine way if you want to use __set Method ;)<br /><span class="default">&lt;?php<br />$myobject</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= array(</span><span class="string">'myarray' </span><span class="keyword">=&gt; </span><span class="string">'data'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />If a Variable is already set, the __set Magic Method already wont appear!<br /><br />My first solution was to use a Caller Class.<br />With that, i ever knew which Module i currently use!<br />But who needs it... :]<br />There are quiet better solutions for this...<br />Here's the Code:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Caller </span><span class="keyword">{<br />    public </span><span class="default">$caller</span><span class="keyword">;<br />    public </span><span class="default">$module</span><span class="keyword">;<br /><br />    function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$funcname</span><span class="keyword">, </span><span class="default">$args </span><span class="keyword">= array()) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setModuleInformation</span><span class="keyword">();<br /><br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">) &amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'call_user_func_array'</span><span class="keyword">))<br />            </span><span class="default">$return </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">, </span><span class="default">$funcname</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);<br />        else<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"Call to Function with call_user_func_array failed"</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">unsetModuleInformation</span><span class="keyword">();<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$callerClassName </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$callerModuleName </span><span class="keyword">= </span><span class="string">'Webboard'</span><span class="keyword">) {<br />        if (</span><span class="default">$callerClassName </span><span class="keyword">== </span><span class="default">false</span><span class="keyword">)<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'No Classname'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">module </span><span class="keyword">= </span><span class="default">$callerModuleName</span><span class="keyword">;<br /><br />        if (</span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$callerClassName</span><span class="keyword">))<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller </span><span class="keyword">= new </span><span class="default">$callerClassName</span><span class="keyword">();<br />        else<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Class not exists: \''</span><span class="keyword">.</span><span class="default">$callerClassName</span><span class="keyword">.</span><span class="string">'\''</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br /><br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">))<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setModuleInformation</span><span class="keyword">();<br />            if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">, </span><span class="string">'__init'</span><span class="keyword">))<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;</span><span class="default">__init</span><span class="keyword">();<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">unsetModuleInformation</span><span class="keyword">();<br />        }<br />        else<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Caller is no object!'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />    }<br /><br />    function </span><span class="default">__destruct</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setModuleInformation</span><span class="keyword">();<br />        if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">, </span><span class="string">'__deinit'</span><span class="keyword">))<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;</span><span class="default">__deinit</span><span class="keyword">();<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">unsetModuleInformation</span><span class="keyword">();<br />    }<br /><br />    function </span><span class="default">__isset</span><span class="keyword">(</span><span class="default">$isset</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setModuleInformation</span><span class="keyword">();<br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">))<br />            </span><span class="default">$return </span><span class="keyword">= isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;{</span><span class="default">$isset</span><span class="keyword">});<br />        else<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Caller is no object!'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">unsetModuleInformation</span><span class="keyword">();<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">__unset</span><span class="keyword">(</span><span class="default">$unset</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setModuleInformation</span><span class="keyword">();<br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">)) {<br />            if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;{</span><span class="default">$unset</span><span class="keyword">}))<br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;{</span><span class="default">$unset</span><span class="keyword">});<br />        }<br />        else<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Caller is no object!'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">unsetModuleInformation</span><span class="keyword">();<br />    }<br /><br />    function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$set</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setModuleInformation</span><span class="keyword">();<br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">))<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;{</span><span class="default">$set</span><span class="keyword">} = </span><span class="default">$val</span><span class="keyword">;<br />        else<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Caller is no object!'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">unsetModuleInformation</span><span class="keyword">();<br />    }<br /><br />    function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$get</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setModuleInformation</span><span class="keyword">();<br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">)) {<br />            if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;{</span><span class="default">$get</span><span class="keyword">}))<br />                </span><span class="default">$return </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;{</span><span class="default">$get</span><span class="keyword">};<br />            else<br />                </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        }<br />        else<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Caller is no object!'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">unsetModuleInformation</span><span class="keyword">();<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">setModuleInformation</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;</span><span class="default">module </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">module</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">unsetModuleInformation</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">caller</span><span class="keyword">-&gt;</span><span class="default">module </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// Well this can be a Config Class?<br /></span><span class="keyword">class </span><span class="default">Config </span><span class="keyword">{<br />    public </span><span class="default">$module</span><span class="keyword">;<br /><br />    public </span><span class="default">$test</span><span class="keyword">;<br /><br />    function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        print(</span><span class="string">'Constructor will have no Module Information... Use __init() instead!&lt;br /&gt;'</span><span class="keyword">);<br />        print(</span><span class="string">'--&gt; '</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">module</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">).</span><span class="string">' &lt;--'</span><span class="keyword">);<br />        print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />        print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= </span><span class="string">'123'</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">__init</span><span class="keyword">()<br />    {<br />        print(</span><span class="string">'Using of __init()!&lt;br /&gt;'</span><span class="keyword">);<br />        print(</span><span class="string">'--&gt; '</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">module</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">).</span><span class="string">' &lt;--'</span><span class="keyword">);<br />        print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />        print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />    }<br />    <br />    function </span><span class="default">testFunction</span><span class="keyword">(</span><span class="default">$test </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$test </span><span class="keyword">!= </span><span class="default">false</span><span class="keyword">)<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= </span><span class="default">$test</span><span class="keyword">;<br />    }<br />}<br /><br />echo(</span><span class="string">'&lt;pre&gt;'</span><span class="keyword">);<br /></span><span class="default">$wow </span><span class="keyword">= new </span><span class="default">Caller</span><span class="keyword">(</span><span class="string">'Config'</span><span class="keyword">, </span><span class="string">'Guestbook'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$wow</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">);<br />print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br /></span><span class="default">$wow</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= </span><span class="string">'456'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$wow</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">);<br />print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br /></span><span class="default">$wow</span><span class="keyword">-&gt;</span><span class="default">testFunction</span><span class="keyword">(</span><span class="string">'789'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$wow</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">);<br />print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />print(</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$wow</span><span class="keyword">-&gt;</span><span class="default">module</span><span class="keyword">);<br />echo(</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Outputs something Like:<br /><br />Constructor will have no Module Information... Use __init() instead!<br />--&gt;  &lt;--<br /><br />Using of __init()!<br />--&gt; Guestbook &lt;--<br /><br />123<br /><br />456<br /><br />789<br /><br />Guestbook</span></code></div>
  </div>
 </div>
  <div class="note" id="55806">  <div class="votes">
    <div id="Vu55806">
    <a href="/manual/vote-note.php?id=55806&amp;page=language.oop5.magic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55806">
    <a href="/manual/vote-note.php?id=55806&amp;page=language.oop5.magic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55806" title="53% like this...">
    3
    </div>
  </div>
  <a href="#55806" class="name">
  <strong class="user"><em>jeffxlevy at gmail dot com</em></strong></a><a class="genanchor" href="#55806"> &para;</a><div class="date" title="2005-08-13 06:26"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55806">
<div class="phpcode"><code><span class="html">Intriguing what happens when __sleep() and __wakeup() and sessions() are mixed. I had a hunch that, as session data is serialized, __sleep would be called when an object, or whatever, is stored in _SESSION. true. The same hunch applied when session_start() was called. Would __wakeup() be called? True. Very helpful, specifically as I'm building massive objects (well, lots of simple objects stored in sessions), and need lots of automated tasks (potentially) reloaded at "wakeup" time. (for instance, restarting a database session/connection).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.magic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.magic.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
