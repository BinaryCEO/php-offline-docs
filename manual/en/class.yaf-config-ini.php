<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Yaf_Config_Ini - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.yaf-config-ini.php">
 <link rel="shorturl" href="https://www.php.net/yaf-config-ini">
 <link rel="alternate" href="https://www.php.net/yaf-config-ini" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.yaf.php">
 <link rel="prev" href="https://www.php.net/manual/en/yaf-config-abstract.toarray.php">
 <link rel="next" href="https://www.php.net/manual/en/yaf-config-ini.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.yaf-config-ini.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.yaf-config-ini.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.yaf-config-ini.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.yaf-config-ini.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.yaf-config-ini.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.yaf-config-ini.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.yaf-config-ini.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.yaf-config-ini.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.yaf-config-ini.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.yaf-config-ini.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.yaf-config-ini.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Yaf_Config_Ini class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Yaf_Config_Ini - Manual" />
<meta name="twitter:description" content="The Yaf_Config_Ini class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Yaf_Config_Ini - Manual" />
<meta itemprop="description" content="The Yaf_Config_Ini class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Yaf_Config_Ini class" />

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
        <a href="yaf-config-ini.construct.php">
          Yaf_Config_Ini::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="yaf-config-abstract.toarray.php">
          &laquo; Yaf_Config_Abstract::toArray        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.yaf.php'>Yaf</a></li>      </ul>
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
            <option value='en/class.yaf-config-ini.php' selected="selected">English</option>
            <option value='de/class.yaf-config-ini.php'>German</option>
            <option value='es/class.yaf-config-ini.php'>Spanish</option>
            <option value='fr/class.yaf-config-ini.php'>French</option>
            <option value='it/class.yaf-config-ini.php'>Italian</option>
            <option value='ja/class.yaf-config-ini.php'>Japanese</option>
            <option value='pt_BR/class.yaf-config-ini.php'>Brazilian Portuguese</option>
            <option value='ru/class.yaf-config-ini.php'>Russian</option>
            <option value='tr/class.yaf-config-ini.php'>Turkish</option>
            <option value='uk/class.yaf-config-ini.php'>Ukrainian</option>
            <option value='zh/class.yaf-config-ini.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.yaf-config-ini" class="reference">

 <h1 class="title">The Yaf_Config_Ini class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-config-ini.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
   Yaf_Config_Ini enables developers to store configuration data in a
   familiar INI format and read them in the application by using nested object
   property syntax. The INI format is specialized to provide both the ability
   to have a hierarchy of configuration data keys and inheritance between
   configuration data sections. Configuration data hierarchies are supported
   by separating the keys with the dot or period character (&quot;.&quot;). A section
   may extend or inherit from another section by following the section name
   with a colon character (&quot;:&quot;) and the name of the section from which data are
   to be inherited.    
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
   Yaf_Config_Ini utilizes the » parse_ini_file() PHP function. Please review
   this documentation to be aware of its specific behaviors, which propagate
   to Yaf_Config_Ini, such as how the special values of &quot;<strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>&quot;, &quot;<strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>&quot;,
   &quot;yes&quot;, &quot;no&quot;, and &quot;<strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>&quot; are handled. 
   </p>
  </p></blockquote>
  </p>
  </div>


  <div class="section" id="yaf-config-ini.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">Yaf_Config_Ini</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
       <a href="class.yaf-config-abstract.php" class="classname">Yaf_Config_Abstract</a>
     </span>
     
     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.iterator.php" class="interfacename">Iterator</a></span><span class="oointerface">,  <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a></span><span class="oointerface">,  <a href="class.countable.php" class="interfacename">Countable</a></span> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$config_file</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$section</code><span class="initializer"> = ?</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.get.php" class="methodname">__get</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.isset.php" class="methodname">__isset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.readonly.php" class="methodname">readonly</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.set.php" class="methodname">__set</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.toarray.php" class="methodname">toArray</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">abstract</span> <span class="modifier">public</span> <span class="methodname"><a href="yaf-config-abstract.get.php" class="methodname">Yaf_Config_Abstract::get</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">abstract</span> <span class="modifier">public</span> <span class="methodname"><a href="yaf-config-abstract.readonly.php" class="methodname">Yaf_Config_Abstract::readonly</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">abstract</span> <span class="modifier">public</span> <span class="methodname"><a href="yaf-config-abstract.set.php" class="methodname">Yaf_Config_Abstract::set</a></span>(): <span class="type"><a href="class.yaf-config-abstract.php" class="type Yaf_Config_Abstract">Yaf_Config_Abstract</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">abstract</span> <span class="modifier">public</span> <span class="methodname"><a href="yaf-config-abstract.toarray.php" class="methodname">Yaf_Config_Abstract::toArray</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>


   }</div>


  </div>

  

  <div class="section" id="yaf-config-ini.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="yaf-config-ini.props.config"><var class="varname">_config</var></dt>
     <dd>
      <p class="para"/>
     </dd>
    
    
     <dt id="yaf-config-ini.props.readonly"><var class="varname">_readonly</var></dt>
     <dd>
      <p class="para"/>
     </dd>
    
   </dl>
  </div>


 <div class="section">
  <h2 class="title">Examples</h2>
  <div class="example" id="example-4181">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Config_Ini()</strong></span>example</strong></p>
   <div class="example-contents"><p>
    This example illustrates a basic use of Yaf_Config_Ini for loading
    configuration data from an INI file. In this example there are
    configuration data for both a production system and for a staging system.
    Because the staging system configuration data are very similar to those
    for production, the staging section inherits from the production section.
    In this case, the decision is arbitrary and could have been written
    conversely, with the production section inheriting from the staging
    section, though this may not be the case for more complex situations.
    Suppose, then, that the following configuration data are contained in
    /path/to/config.ini:
   </p></div>
   <div class="example-contents">
<div class="inicode"><pre class="inicode">; Production site configuration data
[production]
webhost                  = www.example.com
database.adapter         = pdo_mysql
database.params.host     = db.example.com
database.params.username = dbuser
database.params.password = secret
database.params.dbname   = dbname
 
; Staging site configuration data inherits from production and
; overrides values as necessary
[staging : production]
database.params.host     = dev.example.com
database.params.username = devuser
database.params.password = devsecret</pre>
</div>
   </div>

   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$config </span><span style="color: #007700">= new </span><span style="color: #0000BB">Yaf_Config_Ini</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/config.ini'</span><span style="color: #007700">, </span><span style="color: #DD0000">'staging'</span><span style="color: #007700">);<br /> <br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">database</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">host</span><span style="color: #007700">); <br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">database</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbname</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">"database.params.username"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(15) &quot;dev.example.com&quot;
string(6) &quot;dbname&quot;
string(7) &quot;devuser
</pre></div>
   </div>
  </div>
  </div>

 </div>

 
















































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-config-ini.construct.php">Yaf_Config_Ini::__construct</a> — Yaf_Config_Ini constructor</li><li><a href="yaf-config-ini.count.php">Yaf_Config_Ini::count</a> — Count all elements in Yaf_Config.ini</li><li><a href="yaf-config-ini.current.php">Yaf_Config_Ini::current</a> — Retrieve the current value</li><li><a href="yaf-config-ini.get.php">Yaf_Config_Ini::__get</a> — Retrieve a element</li><li><a href="yaf-config-ini.isset.php">Yaf_Config_Ini::__isset</a> — Determine if a key is exists</li><li><a href="yaf-config-ini.key.php">Yaf_Config_Ini::key</a> — Fetch current element's key</li><li><a href="yaf-config-ini.next.php">Yaf_Config_Ini::next</a> — Advance the internal pointer</li><li><a href="yaf-config-ini.offsetexists.php">Yaf_Config_Ini::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-config-ini.offsetget.php">Yaf_Config_Ini::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-config-ini.offsetset.php">Yaf_Config_Ini::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-config-ini.offsetunset.php">Yaf_Config_Ini::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-config-ini.readonly.php">Yaf_Config_Ini::readonly</a> — The readonly purpose</li><li><a href="yaf-config-ini.rewind.php">Yaf_Config_Ini::rewind</a> — The rewind purpose</li><li><a href="yaf-config-ini.set.php">Yaf_Config_Ini::__set</a> — The __set purpose</li><li><a href="yaf-config-ini.toarray.php">Yaf_Config_Ini::toArray</a> — Return config as a PHP array</li><li><a href="yaf-config-ini.valid.php">Yaf_Config_Ini::valid</a> — The valid purpose</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/yaf/yaf-config-ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.yaf-config-ini%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.yaf-config-ini&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.yaf-config-ini.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114948">  <div class="votes">
    <div id="Vu114948">
    <a href="/manual/vote-note.php?id=114948&amp;page=class.yaf-config-ini&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114948">
    <a href="/manual/vote-note.php?id=114948&amp;page=class.yaf-config-ini&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114948" title="75% like this...">
    2
    </div>
  </div>
  <a href="#114948" class="name">
  <strong class="user"><em>lee dot howarth dot 90 at gmail dot com</em></strong></a><a class="genanchor" href="#114948"> &para;</a><div class="date" title="2014-05-02 09:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114948">
<div class="phpcode"><code><span class="html">@flowithwind <br /><br />var_dump($config -&gt; toArray()[ 'type' ][ 18 ][ 'text' ]);<br /><br />string 'abc' (length=3)</span></code></div>
  </div>
 </div>
  <div class="note" id="116819">  <div class="votes">
    <div id="Vu116819">
    <a href="/manual/vote-note.php?id=116819&amp;page=class.yaf-config-ini&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116819">
    <a href="/manual/vote-note.php?id=116819&amp;page=class.yaf-config-ini&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116819" title="66% like this...">
    1
    </div>
  </div>
  <a href="#116819" class="name">
  <strong class="user"><em>zzxiaoman at gmail dot com</em></strong></a><a class="genanchor" href="#116819"> &para;</a><div class="date" title="2015-03-04 03:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116819">
<div class="phpcode"><code><span class="html">when i use Yaf_Config_ini with these lines:<br /><br />type.18.text=abc<br />type.8.text=ddf<br />type.0.text=fjdsklf<br /><br />You can through this way<br /><br />$$configArr = $config-&gt;toArray();<br />var_dump($configArr['type'][18]['text']);<br /><br />result:<br />abc</span></code></div>
  </div>
 </div>
  <div class="note" id="116442">  <div class="votes">
    <div id="Vu116442">
    <a href="/manual/vote-note.php?id=116442&amp;page=class.yaf-config-ini&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116442">
    <a href="/manual/vote-note.php?id=116442&amp;page=class.yaf-config-ini&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116442" title="66% like this...">
    1
    </div>
  </div>
  <a href="#116442" class="name">
  <strong class="user"><em>Mark</em></strong></a><a class="genanchor" href="#116442"> &para;</a><div class="date" title="2015-01-03 08:59"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116442">
<div class="phpcode"><code><span class="html">/conf/db.ini<br /><br />[product]<br />database.params.host           = localhost<br />database.params.port           = 5432 <br />database.params.dbname    = postgres<br />database.params.username = 'postgres'<br />database.params.password  = 123456<br /><br /><span class="default">&lt;?php<br />       $config  </span><span class="keyword">= new </span><span class="default">Yaf_Config_ini</span><span class="keyword">(</span><span class="string">'../conf/db.ini'</span><span class="keyword">,</span><span class="string">'product'</span><span class="keyword">);<br />        </span><span class="default">$config </span><span class="keyword">= </span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">toArray</span><span class="keyword">();<br />        </span><span class="default">$host       </span><span class="keyword">=   </span><span class="default">$config</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'params'</span><span class="keyword">][</span><span class="string">'host'</span><span class="keyword">];<br />        </span><span class="default">$port       </span><span class="keyword">=   </span><span class="default">$config</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'params'</span><span class="keyword">][</span><span class="string">'port'</span><span class="keyword">];<br />        </span><span class="default">$database   </span><span class="keyword">=   </span><span class="default">$config</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'params'</span><span class="keyword">][</span><span class="string">'dbname'</span><span class="keyword">];<br />        </span><span class="default">$username        </span><span class="keyword">=   </span><span class="default">$config</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'params'</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">];        <br />        </span><span class="default">$password   </span><span class="keyword">=   </span><span class="default">$config</span><span class="keyword">[</span><span class="string">'database'</span><span class="keyword">][</span><span class="string">'params'</span><span class="keyword">][</span><span class="string">'password'</span><span class="keyword">]; <br />        </span><span class="default">$pg_conn </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">"host='</span><span class="default">$host</span><span class="string">' port='</span><span class="default">$port</span><span class="string">' dbname='</span><span class="default">$database</span><span class="string">'  user='</span><span class="default">$username</span><span class="string">' password='</span><span class="default">$password</span><span class="string">' "</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.yaf-config-ini&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.yaf-config-ini.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.yaf.php">Yaf</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.yaf.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="yaf.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="yaf.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="yaf.tutorials.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="yaf.appconfig.php" title="Application Configuration">Application Configuration</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-application.php" title="Yaf_&#8203;Application">Yaf_&#8203;Application</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-bootstrap-abstract.php" title="Yaf_&#8203;Bootstrap_&#8203;Abstract">Yaf_&#8203;Bootstrap_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-dispatcher.php" title="Yaf_&#8203;Dispatcher">Yaf_&#8203;Dispatcher</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-config-abstract.php" title="Yaf_&#8203;Config_&#8203;Abstract">Yaf_&#8203;Config_&#8203;Abstract</a>
                        </li>
                                                <li class="current">
                            <a href="class.yaf-config-ini.php" title="Yaf_&#8203;Config_&#8203;Ini">Yaf_&#8203;Config_&#8203;Ini</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-config-simple.php" title="Yaf_&#8203;Config_&#8203;Simple">Yaf_&#8203;Config_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-controller-abstract.php" title="Yaf_&#8203;Controller_&#8203;Abstract">Yaf_&#8203;Controller_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-action-abstract.php" title="Yaf_&#8203;Action_&#8203;Abstract">Yaf_&#8203;Action_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-view-interface.php" title="Yaf_&#8203;View_&#8203;Interface">Yaf_&#8203;View_&#8203;Interface</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-view-simple.php" title="Yaf_&#8203;View_&#8203;Simple">Yaf_&#8203;View_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-loader.php" title="Yaf_&#8203;Loader">Yaf_&#8203;Loader</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-plugin-abstract.php" title="Yaf_&#8203;Plugin_&#8203;Abstract">Yaf_&#8203;Plugin_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-registry.php" title="Yaf_&#8203;Registry">Yaf_&#8203;Registry</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-request-abstract.php" title="Yaf_&#8203;Request_&#8203;Abstract">Yaf_&#8203;Request_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-request-http.php" title="Yaf_&#8203;Request_&#8203;Http">Yaf_&#8203;Request_&#8203;Http</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-request-simple.php" title="Yaf_&#8203;Request_&#8203;Simple">Yaf_&#8203;Request_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-response-abstract.php" title="Yaf_&#8203;Response_&#8203;Abstract">Yaf_&#8203;Response_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-interface.php" title="Yaf_&#8203;Route_&#8203;Interface">Yaf_&#8203;Route_&#8203;Interface</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-map.php" title="Yaf_&#8203;Route_&#8203;Map">Yaf_&#8203;Route_&#8203;Map</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-regex.php" title="Yaf_&#8203;Route_&#8203;Regex">Yaf_&#8203;Route_&#8203;Regex</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-rewrite.php" title="Yaf_&#8203;Route_&#8203;Rewrite">Yaf_&#8203;Route_&#8203;Rewrite</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-router.php" title="Yaf_&#8203;Router">Yaf_&#8203;Router</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-simple.php" title="Yaf_&#8203;Route_&#8203;Simple">Yaf_&#8203;Route_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-static.php" title="Yaf_&#8203;Route_&#8203;Static">Yaf_&#8203;Route_&#8203;Static</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-supervar.php" title="Yaf_&#8203;Route_&#8203;Supervar">Yaf_&#8203;Route_&#8203;Supervar</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-session.php" title="Yaf_&#8203;Session">Yaf_&#8203;Session</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception.php" title="Yaf_&#8203;Exception">Yaf_&#8203;Exception</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-typeerror.php" title="Yaf_&#8203;Exception_&#8203;TypeError">Yaf_&#8203;Exception_&#8203;TypeError</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-startuperror.php" title="Yaf_&#8203;Exception_&#8203;StartupError">Yaf_&#8203;Exception_&#8203;StartupError</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-dispatchfailed.php" title="Yaf_&#8203;Exception_&#8203;DispatchFailed">Yaf_&#8203;Exception_&#8203;DispatchFailed</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-routerfailed.php" title="Yaf_&#8203;Exception_&#8203;RouterFailed">Yaf_&#8203;Exception_&#8203;RouterFailed</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed">Yaf_&#8203;Exception_&#8203;LoadFailed</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed-module.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Module">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Module</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed-controller.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Controller">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Controller</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed-action.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Action">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Action</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed-view.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;View">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;View</a>
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
