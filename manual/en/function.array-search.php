<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_search - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-search.php">
 <link rel="shorturl" href="https://www.php.net/array-search">
 <link rel="alternate" href="https://www.php.net/array-search" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-reverse.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-shift.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-search.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-search.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-search.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-search.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-search.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-search.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-search.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-search.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-search.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-search.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-search.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Searches the array for a given value and returns the first corresponding key if successful" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_search - Manual" />
<meta name="twitter:description" content="Searches the array for a given value and returns the first corresponding key if successful" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_search - Manual" />
<meta itemprop="description" content="Searches the array for a given value and returns the first corresponding key if successful" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Searches the array for a given value and returns the first corresponding key if successful" />

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
        <a href="function.array-shift.php">
          array_shift &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-reverse.php">
          &laquo; array_reverse        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.array-search.php' selected="selected">English</option>
            <option value='de/function.array-search.php'>German</option>
            <option value='es/function.array-search.php'>Spanish</option>
            <option value='fr/function.array-search.php'>French</option>
            <option value='it/function.array-search.php'>Italian</option>
            <option value='ja/function.array-search.php'>Japanese</option>
            <option value='pt_BR/function.array-search.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-search.php'>Russian</option>
            <option value='tr/function.array-search.php'>Turkish</option>
            <option value='uk/function.array-search.php'>Ukrainian</option>
            <option value='zh/function.array-search.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-search" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_search</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_search</span> &mdash; <span class="dc-title">Searches the array for a given value and returns the first corresponding key if successful</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-search-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_search</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$needle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$haystack</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$strict</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Searches for <code class="parameter">needle</code> in <code class="parameter">haystack</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-search-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">needle</code></dt>
     <dd>
      <p class="para">
       The searched value.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If <code class="parameter">needle</code> is a string, the comparison is done
        in a case-sensitive manner.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">haystack</code></dt>
     <dd>
      <p class="para">
       The array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">strict</code></dt>
     <dd>
      <p class="para">
       If the third parameter <code class="parameter">strict</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
       then the <span class="function"><strong>array_search()</strong></span> function will search for
       <em>identical</em> elements in the
       <code class="parameter">haystack</code>. This means it will also perform a
       <a href="language.types.php" class="link">strict type comparison</a> of the
       <code class="parameter">needle</code> in the <code class="parameter">haystack</code>,
       and objects must be the same instance.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-search-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the key for <code class="parameter">needle</code> if it is found in the
   array, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
  <p class="para">
   If <code class="parameter">needle</code> is found in <code class="parameter">haystack</code>
   more than once, the first matching key is returned. To return the keys for
   all matching values, use <span class="function"><a href="function.array-keys.php" class="function">array_keys()</a></span> with the optional
   <code class="parameter">filter_value</code> parameter instead.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>

 <div class="refsect1 examples" id="refsect1-function.array-search-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5271">
    <p><strong>Example #1 <span class="function"><strong>array_search()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= array(</span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'blue'</span><span style="color: #007700">, </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'red'</span><span style="color: #007700">, </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'green'</span><span style="color: #007700">, </span><span style="color: #0000BB">3 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'red'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$key </span><span style="color: #007700">= </span><span style="color: #0000BB">array_search</span><span style="color: #007700">(</span><span style="color: #DD0000">'green'</span><span style="color: #007700">, </span><span style="color: #0000BB">$array</span><span style="color: #007700">); </span><span style="color: #FF8000">// $key = 2;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$key </span><span style="color: #007700">= </span><span style="color: #0000BB">array_search</span><span style="color: #007700">(</span><span style="color: #DD0000">'red'</span><span style="color: #007700">, </span><span style="color: #0000BB">$array</span><span style="color: #007700">);   </span><span style="color: #FF8000">// $key = 1;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-search-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-keys.php" class="function" rel="rdfs-seeAlso">array_keys()</a> - Return all the keys or a subset of the keys of an array</span></li>
    <li><span class="function"><a href="function.array-values.php" class="function" rel="rdfs-seeAlso">array_values()</a> - Return all the values of an array</span></li>
    <li><span class="function"><a href="function.array-key-exists.php" class="function" rel="rdfs-seeAlso">array_key_exists()</a> - Checks if the given key or index exists in the array</span></li>
    <li><span class="function"><a href="function.in-array.php" class="function" rel="rdfs-seeAlso">in_array()</a> - Checks if a value exists in an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-search.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-search%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-search&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-search.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120784">  <div class="votes">
    <div id="Vu120784">
    <a href="/manual/vote-note.php?id=120784&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120784">
    <a href="/manual/vote-note.php?id=120784&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120784" title="76% like this...">
    242
    </div>
  </div>
  <a href="#120784" class="name">
  <strong class="user"><em>turabgarip at gmail dot com</em></strong></a><a class="genanchor" href="#120784"> &para;</a><div class="date" title="2017-03-10 03:04"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120784">
<div class="phpcode"><code><span class="html">About searcing in multi-dimentional arrays; two notes on "xfoxawy at gmail dot com";<br /><br />It perfectly searches through multi-dimentional arrays combined with array_column() (min php 5.5.0) but it may not return the values you'd expect.<br /><br /><span class="default">&lt;?php array_search</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'key'</span><span class="keyword">)); </span><span class="default">?&gt;<br /></span><br />Since array_column() will produce a resulting array; it won't preserve your multi-dimentional array's keys. So if you check against your keys, it will fail.<br /><br />For example;<br /><br /><span class="default">&lt;?php<br />$people </span><span class="keyword">= array(<br />  </span><span class="default">2 </span><span class="keyword">=&gt; array(<br />    </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'John'</span><span class="keyword">,<br />    </span><span class="string">'fav_color' </span><span class="keyword">=&gt; </span><span class="string">'green'<br />  </span><span class="keyword">),<br />  </span><span class="default">5</span><span class="keyword">=&gt; array(<br />    </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Samuel'</span><span class="keyword">,<br />    </span><span class="string">'fav_color' </span><span class="keyword">=&gt; </span><span class="string">'blue'<br />  </span><span class="keyword">)<br />);<br /><br /></span><span class="default">$found_key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'blue'</span><span class="keyword">, </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">, </span><span class="string">'fav_color'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Here, you could expect that the $found_key would be "5" but it's NOT. It will be 1. Since it's the second element of the produced array by the array_column() function.<br /><br />Secondly, if your array is big, I would recommend you to first assign a new variable so that it wouldn't call array_column() for each element it searches. For a better performance, you could do;<br /><br /><span class="default">&lt;?php<br />$colors </span><span class="keyword">= </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">, </span><span class="string">'fav_color'</span><span class="keyword">);<br /></span><span class="default">$found_key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'blue'</span><span class="keyword">, </span><span class="default">$colors</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32883">  <div class="votes">
    <div id="Vu32883">
    <a href="/manual/vote-note.php?id=32883&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32883">
    <a href="/manual/vote-note.php?id=32883&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32883" title="67% like this...">
    58
    </div>
  </div>
  <a href="#32883" class="name">
  <strong class="user"><em>cue at openxbox dot com</em></strong></a><a class="genanchor" href="#32883"> &para;</a><div class="date" title="2003-06-09 07:50"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32883">
<div class="phpcode"><code><span class="html">If you are using the result of array_search in a condition statement, make sure you use the === operator instead of == to test whether or not it found a match.  Otherwise, searching through an array with numeric indicies will result in index 0 always getting evaluated as false/null.  This nuance cost me a lot of time and sanity, so I hope this helps someone.  In case you don't know what I'm talking about, here's an example:
<br />
<br /><span class="default">&lt;?php
<br />$code </span><span class="keyword">= array(</span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"c"</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">); </span><span class="comment">// infamous abacabb mortal kombat code :-P
<br />
<br />// this is WRONG
<br /></span><span class="keyword">while ((</span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">)) != </span><span class="default">NULL</span><span class="keyword">)
<br />{
<br /> </span><span class="comment">// infinite loop, regardless of the unset
<br /> </span><span class="keyword">unset(</span><span class="default">$code</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />}
<br />
<br /></span><span class="comment">// this is _RIGHT_
<br /></span><span class="keyword">while ((</span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">)) !== </span><span class="default">NULL</span><span class="keyword">)
<br />{
<br /> </span><span class="comment">// loop will terminate
<br /> </span><span class="keyword">unset(</span><span class="default">$code</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101869">  <div class="votes">
    <div id="Vu101869">
    <a href="/manual/vote-note.php?id=101869&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101869">
    <a href="/manual/vote-note.php?id=101869&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101869" title="60% like this...">
    34
    </div>
  </div>
  <a href="#101869" class="name">
  <strong class="user"><em>stefano@takys dot it</em></strong></a><a class="genanchor" href="#101869"> &para;</a><div class="date" title="2011-01-14 01:58"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101869">
<div class="phpcode"><code><span class="html">for searching case insensitive better this:
<br />
<br /><span class="default">&lt;?php
<br />array_search</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">),</span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strtolower'</span><span class="keyword">,</span><span class="default">$array</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117837">  <div class="votes">
    <div id="Vu117837">
    <a href="/manual/vote-note.php?id=117837&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117837">
    <a href="/manual/vote-note.php?id=117837&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117837" title="60% like this...">
    14
    </div>
  </div>
  <a href="#117837" class="name">
  <strong class="user"><em>maciej at speccode dot com</em></strong></a><a class="genanchor" href="#117837"> &para;</a><div class="date" title="2015-08-18 05:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117837">
<div class="phpcode"><code><span class="html">FYI, remember that strict mode is something that might save you hours.<br /><br />If you're searching for a string and you have a "true" boolean on the way - you will get it as result (first occurrence). Example below:<br /><br /><span class="default">&lt;?php<br /><br />$arr </span><span class="keyword">= [<br />    </span><span class="string">'foo'    </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">,<br />    </span><span class="string">'abc'    </span><span class="keyword">=&gt; </span><span class="string">'def'</span><span class="keyword">,<br />    </span><span class="string">'bool'   </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />    </span><span class="string">'target' </span><span class="keyword">=&gt; </span><span class="string">'xyz'<br /></span><span class="keyword">];<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">array_search</span><span class="keyword">( </span><span class="string">'xyz'</span><span class="keyword">, </span><span class="default">$arr </span><span class="keyword">) ); </span><span class="comment">//bool<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">array_search</span><span class="keyword">( </span><span class="string">'xyz'</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">) ); </span><span class="comment">//target<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126453">  <div class="votes">
    <div id="Vu126453">
    <a href="/manual/vote-note.php?id=126453&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126453">
    <a href="/manual/vote-note.php?id=126453&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126453" title="60% like this...">
    7
    </div>
  </div>
  <a href="#126453" class="name">
  <strong class="user"><em>opencart dot ocfilter at gmail dot com</em></strong></a><a class="genanchor" href="#126453"> &para;</a><div class="date" title="2021-09-23 12:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126453">
<div class="phpcode"><code><span class="html">Be careful!<br /><br /><span class="default">&lt;?php<br /><br />var_dump</span><span class="keyword">(</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'needle'</span><span class="keyword">, [ </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">0 </span><span class="keyword">])); </span><span class="comment">// int(0) (!)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'needle'</span><span class="keyword">, [ </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">0 </span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)); </span><span class="comment">// bool(false)<br /><br /></span><span class="default">?&gt;<br /></span><br />But, in php 8<br /><br /><span class="default">&lt;?php<br /><br />var_dump</span><span class="keyword">(</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'needle'</span><span class="keyword">, [ </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">0 </span><span class="keyword">])); </span><span class="comment">// bool(false)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122288">  <div class="votes">
    <div id="Vu122288">
    <a href="/manual/vote-note.php?id=122288&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122288">
    <a href="/manual/vote-note.php?id=122288&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122288" title="60% like this...">
    8
    </div>
  </div>
  <a href="#122288" class="name">
  <strong class="user"><em>thinbegin at gmail dot com</em></strong></a><a class="genanchor" href="#122288"> &para;</a><div class="date" title="2018-01-18 10:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122288">
<div class="phpcode"><code><span class="html">Despite PHP's amazing assortment of array functions and juggling maneuvers, I found myself needing a way to get the FULL array key mapping to a specific value. This function does that, and returns an array of the appropriate keys to get to said (first) value occurrence.<br /><br />function array_recursive_search_key_map($needle, $haystack) {<br />    foreach($haystack as $first_level_key=&gt;$value) {<br />        if ($needle === $value) {<br />            return array($first_level_key);<br />        } elseif (is_array($value)) {<br />            $callback = array_recursive_search_key_map($needle, $value);<br />            if ($callback) {<br />                return array_merge(array($first_level_key), $callback);<br />            }<br />        }<br />    }<br />    return false;<br />}<br /><br />usage example:<br />-------------------<br /><br />$nested_array = $sample_array = array(<br />    'a' =&gt; array(<br />        'one' =&gt; array ('aaa' =&gt; 'apple', 'bbb' =&gt; 'berry', 'ccc' =&gt; 'cantalope'),<br />        'two' =&gt; array ('ddd' =&gt; 'dog', 'eee' =&gt; 'elephant', 'fff' =&gt; 'fox')<br />    ),<br />    'b' =&gt; array(<br />        'three' =&gt; array ('ggg' =&gt; 'glad', 'hhh' =&gt; 'happy', 'iii' =&gt; 'insane'),<br />        'four' =&gt; array ('jjj' =&gt; 'jim', 'kkk' =&gt; 'kim', 'lll' =&gt; 'liam')<br />    ),<br />    'c' =&gt; array(<br />        'five' =&gt; array ('mmm' =&gt; 'mow', 'nnn' =&gt; 'no', 'ooo' =&gt; 'ohh'),<br />        'six' =&gt; array ('ppp' =&gt; 'pidgeon', 'qqq' =&gt; 'quail', 'rrr' =&gt; 'rooster')<br />    )<br />);<br /><br />$search_value = 'insane';<br /><br />$array_keymap = array_recursive_search_key_map($search_value, $nested_array);<br /><br />var_dump($array_keymap);<br />// Outputs:<br />// array(3) {<br />// [0]=&gt;<br />//  string(1) "b"<br />//  [1]=&gt;<br />//  string(5) "three"<br />//  [2]=&gt;<br />//  string(3) "iii"<br />//}<br /><br />----------------------------------------------<br /><br />But again, with the above solution, PHP again falls short on how to dynamically access a specific element's value within the nested array. For that, I wrote a 2nd function to pull the value that was mapped above.<br /><br />function array_get_nested_value($keymap, $array)<br />{<br />    $nest_depth = sizeof($keymap);<br />    $value = $array;<br />    for ($i = 0; $i &lt; $nest_depth; $i++) {<br />        $value = $value[$keymap[$i]];<br />    }<br /><br />    return $value;<br />}<br /><br />usage example:<br />-------------------<br />echo array_get_nested_value($array_keymap, $nested_array);   // insane</span></code></div>
  </div>
 </div>
  <div class="note" id="63338">  <div class="votes">
    <div id="Vu63338">
    <a href="/manual/vote-note.php?id=63338&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63338">
    <a href="/manual/vote-note.php?id=63338&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63338" title="60% like this...">
    13
    </div>
  </div>
  <a href="#63338" class="name">
  <strong class="user"><em>RichGC</em></strong></a><a class="genanchor" href="#63338"> &para;</a><div class="date" title="2006-03-20 05:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63338">
<div class="phpcode"><code><span class="html">To expand on previous comments, here are some examples of<br />where using array_search within an IF statement can go<br />wrong when you want to use the array key thats returned.<br /><br />Take the following two arrays you wish to search:<br /><br /><span class="default">&lt;?php<br />$fruit_array </span><span class="keyword">= array(</span><span class="string">"apple"</span><span class="keyword">, </span><span class="string">"pear"</span><span class="keyword">, </span><span class="string">"orange"</span><span class="keyword">);<br /></span><span class="default">$fruit_array </span><span class="keyword">= array(</span><span class="string">"a" </span><span class="keyword">=&gt; </span><span class="string">"apple"</span><span class="keyword">, </span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="string">"pear"</span><span class="keyword">, </span><span class="string">"c" </span><span class="keyword">=&gt; </span><span class="string">"orange"</span><span class="keyword">);<br /><br />if (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"apple"</span><span class="keyword">, </span><span class="default">$fruit_array</span><span class="keyword">))<br /></span><span class="comment">//PROBLEM: the first array returns a key of 0 and IF treats it as FALSE<br /><br /></span><span class="keyword">if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"apple"</span><span class="keyword">, </span><span class="default">$fruit_array</span><span class="keyword">)))<br /></span><span class="comment">//PROBLEM: works on numeric keys of the first array but fails on the second<br /><br /></span><span class="keyword">if (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"apple"</span><span class="keyword">, </span><span class="default">$fruit_array</span><span class="keyword">)))<br /></span><span class="comment">//PROBLEM: using the above in the wrong order causes $i to always equal 1<br /><br /></span><span class="keyword">if (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"apple"</span><span class="keyword">, </span><span class="default">$fruit_array</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">)<br /></span><span class="comment">//PROBLEM: explicit with no extra brackets causes $i to always equal 1<br /><br /></span><span class="keyword">if ((</span><span class="default">$i </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"apple"</span><span class="keyword">, </span><span class="default">$fruit_array</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">)<br /></span><span class="comment">//YES: works on both arrays returning their keys<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87773">  <div class="votes">
    <div id="Vu87773">
    <a href="/manual/vote-note.php?id=87773&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87773">
    <a href="/manual/vote-note.php?id=87773&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87773" title="58% like this...">
    3
    </div>
  </div>
  <a href="#87773" class="name">
  <strong class="user"><em>azaozz, gmail</em></strong></a><a class="genanchor" href="#87773"> &para;</a><div class="date" title="2008-12-20 05:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87773">
<div class="phpcode"><code><span class="html">Expanding on the comment by hansen{}cointel.de:<br /><br />When searching for a string and the array contains 0 (zero), the string is casted to (int) by the type-casting which is always 0 (perhaps the opposite is the proper behaviour, the array value 0 should have been casted to string). That produces unexpected results if strict comparison is not used:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array(</span><span class="default">0</span><span class="keyword">, </span><span class="string">"str1"</span><span class="keyword">, </span><span class="string">"str2"</span><span class="keyword">, </span><span class="string">"str3"</span><span class="keyword">);<br />echo </span><span class="string">"<br />str1 = "</span><span class="keyword">.</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"str1"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">).</span><span class="string">",<br />str2 = "</span><span class="keyword">.</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"str2"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">).</span><span class="string">",<br />str3 = "</span><span class="keyword">.</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"str3"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">).</span><span class="string">",<br /><br />str1 strict = "</span><span class="keyword">.</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"str1"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">",<br />str2 strict = "</span><span class="keyword">.</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"str2"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">",<br />str3 strict = "</span><span class="keyword">.</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"str3"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will return:<br />str1 = 0, str2 = 0, str3 = 0, str1 strict = 1, str2 strict = 2, str3 strict = 3</span></code></div>
  </div>
 </div>
  <div class="note" id="82283">  <div class="votes">
    <div id="Vu82283">
    <a href="/manual/vote-note.php?id=82283&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82283">
    <a href="/manual/vote-note.php?id=82283&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82283" title="58% like this...">
    3
    </div>
  </div>
  <a href="#82283" class="name">
  <strong class="user"><em>andreas dot damm at maxmachine dot de</em></strong></a><a class="genanchor" href="#82283"> &para;</a><div class="date" title="2008-04-03 04:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82283">
<div class="phpcode"><code><span class="html">Combining syntax of array_search() and functionality of array_keys() to get all key=&gt;value associations of an array with the given search-value:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_search_values</span><span class="keyword">( </span><span class="default">$m_needle</span><span class="keyword">, </span><span class="default">$a_haystack</span><span class="keyword">, </span><span class="default">$b_strict </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">){<br />    return </span><span class="default">array_intersect_key</span><span class="keyword">( </span><span class="default">$a_haystack</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">( </span><span class="default">array_keys</span><span class="keyword">( </span><span class="default">$a_haystack</span><span class="keyword">, </span><span class="default">$m_needle</span><span class="keyword">, </span><span class="default">$b_strict</span><span class="keyword">)));<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><span class="default">&lt;?php<br />$array1 </span><span class="keyword">= array( </span><span class="string">'pre'</span><span class="keyword">=&gt;</span><span class="string">'2'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'3'</span><span class="keyword">, </span><span class="string">'post'</span><span class="keyword">=&gt;</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">array_search_values</span><span class="keyword">( </span><span class="string">'2'</span><span class="keyword">, </span><span class="default">$array1</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">array_search_values</span><span class="keyword">( </span><span class="string">'2'</span><span class="keyword">, </span><span class="default">$array1</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">array_search_values</span><span class="keyword">( </span><span class="default">2</span><span class="keyword">, </span><span class="default">$array1</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Will return:<br />array(4) {<br />    ["pre"] =&gt;<br />    string(1) "2"<br />    [1] =&gt;<br />    int(2)<br />    [4] =&gt;<br />    string(1) "2"<br />    ["post"] =&gt;<br />    int(2)<br />}<br />array(2) {<br />    ["pre"] =&gt;<br />    string(1) "2"<br />    [4] =&gt;<br />    string(1) "2"<br />}<br />array(2) {<br />    [1] =&gt;<br />    int(2)<br />    ["post"] =&gt;<br />    int(2)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="93833">  <div class="votes">
    <div id="Vu93833">
    <a href="/manual/vote-note.php?id=93833&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93833">
    <a href="/manual/vote-note.php?id=93833&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93833" title="58% like this...">
    5
    </div>
  </div>
  <a href="#93833" class="name">
  <strong class="user"><em>codeslinger at compsalot dot com</em></strong></a><a class="genanchor" href="#93833"> &para;</a><div class="date" title="2009-10-02 12:22"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93833">
<div class="phpcode"><code><span class="html">one thing to be very aware of is that array_search() will fail if the needle is a string and the array itself contains values that are mixture of numbers and strings.  (or even a string that looks like a number)
<br />
<br />The problem is that unless you specify "strict" the match is done using ==    and in that case any string will match a numeric value of zero which is not what you want.
<br />
<br />-----
<br />
<br />also, php can lookup an index pretty darn fast.  for many scenarios, it is practical to maintain multiple arrays, one in which the index of the array is the search key and the normal array that contains the data.
<br />
<br /><span class="default">&lt;?php
<br />
<br />  $normal</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] = array(</span><span class="string">'key'</span><span class="keyword">=&gt;</span><span class="default">$key</span><span class="keyword">, </span><span class="string">'data'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">);
<br />  </span><span class="default">$inverse</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$index</span><span class="keyword">;
<br />
<br />  </span><span class="comment">//very fast lookup, this beats any other kind of search
<br />
<br />  </span><span class="keyword">if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$inverse</span><span class="keyword">)) 
<br />  {
<br />    </span><span class="default">$index </span><span class="keyword">= </span><span class="default">$inverse</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];
<br />    return </span><span class="default">$normal</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">];
<br />  }
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124961">  <div class="votes">
    <div id="Vu124961">
    <a href="/manual/vote-note.php?id=124961&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124961">
    <a href="/manual/vote-note.php?id=124961&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124961" title="53% like this...">
    1
    </div>
  </div>
  <a href="#124961" class="name">
  <strong class="user"><em>yasien dot dwieb at gmail dot com</em></strong></a><a class="genanchor" href="#124961"> &para;</a><div class="date" title="2020-04-28 05:41"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124961">
<div class="phpcode"><code><span class="html">Beware when using array_search to a mix of string and integer where prefixes of keys may collide, as in my case I have encountered the following situation:<br /><br />Assume you have the following array:<br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= [<br />           </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'index 0'</span><span class="keyword">,<br />           </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'index 1'</span><span class="keyword">,<br />           </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="string">'index 2'</span><span class="keyword">,<br />           </span><span class="string">'3anothersuffix' </span><span class="keyword">=&gt; </span><span class="string">'index 3'<br /></span><span class="keyword">];<br /><br /></span><span class="default">$index1 </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'3'</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)); </span><span class="comment">// 2<br /></span><span class="default">$index2 </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'3anothersuffix'</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)); </span><span class="comment">//2<br /></span><span class="default">?&gt;<br /></span><br />$index1 and $index2 will be the same<br /><br />after using strict type search:<br /><br /><span class="default">&lt;?php<br />$index1 </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'3'</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">$index2 </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'3anothersuffix'</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">);  </span><span class="comment">//3<br /></span><span class="default">?&gt;<br /></span><br />it will not find $index1 at all while returning a correct value for $index2;</span></code></div>
  </div>
 </div>
  <div class="note" id="90711">  <div class="votes">
    <div id="Vu90711">
    <a href="/manual/vote-note.php?id=90711&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90711">
    <a href="/manual/vote-note.php?id=90711&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90711" title="54% like this...">
    6
    </div>
  </div>
  <a href="#90711" class="name">
  <strong class="user"><em>n-regen</em></strong></a><a class="genanchor" href="#90711"> &para;</a><div class="date" title="2009-05-05 10:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90711">
<div class="phpcode"><code><span class="html">If you only know a part of a value in an array and want to know the complete value, you can use the following function:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_find</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">)<br />{<br />   foreach (</span><span class="default">$haystack </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">)<br />   {<br />      if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">)<br />      {<br />         return </span><span class="default">$item</span><span class="keyword">;<br />         break;<br />      }<br />   }<br />}<br /></span><span class="default">?&gt;<br /></span>The function returns the complete first value of $haystack that contains $needle.</span></code></div>
  </div>
 </div>
  <div class="note" id="88465">  <div class="votes">
    <div id="Vu88465">
    <a href="/manual/vote-note.php?id=88465&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88465">
    <a href="/manual/vote-note.php?id=88465&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88465" title="52% like this...">
    1
    </div>
  </div>
  <a href="#88465" class="name">
  <strong class="user"><em>helenadeus at gmail dot com</em></strong></a><a class="genanchor" href="#88465"> &para;</a><div class="date" title="2009-01-25 01:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88465">
<div class="phpcode"><code><span class="html">I was trying to use array_search to retrieve all the values that match a given needle, but it turns out only the first match key is returned. I built this little function, which works just like array_search, but returns all the keys that match a given needle instead. The output is an array.<br /><br /><span class="default">&lt;?php<br /><br />$haystack </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">,</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">);<br /><br /></span><span class="default">$needle </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_search_all</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">));<br /><br /></span><span class="comment">//Output will be<br />// Array<br />// (<br />//         [0]=&gt;1<br />//         [1]=&gt;3<br />// )<br /><br /></span><span class="keyword">function </span><span class="default">array_search_all</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">)<br />{</span><span class="comment">#array_search_match($needle, $haystack) returns all the keys of the values that match $needle in $haystack<br /><br />    </span><span class="keyword">foreach (</span><span class="default">$haystack </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">) {<br />    <br />        if(</span><span class="default">$haystack</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]==</span><span class="default">$needle</span><span class="keyword">){<br />        <br />           </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">$k</span><span class="keyword">;<br />        }<br />    }<br />    return (</span><span class="default">$array</span><span class="keyword">);<br /><br />    <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129809">  <div class="votes">
    <div id="Vu129809">
    <a href="/manual/vote-note.php?id=129809&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129809">
    <a href="/manual/vote-note.php?id=129809&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129809" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129809" class="name">
  <strong class="user"><em>team at concerty dot com</em></strong></a><a class="genanchor" href="#129809"> &para;</a><div class="date" title="2024-10-18 11:48"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129809">
<div class="phpcode"><code><span class="html">About searching in multi-dimentional arrays using array_column, to add to the notes from "turabgarip at gmail dot com", here is a workaround to find the correct key:<br /><br />$array_column = 'name';<br />$searchValue = 'my value ;<br />$result = array_filter($myArray, function ($subarray) use ($array_column, $searchValue) {<br />    return isset($subarray[$array_column]) &amp;&amp; $subarray[$array_column] === $searchValue;<br />});<br /><br />echo key($result);</span></code></div>
  </div>
 </div>
  <div class="note" id="77750">  <div class="votes">
    <div id="Vu77750">
    <a href="/manual/vote-note.php?id=77750&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77750">
    <a href="/manual/vote-note.php?id=77750&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77750" title="52% like this...">
    1
    </div>
  </div>
  <a href="#77750" class="name">
  <strong class="user"><em>kermes [at] thesevens [dot] net</em></strong></a><a class="genanchor" href="#77750"> &para;</a><div class="date" title="2007-09-11 03:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77750">
<div class="phpcode"><code><span class="html">A variation of previous searches that returns an array of keys that match the given value:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_ksearch</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">)<br />{<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), </span><span class="default">$i</span><span class="keyword">++)<br />        if(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) == </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">))<br />            </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    <br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage would be as follows:<br /><span class="default">&lt;?php<br />$testArray </span><span class="keyword">= array(</span><span class="string">'one' </span><span class="keyword">=&gt; </span><span class="string">'test1'</span><span class="keyword">, </span><span class="string">'two' </span><span class="keyword">=&gt; </span><span class="string">'test2'</span><span class="keyword">, </span><span class="string">'three' </span><span class="keyword">=&gt; </span><span class="string">'test1'</span><span class="keyword">, </span><span class="string">'four' </span><span class="keyword">=&gt; </span><span class="string">'test2'</span><span class="keyword">, </span><span class="string">'five' </span><span class="keyword">=&gt; </span><span class="string">'test1'</span><span class="keyword">);<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_ksearch</span><span class="keyword">(</span><span class="default">$testArray</span><span class="keyword">, </span><span class="string">'test1'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106056">  <div class="votes">
    <div id="Vu106056">
    <a href="/manual/vote-note.php?id=106056&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106056">
    <a href="/manual/vote-note.php?id=106056&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106056" title="50% like this...">
    0
    </div>
  </div>
  <a href="#106056" class="name">
  <strong class="user"><em>stooshie at gmail dot com</em></strong></a><a class="genanchor" href="#106056"> &para;</a><div class="date" title="2011-10-06 02:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106056">
<div class="phpcode"><code><span class="html">Example of a recursive binary search that returns the index rather than boolean.<br /><span class="default">&lt;?php<br /></span><span class="comment">// returns the index of needle in haystack<br /></span><span class="keyword">function </span><span class="default">binSearch</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">)<br />{<br />    </span><span class="comment">// n is only needed if counting depth of search<br />    </span><span class="keyword">global </span><span class="default">$n</span><span class="keyword">;<br />    </span><span class="default">$n</span><span class="keyword">++;<br />    </span><span class="comment">// get the length of passed array<br />    </span><span class="default">$l </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">);<br />    </span><span class="comment">// if length is 0, problem<br />    </span><span class="keyword">if(</span><span class="default">$l </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        return -</span><span class="default">1</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// get the mid element<br />    </span><span class="default">$m </span><span class="keyword">= ((</span><span class="default">$l</span><span class="keyword">+(</span><span class="default">$l</span><span class="keyword">%</span><span class="default">2</span><span class="keyword">))/</span><span class="default">2</span><span class="keyword">);<br />    </span><span class="comment">// if mid &gt;= length (e.g. l=1)<br />    </span><span class="keyword">if(</span><span class="default">$m </span><span class="keyword">&gt;= </span><span class="default">$l</span><span class="keyword">)<br />    {<br />        </span><span class="default">$m </span><span class="keyword">= </span><span class="default">$m</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// get the indexed element to compare to the passed element and branch accordingly<br />    </span><span class="default">$compare </span><span class="keyword">= </span><span class="default">$haystack</span><span class="keyword">[</span><span class="default">$m</span><span class="keyword">];<br />    switch(</span><span class="default">true</span><span class="keyword">)<br />    {<br />        case(</span><span class="default">$compare</span><span class="keyword">&gt;</span><span class="default">$needle</span><span class="keyword">):<br />        {<br />            </span><span class="comment">// recurse on the lower half<br />            </span><span class="default">$new_haystack </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">);<br />            </span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$new_haystack</span><span class="keyword">);<br />            </span><span class="default">$r </span><span class="keyword">= </span><span class="default">binSearch</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$new_haystack</span><span class="keyword">);<br />            </span><span class="comment">// return current index - (length of lower half - found index in lower half)<br />            </span><span class="keyword">return </span><span class="default">$m </span><span class="keyword">- (</span><span class="default">$c </span><span class="keyword">- </span><span class="default">$r</span><span class="keyword">);<br />            break;<br />        }<br />        case(</span><span class="default">$compare</span><span class="keyword">&lt;</span><span class="default">$needle</span><span class="keyword">):<br />        {<br />            </span><span class="comment">// recurse on the upper half<br />            </span><span class="default">$new_haystack </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">, (</span><span class="default">$l</span><span class="keyword">-</span><span class="default">$m</span><span class="keyword">));<br />            </span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$new_haystack</span><span class="keyword">);<br />            </span><span class="default">$r </span><span class="keyword">= </span><span class="default">binSearch</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$new_haystack</span><span class="keyword">);<br />            </span><span class="comment">// return current position + found index in upper half<br />            </span><span class="keyword">return </span><span class="default">$m </span><span class="keyword">+ </span><span class="default">$r</span><span class="keyword">;<br />            break;<br />        }<br />        case(</span><span class="default">$compare</span><span class="keyword">==</span><span class="default">$needle</span><span class="keyword">):<br />        {<br />            </span><span class="comment">// found it, so return index<br />            </span><span class="keyword">return </span><span class="default">$m</span><span class="keyword">;<br />            break;<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124985">  <div class="votes">
    <div id="Vu124985">
    <a href="/manual/vote-note.php?id=124985&amp;page=function.array-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124985">
    <a href="/manual/vote-note.php?id=124985&amp;page=function.array-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124985" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#124985" class="name">
  <strong class="user"><em>nordseebaer at gmx dot de</em></strong></a><a class="genanchor" href="#124985"> &para;</a><div class="date" title="2020-05-08 08:08"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124985">
<div class="phpcode"><code><span class="html">It's really important to check the return value is not false! I used array_search() to determine the index of an value to unset this value and then realized that $arr[false] === $arr[0] !<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= [</span><span class="string">'apple'</span><span class="keyword">, </span><span class="string">'banana'</span><span class="keyword">];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'apple'</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">false</span><span class="keyword">] === </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">false</span><span class="keyword">] === </span><span class="string">'apple'</span><span class="keyword">); </span><span class="comment">// true<br /><br /></span><span class="keyword">unset(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'banana'</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">)]); </span><span class="comment">//index = 1<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br /></span><span class="comment">// result<br />//   array(1) {<br />//     [0]=&gt;<br />//     string(5) "apple"<br />//   }<br /><br /></span><span class="keyword">unset(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'peach'</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">)]); </span><span class="comment">//not found, result is false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br /></span><span class="comment">// result<br />//   array(0) {<br />//   }<br />// because $arr[false] === $arr[0]<br /></span><span class="default">?&gt;<br /></span><br />So always check the return of array_search!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-search&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-search.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="current">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
