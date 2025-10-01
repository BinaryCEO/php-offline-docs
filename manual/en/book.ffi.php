<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FFI - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ffi.php">
 <link rel="shorturl" href="https://www.php.net/ffi">
 <link rel="alternate" href="https://www.php.net/ffi" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.php.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.user-error.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ffi.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ffi.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ffi.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ffi.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ffi.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ffi.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ffi.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ffi.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ffi.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ffi.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ffi.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ffi.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Foreign Function Interface" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FFI - Manual" />
<meta name="twitter:description" content="Foreign Function Interface" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FFI - Manual" />
<meta itemprop="description" content="Foreign Function Interface" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Foreign Function Interface" />

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
        <a href="intro.ffi.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.user-error.php">
          &laquo; user_error        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      </ul>
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
            <option value='en/book.ffi.php' selected="selected">English</option>
            <option value='de/book.ffi.php'>German</option>
            <option value='es/book.ffi.php'>Spanish</option>
            <option value='fr/book.ffi.php'>French</option>
            <option value='it/book.ffi.php'>Italian</option>
            <option value='ja/book.ffi.php'>Japanese</option>
            <option value='pt_BR/book.ffi.php'>Brazilian Portuguese</option>
            <option value='ru/book.ffi.php'>Russian</option>
            <option value='tr/book.ffi.php'>Turkish</option>
            <option value='uk/book.ffi.php'>Ukrainian</option>
            <option value='zh/book.ffi.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ffi" class="book">
 
 <h1 class="title">Foreign Function Interface</h1>
 

 

 






 






 




 




 




 




 




<ul class="chunklist chunklist_book"><li><a href="intro.ffi.php">Introduction</a></li><li><a href="ffi.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ffi.requirements.php">Requirements</a></li><li><a href="ffi.installation.php">Installation</a></li><li><a href="ffi.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="ffi.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ffi.examples-basic.php">Basic FFI usage</a></li><li><a href="ffi.examples-callback.php">PHP Callbacks</a></li><li><a href="ffi.examples-complete.php">A Complete PHP/FFI/preloading Example</a></li></ul></li><li><a href="class.ffi.php">FFI</a> — Main interface to C code and data<ul class="chunklist chunklist_book chunklist_children"><li><a href="ffi.addr.php">FFI::addr</a> — Creates an unmanaged pointer to C data</li><li><a href="ffi.alignof.php">FFI::alignof</a> — Gets the alignment</li><li><a href="ffi.arraytype.php">FFI::arrayType</a> — Dynamically constructs a new C array type</li><li><a href="ffi.cast.php">FFI::cast</a> — Performs a C type cast</li><li><a href="ffi.cdef.php">FFI::cdef</a> — Creates a new FFI object</li><li><a href="ffi.free.php">FFI::free</a> — Releases an unmanaged data structure</li><li><a href="ffi.isnull.php">FFI::isNull</a> — Checks whether a FFI\CData is a null pointer</li><li><a href="ffi.load.php">FFI::load</a> — Loads C declarations from a C header file</li><li><a href="ffi.memcmp.php">FFI::memcmp</a> — Compares memory areas</li><li><a href="ffi.memcpy.php">FFI::memcpy</a> — Copies one memory area to another</li><li><a href="ffi.memset.php">FFI::memset</a> — Fills a memory area</li><li><a href="ffi.new.php">FFI::new</a> — Creates a C data structure</li><li><a href="ffi.scope.php">FFI::scope</a> — Instantiates an FFI object with C declarations parsed during preloading</li><li><a href="ffi.sizeof.php">FFI::sizeof</a> — Gets the size of C data or types</li><li><a href="ffi.string.php">FFI::string</a> — Creates a PHP string from a memory area</li><li><a href="ffi.type.php">FFI::type</a> — Creates an FFI\CType object from a C declaration</li><li><a href="ffi.typeof.php">FFI::typeof</a> — Gets the FFI\CType of FFI\CData</li></ul></li><li><a href="class.ffi-cdata.php">FFI\CData</a> — C Data Handles</li><li><a href="class.ffi-ctype.php">FFI\CType</a> — C Type Handles<ul class="chunklist chunklist_book chunklist_children"><li><a href="ffi-ctype.getalignment.php">FFI\CType::getAlignment</a> — Description</li><li><a href="ffi-ctype.getarrayelementtype.php">FFI\CType::getArrayElementType</a> — Description</li><li><a href="ffi-ctype.getarraylength.php">FFI\CType::getArrayLength</a> — Description</li><li><a href="ffi-ctype.getattributes.php">FFI\CType::getAttributes</a> — Description</li><li><a href="ffi-ctype.getenumkind.php">FFI\CType::getEnumKind</a> — Description</li><li><a href="ffi-ctype.getfuncabi.php">FFI\CType::getFuncABI</a> — Description</li><li><a href="ffi-ctype.getfuncparametercount.php">FFI\CType::getFuncParameterCount</a> — Retrieve the count of parameters of a function type</li><li><a href="ffi-ctype.getfuncparametertype.php">FFI\CType::getFuncParameterType</a> — Retrieve the type of a function parameter</li><li><a href="ffi-ctype.getfuncreturntype.php">FFI\CType::getFuncReturnType</a> — Description</li><li><a href="ffi-ctype.getkind.php">FFI\CType::getKind</a> — Description</li><li><a href="ffi-ctype.getname.php">FFI\CType::getName</a> — Description</li><li><a href="ffi-ctype.getpointertype.php">FFI\CType::getPointerType</a> — Description</li><li><a href="ffi-ctype.getsize.php">FFI\CType::getSize</a> — Description</li><li><a href="ffi-ctype.getstructfieldnames.php">FFI\CType::getStructFieldNames</a> — Description</li><li><a href="ffi-ctype.getstructfieldoffset.php">FFI\CType::getStructFieldOffset</a> — Description</li><li><a href="ffi-ctype.getstructfieldtype.php">FFI\CType::getStructFieldType</a> — Description</li></ul></li><li><a href="class.ffi-exception.php">FFI\Exception</a> — FFI Exceptions</li><li><a href="class.ffi-parserexception.php">FFI\ParserException</a> — FFI Parser Exceptions</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ffi/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ffi%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ffi&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ffi.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128554">  <div class="votes">
    <div id="Vu128554">
    <a href="/manual/vote-note.php?id=128554&amp;page=book.ffi&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128554">
    <a href="/manual/vote-note.php?id=128554&amp;page=book.ffi&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128554" title="54% like this...">
    1
    </div>
  </div>
  <a href="#128554" class="name">
  <strong class="user"><em>Nathaniel Sabanski</em></strong></a><a class="genanchor" href="#128554"> &para;</a><div class="date" title="2023-05-18 10:30"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128554">
<div class="phpcode"><code><span class="html">Quickstart from Rasmus Lerdorf's 25 years of PHP talk. <br /><br /><span class="default">&lt;?php<br />$ffi </span><span class="keyword">= </span><span class="default">FFI</span><span class="keyword">::</span><span class="default">cdef</span><span class="keyword">(<br />    </span><span class="string">"int printf(const char *format, ...);"</span><span class="keyword">,<br />    </span><span class="string">"libc.so.6"</span><span class="keyword">);<br /></span><span class="default">$ffi</span><span class="keyword">-&gt;</span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Hello %s!\n"</span><span class="keyword">, </span><span class="string">"world"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Requires ffi.enable=1</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.ffi&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ffi.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.php.php">Affecting PHP's Behaviour</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.apcu.php" title="APCu">APCu</a>
                        </li>
                                                <li class="">
                            <a href="book.componere.php" title="Componere">Componere</a>
                        </li>
                                                <li class="">
                            <a href="book.errorfunc.php" title="Error Handling">Error Handling</a>
                        </li>
                                                <li class="current">
                            <a href="book.ffi.php" title="FFI">FFI</a>
                        </li>
                                                <li class="">
                            <a href="book.opcache.php" title="OPcache">OPcache</a>
                        </li>
                                                <li class="">
                            <a href="book.outcontrol.php" title="Output Control">Output Control</a>
                        </li>
                                                <li class="">
                            <a href="book.info.php" title="PHP Options/Info">PHP Options/Info</a>
                        </li>
                                                <li class="">
                            <a href="book.phpdbg.php" title="phpdbg">phpdbg</a>
                        </li>
                                                <li class="">
                            <a href="book.runkit7.php" title="runkit7">runkit7</a>
                        </li>
                                                <li class="">
                            <a href="book.uopz.php" title="uopz">uopz</a>
                        </li>
                                                <li class="">
                            <a href="book.wincache.php" title="WinCache">WinCache</a>
                        </li>
                                                <li class="">
                            <a href="book.xhprof.php" title="Xhprof">Xhprof</a>
                        </li>
                                                <li class="">
                            <a href="book.yac.php" title="Yac">Yac</a>
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
