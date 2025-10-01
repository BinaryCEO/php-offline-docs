<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: filter_input_array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.filter-input-array.php">
 <link rel="shorturl" href="https://www.php.net/filter-input-array">
 <link rel="alternate" href="https://www.php.net/filter-input-array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filter.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.filter-input.php">
 <link rel="next" href="https://www.php.net/manual/en/function.filter-list.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.filter-input-array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.filter-input-array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.filter-input-array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.filter-input-array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.filter-input-array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.filter-input-array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.filter-input-array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.filter-input-array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.filter-input-array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.filter-input-array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.filter-input-array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets external variables and optionally filters them" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: filter_input_array - Manual" />
<meta name="twitter:description" content="Gets external variables and optionally filters them" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: filter_input_array - Manual" />
<meta itemprop="description" content="Gets external variables and optionally filters them" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets external variables and optionally filters them" />

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
        <a href="function.filter-list.php">
          filter_list &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.filter-input.php">
          &laquo; filter_input        </a>
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
            <option value='en/function.filter-input-array.php' selected="selected">English</option>
            <option value='de/function.filter-input-array.php'>German</option>
            <option value='es/function.filter-input-array.php'>Spanish</option>
            <option value='fr/function.filter-input-array.php'>French</option>
            <option value='it/function.filter-input-array.php'>Italian</option>
            <option value='ja/function.filter-input-array.php'>Japanese</option>
            <option value='pt_BR/function.filter-input-array.php'>Brazilian Portuguese</option>
            <option value='ru/function.filter-input-array.php'>Russian</option>
            <option value='tr/function.filter-input-array.php'>Turkish</option>
            <option value='uk/function.filter-input-array.php'>Ukrainian</option>
            <option value='zh/function.filter-input-array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.filter-input-array" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">filter_input_array</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_input_array</span> &mdash; <span class="dc-title">Gets external variables and optionally filters them</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.filter-input-array-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>filter_input_array</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$add_empty</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="para rdfs-comment">
   This function is useful for retrieving many values without
   repetitively calling <span class="function"><a href="function.filter-input.php" class="function">filter_input()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.filter-input-array-parameters">
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
       <span class="function"><a href="function.filter-var-array.php" class="function">filter_var_array()</a></span> instead.
      </p>
     </div>
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


 <div class="refsect1 returnvalues" id="refsect1-function.filter-input-array-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="simpara">
   On success, an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> containing the values of the requested variables.
  </p>
  <p class="simpara">
   On failure, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
   Except if the failure is that the input array designated by
   <code class="parameter">type</code> is not populated where <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is returned
   if the <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong> flag is used.
  </p>
  <p class="simpara">
   Missing entries from the input array will be populated into the returned
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span> if <code class="parameter">add_empty</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
   In which case, missing entries will be set to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>,
   unless the <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong> flag is used,
   in which case it will be <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <p class="simpara">
   An entry of the returned <span class="type"><a href="language.types.array.php" class="type array">array</a></span> will be <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the filter fails,
   unless the <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong> flag is used,
   in which case it will be <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.filter-input-array-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    There is no <code class="literal">REQUEST_TIME</code> key in
    <strong><code><a href="filter.constants.php#constant.input-server">INPUT_SERVER</a></code></strong> array because it is inserted into the
    <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var> later.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.filter-input-array-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.filter-input.php" class="function" rel="rdfs-seeAlso">filter_input()</a> - Gets a specific external variable by name and optionally filters it</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filter/functions/filter-input-array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.filter-input-array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.filter-input-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-input-array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114182">  <div class="votes">
    <div id="Vu114182">
    <a href="/manual/vote-note.php?id=114182&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114182">
    <a href="/manual/vote-note.php?id=114182&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114182" title="76% like this...">
    20
    </div>
  </div>
  <a href="#114182" class="name">
  <strong class="user"><em>sdupuis at blax dot ca</em></strong></a><a class="genanchor" href="#114182"> &para;</a><div class="date" title="2014-01-21 09:36"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114182">
<div class="phpcode"><code><span class="html">Note that although you can provide a default filter for the entire input array there is no way to provide a flag for that filter without building the entire definition array yourself.<br /><br />So here is a small function that can alleviate this hassle!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">filter_input_array_with_default_flags</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$filter</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">, </span><span class="default">$add_empty </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">) {<br />    </span><span class="default">$loopThrough </span><span class="keyword">= array();<br />    switch (</span><span class="default">$type</span><span class="keyword">) {<br />        case </span><span class="default">INPUT_GET </span><span class="keyword">: </span><span class="default">$loopThrough </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">; break;<br />        case </span><span class="default">INPUT_POST </span><span class="keyword">: </span><span class="default">$loopThrough </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">; break;<br />        case </span><span class="default">INPUT_COOKIE </span><span class="keyword">: </span><span class="default">$loopThrough </span><span class="keyword">= </span><span class="default">$_COOKIE</span><span class="keyword">; break;<br />        case </span><span class="default">INPUT_SERVER </span><span class="keyword">: </span><span class="default">$loopThrough </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">; break;<br />        case </span><span class="default">INPUT_ENV </span><span class="keyword">: </span><span class="default">$loopThrough </span><span class="keyword">= </span><span class="default">$_ENV</span><span class="keyword">; break;<br />    }<br />   <br />    </span><span class="default">$args </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$loopThrough </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = array(</span><span class="string">'filter'</span><span class="keyword">=&gt;</span><span class="default">$filter</span><span class="keyword">, </span><span class="string">'flags'</span><span class="keyword">=&gt;</span><span class="default">$flags</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">filter_input_array</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">, </span><span class="default">$add_empty</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114097">  <div class="votes">
    <div id="Vu114097">
    <a href="/manual/vote-note.php?id=114097&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114097">
    <a href="/manual/vote-note.php?id=114097&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114097" title="75% like this...">
    17
    </div>
  </div>
  <a href="#114097" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#114097"> &para;</a><div class="date" title="2014-01-10 04:39"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114097">
<div class="phpcode"><code><span class="html">[New Version]<br />This function is very useful for filtering complicated array structure.<br />Also, Some integer bitmasks and invalid UTF-8 sequence detection are available.<br /><br />Code:<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @param  integer $type    Constant like INPUT_XXX.<br /> * @param  array   $default Default structure of the specified super global var.<br /> *                          Following bitmasks are available:<br /> *  + FILTER_STRUCT_FORCE_ARRAY - Force 1 dimensional array.<br /> *  + FILTER_STRUCT_TRIM        - Trim by ASCII control chars.<br /> *  + FILTER_STRUCT_FULL_TRIM   - Trim by ASCII control chars,<br /> *                                full-width and no-break space.<br /> * @return array            The value of the filtered super global var.<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'FILTER_STRUCT_FORCE_ARRAY'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'FILTER_STRUCT_TRIM'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'FILTER_STRUCT_FULL_TRIM'</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />function </span><span class="default">filter_struct_utf8</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, array </span><span class="default">$default</span><span class="keyword">) {<br />    static </span><span class="default">$func </span><span class="keyword">= </span><span class="default">__FUNCTION__</span><span class="keyword">;<br />    static </span><span class="default">$trim </span><span class="keyword">= </span><span class="string">"[\\x0-\x20\x7f]"</span><span class="keyword">;<br />    static </span><span class="default">$ftrim </span><span class="keyword">= </span><span class="string">"[\\x0-\x20\x7f\xc2\xa0\xe3\x80\x80]"</span><span class="keyword">;<br />    static </span><span class="default">$recursive_static </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if (!</span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">$recursive_static</span><span class="keyword">) {<br />        </span><span class="default">$types </span><span class="keyword">= array(<br />            </span><span class="default">INPUT_GET </span><span class="keyword">=&gt; </span><span class="default">$_GET</span><span class="keyword">,<br />            </span><span class="default">INPUT_POST </span><span class="keyword">=&gt; </span><span class="default">$_POST</span><span class="keyword">,<br />            </span><span class="default">INPUT_COOKIE </span><span class="keyword">=&gt; </span><span class="default">$_COOKIE</span><span class="keyword">,<br />            </span><span class="default">INPUT_REQUEST </span><span class="keyword">=&gt; </span><span class="default">$_REQUEST</span><span class="keyword">,<br />        );<br />        if (!isset(</span><span class="default">$types</span><span class="keyword">[(int)</span><span class="default">$type</span><span class="keyword">])) {<br />            throw new </span><span class="default">LogicException</span><span class="keyword">(</span><span class="string">'unknown super global var type'</span><span class="keyword">);<br />        }<br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">$types</span><span class="keyword">[(int)</span><span class="default">$type</span><span class="keyword">];<br />        </span><span class="default">$recursive_static </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">$type</span><span class="keyword">;<br />    }<br />    </span><span class="default">$ret </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$default </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">$is_int </span><span class="keyword">= </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            if (!(</span><span class="default">$value </span><span class="keyword">| (<br />                </span><span class="default">FILTER_STRUCT_FORCE_ARRAY </span><span class="keyword">|<br />                </span><span class="default">FILTER_STRUCT_FULL_TRIM </span><span class="keyword">| <br />                </span><span class="default">FILTER_STRUCT_TRIM<br />            </span><span class="keyword">))) {<br />                </span><span class="default">$recursive_static </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                throw new </span><span class="default">LogicException</span><span class="keyword">(</span><span class="string">'unknown bitmask'</span><span class="keyword">);<br />            }<br />            if (</span><span class="default">$value </span><span class="keyword">&amp; </span><span class="default">FILTER_STRUCT_FORCE_ARRAY</span><span class="keyword">) {<br />                </span><span class="default">$tmp </span><span class="keyword">= array();<br />                if (isset(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />                    foreach ((array)</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />                        if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'//u'</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">)){<br />                            continue;<br />                        }<br />                        </span><span class="default">$value </span><span class="keyword">&amp;= </span><span class="default">FILTER_STRUCT_FULL_TRIM </span><span class="keyword">| </span><span class="default">FILTER_STRUCT_TRIM</span><span class="keyword">;<br />                        </span><span class="default">$tmp </span><span class="keyword">+= array(</span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">? </span><span class="default">$value </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">);<br />                    }<br />                }<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$tmp</span><span class="keyword">;<br />            }<br />        }<br />        if (</span><span class="default">$isset </span><span class="keyword">= isset(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) and </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">);<br />        } elseif (!</span><span class="default">$isset </span><span class="keyword">|| </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">null</span><span class="keyword">;<br />        } elseif (</span><span class="default">$is_int </span><span class="keyword">&amp;&amp; </span><span class="default">$value </span><span class="keyword">&amp; </span><span class="default">FILTER_STRUCT_FULL_TRIM</span><span class="keyword">) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\A</span><span class="keyword">{</span><span class="default">$ftrim</span><span class="keyword">}</span><span class="string">++|</span><span class="keyword">{</span><span class="default">$ftrim</span><span class="keyword">}</span><span class="string">++\z/u"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        } elseif (</span><span class="default">$is_int </span><span class="keyword">&amp;&amp; </span><span class="default">$value </span><span class="keyword">&amp; </span><span class="default">FILTER_STRUCT_TRIM</span><span class="keyword">) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\A</span><span class="keyword">{</span><span class="default">$trim</span><span class="keyword">}</span><span class="string">++|</span><span class="keyword">{</span><span class="default">$trim</span><span class="keyword">}</span><span class="string">++\z/u"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        } else {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'//u'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        }<br />        if (</span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] === </span><span class="default">null</span><span class="keyword">) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$is_int </span><span class="keyword">? </span><span class="string">'' </span><span class="keyword">: </span><span class="default">$value</span><span class="keyword">;<br />        }<br />    }<br />    if (!</span><span class="default">$recursive</span><span class="keyword">) {<br />        </span><span class="default">$recursive_static </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112849">  <div class="votes">
    <div id="Vu112849">
    <a href="/manual/vote-note.php?id=112849&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112849">
    <a href="/manual/vote-note.php?id=112849&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112849" title="75% like this...">
    8
    </div>
  </div>
  <a href="#112849" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#112849"> &para;</a><div class="date" title="2013-07-29 10:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112849">
<div class="phpcode"><code><span class="html">This function is very useful for filtering complicated array structure.<br /><br />Code:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">filter_request</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$default_structure</span><span class="keyword">) {<br /><br />    </span><span class="default">$ret </span><span class="keyword">= array();<br /><br />    foreach (</span><span class="default">$default_structure </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        if (!isset(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        } elseif (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">filter_request</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">);<br />        } elseif (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$var</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        }<br />    }<br /><br />    return </span><span class="default">$ret</span><span class="keyword">;<br /><br />}<br /></span><span class="default">?&gt;<br /></span><br />Sample Usage:<br /><span class="default">&lt;?php<br />$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">][</span><span class="string">'wrong_structure'</span><span class="keyword">] = </span><span class="string">'foo'</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">][</span><span class="string">'c'</span><span class="keyword">] = </span><span class="string">'CORRECT'</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">][</span><span class="string">'d'</span><span class="keyword">][</span><span class="string">'wrong_structure'</span><span class="keyword">] = </span><span class="string">'bar'</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'unneeded_item'</span><span class="keyword">] = </span><span class="string">'baz'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_request</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">, array(<br />    </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'DEFAULT'</span><span class="keyword">,<br />    </span><span class="string">'b' </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="string">'DEFAULT'</span><span class="keyword">,<br />        </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="string">'DEFAULT'</span><span class="keyword">,<br />    ),<br />)));<br /></span><span class="default">?&gt;<br /></span><br />Sample Result:<br />array(2) {<br />  ["a"]=&gt;<br />  string(21) "DEFAULT"<br />  ["b"]=&gt;<br />  array(2) {<br />    ["c"]=&gt;<br />    string(12) "CORRECT"<br />    ["d"]=&gt;<br />    string(21) "DEFAULT"<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="97491">  <div class="votes">
    <div id="Vu97491">
    <a href="/manual/vote-note.php?id=97491&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97491">
    <a href="/manual/vote-note.php?id=97491&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97491" title="69% like this...">
    9
    </div>
  </div>
  <a href="#97491" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#97491"> &para;</a><div class="date" title="2010-04-22 12:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97491">
<div class="phpcode"><code><span class="html">Beware: if none of the arguments is set, this function returns NULL, not an array of NULL values.<br /><br />/* No POST vars set in request<br />$_POST = array();<br />*/<br /><br />$args = array('some_post_var' =&gt; FILTER_VALIDATE_INT);<br />$myinputs = filter_input_array(INPUT_POST, $args);<br />var_dump($myinputs);<br /><br />Expected Output: array(1) { ["some_post_var"]=&gt; NULL } <br /><br />Actual Output: NULL</span></code></div>
  </div>
 </div>
  <div class="note" id="84299">  <div class="votes">
    <div id="Vu84299">
    <a href="/manual/vote-note.php?id=84299&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84299">
    <a href="/manual/vote-note.php?id=84299&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84299" title="69% like this...">
    5
    </div>
  </div>
  <a href="#84299" class="name">
  <strong class="user"><em>Kevin</em></strong></a><a class="genanchor" href="#84299"> &para;</a><div class="date" title="2008-07-08 06:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84299">
<div class="phpcode"><code><span class="html">Looks like filter_input_array isn't aware of changes to the input arrays that were made before calling filter_input_array. Instead, it always looks at the originally submitted input arrays.<br /><br />So this will not work:<br /><br />$_POST['my_float_field'] = str_replace(',','.',$_POST['my_float_field']);<br />$args = array('my_float_field',FILTER_VALIDATE_FLOAT);<br />$result = filter_input_array(INPUT_POST, $args);</span></code></div>
  </div>
 </div>
  <div class="note" id="114098">  <div class="votes">
    <div id="Vu114098">
    <a href="/manual/vote-note.php?id=114098&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114098">
    <a href="/manual/vote-note.php?id=114098&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114098" title="63% like this...">
    5
    </div>
  </div>
  <a href="#114098" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#114098"> &para;</a><div class="date" title="2014-01-10 04:40"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114098">
<div class="phpcode"><code><span class="html">[New Version]<br /><br />Example Usage:<br /><span class="default">&lt;?php<br />$_GET</span><span class="keyword">[</span><span class="string">'A'</span><span class="keyword">][</span><span class="string">'a'</span><span class="keyword">] = </span><span class="string">'  CORRECT(including some spaces)    '</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'A'</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">] = </span><span class="string">'  CORRECT(including some spaces)    '</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'A'</span><span class="keyword">][</span><span class="string">'c'</span><span class="keyword">] = </span><span class="string">"Invalid UTF-8 sequence: \xe3\xe3\xe3"</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'A'</span><span class="keyword">][</span><span class="string">'d'</span><span class="keyword">][</span><span class="string">'invalid_structure'</span><span class="keyword">] = </span><span class="string">'INVALID'</span><span class="keyword">;<br /><br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'B'</span><span class="keyword">][</span><span class="string">'a'</span><span class="keyword">] = </span><span class="string">'  CORRECT(including some spaces)    '</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'B'</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">] = </span><span class="string">"Invalid UTF-8 sequence: \xe3\xe3\xe3"</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'B'</span><span class="keyword">][</span><span class="string">'c'</span><span class="keyword">][</span><span class="string">'invalid_structure'</span><span class="keyword">] = </span><span class="string">'INVALID'</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'B'</span><span class="keyword">][</span><span class="string">"Invalid UTF-8 sequence: \xe3\xe3\xe3"</span><span class="keyword">] = </span><span class="string">'INVALID'</span><span class="keyword">;<br /><br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'C'</span><span class="keyword">][</span><span class="string">'a'</span><span class="keyword">] = </span><span class="string">'  CORRECT(including some spaces)    '</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'C'</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">] = </span><span class="string">"Invalid UTF-8 sequence: \xe3\xe3\xe3"</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'C'</span><span class="keyword">][</span><span class="string">'c'</span><span class="keyword">][</span><span class="string">'invalid_structure'</span><span class="keyword">] = </span><span class="string">'INVALID'</span><span class="keyword">;<br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'C'</span><span class="keyword">][</span><span class="string">"Invalid UTF-8 sequence: \xe3\xe3\xe3"</span><span class="keyword">] = </span><span class="string">'INVALID'</span><span class="keyword">;<br /><br /></span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'unneeded_item'</span><span class="keyword">] = </span><span class="string">'UNNEEDED'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">filter_struct_utf8</span><span class="keyword">(</span><span class="default">INPUT_GET</span><span class="keyword">, array(<br />    </span><span class="string">'A' </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />        </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">FILTER_STRUCT_TRIM</span><span class="keyword">,<br />        </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />        </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />    ),<br />    </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="default">FILTER_STRUCT_FORCE_ARRAY</span><span class="keyword">,<br />    </span><span class="string">'C' </span><span class="keyword">=&gt; </span><span class="default">FILTER_STRUCT_FORCE_ARRAY </span><span class="keyword">| </span><span class="default">FILTER_STRUCT_TRIM</span><span class="keyword">,<br />)));<br /></span><span class="default">?&gt;<br /></span><br />Example Result:<br />array(3) {<br />  ["A"]=&gt;<br />  array(4) {<br />    ["a"]=&gt;<br />    string(36) "  CORRECT(including some spaces)    "<br />    ["b"]=&gt;<br />    string(30) "CORRECT(including some spaces)"<br />    ["c"]=&gt;<br />    string(0) ""<br />    ["d"]=&gt;<br />    string(0) ""<br />  }<br />  ["B"]=&gt;<br />  array(3) {<br />    ["a"]=&gt;<br />    string(36) "  CORRECT(including some spaces)    "<br />    ["b"]=&gt;<br />    string(0) ""<br />    ["c"]=&gt;<br />    string(0) ""<br />  }<br />  ["C"]=&gt;<br />  array(3) {<br />    ["a"]=&gt;<br />    string(30) "CORRECT(including some spaces)"<br />    ["b"]=&gt;<br />    string(0) ""<br />    ["c"]=&gt;<br />    string(0) ""<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="96736">  <div class="votes">
    <div id="Vu96736">
    <a href="/manual/vote-note.php?id=96736&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96736">
    <a href="/manual/vote-note.php?id=96736&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96736" title="63% like this...">
    3
    </div>
  </div>
  <a href="#96736" class="name">
  <strong class="user"><em>ville at N0SPAM dot zydo dot com</em></strong></a><a class="genanchor" href="#96736"> &para;</a><div class="date" title="2010-03-13 03:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96736">
<div class="phpcode"><code><span class="html">While filtering input arrays, be careful of what flags you set besides FILTER_REQUIRE_ARRAY. For example, setting the flags like so:
<br />
<br /><span class="default">&lt;?php
<br />$filter </span><span class="keyword">= array(
<br /></span><span class="string">'myInputArr' </span><span class="keyword">=&gt; array(</span><span class="string">'filter' </span><span class="keyword">=&gt; </span><span class="default">FILTER_SANITIZE_STRING</span><span class="keyword">,
<br />                      </span><span class="string">'flags' </span><span class="keyword">=&gt; array(</span><span class="string">'FILTER_FLAG_STRIP_LOW'</span><span class="keyword">, </span><span class="string">'FILTER_REQUIRE_ARRAY'</span><span class="keyword">))
<br />);
<br />
<br /></span><span class="default">$form_inputs </span><span class="keyword">= </span><span class="default">filter_input_array</span><span class="keyword">(</span><span class="default">INPUT_POST</span><span class="keyword">, </span><span class="default">$filter</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />.. will result in a blank $form_inputs['myInputArr'] regardless of what $_POST['myInputArr'] contains.</span></code></div>
  </div>
 </div>
  <div class="note" id="88478">  <div class="votes">
    <div id="Vu88478">
    <a href="/manual/vote-note.php?id=88478&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88478">
    <a href="/manual/vote-note.php?id=88478&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88478" title="54% like this...">
    1
    </div>
  </div>
  <a href="#88478" class="name">
  <strong class="user"><em>kibblewhite at live dot com</em></strong></a><a class="genanchor" href="#88478"> &para;</a><div class="date" title="2009-01-26 07:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88478">
<div class="phpcode"><code><span class="html">If you are trying to handling multiple form inputs with same name, then you must assign the `'flags'  =&gt; FILTER_REQUIRE_ARRAY` to the definitions entry.<br /><br />Example, you have a html form as such:<br />&lt;form&gt;<br /> &lt;input name="t1[]" value="Some string One" /&gt;<br /> &lt;input name="t1[]" value="Another String Two" /&gt;<br />&lt;/form&gt;<br /><br />Your definitions array will look a little like this:<br />$args = array(<br />  't1'    =&gt; array(<br />      'name' =&gt; 't1',<br />      'filter' =&gt; FILTER_SANITIZE_STRING,<br />      'flags'  =&gt; FILTER_REQUIRE_ARRAY)<br />);</span></code></div>
  </div>
 </div>
  <div class="note" id="128821">  <div class="votes">
    <div id="Vu128821">
    <a href="/manual/vote-note.php?id=128821&amp;page=function.filter-input-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128821">
    <a href="/manual/vote-note.php?id=128821&amp;page=function.filter-input-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128821" title="no votes...">
    0
    </div>
  </div>
  <a href="#128821" class="name">
  <strong class="user"><em>cornelyu85 at yahoo dot com</em></strong></a><a class="genanchor" href="#128821"> &para;</a><div class="date" title="2023-08-22 04:26"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128821">
<div class="phpcode"><code><span class="html">Here's an extended function that allows you to keep also the unfiltered items/args from the request, while you also apply validation to some of them:<br /><br /><span class="default">&lt;?php<br /><br />$validationRules </span><span class="keyword">= [<br />    </span><span class="string">'foo' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'filter' </span><span class="keyword">=&gt; </span><span class="default">FILTER_VALIDATE_REGEXP</span><span class="keyword">,<br />        </span><span class="string">'options' </span><span class="keyword">=&gt; [</span><span class="string">'regexp' </span><span class="keyword">=&gt; </span><span class="string">'/^(bar|baz)$/i'</span><span class="keyword">]<br />    ]<br />];<br /><br /></span><span class="default">$request </span><span class="keyword">= </span><span class="default">filter_input_array_keep_unfiltered_args</span><span class="keyword">(</span><span class="default">INPUT_POST</span><span class="keyword">, </span><span class="default">$validationRules</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">);<br /><br />function </span><span class="default">filter_input_array_keep_unfiltered_args</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$filters</span><span class="keyword">, </span><span class="default">$addEmpty </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$rawRequest </span><span class="keyword">= </span><span class="default">filter_input_array</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">);<br /><br />    </span><span class="default">$validationRules </span><span class="keyword">= [];<br />    foreach (</span><span class="default">$rawRequest </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$validationRules</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = isset(</span><span class="default">$filters</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) ? </span><span class="default">$filters</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] : [</span><span class="string">'filter' </span><span class="keyword">=&gt; </span><span class="default">FILTER_DEFAULT</span><span class="keyword">];<br />    }<br /><br />    return </span><span class="default">filter_input_array</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$validationRules</span><span class="keyword">, </span><span class="default">$addEmpty</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.filter-input-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filter-input-array.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
