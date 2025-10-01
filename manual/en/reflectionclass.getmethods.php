<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionClass::getMethods - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflectionclass.getmethods.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflectionclass.getmethods.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.getmethods.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.reflectionclass.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionclass.getmethod.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionclass.getmodifiers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.getmethods.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflectionclass.getmethods.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflectionclass.getmethods.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflectionclass.getmethods.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflectionclass.getmethods.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflectionclass.getmethods.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflectionclass.getmethods.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflectionclass.getmethods.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflectionclass.getmethods.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflectionclass.getmethods.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflectionclass.getmethods.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets an array of methods" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionClass::getMethods - Manual" />
<meta name="twitter:description" content="Gets an array of methods" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionClass::getMethods - Manual" />
<meta itemprop="description" content="Gets an array of methods" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets an array of methods" />

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
        <a href="reflectionclass.getmodifiers.php">
          ReflectionClass::getModifiers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionclass.getmethod.php">
          &laquo; ReflectionClass::getMethod        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      <li><a href='class.reflectionclass.php'>ReflectionClass</a></li>      </ul>
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
            <option value='en/reflectionclass.getmethods.php' selected="selected">English</option>
            <option value='de/reflectionclass.getmethods.php'>German</option>
            <option value='es/reflectionclass.getmethods.php'>Spanish</option>
            <option value='fr/reflectionclass.getmethods.php'>French</option>
            <option value='it/reflectionclass.getmethods.php'>Italian</option>
            <option value='ja/reflectionclass.getmethods.php'>Japanese</option>
            <option value='pt_BR/reflectionclass.getmethods.php'>Brazilian Portuguese</option>
            <option value='ru/reflectionclass.getmethods.php'>Russian</option>
            <option value='tr/reflectionclass.getmethods.php'>Turkish</option>
            <option value='uk/reflectionclass.getmethods.php'>Ukrainian</option>
            <option value='zh/reflectionclass.getmethods.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflectionclass.getmethods" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ReflectionClass::getMethods</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionClass::getMethods</span> &mdash; <span class="dc-title">Gets an array of methods</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-reflectionclass.getmethods-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ReflectionClass::getMethods</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Gets an array of methods for the class.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-reflectionclass.getmethods-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filter</code></dt>
     <dd>
      <p class="para">
       Filter the results to include only methods with certain attributes. Defaults
       to no filtering.
      </p>
      <p class="para">
       Any bitwise disjunction of <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-static">ReflectionMethod::IS_STATIC</a></code></strong>,
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-public">ReflectionMethod::IS_PUBLIC</a></code></strong>,
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-protected">ReflectionMethod::IS_PROTECTED</a></code></strong>,
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-private">ReflectionMethod::IS_PRIVATE</a></code></strong>,
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-abstract">ReflectionMethod::IS_ABSTRACT</a></code></strong>,
       <strong><code><a href="class.reflectionmethod.php#reflectionmethod.constants.is-final">ReflectionMethod::IS_FINAL</a></code></strong>,
       so that all methods with <em>any</em> of the given
       attributes will be returned.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Note that other bitwise operations, for instance <code class="literal">~</code>
        will not work as expected. In other words, it is not possible to
        retrieve all non-static methods, for example.
       </span>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-reflectionclass.getmethods-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of <span class="classname"><a href="class.reflectionmethod.php" class="classname">ReflectionMethod</a></span> objects
   reflecting each method.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-reflectionclass.getmethods-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>7.2.0</td>
      <td>
       <code class="parameter">filter</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-reflectionclass.getmethods-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5482">
    <p><strong>Example #1 Basic usage of <span class="methodname"><strong>ReflectionClass::getMethods()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Apple </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">firstMethod</span><span style="color: #007700">() { }<br />    final protected function </span><span style="color: #0000BB">secondMethod</span><span style="color: #007700">() { }<br />    private static function </span><span style="color: #0000BB">thirdMethod</span><span style="color: #007700">() { }<br />}<br /><br /></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'Apple'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$methods </span><span style="color: #007700">= </span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMethods</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$methods</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  object(ReflectionMethod)#2 (2) {
    [&quot;name&quot;]=&gt;
    string(11) &quot;firstMethod&quot;
    [&quot;class&quot;]=&gt;
    string(5) &quot;Apple&quot;
  }
  [1]=&gt;
  object(ReflectionMethod)#3 (2) {
    [&quot;name&quot;]=&gt;
    string(12) &quot;secondMethod&quot;
    [&quot;class&quot;]=&gt;
    string(5) &quot;Apple&quot;
  }
  [2]=&gt;
  object(ReflectionMethod)#4 (2) {
    [&quot;name&quot;]=&gt;
    string(11) &quot;thirdMethod&quot;
    [&quot;class&quot;]=&gt;
    string(5) &quot;Apple&quot;
  }
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5483">
    <p><strong>Example #2 Filtering results from <span class="methodname"><strong>ReflectionClass::getMethods()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Apple </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">firstMethod</span><span style="color: #007700">() { }<br />    final protected function </span><span style="color: #0000BB">secondMethod</span><span style="color: #007700">() { }<br />    private static function </span><span style="color: #0000BB">thirdMethod</span><span style="color: #007700">() { }<br />}<br /><br /></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'Apple'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$methods </span><span style="color: #007700">= </span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMethods</span><span style="color: #007700">(</span><span style="color: #0000BB">ReflectionMethod</span><span style="color: #007700">::</span><span style="color: #0000BB">IS_STATIC </span><span style="color: #007700">| </span><span style="color: #0000BB">ReflectionMethod</span><span style="color: #007700">::</span><span style="color: #0000BB">IS_FINAL</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$methods</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(2) {
  [0]=&gt;
  object(ReflectionMethod)#2 (2) {
    [&quot;name&quot;]=&gt;
    string(12) &quot;secondMethod&quot;
    [&quot;class&quot;]=&gt;
    string(5) &quot;Apple&quot;
  }
  [1]=&gt;
  object(ReflectionMethod)#3 (2) {
    [&quot;name&quot;]=&gt;
    string(11) &quot;thirdMethod&quot;
    [&quot;class&quot;]=&gt;
    string(5) &quot;Apple&quot;
  }
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-reflectionclass.getmethods-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="reflectionclass.getmethod.php" class="methodname" rel="rdfs-seeAlso">ReflectionClass::getMethod()</a> - Gets a ReflectionMethod for a class method</span></li>
    <li><span class="function"><a href="function.get-class-methods.php" class="function" rel="rdfs-seeAlso">get_class_methods()</a> - Gets the class methods' names</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionclass/getmethods.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflectionclass.getmethods%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflectionclass.getmethods&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.getmethods.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112659">  <div class="votes">
    <div id="Vu112659">
    <a href="/manual/vote-note.php?id=112659&amp;page=reflectionclass.getmethods&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112659">
    <a href="/manual/vote-note.php?id=112659&amp;page=reflectionclass.getmethods&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112659" title="88% like this...">
    7
    </div>
  </div>
  <a href="#112659" class="name">
  <strong class="user"><em>x_atrix at yahoo dot com</em></strong></a><a class="genanchor" href="#112659"> &para;</a><div class="date" title="2013-07-10 05:00"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112659">
<div class="phpcode"><code><span class="html">Note, for ReflectionClass::getMethods() not all methods in a final class are final, just the ones that have explicit modifier.<br />If you want to use an and operator for the filter, here is a simple implementation<br /><span class="default">&lt;?php<br /></span><span class="keyword">final class </span><span class="default">Apple </span><span class="keyword">{<br />    public function </span><span class="default">publicMethod</span><span class="keyword">() { }<br />    public final function </span><span class="default">publicFinalMethod</span><span class="keyword">() { }<br />    protected final function </span><span class="default">protectedFinalMethod</span><span class="keyword">() { }<br />    private static function </span><span class="default">privateStaticMethod</span><span class="keyword">() { }<br />}<br /><br />class </span><span class="default">MyReflection </span><span class="keyword">extends </span><span class="default">ReflectionClass </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$argument</span><span class="keyword">) {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$argument</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">/**<br />     * (non-PHPdoc)<br />     * @see ReflectionClass::getMethods()<br />     */<br />    </span><span class="keyword">public function </span><span class="default">getMethods</span><span class="keyword">(</span><span class="default">$filter </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$useAndOperator </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">) {<br />        if (</span><span class="default">$useAndOperator </span><span class="keyword">!== </span><span class="default">true</span><span class="keyword">) {<br />            return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">getMethods</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">);<br />        }<br />        <br />        </span><span class="default">$methods </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">getMethods</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">);<br />        </span><span class="default">$results </span><span class="keyword">= array();<br />        <br />        foreach (</span><span class="default">$methods </span><span class="keyword">as </span><span class="default">$method</span><span class="keyword">) {<br />            if ((</span><span class="default">$method</span><span class="keyword">-&gt;</span><span class="default">getModifiers</span><span class="keyword">() &amp; </span><span class="default">$filter</span><span class="keyword">) === </span><span class="default">$filter</span><span class="keyword">) {<br />                </span><span class="default">$results</span><span class="keyword">[] = </span><span class="default">$method</span><span class="keyword">;<br />            }<br />        }<br />        <br />        return </span><span class="default">$results</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$class </span><span class="keyword">= new </span><span class="default">MyReflection</span><span class="keyword">(</span><span class="string">'Apple'</span><span class="keyword">);<br /></span><span class="default">$methods </span><span class="keyword">= </span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">getMethods</span><span class="keyword">(</span><span class="default">ReflectionMethod</span><span class="keyword">::</span><span class="default">IS_FINAL </span><span class="keyword">| </span><span class="default">ReflectionMethod</span><span class="keyword">::</span><span class="default">IS_PUBLIC</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$methods</span><span class="keyword">);<br /><br /></span><span class="default">$methods </span><span class="keyword">= </span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">getMethods</span><span class="keyword">(</span><span class="default">ReflectionMethod</span><span class="keyword">::</span><span class="default">IS_FINAL </span><span class="keyword">| </span><span class="default">ReflectionMethod</span><span class="keyword">::</span><span class="default">IS_PUBLIC</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$methods</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Result:<br />array(1) {<br />  [0]=&gt;<br />  object(ReflectionMethod)#4 (2) {<br />    ["name"]=&gt;<br />    string(17) "publicFinalMethod"<br />    ["class"]=&gt;<br />    string(5) "Apple"<br />  }<br />}<br /><br />array(3) {<br />  [0]=&gt;<br />  &amp;object(ReflectionMethod)#5 (2) {<br />    ["name"]=&gt;<br />    string(12) "publicMethod"<br />    ["class"]=&gt;<br />    string(5) "Apple"<br />  }<br />  [1]=&gt;<br />  &amp;object(ReflectionMethod)#3 (2) {<br />    ["name"]=&gt;<br />    string(17) "publicFinalMethod"<br />    ["class"]=&gt;<br />    string(5) "Apple"<br />  }<br />  [2]=&gt;<br />  &amp;object(ReflectionMethod)#6 (2) {<br />    ["name"]=&gt;<br />    string(20) "protectedFinalMethod"<br />    ["class"]=&gt;<br />    string(5) "Apple"<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="115197">  <div class="votes">
    <div id="Vu115197">
    <a href="/manual/vote-note.php?id=115197&amp;page=reflectionclass.getmethods&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115197">
    <a href="/manual/vote-note.php?id=115197&amp;page=reflectionclass.getmethods&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115197" title="81% like this...">
    7
    </div>
  </div>
  <a href="#115197" class="name">
  <strong class="user"><em>tom at r dot je</em></strong></a><a class="genanchor" href="#115197"> &para;</a><div class="date" title="2014-06-11 05:40"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115197">
<div class="phpcode"><code><span class="html">ReflectionClass::getMethods() sorts the methods by class (lowest in the inheritance tree first) then by the order they are defined in the class definition:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">method1</span><span class="keyword">() {<br />        <br />    }<br />    <br />    public function </span><span class="default">method2</span><span class="keyword">() {<br />        <br />    }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br /><br />    public function </span><span class="default">method3</span><span class="keyword">() {<br /><br />    }<br /><br />    public function </span><span class="default">method4</span><span class="keyword">() {<br /><br />    }<br />}<br /><br /></span><span class="default">$class </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">getMethods</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />This will output:<br /><br />Array<br />(<br />    [0] =&gt; ReflectionMethod Object<br />        (<br />            [name] =&gt; method3<br />            [class] =&gt; B<br />        )<br /><br />    [1] =&gt; ReflectionMethod Object<br />        (<br />            [name] =&gt; method4<br />            [class] =&gt; B<br />        )<br /><br />    [2] =&gt; ReflectionMethod Object<br />        (<br />            [name] =&gt; method1<br />            [class] =&gt; A<br />        )<br /><br />    [3] =&gt; ReflectionMethod Object<br />        (<br />            [name] =&gt; method2<br />            [class] =&gt; A<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="104549">  <div class="votes">
    <div id="Vu104549">
    <a href="/manual/vote-note.php?id=104549&amp;page=reflectionclass.getmethods&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104549">
    <a href="/manual/vote-note.php?id=104549&amp;page=reflectionclass.getmethods&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104549" title="60% like this...">
    1
    </div>
  </div>
  <a href="#104549" class="name">
  <strong class="user"><em>deminy at deminy dot net</em></strong></a><a class="genanchor" href="#104549"> &para;</a><div class="date" title="2011-06-22 09:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104549">
<div class="phpcode"><code><span class="html">Method ReflectionClass::getMethods doesn't work constantly across different versions of PHP. For following code piece<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Dummy </span><span class="keyword">implements </span><span class="default">Iterator<br /></span><span class="keyword">{<br />    public function </span><span class="default">current </span><span class="keyword">() {}<br />    public function </span><span class="default">next </span><span class="keyword">() {}<br />    public function </span><span class="default">key </span><span class="keyword">() {}<br />    public function </span><span class="default">valid </span><span class="keyword">() {}<br />    public function </span><span class="default">rewind </span><span class="keyword">() {}<br />}<br /><br /></span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'Dummy'</span><span class="keyword">);<br /></span><span class="default">$aMethods </span><span class="keyword">= </span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getMethods</span><span class="keyword">();<br />echo </span><span class="string">'# of methods: '</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$aMethods</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />, it outputs "# of methods: 10" on PHP 5.2.14 and PHP 5.2.17, including all methods defined in the class itself and in the interface no matter if a method has been implemented or overridden; however, it returns "# of methods: 5" on PHP 5.3.5. Based on some other tests did by my colleagues, I assume it also returns "# of methods: 5" on PHP 5.2.10 and PHP 5.3.6.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflectionclass.getmethods&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.getmethods.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.reflectionclass.php">ReflectionClass</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="reflectionclass.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getattributes.php" title="getAttributes">getAttributes</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getconstant.php" title="getConstant">getConstant</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getconstants.php" title="getConstants">getConstants</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getconstructor.php" title="getConstructor">getConstructor</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getdefaultproperties.php" title="getDefaultProperties">getDefaultProperties</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getdoccomment.php" title="getDocComment">getDocComment</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getendline.php" title="getEndLine">getEndLine</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getextension.php" title="getExtension">getExtension</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getextensionname.php" title="getExtensionName">getExtensionName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getfilename.php" title="getFileName">getFileName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getinterfacenames.php" title="getInterfaceNames">getInterfaceNames</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getinterfaces.php" title="getInterfaces">getInterfaces</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getlazyinitializer.php" title="getLazyInitializer">getLazyInitializer</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getmethod.php" title="getMethod">getMethod</a>
                        </li>
                                                <li class="current">
                            <a href="reflectionclass.getmethods.php" title="getMethods">getMethods</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getmodifiers.php" title="getModifiers">getModifiers</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getnamespacename.php" title="getNamespaceName">getNamespaceName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getparentclass.php" title="getParentClass">getParentClass</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getproperties.php" title="getProperties">getProperties</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getproperty.php" title="getProperty">getProperty</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getreflectionconstant.php" title="getReflectionConstant">getReflectionConstant</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getreflectionconstants.php" title="getReflectionConstants">getReflectionConstants</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getshortname.php" title="getShortName">getShortName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getstartline.php" title="getStartLine">getStartLine</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getstaticproperties.php" title="getStaticProperties">getStaticProperties</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getstaticpropertyvalue.php" title="getStaticPropertyValue">getStaticPropertyValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.gettraitaliases.php" title="getTraitAliases">getTraitAliases</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.gettraitnames.php" title="getTraitNames">getTraitNames</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.gettraits.php" title="getTraits">getTraits</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.hasconstant.php" title="hasConstant">hasConstant</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.hasmethod.php" title="hasMethod">hasMethod</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.hasproperty.php" title="hasProperty">hasProperty</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.implementsinterface.php" title="implementsInterface">implementsInterface</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.initializelazyobject.php" title="initializeLazyObject">initializeLazyObject</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.innamespace.php" title="inNamespace">inNamespace</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isabstract.php" title="isAbstract">isAbstract</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isanonymous.php" title="isAnonymous">isAnonymous</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.iscloneable.php" title="isCloneable">isCloneable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isenum.php" title="isEnum">isEnum</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isfinal.php" title="isFinal">isFinal</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinstance.php" title="isInstance">isInstance</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinstantiable.php" title="isInstantiable">isInstantiable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinterface.php" title="isInterface">isInterface</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinternal.php" title="isInternal">isInternal</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isiterable.php" title="isIterable">isIterable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isiterateable.php" title="isIterateable">isIterateable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isreadonly.php" title="isReadOnly">isReadOnly</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.issubclassof.php" title="isSubclassOf">isSubclassOf</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.istrait.php" title="isTrait">isTrait</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isuninitializedlazyobject.php" title="isUninitializedLazyObject">isUninitializedLazyObject</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isuserdefined.php" title="isUserDefined">isUserDefined</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.marklazyobjectasinitialized.php" title="markLazyObjectAsInitialized">markLazyObjectAsInitialized</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newinstance.php" title="newInstance">newInstance</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newinstanceargs.php" title="newInstanceArgs">newInstanceArgs</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newinstancewithoutconstructor.php" title="newInstanceWithoutConstructor">newInstanceWithoutConstructor</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newlazyghost.php" title="newLazyGhost">newLazyGhost</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newlazyproxy.php" title="newLazyProxy">newLazyProxy</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.resetaslazyghost.php" title="resetAsLazyGhost">resetAsLazyGhost</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.resetaslazyproxy.php" title="resetAsLazyProxy">resetAsLazyProxy</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.setstaticpropertyvalue.php" title="setStaticPropertyValue">setStaticPropertyValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="reflectionclass.export.php" title="export">export</a>
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
