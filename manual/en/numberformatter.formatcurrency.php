<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: NumberFormatter::formatCurrency - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/numberformatter.formatcurrency.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/numberformatter.formatcurrency.php">
 <link rel="alternate" href="https://www.php.net/manual/en/numberformatter.formatcurrency.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.numberformatter.php">
 <link rel="prev" href="https://www.php.net/manual/en/numberformatter.format.php">
 <link rel="next" href="https://www.php.net/manual/en/numberformatter.getattribute.php">

 <link rel="alternate" href="https://www.php.net/manual/en/numberformatter.formatcurrency.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/numberformatter.formatcurrency.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/numberformatter.formatcurrency.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/numberformatter.formatcurrency.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/numberformatter.formatcurrency.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/numberformatter.formatcurrency.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/numberformatter.formatcurrency.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/numberformatter.formatcurrency.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/numberformatter.formatcurrency.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/numberformatter.formatcurrency.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/numberformatter.formatcurrency.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Format a currency value" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: NumberFormatter::formatCurrency - Manual" />
<meta name="twitter:description" content="Format a currency value" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: NumberFormatter::formatCurrency - Manual" />
<meta itemprop="description" content="Format a currency value" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Format a currency value" />

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
        <a href="numberformatter.getattribute.php">
          NumberFormatter::getAttribute &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="numberformatter.format.php">
          &laquo; NumberFormatter::format        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='class.numberformatter.php'>NumberFormatter</a></li>      </ul>
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
            <option value='en/numberformatter.formatcurrency.php' selected="selected">English</option>
            <option value='de/numberformatter.formatcurrency.php'>German</option>
            <option value='es/numberformatter.formatcurrency.php'>Spanish</option>
            <option value='fr/numberformatter.formatcurrency.php'>French</option>
            <option value='it/numberformatter.formatcurrency.php'>Italian</option>
            <option value='ja/numberformatter.formatcurrency.php'>Japanese</option>
            <option value='pt_BR/numberformatter.formatcurrency.php'>Brazilian Portuguese</option>
            <option value='ru/numberformatter.formatcurrency.php'>Russian</option>
            <option value='tr/numberformatter.formatcurrency.php'>Turkish</option>
            <option value='uk/numberformatter.formatcurrency.php'>Ukrainian</option>
            <option value='zh/numberformatter.formatcurrency.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="numberformatter.formatcurrency" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">NumberFormatter::formatCurrency</h1>
  <h1 class="refname">numfmt_format_currency</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">NumberFormatter::formatCurrency</span> -- <span class="refname">numfmt_format_currency</span> &mdash; <span class="dc-title">Format a currency value</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-numberformatter.formatcurrency-description">
  <h3 class="title">Description</h3>
  <p class="para">
   Object-oriented style
  </p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>NumberFormatter::formatCurrency</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$amount</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$currency</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Procedural style
  </p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>numfmt_format_currency</strong></span>(<span class="methodparam"><span class="type"><a href="class.numberformatter.php" class="type NumberFormatter">NumberFormatter</a></span> <code class="parameter">$formatter</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$amount</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$currency</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Format the currency value according to the formatter rules.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-numberformatter.formatcurrency-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">formatter</code></dt>
     <dd>
      <p class="para">
       <span class="classname"><a href="class.numberformatter.php" class="classname">NumberFormatter</a></span> object.
      </p>
     </dd>
    
    
     <dt><code class="parameter">amount</code></dt>
     <dd>
      <p class="para">
       The numeric currency value.
      </p>
     </dd>
    
    
     <dt><code class="parameter">currency</code></dt>
     <dd>
      <p class="para">
       The 3-letter ISO 4217 currency code indicating the currency to use.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>



 <div class="refsect1 returnvalues" id="refsect1-numberformatter.formatcurrency-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   String representing the formatted currency value,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-numberformatter.formatcurrency-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2498">
   <p><strong>Example #1 <span class="function"><strong>numfmt_format_currency()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fmt </span><span style="color: #007700">= </span><span style="color: #0000BB">numfmt_create</span><span style="color: #007700">( </span><span style="color: #DD0000">'de_DE'</span><span style="color: #007700">, </span><span style="color: #0000BB">NumberFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">CURRENCY </span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">numfmt_format_currency</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"EUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">numfmt_format_currency</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"RUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= </span><span style="color: #0000BB">numfmt_create</span><span style="color: #007700">( </span><span style="color: #DD0000">'ru_RU'</span><span style="color: #007700">, </span><span style="color: #0000BB">NumberFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">CURRENCY </span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">numfmt_format_currency</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"EUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">numfmt_format_currency</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"RUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-2499">
   <p><strong>Example #2 OO example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fmt </span><span style="color: #007700">= new </span><span style="color: #0000BB">NumberFormatter</span><span style="color: #007700">( </span><span style="color: #DD0000">'de_DE'</span><span style="color: #007700">, </span><span style="color: #0000BB">NumberFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">CURRENCY </span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatCurrency</span><span style="color: #007700">(</span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"EUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatCurrency</span><span style="color: #007700">(</span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"RUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= new </span><span style="color: #0000BB">NumberFormatter</span><span style="color: #007700">( </span><span style="color: #DD0000">'ru_RU'</span><span style="color: #007700">, </span><span style="color: #0000BB">NumberFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">CURRENCY </span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatCurrency</span><span style="color: #007700">(</span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"EUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatCurrency</span><span style="color: #007700">(</span><span style="color: #0000BB">1234567.891234567890000</span><span style="color: #007700">, </span><span style="color: #DD0000">"RUR"</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="para">The above example will output:</p>
  <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">1.234.567,89 €
1.234.567,89 RUR
1 234 567,89€
1 234 567,89р.</pre>
</div>
  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-numberformatter.formatcurrency-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Formats achievable by this method of formatting cannot fully use the possibilities of underlying ICU library,
    such as to format currency with narrow currency symbol.
   </p>
   <p class="para">
    To fully utilize them use <span class="function"><a href="messageformatter.formatmessage.php" class="function">msgfmt_format_message()</a></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-numberformatter.formatcurrency-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="numberformatter.geterrorcode.php" class="function" rel="rdfs-seeAlso">numfmt_get_error_code()</a> - Get formatter's last error code</span></li>
    <li><span class="function"><a href="numberformatter.format.php" class="function" rel="rdfs-seeAlso">numfmt_format()</a> - Format a number</span></li>
    <li><span class="function"><a href="numberformatter.parsecurrency.php" class="function" rel="rdfs-seeAlso">numfmt_parse_currency()</a> - Parse a currency number</span></li>
    <li><span class="function"><a href="messageformatter.formatmessage.php" class="function" rel="rdfs-seeAlso">msgfmt_format_message()</a> - Quick format message</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/numberformatter/format-currency.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fnumberformatter.formatcurrency%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=numberformatter.formatcurrency&amp;repo=en&amp;redirect=https://www.php.net/manual/en/numberformatter.formatcurrency.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110475">  <div class="votes">
    <div id="Vu110475">
    <a href="/manual/vote-note.php?id=110475&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110475">
    <a href="/manual/vote-note.php?id=110475&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110475" title="83% like this...">
    50
    </div>
  </div>
  <a href="#110475" class="name">
  <strong class="user"><em>Ruben</em></strong></a><a class="genanchor" href="#110475"> &para;</a><div class="date" title="2012-10-25 05:40"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110475">
<div class="phpcode"><code><span class="html">While this function accepts floats for currency (in order to display cents), you should (for applications where this is critical) never store or handle money using floats, as rounding errors may occur. Work with integers (or a BigInt class if integers aren't large enough) internally instead, where the integer represents the total number of cents. An alternative (especially if you need more precision than cents) is using the BC (Binary Calculator) Math module, that handles arbitrary precision numbers with 100% accuracy.</span></code></div>
  </div>
 </div>
  <div class="note" id="114376">  <div class="votes">
    <div id="Vu114376">
    <a href="/manual/vote-note.php?id=114376&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114376">
    <a href="/manual/vote-note.php?id=114376&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114376" title="80% like this...">
    28
    </div>
  </div>
  <a href="#114376" class="name">
  <strong class="user"><em>martin t holzhauer dohd eu</em></strong></a><a class="genanchor" href="#114376"> &para;</a><div class="date" title="2014-02-13 02:37"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114376">
<div class="phpcode"><code><span class="html">When you want to format currency's without sub units and the currency is not the one used by the given locale you need to set the currency code before as TextAttribute _BEFORE_ setting the NumberFormatter::FRACTION_DIGITS<br /><br /><span class="default">&lt;?php<br />$fmt </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">'en_US'</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);<br /></span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">setTextAttribute</span><span class="keyword">(</span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY_CODE</span><span class="keyword">, </span><span class="string">'EUR'</span><span class="keyword">);<br /></span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">FRACTION_DIGITS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">formatCurrency</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="string">'EUR'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116984">  <div class="votes">
    <div id="Vu116984">
    <a href="/manual/vote-note.php?id=116984&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116984">
    <a href="/manual/vote-note.php?id=116984&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116984" title="76% like this...">
    9
    </div>
  </div>
  <a href="#116984" class="name">
  <strong class="user"><em>mail at cebe dot cc</em></strong></a><a class="genanchor" href="#116984"> &para;</a><div class="date" title="2015-03-30 04:18"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116984">
<div class="phpcode"><code><span class="html">The note about different formatting[1] actually does not depend on the PHP version but on the version of the icu library[2] that PHP is compiled against because this library has a database with formatting rules for the different locales.<br /><br />[1]: <a href="http://php.net/manual/en/numberformatter.formatcurrency.php#116610" rel="nofollow" target="_blank">http://php.net/manual/en/numberformatter.formatcurrency.php#116610</a><br />[2]: <a href="http://site.icu-project.org/" rel="nofollow" target="_blank">http://site.icu-project.org/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="116610">  <div class="votes">
    <div id="Vu116610">
    <a href="/manual/vote-note.php?id=116610&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116610">
    <a href="/manual/vote-note.php?id=116610&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116610" title="62% like this...">
    4
    </div>
  </div>
  <a href="#116610" class="name">
  <strong class="user"><em>Tyler Crompton</em></strong></a><a class="genanchor" href="#116610"> &para;</a><div class="date" title="2015-01-29 08:05"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116610">
<div class="phpcode"><code><span class="html">This had me scratching my head. When working with certain English locales (e.g. "en_US" and "en_CA" among others but certainly not all), it is important to note that negative numbers are formatted differently between PHP 5.5 and PHP 5.6.<br /><br />Code:<br /><br /><span class="default">&lt;?php<br /><br />$formatter </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">'en_US'</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);<br />echo </span><span class="default">$formatter</span><span class="keyword">-&gt;</span><span class="default">formatCurrency</span><span class="keyword">(-</span><span class="default">0.99</span><span class="keyword">, </span><span class="string">'USD'</span><span class="keyword">), </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">$formatter </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">'en_CA'</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);<br />echo </span><span class="default">$formatter</span><span class="keyword">-&gt;</span><span class="default">formatCurrency</span><span class="keyword">(-</span><span class="default">0.99</span><span class="keyword">, </span><span class="string">'USD'</span><span class="keyword">), </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Output from PHP 5.5:<br /><br />-$0.99<br />-US$0.99<br /><br />Output from PHP 5.6:<br /><br />($0.99)<br />(US$0.99)</span></code></div>
  </div>
 </div>
  <div class="note" id="121600">  <div class="votes">
    <div id="Vu121600">
    <a href="/manual/vote-note.php?id=121600&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121600">
    <a href="/manual/vote-note.php?id=121600&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121600" title="60% like this...">
    3
    </div>
  </div>
  <a href="#121600" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#121600"> &para;</a><div class="date" title="2017-09-03 08:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121600">
<div class="phpcode"><code><span class="html">formatCurrency() does not follow international standard for currency decimal, published here : <a href="https://www.currency-iso.org/en/home/tables/table-a1.html." rel="nofollow" target="_blank">https://www.currency-iso.org/en/home/tables/table-a1.html.</a><br /><br />To define decimal I found that we need to use format() function after setting some NumberFormat attributes.<br /><br />For example "COP" (Colombian peso) if defined to use 2 decimals, but NumberFormat::formatCurrency() use 0 decimal for this currency (I do not know why!).<br /><br />Here is the code I use :<br /><br />$fmt = new \NumberFormatter( 'fr', \NumberFormatter::CURRENCY);<br />$fmt-&gt;setTextAttribute( $fmt::CURRENCY_CODE, 'COP' );<br />$fmt-&gt;setAttribute( $fmt::FRACTION_DIGITS, 2 );<br />$numberString = $fmt-&gt;format( 1234.56 );<br /><br />The output is: 1 234,56 $CO<br /><br />If locale change to 'en' then the output is : COP1,234.56</span></code></div>
  </div>
 </div>
  <div class="note" id="118304">  <div class="votes">
    <div id="Vu118304">
    <a href="/manual/vote-note.php?id=118304&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118304">
    <a href="/manual/vote-note.php?id=118304&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118304" title="57% like this...">
    2
    </div>
  </div>
  <a href="#118304" class="name">
  <strong class="user"><em>Benoit Borrel</em></strong></a><a class="genanchor" href="#118304"> &para;</a><div class="date" title="2015-11-12 07:01"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118304">
<div class="phpcode"><code><span class="html">When setting the pattern, don't forget that space character between currency symbol and number (either as prefix or suffix) should not be breakable (like &amp;nbsp; for HTML). For example, in UTF-8 you should use the no-break-space character ("\xC2\xA0"):<br /><span class="default">&lt;?php <br />$fmt </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">'en_US'</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);<br /></span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">setPattern</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'¤#'</span><span class="keyword">,</span><span class="string">"¤\xC2\xA0#"</span><span class="keyword">, </span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">getPattern</span><span class="keyword">()));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120956">  <div class="votes">
    <div id="Vu120956">
    <a href="/manual/vote-note.php?id=120956&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120956">
    <a href="/manual/vote-note.php?id=120956&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120956" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120956" class="name">
  <strong class="user"><em>andrewfenn at gmail dot com</em></strong></a><a class="genanchor" href="#120956"> &para;</a><div class="date" title="2017-04-09 09:30"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120956">
<div class="phpcode"><code><span class="html">Currency symbols seem to have spurious support.<br /><br />Take for example the Thai Baht symbol.. ฿ which doesn't seem supported in the Thai locale, but is in other locales such as Chinese Simplified..<br /><br /><span class="default">&lt;?php<br />$fmt </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">'th_TH'</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);<br />echo </span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">formatCurrency</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="string">'THB'</span><span class="keyword">);<br /></span><span class="comment">// Outputs: THB 100<br /><br /></span><span class="default">$fmt </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">'zh_Hans'</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);<br />echo </span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">formatCurrency</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="string">'THB'</span><span class="keyword">);<br /></span><span class="comment">// Outputs: ฿ 100<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124537">  <div class="votes">
    <div id="Vu124537">
    <a href="/manual/vote-note.php?id=124537&amp;page=numberformatter.formatcurrency&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124537">
    <a href="/manual/vote-note.php?id=124537&amp;page=numberformatter.formatcurrency&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124537" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#124537" class="name">
  <strong class="user"><em>Patanjali</em></strong></a><a class="genanchor" href="#124537"> &para;</a><div class="date" title="2019-12-26 12:56"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124537">
<div class="phpcode"><code><span class="html">This function is typically over a 1000 times slower on the first run in a php session compared to subsequent runs, and that is using a newly created formatter each time.<br /><br />Timings for the first run have been from 60ms to 195ms, whereas subsequent runs are well under 100us.<br /><br />For comparison, creating the formatter takes about 100us.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=numberformatter.formatcurrency&amp;repo=en&amp;redirect=https://www.php.net/manual/en/numberformatter.formatcurrency.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.numberformatter.php">NumberFormatter</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="numberformatter.create.php" title="create">create</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.format.php" title="format">format</a>
                        </li>
                                                <li class="current">
                            <a href="numberformatter.formatcurrency.php" title="formatCurrency">formatCurrency</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.geterrorcode.php" title="getErrorCode">getErrorCode</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.geterrormessage.php" title="getErrorMessage">getErrorMessage</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.getlocale.php" title="getLocale">getLocale</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.getpattern.php" title="getPattern">getPattern</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.getsymbol.php" title="getSymbol">getSymbol</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.gettextattribute.php" title="getTextAttribute">getTextAttribute</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.parse.php" title="parse">parse</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.parsecurrency.php" title="parseCurrency">parseCurrency</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.setattribute.php" title="setAttribute">setAttribute</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.setpattern.php" title="setPattern">setPattern</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.setsymbol.php" title="setSymbol">setSymbol</a>
                        </li>
                                                <li class="">
                            <a href="numberformatter.settextattribute.php" title="setTextAttribute">setTextAttribute</a>
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
