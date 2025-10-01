<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Autoloading Classes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.autoload.php">
 <link rel="shorturl" href="https://www.php.net/oop5.autoload">
 <link rel="alternate" href="https://www.php.net/oop5.autoload" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.decon.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.autoload.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.autoload.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.autoload.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.autoload.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.autoload.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.autoload.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.autoload.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.autoload.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.autoload.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.autoload.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.autoload.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Autoloading Classes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Autoloading Classes - Manual" />
<meta name="twitter:description" content="Autoloading Classes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Autoloading Classes - Manual" />
<meta itemprop="description" content="Autoloading Classes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Autoloading Classes" />

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
        <a href="language.oop5.decon.php">
          Constructors and Destructors &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.constants.php">
          &laquo; Class Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.autoload.php' selected="selected">English</option>
            <option value='de/language.oop5.autoload.php'>German</option>
            <option value='es/language.oop5.autoload.php'>Spanish</option>
            <option value='fr/language.oop5.autoload.php'>French</option>
            <option value='it/language.oop5.autoload.php'>Italian</option>
            <option value='ja/language.oop5.autoload.php'>Japanese</option>
            <option value='pt_BR/language.oop5.autoload.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.autoload.php'>Russian</option>
            <option value='tr/language.oop5.autoload.php'>Turkish</option>
            <option value='uk/language.oop5.autoload.php'>Ukrainian</option>
            <option value='zh/language.oop5.autoload.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.autoload" class="sect1">
  <h2 class="title">Autoloading Classes</h2>
  <p class="para">
   Many developers writing object-oriented applications create
   one PHP source file per class definition. One of the biggest
   annoyances is having to write a long list of needed includes
   at the beginning of each script (one for each class).
  </p>
  <p class="para">
   The <span class="function"><a href="function.spl-autoload-register.php" class="function">spl_autoload_register()</a></span> function registers any number of
   autoloaders, enabling for classes and interfaces to be automatically loaded
   if they are currently not defined. By registering autoloaders, PHP is given
   a last chance to load the class or interface before it fails with an error.
  </p>
  <p class="para">
   Any class-like construct may be autoloaded the same way. That includes classes,
   interfaces, traits, and enumerations.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    Prior to PHP 8.0.0, it was possible to use <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span>
    to autoload classes and interfaces. However, it is a less flexible
    alternative to <span class="function"><a href="function.spl-autoload-register.php" class="function">spl_autoload_register()</a></span> and
    <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span> is deprecated as of PHP 7.2.0, and removed
    as of PHP 8.0.0.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><a href="function.spl-autoload-register.php" class="function">spl_autoload_register()</a></span> may be called multiple times in order
    to register multiple autoloaders. Throwing an exception from an autoload function,
    however, will interrupt that process and not allow further autoload functions to
    run. For that reason, throwing exceptions from an autoload function is strongly
    discouraged.
   </p>
  </p></blockquote>
  <p class="para">
   <div class="example" id="example-293">
    <p><strong>Example #1 Autoload example</strong></p>
    <div class="example-contents"><p>
     This example attempts to load the classes <code class="literal">MyClass1</code>
     and <code class="literal">MyClass2</code> from the files <var class="filename">MyClass1.php</var>
     and <var class="filename">MyClass2.php</var> respectively.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />spl_autoload_register</span><span style="color: #007700">(function (</span><span style="color: #0000BB">$class_name</span><span style="color: #007700">) {<br />    include </span><span style="color: #0000BB">$class_name </span><span style="color: #007700">. </span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">$obj  </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass1</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$obj2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">(); <br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-294">
    <p><strong>Example #2 Autoload other example</strong></p>
    <div class="example-contents"><p>
     This example attempts to load the interface <code class="literal">ITest</code>.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />spl_autoload_register</span><span style="color: #007700">(function (</span><span style="color: #0000BB">$name</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />});<br /><br />class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">implements </span><span style="color: #0000BB">ITest </span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #FF8000">/*<br />string(5) "ITest"<br /><br />Fatal error: Interface 'ITest' not found in ...<br />*/<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-295">
    <p><strong>Example #3 Using Composer&#039;s autoloader</strong></p>
    <div class="example-contents"><p>
     <a href="https://getcomposer.org/" class="link external">&raquo;&nbsp;Composer</a> generates a <code class="literal">vendor/autoload.php</code>
     which is set up to automatically load packages that are being managed
     by Composer. By including this file, those packages can be used without
     any additional work.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">require </span><span style="color: #0000BB">__DIR__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'/vendor/autoload.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$uuid </span><span style="color: #007700">= </span><span style="color: #0000BB">Ramsey\Uuid\Uuid</span><span style="color: #007700">::</span><span style="color: #0000BB">uuid7</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"Generated new UUID -&gt; "</span><span style="color: #007700">, </span><span style="color: #0000BB">$uuid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toString</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <div class="simplesect">
   <h3 class="title">See Also</h3>
   <p class="para">
    <ul class="simplelist">
     <li><span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span></li>
     <li><a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a></li>
     <li><a href="var.configuration.php#ini.unserialize-max-depth" class="link">unserialize_max_depth</a></li>
     <li><span class="function"><a href="function.spl-autoload-register.php" class="function">spl_autoload_register()</a></span></li>
     <li><span class="function"><a href="function.spl-autoload.php" class="function">spl_autoload()</a></span></li>
     <li><span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/autoload.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.autoload%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.autoload&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.autoload.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89448">  <div class="votes">
    <div id="Vu89448">
    <a href="/manual/vote-note.php?id=89448&amp;page=language.oop5.autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89448">
    <a href="/manual/vote-note.php?id=89448&amp;page=language.oop5.autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89448" title="68% like this...">
    106
    </div>
  </div>
  <a href="#89448" class="name">
  <strong class="user"><em>jarret dot minkler at gmail dot com</em></strong></a><a class="genanchor" href="#89448"> &para;</a><div class="date" title="2009-03-07 10:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89448">
<div class="phpcode"><code><span class="html">You should not have to use require_once inside the autoloader, as if the class is not found it wouldn't be trying to look for it by using the autoloader. <br /><br />Just use require(), which will be better on performance as well as it does not have to check if it is unique.</span></code></div>
  </div>
 </div>
  <div class="note" id="120258">  <div class="votes">
    <div id="Vu120258">
    <a href="/manual/vote-note.php?id=120258&amp;page=language.oop5.autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120258">
    <a href="/manual/vote-note.php?id=120258&amp;page=language.oop5.autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120258" title="67% like this...">
    62
    </div>
  </div>
  <a href="#120258" class="name">
  <strong class="user"><em>str at maphpia dot com</em></strong></a><a class="genanchor" href="#120258"> &para;</a><div class="date" title="2016-12-01 07:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120258">
<div class="phpcode"><code><span class="html">This is my autoloader for my PSR-4 clases. I prefer to use composer's autoloader, but this works for legacy projects that can't use composer.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Simple autoloader, so we don't need Composer just for this.<br /> */<br /></span><span class="keyword">class </span><span class="default">Autoloader<br /></span><span class="keyword">{<br />    public static function </span><span class="default">register</span><span class="keyword">()<br />    {<br />        </span><span class="default">spl_autoload_register</span><span class="keyword">(function (</span><span class="default">$class</span><span class="keyword">) {<br />            </span><span class="default">$file </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$class</span><span class="keyword">).</span><span class="string">'.php'</span><span class="keyword">;<br />            if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {<br />                require </span><span class="default">$file</span><span class="keyword">;<br />                return </span><span class="default">true</span><span class="keyword">;<br />            }<br />            return </span><span class="default">false</span><span class="keyword">;<br />        });<br />    }<br />}<br /></span><span class="default">Autoloader</span><span class="keyword">::</span><span class="default">register</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124770">  <div class="votes">
    <div id="Vu124770">
    <a href="/manual/vote-note.php?id=124770&amp;page=language.oop5.autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124770">
    <a href="/manual/vote-note.php?id=124770&amp;page=language.oop5.autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124770" title="73% like this...">
    31
    </div>
  </div>
  <a href="#124770" class="name">
  <strong class="user"><em>toi]n[enkayt[attaat]gmaal.com</em></strong></a><a class="genanchor" href="#124770"> &para;</a><div class="date" title="2020-02-27 03:36"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124770">
<div class="phpcode"><code><span class="html">Autoloading plain functions is not supported by PHP at the time of writing. There is however a simple way to trick the autoloader to do this. The only thing that is needed is that the autoloader finds the searched class (or any other autoloadable piece of code) from the files it goes through and the whole file will be included to the runtime.<br /><br />Let's say you have a namespaced file for functions you wish to autoload. Simply adding a class of the same name to that file with a single constant property is enough to trigger the autoloader to seek for the file. Autoloading can then be triggered by accessing the constant property.<br /><br />The constant could be replaced by any static property or method or by default constructor. However, I personally find a constant named 'load' elegant and informative. After all this is a workaround. Another thing to keep in mind is that this introduces an unnecessary class to the runtime. The benefit of this is that there is no need to manually include or require files containing functions by path which in turn makes code maintaining easier. Such behaviour makes it easier to alter the project structure since manual includes need not to be fixed. Only the autoloader needs to be able to locate the moved files which can be automated.<br /><br />A code file containing functions.<br />/Some/Namespace/Functions.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Some\Namespace</span><span class="keyword">;<br /><br />class </span><span class="default">Functions </span><span class="keyword">{ const </span><span class="default">load </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; }<br /><br />function </span><span class="default">a </span><span class="keyword">() {<br />}<br /><br />function </span><span class="default">b </span><span class="keyword">() {<br />}<br /></span><span class="default">?&gt;<br /></span><br />Triggering autoloading of the file containing functions.<br />main.php<br /><span class="default">&lt;?php<br />\Some\Namespace\Functions</span><span class="keyword">::</span><span class="default">load</span><span class="keyword">;<br /><br /></span><span class="default">a </span><span class="keyword">();<br /></span><span class="default">b </span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96099">  <div class="votes">
    <div id="Vu96099">
    <a href="/manual/vote-note.php?id=96099&amp;page=language.oop5.autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96099">
    <a href="/manual/vote-note.php?id=96099&amp;page=language.oop5.autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96099" title="66% like this...">
    21
    </div>
  </div>
  <a href="#96099" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#96099"> &para;</a><div class="date" title="2010-02-08 03:35"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96099">
<div class="phpcode"><code><span class="html">It's worth to mention, if your operating system is case-sensitive you need to name your file with same case as in source code eg. MyClass.php instead of myclass.php</span></code></div>
  </div>
 </div>
  <div class="note" id="86195">  <div class="votes">
    <div id="Vu86195">
    <a href="/manual/vote-note.php?id=86195&amp;page=language.oop5.autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86195">
    <a href="/manual/vote-note.php?id=86195&amp;page=language.oop5.autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86195" title="53% like this...">
    3
    </div>
  </div>
  <a href="#86195" class="name">
  <strong class="user"><em>kalkamar at web dot de</em></strong></a><a class="genanchor" href="#86195"> &para;</a><div class="date" title="2008-10-07 10:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86195">
<div class="phpcode"><code><span class="html">Because static classes have no constructor I use this to initialize such classes.
<br />The function init will (if available) be called when you first use the class.
<br />The class must not be included before, otherwise the init-function wont be called as autoloading is not used.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">__autoload</span><span class="keyword">(</span><span class="default">$class_name</span><span class="keyword">)
<br />{
<br />    require_once(</span><span class="default">CLASSES_PATH</span><span class="keyword">.</span><span class="default">$class_name</span><span class="keyword">.</span><span class="string">'.cls.php'</span><span class="keyword">);
<br />    if(</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$class_name</span><span class="keyword">,</span><span class="string">'init'</span><span class="keyword">))
<br />        </span><span class="default">call_user_func</span><span class="keyword">(array(</span><span class="default">$class_name</span><span class="keyword">,</span><span class="string">'init'</span><span class="keyword">));
<br />    return </span><span class="default">true</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />I use it for example to establish the mysql-connection on demand.
<br />
<br />It is also possilbe do add a destructor by adding this lines to the function:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$class_name</span><span class="keyword">,</span><span class="string">'destruct'</span><span class="keyword">))
<br />    </span><span class="default">register_shutdown_function</span><span class="keyword">(array(</span><span class="default">$class_name</span><span class="keyword">,</span><span class="string">'destruct'</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.autoload&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.autoload.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
