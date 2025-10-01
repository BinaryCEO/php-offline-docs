<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Type - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.type.php">
 <link rel="shorturl" href="https://www.php.net/operators.type">
 <link rel="alternate" href="https://www.php.net/operators.type" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.array.php">
 <link rel="next" href="https://www.php.net/manual/en/language.control-structures.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.type.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.type.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.type.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.type.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.type.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.type.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.type.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.type.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.type.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.type.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.type.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Type Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Type - Manual" />
<meta name="twitter:description" content="Type Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Type - Manual" />
<meta itemprop="description" content="Type Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Type Operators" />

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
        <a href="language.control-structures.php">
          Control Structures &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.array.php">
          &laquo; Array        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.operators.php'>Operators</a></li>      </ul>
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
            <option value='en/language.operators.type.php' selected="selected">English</option>
            <option value='de/language.operators.type.php'>German</option>
            <option value='es/language.operators.type.php'>Spanish</option>
            <option value='fr/language.operators.type.php'>French</option>
            <option value='it/language.operators.type.php'>Italian</option>
            <option value='ja/language.operators.type.php'>Japanese</option>
            <option value='pt_BR/language.operators.type.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.type.php'>Russian</option>
            <option value='tr/language.operators.type.php'>Turkish</option>
            <option value='uk/language.operators.type.php'>Ukrainian</option>
            <option value='zh/language.operators.type.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.type" class="sect1">
 <h2 class="title">Type Operators</h2>
 
 <p class="para">
  <code class="literal">instanceof</code> is used to determine whether a PHP variable
  is an instantiated object of a certain
  <a href="language.oop5.basic.php#language.oop5.basic.class" class="link">class</a>:
  <div class="example" id="example-181">
   <p><strong>Example #1 Using <code class="literal">instanceof</code> with classes</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />}<br /><br />class </span><span style="color: #0000BB">NotMyClass<br /></span><span style="color: #007700">{<br />}<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">NotMyClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(false)
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  <code class="literal">instanceof</code> can also be used to determine whether a variable
  is an instantiated object of a class that inherits from a parent class:
  <div class="example" id="example-182">
   <p><strong>Example #2 Using <code class="literal">instanceof</code> with inherited classes</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ParentClass<br /></span><span style="color: #007700">{<br />}<br /><br />class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">ParentClass<br /></span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">ParentClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(true)
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  To check if an object is <em>not</em> an instanceof a class, the
  <a href="language.operators.logical.php" class="link">logical <code class="literal">not</code>
   operator</a> can be used.
  <div class="example" id="example-183">
   <p><strong>Example #3 Using <code class="literal">instanceof</code> to check if object is <em>not</em> an
    instanceof a class</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(!(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  Lastly, <code class="literal">instanceof</code> can also be used to determine whether
  a variable is an instantiated object of a class that implements an
  <a href="language.oop5.interfaces.php" class="link">interface</a>:
  <div class="example" id="example-184">
   <p><strong>Example #4 Using <code class="literal">instanceof</code> with interfaces</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">MyInterface<br /></span><span style="color: #007700">{<br />}<br /><br />class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">implements </span><span style="color: #0000BB">MyInterface<br /></span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">MyInterface</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(true)
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  Although <code class="literal">instanceof</code> is usually used with a literal classname,
  it can also be used with another object or a string variable:
  <div class="example" id="example-185">
   <p><strong>Example #5 Using <code class="literal">instanceof</code> with other variables</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">MyInterface<br /></span><span style="color: #007700">{<br />}<br /><br />class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">implements </span><span style="color: #0000BB">MyInterface<br /></span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #DD0000">'MyClass'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$d </span><span style="color: #007700">= </span><span style="color: #DD0000">'NotMyClass'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">$b</span><span style="color: #007700">); </span><span style="color: #FF8000">// $b is an object of class MyClass<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">$c</span><span style="color: #007700">); </span><span style="color: #FF8000">// $c is a string 'MyClass'<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">$d</span><span style="color: #007700">); </span><span style="color: #FF8000">// $d is a string 'NotMyClass'<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(true)
bool(false)
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  instanceof does not throw any error if the variable being tested is not
  an object, it simply returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Constants, however, were not allowed
  prior to PHP 7.3.0.
  <div class="example" id="example-186">
   <p><strong>Example #6 Using <code class="literal">instanceof</code> to test other variables</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'/tmp/'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">); </span><span style="color: #FF8000">// $a is an integer<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$b </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">); </span><span style="color: #FF8000">// $b is NULL<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$c </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">); </span><span style="color: #FF8000">// $c is a resource<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">FALSE </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(false)
bool(false)
bool(false)
PHP Fatal error:  instanceof expects an object instance, constant given
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  As of PHP 7.3.0, constants are allowed on the left-hand-side of the
  <code class="literal">instanceof</code> operator.
  <div class="example" id="example-187">
   <p><strong>Example #7 Using <code class="literal">instanceof</code> to test constants</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">FALSE </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Output of the above example in PHP 7.3:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(false)
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  As of PHP 8.0.0, <code class="literal">instanceof</code> can now be used with arbitrary expressions.
  The expression must be wrapped in parentheses and produce a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
  
  <div class="example" id="example-188">
   <p><strong>Example #8 Using <code class="literal">instanceof</code> with an arbitrary expression</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ClassA </span><span style="color: #007700">extends </span><span style="color: #0000BB">\stdClass </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">ClassB </span><span style="color: #007700">extends </span><span style="color: #0000BB">\stdClass </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">ClassC </span><span style="color: #007700">extends </span><span style="color: #0000BB">ClassB </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">ClassD </span><span style="color: #007700">extends </span><span style="color: #0000BB">ClassA </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">getSomeClass</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br /></span><span style="color: #007700">{<br />    return </span><span style="color: #0000BB">ClassA</span><span style="color: #007700">::class;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new </span><span style="color: #0000BB">ClassA </span><span style="color: #007700">instanceof (</span><span style="color: #DD0000">'std' </span><span style="color: #007700">. </span><span style="color: #DD0000">'Class'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new </span><span style="color: #0000BB">ClassB </span><span style="color: #007700">instanceof (</span><span style="color: #DD0000">'Class' </span><span style="color: #007700">. </span><span style="color: #DD0000">'B'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new </span><span style="color: #0000BB">ClassC </span><span style="color: #007700">instanceof (</span><span style="color: #DD0000">'Class' </span><span style="color: #007700">. </span><span style="color: #DD0000">'A'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new </span><span style="color: #0000BB">ClassD </span><span style="color: #007700">instanceof (</span><span style="color: #0000BB">getSomeClass</span><span style="color: #007700">()));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(true)
bool(false)
bool(true)
</pre></div>
   </div>
  </div>
 </p>
 <p class="simpara">
  The <code class="literal">instanceof</code> operator has a functional variant
  with the <span class="function"><a href="function.is-a.php" class="function">is_a()</a></span> function.
 </p>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-class.php" class="function">get_class()</a></span></li>
    <li><span class="function"><a href="function.is-a.php" class="function">is_a()</a></span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/operators/type.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.type%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.type&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.type.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="76352">  <div class="votes">
    <div id="Vu76352">
    <a href="/manual/vote-note.php?id=76352&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76352">
    <a href="/manual/vote-note.php?id=76352&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76352" title="87% like this...">
    140
    </div>
  </div>
  <a href="#76352" class="name">
  <strong class="user"><em>jphaas at gmail dot com</em></strong></a><a class="genanchor" href="#76352"> &para;</a><div class="date" title="2007-07-11 10:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76352">
<div class="phpcode"><code><span class="html">Posting this so the word typeof appears on this page, so that this page will show up when you google 'php typeof'.  ...yeah, former Java user.</span></code></div>
  </div>
 </div>
  <div class="note" id="111527">  <div class="votes">
    <div id="Vu111527">
    <a href="/manual/vote-note.php?id=111527&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111527">
    <a href="/manual/vote-note.php?id=111527&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111527" title="74% like this...">
    64
    </div>
  </div>
  <a href="#111527" class="name">
  <strong class="user"><em>knarlin at yahoo dot com dot au</em></strong></a><a class="genanchor" href="#111527"> &para;</a><div class="date" title="2013-02-28 11:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111527">
<div class="phpcode"><code><span class="html">Checking an object is not an instance of a class, example #3 uses extraneous parentheses.<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(!(</span><span class="default">$a </span><span class="keyword">instanceof </span><span class="default">stdClass</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Because instanceof has higher operator precedence than ! you can just do<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">( ! </span><span class="default">$a </span><span class="keyword">instanceof </span><span class="default">stdClass </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106882">  <div class="votes">
    <div id="Vu106882">
    <a href="/manual/vote-note.php?id=106882&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106882">
    <a href="/manual/vote-note.php?id=106882&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106882" title="76% like this...">
    50
    </div>
  </div>
  <a href="#106882" class="name">
  <strong class="user"><em>Sudarshan Wadkar</em></strong></a><a class="genanchor" href="#106882"> &para;</a><div class="date" title="2011-12-15 04:34"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106882">
<div class="phpcode"><code><span class="html">I don't see any mention of "namespaces" on this page so I thought I would chime in. The instanceof operator takes FQCN as second operator when you pass it as string and not a simple class name. It will not resolve it even if you have a `use MyNamespace\Bar;` at the top level. Here is what I am trying to say:<br /><br />## testinclude.php ##<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Bar1</span><span class="keyword">;<br />{<br />class </span><span class="default">Foo1</span><span class="keyword">{ }<br />}<br />namespace </span><span class="default">Bar2</span><span class="keyword">;<br />{<br />class </span><span class="default">Foo2</span><span class="keyword">{ }<br />}<br /></span><span class="default">?&gt;<br /></span>## test.php ##<br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="string">'testinclude.php'</span><span class="keyword">);<br />use </span><span class="default">Bar1\Foo1 </span><span class="keyword">as </span><span class="default">Foo</span><span class="keyword">;<br /></span><span class="default">$foo1 </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(); </span><span class="default">$className </span><span class="keyword">= </span><span class="string">'Bar1\Foo1'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo1 </span><span class="keyword">instanceof </span><span class="default">Bar1\Foo1</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo1 </span><span class="keyword">instanceof </span><span class="default">$className</span><span class="keyword">);<br /></span><span class="default">$className </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo1 </span><span class="keyword">instanceof </span><span class="default">$className</span><span class="keyword">);<br />use </span><span class="default">Bar2\Foo2</span><span class="keyword">;<br /></span><span class="default">$foo2 </span><span class="keyword">= new </span><span class="default">Foo2</span><span class="keyword">(); </span><span class="default">$className </span><span class="keyword">= </span><span class="string">'Bar2\Foo2'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo2 </span><span class="keyword">instanceof </span><span class="default">Bar2\Foo2</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo2 </span><span class="keyword">instanceof </span><span class="default">$className</span><span class="keyword">);<br /></span><span class="default">$className </span><span class="keyword">= </span><span class="string">'Foo2'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo2 </span><span class="keyword">instanceof </span><span class="default">$className</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>## stdout ##<br />bool(true)<br />bool(true)<br />bool(false)<br />bool(true)<br />bool(true)<br />bool(false)</span></code></div>
  </div>
 </div>
  <div class="note" id="113871">  <div class="votes">
    <div id="Vu113871">
    <a href="/manual/vote-note.php?id=113871&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113871">
    <a href="/manual/vote-note.php?id=113871&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113871" title="74% like this...">
    47
    </div>
  </div>
  <a href="#113871" class="name">
  <strong class="user"><em>dava</em></strong></a><a class="genanchor" href="#113871"> &para;</a><div class="date" title="2013-12-11 05:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113871">
<div class="phpcode"><code><span class="html">You are also able to compare 2 objects using instanceOf. In that case, instanceOf will compare the types of both objects. That is sometimes very useful:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{ }<br />class </span><span class="default">B </span><span class="keyword">{ }<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br /></span><span class="default">$a2 </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br /><br />echo </span><span class="default">$a </span><span class="keyword">instanceOf </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// true<br /></span><span class="keyword">echo </span><span class="default">$a </span><span class="keyword">instanceOf </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// false<br /></span><span class="keyword">echo </span><span class="default">$a </span><span class="keyword">instanceOf </span><span class="default">$a2</span><span class="keyword">; </span><span class="comment">// true<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126060">  <div class="votes">
    <div id="Vu126060">
    <a href="/manual/vote-note.php?id=126060&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126060">
    <a href="/manual/vote-note.php?id=126060&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126060" title="85% like this...">
    5
    </div>
  </div>
  <a href="#126060" class="name">
  <strong class="user"><em>wapinet at mail dot ru</em></strong></a><a class="genanchor" href="#126060"> &para;</a><div class="date" title="2021-05-07 11:57"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126060">
<div class="phpcode"><code><span class="html">if you have only class names (not objects) you can use that snippet: <a href="https://3v4l.org/mUKUC" rel="nofollow" target="_blank">https://3v4l.org/mUKUC</a><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">i</span><span class="keyword">{}<br />class </span><span class="default">a </span><span class="keyword">implements </span><span class="default">i</span><span class="keyword">{}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">a</span><span class="keyword">::class instanceof </span><span class="default">i</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">i</span><span class="keyword">::class, </span><span class="default">class_implements</span><span class="keyword">(</span><span class="default">a</span><span class="keyword">::class), </span><span class="default">true</span><span class="keyword">)); </span><span class="comment">// true</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121460">  <div class="votes">
    <div id="Vu121460">
    <a href="/manual/vote-note.php?id=121460&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121460">
    <a href="/manual/vote-note.php?id=121460&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121460" title="78% like this...">
    8
    </div>
  </div>
  <a href="#121460" class="name">
  <strong class="user"><em>wadih at creationmw dot com</em></strong></a><a class="genanchor" href="#121460"> &para;</a><div class="date" title="2017-07-29 08:41"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121460">
<div class="phpcode"><code><span class="html">Doing $a instanceof stdClass from inside a namespace will not work on its own. <br /><br />You will have to do:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$a </span><span class="keyword">instanceof </span><span class="default">\stdClass</span><span class="keyword">) <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85239">  <div class="votes">
    <div id="Vu85239">
    <a href="/manual/vote-note.php?id=85239&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85239">
    <a href="/manual/vote-note.php?id=85239&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85239" title="73% like this...">
    9
    </div>
  </div>
  <a href="#85239" class="name">
  <strong class="user"><em>kevin dot benton at beatport dot com</em></strong></a><a class="genanchor" href="#85239"> &para;</a><div class="date" title="2008-08-21 09:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85239">
<div class="phpcode"><code><span class="html">Example #5 could also be extended to include...<br /><br />var_dump($a instanceof MyInterface);<br /><br />The new result would be<br /><br />bool(true)<br /><br />So - instanceof is smart enough to know that a class that implements an interface is an instance of the interface, not just the class.  I didn't see that point made clearly enough in the explanation at the top.</span></code></div>
  </div>
 </div>
  <div class="note" id="121827">  <div class="votes">
    <div id="Vu121827">
    <a href="/manual/vote-note.php?id=121827&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121827">
    <a href="/manual/vote-note.php?id=121827&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121827" title="66% like this...">
    6
    </div>
  </div>
  <a href="#121827" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121827"> &para;</a><div class="date" title="2017-11-04 11:39"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121827">
<div class="phpcode"><code><span class="html">If you want to use "$foo instanceof $bar" to determine if two objects are the same class, remember that "instanceof" will also evaluate to true if $foo is an instance of a _subclass_ of $bar's class.<br /><br />If you really want to see if they are the _same_ class, then they both have to be instances of each other's class. That is:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">(</span><span class="default">$foo </span><span class="keyword">instanceof </span><span class="default">$bar </span><span class="keyword">&amp;&amp; </span><span class="default">$bar </span><span class="keyword">instanceof </span><span class="default">$foo</span><span class="keyword">)<br /><br /></span><span class="default">?&gt;<br /></span><br />Consider it an alternative to "get_class($bar) == get_class($foo)" that avoids the detour through to string lookups and comparisons.</span></code></div>
  </div>
 </div>
  <div class="note" id="87053">  <div class="votes">
    <div id="Vu87053">
    <a href="/manual/vote-note.php?id=87053&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87053">
    <a href="/manual/vote-note.php?id=87053&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87053" title="64% like this...">
    17
    </div>
  </div>
  <a href="#87053" class="name">
  <strong class="user"><em>jtaal at eljakim dot nl</em></strong></a><a class="genanchor" href="#87053"> &para;</a><div class="date" title="2008-11-17 05:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87053">
<div class="phpcode"><code><span class="html">You can use "self" to reference to the current class:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">myclass </span><span class="keyword">{
<br />    function </span><span class="default">mymethod</span><span class="keyword">(</span><span class="default">$otherObject</span><span class="keyword">) {
<br />        if (</span><span class="default">$otherObject </span><span class="keyword">instanceof </span><span class="default">self</span><span class="keyword">) {
<br />            </span><span class="default">$otherObject</span><span class="keyword">-&gt;</span><span class="default">mymethod</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">);
<br />        }
<br />        return </span><span class="string">'works!'</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">myclass</span><span class="keyword">();
<br />print </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">mymethod</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102988">  <div class="votes">
    <div id="Vu102988">
    <a href="/manual/vote-note.php?id=102988&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102988">
    <a href="/manual/vote-note.php?id=102988&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102988" title="65% like this...">
    13
    </div>
  </div>
  <a href="#102988" class="name">
  <strong class="user"><em>fbableus</em></strong></a><a class="genanchor" href="#102988"> &para;</a><div class="date" title="2011-03-18 06:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102988">
<div class="phpcode"><code><span class="html">If you want to test if a classname is an instance of a class, the instanceof operator won't work.<br /><br /><span class="default">&lt;?php<br />$classname </span><span class="keyword">= </span><span class="string">'MyClass'</span><span class="keyword">;<br />if( </span><span class="default">$classname </span><span class="keyword">instanceof </span><span class="default">MyParentClass</span><span class="keyword">) echo </span><span class="string">'Child of it'</span><span class="keyword">;<br />else echo </span><span class="string">'Not child of it'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Will always output <br />Not child of it<br /><br />You must use a ReflectionClass :<br /><span class="default">&lt;?php<br />$classname </span><span class="keyword">= </span><span class="string">'MyClass'</span><span class="keyword">;<br /></span><span class="default">$myReflection </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$classname</span><span class="keyword">);<br />if( </span><span class="default">$myReflection</span><span class="keyword">-&gt;</span><span class="default">isSubclassOf</span><span class="keyword">(</span><span class="string">'MyParentClass'</span><span class="keyword">)) echo  </span><span class="string">'Child of it'</span><span class="keyword">;<br />else echo </span><span class="string">'Not child of it'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Will output the good result.<br />If you're testing an interface, use implementsInterface() instead of isSublassOf().</span></code></div>
  </div>
 </div>
  <div class="note" id="108696">  <div class="votes">
    <div id="Vu108696">
    <a href="/manual/vote-note.php?id=108696&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108696">
    <a href="/manual/vote-note.php?id=108696&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108696" title="64% like this...">
    5
    </div>
  </div>
  <a href="#108696" class="name">
  <strong class="user"><em>wbcarts at juno dot com</em></strong></a><a class="genanchor" href="#108696"> &para;</a><div class="date" title="2012-05-18 02:14"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108696">
<div class="phpcode"><code><span class="html">SIMPLE, CLEAN, CLEAR use of the instanceof OPERATOR<br /><br />First, define a couple of simple PHP Objects to work on -- I'll introduce Circle and Point. Here's the class definitions for both:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Circle<br /></span><span class="keyword">{<br />  protected </span><span class="default">$radius </span><span class="keyword">= </span><span class="default">1.0</span><span class="keyword">;<br /><br />  </span><span class="comment">/*<br />   * This function is the reason we are going to use the<br />   * instanceof operator below.<br />   */<br />  </span><span class="keyword">public function </span><span class="default">setRadius</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">)<br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">radius </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">;<br />  }<br /><br />  public function </span><span class="default">__toString</span><span class="keyword">()<br />  {<br />    return </span><span class="string">'Circle [radius=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">radius </span><span class="keyword">. </span><span class="string">']'</span><span class="keyword">;<br />  }<br />}<br /><br />class </span><span class="default">Point<br /></span><span class="keyword">{<br />  protected </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  protected </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />  </span><span class="comment">/*<br />   * This function is the reason we are going to use the<br />   * instanceof operator below.<br />   */<br />  </span><span class="keyword">public function </span><span class="default">setLocation</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">)<br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">;<br />  }<br /><br />  public function </span><span class="default">__toString</span><span class="keyword">()<br />  {<br />    return </span><span class="string">'Point [x=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">. </span><span class="string">', y=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y </span><span class="keyword">. </span><span class="string">']'</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Now instantiate a few instances of these types. Note, I will put them in an array (collection) so we can iterate through them quickly.<br /><br /><span class="default">&lt;?php<br /><br />$myCollection </span><span class="keyword">= array(</span><span class="default">123</span><span class="keyword">, </span><span class="string">'abc'</span><span class="keyword">, </span><span class="string">'Hello World!'</span><span class="keyword">,<br />  new </span><span class="default">Circle</span><span class="keyword">(), new </span><span class="default">Circle</span><span class="keyword">(), new </span><span class="default">Circle</span><span class="keyword">(),<br />  new </span><span class="default">Point</span><span class="keyword">(), new </span><span class="default">Point</span><span class="keyword">(), new </span><span class="default">Point</span><span class="keyword">());<br /><br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />foreach(</span><span class="default">$myCollection </span><span class="keyword">AS </span><span class="default">$item</span><span class="keyword">)<br />{<br />  </span><span class="comment">/*<br />   * The setRadius() function is written in the Circle class<br />   * definition above, so make sure $item is an instance of<br />   * type Circle BEFORE calling it AND to avoid PHP PMS!<br />   */<br />  </span><span class="keyword">if(</span><span class="default">$item </span><span class="keyword">instanceof </span><span class="default">Circle</span><span class="keyword">)<br />  {<br />    </span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">setRadius</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />  }<br /><br />  </span><span class="comment">/*<br />   * The setLocation() function is written in the Point class<br />   * definition above, so make sure $item is an instance of <br />   * type Point BEFORE calling it AND to stay out of the ER!<br />   */<br />  </span><span class="keyword">if(</span><span class="default">$item </span><span class="keyword">instanceof </span><span class="default">Point</span><span class="keyword">)<br />  {<br />    </span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">setLocation</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />  }<br /><br />  echo </span><span class="string">'$myCollection[' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">++ . </span><span class="string">'] = ' </span><span class="keyword">. </span><span class="default">$item </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />$myCollection[0] = 123<br />$myCollection[1] = abc<br />$myCollection[2] = Hello World!<br />$myCollection[3] = Circle [radius=3]<br />$myCollection[4] = Circle [radius=4]<br />$myCollection[5] = Circle [radius=5]<br />$myCollection[6] = Point [x=6, y=6]<br />$myCollection[7] = Point [x=7, y=7]<br />$myCollection[8] = Point [x=8, y=8]</span></code></div>
  </div>
 </div>
  <div class="note" id="124629">  <div class="votes">
    <div id="Vu124629">
    <a href="/manual/vote-note.php?id=124629&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124629">
    <a href="/manual/vote-note.php?id=124629&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124629" title="60% like this...">
    2
    </div>
  </div>
  <a href="#124629" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#124629"> &para;</a><div class="date" title="2020-01-20 06:43"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124629">
<div class="phpcode"><code><span class="html">Using an undefined variable will result in an error.<br /><br />If variable is in doubt, one must prequalify:<br /><br />    if ( isset( $MyInstance ) and $MyInstance instanceof MyClass ) ...</span></code></div>
  </div>
 </div>
  <div class="note" id="76582">  <div class="votes">
    <div id="Vu76582">
    <a href="/manual/vote-note.php?id=76582&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76582">
    <a href="/manual/vote-note.php?id=76582&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76582" title="61% like this...">
    5
    </div>
  </div>
  <a href="#76582" class="name">
  <strong class="user"><em>julien plee using g mail dot com</em></strong></a><a class="genanchor" href="#76582"> &para;</a><div class="date" title="2007-07-20 06:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76582">
<div class="phpcode"><code><span class="html">Response to vinyanov at poczta dot onet dot pl:<br /><br />You mentionned "the instanceof operator will not accept a string as its first operand". However, this behavior is absolutely right and therefore, you're misleading the meaning of an instance.<br /><br /><span class="default">&lt;?php </span><span class="string">'ClassA' </span><span class="keyword">instanceof </span><span class="string">'ClassB'</span><span class="keyword">; </span><span class="default">?&gt;</span> means "the class named ClassA is an instance of the class named ClassB". This is a nonsense sentence because when you instanciate a class, you ALWAYS obtain an object. Consequently, you only can ask if an object is an instance of a class.<br /><br />I believe asking if "a ClassA belongs to a ClassB" (or "a ClassA is a class of (type) ClassB") or even "a ClassA is (also) a ClassB" is more appropriate. But the first is not implemented and the second only works with objects, just like the instanceof operator.<br /><br />Plus, I just have tested your code and it does absolutely NOT do the same as instanceof (extended to classes)! I can't advise anyone to reuse it. The use of <span class="default">&lt;?php is_instance_of </span><span class="keyword">(</span><span class="default">$instanceOfA</span><span class="keyword">, </span><span class="string">'ClassB'</span><span class="keyword">); </span><span class="default">?&gt;</span> raises a warning "include_once(Object id #1.php) …" when using __autoload (trying to look for $instanceOfA as if it was a class name).<br /><br />Finally, here is a fast (to me) sample function code to verify if an object or class:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">kind_of </span><span class="keyword">(&amp;</span><span class="default">$object_or_class</span><span class="keyword">, </span><span class="default">$class</span><span class="keyword">)<br />{<br />    return </span><span class="default">is_object </span><span class="keyword">(</span><span class="default">$object_or_class</span><span class="keyword">) ? <br />        </span><span class="default">$object_or_class </span><span class="keyword">instanceof </span><span class="default">$class<br />        </span><span class="keyword">: (</span><span class="default">is_subclass_of </span><span class="keyword">(</span><span class="default">$object_or_class $class</span><span class="keyword">)<br />           || </span><span class="default">strtolower </span><span class="keyword">(</span><span class="default">$object_or_class</span><span class="keyword">) == </span><span class="default">strtolower </span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">));<br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73853">  <div class="votes">
    <div id="Vu73853">
    <a href="/manual/vote-note.php?id=73853&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73853">
    <a href="/manual/vote-note.php?id=73853&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73853" title="62% like this...">
    2
    </div>
  </div>
  <a href="#73853" class="name">
  <strong class="user"><em>jeanyves dot terrien at orange-ftgroup dot com</em></strong></a><a class="genanchor" href="#73853"> &para;</a><div class="date" title="2007-03-13 12:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73853">
<div class="phpcode"><code><span class="html">Cross version function even if you are working in php4<br />(instanceof is an undefined operator for php4)<br /><br />   function isMemberOf($classename) {<br />      $ver = floor(phpversion());<br />      if($ver &gt; 4) {<br />         $instanceof = create_function ('$obj,$classname','return $obj instanceof $classname;');<br />         return $instanceof($this,$classname);<br />      } else {<br />         // Php4 uses lowercase for classname.<br />         return is_a($this, strtolower($classname));<br />      }<br />   } // end function isMemberOf</span></code></div>
  </div>
 </div>
  <div class="note" id="80495">  <div class="votes">
    <div id="Vu80495">
    <a href="/manual/vote-note.php?id=80495&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80495">
    <a href="/manual/vote-note.php?id=80495&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80495" title="58% like this...">
    3
    </div>
  </div>
  <a href="#80495" class="name">
  <strong class="user"><em>ejohnson82 at gmail dot com</em></strong></a><a class="genanchor" href="#80495"> &para;</a><div class="date" title="2008-01-18 01:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80495">
<div class="phpcode"><code><span class="html">The PHP parser generates a parse error on either of the two lines that are commented out here.  <br />Apparently the 'instanceof' construct will take a string variable in the second spot, but it will NOT take a string... lame<br /><br />class Bar {}<br />$b = new Bar;<br />$b_class = "Bar";<br />var_export($b instanceof Bar); // this is ok<br />var_export($b instanceof $b_class); // this is ok<br />//var_export($f instanceof "Bar"); // this is syntactically illegal<br />//var_export($f instanceof 'Bar'); // this is syntactically illegal</span></code></div>
  </div>
 </div>
  <div class="note" id="73609">  <div class="votes">
    <div id="Vu73609">
    <a href="/manual/vote-note.php?id=73609&amp;page=language.operators.type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73609">
    <a href="/manual/vote-note.php?id=73609&amp;page=language.operators.type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73609" title="55% like this...">
    2
    </div>
  </div>
  <a href="#73609" class="name">
  <strong class="user"><em>soletan at toxa dot de</em></strong></a><a class="genanchor" href="#73609"> &para;</a><div class="date" title="2007-03-03 04:04"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73609">
<div class="phpcode"><code><span class="html">Please note: != is a separate operator with separate semantics. Thinking about language grammar it's kind of ridicilous to negate an operator. Of course, it's possible to negate the result of a function (like is_a()), since it isn't negating the function itself or its semantics.<br /><br />instanceof is a binary operator, and so used in binary terms like this<br /><br />terma instanceof termb<br /><br />while ! (negation) is a unary operator and so may be applied to a single term like this<br /><br />!term<br /><br />And a term never consists of an operator, only! There is no such construct in any language (please correct me!). However, instanceof doesn't finally support nested terms in every operand position ("terma" or "termb" above) as negation does:<br /><br />!!!!!!!!!!!!!!term == term<br /><br />So back again, did you ever write<br /><br />a !!!!!!!!!!!!= b<br /><br />to test equivalence?</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.type&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.type.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.operators.php">Operators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.operators.precedence.php" title="Operator Precedence">Operator Precedence</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.arithmetic.php" title="Arithmetic">Arithmetic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.increment.php" title="Increment and Decrement">Increment and Decrement</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.assignment.php" title="Assignment">Assignment</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.bitwise.php" title="Bitwise">Bitwise</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.comparison.php" title="Comparison">Comparison</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.errorcontrol.php" title="Error Control">Error Control</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.execution.php" title="Execution">Execution</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.array.php" title="Array">Array</a>
                        </li>
                                                <li class="current">
                            <a href="language.operators.type.php" title="Type">Type</a>
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
