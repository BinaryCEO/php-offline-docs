<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: com_load_typelib - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.com-load-typelib.php">
 <link rel="shorturl" href="https://www.php.net/com-load-typelib">
 <link rel="alternate" href="https://www.php.net/com-load-typelib" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.com.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.com-get-active-object.php">
 <link rel="next" href="https://www.php.net/manual/en/function.com-message-pump.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.com-load-typelib.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.com-load-typelib.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.com-load-typelib.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.com-load-typelib.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.com-load-typelib.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.com-load-typelib.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.com-load-typelib.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.com-load-typelib.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.com-load-typelib.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.com-load-typelib.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.com-load-typelib.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Loads a Typelib" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: com_load_typelib - Manual" />
<meta name="twitter:description" content="Loads a Typelib" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: com_load_typelib - Manual" />
<meta itemprop="description" content="Loads a Typelib" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Loads a Typelib" />

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
        <a href="function.com-message-pump.php">
          com_message_pump &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.com-get-active-object.php">
          &laquo; com_get_active_object        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.windows.php'>Windows Only Extensions</a></li>      <li><a href='book.com.php'>COM</a></li>      <li><a href='ref.com.php'>COM Functions</a></li>      </ul>
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
            <option value='en/function.com-load-typelib.php' selected="selected">English</option>
            <option value='de/function.com-load-typelib.php'>German</option>
            <option value='es/function.com-load-typelib.php'>Spanish</option>
            <option value='fr/function.com-load-typelib.php'>French</option>
            <option value='it/function.com-load-typelib.php'>Italian</option>
            <option value='ja/function.com-load-typelib.php'>Japanese</option>
            <option value='pt_BR/function.com-load-typelib.php'>Brazilian Portuguese</option>
            <option value='ru/function.com-load-typelib.php'>Russian</option>
            <option value='tr/function.com-load-typelib.php'>Turkish</option>
            <option value='uk/function.com-load-typelib.php'>Ukrainian</option>
            <option value='zh/function.com-load-typelib.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.com-load-typelib" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">com_load_typelib</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">com_load_typelib</span> &mdash; <span class="dc-title">Loads a Typelib</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.com-load-typelib-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>com_load_typelib</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$typelib</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$case_insensitive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Loads a type-library and registers its constants in the engine, as though
   they were defined using <span class="function"><a href="function.define.php" class="function">define()</a></span>.
  </p>
  <p class="para">
   Note that it is much more efficient to use the <a href="com.configuration.php#ini.com.typelib-file" class="link">com.typelib-file</a> <var class="filename">php.ini</var> setting to pre-load and
   register the constants, although not so flexible.
  </p>
  <p class="para">
   If <a href="com.configuration.php#ini.com.autoregister-typelib" class="link">com.autoregister-typelib</a> is turned on, then
   PHP will attempt to automatically register the constants associated with a
   COM object when you instantiate it.  This depends on the interfaces
   provided by the COM object itself, and may not always be possible.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.com-load-typelib-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">typelib</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">typelib</code> can be one of the following:
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          The filename of a <code class="literal">.tlb</code> file or the executable module
          that contains the type library.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          The type library GUID, followed by its version number, for example
          <code class="literal">{00000200-0000-0010-8000-00AA006D2EA4},2,0</code>.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          The type library name, e.g. <code class="literal">Microsoft OLE DB ActiveX Data
          Objects 1.0 Library</code>.
         </p>
        </li>
       </ul>
       PHP will attempt to resolve the type library in this order, as the
       process gets more and more expensive as you progress down the list;
       searching for the type library by name is handled by physically
       enumerating the registry until we find a match.
      </p>
     </dd>
    
    
     <dt><code class="parameter">case_insensitive</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">case_insensitive</code> behaves inversely to
       the parameter <code class="literal">$case_insensitive</code> in the <span class="function"><a href="function.define.php" class="function">define()</a></span>
       function.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.com-load-typelib-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/com/functions/com-load-typelib.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.com-load-typelib%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.com-load-typelib&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.com-load-typelib.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107880">  <div class="votes">
    <div id="Vu107880">
    <a href="/manual/vote-note.php?id=107880&amp;page=function.com-load-typelib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107880">
    <a href="/manual/vote-note.php?id=107880&amp;page=function.com-load-typelib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107880" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107880" class="name">
  <strong class="user"><em>tomas dot burba at softneta dot lt</em></strong></a><a class="genanchor" href="#107880"> &para;</a><div class="date" title="2012-03-12 11:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107880">
<div class="phpcode"><code><span class="html">I had some problems with a third-party Word-controlling code that is somewhat similar to Richard's example. (Word 2007 SP1, XP SP2.) Rewrote some parts according to that example, no luck. Error messages from Word were crazy:<br /><br />"Bad parameter" -- it didn't like wdGoToBookmark but was ok with its numeric equivalent -1;<br /><br />"Call to undefined method variant::SaveAs()" -- the same with Save() that was suitable in my case, so no options were remaining.<br /><br />But then I ran the example via php.exe in the command line, and it worked! Eventually it turned out that Apache service must be run as some real user instead of SYSTEM.</span></code></div>
  </div>
 </div>
  <div class="note" id="83895">  <div class="votes">
    <div id="Vu83895">
    <a href="/manual/vote-note.php?id=83895&amp;page=function.com-load-typelib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83895">
    <a href="/manual/vote-note.php?id=83895&amp;page=function.com-load-typelib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83895" title="no votes...">
    0
    </div>
  </div>
  <a href="#83895" class="name">
  <strong class="user"><em>RQuadling at GMail dot com</em></strong></a><a class="genanchor" href="#83895"> &para;</a><div class="date" title="2008-06-17 03:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83895">
<div class="phpcode"><code><span class="html">Some libraries load other libraries as part of their functionality. For example Crystal Reports Object Factory uses the CreateObject() method to create an instance of a Crystal Design RunTime Application. If you want to use constants defined in the newly loaded library, you will need to manually register the library - even with com.autoregister_typelib set to true.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="string">'com.autoregister_typelib = '</span><span class="keyword">, </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'com.autoregister_typelib'</span><span class="keyword">), </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />
<br /></span><span class="default">$o_CrObjectFactory </span><span class="keyword">= New </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'CrystalReports11.ObjectFactory.1'</span><span class="keyword">);
<br />
<br /></span><span class="default">$o_CrApplication </span><span class="keyword">= </span><span class="default">$o_CrObjectFactory</span><span class="keyword">-&gt;</span><span class="default">CreateObject</span><span class="keyword">(</span><span class="string">"CrystalDesignRunTime.Application"</span><span class="keyword">);
<br />
<br />echo </span><span class="string">'Will not be defined : '</span><span class="keyword">, </span><span class="default">crOpenReportByDefault</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />
<br /></span><span class="default">com_load_typelib</span><span class="keyword">(</span><span class="string">'CrystalDesignRunTime.Application'</span><span class="keyword">);
<br />
<br />echo </span><span class="string">'Will now be defined : '</span><span class="keyword">, </span><span class="default">crOpenReportByDefault</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />outputs ...
<br />
<br />com.autoregister_typelib = 1
<br />Will not be defined :
<br />Notice: Use of undefined constant crOpenReportByDefault - assumed 'crOpenReportByDefault' in C:\refl.php on line 8
<br />crOpenReportByDefault
<br />Will now be defined : 0</span></code></div>
  </div>
 </div>
  <div class="note" id="42115">  <div class="votes">
    <div id="Vu42115">
    <a href="/manual/vote-note.php?id=42115&amp;page=function.com-load-typelib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42115">
    <a href="/manual/vote-note.php?id=42115&amp;page=function.com-load-typelib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42115" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42115" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#42115"> &para;</a><div class="date" title="2004-05-03 07:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42115">
<div class="phpcode"><code><span class="html">In case any of you were wondering what com_load_typelib actually DOES, I have found that it loads constants\enums that the COM obeject has defined.  The example below is using the Nero COM object (from Nero Burning rom, version 6+).  The Nero object defines a bunch of constants, but they can not be used as PHP constants unless you use the mentioned function.  So the example below will work just fine:<br /><br /><span class="default">&lt;?php<br />$aNero </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Nero.Nero"</span><span class="keyword">) or die (</span><span class="string">"Nero didn't load, too bad"</span><span class="keyword">);<br /></span><span class="default">com_load_typelib</span><span class="keyword">(</span><span class="string">"Nero.Nero"</span><span class="keyword">);<br /></span><span class="default">$aNero</span><span class="keyword">-&gt;</span><span class="default">GetDrives</span><span class="keyword">(</span><span class="default">NERO_MEDIA_CD</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />But this one will not, since PHP will return a message saying that the constant is undefined:<br /><br /><span class="default">&lt;?php<br />$aNero </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Nero.Nero"</span><span class="keyword">) or die (</span><span class="string">"Nero didn't load, too bad"</span><span class="keyword">);<br /></span><span class="default">$aNero</span><span class="keyword">-&gt;</span><span class="default">GetDrives</span><span class="keyword">(</span><span class="default">NERO_MEDIA_CD</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This one took me a while to figure out, hope it helps.  <br /><br />Also, check out <a href="http://www.php.net/manual/en/faq.com.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/faq.com.php</a> to find out how to get COM events working in PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="39510">  <div class="votes">
    <div id="Vu39510">
    <a href="/manual/vote-note.php?id=39510&amp;page=function.com-load-typelib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39510">
    <a href="/manual/vote-note.php?id=39510&amp;page=function.com-load-typelib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39510" title="50% like this...">
    0
    </div>
  </div>
  <a href="#39510" class="name">
  <strong class="user"><em>ojpp at webdevfm dot com</em></strong></a><a class="genanchor" href="#39510"> &para;</a><div class="date" title="2004-01-30 06:33"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39510">
<div class="phpcode"><code><span class="html">Hello PHP community, I want to help in a problem I found in this COM built-in function: com_load_typelib(), when I executed it in order to open a COM Server process (for example: Word, Excel, etc.) I was in trouble to release the object from memory, I figured it out, this is the solution:<br /><br />Change a configuration in the php.ini:<br /><br />; autoregister constants of a components typlib on com_load()<br />com.autoregister_typelib = true<br /><br />When com.autoregister_typelib directive is true, PHP parser manage the COM server type library, I hope it helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="29832">  <div class="votes">
    <div id="Vu29832">
    <a href="/manual/vote-note.php?id=29832&amp;page=function.com-load-typelib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29832">
    <a href="/manual/vote-note.php?id=29832&amp;page=function.com-load-typelib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29832" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#29832" class="name">
  <strong class="user"><em>richard dot quadling at carval dot co dot uk</em></strong></a><a class="genanchor" href="#29832"> &para;</a><div class="date" title="2003-02-26 05:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29832">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// Some servers may have an auto timeout, so take as long as you want.<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">// Show all errors, warnings and notices whilst developing.<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br /></span><span class="comment">// Used as a placeholder in certain COM functions where no parameter is required.<br /></span><span class="default">$empty </span><span class="keyword">= new </span><span class="default">VARIANT</span><span class="keyword">();<br /><br /></span><span class="comment">// Load the appropriate type library.<br /></span><span class="default">com_load_typelib</span><span class="keyword">(</span><span class="string">'Word.Application'</span><span class="keyword">);<br /><br /></span><span class="comment">// Create an object to use.<br /></span><span class="default">$word </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'word.application'</span><span class="keyword">) or die(</span><span class="string">'Unable to load Word'</span><span class="keyword">);<br />print </span><span class="string">"Loaded Word, version </span><span class="keyword">{</span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Version</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Open a new document with bookmarks of YourName and YourAge.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">-&gt;</span><span class="default">Open</span><span class="keyword">(</span><span class="string">'C:/Unfilled.DOC'</span><span class="keyword">);<br /><br /></span><span class="comment">// Fill in the information from the form.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">GoTo</span><span class="keyword">(</span><span class="default">wdGoToBookmark</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="string">'YourName'</span><span class="keyword">); </span><span class="comment">// Note use of wdGoToBookmark, from the typelibrary and the use of $empty.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">TypeText</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'YourName'</span><span class="keyword">]);<br /><br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">GoTo</span><span class="keyword">(</span><span class="default">wdGoToBookmark</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="string">'YourAge'</span><span class="keyword">);<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">TypeText</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'YourAge'</span><span class="keyword">]);<br /><br /></span><span class="comment">// Save it, close word and finish.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">SaveAs</span><span class="keyword">(</span><span class="string">"C:/</span><span class="keyword">{</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'YourName'</span><span class="keyword">]}</span><span class="string">.doc"</span><span class="keyword">);<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">();<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Release</span><span class="keyword">();<br /></span><span class="default">$word </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />print </span><span class="string">"Word closed.\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />The example document is ...<br /><br />Hello [Bookmark of YourName], you are [Bookmark of YourAge] years old.<br /><br />and it would be called ...<br /><br />word.php?YourName=Richard%20Quadling&amp;YourAge=35<br /><br />Regards,<br /><br />Richard.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.com-load-typelib&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.com-load-typelib.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.com.php">COM Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.com-create-guid.php" title="com_&#8203;create_&#8203;guid">com_&#8203;create_&#8203;guid</a>
                        </li>
                                                <li class="">
                            <a href="function.com-event-sink.php" title="com_&#8203;event_&#8203;sink">com_&#8203;event_&#8203;sink</a>
                        </li>
                                                <li class="">
                            <a href="function.com-get-active-object.php" title="com_&#8203;get_&#8203;active_&#8203;object">com_&#8203;get_&#8203;active_&#8203;object</a>
                        </li>
                                                <li class="current">
                            <a href="function.com-load-typelib.php" title="com_&#8203;load_&#8203;typelib">com_&#8203;load_&#8203;typelib</a>
                        </li>
                                                <li class="">
                            <a href="function.com-message-pump.php" title="com_&#8203;message_&#8203;pump">com_&#8203;message_&#8203;pump</a>
                        </li>
                                                <li class="">
                            <a href="function.com-print-typeinfo.php" title="com_&#8203;print_&#8203;typeinfo">com_&#8203;print_&#8203;typeinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-abs.php" title="variant_&#8203;abs">variant_&#8203;abs</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-add.php" title="variant_&#8203;add">variant_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-and.php" title="variant_&#8203;and">variant_&#8203;and</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-cast.php" title="variant_&#8203;cast">variant_&#8203;cast</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-cat.php" title="variant_&#8203;cat">variant_&#8203;cat</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-cmp.php" title="variant_&#8203;cmp">variant_&#8203;cmp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-date-from-timestamp.php" title="variant_&#8203;date_&#8203;from_&#8203;timestamp">variant_&#8203;date_&#8203;from_&#8203;timestamp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-date-to-timestamp.php" title="variant_&#8203;date_&#8203;to_&#8203;timestamp">variant_&#8203;date_&#8203;to_&#8203;timestamp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-div.php" title="variant_&#8203;div">variant_&#8203;div</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-eqv.php" title="variant_&#8203;eqv">variant_&#8203;eqv</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-fix.php" title="variant_&#8203;fix">variant_&#8203;fix</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-get-type.php" title="variant_&#8203;get_&#8203;type">variant_&#8203;get_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-idiv.php" title="variant_&#8203;idiv">variant_&#8203;idiv</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-imp.php" title="variant_&#8203;imp">variant_&#8203;imp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-int.php" title="variant_&#8203;int">variant_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-mod.php" title="variant_&#8203;mod">variant_&#8203;mod</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-mul.php" title="variant_&#8203;mul">variant_&#8203;mul</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-neg.php" title="variant_&#8203;neg">variant_&#8203;neg</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-not.php" title="variant_&#8203;not">variant_&#8203;not</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-or.php" title="variant_&#8203;or">variant_&#8203;or</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-pow.php" title="variant_&#8203;pow">variant_&#8203;pow</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-round.php" title="variant_&#8203;round">variant_&#8203;round</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-set.php" title="variant_&#8203;set">variant_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-set-type.php" title="variant_&#8203;set_&#8203;type">variant_&#8203;set_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-sub.php" title="variant_&#8203;sub">variant_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-xor.php" title="variant_&#8203;xor">variant_&#8203;xor</a>
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
