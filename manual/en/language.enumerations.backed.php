<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backed enumerations - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.enumerations.backed.php">
 <link rel="shorturl" href="https://www.php.net/enumerations.backed">
 <link rel="alternate" href="https://www.php.net/enumerations.backed" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.enumerations.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.enumerations.basics.php">
 <link rel="next" href="https://www.php.net/manual/en/language.enumerations.methods.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.enumerations.backed.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.enumerations.backed.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.enumerations.backed.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.enumerations.backed.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.enumerations.backed.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.enumerations.backed.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.enumerations.backed.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.enumerations.backed.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.enumerations.backed.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.enumerations.backed.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.enumerations.backed.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backed enumerations" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backed enumerations - Manual" />
<meta name="twitter:description" content="Backed enumerations" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backed enumerations - Manual" />
<meta itemprop="description" content="Backed enumerations" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backed enumerations" />

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
        <a href="language.enumerations.methods.php">
          Enumeration methods &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.enumerations.basics.php">
          &laquo; Basic enumerations        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.enumerations.php'>Enumerations</a></li>      </ul>
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
            <option value='en/language.enumerations.backed.php' selected="selected">English</option>
            <option value='de/language.enumerations.backed.php'>German</option>
            <option value='es/language.enumerations.backed.php'>Spanish</option>
            <option value='fr/language.enumerations.backed.php'>French</option>
            <option value='it/language.enumerations.backed.php'>Italian</option>
            <option value='ja/language.enumerations.backed.php'>Japanese</option>
            <option value='pt_BR/language.enumerations.backed.php'>Brazilian Portuguese</option>
            <option value='ru/language.enumerations.backed.php'>Russian</option>
            <option value='tr/language.enumerations.backed.php'>Turkish</option>
            <option value='uk/language.enumerations.backed.php'>Ukrainian</option>
            <option value='zh/language.enumerations.backed.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.enumerations.backed" class="sect1">
  <h2 class="title">Backed enumerations</h2>

  <p class="para">
   By default, Enumerated Cases have no scalar equivalent. They are simply singleton objects. However,
   there are ample cases where an Enumerated Case needs to be able to round-trip to a database or
   similar datastore, so having a built-in scalar (and thus trivially serializable) equivalent defined
   intrinsically is useful.
  </p>

  <p class="para">To define a scalar equivalent for an Enumeration, the syntax is as follows:</p>

  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">enum </span><span style="color: #0000BB">Suit</span><span style="color: #007700">: </span><span style="color: #0000BB">string<br /></span><span style="color: #007700">{<br />    case </span><span style="color: #0000BB">Hearts </span><span style="color: #007700">= </span><span style="color: #DD0000">'H'</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Diamonds </span><span style="color: #007700">= </span><span style="color: #DD0000">'D'</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Clubs </span><span style="color: #007700">= </span><span style="color: #DD0000">'C'</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Spades </span><span style="color: #007700">= </span><span style="color: #DD0000">'S'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>


  <p class="para">
   A case that has a scalar equivalent is called a Backed Case, as it is &quot;Backed&quot;
   by a simpler value. An Enum that contains all Backed Cases is called a &quot;Backed Enum.&quot;
   A Backed Enum may contain only Backed Cases. A Pure Enum may contain only Pure Cases.
  </p>

  <p class="para">
   A Backed Enum may be backed by types of <code class="literal">int</code> or <code class="literal">string</code>,
   and a given enumeration supports only a single type at a time (that is, no union of <code class="literal">int|string</code>).
   If an enumeration is marked as having a scalar equivalent, then all cases must have a unique
   scalar equivalent defined explicitly. There are no auto-generated scalar equivalents
   (e.g., sequential integers). Backed cases must be unique; two backed enum cases may
   not have the same scalar equivalent. However, a constant may refer to a case, effectively
   creating an alias. See <a href="language.enumerations.constants.php" class="link">Enumeration constants</a>.
  </p>

  <p class="para">
   The equivalent values may be a constant scalar expression.
   Prior to PHP 8.2.0, the equivalent values had to be literals or literal expressions.
   This means that constants and constant expressions were not supported.
   That is, <code class="code">1 + 1</code> was allowed, but <code class="code">1 + SOME_CONST</code> was not.
  </p>

  <p class="para">
   Backed Cases have an additional read-only property, <code class="literal">value</code>, which is the value
   specified in the definition.
  </p>

  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">print </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Clubs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Prints "C"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>


  <p class="para">
   In order to enforce the <code class="literal">value</code> property as read-only, a variable cannot
   be assigned as a reference to it. That is, the following throws an error:
  </p>

  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$suit </span><span style="color: #007700">= </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Clubs</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$ref </span><span style="color: #007700">= &amp;</span><span style="color: #0000BB">$suit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Error: Cannot acquire reference to property Suit::$value<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>


  <p class="para">
   Backed enums implement an internal <span class="interfacename"><a href="class.backedenum.php" class="interfacename">BackedEnum</a></span> interface,
   which exposes two additional methods:
  </p>

  <ul class="simplelist">
   <li>
    <code class="literal">from(int|string): self</code> will take a scalar and return the corresponding
    Enum Case. If one is not found, it will throw a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>. This is mainly
    useful in cases where the input scalar is trusted and a missing enum value should be
    considered an application-stopping error.
   </li>
   <li>
    <code class="literal">tryFrom(int|string): ?self</code> will take a scalar and return the
    corresponding Enum Case. If one is not found, it will return <code class="literal">null</code>.
    This is mainly useful in cases where the input scalar is untrusted and the caller wants
    to implement their own error handling or default-value logic.
   </li>
  </ul>

  <p class="para">
   The <code class="literal">from()</code> and <code class="literal">tryFrom()</code> methods follow standard
   weak/strong typing rules. In weak typing mode, passing an integer or string is acceptable
   and the system will coerce the value accordingly. Passing a float will also work and be
   coerced. In strict typing mode, passing an integer to <code class="literal">from()</code> on a
   string-backed enum (or vice versa) will result in a <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span>,
   as will a float in all circumstances. All other parameter types will throw a TypeError
   in both modes.
  </p>

  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$record </span><span style="color: #007700">= </span><span style="color: #0000BB">get_stuff_from_database</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />print </span><span style="color: #0000BB">$record</span><span style="color: #007700">[</span><span style="color: #DD0000">'suit'</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">$suit </span><span style="color: #007700">=  </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">from</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">[</span><span style="color: #DD0000">'suit'</span><span style="color: #007700">]);<br /></span><span style="color: #FF8000">// Invalid data throws a ValueError: "X" is not a valid scalar value for enum "Suit"<br /></span><span style="color: #007700">print </span><span style="color: #0000BB">$suit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$suit </span><span style="color: #007700">= </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">tryFrom</span><span style="color: #007700">(</span><span style="color: #DD0000">'A'</span><span style="color: #007700">) ?? </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Spades</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Invalid data returns null, so Suit::Spades is used instead.<br /></span><span style="color: #007700">print </span><span style="color: #0000BB">$suit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>


  <p class="para">Manually defining a <code class="literal">from()</code> or <code class="literal">tryFrom()</code> method on a Backed Enum will result in a fatal error.</p>

  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/enumerations.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.enumerations.backed%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.enumerations.backed&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.enumerations.backed.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.enumerations.php">Enumerations</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.enumerations.overview.php" title="Enumerations overview">Enumerations overview</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.basics.php" title="Basic enumerations">Basic enumerations</a>
                        </li>
                                                <li class="current">
                            <a href="language.enumerations.backed.php" title="Backed enumerations">Backed enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.methods.php" title="Enumeration methods">Enumeration methods</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.static-methods.php" title="Enumeration static methods">Enumeration static methods</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.constants.php" title="Enumeration constants">Enumeration constants</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.expressions.php" title="Enum values in constant expressions">Enum values in constant expressions</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.object-differences.php" title="Differences from objects">Differences from objects</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.listing.php" title="Value listing">Value listing</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.serialization.php" title="Serialization">Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.object-differences.inheritance.php" title="Why enums aren't extendable">Why enums aren't extendable</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.examples.php" title="Examples">Examples</a>
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
