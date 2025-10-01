<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: money_format - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.money-format.php">
 <link rel="shorturl" href="https://www.php.net/money-format">
 <link rel="alternate" href="https://www.php.net/money-format" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.metaphone.php">
 <link rel="next" href="https://www.php.net/manual/en/function.nl-langinfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.money-format.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.money-format.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.money-format.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.money-format.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.money-format.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.money-format.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.money-format.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.money-format.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.money-format.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.money-format.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.money-format.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Formats a number as a currency string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: money_format - Manual" />
<meta name="twitter:description" content="Formats a number as a currency string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: money_format - Manual" />
<meta itemprop="description" content="Formats a number as a currency string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Formats a number as a currency string" />

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
        <a href="function.nl-langinfo.php">
          nl_langinfo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.metaphone.php">
          &laquo; metaphone        </a>
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
            <option value='en/function.money-format.php' selected="selected">English</option>
            <option value='de/function.money-format.php'>German</option>
            <option value='es/function.money-format.php'>Spanish</option>
            <option value='fr/function.money-format.php'>French</option>
            <option value='it/function.money-format.php'>Italian</option>
            <option value='ja/function.money-format.php'>Japanese</option>
            <option value='pt_BR/function.money-format.php'>Brazilian Portuguese</option>
            <option value='ru/function.money-format.php'>Russian</option>
            <option value='tr/function.money-format.php'>Turkish</option>
            <option value='uk/function.money-format.php'>Ukrainian</option>
            <option value='zh/function.money-format.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.money-format" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">money_format</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">money_format</span> &mdash; <span class="dc-title">Formats a number as a currency string</span></p>

 </div>
 
 <div id="function.money-format-refsynopsisdiv">
   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 7.4.0, and <em>REMOVED</em> as of PHP 8.0.0. Relying on this function
is highly discouraged.</p></div>
 </div>
 
 <div class="refsect1 description" id="refsect1-function.money-format-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>money_format</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$number</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>money_format()</strong></span> returns a formatted version of
   <code class="parameter">number</code>.  This function wraps the C library
   function <span class="function"><strong>strfmon()</strong></span>, with the difference that
   this implementation converts only one number at a time.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.money-format-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">format</code></dt>
     <dd>
      <p class="para">
       The format specification consists of the following sequence:
       <ul class="itemizedlist">
        <li class="listitem"><p class="para">a <code class="literal">%</code> character</p></li>
        <li class="listitem"><p class="para">optional flags</p></li>
        <li class="listitem"><p class="para">optional field width</p></li>
        <li class="listitem"><p class="para">optional left precision</p></li>
        <li class="listitem"><p class="para">optional right precision</p></li>
        <li class="listitem"><p class="para">a required conversion character</p></li>
       </ul>
      </p>
      <p class="formalpara">
       <h5 class="title">Flags</h5>
       <p class="para">
       One or more of the optional flags below can be used:
        <dl>
         
          <dt><code class="literal">=</code><span class="replaceable">f</span></dt>
          <dd>
           <p class="para">
            The character <code class="literal">=</code> followed by a (single byte)
            character <span class="replaceable">f</span> to be used as the numeric fill
            character. The default fill character is space.
           </p>
          </dd>
         
         
          <dt><code class="literal">^</code></dt>
          <dd>
           <p class="para">
            Disable the use of grouping characters (as defined
            by the current locale).
           </p>
          </dd>
         
         
          <dt><code class="literal">+</code> or <code class="literal">(</code></dt>
          <dd>
           <p class="para">
            Specify the formatting style for positive and negative numbers.
            If <code class="literal">+</code> is used, the locale&#039;s equivalent for
            <code class="literal">+</code> and <code class="literal">-</code> will be used. If
            <code class="literal">(</code> is used, negative amounts are enclosed in
            parenthesis. If no specification is given, the default is
            <code class="literal">+</code>.
           </p>
          </dd>
         
         
          <dt><code class="literal">!</code></dt>
          <dd>
           <p class="para">
            Suppress the currency symbol from the output string.
           </p>
          </dd>
         
         
          <dt><code class="literal">-</code></dt>
          <dd>
           <p class="para">
            If present, it will make all fields left-justified (padded to the
            right), as opposed to the default which is for the fields to be
            right-justified (padded to the left).
           </p>
          </dd>
         
        </dl>
       </p>
      </p>
      <p class="formalpara">
       <h5 class="title">Field width</h5>
       <p class="para">
        <dl>
         
          <dt><span class="replaceable">w</span></dt>
          <dd>
           <p class="para">
            A decimal digit string specifying a minimum field width. Field will
            be right-justified unless the flag <code class="literal">-</code> is used.
            Default value is 0 (zero).
           </p>
          </dd>
         
        </dl>
       </p>
      </p>
      <p class="formalpara">
       <h5 class="title">Left precision</h5>
       <p class="para">
        <dl>
         
          <dt><code class="literal">#</code><span class="replaceable">n</span></dt>
          <dd>
           <p class="para">
            The maximum number of digits (<span class="replaceable">n</span>) expected
            to the left of the decimal character (e.g. the decimal point). It is
            used usually to keep formatted output aligned in the same columns,
            using the fill character if the number of digits is less than
            <span class="replaceable">n</span>. If the number of actual digits is
            bigger than <span class="replaceable">n</span>, then this specification is
            ignored.
           </p>
           <p class="para">
            If grouping has not been suppressed using the <code class="literal">^</code>
            flag, grouping separators will be inserted before the fill
            characters (if any) are added. Grouping separators will not be
            applied to fill characters, even if the fill character is a digit.
           </p>
           <p class="para">
            To ensure alignment, any characters appearing before or after the
            number in the formatted output such as currency or sign symbols are
            padded as necessary with space characters to make their positive and
            negative formats an equal length.
           </p>
          </dd>
         
        </dl>
       </p>
      </p>
      <p class="formalpara">
       <h5 class="title">
        Right precision
       </h5>
       <p class="para">
        <dl>
         
          <dt><code class="literal">.</code><span class="replaceable">p</span></dt>
          <dd>
           <p class="para">
            A period followed by the number of digits
            (<span class="replaceable">p</span>) after the decimal character. If the
            value of <span class="replaceable">p</span> is 0 (zero), the decimal
            character and the digits to its right will be omitted. If no right
            precision is included, the default will dictated by the current
            locale in use. The amount being formatted is rounded to the specified
            number of digits prior to formatting.
           </p>
          </dd>
         
        </dl>
       </p>
      </p>
      <p class="formalpara">
       <h5 class="title">
        Conversion characters
       </h5>
       <p class="para">
        <dl>
         
          <dt><code class="literal">i</code></dt>
          <dd>
           <p class="para">
            The number is formatted according to the locale&#039;s international
            currency format (e.g. for the USA locale: USD 1,234.56).
           </p>
          </dd>
         
         
          <dt><code class="literal">n</code></dt>
          <dd>
           <p class="para">
            The number is formatted according to the locale&#039;s national
            currency format (e.g. for the de_DE locale: EU1.234,56).
           </p>
          </dd>
         
         
          <dt><code class="literal">%</code></dt>
          <dd>
           <p class="para">
            Returns the <code class="literal">%</code> character.
           </p>
          </dd>
         
        </dl>
       </p>
      </p>
     </dd>
    
    
     <dt><code class="parameter">number</code></dt>
     <dd>
      <p class="para">
       The number to be formatted.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.money-format-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the formatted string. Characters before and after the formatting
   string will be returned unchanged.
   Non-numeric <code class="parameter">number</code> causes returning <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> and
   emitting <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.money-format-changelog">
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
       <td>8.0.0</td>
       <td>
        Removed this function.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        Deprecated this function. Instead, 
        use <span class="methodname"><a href="numberformatter.formatcurrency.php" class="methodname">NumberFormatter::formatCurrency()</a></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.money-format-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5090">
    <p><strong>Example #1 <span class="function"><strong>money_format()</strong></span> Example</strong></p>
    <div class="example-contents"><p>
     We will use different locales and format specifications to
     illustrate the use of this function.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$number </span><span style="color: #007700">= </span><span style="color: #0000BB">1234.56</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// let's print the international format for the en_US locale<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_MONETARY</span><span style="color: #007700">, </span><span style="color: #DD0000">'en_US'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">money_format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%i'</span><span style="color: #007700">, </span><span style="color: #0000BB">$number</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// USD 1,234.56<br /><br />// Italian national format with 2 decimals`<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_MONETARY</span><span style="color: #007700">, </span><span style="color: #DD0000">'it_IT'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">money_format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.2n'</span><span style="color: #007700">, </span><span style="color: #0000BB">$number</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Eu 1.234,56<br /><br />// Using a negative number<br /></span><span style="color: #0000BB">$number </span><span style="color: #007700">= -</span><span style="color: #0000BB">1234.5672</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// US national format, using () for negative numbers<br />// and 10 digits for left precision<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_MONETARY</span><span style="color: #007700">, </span><span style="color: #DD0000">'en_US'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">money_format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%(#10n'</span><span style="color: #007700">, </span><span style="color: #0000BB">$number</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// ($        1,234.57)<br /><br />// Similar format as above, adding the use of 2 digits of right<br />// precision and '*' as a fill character<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">money_format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%=*(#10.2n'</span><span style="color: #007700">, </span><span style="color: #0000BB">$number</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// ($********1,234.57)<br /><br />// Let's justify to the left, with 14 positions of width, 8 digits of<br />// left precision, 2 of right precision, without the grouping character<br />// and using the international format for the de_DE locale.<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_MONETARY</span><span style="color: #007700">, </span><span style="color: #DD0000">'de_DE'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">money_format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%=*^-14#8.2i'</span><span style="color: #007700">, </span><span style="color: #0000BB">1234.56</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Eu 1234,56****<br /><br />// Let's add some blurb before and after the conversion specification<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_MONETARY</span><span style="color: #007700">, </span><span style="color: #DD0000">'en_GB'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= </span><span style="color: #DD0000">'The final value is %i (after a 10%% discount)'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">money_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1234.56</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// The final value is  GBP 1,234.56 (after a 10% discount)<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.money-format-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The function <span class="function"><strong>money_format()</strong></span> is only defined if
    the system has strfmon capabilities.  For example, Windows does
    not, so <span class="function"><strong>money_format()</strong></span> is undefined in Windows.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The <strong><code><a href="string.constants.php#constant.lc-monetary">LC_MONETARY</a></code></strong> category of the locale settings,
    affects the behavior of this function. Use <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>
    to set to the appropriate default locale before using this function.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.money-format-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.setlocale.php" class="function" rel="rdfs-seeAlso">setlocale()</a> - Set locale information</span></li>
    <li><span class="function"><a href="function.sscanf.php" class="function" rel="rdfs-seeAlso">sscanf()</a> - Parses input from a string according to a format</span></li>
    <li><span class="function"><a href="function.sprintf.php" class="function" rel="rdfs-seeAlso">sprintf()</a> - Return a formatted string</span></li>
    <li><span class="function"><a href="function.printf.php" class="function" rel="rdfs-seeAlso">printf()</a> - Output a formatted string</span></li>
    <li><span class="function"><a href="function.number-format.php" class="function" rel="rdfs-seeAlso">number_format()</a> - Format a number with grouped thousands</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/money-format.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.money-format%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.money-format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.money-format.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116725">  <div class="votes">
    <div id="Vu116725">
    <a href="/manual/vote-note.php?id=116725&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116725">
    <a href="/manual/vote-note.php?id=116725&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116725" title="70% like this...">
    69
    </div>
  </div>
  <a href="#116725" class="name">
  <strong class="user"><em>tim</em></strong></a><a class="genanchor" href="#116725"> &para;</a><div class="date" title="2015-02-19 10:21"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116725">
<div class="phpcode"><code><span class="html">For most of us in the US, we don't want to see a "USD" for our currency symbol, so '%i' doesn't cut it.  Here's what I used that worked to get what most  people expect to see for a number format.<br /><br />$number = 123.4<br />setlocale(LC_MONETARY, 'en_US.UTF-8');<br />money_format('%.2n', $number);<br /><br />output:<br />$123.40<br /><br />That gives me a dollar sign at the beginning, and 2 digits at the end.</span></code></div>
  </div>
 </div>
  <div class="note" id="89060">  <div class="votes">
    <div id="Vu89060">
    <a href="/manual/vote-note.php?id=89060&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89060">
    <a href="/manual/vote-note.php?id=89060&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89060" title="67% like this...">
    39
    </div>
  </div>
  <a href="#89060" class="name">
  <strong class="user"><em>Rafael M. Salvioni</em></strong></a><a class="genanchor" href="#89060"> &para;</a><div class="date" title="2009-02-19 12:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89060">
<div class="phpcode"><code><span class="html">This is a some function posted before, however various bugs were corrected.
<br />
<br />Thank you to Stuart Roe by reporting the bug on printing signals.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br />That it is an implementation of the function money_format for the
<br />platforms that do not it bear.  
<br />
<br />The function accepts to same string of format accepts for the
<br />original function of the PHP.  
<br />
<br />(Sorry. my writing in English is very bad)  
<br />
<br />The function is tested using PHP 5.1.4 in Windows XP
<br />and Apache WebServer.
<br />*/
<br /></span><span class="keyword">function </span><span class="default">money_format</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">$number</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$regex  </span><span class="keyword">= </span><span class="string">'/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'</span><span class="keyword">.
<br />              </span><span class="string">'(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/'</span><span class="keyword">;
<br />    if (</span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_MONETARY</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">) == </span><span class="string">'C'</span><span class="keyword">) {
<br />        </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_MONETARY</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$locale </span><span class="keyword">= </span><span class="default">localeconv</span><span class="keyword">();
<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$regex</span><span class="keyword">, </span><span class="default">$format</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_SET_ORDER</span><span class="keyword">);
<br />    foreach (</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$fmatch</span><span class="keyword">) {
<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">);
<br />        </span><span class="default">$flags </span><span class="keyword">= array(
<br />            </span><span class="string">'fillchar'  </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\=(.)/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">) ?
<br />                           </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="string">' '</span><span class="keyword">,
<br />            </span><span class="string">'nogroup'   </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\^/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">,
<br />            </span><span class="string">'usesignal' </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\+|\(/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">) ?
<br />                           </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] : </span><span class="string">'+'</span><span class="keyword">,
<br />            </span><span class="string">'nosimbol'  </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\!/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">,
<br />            </span><span class="string">'isleft'    </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\-/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &gt; </span><span class="default">0
<br />        </span><span class="keyword">);
<br />        </span><span class="default">$width      </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) ? (int)</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] : </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$left       </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) ? (int)</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] : </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$right      </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]) ? (int)</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] : </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'int_frac_digits'</span><span class="keyword">];
<br />        </span><span class="default">$conversion </span><span class="keyword">= </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];
<br />
<br />        </span><span class="default">$positive </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />        if (</span><span class="default">$value </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {
<br />            </span><span class="default">$positive </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />            </span><span class="default">$value  </span><span class="keyword">*= -</span><span class="default">1</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$letter </span><span class="keyword">= </span><span class="default">$positive </span><span class="keyword">? </span><span class="string">'p' </span><span class="keyword">: </span><span class="string">'n'</span><span class="keyword">;
<br />
<br />        </span><span class="default">$prefix </span><span class="keyword">= </span><span class="default">$suffix </span><span class="keyword">= </span><span class="default">$cprefix </span><span class="keyword">= </span><span class="default">$csuffix </span><span class="keyword">= </span><span class="default">$signal </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br />        </span><span class="default">$signal </span><span class="keyword">= </span><span class="default">$positive </span><span class="keyword">? </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'positive_sign'</span><span class="keyword">] : </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'negative_sign'</span><span class="keyword">];
<br />        switch (</span><span class="default">true</span><span class="keyword">) {
<br />            case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">1 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:
<br />                </span><span class="default">$prefix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:
<br />                </span><span class="default">$suffix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">3 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:
<br />                </span><span class="default">$cprefix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">4 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:
<br />                </span><span class="default">$csuffix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'('</span><span class="keyword">:
<br />            case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">0</span><span class="keyword">:
<br />                </span><span class="default">$prefix </span><span class="keyword">= </span><span class="string">'('</span><span class="keyword">;
<br />                </span><span class="default">$suffix </span><span class="keyword">= </span><span class="string">')'</span><span class="keyword">;
<br />                break;
<br />        }
<br />        if (!</span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'nosimbol'</span><span class="keyword">]) {
<br />            </span><span class="default">$currency </span><span class="keyword">= </span><span class="default">$cprefix </span><span class="keyword">.
<br />                        (</span><span class="default">$conversion </span><span class="keyword">== </span><span class="string">'i' </span><span class="keyword">? </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'int_curr_symbol'</span><span class="keyword">] : </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'currency_symbol'</span><span class="keyword">]) .
<br />                        </span><span class="default">$csuffix</span><span class="keyword">;
<br />        } else {
<br />            </span><span class="default">$currency </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$space  </span><span class="keyword">= </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sep_by_space"</span><span class="keyword">] ? </span><span class="string">' ' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">;
<br />
<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_decimal_point'</span><span class="keyword">],
<br />                 </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'nogroup'</span><span class="keyword">] ? </span><span class="string">'' </span><span class="keyword">: </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_thousands_sep'</span><span class="keyword">]);
<br />        </span><span class="default">$value </span><span class="keyword">= @</span><span class="default">explode</span><span class="keyword">(</span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_decimal_point'</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">);
<br />
<br />        </span><span class="default">$n </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$prefix</span><span class="keyword">) + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$currency</span><span class="keyword">) + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />        if (</span><span class="default">$left </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$left </span><span class="keyword">&gt; </span><span class="default">$n</span><span class="keyword">) {
<br />            </span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'fillchar'</span><span class="keyword">], </span><span class="default">$left </span><span class="keyword">- </span><span class="default">$n</span><span class="keyword">) . </span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />        }
<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_decimal_point'</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">);
<br />        if (</span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_cs_precedes"</span><span class="keyword">]) {
<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$prefix </span><span class="keyword">. </span><span class="default">$currency </span><span class="keyword">. </span><span class="default">$space </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="default">$suffix</span><span class="keyword">;
<br />        } else {
<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$prefix </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="default">$space </span><span class="keyword">. </span><span class="default">$currency </span><span class="keyword">. </span><span class="default">$suffix</span><span class="keyword">;
<br />        }
<br />        if (</span><span class="default">$width </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {
<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'fillchar'</span><span class="keyword">], </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'isleft'</span><span class="keyword">] ?
<br />                     </span><span class="default">STR_PAD_RIGHT </span><span class="keyword">: </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);
<br />        }
<br />
<br />        </span><span class="default">$format </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$format</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$format</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114074">  <div class="votes">
    <div id="Vu114074">
    <a href="/manual/vote-note.php?id=114074&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114074">
    <a href="/manual/vote-note.php?id=114074&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114074" title="76% like this...">
    22
    </div>
  </div>
  <a href="#114074" class="name">
  <strong class="user"><em>todoventas at xarxa-cat dot net</em></strong></a><a class="genanchor" href="#114074"> &para;</a><div class="date" title="2014-01-09 03:27"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114074">
<div class="phpcode"><code><span class="html">In Rafael M. Salvioni function localeconv(); returns an invalid array in my Windows XP SP3 running PHP 5.4.13 so to prevent the Warning Message: implode(): Invalid arguments passed i just add the $locale manually. For other languages just fill the array with the correct settings.<br /><br />&lt;?<br /><br />       $locale = array(<br />        'decimal_point'        =&gt; '.',<br />        'thousands_sep'        =&gt; '',<br />        'int_curr_symbol'    =&gt; 'EUR',<br />        'currency_symbol'    =&gt; '€',<br />        'mon_decimal_point'    =&gt; ',',<br />        'mon_thousands_sep'    =&gt; '.',<br />        'positive_sign'        =&gt; '',<br />        'negative_sign'     =&gt; '-',<br />        'int_frac_digits'    =&gt; 2,<br />        'frac_digits'        =&gt; 2,<br />        'p_cs_precedes'        =&gt; 0,<br />        'p_sep_by_space'    =&gt; 1,<br />        'p_sign_posn'        =&gt; 1,<br />        'n_sign_posn'        =&gt; 1,<br />        'grouping'            =&gt; array(),<br />        'mon_grouping'        =&gt; array(0 =&gt; 3, 1 =&gt; 3)<br />        <br />    );<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="86039">  <div class="votes">
    <div id="Vu86039">
    <a href="/manual/vote-note.php?id=86039&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86039">
    <a href="/manual/vote-note.php?id=86039&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86039" title="64% like this...">
    17
    </div>
  </div>
  <a href="#86039" class="name">
  <strong class="user"><em>jeremy</em></strong></a><a class="genanchor" href="#86039"> &para;</a><div class="date" title="2008-09-30 10:41"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86039">
<div class="phpcode"><code><span class="html">If money_format doesn't seem to be working properly, make sure you are defining a valid locale.  For example, on Debian, 'en_US' is not a valid locale - you need 'en_US.UTF-8' or 'en_US.ISO-8559-1'.<br /><br />This was frustrating me for a while.  Debian has a list of valid locales at /usr/share/i18n/SUPPORTED; find yours there if it's not working properly.</span></code></div>
  </div>
 </div>
  <div class="note" id="112890">  <div class="votes">
    <div id="Vu112890">
    <a href="/manual/vote-note.php?id=112890&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112890">
    <a href="/manual/vote-note.php?id=112890&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112890" title="63% like this...">
    10
    </div>
  </div>
  <a href="#112890" class="name">
  <strong class="user"><em>jsb17NO at SPAMcornell dot edu</em></strong></a><a class="genanchor" href="#112890"> &para;</a><div class="date" title="2013-08-02 08:10"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112890">
<div class="phpcode"><code><span class="html">To drop zero value decimals, use the following:<br /><span class="default">&lt;?php<br />    </span><span class="comment">/*<br />        Same as php number_format(), but if ends in .0, .00, .000, etc... , drops the decimals altogether<br />        Returns string type, rounded number - same as php number_format()):<br />        Examples:<br />            number_format_drop_zero_decimals(54.378, 2) ==&gt; '54.38'<br />            number_format_drop_zero_decimals(54.00, 2) ==&gt; '54'<br />     */<br />    </span><span class="keyword">function </span><span class="default">number_format_drop_zero_decimals</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$n_decimals</span><span class="keyword">)<br />    {<br />        return ((</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) == </span><span class="default">round</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$n_decimals</span><span class="keyword">)) ? </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) : </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$n_decimals</span><span class="keyword">));<br />    }<br /></span><span class="default">?&gt;<br /></span>Results:<br />number_format_drop_zero_decimals(54.377, 2) ==&gt; 54.38<br />number_format_drop_zero_decimals('54.377', 2) ==&gt; 54.38<br />number_format_drop_zero_decimals(54.377, 3) ==&gt; 54.377<br />number_format_drop_zero_decimals(54.007, 2) ==&gt; 54.01<br />number_format_drop_zero_decimals(54.000, 2) ==&gt; 54<br />number_format_drop_zero_decimals(54.00, 2) ==&gt; 54<br />number_format_drop_zero_decimals(54.0, 2) ==&gt; 54<br />number_format_drop_zero_decimals(54.1, 2) ==&gt; 54.10<br />number_format_drop_zero_decimals(54., 2) ==&gt; 54<br />number_format_drop_zero_decimals(54, 2) ==&gt; 54<br />number_format_drop_zero_decimals(54, 3) ==&gt; 54<br />number_format_drop_zero_decimals(54 + .13, 2) ==&gt; 54.13<br />number_format_drop_zero_decimals(54 + .00, 2) ==&gt; 54<br />number_format_drop_zero_decimals(54.0007, 4) ==&gt; 54.0007<br />number_format_drop_zero_decimals(54.0007, 3) ==&gt; 54.001<br />number_format_drop_zero_decimals(54.00007, 3) ==&gt; 54  //  take notice</span></code></div>
  </div>
 </div>
  <div class="note" id="109762">  <div class="votes">
    <div id="Vu109762">
    <a href="/manual/vote-note.php?id=109762&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109762">
    <a href="/manual/vote-note.php?id=109762&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109762" title="62% like this...">
    9
    </div>
  </div>
  <a href="#109762" class="name">
  <strong class="user"><em>~B</em></strong></a><a class="genanchor" href="#109762"> &para;</a><div class="date" title="2012-08-17 04:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109762">
<div class="phpcode"><code><span class="html">We found that after switching from Ubuntu 10.04 php -v 5.3.2, to Ubuntu 12.04 php -v 5.3.10 this no longer worked:
<br />
<br /><span class="default">&lt;?php setlocale</span><span class="keyword">(</span><span class="default">LC_MONETARY</span><span class="keyword">, </span><span class="string">'en_US'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />Found that using:
<br />
<br /><span class="default">&lt;?php setlocale</span><span class="keyword">(</span><span class="default">LC_MONETARY</span><span class="keyword">, </span><span class="string">'en_US.UTF-8'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />worked find</span></code></div>
  </div>
 </div>
  <div class="note" id="98783">  <div class="votes">
    <div id="Vu98783">
    <a href="/manual/vote-note.php?id=98783&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98783">
    <a href="/manual/vote-note.php?id=98783&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98783" title="57% like this...">
    7
    </div>
  </div>
  <a href="#98783" class="name">
  <strong class="user"><em>andrey.dobrozhanskiy [-a-t-] gmail com</em></strong></a><a class="genanchor" href="#98783"> &para;</a><div class="date" title="2010-07-07 09:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98783">
<div class="phpcode"><code><span class="html">This function divides integer value by commas. F.e.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="default">formatMoney</span><span class="keyword">(</span><span class="default">1050</span><span class="keyword">); </span><span class="comment"># 1,050
<br /></span><span class="keyword">echo </span><span class="default">formatMoney</span><span class="keyword">(</span><span class="default">1321435.4</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment"># 1,321,435.40
<br /></span><span class="keyword">echo </span><span class="default">formatMoney</span><span class="keyword">(</span><span class="default">10059240.42941</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment"># 10,059,240.43
<br /></span><span class="keyword">echo </span><span class="default">formatMoney</span><span class="keyword">(</span><span class="default">13245</span><span class="keyword">); </span><span class="comment"># 13,245
<br />
<br /></span><span class="keyword">function </span><span class="default">formatMoney</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$fractional</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {
<br />    if (</span><span class="default">$fractional</span><span class="keyword">) {
<br />        </span><span class="default">$number </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%.2f'</span><span class="keyword">, </span><span class="default">$number</span><span class="keyword">);
<br />    }
<br />    while (</span><span class="default">true</span><span class="keyword">) { 
<br />        </span><span class="default">$replaced </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/(-?\d+)(\d\d\d)/'</span><span class="keyword">, </span><span class="string">'$1,$2'</span><span class="keyword">, </span><span class="default">$number</span><span class="keyword">);
<br />        if (</span><span class="default">$replaced </span><span class="keyword">!= </span><span class="default">$number</span><span class="keyword">) {
<br />            </span><span class="default">$number </span><span class="keyword">= </span><span class="default">$replaced</span><span class="keyword">;
<br />        } else {
<br />            break;
<br />        }
<br />    }
<br />    return </span><span class="default">$number</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119530">  <div class="votes">
    <div id="Vu119530">
    <a href="/manual/vote-note.php?id=119530&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119530">
    <a href="/manual/vote-note.php?id=119530&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119530" title="58% like this...">
    3
    </div>
  </div>
  <a href="#119530" class="name">
  <strong class="user"><em>Felix Duterloo</em></strong></a><a class="genanchor" href="#119530"> &para;</a><div class="date" title="2016-06-30 12:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119530">
<div class="phpcode"><code><span class="html">Improvement to Rafael M. Salvioni's solution for money_format on Windows: when no currency symbol is selected, in the formatting, the minus sign was also lost when the locale puts it in position 3 or 4. Changed $currency = '';  to: $currency = $cprefix .$csuffix;<br /><br />function money_format($format, $number) {<br />        $regex = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?' .<br />                '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/';<br />        if (setlocale(LC_MONETARY, 0) == 'C') {<br />            setlocale(LC_MONETARY, '');<br />        }<br />        $locale = localeconv();<br />        preg_match_all($regex, $format, $matches, PREG_SET_ORDER);<br />        foreach ($matches as $fmatch) {<br />            $value = floatval($number);<br />            $flags = array(<br />                'fillchar' =&gt; preg_match('/\=(.)/', $fmatch[1], $match) ?<br />                        $match[1] : ' ',<br />                'nogroup' =&gt; preg_match('/\^/', $fmatch[1]) &gt; 0,<br />                'usesignal' =&gt; preg_match('/\+|\(/', $fmatch[1], $match) ?<br />                        $match[0] : '+',<br />                'nosimbol' =&gt; preg_match('/\!/', $fmatch[1]) &gt; 0,<br />                'isleft' =&gt; preg_match('/\-/', $fmatch[1]) &gt; 0<br />            );<br />            $width = trim($fmatch[2]) ? (int) $fmatch[2] : 0;<br />            $left = trim($fmatch[3]) ? (int) $fmatch[3] : 0;<br />            $right = trim($fmatch[4]) ? (int) $fmatch[4] : $locale['int_frac_digits'];<br />            $conversion = $fmatch[5];<br /><br />            $positive = true;<br />            if ($value &lt; 0) {<br />                $positive = false;<br />                $value *= -1;<br />            }<br />            $letter = $positive ? 'p' : 'n';<br /><br />            $prefix = $suffix = $cprefix = $csuffix = $signal = '';<br /><br />            $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign'];<br />            switch (true) {<br />                case $locale["{$letter}_sign_posn"] == 1 &amp;&amp; $flags['usesignal'] == '+':<br />                    $prefix = $signal;<br />                    break;<br />                case $locale["{$letter}_sign_posn"] == 2 &amp;&amp; $flags['usesignal'] == '+':<br />                    $suffix = $signal;<br />                    break;<br />                case $locale["{$letter}_sign_posn"] == 3 &amp;&amp; $flags['usesignal'] == '+':<br />                    $cprefix = $signal;<br />                    break;<br />                case $locale["{$letter}_sign_posn"] == 4 &amp;&amp; $flags['usesignal'] == '+':<br />                    $csuffix = $signal;<br />                    break;<br />                case $flags['usesignal'] == '(':<br />                case $locale["{$letter}_sign_posn"] == 0:<br />                    $prefix = '(';<br />                    $suffix = ')';<br />                    break;<br />            }<br />            if (!$flags['nosimbol']) {<br />                $currency = $cprefix .<br />                        ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) .<br />                        $csuffix;<br />            } else {<br />                $currency = $cprefix .$csuffix;<br />            }<br />            $space = $locale["{$letter}_sep_by_space"] ? ' ' : '';<br /><br />            $value = number_format($value, $right, $locale['mon_decimal_point'], $flags['nogroup'] ? '' : $locale['mon_thousands_sep']);<br />            $value = @explode($locale['mon_decimal_point'], $value);<br /><br />            $n = strlen($prefix) + strlen($currency) + strlen($value[0]);<br />            if ($left &gt; 0 &amp;&amp; $left &gt; $n) {<br />                $value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0];<br />            }<br />            $value = implode($locale['mon_decimal_point'], $value);<br />            if ($locale["{$letter}_cs_precedes"]) {<br />                $value = $prefix . $currency . $space . $value . $suffix;<br />            } else {<br />                $value = $prefix . $value . $space . $currency . $suffix;<br />            }<br />            if ($width &gt; 0) {<br />                $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ?<br />                                STR_PAD_RIGHT : STR_PAD_LEFT);<br />            }<br /><br />            $format = str_replace($fmatch[0], $value, $format);<br />        }<br />        return $format;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="62024">  <div class="votes">
    <div id="Vu62024">
    <a href="/manual/vote-note.php?id=62024&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62024">
    <a href="/manual/vote-note.php?id=62024&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62024" title="57% like this...">
    4
    </div>
  </div>
  <a href="#62024" class="name">
  <strong class="user"><em>richard dot selby at uk dot clara dot net</em></strong></a><a class="genanchor" href="#62024"> &para;</a><div class="date" title="2006-02-17 07:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62024">
<div class="phpcode"><code><span class="html">Double check that money_format() is defined on any version of PHP you plan your code to run on.  You might be surprised.<br /><br />For example, it worked on my Linux box where I code, but not on  servers running  BSD 4.11 variants. (This is presumably because strfmon  is not defined - see note at the top of teis page). It's not just a windows/unix issue.</span></code></div>
  </div>
 </div>
  <div class="note" id="128946">  <div class="votes">
    <div id="Vu128946">
    <a href="/manual/vote-note.php?id=128946&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128946">
    <a href="/manual/vote-note.php?id=128946&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128946" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128946" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#128946"> &para;</a><div class="date" title="2023-10-12 05:03"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128946">
<div class="phpcode"><code><span class="html">Rafael M. Salvioni's code has a small bug in it when the value is positive and the format provided contains a ( flag.  The value should only be surrounded in parenthesis when the value is negative.  This should fix it:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'money_format'</span><span class="keyword">))<br />    {<br />        function </span><span class="default">money_format</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">$number</span><span class="keyword">)<br />        {<br />            </span><span class="default">$regex  </span><span class="keyword">= </span><span class="string">'/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'</span><span class="keyword">.<br />                    </span><span class="string">'(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/'</span><span class="keyword">;<br />            if (</span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_MONETARY</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">) == </span><span class="string">'C'</span><span class="keyword">) {<br />                </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_MONETARY</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br />            }<br />            </span><span class="default">$locale </span><span class="keyword">= </span><span class="default">localeconv</span><span class="keyword">();<br />            </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$regex</span><span class="keyword">, </span><span class="default">$format</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_SET_ORDER</span><span class="keyword">);<br />            foreach (</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$fmatch</span><span class="keyword">) {<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">);<br />                </span><span class="default">$flags </span><span class="keyword">= array(<br />                    </span><span class="string">'fillchar'  </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\=(.)/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">) ?<br />                                </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="string">' '</span><span class="keyword">,<br />                    </span><span class="string">'nogroup'   </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\^/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">,<br />                    </span><span class="string">'usesignal' </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\+|\(/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">) ?<br />                                </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] : </span><span class="string">'+'</span><span class="keyword">,<br />                    </span><span class="string">'nosimbol'  </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\!/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">,<br />                    </span><span class="string">'isleft'    </span><span class="keyword">=&gt; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\-/'</span><span class="keyword">, </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &gt; </span><span class="default">0<br />                </span><span class="keyword">);<br />                </span><span class="default">$width      </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) ? (int)</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] : </span><span class="default">0</span><span class="keyword">;<br />                </span><span class="default">$left       </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) ? (int)</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] : </span><span class="default">0</span><span class="keyword">;<br />                </span><span class="default">$right      </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]) ? (int)</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] : </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'int_frac_digits'</span><span class="keyword">];<br />                </span><span class="default">$conversion </span><span class="keyword">= </span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];<br />        <br />                </span><span class="default">$positive </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                if (</span><span class="default">$value </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />                    </span><span class="default">$positive </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                    </span><span class="default">$value  </span><span class="keyword">*= -</span><span class="default">1</span><span class="keyword">;<br />                }<br />                </span><span class="default">$letter </span><span class="keyword">= </span><span class="default">$positive </span><span class="keyword">? </span><span class="string">'p' </span><span class="keyword">: </span><span class="string">'n'</span><span class="keyword">;<br />        <br />                </span><span class="default">$prefix </span><span class="keyword">= </span><span class="default">$suffix </span><span class="keyword">= </span><span class="default">$cprefix </span><span class="keyword">= </span><span class="default">$csuffix </span><span class="keyword">= </span><span class="default">$signal </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        <br />                </span><span class="default">$signal </span><span class="keyword">= </span><span class="default">$positive </span><span class="keyword">? </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'positive_sign'</span><span class="keyword">] : </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'negative_sign'</span><span class="keyword">];<br />                switch (</span><span class="default">true</span><span class="keyword">) {<br />                    case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">1 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:<br />                        </span><span class="default">$prefix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;<br />                        break;<br />                    case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:<br />                        </span><span class="default">$suffix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;<br />                        break;<br />                    case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">3 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:<br />                        </span><span class="default">$cprefix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;<br />                        break;<br />                    case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">4 </span><span class="keyword">&amp;&amp; </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'+'</span><span class="keyword">:<br />                        </span><span class="default">$csuffix </span><span class="keyword">= </span><span class="default">$signal</span><span class="keyword">;<br />                        break;<br />                    case </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'usesignal'</span><span class="keyword">] == </span><span class="string">'(' </span><span class="keyword">&amp;&amp; !</span><span class="default">$positive</span><span class="keyword">:<br />                    case </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sign_posn"</span><span class="keyword">] == </span><span class="default">0</span><span class="keyword">:<br />                        </span><span class="default">$prefix </span><span class="keyword">= </span><span class="string">'('</span><span class="keyword">;<br />                        </span><span class="default">$suffix </span><span class="keyword">= </span><span class="string">')'</span><span class="keyword">;<br />                        break;<br />                }<br />                if (!</span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'nosimbol'</span><span class="keyword">]) {<br />                    </span><span class="default">$currency </span><span class="keyword">= </span><span class="default">$cprefix </span><span class="keyword">.<br />                                (</span><span class="default">$conversion </span><span class="keyword">== </span><span class="string">'i' </span><span class="keyword">? </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'int_curr_symbol'</span><span class="keyword">] : </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'currency_symbol'</span><span class="keyword">]) .<br />                                </span><span class="default">$csuffix</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$currency </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                }<br />                </span><span class="default">$space  </span><span class="keyword">= </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_sep_by_space"</span><span class="keyword">] ? </span><span class="string">' ' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">;<br />        <br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_decimal_point'</span><span class="keyword">],<br />                        </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'nogroup'</span><span class="keyword">] ? </span><span class="string">'' </span><span class="keyword">: </span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_thousands_sep'</span><span class="keyword">]);<br />                </span><span class="default">$value </span><span class="keyword">= @</span><span class="default">explode</span><span class="keyword">(</span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_decimal_point'</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">);<br />        <br />                </span><span class="default">$n </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$prefix</span><span class="keyword">) + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$currency</span><span class="keyword">) + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />                if (</span><span class="default">$left </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$left </span><span class="keyword">&gt; </span><span class="default">$n</span><span class="keyword">) {<br />                    </span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'fillchar'</span><span class="keyword">], </span><span class="default">$left </span><span class="keyword">- </span><span class="default">$n</span><span class="keyword">) . </span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                }<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$locale</span><span class="keyword">[</span><span class="string">'mon_decimal_point'</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">);<br />                if (</span><span class="default">$locale</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$letter</span><span class="keyword">}</span><span class="string">_cs_precedes"</span><span class="keyword">]) {<br />                    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$prefix </span><span class="keyword">. </span><span class="default">$currency </span><span class="keyword">. </span><span class="default">$space </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="default">$suffix</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$prefix </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="default">$space </span><span class="keyword">. </span><span class="default">$currency </span><span class="keyword">. </span><span class="default">$suffix</span><span class="keyword">;<br />                }<br />                if (</span><span class="default">$width </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />                    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'fillchar'</span><span class="keyword">], </span><span class="default">$flags</span><span class="keyword">[</span><span class="string">'isleft'</span><span class="keyword">] ?<br />                            </span><span class="default">STR_PAD_RIGHT </span><span class="keyword">: </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />                }<br />        <br />                </span><span class="default">$format </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$fmatch</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$format</span><span class="keyword">);<br />            }<br />            return </span><span class="default">$format</span><span class="keyword">;<br />        }    <br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84634">  <div class="votes">
    <div id="Vu84634">
    <a href="/manual/vote-note.php?id=84634&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84634">
    <a href="/manual/vote-note.php?id=84634&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84634" title="51% like this...">
    1
    </div>
  </div>
  <a href="#84634" class="name">
  <strong class="user"><em>swapnet</em></strong></a><a class="genanchor" href="#84634"> &para;</a><div class="date" title="2008-07-22 08:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84634">
<div class="phpcode"><code><span class="html">Consider formatting currency for some South Asian countries that use ##,##,###.## money format.
<br />The following code generates something like Rs. 4,54,234.00 and so on.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">convertcash</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">$currency</span><span class="keyword">){
<br />    if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">)&gt;</span><span class="default">3</span><span class="keyword">){
<br />            </span><span class="default">$lastthree </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">)-</span><span class="default">3</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">));
<br />            </span><span class="default">$restunits </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">)-</span><span class="default">3</span><span class="keyword">); </span><span class="comment">// extracts the last three digits
<br />            </span><span class="default">$restunits </span><span class="keyword">= (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$restunits</span><span class="keyword">)%</span><span class="default">2 </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">)?</span><span class="string">"0"</span><span class="keyword">.</span><span class="default">$restunits</span><span class="keyword">:</span><span class="default">$restunits</span><span class="keyword">; </span><span class="comment">// explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
<br />
<br />            </span><span class="default">$expunit </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$restunits</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);
<br />            for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$expunit</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++){
<br />                </span><span class="default">$explrestunits </span><span class="keyword">.= (int)</span><span class="default">$expunit</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="string">","</span><span class="keyword">; </span><span class="comment">// creates each of the 2's group and adds a comma to the end
<br />            </span><span class="keyword">}    
<br />
<br />            </span><span class="default">$thecash </span><span class="keyword">= </span><span class="default">$explrestunits</span><span class="keyword">.</span><span class="default">$lastthree</span><span class="keyword">;
<br />    } else {
<br />           </span><span class="default">$thecash </span><span class="keyword">= </span><span class="default">$convertnum</span><span class="keyword">;
<br />    }
<br />    
<br />    return </span><span class="default">$currency</span><span class="keyword">.</span><span class="default">$thecash</span><span class="keyword">.</span><span class="string">".00"</span><span class="keyword">; </span><span class="comment">// writes the final format where $currency is the currency symbol.
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>
<br />now call the function as  convertcash($row['price'], 'Rs '); // that's the price from the database I called using an Indian Rupees prefix where the price has to be a plain number format, say something like 454234.</span></code></div>
  </div>
 </div>
  <div class="note" id="115202">  <div class="votes">
    <div id="Vu115202">
    <a href="/manual/vote-note.php?id=115202&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115202">
    <a href="/manual/vote-note.php?id=115202&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115202" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115202" class="name">
  <strong class="user"><em>kaigillmann at googlemail dot com</em></strong></a><a class="genanchor" href="#115202"> &para;</a><div class="date" title="2014-06-12 07:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115202">
<div class="phpcode"><code><span class="html">If you get "EUR" instead of the euro symbol, set the locale to utf8 charset like this:<br /><br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_MONETARY</span><span class="keyword">, </span><span class="string">'de_DE.utf8'</span><span class="keyword">);<br />echo </span><span class="default">money_format</span><span class="keyword">(</span><span class="string">'%+n'</span><span class="keyword">, </span><span class="default">1234.56</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105961">  <div class="votes">
    <div id="Vu105961">
    <a href="/manual/vote-note.php?id=105961&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105961">
    <a href="/manual/vote-note.php?id=105961&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105961" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105961" class="name">
  <strong class="user"><em>phpdeveloperbalaji at gmail dot com</em></strong></a><a class="genanchor" href="#105961"> &para;</a><div class="date" title="2011-09-28 01:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105961">
<div class="phpcode"><code><span class="html">Hi,
<br />
<br />For South Asian Currencies, this function could be a handy one.
<br />
<br />It will handle negative as well as float(Paise).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">my_money_format</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">)
<br />{
<br />    if(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">,</span><span class="string">"-"</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">$number </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"-"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$number</span><span class="keyword">);
<br />        </span><span class="default">$negative </span><span class="keyword">= </span><span class="string">"-"</span><span class="keyword">;
<br />    }
<br />    
<br />    </span><span class="default">$split_number </span><span class="keyword">= @</span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$number</span><span class="keyword">);
<br />    
<br />    </span><span class="default">$rupee </span><span class="keyword">= </span><span class="default">$split_number</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />    </span><span class="default">$paise </span><span class="keyword">= @</span><span class="default">$split_number</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />    
<br />    if(@</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$rupee</span><span class="keyword">)&gt;</span><span class="default">3</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$hundreds </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$rupee</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$rupee</span><span class="keyword">)-</span><span class="default">3</span><span class="keyword">);
<br />        </span><span class="default">$thousands_in_reverse </span><span class="keyword">= </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$rupee</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$rupee</span><span class="keyword">)-</span><span class="default">3</span><span class="keyword">));
<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$thousands_in_reverse</span><span class="keyword">)); </span><span class="default">$i</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$thousands </span><span class="keyword">.= </span><span class="default">$thousands_in_reverse</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="default">$thousands_in_reverse</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">].</span><span class="string">","</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$thousands </span><span class="keyword">= </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$thousands</span><span class="keyword">,</span><span class="string">","</span><span class="keyword">));
<br />        </span><span class="default">$formatted_rupee </span><span class="keyword">= </span><span class="default">$thousands</span><span class="keyword">.</span><span class="string">","</span><span class="keyword">.</span><span class="default">$hundreds</span><span class="keyword">;
<br />        
<br />    }
<br />    else
<br />    {
<br />        </span><span class="default">$formatted_rupee </span><span class="keyword">= </span><span class="default">$rupee</span><span class="keyword">;
<br />    }
<br />    
<br />    if((int)</span><span class="default">$paise</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$formatted_paise </span><span class="keyword">= </span><span class="string">"."</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$paise</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br />    }
<br />    
<br />    return </span><span class="default">$negative</span><span class="keyword">.</span><span class="default">$formatted_rupee</span><span class="keyword">.</span><span class="default">$formatted_paise</span><span class="keyword">;
<br />
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Thanks,</span></code></div>
  </div>
 </div>
  <div class="note" id="78315">  <div class="votes">
    <div id="Vu78315">
    <a href="/manual/vote-note.php?id=78315&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78315">
    <a href="/manual/vote-note.php?id=78315&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78315" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78315" class="name">
  <strong class="user"><em>scot from ezyauctionz.co.nz</em></strong></a><a class="genanchor" href="#78315"> &para;</a><div class="date" title="2007-10-06 03:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78315">
<div class="phpcode"><code><span class="html">This is a handy little bit of code I just wrote, as I was not able to find anything else suitable for my situation.
<br />This will handle monetary values that are passed to the script by a user, to reformat any comma use so that it is not broken when it passes through an input validation system that checks for a float.
<br />
<br />It is not foolproof, but will handle the common input as most users would input it, such as 1,234,567 (outputs 1234567) or 1,234.00 (outputs 1234.00), even handles 12,34 (outputs 12.34), I expect it would work with negative numbers, but have not tested it, as it is not used for that in my situation.
<br />
<br />This worked when other options such as money_format() were not suitable or possible.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">///////////////
<br />// BEGIN CODE convert all price amounts into well formatted values
<br /></span><span class="keyword">function </span><span class="default">converttonum</span><span class="keyword">(</span><span class="default">$convertnum</span><span class="keyword">,</span><span class="default">$fieldinput</span><span class="keyword">){
<br />        </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="default">$convertnum</span><span class="keyword">); </span><span class="comment">// split input value up to allow checking
<br />        
<br />        </span><span class="default">$first </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bits</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="comment">// gets part before first comma (thousands/millions)
<br />        </span><span class="default">$last </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bits</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); </span><span class="comment">// gets part after first comma (thousands (or decimals if incorrectly used by user)
<br />        
<br />        </span><span class="keyword">if (</span><span class="default">$last </span><span class="keyword">&lt;</span><span class="default">3</span><span class="keyword">){ </span><span class="comment">// checks for comma being used as decimal place
<br />            </span><span class="default">$convertnum </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$convertnum</span><span class="keyword">);
<br />        }
<br />        else{ </span><span class="comment">// assume comma is a thousands seperator, so remove it
<br />            </span><span class="default">$convertnum </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$convertnum</span><span class="keyword">);
<br />        }
<br />        
<br />        </span><span class="default">$_POST</span><span class="keyword">[</span><span class="default">$fieldinput</span><span class="keyword">] = </span><span class="default">$convertnum</span><span class="keyword">; </span><span class="comment">// redefine the vlaue of the variable, to be the new corrected one
<br /></span><span class="keyword">}
<br />
<br />@</span><span class="default">converttonum</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="default">inputone</span><span class="keyword">],</span><span class="string">"inputone"</span><span class="keyword">);
<br />@</span><span class="default">converttonum</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="default">inputtwo</span><span class="keyword">],</span><span class="string">"inputtwo"</span><span class="keyword">);
<br />@</span><span class="default">converttonum</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="default">inputthree</span><span class="keyword">],</span><span class="string">"inputthree"</span><span class="keyword">);
<br /></span><span class="comment">// END CODE
<br />//////////////
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />This is suitable for the English usage, it may need tweaking to work with other types.</span></code></div>
  </div>
 </div>
  <div class="note" id="125222">  <div class="votes">
    <div id="Vu125222">
    <a href="/manual/vote-note.php?id=125222&amp;page=function.money-format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125222">
    <a href="/manual/vote-note.php?id=125222&amp;page=function.money-format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125222" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#125222" class="name">
  <strong class="user"><em>sainthyoga2003 at gmail dot com</em></strong></a><a class="genanchor" href="#125222"> &para;</a><div class="date" title="2020-07-28 04:25"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125222">
<div class="phpcode"><code><span class="html">Be aware, since PHP 7.3 this method is deprecated and from PHP 7.4 this launch a deprecated error, so, setup your PHP web server to untrack E_DEPRECATED error reporting.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.money-format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.money-format.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                    <li class="current">
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
