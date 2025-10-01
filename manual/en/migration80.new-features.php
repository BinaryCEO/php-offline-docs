<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: New Features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration80.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration80.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration80.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration80.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration80.php">
 <link rel="next" href="https://www.php.net/manual/en/migration80.new-classes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration80.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration80.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration80.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration80.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration80.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration80.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration80.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration80.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration80.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration80.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration80.new-features.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="New Features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: New Features - Manual" />
<meta name="twitter:description" content="New Features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: New Features - Manual" />
<meta itemprop="description" content="New Features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="New Features" />

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
        <a href="migration80.new-classes.php">
          New Classes and Interfaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration80.php">
          &laquo; Migrating from PHP 7.4.x to PHP 8.0.x        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration80.php'>Migrating from PHP 7.4.x to PHP 8.0.x</a></li>      </ul>
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
            <option value='en/migration80.new-features.php' selected="selected">English</option>
            <option value='de/migration80.new-features.php'>German</option>
            <option value='es/migration80.new-features.php'>Spanish</option>
            <option value='fr/migration80.new-features.php'>French</option>
            <option value='it/migration80.new-features.php'>Italian</option>
            <option value='ja/migration80.new-features.php'>Japanese</option>
            <option value='pt_BR/migration80.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration80.new-features.php'>Russian</option>
            <option value='tr/migration80.new-features.php'>Turkish</option>
            <option value='uk/migration80.new-features.php'>Ukrainian</option>
            <option value='zh/migration80.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration80.new-features" class="sect1">
 <h2 class="title">New Features</h2>

 <div class="sect2" id="migration80.new-features.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration80.new-features.core.named-arguments">
   <h4 class="title">Named Arguments</h4>

   <p class="para">
    
    Support for <a href="functions.arguments.php#functions.named-arguments" class="link">Named Arguments</a> has been added.
   </p>
  </div>

  <div class="sect3" id="migration80.new-features.core.attributes">
   <h4 class="title">Attributes</h4>

   <p class="para">
    Support for <a href="language.attributes.php" class="link">Attributes</a> has been added.
    
    
    
    
   </p>
  </div>

  <div class="sect3" id="migration80.new-features.core.property-promotion">
   <h4 class="title">Constructor Property Promotion</h4>

   <p class="para">
    Support for <a href="language.oop5.decon.php#language.oop5.decon.constructor.promotion" class="link">constructor property promotion</a> (declaring properties in the constructor signature)
    has been added.
    
   </p>
  </div>

  <div class="sect3" id="migration80.new-features.core.union-types">
   <h4 class="title">Union Types</h4>

   <p class="para">
    Support for <a href="language.types.declarations.php#language.types.declarations.composite.union" class="link">union types</a> has been added.
    
   </p> 
  </div>

  <div class="sect3" id="migration80.new-features.core.match">
   <h4 class="title">Match Expression</h4>

   <p class="para">
    Support for <a href="control-structures.match.php" class="link"><code class="literal">match</code> expressions</a> has been added.
    
   </p>
  </div>

  <div class="sect3" id="migration80.new-features.core.nullsafe-operator">
   <h4 class="title">Nullsafe Operator</h4>

   <p class="para">
    Support for the <a href="language.oop5.basic.php#language.oop5.basic.nullsafe" class="link">nullsafe operator</a> (<code class="literal">?-&gt;</code>) has been added.
    
   </p>
  </div>

  <div class="sect3" id="migration80.new-features.core.others">
   <h4 class="title">Other new Features</h4>

   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      The <a href="class.weakmap.php" class="link">WeakMap</a> class has been added.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      The <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> class has been added.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Any number of function parameters may now be replaced by a variadic argument, as long as the
      types are compatible. For example, the following code is now allowed:
     </p>
     <p class="para">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />     public function </span><span style="color: #0000BB">method</span><span style="color: #007700">(</span><span style="color: #0000BB">int $many</span><span style="color: #007700">, </span><span style="color: #0000BB">string $parameters</span><span style="color: #007700">, </span><span style="color: #0000BB">$here</span><span style="color: #007700">) {}<br />}<br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />     public function </span><span style="color: #0000BB">method</span><span style="color: #007700">(...</span><span style="color: #0000BB">$everything</span><span style="color: #007700">) {}<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <span class="type">static</span> (as in &quot;late static binding&quot;) can now be used as a return type:
     </p>
     <p class="para">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />     public function </span><span style="color: #0000BB">create</span><span style="color: #007700">(): static {<br />          return new static();<br />     }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      It is now possible to fetch the class name of an object using
      <code class="code">$object::class</code>. The result is the same as <code class="code">get_class($object)</code>.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <a href="language.oop5.basic.php#language.oop5.basic.new" class="link"><code class="literal">new</code></a> and <a href="language.operators.type.php" class="link"><code class="literal">instanceof</code></a> can now be used with arbitrary expressions,
      using <code class="code">new (expression)(...$args)</code> and <code class="code">$obj instanceof (expression)</code>.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Some consistency fixes to variable syntax have been applied, for example writing
      <code class="code">Foo::BAR::$baz</code> is now allowed.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Added <span class="interfacename"><a href="class.stringable.php" class="interfacename">Stringable</a></span> interface, which is automatically implemented if
      a class defines a <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a> method.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Traits can now define abstract private methods.
      Such methods must be implemented by the class using the trait.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <code class="literal">throw</code> can now be used as an expression.
      That allows usages like:
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fn </span><span style="color: #007700">= fn() =&gt; throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Exception in arrow function'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #0000BB">$session</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">user </span><span style="color: #007700">?? throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Must have user'</span><span style="color: #007700">);</span></span></code></div>
      </div>

      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      An optional trailing comma is now allowed in parameter lists.
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">functionWithLongSignature</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">Type1 $parameter1</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">Type2 $parameter2</span><span style="color: #007700">, </span><span style="color: #FF8000">// &lt;-- This comma is now allowed.<br /></span><span style="color: #007700">) {<br />}</span></span></code></div>
      </div>

      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      It is now possible to write <code class="code">catch (Exception)</code> to catch an exception without storing
      it in a variable.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Support for <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> type has been added.
      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Private methods declared on a parent class no longer enforce any inheritance rules on the methods
      of a child class (with the exception of final private constructors).
      The following example illustrates which restrictions have been removed:
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ParentClass </span><span style="color: #007700">{<br />    private function </span><span style="color: #0000BB">method1</span><span style="color: #007700">() {}<br />    private function </span><span style="color: #0000BB">method2</span><span style="color: #007700">() {}<br />    private static function </span><span style="color: #0000BB">method3</span><span style="color: #007700">() {}<br />    </span><span style="color: #FF8000">// Throws a warning, as "final" no longer has an effect:<br />    </span><span style="color: #007700">private final function </span><span style="color: #0000BB">method4</span><span style="color: #007700">() {}<br />}<br />class </span><span style="color: #0000BB">ChildClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">ParentClass </span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// All of the following are now allowed, even though the modifiers aren't<br />    // the same as for the private methods in the parent class.<br />    </span><span style="color: #007700">public abstract function </span><span style="color: #0000BB">method1</span><span style="color: #007700">() {}<br />    public static function </span><span style="color: #0000BB">method2</span><span style="color: #007700">() {}<br />    public function </span><span style="color: #0000BB">method3</span><span style="color: #007700">() {}<br />    public function </span><span style="color: #0000BB">method4</span><span style="color: #007700">() {}<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <span class="function"><a href="function.get-resource-id.php" class="function">get_resource_id()</a></span> has been added, which returns the same value as
      <code class="code">(int) $resource</code>. It provides the same functionality under a clearer API.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      The <span class="classname"><a href="class.internaliterator.php" class="classname">InternalIterator</a></span> has been added.
     </p>
    </li>
   </ul>
  </div>
 </div>

 <div class="sect2" id="migration80.new-features.date">
  <h3 class="title">Date and Time</h3>
  
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     <span class="methodname"><a href="datetime.createfrominterface.php" class="methodname">DateTime::createFromInterface()</a></span> and
     <span class="methodname"><a href="datetimeimmutable.createfrominterface.php" class="methodname">DateTimeImmutable::createFromInterface()</a></span> have been added.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The DateTime format specifier <code class="literal">p</code> has been added, which is the same as
     <code class="literal">P</code> but returns <code class="literal">Z</code> rather than <code class="literal">+00:00</code>
     for UTC.
    </p>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration80.new-features.dom">
  <h3 class="title">DOM</h3>

  <p class="para">
   <span class="interfacename"><a href="class.domparentnode.php" class="interfacename">DOMParentNode</a></span> and <span class="interfacename"><a href="class.domchildnode.php" class="interfacename">DOMChildNode</a></span> with
   new traversal and manipulation APIs have been added.
   
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.filter">
  <h3 class="title">Filter</h3>

  <p class="para">
   <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_BOOL</a></code></strong> has been added as an alias for
   <strong><code><a href="filter.constants.php#constant.filter-validate-boolean">FILTER_VALIDATE_BOOLEAN</a></code></strong>. The new name is preferred, as it uses the canonical
   type name.
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.enchant">
  <h3 class="title">Enchant</h3>

  <p class="para">
   <span class="function"><a href="function.enchant-dict-add.php" class="function">enchant_dict_add()</a></span>, <span class="function"><a href="function.enchant-dict-is-added.php" class="function">enchant_dict_is_added()</a></span>, and
   <strong><code><a href="enchant.constants.php#constant.libenchant-version">LIBENCHANT_VERSION</a></code></strong> have been added.
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.fpm">
  <h3 class="title">FPM</h3>

  <p class="para">
   Added a new option <code class="literal">pm.status_listen</code> that allows getting the status from
   different endpoint (e.g. port or UDS file) which is useful for getting the status when all
   children are busy with serving long running requests.
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.hash">
  <h3 class="title">Hash</h3>

  <p class="para">
   <span class="classname"><a href="class.hashcontext.php" class="classname">HashContext</a></span> objects can now be serialized.
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.intl">
  <h3 class="title">Internationalization Functions</h3>

  <p class="para">
   The <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-full">IntlDateFormatter::RELATIVE_FULL</a></code></strong>,
   <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-long">IntlDateFormatter::RELATIVE_LONG</a></code></strong>,
   <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-medium">IntlDateFormatter::RELATIVE_MEDIUM</a></code></strong>, and
   <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-short">IntlDateFormatter::RELATIVE_SHORT</a></code></strong>
   constants have been added.
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.ldap">
  <h3 class="title">LDAP</h3>

  <p class="para">
   <span class="function"><a href="function.ldap-count-references.php" class="function">ldap_count_references()</a></span> has been added, which returns the number
   of reference messages in a search result.
  </p>
 </div>
 <div class="sect2" id="migration80.new-features.opcache">
  <h3 class="title">OPcache</h3>

  <p class="para">
   If the opcache.record_warnings ini setting is
   enabled, OPcache will record compile-time warnings and replay them on the next include, even if
   it is served from cache.
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.openssl">
  <h3 class="title">OpenSSL</h3>

  <p class="para">
   Added Cryptographic Message Syntax (CMS) (<a href="https://datatracker.ietf.org/doc/html/rfc5652" class="link external">&raquo;&nbsp;RFC 5652</a>)
   support composed of functions for encryption, decryption, signing, verifying and reading. The API
   is similar to the API for <abbr title="Public Key Cryptography Standards">PKCS</abbr> #7 functions with an addition of new encoding constants:
   <strong><code><a href="openssl.constants.other.php#constant.openssl-encoding-der">OPENSSL_ENCODING_DER</a></code></strong>, <strong><code><a href="openssl.constants.other.php#constant.openssl-encoding-smime">OPENSSL_ENCODING_SMIME</a></code></strong>
   and <strong><code><a href="openssl.constants.other.php#constant.openssl-encoding-pem">OPENSSL_ENCODING_PEM</a></code></strong>:
   <ul class="simplelist">
    <li>
     <span class="function"><a href="function.openssl-cms-encrypt.php" class="function">openssl_cms_encrypt()</a></span> encrypts the message in the file with the certificates
     and outputs the result to the supplied file.
    </li>
    <li>
     <span class="function"><a href="function.openssl-cms-decrypt.php" class="function">openssl_cms_decrypt()</a></span> that decrypts the S/MIME message in the file and outputs
     the results to the supplied file.
    </li>
    <li>
     <span class="function"><a href="function.openssl-cms-read.php" class="function">openssl_cms_read()</a></span> that exports the CMS file to an array
     of <abbr title="Privacy-Enhanced Mail">PEM</abbr> certificates.
    </li>
    <li>
     <span class="function"><a href="function.openssl-cms-sign.php" class="function">openssl_cms_sign()</a></span> that signs the MIME message in the file with a cert and key
     and output the result to the supplied file.
    </li>
    <li>
     <span class="function"><a href="function.openssl-cms-verify.php" class="function">openssl_cms_verify()</a></span> that verifies that the data block is intact, the signer
     is who they say they are, and returns the certs of the signers.
    </li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.pcre">
  <h3 class="title">Regular Expressions (Perl-Compatible)</h3>

  <p class="para">
   <span class="function"><a href="function.preg-last-error-msg.php" class="function">preg_last_error_msg()</a></span> has been added, which returns a human-readable message for the last
   PCRE error. It complements <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span>, which returns an integer enum value
   instead.
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.reflection">
  <h3 class="title">Reflection</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     The following methods can now return information about default values of
     parameters of internal functions:
    </p>
    <p class="para">
     <ul class="simplelist">
      <li><span class="methodname"><a href="reflectionparameter.isdefaultvalueavailable.php" class="methodname">ReflectionParameter::isDefaultValueAvailable()</a></span></li>
      <li><span class="methodname"><a href="reflectionparameter.getdefaultvalue.php" class="methodname">ReflectionParameter::getDefaultValue()</a></span></li>
      <li><span class="methodname"><a href="reflectionparameter.isdefaultvalueconstant.php" class="methodname">ReflectionParameter::isDefaultValueConstant()</a></span></li>
      <li><span class="methodname"><a href="reflectionparameter.getdefaultvalueconstantname.php" class="methodname">ReflectionParameter::getDefaultValueConstantName()</a></span></li>
     </ul>
    </p>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration80.new-features.sqlite3">
  <h3 class="title">SQLite3</h3>

  <p class="para">
   <span class="methodname"><a href="sqlite3.setauthorizer.php" class="methodname">SQLite3::setAuthorizer()</a></span> and respective class constants have been added
   to set a userland callback that will be used to authorize or not an action on the database.
   
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.standard">
  <h3 class="title">Standard Library</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.str-contains.php" class="function">str_contains()</a></span>, <span class="function"><a href="function.str-starts-with.php" class="function">str_starts_with()</a></span> and
     <span class="function"><a href="function.str-ends-with.php" class="function">str_ends_with()</a></span> have been added, which check whether <code class="parameter">haystack</code> contains,
     starts with or ends with <code class="parameter">needle</code>, respectively.
     
     
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.fdiv.php" class="function">fdiv()</a></span> has been added, which performs a floating-point division under IEEE 754 semantics.
     Division by zero is considered well-defined and will return one of <code class="literal">Inf</code>,
     <code class="literal">-Inf</code> or <code class="literal">NaN</code>.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.get-debug-type.php" class="function">get_debug_type()</a></span> has been added, which returns a type useful for error messages. Unlike
     <span class="function"><a href="function.gettype.php" class="function">gettype()</a></span>, it uses canonical type names, returns class names for objects, and
     indicates the resource type for resources.
     
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.printf.php" class="function">printf()</a></span> and friends now support the <code class="literal">%h</code> and
     <code class="literal">%H</code> format specifiers. These are the same as <code class="literal">%g</code> and
     <code class="literal">%G</code>, but always use <code class="literal">&quot;.&quot;</code> as the decimal separator, rather
     than determining it through the <strong><code><a href="string.constants.php#constant.lc-numeric">LC_NUMERIC</a></code></strong> locale.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.printf.php" class="function">printf()</a></span> and friends now support using <code class="literal">&quot;*&quot;</code> as width or
     precision, in which case the width/precision is passed as an argument to printf. This also allows
     using precision <code class="literal">-1</code> with <code class="literal">%g</code>, <code class="literal">%G</code>,
     <code class="literal">%h</code> and <code class="literal">%H</code>. For example, the following code can be used to
     reproduce PHP&#039;s default floating point formatting:
    </p>
    <p class="para">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%.*H"</span><span style="color: #007700">, (int) </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"precision"</span><span style="color: #007700">), </span><span style="color: #0000BB">$float</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%.*H"</span><span style="color: #007700">, (int) </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"serialize_precision"</span><span style="color: #007700">), </span><span style="color: #0000BB">$float</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> now supports pseudo-terminal (PTY) descriptors. The following
     attaches <code class="literal">stdin</code>, <code class="literal">stdout</code> and <code class="literal">stderr</code> to the
     same PTY:
    </p>
    <p class="para">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$proc </span><span style="color: #007700">= </span><span style="color: #0000BB">proc_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">, [[</span><span style="color: #DD0000">'pty'</span><span style="color: #007700">], [</span><span style="color: #DD0000">'pty'</span><span style="color: #007700">], [</span><span style="color: #DD0000">'pty'</span><span style="color: #007700">]], </span><span style="color: #0000BB">$pipes</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> now supports socket pair descriptors. The following attaches a
     distinct socket pair to <code class="literal">stdin</code>, <code class="literal">stdout</code> and
     <code class="literal">stderr</code>:
    </p>
    <p class="para">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$proc </span><span style="color: #007700">= </span><span style="color: #0000BB">proc_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">, [[</span><span style="color: #DD0000">'socket'</span><span style="color: #007700">], [</span><span style="color: #DD0000">'socket'</span><span style="color: #007700">], [</span><span style="color: #DD0000">'socket'</span><span style="color: #007700">]], </span><span style="color: #0000BB">$pipes</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </p>
    <p class="para">
     Unlike pipes, sockets do not suffer from blocking I/O issues on Windows. However, not all
     programs may work correctly with stdio sockets.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Sorting functions are now stable, which means that equal-comparing elements will retain their
     original order.
     
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.array-diff.php" class="function">array_diff()</a></span>, <span class="function"><a href="function.array-intersect.php" class="function">array_intersect()</a></span> and their variations can
     now be used with a single array as argument. This means that usages like the following are now
     possible:
    </p>
    <p class="para">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// OK even if $excludes is empty:<br /></span><span style="color: #0000BB">array_diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">, ...</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// OK even if $arrays only contains a single array:<br /></span><span style="color: #0000BB">array_intersect</span><span style="color: #007700">(...</span><span style="color: #0000BB">$arrays</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <code class="parameter">flag</code> parameter of <span class="function"><a href="function.ob-implicit-flush.php" class="function">ob_implicit_flush()</a></span> was changed
     to accept a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> rather than an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
    </p>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration80.new-features.tokenizer">
  <h3 class="title">Tokenizer</h3>

  <p class="para">
   <span class="classname"><a href="class.phptoken.php" class="classname">PhpToken</a></span> adds an object-based interface to the tokenizer. It provides a
   more uniform and ergonomic representation, while being more memory efficient and faster.
   
  </p>
 </div>

 <div class="sect2" id="migration80.new-features.zip">
  <h3 class="title">Zip</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     The Zip extension has been updated to version 1.19.1.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     New <span class="methodname"><a href="ziparchive.setmtimename.php" class="methodname">ZipArchive::setMtimeName()</a></span> and
     <span class="methodname"><a href="ziparchive.setmtimeindex.php" class="methodname">ZipArchive::setMtimeIndex()</a></span> to set the modification time of an entry.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     New <span class="methodname"><a href="ziparchive.registerprogresscallback.php" class="methodname">ZipArchive::registerProgressCallback()</a></span> to provide updates during archive close.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     New <span class="methodname"><a href="ziparchive.registercancelcallback.php" class="methodname">ZipArchive::registerCancelCallback()</a></span> to allow cancellation during archive
     close.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     New <span class="methodname"><a href="ziparchive.replacefile.php" class="methodname">ZipArchive::replaceFile()</a></span> to replace an entry content.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     New <span class="methodname"><a href="ziparchive.iscompressionmethoddupported.php" class="methodname">ZipArchive::isCompressionMethodSupported()</a></span> to check optional compression
     features.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     New <span class="methodname"><a href="ziparchive.isencryptionmethoddupported.php" class="methodname">ZipArchive::isEncryptionMethodSupported()</a></span> to check optional encryption
     features.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <var class="varname">ZipArchive::lastId</var> property to get the index value of
     the last added entry has been added.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Errors can now be checked after an archive has been closed using the
     <var class="varname">ZipArchive::status</var> and
     <var class="varname">ZipArchive::statusSys</var> properties, or the
     <span class="methodname"><a href="ziparchive.getstatusstring.php" class="methodname">ZipArchive::getStatusString()</a></span> method.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <code class="literal">&#039;remove_path&#039;</code> option of <span class="methodname"><a href="ziparchive.addglob.php" class="methodname">ZipArchive::addGlob()</a></span> and
     <span class="methodname"><a href="ziparchive.addpattern.php" class="methodname">ZipArchive::addPattern()</a></span> is now treated as an arbitrary string prefix (for
     consistency with the <code class="literal">&#039;add_path&#039;</code> option), whereas formerly it was treated as a
     directory name.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Optional compression / encryption features are now listed in phpinfo.
    </p>
   </li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration80/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration80.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration80.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration80.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration80.php">Migrating from PHP 7.4.x to PHP 8.0.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="migration80.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration80.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration80.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration80.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration80.other-changes.php" title="Other Changes">Other Changes</a>
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
