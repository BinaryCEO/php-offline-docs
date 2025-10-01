<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionProperty::setValue - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflectionproperty.setvalue.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflectionproperty.setvalue.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflectionproperty.setvalue.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.reflectionproperty.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionproperty.setrawvaluewithoutlazyinitialization.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionproperty.skiplazyinitialization.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflectionproperty.setvalue.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflectionproperty.setvalue.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflectionproperty.setvalue.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflectionproperty.setvalue.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflectionproperty.setvalue.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflectionproperty.setvalue.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflectionproperty.setvalue.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflectionproperty.setvalue.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflectionproperty.setvalue.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflectionproperty.setvalue.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflectionproperty.setvalue.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set property value" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionProperty::setValue - Manual" />
<meta name="twitter:description" content="Set property value" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionProperty::setValue - Manual" />
<meta itemprop="description" content="Set property value" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set property value" />

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
        <a href="reflectionproperty.skiplazyinitialization.php">
          ReflectionProperty::skipLazyInitialization &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php">
          &laquo; ReflectionProperty::setRawValueWithoutLazyInitialization        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      <li><a href='class.reflectionproperty.php'>ReflectionProperty</a></li>      </ul>
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
            <option value='en/reflectionproperty.setvalue.php' selected="selected">English</option>
            <option value='de/reflectionproperty.setvalue.php'>German</option>
            <option value='es/reflectionproperty.setvalue.php'>Spanish</option>
            <option value='fr/reflectionproperty.setvalue.php'>French</option>
            <option value='it/reflectionproperty.setvalue.php'>Italian</option>
            <option value='ja/reflectionproperty.setvalue.php'>Japanese</option>
            <option value='pt_BR/reflectionproperty.setvalue.php'>Brazilian Portuguese</option>
            <option value='ru/reflectionproperty.setvalue.php'>Russian</option>
            <option value='tr/reflectionproperty.setvalue.php'>Turkish</option>
            <option value='uk/reflectionproperty.setvalue.php'>Ukrainian</option>
            <option value='zh/reflectionproperty.setvalue.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflectionproperty.setvalue" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ReflectionProperty::setValue</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionProperty::setValue</span> &mdash; <span class="dc-title">Set property value</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-reflectionproperty.setvalue-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ReflectionProperty::setValue</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>ReflectionProperty::setValue</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Sets (changes) the property&#039;s value.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    To set static property values, use <code class="literal">ReflectionProperty::setValue(null, $value)</code>.
   </span>
  </p></blockquote>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-reflectionproperty.setvalue-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">object</code></dt>
     <dd>
      <p class="para">
       For static properties, pass in <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
       For non-static properties, pass in the object.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The new value.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-reflectionproperty.setvalue-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-reflectionproperty.setvalue-changelog">
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
      <td>8.3.0</td>
      <td>
       Calling this method with a single argument is deprecated,
       instead use <code class="literal">ReflectionProperty::setValue(null, $value)</code>
       for static properties.
      </td>
     </tr>

     <tr>
      <td>8.1.0</td>
      <td>
       Private and protected properties can be accessed by
       <span class="methodname"><strong>ReflectionProperty::setValue()</strong></span> right away.
       Previously, they needed to be made accessible by calling
       <span class="methodname"><a href="reflectionproperty.setaccessible.php" class="methodname">ReflectionProperty::setAccessible()</a></span>; otherwise
       a <span class="classname"><a href="class.reflectionexception.php" class="classname">ReflectionException</a></span> was thrown.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-reflectionproperty.setvalue-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5619">
    <p><strong>Example #1 <span class="methodname"><strong>ReflectionProperty::setValue()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />    public static </span><span style="color: #0000BB">$staticProperty</span><span style="color: #007700">;<br />    <br />    public </span><span style="color: #0000BB">$property</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$privateProperty</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$reflectionClass </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// As of PHP 8.3, passing in null as the first argument is required<br />// to access static properties.<br /></span><span style="color: #0000BB">$reflectionProperty </span><span style="color: #007700">= </span><span style="color: #0000BB">$reflectionClass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperty</span><span style="color: #007700">(</span><span style="color: #DD0000">'staticProperty'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$reflectionProperty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">$staticProperty</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$reflectionClass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperty</span><span style="color: #007700">(</span><span style="color: #DD0000">'property'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$reflectionProperty </span><span style="color: #007700">= </span><span style="color: #0000BB">$reflectionClass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperty</span><span style="color: #007700">(</span><span style="color: #DD0000">'privateProperty'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$reflectionProperty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAccessible</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">); </span><span style="color: #FF8000">// only required prior to PHP 8.1.0<br /></span><span style="color: #0000BB">$reflectionProperty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, </span><span style="color: #DD0000">'foobar'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$reflectionProperty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(3) &quot;foo&quot;
string(3) &quot;bar&quot;
string(6) &quot;foobar&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-reflectionproperty.setvalue-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="reflectionproperty.getvalue.php" class="methodname" rel="rdfs-seeAlso">ReflectionProperty::getValue()</a> - Gets value</span></li>
    <li><span class="methodname"><a href="reflectionproperty.setaccessible.php" class="methodname" rel="rdfs-seeAlso">ReflectionProperty::setAccessible()</a> - Set property accessibility</span></li>
    <li><span class="methodname"><a href="reflectionclass.setstaticpropertyvalue.php" class="methodname" rel="rdfs-seeAlso">ReflectionClass::setStaticPropertyValue()</a> - Sets public static property value</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionproperty/setvalue.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflectionproperty.setvalue%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflectionproperty.setvalue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionproperty.setvalue.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127707">  <div class="votes">
    <div id="Vu127707">
    <a href="/manual/vote-note.php?id=127707&amp;page=reflectionproperty.setvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127707">
    <a href="/manual/vote-note.php?id=127707&amp;page=reflectionproperty.setvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127707" title="66% like this...">
    1
    </div>
  </div>
  <a href="#127707" class="name">
  <strong class="user"><em>temirkhan.nasukhov</em></strong></a><a class="genanchor" href="#127707"> &para;</a><div class="date" title="2022-10-10 05:41"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127707">
<div class="phpcode"><code><span class="html">Keep in mind that setValue won't work for readonly properties.  <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Person<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(private readonly </span><span class="default">int $age</span><span class="keyword">) {}<br />}<br /><br /></span><span class="default">$someOldPerson </span><span class="keyword">= new </span><span class="default">Person</span><span class="keyword">(</span><span class="default">80</span><span class="keyword">);<br /><br /></span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">(</span><span class="default">$someOldPerson</span><span class="keyword">, </span><span class="string">'age'</span><span class="keyword">);<br /></span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">setValue</span><span class="keyword">(</span><span class="default">$someOldPerson</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">); </span><span class="comment">// Fatal error: Uncaught Error: Cannot modify readonly property Person::$age</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128024">  <div class="votes">
    <div id="Vu128024">
    <a href="/manual/vote-note.php?id=128024&amp;page=reflectionproperty.setvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128024">
    <a href="/manual/vote-note.php?id=128024&amp;page=reflectionproperty.setvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128024" title="60% like this...">
    1
    </div>
  </div>
  <a href="#128024" class="name">
  <strong class="user"><em>p stewart imperial ac uk</em></strong></a><a class="genanchor" href="#128024"> &para;</a><div class="date" title="2022-12-16 03:18"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128024">
<div class="phpcode"><code><span class="html">setValue can be used for readonly properties, but only if the property has not yet been initialised:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Person<br /></span><span class="keyword">{<br />    private readonly </span><span class="default">int $age</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">(array </span><span class="default">$props </span><span class="keyword">= []) {<br />        if (isset(</span><span class="default">$props</span><span class="keyword">[</span><span class="string">'age'</span><span class="keyword">])) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">age </span><span class="keyword">= (int)</span><span class="default">$props</span><span class="keyword">[</span><span class="string">'age'</span><span class="keyword">];<br />        }<br />    }<br />}<br /><br /></span><span class="default">$personWithKnownAge </span><span class="keyword">= new </span><span class="default">Person</span><span class="keyword">([</span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">50</span><span class="keyword">]);<br /><br /></span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">(</span><span class="default">$personWithKnownAge</span><span class="keyword">, </span><span class="string">'age'</span><span class="keyword">);<br /></span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">setValue</span><span class="keyword">(</span><span class="default">$personWithKnownAge</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">); </span><span class="comment">// Fails - Age is already initialised, value cannot be changed.<br /><br /></span><span class="default">$personWithUnknownAge </span><span class="keyword">= new </span><span class="default">Person</span><span class="keyword">();<br /><br /></span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">(</span><span class="default">$personWithUnknownAge</span><span class="keyword">, </span><span class="string">'age'</span><span class="keyword">);<br /></span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">setValue</span><span class="keyword">(</span><span class="default">$personWithUnknownAge</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">); </span><span class="comment">// Succeeeds - Age is not yet initialised, value can be set.<br /></span><span class="default">?&gt;<br /></span><br />This can be useful for situations where it is desirable to initialise properties from outside of the defining class, for example an ORM setup where the parent class is responsible for setting properties on a model subclass instance.</span></code></div>
  </div>
 </div>
  <div class="note" id="104550">  <div class="votes">
    <div id="Vu104550">
    <a href="/manual/vote-note.php?id=104550&amp;page=reflectionproperty.setvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104550">
    <a href="/manual/vote-note.php?id=104550&amp;page=reflectionproperty.setvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104550" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#104550" class="name">
  <strong class="user"><em>me at ircmaxell dot om</em></strong></a><a class="genanchor" href="#104550"> &para;</a><div class="date" title="2011-06-22 09:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104550">
<div class="phpcode"><code><span class="html">You can use ReflectionProperty::setValue to set the value on static properties as well as regular instance properties.  Simply pass null in place of the instance:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    protected static </span><span class="default">$bar </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    public static function </span><span class="default">sayBar</span><span class="keyword">() {<br />        echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">$bar</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$r </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">(</span><span class="string">'Foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">);<br /></span><span class="default">$r</span><span class="keyword">-&gt;</span><span class="default">setAccessible</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$r</span><span class="keyword">-&gt;</span><span class="default">setValue</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">);<br /><br /></span><span class="default">Foo</span><span class="keyword">::</span><span class="default">sayBar</span><span class="keyword">(); </span><span class="comment">// "foo"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflectionproperty.setvalue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionproperty.setvalue.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.reflectionproperty.php">ReflectionProperty</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="reflectionproperty.clone.php" title="_&#8203;_&#8203;clone">_&#8203;_&#8203;clone</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getattributes.php" title="getAttributes">getAttributes</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getdeclaringclass.php" title="getDeclaringClass">getDeclaringClass</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getdefaultvalue.php" title="getDefaultValue">getDefaultValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getdoccomment.php" title="getDocComment">getDocComment</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.gethook.php" title="getHook">getHook</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.gethooks.php" title="getHooks">getHooks</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getmodifiers.php" title="getModifiers">getModifiers</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getrawvalue.php" title="getRawValue">getRawValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getsettabletype.php" title="getSettableType">getSettableType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.gettype.php" title="getType">getType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getvalue.php" title="getValue">getValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hasdefaultvalue.php" title="hasDefaultValue">hasDefaultValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hashook.php" title="hasHook">hasHook</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hashooks.php" title="hasHooks">hasHooks</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hastype.php" title="hasType">hasType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isabstract.php" title="isAbstract">isAbstract</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isdefault.php" title="isDefault">isDefault</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isdynamic.php" title="isDynamic">isDynamic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isfinal.php" title="isFinal">isFinal</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isinitialized.php" title="isInitialized">isInitialized</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.islazy.php" title="isLazy">isLazy</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprivate.php" title="isPrivate">isPrivate</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprivateset.php" title="isPrivateSet">isPrivateSet</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.ispromoted.php" title="isPromoted">isPromoted</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprotected.php" title="isProtected">isProtected</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprotectedset.php" title="isProtectedSet">isProtectedSet</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.ispublic.php" title="isPublic">isPublic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isreadonly.php" title="isReadOnly">isReadOnly</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isstatic.php" title="isStatic">isStatic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isvirtual.php" title="isVirtual">isVirtual</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.setaccessible.php" title="setAccessible">setAccessible</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.setrawvalue.php" title="setRawValue">setRawValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" title="setRawValueWithoutLazyInitialization">setRawValueWithoutLazyInitialization</a>
                        </li>
                                                <li class="current">
                            <a href="reflectionproperty.setvalue.php" title="setValue">setValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.skiplazyinitialization.php" title="skipLazyInitialization">skipLazyInitialization</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="reflectionproperty.export.php" title="export">export</a>
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
