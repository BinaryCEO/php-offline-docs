<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Scope Resolution Operator (::) - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php">
 <link rel="shorturl" href="https://www.php.net/oop5.paamayim-nekudotayim">
 <link rel="alternate" href="https://www.php.net/oop5.paamayim-nekudotayim" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.inheritance.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.static.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.paamayim-nekudotayim.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.paamayim-nekudotayim.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.paamayim-nekudotayim.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.paamayim-nekudotayim.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.paamayim-nekudotayim.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.paamayim-nekudotayim.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.paamayim-nekudotayim.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.paamayim-nekudotayim.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.paamayim-nekudotayim.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Scope Resolution Operator (::)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Scope Resolution Operator (::) - Manual" />
<meta name="twitter:description" content="Scope Resolution Operator (::)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Scope Resolution Operator (::) - Manual" />
<meta itemprop="description" content="Scope Resolution Operator (::)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Scope Resolution Operator (::)" />

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
        <a href="language.oop5.static.php">
          Static Keyword &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.inheritance.php">
          &laquo; Object Inheritance        </a>
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
            <option value='en/language.oop5.paamayim-nekudotayim.php' selected="selected">English</option>
            <option value='de/language.oop5.paamayim-nekudotayim.php'>German</option>
            <option value='es/language.oop5.paamayim-nekudotayim.php'>Spanish</option>
            <option value='fr/language.oop5.paamayim-nekudotayim.php'>French</option>
            <option value='it/language.oop5.paamayim-nekudotayim.php'>Italian</option>
            <option value='ja/language.oop5.paamayim-nekudotayim.php'>Japanese</option>
            <option value='pt_BR/language.oop5.paamayim-nekudotayim.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.paamayim-nekudotayim.php'>Russian</option>
            <option value='tr/language.oop5.paamayim-nekudotayim.php'>Turkish</option>
            <option value='uk/language.oop5.paamayim-nekudotayim.php'>Ukrainian</option>
            <option value='zh/language.oop5.paamayim-nekudotayim.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.paamayim-nekudotayim" class="sect1">
 <h2 class="title">Scope Resolution Operator (::)</h2>

 <p class="para">
  The Scope Resolution Operator (also called Paamayim Nekudotayim) or in
  simpler terms, the double colon, is a token that allows access to
  a <a href="language.oop5.constants.php" class="link">constant</a>,
  <a href="language.oop5.static.php" class="link">static</a> property,
  or <a href="language.oop5.static.php" class="link">static</a> method
  of a class or one of its parents.
  Moreover, static properties or methods can be overriden via
  <a href="language.oop5.late-static-bindings.php" class="link">late static binding</a>.
 </p>

 <p class="para">
  When referencing these items from outside the class definition, use
  the name of the class.
 </p>

 <p class="para">
  It&#039;s possible to reference the class using a variable.
  The variable&#039;s value can not be a keyword (e.g. <code class="literal">self</code>,
  <code class="literal">parent</code> and <code class="literal">static</code>).
 </p>

 <p class="para">
  Paamayim Nekudotayim would, at first, seem like a strange choice for
  naming a double-colon. However, while writing the Zend Engine 0.5
  (which powers PHP 3), that&#039;s what the Zend team decided to call it.
  It actually does mean double-colon - in Hebrew!
 </p>

 <div class="example" id="example-312">
  <p><strong>Example #1 :: from outside the class definition</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">CONST_VALUE </span><span style="color: #007700">= </span><span style="color: #DD0000">'A constant value'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$classname </span><span style="color: #007700">= </span><span style="color: #DD0000">'MyClass'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$classname</span><span style="color: #007700">::</span><span style="color: #0000BB">CONST_VALUE</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">CONST_VALUE</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <p class="para">
  Three special keywords <var class="varname">self</var>, <var class="varname">parent</var> and
  <var class="varname">static</var> are used to access properties or methods from inside
  the class definition.
 </p>

 <div class="example" id="example-313">
  <p><strong>Example #2 :: from inside the class definition</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">CONST_VALUE </span><span style="color: #007700">= </span><span style="color: #DD0000">'A constant value'</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">OtherClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    public static </span><span style="color: #0000BB">$my_static </span><span style="color: #007700">= </span><span style="color: #DD0000">'static var'</span><span style="color: #007700">;<br /><br />    public static function </span><span style="color: #0000BB">doubleColon</span><span style="color: #007700">() {<br />        echo </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">CONST_VALUE </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$my_static </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$classname </span><span style="color: #007700">= </span><span style="color: #DD0000">'OtherClass'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$classname</span><span style="color: #007700">::</span><span style="color: #0000BB">doubleColon</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">OtherClass</span><span style="color: #007700">::</span><span style="color: #0000BB">doubleColon</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <p class="para">
  When an extending class overrides the parent&#039;s definition of a method,
  PHP will not call the parent&#039;s method. It&#039;s up to the extended class
  on whether or not the parent&#039;s method is called. This also applies to <a href="language.oop5.decon.php" class="link">Constructors and Destructors</a>, <a href="language.oop5.overloading.php" class="link">Overloading</a>, and <a href="language.oop5.magic.php" class="link">Magic</a> method definitions.
 </p>

 <div class="example" id="example-314">
  <p><strong>Example #3 Calling a parent&#039;s method</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    protected function </span><span style="color: #0000BB">myFunc</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">"MyClass::myFunc()\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">OtherClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Override parent's definition<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">myFunc</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #FF8000">// But still call the parent function<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">myFunc</span><span style="color: #007700">();<br />        echo </span><span style="color: #DD0000">"OtherClass::myFunc()\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">OtherClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">myFunc</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <p class="para">
  See also <a href="language.oop5.basic.php#language.oop5.basic.class.this" class="link">some examples of
  static call trickery</a>.
 </p>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/paamayim-nekudotayim.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.paamayim-nekudotayim%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.paamayim-nekudotayim&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94976">  <div class="votes">
    <div id="Vu94976">
    <a href="/manual/vote-note.php?id=94976&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94976">
    <a href="/manual/vote-note.php?id=94976&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94976" title="75% like this...">
    241
    </div>
  </div>
  <a href="#94976" class="name">
  <strong class="user"><em>Theriault</em></strong></a><a class="genanchor" href="#94976"> &para;</a><div class="date" title="2009-12-05 08:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94976">
<div class="phpcode"><code><span class="html">A class constant, class property (static), and class function (static) can all share the same name and be accessed using the double-colon.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br /><br />    public static </span><span class="default">$B </span><span class="keyword">= </span><span class="string">'1'</span><span class="keyword">; </span><span class="comment"># Static class variable.<br /><br />    </span><span class="keyword">const </span><span class="default">B </span><span class="keyword">= </span><span class="string">'2'</span><span class="keyword">; </span><span class="comment"># Class constant.<br />    <br />    </span><span class="keyword">public static function </span><span class="default">B</span><span class="keyword">() { </span><span class="comment"># Static class function.<br />        </span><span class="keyword">return </span><span class="string">'3'</span><span class="keyword">;<br />    }<br />    <br />}<br /><br />echo </span><span class="default">A</span><span class="keyword">::</span><span class="default">$B </span><span class="keyword">. </span><span class="default">A</span><span class="keyword">::</span><span class="default">B </span><span class="keyword">. </span><span class="default">A</span><span class="keyword">::</span><span class="default">B</span><span class="keyword">(); </span><span class="comment"># Outputs: 123<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121085">  <div class="votes">
    <div id="Vu121085">
    <a href="/manual/vote-note.php?id=121085&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121085">
    <a href="/manual/vote-note.php?id=121085&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121085" title="72% like this...">
    105
    </div>
  </div>
  <a href="#121085" class="name">
  <strong class="user"><em>1naveengiri at gmail dot com</em></strong></a><a class="genanchor" href="#121085"> &para;</a><div class="date" title="2017-05-15 06:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121085">
<div class="phpcode"><code><span class="html">In PHP, you use the self keyword to access static properties and methods.<br /><br />The problem is that you can replace $this-&gt;method() with self::method() anywhere, regardless if method() is declared static or not. So which one should you use?<br /><br />Consider this code:<br /><br />class ParentClass {<br />    function test() {<br />        self::who();    // will output 'parent'<br />        $this-&gt;who();    // will output 'child'<br />    }<br /><br />    function who() {<br />        echo 'parent';<br />    }<br />}<br /><br />class ChildClass extends ParentClass {<br />    function who() {<br />        echo 'child';<br />    }<br />}<br /><br />$obj = new ChildClass();<br />$obj-&gt;test();<br />In this example, self::who() will always output ‘parent’, while $this-&gt;who() will depend on what class the object has.<br /><br />Now we can see that self refers to the class in which it is called, while $this refers to the class of the current object.<br /><br />So, you should use self only when $this is not available, or when you don’t want to allow descendant classes to overwrite the current method.</span></code></div>
  </div>
 </div>
  <div class="note" id="113231">  <div class="votes">
    <div id="Vu113231">
    <a href="/manual/vote-note.php?id=113231&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113231">
    <a href="/manual/vote-note.php?id=113231&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113231" title="67% like this...">
    40
    </div>
  </div>
  <a href="#113231" class="name">
  <strong class="user"><em>guy at syntheticwebapps dot com</em></strong></a><a class="genanchor" href="#113231"> &para;</a><div class="date" title="2013-09-15 08:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113231">
<div class="phpcode"><code><span class="html">It seems as though you can use more than the class name to reference the static variables, constants, and static functions of a class definition from outside that class using the :: . The language appears to allow you to use the object itself. <br /><br />For example:<br />class horse <br />{<br />   static $props = {'order'=&gt;'mammal'};<br />}<br />$animal = new horse();<br />echo $animal::$props['order'];<br /><br />// yields 'mammal'<br /><br />This does not appear to be documented but I see it as an important convenience in the language. I would like to see it documented and supported as valid. <br /><br />If it weren't supported officially, the alternative would seem to be messy, something like this:<br /><br />$animalClass = get_class($animal);<br />echo $animalClass::$props['order'];</span></code></div>
  </div>
 </div>
  <div class="note" id="113376">  <div class="votes">
    <div id="Vu113376">
    <a href="/manual/vote-note.php?id=113376&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113376">
    <a href="/manual/vote-note.php?id=113376&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113376" title="63% like this...">
    18
    </div>
  </div>
  <a href="#113376" class="name">
  <strong class="user"><em>jasverix at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#113376"> &para;</a><div class="date" title="2013-10-03 01:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113376">
<div class="phpcode"><code><span class="html">Just found out that using the class name may also work to call similar function of anchestor class.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Anchestor </span><span class="keyword">{<br />   <br />   public </span><span class="default">$Prefix </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />   private </span><span class="default">$_string </span><span class="keyword">=  </span><span class="string">'Bar'</span><span class="keyword">;<br />    public function </span><span class="default">Foo</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Prefix</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_string</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">MyParent </span><span class="keyword">extends </span><span class="default">Anchestor </span><span class="keyword">{<br />    public function </span><span class="default">Foo</span><span class="keyword">() {<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Prefix </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">Foo</span><span class="keyword">().</span><span class="string">'Baz'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Child </span><span class="keyword">extends </span><span class="default">MyParent </span><span class="keyword">{<br />    public function </span><span class="default">Foo</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Prefix </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br />        return </span><span class="default">Anchestor</span><span class="keyword">::</span><span class="default">Foo</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">Child</span><span class="keyword">();<br />echo </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">Foo</span><span class="keyword">(); </span><span class="comment">//return FooBar, because Prefix, as in Anchestor::Foo()<br /><br /></span><span class="default">?&gt;<br /></span><br />The Child class calls at Anchestor::Foo(), and therefore MyParent::Foo() is never run.</span></code></div>
  </div>
 </div>
  <div class="note" id="91258">  <div class="votes">
    <div id="Vu91258">
    <a href="/manual/vote-note.php?id=91258&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91258">
    <a href="/manual/vote-note.php?id=91258&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91258" title="57% like this...">
    9
    </div>
  </div>
  <a href="#91258" class="name">
  <strong class="user"><em>giovanni at gargani dot it</em></strong></a><a class="genanchor" href="#91258"> &para;</a><div class="date" title="2009-06-02 06:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91258">
<div class="phpcode"><code><span class="html">Well, a "swiss knife" couple of code lines to call parent method. The only limit is you can't use it with "by reference" parameters.
<br />Main advantage you dont need to know the "actual" signature of your super class, you just need to know which arguments do you need
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">someclass </span><span class="keyword">extends </span><span class="default">some superclass </span><span class="keyword">{
<br /></span><span class="comment">// usable for constructors
<br /> </span><span class="keyword">function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$ineedthisone</span><span class="keyword">) {
<br />  </span><span class="default">$args</span><span class="keyword">=</span><span class="default">func_get_args</span><span class="keyword">(); 
<br />  </span><span class="comment">/* $args will contain any argument passed to __construct.   
<br />  * Your formal argument doesnt influence the way func_get_args() works
<br />  */
<br />  </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="string">'parent'</span><span class="keyword">,</span><span class="default">__FUNCTION__</span><span class="keyword">),</span><span class="default">$args</span><span class="keyword">);
<br /> }
<br /></span><span class="comment">// but this is not for __construct only
<br /> </span><span class="keyword">function </span><span class="default">anyMethod</span><span class="keyword">() {
<br />  </span><span class="default">$args</span><span class="keyword">=</span><span class="default">func_get_args</span><span class="keyword">();
<br />  </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="string">'parent'</span><span class="keyword">,</span><span class="default">__FUNCTION__</span><span class="keyword">),</span><span class="default">$args</span><span class="keyword">);
<br /> }
<br />  </span><span class="comment">// Note: php 5.3.0 will even let you do
<br /> </span><span class="keyword">function </span><span class="default">anyMethod</span><span class="keyword">() {
<br />  </span><span class="comment">//Needs php &gt;=5.3.x
<br />  </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="string">'parent'</span><span class="keyword">,</span><span class="default">__FUNCTION__</span><span class="keyword">),</span><span class="default">func_get_args</span><span class="keyword">());
<br /> }
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97740">  <div class="votes">
    <div id="Vu97740">
    <a href="/manual/vote-note.php?id=97740&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97740">
    <a href="/manual/vote-note.php?id=97740&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97740" title="53% like this...">
    8
    </div>
  </div>
  <a href="#97740" class="name">
  <strong class="user"><em>remy dot damour at ----no-spam---laposte dot net</em></strong></a><a class="genanchor" href="#97740"> &para;</a><div class="date" title="2010-05-05 01:50"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97740">
<div class="phpcode"><code><span class="html">As of php 5.3.0, you can use 'static' as scope value as in below example (add flexibility to inheritance mechanism compared to 'self' keyword...)
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{
<br />    const </span><span class="default">C </span><span class="keyword">= </span><span class="string">'constA'</span><span class="keyword">;
<br />    public function </span><span class="default">m</span><span class="keyword">() {
<br />        echo static::</span><span class="default">C</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{
<br />    const </span><span class="default">C </span><span class="keyword">= </span><span class="string">'constB'</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();
<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">m</span><span class="keyword">();
<br />
<br /></span><span class="comment">// output: constB
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88449">  <div class="votes">
    <div id="Vu88449">
    <a href="/manual/vote-note.php?id=88449&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88449">
    <a href="/manual/vote-note.php?id=88449&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88449" title="51% like this...">
    2
    </div>
  </div>
  <a href="#88449" class="name">
  <strong class="user"><em>luka8088 at gmail dot com</em></strong></a><a class="genanchor" href="#88449"> &para;</a><div class="date" title="2009-01-24 03:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88449">
<div class="phpcode"><code><span class="html">Little static trick to go around php strict standards ...<br />Function caller founds an object from which it was called, so that static method can alter it, replacement for $this in static function but without strict warnings :)<br /><br /><span class="default">&lt;?php<br /><br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL </span><span class="keyword">+ </span><span class="default">E_STRICT</span><span class="keyword">);<br /><br />function </span><span class="default">caller </span><span class="keyword">() {<br />  </span><span class="default">$backtrace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />  </span><span class="default">$object </span><span class="keyword">= isset(</span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">]) ? </span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;<br />  </span><span class="default">$k </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        <br />  while (isset(</span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]) &amp;&amp; (!isset(</span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">]) || </span><span class="default">$object </span><span class="keyword">=== </span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">]))<br />    </span><span class="default">$k</span><span class="keyword">++;<br /><br />  return isset(</span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">]) ? </span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">a </span><span class="keyword">{<br /><br />  public </span><span class="default">$data </span><span class="keyword">= </span><span class="string">'Empty'</span><span class="keyword">;<br />  <br />  function </span><span class="default">set_data </span><span class="keyword">() {<br />    </span><span class="default">b</span><span class="keyword">::</span><span class="default">set</span><span class="keyword">();<br />  }<br /><br />}<br /><br />class </span><span class="default">b </span><span class="keyword">{<br /><br />  static function </span><span class="default">set </span><span class="keyword">() {<br />    </span><span class="comment">// $this-&gt;data = 'Data from B !';<br />    // using this in static function throws a warning ...<br />    </span><span class="default">caller</span><span class="keyword">()-&gt;</span><span class="default">data </span><span class="keyword">= </span><span class="string">'Data from B !'</span><span class="keyword">;<br />  }<br /><br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">a</span><span class="keyword">();<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">set_data</span><span class="keyword">();<br />echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Outputs: Data from B !<br /><br />No warnings or errors !</span></code></div>
  </div>
 </div>
  <div class="note" id="94504">  <div class="votes">
    <div id="Vu94504">
    <a href="/manual/vote-note.php?id=94504&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94504">
    <a href="/manual/vote-note.php?id=94504&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94504" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94504" class="name">
  <strong class="user"><em>wouter at interpotential dot com</em></strong></a><a class="genanchor" href="#94504"> &para;</a><div class="date" title="2009-11-09 07:24"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94504">
<div class="phpcode"><code><span class="html">It's worth noting, that the mentioned variable can also be an object instance. This appears to be the easiest way to refer to a static function as high in the inheritance hierarchy as possible, as seen from the instance. I've encountered some odd behavior while using static::something() inside a non-static method.
<br />
<br />See the following example code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">FooClass </span><span class="keyword">{
<br />    public function </span><span class="default">testSelf</span><span class="keyword">() {
<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">t</span><span class="keyword">();
<br />    }
<br />
<br />    public function </span><span class="default">testThis</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">::</span><span class="default">t</span><span class="keyword">();
<br />    }
<br />
<br />    public static function </span><span class="default">t</span><span class="keyword">() {
<br />        return </span><span class="string">'FooClass'</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">__toString</span><span class="keyword">() {
<br />        return </span><span class="string">'FooClass'</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />class </span><span class="default">BarClass </span><span class="keyword">extends </span><span class="default">FooClass </span><span class="keyword">{
<br />    public static function </span><span class="default">t</span><span class="keyword">() {
<br />        return </span><span class="string">'BarClass'</span><span class="keyword">;
<br />    }
<br />
<br />}
<br />
<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">BarClass</span><span class="keyword">();
<br /></span><span class="default">print_r</span><span class="keyword">(Array(
<br />    </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">testSelf</span><span class="keyword">(), </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">testThis</span><span class="keyword">(),
<br />));
<br /></span><span class="default">?&gt;
<br /></span>
<br />which outputs:
<br />
<br />&lt;pre&gt;
<br />Array
<br />(
<br />    [0] =&gt; FooClass
<br />    [1] =&gt; BarClass
<br />)
<br />&lt;/pre&gt;
<br />
<br />As you can see, __toString has no effect on any of this. Just in case you were wondering if perhaps this was the way it's done.</span></code></div>
  </div>
 </div>
  <div class="note" id="88681">  <div class="votes">
    <div id="Vu88681">
    <a href="/manual/vote-note.php?id=88681&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88681">
    <a href="/manual/vote-note.php?id=88681&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88681" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#88681" class="name">
  <strong class="user"><em>csaba dot dobai at php-sparcle dot com</em></strong></a><a class="genanchor" href="#88681"> &para;</a><div class="date" title="2009-02-03 09:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88681">
<div class="phpcode"><code><span class="html">For the 'late static binding' topic I published a code below, that demonstrates a trick for how to setting variable value in the late class, and print that in the parent (or the parent's parent, etc.) class.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">cA<br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Test property for using direct default value<br />     */<br />    </span><span class="keyword">protected static </span><span class="default">$item </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br />    <br />    </span><span class="comment">/**<br />     * Test property for using indirect default value<br />     */<br />    </span><span class="keyword">protected static </span><span class="default">$other </span><span class="keyword">= </span><span class="string">'cA'</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">method</span><span class="keyword">()<br />    {<br />        print </span><span class="default">self</span><span class="keyword">::</span><span class="default">$item</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">; </span><span class="comment">// It prints 'Foo' on everyway... :(<br />        </span><span class="keyword">print </span><span class="default">self</span><span class="keyword">::</span><span class="default">$other</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">; </span><span class="comment">// We just think that, this one prints 'cA' only, but... :)<br />    </span><span class="keyword">}<br />    <br />    public static function </span><span class="default">setOther</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />    {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$other </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">; </span><span class="comment">// Set a value in this scope.<br />    </span><span class="keyword">}<br />}<br /><br />class </span><span class="default">cB </span><span class="keyword">extends </span><span class="default">cA<br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Test property with redefined default value<br />     */<br />    </span><span class="keyword">protected static </span><span class="default">$item </span><span class="keyword">= </span><span class="string">'Bar'</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">setOther</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />    {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$other </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">cC </span><span class="keyword">extends </span><span class="default">cA<br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Test property with redefined default value<br />     */<br />    </span><span class="keyword">protected static </span><span class="default">$item </span><span class="keyword">= </span><span class="string">'Tango'</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">method</span><span class="keyword">()<br />    {<br />        print </span><span class="default">self</span><span class="keyword">::</span><span class="default">$item</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">; </span><span class="comment">// It prints 'Foo' on everyway... :(<br />        </span><span class="keyword">print </span><span class="default">self</span><span class="keyword">::</span><span class="default">$other</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">; </span><span class="comment">// We just think that, this one prints 'cA' only, but... :)<br />    </span><span class="keyword">}<br />    <br />    </span><span class="comment">/**<br />     * Now we drop redeclaring the setOther() method, use cA with 'self::' just for fun.<br />     */<br /></span><span class="keyword">}<br /><br />class </span><span class="default">cD </span><span class="keyword">extends </span><span class="default">cA<br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Test property with redefined default value<br />     */<br />    </span><span class="keyword">protected static </span><span class="default">$item </span><span class="keyword">= </span><span class="string">'Foxtrot'</span><span class="keyword">;<br />    <br />    </span><span class="comment">/**<br />     * Now we drop redeclaring all methods to complete this issue.<br />     */<br /></span><span class="keyword">}<br /><br /></span><span class="default">cB</span><span class="keyword">::</span><span class="default">setOther</span><span class="keyword">(</span><span class="string">'cB'</span><span class="keyword">); </span><span class="comment">// It's cB::method()!<br /></span><span class="default">cB</span><span class="keyword">::</span><span class="default">method</span><span class="keyword">(); </span><span class="comment">// It's cA::method()!<br /></span><span class="default">cC</span><span class="keyword">::</span><span class="default">setOther</span><span class="keyword">(</span><span class="string">'cC'</span><span class="keyword">); </span><span class="comment">// It's cA::method()!<br /></span><span class="default">cC</span><span class="keyword">::</span><span class="default">method</span><span class="keyword">(); </span><span class="comment">// It's cC::method()!<br /></span><span class="default">cD</span><span class="keyword">::</span><span class="default">setOther</span><span class="keyword">(</span><span class="string">'cD'</span><span class="keyword">); </span><span class="comment">// It's cA::method()!<br /></span><span class="default">cD</span><span class="keyword">::</span><span class="default">method</span><span class="keyword">(); </span><span class="comment">// It's cA::method()!<br /><br />/**<br /> * Results: -&gt;<br /> * Foo<br /> * cB<br /> * Tango<br /> * cC<br /> * Foo<br /> * cD<br /> * <br /> * What the hell?! :)<br /> */<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61174">  <div class="votes">
    <div id="Vu61174">
    <a href="/manual/vote-note.php?id=61174&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61174">
    <a href="/manual/vote-note.php?id=61174&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61174" title="47% like this...">
    -3
    </div>
  </div>
  <a href="#61174" class="name">
  <strong class="user"><em>developit at mail dot ru</em></strong></a><a class="genanchor" href="#61174"> &para;</a><div class="date" title="2006-01-27 03:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61174">
<div class="phpcode"><code><span class="html">You use 'self' to access this class, 'parent' - to access parent class, and what will you do to access a parent of the parent? Or to access the very root class of deep class hierarchy? The answer is to use classnames. That'll work just like 'parent'. Here's an example to explain what I mean. Following code<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    protected </span><span class="default">$x </span><span class="keyword">= </span><span class="string">'A'</span><span class="keyword">;<br />    public function </span><span class="default">f</span><span class="keyword">()<br />    {<br />        return </span><span class="string">'['</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="keyword">.</span><span class="string">']'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A<br /></span><span class="keyword">{<br />    protected </span><span class="default">$x </span><span class="keyword">= </span><span class="string">'B'</span><span class="keyword">;<br />    public function </span><span class="default">f</span><span class="keyword">()<br />    {<br />        return </span><span class="string">'{'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="keyword">.</span><span class="string">'}'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">C </span><span class="keyword">extends </span><span class="default">B<br /></span><span class="keyword">{<br />    protected </span><span class="default">$x </span><span class="keyword">= </span><span class="string">'C'</span><span class="keyword">;<br />    public function </span><span class="default">f</span><span class="keyword">()<br />    {<br />        return </span><span class="string">'('</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="keyword">.</span><span class="string">')'</span><span class="keyword">.</span><span class="default">parent</span><span class="keyword">::</span><span class="default">f</span><span class="keyword">().</span><span class="default">B</span><span class="keyword">::</span><span class="default">f</span><span class="keyword">().</span><span class="default">A</span><span class="keyword">::</span><span class="default">f</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();<br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">();<br /><br />print </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">f</span><span class="keyword">().</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br />print </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">f</span><span class="keyword">().</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br />print </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">f</span><span class="keyword">().</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />will output <br /><br />[A] -- {B} -- (C){C}{C}[C]</span></code></div>
  </div>
 </div>
  <div class="note" id="129163">  <div class="votes">
    <div id="Vu129163">
    <a href="/manual/vote-note.php?id=129163&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129163">
    <a href="/manual/vote-note.php?id=129163&amp;page=language.oop5.paamayim-nekudotayim&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129163" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#129163" class="name">
  <strong class="user"><em>gazianis2200 at gmail dot com</em></strong></a><a class="genanchor" href="#129163"> &para;</a><div class="date" title="2024-01-15 02:43"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129163">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />*access a constant from outside a class<br />*/<br /></span><span class="keyword">class </span><span class="default">Foo</span><span class="keyword">{<br />    public const </span><span class="default">A </span><span class="keyword">= </span><span class="string">"Constant A"</span><span class="keyword">;<br />}<br />echo </span><span class="default">Foo</span><span class="keyword">::</span><span class="default">A</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/**<br />*access a constant within its own class <br />*/<br /><br /></span><span class="keyword">class </span><span class="default">Bar</span><span class="keyword">{<br />    public const </span><span class="default">A </span><span class="keyword">= </span><span class="string">"Constant A"</span><span class="keyword">;<br />    public function </span><span class="default">abc</span><span class="keyword">(){<br />        echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">A</span><span class="keyword">;<br />        echo </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">abc</span><span class="keyword">();<br /><br /></span><span class="comment">/**<br />*access a constant within her child class<br />*/<br /><br /></span><span class="keyword">class </span><span class="default">Baz </span><span class="keyword">extends </span><span class="default">Bar</span><span class="keyword">{<br />    public function </span><span class="default">abc</span><span class="keyword">(){<br />        echo </span><span class="default">parent</span><span class="keyword">::</span><span class="default">A</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Baz</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">abc</span><span class="keyword">();<br /><br /></span><span class="comment">//Static property and static method also follows this principle.</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.paamayim-nekudotayim&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
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
