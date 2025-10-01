<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: streamWrapper - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.streamwrapper.php">
 <link rel="shorturl" href="https://www.php.net/streamwrapper">
 <link rel="alternate" href="https://www.php.net/streamwrapper" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/php-user-filter.oncreate.php">
 <link rel="next" href="https://www.php.net/manual/en/streamwrapper.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.streamwrapper.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.streamwrapper.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.streamwrapper.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.streamwrapper.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.streamwrapper.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.streamwrapper.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.streamwrapper.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.streamwrapper.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.streamwrapper.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.streamwrapper.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.streamwrapper.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The streamWrapper class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: streamWrapper - Manual" />
<meta name="twitter:description" content="The streamWrapper class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: streamWrapper - Manual" />
<meta itemprop="description" content="The streamWrapper class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The streamWrapper class" />

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
        <a href="streamwrapper.construct.php">
          streamWrapper::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="php-user-filter.oncreate.php">
          &laquo; php_user_filter::onCreate        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      </ul>
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
            <option value='en/class.streamwrapper.php' selected="selected">English</option>
            <option value='de/class.streamwrapper.php'>German</option>
            <option value='es/class.streamwrapper.php'>Spanish</option>
            <option value='fr/class.streamwrapper.php'>French</option>
            <option value='it/class.streamwrapper.php'>Italian</option>
            <option value='ja/class.streamwrapper.php'>Japanese</option>
            <option value='pt_BR/class.streamwrapper.php'>Brazilian Portuguese</option>
            <option value='ru/class.streamwrapper.php'>Russian</option>
            <option value='tr/class.streamwrapper.php'>Turkish</option>
            <option value='uk/class.streamwrapper.php'>Ukrainian</option>
            <option value='zh/class.streamwrapper.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.streamwrapper" class="reference">

 <h1 class="title">The streamWrapper class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 4 &gt;= 4.3.2, PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="streamwrapper.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Allows you to implement your own protocol handlers and streams for use
    with all the other filesystem functions (such as <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>,
    <span class="function"><a href="function.fread.php" class="function">fread()</a></span> etc.).
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     This is <em>NOT</em> a real class, only a prototype of how
     a class defining its own protocol should be. 
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Implementing the methods in other ways than described here can lead to
     undefined behaviour.
    </p>
   </p></blockquote>
   <p class="para">
    An instance of this class is initialized as soon as a stream function
    tries to access the protocol it is associated with.
   </p>
  </div>


  <div class="section" id="streamwrapper.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <span class="replaceable">streamWrapper</span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>
      <var class="varname"><a href="class.streamwrapper.php#streamwrapper.props.context">$<var class="varname">context</var></a></var>;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.construct.php" class="methodname">__construct</a></span>()</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.dir-closedir.php" class="methodname">dir_closedir</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.dir-opendir.php" class="methodname">dir_opendir</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.dir-readdir.php" class="methodname">dir_readdir</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.dir-rewinddir.php" class="methodname">dir_rewinddir</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.mkdir.php" class="methodname">mkdir</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.rename.php" class="methodname">rename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path_from</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path_to</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.rmdir.php" class="methodname">rmdir</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-cast.php" class="methodname">stream_cast</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$cast_as</code></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-close.php" class="methodname">stream_close</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-eof.php" class="methodname">stream_eof</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-flush.php" class="methodname">stream_flush</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-lock.php" class="methodname">stream_lock</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$operation</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-metadata.php" class="methodname">stream_metadata</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-open.php" class="methodname">stream_open</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter reference">&$opened_path</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-read.php" class="methodname">stream_read</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$count</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-seek.php" class="methodname">stream_seek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$whence</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-set-option.php" class="methodname">stream_set_option</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$arg1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$arg2</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-stat.php" class="methodname">stream_stat</a></span>(): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-tell.php" class="methodname">stream_tell</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-truncate.php" class="methodname">stream_truncate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$new_size</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.stream-write.php" class="methodname">stream_write</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.unlink.php" class="methodname">unlink</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.url-stat.php" class="methodname">url_stat</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="streamwrapper.destruct.php" class="methodname">__destruct</a></span>()</div>

   }</div>


  </div>

  

  <div class="section" id="streamwrapper.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="streamwrapper.props.context">resource <var class="varname">context</var></dt>
     <dd>
      <p class="para">
       The current <a href="context.php" class="link">context</a>, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if no
       context was passed to the caller function.
      </p>
      <p class="para">
       Use the <span class="function"><a href="function.stream-context-get-options.php" class="function">stream_context_get_options()</a></span> to parse the
       context.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        This property <em>must</em> be public so PHP can populate
        it with the actual context resource.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </div>


 <div class="section">
  <h2 class="title">See Also</h2>
  <p class="para">
   <ul class="simplelist">
    <li><a href="stream.streamwrapper.example-1.php" class="xref">Example class registered as stream wrapper</a></li>
    <li><span class="function"><a href="function.stream-wrapper-register.php" class="function">stream_wrapper_register()</a></span></li>
    <li><span class="function"><a href="function.stream-wrapper-unregister.php" class="function">stream_wrapper_unregister()</a></span></li>
    <li><span class="function"><a href="function.stream-wrapper-restore.php" class="function">stream_wrapper_restore()</a></span></li>
   </ul>
  </p>
 </div>

 </div>

 



















































































































































 



























<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="streamwrapper.construct.php">streamWrapper::__construct</a> — Constructs a new stream wrapper</li><li><a href="streamwrapper.destruct.php">streamWrapper::__destruct</a> — Destructs an existing stream wrapper</li><li><a href="streamwrapper.dir-closedir.php">streamWrapper::dir_closedir</a> — Close directory handle</li><li><a href="streamwrapper.dir-opendir.php">streamWrapper::dir_opendir</a> — Open directory handle</li><li><a href="streamwrapper.dir-readdir.php">streamWrapper::dir_readdir</a> — Read entry from directory handle</li><li><a href="streamwrapper.dir-rewinddir.php">streamWrapper::dir_rewinddir</a> — Rewind directory handle</li><li><a href="streamwrapper.mkdir.php">streamWrapper::mkdir</a> — Create a directory</li><li><a href="streamwrapper.rename.php">streamWrapper::rename</a> — Renames a file or directory</li><li><a href="streamwrapper.rmdir.php">streamWrapper::rmdir</a> — Removes a directory</li><li><a href="streamwrapper.stream-cast.php">streamWrapper::stream_cast</a> — Retrieve the underlaying resource</li><li><a href="streamwrapper.stream-close.php">streamWrapper::stream_close</a> — Close a resource</li><li><a href="streamwrapper.stream-eof.php">streamWrapper::stream_eof</a> — Tests for end-of-file on a file pointer</li><li><a href="streamwrapper.stream-flush.php">streamWrapper::stream_flush</a> — Flushes the output</li><li><a href="streamwrapper.stream-lock.php">streamWrapper::stream_lock</a> — Advisory file locking</li><li><a href="streamwrapper.stream-metadata.php">streamWrapper::stream_metadata</a> — Change stream metadata</li><li><a href="streamwrapper.stream-open.php">streamWrapper::stream_open</a> — Opens file or URL</li><li><a href="streamwrapper.stream-read.php">streamWrapper::stream_read</a> — Read from stream</li><li><a href="streamwrapper.stream-seek.php">streamWrapper::stream_seek</a> — Seeks to specific location in a stream</li><li><a href="streamwrapper.stream-set-option.php">streamWrapper::stream_set_option</a> — Change stream options</li><li><a href="streamwrapper.stream-stat.php">streamWrapper::stream_stat</a> — Retrieve information about a file resource</li><li><a href="streamwrapper.stream-tell.php">streamWrapper::stream_tell</a> — Retrieve the current position of a stream</li><li><a href="streamwrapper.stream-truncate.php">streamWrapper::stream_truncate</a> — Truncate stream</li><li><a href="streamwrapper.stream-write.php">streamWrapper::stream_write</a> — Write to stream</li><li><a href="streamwrapper.unlink.php">streamWrapper::unlink</a> — Delete a file</li><li><a href="streamwrapper.url-stat.php">streamWrapper::url_stat</a> — Retrieve information about a file</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/streamwrapper.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.streamwrapper%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.streamwrapper&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.streamwrapper.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100549">  <div class="votes">
    <div id="Vu100549">
    <a href="/manual/vote-note.php?id=100549&amp;page=class.streamwrapper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100549">
    <a href="/manual/vote-note.php?id=100549&amp;page=class.streamwrapper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100549" title="85% like this...">
    14
    </div>
  </div>
  <a href="#100549" class="name">
  <strong class="user"><em>isaac dot z dot no dot foster at spam dot gmail dot please dot com</em></strong></a><a class="genanchor" href="#100549"> &para;</a><div class="date" title="2010-10-22 09:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100549">
<div class="phpcode"><code><span class="html">It's worth noting that the interface defined by yannick at gmail should not always be implemented by a stream wrapper class, as several of the methods should not be implemented if the class has no use for them (as per the manual). <br /><br />Specifically, mkdir, rename, rmdir, and unlink are methods that "should not be defined" if the wrapper has no use for them. The consequence is that the appropriate error message will not be returned. <br /><br />If the interface is implemented, you won't have the flexibility to not implement those methods.<br /><br />Not trying to be academic, but it was useful for me.</span></code></div>
  </div>
 </div>
  <div class="note" id="125226">  <div class="votes">
    <div id="Vu125226">
    <a href="/manual/vote-note.php?id=125226&amp;page=class.streamwrapper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125226">
    <a href="/manual/vote-note.php?id=125226&amp;page=class.streamwrapper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125226" title="66% like this...">
    1
    </div>
  </div>
  <a href="#125226" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#125226"> &para;</a><div class="date" title="2020-07-29 11:09"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125226">
<div class="phpcode"><code><span class="html">THIS METHODS NOT REQUIRED, you can implement only part of their: directories, files, etc. <br />For example, "glob://" support minimal syntax, glob() more powerful, you can replace/extend native wrapper: check options in table <a href="https://www.php.net/manual/ru/wrappers.glob" rel="nofollow" target="_blank">https://www.php.net/manual/ru/wrappers.glob</a> , you need create wrapper only with 'dir_...dir' methods. For more info, see <a href="https://www.php.net/manual/en/class.globiterator.php#125220" rel="nofollow" target="_blank">https://www.php.net/manual/en/class.globiterator.php#125220</a></span></code></div>
  </div>
 </div>
  <div class="note" id="105872">  <div class="votes">
    <div id="Vu105872">
    <a href="/manual/vote-note.php?id=105872&amp;page=class.streamwrapper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105872">
    <a href="/manual/vote-note.php?id=105872&amp;page=class.streamwrapper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105872" title="60% like this...">
    2
    </div>
  </div>
  <a href="#105872" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#105872"> &para;</a><div class="date" title="2011-09-21 12:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105872">
<div class="phpcode"><code><span class="html">Here is a very simple stream wrapper which calls your callback function for reads:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">CallbackUrl
<br /></span><span class="keyword">{
<br />    const </span><span class="default">WRAPPER_NAME </span><span class="keyword">= </span><span class="string">'callback'</span><span class="keyword">;
<br />
<br />    public </span><span class="default">$context</span><span class="keyword">;
<br />    private </span><span class="default">$_cb</span><span class="keyword">;
<br />    private </span><span class="default">$_eof </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />
<br />    private static </span><span class="default">$_isRegistered </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />
<br />    public static function </span><span class="default">getContext</span><span class="keyword">(</span><span class="default">$cb</span><span class="keyword">)
<br />    {
<br />        if (!</span><span class="default">self</span><span class="keyword">::</span><span class="default">$_isRegistered</span><span class="keyword">) {
<br />            </span><span class="default">stream_wrapper_register</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">());
<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$_isRegistered </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />        }
<br />        if (!</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$cb</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;
<br />        return </span><span class="default">stream_context_create</span><span class="keyword">(array(</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME </span><span class="keyword">=&gt; array(</span><span class="string">'cb' </span><span class="keyword">=&gt; </span><span class="default">$cb</span><span class="keyword">)));
<br />    }
<br />
<br />    public function </span><span class="default">stream_open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">, &amp;</span><span class="default">$opened_path</span><span class="keyword">)
<br />    {
<br />        if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^r[bt]?$/'</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">) || !</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">context</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;
<br />        </span><span class="default">$opt </span><span class="keyword">= </span><span class="default">stream_context_get_options</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">context</span><span class="keyword">);
<br />        if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">]) ||
<br />            !isset(</span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">][</span><span class="string">'cb'</span><span class="keyword">]) ||
<br />            !</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">][</span><span class="string">'cb'</span><span class="keyword">])) return </span><span class="default">false</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_cb </span><span class="keyword">= </span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">][</span><span class="string">'cb'</span><span class="keyword">];
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">stream_read</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">)
<br />    {
<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_eof </span><span class="keyword">|| !</span><span class="default">$count</span><span class="keyword">) return </span><span class="string">''</span><span class="keyword">;
<br />        if ((</span><span class="default">$s </span><span class="keyword">= </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_cb</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">)) == </span><span class="string">''</span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_eof </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />        return </span><span class="default">$s</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">stream_eof</span><span class="keyword">()
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_eof</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />class </span><span class="default">Test </span><span class="keyword">{
<br />    private </span><span class="default">$_s</span><span class="keyword">;
<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_s </span><span class="keyword">= </span><span class="default">$s</span><span class="keyword">;
<br />    }
<br />    public function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">) {
<br />        return </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_s</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">);
<br />    }
<br />}
<br />
<br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">(</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/etc/services'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">));
<br /></span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'callback://'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">CallbackUrl</span><span class="keyword">::</span><span class="default">getContext</span><span class="keyword">(array(</span><span class="default">$t</span><span class="keyword">, </span><span class="string">'read'</span><span class="keyword">)));
<br />while((</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">)) != </span><span class="string">''</span><span class="keyword">) {
<br />    print </span><span class="default">$buf</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92277">  <div class="votes">
    <div id="Vu92277">
    <a href="/manual/vote-note.php?id=92277&amp;page=class.streamwrapper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92277">
    <a href="/manual/vote-note.php?id=92277&amp;page=class.streamwrapper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92277" title="55% like this...">
    2
    </div>
  </div>
  <a href="#92277" class="name">
  <strong class="user"><em>yannick dot battail at gmail dot com</em></strong></a><a class="genanchor" href="#92277"> &para;</a><div class="date" title="2009-07-17 02:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92277">
<div class="phpcode"><code><span class="html">a php interface for wrapper
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">interface </span><span class="default">WrapperInterface
<br /></span><span class="keyword">{
<br />    </span><span class="comment">/**
<br />     * resource context
<br />     *
<br />     * @var resource
<br />     */
<br />    //public $context;
<br />
<br />    /**
<br />     * constructor
<br />     *
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     *
<br />     *
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">dir_closedir</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $path
<br />     * @param int $options
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">dir_opendir</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @return string
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">dir_readdir</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">dir_rewinddir</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $path
<br />     * @param int $mode
<br />     * @param int $options
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">, </span><span class="default">$mode </span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $path_from
<br />     * @param string $path_to
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">rename</span><span class="keyword">(</span><span class="default">$path_from </span><span class="keyword">, </span><span class="default">$path_to</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $path
<br />     * @param int $options
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param int $cast_as
<br />     * @return resource
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_cast</span><span class="keyword">(</span><span class="default">$cast_as</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_close</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_eof</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_flush</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param mode $operation
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_lock</span><span class="keyword">(</span><span class="default">$operation</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $path
<br />     * @param string $mode
<br />     * @param int $options
<br />     * @param string &amp;$opened_path
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_open</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">, </span><span class="default">$mode </span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">, &amp;</span><span class="default">$opened_path</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param int $count
<br />     * @return string
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_read</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param int $offset
<br />     * @param int $whence = SEEK_SET
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_seek</span><span class="keyword">(</span><span class="default">$offset </span><span class="keyword">, </span><span class="default">$whence </span><span class="keyword">= </span><span class="default">SEEK_SET</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param int $option
<br />     * @param int $arg1
<br />     * @param int $arg2
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_set_option</span><span class="keyword">(</span><span class="default">$option </span><span class="keyword">, </span><span class="default">$arg1 </span><span class="keyword">, </span><span class="default">$arg2</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @return array
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_stat</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @return int
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_tell</span><span class="keyword">();
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $data
<br />     * @return int
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">stream_write</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $path
<br />     * @return bool
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);
<br />
<br />    </span><span class="comment">/**
<br />     * Enter description here...
<br />     *
<br />     * @param string $path
<br />     * @param int $flags
<br />     * @return array
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">url_stat</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.streamwrapper&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.streamwrapper.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.stream.php">Streams</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.stream.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="stream.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="stream.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="stream.filters.php" title="Stream Filters">Stream Filters</a>
                        </li>
                                                <li class="">
                            <a href="stream.contexts.php" title="Stream Contexts">Stream Contexts</a>
                        </li>
                                                <li class="">
                            <a href="stream.errors.php" title="Stream Errors">Stream Errors</a>
                        </li>
                                                <li class="">
                            <a href="stream.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.php-user-filter.php" title="php_&#8203;user_&#8203;filter">php_&#8203;user_&#8203;filter</a>
                        </li>
                                                <li class="current">
                            <a href="class.streamwrapper.php" title="streamWrapper">streamWrapper</a>
                        </li>
                                                <li class="">
                            <a href="ref.stream.php" title="Stream Functions">Stream Functions</a>
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
