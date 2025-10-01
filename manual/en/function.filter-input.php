<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: filter_input - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.filter-input.php">
 <link rel="shorturl" href="https://www.php.net/filter-input">
 <link rel="alternate" href="https://www.php.net/filter-input" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filter.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.filter-id.php">
 <link rel="next" href="https://www.php.net/manual/en/function.filter-input-array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.filter-input.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.filter-input.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.filter-input.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.filter-input.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.filter-input.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.filter-input.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.filter-input.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.filter-input.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.filter-input.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.filter-input.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.filter-input.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets a specific external variable by name and optionally filters it" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: filter_input - Manual" />
<meta name="twitter:description" content="Gets a specific external variable by name and optionally filters it" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: filter_input - Manual" />
<meta itemprop="description" content="Gets a specific external variable by name and optionally filters it" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets a specific external variable by name and optionally filters it" />

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
        <a href="function.filter-input-array.php">
          filter_input_array &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.filter-id.php">
          &laquo; filter_id        </a>
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
            <option value='en/function.filter-input.php' selected="selected">English</option>
            <option value='de/function.filter-input.php'>German</option>
            <option value='es/function.filter-input.php'>Spanish</option>
            <option value='fr/function.filter-input.php'>French</option>
            <option value='it/function.filter-input.php'>Italian</option>
            <option value='ja/function.filter-input.php'>Japanese</option>
            <option value='pt_BR/function.filter-input.php'>Brazilian Portuguese</option>
            <option value='ru/function.filter-input.php'>Russian</option>
            <option value='tr/function.filter-input.php'>Turkish</option>
            <option value='uk/function.filter-input.php'>Ukrainian</option>
            <option value='zh/function.filter-input.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.filter-input" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">filter_input</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_input</span> &mdash; <span class="dc-title">Gets a specific external variable by name and optionally filters it</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.filter-input-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>filter_input</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$var_name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.filter-input-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">type</code></dt>
    <dd>
     <span class="simpara">
      One of the <strong><code><a href="filter.constants.php#constant.input-post">INPUT_<span class="replaceable">*</span></a></code></strong> constants.
     </span>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       The content of the superglobal that is being filtered is the original
       &quot;raw&quot; content provided by the <abbr title="Server Application Programming Interface">SAPI</abbr>,
       prior to any user modification to the superglobal.
       To filter a modified superglobal use
       <span class="function"><a href="function.filter-var.php" class="function">filter_var()</a></span> instead.
      </p>
     </div>
    </dd>
   
   
    <dt><code class="parameter">var_name</code></dt>
    <dd>
     <span class="simpara">
      Name of a variable to filter inside the corresponding
      <code class="parameter">type</code> superglobal.
     </span>
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


 <div class="refsect1 returnvalues" id="refsect1-function.filter-input-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="simpara">
   On success returns the filtered variable.
   If the variable is not set <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
   On failure <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned,
   unless the <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong> flag is used,
   in which case <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.filter-input-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5380">
    <p><strong>Example #1 A <span class="function"><strong>filter_input()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$search_html </span><span style="color: #007700">= </span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_GET</span><span style="color: #007700">, </span><span style="color: #DD0000">'search'</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_SANITIZE_SPECIAL_CHARS</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$search_url </span><span style="color: #007700">= </span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_GET</span><span style="color: #007700">, </span><span style="color: #DD0000">'search'</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"You have searched for </span><span style="color: #0000BB">$search_html</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"&lt;a href='?search=</span><span style="color: #0000BB">$search_url</span><span style="color: #DD0000">'&gt;Search again.&lt;/a&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">You have searched for Me &amp;#38; son.
&lt;a href=&#039;?search=Me%20%26%20son&#039;&gt;Search again.&lt;/a&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.filter-input-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.filter-input-array.php" class="function" rel="rdfs-seeAlso">filter_input_array()</a> - Gets external variables and optionally filters them</span></li>
   <li><span class="function"><a href="function.filter-var.php" class="function" rel="rdfs-seeAlso">filter_var()</a> - Filters a variable with a specified filter</span></li>
   <li><span class="function"><a href="function.filter-var-array.php" class="function" rel="rdfs-seeAlso">filter_var_array()</a> - Gets multiple variables and optionally filters them</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filter/functions/filter-input.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.filter-input%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.filter-input&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-input.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115086">  <div class="votes">
    <div id="Vu115086">
    <a href="/manual/vote-note.php?id=115086&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115086">
    <a href="/manual/vote-note.php?id=115086&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115086" title="66% like this...">
    100
    </div>
  </div>
  <a href="#115086" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#115086"> &para;</a><div class="date" title="2014-05-23 01:22"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115086">
<div class="phpcode"><code><span class="html">This function provides us the extremely simple solution for type filtering.<br /><br />Without this function...<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">])) {<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />} elseif (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">])) {<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />} else {<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">];<br />}<br /></span><span class="default">$b </span><span class="keyword">= isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">]) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">]) ? </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] : </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />With this function...<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_GET</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= (string)</span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_GET</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Yes, FILTER_REQUIRE_SCALAR seems to be set as a default option. <br />It's very helpful for eliminating E_NOTICE, E_WARNING and E_ERROR. <br />This fact should be documented.</span></code></div>
  </div>
 </div>
  <div class="note" id="77307">  <div class="votes">
    <div id="Vu77307">
    <a href="/manual/vote-note.php?id=77307&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77307">
    <a href="/manual/vote-note.php?id=77307&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77307" title="65% like this...">
    47
    </div>
  </div>
  <a href="#77307" class="name">
  <strong class="user"><em>anthony dot parsons at manx dot net</em></strong></a><a class="genanchor" href="#77307"> &para;</a><div class="date" title="2007-08-23 02:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77307">
<div class="phpcode"><code><span class="html">FastCGI seems to cause strange side-effects with unexpected null values when using INPUT_SERVER and INPUT_ENV with this function. You can use this code to see if it affects your server:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">);<br />foreach ( </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">) as </span><span class="default">$b </span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_SERVER</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">));<br />}<br />echo </span><span class="string">'&lt;hr&gt;'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$_ENV</span><span class="keyword">);<br />foreach ( </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$_ENV</span><span class="keyword">) as </span><span class="default">$b </span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_ENV</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span>If you want to be on the safe side, using the superglobal $_SERVER and $_ENV variables will always work. You can still use the filter_* functions for Get/Post/Cookie without a problem, which is the important part!</span></code></div>
  </div>
 </div>
  <div class="note" id="115960">  <div class="votes">
    <div id="Vu115960">
    <a href="/manual/vote-note.php?id=115960&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115960">
    <a href="/manual/vote-note.php?id=115960&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115960" title="63% like this...">
    41
    </div>
  </div>
  <a href="#115960" class="name">
  <strong class="user"><em>rimelek at rimelek dot hu</em></strong></a><a class="genanchor" href="#115960"> &para;</a><div class="date" title="2014-10-20 08:44"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115960">
<div class="phpcode"><code><span class="html">If your $_POST contains an array value:<br /><span class="default">&lt;?php<br />$_POST  </span><span class="keyword">= array(<br />    </span><span class="string">'var' </span><span class="keyword">=&gt; array(</span><span class="string">'more'</span><span class="keyword">, </span><span class="string">'than'</span><span class="keyword">, </span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'values'</span><span class="keyword">)<br />);<br /></span><span class="default">?&gt;<br /></span>you should use FILTER_REQUIRE_ARRAY option:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_POST</span><span class="keyword">, </span><span class="string">'var'</span><span class="keyword">, </span><span class="default">FILTER_DEFAULT </span><span class="keyword">, </span><span class="default">FILTER_REQUIRE_ARRAY</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>Otherwise it returns false.</span></code></div>
  </div>
 </div>
  <div class="note" id="99124">  <div class="votes">
    <div id="Vu99124">
    <a href="/manual/vote-note.php?id=99124&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99124">
    <a href="/manual/vote-note.php?id=99124&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99124" title="63% like this...">
    30
    </div>
  </div>
  <a href="#99124" class="name">
  <strong class="user"><em>ss23 at ss23 dot geek dot nz</em></strong></a><a class="genanchor" href="#99124"> &para;</a><div class="date" title="2010-07-28 11:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99124">
<div class="phpcode"><code><span class="html">Note that this function doesn't (or at least doesn't seem to) actually filter based on the current values of $_GET etc. Instead, it seems to filter based off the original values.<br /><span class="default">&lt;?php<br />$_GET</span><span class="keyword">[</span><span class="string">'search'</span><span class="keyword">] = </span><span class="string">'foo'</span><span class="keyword">; </span><span class="comment">// This has no effect on the filter_input<br /><br /></span><span class="default">$search_html </span><span class="keyword">= </span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_GET</span><span class="keyword">, </span><span class="string">'search'</span><span class="keyword">, </span><span class="default">FILTER_SANITIZE_SPECIAL_CHARS</span><span class="keyword">);<br /></span><span class="default">$search_url </span><span class="keyword">= </span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_GET</span><span class="keyword">, </span><span class="string">'search'</span><span class="keyword">, </span><span class="default">FILTER_SANITIZE_ENCODED</span><span class="keyword">);<br />echo </span><span class="string">"You have searched for </span><span class="default">$search_html</span><span class="string">.\n"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;a href='?search=</span><span class="default">$search_url</span><span class="string">'&gt;Search again.&lt;/a&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />If you need to set a default input value and filter that, use filter_var on your required input variable instead</span></code></div>
  </div>
 </div>
  <div class="note" id="114405">  <div class="votes">
    <div id="Vu114405">
    <a href="/manual/vote-note.php?id=114405&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114405">
    <a href="/manual/vote-note.php?id=114405&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114405" title="63% like this...">
    22
    </div>
  </div>
  <a href="#114405" class="name">
  <strong class="user"><em>Stefan Weinzierl</em></strong></a><a class="genanchor" href="#114405"> &para;</a><div class="date" title="2014-02-16 04:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114405">
<div class="phpcode"><code><span class="html">Here is an example how to work with the options-parameter. Notice the 'options' in the 'options'-Parameter!<br /><br /><span class="default">&lt;?php<br />$options</span><span class="keyword">=array(</span><span class="string">'options'</span><span class="keyword">=&gt;array(</span><span class="string">'default'</span><span class="keyword">=&gt;</span><span class="default">5</span><span class="keyword">, </span><span class="string">'min_range'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'max_range'</span><span class="keyword">=&gt;</span><span class="default">9</span><span class="keyword">));<br /><br /></span><span class="default">$priority</span><span class="keyword">=</span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_GET</span><span class="keyword">, </span><span class="string">'priority'</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_INT</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />$priority will be 5 if the priority-Parameter isn't set or out the given range.</span></code></div>
  </div>
 </div>
  <div class="note" id="107982">  <div class="votes">
    <div id="Vu107982">
    <a href="/manual/vote-note.php?id=107982&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107982">
    <a href="/manual/vote-note.php?id=107982&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107982" title="58% like this...">
    10
    </div>
  </div>
  <a href="#107982" class="name">
  <strong class="user"><em>chris at chlab dot ch</em></strong></a><a class="genanchor" href="#107982"> &para;</a><div class="date" title="2012-03-20 09:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107982">
<div class="phpcode"><code><span class="html">To use a class method for a callback function, as usual, provide an array with an instance of the class and the method name.<br />Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">myValidator<br /></span><span class="keyword">{<br />  public function </span><span class="default">username</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)<br />  {<br />    </span><span class="comment">// return username or boolean false<br />  </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$myValidator </span><span class="keyword">= new </span><span class="default">myValidator</span><span class="keyword">;<br /></span><span class="default">$options </span><span class="keyword">= array(</span><span class="string">'options' </span><span class="keyword">=&gt; array(</span><span class="default">$myValidator</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">));<br /></span><span class="default">$username </span><span class="keyword">= </span><span class="default">filter_input</span><span class="keyword">(</span><span class="default">INPUT_GET</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">, </span><span class="default">FILTER_CALLBACK</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113102">  <div class="votes">
    <div id="Vu113102">
    <a href="/manual/vote-note.php?id=113102&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113102">
    <a href="/manual/vote-note.php?id=113102&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113102" title="53% like this...">
    3
    </div>
  </div>
  <a href="#113102" class="name">
  <strong class="user"><em>akshay dot leadindia at gmail dot com</em></strong></a><a class="genanchor" href="#113102"> &para;</a><div class="date" title="2013-08-29 02:17"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113102">
<div class="phpcode"><code><span class="html">The beauty of using this instead of directly using filter_var( $_GET['search'] ) is that you don't need to check if( isset( $_GET['search'] ) ) as if you pass that to filter_var and the key is not set then it will result in a warning. This function simplifies this and will return the relevant result to you (as per your options set) if the key has not been set in the user input. <br /><br />If the type of filter you are using also supports a 'default' argument then this function will also stuff your missing input key with that value, again saving your efforts</span></code></div>
  </div>
 </div>
  <div class="note" id="99115">  <div class="votes">
    <div id="Vu99115">
    <a href="/manual/vote-note.php?id=99115&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99115">
    <a href="/manual/vote-note.php?id=99115&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99115" title="52% like this...">
    4
    </div>
  </div>
  <a href="#99115" class="name">
  <strong class="user"><em>travismowens at gmail dot com</em></strong></a><a class="genanchor" href="#99115"> &para;</a><div class="date" title="2010-07-28 09:21"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99115">
<div class="phpcode"><code><span class="html">I wouldn't recommend people use this function to store their data in a database.  It's best not to encode data when storing it, it's better to store it raw and convert in upon the time of need.<br /><br />One main reason for this is because if you have a short CHAR(16) field and the text contains encoded characters (quotes, ampersand) you can easily take a 12 character entry which obviously fits, but because of encoding it no longer fits.<br /><br />Also, while not as common, if you need to use this data in another place, such as a non webpage (perhaps in a desktop app, or to a cell phone SMS or to a pager) the HTML encoded data will appear raw, and now you have to decode the data.<br /><br />In summary, the best way to architect your system, is to store data as raw, and encode it only the moment you need to.  So this means in your PHP upon doing a SQL query, instead of merely doing an   echo $row['title']  you need to run htmlentities() on your echos, or better yet, an abstract function.</span></code></div>
  </div>
 </div>
  <div class="note" id="127415">  <div class="votes">
    <div id="Vu127415">
    <a href="/manual/vote-note.php?id=127415&amp;page=function.filter-input&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127415">
    <a href="/manual/vote-note.php?id=127415&amp;page=function.filter-input&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127415" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#127415" class="name">
  <strong class="user"><em>HonzaZ</em></strong></a><a class="genanchor" href="#127415"> &para;</a><div class="date" title="2022-08-05 10:57"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127415">
<div class="phpcode"><code><span class="html">In fastcgi sapi implementations, filter_input(INPUT_SERVER) can return empty results.<br /><br />In my case (8.1.9 64bit php-cgi) it was caused by auto_globals_jit enabled . When disabled (in php.ini on php startup), filter_input(INPUT_SERVER) works correctly.<br /><br />php-fpm sapi isn't affected.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.filter-input&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-input.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
