<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FAQ - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.namespaces.faq.php">
 <link rel="shorturl" href="https://www.php.net/namespaces.faq">
 <link rel="alternate" href="https://www.php.net/namespaces.faq" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.namespaces.rules.php">
 <link rel="next" href="https://www.php.net/manual/en/language.enumerations.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.namespaces.faq.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.namespaces.faq.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.namespaces.faq.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.namespaces.faq.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.namespaces.faq.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.namespaces.faq.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.namespaces.faq.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.namespaces.faq.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.namespaces.faq.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.namespaces.faq.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.namespaces.faq.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="FAQ: things you need to know about namespaces" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FAQ - Manual" />
<meta name="twitter:description" content="FAQ: things you need to know about namespaces" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FAQ - Manual" />
<meta itemprop="description" content="FAQ: things you need to know about namespaces" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="FAQ: things you need to know about namespaces" />

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
        <a href="language.enumerations.php">
          Enumerations &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.namespaces.rules.php">
          &laquo; Name resolution rules        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.namespaces.php'>Namespaces</a></li>      </ul>
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
            <option value='en/language.namespaces.faq.php' selected="selected">English</option>
            <option value='de/language.namespaces.faq.php'>German</option>
            <option value='es/language.namespaces.faq.php'>Spanish</option>
            <option value='fr/language.namespaces.faq.php'>French</option>
            <option value='it/language.namespaces.faq.php'>Italian</option>
            <option value='ja/language.namespaces.faq.php'>Japanese</option>
            <option value='pt_BR/language.namespaces.faq.php'>Brazilian Portuguese</option>
            <option value='ru/language.namespaces.faq.php'>Russian</option>
            <option value='tr/language.namespaces.faq.php'>Turkish</option>
            <option value='uk/language.namespaces.faq.php'>Ukrainian</option>
            <option value='zh/language.namespaces.faq.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.namespaces.faq" class="sect1">
  <h2 class="title">FAQ: things you need to know about namespaces</h2>
  
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
  <p class="para">
   This FAQ is split into two sections: common questions, and some specifics of
   implementation that are helpful to understand fully.
  </p>
  <p class="para">
   First, the common questions.
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.shouldicare" class="link">If I don&#039;t use namespaces, should
      I care about any of this?</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.globalclass" class="link">How do I use internal or global
      classes in a namespace?</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.innamespace" class="link">How do I use namespaces classes
      functions, or constants in their own namespace?</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.full" class="link">
       How does a name like <code class="literal">\my\name</code> or <code class="literal">\name</code>
       resolve?
      </a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.qualified" class="link">How does a name like
      <code class="literal">my\name</code> resolve?</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.shortname1" class="link">How does an unqualified class name
      like <code class="literal">name</code> resolve?</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.shortname2" class="link">How does an unqualified function
      name or unqualified constant name
      like <code class="literal">name</code> resolve?</a>
     </span>
    </li>
   </ol>
  </p>
  <p class="para">
   There are a few implementation details of the namespace implementations
   that are helpful to understand.
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.conflict" class="link">Import names must not conflict with
      classes defined in the same file.</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.nested" class="link">Nested namespaces are not allowed.
      </a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.quote" class="link">Dynamic namespace names (quoted
      identifiers) should escape backslash.</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.constants" class="link">Undefined Constants referenced
      using any backslash die with fatal error</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <a href="language.namespaces.faq.php#language.namespaces.faq.builtinconst" class="link">Cannot override special
      constants <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></a>
     </span>
    </li>
   </ol>
  </p>
  <div class="sect2" id="language.namespaces.faq.shouldicare">
   <h3 class="title">If I don&#039;t use namespaces, should I care about any of this?</h3>
   <p class="para">
    No. Namespaces do not affect any existing code in any way, or any
    as-yet-to-be-written code that does not contain namespaces. You can
    write this code if you wish:
   </p>
   <p class="para">
    <div class="example" id="example-397">
     <p><strong>Example #1 Accessing global classes outside a namespace</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">\stdClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    This is functionally equivalent to:
   </p>
   <p class="para">
    <div class="example" id="example-398">
     <p><strong>Example #2 Accessing global classes outside a namespace</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.globalclass">
   <h3 class="title">How do I use internal or global classes in a namespace?</h3>
   <p class="para">
    <div class="example" id="example-399">
     <p><strong>Example #3 Accessing internal classes in namespaces</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">\stdClass</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">\ArrayObject $parameter_type_example </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">\DirectoryIterator</span><span style="color: #007700">::</span><span style="color: #0000BB">CURRENT_AS_FILEINFO</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// extending an internal or global class<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyException </span><span style="color: #007700">extends </span><span style="color: #0000BB">\Exception </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.innamespace">
   <h3 class="title">
    How do I use namespaces classes, functions, or constants in their own
    namespace?
   </h3>
   <p class="para">
    <div class="example" id="example-400">
     <p><strong>Example #4 Accessing internal classes, functions or constants in namespaces</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /><br />class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{}<br /><br /></span><span style="color: #FF8000">// using a class from the current namespace as a parameter type<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">MyClass $parameter_type_example </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {}<br /></span><span style="color: #FF8000">// another way to use a class from the current namespace as a parameter type<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">\foo\MyClass $parameter_type_example </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {}<br /><br /></span><span style="color: #FF8000">// extending a class from the current namespace<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Extended </span><span style="color: #007700">extends </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{}<br /><br /></span><span style="color: #FF8000">// accessing a global function<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">\globalfunc</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// accessing a global constant<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">\INI_ALL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.full">
   <h3 class="title">
     How does a name like <code class="literal">\my\name</code> or <code class="literal">\name</code>
     resolve?
   </h3>
   <p class="para">
    Names that begin with a <code class="literal">\</code> always resolve to what they
    look like, so <code class="literal">\my\name</code> is in fact <code class="literal">my\name</code>,
    and <code class="literal">\Exception</code> is <code class="literal">Exception</code>.
    <div class="example" id="example-401">
     <p><strong>Example #5 Fully Qualified names</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">\my\name</span><span style="color: #007700">(); </span><span style="color: #FF8000">// instantiates "my\name" class<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">\strlen</span><span style="color: #007700">(</span><span style="color: #DD0000">'hi'</span><span style="color: #007700">); </span><span style="color: #FF8000">// calls function "strlen"<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">\INI_ALL</span><span style="color: #007700">; </span><span style="color: #FF8000">// $a is set to the value of constant "INI_ALL"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.qualified">
   <h3 class="title">How does a name like <code class="literal">my\name</code> resolve?</h3>
   <p class="para">
    Names that contain a backslash but do not begin with a backslash like
    <code class="literal">my\name</code> can be resolved in 2 different ways.
   </p>
   <p class="para">
    If there is
    an import statement that aliases another name to <code class="literal">my</code>, then
    the import alias is applied to the <code class="literal">my</code> in <code class="literal">my\name</code>.
   </p>
   <p class="para">
    Otherwise, the current namespace name is prepended to <code class="literal">my\name</code>.
   </p>
   <p class="para">
    <div class="example" id="example-402">
     <p><strong>Example #6 Qualified names</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">blah\blah </span><span style="color: #007700">as </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">my\name</span><span style="color: #007700">(); </span><span style="color: #FF8000">// instantiates "foo\my\name" class<br /></span><span style="color: #0000BB">foo\bar</span><span style="color: #007700">::</span><span style="color: #0000BB">name</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls static method "name" in class "blah\blah\bar"<br /></span><span style="color: #0000BB">my\bar</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls function "foo\my\bar"<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">my\BAR</span><span style="color: #007700">; </span><span style="color: #FF8000">// sets $a to the value of constant "foo\my\BAR"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.shortname1">
   <h3 class="title">How does an unqualified class name like <code class="literal">name</code> resolve?</h3>
   <p class="para">
    Class names that do not contain a backslash like
    <code class="literal">name</code> can be resolved in 2 different ways.
   </p>
   <p class="para">
    If there is
    an import statement that aliases another name to <code class="literal">name</code>, then
    the import alias is applied.
   </p>
   <p class="para">
    Otherwise, the current namespace name is prepended to <code class="literal">name</code>.
   </p>
   <p class="para">
    <div class="example" id="example-403">
     <p><strong>Example #7 Unqualified class names</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">blah\blah </span><span style="color: #007700">as </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">name</span><span style="color: #007700">(); </span><span style="color: #FF8000">// instantiates "foo\name" class<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">::</span><span style="color: #0000BB">name</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls static method "name" in class "blah\blah"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.shortname2">
   <h3 class="title">
    How does an unqualified function name or unqualified constant name
    like <code class="literal">name</code> resolve?
   </h3>
   <p class="para">
    Function or constant names that do not contain a backslash like
    <code class="literal">name</code> can be resolved in 2 different ways.
   </p>
   <p class="para">
    First, the current namespace name is prepended to <code class="literal">name</code>.
   </p>
   <p class="para">
    Finally, if the constant or function <code class="literal">name</code> does not exist
    in the current namespace, a global constant or function <code class="literal">name</code>
    is used if it exists.
   </p>
   <p class="para">
    <div class="example" id="example-404">
     <p><strong>Example #8 Unqualified function or constant names</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">blah\blah </span><span style="color: #007700">as </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /><br />const </span><span style="color: #0000BB">FOO </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">my</span><span style="color: #007700">() {}<br />function </span><span style="color: #0000BB">foo</span><span style="color: #007700">() {}<br />function </span><span style="color: #0000BB">sort</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$a</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">\sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">); </span><span style="color: #FF8000">// calls the global function "sort"<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">array_flip</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br />    return </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">my</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls "foo\my"<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #DD0000">'hi'</span><span style="color: #007700">); </span><span style="color: #FF8000">// calls global function "strlen" because "foo\strlen" does not exist<br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">); </span><span style="color: #FF8000">// calls function "foo\sort"<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">foo</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls function "foo\foo" - import is not applied<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// sets $a to value of constant "foo\FOO" - import is not applied<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">INI_ALL</span><span style="color: #007700">; </span><span style="color: #FF8000">// sets $b to value of global constant "INI_ALL"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.conflict">
   <h3 class="title">Import names must not conflict with classes defined in the same file.</h3>
   <p class="para">
    The following script combinations are legal:
    <div class="informalexample">
     <p class="simpara">file1.php</p>
     <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">my\stuff</span><span style="color: #007700">;<br />class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="simpara">another.php</p>
     <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">another</span><span style="color: #007700">;<br />class </span><span style="color: #0000BB">thing </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="simpara">file2.php</p>
     <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">my\stuff</span><span style="color: #007700">;<br />include </span><span style="color: #DD0000">'file1.php'</span><span style="color: #007700">;<br />include </span><span style="color: #DD0000">'another.php'</span><span style="color: #007700">;<br /><br />use </span><span style="color: #0000BB">another\thing </span><span style="color: #007700">as </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates class "thing" from namespace another<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    There is no name conflict, even though the class <code class="literal">MyClass</code> exists
    within the <code class="literal">my\stuff</code> namespace, because the MyClass definition is
    in a separate file. However, the next example causes a fatal error on name conflict
    because MyClass is defined in the same file as the use statement.
    <div class="informalexample">
     <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">my\stuff</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">another\thing </span><span style="color: #007700">as </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br />class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{} </span><span style="color: #FF8000">// fatal error: MyClass conflicts with import statement<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.nested">
   <h3 class="title">Nested namespaces are not allowed.</h3>
   <p class="para">
    PHP does not allow nesting namespaces
    <div class="informalexample">
     <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">my\stuff </span><span style="color: #007700">{<br />    namespace </span><span style="color: #0000BB">nested </span><span style="color: #007700">{<br />        class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{}<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    However, it is easy to simulate nested namespaces like so:
    <div class="informalexample">
     <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">my\stuff\nested </span><span style="color: #007700">{<br />    class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{}<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect2" id="language.namespaces.faq.quote">
   <h3 class="title">Dynamic namespace names (quoted identifiers) should escape backslash</h3>
   <p class="para">
    It is very important to realize that because the backslash is used as an escape character
    within strings, it should always be doubled when used inside a string. Otherwise
    there is a risk of unintended consequences:
    <div class="example" id="example-405">
     <p><strong>Example #9 Dangers of using namespaced names inside a double-quoted string</strong></p>
     <div class="example-contents">
      <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"dangerous\name"</span><span style="color: #007700">; </span><span style="color: #FF8000">// \n is a newline inside double quoted strings!<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">'not\at\all\dangerous'</span><span style="color: #007700">; </span><span style="color: #FF8000">// no problems here.<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    Inside a single-quoted string, the backslash escape sequence is much safer to use, but it
    is still recommended practice to escape backslashes in all strings as a best practice.
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.constants">
   <h3 class="title">Undefined Constants referenced using any backslash die with fatal error</h3>
   <p class="para">
    Any undefined constant that is unqualified like <code class="literal">FOO</code> will
    produce a notice explaining that PHP assumed <code class="literal">FOO</code> was the value
    of the constant. Any constant, qualified or fully qualified, that contains a
    backslash will produce a fatal error if not found.
    <div class="example" id="example-406">
     <p><strong>Example #10 Undefined constants</strong></p>
     <div class="example-contents">
      <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">bar</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// produces notice - undefined constants "FOO" assumed "FOO";<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">\FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// fatal error, undefined namespace constant FOO<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">Bar\FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// fatal error, undefined namespace constant bar\Bar\FOO<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">\Bar\FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// fatal error, undefined namespace constant Bar\FOO<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="sect2" id="language.namespaces.faq.builtinconst">
   <h3 class="title">Cannot override special constants <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></h3>
   <p class="para">
    Any attempt to define a namespaced constant that is a special, built-in constant
    results in a fatal error
    <div class="example" id="example-407">
     <p><strong>Example #11 Undefined constants</strong></p>
     <div class="example-contents">
      <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">bar</span><span style="color: #007700">;<br />const </span><span style="color: #0000BB">NULL </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #FF8000">// fatal error;<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">true </span><span style="color: #007700">= </span><span style="color: #DD0000">'stupid'</span><span style="color: #007700">; </span><span style="color: #FF8000">// also fatal error;<br />// etc.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/namespaces.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.namespaces.faq%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.namespaces.faq&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.faq.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108236">  <div class="votes">
    <div id="Vu108236">
    <a href="/manual/vote-note.php?id=108236&amp;page=language.namespaces.faq&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108236">
    <a href="/manual/vote-note.php?id=108236&amp;page=language.namespaces.faq&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108236" title="66% like this...">
    16
    </div>
  </div>
  <a href="#108236" class="name">
  <strong class="user"><em>manolachef at gmail dot com</em></strong></a><a class="genanchor" href="#108236"> &para;</a><div class="date" title="2012-04-10 02:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108236">
<div class="phpcode"><code><span class="html">There is a way to define a namespaced constant that is a special, built-in constant, using define function and setting the third parameter case_insensitive to false:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\NULL'</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">); </span><span class="comment">// defines the constant NULL in the current namespace<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">); </span><span class="comment">// will show 10<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">); </span><span class="comment">// will show NULL<br /></span><span class="default">?&gt;<br /></span><br />  No need to specify the namespace in your call to define(), like it happens usually<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">INI_ALL</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">); </span><span class="comment">// produces notice - Constant INI_ALL already defined. But:<br /><br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\INI_ALL'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">); </span><span class="comment">// defines the constant INI_ALL in the current namespace<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">INI_ALL</span><span class="keyword">); </span><span class="comment">// will show string(3)"bar". Nothing unespected so far. But:<br /><br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'NULL'</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">); </span><span class="comment">// defines the constant NULL in the current namespace...<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">); </span><span class="comment">// will show 10<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">); </span><span class="comment">// will show NULL<br /></span><span class="default">?&gt;<br /></span><br />  If the parameter case_insensitive is set to true<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">foo</span><span class="keyword">;<br /></span><span class="default">define </span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\NULL'</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// produces notice - Constant null already defined<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119983">  <div class="votes">
    <div id="Vu119983">
    <a href="/manual/vote-note.php?id=119983&amp;page=language.namespaces.faq&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119983">
    <a href="/manual/vote-note.php?id=119983&amp;page=language.namespaces.faq&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119983" title="78% like this...">
    8
    </div>
  </div>
  <a href="#119983" class="name">
  <strong class="user"><em>shaun at slickdesign dot com dot au</em></strong></a><a class="genanchor" href="#119983"> &para;</a><div class="date" title="2016-10-04 07:20"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119983">
<div class="phpcode"><code><span class="html">When creating classes or calling static methods from within namespaces using variables, you need to keep in mind that they require the full namespace in order for the appropriate class to be used; you CANNOT use an alias or short name, even if it is called within the same namespace. Neglecting to take this into account can cause your code to use the wrong class, throw a fatal missing class exception, or throw errors or warnings.<br /><br />In these cases, you can use the magic constant __NAMESPACE__, or specify the full namespace and class name directly. The function class_exists also requires the full namespace and class name, and can be used to ensure that a fatal error won't be thrown due to missing classes.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">Foo</span><span class="keyword">;<br />class </span><span class="default">Bar </span><span class="keyword">{<br />    public static function </span><span class="default">test</span><span class="keyword">() {<br />        return </span><span class="default">get_called_class</span><span class="keyword">();<br />    }<br />}<br /><br />namespace </span><span class="default">Foo\Foo</span><span class="keyword">;<br />class </span><span class="default">Bar </span><span class="keyword">extends </span><span class="default">\Foo\Bar </span><span class="keyword">{<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">Bar</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">() ); </span><span class="comment">// string(11) "Foo\Foo\Bar"<br /><br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'Foo\Bar'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$bar</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">() ); </span><span class="comment">// string(7) "Foo\Bar"<br /><br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\Bar'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$bar</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">() ); </span><span class="comment">// string(11) "Foo\Foo\Bar"<br /><br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'Bar'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$bar</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">() ); </span><span class="comment">// FATAL ERROR: Class 'Bar' not found or Incorrect class \Bar used</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119234">  <div class="votes">
    <div id="Vu119234">
    <a href="/manual/vote-note.php?id=119234&amp;page=language.namespaces.faq&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119234">
    <a href="/manual/vote-note.php?id=119234&amp;page=language.namespaces.faq&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119234" title="83% like this...">
    4
    </div>
  </div>
  <a href="#119234" class="name">
  <strong class="user"><em>teohad at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#119234"> &para;</a><div class="date" title="2016-04-24 09:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119234">
<div class="phpcode"><code><span class="html">[Editor's note: that behavior is caused by a bug in PHP 7.0, which has been fixed as of PHP 7.0.7.]
<br />
<br />Regarding the entry "Import names cannot conflict with classes defined in the same file".
<br />- I found that since PHP 7.0 this is no longer the case.
<br />In PHP 7.0 you can have a class with a name that matches an imported class (or namespace or both at the same time).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">namespace </span><span class="default">ns1 </span><span class="keyword">{
<br />  class </span><span class="default">ns1 </span><span class="keyword">{
<br />    public static function </span><span class="default">write</span><span class="keyword">() {
<br />      echo </span><span class="string">"ns1\\ns1::write()\n"</span><span class="keyword">;
<br />    }
<br />  }
<br />}
<br />
<br />namespace </span><span class="default">ns1\ns1 </span><span class="keyword">{
<br />  class </span><span class="default">ns1c </span><span class="keyword">{
<br />    public static function </span><span class="default">write</span><span class="keyword">() {
<br />      echo </span><span class="string">"ns1\\ns1\\ns1c::write()\n"</span><span class="keyword">;
<br />    }
<br />  }
<br />}
<br />
<br />namespace </span><span class="default">ns2 </span><span class="keyword">{
<br />  use </span><span class="default">ns1\ns1 </span><span class="keyword">as </span><span class="default">ns1</span><span class="keyword">; </span><span class="comment">// both a class in ns1, and a namespace ns1\ns1
<br />    
<br />  // the next class causes fatal error in php 5.6, not in 7.0
<br />  </span><span class="keyword">class </span><span class="default">ns1 </span><span class="keyword">{
<br />    public static function </span><span class="default">write</span><span class="keyword">() {
<br />      echo </span><span class="string">"ns2\\ns1::write()\n"</span><span class="keyword">;
<br />    }
<br />  }
<br />    
<br />  </span><span class="default">ns1</span><span class="keyword">::</span><span class="default">write</span><span class="keyword">(); </span><span class="comment">// calls imported ns1\ns1::write()
<br />  </span><span class="default">ns1\ns1c</span><span class="keyword">::</span><span class="default">write</span><span class="keyword">(); </span><span class="comment">// calls imported ns1\ns1\ns1c::write()
<br />  </span><span class="default">namespace\ns1</span><span class="keyword">::</span><span class="default">write</span><span class="keyword">(); </span><span class="comment">// calls ns2\ns1::write()
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127241">  <div class="votes">
    <div id="Vu127241">
    <a href="/manual/vote-note.php?id=127241&amp;page=language.namespaces.faq&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127241">
    <a href="/manual/vote-note.php?id=127241&amp;page=language.namespaces.faq&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127241" title="75% like this...">
    4
    </div>
  </div>
  <a href="#127241" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#127241"> &para;</a><div class="date" title="2022-07-09 10:18"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127241">
<div class="phpcode"><code><span class="html">Just like class names currently namespaces are not case sensitive. So no errors will be shown here:<br /><br /><span class="default">&lt;?php </span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br />namespace </span><span class="default">Foo</span><span class="keyword">;<br />class </span><span class="default">Bar </span><span class="keyword">{<br />  public function </span><span class="default">__construct</span><span class="keyword">() {<br />    echo </span><span class="string">'Map constructed'</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$foobar </span><span class="keyword">= new </span><span class="default">\foo\bar</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116945">  <div class="votes">
    <div id="Vu116945">
    <a href="/manual/vote-note.php?id=116945&amp;page=language.namespaces.faq&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116945">
    <a href="/manual/vote-note.php?id=116945&amp;page=language.namespaces.faq&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116945" title="64% like this...">
    8
    </div>
  </div>
  <a href="#116945" class="name">
  <strong class="user"><em>phpcoder</em></strong></a><a class="genanchor" href="#116945"> &para;</a><div class="date" title="2015-03-25 01:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116945">
<div class="phpcode"><code><span class="html">Regarding "Neither functions nor constants can be imported via the use statement." Actually you can do it in PHP 5.6+:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// importing a function (PHP 5.6+)<br /></span><span class="keyword">use function </span><span class="default">My\Full\functionName</span><span class="keyword">;<br /><br /></span><span class="comment">// aliasing a function (PHP 5.6+)<br /></span><span class="keyword">use function </span><span class="default">My\Full\functionName </span><span class="keyword">as </span><span class="default">func</span><span class="keyword">;<br /><br /></span><span class="comment">// importing a constant (PHP 5.6+)<br /></span><span class="keyword">use const </span><span class="default">My\Full\CONSTANT</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112807">  <div class="votes">
    <div id="Vu112807">
    <a href="/manual/vote-note.php?id=112807&amp;page=language.namespaces.faq&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112807">
    <a href="/manual/vote-note.php?id=112807&amp;page=language.namespaces.faq&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112807" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#112807" class="name">
  <strong class="user"><em>okaresz</em></strong></a><a class="genanchor" href="#112807"> &para;</a><div class="date" title="2013-07-25 08:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112807">
<div class="phpcode"><code><span class="html">To correct manolachef's answer: define() ALWAYS defines constants in the GLOBAL namespace.<br /><br />As nl-x at bita dot nl states in the note at <a href="http://www.php.net/manual/en/function.define.php," rel="nofollow" target="_blank">http://www.php.net/manual/en/function.define.php,</a> the constant "NULL" can be defined with define() case-sensitively, but can only be retrieved with constant(), leaving the meaning of NULL uppercase keyword as the only value of the type null.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.namespaces.faq&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.faq.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.namespaces.php">Namespaces</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.namespaces.rationale.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definition.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nested.php" title="Sub-&#8203;namespaces">Sub-&#8203;namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definitionmultiple.php" title="Defining multiple namespaces in the same file">Defining multiple namespaces in the same file</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.dynamic.php" title="Namespaces and dynamic language features">Namespaces and dynamic language features</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nsconstants.php" title="namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;">namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.importing.php" title="Aliasing and Importing">Aliasing and Importing</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.global.php" title="Global space">Global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.fallback.php" title="Fallback to global space">Fallback to global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.rules.php" title="Name resolution rules">Name resolution rules</a>
                        </li>
                                                <li class="current">
                            <a href="language.namespaces.faq.php" title="FAQ">FAQ</a>
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
