<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Data Structures - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ds.php">
 <link rel="shorturl" href="https://www.php.net/ds">
 <link rel="alternate" href="https://www.php.net/ds" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.untaint.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ds.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ds.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ds.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ds.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ds.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ds.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ds.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ds.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ds.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ds.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ds.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ds.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Data Structures" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Data Structures - Manual" />
<meta name="twitter:description" content="Data Structures" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Data Structures - Manual" />
<meta itemprop="description" content="Data Structures" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Data Structures" />

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
        <a href="intro.ds.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.untaint.php">
          &laquo; untaint        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      </ul>
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
            <option value='en/book.ds.php' selected="selected">English</option>
            <option value='de/book.ds.php'>German</option>
            <option value='es/book.ds.php'>Spanish</option>
            <option value='fr/book.ds.php'>French</option>
            <option value='it/book.ds.php'>Italian</option>
            <option value='ja/book.ds.php'>Japanese</option>
            <option value='pt_BR/book.ds.php'>Brazilian Portuguese</option>
            <option value='ru/book.ds.php'>Russian</option>
            <option value='tr/book.ds.php'>Turkish</option>
            <option value='uk/book.ds.php'>Ukrainian</option>
            <option value='zh/book.ds.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ds" class="book">
 
 <h1 class="title">Data Structures</h1>
 

 

 






 







 






 







 






 






 







 






 






 






 






 






 







<ul class="chunklist chunklist_book"><li><a href="intro.ds.php">Introduction</a></li><li><a href="ds.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ds.requirements.php">Requirements</a></li><li><a href="ds.installation.php">Installation</a></li></ul></li><li><a href="ds.examples.php">Examples</a></li><li><a href="class.ds-collection.php">Ds\Collection</a> — The Collection interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-collection.clear.php">Ds\Collection::clear</a> — Removes all values</li><li><a href="ds-collection.copy.php">Ds\Collection::copy</a> — Returns a shallow copy of the collection</li><li><a href="ds-collection.isempty.php">Ds\Collection::isEmpty</a> — Returns whether the collection is empty</li><li><a href="ds-collection.toarray.php">Ds\Collection::toArray</a> — Converts the collection to an array</li></ul></li><li><a href="class.ds-hashable.php">Ds\Hashable</a> — The Hashable interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-hashable.equals.php">Ds\Hashable::equals</a> — Determines whether an object is equal to the current instance</li><li><a href="ds-hashable.hash.php">Ds\Hashable::hash</a> — Returns a scalar value to be used as a hash value</li></ul></li><li><a href="class.ds-sequence.php">Ds\Sequence</a> — The Sequence interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-sequence.allocate.php">Ds\Sequence::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-sequence.apply.php">Ds\Sequence::apply</a> — Updates all values by applying a callback function to each value</li><li><a href="ds-sequence.capacity.php">Ds\Sequence::capacity</a> — Returns the current capacity</li><li><a href="ds-sequence.contains.php">Ds\Sequence::contains</a> — Determines if the sequence contains given values</li><li><a href="ds-sequence.filter.php">Ds\Sequence::filter</a> — Creates a new sequence using a callable to
    determine which values to include</li><li><a href="ds-sequence.find.php">Ds\Sequence::find</a> — Attempts to find a value's index</li><li><a href="ds-sequence.first.php">Ds\Sequence::first</a> — Returns the first value in the sequence</li><li><a href="ds-sequence.get.php">Ds\Sequence::get</a> — Returns the value at a given index</li><li><a href="ds-sequence.insert.php">Ds\Sequence::insert</a> — Inserts values at a given index</li><li><a href="ds-sequence.join.php">Ds\Sequence::join</a> — Joins all values together as a string</li><li><a href="ds-sequence.last.php">Ds\Sequence::last</a> — Returns the last value</li><li><a href="ds-sequence.map.php">Ds\Sequence::map</a> — Returns the result of applying a callback to each value</li><li><a href="ds-sequence.merge.php">Ds\Sequence::merge</a> — Returns the result of adding all given values to the sequence</li><li><a href="ds-sequence.pop.php">Ds\Sequence::pop</a> — Removes and returns the last value</li><li><a href="ds-sequence.push.php">Ds\Sequence::push</a> — Adds values to the end of the sequence</li><li><a href="ds-sequence.reduce.php">Ds\Sequence::reduce</a> — Reduces the sequence to a single value using a callback function</li><li><a href="ds-sequence.remove.php">Ds\Sequence::remove</a> — Removes and returns a value by index</li><li><a href="ds-sequence.reverse.php">Ds\Sequence::reverse</a> — Reverses the sequence in-place</li><li><a href="ds-sequence.reversed.php">Ds\Sequence::reversed</a> — Returns a reversed copy</li><li><a href="ds-sequence.rotate.php">Ds\Sequence::rotate</a> — Rotates the sequence by a given number of rotations</li><li><a href="ds-sequence.set.php">Ds\Sequence::set</a> — Updates a value at a given index</li><li><a href="ds-sequence.shift.php">Ds\Sequence::shift</a> — Removes and returns the first value</li><li><a href="ds-sequence.slice.php">Ds\Sequence::slice</a> — Returns a sub-sequence of a given range</li><li><a href="ds-sequence.sort.php">Ds\Sequence::sort</a> — Sorts the sequence in-place</li><li><a href="ds-sequence.sorted.php">Ds\Sequence::sorted</a> — Returns a sorted copy</li><li><a href="ds-sequence.sum.php">Ds\Sequence::sum</a> — Returns the sum of all values in the sequence</li><li><a href="ds-sequence.unshift.php">Ds\Sequence::unshift</a> — Adds values to the front of the sequence</li></ul></li><li><a href="class.ds-vector.php">Ds\Vector</a> — The Vector class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-vector.allocate.php">Ds\Vector::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-vector.apply.php">Ds\Vector::apply</a> — Updates all values by applying a callback function to each value</li><li><a href="ds-vector.capacity.php">Ds\Vector::capacity</a> — Returns the current capacity</li><li><a href="ds-vector.clear.php">Ds\Vector::clear</a> — Removes all values</li><li><a href="ds-vector.construct.php">Ds\Vector::__construct</a> — Creates a new instance</li><li><a href="ds-vector.contains.php">Ds\Vector::contains</a> — Determines if the vector contains given values</li><li><a href="ds-vector.copy.php">Ds\Vector::copy</a> — Returns a shallow copy of the vector</li><li><a href="ds-vector.count.php">Ds\Vector::count</a> — Returns the number of values in the collection</li><li><a href="ds-vector.filter.php">Ds\Vector::filter</a> — Creates a new vector using a callable to
    determine which values to include</li><li><a href="ds-vector.find.php">Ds\Vector::find</a> — Attempts to find a value's index</li><li><a href="ds-vector.first.php">Ds\Vector::first</a> — Returns the first value in the vector</li><li><a href="ds-vector.get.php">Ds\Vector::get</a> — Returns the value at a given index</li><li><a href="ds-vector.insert.php">Ds\Vector::insert</a> — Inserts values at a given index</li><li><a href="ds-vector.isempty.php">Ds\Vector::isEmpty</a> — Returns whether the vector is empty</li><li><a href="ds-vector.join.php">Ds\Vector::join</a> — Joins all values together as a string</li><li><a href="ds-vector.jsonserialize.php">Ds\Vector::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-vector.last.php">Ds\Vector::last</a> — Returns the last value</li><li><a href="ds-vector.map.php">Ds\Vector::map</a> — Returns the result of applying a callback to each value</li><li><a href="ds-vector.merge.php">Ds\Vector::merge</a> — Returns the result of adding all given values to the vector</li><li><a href="ds-vector.pop.php">Ds\Vector::pop</a> — Removes and returns the last value</li><li><a href="ds-vector.push.php">Ds\Vector::push</a> — Adds values to the end of the vector</li><li><a href="ds-vector.reduce.php">Ds\Vector::reduce</a> — Reduces the vector to a single value using a callback function</li><li><a href="ds-vector.remove.php">Ds\Vector::remove</a> — Removes and returns a value by index</li><li><a href="ds-vector.reverse.php">Ds\Vector::reverse</a> — Reverses the vector in-place</li><li><a href="ds-vector.reversed.php">Ds\Vector::reversed</a> — Returns a reversed copy</li><li><a href="ds-vector.rotate.php">Ds\Vector::rotate</a> — Rotates the vector by a given number of rotations</li><li><a href="ds-vector.set.php">Ds\Vector::set</a> — Updates a value at a given index</li><li><a href="ds-vector.shift.php">Ds\Vector::shift</a> — Removes and returns the first value</li><li><a href="ds-vector.slice.php">Ds\Vector::slice</a> — Returns a sub-vector of a given range</li><li><a href="ds-vector.sort.php">Ds\Vector::sort</a> — Sorts the vector in-place</li><li><a href="ds-vector.sorted.php">Ds\Vector::sorted</a> — Returns a sorted copy</li><li><a href="ds-vector.sum.php">Ds\Vector::sum</a> — Returns the sum of all values in the vector</li><li><a href="ds-vector.toarray.php">Ds\Vector::toArray</a> — Converts the vector to an array</li><li><a href="ds-vector.unshift.php">Ds\Vector::unshift</a> — Adds values to the front of the vector</li></ul></li><li><a href="class.ds-deque.php">Ds\Deque</a> — The Deque class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-deque.allocate.php">Ds\Deque::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-deque.apply.php">Ds\Deque::apply</a> — Updates all values by applying a callback function to each value</li><li><a href="ds-deque.capacity.php">Ds\Deque::capacity</a> — Returns the current capacity</li><li><a href="ds-deque.clear.php">Ds\Deque::clear</a> — Removes all values from the deque</li><li><a href="ds-deque.construct.php">Ds\Deque::__construct</a> — Creates a new instance</li><li><a href="ds-deque.contains.php">Ds\Deque::contains</a> — Determines if the deque contains given values</li><li><a href="ds-deque.copy.php">Ds\Deque::copy</a> — Returns a shallow copy of the deque</li><li><a href="ds-deque.count.php">Ds\Deque::count</a> — Returns the number of values in the collection</li><li><a href="ds-deque.filter.php">Ds\Deque::filter</a> — Creates a new deque using a callable to
    determine which values to include</li><li><a href="ds-deque.find.php">Ds\Deque::find</a> — Attempts to find a value's index</li><li><a href="ds-deque.first.php">Ds\Deque::first</a> — Returns the first value in the deque</li><li><a href="ds-deque.get.php">Ds\Deque::get</a> — Returns the value at a given index</li><li><a href="ds-deque.insert.php">Ds\Deque::insert</a> — Inserts values at a given index</li><li><a href="ds-deque.isempty.php">Ds\Deque::isEmpty</a> — Returns whether the deque is empty</li><li><a href="ds-deque.join.php">Ds\Deque::join</a> — Joins all values together as a string</li><li><a href="ds-deque.jsonserialize.php">Ds\Deque::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-deque.last.php">Ds\Deque::last</a> — Returns the last value</li><li><a href="ds-deque.map.php">Ds\Deque::map</a> — Returns the result of applying a callback to each value</li><li><a href="ds-deque.merge.php">Ds\Deque::merge</a> — Returns the result of adding all given values to the deque</li><li><a href="ds-deque.pop.php">Ds\Deque::pop</a> — Removes and returns the last value</li><li><a href="ds-deque.push.php">Ds\Deque::push</a> — Adds values to the end of the deque</li><li><a href="ds-deque.reduce.php">Ds\Deque::reduce</a> — Reduces the deque to a single value using a callback function</li><li><a href="ds-deque.remove.php">Ds\Deque::remove</a> — Removes and returns a value by index</li><li><a href="ds-deque.reverse.php">Ds\Deque::reverse</a> — Reverses the deque in-place</li><li><a href="ds-deque.reversed.php">Ds\Deque::reversed</a> — Returns a reversed copy</li><li><a href="ds-deque.rotate.php">Ds\Deque::rotate</a> — Rotates the deque by a given number of rotations</li><li><a href="ds-deque.set.php">Ds\Deque::set</a> — Updates a value at a given index</li><li><a href="ds-deque.shift.php">Ds\Deque::shift</a> — Removes and returns the first value</li><li><a href="ds-deque.slice.php">Ds\Deque::slice</a> — Returns a sub-deque of a given range</li><li><a href="ds-deque.sort.php">Ds\Deque::sort</a> — Sorts the deque in-place</li><li><a href="ds-deque.sorted.php">Ds\Deque::sorted</a> — Returns a sorted copy</li><li><a href="ds-deque.sum.php">Ds\Deque::sum</a> — Returns the sum of all values in the deque</li><li><a href="ds-deque.toarray.php">Ds\Deque::toArray</a> — Converts the deque to an array</li><li><a href="ds-deque.unshift.php">Ds\Deque::unshift</a> — Adds values to the front of the deque</li></ul></li><li><a href="class.ds-map.php">Ds\Map</a> — The Map class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-map.allocate.php">Ds\Map::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-map.apply.php">Ds\Map::apply</a> — Updates all values by applying a callback function to each value</li><li><a href="ds-map.capacity.php">Ds\Map::capacity</a> — Returns the current capacity</li><li><a href="ds-map.clear.php">Ds\Map::clear</a> — Removes all values</li><li><a href="ds-map.construct.php">Ds\Map::__construct</a> — Creates a new instance</li><li><a href="ds-map.copy.php">Ds\Map::copy</a> — Returns a shallow copy of the map</li><li><a href="ds-map.count.php">Ds\Map::count</a> — Returns the number of values in the map</li><li><a href="ds-map.diff.php">Ds\Map::diff</a> — Creates a new map using keys that aren't in another map</li><li><a href="ds-map.filter.php">Ds\Map::filter</a> — Creates a new map using a callable to determine which pairs to include</li><li><a href="ds-map.first.php">Ds\Map::first</a> — Returns the first pair in the map</li><li><a href="ds-map.get.php">Ds\Map::get</a> — Returns the value for a given key</li><li><a href="ds-map.haskey.php">Ds\Map::hasKey</a> — Determines whether the map contains a given key</li><li><a href="ds-map.hasvalue.php">Ds\Map::hasValue</a> — Determines whether the map contains a given value</li><li><a href="ds-map.intersect.php">Ds\Map::intersect</a> — Creates a new map by intersecting keys with another map</li><li><a href="ds-map.isempty.php">Ds\Map::isEmpty</a> — Returns whether the map is empty</li><li><a href="ds-map.jsonserialize.php">Ds\Map::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-map.keys.php">Ds\Map::keys</a> — Returns a set of the map's keys</li><li><a href="ds-map.ksort.php">Ds\Map::ksort</a> — Sorts the map in-place by key</li><li><a href="ds-map.ksorted.php">Ds\Map::ksorted</a> — Returns a copy, sorted by key</li><li><a href="ds-map.last.php">Ds\Map::last</a> — Returns the last pair of the map</li><li><a href="ds-map.map.php">Ds\Map::map</a> — Returns the result of applying a callback to each value</li><li><a href="ds-map.merge.php">Ds\Map::merge</a> — Returns the result of adding all given associations</li><li><a href="ds-map.pairs.php">Ds\Map::pairs</a> — Returns a sequence containing all the pairs of the map</li><li><a href="ds-map.put.php">Ds\Map::put</a> — Associates a key with a value</li><li><a href="ds-map.putall.php">Ds\Map::putAll</a> — Associates all key-value pairs of a traversable object or array</li><li><a href="ds-map.reduce.php">Ds\Map::reduce</a> — Reduces the map to a single value using a callback function</li><li><a href="ds-map.remove.php">Ds\Map::remove</a> — Removes and returns a value by key</li><li><a href="ds-map.reverse.php">Ds\Map::reverse</a> — Reverses the map in-place</li><li><a href="ds-map.reversed.php">Ds\Map::reversed</a> — Returns a reversed copy</li><li><a href="ds-map.skip.php">Ds\Map::skip</a> — Returns the pair at a given positional index</li><li><a href="ds-map.slice.php">Ds\Map::slice</a> — Returns a subset of the map defined by a starting index and length</li><li><a href="ds-map.sort.php">Ds\Map::sort</a> — Sorts the map in-place by value</li><li><a href="ds-map.sorted.php">Ds\Map::sorted</a> — Returns a copy, sorted by value</li><li><a href="ds-map.sum.php">Ds\Map::sum</a> — Returns the sum of all values in the map</li><li><a href="ds-map.toarray.php">Ds\Map::toArray</a> — Converts the map to an array</li><li><a href="ds-map.union.php">Ds\Map::union</a> — Creates a new map using values from the current instance and another map</li><li><a href="ds-map.values.php">Ds\Map::values</a> — Returns a sequence of the map's values</li><li><a href="ds-map.xor.php">Ds\Map::xor</a> — Creates a new map using keys of either the current instance or of another map, but not of both</li></ul></li><li><a href="class.ds-pair.php">Ds\Pair</a> — The Pair class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-pair.clear.php">Ds\Pair::clear</a> — Removes all values</li><li><a href="ds-pair.construct.php">Ds\Pair::__construct</a> — Creates a new instance</li><li><a href="ds-pair.copy.php">Ds\Pair::copy</a> — Returns a shallow copy of the pair</li><li><a href="ds-pair.isempty.php">Ds\Pair::isEmpty</a> — Returns whether the pair is empty</li><li><a href="ds-pair.jsonserialize.php">Ds\Pair::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-pair.toarray.php">Ds\Pair::toArray</a> — Converts the pair to an array</li></ul></li><li><a href="class.ds-set.php">Ds\Set</a> — The Set class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-set.add.php">Ds\Set::add</a> — Adds values to the set</li><li><a href="ds-set.allocate.php">Ds\Set::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-set.capacity.php">Ds\Set::capacity</a> — Returns the current capacity</li><li><a href="ds-set.clear.php">Ds\Set::clear</a> — Removes all values</li><li><a href="ds-set.construct.php">Ds\Set::__construct</a> — Creates a new instance</li><li><a href="ds-set.contains.php">Ds\Set::contains</a> — Determines if the set contains all values</li><li><a href="ds-set.copy.php">Ds\Set::copy</a> — Returns a shallow copy of the set</li><li><a href="ds-set.count.php">Ds\Set::count</a> — Returns the number of values in the set</li><li><a href="ds-set.diff.php">Ds\Set::diff</a> — Creates a new set using values that aren't in another set</li><li><a href="ds-set.filter.php">Ds\Set::filter</a> — Creates a new set using a callable to
    determine which values to include</li><li><a href="ds-set.first.php">Ds\Set::first</a> — Returns the first value in the set</li><li><a href="ds-set.get.php">Ds\Set::get</a> — Returns the value at a given index</li><li><a href="ds-set.intersect.php">Ds\Set::intersect</a> — Creates a new set by intersecting values with another set</li><li><a href="ds-set.isempty.php">Ds\Set::isEmpty</a> — Returns whether the set is empty</li><li><a href="ds-set.join.php">Ds\Set::join</a> — Joins all values together as a string</li><li><a href="ds-set.jsonserialize.php">Ds\Set::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-set.last.php">Ds\Set::last</a> — Returns the last value in the set</li><li><a href="ds-set.map.php">Ds\Set::map</a> — Returns the result of applying a callback to each value</li><li><a href="ds-set.merge.php">Ds\Set::merge</a> — Returns the result of adding all given values to the set</li><li><a href="ds-set.reduce.php">Ds\Set::reduce</a> — Reduces the set to a single value using a callback function</li><li><a href="ds-set.remove.php">Ds\Set::remove</a> — Removes all given values from the set</li><li><a href="ds-set.reverse.php">Ds\Set::reverse</a> — Reverses the set in-place</li><li><a href="ds-set.reversed.php">Ds\Set::reversed</a> — Returns a reversed copy</li><li><a href="ds-set.slice.php">Ds\Set::slice</a> — Returns a sub-set of a given range</li><li><a href="ds-set.sort.php">Ds\Set::sort</a> — Sorts the set in-place</li><li><a href="ds-set.sorted.php">Ds\Set::sorted</a> — Returns a sorted copy</li><li><a href="ds-set.sum.php">Ds\Set::sum</a> — Returns the sum of all values in the set</li><li><a href="ds-set.toarray.php">Ds\Set::toArray</a> — Converts the set to an array</li><li><a href="ds-set.union.php">Ds\Set::union</a> — Creates a new set using values from the current instance and another set</li><li><a href="ds-set.xor.php">Ds\Set::xor</a> — Creates a new set using values in either the current instance or in another set, but not in both</li></ul></li><li><a href="class.ds-stack.php">Ds\Stack</a> — The Stack class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-stack.allocate.php">Ds\Stack::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-stack.capacity.php">Ds\Stack::capacity</a> — Returns the current capacity</li><li><a href="ds-stack.clear.php">Ds\Stack::clear</a> — Removes all values</li><li><a href="ds-stack.construct.php">Ds\Stack::__construct</a> — Creates a new instance</li><li><a href="ds-stack.copy.php">Ds\Stack::copy</a> — Returns a shallow copy of the stack</li><li><a href="ds-stack.count.php">Ds\Stack::count</a> — Returns the number of values in the stack</li><li><a href="ds-stack.isempty.php">Ds\Stack::isEmpty</a> — Returns whether the stack is empty</li><li><a href="ds-stack.jsonserialize.php">Ds\Stack::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-stack.peek.php">Ds\Stack::peek</a> — Returns the value at the top of the stack</li><li><a href="ds-stack.pop.php">Ds\Stack::pop</a> — Removes and returns the value at the top of the stack</li><li><a href="ds-stack.push.php">Ds\Stack::push</a> — Pushes values onto the stack</li><li><a href="ds-stack.toarray.php">Ds\Stack::toArray</a> — Converts the stack to an array</li></ul></li><li><a href="class.ds-queue.php">Ds\Queue</a> — The Queue class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-queue.allocate.php">Ds\Queue::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-queue.capacity.php">Ds\Queue::capacity</a> — Returns the current capacity</li><li><a href="ds-queue.clear.php">Ds\Queue::clear</a> — Removes all values</li><li><a href="ds-queue.construct.php">Ds\Queue::__construct</a> — Creates a new instance</li><li><a href="ds-queue.copy.php">Ds\Queue::copy</a> — Returns a shallow copy of the queue</li><li><a href="ds-queue.count.php">Ds\Queue::count</a> — Returns the number of values in the queue</li><li><a href="ds-queue.isempty.php">Ds\Queue::isEmpty</a> — Returns whether the queue is empty</li><li><a href="ds-queue.jsonserialize.php">Ds\Queue::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-queue.peek.php">Ds\Queue::peek</a> — Returns the value at the front of the queue</li><li><a href="ds-queue.pop.php">Ds\Queue::pop</a> — Removes and returns the value at the front of the queue</li><li><a href="ds-queue.push.php">Ds\Queue::push</a> — Pushes values into the queue</li><li><a href="ds-queue.toarray.php">Ds\Queue::toArray</a> — Converts the queue to an array</li></ul></li><li><a href="class.ds-priorityqueue.php">Ds\PriorityQueue</a> — The PriorityQueue class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ds-priorityqueue.allocate.php">Ds\PriorityQueue::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-priorityqueue.capacity.php">Ds\PriorityQueue::capacity</a> — Returns the current capacity</li><li><a href="ds-priorityqueue.clear.php">Ds\PriorityQueue::clear</a> — Removes all values</li><li><a href="ds-priorityqueue.construct.php">Ds\PriorityQueue::__construct</a> — Creates a new instance</li><li><a href="ds-priorityqueue.copy.php">Ds\PriorityQueue::copy</a> — Returns a shallow copy of the queue</li><li><a href="ds-priorityqueue.count.php">Ds\PriorityQueue::count</a> — Returns the number of values in the queue</li><li><a href="ds-priorityqueue.isempty.php">Ds\PriorityQueue::isEmpty</a> — Returns whether the queue is empty</li><li><a href="ds-priorityqueue.jsonserialize.php">Ds\PriorityQueue::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-priorityqueue.peek.php">Ds\PriorityQueue::peek</a> — Returns the value at the front of the queue</li><li><a href="ds-priorityqueue.pop.php">Ds\PriorityQueue::pop</a> — Removes and returns the value with the highest priority</li><li><a href="ds-priorityqueue.push.php">Ds\PriorityQueue::push</a> — Pushes values into the queue</li><li><a href="ds-priorityqueue.toarray.php">Ds\PriorityQueue::toArray</a> — Converts the queue to an array</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ds/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ds%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ds&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ds.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.other.php">Other Basic Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.geoip.php" title="GeoIP">GeoIP</a>
                        </li>
                                                <li class="">
                            <a href="book.fann.php" title="FANN">FANN</a>
                        </li>
                                                <li class="">
                            <a href="book.igbinary.php" title="Igbinary">Igbinary</a>
                        </li>
                                                <li class="">
                            <a href="book.json.php" title="JSON">JSON</a>
                        </li>
                                                <li class="">
                            <a href="book.simdjson.php" title="Simdjson">Simdjson</a>
                        </li>
                                                <li class="">
                            <a href="book.lua.php" title="Lua">Lua</a>
                        </li>
                                                <li class="">
                            <a href="book.luasandbox.php" title="LuaSandbox">LuaSandbox</a>
                        </li>
                                                <li class="">
                            <a href="book.misc.php" title="Misc.">Misc.</a>
                        </li>
                                                <li class="">
                            <a href="book.random.php" title="Random">Random</a>
                        </li>
                                                <li class="">
                            <a href="book.seaslog.php" title="Seaslog">Seaslog</a>
                        </li>
                                                <li class="">
                            <a href="book.spl.php" title="SPL">SPL</a>
                        </li>
                                                <li class="">
                            <a href="book.stream.php" title="Streams">Streams</a>
                        </li>
                                                <li class="">
                            <a href="book.swoole.php" title="Swoole">Swoole</a>
                        </li>
                                                <li class="">
                            <a href="book.tidy.php" title="Tidy">Tidy</a>
                        </li>
                                                <li class="">
                            <a href="book.tokenizer.php" title="Tokenizer">Tokenizer</a>
                        </li>
                                                <li class="">
                            <a href="book.url.php" title="URLs">URLs</a>
                        </li>
                                                <li class="">
                            <a href="book.v8js.php" title="V8js">V8js</a>
                        </li>
                                                <li class="">
                            <a href="book.yaml.php" title="Yaml">Yaml</a>
                        </li>
                                                <li class="">
                            <a href="book.yaf.php" title="Yaf">Yaf</a>
                        </li>
                                                <li class="">
                            <a href="book.yaconf.php" title="Yaconf">Yaconf</a>
                        </li>
                                                <li class="">
                            <a href="book.taint.php" title="Taint">Taint</a>
                        </li>
                                                <li class="current">
                            <a href="book.ds.php" title="Data Structures">Data Structures</a>
                        </li>
                                                <li class="">
                            <a href="book.var_representation.php" title="var_&#8203;representation">var_&#8203;representation</a>
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
