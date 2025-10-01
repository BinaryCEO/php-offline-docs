<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strpos - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strpos.php">
 <link rel="shorturl" href="https://www.php.net/strpos">
 <link rel="alternate" href="https://www.php.net/strpos" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strpbrk.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strrchr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strpos.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strpos.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strpos.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strpos.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strpos.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strpos.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strpos.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strpos.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strpos.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strpos.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strpos.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Find the position of the first occurrence of a substring in a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strpos - Manual" />
<meta name="twitter:description" content="Find the position of the first occurrence of a substring in a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strpos - Manual" />
<meta itemprop="description" content="Find the position of the first occurrence of a substring in a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Find the position of the first occurrence of a substring in a string" />

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
        <a href="function.strrchr.php">
          strrchr &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strpbrk.php">
          &laquo; strpbrk        </a>
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
            <option value='en/function.strpos.php' selected="selected">English</option>
            <option value='de/function.strpos.php'>German</option>
            <option value='es/function.strpos.php'>Spanish</option>
            <option value='fr/function.strpos.php'>French</option>
            <option value='it/function.strpos.php'>Italian</option>
            <option value='ja/function.strpos.php'>Japanese</option>
            <option value='pt_BR/function.strpos.php'>Brazilian Portuguese</option>
            <option value='ru/function.strpos.php'>Russian</option>
            <option value='tr/function.strpos.php'>Turkish</option>
            <option value='uk/function.strpos.php'>Ukrainian</option>
            <option value='zh/function.strpos.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strpos" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strpos</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strpos</span> &mdash; <span class="dc-title">Find the position of the first occurrence of a substring in a string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.strpos-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strpos</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$haystack</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$needle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Find the numeric position of the first occurrence of
   <code class="parameter">needle</code> in the <code class="parameter">haystack</code> string.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strpos-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">haystack</code></dt>
     <dd>
      <p class="para">
       The string to search in.
      </p>
     </dd>
    
    
     <dt><code class="parameter">needle</code></dt>
     <dd>
      <p class="para">
       The string to search for.
      </p>
      
 <p class="para">
  Prior to PHP 8.0.0, if <code class="parameter">needle</code> is not a string, it is converted
  to an integer and applied as the ordinal value of a character.
  This behavior is deprecated as of PHP 7.3.0, and relying on it is highly
  discouraged. Depending on the intended behavior, the
  <code class="parameter">needle</code> should either be explicitly cast to string,
  or an explicit call to <span class="function"><a href="function.chr.php" class="function">chr()</a></span> should be performed.
 </p>

     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       If specified, search will start this number of characters counted from
       the beginning of the string. If the offset is negative, the search will start
       this number of characters counted from the end of the string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strpos-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the position of where the needle exists relative to the beginning of
   the <code class="parameter">haystack</code> string (independent of <code class="parameter">offset</code>).
   Also note that string positions start at <code class="literal">0</code>, and not <code class="literal">1</code>.
  </p>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the needle was not found.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strpos-changelog">
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
 <td>8.0.0</td>
 <td>
  <code class="parameter">needle</code> now accepts an empty string.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Passing an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> as <code class="parameter">needle</code> is no longer supported.
      </td>
     </tr>

     <tr>
      <td>7.3.0</td>
      <td>
       Passing an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> as <code class="parameter">needle</code> has been deprecated.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       Support for negative <code class="parameter">offset</code>s has been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.strpos-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5163">
    <p><strong>Example #1 Using <code class="literal">===</code></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mystring </span><span style="color: #007700">= </span><span style="color: #DD0000">'abc'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$findme   </span><span style="color: #007700">= </span><span style="color: #DD0000">'a'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$pos </span><span style="color: #007700">= </span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$mystring</span><span style="color: #007700">, </span><span style="color: #0000BB">$findme</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Note our use of ===.  Simply == would not work as expected<br />// because the position of 'a' was the 0th (first) character.<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$pos </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"The string '</span><span style="color: #0000BB">$findme</span><span style="color: #DD0000">' was not found in the string '</span><span style="color: #0000BB">$mystring</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"The string '</span><span style="color: #0000BB">$findme</span><span style="color: #DD0000">' was found in the string '</span><span style="color: #0000BB">$mystring</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">" and exists at position </span><span style="color: #0000BB">$pos</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <div class="example" id="example-5164">
    <p><strong>Example #2 Using !==</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mystring </span><span style="color: #007700">= </span><span style="color: #DD0000">'abc'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$findme   </span><span style="color: #007700">= </span><span style="color: #DD0000">'a'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$pos </span><span style="color: #007700">= </span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$mystring</span><span style="color: #007700">, </span><span style="color: #0000BB">$findme</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The !== operator can also be used.  Using != would not work as expected<br />// because the position of 'a' is 0. The statement (0 != false) evaluates<br />// to false.<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$pos </span><span style="color: #007700">!== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />     echo </span><span style="color: #DD0000">"The string '</span><span style="color: #0000BB">$findme</span><span style="color: #DD0000">' was found in the string '</span><span style="color: #0000BB">$mystring</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br />         echo </span><span style="color: #DD0000">" and exists at position </span><span style="color: #0000BB">$pos</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />} else {<br />     echo </span><span style="color: #DD0000">"The string '</span><span style="color: #0000BB">$findme</span><span style="color: #DD0000">' was not found in the string '</span><span style="color: #0000BB">$mystring</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <div class="example" id="example-5165">
    <p><strong>Example #3 Using an offset</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// We can search for the character, ignoring anything before the offset<br /></span><span style="color: #0000BB">$newstring </span><span style="color: #007700">= </span><span style="color: #DD0000">'abcdef abcdef'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$pos </span><span style="color: #007700">= </span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$newstring</span><span style="color: #007700">, </span><span style="color: #DD0000">'a'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">); </span><span style="color: #FF8000">// $pos = 7, not 0<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$pos</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strpos-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strpos-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.stripos.php" class="function" rel="rdfs-seeAlso">stripos()</a> - Find the position of the first occurrence of a case-insensitive substring in a string</span></li>
    <li><span class="function"><a href="function.str-contains.php" class="function" rel="rdfs-seeAlso">str_contains()</a> - Determine if a string contains a given substring</span></li>
    <li><span class="function"><a href="function.str-ends-with.php" class="function" rel="rdfs-seeAlso">str_ends_with()</a> - Checks if a string ends with a given substring</span></li>
    <li><span class="function"><a href="function.str-starts-with.php" class="function" rel="rdfs-seeAlso">str_starts_with()</a> - Checks if a string starts with a given substring</span></li>
    <li><span class="function"><a href="function.strrpos.php" class="function" rel="rdfs-seeAlso">strrpos()</a> - Find the position of the last occurrence of a substring in a string</span></li>
    <li><span class="function"><a href="function.strripos.php" class="function" rel="rdfs-seeAlso">strripos()</a> - Find the position of the last occurrence of a case-insensitive substring in a string</span></li>
    <li><span class="function"><a href="function.strstr.php" class="function" rel="rdfs-seeAlso">strstr()</a> - Find the first occurrence of a string</span></li>
    <li><span class="function"><a href="function.strpbrk.php" class="function" rel="rdfs-seeAlso">strpbrk()</a> - Search a string for any of a set of characters</span></li>
    <li><span class="function"><a href="function.substr.php" class="function" rel="rdfs-seeAlso">substr()</a> - Return part of a string</span></li>
    <li><span class="function"><a href="function.preg-match.php" class="function" rel="rdfs-seeAlso">preg_match()</a> - Perform a regular expression match</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strpos.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strpos%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strpos&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strpos.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">35 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="80363">  <div class="votes">
    <div id="Vu80363">
    <a href="/manual/vote-note.php?id=80363&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80363">
    <a href="/manual/vote-note.php?id=80363&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80363" title="73% like this...">
    223
    </div>
  </div>
  <a href="#80363" class="name">
  <strong class="user"><em>Suggested re-write for pink WARNING box</em></strong></a><a class="genanchor" href="#80363"> &para;</a><div class="date" title="2008-01-11 03:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80363">
<div class="phpcode"><code><span class="html">WARNING<br /><br />As strpos may return either FALSE (substring absent) or 0 (substring at start of string), strict versus loose equivalency operators must be used very carefully.<br /><br />To know that a substring is absent, you must use:  <br /><br />=== FALSE<br /><br />To know that a substring is present (in any position including 0), you can use either of:<br /><br />!== FALSE  (recommended)<br /> &gt; -1  (note: or greater than any negative number)<br /><br />To know that a substring is at the start of the string, you must use:  <br /><br />=== 0<br /><br />To know that a substring is in any position other than the start, you can use any of: <br /><br /> &gt; 0  (recommended)<br />!= 0  (note: but not !== 0 which also equates to FALSE)<br />!= FALSE  (disrecommended as highly confusing)<br /><br />Also note that you cannot compare a value of "" to the returned value of strpos. With a loose equivalence operator (== or !=) it will return results which don't distinguish between the substring's presence versus position. With a strict equivalence operator (=== or !==) it will always return false.</span></code></div>
  </div>
 </div>
  <div class="note" id="118905">  <div class="votes">
    <div id="Vu118905">
    <a href="/manual/vote-note.php?id=118905&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118905">
    <a href="/manual/vote-note.php?id=118905&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118905" title="63% like this...">
    29
    </div>
  </div>
  <a href="#118905" class="name">
  <strong class="user"><em>fabio at naoimporta dot com</em></strong></a><a class="genanchor" href="#118905"> &para;</a><div class="date" title="2016-02-25 04:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118905">
<div class="phpcode"><code><span class="html">It is interesting to be aware of the behavior when the treatment of strings with characters using different encodings.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># Works like expected. There is no accent<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">"Fabio"</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">));<br /></span><span class="comment">#int(2)<br /><br /># The "á" letter is occupying two positions<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">"Fábio"</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">)) ;<br /></span><span class="comment">#int(3)<br /><br /># Now, encoding the string "Fábio" to utf8, we get some "unexpected" outputs. Every letter that is no in regular ASCII table, will use 4 positions(bytes). The starting point remains like before.<br /># We cant find the characted, because the haystack string is now encoded.<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="string">"Fábio"</span><span class="keyword">), </span><span class="string">'á'</span><span class="keyword">));<br /></span><span class="comment">#bool(false)<br /><br /># To get the expected result, we need to encode the needle too<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="string">"Fábio"</span><span class="keyword">), </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="string">'á'</span><span class="keyword">)));<br /></span><span class="comment">#int(1) <br /><br /># And, like said before, "á" occupies 4 positions(bytes)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="string">"Fábio"</span><span class="keyword">), </span><span class="string">'b'</span><span class="keyword">));<br /></span><span class="comment">#int(5)</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107678">  <div class="votes">
    <div id="Vu107678">
    <a href="/manual/vote-note.php?id=107678&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107678">
    <a href="/manual/vote-note.php?id=107678&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107678" title="63% like this...">
    24
    </div>
  </div>
  <a href="#107678" class="name">
  <strong class="user"><em>martijn at martijnfrazer dot nl</em></strong></a><a class="genanchor" href="#107678"> &para;</a><div class="date" title="2012-02-25 03:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107678">
<div class="phpcode"><code><span class="html">This is a function I wrote to find all occurrences of a string, using strpos recursively.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strpos_recursive</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, &amp;</span><span class="default">$results </span><span class="keyword">= array()) {                <br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);<br />    if(</span><span class="default">$offset </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        return </span><span class="default">$results</span><span class="keyword">;            <br />    } else {<br />        </span><span class="default">$results</span><span class="keyword">[] = </span><span class="default">$offset</span><span class="keyword">;<br />        return </span><span class="default">strpos_recursive</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, (</span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">), </span><span class="default">$results</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This is how you use it:<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">'This is some string'</span><span class="keyword">;<br /></span><span class="default">$search </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br /></span><span class="default">$found </span><span class="keyword">= </span><span class="default">strpos_recursive</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$search</span><span class="keyword">);<br /><br />if(</span><span class="default">$found</span><span class="keyword">) {<br />    foreach(</span><span class="default">$found </span><span class="keyword">as </span><span class="default">$pos</span><span class="keyword">) {<br />        echo </span><span class="string">'Found "'</span><span class="keyword">.</span><span class="default">$search</span><span class="keyword">.</span><span class="string">'" in string "'</span><span class="keyword">.</span><span class="default">$string</span><span class="keyword">.</span><span class="string">'" at position &lt;b&gt;'</span><span class="keyword">.</span><span class="default">$pos</span><span class="keyword">.</span><span class="string">'&lt;/b&gt;&lt;br /&gt;'</span><span class="keyword">;<br />    }    <br />} else {<br />    echo </span><span class="string">'"'</span><span class="keyword">.</span><span class="default">$search</span><span class="keyword">.</span><span class="string">'" not found in "'</span><span class="keyword">.</span><span class="default">$string</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108426">  <div class="votes">
    <div id="Vu108426">
    <a href="/manual/vote-note.php?id=108426&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108426">
    <a href="/manual/vote-note.php?id=108426&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108426" title="62% like this...">
    24
    </div>
  </div>
  <a href="#108426" class="name">
  <strong class="user"><em>mtroy dot student at gmail dot com</em></strong></a><a class="genanchor" href="#108426"> &para;</a><div class="date" title="2012-04-25 04:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108426">
<div class="phpcode"><code><span class="html">when you want to know how much of substring occurrences, you'll use "substr_count".<br />But, retrieve their positions, will be harder.<br />So, you can do it by starting with the last occurrence :<br /><br />function strpos_r($haystack, $needle)<br />{<br />    if(strlen($needle) &gt; strlen($haystack))<br />        trigger_error(sprintf("%s: length of argument 2 must be &lt;= argument 1", __FUNCTION__), E_USER_WARNING);<br /><br />    $seeks = array();<br />    while($seek = strrpos($haystack, $needle))<br />    {<br />        array_push($seeks, $seek);<br />        $haystack = substr($haystack, 0, $seek);<br />    }<br />    return $seeks;<br />}<br /><br />it will return an array of all occurrences a the substring in the string<br /><br />Example : <br /><br />$test = "this is a test for testing a test function... blah blah";<br />var_dump(strpos_r($test, "test"));<br /><br />// output <br /><br />array(3) {<br />  [0]=&gt;<br />  int(29)<br />  [1]=&gt;<br />  int(19)<br />  [2]=&gt;<br />  int(10)<br />}<br /><br />Paul-antoine<br />Malézieux.</span></code></div>
  </div>
 </div>
  <div class="note" id="119853">  <div class="votes">
    <div id="Vu119853">
    <a href="/manual/vote-note.php?id=119853&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119853">
    <a href="/manual/vote-note.php?id=119853&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119853" title="62% like this...">
    7
    </div>
  </div>
  <a href="#119853" class="name">
  <strong class="user"><em>m.m.j.kronenburg</em></strong></a><a class="genanchor" href="#119853"> &para;</a><div class="date" title="2016-09-06 10:56"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119853">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Find the position of the first occurrence of one or more substrings in a <br /> * string.<br /> * <br /> * This function is simulair to function strpos() except that it allows to <br /> * search for multiple needles at once.<br /> *<br /> * @param string $haystack    The string to search in.<br /> * @param mixed $needles      Array containing needles or string containing <br /> *                            needle.<br /> * @param integer $offset     If specified, search will start this number of <br /> *                            characters counted from the beginning of the <br /> *                            string.<br /> * @param boolean $last       If TRUE then the farthest position from the start <br /> *                            of one of the needles is returned.<br /> *                            If FALSE then the smallest position from start of <br /> *                            one of the needles is returned.<br /> **/<br /></span><span class="keyword">function </span><span class="default">mstrpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$last </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />  if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$needles</span><span class="keyword">)) { </span><span class="default">$needles </span><span class="keyword">= array(</span><span class="default">$needles</span><span class="keyword">); }<br />  </span><span class="default">$found </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />  foreach(</span><span class="default">$needles </span><span class="keyword">as </span><span class="default">$needle</span><span class="keyword">)<br />  {<br />    </span><span class="default">$position </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, (string)</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);<br />    if(</span><span class="default">$position </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) { continue; }<br />    </span><span class="default">$exp </span><span class="keyword">= </span><span class="default">$last </span><span class="keyword">? (</span><span class="default">$found </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$position </span><span class="keyword">&gt; </span><span class="default">$found</span><span class="keyword">) : <br />      (</span><span class="default">$found </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$position </span><span class="keyword">&lt; </span><span class="default">$found</span><span class="keyword">);<br />    if(</span><span class="default">$exp</span><span class="keyword">) { </span><span class="default">$found </span><span class="keyword">= </span><span class="default">$position</span><span class="keyword">; }<br />  }<br />  return </span><span class="default">$found</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * Find the position of the first (partially) occurrence of a substring in a <br /> * string.<br /> * <br /> * This function is simulair to function strpos() except that it wil return a <br /> * position when the substring is partially located at the end of the string.<br /> *<br /> * @param string $haystack    The string to search in.<br /> * @param mixed $needle       The needle to search for.<br /> * @param integer $offset     If specified, search will start this number of <br /> *                            characters counted from the beginning of the <br /> *                            string.<br /> **/<br /></span><span class="keyword">function </span><span class="default">pstrpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />{<br />  </span><span class="default">$position </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);<br />  if(</span><span class="default">$position </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) { return </span><span class="default">$position</span><span class="keyword">; }<br />  <br />  for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--)<br />  {<br />    if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">) == </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, -</span><span class="default">$i</span><span class="keyword">))<br />    { return </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">) - </span><span class="default">$i</span><span class="keyword">; }<br />  }<br />  return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * Find the position of the first (partially) occurrence of one or more <br /> * substrings in a string.<br /> * <br /> * This function is simulair to function strpos() except that it allows to <br /> * search for multiple needles at once and it wil return a position when one of<br /> * the substrings is partially located at the end of the string.<br /> *<br /> * @param string $haystack    The string to search in.<br /> * @param mixed $needles      Array containing needles or string containing <br /> *                            needle.<br /> * @param integer $offset     If specified, search will start this number of <br /> *                            characters counted from the beginning of the <br /> *                            string.<br /> * @param boolean $last       If TRUE then the farthest position from the start <br /> *                            of one of the needles is returned.<br /> *                            If FALSE then the smallest position from start of <br /> *                            one of the needles is returned.<br /> **/<br /></span><span class="keyword">function </span><span class="default">mpstrpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$last </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />  if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$needles</span><span class="keyword">)) { </span><span class="default">$needles </span><span class="keyword">= array(</span><span class="default">$needles</span><span class="keyword">); }<br />  </span><span class="default">$found </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />  foreach(</span><span class="default">$needles </span><span class="keyword">as </span><span class="default">$needle</span><span class="keyword">)<br />  {<br />    </span><span class="default">$position </span><span class="keyword">= </span><span class="default">pstrpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, (string)</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);<br />    if(</span><span class="default">$position </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) { continue; }<br />    </span><span class="default">$exp </span><span class="keyword">= </span><span class="default">$last </span><span class="keyword">? (</span><span class="default">$found </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$position </span><span class="keyword">&gt; </span><span class="default">$found</span><span class="keyword">) : <br />      (</span><span class="default">$found </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$position </span><span class="keyword">&lt; </span><span class="default">$found</span><span class="keyword">);<br />    if(</span><span class="default">$exp</span><span class="keyword">) { </span><span class="default">$found </span><span class="keyword">= </span><span class="default">$position</span><span class="keyword">; }<br />  }<br />  return </span><span class="default">$found</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121915">  <div class="votes">
    <div id="Vu121915">
    <a href="/manual/vote-note.php?id=121915&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121915">
    <a href="/manual/vote-note.php?id=121915&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121915" title="62% like this...">
    8
    </div>
  </div>
  <a href="#121915" class="name">
  <strong class="user"><em>greg at spotx dot net</em></strong></a><a class="genanchor" href="#121915"> &para;</a><div class="date" title="2017-11-27 12:48"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121915">
<div class="phpcode"><code><span class="html">Warning:<br />this is not unicode safe<br /><br />strpos($word,'?') in e?ez-&gt; 1 <br />strpos($word,'?') in è?ent-&gt; 2</span></code></div>
  </div>
 </div>
  <div class="note" id="107240">  <div class="votes">
    <div id="Vu107240">
    <a href="/manual/vote-note.php?id=107240&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107240">
    <a href="/manual/vote-note.php?id=107240&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107240" title="59% like this...">
    21
    </div>
  </div>
  <a href="#107240" class="name">
  <strong class="user"><em>rjeggens at ijskoud dot org</em></strong></a><a class="genanchor" href="#107240"> &para;</a><div class="date" title="2012-01-24 07:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107240">
<div class="phpcode"><code><span class="html">I lost an hour before I noticed that strpos only returns FALSE as a boolean, never TRUE.. This means that<br /><br />strpos() !== false <br /><br />is a different beast then:<br /><br />strpos() === true<br /><br />since the latter will never be true. After I found out, The warning in the documentation made a lot more sense.</span></code></div>
  </div>
 </div>
  <div class="note" id="120505">  <div class="votes">
    <div id="Vu120505">
    <a href="/manual/vote-note.php?id=120505&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120505">
    <a href="/manual/vote-note.php?id=120505&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120505" title="59% like this...">
    10
    </div>
  </div>
  <a href="#120505" class="name">
  <strong class="user"><em>jexy dot ru at gmail dot com</em></strong></a><a class="genanchor" href="#120505"> &para;</a><div class="date" title="2017-01-23 08:29"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120505">
<div class="phpcode"><code><span class="html">Docs are missing that WARNING is issued if needle is '' (empty string).<br /><br />In case of empty haystack it just return false:<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">));<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">));<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />will output:<br /><br />Warning: strpos(): Empty needle in /in/lADCh on line 3 <br />bool(false) <br /><br />bool(false) <br /><br />Warning: strpos(): Empty needle in /in/lADCh on line 7 <br />bool(false)<br /><br />Note also that warning text may differ depending on php version, see <a href="https://3v4l.org/lADCh" rel="nofollow" target="_blank">https://3v4l.org/lADCh</a></span></code></div>
  </div>
 </div>
  <div class="note" id="75146">  <div class="votes">
    <div id="Vu75146">
    <a href="/manual/vote-note.php?id=75146&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75146">
    <a href="/manual/vote-note.php?id=75146&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75146" title="60% like this...">
    5
    </div>
  </div>
  <a href="#75146" class="name">
  <strong class="user"><em>user at nomail dot com</em></strong></a><a class="genanchor" href="#75146"> &para;</a><div class="date" title="2007-05-15 02:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75146">
<div class="phpcode"><code><span class="html">This is a bit more useful when scanning a large string for all occurances between 'tags'.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getStrsBetween</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$s1</span><span class="keyword">,</span><span class="default">$s2</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">,</span><span class="default">$offset</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="comment">/*====================================================================<br />    Function to scan a string for items encapsulated within a pair of tags<br /><br />    getStrsBetween(string, tag1, &lt;tag2&gt;, &lt;offset&gt;<br /><br />    If no second tag is specified, then match between identical tags<br /><br />    Returns an array indexed with the encapsulated text, which is in turn<br />    a sub-array, containing the position of each item.<br /><br />    Notes:<br />    strpos($needle,$haystack,$offset)<br />    substr($string,$start,$length)<br /><br />    ====================================================================*/<br /><br />    </span><span class="keyword">if( </span><span class="default">$s2 </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">) { </span><span class="default">$s2 </span><span class="keyword">= </span><span class="default">$s1</span><span class="keyword">; }<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    </span><span class="default">$L1 </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">);<br />    </span><span class="default">$L2 </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s2</span><span class="keyword">);<br /><br />    if( </span><span class="default">$L1</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$L2</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    do {<br />        </span><span class="default">$pos1 </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$s1</span><span class="keyword">,</span><span class="default">$offset</span><span class="keyword">);<br /><br />        if( </span><span class="default">$pos1 </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">) {<br />            </span><span class="default">$pos1 </span><span class="keyword">+= </span><span class="default">$L1</span><span class="keyword">;<br /><br />            </span><span class="default">$pos2 </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$s2</span><span class="keyword">,</span><span class="default">$pos1</span><span class="keyword">);<br /><br />            if( </span><span class="default">$pos2 </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">) {<br />                </span><span class="default">$key_len </span><span class="keyword">= </span><span class="default">$pos2 </span><span class="keyword">- </span><span class="default">$pos1</span><span class="keyword">;<br /><br />                </span><span class="default">$this_key </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$pos1</span><span class="keyword">,</span><span class="default">$key_len</span><span class="keyword">);<br /><br />                if( !</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$this_key</span><span class="keyword">,</span><span class="default">$result</span><span class="keyword">) ) {<br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$this_key</span><span class="keyword">] = array();<br />                }<br /><br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$this_key</span><span class="keyword">][] = </span><span class="default">$pos1</span><span class="keyword">;<br /><br />                </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$pos2 </span><span class="keyword">+ </span><span class="default">$L2</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$pos1 </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            }<br />        }<br />    } while(</span><span class="default">$pos1 </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">);<br /><br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82229">  <div class="votes">
    <div id="Vu82229">
    <a href="/manual/vote-note.php?id=82229&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82229">
    <a href="/manual/vote-note.php?id=82229&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82229" title="59% like this...">
    8
    </div>
  </div>
  <a href="#82229" class="name">
  <strong class="user"><em>ilaymyhat-rem0ve at yahoo dot com</em></strong></a><a class="genanchor" href="#82229"> &para;</a><div class="date" title="2008-04-01 04:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82229">
<div class="phpcode"><code><span class="html">This might be useful.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">String</span><span class="keyword">{
<br />    
<br />    </span><span class="comment">//Look for a $needle in $haystack in any position
<br />    </span><span class="keyword">public static function </span><span class="default">contains</span><span class="keyword">(&amp;</span><span class="default">$haystack</span><span class="keyword">, &amp;</span><span class="default">$needle</span><span class="keyword">, &amp;</span><span class="default">$offset</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);
<br />        return </span><span class="default">$result </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">;
<br />    }
<br />    
<br />    </span><span class="comment">//intuitive implementation .. if not found returns -1.
<br />    </span><span class="keyword">public static function </span><span class="default">strpos</span><span class="keyword">(&amp;</span><span class="default">$haystack</span><span class="keyword">, &amp;</span><span class="default">$needle</span><span class="keyword">, &amp;</span><span class="default">$offset</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);
<br />        if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">FALSE </span><span class="keyword">)
<br />        {
<br />            return -</span><span class="default">1</span><span class="keyword">;
<br />        }
<br />        return </span><span class="default">$result</span><span class="keyword">;
<br />    }
<br />    
<br />}</span><span class="comment">//String
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121006">  <div class="votes">
    <div id="Vu121006">
    <a href="/manual/vote-note.php?id=121006&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121006">
    <a href="/manual/vote-note.php?id=121006&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121006" title="56% like this...">
    2
    </div>
  </div>
  <a href="#121006" class="name">
  <strong class="user"><em>eef dot vreeland at gmail dot com</em></strong></a><a class="genanchor" href="#121006"> &para;</a><div class="date" title="2017-04-22 01:16"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121006">
<div class="phpcode"><code><span class="html">To prevent others from staring at the text, note that the wording of the 'Return Values' section is ambiguous.<br /><br />Let's say you have a string $myString containing 50 'a's except on position 3 and 43, they contain 'b'.<br />And for this moment, forget that counting starts from 0.<br /><br />strpos($myString, 'b', 40) returns 43, great.<br /><br />And now the text: "Returns the position of where the needle exists relative to the beginning of the haystack string (independent of offset)."<br /><br />So it doesn't really matter what offset I specify; I'll get the REAL position of the first occurrence in return, which is 3?<br /><br />... no ...<br /><br />"independent of offset" means, you will get the REAL positions, thus, not relative to your starting point (offset).<br /><br />Substract your offset from strpos()'s answer, then you have the position relative to YOUR offset.</span></code></div>
  </div>
 </div>
  <div class="note" id="102773">  <div class="votes">
    <div id="Vu102773">
    <a href="/manual/vote-note.php?id=102773&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102773">
    <a href="/manual/vote-note.php?id=102773&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102773" title="54% like this...">
    10
    </div>
  </div>
  <a href="#102773" class="name">
  <strong class="user"><em>akarmenia at gmail dot com</em></strong></a><a class="genanchor" href="#102773"> &para;</a><div class="date" title="2011-03-05 04:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102773">
<div class="phpcode"><code><span class="html">My version of strpos with needles as an array. Also allows for a string, or an array inside an array.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strpos_array</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">) {<br />    if ( </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$needles</span><span class="keyword">) ) {<br />        foreach (</span><span class="default">$needles </span><span class="keyword">as </span><span class="default">$str</span><span class="keyword">) {<br />            if ( </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) ) {<br />                </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos_array</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />            }<br />            if (</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) {<br />                return </span><span class="default">$pos</span><span class="keyword">;<br />            }<br />        }<br />    } else {<br />        return </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">// Test<br /></span><span class="keyword">echo </span><span class="default">strpos_array</span><span class="keyword">(</span><span class="string">'This is a test'</span><span class="keyword">, array(</span><span class="string">'test'</span><span class="keyword">, </span><span class="string">'drive'</span><span class="keyword">)); </span><span class="comment">// Output is 10<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122639">  <div class="votes">
    <div id="Vu122639">
    <a href="/manual/vote-note.php?id=122639&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122639">
    <a href="/manual/vote-note.php?id=122639&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122639" title="54% like this...">
    1
    </div>
  </div>
  <a href="#122639" class="name">
  <strong class="user"><em>marvin_elia at web dot de</em></strong></a><a class="genanchor" href="#122639"> &para;</a><div class="date" title="2018-04-19 09:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122639">
<div class="phpcode"><code><span class="html">Find position of nth occurrence of a string:<br /><br />    function strpos_occurrence(string $string, string $needle, int $occurrence, int $offset = null) {<br />        if((0 &lt; $occurrence) &amp;&amp; ($length = strlen($needle))) {<br />            do {<br />            } while ((false !== $offset = strpos($string, $needle, $offset)) &amp;&amp; --$occurrence &amp;&amp; ($offset += $length));<br />            return $offset;<br />        }<br />        return false;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="93816">  <div class="votes">
    <div id="Vu93816">
    <a href="/manual/vote-note.php?id=93816&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93816">
    <a href="/manual/vote-note.php?id=93816&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93816" title="54% like this...">
    4
    </div>
  </div>
  <a href="#93816" class="name">
  <strong class="user"><em>digitalpbk [at] gmail.com</em></strong></a><a class="genanchor" href="#93816"> &para;</a><div class="date" title="2009-09-30 08:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93816">
<div class="phpcode"><code><span class="html">This function raises a warning if the offset is not between 0 and the length of string:
<br />
<br />Warning: strpos(): Offset not contained in string in %s on line %d</span></code></div>
  </div>
 </div>
  <div class="note" id="115284">  <div class="votes">
    <div id="Vu115284">
    <a href="/manual/vote-note.php?id=115284&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115284">
    <a href="/manual/vote-note.php?id=115284&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115284" title="53% like this...">
    4
    </div>
  </div>
  <a href="#115284" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#115284"> &para;</a><div class="date" title="2014-06-27 10:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115284">
<div class="phpcode"><code><span class="html">Be careful when the $haystack or $needle parameter is an integer.<br />If you are not sure of its type, you should  convert it into a string.<br /><span class="default">&lt;?php<br />    var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">12345</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));</span><span class="comment">//false<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">12345</span><span class="keyword">,</span><span class="string">'1'</span><span class="keyword">));</span><span class="comment">//0<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">'12345'</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));</span><span class="comment">//false<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">'12345'</span><span class="keyword">,</span><span class="string">'1'</span><span class="keyword">));</span><span class="comment">//0<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">12345</span><span class="keyword">;<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">strval</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">),</span><span class="default">strval</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)));</span><span class="comment">//0<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">((string)</span><span class="default">$a</span><span class="keyword">,(string)</span><span class="default">$b</span><span class="keyword">));</span><span class="comment">//0    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99332">  <div class="votes">
    <div id="Vu99332">
    <a href="/manual/vote-note.php?id=99332&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99332">
    <a href="/manual/vote-note.php?id=99332&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99332" title="54% like this...">
    2
    </div>
  </div>
  <a href="#99332" class="name">
  <strong class="user"><em>usulaco at gmail dot com</em></strong></a><a class="genanchor" href="#99332"> &para;</a><div class="date" title="2010-08-11 05:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99332">
<div class="phpcode"><code><span class="html">Parse strings between two others in to array.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">g</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">){
<br />     </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/' </span><span class="keyword">. </span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">) . </span><span class="string">'(.*?)'</span><span class="keyword">. </span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">).</span><span class="string">'/i'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">);
<br />     </span><span class="default">$out </span><span class="keyword">= array();
<br />
<br />     foreach(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){
<br />       </span><span class="default">$type </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'::'</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">);
<br />       if(</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">)&gt;</span><span class="default">1</span><span class="keyword">){
<br />          if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">[</span><span class="default">$type</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]]))
<br />             </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$type</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]] = array();
<br />          </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$type</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]][] = </span><span class="default">$type</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />       } else {
<br />          </span><span class="default">$out</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;
<br />       }
<br />     }
<br />  return </span><span class="default">$out</span><span class="keyword">;
<br />}
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">g</span><span class="keyword">(</span><span class="string">'Sample text, [/text to extract/] Rest of sample text [/WEB::<a href="http://google.com/]" rel="nofollow" target="_blank">http://google.com/]</a> bla bla bla. '</span><span class="keyword">,</span><span class="string">'[/'</span><span class="keyword">,</span><span class="string">'/]'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />results:
<br />Array
<br />(
<br />    [0] =&gt; text to extract
<br />    [WEB] =&gt; Array
<br />        (
<br />            [0] =&gt; <a href="http://google.com" rel="nofollow" target="_blank">http://google.com</a>
<br />        )
<br />
<br />)
<br />
<br />Can be helpfull to custom parsing :)</span></code></div>
  </div>
 </div>
  <div class="note" id="117028">  <div class="votes">
    <div id="Vu117028">
    <a href="/manual/vote-note.php?id=117028&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117028">
    <a href="/manual/vote-note.php?id=117028&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117028" title="53% like this...">
    1
    </div>
  </div>
  <a href="#117028" class="name">
  <strong class="user"><em>lairdshaw at yahoo dot com dot au</em></strong></a><a class="genanchor" href="#117028"> &para;</a><div class="date" title="2015-04-03 06:02"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117028">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/*<br /> * A strpos variant that accepts an array of $needles - or just a string,<br /> * so that it can be used as a drop-in replacement for the standard strpos,<br /> * and in which case it simply wraps around strpos and stripos so as not<br /> * to reduce performance.<br /> *<br /> * The "m" in "strposm" indicates that it accepts *m*ultiple needles.<br /> *<br /> * Finds the earliest match of *all* needles. Returns the position of this match<br /> * or false if none found, as does the standard strpos. Optionally also returns<br /> * via $match either the matching needle as a string (by default) or the index<br /> * into $needles of the matching needle (if the STRPOSM_MATCH_AS_INDEX flag is<br /> * set).<br /> *<br /> * Case-insensitive searching can be specified via the STRPOSM_CI flag.<br /> * Note that for case-insensitive searches, if the STRPOSM_MATCH_AS_INDEX is<br /> * not set, then $match will be in the haystack's case, not the needle's case,<br /> * unless the STRPOSM_NC flag is also set.<br /> *<br /> * Flags can be combined using the bitwise or operator,<br /> * e.g. $flags = STRPOSM_CI|STRPOSM_NC<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'STRPOSM_CI'            </span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="comment">// CI =&gt; "case insensitive".<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'STRPOSM_NC'            </span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// NC =&gt; "needle case".<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'STRPOSM_MATCH_AS_INDEX'</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />function </span><span class="default">strposm</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, &amp;</span><span class="default">$match </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="comment">// In the special case where $needles is not an array, simply wrap<br />    // strpos and stripos for performance reasons.<br />    </span><span class="keyword">if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$needles</span><span class="keyword">)) {<br />        </span><span class="default">$func </span><span class="keyword">= </span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_CI </span><span class="keyword">? </span><span class="string">'stripos' </span><span class="keyword">: </span><span class="string">'strpos'</span><span class="keyword">;<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);<br />        if (</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$match </span><span class="keyword">= ((</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_MATCH_AS_INDEX</span><span class="keyword">)<br />                      ? </span><span class="default">0<br />                      </span><span class="keyword">: ((</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_NC</span><span class="keyword">)<br />                         ? </span><span class="default">$needles<br />                         </span><span class="keyword">: </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needles</span><span class="keyword">))<br />                        )<br />                      );<br />            return </span><span class="default">$pos</span><span class="keyword">;<br />        } else    goto </span><span class="default">strposm_no_match</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// $needles is an array. Proceed appropriately, initially by...<br />    // ...escaping regular expression meta characters in the needles.<br />    </span><span class="default">$needles_esc </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'preg_quote'</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">);<br />    </span><span class="comment">// If either of the "needle case" or "match as index" flags are set,<br />    // then create a sub-match for each escaped needle by enclosing it in<br />    // parentheses. We use these later to find the index of the matching<br />    // needle.<br />    </span><span class="keyword">if ((</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_NC</span><span class="keyword">) || (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_MATCH_AS_INDEX</span><span class="keyword">)) {<br />        </span><span class="default">$needles_esc </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(<br />            function(</span><span class="default">$needle</span><span class="keyword">) {return </span><span class="string">'('</span><span class="keyword">.</span><span class="default">$needle</span><span class="keyword">.</span><span class="string">')'</span><span class="keyword">;},<br />            </span><span class="default">$needles_esc<br />        </span><span class="keyword">);<br />    }<br />    </span><span class="comment">// Create the regular expression pattern to search for all needles.<br />    </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'('</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">$needles_esc</span><span class="keyword">).</span><span class="string">')'</span><span class="keyword">;<br />    </span><span class="comment">// If the "case insensitive" flag is set, then modify the regular<br />    // expression with "i", meaning that the match is "caseless".<br />    </span><span class="keyword">if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_CI</span><span class="keyword">) </span><span class="default">$pattern </span><span class="keyword">.= </span><span class="string">'i'</span><span class="keyword">;<br />    </span><span class="comment">// Find the first match, including its offset.<br />    </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">)) {<br />        </span><span class="comment">// Pull the first entry, the overall match, out of the matches array.<br />        </span><span class="default">$found </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">);<br />        </span><span class="comment">// If we need the index of the matching needle, then...<br />        </span><span class="keyword">if ((</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_NC</span><span class="keyword">) || (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_MATCH_AS_INDEX</span><span class="keyword">)) {<br />            </span><span class="comment">// ...find the index of the sub-match that is identical<br />            // to the overall match that we just pulled out.<br />            // Because sub-matches are in the same order as needles,<br />            // this is also the index into $needles of the matching<br />            // needle.<br />            </span><span class="default">$index </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$found</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />        }<br />        </span><span class="comment">// If the "match as index" flag is set, then return in $match<br />        // the matching needle's index, otherwise...<br />        </span><span class="default">$match </span><span class="keyword">= ((</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_MATCH_AS_INDEX</span><span class="keyword">)<br />          ? </span><span class="default">$index<br />          </span><span class="comment">// ...if the "needle case" flag is set, then index into<br />          // $needles using the previously-determined index to return<br />          // in $match the matching needle in needle case, otherwise...<br />          </span><span class="keyword">: ((</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_NC</span><span class="keyword">)<br />             ? </span><span class="default">$needles</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]<br />             </span><span class="comment">// ...by default, return in $match the matching needle in<br />             // haystack case.<br />             </span><span class="keyword">: </span><span class="default">$found</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]<br />          )<br />        );<br />        </span><span class="comment">// Return the captured offset.<br />        </span><span class="keyword">return </span><span class="default">$found</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br /></span><span class="default">strposm_no_match</span><span class="keyword">:<br />    </span><span class="comment">// Nothing matched. Set appropriate return values.<br />    </span><span class="default">$match </span><span class="keyword">= (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">STRPOSM_MATCH_AS_INDEX</span><span class="keyword">) ? </span><span class="default">false </span><span class="keyword">: </span><span class="default">null</span><span class="keyword">;<br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89788">  <div class="votes">
    <div id="Vu89788">
    <a href="/manual/vote-note.php?id=89788&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89788">
    <a href="/manual/vote-note.php?id=89788&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89788" title="52% like this...">
    2
    </div>
  </div>
  <a href="#89788" class="name">
  <strong class="user"><em>teddanzig at yahoo dot com</em></strong></a><a class="genanchor" href="#89788"> &para;</a><div class="date" title="2009-03-23 09:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89788">
<div class="phpcode"><code><span class="html">routine to return -1 if there is no match for strpos
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//instr function to mimic vb instr fucntion
<br /></span><span class="keyword">function </span><span class="default">InStr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">);
<br />    if (</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">)
<br />    {
<br />        return </span><span class="default">$pos</span><span class="keyword">;
<br />    }
<br />    else
<br />    {
<br />        return -</span><span class="default">1</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123659">  <div class="votes">
    <div id="Vu123659">
    <a href="/manual/vote-note.php?id=123659&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123659">
    <a href="/manual/vote-note.php?id=123659&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123659" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123659" class="name">
  <strong class="user"><em>Jean</em></strong></a><a class="genanchor" href="#123659"> &para;</a><div class="date" title="2019-03-05 05:50"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123659">
<div class="phpcode"><code><span class="html">When a value can be of "unknow" type, I find this conversion trick usefull and more readable than a formal casting (for php7.3+):<br /><br /><span class="default">&lt;?php<br />$time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">'This is a test: ' </span><span class="keyword">. </span><span class="default">$time</span><span class="keyword">;<br />echo (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">? </span><span class="string">'found' </span><span class="keyword">: </span><span class="string">'not found'</span><span class="keyword">);<br />echo (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">"</span><span class="default">$time</span><span class="string">"</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">? </span><span class="string">'found' </span><span class="keyword">: </span><span class="string">'not found'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41762">  <div class="votes">
    <div id="Vu41762">
    <a href="/manual/vote-note.php?id=41762&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41762">
    <a href="/manual/vote-note.php?id=41762&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41762" title="52% like this...">
    2
    </div>
  </div>
  <a href="#41762" class="name">
  <strong class="user"><em>bishop</em></strong></a><a class="genanchor" href="#41762"> &para;</a><div class="date" title="2004-04-21 03:38"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41762">
<div class="phpcode"><code><span class="html">Code like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="string">'this is a test'</span><span class="keyword">, </span><span class="string">'is'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"found it"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />gets repetitive, is not very self-explanatory, and most people handle it incorrectly anyway. Make your life easier:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_contains</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$ignoreCase </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />    if (</span><span class="default">$ignoreCase</span><span class="keyword">) {<br />        </span><span class="default">$haystack </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">);<br />        </span><span class="default">$needle   </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">);<br />    }<br />    </span><span class="default">$needlePos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">);<br />    return (</span><span class="default">$needlePos </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">? </span><span class="default">false </span><span class="keyword">: (</span><span class="default">$needlePos</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />Then, you may do:<br /><span class="default">&lt;?php<br /></span><span class="comment">// simplest use<br /></span><span class="keyword">if (</span><span class="default">str_contains</span><span class="keyword">(</span><span class="string">'this is a test'</span><span class="keyword">, </span><span class="string">'is'</span><span class="keyword">)) {<br />    echo </span><span class="string">"Found it"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// when you need the position, as well whether it's present<br /></span><span class="default">$needlePos </span><span class="keyword">= </span><span class="default">str_contains</span><span class="keyword">(</span><span class="string">'this is a test'</span><span class="keyword">, </span><span class="string">'is'</span><span class="keyword">);<br />if (</span><span class="default">$needlePos</span><span class="keyword">) {<br />    echo </span><span class="string">'Found it at position ' </span><span class="keyword">. (</span><span class="default">$needlePos</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// you may also ignore case<br /></span><span class="default">$needlePos </span><span class="keyword">= </span><span class="default">str_contains</span><span class="keyword">(</span><span class="string">'this is a test'</span><span class="keyword">, </span><span class="string">'IS'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />if (</span><span class="default">$needlePos</span><span class="keyword">) {<br />    echo </span><span class="string">'Found it at position ' </span><span class="keyword">. (</span><span class="default">$needlePos</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94469">  <div class="votes">
    <div id="Vu94469">
    <a href="/manual/vote-note.php?id=94469&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94469">
    <a href="/manual/vote-note.php?id=94469&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94469" title="51% like this...">
    1
    </div>
  </div>
  <a href="#94469" class="name">
  <strong class="user"><em>Achintya</em></strong></a><a class="genanchor" href="#94469"> &para;</a><div class="date" title="2009-11-06 02:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94469">
<div class="phpcode"><code><span class="html">A function I made to find the first occurrence of a particular needle not enclosed in quotes(single or double). Works for simple nesting (no backslashed nesting allowed).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">strposq</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){
<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">);
<br />    </span><span class="default">$charlen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">);
<br />    </span><span class="default">$flag1 </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />    </span><span class="default">$flag2 </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$offset</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){
<br />        if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) == </span><span class="string">"'"</span><span class="keyword">){
<br />            </span><span class="default">$flag1 </span><span class="keyword">= !</span><span class="default">$flag1 </span><span class="keyword">&amp;&amp; !</span><span class="default">$flag2 </span><span class="keyword">? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />        if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) == </span><span class="string">'"'</span><span class="keyword">){
<br />            </span><span class="default">$flag2 </span><span class="keyword">= !</span><span class="default">$flag1 </span><span class="keyword">&amp;&amp; !</span><span class="default">$flag2 </span><span class="keyword">? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />        if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$charlen</span><span class="keyword">) == </span><span class="default">$needle </span><span class="keyword">&amp;&amp; !</span><span class="default">$flag1 </span><span class="keyword">&amp;&amp; !</span><span class="default">$flag2</span><span class="keyword">){
<br />            return </span><span class="default">$i</span><span class="keyword">;        
<br />        }
<br />    }
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />}
<br />
<br />echo </span><span class="default">strposq</span><span class="keyword">(</span><span class="string">"he'llo'character;\"'som\"e;crap"</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">); </span><span class="comment">//16
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116062">  <div class="votes">
    <div id="Vu116062">
    <a href="/manual/vote-note.php?id=116062&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116062">
    <a href="/manual/vote-note.php?id=116062&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116062" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#116062" class="name">
  <strong class="user"><em>qrworld.net</em></strong></a><a class="genanchor" href="#116062"> &para;</a><div class="date" title="2014-11-04 04:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116062">
<div class="phpcode"><code><span class="html">I found a function in this post <a href="http://softontherocks.blogspot.com/2014/11/buscar-multiples-textos-en-un-texto-con.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/11/buscar-multiples-textos-en-un-texto-con.html</a> <br />that implements the search in both ways, case sensitive or case insensitive, depending on an input parameter.<br /><br />The function is:<br /><br />function getMultiPos($haystack, $needles, $sensitive=true, $offset=0){<br />    foreach($needles as $needle) {<br />        $result[$needle] = ($sensitive) ? strpos($haystack, $needle, $offset) : stripos($haystack, $needle, $offset);<br />    }<br />    return $result;<br />}<br /><br />It was very useful for me.</span></code></div>
  </div>
 </div>
  <div class="note" id="111422">  <div class="votes">
    <div id="Vu111422">
    <a href="/manual/vote-note.php?id=111422&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111422">
    <a href="/manual/vote-note.php?id=111422&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111422" title="46% like this...">
    -4
    </div>
  </div>
  <a href="#111422" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#111422"> &para;</a><div class="date" title="2013-02-18 09:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111422">
<div class="phpcode"><code><span class="html">The most straightforward way to prevent this function from returning 0 is:<br /><br />  strpos('x'.$haystack, $needle, 1)<br /><br />The 'x' is simply a garbage character which is only there to move everything 1 position.<br />The number 1 is there to make sure that this 'x' is ignored in the search.<br />This way, if $haystack starts with $needle, then the function returns 1 (rather than 0).</span></code></div>
  </div>
 </div>
  <div class="note" id="87061">  <div class="votes">
    <div id="Vu87061">
    <a href="/manual/vote-note.php?id=87061&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87061">
    <a href="/manual/vote-note.php?id=87061&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87061" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#87061" class="name">
  <strong class="user"><em>Tim</em></strong></a><a class="genanchor" href="#87061"> &para;</a><div class="date" title="2008-11-17 05:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87061">
<div class="phpcode"><code><span class="html">If you would like to find all occurences of a needle inside a haystack you could use this function strposall($haystack,$needle);. It will return an array with all the strpos's.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * strposall
<br /> * 
<br /> * Find all occurrences of a needle in a haystack
<br /> *
<br /> * @param string $haystack
<br /> * @param string $needle
<br /> * @return array or false
<br /> */
<br /></span><span class="keyword">function </span><span class="default">strposall</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,</span><span class="default">$needle</span><span class="keyword">){
<br />    
<br />    </span><span class="default">$s</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    
<br />    while (</span><span class="default">is_integer</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)){
<br />        
<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,</span><span class="default">$needle</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">);
<br />        
<br />        if (</span><span class="default">is_integer</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)) { 
<br />            </span><span class="default">$aStrPos</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">; 
<br />            </span><span class="default">$s </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">+</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">); 
<br />        }
<br />    }
<br />    if (isset(</span><span class="default">$aStrPos</span><span class="keyword">)) { 
<br />        return </span><span class="default">$aStrPos</span><span class="keyword">; 
<br />    } 
<br />    else { 
<br />        return </span><span class="default">false</span><span class="keyword">; 
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92849">  <div class="votes">
    <div id="Vu92849">
    <a href="/manual/vote-note.php?id=92849&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92849">
    <a href="/manual/vote-note.php?id=92849&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92849" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#92849" class="name">
  <strong class="user"><em>ah dot d at hotmail dot com</em></strong></a><a class="genanchor" href="#92849"> &para;</a><div class="date" title="2009-08-11 01:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92849">
<div class="phpcode"><code><span class="html">A strpos modification to return an array of all the positions of a needle in the haystack 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">strallpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,</span><span class="default">$needle</span><span class="keyword">,</span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){
<br />    </span><span class="default">$result </span><span class="keyword">= array();
<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$offset</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++){
<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,</span><span class="default">$needle</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);
<br />        if(</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">){
<br />            </span><span class="default">$offset </span><span class="keyword">=  </span><span class="default">$pos</span><span class="keyword">;
<br />            if(</span><span class="default">$offset </span><span class="keyword">&gt;= </span><span class="default">$i</span><span class="keyword">){
<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$offset</span><span class="keyword">;
<br />                </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$offset</span><span class="keyword">;
<br />            }
<br />        }
<br />    }
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />example:-
<br />
<br /><span class="default">&lt;?php
<br />$haystack </span><span class="keyword">= </span><span class="string">"ASD is trying to get out of the ASDs cube but the other ASDs told him that his behavior will destroy the ASDs world"</span><span class="keyword">;
<br />
<br /></span><span class="default">$needle </span><span class="keyword">= </span><span class="string">"ASD"</span><span class="keyword">;
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">strallpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,</span><span class="default">$needle</span><span class="keyword">));
<br />
<br /></span><span class="comment">//getting all the positions starting from a specified position
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">strallpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,</span><span class="default">$needle</span><span class="keyword">,</span><span class="default">34</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121715">  <div class="votes">
    <div id="Vu121715">
    <a href="/manual/vote-note.php?id=121715&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121715">
    <a href="/manual/vote-note.php?id=121715&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121715" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#121715" class="name">
  <strong class="user"><em>Lhenry</em></strong></a><a class="genanchor" href="#121715"> &para;</a><div class="date" title="2017-10-03 09:34"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121715">
<div class="phpcode"><code><span class="html">note that strpos( "8 june 1970"  ,  1970 ) returns FALSE.. <br /><br />add quotes to the needle</span></code></div>
  </div>
 </div>
  <div class="note" id="113911">  <div class="votes">
    <div id="Vu113911">
    <a href="/manual/vote-note.php?id=113911&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113911">
    <a href="/manual/vote-note.php?id=113911&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113911" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#113911" class="name">
  <strong class="user"><em>Lurvik</em></strong></a><a class="genanchor" href="#113911"> &para;</a><div class="date" title="2013-12-16 07:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113911">
<div class="phpcode"><code><span class="html">Don't know if already posted this, but if I did this is an improvement.<br /><br />This function will check if a string contains  a needle. It _will_ work with arrays and multidimensional arrays (I've tried with a &gt; 16 dimensional array and had no problem).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_contains</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needles</span><span class="keyword">)<br />{<br />    </span><span class="comment">//If needles is an array<br />    </span><span class="keyword">if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$needles</span><span class="keyword">))<br />    {<br />        </span><span class="comment">//go trough all the elements<br />        </span><span class="keyword">foreach(</span><span class="default">$needles </span><span class="keyword">as </span><span class="default">$needle</span><span class="keyword">)<br />        {<br />            </span><span class="comment">//if the needle is also an array (ie needles is a multidimensional array)<br />            </span><span class="keyword">if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">))<br />            {<br />                </span><span class="comment">//call this function again<br />                </span><span class="keyword">if(</span><span class="default">str_contains</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">))<br />                {<br />                    </span><span class="comment">//Will break out of loop and function.<br />                    </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />                }<br />                <br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br /><br />            </span><span class="comment">//when the needle is NOT an array:<br />                //Check if haystack contains the needle, will ignore case and check for whole words only<br />            </span><span class="keyword">elseif(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/\b</span><span class="default">$needle</span><span class="string">\b/i"</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">) !== </span><span class="default">0</span><span class="keyword">)<br />            {<br />                return </span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    </span><span class="comment">//if $needles is not an array...<br />    </span><span class="keyword">else<br />    {<br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/\b</span><span class="default">$needles</span><span class="string">\b/i"</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">) !== </span><span class="default">0</span><span class="keyword">)<br />        {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70394">  <div class="votes">
    <div id="Vu70394">
    <a href="/manual/vote-note.php?id=70394&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70394">
    <a href="/manual/vote-note.php?id=70394&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70394" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#70394" class="name">
  <strong class="user"><em>spinicrus at gmail dot com</em></strong></a><a class="genanchor" href="#70394"> &para;</a><div class="date" title="2006-10-14 10:58"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70394">
<div class="phpcode"><code><span class="html">if you want to get the position of a substring relative to a substring of your string, BUT in REVERSE way:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">strpos_reverse_way</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$charToFind</span><span class="keyword">,</span><span class="default">$relativeChar</span><span class="keyword">) {<br />    </span><span class="comment">//<br />    </span><span class="default">$relativePos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$relativeChar</span><span class="keyword">);<br />    </span><span class="default">$searchPos </span><span class="keyword">= </span><span class="default">$relativePos</span><span class="keyword">;<br />    </span><span class="default">$searchChar </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="comment">//<br />    </span><span class="keyword">while (</span><span class="default">$searchChar </span><span class="keyword">!= </span><span class="default">$charToFind</span><span class="keyword">) {<br />        </span><span class="default">$newPos </span><span class="keyword">= </span><span class="default">$searchPos</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$searchChar </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$newPos</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$charToFind</span><span class="keyword">));<br />        </span><span class="default">$searchPos </span><span class="keyword">= </span><span class="default">$newPos</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//<br />    </span><span class="keyword">if (!empty(</span><span class="default">$searchChar</span><span class="keyword">)) {<br />        </span><span class="comment">//<br />        </span><span class="keyword">return </span><span class="default">$searchPos</span><span class="keyword">;<br />        return </span><span class="default">TRUE</span><span class="keyword">;<br />    }<br />    else {<br />        return </span><span class="default">FALSE</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125535">  <div class="votes">
    <div id="Vu125535">
    <a href="/manual/vote-note.php?id=125535&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125535">
    <a href="/manual/vote-note.php?id=125535&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125535" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#125535" class="name">
  <strong class="user"><em>sunmacet at gmail dot com</em></strong></a><a class="genanchor" href="#125535"> &para;</a><div class="date" title="2020-11-23 10:14"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125535">
<div class="phpcode"><code><span class="html">To check that a substring is present.<br /><br />Confusing check if position is not false:<br /><br />if ( strpos ( $haystack , $needle ) !== FALSE )<br /><br />Logical check if there is position:<br /><br />if ( is_int ( strpos ( $haystack , $needle ) ) )</span></code></div>
  </div>
 </div>
  <div class="note" id="106407">  <div class="votes">
    <div id="Vu106407">
    <a href="/manual/vote-note.php?id=106407&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106407">
    <a href="/manual/vote-note.php?id=106407&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106407" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#106407" class="name">
  <strong class="user"><em>gjh42 - simonokewode at hotmail dot com</em></strong></a><a class="genanchor" href="#106407"> &para;</a><div class="date" title="2011-11-07 07:59"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106407">
<div class="phpcode"><code><span class="html">A pair of functions to replace every nth occurrence of a string with another string, starting at any position in the haystack. The first works on a string and the second works on a single-level array of strings, treating it as a single string for replacement purposes (any needles split over two array elements are ignored).<br /><br />Can be used for formatting dynamically-generated HTML output without touching the original generator: e.g. add a newLine class tag to every third item in a floated list, starting with the fourth item.<br /> <br /><span class="default">&lt;?php<br /></span><span class="comment">/* String Replace at Intervals   by Glenn Herbert (gjh42)    2010-12-17<br /> */<br /> <br />//(basic locator by someone else - name unknown)<br />//strnposr() - Find the position of nth needle in haystack.<br /></span><span class="keyword">function </span><span class="default">strnposr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$occurrence</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    return (</span><span class="default">$occurrence</span><span class="keyword">&lt;</span><span class="default">2</span><span class="keyword">)?</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">):</span><span class="default">strnposr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">,</span><span class="default">$needle</span><span class="keyword">,</span><span class="default">$occurrence</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//gjh42<br />//replace every nth occurrence of $needle with $repl, starting from any position<br /></span><span class="keyword">function </span><span class="default">str_replace_int</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$repl</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$interval</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {<br />  if (</span><span class="default">$pos </span><span class="keyword">&gt;= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">) or </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">) &lt; </span><span class="default">$first</span><span class="keyword">) return </span><span class="default">$haystack</span><span class="keyword">;<br />  </span><span class="default">$firstpos </span><span class="keyword">= </span><span class="default">strnposr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);<br />  </span><span class="default">$nl </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">);<br />  </span><span class="default">$qty </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$firstpos </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">)/</span><span class="default">$interval</span><span class="keyword">);<br />  do { </span><span class="comment">//in reverse order<br />    </span><span class="default">$nextpos </span><span class="keyword">= </span><span class="default">strnposr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, (</span><span class="default">$qty </span><span class="keyword">* </span><span class="default">$interval</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">, </span><span class="default">$firstpos</span><span class="keyword">); <br />    </span><span class="default">$qty</span><span class="keyword">--;<br />    </span><span class="default">$haystack </span><span class="keyword">= </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$repl</span><span class="keyword">, </span><span class="default">$nextpos</span><span class="keyword">, </span><span class="default">$nl</span><span class="keyword">);<br />  } while (</span><span class="default">$nextpos </span><span class="keyword">&gt; </span><span class="default">$firstpos</span><span class="keyword">);<br />  return </span><span class="default">$haystack</span><span class="keyword">;<br />}<br />  </span><span class="comment">//$needle = string to find<br />  //$repl = string to replace needle<br />  //$haystack = string to do replacing in<br />  //$interval = number of needles in loop<br />  //$first=1 = first occurrence of needle to replace (defaults to first) <br />  //$pos=0 = position in haystack string to start from (defaults to first) <br /> <br />//replace every nth occurrence of $needle with $repl, starting from any position, in a single-level array<br /></span><span class="keyword">function </span><span class="default">arr_replace_int</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$repl</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$interval</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$glue</span><span class="keyword">=</span><span class="string">'|+|'</span><span class="keyword">) {<br />  if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">))  return </span><span class="default">$arr</span><span class="keyword">;<br />  foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) return </span><span class="default">$arr</span><span class="keyword">;<br />  }<br />  </span><span class="default">$haystack </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$glue</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br />  </span><span class="default">$haystack </span><span class="keyword">= </span><span class="default">str_replace_int</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$repl</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$interval</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);<br />  </span><span class="default">$tarr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$glue</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">);<br />  </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){<br />    </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$tarr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    </span><span class="default">$i</span><span class="keyword">++;<br />  }<br />  return </span><span class="default">$arr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>If $arr is not an array, or a multilevel array, it is returned unchanged.</span></code></div>
  </div>
 </div>
  <div class="note" id="99440">  <div class="votes">
    <div id="Vu99440">
    <a href="/manual/vote-note.php?id=99440&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99440">
    <a href="/manual/vote-note.php?id=99440&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99440" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#99440" class="name">
  <strong class="user"><em>gambajaja at yahoo dot com</em></strong></a><a class="genanchor" href="#99440"> &para;</a><div class="date" title="2010-08-17 03:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99440">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$my_array </span><span class="keyword">= array (</span><span class="string">'100,101'</span><span class="keyword">, </span><span class="string">'200,201'</span><span class="keyword">, </span><span class="string">'300,301'</span><span class="keyword">);<br /></span><span class="default">$check_me_in </span><span class="keyword">= array (</span><span class="string">'100'</span><span class="keyword">,</span><span class="string">'200'</span><span class="keyword">,</span><span class="string">'300'</span><span class="keyword">,</span><span class="string">'400'</span><span class="keyword">);<br />foreach (</span><span class="default">$check_me_in </span><span class="keyword">as </span><span class="default">$value_cmi</span><span class="keyword">){<br />    </span><span class="default">$is_in</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">; </span><span class="comment">#asume that $check_me_in isn't in $my_array<br />    </span><span class="keyword">foreach (</span><span class="default">$my_array </span><span class="keyword">as </span><span class="default">$value_my</span><span class="keyword">){<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$value_my</span><span class="keyword">, </span><span class="default">$value_cmi</span><span class="keyword">);<br />        if (</span><span class="default">$pos</span><span class="keyword">===</span><span class="default">0</span><span class="keyword">)<br />            </span><span class="default">$pos</span><span class="keyword">++;<br />        if (</span><span class="default">$pos</span><span class="keyword">==</span><span class="default">TRUE</span><span class="keyword">){<br />            </span><span class="default">$is_in</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">;<br />            </span><span class="default">$value_my2</span><span class="keyword">=</span><span class="default">$value_my</span><span class="keyword">;<br />            }<br />    }<br />    if (</span><span class="default">$is_in</span><span class="keyword">) echo </span><span class="string">"ID </span><span class="default">$value_cmi</span><span class="string"> in \$check_me_in I found in value '</span><span class="default">$value_my2</span><span class="string">' \n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The above example will output<br />ID 100 in $check_me_in I found in value '100,101' <br />ID 200 in $check_me_in I found in value '200,201' <br />ID 300 in $check_me_in I found in value '300,301'</span></code></div>
  </div>
 </div>
  <div class="note" id="93887">  <div class="votes">
    <div id="Vu93887">
    <a href="/manual/vote-note.php?id=93887&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93887">
    <a href="/manual/vote-note.php?id=93887&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93887" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#93887" class="name">
  <strong class="user"><em>yasindagli at gmail dot com</em></strong></a><a class="genanchor" href="#93887"> &para;</a><div class="date" title="2009-10-05 09:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93887">
<div class="phpcode"><code><span class="html">This function finds postion of nth occurence of a letter starting from offset.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">nth_position</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$letter</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){<br />    </span><span class="default">$str_arr </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$letter_size </span><span class="keyword">= </span><span class="default">array_count_values</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">)));<br />    if( !isset(</span><span class="default">$letter_size</span><span class="keyword">[</span><span class="default">$letter</span><span class="keyword">])){<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'letter "' </span><span class="keyword">. </span><span class="default">$letter </span><span class="keyword">. </span><span class="string">'" does not exist in ' </span><span class="keyword">. </span><span class="default">$str </span><span class="keyword">. </span><span class="string">' after ' </span><span class="keyword">. </span><span class="default">$offset </span><span class="keyword">. </span><span class="string">'. position'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    } else if(</span><span class="default">$letter_size</span><span class="keyword">[</span><span class="default">$letter</span><span class="keyword">] &lt; </span><span class="default">$n</span><span class="keyword">) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'letter "' </span><span class="keyword">. </span><span class="default">$letter </span><span class="keyword">. </span><span class="string">'" does not exist ' </span><span class="keyword">. </span><span class="default">$n </span><span class="keyword">.</span><span class="string">' times in ' </span><span class="keyword">. </span><span class="default">$str </span><span class="keyword">. </span><span class="string">' after ' </span><span class="keyword">. </span><span class="default">$offset </span><span class="keyword">. </span><span class="string">'. position'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$count </span><span class="keyword">= (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$str_arr</span><span class="keyword">) - </span><span class="default">$offset</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">!= </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />        if(</span><span class="default">$str_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">$letter</span><span class="keyword">){<br />            </span><span class="default">$x</span><span class="keyword">++;<br />        }<br />    }<br />    return </span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">nth_position</span><span class="keyword">(</span><span class="string">'foobarbaz'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">//7<br /></span><span class="keyword">echo </span><span class="default">nth_position</span><span class="keyword">(</span><span class="string">'foobarbaz'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">); </span><span class="comment">//6<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124562">  <div class="votes">
    <div id="Vu124562">
    <a href="/manual/vote-note.php?id=124562&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124562">
    <a href="/manual/vote-note.php?id=124562&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124562" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#124562" class="name">
  <strong class="user"><em>ds at kala-it dot de</em></strong></a><a class="genanchor" href="#124562"> &para;</a><div class="date" title="2020-01-03 09:35"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124562">
<div class="phpcode"><code><span class="html">Note this code example below in PHP 7.3<br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">"17,25"</span><span class="keyword">;<br /><br />if(</span><span class="default">FALSE </span><span class="keyword">!== </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">)){<br />    echo </span><span class="string">"25 is inside of str"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"25 is NOT inside of str"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Will output "25 is NOT inside of str" and will throw out a deprication message, that non string needles will be interpreted as strings in the future.<br /><br />This just gave me some headache since the value I am checking against comes from the database as an integer.</span></code></div>
  </div>
 </div>
  <div class="note" id="45088">  <div class="votes">
    <div id="Vu45088">
    <a href="/manual/vote-note.php?id=45088&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45088">
    <a href="/manual/vote-note.php?id=45088&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45088" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#45088" class="name">
  <strong class="user"><em>philip</em></strong></a><a class="genanchor" href="#45088"> &para;</a><div class="date" title="2004-08-25 03:52"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45088">
<div class="phpcode"><code><span class="html">Many people look for in_string which does not exist in PHP, so, here's the most efficient form of in_string() (that works in both PHP 4/5) that I can think of:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">in_string</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$insensitive </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {
<br />    if (</span><span class="default">$insensitive</span><span class="keyword">) {
<br />        return </span><span class="default">false </span><span class="keyword">!== </span><span class="default">stristr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">);
<br />    } else {
<br />        return </span><span class="default">false </span><span class="keyword">!== </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123115">  <div class="votes">
    <div id="Vu123115">
    <a href="/manual/vote-note.php?id=123115&amp;page=function.strpos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123115">
    <a href="/manual/vote-note.php?id=123115&amp;page=function.strpos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123115" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#123115" class="name">
  <strong class="user"><em>amolocaleb at gmail dot com</em></strong></a><a class="genanchor" href="#123115"> &para;</a><div class="date" title="2018-09-06 03:00"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123115">
<div class="phpcode"><code><span class="html">Note that strpos() is case sensitive,so when doing a case insensitive search,use stripos() instead..If the latter is not available,subject the string to strlower() first,otherwise you may end up in this situation..<br /><span class="default">&lt;?php<br /></span><span class="comment">//say we are matching url routes and calling access control middleware depending on the route<br /><br /></span><span class="default">$registered_route </span><span class="keyword">= </span><span class="string">'/admin' </span><span class="keyword">;<br /></span><span class="comment">//now suppose we want to call the authorization middleware before accessing the admin route <br /></span><span class="keyword">if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">-&gt;</span><span class="default">url</span><span class="keyword">(),</span><span class="default">$registered_route</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">){<br />     </span><span class="default">$middleware</span><span class="keyword">-&gt;</span><span class="default">call</span><span class="keyword">(</span><span class="string">'Auth'</span><span class="keyword">,</span><span class="string">'login'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>and the auth middleware is as follows<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Auth</span><span class="keyword">{<br /><br />function </span><span class="default">login</span><span class="keyword">(){<br />   if(!</span><span class="default">loggedIn</span><span class="keyword">()){<br />       return </span><span class="default">redirect</span><span class="keyword">(</span><span class="string">"path/to/login.php"</span><span class="keyword">);<br />}<br />return </span><span class="default">true</span><span class="keyword">;<br />}<br />}<br /><br /></span><span class="comment">//Now suppose:<br /></span><span class="default">$user_url </span><span class="keyword">= </span><span class="string">'/admin'</span><span class="keyword">;<br /></span><span class="comment">//this will go to the Auth middleware for checks and redirect accordingly<br /><br />//But:<br /></span><span class="default">$user_url </span><span class="keyword">= </span><span class="string">'/Admin'</span><span class="keyword">;<br /></span><span class="comment">//this will make the strpos function return false since the 'A' in admin is upper case and user will be taken directly to admin dashboard authentication and authorization notwithstanding<br /></span><span class="default">?&gt;<br /></span>Simple fixes:<br /><span class="default">&lt;?php<br /></span><span class="comment">//use stripos() as from php 5<br /></span><span class="keyword">if(</span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">-&gt;</span><span class="default">url</span><span class="keyword">(),</span><span class="default">$registered_route</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">){<br />     </span><span class="default">$middleware</span><span class="keyword">-&gt;</span><span class="default">call</span><span class="keyword">(</span><span class="string">'Auth'</span><span class="keyword">,</span><span class="string">'login'</span><span class="keyword">);<br />}<br /></span><span class="comment">//for those with php 4<br /></span><span class="keyword">if(</span><span class="default">stripos</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">-&gt;</span><span class="default">url</span><span class="keyword">()),</span><span class="default">$registered_route</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">){<br />     </span><span class="default">$middleware</span><span class="keyword">-&gt;</span><span class="default">call</span><span class="keyword">(</span><span class="string">'Auth'</span><span class="keyword">,</span><span class="string">'login'</span><span class="keyword">);<br />}<br /></span><span class="comment">//make sure the $registered_route is also lowercase.Or JUST UPGRADE to PHP 5&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strpos&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strpos.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
