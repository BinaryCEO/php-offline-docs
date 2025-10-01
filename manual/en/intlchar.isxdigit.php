<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IntlChar::isxdigit - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/intlchar.isxdigit.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/intlchar.isxdigit.php">
 <link rel="alternate" href="https://www.php.net/manual/en/intlchar.isxdigit.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.intlchar.php">
 <link rel="prev" href="https://www.php.net/manual/en/intlchar.iswhitespace.php">
 <link rel="next" href="https://www.php.net/manual/en/intlchar.ord.php">

 <link rel="alternate" href="https://www.php.net/manual/en/intlchar.isxdigit.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/intlchar.isxdigit.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/intlchar.isxdigit.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/intlchar.isxdigit.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/intlchar.isxdigit.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/intlchar.isxdigit.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/intlchar.isxdigit.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/intlchar.isxdigit.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/intlchar.isxdigit.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/intlchar.isxdigit.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/intlchar.isxdigit.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Check if code point is a hexadecimal digit" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IntlChar::isxdigit - Manual" />
<meta name="twitter:description" content="Check if code point is a hexadecimal digit" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IntlChar::isxdigit - Manual" />
<meta itemprop="description" content="Check if code point is a hexadecimal digit" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Check if code point is a hexadecimal digit" />

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
        <a href="intlchar.ord.php">
          IntlChar::ord &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intlchar.iswhitespace.php">
          &laquo; IntlChar::isWhitespace        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='class.intlchar.php'>IntlChar</a></li>      </ul>
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
            <option value='en/intlchar.isxdigit.php' selected="selected">English</option>
            <option value='de/intlchar.isxdigit.php'>German</option>
            <option value='es/intlchar.isxdigit.php'>Spanish</option>
            <option value='fr/intlchar.isxdigit.php'>French</option>
            <option value='it/intlchar.isxdigit.php'>Italian</option>
            <option value='ja/intlchar.isxdigit.php'>Japanese</option>
            <option value='pt_BR/intlchar.isxdigit.php'>Brazilian Portuguese</option>
            <option value='ru/intlchar.isxdigit.php'>Russian</option>
            <option value='tr/intlchar.isxdigit.php'>Turkish</option>
            <option value='uk/intlchar.isxdigit.php'>Ukrainian</option>
            <option value='zh/intlchar.isxdigit.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="intlchar.isxdigit" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">IntlChar::isxdigit</h1>
  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">IntlChar::isxdigit</span> &mdash; <span class="dc-title">Check if code point is a hexadecimal digit</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-intlchar.isxdigit-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><strong>IntlChar::isxdigit</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$codepoint</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   Determines whether the specified code point is a hexadecimal digit.
  </p>
  <p class="para">
   <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for characters with general category &quot;Nd&quot; (decimal digit numbers) as
   well as Latin letters a-f and A-F in both ASCII and Fullwidth ASCII.
   (That is, for letters with code points 0041..0046, 0061..0066, FF21..FF26, FF41..FF46.)
  </p>
  <p class="para">
   This is equivalent to <code class="literal">IntlChar::digit($codepoint, 16) &gt;= 0</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-intlchar.isxdigit-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">codepoint</code></dt>
    <dd>
     <p class="para">The <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> codepoint value (e.g. <code class="literal">0x2603</code> for <em>U+2603 SNOWMAN</em>), or the character encoded as a UTF-8 <span class="type"><a href="language.types.string.php" class="type string">string</a></span> (e.g. <code class="literal">&quot;\u{2603}&quot;</code>)</p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-intlchar.isxdigit-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if
   <code class="parameter">codepoint</code> is a hexadecimal character, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if not. Returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-intlchar.isxdigit-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2747">
   <p><strong>Example #1 Testing different code points</strong></p>
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">isxdigit</span><span style="color: #007700">(</span><span style="color: #DD0000">"A"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">isxdigit</span><span style="color: #007700">(</span><span style="color: #DD0000">"1"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">isxdigit</span><span style="color: #007700">(</span><span style="color: #DD0000">"\u{2603}"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
    <div class="examplescode"><pre class="examplescode">bool(true)
bool(true)
bool(false)</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-intlchar.isxdigit-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    In order to narrow the definition of hexadecimal digits to only ASCII characters use:
   </p>
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$isASCIIHexadecimal </span><span style="color: #007700">= </span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$codepoint</span><span style="color: #007700">) &lt;= </span><span style="color: #0000BB">0x7F </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">isxdigit</span><span style="color: #007700">(</span><span style="color: #0000BB">$codepoint</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-intlchar.isxdigit-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="intlchar.isdigit.php" class="function" rel="rdfs-seeAlso">IntlChar::isdigit()</a> - Check if code point is a digit character</span></li>
    <li><span class="function"><a href="function.ctype-xdigit.php" class="function" rel="rdfs-seeAlso">ctype_xdigit()</a> - Check for character(s) representing a hexadecimal digit</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/intlchar/isxdigit.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fintlchar.isxdigit%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=intlchar.isxdigit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intlchar.isxdigit.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.intlchar.php">IntlChar</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intlchar.charage.php" title="charAge">charAge</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.chardigitvalue.php" title="charDigitValue">charDigitValue</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.chardirection.php" title="charDirection">charDirection</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.charfromname.php" title="charFromName">charFromName</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.charmirror.php" title="charMirror">charMirror</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.charname.php" title="charName">charName</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.chartype.php" title="charType">charType</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.digit.php" title="digit">digit</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.enumcharnames.php" title="enumCharNames">enumCharNames</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.enumchartypes.php" title="enumCharTypes">enumCharTypes</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.foldcase.php" title="foldCase">foldCase</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.fordigit.php" title="forDigit">forDigit</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getbidipairedbracket.php" title="getBidiPairedBracket">getBidiPairedBracket</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getblockcode.php" title="getBlockCode">getBlockCode</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getcombiningclass.php" title="getCombiningClass">getCombiningClass</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getfc-nfkc-closure.php" title="getFC_&#8203;NFKC_&#8203;Closure">getFC_&#8203;NFKC_&#8203;Closure</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getintpropertymaxvalue.php" title="getIntPropertyMaxValue">getIntPropertyMaxValue</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getintpropertyminvalue.php" title="getIntPropertyMinValue">getIntPropertyMinValue</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getintpropertyvalue.php" title="getIntPropertyValue">getIntPropertyValue</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getnumericvalue.php" title="getNumericValue">getNumericValue</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getpropertyenum.php" title="getPropertyEnum">getPropertyEnum</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getpropertyname.php" title="getPropertyName">getPropertyName</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getpropertyvalueenum.php" title="getPropertyValueEnum">getPropertyValueEnum</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getpropertyvaluename.php" title="getPropertyValueName">getPropertyValueName</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.getunicodeversion.php" title="getUnicodeVersion">getUnicodeVersion</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.hasbinaryproperty.php" title="hasBinaryProperty">hasBinaryProperty</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isalnum.php" title="isalnum">isalnum</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isalpha.php" title="isalpha">isalpha</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isbase.php" title="isbase">isbase</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isblank.php" title="isblank">isblank</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.iscntrl.php" title="iscntrl">iscntrl</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isdefined.php" title="isdefined">isdefined</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isdigit.php" title="isdigit">isdigit</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isgraph.php" title="isgraph">isgraph</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isidignorable.php" title="isIDIgnorable">isIDIgnorable</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isidpart.php" title="isIDPart">isIDPart</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isidstart.php" title="isIDStart">isIDStart</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isisocontrol.php" title="isISOControl">isISOControl</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isjavaidpart.php" title="isJavaIDPart">isJavaIDPart</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isjavaidstart.php" title="isJavaIDStart">isJavaIDStart</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isjavaspacechar.php" title="isJavaSpaceChar">isJavaSpaceChar</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.islower.php" title="islower">islower</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.ismirrored.php" title="isMirrored">isMirrored</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isprint.php" title="isprint">isprint</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.ispunct.php" title="ispunct">ispunct</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isspace.php" title="isspace">isspace</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.istitle.php" title="istitle">istitle</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isualphabetic.php" title="isUAlphabetic">isUAlphabetic</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isulowercase.php" title="isULowercase">isULowercase</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isupper.php" title="isupper">isupper</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isuuppercase.php" title="isUUppercase">isUUppercase</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.isuwhitespace.php" title="isUWhiteSpace">isUWhiteSpace</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.iswhitespace.php" title="isWhitespace">isWhitespace</a>
                        </li>
                                                <li class="current">
                            <a href="intlchar.isxdigit.php" title="isxdigit">isxdigit</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.tolower.php" title="tolower">tolower</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.totitle.php" title="totitle">totitle</a>
                        </li>
                                                <li class="">
                            <a href="intlchar.toupper.php" title="toupper">toupper</a>
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
