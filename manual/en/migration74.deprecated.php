<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Deprecated Features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration74.deprecated.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration74.deprecated.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration74.deprecated.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration74.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration74.incompatible.php">
 <link rel="next" href="https://www.php.net/manual/en/migration74.removed-extensions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration74.deprecated.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration74.deprecated.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration74.deprecated.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration74.deprecated.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration74.deprecated.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration74.deprecated.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration74.deprecated.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration74.deprecated.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration74.deprecated.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration74.deprecated.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration74.deprecated.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Deprecated Features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Deprecated Features - Manual" />
<meta name="twitter:description" content="Deprecated Features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Deprecated Features - Manual" />
<meta itemprop="description" content="Deprecated Features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Deprecated Features" />

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
        <a href="migration74.removed-extensions.php">
          Removed Extensions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration74.incompatible.php">
          &laquo; Backward Incompatible Changes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration74.php'>Migrating from PHP 7.3.x to PHP 7.4.x</a></li>      </ul>
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
            <option value='en/migration74.deprecated.php' selected="selected">English</option>
            <option value='de/migration74.deprecated.php'>German</option>
            <option value='es/migration74.deprecated.php'>Spanish</option>
            <option value='fr/migration74.deprecated.php'>French</option>
            <option value='it/migration74.deprecated.php'>Italian</option>
            <option value='ja/migration74.deprecated.php'>Japanese</option>
            <option value='pt_BR/migration74.deprecated.php'>Brazilian Portuguese</option>
            <option value='ru/migration74.deprecated.php'>Russian</option>
            <option value='tr/migration74.deprecated.php'>Turkish</option>
            <option value='uk/migration74.deprecated.php'>Ukrainian</option>
            <option value='zh/migration74.deprecated.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration74.deprecated" class="sect1">
 <h2 class="title">Deprecated Features</h2>

 <div class="sect2" id="migration74.deprecated.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration74.deprecated.core.nested-ternary">
   <h4 class="title">Nested ternary operators without explicit parentheses</h4>

   <p class="para">
    Nested ternary operations must explicitly use parentheses
    to dictate the order of the operations.  Previously, when used
    without parentheses, the left-associativity would not result
    in the expected behaviour in most cases.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />1 </span><span style="color: #007700">? </span><span style="color: #0000BB">2 </span><span style="color: #007700">: </span><span style="color: #0000BB">3 </span><span style="color: #007700">? </span><span style="color: #0000BB">4 </span><span style="color: #007700">: </span><span style="color: #0000BB">5</span><span style="color: #007700">;   </span><span style="color: #FF8000">// deprecated<br /></span><span style="color: #007700">(</span><span style="color: #0000BB">1 </span><span style="color: #007700">? </span><span style="color: #0000BB">2 </span><span style="color: #007700">: </span><span style="color: #0000BB">3</span><span style="color: #007700">) ? </span><span style="color: #0000BB">4 </span><span style="color: #007700">: </span><span style="color: #0000BB">5</span><span style="color: #007700">; </span><span style="color: #FF8000">// ok<br /></span><span style="color: #0000BB">1 </span><span style="color: #007700">? </span><span style="color: #0000BB">2 </span><span style="color: #007700">: (</span><span style="color: #0000BB">3 </span><span style="color: #007700">? </span><span style="color: #0000BB">4 </span><span style="color: #007700">: </span><span style="color: #0000BB">5</span><span style="color: #007700">); </span><span style="color: #FF8000">// ok<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    Parentheses are <em>not</em> required when nesting into the middle operand,
    as this is always unambiguous and not affected by associativity:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">1 ? 2 ? 3 : 4 : 5 // ok</span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.array-string-access-curly-brace">
   <h4 class="title">Array and string offset access using curly braces</h4>

   <p class="para">
    The array and string offset access syntax using curly braces is
    deprecated. Use <code class="literal">$var[$idx]</code> instead of
    <code class="literal">$var{$idx}</code>.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.real">
   <h4 class="title">(real) cast and <span class="function"><a href="function.is-real.php" class="function">is_real()</a></span> function</h4>

   <p class="para">
    The <code class="literal">(real)</code> cast is deprecated,
    use <code class="literal">(float)</code> instead.
   </p>
   <p class="para">
    The <span class="function"><a href="function.is-real.php" class="function">is_real()</a></span> function is also deprecated,
    use <span class="function"><a href="function.is-float.php" class="function">is_float()</a></span> instead.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.unbind-this">
   <h4 class="title">Unbinding <code class="literal">$this</code> when <code class="literal">$this</code> is used</h4>

   <p class="para">
    Unbinding <code class="literal">$this</code> of a non-static closure
    that uses <code class="literal">$this</code> is deprecated.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.parent">
   <h4 class="title"><code class="literal">parent</code> keyword without parent class</h4>

   <p class="para">
    Using <code class="literal">parent</code> inside a class without a parent
    is deprecated, and will throw a compile-time error in the future.
    Currently an error will only be generated if/when the parent is
    accessed at run-time.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.allow-url-include">
   <h4 class="title">allow_url_include INI option</h4>

   <p class="para">
    The <a href="filesystem.configuration.php#ini.allow-url-include" class="link">allow_url_include</a>
    ini directive is deprecated. Enabling it will generate
    a deprecation notice at startup.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.invalid-base-characters">
   <h4 class="title">Invalid characters in base conversion functions</h4>

   <p class="para">
    Passing invalid characters to <span class="function"><a href="function.base-convert.php" class="function">base_convert()</a></span>,
    <span class="function"><a href="function.bindec.php" class="function">bindec()</a></span>, <span class="function"><a href="function.octdec.php" class="function">octdec()</a></span> and
    <span class="function"><a href="function.hexdec.php" class="function">hexdec()</a></span> will now generate a deprecation notice.
    The result will still be computed as if the invalid characters did not exist.
    Leading and trailing whitespace, as well as prefixes of type 0x (depending on base)
    continue to be allowed.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.array-key-exists-objects">
   <h4 class="title">Using <span class="function"><a href="function.array-key-exists.php" class="function">array_key_exists()</a></span> on objects</h4>

   <p class="para">
    Using <span class="function"><a href="function.array-key-exists.php" class="function">array_key_exists()</a></span> on objects is deprecated.
    Instead either <span class="function"><a href="function.isset.php" class="function">isset()</a></span> or <span class="function"><a href="function.property-exists.php" class="function">property_exists()</a></span>
    should be used.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.magic-quotes-functions">
   <h4 class="title">Magic quotes functions</h4>

   <p class="para">
    The <span class="function"><a href="function.get-magic-quotes-gpc.php" class="function">get_magic_quotes_gpc()</a></span> and <span class="function"><a href="function.get-magic-quotes-runtime.php" class="function">get_magic_quotes_runtime()</a></span>
    functions are deprecated. They always return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.hebrevc">
   <h4 class="title"><span class="function"><a href="function.hebrevc.php" class="function">hebrevc()</a></span> function</h4>

   <p class="para">
    The <span class="function"><a href="function.hebrevc.php" class="function">hebrevc()</a></span> function is deprecated.
    It can be replaced with <code class="literal">nl2br(hebrev($str))</code> or,
    preferably, the use of Unicode RTL support.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.convert-cyr-string">
   <h4 class="title"><span class="function"><a href="function.convert-cyr-string.php" class="function">convert_cyr_string()</a></span> function</h4>

   <p class="para">
    The <span class="function"><a href="function.convert-cyr-string.php" class="function">convert_cyr_string()</a></span> function is deprecated.
    It can be replaced by one of <span class="function"><strong>mb_convert_string()</strong></span>,
    <span class="function"><a href="function.iconv.php" class="function">iconv()</a></span> or <span class="classname"><a href="class.uconverter.php" class="classname">UConverter</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.money-format">
   <h4 class="title"><span class="function"><a href="function.money-format.php" class="function">money_format()</a></span> function</h4>

   <p class="para">
    The <span class="function"><a href="function.money-format.php" class="function">money_format()</a></span> function is deprecated.
    It can be replaced by the intl <span class="classname"><a href="class.numberformatter.php" class="classname">NumberFormatter</a></span> functionality.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.ezmlm-hash">
   <h4 class="title"><span class="function"><a href="function.ezmlm-hash.php" class="function">ezmlm_hash()</a></span> function</h4>

   <p class="para">
    The <span class="function"><a href="function.ezmlm-hash.php" class="function">ezmlm_hash()</a></span> function is deprecated.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.restore-include-path">
   <h4 class="title"><span class="function"><a href="function.restore-include-path.php" class="function">restore_include_path()</a></span> function</h4>

   <p class="para">
    The <span class="function"><a href="function.restore-include-path.php" class="function">restore_include_path()</a></span> function is deprecated.
    It can be replaced by <code class="literal">ini_restore(&#039;include_path&#039;)</code>.
   </p>
  </div>

  <div class="sect3" id="migration74.deprecated.core.implode-reverse-parameters">
   <h4 class="title">Implode with historical parameter order</h4>

   <p class="para">
    Passing parameters to <span class="function"><a href="function.implode.php" class="function">implode()</a></span> in reverse order
    is deprecated, use <code class="literal">implode($glue, $parts)</code>
    instead of <code class="literal">implode($parts, $glue)</code>.
   </p>
  </div>

 </div>

 <div class="sect2" id="migration74.deprecated.com">
  <h3 class="title">COM</h3>

  <p class="para">
   Importing type libraries with case-insensitive constant
   registering has been deprecated.
  </p>
 </div>

 <div class="sect2" id="migration74.deprecated.filter">
  <h3 class="title">Filter</h3>

  <p class="para">
   <strong><code><a href="filter.constants.php#constant.filter-sanitize-magic-quotes">FILTER_SANITIZE_MAGIC_QUOTES</a></code></strong> is deprecated,
   use <strong><code><a href="filter.constants.php#constant.filter-sanitize-add-slashes">FILTER_SANITIZE_ADD_SLASHES</a></code></strong> instead.
  </p>
 </div>

 <div class="sect2" id="migration74.deprecated.mbstring">
  <h3 class="title">Multibyte String</h3>

  <p class="para">
   Passing a non-string pattern to <span class="function"><a href="function.mb-ereg-replace.php" class="function">mb_ereg_replace()</a></span>
   is deprecated. Currently, non-string patterns are interpreted as
   ASCII codepoints. In PHP 8, the pattern will be interpreted as a
   string instead.
  </p>
  <p class="para">
   Passing the encoding as 3rd parameter to <span class="function"><a href="function.mb-strrpos.php" class="function">mb_strrpos()</a></span>
   is deprecated. Instead pass a 0 offset, and encoding as 4th parameter.
  </p>
 </div>

 <div class="sect2" id="migration74.deprecated.ldap">
  <h3 class="title">Lightweight Directory Access Protocol</h3>

  <p class="para">
   <span class="function"><a href="function.ldap-control-paged-result-response.php" class="function">ldap_control_paged_result_response()</a></span> and
   <span class="function"><a href="function.ldap-control-paged-result.php" class="function">ldap_control_paged_result()</a></span> are deprecated.
   Pagination controls can be sent along with
   <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span> instead.
  </p>
 </div>

 <div class="sect2" id="migration74.deprecated.reflection">
  <h3 class="title">Reflection</h3>

  <p class="para">
   Calls to <span class="methodname"><a href="reflectiontype.tostring.php" class="methodname">ReflectionType::__toString()</a></span> now generate
   a deprecation notice. This method has been deprecated in favor of
   <span class="methodname"><a href="reflectionnamedtype.getname.php" class="methodname">ReflectionNamedType::getName()</a></span> in the documentation
   since PHP 7.1, but did not throw a deprecation notice for technical reasons.
  </p>
  <p class="para">
   The <code class="literal">export()</code> methods on all <span class="classname"><a href="class.reflection.php" class="classname">Reflection</a></span>
   classes are deprecated. Construct a <span class="classname"><a href="class.reflection.php" class="classname">Reflection</a></span> object and
   convert it to string instead:
   <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// ReflectionClass::export(Foo::class, false) is:<br /></span><span style="color: #007700">echo new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">Foo</span><span style="color: #007700">::class), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// $str = ReflectionClass::export(Foo::class, true) is:<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= (string) new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">Foo</span><span style="color: #007700">::class);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
  </p>
 </div>

 <div class="sect2" id="migration74.deprecated.socket">
  <h3 class="title">Socket</h3>

  <p class="para">
   The <strong><code>AI_IDN_ALLOW_UNASSIGNED</code></strong> and
   <strong><code>AI_IDN_USE_STD3_ASCII_RULES</code></strong> flags for
   <span class="function"><a href="function.socket-addrinfo-lookup.php" class="function">socket_addrinfo_lookup()</a></span> are deprecated,
   due to an upstream deprecation in glibc.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration74/deprecated.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration74.deprecated%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration74.deprecated&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.deprecated.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125074">  <div class="votes">
    <div id="Vu125074">
    <a href="/manual/vote-note.php?id=125074&amp;page=migration74.deprecated&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125074">
    <a href="/manual/vote-note.php?id=125074&amp;page=migration74.deprecated&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125074" title="56% like this...">
    16
    </div>
  </div>
  <a href="#125074" class="name">
  <strong class="user"><em>Ahmad Asjad</em></strong></a><a class="genanchor" href="#125074"> &para;</a><div class="date" title="2020-06-03 10:01"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125074">
<div class="phpcode"><code><span class="html">(\?[^php]).*(\:).*(\?).*(\:[^=])<br />Above regex can help others to find the nested ternary operator</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration74.deprecated&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.deprecated.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration74.php">Migrating from PHP 7.3.x to PHP 7.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration74.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration74.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration74.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration74.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration74.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="current">
                            <a href="migration74.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration74.removed-extensions.php" title="Removed Extensions">Removed Extensions</a>
                        </li>
                                                <li class="">
                            <a href="migration74.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration74.windows-support.php" title="Windows Support">Windows Support</a>
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
