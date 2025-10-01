<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: filter_var - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.filter-var.php">
 <link rel="shorturl" href="https://www.php.net/filter-var">
 <link rel="alternate" href="https://www.php.net/filter-var" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filter.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.filter-list.php">
 <link rel="next" href="https://www.php.net/manual/en/function.filter-var-array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.filter-var.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.filter-var.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.filter-var.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.filter-var.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.filter-var.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.filter-var.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.filter-var.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.filter-var.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.filter-var.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.filter-var.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.filter-var.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Filters a variable with a specified filter" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: filter_var - Manual" />
<meta name="twitter:description" content="Filters a variable with a specified filter" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: filter_var - Manual" />
<meta itemprop="description" content="Filters a variable with a specified filter" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Filters a variable with a specified filter" />

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
        <a href="function.filter-var-array.php">
          filter_var_array &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.filter-list.php">
          &laquo; filter_list        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.filter.php'>Filter</a></li>      <li><a href='ref.filter.php'>Filter Functions</a></li>      </ul>
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
            <option value='en/function.filter-var.php' selected="selected">English</option>
            <option value='de/function.filter-var.php'>German</option>
            <option value='es/function.filter-var.php'>Spanish</option>
            <option value='fr/function.filter-var.php'>French</option>
            <option value='it/function.filter-var.php'>Italian</option>
            <option value='ja/function.filter-var.php'>Japanese</option>
            <option value='pt_BR/function.filter-var.php'>Brazilian Portuguese</option>
            <option value='ru/function.filter-var.php'>Russian</option>
            <option value='tr/function.filter-var.php'>Turkish</option>
            <option value='uk/function.filter-var.php'>Ukrainian</option>
            <option value='zh/function.filter-var.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.filter-var" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">filter_var</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_var</span> &mdash; <span class="dc-title">Filters a variable with a specified filter</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.filter-var-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>filter_var</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="simpara">
   Filter a variable using a
   <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></code></strong>
   validation filters, a
   <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></code></strong>
   sanitization filters, or a custom filter.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.filter-var-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">value</code></dt>
    <dd>
     <span class="simpara">
      Value to filter.
     </span>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       Scalar values are
       <a href="language.types.string.php#language.types.string.casting" class="link">converted to string</a>
       internally before they are filtered.
      </p>
     </div>
    </dd>
   
   
    <dt><code class="parameter">filter</code></dt>
    <dd>
     <span class="simpara">
      The filter to apply.
      Can be a validation filter by using one of the
      <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></code></strong>
      constants, a sanitization filter by using one of the
      <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></code></strong>
      or <strong><code><a href="filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></code></strong>, or a custom filter by using
      <strong><code><a href="filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></code></strong>.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The default is <strong><code><a href="filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></code></strong>,
       which is an alias of <strong><code><a href="filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></code></strong>.
       This will result in no filtering taking place by default.
      </span>
     </p></blockquote>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <span class="simpara">
      Either an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of options,
      or a bitmask of filter flag constants
      <strong><code><a href="filter.constants.php#constant.filter-flag-none">FILTER_FLAG_<span class="replaceable">*</span></a></code></strong>.
     </span>
     <span class="simpara">
      If the <code class="parameter">filter</code> accepts options,
      flags can be provided by using the <code class="literal">&quot;flags&quot;</code> field of array.
     </span>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.filter-var-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="simpara">
   On success returns the filtered data.
   On failure <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned,
   unless the <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong> flag is used,
   in which case <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.filter-var-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-5382">
   <p><strong>Example #1 A <span class="function"><strong>filter_var()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'bob@example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_EMAIL</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'https://example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_URL</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_FLAG_PATH_REQUIRED</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">string(15) &quot;bob@example.com&quot;
bool(false)</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-5383">
   <p><strong>Example #2 Example validating entries of an array</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$emails </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">"bob@example.com"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"test@example.local"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"invalidemail"<br /></span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$emails</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_EMAIL</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_REQUIRE_ARRAY</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  string(15) &quot;bob@example.com&quot;
  [1]=&gt;
  string(18) &quot;test@example.local&quot;
  [2]=&gt;
  bool(false)
}</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-5384">
   <p><strong>Example #3 Example of passing an array for <code class="parameter">options</code></strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$options </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'options' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'min_range' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">10</span><span style="color: #007700">,<br />    ],<br />    </span><span style="color: #DD0000">'flags' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_FLAG_ALLOW_OCTAL</span><span style="color: #007700">,<br />];<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'0755'</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_INT</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'011'</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_INT</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">int(493)
bool(false)</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-5385">
   <p><strong>Example #4 Providing flags either directly or via an <span class="type"><a href="language.types.array.php" class="type array">array</a></span></strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'string'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">, [</span><span style="color: #DD0000">'flags' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">]));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">NULL
NULL</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.filter-var-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.filter-var-array.php" class="function" rel="rdfs-seeAlso">filter_var_array()</a> - Gets multiple variables and optionally filters them</span></li>
   <li><span class="function"><a href="function.filter-input.php" class="function" rel="rdfs-seeAlso">filter_input()</a> - Gets a specific external variable by name and optionally filters it</span></li>
   <li><span class="function"><a href="function.filter-input-array.php" class="function" rel="rdfs-seeAlso">filter_input_array()</a> - Gets external variables and optionally filters them</span></li>
   <li>
    Validation filters
    <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></code></strong>
   </li>
   <li>
    Sanitization filters
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></code></strong>
   </li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/filter/functions/filter-var.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.filter-var%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.filter-var&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-var.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">33 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111828">  <div class="votes">
    <div id="Vu111828">
    <a href="/manual/vote-note.php?id=111828&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111828">
    <a href="/manual/vote-note.php?id=111828&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111828" title="67% like this...">
    176
    </div>
  </div>
  <a href="#111828" class="name">
  <strong class="user"><em>cabrinosimone at gmail dot com</em></strong></a><a class="genanchor" href="#111828"> &para;</a><div class="date" title="2013-04-02 03:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111828">
<div class="phpcode"><code><span class="html">Pay attention that the function will not validate "not latin" domains.<br /><br />if (filter_var('уникум@из.рф', FILTER_VALIDATE_EMAIL)) { <br />    echo 'VALID'; <br />} else {<br />    echo 'NOT VALID';<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="112492">  <div class="votes">
    <div id="Vu112492">
    <a href="/manual/vote-note.php?id=112492&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112492">
    <a href="/manual/vote-note.php?id=112492&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112492" title="72% like this...">
    103
    </div>
  </div>
  <a href="#112492" class="name">
  <strong class="user"><em>gt at kani dot hu</em></strong></a><a class="genanchor" href="#112492"> &para;</a><div class="date" title="2013-06-21 02:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112492">
<div class="phpcode"><code><span class="html">I found some addresses that FILTER_VALIDATE_EMAIL rejects, but RFC5321 permits:<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (array(<br />        </span><span class="string">'localpart.ending.with.dot.@example.com'</span><span class="keyword">,<br />        </span><span class="string">'(comment)localpart@example.com'</span><span class="keyword">,<br />        </span><span class="string">'"this is v@lid!"@example.com'</span><span class="keyword">, <br />        </span><span class="string">'"much.more unusual"@example.com'</span><span class="keyword">,<br />        </span><span class="string">'postbox@com'</span><span class="keyword">,<br />        </span><span class="string">'admin@mailserver1'</span><span class="keyword">,<br />        </span><span class="string">'"()&lt;&gt;[]:,;@\\"\\\\!#$%&amp;\'*+-/=?^_`{}| ~.a"@example.org'</span><span class="keyword">,<br />        </span><span class="string">'" "@example.org'</span><span class="keyword">,<br />    ) as </span><span class="default">$address</span><span class="keyword">) {<br />    echo </span><span class="string">"&lt;p&gt;</span><span class="default">$address</span><span class="string"> is &lt;b&gt;"</span><span class="keyword">.(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$address</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_EMAIL</span><span class="keyword">) ? </span><span class="string">'' </span><span class="keyword">: </span><span class="string">'not'</span><span class="keyword">).</span><span class="string">" valid&lt;/b&gt;&lt;/p&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Results:<br /><br />localpart.ending.with.dot.@example.com is not valid<br />(comment)localpart@example.com is not valid<br />"this is v@lid!"@example.com is not valid<br />"much.more unusual"@example.com is not valid<br />postbox@com is not valid<br />admin@mailserver1 is not valid<br />"()&lt;&gt;[]:,;@\"\\!#$%&amp;'*+-/=?^_`{}| ~.a"@example.org is not valid<br />" "@example.org is not valid<br /><br />The documentation does not saying that FILTER_VALIDATE_EMAIL should pass the RFC5321, however you can meet with these examples (especially with the first one). So this is a note, not a bug report.</span></code></div>
  </div>
 </div>
  <div class="note" id="121263">  <div class="votes">
    <div id="Vu121263">
    <a href="/manual/vote-note.php?id=121263&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121263">
    <a href="/manual/vote-note.php?id=121263&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121263" title="77% like this...">
    62
    </div>
  </div>
  <a href="#121263" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#121263"> &para;</a><div class="date" title="2017-06-22 11:00"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121263">
<div class="phpcode"><code><span class="html">note that FILTER_VALIDATE_BOOLEAN tries to be smart, recognizing words like Yes, No, Off, On, both string and native types of true and false, and is not case-sensitive when validating strings.<br /><br /><span class="default">&lt;?php<br />$vals</span><span class="keyword">=array(</span><span class="string">'on'</span><span class="keyword">,</span><span class="string">'On'</span><span class="keyword">,</span><span class="string">'ON'</span><span class="keyword">,</span><span class="string">'off'</span><span class="keyword">,</span><span class="string">'Off'</span><span class="keyword">,</span><span class="string">'OFF'</span><span class="keyword">,</span><span class="string">'yes'</span><span class="keyword">,</span><span class="string">'Yes'</span><span class="keyword">,</span><span class="string">'YES'</span><span class="keyword">,<br /></span><span class="string">'no'</span><span class="keyword">,</span><span class="string">'No'</span><span class="keyword">,</span><span class="string">'NO'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="string">'0'</span><span class="keyword">,</span><span class="string">'1'</span><span class="keyword">,</span><span class="string">'true'</span><span class="keyword">,<br /></span><span class="string">'True'</span><span class="keyword">,</span><span class="string">'TRUE'</span><span class="keyword">,</span><span class="string">'false'</span><span class="keyword">,</span><span class="string">'False'</span><span class="keyword">,</span><span class="string">'FALSE'</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">);<br />foreach(</span><span class="default">$vals </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">){<br />    echo </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">).</span><span class="string">': '</span><span class="keyword">;   </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">,</span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">,</span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />outputs:<br />'on': bool(true)<br />'On': bool(true)<br />'ON': bool(true)<br />'off': bool(false)<br />'Off': bool(false)<br />'OFF': bool(false)<br />'yes': bool(true)<br />'Yes': bool(true)<br />'YES': bool(true)<br />'no': bool(false)<br />'No': bool(false)<br />'NO': bool(false)<br />0: bool(false)<br />1: bool(true)<br />'0': bool(false)<br />'1': bool(true)<br />'true': bool(true)<br />'True': bool(true)<br />'TRUE': bool(true)<br />'false': bool(false)<br />'False': bool(false)<br />'FALSE': bool(false)<br />true: bool(true)<br />false: bool(false)<br />'foo': NULL<br />'bar': NULL</span></code></div>
  </div>
 </div>
  <div class="note" id="129129">  <div class="votes">
    <div id="Vu129129">
    <a href="/manual/vote-note.php?id=129129&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129129">
    <a href="/manual/vote-note.php?id=129129&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129129" title="88% like this...">
    7
    </div>
  </div>
  <a href="#129129" class="name">
  <strong class="user"><em>Random Guy</em></strong></a><a class="genanchor" href="#129129"> &para;</a><div class="date" title="2023-12-28 09:15"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129129">
<div class="phpcode"><code><span class="html">Actually, this is not really a helpful comment for a manual (so, don't upvote), but as search engines don't find a lot of occurrences for the error message and especially no helpful hint, it might save somebody some time.<br /><br />If you're getting an error message like "filter_var(): Unknown filter with ID 2097152" or a different number, you just accidentally mixed up the parameters. So, instead of<br /><br /><span class="default">&lt;?php<br />filter_var</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">, </span><span class="default">FILTER_FLAG_IPV6</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />you should try it with<br /><br /><span class="default">&lt;?php<br />filter_var</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_IP</span><span class="keyword">, </span><span class="default">FILTER_FLAG_IPV6</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />and it will work ;) I know, this isn't the most intuitive form you can design a function and it's tempting to throw everything into one param as it is done for regular checks, but, yeah, it is how it is.</span></code></div>
  </div>
 </div>
  <div class="note" id="108769">  <div class="votes">
    <div id="Vu108769">
    <a href="/manual/vote-note.php?id=108769&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108769">
    <a href="/manual/vote-note.php?id=108769&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108769" title="66% like this...">
    59
    </div>
  </div>
  <a href="#108769" class="name">
  <strong class="user"><em>Andi, info at pragmamx dot org</em></strong></a><a class="genanchor" href="#108769"> &para;</a><div class="date" title="2012-05-23 06:07"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108769">
<div class="phpcode"><code><span class="html">And this is also a valid url <br /><br /><a href="http://example.com/" rel="nofollow" target="_blank">http://example.com/</a>"&gt;&lt;script&gt;alert(document.cookie)&lt;/script&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="123233">  <div class="votes">
    <div id="Vu123233">
    <a href="/manual/vote-note.php?id=123233&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123233">
    <a href="/manual/vote-note.php?id=123233&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123233" title="74% like this...">
    21
    </div>
  </div>
  <a href="#123233" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#123233"> &para;</a><div class="date" title="2018-10-15 01:47"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123233">
<div class="phpcode"><code><span class="html">The note from "hek" about HTML5 having patterns thus alleviating the need to filter in PHP is completely wrong:  You still must filter input on the server side.  The HTML5 form inputs are client-side, meaning they are completely under the user's control.  Only when you receive the data in PHP is it server-side and under your control.  Once the data is under your control, then you must filter/sanitize it properly.<br /><br />This is true regardless of server-side language.  I would encourage the moderators to remove the note from "hek" because it will mislead people with horrible consequences.<br /><br />Steve</span></code></div>
  </div>
 </div>
  <div class="note" id="128235">  <div class="votes">
    <div id="Vu128235">
    <a href="/manual/vote-note.php?id=128235&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128235">
    <a href="/manual/vote-note.php?id=128235&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128235" title="66% like this...">
    1
    </div>
  </div>
  <a href="#128235" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#128235"> &para;</a><div class="date" title="2023-02-21 09:33"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128235">
<div class="phpcode"><code><span class="html">Pay attention:<br />questionmark in url is also valid<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">"<a href="http://test???test.com" rel="nofollow" target="_blank">http://test???test.com</a>"</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL</span><span class="keyword">)?</span><span class="string">"valid"</span><span class="keyword">:</span><span class="string">"not valid"</span><span class="keyword">; </span><span class="comment">#valid<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118257">  <div class="votes">
    <div id="Vu118257">
    <a href="/manual/vote-note.php?id=118257&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118257">
    <a href="/manual/vote-note.php?id=118257&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118257" title="60% like this...">
    17
    </div>
  </div>
  <a href="#118257" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118257"> &para;</a><div class="date" title="2015-11-04 11:20"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118257">
<div class="phpcode"><code><span class="html">FILTER_VALIDATE_URL allows:<br /><br />filter_var('javascript://comment%0Aalert(1)', FILTER_VALIDATE_URL);<br /><br />Where the %0A (URL encoded newline), in certain contexts, will split the comment from the JS code.<br /><br />This can result in an XSS vulnerability.</span></code></div>
  </div>
 </div>
  <div class="note" id="122969">  <div class="votes">
    <div id="Vu122969">
    <a href="/manual/vote-note.php?id=122969&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122969">
    <a href="/manual/vote-note.php?id=122969&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122969" title="61% like this...">
    7
    </div>
  </div>
  <a href="#122969" class="name">
  <strong class="user"><em>mpyw628 at gmail dot com</em></strong></a><a class="genanchor" href="#122969"> &para;</a><div class="date" title="2018-07-22 10:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122969">
<div class="phpcode"><code><span class="html">I wrote a JavaScript email validator fully compatible with PHP's filter_var() implementation.<br /><br />mpyw/FILTER_VALIDATE_EMAIL.js: Email validation compatible with PHP's filter_var($value, FILTER_VALIDATE_EMAIL) <br /><a href="https://github.com/mpyw/FILTER_VALIDATE_EMAIL.js" rel="nofollow" target="_blank">https://github.com/mpyw/FILTER_VALIDATE_EMAIL.js</a></span></code></div>
  </div>
 </div>
  <div class="note" id="84326">  <div class="votes">
    <div id="Vu84326">
    <a href="/manual/vote-note.php?id=84326&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84326">
    <a href="/manual/vote-note.php?id=84326&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84326" title="59% like this...">
    6
    </div>
  </div>
  <a href="#84326" class="name">
  <strong class="user"><em>dale dot liszka at gmail dot com</em></strong></a><a class="genanchor" href="#84326"> &para;</a><div class="date" title="2008-07-09 09:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84326">
<div class="phpcode"><code><span class="html">Using the FILTER_CALLBACK requires an array to be passed as the options:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">toDash</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">){<br />   return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"_"</span><span class="keyword">,</span><span class="string">"-"</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">);<br />} <br /><br />echo </span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">"asdf_123"</span><span class="keyword">,</span><span class="default">FILTER_CALLBACK</span><span class="keyword">,array(</span><span class="string">"options"</span><span class="keyword">=&gt;</span><span class="string">"toDash"</span><span class="keyword">));<br /></span><span class="comment">// returns 'asdf-123'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109919">  <div class="votes">
    <div id="Vu109919">
    <a href="/manual/vote-note.php?id=109919&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109919">
    <a href="/manual/vote-note.php?id=109919&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109919" title="57% like this...">
    7
    </div>
  </div>
  <a href="#109919" class="name">
  <strong class="user"><em>marcus at synchromedia dot co dot uk</em></strong></a><a class="genanchor" href="#109919"> &para;</a><div class="date" title="2012-09-03 09:13"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109919">
<div class="phpcode"><code><span class="html">It's very likely that you actually want to detect all reserved ranges, not just private IPs, and there's another constant for them that should be bitwise-OR'd with it.
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">is_private_ip</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">) {
<br />    return !</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_IP</span><span class="keyword">, </span><span class="default">FILTER_FLAG_NO_PRIV_RANGE </span><span class="keyword">| </span><span class="default">FILTER_FLAG_NO_RES_RANGE</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84329">  <div class="votes">
    <div id="Vu84329">
    <a href="/manual/vote-note.php?id=84329&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84329">
    <a href="/manual/vote-note.php?id=84329&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84329" title="56% like this...">
    8
    </div>
  </div>
  <a href="#84329" class="name">
  <strong class="user"><em>dale dot liszka at gmail dot com</em></strong></a><a class="genanchor" href="#84329"> &para;</a><div class="date" title="2008-07-09 10:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84329">
<div class="phpcode"><code><span class="html">Here is how to use multiple flags (for those who learn better by example, like me):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"|asdf"</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">9</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">).</span><span class="string">"_123|"</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// "bitwise conjunction" means logic OR / bitwise |<br /></span><span class="keyword">echo </span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">"|asdf"</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">9</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">).</span><span class="string">"_123\n|" </span><span class="keyword">,</span><span class="default">FILTER_SANITIZE_STRING</span><span class="keyword">, </span><span class="default">FILTER_FLAG_STRIP_LOW </span><span class="keyword">| </span><span class="default">FILTER_FLAG_STRIP_HIGH</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />Results:<br />|asdf    �_123|<br />|asdf_123|<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107300">  <div class="votes">
    <div id="Vu107300">
    <a href="/manual/vote-note.php?id=107300&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107300">
    <a href="/manual/vote-note.php?id=107300&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107300" title="54% like this...">
    7
    </div>
  </div>
  <a href="#107300" class="name">
  <strong class="user"><em>keevitaja at gmail dot com</em></strong></a><a class="genanchor" href="#107300"> &para;</a><div class="date" title="2012-01-28 08:05"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107300">
<div class="phpcode"><code><span class="html">please note FILTER_VALIDATE_URL passes following url
<br />
<br /><a href="http://example.ee/sdsf" rel="nofollow" target="_blank">http://example.ee/sdsf</a>"f</span></code></div>
  </div>
 </div>
  <div class="note" id="122248">  <div class="votes">
    <div id="Vu122248">
    <a href="/manual/vote-note.php?id=122248&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122248">
    <a href="/manual/vote-note.php?id=122248&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122248" title="54% like this...">
    1
    </div>
  </div>
  <a href="#122248" class="name">
  <strong class="user"><em>crisp at tweakers dot net</em></strong></a><a class="genanchor" href="#122248"> &para;</a><div class="date" title="2018-01-09 10:31"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122248">
<div class="phpcode"><code><span class="html">Note that only using FILTER_VALIDATE_URL to validate url's input may result in XSS:<br /><br />$url = 'javascript://%0Aalert(document.cookie)';<br /><br />if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED)) {<br />    echo '&lt;a href="' . $url . '"&gt;click&lt;/a&gt;';<br />}<br /><br />You should at least additionally check the actually used scheme.</span></code></div>
  </div>
 </div>
  <div class="note" id="89818">  <div class="votes">
    <div id="Vu89818">
    <a href="/manual/vote-note.php?id=89818&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89818">
    <a href="/manual/vote-note.php?id=89818&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89818" title="54% like this...">
    3
    </div>
  </div>
  <a href="#89818" class="name">
  <strong class="user"><em>jon dot bertsch at ucop dot edu</em></strong></a><a class="genanchor" href="#89818"> &para;</a><div class="date" title="2009-03-24 07:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89818">
<div class="phpcode"><code><span class="html">Here's an actual example of the filter syntax with a flag since there doesn't appear to be a one liner for this anywhere:<br /><br />'hours' =&gt; array('filter'=&gt;FILTER_SANITIZE_NUMBER_FLOAT, 'flags' =&gt; FILTER_FLAG_ALLOW_FRACTION, 'options'=&gt; '.')</span></code></div>
  </div>
 </div>
  <div class="note" id="124891">  <div class="votes">
    <div id="Vu124891">
    <a href="/manual/vote-note.php?id=124891&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124891">
    <a href="/manual/vote-note.php?id=124891&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124891" title="52% like this...">
    1
    </div>
  </div>
  <a href="#124891" class="name">
  <strong class="user"><em>Robert Vlach</em></strong></a><a class="genanchor" href="#124891"> &para;</a><div class="date" title="2020-04-08 06:33"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124891">
<div class="phpcode"><code><span class="html">I won't recommend using this function to validate email addresses on a normal website. The problem is that in accordance with RFC 3696 (Application Techniques for Checking and Transformation of Names) the following email addresses would be considered as valid:<br /><br />customer/department=shipping@example.com<br />$A12345@example.com<br />!def!xyz%abc@example.com<br />_somename@example.com<br />"Abc@def"@example.com<br /><br />Hardly something I would accept in a live web app in 2020 :-/</span></code></div>
  </div>
 </div>
  <div class="note" id="128875">  <div class="votes">
    <div id="Vu128875">
    <a href="/manual/vote-note.php?id=128875&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128875">
    <a href="/manual/vote-note.php?id=128875&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128875" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128875" class="name">
  <strong class="user"><em>remindfwd</em></strong></a><a class="genanchor" href="#128875"> &para;</a><div class="date" title="2023-09-08 01:08"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128875">
<div class="phpcode"><code><span class="html">Please note that the following will return true, even if the URL is not correct. Because it validates only the domain, subdomain, path and query, not the protocol.
<br />
<br /><span class="default">&lt;?php
<br />filter_var</span><span class="keyword">( </span><span class="string">'<a href="http://https://example.com" rel="nofollow" target="_blank">http://https://example.com</a>'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Please read more on <a href="https://www.php.net/manual/en/filter.filters.validate.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/filter.filters.validate.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="130474">  <div class="votes">
    <div id="Vu130474">
    <a href="/manual/vote-note.php?id=130474&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130474">
    <a href="/manual/vote-note.php?id=130474&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130474" title="no votes...">
    0
    </div>
  </div>
  <a href="#130474" class="name">
  <strong class="user"><em>rotog at outlook dot com</em></strong></a><a class="genanchor" href="#130474"> &para;</a><div class="date" title="2025-09-08 11:14"><strong>21 days ago</strong></div>
  <div class="text" id="Hcom130474">
<div class="phpcode"><code><span class="html">Note that: when using FILTER_VALIDATE_INT, if the variable is zero, the "if" will be false.<br /><br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />if (!</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_INT</span><span class="keyword">)){<br />    echo </span><span class="string">"Zero = false"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">'Will not pass here";<br />}<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130443">  <div class="votes">
    <div id="Vu130443">
    <a href="/manual/vote-note.php?id=130443&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130443">
    <a href="/manual/vote-note.php?id=130443&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130443" title="no votes...">
    0
    </div>
  </div>
  <a href="#130443" class="name">
  <strong class="user"><em>neil at digital-illusion dot net</em></strong></a><a class="genanchor" href="#130443"> &para;</a><div class="date" title="2025-08-04 11:54"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130443">
<div class="phpcode"><code><span class="html">var_dump(filter_var(null, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)); &lt;- returns false<br /><br />you would expect this to return null because it uses FILTER_NULL_ON_FAILURE <br /><br />"On success returns the filtered data. On failure false is returned, unless the FILTER_NULL_ON_FAILURE flag is used, in which case null is returned."<br /><br />The filter_var() function first coerces null to an empty string before applying the filter so it is actually doing<br /><br />var_dump(filter_var('', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));  &lt;- returns false</span></code></div>
  </div>
 </div>
  <div class="note" id="130436">  <div class="votes">
    <div id="Vu130436">
    <a href="/manual/vote-note.php?id=130436&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130436">
    <a href="/manual/vote-note.php?id=130436&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130436" title="no votes...">
    0
    </div>
  </div>
  <a href="#130436" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#130436"> &para;</a><div class="date" title="2025-07-31 01:12"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130436">
<div class="phpcode"><code><span class="html">This is just a note please don't upvote, <br /><br />In general i saw many notes saying that the filter validates<br />content that could be malicious like:<br />javascript://somejavascript<br /><a href="https://exampledomain.com/?xss=some_javascript_that_could_result_in_xss" rel="nofollow" target="_blank">https://exampledomain.com/?xss=some_javascript_that_could_result_in_xss</a><br /><br />In genera the URL consists of (and not ony those)<br />1: scheme,<br />2: domain,<br />3: path,<br />4: ?arguments<br /><br />these are used in the url so the browser can understand where we want to go or what we want to do<br /><br />so yes this <br />`javascript://somejavascript`<br />should be a valid url<br /><br />if an xss is possible the fault lies in the developers hands that he trusted this data without any further sanitization and checks</span></code></div>
  </div>
 </div>
  <div class="note" id="128578">  <div class="votes">
    <div id="Vu128578">
    <a href="/manual/vote-note.php?id=128578&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128578">
    <a href="/manual/vote-note.php?id=128578&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128578" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128578" class="name">
  <strong class="user"><em>ajcorrea at gmail dot com</em></strong></a><a class="genanchor" href="#128578"> &para;</a><div class="date" title="2023-06-01 02:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128578">
<div class="phpcode"><code><span class="html">You can use multiple FLAGS to validate an ip address:<br /><br />//Validade if input is an IPv4 Address:<br />$_FILTERS = array('flags' =&gt; FILTER_FLAG_IPV4);<br /><br />//Validade if input is an IPv4 address and isn´t a private IP.<br />$_FILTERS = array('flags' =&gt; FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE);<br /><br />//Validade if input is an IPv4 and isn´t a reserved IP.<br />$_FILTERS = array('flags' =&gt; FILTER_FLAG_IPV4 | FILTER_FLAG_NO_RES_RANGE);<br /><br />//Validade if input is an IPv4, isn´t a private IP and isn´t a reserved IP.<br />$_FILTERS = array('flags' =&gt; FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);<br /><br />filter_var($_input, FILTER_VALIDATE_IP, $_FILTERS);</span></code></div>
  </div>
 </div>
  <div class="note" id="129660">  <div class="votes">
    <div id="Vu129660">
    <a href="/manual/vote-note.php?id=129660&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129660">
    <a href="/manual/vote-note.php?id=129660&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129660" title="no votes...">
    0
    </div>
  </div>
  <a href="#129660" class="name">
  <strong class="user"><em>axew3 at me dot you</em></strong></a><a class="genanchor" href="#129660"> &para;</a><div class="date" title="2024-07-19 05:04"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129660">
<div class="phpcode"><code><span class="html">I've see some report about FILTER_VALIDATE_URL and i also would like to  add mine, because into a stupid code like this:<br /><span class="default">&lt;?php<br />$ckOrigin </span><span class="keyword">= </span><span class="string">'<a href="https://forum.myw3host.comhttps://forum.myw3host.comhttps://forum.myw3host.com/viewtopic.php?p=45#p45" rel="nofollow" target="_blank">https://forum.myw3host.comhttps://forum.myw3host.comhttps://forum.myw3host.com/viewtopic.php?p=45#p45</a>'</span><span class="keyword">;<br /><br />if(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$ckOrigin</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL</span><span class="keyword">)){<br />    echo </span><span class="string">'ok the URL is valid'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />since i was sure that in case the url were wrong it had returned false, I spent a lot of time to realize that it instead fail into a string like the one above, and it return true.</span></code></div>
  </div>
 </div>
  <div class="note" id="128462">  <div class="votes">
    <div id="Vu128462">
    <a href="/manual/vote-note.php?id=128462&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128462">
    <a href="/manual/vote-note.php?id=128462&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128462" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128462" class="name">
  <strong class="user"><em>Guy Sartorelli</em></strong></a><a class="genanchor" href="#128462"> &para;</a><div class="date" title="2023-05-08 03:06"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128462">
<div class="phpcode"><code><span class="html">Note that filter_var() with FILTER_VALIDATE_URL uses RFC2396 which is obsolete. This means it treats some currently valid characters (such as "_") as being invalid.<br /><br />In many cases it may be more beneficial to use php parse_url() which uses RFC3986 which is what is currently in effect.</span></code></div>
  </div>
 </div>
  <div class="note" id="129123">  <div class="votes">
    <div id="Vu129123">
    <a href="/manual/vote-note.php?id=129123&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129123">
    <a href="/manual/vote-note.php?id=129123&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129123" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129123" class="name">
  <strong class="user"><em>dakaenev at gmail dot com</em></strong></a><a class="genanchor" href="#129123"> &para;</a><div class="date" title="2023-12-23 09:46"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129123">
<div class="phpcode"><code><span class="html">As reply of <a href="https://www.php.net/manual/en/function.filter-var.php#128235" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.filter-var.php#128235</a><br /><br />if you use FILTER_FLAG_PATH_REQUIRED it work correct.<br /><br />var_dump( filter_var('<a href="http://test???test.com/path/?t=1" rel="nofollow" target="_blank">http://test???test.com/path/?t=1</a>', FILTER_VALIDATE_URL)  ); // true<br /><br />var_dump( filter_var('<a href="http://test???test.com/path/?t=1" rel="nofollow" target="_blank">http://test???test.com/path/?t=1</a>', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)  ); // false</span></code></div>
  </div>
 </div>
  <div class="note" id="126443">  <div class="votes">
    <div id="Vu126443">
    <a href="/manual/vote-note.php?id=126443&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126443">
    <a href="/manual/vote-note.php?id=126443&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126443" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126443" class="name">
  <strong class="user"><em>mmerlone at gmail dot com</em></strong></a><a class="genanchor" href="#126443"> &para;</a><div class="date" title="2021-09-21 02:03"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126443">
<div class="phpcode"><code><span class="html">Be aware that FILTER_FLAG_PATH_REQUIRED is happy with a single slash (/), so:<br /><br /><span class="default">&lt;?php<br />$options </span><span class="keyword">= array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_FLAG_PATH_REQUIRED</span><span class="keyword">);<br /></span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">'<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">); </span><span class="comment">// returns false<br /></span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/" rel="nofollow" target="_blank">http://example.com/</a>'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">); </span><span class="comment">// returns '<a href="http://example.com/" rel="nofollow" target="_blank">http://example.com/</a>'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115366">  <div class="votes">
    <div id="Vu115366">
    <a href="/manual/vote-note.php?id=115366&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115366">
    <a href="/manual/vote-note.php?id=115366&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115366" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115366" class="name">
  <strong class="user"><em>joe at bloe dot com</em></strong></a><a class="genanchor" href="#115366"> &para;</a><div class="date" title="2014-07-13 03:04"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115366">
<div class="phpcode"><code><span class="html">"(comment)localpart@example.com"<br />is an invalid E-Mail address per RFC5322 (Appendix A.6.3):<br />"Also, the comments and white space throughout addresses, dates, and message identifiers are all part of the obsolete syntax."</span></code></div>
  </div>
 </div>
  <div class="note" id="86775">  <div class="votes">
    <div id="Vu86775">
    <a href="/manual/vote-note.php?id=86775&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86775">
    <a href="/manual/vote-note.php?id=86775&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86775" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86775" class="name">
  <strong class="user"><em>dyer85 at gmail dot com</em></strong></a><a class="genanchor" href="#86775"> &para;</a><div class="date" title="2008-11-03 02:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86775">
<div class="phpcode"><code><span class="html">Note that when using FILTER_VALIDATE_INT along with the FILTER_FLAG_ALLOW_HEX flag, the string "2f", for example, is not validated successfully, because you must use the "0x" prefix, otherwise, it treats the data as base 10.<br /><br />The range options are also smart enough to recognize when the boundaries are exceeded in different bases.<br /><br />Here's an example:<br /><br /><span class="default">&lt;?php<br /><br />$foo </span><span class="keyword">= </span><span class="string">'256'</span><span class="keyword">;<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'0x100'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validate_int</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">)); </span><span class="comment">// false, too large<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validate_int</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">)); </span><span class="comment">// false, too large<br /><br /></span><span class="keyword">function </span><span class="default">validate_int</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)<br />{<br />  return </span><span class="default">filter_var</span><span class="keyword">(<br />    </span><span class="default">$input</span><span class="keyword">,<br />    </span><span class="default">FILTER_VALIDATE_INT</span><span class="keyword">,<br /><br />    </span><span class="comment">// We must pass an associative array<br />    // to include the range check options.<br />    </span><span class="keyword">array(<br />      </span><span class="string">'flags'   </span><span class="keyword">=&gt; </span><span class="default">FILTER_FLAG_ALLOW_HEX</span><span class="keyword">,<br />      </span><span class="string">'options' </span><span class="keyword">=&gt; array(</span><span class="string">'min_range' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'max_range' </span><span class="keyword">=&gt; </span><span class="default">0xff</span><span class="keyword">)<br />    )<br />  );<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104160">  <div class="votes">
    <div id="Vu104160">
    <a href="/manual/vote-note.php?id=104160&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104160">
    <a href="/manual/vote-note.php?id=104160&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104160" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#104160" class="name">
  <strong class="user"><em>php at maisqi dot com</em></strong></a><a class="genanchor" href="#104160"> &para;</a><div class="date" title="2011-05-27 07:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104160">
<div class="phpcode"><code><span class="html">FILTER_VALIDATE_URL does not support internationalized domain name (IDN). Valid or not, no domain name with Unicode chars on it will pass validation.<br /><br />We can circumvent this with a home grown solutions, but C code is C code, so I've gone for the code bellow, which builds on filter_var().<br /><br /><span class="default">&lt;?php<br />$res </span><span class="keyword">= </span><span class="default">filter_var </span><span class="keyword">(</span><span class="default">$uri</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL</span><span class="keyword">);<br />if (</span><span class="default">$res</span><span class="keyword">) return </span><span class="default">$res</span><span class="keyword">;<br /></span><span class="comment">// Check if it has unicode chars.<br /></span><span class="default">$l </span><span class="keyword">= </span><span class="default">mb_strlen </span><span class="keyword">(</span><span class="default">$uri</span><span class="keyword">);<br />if (</span><span class="default">$l </span><span class="keyword">!== </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$uri</span><span class="keyword">)) {<br />    </span><span class="comment">// Replace wide chars by “X”.<br />    </span><span class="default">$s </span><span class="keyword">= </span><span class="default">str_repeat </span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$l</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$l</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />        </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">mb_substr </span><span class="keyword">(</span><span class="default">$uri</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$s </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">) &gt; </span><span class="default">1 </span><span class="keyword">? </span><span class="string">'X' </span><span class="keyword">: </span><span class="default">$ch</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// Re-check now.<br />    </span><span class="default">$res </span><span class="keyword">= </span><span class="default">filter_var </span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL</span><span class="keyword">);<br />    if (</span><span class="default">$res</span><span class="keyword">) {    </span><span class="default">$uri </span><span class="keyword">= </span><span class="default">$res</span><span class="keyword">; return </span><span class="default">1</span><span class="keyword">;    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />The logic is simple. A non-ascii char is more than one byte long. We replace every one of those chars by "X" and check again.<br /><br />An alternative will be to punycode the URI before calling filter_var(), but PHP lacks native support for punycode. I think my approach is effective. Please e-mail me if you think otherwise or see room for improvement.</span></code></div>
  </div>
 </div>
  <div class="note" id="118356">  <div class="votes">
    <div id="Vu118356">
    <a href="/manual/vote-note.php?id=118356&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118356">
    <a href="/manual/vote-note.php?id=118356&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118356" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#118356" class="name">
  <strong class="user"><em>yoanlin93 at gmail dot com</em></strong></a><a class="genanchor" href="#118356"> &para;</a><div class="date" title="2015-11-22 06:34"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118356">
<div class="phpcode"><code><span class="html">Some boolean conversions:<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">'oops'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// NULL<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">'false'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// bool(false)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">'true'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// bool(true)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// bool(false)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// bool(true)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">'TRUE'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// bool(true)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// bool(false)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="string">'FALSE'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">, array(</span><span class="string">'flags' </span><span class="keyword">=&gt; </span><span class="default">FILTER_NULL_ON_FAILURE</span><span class="keyword">)));<br /></span><span class="comment">// bool(false)</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112452">  <div class="votes">
    <div id="Vu112452">
    <a href="/manual/vote-note.php?id=112452&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112452">
    <a href="/manual/vote-note.php?id=112452&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112452" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#112452" class="name">
  <strong class="user"><em>drew_mirage at hotmail dot com</em></strong></a><a class="genanchor" href="#112452"> &para;</a><div class="date" title="2013-06-18 07:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112452">
<div class="phpcode"><code><span class="html">One key thing to remember about filtering integers is that the value for the option max_range must be less than or equal to the value of PHP_INT_MAX.<br /><br />filter_var($someVariable, FILTER_VALIDATE_INT, array('options' =&gt; array('min_range' =&gt; 1, 'max_range' =&gt; SOME_VALUE_GREATER_THAN_PHP_INT_MAX)));<br /><br />This will fail even if $someVariable is a valid integer in the expected range.<br /><br />This can show up when you are attempting to validate a potential key for an unsigned MySQL INT type (whose maximum value is 4294967295) on a 32-bit system, where the value of PHP_INT_MAX is 2147483647.</span></code></div>
  </div>
 </div>
  <div class="note" id="118676">  <div class="votes">
    <div id="Vu118676">
    <a href="/manual/vote-note.php?id=118676&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118676">
    <a href="/manual/vote-note.php?id=118676&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118676" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#118676" class="name">
  <strong class="user"><em>buttflattery at gmail dot com</em></strong></a><a class="genanchor" href="#118676"> &para;</a><div class="date" title="2016-01-18 03:15"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118676">
<div class="phpcode"><code><span class="html">FILTER_VALIDATE_URL validates a url like <a href="http://www." rel="nofollow" target="_blank">http://www.</a></span></code></div>
  </div>
 </div>
  <div class="note" id="113698">  <div class="votes">
    <div id="Vu113698">
    <a href="/manual/vote-note.php?id=113698&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113698">
    <a href="/manual/vote-note.php?id=113698&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113698" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#113698" class="name">
  <strong class="user"><em>Tom</em></strong></a><a class="genanchor" href="#113698"> &para;</a><div class="date" title="2013-11-18 10:23"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113698">
<div class="phpcode"><code><span class="html">It is important to note that though the data type of the first parameter of the function is stated as "mixed", this is only one half of the truth.<br /><br />While it accepts any data type, the first parameter will always be cast to string before being validated or sanitized.<br /><br />It seems that this function was designed strictly to be used on user input strings. For example: from an online-form. When using it for anything other than that, you may see issues. So read the documentation very carefully!<br /><br />Especially note that there is an (to date) unresolved issue (#49510) concerning the Boolean filter while using the FILTER_NULL_ON_FAILURE flag. Note that both (string) FALSE and FALSE are not recognized as boolean values and will return NULL (not FALSE as you might expect).<br /><br />I thus personally suggest that (to date) the best way to take the filter_var()-functions beyond their original purpose (and allow future extension and customization) is to wrap them in your own classes. This will allow you to work-around unexpected behavior on non-string input and add your custom checks, or back-port filters or sanitizers that may be added in later versions of PHP.<br />(Especially since PHP currently still lacks filters and sanitizers for some of the more exotic HTML5 input types, like "color". Thus there actually is a chance that we may see a need for custom filters or backports at some point in the future.)</span></code></div>
  </div>
 </div>
  <div class="note" id="123112">  <div class="votes">
    <div id="Vu123112">
    <a href="/manual/vote-note.php?id=123112&amp;page=function.filter-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123112">
    <a href="/manual/vote-note.php?id=123112&amp;page=function.filter-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123112" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#123112" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123112"> &para;</a><div class="date" title="2018-09-06 07:31"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123112">
<div class="phpcode"><code><span class="html">Replying to Andi:<br /><br />This is NOT a valid URL, as the characters are not encoded<br /><br /><a href="http://example.com/" rel="nofollow" target="_blank">http://example.com/</a>"&gt;&lt;script&gt;alert(document.cookie)&lt;/script&gt;<br /><br />This is a valid URL:<br /><br /><a href="http://example.com/%22%3E%3Cscript%3Ealert%28document.cookie%29%3C%2Fscript%3E" rel="nofollow" target="_blank">http://example.com/%22%3E%3Cscript%3Ealert%28document.cookie%29%3C%2Fscript%3E</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.filter-var&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-var.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filter.php">Filter Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.filter-has-var.php" title="filter_&#8203;has_&#8203;var">filter_&#8203;has_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.filter-id.php" title="filter_&#8203;id">filter_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.filter-input.php" title="filter_&#8203;input">filter_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.filter-input-array.php" title="filter_&#8203;input_&#8203;array">filter_&#8203;input_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.filter-list.php" title="filter_&#8203;list">filter_&#8203;list</a>
                        </li>
                                                <li class="current">
                            <a href="function.filter-var.php" title="filter_&#8203;var">filter_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.filter-var-array.php" title="filter_&#8203;var_&#8203;array">filter_&#8203;var_&#8203;array</a>
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
