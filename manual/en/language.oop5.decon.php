<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Constructors and Destructors - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.decon.php">
 <link rel="shorturl" href="https://www.php.net/oop5.decon">
 <link rel="alternate" href="https://www.php.net/oop5.decon" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.autoload.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.visibility.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.decon.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.decon.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.decon.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.decon.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.decon.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.decon.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.decon.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.decon.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.decon.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.decon.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.decon.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Constructors and Destructors" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Constructors and Destructors - Manual" />
<meta name="twitter:description" content="Constructors and Destructors" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Constructors and Destructors - Manual" />
<meta itemprop="description" content="Constructors and Destructors" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Constructors and Destructors" />

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
        <a href="language.oop5.visibility.php">
          Visibility &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.autoload.php">
          &laquo; Autoloading Classes        </a>
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
            <option value='en/language.oop5.decon.php' selected="selected">English</option>
            <option value='de/language.oop5.decon.php'>German</option>
            <option value='es/language.oop5.decon.php'>Spanish</option>
            <option value='fr/language.oop5.decon.php'>French</option>
            <option value='it/language.oop5.decon.php'>Italian</option>
            <option value='ja/language.oop5.decon.php'>Japanese</option>
            <option value='pt_BR/language.oop5.decon.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.decon.php'>Russian</option>
            <option value='tr/language.oop5.decon.php'>Turkish</option>
            <option value='uk/language.oop5.decon.php'>Ukrainian</option>
            <option value='zh/language.oop5.decon.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.decon" class="sect1">
  <h2 class="title">Constructors and Destructors</h2>

  <div class="sect2" id="language.oop5.decon.constructor">
   <h3 class="title">Constructor</h3>
   <div class="methodsynopsis dc-description" id="object.construct">
    <span class="methodname"><strong>__construct</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   <p class="para">
    PHP allows developers to declare constructor methods for classes.
    Classes which have a constructor method call this method on each
    newly-created object, so it is suitable for any initialization that the
    object may need before it is used.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Parent constructors are not called implicitly if the child class defines
     a constructor.  In order to run a parent constructor, a call to
     <span class="function"><strong>parent::__construct()</strong></span> within the child constructor is
     required. If the child does not define a constructor then it may be inherited
     from the parent class just like a normal class method (if it was not declared
     as private).
    </span>
   </p></blockquote>
   <div class="example" id="example-296">
    <p><strong>Example #1 Constructors in inheritance</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() {<br />        print </span><span style="color: #DD0000">"In BaseClass constructor\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">SubClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__construct</span><span style="color: #007700">();<br />        print </span><span style="color: #DD0000">"In SubClass constructor\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">OtherSubClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// inherits BaseClass's constructor<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #FF8000">// In BaseClass constructor<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">BaseClass</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// In BaseClass constructor<br />// In SubClass constructor<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">SubClass</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// In BaseClass constructor<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">OtherSubClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">
    Unlike other methods, <a href="language.oop5.decon.php#object.construct" class="link">__construct()</a>
    is exempt from the usual
    <a href="language.oop5.basic.php#language.oop.lsp" class="link">signature compatibility rules</a>
    when being extended.
   </p>
   <p class="para">
    Constructors are ordinary methods which are called during the instantiation of their
    corresponding object.  As such, they may define an arbitrary number of arguments, which
    may be required, may have a type, and may have a default value. Constructor arguments
    are called by placing the arguments in parentheses after the class name.
   </p>
   <div class="example" id="example-297">
    <p><strong>Example #2 Using constructor arguments</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Point </span><span style="color: #007700">{<br />    protected </span><span style="color: #0000BB">int $x</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">int $y</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">int $x</span><span style="color: #007700">, </span><span style="color: #0000BB">int $y </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">x </span><span style="color: #007700">= </span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">y </span><span style="color: #007700">= </span><span style="color: #0000BB">$y</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Pass both parameters.<br /></span><span style="color: #0000BB">$p1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Point</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Pass only the required parameter. $y will take its default value of 0.<br /></span><span style="color: #0000BB">$p2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Point</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// With named parameters (as of PHP 8.0):<br /></span><span style="color: #0000BB">$p3 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Point</span><span style="color: #007700">(</span><span style="color: #0000BB">y</span><span style="color: #007700">: </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">x</span><span style="color: #007700">: </span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">
    If a class has no constructor, or the constructor has no required arguments, the parentheses
    may be omitted.
   </p>
   <div class="sect3">
    <h4 class="title">Old-style constructors</h4>
    <p class="para">
     Prior to PHP 8.0.0, classes in the global namespace will interpret a method named
     the same as the class as an old-style constructor.  That syntax is deprecated,
     and will result in an <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong> error but still call that function as a constructor.
     If both <a href="language.oop5.decon.php#object.construct" class="link">__construct()</a> and a same-name method are
     defined, <a href="language.oop5.decon.php#object.construct" class="link">__construct()</a> will be called.
    </p>
    <p class="para">
     In namespaced classes, or any class as of PHP 8.0.0, a method named
     the same as the class never has any special meaning.
    </p>
    <p class="para">Always use <a href="language.oop5.decon.php#object.construct" class="link">__construct()</a> in new code.
    </p>
   </div>
   <div class="sect3" id="language.oop5.decon.constructor.promotion">
    <h4 class="title">Constructor Promotion</h4>
    <p class="para">
     As of PHP 8.0.0, constructor parameters may also be promoted to correspond to an
     object property.  It is very common for constructor parameters to be assigned to
     a property in the constructor but otherwise not operated upon.  Constructor promotion
     provides a short-hand for that use case.  The example above could be rewritten as the following.
    </p>
    <div class="example" id="example-298">
     <p><strong>Example #3 Using constructor property promotion</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Point </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(protected </span><span style="color: #0000BB">int $x</span><span style="color: #007700">, protected </span><span style="color: #0000BB">int $y </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    }<br />}</span></span></code></div>
     </div>

    </div>
    <p class="para">
     When a constructor argument includes a modifier, PHP will interpret it as
     both an object property and a constructor argument, and assign the argument value to
     the property.  The constructor body may then be empty or may contain other statements.
     Any additional statements will be executed after the argument values have been assigned
     to the corresponding properties.
    </p>
    <p class="para">
     Not all arguments need to be promoted. It is possible to mix and match promoted and not-promoted
     arguments, in any order.  Promoted arguments have no impact on code calling the constructor.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Using a <a href="language.oop5.visibility.php" class="link">visibility modifier</a> (<code class="literal">public</code>,
      <code class="literal">protected</code> or <code class="literal">private</code>) is the most likely way to apply property
      promotion, but any other single modifier (such as <code class="literal">readonly</code>) will have the same effect.
     </p>
    </p></blockquote>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Object properties may not be typed <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> due to engine ambiguity that would
      introduce. Promoted arguments, therefore, may not be typed <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> either. Any
      other <a href="language.types.declarations.php" class="link">type declaration</a> is permitted, however.
     </p>
    </p></blockquote>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      As promoted properties are desugared to both a property as well as a function parameter, any
      and all naming restrictions for both properties as well as parameters apply.
     </p>
    </p></blockquote>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      <a href="language.attributes.php" class="link">Attributes</a> placed on a
      promoted constructor argument will be replicated to both the property
      and argument.  Default values on a promoted constructor argument will be replicated only to the argument and not the property.
     </p>
    </p></blockquote>
   </div>

   <div class="sect3" id="language.oop5.decon.constructor.new">
    <h4 class="title">New in initializers</h4>
    <p class="para">
     As of PHP 8.1.0, objects can be used as default parameter values,
     static variables, and global constants, as well as in attribute arguments.
     Objects can also be passed to <span class="function"><a href="function.define.php" class="function">define()</a></span> now.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      The use of a dynamic or non-string class name or an anonymous class is not allowed.
      The use of argument unpacking is not allowed.
      The use of unsupported expressions as arguments is not allowed.
     </p>
    </p></blockquote>
    <div class="example" id="example-299">
     <p><strong>Example #4 Using new in initializers</strong></p>
     <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// All allowed:<br /></span><span style="color: #007700">static </span><span style="color: #0000BB">$x </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">;<br /><br />const </span><span style="color: #0000BB">C </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">;<br /> <br />function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">$param </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">) {}<br /> <br />#[</span><span style="color: #0000BB">AnAttribute</span><span style="color: #007700">(new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">)]<br />class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(<br />        public </span><span style="color: #0000BB">$prop </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">,<br />    ) {}<br />}<br /><br /></span><span style="color: #FF8000">// All not allowed (compile-time error):<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= new (</span><span style="color: #0000BB">CLASS_NAME_CONSTANT</span><span style="color: #007700">)(), </span><span style="color: #FF8000">// dynamic class name<br />    </span><span style="color: #0000BB">$b </span><span style="color: #007700">= new class {}, </span><span style="color: #FF8000">// anonymous class<br />    </span><span style="color: #0000BB">$c </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">(...[]), </span><span style="color: #FF8000">// argument unpacking<br />    </span><span style="color: #0000BB">$d </span><span style="color: #007700">= new </span><span style="color: #0000BB">B</span><span style="color: #007700">(</span><span style="color: #0000BB">$abc</span><span style="color: #007700">), </span><span style="color: #FF8000">// unsupported constant expression<br /></span><span style="color: #007700">) {}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </div>
   
   <div class="sect3" id="language.oop5.decon.constructor.static">
    <h4 class="title">Static creation methods</h4>
    <p class="para">
     PHP only supports a single constructor per class.  In some cases, however, it may be
     desirable to allow an object to be constructed in different ways with different inputs.
     The recommended way to do so is by using static methods as constructor wrappers.
    </p>
    <div class="example" id="example-300">
     <p><strong>Example #5 Using static creation methods</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$some_json_string </span><span style="color: #007700">= </span><span style="color: #DD0000">'{ "id": 1004, "name": "Elephpant" }'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$some_xml_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"&lt;animal&gt;&lt;id&gt;1005&lt;/id&gt;&lt;name&gt;Elephpant&lt;/name&gt;&lt;/animal&gt;"</span><span style="color: #007700">;<br /><br />class </span><span style="color: #0000BB">Product </span><span style="color: #007700">{<br /><br />    private ?</span><span style="color: #0000BB">int $id</span><span style="color: #007700">;<br />    private ?</span><span style="color: #0000BB">string $name</span><span style="color: #007700">;<br /><br />    private function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(?</span><span style="color: #0000BB">int $id </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">, ?</span><span style="color: #0000BB">string $name </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id </span><span style="color: #007700">= </span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />    }<br /><br />    public static function </span><span style="color: #0000BB">fromBasicData</span><span style="color: #007700">(</span><span style="color: #0000BB">int $id</span><span style="color: #007700">, </span><span style="color: #0000BB">string $name</span><span style="color: #007700">): static {<br />        </span><span style="color: #0000BB">$new </span><span style="color: #007700">= new static(</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />        return </span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />    }<br /><br />    public static function </span><span style="color: #0000BB">fromJson</span><span style="color: #007700">(</span><span style="color: #0000BB">string $json</span><span style="color: #007700">): static {<br />        </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />        return new static(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">], </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br />    }<br /><br />    public static function </span><span style="color: #0000BB">fromXml</span><span style="color: #007700">(</span><span style="color: #0000BB">string $xml</span><span style="color: #007700">): static {<br />        </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$new </span><span style="color: #007700">= new static();<br />        </span><span style="color: #0000BB">$new</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id </span><span style="color: #007700">= (int) </span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$new</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />        return </span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$p1 </span><span style="color: #007700">= </span><span style="color: #0000BB">Product</span><span style="color: #007700">::</span><span style="color: #0000BB">fromBasicData</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #DD0000">'Widget'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$p2 </span><span style="color: #007700">= </span><span style="color: #0000BB">Product</span><span style="color: #007700">::</span><span style="color: #0000BB">fromJson</span><span style="color: #007700">(</span><span style="color: #0000BB">$some_json_string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$p3 </span><span style="color: #007700">= </span><span style="color: #0000BB">Product</span><span style="color: #007700">::</span><span style="color: #0000BB">fromXml</span><span style="color: #007700">(</span><span style="color: #0000BB">$some_xml_string</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$p1</span><span style="color: #007700">, </span><span style="color: #0000BB">$p2</span><span style="color: #007700">, </span><span style="color: #0000BB">$p3</span><span style="color: #007700">);</span></span></code></div>
     </div>

    </div>
    <p class="para">
     The constructor may be made private or protected to prevent it from being called externally.
     If so, only a static method will be able to instantiate the class. Because they are in the
     same class definition they have access to private methods, even if not of the same object
     instance. The private constructor is optional and may or may not make sense depending on
     the use case.
    </p>
    <p class="para">
     The three public static methods then demonstrate different ways of instantiating the object.
    </p>
    <ul class="simplelist">
     <li><code class="code">fromBasicData()</code> takes the exact parameters that are needed, then creates the
      object by calling the constructor and returning the result.</li>
     <li><code class="code">fromJson()</code> accepts a JSON string and does some pre-processing on it itself
     to convert it into the format desired by the constructor. It then returns the new object.</li>
     <li><code class="code">fromXml()</code> accepts an XML string, preprocesses it, and then creates a bare
     object.  The constructor is still called, but as all of the parameters are optional the method
     skips them.  It then assigns values to the object properties directly before returning the result.</li>
    </ul>
    <p class="para">
     In all three cases, the <code class="code">static</code> keyword is translated into the name of the class the code is in.
     In this case, <code class="code">Product</code>.
    </p>
   </div>
  </div>
  <div class="sect2" id="language.oop5.decon.destructor">
   <h3 class="title">Destructor</h3>
   <div class="methodsynopsis dc-description" id="object.destruct">
    <span class="methodname"><strong>__destruct</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   <p class="para">
    PHP possesses a destructor concept similar to that of other
    object-oriented languages, such as C++. The destructor method will be
    called as soon as there are no other references to a particular object,
    or in any order during the shutdown sequence.
   </p>
   <div class="example" id="example-301">
    <p><strong>Example #6 Destructor Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyDestructableClass <br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() {<br />        print </span><span style="color: #DD0000">"In constructor\n"</span><span style="color: #007700">;<br />    }<br /><br />    function </span><span style="color: #0000BB">__destruct</span><span style="color: #007700">() {<br />        print </span><span style="color: #DD0000">"Destroying " </span><span style="color: #007700">. </span><span style="color: #0000BB">__CLASS__ </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyDestructableClass</span><span style="color: #007700">();</span></span></code></div>
    </div>

   </div>
   <p class="para">
    Like constructors, parent destructors will not be called implicitly by
    the engine. In order to run a parent destructor, one would have to
    explicitly call <span class="function"><strong>parent::__destruct()</strong></span> in the destructor
    body. Also like constructors, a child class may inherit the parent&#039;s
    destructor if it does not implement one itself.
   </p>
   <p class="para">
    The destructor will be called even if script execution is stopped using
    <span class="function"><a href="function.exit.php" class="function">exit()</a></span>. Calling <span class="function"><a href="function.exit.php" class="function">exit()</a></span> in a destructor
    will prevent the remaining shutdown routines from executing.
   </p>
   <p class="para">
    If a destructor creates new references to its object, it will not be called
    a second time when the reference count reaches zero again or during the
    shutdown sequence.
   </p>
   <p class="para">
    As of PHP 8.4.0, when
    <a href="features.gc.collecting-cycles.php" class="link">cycle collection</a>
    occurs during the execution of a
    <a href="language.fibers.php" class="link">Fiber</a>, the destructors of objects
    scheduled for collection are executed in a separate Fiber, called the
    <code class="literal">gc_destructor_fiber</code>.
    If this Fiber is suspended, a new one will be created to execute any
    remaining destructors.
    The previous <code class="literal">gc_destructor_fiber</code> will no longer be
    referenced by the garbage collector and may be collected if it is not
    referenced elsewhere.
    Objects whose destructor are suspended will not be collected until the
    destructor returns or the Fiber itself is collected.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Destructors called during the script shutdown have HTTP headers already
     sent. The working directory in the script shutdown phase can be different
     with some SAPIs (e.g. Apache).
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Attempting to throw an exception from a destructor (called in the time of
     script termination) causes a fatal error.
    </p>
   </p></blockquote>
  </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/decon.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.decon%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.decon&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.decon.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105368">  <div class="votes">
    <div id="Vu105368">
    <a href="/manual/vote-note.php?id=105368&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105368">
    <a href="/manual/vote-note.php?id=105368&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105368" title="69% like this...">
    164
    </div>
  </div>
  <a href="#105368" class="name">
  <strong class="user"><em>david dot scourfield at llynfi dot co dot uk</em></strong></a><a class="genanchor" href="#105368"> &para;</a><div class="date" title="2011-08-12 04:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105368">
<div class="phpcode"><code><span class="html">Be aware of potential memory leaks caused by circular references within objects.  The PHP manual states "[t]he destructor method will be called as soon as all references to a particular object are removed" and this is precisely true: if two objects reference each other (or even if one object has a field that points to itself as in $this-&gt;foo = $this) then this reference will prevent the destructor being called even when there are no other references to the object at all.  The programmer can no longer access the objects, but they still stay in memory.<br /><br />Consider the following example:<br /><br /><span class="default">&lt;?php<br /><br />header</span><span class="keyword">(</span><span class="string">"Content-type: text/plain"</span><span class="keyword">);<br /><br />class </span><span class="default">Foo </span><span class="keyword">{<br />    <br />    </span><span class="comment">/**<br />     * An indentifier<br />     * @var string <br />     */<br />    </span><span class="keyword">private </span><span class="default">$name</span><span class="keyword">;<br />    </span><span class="comment">/**<br />     * A reference to another Foo object<br />     * @var Foo<br />     */<br />    </span><span class="keyword">private </span><span class="default">$link</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">setLink</span><span class="keyword">(</span><span class="default">Foo $link</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link </span><span class="keyword">= </span><span class="default">$link</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">__destruct</span><span class="keyword">() {<br />        echo </span><span class="string">'Destroying: '</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// create two Foo objects:<br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Foo 1'</span><span class="keyword">);<br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Foo 2'</span><span class="keyword">);<br /><br /></span><span class="comment">// make them point to each other<br /></span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">setLink</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">);<br /></span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">setLink</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /><br /></span><span class="comment">// destroy the global references to them<br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br /></span><span class="comment">// we now have no way to access Foo 1 or Foo 2, so they OUGHT to be __destruct()ed<br />// but they are not, so we get a memory leak as they are still in memory.<br />//<br />// Uncomment the next line to see the difference when explicitly calling the GC:<br />// gc_collect_cycles();<br />// <br />// see also: <a href="http://www.php.net/manual/en/features.gc.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/features.gc.php</a><br />// <br /><br />// create two more Foo objects, but DO NOT set their internal Foo references<br />// so nothing except the vars $foo and $bar point to them:<br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Foo 3'</span><span class="keyword">);<br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Foo 4'</span><span class="keyword">);<br /><br /></span><span class="comment">// destroy the global references to them<br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br /></span><span class="comment">// we now have no way to access Foo 3 or Foo 4 and as there are no more references<br />// to them anywhere, their __destruct() methods are automatically called here,<br />// BEFORE the next line is executed:<br /><br /></span><span class="keyword">echo </span><span class="string">'End of script'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />This will output:<br /><br />Destroying: Foo 3<br />Destroying: Foo 4<br />End of script<br />Destroying: Foo 1<br />Destroying: Foo 2<br /><br />But if we uncomment the gc_collect_cycles(); function call in the middle of the script, we get:<br /><br />Destroying: Foo 2<br />Destroying: Foo 1<br />Destroying: Foo 3<br />Destroying: Foo 4<br />End of script<br /><br />As may be desired.<br /><br />NOTE: calling gc_collect_cycles() does have a speed overhead, so only use it if you feel you need to.</span></code></div>
  </div>
 </div>
  <div class="note" id="128839">  <div class="votes">
    <div id="Vu128839">
    <a href="/manual/vote-note.php?id=128839&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128839">
    <a href="/manual/vote-note.php?id=128839&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128839" title="76% like this...">
    7
    </div>
  </div>
  <a href="#128839" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#128839"> &para;</a><div class="date" title="2023-08-29 03:11"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128839">
<div class="phpcode"><code><span class="html">There are other advantages to using static factory methods to wrap object construction instead of bare constructor calls.<br /><br />As well as allowing for different methods to use in different scenarios, with more relevant names both for the methods and the parameters and without the constructor having to handle different sets of arguments of different types:<br /><br />* You can do all your input validation before attempting to construct the object.<br />* The object itself can bypass that input validation when constructing new instances of its own class, since you can ensure that it knows what it's doing.<br />* With input validation/preprocessing moved to the factory methods, the constructor itself can often be reduced to "set these properties to these arguments", meaning the constructor promotion syntax becomes more useful.<br />* Having been hidden away from users, the constructor's signature can be a bit uglier without becoming a pain for them. Heh.<br />* Static methods can be lifted and passed around as first class closures, to be called in the normal fashion wherever functions can be called, without the special "new" syntax.<br />* The factory method need not return a new instance of that exact class. It could return a pre-existing instance that would do the same job as the new one would (especially useful in the case of immutable "value type" objects by reducing duplication); or a simpler or more specific subclass to do the job with less overhead than a more generic instance of the original class. Returning a subclass means LSP still holds.</span></code></div>
  </div>
 </div>
  <div class="note" id="121521">  <div class="votes">
    <div id="Vu121521">
    <a href="/manual/vote-note.php?id=121521&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121521">
    <a href="/manual/vote-note.php?id=121521&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121521" title="65% like this...">
    33
    </div>
  </div>
  <a href="#121521" class="name">
  <strong class="user"><em>domger at freenet dot de</em></strong></a><a class="genanchor" href="#121521"> &para;</a><div class="date" title="2017-08-14 07:53"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121521">
<div class="phpcode"><code><span class="html">The __destruct magic method must be public. <br /><br />public function __destruct()<br />{<br />    ;<br />}<br /><br />The method will automatically be called externally to the instance.  Declaring __destruct as protected or private will result in a warning and the magic method will not be called. <br /><br />Note: In PHP 5.3.10 i saw strange side effects while some Destructors were declared as protected.</span></code></div>
  </div>
 </div>
  <div class="note" id="86423">  <div class="votes">
    <div id="Vu86423">
    <a href="/manual/vote-note.php?id=86423&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86423">
    <a href="/manual/vote-note.php?id=86423&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86423" title="61% like this...">
    27
    </div>
  </div>
  <a href="#86423" class="name">
  <strong class="user"><em>spleen</em></strong></a><a class="genanchor" href="#86423"> &para;</a><div class="date" title="2008-10-17 04:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86423">
<div class="phpcode"><code><span class="html">It's always the easy things that get you -<br /><br />Being new to OOP, it took me quite a while to figure out that there are TWO underscores in front of the word __construct.<br /><br />It is __construct<br />Not _construct<br /><br />Extremely obvious once you figure it out, but it can be sooo frustrating until you do.<br /><br />I spent quite a bit of needless time debugging working code.<br /><br />I even thought about it a few times, thinking it looked a little long in the examples, but at the time that just seemed silly(always thinking "oh somebody would have made that clear if it weren't just a regular underscore...")<br /><br />All the manuals I looked at, all the tuturials I read, all the examples I browsed through  - not once did anybody mention this!  <br /><br />(please don't tell me it's explained somewhere on this page and I just missed it,  you'll only add to my pain.)<br /><br />I hope this helps somebody else!</span></code></div>
  </div>
 </div>
  <div class="note" id="124619">  <div class="votes">
    <div id="Vu124619">
    <a href="/manual/vote-note.php?id=124619&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124619">
    <a href="/manual/vote-note.php?id=124619&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124619" title="62% like this...">
    9
    </div>
  </div>
  <a href="#124619" class="name">
  <strong class="user"><em>iwwp at outlook dot com</em></strong></a><a class="genanchor" href="#124619"> &para;</a><div class="date" title="2020-01-16 07:58"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124619">
<div class="phpcode"><code><span class="html">To better understand the __destrust method:<br /><br />class A {<br />    protected $id;<br /><br />    public function __construct($id)<br />    {<br />        $this-&gt;id = $id;<br />        echo "construct {$this-&gt;id}\n";<br />    }<br /><br />    public function __destruct()<br />    {<br />        echo "destruct {$this-&gt;id}\n";<br />    }<br />}<br /><br />$a = new A(1);<br />echo "-------------\n";<br />$aa = new A(2);<br />echo "=============\n";<br /><br />The output content:<br /><br />construct 1<br />-------------<br />construct 2<br />=============<br />destruct 2<br />destruct 1</span></code></div>
  </div>
 </div>
  <div class="note" id="80107">  <div class="votes">
    <div id="Vu80107">
    <a href="/manual/vote-note.php?id=80107&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80107">
    <a href="/manual/vote-note.php?id=80107&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80107" title="60% like this...">
    6
    </div>
  </div>
  <a href="#80107" class="name">
  <strong class="user"><em>david at synatree dot com</em></strong></a><a class="genanchor" href="#80107"> &para;</a><div class="date" title="2007-12-29 01:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80107">
<div class="phpcode"><code><span class="html">When a script is in the process of die()ing, you can't count on the order in which __destruct() will be called.<br /><br />For a script I have been working on, I wanted to do transparent low-level encryption of any outgoing data.  To accomplish this, I used a global singleton class configured like this:<br /><br />class EncryptedComms<br />{<br />    private $C;<br />    private $objs = array();<br />    private static $_me;<br />    <br />    public static function destroyAfter(&amp;$obj)<br />    {<br />        self::getInstance()-&gt;objs[] =&amp; $obj;<br />        /*<br />            Hopefully by forcing a reference to another object to exist <br />            inside this class, the referenced object will need to be destroyed<br />            before garbage collection can occur on this object.  This will force <br />            this object's destruct method to be fired AFTER the destructors of<br />            all the objects referenced here.<br />        */<br />    }<br />    public function __construct($key)<br />    {<br />            $this-&gt;C = new SimpleCrypt($key);<br />            ob_start(array($this,'getBuffer'));<br />    }<br />    public static function &amp;getInstance($key=NULL)<br />    {<br />        if(!self::$_me &amp;&amp; $key)<br />            self::$_me = new EncryptedComms($key);<br />        else<br />            return self::$_me;<br />    }<br />    <br />    public function __destruct()<br />    {<br />        ob_end_flush();<br />    }<br />    <br />    public function getBuffer($str)<br />    {<br />        return $this-&gt;C-&gt;encrypt($str);<br />    }<br /><br />}<br /><br />In this example, I tried to register other objects to always be destroyed just before this object.  Like this:<br /><br />class A<br />{<br /><br />public function __construct()<br />{<br />     EncryptedComms::destroyAfter($this);<br />}<br />}<br /><br />One would think that the references to the objects contained in the singleton would be destroyed first, but this is not the case.  In fact, this won't work even if you reverse the paradigm and store a reference to EncryptedComms in every object you'd like to be destroyed before it.<br /><br />In short, when a script die()s, there doesn't seem to be any way to predict the order in which the destructors will fire.</span></code></div>
  </div>
 </div>
  <div class="note" id="126914">  <div class="votes">
    <div id="Vu126914">
    <a href="/manual/vote-note.php?id=126914&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126914">
    <a href="/manual/vote-note.php?id=126914&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126914" title="57% like this...">
    3
    </div>
  </div>
  <a href="#126914" class="name">
  <strong class="user"><em>mmulej at gmail dot com</em></strong></a><a class="genanchor" href="#126914"> &para;</a><div class="date" title="2022-03-10 04:56"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126914">
<div class="phpcode"><code><span class="html">*&lt;Double post&gt; I can't edit my previous note to elaborate on modifiers. Please excuse me.*<br /><br />If both parent and child classes have a method with the same name defined, and it is called in parent's constructor, using `parent::__construct()` will call the method in the child.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">method</span><span class="keyword">();<br />    }<br />    public function </span><span class="default">method</span><span class="keyword">() {<br />        echo </span><span class="string">'A' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">();<br />    }<br />}<br />class </span><span class="default">C </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">();<br />    }<br />    public function </span><span class="default">method</span><span class="keyword">() {<br />        echo </span><span class="string">'C' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">; </span><span class="comment">// A<br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">; </span><span class="comment">// C<br /><br /></span><span class="default">?&gt;<br /></span><br />In this example both A::method and C::method are public.<br /><br />You may change A::method to protected, and C::method to protected or public and it will still work the same.<br /><br />If however you set A::method as private, it doesn't matter whether C::method is private, protected or public. Both $b and $c will echo 'A'.</span></code></div>
  </div>
 </div>
  <div class="note" id="108598">  <div class="votes">
    <div id="Vu108598">
    <a href="/manual/vote-note.php?id=108598&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108598">
    <a href="/manual/vote-note.php?id=108598&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108598" title="55% like this...">
    9
    </div>
  </div>
  <a href="#108598" class="name">
  <strong class="user"><em>Per Persson</em></strong></a><a class="genanchor" href="#108598"> &para;</a><div class="date" title="2012-05-09 01:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108598">
<div class="phpcode"><code><span class="html">As of PHP 5.3.10 destructors are not run on shutdown caused by fatal errors.<br /><br />For example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Logger<br /></span><span class="keyword">{<br />    protected </span><span class="default">$rows </span><span class="keyword">= array();<br /><br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">();<br />    }<br /><br />    public function </span><span class="default">log</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rows</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">save</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'&lt;ul&gt;'</span><span class="keyword">;<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rows </span><span class="keyword">as </span><span class="default">$row</span><span class="keyword">)<br />        {<br />            echo </span><span class="string">'&lt;li&gt;'</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">, </span><span class="string">'&lt;/li&gt;'</span><span class="keyword">;<br />        }<br />        echo </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$logger </span><span class="keyword">= new </span><span class="default">Logger</span><span class="keyword">;<br /></span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">log</span><span class="keyword">(</span><span class="string">'Before'</span><span class="keyword">);<br /><br /></span><span class="default">$nonset</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">();<br /><br /></span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">log</span><span class="keyword">(</span><span class="string">'After'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Without the $nonset-&gt;foo(); line, Before and After will both be printed, but with the line neither will be printed.<br /><br />One can however register the destructor or another method as a shutdown function:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Logger<br /></span><span class="keyword">{<br />    protected </span><span class="default">$rows </span><span class="keyword">= array();<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">register_shutdown_function</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'__destruct'</span><span class="keyword">));<br />    }<br />    <br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">();<br />    }<br />    <br />    public function </span><span class="default">log</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rows</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">save</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'&lt;ul&gt;'</span><span class="keyword">;<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rows </span><span class="keyword">as </span><span class="default">$row</span><span class="keyword">)<br />        {<br />            echo </span><span class="string">'&lt;li&gt;'</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">, </span><span class="string">'&lt;/li&gt;'</span><span class="keyword">;<br />        }<br />        echo </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$logger </span><span class="keyword">= new </span><span class="default">Logger</span><span class="keyword">;<br /></span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">log</span><span class="keyword">(</span><span class="string">'Before'</span><span class="keyword">);<br /><br /></span><span class="default">$nonset</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">();<br /><br /></span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">log</span><span class="keyword">(</span><span class="string">'After'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Now Before will be printed, but not After, so you can see that a shutdown occurred after Before.</span></code></div>
  </div>
 </div>
  <div class="note" id="76710">  <div class="votes">
    <div id="Vu76710">
    <a href="/manual/vote-note.php?id=76710&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76710">
    <a href="/manual/vote-note.php?id=76710&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76710" title="55% like this...">
    7
    </div>
  </div>
  <a href="#76710" class="name">
  <strong class="user"><em>prieler at abm dot at</em></strong></a><a class="genanchor" href="#76710"> &para;</a><div class="date" title="2007-07-27 12:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76710">
<div class="phpcode"><code><span class="html">i have written a quick example about the order of destructors and shutdown functions in php 5.2.1:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">destruction </span><span class="keyword">{<br />    var </span><span class="default">$name</span><span class="keyword">;<br /><br />    function </span><span class="default">destruction</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;<br />        </span><span class="default">register_shutdown_function</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"shutdown"</span><span class="keyword">));<br />    }<br /><br />    function </span><span class="default">shutdown</span><span class="keyword">() {<br />        echo </span><span class="string">'shutdown: '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">__destruct</span><span class="keyword">() {<br />        echo </span><span class="string">'destruct: '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">destruction</span><span class="keyword">(</span><span class="string">'a: global 1'</span><span class="keyword">);<br /><br />function </span><span class="default">test</span><span class="keyword">() {<br />    </span><span class="default">$b </span><span class="keyword">= new </span><span class="default">destruction</span><span class="keyword">(</span><span class="string">'b: func 1'</span><span class="keyword">);<br />    </span><span class="default">$c </span><span class="keyword">= new </span><span class="default">destruction</span><span class="keyword">(</span><span class="string">'c: func 2'</span><span class="keyword">);<br />}<br /></span><span class="default">test</span><span class="keyword">();<br /><br /></span><span class="default">$d </span><span class="keyword">= new </span><span class="default">destruction</span><span class="keyword">(</span><span class="string">'d: global 2'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />this will output:<br />shutdown: a: global 1<br />shutdown: b: func 1<br />shutdown: c: func 2<br />shutdown: d: global 2<br />destruct: b: func 1<br />destruct: c: func 2<br />destruct: d: global 2<br />destruct: a: global 1<br /><br />conclusions:<br />destructors are always called on script end.<br />destructors are called in order of their "context": first functions, then global objects<br />objects in function context are deleted in order as they are set (older objects first).<br />objects in global context are deleted in reverse order (older objects last)<br /><br />shutdown functions are called before the destructors.<br />shutdown functions are called in there "register" order. ;)<br /><br />regards, J</span></code></div>
  </div>
 </div>
  <div class="note" id="82577">  <div class="votes">
    <div id="Vu82577">
    <a href="/manual/vote-note.php?id=82577&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82577">
    <a href="/manual/vote-note.php?id=82577&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82577" title="54% like this...">
    3
    </div>
  </div>
  <a href="#82577" class="name">
  <strong class="user"><em>bolshun at mail dot ru</em></strong></a><a class="genanchor" href="#82577"> &para;</a><div class="date" title="2008-04-16 06:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82577">
<div class="phpcode"><code><span class="html">Ensuring that instance of some class will be available in destructor of some other class is easy: just keep a reference to that instance in this other class.</span></code></div>
  </div>
 </div>
  <div class="note" id="113052">  <div class="votes">
    <div id="Vu113052">
    <a href="/manual/vote-note.php?id=113052&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113052">
    <a href="/manual/vote-note.php?id=113052&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113052" title="51% like this...">
    2
    </div>
  </div>
  <a href="#113052" class="name">
  <strong class="user"><em>Yousef Ismaeil cliprz[At]gmail[Dot]com</em></strong></a><a class="genanchor" href="#113052"> &para;</a><div class="date" title="2013-08-22 09:06"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113052">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * a funny example Mobile class<br /> * <br /> * @author Yousef Ismaeil Cliprz[At]gmail[Dot]com<br /> */<br /><br /></span><span class="keyword">class </span><span class="default">Mobile </span><span class="keyword">{<br /><br />    </span><span class="comment">/**<br />     * Some device properties<br />     * <br />     * @var string<br />     * @access public<br />     */<br />    </span><span class="keyword">public </span><span class="default">$deviceName</span><span class="keyword">,</span><span class="default">$deviceVersion</span><span class="keyword">,</span><span class="default">$deviceColor</span><span class="keyword">;<br />    <br />    </span><span class="comment">/**<br />     * Set some values for Mobile::properties<br />     * <br />     * @param string device name<br />     * @param string device version<br />     * @param string device color<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__construct </span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="default">$version</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceName </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceVersion </span><span class="keyword">= </span><span class="default">$version</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceColor </span><span class="keyword">= </span><span class="default">$color</span><span class="keyword">;<br />        echo </span><span class="string">"The "</span><span class="keyword">.</span><span class="default">__CLASS__</span><span class="keyword">.</span><span class="string">" class is stratup.&lt;br /&gt;&lt;br /&gt;"</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">/**<br />     * Some Output<br />     * <br />     * @access public<br />     */<br />    </span><span class="keyword">public function </span><span class="default">printOut </span><span class="keyword">() {<br />        echo </span><span class="string">'I have a '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceName<br />            </span><span class="keyword">.</span><span class="string">' version '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceVersion<br />            </span><span class="keyword">.</span><span class="string">' my device color is : '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceColor</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">/**<br />     * Umm only for example we will remove Mobile::$deviceName Hum not unset only to check how __destruct working <br />     * <br />     * @access public<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__destruct </span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceName </span><span class="keyword">= </span><span class="string">'Removed'</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;br /&gt;&lt;br /&gt;Dumpping Mobile::deviceName to make sure its removed, Olay :'</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deviceName</span><span class="keyword">);<br />        echo </span><span class="string">"&lt;br /&gt;The "</span><span class="keyword">.</span><span class="default">__CLASS__</span><span class="keyword">.</span><span class="string">" class is shutdown."</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="comment">// Oh ya instance<br /></span><span class="default">$mob </span><span class="keyword">= new </span><span class="default">Mobile</span><span class="keyword">(</span><span class="string">'iPhone'</span><span class="keyword">,</span><span class="string">'5'</span><span class="keyword">,</span><span class="string">'Black'</span><span class="keyword">);<br /><br /></span><span class="comment">// print output<br /></span><span class="default">$mob</span><span class="keyword">-&gt;</span><span class="default">printOut</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />The Mobile class is stratup.<br /><br />I have a iPhone version 5 my device color is : Black<br /><br />Dumpping Mobile::deviceName to make sure its removed, Olay :<br />string 'Removed' (length=7)<br /><br />The Mobile class is shutdown.</span></code></div>
  </div>
 </div>
  <div class="note" id="95569">  <div class="votes">
    <div id="Vu95569">
    <a href="/manual/vote-note.php?id=95569&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95569">
    <a href="/manual/vote-note.php?id=95569&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95569" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#95569" class="name">
  <strong class="user"><em>Jonathon Hibbard</em></strong></a><a class="genanchor" href="#95569"> &para;</a><div class="date" title="2010-01-09 04:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95569">
<div class="phpcode"><code><span class="html">Please be aware of when using __destruct() in which you are unsetting variables...<br /><br />Consider the following code:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">my_class </span><span class="keyword">{<br />  public </span><span class="default">$error_reporting </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />  function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$error_reporting </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">error_reporting </span><span class="keyword">= </span><span class="default">$error_reporting</span><span class="keyword">;<br />  }<br /><br />  function </span><span class="default">__destruct</span><span class="keyword">() {<br />    if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">error_reporting </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">show_report</span><span class="keyword">();<br />    unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">error_reporting</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;<br /></span><br />The above will result in an error:<br />Notice: Undefined property: my_class::$error_reporting in my_class.php on line 10<br /><br />It appears as though the variable will be unset BEFORE it actually can execute the if statement.  Removing the unset will fix this.  It's not needed anyways as PHP will release everything anyways, but just in case you run across this, you know why ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="68028">  <div class="votes">
    <div id="Vu68028">
    <a href="/manual/vote-note.php?id=68028&amp;page=language.oop5.decon&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68028">
    <a href="/manual/vote-note.php?id=68028&amp;page=language.oop5.decon&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68028" title="47% like this...">
    -3
    </div>
  </div>
  <a href="#68028" class="name">
  <strong class="user"><em>Reza Mahjourian</em></strong></a><a class="genanchor" href="#68028"> &para;</a><div class="date" title="2006-07-10 02:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68028">
<div class="phpcode"><code><span class="html">Peter has suggested using static methods to compensate for unavailability of multiple constructors in PHP.  This works fine for most purposes, but if you have a class hierarchy and want to delegate parts of initialization to the parent class, you can no longer use this scheme.  It is because unlike constructors, in a static method you need to do the instantiation yourself.  So if you call the parent static method, you will get an object of parent type which you can't continue to initialize with derived class fields.<br /><br />Imagine you have an Employee class and a derived HourlyEmployee class and you want to be able to construct these objects out of some XML input too.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Employee </span><span class="keyword">{<br />   public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$inName</span><span class="keyword">) {<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$inName</span><span class="keyword">;<br />   }<br /><br />   public static function </span><span class="default">constructFromDom</span><span class="keyword">(</span><span class="default">$inDom</span><span class="keyword">)<br />   {<br />       </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$inDom</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;<br />       return new </span><span class="default">Employee</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />   }<br /><br />   private </span><span class="default">$name</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">HourlyEmployee </span><span class="keyword">extends </span><span class="default">Employee </span><span class="keyword">{<br />   public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$inName</span><span class="keyword">, </span><span class="default">$inHourlyRate</span><span class="keyword">) {<br />       </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$inName</span><span class="keyword">);<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hourlyRate </span><span class="keyword">= </span><span class="default">$inHourlyRate</span><span class="keyword">;<br />   }<br /><br />   public static function </span><span class="default">constructFromDom</span><span class="keyword">(</span><span class="default">$inDom</span><span class="keyword">)<br />   {<br />       </span><span class="comment">// can't call parent::constructFromDom($inDom)<br />       // need to do all the work here again<br />       </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$inDom</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;  </span><span class="comment">// increased coupling<br />       </span><span class="default">$hourlyRate </span><span class="keyword">= </span><span class="default">$inDom</span><span class="keyword">-&gt;</span><span class="default">hourlyrate</span><span class="keyword">;<br />       return new </span><span class="default">EmployeeHourly</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$hourlyRate</span><span class="keyword">);<br />   }<br /><br />   private </span><span class="default">$hourlyRate</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The only solution is to merge the two constructors in one by adding an optional $inDom parameter to every constructor.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.decon&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.decon.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
