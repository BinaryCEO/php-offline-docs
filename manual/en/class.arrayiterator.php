<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ArrayIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.arrayiterator.php">
 <link rel="shorturl" href="https://www.php.net/arrayiterator">
 <link rel="alternate" href="https://www.php.net/arrayiterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.iterators.php">
 <link rel="prev" href="https://www.php.net/manual/en/appenditerator.valid.php">
 <link rel="next" href="https://www.php.net/manual/en/arrayiterator.append.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.arrayiterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.arrayiterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.arrayiterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.arrayiterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.arrayiterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.arrayiterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.arrayiterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.arrayiterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.arrayiterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.arrayiterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.arrayiterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ArrayIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ArrayIterator - Manual" />
<meta name="twitter:description" content="The ArrayIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ArrayIterator - Manual" />
<meta itemprop="description" content="The ArrayIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ArrayIterator class" />

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
        <a href="arrayiterator.append.php">
          ArrayIterator::append &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="appenditerator.valid.php">
          &laquo; AppendIterator::valid        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.iterators.php'>Iterators</a></li>      </ul>
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
            <option value='en/class.arrayiterator.php' selected="selected">English</option>
            <option value='de/class.arrayiterator.php'>German</option>
            <option value='es/class.arrayiterator.php'>Spanish</option>
            <option value='fr/class.arrayiterator.php'>French</option>
            <option value='it/class.arrayiterator.php'>Italian</option>
            <option value='ja/class.arrayiterator.php'>Japanese</option>
            <option value='pt_BR/class.arrayiterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.arrayiterator.php'>Russian</option>
            <option value='tr/class.arrayiterator.php'>Turkish</option>
            <option value='uk/class.arrayiterator.php'>Ukrainian</option>
            <option value='zh/class.arrayiterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.arrayiterator" class="reference">
 <h1 class="title">The ArrayIterator class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 

  <div class="section" id="arrayiterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Allows the removal of elements, and the modification of
    keys or values while iterating over <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s or <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s.
   </p>
   <p class="para">
    To iterate the same array more than once, it is recommended to
    instantiate <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span> and use the
    <span class="classname"><strong class="classname">ArrayIterator</strong></span> instance either implicitly created when
    using <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> to iterate over the array stored internally, or create one by
    calling the <span class="methodname"><a href="arrayobject.getiterator.php" class="methodname">ArrayObject::getIterator()</a></span> method manually.
   </p>
  </div>

 
  <div class="section" id="arrayiterator.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ArrayIterator</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.seekableiterator.php" class="interfacename">SeekableIterator</a>,

     <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a>,

     <a href="class.serializable.php" class="interfacename">Serializable</a>,

     <a href="class.countable.php" class="interfacename">Countable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.arrayiterator.php#arrayiterator.constants.std-prop-list"><var class="varname">STD_PROP_LIST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.arrayiterator.php#arrayiterator.constants.array-as-props"><var class="varname">ARRAY_AS_PROPS</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$array</code><span class="initializer"> = []</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.append.php" class="methodname">append</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.asort.php" class="methodname">asort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.getarraycopy.php" class="methodname">getArrayCopy</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.getflags.php" class="methodname">getFlags</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.key.php" class="methodname">key</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.ksort.php" class="methodname">ksort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.natcasesort.php" class="methodname">natcasesort</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.natsort.php" class="methodname">natsort</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.seek.php" class="methodname">seek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.serialize.php" class="methodname">serialize</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.setflags.php" class="methodname">setFlags</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.uasort.php" class="methodname">uasort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.uksort.php" class="methodname">uksort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.unserialize.php" class="methodname">unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
 
  </div>

  <div class="section" id="arrayiterator.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="arrayiterator.constants.flags">
    <h2 class="title">ArrayIterator Flags</h2>
    <dl>

     
      <dt id="arrayiterator.constants.std-prop-list"><strong><code><a href="class.arrayiterator.php#arrayiterator.constants.std-prop-list">ArrayIterator::STD_PROP_LIST</a></code></strong></dt>
      <dd>
       <p class="para">
        Properties of the object have their normal functionality
        when accessed as list (<span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>, <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a>, etc.).
       </p>
      </dd>
     

     
      <dt id="arrayiterator.constants.array-as-props"><strong><code><a href="class.arrayiterator.php#arrayiterator.constants.array-as-props">ArrayIterator::ARRAY_AS_PROPS</a></code></strong></dt>
      <dd>
       <p class="para">Entries can be accessed as properties (read and write).</p>
      </dd>
     
    </dl>
   </div>
  </div>


 
 </div>
 
 























































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="arrayiterator.append.php">ArrayIterator::append</a> — Append an element</li><li><a href="arrayiterator.asort.php">ArrayIterator::asort</a> — Sort entries by values</li><li><a href="arrayiterator.construct.php">ArrayIterator::__construct</a> — Construct an ArrayIterator</li><li><a href="arrayiterator.count.php">ArrayIterator::count</a> — Count elements</li><li><a href="arrayiterator.current.php">ArrayIterator::current</a> — Return current array entry</li><li><a href="arrayiterator.getarraycopy.php">ArrayIterator::getArrayCopy</a> — Get array copy</li><li><a href="arrayiterator.getflags.php">ArrayIterator::getFlags</a> — Get behavior flags</li><li><a href="arrayiterator.key.php">ArrayIterator::key</a> — Return current array key</li><li><a href="arrayiterator.ksort.php">ArrayIterator::ksort</a> — Sort entries by keys</li><li><a href="arrayiterator.natcasesort.php">ArrayIterator::natcasesort</a> — Sort entries naturally, case insensitive</li><li><a href="arrayiterator.natsort.php">ArrayIterator::natsort</a> — Sort entries naturally</li><li><a href="arrayiterator.next.php">ArrayIterator::next</a> — Move to next entry</li><li><a href="arrayiterator.offsetexists.php">ArrayIterator::offsetExists</a> — Check if offset exists</li><li><a href="arrayiterator.offsetget.php">ArrayIterator::offsetGet</a> — Get value for an offset</li><li><a href="arrayiterator.offsetset.php">ArrayIterator::offsetSet</a> — Set value for an offset</li><li><a href="arrayiterator.offsetunset.php">ArrayIterator::offsetUnset</a> — Unset value for an offset</li><li><a href="arrayiterator.rewind.php">ArrayIterator::rewind</a> — Rewind array back to the start</li><li><a href="arrayiterator.seek.php">ArrayIterator::seek</a> — Seeks to a position</li><li><a href="arrayiterator.serialize.php">ArrayIterator::serialize</a> — Serialize</li><li><a href="arrayiterator.setflags.php">ArrayIterator::setFlags</a> — Set behaviour flags</li><li><a href="arrayiterator.uasort.php">ArrayIterator::uasort</a> — Sort with a user-defined comparison function and maintain index association</li><li><a href="arrayiterator.uksort.php">ArrayIterator::uksort</a> — Sort by keys using a user-defined comparison function</li><li><a href="arrayiterator.unserialize.php">ArrayIterator::unserialize</a> — Unserialize</li><li><a href="arrayiterator.valid.php">ArrayIterator::valid</a> — Check whether array contains more entries</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/arrayiterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.arrayiterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.arrayiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.arrayiterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86935">  <div class="votes">
    <div id="Vu86935">
    <a href="/manual/vote-note.php?id=86935&amp;page=class.arrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86935">
    <a href="/manual/vote-note.php?id=86935&amp;page=class.arrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86935" title="76% like this...">
    53
    </div>
  </div>
  <a href="#86935" class="name">
  <strong class="user"><em>Venelin Vulkov</em></strong></a><a class="genanchor" href="#86935"> &para;</a><div class="date" title="2008-11-11 03:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86935">
<div class="phpcode"><code><span class="html">Another fine Iterator from php . You can use it especially when you have to iterate over objects<br /><br /><span class="default">&lt;?php<br />$fruits </span><span class="keyword">= array(<br />    </span><span class="string">"apple" </span><span class="keyword">=&gt; </span><span class="string">"yummy"</span><span class="keyword">,<br />    </span><span class="string">"orange" </span><span class="keyword">=&gt; </span><span class="string">"ah ya, nice"</span><span class="keyword">,<br />    </span><span class="string">"grape" </span><span class="keyword">=&gt; </span><span class="string">"wow, I love it!"</span><span class="keyword">,<br />    </span><span class="string">"plum" </span><span class="keyword">=&gt; </span><span class="string">"nah, not me"<br /></span><span class="keyword">);<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">( </span><span class="default">$fruits </span><span class="keyword">);<br /></span><span class="default">$it </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getIterator</span><span class="keyword">();<br /><br /></span><span class="comment">// How many items are we iterating over?<br /><br /></span><span class="keyword">echo </span><span class="string">"Iterating over: " </span><span class="keyword">. </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">() . </span><span class="string">" values\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Iterate over the values in the ArrayObject:<br /></span><span class="keyword">while( </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">() )<br />{<br />    echo </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">() . </span><span class="string">"=" </span><span class="keyword">. </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// The good thing here is that it can be iterated with foreach loop<br /><br /></span><span class="keyword">foreach (</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />echo </span><span class="default">$key</span><span class="keyword">.</span><span class="string">":"</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/* Outputs something like */<br /><br /></span><span class="default">Iterating over</span><span class="keyword">: </span><span class="default">4 values<br />apple</span><span class="keyword">=</span><span class="default">yummy<br />orange</span><span class="keyword">=</span><span class="default">ah ya</span><span class="keyword">, </span><span class="default">nice<br />grape</span><span class="keyword">=</span><span class="default">wow</span><span class="keyword">, </span><span class="default">I love it</span><span class="keyword">!<br /></span><span class="default">plum</span><span class="keyword">=</span><span class="default">nah</span><span class="keyword">, </span><span class="default">not me<br /><br />?&gt;<br /></span><br />Regards.</span></code></div>
  </div>
 </div>
  <div class="note" id="106231">  <div class="votes">
    <div id="Vu106231">
    <a href="/manual/vote-note.php?id=106231&amp;page=class.arrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106231">
    <a href="/manual/vote-note.php?id=106231&amp;page=class.arrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106231" title="64% like this...">
    19
    </div>
  </div>
  <a href="#106231" class="name">
  <strong class="user"><em>Relakuyae</em></strong></a><a class="genanchor" href="#106231"> &para;</a><div class="date" title="2011-10-19 05:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106231">
<div class="phpcode"><code><span class="html">Need a callback on an iterated value, but don't have PHP 5.4+?  This makes is stupid easy:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">ArrayCallbackIterator </span><span class="keyword">extends </span><span class="default">ArrayIterator </span><span class="keyword">{
<br />  private </span><span class="default">$callback</span><span class="keyword">;
<br />  public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">) {
<br />    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback </span><span class="keyword">= </span><span class="default">$callback</span><span class="keyword">;
<br />  }
<br />
<br />  public function </span><span class="default">current</span><span class="keyword">() {
<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">current</span><span class="keyword">();
<br />    return </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);
<br />  }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />You can use it pretty much exactly as the Array Iterator:
<br />
<br /><span class="default">&lt;?php
<br />$iterator1 </span><span class="keyword">= new </span><span class="default">ArrayCallbackIterator</span><span class="keyword">(</span><span class="default">$valueList</span><span class="keyword">, </span><span class="string">"callback_function"</span><span class="keyword">);
<br /></span><span class="default">$iterator2 </span><span class="keyword">= new </span><span class="default">ArrayCallbackIterator</span><span class="keyword">(</span><span class="default">$valueList</span><span class="keyword">, array(</span><span class="default">$object</span><span class="keyword">, </span><span class="string">"callback_class_method"</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127869">  <div class="votes">
    <div id="Vu127869">
    <a href="/manual/vote-note.php?id=127869&amp;page=class.arrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127869">
    <a href="/manual/vote-note.php?id=127869&amp;page=class.arrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127869" title="66% like this...">
    2
    </div>
  </div>
  <a href="#127869" class="name">
  <strong class="user"><em>butesa at freenet dot de</em></strong></a><a class="genanchor" href="#127869"> &para;</a><div class="date" title="2022-10-28 05:11"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127869">
<div class="phpcode"><code><span class="html">The documentation states "This iterator allows to unset and modify values and keys while iterating over Arrays and Objects". But if you pass an array to the constructor, the iterator works with a copy of that array, so the modifications will not be written back to that initial array. ArrayObject behaves the same way.<br /><br />If you want an iterator that writes back to the array, you can use this function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function &amp;</span><span class="default">getArrayIterator</span><span class="keyword">(array &amp;</span><span class="default">$a</span><span class="keyword">): </span><span class="default">Iterator </span><span class="keyword">{<br />    foreach (</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; &amp;</span><span class="default">$v</span><span class="keyword">) {<br />        yield </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">];<br /><br /></span><span class="default">$iterator </span><span class="keyword">= </span><span class="default">getArrayIterator</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />foreach (</span><span class="default">$iterator </span><span class="keyword">as &amp;</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">.= </span><span class="string">'x'</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//array(2) {<br />//  [1]=&gt;<br />//  string(2) "ax"<br />//  [2]=&gt;<br />//  &amp;string(2) "bx"<br />//}<br />//object(Generator)#4 (0) {<br />//}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Comparison with plain array, ArrayIterator and ArrayObject:<br /><br /><span class="default">&lt;?php<br />$array1 </span><span class="keyword">= [</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">];<br /></span><span class="default">$array2 </span><span class="keyword">= [</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">];<br /></span><span class="default">$array3 </span><span class="keyword">= [</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">];<br /><br />foreach (</span><span class="default">$array1 </span><span class="keyword">as &amp;</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">.= </span><span class="string">'x'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$iterator2 </span><span class="keyword">= new </span><span class="default">ArrayIterator</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br />foreach (</span><span class="default">$iterator2 </span><span class="keyword">as &amp;</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">.= </span><span class="string">'x'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$iterator3 </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">(</span><span class="default">$array3</span><span class="keyword">);<br />foreach (</span><span class="default">$iterator3 </span><span class="keyword">as &amp;</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">.= </span><span class="string">'x'</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//array(2) {<br />//  [1]=&gt;<br />//  string(2) "ax"<br />//  [2]=&gt;<br />//  string(2) "bx"<br />//}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">);<br /><br /></span><span class="comment">//array(2) {<br />//  [1]=&gt;<br />//  string(1) "a"<br />//  [2]=&gt;<br />//  string(1) "b"<br />//}<br />//object(ArrayIterator)#1 (1) {<br />//  ["storage":"ArrayIterator":private]=&gt;<br />//  array(2) {<br />//    [1]=&gt;<br />//    string(2) "ax"<br />//    [2]=&gt;<br />//    string(2) "bx"<br />//  }<br />//}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$iterator2</span><span class="keyword">);<br /><br /></span><span class="comment">//array(2) {<br />//  [1]=&gt;<br />//  string(1) "a"<br />//  [2]=&gt;<br />//  string(1) "b"<br />//}<br />//object(ArrayObject)#2 (1) {<br />//  ["storage":"ArrayObject":private]=&gt;<br />//  array(2) {<br />//    [1]=&gt;<br />//    string(2) "ax"<br />//    [2]=&gt;<br />//    string(2) "bx"<br />//  }<br />//}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array3</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$iterator3</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91122">  <div class="votes">
    <div id="Vu91122">
    <a href="/manual/vote-note.php?id=91122&amp;page=class.arrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91122">
    <a href="/manual/vote-note.php?id=91122&amp;page=class.arrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91122" title="61% like this...">
    11
    </div>
  </div>
  <a href="#91122" class="name">
  <strong class="user"><em>Sean Burlington</em></strong></a><a class="genanchor" href="#91122"> &para;</a><div class="date" title="2009-05-26 05:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91122">
<div class="phpcode"><code><span class="html">and to iterate recursively use the (sparsely documented)  RecursiveArrayIterator<br /><br /><span class="default">&lt;?php<br /><br />$fruits </span><span class="keyword">= array(<br />                </span><span class="string">"apple" </span><span class="keyword">=&gt; </span><span class="string">"yummy"</span><span class="keyword">,<br />                </span><span class="string">"orange" </span><span class="keyword">=&gt; </span><span class="string">"ah ya, nice"</span><span class="keyword">,<br />                </span><span class="string">"grape" </span><span class="keyword">=&gt; </span><span class="string">"wow, I love it!"</span><span class="keyword">,<br />                 </span><span class="string">"plum" </span><span class="keyword">=&gt; </span><span class="string">"nah, not me"<br />                </span><span class="keyword">);<br /><br /></span><span class="default">$veg </span><span class="keyword">= array(</span><span class="string">"potato" </span><span class="keyword">=&gt; </span><span class="string">"chips"</span><span class="keyword">, </span><span class="string">"carrot" </span><span class="keyword">=&gt; </span><span class="string">"soup"</span><span class="keyword">);<br /></span><span class="default">$grocery </span><span class="keyword">= array(</span><span class="default">$fruits</span><span class="keyword">, </span><span class="default">$veg</span><span class="keyword">);<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">( </span><span class="default">$grocery </span><span class="keyword">);<br /><br /></span><span class="default">$it </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">( new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$grocery</span><span class="keyword">));<br /><br />foreach (</span><span class="default">$it </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />echo </span><span class="default">$key</span><span class="keyword">.</span><span class="string">":"</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Output<br />--------<br />apple:yummy<br />orange:ah ya, nice<br />grape:wow, I love it!<br />plum:nah, not me<br />potato:chips<br />carrot:soup</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.arrayiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.arrayiterator.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.iterators.php">Iterators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.appenditerator.php" title="AppendIterator">AppendIterator</a>
                        </li>
                                                <li class="current">
                            <a href="class.arrayiterator.php" title="ArrayIterator">ArrayIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.cachingiterator.php" title="CachingIterator">CachingIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.callbackfilteriterator.php" title="CallbackFilterIterator">CallbackFilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.directoryiterator.php" title="DirectoryIterator">DirectoryIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.emptyiterator.php" title="EmptyIterator">EmptyIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.filesystemiterator.php" title="FilesystemIterator">FilesystemIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.filteriterator.php" title="FilterIterator">FilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.globiterator.php" title="GlobIterator">GlobIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.infiniteiterator.php" title="InfiniteIterator">InfiniteIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.iteratoriterator.php" title="IteratorIterator">IteratorIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.limititerator.php" title="LimitIterator">LimitIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.multipleiterator.php" title="MultipleIterator">MultipleIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.norewinditerator.php" title="NoRewindIterator">NoRewindIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.parentiterator.php" title="ParentIterator">ParentIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivearrayiterator.php" title="RecursiveArrayIterator">RecursiveArrayIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivecachingiterator.php" title="RecursiveCachingIterator">RecursiveCachingIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivecallbackfilteriterator.php" title="RecursiveCallbackFilterIterator">RecursiveCallbackFilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivedirectoryiterator.php" title="RecursiveDirectoryIterator">RecursiveDirectoryIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivefilteriterator.php" title="RecursiveFilterIterator">RecursiveFilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursiveiteratoriterator.php" title="RecursiveIteratorIterator">RecursiveIteratorIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursiveregexiterator.php" title="RecursiveRegexIterator">RecursiveRegexIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivetreeiterator.php" title="RecursiveTreeIterator">RecursiveTreeIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.regexiterator.php" title="RegexIterator">RegexIterator</a>
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
