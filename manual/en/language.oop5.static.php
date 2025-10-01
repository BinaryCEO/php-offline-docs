<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Static Keyword - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.static.php">
 <link rel="shorturl" href="https://www.php.net/oop5.static">
 <link rel="alternate" href="https://www.php.net/oop5.static" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.abstract.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.static.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.static.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.static.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.static.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.static.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.static.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.static.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.static.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.static.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.static.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.static.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Static Keyword" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Static Keyword - Manual" />
<meta name="twitter:description" content="Static Keyword" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Static Keyword - Manual" />
<meta itemprop="description" content="Static Keyword" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Static Keyword" />

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
        <a href="language.oop5.abstract.php">
          Class Abstraction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.paamayim-nekudotayim.php">
          &laquo; Scope Resolution Operator (::)        </a>
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
            <option value='en/language.oop5.static.php' selected="selected">English</option>
            <option value='de/language.oop5.static.php'>German</option>
            <option value='es/language.oop5.static.php'>Spanish</option>
            <option value='fr/language.oop5.static.php'>French</option>
            <option value='it/language.oop5.static.php'>Italian</option>
            <option value='ja/language.oop5.static.php'>Japanese</option>
            <option value='pt_BR/language.oop5.static.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.static.php'>Russian</option>
            <option value='tr/language.oop5.static.php'>Turkish</option>
            <option value='uk/language.oop5.static.php'>Ukrainian</option>
            <option value='zh/language.oop5.static.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.static" class="sect1">
  <h2 class="title">Static Keyword</h2>

  <div class="tip"><strong class="tip">Tip</strong>
   <p class="simpara">
    This page describes the use of the <code class="literal">static</code> keyword to
    define static methods and properties. <code class="literal">static</code> can also
    be used to
    <a href="language.variables.scope.php#language.variables.scope.static" class="link">define static variables</a>,
    <a href="functions.anonymous.php#functions.anonymous-functions.static" class="link">define static anonymous functions</a>
    and for
    <a href="language.oop5.late-static-bindings.php" class="link">late static bindings</a>.
    Please refer to those pages for information on those meanings of
    <code class="literal">static</code>.
   </p>
  </div>

  <p class="para">
   Declaring class properties or methods as static makes them accessible
   without needing an instantiation of the class.
   These can also be accessed statically within an instantiated class object.
  </p>

  <div class="sect2" id="language.oop5.static.methods">
   <h3 class="title">Static methods</h3>

   <p class="para">
    Because static methods are callable without an instance of
    the object created, the pseudo-variable <var class="varname">$this</var> is
    not available inside methods declared as static.
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     Calling non-static methods statically throws an <span class="classname"><a href="class.error.php" class="classname">Error</a></span>.
    </p>
    <p class="para">
     Prior to PHP 8.0.0, calling non-static methods statically was deprecated, and
     generated an <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong> warning.
    </p>
   </div>

   <div class="example" id="example-315">
    <p><strong>Example #1 Static method example</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">aStaticMethod</span><span style="color: #007700">() {<br />        </span><span style="color: #FF8000">// ...<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">aStaticMethod</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$classname </span><span style="color: #007700">= </span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$classname</span><span style="color: #007700">::</span><span style="color: #0000BB">aStaticMethod</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

   </div>
  </div>
  
  <div class="sect2" id="language.oop5.static.properties">
   <h3 class="title">Static properties</h3>

   <p class="para">
    Static properties are accessed using the
    <a href="language.oop5.paamayim-nekudotayim.php" class="link">Scope Resolution Operator</a>
    (<code class="literal">::</code>) and cannot be accessed through the object operator
    (<code class="literal">-&gt;</code>).
   </p>

   <p class="para">
    It&#039;s possible to reference the class using a variable.
    The variable&#039;s value cannot be a keyword (e.g. <code class="literal">self</code>,
    <code class="literal">parent</code> and <code class="literal">static</code>).
   </p>

   <div class="example" id="example-316">
    <p><strong>Example #2 Static property example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public static </span><span style="color: #0000BB">$my_static </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">staticValue</span><span style="color: #007700">() {<br />        return </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$my_static</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Bar </span><span style="color: #007700">extends </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">fooStatic</span><span style="color: #007700">() {<br />        return </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">$my_static</span><span style="color: #007700">;<br />    }<br />}<br /><br /><br />print </span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">$my_static </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br />print </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">staticValue</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />print </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">my_static </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;      </span><span style="color: #FF8000">// Undefined "Property" my_static <br /><br /></span><span style="color: #007700">print </span><span style="color: #0000BB">$foo</span><span style="color: #007700">::</span><span style="color: #0000BB">$my_static </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$classname </span><span style="color: #007700">= </span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">;<br />print </span><span style="color: #0000BB">$classname</span><span style="color: #007700">::</span><span style="color: #0000BB">$my_static </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />print </span><span style="color: #0000BB">Bar</span><span style="color: #007700">::</span><span style="color: #0000BB">$my_static </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= new </span><span style="color: #0000BB">Bar</span><span style="color: #007700">();<br />print </span><span style="color: #0000BB">$bar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fooStatic</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 8 is similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
foo
foo

Notice: Accessing static property Foo::$my_static as non static in /in/V0Rvv on line 23

Warning: Undefined property: Foo::$my_static in /in/V0Rvv on line 23

foo
foo
foo
foo
</pre></div>
    </div>
   </div>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/static.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.static%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.static&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.static.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="80661">  <div class="votes">
    <div id="Vu80661">
    <a href="/manual/vote-note.php?id=80661&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80661">
    <a href="/manual/vote-note.php?id=80661&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80661" title="73% like this...">
    254
    </div>
  </div>
  <a href="#80661" class="name">
  <strong class="user"><em>inkredibl</em></strong></a><a class="genanchor" href="#80661"> &para;</a><div class="date" title="2008-01-28 12:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80661">
<div class="phpcode"><code><span class="html">Note that you should read "Variables/Variable scope" if you are looking for static keyword use for declaring static variables inside functions (or methods). I myself had this gap in my PHP knowledge until recently and had to google to find this out. I think this page should have a "See also" link to static function variables.<br /><a href="http://www.php.net/manual/en/language.variables.scope.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.variables.scope.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="104823">  <div class="votes">
    <div id="Vu104823">
    <a href="/manual/vote-note.php?id=104823&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104823">
    <a href="/manual/vote-note.php?id=104823&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104823" title="73% like this...">
    165
    </div>
  </div>
  <a href="#104823" class="name">
  <strong class="user"><em>payal001 at gmail dot com</em></strong></a><a class="genanchor" href="#104823"> &para;</a><div class="date" title="2011-07-09 03:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104823">
<div class="phpcode"><code><span class="html">Here statically accessed property prefer property of the class for which it is called. Where as self keyword enforces use of current class only. Refer the below example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">a</span><span class="keyword">{<br /><br />static protected </span><span class="default">$test</span><span class="keyword">=</span><span class="string">"class a"</span><span class="keyword">;<br /><br />public function </span><span class="default">static_test</span><span class="keyword">(){<br /><br />echo static::</span><span class="default">$test</span><span class="keyword">; </span><span class="comment">// Results class b<br /></span><span class="keyword">echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">$test</span><span class="keyword">; </span><span class="comment">// Results class a<br /><br /></span><span class="keyword">}<br /><br />}<br /><br />class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a</span><span class="keyword">{<br /><br />static protected </span><span class="default">$test</span><span class="keyword">=</span><span class="string">"class b"</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">b</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">static_test</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122525">  <div class="votes">
    <div id="Vu122525">
    <a href="/manual/vote-note.php?id=122525&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122525">
    <a href="/manual/vote-note.php?id=122525&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122525" title="65% like this...">
    37
    </div>
  </div>
  <a href="#122525" class="name">
  <strong class="user"><em>artekpuck at gmail dot com</em></strong></a><a class="genanchor" href="#122525"> &para;</a><div class="date" title="2018-03-19 05:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122525">
<div class="phpcode"><code><span class="html">It is worth mentioning that there is only one value for each static variable that is the same for all instances</span></code></div>
  </div>
 </div>
  <div class="note" id="51640">  <div class="votes">
    <div id="Vu51640">
    <a href="/manual/vote-note.php?id=51640&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51640">
    <a href="/manual/vote-note.php?id=51640&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51640" title="62% like this...">
    15
    </div>
  </div>
  <a href="#51640" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#51640"> &para;</a><div class="date" title="2005-04-06 03:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51640">
<div class="phpcode"><code><span class="html">You misunderstand the meaning of inheritance : there is no duplication of members when you inherit from a base class. Members are shared through inheritance, and can be accessed by derived classes according to visibility (public, protected, private).<br /><br />The difference between static and non static members is only that a non static member is tied to an instance of a class although a static member is tied to the class, and not to a particular instance.<br />That is, a static member is shared by all instances of a class although a non static member exists for each instance of  class.<br /><br />Thus, in your example, the static property has the correct value, according to principles of object oriented conception.<br />class Base<br />{<br />  public $a;<br />  public static $b;<br />}<br /><br />class Derived extends Base<br />{<br />  public function __construct()<br />  {<br />    $this-&gt;a = 0;<br />    parent::$b = 0;<br />  }<br />  public function f()<br />  {<br />    $this-&gt;a++;<br />    parent::$b++;<br />  }<br />}<br /><br />$i1 = new Derived;<br />$i2 = new Derived;<br /><br />$i1-&gt;f();<br />echo $i1-&gt;a, ' ', Derived::$b, "\n";<br />$i2-&gt;f();<br />echo $i2-&gt;a, ' ', Derived::$b, "\n";<br /><br />outputs<br />1 1<br />1 2</span></code></div>
  </div>
 </div>
  <div class="note" id="118097">  <div class="votes">
    <div id="Vu118097">
    <a href="/manual/vote-note.php?id=118097&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118097">
    <a href="/manual/vote-note.php?id=118097&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118097" title="59% like this...">
    9
    </div>
  </div>
  <a href="#118097" class="name">
  <strong class="user"><em>sideshowAnthony at googlemail dot com</em></strong></a><a class="genanchor" href="#118097"> &para;</a><div class="date" title="2015-10-02 07:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118097">
<div class="phpcode"><code><span class="html">The static keyword can still be used (in a non-oop way) inside a function. So if you need a value stored with your class, but it is very function specific, you can use this:<br /><br />class aclass {<br />    public static function b(){<br />        static $d=12; // Set to 12 on first function call only<br />        $d+=12;<br />        return "$d\n";<br />    }<br />}<br /><br />echo aclass::b(); //24<br />echo aclass::b(); //36<br />echo aclass::b(); //48<br />echo aclass::$d; //fatal error</span></code></div>
  </div>
 </div>
  <div class="note" id="113519">  <div class="votes">
    <div id="Vu113519">
    <a href="/manual/vote-note.php?id=113519&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113519">
    <a href="/manual/vote-note.php?id=113519&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113519" title="58% like this...">
    10
    </div>
  </div>
  <a href="#113519" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#113519"> &para;</a><div class="date" title="2013-10-24 01:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113519">
<div class="phpcode"><code><span class="html">It should be noted that in 'Example #2', you can also call a variably defined static method as follows:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    public static function </span><span class="default">aStaticMethod</span><span class="keyword">() {<br />        </span><span class="comment">// ...<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$classname </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br /></span><span class="default">$methodname </span><span class="keyword">= </span><span class="string">'aStaticMethod'</span><span class="keyword">;<br /></span><span class="default">$classname</span><span class="keyword">::{</span><span class="default">$methodname</span><span class="keyword">}(); </span><span class="comment">// As of PHP 5.3.0 I believe<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122570">  <div class="votes">
    <div id="Vu122570">
    <a href="/manual/vote-note.php?id=122570&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122570">
    <a href="/manual/vote-note.php?id=122570&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122570" title="57% like this...">
    13
    </div>
  </div>
  <a href="#122570" class="name">
  <strong class="user"><em>vinayak dot anivase at gmail dot com</em></strong></a><a class="genanchor" href="#122570"> &para;</a><div class="date" title="2018-03-30 06:38"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122570">
<div class="phpcode"><code><span class="html">This is also possible:<br /><br />class Foo {<br />  public static $bar = 'a static property';<br />}<br /><br />$baz = (new Foo)::$bar;<br />echo $baz;</span></code></div>
  </div>
 </div>
  <div class="note" id="118306">  <div class="votes">
    <div id="Vu118306">
    <a href="/manual/vote-note.php?id=118306&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118306">
    <a href="/manual/vote-note.php?id=118306&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118306" title="56% like this...">
    5
    </div>
  </div>
  <a href="#118306" class="name">
  <strong class="user"><em>rahul dot anand77 at gmail dot com</em></strong></a><a class="genanchor" href="#118306"> &para;</a><div class="date" title="2015-11-13 10:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118306">
<div class="phpcode"><code><span class="html">To check if a method declared in a class is static or not, you can us following code. PHP5 has a Reflection Class, which is very helpful. <br /><br />try {<br />    $method = new ReflectionMethod( 'className::methodName );<br />    if ( $method-&gt;isStatic() )<br />    {<br />        // Method is static.<br />    }<br />}<br />catch ( ReflectionException $e )<br />{<br />    //    method does not exist<br />    echo $e-&gt;getMessage();<br />}<br /><br />*You can read more about Reflection class on <a href="http://php.net/manual/en/class.reflectionclass.php" rel="nofollow" target="_blank">http://php.net/manual/en/class.reflectionclass.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="118918">  <div class="votes">
    <div id="Vu118918">
    <a href="/manual/vote-note.php?id=118918&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118918">
    <a href="/manual/vote-note.php?id=118918&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118918" title="56% like this...">
    5
    </div>
  </div>
  <a href="#118918" class="name">
  <strong class="user"><em>b1tchcakes</em></strong></a><a class="genanchor" href="#118918"> &para;</a><div class="date" title="2016-02-27 09:06"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118918">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">trait </span><span class="default">t </span><span class="keyword">{<br />  protected </span><span class="default">$p</span><span class="keyword">;<br />  public function </span><span class="default">testMe</span><span class="keyword">() {echo </span><span class="string">'static:'</span><span class="keyword">.static::class. </span><span class="string">' // self:'</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::class .</span><span class="string">"\n"</span><span class="keyword">;}<br />}<br /><br />class </span><span class="default">a </span><span class="keyword">{ use </span><span class="default">t</span><span class="keyword">; }<br />class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a </span><span class="keyword">{}<br /><br />echo (new </span><span class="default">a</span><span class="keyword">)-&gt;</span><span class="default">testMe</span><span class="keyword">();<br />echo (new </span><span class="default">b</span><span class="keyword">)-&gt;</span><span class="default">testMe</span><span class="keyword">();<br /><br /></span><span class="default">outputs<br /></span><span class="keyword">static:</span><span class="default">a </span><span class="comment">// self:t<br /></span><span class="keyword">static:</span><span class="default">b </span><span class="comment">// self:t</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89650">  <div class="votes">
    <div id="Vu89650">
    <a href="/manual/vote-note.php?id=89650&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89650">
    <a href="/manual/vote-note.php?id=89650&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89650" title="55% like this...">
    11
    </div>
  </div>
  <a href="#89650" class="name">
  <strong class="user"><em>davidn at xnet dot co dot nz</em></strong></a><a class="genanchor" href="#89650"> &para;</a><div class="date" title="2009-03-17 04:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89650">
<div class="phpcode"><code><span class="html">Static variables are shared between sub classes<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyParent </span><span class="keyword">{<br />    <br />    protected static </span><span class="default">$variable</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">Child1 </span><span class="keyword">extends </span><span class="default">MyParent </span><span class="keyword">{<br />    <br />    function </span><span class="default">set</span><span class="keyword">() {<br />        <br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$variable </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Child2 </span><span class="keyword">extends </span><span class="default">MyParent </span><span class="keyword">{<br />    <br />    function </span><span class="default">show</span><span class="keyword">() {<br />        <br />        echo(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$variable</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$c1 </span><span class="keyword">= new </span><span class="default">Child1</span><span class="keyword">();<br /></span><span class="default">$c1</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">();<br /></span><span class="default">$c2 </span><span class="keyword">= new </span><span class="default">Child2</span><span class="keyword">();<br /></span><span class="default">$c2</span><span class="keyword">-&gt;</span><span class="default">show</span><span class="keyword">(); </span><span class="comment">// prints 2<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123105">  <div class="votes">
    <div id="Vu123105">
    <a href="/manual/vote-note.php?id=123105&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123105">
    <a href="/manual/vote-note.php?id=123105&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123105" title="54% like this...">
    7
    </div>
  </div>
  <a href="#123105" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#123105"> &para;</a><div class="date" title="2018-09-04 07:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123105">
<div class="phpcode"><code><span class="html">It is important to understand the behavior of static properties in the context of class inheritance:<br /><br />- Static properties defined in both parent and child classes will hold DISTINCT values for each class. Proper use of self:: vs. static:: are crucial inside of child methods to reference the intended static property.<br /><br />- Static properties defined ONLY in the parent class will share a COMMON value.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br />class </span><span class="default">staticparent </span><span class="keyword">{<br />    static    </span><span class="default">$parent_only</span><span class="keyword">;<br />    static    </span><span class="default">$both_distinct</span><span class="keyword">;<br />    <br />    function </span><span class="default">__construct</span><span class="keyword">() {<br />        static::</span><span class="default">$parent_only </span><span class="keyword">= </span><span class="string">'fromparent'</span><span class="keyword">;<br />        static::</span><span class="default">$both_distinct </span><span class="keyword">= </span><span class="string">'fromparent'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">staticchild </span><span class="keyword">extends </span><span class="default">staticparent </span><span class="keyword">{<br />    static    </span><span class="default">$child_only</span><span class="keyword">;<br />    static    </span><span class="default">$both_distinct</span><span class="keyword">;<br />    <br />    function </span><span class="default">__construct</span><span class="keyword">() {<br />        static::</span><span class="default">$parent_only </span><span class="keyword">= </span><span class="string">'fromchild'</span><span class="keyword">;<br />        static::</span><span class="default">$both_distinct </span><span class="keyword">= </span><span class="string">'fromchild'</span><span class="keyword">;<br />        static::</span><span class="default">$child_only </span><span class="keyword">= </span><span class="string">'fromchild'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">staticparent</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">staticchild</span><span class="keyword">;<br /><br />echo </span><span class="string">'Parent: parent_only='</span><span class="keyword">, </span><span class="default">staticparent</span><span class="keyword">::</span><span class="default">$parent_only</span><span class="keyword">, </span><span class="string">', both_distinct='</span><span class="keyword">, </span><span class="default">staticparent</span><span class="keyword">::</span><span class="default">$both_distinct</span><span class="keyword">, </span><span class="string">"&lt;br/&gt;\r\n"</span><span class="keyword">;<br />echo </span><span class="string">'Child:  parent_only='</span><span class="keyword">, </span><span class="default">staticchild</span><span class="keyword">::</span><span class="default">$parent_only</span><span class="keyword">, </span><span class="string">', both_distinct='</span><span class="keyword">, </span><span class="default">staticchild</span><span class="keyword">::</span><span class="default">$both_distinct</span><span class="keyword">, </span><span class="string">', child_only='</span><span class="keyword">, </span><span class="default">staticchild</span><span class="keyword">::</span><span class="default">$child_only</span><span class="keyword">, </span><span class="string">"&lt;br/&gt;\r\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />will output:<br />Parent: parent_only=fromchild, both_distinct=fromparent<br />Child: parent_only=fromchild, both_distinct=fromchild, child_only=fromchild</span></code></div>
  </div>
 </div>
  <div class="note" id="52519">  <div class="votes">
    <div id="Vu52519">
    <a href="/manual/vote-note.php?id=52519&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52519">
    <a href="/manual/vote-note.php?id=52519&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52519" title="56% like this...">
    12
    </div>
  </div>
  <a href="#52519" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#52519"> &para;</a><div class="date" title="2005-05-04 07:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52519">
<div class="phpcode"><code><span class="html">To check if a function was called statically or not, you'll need to do:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo </span><span class="keyword">() {<br />    </span><span class="default">$isStatic </span><span class="keyword">= !(isset(</span><span class="default">$this</span><span class="keyword">) &amp;&amp; </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">) == </span><span class="default">__CLASS__</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />More at (<a href="http://blog.phpdoc.info/archives/4-Schizophrenic-Methods.html" rel="nofollow" target="_blank">http://blog.phpdoc.info/archives/4-Schizophrenic-Methods.html</a>). <br /><br />(I'll add this to the manual soon).</span></code></div>
  </div>
 </div>
  <div class="note" id="96402">  <div class="votes">
    <div id="Vu96402">
    <a href="/manual/vote-note.php?id=96402&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96402">
    <a href="/manual/vote-note.php?id=96402&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96402" title="54% like this...">
    11
    </div>
  </div>
  <a href="#96402" class="name">
  <strong class="user"><em>webmaster at removethis dot weird-webdesign dot de</em></strong></a><a class="genanchor" href="#96402"> &para;</a><div class="date" title="2010-02-25 01:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96402">
<div class="phpcode"><code><span class="html">On PHP 5.2.x or previous you might run into problems initializing static variables in subclasses due to the lack of late static binding:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    protected static </span><span class="default">$a</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">init</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) { </span><span class="default">self</span><span class="keyword">::</span><span class="default">$a </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">; }<br />    public static function </span><span class="default">getA</span><span class="keyword">() { return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$a</span><span class="keyword">; }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    protected static </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// redefine $a for own use<br />    <br />    // inherit the init() method<br />    </span><span class="keyword">public static function </span><span class="default">getA</span><span class="keyword">() { return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$a</span><span class="keyword">; }<br />}<br /><br /></span><span class="default">B</span><span class="keyword">::</span><span class="default">init</span><span class="keyword">(</span><span class="string">'lala'</span><span class="keyword">);<br />echo </span><span class="string">'A::$a = '</span><span class="keyword">.</span><span class="default">A</span><span class="keyword">::</span><span class="default">getA</span><span class="keyword">().</span><span class="string">'; B::$a = '</span><span class="keyword">.</span><span class="default">B</span><span class="keyword">::</span><span class="default">getA</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />This will output:<br />A::$a = lala; B::$a = <br /><br />If the init() method looks the same for (almost) all subclasses there should be no need to implement init() in every subclass and by that producing redundant code.<br /><br />Solution 1:<br />Turn everything into non-static. BUT: This would produce redundant data on every object of the class.<br /><br />Solution 2:<br />Turn static $a on class A into an array, use classnames of subclasses as indeces. By doing so you also don't have to redefine $a for the subclasses and the superclass' $a can be private.<br /><br />Short example on a DataRecord class without error checking:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">DataRecord </span><span class="keyword">{<br />    private static </span><span class="default">$db</span><span class="keyword">; </span><span class="comment">// MySQLi-Connection, same for all subclasses<br />    </span><span class="keyword">private static </span><span class="default">$table </span><span class="keyword">= array(); </span><span class="comment">// Array of tables for subclasses<br />    <br />    </span><span class="keyword">public static function </span><span class="default">init</span><span class="keyword">(</span><span class="default">$classname</span><span class="keyword">, </span><span class="default">$table</span><span class="keyword">, </span><span class="default">$db </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />        if (!(</span><span class="default">$db </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)) </span><span class="default">self</span><span class="keyword">::</span><span class="default">$db </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">;<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$table</span><span class="keyword">[</span><span class="default">$classname</span><span class="keyword">] = </span><span class="default">$table</span><span class="keyword">;<br />    }<br />    <br />    public static function </span><span class="default">getDB</span><span class="keyword">() { return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$db</span><span class="keyword">; }<br />    public static function </span><span class="default">getTable</span><span class="keyword">(</span><span class="default">$classname</span><span class="keyword">) { return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$table</span><span class="keyword">[</span><span class="default">$classname</span><span class="keyword">]; }<br />}<br /><br />class </span><span class="default">UserDataRecord </span><span class="keyword">extends </span><span class="default">DataRecord </span><span class="keyword">{<br />    public static function </span><span class="default">fetchFromDB</span><span class="keyword">() {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">getDB</span><span class="keyword">()-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'select * from '</span><span class="keyword">.</span><span class="default">parent</span><span class="keyword">::</span><span class="default">getTable</span><span class="keyword">(</span><span class="string">'UserDataRecord'</span><span class="keyword">).</span><span class="string">';'</span><span class="keyword">);<br />        <br />        </span><span class="comment">// and so on ...<br />        </span><span class="keyword">return </span><span class="default">$result</span><span class="keyword">; </span><span class="comment">// An array of UserDataRecord objects<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">MySQLi</span><span class="keyword">(...);<br /></span><span class="default">UserDataRecord</span><span class="keyword">::</span><span class="default">init</span><span class="keyword">(</span><span class="string">'UserDataRecord'</span><span class="keyword">, </span><span class="string">'users'</span><span class="keyword">, </span><span class="default">$db</span><span class="keyword">);<br /></span><span class="default">$users </span><span class="keyword">= </span><span class="default">UserDataRecord</span><span class="keyword">::</span><span class="default">fetchFromDB</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />I hope this helps some people who need to operate on PHP 5.2.x servers for some reason. Late static binding, of course, makes this workaround obsolete.</span></code></div>
  </div>
 </div>
  <div class="note" id="101350">  <div class="votes">
    <div id="Vu101350">
    <a href="/manual/vote-note.php?id=101350&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101350">
    <a href="/manual/vote-note.php?id=101350&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101350" title="53% like this...">
    6
    </div>
  </div>
  <a href="#101350" class="name">
  <strong class="user"><em>tolean_dj at yahoo dot com</em></strong></a><a class="genanchor" href="#101350"> &para;</a><div class="date" title="2010-12-11 05:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101350">
<div class="phpcode"><code><span class="html">Starting with php 5.3 you can get use of new features of static keyword. Here's an example of abstract singleton class:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">abstract class </span><span class="default">Singleton </span><span class="keyword">{<br /><br />    protected static </span><span class="default">$_instance </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /><br />    </span><span class="comment">/**<br />     * Prevent direct object creation<br />     */<br />    </span><span class="keyword">final private function  </span><span class="default">__construct</span><span class="keyword">() { }<br /><br />    </span><span class="comment">/**<br />     * Prevent object cloning<br />     */<br />    </span><span class="keyword">final private function  </span><span class="default">__clone</span><span class="keyword">() { }<br /><br />    </span><span class="comment">/**<br />     * Returns new or existing Singleton instance<br />     * @return Singleton<br />     */<br />    </span><span class="keyword">final public static function </span><span class="default">getInstance</span><span class="keyword">(){<br />        if(</span><span class="default">null </span><span class="keyword">!== static::</span><span class="default">$_instance</span><span class="keyword">){<br />            return static::</span><span class="default">$_instance</span><span class="keyword">;<br />        }<br />        static::</span><span class="default">$_instance </span><span class="keyword">= new static();<br />        return static::</span><span class="default">$_instance</span><span class="keyword">;<br />    }<br />    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80162">  <div class="votes">
    <div id="Vu80162">
    <a href="/manual/vote-note.php?id=80162&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80162">
    <a href="/manual/vote-note.php?id=80162&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80162" title="53% like this...">
    5
    </div>
  </div>
  <a href="#80162" class="name">
  <strong class="user"><em>ssj dot narutovash at gmail dot com</em></strong></a><a class="genanchor" href="#80162"> &para;</a><div class="date" title="2008-01-01 08:48"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80162">
<div class="phpcode"><code><span class="html">It's come to my attention that you cannot use a static member in an HEREDOC string.  The following code<br /><br />class A<br />{<br />  public static $BLAH = "user";<br /><br />  function __construct()<br />  {<br />    echo &lt;&lt;&lt;EOD<br />&lt;h1&gt;Hello {self::$BLAH}&lt;/h1&gt;<br />EOD;<br />  }<br />}<br /><br />$blah = new A();<br /><br />produces this in the source code:<br /><br />&lt;h1&gt;Hello {self::}&lt;/h1&gt;<br /><br />Solution:<br /><br />before using a static member, store it in a local variable, like so:<br /><br />class B<br />{<br />  public static $BLAH = "user";<br /><br />  function __construct()<br />  {<br />    $blah = self::$BLAH;<br />    echo &lt;&lt;&lt;EOD<br />&lt;h1&gt;Hello {$blah}&lt;/h1&gt;<br />EOD;<br />  }<br />}<br /><br />and the output's source code will be:<br /><br />&lt;h1&gt;Hello user&lt;/h1&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="103530">  <div class="votes">
    <div id="Vu103530">
    <a href="/manual/vote-note.php?id=103530&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103530">
    <a href="/manual/vote-note.php?id=103530&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103530" title="53% like this...">
    6
    </div>
  </div>
  <a href="#103530" class="name">
  <strong class="user"><em>gratcypalma at gmail dot om</em></strong></a><a class="genanchor" href="#103530"> &para;</a><div class="date" title="2011-04-18 11:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103530">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br />    private static </span><span class="default">$getInitial</span><span class="keyword">;<br /><br />    public static function </span><span class="default">getInitial</span><span class="keyword">() {<br />        if (</span><span class="default">self</span><span class="keyword">::</span><span class="default">$getInitial </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">)<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$getInitial </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">();<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$getInitial</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">foo</span><span class="keyword">::</span><span class="default">getInitial</span><span class="keyword">();<br /><br /></span><span class="comment">/*<br />this is the example to use new class with static method..<br />i hope it help<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113708">  <div class="votes">
    <div id="Vu113708">
    <a href="/manual/vote-note.php?id=113708&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113708">
    <a href="/manual/vote-note.php?id=113708&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113708" title="53% like this...">
    2
    </div>
  </div>
  <a href="#113708" class="name">
  <strong class="user"><em>manishpatel2280 at gmail dot com</em></strong></a><a class="genanchor" href="#113708"> &para;</a><div class="date" title="2013-11-19 02:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113708">
<div class="phpcode"><code><span class="html">In real world, we can say will use static method when we dont want to create object instance. <br /><br />e.g ... <br /><br />validateEmail($email) {<br /> if(T) return true;<br />return false;<br />}<br /><br />//This makes not much sense<br />$obj = new Validate();<br />$result = $obj-&gt;validateEmail($email);<br /><br />//This makes more sense<br />$result = Validate::validateEmail($email);</span></code></div>
  </div>
 </div>
  <div class="note" id="86452">  <div class="votes">
    <div id="Vu86452">
    <a href="/manual/vote-note.php?id=86452&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86452">
    <a href="/manual/vote-note.php?id=86452&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86452" title="52% like this...">
    2
    </div>
  </div>
  <a href="#86452" class="name">
  <strong class="user"><em>zerocool at gameinsde dot ru</em></strong></a><a class="genanchor" href="#86452"> &para;</a><div class="date" title="2008-10-20 01:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86452">
<div class="phpcode"><code><span class="html">Hi, here's my simple Singleton example, i think it can be useful for someone. You can use this pattern to connect to the database for example.<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">class </span><span class="default">MySingleton<br />  </span><span class="keyword">{<br />    private static </span><span class="default">$instance </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />    private function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />      </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">name </span><span class="keyword">= </span><span class="string">'Freddy'</span><span class="keyword">;<br /><br />    }<br /><br />    public static function </span><span class="default">getInstance</span><span class="keyword">()<br />    {<br />      if(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$instance </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">)<br />      {<br />        print </span><span class="string">"Object created!&lt;br&gt;"</span><span class="keyword">;<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">self</span><span class="keyword">;<br /><br />      }<br /><br />      return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instance</span><span class="keyword">;<br /><br />    }<br /><br />    public function </span><span class="default">sayHello</span><span class="keyword">()<br />    {<br />      print </span><span class="string">"Hello my name is </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">name</span><span class="keyword">}</span><span class="string">!&lt;br&gt;"</span><span class="keyword">;<br /><br />    }<br /><br />    public function </span><span class="default">setName</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)<br />    {<br />      </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">name </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;<br /><br />    }<br /><br />  }<br /><br />  </span><span class="comment">//<br /><br />  </span><span class="default">$objA </span><span class="keyword">= </span><span class="default">MySingleton</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">(); </span><span class="comment">// Object created!<br /><br />  </span><span class="default">$objA</span><span class="keyword">-&gt; </span><span class="default">sayHello</span><span class="keyword">(); </span><span class="comment">// Hello my name is Freddy!<br /><br />  </span><span class="default">$objA</span><span class="keyword">-&gt; </span><span class="default">setName</span><span class="keyword">(</span><span class="string">"Alex"</span><span class="keyword">);<br /><br />  </span><span class="default">$objA</span><span class="keyword">-&gt; </span><span class="default">sayHello</span><span class="keyword">(); </span><span class="comment">// Hello my name is Alex!<br /><br />  </span><span class="default">$objB </span><span class="keyword">= </span><span class="default">MySingleton</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br /><br />  </span><span class="default">$objB</span><span class="keyword">-&gt; </span><span class="default">sayHello</span><span class="keyword">(); </span><span class="comment">// Hello my name is Alex!<br /><br />  </span><span class="default">$objB</span><span class="keyword">-&gt; </span><span class="default">setName</span><span class="keyword">(</span><span class="string">"Bob"</span><span class="keyword">);<br /><br />  </span><span class="default">$objA</span><span class="keyword">-&gt; </span><span class="default">sayHello</span><span class="keyword">(); </span><span class="comment">// Hello my name is Bob!<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130493">  <div class="votes">
    <div id="Vu130493">
    <a href="/manual/vote-note.php?id=130493&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130493">
    <a href="/manual/vote-note.php?id=130493&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130493" title="no votes...">
    0
    </div>
  </div>
  <a href="#130493" class="name">
  <strong class="user"><em>mmjunior at live dot com</em></strong></a><a class="genanchor" href="#130493"> &para;</a><div class="date" title="2025-09-24 10:45"><strong>5 days ago</strong></div>
  <div class="text" id="Hcom130493">
<div class="phpcode"><code><span class="html">I always thought that using `static` would be slightly faster... until I decided to test it and created this simple benchmark. <br />To my surprise, the processing time is always (slightly) higher with `static`.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">{<br />    public static </span><span class="default">$valStatic </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    public </span><span class="default">$valNormal </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    public function </span><span class="default">sumStatic</span><span class="keyword">() {<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$valStatic </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">sumNormal</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">valNormal </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">();<br /><br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">sumNormal</span><span class="keyword">();<br />}<br />echo </span><span class="string">'Normal: ' </span><span class="keyword">. (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">sumStatic</span><span class="keyword">();<br />}<br />echo </span><span class="string">'Static: ' </span><span class="keyword">. (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">// Outputs like: <br />// Normal: 0.029894113540649<br />// Static: 0.03360915184021<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130045">  <div class="votes">
    <div id="Vu130045">
    <a href="/manual/vote-note.php?id=130045&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130045">
    <a href="/manual/vote-note.php?id=130045&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130045" title="50% like this...">
    0
    </div>
  </div>
  <a href="#130045" class="name">
  <strong class="user"><em>1998shivammishra167 at gmail dot com</em></strong></a><a class="genanchor" href="#130045"> &para;</a><div class="date" title="2025-02-20 12:22"><strong>7 months ago</strong></div>
  <div class="text" id="Hcom130045">
<div class="phpcode"><code><span class="html">//Difference Between self:: and static::<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    protected static </span><span class="default">$name </span><span class="keyword">= </span><span class="string">"Class A"</span><span class="keyword">;<br /><br />    public static function </span><span class="default">getName</span><span class="keyword">() {<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$name</span><span class="keyword">;  </span><span class="comment">// Uses class A's property<br />    </span><span class="keyword">}<br /><br />    public static function </span><span class="default">getNameStatic</span><span class="keyword">() {<br />        return static::</span><span class="default">$name</span><span class="keyword">;  </span><span class="comment">// Uses the property from the child class<br />    </span><span class="keyword">}<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    protected static </span><span class="default">$name </span><span class="keyword">= </span><span class="string">"Class B"</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">B</span><span class="keyword">::</span><span class="default">getName</span><span class="keyword">();       </span><span class="comment">// Output: Class A (Because of self::)<br /></span><span class="keyword">echo </span><span class="default">B</span><span class="keyword">::</span><span class="default">getNameStatic</span><span class="keyword">(); </span><span class="comment">// Output: Class B (Because of static::)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95217">  <div class="votes">
    <div id="Vu95217">
    <a href="/manual/vote-note.php?id=95217&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95217">
    <a href="/manual/vote-note.php?id=95217&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95217" title="51% like this...">
    1
    </div>
  </div>
  <a href="#95217" class="name">
  <strong class="user"><em>Jay Cain</em></strong></a><a class="genanchor" href="#95217"> &para;</a><div class="date" title="2009-12-18 02:45"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95217">
<div class="phpcode"><code><span class="html">Regarding the initialization of complex static variables in a class, you can emulate a static constructor by creating a static function named something like init() and calling it immediately after the class definition.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Example </span><span class="keyword">{<br />    private static </span><span class="default">$a </span><span class="keyword">= </span><span class="string">"Hello"</span><span class="keyword">;<br />    private static </span><span class="default">$b</span><span class="keyword">;<br /><br />    public static function </span><span class="default">init</span><span class="keyword">() {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$b </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">$a </span><span class="keyword">. </span><span class="string">" World!"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">Example</span><span class="keyword">::</span><span class="default">init</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51484">  <div class="votes">
    <div id="Vu51484">
    <a href="/manual/vote-note.php?id=51484&amp;page=language.oop5.static&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51484">
    <a href="/manual/vote-note.php?id=51484&amp;page=language.oop5.static&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51484" title="50% like this...">
    1
    </div>
  </div>
  <a href="#51484" class="name">
  <strong class="user"><em>michalf at ncac dot torun dot pl</em></strong></a><a class="genanchor" href="#51484"> &para;</a><div class="date" title="2005-03-31 02:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51484">
<div class="phpcode"><code><span class="html">Inheritance with the static elements is a nightmare in php. Consider the following code:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">BaseClass</span><span class="keyword">{<br />    public static </span><span class="default">$property</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">DerivedClassOne </span><span class="keyword">extends </span><span class="default">BaseClass</span><span class="keyword">{<br />}<br /><br />class </span><span class="default">DerivedClassTwo </span><span class="keyword">extends </span><span class="default">BaseClass</span><span class="keyword">{<br />}<br /><br /></span><span class="default">DerivedClassOne</span><span class="keyword">::</span><span class="default">$property </span><span class="keyword">= </span><span class="string">"foo"</span><span class="keyword">;<br /></span><span class="default">DerivedClassTwo</span><span class="keyword">::</span><span class="default">$property </span><span class="keyword">= </span><span class="string">"bar"</span><span class="keyword">;<br /><br />echo </span><span class="default">DerivedClassOne</span><span class="keyword">::</span><span class="default">$property</span><span class="keyword">; </span><span class="comment">//one would naively expect "foo"...<br /></span><span class="default">?&gt;<br /></span><br />What would you expect as an output? "foo"? wrong. It is "bar"!!! Static variables are not inherited, they point to the BaseClass::$property.<br /><br />At this point I think it is a big pity inheritance does not work in case of static variables/methods. Keep this in mind and save your time when debugging.<br /><br />best regards - michal</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.static&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.static.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
