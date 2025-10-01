<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: grapheme_extract - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.grapheme-extract.php">
 <link rel="shorturl" href="https://www.php.net/grapheme-extract">
 <link rel="alternate" href="https://www.php.net/grapheme-extract" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.intl.grapheme.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.intl.grapheme.php">
 <link rel="next" href="https://www.php.net/manual/en/function.grapheme-str-split.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.grapheme-extract.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.grapheme-extract.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.grapheme-extract.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.grapheme-extract.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.grapheme-extract.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.grapheme-extract.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.grapheme-extract.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.grapheme-extract.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.grapheme-extract.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.grapheme-extract.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.grapheme-extract.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: grapheme_extract - Manual" />
<meta name="twitter:description" content="Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: grapheme_extract - Manual" />
<meta itemprop="description" content="Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8" />

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
        <a href="function.grapheme-str-split.php">
          grapheme_str_split &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.intl.grapheme.php">
          &laquo; Grapheme Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='ref.intl.grapheme.php'>Grapheme Functions</a></li>      </ul>
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
            <option value='en/function.grapheme-extract.php' selected="selected">English</option>
            <option value='de/function.grapheme-extract.php'>German</option>
            <option value='es/function.grapheme-extract.php'>Spanish</option>
            <option value='fr/function.grapheme-extract.php'>French</option>
            <option value='it/function.grapheme-extract.php'>Italian</option>
            <option value='ja/function.grapheme-extract.php'>Japanese</option>
            <option value='pt_BR/function.grapheme-extract.php'>Brazilian Portuguese</option>
            <option value='ru/function.grapheme-extract.php'>Russian</option>
            <option value='tr/function.grapheme-extract.php'>Turkish</option>
            <option value='uk/function.grapheme-extract.php'>Ukrainian</option>
            <option value='zh/function.grapheme-extract.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.grapheme-extract" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">grapheme_extract</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">grapheme_extract</span> &mdash; <span class="dc-title">Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.grapheme-extract-description">
  <h3 class="title">Description</h3>
  <p class="para">Procedural style</p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>grapheme_extract</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$haystack</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = <strong><code><a href="intl.constants.php#constant.grapheme-extr-count">GRAPHEME_EXTR_COUNT</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$next</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8. 
  </p> 
  </div>


 <div class="refsect1 parameters" id="refsect1-function.grapheme-extract-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">haystack</code></dt>
     <dd>
      <p class="para">
       String to search.
      </p>
     </dd>
    
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">
       Maximum number items - based on the <code class="parameter">type</code> - to return.
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       Defines the type of units referred to by the <code class="parameter">size</code> parameter:
      </p>
       <p class="para">
        <ul class="simplelist">
         <li>GRAPHEME_EXTR_COUNT (default) -<code class="parameter">size</code> is the number of default
         grapheme clusters to extract.</li>
         <li>GRAPHEME_EXTR_MAXBYTES -<code class="parameter">size</code> is the maximum number of bytes
         returned.</li>
         <li>GRAPHEME_EXTR_MAXCHARS - <code class="parameter">size</code> is the maximum number of UTF-8
         characters returned.</li>
        </ul>
       </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       Starting position in <code class="parameter">haystack</code> in bytes - if given, it must be zero or a
       positive value that is less than or equal to the length of <code class="parameter">haystack</code> in
       bytes, or a negative value that counts from the end of <code class="parameter">haystack</code>.
       If <code class="parameter">offset</code> does not point to the first byte of a UTF-8
       character, the start position is moved to the next character boundary.
      </p>
     </dd>
    
    
     <dt><code class="parameter">next</code></dt>
     <dd>
      <p class="para">
       Reference to a value that will be set to the next starting position.
       When the call returns, this may point to the first byte position past the end of the string.
      </p>
     </dd>
    
 
   </dl>
  </p>
 </div>

   
 
 <div class="refsect1 returnvalues" id="refsect1-function.grapheme-extract-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A string starting at offset <code class="parameter">offset</code> and ending on a default grapheme cluster
   boundary that conforms to the <code class="parameter">size</code> and <code class="parameter">type</code> specified,
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.grapheme-extract-changelog">
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
      <td>7.1.0</td>
      <td>
       Support for negative <code class="parameter">offset</code>s has been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.grapheme-extract-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2682">
   <p><strong>Example #1 <span class="function"><strong>grapheme_extract()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$char_a_ring_nfd </span><span style="color: #007700">= </span><span style="color: #DD0000">"a\xCC\x8A"</span><span style="color: #007700">;  </span><span style="color: #FF8000">// 'LATIN SMALL LETTER A WITH RING ABOVE' (U+00E5) normalization form "D"<br /></span><span style="color: #0000BB">$char_o_diaeresis_nfd </span><span style="color: #007700">= </span><span style="color: #DD0000">"o\xCC\x88"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 'LATIN SMALL LETTER O WITH DIAERESIS' (U+00F6) normalization form "D"<br /><br /></span><span style="color: #007700">print </span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">grapheme_extract</span><span style="color: #007700">( </span><span style="color: #0000BB">$char_a_ring_nfd </span><span style="color: #007700">. </span><span style="color: #0000BB">$char_o_diaeresis_nfd</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">GRAPHEME_EXTR_COUNT</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="para">The above example will output:</p>
  <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">o%CC%88</pre>
</div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.grapheme-extract-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.grapheme-substr.php" class="function" rel="rdfs-seeAlso">grapheme_substr()</a> - Return part of a string</span></li>
     <li>
      <a href="http://unicode.org/reports/tr29/#Grapheme_Cluster_Boundaries" class="link external">&raquo;&nbsp;
       Unicode Text Segmentation: Grapheme Cluster Boundaries
      </a>
     </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/grapheme/grapheme-extract.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.grapheme-extract%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.grapheme-extract&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.grapheme-extract.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104872">  <div class="votes">
    <div id="Vu104872">
    <a href="/manual/vote-note.php?id=104872&amp;page=function.grapheme-extract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104872">
    <a href="/manual/vote-note.php?id=104872&amp;page=function.grapheme-extract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104872" title="85% like this...">
    5
    </div>
  </div>
  <a href="#104872" class="name">
  <strong class="user"><em>AJH</em></strong></a><a class="genanchor" href="#104872"> &para;</a><div class="date" title="2011-07-12 04:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104872">
<div class="phpcode"><code><span class="html">Here's how to use grapheme_extract() to loop across a UTF-8 string character by character.<br /><br /><span class="default">&lt;?php<br /><br />$str </span><span class="keyword">= </span><span class="string">"سabcक’…"</span><span class="keyword">;<br /></span><span class="comment">// if the previous line didn't come through, the string contained:<br />//U+0633,U+0061,U+0062,U+0063,U+0915,U+2019,U+2026<br /><br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />for (    </span><span class="default">$start </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$next </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$maxbytes </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">), </span><span class="default">$c </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$start </span><span class="keyword">&lt; </span><span class="default">$maxbytes</span><span class="keyword">;<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">grapheme_extract</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">GRAPHEME_EXTR_MAXCHARS </span><span class="keyword">, (</span><span class="default">$start </span><span class="keyword">= </span><span class="default">$next</span><span class="keyword">), </span><span class="default">$next</span><span class="keyword">)<br />    )<br />{<br />    if (empty(</span><span class="default">$c</span><span class="keyword">))<br />        continue;<br />    echo </span><span class="string">"This utf8 character is " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) . </span><span class="string">" bytes long and its first byte is " </span><span class="keyword">. </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) . </span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">$n</span><span class="keyword">++;<br />}<br />echo </span><span class="string">"</span><span class="default">$n</span><span class="string"> UTF-8 characters in a string of </span><span class="default">$maxbytes</span><span class="string"> bytes!\n"</span><span class="keyword">;<br /></span><span class="comment">// Should print: 7 UTF8 characters in a string of 14 bytes!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129006">  <div class="votes">
    <div id="Vu129006">
    <a href="/manual/vote-note.php?id=129006&amp;page=function.grapheme-extract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129006">
    <a href="/manual/vote-note.php?id=129006&amp;page=function.grapheme-extract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129006" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129006" class="name">
  <strong class="user"><em>Philo</em></strong></a><a class="genanchor" href="#129006"> &para;</a><div class="date" title="2023-11-06 09:20"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129006">
<div class="phpcode"><code><span class="html">The other comments on this page were helpful for me.<br />However, consider using something better than empty($value) when checking the value returned by grapheme_extract since it could as well return something like "0" (which of course evaluates to false).</span></code></div>
  </div>
 </div>
  <div class="note" id="125444">  <div class="votes">
    <div id="Vu125444">
    <a href="/manual/vote-note.php?id=125444&amp;page=function.grapheme-extract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125444">
    <a href="/manual/vote-note.php?id=125444&amp;page=function.grapheme-extract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125444" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125444" class="name">
  <strong class="user"><em>yevgen dot grytsay at gmail dot com</em></strong></a><a class="genanchor" href="#125444"> &para;</a><div class="date" title="2020-10-19 01:35"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125444">
<div class="phpcode"><code><span class="html">Looping through grapheme clusters:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Example taken from Rust documentation: <a href="https://doc.rust-lang.org/book/ch08-02-strings.html#bytes-and-scalar-values-and-grapheme-clusters-oh-my" rel="nofollow" target="_blank">https://doc.rust-lang.org/book/ch08-02-strings.html#bytes-and-scalar-values-and-grapheme-clusters-oh-my</a><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"नमस्ते"</span><span class="keyword">;<br /></span><span class="comment">// Alternatively:<br />//$str = pack('C*', ...[224, 164, 168, 224, 164, 174, 224, 164, 184, 224, 165, 141, 224, 164, 164, 224, 165, 135]);<br /></span><span class="default">$next </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$maxbytes </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br />while (</span><span class="default">$next </span><span class="keyword">&lt; </span><span class="default">$maxbytes</span><span class="keyword">) {<br />    </span><span class="default">$char </span><span class="keyword">= </span><span class="default">grapheme_extract</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">GRAPHEME_EXTR_COUNT</span><span class="keyword">, </span><span class="default">$next</span><span class="keyword">, </span><span class="default">$next</span><span class="keyword">);<br />    if (empty(</span><span class="default">$char</span><span class="keyword">)) {<br />        continue;<br />    }<br />    echo </span><span class="string">"</span><span class="keyword">{</span><span class="default">$char</span><span class="keyword">}</span><span class="string"> - This utf8 character is " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">) . </span><span class="string">' bytes long'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//string(18) "नमस्ते"<br />//न - This utf8 character is 3 bytes long<br />//म - This utf8 character is 3 bytes long<br />//स् - This utf8 character is 6 bytes long<br />//ते - This utf8 character is 6 bytes long<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.grapheme-extract&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.grapheme-extract.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.intl.grapheme.php">Grapheme Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.grapheme-extract.php" title="grapheme_&#8203;extract">grapheme_&#8203;extract</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-str-split.php" title="grapheme_&#8203;str_&#8203;split">grapheme_&#8203;str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-stripos.php" title="grapheme_&#8203;stripos">grapheme_&#8203;stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-stristr.php" title="grapheme_&#8203;stristr">grapheme_&#8203;stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-strlen.php" title="grapheme_&#8203;strlen">grapheme_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-strpos.php" title="grapheme_&#8203;strpos">grapheme_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-strripos.php" title="grapheme_&#8203;strripos">grapheme_&#8203;strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-strrpos.php" title="grapheme_&#8203;strrpos">grapheme_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-strstr.php" title="grapheme_&#8203;strstr">grapheme_&#8203;strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.grapheme-substr.php" title="grapheme_&#8203;substr">grapheme_&#8203;substr</a>
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
