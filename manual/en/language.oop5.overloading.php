<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Overloading - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.overloading.php">
 <link rel="shorturl" href="https://www.php.net/oop5.overloading">
 <link rel="alternate" href="https://www.php.net/oop5.overloading" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.anonymous.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.iterations.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.overloading.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.overloading.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.overloading.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.overloading.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.overloading.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.overloading.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.overloading.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.overloading.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.overloading.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.overloading.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.overloading.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Overloading" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Overloading - Manual" />
<meta name="twitter:description" content="Overloading" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Overloading - Manual" />
<meta itemprop="description" content="Overloading" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Overloading" />

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
        <a href="language.oop5.iterations.php">
          Object Iteration &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.anonymous.php">
          &laquo; Anonymous classes        </a>
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
            <option value='en/language.oop5.overloading.php' selected="selected">English</option>
            <option value='de/language.oop5.overloading.php'>German</option>
            <option value='es/language.oop5.overloading.php'>Spanish</option>
            <option value='fr/language.oop5.overloading.php'>French</option>
            <option value='it/language.oop5.overloading.php'>Italian</option>
            <option value='ja/language.oop5.overloading.php'>Japanese</option>
            <option value='pt_BR/language.oop5.overloading.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.overloading.php'>Russian</option>
            <option value='tr/language.oop5.overloading.php'>Turkish</option>
            <option value='uk/language.oop5.overloading.php'>Ukrainian</option>
            <option value='zh/language.oop5.overloading.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.overloading" class="sect1">
  <h2 class="title">Overloading</h2>

  <p class="para">
   Overloading in PHP provides means to dynamically
   <q class="quote">create</q> properties and methods.
   These dynamic entities are processed via magic methods
   one can establish in a class for various action types.
  </p>

  <p class="para">
   The overloading methods are invoked when interacting with
   properties or methods that have not been declared or are not
   <a href="language.oop5.visibility.php" class="link">visible</a> in
   the current scope. The rest of this section will use the terms
   <q class="quote">inaccessible properties</q> and <q class="quote">inaccessible
   methods</q> to refer to this combination of declaration
   and visibility.
  </p>

  <p class="para">
   All overloading methods must be defined as <code class="literal">public</code>.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    None of the arguments of these magic methods can be
    <a href="functions.arguments.php#functions.arguments.by-reference" class="link">passed by
    reference</a>.
   </p>
  </p></blockquote>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    PHP&#039;s interpretation of <q class="quote">overloading</q> is
    different than most object-oriented languages. Overloading
    traditionally provides the ability to have multiple methods
    with the same name but different quantities and types of
    arguments.
   </p>
  </p></blockquote>

  <div class="sect2" id="language.oop5.overloading.members">
   <h3 class="title">Property overloading</h3>

   <div class="methodsynopsis dc-description" id="object.set">
    <span class="modifier">public</span> <span class="methodname"><strong>__set</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   <div class="methodsynopsis dc-description" id="object.get"><span class="modifier">public</span> <span class="methodname"><strong>__get</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

   <div class="methodsynopsis dc-description" id="object.isset"><span class="modifier">public</span> <span class="methodname"><strong>__isset</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   <div class="methodsynopsis dc-description" id="object.unset"><span class="modifier">public</span> <span class="methodname"><strong>__unset</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


   <p class="para">
    <a href="language.oop5.overloading.php#object.set" class="link">__set()</a> is run when writing data to
    inaccessible (protected or private) or non-existing properties.
   </p>

   <p class="para">
    <a href="language.oop5.overloading.php#object.get" class="link">__get()</a> is utilized for reading data from
    inaccessible (protected or private) or non-existing properties.
   </p>

   <p class="para">
    <a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a> is triggered by calling
    <span class="function"><a href="function.isset.php" class="function">isset()</a></span> or <span class="function"><a href="function.empty.php" class="function">empty()</a></span>
    on inaccessible (protected or private) or non-existing properties.
   </p>

   <p class="para">
    <a href="language.oop5.overloading.php#object.unset" class="link">__unset()</a> is invoked when
    <span class="function"><a href="function.unset.php" class="function">unset()</a></span> is used on inaccessible (protected or private)
    or non-existing properties.
   </p>

   <p class="para">
    The <var class="varname">$name</var> argument is the name of the
    property being interacted with. The <a href="language.oop5.overloading.php#object.set" class="link">__set()</a>
    method&#039;s <var class="varname">$value</var> argument specifies the
    value the <var class="varname">$name</var>&#039;ed property should be set
    to.
   </p>

   <p class="para">
    Property overloading only works in object context. These magic
    methods will not be triggered in static context. Therefore
    these methods should not be declared
    <a href="language.oop5.static.php" class="link">static</a>.
    A warning is issued if one of the magic overloading 
    methods is declared <code class="literal">static</code>.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     The return value of <a href="language.oop5.overloading.php#object.set" class="link">__set()</a> is ignored
     because of the way PHP processes the assignment operator.
     Similarly, <a href="language.oop5.overloading.php#object.get" class="link">__get()</a> is never called when
     chaining assignments together like this:
     <code class="literal"><div class="annotation-interactive cdata"><pre> $a = $obj-&gt;b = 8; </pre></div></code>
    </p>
   </p></blockquote>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     PHP will not call an overloaded method from within the same overloaded method.
     That means, for example, writing <code class="code">return $this-&gt;foo</code> inside of
     <a href="language.oop5.overloading.php#object.get" class="link">__get()</a> will return <code class="literal">null</code>
     and raise an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> if there is no <code class="literal">foo</code> property defined,
     rather than calling <a href="language.oop5.overloading.php#object.get" class="link">__get()</a> a second time.
     However, overload methods may invoke other overload methods implicitly (such as
     <a href="language.oop5.overloading.php#object.set" class="link">__set()</a> triggering <a href="language.oop5.overloading.php#object.get" class="link">__get()</a>).
    </p>
   </p></blockquote>

   <div class="example" id="example-346">
    <p><strong>Example #1 
     Overloading properties via the <a href="language.oop5.overloading.php#object.get" class="link">__get()</a>,
     <a href="language.oop5.overloading.php#object.set" class="link">__set()</a>, <a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a>
     and <a href="language.oop5.overloading.php#object.unset" class="link">__unset()</a> methods
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">PropertyTest<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">/**  Location for overloaded data.  */<br />    </span><span style="color: #007700">private </span><span style="color: #0000BB">$data </span><span style="color: #007700">= array();<br /><br />    </span><span style="color: #FF8000">/**  Overloading not used on declared properties.  */<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">$declared </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">/**  Overloading only used on this when accessed outside the class.  */<br />    </span><span style="color: #007700">private </span><span style="color: #0000BB">$hidden </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__set</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #DD0000">"Setting '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">' to '</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">'\n"</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">] = </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__get</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #DD0000">"Getting '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">'\n"</span><span style="color: #007700">;<br />        if (</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">)) {<br />            return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />        }<br /><br />        </span><span style="color: #0000BB">$trace </span><span style="color: #007700">= </span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(<br />            </span><span style="color: #DD0000">'Undefined property via __get(): ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$name </span><span style="color: #007700">.<br />            </span><span style="color: #DD0000">' in ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #DD0000">'file'</span><span style="color: #007700">] .<br />            </span><span style="color: #DD0000">' on line ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #DD0000">'line'</span><span style="color: #007700">],<br />            </span><span style="color: #0000BB">E_USER_NOTICE</span><span style="color: #007700">);<br />        return </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__isset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #DD0000">"Is '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">' set?\n"</span><span style="color: #007700">;<br />        return isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />    }<br /><br />    public function </span><span style="color: #0000BB">__unset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #DD0000">"Unsetting '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">'\n"</span><span style="color: #007700">;<br />        unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />    }<br /><br />    </span><span style="color: #FF8000">/**  Not a magic method, just here for example.  */<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">getHidden</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hidden</span><span style="color: #007700">;<br />    }<br />}<br /><br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">PropertyTest</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">a </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">a</span><span style="color: #007700">));<br />unset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">a</span><span style="color: #007700">));<br />echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">declared </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"Let's experiment with the private property named 'hidden':\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Privates are visible inside the class, so __get() not used...\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHidden</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Privates not visible outside of class, so __get() is used...\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hidden </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Setting &#039;a&#039; to &#039;1&#039;
Getting &#039;a&#039;
1

Is &#039;a&#039; set?
bool(true)
Unsetting &#039;a&#039;
Is &#039;a&#039; set?
bool(false)

1

Let&#039;s experiment with the private property named &#039;hidden&#039;:
Privates are visible inside the class, so __get() not used...
2
Privates not visible outside of class, so __get() is used...
Getting &#039;hidden&#039;


Notice:  Undefined property via __get(): hidden in &lt;file&gt; on line 70 in &lt;file&gt; on line 29
</pre></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.overloading.methods">
   <h3 class="title">Method overloading</h3>

   <div class="methodsynopsis dc-description" id="object.call">
    <span class="modifier">public</span> <span class="methodname"><strong>__call</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$arguments</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

   <div class="methodsynopsis dc-description" id="object.callstatic"><span class="modifier">public static</span> <span class="methodname"><strong>__callStatic</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$arguments</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>


   <p class="para">
    <a href="language.oop5.overloading.php#object.call" class="link">__call()</a> is triggered when invoking
    inaccessible methods in an object context.
   </p>

   <p class="para">
    <a href="language.oop5.overloading.php#object.callstatic" class="link">__callStatic()</a> is triggered when invoking
    inaccessible methods in a static context.
   </p>

   <p class="para">
    The <var class="varname">$name</var> argument is the name of the
    method being called. The <var class="varname">$arguments</var>
    argument is an enumerated array containing the parameters
    passed to the <var class="varname">$name</var>&#039;ed method.
   </p>

   <div class="example" id="example-347">
    <p><strong>Example #2 
     Overloading methods via the <a href="language.oop5.overloading.php#object.call" class="link">__call()</a>
     and <a href="language.oop5.overloading.php#object.callstatic" class="link">__callStatic()</a> methods
    </strong></p>
    <div class="example-contents">
  <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MethodTest<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__call</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">$arguments</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #FF8000">// Note: value of $name is case sensitive.<br />        </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Calling object method '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">' "<br />             </span><span style="color: #007700">. </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">', '</span><span style="color: #007700">, </span><span style="color: #0000BB">$arguments</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br /><br />    public static function </span><span style="color: #0000BB">__callStatic</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">$arguments</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #FF8000">// Note: value of $name is case sensitive.<br />        </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Calling static method '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">' "<br />             </span><span style="color: #007700">. </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">', '</span><span style="color: #007700">, </span><span style="color: #0000BB">$arguments</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">MethodTest</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runTest</span><span style="color: #007700">(</span><span style="color: #DD0000">'in object context'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">MethodTest</span><span style="color: #007700">::</span><span style="color: #0000BB">runTest</span><span style="color: #007700">(</span><span style="color: #DD0000">'in static context'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Calling object method &#039;runTest&#039; in object context
Calling static method &#039;runTest&#039; in static context
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
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/overloading.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.overloading%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.overloading&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.overloading.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108040">  <div class="votes">
    <div id="Vu108040">
    <a href="/manual/vote-note.php?id=108040&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108040">
    <a href="/manual/vote-note.php?id=108040&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108040" title="84% like this...">
    392
    </div>
  </div>
  <a href="#108040" class="name">
  <strong class="user"><em>theaceofthespade at gmail dot com</em></strong></a><a class="genanchor" href="#108040"> &para;</a><div class="date" title="2012-03-23 09:35"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108040">
<div class="phpcode"><code><span class="html">A word of warning!  It may seem obvious, but remember, when deciding whether to use __get, __set, and __call as a way to access the data in your class (as opposed to hard-coding getters and setters), keep in mind that this will prevent any sort of autocomplete, highlighting, or documentation that your ide mite do.<br /><br />Furthermore, it beyond personal preference when working with other people.  Even without an ide, it can be much easier to go through and look at hardcoded member and method definitions in code, than having to sift through code and piece together the method/member names that are assembled in __get and __set.<br /><br />If you still decide to use __get and __set for everything in your class, be sure to include detailed comments and documenting, so that the people you are working with (or the people who inherit the code from you at a later date) don't have to waste time interpreting your code just to be able to use it.</span></code></div>
  </div>
 </div>
  <div class="note" id="119407">  <div class="votes">
    <div id="Vu119407">
    <a href="/manual/vote-note.php?id=119407&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119407">
    <a href="/manual/vote-note.php?id=119407&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119407" title="83% like this...">
    283
    </div>
  </div>
  <a href="#119407" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#119407"> &para;</a><div class="date" title="2016-05-29 10:13"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119407">
<div class="phpcode"><code><span class="html">First off all, if you read this, please upvote the first comment on this list that states that “overloading” is a bad term for this behaviour. Because it REALLY is a bad name. You’re giving new definition to an already accepted IT-branch terminology.<br /><br />Second, I concur with all criticism you will read about this functionality. Just as naming it “overloading”, the functionality is also very bad practice. Please don’t use this in a production environment. To be honest, avoid to use it at all. Especially if you are a beginner at PHP. It can make your code react very unexpectedly. In which case you MIGHT be learning invalid coding!<br /><br />And last, because of __get, __set and __call the following code executes. Which is abnormal behaviour. And can cause a lot of problems/bugs.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">BadPractice </span><span class="keyword">{<br />  </span><span class="comment">// Two real properties<br />  </span><span class="keyword">public </span><span class="default">$DontAllowVariableNameWithTypos </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />  protected </span><span class="default">$Number </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="comment">// One private method<br />  </span><span class="keyword">private function </span><span class="default">veryPrivateMethod</span><span class="keyword">() { }<br />  </span><span class="comment">// And three very magic methods that will make everything look inconsistent<br />  // with all you have ever learned about PHP.<br />  </span><span class="keyword">public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) {}<br />  public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) {}<br />  public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) {}<br />}<br /><br /></span><span class="comment">// Let's see our BadPractice in a production environment!<br /></span><span class="default">$UnexpectedBehaviour </span><span class="keyword">= new </span><span class="default">BadPractice</span><span class="keyword">;<br /><br /></span><span class="comment">// No syntax highlighting on most IDE's<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">SynTaxHighlighting </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br /></span><span class="comment">// No autocompletion on most IDE's<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">AutoCompletion </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br /></span><span class="comment">// Which will lead to problems waiting to happen<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">DontAllowVariableNameWithTyphos </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// see if below<br /><br />// Get, Set and Call anything you want!<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">EveryPosibleMethodCallAllowed</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">, </span><span class="string">'Why Not?'</span><span class="keyword">);<br /><br /></span><span class="comment">// And sure, why not use the most illegal property names you can think off<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;{</span><span class="string">'100%Illegal+Names'</span><span class="keyword">} = </span><span class="string">'allowed'</span><span class="keyword">;<br /><br /></span><span class="comment">// This Very confusing syntax seems to allow access to $Number but because of<br />// the lowered visibility it goes to __set()<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">Number </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /><br /></span><span class="comment">// We can SEEM to increment it too! (that's really dynamic! :-) NULL++ LMAO<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">Number</span><span class="keyword">++;<br /><br /></span><span class="comment">// this ofcourse outputs NULL (through __get) and not the PERHAPS expected 11<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">Number</span><span class="keyword">);<br /><br /></span><span class="comment">// and sure, private method calls LOOK valid now!<br />// (this goes to __call, so no fatal error)<br /></span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">veryPrivateMethod</span><span class="keyword">();<br /><br /></span><span class="comment">// Because the previous was __set to false, next expression is true<br />// if we didn't had __set, the previous assignment would have failed<br />// then you would have corrected the typho and this code will not have<br />// been executed. (This can really be a BIG PAIN)<br /></span><span class="keyword">if (</span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">DontAllowVariableNameWithTypos</span><span class="keyword">) {<br />  </span><span class="comment">// if this code block would have deleted a file, or do a deletion on<br />  // a database, you could really be VERY SAD for a long time!<br />  </span><span class="default">$UnexpectedBehaviour</span><span class="keyword">-&gt;</span><span class="default">executeStuffYouDontWantHere</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77843">  <div class="votes">
    <div id="Vu77843">
    <a href="/manual/vote-note.php?id=77843&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77843">
    <a href="/manual/vote-note.php?id=77843&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77843" title="83% like this...">
    200
    </div>
  </div>
  <a href="#77843" class="name">
  <strong class="user"><em>egingell at sisna dot com</em></strong></a><a class="genanchor" href="#77843"> &para;</a><div class="date" title="2007-09-15 05:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77843">
<div class="phpcode"><code><span class="html">Small vocabulary note: This is *not* "overloading", this is "overriding".<br /><br />Overloading: Declaring a function multiple times with a different set of parameters like this:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) {<br />    return </span><span class="default">$a</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">foo</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    return </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">foo</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">); </span><span class="comment">// Prints "5"<br /></span><span class="keyword">echo </span><span class="default">foo</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// Prints "7"<br /><br /></span><span class="default">?&gt;<br /></span><br />Overriding: Replacing the parent class's method(s) with a new method by redeclaring it like this:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br />    function new(</span><span class="default">$args</span><span class="keyword">) {<br />        </span><span class="comment">// Do something.<br />    </span><span class="keyword">}<br />}<br /><br />class </span><span class="default">bar </span><span class="keyword">extends </span><span class="default">foo </span><span class="keyword">{<br />    function new(</span><span class="default">$args</span><span class="keyword">) {<br />        </span><span class="comment">// Do something different.<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117060">  <div class="votes">
    <div id="Vu117060">
    <a href="/manual/vote-note.php?id=117060&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117060">
    <a href="/manual/vote-note.php?id=117060&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117060" title="78% like this...">
    69
    </div>
  </div>
  <a href="#117060" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#117060"> &para;</a><div class="date" title="2015-04-08 03:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117060">
<div class="phpcode"><code><span class="html">Using magic methods, especially __get(), __set(), and __call() will effectively disable autocomplete in most IDEs (eg.: IntelliSense) for the affected classes.<br /><br />To overcome this inconvenience, use phpDoc to let the IDE know about these magic methods and properties: @method, @property, @property-read, @property-write.<br /><br />/**<br /> * @property-read name<br /> * @property-read price<br /> */<br />class MyClass<br />{<br />    private $properties = array('name' =&gt; 'IceFruit', 'price' =&gt; 2.49)<br />    <br />    public function __get($name)<br />    {<br />        return $this-&gt;properties($name);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="119898">  <div class="votes">
    <div id="Vu119898">
    <a href="/manual/vote-note.php?id=119898&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119898">
    <a href="/manual/vote-note.php?id=119898&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119898" title="75% like this...">
    71
    </div>
  </div>
  <a href="#119898" class="name">
  <strong class="user"><em>pogregoire##live.fr</em></strong></a><a class="genanchor" href="#119898"> &para;</a><div class="date" title="2016-09-16 04:17"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119898">
<div class="phpcode"><code><span class="html">It is important to understand that encapsulation can be very easily violated in PHP. for example :<br />class Object{<br /><br />}<br /><br />$Object = new Object();<br />$Objet-&gt;barbarianProperties  = 'boom';<br /><br />var_dump($Objet);// object(Objet)#1 (1) { ["barbarianProperties"]=&gt; string(7) "boom" }<br /><br />Hence it is possible to add a propertie out form the class definition.<br />It is then a necessity in order to protect encapsulation to introduce __set() in the class :<br /><br />class Objet{<br />    public function __set($name,$value){<br />        throw new Exception ('no');<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125965">  <div class="votes">
    <div id="Vu125965">
    <a href="/manual/vote-note.php?id=125965&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125965">
    <a href="/manual/vote-note.php?id=125965&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125965" title="71% like this...">
    3
    </div>
  </div>
  <a href="#125965" class="name">
  <strong class="user"><em>turabgarip at gmail dot com</em></strong></a><a class="genanchor" href="#125965"> &para;</a><div class="date" title="2021-03-27 11:02"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125965">
<div class="phpcode"><code><span class="html">I concur that "overloading" is a wrong term for this functionality. But I disagree that this functionality is completely wrong. You can do "bad practice" with right code too.<br /><br />For example __call() is very well applicable to external integration implementations which I am using to relay calls to SOAP methods which doesn't need local implementation. So you don't have to write "empty body" functions. Consider the SOAP service you connect has a "stock update" method. All you have to do is passing product code and stock count to SOAP.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Inventory </span><span class="keyword">{<br /><br />  public </span><span class="default">__construct</span><span class="keyword">() {<br />    </span><span class="comment">// configure and connect to SOAP service<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">soap </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">();<br />  }<br /><br />  public </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$soapMethod</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">) {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">soap</span><span class="keyword">-&gt;{</span><span class="default">$soapMethod</span><span class="keyword">}(</span><span class="default">params</span><span class="keyword">);<br />  }<br />}<br /><br /> </span><span class="comment">// Now you can use any SOAP method without needing a wrapper<br /> </span><span class="default">$stock </span><span class="keyword">= new </span><span class="default">Inventory</span><span class="keyword">();<br /> </span><span class="default">$stock</span><span class="keyword">-&gt;</span><span class="default">updatePrice</span><span class="keyword">(</span><span class="default">$product_id</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br /> </span><span class="default">$stock</span><span class="keyword">-&gt;</span><span class="default">saveProduct</span><span class="keyword">(</span><span class="default">$product_info</span><span class="keyword">);<br /> <br /></span><span class="default">?&gt;<br /></span><br />Of course you'd need a parameter mapping but it's in my honest opinion a lot better then having a plenty of mirror methods like:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Inventory </span><span class="keyword">{<br /><br />  public function </span><span class="default">updateStock</span><span class="keyword">(</span><span class="default">$product_id</span><span class="keyword">, </span><span class="default">$stock</span><span class="keyword">) {<br />    </span><span class="default">$soapClient</span><span class="keyword">-&gt;</span><span class="default">updateStock</span><span class="keyword">(</span><span class="default">$product_id</span><span class="keyword">, </span><span class="default">$stock</span><span class="keyword">;<br />  }<br />  public function </span><span class="default">updatePrice</span><span class="keyword">(</span><span class="default">$product_id</span><span class="keyword">, </span><span class="default">$price</span><span class="keyword">) {<br />    </span><span class="default">$soapClient</span><span class="keyword">-&gt;</span><span class="default">updateStock</span><span class="keyword">(</span><span class="default">$product_id</span><span class="keyword">, </span><span class="default">$price</span><span class="keyword">;<br />  }<br />  </span><span class="comment">// ...<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87785">  <div class="votes">
    <div id="Vu87785">
    <a href="/manual/vote-note.php?id=87785&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87785">
    <a href="/manual/vote-note.php?id=87785&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87785" title="71% like this...">
    20
    </div>
  </div>
  <a href="#87785" class="name">
  <strong class="user"><em>Ant P.</em></strong></a><a class="genanchor" href="#87785"> &para;</a><div class="date" title="2008-12-21 08:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87785">
<div class="phpcode"><code><span class="html">Be extra careful when using __call():  if you typo a function call somewhere it won't trigger an undefined function error, but get passed to __call() instead, possibly causing all sorts of bizarre side effects.<br />In versions before 5.3 without __callStatic, static calls to nonexistent functions also fall through to __call!<br />This caused me hours of confusion, hopefully this comment will save someone else from the same.</span></code></div>
  </div>
 </div>
  <div class="note" id="126434">  <div class="votes">
    <div id="Vu126434">
    <a href="/manual/vote-note.php?id=126434&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126434">
    <a href="/manual/vote-note.php?id=126434&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126434" title="70% like this...">
    4
    </div>
  </div>
  <a href="#126434" class="name">
  <strong class="user"><em>johannes dot kingma at gmail dot com</em></strong></a><a class="genanchor" href="#126434"> &para;</a><div class="date" title="2021-09-18 11:35"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126434">
<div class="phpcode"><code><span class="html">One interesting use of the __get function is property / function colaescence, using the same name for a property and a function. <br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">prop_fun </span><span class="keyword">{<br />    private </span><span class="default">$prop </span><span class="keyword">= </span><span class="default">123</span><span class="keyword">;<br /><br />    public function </span><span class="default">__get</span><span class="keyword">( </span><span class="default">$property </span><span class="keyword">) {<br />        if( </span><span class="default">property_exists</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">, </span><span class="default">$property </span><span class="keyword">) ){<br />            return </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">$property</span><span class="keyword">;<br />        }<br />        throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="string">"no such property </span><span class="default">$property</span><span class="string">." </span><span class="keyword">);<br />    }<br />    public function </span><span class="default">prop</span><span class="keyword">() {<br />        return </span><span class="default">456</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$o </span><span class="keyword">= new </span><span class="default">prop_fun</span><span class="keyword">();<br /><br />echo </span><span class="default">$o</span><span class="keyword">-&gt; </span><span class="default">prop </span><span class="keyword">. </span><span class="string">'&lt;br&gt;' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="default">$o</span><span class="keyword">-&gt; </span><span class="default">prop</span><span class="keyword">() . </span><span class="string">'&lt;br&gt;' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This will output 123 and 456. This does look like a funy cludge but I used it of a class containing a date type property and function allowing me to write<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">date_class </span><span class="keyword">{<br />    </span><span class="comment">/** @property int $date */<br />    </span><span class="keyword">private </span><span class="default">$the_date</span><span class="keyword">;<br /><br />    public function </span><span class="default">__get</span><span class="keyword">( </span><span class="default">$property </span><span class="keyword">) {<br />        if( </span><span class="default">property_exists</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">, </span><span class="default">$property </span><span class="keyword">) ){<br />            return </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">$property</span><span class="keyword">;<br />        }<br />        throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="string">"no such property </span><span class="default">$property</span><span class="string">." </span><span class="keyword">);<br />    }<br />    public function </span><span class="default">the_date</span><span class="keyword">( </span><span class="default">$datetime </span><span class="keyword">) {<br />        return </span><span class="default">strtotime</span><span class="keyword">( </span><span class="default">$datetime</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">the_date </span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">()    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">the_date </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">$date_object </span><span class="keyword">= new </span><span class="default">date_class</span><span class="keyword">();<br /><br /></span><span class="default">$today </span><span class="keyword">= </span><span class="default">$date_object</span><span class="keyword">-&gt; </span><span class="default">the_date</span><span class="keyword">;<br /></span><span class="default">$nextyear </span><span class="keyword">= </span><span class="default">$date_object</span><span class="keyword">-&gt; </span><span class="default">the_date</span><span class="keyword">(</span><span class="string">"+1 year"</span><span class="keyword">);<br /><br />echo </span><span class="default">date</span><span class="keyword">( </span><span class="string">"d/m/Y"</span><span class="keyword">, </span><span class="default">$today</span><span class="keyword">) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">date</span><span class="keyword">( </span><span class="string">"d/m/Y"</span><span class="keyword">, </span><span class="default">$nextyear </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Which I like because its self documenting properties. I used this in a utility class for user input.</span></code></div>
  </div>
 </div>
  <div class="note" id="116236">  <div class="votes">
    <div id="Vu116236">
    <a href="/manual/vote-note.php?id=116236&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116236">
    <a href="/manual/vote-note.php?id=116236&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116236" title="70% like this...">
    12
    </div>
  </div>
  <a href="#116236" class="name">
  <strong class="user"><em>gabe at fijiwebdesign dot com</em></strong></a><a class="genanchor" href="#116236"> &para;</a><div class="date" title="2014-11-27 11:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116236">
<div class="phpcode"><code><span class="html">Note that you can enable "overloading" on a class instance at runtime for an existing property by unset()ing that property. <br /><br />eg: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">{ <br /><br />    public </span><span class="default">$property1</span><span class="keyword">;<br /><br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) <br />    {<br />        return </span><span class="string">"Get called for " </span><span class="keyword">. </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">) . </span><span class="string">"-&gt;\$</span><span class="default">$name</span><span class="string"> \n"</span><span class="keyword">;<br />    }<br /><br />}<br /></span><span class="default">?&gt;<br /></span><br />The public property $property1 can be unset() so that it can be dynamically handled via __get(). <br /><br /><span class="default">&lt;?php <br />$Test </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">();<br />unset(</span><span class="default">$Test</span><span class="keyword">-&gt;</span><span class="default">property1</span><span class="keyword">); </span><span class="comment">// enable overloading<br /></span><span class="keyword">echo </span><span class="default">$Test</span><span class="keyword">-&gt;</span><span class="default">property1</span><span class="keyword">; </span><span class="comment">// Get called for Test-&gt;$property1<br /></span><span class="default">?&gt;<br /></span><br />Useful if you want to proxy or lazy load properties yet want to have documentation and visibility in the code and debugging compared to __get(), __isset(), __set() on non-existent inaccessible properties.</span></code></div>
  </div>
 </div>
  <div class="note" id="97918">  <div class="votes">
    <div id="Vu97918">
    <a href="/manual/vote-note.php?id=97918&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97918">
    <a href="/manual/vote-note.php?id=97918&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97918" title="66% like this...">
    25
    </div>
  </div>
  <a href="#97918" class="name">
  <strong class="user"><em>navarr at gtaero dot net</em></strong></a><a class="genanchor" href="#97918"> &para;</a><div class="date" title="2010-05-15 01:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97918">
<div class="phpcode"><code><span class="html">If you want to make it work more naturally for arrays $obj-&gt;variable[] etc you'll need to return __get by reference.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Variables
<br /></span><span class="keyword">{
<br />        public function </span><span class="default">__construct</span><span class="keyword">()
<br />        {
<br />                if(</span><span class="default">session_id</span><span class="keyword">() === </span><span class="string">""</span><span class="keyword">)
<br />                {
<br />                        </span><span class="default">session_start</span><span class="keyword">();
<br />                }
<br />        }
<br />        public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">)
<br />        {
<br />                </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"Variables"</span><span class="keyword">][</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />        }
<br />        public function &amp;</span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)
<br />        {
<br />                return </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"Variables"</span><span class="keyword">][</span><span class="default">$name</span><span class="keyword">];
<br />        }
<br />        public function </span><span class="default">__isset</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)
<br />        {
<br />                return isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"Variables"</span><span class="keyword">][</span><span class="default">$name</span><span class="keyword">]);
<br />        }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98402">  <div class="votes">
    <div id="Vu98402">
    <a href="/manual/vote-note.php?id=98402&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98402">
    <a href="/manual/vote-note.php?id=98402&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98402" title="67% like this...">
    14
    </div>
  </div>
  <a href="#98402" class="name">
  <strong class="user"><em>php at lanar dot com dot au</em></strong></a><a class="genanchor" href="#98402"> &para;</a><div class="date" title="2010-06-12 05:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98402">
<div class="phpcode"><code><span class="html">Note that __isset is not called on chained checks. <br />If isset( $x-&gt;a-&gt;b ) is executed where $x is a class with __isset() declared, __isset() is not called.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">demo<br /></span><span class="keyword">{<br />    var </span><span class="default">$id </span><span class="keyword">;<br />    function </span><span class="default">__construct</span><span class="keyword">( </span><span class="default">$id </span><span class="keyword">= </span><span class="string">'who knows' </span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">$id </span><span class="keyword">;<br />    }<br />    function </span><span class="default">__get</span><span class="keyword">( </span><span class="default">$prop </span><span class="keyword">)<br />    {<br />        echo </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">__FILE__</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">, </span><span class="default">__LINE__</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">__METHOD__</span><span class="keyword">, </span><span class="string">'('</span><span class="keyword">, </span><span class="default">$prop</span><span class="keyword">, </span><span class="string">') instance '</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">;<br />        return new </span><span class="default">demo</span><span class="keyword">( </span><span class="string">'autocreated' </span><span class="keyword">) ; </span><span class="comment">// return a class anyway for the demo<br />    </span><span class="keyword">}<br />    function </span><span class="default">__isset</span><span class="keyword">( </span><span class="default">$prop </span><span class="keyword">)<br />    {<br />        echo </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">__FILE__</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">, </span><span class="default">__LINE__</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">__METHOD__</span><span class="keyword">, </span><span class="string">'('</span><span class="keyword">, </span><span class="default">$prop</span><span class="keyword">, </span><span class="string">') instance '</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">;<br />        return </span><span class="default">FALSE </span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$x </span><span class="keyword">= new </span><span class="default">demo</span><span class="keyword">( </span><span class="string">'demo' </span><span class="keyword">) ;<br />echo </span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">'Calls __isset() on demo as expected when executing isset( $x-&gt;a )' </span><span class="keyword">;<br /></span><span class="default">$ret </span><span class="keyword">= isset( </span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">) ;<br />echo </span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">'Calls __get() on demo without call to __isset()  when executing isset( $x-&gt;a-&gt;b )' </span><span class="keyword">;<br /></span><span class="default">$ret </span><span class="keyword">= isset( </span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">) ;<br /></span><span class="default">?&gt;<br /></span><br />Outputs<br /><br />Calls __isset() on demo as expected when executing isset( $x-&gt;a )<br />C:\htdocs\test.php:31 demo::__isset(a) instance demo<br />Calls __get() on demo without call to __isset()  when executing isset( $x-&gt;a-&gt;b )<br />C:\htdocs\test.php:26 demo::__get(a) instance demo<br />C:\htdocs\test.php:31 demo::__isset(b) instance autocreated</span></code></div>
  </div>
 </div>
  <div class="note" id="60009">  <div class="votes">
    <div id="Vu60009">
    <a href="/manual/vote-note.php?id=60009&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60009">
    <a href="/manual/vote-note.php?id=60009&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60009" title="66% like this...">
    10
    </div>
  </div>
  <a href="#60009" class="name">
  <strong class="user"><em>PHP at jyopp dotKomm</em></strong></a><a class="genanchor" href="#60009"> &para;</a><div class="date" title="2005-12-22 11:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60009">
<div class="phpcode"><code><span class="html">Here's a useful class for logging function calls.  It stores a sequence of calls and arguments which can then be applied to objects later.  This can be used to script common sequences of operations, or to make "pluggable" operation sequences in header files that can be replayed on objects later.<br /><br />If it is instantiated with an object to shadow, it behaves as a mediator and executes the calls on this object as they come in, passing back the values from the execution.<br /><br />This is a very general implementation; it should be changed if error codes or exceptions need to be handled during the Replay process.<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MethodCallLog </span><span class="keyword">{<br />    private </span><span class="default">$callLog </span><span class="keyword">= array();<br />    private </span><span class="default">$object</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$object </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">object </span><span class="keyword">= </span><span class="default">$object</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callLog</span><span class="keyword">[] = array(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">object</span><span class="keyword">) return </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">object</span><span class="keyword">,</span><span class="default">$m</span><span class="keyword">),</span><span class="default">$a</span><span class="keyword">);<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">Replay</span><span class="keyword">(&amp;</span><span class="default">$object</span><span class="keyword">) {<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callLog </span><span class="keyword">as </span><span class="default">$c</span><span class="keyword">) {<br />            </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        }<br />    }<br />    public function </span><span class="default">GetEntries</span><span class="keyword">() {<br />        </span><span class="default">$rVal </span><span class="keyword">= array();<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callLog </span><span class="keyword">as </span><span class="default">$c</span><span class="keyword">) {<br />            </span><span class="default">$rVal</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string">("</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]).</span><span class="string">");"</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$rVal</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">Clear</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callLog </span><span class="keyword">= array();<br />    }<br />}<br /><br /></span><span class="default">$log </span><span class="keyword">= new </span><span class="default">MethodCallLog</span><span class="keyword">();<br /></span><span class="default">$log</span><span class="keyword">-&gt;</span><span class="default">Method1</span><span class="keyword">();<br /></span><span class="default">$log</span><span class="keyword">-&gt;</span><span class="default">Method2</span><span class="keyword">(</span><span class="string">"Value"</span><span class="keyword">);<br /></span><span class="default">$log</span><span class="keyword">-&gt;</span><span class="default">Method1</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br /></span><span class="comment">// Execute these method calls on a set of objects...<br /></span><span class="keyword">foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$o</span><span class="keyword">) </span><span class="default">$log</span><span class="keyword">-&gt;</span><span class="default">Replay</span><span class="keyword">(</span><span class="default">$o</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124368">  <div class="votes">
    <div id="Vu124368">
    <a href="/manual/vote-note.php?id=124368&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124368">
    <a href="/manual/vote-note.php?id=124368&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124368" title="64% like this...">
    7
    </div>
  </div>
  <a href="#124368" class="name">
  <strong class="user"><em>justmyoponion at gmail dot com</em></strong></a><a class="genanchor" href="#124368"> &para;</a><div class="date" title="2019-11-05 07:35"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124368">
<div class="phpcode"><code><span class="html">If you are not focused enough, then don't use it. <br />Otherwise it is very powerful and you can build very complex code that handle a lot of things like zend framework did.</span></code></div>
  </div>
 </div>
  <div class="note" id="115728">  <div class="votes">
    <div id="Vu115728">
    <a href="/manual/vote-note.php?id=115728&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115728">
    <a href="/manual/vote-note.php?id=115728&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115728" title="64% like this...">
    5
    </div>
  </div>
  <a href="#115728" class="name">
  <strong class="user"><em>cottton at i-stats dot net</em></strong></a><a class="genanchor" href="#115728"> &para;</a><div class="date" title="2014-09-13 02:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115728">
<div class="phpcode"><code><span class="html">Actually you dont need __set ect imo.  <br />You could use it to set (pre-defined) protected (and in "some" cases private) properties . But who wants that? <br />(test it by uncommenting private or protected)<br />(pastebin because long ...) =&gt; <a href="http://pastebin.com/By4gHrt5" rel="nofollow" target="_blank">http://pastebin.com/By4gHrt5</a></span></code></div>
  </div>
 </div>
  <div class="note" id="79864">  <div class="votes">
    <div id="Vu79864">
    <a href="/manual/vote-note.php?id=79864&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79864">
    <a href="/manual/vote-note.php?id=79864&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79864" title="65% like this...">
    6
    </div>
  </div>
  <a href="#79864" class="name">
  <strong class="user"><em>matthijs at yourmediafactory dot com</em></strong></a><a class="genanchor" href="#79864"> &para;</a><div class="date" title="2007-12-16 11:09"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79864">
<div class="phpcode"><code><span class="html">While PHP does not support true overloading natively, I have to disagree with those that state this can't be achieved trough __call. <br /><br />Yes, it's not pretty but it is definately possible to overload a member based on the type of its argument. An example:<br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{ <br />   <br />  public function </span><span class="default">__call </span><span class="keyword">(</span><span class="default">$member</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">) { <br />    if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$arguments</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) <br />      </span><span class="default">$member </span><span class="keyword">= </span><span class="default">$member </span><span class="keyword">. </span><span class="string">'Object'</span><span class="keyword">; <br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arguments</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) <br />      </span><span class="default">$member </span><span class="keyword">= </span><span class="default">$member </span><span class="keyword">. </span><span class="string">'Array'</span><span class="keyword">; <br />    </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">$member</span><span class="keyword">(</span><span class="default">$arguments</span><span class="keyword">); <br />  } <br />   <br />  private function </span><span class="default">testArray </span><span class="keyword">() { <br />    echo </span><span class="string">"Array."</span><span class="keyword">; <br />  } <br />   <br />  private function </span><span class="default">testObject </span><span class="keyword">() { <br />    echo </span><span class="string">"Object."</span><span class="keyword">; <br />  } <br />} <br /><br />class </span><span class="default">B </span><span class="keyword">{ <br />} <br /><br /></span><span class="default">$class </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">; <br /></span><span class="default">$class </span><span class="keyword">-&gt; </span><span class="default">test</span><span class="keyword">(array()); </span><span class="comment">// echo's 'Array.' <br /></span><span class="default">$class </span><span class="keyword">-&gt; </span><span class="default">test</span><span class="keyword">(new </span><span class="default">B</span><span class="keyword">); </span><span class="comment">// echo's 'Object.' <br /></span><span class="default">?&gt;<br /></span><br />Of course, the use of this is questionable (I have never needed it myself, but then again, I only have a very minimalistic C++ &amp; JAVA background). However, using this general principle and optionally building forth on other suggestions a 'form' of overloading is definately possible, provided you have some strict naming conventions in your functions. <br /><br />It would of course become a LOT easier once PHP'd let you declare the same member several times but with different arguments, since if you combine that with the reflection class 'real' overloading comes into the grasp of a good OO programmer. Lets keep our fingers crossed!</span></code></div>
  </div>
 </div>
  <div class="note" id="80686">  <div class="votes">
    <div id="Vu80686">
    <a href="/manual/vote-note.php?id=80686&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80686">
    <a href="/manual/vote-note.php?id=80686&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80686" title="61% like this...">
    5
    </div>
  </div>
  <a href="#80686" class="name">
  <strong class="user"><em>timshaw at mail dot NOSPAMusa dot com</em></strong></a><a class="genanchor" href="#80686"> &para;</a><div class="date" title="2008-01-28 09:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80686">
<div class="phpcode"><code><span class="html">The __get overload method will be called on a declared public member of an object if that member has been unset.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">c </span><span class="keyword">{<br />  public </span><span class="default">$p </span><span class="keyword">;<br />  public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) { return </span><span class="string">"__get of </span><span class="default">$name</span><span class="string">" </span><span class="keyword">; }<br />}<br /><br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">c </span><span class="keyword">;<br />echo </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">p</span><span class="keyword">, </span><span class="string">"\n" </span><span class="keyword">;    </span><span class="comment">// declared public member value is empty<br /></span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">p </span><span class="keyword">= </span><span class="default">5 </span><span class="keyword">;<br />echo </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">p</span><span class="keyword">, </span><span class="string">"\n" </span><span class="keyword">;    </span><span class="comment">// declared public member value is 5<br /></span><span class="keyword">unset(</span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">p</span><span class="keyword">) ;<br />echo </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">p</span><span class="keyword">, </span><span class="string">"\n" </span><span class="keyword">;    </span><span class="comment">// after unset, value is "__get of p"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69370">  <div class="votes">
    <div id="Vu69370">
    <a href="/manual/vote-note.php?id=69370&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69370">
    <a href="/manual/vote-note.php?id=69370&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69370" title="60% like this...">
    5
    </div>
  </div>
  <a href="#69370" class="name">
  <strong class="user"><em>jstubbs at work-at dot co dot jp</em></strong></a><a class="genanchor" href="#69370"> &para;</a><div class="date" title="2006-09-02 09:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69370">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php $myclass</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">[</span><span class="string">'bar'</span><span class="keyword">] = </span><span class="string">'baz'</span><span class="keyword">; </span><span class="default">?&gt;
<br /></span> 
<br />When overriding __get and __set, the above code can work (as expected) but it depends on your __get implementation rather than your __set. In fact, __set is never called with the above code. It appears that PHP (at least as of 5.1) uses a reference to whatever was returned by __get. To be more verbose, the above code is essentially identical to:
<br /> 
<br /><span class="default">&lt;?php
<br />$tmp_array </span><span class="keyword">= &amp;</span><span class="default">$myclass</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">;
<br /></span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'bar'</span><span class="keyword">] = </span><span class="string">'baz'</span><span class="keyword">;
<br />unset(</span><span class="default">$tmp_array</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Therefore, the above won't do anything if your __get implementation resembles this:
<br />
<br /><span class="default">&lt;?php 
<br /></span><span class="keyword">function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {
<br />    return </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">)
<br />        ? </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />You will actually need to set the value in __get and return that, as in the following code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {
<br />    if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">))
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">null</span><span class="keyword">;
<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76259">  <div class="votes">
    <div id="Vu76259">
    <a href="/manual/vote-note.php?id=76259&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76259">
    <a href="/manual/vote-note.php?id=76259&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76259" title="59% like this...">
    9
    </div>
  </div>
  <a href="#76259" class="name">
  <strong class="user"><em>alexandre at nospam dot gaigalas dot net</em></strong></a><a class="genanchor" href="#76259"> &para;</a><div class="date" title="2007-07-07 10:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76259">
<div class="phpcode"><code><span class="html">PHP 5.2.1<br /><br />Its possible to call magic methods with invalid names using variable method/property names:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">foo<br /></span><span class="keyword">{<br />    function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">)<br />    {<br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);<br />    }<br />    function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">)<br />    {<br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">;<br /></span><span class="default">$varname </span><span class="keyword">= </span><span class="string">'invalid,variable+name'</span><span class="keyword">;<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">$varname</span><span class="keyword">;<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">$varname</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />I just don't know if it is a bug or a feature :)</span></code></div>
  </div>
 </div>
  <div class="note" id="52453">  <div class="votes">
    <div id="Vu52453">
    <a href="/manual/vote-note.php?id=52453&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52453">
    <a href="/manual/vote-note.php?id=52453&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52453" title="60% like this...">
    4
    </div>
  </div>
  <a href="#52453" class="name">
  <strong class="user"><em>Marius</em></strong></a><a class="genanchor" href="#52453"> &para;</a><div class="date" title="2005-05-02 02:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52453">
<div class="phpcode"><code><span class="html">for anyone who's thinking about traversing some variable tree<br />by using __get() and __set(). i tried to do this and found one<br />problem: you can handle couple of __get() in a row by returning<br />an object which can handle consequential __get(), but you can't<br />handle __get() and __set() that way.<br />i.e. if you want to:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">print(</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">val1</span><span class="keyword">-&gt;</span><span class="default">val2</span><span class="keyword">-&gt;</span><span class="default">val3</span><span class="keyword">); </span><span class="comment">// three __get() calls<br /></span><span class="default">?&gt;</span> - this will work,<br />but if you want to:<br /><span class="default">&lt;?php<br />    $obj</span><span class="keyword">-&gt;</span><span class="default">val1</span><span class="keyword">-&gt;</span><span class="default">val2 </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">; </span><span class="comment">// one __get() and one __set() call<br /></span><span class="default">?&gt;</span> - this will fail with message:<br />"Fatal error: Cannot access undefined property for object with<br /> overloaded property access"<br />however if you don't mix __get() and __set() in one expression,<br />it will work:<br /><span class="default">&lt;?php<br />    $obj</span><span class="keyword">-&gt;</span><span class="default">val1 </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">; </span><span class="comment">// only one __set() call<br />    </span><span class="default">$val2 </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">val1</span><span class="keyword">-&gt;</span><span class="default">val2</span><span class="keyword">; </span><span class="comment">// two __get() calls<br />    </span><span class="default">$val2</span><span class="keyword">-&gt;</span><span class="default">val3 </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">; </span><span class="comment">// one __set() call<br /></span><span class="default">?&gt;<br /></span><br />as you can see you can split __get() and __set() parts of<br />expression into two expressions to make it work.<br /><br />by the way, this seems like a bug to me, will have to report it.</span></code></div>
  </div>
 </div>
  <div class="note" id="90896">  <div class="votes">
    <div id="Vu90896">
    <a href="/manual/vote-note.php?id=90896&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90896">
    <a href="/manual/vote-note.php?id=90896&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90896" title="58% like this...">
    5
    </div>
  </div>
  <a href="#90896" class="name">
  <strong class="user"><em>daevid at daevid dot com</em></strong></a><a class="genanchor" href="#90896"> &para;</a><div class="date" title="2009-05-14 09:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90896">
<div class="phpcode"><code><span class="html">Here's a handy little routine to suggest properties you're trying to set that don't exist. For example:
<br />
<br />Attempted to __get() non-existant property/variable 'operator_id' in class 'User'.
<br />
<br />checking for operator and suggesting the following:
<br />
<br />    * id_operator
<br />    * operator_name
<br />    * operator_code
<br />
<br />enjoy.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">/**
<br />     * Suggests alternative properties should a __get() or __set() fail
<br />     *
<br />     * @param     string $property
<br />     * @return string
<br />     * @author Daevid Vincent [daevid@daevid.com]
<br />     * @date    05/12/09
<br />     * @see        __get(), __set(), __call()
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">suggest_alternative</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'_'</span><span class="keyword">,</span><span class="default">$property</span><span class="keyword">);
<br />        foreach(</span><span class="default">$parts </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$p</span><span class="keyword">) if (</span><span class="default">$p </span><span class="keyword">== </span><span class="string">'_' </span><span class="keyword">|| </span><span class="default">$p </span><span class="keyword">== </span><span class="string">'id'</span><span class="keyword">) unset(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />
<br />        echo </span><span class="string">'checking for &lt;b&gt;'</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">,</span><span class="default">$parts</span><span class="keyword">).</span><span class="string">"&lt;/b&gt; and suggesting the following:&lt;br/&gt;\n"</span><span class="keyword">;
<br />
<br />        echo </span><span class="string">"&lt;ul&gt;"</span><span class="keyword">;
<br />        foreach(</span><span class="default">$this </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />            foreach(</span><span class="default">$parts </span><span class="keyword">as </span><span class="default">$p</span><span class="keyword">)
<br />                if (</span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$p</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) print </span><span class="string">'&lt;li&gt;'</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">.</span><span class="string">"&lt;/li&gt;\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;/ul&gt;"</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="default">just put it in your __get</span><span class="keyword">() or </span><span class="default">__set</span><span class="keyword">() </span><span class="default">like so</span><span class="keyword">:
<br />
<br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">)
<br />    {
<br />            echo </span><span class="string">"&lt;p&gt;&lt;font color='#ff0000'&gt;Attempted to __get() non-existant property/variable '"</span><span class="keyword">.</span><span class="default">$property</span><span class="keyword">.</span><span class="string">"' in class '"</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_class_name</span><span class="keyword">().</span><span class="string">"'.&lt;/font&gt;&lt;p&gt;\n"</span><span class="keyword">;
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">suggest_alternative</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">);
<br />            exit;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105176">  <div class="votes">
    <div id="Vu105176">
    <a href="/manual/vote-note.php?id=105176&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105176">
    <a href="/manual/vote-note.php?id=105176&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105176" title="57% like this...">
    3
    </div>
  </div>
  <a href="#105176" class="name">
  <strong class="user"><em>dans at dansheps dot com</em></strong></a><a class="genanchor" href="#105176"> &para;</a><div class="date" title="2011-08-01 08:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105176">
<div class="phpcode"><code><span class="html">Since this was getting me for a little bit, I figure I better pipe in here...
<br />
<br />For nested calls to private/protected variables(probably functions too) what it does is call a __get()  on the first object, and if you return the nested object, it then calls a __get() on the nested object because, well it is protected as well.
<br />
<br />EG:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">A
<br /></span><span class="keyword">{
<br />protected </span><span class="default">$B
<br />
<br /></span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">()
<br />{
<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">B </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();
<br />}
<br />
<br />public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">)
<br />{
<br />echo </span><span class="string">"Class A::Variable " </span><span class="keyword">. </span><span class="default">$variable </span><span class="keyword">. </span><span class="string">"\n\r"</span><span class="keyword">;
<br /></span><span class="default">$retval </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$variable</span><span class="keyword">};
<br />return </span><span class="default">$retval</span><span class="keyword">;
<br />}
<br />}
<br />
<br />class </span><span class="default">B
<br /></span><span class="keyword">{
<br />protected </span><span class="default">$val
<br />
<br /></span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">()
<br />{
<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">val </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />}
<br />
<br />public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">)
<br />{
<br />echo </span><span class="string">"Class B::Variable " </span><span class="keyword">. </span><span class="default">$variable </span><span class="keyword">. </span><span class="string">"\n\r"</span><span class="keyword">;
<br /></span><span class="default">$retval </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$variable</span><span class="keyword">};
<br />return </span><span class="default">$retval</span><span class="keyword">;
<br />}
<br />}
<br />
<br /></span><span class="default">$A </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();
<br />
<br />echo </span><span class="string">"Final Value: " </span><span class="keyword">. </span><span class="default">$A</span><span class="keyword">-&gt;</span><span class="default">B</span><span class="keyword">-&gt;</span><span class="default">val</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />That will return something like...
<br />
<br />Class A::Variable B
<br />Class B::Variable val
<br />Final Value: 1
<br />
<br />It seperates the calls into $A-&gt;B and $B-&gt;val
<br />
<br />Hope this helps someone</span></code></div>
  </div>
 </div>
  <div class="note" id="104110">  <div class="votes">
    <div id="Vu104110">
    <a href="/manual/vote-note.php?id=104110&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104110">
    <a href="/manual/vote-note.php?id=104110&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104110" title="55% like this...">
    5
    </div>
  </div>
  <a href="#104110" class="name">
  <strong class="user"><em>Daniel Smith</em></strong></a><a class="genanchor" href="#104110"> &para;</a><div class="date" title="2011-05-23 04:15"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104110">
<div class="phpcode"><code><span class="html">Be careful of __call in case you have a protected/private method. Doing this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestMagicCallMethod </span><span class="keyword">{<br />    public function </span><span class="default">foo</span><span class="keyword">()<br />    {<br />        echo </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">)<br />    {<br />        echo </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />        if(</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">))<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">();<br />        }<br />    }<br />    <br />    protected function </span><span class="default">bar</span><span class="keyword">()<br />    {<br />        echo </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br /><br />    private function </span><span class="default">baz</span><span class="keyword">()<br />    {<br />        echo </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$test    </span><span class="keyword">=    new </span><span class="default">TestMagicCallMethod</span><span class="keyword">();<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">();<br /></span><span class="comment">/**<br /> * Outputs: <br /> * TestMagicCallMethod::foo<br /> */<br /><br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">();<br /></span><span class="comment">/**<br /> * Outputs: <br /> * TestMagicCallMethod::__call<br /> * TestMagicCallMethod::bar<br /> */<br /><br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">baz</span><span class="keyword">();<br /></span><span class="comment">/**<br /> * Outputs:<br /> * TestMagicCallMethod::__call<br /> * TestMagicCallMethod::baz<br /> */<br /></span><span class="default">?&gt;<br /></span><br />..is probably not what you should be doing. Always make sure that the methods you call in __call are allowed as you probably dont want all the private/protected methods to be accessed by a typo or something.</span></code></div>
  </div>
 </div>
  <div class="note" id="76622">  <div class="votes">
    <div id="Vu76622">
    <a href="/manual/vote-note.php?id=76622&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76622">
    <a href="/manual/vote-note.php?id=76622&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76622" title="55% like this...">
    2
    </div>
  </div>
  <a href="#76622" class="name">
  <strong class="user"><em>php at sleep is the enemy dot co dot uk</em></strong></a><a class="genanchor" href="#76622"> &para;</a><div class="date" title="2007-07-23 07:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76622">
<div class="phpcode"><code><span class="html">Just to reinforce and elaborate on what DevilDude at darkmaker dot com said way down there on 22-Sep-2004 07:57.<br /><br />The recursion detection feature can prove especially perilous when using __set. When PHP comes across a statement that would usually call __set but would lead to recursion, rather than firing off a warning or simply not executing the statement it will act as though there is no __set method defined at all. The default behaviour in this instance is to dynamically add the specified property to the object thus breaking the desired functionality of all further calls to __set or __get for that property.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">TestClass</span><span class="keyword">{<br /><br />    public </span><span class="default">$values </span><span class="keyword">= array();<br />    <br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">){<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />    }<br />    <br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">validate</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">validate</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">){<br />        </span><span class="comment">/*<br />        __get will be called on the following line<br />        but as soon as we attempt to call __set <br />        again PHP will refuse and simply add a <br />        property called $name to $this <br />        */<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$tc </span><span class="keyword">= new </span><span class="default">TestClass</span><span class="keyword">();<br /><br /></span><span class="default">$tc</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="string">'bar'</span><span class="keyword">;<br /></span><span class="default">$tc</span><span class="keyword">-&gt;</span><span class="default">values</span><span class="keyword">[</span><span class="string">'foo'</span><span class="keyword">] = </span><span class="string">'boing'</span><span class="keyword">;<br /><br />echo </span><span class="string">'$tc-&gt;foo == ' </span><span class="keyword">. </span><span class="default">$tc</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'$tc ' </span><span class="keyword">. (</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$tc</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">) ? </span><span class="string">'now has' </span><span class="keyword">: </span><span class="string">'still does not have'</span><span class="keyword">) . </span><span class="string">' a property called "foo"&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">/*<br />OUPUTS:<br />$tc-&gt;foo == bar<br />$tc now has a property called "foo"<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45905">  <div class="votes">
    <div id="Vu45905">
    <a href="/manual/vote-note.php?id=45905&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45905">
    <a href="/manual/vote-note.php?id=45905&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45905" title="53% like this...">
    2
    </div>
  </div>
  <a href="#45905" class="name">
  <strong class="user"><em>DevilDude at darkmaker dot com</em></strong></a><a class="genanchor" href="#45905"> &para;</a><div class="date" title="2004-09-22 07:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45905">
<div class="phpcode"><code><span class="html">Php 5 has a simple recursion system that stops you from using overloading within an overloading function, this means you cannot get an overloaded variable within the __get method, or within any functions/methods called by the _get method, you can however call __get manualy within itself to do the same thing.</span></code></div>
  </div>
 </div>
  <div class="note" id="114160">  <div class="votes">
    <div id="Vu114160">
    <a href="/manual/vote-note.php?id=114160&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114160">
    <a href="/manual/vote-note.php?id=114160&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114160" title="51% like this...">
    1
    </div>
  </div>
  <a href="#114160" class="name">
  <strong class="user"><em>Nanhe Kumar</em></strong></a><a class="genanchor" href="#114160"> &para;</a><div class="date" title="2014-01-17 10:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114160">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//How can implement __call function you understand better<br /></span><span class="keyword">class </span><span class="default">Employee </span><span class="keyword">{<br /><br />    protected </span><span class="default">$_name</span><span class="keyword">;<br />    protected </span><span class="default">$_email</span><span class="keyword">;<br />    protected </span><span class="default">$_compony</span><span class="keyword">;<br /><br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">) {<br />        </span><span class="default">$action </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />        switch (</span><span class="default">$action</span><span class="keyword">) {<br />            case </span><span class="string">'get'</span><span class="keyword">:<br />                </span><span class="default">$property </span><span class="keyword">= </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />                if(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">,</span><span class="default">$property</span><span class="keyword">)){<br />                    return </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">};<br />                }else{<br />                    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />                    </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Undefined property  ' </span><span class="keyword">. </span><span class="default">$name </span><span class="keyword">. </span><span class="string">' in ' </span><span class="keyword">. </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">] . </span><span class="string">' on line ' </span><span class="keyword">. </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'line'</span><span class="keyword">], </span><span class="default">E_USER_NOTICE</span><span class="keyword">);<br />                    return </span><span class="default">null</span><span class="keyword">;<br />                }<br />                break;<br />            case </span><span class="string">'set'</span><span class="keyword">:<br />                </span><span class="default">$property </span><span class="keyword">= </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />                if(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">,</span><span class="default">$property</span><span class="keyword">)){<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">} = </span><span class="default">$arguments</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                }else{<br />                    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />                    </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Undefined property  ' </span><span class="keyword">. </span><span class="default">$name </span><span class="keyword">. </span><span class="string">' in ' </span><span class="keyword">. </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">] . </span><span class="string">' on line ' </span><span class="keyword">. </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'line'</span><span class="keyword">], </span><span class="default">E_USER_NOTICE</span><span class="keyword">);<br />                    return </span><span class="default">null</span><span class="keyword">;<br />                }<br />                <br />                break;<br />            default :<br />                return </span><span class="default">FALSE</span><span class="keyword">;<br />        }<br />    }<br /><br />}<br /><br /></span><span class="default">$s </span><span class="keyword">= new </span><span class="default">Employee</span><span class="keyword">();<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">setName</span><span class="keyword">(</span><span class="string">'Nanhe Kumar'</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">setEmail</span><span class="keyword">(</span><span class="string">'nanhe.kumar@gmail.com'</span><span class="keyword">);<br />echo </span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(); </span><span class="comment">//Nanhe Kumar<br /></span><span class="keyword">echo </span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">getEmail</span><span class="keyword">(); </span><span class="comment">// nanhe.kumar@gmail.com<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">setAge</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">); </span><span class="comment">//Notice: Undefined property setAge in<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76325">  <div class="votes">
    <div id="Vu76325">
    <a href="/manual/vote-note.php?id=76325&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76325">
    <a href="/manual/vote-note.php?id=76325&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76325" title="52% like this...">
    2
    </div>
  </div>
  <a href="#76325" class="name">
  <strong class="user"><em>Adeel Khan</em></strong></a><a class="genanchor" href="#76325"> &para;</a><div class="date" title="2007-07-10 01:18"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76325">
<div class="phpcode"><code><span class="html">Observe:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">) {<br />        die(</span><span class="default">$m</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;<br />print </span><span class="default">$foo</span><span class="keyword">-&gt;{</span><span class="string">'wow!'</span><span class="keyword">}();<br /><br /></span><span class="comment">// outputs 'wow!'<br /></span><span class="default">?&gt;<br /></span><br />This method allows you to call functions with invalid characters.</span></code></div>
  </div>
 </div>
  <div class="note" id="93939">  <div class="votes">
    <div id="Vu93939">
    <a href="/manual/vote-note.php?id=93939&amp;page=language.oop5.overloading&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93939">
    <a href="/manual/vote-note.php?id=93939&amp;page=language.oop5.overloading&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93939" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93939" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#93939"> &para;</a><div class="date" title="2009-10-07 09:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93939">
<div class="phpcode"><code><span class="html">Combining two things noted previously:<br /><br />1 - Unsetting an object member removes it from the object completely, subsequent uses of that member will be handled by magic methods.<br />2 - PHP will not recursively call one magic method from within itself (at least for the same $name).<br /><br />This means that if an object member has been unset(), it IS possible to re-declare that object member (as public) by creating it within your object's __set() method, like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />  function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />  {<br />    </span><span class="comment">// Add a new (public) member to this object.<br />    // This works because __set() will not recursively call itself.<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /><br /></span><span class="comment">// $foo has zero members at this point<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /><br /></span><span class="comment">// __set() will be called here<br /></span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar </span><span class="keyword">= </span><span class="string">'something'</span><span class="keyword">; </span><span class="comment">// Calls __set()<br /><br />// $foo now contains one member<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /><br /></span><span class="comment">// Won't call __set() because 'bar' is now declared<br /></span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar </span><span class="keyword">= </span><span class="string">'other thing'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Also be mindful that if you want to break a reference involving an object member without triggering magic functionality, DO NOT unset() the object member directly.  Instead use =&amp; to bind the object member to any convenient null variable.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.overloading&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.overloading.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
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
