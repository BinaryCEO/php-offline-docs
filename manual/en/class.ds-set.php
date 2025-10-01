<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Ds\Set - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.ds-set.php">
 <link rel="shorturl" href="https://www.php.net/ds-set">
 <link rel="alternate" href="https://www.php.net/ds-set" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ds.php">
 <link rel="prev" href="https://www.php.net/manual/en/ds-pair.toarray.php">
 <link rel="next" href="https://www.php.net/manual/en/ds-set.add.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.ds-set.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.ds-set.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.ds-set.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.ds-set.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.ds-set.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.ds-set.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.ds-set.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.ds-set.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.ds-set.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.ds-set.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.ds-set.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Set class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Ds\Set - Manual" />
<meta name="twitter:description" content="The Set class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Ds\Set - Manual" />
<meta itemprop="description" content="The Set class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Set class" />

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
        <a href="ds-set.add.php">
          Ds\Set::add &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ds-pair.toarray.php">
          &laquo; Ds\Pair::toArray        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.ds.php'>Data Structures</a></li>      </ul>
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
            <option value='en/class.ds-set.php' selected="selected">English</option>
            <option value='de/class.ds-set.php'>German</option>
            <option value='es/class.ds-set.php'>Spanish</option>
            <option value='fr/class.ds-set.php'>French</option>
            <option value='it/class.ds-set.php'>Italian</option>
            <option value='ja/class.ds-set.php'>Japanese</option>
            <option value='pt_BR/class.ds-set.php'>Brazilian Portuguese</option>
            <option value='ru/class.ds-set.php'>Russian</option>
            <option value='tr/class.ds-set.php'>Turkish</option>
            <option value='uk/class.ds-set.php'>Ukrainian</option>
            <option value='zh/class.ds-set.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.ds-set" class="reference">

 <h1 class="title">The Set class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL ds &gt;= 1.0.0)</p>


  <div class="section" id="ds-set.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    A Set is a sequence of unique values. This implementation uses the same hash
    table as <span class="classname"><a href="class.ds-map.php" class="classname">Ds\Map</a></span>, where values are used as keys and the
    mapped value is ignored.
   </p>
  </div>



<div class="section" id="ds-set.strengths">
    <h2 class="title">Strengths</h2>
    <p class="para">
        <ul class="simplelist">
            <li>Values can be any type, including objects.</li>
            <li>Supports array syntax (square brackets).</li>
            <li>Insertion order is preserved.</li>
            <li>Automatically frees allocated memory when its size drops low enough.</li>
            <li>
                <span class="function"><strong>add()</strong></span>,
                <span class="function"><strong>remove()</strong></span> and
                <span class="function"><strong>contains()</strong></span> are all O(1).
            </li>
        </ul>
   </p>
</div>

<div class="section" id="ds-set.weaknesses">
    <h2 class="title">Weaknesses</h2>
    <p class="para">
        <ul class="simplelist">
            <li>Doesn’t support
                <span class="function"><strong>push()</strong></span>,
                <span class="function"><strong>pop()</strong></span>,
                <span class="function"><strong>insert()</strong></span>,
                <span class="function"><strong>shift()</strong></span>, or
                <span class="function"><strong>unshift()</strong></span>.
            </li>
            <li>
                <span class="function"><strong>get()</strong></span> is O(n) if there are deleted values
                in the buffer before the accessed index, O(1) otherwise.
            </li>
        </ul>
   </p>
</div>

  <div class="section" id="ds-set.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">Ds\Set</strong>
     </span>

     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.ds-collection.php" class="interfacename">Ds\Collection</a></span><span class="oointerface">,  <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a></span> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ds-set.php#ds-set.constants.min-capacity"><var class="varname">MIN_CAPACITY</var></a></var><span class="initializer"> = 16</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="ds-set.add.php" class="methodname">add</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.allocate.php" class="methodname">allocate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$capacity</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.capacity.php" class="methodname">capacity</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.clear.php" class="methodname">clear</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.contains.php" class="methodname">contains</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.copy.php" class="methodname">copy</a></span>(): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.diff.php" class="methodname">diff</a></span>(<span class="methodparam"><span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span> <code class="parameter">$set</code></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.filter.php" class="methodname">filter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.first.php" class="methodname">first</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.get.php" class="methodname">get</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.intersect.php" class="methodname">intersect</a></span>(<span class="methodparam"><span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span> <code class="parameter">$set</code></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.isempty.php" class="methodname">isEmpty</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.join.php" class="methodname">join</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$glue</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.last.php" class="methodname">last</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.map.php" class="methodname">map</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.merge.php" class="methodname">merge</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$values</code></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.reduce.php" class="methodname">reduce</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$initial</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.remove.php" class="methodname">remove</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.reverse.php" class="methodname">reverse</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.reversed.php" class="methodname">reversed</a></span>(): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.slice.php" class="methodname">slice</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.sort.php" class="methodname">sort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$comparator</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.sorted.php" class="methodname">sorted</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$comparator</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.sum.php" class="methodname">sum</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.toarray.php" class="methodname">toArray</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.union.php" class="methodname">union</a></span>(<span class="methodparam"><span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span> <code class="parameter">$set</code></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ds-set.xor.php" class="methodname">xor</a></span>(<span class="methodparam"><span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span> <code class="parameter">$set</code></span>): <span class="type"><a href="class.ds-set.php" class="type Ds\Set">Ds\Set</a></span></div>

   }</div>


  </div>


  <div class="section" id="ds-set.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="ds-set.constants.min-capacity"><strong><code><a href="class.ds-set.php#ds-set.constants.min-capacity">Ds\Set::MIN_CAPACITY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

   </dl>
  </div>


  <div class="section">
   <h2 class="title">Changelog</h2>
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
        <td>PECL ds 1.3.0</td>
        <td>
         The class now implements <span class="classname"><a href="class.arrayaccess.php" class="classname">ArrayAccess</a></span>.
        </td>
       </tr>

       <tr>
        <td>PECL ds 1.2.7</td>
        <td>
         Added the <span class="methodname"><a href="ds-set.map.php" class="methodname">Ds\Set::map()</a></span> method.
        </td>
       </tr>

      </tbody>
     
    </table>

   </p>
  </div>

 </div>

 















































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ds-set.add.php">Ds\Set::add</a> — Adds values to the set</li><li><a href="ds-set.allocate.php">Ds\Set::allocate</a> — Allocates enough memory for a required capacity</li><li><a href="ds-set.capacity.php">Ds\Set::capacity</a> — Returns the current capacity</li><li><a href="ds-set.clear.php">Ds\Set::clear</a> — Removes all values</li><li><a href="ds-set.construct.php">Ds\Set::__construct</a> — Creates a new instance</li><li><a href="ds-set.contains.php">Ds\Set::contains</a> — Determines if the set contains all values</li><li><a href="ds-set.copy.php">Ds\Set::copy</a> — Returns a shallow copy of the set</li><li><a href="ds-set.count.php">Ds\Set::count</a> — Returns the number of values in the set</li><li><a href="ds-set.diff.php">Ds\Set::diff</a> — Creates a new set using values that aren't in another set</li><li><a href="ds-set.filter.php">Ds\Set::filter</a> — Creates a new set using a callable to
    determine which values to include</li><li><a href="ds-set.first.php">Ds\Set::first</a> — Returns the first value in the set</li><li><a href="ds-set.get.php">Ds\Set::get</a> — Returns the value at a given index</li><li><a href="ds-set.intersect.php">Ds\Set::intersect</a> — Creates a new set by intersecting values with another set</li><li><a href="ds-set.isempty.php">Ds\Set::isEmpty</a> — Returns whether the set is empty</li><li><a href="ds-set.join.php">Ds\Set::join</a> — Joins all values together as a string</li><li><a href="ds-set.jsonserialize.php">Ds\Set::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="ds-set.last.php">Ds\Set::last</a> — Returns the last value in the set</li><li><a href="ds-set.map.php">Ds\Set::map</a> — Returns the result of applying a callback to each value</li><li><a href="ds-set.merge.php">Ds\Set::merge</a> — Returns the result of adding all given values to the set</li><li><a href="ds-set.reduce.php">Ds\Set::reduce</a> — Reduces the set to a single value using a callback function</li><li><a href="ds-set.remove.php">Ds\Set::remove</a> — Removes all given values from the set</li><li><a href="ds-set.reverse.php">Ds\Set::reverse</a> — Reverses the set in-place</li><li><a href="ds-set.reversed.php">Ds\Set::reversed</a> — Returns a reversed copy</li><li><a href="ds-set.slice.php">Ds\Set::slice</a> — Returns a sub-set of a given range</li><li><a href="ds-set.sort.php">Ds\Set::sort</a> — Sorts the set in-place</li><li><a href="ds-set.sorted.php">Ds\Set::sorted</a> — Returns a sorted copy</li><li><a href="ds-set.sum.php">Ds\Set::sum</a> — Returns the sum of all values in the set</li><li><a href="ds-set.toarray.php">Ds\Set::toArray</a> — Converts the set to an array</li><li><a href="ds-set.union.php">Ds\Set::union</a> — Creates a new set using values from the current instance and another set</li><li><a href="ds-set.xor.php">Ds\Set::xor</a> — Creates a new set using values in either the current instance or in another set, but not in both</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ds/ds.set.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.ds-set%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.ds-set&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ds-set.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122338">  <div class="votes">
    <div id="Vu122338">
    <a href="/manual/vote-note.php?id=122338&amp;page=class.ds-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122338">
    <a href="/manual/vote-note.php?id=122338&amp;page=class.ds-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122338" title="73% like this...">
    20
    </div>
  </div>
  <a href="#122338" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122338"> &para;</a><div class="date" title="2018-02-01 01:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122338">
<div class="phpcode"><code><span class="html">Lookup for a Set should be O(1). This is true for sets and hashtables (eg maps) in any language.<br /><br />The way this is possible is that sets store values differently than arrays.<br /><br />In an array values are stored sequentially based on what their place is in the array and where that array is in memory, so to find your item you need to scan through the array sequentially to find your item (unless it's a sorted array, then you can use binary search at O(logn)).<br /><br />Sets declare a block of memory, like an array, but instead of putting items in memory in sequence, like an array, they determine the index of the item to add by running the item through a hash function (essentially a function that takes in an object and returns an evenly distributed, very large random number), and then modulousing the result of that hash function by the size of the memory block they have.<br /><br />So, when you call contains($needle, $mySetHaystack), php will take $needle, and feed it into a hashfunction, which will return a big number like 9283472378, then it takes the length of $mySetHaystack (let's say 31), and does 9283472378 % 31 = 28, so it checks the 28th index of $mySetHaystack to see if $needle is there. Everything in this list of operations is independent of the size of $mySetHaystack, hence the perf being O(1).<br /><br />If a hash function returns the same value for two different items (a hash collision, which totally happens), or if the modulo of that value is the same, then an array of values is stored in the set at that index. Since sets don't allow duplicate values, this happens rarely and is negligible from a perf perspective.<br /><br />You should check out the wikipedia page on hash tables (similar to sets), as there are lots of pictures that will make this concept easier to understand.</span></code></div>
  </div>
 </div>
  <div class="note" id="127130">  <div class="votes">
    <div id="Vu127130">
    <a href="/manual/vote-note.php?id=127130&amp;page=class.ds-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127130">
    <a href="/manual/vote-note.php?id=127130&amp;page=class.ds-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127130" title="70% like this...">
    7
    </div>
  </div>
  <a href="#127130" class="name">
  <strong class="user"><em>Sbastien</em></strong></a><a class="genanchor" href="#127130"> &para;</a><div class="date" title="2022-05-24 10:08"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127130">
<div class="phpcode"><code><span class="html">One nice thing is the type-awarness. array_unique() lose values (whatever flag), while Ds\Set keep them.<br /><br /><span class="default">&lt;?php<br /><br />$array </span><span class="keyword">= [</span><span class="default">true</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">123</span><span class="keyword">, </span><span class="string">'123'</span><span class="keyword">];<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(new </span><span class="default">\Ds\Set</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br /><br /></span><span class="comment">/*<br /><br />Gives :<br /><br />array(4) {<br />  [0]=&gt; bool(true)<br />  [1]=&gt; bool(false)<br />  [4]=&gt; int(0)<br />  [6]=&gt; int(123)<br />}<br />object(Ds\Set)#1 (8) {<br />  [0]=&gt; bool(true)<br />  [1]=&gt; bool(false)<br />  [2]=&gt; NULL<br />  [3]=&gt; string(0) ""<br />  [4]=&gt; int(0)<br />  [5]=&gt; string(1) "0"<br />  [6]=&gt; int(123)<br />  [7]=&gt; string(3) "123"<br />}<br /><br />*/</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.ds-set&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ds-set.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ds.php">Data Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ds.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ds.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ds.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-collection.php" title="Ds\Collection">Ds\Collection</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-hashable.php" title="Ds\Hashable">Ds\Hashable</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-sequence.php" title="Ds\Sequence">Ds\Sequence</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-vector.php" title="Ds\Vector">Ds\Vector</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-deque.php" title="Ds\Deque">Ds\Deque</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-map.php" title="Ds\Map">Ds\Map</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-pair.php" title="Ds\Pair">Ds\Pair</a>
                        </li>
                                                <li class="current">
                            <a href="class.ds-set.php" title="Ds\Set">Ds\Set</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-stack.php" title="Ds\Stack">Ds\Stack</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-queue.php" title="Ds\Queue">Ds\Queue</a>
                        </li>
                                                <li class="">
                            <a href="class.ds-priorityqueue.php" title="Ds\PriorityQueue">Ds\PriorityQueue</a>
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
