<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionParameter - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.reflectionparameter.php">
 <link rel="shorturl" href="https://www.php.net/reflectionparameter">
 <link rel="alternate" href="https://www.php.net/reflectionparameter" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.reflection.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionobject.export.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionparameter.allowsnull.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.reflectionparameter.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.reflectionparameter.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.reflectionparameter.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.reflectionparameter.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.reflectionparameter.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.reflectionparameter.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.reflectionparameter.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.reflectionparameter.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.reflectionparameter.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.reflectionparameter.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.reflectionparameter.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ReflectionParameter class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionParameter - Manual" />
<meta name="twitter:description" content="The ReflectionParameter class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionParameter - Manual" />
<meta itemprop="description" content="The ReflectionParameter class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ReflectionParameter class" />

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
        <a href="reflectionparameter.allowsnull.php">
          ReflectionParameter::allowsNull &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionobject.export.php">
          &laquo; ReflectionObject::export        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      </ul>
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
            <option value='en/class.reflectionparameter.php' selected="selected">English</option>
            <option value='de/class.reflectionparameter.php'>German</option>
            <option value='es/class.reflectionparameter.php'>Spanish</option>
            <option value='fr/class.reflectionparameter.php'>French</option>
            <option value='it/class.reflectionparameter.php'>Italian</option>
            <option value='ja/class.reflectionparameter.php'>Japanese</option>
            <option value='pt_BR/class.reflectionparameter.php'>Brazilian Portuguese</option>
            <option value='ru/class.reflectionparameter.php'>Russian</option>
            <option value='tr/class.reflectionparameter.php'>Turkish</option>
            <option value='uk/class.reflectionparameter.php'>Ukrainian</option>
            <option value='zh/class.reflectionparameter.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.reflectionparameter" class="reference">

 <h1 class="title">The ReflectionParameter class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="reflectionparameter.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">ReflectionParameter</strong></span> class retrieves
    information about function&#039;s or method&#039;s parameters.
   </p>
   <p class="para">
    To introspect function parameters, first create an instance
    of the <span class="classname"><a href="class.reflectionfunction.php" class="classname">ReflectionFunction</a></span> or
    <span class="classname"><a href="class.reflectionmethod.php" class="classname">ReflectionMethod</a></span> classes and then use their
    <span class="methodname"><a href="reflectionfunctionabstract.getparameters.php" class="methodname">ReflectionFunctionAbstract::getParameters()</a></span> method
    to retrieve an array of parameters.
   </p>
  </div>


  <div class="section" id="reflectionparameter.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ReflectionParameter</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.reflector.php" class="interfacename">Reflector</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.reflectionparameter.php#reflectionparameter.props.name">$<var class="varname">name</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$function</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$param</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.allowsnull.php" class="methodname">allowsNull</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.canbepassedbyvalue.php" class="methodname">canBePassedByValue</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname"><a href="reflectionparameter.clone.php" class="methodname">__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="reflectionparameter.export.php" class="methodname">export</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$function</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$parameter</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$return</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getattributes.php" class="methodname">getAttributes</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getclass.php" class="methodname">getClass</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getdeclaringclass.php" class="methodname">getDeclaringClass</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectionclass.php" class="type ReflectionClass">ReflectionClass</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getdeclaringfunction.php" class="methodname">getDeclaringFunction</a></span>(): <span class="type"><a href="class.reflectionfunctionabstract.php" class="type ReflectionFunctionAbstract">ReflectionFunctionAbstract</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getdefaultvalue.php" class="methodname">getDefaultValue</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getdefaultvalueconstantname.php" class="methodname">getDefaultValueConstantName</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getname.php" class="methodname">getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.getposition.php" class="methodname">getPosition</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.gettype.php" class="methodname">getType</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.reflectiontype.php" class="type ReflectionType">ReflectionType</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.hastype.php" class="methodname">hasType</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.isarray.php" class="methodname">isArray</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.iscallable.php" class="methodname">isCallable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.isdefaultvalueavailable.php" class="methodname">isDefaultValueAvailable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.isdefaultvalueconstant.php" class="methodname">isDefaultValueConstant</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.isoptional.php" class="methodname">isOptional</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.ispassedbyreference.php" class="methodname">isPassedByReference</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.ispromoted.php" class="methodname">isPromoted</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.isvariadic.php" class="methodname">isVariadic</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="reflectionparameter.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>

  

  <div class="section" id="reflectionparameter.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="reflectionparameter.props.name"><var class="varname">name</var></dt>
     <dd>
      <p class="para">
       Name of the parameter. Read-only, throws
       <span class="classname"><a href="class.reflectionexception.php" class="classname">ReflectionException</a></span> in attempt to write.
      </p>
     </dd>
    
   </dl>
  </div>


  <div class="section">
   <h2 class="title">Changelog</h2>
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.0.0</td>
       <td>
        <span class="methodname"><a href="reflectionparameter.export.php" class="methodname">ReflectionParameter::export()</a></span> was removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>
 </div>

 

























































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="reflectionparameter.allowsnull.php">ReflectionParameter::allowsNull</a> — Checks if null is allowed</li><li><a href="reflectionparameter.canbepassedbyvalue.php">ReflectionParameter::canBePassedByValue</a> — Returns whether this parameter can be passed by value</li><li><a href="reflectionparameter.clone.php">ReflectionParameter::__clone</a> — Clone</li><li><a href="reflectionparameter.construct.php">ReflectionParameter::__construct</a> — Construct</li><li><a href="reflectionparameter.export.php">ReflectionParameter::export</a> — Exports</li><li><a href="reflectionparameter.getattributes.php">ReflectionParameter::getAttributes</a> — Gets Attributes</li><li><a href="reflectionparameter.getclass.php">ReflectionParameter::getClass</a> — Get a ReflectionClass object for the parameter being reflected or null</li><li><a href="reflectionparameter.getdeclaringclass.php">ReflectionParameter::getDeclaringClass</a> — Gets declaring class</li><li><a href="reflectionparameter.getdeclaringfunction.php">ReflectionParameter::getDeclaringFunction</a> — Gets declaring function</li><li><a href="reflectionparameter.getdefaultvalue.php">ReflectionParameter::getDefaultValue</a> — Gets default parameter value</li><li><a href="reflectionparameter.getdefaultvalueconstantname.php">ReflectionParameter::getDefaultValueConstantName</a> — Returns the default value's constant name if default value is constant or null</li><li><a href="reflectionparameter.getname.php">ReflectionParameter::getName</a> — Gets parameter name</li><li><a href="reflectionparameter.getposition.php">ReflectionParameter::getPosition</a> — Gets parameter position</li><li><a href="reflectionparameter.gettype.php">ReflectionParameter::getType</a> — Gets a parameter's type</li><li><a href="reflectionparameter.hastype.php">ReflectionParameter::hasType</a> — Checks if parameter has a type</li><li><a href="reflectionparameter.isarray.php">ReflectionParameter::isArray</a> — Checks if parameter expects an array</li><li><a href="reflectionparameter.iscallable.php">ReflectionParameter::isCallable</a> — Returns whether parameter MUST be callable</li><li><a href="reflectionparameter.isdefaultvalueavailable.php">ReflectionParameter::isDefaultValueAvailable</a> — Checks if a default value is available</li><li><a href="reflectionparameter.isdefaultvalueconstant.php">ReflectionParameter::isDefaultValueConstant</a> — Returns whether the default value of this parameter is a constant</li><li><a href="reflectionparameter.isoptional.php">ReflectionParameter::isOptional</a> — Checks if optional</li><li><a href="reflectionparameter.ispassedbyreference.php">ReflectionParameter::isPassedByReference</a> — Checks if passed by reference</li><li><a href="reflectionparameter.ispromoted.php">ReflectionParameter::isPromoted</a> — Checks if a parameter is promoted to a property</li><li><a href="reflectionparameter.isvariadic.php">ReflectionParameter::isVariadic</a> — Checks if the parameter is variadic</li><li><a href="reflectionparameter.tostring.php">ReflectionParameter::__toString</a> — To string</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionparameter.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.reflectionparameter%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.reflectionparameter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionparameter.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83125">  <div class="votes">
    <div id="Vu83125">
    <a href="/manual/vote-note.php?id=83125&amp;page=class.reflectionparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83125">
    <a href="/manual/vote-note.php?id=83125&amp;page=class.reflectionparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83125" title="81% like this...">
    7
    </div>
  </div>
  <a href="#83125" class="name">
  <strong class="user"><em>fgm at riff dot org</em></strong></a><a class="genanchor" href="#83125"> &para;</a><div class="date" title="2008-05-11 12:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83125">
<div class="phpcode"><code><span class="html">The note about the signature of the ReflectionParameter constructor is actually incomplete, at least in 5.2.5: it is possible to use an integer for the second parameter, and the constructor will use it to return the n-th parameter.
<br />
<br />This allows you to obtain proper ReflectionParameter objects even when documenting code from extensions which (strangely enough) define several parameters with the same name. The string-based constructor always returns the first parameter with the matching name, whereas the integer-based constructor correctly returns the n-th parameter.
<br />
<br />So, in short, this works:
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// supposing the extension defined something like:
<br />// Some_Class::someMethod($a, $x, $y, $x, $y)
<br /></span><span class="default">$p </span><span class="keyword">= new </span><span class="default">ReflectionParameter</span><span class="keyword">(array(</span><span class="string">'Some_Class'</span><span class="keyword">, </span><span class="string">'someMethod'</span><span class="keyword">), </span><span class="default">4</span><span class="keyword">);
<br /></span><span class="comment">// returns the last parameter, whereas
<br /></span><span class="default">$p </span><span class="keyword">= new </span><span class="default">ReflectionParameter</span><span class="keyword">(array(</span><span class="string">'Some_Class'</span><span class="keyword">, </span><span class="string">'someMethod'</span><span class="keyword">), </span><span class="string">'y'</span><span class="keyword">);
<br /></span><span class="comment">// always returns the first $y at position 2
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76667">  <div class="votes">
    <div id="Vu76667">
    <a href="/manual/vote-note.php?id=76667&amp;page=class.reflectionparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76667">
    <a href="/manual/vote-note.php?id=76667&amp;page=class.reflectionparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76667" title="71% like this...">
    3
    </div>
  </div>
  <a href="#76667" class="name">
  <strong class="user"><em>killgecNOFSPAM at gmail dot com</em></strong></a><a class="genanchor" href="#76667"> &para;</a><div class="date" title="2007-07-25 05:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76667">
<div class="phpcode"><code><span class="html">Signature of constructor of ReflectionParameter correctly is:
<br />
<br />public function __construct(array/string $function, string $name);
<br />
<br />where $function is either a name of a global function, or a class/method name pair.</span></code></div>
  </div>
 </div>
  <div class="note" id="76506">  <div class="votes">
    <div id="Vu76506">
    <a href="/manual/vote-note.php?id=76506&amp;page=class.reflectionparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76506">
    <a href="/manual/vote-note.php?id=76506&amp;page=class.reflectionparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76506" title="60% like this...">
    1
    </div>
  </div>
  <a href="#76506" class="name">
  <strong class="user"><em>massimo at mmware dot it</em></strong></a><a class="genanchor" href="#76506"> &para;</a><div class="date" title="2007-07-18 08:58"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76506">
<div class="phpcode"><code><span class="html">I found these limitations using class ReflectionParameter from ReflectionFunction with INTERNAL FUNCTIONS (eg print_r, str_replace, ... ) :
<br />
<br />1. parameter names don't match with manual: (try example 19.35 with arg "call_user_func" )
<br />2. some functions (eg PCRE function, preg_match etc) have EMPTY parameter names 
<br />3. calling getDefaultValue on Parameters will result in Exception "Cannot determine default value for internal functions"</span></code></div>
  </div>
 </div>
  <div class="note" id="128945">  <div class="votes">
    <div id="Vu128945">
    <a href="/manual/vote-note.php?id=128945&amp;page=class.reflectionparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128945">
    <a href="/manual/vote-note.php?id=128945&amp;page=class.reflectionparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128945" title="no votes...">
    0
    </div>
  </div>
  <a href="#128945" class="name">
  <strong class="user"><em>rasmus at mindplay dot dk</em></strong></a><a class="genanchor" href="#128945"> &para;</a><div class="date" title="2023-10-11 10:55"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128945">
<div class="phpcode"><code><span class="html">There are so many parameter modes now, and I needed to know exactly what `ReflectionParameter` is going to return, so I wrote a little test-script - you can find the script and results in a table here:<br /><br /><a href="https://gist.github.com/mindplay-dk/082458088988e32256a827f9b7491e17" rel="nofollow" target="_blank">https://gist.github.com/mindplay-dk/082458088988e32256a827f9b7491e17</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.reflectionparameter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.reflectionparameter.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.reflection.php">Reflection</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.reflection.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="reflection.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="reflection.extending.php" title="Extending">Extending</a>
                        </li>
                                                <li class="">
                            <a href="class.reflection.php" title="Reflection">Reflection</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionclass.php" title="ReflectionClass">ReflectionClass</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionclassconstant.php" title="ReflectionClassConstant">ReflectionClassConstant</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionconstant.php" title="ReflectionConstant">ReflectionConstant</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenum.php" title="ReflectionEnum">ReflectionEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenumunitcase.php" title="ReflectionEnumUnitCase">ReflectionEnumUnitCase</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenumbackedcase.php" title="ReflectionEnumBackedCase">ReflectionEnumBackedCase</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionzendextension.php" title="ReflectionZendExtension">ReflectionZendExtension</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionextension.php" title="ReflectionExtension">ReflectionExtension</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfunction.php" title="ReflectionFunction">ReflectionFunction</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfunctionabstract.php" title="ReflectionFunctionAbstract">ReflectionFunctionAbstract</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionmethod.php" title="ReflectionMethod">ReflectionMethod</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionnamedtype.php" title="ReflectionNamedType">ReflectionNamedType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionobject.php" title="ReflectionObject">ReflectionObject</a>
                        </li>
                                                <li class="current">
                            <a href="class.reflectionparameter.php" title="ReflectionParameter">ReflectionParameter</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionproperty.php" title="ReflectionProperty">ReflectionProperty</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectiontype.php" title="ReflectionType">ReflectionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionuniontype.php" title="ReflectionUnionType">ReflectionUnionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectiongenerator.php" title="ReflectionGenerator">ReflectionGenerator</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfiber.php" title="ReflectionFiber">ReflectionFiber</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionintersectiontype.php" title="ReflectionIntersectionType">ReflectionIntersectionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionreference.php" title="ReflectionReference">ReflectionReference</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionattribute.php" title="ReflectionAttribute">ReflectionAttribute</a>
                        </li>
                                                <li class="">
                            <a href="class.reflector.php" title="Reflector">Reflector</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionexception.php" title="ReflectionException">ReflectionException</a>
                        </li>
                                                <li class="">
                            <a href="enum.propertyhooktype.php" title="PropertyHookType">PropertyHookType</a>
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
