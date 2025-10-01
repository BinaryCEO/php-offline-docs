<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Transliterator::transliterate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/transliterator.transliterate.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/transliterator.transliterate.php">
 <link rel="alternate" href="https://www.php.net/manual/en/transliterator.transliterate.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.transliterator.php">
 <link rel="prev" href="https://www.php.net/manual/en/transliterator.listids.php">
 <link rel="next" href="https://www.php.net/manual/en/class.intlbreakiterator.php">

 <link rel="alternate" href="https://www.php.net/manual/en/transliterator.transliterate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/transliterator.transliterate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/transliterator.transliterate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/transliterator.transliterate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/transliterator.transliterate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/transliterator.transliterate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/transliterator.transliterate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/transliterator.transliterate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/transliterator.transliterate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/transliterator.transliterate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/transliterator.transliterate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Transliterate a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Transliterator::transliterate - Manual" />
<meta name="twitter:description" content="Transliterate a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Transliterator::transliterate - Manual" />
<meta itemprop="description" content="Transliterate a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Transliterate a string" />

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
        <a href="class.intlbreakiterator.php">
          IntlBreakIterator &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="transliterator.listids.php">
          &laquo; Transliterator::listIDs        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='class.transliterator.php'>Transliterator</a></li>      </ul>
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
            <option value='en/transliterator.transliterate.php' selected="selected">English</option>
            <option value='de/transliterator.transliterate.php'>German</option>
            <option value='es/transliterator.transliterate.php'>Spanish</option>
            <option value='fr/transliterator.transliterate.php'>French</option>
            <option value='it/transliterator.transliterate.php'>Italian</option>
            <option value='ja/transliterator.transliterate.php'>Japanese</option>
            <option value='pt_BR/transliterator.transliterate.php'>Brazilian Portuguese</option>
            <option value='ru/transliterator.transliterate.php'>Russian</option>
            <option value='tr/transliterator.transliterate.php'>Turkish</option>
            <option value='uk/transliterator.transliterate.php'>Ukrainian</option>
            <option value='zh/transliterator.transliterate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="transliterator.transliterate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Transliterator::transliterate</h1>
  <h1 class="refname">transliterator_transliterate</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8, PECL intl &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Transliterator::transliterate</span> -- <span class="refname">transliterator_transliterate</span> &mdash; <span class="dc-title">Transliterate a string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-transliterator.transliterate-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Transliterator::transliterate</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$end</code><span class="initializer"> = -1</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>transliterator_transliterate</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.transliterator.php" class="type Transliterator">Transliterator</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$transliterator</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$end</code><span class="initializer"> = -1</span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Transforms a string or part thereof using an ICU transliterator.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-transliterator.transliterate-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">transliterator</code></dt>
    <dd>
     <p class="para">
      In the procedural version, either a <span class="classname"><a href="class.transliterator.php" class="classname">Transliterator</a></span>
      or a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> from which a
      <span class="classname"><a href="class.transliterator.php" class="classname">Transliterator</a></span> can be built.
     </p>
    </dd>
   
   
    <dt><code class="parameter">string</code></dt>
    <dd>
     <p class="para">
      The string to be transformed.
     </p>
    </dd>
   
   
    <dt><code class="parameter">start</code></dt>
    <dd>
     <p class="para">
      The start index (in UTF-16 code units) from which the string will start
      to be transformed, inclusive. Indexing starts at 0. The text before will
      be left as is.
     </p>
    </dd>
   
   
    <dt><code class="parameter">end</code></dt>
    <dd>
     <p class="para">
      The end index (in UTF-16 code units) until which the string will be
      transformed, exclusive. Indexing starts at 0. The text after will be
      left as is.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-transliterator.transliterate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The transformed string on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-transliterator.transliterate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2677">
    <p><strong>Example #1 Converting escaped UTF-16 code units</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$s </span><span style="color: #007700">= </span><span style="color: #DD0000">"\u304A\u65E9\u3046\u3054\u3056\u3044\u307E\u3059"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">transliterator_transliterate</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hex-Any/Java"</span><span style="color: #007700">, </span><span style="color: #0000BB">$s</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//now the reverse operation with a supplementary character<br /></span><span style="color: #0000BB">$supplChar </span><span style="color: #007700">= </span><span style="color: #0000BB">html_entity_decode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&amp;#x1D11E;'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">mb_strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$supplChar</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$encSupplChar </span><span style="color: #007700">= </span><span style="color: #0000BB">transliterator_transliterate</span><span style="color: #007700">(</span><span style="color: #DD0000">"Any-Hex/Java"</span><span style="color: #007700">, </span><span style="color: #0000BB">$supplChar</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//echoes two encoded UTF-16 code units<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$encSupplChar</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//and back<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">transliterator_transliterate</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hex-Any/Java"</span><span style="color: #007700">, </span><span style="color: #0000BB">$encSupplChar</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output
something similar to:</p></div>
     <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">お早うございます
1
\uD834\uDD1E
𝄞</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-transliterator.transliterate-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="transliterator.geterrormessage.php" class="methodname" rel="rdfs-seeAlso">Transliterator::getErrorMessage()</a> - Get last error message</span></li>
    <li><span class="methodname"><a href="transliterator.construct.php" class="methodname" rel="rdfs-seeAlso">Transliterator::__construct()</a> - Private constructor to deny instantiation</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/transliterator/transliterate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ftransliterator.transliterate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=transliterator.transliterate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/transliterator.transliterate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111939">  <div class="votes">
    <div id="Vu111939">
    <a href="/manual/vote-note.php?id=111939&amp;page=transliterator.transliterate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111939">
    <a href="/manual/vote-note.php?id=111939&amp;page=transliterator.transliterate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111939" title="86% like this...">
    39
    </div>
  </div>
  <a href="#111939" class="name">
  <strong class="user"><em>simonsimcity at gmail dot com</em></strong></a><a class="genanchor" href="#111939"> &para;</a><div class="date" title="2013-04-15 06:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111939">
<div class="phpcode"><code><span class="html">I pretty much like the idea of hdogan, but there's at least one group of characters he's missing: ligature characters.<br />They're at least used in Norwegian and I read something about French, too ... Some are just used for styling (f.e. ﬁ)<br /><br />Here's an example that supports all characters (should at least, according to the documentation):<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">transliterator_transliterate</span><span class="keyword">(</span><span class="string">'Any-Latin; Latin-ASCII; Lower()'</span><span class="keyword">, </span><span class="string">"A æ Übérmensch på høyeste nivå! И я люблю PHP! ﬁ"</span><span class="keyword">));<br /></span><span class="comment">// string(41) "a ae ubermensch pa hoyeste niva! i a lublu php! fi"<br /></span><span class="default">?&gt;<br /></span><br />In this example any character will firstly be converted to a latin character. If that's finished, replace all latin characters by their ASCII replacement.</span></code></div>
  </div>
 </div>
  <div class="note" id="115162">  <div class="votes">
    <div id="Vu115162">
    <a href="/manual/vote-note.php?id=115162&amp;page=transliterator.transliterate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115162">
    <a href="/manual/vote-note.php?id=115162&amp;page=transliterator.transliterate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115162" title="80% like this...">
    9
    </div>
  </div>
  <a href="#115162" class="name">
  <strong class="user"><em>simonsimcity at gmail dot com</em></strong></a><a class="genanchor" href="#115162"> &para;</a><div class="date" title="2014-06-05 08:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115162">
<div class="phpcode"><code><span class="html">Sorry, for posting it again, but I found a bug in my code:<br /><br />If you have a character, like the cyrillic ь (a soft-sign - no sound), the "Any-Latin" would translate it to a prime-character, and the "Latin-ASCII" doesn't touch prime-characters. Therefore I added an option to remove all characters, that are higher than \u0100.<br /><br />Here's my new code, including an example:<br /><br />var_dump(transliterator_transliterate('Any-Latin; Latin-ASCII; [\u0100-\u7fff] remove',<br />    "A æ Übérmensch på høyeste nivå! И я люблю PHP! есть. ﬁ"));<br />// string(50) "A ae Ubermensch pa hoyeste niva! I a lublu PHP! est. fi"<br /><br />Another approach, I found quite helpful (if you by no way want to remove characters ...), try to use iconv() in addition. This surely will just return ASCII characters.<br /><br />See: <a href="http://stackoverflow.com/a/3542748/517914" rel="nofollow" target="_blank">http://stackoverflow.com/a/3542748/517914</a><br /><br />Also an example here:<br /><br />var_dump(iconv("UTF-8", "ASCII//TRANSLIT//IGNORE", transliterator_transliterate('Any-Latin; Latin-ASCII',<br />    "A æ Übérmensch på høyeste nivå! И я люблю PHP! есть. ﬁ"));<br />// string(50) "A ae Ubermensch pa hoyeste niva! I a lublu PHP! est'. fi"</span></code></div>
  </div>
 </div>
  <div class="note" id="110598">  <div class="votes">
    <div id="Vu110598">
    <a href="/manual/vote-note.php?id=110598&amp;page=transliterator.transliterate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110598">
    <a href="/manual/vote-note.php?id=110598&amp;page=transliterator.transliterate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110598" title="68% like this...">
    12
    </div>
  </div>
  <a href="#110598" class="name">
  <strong class="user"><em>hdogan at gmail dot com</em></strong></a><a class="genanchor" href="#110598"> &para;</a><div class="date" title="2012-11-11 02:33"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110598">
<div class="phpcode"><code><span class="html">You can create slugs easily with:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">slugify</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">transliterator_transliterate</span><span class="keyword">(</span><span class="string">"Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[-\s]+/'</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">);<br />}<br /><br />echo </span><span class="default">slugify</span><span class="keyword">(</span><span class="string">"Я люблю PHP!"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120163">  <div class="votes">
    <div id="Vu120163">
    <a href="/manual/vote-note.php?id=120163&amp;page=transliterator.transliterate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120163">
    <a href="/manual/vote-note.php?id=120163&amp;page=transliterator.transliterate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120163" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#120163" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120163"> &para;</a><div class="date" title="2016-11-14 10:04"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120163">
<div class="phpcode"><code><span class="html">There are some possibly undesirable conversions with ASCII//TRANSLIT//IGNORE or your users may require some custom stuff.<br /><br />You might want to run a substitution up front for certain things, such as when you want 3 letter ISO codes to replace currency symbols. £ transliterates to "lb", for example, which is incorrect since it's a currency symbol, not a weight symbol (#). <br /><br />ASCII//TRANSLIT//IGNORE does a great job within the realm of possibility :-)<br /><br />When it doesn't do something you want it to, you can set up a CSV with one replacement per line and run a function like:<br /><br />    function stripByMap($inputString, $mapFile)<br />    {<br />        $csv = file($mapFile);<br />        foreach($csv as $line)<br />        {<br />            $arrLine = explode(',', trim($line));<br />            $inputString = str_replace($arrLine[0],$arrLine[1],$inputString);<br />        }<br />        return $inputString;<br />    }<br /><br />or you can write some regexes. Transliterating using ASCII//TRANSLIT//IGNORE  works so well that your map probably won't be very long...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=transliterator.transliterate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/transliterator.transliterate.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.transliterator.php">Transliterator</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="transliterator.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="transliterator.create.php" title="create">create</a>
                        </li>
                                                <li class="">
                            <a href="transliterator.createfromrules.php" title="createFromRules">createFromRules</a>
                        </li>
                                                <li class="">
                            <a href="transliterator.createinverse.php" title="createInverse">createInverse</a>
                        </li>
                                                <li class="">
                            <a href="transliterator.geterrorcode.php" title="getErrorCode">getErrorCode</a>
                        </li>
                                                <li class="">
                            <a href="transliterator.geterrormessage.php" title="getErrorMessage">getErrorMessage</a>
                        </li>
                                                <li class="">
                            <a href="transliterator.listids.php" title="listIDs">listIDs</a>
                        </li>
                                                <li class="current">
                            <a href="transliterator.transliterate.php" title="transliterate">transliterate</a>
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
