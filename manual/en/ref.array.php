<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Array Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="shorturl" href="https://www.php.net/array">
 <link rel="alternate" href="https://www.php.net/array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/array.sorting.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Array Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Array Functions - Manual" />
<meta name="twitter:description" content="Array Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Array Functions - Manual" />
<meta itemprop="description" content="Array Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Array Functions" />

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
        <a href="function.array.php">
          array &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="array.sorting.php">
          &laquo; Sorting Arrays        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      </ul>
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
            <option value='en/ref.array.php' selected="selected">English</option>
            <option value='de/ref.array.php'>German</option>
            <option value='es/ref.array.php'>Spanish</option>
            <option value='fr/ref.array.php'>French</option>
            <option value='it/ref.array.php'>Italian</option>
            <option value='ja/ref.array.php'>Japanese</option>
            <option value='pt_BR/ref.array.php'>Brazilian Portuguese</option>
            <option value='ru/ref.array.php'>Russian</option>
            <option value='tr/ref.array.php'>Turkish</option>
            <option value='uk/ref.array.php'>Ukrainian</option>
            <option value='zh/ref.array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.array" class="reference">
 <h1 class="title">Array Functions</h1>
 <div class="partintro">
   <h1 class="title">See Also</h1>
   <p class="para">
    See also <span class="function"><a href="function.is-array.php" class="function">is_array()</a></span>, <span class="function"><a href="function.explode.php" class="function">explode()</a></span>,
    <span class="function"><a href="function.implode.php" class="function">implode()</a></span>,
    <span class="function"><a href="function.preg-split.php" class="function">preg_split()</a></span>, and <span class="function"><a href="function.unset.php" class="function">unset()</a></span>.
   </p>
 </div>

 




























































































































































































































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.array.php">array</a> — Create an array</li><li><a href="function.array-all.php">array_all</a> — Checks if all array elements satisfy a callback function</li><li><a href="function.array-any.php">array_any</a> — Checks if at least one array element satisfies a callback function</li><li><a href="function.array-change-key-case.php">array_change_key_case</a> — Changes the case of all keys in an array</li><li><a href="function.array-chunk.php">array_chunk</a> — Split an array into chunks</li><li><a href="function.array-column.php">array_column</a> — Return the values from a single column in the input array</li><li><a href="function.array-combine.php">array_combine</a> — Creates an array by using one array for keys and another for its values</li><li><a href="function.array-count-values.php">array_count_values</a> — Counts the occurrences of each distinct value in an array</li><li><a href="function.array-diff.php">array_diff</a> — Computes the difference of arrays</li><li><a href="function.array-diff-assoc.php">array_diff_assoc</a> — Computes the difference of arrays with additional index check</li><li><a href="function.array-diff-key.php">array_diff_key</a> — Computes the difference of arrays using keys for comparison</li><li><a href="function.array-diff-uassoc.php">array_diff_uassoc</a> — Computes the difference of arrays with additional index check which is performed by a user supplied callback function</li><li><a href="function.array-diff-ukey.php">array_diff_ukey</a> — Computes the difference of arrays using a callback function on the keys for comparison</li><li><a href="function.array-fill.php">array_fill</a> — Fill an array with values</li><li><a href="function.array-fill-keys.php">array_fill_keys</a> — Fill an array with values, specifying keys</li><li><a href="function.array-filter.php">array_filter</a> — Filters elements of an array using a callback function</li><li><a href="function.array-find.php">array_find</a> — Returns the first element satisfying a callback function</li><li><a href="function.array-find-key.php">array_find_key</a> — Returns the key of the first element satisfying a callback function</li><li><a href="function.array-flip.php">array_flip</a> — Exchanges all keys with their associated values in an array</li><li><a href="function.array-intersect.php">array_intersect</a> — Computes the intersection of arrays</li><li><a href="function.array-intersect-assoc.php">array_intersect_assoc</a> — Computes the intersection of arrays with additional index check</li><li><a href="function.array-intersect-key.php">array_intersect_key</a> — Computes the intersection of arrays using keys for comparison</li><li><a href="function.array-intersect-uassoc.php">array_intersect_uassoc</a> — Computes the intersection of arrays with additional index check, compares indexes by a callback function</li><li><a href="function.array-intersect-ukey.php">array_intersect_ukey</a> — Computes the intersection of arrays using a callback function on the keys for comparison</li><li><a href="function.array-is-list.php">array_is_list</a> — Checks whether a given array is a list</li><li><a href="function.array-key-exists.php">array_key_exists</a> — Checks if the given key or index exists in the array</li><li><a href="function.array-key-first.php">array_key_first</a> — Gets the first key of an array</li><li><a href="function.array-key-last.php">array_key_last</a> — Gets the last key of an array</li><li><a href="function.array-keys.php">array_keys</a> — Return all the keys or a subset of the keys of an array</li><li><a href="function.array-map.php">array_map</a> — Applies the callback to the elements of the given arrays</li><li><a href="function.array-merge.php">array_merge</a> — Merge one or more arrays</li><li><a href="function.array-merge-recursive.php">array_merge_recursive</a> — Merge one or more arrays recursively</li><li><a href="function.array-multisort.php">array_multisort</a> — Sort multiple or multi-dimensional arrays</li><li><a href="function.array-pad.php">array_pad</a> — Pad array to the specified length with a value</li><li><a href="function.array-pop.php">array_pop</a> — Pop the element off the end of array</li><li><a href="function.array-product.php">array_product</a> — Calculate the product of values in an array</li><li><a href="function.array-push.php">array_push</a> — Push one or more elements onto the end of array</li><li><a href="function.array-rand.php">array_rand</a> — Pick one or more random keys out of an array</li><li><a href="function.array-reduce.php">array_reduce</a> — Iteratively reduce the array to a single value using a callback function</li><li><a href="function.array-replace.php">array_replace</a> — Replaces elements from passed arrays into the first array</li><li><a href="function.array-replace-recursive.php">array_replace_recursive</a> — Replaces elements from passed arrays into the first array recursively</li><li><a href="function.array-reverse.php">array_reverse</a> — Return an array with elements in reverse order</li><li><a href="function.array-search.php">array_search</a> — Searches the array for a given value and returns the first corresponding key if successful</li><li><a href="function.array-shift.php">array_shift</a> — Shift an element off the beginning of array</li><li><a href="function.array-slice.php">array_slice</a> — Extract a slice of the array</li><li><a href="function.array-splice.php">array_splice</a> — Remove a portion of the array and replace it with something else</li><li><a href="function.array-sum.php">array_sum</a> — Calculate the sum of values in an array</li><li><a href="function.array-udiff.php">array_udiff</a> — Computes the difference of arrays by using a callback function for data comparison</li><li><a href="function.array-udiff-assoc.php">array_udiff_assoc</a> — Computes the difference of arrays with additional index check, compares data by a callback function</li><li><a href="function.array-udiff-uassoc.php">array_udiff_uassoc</a> — Computes the difference of arrays with additional index check, compares data and indexes by a callback function</li><li><a href="function.array-uintersect.php">array_uintersect</a> — Computes the intersection of arrays, compares data by a callback function</li><li><a href="function.array-uintersect-assoc.php">array_uintersect_assoc</a> — Computes the intersection of arrays with additional index check, compares data by a callback function</li><li><a href="function.array-uintersect-uassoc.php">array_uintersect_uassoc</a> — Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions</li><li><a href="function.array-unique.php">array_unique</a> — Removes duplicate values from an array</li><li><a href="function.array-unshift.php">array_unshift</a> — Prepend one or more elements to the beginning of an array</li><li><a href="function.array-values.php">array_values</a> — Return all the values of an array</li><li><a href="function.array-walk.php">array_walk</a> — Apply a user supplied function to every member of an array</li><li><a href="function.array-walk-recursive.php">array_walk_recursive</a> — Apply a user function recursively to every member of an array</li><li><a href="function.arsort.php">arsort</a> — Sort an array in descending order and maintain index association</li><li><a href="function.asort.php">asort</a> — Sort an array in ascending order and maintain index association</li><li><a href="function.compact.php">compact</a> — Create array containing variables and their values</li><li><a href="function.count.php">count</a> — Counts all elements in an array or in a Countable object</li><li><a href="function.current.php">current</a> — Return the current element in an array</li><li><a href="function.each.php">each</a> — Return the current key and value pair from an array and advance the array cursor</li><li><a href="function.end.php">end</a> — Set the internal pointer of an array to its last element</li><li><a href="function.extract.php">extract</a> — Import variables into the current symbol table from an array</li><li><a href="function.in-array.php">in_array</a> — Checks if a value exists in an array</li><li><a href="function.key.php">key</a> — Fetch a key from an array</li><li><a href="function.key-exists.php">key_exists</a> — Alias of array_key_exists</li><li><a href="function.krsort.php">krsort</a> — Sort an array by key in descending order</li><li><a href="function.ksort.php">ksort</a> — Sort an array by key in ascending order</li><li><a href="function.list.php">list</a> — Assign variables as if they were an array</li><li><a href="function.natcasesort.php">natcasesort</a> — Sort an array using a case insensitive &quot;natural order&quot; algorithm</li><li><a href="function.natsort.php">natsort</a> — Sort an array using a &quot;natural order&quot; algorithm</li><li><a href="function.next.php">next</a> — Advance the internal pointer of an array</li><li><a href="function.pos.php">pos</a> — Alias of current</li><li><a href="function.prev.php">prev</a> — Rewind the internal array pointer</li><li><a href="function.range.php">range</a> — Create an array containing a range of elements</li><li><a href="function.reset.php">reset</a> — Set the internal pointer of an array to its first element</li><li><a href="function.rsort.php">rsort</a> — Sort an array in descending order</li><li><a href="function.shuffle.php">shuffle</a> — Shuffle an array</li><li><a href="function.sizeof.php">sizeof</a> — Alias of count</li><li><a href="function.sort.php">sort</a> — Sort an array in ascending order</li><li><a href="function.uasort.php">uasort</a> — Sort an array with a user-defined comparison function and maintain index association</li><li><a href="function.uksort.php">uksort</a> — Sort an array by keys using a user-defined comparison function</li><li><a href="function.usort.php">usort</a> — Sort an array by values using a user-defined comparison function</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/array/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122866">  <div class="votes">
    <div id="Vu122866">
    <a href="/manual/vote-note.php?id=122866&amp;page=ref.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122866">
    <a href="/manual/vote-note.php?id=122866&amp;page=ref.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122866" title="52% like this...">
    16
    </div>
  </div>
  <a href="#122866" class="name">
  <strong class="user"><em>permanovd at gmail dot com</em></strong></a><a class="genanchor" href="#122866"> &para;</a><div class="date" title="2018-06-21 10:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122866">
<div class="phpcode"><code><span class="html">A simple trick that can help you to guess what diff/intersect or sort function does by name.<br /><br />[suffix] assoc - additional index check. Compares both value and index.<br /><br />Example: array_diff_assoc, array_intersect_assoc.<br /><br />[suffix] key - index only check. Ignores value of array, compares only indexes.<br /><br />Example: array_diff_key, array_intersect_key.<br /><br />[suffix] **empty** - no "key" or "assoc" word in suffix. Compares values only. Ignores indexes of array.<br /><br />Example: array_diff, array_intersect.<br /><br />[prefix] u - will do comparison with user defined function. Letter u can be used twice in some functions (like array_udiff_uassoc), this means that you have to use 2 functions (one for value, one for index).<br /><br />Example: array_udiff_uassoc, array_uintersect_assoc.<br /><br />This also works with array sort functions:<br /><br />[prefix] a - associative. Will preserve keys.<br /><br />Example: arsort, asort.<br /><br />[prefix] k - key sort. Will sort array by keys.<br /><br />Example: uksort, ksort.<br /><br />[prefix] r - reverse. Will sort array in reverse order.<br /><br />Example: rsort, krsort.<br /><br />[prefix] u - sort by user defined function (same as for diff/intersect). <br /><br />Example: usort, uasort.</span></code></div>
  </div>
 </div>
  <div class="note" id="129473">  <div class="votes">
    <div id="Vu129473">
    <a href="/manual/vote-note.php?id=129473&amp;page=ref.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129473">
    <a href="/manual/vote-note.php?id=129473&amp;page=ref.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129473" title="61% like this...">
    8
    </div>
  </div>
  <a href="#129473" class="name">
  <strong class="user"><em>et2225zas14 at susu dot ru</em></strong></a><a class="genanchor" href="#129473"> &para;</a><div class="date" title="2024-05-08 11:32"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129473">
<div class="phpcode"><code><span class="html">Be careful with type hints in callbacks when using array-traverse functions. In some cases, this may silently cause the data type of elements to change. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="comment">// Missing fatal TypeError, No side effects<br /></span><span class="default">$unexpected </span><span class="keyword">= </span><span class="default">array_filter</span><span class="keyword">([</span><span class="string">'123'</span><span class="keyword">, (string) </span><span class="default">PHP_INT_MAX</span><span class="keyword">], fn (</span><span class="default">int $item</span><span class="keyword">) =&gt; </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$unexpected</span><span class="keyword">);<br /><br /></span><span class="comment">// Missing fatal TypeError, Typecasting side effect<br /></span><span class="default">$unexpectedTypecasting </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(fn (</span><span class="default">int $item</span><span class="keyword">) =&gt; </span><span class="default">$item</span><span class="keyword">, [</span><span class="string">'123'</span><span class="keyword">, (string) </span><span class="default">PHP_INT_MAX</span><span class="keyword">]);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$unexpectedTypecasting</span><span class="keyword">);<br /><br /></span><span class="comment">// Missing fatal TypeError, Typecasting side effect<br /></span><span class="default">$unexpectedTypecasting </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(fn (</span><span class="default">string $item</span><span class="keyword">) =&gt; </span><span class="default">$item</span><span class="keyword">, [</span><span class="default">123</span><span class="keyword">, </span><span class="default">PHP_INT_MAX</span><span class="keyword">]);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$unexpectedTypecasting</span><span class="keyword">);<br /><br /></span><span class="comment">// Missing fatal TypeError, Typecasting side effect<br /></span><span class="default">$unexpectedTypecasting </span><span class="keyword">= </span><span class="default">array_reduce</span><span class="keyword">([</span><span class="string">'123'</span><span class="keyword">, (string) </span><span class="default">PHP_INT_MAX</span><span class="keyword">], fn (?</span><span class="default">int $carry</span><span class="keyword">, </span><span class="default">int $item</span><span class="keyword">) =&gt; </span><span class="default">$item</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$unexpectedTypecasting</span><span class="keyword">);<br /><br /></span><span class="default">$bigIntValue </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">((string) </span><span class="default">PHP_INT_MAX</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">);<br /></span><span class="comment">// Fatal TypeError<br /></span><span class="default">$expectedTypeError </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(fn (</span><span class="default">int $item</span><span class="keyword">) =&gt; </span><span class="default">$item</span><span class="keyword">, [</span><span class="default">$bigIntValue</span><span class="keyword">]);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$expectedTypeError</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The above example will output (PHP version 8.3.6, error_reporting E_ALL):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">array(</span><span class="default">2</span><span class="keyword">) {<br />  [</span><span class="default">0</span><span class="keyword">]=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">) </span><span class="string">"123"<br />  </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">19</span><span class="keyword">) </span><span class="string">"9223372036854775807"<br /></span><span class="keyword">}<br />array(</span><span class="default">2</span><span class="keyword">) {<br />  [</span><span class="default">0</span><span class="keyword">]=&gt;<br />  </span><span class="default">int</span><span class="keyword">(</span><span class="default">123</span><span class="keyword">)<br />  [</span><span class="default">1</span><span class="keyword">]=&gt;<br />  </span><span class="default">int</span><span class="keyword">(</span><span class="default">9223372036854775807</span><span class="keyword">)<br />}<br />array(</span><span class="default">2</span><span class="keyword">) {<br />  [</span><span class="default">0</span><span class="keyword">]=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">) </span><span class="string">"123"<br />  </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">19</span><span class="keyword">) </span><span class="string">"9223372036854775807"<br /></span><span class="keyword">}<br /></span><span class="default">int</span><span class="keyword">(</span><span class="default">9223372036854775807</span><span class="keyword">)<br /><br /></span><span class="default">Fatal error</span><span class="keyword">: </span><span class="default">Uncaught TypeError</span><span class="keyword">: {</span><span class="default">closure</span><span class="keyword">}(): </span><span class="default">Argument </span><span class="comment">#1 ($item) must be of type int, string given<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85785">  <div class="votes">
    <div id="Vu85785">
    <a href="/manual/vote-note.php?id=85785&amp;page=ref.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85785">
    <a href="/manual/vote-note.php?id=85785&amp;page=ref.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85785" title="50% like this...">
    4
    </div>
  </div>
  <a href="#85785" class="name">
  <strong class="user"><em>renatonascto at gmail dot com</em></strong></a><a class="genanchor" href="#85785"> &para;</a><div class="date" title="2008-09-17 11:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85785">
<div class="phpcode"><code><span class="html">Big arrays use a lot of memory possibly resulting in memory limit errors. You can reduce memory usage on your script by destroying them as soon as you´re done with them. I was able to get over a few megabytes of memory by simply destroying some variables I didn´t use anymore. <br />You can view the memory usage/gain by using the funcion memory_get_usage(). Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="123886">  <div class="votes">
    <div id="Vu123886">
    <a href="/manual/vote-note.php?id=123886&amp;page=ref.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123886">
    <a href="/manual/vote-note.php?id=123886&amp;page=ref.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123886" title="48% like this...">
    -3
    </div>
  </div>
  <a href="#123886" class="name">
  <strong class="user"><em>indioeuropeo at driverop dot com</em></strong></a><a class="genanchor" href="#123886"> &para;</a><div class="date" title="2019-05-27 02:27"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123886">
<div class="phpcode"><code><span class="html">I need to take an element from the Array and change its position within the Array by moving the rest of the elements as required.<br />This is the function that does it. The first parameter is the working Array. The second is the position of the element to move and the third is the position where to move the element.<br />The function returns the modified Array.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_move_elem</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">, </span><span class="default">$to</span><span class="keyword">) {<br />    if (</span><span class="default">$from </span><span class="keyword">== </span><span class="default">$to</span><span class="keyword">) { return </span><span class="default">$array</span><span class="keyword">; }<br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    if ((</span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">$from</span><span class="keyword">) and (</span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">$to</span><span class="keyword">)) {<br />        if (</span><span class="default">$from </span><span class="keyword">&lt; </span><span class="default">$to</span><span class="keyword">) {<br />            </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$from</span><span class="keyword">];<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$from</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$to</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">];<br />            }<br />            </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$to</span><span class="keyword">] = </span><span class="default">$f</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$from</span><span class="keyword">];<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$from</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">$to</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) {<br />                </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br />            }<br />            </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$to</span><span class="keyword">] = </span><span class="default">$f</span><span class="keyword">;<br />        }<br />        <br />    }<br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span>Examples:<br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(</span><span class="string">'Cero'</span><span class="keyword">,</span><span class="string">'Uno'</span><span class="keyword">,</span><span class="string">'Dos'</span><span class="keyword">,</span><span class="string">'Tres'</span><span class="keyword">,</span><span class="string">'Cuatro'</span><span class="keyword">,</span><span class="string">'Cinco'</span><span class="keyword">,</span><span class="string">'Seis'</span><span class="keyword">,</span><span class="string">'Siete'</span><span class="keyword">,</span><span class="string">'Ocho'</span><span class="keyword">,</span><span class="string">'Nueve'</span><span class="keyword">,</span><span class="string">'Diez'</span><span class="keyword">);<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_move_elem</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">); </span><span class="comment">// Move element in position 3 to position 5...<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_move_elem</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">); </span><span class="comment">// Move element in position 5 to position 3, leaving array as it was... ;)<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>Return:<br /><span class="default">&lt;?php<br /></span><span class="keyword">Array ( [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">Cero </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">Uno </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">Dos </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="default">Cuatro </span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] =&gt; </span><span class="default">Cinco </span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] =&gt; </span><span class="default">Tres </span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] =&gt; </span><span class="default">Seis </span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] =&gt; </span><span class="default">Siete </span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] =&gt; </span><span class="default">Ocho </span><span class="keyword">[</span><span class="default">9</span><span class="keyword">] =&gt; </span><span class="default">Nueve </span><span class="keyword">[</span><span class="default">10</span><span class="keyword">] =&gt; </span><span class="default">Diez </span><span class="keyword">)<br />Array ( [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">Cero </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">Uno </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">Dos </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="default">Tres </span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] =&gt; </span><span class="default">Cuatro </span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] =&gt; </span><span class="default">Cinco </span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] =&gt; </span><span class="default">Seis </span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] =&gt; </span><span class="default">Siete </span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] =&gt; </span><span class="default">Ocho </span><span class="keyword">[</span><span class="default">9</span><span class="keyword">] =&gt; </span><span class="default">Nueve </span><span class="keyword">[</span><span class="default">10</span><span class="keyword">] =&gt; </span><span class="default">Diez </span><span class="keyword">)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.array.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.array.php">Arrays</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.array.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="array.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="array.sorting.php" title="Sorting Arrays">Sorting Arrays</a>
                        </li>
                                                <li class="current">
                            <a href="ref.array.php" title="Array Functions">Array Functions</a>
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
