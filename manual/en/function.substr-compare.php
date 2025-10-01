<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: substr_compare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.substr-compare.php">
 <link rel="shorturl" href="https://www.php.net/substr-compare">
 <link rel="alternate" href="https://www.php.net/substr-compare" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.substr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.substr-count.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.substr-compare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.substr-compare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.substr-compare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.substr-compare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.substr-compare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.substr-compare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.substr-compare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.substr-compare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.substr-compare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.substr-compare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.substr-compare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binary safe comparison of two strings from an offset, up to length characters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: substr_compare - Manual" />
<meta name="twitter:description" content="Binary safe comparison of two strings from an offset, up to length characters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: substr_compare - Manual" />
<meta itemprop="description" content="Binary safe comparison of two strings from an offset, up to length characters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binary safe comparison of two strings from an offset, up to length characters" />

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
        <a href="function.substr-count.php">
          substr_count &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.substr.php">
          &laquo; substr        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.substr-compare.php' selected="selected">English</option>
            <option value='de/function.substr-compare.php'>German</option>
            <option value='es/function.substr-compare.php'>Spanish</option>
            <option value='fr/function.substr-compare.php'>French</option>
            <option value='it/function.substr-compare.php'>Italian</option>
            <option value='ja/function.substr-compare.php'>Japanese</option>
            <option value='pt_BR/function.substr-compare.php'>Brazilian Portuguese</option>
            <option value='ru/function.substr-compare.php'>Russian</option>
            <option value='tr/function.substr-compare.php'>Turkish</option>
            <option value='uk/function.substr-compare.php'>Ukrainian</option>
            <option value='zh/function.substr-compare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.substr-compare" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">substr_compare</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">substr_compare</span> &mdash; <span class="dc-title">Binary safe comparison of two strings from an offset, up to length characters</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.substr-compare-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>substr_compare</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$haystack</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$needle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$case_insensitive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>substr_compare()</strong></span> compares <code class="parameter">haystack</code>
   from position <code class="parameter">offset</code> with <code class="parameter">needle</code>
   up to <code class="parameter">length</code> characters.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.substr-compare-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">haystack</code></dt>
     <dd>
      <p class="para">
       The main string being compared.
      </p>
     </dd>
    
    
     <dt><code class="parameter">needle</code></dt>
     <dd>
      <p class="para">
       The secondary string being compared.
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       The start position for the comparison. If negative, it starts counting
       from the end of the string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The length of the comparison. The default value is the largest of the
       length of the <code class="parameter">needle</code> compared to the length of
       <code class="parameter">haystack</code> minus the
       <code class="parameter">offset</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">case_insensitive</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">case_insensitive</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, comparison is
       case insensitive.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.substr-compare-returnvalues">
  <h3 class="title">Return Values</h3>
  
  <p class="simpara">
   Returns a value less than 0 if <code class="parameter">string1</code>
   is less than <code class="parameter">string2</code>; a value greater
   than 0 if <code class="parameter">string1</code> is greater than
   <code class="parameter">string2</code>, and <code class="literal">0</code> if they
   are equal.
   No particular meaning can be reliably inferred from the value aside
   from its sign.
  </p>

  <p class="para">
   If <code class="parameter">offset</code> is equal to (prior to PHP 7.2.18, 7.3.5) or
   greater than the length of <code class="parameter">haystack</code>, or the
   <code class="parameter">length</code> is set and is less than 0,
   <span class="function"><strong>substr_compare()</strong></span> prints a warning and returns
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.substr-compare-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
  This function is no longer guaranteed to return
  <code class="code">strlen($string1) - strlen($string2)</code> when string lengths
  are not equal, but may now return <code class="literal">-1</code> or
  <code class="literal">1</code> instead.
 </td>
</tr>


      <tr>
       <td>8.0.0</td>
       <td>
        <code class="parameter">length</code> is nullable now.
       </td>
      </tr>

      <tr>
       <td>7.2.18, 7.3.5</td>
       <td>
        <code class="parameter">offset</code> may now be equal to the length of <code class="parameter">haystack</code>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.substr-compare-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5186">
    <p><strong>Example #1 A <span class="function"><strong>substr_compare()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_compare</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">, </span><span style="color: #DD0000">"bc"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_compare</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">, </span><span style="color: #DD0000">"de"</span><span style="color: #007700">, -</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_compare</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">, </span><span style="color: #DD0000">"bcg"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_compare</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">, </span><span style="color: #DD0000">"BC"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_compare</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">, </span><span style="color: #DD0000">"bc"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_compare</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">, </span><span style="color: #DD0000">"cd"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_compare</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">, </span><span style="color: #DD0000">"abc"</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.substr-compare-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strncmp.php" class="function" rel="rdfs-seeAlso">strncmp()</a> - Binary safe string comparison of the first n characters</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/substr-compare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.substr-compare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.substr-compare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr-compare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110859">  <div class="votes">
    <div id="Vu110859">
    <a href="/manual/vote-note.php?id=110859&amp;page=function.substr-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110859">
    <a href="/manual/vote-note.php?id=110859&amp;page=function.substr-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110859" title="72% like this...">
    31
    </div>
  </div>
  <a href="#110859" class="name">
  <strong class="user"><em>jimmetry at gmail dot com</em></strong></a><a class="genanchor" href="#110859"> &para;</a><div class="date" title="2012-12-16 12:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110859">
<div class="phpcode"><code><span class="html">When you came to this page, you may have been looking for something a little simpler: A function that can check if a small string exists within a larger string starting at a particular index. Using substr_compare() for this can leave your code messy, because you need to check that your string is long enough (to avoid the warning), manually specify the length of the short string, and like many of the string functions, perform an integer comparison to answer a true/false question.<br /><br />I put together a simple function to return true if $str exists within $mainStr. If $loc is specified, the $str must begin at that index. If not, the entire $mainStr will be searched.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">contains_substr</span><span class="keyword">(</span><span class="default">$mainStr</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$loc </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />    if (</span><span class="default">$loc </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) return (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$mainStr</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">);<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$mainStr</span><span class="keyword">) &lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />    if ((</span><span class="default">$loc </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)) &gt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$mainStr</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />    return (</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$mainStr</span><span class="keyword">, </span><span class="default">$loc</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)), </span><span class="default">$str</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119982">  <div class="votes">
    <div id="Vu119982">
    <a href="/manual/vote-note.php?id=119982&amp;page=function.substr-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119982">
    <a href="/manual/vote-note.php?id=119982&amp;page=function.substr-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119982" title="66% like this...">
    9
    </div>
  </div>
  <a href="#119982" class="name">
  <strong class="user"><em>bishop at php dot net</em></strong></a><a class="genanchor" href="#119982"> &para;</a><div class="date" title="2016-10-03 07:28"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119982">
<div class="phpcode"><code><span class="html">This function efficiently implements checks for strings beginning or ending with other strings:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">str_begins</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">) {<br />  return </span><span class="default">0 </span><span class="keyword">=== </span><span class="default">substr_compare</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">));<br />}<br /><br />function </span><span class="default">str_ends</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,  </span><span class="default">$needle</span><span class="keyword">) {<br />  return </span><span class="default">0 </span><span class="keyword">=== </span><span class="default">substr_compare</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, -</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">));<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">str_begins</span><span class="keyword">(</span><span class="string">'<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>'</span><span class="keyword">, </span><span class="string">'<a href="https://" rel="nofollow" target="_blank">https://</a>'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />Note that these are not multi-byte character set aware.</span></code></div>
  </div>
 </div>
  <div class="note" id="109636">  <div class="votes">
    <div id="Vu109636">
    <a href="/manual/vote-note.php?id=109636&amp;page=function.substr-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109636">
    <a href="/manual/vote-note.php?id=109636&amp;page=function.substr-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109636" title="65% like this...">
    11
    </div>
  </div>
  <a href="#109636" class="name">
  <strong class="user"><em>Skyborne</em></strong></a><a class="genanchor" href="#109636"> &para;</a><div class="date" title="2012-08-03 01:55"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109636">
<div class="phpcode"><code><span class="html">Take note of the `length` parameter: "The default value is the largest of the length of the str compared to the length of main_str less the offset."<br /><br />This is *not* the length of str as you might (I always) expect, so if you leave it out, you'll get unexpected results.  Example:<br /><br /><span class="default">&lt;?php<br />$hash </span><span class="keyword">= </span><span class="string">'$5$lalalalalalalala$crypt.output.here'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">substr_compare</span><span class="keyword">(</span><span class="default">$hash</span><span class="keyword">, </span><span class="string">'$5$'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)); </span><span class="comment"># int(34)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">substr_compare</span><span class="keyword">(</span><span class="default">$hash</span><span class="keyword">, </span><span class="string">'$5$'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)); </span><span class="comment"># int(0)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">); </span><span class="comment"># string(6) "5.3.14"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.substr-compare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr-compare.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="current">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
