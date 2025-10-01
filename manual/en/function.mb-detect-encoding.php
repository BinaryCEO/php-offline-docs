<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_detect_encoding - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-detect-encoding.php">
 <link rel="shorturl" href="https://www.php.net/mb-detect-encoding">
 <link rel="alternate" href="https://www.php.net/mb-detect-encoding" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-decode-numericentity.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-detect-order.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-detect-encoding.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-detect-encoding.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-detect-encoding.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-detect-encoding.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-detect-encoding.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-detect-encoding.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-detect-encoding.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-detect-encoding.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-detect-encoding.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-detect-encoding.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-detect-encoding.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Detect character encoding" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_detect_encoding - Manual" />
<meta name="twitter:description" content="Detect character encoding" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_detect_encoding - Manual" />
<meta itemprop="description" content="Detect character encoding" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Detect character encoding" />

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
        <a href="function.mb-detect-order.php">
          mb_detect_order &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-decode-numericentity.php">
          &laquo; mb_decode_numericentity        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      <li><a href='ref.mbstring.php'>Multibyte String Functions</a></li>      </ul>
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
            <option value='en/function.mb-detect-encoding.php' selected="selected">English</option>
            <option value='de/function.mb-detect-encoding.php'>German</option>
            <option value='es/function.mb-detect-encoding.php'>Spanish</option>
            <option value='fr/function.mb-detect-encoding.php'>French</option>
            <option value='it/function.mb-detect-encoding.php'>Italian</option>
            <option value='ja/function.mb-detect-encoding.php'>Japanese</option>
            <option value='pt_BR/function.mb-detect-encoding.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-detect-encoding.php'>Russian</option>
            <option value='tr/function.mb-detect-encoding.php'>Turkish</option>
            <option value='uk/function.mb-detect-encoding.php'>Ukrainian</option>
            <option value='zh/function.mb-detect-encoding.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-detect-encoding" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_detect_encoding</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_detect_encoding</span> &mdash; <span class="dc-title">Detect character encoding</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.mb-detect-encoding-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_detect_encoding</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$encodings</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$strict</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Detects the most likely character encoding for <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">string</code>
   from an ordered list of candidates.
  </p>
  <p class="para">
   Automatic detection of the intended character encoding can never be entirely reliable;
   without some additional information, it is similar to decoding an encrypted string
   without the key. It is always preferable to use an indication of character encoding
   stored or transmitted with the data, such as a &quot;Content-Type&quot; HTTP header.
  </p>
  <p class="para">
   This function is most useful with multibyte encodings, where not all sequences of
   bytes form a valid string. If the input string contains such a sequence, that
   encoding will be rejected, and the next encoding checked.
  </p>

  <div class="warning"><strong class="warning">Warning</strong>
   <h1 class="title">The result is not accurate</h1>
   <p class="para">
    The name of this function is misleading, it performs &quot;guessing&quot; rather than &quot;detection&quot;.
   </p>
   <p class="para">
    The guesses are far from accurate, and therefore you cannot use this function to accurately
    detect the correct character encoding.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mb-detect-encoding-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being inspected.
      </p>
     </dd>
    
    
     <dt><code class="parameter">encodings</code></dt>
     <dd>
      <p class="para">
       A list of character encodings to try, in order. The list may be specified as
       an array of strings, or a single string separated by commas.
      </p>
      <p class="para">
       If <code class="parameter">encodings</code> is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>,
       the current detect_order (set with the <a href="mbstring.configuration.php#ini.mbstring.detect-order" class="link">
       mbstring.detect_order</a> configuration option, or <span class="function"><a href="function.mb-detect-order.php" class="function">mb_detect_order()</a></span>
       function) will be used.
      </p>
     </dd>
    
    
     <dt><code class="parameter">strict</code></dt>
     <dd>
      <p class="para">
       Controls the behaviour when <code class="parameter">string</code>
       is not valid in any of the listed <code class="parameter">encodings</code>.
       If <code class="parameter">strict</code> is set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, the closest matching
       encoding will be returned; if <code class="parameter">strict</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>,
       <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> will be returned.
      </p>
      <p class="para">
       The default value for <code class="parameter">strict</code> can be set
       with the <a href="mbstring.configuration.php#ini.mbstring.strict-detection" class="link">
       mbstring.strict_detection</a> configuration option.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mb-detect-encoding-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The detected character encoding, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the string is not valid
   in any of the listed encodings.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mb-detect-encoding-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.2.0</td>
      <td>
       <span class="function"><strong>mb_detect_encoding()</strong></span> will no longer return
       the following non text encodings:
       <code class="literal">&quot;Base64&quot;</code>, <code class="literal">&quot;QPrint&quot;</code>,
       <code class="literal">&quot;UUencode&quot;</code>, <code class="literal">&quot;HTML entities&quot;</code>,
       <code class="literal">&quot;7 bit&quot;</code> and <code class="literal">&quot;8 bit&quot;</code>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.mb-detect-encoding-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2770">
    <p><strong>Example #1 <span class="function"><strong>mb_detect_encoding()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"\x95\xB6\x8E\x9A\x83\x52\x81\x5B\x83\x68"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Detect character encoding with current detect_order<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// "auto" is expanded according to mbstring.language<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #DD0000">"auto"</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Specify "encodings" parameter by list separated by comma<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #DD0000">"JIS, eucjp-win, sjis-win"</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Use array to specify "encodings" parameter<br /></span><span style="color: #0000BB">$encodings </span><span style="color: #007700">= [<br />  </span><span style="color: #DD0000">"ASCII"</span><span style="color: #007700">,<br />  </span><span style="color: #DD0000">"JIS"</span><span style="color: #007700">,<br />  </span><span style="color: #DD0000">"EUC-JP"<br /></span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">$encodings</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(5) &quot;ASCII&quot;
string(5) &quot;ASCII&quot;
string(8) &quot;SJIS-win&quot;
string(5) &quot;ASCII&quot;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2771">
    <p><strong>Example #2 Effect of <code class="parameter">strict</code> parameter</strong></p>
    <div class="example-contents">
     <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// 'áéóú' encoded in ISO-8859-1<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xE1\xE9\xF3\xFA"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// The string is not valid ASCII or UTF-8, but UTF-8 is considered a closer match<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, [</span><span style="color: #DD0000">'ASCII'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">], </span><span style="color: #0000BB">false</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, [</span><span style="color: #DD0000">'ASCII'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">], </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// If a valid encoding is found, the strict parameter does not change the result<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, [</span><span style="color: #DD0000">'ASCII'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">], </span><span style="color: #0000BB">false</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, [</span><span style="color: #DD0000">'ASCII'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">], </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(5) &quot;UTF-8&quot;
bool(false)
string(10) &quot;ISO-8859-1&quot;
string(10) &quot;ISO-8859-1&quot;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   In some cases, the same sequence of bytes may form a valid string in multiple
   character encodings, and it is impossible to know which interpretation was
   intended. For instance, among many others, the byte sequence &quot;\xC4\xA2&quot; could be:
  </p>
  <p class="para">
   <ul class="simplelist">
    <li>
     "Ä¢" (U+00C4 LATIN CAPITAL LETTER A WITH DIAERESIS followed by U+00A2 CENT SIGN)
     encoded in any of ISO-8859-1, ISO-8859-15, or Windows-1252
    </li>
    <li>
     "ФЂ" (U+0424 CYRILLIC CAPITAL LETTER EF followed by U+0402 CYRILLIC CAPITAL LETTER
     DJE) encoded in ISO-8859-5
    </li>
    <li>
     "Ģ" (U+0122 LATIN CAPITAL LETTER G WITH CEDILLA) encoded in UTF-8
    </li>
   </ul>
  </p>
  <p class="para">
   <div class="example" id="example-2772">
    <p><strong>Example #3 Effect of order when multiple encodings match</strong></p>
    <div class="example-contents">
     <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xC4\xA2"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// The string is valid in all three encodings, so the first one listed will be returned<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, [</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-5'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, [</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-5'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">mb_detect_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, [</span><span style="color: #DD0000">'ISO-8859-5'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(5) &quot;UTF-8&quot;
string(10) &quot;ISO-8859-1&quot;
string(10) &quot;ISO-8859-5&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mb-detect-encoding-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-detect-order.php" class="function" rel="rdfs-seeAlso">mb_detect_order()</a> - Set/Get character encoding detection order</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-detect-encoding.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-detect-encoding%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-detect-encoding&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-detect-encoding.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102510">  <div class="votes">
    <div id="Vu102510">
    <a href="/manual/vote-note.php?id=102510&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102510">
    <a href="/manual/vote-note.php?id=102510&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102510" title="72% like this...">
    83
    </div>
  </div>
  <a href="#102510" class="name">
  <strong class="user"><em>Gerg Tisza</em></strong></a><a class="genanchor" href="#102510"> &para;</a><div class="date" title="2011-02-18 03:43"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102510">
<div class="phpcode"><code><span class="html">If you try to use mb_detect_encoding to detect whether a string is valid UTF-8, use the strict mode, it is pretty worthless otherwise.<br /><br /><span class="default">&lt;?php<br />    $str </span><span class="keyword">= </span><span class="string">'áéóú'</span><span class="keyword">; </span><span class="comment">// ISO-8859-1<br />    </span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">); </span><span class="comment">// 'UTF-8'<br />    </span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127650">  <div class="votes">
    <div id="Vu127650">
    <a href="/manual/vote-note.php?id=127650&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127650">
    <a href="/manual/vote-note.php?id=127650&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127650" title="90% like this...">
    24
    </div>
  </div>
  <a href="#127650" class="name">
  <strong class="user"><em>mta59066 at gmail dot com</em></strong></a><a class="genanchor" href="#127650"> &para;</a><div class="date" title="2022-09-19 07:47"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127650">
<div class="phpcode"><code><span class="html">The documentation is no longer correct for php8.1 and mb_detect_encoding no longer supports order of encodings. The example outputs given in the documentation are also no longer correct for php8.1. This is somewhat explained here <a href="https://github.com/php/php-src/issues/8279" rel="nofollow" target="_blank">https://github.com/php/php-src/issues/8279</a><br /><br />I understand the previous ambiguity in these functions, but in my option 8.1 should have deprecated mb_detect_encoding and mb_detect_order and came up with different functions. It now tries to find the encoding that will use the least amount of space regardless of the order, and I am not sure who needs that.<br /><br />Below is an example function that will do what mb_detect_encoding was doing prior to the 8.1 change.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">mb_detect_enconding_in_order</span><span class="keyword">(</span><span class="default">string $string</span><span class="keyword">, array </span><span class="default">$encodings</span><span class="keyword">): </span><span class="default">string</span><span class="keyword">|</span><span class="default">false<br /></span><span class="keyword">{<br />    foreach(</span><span class="default">$encodings </span><span class="keyword">as </span><span class="default">$enc</span><span class="keyword">) {<br />        if (</span><span class="default">mb_check_encoding</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">)) {<br />            return </span><span class="default">$enc</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127905">  <div class="votes">
    <div id="Vu127905">
    <a href="/manual/vote-note.php?id=127905&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127905">
    <a href="/manual/vote-note.php?id=127905&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127905" title="77% like this...">
    5
    </div>
  </div>
  <a href="#127905" class="name">
  <strong class="user"><em>geompse at gmail dot com</em></strong></a><a class="genanchor" href="#127905"> &para;</a><div class="date" title="2022-11-08 10:35"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127905">
<div class="phpcode"><code><span class="html">Major undocumented breaking change since 8.1.7<br /><a href="https://3v4l.org/BLjZ3" rel="nofollow" target="_blank">https://3v4l.org/BLjZ3</a><br /><br />Make sure to replace mb_detect_encoding with a loop of calls to mb_check_encoding</span></code></div>
  </div>
 </div>
  <div class="note" id="51389">  <div class="votes">
    <div id="Vu51389">
    <a href="/manual/vote-note.php?id=51389&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51389">
    <a href="/manual/vote-note.php?id=51389&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51389" title="66% like this...">
    21
    </div>
  </div>
  <a href="#51389" class="name">
  <strong class="user"><em>Chrigu</em></strong></a><a class="genanchor" href="#51389"> &para;</a><div class="date" title="2005-03-29 07:32"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51389">
<div class="phpcode"><code><span class="html">If you need to distinguish between UTF-8 and ISO-8859-1 encoding, list UTF-8 first in your encoding_list:<br />mb_detect_encoding($string, 'UTF-8, ISO-8859-1');<br /><br />if you list ISO-8859-1 first, mb_detect_encoding() will always return ISO-8859-1.</span></code></div>
  </div>
 </div>
  <div class="note" id="68607">  <div class="votes">
    <div id="Vu68607">
    <a href="/manual/vote-note.php?id=68607&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68607">
    <a href="/manual/vote-note.php?id=68607&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68607" title="66% like this...">
    19
    </div>
  </div>
  <a href="#68607" class="name">
  <strong class="user"><em>chris AT w3style.co DOT uk</em></strong></a><a class="genanchor" href="#68607"> &para;</a><div class="date" title="2006-08-03 02:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68607">
<div class="phpcode"><code><span class="html">Based upon that snippet below using preg_match() I needed something faster and less specific.  That function works and is brilliant but it scans the entire strings and checks that it conforms to UTF-8.  I wanted something purely to check if a string contains UTF-8 characters so that I could switch character encoding from iso-8859-1 to utf-8.<br /><br />I modified the pattern to only look for non-ascii multibyte sequences in the UTF-8 range and also to stop once it finds at least one multibytes string.  This is quite a lot faster.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">detectUTF8</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)<br />{<br />        return </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'%(?:<br />        [\xC2-\xDF][\x80-\xBF]        # non-overlong 2-byte<br />        |\xE0[\xA0-\xBF][\x80-\xBF]               # excluding overlongs<br />        |[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}      # straight 3-byte<br />        |\xED[\x80-\x9F][\x80-\xBF]               # excluding surrogates<br />        |\xF0[\x90-\xBF][\x80-\xBF]{2}    # planes 1-3<br />        |[\xF1-\xF3][\x80-\xBF]{3}                  # planes 4-15<br />        |\xF4[\x80-\x8F][\x80-\xBF]{2}    # plane 16<br />        )+%xs'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91051">  <div class="votes">
    <div id="Vu91051">
    <a href="/manual/vote-note.php?id=91051&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91051">
    <a href="/manual/vote-note.php?id=91051&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91051" title="63% like this...">
    19
    </div>
  </div>
  <a href="#91051" class="name">
  <strong class="user"><em>nat3738 at gmail dot com</em></strong></a><a class="genanchor" href="#91051"> &para;</a><div class="date" title="2009-05-22 03:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91051">
<div class="phpcode"><code><span class="html">A simple way to detect UTF-8/16/32 of file by its BOM (not work with string or file without BOM)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Unicode BOM is U+FEFF, but after encoded, it will look like this.<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">'UTF32_BIG_ENDIAN_BOM'   </span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x00</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x00</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFE</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFF</span><span class="keyword">));<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">'UTF32_LITTLE_ENDIAN_BOM'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFF</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFE</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x00</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x00</span><span class="keyword">));<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">'UTF16_BIG_ENDIAN_BOM'   </span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFE</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFF</span><span class="keyword">));<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">'UTF16_LITTLE_ENDIAN_BOM'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFF</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFE</span><span class="keyword">));<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">'UTF8_BOM'               </span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xEF</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xBB</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xBF</span><span class="keyword">));<br /><br />function </span><span class="default">detect_utf_encoding</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {<br /><br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    </span><span class="default">$first2 </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">$first3 </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    </span><span class="default">$first4 </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    <br />    if (</span><span class="default">$first3 </span><span class="keyword">== </span><span class="default">UTF8_BOM</span><span class="keyword">) return </span><span class="string">'UTF-8'</span><span class="keyword">;<br />    elseif (</span><span class="default">$first4 </span><span class="keyword">== </span><span class="default">UTF32_BIG_ENDIAN_BOM</span><span class="keyword">) return </span><span class="string">'UTF-32BE'</span><span class="keyword">;<br />    elseif (</span><span class="default">$first4 </span><span class="keyword">== </span><span class="default">UTF32_LITTLE_ENDIAN_BOM</span><span class="keyword">) return </span><span class="string">'UTF-32LE'</span><span class="keyword">;<br />    elseif (</span><span class="default">$first2 </span><span class="keyword">== </span><span class="default">UTF16_BIG_ENDIAN_BOM</span><span class="keyword">) return </span><span class="string">'UTF-16BE'</span><span class="keyword">;<br />    elseif (</span><span class="default">$first2 </span><span class="keyword">== </span><span class="default">UTF16_LITTLE_ENDIAN_BOM</span><span class="keyword">) return </span><span class="string">'UTF-16LE'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86165">  <div class="votes">
    <div id="Vu86165">
    <a href="/manual/vote-note.php?id=86165&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86165">
    <a href="/manual/vote-note.php?id=86165&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86165" title="64% like this...">
    11
    </div>
  </div>
  <a href="#86165" class="name">
  <strong class="user"><em>dennis at nikolaenko dot ru</em></strong></a><a class="genanchor" href="#86165"> &para;</a><div class="date" title="2008-10-06 09:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86165">
<div class="phpcode"><code><span class="html">Beware of bug to detect Russian encodings<br /><a href="http://bugs.php.net/bug.php?id=38138" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=38138</a></span></code></div>
  </div>
 </div>
  <div class="note" id="77581">  <div class="votes">
    <div id="Vu77581">
    <a href="/manual/vote-note.php?id=77581&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77581">
    <a href="/manual/vote-note.php?id=77581&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77581" title="64% like this...">
    5
    </div>
  </div>
  <a href="#77581" class="name">
  <strong class="user"><em>rl at itfigures dot nl</em></strong></a><a class="genanchor" href="#77581"> &para;</a><div class="date" title="2007-09-04 02:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77581">
<div class="phpcode"><code><span class="html">I used Chris's function "detectUTF8" to detect the need from conversion from utf8 to 8859-1, which works fine. I did have a problem with the following iconv-conversion.<br /><br />The problem is that the iconv-conversion to 8859-1 (with //TRANSLIT) replaces the euro-sign with EUR, although it is common practice  that \x80 is used as the euro-sign in the 8859-1 charset. <br /><br />I could not use 8859-15 since that mangled some other characters, so I added 2 str_replace's:<br /><br />if(detectUTF8($str)){<br />  $str=str_replace("\xE2\x82\xAC","&amp;euro;",$str); <br />  $str=iconv("UTF-8","ISO-8859-1//TRANSLIT",$str);<br />  $str=str_replace("&amp;euro;","\x80",$str); <br />}<br /><br />If html-output is needed the last line is not necessary (and even unwanted).</span></code></div>
  </div>
 </div>
  <div class="note" id="112391">  <div class="votes">
    <div id="Vu112391">
    <a href="/manual/vote-note.php?id=112391&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112391">
    <a href="/manual/vote-note.php?id=112391&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112391" title="58% like this...">
    5
    </div>
  </div>
  <a href="#112391" class="name">
  <strong class="user"><em>eyecatchup at gmail dot com</em></strong></a><a class="genanchor" href="#112391"> &para;</a><div class="date" title="2013-06-11 10:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112391">
<div class="phpcode"><code><span class="html">Just a note: Instead of using the often recommended (rather complex) regular expression by W3C (<a href="http://www.w3.org/International/questions/qa-forms-utf-8.en.php" rel="nofollow" target="_blank">http://www.w3.org/International/questions/qa-forms-utf-8.en.php</a>), you can simply use the 'u' modifier to test a string for UTF-8 validity:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"//u"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">)) {<br />      </span><span class="comment">// $string is valid UTF-8<br />  </span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50087">  <div class="votes">
    <div id="Vu50087">
    <a href="/manual/vote-note.php?id=50087&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50087">
    <a href="/manual/vote-note.php?id=50087&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50087" title="60% like this...">
    5
    </div>
  </div>
  <a href="#50087" class="name">
  <strong class="user"><em>php-note-2005 at ryandesign dot com</em></strong></a><a class="genanchor" href="#50087"> &para;</a><div class="date" title="2005-02-17 07:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50087">
<div class="phpcode"><code><span class="html">Much simpler UTF-8-ness checker using a regular expression created by the W3C:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Returns true if $string is valid UTF-8 and false otherwise.<br /></span><span class="keyword">function </span><span class="default">is_utf8</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    <br />    </span><span class="comment">// From <a href="http://w3.org/International/questions/qa-forms-utf-8.html" rel="nofollow" target="_blank">http://w3.org/International/questions/qa-forms-utf-8.html</a><br />    </span><span class="keyword">return </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'%^(?:<br />          [\x09\x0A\x0D\x20-\x7E]            # ASCII<br />        | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte<br />        |  \xE0[\xA0-\xBF][\x80-\xBF]        # excluding overlongs<br />        | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte<br />        |  \xED[\x80-\x9F][\x80-\xBF]        # excluding surrogates<br />        |  \xF0[\x90-\xBF][\x80-\xBF]{2}     # planes 1-3<br />        | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15<br />        |  \xF4[\x80-\x8F][\x80-\xBF]{2}     # plane 16<br />    )*$%xs'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    <br />} </span><span class="comment">// function is_utf8<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85294">  <div class="votes">
    <div id="Vu85294">
    <a href="/manual/vote-note.php?id=85294&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85294">
    <a href="/manual/vote-note.php?id=85294&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85294" title="59% like this...">
    5
    </div>
  </div>
  <a href="#85294" class="name">
  <strong class="user"><em>hmdker at gmail dot com</em></strong></a><a class="genanchor" href="#85294"> &para;</a><div class="date" title="2008-08-23 09:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85294">
<div class="phpcode"><code><span class="html">Function to detect UTF-8, when mb_detect_encoding is not available it may be useful.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_utf8</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$b</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$bits</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$len</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="default">$c</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        if(</span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">128</span><span class="keyword">){<br />            if((</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="default">254</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />            elseif(</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="default">252</span><span class="keyword">) </span><span class="default">$bits</span><span class="keyword">=</span><span class="default">6</span><span class="keyword">;<br />            elseif(</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="default">248</span><span class="keyword">) </span><span class="default">$bits</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">;<br />            elseif(</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="default">240</span><span class="keyword">) </span><span class="default">$bits</span><span class="keyword">=</span><span class="default">4</span><span class="keyword">;<br />            elseif(</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="default">224</span><span class="keyword">) </span><span class="default">$bits</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">;<br />            elseif(</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="default">192</span><span class="keyword">) </span><span class="default">$bits</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">;<br />            else return </span><span class="default">false</span><span class="keyword">;<br />            if((</span><span class="default">$i</span><span class="keyword">+</span><span class="default">$bits</span><span class="keyword">) &gt; </span><span class="default">$len</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />            while(</span><span class="default">$bits </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">){<br />                </span><span class="default">$i</span><span class="keyword">++;<br />                </span><span class="default">$b</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />                if(</span><span class="default">$b </span><span class="keyword">&lt; </span><span class="default">128 </span><span class="keyword">|| </span><span class="default">$b </span><span class="keyword">&gt; </span><span class="default">191</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />                </span><span class="default">$bits</span><span class="keyword">--;<br />            }<br />        }<br />    }<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120905">  <div class="votes">
    <div id="Vu120905">
    <a href="/manual/vote-note.php?id=120905&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120905">
    <a href="/manual/vote-note.php?id=120905&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120905" title="55% like this...">
    2
    </div>
  </div>
  <a href="#120905" class="name">
  <strong class="user"><em>garbage at iglou dot eu</em></strong></a><a class="genanchor" href="#120905"> &para;</a><div class="date" title="2017-03-30 01:11"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120905">
<div class="phpcode"><code><span class="html">For detect UTF-8, you can use:<br /><br />if (preg_match('!!u', $str)) { echo 'utf-8'; }<br /><br />- Norihiori</span></code></div>
  </div>
 </div>
  <div class="note" id="126968">  <div class="votes">
    <div id="Vu126968">
    <a href="/manual/vote-note.php?id=126968&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126968">
    <a href="/manual/vote-note.php?id=126968&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126968" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#126968" class="name">
  <strong class="user"><em>d_maksimov</em></strong></a><a class="genanchor" href="#126968"> &para;</a><div class="date" title="2022-04-04 01:48"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126968">
<div class="phpcode"><code><span class="html">It was helpful for my exec(...) call. When it returned cp866 or cp1251:<br /><br />try {<br />    $line = iconv('CP866', 'CP1251', $line);<br />} catch(Exception $e) {<br />}<br />return iconv('CP1251', 'UTF-8', $line);</span></code></div>
  </div>
 </div>
  <div class="note" id="113983">  <div class="votes">
    <div id="Vu113983">
    <a href="/manual/vote-note.php?id=113983&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113983">
    <a href="/manual/vote-note.php?id=113983&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113983" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113983" class="name">
  <strong class="user"><em>emoebel at web dot de</em></strong></a><a class="genanchor" href="#113983"> &para;</a><div class="date" title="2013-12-25 09:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113983">
<div class="phpcode"><code><span class="html">if the  function " mb_detect_encoding" does not exist  ... <br /><br />... try: <br /><br /><span class="default">&lt;?php <br /></span><span class="comment">// ---------------------------------------------------- <br /></span><span class="keyword">if ( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_detect_encoding'</span><span class="keyword">) ) { <br /><br /></span><span class="comment">// ---------------------------------------------------------------- <br /></span><span class="keyword">function </span><span class="default">mb_detect_encoding </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) { <br />       <br />        static </span><span class="default">$enclist </span><span class="keyword">= array( <br />            </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'ASCII'</span><span class="keyword">, <br />            </span><span class="string">'ISO-8859-1'</span><span class="keyword">, </span><span class="string">'ISO-8859-2'</span><span class="keyword">, </span><span class="string">'ISO-8859-3'</span><span class="keyword">, </span><span class="string">'ISO-8859-4'</span><span class="keyword">, </span><span class="string">'ISO-8859-5'</span><span class="keyword">, <br />            </span><span class="string">'ISO-8859-6'</span><span class="keyword">, </span><span class="string">'ISO-8859-7'</span><span class="keyword">, </span><span class="string">'ISO-8859-8'</span><span class="keyword">, </span><span class="string">'ISO-8859-9'</span><span class="keyword">, </span><span class="string">'ISO-8859-10'</span><span class="keyword">, <br />            </span><span class="string">'ISO-8859-13'</span><span class="keyword">, </span><span class="string">'ISO-8859-14'</span><span class="keyword">, </span><span class="string">'ISO-8859-15'</span><span class="keyword">, </span><span class="string">'ISO-8859-16'</span><span class="keyword">, <br />            </span><span class="string">'Windows-1251'</span><span class="keyword">, </span><span class="string">'Windows-1252'</span><span class="keyword">, </span><span class="string">'Windows-1254'</span><span class="keyword">, <br />            );<br />        <br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">; <br />        <br />        foreach (</span><span class="default">$enclist </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) { <br />            </span><span class="default">$sample </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$item</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); <br />            if (</span><span class="default">md5</span><span class="keyword">(</span><span class="default">$sample</span><span class="keyword">) == </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) { <br />                if (</span><span class="default">$ret </span><span class="keyword">=== </span><span class="default">NULL</span><span class="keyword">) { </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$item</span><span class="keyword">; } else { </span><span class="default">$result </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; } <br />                break; <br />            }<br />        }<br />        <br />    return </span><span class="default">$result</span><span class="keyword">; <br />} <br /></span><span class="comment">// ---------------------------------------------------------------- <br /><br /></span><span class="keyword">} <br /></span><span class="comment">// ---------------------------------------------------- <br /></span><span class="default">?&gt;<br /></span><br />example / usage of: mb_detect_encoding() <br /><br /><span class="default">&lt;?php <br /></span><span class="comment">// ------------------------------------------------------ <br /></span><span class="keyword">function </span><span class="default">str_to_utf8 </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) { <br />    <br />    if (</span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) { <br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); <br />    }<br /><br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /></span><span class="comment">// ------------------------------------------------------ <br /></span><span class="default">?&gt;<br /></span><br />$txtstr = str_to_utf8($txtstr);</span></code></div>
  </div>
 </div>
  <div class="note" id="48955">  <div class="votes">
    <div id="Vu48955">
    <a href="/manual/vote-note.php?id=48955&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48955">
    <a href="/manual/vote-note.php?id=48955&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48955" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48955" class="name">
  <strong class="user"><em>maarten</em></strong></a><a class="genanchor" href="#48955"> &para;</a><div class="date" title="2005-01-12 03:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48955">
<div class="phpcode"><code><span class="html">Sometimes mb_detect_string is not what you need. When using pdflib for example you want to VERIFY the correctness of utf-8. mb_detect_encoding reports some iso-8859-1 encoded text as utf-8.<br />To verify utf 8 use the following:<br /><br />//<br />//    utf8 encoding validation developed based on Wikipedia entry at:<br />//    <a href="http://en.wikipedia.org/wiki/UTF-8" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/UTF-8</a><br />//<br />//    Implemented as a recursive descent parser based on a simple state machine<br />//    copyright 2005 Maarten Meijer<br />//<br />//    This cries out for a C-implementation to be included in PHP core<br />//<br />    function valid_1byte($char) {<br />        if(!is_int($char)) return false;<br />        return ($char &amp; 0x80) == 0x00;<br />    }<br />    <br />    function valid_2byte($char) {<br />        if(!is_int($char)) return false;<br />        return ($char &amp; 0xE0) == 0xC0;<br />    }<br /><br />    function valid_3byte($char) {<br />        if(!is_int($char)) return false;<br />        return ($char &amp; 0xF0) == 0xE0;<br />    }<br /><br />    function valid_4byte($char) {<br />        if(!is_int($char)) return false;<br />        return ($char &amp; 0xF8) == 0xF0;<br />    }<br />    <br />    function valid_nextbyte($char) {<br />        if(!is_int($char)) return false;<br />        return ($char &amp; 0xC0) == 0x80;<br />    }<br />    <br />    function valid_utf8($string) {<br />        $len = strlen($string);<br />        $i = 0;    <br />        while( $i &lt; $len ) {<br />            $char = ord(substr($string, $i++, 1));<br />            if(valid_1byte($char)) {    // continue<br />                continue;<br />            } else if(valid_2byte($char)) { // check 1 byte<br />                if(!valid_nextbyte(ord(substr($string, $i++, 1))))<br />                    return false;<br />            } else if(valid_3byte($char)) { // check 2 bytes<br />                if(!valid_nextbyte(ord(substr($string, $i++, 1))))<br />                    return false;<br />                if(!valid_nextbyte(ord(substr($string, $i++, 1))))<br />                    return false;<br />            } else if(valid_4byte($char)) { // check 3 bytes<br />                if(!valid_nextbyte(ord(substr($string, $i++, 1))))<br />                    return false;<br />                if(!valid_nextbyte(ord(substr($string, $i++, 1))))<br />                    return false;<br />                if(!valid_nextbyte(ord(substr($string, $i++, 1))))<br />                    return false;<br />            } // goto next char<br />        }<br />        return true; // done<br />    }<br /><br />for a drawing of the statemachine see: <a href="http://www.xs4all.nl/~mjmeijer/unicode.png" rel="nofollow" target="_blank">http://www.xs4all.nl/~mjmeijer/unicode.png</a> and <a href="http://www.xs4all.nl/~mjmeijer/unicode2.png" rel="nofollow" target="_blank">http://www.xs4all.nl/~mjmeijer/unicode2.png</a></span></code></div>
  </div>
 </div>
  <div class="note" id="111747">  <div class="votes">
    <div id="Vu111747">
    <a href="/manual/vote-note.php?id=111747&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111747">
    <a href="/manual/vote-note.php?id=111747&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111747" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#111747" class="name">
  <strong class="user"><em>bmrkbyet at web dot de</em></strong></a><a class="genanchor" href="#111747"> &para;</a><div class="date" title="2013-03-24 02:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111747">
<div class="phpcode"><code><span class="html">a) if the FUNCTION mb_detect_encoding is not available: <br /><br />### mb_detect_encoding ... iconv ###<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// -------------------------------------------<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_detect_encoding'</span><span class="keyword">)) { <br />function </span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) { <br />    <br />    static </span><span class="default">$list </span><span class="keyword">= array(</span><span class="string">'utf-8'</span><span class="keyword">, </span><span class="string">'iso-8859-1'</span><span class="keyword">, </span><span class="string">'windows-1251'</span><span class="keyword">);<br />    <br />    foreach (</span><span class="default">$list </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {<br />        </span><span class="default">$sample </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$item</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />        if (</span><span class="default">md5</span><span class="keyword">(</span><span class="default">$sample</span><span class="keyword">) == </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) { <br />            if (</span><span class="default">$enc </span><span class="keyword">== </span><span class="default">$item</span><span class="keyword">) { return </span><span class="default">true</span><span class="keyword">; }    else { return </span><span class="default">$item</span><span class="keyword">; } <br />        }<br />    }<br />    return </span><span class="default">null</span><span class="keyword">;<br />}<br />}<br /><br /></span><span class="comment">// -------------------------------------------<br /></span><span class="default">?&gt;<br /></span><br />b) if the FUNCTION mb_convert_encoding is not available: <br /><br />### mb_convert_encoding ... iconv ###<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// -------------------------------------------<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_convert_encoding'</span><span class="keyword">)) { <br />function </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$target_encoding</span><span class="keyword">, </span><span class="default">$source_encoding</span><span class="keyword">) { <br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="default">$source_encoding</span><span class="keyword">, </span><span class="default">$target_encoding</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); <br />    return </span><span class="default">$string</span><span class="keyword">; <br />}<br />}<br /><br /></span><span class="comment">// -------------------------------------------<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55228">  <div class="votes">
    <div id="Vu55228">
    <a href="/manual/vote-note.php?id=55228&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55228">
    <a href="/manual/vote-note.php?id=55228&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55228" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#55228" class="name">
  <strong class="user"><em>telemach</em></strong></a><a class="genanchor" href="#55228"> &para;</a><div class="date" title="2005-07-27 06:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55228">
<div class="phpcode"><code><span class="html">beware : even if you need to distinguish between UTF-8 and ISO-8859-1, and you the following detection order (as chrigu suggests)<br /><br />mb_detect_encoding('accentu?e' , 'UTF-8, ISO-8859-1')<br /><br />returns ISO-8859-1, while <br /><br />mb_detect_encoding('accentu?' , 'UTF-8, ISO-8859-1')<br /><br />returns UTF-8<br /><br />bottom line : an ending '?' (and probably other accentuated chars) mislead mb_detect_encoding</span></code></div>
  </div>
 </div>
  <div class="note" id="122556">  <div class="votes">
    <div id="Vu122556">
    <a href="/manual/vote-note.php?id=122556&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122556">
    <a href="/manual/vote-note.php?id=122556&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122556" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#122556" class="name">
  <strong class="user"><em>recentUser at example dot com</em></strong></a><a class="genanchor" href="#122556"> &para;</a><div class="date" title="2018-03-28 07:17"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122556">
<div class="phpcode"><code><span class="html">In my environment (PHP 7.1.12),<br />"mb_detect_encoding()" doesn't work<br />     where "mb_detect_order()" is not set appropriately.<br /><br />To enable "mb_detect_encoding()" to work in such a case,<br />     simply put "mb_detect_order('...')"<br />     before "mb_detect_encoding()" in your script file.<br /><br />Both <br />     "ini_set('mbstring.language', '...');"<br />     and<br />     "ini_set('mbstring.detect_order', '...');"<br />DON'T work in script files for this purpose<br />whereas setting them in PHP.INI file may work.</span></code></div>
  </div>
 </div>
  <div class="note" id="122227">  <div class="votes">
    <div id="Vu122227">
    <a href="/manual/vote-note.php?id=122227&amp;page=function.mb-detect-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122227">
    <a href="/manual/vote-note.php?id=122227&amp;page=function.mb-detect-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122227" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#122227" class="name">
  <strong class="user"><em>lotushzy at gmail dot com</em></strong></a><a class="genanchor" href="#122227"> &para;</a><div class="date" title="2018-01-04 12:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122227">
<div class="phpcode"><code><span class="html">About function mb_detect_encoding, the link <a href="http://php.net/manual/zh/function.mb-detect-encoding.php" rel="nofollow" target="_blank">http://php.net/manual/zh/function.mb-detect-encoding.php</a> , like this:<br />mb_detect_encoding('áéóú', 'UTF-8', true); // false<br />but now the result is not false, can you give me reason, thanks!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-detect-encoding&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-detect-encoding.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mbstring.php">Multibyte String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mb-check-encoding.php" title="mb_&#8203;check_&#8203;encoding">mb_&#8203;check_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-chr.php" title="mb_&#8203;chr">mb_&#8203;chr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-case.php" title="mb_&#8203;convert_&#8203;case">mb_&#8203;convert_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-encoding.php" title="mb_&#8203;convert_&#8203;encoding">mb_&#8203;convert_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-kana.php" title="mb_&#8203;convert_&#8203;kana">mb_&#8203;convert_&#8203;kana</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-variables.php" title="mb_&#8203;convert_&#8203;variables">mb_&#8203;convert_&#8203;variables</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-mimeheader.php" title="mb_&#8203;decode_&#8203;mimeheader">mb_&#8203;decode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-numericentity.php" title="mb_&#8203;decode_&#8203;numericentity">mb_&#8203;decode_&#8203;numericentity</a>
                        </li>
                                                <li class="current">
                            <a href="function.mb-detect-encoding.php" title="mb_&#8203;detect_&#8203;encoding">mb_&#8203;detect_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-order.php" title="mb_&#8203;detect_&#8203;order">mb_&#8203;detect_&#8203;order</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-mimeheader.php" title="mb_&#8203;encode_&#8203;mimeheader">mb_&#8203;encode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-numericentity.php" title="mb_&#8203;encode_&#8203;numericentity">mb_&#8203;encode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encoding-aliases.php" title="mb_&#8203;encoding_&#8203;aliases">mb_&#8203;encoding_&#8203;aliases</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg.php" title="mb_&#8203;ereg">mb_&#8203;ereg</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-match.php" title="mb_&#8203;ereg_&#8203;match">mb_&#8203;ereg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace.php" title="mb_&#8203;ereg_&#8203;replace">mb_&#8203;ereg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace-callback.php" title="mb_&#8203;ereg_&#8203;replace_&#8203;callback">mb_&#8203;ereg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search.php" title="mb_&#8203;ereg_&#8203;search">mb_&#8203;ereg_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getpos">mb_&#8203;ereg_&#8203;search_&#8203;getpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getregs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getregs">mb_&#8203;ereg_&#8203;search_&#8203;getregs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-init.php" title="mb_&#8203;ereg_&#8203;search_&#8203;init">mb_&#8203;ereg_&#8203;search_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-pos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;pos">mb_&#8203;ereg_&#8203;search_&#8203;pos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-regs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;regs">mb_&#8203;ereg_&#8203;search_&#8203;regs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-setpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;setpos">mb_&#8203;ereg_&#8203;search_&#8203;setpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi.php" title="mb_&#8203;eregi">mb_&#8203;eregi</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi-replace.php" title="mb_&#8203;eregi_&#8203;replace">mb_&#8203;eregi_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-get-info.php" title="mb_&#8203;get_&#8203;info">mb_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-input.php" title="mb_&#8203;http_&#8203;input">mb_&#8203;http_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-output.php" title="mb_&#8203;http_&#8203;output">mb_&#8203;http_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-internal-encoding.php" title="mb_&#8203;internal_&#8203;encoding">mb_&#8203;internal_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-language.php" title="mb_&#8203;language">mb_&#8203;language</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-lcfirst.php" title="mb_&#8203;lcfirst">mb_&#8203;lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-list-encodings.php" title="mb_&#8203;list_&#8203;encodings">mb_&#8203;list_&#8203;encodings</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ltrim.php" title="mb_&#8203;ltrim">mb_&#8203;ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ord.php" title="mb_&#8203;ord">mb_&#8203;ord</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-output-handler.php" title="mb_&#8203;output_&#8203;handler">mb_&#8203;output_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-parse-str.php" title="mb_&#8203;parse_&#8203;str">mb_&#8203;parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-preferred-mime-name.php" title="mb_&#8203;preferred_&#8203;mime_&#8203;name">mb_&#8203;preferred_&#8203;mime_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-encoding.php" title="mb_&#8203;regex_&#8203;encoding">mb_&#8203;regex_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-set-options.php" title="mb_&#8203;regex_&#8203;set_&#8203;options">mb_&#8203;regex_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-rtrim.php" title="mb_&#8203;rtrim">mb_&#8203;rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-scrub.php" title="mb_&#8203;scrub">mb_&#8203;scrub</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-send-mail.php" title="mb_&#8203;send_&#8203;mail">mb_&#8203;send_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-split.php" title="mb_&#8203;split">mb_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-pad.php" title="mb_&#8203;str_&#8203;pad">mb_&#8203;str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-split.php" title="mb_&#8203;str_&#8203;split">mb_&#8203;str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strcut.php" title="mb_&#8203;strcut">mb_&#8203;strcut</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strimwidth.php" title="mb_&#8203;strimwidth">mb_&#8203;strimwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stripos.php" title="mb_&#8203;stripos">mb_&#8203;stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stristr.php" title="mb_&#8203;stristr">mb_&#8203;stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strlen.php" title="mb_&#8203;strlen">mb_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strpos.php" title="mb_&#8203;strpos">mb_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrchr.php" title="mb_&#8203;strrchr">mb_&#8203;strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrichr.php" title="mb_&#8203;strrichr">mb_&#8203;strrichr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strripos.php" title="mb_&#8203;strripos">mb_&#8203;strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrpos.php" title="mb_&#8203;strrpos">mb_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strstr.php" title="mb_&#8203;strstr">mb_&#8203;strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtolower.php" title="mb_&#8203;strtolower">mb_&#8203;strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtoupper.php" title="mb_&#8203;strtoupper">mb_&#8203;strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strwidth.php" title="mb_&#8203;strwidth">mb_&#8203;strwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substitute-character.php" title="mb_&#8203;substitute_&#8203;character">mb_&#8203;substitute_&#8203;character</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr.php" title="mb_&#8203;substr">mb_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr-count.php" title="mb_&#8203;substr_&#8203;count">mb_&#8203;substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-trim.php" title="mb_&#8203;trim">mb_&#8203;trim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ucfirst.php" title="mb_&#8203;ucfirst">mb_&#8203;ucfirst</a>
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
