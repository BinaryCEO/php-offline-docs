<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Arrays - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.array.php">
 <link rel="shorturl" href="https://www.php.net/array">
 <link rel="alternate" href="https://www.php.net/array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.vartype.php">
 <link rel="prev" href="https://www.php.net/manual/en/refs.basic.vartype.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Arrays" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Arrays - Manual" />
<meta name="twitter:description" content="Arrays" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Arrays - Manual" />
<meta itemprop="description" content="Arrays" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Arrays" />

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
        <a href="intro.array.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="refs.basic.vartype.php">
          &laquo; Variable and Type Related Extensions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      </ul>
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
            <option value='en/book.array.php' selected="selected">English</option>
            <option value='de/book.array.php'>German</option>
            <option value='es/book.array.php'>Spanish</option>
            <option value='fr/book.array.php'>French</option>
            <option value='it/book.array.php'>Italian</option>
            <option value='ja/book.array.php'>Japanese</option>
            <option value='pt_BR/book.array.php'>Brazilian Portuguese</option>
            <option value='ru/book.array.php'>Russian</option>
            <option value='tr/book.array.php'>Turkish</option>
            <option value='uk/book.array.php'>Ukrainian</option>
            <option value='zh/book.array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.array" class="book">
 
 <h1 class="title">Arrays</h1>

 

 




 






 








<ul class="chunklist chunklist_book"><li><a href="intro.array.php">Introduction</a></li><li><a href="array.constants.php">Predefined Constants</a></li><li><a href="array.sorting.php">Sorting Arrays</a></li><li><a href="ref.array.php">Array Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.array.php">array</a> — Create an array</li><li><a href="function.array-all.php">array_all</a> — Checks if all array elements satisfy a callback function</li><li><a href="function.array-any.php">array_any</a> — Checks if at least one array element satisfies a callback function</li><li><a href="function.array-change-key-case.php">array_change_key_case</a> — Changes the case of all keys in an array</li><li><a href="function.array-chunk.php">array_chunk</a> — Split an array into chunks</li><li><a href="function.array-column.php">array_column</a> — Return the values from a single column in the input array</li><li><a href="function.array-combine.php">array_combine</a> — Creates an array by using one array for keys and another for its values</li><li><a href="function.array-count-values.php">array_count_values</a> — Counts the occurrences of each distinct value in an array</li><li><a href="function.array-diff.php">array_diff</a> — Computes the difference of arrays</li><li><a href="function.array-diff-assoc.php">array_diff_assoc</a> — Computes the difference of arrays with additional index check</li><li><a href="function.array-diff-key.php">array_diff_key</a> — Computes the difference of arrays using keys for comparison</li><li><a href="function.array-diff-uassoc.php">array_diff_uassoc</a> — Computes the difference of arrays with additional index check which is performed by a user supplied callback function</li><li><a href="function.array-diff-ukey.php">array_diff_ukey</a> — Computes the difference of arrays using a callback function on the keys for comparison</li><li><a href="function.array-fill.php">array_fill</a> — Fill an array with values</li><li><a href="function.array-fill-keys.php">array_fill_keys</a> — Fill an array with values, specifying keys</li><li><a href="function.array-filter.php">array_filter</a> — Filters elements of an array using a callback function</li><li><a href="function.array-find.php">array_find</a> — Returns the first element satisfying a callback function</li><li><a href="function.array-find-key.php">array_find_key</a> — Returns the key of the first element satisfying a callback function</li><li><a href="function.array-flip.php">array_flip</a> — Exchanges all keys with their associated values in an array</li><li><a href="function.array-intersect.php">array_intersect</a> — Computes the intersection of arrays</li><li><a href="function.array-intersect-assoc.php">array_intersect_assoc</a> — Computes the intersection of arrays with additional index check</li><li><a href="function.array-intersect-key.php">array_intersect_key</a> — Computes the intersection of arrays using keys for comparison</li><li><a href="function.array-intersect-uassoc.php">array_intersect_uassoc</a> — Computes the intersection of arrays with additional index check, compares indexes by a callback function</li><li><a href="function.array-intersect-ukey.php">array_intersect_ukey</a> — Computes the intersection of arrays using a callback function on the keys for comparison</li><li><a href="function.array-is-list.php">array_is_list</a> — Checks whether a given array is a list</li><li><a href="function.array-key-exists.php">array_key_exists</a> — Checks if the given key or index exists in the array</li><li><a href="function.array-key-first.php">array_key_first</a> — Gets the first key of an array</li><li><a href="function.array-key-last.php">array_key_last</a> — Gets the last key of an array</li><li><a href="function.array-keys.php">array_keys</a> — Return all the keys or a subset of the keys of an array</li><li><a href="function.array-map.php">array_map</a> — Applies the callback to the elements of the given arrays</li><li><a href="function.array-merge.php">array_merge</a> — Merge one or more arrays</li><li><a href="function.array-merge-recursive.php">array_merge_recursive</a> — Merge one or more arrays recursively</li><li><a href="function.array-multisort.php">array_multisort</a> — Sort multiple or multi-dimensional arrays</li><li><a href="function.array-pad.php">array_pad</a> — Pad array to the specified length with a value</li><li><a href="function.array-pop.php">array_pop</a> — Pop the element off the end of array</li><li><a href="function.array-product.php">array_product</a> — Calculate the product of values in an array</li><li><a href="function.array-push.php">array_push</a> — Push one or more elements onto the end of array</li><li><a href="function.array-rand.php">array_rand</a> — Pick one or more random keys out of an array</li><li><a href="function.array-reduce.php">array_reduce</a> — Iteratively reduce the array to a single value using a callback function</li><li><a href="function.array-replace.php">array_replace</a> — Replaces elements from passed arrays into the first array</li><li><a href="function.array-replace-recursive.php">array_replace_recursive</a> — Replaces elements from passed arrays into the first array recursively</li><li><a href="function.array-reverse.php">array_reverse</a> — Return an array with elements in reverse order</li><li><a href="function.array-search.php">array_search</a> — Searches the array for a given value and returns the first corresponding key if successful</li><li><a href="function.array-shift.php">array_shift</a> — Shift an element off the beginning of array</li><li><a href="function.array-slice.php">array_slice</a> — Extract a slice of the array</li><li><a href="function.array-splice.php">array_splice</a> — Remove a portion of the array and replace it with something else</li><li><a href="function.array-sum.php">array_sum</a> — Calculate the sum of values in an array</li><li><a href="function.array-udiff.php">array_udiff</a> — Computes the difference of arrays by using a callback function for data comparison</li><li><a href="function.array-udiff-assoc.php">array_udiff_assoc</a> — Computes the difference of arrays with additional index check, compares data by a callback function</li><li><a href="function.array-udiff-uassoc.php">array_udiff_uassoc</a> — Computes the difference of arrays with additional index check, compares data and indexes by a callback function</li><li><a href="function.array-uintersect.php">array_uintersect</a> — Computes the intersection of arrays, compares data by a callback function</li><li><a href="function.array-uintersect-assoc.php">array_uintersect_assoc</a> — Computes the intersection of arrays with additional index check, compares data by a callback function</li><li><a href="function.array-uintersect-uassoc.php">array_uintersect_uassoc</a> — Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions</li><li><a href="function.array-unique.php">array_unique</a> — Removes duplicate values from an array</li><li><a href="function.array-unshift.php">array_unshift</a> — Prepend one or more elements to the beginning of an array</li><li><a href="function.array-values.php">array_values</a> — Return all the values of an array</li><li><a href="function.array-walk.php">array_walk</a> — Apply a user supplied function to every member of an array</li><li><a href="function.array-walk-recursive.php">array_walk_recursive</a> — Apply a user function recursively to every member of an array</li><li><a href="function.arsort.php">arsort</a> — Sort an array in descending order and maintain index association</li><li><a href="function.asort.php">asort</a> — Sort an array in ascending order and maintain index association</li><li><a href="function.compact.php">compact</a> — Create array containing variables and their values</li><li><a href="function.count.php">count</a> — Counts all elements in an array or in a Countable object</li><li><a href="function.current.php">current</a> — Return the current element in an array</li><li><a href="function.each.php">each</a> — Return the current key and value pair from an array and advance the array cursor</li><li><a href="function.end.php">end</a> — Set the internal pointer of an array to its last element</li><li><a href="function.extract.php">extract</a> — Import variables into the current symbol table from an array</li><li><a href="function.in-array.php">in_array</a> — Checks if a value exists in an array</li><li><a href="function.key.php">key</a> — Fetch a key from an array</li><li><a href="function.key-exists.php">key_exists</a> — Alias of array_key_exists</li><li><a href="function.krsort.php">krsort</a> — Sort an array by key in descending order</li><li><a href="function.ksort.php">ksort</a> — Sort an array by key in ascending order</li><li><a href="function.list.php">list</a> — Assign variables as if they were an array</li><li><a href="function.natcasesort.php">natcasesort</a> — Sort an array using a case insensitive &quot;natural order&quot; algorithm</li><li><a href="function.natsort.php">natsort</a> — Sort an array using a &quot;natural order&quot; algorithm</li><li><a href="function.next.php">next</a> — Advance the internal pointer of an array</li><li><a href="function.pos.php">pos</a> — Alias of current</li><li><a href="function.prev.php">prev</a> — Rewind the internal array pointer</li><li><a href="function.range.php">range</a> — Create an array containing a range of elements</li><li><a href="function.reset.php">reset</a> — Set the internal pointer of an array to its first element</li><li><a href="function.rsort.php">rsort</a> — Sort an array in descending order</li><li><a href="function.shuffle.php">shuffle</a> — Shuffle an array</li><li><a href="function.sizeof.php">sizeof</a> — Alias of count</li><li><a href="function.sort.php">sort</a> — Sort an array in ascending order</li><li><a href="function.uasort.php">uasort</a> — Sort an array with a user-defined comparison function and maintain index association</li><li><a href="function.uksort.php">uksort</a> — Sort an array by keys using a user-defined comparison function</li><li><a href="function.usort.php">usort</a> — Sort an array by values using a user-defined comparison function</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/array/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83496">  <div class="votes">
    <div id="Vu83496">
    <a href="/manual/vote-note.php?id=83496&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83496">
    <a href="/manual/vote-note.php?id=83496&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83496" title="61% like this...">
    107
    </div>
  </div>
  <a href="#83496" class="name">
  <strong class="user"><em>applegrew at rediffmail dot com</em></strong></a><a class="genanchor" href="#83496"> &para;</a><div class="date" title="2008-05-28 08:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83496">
<div class="phpcode"><code><span class="html">For newbies like me.<br /><br />Creating new arrays:-<br />//Creates a blank array.<br />$theVariable = array();<br /><br />//Creates an array with elements.<br />$theVariable = array("A", "B", "C");<br /><br />//Creating Associaive array.<br />$theVariable = array(1 =&gt; "http//google.com", 2=&gt; "<a href="http://yahoo.com" rel="nofollow" target="_blank">http://yahoo.com</a>");<br /><br />//Creating Associaive array with named keys<br />$theVariable = array("google" =&gt; "http//google.com", "yahoo"=&gt; "<a href="http://yahoo.com" rel="nofollow" target="_blank">http://yahoo.com</a>");<br /><br />Note:<br />New value can be added to the array as shown below.<br />$theVariable[] = "D";<br />$theVariable[] = "E";</span></code></div>
  </div>
 </div>
  <div class="note" id="91470">  <div class="votes">
    <div id="Vu91470">
    <a href="/manual/vote-note.php?id=91470&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91470">
    <a href="/manual/vote-note.php?id=91470&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91470" title="57% like this...">
    24
    </div>
  </div>
  <a href="#91470" class="name">
  <strong class="user"><em>Tyler Bannister</em></strong></a><a class="genanchor" href="#91470"> &para;</a><div class="date" title="2009-06-11 06:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91470">
<div class="phpcode"><code><span class="html">To delete an individual array element use the unset function<br /><br />For example:<br /><br /><span class="default">&lt;?PHP<br />    $arr </span><span class="keyword">= array( </span><span class="string">"A"</span><span class="keyword">, </span><span class="string">"B"</span><span class="keyword">, </span><span class="string">"C" </span><span class="keyword">);<br />    unset( </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br />    </span><span class="comment">// now $arr = array( "A", "C" );<br /></span><span class="default">?&gt;<br /></span><br />Unlink is for deleting files.</span></code></div>
  </div>
 </div>
  <div class="note" id="89898">  <div class="votes">
    <div id="Vu89898">
    <a href="/manual/vote-note.php?id=89898&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89898">
    <a href="/manual/vote-note.php?id=89898&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89898" title="53% like this...">
    6
    </div>
  </div>
  <a href="#89898" class="name">
  <strong class="user"><em>macnimble at gmail dot com</em></strong></a><a class="genanchor" href="#89898"> &para;</a><div class="date" title="2009-03-27 06:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89898">
<div class="phpcode"><code><span class="html">Converting a linear array (like a mysql record set) into a tree, or multi-dimensional array can be a real bugbear. Capitalizing on references in PHP, we can 'stack' an array in one pass, using one loop, like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># array_stack()<br /># Original idea from:<br /># <a href="http://www.ideashower.com/our_solutions/" rel="nofollow" target="_blank">http://www.ideashower.com/our_solutions/</a><br />#   create-a-parent-child-array-structure-in-one-pass/<br /></span><span class="keyword">function </span><span class="default">array_stack </span><span class="keyword">(&amp;</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$p </span><span class="keyword">= </span><span class="string">'@parent'</span><span class="keyword">, </span><span class="default">$c </span><span class="keyword">= </span><span class="string">'@children'</span><span class="keyword">)<br />{<br />  </span><span class="default">$l </span><span class="keyword">= </span><span class="default">$t </span><span class="keyword">= array();<br />  foreach (</span><span class="default">$a </span><span class="keyword">AS </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">):<br />    if (!</span><span class="default">$val</span><span class="keyword">[</span><span class="default">$p</span><span class="keyword">]) </span><span class="default">$t</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] =&amp; </span><span class="default">$l</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    else </span><span class="default">$l</span><span class="keyword">[</span><span class="default">$val</span><span class="keyword">[</span><span class="default">$p</span><span class="keyword">]][</span><span class="default">$c</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] =&amp; </span><span class="default">$l</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    </span><span class="default">$l</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = (array)</span><span class="default">$l</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] + </span><span class="default">$val</span><span class="keyword">;<br />  endforeach;<br />  return </span><span class="default">$a </span><span class="keyword">= array(</span><span class="string">'tree' </span><span class="keyword">=&gt; </span><span class="default">$t</span><span class="keyword">, </span><span class="string">'leaf' </span><span class="keyword">=&gt; </span><span class="default">$l</span><span class="keyword">);<br />}<br /><br /></span><span class="comment"># Example:<br /></span><span class="default">$node </span><span class="keyword">= array();<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = array(</span><span class="string">'@parent' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="string">'title' </span><span class="keyword">=&gt; </span><span class="string">'I am node 1.'</span><span class="keyword">);<br /></span><span class="comment">#     ^-----------------------v Link @parent value to key.<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = array(</span><span class="string">'@parent' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'title' </span><span class="keyword">=&gt; </span><span class="string">'I am node 2.'</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = array(</span><span class="string">'@parent' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'title' </span><span class="keyword">=&gt; </span><span class="string">'I am node 3.'</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = array(</span><span class="string">'@parent' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'title' </span><span class="keyword">=&gt; </span><span class="string">'I am node 4.'</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = array(</span><span class="string">'@parent' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">, </span><span class="string">'title' </span><span class="keyword">=&gt; </span><span class="string">'I am node 5.'</span><span class="keyword">);<br /><br /></span><span class="default">array_stack</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);<br /><br /></span><span class="default">$node</span><span class="keyword">[</span><span class="string">'leaf'</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">][</span><span class="string">'title'</span><span class="keyword">] = </span><span class="string">'I am node one.'</span><span class="keyword">;<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="string">'leaf'</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">][</span><span class="string">'title'</span><span class="keyword">] = </span><span class="string">'I am node two.'</span><span class="keyword">;<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="string">'leaf'</span><span class="keyword">][</span><span class="default">3</span><span class="keyword">][</span><span class="string">'title'</span><span class="keyword">] = </span><span class="string">'I am node three.'</span><span class="keyword">;<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="string">'leaf'</span><span class="keyword">][</span><span class="default">4</span><span class="keyword">][</span><span class="string">'title'</span><span class="keyword">] = </span><span class="string">'I am node four.'</span><span class="keyword">;<br /></span><span class="default">$node</span><span class="keyword">[</span><span class="string">'leaf'</span><span class="keyword">][</span><span class="default">5</span><span class="keyword">][</span><span class="string">'title'</span><span class="keyword">] = </span><span class="string">'I am node five.'</span><span class="keyword">;<br /><br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">,</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">[</span><span class="string">'tree'</span><span class="keyword">],</span><span class="default">TRUE</span><span class="keyword">),</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Note that there's no parameter checking on the array value, but this is only to keep the function size small. One could easily a quick check in there to make sure the $a parameter was in fact an array.<br /><br />Hope you find it useful. Huge thanks to Nate Weiner of IdeaShower.com for providing the original function I built on.</span></code></div>
  </div>
 </div>
  <div class="note" id="86287">  <div class="votes">
    <div id="Vu86287">
    <a href="/manual/vote-note.php?id=86287&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86287">
    <a href="/manual/vote-note.php?id=86287&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86287" title="52% like this...">
    2
    </div>
  </div>
  <a href="#86287" class="name">
  <strong class="user"><em>webmaster at infoproducts dot x10hosting dot com</em></strong></a><a class="genanchor" href="#86287"> &para;</a><div class="date" title="2008-10-10 07:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86287">
<div class="phpcode"><code><span class="html">New value can also be added to the array as shown below.<br />$theVariable["google"] = "http//google.com";<br />or<br />$theVariable["1"] = "http//google.com";</span></code></div>
  </div>
 </div>
  <div class="note" id="96598">  <div class="votes">
    <div id="Vu96598">
    <a href="/manual/vote-note.php?id=96598&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96598">
    <a href="/manual/vote-note.php?id=96598&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96598" title="51% like this...">
    2
    </div>
  </div>
  <a href="#96598" class="name">
  <strong class="user"><em>dragos dot rusu at NOSPAM dot bytex dot ro</em></strong></a><a class="genanchor" href="#96598"> &para;</a><div class="date" title="2010-03-07 06:15"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96598">
<div class="phpcode"><code><span class="html">If an array item is declared with key as NULL, array key will automatically be converted to empty string '', as follows:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array(<br />    </span><span class="default">NULL </span><span class="keyword">=&gt; </span><span class="string">'zero'</span><span class="keyword">,<br />    </span><span class="default">1    </span><span class="keyword">=&gt; </span><span class="string">'one'</span><span class="keyword">,<br />    </span><span class="default">2    </span><span class="keyword">=&gt; </span><span class="string">'two'</span><span class="keyword">);<br /><br /></span><span class="comment">// This will show empty string for key associated with "zero" value<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));<br /><br /></span><span class="comment">// Array elements are shown<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />while( </span><span class="default">key</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) !== </span><span class="default">NULL </span><span class="keyword">)<br />{<br />  echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) . </span><span class="string">": "</span><span class="keyword">.</span><span class="default">current</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;</span><span class="comment">// PHP_EOL<br />  </span><span class="default">next</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Array elements are not shown<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />while( </span><span class="default">key</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) != </span><span class="default">NULL </span><span class="keyword">) </span><span class="comment">// '' == null   =&gt; no iteration will be executed<br /></span><span class="keyword">{<br />  echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) . </span><span class="string">": "</span><span class="keyword">.</span><span class="default">current</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;</span><span class="comment">// PHP_EOL<br />  </span><span class="default">next</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92702">  <div class="votes">
    <div id="Vu92702">
    <a href="/manual/vote-note.php?id=92702&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92702">
    <a href="/manual/vote-note.php?id=92702&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92702" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92702" class="name">
  <strong class="user"><em>sunear at gmail dot com</em></strong></a><a class="genanchor" href="#92702"> &para;</a><div class="date" title="2009-08-04 10:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92702">
<div class="phpcode"><code><span class="html">Made this function to delete elements in an array;
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">array_del_elm</span><span class="keyword">(</span><span class="default">$input_array</span><span class="keyword">, </span><span class="default">$del_indexes</span><span class="keyword">) {
<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">)) {
<br />        </span><span class="default">$indexes </span><span class="keyword">= </span><span class="default">$del_indexes</span><span class="keyword">;
<br />    } elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">)) {
<br />        </span><span class="default">$indexes </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">);
<br />    } elseif(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">)) {
<br />        </span><span class="default">$indexes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = (integer)</span><span class="default">$del_indexes</span><span class="keyword">;
<br />    } else return;
<br />    </span><span class="default">$del_indexes </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />    
<br />    </span><span class="default">$cur_index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    if (</span><span class="default">sort</span><span class="keyword">(</span><span class="default">$indexes</span><span class="keyword">)) for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$input_array</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {
<br />        if (</span><span class="default">$i </span><span class="keyword">== </span><span class="default">$indexes</span><span class="keyword">[</span><span class="default">$cur_index</span><span class="keyword">]) {
<br />            </span><span class="default">$cur_index</span><span class="keyword">++;
<br />            if (</span><span class="default">$cur_index </span><span class="keyword">== </span><span class="default">count</span><span class="keyword">(</span><span class="default">$indexes</span><span class="keyword">)) return </span><span class="default">$output_array</span><span class="keyword">;
<br />            continue;
<br />        }
<br />        </span><span class="default">$output_array</span><span class="keyword">[] = </span><span class="default">$input_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    }
<br />    return </span><span class="default">$output_array</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />but then i saw the methods of doing the same by Tyler Bannister &amp; Paul, could see that theirs were faster, but had floors regarding deleting multiple elements thus support of several ways of giving parameters. I combined the two methods to this to this:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">array_del_elm</span><span class="keyword">(</span><span class="default">$target_array</span><span class="keyword">, </span><span class="default">$del_indexes</span><span class="keyword">) {
<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">)) {
<br />        </span><span class="default">$indexes </span><span class="keyword">= </span><span class="default">$del_indexes</span><span class="keyword">;
<br />    } elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">)) {
<br />        </span><span class="default">$indexes </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">);
<br />    } elseif(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$del_indexes</span><span class="keyword">)) {
<br />        </span><span class="default">$indexes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = (integer)</span><span class="default">$del_indexes</span><span class="keyword">;
<br />    } else return;
<br />    unset(</span><span class="default">$del_indexes</span><span class="keyword">);
<br />    
<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$indexes</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {
<br />        unset(</span><span class="default">$target_array</span><span class="keyword">[</span><span class="default">$indexes</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]]);
<br />    }
<br />    return </span><span class="default">$target_array</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Fast, compliant and functional ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="89164">  <div class="votes">
    <div id="Vu89164">
    <a href="/manual/vote-note.php?id=89164&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89164">
    <a href="/manual/vote-note.php?id=89164&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89164" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#89164" class="name">
  <strong class="user"><em>andyd273 at gmail dot com</em></strong></a><a class="genanchor" href="#89164"> &para;</a><div class="date" title="2009-02-24 01:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89164">
<div class="phpcode"><code><span class="html">A small correction to Endel Dreyer's PHP array to javascript array function. I just changed it to show keys correctly:<br /><br />            function array2js($array,$show_keys)<br />            {<br />                $dimensoes = array();<br />                $valores = array();<br />               <br />                $total = count ($array)-1;<br />                $i=0;<br />                foreach($array as $key=&gt;$value){<br />                    if (is_array($value)) {<br />                        $dimensoes[$i] = array2js($value,$show_keys);<br />                        if ($show_keys) $dimensoes[$i] = '"'.$key.'":'.$dimensoes[$i];<br />                    } else {<br />                        $dimensoes[$i] = '"'.addslashes($value).'"';<br />                        if ($show_keys) $dimensoes[$i] = '"'.$key.'":'.$dimensoes[$i];<br />                    }<br />                    if ($i==0) $dimensoes[$i] = '{'.$dimensoes[$i];<br />                    if ($i==$total) $dimensoes[$i].= '}';<br />                    $i++;<br />                }<br />                return implode(',',$dimensoes);<br />            }</span></code></div>
  </div>
 </div>
  <div class="note" id="124711">  <div class="votes">
    <div id="Vu124711">
    <a href="/manual/vote-note.php?id=124711&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124711">
    <a href="/manual/vote-note.php?id=124711&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124711" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#124711" class="name">
  <strong class="user"><em>justin at jmfrazier dot com</em></strong></a><a class="genanchor" href="#124711"> &para;</a><div class="date" title="2020-02-12 08:34"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124711">
<div class="phpcode"><code><span class="html">Using null as the key when setting an array value is NOT the same as using empty [].<br /><span class="default">&lt;?php<br />  $null </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  </span><span class="default">$testArray </span><span class="keyword">= [];<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">$null</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">$null</span><span class="keyword">] = </span><span class="default">2</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">$null</span><span class="keyword">] = </span><span class="default">3</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">$null</span><span class="keyword">] = </span><span class="default">4</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$testArray</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Output:<br />array(1) {<br />  '' =&gt;<br />  int(4)<br />}<br /><br /><span class="default">&lt;?php<br />  $testArray </span><span class="keyword">= [];<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">null</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">null</span><span class="keyword">] = </span><span class="default">2</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">null</span><span class="keyword">] = </span><span class="default">3</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[</span><span class="default">null</span><span class="keyword">] = </span><span class="default">4</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$testArray</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Output:<br />array(1) {<br />  '' =&gt;<br />  int(4)<br />}<br /><br /><span class="default">&lt;?php<br />  $testArray </span><span class="keyword">= [];<br />  </span><span class="default">$testArray</span><span class="keyword">[] = </span><span class="default">1</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[] = </span><span class="default">2</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[] = </span><span class="default">3</span><span class="keyword">;<br />  </span><span class="default">$testArray</span><span class="keyword">[] = </span><span class="default">4</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$testArray</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Output:<br />array(4) {<br />  [0] =&gt;<br />  int(1)<br />  [1] =&gt;<br />  int(2)<br />  [2] =&gt;<br />  int(3)<br />  [3] =&gt;<br />  int(4)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="100771">  <div class="votes">
    <div id="Vu100771">
    <a href="/manual/vote-note.php?id=100771&amp;page=book.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100771">
    <a href="/manual/vote-note.php?id=100771&amp;page=book.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100771" title="48% like this...">
    -4
    </div>
  </div>
  <a href="#100771" class="name">
  <strong class="user"><em>info at curtinsNOSPAMcreations dot com</em></strong></a><a class="genanchor" href="#100771"> &para;</a><div class="date" title="2010-11-05 07:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100771">
<div class="phpcode"><code><span class="html">Another way to create a multidimensional array that looks a lot cleaner is to use json_decode.  (Note that this probably adds a touch of overhead, but it sure does look nicer.)  You can of course add as many levels and as much formatting as you'd like to the string you then decode.  Don't forget that json requires " around values, not '!!  (So, you can't enclose the json string with " and use ' inside the string.)<br /><br />As an example:<br /><br /><span class="default">&lt;?php<br />    $myarray</span><span class="keyword">[</span><span class="string">'blah'</span><span class="keyword">] = </span><span class="default">json_decode</span><span class="keyword">(</span><span class="string">'[<br />        {"label":"foo","name":"baz"},<br />        {"label":"boop","name":"beep"}<br />    ]'</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$myarray</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span>returns:<br /><br />Array<br />(<br />    [blah] =&gt; Array<br />        (<br />            [0] =&gt; Array<br />                (<br />                    [label] =&gt; foo<br />                    [name] =&gt; baz<br />                )<br /> <br />            [1] =&gt; Array<br />                (<br />                    [label] =&gt; boop<br />                    [name] =&gt; beep<br />                )<br />        )<br />)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.array.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.vartype.php">Variable and Type Related Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="book.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="book.classobj.php" title="Classes/Objects">Classes/Objects</a>
                        </li>
                                                <li class="">
                            <a href="book.ctype.php" title="Ctype">Ctype</a>
                        </li>
                                                <li class="">
                            <a href="book.filter.php" title="Filter">Filter</a>
                        </li>
                                                <li class="">
                            <a href="book.funchand.php" title="Function Handling">Function Handling</a>
                        </li>
                                                <li class="">
                            <a href="book.quickhash.php" title="Quickhash">Quickhash</a>
                        </li>
                                                <li class="">
                            <a href="book.reflection.php" title="Reflection">Reflection</a>
                        </li>
                                                <li class="">
                            <a href="book.var.php" title="Variable handling">Variable handling</a>
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
