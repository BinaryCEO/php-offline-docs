<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: RecursiveArrayIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.recursivearrayiterator.php">
 <link rel="shorturl" href="https://www.php.net/recursivearrayiterator">
 <link rel="alternate" href="https://www.php.net/recursivearrayiterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.iterators.php">
 <link rel="prev" href="https://www.php.net/manual/en/parentiterator.rewind.php">
 <link rel="next" href="https://www.php.net/manual/en/recursivearrayiterator.getchildren.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.recursivearrayiterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.recursivearrayiterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.recursivearrayiterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.recursivearrayiterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.recursivearrayiterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.recursivearrayiterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.recursivearrayiterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.recursivearrayiterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.recursivearrayiterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.recursivearrayiterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.recursivearrayiterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The RecursiveArrayIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: RecursiveArrayIterator - Manual" />
<meta name="twitter:description" content="The RecursiveArrayIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: RecursiveArrayIterator - Manual" />
<meta itemprop="description" content="The RecursiveArrayIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The RecursiveArrayIterator class" />

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
        <a href="recursivearrayiterator.getchildren.php">
          RecursiveArrayIterator::getChildren &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="parentiterator.rewind.php">
          &laquo; ParentIterator::rewind        </a>
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
            <option value='en/class.recursivearrayiterator.php' selected="selected">English</option>
            <option value='de/class.recursivearrayiterator.php'>German</option>
            <option value='es/class.recursivearrayiterator.php'>Spanish</option>
            <option value='fr/class.recursivearrayiterator.php'>French</option>
            <option value='it/class.recursivearrayiterator.php'>Italian</option>
            <option value='ja/class.recursivearrayiterator.php'>Japanese</option>
            <option value='pt_BR/class.recursivearrayiterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.recursivearrayiterator.php'>Russian</option>
            <option value='tr/class.recursivearrayiterator.php'>Turkish</option>
            <option value='uk/class.recursivearrayiterator.php'>Ukrainian</option>
            <option value='zh/class.recursivearrayiterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.recursivearrayiterator" class="reference">
 <h1 class="title">The RecursiveArrayIterator class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p>


  <div class="section" id="recursivearrayiterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    This iterator allows for unsetting and modifying values and keys while iterating over arrays and objects,
    in the same way as the <span class="type"><a href="class.arrayiterator.php" class="type ArrayIterator">ArrayIterator</a></span>. Additionally, it is possible to iterate
    over the current iterator entry.
   </p>
  </div>


  <div class="section" id="recursivearrayiterator.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">RecursiveArrayIterator</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.arrayiterator.php" class="classname">ArrayIterator</a>
    

    
     <span class="modifier">implements</span>
      <a href="class.recursiveiterator.php" class="interfacename">RecursiveIterator</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.arrayiterator.php#arrayiterator.constants.std-prop-list"><var class="varname">ArrayIterator::STD_PROP_LIST</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.arrayiterator.php#arrayiterator.constants.array-as-props"><var class="varname">ArrayIterator::ARRAY_AS_PROPS</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.recursivearrayiterator.php#recursivearrayiterator.constants.child-arrays-only"><var class="varname">CHILD_ARRAYS_ONLY</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="recursivearrayiterator.getchildren.php" class="methodname">getChildren</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.recursivearrayiterator.php" class="type RecursiveArrayIterator">RecursiveArrayIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivearrayiterator.haschildren.php" class="methodname">hasChildren</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.construct.php" class="methodname">ArrayIterator::__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$array</code><span class="initializer"> = []</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.append.php" class="methodname">ArrayIterator::append</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.asort.php" class="methodname">ArrayIterator::asort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.count.php" class="methodname">ArrayIterator::count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.current.php" class="methodname">ArrayIterator::current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.getarraycopy.php" class="methodname">ArrayIterator::getArrayCopy</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.getflags.php" class="methodname">ArrayIterator::getFlags</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.key.php" class="methodname">ArrayIterator::key</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.ksort.php" class="methodname">ArrayIterator::ksort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.natcasesort.php" class="methodname">ArrayIterator::natcasesort</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.natsort.php" class="methodname">ArrayIterator::natsort</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.next.php" class="methodname">ArrayIterator::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetexists.php" class="methodname">ArrayIterator::offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetget.php" class="methodname">ArrayIterator::offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetset.php" class="methodname">ArrayIterator::offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.offsetunset.php" class="methodname">ArrayIterator::offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.rewind.php" class="methodname">ArrayIterator::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.seek.php" class="methodname">ArrayIterator::seek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.serialize.php" class="methodname">ArrayIterator::serialize</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.setflags.php" class="methodname">ArrayIterator::setFlags</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.uasort.php" class="methodname">ArrayIterator::uasort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.uksort.php" class="methodname">ArrayIterator::uksort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.unserialize.php" class="methodname">ArrayIterator::unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayiterator.valid.php" class="methodname">ArrayIterator::valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>

  </div>

  <div class="section" id="recursivearrayiterator.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="recursivearrayiterator.constants.flags">
    <h2 class="title">RecursiveArrayIterator Flags</h2>
    <dl>
     
      <dt id="recursivearrayiterator.constants.child-arrays-only"><strong><code><a href="class.recursivearrayiterator.php#recursivearrayiterator.constants.child-arrays-only">RecursiveArrayIterator::CHILD_ARRAYS_ONLY</a></code></strong></dt>
      <dd>
       <p class="para">Treat only arrays (not objects) as having children for recursive iteration.</p>
      </dd>
     
    </dl>
   </div>
  </div>



 </div>

 










<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="recursivearrayiterator.getchildren.php">RecursiveArrayIterator::getChildren</a> — Returns an iterator for the current entry if it is an array or an object</li><li><a href="recursivearrayiterator.haschildren.php">RecursiveArrayIterator::hasChildren</a> — Returns whether current entry is an array or an object</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/recursivearrayiterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.recursivearrayiterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.recursivearrayiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.recursivearrayiterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106519">  <div class="votes">
    <div id="Vu106519">
    <a href="/manual/vote-note.php?id=106519&amp;page=class.recursivearrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106519">
    <a href="/manual/vote-note.php?id=106519&amp;page=class.recursivearrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106519" title="84% like this...">
    18
    </div>
  </div>
  <a href="#106519" class="name">
  <strong class="user"><em>c dot 1 at smithies dot org</em></strong></a><a class="genanchor" href="#106519"> &para;</a><div class="date" title="2011-11-15 10:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106519">
<div class="phpcode"><code><span class="html">If you are iterating over a multi-dimensional array of objects, you may be tempted to use a RecursiveArrayIterator within a RecursiveIteratorIterator. You are likely to get baffling results if you do. That is because RecursiveArrayIterator treats all objects as having children, and tries to recurse into them. But if you are interested in having your RecursiveIteratorIterator return the objects in your multi-dimensional array, then you don't want the default setting LEAVES_ONLY, because no object can be a leaf (= has no children).<br /><br />The solution is to extend the RecursiveArrayIterator class and override the hasChildren method appropriately. Something like the following might be suitable:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">RecursiveArrayOnlyIterator </span><span class="keyword">extends </span><span class="default">RecursiveArrayIterator </span><span class="keyword">{<br />  public function </span><span class="default">hasChildren</span><span class="keyword">() {<br />    return </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span>Of course, this simple example will not recurse into ArrayObjects either!</span></code></div>
  </div>
 </div>
  <div class="note" id="102574">  <div class="votes">
    <div id="Vu102574">
    <a href="/manual/vote-note.php?id=102574&amp;page=class.recursivearrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102574">
    <a href="/manual/vote-note.php?id=102574&amp;page=class.recursivearrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102574" title="75% like this...">
    15
    </div>
  </div>
  <a href="#102574" class="name">
  <strong class="user"><em>mccarthy dot richard at gmail dot com</em></strong></a><a class="genanchor" href="#102574"> &para;</a><div class="date" title="2011-02-22 07:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102574">
<div class="phpcode"><code><span class="html">Using the RecursiveArrayIterator to traverse an unknown amount of sub arrays within the outer array. Note: This functionality is already provided by using the RecursiveIteratorIterator but is useful in understanding how to use the iterator when using for the first time as all the terminology does get rather confusing at first sight of SPL!
<br />
<br /><span class="default">&lt;?php
<br />$myArray </span><span class="keyword">= array(
<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,
<br />    </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">'subA'</span><span class="keyword">,</span><span class="string">'subB'</span><span class="keyword">,array(</span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'subsubA'</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'subsubB'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'deepA'</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'deepB'</span><span class="keyword">))),
<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">,
<br />    </span><span class="default">3 </span><span class="keyword">=&gt; array(</span><span class="string">'subA'</span><span class="keyword">,</span><span class="string">'subB'</span><span class="keyword">,</span><span class="string">'subC'</span><span class="keyword">),
<br />    </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">'c'
<br /></span><span class="keyword">);
<br />
<br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">);
<br /></span><span class="default">iterator_apply</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">, </span><span class="string">'traverseStructure'</span><span class="keyword">, array(</span><span class="default">$iterator</span><span class="keyword">));
<br />
<br />function </span><span class="default">traverseStructure</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">) {
<br />    
<br />    while ( </span><span class="default">$iterator </span><span class="keyword">-&gt; </span><span class="default">valid</span><span class="keyword">() ) {
<br />
<br />        if ( </span><span class="default">$iterator </span><span class="keyword">-&gt; </span><span class="default">hasChildren</span><span class="keyword">() ) {
<br />        
<br />            </span><span class="default">traverseStructure</span><span class="keyword">(</span><span class="default">$iterator </span><span class="keyword">-&gt; </span><span class="default">getChildren</span><span class="keyword">());
<br />            
<br />        }
<br />        else {
<br />            echo </span><span class="default">$iterator </span><span class="keyword">-&gt; </span><span class="default">key</span><span class="keyword">() . </span><span class="string">' : ' </span><span class="keyword">. </span><span class="default">$iterator </span><span class="keyword">-&gt; </span><span class="default">current</span><span class="keyword">() .</span><span class="default">PHP_EOL</span><span class="keyword">;    
<br />        }
<br />
<br />        </span><span class="default">$iterator </span><span class="keyword">-&gt; </span><span class="default">next</span><span class="keyword">();
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />The output from which is:
<br />0 : a
<br />0 : subA
<br />1 : subB
<br />0 : subsubA
<br />1 : subsubB
<br />0 : deepA
<br />1 : deepB
<br />2 : b
<br />0 : subA
<br />1 : subB
<br />2 : subC
<br />4 : c</span></code></div>
  </div>
 </div>
  <div class="note" id="127049">  <div class="votes">
    <div id="Vu127049">
    <a href="/manual/vote-note.php?id=127049&amp;page=class.recursivearrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127049">
    <a href="/manual/vote-note.php?id=127049&amp;page=class.recursivearrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127049" title="85% like this...">
    5
    </div>
  </div>
  <a href="#127049" class="name">
  <strong class="user"><em>Edgar</em></strong></a><a class="genanchor" href="#127049"> &para;</a><div class="date" title="2022-05-12 11:47"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127049">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br />$array </span><span class="keyword">= [<br /></span><span class="string">'A'</span><span class="keyword">,</span><span class="string">'B'</span><span class="keyword">,<br /></span><span class="string">'C'</span><span class="keyword">=&gt;[<br />    </span><span class="string">'D'</span><span class="keyword">,</span><span class="string">'E'</span><span class="keyword">,<br />    </span><span class="string">'F'</span><span class="keyword">=&gt;[</span><span class="string">'G'</span><span class="keyword">,</span><span class="string">'H'</span><span class="keyword">]<br /> ],<br /></span><span class="string">'I'</span><span class="keyword">,</span><span class="string">'J'<br /></span><span class="keyword">];<br /><br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$key</span><span class="keyword">,</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">,</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br />Output<br />0:A<br />1:B<br />C:Array<br />2:I<br />3:J<br />*/<br /><br />//-------------<br />//Recursive...<br /><br /></span><span class="default">$array </span><span class="keyword">= [<br /></span><span class="string">'A'</span><span class="keyword">,</span><span class="string">'B'</span><span class="keyword">,<br /></span><span class="string">'C'</span><span class="keyword">=&gt;[<br />    </span><span class="string">'D'</span><span class="keyword">,</span><span class="string">'E'</span><span class="keyword">,<br />    </span><span class="string">'F'</span><span class="keyword">=&gt;[</span><span class="string">'G'</span><span class="keyword">,</span><span class="string">'H'</span><span class="keyword">]<br /> ],<br /></span><span class="string">'I'</span><span class="keyword">,</span><span class="string">'J'<br /></span><span class="keyword">];<br /><br /></span><span class="default">$it </span><span class="keyword">= new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$it</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$key</span><span class="keyword">,</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">,</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br />Output<br />0:A<br />1:B<br />0:D<br />1:E<br />0:G<br />1:H<br />2:I<br />3:J<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113884">  <div class="votes">
    <div id="Vu113884">
    <a href="/manual/vote-note.php?id=113884&amp;page=class.recursivearrayiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113884">
    <a href="/manual/vote-note.php?id=113884&amp;page=class.recursivearrayiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113884" title="75% like this...">
    8
    </div>
  </div>
  <a href="#113884" class="name">
  <strong class="user"><em>lemoinem dot remove at me dot mlemoine dot name</em></strong></a><a class="genanchor" href="#113884"> &para;</a><div class="date" title="2013-12-12 10:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113884">
<div class="phpcode"><code><span class="html">The RecursiveArrayOnlyIterator behaviour c dot 1 at smithies dot org presented can also be achieved using the (undocumented) flag RecursiveArrayIterator::CHILD_ARRAYS_ONLY (<a href="https://github.com/php/php-src/blob/master/ext/spl/spl_array.c#L1970" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/master/ext/spl/spl_array.c#L1970</a> and <a href="https://github.com/php/php-src/blob/master/ext/spl/spl_array.c#L1620" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/master/ext/spl/spl_array.c#L1620</a>)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.recursivearrayiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.recursivearrayiterator.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.iterators.php">Iterators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.appenditerator.php" title="AppendIterator">AppendIterator</a>
                        </li>
                                                <li class="">
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
                                                <li class="current">
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
