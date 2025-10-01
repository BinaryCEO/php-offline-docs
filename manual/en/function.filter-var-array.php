<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: filter_var_array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.filter-var-array.php">
 <link rel="shorturl" href="https://www.php.net/filter-var-array">
 <link rel="alternate" href="https://www.php.net/filter-var-array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filter.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.filter-var.php">
 <link rel="next" href="https://www.php.net/manual/en/book.funchand.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.filter-var-array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.filter-var-array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.filter-var-array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.filter-var-array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.filter-var-array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.filter-var-array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.filter-var-array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.filter-var-array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.filter-var-array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.filter-var-array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.filter-var-array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets multiple variables and optionally filters them" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: filter_var_array - Manual" />
<meta name="twitter:description" content="Gets multiple variables and optionally filters them" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: filter_var_array - Manual" />
<meta itemprop="description" content="Gets multiple variables and optionally filters them" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets multiple variables and optionally filters them" />

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
        <a href="book.funchand.php">
          Function Handling &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.filter-var.php">
          &laquo; filter_var        </a>
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
            <option value='en/function.filter-var-array.php' selected="selected">English</option>
            <option value='de/function.filter-var-array.php'>German</option>
            <option value='es/function.filter-var-array.php'>Spanish</option>
            <option value='fr/function.filter-var-array.php'>French</option>
            <option value='it/function.filter-var-array.php'>Italian</option>
            <option value='ja/function.filter-var-array.php'>Japanese</option>
            <option value='pt_BR/function.filter-var-array.php'>Brazilian Portuguese</option>
            <option value='ru/function.filter-var-array.php'>Russian</option>
            <option value='tr/function.filter-var-array.php'>Turkish</option>
            <option value='uk/function.filter-var-array.php'>Ukrainian</option>
            <option value='zh/function.filter-var-array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.filter-var-array" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">filter_var_array</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_var_array</span> &mdash; <span class="dc-title">Gets multiple variables and optionally filters them</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.filter-var-array-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>filter_var_array</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$add_empty</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="simpara">
   Filter an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of values using
   <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></code></strong>
   validation filters,
   <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></code></strong>
   sanitization filters, or custom filters.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.filter-var-array-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">array</code></dt>
    <dd>
     <span class="simpara">
      An associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> containing the data to filter.
     </span>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <span class="simpara">
      Either an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of options,
      or the filter to apply to each entry,
      which can either be a validation filter by using one of the
      <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></code></strong>
      constants, or a sanitization filter by using one of the
      <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></code></strong>
      constants.
     </span>
     <span class="simpara">
      The option array is an associative array where the key corresponds
      to a key in the data <code class="parameter">array</code> and the associated
      value is either the filter to apply to this entry,
      or an associative array describing how and which filter should be
      applied to this entry.
     </span>
     <span class="simpara">
      The associative array describing how a filter should be applied
      must contain the <code class="literal">&#039;filter&#039;</code> key whose associated
      value is the filter to apply, which can be one of the
      <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></code></strong>,
      <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></code></strong>,
      <strong><code><a href="filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></code></strong>, or
      <strong><code><a href="filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></code></strong> constants.
      It can optionally contain the <code class="literal">&#039;flags&#039;</code> key
      which specifies and flags that apply to the filter,
      and the <code class="literal">&#039;options&#039;</code> key which specifies any options
      that apply to the filter.
     </span>
    </dd>
   
   
    <dt><code class="parameter">add_empty</code></dt>
    <dd>
     <p class="para">
      Add missing keys as <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to the return value.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.filter-var-array-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An array containing the values of the requested variables on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> 
   on failure. An array value will be <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the filter fails, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if 
   the variable is not set.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.filter-var-array-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5386">
    <p><strong>Example #1 A <span class="function"><strong>filter_var_array()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$data </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'product_id' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'libgd&lt;script&gt;'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'component'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'10'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'versions'   </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'2.0.33'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'testscalar' </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'23'</span><span style="color: #007700">, </span><span style="color: #DD0000">'10'</span><span style="color: #007700">, </span><span style="color: #DD0000">'12'</span><span style="color: #007700">],<br />    </span><span style="color: #DD0000">'testarray'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />];<br /><br /></span><span style="color: #0000BB">$filters </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'product_id'   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'component'    </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'filter'   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'flags'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_FORCE_ARRAY</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'options'  </span><span style="color: #007700">=&gt; [<br />            </span><span style="color: #DD0000">'min_range' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">'max_range' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">10</span><span style="color: #007700">,<br />        ],<br />    ],<br />    </span><span style="color: #DD0000">'versions'     </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_SANITIZE_ENCODED<br />    </span><span style="color: #007700">],<br />    </span><span style="color: #DD0000">'testscalar'   </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_REQUIRE_SCALAR</span><span style="color: #007700">,<br />    ],<br />    </span><span style="color: #DD0000">'testarray'    </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_FORCE_ARRAY</span><span style="color: #007700">,<br />    ],<br />    </span><span style="color: #DD0000">'doesnotexist' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />];<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">$filters</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(6) {
  [&quot;product_id&quot;]=&gt;
  string(17) &quot;libgd%3Cscript%3E&quot;
  [&quot;component&quot;]=&gt;
  array(1) {
    [0]=&gt;
    int(10)
  }
  [&quot;versions&quot;]=&gt;
  string(6) &quot;2.0.33&quot;
  [&quot;testscalar&quot;]=&gt;
  bool(false)
  [&quot;testarray&quot;]=&gt;
  array(1) {
    [0]=&gt;
    int(2)
  }
  [&quot;doesnotexist&quot;]=&gt;
  NULL
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.filter-var-array-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.filter-input-array.php" class="function" rel="rdfs-seeAlso">filter_input_array()</a> - Gets external variables and optionally filters them</span></li>
   <li><span class="function"><a href="function.filter-var.php" class="function" rel="rdfs-seeAlso">filter_var()</a> - Filters a variable with a specified filter</span></li>
   <li><span class="function"><a href="function.filter-input.php" class="function" rel="rdfs-seeAlso">filter_input()</a> - Gets a specific external variable by name and optionally filters it</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filter/functions/filter-var-array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.filter-var-array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.filter-var-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-var-array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91341">  <div class="votes">
    <div id="Vu91341">
    <a href="/manual/vote-note.php?id=91341&amp;page=function.filter-var-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91341">
    <a href="/manual/vote-note.php?id=91341&amp;page=function.filter-var-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91341" title="60% like this...">
    8
    </div>
  </div>
  <a href="#91341" class="name">
  <strong class="user"><em>eguvenc at gmail dot com</em></strong></a><a class="genanchor" href="#91341"> &para;</a><div class="date" title="2009-06-06 03:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91341">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">//an example of simply sanitize an array..
<br />
<br /></span><span class="default">$data </span><span class="keyword">= array(
<br />                </span><span class="string">'&lt;b&gt;bold&lt;/b&gt;'</span><span class="keyword">,
<br />                </span><span class="string">'&lt;script&gt;javascript&lt;/script&gt;'</span><span class="keyword">,
<br />                </span><span class="string">'P*}i@893746%%%p*.i.*}}|.dw&lt;?php echo "echo works!!";?&gt;'</span><span class="keyword">);
<br />
<br /></span><span class="default">$myinputs </span><span class="keyword">= </span><span class="default">filter_var_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">FILTER_SANITIZE_STRING</span><span class="keyword">);
<br />
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$myinputs</span><span class="keyword">);
<br />
<br /></span><span class="comment">//OUTPUT:
<br />//formarray(3) { [0]=&gt; string(4) "bold" [1]=&gt; string(10) "javascript" [2]=&gt; string(26) "P*}i@893746%%%p*.i.*}}|.dw" }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128130">  <div class="votes">
    <div id="Vu128130">
    <a href="/manual/vote-note.php?id=128130&amp;page=function.filter-var-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128130">
    <a href="/manual/vote-note.php?id=128130&amp;page=function.filter-var-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128130" title="80% like this...">
    3
    </div>
  </div>
  <a href="#128130" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#128130"> &para;</a><div class="date" title="2023-01-19 07:07"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128130">
<div class="phpcode"><code><span class="html">To apply the same filter to many params/keys, use array_fill_keys().<br /><br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= array(<br />    </span><span class="string">'product_id'    </span><span class="keyword">=&gt; </span><span class="string">'libgd&lt;script&gt;'</span><span class="keyword">,<br />    </span><span class="string">'component'     </span><span class="keyword">=&gt; </span><span class="string">'    10    '</span><span class="keyword">,<br />    </span><span class="string">'versions'      </span><span class="keyword">=&gt; </span><span class="string">'2.0.33'</span><span class="keyword">,<br />    </span><span class="string">'testscalar'    </span><span class="keyword">=&gt; array(</span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'23'</span><span class="keyword">, </span><span class="string">'10'</span><span class="keyword">, </span><span class="string">'12'</span><span class="keyword">),<br />    </span><span class="string">'testarray'     </span><span class="keyword">=&gt; </span><span class="string">'2'</span><span class="keyword">,<br />);<br /></span><span class="default">$keys </span><span class="keyword">= array(<br />    </span><span class="string">'product_id'</span><span class="keyword">,<br />    </span><span class="string">'component'</span><span class="keyword">,<br />    </span><span class="string">'versions'</span><span class="keyword">,<br />    </span><span class="string">'doesnotexist'</span><span class="keyword">,<br />    </span><span class="string">'testscalar'</span><span class="keyword">,<br />    </span><span class="string">'testarray'<br /></span><span class="keyword">);<br /></span><span class="default">$options </span><span class="keyword">= array(<br />    </span><span class="string">'filter' </span><span class="keyword">=&gt; </span><span class="default">FILTER_CALLBACK</span><span class="keyword">,<br />    </span><span class="string">'options' </span><span class="keyword">=&gt; function (</span><span class="default">$value</span><span class="keyword">) {<br />        return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">));<br />    },<br />);<br /></span><span class="default">$args </span><span class="keyword">= </span><span class="default">array_fill_keys</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="comment">/* Result<br />$args = array(<br />    'product_id' =&gt; array(<br />        'filter' =&gt; FILTER_CALLBACK,<br />        'options' =&gt; function ($value) {<br />            return trim(strip_tags($value));<br />        },<br />    ),<br />    'component' =&gt; array(<br />        'filter' =&gt; FILTER_CALLBACK,<br />        'options' =&gt; function ($value) {<br />            return trim(strip_tags($value));<br />        },<br />    ),<br />    'versions' =&gt; array(<br />        'filter' =&gt; FILTER_CALLBACK,<br />        'options' =&gt; function ($value) {<br />            return trim(strip_tags($value));<br />        },<br />    ),<br />    'doesnotexist' =&gt; array(<br />        'filter' =&gt; FILTER_CALLBACK,<br />        'options' =&gt; function ($value) {<br />            return trim(strip_tags($value));<br />        },<br />    ),<br />    'testscalar' =&gt; array(<br />        'filter' =&gt; FILTER_CALLBACK,<br />        'options' =&gt; function ($value) {<br />            return trim(strip_tags($value));<br />        },<br />    ),<br />    'testarray' =&gt; array(<br />        'filter' =&gt; FILTER_CALLBACK,<br />        'options' =&gt; function ($value) {<br />            return trim(strip_tags($value));<br />        },<br />    ),<br />);<br />*/<br /><br /></span><span class="default">$myinputs </span><span class="keyword">= </span><span class="default">filter_var_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$myinputs</span><span class="keyword">);<br /><br /></span><span class="default">Output</span><span class="keyword">:<br /><br />array(</span><span class="default">6</span><span class="keyword">) {<br />  </span><span class="string">'product_id' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">) </span><span class="string">"libgd"<br />  'component' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">) </span><span class="string">"10"<br />  'versions' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">6</span><span class="keyword">) </span><span class="string">"2.0.33"<br />  'doesnotexist' </span><span class="keyword">=&gt;<br />  </span><span class="default">NULL<br />  </span><span class="string">'testscalar' </span><span class="keyword">=&gt;<br />  array(</span><span class="default">4</span><span class="keyword">) {<br />    [</span><span class="default">0</span><span class="keyword">] =&gt;<br />    </span><span class="default">string</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) </span><span class="string">"2"<br />    </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt;<br />    </span><span class="default">string</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">) </span><span class="string">"23"<br />    </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt;<br />    </span><span class="default">string</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">) </span><span class="string">"10"<br />    </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt;<br />    </span><span class="default">string</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">) </span><span class="string">"12"<br />  </span><span class="keyword">}<br />  </span><span class="string">'testarray' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) </span><span class="string">"2"<br /></span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123954">  <div class="votes">
    <div id="Vu123954">
    <a href="/manual/vote-note.php?id=123954&amp;page=function.filter-var-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123954">
    <a href="/manual/vote-note.php?id=123954&amp;page=function.filter-var-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123954" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#123954" class="name">
  <strong class="user"><em>Vee W.</em></strong></a><a class="genanchor" href="#123954"> &para;</a><div class="date" title="2019-06-19 04:37"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123954">
<div class="phpcode"><code><span class="html">$emails = [<br />    'a' =&gt; 'email1@domain.com',<br />    'b' =&gt; '&lt;email2&gt;@domain.com',<br />];<br /><br />$result = filter_var_array($emails, FILTER_SANITIZE_EMAIL);<br />print_r($result);<br /><br />// the result will be...<br />// array('a' =&gt; 'email1@domain.com', 'b' =&gt; 'email2@domain.com')</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.filter-var-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-var-array.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.filter-var.php" title="filter_&#8203;var">filter_&#8203;var</a>
                        </li>
                                                <li class="current">
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
