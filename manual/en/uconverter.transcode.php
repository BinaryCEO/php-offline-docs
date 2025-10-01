<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: UConverter::transcode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/uconverter.transcode.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/uconverter.transcode.php">
 <link rel="alternate" href="https://www.php.net/manual/en/uconverter.transcode.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.uconverter.php">
 <link rel="prev" href="https://www.php.net/manual/en/uconverter.toucallback.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.intl.grapheme.php">

 <link rel="alternate" href="https://www.php.net/manual/en/uconverter.transcode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/uconverter.transcode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/uconverter.transcode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/uconverter.transcode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/uconverter.transcode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/uconverter.transcode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/uconverter.transcode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/uconverter.transcode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/uconverter.transcode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/uconverter.transcode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/uconverter.transcode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert a string from one character encoding to another" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: UConverter::transcode - Manual" />
<meta name="twitter:description" content="Convert a string from one character encoding to another" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: UConverter::transcode - Manual" />
<meta itemprop="description" content="Convert a string from one character encoding to another" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert a string from one character encoding to another" />

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
        <a href="ref.intl.grapheme.php">
          Grapheme Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="uconverter.toucallback.php">
          &laquo; UConverter::toUCallback        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='class.uconverter.php'>UConverter</a></li>      </ul>
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
            <option value='en/uconverter.transcode.php' selected="selected">English</option>
            <option value='de/uconverter.transcode.php'>German</option>
            <option value='es/uconverter.transcode.php'>Spanish</option>
            <option value='fr/uconverter.transcode.php'>French</option>
            <option value='it/uconverter.transcode.php'>Italian</option>
            <option value='ja/uconverter.transcode.php'>Japanese</option>
            <option value='pt_BR/uconverter.transcode.php'>Brazilian Portuguese</option>
            <option value='ru/uconverter.transcode.php'>Russian</option>
            <option value='tr/uconverter.transcode.php'>Turkish</option>
            <option value='uk/uconverter.transcode.php'>Ukrainian</option>
            <option value='zh/uconverter.transcode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="uconverter.transcode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">UConverter::transcode</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8, PECL &gt;= 3.0.0a1)</p><p class="refpurpose"><span class="refname">UConverter::transcode</span> &mdash; <span class="dc-title">Convert a string from one character encoding to another</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-uconverter.transcode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><strong>UConverter::transcode</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$str</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$toEncoding</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fromEncoding</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Converts <code class="parameter">str</code> from <code class="parameter">fromEncoding</code> to <code class="parameter">toEncoding</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-uconverter.transcode-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">str</code></dt>
    <dd>
     <p class="para">
      The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> to be converted.
     </p>
    </dd>
   
   
    <dt><code class="parameter">toEncoding</code></dt>
    <dd>
     <p class="para">
      The desired encoding of the result.
     </p>
    </dd>
   
   
    <dt><code class="parameter">fromEncoding</code></dt>
    <dd>
     <p class="para">
      The current encoding used to interpret <code class="parameter">str</code>.
     </p>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
      An optional <span class="type"><a href="language.types.array.php" class="type array">array</a></span>, which may contain the following keys:
      <ul class="simplelist">
       <li>
        <code class="literal">&#039;to_subst&#039;</code> - the substitution character to use
        in place of any character of <code class="parameter">str</code> which cannot
        be encoded in <code class="parameter">toEncoding</code>. If specified, it must
        represent a single character in the target encoding.
       </li>
      </ul>
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-uconverter.transcode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the converted string or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-uconverter.transcode-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2679">
   <p><strong>Example #1 Converting from UTF-8 to UTF-16 and back</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\x5A\x6F\xC3\xAB"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 'Zoë' in UTF-8<br /></span><span style="color: #0000BB">$utf16_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-16BE'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf16_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$new_utf8_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf16_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-16BE'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$new_utf8_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">005a006f00eb
5a6fc3ab</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-2680">
   <p><strong>Example #2 Invalid characters in input</strong></p>
   <div class="example-contents"><p>
    If the input string contains a sequence of bytes which is not valid in
    the encoding specified by <code class="parameter">fromEncoding</code>, they are
    replaced by Unicode code point U+FFFD (Replacement Character) before
    converting to <code class="parameter">toEncoding</code>.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$invalid_utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xC3"</span><span style="color: #007700">; </span><span style="color: #FF8000">// incomplete multi-byte UTF-8 sequence<br /></span><span style="color: #0000BB">$utf16_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(</span><span style="color: #0000BB">$invalid_utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-16BE'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf16_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">fffd</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-2681">
   <p><strong>Example #3 Characters which cannot be encoded</strong></p>
   <div class="example-contents"><p>
    If the input string contains characters which cannot be represented
    in <code class="parameter">toEncoding</code>, they are replaced with a single
    character. The default character to use depends on the encoding, and
    can be controlled using the <code class="literal">&#039;to_subst&#039;</code> option.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xE2\x82\xAC"</span><span style="color: #007700">; </span><span style="color: #FF8000">// € (Euro Sign) does not exist in ISO 8859-1<br /><br />// Default replacement in ISO 8859-1 is "\x1A" (Substitute)<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Specify a replacement of '?' ("\x3F") instead<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'to_subst' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'?'</span><span style="color: #007700">]<br />);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Since ISO 8859-1 cannot map U+FFFD, invalid input is also replaced by to_subst<br /></span><span style="color: #0000BB">$invalid_utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xC3"</span><span style="color: #007700">; </span><span style="color: #FF8000">// incomplete multi-byte UTF-8 sequence<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$invalid_utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'to_subst' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'?'</span><span style="color: #007700">]<br />);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">1a
3f
3f</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-uconverter.transcode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-convert-encoding.php" class="function" rel="rdfs-seeAlso">mb_convert_encoding()</a> - Convert a string from one character encoding to another</span></li>
    <li><span class="function"><a href="function.iconv.php" class="function" rel="rdfs-seeAlso">iconv()</a> - Convert a string from one character encoding to another</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/uconverter/transcode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fuconverter.transcode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=uconverter.transcode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/uconverter.transcode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.uconverter.php">UConverter</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="uconverter.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.convert.php" title="convert">convert</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.fromucallback.php" title="fromUCallback">fromUCallback</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getaliases.php" title="getAliases">getAliases</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getavailable.php" title="getAvailable">getAvailable</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getdestinationencoding.php" title="getDestinationEncoding">getDestinationEncoding</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getdestinationtype.php" title="getDestinationType">getDestinationType</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.geterrorcode.php" title="getErrorCode">getErrorCode</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.geterrormessage.php" title="getErrorMessage">getErrorMessage</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getsourceencoding.php" title="getSourceEncoding">getSourceEncoding</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getsourcetype.php" title="getSourceType">getSourceType</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getstandards.php" title="getStandards">getStandards</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.getsubstchars.php" title="getSubstChars">getSubstChars</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.reasontext.php" title="reasonText">reasonText</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.setdestinationencoding.php" title="setDestinationEncoding">setDestinationEncoding</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.setsourceencoding.php" title="setSourceEncoding">setSourceEncoding</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.setsubstchars.php" title="setSubstChars">setSubstChars</a>
                        </li>
                                                <li class="">
                            <a href="uconverter.toucallback.php" title="toUCallback">toUCallback</a>
                        </li>
                                                <li class="current">
                            <a href="uconverter.transcode.php" title="transcode">transcode</a>
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
