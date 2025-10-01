<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Class Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.constants.php">
 <link rel="shorturl" href="https://www.php.net/oop5.constants">
 <link rel="alternate" href="https://www.php.net/oop5.constants" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.property-hooks.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.autoload.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Class Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Class Constants - Manual" />
<meta name="twitter:description" content="Class Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Class Constants - Manual" />
<meta itemprop="description" content="Class Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Class Constants" />

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
        <a href="language.oop5.autoload.php">
          Autoloading Classes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.property-hooks.php">
          &laquo; Property Hooks        </a>
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
            <option value='en/language.oop5.constants.php' selected="selected">English</option>
            <option value='de/language.oop5.constants.php'>German</option>
            <option value='es/language.oop5.constants.php'>Spanish</option>
            <option value='fr/language.oop5.constants.php'>French</option>
            <option value='it/language.oop5.constants.php'>Italian</option>
            <option value='ja/language.oop5.constants.php'>Japanese</option>
            <option value='pt_BR/language.oop5.constants.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.constants.php'>Russian</option>
            <option value='tr/language.oop5.constants.php'>Turkish</option>
            <option value='uk/language.oop5.constants.php'>Ukrainian</option>
            <option value='zh/language.oop5.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.constants" class="sect1">
 <h2 class="title">Class Constants</h2>
 <p class="para">
  It is possible to define <a href="language.constants.php" class="link">constants</a>
  on a per-class basis remaining the same and unchangeable.
  The default visibility of class constants is <code class="literal">public</code>.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Class constants can be redefined by a child class.
   As of PHP 8.1.0, class constants cannot be redefined by a child class
   if it is defined as <a href="language.oop5.final.php" class="link">final</a>.
  </p>
 </p></blockquote>
 <p class="para">
  It&#039;s also possible for interfaces to have constants. Look
  at the <a href="language.oop5.interfaces.php" class="link">interface documentation</a>
  for examples.
 </p>
 <p class="para">
  It&#039;s possible to reference the class using a variable.
  The variable&#039;s value can not be a keyword (e.g. <code class="literal">self</code>,
  <code class="literal">parent</code> and <code class="literal">static</code>).
 </p>
 <p class="para">
  Note that class constants are allocated once per class, and not for each
  class instance.
 </p>
 <p class="para">
  As of PHP 8.3.0, class constants can have a scalar type such as <code class="literal">bool</code>,
  <code class="literal">int</code>, <code class="literal">float</code>, <code class="literal">string</code>, or even
  <code class="literal">array</code>. When using <code class="literal">array</code>, the contents can only be
  other scalar types.
 </p>
 <div class="example" id="example-286">
  <p><strong>Example #1 Defining and using a constant</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">CONSTANT </span><span style="color: #007700">= </span><span style="color: #DD0000">'constant value'</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">showConstant</span><span style="color: #007700">() {<br />        echo  </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">CONSTANT </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />echo </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">CONSTANT </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$classname </span><span style="color: #007700">= </span><span style="color: #DD0000">"MyClass"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$classname</span><span style="color: #007700">::</span><span style="color: #0000BB">CONSTANT </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showConstant</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #0000BB">$class</span><span style="color: #007700">::</span><span style="color: #0000BB">CONSTANT</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <p class="para">
  The special <strong><code>::class</code></strong> constant allows
  for fully qualified class name resolution at compile time,
  this is useful for namespaced classes:
 </p>
 <div class="example" id="example-287">
  <p><strong>Example #2 Namespaced ::class example</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />    class </span><span style="color: #0000BB">bar </span><span style="color: #007700">{<br />    }<br /><br />    echo </span><span style="color: #0000BB">bar</span><span style="color: #007700">::class; </span><span style="color: #FF8000">// foo\bar<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-288">
  <p><strong>Example #3 Class constant expression example</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">ONE </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">TWO </span><span style="color: #007700">= </span><span style="color: #0000BB">ONE </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">THREE </span><span style="color: #007700">= </span><span style="color: #0000BB">ONE </span><span style="color: #007700">+ </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TWO</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">SENTENCE </span><span style="color: #007700">= </span><span style="color: #DD0000">'The value of THREE is '</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">THREE</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-289">
  <p><strong>Example #4 Class constant visibility modifiers, as of PHP 7.1.0</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">BAR </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br />    private const </span><span style="color: #0000BB">BAZ </span><span style="color: #007700">= </span><span style="color: #DD0000">'baz'</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">BAR</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">BAZ</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

   <div class="example-contents"><p>Output of the above example in PHP 7.1:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bar

Fatal error: Uncaught Error: Cannot access private const Foo::BAZ in …
</pre></div>
   </div>
 </div>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   As of PHP 7.1.0 visibility modifiers are allowed for class constants.
  </p>
 </p></blockquote>
 <div class="example" id="example-290">
  <p><strong>Example #5 Class constant visibility variance check, as of PHP 8.3.0</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">MyInterface<br /></span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">VALUE </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">implements </span><span style="color: #0000BB">MyInterface<br /></span><span style="color: #007700">{<br />    protected const </span><span style="color: #0000BB">VALUE </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>Output of the above example in PHP 8.3:</p></div>
  <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Fatal error: Access level to MyClass::VALUE must be public (as in interface MyInterface) …
</pre></div>
  </div>
 </div>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   As of PHP 8.3.0 visibility variance is checked more strictly.
   Prior to this version, the visibility of a class constant could be different
   from the visibility of the constant in the implemented interface.
  </span>
 </p></blockquote>
 <div class="example" id="example-291">
  <p><strong>Example #6 Fetch class constant syntax, as of PHP 8.3.0</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">BAR </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br />    private const </span><span style="color: #0000BB">BAZ </span><span style="color: #007700">= </span><span style="color: #DD0000">'baz'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'BAR'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">Foo</span><span style="color: #007700">::{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// bar<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   As of PHP 8.3.0, class constants can be fetched dynamically using a
   variable.
  </p>
 </p></blockquote>
 <div class="example" id="example-292">
  <p><strong>Example #7 Assigning types to class constants, as of PHP 8.3.0</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">bool MY_BOOL </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    public const </span><span style="color: #0000BB">int MY_INT </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    public const </span><span style="color: #0000BB">float MY_FLOAT </span><span style="color: #007700">= </span><span style="color: #0000BB">1.01</span><span style="color: #007700">;<br />    public const </span><span style="color: #0000BB">string MY_STRING </span><span style="color: #007700">= </span><span style="color: #DD0000">'one'</span><span style="color: #007700">;<br />    public const array </span><span style="color: #0000BB">MY_ARRAY </span><span style="color: #007700">= [</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_BOOL</span><span style="color: #007700">, </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_INT</span><span style="color: #007700">, </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_FLOAT</span><span style="color: #007700">, </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_STRING</span><span style="color: #007700">];<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_BOOL</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_INT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_FLOAT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_STRING</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_ARRAY</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>Output of the above example in PHP 8.3:</p></div>
  <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
int(1)
float(1.01)
string(3) &quot;one&quot;
array(4) {
  [0]=&gt;
  bool(true)
  [1]=&gt;
  int(1)
  [2]=&gt;
  float(1.01)
  [3]=&gt;
  string(3) &quot;one&quot;
}
   </pre></div>
  </div>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104260">  <div class="votes">
    <div id="Vu104260">
    <a href="/manual/vote-note.php?id=104260&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104260">
    <a href="/manual/vote-note.php?id=104260&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104260" title="69% like this...">
    210
    </div>
  </div>
  <a href="#104260" class="name">
  <strong class="user"><em>tmp dot 4 dot longoria at gmail dot com</em></strong></a><a class="genanchor" href="#104260"> &para;</a><div class="date" title="2011-06-04 01:52"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104260">
<div class="phpcode"><code><span class="html">it's possible to declare constant in base class, and override it in child, and access to correct value of the const from the static method is possible by 'get_called_class' method:<br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">dbObject<br /></span><span class="keyword">{    <br />    const </span><span class="default">TABLE_NAME</span><span class="keyword">=</span><span class="string">'undefined'</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">GetAll</span><span class="keyword">()<br />    {<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">get_called_class</span><span class="keyword">();<br />        return </span><span class="string">"SELECT * FROM `"</span><span class="keyword">.</span><span class="default">$c</span><span class="keyword">::</span><span class="default">TABLE_NAME</span><span class="keyword">.</span><span class="string">"`"</span><span class="keyword">;<br />    }    <br />}<br /><br />class </span><span class="default">dbPerson </span><span class="keyword">extends </span><span class="default">dbObject<br /></span><span class="keyword">{<br />    const </span><span class="default">TABLE_NAME</span><span class="keyword">=</span><span class="string">'persons'</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">dbAdmin </span><span class="keyword">extends </span><span class="default">dbPerson<br /></span><span class="keyword">{<br />    const </span><span class="default">TABLE_NAME</span><span class="keyword">=</span><span class="string">'admins'</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">dbPerson</span><span class="keyword">::</span><span class="default">GetAll</span><span class="keyword">().</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;</span><span class="comment">//output: "SELECT * FROM `persons`"<br /></span><span class="keyword">echo </span><span class="default">dbAdmin</span><span class="keyword">::</span><span class="default">GetAll</span><span class="keyword">().</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;</span><span class="comment">//output: "SELECT * FROM `admins`"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100142">  <div class="votes">
    <div id="Vu100142">
    <a href="/manual/vote-note.php?id=100142&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100142">
    <a href="/manual/vote-note.php?id=100142&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100142" title="73% like this...">
    152
    </div>
  </div>
  <a href="#100142" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#100142"> &para;</a><div class="date" title="2010-09-27 06:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100142">
<div class="phpcode"><code><span class="html">Most people miss the point in declaring constants and confuse then things by trying to declare things like functions or arrays as constants. What happens next is to try things that are more complicated then necessary and sometimes lead to bad coding practices. Let me explain...
<br />
<br />A constant is a name for a value (but it's NOT a variable), that usually will be replaced in the code while it gets COMPILED and NOT at runtime. 
<br />
<br />So returned values from functions can't be used, because they will return a value only at runtime. 
<br />
<br />Arrays can't be used, because they are data structures that exist at runtime. 
<br />
<br />One main purpose of declaring a constant is usually using a value in your code, that you can replace easily in one place without looking for all the occurences. Another is, to avoid mistakes. 
<br />
<br />Think about some examples written by some before me: 
<br />
<br />1. const MY_ARR = "return array(\"A\", \"B\", \"C\", \"D\");";
<br />It was said, this would declare an array that can be used with eval. WRONG! This is just a string as constant, NOT an array. Does it make sense if it would be possible to declare an array as constant? Probably not. Instead declare the values of the array as constants and make an array variable. 
<br />
<br />2. const magic_quotes = (bool)get_magic_quotes_gpc();
<br />This can't work, of course. And it doesn't make sense either. The function already returns the value, there is no purpose in declaring a constant for the same thing. 
<br />
<br />3. Someone spoke about "dynamic" assignments to constants. What? There are no dynamic assignments to constants, runtime assignments work _only_ with variables. Let's take the proposed example: 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Constants that deal only with the database
<br /> */
<br /></span><span class="keyword">class </span><span class="default">DbConstant </span><span class="keyword">extends </span><span class="default">aClassConstant </span><span class="keyword">{
<br />    protected </span><span class="default">$host </span><span class="keyword">= </span><span class="string">'localhost'</span><span class="keyword">;
<br />    protected </span><span class="default">$user </span><span class="keyword">= </span><span class="string">'user'</span><span class="keyword">;
<br />    protected </span><span class="default">$password </span><span class="keyword">= </span><span class="string">'pass'</span><span class="keyword">;
<br />    protected </span><span class="default">$database </span><span class="keyword">= </span><span class="string">'db'</span><span class="keyword">;
<br />    protected </span><span class="default">$time</span><span class="keyword">;
<br />    function </span><span class="default">__construct</span><span class="keyword">() {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">() + </span><span class="default">1</span><span class="keyword">; </span><span class="comment">// dynamic assignment
<br />    </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Those aren't constants, those are properties of the class. Something like "this-&gt;time = time()" would even totally defy the purpose of a constant. Constants are supposed to be just that, constant values, on every execution. They are not supposed to change every time a script runs or a class is instantiated. 
<br />
<br />Conclusion: Don't try to reinvent constants as variables. If constants don't work, just use variables. Then you don't need to reinvent methods to achieve things for what is already there.</span></code></div>
  </div>
 </div>
  <div class="note" id="116109">  <div class="votes">
    <div id="Vu116109">
    <a href="/manual/vote-note.php?id=116109&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116109">
    <a href="/manual/vote-note.php?id=116109&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116109" title="74% like this...">
    143
    </div>
  </div>
  <a href="#116109" class="name">
  <strong class="user"><em>kuzawinski dot marcin at gmail dot com</em></strong></a><a class="genanchor" href="#116109"> &para;</a><div class="date" title="2014-11-11 01:27"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116109">
<div class="phpcode"><code><span class="html">As of PHP 5.6 you can finally define constant using math expressions, like this one:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">MyTimer </span><span class="keyword">{<br />    const </span><span class="default">SEC_PER_DAY </span><span class="keyword">= </span><span class="default">60 </span><span class="keyword">* </span><span class="default">60 </span><span class="keyword">* </span><span class="default">24</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Me happy :)</span></code></div>
  </div>
 </div>
  <div class="note" id="114143">  <div class="votes">
    <div id="Vu114143">
    <a href="/manual/vote-note.php?id=114143&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114143">
    <a href="/manual/vote-note.php?id=114143&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114143" title="72% like this...">
    117
    </div>
  </div>
  <a href="#114143" class="name">
  <strong class="user"><em>delete dot this dot and dot dots dot gt at kani dot hu</em></strong></a><a class="genanchor" href="#114143"> &para;</a><div class="date" title="2014-01-16 11:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114143">
<div class="phpcode"><code><span class="html">I think it's useful if we draw some attention to late static binding here:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    const </span><span class="default">MY_CONST </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    public function </span><span class="default">my_const_self</span><span class="keyword">() {<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">MY_CONST</span><span class="keyword">;<br />    } <br />    public function </span><span class="default">my_const_static</span><span class="keyword">() {<br />        return static::</span><span class="default">MY_CONST</span><span class="keyword">;<br />    } <br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />   const </span><span class="default">MY_CONST </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();<br />echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">my_const_self </span><span class="keyword">? </span><span class="string">'yes' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">; </span><span class="comment">// output: no<br /></span><span class="keyword">echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">my_const_static </span><span class="keyword">? </span><span class="string">'yes' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">; </span><span class="comment">// output: yes<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114599">  <div class="votes">
    <div id="Vu114599">
    <a href="/manual/vote-note.php?id=114599&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114599">
    <a href="/manual/vote-note.php?id=114599&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114599" title="74% like this...">
    94
    </div>
  </div>
  <a href="#114599" class="name">
  <strong class="user"><em>Xiong Chiamiov</em></strong></a><a class="genanchor" href="#114599"> &para;</a><div class="date" title="2014-03-10 11:36"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114599">
<div class="phpcode"><code><span class="html">const can also be used directly in namespaces, a feature never explicitly stated in the documentation.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># foo.php<br /></span><span class="keyword">namespace </span><span class="default">Foo</span><span class="keyword">;<br /><br />const </span><span class="default">BAR </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment"># bar.php<br /></span><span class="keyword">require </span><span class="string">'foo.php'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">Foo\BAR</span><span class="keyword">); </span><span class="comment">// =&gt; int(1)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120083">  <div class="votes">
    <div id="Vu120083">
    <a href="/manual/vote-note.php?id=120083&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120083">
    <a href="/manual/vote-note.php?id=120083&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120083" title="73% like this...">
    51
    </div>
  </div>
  <a href="#120083" class="name">
  <strong class="user"><em>jimmmy dot chief at gmail dot com</em></strong></a><a class="genanchor" href="#120083"> &para;</a><div class="date" title="2016-10-25 02:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120083">
<div class="phpcode"><code><span class="html">Hi, i would like to point out difference between self::CONST and $this::CONST with extended class.<br />Let us have class a:<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">a </span><span class="keyword">{    <br />    const </span><span class="default">CONST_INT </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />    <br />    public function </span><span class="default">getSelf</span><span class="keyword">(){<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">CONST_INT</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">getThis</span><span class="keyword">(){<br />        return </span><span class="default">$this</span><span class="keyword">::</span><span class="default">CONST_INT</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />And class b (which extends a)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a </span><span class="keyword">{<br />    const </span><span class="default">CONST_INT </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;<br />    <br />    public function </span><span class="default">getSelf</span><span class="keyword">(){<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">getSelf</span><span class="keyword">();<br />    }<br />    <br />    public function </span><span class="default">getThis</span><span class="keyword">(){<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">getThis</span><span class="keyword">();<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Both classes have same named constant CONST_INT.<br />When child call method in parent class, there is different output between self and $this usage.<br /><br /><span class="default">&lt;?php<br />$b </span><span class="keyword">= new </span><span class="default">b</span><span class="keyword">();<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">getSelf</span><span class="keyword">());     </span><span class="comment">//10<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">getThis</span><span class="keyword">());     </span><span class="comment">//20<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128452">  <div class="votes">
    <div id="Vu128452">
    <a href="/manual/vote-note.php?id=128452&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128452">
    <a href="/manual/vote-note.php?id=128452&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128452" title="77% like this...">
    5
    </div>
  </div>
  <a href="#128452" class="name">
  <strong class="user"><em>powtac at gmx dot de</em></strong></a><a class="genanchor" href="#128452"> &para;</a><div class="date" title="2023-05-05 02:02"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128452">
<div class="phpcode"><code><span class="html">Since it it is not mentioned in the description the following types can be set as a class constant: string, array, int, bool and probably float. But not objects. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">{<br />    const </span><span class="default">arr  </span><span class="keyword">= array();<br />    const </span><span class="default">string </span><span class="keyword">= </span><span class="string">'string'</span><span class="keyword">;<br />    const </span><span class="default">int </span><span class="keyword">= </span><span class="default">99</span><span class="keyword">;<br />    const </span><span class="default">bool </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(<br />    (new </span><span class="default">Test</span><span class="keyword">())::</span><span class="default">arr</span><span class="keyword">,<br />    (new </span><span class="default">Test</span><span class="keyword">())::</span><span class="default">string</span><span class="keyword">,<br />    (new </span><span class="default">Test</span><span class="keyword">())::</span><span class="default">int</span><span class="keyword">,<br />    (new </span><span class="default">Test</span><span class="keyword">())::</span><span class="default">bool<br /></span><span class="keyword">);<br /><br /></span><span class="comment">/* ouput for PHP 7.0.0+: <br /><br />array(0) {<br />}<br />string(6) "string"<br />int(99)<br />bool(true)</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129926">  <div class="votes">
    <div id="Vu129926">
    <a href="/manual/vote-note.php?id=129926&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129926">
    <a href="/manual/vote-note.php?id=129926&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129926" title="75% like this...">
    2
    </div>
  </div>
  <a href="#129926" class="name">
  <strong class="user"><em>AamirSohailKmAs at gmail dot com</em></strong></a><a class="genanchor" href="#129926"> &para;</a><div class="date" title="2024-12-21 06:19"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129926">
<div class="phpcode"><code><span class="html">Note<br /><br />as of PHP 8.3, it is possible to define Typed class constants.<br />RFC: <a href="https://wiki.php.net/rfc/typed_class_constants" rel="nofollow" target="_blank">https://wiki.php.net/rfc/typed_class_constants</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Example </span><span class="keyword">{<br />    public const </span><span class="default">string NAME </span><span class="keyword">= </span><span class="string">"Aamir"</span><span class="keyword">;<br />    public const </span><span class="default">int  MAX    </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118998">  <div class="votes">
    <div id="Vu118998">
    <a href="/manual/vote-note.php?id=118998&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118998">
    <a href="/manual/vote-note.php?id=118998&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118998" title="67% like this...">
    31
    </div>
  </div>
  <a href="#118998" class="name">
  <strong class="user"><em>nepomuk at nepda dot de</em></strong></a><a class="genanchor" href="#118998"> &para;</a><div class="date" title="2016-03-15 08:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118998">
<div class="phpcode"><code><span class="html">[Editor's note: that is already possible as of PHP 5.6.0.]
<br />
<br />Note, as of PHP7 it is possible to define class constants with an array.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">MyClass
<br /></span><span class="keyword">{
<br />    const </span><span class="default">ABC </span><span class="keyword">= array(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'C'</span><span class="keyword">);
<br />    const </span><span class="default">A </span><span class="keyword">= </span><span class="string">'1'</span><span class="keyword">;
<br />    const </span><span class="default">B </span><span class="keyword">= </span><span class="string">'2'</span><span class="keyword">;
<br />    const </span><span class="default">C </span><span class="keyword">= </span><span class="string">'3'</span><span class="keyword">;
<br />    const </span><span class="default">NUMBERS </span><span class="keyword">= array(
<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">A</span><span class="keyword">,
<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">B</span><span class="keyword">,
<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">C</span><span class="keyword">,
<br />    );
<br />}
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">MyClass</span><span class="keyword">::</span><span class="default">ABC</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">MyClass</span><span class="keyword">::</span><span class="default">NUMBERS</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Result:
<br />/*
<br />array(3) {
<br />    [0]=&gt;
<br />  string(1) "A"
<br />    [1]=&gt;
<br />  string(1) "B"
<br />    [2]=&gt;
<br />  string(1) "C"
<br />}
<br />array(3) {
<br />    [0]=&gt;
<br />  string(1) "1"
<br />    [1]=&gt;
<br />  string(1) "2"
<br />    [2]=&gt;
<br />  string(1) "3"
<br />}
<br />*/
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123039">  <div class="votes">
    <div id="Vu123039">
    <a href="/manual/vote-note.php?id=123039&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123039">
    <a href="/manual/vote-note.php?id=123039&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123039" title="56% like this...">
    3
    </div>
  </div>
  <a href="#123039" class="name">
  <strong class="user"><em>David Spector</em></strong></a><a class="genanchor" href="#123039"> &para;</a><div class="date" title="2018-08-16 01:55"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123039">
<div class="phpcode"><code><span class="html">The usual comma-separated syntax can be used to declare several constants:<br /><br />class STATE<br />    {<br />    const INIT=0, NAME_SEEN=1, ADDR_SEEN=2;<br />    }<br /><br />This shows the declaration of a set of enumeration literals suitable for use in a finite state machine loop. Reference such an enum by using syntax such as "STATE::INIT". Its actual type in this case will be integer.</span></code></div>
  </div>
 </div>
  <div class="note" id="85703">  <div class="votes">
    <div id="Vu85703">
    <a href="/manual/vote-note.php?id=85703&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85703">
    <a href="/manual/vote-note.php?id=85703&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85703" title="55% like this...">
    9
    </div>
  </div>
  <a href="#85703" class="name">
  <strong class="user"><em>wbcarts at juno dot com</em></strong></a><a class="genanchor" href="#85703"> &para;</a><div class="date" title="2008-09-12 12:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85703">
<div class="phpcode"><code><span class="html">Use CONST to set UPPER and LOWER LIMITS<br /><br />If you have code that accepts user input or you just need to make sure input is acceptable, you can use constants to set upper and lower limits. Note: a static function that enforces your limits is highly recommended... sniff the clamp() function below for a taste.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Dimension<br /></span><span class="keyword">{<br />  const </span><span class="default">MIN </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">MAX </span><span class="keyword">= </span><span class="default">800</span><span class="keyword">;<br /><br />  public </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">;<br /><br />  public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$w </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$h </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">width  </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">clamp</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">height </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">clamp</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">);<br />  }<br /><br />  public function </span><span class="default">__toString</span><span class="keyword">(){<br />    return </span><span class="string">"Dimension [width=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">width</span><span class="string">, height=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">height</span><span class="string">]"</span><span class="keyword">;<br />  }<br /><br />  protected static function </span><span class="default">clamp</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">){<br />    if(</span><span class="default">$value </span><span class="keyword">&lt; </span><span class="default">self</span><span class="keyword">::</span><span class="default">MIN</span><span class="keyword">) </span><span class="default">$value </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">MIN</span><span class="keyword">;<br />    if(</span><span class="default">$value </span><span class="keyword">&gt; </span><span class="default">self</span><span class="keyword">::</span><span class="default">MAX</span><span class="keyword">) </span><span class="default">$value </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">MAX</span><span class="keyword">;<br />    return </span><span class="default">$value</span><span class="keyword">;<br />  }<br />}<br /><br />echo (new </span><span class="default">Dimension</span><span class="keyword">()) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo (new </span><span class="default">Dimension</span><span class="keyword">(</span><span class="default">1500</span><span class="keyword">, </span><span class="default">97</span><span class="keyword">)) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo (new </span><span class="default">Dimension</span><span class="keyword">(</span><span class="default">14</span><span class="keyword">, -</span><span class="default">20</span><span class="keyword">)) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo (new </span><span class="default">Dimension</span><span class="keyword">(</span><span class="default">240</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">)) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />- - - - - - - -<br /> Dimension [width=0, height=0] - default size<br /> Dimension [width=800, height=97] - width has been clamped to MAX<br /> Dimension [width=14, height=0] - height has been clamped to MIN<br /> Dimension [width=240, height=80] - width and height unchanged<br />- - - - - - - -<br /><br />Setting upper and lower limits on your classes also help your objects make sense. For example, it is not possible for the width or height of a Dimension to be negative. It is up to you to keep phoney input from corrupting your objects, and to avoid potential errors and exceptions in other parts of your code.</span></code></div>
  </div>
 </div>
  <div class="note" id="121613">  <div class="votes">
    <div id="Vu121613">
    <a href="/manual/vote-note.php?id=121613&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121613">
    <a href="/manual/vote-note.php?id=121613&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121613" title="54% like this...">
    3
    </div>
  </div>
  <a href="#121613" class="name">
  <strong class="user"><em>Nimja</em></strong></a><a class="genanchor" href="#121613"> &para;</a><div class="date" title="2017-09-06 01:07"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121613">
<div class="phpcode"><code><span class="html">Note that this magic constant DOES NOT load classes. And in fact can work on classes that do not exist.<br /><br />This means it does not mess with auto-loading.<br /><br /><span class="default">&lt;?php<br />    $className </span><span class="keyword">= </span><span class="default">\Foo\Bar</span><span class="keyword">::class;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">);<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Will output: <br /><br />    string(7) "Foo\Bar"<br />    bool(false)</span></code></div>
  </div>
 </div>
  <div class="note" id="130425">  <div class="votes">
    <div id="Vu130425">
    <a href="/manual/vote-note.php?id=130425&amp;page=language.oop5.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130425">
    <a href="/manual/vote-note.php?id=130425&amp;page=language.oop5.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130425" title="no votes...">
    0
    </div>
  </div>
  <a href="#130425" class="name">
  <strong class="user"><em>wbeaumo1 at gmail dot com</em></strong></a><a class="genanchor" href="#130425"> &para;</a><div class="date" title="2025-07-22 08:09"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130425">
<div class="phpcode"><code><span class="html">The ::class magic constant can be used on any bare text that follows the syntax requirements of a valid symbol and the symbol will be expanded appropriately regardless of whether it resolves to a class or even if it exists at all. This means you can use it to expand the names of namespaced functions and constants (but not class constants or methods) in addition to classes:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">use </span><span class="default">MyNamespace\MyConstants</span><span class="keyword">;<br />use </span><span class="default">MyNamespace\MyFunctions</span><span class="keyword">;<br /><br /></span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">MyFunctions\my_func</span><span class="keyword">::class); </span><span class="comment">// The argument expands to "MyNamespace\MyFunctions\my_func"<br /><br /></span><span class="default">defined</span><span class="keyword">(</span><span class="default">MyConstants\MY_CONSTANT</span><span class="keyword">::class); </span><span class="comment">// The argument expands to "MyNamespace\MyConstants\MY_CONSTANT" </span><span class="default">?&gt;<br /></span><br />And of course it works on symbols in the global namespace:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">MyNamespace</span><span class="keyword">;<br /><br /></span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">\function_exists</span><span class="keyword">::class); </span><span class="comment">// true<br /></span><span class="default">defined</span><span class="keyword">(</span><span class="default">\PHP_VERSION</span><span class="keyword">::class); </span><span class="comment">// true</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.constants.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
