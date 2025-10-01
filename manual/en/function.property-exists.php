<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: property_exists - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.property-exists.php">
 <link rel="shorturl" href="https://www.php.net/property-exists">
 <link rel="alternate" href="https://www.php.net/property-exists" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.method-exists.php">
 <link rel="next" href="https://www.php.net/manual/en/function.trait-exists.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.property-exists.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.property-exists.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.property-exists.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.property-exists.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.property-exists.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.property-exists.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.property-exists.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.property-exists.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.property-exists.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.property-exists.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.property-exists.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks if the object or class has a property" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: property_exists - Manual" />
<meta name="twitter:description" content="Checks if the object or class has a property" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: property_exists - Manual" />
<meta itemprop="description" content="Checks if the object or class has a property" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks if the object or class has a property" />

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
        <a href="function.trait-exists.php">
          trait_exists &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.method-exists.php">
          &laquo; method_exists        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.classobj.php'>Classes/Objects</a></li>      <li><a href='ref.classobj.php'>Classes/Object Functions</a></li>      </ul>
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
            <option value='en/function.property-exists.php' selected="selected">English</option>
            <option value='de/function.property-exists.php'>German</option>
            <option value='es/function.property-exists.php'>Spanish</option>
            <option value='fr/function.property-exists.php'>French</option>
            <option value='it/function.property-exists.php'>Italian</option>
            <option value='ja/function.property-exists.php'>Japanese</option>
            <option value='pt_BR/function.property-exists.php'>Brazilian Portuguese</option>
            <option value='ru/function.property-exists.php'>Russian</option>
            <option value='tr/function.property-exists.php'>Turkish</option>
            <option value='uk/function.property-exists.php'>Ukrainian</option>
            <option value='zh/function.property-exists.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.property-exists" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">property_exists</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">property_exists</span> &mdash; <span class="dc-title">
   Checks if the object or class has a property
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.property-exists-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>property_exists</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$object_or_class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$property</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function checks if the given <code class="parameter">property</code> exists in
   the specified class.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    As opposed with <span class="function"><a href="function.isset.php" class="function">isset()</a></span>,
    <span class="function"><strong>property_exists()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> even if the property
    has the value <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.property-exists-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">object_or_class</code></dt>
      <dd>
       <p class="para">
        The class name or an object of the class to test for
       </p>
      </dd>
     
    
     <dt><code class="parameter">property</code></dt>
      <dd>
       <p class="para">
        The name of the property
       </p>
      </dd>
     
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.property-exists-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the property exists, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if it doesn&#039;t exist.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.property-exists-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5361">
    <p><strong>Example #1 A <span class="function"><strong>property_exists()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">myClass </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$mine</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$xpto</span><span style="color: #007700">;<br />    static protected </span><span style="color: #0000BB">$test</span><span style="color: #007700">;<br /><br />    static function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'myClass'</span><span style="color: #007700">, </span><span style="color: #DD0000">'xpto'</span><span style="color: #007700">)); </span><span style="color: #FF8000">//true<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'myClass'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mine'</span><span style="color: #007700">));   </span><span style="color: #FF8000">//true<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(new </span><span style="color: #0000BB">myClass</span><span style="color: #007700">, </span><span style="color: #DD0000">'mine'</span><span style="color: #007700">)); </span><span style="color: #FF8000">//true<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'myClass'</span><span style="color: #007700">, </span><span style="color: #DD0000">'xpto'</span><span style="color: #007700">));   </span><span style="color: #FF8000">//true<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'myClass'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">));    </span><span style="color: #FF8000">//false<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'myClass'</span><span style="color: #007700">, </span><span style="color: #DD0000">'test'</span><span style="color: #007700">));   </span><span style="color: #FF8000">//true<br /></span><span style="color: #0000BB">myClass</span><span style="color: #007700">::</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.property-exists-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
<p class="para">Using this function will use any registered
<a href="language.oop5.autoload.php" class="link">autoloaders</a> if the class is not already known.</p></p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The <span class="function"><strong>property_exists()</strong></span> function cannot detect properties
    that are magically accessible using the <a href="language.oop5.overloading.php#language.oop5.overloading.members" class="link"><code class="literal">__get</code></a>
    magic method.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.property-exists-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.method-exists.php" class="function" rel="rdfs-seeAlso">method_exists()</a> - Checks if the class method exists</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/functions/property-exists.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.property-exists%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.property-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.property-exists.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116824">  <div class="votes">
    <div id="Vu116824">
    <a href="/manual/vote-note.php?id=116824&amp;page=function.property-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116824">
    <a href="/manual/vote-note.php?id=116824&amp;page=function.property-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116824" title="84% like this...">
    69
    </div>
  </div>
  <a href="#116824" class="name">
  <strong class="user"><em>g dot gentile at parentesigraffe dot com</em></strong></a><a class="genanchor" href="#116824"> &para;</a><div class="date" title="2015-03-05 09:02"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116824">
<div class="phpcode"><code><span class="html">The function behaves differently depending on whether the property has been present in the class declaration, or has been added dynamically, if the variable has been unset()<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">TestClass </span><span class="keyword">{<br /><br />    public </span><span class="default">$declared </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    <br />}<br /><br /></span><span class="default">$testObject </span><span class="keyword">= new </span><span class="default">TestClass</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="string">"TestClass"</span><span class="keyword">, </span><span class="string">"dynamic"</span><span class="keyword">)); </span><span class="comment">// boolean false, as expected<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$testObject</span><span class="keyword">, </span><span class="string">"dynamic"</span><span class="keyword">)); </span><span class="comment">// boolean false, same as above<br /><br /></span><span class="default">$testObject</span><span class="keyword">-&gt;</span><span class="default">dynamic </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$testObject</span><span class="keyword">, </span><span class="string">"dynamic"</span><span class="keyword">)); </span><span class="comment">// boolean true<br /><br /></span><span class="keyword">unset(</span><span class="default">$testObject</span><span class="keyword">-&gt;</span><span class="default">dynamic</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$testObject</span><span class="keyword">, </span><span class="string">"dynamic"</span><span class="keyword">)); </span><span class="comment">// boolean false, again.<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$testObject</span><span class="keyword">, </span><span class="string">"declared"</span><span class="keyword">)); </span><span class="comment">// boolean true, as espected<br /><br /></span><span class="keyword">unset(</span><span class="default">$testObject</span><span class="keyword">-&gt;</span><span class="default">declared</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$testObject</span><span class="keyword">, </span><span class="string">"declared"</span><span class="keyword">)); </span><span class="comment">// boolean true, even if has been unset()</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113125">  <div class="votes">
    <div id="Vu113125">
    <a href="/manual/vote-note.php?id=113125&amp;page=function.property-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113125">
    <a href="/manual/vote-note.php?id=113125&amp;page=function.property-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113125" title="74% like this...">
    25
    </div>
  </div>
  <a href="#113125" class="name">
  <strong class="user"><em>Stefan W</em></strong></a><a class="genanchor" href="#113125"> &para;</a><div class="date" title="2013-09-03 01:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113125">
<div class="phpcode"><code><span class="html">If you are in a namespaced file, and you want to pass the class name as a string, you will have to include the full namespace for the class name - even from inside the same namespace:<br /><br />&lt;?<br />namespace MyNS;<br /><br />class A {<br />    public $foo;<br />}<br /><br />property_exists("A", "foo");          // false<br />property_exists("\\MyNS\\A", "foo");  // true<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="114159">  <div class="votes">
    <div id="Vu114159">
    <a href="/manual/vote-note.php?id=114159&amp;page=function.property-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114159">
    <a href="/manual/vote-note.php?id=114159&amp;page=function.property-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114159" title="65% like this...">
    14
    </div>
  </div>
  <a href="#114159" class="name">
  <strong class="user"><em>Nanhe Kumar</em></strong></a><a class="genanchor" href="#114159"> &para;</a><div class="date" title="2014-01-17 10:39"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114159">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Student </span><span class="keyword">{<br /><br />    protected </span><span class="default">$_name</span><span class="keyword">;<br />    protected </span><span class="default">$_email</span><span class="keyword">;<br />    <br /><br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">) {<br />        </span><span class="default">$action </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />        switch (</span><span class="default">$action</span><span class="keyword">) {<br />            case </span><span class="string">'get'</span><span class="keyword">:<br />                </span><span class="default">$property </span><span class="keyword">= </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />                if(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">,</span><span class="default">$property</span><span class="keyword">)){<br />                    return </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">};<br />                }else{<br />                    echo </span><span class="string">"Undefined Property"</span><span class="keyword">;<br />                }<br />                break;<br />            case </span><span class="string">'set'</span><span class="keyword">:<br />                </span><span class="default">$property </span><span class="keyword">= </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />                if(</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">,</span><span class="default">$property</span><span class="keyword">)){<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">} = </span><span class="default">$arguments</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                }else{<br />                    echo </span><span class="string">"Undefined Property"</span><span class="keyword">;<br />                }<br />                <br />                break;<br />            default :<br />                return </span><span class="default">FALSE</span><span class="keyword">;<br />        }<br />    }<br /><br />}<br /><br /></span><span class="default">$s </span><span class="keyword">= new </span><span class="default">Student</span><span class="keyword">();<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">setName</span><span class="keyword">(</span><span class="string">'Nanhe Kumar'</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">setEmail</span><span class="keyword">(</span><span class="string">'nanhe.kumar@gmail.com'</span><span class="keyword">);<br />echo </span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(); </span><span class="comment">//Nanhe Kumar<br /></span><span class="keyword">echo </span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">getEmail</span><span class="keyword">(); </span><span class="comment">// nanhe.kumar@gmail.com<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">setAge</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">); </span><span class="comment">//Undefined Property<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114395">  <div class="votes">
    <div id="Vu114395">
    <a href="/manual/vote-note.php?id=114395&amp;page=function.property-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114395">
    <a href="/manual/vote-note.php?id=114395&amp;page=function.property-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114395" title="65% like this...">
    6
    </div>
  </div>
  <a href="#114395" class="name">
  <strong class="user"><em>ewisuri [gmail]</em></strong></a><a class="genanchor" href="#114395"> &para;</a><div class="date" title="2014-02-15 04:37"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114395">
<div class="phpcode"><code><span class="html">As of PHP 5.3.0, calling property_exists from a parent class sees private properties in sub-classes.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">P </span><span class="keyword">{<br />    public function </span><span class="default">test_prop</span><span class="keyword">(</span><span class="default">$prop</span><span class="keyword">) { return </span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$prop</span><span class="keyword">); }<br />}<br /><br />class </span><span class="default">Child </span><span class="keyword">extends </span><span class="default">P </span><span class="keyword">{<br />    private </span><span class="default">$prop1</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$child </span><span class="keyword">= new </span><span class="default">Child</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">test_prop</span><span class="keyword">(</span><span class="string">'prop1'</span><span class="keyword">)); </span><span class="comment">//true, as of PHP 5.3.0</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117359">  <div class="votes">
    <div id="Vu117359">
    <a href="/manual/vote-note.php?id=117359&amp;page=function.property-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117359">
    <a href="/manual/vote-note.php?id=117359&amp;page=function.property-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117359" title="56% like this...">
    4
    </div>
  </div>
  <a href="#117359" class="name">
  <strong class="user"><em>saurabh dot agarwal89 at gmail dot com</em></strong></a><a class="genanchor" href="#117359"> &para;</a><div class="date" title="2015-05-27 11:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117359">
<div class="phpcode"><code><span class="html">$a = array('a','b'=&gt;'c');<br />print_r((object) $a);<br />var_dump( property_exists((object) $a,'0'));<br />var_dump( property_exists((object) $a,'b'));<br /><br />OUTPUT:<br />stdClass Object<br />(<br />    [0] =&gt; a<br />    [b] =&gt; c<br />)<br />bool(false)<br />bool(true)</span></code></div>
  </div>
 </div>
  <div class="note" id="129001">  <div class="votes">
    <div id="Vu129001">
    <a href="/manual/vote-note.php?id=129001&amp;page=function.property-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129001">
    <a href="/manual/vote-note.php?id=129001&amp;page=function.property-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129001" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#129001" class="name">
  <strong class="user"><em>biziclop</em></strong></a><a class="genanchor" href="#129001"> &para;</a><div class="date" title="2023-11-05 05:05"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129001">
<div class="phpcode"><code><span class="html">I needed a method for finding out if accessing a property outside a class is possible without errors/warnings, considering that the class might use the magic methods __isset/__get to simulate nonexistent properties.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// returns true if property is safely accessible publicly by using $obj-&gt;$prop<br />// Tested with PHP 5.1 - 8.2, see <a href="https://3v4l.org/QBTd1" rel="nofollow" target="_blank">https://3v4l.org/QBTd1</a><br /></span><span class="keyword">function </span><span class="default">public_property_exists</span><span class="keyword">( </span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$prop </span><span class="keyword">){<br />  </span><span class="comment">// allow magic $obj-&gt;__isset( $prop ) to execute if exists<br />  </span><span class="keyword">if( isset( </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">$prop </span><span class="keyword">))  return </span><span class="default">true</span><span class="keyword">;<br />  <br />  </span><span class="comment">// no public/protected/private property exists with this name<br />  </span><span class="keyword">if( ! </span><span class="default">property_exists</span><span class="keyword">( </span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$prop </span><span class="keyword">))  return </span><span class="default">false</span><span class="keyword">;<br /><br />  </span><span class="comment">// the property exists, but is it public?<br />  </span><span class="default">$rp </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">( </span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$prop </span><span class="keyword">);<br />  return </span><span class="default">$rp</span><span class="keyword">-&gt;</span><span class="default">isPublic</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">//// Test/demo<br /></span><span class="keyword">class </span><span class="default">C </span><span class="keyword">{<br />  public    </span><span class="default">$public    </span><span class="keyword">= </span><span class="string">"I’m public!"</span><span class="keyword">;<br />  protected </span><span class="default">$protected </span><span class="keyword">= </span><span class="string">"I’m public!"</span><span class="keyword">;<br />  private   </span><span class="default">$private   </span><span class="keyword">= </span><span class="string">"I’m public!"</span><span class="keyword">;<br />  function </span><span class="default">__isset</span><span class="keyword">( </span><span class="default">$k </span><span class="keyword">){<br />    return </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$k</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">) === </span><span class="string">'magic'</span><span class="keyword">;<br />  }<br />  function </span><span class="default">__get</span><span class="keyword">( </span><span class="default">$k </span><span class="keyword">){<br />    if( </span><span class="default">$k </span><span class="keyword">=== </span><span class="string">'magic_isset_but_null'</span><span class="keyword">)  return </span><span class="default">null</span><span class="keyword">;<br />    return </span><span class="string">"I’m </span><span class="keyword">{</span><span class="default">$k</span><span class="keyword">}</span><span class="string">!"</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$o </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">();<br />foreach( array(<br />  </span><span class="string">'public'</span><span class="keyword">, </span><span class="string">'protected'</span><span class="keyword">, </span><span class="string">'private'</span><span class="keyword">,<br />  </span><span class="string">'magic'</span><span class="keyword">, </span><span class="string">'magic_isset_but_null'</span><span class="keyword">,<br />  </span><span class="string">'missing'<br /></span><span class="keyword">) as </span><span class="default">$prop </span><span class="keyword">){<br />  if( </span><span class="default">public_property_exists</span><span class="keyword">( </span><span class="default">$o</span><span class="keyword">, </span><span class="default">$prop </span><span class="keyword">))<br />        echo </span><span class="string">"\$o-&gt;</span><span class="keyword">{</span><span class="default">$prop</span><span class="keyword">}</span><span class="string"> is a public property, its value is: "</span><span class="keyword">,<br />             </span><span class="default">var_export</span><span class="keyword">( </span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">$prop</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />  else  echo </span><span class="string">"\$o-&gt;</span><span class="keyword">{</span><span class="default">$prop</span><span class="keyword">}</span><span class="string"> is not a public property.\n"</span><span class="keyword">;<br />}<br /></span><span class="comment">/*<br />$o-&gt;public    is a public property, its value is: 'I’m public!'<br />$o-&gt;protected is not a public property.<br />$o-&gt;private   is not a public property.<br />$o-&gt;magic     is a public property, its value is: 'I’m magic!'<br />$o-&gt;magic_isset_but_null is a public property, its value is: NULL<br />$o-&gt;missing   is not a public property.<br />*/</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.property-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.property-exists.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.classobj.php">Classes/Object Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-alias.php" title="class_&#8203;alias">class_&#8203;alias</a>
                        </li>
                                                <li class="">
                            <a href="function.class-exists.php" title="class_&#8203;exists">class_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.enum-exists.php" title="enum_&#8203;exists">enum_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.get-called-class.php" title="get_&#8203;called_&#8203;class">get_&#8203;called_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class.php" title="get_&#8203;class">get_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-methods.php" title="get_&#8203;class_&#8203;methods">get_&#8203;class_&#8203;methods</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-vars.php" title="get_&#8203;class_&#8203;vars">get_&#8203;class_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-classes.php" title="get_&#8203;declared_&#8203;classes">get_&#8203;declared_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-interfaces.php" title="get_&#8203;declared_&#8203;interfaces">get_&#8203;declared_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-traits.php" title="get_&#8203;declared_&#8203;traits">get_&#8203;declared_&#8203;traits</a>
                        </li>
                                                <li class="">
                            <a href="function.get-mangled-object-vars.php" title="get_&#8203;mangled_&#8203;object_&#8203;vars">get_&#8203;mangled_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-object-vars.php" title="get_&#8203;object_&#8203;vars">get_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-parent-class.php" title="get_&#8203;parent_&#8203;class">get_&#8203;parent_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.interface-exists.php" title="interface_&#8203;exists">interface_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.is-a.php" title="is_&#8203;a">is_&#8203;a</a>
                        </li>
                                                <li class="">
                            <a href="function.is-subclass-of.php" title="is_&#8203;subclass_&#8203;of">is_&#8203;subclass_&#8203;of</a>
                        </li>
                                                <li class="">
                            <a href="function.method-exists.php" title="method_&#8203;exists">method_&#8203;exists</a>
                        </li>
                                                <li class="current">
                            <a href="function.property-exists.php" title="property_&#8203;exists">property_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.trait-exists.php" title="trait_&#8203;exists">trait_&#8203;exists</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.autoload.php" title="_&#8203;_&#8203;autoload">_&#8203;_&#8203;autoload</a>
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
