<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: levenshtein - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.levenshtein.php">
 <link rel="shorturl" href="https://www.php.net/levenshtein">
 <link rel="alternate" href="https://www.php.net/levenshtein" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.lcfirst.php">
 <link rel="next" href="https://www.php.net/manual/en/function.localeconv.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.levenshtein.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.levenshtein.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.levenshtein.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.levenshtein.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.levenshtein.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.levenshtein.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.levenshtein.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.levenshtein.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.levenshtein.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.levenshtein.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.levenshtein.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Calculate Levenshtein distance between two strings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: levenshtein - Manual" />
<meta name="twitter:description" content="Calculate Levenshtein distance between two strings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: levenshtein - Manual" />
<meta itemprop="description" content="Calculate Levenshtein distance between two strings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Calculate Levenshtein distance between two strings" />

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
        <a href="function.localeconv.php">
          localeconv &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.lcfirst.php">
          &laquo; lcfirst        </a>
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
            <option value='en/function.levenshtein.php' selected="selected">English</option>
            <option value='de/function.levenshtein.php'>German</option>
            <option value='es/function.levenshtein.php'>Spanish</option>
            <option value='fr/function.levenshtein.php'>French</option>
            <option value='it/function.levenshtein.php'>Italian</option>
            <option value='ja/function.levenshtein.php'>Japanese</option>
            <option value='pt_BR/function.levenshtein.php'>Brazilian Portuguese</option>
            <option value='ru/function.levenshtein.php'>Russian</option>
            <option value='tr/function.levenshtein.php'>Turkish</option>
            <option value='uk/function.levenshtein.php'>Ukrainian</option>
            <option value='zh/function.levenshtein.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.levenshtein" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">levenshtein</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">levenshtein</span> &mdash; <span class="dc-title">Calculate Levenshtein distance between two strings</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.levenshtein-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>levenshtein</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$insertion_cost</code><span class="initializer"> = 1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$replacement_cost</code><span class="initializer"> = 1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$deletion_cost</code><span class="initializer"> = 1</span></span><br>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   The Levenshtein distance is defined as the minimal number of
   characters you have to replace, insert or delete to transform
   <code class="parameter">string1</code> into <code class="parameter">string2</code>.
   The complexity of the algorithm is <code class="literal">O(m*n)</code>,
   where <code class="literal">n</code> and <code class="literal">m</code> are the
   length of <code class="parameter">string1</code> and
   <code class="parameter">string2</code> (rather good when compared to
   <span class="function"><a href="function.similar-text.php" class="function">similar_text()</a></span>, which is <code class="literal">O(max(n,m)**3)</code>,
   but still expensive).
  </p>
  <p class="para">
   If <code class="parameter">insertion_cost</code>, <code class="parameter">replacement_cost</code>
   and/or <code class="parameter">deletion_cost</code> are unequal to <code class="literal">1</code>,
   the algorithm adapts to choose the cheapest transforms.
   E.g. if <code class="code">$insertion_cost + $deletion_cost &lt; $replacement_cost</code>,
   no replacements will be done, but rather inserts and deletions instead.
  </p>
 </div>


<div class="refsect1 parameters" id="refsect1-function.levenshtein-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string1</code></dt>
     <dd>
      <p class="para">
       One of the strings being evaluated for Levenshtein distance.
      </p>
     </dd>
    
    
     <dt><code class="parameter">string2</code></dt>
     <dd>
      <p class="para">
       One of the strings being evaluated for Levenshtein distance.
      </p>
     </dd>
    
    
     <dt><code class="parameter">insertion_cost</code></dt>
     <dd>
      <p class="para">
       Defines the cost of insertion.
      </p>
     </dd>
    
    
     <dt><code class="parameter">replacement_cost</code></dt>
     <dd>
      <p class="para">
       Defines the cost of replacement.
      </p>
     </dd>
    
    
     <dt><code class="parameter">deletion_cost</code></dt>
     <dd>
      <p class="para">
       Defines the cost of deletion.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.levenshtein-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This function returns the Levenshtein-Distance between the
   two argument strings.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.levenshtein-changelog">
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
       Prior to this version, <span class="function"><strong>levenshtein()</strong></span> had to be called
       with either two or five arguments.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Prior to this version, <span class="function"><strong>levenshtein()</strong></span> would return <code class="literal">-1</code>
       if one of the argument strings is longer than 255 characters.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.levenshtein-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5082">
    <p><strong>Example #1 <span class="function"><strong>levenshtein()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// input misspelled word<br /></span><span style="color: #0000BB">$input </span><span style="color: #007700">= </span><span style="color: #DD0000">'carrrot'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// array of words to check against<br /></span><span style="color: #0000BB">$words  </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,</span><span style="color: #DD0000">'pineapple'</span><span style="color: #007700">,</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">,</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />                </span><span style="color: #DD0000">'radish'</span><span style="color: #007700">,</span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">,</span><span style="color: #DD0000">'pea'</span><span style="color: #007700">,</span><span style="color: #DD0000">'bean'</span><span style="color: #007700">,</span><span style="color: #DD0000">'potato'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// no shortest distance found, yet<br /></span><span style="color: #0000BB">$shortest </span><span style="color: #007700">= -</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// loop through words to find the closest<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$words </span><span style="color: #007700">as </span><span style="color: #0000BB">$word</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">// calculate the distance between the input word,<br />    // and the current word<br />    </span><span style="color: #0000BB">$lev </span><span style="color: #007700">= </span><span style="color: #0000BB">levenshtein</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">$word</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">// check for an exact match<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">$lev </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br /><br />        </span><span style="color: #FF8000">// closest word is this one (exact match)<br />        </span><span style="color: #0000BB">$closest </span><span style="color: #007700">= </span><span style="color: #0000BB">$word</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$shortest </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />        </span><span style="color: #FF8000">// break out of the loop; we've found an exact match<br />        </span><span style="color: #007700">break;<br />    }<br /><br />    </span><span style="color: #FF8000">// if this distance is less than the next found shortest<br />    // distance, OR if a next shortest word has not yet been found<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">$lev </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">$shortest </span><span style="color: #007700">|| </span><span style="color: #0000BB">$shortest </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />        </span><span style="color: #FF8000">// set the closest match, and shortest distance<br />        </span><span style="color: #0000BB">$closest  </span><span style="color: #007700">= </span><span style="color: #0000BB">$word</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$shortest </span><span style="color: #007700">= </span><span style="color: #0000BB">$lev</span><span style="color: #007700">;<br />    }<br />}<br /><br />echo </span><span style="color: #DD0000">"Input word: </span><span style="color: #0000BB">$input</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">$shortest </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Exact match found: </span><span style="color: #0000BB">$closest</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"Did you mean: </span><span style="color: #0000BB">$closest</span><span style="color: #DD0000">?\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Input word: carrrot
Did you mean: carrot?</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.levenshtein-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.soundex.php" class="function" rel="rdfs-seeAlso">soundex()</a> - Calculate the soundex key of a string</span></li>
    <li><span class="function"><a href="function.similar-text.php" class="function" rel="rdfs-seeAlso">similar_text()</a> - Calculate the similarity between two strings</span></li>
    <li><span class="function"><a href="function.metaphone.php" class="function" rel="rdfs-seeAlso">metaphone()</a> - Calculate the metaphone key of a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/levenshtein.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.levenshtein%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.levenshtein&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.levenshtein.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113702">  <div class="votes">
    <div id="Vu113702">
    <a href="/manual/vote-note.php?id=113702&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113702">
    <a href="/manual/vote-note.php?id=113702&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113702" title="86% like this...">
    82
    </div>
  </div>
  <a href="#113702" class="name">
  <strong class="user"><em>luciole75w at no dot spam dot gmail dot com</em></strong></a><a class="genanchor" href="#113702"> &para;</a><div class="date" title="2013-11-18 02:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113702">
<div class="phpcode"><code><span class="html">The levenshtein function processes each byte of the input string individually. Then for multibyte encodings, such as UTF-8, it may give misleading results.<br /><br />Example with a french accented word :<br />- levenshtein('notre', 'votre') = 1<br />- levenshtein('notre', 'nôtre') = 2 (huh ?!)<br /><br />You can easily find a multibyte compliant PHP implementation of the levenshtein function but it will be of course much slower than the C implementation.<br /><br />Another option is to convert the strings to a single-byte (lossless) encoding so that they can feed the fast core levenshtein function.<br /><br />Here is the conversion function I used with a search engine storing UTF-8 strings, and a quick benchmark. I hope it will help.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Convert an UTF-8 encoded string to a single-byte string suitable for<br />// functions such as levenshtein.<br />// <br />// The function simply uses (and updates) a tailored dynamic encoding<br />// (in/out map parameter) where non-ascii characters are remapped to<br />// the range [128-255] in order of appearance.<br />//<br />// Thus it supports up to 128 different multibyte code points max over<br />// the whole set of strings sharing this encoding.<br />//<br /></span><span class="keyword">function </span><span class="default">utf8_to_extended_ascii</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, &amp;</span><span class="default">$map</span><span class="keyword">)<br />{<br />    </span><span class="comment">// find all multibyte characters (cf. utf-8 encoding specs)<br />    </span><span class="default">$matches </span><span class="keyword">= array();<br />    if (!</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/[\xC0-\xF7][\x80-\xBF]+/'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">))<br />        return </span><span class="default">$str</span><span class="keyword">; </span><span class="comment">// plain ascii string<br />    <br />    // update the encoding map with the characters not already met<br />    </span><span class="keyword">foreach (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] as </span><span class="default">$mbc</span><span class="keyword">)<br />        if (!isset(</span><span class="default">$map</span><span class="keyword">[</span><span class="default">$mbc</span><span class="keyword">]))<br />            </span><span class="default">$map</span><span class="keyword">[</span><span class="default">$mbc</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">128 </span><span class="keyword">+ </span><span class="default">count</span><span class="keyword">(</span><span class="default">$map</span><span class="keyword">));<br />    <br />    </span><span class="comment">// finally remap non-ascii characters<br />    </span><span class="keyword">return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$map</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Didactic example showing the usage of the previous conversion function but,<br />// for better performance, in a real application with a single input string<br />// matched against many strings from a database, you will probably want to<br />// pre-encode the input only once.<br />//<br /></span><span class="keyword">function </span><span class="default">levenshtein_utf8</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">, </span><span class="default">$s2</span><span class="keyword">)<br />{<br />    </span><span class="default">$charMap </span><span class="keyword">= array();<br />    </span><span class="default">$s1 </span><span class="keyword">= </span><span class="default">utf8_to_extended_ascii</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">, </span><span class="default">$charMap</span><span class="keyword">);<br />    </span><span class="default">$s2 </span><span class="keyword">= </span><span class="default">utf8_to_extended_ascii</span><span class="keyword">(</span><span class="default">$s2</span><span class="keyword">, </span><span class="default">$charMap</span><span class="keyword">);<br />    <br />    return </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">, </span><span class="default">$s2</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Results (for about 6000 calls)<br />- reference time core C function (single-byte) : 30 ms<br />- utf8 to ext-ascii conversion + core function : 90 ms<br />- full php implementation : 3000 ms</span></code></div>
  </div>
 </div>
  <div class="note" id="85387">  <div class="votes">
    <div id="Vu85387">
    <a href="/manual/vote-note.php?id=85387&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85387">
    <a href="/manual/vote-note.php?id=85387&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85387" title="76% like this...">
    21
    </div>
  </div>
  <a href="#85387" class="name">
  <strong class="user"><em>paulrowe at iname dot com</em></strong></a><a class="genanchor" href="#85387"> &para;</a><div class="date" title="2008-08-27 05:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85387">
<div class="phpcode"><code><span class="html">[EDITOR'S NOTE: original post and 2 corrections combined into 1 -- mgf]
<br />
<br />Here is an implementation of the Levenshtein Distance calculation that only uses a one-dimensional array and doesn't have a limit to the string length. This implementation was inspired by maze generation algorithms that also use only one-dimensional arrays.
<br />
<br />I have tested this function with two 532-character strings and it completed in 0.6-0.8 seconds. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br />* This function starts out with several checks in an attempt to save time.
<br />*   1.  The shorter string is always used as the "right-hand" string (as the size of the array is based on its length).  
<br />*   2.  If the left string is empty, the length of the right is returned.
<br />*   3.  If the right string is empty, the length of the left is returned.
<br />*   4.  If the strings are equal, a zero-distance is returned.
<br />*   5.  If the left string is contained within the right string, the difference in length is returned.
<br />*   6.  If the right string is contained within the left string, the difference in length is returned.
<br />* If none of the above conditions were met, the Levenshtein algorithm is used.
<br />*/
<br /></span><span class="keyword">function </span><span class="default">LevenshteinDistance</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">, </span><span class="default">$s2</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$sLeft </span><span class="keyword">= (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">) &gt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s2</span><span class="keyword">)) ? </span><span class="default">$s1 </span><span class="keyword">: </span><span class="default">$s2</span><span class="keyword">;
<br />  </span><span class="default">$sRight </span><span class="keyword">= (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">) &gt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s2</span><span class="keyword">)) ? </span><span class="default">$s2 </span><span class="keyword">: </span><span class="default">$s1</span><span class="keyword">;
<br />  </span><span class="default">$nLeftLength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$sLeft</span><span class="keyword">);
<br />  </span><span class="default">$nRightLength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$sRight</span><span class="keyword">);
<br />  if (</span><span class="default">$nLeftLength </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)
<br />    return </span><span class="default">$nRightLength</span><span class="keyword">;
<br />  else if (</span><span class="default">$nRightLength </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)
<br />    return </span><span class="default">$nLeftLength</span><span class="keyword">;
<br />  else if (</span><span class="default">$sLeft </span><span class="keyword">=== </span><span class="default">$sRight</span><span class="keyword">)
<br />    return </span><span class="default">0</span><span class="keyword">;
<br />  else if ((</span><span class="default">$nLeftLength </span><span class="keyword">&lt; </span><span class="default">$nRightLength</span><span class="keyword">) &amp;&amp; (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$sRight</span><span class="keyword">, </span><span class="default">$sLeft</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">))
<br />    return </span><span class="default">$nRightLength </span><span class="keyword">- </span><span class="default">$nLeftLength</span><span class="keyword">;
<br />  else if ((</span><span class="default">$nRightLength </span><span class="keyword">&lt; </span><span class="default">$nLeftLength</span><span class="keyword">) &amp;&amp; (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$sLeft</span><span class="keyword">, </span><span class="default">$sRight</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">))
<br />    return </span><span class="default">$nLeftLength </span><span class="keyword">- </span><span class="default">$nRightLength</span><span class="keyword">;
<br />  else {
<br />    </span><span class="default">$nsDistance </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$nRightLength </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);
<br />    for (</span><span class="default">$nLeftPos </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$nLeftPos </span><span class="keyword">&lt;= </span><span class="default">$nLeftLength</span><span class="keyword">; ++</span><span class="default">$nLeftPos</span><span class="keyword">)
<br />    {
<br />      </span><span class="default">$cLeft </span><span class="keyword">= </span><span class="default">$sLeft</span><span class="keyword">[</span><span class="default">$nLeftPos </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">];
<br />      </span><span class="default">$nDiagonal </span><span class="keyword">= </span><span class="default">$nLeftPos </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;
<br />      </span><span class="default">$nsDistance</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$nLeftPos</span><span class="keyword">;
<br />      for (</span><span class="default">$nRightPos </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$nRightPos </span><span class="keyword">&lt;= </span><span class="default">$nRightLength</span><span class="keyword">; ++</span><span class="default">$nRightPos</span><span class="keyword">)
<br />      {
<br />        </span><span class="default">$cRight </span><span class="keyword">= </span><span class="default">$sRight</span><span class="keyword">[</span><span class="default">$nRightPos </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">];
<br />        </span><span class="default">$nCost </span><span class="keyword">= (</span><span class="default">$cRight </span><span class="keyword">== </span><span class="default">$cLeft</span><span class="keyword">) ? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">;
<br />        </span><span class="default">$nNewDiagonal </span><span class="keyword">= </span><span class="default">$nsDistance</span><span class="keyword">[</span><span class="default">$nRightPos</span><span class="keyword">];
<br />        </span><span class="default">$nsDistance</span><span class="keyword">[</span><span class="default">$nRightPos</span><span class="keyword">] = 
<br />          </span><span class="default">min</span><span class="keyword">(</span><span class="default">$nsDistance</span><span class="keyword">[</span><span class="default">$nRightPos</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">, 
<br />              </span><span class="default">$nsDistance</span><span class="keyword">[</span><span class="default">$nRightPos </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">, 
<br />              </span><span class="default">$nDiagonal </span><span class="keyword">+ </span><span class="default">$nCost</span><span class="keyword">);
<br />        </span><span class="default">$nDiagonal </span><span class="keyword">= </span><span class="default">$nNewDiagonal</span><span class="keyword">;
<br />      }
<br />    }
<br />    return </span><span class="default">$nsDistance</span><span class="keyword">[</span><span class="default">$nRightLength</span><span class="keyword">];
<br />  }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119859">  <div class="votes">
    <div id="Vu119859">
    <a href="/manual/vote-note.php?id=119859&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119859">
    <a href="/manual/vote-note.php?id=119859&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119859" title="78% like this...">
    8
    </div>
  </div>
  <a href="#119859" class="name">
  <strong class="user"><em>Johan Gennesson php at genjo dot fr</em></strong></a><a class="genanchor" href="#119859"> &para;</a><div class="date" title="2016-09-07 12:49"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119859">
<div class="phpcode"><code><span class="html">Please, be aware that:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Levenshtein Apostrophe (U+0027 &amp;#39;) and Right Single Quotation Mark (U+2019 &amp;#8217;)<br /></span><span class="keyword">echo </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">, </span><span class="string">"’"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will output 3!</span></code></div>
  </div>
 </div>
  <div class="note" id="107114">  <div class="votes">
    <div id="Vu107114">
    <a href="/manual/vote-note.php?id=107114&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107114">
    <a href="/manual/vote-note.php?id=107114&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107114" title="76% like this...">
    11
    </div>
  </div>
  <a href="#107114" class="name">
  <strong class="user"><em>engineglue at gmail dot com</em></strong></a><a class="genanchor" href="#107114"> &para;</a><div class="date" title="2012-01-08 08:05"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107114">
<div class="phpcode"><code><span class="html">I really like [the manual's] example for the use of the levenshtein function to match against an array. I ran into the need to specify the sensitivity of the result. There are circumstances when you want it to return false if the match is way out of line. I wouldn't want "marry had a little lamb" to match with "saw viii" simply because it was the best match in the array. Hence the need for sensitivity:
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">wordMatch</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">, </span><span class="default">$sensitivity</span><span class="keyword">){
<br />        </span><span class="default">$shortest </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;
<br />        foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {
<br />            </span><span class="default">$lev </span><span class="keyword">= </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$word</span><span class="keyword">);
<br />            if (</span><span class="default">$lev </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {
<br />                </span><span class="default">$closest </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;
<br />                </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />                break;
<br />            }
<br />            if (</span><span class="default">$lev </span><span class="keyword">&lt;= </span><span class="default">$shortest </span><span class="keyword">|| </span><span class="default">$shortest </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {
<br />                </span><span class="default">$closest  </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;
<br />                </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">$lev</span><span class="keyword">;
<br />            }
<br />        }
<br />        if(</span><span class="default">$shortest </span><span class="keyword">&lt;= </span><span class="default">$sensitivity</span><span class="keyword">){
<br />            return </span><span class="default">$closest</span><span class="keyword">;
<br />        } else {
<br />            return </span><span class="default">0</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    </span><span class="default">$word </span><span class="keyword">= </span><span class="string">'PINEEEEAPPLE'</span><span class="keyword">;
<br />
<br />    </span><span class="default">$words  </span><span class="keyword">= array(</span><span class="string">'apple'</span><span class="keyword">,</span><span class="string">'pineapple'</span><span class="keyword">,</span><span class="string">'banana'</span><span class="keyword">,</span><span class="string">'orange'</span><span class="keyword">,
<br />                    </span><span class="string">'radish'</span><span class="keyword">,</span><span class="string">'carrot'</span><span class="keyword">,</span><span class="string">'pea'</span><span class="keyword">,</span><span class="string">'bean'</span><span class="keyword">,</span><span class="string">'potato'</span><span class="keyword">);
<br />                    
<br />    echo </span><span class="default">wordMatch</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">, </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53562">  <div class="votes">
    <div id="Vu53562">
    <a href="/manual/vote-note.php?id=53562&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53562">
    <a href="/manual/vote-note.php?id=53562&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53562" title="75% like this...">
    2
    </div>
  </div>
  <a href="#53562" class="name">
  <strong class="user"><em>june05 at tilo-hauke dot de</em></strong></a><a class="genanchor" href="#53562"> &para;</a><div class="date" title="2005-06-06 12:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53562">
<div class="phpcode"><code><span class="html">//levenshtein for arrays<br />function array_levenshtein($array1,$array2)<br />         {   $aliases= array_flip(array_values(array_unique(array_merge($array1,$array2))));<br />             if(count($aliases)&gt;255) return -1;<br />             $stringA=''; $stringB='';<br />             foreach($array1 as $entry) $stringA.=chr($aliases[$entry]);<br />             foreach($array2 as $entry) $stringB.=chr($aliases[$entry]);<br />             return levenshtein($stringA,$stringB);<br />         }<br />         <br />// e.g. use array_levenshtein to detect special expressions in unser-inputs<br /><br />echo array_levenshtein(split(" ", "my name is xxx"), split(" ","my name is levenshtein")); <br /><br />//output: 1</span></code></div>
  </div>
 </div>
  <div class="note" id="81046">  <div class="votes">
    <div id="Vu81046">
    <a href="/manual/vote-note.php?id=81046&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81046">
    <a href="/manual/vote-note.php?id=81046&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81046" title="70% like this...">
    7
    </div>
  </div>
  <a href="#81046" class="name">
  <strong class="user"><em>dale3h</em></strong></a><a class="genanchor" href="#81046"> &para;</a><div class="date" title="2008-02-12 08:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81046">
<div class="phpcode"><code><span class="html">Using PHP's example along with Patrick's comparison percentage function, I have come up with a function that returns the closest word from an array, and assigns the percentage to a referenced variable:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">closest_word</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$words</span><span class="keyword">, &amp;</span><span class="default">$percent </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    </span><span class="default">$shortest </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />    foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {<br />      </span><span class="default">$lev </span><span class="keyword">= </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$word</span><span class="keyword">);<br /><br />      if (</span><span class="default">$lev </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$closest </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;<br />        </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        break;<br />      }<br /><br />      if (</span><span class="default">$lev </span><span class="keyword">&lt;= </span><span class="default">$shortest </span><span class="keyword">|| </span><span class="default">$shortest </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$closest  </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;<br />        </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">$lev</span><span class="keyword">;<br />      }<br />    }<br /><br />    </span><span class="default">$percent </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">- </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$closest</span><span class="keyword">) / </span><span class="default">max</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">), </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$closest</span><span class="keyword">));<br /><br />    return </span><span class="default">$closest</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><span class="default">&lt;?php<br />  $input </span><span class="keyword">= </span><span class="string">'carrrot'</span><span class="keyword">;<br />  </span><span class="default">$words </span><span class="keyword">= array(</span><span class="string">'apple'</span><span class="keyword">,</span><span class="string">'pineapple'</span><span class="keyword">,</span><span class="string">'banana'</span><span class="keyword">,</span><span class="string">'orange'</span><span class="keyword">,<br />                 </span><span class="string">'radish'</span><span class="keyword">,</span><span class="string">'carrot'</span><span class="keyword">,</span><span class="string">'pea'</span><span class="keyword">,</span><span class="string">'bean'</span><span class="keyword">,</span><span class="string">'potato'</span><span class="keyword">);<br /><br />  </span><span class="default">$percent </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  </span><span class="default">$found </span><span class="keyword">= </span><span class="default">closest_word</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$words</span><span class="keyword">, </span><span class="default">$percent</span><span class="keyword">);<br /><br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">'Closest word to "%s": %s (%s%% match)'</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">, </span><span class="default">$found</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$percent </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />I found that lowercasing the array prior to comparing yields a better comparison when the case is not of importance, for example: comparing a user-inputted category to a list of existing categories.<br /><br />I also found that when the percentage was above 75%, it was usually the match that I was looking for.</span></code></div>
  </div>
 </div>
  <div class="note" id="118906">  <div class="votes">
    <div id="Vu118906">
    <a href="/manual/vote-note.php?id=118906&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118906">
    <a href="/manual/vote-note.php?id=118906&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118906" title="71% like this...">
    3
    </div>
  </div>
  <a href="#118906" class="name">
  <strong class="user"><em>yhoko at yhoko dot com</em></strong></a><a class="genanchor" href="#118906"> &para;</a><div class="date" title="2016-02-25 05:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118906">
<div class="phpcode"><code><span class="html">Note that this function might cause problems when working with multibyte charactes like in UTF-8. Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">print( </span><span class="default">similar_text</span><span class="keyword">( </span><span class="string">'hä'</span><span class="keyword">, </span><span class="string">'hà' </span><span class="keyword">) ); </span><span class="comment">// Returns 2 where only 1 character matches<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="7658">  <div class="votes">
    <div id="Vu7658">
    <a href="/manual/vote-note.php?id=7658&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7658">
    <a href="/manual/vote-note.php?id=7658&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7658" title="68% like this...">
    12
    </div>
  </div>
  <a href="#7658" class="name">
  <strong class="user"><em>dschultz at protonic dot com</em></strong></a><a class="genanchor" href="#7658"> &para;</a><div class="date" title="2000-08-10 09:01"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7658">
<div class="phpcode"><code><span class="html">It's also useful if you want to make some sort of registration page and you want to make sure that people who register don't pick usernames that are very similar to their passwords.</span></code></div>
  </div>
 </div>
  <div class="note" id="33940">  <div class="votes">
    <div id="Vu33940">
    <a href="/manual/vote-note.php?id=33940&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33940">
    <a href="/manual/vote-note.php?id=33940&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33940" title="69% like this...">
    5
    </div>
  </div>
  <a href="#33940" class="name">
  <strong class="user"><em>&quot;inerte&quot; is my hotmail.com username</em></strong></a><a class="genanchor" href="#33940"> &para;</a><div class="date" title="2003-07-11 10:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33940">
<div class="phpcode"><code><span class="html">I am using this function to avoid duplicate information on my client's database.<br /><br />After retrieving a series of rows and assigning the results to an array values, I loop it with foreach comparing its levenshtein() with the user supplied string.<br /><br />It helps to avoid people re-registering "John Smith", "Jon Smith" or "Jon Smit".<br /><br />Of course, I can't block the operation if the user really wants to, but a suggestion is displayed along the lines of: "There's a similar client with this name.", followed by the list of the similar strings.</span></code></div>
  </div>
 </div>
  <div class="note" id="70796">  <div class="votes">
    <div id="Vu70796">
    <a href="/manual/vote-note.php?id=70796&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70796">
    <a href="/manual/vote-note.php?id=70796&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70796" title="66% like this...">
    7
    </div>
  </div>
  <a href="#70796" class="name">
  <strong class="user"><em>carey at NOSPAM dot internode dot net dot au</em></strong></a><a class="genanchor" href="#70796"> &para;</a><div class="date" title="2006-10-28 07:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70796">
<div class="phpcode"><code><span class="html">I have found that levenshtein is actually case-sensitive (in PHP 4.4.2 at least).<br /><br /><span class="default">&lt;?php<br />$distance</span><span class="keyword">=</span><span class="default">levenshtein</span><span class="keyword">(</span><span class="string">'hello'</span><span class="keyword">,</span><span class="string">'ELLO'</span><span class="keyword">);<br />echo </span><span class="string">"</span><span class="default">$distance</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Outputs: "5", instead of "1". If you are implementing a fuzzy search feature that makes use of levenshtein, you will probably need to find a way to work around this.</span></code></div>
  </div>
 </div>
  <div class="note" id="51600">  <div class="votes">
    <div id="Vu51600">
    <a href="/manual/vote-note.php?id=51600&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51600">
    <a href="/manual/vote-note.php?id=51600&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51600" title="65% like this...">
    7
    </div>
  </div>
  <a href="#51600" class="name">
  <strong class="user"><em>justin at visunet dot ie</em></strong></a><a class="genanchor" href="#51600"> &para;</a><div class="date" title="2005-04-05 07:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51600">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />    </span><span class="comment">/*********************************************************************<br />    * The below func, btlfsa, (better than levenstien for spelling apps)<br />    * produces better results when comparing words like haert against<br />    * haart and heart.<br />    *<br />    * For example here is the output of levenshtein compared to btlfsa<br />    * when comparing 'haert' to 'herat, haart, heart, harte'<br />    *<br />    * btlfsa('haert','herat'); output is.. 3<br />    * btlfsa('haert','haart'); output is.. 3<br />    * btlfsa('haert','harte'); output is.. 3<br />    * btlfsa('haert','heart'); output is.. 2<br />    *<br />    * levenshtein('haert','herat'); output is.. 2<br />    * levenshtein('haert','haart'); output is.. 1<br />    * levenshtein('haert','harte'); output is.. 2<br />    * levenshtein('haert','heart'); output is.. 2<br />    *<br />    * In other words, if you used levenshtein, 'haart' would be the<br />    * closest match to 'haert'. Where as, btlfsa sees that it should be<br />    * 'heart'<br />    */<br /><br />    </span><span class="keyword">function </span><span class="default">btlfsa</span><span class="keyword">(</span><span class="default">$word1</span><span class="keyword">,</span><span class="default">$word2</span><span class="keyword">)<br />    {<br />        </span><span class="default">$score </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />        </span><span class="comment">// For each char that is different add 2 to the score<br />        // as this is a BIG difference<br /><br />        </span><span class="default">$remainder  </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/["</span><span class="keyword">.</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/[^A-Za-z0-9\']/"</span><span class="keyword">,</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$word1</span><span class="keyword">).</span><span class="string">"]/i"</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$word2</span><span class="keyword">);<br />        </span><span class="default">$remainder </span><span class="keyword">.= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/["</span><span class="keyword">.</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/[^A-Za-z0-9\']/"</span><span class="keyword">,</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$word2</span><span class="keyword">).</span><span class="string">"]/i"</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$word1</span><span class="keyword">);<br />        </span><span class="default">$score      </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$remainder</span><span class="keyword">)*</span><span class="default">2</span><span class="keyword">;<br /><br />        </span><span class="comment">// Take the difference in string length and add it to the score<br />        </span><span class="default">$w1_len  </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$word1</span><span class="keyword">);<br />        </span><span class="default">$w2_len  </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$word2</span><span class="keyword">);<br />        </span><span class="default">$score  </span><span class="keyword">+= </span><span class="default">$w1_len </span><span class="keyword">&gt; </span><span class="default">$w2_len </span><span class="keyword">? </span><span class="default">$w1_len </span><span class="keyword">- </span><span class="default">$w2_len </span><span class="keyword">: </span><span class="default">$w2_len </span><span class="keyword">- </span><span class="default">$w1_len</span><span class="keyword">;<br /><br />        </span><span class="comment">// Calculate how many letters are in different locations<br />        // And add it to the score i.e.<br />        //<br />        // h e a r t<br />        // 1 2 3 4 5<br />        //<br />        // h a e r t     a e        = 2<br />        // 1 2 3 4 5   1 2 3 4 5<br />        //<br /><br />        </span><span class="default">$w1 </span><span class="keyword">= </span><span class="default">$w1_len </span><span class="keyword">&gt; </span><span class="default">$w2_len </span><span class="keyword">? </span><span class="default">$word1 </span><span class="keyword">: </span><span class="default">$word2</span><span class="keyword">;<br />        </span><span class="default">$w2 </span><span class="keyword">= </span><span class="default">$w1_len </span><span class="keyword">&gt; </span><span class="default">$w2_len </span><span class="keyword">? </span><span class="default">$word2 </span><span class="keyword">: </span><span class="default">$word1</span><span class="keyword">;<br /><br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$w1</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />        {<br />            if ( !isset(</span><span class="default">$w2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) || </span><span class="default">$w1</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] != </span><span class="default">$w2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] )<br />            {<br />                </span><span class="default">$score</span><span class="keyword">++;<br />            }<br />        }<br /><br />        return </span><span class="default">$score</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// *************************************************************<br />    // Here is a full code example showing the difference<br /><br />    </span><span class="default">$misspelled </span><span class="keyword">= </span><span class="string">'haert'</span><span class="keyword">;<br /><br />    </span><span class="comment">// Imagine that these are sample suggestions thrown back by soundex or metaphone..<br />    </span><span class="default">$suggestions </span><span class="keyword">= array(</span><span class="string">'herat'</span><span class="keyword">, </span><span class="string">'haart'</span><span class="keyword">, </span><span class="string">'heart'</span><span class="keyword">, </span><span class="string">'harte'</span><span class="keyword">);<br /><br />    </span><span class="comment">// Firstly order an array based on levenshtein<br />    </span><span class="default">$levenshtein_ordered </span><span class="keyword">= array();<br />    foreach ( </span><span class="default">$suggestions </span><span class="keyword">as </span><span class="default">$suggestion </span><span class="keyword">)<br />    {<br />        </span><span class="default">$levenshtein_ordered</span><span class="keyword">[</span><span class="default">$suggestion</span><span class="keyword">] = </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$misspelled</span><span class="keyword">,</span><span class="default">$suggestion</span><span class="keyword">);<br />    }<br />    </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$levenshtein_ordered</span><span class="keyword">, </span><span class="default">SORT_NUMERIC </span><span class="keyword">);<br /><br />    print </span><span class="string">"&lt;b&gt;Suggestions as ordered by levenshtein...&lt;/b&gt;&lt;ul&gt;&lt;pre&gt;"</span><span class="keyword">;<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$levenshtein_ordered</span><span class="keyword">);<br />    print </span><span class="string">"&lt;/pre&gt;&lt;/ul&gt;"</span><span class="keyword">;<br /><br />    </span><span class="comment">// Secondly order an array based on btlfsa<br />    </span><span class="default">$btlfsa_ordered </span><span class="keyword">= array();<br />    foreach ( </span><span class="default">$suggestions </span><span class="keyword">as </span><span class="default">$suggestion </span><span class="keyword">)<br />    {<br />        </span><span class="default">$btlfsa_ordered</span><span class="keyword">[</span><span class="default">$suggestion</span><span class="keyword">] = </span><span class="default">btlfsa</span><span class="keyword">(</span><span class="default">$misspelled</span><span class="keyword">,</span><span class="default">$suggestion</span><span class="keyword">);<br />    }<br />    </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$btlfsa_ordered</span><span class="keyword">, </span><span class="default">SORT_NUMERIC </span><span class="keyword">);<br /><br />    print </span><span class="string">"&lt;b&gt;Suggestions as ordered by btlfsa...&lt;/b&gt;&lt;ul&gt;&lt;pre&gt;"</span><span class="keyword">;<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$btlfsa_ordered</span><span class="keyword">);<br />    print </span><span class="string">"&lt;/pre&gt;&lt;/ul&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82605">  <div class="votes">
    <div id="Vu82605">
    <a href="/manual/vote-note.php?id=82605&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82605">
    <a href="/manual/vote-note.php?id=82605&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82605" title="66% like this...">
    2
    </div>
  </div>
  <a href="#82605" class="name">
  <strong class="user"><em>atx dot antrax at gmail dot com</em></strong></a><a class="genanchor" href="#82605"> &para;</a><div class="date" title="2008-04-17 02:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82605">
<div class="phpcode"><code><span class="html">I have made a function that removes the length-limit of levenshtein function and ajust the result with similar_text:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">_similar</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">) {<br />    </span><span class="default">$strlen1</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">);<br />    </span><span class="default">$strlen2</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">);<br />    </span><span class="default">$max</span><span class="keyword">=</span><span class="default">max</span><span class="keyword">(</span><span class="default">$strlen1</span><span class="keyword">, </span><span class="default">$strlen2</span><span class="keyword">);<br /><br />    </span><span class="default">$splitSize</span><span class="keyword">=</span><span class="default">250</span><span class="keyword">;<br />    if(</span><span class="default">$max</span><span class="keyword">&gt;</span><span class="default">$splitSize</span><span class="keyword">)<br />    {<br />        </span><span class="default">$lev</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        for(</span><span class="default">$cont</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$cont</span><span class="keyword">&lt;</span><span class="default">$max</span><span class="keyword">;</span><span class="default">$cont</span><span class="keyword">+=</span><span class="default">$splitSize</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$strlen1</span><span class="keyword">&lt;=</span><span class="default">$cont </span><span class="keyword">|| </span><span class="default">$strlen2</span><span class="keyword">&lt;=</span><span class="default">$cont</span><span class="keyword">)<br />            {<br />                </span><span class="default">$lev</span><span class="keyword">=</span><span class="default">$lev</span><span class="keyword">/(</span><span class="default">$max</span><span class="keyword">/</span><span class="default">min</span><span class="keyword">(</span><span class="default">$strlen1</span><span class="keyword">,</span><span class="default">$strlen2</span><span class="keyword">));<br />                break;<br />            }<br />            </span><span class="default">$lev</span><span class="keyword">+=</span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">,</span><span class="default">$cont</span><span class="keyword">,</span><span class="default">$splitSize</span><span class="keyword">), </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">,</span><span class="default">$cont</span><span class="keyword">,</span><span class="default">$splitSize</span><span class="keyword">));<br />        }<br />    }<br />    else<br />    </span><span class="default">$lev</span><span class="keyword">=</span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">);<br /><br />    </span><span class="default">$porcentage</span><span class="keyword">= -</span><span class="default">100</span><span class="keyword">*</span><span class="default">$lev</span><span class="keyword">/</span><span class="default">$max</span><span class="keyword">+</span><span class="default">100</span><span class="keyword">;<br />    if(</span><span class="default">$porcentage</span><span class="keyword">&gt;</span><span class="default">75</span><span class="keyword">)</span><span class="comment">//Ajustar con similar_text<br />    </span><span class="default">similar_text</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">,</span><span class="default">$str2</span><span class="keyword">,</span><span class="default">$porcentage</span><span class="keyword">);<br /><br />    return </span><span class="default">$porcentage</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="12645">  <div class="votes">
    <div id="Vu12645">
    <a href="/manual/vote-note.php?id=12645&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12645">
    <a href="/manual/vote-note.php?id=12645&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12645" title="66% like this...">
    2
    </div>
  </div>
  <a href="#12645" class="name">
  <strong class="user"><em>fgilles at free dot fr</em></strong></a><a class="genanchor" href="#12645"> &para;</a><div class="date" title="2001-04-26 01:32"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12645">
<div class="phpcode"><code><span class="html">Exempla of use for a forum: users can't post messages too much uppercased
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if ((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">)&gt;</span><span class="default">10</span><span class="keyword">) and ( ( </span><span class="default">levenshtein </span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">, </span><span class="default">strtolower </span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">) / </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">) ) &gt; </span><span class="default">.3 </span><span class="keyword">) ){
<br />    </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106381">  <div class="votes">
    <div id="Vu106381">
    <a href="/manual/vote-note.php?id=106381&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106381">
    <a href="/manual/vote-note.php?id=106381&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106381" title="63% like this...">
    5
    </div>
  </div>
  <a href="#106381" class="name">
  <strong class="user"><em>Chaim Chaikin</em></strong></a><a class="genanchor" href="#106381"> &para;</a><div class="date" title="2011-11-02 11:40"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106381">
<div class="phpcode"><code><span class="html">As regards to Example #1 above, would it not be more efficient to first use a simple php == comparison to check if the strings are equal even before testing the word with levenshtein().<br /><br />Something like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// input misspelled word<br /></span><span class="default">$input </span><span class="keyword">= </span><span class="string">'carrrot'</span><span class="keyword">;<br /><br /></span><span class="comment">// array of words to check against<br /></span><span class="default">$words  </span><span class="keyword">= array(</span><span class="string">'apple'</span><span class="keyword">,</span><span class="string">'pineapple'</span><span class="keyword">,</span><span class="string">'banana'</span><span class="keyword">,</span><span class="string">'orange'</span><span class="keyword">,<br />                </span><span class="string">'radish'</span><span class="keyword">,</span><span class="string">'carrot'</span><span class="keyword">,</span><span class="string">'pea'</span><span class="keyword">,</span><span class="string">'bean'</span><span class="keyword">,</span><span class="string">'potato'</span><span class="keyword">);<br /><br /></span><span class="comment">// no shortest distance found, yet<br /></span><span class="default">$shortest </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="comment">// loop through words to find the closest<br /></span><span class="keyword">foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {<br /><br />    </span><span class="comment">// check for an exact match<br />    </span><span class="keyword">if (</span><span class="default">$input </span><span class="keyword">== </span><span class="default">$word</span><span class="keyword">) {<br /><br />        </span><span class="comment">// closest word is this one (exact match)<br />        </span><span class="default">$closest </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;<br />        </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />        </span><span class="comment">// break out of the loop; we've found an exact match<br />        </span><span class="keyword">break;<br />    }<br /><br />    </span><span class="comment">// calculate the distance between the input word,<br />    // and the current word<br />    </span><span class="default">$lev </span><span class="keyword">= </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$word</span><span class="keyword">);<br /><br />    </span><span class="comment">// if this distance is less than the next found shortest<br />    // distance, OR if a next shortest word has not yet been found<br />    </span><span class="keyword">if (</span><span class="default">$lev </span><span class="keyword">&lt;= </span><span class="default">$shortest </span><span class="keyword">|| </span><span class="default">$shortest </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="comment">// set the closest match, and shortest distance<br />        </span><span class="default">$closest  </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;<br />        </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">$lev</span><span class="keyword">;<br />    }<br />}<br /><br />echo </span><span class="string">"Input word: </span><span class="default">$input</span><span class="string">\n"</span><span class="keyword">;<br />if (</span><span class="default">$shortest </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />    echo </span><span class="string">"Exact match found: </span><span class="default">$closest</span><span class="string">\n"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"Did you mean: </span><span class="default">$closest</span><span class="string">?\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117651">  <div class="votes">
    <div id="Vu117651">
    <a href="/manual/vote-note.php?id=117651&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117651">
    <a href="/manual/vote-note.php?id=117651&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117651" title="61% like this...">
    4
    </div>
  </div>
  <a href="#117651" class="name">
  <strong class="user"><em>WiLDRAGoN</em></strong></a><a class="genanchor" href="#117651"> &para;</a><div class="date" title="2015-07-15 08:19"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117651">
<div class="phpcode"><code><span class="html">Some small changes allow you to calculate multiple words.<br /><br /><span class="default">&lt;?php<br /><br />$input </span><span class="keyword">= array();<br /></span><span class="default">$dictionary  </span><span class="keyword">= array();<br />foreach (</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$output</span><span class="keyword">) {<br />    </span><span class="default">$shortest </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />    foreach (</span><span class="default">$dictionary </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {<br />        </span><span class="default">$lev </span><span class="keyword">= </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">$word</span><span class="keyword">);<br />        if (</span><span class="default">$lev </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$closest </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;<br />            </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }<br />        if (</span><span class="default">$lev </span><span class="keyword">&lt;= </span><span class="default">$shortest </span><span class="keyword">|| </span><span class="default">$shortest </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$closest  </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">;<br />            </span><span class="default">$shortest </span><span class="keyword">= </span><span class="default">$lev</span><span class="keyword">;<br />        }<br />    }<br />    echo </span><span class="string">"Input word: </span><span class="default">$output</span><span class="string">\n"</span><span class="keyword">;<br />    if (</span><span class="default">$shortest </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />        echo </span><span class="string">"Exact match found: </span><span class="default">$closest</span><span class="string">\n"</span><span class="keyword">;<br />    } else {<br />        echo </span><span class="string">"Did you mean: </span><span class="default">$closest</span><span class="string">?\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50699">  <div class="votes">
    <div id="Vu50699">
    <a href="/manual/vote-note.php?id=50699&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50699">
    <a href="/manual/vote-note.php?id=50699&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50699" title="60% like this...">
    2
    </div>
  </div>
  <a href="#50699" class="name">
  <strong class="user"><em>mcreuzer at r-world dot com</em></strong></a><a class="genanchor" href="#50699"> &para;</a><div class="date" title="2005-03-07 09:01"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50699">
<div class="phpcode"><code><span class="html">I am using the Levenshtein distance to SORT my search results.<br /><br />I have a search page for peoples names. I do a SOUNDEX() search on the name in mysql. MySQL SOUNDEX() will perform the "fuzzy" search for me.<br /><br />I then calculate the Levenshtein distance between the search term and the actual name found by the SOUNDEX() search. This will give me a score on how close my results are to the search string.<br /><br />I can the sort my results for display listing the closest results first.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// PHP CODE INCLUDING DB LOOKUPS HERE<br />    </span><span class="default">usort</span><span class="keyword">(</span><span class="default">$searchresults</span><span class="keyword">, </span><span class="string">"finallevenshteinsortfunction"</span><span class="keyword">);<br /><br />function </span><span class="default">finallevenshteinsortfunction</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />{<br />    if((</span><span class="default">$a</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">] &gt; </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">]) || ( </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">] == </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">] &amp;&amp; </span><span class="default">strnatcasecmp</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'Last_Name'</span><span class="keyword">], </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'Last_Name'</span><span class="keyword">]) &gt;= </span><span class="default">1</span><span class="keyword">) ){ return </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">];} </span><span class="comment">// Ok... The levenstein is greater OR with the same levenshtein, the last name is alphanumerically first<br />    </span><span class="keyword">elseif(</span><span class="default">$a</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">] == </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">]){ return </span><span class="string">'0'</span><span class="keyword">;} </span><span class="comment">// The levenstein matches <br />    </span><span class="keyword">elseif(</span><span class="default">$a</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">] &lt; </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">]){ return -</span><span class="default">$a</span><span class="keyword">[</span><span class="string">'levenshtein'</span><span class="keyword">];}<br />    else{die(</span><span class="string">"&lt;!-- a horrable death --&gt;"</span><span class="keyword">);}<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37953">  <div class="votes">
    <div id="Vu37953">
    <a href="/manual/vote-note.php?id=37953&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37953">
    <a href="/manual/vote-note.php?id=37953&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37953" title="58% like this...">
    2
    </div>
  </div>
  <a href="#37953" class="name">
  <strong class="user"><em>gzink at zinkconsulting dot com</em></strong></a><a class="genanchor" href="#37953"> &para;</a><div class="date" title="2003-12-03 03:03"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37953">
<div class="phpcode"><code><span class="html">Try combining this with metaphone() for a truly amazing fuzzy search function. Play with it a bit, the results can be plain scary (users thinking the computer is almost telepathic) when implemented properly. I wish spell checkers worked as well as the code I've written.
<br />
<br />I would release my complete code if reasonable, but it's not, due to copyright issues. I just hope that somebody can learn from this little tip!</span></code></div>
  </div>
 </div>
  <div class="note" id="24289">  <div class="votes">
    <div id="Vu24289">
    <a href="/manual/vote-note.php?id=24289&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24289">
    <a href="/manual/vote-note.php?id=24289&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24289" title="53% like this...">
    1
    </div>
  </div>
  <a href="#24289" class="name">
  <strong class="user"><em>bisqwit at iki dot fi</em></strong></a><a class="genanchor" href="#24289"> &para;</a><div class="date" title="2002-08-12 07:43"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24289">
<div class="phpcode"><code><span class="html">At the time of this manual note the user defined thing  <br />in levenshtein() is not implemented yet. I wanted something<br />like that, so I wrote my own function. Note that this<br />doesn't return levenshtein() difference, but instead <br />an array of operations to transform a string to another.<br /><br />Please note that the difference finding part (resync)<br />may be extremely slow on long strings.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* matchlen(): returns the length of matching<br /> * substrings at beginning of $a and $b<br /> */<br /></span><span class="keyword">function </span><span class="default">matchlen</span><span class="keyword">(&amp;</span><span class="default">$a</span><span class="keyword">, &amp;</span><span class="default">$b</span><span class="keyword">)<br />{<br />  </span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$alen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />  </span><span class="default">$blen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />  </span><span class="default">$d </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">$alen</span><span class="keyword">, </span><span class="default">$blen</span><span class="keyword">);<br />  while(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">] == </span><span class="default">$b</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">] &amp;&amp; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">$d</span><span class="keyword">)<br />    </span><span class="default">$c</span><span class="keyword">++;   <br />  return </span><span class="default">$c</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/* Returns a table describing<br /> * the differences of $a and $b */<br /></span><span class="keyword">function </span><span class="default">calcdiffer</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />{<br />  </span><span class="default">$alen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />  </span><span class="default">$blen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />  </span><span class="default">$aptr </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$bptr </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  <br />  </span><span class="default">$ops </span><span class="keyword">= array();<br />  <br />  while(</span><span class="default">$aptr </span><span class="keyword">&lt; </span><span class="default">$alen </span><span class="keyword">&amp;&amp; </span><span class="default">$bptr </span><span class="keyword">&lt; </span><span class="default">$blen</span><span class="keyword">)<br />  {<br />    </span><span class="default">$matchlen </span><span class="keyword">= </span><span class="default">matchlen</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$aptr</span><span class="keyword">), </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$bptr</span><span class="keyword">));<br />    if(</span><span class="default">$matchlen</span><span class="keyword">)<br />    {<br />      </span><span class="default">$ops</span><span class="keyword">[] = array(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$aptr</span><span class="keyword">, </span><span class="default">$matchlen</span><span class="keyword">));<br />      </span><span class="default">$aptr </span><span class="keyword">+= </span><span class="default">$matchlen</span><span class="keyword">;<br />      </span><span class="default">$bptr </span><span class="keyword">+= </span><span class="default">$matchlen</span><span class="keyword">;<br />      continue;<br />    }<br />    </span><span class="comment">/* Difference found */<br />     <br />    </span><span class="default">$bestlen</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$bestpos</span><span class="keyword">=array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">); <br />    for(</span><span class="default">$atmp </span><span class="keyword">= </span><span class="default">$aptr</span><span class="keyword">; </span><span class="default">$atmp </span><span class="keyword">&lt; </span><span class="default">$alen</span><span class="keyword">; </span><span class="default">$atmp</span><span class="keyword">++)<br />    {<br />      for(</span><span class="default">$btmp </span><span class="keyword">= </span><span class="default">$bptr</span><span class="keyword">; </span><span class="default">$btmp </span><span class="keyword">&lt; </span><span class="default">$blen</span><span class="keyword">; </span><span class="default">$btmp</span><span class="keyword">++)<br />      {<br />        </span><span class="default">$matchlen </span><span class="keyword">= </span><span class="default">matchlen</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$atmp</span><span class="keyword">), </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$btmp</span><span class="keyword">));<br />        if(</span><span class="default">$matchlen</span><span class="keyword">&gt;</span><span class="default">$bestlen</span><span class="keyword">)<br />        {<br />          </span><span class="default">$bestlen</span><span class="keyword">=</span><span class="default">$matchlen</span><span class="keyword">; <br />          </span><span class="default">$bestpos</span><span class="keyword">=array(</span><span class="default">$atmp</span><span class="keyword">,</span><span class="default">$btmp</span><span class="keyword">);<br />        }<br />        if(</span><span class="default">$matchlen </span><span class="keyword">&gt;= </span><span class="default">$blen</span><span class="keyword">-</span><span class="default">$btmp</span><span class="keyword">)break;<br />      }<br />    }<br />    if(!</span><span class="default">$bestlen</span><span class="keyword">)break;<br />   <br />    </span><span class="default">$adifflen </span><span class="keyword">= </span><span class="default">$bestpos</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] - </span><span class="default">$aptr</span><span class="keyword">;<br />    </span><span class="default">$bdifflen </span><span class="keyword">= </span><span class="default">$bestpos</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$bptr</span><span class="keyword">;<br /><br />    if(</span><span class="default">$adifflen</span><span class="keyword">)<br />    {<br />      </span><span class="default">$ops</span><span class="keyword">[] = array(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$aptr</span><span class="keyword">, </span><span class="default">$adifflen</span><span class="keyword">));<br />      </span><span class="default">$aptr </span><span class="keyword">+= </span><span class="default">$adifflen</span><span class="keyword">;<br />    }<br />    if(</span><span class="default">$bdifflen</span><span class="keyword">)<br />    {<br />      </span><span class="default">$ops</span><span class="keyword">[] = array(</span><span class="string">'+'</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$bptr</span><span class="keyword">, </span><span class="default">$bdifflen</span><span class="keyword">));<br />      </span><span class="default">$bptr </span><span class="keyword">+= </span><span class="default">$bdifflen</span><span class="keyword">;<br />    }<br />    </span><span class="default">$ops</span><span class="keyword">[] = array(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$aptr</span><span class="keyword">, </span><span class="default">$bestlen</span><span class="keyword">));<br />    </span><span class="default">$aptr </span><span class="keyword">+= </span><span class="default">$bestlen</span><span class="keyword">;<br />    </span><span class="default">$bptr </span><span class="keyword">+= </span><span class="default">$bestlen</span><span class="keyword">;<br />  }<br />  if(</span><span class="default">$aptr </span><span class="keyword">&lt; </span><span class="default">$alen</span><span class="keyword">)<br />  {<br />    </span><span class="comment">/* b has too much stuff */<br />    </span><span class="default">$ops</span><span class="keyword">[] = array(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$aptr</span><span class="keyword">));<br />  }<br />  if(</span><span class="default">$bptr </span><span class="keyword">&lt; </span><span class="default">$blen</span><span class="keyword">)<br />  {<br />    </span><span class="comment">/* a has too little stuff */<br />    </span><span class="default">$ops</span><span class="keyword">[] = array(</span><span class="string">'+'</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$bptr</span><span class="keyword">));<br />  }<br />  return </span><span class="default">$ops</span><span class="keyword">;<br />}<br /> <br /><br /></span><span class="default">Example</span><span class="keyword">:<br /><br /></span><span class="default">$tab </span><span class="keyword">= </span><span class="default">calcdiffer</span><span class="keyword">(</span><span class="string">'T?m? on jonkinlainen testi'</span><span class="keyword">,<br />                  </span><span class="string">'T?m? ei ole mink??nlainen testi.'</span><span class="keyword">);  <br /></span><span class="default">$ops </span><span class="keyword">= array(</span><span class="string">'='</span><span class="keyword">=&gt;</span><span class="string">'Ok'</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">=&gt;</span><span class="string">'Remove'</span><span class="keyword">, </span><span class="string">'+'</span><span class="keyword">=&gt;</span><span class="string">'Add'</span><span class="keyword">);<br />foreach(</span><span class="default">$tab </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">)<br />  echo </span><span class="default">$ops</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]], </span><span class="string">" '"</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="string">"'\n"</span><span class="keyword">;<br /><br /></span><span class="default">Example output</span><span class="keyword">:<br /><br /></span><span class="default">Ok </span><span class="string">'T?m? '<br /></span><span class="default">Remove </span><span class="string">'on jonki'<br /></span><span class="default">Add </span><span class="string">'ei ole mink??'<br /></span><span class="default">Ok </span><span class="string">'nlainen testi'<br /></span><span class="default">Add </span><span class="string">'.'</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129669">  <div class="votes">
    <div id="Vu129669">
    <a href="/manual/vote-note.php?id=129669&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129669">
    <a href="/manual/vote-note.php?id=129669&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129669" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129669" class="name">
  <strong class="user"><em>hartmut at php dot net</em></strong></a><a class="genanchor" href="#129669"> &para;</a><div class="date" title="2024-07-24 02:15"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129669">
<div class="phpcode"><code><span class="html">This function operates on bytes, not characters, so it is only of limited use when operating on UTF-8 encoded Unicode strings.<br /><br />Running the input strings through Normalizer ( <a href="https://www.php.net/manual/en/class.normalizer.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/class.normalizer.php</a> ) can at least somewhat help with this, but you still need to be aware that replacing, inserting or deleting a single UTF-8 encoded unicode character can wrongly report a cost of 2, 3 or 4 depending on the length of the UTF-8 sequence representing it, or even more when dealing with combining character modifiers.</span></code></div>
  </div>
 </div>
  <div class="note" id="121644">  <div class="votes">
    <div id="Vu121644">
    <a href="/manual/vote-note.php?id=121644&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121644">
    <a href="/manual/vote-note.php?id=121644&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121644" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121644" class="name">
  <strong class="user"><em>peratik at gmail dot com</em></strong></a><a class="genanchor" href="#121644"> &para;</a><div class="date" title="2017-09-16 12:24"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121644">
<div class="phpcode"><code><span class="html">python get_close_matches equivalent:<br /><br />function get_close_matches($str, $arr) {<br />    $closest = 1000;<br />    $word = false;<br />    foreach($arr as $w) {<br />        $po = levenshtein($str, $w);<br />        if ($po&lt;$closest) {<br />            $closest = $po;<br />            $word = $w;<br />        }<br />    }<br />    return $word;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="117767">  <div class="votes">
    <div id="Vu117767">
    <a href="/manual/vote-note.php?id=117767&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117767">
    <a href="/manual/vote-note.php?id=117767&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117767" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117767" class="name">
  <strong class="user"><em>qbolec</em></strong></a><a class="genanchor" href="#117767"> &para;</a><div class="date" title="2015-08-05 08:10"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117767">
<div class="phpcode"><code><span class="html">For the rare occassions,  where you want:<br />1. multibyte UTF-8 characters<br />2. linear memory consumption (that is O(n+m) , not O(n*m)) <br />3. learn the string which is the longest common subsequence<br />4. reasonable (that is O(n*m)) time complexity<br />Consider this implementation:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Strings<br /></span><span class="keyword">{<br />  public static function </span><span class="default">len</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">){<br />    return </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br />  }<br />  public static function </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">){<br />    if(</span><span class="default">$y</span><span class="keyword">===</span><span class="default">NULL</span><span class="keyword">){<br />      </span><span class="default">$y</span><span class="keyword">=</span><span class="default">self</span><span class="keyword">::</span><span class="default">len</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    }<br />    return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br />  }<br />  public static function </span><span class="default">letters</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">){<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">len</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    if(</span><span class="default">$len</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">){<br />      return array();<br />    }else if(</span><span class="default">$len </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){<br />      return array(</span><span class="default">$a</span><span class="keyword">);<br />    }else{<br />      return </span><span class="default">Arrays</span><span class="keyword">::</span><span class="default">concat</span><span class="keyword">(<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">letters</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">)),<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">letters</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">))<br />      );<br />    }<br />  }<br />  private static function </span><span class="default">lcs_last_column</span><span class="keyword">(array </span><span class="default">$A</span><span class="keyword">,array </span><span class="default">$B</span><span class="keyword">){<br />    </span><span class="default">$al</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">);<br />    </span><span class="default">$bl</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">);<br />    </span><span class="default">$last_column </span><span class="keyword">= array();<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$al</span><span class="keyword">;++</span><span class="default">$i</span><span class="keyword">){<br />      </span><span class="default">$current_row </span><span class="keyword">= array();<br />      for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;=</span><span class="default">$bl</span><span class="keyword">;++</span><span class="default">$j</span><span class="keyword">){<br />        </span><span class="comment">//$a[0,$i) vs $b[0,$j)<br />        </span><span class="keyword">if(</span><span class="default">$i</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$j </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">){<br />          </span><span class="default">$v </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }else if(</span><span class="default">$A</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]===</span><span class="default">$B</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]){<br />          </span><span class="default">$v </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">+ </span><span class="default">$last_row</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br />        }else{<br />          </span><span class="default">$v </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$last_row</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">],</span><span class="default">$current_row</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]);<br />        }<br />        </span><span class="default">$current_row</span><span class="keyword">[] = </span><span class="default">$v</span><span class="keyword">;<br />      }<br />      </span><span class="default">$last_column</span><span class="keyword">[] = </span><span class="default">$current_row</span><span class="keyword">[</span><span class="default">$bl</span><span class="keyword">];<br />      </span><span class="default">$last_row </span><span class="keyword">= </span><span class="default">$current_row</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$last_column</span><span class="keyword">;<br />  }<br />  public static function </span><span class="default">lcs</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">){<br />    </span><span class="default">$A </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">letters</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    </span><span class="default">$B </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">letters</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />    </span><span class="default">$bl</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">);<br />    if(</span><span class="default">$bl</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">){<br />      return </span><span class="string">''</span><span class="keyword">;<br />    }else if(</span><span class="default">$bl</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">){<br />      return </span><span class="default">FALSE</span><span class="keyword">===</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$A</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">)?</span><span class="string">''</span><span class="keyword">:</span><span class="default">$B</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br />    </span><span class="default">$left</span><span class="keyword">=</span><span class="default">self</span><span class="keyword">::</span><span class="default">lcs_last_column</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">,</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$bl</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">));<br />    </span><span class="default">$right</span><span class="keyword">=</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">lcs_last_column</span><span class="keyword">(</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">),</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">,</span><span class="default">$bl</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">))));<br /><br />    </span><span class="default">$best_i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$best_lcs </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach(</span><span class="default">$left </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$lcs_left</span><span class="keyword">){<br />      </span><span class="default">$option </span><span class="keyword">= </span><span class="default">$lcs_left </span><span class="keyword">+ </span><span class="default">$right</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />      if(</span><span class="default">$best_lcs </span><span class="keyword">&lt; </span><span class="default">$option</span><span class="keyword">){<br />        </span><span class="default">$best_lcs </span><span class="keyword">= </span><span class="default">$option</span><span class="keyword">;<br />        </span><span class="default">$best_i </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">;<br />      }<br />    }<br />    return <br />      </span><span class="default">self</span><span class="keyword">::</span><span class="default">lcs</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$best_i</span><span class="keyword">), </span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$bl</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">)).<br />      </span><span class="default">self</span><span class="keyword">::</span><span class="default">lcs</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$best_i</span><span class="keyword">), </span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$bl</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">));<br />  }<br /></span><span class="default">?&gt;<br /></span>This is a classic implentation in which several tricks are used:<br />1. the strings are exploded into multi-byte characters in O(n lg n) time<br />2. instead of searching for the longest path in a precomputed two-dimensional array, we search for the best point which lays in the middle column. This is achieved by spliting the second string in half, and recursively calling the algorithm twice. The only thing we need from the recursive call are the values in the middle column. The trick is to return the last column from each recursive call, which is what we need for the left part, but requires one more trick for the right part - we simply mirror the strings and the array so that the last column is the first column. Then we just find the row which maximizes the sum of lenghts in each part.<br />3. one can prove that the time consumed by the algorithm is proportional to the area of the (imaginary) two-dimensional array, thus it is O(n*m).</span></code></div>
  </div>
 </div>
  <div class="note" id="83501">  <div class="votes">
    <div id="Vu83501">
    <a href="/manual/vote-note.php?id=83501&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83501">
    <a href="/manual/vote-note.php?id=83501&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83501" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83501" class="name">
  <strong class="user"><em>luka8088 at gmail dot com</em></strong></a><a class="genanchor" href="#83501"> &para;</a><div class="date" title="2008-05-28 01:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83501">
<div class="phpcode"><code><span class="html">Simple levenshtein function without string length limit ...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">levenshtein2</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">, </span><span class="default">$cost_ins </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$cost_rep </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$cost_del </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    </span><span class="default">$d </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">, </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        <br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        </span><span class="default">$d</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$i</span><span class="keyword">;<br />    for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />        </span><span class="default">$d</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$j</span><span class="keyword">;<br />        <br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />            </span><span class="default">$c </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />            if (</span><span class="default">$str1</span><span class="keyword">{</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">} == </span><span class="default">$str2</span><span class="keyword">{</span><span class="default">$j </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">})<br />                </span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            </span><span class="default">$d</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">min</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$j </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">][</span><span class="default">$j </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">] + </span><span class="default">$c</span><span class="keyword">);<br />            </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$d</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">];<br />        }<br />    <br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="36900">  <div class="votes">
    <div id="Vu36900">
    <a href="/manual/vote-note.php?id=36900&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36900">
    <a href="/manual/vote-note.php?id=36900&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36900" title="100% like this...">
    1
    </div>
  </div>
  <a href="#36900" class="name">
  <strong class="user"><em>genialbrainmachine at  dot IHATESPAM dot tiscali dot it</em></strong></a><a class="genanchor" href="#36900"> &para;</a><div class="date" title="2003-10-26 11:55"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36900">
<div class="phpcode"><code><span class="html">I wrote this function to have an "intelligent" comparison between data to be written in a DB<br />and already existent data. Not ony calculating distances but also balancing distances for<br />each field.<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />This function calculate a balanced percentage distance between an array of strings<br />"$record" and a compared array "$compared", balanced through an array of<br />weights "$weight". The three arrays must have the same indices.<br />For an unbalanced distance, set all weights to 1.<br />The used formula is:<br />percentage distance = sum(field_levenshtein_distance * field_weight) / sum(record_field_length * field_weight) * 100<br />*/<br /></span><span class="keyword">function </span><span class="default">search_similar</span><span class="keyword">(</span><span class="default">$record</span><span class="keyword">, </span><span class="default">$weights</span><span class="keyword">, </span><span class="default">$compared</span><span class="keyword">, </span><span class="default">$precision</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">) {<br />         </span><span class="default">$field_names </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$record</span><span class="keyword">);<br />         </span><span class="comment"># "Weighted length" of $record and "weighted distance".<br />         </span><span class="keyword">foreach (</span><span class="default">$field_names </span><span class="keyword">as </span><span class="default">$field_key</span><span class="keyword">) {<br />                 </span><span class="default">$record_weight </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$record</span><span class="keyword">[</span><span class="default">$field_key</span><span class="keyword">]) * </span><span class="default">$weights</span><span class="keyword">[</span><span class="default">$field_key</span><span class="keyword">];<br />                 </span><span class="default">$weighted_distance </span><span class="keyword">+= </span><span class="default">levenshtein</span><span class="keyword">(</span><span class="default">$record</span><span class="keyword">[</span><span class="default">$field_key</span><span class="keyword">],</span><span class="default">$compared</span><span class="keyword">[</span><span class="default">$field_key</span><span class="keyword">]) * </span><span class="default">$weights</span><span class="keyword">[</span><span class="default">$field_key</span><span class="keyword">];<br />                 }<br />         </span><span class="comment"># Building the result..<br />         </span><span class="keyword">if (</span><span class="default">$record_weight</span><span class="keyword">) {<br />             return </span><span class="default">round</span><span class="keyword">((</span><span class="default">$weighted_distance </span><span class="keyword">/ </span><span class="default">$record_weight </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">),</span><span class="default">$precision</span><span class="keyword">);<br />            } elseif ((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">$record</span><span class="keyword">)) == </span><span class="default">0</span><span class="keyword">) &amp;&amp; (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">$compared</span><span class="keyword">)) == </span><span class="default">0</span><span class="keyword">)) { </span><span class="comment">// empty records<br />            </span><span class="keyword">return </span><span class="default">round</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$precision</span><span class="keyword">);<br />            } elseif (</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$weights</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) { </span><span class="comment">// all weights == 0<br />            </span><span class="keyword">return </span><span class="default">round</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$precision</span><span class="keyword">);<br />            } else {<br />            return </span><span class="default">false</span><span class="keyword">;<br />            }<br />         </span><span class="comment">/*<br />         Be very careful distinguising 0 result and false result.<br />         The function results 0 ('0.00' if $precision is 2 and so on) if:<br />         - $record and $compared are equals (even if $record and $compared are empty);<br />         - all weights are 0 (the meaning could be "no care about any field").<br />         Conversely, the function results false if $record is empty, but the weights<br />         are not all 0 and $compared is not empty. That cause a "division by 0" error.<br />         I wrote this kind of check:<br />         <br />         if ($rel_dist = search_similar(...)) {<br />             print $rel_dist;<br />            } elseif ($rel_dist == "0.00") { // supposing that $precision is 2<br />            print $rel_dist;<br />            } else {<br />            print "infinite";<br />            }<br />         <br />         */<br />         </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63274">  <div class="votes">
    <div id="Vu63274">
    <a href="/manual/vote-note.php?id=63274&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63274">
    <a href="/manual/vote-note.php?id=63274&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63274" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63274" class="name">
  <strong class="user"><em>dinesh AT dinsoft DOT net</em></strong></a><a class="genanchor" href="#63274"> &para;</a><div class="date" title="2006-03-17 03:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63274">
<div class="phpcode"><code><span class="html">Here is a string resynch function:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Trouve les operations a effectuer pour modifier $b en $a en exploitant leurs similitudes (Finds the operations required to change $b to $a)<br />// Identique a la fonction Resynch Compare de Hex Workshop<br />//<br />// Parametres:<br />//      $a Premiere chaine (cible, target)<br />//      $b Seconde chaine (source)<br />//      $l Nombre d'octets devant correspondre pour etre consides comme un bloc similaire (number of matching bytes required)<br />//      $s Distance maximale dans laquelle les blocs similaires sont cherches (search window)<br />//<br />// Retourne:<br />//      Array<br />//              Array<br />//                      [0] Operation: + Add , - Del , / Replace, = Match<br />//                      [1] Source offset<br />//                      [2] Source count<br />//                      [3] Target offset<br />//                      [4] Target count<br />//<br /></span><span class="keyword">function </span><span class="default">str_resynch</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$l</span><span class="keyword">=</span><span class="default">32</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">=</span><span class="default">2048</span><span class="keyword">) {<br />        </span><span class="default">$r</span><span class="keyword">=array();<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">),</span><span class="default">$cc</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">),</span><span class="default">$ii</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">,</span><span class="default">$z</span><span class="keyword">=</span><span class="default">$s</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$z2</span><span class="keyword">=(</span><span class="default">$z</span><span class="keyword">&lt;&lt;</span><span class="default">1</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$d</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">-</span><span class="default">$z</span><span class="keyword">;<br />                </span><span class="default">$d</span><span class="keyword">=(</span><span class="default">$d</span><span class="keyword">&lt;</span><span class="default">$ii</span><span class="keyword">)?</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$ii</span><span class="keyword">,</span><span class="default">$z2</span><span class="keyword">-</span><span class="default">$ii</span><span class="keyword">+</span><span class="default">$d</span><span class="keyword">):</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$z2</span><span class="keyword">);<br /><br />                </span><span class="default">$p</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">});<br />                </span><span class="default">$n</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />                while (</span><span class="default">$p</span><span class="keyword">!==</span><span class="default">FALSE</span><span class="keyword">) {<br />                        </span><span class="default">$m</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />                        </span><span class="default">$bi</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">;<br />                        </span><span class="default">$bp</span><span class="keyword">=</span><span class="default">$p</span><span class="keyword">;<br />                        </span><span class="default">$p</span><span class="keyword">+=</span><span class="default">$ii</span><span class="keyword">;<br />                        while ((++</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">) &amp;&amp; (++</span><span class="default">$p</span><span class="keyword">&lt;</span><span class="default">$cc</span><span class="keyword">)) {<br />                                if (</span><span class="default">$a</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">}!=</span><span class="default">$b</span><span class="keyword">{</span><span class="default">$p</span><span class="keyword">}) break;<br />                                </span><span class="default">$m</span><span class="keyword">++;<br />                        }<br />                        if (</span><span class="default">$m</span><span class="keyword">&lt;</span><span class="default">$l</span><span class="keyword">) {<br />                                </span><span class="default">$i</span><span class="keyword">=</span><span class="default">$bi</span><span class="keyword">;<br />                                </span><span class="default">$n</span><span class="keyword">=</span><span class="default">$bp</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />                                </span><span class="default">$p</span><span class="keyword">=@</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">},</span><span class="default">$n</span><span class="keyword">);<br />                        }<br />                        else {<br />                                </span><span class="default">$i</span><span class="keyword">--;<br />                                </span><span class="default">$r</span><span class="keyword">[]=array(</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$bp</span><span class="keyword">+</span><span class="default">$ii</span><span class="keyword">,</span><span class="default">$m</span><span class="keyword">); </span><span class="comment">// offset a, offset b, Count<br />                                </span><span class="default">$ii</span><span class="keyword">=</span><span class="default">$p</span><span class="keyword">;<br />                                break;<br />                        }<br />                }<br />        }<br /><br />        if (!</span><span class="default">count</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">)) return (</span><span class="default">$cc</span><span class="keyword">)?array(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$cc</span><span class="keyword">):array(array(</span><span class="string">'+'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">));<br /><br />        </span><span class="default">$o</span><span class="keyword">=array();<br />        </span><span class="default">$bi</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$bp</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">,</span><span class="default">$m</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$m</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />                if (</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]!=</span><span class="default">$bi</span><span class="keyword">) {<br />                        if (</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]!=</span><span class="default">$bp</span><span class="keyword">) {<br />                                </span><span class="comment">// Replace<br />                                </span><span class="default">$o</span><span class="keyword">[]=array(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]-</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$bp</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]-</span><span class="default">$bp</span><span class="keyword">);<br />                                </span><span class="default">$bi</span><span class="keyword">=</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />                                </span><span class="default">$bp</span><span class="keyword">=</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">];<br />                        }<br />                        else {<br />                                </span><span class="comment">// Insertion<br />                                </span><span class="default">$o</span><span class="keyword">[]=array(</span><span class="string">'+'</span><span class="keyword">,</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]-</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$bp</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />                                </span><span class="default">$bi</span><span class="keyword">=</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />                        }<br />                }<br />                elseif (</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]!=</span><span class="default">$bp</span><span class="keyword">) {<br />                        </span><span class="comment">// Delete<br />                        </span><span class="default">$o</span><span class="keyword">[]=array(</span><span class="string">'-'</span><span class="keyword">,</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$bp</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]-</span><span class="default">$bp</span><span class="keyword">);<br />                        </span><span class="default">$bp</span><span class="keyword">=</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">];<br />                }<br /><br />                </span><span class="comment">// Match<br />                </span><span class="default">$o</span><span class="keyword">[]=array(</span><span class="string">'='</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">],</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">],</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">],</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">]);<br />                </span><span class="default">$bi</span><span class="keyword">+=</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">];<br />                </span><span class="default">$bp</span><span class="keyword">+=</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">];<br />        }<br /><br />        if (</span><span class="default">$c</span><span class="keyword">!=</span><span class="default">$bi</span><span class="keyword">) {<br />                if (</span><span class="default">$cc</span><span class="keyword">!=</span><span class="default">$bp</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">[]=array(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">-</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$bp</span><span class="keyword">,</span><span class="default">$cc</span><span class="keyword">-</span><span class="default">$bp</span><span class="keyword">);<br />                else </span><span class="default">$o</span><span class="keyword">[]=array(</span><span class="string">'+'</span><span class="keyword">,</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">-</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">$bp</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />        }<br />        elseif (</span><span class="default">$cc</span><span class="keyword">!=</span><span class="default">$bp</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">[]=array(</span><span class="string">'-'</span><span class="keyword">,</span><span class="default">$bi</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$bp</span><span class="keyword">,</span><span class="default">$cc</span><span class="keyword">-</span><span class="default">$bp</span><span class="keyword">);<br /><br />        return </span><span class="default">$o</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20670">  <div class="votes">
    <div id="Vu20670">
    <a href="/manual/vote-note.php?id=20670&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20670">
    <a href="/manual/vote-note.php?id=20670&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20670" title="50% like this...">
    0
    </div>
  </div>
  <a href="#20670" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#20670"> &para;</a><div class="date" title="2002-04-11 06:57"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20670">
<div class="phpcode"><code><span class="html">For spell checking applications, delay could be tolerable if you assume the typist got the first two or three chars of each word right.  Then you'd only need to calc distances for a small segment of the dictionary.  This is a compromise but one I think a lot of spell checkers make.<br />For an example of site search using this function look at the PHP manual search button on this page.  It appears to be doing this for the PHP function list.</span></code></div>
  </div>
 </div>
  <div class="note" id="7486">  <div class="votes">
    <div id="Vu7486">
    <a href="/manual/vote-note.php?id=7486&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7486">
    <a href="/manual/vote-note.php?id=7486&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7486" title="50% like this...">
    0
    </div>
  </div>
  <a href="#7486" class="name">
  <strong class="user"><em>ad1n at dc dot uba dot ar</em></strong></a><a class="genanchor" href="#7486"> &para;</a><div class="date" title="2000-08-04 05:01"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7486">
<div class="phpcode"><code><span class="html">One application of this is when you want to look for a similar match instead of an exact one. You can sort the results of checking the distances of a word to a dictionary and sort them to see which were the more similar ones. Of course it will be a quite resourse consuming task anyway.</span></code></div>
  </div>
 </div>
  <div class="note" id="36877">  <div class="votes">
    <div id="Vu36877">
    <a href="/manual/vote-note.php?id=36877&amp;page=function.levenshtein&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36877">
    <a href="/manual/vote-note.php?id=36877&amp;page=function.levenshtein&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36877" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#36877" class="name">
  <strong class="user"><em>jlsalinas at gmx dot net</em></strong></a><a class="genanchor" href="#36877"> &para;</a><div class="date" title="2003-10-25 07:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36877">
<div class="phpcode"><code><span class="html">Regarding the post by fgilles on April 26th 2001, I suggest not to use levenshtein() function to test for over-uppercasing unless you've got plenty of time to waste in your host. ;) Anyhow, I think it's a useful feature, as I get really annoyed when reading whole messages in uppercase.<br /><br />PHP's levenshtein() function can only handle up to 255 characters, which is not realistic for user input (only the first paragraph oh this post has 285 characters). If you choose to use a custom function able to handle more than 255 characters, efficiency is an important issue.<br /><br />I use this function, specific for this case, but much faster:<br /><br />function ucase_percent ($str) {<br />    $str2 = strtolower ($str);<br />    <br />    $l = strlen ($str);<br />    $ucase = 0;<br /><br />    for ($i = 0; $i &lt; $l; $i++) {<br />        if ($str{$i} != $str2{$i}) {<br />            $ucase++;<br />        }<br />    }<br />    <br />    return $ucase / $l * 100.0;<br />}<br /><br />I think 10% is enough for written English (maybe other languages like German, which use more capital letters, need more). With some sentencies in uppercase (everybody has the right to shout occasionally), 20% would be enough; so I use a threshold of 30%. When exceeded, I lowercase the whole message.<br /><br />Hope you find it useful and it helps keeping the web free of ill-mannered people.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.levenshtein&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.levenshtein.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
