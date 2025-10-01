<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ArrayObject - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.arrayobject.php">
 <link rel="shorturl" href="https://www.php.net/arrayobject">
 <link rel="alternate" href="https://www.php.net/arrayobject" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.datastructures.php">
 <link rel="prev" href="https://www.php.net/manual/en/splfixedarray.wakeup.php">
 <link rel="next" href="https://www.php.net/manual/en/arrayobject.append.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.arrayobject.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.arrayobject.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.arrayobject.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.arrayobject.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.arrayobject.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.arrayobject.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.arrayobject.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.arrayobject.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.arrayobject.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.arrayobject.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.arrayobject.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ArrayObject class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ArrayObject - Manual" />
<meta name="twitter:description" content="The ArrayObject class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ArrayObject - Manual" />
<meta itemprop="description" content="The ArrayObject class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ArrayObject class" />

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
        <a href="arrayobject.append.php">
          ArrayObject::append &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="splfixedarray.wakeup.php">
          &laquo; SplFixedArray::__wakeup        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.datastructures.php'>Datastructures</a></li>      </ul>
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
            <option value='en/class.arrayobject.php' selected="selected">English</option>
            <option value='de/class.arrayobject.php'>German</option>
            <option value='es/class.arrayobject.php'>Spanish</option>
            <option value='fr/class.arrayobject.php'>French</option>
            <option value='it/class.arrayobject.php'>Italian</option>
            <option value='ja/class.arrayobject.php'>Japanese</option>
            <option value='pt_BR/class.arrayobject.php'>Brazilian Portuguese</option>
            <option value='ru/class.arrayobject.php'>Russian</option>
            <option value='tr/class.arrayobject.php'>Turkish</option>
            <option value='uk/class.arrayobject.php'>Ukrainian</option>
            <option value='zh/class.arrayobject.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.arrayobject" class="reference">
 <h1 class="title">The ArrayObject class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 

  <div class="section" id="arrayobject.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    This class allows objects to work as arrays.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Wrapping objects with this class is fundamentally flawed, and therefore its usage with objects is discouraged.
    </span>
   </p></blockquote>
  </div>

 
  <div class="section" id="arrayobject.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ArrayObject</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a>,

     <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a>,

     <a href="class.serializable.php" class="interfacename">Serializable</a>,

     <a href="class.countable.php" class="interfacename">Countable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.arrayobject.php#arrayobject.constants.std-prop-list"><var class="varname">STD_PROP_LIST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.arrayobject.php#arrayobject.constants.array-as-props"><var class="varname">ARRAY_AS_PROPS</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="arrayobject.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$array</code><span class="initializer"> = []</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$iteratorClass</code><span class="initializer"> = ArrayIterator::class</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.append.php" class="methodname">append</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.asort.php" class="methodname">asort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.exchangearray.php" class="methodname">exchangeArray</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$array</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.getarraycopy.php" class="methodname">getArrayCopy</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.getflags.php" class="methodname">getFlags</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.getiterator.php" class="methodname">getIterator</a></span>(): <span class="type"><a href="class.iterator.php" class="type Iterator">Iterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.getiteratorclass.php" class="methodname">getIteratorClass</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.ksort.php" class="methodname">ksort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.natcasesort.php" class="methodname">natcasesort</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.natsort.php" class="methodname">natsort</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.serialize.php" class="methodname">serialize</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.setflags.php" class="methodname">setFlags</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.setiteratorclass.php" class="methodname">setIteratorClass</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$iteratorClass</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.uasort.php" class="methodname">uasort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.uksort.php" class="methodname">uksort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayobject.unserialize.php" class="methodname">unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>
 
  </div>
 
  <div class="section" id="arrayobject.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="arrayobject.constants.flags">
    <h2 class="title">ArrayObject Flags</h2>
    <dl>

     
      <dt id="arrayobject.constants.std-prop-list"><strong><code><a href="class.arrayobject.php#arrayobject.constants.std-prop-list">ArrayObject::STD_PROP_LIST</a></code></strong></dt>
      <dd>
       <p class="para">
        Properties of the object have their normal functionality when
        accessed as list (<span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>, <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a>, etc.).
       </p>
      </dd>
     

     
      <dt id="arrayobject.constants.array-as-props"><strong><code><a href="class.arrayobject.php#arrayobject.constants.array-as-props">ArrayObject::ARRAY_AS_PROPS</a></code></strong></dt>
      <dd>
       <p class="para">
        Entries can be accessed as properties (read and write). The
        <span class="classname"><strong class="classname">ArrayObject</strong></span> class uses its own logic to access
        properties, thus no warning or error is raised when trying to read or
        write dynamic properties.
       </p>
      </dd>
     
    </dl>
   </div>
  </div>
  

 
 </div>
 
 













































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="arrayobject.append.php">ArrayObject::append</a> — Appends the value</li><li><a href="arrayobject.asort.php">ArrayObject::asort</a> — Sort the entries by value</li><li><a href="arrayobject.construct.php">ArrayObject::__construct</a> — Construct a new array object</li><li><a href="arrayobject.count.php">ArrayObject::count</a> — Get the number of public properties in the ArrayObject</li><li><a href="arrayobject.exchangearray.php">ArrayObject::exchangeArray</a> — Exchange the array for another one</li><li><a href="arrayobject.getarraycopy.php">ArrayObject::getArrayCopy</a> — Creates a copy of the ArrayObject</li><li><a href="arrayobject.getflags.php">ArrayObject::getFlags</a> — Gets the behavior flags</li><li><a href="arrayobject.getiterator.php">ArrayObject::getIterator</a> — Create a new iterator from an ArrayObject instance</li><li><a href="arrayobject.getiteratorclass.php">ArrayObject::getIteratorClass</a> — Gets the iterator classname for the ArrayObject</li><li><a href="arrayobject.ksort.php">ArrayObject::ksort</a> — Sort the entries by key</li><li><a href="arrayobject.natcasesort.php">ArrayObject::natcasesort</a> — Sort an array using a case insensitive &quot;natural order&quot; algorithm</li><li><a href="arrayobject.natsort.php">ArrayObject::natsort</a> — Sort entries using a &quot;natural order&quot; algorithm</li><li><a href="arrayobject.offsetexists.php">ArrayObject::offsetExists</a> — Returns whether the requested index exists</li><li><a href="arrayobject.offsetget.php">ArrayObject::offsetGet</a> — Returns the value at the specified index</li><li><a href="arrayobject.offsetset.php">ArrayObject::offsetSet</a> — Sets the value at the specified index to newval</li><li><a href="arrayobject.offsetunset.php">ArrayObject::offsetUnset</a> — Unsets the value at the specified index</li><li><a href="arrayobject.serialize.php">ArrayObject::serialize</a> — Serialize an ArrayObject</li><li><a href="arrayobject.setflags.php">ArrayObject::setFlags</a> — Sets the behavior flags</li><li><a href="arrayobject.setiteratorclass.php">ArrayObject::setIteratorClass</a> — Sets the iterator classname for the ArrayObject</li><li><a href="arrayobject.uasort.php">ArrayObject::uasort</a> — Sort the entries with a user-defined comparison function and maintain key association</li><li><a href="arrayobject.uksort.php">ArrayObject::uksort</a> — Sort the entries by keys using a user-defined comparison function</li><li><a href="arrayobject.unserialize.php">ArrayObject::unserialize</a> — Unserialize an ArrayObject</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/arrayobject.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.arrayobject%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.arrayobject&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.arrayobject.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107079">  <div class="votes">
    <div id="Vu107079">
    <a href="/manual/vote-note.php?id=107079&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107079">
    <a href="/manual/vote-note.php?id=107079&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107079" title="75% like this...">
    99
    </div>
  </div>
  <a href="#107079" class="name">
  <strong class="user"><em>php5 dot man at lightning dot hu</em></strong></a><a class="genanchor" href="#107079"> &para;</a><div class="date" title="2012-01-05 08:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107079">
<div class="phpcode"><code><span class="html">As you know ArrayObject is not an array so you can't use the built in array functions. Here's a trick around that:<br /><br />Extend the ArrayObject class with your own and implement this magic method:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">) || </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">) !== </span><span class="string">'array_'</span><span class="keyword">)<br />        {<br />            throw new </span><span class="default">BadMethodCallException</span><span class="keyword">(</span><span class="default">__CLASS__</span><span class="keyword">.</span><span class="string">'-&gt;'</span><span class="keyword">.</span><span class="default">$func</span><span class="keyword">);<br />        }<br />        return </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">array_merge</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">()), </span><span class="default">$argv</span><span class="keyword">));<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Now you can do this with any array_* function:<br /><span class="default">&lt;?php<br />$yourObject</span><span class="keyword">-&gt;</span><span class="default">array_keys</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>- Don't forget to ommit the first parameter - it's automatic!<br /><br />Note: You might want to write your own functions if you're working with large sets of data.</span></code></div>
  </div>
 </div>
  <div class="note" id="112949">  <div class="votes">
    <div id="Vu112949">
    <a href="/manual/vote-note.php?id=112949&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112949">
    <a href="/manual/vote-note.php?id=112949&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112949" title="82% like this...">
    34
    </div>
  </div>
  <a href="#112949" class="name">
  <strong class="user"><em>rwn dot gallego at gmail dot com</em></strong></a><a class="genanchor" href="#112949"> &para;</a><div class="date" title="2013-08-11 09:30"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112949">
<div class="phpcode"><code><span class="html">There is a better explanation about the ArrayObject flags (STD_PROP_LIST and ARRAY_AS_PROPS) right here: <br /><br /><a href="http://stackoverflow.com/a/16619183/1019305" rel="nofollow" target="_blank">http://stackoverflow.com/a/16619183/1019305</a><br /><br />Thanks to JayTaph</span></code></div>
  </div>
 </div>
  <div class="note" id="126811">  <div class="votes">
    <div id="Vu126811">
    <a href="/manual/vote-note.php?id=126811&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126811">
    <a href="/manual/vote-note.php?id=126811&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126811" title="76% like this...">
    11
    </div>
  </div>
  <a href="#126811" class="name">
  <strong class="user"><em>bub at gmail dot com</em></strong></a><a class="genanchor" href="#126811"> &para;</a><div class="date" title="2022-01-30 01:07"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126811">
<div class="phpcode"><code><span class="html">If you need the last key of your collection use:<br /><span class="default">&lt;?php<br />array_key_last</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">())<br /></span><span class="default">?&gt;<br /></span><br />In an extending class it could look like:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Collection </span><span class="keyword">extends </span><span class="default">ArrayObject<br /></span><span class="keyword">{<br />    public function </span><span class="default">lastKey</span><span class="keyword">(): </span><span class="default">int<br />    </span><span class="keyword">{<br />        return </span><span class="default">array_key_last</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">());<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />If you want to use any type safe collection:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">BookCollection </span><span class="keyword">extends </span><span class="default">Collection<br /></span><span class="keyword">{<br />    public function </span><span class="default">add</span><span class="keyword">(</span><span class="default">Book $book</span><span class="keyword">) : </span><span class="default">void<br />    </span><span class="keyword">{<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$book</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">$book</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">// note the return type "Book"<br />    </span><span class="keyword">public function </span><span class="default">get</span><span class="keyword">(</span><span class="default">int $bookId</span><span class="keyword">) : </span><span class="default">Book <br />    </span><span class="keyword">{<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$bookId</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105481">  <div class="votes">
    <div id="Vu105481">
    <a href="/manual/vote-note.php?id=105481&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105481">
    <a href="/manual/vote-note.php?id=105481&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105481" title="69% like this...">
    25
    </div>
  </div>
  <a href="#105481" class="name">
  <strong class="user"><em>MarkAndrewSlade at gmail dot com</em></strong></a><a class="genanchor" href="#105481"> &para;</a><div class="date" title="2011-08-21 06:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105481">
<div class="phpcode"><code><span class="html">I found the description of STD_PROP_LIST a bit vague, so I put together a simple demonstration to show its behavior:<br /><br /><span class="default">&lt;?php                                                     <br />                                                          <br />$a </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">(array(), </span><span class="default">ArrayObject</span><span class="keyword">::</span><span class="default">STD_PROP_LIST</span><span class="keyword">);<br />    </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'arr'</span><span class="keyword">] = </span><span class="string">'array data'</span><span class="keyword">;                             <br />    </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="string">'prop data'</span><span class="keyword">;                               <br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">();                                   <br />    </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'arr'</span><span class="keyword">] = </span><span class="string">'array data'</span><span class="keyword">;                             <br />    </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="string">'prop data'</span><span class="keyword">;                               <br />                                                          <br /></span><span class="comment">// ArrayObject Object                                     <br />// (                                                      <br />//      [prop] =&gt; prop data                               <br />// )                                                      <br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);                                              <br />                                                          <br /></span><span class="comment">// ArrayObject Object                                     <br />// (                                                      <br />//      [arr] =&gt; array data                               <br />// )                                                      <br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);                                              <br />                                                          <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87964">  <div class="votes">
    <div id="Vu87964">
    <a href="/manual/vote-note.php?id=87964&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87964">
    <a href="/manual/vote-note.php?id=87964&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87964" title="76% like this...">
    11
    </div>
  </div>
  <a href="#87964" class="name">
  <strong class="user"><em>deminy at deminy dot net</em></strong></a><a class="genanchor" href="#87964"> &para;</a><div class="date" title="2009-01-02 01:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87964">
<div class="phpcode"><code><span class="html">Generally variable $this can't be used as an array within an object context. For example, following code piece would cause a fatal error:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestThis </span><span class="keyword">{<br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />        return </span><span class="default">$this</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />    }<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">TestThis</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="string">'aaa'</span><span class="keyword">;<br />echo </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />But things are different when $this is used in an ArrayObject object. e.g., following code piece are valid:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestArrayObject </span><span class="keyword">extends </span><span class="default">ArrayObject </span><span class="keyword">{    <br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />        return </span><span class="default">$this</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />    }<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">TestArrayObject</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="string">'aaa'</span><span class="keyword">;<br />echo </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116162">  <div class="votes">
    <div id="Vu116162">
    <a href="/manual/vote-note.php?id=116162&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116162">
    <a href="/manual/vote-note.php?id=116162&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116162" title="73% like this...">
    9
    </div>
  </div>
  <a href="#116162" class="name">
  <strong class="user"><em>Gilles A</em></strong></a><a class="genanchor" href="#116162"> &para;</a><div class="date" title="2014-11-17 01:51"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116162">
<div class="phpcode"><code><span class="html">// Example STD_PROP_LIST and ARRAY_AS_PROP combined<br /><span class="default">&lt;?php<br />$ao </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">();<br /></span><span class="default">$ao </span><span class="keyword">-&gt;</span><span class="default">setFlags</span><span class="keyword">(</span><span class="default">ArrayObject</span><span class="keyword">::</span><span class="default">STD_PROP_LIST</span><span class="keyword">|</span><span class="default">ArrayObject</span><span class="keyword">::</span><span class="default">ARRAY_AS_PROPS</span><span class="keyword">);<br /><br /></span><span class="default">$ao</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="string">'prop data'</span><span class="keyword">;<br /></span><span class="default">$ao</span><span class="keyword">[</span><span class="string">'arr'</span><span class="keyword">] = </span><span class="string">'array data'</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$ao</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />// Result<br /><br />ArrayObject Object<br />(<br />    [storage:ArrayObject:private] =&amp;gt; Array<br />        (<br />            [prop] =&gt; prop data<br />            [arr] =&gt; array data<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="122712">  <div class="votes">
    <div id="Vu122712">
    <a href="/manual/vote-note.php?id=122712&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122712">
    <a href="/manual/vote-note.php?id=122712&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122712" title="70% like this...">
    4
    </div>
  </div>
  <a href="#122712" class="name">
  <strong class="user"><em>Vuong Nguyen</em></strong></a><a class="genanchor" href="#122712"> &para;</a><div class="date" title="2018-05-08 03:52"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122712">
<div class="phpcode"><code><span class="html">You can easily realise that ArrayObject can use various functions as they are in ArrayIterator to iterate an object-as-a-array. However, you need to "activate" these function (rewind, valid, next and so on...) by using getIterator() first. Actually this function inherits from Iterator Aggregate interface.<br /><br />Take a look at the following basic example. The results are the same:<br /><br /><span class="default">&lt;?php<br /><br />$array </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">];<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">ArrayIterator</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="default">$iterator </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">getIterator</span><span class="keyword">();<br /><br />for(</span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()){<br />    echo </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()*</span><span class="default">2</span><span class="keyword">;<br />    <br />}<br /><br />for(</span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()){<br />    echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()*</span><span class="default">2</span><span class="keyword">; <br />    <br />}<br /><br /></span><span class="comment">//Resulst are the same 2468 AND 2468</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103508">  <div class="votes">
    <div id="Vu103508">
    <a href="/manual/vote-note.php?id=103508&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103508">
    <a href="/manual/vote-note.php?id=103508&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103508" title="62% like this...">
    6
    </div>
  </div>
  <a href="#103508" class="name">
  <strong class="user"><em>sfinktah at php dot spamtrak dot org</em></strong></a><a class="genanchor" href="#103508"> &para;</a><div class="date" title="2011-04-17 12:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103508">
<div class="phpcode"><code><span class="html">If you plan to derive your own class from ArrayObject, and  wish to maintain complete ArrayObject functionality (such as being able to cast to an array), it is necessary to use ArrayObject's own private property "storage".
<br />
<br />Since that is impossible to do directly, you must use ArrayObject's offset{Set,Get,Exists,Unset} methods to manipulate it indirectly.
<br />
<br />As a side benefit, this means you inherit all the iteration and other functions in complete working order.
<br />
<br />This may sound obvious to someone who has never implemented their own ArrayObject class...  but it is far from so.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">MyArrayObject </span><span class="keyword">extends </span><span class="default">ArrayObject </span><span class="keyword">{
<br />        static </span><span class="default">$debugLevel </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;
<br />
<br />        static public function </span><span class="default">sdprintf</span><span class="keyword">() {
<br />                if (static::</span><span class="default">$debugLevel </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">) {
<br />                        </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="string">"printf"</span><span class="keyword">, </span><span class="default">func_get_args</span><span class="keyword">());
<br />                }
<br />        }
<br />
<br />        public function </span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) { 
<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">sdprintf</span><span class="keyword">(</span><span class="string">"%s(%s)\n"</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">func_get_args</span><span class="keyword">()));
<br />                return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">parent</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">), </span><span class="default">func_get_args</span><span class="keyword">());
<br />        }
<br />        public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) { 
<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">sdprintf</span><span class="keyword">(</span><span class="string">"%s(%s)\n"</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">func_get_args</span><span class="keyword">()));
<br />                return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">parent</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">), </span><span class="default">func_get_args</span><span class="keyword">());
<br />        }
<br />        public function </span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) { 
<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">sdprintf</span><span class="keyword">(</span><span class="string">"%s(%s)\n"</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">func_get_args</span><span class="keyword">()));
<br />                return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">parent</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">), </span><span class="default">func_get_args</span><span class="keyword">());
<br />        }
<br />        public function </span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) { 
<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">sdprintf</span><span class="keyword">(</span><span class="string">"%s(%s)\n"</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">func_get_args</span><span class="keyword">()));
<br />                return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">parent</span><span class="keyword">, </span><span class="default">__FUNCTION__</span><span class="keyword">), </span><span class="default">func_get_args</span><span class="keyword">());
<br />        }
<br />}
<br />
<br /></span><span class="default">$mao </span><span class="keyword">= new </span><span class="default">MyArrayObject</span><span class="keyword">();
<br /></span><span class="default">$mao</span><span class="keyword">[</span><span class="string">"name"</span><span class="keyword">] = </span><span class="string">"bob"</span><span class="keyword">;
<br /></span><span class="default">$mao</span><span class="keyword">[</span><span class="string">"friend"</span><span class="keyword">] = </span><span class="string">"jane"</span><span class="keyword">;
<br /></span><span class="default">print_r</span><span class="keyword">((array)</span><span class="default">$mao</span><span class="keyword">);
<br />
<br /></span><span class="comment">/* Output:
<br /> 
<br />offsetSet(name,bob)
<br />offsetSet(friend,jane)
<br />Array
<br />(
<br />    [name] =&gt; bob
<br />    [friend] =&gt; jane
<br />)       */
<br /></span><span class="default">?&gt;
<br /></span>
<br />If you wish to use the "Array as Properties" flag, you simply need to include this in your constructor: 
<br />
<br /><span class="default">&lt;?php parent</span><span class="keyword">::</span><span class="default">setFlags</span><span class="keyword">(</span><span class="default">parent</span><span class="keyword">::</span><span class="default">ARRAY_AS_PROPS</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />This will allow you to do things such as the below example, without overriding __get or __set .
<br />
<br /><span class="default">&lt;?php
<br />$mao</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="string">"Phil"</span><span class="keyword">;
<br />echo </span><span class="default">$mao</span><span class="keyword">[</span><span class="string">"name"</span><span class="keyword">];   </span><span class="comment">/* Outputs "Phil" */
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122444">  <div class="votes">
    <div id="Vu122444">
    <a href="/manual/vote-note.php?id=122444&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122444">
    <a href="/manual/vote-note.php?id=122444&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122444" title="61% like this...">
    3
    </div>
  </div>
  <a href="#122444" class="name">
  <strong class="user"><em>rudie</em></strong></a><a class="genanchor" href="#122444"> &para;</a><div class="date" title="2018-02-26 02:08"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122444">
<div class="phpcode"><code><span class="html">If you want numerical ArrayObject objects to play nice with json_encode(), implement JsonSerializable:<br /><br />class JsonSerializableArrayObject extends ArrayObject implements JsonSerializable {<br />    function jsonSerialize() {<br />        return $this-&gt;getArrayCopy();<br />    }<br />}<br /><br />For assoc ArrayObject objects this isn't neccesary, but for numerical arrays it is, otherwise they will be formatted like<br /><br />{"0":"jaap","1":"karel"}<br /><br />instead of<br /><br />["jaap","karel"]</span></code></div>
  </div>
 </div>
  <div class="note" id="125849">  <div class="votes">
    <div id="Vu125849">
    <a href="/manual/vote-note.php?id=125849&amp;page=class.arrayobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125849">
    <a href="/manual/vote-note.php?id=125849&amp;page=class.arrayobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125849" title="60% like this...">
    2
    </div>
  </div>
  <a href="#125849" class="name">
  <strong class="user"><em>hello at rayfung dot hk</em></strong></a><a class="genanchor" href="#125849"> &para;</a><div class="date" title="2021-02-22 01:38"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125849">
<div class="phpcode"><code><span class="html">If you want to use built-in array function with ArrayObject, store the iterator instance and return the value as reference in offsetGet.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Collection </span><span class="keyword">extends </span><span class="default">\ArrayObject </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(array </span><span class="default">$data </span><span class="keyword">= [])<br />    {<br />        if (!</span><span class="default">\is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) &amp;&amp; !</span><span class="default">\array_key_exists</span><span class="keyword">(</span><span class="string">'ArrayAccess'</span><span class="keyword">, </span><span class="default">class_implements</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">))) {<br />            </span><span class="default">$data </span><span class="keyword">= [</span><span class="default">$data</span><span class="keyword">];<br />        }<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterator </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getIterator</span><span class="keyword">();<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />    }<br /><br />    public function &amp;</span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$index</span><span class="keyword">)<br />    {<br />        </span><span class="default">$value </span><span class="keyword">= &amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iterator</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] ?? </span><span class="default">null</span><span class="keyword">;<br /><br />        return </span><span class="default">$value</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.arrayobject&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.arrayobject.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.datastructures.php">Datastructures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.spldoublylinkedlist.php" title="SplDoublyLinkedList">SplDoublyLinkedList</a>
                        </li>
                                                <li class="">
                            <a href="class.splstack.php" title="SplStack">SplStack</a>
                        </li>
                                                <li class="">
                            <a href="class.splqueue.php" title="SplQueue">SplQueue</a>
                        </li>
                                                <li class="">
                            <a href="class.splheap.php" title="SplHeap">SplHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splmaxheap.php" title="SplMaxHeap">SplMaxHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splminheap.php" title="SplMinHeap">SplMinHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splpriorityqueue.php" title="SplPriorityQueue">SplPriorityQueue</a>
                        </li>
                                                <li class="">
                            <a href="class.splfixedarray.php" title="SplFixedArray">SplFixedArray</a>
                        </li>
                                                <li class="current">
                            <a href="class.arrayobject.php" title="ArrayObject">ArrayObject</a>
                        </li>
                                                <li class="">
                            <a href="class.splobjectstorage.php" title="SplObjectStorage">SplObjectStorage</a>
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
