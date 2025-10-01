<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Floating point numbers - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.float.php">
 <link rel="shorturl" href="https://www.php.net/types.float">
 <link rel="alternate" href="https://www.php.net/types.float" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.integer.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.string.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.float.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.float.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.float.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.float.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.float.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.float.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.float.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.float.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.float.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.float.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.float.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Floating point numbers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Floating point numbers - Manual" />
<meta name="twitter:description" content="Floating point numbers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Floating point numbers - Manual" />
<meta itemprop="description" content="Floating point numbers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Floating point numbers" />

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
        <a href="language.types.string.php">
          Strings &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.integer.php">
          &laquo; Integers        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.types.php'>Types</a></li>      </ul>
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
            <option value='en/language.types.float.php' selected="selected">English</option>
            <option value='de/language.types.float.php'>German</option>
            <option value='es/language.types.float.php'>Spanish</option>
            <option value='fr/language.types.float.php'>French</option>
            <option value='it/language.types.float.php'>Italian</option>
            <option value='ja/language.types.float.php'>Japanese</option>
            <option value='pt_BR/language.types.float.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.float.php'>Russian</option>
            <option value='tr/language.types.float.php'>Turkish</option>
            <option value='uk/language.types.float.php'>Ukrainian</option>
            <option value='zh/language.types.float.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.float" class="sect1">
 <h2 class="title">Floating point numbers</h2>

 <p class="para">
  Floating point numbers (also known as &quot;floats&quot;, &quot;doubles&quot;, or &quot;real numbers&quot;)
  can be specified using any of the following syntaxes:
 </p>

 <div class="informalexample">
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1.234</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">1.2e3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">7E-10</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$d </span><span style="color: #007700">= </span><span style="color: #0000BB">1_234.567</span><span style="color: #007700">; </span><span style="color: #FF8000">// as of PHP 7.4.0<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <p class="para">
  Formally as of PHP 7.4.0 (previously, underscores have not been allowed):
 </p>

 <div class="informalexample">
  <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
LNUM          [0-9]+(_[0-9]+)*
DNUM          ({LNUM}?&quot;.&quot;{LNUM}) | ({LNUM}&quot;.&quot;{LNUM}?)
EXPONENT_DNUM (({LNUM} | {DNUM}) [eE][+-]? {LNUM})
</pre></div>
  </div>

 </div>

 <p class="para">
  The size of a float is platform-dependent, although a maximum of approximately 1.8e308
  with a precision of roughly 14 decimal digits is a common value (the 64 bit IEEE
  format).
 </p>

 <div class="warning"><strong class="warning">Warning</strong>
  <h1 class="title">Floating point precision</h1>

  <p class="para">
   Floating point numbers have limited precision. Although it depends on the
   system, PHP typically uses the IEEE 754 double precision format, which will
   give a maximum relative error due to rounding in the order of 1.11e-16.
   Non elementary arithmetic operations may give larger errors, and, of course,
   error propagation must be considered when several operations are
   compounded.
  </p>

  <p class="para">
   Additionally, rational numbers that are exactly representable as floating
   point numbers in base 10, like <code class="literal">0.1</code> or
   <code class="literal">0.7</code>, do not have an exact representation as floating
   point numbers in base 2, which is used internally, no matter the size of
   the mantissa. Hence, they cannot be converted into their internal binary
   counterparts without a small loss of precision. This can lead to confusing
   results: for example, <code class="literal">floor((0.1+0.7)*10)</code> will usually
   return <code class="literal">7</code> instead of the expected <code class="literal">8</code>,
   since the internal representation will be something like
   <code class="literal">7.9999999999999991118...</code>.
  </p>

  <p class="para">
   So never trust floating number results to the last digit, and do not compare
   floating point numbers directly for equality. If higher precision is
   necessary, the <a href="ref.bc.php" class="link">arbitrary precision math functions</a>
   and <a href="ref.gmp.php" class="link">gmp</a> functions are available.
  </p>

  <p class="para">
   For a &quot;simple&quot; explanation, see the <a href="http://floating-point-gui.de/" class="link external">&raquo;&nbsp;floating point guide</a>
   that&#039;s also titled &quot;Why don’t my numbers add up?&quot;
  </p>
 </div>

 <div class="sect2" id="language.types.float.casting">
  <h3 class="title">Converting to float</h3>

  <div class="sect3" id="language.types.float.casting.from-string">
   <h4 class="title">From strings</h4>

   <p class="simpara">
    If the string is
    <a href="language.types.numeric-strings.php" class="link">numeric</a>
    or leading numeric then it will resolve to the
    corresponding float value, otherwise it is converted to zero
    (<code class="literal">0</code>).
   </p>
  </div>

  <div class="sect3" id="language.types.float.casting.from-other">
   <h4 class="title">From other types</h4>

   <p class="para">
    For values of other types, the conversion is performed by converting the
    value to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> first and then to <span class="type"><a href="language.types.float.php" class="type float">float</a></span>. See
    <a href="language.types.integer.php#language.types.integer.casting" class="link">Converting to integer</a>
    for more information.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     As certain types have undefined behavior when converting to
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, this is also the case when converting to
     <span class="type"><a href="language.types.float.php" class="type float">float</a></span>.
    </p>
   </p></blockquote>
  </div>
 </div>

 <div class="sect2" id="language.types.float.comparison">
  <h3 class="title">Comparing floats</h3>

  <p class="para">
   As noted in the warning above, testing floating point values for equality is
   problematic, due to the way that they are represented internally. However,
   there are ways to make comparisons of floating point values that work around
   these limitations.
  </p>

  <p class="para">
   To test floating point values for equality, an upper bound on the relative
   error due to rounding is used. This value is known as the machine epsilon,
   or unit roundoff, and is the smallest acceptable difference in calculations.
  </p>

  <p class="para">
   <var class="varname">$a</var> and <var class="varname">$b</var> are equal to 5 digits of
   precision.
  </p>

  <div class="example" id="example-50">
   <p><strong>Example #1 Comparing Floats</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1.23456789</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">1.23456780</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$epsilon </span><span style="color: #007700">= </span><span style="color: #0000BB">0.00001</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">- </span><span style="color: #0000BB">$b</span><span style="color: #007700">) &lt; </span><span style="color: #0000BB">$epsilon</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"true"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="language.types.float.nan">
  <h3 class="title">NaN</h3>
  <p class="para">
   Some numeric operations can result in a value represented by the constant
   <strong><code><a href="math.constants.php#constant.nan">NAN</a></code></strong>. This result represents an undefined or
   unrepresentable value in floating-point calculations. Any loose or strict
   comparisons of this value against any other value, including itself, but except <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, will
   have a result of <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <p class="para">
   Because <strong><code><a href="math.constants.php#constant.nan">NAN</a></code></strong> represents any number of different values,
   <strong><code><a href="math.constants.php#constant.nan">NAN</a></code></strong> should not be compared to other values, including
   itself, and instead should be checked for using <span class="function"><a href="function.is-nan.php" class="function">is_nan()</a></span>.
  </p>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/types/float.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.float%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.float&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.float.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113703">  <div class="votes">
    <div id="Vu113703">
    <a href="/manual/vote-note.php?id=113703&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113703">
    <a href="/manual/vote-note.php?id=113703&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113703" title="69% like this...">
    260
    </div>
  </div>
  <a href="#113703" class="name">
  <strong class="user"><em>catalin dot luntraru at gmail dot com</em></strong></a><a class="genanchor" href="#113703"> &para;</a><div class="date" title="2013-11-18 03:44"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113703">
<div class="phpcode"><code><span class="html">$x = 8 - 6.4;  // which is equal to 1.6<br />$y = 1.6;<br />var_dump($x == $y); // is not true<br /><br />PHP thinks that 1.6 (coming from a difference) is not equal to 1.6. To make it work, use round()<br /><br />var_dump(round($x, 2) == round($y, 2)); // this is true<br /><br />This happens probably because $x is not really 1.6, but 1.599999.. and var_dump shows it to you as being 1.6.</span></code></div>
  </div>
 </div>
  <div class="note" id="44692">  <div class="votes">
    <div id="Vu44692">
    <a href="/manual/vote-note.php?id=44692&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44692">
    <a href="/manual/vote-note.php?id=44692&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44692" title="73% like this...">
    137
    </div>
  </div>
  <a href="#44692" class="name">
  <strong class="user"><em>feline at NOSPAM dot penguin dot servehttp dot com</em></strong></a><a class="genanchor" href="#44692"> &para;</a><div class="date" title="2004-08-12 06:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44692">
<div class="phpcode"><code><span class="html">General computing hint: If you're keeping track of money, do yourself and your users the favor of handling everything internally in cents and do as much math as you can in integers. Store values in cents if at all possible. Add and subtract in cents. At every operation that wii involve floats, ask yourself "what will happen in the real world if I get a fraction of a cent here" and if the answer is that this operation will generate a transaction in integer cents, do not try to carry fictional fractional accuracy that will only screw things up later.</span></code></div>
  </div>
 </div>
  <div class="note" id="29170">  <div class="votes">
    <div id="Vu29170">
    <a href="/manual/vote-note.php?id=29170&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29170">
    <a href="/manual/vote-note.php?id=29170&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29170" title="61% like this...">
    68
    </div>
  </div>
  <a href="#29170" class="name">
  <strong class="user"><em>www.sarioz.com</em></strong></a><a class="genanchor" href="#29170"> &para;</a><div class="date" title="2003-02-04 10:49"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29170">
<div class="phpcode"><code><span class="html">just a comment on something the "Floating point precision" inset, which goes: "This is related to .... 0.3333333."<br /><br />While the author probably knows what they are talking about, this loss of precision has nothing to do with decimal notation, it has to do with representation as a floating-point binary in a finite register, such as while 0.8 terminates in decimal, it is the repeating 0.110011001100... in binary, which is truncated.  0.1 and 0.7 are also non-terminating in binary, so they are also truncated, and the sum of these truncated numbers does not add up to the truncated binary representation of 0.8 (which is why (floor)(0.8*10) yields a different, more intuitive, result).  However, since 2 is a factor of 10, any number that terminates in binary also terminates in decimal.</span></code></div>
  </div>
 </div>
  <div class="note" id="120766">  <div class="votes">
    <div id="Vu120766">
    <a href="/manual/vote-note.php?id=120766&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120766">
    <a href="/manual/vote-note.php?id=120766&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120766" title="55% like this...">
    6
    </div>
  </div>
  <a href="#120766" class="name">
  <strong class="user"><em>lwiwala at gmail dot com</em></strong></a><a class="genanchor" href="#120766"> &para;</a><div class="date" title="2017-03-07 03:49"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120766">
<div class="phpcode"><code><span class="html">To compare two numbers use:<br /><br />$epsilon = 1e-6;<br /><br />if(abs($firstNumber-$secondNumber) &lt; $epsilon){<br />   // equals<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="30071">  <div class="votes">
    <div id="Vu30071">
    <a href="/manual/vote-note.php?id=30071&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30071">
    <a href="/manual/vote-note.php?id=30071&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30071" title="55% like this...">
    20
    </div>
  </div>
  <a href="#30071" class="name">
  <strong class="user"><em>backov at spotbrokers-nospamplz dot com</em></strong></a><a class="genanchor" href="#30071"> &para;</a><div class="date" title="2003-03-05 01:16"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30071">
<div class="phpcode"><code><span class="html">I'd like to point out a "feature" of PHP's floating point support that isn't made clear anywhere here, and was driving me insane.
<br />
<br />This test (where var_dump says that $a=0.1 and $b=0.1)
<br />
<br />if ($a&gt;=$b) echo "blah!";
<br />
<br />Will fail in some cases due to hidden precision (standard C problem, that PHP docs make no mention of, so I assumed they had gotten rid of it). I should point out that I originally thought this was an issue with the floats being stored as strings, so I forced them to be floats and they still didn't get evaluated properly (probably 2 different problems there).
<br />
<br />To fix, I had to do this horrible kludge (the equivelant of anyway):
<br />
<br />if (round($a,3)&gt;=round($b,3)) echo "blah!";
<br />
<br />THIS works. Obviously even though var_dump says the variables are identical, and they SHOULD BE identical (started at 0.01 and added 0.001 repeatedly), they're not. There's some hidden precision there that was making me tear my hair out. Perhaps this should be added to the documentation?</span></code></div>
  </div>
 </div>
  <div class="note" id="58824">  <div class="votes">
    <div id="Vu58824">
    <a href="/manual/vote-note.php?id=58824&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58824">
    <a href="/manual/vote-note.php?id=58824&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58824" title="54% like this...">
    9
    </div>
  </div>
  <a href="#58824" class="name">
  <strong class="user"><em>Luzian</em></strong></a><a class="genanchor" href="#58824"> &para;</a><div class="date" title="2005-11-17 12:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58824">
<div class="phpcode"><code><span class="html">Be careful when using float values in strings that are used as code later, for example when generating JavaScript code or SQL statements. The float is actually formatted according to the browser's locale setting, which means that "0.23" will result in "0,23". Imagine something like this:<br /><br />$x = 0.23;<br />$js = "var foo = doBar($x);";<br />print $js;<br /><br />This would result in a different result for users with some locales. On most systems, this would print:<br /><br />var foo = doBar(0.23);<br /><br />but when for example a user from Germany arrives, it would be different:<br /><br />var foo = doBar(0,23);<br /><br />which is obviously a different call to the function. JavaScript won't state an error, additional arguments are discarded without notice, but the function doBar(a) would get 0 as parameter. Similar problems could arise anywhere else (SQL, any string used as code somewhere else). The problem persists, if you use the "." operator instead of evaluating the variable in the string.<br /><br />So if you REALLY need to be sure to have the string correctly formatted, use number_format() to do it!</span></code></div>
  </div>
 </div>
  <div class="note" id="98216">  <div class="votes">
    <div id="Vu98216">
    <a href="/manual/vote-note.php?id=98216&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98216">
    <a href="/manual/vote-note.php?id=98216&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98216" title="52% like this...">
    6
    </div>
  </div>
  <a href="#98216" class="name">
  <strong class="user"><em>magicaltux at php dot net</em></strong></a><a class="genanchor" href="#98216"> &para;</a><div class="date" title="2010-06-01 07:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98216">
<div class="phpcode"><code><span class="html">In some cases you may want to get the maximum value for a float without getting "INF".<br /><br />var_dump(1.8e308); will usually show: float(INF)<br /><br />I wrote a tiny function that will iterate in order to find the biggest non-infinite float value. It comes with a configurable multiplicator and affine values so you can share more CPU to get a more accurate estimate.<br /><br />I haven't seen better values with more affine, but well, the possibility is here so if you really thing it's worth the cpu time, just try to affine more.<br /><br />Best results seems to be with mul=2/affine=1. You can play with the values and see what you get. The good thing is this method will work on any system.<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">float_max</span><span class="keyword">(</span><span class="default">$mul </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">, </span><span class="default">$affine </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="default">$max </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$omax </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    while((string)</span><span class="default">$max </span><span class="keyword">!= </span><span class="string">'INF'</span><span class="keyword">) { </span><span class="default">$omax </span><span class="keyword">= </span><span class="default">$max</span><span class="keyword">; </span><span class="default">$max </span><span class="keyword">*= </span><span class="default">$mul</span><span class="keyword">; }<br /><br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$affine</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />      </span><span class="default">$pmax </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$max </span><span class="keyword">= </span><span class="default">$omax</span><span class="keyword">;<br />      while((string)</span><span class="default">$max </span><span class="keyword">!= </span><span class="string">'INF'</span><span class="keyword">) {<br />        </span><span class="default">$omax </span><span class="keyword">= </span><span class="default">$max</span><span class="keyword">;<br />        </span><span class="default">$max </span><span class="keyword">+= </span><span class="default">$pmax</span><span class="keyword">;<br />        </span><span class="default">$pmax </span><span class="keyword">*= </span><span class="default">$mul</span><span class="keyword">;<br />      }<br />    }<br />    return </span><span class="default">$omax</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31622">  <div class="votes">
    <div id="Vu31622">
    <a href="/manual/vote-note.php?id=31622&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31622">
    <a href="/manual/vote-note.php?id=31622&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31622" title="53% like this...">
    5
    </div>
  </div>
  <a href="#31622" class="name">
  <strong class="user"><em>james dot cridland at virginradio dot co dot uk</em></strong></a><a class="genanchor" href="#31622"> &para;</a><div class="date" title="2003-04-28 07:44"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31622">
<div class="phpcode"><code><span class="html">The 'floating point precision' box in practice means:<br /><br />&lt;? echo (69.1-floor(69.1)); ?&gt;<br />Think this'll return 0.1?<br />It doesn't - it returns 0.099999999999994<br /><br />&lt;? echo round((69.1-floor(69.1))); ?&gt;<br />This returns 0.1 and is the workaround we use.<br /><br />Note that<br />&lt;? echo (4.1-floor(4.1)); ?&gt;<br />*does* return 0.1 - so if you, like us, test this with low numbers, you won't, like us, understand why all of a sudden your script stops working, until you spend a lot of time, like us, debugging it.<br /><br />So, that's all lovely then.</span></code></div>
  </div>
 </div>
  <div class="note" id="54494">  <div class="votes">
    <div id="Vu54494">
    <a href="/manual/vote-note.php?id=54494&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54494">
    <a href="/manual/vote-note.php?id=54494&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54494" title="51% like this...">
    3
    </div>
  </div>
  <a href="#54494" class="name">
  <strong class="user"><em>rick at ninjafoo dot com</em></strong></a><a class="genanchor" href="#54494"> &para;</a><div class="date" title="2005-07-06 01:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54494">
<div class="phpcode"><code><span class="html">Concider the following:<br /><br />(19.6*100) != 1960  <br /><br />echo gettype(19.6*100) returns 'double', However even ..... <br /><br />(19.6*100) !== (double)1960 <br /><br />19.6*100 cannot be compaired to anything without manually <br />casting it as something else first. <br /><br />(string)(19.6*100) == 1960<br /><br />Rule of thumb, if it has a decimal point, use the BCMath functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="103209">  <div class="votes">
    <div id="Vu103209">
    <a href="/manual/vote-note.php?id=103209&amp;page=language.types.float&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103209">
    <a href="/manual/vote-note.php?id=103209&amp;page=language.types.float&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103209" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#103209" class="name">
  <strong class="user"><em>zelko at mojeime dot com</em></strong></a><a class="genanchor" href="#103209"> &para;</a><div class="date" title="2011-03-31 01:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103209">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />   $binarydata32 </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="string">'00000000'</span><span class="keyword">);<br />   </span><span class="default">$float32 </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"f"</span><span class="keyword">, </span><span class="default">$binarydata32</span><span class="keyword">); </span><span class="comment">// 0.0<br /><br />   </span><span class="default">$binarydata64 </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="string">'0000000000000000'</span><span class="keyword">);<br />   </span><span class="default">$float64 </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"d"</span><span class="keyword">, </span><span class="default">$binarydata64</span><span class="keyword">); </span><span class="comment">// 0.0<br /></span><span class="default">?&gt;<br /></span><br />I get 0 both for 32-bit and 64-bit numbers.<br /><br />But, please don't use your own "functions" to "convert" from float to binary and vice versa. Looping performance in PHP is horrible. Using pack/unpack you use processor's encoding, which is always correct. In C++ you can access the same 32/64 data as either float/double or 32/64 bit integer. No "conversions".<br /><br />To get binary encoding:<br /><span class="default">&lt;?php<br />   $float32 </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"f"</span><span class="keyword">, </span><span class="default">5300231</span><span class="keyword">);<br />   </span><span class="default">$binarydata32 </span><span class="keyword">=</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="default">$float32</span><span class="keyword">); </span><span class="comment">//"0EC0A14A"<br /><br />   </span><span class="default">$float64 </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"d"</span><span class="keyword">, </span><span class="default">5300231</span><span class="keyword">);<br />   </span><span class="default">$binarydata64 </span><span class="keyword">=</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="default">$float64</span><span class="keyword">); </span><span class="comment">//"000000C001385441"<br /></span><span class="default">?&gt;<br /></span><br />And my example from half a year ago:<br /><span class="default">&lt;?php<br />    $binarydata32 </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="string">'0EC0A14A'</span><span class="keyword">);<br />    </span><span class="default">$float32 </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"f"</span><span class="keyword">, </span><span class="default">$binarydata32</span><span class="keyword">); </span><span class="comment">// 5300231<br />   <br />    </span><span class="default">$binarydata64 </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="string">'000000C001385441'</span><span class="keyword">);<br />    </span><span class="default">$float64 </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"d"</span><span class="keyword">, </span><span class="default">$binarydata64</span><span class="keyword">); </span><span class="comment">// 5300231<br /></span><span class="default">?&gt;<br /></span><br />And please mind the Big and Little endian boys...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.float&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.float.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.types.php">Types</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.types.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-system.php" title="Type System">Type System</a>
                        </li>
                                                <li class="">
                            <a href="language.types.null.php" title="NULL">NULL</a>
                        </li>
                                                <li class="">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="">
                            <a href="language.types.integer.php" title="Integers">Integers</a>
                        </li>
                                                <li class="current">
                            <a href="language.types.float.php" title="Floating point numbers">Floating point numbers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.string.php" title="Strings">Strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.numeric-strings.php" title="Numeric strings">Numeric strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="language.types.object.php" title="Objects">Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.types.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.resource.php" title="Resources">Resources</a>
                        </li>
                                                <li class="">
                            <a href="language.types.callable.php" title="Callbacks / Callables">Callbacks / Callables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.mixed.php" title="Mixed">Mixed</a>
                        </li>
                                                <li class="">
                            <a href="language.types.void.php" title="Void">Void</a>
                        </li>
                                                <li class="">
                            <a href="language.types.never.php" title="Never">Never</a>
                        </li>
                                                <li class="">
                            <a href="language.types.relative-class-types.php" title="Relative class types">Relative class types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.singleton.php" title="Singleton types">Singleton types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.iterable.php" title="Iterables">Iterables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.declarations.php" title="Type declarations">Type declarations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-juggling.php" title="Type Juggling">Type Juggling</a>
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
